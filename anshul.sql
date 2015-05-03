-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2015 at 08:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anshul`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` smallint(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `email` (`email`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `age`, `address`, `email`, `username`, `password`) VALUES
('', '', 0, 'address', '', '', ''),
('dkakla', 'sdnas,n', 25, 'address', 'amam@ss', 'asww s', '123'),
('dkakla', 'sdnas,n', 25, 'address', 'amam@sx', 'asww', '123'),
('Anshul', 'Agrawal', 25, 'address', 'ans@sa', 'ans', '123'),
('Anshul', 'Agrawal', 23, 'address', 'anshulagrawal134@gmail', 'anshul13', '123'),
('Anshul', 'Agrawal', 20, 'address', 'anshulagrawal134@gmail.com', 'anshul134', '123'),
('Anshul', 'sa', 2, 'address', 'sadss@ss', 'sa', '123'),
('dh', 'ggh', 0, 'address', 'sghq@jkj', 'jkjk', '121'),
('sxs', 'sxs', 0, 'address', 'xs@sxs', 'sxs', '121');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
