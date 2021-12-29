-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2021 pada 07.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sbu_surat`
--

CREATE TABLE `sbu_surat` (
  `id` int(11) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `pb_umku` varchar(50) NOT NULL,
  `nama_pelaku_usaha` varchar(100) NOT NULL,
  `nib` varchar(100) NOT NULL,
  `alamat_kantor` longtext NOT NULL,
  `kd_pos_kantor` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `klbi` varchar(100) NOT NULL,
  `lokasi_usaha` longtext NOT NULL,
  `kd_pos_usaha` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sbu_surat`
--

INSERT INTO `sbu_surat` (`id`, `qr_code`, `pb_umku`, `nama_pelaku_usaha`, `nib`, `alamat_kantor`, `kd_pos_kantor`, `status`, `klbi`, `lokasi_usaha`, `kd_pos_usaha`, `date`) VALUES
(13, 'qr_48757086d23f648367187236de923ef1.png', '1273917283789127831892', 'Muhammad Royyan Zamzami', '217238917231', 'Kebon Agung Residence H32 Dusun Sonotengah Kecamatan Pakisaji Kabupaten Malang', '65162', 'TES', 'TES', 'No.F -150, Jalan Klampis Anom VIII, Klampis Ngasem, Sukolilo, Surabaya City', '65142', '2021-12-29'),
(14, 'qr_bfe5a2b511719cbf40dc2c8248552b4f.png', '19273891823718927389', 'PT. Piramida Teknologi Informasi', '192387817283192', 'No.F -150, Jalan Klampis Anom VIII, Klampis Ngasem, Sukolilo, Surabaya City', '65162', 'TES', 'TES', 'No.F -150, Jalan Klampis Anom VIII, Klampis Ngasem, Sukolilo, Surabaya City', '65142', '2021-12-29'),
(15, 'qr_cd09f79e918af2731689c6737ab440a4.png', '1287361263718', 'TES', '182361263128', 'TES12', '123123', 'TES', 'TES', '1283718239', '1823', '2021-12-29'),
(16, 'qr_1b9f5de93840ca0f87b827ed8a3fde29.png', '123891829381092381093', 'Akhdan', '12312381', 'Klampis', '19283', 'TES', 'TES', 'Jemursari', '12312', '2021-12-29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sbu_surat`
--
ALTER TABLE `sbu_surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sbu_surat`
--
ALTER TABLE `sbu_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
