-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2021 at 04:34 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_exam`
--

CREATE TABLE `tb_exam` (
  `id` int(100) NOT NULL,
  `exam_title` varchar(50) NOT NULL,
  `exam_datetime` date NOT NULL,
  `duration` int(5) NOT NULL,
  `total_question` int(5) NOT NULL,
  `marks_per_right_answer` int(5) NOT NULL,
  `created_on` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `exam_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_exam`
--

INSERT INTO `tb_exam` (`id`, `exam_title`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
(2, 'Bài thi 1', '2021-10-24', 120, 12, 1, '2021-10-23', 'penđing', 'EX1234'),
(3, 'Bài thi 2', '2021-10-30', 120, 12, 2, '2021-10-22', 'Created', 'EX002'),
(4, 'Bài thi 3', '2021-10-29', 60, 30, 2, '2021-10-22', 'Started', 'EX0012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_exam`
--
ALTER TABLE `tb_exam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_exam`
--
ALTER TABLE `tb_exam`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
