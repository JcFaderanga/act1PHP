-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql210.byetcluster.com
-- Generation Time: Mar 19, 2023 at 09:21 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33830424_we`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `firstname`, `middlename`, `surname`) VALUES
(5, 'julius', 'yes', 'gege'),
(3, 'no', 'yes', 'no'),
(4, 'name', 'middle1', 'last1'),
(6, 'julius', 'yes', 'gege'),
(7, 'youtube', 'DOT', 'com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
