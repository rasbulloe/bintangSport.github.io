-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Apr 2022 pada 06.08
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam`
--

CREATE TABLE `jam` (
  `kdJam` int(11) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jam`
--

INSERT INTO `jam` (`kdJam`, `jam`, `harga`) VALUES
(1, '09.00', '100000'),
(2, '10.00', '100000'),
(3, '11.00', '100000'),
(4, '12.00', '100000'),
(5, '13.00', '120000'),
(6, '14.00', '120000'),
(7, '15.00', '120000'),
(8, '16.00', '120000'),
(9, '17.00', '150000'),
(10, '18.00', '150000'),
(11, '19.00', '150000'),
(12, '20.00', '150000'),
(13, '21.00', '150000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapang`
--

CREATE TABLE `lapang` (
  `kdLapang` int(11) NOT NULL,
  `nama_lapang` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapang`
--

INSERT INTO `lapang` (`kdLapang`, `nama_lapang`, `deskripsi`, `gambar`) VALUES
(1, 'Mini Soccer 1', 'Lapang 1 Mini Soccer Sintetis', 'lapang-futsal.jpg'),
(2, 'Lapang Futsal 1', 'Lapang futsal 1 interlok', 'lapang-futsal1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tjadwal`
--

CREATE TABLE `tjadwal` (
  `kdJadwal` int(11) NOT NULL,
  `kode_transaksi` varchar(20) NOT NULL,
  `namaPemesan` varchar(25) NOT NULL,
  `userBoking` varchar(25) NOT NULL,
  `tglInvoice` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kontak` char(15) NOT NULL,
  `tglJadwal` date NOT NULL,
  `status` int(11) NOT NULL,
  `kdLapang` int(11) NOT NULL,
  `kdJam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tjadwal`
--

INSERT INTO `tjadwal` (`kdJadwal`, `kode_transaksi`, `namaPemesan`, `userBoking`, `tglInvoice`, `kontak`, `tglJadwal`, `status`, `kdLapang`, `kdJam`) VALUES
(62, 'INV-120322-0001', 'admin', 'BoysClub', '2022-03-31 07:31:08', '08438435638', '2022-03-12', 1, 1, 1),
(63, 'INV-120322-0063', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 1, 2),
(64, 'INV-120322-0064', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 2, 1),
(65, 'INV-120322-0065', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 2, 3),
(66, 'INV-120322-0066', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 2, 4),
(67, 'INV-120322-0067', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 2, 2),
(68, 'INV-120322-0068', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 1, 3),
(69, 'INV-120322-0069', 'admin', 'BoysClub', '0000-00-00 00:00:00', '08438435638', '2022-03-12', 0, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'administrator', 'admin@admin.com', 'wallpaper.jpg', '$2y$10$COIYsT3ilXMagtZO5D6n4ObX58k6ypWi1gf8Av7FiSOG/2qewUiu.', 1, 1, 1640249811),
(2, 'Amin', 'rasbulloe@gmail.com', 'anak-muslim-lucu.jpg', '$2y$10$vTXPUwvgyLgLzD9IyZYG2erwc52ReusoPLkTw5lwjRxgCm2dE4122', 2, 1, 1640249849),
(3, 'admin1', 'admin1@admin.com', 'default.jpg', '$2y$10$jdIqZF1rNyn3zVVVwj4Mae/6yW/zHEAY00KrvST388n2srP8X581e', 2, 0, 1640422750);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(8, 1, 2),
(11, 1, 5),
(12, 1, 6),
(13, 1, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Lapang Management'),
(6, 'Sewa Lapang'),
(17, 'Data Laporan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user/profile', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(9, 5, 'Lapang Management', 'lapang', 'far fa-fw fa-futbol', 1),
(10, 6, 'Booking Lapang', 'Booking', 'fas fa-fw fa-book', 1),
(13, 16, 'Jadwal Lapang', 'jam', 'far fa-clock', 1),
(14, 17, 'Data Laporan', 'laporan', 'fas fa-fw fa-book', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'admin@admin.com', '/2+L+4JmZNikQiz+MV5r/79E+IojFg0+oXq2Kd75HAc=', 1640249811),
(10, 'rasbulloe@gmail.com', '7426wuivssXSfrRGUZ/7s8CjEPwP+qGhWyeHJiysjh4=', 1640249849),
(11, 'admin1@admin.com', 'uqNRbKblnclNtNcoEeVR5qwukUCr1RMM7ztvoF5g05o=', 1640422750);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`kdJam`);

--
-- Indeks untuk tabel `lapang`
--
ALTER TABLE `lapang`
  ADD PRIMARY KEY (`kdLapang`);

--
-- Indeks untuk tabel `tjadwal`
--
ALTER TABLE `tjadwal`
  ADD PRIMARY KEY (`kdJadwal`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jam`
--
ALTER TABLE `jam`
  MODIFY `kdJam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `lapang`
--
ALTER TABLE `lapang`
  MODIFY `kdLapang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tjadwal`
--
ALTER TABLE `tjadwal`
  MODIFY `kdJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
