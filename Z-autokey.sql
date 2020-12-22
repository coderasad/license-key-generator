-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 04:02 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autokey`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_09_013153_create_roles_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` timestamp NULL DEFAULT NULL,
  `active_key` int(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `firstName`, `lastName`, `org`, `street`, `city`, `mobile`, `email`, `email_verified_at`, `password`, `license_key`, `expire_date`, `active_key`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'Asad', 'Rahman', 'CodeFun', 'Road # 10', 'Dhaka', '01717971904', 'asad@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6Ild6U3poNDRIV3c3bmVQaXp1VDUxYXc9PSIsInZhbHVlIjoiaHpTbys2V1lPa1llTER1QTFXY1NWVG9ScHFDWWZSTWNrV3dESnkzWG5QND0iLCJtYWMiOiIwNjA3NWI3YmEyM2E4NzdmYTBlZDM0NDZiMDY4NWJhYjk4YTg4MGUxY2FhMGNhYTk3YzAxZDI3NDM0MTlkMWNhIn0=', '2021-03-21 23:01:05', 1, NULL, '2020-12-21 10:35:54', '2020-12-22 03:11:49'),
(2, 1, 'Admin', 'Admin', 'Admin', 'Admin', 'Admin', '01717-971904', 'admin@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', NULL, NULL, 0, NULL, NULL, NULL),
(3, 2, 'Mominul', 'Haque', 'CodeFun', 'Road # 10', 'Mirpur-Dhaka', '01700000000', 'momin@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6IkZDM0JoeDBnOXdIYy96UW54RWc1MkE9PSIsInZhbHVlIjoiYytmK1ZLRXVQVUE2U0doYytpdFJRWnJ1V3N6NFRIbDNDMlVlbEM5ekRUMD0iLCJtYWMiOiJhYTk2YzAxNDRlYjI3MDViMmVjM2ZmNzNjZjE1YTlkYzZlMmFjZDFjMjBiYTE3NDAxMGE5NTM0YTAyNjVlN2M5In0=', '2021-06-22 03:42:30', 1, NULL, '2020-12-21 23:20:06', '2020-12-22 08:08:30'),
(4, 2, 'Sazzad', 'Rahman', 'CodeFun', 'Road # 10', 'Mirpur-Dhaka', '01700000001', 'sazzad@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6IlRHL3dlQ2ZBNlBlN3kzR09ydFo1UUE9PSIsInZhbHVlIjoiUVFYSmVvYThId1k2djZkaVpyK2gvbTVCSXpHL29oOWFQSzdNYlJid1lQST0iLCJtYWMiOiI5ZTZlZDUxYThjYWI2OTQ2YjA0Nzk0Y2ZkZDAyZmZlNTc3MTExNjRlOTU5MDcxNmY4Zjc4MDczMzdjNmZlZTk2In0=', '2021-06-22 03:45:54', 0, NULL, '2020-12-21 23:23:15', '2020-12-22 03:45:54'),
(5, 2, 'Shimul', 'Rahman', 'CodeFun', 'Road # 10', 'Mirpur-Dhaka', '01700000002', 'shimul@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6IjNDamxkUjlHUVJzd0tDOTd4UGN6R2c9PSIsInZhbHVlIjoiZ05ET1VxbnZFWHZJaGpFK1BRNXh0R25wZVMrVUxYdFZFb1FIWnhxQ3lWbz0iLCJtYWMiOiI1MTM0NjY1NzI1ODcxNTE5NWQxYjdkYzExYzFkMTI4NWFkNTdiOWQyMzNjODc5YmJkMmJlMzk3M2IyZmZlN2FiIn0=', '2021-12-22 03:49:25', 1, NULL, '2020-12-21 23:26:54', '2020-12-22 06:58:08'),
(6, 2, 'Azad', 'Rahman', 'CodeFun', 'Road # 10', 'Mirpur-Dhaka', '01700000004', 'azad@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6Ii9kOExMdGZhVXVSVzZoQ2N2cWhDZFE9PSIsInZhbHVlIjoiYUJEQWJqRW5kWGNUNVBxS2JHQ1BMUGdsUHFMZjlEY3hTQUcwY1VycGkvaz0iLCJtYWMiOiIxODBmMTEwOGEyOWVjYWI3OTIyOTc2MTQ4MjkwYzcyYmIwNzVhODZhYmFiOTRkN2M0MWM3Yjg4MDQ3NjdlNTU1In0=', '2021-03-22 03:56:21', 1, NULL, '2020-12-22 03:55:05', '2020-12-22 04:50:03'),
(7, 2, 'Mamun', 'Khan', 'CodeFun', 'Road # 10', 'Dhaka', '01700000005', 'mamun@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6IjA3OURUbE1yWkN1SzN1WFVLMFZDcmc9PSIsInZhbHVlIjoiT2d2bnY2dXdWbVluY00wY1RPSVJFbnlzVEc2Si9WVW81Qmw1Mi9YaUVqUT0iLCJtYWMiOiJiMzljYzQxYjUzY2EzZmI5NmYyYTI5OTU0YWEyNGM1YTBlNzJhN2JlOTE4NzUwZTIyZGZmZTQxOTdmYmY0MzhlIn0=', '2021-06-22 07:27:30', 0, NULL, '2020-12-22 07:09:32', '2020-12-22 07:27:30'),
(8, 2, 'HM.', 'Nayem', 'CodeFun', 'Road # 10', 'Dhaka', '01700000003', 'nayem@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', NULL, NULL, 0, NULL, '2020-12-22 07:59:43', '2020-12-22 07:59:43'),
(9, 2, 'Faruk', 'Hossain', 'IsDB BISEW', 'Road # 10', 'Dhaka', '01700000006', 'faruk@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', 'eyJpdiI6IldpNmVaQnV2M0tmekNkSndod0Jvd3c9PSIsInZhbHVlIjoiSFhPSFo4a1JVZzVFdlJLekZ4Wmpnb2dqK3QrK252ZDJtZTFxNnh6VHpKMD0iLCJtYWMiOiIyOGRjYWFkYzBkOTliODY2ZGU5YTUyZjkzODBkMGJiNTM5OGYwNjMzNGZiMTdmNWU1ZTY1YzgxZmFlYTFhOGI3In0=', '2021-03-22 08:28:35', 0, NULL, '2020-12-22 08:27:56', '2020-12-22 08:28:35'),
(10, 2, 'Tamim', 'Ikbal', 'BD Cricket', 'Road # 10', 'Mirpur-Dhaka', '01700000007', 'tamim@gmail.com', NULL, '$2y$10$DYBHSZ1AYzwPP8dTpK3tauQnVtBxP1kBLz1eArXQrLm2FF86OQVTG', NULL, NULL, 0, NULL, '2020-12-22 08:56:05', '2020-12-22 08:56:05');

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
