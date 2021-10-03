-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 07:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hair_salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `cosmetic`
--

CREATE TABLE `cosmetic` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_service` int(11) NOT NULL,
  `c_price` int(11) NOT NULL,
  `c_status` int(1) NOT NULL DEFAULT '1',
  `c_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cosmetic`
--

INSERT INTO `cosmetic` (`c_id`, `c_name`, `c_service`, `c_price`, `c_status`, `c_time`) VALUES
(1, 'Head & Shoulder', 2, 100, 0, '2018-06-26 07:37:48'),
(2, 'pantene', 2, 200, 1, '2018-06-26 07:37:48'),
(3, 'ka yaw ka mon', 2, 500, 0, '2018-06-26 07:38:37'),
(4, 'clear', 2, 150, 1, '2018-06-26 07:38:37'),
(5, 'naver', 1, 500, 1, '2018-06-26 07:39:24'),
(6, 'pounds', 1, 600, 1, '2018-06-26 07:39:24'),
(7, 'ganeiar', 1, 1000, 1, '2018-06-26 07:41:30'),
(8, 'bella', 1, 700, 1, '2018-06-26 07:41:30'),
(9, 'berina - gold', 4, 1500, 1, '2018-06-26 07:43:31'),
(10, 'berina - sliver', 4, 1200, 1, '2018-06-26 07:43:31'),
(11, 'Ushadow', 5, 1000, 1, '2018-06-26 11:59:20'),
(12, 'Lolen', 5, 2000, 1, '2018-06-26 11:59:20'),
(13, 'cutter', 3, 100, 0, '2018-06-25 17:30:00'),
(14, 'Short hair', 3, 500, 1, '2018-06-25 17:30:00'),
(15, 'long hair', 3, 1000, 1, '2018-06-25 17:30:00'),
(16, 'berina - blue', 4, 1000, 1, '2018-06-27 17:30:00'),
(17, 'follow me', 2, 500, 1, '2018-07-08 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `i_id` int(11) NOT NULL,
  `i_cname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `s_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `s_cost` int(11) NOT NULL,
  `c_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `c_price` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`i_id`, `i_cname`, `s_name`, `s_cost`, `c_name`, `c_price`, `u_id`, `u_name`, `date`) VALUES
(1, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(2, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(3, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(4, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(5, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-27'),
(6, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-27'),
(7, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(8, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(9, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(10, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-27'),
(11, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-27'),
(12, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-28'),
(13, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-28'),
(14, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-28'),
(15, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-29'),
(16, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-23'),
(17, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-24'),
(18, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-24'),
(19, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-24'),
(20, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-24'),
(21, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-24'),
(22, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-25'),
(23, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-25'),
(24, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-25'),
(25, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-25'),
(26, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-25'),
(27, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-25'),
(28, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-25'),
(29, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-25'),
(30, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-24'),
(31, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(32, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(33, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(34, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(35, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-07-02'),
(36, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-07-02'),
(37, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(38, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(39, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(40, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(41, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(42, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(43, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(44, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-27'),
(45, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-27'),
(46, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(47, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(48, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(49, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-27'),
(50, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-27'),
(51, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-28'),
(52, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-28'),
(53, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-28'),
(54, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-29'),
(55, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-24'),
(56, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-24'),
(57, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-24'),
(58, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-24'),
(59, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-24'),
(60, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-24'),
(61, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-22'),
(62, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-22'),
(63, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-22'),
(64, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-22'),
(65, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-22'),
(66, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-22'),
(67, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-22'),
(68, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-22'),
(69, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-24'),
(70, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(71, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(72, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(73, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(74, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-07-02'),
(75, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-07-02'),
(76, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(77, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(78, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(79, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(80, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(81, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(82, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(83, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-21'),
(84, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-21'),
(85, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-21'),
(86, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-21'),
(87, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-21'),
(88, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-21'),
(89, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-21'),
(90, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-20'),
(91, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-20'),
(92, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-20'),
(93, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-29'),
(94, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-24'),
(95, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-24'),
(96, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-24'),
(97, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-24'),
(98, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-24'),
(99, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-24'),
(100, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-25'),
(101, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-25'),
(102, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-25'),
(103, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-25'),
(104, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-25'),
(105, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-25'),
(106, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-25'),
(107, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-25'),
(108, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-24'),
(109, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(110, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(111, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(112, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(113, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-07-02'),
(114, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-07-02'),
(115, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(116, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(117, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(118, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(119, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(120, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-26'),
(121, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-26'),
(122, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-27'),
(123, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-27'),
(124, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(125, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(126, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-27'),
(127, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-27'),
(128, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-27'),
(129, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-20'),
(130, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-20'),
(131, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-20'),
(132, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-29'),
(133, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-23'),
(134, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-23'),
(135, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-06-23'),
(136, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-06-23'),
(137, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-06-23'),
(138, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-06-23'),
(139, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-19'),
(140, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-19'),
(141, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-06-19'),
(142, 'Ko Zwee', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-19'),
(143, 'ko Htay', 'face washing', 1000, 'pounds', 600, 17, 'heinnanda', '2018-06-19'),
(144, 'Mg Kyaw Kyaw', 'face washing', 1000, 'naver', 500, 15, 'zinminhtun', '2018-06-19'),
(145, 'Ko Zaw', 'hair cutting', 1500, 'long hair', 1000, 17, 'heinnanda', '2018-06-19'),
(146, 'Sophia Thazin', 'hair washing', 1000, 'clear', 150, 2, 'heinnandaaung', '2018-06-19'),
(147, 'ko Htay', 'hair coloring', 5000, 'berina - gold', 1500, 2, 'heinnandaaung', '2018-06-23'),
(148, 'zinminhtun', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(149, 'zinminhtun', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(150, 'Ko Zwee', 'hair cutting', 1500, 'Short hair', 500, 15, 'zinminhtun', '2018-07-02'),
(151, 'ko Htay', 'hair washing', 1000, 'clear', 150, 15, 'zinminhtun', '2018-07-02'),
(152, 'ko Htay', 'face washing', 1000, 'bella', 700, 17, 'heinnanda', '2018-07-02'),
(153, 'Ma Gyi May Thet', 'Hair Extension', 10000, 'Ushadow', 1000, 15, 'zinminhtun', '2018-07-02'),
(154, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(155, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(156, 'Ko Ye Htut', 'face washing', 1000, 'ganeiar', 1000, 17, 'heinnanda', '2018-07-02'),
(157, 'Ma Gyi May Thet', 'hair washing', 1000, 'clear', 150, 5, 'stylish', '2018-07-02'),
(158, 'Ko Zwee', 'hair washing', 1000, 'clear', 150, 5, 'stylish', '2018-07-04'),
(159, 'Mya Kay Khine', 'face washing', 1000, 'bella', 700, 5, 'stylish', '2018-07-09'),
(160, 'Thal Ei Phyu', 'hair washing', 1000, 'clear', 150, 5, 'stylish', '2018-07-09'),
(161, 'Thal Ei Phyu', 'hair washing', 1000, 'follow me', 500, 2, 'heinnandaaung', '2018-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(225) NOT NULL,
  `s_cost` int(11) NOT NULL,
  `s_status` int(1) NOT NULL DEFAULT '1',
  `s_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`s_id`, `s_name`, `s_cost`, `s_status`, `s_time`) VALUES
(1, 'face washing', 1000, 1, '2018-06-26 07:34:05'),
(2, 'hair washing', 1000, 1, '2018-06-26 07:34:05'),
(3, 'hair cutting', 1500, 0, '2018-06-26 07:36:14'),
(4, 'hair coloring', 5000, 1, '2018-06-26 07:36:14'),
(5, 'Hair Extension', 10000, 0, '2018-06-26 11:57:51'),
(6, 'Hair Waving', 15000, 0, '2018-06-26 11:57:51'),
(7, 'face color', 900, 0, '2018-06-25 17:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(2) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_uname` varchar(255) NOT NULL,
  `u_password` varchar(60) NOT NULL,
  `u_phone` varchar(20) NOT NULL,
  `u_role` int(1) NOT NULL,
  `u_code` varchar(64) NOT NULL,
  `u_reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_uname`, `u_password`, `u_phone`, `u_role`, `u_code`, `u_reg_time`) VALUES
(1, 'Ko Htet', 'kohtet', '$2y$10$9x1ae7DGMDH5rul0QUvyQO6yWvtn4SygIhQwpGAs/cjhRDy7IzfHG', '09250152018', 1, '39d158209eb9dfc5a8443e8017da20048ebda540cbcc4d7336496819a46a1b68', '2018-06-28 07:56:43'),
(2, 'Hein Nanda Aung', 'heinnandaaung', '$2y$10$sLBsIHZo1QdrJvICEhaAhOfu7.basIsSawG.JDuZiGC9pXWs8mCJm', '09789789789', 3, '3fed93f268efe4c7ed9a9a385e3803b14d5b995358e7798bc7e9d9db83c612a5', '2018-06-28 15:57:08'),
(3, 'admin', 'admin', '$2y$10$mu0VhmFjN.2o6kXpX8z1oO.ZNtbG6G8DoZE6kOPw7pUOw.B4WpCA6', '0989898989', 1, '21232f297a57a5a743894a0e4a801fc31c383cd30b7c298ab50293adfecb7b18', '2018-07-02 10:41:54'),
(5, 'stylish', 'stylish', '$2y$10$trBXR.Ao1SVitny.6UGTUOyi.fQTDOgagn8w1dO8xj4uUk881LTKe', '09123123123', 3, '4663702bdf997fe87bf88fc7cf2b7e272a9d121cd9c3a1832bb6d2cc6bd7a8a7', '2018-07-02 10:42:54'),
(6, 'casher', 'casher', '$2y$10$qwey2d9LvVsRXa0mrJs0dOqCRXMRYLckM2PZhvik9N7TrutG6U8Ta', '09090909', 2, '11fd209b26c13a28ee511d6939191c893b3dbaf68507998acd6a5a5254ab2d76', '2018-07-02 10:48:40'),
(7, 'Zin Min', 'zinmin', '$2y$10$GkMWO4349yizNPQR93FAju3TNvDeOmga2abtGC4.yKXCSwvwIO25a', '09420166185', 2, 'a97cac103bf288cf914fe709ceb0a6c5eddea82ad2755b24c4e168c5fc2ebd40', '2018-07-02 11:50:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cosmetic`
--
ALTER TABLE `cosmetic`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cosmetic`
--
ALTER TABLE `cosmetic`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
