-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2018 at 10:57 AM
-- Server version: 5.7.10
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_onlineinv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text,
  `password` text,
  `privilege` text,
  `firstname` text,
  `lastname` text,
  `contactnum` text,
  `email` text,
  `address` text,
  `status` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `username`, `password`, `privilege`, `firstname`, `lastname`, `contactnum`, `email`, `address`, `status`) VALUES
(2, 'asd', 'asd', 'Admin', NULL, NULL, NULL, NULL, NULL, 'Verified'),
(4, 'test', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'a', 'a', NULL, 'a', 'a', '09163378752', 'admin@admin.com', 'test', 'Verified'),
(8, 'aa', 'aa', NULL, 'aa', 'aa', '09288253153', 'aa', 'aa@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` text,
  `quantity` text,
  `username` text,
  `status` text,
  `modeofpay` text,
  `timestamp` text,
  `municipality` text,
  `address` text,
  `voucher` text,
  `total` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `item_id`, `quantity`, `username`, `status`, `modeofpay`, `timestamp`, `municipality`, `address`, `voucher`, `total`) VALUES
(33, '62', '1', 'asd', 'Approved', 'Paypal', '9/23/2017', 'Santo Tomas - Php 0', 'asdasd', 'LANZ4', NULL),
(34, '62', '2', 'asd', 'Approved', 'Paypal', '9/23/2017', 'Santo Tomas - Php 0', 'asdasd', 'LANZ4', NULL),
(35, '62', '1', 'asd', 'Approved', 'Paypal', '9/23/2017', 'Santo Tomas - Php 0', 'asdasd', 'LANZ4', NULL),
(36, '61', '1', 'a', 'Approved', 'Cash on Delivery', '9/23/2017', 'Batangas - Php 200', 'asd', 'LANZ5', NULL),
(37, '62', '1', 'a', 'Approved', 'Cash on Delivery', '9/23/2017', 'Santo Tomas - Php 0', 'asdasd', 'LANZ6', NULL),
(38, '61', '1', 'a', 'Approved', 'Cash on Delivery', '9/23/2017', 'Santo Tomas - Php 0', 'asdasd', 'LANZ6', NULL),
(42, '61', '1', 'a', NULL, 'Cash on Delivery', '9/24/2017', 'Rizal - Php 500', 'asdasd', 'LANZ9', NULL),
(43, '61', '1', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`) VALUES
(11, 'Tables'),
(12, 'Chairs'),
(13, 'Doors'),
(14, 'Cabinets'),
(15, 'Beds'),
(16, 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` text,
  `prod_category` text,
  `prod_price` text,
  `prod_brand` text,
  `prod_model` text,
  `prod_release` text,
  `prod_dimension` text,
  `prod_displaysize` text,
  `prod_description` text,
  `editorial_review` text,
  `isfeatured` text,
  `storage_locations` text,
  `prod_status` text,
  `prod_condition` text,
  `current_stock` text,
  `min_stock` text,
  `max_stock` text,
  `prod_image` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `prod_name`, `prod_category`, `prod_price`, `prod_brand`, `prod_model`, `prod_release`, `prod_dimension`, `prod_displaysize`, `prod_description`, `editorial_review`, `isfeatured`, `storage_locations`, `prod_status`, `prod_condition`, `current_stock`, `min_stock`, `max_stock`, `prod_image`) VALUES
(38, 'Table Type A', 'Tables', '1000', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/8a9cfbd58e08ddcf7c6306d40314c121.jpg'),
(39, 'Table Type B', 'Tables', '1000', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/6ccd12ec23062d1f2f36438c1d5e263b.jpg'),
(40, 'Table Type C', 'Tables', '1000', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/5a6cd22745c8f41050fcde69843bc2ef.jpg'),
(41, 'Table Type D', 'Tables', '1000', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/7a8e42c83e07658d620808bd64f95f66.jpg'),
(42, 'Table Type E', 'Tables', '1000', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/e64b26b33f14e8af9abbd8f812f2d316.jpg'),
(43, 'Chair Type A', 'Chairs', '500', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/d0515beb8effb9ac23288357d2c181ba.jpg'),
(44, 'Chair Type B', 'Chairs', '500', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/2b7aa24ade92de4b64f9ea0501f00a65.jpg'),
(45, 'Chair Type C', 'Chairs', '500', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/7d71da778b6d11c91601edcf16b5ef83.jpg'),
(46, 'Chair Type D', 'Chairs', '500', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/037386ba319e2243277d0a0bb6a6b203.jpg'),
(47, 'Chair Type E', 'Chairs', '500', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/ce9c7459e88c2a75ab552a1b2513acdc.jpg'),
(48, 'Door Type A', 'Doors', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/ad721af99bb0da179253cb69e9cb0bd3.jpg'),
(49, 'Door Type B', 'Doors', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/65fe2c6a878a138e6ed17132978cfad2.jpg'),
(50, 'Door Type C', 'Doors', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/0fba7135a9399b52ac94163566e6892a.jpg'),
(51, 'Door Type D', 'Doors', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/977debbf1ca9cac848d8f42f49cc4ed1.jpg'),
(52, 'Door Type E', 'Doors', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/6139349f15741e06cc66a7813d9ab367.jpg'),
(53, 'Cabinets Type A', 'Cabinets', '700', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/adbc148b548cd7557b2903f8a45f9a57.jpg'),
(54, 'Cabinets Type B', 'Cabinets', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/17f09adc7509f67001a698f6221693ff.jpg'),
(55, 'Cabinets Type C', 'Cabinets', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/e43b9108fd5db95add4715da6da75ca8.jpg'),
(56, 'Cabinets Type D', 'Cabinets', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/1674d9d89571cd9ce7c575786ef56499.jpg'),
(57, 'Cabinets Type E', 'Cabinets', '900', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/142faa27397ef0679572b83495dae8f1.jpg'),
(58, 'Bed Type A', 'Beds', '1000', '', '', '', '', '', '', '', NULL, '', '', '', NULL, '', '', 'images/ae674a3109e08342cdbad45e2851cfd4.jpg'),
(59, 'Bed Type B', 'Beds', '900', '', '', '', '', '', '', '', NULL, '', '', '', '3', '', '', 'images/a354988d94a07c808a6103448c25bb30.jpg'),
(60, 'Bed Type C', 'Beds', '900', '', '', '', '', '', '', '', NULL, '', '', '', '1', '', '', 'images/670282aa1ca5494c870f38edc5d4c4b0.jpg'),
(61, 'Bed Type D', 'Beds', '900', '', '', '', '', '', '', '', NULL, '', '', '', '3', '', '', 'images/dcf179a27c712f9cc674a202fd5ebaca.jpg'),
(62, 'Regular Bed', 'Beds', '900', 'Native', '', '', '', '', 'Murang mura to!', '', NULL, '', '', '', '15', '', '', 'images/b21551f3626bce38aa1e9b19eb17b036.jpg'),
(64, 'asd', 'Tables', 'asd', '', '', '', '', '', '', '', NULL, '', '', '', '5', '4', '10', 'images/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` text,
  `fee` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id`, `place`, `fee`) VALUES
(2, 'Santo Tomas', '0'),
(3, 'Lipa', '0'),
(4, 'Malvar', '100'),
(5, 'Batangas', '200'),
(6, 'Cavite', '300'),
(7, 'Laguna', '200'),
(8, 'Rizal', '500'),
(9, 'Quezon', '600');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vouchers`
--

CREATE TABLE IF NOT EXISTS `tbl_vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_vouchers`
--

INSERT INTO `tbl_vouchers` (`id`, `voucher`) VALUES
(1, 'LANZ1'),
(2, 'LANZ2'),
(3, 'LANZ3'),
(4, 'LANZ4'),
(5, 'LANZ5'),
(6, 'LANZ6'),
(7, 'LANZ7'),
(8, 'LANZ8'),
(9, 'LANZ9');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
