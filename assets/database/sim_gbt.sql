-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 05:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_gbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_level`
--

CREATE TABLE `age_level` (
  `age_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age_level`
--

INSERT INTO `age_level` (`age_id`, `name`) VALUES
(1, 'Anak-anak'),
(2, 'Pemuda'),
(3, 'Dewasa ');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `anak_id` int(11) NOT NULL,
  `nama_anak` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempattgl_lahir` varchar(250) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `nomor` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kode` varchar(250) NOT NULL,
  `tgl_penyerahan` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `dilayani` varchar(250) NOT NULL,
  `tempattgl_ttd` varchar(250) NOT NULL,
  `nama_ttd` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`anak_id`, `nama_anak`, `jenis_kelamin`, `tempattgl_lahir`, `nama_ayah`, `nama_ibu`, `nomor`, `date`, `status`, `keterangan`, `kode`, `tgl_penyerahan`, `tempat`, `dilayani`, `tempattgl_ttd`, `nama_ttd`, `nik`) VALUES
(1, 'yemima ruth', '', '0', '', '', '08747483647', '2022-05-18', 2, '', '', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `baptis`
--

CREATE TABLE `baptis` (
  `baptis_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempattgl_lahir` varchar(100) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibuk` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kode` varchar(250) NOT NULL,
  `hari_tanggal` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `dilayani` varchar(250) NOT NULL,
  `tgl_ttd` int(11) NOT NULL,
  `nama_gembala` int(11) NOT NULL,
  `NIK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baptis`
--

INSERT INTO `baptis` (`baptis_id`, `nama`, `jenis_kelamin`, `tempattgl_lahir`, `nomor`, `nama_ayah`, `nama_ibuk`, `status`, `keterangan`, `kode`, `hari_tanggal`, `tempat`, `dilayani`, `tgl_ttd`, `nama_gembala`, `NIK`) VALUES
(1, 'abigail philipus', '', 'surabaya', '089547483647', '', '', 2, 'Diterima', 'E3561', '', '', '', 0, 0, 0),
(2, 'kelly gine', 'perempuan', 'Banyuwangi', '087234551672', 'Suhardi', 'Alfiah', 2, 'Diterima', '091/SBA-GBT/X/MMX1', 'Senin, 23 Juli 2021', 'Siliragung', 'Pdt. Adiel Stefanus', 0, 0, 0),
(5, 'yemima', '', 'jember', '086656565655', '', '', 2, '', '', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `penanganan` varchar(250) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `penanganan`, `lokasi`) VALUES
(1, 'https://drive.google.com/file/d/1A6M5dV2UYbtuEGUYUEOhPKVVaFxWbIqS/preview', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.4132834882266!2d114.10721761416352!3d-8.556197589127493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd407da6bf99953%3A0x305a0189e37d716d!2sGBT%20%22%20ICC%20%22%20SILIRAGUNG!5e0!3m2!1sid!2sid!4v1654416667696!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`) VALUES
(1, 'Natal'),
(2, 'Paskah'),
(3, 'Bakti Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `kegiatan` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gambar`, `nama_gambar`, `judul`, `kegiatan`, `date`) VALUES
(1, '238562634_4609694672397461_2752644586674053209_n.jpg', 'natal 1', 'Natal Tahun 2020', 1, '2022-05-18'),
(2, '238580148_4609694505730811_5881323466179027890_n.jpg', 'natal 2', 'Natal Tahun 2021', 1, '2022-05-18'),
(3, '267775683_5000991063267818_7653479157966035611_n.jpg', 'baksos 1', 'Bakti Sosial Kaum Wanita', 3, '2022-05-18'),
(4, '268002917_5000990989934492_5326728834768165879_n.jpg', 'baksos 2', 'Bakti Sosial Kaum Wanita', 3, '2022-05-18'),
(6, 'salib.jpg', 'paskah1', 'Paskah Tahun 2020', 2, '2022-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `img_anak`
--

CREATE TABLE `img_anak` (
  `ank_id` int(11) NOT NULL,
  `member2` int(11) NOT NULL,
  `nama_image` varchar(250) NOT NULL,
  `image2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_anak`
--

INSERT INTO `img_anak` (`ank_id`, `member2`, `nama_image`, `image2`) VALUES
(1, 13, 'wjjwdd', 'download1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img_baptis`
--

CREATE TABLE `img_baptis` (
  `bap_id` int(11) NOT NULL,
  `member` int(11) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `image1` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_baptis`
--

INSERT INTO `img_baptis` (`bap_id`, `member`, `image_name`, `image1`) VALUES
(1, 13, 'wdjw', 'download_(1).jpg'),
(2, 11, 'baptis', 'download_(1)1.jpg'),
(3, 15, 'bapp', 'download_(1)2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img_pernikahan`
--

CREATE TABLE `img_pernikahan` (
  `per_id` int(11) NOT NULL,
  `member3` int(11) NOT NULL,
  `nama_image3` varchar(250) NOT NULL,
  `image3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_pernikahan`
--

INSERT INTO `img_pernikahan` (`per_id`, `member3`, `nama_image3`, `image3`) VALUES
(1, 13, 'pernikahan', 'Akta-Nikah-Sipil-Suami-208x3001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `images` varchar(250) NOT NULL,
  `place` varchar(250) NOT NULL,
  `birth` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `username` int(11) NOT NULL,
  `img_bap` int(11) NOT NULL,
  `img_anak` int(11) NOT NULL,
  `img_per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `fullname`, `images`, `place`, `birth`, `age`, `status`, `username`, `img_bap`, `img_anak`, `img_per`) VALUES
(5, 'abisag', '', 'Malang', '03/01/2003', 2, 'Non Member', 0, 0, 0, 0),
(11, 'cristian', 'teknologi1.jpg', 'Banyuwangi', '04/25/2003', 1, 'Member', 3, 0, 0, 0),
(13, 'Philipus', 'digital-technology.jpg', 'Banyuwangi', '04/25/2003', 2, 'Member', 6, 0, 0, 0),
(15, 'cristian ishak', '2018-11-06t054310z-1334124005-rc1be15a8050-rtrmadp-3-people-sexiest-man1.jpg', 'Surabaya', '04/25/1997', 3, 'Member', 7, 2018, 2018, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `pelayan`
--

CREATE TABLE `pelayan` (
  `pelayan_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayan`
--

INSERT INTO `pelayan` (`pelayan_id`, `name`, `level`, `description`) VALUES
(2, '13', 'Pengurus', 'wakil'),
(3, '11', 'Pengurus', 'Ketua Pemuda'),
(4, '13', 'Pengurus', 'Sekertaris'),
(5, '15', 'Pengurus', 'lwe'),
(6, '13', 'Pengurus', 'kdmls'),
(7, '5', 'Pengurus', 'bkb');

-- --------------------------------------------------------

--
-- Table structure for table `pernikahan`
--

CREATE TABLE `pernikahan` (
  `pernikahan_id` int(11) NOT NULL,
  `nama_laki` varchar(250) NOT NULL,
  `lahir_laki` varchar(250) NOT NULL,
  `name_perempuan` varchar(250) NOT NULL,
  `lahir_perempuan` varchar(250) NOT NULL,
  `domisili` varchar(250) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `baptis` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kode` varchar(250) NOT NULL,
  `tgl_pernikahan` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `dilayani` varchar(250) NOT NULL,
  `tempattgl_ttd` varchar(250) NOT NULL,
  `nama_ttd` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pernikahan`
--

INSERT INTO `pernikahan` (`pernikahan_id`, `nama_laki`, `lahir_laki`, `name_perempuan`, `lahir_perempuan`, `domisili`, `nomor`, `baptis`, `date`, `status`, `keterangan`, `kode`, `tgl_pernikahan`, `tempat`, `dilayani`, `tempattgl_ttd`, `nama_ttd`, `nik`) VALUES
(1, 'philipus', '0', 'ruth', '0', 'banyuwangi', '082147483647', 'Sudah Baptis', '2022-05-18', 2, '', '', '0', '0', '0', '0', '0', '0'),
(2, 'ishak', '0', 'abigail', '0', 'Banyuwangi', '081245662445', 'Sudah Baptis', '2022-05-24', 1, '', '', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `nama_gambar` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `gambar`, `nama_gambar`, `deskripsi`, `keterangan`, `date`) VALUES
(3, 'images_(1).jpg', 'abcde', '<p><span style=\"font-size: 24px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><font color=\"#083139\"><b>VISI-MISI</b></font></span><br></p><p><font color=\"#0000ff\"><span style=\"font-size: 24px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><br></span></font></p><p><font color=\"#0000ff\"><span style=\"font-size: 24px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b>SEJARAH</b></span></font></p><p><span style=\"font-size: 1rem; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Gereja Bethel Tabernakel Kristus Ajaib Siliragung merupakan salah satu gereja yang Berada di Kecamatan Siliragung Banyuwangi . Gereja ini dirintis pada tahin 1976 oleh Bapak Timotius Sukat Narko dan ibu Lea Sumari. Seiring bertambahnya Tahun pertumbuhan jemaat juga semakin bertambah.&nbsp;</span></p>                                                                                                                        ', 'Profil', '2022-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'abigail', 'admin1', 'loisyemima73@gmail.com', 'default.jpg', '$2y$10$LSXwWpDKWX2PHe.oFKDEuuxu7ljFgjbwp49f2S88ovN9zE2uFaQ9C', 1, 1, 1647855162),
(2, 'lois yemima', 'lois123', 'loisyemima123@gmail.com', 'IMG-20180829-WA0133.jpg', '$2y$10$fK9eluRVRHk9wONJe634z.qeQUOql0dcs/94e/FAS6a.O4ChEqxNO', 2, 1, 1647856198),
(3, 'yemima', 'yemima27', 'yemima@gmail.com', 'default.jpg', '$2y$10$j9hDzYKDar2fAKS19MmnrurnKnsHorRZesFxTVWtfwIa3X/VKUHja', 2, 1, 1648629190),
(5, 'yesinta', 'yesinta1234', 'yesinta@gmail.com', 'default.jpg', '$2y$10$kPw/wyFBD3R8dqRx24Z3Cu.5F8zLEsXXIHPnlT7TGBY8FGMnKLhy6', 2, 1, 1650447814),
(6, 'Yusak Cipto', 'yusak88', 'yusak@gmail.com', 'default.jpg', '$2y$10$Znntcow5gsHcvYwYdQFbkOS/UY29ScD/CWqwczM8iPLrx7/h/YyJu', 2, 1, 1652918932),
(7, 'Christian Hasan', 'christian01', 'Christian@gmail.com', 'default.jpg', '$2y$10$USbaj6ZVTZ/MXrcuNH2fQOykGsJqBmGxACUynTJfVjelxKPZEhXYC', 2, 1, 1652918978);

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
(1, 1, 1),
(2, 1, 2),
(5, 2, 2),
(8, 1, 3),
(9, 1, 5),
(10, 1, 6),
(12, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'control'),
(6, 'Gallery'),
(7, 'Pendaftaran');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `menu_order` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`, `menu_order`) VALUES
(1, 1, 'Dashboard', 'admin/dashboard', 'fas fa-fw fa-tachometer-alt', 1, 'A01'),
(2, 2, 'My Profile', 'user/profile', 'fas fa-fw fa-user', 1, 'U01'),
(3, 3, 'Menu Management', 'admin/menu', 'fas fa-fw fa-folder', 1, 'C01'),
(4, 3, 'Sub Menu Management', 'admin/menu/submenu', 'fas fa-fw fa-folder-open', 1, 'C02'),
(6, 3, 'Role', 'admin/dashboard/role', 'fas fa-fw fa-user-tie', 1, 'C03'),
(7, 1, 'Daftar Anggota Jemaat', 'admin/member', 'fas fa-fw fa-users', 1, 'A04'),
(8, 1, 'Daftar Pelayan', 'admin/pelayan', 'fas fa-fw fa-user-cog', 1, 'A06'),
(9, 1, 'Profile Gereja', 'admin/profile_gereja', 'fas fa-fw fa-place-of-worship', 1, 'A07'),
(13, 1, 'Warta', 'admin/warta', 'fas fa-fw fa-bullhorn', 1, 'A08'),
(14, 2, 'Data User', 'user/profile/data', 'fas fa-fw fa-file-alt', 1, 'U03'),
(16, 3, 'Age Level', 'admin/age', 'fas fa-fw fa-people-arrows', 1, 'C04'),
(17, 6, 'Gallery', 'admin/gallery', 'fas fa-fw fa-images', 1, 'G01'),
(18, 6, 'Event', 'admin/gallery/event', 'fas fa-fw fa-calendar-check', 1, 'G02'),
(19, 7, 'Pendaftaran Baptis', 'admin/pendaftaran/baptis', 'fas fa-fw fa-pray', 1, 'P01'),
(20, 7, 'Pendaftaran Pernikahan', 'admin/pendaftaran/pernikahan', 'fas fa-fw fa-user-friends', 1, 'P02'),
(21, 7, 'Pendaftaran Penyerahan Anak', 'admin/pendaftaran/anak', 'fas fa-fw fa-baby', 1, 'P03'),
(22, 1, 'Surat Edaran', 'admin/warta/surat', 'fas fa-fw fa-envelope-open-text', 1, 'A09'),
(23, 3, 'Lokasi', 'admin/setting/lokasi', 'fas fa-fw fa-map-marked-alt', 1, 'C05');

-- --------------------------------------------------------

--
-- Table structure for table `warta`
--

CREATE TABLE `warta` (
  `warta_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warta`
--

INSERT INTO `warta` (`warta_id`, `image`, `date`, `description`) VALUES
(1, 'background1.jpg', '2022-06-02', '<table class=\"table table-bordered\" style=\"background-color: rgb(255, 255, 255); color: rgb(33, 37, 41); font-size: 1rem;\"><tbody><tr><td><p style=\"line-height: 1;\"><span style=\"font-size: 18px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b>Ibadah Raya Minggu</b></span></p><p style=\"line-height: 1;\"><span style=\"font-size: 18px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><font color=\"#000000\">&nbsp; &nbsp; <span style=\"font-size: 18px;\">Setiap Hari Minggu Pukul 07.00</span></font></span></p><p style=\"line-height: 1;\"><span style=\"font-size: 18px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><font color=\"#000000\">&nbsp; &nbsp; Tempat di Gereja</font></span></p></td></tr><tr><td><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><b>Ibadah Sekolah Minggu</b></span></p><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-family: \">&nbsp; &nbsp; <span style=\"font-size: 18px;\">Setiap Hati Minggu Pukul 08.00</span></span></p><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\">&nbsp; &nbsp; Tempat di Gereja</span></p></td></tr><tr><td><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><b>Ibadah Tengah Minggu</b></span></p><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-family: \">&nbsp; &nbsp; <span style=\"font-size: 18px;\">Setiap Kamis Pukul 18.00</span></span></p><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\">&nbsp; &nbsp; Tempat di Gereja</span></p></td></tr><tr><td><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><b>Ibadah Pemuda Remaja</b></span></p><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-family: \">&nbsp; &nbsp; <span style=\"font-size: 18px;\">Setiap Sabtu Pukul 18.00</span></span></p><p style=\"line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\">&nbsp; &nbsp; Tempat di Gereja</span></p></td></tr></tbody></table><p style=\"text-align: left; line-height: 1;\"><span style=\"font-size: 18px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><br></span></p><p style=\"text-align: left; line-height: 1;\"><br></p><p style=\"text-align: left; line-height: 1;\"><span style=\"font-size: 18px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><font color=\"#000000\" style=\"\"><br></font></span></p><p style=\"text-align: left;\"><br></p><p style=\"text-align: left;\"><span style=\"font-size: 18px;\"><br></span></p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_level`
--
ALTER TABLE `age_level`
  ADD PRIMARY KEY (`age_id`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`anak_id`);

--
-- Indexes for table `baptis`
--
ALTER TABLE `baptis`
  ADD PRIMARY KEY (`baptis_id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `img_anak`
--
ALTER TABLE `img_anak`
  ADD PRIMARY KEY (`ank_id`);

--
-- Indexes for table `img_baptis`
--
ALTER TABLE `img_baptis`
  ADD PRIMARY KEY (`bap_id`);

--
-- Indexes for table `img_pernikahan`
--
ALTER TABLE `img_pernikahan`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `pelayan`
--
ALTER TABLE `pelayan`
  ADD PRIMARY KEY (`pelayan_id`);

--
-- Indexes for table `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD PRIMARY KEY (`pernikahan_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

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
-- Indexes for table `warta`
--
ALTER TABLE `warta`
  ADD PRIMARY KEY (`warta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_level`
--
ALTER TABLE `age_level`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `anak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baptis`
--
ALTER TABLE `baptis`
  MODIFY `baptis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `img_anak`
--
ALTER TABLE `img_anak`
  MODIFY `ank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img_baptis`
--
ALTER TABLE `img_baptis`
  MODIFY `bap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `img_pernikahan`
--
ALTER TABLE `img_pernikahan`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pelayan`
--
ALTER TABLE `pelayan`
  MODIFY `pelayan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `pernikahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `warta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
