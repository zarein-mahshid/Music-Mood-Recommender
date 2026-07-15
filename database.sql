-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2026 at 02:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'mahshid', 'mahshidzr@gmail.com', 'Test', 'This is for test!!');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `mood` varchar(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `artist` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `mood`, `title`, `artist`) VALUES
(1, 'Happy', 'Morghe Sahar', 'MohammadReza Shajarian'),
(2, 'Happy', 'Bist Hezar Arezoo', 'Mohsen Chavoshi'),
(3, 'Happy', 'Dokhtar Irooni', 'Siavash Shams'),
(4, 'Sad', 'Hamkhab', 'Mohsen Chavoshi'),
(5, 'Sad', 'Saate Divari', 'Mohsen Chavoshi'),
(6, 'Sad', 'Yaraam', 'MohammadReza Shajarian'),
(7, 'Sad', 'Baran Mibarad', 'Omid'),
(8, 'Love', 'Gole Yakh', 'Kourosh Yaghmaei'),
(9, 'Love', 'Harighe Sabz', 'Ebi'),
(10, 'Love', 'Ghese Eshgh', 'Ebi'),
(11, 'Instrumental', 'Lofti verur skyndilega', 'Olafur Arnalds'),
(12, 'Instrumental', 'Spanish Lullaby', 'The Montmartre Strings'),
(13, 'Instrumental', 'Lost Soul', 'Lucid Keys');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
