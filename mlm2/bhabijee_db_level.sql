-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2012 at 04:09 PM
-- Server version: 5.1.66-cll
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhabijee_db_level`
--

-- --------------------------------------------------------

--
-- Table structure for table `2010`
--

CREATE TABLE IF NOT EXISTS `2010` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2010`
--

INSERT INTO `2010` (`login_id`, `level`, `total`, `l_date`) VALUES
('2010', 1, 0, '2012-12-23 06:30:53'),
('2039', 2, 0, '2012-12-24 07:10:19'),
('2041', 3, 0, '2012-12-24 07:14:58'),
('2046', 3, 0, '2012-12-24 07:22:08'),
('2044', 3, 0, '2012-12-24 07:26:02'),
('2043', 3, 0, '2012-12-24 07:32:49'),
('2045', 3, 0, '2012-12-24 07:57:24'),
('2042', 4, 0, '2012-12-24 08:10:38'),
('2071', 5, 0, '2012-12-24 10:14:26'),
('2077', 6, 0, '2012-12-24 10:18:35'),
('2082', 7, 0, '2012-12-24 10:21:47'),
('2087', 8, 0, '2012-12-24 11:52:10'),
('2086', 7, 0, '2012-12-25 11:17:19'),
('2035', 2, 0, '2012-12-25 11:35:45'),
('2036', 2, 0, '2012-12-25 11:38:07'),
('2037', 2, 0, '2012-12-25 11:40:20'),
('2038', 2, 0, '2012-12-25 11:43:21'),
('2104', 3, 0, '2012-12-25 11:46:08'),
('2106', 3, 0, '2012-12-25 11:48:56'),
('2107', 3, 0, '2012-12-25 11:50:42'),
('2108', 3, 0, '2012-12-25 11:52:25'),
('2111', 3, 0, '2012-12-25 11:54:09'),
('2109', 3, 0, '2012-12-25 11:56:23'),
('2105', 3, 0, '2012-12-25 11:59:20'),
('2113', 3, 0, '2012-12-25 12:01:33'),
('2114', 3, 0, '2012-12-25 12:04:12'),
('2115', 3, 0, '2012-12-25 12:06:31'),
('2116', 3, 0, '2012-12-25 12:09:50'),
('2117', 3, 0, '2012-12-25 12:11:20'),
('2118', 3, 0, '2012-12-25 12:15:03'),
('2119', 3, 0, '2012-12-25 12:18:19'),
('2120', 3, 0, '2012-12-25 12:28:45'),
('2121', 3, 0, '2012-12-25 12:29:51'),
('2122', 3, 0, '2012-12-25 12:30:50'),
('2123', 3, 0, '2012-12-25 12:31:52'),
('2124', 3, 0, '2012-12-25 12:33:32'),
('2125', 3, 0, '2012-12-25 12:34:34'),
('2047', 4, 0, '2012-12-26 06:20:07'),
('2048', 4, 0, '2012-12-26 06:22:57'),
('2049', 4, 0, '2012-12-26 06:26:16'),
('2050', 4, 0, '2012-12-26 06:29:51'),
('2051', 4, 0, '2012-12-26 06:37:18'),
('2052', 4, 0, '2012-12-26 06:44:29'),
('2053', 4, 0, '2012-12-26 06:45:38'),
('2054', 4, 0, '2012-12-26 06:46:40'),
('2055', 4, 0, '2012-12-26 06:48:15'),
('2056', 4, 0, '2012-12-26 06:50:27'),
('2057', 4, 0, '2012-12-26 06:51:55'),
('2058', 4, 0, '2012-12-26 06:54:22'),
('2059', 4, 0, '2012-12-26 06:55:28'),
('2228', 4, 0, '2012-12-26 07:28:46'),
('2060', 4, 0, '2012-12-26 08:16:08'),
('2061', 4, 0, '2012-12-26 08:17:45'),
('2062', 4, 0, '2012-12-26 08:20:27'),
('2063', 4, 0, '2012-12-26 08:25:23'),
('2064', 4, 0, '2012-12-26 08:27:06'),
('2067', 4, 0, '2012-12-26 08:30:45'),
('2068', 4, 0, '2012-12-26 08:32:07'),
('2069', 4, 0, '2012-12-26 08:33:14'),
('2070', 4, 0, '2012-12-26 08:34:46'),
('2065', 4, 0, '2012-12-26 08:36:15'),
('2066', 4, 0, '2012-12-26 08:36:28'),
('2126', 4, 0, '2012-12-26 08:49:34'),
('2127', 4, 0, '2012-12-26 08:54:09'),
('2128', 4, 0, '2012-12-26 08:55:22'),
('2129', 4, 0, '2012-12-26 08:56:38'),
('2130', 4, 0, '2012-12-26 09:10:40'),
('2131', 4, 0, '2012-12-26 09:17:56'),
('2132', 4, 0, '2012-12-26 10:59:01'),
('2133', 4, 0, '2012-12-26 11:02:45'),
('2134', 4, 0, '2012-12-26 11:04:00'),
('2136', 4, 0, '2012-12-26 11:06:05'),
('2135', 4, 0, '2012-12-26 11:08:12'),
('2138', 4, 0, '2012-12-26 11:09:54'),
('2139', 4, 0, '2012-12-26 11:11:14'),
('2140', 4, 0, '2012-12-26 11:13:34'),
('2141', 4, 0, '2012-12-26 11:17:16'),
('2142', 4, 0, '2012-12-26 11:18:57'),
('2144', 4, 0, '2012-12-26 11:21:21'),
('2145', 4, 0, '2012-12-26 11:23:01'),
('2146', 4, 0, '2012-12-26 11:26:31'),
('2143', 4, 0, '2012-12-26 11:32:31'),
('2227', 4, 0, '2012-12-26 11:32:53'),
('2226', 4, 0, '2012-12-26 11:34:18'),
('2147 ', 4, 0, '2012-12-26 11:35:07'),
('2225', 4, 0, '2012-12-26 11:35:31'),
('2224', 4, 0, '2012-12-26 11:37:02'),
('2148 ', 4, 0, '2012-12-26 11:37:29'),
('2223', 4, 0, '2012-12-26 11:39:05'),
('2222', 4, 0, '2012-12-26 11:40:19'),
('2221', 4, 0, '2012-12-26 11:41:54'),
('2149', 4, 0, '2012-12-26 11:43:46'),
('2220', 4, 0, '2012-12-26 11:44:01'),
('2219', 4, 0, '2012-12-26 11:45:51'),
('2150', 4, 0, '2012-12-26 11:46:21'),
('2218', 4, 0, '2012-12-26 11:47:01'),
('2217', 4, 0, '2012-12-26 11:48:51'),
('2151', 4, 0, '2012-12-26 11:49:30'),
('2216', 4, 0, '2012-12-26 11:50:14'),
('2215', 4, 0, '2012-12-26 11:51:54'),
('2152', 4, 0, '2012-12-26 11:52:54'),
('2214', 4, 0, '2012-12-26 11:53:20'),
('2213', 4, 0, '2012-12-26 11:55:11'),
('2212', 4, 0, '2012-12-26 11:56:57'),
('2211', 4, 0, '2012-12-26 11:58:07'),
('2210', 4, 0, '2012-12-26 11:59:44'),
('2209', 4, 0, '2012-12-26 12:01:08'),
('2208', 4, 0, '2012-12-26 12:02:24'),
('2207', 4, 0, '2012-12-26 12:03:42'),
('2206', 4, 0, '2012-12-26 12:06:08'),
('2205', 4, 0, '2012-12-26 12:07:59'),
('2204', 4, 0, '2012-12-26 12:09:36'),
('2203', 4, 0, '2012-12-26 12:10:59'),
('2202', 4, 0, '2012-12-26 12:13:54'),
('2201', 4, 0, '2012-12-26 12:15:20'),
('2200', 4, 0, '2012-12-26 12:16:48'),
('2199', 4, 0, '2012-12-26 12:19:10'),
('2198', 4, 0, '2012-12-26 12:20:52'),
('2153', 4, 0, '2012-12-26 12:22:18'),
('2154', 4, 0, '2012-12-26 12:26:30'),
('2155', 4, 0, '2012-12-26 12:28:58'),
('2197', 4, 0, '2012-12-26 13:56:14'),
('2156', 4, 0, '2012-12-26 13:57:56'),
('2196', 4, 0, '2012-12-26 13:59:57'),
('2181', 4, 0, '2012-12-26 14:01:58'),
('2159', 4, 0, '2012-12-26 14:04:04'),
('2160', 4, 0, '2012-12-26 14:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `2011`
--

CREATE TABLE IF NOT EXISTS `2011` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2011`
--

INSERT INTO `2011` (`login_id`, `level`, `total`, `l_date`) VALUES
('2011', 1, 0, '2012-12-23 06:28:04'),
('2030', 2, 0, '2012-12-26 08:45:45'),
('2031', 2, 0, '2012-12-26 08:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `2012`
--

CREATE TABLE IF NOT EXISTS `2012` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2012`
--

INSERT INTO `2012` (`login_id`, `level`, `total`, `l_date`) VALUES
('2012', 1, 0, '2012-12-23 06:25:42'),
('2026', 2, 0, '2012-12-26 08:39:13'),
('2027', 2, 0, '2012-12-26 08:40:25'),
('2028', 2, 0, '2012-12-26 08:42:02'),
('2029', 2, 0, '2012-12-26 08:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `2013`
--

CREATE TABLE IF NOT EXISTS `2013` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2013`
--

INSERT INTO `2013` (`login_id`, `level`, `total`, `l_date`) VALUES
('2013', 1, 0, '2012-12-23 06:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `2014`
--

CREATE TABLE IF NOT EXISTS `2014` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2014`
--

INSERT INTO `2014` (`login_id`, `level`, `total`, `l_date`) VALUES
('2014', 1, 0, '2012-12-23 06:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `2015`
--

CREATE TABLE IF NOT EXISTS `2015` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2016`
--

CREATE TABLE IF NOT EXISTS `2016` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2017`
--

CREATE TABLE IF NOT EXISTS `2017` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2018`
--

CREATE TABLE IF NOT EXISTS `2018` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2019`
--

CREATE TABLE IF NOT EXISTS `2019` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2020`
--

CREATE TABLE IF NOT EXISTS `2020` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2021`
--

CREATE TABLE IF NOT EXISTS `2021` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2022`
--

CREATE TABLE IF NOT EXISTS `2022` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2023`
--

CREATE TABLE IF NOT EXISTS `2023` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2024`
--

CREATE TABLE IF NOT EXISTS `2024` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2025`
--

CREATE TABLE IF NOT EXISTS `2025` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2026`
--

CREATE TABLE IF NOT EXISTS `2026` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2026`
--

INSERT INTO `2026` (`login_id`, `level`, `total`, `l_date`) VALUES
('2026', 1, 0, '2012-12-26 08:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `2027`
--

CREATE TABLE IF NOT EXISTS `2027` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2027`
--

INSERT INTO `2027` (`login_id`, `level`, `total`, `l_date`) VALUES
('2027', 1, 0, '2012-12-26 08:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `2028`
--

CREATE TABLE IF NOT EXISTS `2028` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2028`
--

INSERT INTO `2028` (`login_id`, `level`, `total`, `l_date`) VALUES
('2028', 1, 0, '2012-12-26 08:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `2029`
--

CREATE TABLE IF NOT EXISTS `2029` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2029`
--

INSERT INTO `2029` (`login_id`, `level`, `total`, `l_date`) VALUES
('2029', 1, 0, '2012-12-26 08:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `2030`
--

CREATE TABLE IF NOT EXISTS `2030` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2030`
--

INSERT INTO `2030` (`login_id`, `level`, `total`, `l_date`) VALUES
('2030', 1, 0, '2012-12-26 08:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `2031`
--

CREATE TABLE IF NOT EXISTS `2031` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2031`
--

INSERT INTO `2031` (`login_id`, `level`, `total`, `l_date`) VALUES
('2031', 1, 0, '2012-12-26 08:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `2032`
--

CREATE TABLE IF NOT EXISTS `2032` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2033`
--

CREATE TABLE IF NOT EXISTS `2033` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2034`
--

CREATE TABLE IF NOT EXISTS `2034` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2035`
--

CREATE TABLE IF NOT EXISTS `2035` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2035`
--

INSERT INTO `2035` (`login_id`, `level`, `total`, `l_date`) VALUES
('2035', 1, 0, '2012-12-25 11:35:45'),
('2104', 2, 0, '2012-12-25 11:46:08'),
('2106', 2, 0, '2012-12-25 11:48:56'),
('2107', 2, 0, '2012-12-25 11:50:42'),
('2108', 2, 0, '2012-12-25 11:52:25'),
('2109', 2, 0, '2012-12-25 11:56:23'),
('2126', 3, 0, '2012-12-26 08:49:34'),
('2127', 3, 0, '2012-12-26 08:54:09'),
('2128', 3, 0, '2012-12-26 08:55:22'),
('2129', 3, 0, '2012-12-26 08:56:38'),
('2130', 3, 0, '2012-12-26 09:10:40'),
('2131', 3, 0, '2012-12-26 09:17:56'),
('2132', 3, 0, '2012-12-26 10:59:00'),
('2133', 3, 0, '2012-12-26 11:02:45'),
('2134', 3, 0, '2012-12-26 11:04:00'),
('2136', 3, 0, '2012-12-26 11:06:05'),
('2135', 3, 0, '2012-12-26 11:08:12'),
('2138', 3, 0, '2012-12-26 11:09:54'),
('2139', 3, 0, '2012-12-26 11:11:14'),
('2140', 3, 0, '2012-12-26 11:13:34'),
('2141', 3, 0, '2012-12-26 11:17:16'),
('2142', 3, 0, '2012-12-26 11:18:57'),
('2144', 3, 0, '2012-12-26 11:21:21'),
('2145', 3, 0, '2012-12-26 11:23:01'),
('2146', 3, 0, '2012-12-26 11:26:31'),
('2143', 3, 0, '2012-12-26 11:32:31'),
('2152', 3, 0, '2012-12-26 11:52:54'),
('2153', 3, 0, '2012-12-26 12:22:18'),
('2154', 3, 0, '2012-12-26 12:26:30'),
('2155', 3, 0, '2012-12-26 12:28:58'),
('2156', 3, 0, '2012-12-26 13:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `2036`
--

CREATE TABLE IF NOT EXISTS `2036` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2036`
--

INSERT INTO `2036` (`login_id`, `level`, `total`, `l_date`) VALUES
('2036', 1, 0, '2012-12-25 11:38:07'),
('2111', 2, 0, '2012-12-25 11:54:09'),
('2105', 2, 0, '2012-12-25 11:59:20'),
('2113', 2, 0, '2012-12-25 12:01:33'),
('2114', 2, 0, '2012-12-25 12:04:12'),
('2115', 2, 0, '2012-12-25 12:06:31'),
('2147 ', 3, 0, '2012-12-26 11:35:07'),
('2148 ', 3, 0, '2012-12-26 11:37:29'),
('2149', 3, 0, '2012-12-26 11:43:46'),
('2150', 3, 0, '2012-12-26 11:46:21'),
('2151', 3, 0, '2012-12-26 11:49:30'),
('2159', 3, 0, '2012-12-26 14:04:04'),
('2160', 3, 0, '2012-12-26 14:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `2037`
--

CREATE TABLE IF NOT EXISTS `2037` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2037`
--

INSERT INTO `2037` (`login_id`, `level`, `total`, `l_date`) VALUES
('2037', 1, 0, '2012-12-25 11:40:20'),
('2116', 2, 0, '2012-12-25 12:09:50'),
('2117', 2, 0, '2012-12-25 12:11:20'),
('2118', 2, 0, '2012-12-25 12:15:03'),
('2119', 2, 0, '2012-12-25 12:18:19'),
('2120', 2, 0, '2012-12-25 12:28:45'),
('2203', 3, 0, '2012-12-26 12:10:59'),
('2202', 3, 0, '2012-12-26 12:13:54'),
('2201', 3, 0, '2012-12-26 12:15:20'),
('2200', 3, 0, '2012-12-26 12:16:48'),
('2199', 3, 0, '2012-12-26 12:19:10'),
('2198', 3, 0, '2012-12-26 12:20:52'),
('2197', 3, 0, '2012-12-26 13:56:14'),
('2196', 3, 0, '2012-12-26 13:59:57'),
('2181', 3, 0, '2012-12-26 14:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `2038`
--

CREATE TABLE IF NOT EXISTS `2038` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2038`
--

INSERT INTO `2038` (`login_id`, `level`, `total`, `l_date`) VALUES
('2038', 1, 0, '2012-12-25 11:43:21'),
('2121', 2, 0, '2012-12-25 12:29:51'),
('2122', 2, 0, '2012-12-25 12:30:50'),
('2123', 2, 0, '2012-12-25 12:31:52'),
('2124', 2, 0, '2012-12-25 12:33:32'),
('2125', 2, 0, '2012-12-25 12:34:34'),
('2228', 3, 0, '2012-12-26 07:28:46'),
('2227', 3, 0, '2012-12-26 11:32:53'),
('2226', 3, 0, '2012-12-26 11:34:18'),
('2225', 3, 0, '2012-12-26 11:35:31'),
('2224', 3, 0, '2012-12-26 11:37:02'),
('2223', 3, 0, '2012-12-26 11:39:05'),
('2222', 3, 0, '2012-12-26 11:40:19'),
('2221', 3, 0, '2012-12-26 11:41:54'),
('2220', 3, 0, '2012-12-26 11:44:01'),
('2219', 3, 0, '2012-12-26 11:45:51'),
('2218', 3, 0, '2012-12-26 11:47:01'),
('2217', 3, 0, '2012-12-26 11:48:51'),
('2216', 3, 0, '2012-12-26 11:50:14'),
('2215', 3, 0, '2012-12-26 11:51:54'),
('2214', 3, 0, '2012-12-26 11:53:20'),
('2213', 3, 0, '2012-12-26 11:55:11'),
('2212', 3, 0, '2012-12-26 11:56:57'),
('2211', 3, 0, '2012-12-26 11:58:07'),
('2210', 3, 0, '2012-12-26 11:59:44'),
('2209', 3, 0, '2012-12-26 12:01:08'),
('2208', 3, 0, '2012-12-26 12:02:24'),
('2207', 3, 0, '2012-12-26 12:03:42'),
('2206', 3, 0, '2012-12-26 12:06:08'),
('2205', 3, 0, '2012-12-26 12:07:59'),
('2204', 3, 0, '2012-12-26 12:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `2039`
--

CREATE TABLE IF NOT EXISTS `2039` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2039`
--

INSERT INTO `2039` (`login_id`, `level`, `total`, `l_date`) VALUES
('2039', 1, 0, '2012-12-24 07:10:19'),
('2041', 2, 0, '2012-12-24 07:14:58'),
('2046', 2, 0, '2012-12-24 07:22:08'),
('2044', 2, 0, '2012-12-24 07:26:02'),
('2043', 2, 0, '2012-12-24 07:32:49'),
('2045', 2, 0, '2012-12-24 07:57:24'),
('2042', 3, 0, '2012-12-24 08:10:38'),
('2071', 4, 0, '2012-12-24 10:14:26'),
('2077', 5, 0, '2012-12-24 10:18:35'),
('2082', 6, 0, '2012-12-24 10:21:47'),
('2087', 7, 0, '2012-12-24 11:52:10'),
('2086', 6, 0, '2012-12-25 11:17:19'),
('2047', 3, 0, '2012-12-26 06:20:07'),
('2048', 3, 0, '2012-12-26 06:22:57'),
('2049', 3, 0, '2012-12-26 06:26:16'),
('2050', 3, 0, '2012-12-26 06:29:51'),
('2051', 3, 0, '2012-12-26 06:37:18'),
('2052', 3, 0, '2012-12-26 06:44:29'),
('2053', 3, 0, '2012-12-26 06:45:38'),
('2054', 3, 0, '2012-12-26 06:46:40'),
('2055', 3, 0, '2012-12-26 06:48:15'),
('2056', 3, 0, '2012-12-26 06:50:27'),
('2057', 3, 0, '2012-12-26 06:51:55'),
('2058', 3, 0, '2012-12-26 06:54:22'),
('2059', 3, 0, '2012-12-26 06:55:28'),
('2060', 3, 0, '2012-12-26 08:16:08'),
('2061', 3, 0, '2012-12-26 08:17:45'),
('2062', 3, 0, '2012-12-26 08:20:27'),
('2063', 3, 0, '2012-12-26 08:25:23'),
('2064', 3, 0, '2012-12-26 08:27:06'),
('2067', 3, 0, '2012-12-26 08:30:45'),
('2068', 3, 0, '2012-12-26 08:32:07'),
('2069', 3, 0, '2012-12-26 08:33:14'),
('2070', 3, 0, '2012-12-26 08:34:46'),
('2065', 3, 0, '2012-12-26 08:36:15'),
('2066', 3, 0, '2012-12-26 08:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `2041`
--

CREATE TABLE IF NOT EXISTS `2041` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2041`
--

INSERT INTO `2041` (`login_id`, `level`, `total`, `l_date`) VALUES
('2041', 1, 0, '2012-12-24 07:14:58'),
('2042', 2, 0, '2012-12-24 08:10:38'),
('2071', 3, 0, '2012-12-24 10:14:26'),
('2077', 4, 0, '2012-12-24 10:18:35'),
('2082', 5, 0, '2012-12-24 10:21:47'),
('2087', 6, 0, '2012-12-24 11:52:10'),
('2086', 5, 0, '2012-12-25 11:17:19'),
('2047', 2, 0, '2012-12-26 06:20:07'),
('2048', 2, 0, '2012-12-26 06:22:57'),
('2049', 2, 0, '2012-12-26 06:26:16'),
('2050', 2, 0, '2012-12-26 06:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `2042`
--

CREATE TABLE IF NOT EXISTS `2042` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2042`
--

INSERT INTO `2042` (`login_id`, `level`, `total`, `l_date`) VALUES
('2042', 1, 0, '2012-12-24 08:10:38'),
('2071', 2, 0, '2012-12-24 10:14:26'),
('2077', 3, 0, '2012-12-24 10:18:35'),
('2082', 4, 0, '2012-12-24 10:21:47'),
('2087', 5, 0, '2012-12-24 11:52:10'),
('2086', 4, 0, '2012-12-25 11:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `2043`
--

CREATE TABLE IF NOT EXISTS `2043` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2043`
--

INSERT INTO `2043` (`login_id`, `level`, `total`, `l_date`) VALUES
('2043', 1, 0, '2012-12-24 07:32:49'),
('2061', 2, 0, '2012-12-26 08:17:45'),
('2062', 2, 0, '2012-12-26 08:20:27'),
('2063', 2, 0, '2012-12-26 08:25:23'),
('2064', 2, 0, '2012-12-26 08:27:06'),
('2065', 2, 0, '2012-12-26 08:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `2044`
--

CREATE TABLE IF NOT EXISTS `2044` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2044`
--

INSERT INTO `2044` (`login_id`, `level`, `total`, `l_date`) VALUES
('2044', 1, 0, '2012-12-24 07:26:02'),
('2056', 2, 0, '2012-12-26 06:50:27'),
('2057', 2, 0, '2012-12-26 06:51:55'),
('2058', 2, 0, '2012-12-26 06:54:22'),
('2059', 2, 0, '2012-12-26 06:55:28'),
('2060', 2, 0, '2012-12-26 08:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `2045`
--

CREATE TABLE IF NOT EXISTS `2045` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2045`
--

INSERT INTO `2045` (`login_id`, `level`, `total`, `l_date`) VALUES
('2045', 1, 0, '2012-12-24 07:57:24'),
('2067', 2, 0, '2012-12-26 08:30:45'),
('2068', 2, 0, '2012-12-26 08:32:07'),
('2069', 2, 0, '2012-12-26 08:33:14'),
('2070', 2, 0, '2012-12-26 08:34:46'),
('2066', 2, 0, '2012-12-26 08:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `2046`
--

CREATE TABLE IF NOT EXISTS `2046` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2046`
--

INSERT INTO `2046` (`login_id`, `level`, `total`, `l_date`) VALUES
('2046', 1, 0, '2012-12-24 07:22:08'),
('2051', 2, 0, '2012-12-26 06:37:18'),
('2052', 2, 0, '2012-12-26 06:44:29'),
('2053', 2, 0, '2012-12-26 06:45:38'),
('2054', 2, 0, '2012-12-26 06:46:40'),
('2055', 2, 0, '2012-12-26 06:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `2047`
--

CREATE TABLE IF NOT EXISTS `2047` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2047`
--

INSERT INTO `2047` (`login_id`, `level`, `total`, `l_date`) VALUES
('2047', 1, 0, '2012-12-26 06:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `2048`
--

CREATE TABLE IF NOT EXISTS `2048` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2048`
--

INSERT INTO `2048` (`login_id`, `level`, `total`, `l_date`) VALUES
('2048', 1, 0, '2012-12-26 06:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `2049`
--

CREATE TABLE IF NOT EXISTS `2049` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2049`
--

INSERT INTO `2049` (`login_id`, `level`, `total`, `l_date`) VALUES
('2049', 1, 0, '2012-12-26 06:26:16');

-- --------------------------------------------------------

--
-- Table structure for table `2050`
--

CREATE TABLE IF NOT EXISTS `2050` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2050`
--

INSERT INTO `2050` (`login_id`, `level`, `total`, `l_date`) VALUES
('2050', 1, 0, '2012-12-26 06:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `2051`
--

CREATE TABLE IF NOT EXISTS `2051` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2051`
--

INSERT INTO `2051` (`login_id`, `level`, `total`, `l_date`) VALUES
('2051', 1, 0, '2012-12-26 06:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `2052`
--

CREATE TABLE IF NOT EXISTS `2052` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2052`
--

INSERT INTO `2052` (`login_id`, `level`, `total`, `l_date`) VALUES
('2052', 1, 0, '2012-12-26 06:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `2053`
--

CREATE TABLE IF NOT EXISTS `2053` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2053`
--

INSERT INTO `2053` (`login_id`, `level`, `total`, `l_date`) VALUES
('2053', 1, 0, '2012-12-26 06:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `2054`
--

CREATE TABLE IF NOT EXISTS `2054` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2054`
--

INSERT INTO `2054` (`login_id`, `level`, `total`, `l_date`) VALUES
('2054', 1, 0, '2012-12-26 06:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `2055`
--

CREATE TABLE IF NOT EXISTS `2055` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2055`
--

INSERT INTO `2055` (`login_id`, `level`, `total`, `l_date`) VALUES
('2055', 1, 0, '2012-12-26 06:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `2056`
--

CREATE TABLE IF NOT EXISTS `2056` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2056`
--

INSERT INTO `2056` (`login_id`, `level`, `total`, `l_date`) VALUES
('2056', 1, 0, '2012-12-26 06:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `2057`
--

CREATE TABLE IF NOT EXISTS `2057` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2057`
--

INSERT INTO `2057` (`login_id`, `level`, `total`, `l_date`) VALUES
('2057', 1, 0, '2012-12-26 06:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `2058`
--

CREATE TABLE IF NOT EXISTS `2058` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2058`
--

INSERT INTO `2058` (`login_id`, `level`, `total`, `l_date`) VALUES
('2058', 1, 0, '2012-12-26 06:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `2059`
--

CREATE TABLE IF NOT EXISTS `2059` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2059`
--

INSERT INTO `2059` (`login_id`, `level`, `total`, `l_date`) VALUES
('2059', 1, 0, '2012-12-26 06:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `2060`
--

CREATE TABLE IF NOT EXISTS `2060` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2060`
--

INSERT INTO `2060` (`login_id`, `level`, `total`, `l_date`) VALUES
('2060', 1, 0, '2012-12-26 08:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `2061`
--

CREATE TABLE IF NOT EXISTS `2061` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2061`
--

INSERT INTO `2061` (`login_id`, `level`, `total`, `l_date`) VALUES
('2061', 1, 0, '2012-12-26 08:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `2062`
--

CREATE TABLE IF NOT EXISTS `2062` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2062`
--

INSERT INTO `2062` (`login_id`, `level`, `total`, `l_date`) VALUES
('2062', 1, 0, '2012-12-26 08:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `2063`
--

CREATE TABLE IF NOT EXISTS `2063` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2063`
--

INSERT INTO `2063` (`login_id`, `level`, `total`, `l_date`) VALUES
('2063', 1, 0, '2012-12-26 08:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `2064`
--

CREATE TABLE IF NOT EXISTS `2064` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2064`
--

INSERT INTO `2064` (`login_id`, `level`, `total`, `l_date`) VALUES
('2064', 1, 0, '2012-12-26 08:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `2065`
--

CREATE TABLE IF NOT EXISTS `2065` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2065`
--

INSERT INTO `2065` (`login_id`, `level`, `total`, `l_date`) VALUES
('2065', 1, 0, '2012-12-26 08:36:15');

-- --------------------------------------------------------

--
-- Table structure for table `2066`
--

CREATE TABLE IF NOT EXISTS `2066` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2066`
--

INSERT INTO `2066` (`login_id`, `level`, `total`, `l_date`) VALUES
('2066', 1, 0, '2012-12-26 08:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `2067`
--

CREATE TABLE IF NOT EXISTS `2067` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2067`
--

INSERT INTO `2067` (`login_id`, `level`, `total`, `l_date`) VALUES
('2067', 1, 0, '2012-12-26 08:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `2068`
--

CREATE TABLE IF NOT EXISTS `2068` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2068`
--

INSERT INTO `2068` (`login_id`, `level`, `total`, `l_date`) VALUES
('2068', 1, 0, '2012-12-26 08:32:07');

-- --------------------------------------------------------

--
-- Table structure for table `2069`
--

CREATE TABLE IF NOT EXISTS `2069` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2069`
--

INSERT INTO `2069` (`login_id`, `level`, `total`, `l_date`) VALUES
('2069', 1, 0, '2012-12-26 08:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `2070`
--

CREATE TABLE IF NOT EXISTS `2070` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2070`
--

INSERT INTO `2070` (`login_id`, `level`, `total`, `l_date`) VALUES
('2070', 1, 0, '2012-12-26 08:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `2071`
--

CREATE TABLE IF NOT EXISTS `2071` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2071`
--

INSERT INTO `2071` (`login_id`, `level`, `total`, `l_date`) VALUES
('2071', 1, 0, '2012-12-24 10:14:26'),
('2077', 2, 0, '2012-12-24 10:18:35'),
('2082', 3, 0, '2012-12-24 10:21:47'),
('2087', 4, 0, '2012-12-24 11:52:10'),
('2086', 3, 0, '2012-12-25 11:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `2072`
--

CREATE TABLE IF NOT EXISTS `2072` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2073`
--

CREATE TABLE IF NOT EXISTS `2073` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2074`
--

CREATE TABLE IF NOT EXISTS `2074` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2075`
--

CREATE TABLE IF NOT EXISTS `2075` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2077`
--

CREATE TABLE IF NOT EXISTS `2077` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2077`
--

INSERT INTO `2077` (`login_id`, `level`, `total`, `l_date`) VALUES
('2077', 1, 0, '2012-12-24 10:18:35'),
('2082', 2, 0, '2012-12-24 10:21:47'),
('2087', 3, 0, '2012-12-24 11:52:10'),
('2086', 2, 0, '2012-12-25 11:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `2078`
--

CREATE TABLE IF NOT EXISTS `2078` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2079`
--

CREATE TABLE IF NOT EXISTS `2079` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2080`
--

CREATE TABLE IF NOT EXISTS `2080` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2081`
--

CREATE TABLE IF NOT EXISTS `2081` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2082`
--

CREATE TABLE IF NOT EXISTS `2082` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2082`
--

INSERT INTO `2082` (`login_id`, `level`, `total`, `l_date`) VALUES
('2082', 1, 0, '2012-12-24 10:21:47'),
('2087', 2, 0, '2012-12-24 11:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `2083`
--

CREATE TABLE IF NOT EXISTS `2083` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2084`
--

CREATE TABLE IF NOT EXISTS `2084` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2085`
--

CREATE TABLE IF NOT EXISTS `2085` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2086`
--

CREATE TABLE IF NOT EXISTS `2086` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2086`
--

INSERT INTO `2086` (`login_id`, `level`, `total`, `l_date`) VALUES
('2086', 1, 0, '2012-12-25 11:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `2087`
--

CREATE TABLE IF NOT EXISTS `2087` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2087`
--

INSERT INTO `2087` (`login_id`, `level`, `total`, `l_date`) VALUES
('2087', 1, 0, '2012-12-24 11:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `2088`
--

CREATE TABLE IF NOT EXISTS `2088` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2089`
--

CREATE TABLE IF NOT EXISTS `2089` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2090`
--

CREATE TABLE IF NOT EXISTS `2090` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2091`
--

CREATE TABLE IF NOT EXISTS `2091` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2092`
--

CREATE TABLE IF NOT EXISTS `2092` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2093`
--

CREATE TABLE IF NOT EXISTS `2093` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2094`
--

CREATE TABLE IF NOT EXISTS `2094` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2095`
--

CREATE TABLE IF NOT EXISTS `2095` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2096`
--

CREATE TABLE IF NOT EXISTS `2096` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2097`
--

CREATE TABLE IF NOT EXISTS `2097` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2098`
--

CREATE TABLE IF NOT EXISTS `2098` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2099`
--

CREATE TABLE IF NOT EXISTS `2099` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2100`
--

CREATE TABLE IF NOT EXISTS `2100` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2101`
--

CREATE TABLE IF NOT EXISTS `2101` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2102`
--

CREATE TABLE IF NOT EXISTS `2102` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2103`
--

CREATE TABLE IF NOT EXISTS `2103` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2104`
--

CREATE TABLE IF NOT EXISTS `2104` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2104`
--

INSERT INTO `2104` (`login_id`, `level`, `total`, `l_date`) VALUES
('2104', 1, 0, '2012-12-25 11:46:08'),
('2126', 2, 0, '2012-12-26 08:49:34'),
('2127', 2, 0, '2012-12-26 08:54:09'),
('2128', 2, 0, '2012-12-26 08:55:22'),
('2129', 2, 0, '2012-12-26 08:56:38'),
('2130', 2, 0, '2012-12-26 09:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `2105`
--

CREATE TABLE IF NOT EXISTS `2105` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2105`
--

INSERT INTO `2105` (`login_id`, `level`, `total`, `l_date`) VALUES
('2105', 1, 0, '2012-12-25 11:59:20'),
('2159', 2, 0, '2012-12-26 14:04:04'),
('2160', 2, 0, '2012-12-26 14:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `2106`
--

CREATE TABLE IF NOT EXISTS `2106` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2106`
--

INSERT INTO `2106` (`login_id`, `level`, `total`, `l_date`) VALUES
('2106', 1, 0, '2012-12-25 11:48:56'),
('2131', 2, 0, '2012-12-26 09:17:56'),
('2132', 2, 0, '2012-12-26 10:59:00'),
('2133', 2, 0, '2012-12-26 11:02:45'),
('2134', 2, 0, '2012-12-26 11:04:00'),
('2135', 2, 0, '2012-12-26 11:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `2107`
--

CREATE TABLE IF NOT EXISTS `2107` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2107`
--

INSERT INTO `2107` (`login_id`, `level`, `total`, `l_date`) VALUES
('2107', 1, 0, '2012-12-25 11:50:42'),
('2136', 2, 0, '2012-12-26 11:06:05'),
('2138', 2, 0, '2012-12-26 11:09:54'),
('2139', 2, 0, '2012-12-26 11:11:14'),
('2140', 2, 0, '2012-12-26 11:13:34'),
('2141', 2, 0, '2012-12-26 11:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `2108`
--

CREATE TABLE IF NOT EXISTS `2108` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2108`
--

INSERT INTO `2108` (`login_id`, `level`, `total`, `l_date`) VALUES
('2108', 1, 0, '2012-12-25 11:52:25'),
('2142', 2, 0, '2012-12-26 11:18:57'),
('2144', 2, 0, '2012-12-26 11:21:21'),
('2145', 2, 0, '2012-12-26 11:23:01'),
('2146', 2, 0, '2012-12-26 11:26:31'),
('2143', 2, 0, '2012-12-26 11:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `2109`
--

CREATE TABLE IF NOT EXISTS `2109` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2109`
--

INSERT INTO `2109` (`login_id`, `level`, `total`, `l_date`) VALUES
('2109', 1, 0, '2012-12-25 11:56:23'),
('2152', 2, 0, '2012-12-26 11:52:54'),
('2153', 2, 0, '2012-12-26 12:22:18'),
('2154', 2, 0, '2012-12-26 12:26:30'),
('2155', 2, 0, '2012-12-26 12:28:58'),
('2156', 2, 0, '2012-12-26 13:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `2111`
--

CREATE TABLE IF NOT EXISTS `2111` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2111`
--

INSERT INTO `2111` (`login_id`, `level`, `total`, `l_date`) VALUES
('2111', 1, 0, '2012-12-25 11:54:09'),
('2147 ', 2, 0, '2012-12-26 11:35:07'),
('2148 ', 2, 0, '2012-12-26 11:37:29'),
('2149', 2, 0, '2012-12-26 11:43:46'),
('2150', 2, 0, '2012-12-26 11:46:21'),
('2151', 2, 0, '2012-12-26 11:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `2113`
--

CREATE TABLE IF NOT EXISTS `2113` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2113`
--

INSERT INTO `2113` (`login_id`, `level`, `total`, `l_date`) VALUES
('2113', 1, 0, '2012-12-25 12:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `2114`
--

CREATE TABLE IF NOT EXISTS `2114` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2114`
--

INSERT INTO `2114` (`login_id`, `level`, `total`, `l_date`) VALUES
('2114', 1, 0, '2012-12-25 12:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `2115`
--

CREATE TABLE IF NOT EXISTS `2115` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2115`
--

INSERT INTO `2115` (`login_id`, `level`, `total`, `l_date`) VALUES
('2115', 1, 0, '2012-12-25 12:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `2116`
--

CREATE TABLE IF NOT EXISTS `2116` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2116`
--

INSERT INTO `2116` (`login_id`, `level`, `total`, `l_date`) VALUES
('2116', 1, 0, '2012-12-25 12:09:50'),
('2181', 2, 0, '2012-12-26 14:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `2117`
--

CREATE TABLE IF NOT EXISTS `2117` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2117`
--

INSERT INTO `2117` (`login_id`, `level`, `total`, `l_date`) VALUES
('2117', 1, 0, '2012-12-25 12:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `2118`
--

CREATE TABLE IF NOT EXISTS `2118` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2118`
--

INSERT INTO `2118` (`login_id`, `level`, `total`, `l_date`) VALUES
('2118', 1, 0, '2012-12-25 12:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `2119`
--

CREATE TABLE IF NOT EXISTS `2119` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2119`
--

INSERT INTO `2119` (`login_id`, `level`, `total`, `l_date`) VALUES
('2119', 1, 0, '2012-12-25 12:18:19'),
('2198', 2, 0, '2012-12-26 12:20:52'),
('2197', 2, 0, '2012-12-26 13:56:14'),
('2196', 2, 0, '2012-12-26 13:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `2120`
--

CREATE TABLE IF NOT EXISTS `2120` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2120`
--

INSERT INTO `2120` (`login_id`, `level`, `total`, `l_date`) VALUES
('2120', 1, 0, '2012-12-25 12:28:45'),
('2203', 2, 0, '2012-12-26 12:10:59'),
('2202', 2, 0, '2012-12-26 12:13:54'),
('2201', 2, 0, '2012-12-26 12:15:20'),
('2200', 2, 0, '2012-12-26 12:16:48'),
('2199', 2, 0, '2012-12-26 12:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `2121`
--

CREATE TABLE IF NOT EXISTS `2121` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2121`
--

INSERT INTO `2121` (`login_id`, `level`, `total`, `l_date`) VALUES
('2121', 1, 0, '2012-12-25 12:29:51'),
('2208', 2, 0, '2012-12-26 12:02:24'),
('2207', 2, 0, '2012-12-26 12:03:42'),
('2206', 2, 0, '2012-12-26 12:06:08'),
('2205', 2, 0, '2012-12-26 12:07:59'),
('2204', 2, 0, '2012-12-26 12:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `2122`
--

CREATE TABLE IF NOT EXISTS `2122` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2122`
--

INSERT INTO `2122` (`login_id`, `level`, `total`, `l_date`) VALUES
('2122', 1, 0, '2012-12-25 12:30:50'),
('2213', 2, 0, '2012-12-26 11:55:11'),
('2212', 2, 0, '2012-12-26 11:56:57'),
('2211', 2, 0, '2012-12-26 11:58:07'),
('2210', 2, 0, '2012-12-26 11:59:44'),
('2209', 2, 0, '2012-12-26 12:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `2123`
--

CREATE TABLE IF NOT EXISTS `2123` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2123`
--

INSERT INTO `2123` (`login_id`, `level`, `total`, `l_date`) VALUES
('2123', 1, 0, '2012-12-25 12:31:52'),
('2218', 2, 0, '2012-12-26 11:47:01'),
('2217', 2, 0, '2012-12-26 11:48:51'),
('2216', 2, 0, '2012-12-26 11:50:14'),
('2215', 2, 0, '2012-12-26 11:51:54'),
('2214', 2, 0, '2012-12-26 11:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `2124`
--

CREATE TABLE IF NOT EXISTS `2124` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2124`
--

INSERT INTO `2124` (`login_id`, `level`, `total`, `l_date`) VALUES
('2124', 1, 0, '2012-12-25 12:33:32'),
('2223', 2, 0, '2012-12-26 11:39:05'),
('2222', 2, 0, '2012-12-26 11:40:19'),
('2221', 2, 0, '2012-12-26 11:41:54'),
('2220', 2, 0, '2012-12-26 11:44:01'),
('2219', 2, 0, '2012-12-26 11:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `2125`
--

CREATE TABLE IF NOT EXISTS `2125` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2125`
--

INSERT INTO `2125` (`login_id`, `level`, `total`, `l_date`) VALUES
('2125', 1, 0, '2012-12-25 12:34:34'),
('2228', 2, 0, '2012-12-26 07:28:46'),
('2227', 2, 0, '2012-12-26 11:32:53'),
('2226', 2, 0, '2012-12-26 11:34:18'),
('2225', 2, 0, '2012-12-26 11:35:31'),
('2224', 2, 0, '2012-12-26 11:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `2126`
--

CREATE TABLE IF NOT EXISTS `2126` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2126`
--

INSERT INTO `2126` (`login_id`, `level`, `total`, `l_date`) VALUES
('2126', 1, 0, '2012-12-26 08:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `2127`
--

CREATE TABLE IF NOT EXISTS `2127` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2127`
--

INSERT INTO `2127` (`login_id`, `level`, `total`, `l_date`) VALUES
('2127', 1, 0, '2012-12-26 08:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `2128`
--

CREATE TABLE IF NOT EXISTS `2128` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2128`
--

INSERT INTO `2128` (`login_id`, `level`, `total`, `l_date`) VALUES
('2128', 1, 0, '2012-12-26 08:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `2129`
--

CREATE TABLE IF NOT EXISTS `2129` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2129`
--

INSERT INTO `2129` (`login_id`, `level`, `total`, `l_date`) VALUES
('2129', 1, 0, '2012-12-26 08:56:38');

-- --------------------------------------------------------

--
-- Table structure for table `2130`
--

CREATE TABLE IF NOT EXISTS `2130` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2130`
--

INSERT INTO `2130` (`login_id`, `level`, `total`, `l_date`) VALUES
('2130', 1, 0, '2012-12-26 09:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `2131`
--

CREATE TABLE IF NOT EXISTS `2131` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2131`
--

INSERT INTO `2131` (`login_id`, `level`, `total`, `l_date`) VALUES
('2131', 1, 0, '2012-12-26 09:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `2132`
--

CREATE TABLE IF NOT EXISTS `2132` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2132`
--

INSERT INTO `2132` (`login_id`, `level`, `total`, `l_date`) VALUES
('2132', 1, 0, '2012-12-26 10:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `2133`
--

CREATE TABLE IF NOT EXISTS `2133` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2133`
--

INSERT INTO `2133` (`login_id`, `level`, `total`, `l_date`) VALUES
('2133', 1, 0, '2012-12-26 11:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `2134`
--

CREATE TABLE IF NOT EXISTS `2134` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2134`
--

INSERT INTO `2134` (`login_id`, `level`, `total`, `l_date`) VALUES
('2134', 1, 0, '2012-12-26 11:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `2135`
--

CREATE TABLE IF NOT EXISTS `2135` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2135`
--

INSERT INTO `2135` (`login_id`, `level`, `total`, `l_date`) VALUES
('2135', 1, 0, '2012-12-26 11:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `2136`
--

CREATE TABLE IF NOT EXISTS `2136` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2136`
--

INSERT INTO `2136` (`login_id`, `level`, `total`, `l_date`) VALUES
('2136', 1, 0, '2012-12-26 11:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `2138`
--

CREATE TABLE IF NOT EXISTS `2138` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2138`
--

INSERT INTO `2138` (`login_id`, `level`, `total`, `l_date`) VALUES
('2138', 1, 0, '2012-12-26 11:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `2139`
--

CREATE TABLE IF NOT EXISTS `2139` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2139`
--

INSERT INTO `2139` (`login_id`, `level`, `total`, `l_date`) VALUES
('2139', 1, 0, '2012-12-26 11:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `2140`
--

CREATE TABLE IF NOT EXISTS `2140` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2140`
--

INSERT INTO `2140` (`login_id`, `level`, `total`, `l_date`) VALUES
('2140', 1, 0, '2012-12-26 11:13:34');

-- --------------------------------------------------------

--
-- Table structure for table `2141`
--

CREATE TABLE IF NOT EXISTS `2141` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2141`
--

INSERT INTO `2141` (`login_id`, `level`, `total`, `l_date`) VALUES
('2141', 1, 0, '2012-12-26 11:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `2142`
--

CREATE TABLE IF NOT EXISTS `2142` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2142`
--

INSERT INTO `2142` (`login_id`, `level`, `total`, `l_date`) VALUES
('2142', 1, 0, '2012-12-26 11:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `2143`
--

CREATE TABLE IF NOT EXISTS `2143` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2143`
--

INSERT INTO `2143` (`login_id`, `level`, `total`, `l_date`) VALUES
('2143', 1, 0, '2012-12-26 11:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `2144`
--

CREATE TABLE IF NOT EXISTS `2144` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2144`
--

INSERT INTO `2144` (`login_id`, `level`, `total`, `l_date`) VALUES
('2144', 1, 0, '2012-12-26 11:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `2145`
--

CREATE TABLE IF NOT EXISTS `2145` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2145`
--

INSERT INTO `2145` (`login_id`, `level`, `total`, `l_date`) VALUES
('2145', 1, 0, '2012-12-26 11:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `2146`
--

CREATE TABLE IF NOT EXISTS `2146` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2146`
--

INSERT INTO `2146` (`login_id`, `level`, `total`, `l_date`) VALUES
('2146', 1, 0, '2012-12-26 11:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `2147`
--

CREATE TABLE IF NOT EXISTS `2147` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2148`
--

CREATE TABLE IF NOT EXISTS `2148` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2149`
--

CREATE TABLE IF NOT EXISTS `2149` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2149`
--

INSERT INTO `2149` (`login_id`, `level`, `total`, `l_date`) VALUES
('2149', 1, 0, '2012-12-26 11:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `2150`
--

CREATE TABLE IF NOT EXISTS `2150` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2150`
--

INSERT INTO `2150` (`login_id`, `level`, `total`, `l_date`) VALUES
('2150', 1, 0, '2012-12-26 11:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `2151`
--

CREATE TABLE IF NOT EXISTS `2151` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2151`
--

INSERT INTO `2151` (`login_id`, `level`, `total`, `l_date`) VALUES
('2151', 1, 0, '2012-12-26 11:49:30');

-- --------------------------------------------------------

--
-- Table structure for table `2152`
--

CREATE TABLE IF NOT EXISTS `2152` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2152`
--

INSERT INTO `2152` (`login_id`, `level`, `total`, `l_date`) VALUES
('2152', 1, 0, '2012-12-26 11:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `2153`
--

CREATE TABLE IF NOT EXISTS `2153` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2153`
--

INSERT INTO `2153` (`login_id`, `level`, `total`, `l_date`) VALUES
('2153', 1, 0, '2012-12-26 12:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `2154`
--

CREATE TABLE IF NOT EXISTS `2154` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2154`
--

INSERT INTO `2154` (`login_id`, `level`, `total`, `l_date`) VALUES
('2154', 1, 0, '2012-12-26 12:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `2155`
--

CREATE TABLE IF NOT EXISTS `2155` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2155`
--

INSERT INTO `2155` (`login_id`, `level`, `total`, `l_date`) VALUES
('2155', 1, 0, '2012-12-26 12:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `2156`
--

CREATE TABLE IF NOT EXISTS `2156` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2156`
--

INSERT INTO `2156` (`login_id`, `level`, `total`, `l_date`) VALUES
('2156', 1, 0, '2012-12-26 13:57:56');

-- --------------------------------------------------------

--
-- Table structure for table `2159`
--

CREATE TABLE IF NOT EXISTS `2159` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2159`
--

INSERT INTO `2159` (`login_id`, `level`, `total`, `l_date`) VALUES
('2159', 1, 0, '2012-12-26 14:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `2160`
--

CREATE TABLE IF NOT EXISTS `2160` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2160`
--

INSERT INTO `2160` (`login_id`, `level`, `total`, `l_date`) VALUES
('2160', 1, 0, '2012-12-26 14:06:44');

-- --------------------------------------------------------

--
-- Table structure for table `2161`
--

CREATE TABLE IF NOT EXISTS `2161` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2162`
--

CREATE TABLE IF NOT EXISTS `2162` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2163`
--

CREATE TABLE IF NOT EXISTS `2163` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2164`
--

CREATE TABLE IF NOT EXISTS `2164` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2165`
--

CREATE TABLE IF NOT EXISTS `2165` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2166`
--

CREATE TABLE IF NOT EXISTS `2166` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2167`
--

CREATE TABLE IF NOT EXISTS `2167` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2168`
--

CREATE TABLE IF NOT EXISTS `2168` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2169`
--

CREATE TABLE IF NOT EXISTS `2169` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2170`
--

CREATE TABLE IF NOT EXISTS `2170` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2171`
--

CREATE TABLE IF NOT EXISTS `2171` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2172`
--

CREATE TABLE IF NOT EXISTS `2172` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2173`
--

CREATE TABLE IF NOT EXISTS `2173` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2174`
--

CREATE TABLE IF NOT EXISTS `2174` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2175`
--

CREATE TABLE IF NOT EXISTS `2175` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2176`
--

CREATE TABLE IF NOT EXISTS `2176` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2177`
--

CREATE TABLE IF NOT EXISTS `2177` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2178`
--

CREATE TABLE IF NOT EXISTS `2178` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2179`
--

CREATE TABLE IF NOT EXISTS `2179` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2180`
--

CREATE TABLE IF NOT EXISTS `2180` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2181`
--

CREATE TABLE IF NOT EXISTS `2181` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2181`
--

INSERT INTO `2181` (`login_id`, `level`, `total`, `l_date`) VALUES
('2181', 1, 0, '2012-12-26 14:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `2182`
--

CREATE TABLE IF NOT EXISTS `2182` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2183`
--

CREATE TABLE IF NOT EXISTS `2183` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2184`
--

CREATE TABLE IF NOT EXISTS `2184` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2185`
--

CREATE TABLE IF NOT EXISTS `2185` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2186`
--

CREATE TABLE IF NOT EXISTS `2186` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2187`
--

CREATE TABLE IF NOT EXISTS `2187` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2188`
--

CREATE TABLE IF NOT EXISTS `2188` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2189`
--

CREATE TABLE IF NOT EXISTS `2189` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2190`
--

CREATE TABLE IF NOT EXISTS `2190` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2191`
--

CREATE TABLE IF NOT EXISTS `2191` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2192`
--

CREATE TABLE IF NOT EXISTS `2192` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2193`
--

CREATE TABLE IF NOT EXISTS `2193` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2194`
--

CREATE TABLE IF NOT EXISTS `2194` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2195`
--

CREATE TABLE IF NOT EXISTS `2195` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2196`
--

CREATE TABLE IF NOT EXISTS `2196` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2196`
--

INSERT INTO `2196` (`login_id`, `level`, `total`, `l_date`) VALUES
('2196', 1, 0, '2012-12-26 13:59:57');

-- --------------------------------------------------------

--
-- Table structure for table `2197`
--

CREATE TABLE IF NOT EXISTS `2197` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2197`
--

INSERT INTO `2197` (`login_id`, `level`, `total`, `l_date`) VALUES
('2197', 1, 0, '2012-12-26 13:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `2198`
--

CREATE TABLE IF NOT EXISTS `2198` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2198`
--

INSERT INTO `2198` (`login_id`, `level`, `total`, `l_date`) VALUES
('2198', 1, 0, '2012-12-26 12:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `2199`
--

CREATE TABLE IF NOT EXISTS `2199` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2199`
--

INSERT INTO `2199` (`login_id`, `level`, `total`, `l_date`) VALUES
('2199', 1, 0, '2012-12-26 12:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `2200`
--

CREATE TABLE IF NOT EXISTS `2200` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2200`
--

INSERT INTO `2200` (`login_id`, `level`, `total`, `l_date`) VALUES
('2200', 1, 0, '2012-12-26 12:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `2201`
--

CREATE TABLE IF NOT EXISTS `2201` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2201`
--

INSERT INTO `2201` (`login_id`, `level`, `total`, `l_date`) VALUES
('2201', 1, 0, '2012-12-26 12:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `2202`
--

CREATE TABLE IF NOT EXISTS `2202` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2202`
--

INSERT INTO `2202` (`login_id`, `level`, `total`, `l_date`) VALUES
('2202', 1, 0, '2012-12-26 12:13:54');

-- --------------------------------------------------------

--
-- Table structure for table `2203`
--

CREATE TABLE IF NOT EXISTS `2203` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2203`
--

INSERT INTO `2203` (`login_id`, `level`, `total`, `l_date`) VALUES
('2203', 1, 0, '2012-12-26 12:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `2204`
--

CREATE TABLE IF NOT EXISTS `2204` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2204`
--

INSERT INTO `2204` (`login_id`, `level`, `total`, `l_date`) VALUES
('2204', 1, 0, '2012-12-26 12:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `2205`
--

CREATE TABLE IF NOT EXISTS `2205` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2205`
--

INSERT INTO `2205` (`login_id`, `level`, `total`, `l_date`) VALUES
('2205', 1, 0, '2012-12-26 12:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `2206`
--

CREATE TABLE IF NOT EXISTS `2206` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2206`
--

INSERT INTO `2206` (`login_id`, `level`, `total`, `l_date`) VALUES
('2206', 1, 0, '2012-12-26 12:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `2207`
--

CREATE TABLE IF NOT EXISTS `2207` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2207`
--

INSERT INTO `2207` (`login_id`, `level`, `total`, `l_date`) VALUES
('2207', 1, 0, '2012-12-26 12:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `2208`
--

CREATE TABLE IF NOT EXISTS `2208` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2208`
--

INSERT INTO `2208` (`login_id`, `level`, `total`, `l_date`) VALUES
('2208', 1, 0, '2012-12-26 12:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `2209`
--

CREATE TABLE IF NOT EXISTS `2209` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2209`
--

INSERT INTO `2209` (`login_id`, `level`, `total`, `l_date`) VALUES
('2209', 1, 0, '2012-12-26 12:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `2210`
--

CREATE TABLE IF NOT EXISTS `2210` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2210`
--

INSERT INTO `2210` (`login_id`, `level`, `total`, `l_date`) VALUES
('2210', 1, 0, '2012-12-26 11:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `2211`
--

CREATE TABLE IF NOT EXISTS `2211` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2211`
--

INSERT INTO `2211` (`login_id`, `level`, `total`, `l_date`) VALUES
('2211', 1, 0, '2012-12-26 11:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `2212`
--

CREATE TABLE IF NOT EXISTS `2212` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2212`
--

INSERT INTO `2212` (`login_id`, `level`, `total`, `l_date`) VALUES
('2212', 1, 0, '2012-12-26 11:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `2213`
--

CREATE TABLE IF NOT EXISTS `2213` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2213`
--

INSERT INTO `2213` (`login_id`, `level`, `total`, `l_date`) VALUES
('2213', 1, 0, '2012-12-26 11:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `2214`
--

CREATE TABLE IF NOT EXISTS `2214` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2214`
--

INSERT INTO `2214` (`login_id`, `level`, `total`, `l_date`) VALUES
('2214', 1, 0, '2012-12-26 11:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `2215`
--

CREATE TABLE IF NOT EXISTS `2215` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2215`
--

INSERT INTO `2215` (`login_id`, `level`, `total`, `l_date`) VALUES
('2215', 1, 0, '2012-12-26 11:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `2216`
--

CREATE TABLE IF NOT EXISTS `2216` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2216`
--

INSERT INTO `2216` (`login_id`, `level`, `total`, `l_date`) VALUES
('2216', 1, 0, '2012-12-26 11:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `2217`
--

CREATE TABLE IF NOT EXISTS `2217` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2217`
--

INSERT INTO `2217` (`login_id`, `level`, `total`, `l_date`) VALUES
('2217', 1, 0, '2012-12-26 11:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `2218`
--

CREATE TABLE IF NOT EXISTS `2218` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2218`
--

INSERT INTO `2218` (`login_id`, `level`, `total`, `l_date`) VALUES
('2218', 1, 0, '2012-12-26 11:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `2219`
--

CREATE TABLE IF NOT EXISTS `2219` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2219`
--

INSERT INTO `2219` (`login_id`, `level`, `total`, `l_date`) VALUES
('2219', 1, 0, '2012-12-26 11:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `2220`
--

CREATE TABLE IF NOT EXISTS `2220` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2220`
--

INSERT INTO `2220` (`login_id`, `level`, `total`, `l_date`) VALUES
('2220', 1, 0, '2012-12-26 11:44:01');

-- --------------------------------------------------------

--
-- Table structure for table `2221`
--

CREATE TABLE IF NOT EXISTS `2221` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2221`
--

INSERT INTO `2221` (`login_id`, `level`, `total`, `l_date`) VALUES
('2221', 1, 0, '2012-12-26 11:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `2222`
--

CREATE TABLE IF NOT EXISTS `2222` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2222`
--

INSERT INTO `2222` (`login_id`, `level`, `total`, `l_date`) VALUES
('2222', 1, 0, '2012-12-26 11:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `2223`
--

CREATE TABLE IF NOT EXISTS `2223` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2223`
--

INSERT INTO `2223` (`login_id`, `level`, `total`, `l_date`) VALUES
('2223', 1, 0, '2012-12-26 11:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `2224`
--

CREATE TABLE IF NOT EXISTS `2224` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2224`
--

INSERT INTO `2224` (`login_id`, `level`, `total`, `l_date`) VALUES
('2224', 1, 0, '2012-12-26 11:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `2225`
--

CREATE TABLE IF NOT EXISTS `2225` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2225`
--

INSERT INTO `2225` (`login_id`, `level`, `total`, `l_date`) VALUES
('2225', 1, 0, '2012-12-26 11:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `2226`
--

CREATE TABLE IF NOT EXISTS `2226` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2226`
--

INSERT INTO `2226` (`login_id`, `level`, `total`, `l_date`) VALUES
('2226', 1, 0, '2012-12-26 11:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `2227`
--

CREATE TABLE IF NOT EXISTS `2227` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2227`
--

INSERT INTO `2227` (`login_id`, `level`, `total`, `l_date`) VALUES
('2227', 1, 0, '2012-12-26 11:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `2228`
--

CREATE TABLE IF NOT EXISTS `2228` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2228`
--

INSERT INTO `2228` (`login_id`, `level`, `total`, `l_date`) VALUES
('2228', 1, 0, '2012-12-26 07:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `2229`
--

CREATE TABLE IF NOT EXISTS `2229` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2230`
--

CREATE TABLE IF NOT EXISTS `2230` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2231`
--

CREATE TABLE IF NOT EXISTS `2231` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2232`
--

CREATE TABLE IF NOT EXISTS `2232` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2233`
--

CREATE TABLE IF NOT EXISTS `2233` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2234`
--

CREATE TABLE IF NOT EXISTS `2234` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2235`
--

CREATE TABLE IF NOT EXISTS `2235` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2236`
--

CREATE TABLE IF NOT EXISTS `2236` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2237`
--

CREATE TABLE IF NOT EXISTS `2237` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2238`
--

CREATE TABLE IF NOT EXISTS `2238` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2239`
--

CREATE TABLE IF NOT EXISTS `2239` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2240`
--

CREATE TABLE IF NOT EXISTS `2240` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2241`
--

CREATE TABLE IF NOT EXISTS `2241` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2242`
--

CREATE TABLE IF NOT EXISTS `2242` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2243`
--

CREATE TABLE IF NOT EXISTS `2243` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2244`
--

CREATE TABLE IF NOT EXISTS `2244` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2245`
--

CREATE TABLE IF NOT EXISTS `2245` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2246`
--

CREATE TABLE IF NOT EXISTS `2246` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2247`
--

CREATE TABLE IF NOT EXISTS `2247` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2248`
--

CREATE TABLE IF NOT EXISTS `2248` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2249`
--

CREATE TABLE IF NOT EXISTS `2249` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2250`
--

CREATE TABLE IF NOT EXISTS `2250` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2251`
--

CREATE TABLE IF NOT EXISTS `2251` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2252`
--

CREATE TABLE IF NOT EXISTS `2252` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2253`
--

CREATE TABLE IF NOT EXISTS `2253` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2255`
--

CREATE TABLE IF NOT EXISTS `2255` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2256`
--

CREATE TABLE IF NOT EXISTS `2256` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2257`
--

CREATE TABLE IF NOT EXISTS `2257` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2258`
--

CREATE TABLE IF NOT EXISTS `2258` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2259`
--

CREATE TABLE IF NOT EXISTS `2259` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2260`
--

CREATE TABLE IF NOT EXISTS `2260` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2261`
--

CREATE TABLE IF NOT EXISTS `2261` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2262`
--

CREATE TABLE IF NOT EXISTS `2262` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2263`
--

CREATE TABLE IF NOT EXISTS `2263` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2264`
--

CREATE TABLE IF NOT EXISTS `2264` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2265`
--

CREATE TABLE IF NOT EXISTS `2265` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2266`
--

CREATE TABLE IF NOT EXISTS `2266` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2267`
--

CREATE TABLE IF NOT EXISTS `2267` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2268`
--

CREATE TABLE IF NOT EXISTS `2268` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2269`
--

CREATE TABLE IF NOT EXISTS `2269` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2270`
--

CREATE TABLE IF NOT EXISTS `2270` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2271`
--

CREATE TABLE IF NOT EXISTS `2271` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2272`
--

CREATE TABLE IF NOT EXISTS `2272` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2273`
--

CREATE TABLE IF NOT EXISTS `2273` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2274`
--

CREATE TABLE IF NOT EXISTS `2274` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2276`
--

CREATE TABLE IF NOT EXISTS `2276` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2278`
--

CREATE TABLE IF NOT EXISTS `2278` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2279`
--

CREATE TABLE IF NOT EXISTS `2279` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2280`
--

CREATE TABLE IF NOT EXISTS `2280` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2281`
--

CREATE TABLE IF NOT EXISTS `2281` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2282`
--

CREATE TABLE IF NOT EXISTS `2282` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2283`
--

CREATE TABLE IF NOT EXISTS `2283` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2284`
--

CREATE TABLE IF NOT EXISTS `2284` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2285`
--

CREATE TABLE IF NOT EXISTS `2285` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2286`
--

CREATE TABLE IF NOT EXISTS `2286` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2287`
--

CREATE TABLE IF NOT EXISTS `2287` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2288`
--

CREATE TABLE IF NOT EXISTS `2288` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2289`
--

CREATE TABLE IF NOT EXISTS `2289` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2290`
--

CREATE TABLE IF NOT EXISTS `2290` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2291`
--

CREATE TABLE IF NOT EXISTS `2291` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2292`
--

CREATE TABLE IF NOT EXISTS `2292` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2293`
--

CREATE TABLE IF NOT EXISTS `2293` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2294`
--

CREATE TABLE IF NOT EXISTS `2294` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2295`
--

CREATE TABLE IF NOT EXISTS `2295` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2296`
--

CREATE TABLE IF NOT EXISTS `2296` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2297`
--

CREATE TABLE IF NOT EXISTS `2297` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2298`
--

CREATE TABLE IF NOT EXISTS `2298` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2299`
--

CREATE TABLE IF NOT EXISTS `2299` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2300`
--

CREATE TABLE IF NOT EXISTS `2300` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2301`
--

CREATE TABLE IF NOT EXISTS `2301` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2303`
--

CREATE TABLE IF NOT EXISTS `2303` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2304`
--

CREATE TABLE IF NOT EXISTS `2304` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2305`
--

CREATE TABLE IF NOT EXISTS `2305` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2306`
--

CREATE TABLE IF NOT EXISTS `2306` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2307`
--

CREATE TABLE IF NOT EXISTS `2307` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2308`
--

CREATE TABLE IF NOT EXISTS `2308` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2309`
--

CREATE TABLE IF NOT EXISTS `2309` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2310`
--

CREATE TABLE IF NOT EXISTS `2310` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2311`
--

CREATE TABLE IF NOT EXISTS `2311` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2312`
--

CREATE TABLE IF NOT EXISTS `2312` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2314`
--

CREATE TABLE IF NOT EXISTS `2314` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2315`
--

CREATE TABLE IF NOT EXISTS `2315` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2316`
--

CREATE TABLE IF NOT EXISTS `2316` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2317`
--

CREATE TABLE IF NOT EXISTS `2317` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2318`
--

CREATE TABLE IF NOT EXISTS `2318` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2319`
--

CREATE TABLE IF NOT EXISTS `2319` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2320`
--

CREATE TABLE IF NOT EXISTS `2320` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2321`
--

CREATE TABLE IF NOT EXISTS `2321` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2322`
--

CREATE TABLE IF NOT EXISTS `2322` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2323`
--

CREATE TABLE IF NOT EXISTS `2323` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2324`
--

CREATE TABLE IF NOT EXISTS `2324` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2325`
--

CREATE TABLE IF NOT EXISTS `2325` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2326`
--

CREATE TABLE IF NOT EXISTS `2326` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2327`
--

CREATE TABLE IF NOT EXISTS `2327` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2328`
--

CREATE TABLE IF NOT EXISTS `2328` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2329`
--

CREATE TABLE IF NOT EXISTS `2329` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2330`
--

CREATE TABLE IF NOT EXISTS `2330` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2331`
--

CREATE TABLE IF NOT EXISTS `2331` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2332`
--

CREATE TABLE IF NOT EXISTS `2332` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2333`
--

CREATE TABLE IF NOT EXISTS `2333` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2334`
--

CREATE TABLE IF NOT EXISTS `2334` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2335`
--

CREATE TABLE IF NOT EXISTS `2335` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2336`
--

CREATE TABLE IF NOT EXISTS `2336` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2337`
--

CREATE TABLE IF NOT EXISTS `2337` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2338`
--

CREATE TABLE IF NOT EXISTS `2338` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2339`
--

CREATE TABLE IF NOT EXISTS `2339` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2340`
--

CREATE TABLE IF NOT EXISTS `2340` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2341`
--

CREATE TABLE IF NOT EXISTS `2341` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2342`
--

CREATE TABLE IF NOT EXISTS `2342` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2343`
--

CREATE TABLE IF NOT EXISTS `2343` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2344`
--

CREATE TABLE IF NOT EXISTS `2344` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2345`
--

CREATE TABLE IF NOT EXISTS `2345` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2346`
--

CREATE TABLE IF NOT EXISTS `2346` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2347`
--

CREATE TABLE IF NOT EXISTS `2347` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2348`
--

CREATE TABLE IF NOT EXISTS `2348` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2349`
--

CREATE TABLE IF NOT EXISTS `2349` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2350`
--

CREATE TABLE IF NOT EXISTS `2350` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2351`
--

CREATE TABLE IF NOT EXISTS `2351` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2352`
--

CREATE TABLE IF NOT EXISTS `2352` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2353`
--

CREATE TABLE IF NOT EXISTS `2353` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2354`
--

CREATE TABLE IF NOT EXISTS `2354` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2355`
--

CREATE TABLE IF NOT EXISTS `2355` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2357`
--

CREATE TABLE IF NOT EXISTS `2357` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2358`
--

CREATE TABLE IF NOT EXISTS `2358` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2359`
--

CREATE TABLE IF NOT EXISTS `2359` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2360`
--

CREATE TABLE IF NOT EXISTS `2360` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2361`
--

CREATE TABLE IF NOT EXISTS `2361` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2362`
--

CREATE TABLE IF NOT EXISTS `2362` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2363`
--

CREATE TABLE IF NOT EXISTS `2363` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2364`
--

CREATE TABLE IF NOT EXISTS `2364` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2365`
--

CREATE TABLE IF NOT EXISTS `2365` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2366`
--

CREATE TABLE IF NOT EXISTS `2366` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2367`
--

CREATE TABLE IF NOT EXISTS `2367` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2368`
--

CREATE TABLE IF NOT EXISTS `2368` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2369`
--

CREATE TABLE IF NOT EXISTS `2369` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2370`
--

CREATE TABLE IF NOT EXISTS `2370` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2371`
--

CREATE TABLE IF NOT EXISTS `2371` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2372`
--

CREATE TABLE IF NOT EXISTS `2372` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2373`
--

CREATE TABLE IF NOT EXISTS `2373` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2374`
--

CREATE TABLE IF NOT EXISTS `2374` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2375`
--

CREATE TABLE IF NOT EXISTS `2375` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2376`
--

CREATE TABLE IF NOT EXISTS `2376` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2377`
--

CREATE TABLE IF NOT EXISTS `2377` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2378`
--

CREATE TABLE IF NOT EXISTS `2378` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2379`
--

CREATE TABLE IF NOT EXISTS `2379` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2380`
--

CREATE TABLE IF NOT EXISTS `2380` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2381`
--

CREATE TABLE IF NOT EXISTS `2381` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2382`
--

CREATE TABLE IF NOT EXISTS `2382` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2383`
--

CREATE TABLE IF NOT EXISTS `2383` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2384`
--

CREATE TABLE IF NOT EXISTS `2384` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2385`
--

CREATE TABLE IF NOT EXISTS `2385` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2386`
--

CREATE TABLE IF NOT EXISTS `2386` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2387`
--

CREATE TABLE IF NOT EXISTS `2387` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2388`
--

CREATE TABLE IF NOT EXISTS `2388` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2389`
--

CREATE TABLE IF NOT EXISTS `2389` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2390`
--

CREATE TABLE IF NOT EXISTS `2390` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2391`
--

CREATE TABLE IF NOT EXISTS `2391` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2392`
--

CREATE TABLE IF NOT EXISTS `2392` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2393`
--

CREATE TABLE IF NOT EXISTS `2393` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2394`
--

CREATE TABLE IF NOT EXISTS `2394` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2395`
--

CREATE TABLE IF NOT EXISTS `2395` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2396`
--

CREATE TABLE IF NOT EXISTS `2396` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2397`
--

CREATE TABLE IF NOT EXISTS `2397` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2398`
--

CREATE TABLE IF NOT EXISTS `2398` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2399`
--

CREATE TABLE IF NOT EXISTS `2399` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2400`
--

CREATE TABLE IF NOT EXISTS `2400` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2401`
--

CREATE TABLE IF NOT EXISTS `2401` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2402`
--

CREATE TABLE IF NOT EXISTS `2402` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2403`
--

CREATE TABLE IF NOT EXISTS `2403` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2404`
--

CREATE TABLE IF NOT EXISTS `2404` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2405`
--

CREATE TABLE IF NOT EXISTS `2405` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2406`
--

CREATE TABLE IF NOT EXISTS `2406` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2407`
--

CREATE TABLE IF NOT EXISTS `2407` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2408`
--

CREATE TABLE IF NOT EXISTS `2408` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2409`
--

CREATE TABLE IF NOT EXISTS `2409` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2410`
--

CREATE TABLE IF NOT EXISTS `2410` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2411`
--

CREATE TABLE IF NOT EXISTS `2411` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2412`
--

CREATE TABLE IF NOT EXISTS `2412` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2413`
--

CREATE TABLE IF NOT EXISTS `2413` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2414`
--

CREATE TABLE IF NOT EXISTS `2414` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2415`
--

CREATE TABLE IF NOT EXISTS `2415` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2416`
--

CREATE TABLE IF NOT EXISTS `2416` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2417`
--

CREATE TABLE IF NOT EXISTS `2417` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2418`
--

CREATE TABLE IF NOT EXISTS `2418` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2419`
--

CREATE TABLE IF NOT EXISTS `2419` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2420`
--

CREATE TABLE IF NOT EXISTS `2420` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2421`
--

CREATE TABLE IF NOT EXISTS `2421` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2422`
--

CREATE TABLE IF NOT EXISTS `2422` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2423`
--

CREATE TABLE IF NOT EXISTS `2423` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2424`
--

CREATE TABLE IF NOT EXISTS `2424` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2425`
--

CREATE TABLE IF NOT EXISTS `2425` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2426`
--

CREATE TABLE IF NOT EXISTS `2426` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2427`
--

CREATE TABLE IF NOT EXISTS `2427` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2428`
--

CREATE TABLE IF NOT EXISTS `2428` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2429`
--

CREATE TABLE IF NOT EXISTS `2429` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2430`
--

CREATE TABLE IF NOT EXISTS `2430` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2431`
--

CREATE TABLE IF NOT EXISTS `2431` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2432`
--

CREATE TABLE IF NOT EXISTS `2432` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2433`
--

CREATE TABLE IF NOT EXISTS `2433` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2434`
--

CREATE TABLE IF NOT EXISTS `2434` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2435`
--

CREATE TABLE IF NOT EXISTS `2435` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2436`
--

CREATE TABLE IF NOT EXISTS `2436` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2437`
--

CREATE TABLE IF NOT EXISTS `2437` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2438`
--

CREATE TABLE IF NOT EXISTS `2438` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2439`
--

CREATE TABLE IF NOT EXISTS `2439` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2440`
--

CREATE TABLE IF NOT EXISTS `2440` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2441`
--

CREATE TABLE IF NOT EXISTS `2441` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2442`
--

CREATE TABLE IF NOT EXISTS `2442` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2443`
--

CREATE TABLE IF NOT EXISTS `2443` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2444`
--

CREATE TABLE IF NOT EXISTS `2444` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2445`
--

CREATE TABLE IF NOT EXISTS `2445` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2446`
--

CREATE TABLE IF NOT EXISTS `2446` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2447`
--

CREATE TABLE IF NOT EXISTS `2447` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2448`
--

CREATE TABLE IF NOT EXISTS `2448` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2449`
--

CREATE TABLE IF NOT EXISTS `2449` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2450`
--

CREATE TABLE IF NOT EXISTS `2450` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2451`
--

CREATE TABLE IF NOT EXISTS `2451` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2452`
--

CREATE TABLE IF NOT EXISTS `2452` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2453`
--

CREATE TABLE IF NOT EXISTS `2453` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2454`
--

CREATE TABLE IF NOT EXISTS `2454` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2455`
--

CREATE TABLE IF NOT EXISTS `2455` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2456`
--

CREATE TABLE IF NOT EXISTS `2456` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2457`
--

CREATE TABLE IF NOT EXISTS `2457` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2458`
--

CREATE TABLE IF NOT EXISTS `2458` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2459`
--

CREATE TABLE IF NOT EXISTS `2459` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2460`
--

CREATE TABLE IF NOT EXISTS `2460` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2461`
--

CREATE TABLE IF NOT EXISTS `2461` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2462`
--

CREATE TABLE IF NOT EXISTS `2462` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2463`
--

CREATE TABLE IF NOT EXISTS `2463` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2464`
--

CREATE TABLE IF NOT EXISTS `2464` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2465`
--

CREATE TABLE IF NOT EXISTS `2465` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2466`
--

CREATE TABLE IF NOT EXISTS `2466` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2467`
--

CREATE TABLE IF NOT EXISTS `2467` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2468`
--

CREATE TABLE IF NOT EXISTS `2468` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2469`
--

CREATE TABLE IF NOT EXISTS `2469` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2470`
--

CREATE TABLE IF NOT EXISTS `2470` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2471`
--

CREATE TABLE IF NOT EXISTS `2471` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2472`
--

CREATE TABLE IF NOT EXISTS `2472` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2473`
--

CREATE TABLE IF NOT EXISTS `2473` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2474`
--

CREATE TABLE IF NOT EXISTS `2474` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2475`
--

CREATE TABLE IF NOT EXISTS `2475` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2476`
--

CREATE TABLE IF NOT EXISTS `2476` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2477`
--

CREATE TABLE IF NOT EXISTS `2477` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2478`
--

CREATE TABLE IF NOT EXISTS `2478` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2479`
--

CREATE TABLE IF NOT EXISTS `2479` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2480`
--

CREATE TABLE IF NOT EXISTS `2480` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2481`
--

CREATE TABLE IF NOT EXISTS `2481` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2482`
--

CREATE TABLE IF NOT EXISTS `2482` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2483`
--

CREATE TABLE IF NOT EXISTS `2483` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2484`
--

CREATE TABLE IF NOT EXISTS `2484` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2485`
--

CREATE TABLE IF NOT EXISTS `2485` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2486`
--

CREATE TABLE IF NOT EXISTS `2486` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2487`
--

CREATE TABLE IF NOT EXISTS `2487` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2488`
--

CREATE TABLE IF NOT EXISTS `2488` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2490`
--

CREATE TABLE IF NOT EXISTS `2490` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2491`
--

CREATE TABLE IF NOT EXISTS `2491` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2492`
--

CREATE TABLE IF NOT EXISTS `2492` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2493`
--

CREATE TABLE IF NOT EXISTS `2493` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2495`
--

CREATE TABLE IF NOT EXISTS `2495` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2496`
--

CREATE TABLE IF NOT EXISTS `2496` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2497`
--

CREATE TABLE IF NOT EXISTS `2497` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2498`
--

CREATE TABLE IF NOT EXISTS `2498` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2499`
--

CREATE TABLE IF NOT EXISTS `2499` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2500`
--

CREATE TABLE IF NOT EXISTS `2500` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2501`
--

CREATE TABLE IF NOT EXISTS `2501` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2502`
--

CREATE TABLE IF NOT EXISTS `2502` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2503`
--

CREATE TABLE IF NOT EXISTS `2503` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2504`
--

CREATE TABLE IF NOT EXISTS `2504` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2505`
--

CREATE TABLE IF NOT EXISTS `2505` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2506`
--

CREATE TABLE IF NOT EXISTS `2506` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2507`
--

CREATE TABLE IF NOT EXISTS `2507` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2508`
--

CREATE TABLE IF NOT EXISTS `2508` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2509`
--

CREATE TABLE IF NOT EXISTS `2509` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2510`
--

CREATE TABLE IF NOT EXISTS `2510` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2511`
--

CREATE TABLE IF NOT EXISTS `2511` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2512`
--

CREATE TABLE IF NOT EXISTS `2512` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2513`
--

CREATE TABLE IF NOT EXISTS `2513` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2514`
--

CREATE TABLE IF NOT EXISTS `2514` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2515`
--

CREATE TABLE IF NOT EXISTS `2515` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2516`
--

CREATE TABLE IF NOT EXISTS `2516` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2517`
--

CREATE TABLE IF NOT EXISTS `2517` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2518`
--

CREATE TABLE IF NOT EXISTS `2518` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2519`
--

CREATE TABLE IF NOT EXISTS `2519` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2520`
--

CREATE TABLE IF NOT EXISTS `2520` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2521`
--

CREATE TABLE IF NOT EXISTS `2521` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2522`
--

CREATE TABLE IF NOT EXISTS `2522` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2523`
--

CREATE TABLE IF NOT EXISTS `2523` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2524`
--

CREATE TABLE IF NOT EXISTS `2524` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2525`
--

CREATE TABLE IF NOT EXISTS `2525` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2526`
--

CREATE TABLE IF NOT EXISTS `2526` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2527`
--

CREATE TABLE IF NOT EXISTS `2527` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2529`
--

CREATE TABLE IF NOT EXISTS `2529` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2530`
--

CREATE TABLE IF NOT EXISTS `2530` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2531`
--

CREATE TABLE IF NOT EXISTS `2531` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2532`
--

CREATE TABLE IF NOT EXISTS `2532` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2533`
--

CREATE TABLE IF NOT EXISTS `2533` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2534`
--

CREATE TABLE IF NOT EXISTS `2534` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2535`
--

CREATE TABLE IF NOT EXISTS `2535` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2536`
--

CREATE TABLE IF NOT EXISTS `2536` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2537`
--

CREATE TABLE IF NOT EXISTS `2537` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2538`
--

CREATE TABLE IF NOT EXISTS `2538` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2539`
--

CREATE TABLE IF NOT EXISTS `2539` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2540`
--

CREATE TABLE IF NOT EXISTS `2540` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2541`
--

CREATE TABLE IF NOT EXISTS `2541` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2542`
--

CREATE TABLE IF NOT EXISTS `2542` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2543`
--

CREATE TABLE IF NOT EXISTS `2543` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2544`
--

CREATE TABLE IF NOT EXISTS `2544` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2545`
--

CREATE TABLE IF NOT EXISTS `2545` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2546`
--

CREATE TABLE IF NOT EXISTS `2546` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2547`
--

CREATE TABLE IF NOT EXISTS `2547` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2548`
--

CREATE TABLE IF NOT EXISTS `2548` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2549`
--

CREATE TABLE IF NOT EXISTS `2549` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2550`
--

CREATE TABLE IF NOT EXISTS `2550` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2551`
--

CREATE TABLE IF NOT EXISTS `2551` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2552`
--

CREATE TABLE IF NOT EXISTS `2552` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2553`
--

CREATE TABLE IF NOT EXISTS `2553` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2554`
--

CREATE TABLE IF NOT EXISTS `2554` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2555`
--

CREATE TABLE IF NOT EXISTS `2555` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2556`
--

CREATE TABLE IF NOT EXISTS `2556` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2557`
--

CREATE TABLE IF NOT EXISTS `2557` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2558`
--

CREATE TABLE IF NOT EXISTS `2558` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2559`
--

CREATE TABLE IF NOT EXISTS `2559` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2560`
--

CREATE TABLE IF NOT EXISTS `2560` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2561`
--

CREATE TABLE IF NOT EXISTS `2561` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2562`
--

CREATE TABLE IF NOT EXISTS `2562` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2563`
--

CREATE TABLE IF NOT EXISTS `2563` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2564`
--

CREATE TABLE IF NOT EXISTS `2564` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2565`
--

CREATE TABLE IF NOT EXISTS `2565` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2566`
--

CREATE TABLE IF NOT EXISTS `2566` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2567`
--

CREATE TABLE IF NOT EXISTS `2567` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2568`
--

CREATE TABLE IF NOT EXISTS `2568` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2569`
--

CREATE TABLE IF NOT EXISTS `2569` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2570`
--

CREATE TABLE IF NOT EXISTS `2570` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2571`
--

CREATE TABLE IF NOT EXISTS `2571` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2572`
--

CREATE TABLE IF NOT EXISTS `2572` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2573`
--

CREATE TABLE IF NOT EXISTS `2573` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2574`
--

CREATE TABLE IF NOT EXISTS `2574` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2575`
--

CREATE TABLE IF NOT EXISTS `2575` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2576`
--

CREATE TABLE IF NOT EXISTS `2576` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2577`
--

CREATE TABLE IF NOT EXISTS `2577` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2578`
--

CREATE TABLE IF NOT EXISTS `2578` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2579`
--

CREATE TABLE IF NOT EXISTS `2579` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2580`
--

CREATE TABLE IF NOT EXISTS `2580` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2581`
--

CREATE TABLE IF NOT EXISTS `2581` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2582`
--

CREATE TABLE IF NOT EXISTS `2582` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2583`
--

CREATE TABLE IF NOT EXISTS `2583` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2584`
--

CREATE TABLE IF NOT EXISTS `2584` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2585`
--

CREATE TABLE IF NOT EXISTS `2585` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2586`
--

CREATE TABLE IF NOT EXISTS `2586` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2587`
--

CREATE TABLE IF NOT EXISTS `2587` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2588`
--

CREATE TABLE IF NOT EXISTS `2588` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2589`
--

CREATE TABLE IF NOT EXISTS `2589` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2590`
--

CREATE TABLE IF NOT EXISTS `2590` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2591`
--

CREATE TABLE IF NOT EXISTS `2591` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2592`
--

CREATE TABLE IF NOT EXISTS `2592` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2593`
--

CREATE TABLE IF NOT EXISTS `2593` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2594`
--

CREATE TABLE IF NOT EXISTS `2594` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2595`
--

CREATE TABLE IF NOT EXISTS `2595` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2596`
--

CREATE TABLE IF NOT EXISTS `2596` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2597`
--

CREATE TABLE IF NOT EXISTS `2597` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2598`
--

CREATE TABLE IF NOT EXISTS `2598` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2599`
--

CREATE TABLE IF NOT EXISTS `2599` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2600`
--

CREATE TABLE IF NOT EXISTS `2600` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2601`
--

CREATE TABLE IF NOT EXISTS `2601` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2602`
--

CREATE TABLE IF NOT EXISTS `2602` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2603`
--

CREATE TABLE IF NOT EXISTS `2603` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2604`
--

CREATE TABLE IF NOT EXISTS `2604` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2605`
--

CREATE TABLE IF NOT EXISTS `2605` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2606`
--

CREATE TABLE IF NOT EXISTS `2606` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2607`
--

CREATE TABLE IF NOT EXISTS `2607` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2608`
--

CREATE TABLE IF NOT EXISTS `2608` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2609`
--

CREATE TABLE IF NOT EXISTS `2609` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2610`
--

CREATE TABLE IF NOT EXISTS `2610` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2611`
--

CREATE TABLE IF NOT EXISTS `2611` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2612`
--

CREATE TABLE IF NOT EXISTS `2612` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2613`
--

CREATE TABLE IF NOT EXISTS `2613` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2615`
--

CREATE TABLE IF NOT EXISTS `2615` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2616`
--

CREATE TABLE IF NOT EXISTS `2616` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2617`
--

CREATE TABLE IF NOT EXISTS `2617` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2618`
--

CREATE TABLE IF NOT EXISTS `2618` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2619`
--

CREATE TABLE IF NOT EXISTS `2619` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2620`
--

CREATE TABLE IF NOT EXISTS `2620` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2621`
--

CREATE TABLE IF NOT EXISTS `2621` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2622`
--

CREATE TABLE IF NOT EXISTS `2622` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2623`
--

CREATE TABLE IF NOT EXISTS `2623` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2624`
--

CREATE TABLE IF NOT EXISTS `2624` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2625`
--

CREATE TABLE IF NOT EXISTS `2625` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2626`
--

CREATE TABLE IF NOT EXISTS `2626` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2627`
--

CREATE TABLE IF NOT EXISTS `2627` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2628`
--

CREATE TABLE IF NOT EXISTS `2628` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2629`
--

CREATE TABLE IF NOT EXISTS `2629` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2630`
--

CREATE TABLE IF NOT EXISTS `2630` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2631`
--

CREATE TABLE IF NOT EXISTS `2631` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2632`
--

CREATE TABLE IF NOT EXISTS `2632` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2633`
--

CREATE TABLE IF NOT EXISTS `2633` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2634`
--

CREATE TABLE IF NOT EXISTS `2634` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2635`
--

CREATE TABLE IF NOT EXISTS `2635` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2636`
--

CREATE TABLE IF NOT EXISTS `2636` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2637`
--

CREATE TABLE IF NOT EXISTS `2637` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2638`
--

CREATE TABLE IF NOT EXISTS `2638` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2639`
--

CREATE TABLE IF NOT EXISTS `2639` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2641`
--

CREATE TABLE IF NOT EXISTS `2641` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2642`
--

CREATE TABLE IF NOT EXISTS `2642` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2643`
--

CREATE TABLE IF NOT EXISTS `2643` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2644`
--

CREATE TABLE IF NOT EXISTS `2644` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2645`
--

CREATE TABLE IF NOT EXISTS `2645` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2646`
--

CREATE TABLE IF NOT EXISTS `2646` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2647`
--

CREATE TABLE IF NOT EXISTS `2647` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2648`
--

CREATE TABLE IF NOT EXISTS `2648` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2649`
--

CREATE TABLE IF NOT EXISTS `2649` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2650`
--

CREATE TABLE IF NOT EXISTS `2650` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2651`
--

CREATE TABLE IF NOT EXISTS `2651` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2652`
--

CREATE TABLE IF NOT EXISTS `2652` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2653`
--

CREATE TABLE IF NOT EXISTS `2653` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2654`
--

CREATE TABLE IF NOT EXISTS `2654` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2655`
--

CREATE TABLE IF NOT EXISTS `2655` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2656`
--

CREATE TABLE IF NOT EXISTS `2656` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2657`
--

CREATE TABLE IF NOT EXISTS `2657` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2658`
--

CREATE TABLE IF NOT EXISTS `2658` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2659`
--

CREATE TABLE IF NOT EXISTS `2659` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2660`
--

CREATE TABLE IF NOT EXISTS `2660` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2661`
--

CREATE TABLE IF NOT EXISTS `2661` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2662`
--

CREATE TABLE IF NOT EXISTS `2662` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2663`
--

CREATE TABLE IF NOT EXISTS `2663` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2664`
--

CREATE TABLE IF NOT EXISTS `2664` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2665`
--

CREATE TABLE IF NOT EXISTS `2665` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2666`
--

CREATE TABLE IF NOT EXISTS `2666` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2667`
--

CREATE TABLE IF NOT EXISTS `2667` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2668`
--

CREATE TABLE IF NOT EXISTS `2668` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2669`
--

CREATE TABLE IF NOT EXISTS `2669` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2670`
--

CREATE TABLE IF NOT EXISTS `2670` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2671`
--

CREATE TABLE IF NOT EXISTS `2671` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2672`
--

CREATE TABLE IF NOT EXISTS `2672` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2673`
--

CREATE TABLE IF NOT EXISTS `2673` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2674`
--

CREATE TABLE IF NOT EXISTS `2674` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2675`
--

CREATE TABLE IF NOT EXISTS `2675` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2676`
--

CREATE TABLE IF NOT EXISTS `2676` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2677`
--

CREATE TABLE IF NOT EXISTS `2677` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2678`
--

CREATE TABLE IF NOT EXISTS `2678` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2679`
--

CREATE TABLE IF NOT EXISTS `2679` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2680`
--

CREATE TABLE IF NOT EXISTS `2680` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2681`
--

CREATE TABLE IF NOT EXISTS `2681` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2682`
--

CREATE TABLE IF NOT EXISTS `2682` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2683`
--

CREATE TABLE IF NOT EXISTS `2683` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2684`
--

CREATE TABLE IF NOT EXISTS `2684` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2685`
--

CREATE TABLE IF NOT EXISTS `2685` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2688`
--

CREATE TABLE IF NOT EXISTS `2688` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2689`
--

CREATE TABLE IF NOT EXISTS `2689` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2690`
--

CREATE TABLE IF NOT EXISTS `2690` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2691`
--

CREATE TABLE IF NOT EXISTS `2691` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2692`
--

CREATE TABLE IF NOT EXISTS `2692` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2693`
--

CREATE TABLE IF NOT EXISTS `2693` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2694`
--

CREATE TABLE IF NOT EXISTS `2694` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2695`
--

CREATE TABLE IF NOT EXISTS `2695` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2696`
--

CREATE TABLE IF NOT EXISTS `2696` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2697`
--

CREATE TABLE IF NOT EXISTS `2697` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2698`
--

CREATE TABLE IF NOT EXISTS `2698` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2699`
--

CREATE TABLE IF NOT EXISTS `2699` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2700`
--

CREATE TABLE IF NOT EXISTS `2700` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2701`
--

CREATE TABLE IF NOT EXISTS `2701` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2702`
--

CREATE TABLE IF NOT EXISTS `2702` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2703`
--

CREATE TABLE IF NOT EXISTS `2703` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2704`
--

CREATE TABLE IF NOT EXISTS `2704` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2705`
--

CREATE TABLE IF NOT EXISTS `2705` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2706`
--

CREATE TABLE IF NOT EXISTS `2706` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2707`
--

CREATE TABLE IF NOT EXISTS `2707` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2708`
--

CREATE TABLE IF NOT EXISTS `2708` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2709`
--

CREATE TABLE IF NOT EXISTS `2709` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2710`
--

CREATE TABLE IF NOT EXISTS `2710` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2711`
--

CREATE TABLE IF NOT EXISTS `2711` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2712`
--

CREATE TABLE IF NOT EXISTS `2712` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2713`
--

CREATE TABLE IF NOT EXISTS `2713` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2714`
--

CREATE TABLE IF NOT EXISTS `2714` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2715`
--

CREATE TABLE IF NOT EXISTS `2715` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2716`
--

CREATE TABLE IF NOT EXISTS `2716` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2717`
--

CREATE TABLE IF NOT EXISTS `2717` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2718`
--

CREATE TABLE IF NOT EXISTS `2718` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2719`
--

CREATE TABLE IF NOT EXISTS `2719` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2720`
--

CREATE TABLE IF NOT EXISTS `2720` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2721`
--

CREATE TABLE IF NOT EXISTS `2721` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2722`
--

CREATE TABLE IF NOT EXISTS `2722` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2723`
--

CREATE TABLE IF NOT EXISTS `2723` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2724`
--

CREATE TABLE IF NOT EXISTS `2724` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2725`
--

CREATE TABLE IF NOT EXISTS `2725` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2726`
--

CREATE TABLE IF NOT EXISTS `2726` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2727`
--

CREATE TABLE IF NOT EXISTS `2727` (
  `login_id` varchar(40) NOT NULL,
  `level` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `l_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
