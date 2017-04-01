-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2017 pada 21.57
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `pweb`
--
CREATE DATABASE IF NOT EXISTS `pweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pweb`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `Berita_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Primary key',
  `Berita_judul` varchar(100) NOT NULL COMMENT 'Judul berita',
  `Berita_headline` text NOT NULL COMMENT 'Berita singkat',
  `Berita_isi` text NOT NULL COMMENT 'Berita lengkap',
  `Berita_author` varchar(15) NOT NULL COMMENT 'Penulis berita',
  `Berita_tanggal` datetime NOT NULL COMMENT 'Tanggal & waktu berita',
  PRIMARY KEY (`Berita_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`Berita_id`, `Berita_judul`, `Berita_headline`, `Berita_isi`, `Berita_author`, `Berita_tanggal`) VALUES
(1, 'ayam pak lurah disembelih, eh idup lagi', 'ternyata ayamnya punya ajian rawarontek', 'ternyata itu dipelajari oleh ayam dengan melihat sendiri apa yang dilakukan pak lurah tiap malam jumat', 'herpinakalkale', '2017-04-01 21:22:52'),
(4, 'saya', 'suka', 'makan', 'buah nanas', '2017-04-01 21:09:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `privilege` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `privilege`) VALUES
(1, 'dedek', 'adm123', 1),
(2, 'dodok', 'user123', 0),
(3, 'iin', 'user1', 0),
(4, 'aan', '', 0),
(5, 'abdul', 'admin1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
