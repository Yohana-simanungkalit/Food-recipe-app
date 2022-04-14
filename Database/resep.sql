-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 08 Apr 2022 pada 16.05
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resep`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `resepmakanan`
--

CREATE TABLE `resepmakanan` (
  `id` int(11) NOT NULL,
  `nama_penulis` varchar(200) NOT NULL,
  `judul_makanan` varchar(50) NOT NULL,
  `bahan` varchar(255) NOT NULL,
  `langkah-langkah` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resepmakanan`
--

INSERT INTO `resepmakanan` (`id`, `nama_penulis`, `judul_makanan`, `bahan`, `langkah-langkah`) VALUES
(8, 'Yohana Simanungkalit', 'Resep Salted Egg Chicken', '500 g filet dada ayam tanpa kulit, potong kotak 3 cm\r\n2 bungkus Royco, Bumbu Siap Pakai Ayam Saus Telur Asin,1 sdt garam ,1 sdt bawang putih bubuk\r\n,1 sdt merica putih bubuk, 6 sdm tepung maizena, 5 siung bawang putih, cincang halus, 8 buah cabai rawit me', '1. Lumuri daging ayam dengan garam, bawang putih bubuk, dan merica secara merata. Diamkan selama 10-15 menit.\r\n2. Lumuri daging ayam dengan tepung maizena. Sisihkan.\r\n3 Panaskan minyak, goreng daging ayam hingga matang. Angkat dan tiriskan.\r\n4 Panaskan margarin, tumis bawang putih dan cabai hingga harum. Masukkan daun kari, aduk hingga harum. Tambahkan Royco Bumbu Siap Pakai Ayam Saus Telur Asin, aduk hingga larut bersama margarin. Angkat.\r\n5 Masukkan daging ayam goreng, aduk hingga tersalut rat'),
(9, 'Angel Nathalie', 'Resep Nasi Goreng Rempah', '4. porsi nasi putih, 300 g daging sapi has dalam, iris tipis, 100 g sawi hijau, potong 2 cm,\r\n5 lembar daun jeruk, 2 batang serai memarkan, 2 bungkus Bango Bumbu Nasi Goreng Kambing Khas Jakarta, 3 sdm minyak, untuk menumis\r\nPelengkap: telur mata sapi tom', '1. Panaskan minyak, tumis daun jeruk dan serai hingga harum. Masukkan daging sapi, masak hingga setengah matang.\r\n\r\n2. Tambahkan Bango Bumbu Kuliner Nusantara Nasi Goreng Kambing Khas Jakarta, aduk rata. Masak hingga daging matang.\r\n\r\n3. Masukkan nasi, masak sambil diaduk hingga bumbu meresap. Tambahkan sawi, aduk hingga sawi layu dan matang. Angkat. Sajikan bersama pelengkap.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resepmakanan`
--
ALTER TABLE `resepmakanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `resepmakanan`
--
ALTER TABLE `resepmakanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
