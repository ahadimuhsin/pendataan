-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 04:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kontak` bigint(12) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nik`, `nama`, `kontak`, `alamat`) VALUES
(7, 3313132367890002, 'Anas', 83902941829, 'Jaten'),
(6, 3313135007970003, 'Pindya Khabiibah', 85897381728, 'Kalioso Jawa Tengah');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(3) NOT NULL,
  `barcode` bigint(13) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `stok` int(4) NOT NULL,
  `nama_supplier` varchar(30) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `barcode`, `nama_obat`, `kategori`, `stok`, `nama_supplier`, `tanggal_kadaluarsa`) VALUES
(30, 123454321, 'Bodrex', 'Bebas', 10, 'Pindya', '2018-01-31'),
(16, 1234567891234, 'Antangin', 'Bebas', 32, 'Pindya', '2018-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `id` int(3) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah` int(3) NOT NULL,
  `tanggal_kadaluarsa` date NOT NULL,
  `nama_supplier` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_masuk`
--

INSERT INTO `obat_masuk` (`id`, `nama_obat`, `tanggal_masuk`, `jumlah`, `tanggal_kadaluarsa`, `nama_supplier`) VALUES
(1, 'Antangin', '2018-01-23', 5, '2018-01-31', 'Koko'),
(2, 'Antangin', '2018-01-14', 6, '2018-01-15', 'Pindya'),
(3, 'Bodrex', '2017-12-31', 10, '2018-01-31', 'Pindya');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kontak` bigint(12) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `nama`, `kontak`, `alamat`) VALUES
(4, 'Koko', 85799504429, 'Jalan K.H. Samanhudi'),
(5, 'Pindya', 85647144900, 'Kalioso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`barcode`),
  ADD KEY `id` (`id`),
  ADD KEY `nama_obat` (`nama_obat`,`tanggal_kadaluarsa`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_supplier` (`nama_supplier`),
  ADD KEY `nama_obat` (`nama_obat`),
  ADD KEY `tanggal_kadaluarsa` (`tanggal_kadaluarsa`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
