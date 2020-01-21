-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 12:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `clinicaddress` varchar(30) NOT NULL,
  `clinictiming` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `slot` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nationalid` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `clinicaddress` varchar(40) NOT NULL,
  `clinictiming` varchar(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `mobile`, `email`, `nationalid`, `qualification`, `department`, `experience`, `clinicaddress`, `clinictiming`, `username`, `password`, `status`) VALUES
('13', 'Sanjay bhat', 9192939495, 'sanjay@gmail.com', '12398', 'MD-UROLOGY', 'UROLOGY', '15years', 'Rajagiri Hospital Aluva', '10am-4pm', 'sanjay', '123', 'Approved'),
('1', 'Mohan Abraham', 1234567890, 'mohan@gmail.com', '12345678', 'MBBS', 'cardiology', '15years', 'abdc', '9am-12pm', 'mohan', '123', 'Approved'),
('3', 'Arun Mohan', 9192939497, 'arun@gmail.com', '23456789', 'MBBS', 'Gastrology', '2years', 'abcdf', '10am-4pm', 'arun', 'arun1234', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nationalid` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `gender`, `mobile`, `email`, `nationalid`, `username`, `password`) VALUES
('2', 'Jebin', 23, 'Male', 1234567890, 'jebin@gmail.com', '97531', 'jebin', '1234'),
('3', 'Ajumal Mohammed', 24, 'Male', 9846830600, 'ajumal@gmail.com', '12345678', 'ajumal', 'ajumal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
