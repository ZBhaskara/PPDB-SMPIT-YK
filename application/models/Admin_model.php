<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getAllDataPendaftar()
    {   #function tamil data all dari tabel formulir ,tbl_kabupaten dan tbl_provinsi
        $sql = "SELECT * from formulir JOIN tbl_provinsi ON formulir.id_prov=tbl_provinsi.id_prov join tbl_kabupaten on formulir.id_kabupaten=tbl_kabupaten.id_kabupaten join tbl_kecamatan on formulir.id_kecamatan=tbl_kecamatan.id_kecamatan where status_pendaftaran = 'Menunggu Verifikasi' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getAllDataPendaftarDiterima()
    {   #function tamil data all dari tabel formulir ,tbl_kabupaten dan tbl_provinsi
        $sql = "SELECT * from formulir JOIN tbl_provinsi ON formulir.id_prov=tbl_provinsi.id_prov join tbl_kabupaten on formulir.id_kabupaten=tbl_kabupaten.id_kabupaten join tbl_kecamatan on formulir.id_kecamatan=tbl_kecamatan.id_kecamatan where status_pendaftaran = 'Diterima' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getAllDataPendaftarDitolak()
    {   #function tamil data all dari tabel formulir ,tbl_kabupaten dan tbl_provinsi
        $sql = "SELECT * from formulir JOIN tbl_provinsi ON formulir.id_prov=tbl_provinsi.id_prov join tbl_kabupaten on formulir.id_kabupaten=tbl_kabupaten.id_kabupaten join tbl_kecamatan on formulir.id_kecamatan=tbl_kecamatan.id_kecamatan where status_pendaftaran = 'Ditolak' ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function getPendaftarById($id)
    {   #function tampil data pendaftar by id
        $sql = "SELECT * from formulir JOIN tbl_provinsi ON formulir.id_prov=tbl_provinsi.id_prov join tbl_kabupaten on formulir.id_kabupaten=tbl_kabupaten.id_kabupaten  join tbl_kecamatan on formulir.id_kecamatan=tbl_kecamatan.id_kecamatan WHERE id_siswa=$id";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function hapusDataPendaftar($id)
    {   #function hapus data pendaftar byid
        $this->db->where('id_siswa', $id);
        $this->db->delete('formulir');
    }

    public function hapusDatainfo($id)
    {   #function hapus data iformasi byid
        $this->db->where('id', $id);
        $this->db->delete('halaman_awal');
    }

    public function getAllDataUser()
    {   #function tampil semua data user/akun
        return $this->db->get('user')->result_array();
    }

    public function hapusDataUser($id)
    {   #function hapus data pendaftar byid
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getUserById($id)
    {   #function tampil data user by id
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function updateDataAkun($id, $data)
    {   #function update data akun
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function updateDataperiode($id, $data)
    {   #function update data akun
        $data = [
            "status" => $this->input->post('status', true),
        ];
        $this->db->where('id', $id);
        $this->db->update('periode', $data);
    }

    public function get_dataPeriode()
    {   #function tampil semua data user/akun
        return $this->db->get('periode')->row_array();
    }

    public function verifikasiPendaftar($id)
    {   #function update data akun
        $data = [
            "status_pendaftaran" => $this->input->post('status_pendaftaran'),
        ];
        $this->db->where('id_siswa', $id);
        $this->db->update('formulir', $data);
    }

    public function getAllDataInfo()
    {   #function tampil semua data user/akun
        return $this->db->get('ui_homeuser')->row_array();
    }

    public function getAllDataInfoPendaftar()
    {   #function tampil semua data user/akun
        return $this->db->get('halaman_awal')->result_array();
    }

    public function editPendaftar($id)
    {   #function update data pendaftar
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

        ];

        $upload_image = $_FILES['image']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '9000';
            $config['upload_path'] = './assets/img/3x4';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $data['formulir']['image'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/3x4/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->where('id_siswa', $id);
        $this->db->update('formulir', $data);
    }

    public function tambahGelombang()
    {
        #function tambah data gelombang

        $data = [
            'gelombang' => $this->input->post('gelombang'),
            'buka' => $this->input->post('buka'),
            'tutup' => $this->input->post('tutup'),
            'hasil' => $this->input->post('hasil'),
            'warna' => $this->input->post('warna')
        ];
        $this->db->insert('halaman_awal', $data);
    }

    public function editGelombang($id)
    {
        $data = [
            'gelombang' => $this->input->post('gelombang'),
            'buka' => $this->input->post('buka'),
            'tutup' => $this->input->post('tutup'),
            'hasil' => $this->input->post('hasil'),
            'warna' => $this->input->post('warna')
        ];
        $this->db->where('id', $id);
        $this->db->update('halaman_awal', $data);
    }

    public function getimg()
    {   #function tampil gambar informasi pendaftaran
        return $this->db->get('halaman_awalimg')->row_array();
    }
}
