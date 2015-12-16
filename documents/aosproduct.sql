-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2015 at 02:52 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aosproduct`
--

CREATE TABLE `aosproduct` (
`product_id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `light` varchar(30) NOT NULL,
  `blooming` varchar(5) NOT NULL,
  `watering` varchar(50) NOT NULL,
  `temperature` varchar(50) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aosproduct`
--

INSERT INTO `aosproduct` (`product_id`, `item`, `price`, `image`, `description`, `light`, `blooming`, `watering`, `temperature`, `size`) VALUES
(1, 'Dendrobium', '100', 'dendrobium.png', 'Feather lip and yellow flowers', 'Intermediate', 'Yes', 'Regular, slightly dry between', 'Warm', 3),
(2, 'Coelogyne', '150', 'coelogyne.png', 'White lip and dark gold flowers', 'Bright', 'No', 'Once a week', 'Warm and humid', 6),
(3, 'Oncidium', '90', 'oncidium.png', 'Pink lip and big yellow flowers', 'Intermediate', 'Yes', 'Regular, slightly dry between', 'Warm', 6),
(4, 'Paphioprdilum', '120', 'paphioprdilum.png', 'Golden slippers', 'Low', 'Yes', 'Regular, slightly dry between', 'Low', 4),
(5, 'Phalaenopsis', '40', 'phalaenopsis.png', 'Dark red flowers', 'Intermediate', 'No', 'Regular, slightly dry between', 'Hight', 3),
(6, 'Phragmiprdium', '150', 'phragmiprdium.png', 'Pink lip with white flowers', 'Low to Intermediate', 'Yes', 'Once a week', 'Intermediate', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aosproduct`
--
ALTER TABLE `aosproduct`
 ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aosproduct`
--
ALTER TABLE `aosproduct`
MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
