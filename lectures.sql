-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2019 at 07:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lectures`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `email`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Root', 'admin@admin.com', 'default.png', '$2y$10$UmWeB8UKF2hKMs45cp6lEu2uYSLJdNR77bt/thb56T1hHuzQxVfj6', NULL, '2019-07-12 05:51:32', '2019-07-12 05:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `level_eights`
--

DROP TABLE IF EXISTS `level_eights`;
CREATE TABLE IF NOT EXISTS `level_eights` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_fives`
--

DROP TABLE IF EXISTS `level_fives`;
CREATE TABLE IF NOT EXISTS `level_fives` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_fours`
--

DROP TABLE IF EXISTS `level_fours`;
CREATE TABLE IF NOT EXISTS `level_fours` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_nines`
--

DROP TABLE IF EXISTS `level_nines`;
CREATE TABLE IF NOT EXISTS `level_nines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_ones`
--

DROP TABLE IF EXISTS `level_ones`;
CREATE TABLE IF NOT EXISTS `level_ones` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_sevens`
--

DROP TABLE IF EXISTS `level_sevens`;
CREATE TABLE IF NOT EXISTS `level_sevens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_sixes`
--

DROP TABLE IF EXISTS `level_sixes`;
CREATE TABLE IF NOT EXISTS `level_sixes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_threes`
--

DROP TABLE IF EXISTS `level_threes`;
CREATE TABLE IF NOT EXISTS `level_threes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level_twos`
--

DROP TABLE IF EXISTS `level_twos`;
CREATE TABLE IF NOT EXISTS `level_twos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_06_063251_create_admins_table', 1),
(2, '2019_07_07_083154_create_users_table', 1),
(3, '2019_07_08_164152_create_permission_tables', 1),
(4, '2019_07_09_111512_create_level_ones_table', 1),
(5, '2019_07_09_111521_create_level_twos_table', 1),
(6, '2019_07_09_111525_create_level_threes_table', 1),
(7, '2019_07_09_111532_create_level_fours_table', 1),
(8, '2019_07_09_111536_create_level_fives_table', 1),
(9, '2019_07_09_111543_create_level_sixes_table', 1),
(10, '2019_07_09_111550_create_level_sevens_table', 1),
(11, '2019_07_09_111558_create_level_eights_table', 1),
(12, '2019_07_09_111603_create_level_nines_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Modules\\Admin\\Entities\\Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add_admins', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(2, 'add_users', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(3, 'add_levelOne', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(4, 'add_levelTwo', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(5, 'add_levelThree', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(6, 'add_levelFour', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(7, 'add_levelFive', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(8, 'add_levelSix', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(9, 'add_levelSeven', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(10, 'add_levelEight', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(11, 'add_levelNine', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(12, 'edit_admins', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(13, 'edit_users', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(14, 'edit_levelOne', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(15, 'edit_levelTwo', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(16, 'edit_levelThree', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(17, 'edit_levelFour', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(18, 'edit_levelFive', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(19, 'edit_levelSix', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(20, 'edit_levelSeven', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(21, 'edit_levelEight', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(22, 'edit_levelNine', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(23, 'read_admins', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(24, 'read_users', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(25, 'read_levelOne', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(26, 'read_levelTwo', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(27, 'read_levelThree', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(28, 'read_levelFour', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(29, 'read_levelFive', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(30, 'read_levelSix', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(31, 'read_levelSeven', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(32, 'read_levelEight', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(33, 'read_levelNine', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(34, 'delete_admins', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(35, 'delete_users', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(36, 'delete_levelOne', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(37, 'delete_levelTwo', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(38, 'delete_levelThree', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(39, 'delete_levelFour', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(40, 'delete_levelFive', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(41, 'delete_levelSix', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(42, 'delete_levelSeven', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(43, 'delete_levelEight', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(44, 'delete_levelNine', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32'),
(2, 'sub_admin', 'admin', '2019-07-12 05:51:32', '2019-07-12 05:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('success','fail') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `level`, `email`, `status`, `image`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahmoud', 6, 'admin@admin.com', 'success', '48380226_2173689489550618_3266547092188823552_n.jpg', '$2y$10$86f.b5DJXqPnlWjTrVujG.5gzUIK4eAu1.jnZ0xmV2V2ooOkMPJU.', NULL, '2019-07-12 05:52:22', '2019-07-12 05:56:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
