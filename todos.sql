-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 13, 2021 at 05:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `todos`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `created`, `modified`, `checked`, `text`) VALUES
(1, '2020-05-14 22:50:28', '2020-05-14 22:50:28', 0, 'yo'),
(2, '2020-05-14 22:52:05', '2020-05-14 22:52:05', 0, 'da'),
(3, '2020-05-14 22:52:25', '2020-05-14 22:52:25', 0, 'dada'),
(4, '2020-05-14 22:52:27', '2020-05-14 22:52:27', 0, 'da'),
(5, '2020-08-11 21:17:42', '2020-08-11 21:17:42', 0, 'da'),
(6, '2020-08-11 21:17:46', '2020-08-11 21:17:46', 0, 'daaaa'),
(7, '2020-08-11 21:18:05', '2020-08-11 21:18:05', 0, 'da'),
(8, '2020-08-11 21:18:10', '2020-08-11 21:18:10', 0, 'da'),
(9, '2020-08-11 21:18:43', '2020-08-11 21:18:43', 0, 'klein testje'),
(10, '2020-08-11 21:20:48', '2020-08-11 21:20:48', 0, 'ok'),
(11, '2020-08-11 21:20:51', '2020-08-11 21:20:51', 0, 'ok'),
(12, '2020-08-13 13:33:32', '2020-08-13 13:33:32', 0, 'ok'),
(13, '2020-08-13 13:33:36', '2020-08-13 13:33:36', 0, 'ayooo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
