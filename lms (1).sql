-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 08:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `pic`) VALUES
(1, 'nishi20', 'nishi', 'a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'Lets Us C', 'Y.Kanetkhar', '7', 'Available', 5, 'IT'),
(2, 'Discrete Mathematics ', 'Cormen', '8', 'Available', 11, 'Computer'),
(3, 'Digital Electronics', 'Anil.K', '8', 'Available', 5, 'Electronics'),
(4, 'Fundamentals of Thermodynamics', 'Claus Borgnakke', '12', 'Available', 10, 'Mechanical'),
(5, 'Basic Electrical Engineering', 'C L Wadhwa.', '6', 'Available', 8, 'Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(10, 'Good E-library System for the students');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `bid`, `returned`, `day`, `fine`, `status`) VALUES
('hasti15', 2, '2020-05-17', 0, 0, 'not paid'),
('hasti15', 2, '2020-05-17', 0, 0, 'not paid'),
('vatsal12', 1, '2020-05-17', 0, 0, 'not paid'),
('vatsal12', 3, '2020-05-17', 2, 4, 'not paid'),
('anmol26', 5, '2020-05-17', 2, 4, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `return`) VALUES
('hasti15', 4, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-05-12', '2020-05-19'),
('hasti15', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-05-13', '2020-05-20'),
('vatsal12', 1, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-05-13', '2020-05-20'),
('vatsal12', 3, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-05-13', '2020-05-15'),
('anmol26', 5, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-05-13', '2020-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `middle` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `middle`, `last`, `username`, `password`, `roll`, `email`, `pic`) VALUES
('Anmol', 'S', 'Shah', 'anmol26', 'anmol26', 35, 'abc@gmail.com', 'p.jpg'),
('Hasti', 'D', 'Shah', 'hasti15', 'hasti15', 43, 'hastids@gmail.com', 'p.jpg'),
('Vatsal', 'D', 'Shah', 'vatsal12', 'vatsal', 1811052, 'vatsal12@somaiya.edu', 'p.jpg'),
('Rohan', 'J', 'Shah', 'rohan56', 'Rohan@23', 76, 'rohanshah76@gmail.com', 'p.jpg'),
('Harsh', 'G', 'Gupta', 'harsh42', 'harsh@42', 40, 'harsh64@yahoo.com', 'p.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
