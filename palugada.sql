-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2019 at 09:03 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palugada`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `deskripsi`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Entertainment', 'Rayakan moment penting anda dan orang tercinta dengan mitra terbaik kami', 'category/entertaiment', '889405753.jpg', '2019-07-09 06:48:09', '2019-07-09 06:48:09'),
(2, 'Les Private', 'Edukasi dan bimbing si Buah hati dengan pengajar dari lulusan terbaik', 'category/lesprivate', '1434273167.jpg', '2019-07-09 06:52:39', '2019-07-09 06:52:39'),
(3, 'Home Cleaner', 'Bersih dan bebenah rumah tanpa repot dan lelah', 'category/homecleaner', '1302609886.jpg', '2019-07-09 06:53:47', '2019-07-09 06:53:47'),
(4, 'Lundry', 'Pakaian bersih dan wangi tanpa ribet', 'category/laundry', '1825588311.jpg', '2019-07-09 06:55:00', '2019-07-09 06:55:00'),
(5, 'Massage', 'Manjakan dan Relaksasi diri anda menjadi lebih segar', 'category/massage', '411718479.jpg', '2019-07-09 06:56:15', '2019-07-09 06:58:03'),
(6, 'Self Beauty', 'Tampil lebih menarik untuk moment penting anda\r\n\r\n\r\nLaundry\r\nPakaian bersih dan wangi tanpa ribet\r\n\r\n\r\nPijat\r\nManjakan dan Relaksasi diri anda menjadi lebih segar', 'category/selfbeauty', '996542885.jpg', '2019-07-09 06:57:14', '2019-07-09 06:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `entertaiments`
--

CREATE TABLE `entertaiments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `entertaiments`
--

INSERT INTO `entertaiments` (`id`, `image`, `nama_jasa`, `deskripsi`, `slogan`, `harga`, `alamat`, `notlp`, `email`, `created_at`, `updated_at`) VALUES
(1, '2051898719.jpg', 'Raja Badut', 'kami rajabadut menyewakan berbagai macam jenis badut karakter lucu cuma kami yang terlengkap', 'Tebesar dan Terlengkap di Indonesia!', '700.000', 'Jalan Camar Indah 1.No 45 Kelurahan Kapuk Muara, Penjaringan. Jakarta Utara 14460', '0812 1027 4179', 'rajabadut@mai.com', '2019-07-09 07:18:52', '2019-07-09 07:18:52'),
(2, '1079284243.jpg', 'Badut Om Sony', 'Jangan sampai moment anak anda terlewati dengan biasa - biasa saja !moment kenangan tidak akan terlupakan sepanjang masa, perayaan orang tua bukti besar sayang kepada anak.', 'Meriahkan pesta ulang tahun putra putri anda bersama badut kami, murah dan mewah', '500.000', 'rt 3 rw 2, Ngadirgo, Mijen, Kota Semarang, Jawa Tengah 50213', '085727569020', 'badutomsony@mail.com', '2019-07-09 07:30:20', '2019-07-09 07:30:20'),
(3, '1689213523.jpg', 'Badut Kahuripan', 'Berusaha untuk dapat membuat setiap pelanggan yang menggunakan jasa Badut Kami puas terhibur & bergembira bersama-sama. Keberhasilan setiap acara merupakan motto dari kami.', 'Sensasi badut karakter terbaru untuk menghibur anda', '400.000', 'Jl. Raya Kopo No. 477 RT/RW 03/01 Kelurahan Cirangrang, Kecamatan Babakan Ciparay,Bandung - 40225', '+6282315522408', 'badutbandungmurah@gmail.com', '2019-07-09 07:33:35', '2019-07-09 07:33:35'),
(4, '1750375483.jpg', 'Badut Bali Didi', 'Berminat yg Ingin merayakan Ulang Tahun Putra Putri Nya jangan Ragu Lagi segera Hub Kami Percayakan kepada kami. kami siap Menghibur Dan Mendekorasi Ruangan Anda.', 'Entertaint Bali', '600.000', 'Jl Cokroaminoto Gg Kencana No.3 Ubung Denpasar Bali', '081916745451', 'badutbalididi@mail.com', '2019-07-09 07:38:38', '2019-07-09 07:38:38'),
(5, '1067161425.jpg', 'Pelangi Badut', 'bunda bisa merayakan ulang tahun si kecil dengan undangan 50 anak dengan badut yang akan beraksi dan bermain sulap', 'paket ultah murah', '550.000', 'Jalan Pelangi No 56 Bandung', '085299994040', 'pelangibadut@mail.com', '2019-07-09 07:43:52', '2019-07-09 07:43:52'),
(6, '188405621.jpg', 'Badut Jogja', 'Kami adalah home industry yang bergerak di bidang Pembuatan Maskot Perusahaan, Produsen Boneka Maskot, dan Produsen Kostum Badut Maskot , termasuk Maskot Promosi dan Kostum Badut Karakter.', 'Rental Kostum, Pembuatan Boneka, Pembuatan Maskot', '350.000', 'Jl.Laksda Adisucipto, Yogyakarta', '0274 434 2539', 'badutjogja@yahoo.com', '2019-07-09 07:46:31', '2019-07-09 07:46:31'),
(7, '1120471728.jpg', 'Sewa Karaoke', 'Apapun acara kamu, arisan atau kawinan, khitanan, meeting, outing atau gathering, akan jadi lebih meriah. Kami koleksi 60 ribu lebih lagu, organ tunggal lain biasanya sekitar 5 ribu lagu.', 'Cari jasa hiburan organ tunggal yang bikin acara kamu meriah ?', '700.000', 'Graha Bintaro GR3 no. 83 Pondok Kacang Barat, Tangerang Selatan', '0818 90 66 11', 'sewa.karaoke@gmail.com', '2019-07-15 06:47:25', '2019-07-15 06:47:25'),
(8, '451941412.jpg', 'Kurawa Entertainment', 'Musik Orgen Tunggal atau Orgen Tunggal jenis hiburan musik ini dari mulai dangdut pop, dangdut koplo, dangdut rock, sampai musik pop, daerah, jazz.', 'organ tunggal bandung, orkes bandung, musik bandung, orkes dangdut, sewa sound, hiburan musik bandung.', '3.000.000', 'Jl. Manoko Kp.Sukalaksana NO.3 RT/RW 07/02 Desa Cikahuripan Kec. Lembang,Bandung Barat, Jawa Barat 40791', '089672265539', 'kurawaen@mail.com', '2019-07-15 06:51:52', '2019-07-15 06:51:52'),
(9, '347755661.jpg', 'Benz Entertainment', 'Kami berpengalaman mengisi acara wedding/pernikahan dengan personil yg berpengalaman sejak tahun 1999, singer / vokalis yg bersuara prima dan berpenampilan elegant.', 'Kami Benz Entertaintment mengerti akan kebutuhan hiburan /entertaint wedding anda.', '500.000', 'jalan simpang lima no.39 Semarang, Jawa Tengah', 'O81 2282 6458', 'benzentertain@mail.com', '2019-07-15 06:57:19', '2019-07-15 06:57:19'),
(10, '1080375645.jpg', 'Alber Entertainment', 'Kami tim Profesional dengan harga yang sangat terjangkau, dengan tujuan untuk membagi kebahagiaan kepada semua orang.', 'Albar Entertainment Makassar jasa sewa Electone dan sound system', '2.000.000', 'rt 3 rw 2, Losari, Makassar Sulawesi Selatan', '085727569020', 'albermakassar@mail.com', '2019-07-15 07:01:24', '2019-07-15 07:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `home_cleaners`
--

CREATE TABLE `home_cleaners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_cleaners`
--

INSERT INTO `home_cleaners` (`id`, `image`, `nama_jasa`, `deskripsi`, `slogan`, `harga`, `alamat`, `notlp`, `email`, `created_at`, `updated_at`) VALUES
(1, '160920608.jpg', 'Bright Clean 24', 'Apapun acara kamu, arisan atau kawinan, khitanan, meeting, outing atau gathering, akan jadi lebih meriah. Kami koleksi 60 ribu lebih lagu, organ tunggal lain biasanya sekitar 5 ribu lagu.', 'Cari jasa hiburan organ tunggal yang bikin acara kamu meriah ?', '210.000', 'Graha Bintaro GR3 no. 83 Pondok Kacang Barat, Tangerang Selatan', '085718128707', 'brightclean@mail.com', '2019-07-09 07:51:57', '2019-07-09 07:51:57'),
(2, '545474064.jpg', 'Grades Home Cleaning', 'Jasa bersih rumah Bandung - GRADES murah, cepat dan bersih siap membantu anda kapan saja anda membutuhkan.', 'Perlu Jasa Bersih Rumah Bandung?  Grades Siap Untuk Anda!', '300.000', 'Jl. Makam Caringin 80, Bandung 40223', '0856-240-298-36', 'info@gradeshomecleaning.com', '2019-07-09 07:56:15', '2019-07-09 07:56:15'),
(3, '2058546954.jpg', 'CS Residential', 'Kami percaya kebersihan murni. Kami percaya akan pentingnya kesehatan. Kami adalah perusahaan jasa pembersihan rumah profesional dan kami selalu bekerja keras untuk membersihkan tempat.', 'Jasa Cleaning Service Yang Berkualitas Tinggi di Surabaya', '400.000', 'Jl. Sukomanunggal Jaya IX No.11, Sukomanunggal, Suko Manunggal, Kota Surabaya, Jawa Timur', '+6281249392888', 'berkatlancarsejahtera@yahoo.com', '2019-07-09 07:59:49', '2019-07-09 07:59:49'),
(4, '12992303.jpg', 'Clean Makassar', 'Clean Makassar adalah Jasa Panggil Kebersihan Professional dengan pengalaman lebih dari 3 tahun sejak 2016. Kami melayani pembersihan Rumah, Kost, Apartemen, Gedung/Kantor, dan Ruko.', 'We are Cleaning Experts!  Jasa Panggil Kebersihan #1 di Makassar', '576.000', 'BTP Blok A No.163, Makassar, Sulawesi Selatan 90245', '085288899435', 'infocleanmakassar@gmail.com', '2019-07-09 08:01:41', '2019-07-09 08:01:41'),
(5, '422585638.png', 'Maju Jaya', 'saluran pembuangan yang terhambat, Beres tanpa keluhan. Kami memberikan layanan sedot saluran wc, saluran avor kamar mandi, service got buntu, service wastafel macet, dll.', 'Menjadi Solusi terbaik untuk masalah septic tank penuh atau lebih tepatnya Sedot WC dengan layanan fast Respon 24 Jam', '300.000', 'Jalan RC Veteran no.1. RT.001/03 Kelurahan Bintaro Kecamatan Pesanggrahan Kota Administrasi Jakarta Selatan Provinsi DKI Jakarta 12330', '0852 9524 0026', 'majujaya@mail.com', '2019-07-09 08:04:04', '2019-07-09 08:04:04'),
(6, '1186124044.jpg', 'Indo Wash', 'INDOWASH adalah jasa usaha Laundry dengan pelayanan bersistem KILOAN, SATUAN,PAKET BULANAN & DRY CLEANING', 'Kami akan membersihkan rumah anda menjadi bersih dan rapi.', '300.000', 'Jl. Komp Asia Mega Mas Blok DD-No. 28, Medan', '061-7367479', 'info@indowash.com', '2019-07-15 07:09:11', '2019-07-15 07:09:11'),
(7, '151324769.jpg', 'Mitra Abadi Group', 'CV Mitra Abadi Group siap melayani anda dalam mengatasi permasalahan saluran pembuangan', 'Sedot WC Bandung Juara Mitra PDAM memberikan Jasa Layanan Sedot WC', '320.000', 'Jl. Manggahang 1 Bukit Mulya No 32 RT 01/08 Bale Endah, Kabupaten Bandung', '0812 2143 026', 'sedotwcbdg.wawan@gmail.com', '2019-07-15 07:14:46', '2019-07-15 07:14:46'),
(8, '661821691.jpg', 'Surya Jaya Jasa', 'Jasa Sedot WC Surya Jaya Jasa hadir untuk membantu segala macam permasalahan anda seperti WC mampet, Sedot WC / Tinja, Sedot air kotor (got).', 'Jasa Sedot WC Murah Berkualitas', '350.000', 'jl.Cendrawasih no.44, Kota Surabaya, Jawa Timur', '62 813 3941 7789', 'suryajaya@mail.com', '2019-07-15 07:19:57', '2019-07-15 07:19:57'),
(9, '375913162.jpg', 'Raja Mampet', 'Tukang mampet bali adalah jasa yang melayani perbaikan segala saluran air mampet yang ada di seluruh bali.', 'Daerah Bali dan Sekitarnya', '340.000', 'Jl. Tukad Yeh Penet 3 Denpasar, Renon, Kec. Denpasar Sel., Kota Denpasar, Bali 80226', '082340179209', 'rajamampet@mail.com', '2019-07-15 07:26:06', '2019-07-15 07:26:06'),
(10, '142459035.jpg', 'Haracare', 'Kami menawarkan layanan berkelanjutan kami untuk menjaga kondisi terbaik pada semua fasilitas untuk Anda.', 'Asisten Rumah Tangga Siap Melayani Anda', '45.000/jam', 'Jl. Dalung Permai Blok E No.13, Kuta, Badung Bali 80361', '0-800-1401-543', 'cs@haracare.com', '2019-07-15 07:29:36', '2019-07-15 07:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `laundries`
--

CREATE TABLE `laundries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laundries`
--

INSERT INTO `laundries` (`id`, `image`, `nama_jasa`, `deskripsi`, `slogan`, `harga`, `alamat`, `notlp`, `email`, `created_at`, `updated_at`) VALUES
(1, '1090814878.jpg', 'Cleanlab', 'Cleanlab Laundry adalah tempat laundry 1 berteknologi di Indonesia yang memberikan laundry service paling lengkap.', 'MAU COBA LAUNDRY SERVICE PALING AMAN?', '30.000/5kg', 'Jalan Pulau Bira III D1/34 Kompleks Ruko Permata Buana, RT.13/RW.9, Kembangan, Daerah Khusus Ibukota Jakarta 11610', '0813-1000-3453', 'cleanlab@ahlijasa.com', '2019-07-09 08:09:58', '2019-07-09 08:09:58'),
(2, '378226358.jpeg', 'Tayaka Laundry', 'TAYAKA Laundry melayani jasa pencucian dalam bentuk laundry kiloan dan satuan. Tinggal hubungi kami, untuk pickup dan delivery laundry langsung di tempat kamu!', 'LIKE US, WE LIKE YOU!', '20.000/2kg', 'Jl Mekar Utama No 26, Mekar Wangi, Bandung, 50237', '+62 877 0999 5418', 'tayakalaundry@mail.com', '2019-07-09 08:16:17', '2019-07-09 08:16:17'),
(3, '1331966075.jpg', 'Hygeira', 'Pencucian dilakukan dengan deterjen cair khusus serta bahan pembentuk emulsi yang menyebabkan kotoran terlepas dengan sempurna dari serat pakaian.', 'Serahkan pengerjaan pakaian harian Anda kepada Kami.', '40.000/4kg', 'Ploso Timur VII No.14 Surabaya, 60132', '08176559476', 'service@hygeira.com', '2019-07-09 08:19:17', '2019-07-09 08:19:17'),
(4, '2015799135.jpg', 'Superklin', 'Superklin Laundry adalah layanan jasa laundry profesional dengan harga terjangkau. Kami memberikan garansi pelayanan prima terhadap semua customer di semua Outlet Superklin Laundry.', 'Solusi Profesional dan inovatif dibidang Laundry & Dry Cleaning Service.', '4.500/kg', 'Jl. Kyai Saleh 2 01/06 Pakintelan Gunungpati Semarang', '085 640 240 186', 'superklinlaundry@hotmail.com', '2019-07-09 08:21:25', '2019-07-09 08:21:25'),
(5, '694630554.gif', 'Laundry Service Bali', 'KAMI DENGAN MUDAH CARA BAIK TERBAIK DI NUSADUA BALI DENGAN LAYANAN PENGIRIMAN PICKUP YANG PALING IMPRESIF. WIFI GRATIS, STAF YANG RAMAH, TABEL LIPAT LIPAT, DAN PALING PENTING-BERSIHKAN SUPER.', 'Beri diri Anda waktu untuk melakukan hal-hal yang ANDA inginkan, atau perlu Anda lakukan.', '50.000/2kg', 'Jalan pintas siligita Jalan Raya Nusa Dua Selatan No.mor 27, Benoa, Kec. Kuta Sel., Kabupaten Badung, Bali 80361', '+62 82235776117', 'laundrybali@mail.com', '2019-07-09 08:24:08', '2019-07-09 08:24:08'),
(6, '140608616.jpg', 'Medan Coin Laundry', 'Medan Coin Laundry hadir sebagai penyedia jasa Laundry modern Pertama di kota Medan. Kami memadukan konsep Laundry dan Cafe pada tempat yang sama.', 'Menggabungkan antara kecanggihan teknologi dan kenyamanan anda dalam mencuci pakaian.', '30.000/10.5kg', 'De Laundry Cafe Jalan Teuku Umar No 10 D Medan', '62 822 7304 9638', 'info@medancoinlaundry.com', '2019-07-15 07:34:52', '2019-07-15 07:34:52'),
(7, '1013177819.jpg', 'Londria', 'Sebagai Pengusaha kecil yang sukses ia terpanggil untuk melakukan perubahan nyata dengan membuka usaha laundry di Makasar.', 'Solusi terbaik untuk membersihkan pakaian banyak Anda.', '7000/kg', 'Londria Kompleks Griya Alam Permai, Ruko 12 Tamalanrea, Kota Makassar, Sulawesi Selatan.', '0411-583007', 'info@londria.co.id', '2019-07-15 07:38:16', '2019-07-15 07:38:16'),
(8, '218872516.jpg', 'Central Laundry', 'CENTRAL LAUNDRY & DRY CLEANING, semakin mendapat tempat dan dipercaya di kalangan pengguna jasa pencucian baik perorangan maupun kelembagaan.', 'Solusi Profesional dan inovatif dibidang Laundry & Dry Cleaning Service', '10.000/kg', 'Jl. Nogopuro No.4b, Ambarukmo, Daerah Istimewa Yogyakarta 55281', '(0274) 489300', 'central.jogja@yahoo.com', '2019-07-15 07:41:18', '2019-07-15 07:41:18'),
(9, '722089394.jpg', 'Kumala Laundry', 'Kumala Laundry adalah sebuah bisnis yang bergerak dalam jasa laundry baik laundry kiloan, satuan dan karpet dengan kualitas terbaik.', 'Ayo...! Laundry sambil beramal untuk kaum dhuafa di Banjarmasin', '8000/kg', 'Jl.Gunung Sari Ujung No. 20 RT.13 Banjarmasin Kalsel', '(0511) 4425099', 'admin@kumalalaundry.co.id', '2019-07-15 07:45:19', '2019-07-15 07:45:19'),
(10, '1759784950.jpg', 'Sukses Laundry', 'Sukses Laundry hadir di kota solo untuk membantu menyelesaikan masalah pakaian kotor anda. Kami menyediakan jasa cuci dan setrika pakaian.', 'Pakaian kotor anda menumpuk? Dan tidak punya waktu untuk mencuci?', '4000/kg', 'Jl. Temu Ireng No. 5 Norowangsan, RT4 RW13, Kel. Pajang, Kec. Laweyan, Surakarta, 57146, Jawa Tengah', '08510 - 7047020', 'sukseslondri@mail.com', '2019-07-15 07:48:17', '2019-07-15 07:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `les_privates`
--

CREATE TABLE `les_privates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `les_privates`
--

INSERT INTO `les_privates` (`id`, `image`, `nama_jasa`, `deskripsi`, `slogan`, `harga`, `alamat`, `notlp`, `email`, `created_at`, `updated_at`) VALUES
(1, '2095721130.png', 'Big Bang', 'Tidak semua pelajar mampu menyerap penuh materi yang diajarkan di kelas yang ramai, tidak kondusif atau sekedar tidak mendapat perhatian penuh karena fokus guru terbagi.', 'Guru berkompeten dengan metode belajar yang efektif', '350.000/sesi/siswa', 'Jl. H Sabeni No.1H, RT. 7/ RW. 2 Kel. Kalisari, Kec. Pasar Rebo, Jakarta Timur', '(021) 2233 0299', 'bigbang.private@gmail.com', '2019-07-09 08:27:27', '2019-07-09 08:27:27'),
(2, '1689008869.jpg', 'EDUFIO', 'EDUFIO adalah jasa les privat dengan program les dan pelajaran yang variatif yang dirancang untuk anak-anak hingga dewasa, diajarkan oleh guru-guru privat yang ahli di bidangnya.', 'Dapatkan layanan guru les privat di Jogja untuk pelajaran apapun, kapanpun, dan dimanapun.', '324.400/sesi/siswa', 'Jl. Prof. Dr. Soepomo SH No.1051 kota Yogyakarta', '(0274) 4290868', 'adm@edufio.com', '2019-07-09 08:32:04', '2019-07-09 08:32:04'),
(3, '1926903014.jpg', 'Privat Bandung', 'Program les privat di dengan bimbingan belajar ekslusif, di mana seorang hingga tiga siswa akan belajar dengan dibimbing oleh seorang guru les privat.', 'Fokus kami dalam menyelenggarakan layanan pendidikan les privat merupakan komitmen kami memberikan layanan berkualitas bagi Anda.', '150.000 - 165.000/sesi/siswa', 'Jln. Karawitan No. 48 Kel. Turangga Kec. Lengkong Kota Bandung 40246', '022-730-36-91', 'privatbandung@yahoo.com', '2019-07-09 08:35:45', '2019-07-09 08:35:45'),
(4, '9964038.jpg', 'Avicenna Education', 'Kami hadir untuk membantu meningkatkan prestasi & semangat belajar putra-putri anda, dengan metode belajar privat.', '“Prestasi buah hati anda adalah prioritas kami”', 'Rp 70.000 - 80.000/sesi/siswa', 'Jl. Gubeng Kertajaya I/59', '031-5048006', 'avicenna.education@yahoo.com', '2019-07-09 08:37:46', '2019-07-09 08:37:46'),
(5, '1606992490.jpg', 'MANDIRI PRIVAT', 'layanan bimbingan belajar dimana guru les datang kerumah, sehingga siswa dapat belajar lebih nyaman, aman dan fleksibel dalam memilih jadwal dan mata pelajaran.', '\" The Best Choice To Be Smart Students \"', '170.000/sesi/siswa', 'Jl. Masjid Baiturrahman No.17 ( belakang komp. unhas ) Antang, Makassar - Sulawesi Selatan.', '082 191 366 500', 'privatmandiri.mks@gmail.com', '2019-07-09 08:40:45', '2019-07-09 08:40:45'),
(6, '1811942754.jpg', 'teman-belajar', 'Teman Belajar adalah pencarian guru les privat terbesar di Surakarta yang dapat membantumu dalam mencari dan memesan guru les privat.', '#SemuaAdaGurunya', '80.000/sesi/siswa', 'Solo Technopark, Gedung Tenant Inkubator Jl. Ki Hajar Dewantara, Kentingan, Jebres Kota Surakarta, Jawa Tengah 57139.', '0821-6189-9336', 'temanbelajar@edu.com', '2019-07-15 07:54:10', '2019-07-15 07:54:10'),
(7, '1224228501.PNG', 'Partha Permana', 'Partha Permana Private Course adalah suatu layanan bimbingan belajar private di Bali untuk siswa dan siswi dari tingkat SMP dan SMA serta Mahasiswa untuk wilayah Badung dan Denpasar.', '\" Wilayah Badung, Denpasar, dan sekitarnya \"', '900.000/8sesi/siswa', 'Jl. Raya Gilimanuk 110, Sibang Kaja, Kec. Abiansemal, Kabupaten Badung, Bali 80352', '085739008773', 'pathapermanacourse@gmail.com', '2019-07-15 07:57:20', '2019-07-15 07:57:20'),
(8, '752401525.jpeg', 'Jaya Privat', 'JAYA Private sebuah lembaga penyedia guru les privat ke rumah anda wilayah Malang dan sekitarnya dikelola oleh Husnul Khotimah, Guru dan aktivis Pendidikan.', '\" Wilayah Malang dan sekitarnya \"', '70.000/sesi/siswa', 'jl. Kaliserek RT.9 RW.1 Desa Langlang Kecamatan Singosari, Kab.Malang, 65153', '089501719694', 'jayaprivat@rocketmail.com', '2019-07-15 08:00:30', '2019-07-15 08:00:30'),
(9, '812078300.jpg', 'Sriwijaya Education', 'Bimbel SEC memberikan solusi belajar privat di rumah, dengan didampingi Tentor yang berpengalaman, pintar dan bersahabat.', 'Metode Belajar Inovatif', '100.000/sesi/siswa', 'Perumahan Talang Jambe Permai 13/83 Talang Jambe – Sukarame, Palembang', '081373001007', 'sriwijayaedu@gmail.com', '2019-07-15 08:03:38', '2019-07-15 08:03:38'),
(10, '238752422.jpg', 'Kanaka Belajar', 'Tujuan utama kanaka adalah sebagai fasilitator bagi siswa untuk membantu meningkatkan pemahaman pada pelajaran di sekolah.', 'Ayo bergabung bersama kami', '85.000/sesi/siswa', 'Jl Kampung Melati No 11 A, Kesambi-Cirebon', '0231-880-6580', 'kanaka.private@gmail.com', '2019-07-15 08:05:43', '2019-07-15 08:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `image`, `nama_jasa`, `deskripsi`, `slogan`, `harga`, `alamat`, `notlp`, `email`, `created_at`, `updated_at`) VALUES
(1, '1295809481.jpg', 'Fivestar', 'fivestar Reflexology dan massage adalah sebuah tempat yang terjamin memberikan pelayanan dan fasilitas terbaik untuk relaksasi keluarga.', 'Fivestar Service, Fivestar Quality', '250.000', 'Komplek Ruko Sunter Garden No.1 A,B,C,D,E', '021-65836732-33', 'sunter@fivestar.co.id', '2019-07-09 08:47:09', '2019-07-09 08:47:09'),
(2, '284852947.jpg', 'anata Salon', 'Anata selalu meningkatkan teknik keahlian sejalan trend mode dengan fasilitas teknologi terkini. Harga terjangkau oleh semua lapisan demografi konsumen dari muda sampai dewasa.', 'Salon Wanita & Pria Terpopuler di Bandung', '200.000', 'Jl. DR. Setiabudi No.46, Hegarmanah, Kec. Cidadap, Kota Bandung, Jawa Barat 40161', '(022) 8260 2377', 'info@salonanata.com', '2019-07-09 08:49:00', '2019-07-09 08:49:00'),
(3, '1782387745.jpg', 'Massage Therapist', 'Layanan Jasa Pijat Panggilan makassar kota 24 Jam Terbaik Dan Profesional. Dengan Terapis Wanita Dan Pria Muda Profesional Dan Berpengalaman Garansi Layanan terbaik.', 'Jasa Pijat Massage Panggilan 24 Jam Terbaik Di Kota Makassar', '200.000', 'Lorong Mu\'min 1 No.15 A, Balla Parang, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90232', '08121777066', 'massagetherapist@mail.com', '2019-07-09 08:51:15', '2019-07-09 08:51:15'),
(4, '1398242921.jpg', 'Nano Healty Family', 'refleksi dilakukan pada bagian telapak kaki akan sangat berpengaruh pada area bagian tubuh tertentu.', 'Your Healt Start Here...', '150.000', 'Jl. Jendral Sudirman No. 1, Lt. 3 unit A002, Cikokol Tangerang', '021 2930 9741', 'nanohealtyfamily@mail.com', '2019-07-09 08:53:48', '2019-07-09 08:53:48'),
(5, '1421960591.jpg', 'Cosmic Reflexology', 'Pijat refleksi sangat bagus untuk kesehatan, melakukan pijat refleksi agar peredaran darah lancar,menghilangkan stres,migren,susah tidur.', 'Pentinganya Pijat Refleksi Untuk Kesehatan!', '90.000', 'Jl, Pulau Tarakan No.3A, Denpasar, Bali- 80255', '(62) 819-9960-1809', 'cosmicreflexology@mail.com', '2019-07-09 08:56:03', '2019-07-09 08:56:03'),
(6, '1451281987.jpg', 'Relaxing', 'Terapis profesional & ramah, air hangat & bak mandi. AC Beraroma, minuman gratis, wifi gratis, tempat parkir, Segar & bersih Pijat sehat untuk keluarga Anda.', 'MEWAH, HARGA TERJANGKAU', '65.000', 'Jalan Kahuripan No.11 C, Kota Malang, Jawa Timur 65119', '0341 - 3012360', 'hello@relaxingreflexology.net', '2019-07-15 08:09:19', '2019-07-15 08:09:19'),
(7, '405563048.jpg', 'NestSpa', 'Kami melatih setiap level terapis dan membuat mereka lulus dengan keterampilan hebat!', 'Balance your body health at our place of relaxation.', '150.000', 'Jl. Sultan Agung ruko wirogunan No.7, Wirogunan, Kec. Mergangsan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55151', '(0274) 4281538', 'nestspa.reflexy@gmail.com', '2019-07-15 08:11:38', '2019-07-15 08:11:38'),
(8, '2122178865.jpg', 'DISVA', 'Jasa pijat refleksi kini ibarat jamur di musim penghujan. Di PALANGKARAYA dan sekitarnya, DISVA REFLEKSI KELUARGA menawarkan jasa pelemas otot ini.', 'ART OF REFLEXOLOGY  (PALANGKARAYA)', '75.000', 'JALAN TEMANGGUNG TILUNG 16 PALANGKARAYA', '085245412928', 'disva.spa@info.com', '2019-07-15 08:14:13', '2019-07-15 08:14:13'),
(9, '904374830.jpg', 'Sehat Segar Alami', 'SEHAT SEGAR ALAMIayaknya memasuki ruangan Spa namun dengan harga yang jauh lebih terjangkau dibandingkan dengan harga Spa.', 'Kerjasama kemitraan waralaba franchise pijat refleksi.', '43.000', 'Jl.Prof. Dr.Soeharso No.1190 (Barat GOR Satria), Purwokerto', '(0281)794440', 'sehatsegar.reflexology@gmail.com', '2019-07-15 08:17:27', '2019-07-15 08:17:27'),
(10, '538892492.png', 'Zengarden', 'Terapi pijatan klasik Zengarden yang sudah terbukti mengurangi stress dan melepaskan ketegangan dalam jaringan otot.', 'Excellent Treatments and Serene Environment', '198.000', 'Jl. S. Parman No 22 / 272, Medan, Sumatera Utara', '082166267770', 'hello@zengarden.co.id', '2019-07-15 08:21:16', '2019-07-15 08:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(44, '2019_06_24_174045_create_services_table', 1),
(81, '2014_10_12_000000_create_users_table', 2),
(82, '2014_10_12_100000_create_password_resets_table', 2),
(83, '2019_06_25_090940_create_admins_table', 2),
(84, '2019_06_26_082106_create_categories_table', 2),
(85, '2019_06_28_181119_create_payments_table', 2),
(86, '2019_07_04_100507_create_entertaiments_table', 2),
(87, '2019_07_04_100755_create_home_cleaners_table', 2),
(88, '2019_07_04_100813_create_laundries_table', 2),
(89, '2019_07_04_100828_create_les_privates_table', 2),
(90, '2019_07_04_100843_create_massages_table', 2),
(91, '2019_07_04_100854_create_self_beauties_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `self_beauties`
--

CREATE TABLE `self_beauties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `self_beauties`
--

INSERT INTO `self_beauties` (`id`, `image`, `nama_jasa`, `deskripsi`, `slogan`, `harga`, `alamat`, `notlp`, `email`, `created_at`, `updated_at`) VALUES
(1, '1593342290.png', 'Aluna Home Spa', 'Tempat yang homy & nyaman, dengan atmosfir Traditional Jawa yang kuat merupakan pilihan yang tepat untuk menghilangkan penat dan mengembalikan kesegaran tubuh & pikiran anda.', 'Clean & Healthy Family HomeSpa', '185.000', 'Jl. Pleburan Barat No. 28, SEMARANG', '+62 24 831 3398', 'alunasmg@gmail.com', '2019-07-09 08:59:23', '2019-07-09 08:59:23'),
(2, '1068701324.jpg', 'Ninna Beauty Salon', 'NBS menawarkan ketenangan selama proses treatment, sehingga customer merasakan kondisi “Feels Like Home”.', 'Kamu tinggal kontak, dan tunggu terapis kami datang ke rumahmu', '220.000', 'Jalan Pajajaran 78H, Bogor 16143', '(0251) 8380545', 'hello@ninnabe.id', '2019-07-09 09:01:18', '2019-07-09 09:01:18'),
(3, '2105998919.jpg', 'Azka Salon', 'Kami mengutamakan keramahan dan dukungan penuh untuk memastikan kenyamanan pelanggan.', 'Spa and Mulsimah Salon', '150.000', 'Jl Perintis Kemerdekaan KM.9 Ruko Gunung Mas Kav. 5, Makassar, Sulawesi Selatan', '085 399688218', 'azkasalon@mail.com', '2019-07-09 09:03:41', '2019-07-09 09:03:41'),
(4, '855988625.jpg', 'Cosmo Salon & Spa', 'Kami memberikan layanan berkualitas yang sebanding dengan hotel-hotel besar terdekat, tetapi dengan harga lebih murah.', 'Call to make a Reservation Now', '260.000', 'J Jl. Danau Tamblingan 176, Sanur, Bali', '+62 (0)361 286330', 'drtomiverson@gmail.com', '2019-07-09 09:05:11', '2019-07-09 09:05:11'),
(5, '1134635035.jpg', 'Royal Garden', 'Royal Garden Spa adalah pilihan terbaik untuk Anda yang hendak memulai bisnis di bidang spa dan kecantikan.', 'ENJOY YOUR SPA Experience.', '185.000', 'Jln Tebet Barat IX - 18 Jakarta Selatan', '0812 8030 5000', 'royalgardenspa@mail.com', '2019-07-09 09:07:07', '2019-07-09 09:07:07'),
(6, '2008681696.jpg', 'Royal Garden', 'Royal Garden Spa dengan 53 cabang di seluruh Indonesia, 22 penghargaan tingkat nasional dan lebih dari 100 media review.', 'ENJOY YOUR SPA Experience.', '260.000', 'Jln Tebet Barat IX - 18 Jakarta Selatan', '0812 8030 5000', 'royalgarden@info.com', '2019-07-15 08:25:02', '2019-07-15 08:25:02'),
(7, '1254837344.jpg', 'Nurayya Salon & Spa', 'Totok wajah, Facial Wardah, Facial Bioskos, Facial Komedo, Facial Acne, Facial Whitening, Facial Gold.', 'Treatment OK Tabarruj No Way', '387.000/paket', 'Jl. Cokroaminoto No. 2 Surabaya (Hotel Andita Syariah)', '62 857-0773-7077', 'nurayyamuslimah@info.com', '2019-07-15 08:30:04', '2019-07-15 08:30:04'),
(8, '1921873350.jpg', 'Herbs Spa', 'Herbs Spa adalah sebuah rumah perawatan tubuh alami khusus wanita yang berdiri sejak 17 Mei 2004, berawal di Jalan Prapanca 56 Surabaya.', 'The house of relax and spa', '350.000/paket', 'Jl. Ngagel Madya V No. 67 Baratajaya, Gubeng, Surabaya 60284', '(+62-31) 5030024', 'sukriyaku@herbsspa.com', '2019-07-15 08:40:07', '2019-07-15 08:40:07'),
(9, '638421164.jpg', 'zengarden', 'Terapi pijatan klasik Zengarden yang sudah terbukti mengurangi stress dan melepaskan ketegangan dalam jaringan otot.', 'A Spa with Excellent Treatments and Serene Environment', '198.000', 'Jl. S. Parman No 22 / 272 Medan, Sumatera Utara', '(061) - 4519306', 'hello@zengarden.co.id', '2019-07-15 08:42:06', '2019-07-15 08:42:06'),
(10, '669795237.jpg', 'Varastri', 'Varastri Salon & Day Spa di Yogyakarta, Salon & Day Spa khusus untuk perempuan termasuk ibu hamil, bayi dan anak.', 'Female & Baby Only', '125.000', 'Jln. Wulung 7A, Papringan Yogyakarta 55281', '0274-524005', 'kontak@varastri.com', '2019-07-15 08:43:41', '2019-07-15 08:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_jasa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Fajar Nur Rohman', 'fajar@mail.com', NULL, '$2y$10$VaRgdRP9LSW4bJV9kSjLYuGLM7kJ4iB/9xntK70lgzFeqdo96nUDC', NULL, '2019-07-10 06:37:52', '2019-07-10 06:37:52'),
(3, 'Neomy Lusie', 'neomy@mail.com', NULL, '$2y$10$FmT.921X9jN33gLPo1op8..3GbUJg8CglaV.eXUBQUUhyqkDJMHBC', NULL, '2019-07-15 06:11:40', '2019-07-15 06:11:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entertaiments`
--
ALTER TABLE `entertaiments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_cleaners`
--
ALTER TABLE `home_cleaners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laundries`
--
ALTER TABLE `laundries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `les_privates`
--
ALTER TABLE `les_privates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `self_beauties`
--
ALTER TABLE `self_beauties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `entertaiments`
--
ALTER TABLE `entertaiments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `home_cleaners`
--
ALTER TABLE `home_cleaners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `laundries`
--
ALTER TABLE `laundries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `les_privates`
--
ALTER TABLE `les_privates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `self_beauties`
--
ALTER TABLE `self_beauties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
