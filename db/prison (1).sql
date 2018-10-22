-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 08:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicalinfo`
--

CREATE TABLE `medicalinfo` (
  `id` int(255) NOT NULL,
  `patient_name` text NOT NULL,
  `patient_occupation` text NOT NULL,
  `allergies` text NOT NULL,
  `previous_visit` date NOT NULL,
  `previous_diagnosis` text NOT NULL,
  `weight` varchar(255) NOT NULL,
  `previous_prescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalinfo`
--

INSERT INTO `medicalinfo` (`id`, `patient_name`, `patient_occupation`, `allergies`, `previous_visit`, `previous_diagnosis`, `weight`, `previous_prescription`) VALUES
(1, 'Gal Gaddot', 'Employee', 'none', '2018-09-04', 'N/A', '55kgs', 'antibiotics'),
(2, 'Thomas', 'Warden', 'NONE', '2018-09-05', 'Cold', '64kgs', 'Flu Gone');

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `prisonerid` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `crime` varchar(255) NOT NULL,
  `courtdate` date NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `prisonerpic` varchar(255) NOT NULL,
  `nextofkin` varchar(255) NOT NULL,
  `nextofkinphonenumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `staffid` int(10) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `enkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`staffid`, `fullname`, `occupation`, `email`, `phonenumber`, `password`, `profilepicture`, `gender`, `enkey`) VALUES
(9, 'rosanne', 'Doctor', 'rose@gmail.com', 2147483647, '937a42fb67c48416e422fa654a6ab3eb', '', 'Female', '41c10227ec250c5dea517813bf584b13'),
(10, 'odiero rosanne', 'Registrar', 'rosa@gmail.com', 719194390, 'fcea920f7412b5da7be0cf42b8c93759', '', 'Female', '26d0ac77286c398f4a87a320279c2d5c'),
(11, 'Rosanne Odiero', 'registrar', 'rosanneodiero9@gmail.com', 748153055, 'ec21ed1d2750c966144224b4a511ce0c', '', 'Female', '371beeb41f251f2b1e5cb1fb9ef67bd6'),
(12, 'Radina Elizabeth', 'Registrar', 'radina@gmail.com', 712345678, '25d55ad283aa400af464c76d713c07ad', '', 'Female', 'ecbf9fa3c7cbcd4a84b026702438d8e4'),
(13, 'Thomas Mwangi', 'Registrar', 'thomas@gmail.com', 719194390, '937a42fb67c48416e422fa654a6ab3eb', '', 'Male', '8cabf4849addca0cfe63dc3e224d3d35'),
(14, 'tom', 'Doctor', 'tom@gmail.com', 124423, '81dc9bdb52d04dc20036dbd8313ed055', 'giftworld.PNG', 'Male', '62cb1a4966ca2b3246f3d3f4a2068d9a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`prisonerid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`staffid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicalinfo`
--
ALTER TABLE `medicalinfo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prisoners`
--
ALTER TABLE `prisoners`
  MODIFY `prisonerid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `staffid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
