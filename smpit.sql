-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 03:43 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpit`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nik_siswa` varchar(100) NOT NULL,
  `tempatlahir_siswa` varchar(100) NOT NULL,
  `tanggallahir_siswa` date NOT NULL,
  `agama_siswa` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `jeniskelamin_siswa` varchar(100) NOT NULL,
  `status_keluarga` varchar(100) NOT NULL,
  `id_prov` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_kecamatan` varchar(50) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `agama_ayah` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `nohp_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `agama_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `nohp_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `agama_wali` varchar(100) NOT NULL,
  `pendidikan_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(100) NOT NULL,
  `penghasilan_wali` varchar(100) NOT NULL,
  `nohp_wali` varchar(100) NOT NULL,
  `status_pendaftaran` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `raport` varchar(100) NOT NULL,
  `bprestasi` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `akta` varchar(100) NOT NULL,
  `kode_pendaftaran` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id_siswa`, `nama_siswa`, `nik_siswa`, `tempatlahir_siswa`, `tanggallahir_siswa`, `agama_siswa`, `prestasi`, `jeniskelamin_siswa`, `status_keluarga`, `id_prov`, `id_kabupaten`, `id_kecamatan`, `alamat_siswa`, `asal_sekolah`, `nama_ayah`, `agama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nohp_ayah`, `nama_ibu`, `agama_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `nohp_ibu`, `nama_wali`, `agama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `nohp_wali`, `status_pendaftaran`, `image`, `raport`, `bprestasi`, `kk`, `akta`, `kode_pendaftaran`, `email`) VALUES
(83, 'twtwe', '5555555555555555', 'rwerwe', '2020-08-11', 'Islam', 'fsdfd', 'Pria', 'dsfd', 37, 54, '87', 'fsdfsdf', 'fsdfs', 'fsdfsd', 'Kristen', 'SMP Sederajat', 'fsdf', 'Rp 1.000.000,00 - Rp 2.500.000,00', '34534', 'fsdfsdf', 'Kristen', 'SMP Sederajat', 'Rp 1.000.000,00 - Rp 2.500.000,00', '53534', 'fsdfd', 'Katolik', 'SMA Sederajat', 'fsdfsd', 'Rp 1.000.000,00 - Rp 2.500.000,00', '534534', 'Menunggu Verifikasi', 'artikel.png', 'berita.png', 'dashboard.png', 'ektp.png', 'ektp2.png', '2004555555', 'andikariski207@gmail.com'),
(84, 'adasdas', '4444444444444444', 'fsdfsd', '2020-08-19', 'Islam', 'fsdfsd', 'Pria', 'fsdfsd', 36, 50, '14', 'dsadasdas', 'fsdfsd', 'dfsdfsd', 'Budha', 'SMA Sederajat', 'dsfsdfsd', 'Rp 1.000.000,00 - Rp 2.500.000,00', '32423423', 'fadfasdf', 'Katolik', 'SMA Sederajat', 'Rp 2.500.000,00 - Rp 5.000.000,00', '42432', 'dsadas', 'Kristen', 'SMA Sederajat', 'dasdas', 'Rp 1.000.000,00 - Rp 2.500.000,00', '423432', 'Menunggu Verifikasi', 'artikel.png', 'berita.png', 'dashboard.png', 'ektp.png', 'ektp2.png', '2004444444', 'andikariski207@gmail.com'),
(85, 'Fitria Nuraini', '1700018174234859', 'sdgsg', '2020-08-17', 'Islam', 'fsdfsd', 'Wanita', 'dsfsdfsdf', 36, 50, '14', 'sgsg', 'fsdfs', 'fsdfsd', 'Kristen', 'SMP Sederajat', 'fdsfd', 'Rp 1.000.000,00 - Rp 2.500.000,00', '5435345', 'fgdsgsd', 'Islam', 'SMA Sederajat', 'Rp 1.000.000,00 - Rp 2.500.000,00', '3636', 'gfsdgfs', 'Islam', 'Strata 1', 'gfsdgsfd', 'Rp 2.500.000,00 - Rp 5.000.000,00', '34534', 'Menunggu Verifikasi', 'artikel.png', 'berita.png', 'dashboard.png', 'ektp.png', 'ektp2.png', '2005234859', 'mandika1700018174@webmail.uad.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_awal`
--

CREATE TABLE `halaman_awal` (
  `id` int(11) NOT NULL,
  `gelombang` varchar(100) NOT NULL,
  `buka` date NOT NULL,
  `tutup` date NOT NULL,
  `hasil` date NOT NULL,
  `warna` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_awal`
--

INSERT INTO `halaman_awal` (`id`, `gelombang`, `buka`, `tutup`, `hasil`, `warna`) VALUES
(14, 'gelombang I', '2020-08-31', '2020-08-31', '2020-08-31', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_awalimg`
--

CREATE TABLE `halaman_awalimg` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_awalimg`
--

INSERT INTO `halaman_awalimg` (`id`, `image`) VALUES
(1, 'infopendaftaran11.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `status`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(100) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL,
  `id_prov` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `nama_kabupaten`, `id_prov`) VALUES
(50, 'Merauke', 36),
(51, 'Timika', 36),
(52, 'Sleman', 37),
(53, 'Bantul', 37),
(54, 'Gunung Kidul', 37),
(55, 'Kulon Progo', 37),
(56, 'Yogyakarta Kota', 37),
(62, 'Klaten', 38);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kecamatan`
--

CREATE TABLE `tbl_kecamatan` (
  `id_kecamatan` int(100) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `id_kabupaten` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kecamatan`
--

INSERT INTO `tbl_kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(1, 'Tanah Miring', 50),
(2, 'Turi', 52),
(3, 'Tembagapura', 51),
(4, 'Sewon', 53),
(5, 'Merauke', 50),
(6, 'Muting', 50),
(7, 'Okaba', 50),
(8, 'Kimaam', 50),
(9, 'Semangga', 50),
(10, 'Jagobeb', 50),
(11, 'Sota', 50),
(12, 'Ulilin', 50),
(13, 'Elikobal', 50),
(14, 'Kurik', 50),
(15, 'Naukenjerai', 50),
(16, 'Animha', 50),
(17, 'Malind', 50),
(18, 'Tubang', 50),
(19, 'Ngguti', 50),
(20, 'Kaptel', 50),
(21, 'Tabonji', 50),
(22, 'Waan', 50),
(23, 'Iwalayab', 50),
(24, 'Berbah', 52),
(25, 'Cangkringan', 52),
(26, 'Depok', 52),
(27, 'Gamping', 52),
(28, 'Godean', 52),
(29, 'Kalasan', 52),
(30, 'Minggir', 52),
(31, 'Mlati', 52),
(32, 'Moyudan', 52),
(33, 'Ngaglik', 52),
(34, 'Ngemplak', 52),
(35, 'Pakem', 52),
(36, 'Prambanan', 52),
(37, 'Seyegan', 52),
(38, 'Sleman', 52),
(39, 'Tempel', 52),
(40, 'Bambanglipuro', 53),
(41, 'Banguntapan', 53),
(42, 'Bantul', 53),
(43, 'Dlingo', 53),
(44, 'Imogiri', 53),
(45, 'Jetis', 53),
(46, 'Kasihan', 53),
(47, 'Kretek', 53),
(48, 'Pajangan', 53),
(49, 'Pandak', 53),
(50, 'Piyungan', 53),
(51, 'Pleret', 53),
(52, 'Pundong', 53),
(53, 'Sanden', 53),
(54, 'Sedayu', 53),
(55, 'Srandakan', 53),
(56, 'Danurejan', 56),
(57, 'Gedongtengen', 56),
(58, 'Gondomanan', 56),
(59, 'Gondokusuman', 56),
(60, 'Jetis', 56),
(61, 'Kota Gede', 56),
(62, 'Kraton', 56),
(63, 'Mantrijeron', 56),
(64, 'Mergangsan', 56),
(65, 'Ngampilan', 56),
(66, 'Pakualaman', 56),
(67, 'Tegalrejo', 56),
(68, 'Umbulharjo', 56),
(69, 'Wirobrajan', 56),
(70, 'Galur', 55),
(71, 'Girimulyo', 55),
(72, 'Kalibawang', 55),
(73, 'Kokap', 55),
(74, 'Lendah', 55),
(75, 'Nanggulan', 55),
(76, 'Panjatan', 55),
(77, 'Pengasih', 55),
(78, 'Samigaluh', 55),
(79, 'Sentolo', 55),
(80, 'Temon', 55),
(81, 'Wates', 55),
(82, 'Gedangsari', 54),
(83, 'Girisubo', 54),
(84, 'Karangmojo', 54),
(85, 'Ngawen', 54),
(86, 'Nglipar', 54),
(87, 'Paliyan', 54),
(88, 'Panggang', 54),
(89, 'Patuk', 54),
(90, 'Playen', 54),
(91, 'Ponjong', 54),
(92, 'Purwosari', 54),
(93, 'Rongkop', 54),
(94, 'Saptosari', 54),
(95, 'Semanu', 54),
(96, 'Semin', 54),
(97, 'Tanjungsari', 54),
(98, 'Tepus', 54),
(99, 'Wonosari', 54);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_prov` int(100) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_prov`, `nama_provinsi`) VALUES
(36, 'Papua'),
(37, 'DIY'),
(38, 'Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(14, 'M Andika Riski', 'dika@gmail.com', 'M-Adhika-Riski1.jpg', '$2y$10$uWQT3YsjtyGMj0VJxRBxv.fYgyre4Ose3FL5ar6y/vb8IRgWBK/82', 1, 1, 1585638900);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(3, 1, 1),
(7, 2, 2),
(38, 1, 3),
(51, 9, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'pengaturan'),
(12, 'pendaftar');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administator'),
(2, 'Member'),
(9, 'Pendaftar');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 12, 'Halaman Utama', 'pendaftar', 'fas fa-fw fa-tachometer-alt', 1),
(5, 3, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(7, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder-open', 1),
(8, 3, 'Sub Menu Management', 'menu/submenu', 'fas fa-fw fa-folder', 1),
(14, 3, 'Akses Admin', 'admin/role', 'fas fa-fw fa-sync-alt', 1),
(15, 3, 'Ganti Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(17, 12, 'Pendaftaran', 'pendaftar/formpendaftaran', 'fab fa-fw fas fa-edit', 1),
(18, 1, 'Data Pendaftar', 'admin/datapendaftar', 'fas fa-fw fa-address-book', 1),
(21, 3, 'Periode Pendaftaran', 'admin/periodependaftaran', 'fas fa-fw fa-calendar-alt', 1),
(22, 12, 'Cek Status Pendaftaran', 'pendaftar/pengumumanPendaftaran', 'fas fa-fw fa-file-alt', 1),
(23, 1, 'Data Pendaftar Diterima', 'admin/datapendaftarDiterima', 'fas fa-fw fa-user-check', 1),
(24, 1, 'Data Pendaftar Ditolak', 'admin/datapendaftarDitolak', 'fas fa-fw fa-user-times', 1),
(25, 1, 'Data Akun', 'admin/dataakun', 'fas fa-fw fa-user-circle', 1),
(26, 3, 'Update Info Pendaftaran', 'admin/updateinfoPendaftaran', 'fas fa-fw fa-newspaper', 1),
(27, 3, 'Update info pendaftaran', 'admin/updateinfoPendaftaran1', 'fas fa-fw fa-folder-open', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_kabupaten` (`id_kabupaten`),
  ADD KEY `id_kelurahan` (`id_kecamatan`),
  ADD KEY `id_prov` (`id_prov`,`id_kabupaten`) USING BTREE;

--
-- Indexes for table `halaman_awal`
--
ALTER TABLE `halaman_awal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman_awalimg`
--
ALTER TABLE `halaman_awalimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD KEY `id_prov` (`id_prov`);

--
-- Indexes for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `halaman_awal`
--
ALTER TABLE `halaman_awal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `halaman_awalimg`
--
ALTER TABLE `halaman_awalimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  MODIFY `id_kabupaten` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  MODIFY `id_kecamatan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `id_prov` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formulir`
--
ALTER TABLE `formulir`
  ADD CONSTRAINT `formulir_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `tbl_kabupaten` (`id_kabupaten`),
  ADD CONSTRAINT `formulir_ibfk_2` FOREIGN KEY (`id_prov`) REFERENCES `tbl_provinsi` (`id_prov`);

--
-- Constraints for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD CONSTRAINT `tbl_kabupaten_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `tbl_provinsi` (`id_prov`);

--
-- Constraints for table `tbl_kecamatan`
--
ALTER TABLE `tbl_kecamatan`
  ADD CONSTRAINT `tbl_kecamatan_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `tbl_kabupaten` (`id_kabupaten`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
