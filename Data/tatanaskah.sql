-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2012 at 10:57 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tatanaskah`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_sk`
--

CREATE TABLE IF NOT EXISTS `log_sk` (
  `kd_log_sk` int(10) unsigned NOT NULL auto_increment,
  `no_agenda_sk` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `tgl_update` datetime NOT NULL,
  `otoritas` varchar(45) NOT NULL,
  `no_surat_keluar` varchar(45) NOT NULL,
  `tgl_persetujuan` datetime NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `aktifitas` varchar(45) NOT NULL,
  PRIMARY KEY  USING BTREE (`kd_log_sk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=25 ;

--
-- Dumping data for table `log_sk`
--

INSERT INTO `log_sk` (`kd_log_sk`, `no_agenda_sk`, `username`, `tgl_update`, `otoritas`, `no_surat_keluar`, `tgl_persetujuan`, `ip_address`, `aktifitas`) VALUES
(1, '1', 'alhusna_99', '2012-04-30 11:14:57', '', '1/bb/vv/dd', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(2, '1', 'alhusna_99', '2012-04-30 11:30:11', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(3, '1', 'alhusna_99', '2012-05-01 16:48:55', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'delete'),
(4, '1', 'alhusna_99', '2012-05-01 16:49:59', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'delete'),
(5, '2', 'alhusna_99', '2012-05-15 11:22:39', '', '1/343/22', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(6, '3', 'alhusna_99', '2012-05-15 11:24:25', '', '3/dd/ff/s/', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(7, '4', 'alhusna_99', '2012-05-15 11:24:58', '', '4/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(8, '5', 'alhusna_99', '2012-05-15 11:25:34', '', '5/aa/bb/cc/dd', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(9, '6', 'alhusna_99', '2012-05-15 11:26:10', '', '6/SDS', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(10, '6', 'alhusna_99', '2012-05-15 14:51:58', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(11, '6', 'alhusna_99', '2012-05-15 14:54:38', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(12, '6', 'alhusna_99', '2012-05-15 14:56:30', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(13, '6', 'alhusna_99', '2012-05-15 14:57:20', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(14, '2', 'alhusna_99', '2012-05-15 14:58:03', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(15, '2', 'alhusna_99', '2012-05-15 15:01:48', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(16, '2', 'alhusna_99', '2012-05-15 15:24:57', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(17, '2', 'alhusna_99', '2012-05-15 15:25:43', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(18, '2', 'alhusna_99', '2012-05-15 15:27:07', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(19, '6', 'alhusna_99', '2012-05-15 15:27:37', '', '', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(20, '7', 'alhusna_99', '2012-05-21 01:53:47', '', '7/KPU/05/2012', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(21, '8', 'alhusna_99', '2012-05-21 01:54:34', '', '8/KPU/05/2012', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(22, '6', 'alhusna_99', '2012-05-21 09:47:37', '', '6/ST/05/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(23, '5', 'alhusna_99', '2012-05-21 09:48:23', '', '5/KPU/11/1996', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(24, '1', 'alhusna_99', '2012-05-21 09:48:53', '', '1/KPU/04/1995', '0000-00-00 00:00:00', '127.0.0.1', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `log_sm`
--

CREATE TABLE IF NOT EXISTS `log_sm` (
  `kd_log_sm` int(11) unsigned NOT NULL auto_increment,
  `username` varchar(45) default NULL,
  `tgl_update` varchar(45) default NULL,
  `otoritas` varchar(45) default NULL,
  `no_agenda_sm` int(10) unsigned default NULL,
  `no_surat_masuk` varchar(45) default NULL,
  `tgl_persetujuan` datetime default NULL,
  `ip_address` varchar(45) NOT NULL,
  `aktifitas` varchar(45) NOT NULL,
  PRIMARY KEY  USING BTREE (`kd_log_sm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `log_sm`
--

INSERT INTO `log_sm` (`kd_log_sm`, `username`, `tgl_update`, `otoritas`, `no_agenda_sm`, `no_surat_masuk`, `tgl_persetujuan`, `ip_address`, `aktifitas`) VALUES
(1, 'alhusna_99', '2012-04-30 11:13:27', '', 1, '1/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(2, 'alhusna_99', '2012-04-30 11:26:39', '', 1, '1/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(3, 'alhusna_99', '2012-04-30 11:27:17', '', 1, '1/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(4, 'alhusna_99', '2012-05-01 15:43:19', '', 1, '1/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'delete'),
(5, 'alhusna_99', '2012-05-14 12:14:37', '', 2, '2/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(6, 'alhusna_99', '2012-05-14 12:16:19', '', 2, '2/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'delete'),
(7, 'alhusna_99', '2012-05-14 12:17:20', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(8, 'alhusna_99', '2012-05-15 15:00:25', '', 4, '4/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(9, 'alhusna_99', '2012-05-15 15:32:30', '', 4, '4/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(10, 'alhusna_99', '2012-05-21 00:00:38', '', 5, '5/M/IX/2012', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(11, 'alhusna_99', '2012-05-21 00:23:42', '', 5, '5/M/IX/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(12, 'alhusna_99', '2012-05-21 00:24:10', '', 6, '6/M/U-K/2012', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(13, 'alhusna_99', '2012-05-21 00:59:38', '', 6, '6/M/U-K/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(14, 'alhusna_99', '2012-05-21 01:09:45', '', 7, '7/M/U-K/2012', '0000-00-00 00:00:00', '127.0.0.1', 'insert'),
(15, 'alhusna_99', '2012-05-21 01:33:13', '', 7, '7/M/U-K/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(16, 'alhusna_99', '2012-05-21 01:34:53', '', 7, '7/M/U-K/2012', '0000-00-00 00:00:00', '127.0.0.1', 'delete'),
(17, 'alhusna_99', '2012-05-21 01:36:23', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(18, 'alhusna_99', '2012-05-21 01:36:58', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(19, 'alhusna_99', '2012-05-21 01:37:12', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(20, 'alhusna_99', '2012-05-21 01:44:17', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(21, 'alhusna_99', '2012-05-21 01:45:44', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(22, 'alhusna_99', '2012-05-21 01:49:59', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(23, 'alhusna_99', '2012-05-21 01:50:12', '', 3, '3/aa/bb/cc', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(24, 'alhusna_99', '2012-05-21 02:10:38', '', 4, '4/M/I/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(25, 'alhusna_99', '2012-05-21 02:28:56', '', 4, '4/M/U-SJ/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(26, 'alhusna_99', '2012-05-21 02:37:20', '', 4, '4/M/I/2012', '0000-00-00 00:00:00', '127.0.0.1', 'update'),
(27, 'alhusna_99', '2012-05-21 09:44:32', '', 3, '3/M/U-K/1993', '0000-00-00 00:00:00', '127.0.0.1', 'update');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id_user` int(11) NOT NULL auto_increment,
  `username` varchar(45) default NULL,
  `password` varchar(45) default NULL,
  `nama` varchar(45) default NULL,
  `Jenis_Kelamin` varchar(6) default NULL,
  `alamat` varchar(200) default NULL,
  `email` varchar(45) default NULL,
  `no_telp` varchar(45) default NULL,
  `tgl_daftar` datetime NOT NULL,
  `jabatan` varchar(45) default NULL,
  `Privilege` varchar(45) default NULL,
  `flag` varchar(1) NOT NULL,
  `pert_p` varchar(100) default NULL,
  `pert_d` varchar(100) default NULL,
  `jwb_p` varchar(45) default NULL,
  `jwb_d` varchar(45) default NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id_user`, `username`, `password`, `nama`, `Jenis_Kelamin`, `alamat`, `email`, `no_telp`, `tgl_daftar`, `jabatan`, `Privilege`, `flag`, `pert_p`, `pert_d`, `jwb_p`, `jwb_d`) VALUES
(1, 'alhusna_99', '52c69e3a57331081823331c4e69d3f2e', 'Aries Dimas Yudhistira', 'Pria', 'Jl.Warakas 4 Gg 17 no.32', 'alhusna_99@yahoo.co.id', '02191999631', '2012-04-15 00:00:00', 'EDI', 'Operator', '1', '', '', '', ''),
(2, 'mimin', '52c69e3a57331081823331c4e69d3f2e', 'tukimin', 'Pria', 'Jl, kaskus no.40 ', 'tukimin@yahoo.com', '555-89085274', '2012-04-15 00:00:00', 'Bag. IT', 'Admin', '1', '', '', '', ''),
(3, 'diah_ayu', '52c69e3a57331081823331c4e69d3f2e', 'Diah Ayu', 'Wanita', 'Jl. Imam Bonjol no.45', 'diah_ayu@yahoo.com', '02196382274', '2012-04-15 00:00:00', 'Pimpinan', 'Pimpinan', '1', '', '', '', ''),
(4, 'va_only', '52c69e3a57331081823331c4e69d3f2e', 'Elva Lestari', 'Wanita', 'alamat', 'va_only75@yahoo.com', '02191888621', '2012-05-21 09:32:49', 'EDI', 'Operator', '1', NULL, NULL, NULL, NULL),
(5, 'kusairi', '084e0343a0486ff05530df6c705c8bb4', 'hahaha', 'Pria', 'aaaaa', 'a.kusairi@rocketmail.com', '0213456', '2012-05-21 09:35:54', 'aaaa', 'Operator', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `no_agenda_sk` int(11) NOT NULL auto_increment,
  `no_surat_keluar` varchar(45) default NULL,
  `tgl_surat` date default NULL,
  `perihal` varchar(45) default NULL,
  `tujuan` varchar(45) default NULL,
  `pengirim` varchar(45) default NULL,
  `status` varchar(45) default NULL,
  `sifat` varchar(45) default NULL,
  `ringkasan` varchar(300) default NULL,
  `lampiran` varchar(45) default NULL,
  `attachment` varchar(100) default NULL,
  `catatan` varchar(200) default NULL,
  `id_user` varchar(45) default NULL,
  `tgl_update` varchar(45) default NULL,
  `otoritas` varchar(45) default NULL,
  `tgl_persetujuan` datetime default NULL,
  `ip_address` varchar(45) character set latin1 collate latin1_bin NOT NULL,
  `flag` varchar(1) NOT NULL,
  PRIMARY KEY  (`no_agenda_sk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_agenda_sk`, `no_surat_keluar`, `tgl_surat`, `perihal`, `tujuan`, `pengirim`, `status`, `sifat`, `ringkasan`, `lampiran`, `attachment`, `catatan`, `id_user`, `tgl_update`, `otoritas`, `tgl_persetujuan`, `ip_address`, `flag`) VALUES
(1, '1/KPU/04/1995', '1995-04-15', 'perihal', 'tujuan', 'Surat Keluar Ketua', 'status', 'sifat', 'ringkasan', 'lampiran', 'FCO TO PT. DIP 6100-6300 (Mr. Guntur).pdf', 'catatan ini sudah di edit', 'alhusna_99', '2012-05-21 09:48:53', NULL, NULL, '127.0.0.1', '1'),
(2, '1/343/22', '2012-05-21', 'perihal', 'tujuan', 'Surat Keluar Ketua', 'status', 'sifat', 'ringkasan', 'lampiran', '46963116-Sejarah-Dinasti-Safawi.pdf', 'catatan', 'alhusna_99', '2012-05-15 15:27:07', NULL, NULL, '127.0.0.1', '1'),
(3, '3/dd/ff/s/', '1995-06-14', 'perihal', 'tujuan', 'Surat Keluar Ketua', 'status', 'sifat', 'ringkasan', '', '3098_MATERI_1.PDF', 'catatan', 'alhusna_99', '2012-05-15 11:24:25', NULL, NULL, '127.0.0.1', '1'),
(4, '4/aa/bb/cc', '1998-11-08', 'perihal', 'tujuan', 'Surat Keluar Ketua', 'status', 'sifat', 'ringkasan', 'lampiran', 'analisasistem.pdf', 'catatan', 'alhusna_99', '2012-05-15 11:24:58', NULL, NULL, '127.0.0.1', '1'),
(5, '5/KPU/11/1996', '1996-11-07', 'PERI', 'tujuan', 'Surat Keluar Ketua', 'STATUS', 'SIFAT', 'RINGKASAN', 'LAMPIRAN', '2-15.pdf', 'CATATAN', 'alhusna_99', '2012-05-21 09:48:23', NULL, NULL, '127.0.0.1', '1'),
(6, '6/ST/05/2012', '2012-05-21', 'PERIHAL', 'T', 'Surat Tugas', 'status', 'SIFAT', 'RINGKASAN', 'lampiran', 'AnalisaDanPerancanganOO.pdf', 'CATATAN', 'alhusna_99', '2012-05-21 09:47:37', NULL, NULL, '127.0.0.1', '1'),
(7, '7/KPU/05/2012', '2012-05-01', '', 'tujuan', 'Surat Keluar Ketua', '', '', '', '', 'Proses Bisnis Lain.pdf', '', 'alhusna_99', '2012-05-21 01:53:47', NULL, NULL, '127.0.0.1', '1'),
(8, '8/KPU/05/2012', '2012-05-02', '', 'ggggg', 'Surat Keluar Ketua', '', '', '', '', 'Pemodelan Proses Bisnis.pdf', '', 'alhusna_99', '2012-05-21 01:54:34', NULL, NULL, '127.0.0.1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `no_agenda_sm` int(11) NOT NULL auto_increment,
  `no_surat_masuk` varchar(45) default NULL,
  `tgl_surat` date default NULL,
  `perihal` varchar(45) default NULL,
  `tujuan` varchar(45) default NULL,
  `pengirim` varchar(45) default NULL,
  `status` varchar(45) default NULL,
  `sifat` varchar(45) default NULL,
  `ringkasan` varchar(300) default NULL,
  `lampiran` varchar(45) default NULL,
  `attachment` varchar(100) default NULL,
  `catatan` varchar(200) default NULL,
  `id_user` varchar(45) default NULL,
  `tgl_update` varchar(45) default NULL,
  `otoritas` varchar(45) default NULL,
  `tgl_persetujuan` datetime default NULL,
  `ip_address` varchar(45) NOT NULL,
  `flag` varchar(1) NOT NULL,
  PRIMARY KEY  (`no_agenda_sm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_agenda_sm`, `no_surat_masuk`, `tgl_surat`, `perihal`, `tujuan`, `pengirim`, `status`, `sifat`, `ringkasan`, `lampiran`, `attachment`, `catatan`, `id_user`, `tgl_update`, `otoritas`, `tgl_persetujuan`, `ip_address`, `flag`) VALUES
(1, '1/aa/bb/cc', '1995-07-03', 'perihal', 'Umum(Ketua)', 'pengirim', 'status', 'sifat', 'ringkasan ini sudah di edit', 'lampiran', 'FCO TO PT. DIP 6100-6300 (Mr. Guntur).pdf', 'catatan', 'alhusna_99', '2012-04-30 11:27:17', NULL, NULL, '127.0.0.1', '1'),
(2, '2/aa/bb/cc', '1993-04-05', 'perihal', 'Umum(Ketua)', 'pengirim', 'status', 'sifat', 'ringkasan', 'lampiran', 'The_Travels_of_Ibn_BatÅ«ta.pdf', 'catatan', 'alhusna_99', '2012-05-14 12:14:37', NULL, NULL, '127.0.0.1', '0'),
(3, '3/M/U-K/1993', '1993-02-15', 'perihal', 'Umum(Ketua)', 'pengirim', 'status', 'sifat', 'ringkasan diedit jajajjajajaa', 'lampiran', 'AnalysisAndDesign.pdf', 'catatn sudah di edit', 'alhusna_99', '2012-05-21 09:44:32', NULL, NULL, '127.0.0.1', '1'),
(4, '4/M/I/2012', '2012-05-29', 'perihal', 'Perencanaan', 'pengirim diedit', 'status', '', '', '', 'digital_126906-PA-134-Perancangan arsitektur-Literatur.pdf', '', 'alhusna_99', '2012-05-21 02:37:20', NULL, NULL, '127.0.0.1', '1'),
(5, '5/M/IX/2012', '2012-05-29', 'perihal ini telah di edit ', 'Teknis + Humas', 'llaaaa', '', '', '', '', '1200965456(1).pdf', '', 'alhusna_99', '2012-05-21 00:23:42', NULL, NULL, '127.0.0.1', '1'),
(6, '6/M/U-K/2012', '2012-05-01', '', 'Umum(Ketua)', 'pengirim', '', '', '', '', 'surat kirim cargo tarungin.pdf', 'catatan telah di edit', 'alhusna_99', '2012-05-21 00:59:38', NULL, NULL, '127.0.0.1', '1'),
(7, '7/M/U-K/2012', '2012-05-01', '', 'Umum(Ketua)', 'pengirim', '', '', '', '', 'Desain dan Analisis Sistem Dari Suatu Sistem   Business 1_52.pdf', 'catatan sudah diedit', 'alhusna_99', '2012-05-21 01:33:13', NULL, NULL, '127.0.0.1', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
