-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2017 at 05:57 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reschurch`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(100) NOT NULL,
  `event` varchar(50) NOT NULL,
  `msg` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `event`, `msg`, `date`, `time`) VALUES
(2, 'Service', 'Sunday 8am', '2017-02-27', '2017-02-27 17:02:18'),
(3, 'Hearts Day', 'The event will be on February 16, 2017 at Julugan ', '2017-02-28', '2017-02-28 09:04:35'),
(4, 'Sunday Service', '8:30 am . Chosen to be bless. Attend our sunday service and for youth, please attend 3:00 pm for our youth activity at Julugan Resurrection Church.Hope you will be there. Godbless ! ', '2017-02-28', '2017-02-28 09:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `funeral`
--

CREATE TABLE `funeral` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `add` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `dname` varchar(200) NOT NULL,
  `dlname` varchar(200) NOT NULL,
  `relationship` varchar(200) NOT NULL,
  `stories` varchar(200) NOT NULL,
  `scripture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_level` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_level`, `fname`, `lname`) VALUES
(131, 'Admin', '1234567890', 1, 'Wendy', 'Parot'),
(132, 'Member', '1234567890', 2, 'asdf', 'asdf'),
(133, 'Dyn', '1234567890', 2, 'Dyn', 'Torres');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `gname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `add` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `blname` varchar(200) NOT NULL,
  `badd` varchar(200) NOT NULL,
  `bemail` varchar(200) NOT NULL,
  `bcontact` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `reception` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
