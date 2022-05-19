-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 07:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_space_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Email Notifications', NULL, NULL),
(2, 'Sms Notifications', NULL, '2022-05-17 00:53:52'),
(4, 'Facebook & Instagram Ads', NULL, NULL),
(5, 'Design System Analytics', NULL, NULL),
(6, 'Unlimited cloud storage', NULL, '2022-05-17 00:52:50'),
(8, 'View listers contact information', '2022-05-17 07:55:48', NULL),
(9, 'Able to feature their listing', '2022-05-17 07:58:17', NULL),
(10, 'Able to list in all categories', '2022-05-17 07:58:23', NULL),
(11, 'Verified member ( by sms )', '2022-05-17 08:00:43', NULL),
(12, 'Max property to list', '2022-05-17 08:00:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', '$2y$10$I4DQwETCU.GwO9JeFitBPu9s4lqakIadNL/VayC08TFppvL/C7UX.', NULL, '2022-05-17 00:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `animities`
--

CREATE TABLE `animities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `animities`
--

INSERT INTO `animities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'TV', '2022-05-17 08:29:58', NULL),
(2, 'Air Conditioning', '2022-05-17 08:29:58', NULL),
(3, 'Alarm', '2022-05-17 08:31:19', NULL),
(5, 'Cable TV', NULL, '2022-05-17 03:29:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact_type`
--

CREATE TABLE `contact_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_type`
--

INSERT INTO `contact_type` (`id`, `contact_type`, `created_at`, `updated_at`) VALUES
(1, 'General Information', NULL, NULL),
(2, 'General', NULL, '2022-05-16 07:10:44'),
(3, 'test type 1', NULL, '2022-05-16 08:06:20'),
(6, 'test  ad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`, `contact_type_id`, `created_at`, `updated_at`) VALUES
(3, 'fdasfa', 'fdasf', 'fasdfa', 'fdsafdas', 'fdasfdas', 1, '2022-05-16 13:44:36', NULL);

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
(5, '2022_05_13_121348_create_admin_table', 1),
(14, '2022_05_16_052208_create_addons_table', 2),
(15, '2022_05_16_052457_create_plans_table', 2),
(16, '2022_05_16_114556_create_contact_type_table', 3),
(17, '2022_05_16_114622_create_contact_us_table', 3),
(18, '2022_05_17_082818_create_animities_table', 4);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `addon_id` bigint(20) UNSIGNED NOT NULL,
  `addonId` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_notification` int(11) NOT NULL DEFAULT 0,
  `sms_notfication` int(11) NOT NULL DEFAULT 0,
  `type_of_sms_notification` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_property` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `description`, `addon_id`, `addonId`, `email_notification`, `sms_notfication`, `type_of_sms_notification`, `number_of_property`, `created_at`, `updated_at`) VALUES
(1, 'Starter', 0.00, 'Per user, per month', 6, '5,4,2', 0, 0, '0', 0, '2022-05-16 08:56:38', '2022-05-17 01:45:58'),
(2, 'Professional', 25.00, 'Per user, per month', 4, '5', 0, 0, '0', 0, '2022-05-16 08:56:38', '2022-05-16 05:21:53'),
(3, 'Organization', 50.00, 'Per user, per month', 5, '6,5,1', 0, 0, '0', 10, '2022-05-16 09:02:25', '2022-05-17 01:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `propertis_list`
--

CREATE TABLE `propertis_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `furnished` int(11) NOT NULL COMMENT '0=no, 1=yes',
  `utilities` int(11) NOT NULL COMMENT '0=no, 1=yes',
  `minimum_term` int(11) NOT NULL,
  `unit_type` int(11) NOT NULL COMMENT '0=seprate, 1=seprate_room_unit',
  `bath_type` int(11) NOT NULL COMMENT '0=private, 1=shared',
  `entrance_type` int(11) NOT NULL COMMENT '0=private entrance, 1=shared entrance',
  `washer_and_dryer` int(11) NOT NULL COMMENT '0=in unit, 1=on the permises, 3=none',
  `pets_allowed` int(11) NOT NULL COMMENT '0=no, 1=yes',
  `monthly_rent` int(11) NOT NULL,
  `fees_id` bigint(20) UNSIGNED NOT NULL,
  `animities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertis_list`
--

INSERT INTO `propertis_list` (`id`, `property_heading`, `property_type`, `bedrooms`, `bathrooms`, `furnished`, `utilities`, `minimum_term`, `unit_type`, `bath_type`, `entrance_type`, `washer_and_dryer`, `pets_allowed`, `monthly_rent`, `fees_id`, `animities`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 'Test heading', 1, 2, 9, 1, 0, 3, 1, 0, 1, 1, 0, 1, 2, '1,2,3', 0, '2022-05-17 10:06:43', '2022-05-17 05:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `room_featured`
--

CREATE TABLE `room_featured` (
  `id` int(11) NOT NULL,
  `featured_type` int(11) NOT NULL DEFAULT 0 COMMENT '1=bedroom, 2=bathroom, 3=ac',
  `featured` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_featured`
--

INSERT INTO `room_featured` (`id`, `featured_type`, `featured`, `created_at`) VALUES
(1, 1, 'Bedroom 1', '2022-05-17 08:18:09'),
(2, 1, 'Bedroom 2', '2022-05-17 08:18:22'),
(3, 1, 'Bedroom 3', '2022-05-17 08:18:30'),
(4, 1, 'Bedroom 4', '2022-05-17 08:18:36'),
(5, 1, 'Bedroom 5', '2022-05-17 08:18:43'),
(6, 1, 'Bedroom 6', '2022-05-17 08:18:50'),
(7, 2, 'Bathroom 1', '2022-05-17 08:18:09'),
(8, 2, 'Bathroom 2', '2022-05-17 08:18:22'),
(9, 2, 'Bathroom 3', '2022-05-17 08:18:30'),
(10, 2, 'Bathroom 4', '2022-05-17 08:18:36'),
(11, 2, 'Bathroom 5', '2022-05-17 08:18:43'),
(12, 2, 'Bathroom 6', '2022-05-17 08:18:50');

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
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=active, 1=block',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Werner Conn IV', 'moen.lucie@example.net', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'Lhl5BjftDf', '2022-05-16 23:54:31', '2022-05-16 23:54:31'),
(2, 'Mr. Tyree Durgan', 'akoepp@example.net', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'l5m1eBxCPk', '2022-05-16 23:54:32', '2022-05-16 23:54:32'),
(3, 'Bertram Bahringer', 'xwitting@example.org', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'JML182PTgW', '2022-05-16 23:54:32', '2022-05-16 23:54:32'),
(4, 'Aileen Kuphal', 'elias.wintheiser@example.com', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'PkHFXTmdkh', '2022-05-16 23:54:32', '2022-05-16 23:54:32'),
(5, 'Elisa Kshlerin', 'clemmie.moore@example.net', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 1, 'uvNLHKngjc', '2022-05-16 23:54:32', '2022-05-17 02:21:52'),
(6, 'Estella Parisian', 'dell.zemlak@example.net', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'LMsS7pqgVG', '2022-05-16 23:54:32', '2022-05-17 02:21:40'),
(7, 'Allene McGlynn DDS', 'jgoldner@example.com', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'TqjAyc1ZG3', '2022-05-16 23:54:32', '2022-05-16 23:54:32'),
(8, 'Hassie Swift', 'alba32@example.net', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'dSIOG9xmr2', '2022-05-16 23:54:32', '2022-05-17 02:22:50'),
(9, 'Dr. Tremayne Becker', 'vivianne09@example.org', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'pce0JwOQrc', '2022-05-16 23:54:32', '2022-05-16 23:54:32'),
(10, 'Victoria Bode', 'franco52@example.com', '2022-05-16 23:54:31', '$2y$10$IpNI5EvK8jXg.6sIzWRPju4FIPa/MFl6htoE.UQewl8CN7/oJVKpa', 0, 'jYn9EKxqn3', '2022-05-16 23:54:32', '2022-05-16 23:54:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `animities`
--
ALTER TABLE `animities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_type`
--
ALTER TABLE `contact_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_us_contact_type_id_foreign` (`contact_type_id`);

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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plans_addon_id_foreign` (`addon_id`);

--
-- Indexes for table `propertis_list`
--
ALTER TABLE `propertis_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_featured`
--
ALTER TABLE `room_featured`
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
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `animities`
--
ALTER TABLE `animities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_type`
--
ALTER TABLE `contact_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propertis_list`
--
ALTER TABLE `propertis_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room_featured`
--
ALTER TABLE `room_featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_contact_type_id_foreign` FOREIGN KEY (`contact_type_id`) REFERENCES `contact_type` (`id`);

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_addon_id_foreign` FOREIGN KEY (`addon_id`) REFERENCES `addons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
