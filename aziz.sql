-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 09:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aziz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'ripihr');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`pdf`) VALUES
('Md.Tarek_Aziz_CV - Copy.pdf'),
('Md.Tarek_Aziz_CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sblcard`
--

CREATE TABLE `sblcard` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblcard`
--

CREATE TABLE `tblcard` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(30) NOT NULL,
  `user_last_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES
(4, 'tarek', 'aziz', '1720114.tarekaziz@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'tarek', 'aziz', '1720114.tarekaziz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'tarek', 'aziz', '1720114.tarekaziz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'tarek', 'aziz', '1720114.tarekaziz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'tarek', 'aziz', '1720114.tarekaziz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'tarek', 'aziz1', '1720114.tarekaziz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'tarek', 'aziz1', '1720114.tarekaziz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'tarek', 'aziza', '1720114.tarekaziz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'abdul', 'aziz', 'cse.1720114.hstu@gmail. com', '175076f9a90d14a4823d64c7728610ae'),
(13, 'alim', 'talukdar', 'cse.hstu@gmail.com', '175076f9a90d14a4823d64c7728610ae'),
(14, 'munta', 'poli', 'sidratulmuntaha34815@gmail.com', '9e20c022b12def07225c996a28901eb9'),
(15, 'rofik', 'rahman', '23@gmail.com', '661ab51aa98050db31a2c0eeaeaf92a6'),
(16, 'rofik', 'rahman', '23@gmail.com', 'fd1c1b5750edc87b71503c4182f53f0c'),
(17, 'aziz', 'reiman', '123@gmail.com', '68053af2923e00204c3ca7c6a3150cf7'),
(18, 'p', 't', '1720114.tarekaziz@gmail.com', 'a1b9f8050fb246fbec454302f6c14e22'),
(19, 'tarek', 'aziz', '1720114.tarekaziz@gmail.com', '98cac9d33aad44bb31800130e8c50b5f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_file`
--
ALTER TABLE `pdf_file`
  ADD PRIMARY KEY (`pdf`);

--
-- Indexes for table `sblcard`
--
ALTER TABLE `sblcard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcard`
--
ALTER TABLE `tblcard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sblcard`
--
ALTER TABLE `sblcard`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcard`
--
ALTER TABLE `tblcard`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
