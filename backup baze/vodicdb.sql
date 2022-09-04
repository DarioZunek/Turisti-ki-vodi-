-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 10:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vodicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'London', '2022-08-19 02:38:42', NULL, NULL),
(2, 'Pariz', '2022-08-19 02:38:42', NULL, NULL),
(3, 'New York', '2022-08-19 02:38:42', NULL, NULL),
(4, 'Dubai', '2022-08-19 02:38:42', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `city_id`, `parent_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, 'Informativno!', '2022-08-19 23:28:51', '2022-08-19 23:28:51', NULL),
(29, 2, 1, 1, 'Hvala.', '2022-08-24 13:29:28', '2022-08-24 13:29:28', NULL),
(31, 1, 2, NULL, 'Planirao sam posjetiti.', '2022-08-26 17:32:57', '2022-08-26 17:32:57', NULL),
(32, 1, 1, NULL, 'Pronašao sam sobe na booking.com.', '2022-08-26 17:40:50', '2022-08-26 17:40:50', NULL),
(33, 2, 2, 31, 'Uživajte u odmoru.', '2022-08-26 17:46:08', '2022-08-26 17:46:08', NULL),
(34, 4, 3, NULL, 'Planiram posjetiti!', '2022-09-04 18:10:25', '2022-09-04 18:10:25', NULL),
(35, 4, 1, 32, 'Također.', '2022-09-04 18:10:52', '2022-09-04 18:10:52', NULL),
(36, 5, 3, 34, 'Prekrasno je.', '2022-09-04 18:11:39', '2022-09-04 18:11:39', NULL),
(37, 5, 4, NULL, 'Luksuzna destinacija!', '2022-09-04 18:11:57', '2022-09-04 18:11:57', NULL),
(38, 6, 4, NULL, 'Malo preskupo.', '2022-09-04 18:12:36', '2022-09-04 18:12:36', NULL),
(39, 7, 3, NULL, 'Prekrasan grad.', '2022-09-04 18:13:43', '2022-09-04 18:13:43', NULL),
(40, 8, 4, 38, 'Ima i povoljnijih smještaja.', '2022-09-04 18:14:44', '2022-09-04 18:14:44', NULL),
(41, 9, 4, NULL, 'Volio bih posjetiti.', '2022-09-04 18:15:31', '2022-09-04 18:15:31', NULL),
(42, 10, 2, NULL, 'Prekrasan grad.', '2022-09-04 18:16:13', '2022-09-04 18:16:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Spring', '2022-08-21 23:45:18', NULL, NULL),
(2, 'Summer', '2022-08-21 23:45:31', NULL, NULL),
(3, 'Autumn', '2022-08-21 23:45:39', NULL, NULL),
(4, 'Winter', '2022-08-21 23:45:55', NULL, NULL),
(5, 'New Year', '2022-08-21 23:46:04', NULL, NULL),
(6, 'Easter', '2022-08-21 23:46:20', NULL, NULL),
(7, 'Christmas', '2022-08-21 23:46:33', NULL, NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_10_000001_create_cities_comments_table', 1),
(6, '2022_08_10_000002_create_designs_table', 2),
(7, '2022_08_10_000003_create_theme_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(10) UNSIGNED NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL),
(5, 1, NULL, NULL, NULL),
(6, 1, NULL, NULL, NULL),
(7, 5, NULL, NULL, NULL),
(8, 6, NULL, NULL, NULL),
(9, 7, NULL, NULL, NULL),
(10, 2, NULL, NULL, NULL),
(11, 4, NULL, NULL, NULL);

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
  `type` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pero peric', 'bzvz923@gmail.com', NULL, '$2y$10$oAzISNheUoEbUSaUu.RWReug3qW1gilLVxpg9AY8ajn32AzWRxddK', 1, NULL, '2022-08-19 00:38:58', '2022-08-19 00:38:58'),
(2, 'admin', 'bzvz923@zoho.eu', NULL, '$2y$10$Hbuuyks8dijuqQKO24PJB.AFnj0rbptU1jlZ5gvvRNkraBDqTbWNC', 2, NULL, '2022-08-19 20:45:05', '2022-08-19 20:45:05'),
(3, 'luka lukić', 'bzvz923@zoho.com', NULL, '$2y$10$mjbheplMPf3pwuKgj5dzJ.pDcealWXLkmnyB7igdIBTk/.DAFK8A6', 1, NULL, '2022-08-23 00:45:25', '2022-08-23 00:45:25'),
(4, 'petar petić', 'bzvz123@gmail.com', NULL, '$2y$10$E4VHv8mwVCmbp31shepWzuUIv6BJUPaJ2xpvdiCC6subqEiuNQHaG', 1, NULL, '2022-09-04 18:10:12', '2022-09-04 18:10:12'),
(5, 'ana anic', 'bzvz123@zoho.eu', NULL, '$2y$10$vH2C84cW8y4tFGe2Fh1J7uBn0nG5ylX.8uHtqRYrRtJRZAnSESXGq', 1, NULL, '2022-09-04 18:11:21', '2022-09-04 18:11:21'),
(6, 'adam adamic', 'bzvz123@zoho.com', NULL, '$2y$10$VzeHgmQwl9XIdsW5cN/bA.DuuG3xk5E5hLQC3758rEzFWjOivFbxK', 1, NULL, '2022-09-04 18:12:24', '2022-09-04 18:12:24'),
(7, 'putOkoSvijeta', 'bzvz323@gmail.com', NULL, '$2y$10$VWanKDs2xpZ1AoIGisINx.FasPOj7hwGljyYaXY7Bn43dkZ64NAW2', 1, NULL, '2022-09-04 18:13:28', '2022-09-04 18:13:28'),
(8, 'EnglishTraveller', 'bzvz9923@zoho.eu', NULL, '$2y$10$bMrKSzX7QiBnMBXmjRIlTeH1TVoUAwnE/N1iIpVkgjlkbmTgn/AlK', 1, NULL, '2022-09-04 18:14:13', '2022-09-04 18:14:13'),
(9, 'stipe stipic', 'bzvz9223@zoho.com', NULL, '$2y$10$AWxFHNF3XmAzYjUbNBnYWuPPcWtD/xSd9llGA3jI4viIMxb/Uft1K', 1, NULL, '2022-09-04 18:15:15', '2022-09-04 18:15:15'),
(10, 'ivo ivic', 'bzvz9233@zoho.com', NULL, '$2y$10$ebAV/hPHywRA.WO7OY.pkuX7jhtLEgeqSAYCo7EoVACcBOgg4rRBu', 1, NULL, '2022-09-04 18:16:03', '2022-09-04 18:16:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
