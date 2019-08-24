-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2019 at 05:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `serialno` int(5) NOT NULL,
  `eid` int(5) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `percentage` int(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bonus`
--

INSERT INTO `bonus` (`serialno`, `eid`, `ename`, `type`, `reason`, `percentage`, `status`, `date`) VALUES
(1, 2, 'jamir', 'supervisor', 'eid', 0, 'accepted', '2019-08-08'),
(2, 2, 'jamir', 'supervisor', 'eid', 0, 'pending', '2019-08-08'),
(3, 3, 'shuvo', 'supervisor', 'eid', 0, 'accepted', '2019-08-08'),
(4, 38, 'shuvo', 'supervisor', 'eid', 0, 'accepted', '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `cid` int(5) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cowner` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`cid`, `cname`, `cowner`, `contact`, `address`, `details`, `balance`) VALUES
(1, 'SUANTOR', 'Aiub', '0177744', 'Kuril, Bishoroad', 'qwerty', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `eid` int(5) NOT NULL,
  `purpose` varchar(30) NOT NULL,
  `details` varchar(50) NOT NULL,
  `amount` int(30) NOT NULL,
  `edate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`eid`, `purpose`, `details`, `amount`, `edate`) VALUES
(1, 'salary', 'payment', 50000, '2019-08-08'),
(2, 'salary', 'payment', 50000, '2019-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `labours`
--

CREATE TABLE `labours` (
  `lid` int(5) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `laddress` varchar(30) NOT NULL,
  `lcontact` varchar(30) NOT NULL,
  `expertise` varchar(30) NOT NULL,
  `salary` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labours`
--

INSERT INTO `labours` (`lid`, `lname`, `laddress`, `lcontact`, `expertise`, `salary`) VALUES
(1, 'jamir', 'banani', '01823456789', 'cleaner', 8000),
(2, 'jamir', 'banani', '01823456789', 'cleaner', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `employee` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL,
  `action_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `pid` int(5) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `client` varchar(30) NOT NULL,
  `tcost` int(20) NOT NULL,
  `paid` int(30) NOT NULL,
  `ecost` int(5) NOT NULL,
  `details` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`pid`, `pname`, `client`, `tcost`, `paid`, `ecost`, `details`, `status`) VALUES
(2, 'Bangla Bari', 'qwee', 2000, 100, 0, 'qwe', 'completed'),
(3, 'Project1', 'asd', 10000, 3000, 0, 'qwertyuiop', 'running'),
(5, 'Project3', 'jamir01', 10000, 3000, 7000, 'aqwsdf', 'running');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `sid` int(5) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `cowner` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `tbuy` int(30) NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`sid`, `sname`, `cowner`, `address`, `contact`, `details`, `tbuy`, `balance`) VALUES
(1, 'shuvo', 'Aiub', 'Kuril, Bishoroad', '01777403766', 'laptops', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `eid` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `esalary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`eid`, `email`, `password`, `ename`, `address`, `contact`, `type`, `esalary`) VALUES
(1, 'rhshuvo97@gmail.com', '1234', 'Romynul Shuvo', 'Mohammadpur, Dhaka', '01766881646', 'admin', 120001),
(2, 'wahidnj@gmail.com', '123', 'wahid', 'Kuril, Bishoroad', '01777403766', 'Manager', 82000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`serialno`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `labours`
--
ALTER TABLE `labours`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bonus`
--
ALTER TABLE `bonus`
  MODIFY `serialno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `labours`
--
ALTER TABLE `labours`
  MODIFY `lid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `eid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
