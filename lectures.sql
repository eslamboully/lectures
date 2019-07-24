-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2019 at 08:28 PM
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
(1, 'Root', 'admin@admin.com', 'default.png', '$2y$10$5f9mWyzHaGwhT97KyVbFw.0RF39y5WhXNC8Lvh/2dg6cEyQfEiT4i', NULL, '2019-07-23 11:50:31', '2019-07-23 11:50:31');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_07_06_063251_create_admins_table', 1),
(2, '2019_07_07_083154_create_users_table', 1),
(3, '2019_07_08_164152_create_permission_tables', 1);

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
(1, 'add_admins', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(2, 'add_users', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(3, 'add_levelOne', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(4, 'add_levelTwo', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(5, 'add_levelThree', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(6, 'add_levelFour', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(7, 'add_levelFive', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(8, 'add_levelSix', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(9, 'add_levelSeven', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(10, 'add_levelEight', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(11, 'add_levelNine', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(12, 'edit_admins', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(13, 'edit_users', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(14, 'edit_levelOne', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(15, 'edit_levelTwo', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(16, 'edit_levelThree', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(17, 'edit_levelFour', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(18, 'edit_levelFive', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(19, 'edit_levelSix', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(20, 'edit_levelSeven', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(21, 'edit_levelEight', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(22, 'edit_levelNine', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(23, 'read_admins', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(24, 'read_users', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(25, 'read_levelOne', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(26, 'read_levelTwo', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(27, 'read_levelThree', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(28, 'read_levelFour', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(29, 'read_levelFive', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(30, 'read_levelSix', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(31, 'read_levelSeven', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(32, 'read_levelEight', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(33, 'read_levelNine', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(34, 'delete_admins', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(35, 'delete_users', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(36, 'delete_levelOne', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(37, 'delete_levelTwo', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(38, 'delete_levelThree', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(39, 'delete_levelFour', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(40, 'delete_levelFive', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(41, 'delete_levelSix', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(42, 'delete_levelSeven', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(43, 'delete_levelEight', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(44, 'delete_levelNine', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31');

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
(1, 'super_admin', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31'),
(2, 'sub_admin', 'admin', '2019-07-23 11:50:31', '2019-07-23 11:50:31');

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
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` enum('success','fail') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
