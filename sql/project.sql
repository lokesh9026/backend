-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 28, 2021 at 02:50 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Banks`
--

CREATE TABLE `Banks` (
  `id` int(100) NOT NULL,
  `Axis` varchar(100) NOT NULL,
  `BOI` varchar(100) NOT NULL,
  `SBI` varchar(100) NOT NULL,
  `Syndicate` varchar(100) NOT NULL,
  `INDUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Banks`
--

INSERT INTO `Banks` (`id`, `Axis`, `BOI`, `SBI`, `Syndicate`, `INDUS`) VALUES
(1, 'Ajmer', 'Jaipur', 'Delhi', 'Dehradun', 'Gujarat'),
(3, 'sd', 'q', 'w', 'e', 'r'),
(4, 'sd', 'ty', 'ui', 'qw', 'pl');

-- --------------------------------------------------------

--
-- Table structure for table `E-Commerce`
--

CREATE TABLE `E-Commerce` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `E-mail` varchar(100) NOT NULL,
  `Mobile` int(100) NOT NULL,
  `No. of Visits` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `E-Commerce`
--

INSERT INTO `E-Commerce` (`id`, `Name`, `E-mail`, `Mobile`, `No. of Visits`) VALUES
(1, 'hg', 'gh', 666666666, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOJ` datetime NOT NULL,
  `DOB` datetime NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Employee`
--

INSERT INTO `Employee` (`id`, `Name`, `DOJ`, `DOB`, `Address`) VALUES
(1, 'ritya', '2021-10-15 18:11:44', '2021-10-28 14:41:44', 'sjka'),
(2, 'rahul', '2021-10-28 14:42:17', '2021-10-28 14:42:17', 'sada'),
(3, 'vbnv', '2021-10-28 14:42:32', '2021-10-28 14:42:32', 'dfvc'),
(4, 'ram', '2021-10-28 14:42:45', '2021-10-28 14:42:45', 'rgbd'),
(5, 'sham', '2021-10-28 14:42:58', '2021-10-28 14:42:58', 'cvbcvbc'),
(6, 'raju', '2021-10-28 14:43:08', '2021-10-28 14:43:08', 'nmbzc'),
(7, 'piyush', '2021-10-28 14:43:21', '2021-10-28 14:43:21', 'zxczv'),
(8, 'lokesh', '2021-10-28 14:43:33', '2021-10-28 14:43:33', 'zxcxzv'),
(9, 'nikunj', '2021-10-28 14:43:51', '2021-10-28 14:43:51', 'zcxv'),
(10, 'tina', '2021-10-28 14:44:03', '2021-10-28 14:44:03', 'piouiy');

-- --------------------------------------------------------

--
-- Table structure for table `fourwheeler`
--

CREATE TABLE `fourwheeler` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `cc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fourwheeler`
--

INSERT INTO `fourwheeler` (`id`, `company`, `model`, `fuel`, `cc`) VALUES
(1, 'maruti', 'alto', 'petrol', 1000),
(2, 'hundayi', 'i20', 'diesel', 1200),
(3, 'Volvo', 'XC90', 'Diesel', 30000),
(4, 'Nissan', 'GT-R', 'Petrol', 2500),
(5, 'BMW', 'X-5', 'Petrol', 2500),
(6, 'Audi', 'A-6', 'Diesel', 3200),
(7, 'Rnault', 'Duster', 'Petrol', 2500),
(8, 'Mahindra', 'xuv-500', 'Petrol', 1800),
(9, 'Ashokleland', 'd-60', 'Diesel', 5500),
(10, 'Eicher', 'T-500', 'Diesel', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `gadgets`
--

CREATE TABLE `gadgets` (
  `id` int(11) NOT NULL,
  `sony` varchar(100) NOT NULL,
  `philips` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `dell` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Hero_Bike`
--

CREATE TABLE `Hero_Bike` (
  `id` int(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `Avg` int(100) NOT NULL,
  `cc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Hero_Bike`
--

INSERT INTO `Hero_Bike` (`id`, `Model`, `fuel`, `Avg`, `cc`) VALUES
(1, 'Splendor', 'Petrol', 21, 100),
(2, 'Passion', 'Petrol', 60, 110),
(3, 'Glamor', 'Petrol', 65, 70),
(4, 'Gizzer', 'Petrol', 65, 150),
(6, 'Passion Pro', 'Petrol', 80, 120),
(5, 'Hero HF', 'Petrol', 85, 100),
(6, 'Hero Xtreme', 'Petrol', 95, 180),
(8, 'Hero XPulse ', 'Petrol', 65, 150),
(9, 'Hero HF Deluxe', 'petrol', 65, 100),
(10, 'Supper Slendour', 'Petrol', 80, 100);

-- --------------------------------------------------------

--
-- Table structure for table `maruti_suzuki`
--

CREATE TABLE `maruti_suzuki` (
  `id` int(100) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `Avg` int(100) NOT NULL,
  `cc` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maruti_suzuki`
--

INSERT INTO `maruti_suzuki` (`id`, `Model`, `fuel`, `Avg`, `cc`) VALUES
(1, 'Alto', 'petrol', 22, 800),
(2, 'Wagon-R', 'petrol', 21, 1000),
(3, 'Dezir', 'Diesel', 20, 1200),
(4, 'ciaz', 'Diesel', 21, 1200),
(5, 'zen', 'Petrol', 21, 1000),
(6, 'celerio', 'Petrol', 22, 1200),
(7, 'Ritz', 'Petrol', 22, 1200),
(8, 'Ertiga', 'Diesel', 23, 1600),
(9, '800', 'Petrol', 20, 800),
(10, 'brezza', 'Diesel', 23, 1400),
(11, 'nano', 'petrol', 23, 800);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `Emp_id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `DOJ` date NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`Emp_id`, `Name`, `DOJ`, `DOB`, `Address`) VALUES
(1, 'ram', '2021-10-12', '2021-10-23', 'xyz'),
(2, 'sham', '2021-09-05', '2021-09-14', 'abs'),
(3, 'rohan', '2021-07-06', '2021-07-22', 'shyam nagar'),
(4, 'vinit', '2021-06-01', '2021-06-17', 'jkl'),
(5, 'dolly', '2021-04-11', '2021-06-07', 'vashali'),
(6, 'riya', '2021-07-28', '2021-08-28', 'zxc'),
(7, 'rohan', '2021-08-24', '2021-06-29', 'bnm'),
(8, 'piyush', '2021-07-05', '2021-06-29', 'ramnagar'),
(9, 'vivek', '2021-07-27', '2021-07-29', 'jhotwara'),
(10, 'rachit', '2021-03-30', '2021-04-30', 'malviya nagar');

-- --------------------------------------------------------

--
-- Table structure for table `twowheeler`
--

CREATE TABLE `twowheeler` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `cc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Banks`
--
ALTER TABLE `Banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fourwheeler`
--
ALTER TABLE `fourwheeler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadgets`
--
ALTER TABLE `gadgets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `twowheeler`
--
ALTER TABLE `twowheeler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Banks`
--
ALTER TABLE `Banks`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fourwheeler`
--
ALTER TABLE `fourwheeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gadgets`
--
ALTER TABLE `gadgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `Emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `twowheeler`
--
ALTER TABLE `twowheeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
