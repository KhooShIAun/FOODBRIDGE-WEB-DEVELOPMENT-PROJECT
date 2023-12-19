-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2023 at 01:39 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foodbridge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE IF NOT EXISTS `admindetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `contactNum` int(11) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`id`, `user_name`, `pwd`, `name`, `dob`, `contactNum`, `gender`, `address`, `state`) VALUES
(25, 'nich.khoo@gmail.com', '123', 'Nicholas Khoo', '2003-04-23', 124101677, 'Male', 'Jalan Bukit Jambul, Bukit Jambul, 11900 Bayan Lepa', 'Penang'),
(18, 'jacklim@gmail.com', '123456789', 'Jack Lim', '2023-08-08', 124101677, 'Male', '3 Jalan Dartuk Keramat', 'Penang'),
(24, 'adam@gmail.com', '12345', 'Adam Lim', '2000-03-10', 192424944, 'Male', '3 Jalan Dartuk Keramat', 'Penang');

-- --------------------------------------------------------

--
-- Table structure for table `cashdonation`
--

CREATE TABLE IF NOT EXISTS `cashdonation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactNum` int(15) NOT NULL,
  `receipt` varbinary(1000) NOT NULL,
  `foodBankLocation` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `cashdonation`
--

INSERT INTO `cashdonation` (`id`, `firstName`, `lastName`, `email`, `contactNum`, `receipt`, `foodBankLocation`, `date`) VALUES
(53, 'Jack', 'Lim', 'jacklim@gmail.com', 122201611, 'FoodBridge.png', 'FoodBridge Penang Centre', '2023-06-29'),
(52, 'Marcus', 'Lee', 'marcus@gmail.com', 124301633, 'FoodBridge.png', 'FoodBridge Penang Centre', '2023-06-25'),
(55, 'Juergen', 'Lee', 'juergen@gmail.com', 124444444, '778bf1fa-e29c-4a7a-89de-febb6c69d631.jpg', 'Omega Food Bank', '2023-08-22'),
(54, 'Adam', 'Lim', 'adam@gmail.com', 192424944, 'ab67616d0000b27342cfba30f662b993849b1233.jpeg', 'Munch Bunker Food Bank', '2023-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstName`, `lastName`, `feedback`) VALUES
(10, 'Marcus', 'Lee', 'I love using this website to do research on foodbanks so that i can find a foodbank that will is close to my place for them to pickup my food donation that i have offer!!! :)'),
(9, 'Jack', 'Lim', 'Such a good Website design with it simplicity beautiful design and easy to use when donating cash and foods to the people in need '),
(11, 'Loke', 'Jia Ler', '\r\n&#25105;&#21916;&#27426;&#36825;&#20010;&#32593;&#31449;!!!!!!!!!!!'),
(12, 'Adam', 'Lim', 'Best Website Design Ever!!!:) ');

-- --------------------------------------------------------

--
-- Table structure for table `foodbankdetails`
--

CREATE TABLE IF NOT EXISTS `foodbankdetails` (
  `foodBankName` varchar(100) NOT NULL,
  `bankAdrress` varchar(200) NOT NULL,
  `bankName` varchar(100) NOT NULL,
  `bankAccount` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactNum` int(25) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodbankdetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `fooddonation`
--

CREATE TABLE IF NOT EXISTS `fooddonation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pick_up_location` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `foodDescription` varchar(300) NOT NULL,
  `category` varchar(100) NOT NULL,
  `totalWeight` double NOT NULL,
  `collectionTime` time NOT NULL,
  `collectionDate` date NOT NULL,
  `foodBankLocation` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `fooddonation`
--

INSERT INTO `fooddonation` (`id`, `firstName`, `lastName`, `contact`, `email`, `pick_up_location`, `state`, `foodDescription`, `category`, `totalWeight`, `collectionTime`, `collectionDate`, `foodBankLocation`) VALUES
(101, 'Trevor', 'Tan', 126666666, 'trevor@gmail.com', '3 Jalan Ocidium, 48000, Kota Kemuning', 'Selangor', 'Chicken', 'protein', 50, '16:30:00', '2023-09-20', 'Omega Food Bank'),
(100, 'Juergen', 'Lee', 124444444, 'juergen@gmail.com', '3 Jalan Dartuk Keramat', 'Penang', 'Tomato', 'fruitsANDvegetables', 20, '12:27:00', '2023-09-09', 'FoodBridge Penang Centre');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
