-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 04, 2014 at 02:22 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `blog`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `content`
-- 

CREATE TABLE `content` (
  `kode_content` int(5) NOT NULL auto_increment,
  `judul_content` varchar(50) default 'kosong',
  `kode_kategori` int(5) default NULL,
  `tanggal` datetime default NULL,
  `penulis` varchar(30) default NULL,
  `content` text NOT NULL,
  `keyword` text NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY  (`kode_content`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `content`
-- 

INSERT INTO `content` (`kode_content`, `judul_content`, `kode_kategori`, `tanggal`, `penulis`, `content`, `keyword`, `deskripsi`) VALUES (1, 'Contoh CRUD Java', 1, '2013-03-25 00:00:00', 'Ahmad Rizal Afani', '<p>\r\n	Postingan kali ini ane mau bahas tentang pemrograman Java, kalo sebelumnya ane kasi Contoh Aplikasi CRUD C# kali ini CRUD java.. tentunya ente sudah tau kan CRUD itu apa? CRUD adalah bentuk dari DDL dan DML dari database? apa itu DDL dan DML ? wah kalo di bahas disini bisa panjang... ente tentunya bisa cari di blog lain yang membahas tentang Mysql kalo ente belum tau tentang DDl dan DML... oke, Guys, langsung aje ya ke contoh CRUD Java nya... :)</p>\r\n', 'CRUD Java Keyword', 'CRUD Java Deskripsi');
INSERT INTO `content` (`kode_content`, `judul_content`, `kode_kategori`, `tanggal`, `penulis`, `content`, `keyword`, `deskripsi`) VALUES (2, 'Belajar Pemrograman Web', 2, '2013-03-25 00:00:00', 'Ahmad Rizal Afani', 'setelah memposting tentang java, kali ini ane kasi tutorial pemrograman Web, pemrograman web banyak macam nya diantaranya ada yang pake jsp (Java), ASP, PHP dan yang paling populer untuk saat ini adalah PHP? mangkanya ane kasi tutorial pemrograman web tentang PHP.. kalo yang pengen ASP atau JSP bisa langsung private ke ane atau nunggu postingan selanjut nya, kira2 berapa lama ya ? hehehe mungkin stahun lagi... wkakakakaka\r\noke, persiapan pertama sebelum anda belajar PHP adalah software XAMPP sebagai Web server dan tentunya di XAMPP sudah ada database Mysql nya yaitu phpmyadmin..', 'Pemrograman Web keywrod', 'Pemrograman Web deskripsi');
INSERT INTO `content` (`kode_content`, `judul_content`, `kode_kategori`, `tanggal`, `penulis`, `content`, `keyword`, `deskripsi`) VALUES (3, 'Java Programming 1', 1, '2013-04-12 00:00:00', 'Ahmad Rizal Afani', 'Java adalah bahasa pemrograman berorientasi objek yang dikembangkan oleh perusahaan Sun Microsystem. Java pertama kali dikonsepkan oleh James Gosling, Patrick Naughton, Cris Warth dan rekan-rekan lainnya di Sun Microsystem pada tahun 1991. Awalnya Gosling memulai Green Project untuk membuat bahasa komputer yang digunakan pada chip-chip embedded. Bahasa ini pada awalnya disebut “Oak” tapi kemudian diubah menjadi “Java” pada tahun 1995 karena nama Oak telah dijadikan hak cipta dan digunakan sebagai bahasa pemrograman lainnya. Nama “Java” sendiri konon diambil dari nama sebuah biji kopi yang berasal dari jawa (dalam bahasa inggris; jawa = java) kesukaan Gosling. Karena orang-orang di Green Project terbiasa menggunakan UNIX yang berbasis C++ dan bukan pascal, maka kebanyakan sintaks diambil dari bahasa C, serta mengadopsi orientasi objek C++ dan bukan prosedural. Java dibekali dengan kemampuan untuk dapat digunakan pada berbagai platform atau dapat dijalankan dalam berbagai sistem operasi dan arsitektur computer. Bahasa Java menurunkan sintaksnya dari bahasa C dan objeknya diadaptasi dari C++, selain itu Java juga bersifat case sensitive.', '', '');
INSERT INTO `content` (`kode_content`, `judul_content`, `kode_kategori`, `tanggal`, `penulis`, `content`, `keyword`, `deskripsi`) VALUES (4, 'Web Programming 1', 2, '2013-04-12 00:00:00', 'Ahmad Rizal Afani', '<p>\r\n	<img alt="" src="/admin/js/kcfinder/upload/images/contoh%20aplikasi%20php%20sederhana.jpg" style="width: 150px; height: 150px; float: left; margin: 10px;" />Web programming adalah sebuah ilmu yang khusus mempelajari tentang pemrograman web. Ada banyak jenis pemrograman, mulai pemrograman hardware, robot, aplikasi sampai web. Nah, karena pebisnis online biasanya cuma ngurusi web programming, maka kira-kira perlu nggak ya seorang pebisnis online untuk belajar soal web programming? Jika pertanyaan ini ditanyakan pada masa awal-awal saya belajar internet dulu, mungkin 90% akan menjawab YA, sisanya akan menjawab TIDAK karena mereka punya anak buah yang bertugas untuk membuatkan web. Tapi di masa sekarang ini, dimana membuat sebuah web secanggih WordPress hanya cukup klik dan isi formulir, maka apakah masih perlu untuk belajar hal-hal yang bikin rambut makin keriting itu? Di jaman sekarang ini, seorang yang baru kenal internet-pun bisa membuat sebuah blog dengan design yang maknyus dalam waktu kurang dari 1 jam saja heheheï¿½ Sehingga sekarang pembuatan web sudah bukanlah perkara sulit lagi. Tinggal login cpanel, masuk fantastico, isi formulirnya dan sim salabim jadi deh blognya. Lihat kan? Bahkan dengan 1 paragraf tulisanpun saya bisa jelaskan cara menginstall WordPress. Nah, trus buat apa coba seseorang belajar web programming? Karena itulah jika pertanyaan tersebut ditanyakan sekarang, maka jawabnya mungkin 10% bilang YA dan 90% bilang TIDAK PERLU. Tapi apakah benar-benar tidak perlu untuk belajar web programming? Kalau saya ditanya demikian, saya akan jawab jika anda punya seseorang yang bisa diandalkan untuk mengatasi masalah anda dan cukup uang untuk itu, maka silahkan fokus pada bagaimana web itu menghasilkan uang. Namun jika anda termasuk orang yang pas-pasan dan tak punya seseorang yang siap mengurusi web anda, maka sebaiknya anda mulai belajar walaupun dasar-dasarnya saja. Web programming kan ada tingkatan-tingkatannya. Jangan sampai anda nggak tahu bagaimana menampilkan banner di sidebar. Jangan sampai mengubah kata-kata dalam form opt-in aja anda tidak bisa. Jadi, untuk dasar-dasar HTML, paling ndak ada tahulah bagaimana fungsi masing-masing perintah tersebut. Tahu bagaimana meletakkan gambar, bagaimana mengedit kata-kata di form, dsb. Masak sih anda mau bayar orang hanya untuk mengubah tulisan ï¿½Please Enter your Emailï¿½ dengan tulisan ï¿½Silahkan masukkan email andaï¿½ gara-gara takut form-nya jadi error. Nah, sedikit-sedikit luangkan waktu untuk melihat kode-kode HTML itu dengan lebih dekat. Dan ilmu ini sangat besar manfaatnya untuk menganalisa kekurangan lawan-lawan anda dalam SEO lho.. heheheï¿½</p>\r\n', '', '');
INSERT INTO `content` (`kode_content`, `judul_content`, `kode_kategori`, `tanggal`, `penulis`, `content`, `keyword`, `deskripsi`) VALUES (5, 'Java Programming 2', 1, '2013-04-12 00:00:00', 'Ahmad Rizal Afani', 'Untuk membuat program dengan bahasa java, kita dapat menulis source code pada teks editor yang kemudian disimpan dalam file berekstension .java. Selanjutnya kita mengcompile source code tersebut dengan perintah javac, sehingga didapatkan sebuah file berekstension .class. Untuk merunning program, kita gunakan perintah java. Kompiler dan interpreter untuk program Java berbentuk Java Development Kit (JDK) yang diproduksi oleh Sun Microsystems. Interpreter untuk program Java sendiri sering juga disebut Java Runtime Environment (JRE) atau Java Virtual Machine. Untuk mengembangkan program Java dibutuhkan JDK, sementara jika hanya ingin menjalankan bytecode Java cukup dengan JRE saja.\r\nKarakteristik Java\r\nSederhana\r\nBahasa pemrograman Java menggunakan sintaks mirip dengan C++ dengan menghilangkan penggunaan pointer yang rumit dan multiple inheritance, sehingga menarik banyak pengguna C++ untuk beralih ke Java.\r\n\r\nBerorientasi objek\r\nArtinya, semua aspek yang terdapat dalam java adalah objek. Hal ini sangat memudahkan pemrogram untuk mendesain, membuat, mengembangkan dan mengalokasi kesalahan sebuah program dengan basis Java secara cepat, tepat, mudah dan terorganisir.\r\n\r\n3. Terdistribusi\r\n\r\nJava dibuat untuk membuat aplikasi terdistribusi secara mudah dengan adanya libraries networking yang terintegrasi pada Java.\r\n\r\n4. Automatic Garbage Collection\r\n\r\nFasilitas pengaturan penggunaan memori sehingga para pemrogram tidak perlu melakukan pengaturan memori secara langsung (seperti halnya dalam bahasa C++ yang dipakai secara luas).\r\n\r\n5. Portable atau multiplatform\r\n\r\nSource code maupun program Java dapat dengan mudah dibawa ke platform yang berbeda-beda tanpa harus dikompilasi ulang.\r\n\r\n6. Performance\r\n\r\nPerformance pada Java sering dikatakan kurang tinggi. Namun performance Java dapat ditingkatkan menggunakan kompilasi Java lain seperti buatan Inprise, Microsoft ataupun Symantec yang menggunakan Just In Time Compilers (JIT).\r\nPenggunaan memori yang banyak\r\nJava menggunakan memori yang cukup banyak bila dibandingkan dengan bahasa pemrograman sebelumnya, seperti C/C++ dan pascal.\r\n\r\n8. Secure\r\n\r\nSebagai bahasa pemrograman untuk aplikasi internet dan terdistribusi, Java memiliki beberapa mekanisme keamanan untuk menjaga aplikasi agar tidak digunakan untuk merusak sistem komputer yang menjalankan aplikasi tersebut.\r\n\r\nKebanyakan sintaks diambil dari bahasa C, serta mengadopsi orientasi objek C++ dan bukan prosedural seperti yang ada pada pascal.\r\nMudah didekompilasi\r\nDekompilasi adalah proses membalikkan dari kode jadi menjadi source kode. Ini dimungkinkan karena kode jadi Java merupakan bytecode yang menyimpan banyak atribut bahasa tingkat tinggi, seperti nama-nama kelas, metode, dan tipe data. Dengan demikian, algoritma yang digunakan program akan lebih sulit disembunyikan dan mudah dibajak.', '', '');
INSERT INTO `content` (`kode_content`, `judul_content`, `kode_kategori`, `tanggal`, `penulis`, `content`, `keyword`, `deskripsi`) VALUES (6, 'Web Programming 2', 2, '2013-04-12 00:00:00', 'Ahmad Rizal Afani', '<p>\r\n	<img alt="" src="/admin/js/kcfinder/upload/images/contoh%20aplikasi%20php%20sederhana.jpg" style="width: 150px; height: 150px; margin: 10px; float: left;" />Kurang lebih sudah tiga tahun ini saya mendalami dunia internet dan web. Awal ketertarikan saya pada dunia ini-hingga akhirnya menjadi seorang web programmer-adalah karena minat dan bakat. Dulu ketika masih kuliah, saya tidak banyak mengerti dunia pemrograman. Di sekolah pun saya belum pernah diajari konsep pemrograman secara mendasar. Konsep pemrograman baru diajari ketika semester-semester awal masa perkuliahan. Namun demikian, dengan berbagai tugas yang diberikan oleh bapak dan ibu dosen tentang pemrograman, lambat laun saya semakin tahu dimana letak ketertarikan saya. Jenis pemrograman ada banyak, tetapi sebagai mahasiswa IT paling tidak menguasai salah satu. Dalam dunia internet dan web saja banyak sekali yang bisa dipelajari, dari blog, pemrograman web, web service, CMS, SEO, konten kreatif, jurnalisme, bisnis dan pemasaran online, e-commerce, jaringan sosial, dsb. Terlebih di jaman seperti sekarang ini, internet sudah seperti kebutuhan hidup yang tak mampu memisahkan jarak. Di mana pun kita berada, kita masih dapat mengakses sebuah halaman web melalui smartphone yang kita miliki. Untuk menjadi web programmer sebenarnya tidak terlalu sulit, hanya membutuhkan kebiasaan dan belajar melalui tahapan-tahapan yang berproses. Jujur saja, saya dulu belajar membuat web dengan membuat sebuah blog. Kemudian berlanjut dengan menjejali berbagai macam CMS, coding tanpa framework (stratch), kemudian mencoba menggunakan Framework. 1. Membuat Blog Blog merupakan sebuah wadah yang sifatnya paperless. Jika dulu kita menulis melalui diary atau tulisan lain dalam lembaran-lembaran kertas, di zaman sekarang kita dapat menuliskan segala sesuatu melalui blog. Hal-hal yang menarik untuk ditulis dan dibagikan kepada orang lain dapat dituangkan ke dalam blog. Menulis di blog melatih kita untuk memberikan opini terhadap suatu hal. Kita juga bisa membangun idealisme kita melalui sebuah blog, menciptakan brand, bahkan mempengaruhi orang lain. Di lain sisi, kita bisa tahu bagaimana mengelola layout dan konten sebuah web. Cobalah untuk memodifikasi blog tersebut sedemikian rupa sehingga menarik banyak orang untuk membaca. Hal inilah yang mendasari seorang web programmer untuk mengerti konsep CMS (Content Management System). Blog adalah bagian paling sederhana dari sebuah CMS. Kita akan lebih tahu dasar-dasar bagaimana mengelola dan memodifikasi konten web sebelum mempelajari CMS. Membuat blog pada dasarnya dapat dilakukan dengan dua cara, yaitu melalui layanan blog gratisan atau membayar hosting sendiri. Blog gratisan yang dimaksud adalah kita tidak perlu membayar sewa hosting untuk membuat sebuah blog, web hosting, domain, serta halaman back-end tersedia secara gratis. Kekurangannya yaitu kita tidak bisa memodifikasi blog tersebut secara penuh (terbatas), juga nama domain yang disediakan tidak bisa ditentukan sesuka hati (panjang dan biasanya mengandung nama layanan yang digunakan). Misalnya abcdef.blogspot.com atau 12345.blogspot.com. Meskipun saat ini beberapa jasa (berbayar) juga menyediakan layanan URL redirect, agar bisa membuat nama domain sesuai keinginan kita.</p>\r\n', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `kategori`
-- 

CREATE TABLE `kategori` (
  `kode_kategori` int(5) NOT NULL auto_increment,
  `judul_kategori` varchar(30) default NULL,
  PRIMARY KEY  (`kode_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `kategori`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `setting`
-- 

CREATE TABLE `setting` (
  `title` varchar(100) default NULL,
  `keyword` text NOT NULL,
  `deskripsi` text NOT NULL,
  `limit_content` int(11) NOT NULL,
  `contact_text` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `setting`
-- 

INSERT INTO `setting` (`title`, `keyword`, `deskripsi`, `limit_content`, `contact_text`) VALUES ('Blog Sederhana dengan PHP', 'blog sederhana keyword', 'blog sederhana deskripsi', 2, 'JLN Ikan Hiu no 30<br />\r\nKecamatan Banyuwangi<br />\r\nKabupaten Banyuwangi<br />\r\nNo HP : 087755925565<br />');

-- --------------------------------------------------------

-- 
-- Table structure for table `userapp`
-- 

CREATE TABLE `userapp` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) default NULL,
  `nama_lengkap` varchar(100) default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `userapp`
-- 

INSERT INTO `userapp` (`username`, `password`, `nama_lengkap`) VALUES ('mamet', '231213', 'Rahmat Hidayat');
INSERT INTO `userapp` (`username`, `password`, `nama_lengkap`) VALUES ('hany', 'admin', 'Nurhanifah');
INSERT INTO `userapp` (`username`, `password`, `nama_lengkap`) VALUES ('redi', 'admin', 'Redi Margiana');
INSERT INTO `userapp` (`username`, `password`, `nama_lengkap`) VALUES ('roy', 'admin', 'Roy Dian Arif');
INSERT INTO `userapp` (`username`, `password`, `nama_lengkap`) VALUES ('bebby', 'admin', 'Bebby Aulia');
