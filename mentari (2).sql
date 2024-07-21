-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2024 at 08:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentari`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint UNSIGNED DEFAULT NULL,
  `satuan_id` bigint UNSIGNED DEFAULT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `kategori_id`, `satuan_id`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
('B-102255', 'aspernatur', 2, 1, 3500, 393, '2024-07-07 03:14:53', '2024-07-16 23:27:46'),
('B-126343', 'quas', 2, 2, 3523, 0, '2024-07-07 03:14:53', '2024-07-07 03:39:38'),
('B-153223', 'et', 3, 2, 2000, 925, '2024-07-07 03:14:53', '2024-07-16 23:27:46'),
('B-183163', 'fuga', 2, 2, 9878, 405, '2024-07-07 03:14:53', '2024-07-07 13:39:49'),
('B-281341', 'inventore', 2, 3, 2612, 611, '2024-07-07 03:14:53', '2024-07-07 13:39:49'),
('B-296704', 'qui', 2, 2, 9942, 224, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-339530', 'vel', 3, 2, 2426, 486, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-351861', 'id', 1, 3, 4226, 345, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-375215', 'quam', 2, 2, 2182, 299, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-395877', 'sit', 3, 3, 6551, 841, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-502898', 'dolorem', 3, 2, 1507, 283, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-516164', 'itaque', 1, 2, 3945, 669, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-542904', 'illo', 3, 1, 3020, 467, '2024-07-07 03:14:53', '2024-07-16 00:06:34'),
('B-579336', 'et', 1, 2, 1991, 931, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-626682', 'quidem', 1, 1, 3160, 338, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-785939', 'laborum', 3, 1, 7031, 127, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-900270', 'laboriosam', 3, 2, 7172, 480, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-955323', 'dicta', 2, 2, 5364, 79, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-984303', 'eos', 2, 2, 2701, 748, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('B-984304', 'Pensil', 2, 1, 2000, 24, '2024-07-07 03:39:59', '2024-07-07 03:39:59');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pesanans`
--

CREATE TABLE `detail_pesanans` (
  `id` bigint UNSIGNED NOT NULL,
  `pesanan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_pesanans`
--

INSERT INTO `detail_pesanans` (`id`, `pesanan_id`, `nama`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'PS-24070800001', 'Cetak Banner', '56000', '2024-07-07 23:19:11', '2024-07-07 23:19:11'),
(2, 'PS-24070800002', 'Fotocopy', '45000', '2024-07-07 23:19:34', '2024-07-16 01:24:49'),
(4, 'PS-24071600004', 'Undangan', '540000', '2024-07-16 00:28:42', '2024-07-16 03:41:40'),
(5, 'PS-24071600005', 'Brosur', '54000', '2024-07-16 01:06:42', '2024-07-16 01:14:16'),
(6, 'PS-24071600006', 'Fotocopy', '50000', '2024-07-16 01:26:23', '2024-07-16 01:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Buku Tulis', '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
(2, 'Alat Tulis', '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
(3, 'Buku Gambar', '2024-07-07 03:14:53', '2024-07-07 03:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_16_000003_create_kategoris_table', 1),
(5, '2024_06_16_000004_create_satuans_table', 1),
(6, '2024_06_16_000005_create_barangs_table', 1),
(7, '2024_06_19_000006_create_pelanggans_table', 1),
(8, '2024_06_20_000007_create_transaksis_table', 1),
(9, '2024_06_20_000009_create_penjualans_table', 1),
(10, '2024_06_20_000010_create_pesanans_table', 1),
(11, '2024_06_20_000011_create_detail_pesanans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diskon` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `nama`, `alamat`, `hp`, `diskon`, `created_at`, `updated_at`) VALUES
('P-240701459', 'Iriana Andriani', 'Ki. Supomo No. 957, Bontang 41523, Sultra', '(+62) 762 5367 458', 10, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240706468', 'Syahrini Rahmawati', 'Kpg. Sampangan No. 459, Pariaman 22764, Sulteng', '(+62) 214 8973 461', 10, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240722071', 'Caraka Wasita', 'Kpg. Cemara No. 231, Pasuruan 63919, Gorontalo', '0677 7296 864', 5, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240722825', 'Bakijan Nasrullah Salahudin S.Pd', 'Dk. Wahidin No. 8, Yogyakarta 58143, Pabar', '(+62) 27 4682 199', 5, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240754181', 'Cawisono Hidayat', 'Kpg. Sutarto No. 412, Yogyakarta 98824, Jambi', '0474 0496 215', 5, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240760338', 'Mila Safitri', 'Ki. Achmad Yani No. 174, Mojokerto 69268, Gorontalo', '(+62) 699 9142 9369', 10, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240760941', 'Rudi Maulana', 'Jr. Basket No. 48, Gorontalo 57056, DIY', '0754 3448 3716', 10, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240780581', 'Malik Purwa Hutagalung S.Farm', 'Jr. Bambu No. 175, Pekalongan 63795, Sumbar', '(+62) 926 0273 6311', 5, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240792873', 'Tirta Wibowo M.Kom.', 'Psr. Bhayangkara No. 620, Banjarmasin 81983, Maluku', '(+62) 929 0837 5064', 20, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240793296', 'Eman Hakim', 'Ds. Arifin No. 564, Tidore Kepulauan 32969, Banten', '0237 9285 5523', 10, '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
('P-240793297', 'Samin', NULL, '074567432123', NULL, '2024-07-16 01:24:49', '2024-07-16 01:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` bigint UNSIGNED NOT NULL,
  `transaksi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int NOT NULL,
  `total_harga` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `transaksi_id`, `barang_id`, `jumlah`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 'TPJ-24070700001', NULL, 1, 8716, '2024-07-07 03:16:16', '2024-07-07 03:16:16'),
(2, 'TPJ-24070700001', 'B-102255', 1, 3371, '2024-07-07 03:16:16', '2024-07-07 03:16:16'),
(3, 'TPJ-24070700001', 'B-126343', 1, 3523, '2024-07-07 03:16:16', '2024-07-07 03:16:16'),
(4, 'TPJ-24070700002', 'B-153223', 1, 2825, '2024-07-07 03:16:23', '2024-07-07 03:16:23'),
(5, 'TPJ-24070700002', 'B-183163', 1, 9878, '2024-07-07 03:16:23', '2024-07-07 03:16:23'),
(6, 'TPJ-24070700002', 'B-281341', 1, 2612, '2024-07-07 03:16:23', '2024-07-07 03:16:23'),
(7, 'TPJ-24070700003', 'B-102255', 1, 3500, '2024-07-07 13:31:41', '2024-07-07 13:31:41'),
(8, 'TPJ-24070700003', 'B-153223', 1, 2000, '2024-07-07 13:31:41', '2024-07-07 13:31:41'),
(9, 'TPJ-24070700004', 'B-183163', 1, 9878, '2024-07-07 13:39:49', '2024-07-07 13:39:49'),
(10, 'TPJ-24070700004', 'B-281341', 1, 2612, '2024-07-07 13:39:49', '2024-07-07 13:39:49'),
(11, 'TPJ-24071400005', 'B-102255', 4, 14000, '2024-07-13 23:54:26', '2024-07-13 23:54:26'),
(12, 'TPJ-24071400005', 'B-153223', 2, 4000, '2024-07-13 23:54:26', '2024-07-13 23:54:26'),
(13, 'TPJ-24071600006', 'B-102255', 1, 3500, '2024-07-16 00:06:34', '2024-07-16 00:06:34'),
(14, 'TPJ-24071600006', 'B-542904', 1, 3020, '2024-07-16 00:06:34', '2024-07-16 00:06:34'),
(15, 'TPJ-24071600007', 'B-102255', 1, 3500, '2024-07-16 00:18:46', '2024-07-16 00:18:46'),
(16, 'TPJ-24071600007', 'B-153223', 1, 2000, '2024-07-16 00:18:46', '2024-07-16 00:18:46'),
(17, 'TPJ-24071700008', 'B-153223', 1, 2000, '2024-07-16 23:27:46', '2024-07-16 23:27:46'),
(18, 'TPJ-24071700008', 'B-102255', 1, 3500, '2024-07-16 23:27:46', '2024-07-16 23:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `pesanans`
--

CREATE TABLE `pesanans` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaksi_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanans`
--

INSERT INTO `pesanans` (`id`, `transaksi_id`, `nama_pelanggan`, `hp_pelanggan`, `status`, `waktu`, `created_at`, `updated_at`) VALUES
('PS-24070800001', 'TPS-24070800001', '', '', 'Selesai', '2024-07-07 23:19:11', '2024-07-07 23:19:11', '2024-07-07 23:19:11'),
('PS-24070800002', 'TPS-24071600004', 'Samin', '074567432123', 'Selesai', '2024-07-16 08:19:00', '2024-07-07 23:19:34', '2024-07-16 01:24:49'),
('PS-24071600004', 'TPS-24071600006', 'Syahrini Rahmawati', '(+62) 214 8973 461', 'Selesai', '2024-07-16 15:28:00', '2024-07-16 00:28:42', '2024-07-16 03:41:40'),
('PS-24071600005', 'TPS-24071600003', '', '', 'Selesai', '2024-07-16 04:09:00', '2024-07-16 01:06:42', '2024-07-16 01:14:16'),
('PS-24071600006', 'TPS-24071600005', 'Mila Safitri', '(+62) 699 9142 9369', 'Selesai', '2024-07-16 05:26:00', '2024-07-16 01:26:23', '2024-07-16 01:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `satuans`
--

CREATE TABLE `satuans` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satuans`
--

INSERT INTO `satuans` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'pcs', '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
(2, 'lusin', '2024-07-07 03:14:53', '2024-07-07 03:14:53'),
(3, 'box', '2024-07-07 03:14:53', '2024-07-07 03:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cvNztAXIOgsWMOKLbCQfcfoAlc60UPSY8nyK8WM0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUh1RTVqZUhiaVh3M2F2ZjFETzhycm5KNGt3MThwTWVjS2J3VTVPbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9wb3MtbWVudGFyaS50ZXN0L2FkbWluIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1721547235);

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelanggan_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diskon` int DEFAULT NULL,
  `metode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diterima` int DEFAULT NULL,
  `kembali` int DEFAULT NULL,
  `total_diskon` int NOT NULL,
  `grand_total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `pelanggan_id`, `nama_pelanggan`, `hp_pelanggan`, `diskon`, `metode`, `status`, `diterima`, `kembali`, `total_diskon`, `grand_total`, `created_at`, `updated_at`) VALUES
('TPJ-24070700001', 'P-240701459', 'Iriana Andriani', '(+62) 762 5367 458', 0, 'Tunai', 'Lunas', NULL, NULL, 0, 15610, '2024-07-07 03:16:16', '2024-07-07 03:16:16'),
('TPJ-24070700002', NULL, '', '', NULL, 'Tunai', 'Pending', NULL, NULL, 0, 15315, '2024-07-07 03:16:23', '2024-07-07 03:16:23'),
('TPJ-24070700003', 'P-240701459', 'Iriana Andriani', '(+62) 762 5367 458', 10, 'Tunai', 'Lunas', NULL, NULL, 550, 4950, '2024-07-07 13:31:41', '2024-07-07 13:31:41'),
('TPJ-24070700004', 'P-240701459', 'Iriana Andriani', '(+62) 762 5367 458', 10, 'Tunai', 'Pending', NULL, NULL, 1249, 11241, '2024-07-07 13:39:49', '2024-07-07 13:39:49'),
('TPJ-24071400005', NULL, '', '', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 18000, '2024-07-13 23:54:26', '2024-07-13 23:54:26'),
('TPJ-24071600006', NULL, '', '', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 6520, '2024-07-16 00:06:34', '2024-07-16 00:06:34'),
('TPJ-24071600007', NULL, '', '', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 5500, '2024-07-16 00:18:46', '2024-07-16 00:18:46'),
('TPJ-24071700008', NULL, '', '', NULL, 'Tunai', 'Pending', NULL, NULL, 0, 5500, '2024-07-16 23:27:46', '2024-07-16 23:27:46'),
('TPS-24070800001', NULL, '', '', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 56000, '2024-07-07 23:19:11', '2024-07-07 23:19:11'),
('TPS-24071600003', NULL, '', '', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 54000, '2024-07-16 01:14:16', '2024-07-16 01:14:16'),
('TPS-24071600004', 'P-240793297', 'Samin', '074567432123', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 45000, '2024-07-16 01:24:49', '2024-07-16 01:24:49'),
('TPS-24071600005', 'P-240760338', 'Mila Safitri', '(+62) 699 9142 9369', NULL, 'Tunai', 'Lunas', NULL, NULL, 0, 50000, '2024-07-16 01:26:35', '2024-07-16 01:26:35'),
('TPS-24071600006', 'P-240706468', 'Syahrini Rahmawati', '(+62) 214 8973 461', 10, 'Tunai', 'Lunas', NULL, NULL, 54000, 486000, '2024-07-16 03:41:40', '2024-07-16 03:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abyan Aufa Alif Musyaffa', 'mon', '$2y$12$ltH6/ZrD0L5Eg9IDgQH/HOB77aZxuHg6PLnmzegKtGkQcj2Fhv8ym', '', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangs_kategori_id_foreign` (`kategori_id`),
  ADD KEY `barangs_satuan_id_foreign` (`satuan_id`);

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
-- Indexes for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pesanans_pesanan_id_foreign` (`pesanan_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
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
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penjualans_transaksi_id_foreign` (`transaksi_id`),
  ADD KEY `penjualans_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesanans_transaksi_id_foreign` (`transaksi_id`);

--
-- Indexes for table `satuans`
--
ALTER TABLE `satuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_pelanggan_id_foreign` (`pelanggan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `satuans`
--
ALTER TABLE `satuans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `barangs_satuan_id_foreign` FOREIGN KEY (`satuan_id`) REFERENCES `satuans` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `detail_pesanans`
--
ALTER TABLE `detail_pesanans`
  ADD CONSTRAINT `detail_pesanans_pesanan_id_foreign` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD CONSTRAINT `penjualans_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualans_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanans`
--
ALTER TABLE `pesanans`
  ADD CONSTRAINT `pesanans_transaksi_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
