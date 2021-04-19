-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 08:51 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'monish@gmail.com', 'monish');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `categories` varchar(225) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `noofroom` int(10) NOT NULL,
  `value` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categories`, `guest`, `image`, `price`, `check_in`, `check_out`, `noofroom`, `value`, `children`, `total`) VALUES
(17, 'Single Bed', '1 Room, 1 Adult', 'upload/6717752_19040417220073501143.jpg', 1500, '2021-04-15', '2021-04-17', 2, 500, 2, 6500),
(18, 'Double Bed', '1 Room, 2 Adult', 'upload/d322c424-c65d-4c52-8587-fdfda21087d0.jpg', 2000, '2021-04-01', '2021-04-03', 2, 500, 2, 8500),
(19, 'Triple Bed', '1 Room, 3 Adult', 'upload/unnamed.jpg', 2750, '2021-04-06', '2021-04-22', 10, 500, 2, 28000);

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `children_id` int(10) NOT NULL,
  `children` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`children_id`, `children`) VALUES
(1, 'No Childre'),
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(7, '5');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'monish', 'monish@gmail.com', 'esteyt'),
(6, 'karan', 'karan@gmail.com', 'dryrty'),
(7, 'rahil', 'monish@gmail.com', 'gtfyt'),
(12, 'rahil', 'monish@gmail.com', 'rdtydr7t68'),
(13, 'payal', 'monish@gmail.com', 'tryru8y');

-- --------------------------------------------------------

--
-- Table structure for table `extrabed`
--

CREATE TABLE `extrabed` (
  `bed_id` int(10) NOT NULL,
  `extrabed` varchar(255) NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `extrabed`
--

INSERT INTO `extrabed` (`bed_id`, `extrabed`, `value`) VALUES
(1, 'No Extra Bed', 0),
(2, '1', 500),
(3, '2', 500),
(4, '3', 500),
(5, '4', 500),
(6, '5', 500),
(7, '6', 500),
(8, '7', 500),
(11, '8', 500),
(12, '9', 500),
(13, '10', 500),
(18, '11', 500),
(19, '12', 500),
(20, '13', 500);

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `guest` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `noofroom` int(10) NOT NULL,
  `extra_bed` int(10) NOT NULL,
  `children` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final`
--

INSERT INTO `final` (`id`, `user`, `categories`, `guest`, `image`, `price`, `check_in`, `check_out`, `noofroom`, `extra_bed`, `children`, `total`, `name`, `email`, `phone`) VALUES
(116, 'monish@gmail.com', 'Triple Bed', '1 Room, 3 Adult', 'upload/unnamed.jpg', 2750, '2021-04-06', '2021-04-22', 1, 0, 0, 27500, 'rahil', 'monish@gmail.com', '9960791240'),
(119, 'monish@gmail.com', 'Triple Bed', '1 Room, 3 Adult', 'upload/unnamed.jpg', 2750, '2021-04-06', '2021-04-22', 1, 0, 0, 27500, 'monish', 'monish@gmail.com', '9960791240'),
(121, 'monish@gmail.com', 'Double Bed', '1 Room, 2 Adult', 'upload/d322c424-c65d-4c52-8587-fdfda21087d0.jpg', 2000, '2021-04-13', '2021-04-22', 5, 500, 5, 10500, 'monish', 'monish@gmail.com', '9960791240'),
(122, 'payal@gmail.com', 'Single Bed', '1 Room, 1 Adult', 'upload/6717752_19040417220073501143.jpg', 1500, '2021-04-15', '2021-04-13', 1, 0, 0, 2000, 'karan', 'karan@gmail.com', '2323232323'),
(123, 'payal@gmail.com', 'Triple Bed', '1 Room, 3 Adult', 'upload/unnamed.jpg', 2750, '2021-04-06', '2021-04-22', 10, 500, 2, 28000, 'monish', 'monish@gmail.com', '9960791240'),
(124, 'monish@gmail.com', 'Single Bed', '1 Room, 1 Adult', 'upload/6717752_19040417220073501143.jpg', 1500, '2021-04-15', '2021-04-17', 2, 500, 2, 6500, 'monish', 'monish@gmail.com', '9960791240'),
(125, 'monish@gmail.com', 'Double Bed', '1 Room, 2 Adult', 'upload/d322c424-c65d-4c52-8587-fdfda21087d0.jpg', 2000, '2021-04-01', '2021-04-03', 2, 500, 2, 8500, 'monish', 'monish@gmail.com', '9960791240'),
(126, 'monish@gmail.com', 'Double Bed', '1 Room, 2 Adult', 'upload/d322c424-c65d-4c52-8587-fdfda21087d0.jpg', 2000, '2021-04-01', '2021-04-03', 2, 500, 2, 8500, 'payal', 'monish@gmail.com', '9960791240'),
(127, 'monish@gmail.com', 'Single Bed', '1 Room, 1 Adult', 'upload/6717752_19040417220073501143.jpg', 1500, '2021-04-15', '2021-04-17', 2, 500, 2, 6500, 'karan', 'karan@gmail.com', '2323232323'),
(128, 'karan@gmail.com', 'Single Bed', '1 Room, 1 Adult', 'upload/6717752_19040417220073501143.jpg', 1500, '2021-04-15', '2021-04-17', 2, 500, 2, 6500, 'karan', 'karan@gmail.com', '2323232323');

-- --------------------------------------------------------

--
-- Table structure for table `noofroom`
--

CREATE TABLE `noofroom` (
  `room_id` int(10) NOT NULL,
  `noofroom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `noofroom`
--

INSERT INTO `noofroom` (`room_id`, `noofroom`) VALUES
(2, '1'),
(3, '2'),
(4, '3'),
(5, '4'),
(6, '5'),
(7, '6'),
(8, '7'),
(9, '8'),
(11, '9'),
(12, '10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'monish@gmail.com', 'monish'),
(2, 'payal@gmail.com', 'payal'),
(3, 'karan@gmail.com', 'karan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`children_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extrabed`
--
ALTER TABLE `extrabed`
  ADD PRIMARY KEY (`bed_id`);

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noofroom`
--
ALTER TABLE `noofroom`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `children_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `extrabed`
--
ALTER TABLE `extrabed`
  MODIFY `bed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `final`
--
ALTER TABLE `final`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `noofroom`
--
ALTER TABLE `noofroom`
  MODIFY `room_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
