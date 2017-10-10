-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 08:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exprep`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(10) NOT NULL,
  `u_id` int(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `u_id`, `msg`, `u_name`, `pic`) VALUES
(1, 2, 'Hab', 'Dr shahrukh', ''),
(2, 2, 'Hab', 'Dr shahrukh', ''),
(3, 2, 'hehe', 'Dr shahrukh', '46639-20160516_125200.jpg'),
(4, 2, 'Can Any1 help????????????', 'Dr shahrukh', '6710-1481614638_688_hd-wallpapers-f.jpg'),
(5, 22, 'vhvhjv', 'Tabish Tanseef', '82773-apache_pb.png'),
(6, 5, 'hgyuufwe', 'shahrukh', '19568-apache_pb.gif');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
`m_id` int(100) NOT NULL,
  `u_id` int(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`m_id`, `u_id`, `msg`, `u_name`, `pic`) VALUES
(1, 2, 'GATE CS DAA', 'Dr shahrukh', '5776-20160516_131438.jpg'),
(2, 22, 'gate cs C++', 'Tabish Tanseef', '86082-apache_pb.gif'),
(3, 5, 'hddh', 'shahrukh', '4924-apache_pb.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`u_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `email`, `password`) VALUES
(1, 'srk', 'srk@gmail.com', '123'),
(2, 'Dr shahrukh', 'dr@gmail.com', 'dr'),
(3, 'Dr shahrukh', 'dr@gmail.com', ''),
(4, 'Tabish', 'tabishtanseef@gmail.com', '123'),
(5, 'shahrukh', 'shahrukh@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `m_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `u_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
