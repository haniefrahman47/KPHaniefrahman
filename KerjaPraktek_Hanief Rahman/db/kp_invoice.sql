-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 11:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(100) NOT NULL,
  `no_barang` int(100) NOT NULL,
  `nm_barang` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `berat` int(255) NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `no_barang`, `nm_barang`, `jumlah`, `berat`, `harga`) VALUES
(13, 404, 'baju', 1001, 42, 40000),
(16, 505, 'celana', 200, 40, 30000),
(17, 500, 'sepatu', 10, 20, 50000),
(68, 501, 'topi', 4, 7, 12000),
(69, 2022, 'sendal', 100, 12, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id_invoice` int(11) NOT NULL,
  `no_invoice` int(100) NOT NULL,
  `pelanggan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tenggat` date NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id_invoice`, `no_invoice`, `pelanggan`, `tanggal`, `tenggat`, `id_order`, `total_amount`, `catatan`) VALUES
(32, 123, '69', '1212-12-12', '1212-12-12', 'ORDER-20220104053735527', 600000, '12345'),
(34, 1234, '69', '1222-12-11', '1222-12-12', 'ORDER-20220104094124973', 420000, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `id_barang` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `id_order`, `id_barang`, `qty`, `amount`) VALUES
(27, 'ORDER-20220104053735527', 0, 1, 0),
(28, 'ORDER-20220104053735527', 13, 2, 80000),
(29, 'ORDER-20220104053735527', 13, 3, 120000),
(30, 'ORDER-20220104053735527', 13, 4, 160000),
(31, 'ORDER-20220104053735527', 13, 5, 200000),
(32, 'ORDER-20220104094124973', 0, 1, 0),
(33, 'ORDER-20220104094124973', 16, 2, 60000),
(34, 'ORDER-20220104094124973', 69, 3, 60000),
(35, 'ORDER-20220104094124973', 17, 4, 200000),
(36, 'ORDER-20220104094124973', 68, 5, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(100) NOT NULL,
  `npwp` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `npwp`, `nama`, `alamat`, `telpon`) VALUES
(69, 1234567890, 'qwerty', 'jalan-jalan-jalan', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','sv') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`) VALUES
(24, 'Khevin Adam', 'admin@admin.id', 'khevin', '$2y$10$VSnG/GqSX93eazEUpX47.eGWpvUaIpVXZ0C54BT2ibQU6I2OIn09m', 'sv'),
(37, 'admin', 'admin@admin.com', 'admin', '$2y$10$M5zV/UbLyDCp9Ov9g4EQH.VJcTfZ6WCHsFKdDNJNvbRsacCY/hAvC', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
