-- phpMyAdmin SQL Dump
-- version 2.11.9.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2009 at 11:26 AM
-- Server version: 5.0.87
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `system_db`
--

-- use aricentl_database;
use system_db ;
-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('alive', 'xxyyzz');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE IF NOT EXISTS `login_info` (
  `m_id` varchar(15) NOT NULL,
  `m_pass` varchar(15) NOT NULL,
  `m_join` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `app_no` varchar(15) NOT NULL,
  PRIMARY KEY  (`m_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`m_id`, `m_pass`, `m_join`, `status`, `app_no`) VALUES
('081131432', 'goyhas', '0000-00-00', 'A', '71131432'),
('081118361', 'goyhas', '0000-00-00', 'A', '101118361'),
('081131523', 'goyhas', '0000-00-00', 'A', '21131523'),
('081131594', 'goyhas', '0000-00-00', 'A', '61131594'),
('081159395', '123456', '0000-00-00', 'A', '61159395'),
('151813597', '123456', '2009-10-15', 'A', '91813597'),
('151829258', '123456', '2009-10-15', 'A', '71829258'),
('151841169', '123456', '2009-10-15', 'A', '21841169'),
('1518581710', '123456', '2009-10-15', 'A', '318581710'),
('2219120511', '123456', '2009-10-22', 'A', '119120511'),
('2219222312', '123456', '2009-10-22', 'A', '419222312'),
('2512114213', '123456', '2009-10-25', 'A', '212114213'),
('2512380914', '123456', '2009-10-25', 'A', '412380914'),
('2512451515', '123456', '2009-10-25', 'A', '412451515'),
('2512511216', '123456', '2009-10-25', 'A', '512511216'),
('2513032717', '123456', '2009-10-25', 'A', '1013032717'),
('2513283618', '123456', '2009-10-25', 'A', '913283618'),
('2513513619', '123456', '2009-10-25', 'A', '613513619'),
('2514060020', '123456', '2009-10-25', 'A', '214060020'),
('3112374821', '123456', '2009-10-31', 'A', '612374821'),
('3112563522', '123456', '2009-10-31', 'NA', '912563522');

-- --------------------------------------------------------

--
-- Table structure for table `pin_no`
--

CREATE TABLE IF NOT EXISTS `pin_no` (
  `sno` varchar(15) NOT NULL,
  `pin_no` varchar(15) NOT NULL,
  `login_id` varchar(15) NOT NULL,
  `active_date` date NOT NULL,
  UNIQUE KEY `sno` (`sno`),
  UNIQUE KEY `pin_no` (`pin_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_no`
--

INSERT INTO `pin_no` (`sno`, `pin_no`, `login_id`, `active_date`) VALUES
('10001', '919191', '81118361', '2009-10-08'),
('10002', '909002', '81131432', '2009-10-08'),
('10004', '909126', '81131594', '2009-10-08'),
('10003', '929123', '81131523', '2009-10-08'),
('10005', '909026', '81159395', '2009-10-08'),
('10006', '909165', '151813597', '2009-10-15'),
('10007', '912964', '151829258', '2009-10-15'),
('10008', '923568', '151841169', '2009-10-15'),
('10009', '123456789', '1518581710', '2009-10-15'),
('10010', '326547', '2219120511', '2009-10-22'),
('10011', '327845', '2219222312', '2009-10-22'),
('10012', '327789', '2512114213', '2009-10-25'),
('10013', '327956', '2512380914', '2009-10-25'),
('10014', '326999', '2512451515', '2009-10-25'),
('10015', '326789', '2512511216', '2009-10-25'),
('10016', '326777', '2513032717', '2009-10-25'),
('10017', '326329', '2513283618', '2009-10-25'),
('10018', '326824', '2513513619', '2009-10-25'),
('10019', '326025', '2514060020', '2009-10-25'),
('100020', '4568974', '', '0000-00-00'),
('100021', '4568945', '3112374821', '2009-10-31'),
('100022', '4564785', '', '0000-00-00'),
('100023', '4567410', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `s_id` varchar(15) NOT NULL,
  `form_type` varchar(6) NOT NULL,
  `m_name` varchar(35) NOT NULL,
  `pname` varchar(35) NOT NULL,
  `m_dob` date NOT NULL,
  `m_status` varchar(10) NOT NULL,
  `nationality` varchar(10) NOT NULL,
  `address` varchar(65) NOT NULL,
  `mailing_address` varchar(65) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `mobile_network` varchar(10) NOT NULL,
  `phone_office` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dispatch_mode` varchar(10) NOT NULL,
  `n_name` varchar(35) NOT NULL,
  `n_relation` varchar(30) NOT NULL,
  `n_address` varchar(65) NOT NULL,
  `n_dob` date NOT NULL,
  `bank_name` varchar(35) NOT NULL,
  `acc_no` varchar(14) NOT NULL,
  `bank_branch` varchar(20) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `ifsc_code` varchar(10) NOT NULL,
  `login_id` varchar(15) NOT NULL,
  `login_pass` varchar(15) NOT NULL,
  `hint` varchar(50) NOT NULL,
  `hint_ans` varchar(75) NOT NULL,
  `app_no` varchar(15) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`s_id`, `form_type`, `m_name`, `pname`, `m_dob`, `m_status`, `nationality`, `address`, `mailing_address`, `city`, `state`, `pincode`, `mobile_no`, `mobile_network`, `phone_office`, `email`, `dispatch_mode`, `n_name`, `n_relation`, `n_address`, `n_dob`, `bank_name`, `acc_no`, `bank_branch`, `pan_no`, `ifsc_code`, `login_id`, `login_pass`, `hint`, `hint_ans`, `app_no`) VALUES
('000000', '', 'Mr. Sahyog Jan Kalyan Shiksha Samit', 'S/O Sahyog Jan Kalyan Shiksha Samit', '1990-09-26', 'Unmarried', 'Indian', '1445, First Floor, Sector 17C, Gurgaon Haryana', '1445, First Floor, Sector 17C, Gurgaon Haryana', 'Gurgaon', 'Haryana', '205001', '9837035841', 'gsm', '', 'saurav_pandey786@yahoo.com', 'Online', 'Sahyog', 'BROTHER', 'As Above', '2009-09-26', 'NA', 'NA', 'NA', 'NA', '', '081118361', 'goyhas', 'What is your pet name?', 'sahyog', '101118361'),
('081118361', 'A', 'Mr. Sahyog Jan Kalyan Shiksha Samit', 'S/O Sahyog Jan Kalyan Shiksha Samit', '1990-09-26', 'Unmarried', 'Indian', '1445, First Floor, Sector 17C, Gurgaon Haryana', '1445, First Floor, Sector 17C, Gurgaon Haryana', 'Gurgaon', 'Haryana', '205001', '9837035841', 'gsm', '', 'saurav_pandey786@yahoo.com', 'Online', 'Sahyog', 'BROTHER', 'Same As', '2009-09-26', 'NA', 'NA', 'NA', 'NA', '', '081131432', 'goyhas', 'What is your pet name?', 'sahyog', '71131432'),
('081118361', 'B', 'Mr. Sahyog Jan Kalyan Shiksha Samit', 'S/O Sahyog Jan Kalyan Shiksha Samit', '1990-09-26', 'Unmarried', 'Indian', '1445, First Floor, Sector 17C, Gurgaon Haryana', '1445, First Floor, Sector 17C, Gurgaon Haryana', 'Gurgaon', 'Haryana', '205001', '9837035841', 'gsm', '', 'saurav_pandey786@yahoo.com', 'Online', 'Sahyog', 'BROTHER', 'Same As', '2009-09-26', 'NA', 'NA', 'NA', 'NA', '', '081131523', 'goyhas', 'What is your pet name?', 'sahyog', '21131523'),
('081118361', 'C', 'Mr. Sahyog Jan Kalyan Shiksha Samit', 'S/O Sahyog Jan Kalyan Shiksha Samit', '1990-09-26', 'Unmarried', 'Indian', '1445, First Floor, Sector 17C, Gurgaon Haryana', '1445, First Floor, Sector 17C, Gurgaon Haryana', 'Gurgaon', 'Haryana', '205001', '9837035841', 'gsm', '', 'saurav_pandey786@yahoo.com', 'Online', 'Sahyog', 'BROTHER', 'Same As', '2009-09-26', 'NA', 'NA', 'NA', 'NA', '', '081131594', 'goyhas', 'What is your pet name?', 'sahyog', '61131594'),
('081131432', 'A', 'Mr. Gyan Singh Kushwah', 'S/O Balwant Singh Kushwah', '0000-00-00', 'Married', 'Indian', 'Mo. Siyapuram Opp. Bajaj Show Room, Station Road', 'Mo. Siyapuram Opp. Bajaj Show Room, Station Road', 'Mainpuri', 'Uttar Pradesh', '205001', '9719005869', 'gsm', '', 'saurav_pandey786@yahoo.com', 'By Courier', 'Anita Kushwah', 'WIFE', 'Same As', '0000-00-00', 'PNB', '03480001002800', 'Mainpuri', 'NA', '', '081159395', '123456', 'What is your pet name?', 'gyan', '61159395'),
('081159395', 'A', 'Mr. munendra singh chauhan', 'S/O netra pal singh', '1975-04-10', 'Married', 'Indian', 'haridarshan nagar,mainpuri', 'as above', 'mainpuri', 'Uttar Pradesh', '205001', '9457415926', 'gsm', '', 'www.saurav_pandey786@yahoo.com', 'By Courier', 'prem lata', 'WIFE', 'as above', '0000-00-00', 's.b.i.', '3055312577', 'mainpuri', 'AHNTC1997J', '', '151813597', '123456', 'What is your pet name?', 'MUNNI', '91813597'),
('151813597', 'A', 'Mr. anoop kumar', 'S/O amar singh', '0000-00-00', 'Unmarried', 'Indian', 'vill-pragpur, post gariya(chhinkaura)\r\ndistt-mainpuri', 'as above', 'mainpuri', 'Uttar Pradesh', '206301', '9760142035', 'gsm', '', 'www.saurav_pandey786@yahoo.com', 'By Courier', 'amar singh', 'FATHER', 'as above', '0000-00-00', 'bank of india`', '29840', 'bewar', 'a', '', '151829258', '123456', 'What is your pet name?', 'anoop', '71829258'),
('151829258', 'C', 'Mr. kuldeep kumar', 'S/O rati ram saxena', '1980-02-15', 'Unmarried', 'Indian', '4/255,awas vikas colony,mainpuri', 'as above', 'mainpuri', 'Uttar Pradesh', '205001', '9457364391', 'gsm', '', 'www.saurav_pandey786@yahoo.com', 'By Courier', 'rati ram saxena', 'FATHER', 'same', '0000-00-00', 'pnb', '03480001002265', 'mainpuri', 'a', '', '151841169', '123456', 'What is your pet name?', 'kuldeep', '21841169'),
('151841169', 'A', 'Mr. gyan chandra gupta', 'S/O radhe shyam gupta', '0000-00-00', 'Married', 'Indian', '1/66/2,awas vikas ,mainpuri', 'same', 'mainpuri', 'Uttar Pradesh', '205001', '9410450208', 'gsm', '', 'www.saurav_pandey786@yahoo.com', 'By Courier', 'sangeeta gupta', 'WIFE', 'same', '0000-00-00', 'sbi', '10902962663', 'mainpuri', 'afppg8878n', '', '1518581710', '123456', 'What is your pet name?', 'gyan', '318581710'),
('081131432', 'B', 'Ms. sheela varma', 'W/O c.l. verma', '1952-05-13', 'Married', 'Indian', 'c 21,phase 1,trans yamuna colony,agra', 'same', 'agra', 'Uttar Pradesh', '282006', '9412516927', 'gsm', '', 'www.saurav_pandey786@yahoo.com', 'By Courier', 'satyendra verma', 'SON', 'same', '1974-12-24', 'pnb', 'a', 'agra', '282006', '', '2219120511', '123456', 'What is your pet name?', 'verma', '119120511'),
('151841169', 'B', 'Mr. BACHAN SINGH GANGWAR', 'S/O RAM SINGH', '0000-00-00', 'Married', 'Indian', 'VILL+POST-PITAURA,KAIMGANJ,DISST-FARRUKHABAD', 'SAME', 'FARRUKHABAD', 'Uttar Pradesh', '207502', '0988932593', 'gsm', '', 'www.saurav_pandey786@yahoo.com', 'By Courier', 'SAROJNI DEVI', 'WIFE', 'same', '0000-00-00', 'A', 'A', 'A', 'A', 'A', '2219222312', '123456', 'What is your pet name?', 'BACHAN', '419222312'),
('2219120511', 'C', 'Mr. MANOJ KUMAR AMAN', 'S/O SATISH CHANDRA', '1978-03-11', 'Married', 'Indian', 'B.S.A OFFICE I.W.D.P. SABRI ROAD , HAYAT NAGAR MIRZAPUR.', 'B.S.A OFFICE I.W.D.P. SABRI ROAD , HAYAT NAGAR MIRZAPUR.', 'MIRZAPUR', 'Uttar Pradesh', '000000', '9839328265', 'gsm', '', '25SARBESH06KUMAR76@GMAIL.COM', 'By Courier', 'NEERAJ', 'WIFE', 'B.S.A OFFICE I.W.D.P. SABRI ROAD , HAYAT NAGAR MIRZAPUR.', '0000-00-00', 'PNB', '03220001300926', 'MIRZAPUR', 'AKLPA8965D', '', '2512114213', '123456', 'What is your pet name?', 'AMAN', '212114213'),
('151829258', 'A', 'Ms. NEMA DEVI', 'D/O MADANSEN ', '0000-00-00', 'Unmarried', 'Indian', 'VILL-SRANGARPUR POST-KARIMGANJ DIST-MAINPURI', 'VILL-SRANGARPUR POST-KARIMGANJ DIST-MAINPURI', 'MAINPURI', 'Uttar Pradesh', '205001', '9719855072', 'gsm', '', 'ATULBHADAURIA13@GMAIL.COM', 'By Courier', 'MARGSHREE', 'MOTHER', 'VILL-SRANGARPUR POST-KARIMGANJ DIST-MAINPURI', '0000-00-00', 'AA', 'A', 'AA', 'AA', 'AA', '2512380914', '123456', 'What is your pet name?', 'NEMA', '412380914'),
('2512380914', 'A', 'Mr. NEM SINGH', 'S/O AMAR SINGH', '1990-07-10', 'Unmarried', 'Indian', 'VILL-SRANGARPUR POST-KARIMGANJ DIST-MAINPURI', 'VILL-SRANGARPUR POST-KARIMGANJ DIST-MAINPURI', 'MAINPURI', 'Uttar Pradesh', '205001', '9719972035', 'gsm', '', 'ATULBHADAURIA13@GMAIL.COM', 'By Courier', 'AMAR SINGH', 'FATHER', 'VILL-SRANGARPUR POST-KARIMGANJ DIST-MAINPURI', '0000-00-00', 'C.B.I.', '32476', 'MAINPURI', 'A', 'A', '2512451515', '123456', 'What is your pet name?', 'NEM', '412451515'),
('2512451515', 'A', 'Mr. RAJEEV KUMAR', 'S/O JUGAL KISHORE', '0000-00-00', 'Unmarried', 'Indian', 'VILL-SINGARPUR POST-KARIMGANJ DIST-MAINPURI', 'VILL-SINGARPUR POST-KARIMGANJ DIST-MAINPURI', 'MAINPURI', 'Uttar Pradesh', '205001', '9719972035', 'gsm', '', 'ATULBHADAURIA13@GMAIL.COM', 'By Courier', 'JUGAL KISHORE', 'FATHER', 'VILL-SINGARPUR POST-KARIMGANJ DIST-MAINPURI', '0000-00-00', 'AA', 'AA', 'AA', 'AA', 'AA', '2512511216', '123456', 'What is your pet name?', 'RAJEEV', '512511216'),
('151829258', 'B', 'Mr. RATAN KUMAR', 'S/O GAYAPRASAD', '0000-00-00', 'Unmarried', 'Indian', 'VILL-PRAGPUR POST-GARIYA (CHHINKAURA) DIST-MAINPURI', 'VILL-PRAGPUR POST-GARIYA (CHHINKAURA) DIST-MAINPURI', 'MAINPURI', 'Uttar Pradesh', '205001', '9719691242', 'gsm', '', 'ATULBHADAURIA13@GMAIL.COM', 'By Courier', 'GAYAPRASAD', 'FATHER', 'AS ABOVE', '0000-00-00', 'A', 'A', 'A', 'A', 'A', '2513032717', '123456', 'What is your pet name?', 'RATAN', '1013032717'),
('2513032717', 'C', 'Mr. OMPAL SINGH', 'S/O SHRIPAL SINGH', '1988-10-10', 'Unmarried', 'Indian', 'VILL-PRAGPUR  POST-GARIYA(CHHINKAURA)\r\nDISTT. MAINPURI', 'VILL-PRAGPUR  POST-GARIYA(CHHINKAURA)\r\nDISTT. MAINPURI', 'MAINPURI', 'Uttar Pradesh', '205001', '9760401920', 'gsm', '', '25SARBESH06KUMAR76@GMAIL.COM', 'By Courier', 'SHRIPAL SINGH', 'FATHER', 'AS ABOVE', '0000-00-00', 'AA', 'AA', 'AA', 'AA', 'AA', '2513283618', '123456', 'What is your pet name?', 'OM', '913283618'),
('2512114213', 'A', 'Mr. SANJESH KUMAR', 'S/O YAD RAM', '1974-08-17', 'Unmarried', 'Indian', '6A,RAJA KA BAGH MAINPURI', '6A,RAJA KA BAGH MAINPURI', 'MAINPURI', 'Uttar Pradesh', '205001', '9410271309', 'gsm', '', 'SANJESH1974@ORKUT.COM', 'By Courier', 'RAM MURTI DEVI', 'MOTHER', 'AS ABOVE', '0000-00-00', 'PNB', '03480001002963', 'MAINPURI', 'CCZPS6508L', 'A', '2513513619', '123456', 'What is your pet name?', 'SANJESH', '613513619'),
('2513513619', 'A', 'Mr. NIKHIL SAXENA', 'S/O ANIL KUMAR SAXENA', '0000-00-00', 'Unmarried', 'Indian', '285 CHAUTHIYANA DEVI ROAD MAINPURI', 'AS ABOVE', 'MAINPURI', 'Uttar Pradesh', '205001', '9219744878', 'gsm', '', 'SAJESH1974@ORKUT.COM', 'By Courier', 'NEELAM SAXENA ', 'MOTHER', 'AS ABOVE', '0000-00-00', 'SBI', '30669861659', 'MAINPURI', 'CBSPS8804B', '', '2514060020', '123456', 'What is your pet name?', 'NIKHIL', '214060020'),
('2512380914', 'C', 'Mr. pramod kumar', 'S/O Horilal', '1991-06-24', 'Unmarried', 'Indian', 'Vill-N.miti post sugaun Dist Mainpuri', 'Vill-N.miti post sugaun Dist Mainpuri', 'Mainpuri', 'Uttar Pradesh', '205120', '9760275307', 'gsm', '', 'www.saurav@yahoo.com', 'Online', 'Horilal', 'FATHER', 'Vill-N.miti post sugaun Dist Mainpuri', '1951-04-20', 'aa', 'a', 'a', 'a', 'a', '3112374821', '123456', 'What make was your first car or bike?', 'maruti', '612374821'),
('2512380914', 'B', 'Md. pankaj kumar', 'S/O Ramsanehi lal', '0000-00-00', 'Unmarried', 'Indian', 'Vill-Harchandpur post-Nagla jula \r\nDist-Mainpuri', 'Vill-Harchandpur post-Nagla jula \r\nDist-Mainpuri', 'Mainpuri', 'Uttar Pradesh', '205001', '9917562030', 'gsm', '', 'www.anoop9760@yahoo.com', 'Online', 'Ramsanehi lal', 'FATHER', 'Vill-Harchandpur post-Nagla jula ', '1945-05-11', 'aa', 'aa', 'aa', 'aa', 'aa', '3112563522', '123456', 'What make was your first car or bike?', 'hero honda', '912563522');

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `login_id` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

