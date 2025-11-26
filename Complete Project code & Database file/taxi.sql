-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2024 at 11:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(65) NOT NULL,
  `uname` varchar(65) NOT NULL,
  `pass` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'moses', '0505'),
(2, 'id2', '2'),
(3, 'e3', 'e3'),
(4, 'key', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(65) NOT NULL,
  `cname` varchar(65) NOT NULL,
  `customer` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cname`, `customer`) VALUES
(2, 'after customer', 'cab are under good condition - so that we enjoy the rides '),
(11, 'after customer', 'we are expecting more features'),
(13, 'thaya', 'cab are under good condition - so that we enjoy the rides '),
(14, 'SRIMAN SUBASH P', 'cab are under good condition - so that we enjoy the rides ');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(65) NOT NULL,
  `ename` int(65) NOT NULL,
  `cabno` int(65) NOT NULL,
  `address` int(65) NOT NULL,
  `phno` int(65) NOT NULL,
  `email` int(65) NOT NULL,
  `dob` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `cabno`, `address`, `phno`, `email`, `dob`) VALUES
(1, 0, 5, 0, 2147483647, 0, 2023),
(2, 0, 2, 0, 2147483647, 0, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(65) NOT NULL,
  `cabno` varchar(65) NOT NULL,
  `cabcondition` varchar(65) NOT NULL,
  `daterenewal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `cabno`, `cabcondition`, `daterenewal`) VALUES
(2, '05', 'good', '2023-03-23'),
(3, '04', 'excelent', '2023-03-31'),
(4, '01', 'good', '2023-04-29'),
(5, '05', 'bad,engien problem', '2023-04-27'),
(6, '05', 'bad,engien problem', '2023-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `cname` varchar(65) NOT NULL,
  `ename` varchar(65) NOT NULL,
  `cabno` varchar(65) NOT NULL,
  `plocation` varchar(65) NOT NULL,
  `dlocation` varchar(65) NOT NULL,
  `datetravel` date NOT NULL,
  `kms` int(65) NOT NULL,
  `charges` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`cname`, `ename`, `cabno`, `plocation`, `dlocation`, `datetravel`, `kms`, `charges`) VALUES
('daf', 'dfa', '05', 'dafa', 'dfa', '2023-04-12', 2000, 1),
('moses', 'raju', '02', 'try', 'che', '2023-04-07', 500, 4000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(65) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
