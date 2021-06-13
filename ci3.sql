-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2021 at 03:35 AM
-- Server version: 10.5.9-MariaDB-log
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminhotel`
--

CREATE TABLE `adminhotel` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminhotel`
--

INSERT INTO `adminhotel` (`id`, `username`, `password`) VALUES
(1, 'admin1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `idJenis` char(3) DEFAULT NULL,
  `lamainap` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nama`, `idJenis`, `lamainap`, `keterangan`) VALUES
(1, 'Mas Joni', 'DDR', 2, '-'),
(3, 'Mas Toni', 'DDR', 5, '-'),
(4, 'Roni', 'TRR', 2, '-'),
(6, 'Si Koni', 'QUR', 3, '-'),
(7, 'Roti', 'DDR', 5, '-'),
(8, 'Soni Tung', 'DDR', 3, '-');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_tugas`
--

CREATE TABLE `mahasiswa_tugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `checkbox` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_tugas`
--

INSERT INTO `mahasiswa_tugas` (`id`, `nama`, `password`, `jenis_kelamin`, `prodi`, `keterangan`, `checkbox`) VALUES
(1, 'Joni', '123', 'Laki-laki', 'Teknik Informatika', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `refjenishotel`
--

CREATE TABLE `refjenishotel` (
  `kode` char(3) NOT NULL,
  `namaruang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refjenishotel`
--

INSERT INTO `refjenishotel` (`kode`, `namaruang`) VALUES
('DDR', 'doubledouble room'),
('DOR', 'double room'),
('KIR', 'king room'),
('QRR', 'quad room'),
('QUR', 'queen room'),
('SIR', 'single room'),
('STR', 'studio room'),
('TRR', 'triple room'),
('TWR', 'twin room');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminhotel`
--
ALTER TABLE `adminhotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idJenis` (`idJenis`);

--
-- Indexes for table `mahasiswa_tugas`
--
ALTER TABLE `mahasiswa_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refjenishotel`
--
ALTER TABLE `refjenishotel`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminhotel`
--
ALTER TABLE `adminhotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mahasiswa_tugas`
--
ALTER TABLE `mahasiswa_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `RefHotel` FOREIGN KEY (`idJenis`) REFERENCES `refjenishotel` (`kode`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
