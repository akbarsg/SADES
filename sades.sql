-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12 Des 2017 pada 07.41
-- Versi Server: 5.7.19-log
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sades`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `price` int(20) NOT NULL,
  `accepted` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `user_id`, `price`, `accepted`, `created_at`, `updated_at`) VALUES
(1, 'Logo Halloween', 'Buatin logo yang keren dong buat halowin. Yang bagus tapi ya..', 2, 500000, 1, '2017-11-05 17:46:43', '2017-11-05 17:46:43'),
(2, 'Skin GTA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in pharetra ex, at pellentesque dui. Vivamus at diam dui. Nullam vel hendrerit libero. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum ullamcorper nunc ut eros dapibus vulputate. Aliquam erat volutpat.', 2, 123123, 1, '2017-11-05 18:08:10', '2017-11-05 18:08:10'),
(3, 'Lambang Universitas Binus', 'Nam fermentum ultrices elementum. Curabitur ullamcorper mollis nisi, sed commodo nisi tempus eu. Quisque id scelerisque metus. Nam sed aliquet sem. Phasellus sed mollis nulla. Curabitur sed quam ut arcu mollis suscipit in vel libero. Curabitur et metus lacinia erat pharetra blandit. Donec eu venenatis sem. Sed eu velit neque. Proin ultrices, eros a sagittis rutrum, metus odio auctor neque, sed posuere nisl sapien vel ligula. Suspendisse pretium porttitor commodo.\n\nMauris finibus magna ac ante varius viverra. Nunc posuere ante id feugiat bibendum. In hac habitasse platea dictumst. Fusce at mauris eget nulla sollicitudin efficitur et sed mi. Maecenas ultrices consectetur sapien dignissim molestie. Donec sed volutpat justo, hendrerit sagittis est. Ut faucibus accumsan leo, ac suscipit massa mollis et.', 2, 12344, 1, '2017-11-19 01:40:31', '2017-11-19 01:40:31'),
(4, 'Galon Aquades', 'Donec at sapien elit. Donec congue neque nec lectus gravida dapibus. Morbi diam nulla, lobortis a eros sed, auctor aliquam magna. Aliquam venenatis condimentum orci at imperdiet. Pellentesque lacinia magna sollicitudin sapien finibus, a dictum neque consectetur. Curabitur eleifend ultrices nunc, sed viverra nisl varius sit amet. Morbi tincidunt tincidunt quam. Nulla facilisi.\n\nPhasellus suscipit blandit ligula sit amet pulvinar. Suspendisse vehicula feugiat est, eget finibus est tempor a. Etiam nisi erat, pulvinar eu enim sed, ornare posuere diam. Phasellus eget dignissim lorem. Suspendisse porta consectetur erat, at aliquet nulla iaculis ut. Duis ac sapien faucibus, varius quam ut, iaculis risus. Ut tempus justo eget risus tincidunt ultrices ac quis eros. Etiam vestibulum mauris arcu, nec sagittis orci imperdiet at. Duis suscipit id lorem lacinia molestie. Ut vehicula aliquam tincidunt. Nulla id iaculis velit. Cras suscipit gravida augue, eget pellentesque dui ultrices ut. Nunc et egestas arcu, ac vehicula sem. Quisque ac nisl at est facilisis venenatis nec sit amet nibh. Aenean scelerisque, orci quis varius tempor, enim magna sollicitudin libero, egestas ultrices justo ligula ut ex.', 2, 34242, 1, '2017-11-19 01:41:05', '2017-11-19 01:41:05'),
(5, 'Desain Robot Pemadam Kebakaran', 'Vestibulum odio urna, laoreet ac tempor vitae, ullamcorper vitae arcu. Nulla odio ipsum, ultricies quis egestas nec, luctus sit amet nisl. Quisque pulvinar tortor a massa dictum porta. Proin tincidunt, urna ut porttitor luctus, felis augue fringilla nisl, et scelerisque ipsum felis eu nisi. Donec congue accumsan velit sit amet efficitur. Suspendisse potenti. Duis sit amet lectus in lorem dapibus dapibus. Cras urna sem, pulvinar at nisi at, finibus facilisis augue.\n\nEtiam fermentum fermentum commodo. Curabitur id hendrerit nulla. Curabitur sed mi ut dolor egestas vulputate sed a turpis. Aliquam efficitur, tellus nec aliquam posuere, enim ante feugiat sapien, nec convallis tortor lorem a risus. Nulla facilisi. Praesent cursus nulla vel leo ornare, ut sodales tellus iaculis. Donec at ligula felis. Morbi at sodales dolor, id fringilla nunc. Fusce interdum molestie sapien ut blandit. Aliquam dictum sodales mi vitae condimentum. Nam sodales lorem ut vestibulum finibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque ullamcorper enim metus, nec luctus ante sodales at.', 2, 234234, 0, '2017-11-19 01:47:17', '2017-11-19 01:47:17'),
(6, 'Bantu buat Lomba Menggambar', 'Homina homina homina homina....Etiam tincidunt luctus quam eget ultricies. Curabitur nec ipsum libero. Maecenas vitae augue mauris. In volutpat consequat dolor a tempus. Mauris purus nulla, condimentum at nisi sit amet, tincidunt gravida arcu. Proin iaculis aliquam volutpat. Sed ut aliquet arcu, a pulvinar magna. Sed lacus tortor, lacinia tincidunt nibh sed, tincidunt pellentesque enim. Duis est enim, imperdiet id ullamcorper non, laoreet vel lectus. Ut tristique elit ex, sit amet mollis libero molestie sit amet. Vestibulum laoreet scelerisque odio ut placerat. Nam feugiat nibh at orci tincidunt venenatis.\n\nNulla eu tellus nibh. Nunc quam augue, pellentesque vel mauris sed, rhoncus congue arcu. In sed nisl erat. Sed sit amet fermentum dolor, vel auctor quam. Nullam eget nulla ut justo ornare posuere id vel ex. Nunc in euismod eros, quis pretium orci. Pellentesque mattis est tristique urna fermentum, fringilla maximus lacus placerat. Ut pharetra auctor nisi sit amet semper. Aliquam dapibus commodo sapien, et dapibus justo tristique sed. Vestibulum mollis pretium risus eget elementum. Donec quis aliquet nisl, sit amet pretium lectus. Nunc eu accumsan arcu, ut fermentum felis. Sed consectetur justo eu risus feugiat dictum.', 2, 42342, 0, '2017-11-19 01:48:21', '2017-11-19 01:48:21'),
(7, 'Ntap', 'warjrfdawiocjoia waio dhioaoi a', 2, 10000, 0, '2017-11-27 20:34:23', '2017-11-27 20:34:23'),
(8, 'Praktikum', 'buat desain web', 2, 100100, 1, '2017-11-28 02:04:40', '2017-11-28 02:04:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_05_044042_create_admins_table', 1),
(4, '2017_11_05_071314_create_jobs_table', 1),
(5, '2017_11_05_071503_create_payments_table', 1),
(6, '2017_11_05_071942_create_notifications_table', 1),
(7, '2017_11_05_073131_create_proposals_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `to_user_id` int(10) UNSIGNED DEFAULT NULL,
  `job_id` int(11) UNSIGNED DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `to_user_id`, `job_id`, `type`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 1, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID $request->job_id', '2017-11-06 03:14:58', '2017-11-06 03:14:58'),
(2, 1, 0, 1, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 1', '2017-11-06 03:59:09', '2017-11-06 03:59:09'),
(3, 1, 0, 1, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 1', '2017-11-06 03:59:25', '2017-11-06 03:59:25'),
(4, 1, 0, 2, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 2', '2017-11-06 05:06:35', '2017-11-06 05:06:35'),
(5, 1, 0, 1, 0, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda telah diterima!  2', '2017-11-20 08:27:52', '2017-11-20 08:27:52'),
(6, 1, 0, 1, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 2 telah diterima!', '2017-11-20 19:56:59', '2017-11-20 19:56:59'),
(7, 1, 0, 1, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 2 telah diterima!', '2017-11-20 20:04:31', '2017-11-20 20:04:31'),
(8, 1, 0, 4, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 4', '2017-11-20 22:18:07', '2017-11-20 22:18:07'),
(9, 1, 0, 1, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 2 telah diterima!', '2017-11-20 22:35:31', '2017-11-20 22:35:31'),
(10, 1, 0, 1, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 2 telah diterima!', '2017-11-20 22:35:41', '2017-11-20 22:35:41'),
(11, 4, 0, 1, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 1', '2017-11-21 01:13:25', '2017-11-21 01:13:25'),
(13, 4, 0, 2, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 2', '2017-11-21 01:48:51', '2017-11-21 01:48:51'),
(14, 4, 0, 2, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 6 telah diterima!', '2017-11-21 01:57:58', '2017-11-21 01:57:58'),
(15, 4, 0, 2, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 6 telah diterima!', '2017-11-21 01:58:06', '2017-11-21 01:58:06'),
(16, 4, 1, NULL, 1, 'Anda telah memberi rating', 'Anda telah memberi peringkat pada pengguna dengan ID 1', '2017-11-27 18:48:06', '2017-11-27 18:48:06'),
(17, 4, 1, NULL, 1, 'Anda telah memberi rating', 'Anda telah memberi peringkat pada pengguna dengan ID 1', '2017-11-27 18:48:16', '2017-11-27 18:48:16'),
(18, 1, NULL, 3, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 3', '2017-11-28 05:07:32', '2017-11-28 05:07:32'),
(19, 1, NULL, 3, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 7 telah diterima!', '2017-11-28 05:09:08', '2017-11-28 05:09:08'),
(20, 1, NULL, 8, 0, 'Anda telah mengambil Job!', 'Job yang diambil adalah job dengan ID 8', '2017-12-11 18:54:00', '2017-12-11 18:54:00'),
(21, 1, NULL, 8, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 8 telah diterima!', '2017-12-11 18:54:56', '2017-12-11 18:54:56'),
(22, 1, NULL, 4, 2, 'Ajuan prototype Anda telah diterima!', 'Ajuan prototype Anda pada job dengan ID 5 telah diterima!', '2017-12-11 20:44:24', '2017-12-11 20:44:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `proposal_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `link_proof` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint(20) NOT NULL,
  `validated` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `payments`
--

INSERT INTO `payments` (`id`, `job_id`, `proposal_id`, `user_id`, `link_proof`, `price`, `validated`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 4, NULL, 123123, 1, '2017-11-27 16:26:29', '2017-11-27 16:26:29'),
(2, 1, 2, 1, NULL, 500000, 0, '2017-12-04 20:27:49', '2017-12-04 20:27:49'),
(3, 8, 8, 2, '1513046491.JPG', 100100, 1, '2017-12-11 19:41:31', '2017-12-11 19:41:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proposals`
--

CREATE TABLE `proposals` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_final` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accepted` int(11) NOT NULL DEFAULT '0',
  `final` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `proposals`
--

INSERT INTO `proposals` (`id`, `job_id`, `user_id`, `link`, `link_final`, `accepted`, `final`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1510401995.png', NULL, 0, 0, '2017-11-11 05:06:35', '2017-11-11 05:06:35'),
(2, 1, 1, '1511187676.jpg', '1511242144.jpg', 1, 1, '2017-11-20 07:21:16', '2017-11-20 07:21:16'),
(3, 2, 1, '1511241065.jpg', NULL, 0, 0, '2017-11-20 22:11:05', '2017-11-20 22:11:05'),
(4, 2, 1, '1511241128.jpg', NULL, 0, 0, '2017-11-20 22:12:08', '2017-11-20 22:12:08'),
(5, 4, 1, '1511241510.jpg', NULL, 1, 0, '2017-11-20 22:18:30', '2017-11-20 22:18:30'),
(6, 2, 4, '1511254145.jpg', '1511824333.jpeg', 1, 1, '2017-11-21 01:49:05', '2017-11-21 01:49:05'),
(7, 3, 1, '1511870925.jpeg', NULL, 1, 0, '2017-11-28 05:08:45', '2017-11-28 05:08:45'),
(8, 8, 1, '1513043672.JPG', '1513043722.JPG', 1, 1, '2017-12-11 18:54:32', '2017-12-11 18:54:32'),
(9, 8, 2, '1513046202.JPG', NULL, 0, 0, '2017-12-11 19:36:42', '2017-12-11 19:36:42'),
(10, 8, 2, '1513046255.JPG', NULL, 0, 0, '2017-12-11 19:37:35', '2017-12-11 19:37:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `balance` int(20) NOT NULL DEFAULT '1000000',
  `rating` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `balance`, `rating`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aulia Akbar Setyogomo', 'akbar_sg@yahoo.co.id', '$2y$10$uF8V7mn0UN7LCwckXdXByup5VR/8NZOSgC1KSxuCXc2VuC6CceHtG', 1, 1000000, 4, 'epkdWiP2WHXqGt7h4EcDwD1KbnlhQtXpa53GUVJObRfBSmyF70Sd4PNZtsQt', '2017-11-05 02:56:06', '2017-11-05 17:16:55'),
(2, 'John Doe', 'john@john.doe', '$2y$10$23s2/pQPoA87KEW.jPmp2u6pdlvgPtogr1e8LUZMdzSezXsYnFXGa', 2, -246246, 0, 'RAmEbiZYrFuaYVqyS4UZUZmPv2iNcG1NWaYbEYUSb0hxoqvMFFpS5hlj0cLF', '2017-11-05 17:22:16', '2017-11-05 17:24:48'),
(3, 'Joko', 'joko@joko.doe', '$2y$10$EIwhhugRTknOA9V5OabOzeP2ibyZsULH2.eAEeYTuSy6boNOdHydq', 2, 100000, 0, 'L87siU9CU7G9e5yDXY4BpGvfcDzn1rj3kKqti91tVE9njgvRqshG69cRgIch', '2017-11-11 04:21:16', '2017-11-11 04:23:40'),
(4, 'John Cena', 'johncena@gmail.com', '$2y$10$iX1ZWmKbwc3lwMcrSs6Y9uNK064TKr.qtBhymGmgsfwoAdVH5MD6W', 1, 1000000, 0, 'FYyCtVGiYrJ74AZ6JKZysy0XtG3wks89Wsd0MR9BvGqWOCfJPPkY49rJ6ZWB', '2017-11-21 01:12:31', '2017-11-21 01:12:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `job_id_2` (`job_id`),
  ADD KEY `to_user_id` (`to_user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `proposal_id` (`proposal_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`);

--
-- Ketidakleluasaan untuk tabel `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`proposal_id`) REFERENCES `proposals` (`id`),
  ADD CONSTRAINT `payments_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `proposals_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
