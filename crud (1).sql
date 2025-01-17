-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 09:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `password`, `qualification`, `address`, `gender`, `language`, `image`) VALUES
(71, 'sunita kamble', 'lemi@mailinator.com', 'Pa$$w0rd!', 'BCA', 'Sint eum possimus o', 'male', 'PHP,Node.Js', 'upload/Screenshot (62).png'),
(77, 'Roanna Page', 'vibavoh@mailinator.com', 'Pa$$w0rd!', 'BCA', 'Eveniet quis natus ', 'female', 'PHP,Node.Js', 'upload/'),
(80, 'Mahesh', 'mahesh@gmail.com', '45555845454', 'BE', 'hello this is address', 'male', 'PHP,Java', 'upload/mobilephone.jpg'),
(81, 'Serena Johnston', 'goniruciky@mailinator.com', 'Pa$$w0rd!', 'BE', 'Sed ut eaque laborio', 'female', 'PHP,Java', 'upload/television.png'),
(82, 'Neve Bowers', 'velylikuvi@mailinator.com', 'Pa$$w0rd!', 'MCA', 'Quae rerum tempore ', 'male', 'PHP,Node.Js', 'upload/'),
(83, 'Gabriel Boone', 'cozyju@mailinator.com', 'Pa$$w0rd!', 'MCA', 'Hic sed sint in cum ', 'male', 'PHP,Java,Node.Js', 'upload/mouse.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
