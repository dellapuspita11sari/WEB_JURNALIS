-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 04:38 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnalis`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(255) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(9, 'Sri Devi', 'Pimpinan Umum', 'https://instagram.com/deeeevx', '1780997376_ketua umum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bendahara`
--

CREATE TABLE `bendahara` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `kategori_berita` varchar(25) NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_input` date NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan_redaksi`
--

CREATE TABLE `pimpinan_redaksi` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan_redaksi`
--

INSERT INTO `pimpinan_redaksi` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(1, 'Muhammad Nuril Anwar', 'Pimpinan Redaksi', 'https://instagram.com/nuril_anwar21', '1989784776_pimpinan redaksi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan_umum`
--

CREATE TABLE `pimpinan_umum` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan_umum`
--

INSERT INTO `pimpinan_umum` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(12, 'Sri Devi', 'Pimpinan Redaksi', 'https://instagram.com/psptsrdll_', '411689438_ketua umum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sekretaris`
--

CREATE TABLE `sekretaris` (
  `idanggota` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `gambar_anggota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekretaris`
--

INSERT INTO `sekretaris` (`idanggota`, `nama_anggota`, `divisi`, `ig`, `gambar_anggota`) VALUES
(1, 'Siti Nur Halisa', 'Sekretaris 1', 'https://instagram.com/sitinurhalisa', '637154184_sekretaris.jpg'),
(2, 'Feby Wulandhari', 'Sekretaris 2', 'https://instagram.com/wulandhari', '796459199_sekretaris2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` text NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_level` varchar(25) NOT NULL,
  `user_password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_username`, `user_email`, `user_level`, `user_password`) VALUES
(30, 'Pimpinan Redaksi', 'pimred', 'ruangupdate21@gmail.com', 'Tim Redaksi', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `bendahara`
--
ALTER TABLE `bendahara`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `pimpinan_redaksi`
--
ALTER TABLE `pimpinan_redaksi`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `pimpinan_umum`
--
ALTER TABLE `pimpinan_umum`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `sekretaris`
--
ALTER TABLE `sekretaris`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bendahara`
--
ALTER TABLE `bendahara`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pimpinan_redaksi`
--
ALTER TABLE `pimpinan_redaksi`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pimpinan_umum`
--
ALTER TABLE `pimpinan_umum`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sekretaris`
--
ALTER TABLE `sekretaris`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
