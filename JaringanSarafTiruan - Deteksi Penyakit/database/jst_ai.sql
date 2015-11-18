-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2015 at 06:28 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jst_ai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_batuk`
--

CREATE TABLE IF NOT EXISTS `tb_batuk` (
  `bt_id` varchar(3) NOT NULL,
  `bt_gejala` char(50) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `bt_batuk` char(20) NOT NULL,
  `bt_solusi` text NOT NULL,
  `dynamicValue` int(11) NOT NULL,
  PRIMARY KEY (`bt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_batuk`
--

INSERT INTO `tb_batuk` (`bt_id`, `bt_gejala`, `keywords`, `bt_batuk`, `bt_solusi`, `dynamicValue`) VALUES
('A1', 'Batuk berdahak berwarna kuning', 'berdahak kuning', 'Bronchitis', 'Minum air putih setiap pagi.\r\nIstirahat yang cukup.\r\nHangatkan tubuh.\r\nOlah raga pagi hari.\r\nMinum obat generik.\r\nKurangi merokok.', 1),
('A2', 'Sesak nafas', 'sesak nafas asma', 'Bronchitis', '', 0),
('A3', 'Batuk disertai flu dan demam ringan', 'flu batuk demam', 'Bronchitis', '', 1),
('A4', 'Nafas terasa berat dan sakit dada', 'sesak asma', 'Bronchitis', '', 0),
('A5', 'Mudah merasa lelah', 'lelah letih capek', 'Bronchitis', '', 0),
('A6', 'Sakit Kepala', 'pusing pening', 'Bronchitis', '', 0),
('A7', 'Wajah dan pipi kemerahan', '', 'Bronchitis', '', 0),
('A8', 'Batuknya berlangsung lebih dari 5 hari', 'batuk', 'Bronchitis', '', 1),
('B1', 'Batuk menggonggong', 'batuk', 'Psikogenik', 'a. Pengobatannya dengan menggunakan prosedur yang disebut teknik saran bertulang dikombinasikan dengan bantuan orang tua untuk pemantauan diri anak dan penghargaan sosial\r\nb. Hipnoterapi, speech theraphy, konseling dan terapi saran bertulang.  Dengan terapi saran bertulang, pasien diberi distraktor (nebulizer yang berisi lidokain) kemudian dokter memberi perintah untuk memotivasi pasien agar mengontrol batuk. \r\nc. Kombinasi psikoterapi dan speech theraphy (terapi wicara). Teknik untuk terapi wicara diadaptasi dengan menggunakan gangguan suara hyperfunctional untuk melemahkan gangguan laring.\r\nd. Dalam beberapa kasus, kebiasaan batuk psikogenik pada orang dewasa dapat diatasi dengan kombinasi psikoterapi, terapi relaksasi, dan terapi wicara.\r\ne. Kombinasi biofeedback yang dibantu latihan relaksasi, psikoterapi, dan terapi fisik.\r\nf. Pemberian obat batuk, beberapa ahli yang menyarakan dengan menambahkan obat amitriptyline, nortriptyline, tramadol atau gabapentin. Tetapi ada beberapa ahli menyarankan tidak memberikan obat batuk baik inhaler, steroid maupun opioid.', 1),
('B2', 'Batuk terasa kering', 'batuk kering', 'Psikogenik', '', 1),
('B3', 'Batuk membuat dada sakit', 'batuk', 'Psikogenik', '', 1),
('B4', 'Gatal tenggorokan', 'gatal', 'Psikogenik', '', 0),
('B5', 'samar lirih', 'lirih', 'Psikogenik', '', 0),
('B6', 'Batuk berhenti ketika tidur', 'kuning berdahak berdarah', 'Psikogenik', '', 1),
('B7', 'Intensitas batuk sering', 'batuk', 'Psikogenik', '', 1),
('B8', 'Batuk dengan suara keras', 'batuk keras', 'Psikogenik', '', 1),
('C1', 'Dahak berwarna putih atau hijau', 'putih hijau dahak berdahak', 'Berdahak', '', 1),
('C2', 'Tenggorokan berlendir', 'berlendir', 'Berdahak', '', 0),
('C3', 'Hidung tersumbat', 'tersumbat', 'Berdahak', '', 0),
('C4', 'Kepala terasa berat', 'pusing pening', 'Berdahak', '', 0),
('C5', 'Nafas terganggu', 'sesak', 'Berdahak', '', 0),
('C6', 'Batuk selama lebih dari 5 hari', 'batuk', 'Berdahak', '', 1),
('C7', 'Perasaan mual', 'mual', 'Berdahak', '', 0),
('C8', 'Baduk berdehik', 'berdehik', 'Berdahak', '', 0),
('D1', 'Batuk berdahak', 'berdahak', 'Tuberculosis', 'a. Meminum Obat-obatan yang paling umum digunakan untuk mengobati tuberkulosis meliputi \r\nIsoniazid, Rifampisin (Rifadin, Rimactane), Etambutol (Myambutol), Pirazinamid.\r\nb. Sering berjemur pada pagi hari\r\nc. Gunakan masker untuk menghalau debu\r\nd. Sering meminum air hangat\r\ne. Banyak makan buah dan sayur hindari makanan pedas dan berminyak\r\nf. Perikasakan ke dokter dengan rontgen', 1),
('D2', 'Dahak berwarna abu disertai darah', 'abu darah berdarah dahak berdahak', 'Tuberculosis', '', 1),
('D3', 'Penurunan berat badan', 'ringan penurunan', 'Tuberculosis', '', 0),
('D4', 'Kehilangan nafsu makan', 'gairah', 'Tuberculosis', '', 0),
('D5', 'Batuk berlangsung lebih dari 7 hari', 'batuk', 'Tuberculosis', '', 1),
('D6', 'Badan terasa panas dingin', 'panas dingin', 'Tuberculosis', '', 0),
('D7', 'Urine berwarna keruh', 'keruh', 'Tuberculosis', '', 0),
('D8', 'Kelelahan berlebihan', 'lelah kelelahan capek', 'Tuberculosis', '', 0),
('E1', 'Intensitas batuk jarang', 'batuk', 'Sinusitis', 'a. Menghirup uap hangat.\r\nb. Untuk menghindari berkembangnya sinusitis sewaktu penyakit demam atau alergi menyerang,\r\nc. Gunakan pelega sumbatan oral atau semprotan pelega sumbatan hidung untuk jangka waktu pendek\r\nd. Keluarkan lendir hidung secara perlahan-lahan, tutup 1 lubang hidung pada saat mengeluarkan lendir dari lubang hidung yang lain.\r\ne. Minum banyak cairan supaya lendir tidak mengental\r\nf. Hindari perjalanan udara. Jika anda harus bepergian dengan pesawat, gunakan semprotan pelega sumbatan hidung sebelum pesawat tinggal landas, tujuannya untuk mencegah penyumbatan di sinus sehinggalendir bisa dikeluarkan.\r\ng. Jika anda mempunyai alergi, cobalah untuk menghindari hal-hal yang menyebabkan alergi tersebut. Jika tidak dapat dihindari, gunakan antihistamine yang dijual di toko atau dengan resep dokter dan atau semprotan hidung atas resep dokter untuk mengendalikan serangan alergi.\r\nh. Kompres hangat menggunakan handuk di sekitar hidung, pipi, dan mata untuk mengurangi nyeri wajah.', 1),
('E2', 'Kerongkongan terasa tersumbat', 'tersumbat', 'Sinusitis', '', 0),
('E3', 'Hidung tersumbat', 'tersumbat', 'Sinusitis', '', 0),
('E4', 'Batuk disertai bersin', 'bersin batuk', 'Sinusitis', '', 1),
('E5', 'Dahak berwarna hitam atau merah', 'hitam merah', 'Sinusitis', '', 0),
('E6', 'Batuk selama 10 hari dengan flu', 'flu', 'Sinusitis', '', 0),
('E7', 'Sakit di bagian mata dan pelipis', 'sakit mata', 'Sinusitis', '', 0),
('E8', 'Nyeri di pangkal hidung ketika batuk', 'nyeri batuk', 'Sinusitis', '', 1),
('F1', 'Batuk disertai darah dan lendir', 'batuk berdarah lendir', 'Pneumonia', 'a. Meminum obat generik dari dokter\r\nb. Menghirup uap air hangat pagi dan sore\r\nc. Mandi dengan air hangat\r\nd. Berhenti merokok\r\ne. Meminum rebusan kencur dan gula jawa\r\nf. Istirahat ditempat yang hangat dan hindari ruangan ber-AC', 1),
('F2', 'Muka pucat', 'pucat', 'Pneumonia', '', 0),
('F3', 'Demam dan suhu meningkat', 'demam', 'Pneumonia', '', 0),
('F4', 'Sering berkeringat di malam hari', 'berkeringat', 'Pneumonia', '', 0),
('F5', 'Berkurang nafsu makan', 'nafsu', 'Pneumonia', '', 0),
('F6', 'Nafas terasa berat', 'berat sesak', 'Pneumonia', '', 0),
('F7', 'Dada terasa sakit ketika batuk', 'sakit batuk', 'Pneumonia', '', 1),
('F8', 'Batuk lebih dari 7 hari', 'batuk', 'Pneumonia', '', 1),
('G1', 'Sesak nafas', 'sesak', 'Asma', 'a. Minum obat asma\r\nb. Berobat pada dokter\r\nc. Gunakan masker untuk menghalau debu\r\nd. Gunakan pakaian tebal dan hangatkan diri', 0),
('G2', 'Dada terasa berat', 'berat', 'Asma', '', 0),
('G3', 'Batuk kadang berdahak', 'berdahak kadang', 'Asma', '', 1),
('G4', 'Gejala sesak berlangsung lama', 'sesak lama', 'Asma', '', 0),
('G5', 'Sesak jika terasa dingin', 'sesak dingin', 'Asma', '', 0),
('G6', 'Nafas selalu terganggu', 'terganggu', 'Asma', '', 0),
('G7', 'Batuk sembuh dan kumat dalam beberapa hari', 'batuk', 'Asma', '', 1),
('G8', 'Susah untuk bernafas', 'sesak nafas', 'Asma', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
