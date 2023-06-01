-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 01:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`) VALUES
(1, 'Eiger Adevnture'),
(2, 'Consina'),
(3, 'Arei Adventure'),
(4, 'Outdoor Pro'),
(5, 'Big Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Sepatu Gunung'),
(2, 'Tas Carrier'),
(3, 'Jaket Gunung'),
(5, 'Alat Survival');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(200) NOT NULL,
  `price_product` decimal(12,0) NOT NULL,
  `qty_product` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price_product`, `qty_product`, `image`, `id_category`, `id_brand`) VALUES
(1, 'Tas Carrier Arei Adventure 45L', '749999', 10, 'attractive-armenian-guy-with-hat-looking-camera-yellow-black-red-wall.jpg', 2, 3),
(2, 'Sepatu Arei', '899000', 10, 'ramadhan.jpg', 1, 3),
(3, 'Jaket Arei', '999999', 5, 'sourcetree.png', 3, 3),
(4, 'Sepatu Eiger', '1', 5, 'bitbucket.png', 1, 1),
(5, 'Tas Carrier Consina', '1000000', 10, 'Capture.PNG', 2, 2),
(6, 'Sepatu Consina', '0', 2, 'github.png', 1, 2),
(7, 'Jaket Consina', '0', 5, 'phone-call.png', 3, 2),
(8, 'Jaket Eiger Adventure Men Series', '1000000', 1, 'compass.png', 3, 1),
(9, 'Jaket Eiger Adventure Women Series', '850000', 2, 'Group 29.png', 3, 1),
(13, 'Sepatu Eiger Men Series Size 45', '0', 1, 'Group 28.png', 1, 1),
(14, 'Sepatu Eiger Women Series Size 40', '0', 3, 'clothes-hanger.png', 1, 1),
(15, 'Jaket Consina Hiking Men Series L', '199999', 1, 'coin.png', 3, 2),
(16, 'Jaket Big Adventure', '749999', 1, 'compass.png', 3, 5),
(19, 'Jaket Consina', '12', 5, 'menu-button-of-three-horizontal-lines.png', 3, 2),
(20, 'Fire Starter', '35000', 2, 'snowed-mountains.png', 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_id_category` (`id_category`) USING BTREE,
  ADD KEY `fk_id_brand` (`id_brand`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_id_brand` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id_brand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
