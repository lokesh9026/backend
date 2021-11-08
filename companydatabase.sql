-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 08, 2021 at 06:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `sunmax_company`
--

CREATE TABLE `sunmax_company` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `salary` bigint(100) NOT NULL,
  `Exps` varchar(100) NOT NULL,
  `Dept` varchar(100) NOT NULL,
  `commission` varchar(2555) DEFAULT NULL,
  `DOJ` varchar(1000) DEFAULT NULL,
  `Desig` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sunmax_company`
--

INSERT INTO `sunmax_company` (`id`, `name`, `salary`, `Exps`, `Dept`, `commission`, `DOJ`, `Desig`) VALUES
(1, 'Ram', 15000, '5yrs', 'HR', '400', '2003', 'Trainee'),
(2, 'Aman', 30000, '3', 'Quality', '100', '2000', 'Junior Engineer'),
(3, 'Mukesh', 50000, '5yrs', 'Customer Care', '200', '2005', 'Engineer'),
(4, 'Ishan', 20000, '2yrs', 'Bop Quality ', 'Engineer', '2019', NULL),
(5, 'Anuj', 50000, '3yrs', 'maintenance', '250', '2006', 'GET'),
(6, 'Anil', 60000, '3yrs', 'Quality', '160', '2020', 'Engineer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sunmax_company`
--
ALTER TABLE `sunmax_company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sunmax_company`
--
ALTER TABLE `sunmax_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
