-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 05.11
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
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_brg`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(5, 'Rok', 'Rok Pendek untuk Anak', 'Pakaian Anak', 120000, 98, 'bawahanA_(4).jpeg'),
(12, 'Baju', 'Baju Anak Perempuan (Ungu)', 'Pakaian Anak', 110000, 99, 'Linen_Dress_Ropa_Ni_a_Kids_Wear_Kawaii_Princesa_Children_Clothes_Girl_Blue_Kleid_Vestidos_Casuales_Disfraz_2_a_os_Ruffle_Top_-_Purple___120cm_(5T)___China.jpg'),
(13, 'Kemeja', 'Kemeja Anak Laki-laki', 'Pakaian Anak', 150000, 99, '93c648af-65c1-4d80-9a74-c4c8409066c9.jpg'),
(14, 'Celana', 'Celana Anak Joger', 'Pakaian Anak', 100000, 99, 'bawahanA_(2).jpeg'),
(15, 'Macbook', 'MacBook pro 2015', 'Elektronik', 10700000, 12, 'Best_laptops_2023__Which__Best_Buys_and_expert_buying_advice_-_Which_.jpg'),
(16, 'AirPods', 'Apple AirPods Max - Silver', 'Elektronik', 8500000, 12, 'Apple_AirPods_Max_-_Silver.jpg'),
(17, 'Radio', 'Retro Boombox Sharp', 'Elektronik', 1200000, 20, 'boom_box_-_-_Image_Search_Results.jpg'),
(18, 'Printer', 'Printer HP Laserjet P1102 wireless', 'Elektronik', 3700000, 30, 'download_(1).jpg'),
(19, 'Jaket', 'Retro Denim Blue ', 'Pakaian Pria', 500000, 80, '29_8US__2022_Mens_Casual_Cotton_Long_Sleeve_Shirts_Multi-pocket_Retro_Denim_Blue_Workwear_Male_Fashion_Clothes_-_Shirts_-_AliExpress.jpg'),
(20, 'Jaket', 'Denim Jacket Coat ', 'Pakaian Pria', 500000, 89, 'LONGBIDA_Men’s_Denim_Jacket_Coat_Classic_Fit_Trucker_Jacket_Casual_Jean_Top_with_Pockets.jpg'),
(21, 'Celana', 'Regular Cargo Pant Green', 'Pakaian Pria', 450000, 99, 'Carhartt_Wip_Regular_Cargo_Pant_Cypress_Rinsed_Green_Combats.jpg'),
(22, 'Dress', 'Dress Brown', 'Pakaian Wanita', 700000, 85, '週5スカート派が選ぶ！冬の10着は？【福田麻琴さん×12closet】___LEE.jpg'),
(23, 'T-Shirt', 'Color Brown', 'Pakaian Wanita', 300000, 100, 'Luxury_fashion_independent_designers___SSENSE.jpg'),
(24, 'T-Shirt', 'Color Cream', 'Pakaian Wanita', 350000, 100, '08ee1b3a-37dc-487f-9429-0ae4c25c2efa.jpg'),
(26, 'Bola Basket', 'Molten Basketball', 'Peralatan Olahraga', 230000, 110, 'Molten_Basketball_B7G4500-PL.jpg'),
(27, 'Bola Voli', 'Mikasa Volyball', 'Peralatan Olahraga', 400000, 120, 'aa1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Kelsyluna Violeta Meilianadena', 'sawah', '2023-11-12 09:45:22', '2023-11-13 09:45:22'),
(2, 'admin', 'sawah', '2023-11-12 09:55:06', '2023-11-13 09:55:06'),
(3, 'bbbbbbbbbb', 'aaaa', '2023-11-12 09:56:41', '2023-11-13 09:56:41'),
(5, 'admin', 'aaaa', '2023-11-12 09:58:08', '2023-11-13 09:58:08'),
(6, 'Melan', 'yt', '2023-11-12 10:52:04', '2023-11-13 10:52:04'),
(7, 'bbbbbbbbbb', 'aaaa', '2023-11-12 13:58:50', '2023-11-13 13:58:50'),
(8, 'Kelsyluna Violeta Meilianadena', 'sawah', '2023-11-14 19:33:43', '2023-11-15 19:33:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Keysalena Misdona', 'keysalena', '2501', 1),
(2, 'Melany', 'melany', '2005', 2),
(3, 'Kelsyluna Violeta Meilianadena', 'melany', '123', 2),
(4, 'user', '123', '123', 2),
(5, 'kodok', 'kodokngorek', '$2y$10$WMYN3som0yz9IvHoj5mkjermq7H/v5BAsk/UNo58d7t', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 23, 23, 'ssssssd', 23, 23, 'sdddddx'),
(2, 1, 2, 'hiro', 1, 1000000000, ''),
(3, 2, 5, 'rok anak', 1, 120000, ''),
(4, 3, 2, 'hiro', 2, 1000000000, ''),
(5, 5, 1, 'sepatu', 2, 100000, ''),
(6, 6, 1, 'sepatu', 1, 100000, ''),
(7, 6, 5, 'rok anak', 1, 120000, ''),
(8, 6, 11, 'Kemeja', 1, 200000, ''),
(9, 7, 5, 'Rok', 1, 120000, ''),
(10, 8, 5, 'Rok', 1, 120000, ''),
(11, 8, 12, 'Baju', 1, 110000, ''),
(12, 8, 13, 'Kemeja', 1, 150000, ''),
(13, 8, 14, 'Celana', 1, 100000, ''),
(14, 8, 21, 'Celana', 1, 450000, ''),
(15, 8, 20, 'Jaket', 1, 500000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
     UPDATE tbl_barang SET stok = stok-NEW.jumlah
     WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
