-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2021 at 03:11 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `maker_booking_users`
--

CREATE TABLE `maker_booking_users` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maker_booking_users`
--

INSERT INTO `maker_booking_users` (`id`, `lastname`, `firstname`, `email`, `province`, `city`, `street`, `number`, `phone`) VALUES
(1, 'ok', 'yeeps', 'dabjkad@gma.com', 'ok', 'haha', 'yuw', 14, '05691941'),
(2, 'ok', 'yeeps', 'dabjkad@gma.com', 'ok', 'haha', 'yuw', 14, '05691941'),
(3, 'ok', 'yeeps', 'dabjkad@gma.com', 'ok', 'haha', 'yuw', 14, '05691941'),
(4, 'ok', 'yeeps', 'dabjkad@gma.com', 'ok', 'haha', 'yuw', 14, '05691941'),
(5, 'ok', 'yeeps', 'dabjkad@gma.com', 'ok', 'haha', 'yuw', 14, '05691941');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maker_booking_users`
--
ALTER TABLE `maker_booking_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maker_booking_users`
--
ALTER TABLE `maker_booking_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
