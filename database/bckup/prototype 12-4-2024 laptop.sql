-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 06:06 AM
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
(1, 'Lainnya', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(2, 'Toyota Agya', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(3, 'Toyota Avanza', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(4, 'Toyota Kijang Innova', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(5, 'Toyota Rush', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(6, 'Toyota Fortuner', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(7, 'Toyota Alphard', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(8, 'Toyota Yaris', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(9, 'Toyota', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(10, 'Honda Brio', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(11, 'Honda HR-V', '2024-03-09 23:21:16', '2024-03-09 23:21:16'),
(12, 'Honda BR-V', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(13, 'Honda CR-V', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(14, 'Honda City', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(15, 'Honda Jazz', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(16, 'Honda Mobilio', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(17, 'Honda', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(18, 'Suzuki Ertiga', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(19, 'Suzuki XL7', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(20, 'Suzuki Ignis', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(21, 'Suzuki Carry', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(22, 'Suzuki APV', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(23, 'Suzuki', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(24, 'Chevrolet', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(25, 'Chevrolet Aveo', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(26, 'Chevrolet  Orlando', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(27, 'Chevrolet Cruze', '2024-03-09 23:21:17', '2024-03-09 23:21:17'),
(28, 'Chevrolet Trax', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(29, 'Chevrolet Captiva', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(30, 'Chevrolet Spin', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(31, 'Chevrolet Colorado', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(32, 'Chevrolet Trailblazer', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(33, 'Daihatsu Terios', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(34, 'Daihatsu Xenia', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(35, 'Daihatsu Sigra', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(36, 'Daihatsu Ayla', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(37, 'Daihatsu Gran Max', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(38, 'Daihatsu', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(39, 'Mitsubishi Xpander', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(40, 'Mitsubishi Pajero Sport', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(41, 'Mitsubishi Outlander', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(42, 'Mitsubishi Triton', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(43, 'Mitsubishi Mirage', '2024-03-09 23:21:18', '2024-03-09 23:21:18'),
(44, 'Mitsubishi', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(45, 'Nissan Livina', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(46, 'Nissan Terra', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(47, 'Nissan X-Trail', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(48, 'Nissan Navara', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(49, 'Nissan March', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(50, 'Nissan', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(51, 'Mazda CX-5', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(52, 'Mazda 2', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(53, 'Mazda CX-30', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(54, 'Mazda CX-3', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(55, 'Mazda', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(56, 'Hyundai Creta', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(57, 'Hyundai Venue', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(58, 'Hyundai Santa Fe', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(59, 'Hyundai Kona', '2024-03-09 23:21:19', '2024-03-09 23:21:19'),
(60, 'Hyundai i20', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(61, 'Hyundai', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(62, 'BMW X1', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(63, 'BMW X3', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(64, 'BMW X5', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(65, 'BMW 3 Series', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(66, 'BMW 5 Series', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(67, 'BMW', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(68, 'Mercedes-Benz GLA', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(69, 'Mercedes-Benz A-Class', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(70, 'Mercedes-Benz C-Class', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(71, 'Mercedes-Benz E-Class', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(72, 'Mercedes-Benz GLC', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(73, 'Mercedez', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(74, 'Audi Q3', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(75, 'Audi Q5', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(76, 'Audi A3', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(77, 'Audi A4', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(78, 'Audi A6', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(79, 'Audi', '2024-03-09 23:21:20', '2024-03-09 23:21:20'),
(80, 'Volkswagen Golf', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(81, 'Volkswagen Tiguan', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(82, 'Volkswagen Touran', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(83, 'Volkswagen Passat', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(84, 'Volkswagen Tiguan Allspace', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(85, 'Volkswagen Teramont', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(86, 'Volkswagen Polo', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(87, 'Volkswagen Jetta', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(88, 'Volkswagen Arteon', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(89, 'Volkswagen Sharan', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(90, 'Volkswagen Touareg', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(91, 'Volkswagen Beetle', '2024-03-09 23:21:21', '2024-03-09 23:21:21');

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
(1, 'Lainnya', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(2, 'Etiqa / Asoka', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(3, 'Harta Aman Pratama', '2024-03-09 23:21:21', '2024-03-09 23:21:21'),
(4, 'Multi Artha Guna', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(5, 'Great Eastern General Insurance', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(6, 'Asuransi Wahana Tata', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(7, 'Rama Satria Wibawa', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(8, 'Sonwelis Takaful', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(9, 'Sunday Insurance Indonesia', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(10, 'Untuk Semua', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(11, 'Avrist General Insurance', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(12, 'Bintang', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(13, 'Chubb General Insurance Indonesia', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(14, 'FPG', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(15, 'Intra Asia', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(16, 'LIPPO', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(17, 'Malacca', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(18, 'MPM / Mitra Pelindung Mustika', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(19, 'MNC Insurance', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(20, 'China Taiping Insurance Indonesia', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(21, 'Purna Artanugraha (ASPANI)', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(22, 'Sinar Mas', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(23, 'Sompo Japan Nipponika', '2024-03-09 23:21:22', '2024-03-09 23:21:22'),
(24, 'Takaful Umum', '2024-03-09 23:21:23', '2024-03-09 23:21:23'),
(25, 'Tripakarta', '2024-03-09 23:21:23', '2024-03-09 23:21:23'),
(26, 'Tugu Pratama', '2024-03-09 23:21:23', '2024-03-09 23:21:23'),
(27, 'Victoria', '2024-03-09 23:21:23', '2024-03-09 23:21:23'),
(28, 'Zurich', '2024-03-09 23:21:23', '2024-03-09 23:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `itemName` text NOT NULL,
  `name` text DEFAULT NULL,
  `qty` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `date`, `itemName`, `name`, `qty`, `created_at`, `updated_at`) VALUES
(1, '2024-01-13', 'thinner reducer', NULL, 3.00, '2024-03-13 21:43:43', '2024-03-13 21:43:43'),
(2, '2024-01-16', 'thinner reducer', 'yadi', -1.00, '2024-03-13 21:44:02', '2024-03-13 21:44:02'),
(3, '2024-01-19', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:05:07', '2024-03-13 23:05:07'),
(5, '2024-01-24', 'thinner reducer', 'andreas', 4.00, '2024-03-13 23:06:00', '2024-03-13 23:06:00'),
(6, '2024-01-23', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:06:49', '2024-03-13 23:06:49'),
(7, '2024-01-26', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:08:11', '2024-03-13 23:08:11'),
(8, '2024-01-31', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:08:35', '2024-03-13 23:08:35'),
(9, '2024-02-02', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:08:59', '2024-03-13 23:08:59'),
(11, '2024-02-20', 'thinner reducer', 'andreas', 4.00, '2024-03-13 23:09:50', '2024-03-13 23:09:50'),
(12, '2024-02-22', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:10:18', '2024-03-13 23:10:18'),
(13, '2024-02-26', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:10:35', '2024-03-13 23:10:35'),
(14, '2024-02-28', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:10:46', '2024-03-13 23:10:46'),
(15, '2024-03-02', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:10:57', '2024-03-13 23:10:57'),
(16, '2024-03-04', 'thinner reducer', 'andreas', 4.00, '2024-03-13 23:11:16', '2024-03-13 23:11:16'),
(17, '2024-03-05', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:11:29', '2024-03-13 23:11:29'),
(18, '2024-03-08', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:11:44', '2024-03-13 23:11:44'),
(19, '2024-03-13', 'thinner reducer', 'yadi', -1.00, '2024-03-13 23:11:55', '2024-03-13 23:11:55'),
(20, '2024-01-13', 'thinner a', NULL, 1.00, '2024-03-13 23:40:56', '2024-03-13 23:40:56'),
(22, '2024-01-02', 'slow', NULL, 1.00, '2024-03-13 23:53:24', '2024-03-13 23:53:24'),
(27, '2024-02-19', 'slow', 'yadi', -1.00, '2024-03-14 01:13:38', '2024-03-14 01:13:38'),
(28, '2024-01-02', 'extra slow', NULL, 1.00, NULL, NULL),
(29, '2024-02-15', 'extra slow', 'yadi', -1.00, '2024-03-14 02:06:02', '2024-03-14 02:06:02'),
(30, '2024-03-14', 'thinner', 'gian', 2.00, NULL, NULL),
(31, '2024-03-04', 'degriser', 'andreas', 1.00, NULL, NULL),
(33, '2024-02-03', 'Compound 2500', 'stok', 15.00, '2024-03-14 18:56:24', '2024-03-14 18:56:24'),
(34, '2024-02-12', 'Compound 2500', NULL, -2.00, '2024-03-14 18:56:49', '2024-03-14 18:56:49'),
(35, '2024-02-17', 'Compound 2500', NULL, -5.00, '2024-03-14 18:57:16', '2024-03-14 18:57:16'),
(36, '2024-03-02', 'Compound 2500', NULL, -5.00, '2024-03-14 18:57:38', '2024-03-14 18:57:38'),
(37, '2024-03-09', 'Compound 2500', NULL, -1.00, '2024-03-14 18:58:05', '2024-03-14 18:58:05'),
(38, '2024-02-07', 'thinner reducer', 'yadi', -1.00, '2024-03-14 19:07:45', '2024-03-14 19:07:45'),
(39, '2024-03-02', 'Rubbing', 'stok', 11.00, '2024-03-14 19:12:37', '2024-03-14 19:12:37'),
(40, '2024-03-09', 'Rubbing', NULL, -1.00, '2024-03-14 19:12:59', '2024-03-14 19:12:59'),
(41, '2024-03-15', 'Compound 2500', 'Rendy moji', 12.00, '2024-03-15 00:31:12', '2024-03-15 00:31:12'),
(42, '2024-03-15', 'Compound 2500', NULL, -2.00, '2024-03-17 18:57:02', '2024-03-17 18:57:02');

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
(1, '#', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(2, 'L1', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(3, 'L2', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(4, 'L3', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(5, 'RAK A-1', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(6, 'RAK A-2', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(7, 'RAK A-3', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(8, 'RAK A-4', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(9, 'RAK B-1', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(10, 'RAK B-2', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(11, 'RAK B-3', '2024-03-09 23:21:24', '2024-03-09 23:21:24'),
(12, 'RAK B-4', '2024-03-09 23:21:24', '2024-03-09 23:21:24');

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
(30, '2024_03_13_083226_create_items_table', 4),
(88, '2014_10_12_000000_create_users_table', 1),
(89, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(90, '2019_08_19_000000_create_failed_jobs_table', 1),
(91, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(92, '2023_02_22_042912_create_status_table', 1),
(93, '2024_01_05_023153_locations', 1),
(94, '2024_01_13_024943_create_insurances_table', 1),
(95, '2024_01_13_030129_create_supplier_tablele', 1),
(96, '2024_02_12_074312_create_cars_table', 1),
(97, '2024_02_12_084507_create_parts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `plate` text NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `insurance_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `car_id`, `plate`, `location_id`, `supplier_id`, `insurance_id`, `status_id`, `date`, `description`, `created_at`, `updated_at`) VALUES
(1, 'bumper', 1, 'B 2050 OJK', 1, 1, 1, 1, '2024-12-12', '', NULL, NULL),
(2, 'tire', 2, 'C 3090 XYZ', 1, 2, 2, 1, '2024-12-15', '', NULL, NULL),
(3, 'SPION KIRI', 5, 'B 3022 QPW', 1, 2, 2, 1, '2024-02-15', '', NULL, NULL),
(4, 'SPION KANAN', 5, 'B 3022 QPW', 1, 2, 2, 1, '2024-02-15', '', NULL, NULL),
(5, 'FENDER KIRI DEPAN', 22, 'B 9092 POW', 1, 1, 1, 1, '2024-02-15', '', NULL, NULL);

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
(1, 'ada', '2024-03-09 23:21:25', '2024-03-09 23:21:25'),
(2, 'diambil', '2024-03-09 23:21:25', '2024-03-09 23:21:25'),
(3, '', '2024-03-09 23:21:25', '2024-03-09 23:21:25');

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
(1, 'Lainnya', NULL, NULL),
(2, 'Sarinah Jaya', NULL, NULL),
(3, 'Nusantara / Oto sentosa', NULL, NULL),
(4, 'Wira Utama', NULL, NULL),
(5, 'Tunas Motor', NULL, NULL),
(6, 'Delta Terus Jaya', NULL, NULL),
(7, 'Trijaya Motor', NULL, NULL),
(8, 'SJM', NULL, NULL),
(9, 'Rajawali', NULL, NULL),
(10, 'Garuda Totalindo', NULL, NULL),
(11, 'Putra Jaya', NULL, NULL),
(12, 'Champion', NULL, NULL),
(13, 'Surya Mas', NULL, NULL),
(14, 'Cahaya Putra', NULL, NULL),
(15, 'Auto Prima', NULL, NULL),
(16, 'Tri Sakti', NULL, NULL),
(17, 'Step Auto', NULL, NULL),
(18, 'Karya Abadi', NULL, NULL),
(19, 'Prioritas', NULL, NULL),
(20, 'Buana Sakti', NULL, NULL);

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
(1, 'Liefs User', 'liefs@liefs.com', NULL, '$2y$12$nHI4s6QNWm6KMjeYfOw78eArKULz4JbW6rag4J8Vc0Al9XVqXBGNW', NULL, NULL, NULL);

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
  ADD KEY `parts_location_id_foreign` (`location_id`),
  ADD KEY `parts_supplier_id_foreign` (`supplier_id`),
  ADD KEY `parts_insurance_id_foreign` (`insurance_id`),
  ADD KEY `parts_status_id_foreign` (`status_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

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
