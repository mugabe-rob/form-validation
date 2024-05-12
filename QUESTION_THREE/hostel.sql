-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2024 at 08:25 PM
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
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`fullname`, `email`, `phone`, `location`, `message`) VALUES
('Robert', 'abizeyimanapascal222007314@gmail.com', '0790095020', 'gikondo', 'Mwakoze Cyane');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`fullname`, `email`, `phone`, `item`, `address`, `date`) VALUES
('MUGABE Robert', 'mugaberoberto007@GMAIL.COM', '0790095020', 'Classic Mojito', 'kgl', '2024-05-16'),
('MUCYO I van', 'mucyo@gmail.com', '0788927223', 'Orange Delight', 'Kigali', '2024-05-20'),
('KABARUNGI Magret', 'kabarungimagret@gmail.com', '0788543234', 'Classic Mojito', 'London,UK', '2024-05-07'),
('UWASE Brenda', 'brendauwase@gmail.com', '0789737682', 'Classic Mojito', 'Nyagatare', '2024-05-22'),
('ISHIMWE David', 'davidish@gmail.com', '0790795020', 'Classic Mojito', 'kgl', '2024-05-16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
