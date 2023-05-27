-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 27, 2023 at 10:02 AM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesories`
--

DROP TABLE IF EXISTS `accesories`;
CREATE TABLE IF NOT EXISTS `accesories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `accesories`
--

INSERT INTO `accesories` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Belt', '500', 'acc-prod-1.jpg', '- Belt by Webazaar\r\n<br>\r\n- 100% Leather\r\n<br>\r\n- HIGH QUALITY BELT: With its single prong buckle made of nickel-free leather and high-quality construction, this belt gives you a neat and polished appearance.\r\n<br>'),
(2, 'Watch', '2000', 'acc-prod-2.jpg', '- Watch by Webazaar\r\n<br>\r\n- 40 millimeter brass case with mineral glass crystal\r\n<br>\r\n- It is generally acceptable for brief durations of recreational swimming up to 50 meters (165 feet), but not diving or snorkeling.\r\n<br>'),
(3, 'Hand Bag', '3000', 'acc-prod-3.jpg', '- Hand Bag by Webazaar\r\n<br>\r\n- Bag size : 5.15 x 7.9 x 3.15 inches (13 x 20 x 8cm)\r\n<br>\r\n- Lightweight crossbody purse for women is made of PU leather, without any weird smell. PU leather is durable and easy to clean, simply just wipe with water to keep this bag looking new.\r\n<br>');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(22, 18, 'White Crop Top', '500', 'women-prod-1.jpg', 1),
(23, 18, 'White Turtleneck', '500', 'men-prod-1.jpg', 1),
(21, 18, 'Basic Black Turtleneck', '800', 'men-prod-2.jpg', 1),
(24, 18, 'Collared Long Sleeves', '750', 'women-prod-3.jpg', 1),
(45, 17, 'White Turtleneck', '500', 'men-prod-1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `men-products`
--

DROP TABLE IF EXISTS `men-products`;
CREATE TABLE IF NOT EXISTS `men-products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `men-products`
--

INSERT INTO `men-products` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'White Turtleneck', '500', 'men-prod-1.jpg', '- White Turtleneck by Webazaar\r\n<br>\r\n- 60% Polyester and 40% Cotton\r\n<br>\r\n- Machine Wash\r\n<br>\r\n- Slim Fit. This fashion basic thermal turtleneck sweaters could be matched with stylish jeans or casual pants for the daily look, or pair with a suit or jacket for a classic style\r\n<br>'),
(2, 'Basic Black Turtleneck', '800', 'men-prod-2.jpg', '- Basic Black Turtleneck by Webazaar\r\n<br>\r\n- 60% Polyester and 40% Cotton\r\n<br>\r\n- Machine Wash\r\n<br>\r\n- Slim Fit. This fashion basic thermal turtleneck sweaters could be matched with stylish jeans or casual pants for the daily look, or pair with a suit or jacket for a classic style\r\n<br>'),
(3, 'Brown Suit', '800', 'men-prod-3.jpg', '- Brown Suit by Webazaar\r\n<br>\r\n- 80% Polyester and 20% Viscose\r\n<br>\r\n- Dry Clean Only\r\n<br>\r\n- Occasions. Easy to Match with Any Formal, Business Tuxedo Shirt in Wedding, Party, Business, Graduation, Date, Work, Meeting, and Prom.\r\n<br>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

DROP TABLE IF EXISTS `tbl_accounts`;
CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `salt` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `joined` datetime DEFAULT NULL,
  `groups` int(11) DEFAULT NULL,
  `quote` varchar(20) DEFAULT NULL,
  `dp` longblob DEFAULT NULL,
  `nm` varchar(255) DEFAULT NULL,
  `mm` varchar(255) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `diploma` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`id`, `username`, `password`, `salt`, `name`, `joined`, `groups`, `quote`, `dp`, `nm`, `mm`, `email`, `diploma`) VALUES
(17, 'DIOR', '4755ab6a7f117dd27626e2721ceb1d0d6acd2ff172ec23d8d5358b47f9ff7196', 'Š)rš„,ÃÚ¬±ž’îK&œ¯‹ ÒQï¹øjq', 'akhsdfjaksddsa', '2023-05-23 00:56:36', 1, NULL, NULL, NULL, NULL, 'safasfasfdsa', 0),
(18, 'RNCS', '24488719a1046109edea55706213d0006e15130590702a425e45dda013779626', '¬@ÄI£*J\ZewNe¶>…ìmZTÂÓáp½vC.ºž’', 'Neil Salcedo', '2023-05-24 16:50:27', 1, NULL, NULL, NULL, NULL, 'Hello@', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

DROP TABLE IF EXISTS `user_session`;
CREATE TABLE IF NOT EXISTS `user_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hash` varchar(120) CHARACTER SET utf8mb3 COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `women-products`
--

DROP TABLE IF EXISTS `women-products`;
CREATE TABLE IF NOT EXISTS `women-products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `women-products`
--

INSERT INTO `women-products` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'White Crop Top', '500', 'women-prod-1.jpg', '- White Crop Top by Webazaar\r\n<br>\r\n- 85% Nylon and 15% Spandex\r\n<br>\r\n- Machine Wash\r\n<br>\r\n- Perfect for any occasion. Our crop top is ideal for every event, including travel, nightclubs, parties, casual wear, daily wear, the beach, and more.\r\n<br>'),
(2, 'Turtleneck Long Sleeves', '800', 'women-prod-2.jpg', '- Turtleneck Long Sleeves by Webazaar\r\n<br>\r\n- 55% Cotton, 25% Modal, and 20% Polyester\r\n<br>\r\n- Machine Wash\r\n<br>\r\n- Perfect for any occasion. Simple style can with any jeans pants boots or skirt for city and daily looks\r\n<br>'),
(3, 'Collared Long Sleeves', '750', 'women-prod-3.jpg', '- Collared Long Sleeves by Webazaar\r\n<br>\r\n- 92% Polyester and 8% Spandex\r\n<br>\r\n- Machine Wash\r\n<br>\r\n- Perfect for any occasion. For ladies, these long sleeve polo shirts are perfect for golf, hiking, work, fishing, traveling, jogging, running, workout, fitness, backpacking, climbing, camping, and other outdoor activities as well as for everyday casual wear.\r\n<br>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
