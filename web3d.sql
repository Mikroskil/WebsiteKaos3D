-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Nopember 2013 jam 07:54
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web3d`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `baju`
--

CREATE TABLE IF NOT EXISTS `baju` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama_product` varchar(30) NOT NULL,
  `Harga` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `baju`
--

INSERT INTO `baju` (`no`, `nama_product`, `Harga`) VALUES
(1, 'Rainbom T-shirt', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
  `jumlah` int(11) NOT NULL,
  `product` varchar(30) NOT NULL,
  `nm_pembeli` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`jumlah`, `product`, `nm_pembeli`) VALUES
(2, 'Rainbom T-shirt', 'issyam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `title` varchar(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`title`, `firstname`, `lastname`, `email`, `username`, `pass`, `tanggal`, `alamat`, `telp`, `provinsi`, `kota`, `zip`) VALUES
('Mr.', 'issyam', 'syartawi', 'issyam_syartawi@ymail.com', 'issyam', '827ccb0eea8a706c4c34a16891f84e7b', '1994-10-21', 'jln.tanjung raya', '62618472818', 'sumatera utara', 'medan', '20124');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
