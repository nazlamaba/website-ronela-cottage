-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Jul 2022 pada 07.45
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ronela_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `fullname`) VALUES
(8, 'lissa', '123', 'lisa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
`id_harga` int(11) NOT NULL,
  `lama_sewa` text NOT NULL,
  `harga_sewa` text NOT NULL,
  `id_mobil` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id_harga`, `lama_sewa`, `harga_sewa`, `id_mobil`) VALUES
(1, '3 hari', 'Rp 1.000.000', 17),
(2, '7 Hari', 'Rp 2.000.000', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
`id_mobil` int(11) NOT NULL,
  `plat_nomor` text NOT NULL,
  `nama_mobil` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `id_tipe` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `plat_nomor`, `nama_mobil`, `foto`, `id_tipe`) VALUES
(17, 'DE121341AE', 'TOYOTA AVANZA', 'avanza.jpg', 1),
(18, 'DE 12323 AE', 'ERTIGA', 'ertiga.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE IF NOT EXISTS `penginapan` (
`id_hotel` int(11) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `harga` text NOT NULL,
  `tipe` text NOT NULL,
  `fasilitas` text NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_hotel`, `no_kamar`, `harga`, `tipe`, `fasilitas`, `foto`) VALUES
(17, 101, '300000', 'Ekstra', 'KING BED, CHARGE', 'IMG_20220512_154401_677.jpg'),
(18, 102, '250000', 'Sedang', 'Singel Bed ', 'IMG_20220512_154401_677.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
`id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id_user`, `username`, `password`, `fullname`, `alamat`, `nohp`) VALUES
(7, 'echa', 'echa', 'CYRILO ELSOIN', 'MANGGA DUA', '082234567892'),
(8, 'elsoin_05', '123', 'Paul Elsoin', 'Benteng Atas', '082248906325');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reserv_mobil`
--

CREATE TABLE IF NOT EXISTS `reserv_mobil` (
`id_reserv` int(11) NOT NULL,
  `res_code` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `feri` varchar(100) NOT NULL,
  `driver` text NOT NULL,
  `nama_mobil` text NOT NULL,
  `lama_sewa` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `id_harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reserv_mobil`
--

INSERT INTO `reserv_mobil` (`id_reserv`, `res_code`, `tanggal_berangkat`, `waktu_berangkat`, `feri`, `driver`, `nama_mobil`, `lama_sewa`, `harga`, `status`, `id_harga`, `id_user`) VALUES
(10, 386279154, '0000-00-00', '06:00:00', 'Pukul 08:00 WIT', 'Tanpa Driver', 'TOYOTA AVANZA', '3 hari', 'Rp 1.000.000', 'Proses', 1, 7),
(11, 394867521, '2022-03-12', '20:28:00', 'Pukul 14:00 WIT', 'Tanpa Driver', 'TOYOTA AVANZA', '3 hari', 'Rp 1.000.000', 'Proses', 1, 8),
(12, 625847193, '2022-07-09', '13:31:00', 'Pukul 08:00 WIT', 'Tanpa Driver', 'TOYOTA AVANZA', '3 hari', 'Rp 1.000.000', 'Proses', 1, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reserv_penginapan`
--

CREATE TABLE IF NOT EXISTS `reserv_penginapan` (
`id_penginapan` int(11) NOT NULL,
  `res_code` int(11) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `waktu_masuk` time NOT NULL,
  `tgl_keluar` date NOT NULL,
  `harga` text NOT NULL,
  `status` text NOT NULL,
  `id_hotel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reserv_penginapan`
--

INSERT INTO `reserv_penginapan` (`id_penginapan`, `res_code`, `no_kamar`, `tgl_masuk`, `waktu_masuk`, `tgl_keluar`, `harga`, `status`, `id_hotel`, `id_user`) VALUES
(5, 697458312, 102, '2022-05-27', '12:03:00', '2022-05-28', '2000000', 'Selesai', 18, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_mobil`
--

CREATE TABLE IF NOT EXISTS `tipe_mobil` (
`id_tipe` int(11) NOT NULL,
  `mobil_tipe` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_mobil`
--

INSERT INTO `tipe_mobil` (`id_tipe`, `mobil_tipe`) VALUES
(1, 'MINI BUS'),
(2, 'BUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
 ADD PRIMARY KEY (`id_harga`), ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
 ADD PRIMARY KEY (`id_mobil`), ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
 ADD PRIMARY KEY (`id_hotel`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `reserv_mobil`
--
ALTER TABLE `reserv_mobil`
 ADD PRIMARY KEY (`id_reserv`), ADD KEY `id_harga` (`id_harga`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `reserv_penginapan`
--
ALTER TABLE `reserv_penginapan`
 ADD PRIMARY KEY (`id_penginapan`), ADD KEY `id_hotel` (`id_hotel`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tipe_mobil`
--
ALTER TABLE `tipe_mobil`
 ADD PRIMARY KEY (`id_tipe`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `reserv_mobil`
--
ALTER TABLE `reserv_mobil`
MODIFY `id_reserv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reserv_penginapan`
--
ALTER TABLE `reserv_penginapan`
MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tipe_mobil`
--
ALTER TABLE `tipe_mobil`
MODIFY `id_tipe` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `harga`
--
ALTER TABLE `harga`
ADD CONSTRAINT `harga_ibfk_1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`);

--
-- Ketidakleluasaan untuk tabel `mobil`
--
ALTER TABLE `mobil`
ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `tipe_mobil` (`id_tipe`);

--
-- Ketidakleluasaan untuk tabel `reserv_mobil`
--
ALTER TABLE `reserv_mobil`
ADD CONSTRAINT `reserv_mobil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengunjung` (`id_user`),
ADD CONSTRAINT `reserv_mobil_ibfk_2` FOREIGN KEY (`id_harga`) REFERENCES `harga` (`id_harga`);

--
-- Ketidakleluasaan untuk tabel `reserv_penginapan`
--
ALTER TABLE `reserv_penginapan`
ADD CONSTRAINT `reserv_penginapan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pengunjung` (`id_user`),
ADD CONSTRAINT `reserv_penginapan_ibfk_2` FOREIGN KEY (`id_hotel`) REFERENCES `penginapan` (`id_hotel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
