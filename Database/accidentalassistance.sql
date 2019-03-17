-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 09:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accidentalassistance`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `BLDGRPID` int(11) NOT NULL,
  `BLDGRPLabel` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`BLDGRPID`, `BLDGRPLabel`) VALUES
(1, 'A+'),
(2, 'A-'),
(3, 'B+'),
(4, 'B-'),
(5, 'O+'),
(6, 'O-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `helper_info`
--

CREATE TABLE `helper_info` (
  `Contact_No` varchar(15) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Vehicle_Regno` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `helper_info`
--

INSERT INTO `helper_info` (`Contact_No`, `Name`, `Vehicle_Regno`) VALUES
('+917208577656', 'Adnan', 'MH04DR8815'),
('7208337372', 'name', NULL),
('7208337376', 'name', NULL),
('7208337377', 'name', NULL),
('8898112336', 'name', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `police_records`
--

CREATE TABLE `police_records` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `contact` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_records`
--

INSERT INTO `police_records` (`id`, `name`, `address`, `lat`, `lng`, `contact`) VALUES
(1, 'Panvel City Police Station', 'Nera Tehsildar office,sai nagar,old panvel,navi mumbai,410206', 18.989401, 73.117516, '+917208577656'),
(2, 'Khandeshwar Police Station', 'Sector -8,Khanda colony,greater khanda,navi mumbai,410206', 19.008060, 73.097153, '+917208577656'),
(3, 'Kharghar Police Station', 'Sector 7,near hotel royal tulip,kharghar,navi mumbai,410210', 19.050831, 73.071892, '+917208577656'),
(4, 'CBD Belapur Police Station', 'C-6/4,sakaram patil marg,sector 1A,Navi Mumbai,400614.', 19.020660, 73.040787, '+917208577656'),
(5, 'Kurla Police Station', 'CST Road,LBS Road,kapadia nagar,kurla,mumbai,400070', 58.685730, 25.668850, '+917208577656'),
(6, 'mumbra police station', 'mumbai pune road,Dr.syedna burhanuddin marg,mumbra,thane,400612', 19.147739, 73.041008, '+917208577656'),
(7, 'Shivaji Park Police Station', 'Ram Nivas Building,ram maruti road,dadar west,400028', 19.021324, 72.842415, '+917208577656'),
(8, 'Bhiwandi Police Staion', '170,kumbhar ali road,kumbhar ali mandi,bhiwandi,421302', 19.281256, 73.048294, '+917208577656'),
(9, 'Bandra Police Station', '577,SV Road,Bandra west,mumbai,400050', 19.060692, 72.836250, '+917208577656'),
(10, 'Marine Drive Police Station', 'Dinshaw Vaccha Road,behind yashodhan bldg,in front of C.C.I Clb,mumbai,400020', -35.032330, 117.910103, '+917208577656');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Fname` char(50) NOT NULL,
  `Mname` char(50) DEFAULT NULL,
  `Lname` char(50) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(3) NOT NULL,
  `AdharNo` varchar(50) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Address` text NOT NULL,
  `User_Image` text NOT NULL,
  `BLDGRPID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`, `Fname`, `Mname`, `Lname`, `DOB`, `Age`, `AdharNo`, `Contact`, `Address`, `User_Image`, `BLDGRPID`) VALUES
('shadabsk', 'S742322', 'Shadab', 'Murad', 'Shaikh', '1998-11-12', 20, '242819272445', '+919892327169', '2/18, Maruti chawl, kalina, shastrinagar, santacruz (E), Mum-29', 'Something', 3),
('shadabsk1', '123', 'shadab', 'shadabsk', 'kkk', '1998-11-12', 21, '242819272443', '9892327168', 'kalina', 'Images/User/shadabsk1/shadabsk1_16-03-19.png', 7),
('shadabsk12', '1234', 'khan', 'mohd', 'rehan', '1992-11-12', 27, '242819272446', '7506455712', 'kalina', 'Images/User/shadabsk12/shadabsk12_16-03-19.png', 5),
('shadabsk123', 'S8898112336k@f', 'Shadab', 'murad', 'shaikh', '1998-11-12', 21, '242819272441', '8898112335', 'kalina', 'Images/User/shadabsk123/shadabsk123_16-03-19.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `Vehicle_Regno` varchar(15) NOT NULL,
  `Emergency_Fname1` char(50) NOT NULL,
  `Emergency_Mname1` char(50) DEFAULT NULL,
  `Emergency_Lname1` char(50) DEFAULT NULL,
  `Emergency_Contact1` varchar(45) NOT NULL,
  `Emergency_FName2` char(50) DEFAULT NULL,
  `Emergency_Mname2` char(50) DEFAULT NULL,
  `Emergency_Lname2` char(50) DEFAULT NULL,
  `Emergency_Contact2` varchar(15) DEFAULT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`Vehicle_Regno`, `Emergency_Fname1`, `Emergency_Mname1`, `Emergency_Lname1`, `Emergency_Contact1`, `Emergency_FName2`, `Emergency_Mname2`, `Emergency_Lname2`, `Emergency_Contact2`, `Username`) VALUES
('MH04DR8814', 'Rehan', 'noorul', 'haqq', '7208577414', 'adnan', 'noorul', 'khan', '7208455123', 'shadabsk123'),
('MH04DR8815', 'Akbar', NULL, 'Shaikh', '+919664355401', NULL, NULL, NULL, NULL, 'shadabsk'),
('MH04DR8816', 'kk', 'kk', 'kk', '7506455123', 'kk', 'kk', 'kk', '7506455321', 'shadabsk12'),
('MH04JF9956', 'shadab', 'shadab', 'shadab', '7506455707', 'shadab', 'shadab', 'shadab', '7506455123', 'shadabsk1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`BLDGRPID`),
  ADD UNIQUE KEY `BLDGRPID_UNIQUE` (`BLDGRPID`);

--
-- Indexes for table `helper_info`
--
ALTER TABLE `helper_info`
  ADD PRIMARY KEY (`Contact_No`),
  ADD KEY `fk_Helper_AnonymInfo_User_Reg1_idx` (`Vehicle_Regno`);

--
-- Indexes for table `police_records`
--
ALTER TABLE `police_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Vehicle_Regno_UNIQUE` (`Username`),
  ADD UNIQUE KEY `AdharNo_UNIQUE` (`AdharNo`),
  ADD UNIQUE KEY `Contact_UNIQUE` (`Contact`),
  ADD KEY `fk_User_Reg_BloodGroup_idx` (`BLDGRPID`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`Vehicle_Regno`),
  ADD UNIQUE KEY `Vehicle_Regno_UNIQUE` (`Vehicle_Regno`),
  ADD UNIQUE KEY `Emergency_Contact1_UNIQUE` (`Emergency_Contact1`),
  ADD UNIQUE KEY `Emergency_Contact2_UNIQUE` (`Emergency_Contact2`),
  ADD KEY `fk_User_Reg_Users1_idx` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `police_records`
--
ALTER TABLE `police_records`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `helper_info`
--
ALTER TABLE `helper_info`
  ADD CONSTRAINT `fk_Helper_AnonymInfo_User_Reg1` FOREIGN KEY (`Vehicle_Regno`) REFERENCES `user_reg` (`Vehicle_Regno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_User_Reg_BloodGroup` FOREIGN KEY (`BLDGRPID`) REFERENCES `bloodgroup` (`BLDGRPID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD CONSTRAINT `fk_User_Reg_Users1` FOREIGN KEY (`Username`) REFERENCES `users` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
