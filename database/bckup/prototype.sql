-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 03:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prototype`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Toyota Avanza', NULL, NULL),
(2, 'Toyota Kijang Innova', NULL, NULL),
(3, 'Toyota Rush', NULL, NULL),
(4, 'Toyota Fortuner', NULL, NULL),
(5, 'Toyota Yaris', NULL, NULL),
(6, 'Toyota', NULL, NULL),
(7, 'Honda Brio', NULL, NULL),
(8, 'Honda HR-V', NULL, NULL),
(9, 'Honda CR-V', NULL, NULL),
(10, 'Honda City', NULL, NULL),
(11, 'Honda Jazz', NULL, NULL),
(12, 'Honda Mobilio', NULL, NULL),
(13, 'Honda', NULL, NULL),
(14, 'Suzuki Ertiga', NULL, NULL),
(15, 'Suzuki XL7', NULL, NULL),
(16, 'Suzuki Ignis', NULL, NULL),
(17, 'Suzuki Carry', NULL, NULL),
(18, 'Suzuki APV', NULL, NULL),
(19, 'Suzuki', NULL, NULL),
(20, 'Daihatsu Terios', NULL, NULL),
(21, 'Daihatsu Xenia', NULL, NULL),
(22, 'Daihatsu Sigra', NULL, NULL),
(23, 'Daihatsu Ayla', NULL, NULL),
(24, 'Daihatsu Gran Max', NULL, NULL),
(25, 'Daihatsu', NULL, NULL),
(26, 'Mitsubishi Xpander', NULL, NULL),
(27, 'Mitsubishi Pajero', NULL, NULL),
(28, 'Mitsubishi Outlander', NULL, NULL),
(29, 'Mitsubishi Triton', NULL, NULL),
(30, 'Mitsubishi Mirage', NULL, NULL),
(31, 'Mitsubishi', NULL, NULL),
(32, 'Nissan Livina', NULL, NULL),
(33, 'Nissan Terra', NULL, NULL),
(34, 'Nissan X-Trail', NULL, NULL),
(35, 'Nissan Navara', NULL, NULL),
(36, 'Nissan March', NULL, NULL),
(37, 'Nissan', NULL, NULL),
(38, 'Mazda CX-5', NULL, NULL),
(39, 'Mazda 2', NULL, NULL),
(40, 'Mazda CX-30', NULL, NULL),
(41, 'Mazda CX-3', NULL, NULL),
(42, 'Mazda', NULL, NULL),
(43, 'Hyundai Creta', NULL, NULL),
(44, 'Hyundai Venue', NULL, NULL),
(45, 'Hyundai Santa Fe', NULL, NULL),
(46, 'Hyundai Kona', NULL, NULL),
(47, 'Hyundai i20', NULL, NULL),
(48, 'Hyundai', NULL, NULL),
(49, 'BMW X1', NULL, NULL),
(50, 'BMW X3', NULL, NULL),
(51, 'BMW X5', NULL, NULL),
(52, 'BMW 3 Series', NULL, NULL),
(53, 'BMW 5 Series', NULL, NULL),
(54, 'BMW', NULL, NULL),
(55, 'Mercedes-Benz GLA', NULL, NULL),
(56, 'Mercedes-Benz A-Class', NULL, NULL),
(57, 'Mercedes-Benz C-Class', NULL, NULL),
(58, 'Mercedes-Benz E-Class', NULL, NULL),
(59, 'Mercedes-Benz GLC', NULL, NULL),
(60, 'Mercedez', NULL, NULL),
(61, 'Audi Q3', NULL, NULL),
(62, 'Audi Q5', NULL, NULL),
(63, 'Audi A3', NULL, NULL),
(64, 'Audi A4', NULL, NULL),
(65, 'Audi A6', NULL, NULL),
(66, 'Audi', NULL, NULL),
(67, 'Toyota Agya', NULL, NULL),
(68, 'Lainnya', NULL, NULL),
(69, 'Mitsubishi Pajero Sport', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(70, 'Volkswagen Golf', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(71, 'Volkswagen Tiguan', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(72, 'Volkswagen Touran', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(73, 'Volkswagen Passat', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(74, 'Volkswagen Tiguan Allspace', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(75, 'Volkswagen Teramont', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(76, 'Volkswagen Polo', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(77, 'Volkswagen Jetta', '2024-03-01 23:48:28', '2024-03-01 23:48:28'),
(78, 'Volkswagen Arteon', '2024-03-01 23:48:29', '2024-03-01 23:48:29'),
(79, 'Volkswagen Sharan', '2024-03-01 23:48:29', '2024-03-01 23:48:29'),
(80, 'Volkswagen Touareg', '2024-03-01 23:48:29', '2024-03-01 23:48:29'),
(81, 'Volkswagen Beetle', '2024-03-01 23:48:29', '2024-03-01 23:48:29'),
(82, 'Toyota Alphard', NULL, NULL),
(83, 'Chevrolet', '2024-03-08 23:33:10', '2024-03-08 23:33:10'),
(84, 'Chevrolet Aveo', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(85, 'Chevrolet  Orlando', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(86, 'Chevrolet Cruze', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(87, 'Chevrolet Trax', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(88, 'Chevrolet Captiva', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(89, 'Chevrolet Spin', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(90, 'Chevrolet Colorado', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(91, 'Chevrolet Trailblazer', '2024-03-08 23:33:11', '2024-03-08 23:33:11'),
(92, 'Honda BR-V', '2024-03-08 23:34:19', '2024-03-08 23:34:19'),
(93, 'Toyota Innova', '2024-03-11 23:19:52', '2024-03-11 23:19:52'),
(94, 'Daihatsu Luxio', '2024-03-13 18:51:51', '2024-03-13 18:51:51');

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
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Etiqa / Asoka', NULL, NULL),
(2, 'Harta Aman Pratama', NULL, NULL),
(3, 'Multi Artha Guna', NULL, NULL),
(4, 'Great Eastern General Insurance', NULL, NULL),
(5, 'Asuransi Wahana Tata', NULL, NULL),
(6, 'Rama Satria Wibawa', NULL, NULL),
(7, 'Sonwelis Takaful', NULL, NULL),
(8, 'Sunday Insurance Indonesia', NULL, NULL),
(9, 'Untuk Semua', NULL, NULL),
(10, 'Avrist General Insurance', NULL, NULL),
(11, 'Bintang', NULL, NULL),
(12, 'Chubb General Insurance Indonesia', NULL, NULL),
(13, 'FPG', NULL, NULL),
(14, 'Intra Asia', NULL, NULL),
(15, 'LIPPO', NULL, NULL),
(16, 'Malacca', NULL, NULL),
(17, 'MPM / Mitra Pelindung Mustika', NULL, NULL),
(18, 'MNC Insurance', NULL, NULL),
(19, 'China Taiping Insurance Indonesia', NULL, NULL),
(20, 'Purna Artanugraha (ASPANI)', NULL, NULL),
(21, 'Sinar Mas', NULL, NULL),
(22, 'Sompo Japan Nipponika', NULL, NULL),
(23, 'Takaful Umum', NULL, NULL),
(24, 'Tripakarta', NULL, NULL),
(25, 'Tugu Pratama', NULL, NULL),
(26, 'Victoria', NULL, NULL),
(27, 'Zurich', NULL, NULL),
(28, 'lainnya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `itemName` text NOT NULL,
  `name` text NOT NULL,
  `qty` text NOT NULL,
  `balance` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `date`, `itemName`, `name`, `qty`, `balance`, `created_at`, `updated_at`) VALUES
(1, '2024-12-12', 'Compound 2500', 'yadi', '-5', '28', NULL, NULL),
(2, '2024-12-12', 'vernish', 'yadi', '-8', '28', NULL, NULL),
(3, '2024-03-14', 'Compound 2500', 'yadi', '-5', '20', '2024-03-13 18:58:03', '2024-03-13 18:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(0, '#', NULL, NULL),
(3, 'L1', NULL, NULL),
(4, 'L2', NULL, NULL),
(5, 'L3', NULL, NULL),
(6, 'RAK A-1', NULL, NULL),
(7, 'RAK A-2', NULL, NULL),
(8, 'RAK A-3', NULL, NULL),
(9, 'RAK A-4', NULL, NULL),
(10, 'RAK B-1', NULL, NULL),
(11, 'RAK B-2', NULL, NULL),
(12, 'RAK B-3', NULL, NULL),
(13, 'RAK B-4', NULL, NULL);

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
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2023_02_22_042912_create_status_table', 1),
(19, '2024_01_13_024943_create_insurances_table', 1),
(20, '2024_01_13_030129_create_supplier_tablele', 1),
(21, '2024_02_12_074312_create_cars_table', 1),
(22, '2024_02_12_084507_create_parts_table', 1),
(23, '2024_01_05_023153_locations', 2),
(24, '2024_03_05_033341_add_foreign_key', 3),
(25, '2024_03_13_083226_create_items_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `plate` text NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `insurance_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `car_id`, `plate`, `supplier_id`, `insurance_id`, `status_id`, `date`, `description`, `created_at`, `updated_at`, `location_id`) VALUES
(12, 'kap mesin', 27, 'B 1763 AJG', 2, 24, 2, '2024-02-27', NULL, '2024-02-28 01:35:38', '2024-03-08 00:19:16', 0),
(13, 'Kabel', 26, 'B 2885 PZM', 5, 22, 2, '2024-02-27', NULL, '2024-02-28 01:36:53', '2024-02-28 01:37:08', 0),
(14, 'List Foam', 51, 'B 888 ZH', 23, 3, 1, '2024-02-27', NULL, '2024-02-28 01:39:48', '2024-02-28 01:39:48', 0),
(15, 'engsel pintu FR L', 36, 'B 1697 PKX', 20, 14, 1, '2024-02-27', NULL, '2024-02-28 01:41:10', '2024-02-28 02:24:04', 0),
(16, 'engsel pintu RR L', 36, 'B 1697 PKX', 20, 14, 1, '2024-02-27', NULL, '2024-02-28 01:41:21', '2024-02-28 02:24:21', 0),
(17, 'stiker pintu depan FR L', 36, 'B 1697 PKX', 20, 14, 1, '2024-02-27', NULL, '2024-02-28 01:42:54', '2024-02-28 02:24:42', 0),
(18, 'bracket', 67, 'B 1227 PRT', 14, 11, 1, '2024-02-28', NULL, '2024-02-28 01:46:19', '2024-02-28 19:49:47', 0),
(19, 'bumper FR', 67, 'B 1227 PRT', 14, 11, 2, '2024-02-28', NULL, '2024-02-28 01:49:03', '2024-02-28 19:49:58', 0),
(20, 'clippan 3', 67, 'B 1227 PRT', 14, 11, 1, '2024-02-28', NULL, '2024-02-28 01:49:23', '2024-02-28 19:50:11', 0),
(21, 'spoiler bumper dpn', 20, 'B 2811 PFB', 9, 5, 2, '2024-02-28', NULL, '2024-02-28 01:58:15', '2024-03-07 23:39:48', 0),
(22, 'spoiler fender FR L', 20, 'B 2811 PFB', 9, 5, 2, '2024-02-28', NULL, '2024-02-28 02:21:43', '2024-03-07 23:39:59', 0),
(23, 'spoiler fender L', 20, 'B 2811 PFB', 9, 5, 2, '2024-02-28', NULL, '2024-02-28 02:21:53', '2024-03-07 23:40:08', 0),
(24, 'lampu stop', 23, 'B 2294 PFE', 18, 5, 1, '2024-02-28', NULL, '2024-02-28 02:22:57', '2024-02-28 02:22:57', 0),
(25, 'cover deck', 26, 'B 2885 pzm', 4, 28, 2, '2024-02-28', 'komar / beli', '2024-02-28 02:27:13', '2024-02-28 23:33:52', 0),
(26, 'BUMPER BLKNG', 2, 'B 2595 POJ', 10, 3, 1, '2024-02-28', NULL, '2024-02-28 02:28:26', '2024-02-28 02:28:26', 0),
(27, 'COVER FOG LAMP', 2, 'B 2595 POJ', 10, 3, 1, '2024-02-28', NULL, '2024-02-28 02:28:35', '2024-02-28 02:28:35', 0),
(28, 'PENTIL VELG DEPAN KIRI', 57, 'D 1463 VDC', 2, 24, 1, '2024-02-28', NULL, '2024-02-28 02:29:29', '2024-02-28 02:29:29', 0),
(29, 'MOULDING WHEEL ARCH FR LH', 57, 'D 1463 VDC', 2, 24, 1, '2024-02-28', NULL, '2024-02-28 02:30:44', '2024-02-28 02:30:44', 0),
(30, 'BUMPER DEPAN', 32, 'B 1792  WZB', 15, 17, 2, '2024-02-28', NULL, '2024-02-28 02:35:19', '2024-03-04 00:43:58', 0),
(31, 'LINER FENDER DPN L', 32, 'B 1792  WZB', 15, 17, 1, '2024-02-28', NULL, '2024-02-28 02:36:24', '2024-02-28 02:36:24', 0),
(32, 'TUTUP TOWING', 32, 'B 1792  WZB', 15, 17, 2, '2024-02-28', NULL, '2024-02-28 02:36:35', '2024-03-04 00:44:06', 0),
(33, 'BUMPER DPN', 26, 'B 1856 BFE', 2, 17, 1, '2024-02-28', NULL, '2024-02-28 02:37:41', '2024-02-28 02:37:41', 0),
(34, 'MOULDING FR L', 26, 'B 1856 BFE', 2, 17, 1, '2024-02-28', NULL, '2024-02-28 02:38:02', '2024-02-28 02:38:02', 0),
(36, 'KACA DPN', 1, 'A 1260 GT', 10, 5, 2, '2024-02-29', NULL, '2024-02-29 02:46:11', '2024-03-08 00:17:47', 0),
(37, 'MOULDING KACA', 1, 'A 1260 GT', 10, 5, 1, '2024-02-29', NULL, '2024-02-29 02:46:22', '2024-02-29 02:46:22', 0),
(38, 'COVER TRISPLANG KIRI', 11, 'B 8732 PK', 7, 5, 1, '2024-02-29', NULL, '2024-02-29 02:47:08', '2024-02-29 02:47:08', 0),
(39, 'KARET COVER TRISPLANG', 11, 'B 8732 PK', 7, 5, 1, '2024-02-29', NULL, '2024-02-29 02:47:33', '2024-02-29 02:47:33', 0),
(40, 'SPOILER PINTU RR L', 3, 'B 2196 BYZ', 17, 8, 2, '2024-02-29', NULL, '2024-02-29 02:48:23', '2024-03-09 00:22:18', 0),
(41, 'GRILL DEPAN', 21, 'B 2704 BKD', 9, 5, 2, '2024-02-26', NULL, '2024-02-29 02:50:42', '2024-02-29 02:50:42', 0),
(42, 'LAMPU STOP BLK RH', 21, 'B 2704 BKD', 9, 5, 1, '2024-02-26', NULL, '2024-02-29 02:50:59', '2024-02-29 02:50:59', 0),
(43, 'KARPET RODA RR', 2, 'B 2018 POA', 7, 5, 1, '2024-02-26', NULL, '2024-02-29 02:51:35', '2024-02-29 02:51:35', 0),
(44, 'VELG', 60, 'D 1463 VDC', 2, 24, 2, '2024-02-26', NULL, '2024-02-29 02:52:45', '2024-03-09 00:23:37', 0),
(45, 'MOULDING FENDER L', 3, 'B 2940 PVD', 14, 13, 1, '2024-03-01', NULL, '2024-03-01 20:28:47', '2024-03-01 20:35:52', 0),
(46, 'BUMPER BLK', 1, 'B 1639 BRY', 7, 5, 1, '2024-03-01', NULL, '2024-03-01 20:34:31', '2024-03-01 20:36:14', 0),
(47, 'COVER SPION', 1, 'B 1639 BRY', 7, 5, 1, '2024-03-01', NULL, '2024-03-01 20:48:52', '2024-03-01 20:48:52', 0),
(48, 'LAMPU BLK', 1, 'B 1639 BRY', 7, 5, 1, '2024-03-01', NULL, '2024-03-01 20:49:16', '2024-03-01 20:49:16', 0),
(49, 'SPION L', 1, 'B 1639 BRY', 7, 5, 1, '2024-03-01', NULL, '2024-03-01 20:49:25', '2024-03-01 20:49:25', 0),
(50, 'LIST CROM PINTU DEPAN LH', 81, 'N 1819 GG', 2, 24, 1, '2024-03-02', NULL, '2024-03-01 23:41:46', '2024-03-01 23:48:54', 0),
(51, 'REGULATOR FR RH', 1, 'B 1946 SIZ', 4, 24, 1, '2024-03-04', 'P WAWAN', '2024-03-04 00:32:08', '2024-03-04 00:36:59', 0),
(52, 'EMBLEM', 1, 'B 1639 BRY', 7, 5, 1, '2024-03-04', NULL, '2024-03-04 00:34:24', '2024-03-04 23:46:57', 8),
(53, 'GRILL FR', 2, 'B 2748 PFP', 7, 5, 1, '2024-03-04', NULL, '2024-03-04 00:35:58', '2024-03-04 23:47:13', 3),
(54, 'BUMPER DEPAN', 23, 'B 2294 PFE', 18, 5, 1, '2024-03-05', NULL, '2024-03-05 00:36:03', '2024-03-05 00:36:03', 0),
(55, 'LINER FENDER DEPAN', 82, 'B 888 YLH', 8, 5, 1, '2024-03-05', NULL, '2024-03-05 00:38:06', '2024-03-05 00:40:25', 13),
(56, 'BUMPER FR', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-05', NULL, '2024-03-07 21:28:53', '2024-03-07 21:28:53', 0),
(57, 'HEADLAMP R', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-05', NULL, '2024-03-07 21:29:19', '2024-03-07 21:29:19', 4),
(58, 'HEADLAMP L', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-05', NULL, '2024-03-07 21:29:27', '2024-03-07 21:29:27', 4),
(59, 'LAMPU STOP R', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-05', NULL, '2024-03-07 21:31:44', '2024-03-07 21:31:44', 4),
(60, 'LINER FENDER LH', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-05', NULL, '2024-03-07 21:32:05', '2024-03-07 21:32:05', 4),
(61, 'TUTUP TOWING', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-05', NULL, '2024-03-07 21:32:19', '2024-03-07 21:32:19', 4),
(62, 'BUMPER DPN', 1, 'D 1388', 10, 5, 2, '2024-03-06', NULL, '2024-03-07 21:40:35', '2024-03-11 19:45:39', 0),
(63, 'GRILLE BUMPER FR', 1, 'D 1388', 10, 5, 2, '2024-03-06', NULL, '2024-03-07 21:41:04', '2024-03-11 19:45:52', 0),
(64, 'TANDUK BLK', 1, 'D 1388', 10, 5, 1, '2024-03-06', NULL, '2024-03-07 21:41:17', '2024-03-07 21:41:17', 0),
(65, 'MOULDING BAWAH RR', 66, 'B 1041 PND', 14, 5, 1, '2024-03-06', NULL, '2024-03-07 21:43:56', '2024-03-07 21:43:56', 3),
(66, 'MOULDING PINTU R', 66, 'B 1041 PND', 14, 5, 1, '2024-03-06', NULL, '2024-03-07 21:44:14', '2024-03-07 21:44:14', 10),
(67, 'LIST GRILLE DPN', 92, 'B 1523 CIC', 7, 5, 1, '2024-03-06', NULL, '2024-03-07 21:46:39', '2024-03-08 23:45:09', 5),
(68, 'GRILLE', 1, 'D 1388 MI', 10, 5, 2, '2024-03-06', NULL, '2024-03-07 21:47:43', '2024-03-11 19:45:29', 3),
(69, 'BUMPER DPN', 6, 'B 1658 PAE', 13, 7, 1, '2024-03-07', NULL, '2024-03-07 21:51:43', '2024-03-07 21:51:43', 0),
(70, 'LAMPU STOP L', 48, 'B 1954 ROE', 13, 3, 1, '2024-03-07', NULL, '2024-03-07 21:53:32', '2024-03-07 21:53:32', 4),
(71, 'LAMPU STOP L', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-07', NULL, '2024-03-07 23:08:19', '2024-03-07 23:08:19', 4),
(72, 'SPION L', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-07', NULL, '2024-03-07 23:09:05', '2024-03-07 23:09:05', 4),
(73, 'SPION R', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-07', NULL, '2024-03-07 23:09:17', '2024-03-07 23:09:17', 4),
(74, 'SENSOR', 21, 'B 1968 TKY', 2, 13, 1, '2024-03-07', NULL, '2024-03-07 23:10:14', '2024-03-07 23:10:14', 8),
(75, 'REFLEKTOR LH', 82, 'BK 181 MT', 3, 8, 1, '2024-03-07', NULL, '2024-03-07 23:12:00', '2024-03-07 23:12:00', 4),
(76, 'CERMIN', 13, 'B 1523 CTC', 1, 28, 1, '2024-03-07', NULL, '2024-03-07 23:13:21', '2024-03-07 23:13:21', 8),
(77, 'STIKER PINTU RR L', 3, 'B 2196 BYZ', 17, 8, 2, '2024-03-07', NULL, '2024-03-07 23:19:32', '2024-03-09 00:22:07', 11),
(78, 'STIKER BELAKANG KANAN LENGKUNG', 3, 'B 2196 BYZ', 17, 8, 2, '2024-03-07', NULL, '2024-03-07 23:24:23', '2024-03-09 00:22:33', 0),
(79, 'STIKER BELAKANG KANAN LURUS', 3, 'B 2196 BYZ', 17, 8, 1, '2024-03-07', NULL, '2024-03-07 23:24:32', '2024-03-07 23:24:32', 0),
(80, 'SCREW WASHER', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:26:58', '2024-03-07 23:26:58', 8),
(81, 'SUPPORT FR BUMPER LH BREKET', 4, 'B 2681 PBO', 3, 8, 2, '2024-03-08', NULL, '2024-03-07 23:27:41', '2024-03-12 21:38:12', 8),
(82, 'COVER BUMPER RR', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:28:08', '2024-03-07 23:28:08', 0),
(83, 'COVER BUMPER FR', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:28:15', '2024-03-07 23:28:15', 0),
(84, 'GRILLE RADIATOR', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:28:44', '2024-03-07 23:28:44', 3),
(85, 'GRILLE RADIATOR LWR', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:28:55', '2024-03-07 23:28:55', 3),
(86, 'HEADLAMP RH', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:29:11', '2024-03-07 23:29:11', 4),
(87, 'HEADLAMP LH', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:29:18', '2024-03-07 23:29:18', 4),
(88, 'CLIP', 4, 'B 2681 PBO', 3, 8, 1, '2024-03-08', NULL, '2024-03-07 23:29:31', '2024-03-07 23:29:31', 8),
(89, 'BUMPER BLK', 83, 'B 1021 ZFN', 5, 10, 1, '2024-03-08', NULL, '2024-03-08 02:50:40', '2024-03-08 23:44:39', 0),
(90, 'STOP LAMP RH', 83, 'B 1021 ZFN', 5, 10, 1, '2024-03-08', NULL, '2024-03-08 02:50:58', '2024-03-08 23:44:53', 4),
(91, 'LAMPU DEPAN KIRI', 27, 'B 1968 NJH', 5, 1, 1, '2024-03-09', NULL, '2024-03-09 01:45:06', '2024-03-09 01:45:06', 4),
(92, 'TENTAKEL BUMPER DEPAN KIRI', 27, 'B 1968 NJH', 5, 1, 1, '2024-03-09', NULL, '2024-03-09 01:45:23', '2024-03-09 01:45:23', 4),
(93, 'HEADLAMP RH', 93, 'B 2595 POJ', 10, 3, 1, '2024-03-12', NULL, '2024-03-11 23:17:58', '2024-03-11 23:24:40', 4),
(99, 'KACA BAGASI', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:21:02', '2024-03-12 01:21:02', 3),
(100, 'SPOILER BAGASI ATAS', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:21:15', '2024-03-12 01:21:15', 3),
(101, 'BUMPER RR', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:21:30', '2024-03-12 01:21:30', 0),
(102, 'BRAKET BUMPER RR LH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:21:57', '2024-03-12 01:21:57', 7),
(103, 'BRAKET BUMPER  RR RH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:22:09', '2024-03-12 01:22:09', 7),
(104, 'TANDUK BUMPER RR', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:22:27', '2024-03-12 01:22:27', 3),
(105, 'STOPLAMP LH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:22:46', '2024-03-12 01:22:46', 4),
(106, 'STOPLAMP RH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:22:55', '2024-03-12 01:22:55', 4),
(107, 'REFLEKTOR BAGASI LH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:23:13', '2024-03-12 01:23:13', 4),
(108, 'REFLEKTOR BAGASI RH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:23:29', '2024-03-12 01:23:29', 4),
(109, 'MUDGUARD RR RH', 93, 'B 2497 TFZ', 10, 28, 1, '2024-03-12', 'darwin', '2024-03-12 01:23:46', '2024-03-12 01:23:46', 7),
(110, 'KACA BAGASI', 94, 'B 2749 VOE', 11, 3, 1, '2024-03-13', NULL, '2024-03-13 18:36:37', '2024-03-13 18:52:21', 3),
(111, 'BAN/RODA', 14, 'L 1488 ABQ', 2, 19, 1, '2024-03-13', NULL, '2024-03-13 18:37:35', '2024-03-13 18:37:35', 0),
(112, 'GRILLE', 14, 'L 1488 ABQ', 2, 19, 1, '2024-03-13', NULL, '2024-03-13 18:38:05', '2024-03-13 18:38:05', 0),
(113, 'CLIPAN 5', 14, 'L 1488 ABQ', 2, 19, 1, '2024-03-13', NULL, '2024-03-13 18:38:13', '2024-03-13 18:38:13', 0),
(114, 'BRAKET BUMPER FR L', 1, 'D 2623 BYU', 10, 5, 1, '2024-03-13', NULL, '2024-03-13 18:40:26', '2024-03-13 18:40:26', 7),
(115, 'BUMPER DPN', 1, 'D 2623 BYU', 10, 5, 1, '2024-03-13', NULL, '2024-03-13 18:40:37', '2024-03-13 18:40:37', 7),
(116, 'GRILL', 1, 'D 2623 BYU', 10, 5, 1, '2024-03-13', NULL, '2024-03-13 18:41:04', '2024-03-13 18:41:04', 3),
(117, 'LAMPU DPN L', 1, 'D 2623 BYU', 10, 5, 1, '2024-03-13', NULL, '2024-03-13 18:41:18', '2024-03-13 18:41:18', 4),
(118, 'LINER FENDER', 1, 'D 2623 BYU', 10, 5, 1, '2024-03-13', NULL, '2024-03-13 18:42:36', '2024-03-13 18:42:36', 4),
(119, 'LIST BUMPER DEPAN L', 1, 'D 2623 BYU', 10, 5, 1, '2024-03-13', NULL, '2024-03-13 18:43:01', '2024-03-13 18:43:33', 7),
(120, 'LAMPU DEPAN R', 12, 'B 2537 PFS', 7, 5, 1, '2024-03-13', NULL, '2024-03-13 18:44:17', '2024-03-13 18:44:17', 0),
(121, 'CLIPPAN LINER FENDER 5', 12, 'B 2774 JUF', 17, 13, 1, '2024-03-13', NULL, '2024-03-13 18:47:49', '2024-03-13 18:47:49', 0),
(122, 'LAMPU FR R', 12, 'B 2774 JUF', 17, 13, 1, '2024-03-13', NULL, '2024-03-13 18:48:03', '2024-03-13 18:48:03', 0),
(123, 'LINER FENDER DEPAN L', 12, 'B 2774 JUF', 17, 13, 1, '2024-03-13', NULL, '2024-03-13 18:48:24', '2024-03-13 18:48:24', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ada', NULL, NULL),
(2, 'diambil', NULL, NULL),
(3, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nicho Jaya', NULL, NULL),
(2, 'Nusantara / Oto sentosa', NULL, NULL),
(3, 'Surya Elang Mas', NULL, NULL),
(4, 'lainnya', NULL, NULL),
(5, 'Sarinah Jaya', NULL, NULL),
(7, 'Wira Utama', NULL, NULL),
(8, 'Tunas Motor', NULL, NULL),
(9, 'Delta Terus Jaya', NULL, NULL),
(10, 'Trijaya Motor', NULL, NULL),
(11, 'SJM', NULL, NULL),
(12, 'Rajawali', NULL, NULL),
(13, 'Garuda Totalindo', NULL, NULL),
(14, 'Putra Jaya', NULL, NULL),
(15, 'Champion', NULL, NULL),
(16, 'Surya Mas', NULL, NULL),
(17, 'Cahaya Putra', NULL, NULL),
(18, 'Auto Prima', NULL, NULL),
(19, 'Tri Sakti', NULL, NULL),
(20, 'Step Auto', NULL, NULL),
(21, 'Karya Abadi', NULL, NULL),
(22, 'Prioritas', NULL, NULL),
(23, 'Buana Sakti', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Liefs User', 'liefs@liefs.com', NULL, '$2y$12$tUUJG5VkImB3gUB2WUMHL.gR6gdacHx/IUZhNb1ki/iEfcsBGLhhq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parts_car_id_foreign` (`car_id`),
  ADD KEY `parts_supplier_id_foreign` (`supplier_id`),
  ADD KEY `parts_insurance_id_foreign` (`insurance_id`),
  ADD KEY `parts_status_id_foreign` (`status_id`),
  ADD KEY `parts_location_id_foreign` (`location_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parts`
--
ALTER TABLE `parts`
  ADD CONSTRAINT `parts_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `parts_insurance_id_foreign` FOREIGN KEY (`insurance_id`) REFERENCES `insurances` (`id`),
  ADD CONSTRAINT `parts_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
  ADD CONSTRAINT `parts_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `parts_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
