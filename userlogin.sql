-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 08:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`, `type`, `status`) VALUES
('abid@gmail.com', 'abid', 'manager', 'active'),
('admin', 'admin', 'admin', 'active'),
('afnan@gmail.com', '123456', 'customer', 'active'),
('bilkis@gmail.com', 'bilkis1', 'manager', 'deactive'),
('c@gmail.com', '123456', 'customer', 'active'),
('emon@gmail.com', 'asdfasdf', 'manager', 'active'),
('emonhasan@gmail.com', '12121212', 'manager', 'active'),
('harun@gmail.com', 'harun4', 'manager', 'active'),
('hasib@gmal.com', 'hasib1', 'customer', 'active'),
('imrul.afnan@gmail.com', 'asasqw', 'customer', 'active'),
('jahid@gmail.com', 'qwerty', 'cashier', 'active'),
('orin@gmail.com', 'orin12', 'customer', 'active'),
('rupu@gmail.com', 'qwqwqw', 'customer', 'active'),
('sayma@gmail.com', 'sayma1', 'customer', 'active'),
('soumik@gmail.com', 'asqwas', 'manager', 'active'),
('x@gmail.com', 'aaaaaa', 'customer', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
