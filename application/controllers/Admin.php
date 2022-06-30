<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model');
        $this->load->model('User_model');
        $this->load->model('Dashboard_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('Dashboard_model');
        $data['title']  = 'Dashboard';
        $data['id_siswa'] = $this->Dashboard_model->CountTotalPendaftar();
        $data['nik_siswa'] = $this->Dashboard_model->CountTotalPendaftardiTerima();
        $data['nama_siswa'] = $this->Dashboard_model->CountTotalPendaftardiTolak();
        $data['email']  = $this->Dashboard_model->CountAkunon();
        $data['provinsi'] = $this->User_model->getProvinsi();
        $data['Wanita'] = $this->Dashboard_model->CountTotalPendaftarW();
        $data['Pria'] = $this->Dashboard_model->CountTotalPendaftarP();
        $data['id']     = $this->db->get('user_menu')->result_array();
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    // public function role()
    // {
    //     $data['title'] = 'Akses Admin';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['role'] = $this->db->get('user_role', ['id' => 1])->result_array();
    //     $this->form_validation->set_rules('role', 'Role', 'required');

    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('admin/role', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $data = [
    //             'role' => $this->input->post('role')
    //         ];
    //         $this->db->insert('user_role', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //         New Sub Menu Add</div>');
    //         redirect('admin/role');
    //     }
    // }

    // public function roleAccess($role_id)
    // {
    //     $data['title'] = 'Role Access';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    //     $this->db->where('id !=', 1); //Menghilangkan Tampilan sub dashboard dalam UI admin
    //     $data['menu'] = $this->db->get('user_menu')->result_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar', $data);
    //     $this->load->view('templates/topbar', $data);
    //     $this->load->view('admin/role-access', $data);
    //     $this->load->view('templates/footer');
    // }

    // public function changeAccess()
    // {
    //     $menu_id = $this->input->post('menuId');
    //     $role_id = $this->input->post('roleId');

    //     $data = [
    //         'role_id' => $role_id,
    //         'menu_id' => $menu_id
    //     ];
    //     $result = $this->db->get_where('user_access_menu', $data);

    //     if ($result->num_rows() < 1) {
    //         $this->db->insert('user_access_menu', $data);
    //     } else {
    //         $this->db->delete('user_access_menu', $data);
    //     }

    //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    //         Access Change</div>');
    // }

    public function datapendaftar()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar';
        $data['formulir'] = $this->Admin_model->getAllDataPendaftar();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapendaftar', $data);
        $this->load->view('templates/footer');
    }

    public function hapusDataPendaftar($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusDataPendaftar($id);
        $this->session->set_flashdata('flash-hapus-pendaftar', 'Di Hapus');
        $this->load->view('templates/footer');
        redirect('admin/datapendaftar');
    }
    public function hapusDataPendaftarDItolak($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusDataPendaftar($id);
        $this->session->set_flashdata('flash-hapus-pendaftar', 'Di Hapus');
        $this->load->view('templates/footer');
        redirect('admin/datapendaftarDitolak');
    }
    public function hapusDataPendaftarDIterima($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusDataPendaftar($id);
        $this->session->set_flashdata('flash-hapus-pendaftar', 'Di Hapus');
        $this->load->view('templates/footer');
        redirect('admin/datapendaftarDiterima');
    }

    public function dataakun()
    {
        $data1['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Akun';
        $this->load->model('Admin_model');
        $data['user'] = $this->Admin_model->getAllDataUser();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data1);
        $this->load->view('admin/dataakun', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hapusDataUser($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusDataUser($id);
        $this->session->set_flashdata('flash', 'Di Hapus');
        $this->load->view('templates/footer');
        redirect('admin/dataakun');
    }

    public function updateDataAkun()
    {
        $this->load->model('Admin_model');
        $id = $this->input->post('id');
        $data = [
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "is_active" => $this->input->post('is_active')
        ];
        $this->Admin_model->updateDataAkun($id, $data);
        $this->session->set_flashdata('flash', 'Di Ubah');
        redirect('admin/dataakun');
    }

    public function periodependaftaran()
    {
        $data['title'] = 'Periode Pendaftaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['status']  = $this->Admin_model->get_dataPeriode();
        // $data['user_role'] = $this->db->get('role');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/periodependaftaran', $data);
        $this->load->view('templates/footer');
    }

    public function updateperiode()
    {
        $this->load->model('Admin_model');
        $id = $this->input->post('id');
        $data = [
            "status" => $this->input->post('status')
        ];
        $this->Admin_model->updateDataperiode($id, $data);
        $this->session->set_flashdata('flash', 'Di Perbaruhi');
        redirect('admin/periodependaftaran');
    }

    public function verifikasi()
    {
        $this->load->model('Admin_model');
        $id = $this->input->post('id_siswa');
        $this->Admin_model->verifikasiPendaftar($id);
        $this->session->set_flashdata('flash-verifikasi', ' Di Verifikasi');
        redirect('admin/datapendaftar');
    }

    public function datapendaftarDiterima()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Diterima';
        $data['formulir'] = $this->Admin_model->getAllDataPendaftarDiterima();
        $data['provinsi'] = $this->User_model->getProvinsi();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapendaftar_diterima', $data);
        $this->load->view('templates/footer');
    }

    public function datapendaftarDitolak()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Data Pendaftar Ditolak';
        $data['formulir'] = $this->Admin_model->getAllDataPendaftarDitolak();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/datapendaftar_ditolak', $data);
        $this->load->view('templates/footer');
    }

    public function updateinfoPendaftaran()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Update Info Pendaftaran';
        $data['ui_homeuser'] = $this->Admin_model->getAllDataInfo();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/updateinfo', $data);
        $this->load->view('templates/footer');
    }


    public function aksiUpdateInfo()
    {
        $data = [
            "opengelombang1"  => $this->input->post('opengelombang1'),
            "opengelombang2"  => $this->input->post('opengelombang2'),
            "opengelombang3"  => $this->input->post('opengelombang3'),
            "closegelombang1" => $this->input->post('closegelombang1'),
            "closegelombang2" => $this->input->post('closegelombang2'),
            "closegelombang3" => $this->input->post('closegelombang3'),
            "hasilgelombang1" => $this->input->post('hasilgelombang1'),
            "hasilgelombang2" => $this->input->post('hasilgelombang2'),
            "hasilgelombang3" => $this->input->post('hasilgelombang3'),
        ];

        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';
            $config['upload_path'] = './assets/img/info';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['user']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/info/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->update('ui_homeuser', $data);
        $this->session->set_flashdata('flash', 'Di Perbaruhi');
        redirect('admin/updateinfoPendaftaran');
    }


    public function eidtPendaftarditerima($id_siswa)

    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['formulir'] = $this->Admin_model->getPendaftarById($id_siswa);
        $data['provinsi'] = $this->User_model->getProvinsi();
        $data['title'] = 'Edit data Pendaftaran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_pendaftar', $data);
        $this->load->view('templates/footer', $data);
    }

    public function aksiEditDatasiswa()
    {

        $id = $this->input->post('id_siswa');
        $this->load->model('Admin_model');

        $this->Admin_model->editPendaftar($id);
        $this->session->set_flashdata('flash-update', ' Di Perbarui');
        redirect('admin/datapendaftarDiterima');
    }


    public function updateinfoPendaftaran1()
    {
        $this->form_validation->set_rules('gelombang', 'gelombang', 'required', array(
            'required' => 'Gelombang tidak boleh kosong'
        ));

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Update info pendaftaran';
        $data['halaman_awal'] = $this->Admin_model->getAllDataInfoPendaftar();
        $data['img'] = $this->Admin_model->getimg();


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/update_info', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Admin_model->tambahGelombang();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/updateinfoPendaftaran1');
        }
    }


    public function hapusDatainfo($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusDatainfo($id);
        $this->session->set_flashdata('flash', 'dihapus');
        $this->load->view('templates/footer');
        redirect('admin/updateinfoPendaftaran1');
    }


    public function updateGelombang()
    {
        $id = $this->input->post('id');
        $this->load->model('Admin_model');
        $this->Admin_model->editGelombang($id);
        $this->session->set_flashdata('flash', 'diperbarui');
        redirect('admin/updateinfoPendaftaran1');
    }

    public function aksiUpdateimg()
    {
        $this->form_validation->set_rules('image', 'image', 'required', array(
            'required' => 'Pilih gambar terlebih dahulu'
        ));

        if (empty($_FILES['image']['name'])) {
            $this->session->set_flashdata('flash-img-gagal', 'Gagal di perbarui');
            redirect('admin/updateinfoPendaftaran1');
        } else {

            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '9000';
                $config['upload_path'] = './assets/img/info';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $upload_image = $this->upload->data('file_name');
                    $this->db->set('image', $upload_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->update('halaman_awalimg');
            $this->session->set_flashdata('flash-img', 'diperbarui');
            redirect('admin/updateinfoPendaftaran1');
        }
    }
}
