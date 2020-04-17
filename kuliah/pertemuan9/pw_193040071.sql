-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 10:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040071`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `nrp` int(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `gambar`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(1, 'gambar1.png', 'Merlin Gunawan', 193040001, 'merlinshinu@unpas.ac.id', 'Teknik Informatika'),
(2, 'gambar2.png', 'Valkyrie Virra', 193040002, 'valkyriebebeb@unpas.ac.id', 'Teknik Informatika'),
(3, 'gambar3.png', 'Mang Ozymandias', 193040003, 'dajakudajaku@unpas.ac.id', 'Teknik Informatika'),
(4, 'gambar4.png', 'Gilgamesh Maiboi', 193040004, 'castercritrateup@unpas.ac.id', 'Teknik Informatika'),
(5, 'gambar5.png', 'Ishtar Gaguna', 193040005, 'ishtarnub@unpas.ac.id', 'Teknik Informatika'),
(6, 'gambar6.png', 'Qin Liangyu', 193040006, 'qinmybebeb@unpas.ac.id', 'Teknik Informatika'),
(7, 'gambar7.png', 'Lanling Wang', 193040007, 'lanlanling@unpas.ac.id', 'Teknik Informatika'),
(8, 'gambar8.png', 'Richard George', 193040008, 'richardou@unpas.ac.id', 'Teknik Informatika'),
(9, 'gambar9.png', 'Enkidu Elish', 193040009, 'enkidunothuman@unpas.ac.id', 'Teknik Informatika'),
(10, 'gambar10.png', 'Hans Andersen', 193040010, 'hansthebook@unpas.ac.id', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
