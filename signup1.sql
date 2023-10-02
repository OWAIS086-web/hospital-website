-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 07:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup1`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Sr` int(50) NOT NULL,
  `AppointFor` varchar(50) NOT NULL,
  `Pname` varchar(50) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `date1` date NOT NULL,
  `time` time(6) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Sr`, `AppointFor`, `Pname`, `Doctor`, `Email`, `phone`, `date1`, `time`, `Message`) VALUES
(19, 'Neurosurgery', 'owais', 'Dr Malook', 'owais@gmail.com', 3222, '2019-12-05', '13:00:00.000000', 'Hello                        ');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Sr`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(1, 'danish', 'awais@gmail.com', 'danish', 321, 'danis khilji');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Sr` int(11) NOT NULL,
  `usertype` enum('Admin','Doctor','Patient') CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL DEFAULT 'Patient',
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `spe` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `pnumber` bigint(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Sr`, `usertype`, `name`, `fname`, `spe`, `dob`, `email`, `pnumber`, `password`, `cpassword`) VALUES
(1, 'Admin', 'Danish', 'Shamsuddin', '', '0000-00-00', 'danishkhilji112@gmail.com', 3120250915, 'MyAdmin', 'MyAdmin'),
(2, '', 'Awais', 'Dont Know', '', '0000-00-00', 'awais@gmail.com', 123456789, '123', '123'),
(7, '', 'Owais', 'niaz', '', '0000-00-00', 'owais@gmail.com', 111111, '111222', '111222'),
(8, '', 'Danish khilji', 'Shamsuddin', '', '0000-00-00', 'danishkhilji112@gmail.com', 22222, 'aaaaaa', 'aaaaaa'),
(9, 'Patient', 'Danish khilji', 'Shamsuddin', '', '0000-00-00', 'danishkhilji112@gmail.com', 22222, '121212', '121212'),
(11, 'Patient', 'ddd', 'aaa', '', '0000-00-00', 'awais@gmail.com', 111111, '111111', '111111'),
(12, '', 'Danish khilji', 'Shamsuddin', '', '0000-00-00', 'danishkhilji112@gmail.com', 3120250915, 'aaasss', 'aaasss'),
(14, 'Patient', 'Awais', 'Dont Know', '', '0000-00-00', 'awais@gmail.com', 21312, 'aaasss', 'aaasss'),
(17, 'Doctor', 'Danish khilji', 'Shamsuddin', 'ENT', '2019-12-13', 'danishkhilji112@gmail.com', 321, '12121212', '12121212'),
(18, '', 'Owais', 'Dont Know', '', '0000-00-00', 'owais@gmail.com', 111111, '123123', '123123'),
(19, 'Doctor', 'Awais', 'DontKnow', 'Neurosurgery', '2019-02-04', 'awais@gmail.com', 0, '112233', '112233'),
(20, '', 'Danish khilji', 'Shamsuddin', '', '0000-00-00', 'danishkhilji112@gmail.com', 3120250915, '111111', '111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Sr`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Sr` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `Sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
