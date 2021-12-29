-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2021 pada 17.54
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

INSERT INTO `sbu_surat` (`id`, `pb_umku`, `nama_pelaku_usaha`, `nib`, `alamat_kantor`, `kd_pos_kantor`, `status`, `klbi`, `lokasi_usaha`, `kd_pos_usaha`, `date`) VALUES
(1, '123182639127389127', 'CV RAFRIEL BLESSING', '9120305892088', 'JL. SAUDARA UJUNG GG. BARU 1 NO. 13, Desa/Kelurahan Sudirejo 1,\nKec. Medan Kota, Kota Medan, Provinsi Sumatera Utara', '65142', 'Penanaman Modal Dalam Negeri (PMDN)', '41012 - Konstruksi Gedung Perkantoran', 'Jl. Saudara Gg. Baru 1 No. 13 Desa/Kelurahan Sudirejo 1, Kec. Medan Kota, Kota Medan, Provinsi Sumat', '65162', '2021-12-28'),
(3, '19728397109283912830', 'Muhammad Royyan Zamzami', '9281908192381', 'Kebon Agung Residence H32 Dusun Sonotengah Kecamatan Pakisaji Kabupaten Malang', '65162', 'Penanaman Modal Dalam Negeri (PMDN)', 'A\"SLDKHGAHS', 'Kebon Agung Residence H32 Dusun Sonotengah Kecamatan Pakisaji Kabupaten Malang', '65142', '2021-12-27'),
(4, '1230918293812', 'PT SEJAHTERA ABADI', '8192839102', 'Kebon Agung Residence H32 Dusun Sonotengah Kecamatan Pakisaji Kabupaten Malang', '65162', 'Penanaman Modal Dalam Negeri (PMDN)', 'Banyak', 'Kebon Agung Residence H32 Dusun Sonotengah Kecamatan Pakisaji Kabupaten Malang', '65162', '2021-12-28');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
