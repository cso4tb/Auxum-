-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 11:06 PM
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
  `joined` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `address`, `city`, `state`, `zip`, `joined`, `password`) VALUES
('', 'brianzanti@gmail.com', '839 Smartts Lane', 'Leesburg', 'VA', '20176', '1994-01-02', ''),
('Jon Stewart', 'jon@thedailyshow.com', '1 new york ave', 'New York', 'NY', '99999', '2016-02-25', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('', '', '', '', '', '', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brian Zanti', 'brianzanti@gmail.com', '123 nowhere', 'Fakesville', 'VA', '11111', '2016-03-19', ''),
('Brianzanti', 'brianzanti@gmail.com', '1 k', 'Fake', 'VA', '12121', '2016-03-19', ''),
('Brianzanti', 'brianzanti@gmail.com', '1 k', 'Fake', 'VA', '12121', '2016-03-19', ''),
('Brianzanti', 'brianzanti@gmail.com', '1 k', 'Fake', 'VA', '12121', '2016-03-19', ''),
('Brianzanti', 'brianzanti@gmail.com', '1 k', 'Fake', 'VA', '12121', '2016-03-19', ''),
('Brianzanti', 'brianzanti@gmail.com', '1 k', 'Fake', 'VA', '12121', '2016-03-19', ''),
('Brian', 'brianzanti@gmail.com', '123 kjk', 'Lkjlj', 'VA', '12345', '2016-03-19', ''),
('Bz', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Bz', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Bz', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zsdfsdfsd', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zanti', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zantil', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zantild', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zantildd', 'example@example.com', '23 lkj', 'LL', 'LJ', '44444', '2016-03-19', ''),
('Brian Zantid', 'brianzanti@gmail.com', '2323 lksjdf', 'LL', 'LL', '77777', '2016-03-19', ''),
('Brian Zantidsfsfsd', 'brianzanti@gmail.com', '123 Fakestreet', 'Fakesville', 'VA', '12345', '2016-03-19', ''),
('Brian zantijhgj', 'brianzanti@gmail.com', '123 ljkl', 'LS', 'LA', '11111', '2016-03-20', ''),
('KLlsdkf', 'brianzanti@gmail.com', '12 KLJ', 'LK', 'LK', '22222', '2016-03-21', ''),
('Ksf lajdsf ljdkf lsflksdjfjs', 'brianzanti@gmail.com', '12 KLJ', 'LK', 'LK', '22222', '2016-03-21', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
