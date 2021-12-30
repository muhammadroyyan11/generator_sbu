-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2021 pada 22.20
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
-- Struktur dari tabel `kualifikasi_subklasifikasi`
--

CREATE TABLE `kualifikasi_subklasifikasi` (
  `id_ks` int(11) NOT NULL,
  `kualifikasi` varchar(255) NOT NULL,
  `kd_subkla` varchar(255) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `klbi` varchar(255) NOT NULL,
  `subklasifikasi` varchar(255) NOT NULL,
  `nama_pjskbu` varchar(255) NOT NULL,
  `no_nama_pjskbu` varchar(255) NOT NULL,
  `pemenuhan_kewajiban` varchar(255) NOT NULL,
  `id_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kualifikasi_subklasifikasi`
--

INSERT INTO `kualifikasi_subklasifikasi` (`id_ks`, `kualifikasi`, `kd_subkla`, `sifat`, `klbi`, `subklasifikasi`, `nama_pjskbu`, `no_nama_pjskbu`, `pemenuhan_kewajiban`, `id_surat`) VALUES
(1, 'Besar', 'BS001', 'Umum', '42101', 'Konstruksi Bangunan Sipil Jalan\r\n', 'RIO YUDA PERDANA, ST', '122021151091931713', ' TERPENUHI', 16),
(5, 'Kecil', 'BS0011', 'Umum', 'TES', 'Konstruksi Bangunan Sipil Gedung', 'Muhammad Royyan Zamzami', '912830918023123', '', 18),
(6, 'Sedang', 'BS001', 'Umum', 'TES', 'Gedung', 'Muhammad Royyan Zamzami', '912830918023123', '', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemenuhan_komitmen`
--

CREATE TABLE `pemenuhan_komitmen` (
  `id_pk` int(11) NOT NULL,
  `perizinan_berusaha` varchar(255) NOT NULL,
  `pemenuhan_kewajiban` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemenuhan_komitmen`
--

INSERT INTO `pemenuhan_komitmen` (`id_pk`, `perizinan_berusaha`, `pemenuhan_kewajiban`, `keterangan`, `id_surat`) VALUES
(1, 'Laporan Kegiatan Usaha Tahunan', 'Belum Terpenuhi', 'Satu kali dalam\r\nsetahun selama\r\nmelaksanakan\r\nkegiatan usaha', 16),
(2, 'Menerapkan Sistem Manajemen Mutu', 'Belum Terpenuhi', 'Paling lambat satu\r\ntahun setelah SBU\r\nterbit', 16),
(5, 'Menerapkan Sistem Manajemen Mutu', 'Terpenuhi', 'Paling lambat satu tahun setelah SBU terbit', 18);

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
(16, 'qr_1b9f5de93840ca0f87b827ed8a3fde29.png', '123891829381092381093', 'Akhdan', '12312381', 'Klampis', '19283', 'TES', 'TES', 'Jemursari', '12312', '2021-12-29'),
(17, 'qr_bd8a56a170555757426aa519ef343e30.png', '2837891268371689273127', 'PT RIYAN ABADI SEJAHTERA', '123989128309182', 'Kolonel Sugiono gg5 ajyt87q2ehklawndklqnwkl', '1287381', 'PAY LATTER', 'UASYDUIASD', 'Kolonel Sugiono gg5 ajyt87q2ehklawndklqnwkl', '1287381', '2021-12-30'),
(18, 'qr_4297f44b13955235245b2497399d7a93.png', '123123', 'asdklansdkl', '123123', 'sdKSADKLASDKLAskldmkl', '123i123', 'AKSFKASMFKLM', 'asdkASDKL', 'LKD:LAKSL:AKSL:DKA:LSKDL:AKSLFKLSN MAS FLKANOK QEPOSM AMS LNWEKQPEQWPO', '123123', '2021-12-30'),
(19, 'qr_6d2bd5ef8c51263e8afcd2dbbecea19f.png', '085649888272', 'Muhammad Royyan Zamzami asasd', '123123123', 'Kebon Agung Residence H32 Dusun Sonotengah Kecamatan Pakisaji Kabupaten Malang', '65162', 'Test', '1293', 'TES', '81927812', '2021-12-30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kualifikasi_subklasifikasi`
--
ALTER TABLE `kualifikasi_subklasifikasi`
  ADD PRIMARY KEY (`id_ks`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indeks untuk tabel `pemenuhan_komitmen`
--
ALTER TABLE `pemenuhan_komitmen`
  ADD PRIMARY KEY (`id_pk`),
  ADD KEY `id_user` (`id_surat`);

--
-- Indeks untuk tabel `sbu_surat`
--
ALTER TABLE `sbu_surat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kualifikasi_subklasifikasi`
--
ALTER TABLE `kualifikasi_subklasifikasi`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemenuhan_komitmen`
--
ALTER TABLE `pemenuhan_komitmen`
  MODIFY `id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sbu_surat`
--
ALTER TABLE `sbu_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kualifikasi_subklasifikasi`
--
ALTER TABLE `kualifikasi_subklasifikasi`
  ADD CONSTRAINT `kualifikasi_subklasifikasi_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `sbu_surat` (`id`);

--
-- Ketidakleluasaan untuk tabel `pemenuhan_komitmen`
--
ALTER TABLE `pemenuhan_komitmen`
  ADD CONSTRAINT `pemenuhan_komitmen_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `sbu_surat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
