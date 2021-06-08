-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2021 at 01:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_loket`
--

CREATE TABLE `tbl_admin_loket` (
  `adm_id` int(11) NOT NULL,
  `adm_username` varchar(20) NOT NULL,
  `adm_password` varchar(50) NOT NULL,
  `adm_nama_lengkap` varchar(50) NOT NULL,
  `adm_nomor_hp` varchar(15) NOT NULL,
  `adm_loket_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_loket`
--

INSERT INTO `tbl_admin_loket` (`adm_id`, `adm_username`, `adm_password`, `adm_nama_lengkap`, `adm_nomor_hp`, `adm_loket_id`) VALUES
(1, 'loketmedan', 'e10adc3949ba59abbe56e057f20f883e', 'Admin Loket Medan', '081200002', 1),
(2, 'loketsidempuan', 'e10adc3949ba59abbe56e057f20f883e', 'Admin Loket Sidempuan', '081200001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `kt_id` int(11) NOT NULL,
  `kt_nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kota`
--

INSERT INTO `tbl_kota` (`kt_id`, `kt_nama_kota`) VALUES
(1, 'MEDAN'),
(2, 'PADANGSIDEMPUAN'),
(3, 'PEKANBARU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loket`
--

CREATE TABLE `tbl_loket` (
  `loket_id` int(11) NOT NULL,
  `loket_nama` varchar(100) NOT NULL,
  `loket_kota_id` int(11) NOT NULL,
  `loket_alamat` varchar(200) NOT NULL,
  `loket_nomor_kontak` varchar(15) NOT NULL,
  `loket_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_loket`
--

INSERT INTO `tbl_loket` (`loket_id`, `loket_nama`, `loket_kota_id`, `loket_alamat`, `loket_nomor_kontak`, `loket_status`) VALUES
(1, 'Mandiri Taxi Loket Medan HM Joni', 1, 'Jl. HM. Joni No.28, Teladan Bar., Kec. Medan Kota, Kota Medan, Sumatera Utara 20214', '0852704151930', 1),
(2, 'Mandiri Taxi Padangsidempuan', 2, 'Jl. Sisingamangaraja No.187, Sitamiang, Padangsidimpuan Sel., Kota Padang Sidempuan, Sumatera Utara 22723', '082162654333', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `usr_id` int(11) NOT NULL,
  `usr_akun` varchar(50) NOT NULL,
  `usr_password` varchar(100) NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `usr_nama_lengkap` varchar(100) NOT NULL,
  `usr_no_hp` varchar(15) NOT NULL,
  `usr_alamat` text NOT NULL,
  `usr_level` int(11) NOT NULL COMMENT '1:Admin_pusat, \r\n2:Admin_loket, \r\n3:Supir,\r\n4:user_penumpang',
  `usr_loket_id` int(5) DEFAULT NULL COMMENT 'khusus level Admin',
  `usr_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`usr_id`, `usr_akun`, `usr_password`, `usr_email`, `usr_nama_lengkap`, `usr_no_hp`, `usr_alamat`, `usr_level`, `usr_loket_id`, `usr_created`) VALUES
(1, 'adminmedan', 'e10adc3949ba59abbe56e057f20f883e', 'rizkimuliono@gamil.com', 'Admin Loket Medan', '09872131242', 'Medan', 2, 1, '2021-06-09'),
(5, 'rizki', 'e10adc3949ba59abbe56e057f20f883e', 'rizkimuliono@gamil.com', 'Rizki Muliono', '081263717733', 'Jl. Air Bersih Ujung no. 170A\r\n', 3, NULL, '2021-06-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin_loket`
--
ALTER TABLE `tbl_admin_loket`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  ADD PRIMARY KEY (`kt_id`);

--
-- Indexes for table `tbl_loket`
--
ALTER TABLE `tbl_loket`
  ADD PRIMARY KEY (`loket_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin_loket`
--
ALTER TABLE `tbl_admin_loket`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kota`
--
ALTER TABLE `tbl_kota`
  MODIFY `kt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_loket`
--
ALTER TABLE `tbl_loket`
  MODIFY `loket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
