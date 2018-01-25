-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 04:35 AM
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
('admin', '21232f297a57a5a743894a0e4a801fc3'),
('admin2', 'c84258e9c39059a89ab77d846ddab909');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `npwp` text NOT NULL,
  `no_company` int(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `parent_company` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `mobile` text NOT NULL,
  `business_consultant` varchar(100) NOT NULL,
  `join_date` date NOT NULL,
  `assignment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`npwp`, `no_company`, `company`, `parent_company`, `address`, `city`, `contact_person`, `title`, `email`, `phone`, `mobile`, `business_consultant`, `join_date`, `assignment`) VALUES
('75.652.621.6-.125', 2, 'Lintas Media', 'Lintasarta', 'Lebak Bulus', 'Jakarta', 'Sigit Tri Marwanto', 'Marketing', 'sdaasd@sada.com', '65645645', '6535454', 'Movita Suci Mutiara', '2018-01-17', 'Replacement'),
('34.234.234.3-242.352', 3, 'Hmmmm', 'fwefw', 'werwr', 'fwfgwfg', 'rterter', 'Muhsin', 'dada@gmail.com', '+62982-3829-3829', '+62839-2839-2389', 'Shoba Mediwati', '2018-01-08', 'Project Assignment'),
('34.234', 4, 'Google', 'rewrwe', 'verge', 'erwrr', '23rc2r', 'f wfewfr', 'adasad@dsa.com', '432424', '2343424', 'Hadi Fatkhul Amin', '2018-01-16', 'Project Assignment'),
('12.345.678.9-098.765', 6, 'SMA 94 Jakarta', 'SMA 94 Jakarta', 'Kalideres', 'Jakarta Barat', 'Nengsih', 'Kepala Sekolah', 'nengsih@lalala.com', '+62672-3672-8723', '+62895-1970-5026', 'Movita Suci Mutiara', '2018-01-09', 'Lead Assignment'),
('91.287.381.7-218.218', 7, 'SMP 264 Jakarta', 'SMP 264 Jakarta', 'Cengkareng', 'Jakarta', 'Satar', 'Kepsek', 'satar@kakaka.com', '+62238-2938-2938', '+62722-8239-8362', 'Hadi Fatkhul Amin', '2018-01-09', 'Project Assignment'),
('31.423.423.4-234.242', 8, 'Axis', 'Ahadi', 'rewrwer', 'fwefw', 'rehe', 'rwrwr', 'adad@sds.com', '+62', '+62425-245', 'Mochamad Badrinsyah', '2018-01-10', 'Lead Assignment'),
('87.923.927.3-.882', 9, 'WWE', 'WWE', 'Seattle', 'New York', 'Vince McMahon', 'CEO', 'vince@wwe.com', '+62232-3287-3217', '+62438-2932-7329', 'Fahmi Ernanto', '2018-01-17', 'Project Assignment');

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
(1, 2, 'Managed Web', 'Managed Application', 'Managed Service', '2018-01-09', '2018-01-25', 45345345, '2018-01-16', '2018-01-25', 346535435, 2432425, 'Monthly', ''),
(2, 2, 'IT Solution', 'Professional Services', 'Managed Service', '2018-01-15', '2018-01-26', 436456456, '2018-01-23', '2018-01-26', 363645, 6645645, 'Joining Free', 'Lalala'),
(3, 3, 'Managed Antivirus', 'Managed Application', 'Managed Services', '2018-01-09', '2018-01-26', 2147483647, '2018-01-16', '2018-01-11', 324324, 324234, 'Monthly', 'Lunas'),
(4, 4, 'Cloud Server', 'Cloud Server', 'Cloud Services', '2018-01-11', '2018-01-20', 2147483647, '2018-01-17', '2018-01-31', 2532525, 2524535, 'Monthly', 'Hutang'),
(5, 9, 'Managed SSL', 'Managed Application', 'Managed Services', '2018-01-11', '2018-01-19', 2147483647, '2018-01-24', '2018-01-31', 2524342, 235234234, 'Monthly', '8647134673');

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
  MODIFY `no_company` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `no_jaringan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
