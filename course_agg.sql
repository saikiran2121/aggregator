-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2017 at 04:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `course_agg`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` varchar(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `type`) VALUES
('5uXCfFu2EeSU0SIACxCMgg', 'Bioinformatic Methods I', 'v2.ondemand'),
('5zjIsJq-EeW_wArffOXkOw', 'Vital Signs: Understanding What the Body Is Telling Us', 'v2.ondemand'),
('69Bku0KoEeWZtA4u62x6lQ', 'Gamification', 'v2.ondemand'),
('KlAJ6oysEeW79RIwiAyGoQ', 'Successful Presentation', 'v2.ondemand'),
('QgmoVdT2EeSlhSIACx2EBw', 'The Evolving Universe', 'v2.ondemand'),
('rajsT7UJEeWl_hJObLDVwQ', 'å‰ªè¾‘ï¼šåƒç¼–å‰§ä¸€æ ·å‰ªè¾‘', 'v2.ondemand');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
