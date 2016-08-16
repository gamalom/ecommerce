-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2016 at 11:59 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'LENOVE'),
(3, 'DELL'),
(4, 'SONY'),
(5, 'LG'),
(6, 'SAMSUNG'),
(7, 'TOSHIBA');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_title`) VALUES
(1, 'Computers'),
(2, 'Laptops'),
(3, 'Mobiles'),
(4, 'Camera'),
(5, 'Ipad');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_catagory` int(11) NOT NULL,
  `product_brand` int(11) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(300) NOT NULL,
  `product_keyword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_title`, `product_catagory`, `product_brand`, `product_image`, `product_price`, `product_description`, `product_keyword`) VALUES
(1, 'new hp laptops', 2, 1, 'hp1.jpg', 300, 'this is the leatest laptop', 'new,laptop,hp'),
(3, 'lenovo', 2, 2, 'lenovo.jpg', 300, 'this is a laptop', 'new,laptop,good,lenovo'),
(4, 'dell laptop', 2, 3, 'dell.jpg', 300, 'best dell laptop', 'new,dell,hp,laptop'),
(5, 'sony camera', 4, 4, 'sony.jpg', 500, 'the best camera of sony', 'sony camera'),
(8, 'Toshiba Laptoops', 2, 7, 'toshiba.jpg', 400, 'the best laptop of the toshiba ', 'new laptop'),
(9, 'LG mobiles', 3, 5, 'lg.jpg', 400, 'the leatest mobiles of the LG', 'mobiles'),
(10, 'lenovo mobiles', 3, 2, 'lenovomob.jpg', 450, 'the new mobile of lenovo ', 'new mobiles'),
(11, 'lenovo ipads', 5, 2, 'lenovo ipads.jpg', 450, 'leatest IPads of lenovo', 'new ipads'),
(12, 'lg ipads', 5, 5, 'lgipad.jpg', 500, 'the new lg ipads', 'new ipads'),
(13, 'samgsung ipads', 5, 6, 'samsungipads.jpeg', 600, 'new samgsung ipads', 'new ipads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
