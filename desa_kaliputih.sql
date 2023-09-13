-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2023 at 05:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desa_kaliputih`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`, `gambar`) VALUES
(8, 'Aturan Keluarga dan Keyakinan PDIP di Balik Kaesang Siap Depok Pertama', 'Jakarta - PDI Perjuangan (PDIP) yakin Kaesang Pangarep akan maju dalam kontestasi pemilihan \'Depok pertama\' melalui partai berlambang banteng tersebut. PDIP punya aturan satu keluarga satu partai yang menjadi landasan keyakinan mereka.\r\nPutra bungsu Presiden Joko Widodo (Jokowi) tersebut menyatakan sudah mengatakan siap menjadi \'Depok pertama\' usai didorong maju dalam Pilwalkot Depok 2024. Ketua DPP PDIP Said Abdullah meyakini Kaesang akan maju lewat PDIP.\r\n\r\n\"Saya yakin Kaesang akan tetap ke PDI Perjuangan,\" ujar Said kepada wartawan di Kompleks Parlemen, Senayan, Jakarta, Senin (12/6).\r\n\r\nKalau keluarganya ada di PDI Perjuangan maka semua keluarga itu adalah wajib juga PDI Perjuangan. Itu di maka itu wajib seperti itu, peraturannya. Umpama saya, anak saya lewat partai lain, itu tidak boleh. Dan saya yakin Kaesang juga pas waktunya akan lewat pintu PDI Perjuangan,\" jelas Said.\r\n\r\nSaid pun mengatakan peraturan itu sudah paten. Dia lalu berbicara soal kaderisasi berjenjang bagi siapapun yang ingin maju.\r\n\r\n\"Di partai kami itu jelas, peraturan itu bukan saat ini saja, peraturan itu sudah tiga periode. Enggak usah kaget dengan peraturan itu, sudah paten, menegakkan disiplin organisasi itu kan segala-galanya,\" kata Said.\r\n\r\n\"Itulah perlunya adanya kaderisasi berjenjang. Di partai itu ketat kaderisasi kami itu, tidak kemudian main lompat-lompat dan lain sebagainya,\" imbuhnya.\r\n\r\nSementara itu, Kaesang Pangarep mengungkap pesan sang istri, Erina Gudono, perihal niatnya yang ingin terjun membantu masyarakat. Dalam pesan itu, Erina memberikan wejangan agar Kaesang mengesampingkan diri sendiri jika ingin turun membantu.\r\n\r\nPesan Erina itu diungkap Kaesang di akun Instagram pribadinya yang diunggah pada Minggu (11/6). Kaesang mengaku selalu mendapat wejangan-wejangan dari Erina untuk mencapai hal-hal yang ingin dicapainya.\r\n\r\n\"Istriku selalu mendorong aku untuk jadi versi terbaik diriku. Dia yang jadi pondasi mimpi yang mau aku wujudin. Wejangan demi wejangan diberikan oleh istri untuk aku,\" tulis Kaesang seperti dilihat detikcom, Senin (12/6).\r\n\r\nKaesang lantas mengutip pesan Erina perihal niatnya yang ingin membantu masyarakat. Erina ingin Kaesang meninggalkan ambisi pribadi dan fokus membantu yang lain.\r\n', 'plt-ketua-pdip-jatim-said-abdullah.jpeg'),
(9, 'Jawaban Terbaru Anies soal Pengumuman Cawapres di Tengah Desakan Demokrat', 'Solo - Partai Demokrat, yang merupakan salah satu pendukung bakal calon presiden (capres) Anies Baswedan, meminta Anies mengumumkan cawapresnya pada bulan Juni ini. Anies pun memberi jawaban terbaru saat ditanya terkait pengumuman cawapresnya sudah ditunggu-tunggu partai pendukungnya itu.\r\n\"Wah seru dong,\" kata Anies menjawab pertanyaan soal kapan pengumuman cawapres yang sudah ditunggu-tunggu seperti dilansir detikJateng, Selasa (13/6/2023).\r\n\r\nHal itu disampaikan Anies saat ditemui di Institut Seni Indonesia (ISI), Solo, Jateng, Senin (12/6). Meski menyebut pengumuman cawapres yang ditunggu-tunggu itu sebagai hal seru, Anies tetap enggan membocorkan tanggal pengumuman dan sosok cawapresnya.\r\n\r\nAnies juga menjawab pertanyaan soal nama Ketum Demokrat Agus Harimurti Yudhoyono (AHY) yang diklaim PDIP masuk bursa bakal cawapres Ganjar Pranowo.\r\n\r\n\"Ya gitu ya, makasih ya,\" ujar Anies menjawab pertanyaan soal AHY masuk radar cawapres Ganjar.\r\n\r\nAnies merupakan bakal capres yang diusung koalisi NasDem, PKS dan Demokrat. Belakangan, Demokrat mendesak Anies agar mengumumkan cawapres pilihannya pada Juni ini.\r\n', 'anies-baswedan-firda-detikcom_169.jpeg'),
(10, 'Ratu Kecantikan Rusia Dihujat Setelah Foto Aslinya Viral, Sosoknya Ternyata..', '\r\nJakarta - Kemenangan seorang ratu kecantikan Rusia jadi sorotan netizen karena penampilannya. Terlihat menawan dalam foto-fotonya saat terpilih jadi Mrs Russia, potret lain memperlihatkan wujudnya yang berbeda. Wanita bernama Natalya Oskar tersebut dinilai tidak secantik di media sosial. Hal itu semakin bikin heboh karena dikaitkan dengan latar belakangnya sebagai istri \'seseorang\'.\r\nNatalya Oskar dari Khabarovsk dimahkotai sebagai Mrs Russia beberapa hari lalu. Sayangnya kemenangannya jadi kontroversi setelah foto-foto yang disebut menunjukkan penampilan \'aslinya\' jadi viral. Banyak orang menilai jika foto asli dan foto resmi Natalya tidak mirip. Netizen menilai jika ia memiliki bibir lebih tebal dan wajah lebih pendek dan lebih sesuai usianya. Banyak yang bahkan mempertanyakan mengapa Natyla bisa terpilih jadi pemenang.\r\n\r\nFoto penampilan asli Natalya semakin banyak menuai hujatan setelah identitas wanita 34 tahun itu ikut terungkap. Natlaya dilaporkan merupakan istri dari Roman Bezmaternykh. Pria 45 tahun tersebut merupakan pengusaha yang ternyata mensponsori kontes kecantikan yang diikuti Natalya. Media lokal pun menuding jika sang suami ada kaitannya dengan kemenangan Natlaya sebagai ratu kecantikan Rusia.\r\n\r\nSetelah foto asli dari kemenangannya sebagai Mrs Rusia, postingannya di media sosial juga jadi perbincangan. Netizen menyebut jika banyak dari kontennya sudah sangat diedit. Adapun yang menuduhnya telah melakukan sejumlah prosedur kecantikan. Tapi pihak penyelenggara Mrs Rusia mengatakan jika foto Natalya yang viral terlihat jelek karena sudut pengambilannya.\r\n\r\n\"Dia terlihat sangat cantik dalam foto-foto resmi kami. Aku terkejut dengan reaksi publik. Itu hanya foto yang jelek diambil dari sudut yang buruk dan rendah. Dia aslinya sangat berbeda. Semua juri melihatnya dan menyukainya,\" kata penyelenggara, Irina Kirsanova kepada Podyem.\r\n\r\nSelain istri dari pengusaha, sumber lain menyebut bahwa Natalya Oskar bernama asli Natalya Khudiakova dan sudah memiliki seorang anak. Ia juga seorang penyanyi yang mengaku hobi olahraga. Mrs Rusia sendiri memang dikhususkan untuk wanita yang sudah berkeluarga atau memiliki anak.\r\n', 'natalya-oskar_43.png'),
(12, 'Arsenal Siap Tebus Declan Rice Rp 1,8 T  ', 'Ratu Kecantikan Rusia Dihujat Setelah Foto Aslinya Viral, Sosoknya Ternyata..\r\nLondon - Arsenal dilaporkan selangkah lagi mendapatkan Declan Rice. The Gunners disebut siap menebus harga yang diajukan West Ham United untuk Rice.\r\nRice menjadi bidikan utama Arsenal pada bursa transfer musim panas ini. Meriam London berusaha bergerak cepat untuk mengamankan gelandang asal Inggris tersebut.\r\n\r\nPasalnya, beberapa klub juga mengincar Rice. Bayern Munich dan Chelsea juga digosipkan tertarik kepada pemain 24 tahun tersebut.\r\n\r\nRatu Kecantikan Rusia Dihujat Setelah Foto Aslinya Viral, Sosoknya Ternyata..\r\nLondon - Arsenal dilaporkan selangkah lagi mendapatkan Declan Rice. The Gunners disebut siap menebus harga yang diajukan West Ham United untuk Rice.\r\nRice menjadi bidikan utama Arsenal pada bursa transfer musim panas ini. Meriam London berusaha bergerak cepat untuk mengamankan gelandang asal Inggris tersebut.\r\n\r\nPasalnya, beberapa klub juga mengincar Rice. Bayern Munich dan Chelsea juga digosipkan tertarik kepada pemain 24 tahun tersebut.\r\n\r\n\r\nRatu Kecantikan Rusia Dihujat Setelah Foto Aslinya Viral, Sosoknya Ternyata..\r\nLondon - Arsenal dilaporkan selangkah lagi mendapatkan Declan Rice. The Gunners disebut siap menebus harga yang diajukan West Ham United untuk Rice.\r\nRice menjadi bidikan utama Arsenal pada bursa transfer musim panas ini. Meriam London berusaha bergerak cepat untuk mengamankan gelandang asal Inggris tersebut.\r\n\r\nPasalnya, beberapa klub juga mengincar Rice. Bayern Munich dan Chelsea juga digosipkan tertarik kepada pemain 24 tahun tersebut.\r\n\r\n\r\n\r\n', 'declan-rice_169.jpeg'),
(13, 'test', 'tesku', '');

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `berkas`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, '1687319888_d3318c3e97ce4dceef1b.pdf', 'test', '2023-06-21 03:58:08', '2023-06-21 03:58:08'),
(3, '1687321801_39c8d15ea2a324efa8c6.pdf', 'test', '2023-06-21 04:30:01', '2023-06-21 04:30:01'),
(4, '1693975321_321c0adc2a57b1a01f29.pdf', 'gregah', '2023-09-06 04:42:01', '2023-09-06 04:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `kepala_keluarga` varchar(255) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `jumlah_keluarga` varchar(255) NOT NULL,
  `rt_rw` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `kepala_keluarga`, `dusun`, `jumlah_keluarga`, `rt_rw`, `kartu_keluarga`, `kecamatan`, `kabupaten`, `provinsi`, `created_at`, `updated_at`) VALUES
(33, 'Tukimin', 'Slento', '4 Orang', '001/003', '3324050808082103', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:02:33', '2023-06-01 04:02:33'),
(34, 'Muhrin', 'Slento', '4 Orang', '001/003', '3324050808082113', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:03:40', '2023-06-01 04:03:40'),
(35, 'Supriyono', 'Slento', '3 Orang', '001/003', '3324050808082106', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:04:29', '2023-06-01 04:04:29'),
(36, 'Ngatimin', 'Slento', '5 Orang', '001/003', '3324050808082110', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:05:51', '2023-06-01 04:05:51'),
(37, 'Darmuji', 'Slento', '3 Orang', '001/003', '3324050808082107', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:06:41', '2023-06-01 04:06:41'),
(38, 'Agus ', 'Slento', '4 Orang', '001/003', '3324050808082108', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:07:33', '2023-06-01 04:07:33'),
(39, 'Kanapi', 'Slento', '4 Orang', '001/003', '3324050808082109', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:08:47', '2023-06-01 04:08:47'),
(40, 'Mudakir', 'Slento', '4 Orang', '001/003', '3324050808082111', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:09:55', '2023-06-01 04:09:55'),
(41, 'Mudholin', 'Slento', '3 Orang', '001/003', '3324050808082112', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:10:47', '2023-06-01 04:10:47'),
(42, 'Qoyi', 'Slento', '5 Orang', '001/003', '3324050808082101', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:11:42', '2023-06-01 04:11:42'),
(44, 'Muraji', 'Slento', '4 Orang', '001/003', '3324050808082312', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:13:50', '2023-06-01 04:13:50'),
(45, 'Yanto', 'Slento', '4 Orang', '001/003', '3324050808082135', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:14:49', '2023-06-01 04:14:49'),
(46, 'Rusdi', 'Slento', '2 Orang', '001/003', '3324050808082125', 'Singorojo', 'Kendal', 'Jawa Tengah', '2023-06-01 04:15:36', '2023-06-01 04:15:36'),
(47, 'Supriyanto', 'Slento', '6 Orang', '001/003', '3324050808082124', 'Singorojo', 'Kendal ', 'Jawa Tengah', '2023-06-01 04:16:30', '2023-06-09 02:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat_email` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `tulis_pesan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama_lengkap`, `alamat_email`, `no_tlp`, `tulis_pesan`, `created_at`, `updated_at`) VALUES
(25, 'asga', 'mun@gmail.com', '087654356889', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-05-22 09:36:46', '2023-05-22 09:36:46'),
(26, 'mas bay', 'geun@gmail.com', '087654356889', 'mohon kepada bapak lurah kaliputih untuk memperbaiki akses jembatan putus di dusun slento', '2023-05-22 09:36:56', '2023-05-22 09:36:56'),
(27, 'mas', 'bayuandriy@gmail.com', '0897654322123', 'mohon kepada bapak lurah kaliputih untuk memperbaiki akses jembatan putus di dusun slento', '2023-05-22 09:37:07', '2023-05-22 09:37:07'),
(28, 'gumnu', 'bayu@gmail.com', '087876567897', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-05-22 09:37:18', '2023-05-22 09:37:18'),
(29, 'gumnu', 'aska@gmail.com', '09876526567889', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-05-22 09:37:32', '2023-05-22 09:37:32'),
(30, 'gumnu', 'mun@gmail.com', '09876526567889', 'mohon kepada bapak lurah kaliputih untuk memperbaiki akses jembatan putus di dusun slento', '2023-05-22 09:37:42', '2023-05-22 09:37:42'),
(31, 'asga', 'aska@gmail.com', '09876526567889', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-05-22 09:37:51', '2023-05-22 09:37:51'),
(32, 'asga', 'bayu@gmail.com', '09876526567889', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-05-22 09:38:00', '2023-05-22 09:38:00'),
(33, 'asga', 'aska@gmail.com', '0897654322123', 'mohon kepada bapak lurah kaliputih untuk memperbaiki akses jembatan putus di dusun slento', '2023-05-22 09:38:42', '2023-05-22 09:38:42'),
(34, 'aska', 'bayu@gmail.com', '09876526567889', 'mohon kepada bapak lurah kaliputih untuk memperbaiki akses jembatan putus di dusun slento', '2023-05-22 09:38:52', '2023-05-22 09:38:52'),
(35, 'asga', 'aska@gmail.com', '09876526567889', 'selamat', '2023-05-22 09:39:01', '2023-05-22 09:39:01'),
(36, 'asga', 'bayu@gmail.com', '09876526567889', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-05-22 09:39:09', '2023-05-22 09:39:09'),
(39, 'asga', 'mun@gmail.com', '0897654322123', 'usulan buat jalan didusun pencar  diharapkan untuk diperbaiki ', '2023-06-13 09:21:22', '2023-06-13 09:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `tes`
--

CREATE TABLE `tes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('admin', '$2y$10$.cTaIIXTpHtdjtESKjKDFOhNL9Q7A7CGSDfC6Cbl1Yme/8FMJjEuO', 'Sahabat Desa Kaliputih', '2023-04-06 08:19:08', '2023-04-06 08:19:08'),
('attar', '$2y$10$C30hEYJV0/EBIeZzUDF9VuXfNVbyR6bJ9VI67SdZktbGy2THgEoSm', 'ataya', '2023-08-03 13:50:06', '2023-08-03 13:50:06'),
('bayu', '$2y$10$wlm.jjmnvbYyVpO.wyVO.uI9iKqeuh/UZTq9eFELKF38vkYVYJ6iy', 'Halo Mas Bay', '2023-04-10 03:59:33', '2023-04-10 03:59:33'),
('budi', '$2y$10$SUU7qpYR9equkhYSpDmA0OVTLnHX4ldr/5TlT6CIPPJ798FUGKBnC', 'Budi Winarno', '2023-09-06 04:41:10', '2023-09-06 04:41:10'),
('damy', '$2y$10$Z2cWmF3x0fZJ3UFjkK4qdeaYDqqxCEpmbGEP2TIvQwWDdqZ6L0yY2', 'demyyu', '2023-04-12 07:32:49', '2023-04-12 07:32:49'),
('maulana', '$2y$10$uXtNDRgxd6lolnt6xiWUcemIgHghlKwfvaF3knFth55/GeDVRH5vO', 'apakabar', '2023-06-05 07:35:23', '2023-06-05 07:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
