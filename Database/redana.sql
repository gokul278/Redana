-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2023 at 06:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `customer_activationstatus` varchar(6) NOT NULL,
  `customer_forgetpasswordcode` varchar(10) NOT NULL,
  `customer_forgetpasswordstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`customer_id`, `customer_firstname`, `customer_lastname`, `customer_mail`, `customer_mobileno`, `customer_password`, `customer_activatiioncode`, `customer_activationstatus`, `customer_forgetpasswordcode`, `customer_forgetpasswordstatus`) VALUES
(8010, 'Gowtham', 'J', 'gowthamjayaram333@gmail.com', '9360248850', 'a5ce312092aa0e2befdacfe783decae4', '300484', 'true', '988969', 'true'),
(8011, 'GOKUL', 'MOORTHY', 'gokulhk278@gmail.com', '9842653413', '1a35aa95cd412fe952d607c8031b821f', '934553', 'true', 'novalue', 'false');

-- --------------------------------------------------------

--
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

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_id`, `vendor_id`, `food_name`, `food_cost`, `cuisines`, `cashondelivery`, `onlinepayment`, `food_snaps`) VALUES
(146, 5735, 'Chicken Briyani', '120', 'Briyani', 'true', 'true', '20231014070658_briyani (1).jpeg'),
(147, 5735, 'Chicken Soup', '60', 'Soup', 'true', 'true', '20231014071031_soup (1).jpeg'),
(148, 5735, 'Veg Masala', '70', 'Veg Masala', 'true', 'true', '20231014071726_veg (1).jpeg'),
(149, 5735, 'Mutton Briyani', '150', 'Briyani', 'true', 'true', '20231020164442_briyani (1).jpeg'),
(150, 5736, 'Mutton Briyani', '1600', 'Briyani', 'true', 'true', '20231020165127_briyani (1).jpeg');

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
(5735, 'GOKUL M', 'gokulhk278@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9965854313', 'Salem', '20231014070328_gokul (1).jpeg', '185255', 'true', 'vendor'),
(5736, 'Hotel 1', 'hotel1@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Hotel 1', '20231014064934_hotel 1.png', '684239', 'true', 'vendor'),
(5737, 'Hotel 2', 'hotel2@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Hotel 2', '20231014065433_download (1).png', '769433', 'true', 'vendor'),
(5738, 'Hotel 3', 'hotel3@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Hotel 3', '20231014065709_hotel 3 (1).png', '324456', 'true', 'vendor'),
(5739, 'Hotel 4', 'hotel4@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Hotel 4', '20231014065849_Hotel 4 (1).png', '605520', 'true', 'vendor'),
(5740, 'Hotel 5', 'hotel5@gmail.com', '1a35aa95cd412fe952d607c8031b821f', '9842653413', 'Hotel 5', '20231014070100_Hotel 5 (1).png', '679887', 'true', 'vendor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`customer_id`);

--
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
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8012;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `vendorlogin`
--
ALTER TABLE `vendorlogin`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5741;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
