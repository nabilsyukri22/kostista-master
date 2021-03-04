-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 09:35 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kostista`
--

-- --------------------------------------------------------

--
-- Table structure for table `kostista_kos`
--

CREATE TABLE `kostista_kos` (
  `id_kos` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `harga_min` int(11) NOT NULL,
  `harga_max` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tipe` enum('Putri','Putra','Campur') NOT NULL,
  `image_header` varchar(200) NOT NULL,
  `image_header2` varchar(200) DEFAULT NULL,
  `image_header3` varchar(200) DEFAULT NULL,
  `jarak` int(11) NOT NULL,
  `wifi` enum('0','1') NOT NULL DEFAULT '0',
  `air` enum('0','1') NOT NULL DEFAULT '0',
  `listrik` enum('0','1') NOT NULL DEFAULT '0',
  `km_dalam` enum('0','1') NOT NULL DEFAULT '0',
  `dekat_kampus` enum('0','1') NOT NULL DEFAULT '0',
  `dapur` enum('0','1') NOT NULL DEFAULT '0',
  `nama_pemilik` varchar(50) NOT NULL,
  `no_hp_pemilik` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kostista_kos`
--

INSERT INTO `kostista_kos` (`id_kos`, `id_user`, `deskripsi`, `alamat`, `slug`, `date`, `time`, `status`, `lokasi`, `harga_min`, `harga_max`, `nama`, `tipe`, `image_header`, `image_header2`, `image_header3`, `jarak`, `wifi`, `air`, `listrik`, `km_dalam`, `dekat_kampus`, `dapur`, `nama_pemilik`, `no_hp_pemilik`) VALUES
(12, 3, 'Batas kunjungan jam 10 malam. 1 kamar 1 penghuni tidak bisa berdua. Tidak terima pasutri. Kunci gerbang diberikan masing - masing. Tamu dilarang menginap. Pembayaran kost paling telat tanggal 5 setiap bulannya. Cuci baju sendiri / laundry. Dilarang berisik / gaduh. Tidak boleh bawa binatang peliharaan.', 'Jl.Raya Paledang Bandung No.33', 'Kost-BR-46-Pasteur-Bandung', '2017-07-10', '22:51:49', 1, 'Bandung', 500000, 0, 'Kost BR 46 Pasteur Jawa Barat Bandung', 'Putra', 'kos1.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(13, 3, 'Sekamar berdua 1.325.000/bulan. Harga sewa kamar lainnya 1.175.000/ bulan (Ada air panas) atau bila sekamar berdua menjadi 1.575.000/bulan.', 'Jl. Permai No.17 Cigadung Cibeunying Kaler Kota Bandung ', 'Kost-Cibeunying-Permai', '2017-06-07', '13:56:15', 1, 'bandung', 700000, 0, 'Kost Cibeunying Permai', 'Putri', 'kos2.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(14, 3, 'Wifi 24 jam unlimited, termasuk listrik (bawa dispenser tambah 50rb/bulan) , tersedia cuci setrika', 'Jl.Anjani Sukasari Bandung No.90', 'guest-house-anjani-sukasari-bandung', '2017-06-07', '15:47:06', 1, 'Bandung', 600000, 0, 'Guest House Anjani Sukasari Bandung', 'Campur', 'kos3.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(33, 6, '10 menit Ber jalan kaki ke UNPAR ,TV Cable, Wifi 24 Jam, Fasilitas Kost Bersih, Satpam 24 Jam, CCTV 24 Jam, Cleaning Service Terlatih,', 'Jl.Cidadap No.1', 'kost-platinum-cidadap-bandung', '2017-07-12', '15:27:02', 1, 'Bandung', 900000, 0, 'Kost Platinum Cidadap Bandung', 'Putra', '1.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(34, 7, 'fasilitas kamar standar: wifi, kasur, lemari, gantungan baju, cermin, ember, gayung, dllrequest tambahan fasilitas seperti : tv, saluran tv cable, ac, air panas (harga berbeda)listrik token\r\nup grade untuk penambahan fasilitas ac, air panas, tv cable disesuaikan dengan request fasilitas yabgbdiinginkan penyewa', 'Jl. Cibiru No.900', 'kost-bowie-cibiru-bandung', '2017-07-12', '15:29:56', 1, 'Bandung', 1000000, 0, 'Kost Bowie Cibiru Bandung', 'Putra', '2.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(35, 8, 'Bayar 2 bulan di awal. Untuk selanjutnya bisa bayar bulanan sebelum tgl 5 di awal bulan.Bisa berdua dalam 1 kamar. Biaya kos masing2 rp 750 ribu per bulan.Batas kunjungan jam 9 malam.Batas pergi jam 11 malam, sekali2 bisa lebih malam dengan perjanjian dahulu dengan pengelola', 'Jl. Sukaluyu No.222', 'kost-sapujagad-2-sukaluyu-bandung', '2017-07-12', '15:32:13', 1, 'Bandung', 850000, 0, 'Kost Sapujagad 2 Sukaluyu Bandung', 'Putra', '3.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(36, 9, 'Dekat dengan telkom university. Depan Lapangan Bola (luas)AmanBebas BanjirDekat Kampus Telkom University', 'Jl. Wisma No.88', 'kost-wisma-lentera-bandung', '2017-07-12', '15:34:44', 1, 'Bandung', 1100000, 0, 'Kost Wisma Lentera Bandung', 'Putra', '4.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(37, 10, 'Dilarang melakukan tindakan yg melanggar norma-norma kesusilaan. Harga kosan sudah termasuk biaya laundry 20 Kg/bulan, 5 Kg/minggu.Jam check out maksimal 13.00 , akan dikenakan extra time 25rbu/6 jam. Harga sewa tergantung kamar yg dipilih, dan fasilitas yg di ambil', 'Jl. Rancasari No.88', 'kost-pondok-mars-barat-iii-no-8-tipe-b-rancasari-bandung', '2017-07-12', '15:37:02', 1, 'Bandung', 1500000, 0, 'Kost Pondok Mars Barat III No. 8 Tipe B Rancasari Bandung', 'Putra', '6.JPG', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(38, 11, 'biaya tambahan internet Rp. 50.000', 'Jl. Subur Coblong No.21', 'kost-sadang-subur-i-coblong-bandung', '2017-07-12', '15:39:31', 1, 'Bandung', 550000, 0, 'Kost Sadang Subur I Coblong Bandung', 'Campur', '7.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(39, 12, 'Nyaman,,aman,,cocok untuk mahasiswa dan pekerja. sebagian besar bangunan baru jadi. byr kosan 1 thn cash byr hanya 11 bulan saja.dan kost ini dekat dengan kampus UPI,UIN, STIKES BAKTI KENCANA, bisa ditempuh dengan berjalan kaki tidak perlu naik ojek bagi yang tdk membawa kendaraan, karena jaraknya yg sangat dekat dengan jalan raya. Pemilik kos rumahnya di depan kosan yang ada gambar burung dan rusa di temboknya', 'Jl. Cibiru No.21', 'kost-pondok-jati-cibiru-bandung', '2017-07-12', '15:41:26', 1, 'Bandung', 750000, 0, 'Kost Pondok Jati Cibiru Bandung', 'Campur', '8.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(40, 13, 'Angkutan umum .Dkt jalan Besar,sirkulasi udara bagus', 'Jl. Sukasari No.121', 'kost-niji-house-sukasari-bandung', '2017-07-12', '15:44:16', 1, 'Bandung', 500000, 0, 'Kost Niji House Sukasari Bandung', 'Campur', '9.JPG', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(41, 14, 'Fasilitas:-Kamar mandi di dalam-Listrik token masing-masing kamar-Tidak ada tagihan sampah dan air tiap bulan nya-Antena TV masing-masing kamar-Tersedia warung kebutuhan sehari-hari (sembako, pulsa, tiken listrik, galon, dll)-Dekat warung nasi dan tempat makan -Dekat dengan minimarket-Dekat dengan jalan raya-Ke kampus UIN tinggal jalan.', 'Jl. Cibeurem No.812', 'kost-nyaman-cibeurem-bandung', '2017-07-12', '10:47:04', 1, 'Bandung', 650000, 0, 'Kost Nyaman Cibeurem Bandung', 'Putri', '10.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(42, 15, 'Design Kamar Tidur Minimalis, Perlengkapan Kamar Mandi sudah Tersedia kasur Springbed,Meja belajar, Kursi, Lemari baju, Kamar Mandi di dalam, Lengkap dengan air Panas, kloset duduk dan wastafelJaringan Internet khusus Penghuni 24 JamJaringan TV kabel,Cleaning service khusus kamar di bersihkan seminggu 2 kali,Cuci Baju dan Setrika 8 potong /2 hari sekali , Tersedia ruang belajar yang luas dan nyaman, Tersedia parkir mobil dan motor', 'Jl. Peta 90', 'kost-amara-residence-bandung', '2017-07-12', '15:50:08', 1, 'Bandung', 450000, 0, 'Kost Amara Residence Bandung', 'Putri', '11.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(43, 16, 'Harga sudah termasuk listrik. Bila sekamar berdua dikenai tambahan 500ribu. Tersedia harga 1,6juta (ukuran kamar lebih kecil).', 'Jl. Tubagus Ismanil No.90', 'kost-tipe-a-tubagus-ismail-depan-no-90-bandung', '2017-07-12', '15:53:42', 1, 'Bandung', 950000, 0, 'Kost Tipe A Tubagus Ismail Depan No. 90 Bandung', 'Campur', '12.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(44, 17, 'Batas jam berkunjung sampai jam 10. Harga sudah termasuk listrik', 'Jl. Kosambi No.18', 'kost-wartawan-18-bandung', '2017-07-12', '15:55:52', 1, 'Bandung', 1600000, 0, 'Kost wartawan 18 Bandung', 'Putri', '13.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(45, 18, 'Harga sudah termasuk listrik dan air. Free Nasi putih malam saja. Sekamar berdua tambah 300.000/bulan.', 'Jl. Ciheulang No.235', 'kost-terusan-ciheulang-no-235-b-type-a-coblong-bandung', '2017-07-12', '15:57:43', 1, 'Bandung', 1700000, 0, 'Kost Terusan Ciheulang No. 235 B Type A Coblong Bandung', 'Putri', '14.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(46, 19, 'Jam berkunjung sampai jam 10 malam. Tamu lawan jenis tidak boleh menginap,jika berkunjung seperlunya saja. Harga sudah termasuk listrik. Biaya tambahan 50rb jika bawa tv & dispenser. Sekamar berdua biaya jadi 600rb/bulan.', 'Jl. Antanan 1', 'kost-antanan-1-bandung', '2017-07-12', '16:00:09', 1, 'Bandung', 1300000, 0, 'Kost Antanan 1 Bandung', 'Putri', '15.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(47, 20, 'Semua kamar kost dan paviliun baru selesai direnovasi dan di cat ulang. Tersedia 4 kamar kost dan 3 Paviliun. Kamar kost berada di lantai atas dg fasilitas 2 (dua) kamar mandi luar dan 1 (satu) pantry utk dipakai bersama. Untuk paviliun berada di lantai bawah, masing-masing memiliki dua ruangan/kamar, kamar mandi dalam dan pantry.', 'Jl. Dago No.87', 'kost-dan-paviliun-dago-cintawangi-bandung', '2017-07-12', '16:11:53', 1, 'Bandung', 1050000, 0, 'Kost dan Paviliun Dago Cintawangi Bandung', 'Putri', '16.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(48, 21, 'Jam malam sampai pukul 22.00. Harga sudah termasuk listrik dan air. Free air minum. Free Laundry 4 potong. Parkir mobil 150.000/bulan (Free cuci mobil 2-3x)', 'Jl. Coblong No.6', 'kost-yayu-no16-type-b-coblong-bandung', '2017-07-12', '16:14:28', 1, 'Bandung', 1400000, 0, 'Kost Yayu No.16 Type B Coblong Bandung', 'Putri', '18.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(49, 22, 'Harga sudah termasuk listrik, Wifi-Internet, pembayaran bisa perbulan, Laundri 20kg/bulan, batas bertamu jam 22.00 WIB', 'Jl. Sukajadi No.23', 'kost-light-home-sukajadi-bandung', '2017-07-12', '16:16:38', 1, 'Bandung', 2000000, 0, 'Kost Light Home Sukajadi Bandung', 'Putri', '20.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(50, 23, '. Batasan Kunjungan Tamu : -*. Harga Termasuk listrik : belum*. Biaya tambahan untuk parkir mobil : Tidak ada biaya tambahan*. Ada Cleaning Room ? : -*. Ada Fasilitas laundry? : -*. Akses kunci 24 jam? : Ya, penghuni diberikan kunci gerbang*. WIFI memakai sistem voucer? : ada Wifi*. Fasilitas dapur, gas harus iuran ? : ada Dapur', 'Jl. Dipatiukur No.17', 'kost-nur-house-bandung', '2017-07-12', '16:18:49', 1, 'Bandung', 1150000, 0, 'Kost Nur House bandung', 'Campur', '17.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(51, 24, 'Harga sudah termasuk listrik dan air tapi belum termasuk Laundry. Sekamar berdua ada tambahan biaya.- Terdapat teras pribadi di kamar, beserta kursi dan meja - Memiliki pemandangan indah dari kamar dan teras- Terdapat bath up pribadi & kamar mandi luas', 'Jl. Pagarsih No.78', 'kost-tian-jalan-pagarsih-no78', '2017-07-12', '16:20:36', 1, 'Bandung', 2700000, 0, 'Kost Tian Jalan Pagarsih No.78', 'Campur', '19.jpg', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', ''),
(53, 27, 'asasasas', 'asasasas', 'assas', '2020-01-17', '22:05:29', 1, 'Bandung', 0, 0, 'assas', 'Putri', 'sipadu_sikoko.png', NULL, NULL, 0, '0', '0', '0', '0', '0', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `kostista_laporan`
--

CREATE TABLE `kostista_laporan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kostista_review`
--

CREATE TABLE `kostista_review` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL,
  `review` text NOT NULL,
  `star` enum('1','2','3','4','5') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kostista_role`
--

CREATE TABLE `kostista_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kostista_role`
--

INSERT INTO `kostista_role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `kostista_user`
--

CREATE TABLE `kostista_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kostista_user`
--

INSERT INTO `kostista_user` (`id_user`, `username`, `password`, `fullname`, `jk`, `email`, `no_hp`, `alamat`, `id_role`) VALUES
(1, 'sheptian', 'e2d74b7c4ccda2a5a2ac3819f419e4ef', 'sheptian bagja utama', 'Pria', 'sheptian96@gmail.com', '087824392239', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 1),
(3, 'alvian', 'd14e60855289c9ef93549c1de6531e4f', 'alvian ahja wijaya', 'Pria', 'alvian@gmail.com', '085222549953', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 2),
(6, 'kurniawan', 'e10adc3949ba59abbe56e057f20f883e', 'Kurniawan Aditya', 'Pria', 'kurniawan@gmail.com', '08752563663', 'Jl.Raya Cibeurem No.19', 2),
(7, 'nawan', 'e10adc3949ba59abbe56e057f20f883e', 'Nawan Tutu Syah Lampah', 'Pria', 'nawan@gmail.com', '085322145896', 'Jl. Raya Cimahi No.90', 2),
(8, 'rudy', 'e10adc3949ba59abbe56e057f20f883e', 'Rudy Setiawan', 'Pria', 'rudy@gmail.com', '085369985555', 'Jl.Pasir Impun No.90', 2),
(9, 'firman', 'e10adc3949ba59abbe56e057f20f883e', 'Firman Alhadiansyah', 'Pria', 'firman@gmail.com', '085244215511', 'Jl. Ir.Hj Juanda No.11', 2),
(10, 'tantan', 'e10adc3949ba59abbe56e057f20f883e', 'Tantan Faturahman', 'Pria', 'tantan@gmail.com', '08125648974', 'Jl. Gede Bangkong No.12', 2),
(11, 'azzi', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Azzi Alfurqon', 'Pria', 'azzi@gmail.com', '082133669988', 'Jl. Dipatiukur No.67', 2),
(12, 'reza', 'e10adc3949ba59abbe56e057f20f883e', 'Reza Yogi Andria', 'Pria', 'reza@gmail.com', '0228956938', 'Jl. Soekarno Hatta No.90', 2),
(13, 'angga', 'e10adc3949ba59abbe56e057f20f883e', 'Rangga Jaya Utama', 'Pria', 'rangga@gmail.com', '08526335214', 'Jl. Pasirkoja No.90', 2),
(14, 'yuliani', 'e10adc3949ba59abbe56e057f20f883e', 'Yuliani Putri Utama', 'Wanita', 'yuliani@gmail.com', '087758521245', 'Jl.Holis No.87', 2),
(15, 'rahma', 'e10adc3949ba59abbe56e057f20f883e', 'Rahma Aulia', 'Wanita', 'rahma@gmail.com', '085245696963', 'Jl. Peta No.88', 2),
(16, 'ani', 'e10adc3949ba59abbe56e057f20f883e', 'Ani Yani', 'Wanita', 'ani@gmail.com', '085254698988', 'Jl.Sereh No.78', 2),
(17, 'rani', 'e10adc3949ba59abbe56e057f20f883e', 'Rani Suryani', 'Wanita', 'rani@gmail.com', '0852633562312', 'Jl. Jamika No.4', 2),
(18, 'rita', 'e10adc3949ba59abbe56e057f20f883e', 'Rita Asih', 'Wanita', 'rita@gmail.com', '085245658878', 'Jl. Sukamulya No.2', 2),
(19, 'Kartika', 'e10adc3949ba59abbe56e057f20f883e', 'Kartika Sari', 'Wanita', 'kartika@gmail.com', '089563652145', 'Jl. Sunda No.22', 2),
(20, 'ariska', 'e10adc3949ba59abbe56e057f20f883e', 'Sri Ariska', 'Wanita', 'ariska@gmail.com', '085622325645', 'Jl. Ciroyom', 2),
(21, 'yayu', 'e10adc3949ba59abbe56e057f20f883e', 'Yayu', 'Wanita', 'yayu@gmail.com', '085698974563', 'Jl. Burangrang No.82', 2),
(22, 'kezia', 'e10adc3949ba59abbe56e057f20f883e', 'Kezia Andria', 'Wanita', 'kezia@gmail.com', '08545689758', 'Jl. Buah Batu No.32', 2),
(23, 'Nurhikmah', 'e10adc3949ba59abbe56e057f20f883e', 'Nurhikmah', 'Wanita', 'nur@gmail.com', '0856478945', 'Jl. Dipatiukur No.56', 2),
(24, 'tian', 'e10adc3949ba59abbe56e057f20f883e', 'Tian Bagja ', 'Pria', 'tian@gmail.com', '087854446958', 'Jl. Pagarsih', 2),
(25, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'testest', 'Pria', 'test@gmail.com', '087857846', 'Jl.Pagarsih', 2),
(26, 'qadri', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Qadri', 'Pria', 'mqad21@gmail.com', '081260743660', 'aasasas', 1),
(27, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'QQQQ', 'Pria', 'mqad21@gmail.cm', '08129820024', 'asasasasasasasas', 2),
(28, 'mqad21', '46807ec9ac57df35845e239a878534a0', 'Muhammad Qadri', 'Pria', 'mqad21@gmail.com', '08129820024', '1wsdadasdasdasd', 2),
(29, 'qq', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Qadri', 'Pria', 'mqad21@gmail.com', '08129820024', 'qasasas', 2),
(30, 'aaaa', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Qadri', 'Pria', '221709860@stis.ac.id', '123', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kostista_verifikasi`
--

CREATE TABLE `kostista_verifikasi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kostista_kos`
--
ALTER TABLE `kostista_kos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indexes for table `kostista_laporan`
--
ALTER TABLE `kostista_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kostista_review`
--
ALTER TABLE `kostista_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kostista_role`
--
ALTER TABLE `kostista_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `kostista_user`
--
ALTER TABLE `kostista_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `kostista_verifikasi`
--
ALTER TABLE `kostista_verifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kostista_kos`
--
ALTER TABLE `kostista_kos`
  MODIFY `id_kos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `kostista_laporan`
--
ALTER TABLE `kostista_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kostista_review`
--
ALTER TABLE `kostista_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kostista_role`
--
ALTER TABLE `kostista_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kostista_user`
--
ALTER TABLE `kostista_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kostista_verifikasi`
--
ALTER TABLE `kostista_verifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
