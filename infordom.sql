-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 12:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infordom`
--

-- --------------------------------------------------------

--
-- Table structure for table `odsustva`
--

CREATE TABLE `odsustva` (
  `id` int(10) UNSIGNED NOT NULL,
  `vrsta_odsustva` varchar(13) NOT NULL,
  `datum_odsustva` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `odsustva`
--

INSERT INTO `odsustva` (`id`, `vrsta_odsustva`, `datum_odsustva`, `created_at`, `updated_at`) VALUES
(1, 'bolovanje', '2019-09-04', '2019-09-03 21:42:29', '0000-00-00 00:00:00'),
(2, 'bolovanje', '2019-09-10', '2019-09-03 21:43:06', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `odsustva`
--
ALTER TABLE `odsustva`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odsustva`
--
ALTER TABLE `odsustva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
