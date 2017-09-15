-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2017 at 09:50 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.1.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `uthando-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `portfolioId` int(10) UNSIGNED NOT NULL,
  `label` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolioTag`
--

DROP TABLE IF EXISTS `portfolioTag`;
CREATE TABLE `portfolioTag` (
  `tagId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `portfolioTagMap`
--

DROP TABLE IF EXISTS `portfolioTagMap`;
CREATE TABLE `portfolioTagMap` (
  `postTagId` int(11) NOT NULL,
  `portfolioId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolioId`);

--
-- Indexes for table `portfolioTag`
--
ALTER TABLE `portfolioTag`
  ADD PRIMARY KEY (`tagId`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `portfolioTagMap`
--
ALTER TABLE `portfolioTagMap`
  ADD PRIMARY KEY (`postTagId`),
  ADD KEY `postId` (`portfolioId`),
  ADD KEY `tagId` (`tagId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolioId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `portfolioTag`
--
ALTER TABLE `portfolioTag`
  MODIFY `tagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `portfolioTagMap`
--
ALTER TABLE `portfolioTagMap`
  MODIFY `postTagId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;SET FOREIGN_KEY_CHECKS=1;
COMMIT;

