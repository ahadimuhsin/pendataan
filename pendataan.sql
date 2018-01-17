-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 09:26 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `npwp` int(100) NOT NULL,
  `no_company` int(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `parent_company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `business_consultant` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `assignment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`npwp`, `no_company`, `company`, `parent_company`, `address`, `city`, `contact_person`, `title`, `email`, `phone`, `mobile`, `business_consultant`, `join_date`, `assignment`) VALUES
(2345678, 1, 'Huaweiiiii', 'Indosat', 'Jakarta', 'Jakarta', 'Muhammad', 'Bos', 'manager@gmail.com', 3456789, 345678, 'Movita Suci Mutiara', '2018-01-04', 'Project Assignment'),
(878711111, 2, 'Kaskus', 'Kasku', 'Jakarat', 'Jakarat', 'bhjbsd', 'jhsad', 'jhsdja@gmail.com', 34567890, 987654, 'Mochamad Badriansyah', '2018-01-09', 'Project Assignment'),
(34343, 3, 'fdsfw', 'frewrw', 'vdasvs', 'ewrwer', 'gegre', 'wertwr', 'werwer@dsada.com', 42323231, 432342, 'Movita Suci Mutiara', '2018-01-11', 'Lead Assignment'),
(43123, 4, 'lalala', 'dfghjkl;', 'rtyuiop', 'fghjkl;', '34567890', '4567890', 'gvjhk@sdas.com', 56789, 56789, 'Hadi Fatkhul Amin', '2018-01-02', 'Project Assignment'),
(5345, 5, 'ergr', 'terte', 'gerge', 'erge', 'ererge', 'erge', 'dqwd@sada.com', 56789, 567890, 'Movita Suci Mutiara', '2018-01-04', 'Project Assignment'),
(12345, 6, 'rerere', 'fefefe', 'sasasa', 'dadada', 'wawaa', 'rarara', 'abang@mail.com', 3535, 35435, 'Sigit Tri Marwanto', '2018-01-19', 'Project Assignment');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `no_jaringan` int(11) NOT NULL,
  `no_company` int(11) NOT NULL,
  `subservices` varchar(50) NOT NULL,
  `services` varchar(50) NOT NULL,
  `product_family` varchar(50) NOT NULL,
  `contract_start_date` date NOT NULL,
  `contract_end_date` date NOT NULL,
  `spk_number` int(11) NOT NULL,
  `spk_date` date NOT NULL,
  `spk_handover_date` date NOT NULL,
  `otc` int(11) NOT NULL,
  `mrc` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`no_jaringan`, `no_company`, `subservices`, `services`, `product_family`, `contract_start_date`, `contract_end_date`, `spk_number`, `spk_date`, `spk_handover_date`, `otc`, `mrc`, `type`, `keterangan`) VALUES
(1234, 2, 'Managed Firewall', 'Managed Application', 'Managed Service', '2018-01-16', '2018-01-17', 32332, '2018-01-24', '2018-01-25', 4434, 34234, 'Joining Free', 'Berhasil! Yey'),
(7890, 3, 'Managed Server', 'Managed Server', 'Managed Service', '2018-01-17', '2018-01-18', 414234234, '2018-01-25', '2018-01-26', 2332, 2323123, 'Joining Free', 'Apaanaaaa'),
(12345, 1, 'Application Development', 'Application Services', 'SaaS', '2018-01-03', '2018-01-11', 6435453, '2018-01-15', '2018-01-25', 432423, 234324, 'Joining Free', '34324'),
(432423, 1, 'Managed Mail', 'Managed Application', 'Managed Service', '2018-01-18', '2018-01-27', 4545, '2018-01-26', '2018-01-25', 34234, 235252, 'Joining Free', 'aaaaaaaaa'),
(55434324, 4, 'Managed Cpanel', 'Managed Application', 'Managed Service', '2018-01-17', '2018-01-26', 53434, '2018-01-25', '2018-01-24', 5534, 342343, 'Joining Free', '3443');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`no_company`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`no_jaringan`),
  ADD KEY `idx_company` (`no_company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `no_company` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jasa`
--
ALTER TABLE `jasa`
  ADD CONSTRAINT `jasa_ibfk_1` FOREIGN KEY (`no_company`) REFERENCES `company` (`no_company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
