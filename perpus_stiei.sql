-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2024 pada 09.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_stiei`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `tanggal` date NOT NULL,
  `npm` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_pengunjung` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `bulan` varchar(10) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jumlah_denda` int(11) NOT NULL,
  `total_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_baru`
--

CREATE TABLE `member_baru` (
  `nama` varchar(50) NOT NULL,
  `tempat / tanggal lahir` varchar(50) NOT NULL,
  `npm` varchar(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `tanggal` date NOT NULL,
  `npm` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `total_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `bulan` varchar(10) NOT NULL,
  `minggu` int(11) NOT NULL,
  `jenis_pengunjung` varchar(10) NOT NULL,
  `jumlah_pengunjung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `nama` (`nama`),
  ADD UNIQUE KEY `jenis_pengunjung` (`jenis_pengunjung`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`jumlah_denda`),
  ADD UNIQUE KEY `bulan` (`bulan`);

--
-- Indeks untuk tabel `member_baru`
--
ALTER TABLE `member_baru`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`npm`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`jenis_pengunjung`),
  ADD UNIQUE KEY `bulan` (`bulan`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `member_baru`
--
ALTER TABLE `member_baru`
  ADD CONSTRAINT `member_baru_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `absensi` (`npm`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `member_baru` (`npm`);

--
-- Ketidakleluasaan untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_1` FOREIGN KEY (`bulan`) REFERENCES `denda` (`bulan`),
  ADD CONSTRAINT `pengunjung_ibfk_2` FOREIGN KEY (`jenis_pengunjung`) REFERENCES `absensi` (`jenis_pengunjung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
