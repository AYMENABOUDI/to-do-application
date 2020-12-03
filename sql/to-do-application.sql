-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2020 at 12:39 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `to-do-application`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_admin_documents`
--

DROP TABLE IF EXISTS `manage_admin_documents`;
CREATE TABLE IF NOT EXISTS `manage_admin_documents` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `id_day` varchar(255) NOT NULL,
  `id_month` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `id_year` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_admin_documents`
--

INSERT INTO `manage_admin_documents` (`id`, `title`, `fichier`, `note`, `id_admin`, `id_day`, `id_month`, `month`, `id_year`, `created_at`, `updated_at`) VALUES
(77, 'TEST', 'img_580_380_center_articles-455376.jpg', '0', '1', '01122020', '122020', 'December 2020', '2020', '2020-12-01 13:20:16', '2020-12-01 13:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `manage_documents`
--

DROP TABLE IF EXISTS `manage_documents`;
CREATE TABLE IF NOT EXISTS `manage_documents` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_client` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fichier` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `id_day` varchar(255) NOT NULL,
  `id_month` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `id_year` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_documents`
--

INSERT INTO `manage_documents` (`id`, `id_client`, `title`, `fichier`, `note`, `id_admin`, `id_day`, `id_month`, `month`, `id_year`, `created_at`, `updated_at`) VALUES
(73, '124112020061210', 'cv', 'Aymen-Aboudi.pdf', 'cv aymen', '171020082142', '29112020', '112020', 'November 2020', '2020', '2020-11-29 17:20:25', '2020-11-29 17:20:25');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `task_date` date NOT NULL,
  `type` varchar(100) NOT NULL,
  `day` date NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `etats` varchar(50) NOT NULL,
  `etatsnote` text NOT NULL,
  `etatsdate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `task_date`, `type`, `day`, `id_admin`, `etats`, `etatsnote`, `etatsdate`, `created_at`, `updated_at`) VALUES
(53, 'Travel test bbbb', 'hello bbb', '2020-12-03', '4', '2020-12-03', '1', '0', '0', '2020-12-03', '2020-12-03 12:02:57', '2020-12-03 11:02:57'),
(51, 'TEST', 'bbbbbbbbbbbbbbbbbbbbb', '2020-12-03', '1', '2020-12-03', '1', '1', 'bbbbbbbbbbbbbbbbbbbbbbbb', '2020-12-03', '2020-12-03 09:57:20', '2020-12-03 08:57:20'),
(52, 'Meeting test nnnnn', 'bvbvb bnb bnb bnv bbbbbbbbbbbbbb', '2020-12-03', '4', '2020-12-03', '1', '0', '0', '2020-12-03', '2020-12-03 11:11:14', '2020-12-03 10:11:14'),
(54, 'AYMEN 8888 ABOUDI', 'hello', '2020-11-30', '2', '2020-11-30', '1', '0', '0', '2020-12-03', '2020-12-03 10:47:17', '2020-12-03 10:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthmonth` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthyear` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `block_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluation_etat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evaluation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_evaluation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_month` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vue` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=344 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_user`, `status`, `role`, `section`, `birthday`, `birthmonth`, `birthyear`, `gender`, `firstname`, `lastname`, `image`, `country`, `city`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `block_description`, `evaluation_etat`, `evaluation`, `last_evaluation`, `date`, `id_date`, `month`, `id_month`, `year`, `vue`) VALUES
(1, '171020082142', '1', '1', 'all', '03', '10', '1987', '1', 'Aymen', 'Aboudi', '1606325219.jpg', 'Tunisie', 'Ariana', 'admin@gmail.com', NULL, '$2y$10$KGxWFRfnu7RKQJKpVZNEtuN6JoslBIUiYtFiNlOJKUQb8NW21HswC', NULL, '2020-10-17 07:21:56', '2020-11-23 05:29:43', 'Description', '0', '0', '0', '', '', '', '', '', ''),
(34, '171020082141', '1', '0', '6', '03', '10', '1987', '1', 'AYMEN', 'ABOUDI', '1606840472.jpg', 'Tunisie', 'Ariana', 'aymenaboudi4@gmail.com', NULL, '$2y$10$Hpfr8hbdp4jkgauONlFSSOxgTroKxEZhBI7FPkl5fklkHnrm9u2uu', NULL, '2020-10-17 07:21:56', '2020-11-05 19:05:17', 'Description', '1', '8', '2020-10-17 11:16:09', '16/10/2020', '16102020', 'October2020', '102020', '2020', '0'),
(35, '171020032237', '0', '0', '6', '03', '10', '1987', '1', 'AYMEN 2', 'ABOUDI 2', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '0', '0', 'aymenaboudi5@gmail.com', NULL, '$2y$10$7tMDmCnD4w78oFhWKASyFeowCK./hMg55hg85AD/PVBg7Kg1vLjhC', NULL, '2020-10-17 14:23:40', '2020-10-17 14:35:50', 'Description', '0', '0', '0', '17/10/2020', '17102020', 'October2020', '102020', '2020', '0'),
(40, '241020051655', '1', '0', '0', '03', '10', '1987', '1', 'test bb', 'store', '1603563202.jpg', '0', '0', 'store@gmail.com', NULL, '$2y$10$FkKRBRqJgwZ2PLQ7xPufzuQct9Egqg5CECvYilxMNarIDuH1GYteq', NULL, '2020-10-24 16:17:21', '2020-10-24 05:33:17', 'Description', '0', '0', '0', '24/10/2020', '24102020', 'October2020', '102020', '2020', '0'),
(341, '061120045747', '1', '0', '0', '03', '10', '1988', '1', 'AYMEN', 'ABOUDI', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '0', '0', 'aymenaboudi4111111111111@gmail.com', NULL, '$2y$10$SduErQAieUTK9L6S1JZzVuyZ3foVo4g7JxrmBnJm71DPRC2Lh0yTS', NULL, '2020-11-06 15:58:05', '2020-11-06 15:58:05', 'Description', '0', '0', '0', '06/11/2020', '06112020', 'November2020', '112020', '2020', '0'),
(342, '061120045918', '1', '0', '0', '03', '10', '1987', '2', 'test', 'testing', '0c3b3adb1a7530892e55ef36d3be6cb8.png', '0', '0', 'aymenaboudi07@gmail.com', NULL, '$2y$10$HJe691eBS8HD2K3SiZ1X9.8nrGJVq8zJqsXSv.UlvZmNF1MzISIE2', NULL, '2020-11-06 15:59:48', '2020-11-06 15:59:48', 'Description', '0', '0', '0', '06/11/2020', '06112020', 'November2020', '112020', '2020', '0'),
(343, '011220044327', '1', '0', '0', '03', '10', '1987', '1', 'mystore', 'test', '1606841401.jpeg', '0', '0', 'mystore@gmail.com', NULL, '$2y$10$PH9b1pjEAmTLnpFHubB9gelSezNem9iA9Mol.UhZsmcsZw.r8RHhy', NULL, '2020-12-01 15:44:05', '2020-12-01 15:44:05', 'Description', '0', '0', '0', '01/12/2020', '01122020', 'December2020', '122020', '2020', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
