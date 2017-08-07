-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 04:59 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kayak`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `transfer_from` int(11) NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `distance` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `price_4seat` int(11) NOT NULL,
  `price_7seat` int(11) NOT NULL,
  `price_16seat` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_flg` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `transfer_from`, `route`, `distance`, `duration`, `price_4seat`, `price_7seat`, `price_16seat`, `created_at`, `updated_at`, `del_flg`) VALUES
(2, 1, 'Danang airport to Hoi An', 3522, 40, 1000, 900, 800, '2017-08-07 21:58:30', '2017-08-07 14:58:49', 1),
(3, 1, 'Danang airport to Lang Co beach', 35, 40, 1000, 900, 800, '2017-08-07 21:58:30', '2017-08-07 21:58:30', 1),
(4, 1, 'Danang airport to Hue', 35, 40, 1000, 900, 800, '2017-08-07 21:58:30', '2017-08-07 21:58:30', 1),
(5, 1, 'Danang airport to Hoi An', 35, 40, 1000, 900, 800, '2017-08-07 21:58:30', '2017-08-07 21:58:30', 1),
(6, 2, 'Hoi An to Hue via Hai Van tunnels', 35, 40, 1000, 900, 800, '2017-08-07 21:58:30', '2017-08-07 21:58:30', 1),
(9, 1, 'Danang airport to Hoi An22', 1, 1, 1, 1, 1, '2017-08-07 21:59:02', '2017-08-07 21:59:02', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
