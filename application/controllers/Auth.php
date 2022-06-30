<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public  function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'required' => 'Email Harus di isi..!',
            'valid_email' => 'Email tidak valid..!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', ['required' => 'Password Harus di isi..!']);
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
            die;
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            //Jika user ada dalam database
            if ($user['is_active'] == 1) { //cek apakah user sudah aktif
                //chech passwordnya
                if (password_verify($password, $user['password'])) { //cek password yg di input dengan database
                    $data = [
                        'email'   => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) { //cek role
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password Anda Salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Akun Tidak Aktif</div>');
                redirect('auth');
            }
        } else {
            //Jika user tidak ada dalam database
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email Belum Terdaftar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('name', 'Name', 'required|trim', ['required' => 'Nama Harus di isi..!']);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Sudah Terdaftar..!',
            'required' => 'Email harus di isi..!'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password Tidak sama..!',
            'min_length' => 'Password Kurang panjang..!',
            'required' => 'Password harus di isi..!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'required' => 'Password harus di isi..!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registrasi';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name'        => htmlspecialchars($this->input->post('name', true)),
                'email'       => htmlspecialchars($this->input->post('email', true)),
                'image'       => 'default.png',
                'password'    => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'     => 1,
                'is_active'   => 0,
                'date_create' => time()
            ];
            $this->db->insert('user', $data);
            //$this->_sendEmail();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Succes Register</div>');
            redirect('auth');
        }
    }

    private function _sendEmail()
    {
        $config = [
            'protocol'  => 'smtp',
            'useragent' => 'Codeigniter',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ppdbsmpit3@gmail.com',
            'smtp_pass' => 'Ppdb2020',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->from('ppdbsmpit3@gmail.com');
        $this->email->to('andikariski207@gmail.com');
        $this->email->subject('Testing');
        $this->email->message('Hello Word');
        $this->email->initialize($config);
        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        redirect('pendaftar');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
