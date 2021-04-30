-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 06:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rail`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_list`
--

CREATE TABLE `admin_list` (
  `FullName` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_list`
--

INSERT INTO `admin_list` (`FullName`, `Phone`, `Email`, `DateOfBirth`, `Gender`, `Uname`, `Password`) VALUES
('Shifat mahamud', '01703657599', 'shifatm169@gmail.com', '2007-02-06', 'male', 'Shifat123', '87654321@');

-- --------------------------------------------------------

--
-- Table structure for table `train_info`
--

CREATE TABLE `train_info` (
  `TrainNo` varchar(50) NOT NULL,
  `TrainName` varchar(50) NOT NULL,
  `StartingPoint` varchar(50) NOT NULL,
  `ArrivalTime` time NOT NULL,
  `Destinationpoint` varchar(50) NOT NULL,
  `DepartureTime` time NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_info`
--

INSERT INTO `train_info` (`TrainNo`, `TrainName`, `StartingPoint`, `ArrivalTime`, `Destinationpoint`, `DepartureTime`, `Date`) VALUES
('1001', 'Sundarban Express', 'Dhaka', '12:15:00', 'Khulna', '20:30:00', '2021-04-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
