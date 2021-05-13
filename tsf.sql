-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 12:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(5) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(0, 'Aman Jha', 'Rajan', 500, '2021-05-10 00:00:00'),
(0, 'Akash', 'Rajan', 200, '2021-05-10 14:41:05'),
(0, 'Aman Jha', 'Ankit', 500, '2021-05-10 14:58:12'),
(0, 'Aman Jha', 'Akash', 200, '2021-05-10 15:22:10'),
(0, 'Aman Jha', 'Rajan', 200, '2021-05-10 16:50:22'),
(0, 'Deepak', 'Rajan', 200, '2021-05-10 17:13:47'),
(0, 'Vipin', 'Rajan', 200, '2021-05-12 15:00:41'),
(0, 'Vipin', 'Rajan', 200, '2021-05-12 15:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Aman Jha', 'Aman@gmail.com', 13600),
(2, 'Ankit', 'Ankit@gmail.com', 6500),
(3, 'Hrutika', 'Hrutika@gmail.com', 3000),
(4, 'Rushikesh', 'Rushikesh@gmail.com', 5000),
(5, 'Deepak', 'Deepak@gmail.com', 1800),
(6, 'Akash', 'Akash@gmail.com', 6000),
(7, 'Vipin', 'Vipin@gmail.com', 6600),
(8, 'Anshu', 'Anshu@gmail.com', 5000),
(9, 'Nidhi', 'Nidhi@gmail.com', 1000),
(10, 'Rajan', 'Rajan@gmail.com', 10300);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
