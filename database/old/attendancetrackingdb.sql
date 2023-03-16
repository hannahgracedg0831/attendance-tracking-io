-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 04:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancetrackingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `backup_data`
--

CREATE TABLE `backup_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backup_data`
--

INSERT INTO `backup_data` (`id`, `name`, `date`) VALUES
(3, 'attendancetrackingdb-2022-04-04.sql', '2022-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `ID` int(11) NOT NULL,
  `SCHOOLID` varchar(250) NOT NULL,
  `TIMEIN` varchar(250) NOT NULL,
  `TIMEOUT` varchar(250) NOT NULL,
  `LOGDATE` varchar(250) NOT NULL,
  `STATUS` varchar(250) NOT NULL,
  `STAFF_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`ID`, `SCHOOLID`, `TIMEIN`, `TIMEOUT`, `LOGDATE`, `STATUS`, `STAFF_ID`) VALUES
(1, 'GT18-01', '08:09:55pm', '08:32:40pm', '2022-02-14', '1', '12345'),
(2, 'GT18-01', '08:32:33pm', '08:32:40pm', '2022-02-14', '1', '123'),
(3, 'GT18-09', '08:38:03pm', '08:38:10pm', '2022-02-14', '1', '123'),
(4, 'GT18-01', '02:25:30pm', '02:35:58pm', '2022-02-17', '1', 'GT18-0111'),
(5, 'GT18-01', '02:27:49pm', '02:35:58pm', '2022-02-17', '1', 'GT18-0111'),
(6, 'GT18-01', '02:29:53pm', '02:35:58pm', '2022-02-17', '1', 'GT18-0111'),
(7, 'GT18-01', '02:30:50pm', '02:35:58pm', '2022-02-17', '1', 'GT18-0111'),
(8, 'GT18-01', '02:32:58pm', '02:35:58pm', '2022-02-17', '1', ''),
(9, 'GT18-01', '02:34:42pm', '02:35:58pm', '2022-02-17', '1', 'GT18-0111'),
(10, 'GT18-01', '04:02:57pm', '', '2022-02-17', '0', 'GT18-0111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `log_id` int(11) NOT NULL,
  `logType` enum('In','Out','','') NOT NULL,
  `stuff_id` int(11) NOT NULL,
  `logdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(100) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `position` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `staff_id`, `fname`, `lname`, `mname`, `position`, `barangay`, `city`, `province`, `dob`, `sex`, `contact`, `email`, `photo`) VALUES
(1, '12345', 'Hannah Grace', 'Dela Cruz', 'Gutierrez', 'Guard', 'Padolina', 'General Tinio', 'Nueva Ecija', '08/31/1999', 'Female', '098765432', 'gutierrezhannah70@gmail.com', ''),
(2, '123', 'Mark Leynard', 'Bulaclac', 'Bianan', 'Admin', 'Concepcion', 'Adasde', 'AsA', '2000/01/10', 'Male', '0987654334', 'leyanrd@gmail.com', ''),
(4, 'GT18-00004', 'Joyce', 'San Pedro', 'Dytianquin', 'Teacher', 'Gawad Kalinga', 'General Tinio', 'Nueva Ecija', '2022-03-02', 'Female', '09827362736', 'joyce@gmail.com', ''),
(5, 'GT0101', 'John Louie', 'Sibayan', 'Bulaklak', 'Guard', 'Concepcion', 'General Tinio', 'Nueva Ecija', '2022-03-23', 'Male', '09886456423', 'jlbulaklak@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_section` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_id`, `fname`, `lname`, `mname`, `course`, `year_section`, `barangay`, `city`, `province`, `dob`, `sex`, `contact`, `email`, `photo`) VALUES
(1, 'GT18-01', 'Joyce', 'Dytianquin', 'San Pedro', 'BSIT', '4A', 'Gawad Kalinga', 'General Tinio', 'Nueva Ecija', '2000-05-18', 'Female', '09876543234', 'leynardbulaclac@yahoo.com', ''),
(3, 'GT18-100', 'Mark Leynard', 'Bulaclac', 'Bianan', 'BSIT', '4A', 'Concepcion', 'General Tinio', 'Nueva Ecija', '10/10/2000', 'Male', '0987654344', 'Leynard@gmail.com', ''),
(4, 'GT18-00189', 'John Louie', 'Sibayan', 'Bulaklak', 'BSIT', '4A', 'Concepcion', 'General Tinio', 'Nueva Ecija', '2021-01-21', 'Male', '098767654543', 'jlbulaklak@yahoo.com', ''),
(5, 'GT18-00120', 'Hannah Grace', 'Gutierrez', 'Dela Cruz', 'BSIT', '4A', 'Padolina', 'General Tinio', 'Nueva Ecija', '2022-03-09', 'Female', '09876544323', 'hannah@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user_id`, `username`, `password`, `status`) VALUES
(11, '123', 'admin', '$2y$10$fmvyRrkajqvwDLtkXIuxWO71oyAmgQVX7DKiCiLVWCiUZMgxO5kgy', 'default'),
(13, '12345', 'hannah', '$2y$10$hLEahVHwPi33VfRI8lHqu.2s76Vcr6hM9R68k137hownPZkFbj/b2', 'active'),
(14, 'GT18-00004', 'joyce', '$2y$10$WvBQUZX.Ia2VgIFZzKuGbumQMgk0dpNzVZpucen1F7yOA2Cy8fn2C', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_visitor`
--

CREATE TABLE `tbl_visitor` (
  `id` int(11) NOT NULL,
  `visitor_id` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_visitor`
--

INSERT INTO `tbl_visitor` (`id`, `visitor_id`, `facility`) VALUES
(16, '1040594682', 'Office'),
(19, '1669596097', 'CLRC'),
(20, '340237917', 'Gymnasium'),
(21, '1512811400', 'ComLab 1'),
(22, '1552321418', 'Library');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backup_data`
--
ALTER TABLE `backup_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backup_data`
--
ALTER TABLE `backup_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_visitor`
--
ALTER TABLE `tbl_visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
