-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2019 at 04:17 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storz`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `name`, `type`, `amount`) VALUES
(1, 'SALE500', 'cash', 500),
(2, 'SUMMER2500', 'cash', 2500),
(7, 'FLAT1000', 'cash', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `type`, `brand`, `price`, `description`, `image_name`) VALUES
(1, 'Vivo V9 pro (Blue,64GB)', 'mobile', 'Vivo', 14990, '4 GB RAM | 64 GB ROM | Expandable Upto 256 GB\r\n16.0 cm (6.3 inch) FHD+ Display\r\n13MP + 2MP | 16MP Front Camera\r\n3260 mAh Battery\r\nQualcomm Snapdragon 660AIE 1.95 GHz Octa-core Processor', 'https://www.91-img.com/gallery_images_uploads/8/e/8e73e2142e1a3e04aed758a7fc31e4ccd59b66e7.jpg?tr=h-550,w-0,c-at_max'),
(18, 'OPPO F11 Pro (Thunder Black)(6 GB RAM)', 'mobile', 'oppo', 23990, '6 GB RAM | 128 GB ROM | Expandable Upto 256 GB\r\n16.51 cm (6.5 inch) FHD+ Display\r\n48MP + 5MP | 16MP Front Camera\r\n4000 mAh Li-polymer Battery\r\nMediaTek Helio P70 Octa Core 2.1 GHz Processor', 'https://i.gadgets360cdn.com/products/large/1551797712_635_oppo_f11_pro.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
