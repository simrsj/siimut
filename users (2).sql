-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 07:44 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user','superadmin','submutu','unit') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin Komite Mutu', 'komitemutu@rsj.go.id', NULL, '$2y$10$LwRpzZIldSw/5LolKFAbAepbUcdigrvTtknh.903LxZxivoLVHKEC', NULL, 'admin', NULL, '2023-03-15 02:04:58'),
(2, 'Ayane', 'ayane@gmail.com', NULL, '$2y$10$Lydqe/aYeSxleMBr9.s45umk/JLzX3M0YImRmXk9VCh3etC3G7M4G', NULL, 'admin', NULL, NULL),
(3, 'Chika Fujiwara', 'chika@gmail.com', NULL, '$2y$10$nG91BmIYy.LRGBDCwZr3ie5u9Ywe09JqNVY46sJ4xsUagqOCd0X9W', NULL, 'user', NULL, NULL),
(4, 'Kotone', 'kotone@gmail.com', NULL, '$2y$10$80TDcDGO4ShGjKe0E.Gv1u6hiDxyVcrS2FHBWQludSCYJ8wa.oLr6', NULL, 'user', NULL, NULL),
(7, 'Sub Komite Peningkatan Mutu Klinis', 'spmk@rsj.go.id', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NfSKVz2xG2', 'submutu', '2023-03-15 01:14:49', '2023-03-15 02:02:41'),
(8, 'Sub Komite Keselamatan Pasien', 'skp@rsj.go.id', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hGq3t5xCAE', 'submutu', '2023-03-15 01:14:49', '2023-03-15 02:03:31'),
(9, 'Sub Komite Manajemen Risiko', 'manrisk@rsj.go.id', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QSIMGcDWQh', 'submutu', '2023-03-15 01:14:49', '2023-03-15 02:04:12'),
(10, 'Mauricio Kunde', 'larry97@example.com', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2vQLL9z9HF', 'user', '2023-03-15 01:14:49', '2023-03-15 01:14:49'),
(11, 'Erwin Wilkinson', 'ymedhurst@example.com', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sejcD2cjyv', 'user', '2023-03-15 01:14:49', '2023-03-15 01:14:49'),
(12, 'Reed Steuber', 'murray.shaun@example.com', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hQgyeFQPaI', 'user', '2023-03-15 01:14:49', '2023-03-15 01:14:49'),
(13, 'Alysa Smith', 'jarod.schultz@example.org', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KazajuqLS7', 'user', '2023-03-15 01:14:49', '2023-03-15 01:14:49'),
(14, 'Dr. Louie Koch DDS', 'gus.langosh@example.org', '2023-03-15 01:14:49', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'nAFsMu0OTz', 'user', '2023-03-15 01:14:49', '2023-03-15 01:14:49'),
(15, 'Sub Komite Mutu Manajemen', 'submutumanajemen@rsj.go.id', NULL, '$2y$10$rfDJT6arWgPDhzfQcfvbwu5u/CWgHrviJ9Mw2UVo34v1LzCAiu2YG', NULL, 'submutu', '2023-03-15 01:16:51', '2023-03-15 02:02:48');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
