-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2020 pada 16.08
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desapanji`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(50) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `nama_paket`, `harga`, `keterangan`) VALUES
(1, 'Paket A', 1000000, 'Dengan memesan paket A, anda akan mendapatkan hak eksclusive seperti antar jemput, tour guide selama 2 hari, 1 kamar inap untuk 2 orang selama 2 hari 1 malam, kendaraan bermobil untuk 4 orang, 1 tiket masuk ke semua detinasi wisata'),
(2, 'Paket B', 400000, 'Paket B terdiri dari antar jemput pelanggan, 24jam tour guide, dan kendaraan bermobil untuk 4 oramg'),
(3, 'Paket S', 2000000, 'Dengan memesan paket A, anda akan mendapatkan hak eksclusive seperti antar jemput, tour guide selama 4 hari, 2 kamar inap untuk 2 orang selama 4 hari 3 malam, kendaraan bermobil untuk 4 orang, 4 tiket masuk ke semua detinasi wisata');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id_paket` int(50) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id_paket`, `nama_pemesan`, `no_hp`, `email`, `alamat`) VALUES
(1, 'suryawan', 813536409, 'suryaone266@gmail.com', 'desa panji'),
(1, 'suryawan', 813536409, 'suryaone266@gmail.com', 'desa panji');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`nama`, `password`, `nama_lengkap`, `no_hp`, `alamat`, `email`) VALUES
('suryawan', '123', 'I Gusti Kadek Ngurah Ari Suryawan', 81353640, 'desa panji', 'suryaone266@gmail.com'),
('duwek', '1234', 'duwek jaya', 2147483647, 'pantai penimbangan', 'duwek@gmail.com'),
('bayu', '12345', 'bayu pramana', 54879248, 'desa panji', 'bayu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
