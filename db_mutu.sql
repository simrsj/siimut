-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 05:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mutu`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Rahmat Hidayatullah', 'admin@gmail.com', NULL, '$2y$10$8tOKJNoJfLFRUmNoawenBePYR6mIx.Dbadkl9GKXyJQ0J8GZlh3Z.', NULL, 'admin', NULL, NULL),
(2, 'Ayane', 'ayane@gmail.com', NULL, '$2y$10$Q3yt7TxZPfG48D2GDE44mOJ14Y7Lcofl7Y/gqnlvvyV1zqih42DVq', NULL, 'admin', NULL, NULL),
(3, 'Chika Fujiwara', 'chika@gmail.com', NULL, '$2y$10$4AA6meWjJOPAgZloy2Tyf.j1bnkmJFhqR5HekRZkVgxCDezlZer..', NULL, 'user', NULL, NULL),
(4, 'Kotone', 'kotone@gmail.com', NULL, '$2y$10$4al4KmrHrNLShhRMMZj2Ceg6xcSK4F3v4GZTgPcoKFktBKZf529W2', NULL, 'user', NULL, NULL),
(5, 'Rubie Weissnat', 'wunsch.dahlia@example.org', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'i5yFFVD9UV', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(6, 'Glenna Daniel', 'tcollier@example.com', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2fV7bz6NBU', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(7, 'Jazlyn Heller', 'udaniel@example.org', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uXBzq002C4', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(8, 'Audrey Hand IV', 'predovic.aiden@example.net', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'R3rlJDM1DZ', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(9, 'Ms. Edythe Pagac', 'darrin.gaylord@example.org', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'cV8z721ccc', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(10, 'Dr. Brannon Berge II', 'isabell33@example.net', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'H8Emst7Xnv', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(11, 'Howard Cruickshank', 'usatterfield@example.org', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W17G7oRc0d', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(12, 'Sydney Herzog Jr.', 'dock.sawayn@example.com', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LMXOfFtXrT', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(13, 'Prof. Vada Boehm', 'mreilly@example.com', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'OfxFQFHdn5', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(14, 'Rey Lakin', 'lesch.sylvester@example.net', '2023-03-14 21:17:16', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NXiYOdroAg', 'user', '2023-03-14 21:17:16', '2023-03-14 21:17:16'),
(15, 'Rizki Egi Purnama', 'rizkiegipurnama@gmail.com', NULL, '$2y$10$K3LeBpXmeY47sWkKuMrNYOX1laH24OTlNsvRwtu328QlQUTNoMely', NULL, 'admin', '2023-03-14 21:18:58', '2023-03-14 21:18:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
