-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2013 at 11:31 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbadsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan_biaya`
--

CREATE TABLE IF NOT EXISTS `laporan_biaya` (
  `laporan_id` char(6) NOT NULL,
  `pasien_id` char(6) DEFAULT NULL,
  `laporan_biayaadmin` float DEFAULT NULL,
  `laporan_biayaobat` float DEFAULT NULL,
  PRIMARY KEY (`laporan_id`),
  KEY `pasien_id` (`pasien_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `obat_id` char(6) NOT NULL,
  `obat_nama` varchar(20) NOT NULL,
  `obat_jenis` varchar(20) NOT NULL,
  `obat_stok` int(11) NOT NULL,
  `obat_expire` date NOT NULL,
  PRIMARY KEY (`obat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`obat_id`, `obat_nama`, `obat_jenis`, `obat_stok`, `obat_expire`) VALUES
('OBT001', 'Paracetamol 2', 'Antibiotik 2', 201, '2016-01-07'),
('OBT002', 'Cyanogen', 'Antibiotik', 200, '2016-01-08'),
('OBT003', 'Kurkuma', 'Obat Batuk', 200, '2016-12-08'),
('OBT004', 'Mixagrip', 'Obat Sakit Kepala', 200, '2016-12-08'),
('OBT005', 'Param Arc', 'Obat Sendi', 200, '2016-12-08'),
('OBT006', 'Param', 'Sakit Kepala', 200, '2013-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `pasien_id` char(6) NOT NULL,
  `pasien_nama` varchar(20) NOT NULL,
  `pasien_alamat` varchar(30) NOT NULL,
  `pasien_jk` char(1) NOT NULL,
  `pasien_umur` char(2) NOT NULL,
  `pasien_goldar` char(2) NOT NULL,
  `pasien_nohp` char(12) DEFAULT NULL,
  PRIMARY KEY (`pasien_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`pasien_id`, `pasien_nama`, `pasien_alamat`, `pasien_jk`, `pasien_umur`, `pasien_goldar`, `pasien_nohp`) VALUES
('PAS001', 'Irwan Lenn', 'Kp. CIhanjuang 2', 'l', '12', 'AB', '08988888871'),
('PAS002', 'Junita Alfrida', 'Dago Utara', 'P', '21', 'O', '087666222111'),
('PAS003', 'Ryan Antoni', 'Dipatiukur no 2', 'L', '23', 'A', '087666222333'),
('PAS004', 'Jodi Ryantio', 'Ciumbuleuit No 2', 'L', '25', 'B', '089222111212'),
('PAS005', 'Kian Rasa', 'Tubagus Ismail No 2', 'P', '22', 'O', '02256564433');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `pasien_id` char(6) NOT NULL,
  `penyakit_id` char(6) NOT NULL,
  `penyakit_nama` varchar(20) NOT NULL,
  `rekam_id` char(6) NOT NULL,
  PRIMARY KEY (`penyakit_id`),
  KEY `pasien_id` (`pasien_id`),
  KEY `rekam_id` (`rekam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`pasien_id`, `penyakit_id`, `penyakit_nama`, `rekam_id`) VALUES
('PAS001', 'PNY001', 'Sakit Batuk', 'RKM002'),
('PAS002', 'PNY002', 'Sakit Sendi', 'RKM001');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `petugas_id` char(6) NOT NULL,
  `petugas_nama` varchar(20) NOT NULL,
  `petugas_username` char(15) NOT NULL,
  `petugas_password` char(15) NOT NULL,
  `petugas_tipe` varchar(10) NOT NULL,
  PRIMARY KEY (`petugas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_tipe`) VALUES
('PAP001', 'Sinta Nuryandani', 'pap001', 'pap001', 'apoteker'),
('PDK001', 'Hendra Arwin', 'pdk001', 'pdk001', 'dinas'),
('PPP001', 'Santi Sumarni', 'ppp001', 'ppp001', 'perawat'),
('PPP002', 'Shinta Exmar', 'ppp002', 'ppp002', 'perawat'),
('PTA001', 'Arief Ridwan', 'pta001', 'pta001', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `rekam_id` char(6) NOT NULL,
  `rekam_keluhan` varchar(70) DEFAULT NULL,
  `rekam_beratbadan` int(11) DEFAULT NULL,
  `rekam_pelayanan` varchar(20) DEFAULT NULL,
  `rekam_pemeriksa` varchar(20) DEFAULT NULL,
  `rekam_tensidarah` char(5) DEFAULT NULL,
  `rekam_tgl` date DEFAULT NULL,
  `obat_id` char(6) DEFAULT NULL,
  `petugas_id` char(6) DEFAULT NULL,
  PRIMARY KEY (`rekam_id`),
  KEY `obat_id` (`obat_id`),
  KEY `petugas_id` (`petugas_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`rekam_id`, `rekam_keluhan`, `rekam_beratbadan`, `rekam_pelayanan`, `rekam_pemeriksa`, `rekam_tensidarah`, `rekam_tgl`, `obat_id`, `petugas_id`) VALUES
('RKM001', 'Keluhan Sendi', 65, 'Medical', 'Dr. Aryantoni', '250', '2014-01-28', 'OBT001', 'PPP001'),
('RKM002', 'Keluhan Batuk 2', 42, 'Medical', 'Dr. Handy D', '222', '2013-12-16', 'OBT002', 'PPP002');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_biaya`
--
ALTER TABLE `laporan_biaya`
  ADD CONSTRAINT `laporan_biaya_ibfk_1` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`pasien_id`);

--
-- Constraints for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD CONSTRAINT `pasien_id` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`pasien_id`),
  ADD CONSTRAINT `rekam_id` FOREIGN KEY (`rekam_id`) REFERENCES `rekam_medis` (`rekam_id`);

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `obat_id` FOREIGN KEY (`obat_id`) REFERENCES `obat` (`obat_id`),
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`petugas_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
