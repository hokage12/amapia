-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 09. April 2015 jam 16:05
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amapia_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `nID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`nID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`nID`, `nama_kategori`) VALUES
(1, 'Hunian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `properti`
--

CREATE TABLE IF NOT EXISTS `properti` (
  `nID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `jenis_properti` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `luas_kamar` varchar(30) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `penghuni_pria` int(11) NOT NULL,
  `penghuni_wanita` int(11) NOT NULL,
  `penghuni_keluarga` int(11) NOT NULL,
  `penghuni_suami_istri` int(11) NOT NULL,
  `penghuni_pria_wanita` int(11) NOT NULL,
  `mayoritas_penghuni` int(11) NOT NULL,
  `untuk_pria` int(11) NOT NULL,
  `untuk_wanita` int(11) NOT NULL,
  `untuk_keluarga` int(11) NOT NULL,
  `untuk_sumai_istri` int(11) NOT NULL,
  `umum_balkon` int(11) NOT NULL,
  `umum_kulkas` int(11) NOT NULL,
  `umum_tv` int(11) NOT NULL,
  `umum_tamu` int(11) NOT NULL,
  `umum_km` int(11) NOT NULL,
  `umum_lain` int(11) NOT NULL,
  `privat_kasur` int(11) NOT NULL,
  `privat_almari` int(11) NOT NULL,
  `privat_kursi` int(11) NOT NULL,
  `privat_ac` int(11) NOT NULL,
  `privat_kmd` int(11) NOT NULL,
  `privat_tv` int(11) NOT NULL,
  `umum_dapur` int(11) NOT NULL,
  `privat_meja` int(11) NOT NULL,
  `harian` int(11) NOT NULL,
  `mingguan` int(11) NOT NULL,
  `bulanan` int(11) NOT NULL,
  `tahunan` int(11) NOT NULL,
  `nohp_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(30) NOT NULL,
  `kebijakan` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`nID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `properti`
--

INSERT INTO `properti` (`nID`, `username`, `jenis_properti`, `nama`, `alamat`, `deskripsi`, `luas_kamar`, `jumlah_kamar`, `status`, `penghuni_pria`, `penghuni_wanita`, `penghuni_keluarga`, `penghuni_suami_istri`, `penghuni_pria_wanita`, `mayoritas_penghuni`, `untuk_pria`, `untuk_wanita`, `untuk_keluarga`, `untuk_sumai_istri`, `umum_balkon`, `umum_kulkas`, `umum_tv`, `umum_tamu`, `umum_km`, `umum_lain`, `privat_kasur`, `privat_almari`, `privat_kursi`, `privat_ac`, `privat_kmd`, `privat_tv`, `umum_dapur`, `privat_meja`, `harian`, `mingguan`, `bulanan`, `tahunan`, `nohp_pengelola`, `nama_pengelola`, `kebijakan`, `lat`, `lon`, `photo`, `verified`, `create_date`) VALUES
(2, 'laki', 1, 'dan aku mah apaa', 'hghg', '0', '0', 0, '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', '0', '0', '0', '_2015_03_30_23_25_22.png', 0, '2015-03-30 23:25:22'),
(3, 'laki', 2, 'tes', 'dsgsd', 'dsdfsdfsdf', '352', 34, 'Open house', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 3234, 324, 234, 3, 32523523, 'dfs', 'sdgsdg', '-7.5525480787851125', '110.81597708165646', '_2015_03_30_23_48_24.png', 0, '2015-03-30 23:48:24'),
(4, 'laki', 3, 'dsdf', 'erwer', 'werwe', '324', 234, 'Open house', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 34234, 324, 234234, 234234, 324234234, 'sdfsdf', 'sdfdf', '-7.554271068559585', '110.82380913197994', '_2015_03_31_00_02_17.png', 0, '2015-03-31 00:02:17'),
(5, 'laki', 4, '34543', '345', 'ertertert', '345345', 345, 'Rent', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '_2015_03_31_00_03_47.png', 0, '2015-03-31 00:03:47'),
(6, 'laki', 3, 'fgdf', 'fgdfg', 'fgdfg', '656', 45645, 'Rent', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '-7.5574617722186765', '110.8169212192297', '_2015_03_31_00_05_10.png', 0, '2015-03-31 00:05:10'),
(7, 'laki', 2, 'etwe', 'erwer', '<ul><ul><li><img alt="" src="http://"><img alt="" src="http://dfsd">dfsdfdsfsdfdfsdfsdf</li></ul></ul>', '324523', 34, 'Rent', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '_2015_03_31_00_21_33.png', 0, '2015-03-31 00:21:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `nID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkat` varchar(30) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`nID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`nID`, `nama_subkat`, `id_kategori`) VALUES
(1, 'Kost', 1),
(2, 'Apartement', 1),
(3, 'Kontrakan', 1),
(4, 'Villa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nID` bigint(20) NOT NULL AUTO_INCREMENT,
  `strUserName` varchar(100) NOT NULL,
  `strUserPassword` varchar(100) NOT NULL,
  `strUserHash` varchar(100) DEFAULT NULL,
  `nUserPrivilege` tinyint(4) DEFAULT NULL,
  `strFLName` varchar(100) DEFAULT NULL,
  `strCoName` varchar(100) DEFAULT NULL,
  `strTelNumber` varchar(100) DEFAULT NULL,
  `strAddress` varchar(100) DEFAULT NULL,
  `strEmail` varchar(200) DEFAULT NULL,
  `strRemark` varchar(100) DEFAULT NULL,
  `API` varchar(100) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `goplus` varchar(50) NOT NULL,
  `verify_email_code` varchar(100) DEFAULT NULL,
  `bVerified` tinyint(4) DEFAULT NULL,
  `idAgen` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_operator` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nID`),
  UNIQUE KEY `strUserName_2` (`strUserName`),
  UNIQUE KEY `strEmail` (`strEmail`),
  KEY `strUserName` (`strUserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nID`, `strUserName`, `strUserPassword`, `strUserHash`, `nUserPrivilege`, `strFLName`, `strCoName`, `strTelNumber`, `strAddress`, `strEmail`, `strRemark`, `API`, `photo`, `skype`, `phone`, `fb`, `twitter`, `goplus`, `verify_email_code`, `bVerified`, `idAgen`, `jenis_kelamin`, `create_date`, `create_operator`) VALUES
(1, 'laksana', 'ec9f4fedf9942614e0e78f177a5900d6', NULL, 1, 'Pradana Aditya Laksana', NULL, '085740358564', 'Pati City', 'aditya_pl@ymail.com', NULL, NULL, '', '', '', '', '', '', 'e5837a8c86b689fef26d33b199448a8f', 1, '', '', '2015-03-23 00:51:01', NULL),
(2, 'laki', 'ed5bba13cddaabf77fad631066e1c884', NULL, 1, 'Adon', NULL, '097677', 'jln ini', 'didit.1991@gmail.com', NULL, NULL, '_2015_04_01_21_23_13.png', 'xzvzc', '', 'xfzcvfghfggggggggggggggg', 'dfsdgfhfghfgh', 'sdfsdffhf', '972677acd241aac532727508eccfc2a9', 1, '', '', '2015-03-23 23:18:22', NULL),
(3, 'njn', 'd9b74d9b96ca0198409683b4feed744d', NULL, 1, 'Michael', NULL, '7897897', 'hhl', 'haha@ini.com', NULL, NULL, '', '', '', '', '', '', '67f208dced18b8a73b17816dfaa37deb', 1, '', '', '2015-03-25 23:25:15', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
