-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 07:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` int(11) NOT NULL,
  `kode_jenis` char(30) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_satuan` char(20) NOT NULL,
  `stok_barang` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `kode_jenis`, `nama_barang`, `harga_satuan`, `stok_barang`) VALUES
(10101, 'K-0001', 'Facial Wash Wardah', '29000', '3000'),
(10102, 'K-0002', 'Micellar Water Garnier', '48000', '3800'),
(30303, 'M-0001', 'Indomie Goreng', '2800', '40000'),
(30304, 'M-0002', 'Tepung Serbaguna', '15000', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_nota` int(11) NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_nota`, `kode_barang`, `harga_jual`) VALUES
(123321, 10101, 29000),
(456654, 30303, 2800);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `kode_jenis` char(11) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`kode_jenis`, `nama_jenis`) VALUES
('K-0001', 'Kosmetik'),
('K-0002', 'Kosmetik'),
('M-0001', 'Makanan'),
('M-0002', 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `user_id` char(30) NOT NULL,
  `pass_id` char(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `user_id`, `pass_id`, `nama`, `status`) VALUES
(10203, 'budidoremi', 'fasolasido', 'budi', 'mahasiswa'),
(40506, 'nanana', 'ninini', 'nini', 'irt');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_nota` int(11) NOT NULL,
  `tgl_nota` date NOT NULL,
  `total_bayar` char(30) NOT NULL,
  `user_id` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_nota`, `tgl_nota`, `total_bayar`, `user_id`) VALUES
(123321, '2022-06-01', '48000', 'budidoremi'),
(456654, '2022-06-03', '17800', 'nanana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`no_nota`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_nota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
