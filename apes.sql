-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passkey` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `username`, `passkey`, `name`) VALUES
(1, 'aeraf', 'aeraf123', 'aeraf');

-- --------------------------------------------------------

--
-- Table structure for table `be_stud_data`
--

CREATE TABLE `be_stud_data` (
  `id` int(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `in_dsp` int(10) NOT NULL,
  `in_css` int(10) NOT NULL,
  `in_sa` int(10) NOT NULL,
  `in_ai` int(10) NOT NULL,
  `p_dsp` int(10) NOT NULL,
  `p_css` int(10) NOT NULL,
  `p_sa` int(10) NOT NULL,
  `p_ai` int(10) NOT NULL,
  `p_ntal` int(10) NOT NULL,
  `p_prj1` int(10) NOT NULL,
  `te_dsp` int(10) NOT NULL,
  `te_css` int(10) NOT NULL,
  `te_sa` int(10) NOT NULL,
  `te_ai` int(10) NOT NULL,
  `in_dwm` int(10) NOT NULL,
  `in_hmi` int(10) NOT NULL,
  `in_pds` int(10) NOT NULL,
  `in_df` int(10) NOT NULL,
  `p_dwm` int(10) NOT NULL,
  `p_hmi` int(10) NOT NULL,
  `p_pds` int(10) NOT NULL,
  `p_df` int(10) NOT NULL,
  `p_ccl` int(10) NOT NULL,
  `p_prj2` int(10) NOT NULL,
  `te_dwm` int(10) NOT NULL,
  `te_hmi` int(10) NOT NULL,
  `te_pds` int(10) NOT NULL,
  `te_df` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `be_stud_data`
--

INSERT INTO `be_stud_data` (`id`, `first_name`, `last_name`, `address`, `Email`, `phone`, `seat_no`, `in_dsp`, `in_css`, `in_sa`, `in_ai`, `p_dsp`, `p_css`, `p_sa`, `p_ai`, `p_ntal`, `p_prj1`, `te_dsp`, `te_css`, `te_sa`, `te_ai`, `in_dwm`, `in_hmi`, `in_pds`, `in_df`, `p_dwm`, `p_hmi`, `p_pds`, `p_df`, `p_ccl`, `p_prj2`, `te_dwm`, `te_hmi`, `te_pds`, `te_df`) VALUES
(1, 'Adrash ', 'Tiwari', 'A/201, Sainath Society, Achor Park, Opp. Water taki, Nallasopara(East) ', 'adrashtiwari112@yahoo.com', '7754949656', 'FY-02', 11, 12, 13, 14, 15, 40, 41, 42, 43, 44, 65, 66, 67, 68, 69, 5, 12, 13, 14, 15, 18, 45, 45, 45, 45, 29, 45, 50),
(2, 'Sahil', 'Tambe', 'Virar(west)', 'sahiltambe@gmail.com', '1111111111', 'FY-03', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(200) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fy_stud_data`
--

CREATE TABLE `fy_stud_data` (
  `id` int(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `in_ip` int(10) NOT NULL,
  `in_de` int(10) NOT NULL,
  `in_dm` int(10) NOT NULL,
  `in_cs` int(10) NOT NULL,
  `in_os` int(10) NOT NULL,
  `p_ip` int(10) NOT NULL,
  `p_de` int(10) NOT NULL,
  `p_dm` int(10) NOT NULL,
  `p_cs` int(10) NOT NULL,
  `p_os` int(10) NOT NULL,
  `te_ip` int(10) NOT NULL,
  `te_de` int(10) NOT NULL,
  `te_dm` int(10) NOT NULL,
  `te_cs` int(10) NOT NULL,
  `te_os` int(10) NOT NULL,
  `in_oops` int(10) NOT NULL,
  `in_mi` int(10) NOT NULL,
  `in_wb` int(10) NOT NULL,
  `in_nm` int(10) NOT NULL,
  `in_gc` int(10) NOT NULL,
  `p_oops` int(10) NOT NULL,
  `p_mi` int(10) NOT NULL,
  `p_wb` int(10) NOT NULL,
  `p_nm` int(10) NOT NULL,
  `p_gc` int(10) NOT NULL,
  `te_oops` int(10) NOT NULL,
  `te_mi` int(10) NOT NULL,
  `te_wb` int(10) NOT NULL,
  `te_nm` int(10) NOT NULL,
  `te_gc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fy_stud_data`
--

INSERT INTO `fy_stud_data` (`id`, `first_name`, `last_name`, `address`, `Email`, `phone`, `seat_no`, `in_ip`, `in_de`, `in_dm`, `in_cs`, `in_os`, `p_ip`, `p_de`, `p_dm`, `p_cs`, `p_os`, `te_ip`, `te_de`, `te_dm`, `te_cs`, `te_os`, `in_oops`, `in_mi`, `in_wb`, `in_nm`, `in_gc`, `p_oops`, `p_mi`, `p_wb`, `p_nm`, `p_gc`, `te_oops`, `te_mi`, `te_wb`, `te_nm`, `te_gc`) VALUES
(1, 'Adrash ', 'Tiwari', 'A/201, Sainath Society, Achor Park, Opp. Water taki, Nallasopara(East) ', 'adrashtiwari112@yahoo.com', '7754949656', 'FY-01', 10, 12, 13, 14, 15, 40, 41, 42, 43, 44, 65, 66, 67, 68, 69, 5, 12, 13, 14, 15, 18, 45, 45, 45, 45, 29, 45, 50, 55, 60),
(2, 'Sahil', 'Tambe', 'Virar(west)', 'sahiltambe@gmail.com', '1111111111', 'FY-02', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sy_stud_data`
--

CREATE TABLE `sy_stud_data` (
  `id` int(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `in_py` int(10) NOT NULL,
  `in_ds` int(10) NOT NULL,
  `in_cn` int(10) NOT NULL,
  `in_dbms` int(10) NOT NULL,
  `in_am` int(10) NOT NULL,
  `p_py` int(10) NOT NULL,
  `p_ds` int(10) NOT NULL,
  `p_cn` int(10) NOT NULL,
  `p_dbms` int(10) NOT NULL,
  `p_am` int(10) NOT NULL,
  `te_py` int(10) NOT NULL,
  `te_ds` int(10) NOT NULL,
  `te_cn` int(10) NOT NULL,
  `te_dbms` int(10) NOT NULL,
  `te_am` int(10) NOT NULL,
  `in_java` int(10) NOT NULL,
  `in_em` int(10) NOT NULL,
  `in_se` int(10) NOT NULL,
  `in_cg` int(10) NOT NULL,
  `in_cost` int(10) NOT NULL,
  `p_java` int(10) NOT NULL,
  `p_em` int(10) NOT NULL,
  `p_se` int(10) NOT NULL,
  `p_cg` int(10) NOT NULL,
  `p_cost` int(10) NOT NULL,
  `te_java` int(10) NOT NULL,
  `te_em` int(10) NOT NULL,
  `te_se` int(10) NOT NULL,
  `te_cg` int(10) NOT NULL,
  `te_cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy_stud_data`
--

INSERT INTO `sy_stud_data` (`id`, `first_name`, `last_name`, `address`, `Email`, `phone`, `seat_no`, `in_py`, `in_ds`, `in_cn`, `in_dbms`, `in_am`, `p_py`, `p_ds`, `p_cn`, `p_dbms`, `p_am`, `te_py`, `te_ds`, `te_cn`, `te_dbms`, `te_am`, `in_java`, `in_em`, `in_se`, `in_cg`, `in_cost`, `p_java`, `p_em`, `p_se`, `p_cg`, `p_cost`, `te_java`, `te_em`, `te_se`, `te_cg`, `te_cost`) VALUES
(6, 'Rahul', 'Khedekar', 'D/001, Shanti Nikaetan, Nilemore gaon, Opp. Raj Resort, Nallasopara(east).', 'rahulkhedekar123@gmail.com', '9568211447', 'SY-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Sumit', 'Chilvery', 'B/101,Mamta Apt, Central Park, Sainath Nagar, Nallasopara(East)', 'sumitchilvery441@gmail.com', '7551645822', 'SY-02', 19, 19, 19, 19, 19, 48, 48, 48, 48, 48, 74, 74, 74, 74, 74, 15, 16, 17, 18, 19, 34, 35, 36, 37, 38, 55, 60, 62, 63, 69);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `phoneNumber` varchar(11) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `username_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `first_name`, `last_name`, `address`, `Email`, `phoneNumber`, `qualification`, `dept`, `username_pass`) VALUES
(228, 'Aarti', 'Chavan', 'Siddhi Homes Society, Achole Cross rd, Sanyukth Nagar, Opp. Zallawad Ground, Nallasopara(East). ', 'aartichavan201@gmail.com', '7219788097', 'Master in Information and Technology', 'Information Technology', 'aarti123'),
(232, 'Rahul', 'yadav', 'B/102, Shantiniketan , Achole road, Nallasopara(east).', 'rahulyadav@gmail.com', '7448271254', 'Master In Bachelor Of information and technology', 'Information Technology', 'rahul123');

-- --------------------------------------------------------

--
-- Table structure for table `ty_stud_data`
--

CREATE TABLE `ty_stud_data` (
  `id` int(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `seat_no` varchar(10) NOT NULL,
  `in_spm` int(10) NOT NULL,
  `in_iot` int(10) NOT NULL,
  `in_awp` int(10) NOT NULL,
  `in_ai` int(10) NOT NULL,
  `in_ngt` int(10) NOT NULL,
  `p_spm` int(10) NOT NULL,
  `p_iot` int(10) NOT NULL,
  `p_awp` int(10) NOT NULL,
  `p_ai` int(10) NOT NULL,
  `p_ngt` int(10) NOT NULL,
  `te_spm` int(10) NOT NULL,
  `te_iot` int(10) NOT NULL,
  `te_awp` int(10) NOT NULL,
  `te_ai` int(10) NOT NULL,
  `te_ngt` int(10) NOT NULL,
  `in_sqa` int(10) NOT NULL,
  `in_sic` int(10) NOT NULL,
  `in_bi` int(10) NOT NULL,
  `in_itsm` int(10) NOT NULL,
  `in_en` int(10) NOT NULL,
  `p_sqa` int(10) NOT NULL,
  `p_sic` int(10) NOT NULL,
  `p_bi` int(10) NOT NULL,
  `p_itsm` int(10) NOT NULL,
  `p_en` int(10) NOT NULL,
  `te_sqa` int(10) NOT NULL,
  `te_sic` int(10) NOT NULL,
  `te_bi` int(10) NOT NULL,
  `te_itsm` int(10) NOT NULL,
  `te_en` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ty_stud_data`
--

INSERT INTO `ty_stud_data` (`id`, `first_name`, `last_name`, `address`, `Email`, `phone`, `seat_no`, `in_spm`, `in_iot`, `in_awp`, `in_ai`, `in_ngt`, `p_spm`, `p_iot`, `p_awp`, `p_ai`, `p_ngt`, `te_spm`, `te_iot`, `te_awp`, `te_ai`, `te_ngt`, `in_sqa`, `in_sic`, `in_bi`, `in_itsm`, `in_en`, `p_sqa`, `p_sic`, `p_bi`, `p_itsm`, `p_en`, `te_sqa`, `te_sic`, `te_bi`, `te_itsm`, `te_en`) VALUES
(5, 'Prasad', 'Chavan', 'B/102, Siddhi Homes Society, Achole rd, Sanyukth Nagar, Opp. Zallawad Ground, Nallasopara(East).', 'prasadchavan@avc.ac.in', '7448271254', 'TY-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Daivik ', 'Gharat', 'Banglow 4, Agashi Gaon, Virar(west).', 'daivikgharat169@gmail.com', '7558544198', 'TY-02', 14, 15, 16, 17, 18, 40, 41, 42, 43, 44, 69, 68, 67, 66, 65, 4, 15, 16, 17, 18, 25, 35, 36, 37, 38, 45, 55, 65, 66, 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fy_stud_data`
--
ALTER TABLE `fy_stud_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sy_stud_data`
--
ALTER TABLE `sy_stud_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ty_stud_data`
--
ALTER TABLE `ty_stud_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fy_stud_data`
--
ALTER TABLE `fy_stud_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sy_stud_data`
--
ALTER TABLE `sy_stud_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `ty_stud_data`
--
ALTER TABLE `ty_stud_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
