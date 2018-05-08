-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Apr 2018 pada 08.01
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_retail`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

CREATE TABLE `activities` (
  `no` int(11) NOT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `parent` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`no`, `activity`, `waktu`, `id_user`, `parent`) VALUES
(3, 'Input Produk Baru', '2017-11-18 23:28:04', 1, 'Data'),
(4, 'Update Produk', '2017-11-18 16:28:33', 1, 'Data'),
(5, 'Export laporan pembelian berdasarkan tanggal', '2017-11-18 16:32:42', 1, 'Laporan'),
(6, 'Melakukan transaksi pembelian produk ke produsen', '2017-11-18 23:40:24', 1, 'Transaksi'),
(7, 'Melakukan transaksi pembayaran secara kredit', '2017-11-19 11:32:41', 1, 'Transaksi'),
(8, 'Input Pelanggan Baru', '2017-11-19 11:35:35', 1, 'Data'),
(9, 'Melakukan transaksi pembelian produk ke produsen', '2017-11-19 19:48:29', 1, 'Transaksi'),
(10, 'Melakukan transaksi penjualan produk ke pelanggan', '2017-11-19 19:50:35', 1, 'Transaksi'),
(11, 'Melakukan transaksi pembayaran secara kredit', '2017-11-19 19:51:57', 1, 'Transaksi'),
(12, 'Melakukan transaksi pembayaran secara kredit', '2017-11-19 19:58:48', 1, 'Transaksi'),
(13, 'Export laporan penjualan berdasarkan tanggal', '2017-11-19 20:00:08', 1, 'Laporan'),
(14, 'Melakukan transaksi pembelian produk ke produsen', '2017-11-22 07:05:24', 1, 'Transaksi'),
(15, 'Export laporan penjualan berdasarkan tanggal', '2017-11-22 07:47:19', 1, 'Laporan'),
(16, 'Melakukan transaksi penjualan produk ke pelanggan', '2017-11-22 07:58:27', 1, 'Transaksi'),
(17, 'Melakukan transaksi pembayaran secara kredit', '2017-11-22 07:59:17', 1, 'Transaksi'),
(18, 'Melakukan transaksi pembayaran secara tunai', '2017-11-22 08:18:57', 1, 'Transaksi'),
(19, 'Melakukan transaksi pembayaran secara kredit', '2017-11-22 08:19:26', 1, 'Transaksi'),
(20, 'Melakukan transaksi pembayaran secara kredit', '2017-11-22 08:19:37', 1, 'Transaksi'),
(21, 'Melakukan transaksi pembelian produk ke produsen', '2017-11-23 18:53:17', 1, 'Transaksi'),
(22, 'Melakukan transaksi penjualan produk ke pelanggan', '2017-11-23 18:55:55', 1, 'Transaksi'),
(23, 'Melakukan transaksi pembelian produk ke produsen', '2017-11-24 10:06:31', 1, 'Transaksi'),
(24, 'Export laporan pelanggan', '2017-11-30 18:24:22', 1, 'Laporan'),
(25, 'Input Pelanggan Baru', '2017-11-30 18:26:55', 1, 'Data'),
(26, 'Update pelanggan', '2017-11-30 18:27:25', 1, 'Data'),
(27, 'Input Produk Baru', '2017-11-30 18:29:39', 1, 'Data'),
(28, 'Melakukan transaksi pembelian produk ke produsen', '2017-11-30 18:31:04', 1, 'Transaksi'),
(29, 'Melakukan transaksi penjualan produk ke pelanggan', '2017-11-30 18:32:24', 1, 'Transaksi'),
(30, 'Melakukan transaksi pembayaran secara kredit', '2017-11-30 18:33:07', 1, 'Transaksi'),
(31, 'Melakukan transaksi pembayaran secara kredit', '2017-11-30 18:33:24', 1, 'Transaksi'),
(32, 'Melakukan transaksi pembayaran secara kredit', '2017-11-30 18:33:36', 1, 'Transaksi'),
(33, 'Export laporan penjualan berdasarkan tanggal', '2017-11-30 18:37:40', 1, 'Laporan'),
(34, 'Input Pelanggan Baru', '2017-12-17 06:42:33', 1, 'Data'),
(35, 'Delete pelanggan', '2017-12-17 06:42:52', 1, 'Data'),
(36, 'Export laporan pelanggan', '2017-12-17 06:43:24', 1, 'Laporan'),
(37, 'Export laporan pelanggan', '2017-12-17 06:43:28', 1, 'Laporan'),
(38, 'Input Produsen Baru', '2017-12-17 06:44:46', 1, 'Data'),
(39, 'Update Produsen', '2017-12-17 06:44:58', 1, 'Data'),
(40, 'Update Produsen', '2017-12-17 06:45:10', 1, 'Data'),
(41, 'Input Produk Baru', '2017-12-17 06:47:24', 1, 'Data'),
(42, 'Melakukan transaksi pembelian produk ke produsen', '2017-12-17 06:49:30', 1, 'Transaksi'),
(43, 'Melakukan transaksi penjualan produk ke pelanggan', '2017-12-17 06:50:30', 1, 'Transaksi'),
(44, 'Melakukan transaksi penjualan produk ke pelanggan', '2017-12-17 06:51:20', 1, 'Transaksi'),
(45, 'Melakukan transaksi pembayaran secara kredit', '2017-12-17 06:52:19', 1, 'Transaksi'),
(46, 'Melakukan transaksi pembayaran secara kredit', '2017-12-17 06:52:51', 1, 'Transaksi'),
(47, 'Melakukan transaksi pembayaran secara kredit', '2017-12-17 06:53:08', 1, 'Transaksi'),
(48, 'Melakukan transaksi pembayaran secara tunai', '2017-12-17 06:53:55', 1, 'Transaksi'),
(49, 'Export laporan pembelian berdasarkan tanggal', '2017-12-17 06:55:08', 1, 'Laporan'),
(50, 'Export laporan produsen', '2018-01-13 13:21:22', 1, 'Laporan'),
(51, 'Export laporan produsen', '2018-01-13 13:21:27', 1, 'Laporan'),
(52, 'Melakukan transaksi penjualan produk ke pelanggan', '2018-01-21 18:12:34', 1, 'Transaksi'),
(53, 'Melakukan transaksi pembayaran secara tunai', '2018-01-21 18:15:16', 1, 'Transaksi'),
(54, 'Melakukan transaksi penjualan produk ke pelanggan', '2018-01-25 17:42:02', 1, 'Transaksi'),
(55, 'Melakukan transaksi pembayaran secara kredit', '2018-01-25 17:42:22', 1, 'Transaksi'),
(56, 'Melakukan transaksi pembayaran secara kredit', '2018-01-25 17:42:35', 1, 'Transaksi'),
(57, 'Melakukan transaksi pembayaran secara kredit', '2018-01-25 17:42:47', 1, 'Transaksi'),
(58, 'Melakukan transaksi penjualan produk ke pelanggan', '2018-01-30 09:32:39', 1, 'Transaksi'),
(59, 'Melakukan transaksi pembayaran secara tunai', '2018-01-30 09:33:35', 1, 'Transaksi'),
(60, 'Melakukan transaksi pembayaran secara tunai', '2018-03-05 17:17:15', 1, 'Transaksi'),
(61, 'Update Produk', '2018-04-11 18:41:07', 1, 'Data'),
(62, 'Melakukan transaksi pembelian produk ke produsen', '2018-04-11 18:41:26', 1, 'Transaksi'),
(63, 'Melakukan transaksi penjualan produk ke pelanggan', '2018-04-11 18:42:30', 1, 'Transaksi'),
(64, 'Melakukan transaksi pembayaran secara kredit', '2018-04-11 18:50:03', 1, 'Transaksi'),
(65, 'Melakukan transaksi pembayaran secara kredit', '2018-04-11 18:52:40', 1, 'Transaksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cicilan`
--

CREATE TABLE `cicilan` (
  `kode_cicilan` varchar(20) NOT NULL,
  `no_pembayaran` varchar(20) NOT NULL,
  `tgl_cicilan` date NOT NULL,
  `kode_pelanggan` varchar(20) NOT NULL,
  `jumlah_cicilan` double NOT NULL,
  `cicilan_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cicilan`
--

INSERT INTO `cicilan` (`kode_cicilan`, `no_pembayaran`, `tgl_cicilan`, `kode_pelanggan`, `jumlah_cicilan`, `cicilan_ke`) VALUES
('PB2017112200002001', 'PB2017112200002', '2017-11-22', 'PEL00003', 800, 1),
('PB2017112200002002', 'PB2017112200002', '2017-11-22', 'PEL00003', 9000, 2),
('PB2017113000003001', 'PB2017113000003', '2017-11-30', 'PEL00024', 440, 1),
('PB2017113000003002', 'PB2017113000003', '2017-11-30', 'PEL00024', 54000, 2),
('PB2017113000003003', 'PB2017113000003', '2017-11-30', 'PEL00024', 1000, 3),
('PB2017121700004001', 'PB2017121700004', '2017-12-17', 'PEL00025', 9502, 1),
('PB2017121700004002', 'PB2017121700004', '2017-12-17', 'PEL00025', 19000, 2),
('PB2017121700004003', 'PB2017121700004', '2017-12-17', 'PEL00025', 1000, 3),
('PB2018012500007001', 'PB2018012500007', '2018-01-25', 'PEL00009', 7520, 1),
('PB2018012500007002', 'PB2018012500007', '2018-01-25', 'PEL00009', 30000, 2),
('PB2018012500007003', 'PB2018012500007', '2018-01-25', 'PEL00009', 10000, 3),
('PB2018041100010001', 'PB2018041100010', '2018-04-11', 'PEL00009', 7160, 1),
('PB2018041100010002', 'PB2018041100010', '2018-04-11', 'PEL00009', 600000, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembelian`
--

CREATE TABLE `detail_pembelian` (
  `kode_det_pembelian` varchar(20) NOT NULL,
  `kode_pembelian` varchar(20) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pembelian`
--

INSERT INTO `detail_pembelian` (`kode_det_pembelian`, `kode_pembelian`, `kode_produk`, `jumlah`) VALUES
('DPM00001', 'PEM00001', 'PR00001', 5),
('DPM00002', 'PEM00002', 'PR00001', 5),
('DPM00003', 'PEM00003', 'PR00002', 5),
('DPM00004', 'PEM00003', 'PR00003', 5),
('DPM00005', 'PEM00004', 'PR00001', 5),
('DPM00006', 'PEM00004', 'PR00002', 5),
('DPM00007', 'PEM00005', 'PR00001', 5),
('DPM00008', 'PEM00006', 'PR00001', 5),
('DPM00009', 'PEM00006', 'PR00003', 5),
('DPM00010', 'PEM00006', 'PR00006', 5),
('DPM00011', 'PEM00007', 'PR00004', 1),
('DPM00012', 'PEM00008', 'PR00001', 4),
('DPM00013', 'PEM00008', 'PR00002', 4),
('DPM00014', 'PEM00008', 'PR00003', 4),
('DPM00015', 'PEM00009', 'PR00010', 15),
('DPM00016', 'PEM00010', 'PR00001', 6),
('DPM00017', 'PEM00010', 'PR00002', 6),
('DPM00018', 'PEM00011', 'PR00001', 2),
('DPM00019', 'PEM00011', 'PR00002', 3),
('DPM00020', 'PEM00012', 'PR00009', 3),
('DPM00021', 'PEM00013', 'PR00005', 3),
('DPM00022', 'PEM00014', 'PR00012', 12),
('DPM00023', 'PEM00014', 'PR00013', 11),
('DPM00024', 'PEM00015', 'PR00010', 8),
('DPM00025', 'PEM00016', 'PR00001', 5),
('DPM00026', 'PEM00016', 'PR00002', 2),
('DPM00027', 'PEM00017', 'PR00001', 14),
('DPM00028', 'PEM00017', 'PR00002', 15),
('DPM00029', 'PEM00017', 'PR00003', 37),
('DPM00030', 'PEM00018', 'PR00015', 101),
('DPM00031', 'PEM00018', 'PR00014', 101),
('DPM00032', 'PEM00019', 'PR00017', 10),
('DPM00033', 'PEM00019', 'PR00016', 10),
('DPM00034', 'PEM00020', 'PR00009', 28);

--
-- Trigger `detail_pembelian`
--
DELIMITER $$
CREATE TRIGGER `update_stock_produk` AFTER INSERT ON `detail_pembelian` FOR EACH ROW BEGIN
	
	UPDATE produk SET stok = stok+NEW.jumlah WHERE kode_produk = NEW.kode_produk;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `kode_det_penjualan` varchar(20) NOT NULL,
  `kode_penjualan` varchar(20) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`kode_det_penjualan`, `kode_penjualan`, `kode_produk`, `nama_produk`, `harga_jual`, `qty`, `subtotal`) VALUES
('PJ2017111500001001', 'PJ2017111500001', 'PR00001', 'Mie Goreng Kuah', 2000, 2, 4000),
('PJ2017111500002001', 'PJ2017111500002', 'PR00001', 'Mie Goreng Kuah', 2000, 5, 10000),
('PJ2017111600003001', 'PJ2017111600003', 'PR00002', 'Mie Goreng', 3000, 3, 9000),
('PJ2017111600004001', 'PJ2017111600004', 'PR00010', 'Green Tea', 6000, 2, 12000),
('PJ2017111700005001', 'PJ2017111700005', 'PR00010', 'Green Tea', 6000, 3, 18000),
('PJ2017111700005002', 'PJ2017111700005', 'PR00009', 'BERGER', 90000, 4, 360000),
('PJ2017111900006001', 'PJ2017111900006', 'PR00012', 'Leo', 2000, 5, 10000),
('PJ2017111900006002', 'PJ2017111900006', 'PR00010', 'Green Tea', 6000, 5, 30000),
('PJ2017112200007001', 'PJ2017112200007', 'PR00001', 'Mie Goreng Kuah', 2000, 1, 2000),
('PJ2017112300008001', 'PJ2017112300008', 'PR00012', 'Leo', 2000, 3, 6000),
('PJ2017112300008002', 'PJ2017112300008', 'PR00010', 'Green Tea', 6000, 5, 30000),
('PJ2017113000009001', 'PJ2017113000009', 'PR00012', 'Leo', 2000, 4, 8000),
('PJ2017113000009002', 'PJ2017113000009', 'PR00010', 'Green Tea', 6000, 4, 24000),
('PJ2017113000009003', 'PJ2017113000009', 'PR00015', 'Pop Mie CUP', 6000, 4, 24000),
('PJ2017121700010001', 'PJ2017121700010', 'PR00017', 'Whole Cake Burn', 100000, 5, 500000),
('PJ2017121700010002', 'PJ2017121700010', 'PR00016', 'Morphine Cake', 120000, 5, 600000),
('PJ2017121700011001', 'PJ2017121700011', 'PR00015', 'Pop Mie CUP', 6000, 2, 12000),
('PJ2017121700011002', 'PJ2017121700011', 'PR00014', 'Mikuya Tori', 7800, 1, 7800),
('PJ2017121700011003', 'PJ2017121700011', 'PR00013', 'Chocochips', 10000, 1, 10000),
('PJ2018012100012001', 'PJ2018012100012', 'PR00012', 'Leo', 2000, 10, 20000),
('PJ2018012100012002', 'PJ2018012100012', 'PR00010', 'Green Tea', 6000, 4, 24000),
('PJ2018012100012003', 'PJ2018012100012', 'PR00009', 'BERGER', 90000, 49, 4410000),
('PJ2018012500013001', 'PJ2018012500013', 'PR00007', 'Mainan', 1000, 4, 4000),
('PJ2018012500013002', 'PJ2018012500013', 'PR00006', 'Sendok', 2000, 4, 8000),
('PJ2018012500013003', 'PJ2018012500013', 'PR00005', 'Skop', 4000, 9, 36000),
('PJ2018013000014001', 'PJ2018013000014', 'PR00007', 'Mainan', 1000, 6, 6000),
('PJ2018013000014002', 'PJ2018013000014', 'PR00006', 'Sendok', 2000, 4, 8000),
('PJ2018013000014003', 'PJ2018013000014', 'PR00005', 'Skop', 4000, 3, 12000),
('PJ2018041100015001', 'PJ2018041100015', 'PR00010', 'Green Tea', 6000, 9, 54000),
('PJ2018041100015002', 'PJ2018041100015', 'PR00009', 'BERGER', 90000, 7, 630000);

--
-- Trigger `detail_penjualan`
--
DELIMITER $$
CREATE TRIGGER `update_stock_produk2` AFTER INSERT ON `detail_penjualan` FOR EACH ROW BEGIN

	UPDATE produk SET stok = stok-NEW.qty WHERE kode_produk = NEW.kode_produk;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `kode_kredit` varchar(20) NOT NULL,
  `kode_penjualan` varchar(20) NOT NULL,
  `tgl_cicilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kode_pelanggan` varchar(20) NOT NULL,
  `tgl_registrasi` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(9) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`kode_pelanggan`, `tgl_registrasi`, `nama`, `alamat`, `no_telp`, `email`, `status`, `keterangan`, `id_user`) VALUES
('PEL00001', '2017-11-12', 'Aris', 'Cilaku', '089661568843', 'aris@aris.com', 'Aktif', 'Aris Si Petualang.', '1'),
('PEL00002', '2017-11-12', 'Udin', 'Cianjur', '08123', 'ud@ud.com', 'Aktif', 'Udin Hutang', '1'),
('PEL00003', '2017-11-12', 'Mahmud', 'Cianjur', '08123123', 'a@a.com', 'Aktif', 'Only', '1'),
('PEL00004', '2017-11-12', 'Ubed', 'Cianjur', '808123', 'a@a.com', 'Aktif', 'YA', '1'),
('PEL00005', '2017-11-13', 'Nisa', 'Bandung', '808123', 'b@b.com', 'Aktif', 'YA', '1'),
('PEL00006', '2017-11-14', 'Dini', 'Solo', '808123', 'c@c.com', 'Aktif', 'YA', '1'),
('PEL00007', '2017-11-15', 'Yopi', 'Madiun', '808123', 'd@d.com', 'Aktif', 'YA', '1'),
('PEL00008', '2017-11-16', 'Alfin', 'Bali', '808123', 'e@e.com', 'Aktif', 'YA', '1'),
('PEL00009', '2017-11-17', 'Nanda', 'Cianjur', '808123', 'f@f.com', 'Aktif', 'YA', '1'),
('PEL00010', '2017-11-18', 'Rifqi', 'Cianjur', '808123', 'g@g.com', 'Aktif', 'YA', '1'),
('PEL00011', '2017-11-12', 'Dini Fitri Amalia', 'Cianjur', '0891231211', 'dini@a.com', 'Aktif', 'Checkmate', '1'),
('PEL00012', '2017-11-12', 'Ricky', 'Cianjur', '08123', 'ubed@ubed', 'Aktif', 'Ubed Maiyeh', '1'),
('PEL00013', '2017-11-12', 'KAMPRET', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuy', '1'),
('PEL00014', '2017-11-12', 'GOIN', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuy', '1'),
('PEL00015', '2017-11-12', 'UDIN', 'Cianjur', '123', 'a@a.com', 'Aktif', 'NON', '1'),
('PEL00016', '2017-11-12', 'UP', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuys', '1'),
('PEL00017', '2017-11-12', 'YES', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuys', '1'),
('PEL00018', '2017-11-12', 'NO', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuy', '1'),
('PEL00019', '2017-11-12', 'PRO', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuy', '1'),
('PEL00020', '2017-11-12', 'ASE', 'Cianjur', '123', 'a@a.com', 'Aktif', 'Aktif Cuy', '1'),
('PEL00021', '2017-11-17', 'Ari TESTs', 'TESTs', 'TESTs', 'TESTs', 'Non-Aktif', 'Dihapus', '1'),
('PEL00022', '2017-11-18', 'Matthew', 'St. George Jackson', '080808080', 'jck@kamvang.com', 'Aktif', 'Oh yeah', '1'),
('PEL00023', '2017-11-19', 'Dini', 'Bojongherang', '009009090', 'i@i.com', 'Aktif', 'Aktif', '1'),
('PEL00024', '2017-11-30', 'Wildan', 'Cilaku', '08123', 'wildan@salt.com', 'Aktif', 'Aktif Menit', '1'),
('PEL00025', '2017-12-17', 'Firman', 'Cilaku', '083817122289', 'f@rman.com', 'Aktif', 'New User', '1'),
('PEL00026', '2017-12-17', 'Firman', 'Cilaku', '083817122289', 'f@rman.com', 'Non-Aktif', 'Dihapus', '1'),
('PEL00027', '2017-12-17', 'Allmight', 'New York', '089912', 'allmight@york.com', 'Aktif', 'New User From NY City', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `no_pembayaran` varchar(20) NOT NULL,
  `kode_penjualan` varchar(20) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `tipe_pembayaran` varchar(20) NOT NULL,
  `jumlah_bayar` double DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`no_pembayaran`, `kode_penjualan`, `tgl_bayar`, `tipe_pembayaran`, `jumlah_bayar`, `id_user`) VALUES
('PB2017112200001', 'PJ2017111500001', '2017-11-22', 'Tunai', 3920, 1),
('PB2017112200002', 'PJ2017111500002', '2017-11-22', 'Kredit', 9800, 1),
('PB2017113000003', 'PJ2017113000009', '2017-11-30', 'Kredit', 55440, 1),
('PB2017121700004', 'PJ2017121700011', '2017-12-17', 'Kredit', 29502, 1),
('PB2017121700005', 'PJ2017121700010', '2017-12-17', 'Tunai', 1089000, 1),
('PB2018012100006', 'PJ2018012100012', '2018-01-21', 'Tunai', 4409460, 1),
('PB2018012500007', 'PJ2018012500013', '2018-01-25', 'Kredit', 47520, 1),
('PB2018013000008', 'PJ2018013000014', '2018-01-30', 'Tunai', 25740, 1),
('PB2018030500009', 'PJ2017111600003', '2018-03-05', 'Tunai', 9180, 1),
('PB2018041100010', 'PJ2018041100015', '2018-04-11', 'Kredit', 607160, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `kode_pembelian` varchar(20) NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `kode_produsen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`kode_pembelian`, `tgl_pembelian`, `kode_produsen`) VALUES
('PEM00001', '2017-11-14', 'PROD00001'),
('PEM00002', '2017-11-14', 'PROD00001'),
('PEM00003', '2017-11-14', 'PROD00006'),
('PEM00004', '2017-11-14', 'PROD00001'),
('PEM00005', '2017-11-15', 'PROD00001'),
('PEM00006', '2017-11-15', 'PROD00014'),
('PEM00007', '2017-11-15', 'PROD00001'),
('PEM00008', '2017-11-16', 'PROD00001'),
('PEM00009', '2017-11-16', 'PROD00008'),
('PEM00010', '2017-11-17', 'PROD00014'),
('PEM00011', '2017-11-18', 'PROD00019'),
('PEM00012', '2017-11-18', 'PROD00017'),
('PEM00013', '2017-11-18', 'PROD00011'),
('PEM00014', '2017-11-19', 'PROD00012'),
('PEM00015', '2017-11-22', 'PROD00011'),
('PEM00016', '2017-11-23', 'PROD00014'),
('PEM00017', '2017-11-24', 'PROD00016'),
('PEM00018', '2017-11-30', 'PROD00019'),
('PEM00019', '2017-12-17', 'PROD00022'),
('PEM00020', '2018-04-11', 'PROD00020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `kode_penjualan` varchar(20) NOT NULL,
  `kode_pelanggan` varchar(20) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `tipe_pembayaran` varchar(20) NOT NULL,
  `diskon` int(11) NOT NULL,
  `pajak` double NOT NULL,
  `total_bayar` double NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`kode_penjualan`, `kode_pelanggan`, `tgl_penjualan`, `status`, `tipe_pembayaran`, `diskon`, `pajak`, `total_bayar`, `id_user`) VALUES
('PJ2017111500001', 'PEL00001', '2017-11-15', 'LUNAS', 'Tunai', 0, 80, 3920, 1),
('PJ2017111500002', 'PEL00003', '2017-11-15', 'LUNAS', 'Kredit', 0, 200, 9800, 1),
('PJ2017111600003', 'PEL00003', '2017-11-16', 'LUNAS', 'Tunai', 0, 180, 9180, 1),
('PJ2017111600004', 'PEL00010', '2017-11-16', 'BELUM LUNAS', 'Kredit', 0, 240, 12240, 1),
('PJ2017111700005', 'PEL00009', '2017-11-17', 'BELUM LUNAS', 'Tunai', 11340, 7560, 374220, 1),
('PJ2017111900006', 'PEL00023', '2017-11-19', 'BELUM LUNAS', 'Kredit', 1200, 800, 39600, 1),
('PJ2017112200007', 'PEL00001', '2017-11-22', 'BELUM LUNAS', 'Tunai', 0, 40, 2040, 1),
('PJ2017112300008', 'PEL00022', '2017-11-23', 'BELUM LUNAS', 'Tunai', 1080, 720, 35640, 1),
('PJ2017113000009', 'PEL00024', '2017-11-30', 'LUNAS', 'Kredit', 1680, 1120, 55440, 1),
('PJ2017121700010', 'PEL00027', '2017-12-17', 'LUNAS', 'Tunai', 33000, 22000, 1089000, 1),
('PJ2017121700011', 'PEL00025', '2017-12-17', 'LUNAS', 'Kredit', 894, 596, 29502, 1),
('PJ2018012100012', 'PEL00010', '2018-01-21', 'LUNAS', 'Tunai', 133620, 89080, 4409460, 1),
('PJ2018012500013', 'PEL00009', '2018-01-25', 'LUNAS', 'Kredit', 1440, 960, 47520, 1),
('PJ2018013000014', 'PEL00001', '2018-01-30', 'LUNAS', 'Tunai', 780, 520, 25740, 1),
('PJ2018041100015', 'PEL00009', '2018-04-11', 'BELUM LUNAS', 'Kredit', 20520, 13680, 677160, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kode_produk` char(20) NOT NULL,
  `tgl_pengisian` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `harga_pokok` double NOT NULL,
  `harga_jual` double NOT NULL,
  `stok` int(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`kode_produk`, `tgl_pengisian`, `nama`, `jenis_produk`, `harga_pokok`, `harga_jual`, `stok`, `status`, `keterangan`, `id_user`) VALUES
('PR00001', '2017-11-12', 'Mie Goreng Kuah', 'Food', 1000, 2000, 53, 'Aktif', 'Makanan Aneh', '1'),
('PR00002', '2017-11-12', 'Mie Goreng', 'Food', 1000, 3000, 57, 'Aktif', 'YE', '1'),
('PR00003', '2017-11-12', 'Mie Sarimi', 'Food', 1000, 2000, 71, 'Aktif', 'YE', '1'),
('PR00004', '2017-11-12', 'Batu Bata', 'Non-Food', 1000, 1000, 21, 'Aktif', 'YE', '1'),
('PR00005', '2017-11-12', 'Skop', 'Non-Food', 1000, 4000, 11, 'Aktif', 'YE', '1'),
('PR00006', '2017-11-12', 'Sendok', 'Non-Food', 1000, 2000, 17, 'Aktif', 'YE', '1'),
('PR00007', '2017-11-12', 'Mainan', 'Non-Food', 1000, 1000, 10, 'Aktif', 'YE', '1'),
('PR00008', '2017-11-12', 'Dudo', 'Non-Food', 1000, 5000, 20, 'Non-Aktif', 'YE', '1'),
('PR00009', '2017-11-12', 'BERGER', 'Food', 60000, 90000, 33, 'Aktif', 'Best food evar', '1'),
('PR00010', '2017-11-12', 'Green Tea', 'Food', 4000, 6000, 3, 'Aktif', 'Minuman Jepun', '1'),
('PR00011', '2017-11-12', 'Sandwich', 'Food', 60000, 90000, 5, 'Non-Aktif', 'Dihapus', '1'),
('PR00012', '2017-11-18', 'Leo', 'Food', 1000, 2000, 0, 'Aktif', 'Leo CIki panzer', '1'),
('PR00013', '2017-11-18', 'Chocochips', 'Food', 5000, 10000, 20, 'Aktif', 'Makanan enak', '1'),
('PR00014', '2017-11-30', 'Mikuya Tori', 'Food', 7000, 7800, 200, 'Aktif', 'Masih Banyak', '1'),
('PR00015', '2017-11-30', 'Pop Mie CUP', 'Food', 5000, 6000, 195, 'Aktif', 'Masih Banyak', '1'),
('PR00016', '2017-12-17', 'Morphine Cake', 'Food', 100000, 120000, 15, 'Aktif', 'New Product', '1'),
('PR00017', '2017-12-17', 'Whole Cake Burn', 'Food', 90000, 100000, 15, 'Aktif', 'Newest Thing From Heaven', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produsen`
--

CREATE TABLE `produsen` (
  `kode_produsen` varchar(20) NOT NULL,
  `tgl_registrasi` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produsen`
--

INSERT INTO `produsen` (`kode_produsen`, `tgl_registrasi`, `nama`, `alamat`, `email`, `status`, `keterangan`, `id_user`) VALUES
('PROD00001', '2017-11-12', 'PT. Malangkarya', 'Cianjur Satu', 'malangkar@ya.com', 'Non-Aktif', 'AKTIF SEJAHTERA', '1'),
('PROD00002', '2017-11-12', 'PT. Nasionalis Bus', 'Bandung', 'nas@busuq.com', 'Aktif', 'Astolfo', '1'),
('PROD00003', '2017-11-12', 'PT. AoV', 'Cianjur', 'a@a.com', 'Non-Aktif', 'YES', '1'),
('PROD00004', '2017-11-12', 'PT. Indofood', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00005', '2017-11-12', 'PT. Asahi', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00006', '2017-11-12', 'PT. Jays', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00007', '2017-11-12', 'PT. Rock', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00008', '2017-11-12', 'PT. Augmented', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00009', '2017-11-12', 'PT. Freak', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00010', '2017-11-12', 'PT. Ajinomoto', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00011', '2017-11-12', 'PT. Kabayan', 'Cianjur', 'a@a.com', 'Aktif', 'YES', '1'),
('PROD00012', '2017-11-13', 'PT. Sinar Mas', 'Kopaja', 'anata@daisuki.com', 'Aktif', 'Yeah', '1'),
('PROD00013', '2017-11-13', 'PT. Padi Mas', 'Jakarta Barat', 'jkt@pdms.co.id', 'Aktif', 'Aktif wal afiat', '1'),
('PROD00014', '2017-11-13', 'PT. Angkers', 'Bandung', 'bd@bd.com', 'Aktif', 'NICE WORK', '1'),
('PROD00015', '2017-11-13', 'PT. Pertaminas', 'Bandung', 'bd@bd.com', 'Aktif', 'WORK NICE', '1'),
('PROD00016', '2017-11-13', 'PT. Sarimaniss', 'Bandung', 'bd@bd.com', 'Aktif', 'NICE WORK', '1'),
('PROD00017', '2017-11-13', 'PT. Polistars', 'Bandung', 'bd@bd.com', 'Aktif', 'WORK NICE', '1'),
('PROD00018', '2017-11-13', 'PT. LENs', 'Bandung', 'bd@bd.com', 'Aktif', 'NICE WORK', '1'),
('PROD00019', '2017-11-13', 'PT. Aquas', 'Jakarta', 'jkt@jkt.com', 'Aktif', 'WORK NICE', '1'),
('PROD00020', '2017-11-13', 'PT. Mekarsari', 'Jakarta', 'jkt@jkt.com', 'Aktif', 'WORK NICE', '1'),
('PROD00021', '2017-11-17', 'PT. XYZ', 'Cilaku', 'arishasan@gmail.com', 'Non-Aktif', 'Dihapus', '1'),
('PROD00022', '2017-12-17', 'Sinarmas Biru Merah', 'Panembong ehe', 'sinarmas@fact.com', 'Aktif', 'New Produsen', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `to_do`
--

CREATE TABLE `to_do` (
  `id` int(11) NOT NULL,
  `to_do` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_users`
--

CREATE TABLE `t_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `login_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_users`
--

INSERT INTO `t_users` (`id_user`, `username`, `password`, `status`, `akses`, `remember_token`, `created_at`, `updated_at`, `last_login`, `login_count`) VALUES
(1, 'aris', '$2y$10$PHaZndUxmwLylU88ITXmxe0vXn6dNhY0stIvIPglfnao6F4tug1pi', '1', 'superuser', 'yGyUsrTtNT3HUlnYrTRTxRRNTFCLSFGrQR9FIOeXyHsOOqGz1mtpRF13LZxE', '2017-11-10 07:37:25', '2017-11-17 14:00:03', '2018-04-11 18:39:54', 29),
(3, 'admin', '$2y$10$x9hELp.akPnEYc7YRjt1dev6Q0iRxoI/g/suHPMTrdiZrjthpdaLK', '1', 'admin', 'MatUEaCQpQNWJAyaPxT3JbkYEfDr4cGBD4QOswd5IoIrderKkIqy8mELxlBz', '2017-11-17 16:04:32', '2017-11-17 16:04:32', '2017-12-17 06:33:12', 2),
(4, 'operator', '$2y$10$.Gll95x2YPA.DM7OMhgZ3.S3vjHC.wG2EJXi6Pgeh0OH8a8P6lbgK', '1', 'operator', 'iKncYU8hknqeSWkITNM9FResKg9grGk97JCtf6WSneo1yEpdeD1MSbRpAytZ', '2017-11-18 01:10:18', '2017-11-18 01:10:18', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `cicilan`
--
ALTER TABLE `cicilan`
  ADD PRIMARY KEY (`kode_cicilan`);

--
-- Indexes for table `detail_pembelian`
--
ALTER TABLE `detail_pembelian`
  ADD PRIMARY KEY (`kode_det_pembelian`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`kode_det_penjualan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_pembayaran`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`kode_pembelian`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`kode_penjualan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `produsen`
--
ALTER TABLE `produsen`
  ADD PRIMARY KEY (`kode_produsen`);

--
-- Indexes for table `to_do`
--
ALTER TABLE `to_do`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `to_do`
--
ALTER TABLE `to_do`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
