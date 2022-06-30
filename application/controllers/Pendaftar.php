<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
        $this->load->library('email');
    }


    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['provinsi'] = $this->User_model->getProvinsi();
        // $data['ui_homeuser'] = $this->User_model->getDataUiuser();
        $data['halaman_awal'] = $this->Admin_model->getAllDataInfoPendaftar();
        $data['img'] = $this->Admin_model->getimg();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_pendaftar', $data);
        $this->load->view('templates/topbar_pendaftar', $data);
        $this->load->view('pendaftar/index', $data);
        $this->load->view('templates/footer');
    }

    public function formpendaftaran()
    {
        $data['provinsi'] = $this->User_model->getProvinsi();
        $data['title'] = 'Pendaftaran';
        $this->load->model('Admin_model');
        $data['status']  = $this->Admin_model->get_dataPeriode();
        $data['formulir'] = $this->User_model->cekData();


        $this->form_validation->set_rules('nama_siswa', 'nama_siswa', 'required', array(
            'required' => 'Nama Lengkap tidak boleh kosong'
        ));

        $this->form_validation->set_rules('nik_siswa', 'nik_siswa', 'required|numeric', array(
            'required' => 'NIK tidak boleh kosong dan harus angka'
        ));

        $this->form_validation->set_rules('tempatlahir_siswa', 'tempatlahir_siswa', 'required', array(
            'required' => 'Tempat Lahir tidak boleh kosong'
        ));

        $this->form_validation->set_rules('tanggallahir_siswa', 'tanggallahir_siswa', 'required', array(
            'required' => 'Tanggal Lahir tidak boleh kosong'
        ));

        $this->form_validation->set_rules('agama_siswa', 'agama_siswa', 'required', array(
            'required' => 'Agama tidak boleh kosong'
        ));

        // $this->form_validation->set_rules('prestasi', 'wn_mhs', 'required', array(
        //     'required' => 'prestasi tidak boleh kosong'
        // ));

        $this->form_validation->set_rules('jeniskelamin_siswa', 'jeniskelamin_siswa', 'required', array(
            'required' => 'Jenis kelamin tidak boleh kosong'
        ));

        $this->form_validation->set_rules('id_prov', 'id_prov', 'required', array(
            'required' => 'Provinsi tidak boleh kosong'
        ));

        $this->form_validation->set_rules('id_kabupaten', 'id_kabupaten', 'required', array(
            'required' => 'Kabupaten tidak boleh kosong'
        ));

        $this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required', array(
            'required' => 'kecamatan tidak boleh kosong'
        ));

        $this->form_validation->set_rules('alamat_siswa', 'alamat_siswa', 'required', array(
            'required' => 'Alamat detail tidak boleh kosong'
        ));

        $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'required', array(
            'required' => 'Asal sekolah tidak boleh kosong'
        ));
        // =============================================================================================

        $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required', array(
            'required' => 'Nama ayah tidak boleh kosong'
        ));

        $this->form_validation->set_rules('agama_ayah', 'agama_ayah', 'required', array(
            'required' => 'Agama ayah tidak boleh kosong'
        ));

        $this->form_validation->set_rules('pendidikan_ayah', 'pendidikan_ayah', 'required', array(
            'required' => 'Pendidikan ayah tidak boleh kosong'
        ));

        $this->form_validation->set_rules('pekerjaan_ayah', 'pekerjaan_ayah', 'required', array(
            'required' => 'Pekerjaan ayah tidak boleh kosong'
        ));

        $this->form_validation->set_rules('penghasilan_ayah', 'penghasilan_ayah', 'required', array(
            'required' => 'Penghasilan ayah tidak boleh kosong'
        ));

        $this->form_validation->set_rules('nohp_ayah', 'wn_ayah', 'required|numeric', array(
            'required' => 'No Hp ayah tidak boleh kosong',
            'numeric'  => 'No Hp hanya boleh angka'
        ));
        // =============================================================================================
        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required', array(
            'required' => 'Nama ibu tidak boleh kosong'
        ));

        $this->form_validation->set_rules('agama_ibu', 'agama_ibu', 'required', array(
            'required' => 'Agama ibu tidak boleh kosong'
        ));
        $this->form_validation->set_rules('pendidikan_ibu', 'pendidikan_ibu', 'required', array(
            'required' => 'Pendidikan ibu tidak boleh kosong'
        ));
        $this->form_validation->set_rules('penghasilan_ibu', 'penghasilan_ibu', 'required', array(
            'required' => 'Penghasilan ibu tidak boleh kosong'
        ));
        $this->form_validation->set_rules('nohp_ibu', 'nohp_ibu', 'required|numeric', array(
            'required' => 'No Hp ibu tidak boleh kosong',
            'numeric'  => 'No Hp hanya boleh angka'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email Sudah Terdaftar',
            'required' => 'Email tidak boleh kosong'
        ]);


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar_pendaftar', $data);
            $this->load->view('templates/topbar_pendaftar', $data);
            $this->load->view('pendaftar/formpendaftaran1', $data);
            $this->load->view('templates/footer');
        } else {
            if ($data['formulir'] > 0) {

                $this->session->set_flashdata('flashgagal', 'Terdaftar');
                redirect('pendaftar/formpendaftaran');
            } else {
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size'] = '9000';
                $config['upload_path'] = './assets/img/3x4';
                $this->load->library('upload', $config);
                $upload_image = $this->upload->data('file_name');
                $upload_image2 = $this->upload->data('file_name');

                $upload_image  = $_FILES['image']['name'];
                $upload_image2 = $_FILES['raport']['name'];
                $upload_image3 = $_FILES['bprestasi']['name'];
                $upload_image4 = $_FILES['kk']['name'];
                $upload_image5 = $_FILES['akta']['name'];

                if ($upload_image && $upload_image2 != null) {
                    if ($this->upload->do_upload('image') && $this->upload->do_upload('raport') && $this->upload->do_upload('bprestasi') && $this->upload->do_upload('kk') && $this->upload->do_upload('akta')) {
                        $post['image']     = $this->upload->data('file_name');
                        $post['raport']     = $this->upload->data('file_name');
                        $post['bprestasi']  = $this->upload->data('file_name');
                        $post['kk']         = $this->upload->data('file_name');
                        $post['akta']       = $this->upload->data('file_name');

                        $in_kode_pendaftaran = $this->input->post('nik_siswa');
                        $sub_kode = substr($in_kode_pendaftaran, 10);
                        $date = date('Yd');
                        $subdate = substr($date, 2);

                        $kode_pendaftaran = $subdate . $sub_kode;


                        $this->db->set('kode_pendaftaran', $kode_pendaftaran);
                        $this->db->set('image', $upload_image);
                        $this->db->set('raport', $upload_image2);
                        $this->db->set('bprestasi', $upload_image3);
                        $this->db->set('kk', $upload_image4);
                        $this->db->set('akta', $upload_image5);

                        $this->User_model->daftarformulir();
                        $email_pendaftar = $this->input->post('email');
                        $nama_pendaftar = $this->input->post('nama_siswa');
                        $this->_sendEmail($email_pendaftar, $kode_pendaftaran, $nama_pendaftar);

                        $this->session->set_flashdata('flash', 'Terdaftar   ' . $kode_pendaftaran);
                        redirect('pendaftar/formpendaftaran');
                    } else {
                        $this->session->set_flashdata('flash', 'Terdaftar');
                        redirect('pendaftar/formpendaftaran');
                    }
                }
            }
        }
    }

    private function _sendEmail($email_pendaftar, $kode_pendaftaran, $nama_pendaftar)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ppdbsmpit3@gmail.com',
            'smtp_pass' => 'Ppdb2020',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        // $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from('ppdbsmpit3@gmail.com', 'Admin PPDB SMPIT');
        $this->email->to($email_pendaftar);
        $this->email->subject('Kode Pendaftaran');
        $this->email->message('

        <h4>Hello ' . $nama_pendaftar . '</h4>
        <p>Terimakasih telah melakukan pendaftaran online di SMPIT Yogyakarta</p>
        <p>Ini adalah kode pendaftaran kamu ' .  $kode_pendaftaran . '</p>
        <br>

        <p>Berikut adalah langkah langkah untuk melihat status pendaftaran kamu:</p>
        <p>1. Buka url website pendaftaran SMPIT di www.ppdb.com
        <p>2. Masuk ke menu cek status pendaftaran
        <p>3. Kemudian masukan kode pendaftaran yang telah di kirim ke email ini
        <p>4. Saat kamu memasukan kode pendaftaran, kode akan secara otomasit keluar pada list
        <p>5. Kemudian klik pada list kode pendaftaran anda, maka status pendaftaran akan tampil
        <p>6. Jika ingin mencetak, silakan klik button cetak bukti pendaftaran
        <p>7. Bukti pendaftaran hanya bisa di cetak saat status pendaftaran telah diterima
  
        <br>
        <br>
        <p>Terimakasih</p>
       ');

        if (!$this->email->send()) {
            echo $this->email->print_debugger();
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

    public function pengumumanPendaftaran()
    {
        $data['title'] = 'Cek Status Pendaftaran';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_pendaftar', $data);
        $this->load->view('templates/topbar_pendaftar', $data);
        $this->load->view('pendaftar/V_pengumuman', $data);
        $this->load->view('templates/footer');
    }

    public function get_autocomplete()
    {
        if (isset($_GET['term'])) {
            $result = $this->User_model->search_dataBynim($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = array(
                        'label' => $row->kode_pendaftaran,
                        'nama' => $row->nama_siswa,
                        'status' => $row->status_pendaftaran,
                        'ttl' => date('d F Y', strtotime($row->tanggallahir_siswa)),
                    );
                echo json_encode($arr_result);
            }
        }
    }
}
