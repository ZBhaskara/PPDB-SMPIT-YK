<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('email')) {
        //     redirect('auth');
        // }
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Profile Saya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['user_role'] = $this->db->get('role');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            //cek jika ada image yang di ubah
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '9000';
                $config['upload_path'] = './assets/img/profile';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Update Data Succesfull</div>');
            redirect('user');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('curent_password', 'Curent Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'Curent Password', 'required|trim|min_length[5]');
        $this->form_validation->set_rules('new_password2', 'Curent Password', 'required|trim|min_length[5]|matches[new_password1]', [
            'matches' => 'Repeat password salah !'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $curent_password = $this->input->post('curent_password'); //ambil inputan curent password
            $new_password = $this->input->post('new_password1'); //ambil inputan password 1
            if (!password_verify($curent_password, $data['user']['password'])) { //cek password lama dengan yang baru input
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password ..!</div>');
                redirect('user/changepassword');
            } else {
                if ($curent_password == $new_password) { //password baru tidak boleh sama dengan yang baru
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password baru sama ..!</div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash); //set password baru dengan hash
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password berhasil di ubah ..!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function getkabupaten()
    {
        $this->load->model('User_model');
        $id_prov = $this->input->post('id_prov');
        $kabupaten = $this->User_model->getKabupaten($id_prov);

        if (count($kabupaten) > 0) {
            $kab_select_box = '';
            $kab_select_box .= '<option value="">Pilih Kabupaten/Kota</option>';
            foreach ($kabupaten as $kab) {
                $kab_select_box .= '<option value="' . $kab['id_kabupaten'] . '">' . $kab['nama_kabupaten'] . '</option>';
            }
            echo json_encode($kab_select_box);
        }
    }

    public function getkecamatan()
    {
        $this->load->model('User_model');
        $id_kabupaten = $this->input->post('id_kabupaten');
        $kecamatan = $this->User_model->getKecamatan($id_kabupaten);

        if (count($kecamatan) > 0) {
            $kec_select_box = '';
            $kec_select_box .= '<option value="">Pilih Kecamatan</option>';
            foreach ($kecamatan as $kec) {
                $kec_select_box .= '<option value="' . $kec['id_kecamatan'] . '">' . $kec['nama_kecamatan'] . '</option>';
            }
            echo json_encode($kec_select_box);
        }
    }
}
