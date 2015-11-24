-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 09:45 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lisnawati_21111087`
--

-- --------------------------------------------------------

--
-- Table structure for table `databunga`
--

CREATE TABLE IF NOT EXISTS `databunga` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` varchar(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `suplier` varchar(20) NOT NULL,
  `asal` varchar(20) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databunga`
--

INSERT INTO `databunga` (`kode`, `nama`, `stok`, `harga`, `warna`, `suplier`, `asal`) VALUES
('KD001', 'Bangkai', '15', 30000, 'Hitam', 'merah', 'Makassar'),
('KD002', 'Mawar', '20', 10000, 'Merah', 'Yoan', 'Samarinda'),
('KD003', 'Melati', '30', 50000, 'Putih', 'Maulana', 'Bandung'),
('KD004', 'Anggrek', '10', 50000, 'Merah', 'Jaya', 'Jambi'),
('KD005', 'Lyly', '5', 20000, 'Kuning', 'Lisna', 'cimahi'),
('KD006', 'Senja', '10', 10000, 'Kuning', 'Guntur', 'Semarang'),
('KD007', 'Bunga Sepatu', '5', 100000, 'Merah', 'Gunawan', 'Bandung'),
('KD008', 'Mawar Kuning', '10', 50000, 'Merah', 'Cep Gunawan Guntur', 'Surabaya'),
('KD009', 'Dogwood', '25', 10000, 'Putih', 'Dannu', 'Jogja'),
('KD010', 'Dogtooth', '25', 20000, 'Putih', 'Abang', 'Bandung'),
('KD011', 'Diadorra', '35', 75000, 'Merah', 'Bu Sari', 'BDG');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `kode` varchar(5) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `pembeli` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `telp` varchar(12) NOT NULL,
  KEY `kode` (`kode`),
  KEY `kode_2` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`kode`, `jumlah`, `pembeli`, `alamat`, `kota`, `telp`) VALUES
('KD008', 0, 'Dannu W', 'Dago no 5, RT 01 RW 02', 'Bandung', '08987179501'),
('KD009', 2, 'Lisnawati', 'Kubang sari nomor 2', 'bandung', '08986811753'),
('KD001', 10, 'Kuya', 'Isi alamat anda', 'Dannu', '08121');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `databunga` (`kode`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
