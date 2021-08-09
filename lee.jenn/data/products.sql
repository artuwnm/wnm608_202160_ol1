-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2021 at 09:48 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jenn_thevine`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `description` text NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `url`, `price`, `category`, `date_create`, `date_modify`, `description`, `thumbnail`, `images`, `quantity`) VALUES
(1, 'Monstera Plant', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=1', 40.00, 'leaf', '2021-07-18 17:11:13', '2021-07-18 17:11:13', 'Monstera is a low maintenance plant that needs to be watered once a week.', 'img/monstera-1.jpg', 'img/monstera-1.jpg', 10),
(2, 'Mikania Flower', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=2', 50.00, 'flower', '2021-07-18 17:16:29', '2021-07-18 17:16:29', 'Mikania flower is great for brightening up any indoor space. It requires water once every day. ', 'img/mikania-2.jpg', 'img/mikania-2.jpg', 10),
(3, 'Aluminum Plant', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=3', 30.00, 'leaf', '2021-07-18 18:14:42', '2021-07-18 18:14:42', 'Perfect for decoration, and low maintenance plant. Only needs water once a week. ', 'img/alum-3.jpg', 'img/alum-3.jpg', 10),
(4, 'Alocasia', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=4', 80.00, 'leaf', '2021-07-18 18:16:37', '2021-07-18 18:16:37', 'These tall leaves can decorate any environment to a modern space. Needs to be watered once a week.', 'img/alocasia-4.jpg', 'img/alocasia-4.jpg', 10),
(5, 'Alsobia', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=5', 30.00, 'leaf', '2021-07-18 18:18:22', '2021-07-18 18:18:22', 'Alsobia is an exotic plant that can add a bit of excitement in your plant collection. Needs to be watered three times a day, every day.', 'img/alsobia-5.jpg', 'img/alsobia-5.jpg', 10),
(6, 'Parodia Cactus', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=6', 40.00, 'cactus', '2021-07-18 18:19:45', '2021-07-18 18:19:45', 'Also known for the beautiful yellow colors. Parodia cactus needs water once a week. ', 'img/parodia-6.jpg', 'img/parodia-6.jpg', 10),
(7, 'Shrub plant ', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=7', 40.00, 'leaf', '2021-07-18 18:21:11', '2021-07-18 18:21:11', 'These beautiful shrubs come in a gray stone pot to complement any plant collections. Needs to be watered once a week.', 'img/shrub-7.jpg', 'img/shrub-7.jpg', 10),
(8, 'Barrel Cactus', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=8', 50.00, 'cactus', '2021-07-18 18:22:29', '2021-07-18 18:22:29', 'Barrel cactus is known for showing off it’s cute and round figure. Needs to be watered twice per week.', 'img/barrel-8.jpg', 'img/barrel-8.jpg', 10),
(9, 'Philodendron', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=9', 80.00, 'leaf', '2021-07-18 18:24:16', '2021-07-18 18:24:16', 'The exotic and long leaves are placed in a special pot to be decorated in any place. Water is needed twice per month.', 'img/phil-9.jpg', 'img/phil-9.jpg', 10),
(10, 'Jade plant', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=10', 80.00, 'leaf', '2021-07-18 18:26:25', '2021-07-18 18:26:25', 'The Jade plant comes with a complementary plant for an extra modern decoration. These low maintenance plants only needs to be watered once a week.', 'img/jade-10.jpg', 'img/jade-10.jpg', 10),
(11, 'Star Cactus', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=11', 50.00, 'cactus', '2021-07-18 18:29:57', '2021-07-18 18:29:57', 'Perfect for any desks, the star cactus also has the ability to absorb radiations produced by computers. Needs to be watered once a week. ', 'img/starc-11.jpg', 'img/starc-11.jpg', 10),
(12, 'Saguaro Cactus', 'http://codejenn.com/jlee/aau/wnm608/lee.jenn/product_item.php?id=12', 30.00, 'cactus', '2021-07-18 18:31:33', '2021-07-18 18:31:33', 'These short but widely expanded legs can add a bit of fun to your plant collections. Needs to be watered once a week.', 'img/saguaro-12.jpg', 'img/saguaro-12.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
