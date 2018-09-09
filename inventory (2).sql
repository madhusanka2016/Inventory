-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 08:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `i_id` int(11) NOT NULL,
  `i_no` varchar(50) NOT NULL,
  `i_type` varchar(50) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_des` varchar(100) NOT NULL,
  `i_qty` int(5) NOT NULL,
  `i_up` decimal(8,2) NOT NULL,
  `i_mp` decimal(8,2) NOT NULL,
  `i_loc` varchar(20) NOT NULL,
  `i_last` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`i_id`, `i_no`, `i_type`, `i_brand`, `i_des`, `i_qty`, `i_up`, `i_mp`, `i_loc`, `i_last`) VALUES
(5, 'G40', 'OR', 'STS', 'O RING', 90, '0.50', '0.40', '37', '2018-06-19'),
(6, 'G50', 'OR', 'STS', 'O RING', 15, '0.10', '0.10', 'UN', '2018-06-19'),
(11, 'G901', 'OHM', 'STS1', 'HYDROULIC SEAL', 8, '150.00', '100.00', 'UN', '2018-06-22'),
(12, 'C90233', 'OR', 'STS', 'HYDROULIC SEAL', 20, '150.00', '111.00', 'UN', '2018-06-27'),
(13, '98X', 'OHM', 'STS1', 'HYDROULIC SEAL', 122, '500.00', '120.00', 'UN', '2018-06-27'),
(14, 'G90232', 'OR', 'STS1', 'HYDROULIC SEAL', 121, '126.00', '120.00', 'UN', '2018-06-27'),
(15, 'G403', 'OR1', 'STS1', 'O RING1', 20, '500.00', '111.00', 'UN', '2018-06-27'),
(16, 'G4013', 'OR', 'STS1', 'O RING', 121, '500.00', '200.00', 'UN', '2018-06-27'),
(17, 'G4013', 'OR', 'STS1', 'O RING', 121, '500.00', '200.00', 'UN', '2018-06-27'),
(18, 'G903443', 'OR', 'STS1', 'HYDROULIC SEAL', 121, '150.00', '111.00', 'UN', '2018-06-27'),
(19, 'G903443', 'OR', 'STS1', 'HYDROULIC SEAL', 121, '150.00', '111.00', 'UN', '2018-06-27'),
(20, 'G903443', 'OR', 'STS1', 'HYDROULIC SEAL', 121, '150.00', '111.00', 'UN', '2018-06-27'),
(21, 'G903443', 'OR', 'STS1', 'HYDROULIC SEAL', 121, '150.00', '111.00', 'UN', '2018-06-27'),
(23, 'C90', 'OR1', 'STS', 'O RING', 2, '150.00', '120.00', 'UN', '2018-06-28'),
(24, 'C90', 'OR', 'STS1', 'HYDROULIC SEAL', 0, '150.00', '120.00', 'UN', '2018-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rack`
--

CREATE TABLE `tb_rack` (
  `s_id` int(11) NOT NULL,
  `rack_name` varchar(20) NOT NULL,
  `rack_floor` int(5) NOT NULL,
  `rack_coloum` int(5) NOT NULL,
  `part_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rack`
--

INSERT INTO `tb_rack` (`s_id`, `rack_name`, `rack_floor`, `rack_coloum`, `part_id`) VALUES
(21, 'A', 1, 1, 0),
(22, 'A', 1, 2, 0),
(23, 'A', 1, 3, 0),
(24, 'A', 1, 4, 0),
(25, 'A', 2, 1, 0),
(26, 'A', 2, 2, 0),
(27, 'A', 2, 3, 0),
(28, 'A', 2, 4, 0),
(29, 'A', 3, 1, 0),
(30, 'A', 3, 2, 0),
(31, 'A', 3, 3, 0),
(32, 'A', 3, 4, 0),
(33, 'A', 4, 1, 0),
(34, 'A', 4, 2, 0),
(35, 'A', 4, 3, 0),
(36, 'A', 4, 4, 0),
(37, 'A', 5, 1, 5),
(38, 'A', 5, 2, 0),
(39, 'A', 5, 3, 0),
(40, 'A', 5, 4, 0),
(44, 'C', 1, 1, 0),
(45, 'C', 1, 2, 0),
(46, 'C', 1, 3, 0),
(47, 'C', 1, 4, 0),
(48, 'C', 1, 5, 0),
(49, 'C', 1, 6, 0),
(50, 'C', 1, 7, 0),
(51, 'C', 1, 8, 0),
(52, 'C', 1, 9, 0),
(53, 'C', 1, 10, 0),
(54, 'C', 1, 11, 0),
(55, 'C', 1, 12, 0),
(56, 'C', 2, 1, 0),
(57, 'C', 2, 2, 0),
(58, 'C', 2, 3, 0),
(59, 'C', 2, 4, 0),
(60, 'C', 2, 5, 0),
(61, 'C', 2, 6, 0),
(62, 'C', 2, 7, 0),
(63, 'C', 2, 8, 0),
(64, 'C', 2, 9, 0),
(65, 'C', 2, 10, 0),
(66, 'C', 2, 11, 0),
(67, 'C', 2, 12, 0),
(68, 'C', 3, 1, 0),
(69, 'C', 3, 2, 0),
(70, 'C', 3, 3, 0),
(71, 'C', 3, 4, 0),
(72, 'C', 3, 5, 0),
(73, 'C', 3, 6, 0),
(74, 'C', 3, 7, 0),
(75, 'C', 3, 8, 0),
(76, 'C', 3, 9, 0),
(77, 'C', 3, 10, 0),
(78, 'C', 3, 11, 0),
(79, 'C', 3, 12, 0),
(80, 'C', 4, 1, 0),
(81, 'C', 4, 2, 0),
(82, 'C', 4, 3, 0),
(83, 'C', 4, 4, 0),
(84, 'C', 4, 5, 0),
(85, 'C', 4, 6, 0),
(86, 'C', 4, 7, 0),
(87, 'C', 4, 8, 0),
(88, 'C', 4, 9, 0),
(89, 'C', 4, 10, 0),
(90, 'C', 4, 11, 0),
(91, 'C', 4, 12, 0),
(92, 'C', 5, 1, 0),
(93, 'C', 5, 2, 0),
(94, 'C', 5, 3, 0),
(95, 'C', 5, 4, 0),
(96, 'C', 5, 5, 0),
(97, 'C', 5, 6, 0),
(98, 'C', 5, 7, 0),
(99, 'C', 5, 8, 0),
(100, 'C', 5, 9, 0),
(101, 'C', 5, 10, 0),
(102, 'C', 5, 11, 0),
(103, 'C', 5, 12, 0),
(104, 'C', 6, 1, 0),
(105, 'C', 6, 2, 0),
(106, 'C', 6, 3, 0),
(107, 'C', 6, 4, 0),
(108, 'C', 6, 5, 0),
(109, 'C', 6, 6, 0),
(110, 'C', 6, 7, 0),
(111, 'C', 6, 8, 0),
(112, 'C', 6, 9, 0),
(113, 'C', 6, 10, 0),
(114, 'C', 6, 11, 0),
(115, 'C', 6, 12, 0),
(116, 'C', 7, 1, 0),
(117, 'C', 7, 2, 0),
(118, 'C', 7, 3, 0),
(119, 'C', 7, 4, 0),
(120, 'C', 7, 5, 0),
(121, 'C', 7, 6, 0),
(122, 'C', 7, 7, 0),
(123, 'C', 7, 8, 0),
(124, 'C', 7, 9, 0),
(125, 'C', 7, 10, 0),
(126, 'C', 7, 11, 0),
(127, 'C', 7, 12, 0),
(128, 'C', 8, 1, 0),
(129, 'C', 8, 2, 0),
(130, 'C', 8, 3, 0),
(131, 'C', 8, 4, 0),
(132, 'C', 8, 5, 0),
(133, 'C', 8, 6, 0),
(134, 'C', 8, 7, 0),
(135, 'C', 8, 8, 0),
(136, 'C', 8, 9, 0),
(137, 'C', 8, 10, 0),
(138, 'C', 8, 11, 0),
(139, 'C', 8, 12, 0),
(140, 'C', 9, 1, 0),
(141, 'C', 9, 2, 0),
(142, 'C', 9, 3, 0),
(143, 'C', 9, 4, 0),
(144, 'C', 9, 5, 0),
(145, 'C', 9, 6, 0),
(146, 'C', 9, 7, 0),
(147, 'C', 9, 8, 0),
(148, 'C', 9, 9, 0),
(149, 'C', 9, 10, 0),
(150, 'C', 9, 11, 0),
(151, 'C', 9, 12, 0),
(152, 'C', 10, 1, 0),
(153, 'C', 10, 2, 0),
(154, 'C', 10, 3, 0),
(155, 'C', 10, 4, 0),
(156, 'C', 10, 5, 0),
(157, 'C', 10, 6, 0),
(158, 'C', 10, 7, 0),
(159, 'C', 10, 8, 0),
(160, 'C', 10, 9, 0),
(161, 'C', 10, 10, 0),
(162, 'C', 10, 11, 0),
(163, 'C', 10, 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rackmeta`
--

CREATE TABLE `tb_rackmeta` (
  `id` int(11) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `r_des` varchar(50) NOT NULL,
  `r_floor` int(5) NOT NULL,
  `r_col` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rackmeta`
--

INSERT INTO `tb_rackmeta` (`id`, `r_name`, `r_des`, `r_floor`, `r_col`) VALUES
(3, 'A', 'Rack A', 5, 4),
(5, 'C', 'Rack C', 10, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sale`
--

CREATE TABLE `tb_sale` (
  `s_id` int(11) NOT NULL,
  `i_no` varchar(20) NOT NULL,
  `i_type` varchar(50) NOT NULL,
  `i_brand` varchar(50) NOT NULL,
  `i_des` varchar(50) NOT NULL,
  `i_qty` int(5) NOT NULL,
  `i_up` decimal(8,2) NOT NULL,
  `sale_date` date NOT NULL,
  `sale_time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sale`
--

INSERT INTO `tb_sale` (`s_id`, `i_no`, `i_type`, `i_brand`, `i_des`, `i_qty`, `i_up`, `sale_date`, `sale_time`) VALUES
(1, 'G40', 'OR', 'STS', 'O RING', 2, '1.00', '2018-06-21', '12:13:52pm'),
(2, '35X45X6', 'USH', 'NOK', 'HYDRAULIC SEAL', 3, '1.00', '2018-06-20', '12:14:41pm'),
(3, 'G40', 'OR', 'STS', 'O RING', 3, '0.50', '2018-06-20', '12:15:37pm'),
(4, 'G50', 'OR', 'STS', 'O RING', 5, '0.15', '2018-06-20', '01:39:42pm'),
(5, 'G40', 'OR', 'STS', 'O RING', 6, '0.50', '2018-06-20', '01:55:03pm'),
(6, '35X45X6', 'USH', 'NOK', 'HYDRAULIC SEAL', 2, '1.39', '2018-06-20', '03:51:42pm'),
(7, '35X45X6', 'USH', 'NOK', 'HYDRAULIC SEAL', 3, '5.00', '2018-06-20', '03:56:15pm'),
(8, '35X45X6', 'USH', 'NOK', 'HYDRAULIC SEAL', 10, '2.30', '2018-06-20', '07:06:12pm'),
(9, 'G90', 'OR', 'STS', 'O RING', 5, '0.20', '2018-06-21', '10:58:35am'),
(10, 'G90', 'OR', 'STS', 'O RING', 20, '150.00', '2018-06-22', '11:00:40am'),
(11, 'G90', 'OR', 'STS', 'O RING', 3, '150.00', '2018-06-22', '11:02:51am'),
(12, 'G40', 'OR', 'STS', 'O RING', 5, '60.00', '2018-06-22', '01:51:36pm'),
(13, 'G901', 'OHM', 'STS1', 'HYDROULIC SEAL', 122, '150.00', '2018-06-22', '02:00:17pm'),
(14, 'G901', 'OHM', 'STS1', 'HYDROULIC SEAL', 15, '150.00', '2018-06-22', '02:00:29pm'),
(15, 'G901', 'OHM', 'STS1', 'HYDROULIC SEAL', 5, '150.00', '2018-06-22', '02:00:33pm'),
(16, 'G50', 'OR', 'STS', 'O RING', 5, '0.10', '2018-06-22', '02:00:50pm'),
(17, 'G901', 'OR1', 'STS1', 'O RING1', 2, '151.50', '2018-06-23', '07:32:41pm'),
(18, 'G901', 'OR1', 'STS1', 'O RING1', 50, '999.99', '2018-06-24', '10:21:46am'),
(19, 'G901', 'OR1', 'STS1', 'O RING1', 52, '150000.00', '2018-06-24', '10:24:03am'),
(20, 'G901', 'OR1', 'STS', 'O RING', 5, '500.00', '2018-06-24', '12:00:54pm'),
(21, 'G901', 'OR1', 'STS', 'O RING', 5, '500.00', '2018-06-24', '12:03:08pm'),
(22, 'G901', 'OR1', 'STS', 'O RING', 5, '500.00', '2018-06-27', '08:04:14am'),
(23, '35X45X6', 'USH', 'NOK', 'HYDRAULIC SEAL', 100, '150.00', '2018-06-28', '10:08:18am');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `u_pw` varchar(20) NOT NULL,
  `u_tp` int(10) NOT NULL,
  `u_ch_date` date NOT NULL,
  `u_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `u_name`, `username`, `u_type`, `u_pw`, `u_tp`, `u_ch_date`, `u_id`) VALUES
(29, 'User', 'User', 'Doctor', 'user@123', 778519113, '2018-06-06', 'U29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `tb_rack`
--
ALTER TABLE `tb_rack`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_rackmeta`
--
ALTER TABLE `tb_rackmeta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sale`
--
ALTER TABLE `tb_sale`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tb_rack`
--
ALTER TABLE `tb_rack`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `tb_rackmeta`
--
ALTER TABLE `tb_rackmeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_sale`
--
ALTER TABLE `tb_sale`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
