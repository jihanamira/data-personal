-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 11:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdatapersonel`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapersonel`
--

CREATE TABLE `datapersonel` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pangkat` int(10) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nrp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `polri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datapersonel`
--

INSERT INTO `datapersonel` (`id`, `id_pangkat`, `nama`, `nrp`, `jabatan`, `umum`, `polri`, `created_at`, `updated_at`) VALUES
(1, 1, 'ZULMAN EFENDI', '64040737', 'KABAGSUMDA', 'SMA', 'SEBA MILSUK', '2021-12-07 23:07:47', '2021-12-07 23:07:47'),
(2, 2, 'YULIA, SH', '71070345', 'KASUBBAG SARPRAS', 'PT', 'SEBA, CAPA', '2021-12-07 23:08:43', '2021-12-07 23:08:43'),
(3, 3, 'ALWISIS', '64040730', 'KANIT I RESNARKOBA', 'SMA', 'SECABA,', '2021-12-07 23:10:06', '2021-12-07 23:10:06'),
(4, 3, 'ENDRI FAHMI', '65080700', 'KANIT INTEL POLSEK PYK', 'STM', NULL, '2021-12-20 21:41:58', '2021-12-20 21:41:58'),
(5, 4, 'DALIMAN', '63080800', 'PAURBANKUM', 'SMA', 'CABA', '2021-12-20 21:42:55', '2021-12-20 21:42:55'),
(6, 6, 'CATUR JUNAIDI', '67060256', 'KANIT BINMAS SEKTA ALUR', 'SMA', 'SEBA POLSUK', '2021-12-20 21:43:50', '2021-12-20 21:43:50'),
(7, 3, 'ARSADI. Amd Kep', '72100231', 'PAURKES', 'DIII', 'SEBA', '2021-12-20 21:44:40', '2021-12-20 21:44:40'),
(8, 5, 'WAGIYANTI', '196611061991032000', 'PAUR MIN', 'SMA', NULL, '2021-12-20 21:45:25', '2021-12-20 21:45:25'),
(9, 6, 'YUNELFI', '76060276', 'PS. PAUR LOG', 'SPP', 'SEBA PK POLWAN', '2021-12-20 21:46:19', '2021-12-20 21:46:19'),
(10, 6, 'MUSTAUFIQ', '80040035', 'PS. PAUR LAT', 'STM', 'PK POLRI', '2021-12-20 21:47:14', '2021-12-20 21:47:14'),
(11, 6, 'IMRAN', '65100297', 'BA URKES', 'STM', 'CABA', '2021-12-20 21:48:08', '2021-12-20 21:48:08'),
(12, 6, 'KAZALMAI', '66110354', 'BA BAGSUMDA', 'STM', 'SEBA MILSUK', '2021-12-20 21:49:10', '2021-12-20 21:49:10'),
(13, 7, 'ISROL', '80050220', 'BA LOG', 'SMA', 'PK POLRI', '2021-12-20 21:49:57', '2021-12-20 21:49:57'),
(14, 8, 'DENNY M. BAHARI', '80070648', 'BRIG SIWAS', 'SMA', 'DIKTUKBA', '2021-12-20 21:50:42', '2021-12-20 21:50:42'),
(15, 8, 'ALENDRA.MARSIO.B,Amd.Kep', '80111088', 'BRIG POLRES PYK', 'DIII', 'DIKTUKBA', '2021-12-20 21:51:34', '2021-12-20 21:51:34'),
(16, 7, 'BUDI ERIANTO', '80071231', 'BRIG LOG', 'SMA', 'DIKMABA', '2021-12-20 21:52:23', '2021-12-20 21:52:23'),
(17, 7, 'DINA MEIRI LESTARI', '83050298', 'PS.PAUR II MINPERS', 'SMA', 'DIKMABA ,POLWAN', '2021-12-20 21:53:19', '2021-12-20 21:53:19'),
(18, 8, 'ROMI ANDRA YUSA', '84111019', 'BRIG UR KES', 'SMU', 'DIKTUKBA', '2021-12-20 21:54:12', '2021-12-20 21:54:12'),
(19, 8, 'MARDIANTO', '86031786', 'BA URKES', 'SMA', 'DIKTUKBA', '2021-12-20 21:55:38', '2021-12-20 21:55:38'),
(20, 14, 'EKO ZAINUL PUTRA', '84100248', 'BRIG SATRESKRIM', 'SMK', 'DIKTUKBA', '2021-12-20 21:57:11', '2021-12-20 21:57:11'),
(21, 9, 'EKI RILFIDA', '79040793', 'BRIG BAG SUMDA', 'SMA', 'CATA, SAG', '2021-12-20 21:58:00', '2021-12-20 21:58:00'),
(22, 10, 'AZRA WAHYUDI ISLAMI', '94020591', 'BA BAG SUMDA', 'SMA', 'DIKTUK BRIG', '2021-12-20 21:58:49', '2021-12-20 21:58:49'),
(23, 11, 'SRI NIKEN WAHYUNI', '95020496', 'BRIG BINMAS LUHAK', 'SMA', 'DIKTUK BRIG,POLWAN', '2021-12-20 21:59:54', '2021-12-20 21:59:54'),
(24, 10, 'INDRI MURESVA', '97030144', 'BA BAGSUMDA', 'SMA', 'DIKTUK BRIG', '2021-12-20 22:02:10', '2021-12-20 22:02:10'),
(25, 11, 'SELVINA', '96081273', 'BA BAG SUMDA', 'SMA', 'DIKTUKBA', '2021-12-20 22:03:12', '2021-12-20 22:03:12'),
(26, 11, 'SYAHRIAL FANNY ISMAIL', '98040557', 'BA SARPRAS', 'SMA', 'DIKTUKBA', '2021-12-20 22:04:06', '2021-12-20 22:04:06'),
(27, 12, 'GUSNIARTI. S', '196908081990032000', 'BANUM KES', 'SMA', 'SPK', '2021-12-20 22:05:04', '2021-12-20 22:05:04'),
(28, 13, 'ZULBAHRI', '196603092014121000', 'BANUM SUBBAG SARPRAS', 'STM', NULL, '2021-12-20 22:05:43', '2021-12-20 22:05:43'),
(29, 9, 'HADI YULIANDRA', '84071348', 'BA URKES', 'SMA', 'DIKTUKBA POLRI', '2021-12-20 22:11:17', '2021-12-20 22:11:17'),
(30, 10, 'LEO AGRES', '89080409', 'BRIG SAT RESNARKOBA', 'SMA', 'DIK BRIGADIR', '2021-12-20 22:12:18', '2021-12-20 22:12:18'),
(31, 1, 'zulman efendi', '64040737', 'kabagsumda', 'SMA', 'SEBA,MILSUK', '2021-12-21 23:53:26', '2021-12-21 23:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2021_12_01_075953_create_pangkat_table', 1),
(5, '2021_12_01_092932_create_datapersonel_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id` int(10) UNSIGNED NOT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id`, `pangkat`, `created_at`, `updated_at`) VALUES
(1, 'KOMPOL', '2021-12-07 23:02:54', '2021-12-07 23:02:54'),
(2, 'AKP', '2021-12-07 23:03:11', '2021-12-07 23:03:11'),
(3, 'IPDA', '2021-12-07 23:03:21', '2021-12-07 23:03:21'),
(4, 'IPTU', '2021-12-07 23:03:33', '2021-12-07 23:03:33'),
(5, 'PENATA', '2021-12-07 23:03:46', '2021-12-07 23:03:46'),
(6, 'AIPTU', '2021-12-07 23:04:04', '2021-12-07 23:04:04'),
(7, 'AIPDA', '2021-12-07 23:04:18', '2021-12-07 23:04:18'),
(8, 'BRIPKA', '2021-12-07 23:04:46', '2021-12-07 23:04:46'),
(9, 'BRIPKA', '2021-12-07 23:05:05', '2021-12-07 23:05:05'),
(10, 'BRIPTU', '2021-12-07 23:05:21', '2021-12-07 23:05:21'),
(11, 'BRIPDA', '2021-12-07 23:05:37', '2021-12-07 23:05:37'),
(12, 'PENGTU', '2021-12-07 23:05:49', '2021-12-07 23:05:49'),
(13, 'PENGDA TK I', '2021-12-07 23:06:00', '2021-12-07 23:06:00'),
(14, 'BRIGADIR', '2021-12-20 21:56:09', '2021-12-20 21:56:09'),
(15, 'BRIPTU', '2021-12-21 23:54:16', '2021-12-21 23:54:16');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yessa', 'yessamarlisa@gmail.com', NULL, '$2y$10$dEXrLf89wcA9yG9o8zSoWOc1sk/7xenB/dL9oRSgeuxeAAXCOyrGu', NULL, '2021-12-04 05:22:10', '2021-12-04 05:22:10'),
(2, 'yesamarlisa', 'yesamarlisa@gmail.com', NULL, '$2y$10$xa.qrmPdKBKvOCE7E5t1Ie908XZZ3MOMGFI779HXQDJ3ermT5lBfe', NULL, '2021-12-07 22:56:34', '2021-12-07 22:56:34'),
(3, 'yesa', 'yesa123@gmail.com', NULL, '$2y$10$jQmVkMmFh/IwQHe3IUfZoe4x4YmktRHzu.Py5WoTyLAJHRU0aHt12', NULL, '2021-12-14 21:47:39', '2021-12-14 21:47:39'),
(4, 'yesa', 'yesa@gmail.com', NULL, '$2y$10$/3KgteLeJsVIPeKkDYaoy.JZ5P4Jew5BNR17zUbvCsIgtG0Mzi19a', NULL, '2021-12-14 21:59:47', '2021-12-14 21:59:47'),
(5, 'dilan', 'dilan060101@gmail.com', NULL, '$2y$10$ewnMPv7PW0/jdzfX4ebFpOquWBcQLU4FZYYj/O8CfjM2EC1awxn6.', NULL, '2021-12-20 21:24:47', '2021-12-20 21:24:47'),
(6, 'nisa', 'nisa12@gmail.com', NULL, '$2y$10$zbURLfvmxsadsDITlv7qseenC5fywmH/27NsxEKmTpdAUTgNAPybu', NULL, '2021-12-21 23:51:04', '2021-12-21 23:51:04'),
(7, 'yesa', 'yesa060101@gmail.com', NULL, '$2y$10$Rrg/HVd/Q5lGehc9w4hor.kG3Lc1FEAxrdwQySulk7RS6dHR3QyL6', NULL, '2021-12-24 21:39:22', '2021-12-24 21:39:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapersonel`
--
ALTER TABLE `datapersonel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datapersonel_id_pangkat_foreign` (`id_pangkat`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `datapersonel`
--
ALTER TABLE `datapersonel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pangkat`
--
ALTER TABLE `pangkat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datapersonel`
--
ALTER TABLE `datapersonel`
  ADD CONSTRAINT `datapersonel_id_pangkat_foreign` FOREIGN KEY (`id_pangkat`) REFERENCES `pangkat` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
