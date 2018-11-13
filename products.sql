-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 06:21 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discription` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `discription`, `created_at`, `updated_at`, `image`) VALUES
(3, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(19, 'car', 2486234982, 'car', 'jksdj sd fksd klf dfj sdk gklsdf lksd glfkd kljfd klgjs ljkgfkld gklsf klgjsd fkljg;lsk djkdf kl', '2018-11-13 11:46:25', '2018-11-13 11:46:25', 'https://auto.ndtvimg.com/car-images/medium/jeep/compass/jeep-compass.jpg?v=2'),
(23, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(24, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(25, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(26, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(27, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(28, 'samsung note 8', 7877, 'mobile', 'jks ncjasd cijasd ncnasd isdu asd iuas dsia ', NULL, NULL, 'https://assets.mspcdn.net/t_c-desktop-normal,f_auto,q_auto,d_c:noimage.jpg/c/11918-55-1.jpg'),
(31, 'oppo', 28937, 'mobile', 'kj sj dk duwe hduiwed weu de', '2018-11-13 13:08:54', '2018-11-13 13:08:54', 'http://d2pa5gi5n2e1an.cloudfront.net/global/images/product/mobilephones/OPPO_A83/OPPO_A83_L_1.jpg');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
