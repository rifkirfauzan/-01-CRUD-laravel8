-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 04.42
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `ibrg`
--

CREATE TABLE `ibrg` (
  `id_brg` int(12) NOT NULL,
  `nama_barang` varchar(225) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `harga_barang` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ibrg`
--

INSERT INTO `ibrg` (`id_brg`, `nama_barang`, `jenis_barang`, `harga_barang`, `qty`) VALUES
(6, 'Kursi tamu', 'Perkakas', '1.500.000', '>100'),
(7, 'Obeng', 'Perkakas', '35.800', '<50'),
(8, 'Transistor', 'Elektronik', '17.900', '<50'),
(9, 'tang', 'Perkakas', '10.000', '>50'),
(10, 'baut', 'Perkakas', '3.200', '>100'),
(11, 'gantungan baju', 'Rumah_tangga', '24.500', '<50'),
(12, 'Kipas angin', 'Rumah_tangga', '10.700', '<50'),
(13, 'Sunlight', 'Rumah_tangga', '10.000', '<50'),
(14, 'lemari', 'Rumah_tangga', '300.000', '<50'),
(15, 'Kasur', 'Rumah_tangga', '1.250.000', '<50'),
(16, 'Kasur', 'Rumah_tangga', '1.250.000', '<50'),
(17, 'karpet', 'Rumah_tangga', '97.000', '<50'),
(18, 'Televisi', 'Elektronik', '5.000.000', '<50'),
(19, 'sisir', 'Rumah_tangga', '12.000', '<50'),
(20, 'mukena', 'Rumah_tangga', '22.000', '<50'),
(21, 'hp', 'Elektronik', '2.000.000.00', '<50'),
(22, 'printer', 'Silahkan pilih jenis barang', '1.500.000', '<50'),
(23, 'semen', 'Perkakas', '30.000', '>50'),
(24, 'hair drayer', 'Elektronik', '35.800', '>50'),
(25, 'headset', 'Elektronik', '40.000', '>100'),
(26, 'keyboard', 'Elektronik', '500.000', '<50'),
(27, 'charger', 'Elektronik', '90.000', '>50'),
(28, 'laptop', 'Silahkan pilih jenis barang', '1.500.000', '<50'),
(29, 'baju', 'Rumah_tangga', '90.000', '>100'),
(30, 'ac', 'Elektronik', '6.000.000.00', '<50'),
(31, 'meja', 'Rumah_tangga', '500.000', '>50'),
(32, 'kasur', 'Rumah_tangga', '700.000.00', '>50'),
(33, 'kursi', 'Rumah_tangga', '2.500.00', '>100'),
(34, 'kabel', 'Elektronik', '10.000', '>200'),
(35, 'cat', 'Perkakas', '90.000', '>100'),
(36, 'baju', 'Rumah_tangga', '90.000', '>100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kbg`
--

CREATE TABLE `kbg` (
  `id_kbg` int(12) NOT NULL,
  `nama_barang` varchar(225) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `jumlah_barang` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kbg`
--

INSERT INTO `kbg` (`id_kbg`, `nama_barang`, `jenis_barang`, `jumlah_barang`) VALUES
(2, 'Kipas angin', 'Elektronik', '8'),
(3, 'Sunlight', 'Rumah_tangga', '27'),
(4, 'laptop', 'Elektronik', '33'),
(5, 'Kipas angin', 'Elektronik', '76'),
(6, 'Palu', 'Perkakas', '78'),
(7, 'masker', 'Silahkan pilih jenis barang', '75'),
(8, 'headset', 'Elektronik', '128'),
(9, 'hair drayer', 'Elektronik', '52'),
(10, 'kabel', 'Elektronik', '90'),
(11, 'hp', 'Elektronik', '182'),
(12, 'kaca', 'Perkakas', '46'),
(13, 'wawan anjing', 'Rumah_tangga', '72'),
(14, 'kurma', 'Rumah_tangga', '297'),
(15, 'baterai', 'Elektronik', '240'),
(16, 'lcd', 'Elektronik', '238'),
(17, 'tv', 'Elektronik', '191'),
(18, 'motor', 'Rumah_tangga', '43'),
(19, 'lemari', 'Rumah_tangga', '135'),
(20, 'terminal', 'Elektronik', '116'),
(21, 'keyboard', 'Elektronik', '56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kpt`
--

CREATE TABLE `kpt` (
  `id_kpt` int(12) NOT NULL,
  `tahun` varchar(225) DEFAULT NULL,
  `p_tertinggi` varchar(255) DEFAULT NULL,
  `p_terendah` varchar(255) DEFAULT NULL,
  `k_tahunan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_lapor` int(12) NOT NULL,
  `rkp_beli` varchar(225) DEFAULT NULL,
  `rkp_jual` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_lapor`, `rkp_beli`, `rkp_jual`, `bulan`) VALUES
(1, '8.850.000', '20.900.000', 'mei'),
(2, '8.850.000', '20.900.000', 'Januari'),
(5, '3.300.930', '12.790.00', 'maret'),
(6, '5.600.000', '13.000.000', 'Juni'),
(7, '3.000.000', '6.000.000', 'April'),
(8, '1.200.000', '4.300.000', 'Maret'),
(9, '3.000.000', '12.790.00', 'Januari'),
(10, '4.500.000', '6.750.000', 'Juli'),
(11, '1.345.000', '5.345.000', 'September'),
(12, '1.200.000', '4.300.000', 'Oktober'),
(13, '3.300.930', '4.300.000', 'Desember'),
(14, '1.200.000', '4.300.000', 'Juni'),
(15, '6.000.000', '8.300.000', 'Januari'),
(16, '2.900.000', '3,690.000', 'Februari'),
(17, '3.300.930', '4.300.000', 'Maret'),
(18, '3.000.000', '6.000.000', 'Juli'),
(19, '8.850.000', '12.790.00', 'Mei'),
(20, '1.200.000', '4.000.000', 'Februari'),
(21, '1.200.000', '4.300.000', 'Januari'),
(22, '8.850.000', '20.900.000', 'Februari');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Struktur dari tabel `pnjl`
--

CREATE TABLE `pnjl` (
  `id_pnjl` int(12) NOT NULL,
  `nama_barang` varchar(225) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pnjl`
--

INSERT INTO `pnjl` (`id_pnjl`, `nama_barang`, `jumlah`, `harga`, `status`) VALUES
(2, 'Kasur', '1', '100.000', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(12) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Rifki Rakha', 'rrakhafauzan@gmail.com', NULL, '$2y$10$ofG1mCQVzvLsYEaFqoRSDOBg9/XzliHP7KFf1qmz/.011FjfF.QW2', NULL, '2021-04-14 23:55:49', '2021-04-14 23:55:49', 1),
(2, 'rifaldi', 'rifaldiargya@gmail.com', NULL, '$2y$10$YqjXTKUgZwF6i66nvNSjQ.klTBkuCbWBLSSSF3IpS/iRv2kZh.hMG', NULL, '2021-04-15 19:54:45', '2021-04-15 19:54:45', 2),
(3, 'kiko', 'kiko@gmail.com', NULL, '$2y$10$y/vnLH5mVvaJ1X/Mg.Cb7OWGI1KOFbQVdBM.pdy6WZ1o4vUCG656i', NULL, '2021-04-16 19:43:00', '2021-04-16 19:43:00', 2),
(4, 'wawan', 'wawankitty34@gmail.com', NULL, '$2y$10$eOu9zPU9jox2za4OikmLYuE.AymcajAv975SV7Wid781gSS2RZnFi', NULL, '2021-04-17 02:31:37', '2021-04-17 02:31:37', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `ibrg`
--
ALTER TABLE `ibrg`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `kbg`
--
ALTER TABLE `kbg`
  ADD PRIMARY KEY (`id_kbg`);

--
-- Indeks untuk tabel `kpt`
--
ALTER TABLE `kpt`
  ADD PRIMARY KEY (`id_kpt`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_lapor`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pnjl`
--
ALTER TABLE `pnjl`
  ADD PRIMARY KEY (`id_pnjl`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ibrg`
--
ALTER TABLE `ibrg`
  MODIFY `id_brg` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `kbg`
--
ALTER TABLE `kbg`
  MODIFY `id_kbg` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kpt`
--
ALTER TABLE `kpt`
  MODIFY `id_kpt` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_lapor` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pnjl`
--
ALTER TABLE `pnjl`
  MODIFY `id_pnjl` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
