<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function CountTotalPendaftar()
    {   #function count data pendaftar yang belum di verifikasi
        $sql = "SELECT Count(id_siswa) as jumlah from formulir where status_pendaftaran = 'Menunggu Verifikasi'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }
    public function CountTotalPendaftardiTerima()
    {   #function count data pendaftar yang telah di terima
        $sql = "SELECT Count(nik_siswa) as diterima from formulir where status_pendaftaran = 'Diterima'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }
    public function CountTotalPendaftardiTolak()
    {   #function count data pendaftar di tolak
        $sql = "SELECT Count(nama_siswa) as tdkditerima from formulir where status_pendaftaran = 'Ditolak'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function CountTotalPendaftarW()
    {   #function count total pendaftar wanita
        $sql = "SELECT Count(tempatlahir_siswa) as Wanita from formulir where jeniskelamin_siswa = 'Wanita'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }
    public function CountTotalPendaftarP()
    {   #function count total pendaftar pria
        $sql = "SELECT Count(jeniskelamin_siswa) as Pria from formulir where jeniskelamin_siswa = 'Pria'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function CountAkunon()
    {   #function count data akun yang terdaftar
        $sql = "SELECT Count(email) as jumlahon from user where is_active=1";
        $result = $this->db->query($sql);
        return $result->row_array();
    }
}
