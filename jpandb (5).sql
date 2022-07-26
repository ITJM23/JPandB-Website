-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 05:36 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `fullname`, `username`, `password`, `admin_position`) VALUES
(1, 'John Mark Tolentino', 'johnmark2313', 'kyokusanagi23', 'admin'),
(2, 'Thessalonica Acuzar', 'thessa123', 'thessa123', 'head_admin');

-- --------------------------------------------------------

--
-- Table structure for table `inquirelist`
--

CREATE TABLE `inquirelist` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `contactnumber` varchar(255) NOT NULL,
  `property` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inquirelist`
--

INSERT INTO `inquirelist` (`id`, `email`, `fullname`, `age`, `occupation`, `contactnumber`, `property`, `location`, `day`, `time`, `date`) VALUES
(2, 'tolentinojohnmark23@gmail.com', 'John Mark Tolentino', '21', 'web developer', '09462698023', 'any', 'Quezon', 'Saturday', '2:00 PM', '07.21.2020'),
(3, '', '', '', '', '', '', '', '', '', '07.22.2020');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `fullname`, `username`, `date`, `time`) VALUES
(22, 'John Mark Tolentino', 'johnmark2313', '07.21.2020', '05:07'),
(23, 'Thessalonica Acuzar', 'thessa123', '07.22.2020', '11:07'),
(24, 'Thessalonica Acuzar', 'thessa123', '07.25.2020', '10:07'),
(25, 'Thessalonica Acuzar', 'thessa123', '07.30.2020', '10:07');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pending_register`
--

CREATE TABLE `pending_register` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `floor_area` varchar(255) NOT NULL,
  `lot_range` varchar(255) NOT NULL,
  `price_range` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `developer` varchar(255) NOT NULL,
  `Amenities` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image`, `name`, `floor_area`, `lot_range`, `price_range`, `location`, `developer`, `Amenities`) VALUES
(4, 'alcoveclub.jpg', 'The Alcove at Mt. Malarayat', '', '70,096 sq.m - 301 - 840 sq.m', 'Php 14,500 - 16,000 / sq.m', 'Mt. Malarayat', 'The Active Land Estate Sales Incorporated', ''),
(5, 'portolaiya.jpg', 'Porto Laiya', '', '35.43 hectares 264 sq.m - 1,354 sq.m', 'Php 13,100 - 20,000 /sq.m', 'BRGY. Laiya IBABAO San Juan, Batangas', 'The Active Land Estate Sales Incorporated', ''),
(7, 'MOZZA.jpg', 'Mozzapiato', '', '77.3 hectares , 400sq.m - 1000 sq.m', '10,000 - 16,000 / sq.m', 'Brgy. Palsara, Brgy. Marikina & Brgy. Alangilan, Balete Batangas', 'The Active land Estate Sales Incorporated', ''),
(8, 'MACY.jpg', 'Macy', '67 sqm', '128 sqm -  160sqm', '5.8M - 8.5M', 'Avida Batangas, Avida Settings Lipa, Avida Southfield Nuvali', 'Avida Land Corp.', 'Swimming pool, Basketball Court, Community Club House\r\n\r\n\r\n\r\n'),
(9, 'CELINE.jpg', 'Celine', '52 sqm', '125 sqm -  283sqm', '4.8M - 8.6M', 'Avida Batangas, Avida Settings Lipa, Avida Southfield Nuvali', 'Avida Land Corp.', 'Swimming pool, Basketball Court, Community Club House\r\n\r\n\r\n\r\n'),
(10, 'TRISTA.jpg', 'Trista', '85sqm', '155 sqm -  261sqm', '6.3M - 9.3M', 'Avida Batangas, Avida Settings Lipa, Avida Southfield Nuvali', 'Avida Land Corp.', 'Swimming pool, Basketball Court, Community Club House'),
(11, 'Lotonly.jpg', 'Lot only', '', '167 sqm -  268sqm', '2.3M - 6.7M', 'Avida Batangas, Avida Settings Lipa, Avida Southfield Nuvali', 'Avida Land Corp.', 'Swimming pool, Basketball Court, Community Club House');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquirelist`
--
ALTER TABLE `inquirelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_register`
--
ALTER TABLE `pending_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquirelist`
--
ALTER TABLE `inquirelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_register`
--
ALTER TABLE `pending_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
