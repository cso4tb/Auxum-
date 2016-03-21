-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2016 at 02:40 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auxum`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` char(2) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `address`, `city`, `state`, `zip`, `joined`) VALUES
('Brian Zanti', 'brianzanti@gmail.com', '839 Smartts Lane', 'Leesburg', 'VA', '20176', '0000-00-00'),
('Brian Zanti', 'brianzanti@gmail.com', '839 Smartts Lane', 'Leesburg', 'VA', '20176', '1994-01-02'),
('', 'brianzanti@gmail.com', '839 Smartts Lane', 'Leesburg', 'VA', '20176', '1994-01-02'),
('Brian Zanti', 'brianzanti@gmail.com', '839 Smartts Lane', 'Leesburg', 'VA', '20176', '1994-01-02'),
('Brian Zanti', 'brianzanti@gmail.com', '839 Smartts Lane', 'Leesburg', 'VA', '20176', '1994-01-02'),
('Brian', 'brianzanti@gmail.com', '803 Smartts Lane Northeast', 'Leesburg', 'Vi', '20176', '2016-02-25'),
('Jon Stewart', 'jon@thedailyshow.com', '1 new york ave', 'New York', 'NY', '99999', '2016-02-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
