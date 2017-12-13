-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 13, 2017 at 02:05 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dv8`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` varchar(150) NOT NULL,
  `src` varchar(128) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `src`, `alt`, `height`) VALUES
('3', 'public_html/images/DSC_0077_bw.jpg', 'CrossFit DV8 in downtown Rochester', ''),
('4', 'public_html/images/DSC_0162_BW.jpg', 'CrossFit, bootcamp and Olympic weightlifting offered', ''),
('5', 'public_html/images/DSC_0057_bw.png', 'Join our family', ''),
('navbar-logo-kb', 'public_html/images/DV8 - icon logo - 2 - final.png', 'CrossFit DV8 logo', '150px'),
('navbar-logo-no-kb', 'public_html/images/DV8 - icon logo - 1 - final.png', 'CrossFit DV8 logo', '50px');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `line_1` varchar(200) NOT NULL,
  `line_2` varchar(200) NOT NULL,
  `line_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`, `price`, `line_1`, `line_2`, `line_3`) VALUES
(1, '1 month', '$ 165 /month', 'one month membership', 'unlimited classes', 'suitable for athletes 16+'),
(2, '3 month', '$ 157 /month', 'three month membership', 'unlimited classes', 'suitable for athletes 16+'),
(3, '6 month', '$143 /month', 'six month contract', 'unlimited classes', 'suitable for athletes 16+'),
(4, '12 month', '$134 /month', 'twelve month contract', 'unlimited classes', 'suitable for athletes 16+'),
(5, 'punchcard', '$140', 'ten classes', 'use for any classes', 'suitable for all ages'),
(6, 'bootcamp punchcard', '$75', 'ten punches', 'bootcamp classes', 'suitable for athletes 16+'),
(7, 'youth fitness', '$50 /month', 'month contract', 'two classes per week', 'suitable for grades k-5'),
(8, 'drop in', '$20', 'one class pass', 'any class', 'perfect for people on the go');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'brian@brian.com', '$2y$10$b7WyiA8a2Se9fS9GeXJiTuhDgPGx5nf2OZP6aJFOtoF7Y0G3e5z1K', 'asg'),
(2, 'cusstom180@yahoo.com', '$2y$10$f6nonGWljRDfZEsWkgIT6e7WVUQJSAN0tpzaCGW9K/SAhGipTiIOK', 'Brian Naperkoski');

-- --------------------------------------------------------

--
-- Table structure for table `wodify`
--

CREATE TABLE `wodify` (
  `id` int(20) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wodify`
--

INSERT INTO `wodify` (`id`, `link`) VALUES
(1, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=16778&OnlineMembershipPaymentOptionId=252314&IsMobile=False'),
(2, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipPaymentOptionId=331748&OnlineMembershipId=46558&IsMobile=False'),
(3, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=46559&OnlineMembershipPaymentOptionId=325154&IsMobile=False'),
(4, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=46560&OnlineMembershipPaymentOptionId=325162&IsMobile=False'),
(5, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=16776&OnlineMembershipPaymentOptionId=166074&IsMobile=True'),
(6, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=56046&OnlineMembershipPaymentOptionId=324556&IsMobile=True'),
(7, 'http://crossfitdv8.wodify.com/OnlineSalesPortal/Sessions.aspx'),
(8, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ViewSchedule.aspx?LocationId=2048&IsMobile=False&OnlineMembershipId=16582'),
(9, 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ViewSchedule.aspx?LocationId=2048&IsMobile=False&OnlineMembershipId=16583');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- Indexes for table `wodify`
--
ALTER TABLE `wodify`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;