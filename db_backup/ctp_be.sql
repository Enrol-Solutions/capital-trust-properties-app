-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 16, 2025 at 05:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctp_be`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '2025-06-16 13:41:46', '2025-06-16 13:41:46', 2);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `image_id`) VALUES
(4, '2025-06-16 09:04:39', '2025-06-16 09:04:39', 6),
(5, '2025-06-16 09:07:39', '2025-06-16 09:07:39', 1),
(6, '2025-06-16 10:01:02', '2025-06-16 10:01:02', 11),
(7, '2025-06-16 10:01:09', '2025-06-16 10:01:09', 15);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `created_at`, `updated_at`, `image`, `property_id`) VALUES
(1, '2025-06-16 08:09:42', '2025-06-16 08:09:42', 'properties/G6DOtuXSiSW3dUsw0BkLSop8SIXJpT70EYEvsKVd.jpg', 1),
(6, '2025-06-16 09:04:31', '2025-06-16 09:04:31', 'properties/G00BBWDqXP1pmhzI8VgyUH0BwGh3eLQ7h2zfRCsn.jpg', 3),
(7, '2025-06-16 09:11:33', '2025-06-16 09:11:33', 'properties/rxzqvRRWp6xGDv63BgCKraAJ6hPo9mAMv3gmQdQR.jpg', 4),
(8, '2025-06-16 09:17:46', '2025-06-16 09:17:46', 'properties/YJJd6k3Wdcrd6X9FMONaoEC3woKzCnR3gOx93BEh.jpg', 5),
(9, '2025-06-16 09:34:26', '2025-06-16 09:34:26', 'properties/aK0bwtgNRoIla2qULcRro2HYhxmiGGJHBdRDMMcm.jpg', 6),
(10, '2025-06-16 09:42:12', '2025-06-16 09:42:12', 'properties/pDYCrumamSjFLKRLZ7CT5vbEqLvGY87eeKUNeJfr.jpg', 7),
(11, '2025-06-16 09:45:55', '2025-06-16 09:45:55', 'properties/klPBhIy5uviRWJCNMcIeVZbh682gIqK4TFbPVZJg.jpg', 8),
(12, '2025-06-16 09:49:54', '2025-06-16 09:49:54', 'properties/3hQoHiGgfXzYfeOdfRNv0mVoiGfSgc5iga8E9nrR.jpg', 9),
(13, '2025-06-16 09:51:37', '2025-06-16 09:51:37', 'properties/N5YZssS6dBsTmrWtySohKObhKnqTpOJzGDzcCa0y.jpg', 10),
(14, '2025-06-16 09:55:04', '2025-06-16 09:55:04', 'properties/u1Na3e0qOEahyxSOav77kLkyoAqPzsJtyRB5PbXB.jpg', 11),
(15, '2025-06-16 09:58:41', '2025-06-16 09:58:41', 'properties/oPzqrsQCL63cITd49DJtYZZgCld3cYWBrRzdg3eR.jpg', 12),
(16, '2025-06-16 10:00:40', '2025-06-16 10:00:40', 'properties/SOMbMzJsK7dTTopDaVgJCXpebnb35cyMTjOYpnKb.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_14_162601_create_oauth_auth_codes_table', 1),
(5, '2024_10_14_162602_create_oauth_access_tokens_table', 1),
(6, '2024_10_14_162603_create_oauth_refresh_tokens_table', 1),
(7, '2024_10_14_162604_create_oauth_clients_table', 1),
(8, '2024_10_14_162605_create_oauth_personal_access_clients_table', 1),
(9, '2024_10_22_161674_create_properties_table', 1),
(10, '2024_10_23_155019_create_images_table', 1),
(11, '2024_10_27_033541_create_wanted_properties_table', 1),
(12, '2024_11_06_090140_create_admins_table', 1),
(13, '2024_11_06_112531_create_banners_table', 1),
(14, '2024_11_09_091408_create_super_admins_table', 1),
(15, '2024_11_11_055323_create_subscribers_table', 1),
(16, '2024_11_11_104448_create_news_table', 1),
(17, '2025_01_10_092702_create_owners_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `created_at`, `updated_at`, `title`, `author`, `description`, `image`, `link`) VALUES
(1, '2025-06-16 08:17:25', '2025-06-16 08:17:25', 'Exciting New Development Project Launched in Colombo', 'Admin', 'We are thrilled to announce the launch of an innovative residential development project in the heart of Colombo. This new project, named \"Green Haven Residences,\" promises to redefine urban living with its state-of-the-art amenities and sustainable design.\r\n\r\nProject Highlights:\r\n\r\nPrime Location: Situated in the bustling city center, Green Haven Residences offers easy access to major business districts, shopping centers, and educational institutions.\r\nEco-Friendly Design: The development features en', 'hhKC2aEb53utOGfve2opvCvUeu8UCzV5AI9F7tbD.jpg', 'https://ouphaips.net/4/7524668');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` char(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `properties_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `property_type` enum('Apartment','House','Residential Land','Hotel and Villa','Commercial Land','Commercial Building','Warehouse','Factory','Estate','Other') NOT NULL,
  `deal_type` enum('forBuy','forRent') NOT NULL,
  `posted_by` enum('owner','broker') NOT NULL,
  `bed_rooms` int(11) DEFAULT NULL,
  `parking` int(11) DEFAULT NULL,
  `bath_rooms` int(11) DEFAULT NULL,
  `land_extent` int(11) DEFAULT NULL,
  `square_feet` double DEFAULT NULL,
  `district` text NOT NULL,
  `province` enum('Southern','Western','Central','Sabaragamuwa','Eastern','Uva','North western','North Central','North') NOT NULL,
  `asking_price` double NOT NULL,
  `location` text NOT NULL,
  `furnished` tinyint(1) DEFAULT NULL,
  `status` enum('to_active','active','not_active') NOT NULL DEFAULT 'to_active',
  `commision` enum('no','3%','one month fee') NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `users_id`, `created_at`, `updated_at`, `property_type`, `deal_type`, `posted_by`, `bed_rooms`, `parking`, `bath_rooms`, `land_extent`, `square_feet`, `district`, `province`, `asking_price`, `location`, `furnished`, `status`, `commision`, `description`) VALUES
(1, 1, '2025-06-16 08:09:42', '2025-06-16 08:12:32', 'House', 'forBuy', 'owner', 2, 2, 2, NULL, 20000, 'Colombo', 'Western', 400000000, 'Hanwella', 1, 'active', '3%', 'wdsfsd'),
(3, 2, '2025-06-16 09:04:31', '2025-06-16 09:11:42', 'House', 'forBuy', 'owner', 2, 2, 2, NULL, 23243, 'Gampaha', 'Western', 430000000, 'dgg', 1, 'active', '3%', 'fsdfsdfsdf'),
(4, 2, '2025-06-16 09:11:33', '2025-06-16 09:13:53', 'House', 'forRent', 'owner', 3, 1, 2, NULL, 4300, 'Gampaha', 'Western', 2300000, 'Gmapaha', 1, 'active', 'one month fee', 'dfsdfsfsdf'),
(5, 2, '2025-06-16 09:17:46', '2025-06-16 09:18:32', 'Commercial Land', 'forBuy', 'owner', NULL, 2, NULL, 4, NULL, 'Colombo', 'Western', 540000, 'dfsdfsd', NULL, 'active', '3%', 'sdfsdf'),
(6, 2, '2025-06-16 09:34:26', '2025-06-16 09:42:36', 'Other', 'forBuy', 'owner', 2, 2, 2, NULL, 32, 'Gampaha', 'Western', 342423423423432, 'sdfsdf', 1, 'active', '3%', 'sfsdfdsf'),
(7, 2, '2025-06-16 09:42:12', '2025-06-16 09:42:32', 'Residential Land', 'forBuy', 'owner', NULL, 2, NULL, 430000, NULL, 'Colombo', 'Western', 3232456, 'dsfsdf', NULL, 'active', '3%', 'dsffdsfdsfsd'),
(8, 2, '2025-06-16 09:45:55', '2025-06-16 09:46:01', 'Hotel and Villa', 'forBuy', 'owner', 320, 2, 23, NULL, 2312, 'Colombo', 'Western', 430000000, 'homagama', 1, 'active', '3%', 'sdgcbcvbbcvbvcb'),
(9, 2, '2025-06-16 09:49:54', '2025-06-16 09:50:05', 'Commercial Land', 'forBuy', 'owner', NULL, 2, NULL, 540, NULL, 'Colombo', 'Western', 5300000, 'hello', NULL, 'active', '3%', 'dfsds'),
(10, 2, '2025-06-16 09:51:37', '2025-06-16 09:51:43', 'Commercial Building', 'forBuy', 'owner', NULL, 3, NULL, NULL, 430, 'Colombo', 'Western', 5700000000, 'nugegoda', 1, 'active', '3%', 'sdsdffs'),
(11, 2, '2025-06-16 09:55:04', '2025-06-16 09:55:11', 'Warehouse', 'forBuy', 'owner', NULL, 34, NULL, NULL, 345, 'Colombo', 'Western', 48900000, 'nugegoda', 1, 'active', '3%', 'sdfsfsdfs'),
(12, 2, '2025-06-16 09:58:41', '2025-06-16 09:58:47', 'Estate', 'forBuy', 'owner', NULL, 2, NULL, 434, NULL, 'Rathnapura', 'Sabaragamuwa', 780000, 'dfgdfg', NULL, 'active', '3%', 'xczxczczc'),
(13, 2, '2025-06-16 10:00:40', '2025-06-16 10:00:45', 'Other', 'forBuy', 'owner', 2, 2, 2, NULL, 232, 'Gampaha', 'Western', 43200000, 'sdf', 1, 'active', '3%', 'safsfdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Deelaka Lakpura', '0752056898', 'deelaka.lakpura94@gmail.com', NULL, '$2y$12$lja6bvY41a7d.LgVknJ45O2a8f0UJUzJGM0u8m9MJ92SXllPP6nV2', '2025-06-16 08:09:00', '2025-06-16 08:09:00'),
(2, 'Admin', '07769504930', 'admin@gmail.com', NULL, '$2y$12$jvMkOPQsL4Yq4B.Np.TiA.7ajIzCNFbC5MiqeFS1f7ULtf3.1qc0a', '2025-06-16 08:11:06', '2025-06-16 08:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `wanted_properties`
--

CREATE TABLE `wanted_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_buy` tinyint(1) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` enum('active','not_active') NOT NULL DEFAULT 'active',
  `property_type` enum('Apartment','House','Residential Land','Hotel and Villa','Commercial Land','Commercial Building','Warehouse','Factory','Estate','Other') NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `requirement` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_property_id_foreign` (`property_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_users_id_foreign` (`users_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `super_admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wanted_properties`
--
ALTER TABLE `wanted_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wanted_properties_users_id_foreign` (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wanted_properties`
--
ALTER TABLE `wanted_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`);

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD CONSTRAINT `super_admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wanted_properties`
--
ALTER TABLE `wanted_properties`
  ADD CONSTRAINT `wanted_properties_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
