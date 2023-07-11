-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 03:19 PM
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
-- Database: `fishits`
--

-- --------------------------------------------------------

--
-- Table structure for table `bubbles`
--


CREATE DATABASE fishits;

USE fishits;

CREATE TABLE `bubbles` (
  `id` int(11) NOT NULL,
  `longitude` double DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bubbles`
--

INSERT INTO `bubbles` (`id`, `longitude`, `latitude`, `name`, `month`, `year`) VALUES
(11, 113.50015, -6.37755, 'Bubble 1', 'July', 2023),
(12, 113.64608, -6.36612, 'Bubble 2', 'July', 2023),
(13, 113.79117, -6.36824, 'Bubble 3', 'July', 2023),
(14, 113.93393, -6.40145, 'Bubble 4', 'July', 2023),
(16, 113.72319, -6.50362, 'Bubble 5', 'July', 2023);

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
-- Table structure for table `fish`
--

CREATE TABLE `fish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fish`
--

INSERT INTO `fish` (`id`, `name`) VALUES
(1, 'Manyung'),
(2, 'Layang'),
(3, 'Tembang'),
(4, 'Tongkol'),
(5, 'Tengiri'),
(6, 'Kembung'),
(7, 'Bentong'),
(8, 'Sunglir'),
(9, 'Layur'),
(10, 'Selar Kuning'),
(11, 'Semar'),
(12, 'Kuwe'),
(13, 'Tatengkek'),
(14, 'Alu-Alu'),
(15, 'Remang'),
(16, 'Lemadang'),
(17, 'Talang-talang'),
(18, 'Golok-Golok'),
(19, 'nomei');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `latitude` double(10,6) NOT NULL,
  `longitude` double(10,6) NOT NULL,
  `s` double(10,6) NOT NULL,
  `e` double(10,6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `latitude`, `longitude`, `s`, `e`, `created_at`, `updated_at`) VALUES
(1, 'Dorang 1', -6.656117, 113.838733, 39.367000, 50.324000, '2023-06-20 08:35:03', '2023-06-20 08:38:00'),
(2, 'Ikan Merah', -6.697433, 113.678000, 41.846000, 40.680000, '2023-06-20 08:35:41', '2023-06-20 08:35:41'),
(3, 'MD 1', -6.520617, 113.768000, 31.237000, 46.081000, '2023-06-20 08:36:06', '2023-06-20 08:36:06'),
(4, 'MD 2', -6.518750, 113.781083, 31.125000, 46.865000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(5, 'Tos Pote', -6.670617, 113.759200, 40.237000, 45.552000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(6, 'Zam 1', -6.695233, 113.975483, 41.714000, 58.529000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(7, 'Tompas 1', -6.610833, 113.894733, 36.650000, 53.684000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(8, 'Tos 2', -6.658350, 113.770867, 39.501000, 46.252000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(9, 'TLI', -6.694350, 113.975350, 41.661000, 58.521000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(10, 'TAAA 5', -6.593900, 113.906200, 35.634000, 54.371000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(11, 'SMBR 1', -6.608100, 113.850150, 36.486000, 51.009000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(12, 'SMBR 3', -6.569750, 113.841550, 34.185000, 50.493000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(13, 'TADEZ 4', -6.384633, 113.895217, 23.078000, 53.713000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(14, 'TADEZ 5', -6.521033, 113.871250, 31.262000, 52.275000, '2023-06-20 08:36:27', '2023-06-20 08:36:27'),
(15, 'KETENG', -6.588833, 113.696067, 35.330000, 41.764000, '2023-06-20 08:36:27', '2023-06-20 08:36:27');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_10_082930_create_bubbles_table', 1),
(3, '2023_07_10_082930_create_failed_jobs_table', 1),
(4, '2023_07_10_082930_create_fish_table', 1),
(5, '2023_07_10_082930_create_locations_table', 1),
(6, '2023_07_10_082930_create_password_reset_tokens_table', 1),
(7, '2023_07_10_082930_create_pendaratans_table', 1),
(8, '2023_07_10_082930_create_regionpic_table', 1),
(9, '2023_07_10_082930_create_shiptype_table', 1),
(10, '2023_07_10_082930_create_users_has_fish_table', 1),
(11, '2023_07_10_082930_create_users_table', 1),
(12, '2023_07_10_082933_add_foreign_keys_to_pendaratans_table', 1),
(13, '2023_07_10_082933_add_foreign_keys_to_users_has_fish_table', 1),
(14, '2023_07_10_082933_add_foreign_keys_to_users_table', 1);

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
-- Table structure for table `pendaratans`
--

CREATE TABLE `pendaratans` (
  `id` int(11) NOT NULL,
  `berat` bigint(20) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `nilaiProduksi` bigint(20) DEFAULT NULL,
  `monthYear` varchar(6) DEFAULT NULL,
  `fish_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaratans`
--

INSERT INTO `pendaratans` (`id`, `berat`, `harga`, `nilaiProduksi`, `monthYear`, `fish_id`) VALUES
(2, 505, 18000, 9090000, '202301', 1),
(3, 715, 19000, 13585000, '202302', 1),
(4, 1401, 19000, 26619000, '202303', 1),
(5, 1565, 18000, 28170000, '202304', 1),
(6, 692, 19000, 13148000, '202305', 1),
(7, 665, 19000, 12635000, '202306', 1),
(8, 120, 19000, 2280000, '202307', 1),
(9, 802, 19000, 15238000, '202308', 1),
(10, 1065, 19000, 20235000, '202309', 1),
(11, 706, 19000, 13414000, '202310', 1),
(13, 747, 19000, 14193000, '202311', 1),
(14, 1266, 19000, 24054000, '202312', 1),
(15, 24713, 19000, 469547000, '202301', 2),
(16, 38038, 19000, 722722000, '202302', 2),
(17, 27482, 19000, 522158000, '202303', 2),
(18, 17875, 19000, 339625000, '202304', 2),
(19, 3653, 21000, 76713000, '202305', 2),
(20, 4212, 21000, 88452000, '202306', 2),
(21, 51922, 24000, 1246128000, '202307', 2),
(22, 638586, 16000, 10217376000, '202308', 2),
(23, 1007149, 12000, 12085788000, '202309', 2),
(24, 379624, 13000, 4935112000, '202310', 2),
(25, 116831, 14000, 1635634000, '202311', 2),
(26, 105664, 18000, 1901952000, '202312', 2),
(27, 1339, 5000, 6695000, '202301', 3),
(28, 4043, 5000, 20215000, '202302', 3),
(29, 20787, 4000, 83148000, '202303', 3),
(30, 54106, 4000, 216424000, '202304', 3),
(31, 29627, 6000, 177762000, '202305', 3),
(32, 11778, 7000, 82446000, '202306', 3),
(33, 1755, 7000, 12285000, '202307', 3),
(34, 8749, 6000, 52494000, '202308', 3),
(35, 1157, 6000, 6942000, '202309', 3),
(36, 12740, 6000, 76440000, '202310', 3),
(37, 15119, 5000, 75595000, '202311', 3),
(38, 11778, 6000, 70668000, '202312', 3),
(39, 3994, 20000, 79880000, '202301', 4),
(40, 0, 0, 0, '202302', 4),
(41, 10774, 19000, 204706000, '202303', 4),
(42, 18242, 20000, 364840000, '202304', 4),
(43, 3608, 21000, 75768000, '202305', 4),
(44, 10681, 22000, 234982000, '202306', 4),
(45, 4736, 22000, 104192000, '202307', 4),
(46, 5174, 18000, 93132000, '202308', 4),
(47, 8723, 18000, 157014000, '202309', 4),
(48, 6000, 18000, 108000000, '202310', 4),
(49, 30618, 18000, 551124000, '202311', 4),
(50, 18915, 19000, 359385000, '202312', 4),
(51, 438, 50000, 21900000, '202301', 5),
(52, 60, 50000, 3000000, '202302', 5),
(53, 370, 55000, 20350000, '202303', 5),
(54, 1043, 55000, 57365000, '202304', 5),
(55, 1229, 55000, 67595000, '202305', 5),
(56, 760, 55000, 41800000, '202306', 5),
(57, 0, 0, 0, '202307', 5),
(58, 50, 55000, 2750000, '202308', 5),
(59, 13, 55000, 715000, '202309', 5),
(60, 980, 55000, 53900000, '202310', 5),
(61, 3781, 55000, 207955000, '202311', 5),
(62, 1355, 55000, 74525000, '202312', 5),
(63, 1755, 25000, 43875000, '202301', 6),
(64, 1690, 25000, 42250000, '202302', 6),
(65, 5395, 25000, 134875000, '202303', 6),
(66, 5993, 25000, 149825000, '202304', 6),
(67, 7618, 26000, 198068000, '202305', 6),
(68, 5772, 27000, 155844000, '202306', 6),
(69, 637, 27000, 17199000, '202307', 6),
(70, 5252, 25000, 131300000, '202308', 6),
(71, 13832, 24000, 331968000, '202309', 6),
(72, 5876, 22000, 129272000, '202310', 6),
(73, 10452, 22000, 229944000, '202311', 6),
(74, 5876, 25000, 146900000, '202312', 6),
(76, 260, 17000, 4420000, '202302', 7),
(77, 520, 16000, 8320000, '202303', 7),
(78, 3815, 17000, 64855000, '202304', 7),
(80, 6825, 17000, 116025000, '202305', 7),
(81, 4447, 18000, 80046000, '202306', 7),
(82, 806, 16000, 12896000, '202307', 7),
(83, 338, 14000, 4732000, '202308', 7),
(84, 546, 14000, 7644000, '202309', 7),
(85, 1417, 16000, 22672000, '202301', 7),
(86, 1105, 15000, 16575000, '202310', 7),
(87, 2717, 15000, 40755000, '202311', 7),
(88, 2041, 15000, 30615000, '202312', 7),
(89, 1495, 18000, 26910000, '202301', 8),
(90, 195, 18000, 3510000, '202302', 8),
(91, 0, 16000, 0, '202303', 8),
(92, 0, 17000, 0, '202304', 8),
(93, 0, 17000, 0, '202305', 8),
(94, 0, 18000, 0, '202306', 8),
(95, 169, 17000, 2873000, '202307', 8),
(96, 442, 17000, 7514000, '202308', 8),
(97, 39, 17000, 663000, '202309', 8),
(98, 0, 15000, 0, '202310', 8),
(99, 0, 15000, 0, '202311', 8),
(100, 1053, 17000, 17901000, '202312', 8),
(101, 272, 27000, 7344000, '202301', 9),
(102, 270, 27000, 7290000, '202302', 9),
(103, 2521, 27000, 68067000, '202303', 9),
(104, 16730, 27000, 451710000, '202304', 9),
(105, 3575, 28000, 100100000, '202305', 9),
(106, 3971, 29000, 115159000, '202306', 9),
(107, 213, 28000, 5964000, '202307', 9),
(108, 606, 27000, 16362000, '202308', 9),
(109, 2032, 27000, 54864000, '202309', 9),
(110, 2143, 27000, 57861000, '202310', 9),
(111, 2035, 27000, 54945000, '202311', 9),
(112, 1195, 27000, 32265000, '202312', 9),
(113, 624, 17000, 10608000, '202301', 10),
(114, 4108, 17000, 69836000, '202302', 10),
(115, 1820, 17000, 30940000, '202303', 10),
(116, 26, 17000, 442000, '202304', 10),
(117, 494, 18000, 8892000, '202305', 10),
(118, 78, 18000, 1404000, '202306', 10),
(119, 65, 16000, 1040000, '202307', 10),
(120, 39, 15000, 585000, '202308', 10),
(121, 26, 16000, 416000, '202309', 10),
(122, 0, 0, 0, '202310', 10),
(123, 0, 0, 0, '202311', 10),
(124, 1287, 16000, 20592000, '202312', 10),
(125, 988, 12000, 11856000, '202301', 11),
(126, 13, 12000, 156000, '202302', 11),
(127, 76986, 10000, 769860000, '202303', 11),
(128, 54379, 10000, 543790000, '202304', 11),
(129, 9204, 12000, 110448000, '202305', 11),
(130, 19305, 12000, 231660000, '202306', 11),
(131, 1248, 13000, 16224000, '202307', 11),
(132, 5564, 13000, 72332000, '202308', 11),
(133, 7020, 14000, 98280000, '202309', 11),
(134, 14287, 14000, 200018000, '202310', 11),
(135, 1508, 12000, 18096000, '202311', 11),
(136, 5044, 13000, 65572000, '202312', 11),
(137, 598, 23000, 13754000, '202301', 12),
(138, 0, 0, 0, '202302', 12),
(139, 0, 0, 0, '202303', 12),
(140, 390, 23000, 8970000, '202304', 12),
(141, 0, 0, 0, '202305', 12),
(142, 0, 0, 0, '202306', 12),
(143, 0, 0, 0, '202307', 12),
(144, 0, 0, 0, '202308', 12),
(145, 42, 22000, 924000, '202309', 12),
(146, 715, 23000, 16445000, '202310', 12),
(147, 1248, 22000, 27456000, '202311', 12),
(148, 0, 0, 0, '202312', 12),
(162, 95, 20000, 1900000, '202301', 15),
(163, 100, 20000, 2000000, '202302', 15),
(164, 51, 21000, 1071000, '202303', 15),
(165, 40, 20000, 800000, '202304', 15),
(166, 45, 20000, 900000, '202305', 15),
(167, 32, 20000, 640000, '202306', 15),
(168, 0, 0, 0, '202307', 15),
(169, 55, 19000, 1045000, '202308', 15),
(170, 50, 20000, 1000000, '202309', 15),
(171, 80, 20000, 1600000, '202310', 15),
(172, 40, 19000, 760000, '202311', 15),
(173, 10, 20000, 200000, '202312', 15),
(174, 0, 0, 0, '202301', 16),
(176, 395, 0, 0, '202303', 16),
(177, 0, 0, 0, '202302', 16),
(178, 740, 15000, 11100000, '202304', 16),
(179, 200, 15000, 3000000, '202305', 16),
(180, 295, 15000, 4425000, '202306', 16),
(181, 0, 0, 0, '202307', 16),
(182, 70, 15000, 1050000, '202308', 16),
(183, 229, 15000, 3435000, '202309', 16),
(184, 358, 15000, 5370000, '202310', 16),
(185, 351, 15000, 5265000, '202311', 16),
(186, 150, 15000, 2250000, '202312', 16),
(187, 0, 0, 0, '202301', 17),
(188, 0, 0, 0, '202302', 17),
(189, 0, 0, 0, '202303', 17),
(190, 3359, 11000, 36949000, '202304', 17),
(191, 3913, 11000, 43043000, '202305', 17),
(192, 598, 12000, 7176000, '202306', 17),
(193, 0, 0, 0, '202307', 17),
(194, 0, 0, 0, '202308', 17),
(195, 43, 11000, 473000, '202309', 17),
(196, 242, 11000, 2662000, '202310', 17),
(197, 559, 11000, 6149000, '202311', 17),
(198, 39, 12000, 468000, '202312', 17),
(199, 0, 0, 0, '202301', 18),
(200, 0, 0, 0, '202302', 18),
(201, 0, 0, 0, '202303', 18),
(202, 0, 0, 0, '202304', 18),
(203, 0, 0, 0, '202305', 18),
(204, 0, 0, 0, '202306', 18),
(205, 0, 0, 0, '202307', 18),
(206, 0, 0, 0, '202308', 18),
(207, 130, 12000, 1560000, '202309', 18),
(208, 91, 12000, 1092000, '202310', 18),
(209, 26, 11000, 286000, '202311', 18),
(210, 26, 12000, 312000, '202312', 18),
(211, 0, 0, 0, '202301', 19),
(212, 55, 17000, 935000, '202302', 19),
(213, 50, 17000, 850000, '202303', 19),
(214, 100, 16000, 1600000, '202304', 19),
(215, 50, 16000, 800000, '202305', 19),
(216, 168, 17000, 2856000, '202306', 19),
(217, 0, 0, 0, '202307', 19),
(218, 0, 0, 0, '202309', 19),
(219, 20, 17000, 340000, '202308', 19),
(220, 20, 16000, 320000, '202310', 19),
(221, 20, 16000, 320000, '202311', 19),
(222, 0, 0, 0, '202312', 19),
(223, 351, 11000, 3861000, '202301', 13),
(224, 26, 10000, 260000, '202302', 13),
(225, 923, 10000, 9230000, '202303', 13),
(226, 793, 10000, 7930000, '202304', 13),
(227, 1261, 10000, 12610000, '202305', 13),
(228, 1443, 11000, 15873000, '202306', 13),
(229, 0, 0, 0, '202307', 13),
(230, 0, 0, 0, '202308', 13),
(231, 910, 10000, 9100000, '202309', 13),
(232, 936, 11000, 10296000, '202310', 13),
(233, 455, 10000, 4550000, '202311', 13),
(234, 2743, 11000, 30173000, '202312', 13),
(235, 494, 13000, 6422000, '202301', 14),
(236, 165, 13000, 2145000, '202302', 14),
(237, 432, 12000, 5184000, '202303', 14),
(238, 561, 12000, 6732000, '202304', 14),
(239, 326, 13000, 4238000, '202305', 14),
(240, 432, 13000, 5616000, '202306', 14),
(241, 20, 13000, 260000, '202307', 14),
(242, 173, 13000, 2249000, '202308', 14),
(243, 401, 13000, 5213000, '202309', 14),
(244, 507, 12000, 6084000, '202310', 14),
(245, 315, 12000, 3780000, '202311', 14),
(246, 311, 13000, 4043000, '202312', 14);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'auth_token', '1a59fbfe026697ce3e3f04c6cb884a948ed227c016982f271ab931aa3a72ed6c', '{\"expires_at\":\"2023-07-10T16:31:19.858223Z\"}', '2023-07-10 01:42:14', NULL, '2023-07-10 01:31:19', '2023-07-10 01:42:14'),
(2, 'App\\Models\\User', 4, 'auth_token', 'd56ebd75cf6f422a5f72a05c28b8ab6168b017e28d57a1579b4de336d61a3a57', '{\"expires_at\":\"2023-07-10T16:40:11.156439Z\"}', NULL, NULL, '2023-07-10 01:40:11', '2023-07-10 01:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `regionpic`
--

CREATE TABLE `regionpic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regionpic`
--

INSERT INTO `regionpic` (`id`, `name`, `file`, `month`, `created_at`, `updated_at`) VALUES
(1, 'vania', '1687360401.jpg', 'surabaya', '2023-06-21 08:13:21', '2023-06-21 08:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `shiptype`
--

CREATE TABLE `shiptype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `machine` varchar(255) DEFAULT NULL,
  `bbm` double(10,6) DEFAULT NULL,
  `speed` double(10,6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shiptype`
--

INSERT INTO `shiptype` (`id`, `name`, `machine`, `bbm`, `speed`, `created_at`, `updated_at`) VALUES
(1, 'Kapal Ikan', 'Mitsubishi Ps 135 4 Silinder', 3.836535, 22.224000, '2023-06-20 09:31:02', '2023-06-20 09:32:37'),
(2, 'arundayo', 'biasa aja', 1.210000, 60.000000, '2023-07-10 01:34:08', '2023-07-10 01:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipType_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`, `shipType_id`) VALUES
(1, 'arima kana', 'arima_kana', 'arimakana@naver.com', NULL, 'admin', '$2y$10$mGh2bxdfH80aFRL0r43ieu0LTYojGIqiU9hzwGMDsqz1ul47P5O6W', NULL, '2023-06-18 18:23:43', '2023-06-18 19:35:46', 1),
(2, 'ruby hoshino', 'ruby_ruby', 'hoshinoruby@naver.com', NULL, 'user', '$2y$10$dBFJjelc3mU5ZCLPODVcD.O79RKFwV2W6Ykqz1Ou40KzViYMRfmAC', NULL, '2023-06-18 19:42:43', '2023-06-18 19:42:43', 1),
(3, 'ji', 'jiji', 'jiji@naver.com', NULL, 'user', '$2y$10$0Q6addfCLKOjH8WpiwkmN.lucbxsS3RF9bOuWtw2kjRpVSwI893Xa', NULL, '2023-06-20 09:13:40', '2023-07-10 01:42:14', 2),
(4, 'ji', 'ji', 'ji@gmail.com', NULL, 'admin', '$2y$10$GL3LMh91W0d8XHy.LTZdVep2XX6l4j3.xsOIKgfit8snuCssRAFc2', NULL, '2023-06-26 07:26:36', '2023-06-26 07:26:36', 1),
(5, 'ju', 'ju', 'ju@gmail.com', NULL, 'user', '$2y$10$UQuVHrbQV9vxtxfLh.U1j.hahS3G8.vAO.1271X53J4hq3i9iZWSO', NULL, '2023-06-26 07:26:58', '2023-06-26 07:26:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_has_fish`
--

CREATE TABLE `users_has_fish` (
  `id` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `fish_id` bigint(20) UNSIGNED NOT NULL,
  `berat` bigint(20) DEFAULT NULL,
  `satuanBerat` varchar(255) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `bbmTerpakai` double(10,6) DEFAULT NULL,
  `jarakTempuh` double(10,6) DEFAULT NULL,
  `pengeluaran` int(11) DEFAULT NULL,
  `pendapatan` int(11) DEFAULT NULL,
  `keuntungan` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_has_fish`
--

INSERT INTO `users_has_fish` (`id`, `users_id`, `fish_id`, `berat`, `satuanBerat`, `harga`, `bbmTerpakai`, `jarakTempuh`, `pengeluaran`, `pendapatan`, `keuntungan`, `tanggal`) VALUES
(1, 1, 1, 2, 'Kg', 10000, 1.200000, 5.000000, 300, 300, 12, '2023-06-29'),
(2, 1, 2, 2, 'Kg', 10000, 1.200000, 5.000000, 30000, 30000, 13, '2023-06-29'),
(3, 3, 2, 2, 'Kg', 10000, 1.200000, 5.000000, 30000, 30000, 13, '2023-06-29'),
(4, 3, 2, 2, 'Kg', 10000, 1.200000, 5.000000, 30000, 30000, 13, '2023-06-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bubbles`
--
ALTER TABLE `bubbles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pendaratans`
--
ALTER TABLE `pendaratans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pendaratan_fish1_idx` (`fish_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `regionpic`
--
ALTER TABLE `regionpic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shiptype`
--
ALTER TABLE `shiptype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_users_shipType1_idx` (`shipType_id`);

--
-- Indexes for table `users_has_fish`
--
ALTER TABLE `users_has_fish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_has_fish_users1_idx` (`users_id`),
  ADD KEY `fk_users_has_fish_fish1_idx` (`fish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bubbles`
--
ALTER TABLE `bubbles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendaratans`
--
ALTER TABLE `pendaratans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regionpic`
--
ALTER TABLE `regionpic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shiptype`
--
ALTER TABLE `shiptype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_has_fish`
--
ALTER TABLE `users_has_fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaratans`
--
ALTER TABLE `pendaratans`
  ADD CONSTRAINT `fk_pendaratan_fish1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_shipType1` FOREIGN KEY (`shipType_id`) REFERENCES `shiptype` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_fish`
--
ALTER TABLE `users_has_fish`
  ADD CONSTRAINT `fk_users_has_fish_fish1` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_fish_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
