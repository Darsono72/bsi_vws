-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2021 at 10:15 AM
-- Server version: 10.3.29-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigni_bsi_vws`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_name`, `cust_address`, `cust_phone`) VALUES
(22, 'Anto', 'Jakarta', '0812xxx123123'),
(27, 'Bagus Pratama Majid', 'Cengkareng ', '082176524352'),
(29, 'Growtopia Bfg', 'Agliabfg', '081329774979'),
(32, '', '...........', ''),
(33, 'Iis Olivia', 'Jakarta', '08821136000'),
(35, '<b>Nazhmi Irfan S</b>', 'Tasikmalaya ', '081323456777'),
(36, 'bojo', '<div style=\"backround-color:black;position: absolute; top:0; left:0; bottom:0; right:0; display:flex', '09988456321'),
(37, 'Isha', '<b>Tetangga Abyan</b>', '+62'),
(43, 'ferry', 'kramatjati', '081282092320'),
(44, '', 'Milik kita Semua', '1 untuk smua'),
(46, 'Yoyo', 'Jalan Kenangan Kita Bersama', 'Mantan'),
(49, 'eki ff', 'bogor', '-'),
(50, 'Aku', 'Jadi', 'Duta Shampoo Lain?'),
(51, '-_-', 'Jalan Doang Jadian Kaga', '13'),
(52, 'Asrul ', 'Indonesia', '081292929292'),
(53, '<b>Sad dah pokoknya</b>', '<b>JL. Doang jadian kagak</b>', '082'),
(56, 'X Æ A-12', 'Kolam Cupang', 'kosongduasatu'),
(100, 'cust_100', 'Alamat cust 100', '09090100'),
(101, '', '', ''),
(104, '', '', ''),
(107, '<!DOCTYPE html> <html> <head> <style> h2 {   posit', '', ''),
(108, '3', 'w', '4415'),
(109, 'Farid', 'Jakarta', '08974538943');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `item_id` varchar(20) NOT NULL,
  `item_desc` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
