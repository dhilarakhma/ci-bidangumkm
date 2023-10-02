-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2023 pada 06.05
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_bidangumkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_control`
--

CREATE TABLE `tabel_control` (
  `id` int(11) NOT NULL,
  `nama_dinas` varchar(255) NOT NULL,
  `logo_dinas` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `maps` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_control`
--

INSERT INTO `tabel_control` (`id`, `nama_dinas`, `logo_dinas`, `alamat`, `maps`, `email`) VALUES
(1, 'Dinas Koperasi UMKM Perdagangan dan Perindustrian', '1695953812.3207651633944e4c6.png', 'Jl. Aria Wiratanudatar No.17, Muka, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43215', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.697808418771!2d107.14968427419106!3d-6.806566466571002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852e281da81df%3A0x5ae15452b5b51767!2sDinas%20Koperasi%20UKM%2C%20Perdagangan%20Dan%20Perindustrian!5e0!3m2!1sid!2sid!4v1695867777872!5m2!1sid!2sid\" width=\"300\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"', 'diskopperdagin.cianjur@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_identitas`
--

CREATE TABLE `tabel_identitas` (
  `NO_KK` char(16) NOT NULL,
  `NIK` char(16) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `JK` tinyint(1) NOT NULL,
  `TMPT_LHR` varchar(30) NOT NULL,
  `TGL_LHR` date NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `DESA` varchar(30) NOT NULL,
  `KEC` int(11) NOT NULL,
  `KAB` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_identitas`
--

INSERT INTO `tabel_identitas` (`NO_KK`, `NIK`, `NAMA`, `JK`, `TMPT_LHR`, `TGL_LHR`, `ALAMAT`, `DESA`, `KEC`, `KAB`) VALUES
('3202828036789011', '3278052112760006', 'Dhila', 2, 'Tasikmalaya', '2023-09-30', 'Tasik', 'Sukamenak', 1, 'Tasikmalaya'),
('1245678909876543', '1111111111111111', 'ingri', 1, 'Tasikmalaya', '2023-09-30', 'Tasik', 'Sukamenak', 1, 'Tasikmalaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kecamatan`
--

CREATE TABLE `tabel_kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_kecamatan`
--

INSERT INTO `tabel_kecamatan` (`id`, `kecamatan`) VALUES
(1, 'Argabinta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_usaha`
--

CREATE TABLE `tabel_usaha` (
  `NIK` varchar(16) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `NAMA_USAHA` varchar(30) NOT NULL,
  `JENIS_PRODUK` varchar(30) NOT NULL,
  `SEKTOR_USAHA` varchar(2) NOT NULL,
  `MODAL` varchar(30) NOT NULL,
  `OMSET` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabel_usaha`
--

INSERT INTO `tabel_usaha` (`NIK`, `NAMA`, `NAMA_USAHA`, `JENIS_PRODUK`, `SEKTOR_USAHA`, `MODAL`, `OMSET`) VALUES
('3278052112760006', 'Dhila', 'Cemilita', 'Makanan', '2', '1000000', '4600000'),
('1111111111111111', 'ingri', 'Cemilita', 'susu', '3', '1000000', '4600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `pass`) VALUES
(2, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_control`
--
ALTER TABLE `tabel_control`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kecamatan`
--
ALTER TABLE `tabel_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_control`
--
ALTER TABLE `tabel_control`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_kecamatan`
--
ALTER TABLE `tabel_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
