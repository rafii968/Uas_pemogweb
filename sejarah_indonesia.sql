-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2026 at 11:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sejarah_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `era` varchar(100) DEFAULT NULL,
  `konten` text NOT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `era`, `konten`, `penulis`, `tanggal_dibuat`) VALUES
(1, ' Penjajahan Belanda di Indonesia (1596 – 1942) dan Kebijakan – Kebijakannya', 'Kolonialisme', 'Penjajahan Belanda di Indonesia tidak terjadi sekaligus, melainkan melalui proses panjang dan bertahap sejak akhir abad ke-16. VOC awalnya berperan sebagai kekuatan dagang, lalu berkembang menjadi kekuatan politik di Jawa pada abad ke-18. Setelah VOC bangkrut pada 1799, wilayah kekuasaannya diambil alih pemerintah Belanda. Masa ini ditandai reorganisasi pemerintahan oleh Daendels dan Raffles, serta perlawanan rakyat seperti Perang Diponegoro (1825–1830) yang berakhir dengan semakin kuatnya dominasi Belanda di Jawa.\r\n\r\nUntuk menutup beban keuangan akibat perang dan persaingan global, Belanda menerapkan Sistem Tanam Paksa (1830). Petani dipaksa menanam komoditas ekspor dan menyerahkan sebagian hasil panennya kepada pemerintah kolonial dengan imbalan yang tidak adil. Sistem ini sangat menguntungkan Belanda, tetapi menyebabkan penderitaan, kemiskinan, dan kelaparan di kalangan rakyat. Setelah 1870, Tanam Paksa perlahan dihapus dan digantikan Zaman Liberal, di mana perusahaan swasta Eropa semakin mendominasi ekonomi, sementara kondisi rakyat tetap buruk.\r\n\r\nAwal abad ke-20 ditandai lahirnya Politik Etis yang bertujuan meningkatkan kesejahteraan pribumi melalui pendidikan, irigasi, dan emigrasi. Walau gagal memperbaiki kehidupan rakyat secara luas, kebijakan ini justru mendorong munculnya kaum terpelajar yang menjadi pelopor nasionalisme. Organisasi seperti Budi Utomo, Sarekat Islam, Muhammadiyah, PKI, dan PNI lahir, serta diperkuat oleh Sumpah Pemuda 1928 yang menegaskan persatuan bangsa Indonesia.\r\n\r\nPada 1942 Jepang menduduki Hindia Belanda dan mengakhiri kekuasaan kolonial Belanda, namun menggantikannya dengan penindasan baru melalui kerja paksa dan kelaparan. Meski demikian, Jepang memberi ruang bagi tokoh nasionalis dan melatih pemuda Indonesia. Kekalahan Jepang dalam Perang Dunia II membuka jalan bagi Proklamasi Kemerdekaan Indonesia pada 17 Agustus 1945, yang menandai berakhirnya era penjajahan dan lahirnya negara Indonesia merdeka.', 'admin_sejarah', '2026-01-10 04:09:08'),
(2, 'Kedatangan Bangsa Eropa', 'Kolonialisme', 'Dilansir dari buku Sejarah Indonesia Modern (2007) oleh MC Ricklefs, bangsa Eropa yang datang pertama kali di Indonesia adalah Portugis di Malaka tahun 1509. Meski berhasil diusir, Portugis yang dipimpin Alfonso de Albuquerque kembali datang pada 1511 dan menguasai wilayah tersebut.\r\n\r\nBelanda baru datang ke Banten pada 1596 dalam ekspedisi Cornelis de Houtman. Mereka membawa banyak rempah-rempah ke Belanda. Pada 1602, terbentuklah Vereenigde Oost Indische Compagnie (VOC) yang kemudian mengambil alih kekuasaan Portugis.\r\nVOC dibubarkan pada 31 Desember 1799 dan diambil alih pemerintah Belanda. Di sela pendudukan Belanda, terdapat masa Prancis (1800-1811) dan Inggris (1811-1816), baru kemudian diserahkan kembali kepada Belanda.', 'admin_sejarah', '2026-01-10 09:22:05'),
(3, 'Lahirnya Budi Utomo (1908)', 'Kolonialisme', 'Masih dalam masa penjajahan Belanda, lahirlah organisasi Budi Utomo pada 20 Mei 1908. Budi Utomo didirikan beberapa mahasiswa STOVIA (Sekolah Kedokteran di Jawa). Tokohnya seperti Soetomo dan Wahidin Soedirohoesodo. Lahirnya organisasi ini menjadi tonggak perjuangan kemerdekaan Indonesia.', 'admin_sejarah', '2026-01-10 09:30:34'),
(4, 'Sumpah Pemuda (1928)', 'Kolonialisme', 'Setelah Budi Utomo, muncul berbagai organisasi, yaitu Tri Koro Dharmo dan organisasi kesukuan, seperti Jong Java, Jong Celebes, hingga Jong Batak. Gagasan untuk menyatukan wilayah Nusantara semakin kuat dan digelarlah Sumpah Pemuda pada 28 Oktober 1928.\r\n\r\nNama Indonesia semakin dikenal setelah setelah pertemuan ini. Saat itu diperkenalkan pula lagu Indonesia Raya oleh Wage Rudolf Supratman. Para pemuda pun mengikrarkan Sumpah Pemuda sebagai bentuk tekad memerdekakan Indonesia.', 'admin_sejarah', '2026-01-10 09:31:49'),
(5, 'Indonesia Dikuasai Jepang (1942)', 'Kolonialisme', 'Tahun 1942, Jepang menduduki sebagian besar wilayah Indonesia, termasuk Batavia. Akhirnya Belanda menyerah tanpa syarat kepada Jepang dengan ditandainya penandatanganan Perjanjian Kalijati pada 8 Maret 1942. Di masa Jepang inilah terjadi perubahan luar biasa dalam perjuangan kemerdekaan.', 'admin_sejarah', '2026-01-10 09:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin_sejarah', '123456', 'admin'),
(2, 'user_sejarah', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
