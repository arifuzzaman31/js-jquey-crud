-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 02:19 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` tinytext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `email`, `dob`, `contact`, `city`, `state`, `zip`, `gender`, `status`, `create_at`) VALUES
(2, 'farhan', 'ahmed', 'farhan@gmiail.com', '2019-09-12', '548565231', 'dhaka', 'Bangladesh', '3039', 'male', '1', '2019-09-29 06:01:18'),
(3, 'Naznin', 'jahan', 'jahan@gmail.com', '2019-09-06', '5879641', 'ctg', 'BD', '302', 'female', '1', '2019-10-02 09:29:06'),
(4, 'Naz', 'zum', 'zum@gmail.com', '2019-09-19', '587964185', 'br', 'BD', '3060', 'female', '1', '2019-09-24 08:09:17'),
(5, 'jahan', 'ahmed', 'ahmed@gmail.com', '16-9-1991', '15486547', 'mumbhai', 'Ind', '5840', 'male', '1', '2019-09-24 10:53:04'),
(6, 'alex', 'Nixus', 'men@gmail.com', '2-7-1965', '45879651', 'kingdom', 'Amirat', '58402', 'female', '1', '2019-09-29 06:00:23'),
(7, 'adam', 'grass', 'grass@fgfg.con', '2019-09-11', '0166685449', 'Fra', 'fghgh', '6546', 'female', '1', '2019-09-25 08:03:01'),
(8, 'Zisan', 'zaman', 'zisan@exap.com', '2019-07-17', '45987123', 'comilla', 'BD', '2845', 'male', '1', '2019-09-25 04:24:43'),
(9, 'Nim', 'buzz', 'nim@gk.com', '2019-09-13', '45987615', 'feni', 'Bangladesh', '3031', 'male', '1', '2019-10-02 11:18:44'),
(10, 'Nimber', 'Minz', 'minz@dfdf.fh', '2019-09-12', '0166685449', 'Noa', 'Noa', '6985', 'female', '1', '2019-10-02 11:19:03'),
(11, 'Pello', 'Dimb', 'dimb@email.co', '2019-09-12', '01666854495', 'Dubai', 'Soudi Arab', '6578', 'female', '1', '2019-09-25 10:24:05'),
(12, 'shezan', 'jush', 'jush@examp.com', '2019-09-13', '0166685458', 'dhaka', 'IND', '65464', 'female', '1', '2019-09-25 10:28:03'),
(13, 'taazri', 'fansee', 'fansee@gmail.com', '2019-09-12', '0165585449', 'Syllet', 'bang', '6542', 'female', '1', '2019-09-25 10:29:19'),
(14, 'Azad', 'Alim', 'alim@exam.co', '2019-04-15', '65987412', 'Hipo', 'Hippo', '6987', 'male', '1', '2019-09-25 10:37:47'),
(15, 'dhdfhdfg', 'dfgdfg', 'dfhdfh@fgfg.con', '2019-09-11', '0166685449', 'gkjkugkg', 'IND', '6546', 'female', '1', '2019-09-28 09:23:12'),
(16, 'dhdfh', 'dfgdfg', 'dfhdfh@fgfg.con', '2019-09-10', '136957814', 'gkjkugkg', 'fghgh', '6546', 'female', '1', '2019-10-02 11:17:12'),
(17, 'Abir', 'zaman', 'abir@gmail.com', '2019-09-18', '0166685455', 'Dhaka', 'BD', '6548', 'male', '1', '2019-09-29 05:21:07'),
(18, 'Sihab', 'uddin', 'uddin@gmail.com', '2019-09-19', '456325897', 'Feni', 'BD', '3032', 'male', '1', '2019-09-29 06:17:48'),
(19, 'sdgdfg', 'jahana', 'dfhdfh@fgfg.con', '2019-09-26', '0165445449', 'Slt', 'Amirat', '6558', 'female', '1', '2019-09-29 08:26:24'),
(20, 'shezan', 'dfgdfg', 'dfhdfh@fgfg.con', '2019-09-10', '0166685449', 'gkjkugkg', 'fghgh', '6546', 'female', '1', '2019-09-29 08:29:43'),
(21, 'Nayeem', 'Islam', 'nayeem@example.com', '2019-09-08', '01584698752', 'Barishal', 'Barishal', '6478', 'male', '1', '2019-09-30 05:29:22'),
(22, 'Islam', 'jahana', 'fansee@gmail.com', '15-6-1986', '698741258', 'mumbai', 'IND', '369', 'female', '1', '2019-09-30 06:34:52'),
(27, 'shezan', 'jush', 'fansee@gmail.com', '2019-09-08', '0166685449', 'Syllet', 'bang', '369', 'female', '1', '2019-09-30 11:15:35'),
(30, 'taazri', 'jush', 'fansee@gmail.com', '2019-09-28', '0166685789', 'Syllet', 'Amirat', '369', 'female', '1', '2019-09-30 11:31:21'),
(32, 'new', 'Data', 'test@gmial.com', '2019-10-27', '0166685449', 'dhaka', 'bang', '5498', 'female', '1', '2019-10-01 11:15:42'),
(34, 'shezan', 'jahanaa', 'fansee@gmail.com', '2019-10-09', '0166685449', 'bn', 'bd', '369', 'female', '1', '2019-10-02 06:01:13'),
(36, 'taazri', 'jahana', 'dfhdfh@fgf.bi', '2019-10-01', '0145698257', 'bn', 'IND', '369', 'female', '1', '2019-10-02 11:16:42'),
(47, 'alex', 'jahana', 'dfhdfh@fgfg.con', '2019-10-21', '0166685449', 'gkjkugkg', 'bang', '369', 'female', '1', '2019-10-02 08:15:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
