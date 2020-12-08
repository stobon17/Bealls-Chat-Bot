-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 08:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `userFName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL,
  `isAdmin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `userFName`, `userEmail`, `username`, `userPwd`, `isAdmin`) VALUES
(2, 'Alberto Gator', 'albert@ufl.edu', 'albertgator', '$2y$10$m1ZojSVPwzJx2zMbG0v4L.Q6.xQsI.zrkI//NGrw9YYCCm2rpBOt.', 0),
(3, 'Jojo', 'jojobanks@yahoo.com', 'jojob', '$2y$10$MoGz77tON1U9mTbV/W.jJe1QwpSC6XAsblQuQsAlZiD/VvZhLuFIi', 0),
(4, 'Jacob Plano', 'jplano@hotmail.net', 'jplano', '$2y$10$PEb2DT/TbvDNBx23Y5QcUePHkY0vSV9KRff7DApmrv6gE3slA4AE6', 0),
(5, 'Julian Newman', 'jnew@google.com', 'jnew', '$2y$10$70Fz4TMjh/DyGhLwf0DsAe2Zgc2q73j50m2YEjcGw3Xem8nLPQx2i', 0),
(6, 'Simon Tobon', 'stobon@ufl.edu', 'stobon', '$2y$10$FDgAPR5uEbU4QJ9emxZaZubFUekR9WsvN8wEA3UdLCc6C02uoci.O', 1),
(7, 'Carlos Guerra', 'cguerra@gmail.com', 'cguerra', '$2y$10$S5BBFJkoygsYFmZgmqmqbuMzuo2NtH4UrQozebPHsTQMviqY70Hxm', 0),
(8, 'DEMO USER', 'demouser@gmail.com', 'demouser', '$2y$10$RHDg4TzcabD49UmuiHcXS.XNDvEzT2O3q//Azju2V8azkBr0cRql6', 0),
(9, 'Demo User 1', 'demouser1@gmail.com', 'demouser1', '$2y$10$A2/UznZx5Mbf1R69vatDeuurzBv2JvWgo.rY7GRZCWwo7n8FTvA7a', 0),
(10, 'Reset Me', 'resetme@gmail.com', 'resetme', '$2y$10$wuwK.WOFnxODJ45K1D.1AO91hDGeyOkQidFrd4vsEBcVpdAIasZPq', 0),
(11, 'Administrator', 'administrator@beallsuf.com', 'admin', '$2y$10$bOgryIyyfFuEqE9TIBGoLuOpFGsvyQHNEY/w9jpJuRn.MfL4giHlS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_demo`
--

CREATE TABLE `user_demo` (
  `user_ID` int(8) NOT NULL,
  `user_name_first` varchar(25) NOT NULL,
  `user_name_last` varchar(40) NOT NULL,
  `age` int(6) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `shop_what` varchar(200) NOT NULL,
  `shop_for` varchar(200) NOT NULL,
  `brands` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE `user_history` (
  `user_ID` int(8) NOT NULL,
  `number_of_visits` int(8) NOT NULL DEFAULT 0,
  `is_guest` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`);

--
-- Indexes for table `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
