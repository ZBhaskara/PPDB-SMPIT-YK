<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('Admin_model');
        $this->load->Model('User_model');
        $this->load->library('pdf');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->Ln();
        $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 9, 'SMP ISLAM TERPADU NURUL ISLAM', 0, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(190, 3, 'Gumuk, Sidoarum, Godean, Besi, Sidoarum, Kec. Sleman, Kabupaten Sleman', 0, 1, 'C');
        $pdf->Cell(190, 7, 'Daerah Istimewa Yogyakarta 55264', 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'TAHUN 2020 ' . date('Y'), 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 2, '__________________________________________________________________________', 0, 1, 'C');
        $pdf->Ln(4);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 5, 'REKAP DATA PENDAFTAR', 0, 1, 'C');


        $pdf->Ln(4);
        $pdf->Cell(10, 6, '', 0, 10, 'C');
        $pdf->SetFont('Arial', 'B', 8);
        $pdf->Cell(10, 6, 'NO', 1, 0, 'C');
        $pdf->Cell(30, 6, 'NAMA SISWA', 1, 0, 'C');
        $pdf->Cell(30, 6, 'NIK', 1, 0, 'C');
        $pdf->Cell(30, 6, 'JENIS KELAMIN', 1, 0, 'C');
        $pdf->Cell(30, 6, 'ASAL SEKOLAH', 1, 0, 'C');
        $pdf->Cell(30, 6, 'PRESTASI', 1, 0, 'C');
        $pdf->Cell(30, 6, 'TANGGAL LAHIR', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 7);

        $pendaftar = $this->Admin_model->getAllDataPendaftarDiterima();
        $i = 1;
        foreach ($pendaftar as $p) {
            $pdf->Cell(10, 6, $i, 1, 0, 'C');
            $pdf->Cell(30, 6, $p['nama_siswa'], 1, 0, '');
            $pdf->Cell(30, 6, $p['nik_siswa'], 1, 0, 'C');
            $pdf->Cell(30, 6, $p['jeniskelamin_siswa'], 1, 0, 'C');
            $pdf->Cell(30, 6, $p['asal_sekolah'], 1, 0, 'C');
            $pdf->Cell(30, 6, $p['prestasi'], 1, 0, 'C');
            $pdf->Cell(30, 6, $p['tanggallahir_siswa'], 1, 1, 'C');
            $i++;
        }


        $pdf->Output('I', 'Data Pendaftar', '');
    }

    public function cetakdatabyid($id)
    {
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->Ln();
        $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(190, 9, 'SMP ISLAM TERPADU NURUL ISLAM', 0, 1, 'C');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(190, 3, 'Gumuk, Sidoarum, Godean, Besi, Sidoarum, Kec. Sleman, Kabupaten Sleman', 0, 1, 'C');
        $pdf->Cell(190, 7, 'Daerah Istimewa Yogyakarta 55264', 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 7, 'TAHUN ' . date('Y'), 0, 1, 'C');

        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 2, '__________________________________________________________________________', 0, 1, 'C');
        $pdf->Ln(4);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(190, 5, 'FORMULIR PENDAFTAR ONLINE', 0, 1, 'C');
        $pdf->Cell(190, 5, 'SISWA BARU', 0, 1, 'C');


        $p = $this->Admin_model->getPendaftarById($id);

        $pdf->Image('./assets/img/3x4/' . $p['image'], 150, 67, -1000);

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(13, 63, 'A. DATA SISWA');
        #==================================================================================================

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 70, 'Nama Siswa');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 70, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 70, $p['nama_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 78, 'NISN');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 78, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 78, $p['nik_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 86, 'Tempat Lahir');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 86, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 86, $p['tempatlahir_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 94, 'Tanggal Lahir');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 94, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 94, $p['tanggallahir_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 102, 'Agama');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 102, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 102, $p['agama_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 110, 'Jenis Kelamin');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 110, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 110, $p['jeniskelamin_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 118, 'Provinsi Asal');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 118, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 118, $p['nama_provinsi']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 126, 'Kabupaten Asal');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 126, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 126, $p['nama_kabupaten']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 134, 'Asal Sekolah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 134, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 134, $p['asal_sekolah']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 142, 'Kecamatan');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 142, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 142, $p['nama_kecamatan']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 150, 'Alamat detail');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 150, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 150, $p['alamat_siswa']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 158, 'Kode Pos');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 158, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 158, '222');

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 166, 'Prestasi');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 166, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 166, $p['prestasi']);

        #=====================================================================================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(13, 174, 'B. DATA AYAH SISWA');

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 182, 'Nama Ayah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 182, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 182, $p['nama_ayah']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 190, 'Agama Ayah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 190, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 190, $p['agama_ayah']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 198, 'Pendidikan Ayah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 198, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 198, $p['nama_ayah']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 206, 'Pekerjaan Ayah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 206, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 206, $p['pekerjaan_ayah']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 214, 'Penghasilan Ayah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 214, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 214, $p['penghasilan_ayah']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 222, 'No Hp Ayah');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 222, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 222, $p['nohp_ayah']);

        #===================================================================================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(13, 230, 'C. DATA IBU SISWA');

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 238, 'Nama Ibu');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 238, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 238, $p['nama_ibu']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 246, 'Agama Ibu');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 246, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 246, $p['agama_ibu']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 254, 'Pendidikan Ibu');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 254, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 254, $p['pendidikan_ibu']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 262, 'Penghasilan Ibu');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 262, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 262, $p['penghasilan_ibu']);

        #=============================================
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(18, 270, 'No hp Ibu');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(55, 270, ':');

        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(65, 270, $p['nohp_ibu']);


        $pdf->Output('I', $p['nama_siswa'], '');
    }


    public function cetak()
    {
        $in_kode_pendaftaran    = $this->input->post('id_siswa');
        $p                      = $this->User_model->cetakBuktiDaftar($in_kode_pendaftaran);
        $data['formulir']       = $this->User_model->cekData();

        $this->form_validation->set_rules('id_siswa', 'id_siswa', 'required|trim|min_length[10]|max_length[10]|numeric', [
            'min_length' => 'Nisn kurang..!',
            'max_length' => 'Nisn Lebih..!',
            'required' => 'Nisn harus di isi..!'
        ]);


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash', 'NISN Tidak Valid');
            redirect('pendaftar/pengumumanPendaftaran');
        } else {
            if ($p['status_pendaftaran'] == 'Menunggu Verifikasi') {
                $this->session->set_flashdata('flash', 'Status Pendaftaran Belum Di Verifikasi');
                redirect('Pendaftar/pengumumanPendaftaran');
            }
            if ($p['status_pendaftaran'] == 'Ditolak') {
                $this->session->set_flashdata('flash', 'Anda Tidak Di Terima');
                redirect('Pendaftar/pengumumanPendaftaran');
            } else {
                if ($data['formulir'] < 1) {

                    $pdf = new FPDF('P', 'mm', 'A4');
                    $pdf->AddPage();
                    $pdf->Ln();
                    $pdf->Image('./assets/img/logo/logo.png', 17, 10, -350);
                    $pdf->SetFont('Arial', 'B', 16);
                    $pdf->Cell(190, 9, 'SMP ISLAM TERPADU NURUL ISLAM', 0, 1, 'C');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Cell(190, 3, 'Gumuk, Sidoarum, Godean, Besi, Sidoarum, Kec. Sleman, Kabupaten Sleman', 0, 1, 'C');
                    $pdf->Cell(190, 7, 'Daerah Istimewa Yogyakarta 55264', 0, 1, 'C');

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Cell(190, 7, 'TAHUN ' . date('Y'), 0, 1, 'C');

                    $pdf->SetFont('Arial', 'B', 12);
                    $pdf->Cell(190, 2, '__________________________________________________________________________', 0, 1, 'C');
                    $pdf->Ln(4);

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Cell(190, 5, 'BUKTI PENDAFTARAN SISWA BARU', 0, 1, 'C');



                    $pdf->Image('./assets/img/3x4/' . $p['image'], 145, 67, -1000);
                    #==================================================================================================

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Text(18, 70, 'Nama Siswa');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(55, 70, ':');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(65, 70, $p['nama_siswa']);

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Text(18, 78, 'Kode Pendaftaran');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(55, 78, ':');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(65, 78, $p['kode_pendaftaran']);

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Text(18, 86, 'Tanggal Lahir');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(55, 86, ':');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(65, 86,  date('d F Y', strtotime($p['tanggallahir_siswa'])));

                    $pdf->SetFont('Arial', 'B', 10);
                    $pdf->Text(18, 94, 'Asal Sekolah');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(55, 94, ':');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(65, 94, $p['asal_sekolah']);


                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(18, 110, 'Menyatakan pendaftar dengan nama di atas telah di terima sebagai siswa baru di SMPIT Yogyakarta TA ' . date('Y') . ',');
                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(18, 115, 'diharap untuk segera melakukan registrasi kepada pihak sekolah.');

                    $pdf->SetFont('Arial', '', 10);
                    $pdf->Text(150, 135, 'Yogyakarta, ' . date('d F Y'));
                    $pdf->Text(150, 140, 'Ketua panitia PPDB');
                    $pdf->Text(150, 160, 'Andika Riski S.apa');
                    #====================================================================================================
                    $pdf->Output('I', $p['nama_siswa'], '');
                } else {
                    $this->session->set_flashdata('flash', 'NISN Tidak Terdaftar');
                    redirect('pendaftar/pengumumanPendaftaran');
                }
            }
        }
    }
}
