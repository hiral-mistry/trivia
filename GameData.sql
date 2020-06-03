-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 12:39 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Trivia`
--

-- --------------------------------------------------------

--
-- Table structure for table `GameData`
--

CREATE TABLE `GameData` (
  `id` int(11) NOT NULL,
  `Username` varchar(65) NOT NULL,
  `Cricketer` varchar(50) NOT NULL,
  `FlagColor` varchar(65) NOT NULL,
  `CreateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `GameData`
--

INSERT INTO `GameData` (`id`, `Username`, `Cricketer`, `FlagColor`, `CreateTime`) VALUES
(1, 'hiral mistry', 'Virat Kohli', 'White,Orange,Green', '2020-06-03 10:37:50'),
(2, 'Jignesh Mistry', 'Adam Gilchirst', 'White,Orange,Green', '2020-06-03 10:38:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `GameData`
--
ALTER TABLE `GameData`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `GameData`
--
ALTER TABLE `GameData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
