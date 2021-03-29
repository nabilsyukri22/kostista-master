-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Mar 2021 pada 11.00
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kostista_kos`
--

CREATE TABLE `kostista_kos` (
  `id_kos` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deskripsi` text CHARACTER SET utf8 NOT NULL,
  `alamat` text CHARACTER SET utf8 NOT NULL,
  `slug` varchar(200) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `lokasi` varchar(20) CHARACTER SET utf8 NOT NULL,
  `harga_min` int(11) NOT NULL,
  `harga_max` int(11) NOT NULL,
  `nama` varchar(60) CHARACTER SET utf8 NOT NULL,
  `tipe` enum('Putri','Putra','Campur','Khusus Muslimah') CHARACTER SET utf8 NOT NULL,
  `image_header` varchar(200) CHARACTER SET utf8 NOT NULL,
  `image_header2` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `image_header3` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `jarak` decimal(4,3) NOT NULL,
  `wifi` enum('0','1') NOT NULL,
  `air` enum('0','1') NOT NULL,
  `listrik` enum('0','1') NOT NULL,
  `km_dalam` enum('0','1') NOT NULL,
  `dekat_kampus` enum('0','1') NOT NULL,
  `dapur` enum('0','1') NOT NULL,
  `nama_pemilik` varchar(50) CHARACTER SET utf8 NOT NULL,
  `no_hp_pemilik` varchar(13) CHARACTER SET utf8 NOT NULL,
  `jumlah_tersedia` int(11) NOT NULL,
  `X` decimal(17,16) DEFAULT NULL,
  `Y` decimal(17,14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kostista_kos`
--

INSERT INTO `kostista_kos` (`id_kos`, `id_user`, `deskripsi`, `alamat`, `slug`, `date`, `time`, `status`, `lokasi`, `harga_min`, `harga_max`, `nama`, `tipe`, `image_header`, `image_header2`, `image_header3`, `jarak`, `wifi`, `air`, `listrik`, `km_dalam`, `dekat_kampus`, `dapur`, `nama_pemilik`, `no_hp_pemilik`, `jumlah_tersedia`, `X`, `Y`) VALUES
(1, 3, 'Sekamar sendiri. Bebas banjir, akses mudah, tempat strategis dan keamanan terjaga. Dekat Stasiun, halte, masjid, pasir dan perkantoran.', 'Jl. H. Hasbi No. 16 Kel. Bidara Cina, Kec. Jatinegara, Jakarta Timur, DKI Jakarta', 'Kost-Omega', '2021-03-14', '15:02:00', 1, 'Bonasel', 750000, 850000, 'Kost Omega', 'Putra', 'Kost-Omega.jpg', 'Kost-Omega2.jpg', 'Kost-Omega3.jpg', '0.300', '1', '1', '1', '1', '1', '1', 'Muhammad Alkatiri', '6287712779844', 10, '-6.2320817251737860', '106.86886013878782'),
(2, 29, 'Bangunan bagus, kosan rapih, bersih dan lokasi strategis. Dekat stasiun kereta, halte, masjid, minimarket, Rumah Sakit.', 'Jl. Setia No.23 Rt 008/Rw 009, Kp. Melayu, Jatinegara, Kota Jakarta Timur', 'Kost-23', '2021-03-14', '15:06:00', 1, 'Bonsay', 1050000, 1150000, 'Kost 23', 'Putri', 'Kost-23.jpg', 'Kost-232.jpg', 'Kost-233.jpg', '0.900', '1', '1', '1', '1', '0', '1', 'Hartono', '6285211667755', 2, '-6.2276979540712270', '106.86570842344642'),
(3, 3, 'Gerbang tutup jam 23.00 WIB. Bersih, tenang, dan luas. Dekat dengan pasar, masjid, stasiun kereta.', 'Bintang Timur, Jl. Otista 3 B No.11, Rt.1/Rw.5, Cipinang Cempedak, Kacamatan Jatinegaara, Kota Jakarta Timur', 'Kost-Bintang-Timur', '2021-03-14', '15:10:00', 1, 'Bonasel', 1550000, 1600000, 'Kost Bintang Timur', 'Campur', 'Kost-Bintang-Timur.jpeg', 'Kost-Bintang-Timur2.jpeg', 'Kost-Bintang-Timur3.jpeg', '0.600', '1', '1', '1', '1', '0', '1', 'Bintang Sahala M', '6281210445577', 2, '-6.2313117284721960', '106.87214876762317'),
(4, 7, 'Kamar mandi dalam, luas 3x3, Dekat alfamart Indomaret 5 menit sampe. Depan mushola', 'Jalan Kebon Nanas Utara 1 Gang K.H Sabdalloh no 4 RT 3 RW 7 Cipinang Cempedak, Jatinegara, Kota Jakarta Timur 13340 ', 'Greyhouse', '2021-03-14', '15:14:00', 1, 'Bonasut', 850000, 850000, 'Greyhouse ', 'Putra', 'Greyhouse.jpeg', 'Greyhouse2.jpg', 'Greyhouse3.jpg', '0.500', '1', '1', '1', '1', '1', '1', 'Pak Cholid', '6281818188068', 1, '-6.2309744641178150', '106.87019531609727'),
(5, 30, 'Satu kamar satu orang. Ada kolam ðŸŸ', 'Jl H Yahya no19 rt7/rw9 jatinegara 13340', 'Kost-Yahya-19', '2021-03-14', '15:18:00', 1, 'Bonasut', 450000, 500000, 'Kost Yahya 19', 'Campur', 'Kost-Yahya-19.jpg', 'Kost-Yahya-192.jpg', 'Kost-Yahya-193.jpg', '0.600', '1', '1', '1', '1', '1', '1', 'Endang', '6289652511623', 2, '-6.2290766856636015', '106.87214553878783'),
(6, 6, 'Satu kamar satu orang, kamar mandi dalam, dekat kampus, dekat pasar, dekat alfamart', 'Jalan Otto Iskandardinata Gang Sensus I No. 8B RT 01/RW 04 Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Sinaga', '2021-03-14', '15:22:00', 1, 'Bonsay', 800000, 850000, 'Kost Sinaga', 'Putri', 'Kost-Sinaga.jpeg', 'Kost-Sinaga2.jpeg', 'Kost-Sinaga3.jpeg', '0.150', '1', '1', '1', '1', '1', '1', 'Pak Sinaga', '6282144491112', 1, '-6.2319094776033730', '106.86625870015368'),
(7, 31, 'Satu kamar satu orang, kamar mandi dalam, kosnya setiap hari dibersihin, ada parkir, dekat dengan halte Bidara Cina dan Alfamidi.', 'Jl. Otto iskandardinata Raya, gg. Abdurrahman No. 16, RT 001 RW 009, Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Sarah', '2021-03-14', '15:26:00', 1, 'Bonsay', 650000, 700000, 'Kost Sarah', 'Khusus Muslimah', 'Kost-Sarah.jpg', 'Kost-Sarah2.jpg', 'Kost-Sarah3.jpg', '0.500', '1', '1', '1', '1', '1', '1', 'Mbak Apri (Yang kelola kost)', '628151847171', 2, '-6.2311273839401350', '106.86634203868057'),
(8, 8, '2 lantai, lantai 2 berisi 6 kamar, lantai 1 berisi 2 kamar besar dan dapur.Posisi kontrakan dekat terminal Transjakarta Bidara Cina (JPO)', 'Jl kebun sayur 1 no 15 RT 1 RW 15 Bidaracina, Jatinegara, Jakarta Timur 13330', 'Mabes-Kontrakan', '2021-03-14', '15:30:00', 1, 'Bonsay', 330000, 430000, 'Mabes Kontrakan', 'Putra', 'Mabes-Kontrakan.jpg', 'Mabes-Kontrakan2.jpg', 'Mabes-Kontrakan3.jpg', '0.300', '1', '1', '1', '1', '1', '1', 'Siti Fatonah', '6289619821430', 1, '-6.2301757784613030', '106.86671104262540'),
(9, 9, 'Satu kamar satu orang dan dekat dengan masjid', 'Jalan Masjid No 25 RT 12 RW 09 Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Bu-Sundus', '2021-03-14', '15:34:00', 1, 'Bonasel', 750000, 800000, 'Kost Bu Sundus', 'Putri', 'Kost-Bu-Sundus.jpg', 'Kost-Bu-Sundus2.jpg', 'Kost-Bu-Sundus3.jpeg', '0.400', '1', '1', '1', '1', '1', '1', 'Bu Sundus', '6285694571351', 2, '-6.2327933525850785', '106.86899569645861'),
(10, 9, 'Satu kamar satu orang, belakang kampus, di lokasi pasar Bonsay', 'Jalan Sensus Raya No 16, RT/RW 005/004, Bidaracina, Jatinegara, Jakarta Timur, 13330 ', 'Kost-Bang-Kiky', '2021-03-14', '15:38:00', 1, 'Bonsay', 700000, 800000, 'Kost Bang Kiky', 'Putri', 'Kost-Bang-Kiky.jpg', 'Kost-Bang-Kiky2.jpg', 'Kost-Bang-Kiky3.jpg', '0.081', '1', '1', '1', '1', '1', '1', 'Bang Kiky', '6282190122001', 1, '-6.2311708901755540', '106.86606040995247'),
(11, 11, '3 kamar, dekat pasar, dekat masjid, dekat tutor ksm, tapi jauh dari dia ðŸ¥º bahkan sampe diblokir :\"(', 'Jalan Kebon Nanas Selatan II No. 35 RT 3 RW 8 Cipinang Cepedak, Jatinegara Jakarta Timur', 'Kontrakan-Bonasel2-35', '2021-03-14', '15:42:00', 1, 'Bonasel', 400000, 450000, 'Kontrakan Bonasel2 35', 'Campur', 'Kontrakan-Bonasel2-35.jpeg', 'Kontrakan-Bonasel2-352.jpeg', 'Kontrakan-Bonasel2-353.jpg', '0.600', '1', '1', '1', '1', '0', '1', 'Bapak Kontrakan Bonasel2-35', '6281209032012', 2, '-6.2333969566152150', '106.87180389645857'),
(12, 11, 'Satu kamar satu orang. Dekat dengan halte tj dan terminal kampung melayu', 'Jalan otista 1a no 18 RT 01 RW 01 Bidaracina, Jatinegara Jakarta Timur 13330', 'Kos-Margaret', '2021-03-14', '15:46:00', 1, 'Bonsay', 600000, 650000, 'Kos Margaret', 'Putri', 'Kos-Margaret.jpg', 'Kos-Margaret2.jpg', 'Kos-Margaret3.jpg', '0.870', '1', '1', '1', '1', '0', '1', 'Rusliana', '6287788991122', 1, '-6.2256680876082020', '106.86607784063530'),
(13, 10, 'Dekat Halte Bidaracina', 'Jl HJ Yahya no 45, Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Yahya-45', '2021-03-14', '15:50:00', 1, 'Bonasut', 950000, 1000000, 'Kost Yahya 45', 'Campur', 'Kost-Yahya-45.jpg', 'Kost-Yahya-452.jpg', 'Kost-Yahya-453.jpeg', '0.700', '1', '1', '1', '1', '1', '1', 'Ibu Kost Yahya-45', '6281234567891', 2, '-6.2291589348759300', '106.86952208031137'),
(14, 13, 'satu kama satu orang, westafel bersama, di lantai 2', 'jalan kebon Sayur 1 no.37 ', 'kost-Azzahra', '2021-03-14', '15:54:00', 1, 'Bonsay', 775000, 850000, 'kost azzahra', 'Putri', 'kost-Azzahra.jpeg', 'kost-Azzahra2.jpeg', 'kost-Azzahra3.jpeg', '0.350', '1', '1', '1', '1', '1', '1', 'umi', '6281374726168', 1, '-6.2303000936842150', '106.86553234493259'),
(15, 13, 'Satu kamar 1-2 orang. Dekat masjid, halte busway bidaracina, apotek k24 otista.', 'Jalan Otista Raya gg mangga No. 15 RT 1 RW 3 Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Hj-Yahya', '2021-03-14', '15:58:00', 1, 'Bonsay', 850000, 900000, 'Kost Hj Yahya', 'Campur', 'Kost-Hj-Yahya.jpg', 'Kost-Hj-Yahya2.jpg', 'Kost-Hj-Yahya3.jpg', '0.200', '1', '1', '1', '1', '1', '1', 'Hj. Yahya', '6281345678922', 2, '-6.2295007095188010', '106.86641920579409'),
(16, 12, 'Dekat bubur ayam bang udin', 'Jalan Otista II No. 25 RT 6 RW 9 Bidaracina, Jatinegara Jakarta Timur 13330', 'Djamal-Kost', '2021-03-14', '16:02:00', 1, 'Bonasut', 1500000, 1550000, 'Djamal-Kost', 'Putra', 'Djamal-Kost.jpg', 'Djamal-Kost2.jpg', 'Djamal-Kost3.jpg', '0.300', '1', '1', '1', '1', '1', '1', 'Djamal', '628561960140', 1, '-6.2304123243606320', '106.86944132529386'),
(17, 12, 'Dekat dengan masjid', 'Jalan Sensus IVD RT01 RW 14 No.20', 'Kost-Pink', '2021-03-14', '16:06:00', 1, 'Bonsay', 700000, 750000, 'Kost Pink', 'Putri', 'Kost-Pink.jpg', 'Kost-Pink2.jpg', 'Kost-Pink3.jpg', '0.250', '1', '1', '1', '1', '1', '1', 'Pak Reno', '6281291724665', 2, '-6.2310295828041700', '106.86418395412929'),
(18, 12, 'Satu kamar satu orang. Di tengah pasar bonsay', 'Jalan Sensus I No. 37, RT/RW006/04, Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Sensus1-37', '2021-03-14', '16:10:00', 1, 'Bonsay', 650000, 700000, 'Kost Sensus1 37', 'Putri', 'Kost-Sensus1-37.jpg', 'Kost-Sensus1-372.jpg', 'Kost-Sensus1-373.jpg', '0.200', '1', '1', '1', '1', '1', '1', 'Helly Octaviani', '6281381713750', 1, '-6.2308384627614570', '106.86632303878777'),
(19, 14, 'Satu kamar satu orang. Dekat dengan masjid, halte.', 'Jalan Otista 2 No. 23 RT 003 RW 09, Bidaracina, Jatinegara, Jakarta Timur, 13330', 'Kos-Putih-2', '2021-03-14', '16:14:00', 1, 'Bonasut', 650000, 700000, 'Kos Putih', 'Putri', 'Kos-Putih-2.jpg', 'Kos-Putih-22.jpg', 'Kos-Putih-23.jpg', '0.800', '1', '1', '1', '1', '1', '1', 'Yos', '6281901020304', 2, '-6.2297237276020025', '106.86922370995250'),
(20, 14, 'Ukuran 2,5x2. Satu kamar satu orang, dekat dengan pasar sawo. Ada dapur bersama, kulkas bersama, 2 kamar mandi di luar kamar kos tapi di dalam rumah, dekat pasar sawo', 'Jl. Kebon nanas selatan 1 no 2, rt. 013 rw. 008, Cipinang Cempedak, Jatinegara, Jakarta Timur, 13340', 'Kosan-Bon2tu', '2021-03-14', '16:18:00', 1, 'Bonasel', 512000, 560000, 'Kosan Bon2tu', 'Khusus Muslimah', 'Kosan-Bon2tu.jpg', 'Kosan-Bon2tu2.jpg', 'Kosan-Bon2tu3.jpg', '0.700', '1', '1', '1', '1', '0', '1', 'Ibu Kokom', '6287832982000', 1, '-6.2343464531839325', '106.87006215412929'),
(21, 14, 'Satu kamar sagu orang, dekat halte', 'Jl. H. Yahya No.271, RT.1/RW.10, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330', 'Kos-yahya', '2021-03-14', '16:22:00', 1, 'Bonasut', 810000, 910000, 'Kos yahya', 'Putri', 'Kos-yahya.jpg', 'Kos-yahya2.jpg', 'Kos-yahya3.jpg', '0.550', '1', '1', '1', '1', '1', '1', 'Buk mirza', '6281515133523', 1, '-6.2287868235690540', '106.86846766762308'),
(22, 15, '2 kamar, 1 kons 8 orang, yang tidur di kamar kadang 2 orang, dekat masjid, jauh dari pasar, deket sumber makanan, deket sungai', 'Jl. Ayub No.6A RT.15/RW.8, Kp. Melayu Kecamatan Jatinegara Kota Jakarta Timur Daerah Khusus Ibukota Jakarta 13330', 'Filsof-Kons', '2021-03-14', '16:26:00', 1, 'Bonasel', 4000000, 4500000, 'Filsof Kons', 'Putra', 'Filsof-Kons.jpg', 'Filsof-Kons2.jpg', 'Filsof-Kons3.jpg', '0.500', '1', '1', '1', '1', '1', '1', 'Hj Munia', '6289511223344', 2, '-6.2333625874027440', '106.86832939645853'),
(23, 16, 'Satu kamar satu orang, Dekat dengan pasar', 'Jalan Sensus III No 7 RT/RW 003/004 Bidaracina, Jatinegara Jakarta Timur 13330', 'Kosan-Pak-Suwanda', '2021-03-14', '16:30:00', 1, 'Bonsay', 700000, 750000, 'Kosan Pak Suwanda', 'Putri', 'Kosan-Pak-Suwanda.jpg', 'Kosan-Pak-Suwanda2.jpg', 'Kosan-Pak-Suwanda3.jpg', '0.200', '1', '1', '1', '1', '1', '1', 'Pak Suwanda', '6285277652314', 1, '-6.2312281174269970', '106.86604452529397'),
(24, 16, 'Satu kamar satu orang, pemilik kost tinggal di lantai 1, dekat dengan masjid, pasar', 'Jalan Sensus III No.19 RT 03 / RW 04, Bidaracina, Jatinegara, Jakarta Timur 13330', 'Axelle-Kost', '2021-03-14', '16:38:00', 1, 'Bonsay', 950000, 1000000, 'Axelle Kost', 'Putri', 'Axelle-Kost.jpg', 'Axelle-Kost2.jpg', 'Axelle-Kost3.jpg', '0.200', '1', '1', '1', '1', '1', '1', 'Orlando', '6281281212582', 1, '-6.2312395247635540', '106.86530950995247'),
(25, 17, 'Satu kamar satu orang. Dekat dengan masjid, pasar, kampus.', 'Gang Sholihun No 17 RT 13 RW 09 Bidaracina, Jatinegara Jakarta Timur 13330', 'Kost-Ungu', '2021-03-14', '16:42:00', 1, 'Bonasel', 900000, 950000, 'Kost Ungu', 'Khusus Muslimah', 'Kost-Ungu.jpg', 'Kost-Ungu2.jpg', 'Kost-Ungu3.jpg', '0.400', '1', '1', '1', '1', '1', '1', 'Bu Kiki', '6287780330129', 2, '-6.2330213369707170', '106.86912655228168'),
(26, 17, 'Satu kamar satu orang, 3 kamar 2 kamar mandi. Dekat dengan masjid, pasar, halte, kampus, fotokopi', 'Jalan Bonsay 1 no 20 RT 5 RW 15 Bidaracina, Jatinegara Jakarta Timur 13330', 'Kos-Mona', '2021-03-14', '16:46:00', 1, 'Bonsay', 700000, 750000, 'Kos Mona', 'Putra', 'Kos-Mona.jpg', 'Kos-Mona2.jpg', 'Kos-Mona3.jpg', '0.100', '1', '1', '1', '1', '1', '1', 'Ade Mona', '6287720345172', 2, '-6.2302467443985810', '106.86653909645847'),
(27, 18, 'Satu kamar satu orang, dekat dengan masjid, pasar. Tidak rawan banjir.', 'Jalan kebun sayur 1 no 66a rt 008 rw 03 kel. Bidara cina kec. Jatinegara, Jakarta Timur, 13330', 'Kost-Putih', '2021-03-14', '16:50:00', 1, 'Bonsay', 700000, 750000, 'Kost Putih', 'Putri', 'Kost-Putih.jpg', 'Kost-Putih2.jpg', 'Kost-Putih3.jpg', '0.500', '1', '1', '1', '1', '1', '1', 'DR HAYFA HUSEIN', '6281297829055', 2, '-6.2298534586164290', '106.86600355412925'),
(28, 18, 'Rumah kontrakan dengan tiga kamar. Dekat dengan Majid, pasar, halte, Dan mini market', 'Jl Kebun Nanas utara II no.24 rt07 rw07, cipinang cempedak, jatinegara jakarta timur', 'Kontrakan-Pak-Hasan', '2021-03-14', '16:54:00', 1, 'Bonasut', 2170000, 2170000, 'Kontrakan pak Hasan', 'Putra', 'Kontrakan-Pak-Hasan.jpeg', 'Kontrakan-Pak-Hasan2.jpeg', 'Kontrakan-Pak-Hasan3.jpeg', '0.800', '1', '1', '1', '1', '1', '1', 'Pak Hasan', '6282136758931', 1, '-6.2291789202184750', '106.87025711179994'),
(29, 18, 'Satu kamar satu orang, dekat masjid dan musholah, masuk gang kecil yang hanya bisa dilewati motor', 'Jalan Asem gang mangga no11 RT 3 RW 3 Bidara Cina, Jatinegara, Jakarta Timur 13330', 'Kossan-Ganteng', '2021-03-14', '16:58:00', 1, 'Bonsay', 600000, 600000, 'Kossan Ganteng', 'Putra', 'Kossan-Ganteng.jpg', 'Kossan-Ganteng2.jpg', 'Kossan-Ganteng3.jpeg', '0.400', '1', '1', '1', '1', '1', '1', 'Ibu Theresia', '6287740761999', 2, '-6.2293653202978890', '106.86628915412926'),
(30, 19, 'Satu kamar satu orang, dekat dengan masjid, pasar, halte.', 'Jl. Kebon Sayur I No. 9 RT 10 RW 3 Bidaracina, Jatinegara Jakarta Timur 13330', 'Kost-bu-Nining', '2021-03-14', '17:02:00', 1, 'Bonsay', 850000, 800000, 'Kost bu Nining', 'Putra', 'Kost-bu-Nining.jpg', 'Kost-bu-Nining2.jpg', 'Kost-bu-Nining3.jpg', '0.400', '1', '1', '1', '1', '1', '1', 'Anita Hariyaningtyas', '6281384193618', 1, '-6.2299836968072070', '106.86666230995247'),
(31, 19, 'Satu kamar 2 orang, deket indomaret,pak rt baik', 'Jalan kebon nanas Selatan no 15 rt 02 rw 08', 'Bu-Sandra-kos', '2021-03-14', '17:06:00', 1, 'Bonasel', 1200000, 1250000, 'Bu Sandra kos', 'Putra', 'Bu-Sandra-kos.jpg', 'Bu-Sandra-kos2.jpg', 'Bu-Sandra-kos3.jpg', '0.350', '1', '1', '1', '1', '1', '1', 'Bu Sandra ', '6287776608948', 2, '-6.2333947220148860', '106.87114093878780'),
(32, 19, 'Satu kamar satu orang, dekat dengan warung sunda, dekat dengan sungai bonasut-bonasel', 'Jalan Haji Yahya No. 28, Kelurahan Cipinang Cempedak', 'Kos-Bu-Iin', '2021-03-14', '17:10:00', 1, 'Bonasut', 1400000, 1450000, 'Kos Bu Iin', 'Putra', 'Kos-Bu-Iin.jpeg', 'Kos-Bu-Iin2.jpg', 'Kos-Bu-Iin3.jpg', '0.400', '1', '1', '1', '1', '1', '1', 'Bu Iin', '6285213198008', 1, '-6.2285433544484650', '106.87056853878785'),
(33, 19, 'satu orang satu kamar, dekat halte gelanggang remaja', 'Jalan Saleh Abud No. 19 RT 014 RW 008, Bidaracina, Jatinegara, Jakarta Timur, 13330', 'Kost-Saleh-Ubud-19', '2021-03-14', '17:14:00', 1, 'Bonasel', 700000, 750000, 'Kost Saleh Ubud 19', 'Putri', 'Kost-Saleh-Ubud-19.jpg', 'Kost-Saleh-Ubud-192.jpg', 'Kost-Saleh-Ubud-193.jpg', '0.600', '1', '1', '1', '1', '1', '1', 'Mbak Egi / Bu Yanti', '6287709991134', 2, '-6.2345203455249560', '106.86972472529388'),
(34, 20, 'Satu kamar satu orang. Satu pintu masuk utama. Kamar mandi luar. Bangunan di tingkat ke 2 dari 2 tingkat.', 'Jalan Bonasut I No.4 RT 02 RW 07 Cipinang Cempedak, Jatinegara, Jakarta Timur 13340', 'Kost-Al-Haddad', '2021-03-14', '17:18:00', 1, 'Bonasut', 700000, 750000, 'Kost Al-Haddad', 'Putra', 'Kost-Al-Haddad.jpg', 'Kost-Al-Haddad2.jpg', 'Kost-Al-Haddad3.jpg', '0.450', '1', '1', '1', '1', '1', '1', 'Ibu hj. Nunung', '218197502', 1, '-6.2294562229119420', '106.87023565412920'),
(35, 21, '3 kamar: kamar depan 3 orang, kamar tengah 6 orang, kamar atas 2 orang. dekat dgn sd, mushala.', 'Jln. Kebon Nanas Utara Gg. Ar-Rahim No. 15 Rt 10/Rw 07 Cipinang Cempedak Jatinegara Jakarta Timur 13340', 'RQ', '2021-03-14', '17:22:00', 1, 'Bonasut', 3333333, 3500000, 'RQ', 'Putra', 'RQ.jpg', 'RQ2.jpg', 'RQ3.jpg', '0.800', '1', '1', '1', '1', '1', '1', 'Salamah', '6281262784261', 2, '-6.2298188492900435', '106.87027856947066'),
(36, 21, 'Satu kamar satu orang, fasilitas cukup lengkap, jarak cukup jauh dari pasar dan kampus', 'Jl Kebon Nanas Selatan II No.58, RT.1/RW.8, Cipinang Cempedak, Jatinegara', 'Kos-keramik', '2021-03-14', '17:26:00', 1, 'Bonasel', 650000, 700000, 'Kos keramik', 'Putri', 'Kos-keramik.jpg', 'Kos-keramik2.jpg', 'Kos-keramik3.jpg', '0.500', '1', '1', '1', '1', '0', '1', 'Ibu endah', '6289524492840', 1, '-6.2342122608284680', '106.87147375228180'),
(37, 22, 'Satu kamar satu orang. Dekat dengan pasar. Kamarnya ada di lantai 2.', 'Jalan Kebon Sayur I No. 4 RT 06/RW 15 Kost Putra SINAGA Bidaracina, Jatinegara, Kampung Melayu, Jakarta Timur 13330', 'Kontrakan-Sinaga', '2021-03-14', '17:30:00', 1, 'Bonsay', 800000, 850000, 'Kontrakan Sinaga', 'Putra', 'Kontrakan-Sinaga.jpg', 'Kontrakan-Sinaga2.jpg', 'Kontrakan-Sinaga3.jpg', '0.300', '1', '1', '1', '1', '1', '1', 'Ibu Sinaga', '6282113909496', 2, '-6.2300454968435630', '106.86475569645854'),
(38, 22, '1 kamar 1 orang, dekat kampus, dekat warteg, dekat foto kopi, halte lumayan deket', 'jalan hasbi no.4a, bidaracina, jaktim', 'mama-ela', '2021-03-14', '17:34:00', 1, 'Bonasel', 550000, 600000, 'mama ela', 'Putri', 'mama-ela.jpg', 'mama-ela2.jpg', 'mama-ela3.jpg', '0.150', '1', '1', '1', '1', '1', '1', 'pak dede', '628562837453', 1, '-6.2320337905783700', '106.86788968296470'),
(39, 22, 'Satu kamar satu orang, dekat dengan masjid, pinggir kali', 'Jalan Otista 2, RT 3 / RW 9, Bidara Cina, Jatinegara, Jakarta Timur 13330', 'Kost-Haji-Anang', '2021-03-14', '17:38:00', 1, 'Bonasut', 750000, 800000, 'Kost Haji Anang', 'Campur', 'Kost-Haji-Anang.jpg', 'Kost-Haji-Anang2.jpg', 'Kost-Haji-Anang3.jpg', '0.300', '1', '1', '1', '1', '1', '1', 'Pak Haji Anang', '628119966775', 2, '-6.2308070518193320', '106.86813542344636'),
(40, 23, '1. Satu kamar per orang, ada juga yang 1 kamar untuk dua orang. 2. Dekat dengan lampu merah kampus. 3. Kost khusus putri.', 'Jalan Otista 3 No. 6 RT009/RW009, Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Jambu', '2021-03-14', '17:42:00', 1, 'Bonasel', 900000, 950000, 'Kost Jambu', 'Putri', 'Kost-Jambu.jpg', 'Kost-Jambu2.jpg', 'Kost-Jambu3.jpg', '0.400', '0', '0', '0', '0', '1', '0', 'Bu Lily', '6282199442211', 1, '-6.2318805522331420', '106.86797762529389'),
(41, 23, 'Satu kamar satu orang. 3 lantai. Kosan berada di dalam gang', 'Jalan Yahya No 271 RT 1 RW 10 Bidaracina, Jatinegara, Jakarta timur 13330', 'Kost-Yahya-271', '2021-03-14', '17:46:00', 1, 'Bonasut', 850000, 900000, 'Kost Yahya 271', 'Putri', 'Kost-Yahya-271.jpg', 'Kost-Yahya-2712.jpg', 'Kost-Yahya-2713.jpeg', '0.500', '0', '0', '0', '0', '0', '0', 'Mirza', '6285812341234', 2, '-6.2287334960713780', '106.86846766762307'),
(42, 23, 'Satu kamar satu orang, dekat halte ', 'Jln. Otto Iskandardinata Raya, Gg H Yahya no 6 (griya firamita) Rt 01 Rw 09, kelurahan Bidara Cina, Jatinegara, Jakarta Timur 13330', 'Griya-Firamita', '2021-03-14', '17:50:00', 1, 'Bonasut', 900000, 950000, 'Griya Firamita', 'Putri', 'Griya-Firamita.jpg', 'Griya-Firamita2.jpg', 'Griya-Firamita3.jpeg', '0.650', '0', '0', '0', '0', '0', '0', 'Hj Nurlaila Dasuki', '6282143256739', 1, '-6.2288295580970650', '106.87103893878779'),
(43, 24, 'Satu kamar satu orang. Dekat dengan pasar. ', 'Kos Bonsay 5, Jl. Otto Iskandardinata Jl. Kebun Sayur No.5, RT.6/RW.15, Bidara Cina, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13330', 'Kos-Bonsay-5', '2021-03-14', '17:54:00', 1, 'Bonsay', 1400000, 1450000, 'Kos Bonsay 5', 'Putri', 'Kos-Bonsay-5.jpg', 'Kos-Bonsay-52.jpg', 'Kos-Bonsay-53.jpeg', '0.270', '0', '0', '0', '0', '1', '0', 'Ibu Novia Melinda', '6281219192467', 1, '-6.2303477552537950', '106.86658568296461'),
(44, 24, 'Satu kamar 1 orang. Masuk lewat gang sebelah Alfamart samping kampus, lumayan deket dengan halte Bidaracina. ', 'Gang Sensus 1, Jalan Sensus 1 No. 5, RT 004 RW 015 Bidaracina, Jatinegara, Jakarta Timur 13330', 'Kost-Pak-Butar-Butar', '2021-03-14', '17:58:00', 1, 'Bonsay', 1250000, 1300000, 'Kost Pak Butar-Butar', 'Campur', 'Kost-Pak-Butar-Butar.jpeg', 'Kost-Pak-Butar-Butar2.jpeg', 'Kost-Pak-Butar-Butar3.jpeg', '0.100', '0', '0', '0', '0', '1', '0', 'Pak Butar-Butar', '6281296524060', 1, '-6.2307868209034770', '106.86646788296461'),
(45, 24, 'Satu kamar satu orang, dekat dengan masjid, ', 'Gang Masjid No.04 RT 013 RW 009, Jalan Otista Raya, Bidaracina, Jatinegara, Jakarta Timur', 'Kost-Vintage', '2021-03-14', '18:02:00', 1, 'Bonasel', 1500000, 1550000, 'Kost Vintage', 'Putri', 'Kost-Vintage.jpg', 'Kost-Vintage2.jpg', 'Kost-Vintage3.jpg', '0.300', '0', '0', '0', '0', '1', '0', 'Bu Fatma', '6281276332861', 2, '-6.2328972909814910', '106.86797172529394'),
(46, 25, '3 kamar untuk 1 kamar 2 orang, 2 kamar untuk 1 kamar 1 orang, dekat masjid', 'Gg. Masjid', 'Kontrakan-Masjid', '2021-03-14', '18:06:00', 1, 'Bonasel', 3700000, 3750000, 'Kontrakan Masjid', 'Putra', 'Kontrakan-Masjid.jpg', 'Kontrakan-Masjid2.jpg', 'Kontrakan-Masjid3.jpg', '0.300', '0', '0', '0', '0', '1', '0', 'Bu nina', '6285881909095', 1, '-6.2327933525850785', '106.86899569645861'),
(47, 25, 'Satu kamar satu orang', 'Jl. Kebon Nanas Utara I No. 15B RT.003/07 Kel. Cipinang Cempedak, Jakarta Timur 13340', 'Kos-Bening', '2021-03-14', '18:10:00', 1, 'Bonasut', 500000, 550000, 'Kos Bening', 'Putri', 'Kos-Bening.jpg', 'Kos-Bening2.jpg', 'Kos-Bening3.jpeg', '0.550', '0', '0', '0', '0', '0', '0', 'Ibu Kos Bening', '6281363457821', 2, '-6.2307092863259480', '106.87014179645854'),
(48, 27, 'satu kamar satu orang, kamar mandi di dalam, gadak sinyal', 'Gang Haji Misnen', 'Kost-Harmoni', '2021-03-14', '18:14:00', 1, 'Bonasut', 950000, 1000000, 'Kost Harmoni', 'Putri', 'Kost-Harmoni.jpg', 'Kost-Harmoni2.jpg', 'Kost-Harmoni3.jpg', '0.500', '0', '0', '0', '0', '1', '0', 'Ibu Lim', '6281295267430', 1, '-6.2299580586694980', '106.86849639645850'),
(49, 27, 'Satu kamar satu orang, dekat mushola, dekat indomaret', 'Jl. Kebon Nanas Utara 2 No. 21 RT05 RW07 Cipinang Cempedak, Jatinegara, Jakarta Timur 13330', 'Kost-House-of-Spirit', '2021-03-14', '18:18:00', 1, 'Bonasut', 750000, 800000, 'Kost House of Spirit', 'Putra', 'Kost-House-of-Spirit.jpg', 'Kost-House-of-Spirit2.jpg', 'Kost-House-of-Spirit3.jpg', '0.400', '0', '0', '0', '0', '1', '0', 'Pak Mustofa', '6281315531030', 2, '-6.2305532862626610', '106.87225541364755'),
(50, 28, 'Satu kamar satu orang, tiga kamar Mandi, 2 lantai, dekat pasar', 'jl sensus 2c no 2 rt 003 rw 04 bidara cina 13330, Jakarta Timur', 'Kos-Pak-Sugeng', '2021-03-14', '18:22:00', 1, 'Bonsay', 500000, 550000, 'Kos Pak Sugeng', 'Putri', 'Kos-Pak-Sugeng.jpg', 'Kos-Pak-Sugeng2.jpg', 'Kos-Pak-Sugeng3.jpg', '0.300', '0', '0', '0', '0', '1', '0', 'Pak Sugeng', '628159723465', 1, '-6.2312550593275550', '106.86605088111713'),
(51, 28, 'Satu kamar bisa satu orang atau 2 orang. Dekat dengan mushalla, jpo, halte dan alfamidi.', 'Jl. Otista Gg. Haji Dawel No. 12 RT 5 RW 9 Bidaracina, Jatinegara, Jakarta Timur 13330', 'Dakochan', '2021-03-14', '18:26:00', 1, 'Bonasut', 650000, 700000, 'Dakochan', 'Putri', 'Dakochan.jpg', 'Dakochan2.jpg', 'Dakochan3.jpg', '0.400', '0', '0', '0', '0', '1', '0', 'Dhina Rosdiana', '628561926564', 2, '-6.2299826277438255', '106.86917443878788');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kostista_laporan`
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
-- Struktur dari tabel `kostista_review`
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
-- Struktur dari tabel `kostista_role`
--

CREATE TABLE `kostista_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kostista_role`
--

INSERT INTO `kostista_role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kostista_user`
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
  `id_role` int(11) NOT NULL,
  `profil_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kostista_user`
--

INSERT INTO `kostista_user` (`id_user`, `username`, `password`, `fullname`, `jk`, `email`, `no_hp`, `alamat`, `id_role`, `profil_image`) VALUES
(1, 'sheptian', 'e2d74b7c4ccda2a5a2ac3819f419e4ef', 'sheptian bagja utama', 'Pria', 'sheptian96@gmail.com', '087824392239', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 1, ''),
(3, 'alvian', 'd14e60855289c9ef93549c1de6531e4f', 'alvian ahja wijaya', 'Pria', 'alvian@gmail.com', '085222549953', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 2, ''),
(6, 'kurniawan', 'e10adc3949ba59abbe56e057f20f883e', 'Kurniawan Aditya', 'Pria', 'kurniawan@gmail.com', '08752563663', 'Jl.Raya Cibeurem No.19', 2, ''),
(7, 'nawan', 'e10adc3949ba59abbe56e057f20f883e', 'Nawan Tutu Syah Lampah', 'Pria', 'nawan@gmail.com', '085322145896', 'Jl. Raya Cimahi No.90', 2, ''),
(8, 'rudy', 'e10adc3949ba59abbe56e057f20f883e', 'Rudy Setiawan', 'Pria', 'rudy@gmail.com', '085369985555', 'Jl.Pasir Impun No.90', 2, ''),
(9, 'firman', 'e10adc3949ba59abbe56e057f20f883e', 'Firman Alhadiansyah', 'Pria', 'firman@gmail.com', '085244215511', 'Jl. Ir.Hj Juanda No.11', 2, ''),
(10, 'tantan', 'e10adc3949ba59abbe56e057f20f883e', 'Tantan Faturahman', 'Pria', 'tantan@gmail.com', '08125648974', 'Jl. Gede Bangkong No.12', 2, ''),
(11, 'azzi', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Azzi Alfurqon', 'Pria', 'azzi@gmail.com', '082133669988', 'Jl. Dipatiukur No.67', 2, ''),
(12, 'reza', 'e10adc3949ba59abbe56e057f20f883e', 'Reza Yogi Andria', 'Pria', 'reza@gmail.com', '0228956938', 'Jl. Soekarno Hatta No.90', 2, ''),
(13, 'angga', 'e10adc3949ba59abbe56e057f20f883e', 'Rangga Jaya Utama', 'Pria', 'rangga@gmail.com', '08526335214', 'Jl. Pasirkoja No.90', 2, ''),
(14, 'yuliani', 'e10adc3949ba59abbe56e057f20f883e', 'Yuliani Putri Utama', 'Wanita', 'yuliani@gmail.com', '087758521245', 'Jl.Holis No.87', 2, ''),
(15, 'rahma', 'e10adc3949ba59abbe56e057f20f883e', 'Rahma Aulia', 'Wanita', 'rahma@gmail.com', '085245696963', 'Jl. Peta No.88', 2, ''),
(16, 'ani', 'e10adc3949ba59abbe56e057f20f883e', 'Ani Yani', 'Wanita', 'ani@gmail.com', '085254698988', 'Jl.Sereh No.78', 2, ''),
(17, 'rani', 'e10adc3949ba59abbe56e057f20f883e', 'Rani Suryani', 'Wanita', 'rani@gmail.com', '0852633562312', 'Jl. Jamika No.4', 2, ''),
(18, 'rita', 'e10adc3949ba59abbe56e057f20f883e', 'Rita Asih', 'Wanita', 'rita@gmail.com', '085245658878', 'Jl. Sukamulya No.2', 2, ''),
(19, 'Kartika', 'e10adc3949ba59abbe56e057f20f883e', 'Kartika Sari', 'Wanita', 'kartika@gmail.com', '089563652145', 'Jl. Sunda No.22', 2, ''),
(20, 'ariska', 'e10adc3949ba59abbe56e057f20f883e', 'Sri Ariska', 'Wanita', 'ariska@gmail.com', '085622325645', 'Jl. Ciroyom', 2, ''),
(21, 'yayu', 'e10adc3949ba59abbe56e057f20f883e', 'Yayu', 'Wanita', 'yayu@gmail.com', '085698974563', 'Jl. Burangrang No.82', 2, ''),
(22, 'kezia', 'e10adc3949ba59abbe56e057f20f883e', 'Kezia Andria', 'Wanita', 'kezia@gmail.com', '08545689758', 'Jl. Buah Batu No.32', 2, ''),
(23, 'Nurhikmah', 'e10adc3949ba59abbe56e057f20f883e', 'Nurhikmah', 'Wanita', 'nur@gmail.com', '0856478945', 'Jl. Dipatiukur No.56', 2, ''),
(24, 'tian', 'e10adc3949ba59abbe56e057f20f883e', 'Tian Bagja ', 'Pria', 'tian@gmail.com', '087854446958', 'Jl. Pagarsih', 2, ''),
(25, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'testest', 'Pria', 'test@gmail.com', '087857846', 'Jl.Pagarsih', 2, ''),
(26, 'qadri', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Qadri', 'Pria', 'mqad21@gmail.com', '081260743660', 'aasasas', 1, ''),
(27, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 'QQQQ', 'Pria', 'mqad21@gmail.cm', '08129820024', 'asasasasasasasas', 2, ''),
(28, 'mqad21', '46807ec9ac57df35845e239a878534a0', 'Muhammad Qadri', 'Pria', 'mqad21@gmail.com', '08129820024', '1wsdadasdasdasd', 2, ''),
(29, 'qq', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Qadri', 'Pria', 'mqad21@gmail.com', '08129820024', 'qasasas', 2, ''),
(30, 'aaaa', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Qadri', 'Pria', '221709860@stis.ac.id', '123', '123', 2, ''),
(31, 'dedy', '603a82415589d74478eae027cf12bac0', 'dedy saputra', 'Pria', 'dedy@gmail.com', '0853648763', 'batunanggar', 2, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kostista_verifikasi`
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
-- Indeks untuk tabel `kostista_kos`
--
ALTER TABLE `kostista_kos`
  ADD PRIMARY KEY (`id_kos`);

--
-- Indeks untuk tabel `kostista_laporan`
--
ALTER TABLE `kostista_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kostista_review`
--
ALTER TABLE `kostista_review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kostista_role`
--
ALTER TABLE `kostista_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `kostista_user`
--
ALTER TABLE `kostista_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `kostista_verifikasi`
--
ALTER TABLE `kostista_verifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kostista_kos`
--
ALTER TABLE `kostista_kos`
  MODIFY `id_kos` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `kostista_laporan`
--
ALTER TABLE `kostista_laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kostista_review`
--
ALTER TABLE `kostista_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kostista_role`
--
ALTER TABLE `kostista_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kostista_user`
--
ALTER TABLE `kostista_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `kostista_verifikasi`
--
ALTER TABLE `kostista_verifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
