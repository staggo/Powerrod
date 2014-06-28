-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2014 at 05:37 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE IF NOT EXISTS `calls` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_call_id` varchar(20) DEFAULT NULL,
  `customer_id` varchar(10) DEFAULT NULL,
  `customer_contact` varchar(100) DEFAULT NULL,
  `customer_telno` varchar(20) DEFAULT NULL,
  `logged_date` datetime DEFAULT NULL,
  `logged_by` varchar(5) DEFAULT NULL,
  `site_contact` varchar(100) DEFAULT NULL,
  `site_address` text,
  `site_postcode` varchar(10) DEFAULT NULL,
  `site_telno` varchar(20) DEFAULT NULL,
  `description` text,
  `engineer` int(11) NOT NULL,
  `invoice_no` varchar(10) NOT NULL,
  `last_updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `customer_call_id`, `customer_id`, `customer_contact`, `customer_telno`, `logged_date`, `logged_by`, `site_contact`, `site_address`, `site_postcode`, `site_telno`, `description`, `engineer`, `invoice_no`, `last_updated_date`, `last_updated_user`) VALUES
(81, '0', '1', NULL, '0', '2014-05-22 15:22:26', '0', 'Mr Site Guy', '32 Pembroke Avenue\r\nLadbroke Grove', '0', NULL, NULL, 0, '', '0000-00-00 00:00:00', 0),
(82, 'call#', '1', NULL, '0', '2014-05-22 15:30:56', '0', 'scon', 'sadd', 'zip', NULL, NULL, 0, '', '2014-05-22 13:30:56', 2),
(83, 'w1234', '1', NULL, '0', '2014-05-22 15:48:53', '2', 'Mr Site Guy', '33 Pembroke Gardens', 'W10 1AB', NULL, NULL, 0, '', '2014-05-22 13:48:53', 2),
(84, '0', '1', NULL, '0', '2014-05-22 15:22:26', '0', 'Mr Site Guy', '32 Pembroke Gardens', '0', NULL, NULL, 0, '', '0000-00-00 00:00:00', 0),
(85, NULL, '1', NULL, '0', '2014-05-22 16:15:11', '1', 'qweqwe', 'qweqwe', 'qweqwe', NULL, NULL, 0, 'qqwewqe', '2014-05-22 14:15:11', 2),
(86, 'r123456', '1', NULL, '0', '2014-05-22 16:27:44', '3', 'Mr Site Guy', 'Twickenham Stadium\r\n', 'TW2 7BA', NULL, 'Blocked sink and drain', 0, '09876', '2014-05-22 14:27:44', 2),
(87, NULL, '1', NULL, '0', '2014-05-22 16:15:11', '1', 'qweqwe', 'qweqwe', 'TW2 7BA', NULL, NULL, 0, '123456', '2014-05-22 14:15:11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(600) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `tel_no` varchar(30) NOT NULL,
  `fax_no` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `name`, `address`, `postcode`, `tel_no`, `fax_no`, `email`, `active`) VALUES
(1, 1, 'Customer Name', '999 Letsbe Avenue', 'W7 1AU', '07738338493', '07738338493', 'kingstaggo@yahoo.com', 1),
(2, 2, 'Customer Name', '999 Letsbe Avenue', 'W7 1AU', '07738338493', '07738338493', 'kingstaggo@yahoo.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `engineers`
--

CREATE TABLE IF NOT EXISTS `engineers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `tel_no` varchar(20) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `engineers`
--

INSERT INTO `engineers` (`id`, `name`, `tel_no`, `active`) VALUES
(1, 'Miro Surname', '07738338493', 1),
(2, 'Dean Surname', '02088134173', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `call_id` int(11) NOT NULL,
  `logged_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_by` int(11) NOT NULL,
  `description` text NOT NULL,
  `event_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `call_id`, `logged_date`, `logged_by`, `description`, `event_type`) VALUES
(1, 46, '2014-05-21 10:24:56', 3, 'Here''s what we did', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `active`) VALUES
(1, 'dean', 'Dean', 'Staggs', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'kingstaggo@yahoo.com', 1),
(2, 'Darren', 'Darren', 'Hepburn', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'darren@powerrod.com', 1),
(3, 'Angie', 'Angie', 'Rayment', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'angie@powerrod.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
