-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2021 at 12:43 AM
-- Server version: 5.7.33-log-cll-lve
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
-- Database: `yunlei_aau_wnm608_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `author` varchar(64) NOT NULL,
  `genre` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `stock` varchar(256) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `author`, `genre`, `price`, `description`, `stock`, `date_create`, `date_modify`, `thumbnail`, `images`) VALUES
(1, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Fantasy', 17.49, 'Hardcover, Library Edition, 309 pages', '50', '2021-07-19 23:52:22', '2021-07-19 23:52:22', 'img/hp-01.jpg', 'img/hp-01.jpg'),
(2, 'Betty', 'Tiffany McDaniel ', 'Historical Fiction', 13.99, 'Hardcover, 480 pages', '50', '2021-07-19 23:54:34', '2021-07-19 23:54:34', 'img/betty.jpeg', 'img/betty.jpeg'),
(3, 'Miracle Creek', 'Angie Kim', 'Mystery', 11.63, 'Hardcover, 355 pages', '50', '2021-07-19 23:56:35', '2021-07-19 23:56:35', 'img/creek.jpeg', 'img/creek.jpeg'),
(4, 'Deacon King Kong', 'James McBride', 'Fiction', 12.59, 'Hardcover, 371 pages', '50', '2021-07-19 23:58:17', '2021-07-19 23:58:17', 'img/deacon.jpeg', 'img/deacon.jpeg'),
(5, 'The Family Upstairs', 'Lisa Jewell', 'Mystery', 13.35, 'Hardcover, 340 pages', '50', '2021-07-19 23:59:48', '2021-07-19 23:59:48', 'img/family.jpeg', 'img/family.jpeg'),
(6, 'The Guest List', 'Lucy Foley', 'Mystery', 12.19, 'Hardcover, 330 pages', '50', '2021-07-20 00:01:06', '2021-07-20 00:01:06', 'img/guest.jpeg', 'img/guest.jpeg'),
(7, 'The Moon and Sixpence', 'W. Somerset Maugham', 'Fiction', 15.99, 'Paperback, 192 pages', '50', '2021-07-20 00:02:38', '2021-07-20 00:02:38', 'img/moon.jpeg', 'img/moon.jpeg'),
(8, 'The Silent Patient', 'Alex Michaelides', 'Thriller', 13.67, 'Hardcover, 325 pages', '50', '2021-07-20 00:03:55', '2021-07-20 00:03:55', 'img/patient.jpeg', 'img/patient.jpeg'),
(9, 'Searching for Sylvie Lee', 'Jean Kwok ', 'Fiction', 12.13, 'Hardcover, 336 pages', '50', '2021-07-20 00:05:19', '2021-07-20 00:05:19', 'img/searching.jpeg', 'img/searching.jpeg'),
(10, 'The Vanishing Half', 'Brit Bennett', 'Fiction', 18.65, 'Hardcover, 343 pages', '50', '2021-07-20 00:07:04', '2021-07-20 00:07:04', 'img/vanishing.jpeg', 'img/vanishing.jpeg'),
(11, 'The Whisper Man', 'Alex North', 'Thriller', 11.54, 'Hardcover, 355 pages', '50', '2021-07-20 00:14:34', '2021-07-20 00:14:34', 'img/whisper.jpeg', 'img/whisper.jpeg'),
(12, 'The Okay Witch and the Hungry Shadow', 'Emma Steinkellner', 'Graphic Novels', 10.29, 'Paperback, 256 pages', '50', '2021-07-20 00:16:06', '2021-07-20 00:16:06', 'img/witch.jpeg', 'img/witch.jpeg');

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
