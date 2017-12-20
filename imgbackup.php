ftp for development site
hot: ftp.byethost7.com 
username: b7_21252541
password: 6hyv4jtq
port: 21

goadday ftp
host: naperkb
username: crossfitdeviate.com
password: itchyMoon10
port: 21
-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 20, 2017 at 04:21 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dv8`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(128) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `line_1` varchar(200) NOT NULL,
  `line_2` varchar(200) NOT NULL,
  `line_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `name`, `price`, `line_1`, `line_2`, `line_3`) VALUES
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
-- Table structure for table `metadata`
--

CREATE TABLE `metadata` (
  `id` int(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `slug`, `name`, `content`) VALUES
(2, 'index', 'description', 'Fitter, Faster, Stronger. CrossFit Deviate is a strength and conditioning facility that develops individuals through constantly varied functional movements executed at high intensity.'),
(3, 'programs', 'description', 'CrossFit, bootcamp, olympic weightlifting and youth fitness are strength and conditioning programs that will improve your fitness and wellness.'),
(4, 'schedule', 'description', 'Our class times range from 5:30 am to 8:30 pm. We offer a wide range to get your fitness on.'),
(5, 'contact', 'description', 'Give us a shout out. We love getting emails.'),
(6, 'coaches', 'description', 'Our coaches are the key to unlocking the start of your lifestyle change.'),
(7, 'gettingstarted', 'description', 'Start your lifestyle change now. Made that leap of faith to a better you.'),
(8, 'membership', 'description', 'Memberships that range from a ten punchcard to unlimited classes per month. '),
(9, 'community', 'description', 'Our community has teachers, electricians, students, lawyers, hair stylists, nurses, servers, accountants, contractors, but all are athletes.');

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
(7);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `slug`) VALUES
(1, 'CrossFit DV8 | Deviate from the Norm', 'index'),
(2, 'Start your fitness Journey | CrossFit DV8', 'gettingstarted'),
(3, 'Programs | CrossFit DV8', 'programs'),
(4, 'Membership | CrossFit DV8', 'membership'),
(5, 'Class Schedule | CrossFit DV8', 'schedule'),
(6, 'Contact Us | CrossFit DV8', 'contact'),
(7, 'Meet Our Coaches | CrossFit DV8', 'coaches'),
(8, 'Join Our Community | CrossFit DV8', 'community');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`) VALUES
(0, 'cusstom180@yahoo.com', '$2y$10$WZF9bAFchB821rmrnR2gNuwHLfH8SnMdPw0ZByTfpM7OALWrWjR1u', 'Brian Naperkoski');

-- --------------------------------------------------------

--
-- Table structure for table `wodify`
--

CREATE TABLE `wodify` (
  `id` int(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wodify`
--

INSERT INTO `wodify` (`id`, `name`, `link`) VALUES
(1, 'one month', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=16778&OnlineMembershipPaymentOptionId=252314&IsMobile=False'),
(2, 'three month', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipPaymentOptionId=331748&OnlineMembershipId=46558&IsMobile=False'),
(3, 'six month', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=46559&OnlineMembershipPaymentOptionId=325154&IsMobile=False'),
(4, 'twelve month', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=46560&OnlineMembershipPaymentOptionId=325162&IsMobile=False'),
(5, 'punchcard', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=16776&OnlineMembershipPaymentOptionId=166074&IsMobile=True'),
(6, 'bootcamp punchcard', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ReviewPlanPurchase.aspx?OnlineMembershipId=56046&OnlineMembershipPaymentOptionId=324556&IsMobile=True'),
(7, 'youth fitness', 'http://crossfitdv8.wodify.com/OnlineSalesPortal/Sessions.aspx'),
(8, 'drop in', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ViewSchedule.aspx?LocationId=2048&IsMobile=False&OnlineMembershipId=16582'),
(9, 'free trail', 'https://crossfitdv8.wodify.com/OnlineSalesPortal/ViewSchedule.aspx?LocationId=2048&IsMobile=False&OnlineMembershipId=16583');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD KEY `ci_session_timestamp` (`timestamp`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD KEY `id` (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD KEY `id` (`id`);

--
-- Indexes for table `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;