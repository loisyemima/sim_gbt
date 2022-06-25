-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 01:41 PM
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
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `anak_id` int(11) NOT NULL,
  `nama_anak` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempattgl_lahir` varchar(250) NOT NULL,
  `tgl_lahir` varchar(250) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `nomor` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kode` varchar(250) NOT NULL,
  `hari_penyerahan` varchar(250) NOT NULL,
  `tgl_penyerahan` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `dilayani` varchar(250) NOT NULL,
  `tempattgl_ttd` varchar(250) NOT NULL,
  `tgl_ttd` varchar(250) NOT NULL,
  `nama_ttd` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `tgl_edit` date NOT NULL,
  `edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`anak_id`, `nama_anak`, `jenis_kelamin`, `tempattgl_lahir`, `tgl_lahir`, `nama_ayah`, `nama_ibu`, `nomor`, `date`, `status`, `keterangan`, `kode`, `hari_penyerahan`, `tgl_penyerahan`, `tempat`, `dilayani`, `tempattgl_ttd`, `tgl_ttd`, `nama_ttd`, `nik`, `tgl_edit`, `edit`) VALUES
(1, 'yemima ruth', 'perempuan', 'Banyuwangi, 23 juni 2020', '', 'Hartoyo', 'Eli', '08747483647', '2022-05-18', 2, 'Diterima', '', '', '0', '0', '0', '0', '', '0', '0', '0000-00-00', 0),
(2, 'Abigail', 'perempuan', 'Banyuwangi', '20-06-01', 'Agung', 'Indah', '082142200662', '2022-06-19', 2, 'Diterima', '061/SPA-GBT/X/MMXI', 'Rabu', '20-06-01', 'Siliragung', 'Pdt. Adiel Stevanus', 'Siliragung', '20-06-10', 'Pdt. Boas', '3500112667456771', '2022-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `baptis`
--

CREATE TABLE `baptis` (
  `baptis_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tempattgl_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(250) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kode` varchar(250) NOT NULL,
  `hari_tanggal` varchar(250) NOT NULL,
  `tgl_baptis` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `dilayani` varchar(250) NOT NULL,
  `tempat_ttd` varchar(250) NOT NULL,
  `tgl_ttd` varchar(250) NOT NULL,
  `nama_gembala` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_edit` date NOT NULL,
  `edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baptis`
--

INSERT INTO `baptis` (`baptis_id`, `nama`, `jenis_kelamin`, `tempattgl_lahir`, `tgl_lahir`, `nomor`, `nama_ayah`, `nama_ibu`, `status`, `keterangan`, `kode`, `hari_tanggal`, `tgl_baptis`, `tempat`, `dilayani`, `tempat_ttd`, `tgl_ttd`, `nama_gembala`, `nik`, `tgl_pengajuan`, `tgl_edit`, `edit`) VALUES
(2, 'kelly gine', 'Perempuan', 'Banyuwangi', '05-05-93', '087234551672', 'Surateno', 'Alvinda', 2, 'Diterima', '091/SBA-GBT/X/MMXI', 'Senin', '20-06-18', 'Siliragung', 'Pdt. Adiel Stefanus', 'Siliragung', '20-06-18', 'Pdt. Boas', '3510026674567001', '2022-06-02', '0000-00-00', 1),
(6, 'Lois Yemima Sari', 'Perempuan', 'Banyuwangi', '06-01-20', '082142200662', 'Suhardi', 'Alfiah', 2, 'Diterima', '092/SBA-GBT/X/MMXI', 'Kamis', '02-06-22', 'Banyuwangi', 'Pdt. Adiel Stevanus', 'Siliragung', '20-06-22', 'Pdt. Boas', '3510026674567001', '2022-06-13', '0000-00-00', 1),
(8, 'Yunus Cipto ', 'Perempuan', 'Gresik', '02-05-19', '83924294', 'Cipto Subroto', 'Susy', 2, 'Diterima', '095/SBA-GBT/X/MMXI', 'Salasa', '12-06-14', 'Siliragung', 'Pdt. Adiel Stevanus', 'Siliragung', '20-06-18', 'Pdt. Boas', '350112667456771', '2022-06-15', '0000-00-00', 1),
(9, 'Abigail Sandra', 'Perempuan', 'Surabaya', '20-06-15', '083214567331', 'Budi Santoso', 'Lilis sintia', 2, 'Diterima', '094/SBA-GBT/X/MMXI', 'Rabu', '20-06-01', 'Siliragung', 'Pdt. Adiel Stefanus', 'Siliragung', '20-06-19', 'Pdt. Boas', '3510026674567001', '2022-06-19', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `surat_edaran` varchar(250) NOT NULL,
  `lokasi` text NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `whatsapp` varchar(500) NOT NULL,
  `image` varchar(250) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `surat_edaran`, `lokasi`, `facebook`, `instagram`, `whatsapp`, `image`, `ket`) VALUES
(1, 'https://drive.google.com/file/d/12N3UI7zPl_g4mryXeDw23r0iNc7g0k3Z/preview', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.4132834882266!2d114.10721761416352!3d-8.556197589127493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd407da6bf99953%3A0x305a0189e37d716d!2sGBT%20%22%20ICC%20%22%20SILIRAGUNG!5e0!3m2!1sid!2sid!4v1654416667696!5m2!1sid!2sid', 'https://www.facebook.com/groups/215471486198756', 'https://www.instagram.com/christ_youthh/', 'https://wa.wizard.id/59bcd2', 'GBT1.jpg', '<p style=\"text-align: center; \"><span style=\"font-size: 24px;\">GEREJA BETHEL TABERNAKEL SILIRAGUNG\r\n</span></p><p style=\"text-align: center; \"><span style=\"font-size: 24px;\">\"Menjadi Garam Dan Terang Dunia\"</span></p>');

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
(2, '238580148_4609694505730811_5881323466179027890_n.jpg', 'natal 2', 'Natal Tahun 2020', 1, '2022-06-14'),
(3, '267775683_5000991063267818_7653479157966035611_n.jpg', 'baksos 1', 'Bakti Sosial Kaum Wanita', 3, '2022-05-18'),
(4, '268002917_5000990989934492_5326728834768165879_n.jpg', 'baksos 2', 'Bakti Sosial Kaum Wanita', 3, '2022-05-18'),
(6, '29662898_1909333922433563_2526953815795371259_o.jpg', 'paskah1', 'Paskah Tahun 2018', 2, '2022-06-19'),
(7, '268827478_5000990893267835_6572402533796420459_n.jpg', 'Baksos 3', 'Baksos Kaum Wanita', 3, '2022-06-19'),
(8, '29749288_1909334375766851_4453690752181546515_o.jpg', 'paskah2', 'Paskah Tahun 2018', 2, '2022-06-19'),
(9, '29873028_1909333779100244_4433620658937172975_o.jpg', 'paskah3', 'Paskah Tahun 2018', 2, '2022-06-19'),
(10, '29664844_1908614712505484_4768291689567618540_o.jpg', 'paskah4', 'Paskah Tahun 2018', 2, '2022-06-19'),
(11, '238587788_4609694279064167_1113530743215923072_n1.jpg', 'natal3', 'Natal Tahun 2020', 1, '2022-06-19');

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
(1, 13, 'bap_philipus', 'baptis1.jpg'),
(2, 11, 'Chris', 'baptis.jpg'),
(5, 21, 'lois', 'lois.jpeg'),
(7, 17, 'bap_hardi', 'hardi.jpeg'),
(8, 28, 'bap_yesinta', 'keren.jpeg'),
(9, 30, 'bap_kezya', 'kezia.jpeg');

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
(2, 17, 'per_hardi', 'hardi_al.jpeg'),
(3, 27, 'per_dies', 'dani_dies.jpeg'),
(4, 29, 'dani_per', 'dani_dies1.jpeg'),
(5, 31, 'per_al', 'hardi_al1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `nama_kegiatan` varchar(250) NOT NULL,
  `tgl_kegiatan` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`kegiatan_id`, `nama_kegiatan`, `tgl_kegiatan`, `deskripsi`, `tgl`) VALUES
(1, 'Ibadah Natal 2021', '12/23/2021', '<p>Tema : Bagi Tuhan Tidak Ada Yang mustahil ( Lukas 1:37 )</p><p>Tempat : GBT Kristus Ajaib Siliragung</p><p>Jumlah Orang : 150</p><p>Saldo : ......</p>', '2022-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `images` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `tgl_lahir` varchar(250) NOT NULL,
  `umur` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `nama`, `images`, `tempat`, `tgl_lahir`, `umur`, `status`, `username`, `password`, `email`, `role_id`, `is_active`, `date`) VALUES
(1, 'admin', 'default.jpg', '', '07/23/2001', '0', 'Member', 'admin', '$2y$10$uvBY4hpj4zTw184V8s20h.HMc2kZC1WbwLn/KKdcCVqz1MGOVbeXG', '', 1, 0, '2022-04-08'),
(5, 'abisag', '', 'Malang', '03-01-20', 'Dewasa', 'Jemaat', 'abisag', '$2y$10$q5q9b2Jo8iENMBBO9szDUuHPJBHNOdqPr.9cYW1hFc6trE0O20m2O', '', 2, 0, '2022-05-19'),
(11, 'cristian', 'AESTHETIC-USER-PFP_(5).jpg', 'Banyuwangi', '02-02-00', 'Pemuda', 'Anggota', 'cristian', '$2y$10$GkpueQOhZ66gRJwY7t8IJ.T/FaQXn4Q3OwAFaRkBEdNPPXOXynB52', '', 2, 0, '2022-06-01'),
(13, 'Philipus', '2018-11-06t054310z-1334124005-rc1be15a8050-rtrmadp-3-people-sexiest-man2.jpg', 'Banyuwangi', '01-03-00', 'Anak-anak', 'Anggota', 'philipus', '$2y$10$d/uJEX6dDEl5uLo2Y1Gx4OYLMMhTWwVy4SoQDBRipyyqm8xwSpvwy', '', 2, 0, '0000-00-00'),
(17, 'Suhardi', 'hardi.PNG', 'Banyuwangi', '08-03-73', 'Dewasa', 'Anggota', 'suhardi', '$2y$10$x5rb2Cpn.XOUnccIOMuq/.PfTdBiZYFOrjCCN.buGD1G.F04ahFeq', '', 2, 0, '2022-05-02'),
(18, 'Yudi Hartoyo', 'yudi.PNG', 'Banyuwangi', '07-30-77', 'Dewasa', 'Anggota', '10', '$2y$10$chWraBpRGgmI1VhLvDPyHOIGtgR4V4A2wrSNOkDUq11Tq4g3N5NiK', '', 2, 0, '0000-00-00'),
(19, 'Susiyati', 'susi.PNG', 'Banyuwangi', '08-31-82', 'Dewasa', 'Anggota', '3', '$2y$10$wOc8oXl9i5q/StuPeKowaef5FQaEy52idVoNeRT5e90sUz4dPBwtC', '', 2, 0, '0000-00-00'),
(21, 'Lois Yemima Sari', 'WhatsApp_Image_2022-06-20_at_03_51_051.jpeg', 'Banyuwangi', '23-07-01', 'Pemuda', 'Anggota', 'loisyemima', '$2y$10$iisJtqAU0rQPOQThRaE8ZeE93RSePG0l9DdyXMfzZOrUjvmE1DsA2', '', 2, 0, '0000-00-00'),
(26, 'Adiel Stevanus', 'Capture1.PNG', 'Banyuwangi', '12-06-78', 'Dewasa', 'Anggota', 'adielstevanus', '$2y$10$qJRaqHJaMSVMmxR9e.Rtt.VIjT3qXtyOk1dhRgPToe05dQYrVUKsS', '', 3, 0, '0000-00-00'),
(27, 'Aureola Dies Caroline', 'WhatsApp_Image_2022-06-20_at_03_51_05_(1).jpeg', 'Banyuwangi', '15-06-99', 'Dewasa', 'Anggota', 'aureoladies', '$2y$10$mjHwbVH8Y6JPmWedCI0TCeWcSHhq4UtuZig2ffY/LhweMMG.HqiAC', '', 2, 0, '0000-00-00'),
(28, 'Yeshinta Aprillia Keren', 'AESTHETIC-USER-PFP_(5)2.jpg', 'Banyuwangi', '04-04-06', 'Pemuda', 'Anggota', 'yesintaaprillia', '$2y$10$cDCXKewmU0f0IYx9Czy/YOHhnLZhDvDQaz0/P48bP3fVx4vwmDR0e', '', 2, 0, '0000-00-00'),
(29, 'Dani Yoga Saputra', 'WhatsApp_Image_2022-06-20_at_03_51_04.jpeg', 'Banyuwangi', '28-12-96', 'Dewasa', 'Anggota', 'daniyoga', '$2y$10$IyaEHgrTxVoCioMeWRBPzunuMRSGVRFA4gujVmNtJAWFfyxarndr.', '', 2, 0, '0000-00-00'),
(30, 'Kezya Gracella', 'AESTHETIC-USER-PFP_(5)3.jpg', 'Banyuwangi', '31-05-07', 'Pemuda', 'Anggota', 'kezyagra', '$2y$10$UAVLIOsRqoER8xcoXa/nLOPufWlZMfdVFecDXDA01mZNLUwsApXdC', '', 2, 0, '2022-06-20'),
(31, 'Alfiah', 'AESTHETIC-USER-PFP_(5)4.jpg', 'Banyuwangi', '12-07-75', 'Dewasa', 'Anggota', 'alfiah', '$2y$10$RZTDa1t8K.8EVHqyqoyz6O2Y8kjohqf0MVk0tcqfhK48HrjjG4Hsa', '', 2, 0, '2022-06-20'),
(32, 'Denta', 'AESTHETIC-USER-PFP_(5)5.jpg', 'Banyuwangi', '09-06-22', 'Anak-anak', 'Anggota', 'denta', '$2y$10$RIx0uaoSaBAonch4SiS7mOTxGnVnUYbqZ4t8.W8PvTetzBX2ACm5K', '', 2, 0, '0000-00-00'),
(33, 'lois', 'AESTHETIC-USER-PFP_(5)6.jpg', 'Banyuwangi', '17-06-22', 'Pemuda', 'Anggota', 'loisss', '$2y$10$RIx0uaoSaBAonch4SiS7mOTxGnVnUYbqZ4t8.W8PvTetzBX2ACm5K', '', 2, 0, '0000-00-00'),
(34, 'christiann', 'paskah.jpg', 'Banyuwangi', '17-06-22', 'Anak-anak', 'Anggota', 'christian', '$2y$10$aa0C2T12ozNt6liBytp9f.224m9cBKPJ37eiJpz/PSUN5NHIjK39q', '', 2, 0, '2022-06-23');

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
(1, '26', 'Pengurus', 'Pemimpin'),
(3, '17', 'Pengurus', 'Wakil'),
(4, '18', 'Pengurus', 'Bendahara'),
(5, '19', 'Pengurus', 'Sekertaris'),
(8, '21', 'Pengurus', 'tamborien');

-- --------------------------------------------------------

--
-- Table structure for table `pernikahan`
--

CREATE TABLE `pernikahan` (
  `pernikahan_id` int(11) NOT NULL,
  `nama_laki` varchar(250) NOT NULL,
  `tempat_laki` varchar(250) NOT NULL,
  `lahir_laki` varchar(250) NOT NULL,
  `nama_perempuan` varchar(250) NOT NULL,
  `tempat_perempuan` varchar(250) NOT NULL,
  `lahir_perempuan` varchar(250) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `baptis` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `kode` varchar(250) NOT NULL,
  `hari_pernikahan` varchar(250) NOT NULL,
  `tgl_pernikahan` varchar(250) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `dilayani` varchar(250) NOT NULL,
  `tempattgl_ttd` varchar(250) NOT NULL,
  `tgl_ttd` varchar(250) NOT NULL,
  `nama_ttd` varchar(250) NOT NULL,
  `nik` varchar(250) NOT NULL,
  `tgl_edit` date NOT NULL,
  `edit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pernikahan`
--

INSERT INTO `pernikahan` (`pernikahan_id`, `nama_laki`, `tempat_laki`, `lahir_laki`, `nama_perempuan`, `tempat_perempuan`, `lahir_perempuan`, `nomor`, `baptis`, `date`, `status`, `keterangan`, `kode`, `hari_pernikahan`, `tgl_pernikahan`, `tempat`, `dilayani`, `tempattgl_ttd`, `tgl_ttd`, `nama_ttd`, `nik`, `tgl_edit`, `edit`) VALUES
(1, 'philipus', '', '0', 'ruth', '', '0', '082147483647', 'Sudah Baptis', '2022-05-18', 2, 'Diterima', '', '', '0', '0', '0', '0', '', '0', '0', '0000-00-00', 0),
(2, 'ishak', '', '0', 'abigail', '', '0', '081245662445', 'Sudah Baptis', '2022-05-24', 2, 'Diterima', '', '', '0', '0', '0', '0', '', '0', '0', '0000-00-00', 0),
(3, 'Hari Mulyadi', 'Surabaya', '19-11-19', 'Cantika Mahadewi', 'Banyuwangi', '19-06-12', '087235661243', 'Sudah Baptis', '2022-06-19', 2, 'Diterima', '095/SPG-GBT/X/MMX1', 'Rabu', '01-06-22', 'Siliragung', 'Pdt. Adiel Stevanus', 'Siliragung', '19-06-22', 'Pdt. Boas', '3500112667456771', '2022-06-19', 1);

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
(3, 'profilee.jpeg', 'abcde', '<p><span style=\"font-size: 24px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><font color=\"#083139\"><b>VISI-MISI</b></font></span><br></p><p><span style=\"font-size: 18px;\"><font color=\"#000000\"><u>Visi :</u></font></span></p><p><span style=\"font-size: 18px;\"><font color=\"#000000\">Menjadi Gereja cemerlang yang siap sebagai mempelai Kristus.</font></span></p><p><span style=\"font-size: 18px;\"><font color=\"#000000\"><u>Misi :</u></font></span></p><p><font color=\"#000000\"><span style=\"font-size: 24px;\" times=\"\" new=\"\" roman\";\"=\"\"></span></font></p><p><span style=\"font-size: 18px;\"><font color=\"#000000\">Terwujudnya Gereja Bethel Tabernakel Misioner yang Cemerlang.</font></span></p><p><font color=\"#0000ff\"><span style=\"font-size: 24px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><b>SEJARAH</b></span></font></p><p><span style=\"font-size: 1rem; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Gereja Bethel Tabernakel Kristus Ajaib Siliragung merupakan salah satu gereja yang Berada di Kecamatan Siliragung Banyuwangi . Gereja ini dirintis pada tahin 1976 oleh Bapak Timotius Sukat Narko dan ibu Lea Sumari. Seiring bertambahnya Tahun pertumbuhan jemaat juga semakin bertambah.&nbsp;</span></p>                                                                                                                                                                                    ', 'Profil', '2022-06-14');

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
(8, 1, 8),
(9, 1, 5),
(10, 1, 6),
(19, 1, 9),
(20, 3, 9),
(21, 3, 7),
(22, 3, 2),
(26, 3, 10),
(28, 2, 11),
(29, 3, 11),
(30, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `order_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `order_menu`) VALUES
(1, 'Admin', 1),
(2, 'User', 3),
(6, 'Galeri', 5),
(7, 'Pendaftaran', 6),
(8, 'setting', 7),
(10, 'Pendeta', 2),
(11, 'Kegiatan', 4);

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
(2, 'Member'),
(3, 'Pendeta');

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
(3, 8, 'Menu Management', 'admin/menu', 'fas fa-fw fa-folder', 1, 'C01'),
(4, 8, 'Sub Menu Management', 'admin/menu/submenu', 'fas fa-fw fa-folder-open', 1, 'C02'),
(6, 8, 'Role', 'admin/dashboard/role', 'fas fa-fw fa-user-tie', 1, 'C03'),
(7, 1, 'Daftar Anggota Jemaat', 'admin/member', 'fas fa-fw fa-users', 1, 'A04'),
(8, 1, 'Daftar Pelayan', 'admin/pelayan', 'fas fa-fw fa-user-cog', 1, 'A06'),
(9, 1, 'Profile Gereja', 'admin/profile_gereja', 'fas fa-fw fa-place-of-worship', 1, 'A07'),
(13, 1, 'Warta', 'admin/warta', 'fas fa-fw fa-bullhorn', 1, 'A08'),
(17, 6, 'Galeri', 'admin/gallery', 'fas fa-fw fa-images', 1, 'G01'),
(18, 6, 'Acara', 'admin/gallery/event', 'fas fa-fw fa-calendar-check', 1, 'G02'),
(19, 7, 'Pendaftaran Baptis', 'pendeta/pendaftaran/baptis', 'fas fa-fw fa-pray', 1, 'P01'),
(20, 7, 'Pendaftaran Pernikahan', 'pendeta/pendaftaran/pernikahan', 'fas fa-fw fa-user-friends', 1, 'P02'),
(21, 7, 'Pendaftaran Penyerahan Anak', 'pendeta/pendaftaran/anak', 'fas fa-fw fa-baby', 1, 'P03'),
(22, 1, 'Surat Edaran', 'admin/warta/surat', 'fas fa-fw fa-envelope-open-text', 1, 'A09'),
(23, 8, 'Lokasi', 'admin/setting/lokasi', 'fas fa-fw fa-map-marked-alt', 1, 'C04'),
(25, 11, 'Kegiatan', 'user/kegiatan', 'far fa-fw fa-calendar-check', 1, 'A10'),
(26, 2, 'Data User', 'user/profile/data', 'fas fa-fw fa-folder-open', 1, 'U04'),
(27, 8, 'Sosial Media', 'admin/setting/sosmed', 'fas fa-fw fa-share-alt', 1, 'C05'),
(28, 8, 'Header Dashboard', 'admin/setting/header', 'far fa-fw fa-file-alt', 1, 'C06'),
(30, 10, 'Dashboard', 'pendeta/dashboard', 'fas fa-fw fa-tachometer-alt', 1, 'D01'),
(31, 2, 'Edit Profile', 'user/profile/edit_profile', 'fas fa-fw fa-users-slash', 1, 'U02'),
(32, 2, 'Ubah Password', 'user/profile/ubah_password', 'fas fa-fw fa-bullhorn', 1, 'U03');

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
(1, 'background1.jpg', '2022-06-14', '<p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 24px;\"><font color=\"#085294\">Ibadah Raya Minggu</font></span></p><p style=\"text-align: center; line-height: 1;\"><span style=\"color: rgb(0, 0, 0); font-size: 18px;\">Setiap Hari Minggu Pukul 07.00</span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-size: 18px;\"><font color=\"#000000\">&nbsp; &nbsp; Tempat di Gereja</font></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";\"=\"\" style=\"font-size: 18px;\"><font color=\"#000000\"><br></font></span></p><p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 24px;\" times=\"\" new=\"\" roman\";\"=\"\"><font color=\"#085294\">Ibadah Sekolah Minggu</font></span></p><p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 18px;\"><font color=\"#000000\">Setiap Hari Minggu Pukul 08.00</font></span></p><p style=\"line-height: 1;\"><font color=\"#000000\"><span style=\"font-size: 18px; font-family: \" times=\"\" new=\"\" roman\";\"=\"\"></span></font></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><font color=\"#000000\">&nbsp; &nbsp; Tempat di Gereja</font></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><br></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 24px;\"><font color=\"#085294\">Ibadah Tengah Minggu</font></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\"><span style=\"font-size: 18px;\"><font color=\"#000000\">Setiap Kamis Pukul 18.00</font></span></span></p><p style=\"line-height: 1;\"><font color=\"#000000\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"></span></font></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><font color=\"#000000\">&nbsp; &nbsp; Tempat di Gereja</font></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><br></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 24px;\"><font color=\"#085294\">Ibadah Pemuda</font></span></p><p style=\"text-align: center; line-height: 1;\"><span style=\"font-size: 18px;\"><font color=\"#000000\">Setiap Sabtu Pukul 18.00</font></span></p><p style=\"text-align: center; line-height: 1;\"><span times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 18px;\"=\"\" style=\"font-size: 18px;\"><font color=\"#000000\">&nbsp; &nbsp; Tempat di Gereja</font></span></p><p style=\"text-align: left;\"><span style=\"font-size: 18px;\"><br></span></p>');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`);

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
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `anak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `baptis`
--
ALTER TABLE `baptis`
  MODIFY `baptis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `img_anak`
--
ALTER TABLE `img_anak`
  MODIFY `ank_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `img_baptis`
--
ALTER TABLE `img_baptis`
  MODIFY `bap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `img_pernikahan`
--
ALTER TABLE `img_pernikahan`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pelayan`
--
ALTER TABLE `pelayan`
  MODIFY `pelayan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `pernikahan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `warta`
--
ALTER TABLE `warta`
  MODIFY `warta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
