-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 05:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28
=======
-- Host: localhost
-- Generation Time: Oct 02, 2023 at 03:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4
>>>>>>> 330221c (Updated at 01/10/2023)

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redana`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`admin_id`, `username`, `password`, `type`) VALUES
(15923, 'testadmin@gmail.com', '9283a03246ef2dacdc21a9b137817ec1', 'admin');

-- --------------------------------------------------------

--
<<<<<<< HEAD
=======
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `customer_id` int(11) NOT NULL,
  `customer_firstname` varchar(25) NOT NULL,
  `customer_lastname` varchar(25) NOT NULL,
  `customer_mail` varchar(50) NOT NULL,
  `customer_mobileno` varchar(12) NOT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_activatiioncode` varchar(10) NOT NULL,
  `customer_activationstatus` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_mail`, `customer_mobileno`, `customer_password`, `customer_activatiioncode`, `customer_activationstatus`) VALUES
(8005, 'GOKUL', 'M', 'gokulhk278@gmail.com', '9842653413', '1a35aa95cd412fe952d607c8031b821f', '659691', 'false');

-- --------------------------------------------------------

--
>>>>>>> 330221c (Updated at 01/10/2023)
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_cost` varchar(10) NOT NULL,
  `cuisines` varchar(100) NOT NULL,
  `cashondelivery` varchar(10) NOT NULL,
  `onlinepayment` varchar(10) NOT NULL,
  `food_snaps` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendorlogin`
--

CREATE TABLE `vendorlogin` (
  `vendor_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile_number` varchar(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `activation_code` varchar(10) NOT NULL,
  `activation_status` varchar(10) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vendorlogin`
--

INSERT INTO `vendorlogin` (`vendor_id`, `name`, `email`, `password`, `mobile_number`, `address`, `image`, `activation_code`, `activation_status`, `type`) VALUES
<<<<<<< HEAD
(5731, 'Gokul Hotel', 'gokulhk278@outlook.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Salem', '20230922173728_noodles.jpg', '248350', 'true', 'vendor'),
(5732, 'GOKUL HOTEL', 'gokulhk278@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Salem', '20230922174826_hotel.jpg', '444770', 'false', 'vendor');
=======
(5734, 'Hotel 1', 'gokulhk278@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Salem', '20231001064019_Redana-logo.png', '269533', 'true', 'vendor');
>>>>>>> 330221c (Updated at 01/10/2023)

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
<<<<<<< HEAD
=======
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`customer_id`);

--
>>>>>>> 330221c (Updated at 01/10/2023)
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `vendorlogin`
--
ALTER TABLE `vendorlogin`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15925;

--
<<<<<<< HEAD
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
=======
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8007;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
>>>>>>> 330221c (Updated at 01/10/2023)

--
-- AUTO_INCREMENT for table `vendorlogin`
--
ALTER TABLE `vendorlogin`
<<<<<<< HEAD
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5733;
=======
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5735;
>>>>>>> 330221c (Updated at 01/10/2023)
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
