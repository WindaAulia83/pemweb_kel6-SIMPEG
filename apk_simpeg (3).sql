-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2024 at 11:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apk_simpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `id_pribadi` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `departemen` varchar(128) NOT NULL,
  `tahun_bergabung` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pribadi`
--

INSERT INTO `data_pribadi` (`id_pribadi`, `nama`, `nip`, `alamat`, `tanggal_lahir`, `jabatan`, `departemen`, `tahun_bergabung`) VALUES
(1, 'Winda Aulia Ariyani', '2201020083', 'jl.perintis no', '2004-03-03', 'Kepala', 'BKU', '2022-01-01'),
(2, 'Yohani Natalia Simanulang', '2201020091', 'jl.antasari', '2003-12-10', 'Admin', 'UPA TIK', '2020-01-13'),
(7, 'Yohana Raisa S', '78675756577', 'Jl. Mawar', '2003-12-10', 'Staf', 'LPPM', '2021-03-22'),
(8, 'Fajar', '21218989', 'jl.kamis', '1999-09-09', 'Sekretaris', 'UPA TIK', '2022-02-02'),
(9, 'Toni Christopher.d', '21228989', 'jl.bambu', '1998-01-02', 'Admin', 'UPA PERPSUTAKAAN', '2022-01-01'),
(10, 'Hendra Putra', '20208989', 'jl.seraya', '1997-04-27', 'Staf', 'UPA BAHASA', '2021-10-02'),
(11, 'Kairul Syah', '22208989', 'jl.basuki', '1981-03-01', 'Kepala', 'UPA PKK', '2016-01-01'),
(12, 'Ferry Zahcy Ramadhan', '20102889', 'jl.pantai', '1988-02-02', 'Kepala', 'UPA LABTERPADU', '2014-01-10'),
(13, 'Silvia Nova', '13128989', 'jl.kakilima', '1999-05-24', 'Staf', 'TU FTTK', '2021-01-02'),
(14, 'Ulfa Arsya', '12128989', 'jl.kami', '1989-01-01', 'Kepala', 'TU FEBM', '2020-02-28'),
(15, 'Rendy Rinaldy', '34338989', 'jl.bambu', '1987-07-23', 'Admin', 'TU FISIP', '2019-02-11'),
(16, 'Natasya Aruna', '11128989', 'jl.kemerdekaan', '2001-01-02', 'Admin', 'TU FKIP', '2021-01-20'),
(17, 'Syazali D. Fathin', '20218989', 'jl.rebus', '1982-03-22', 'Staf', 'TU FIKP', '2023-01-01'),
(18, 'Rezeki Metyana Asila', '08018989', 'jl.susi', '1980-08-01', 'Kepala', 'TU FK', '2023-05-01'),
(19, 'Muhammad Fahrezi', '08088989', 'jl.bunga', '1998-01-22', 'Admin', 'BAPKK', '2020-08-01'),
(20, 'Caesar Jourdy Permana Ahmad', '19778989', 'jl.rambut', '1994-09-09', 'Kepala', 'BKU', '2021-08-08'),
(21, 'Sonia Siahaan', '21211089', 'jl.achmad', '1982-12-08', 'Admin', 'LPPM', '2021-01-01'),
(22, 'Cahya Prestya', '21218989', 'jl.perintah1', '2001-11-01', 'Sekretaris', 'LPMPP', '2022-01-01'),
(23, 'Dyas Pratama Putra', '20008989', 'jl.ratu', '1997-01-01', 'Staf', 'UPA TIK', '2021-01-28'),
(24, 'Tamara Sania Putri', '29298989', 'jl.pramuka1', '1992-02-08', 'Kepala', 'UPA PERPSUTAKAAN', '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Winda Aulia Ariyani', 'windaauliaariyani84@gmail.com', 'default.jpg', '$2y$10$hZPc0ZM8KdE7vkAkBbpm0.W4dA.GLuJinPH4CZAlHqthhz3fC5sIa', 1, 1, 1733933448),
(2, 'Yohani Natalia Simanulang', 'nataliaa10.2003@gmail.com', 'default.jpg', '$2y$10$2OUaE8Co597n1GMZ.81TBu5G.NCQ1Eh0PeDVSYw1usln7Lm8JdCEa', 1, 1, 1733933476);

-- --------------------------------------------------------

--
-- Table structure for table `profile_perusahaan`
--

CREATE TABLE `profile_perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` int(12) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile_perusahaan`
--

INSERT INTO `profile_perusahaan` (`id`, `nama_perusahaan`, `alamat`, `telepon`, `email`) VALUES
(1, 'UPA TIK', 'Jalan Politeknik Senggarang', 2147483647, 'upatik@umrah.id'),
(2, 'UPA BAHASA', 'JL. Pahlawan no 4', 842523525, 'upabahasa@umrah.id');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kerja`
--

CREATE TABLE `riwayat_kerja` (
  `id_pegawai` int(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `departemen` varchar(255) NOT NULL,
  `riwayat_pendidikan` varchar(255) NOT NULL,
  `riwayat_pengalaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `riwayat_kerja`
--

INSERT INTO `riwayat_kerja` (`id_pegawai`, `nama`, `departemen`, `riwayat_pendidikan`, `riwayat_pengalaman`) VALUES
(1, 'Yohani Natalia Simanulang', 'BAPKK', 'S1 Ekonomi', 'Kepala Bagian '),
(2, 'Winda Aulia Ariyani', 'LPPM ', 'S1 Teknik Informatika', 'Peneliti '),
(3, 'Yohana Raisa S', 'LPMPP', 'S2 Sistem Informasi', 'Koordinator'),
(4, 'Fajar', 'UPA TIK', 'S1 Ilmu Perpustakaan ', 'Programmer'),
(5, 'Toni Christopher.d', 'UPA PERPUSTAKAAN', 'S2 Linguistik ', 'Pustakawan'),
(6, 'Hendra Putra', 'UPA BAHASA  ', 'S1 Psikologi', 'Trainer'),
(7, 'Kairul Syah', 'UPA PKK ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(8, 'Ferry Zahcy Ramadhan', 'UPA LABTERPADU ', 'S1 Teknik Elektro', 'Auditor'),
(9, 'Silvia Nova', 'TU FTTK ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(10, 'Ulfa Arsya', 'TU FEBM ', 'S1 Ilmu Politik', 'Administrator'),
(11, 'Rendy Rinaldy', 'TU FISIP ', 'S2 Administrasi Publik', 'Supervisor'),
(12, 'Natasya Aruna', 'TU FKIP ', 'S1 Ekonomi', 'Staf Administrasi'),
(13, 'Syazali D. Fathin ', 'TU FIKP ', 'S2 Manajemen', 'Kepala Bagian '),
(14, 'Rezeki Metyana Asila', 'TU FK', 'S1 Teknik Informatika', 'Peneliti '),
(15, 'Muhammad Fahrezi', 'BAPKK', 'S2 Sistem Informasi ', 'Koordinator '),
(16, 'Caesar Jourdy Permana Ahmad', 'BKU ', 'S1 Ilmu Perpustakaan ', 'Programmer'),
(17, 'Sonia Siahaan', 'LPPM ', 'S2 Linguistik ', 'Pustakawan'),
(18, 'Cahya Prestya', 'LPMPP', 'S1 Psikologi', 'Trainer '),
(19, 'Dyas Pratama Putra', 'UPA TIK ', 'S2 Teknologi Pendidikan', ' Teknisi'),
(20, 'Tamara Sania Putri', 'UPA PERPUSTAKAAN ', 'S1 Teknik Elektro', 'Auditor '),
(21, 'Mohamad Haiqal Faiq', 'UPA BAHASA ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(22, 'Tiara irsyanti', 'UPA PKK', 'S1 Ilmu Politik', 'Administrator'),
(23, 'Nurul Halimah', 'UPA LABTERPADU ', 'S2 Administrasi Publik', 'Supervisor '),
(24, 'Ferdi Setyana', 'TU FTTK ', 'S1 Ekonomi ', 'Staf Administrasi'),
(25, 'Dwi Ananta ', 'TU FEBM ', 'S2 Manajemen', 'Kepala Bagian '),
(26, 'Lorensius Blaston', 'TU FISIP', 'S1 Teknik Informatika', 'Peneliti  '),
(27, 'Rafly Zhikri ', 'TU FKIP ', 'S2 Sistem Informasi', 'Koordinator '),
(28, 'Arjuna Bintang ', 'TU FIKP ', 'S1 Ilmu Perpustakaan', 'Programmer '),
(29, 'Yolanda Christina', 'TU FK ', 'S2 Linguistik', 'Praktisi'),
(30, 'Verita Asyura', 'BAPKK ', 'S1 Psikologi', 'Trainer '),
(31, 'Wahyu Hidayat', 'BKU ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(32, 'Firmansyah Risky', 'LPPM', 'S1 Teknik Elektro', 'Auditor '),
(33, 'Gita Eva Puspa', 'LPMPP', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(34, 'Dion Simatupang', 'UPA TIK ', 'S1 Ilmu Politik', 'Administrator'),
(35, 'Josua Alfred', 'UPA PERPUSTAKAAN ', 'S2 Administrasi Publik', 'Supervisor '),
(36, 'Dhea Aurelia', 'UPA BAHASA', 'S1 Ekonomi', 'Staf Administrasi '),
(37, 'Kirana Fercia', 'UPA PKK', 'S2 Manajemen', 'Kepala Bagian '),
(38, 'Abdullah Ziyad', 'UPA LABTERPADU', 'S1 Teknik Informatika', 'Peneliti '),
(39, 'Muhammad Noval', 'TU FTTK', 'S2 Sistem Informasi', 'Koordinator '),
(40, 'Ahmad Naufal', 'TU FEBM ', 'S1 Ilmu Perpustakaan', 'Programmer '),
(41, 'Fauzan Ginting', 'TU FISIP', 'S2 Linguistik ', 'Pustakawan '),
(42, 'Denis Hutagalung', 'TU FKIP ', 'S1 Psikologi', 'Trainer '),
(43, 'Riansyah', 'TU FIKP ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(44, 'Isra Rauli', 'TU FK ', 'S1 Teknik Elektro', 'Auditor '),
(45, 'Nabil S', 'BAPKK', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(46, 'Matthew Nober', 'BKU ', 'S1 Ilmu Politik', 'Administrator '),
(47, 'Venthy Pardamean', 'LPPM ', 'S2 Administrasi Publik ', 'Supervisor'),
(48, 'Andhika Bramantyo', 'LPMPP', 'S1 Ekonomi ', 'Staf Administrasi'),
(49, 'Aditya Prastyan', 'UPA TIK', 'S2 Manajemen', 'Kepala Bagian '),
(50, 'Ondo Manalu', 'UPA PERPUSTAKAAN ', 'S1 Teknik Informatika', 'Peneliti '),
(51, 'Armando Tri', 'UPA BAHASA', 'S2 Sistem Informasi', 'Koordinator '),
(52, 'Cahyo Purnomo', 'UPA PKK', 'S1 Ilmu Perpustakaan', 'Programmer  '),
(53, 'Deric Pascal', 'UPA LABTERPADU ', 'S2 Linguistik', 'Pustakawan '),
(54, 'Dean Sianturi', 'TU FTTK ', 'S1 Psikologi', 'Trainer '),
(55, 'Kevin Liusbong', 'TU FEBM ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(56, 'Sandy Waluyo', 'TU FISIP', 'S1 Teknik Elektro ', 'Auditor '),
(57, 'Mahesa Pratama', 'TU FKIP ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(58, 'Susi Andriana', 'TU FIKP ', 'S1 Ilmu Politik', 'Administrator '),
(59, 'Reky Yuliansyah', 'TU FK ', 'S2 Administrasi Publik', 'Supervisor '),
(60, 'Tito Hardianta', 'BAPKK ', 'S1 Ekonomi', 'Staf Administrasi '),
(61, 'Joel Lohonauman', 'BKU ', 'S2 Manajemen', 'Kepala Bagian '),
(62, 'Idlal Farhan', 'LPPM ', 'S1 Teknik Informatika', 'Peneliti '),
(63, 'Novri Sirait', 'LPMPP ', 'S2 Sistem Informasi', 'Koordinator '),
(64, 'Dastin Darmawan', 'UPA TIK ', ' S1 Ilmu Perpustakaan', 'Programmer'),
(65, 'Juni Sukarta', 'UPA PERPUSTAKAAN ', 'S2 Linguistik', 'Pustakawan '),
(66, 'Habib Praditya', 'UPA BAHASA ', 'S1 Psikologi', 'Trainer '),
(67, 'Hani Putri', 'UPA PKK ', 'S2 Teknologi Pendidikan', 'Teknisi'),
(68, 'Nurmayani', 'UPA LABTERPADU', 'S1 Teknik Elektro', 'Auditor '),
(69, 'Raja Abdullah', 'TU FTTK ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(70, 'Andri Febrianto', 'TU FEBM ', 'S1 Ilmu Politik', 'Administrator '),
(71, 'Azman', 'TU FISIP ', 'S2 Administrasi Publik', 'Supervisor'),
(72, 'Adam Hardja', 'TU FKIP ', 'S1 Ekonomi', 'Staf Administrasi '),
(73, 'Zul Hilal', 'TU FIKP', 'S2 Manajemen', 'Kepala Bagian '),
(74, 'Aldo Syahputra', 'TU FK ', 'S1 Teknik Informatika', 'Peneliti '),
(75, 'Quensya Rahma', 'BAPKK ', 'S2 Sistem Informasi', 'Koordinator '),
(76, 'Hagia Sofia', '', 'S1 Ilmu Perpustakaan', 'BKU'),
(77, 'Nicky Robert', 'LPPM ', 'S2 Linguistik  ', 'Pustakawan'),
(78, 'Reno ', 'LPMPP ', 'S1 Psikologi', 'Trainer '),
(79, 'Surya Laila', 'UPA TIK ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(80, 'Tiara Respita', 'UPA PERPUSTAKAAN', 'S1 Teknik Elektro', 'Auditor '),
(81, 'Sarah Titah', 'UPA BAHASA', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(82, 'Sri Putri', 'UPA PKK', 'S1 Ilmu Politik', 'Administrator '),
(83, 'Heru Septian', 'UPA LABTERPADU', 'S2 Administrasi Publik', 'Supervisor  '),
(84, 'Marcella Zelynda', 'TU FTTK ', 'S1 Ekonomi', 'Staf Administrasi '),
(85, 'Marsel Zulfikri', 'TU FEBM ', 'S2 Manajemen', 'Kepala Bagian'),
(86, 'Mutia Putri', 'TU FISIP', 'S1 Teknik Informatika', 'Peneliti '),
(87, 'Sebastian', 'TU FKIP', 'S2 Sistem Informasi', 'Koordinator '),
(88, 'Wildan Reza', 'TU FIKP', 'S1 Ilmu Kelautan', 'Administrasi  PT'),
(89, 'Tio Wahyu', 'TU FK', ' S2 Linguistik', 'Pustakawan'),
(90, 'Salsabilla Fathia', 'BAPKK ', 'S1 Psikologi ', 'Trainer'),
(91, 'Seila Silalahi', 'BKU ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(92, 'Nelfa', 'LPPM ', 'S1 Teknik Elektro', 'Auditor '),
(93, 'Satria Fun', 'LPMPP ', 'S2 Teknologi Instrumentasi', 'Konsultan'),
(94, 'Yana Soraya', 'UPA TIK ', 'S1 Ilmu Politik', 'Administrator '),
(95, 'Alfira Manalu', 'UPA PERPUSTAKAAN', 'S2 Administrasi Publik', 'Supervisor '),
(96, 'Cika Ratih', 'UPA BAHASA ', 'S1 Ekonomi', 'Staf Administrasi '),
(97, 'Dewi Herliana', 'UPA PKK ', 'S2 Manajemen', 'Kepala Bagian'),
(98, 'Kharisma Putri', 'UPA LABTERPADU ', 'S1 Teknik Informatika', 'Peneliti '),
(99, 'Ruth Sinambela', 'TU FTTK ', 'S2 Sistem Informasi', 'Koordinator '),
(100, 'Lintang Sayidina', 'TU FEBM', 'S1 Ilmu Perpustakaan', 'Programmer '),
(101, 'Ajeng Damar', 'TU FISIP ', 'S2 Linguistik', 'Pustakawan '),
(102, 'Ayu Wandira', 'TU FKIP ', 'S1 Psikologi', 'Trainer '),
(103, 'Lian Syahputri', 'TU FIKP', 'S2 Teknologi Pendidikan', 'Teknisi '),
(104, 'Windri Queena', 'TU FK ', 'S1 Teknik Elektro', 'Auditor '),
(105, 'Andry Ramadhan', 'BAPKK ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(106, 'Vincent Situmeang', 'BKU', 'S1 Ilmu Politik', 'Administrator '),
(107, 'Vicky Kho', 'LPPM ', 'S2 Administrasi Publik', 'Supervisor '),
(108, 'Owen Fowel', 'LPMPP ', 'S1 Ekonomi', 'Staf Administrasi '),
(109, 'Syahla Uly', 'UPA TIK ', 'S2 Manajemen', 'Kepala Bagian '),
(110, 'Riau Wina', 'UPA PERPUSTAKAAN ', 'S1 Teknik Informatika', 'Peneliti '),
(111, 'Nobita ', 'UPA BAHASA ', 'S2 Sistem Informasi', 'Koordinator '),
(112, 'Arsih Zul', 'UPA PKK', 'S1 Ilmu Perpustakaan', 'Programmer'),
(113, 'Regina Amelia', 'UPA LABTERPADU ', 'S2 Linguistik', 'Pustakawan '),
(114, 'Fikri Hasan', 'TU FTTK ', 'S1 Psikologi', 'Trainer '),
(115, 'Hamish Daud', 'TU FEBM ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(116, 'Raisya ', 'TU FISIP ', 'S1 Teknik Elektro', 'Auditor '),
(117, 'Nagita ', 'TU FKIP  ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(118, 'Rosa Apriliani', 'TU FIKP ', 'S1 Ilmu Politik', 'Administrator '),
(119, 'Xaverius Danta', 'TU FK', 'S2 Administrasi Publik', 'Supervisor'),
(120, 'Xaviera Putri', 'BAPKK', 'S1 Ekonomi', 'Staf Administrasi '),
(121, 'Maxwell Admaja', 'BKU', 'S2 Manajemen', 'Kepala Bagian '),
(122, 'Benny Enrico', 'LPPM', 'S1 Teknik Informatika', 'Peneliti '),
(123, 'Try Saad', 'LPMPP', 'S2 Sistem Informasi', 'Koordinator '),
(124, 'Aldi Junianto', 'UPA TIK', 'S1 Ilmu Perpustakaan', 'Programmer '),
(125, 'Feri Ibrahim', 'UPA PERPUSTAKAAN ', 'S2 Linguistik', 'Pustakawan '),
(126, 'Syafiq Mohammad', 'UPA BAHASA ', 'S1 Psikologi', 'Trainer '),
(127, 'Dimas Bayu', 'UPA PKK ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(128, 'Abimanyu Olga', 'UPA LABTERPADU', 'S1 Teknik Elektro', 'Auditor '),
(129, 'Danang Samudra', 'TU FTTK ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(130, 'Ocean Halofa', 'TU FEBM ', 'S1 Ilmu Politik', 'Administrator '),
(131, 'Rinaldi', 'TU FISIP ', 'S2 Administrasi Publik', 'Supervisor '),
(132, 'Pandu Winata', 'TU FKIP ', 'S1 Ekonomi', 'Staf Administrasi '),
(133, 'Syamsiah', 'TU FIKP ', 'S2 Manajemen', 'Kepala Bagian'),
(134, 'Moza Afipa', 'TU FK ', 'S1 Teknik Informatika', 'Peneliti '),
(135, 'Farhan ALfaridzi', 'BAPKK ', 'S2 Sistem Informasi', 'Koordinator '),
(136, 'Syarifah Zalwa', 'BKU', 'S1 Ilmu Perpustakaan', 'Staff perpustakan provinsi'),
(137, 'Abdul Rahman', 'LPPM ', 'S2 Linguistik', 'Pustakawan '),
(138, 'Rahmi', 'LPMPP ', 'S1 Psikologi', 'Trainer '),
(139, 'Ilman Bahri', 'UPA TIK ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(140, 'Bayu Saprian', 'UPA PERPUSTAKAAN ', 'S1 Teknik Elektro', 'Auditor'),
(141, 'Balqis Puti', 'UPA BAHASA ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(142, 'Andi Akbar', 'UPA PKK', 'S1 Ilmu Politik', 'Administrator '),
(143, 'Fateh Albahri', 'UPA LABTERPADU', 'S2 Administrasi Publik', 'Supervisor '),
(144, 'Restu Amor', 'TU FTTK', 'S1 Ekonomi', 'Staf Administrasi'),
(145, 'Rivaldi Hasibuan', 'TU FEBM', 'S2 Manajemen ', 'Kepala Bagian '),
(146, 'Faishal Mahdi', 'TU FISIP', 'S1 Teknik Informatika ', 'Peneliti '),
(147, 'Ibnu Prima', 'TU FKIP', 'S2 Sistem Informasi', 'Koordinator '),
(148, 'Kurnia Rama', 'TU FIKP ', 'S1 Ilmu Perpustakaan', 'Programmer '),
(149, 'Aliv Rahul', 'TU FK', 'S2 Linguistik', 'Pustakawan '),
(150, 'Calvin Ahmadi', 'BAPKK ', 'S1 Psikologi', 'Trainer '),
(151, 'Firdaus', 'BKU', 'S2 Teknologi Pendidikan', 'Teknisi '),
(152, 'Hendra', 'LPPM', 'S1 Teknik Elektro ', 'Auditor '),
(153, 'Muhammad Arsy', 'LPMPP ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(154, 'Yuniartya Siregar', 'UPA TIK', 'S1 Ilmu Politik', 'Administrator'),
(155, 'Aidil Nugraha', 'UPA PERPUSTAKAAN', 'S2 Administrasi Publik ', 'Supervisor '),
(156, 'Senja Nirbita', 'UPA BAHASA', 'S1 Ekonomi ', 'Staf Administrasi '),
(157, 'Jose Hansen', 'UPA PKK ', 'S2 Manajemen', 'Kepala Bagian '),
(158, 'Gerhad Emanuel', 'UPA LABTERPADU ', 'S1 Teknik Informatika', 'Peneliti '),
(159, 'Desva Sanaya', 'TU FTTK ', 'S2 Sistem Informasi ', 'Koordinator'),
(160, 'Resta Abimanyu', 'TU FEBM ', 'S1 Ilmu Perpustakaan', 'Programmer '),
(161, 'Noel Willy', 'TU FISIP ', 'S2 Linguistik', 'Pustakawan '),
(162, 'Zaydane Datia', 'TU FKIP ', 'S1 Psikologi', 'Trainer '),
(163, 'Juan Pardede', 'TU FIKP ', 'S2 Teknologi Pendidikan', 'Teknisi '),
(164, 'Irsya Afadillah', 'TU FK ', 'S1 Teknik Elektro', 'Auditor '),
(165, 'Harry Prayuda', 'BAPKK', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(166, 'Kaleb Purba', 'BKU ', 'S1 Ilmu Politik', 'Administrator '),
(167, 'Jung Jaehyun', 'LPPM', 'S2 Administrasi Publik ', 'Supervisor '),
(168, 'Chelsea Naura', 'LPMPP ', 'S1 Ekonomi', 'Staf Administrasi '),
(169, 'Wahyu Yofin', 'UPA TIK', 'S2 teknik komputer', 'Network administrator'),
(170, 'Revasya Lizwan', 'UPA PERPUSTAKAAN', 'S1 Teknik Informatika ', 'Peneliti '),
(171, 'Indra Wahyu', 'UPA BAHASA ', 'S2 Sistem Informasi', 'Koordinator '),
(172, 'Rizski Zahri', 'UPA PKK ', 'S1 Ilmu Perpustakaan', 'Programmer '),
(173, 'Sahat', 'UPA LABTERPADU ', 'S2 Linguistik', 'Pustakawan '),
(174, 'Syahdan', 'TU FTTK', 'S1 Psikologi', 'Trainer '),
(175, 'Indri Larista', 'TU FEBM', 'S2 Teknologi Pendidikan', 'Teknisi'),
(176, 'Larasati Abella', 'TU FISIP', 'S1 Teknik Elektro ', 'Auditor '),
(177, 'Ariq Reskiono', 'TU FKIP ', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(178, 'Jayden ', 'TU FIKP ', 'S1 Ilmu Politik', 'Administrator '),
(179, 'Arestika Guntur', 'UPA BAHASA', 'S2 Administrasi Publik', 'Supervisor '),
(180, 'Kemala Balqis', 'BAPKK', 'S1 Ekonomi', 'Staf Administrasi '),
(181, 'Erhan Aziz', 'BKU ', 'S2 Manajemen', 'Kepala Bagian '),
(182, 'Wisnu Alfattah', 'LPPM', 'S1 Teknik Informatika ', 'Peneliti'),
(183, 'Douglass Naufal', 'LPMPP ', 'S2 Sistem Informasi', 'Koordinator '),
(184, 'Tulus', 'UPA TIK ', 'S1 Ilmu Perpustakaan', 'Programmer '),
(185, 'Baihaqi', 'UPA PERPUSTAKAAN ', 'S2 Linguistik', 'Pustakawan '),
(186, 'Soviella Putri', 'UPA BAHASA ', 'S1 Psikologi', 'Trainer '),
(187, 'Farzana Syahar', 'UPA PKK', 'S2 Teknologi Pendidikan', 'Teknisi '),
(188, 'Gisele', 'UPA LABTERPADU ', 'S2 BIOLOGI', 'Peneliti BRIN '),
(189, 'Younjin', 'TU FTTK', 'S2 Teknologi Instrumentasi', 'Konsultan '),
(190, 'Ningning', 'TU FEBM ', 'S1 Ilmu Politik', 'Administrator '),
(191, 'Dwiki Prayoga', 'TU FISIP', 'S2 Administrasi Publik', 'Supervisor '),
(192, 'Febri Rangkuti', 'TU FKIP', 'S1 Ekonomi ', 'Staf Administrasi '),
(193, 'Rayhan putra', 'TU FIKP ', 'S2 Manajemen', 'Kepala Bagian '),
(194, 'Reza Satrio', 'TU FK', 'S1 Teknik Informatika', 'Peneliti '),
(195, 'Ayodhia ', 'BAPKK', 'S2 Sistem Informasi', 'Koordinator '),
(196, 'Andrean ', 'BKU', 'S1 Teknik Sipil', 'Staff keuangan PT.VIE'),
(197, 'Zidny', 'LPPM ', 'S2 Linguistik', 'Pustakawan'),
(198, 'Iqbaal', 'LPMPP', 'S1 Psikologi', 'Trainer '),
(199, 'Albert ', 'UPA TIK', 'S2 Teknologi Pendidikan', 'Teknisi '),
(200, 'Fadlansyah', 'UPA PERPUSTAKAAN ', 'S1 Teknik Elektro', 'Auditor '),
(201, 'Ria Mawar', 'BAPKK', 'S1 Ekonomi', 'UPA TIK');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Pegawai');

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
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id_pribadi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_perusahaan`
--
ALTER TABLE `profile_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  ADD PRIMARY KEY (`id_pegawai`);

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
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id_pribadi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_perusahaan`
--
ALTER TABLE `profile_perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat_kerja`
--
ALTER TABLE `riwayat_kerja`
  MODIFY `id_pegawai` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
