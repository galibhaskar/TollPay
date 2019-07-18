-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 17, 2019 at 07:09 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@tollpay.com', 'admin'),
('bhaskar@tollpay.com', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `custompay`
--

CREATE TABLE `custompay` (
  `bid` varchar(15) NOT NULL,
  `tid` int(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `vno` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custompay`
--

INSERT INTO `custompay` (`bid`, `tid`, `type`, `vno`, `status`) VALUES
('01AC5UM94D', 2, 'Car/Jeep/Van', 'AP5 7887', 'reported'),
('0NK67BDPI2', 1, '4 to 6 axle', 'ap 37 cc 352', 'reported'),
('8VCYK734ZH', 1, '7 or more axle', 'Ap5 AB 2854', 'reported'),
('A1ER954TI9', 1, 'Bus/Truck', 'AP5 CK 1234', 'Not reported'),
('LPVTJEFKJ7', 1, 'upto 3 axle', 'ap 37 cc 352', 'Not reported'),
('P486JT88ZX', 2, 'Car/Jeep/Van', 'ap5 CK 1234', 'reported'),
('ZEVZQIWSLV', 2, 'HCM/EME', 'ap 37 cc 352', 'reported'),
('ZNZ933JC99', 1, 'LCV', 'AP5 7887', 'Not reported');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `tid` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  `suggestions` varchar(60) NOT NULL,
  `complaints` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` int(10) NOT NULL,
  `date` int(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `sal` int(10) NOT NULL,
  `bcode` int(5) NOT NULL,
  `shift` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `name`, `email`, `phno`, `date`, `state`, `sal`, `bcode`, `shift`) VALUES
(3, 'bhaskar', 'hackerbest.in@gmail.com', 1234567890, 2018, 'ap', 159648, 2, 'Night'),
(4, 'bhaskar', 'hackerbest.in@gmail.com', 12143314, 2018, 'ap', 159648, 2, 'Night'),
(5, 'govind', 'bgovin.99@gmail.com', 1234567890, 1212, 'ap', 100000, 3, 'Day'),
(6, 'vamsi', 'vamsi@gmail.com', 1234567890, 1999, 'ap', 50000, 2, 'Day'),
(7, 'haleem', 'haleem@tollpay.com', 2147483647, 1999, 'ap', 50000, 3, 'Day'),
(8, 'abcd', 'abcd@tollpay.com', 987654321, 1999, 'ap', 50000, 1, 'Day');

-- --------------------------------------------------------

--
-- Table structure for table `tolldata`
--

CREATE TABLE `tolldata` (
  `tid` int(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `tollname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `Car/Jeep/Van` int(5) NOT NULL,
  `rCar/Jeep/Van` int(5) NOT NULL,
  `dCar/Jeep/Van` int(5) NOT NULL,
  `mCar/Jeep/Van` int(5) NOT NULL,
  `LCV` int(5) NOT NULL,
  `rLCV` int(11) NOT NULL,
  `dLCV` int(11) NOT NULL,
  `mLCV` int(11) NOT NULL,
  `Bus/Truck` int(5) NOT NULL,
  `rBus/Truck` int(5) NOT NULL,
  `dBus/Truck` int(5) NOT NULL,
  `mBus/Truck` int(5) NOT NULL,
  `upto 3 axle` int(5) NOT NULL,
  `rupto 3 axle` int(5) NOT NULL,
  `dupto 3 axle` int(5) NOT NULL,
  `mupto 3 axle` int(5) NOT NULL,
  `4 to 6 axle` int(5) NOT NULL,
  `r4 to 6 axle` int(5) NOT NULL,
  `d4 to 6 axle` int(5) NOT NULL,
  `m4 to 6 axle` int(5) NOT NULL,
  `7 or more axle` int(5) NOT NULL,
  `r7 or more axle` int(5) NOT NULL,
  `d7 or more axle` int(5) NOT NULL,
  `m7 or more axle` int(5) NOT NULL,
  `HCM/EME` int(5) NOT NULL,
  `rHCM/EME` int(5) NOT NULL,
  `dHCM/EME` int(5) NOT NULL,
  `mHCM/EME` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tolldata`
--

INSERT INTO `tolldata` (`tid`, `state`, `tollname`, `city`, `Car/Jeep/Van`, `rCar/Jeep/Van`, `dCar/Jeep/Van`, `mCar/Jeep/Van`, `LCV`, `rLCV`, `dLCV`, `mLCV`, `Bus/Truck`, `rBus/Truck`, `dBus/Truck`, `mBus/Truck`, `upto 3 axle`, `rupto 3 axle`, `dupto 3 axle`, `mupto 3 axle`, `4 to 6 axle`, `r4 to 6 axle`, `d4 to 6 axle`, `m4 to 6 axle`, `7 or more axle`, `r7 or more axle`, `d7 or more axle`, `m7 or more axle`, `HCM/EME`, `rHCM/EME`, `dHCM/EME`, `mHCM/EME`) VALUES
(1, 'andhrapradesh', 'eetakota', 'ravulpalem', 20, 40, 200, 900, 40, 70, 130, 2100, 60, 110, 760, 3300, 70, 150, 1040, 4500, 100, 190, 1320, 5700, 120, 230, 1600, 6900, 150, 300, 2000, 9000),
(2, 'telangana', 'ORR', 'hyderabad', 20, 40, 200, 900, 40, 70, 130, 2100, 60, 110, 760, 3300, 70, 150, 1040, 4500, 100, 190, 1320, 5700, 120, 230, 1600, 6900, 150, 300, 2000, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `First name` varchar(30) NOT NULL,
  `Last name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `Phone number` int(10) NOT NULL,
  `sque` varchar(30) NOT NULL,
  `ans` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First name`, `Last name`, `Password`, `emailid`, `Phone number`, `sque`, `ans`) VALUES
('gali', 'bhaskar', 'abcd', 'bhaskar@gmail.com', 1234567890, 'name of your clg?', 'srkr'),
('vamso', 'gosala', 'vamsssi', 'vamsi@tollpay.com', 1234567890, '', ''),
('user1', 'tollpay', 'user1', 'user1@tollpay.com', 1234567890, '', ''),
('jeevan', 'phani', '12345', 'jp@tollpay.com', 1234567890, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `custompay`
--
ALTER TABLE `custompay`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tolldata`
--
ALTER TABLE `tolldata`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tolldata`
--
ALTER TABLE `tolldata`
  MODIFY `tid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
