-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 20, 2022 at 06:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `unit_price` double(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `catagory_id` int(11) DEFAULT NULL,
  `inventory_id` int(11) DEFAULT NULL,
  `discount_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `product_name`, `unit_price`, `created_at`, `modified_at`, `catagory_id`, `inventory_id`, `discount_id`) VALUES
(1, 'p1.jpg', 'Thirt', 12.12, '2022-06-19 17:41:27', '2022-06-19 17:41:27', 1, 1, 1),
(2, 'p2.jpg', 'Thirt', 12.44, '2022-06-19 17:42:53', '2022-06-19 17:42:53', 2, 2, 2),
(3, 'p3.jpg', 'Thirt', 133.12, '2022-06-19 17:44:47', '2022-06-19 17:44:47', 3, 3, 3),
(4, 'p4.jpg', 'Jeans pant', 124.33, '2022-06-19 17:45:43', '2022-06-19 17:45:43', 4, 4, 4),
(5, 'p5.jpg', 'Some thinng', 124.33, '2022-06-19 17:46:35', '2022-06-19 17:46:35', 4, 4, 4),
(6, 'p6.jpg', 'Shoe', 12.12, '2022-06-19 17:47:06', '2022-06-19 17:47:06', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title_short_txt` varchar(255) DEFAULT NULL,
  `title_large_txt` varchar(255) DEFAULT NULL,
  `description_txt` varchar(255) DEFAULT NULL,
  `button_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `title_short_txt`, `title_large_txt`, `description_txt`, `button_url`) VALUES
(1, '01.jpg', 'Short Title1', 'Summer Collection', 'This is Description Text', 'https://www.youtube.com/watch?v=QU43xeaAtSY'),
(2, '02.jpg', 'Short Title2 ', 'Short Title3', 'This is simple description text', 'http://localhost/ecommerce/client/pages/home/home.php'),
(6, '1655671305121805469462af8a09828d3.jpg', 'sknvknd', 'nkavknav', 'asnkank                                                    \r\n                                                    ', 'vakan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
