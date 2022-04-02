-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 05:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petal`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'kuda', '<p>kuda</p>', 'public/uploads/blog/1648889835architecture (1).jpg', '2022-04-02 00:46:02', '2022-04-02 04:38:21', 'kuda'),
(2, 'sdasdasd', '<p>23123</p>', 'public/uploads/blog/1648889898WhatsApp Image 2022-03-31 at 17.49.25.jpeg', '2022-04-02 00:58:18', '2022-04-02 00:58:18', 'sdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(60) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `fitur` text NOT NULL,
  `metode` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `jenis`, `judul`, `problem`, `solusi`, `fitur`, `metode`, `foto`, `created_at`, `updated_at`, `slug`) VALUES
(4, 'E-Commerce', 'a', '<p>b</p>', '<p>c</p>', '<p>e</p>', '<p>d</p>', '', '2022-04-01 14:41:58', '2022-04-01 14:41:58', 'a'),
(5, 'E-Commerce', 'Kuda terbang', 'Kenapa kuda terbang?', 'Gak tahu', 'Sayap kuda', 'Forward Chaining', 'public/uploads/portofolio1648910221architecture.drawio (2).png', '2022-04-02 06:37:01', '2022-04-02 06:37:01', 'kuda-terbang'),
(6, 'E-Commerce', 'Kuda terbang', 'Kenapa kuda terbang?', 'Gak tahu', 'Sayap kuda', 'Forward Chaining', 'public/uploads/portofolio1648910383WhatsApp Image 2022-03-31 at 17.49.25.jpeg', '2022-04-02 06:39:43', '2022-04-02 06:39:43', 'kuda-terbang');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(60) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`id`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'Kenapa kuda kentut?', '<p>karena kamu gay</p>', '2022-04-01 15:50:50', '2022-04-01 15:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id` bigint(5) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@lppm.itk.ac.id', 'Super Admin', NULL, '$2y$10$dzyKNmB70tQ5HLAsgGsz2uhGKHmBlZL4Nw4fSe/1GW0kFh8PP95uO', NULL, '2020-08-01 19:33:46', '2022-04-01 15:54:46'),
(7, 'luis', 'luis@lppm.itk.ac.id', 'Admin', NULL, '$2y$10$RP0ae2/oqbdO7vNh0vdWQuJYBWV6bTNdJEgTuhz19kM2a.NsF9Q3C', NULL, NULL, '2022-04-01 15:16:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
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
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id` bigint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
