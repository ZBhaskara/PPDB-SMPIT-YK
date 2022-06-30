<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function daftarformulir()
    {


        #function insert data pendaftar
        $data = [
            "nama_siswa"            => $this->input->post('nama_siswa', true),
            "nik_siswa"             => $this->input->post('nik_siswa', true),
            "tempatlahir_siswa"     => $this->input->post('tempatlahir_siswa', true),
            "tanggallahir_siswa"    => $this->input->post('tanggallahir_siswa', true),
            "agama_siswa"           => $this->input->post('agama_siswa', true),
            "prestasi"              => $this->input->post('prestasi', true),
            "jeniskelamin_siswa"    => $this->input->post('jeniskelamin_siswa', true),
            "status_keluarga"       => $this->input->post('status_keluarga', true),
            "id_prov"               => $this->input->post('id_prov', true),
            "id_kabupaten"          => $this->input->post('id_kabupaten', true),
            "id_kecamatan"          => $this->input->post('id_kecamatan', true),
            "alamat_siswa"          => $this->input->post('alamat_siswa', true),
            "asal_sekolah"          => $this->input->post('asal_sekolah', true),
            "nama_ayah"             => $this->input->post('nama_ayah', true),
            "agama_ayah"            => $this->input->post('agama_ayah', true),
            "pendidikan_ayah"       => $this->input->post('pendidikan_ayah', true),
            "pekerjaan_ayah"        => $this->input->post('pekerjaan_ayah', true),
            "penghasilan_ayah"      => $this->input->post('penghasilan_ayah', true),
            "nohp_ayah"             => $this->input->post('nohp_ayah', true),
            "nama_ibu"              => $this->input->post('nama_ibu', true),
            "agama_ibu"             => $this->input->post('agama_ibu', true),
            "pendidikan_ibu"        => $this->input->post('pendidikan_ibu', true),
            "penghasilan_ibu"       => $this->input->post('penghasilan_ibu', true),
            "nohp_ibu"              => $this->input->post('nohp_ibu', true),
            "nama_wali"             => $this->input->post('nama_wali', true),
            "agama_wali"            => $this->input->post('agama_wali', true),
            "pendidikan_wali"       => $this->input->post('pendidikan_wali', true),
            "pekerjaan_wali"        => $this->input->post('pekerjaan_wali', true),
            "penghasilan_wali"      => $this->input->post('penghasilan_wali', true),
            "nohp_wali"             => $this->input->post('nohp_wali', true),
            "email"                 => $this->input->post('email', true),
            "status_pendaftaran"    => 'Menunggu Verifikasi'
        ];
        $this->db->insert('formulir', $data);
        // input kode pendaftaar belom
    }

    public function getProvinsi()
    {   #function tampil data provinsi di select box
        return $this->db->get('tbl_provinsi')->result_array();
    }

    public function getKabupaten($id_prov)
    {   #function tampil data kabupaten di select box
        return $this->db->get_where('tbl_kabupaten', array('id_prov' => $id_prov))->result_array();
    }

    public function getKecamatan($id_kabupaten)
    {   #function tampil data kelurahan di select box
        return $this->db->get_where('tbl_kecamatan', array('id_kabupaten' => $id_kabupaten))->result_array();
    }

    public function getDataUiuser()
    {   #function tampil data provinsi di select box
        return $this->db->get('ui_homeuser')->row_array();
    }

    public function search_dataBynim($title)
    {
        $this->db->like('kode_pendaftaran', $title, 'both');
        $this->db->order_by('kode_pendaftaran', 'ASC');
        $this->db->limit(1);
        return $this->db->get('formulir')->result();
    }

    public function cetakBuktiDaftar($in_kode_pendaftaran)
    {   #function tampil data pendaftar by id
        $sql = "SELECT * from formulir JOIN tbl_provinsi ON formulir.id_prov=tbl_provinsi.id_prov join tbl_kabupaten on formulir.id_kabupaten=tbl_kabupaten.id_kabupaten  join tbl_kecamatan on formulir.id_kecamatan=tbl_kecamatan.id_kecamatan WHERE kode_pendaftaran = $in_kode_pendaftaran";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function cekData()
    {
        $nik_siswa = $this->input->post('nik_siswa');
        return $this->db->get_where('formulir', array('nik_siswa' => $nik_siswa))->row_array();
    }
}
