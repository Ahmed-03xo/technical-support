-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 مارس 2024 الساعة 02:12
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bases10`
--

-- --------------------------------------------------------

--
-- بنية الجدول `data11`
--

CREATE TABLE `data11` (
  `id` int(255) NOT NULL,
  `job` varchar(25) NOT NULL,
  `Department_Name` varchar(255) NOT NULL,
  `Hall_number` varchar(255) NOT NULL,
  `Training_number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `the_problem` varchar(255) NOT NULL,
  `Order_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `data11`
--

INSERT INTO `data11` (`id`, `job`, `Department_Name`, `Hall_number`, `Training_number`, `date`, `the_problem`, `Order_Status`) VALUES
(30, 'طالب    ', 'مبنى ج', '101', '    442224141', '2024-03-15', 'عطل في الشبكة', '...تم تنفيذ الطلب'),
(32, 'مدرب ', 'مبنى ا', '310', ' 442224141', '2024-03-15', 'عطل في جهاز الحاسب فيsystem', '...جاري تنفيذ الطلب'),
(33, 'طبيب ', 'مبنى ا', '309', ' 442221111', '2024-03-15', 'عطل في الشبكة', '...جاري تنفيذ طلب');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data11`
--
ALTER TABLE `data11`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data11`
--
ALTER TABLE `data11`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
