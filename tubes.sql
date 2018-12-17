-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 02:09 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--
REATE TABLE `bencana` (
  `id_bencana` int(100) NOT NULL,
  `nama_bencana` varchar(100) NOT NULL,
  `lokasi_bencana` text NOT NULL,
  `waktu_bencana` date NOT NULL,
  `desk_bencana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `nama_bencana`, `lokasi_bencana`, `waktu_bencana`, `desk_bencana`) VALUES
(2, 'hujan', 'kaliurang', '2018-12-26', '10 korban luka parah'),
(3, 'banjir', 'jakarta', '2018-12-27', 'rumah terbang'),
(6, 'apa', 'yuh', '2018-12-17', 'ujjj'),
(10, 'Topankuuuu', 'yuh', '2018-12-28', 'rumah terbang');

-- --------------------------------------------------------

--
-- Table structure for table `bnpb`
--

CREATE TABLE `bnpb` (
  `email_bnpb` varchar(100) NOT NULL,
  `pass_bnpb` varchar(100) NOT NULL,
  `id_bnpb` int(100) NOT NULL,
  `nama_bnpb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bnpb`
--

INSERT INTO `bnpb` (`email_bnpb`, `pass_bnpb`, `id_bnpb`, `nama_bnpb`) VALUES
('amber@gmail.com', '12345', 1, 'amber'),
('raishaamini@gmail.com', 'admin', 2, 'Raisha Amini'),
('aldhiyatika@gmail.com', 'admin', 3, 'Aldhiyatika'),
('dewi@gmail.com', 'admin', 4, 'Dewi Nadhiroh');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_k` int(100) NOT NULL,
  `nm_keg` varchar(100) NOT NULL,
  `lokasi_keg` text NOT NULL,
  `daerah_keg` text NOT NULL,
  `waktu_keg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_k`, `nm_keg`, `lokasi_keg`, `daerah_keg`, `waktu_keg`) VALUES
(1, 'Mancul', 'Dieng', 'Sleman', '2018-12-11'),
(7, 'mntaap', 'ok', 'Johor', '2018-12-20'),
(12, 'Nari', 'Ledok Sambi', 'Yogyakarta', '2018-12-12'),
(123, 'Sosialisasi', 'Medan', 'Johor', '2018-12-27'),
(1123, 'Mancul', 'Dieng', 'Sleman', '2018-12-11'),
(1234358, 'uuuuu', 'uuhhyyy', 'jj', '2018-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `desk_keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id`, `nama_lengkap`, `nik`, `email`, `password`, `asal`, `tempat`, `tgl_lahir`, `alamat`, `keahlian`, `desk_keahlian`) VALUES
(689, 'Raisha Amini', '17523148', 'raishaamini@gmail.com', '1234', 'Pekalongan', 'pekalongan', '1999-06-15', 'Yogyakarta', 'Membaca', 'Apa ya hmmmm'),
(698, 'Aldhiyatika', '17523176', 'aldhiyatika@gmail.com', 'sukasuka', 'Aceh', 'Madura', '1999-05-13', 'Yogyakarta', 'Tidur', 'Adadeh'),
(703, 'Dewi Nadhiroh', '175231235', 'dewinadhiroh@gmail.com', '123', 'Nganjuk Jawa Timur', 'Nganjuk', '1998-10-23', 'Yogyakarta', 'Mancing', 'Dokter'),
(704, 'Rahayu Santika', '673237344304', 'rahayu@gmail.com', 'adadeg', 'Jakarta', 'Bekasi', '2014-05-16', 'Jambi', 'Medis', 'hmmm'),
(706, 'Umiyatun', '17654234', 'umi@gmail.com', '678', 'Sukoharjo', 'Demak', '2010-09-14', 'Banten', 'Menari', 'Siipppp'),
(707, 'Opik Kumis', '15678265', 'opi@gmail.com', '123', 'Nglanjaran', 'Semarang', '1995-04-23', 'Tj Gading', 'Menulis', 'yugg'),
(708, 'Salsabilla', '1898654', 'yuyun@gmail.com', '12345', 'Tegal', 'Depok', '0000-00-00', 'Pemalang', 'Medis', 'yuhuu'),
(709, 'Didi Subardjo', '1567824', 'didi@gmail.com', '09', 'Batang', 'Malang', '1995-10-16', 'Yogyakarta', 'Menanam', 'hehe'),
(711, 'Tasya Hilda', '1765243', 'tasa@gmail.com', '654', 'Besi', 'Lombok', '1999-05-15', 'Magelang', 'Mancing', 'yakktull'),
(712, 'Aldhiyatika', '17523176', 'tika@gmail.com', 'c27cd12c8034c739304c22a3a3748e39', 'Medan', 'Aceh', '1999-12-05', 'Yogyakarta', 'memasak', 'gitu'),
(713, 'RAISHA', '7774433', 'raisha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Semarang', 'Pekalongan', '1999-10-06', 'Jogja', 'Menanam', 'Adadeh'),
(714, 'RAISHA', '7774433', 'raisha@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Semarang', 'Pekalongan', '1999-10-06', 'Jogja', 'Menanam', 'Adadeh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_k`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id_bencana` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_k` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234359;

--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=715;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
