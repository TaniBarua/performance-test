-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 07:57 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` char(30) NOT NULL,
  `name` char(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `age` int(50) NOT NULL,
  `email` char(50) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `name`, `address`, `mobile`, `age`, `email`, `image`, `password`) VALUES
('c-1', 'fsdf', 'ctg', 3467, 0, 'dfgsgsd', '', ''),
('c-1000', 'hasan', 'dhaka', 1776868, 0, 'mehedi249@gmail.com', '', '12345'),
('c-1001', 'mehedi', 'chittagong', 989878, 0, 'mehedih256@gmail.com', '', '12345'),
('c-1002', 'hasan', 'dhaka', 456867856, 0, 'mehedi249@gmail.com', '', '12345'),
('c-1003', 'dddd', 'dhaka', 2147483647, 20000221, 'mehedi249@gmail.com', '', ''),
('c-1005', 'fssgagasd', 'chittagong', 1776868, 19900301, 'mehedih256@gmail.com', 'aea42c0c90255dbf8cdc00c2366e5b70.jpg', ''),
('c-12', 'dfgsdfhfgh', 'dhaka', 1776868, 20001212, 'dfghdf', '9ba333b463361a3045ddb6464dcd1c28.jpg', ''),
('c-2', 'fsdf', 'ctg', 3467, 0, 'dfgsgsd', '', ''),
('c-3', 'fsdf', 'ctg', 3467, 0, 'dfgsgsd', '', ''),
('c-35', 'sdjjhsdjh', 'dhaka', 1776868, 20191001, 'mehedih256@gmail.com', 'c0d8e61516ea615485aaa2b7fdf3a6de.jpg', '12345'),
('c-38', 'Tani Barua', 'chittagong', 89868688, 20001103, 'baruatani7@gmail.com', '3369dbdda29eef6bcb3af6fbf796bd97.jpg', '12345'),
('c-68', 'dddddddd', 'dhaka', 2147483647, 20200807, '44rrWE', 'e957bbe905cd76cf4d77537d8d3ef999.', 'eeeeeeeeeeeeeeEHq'),
('c-79', 'mehedi', 'dhaka', 989878, 20191001, 'mehedi249@gmail.com', '28a516c3d157acc4c3881b5eaad76aea.jpg', '12345'),
('c-80', 'gsdfgs', 'chittagong', 2147483647, 20191001, 'mehedi249@gmail.com', '7eb41bb49a7f9ac2525f2cd27f9192bf.jpg', '12345'),
('c-97', 'uuuu', 'dhaka', 5555, 0, 'kkjkj', '4e72da46782520becf8e3290b547ddbf.', '9999');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` char(30) NOT NULL,
  `cus_id` char(30) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `cus_id`, `order_date`) VALUES
('o-1', 'c-1', '2019-09-28'),
('o-2', 'c-1', '2019-09-28'),
('o-3', 'c-2', '2019-09-28');

-- --------------------------------------------------------

--
-- Table structure for table `orderline`
--

CREATE TABLE `orderline` (
  `order_id` char(30) NOT NULL,
  `p_id` char(30) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderline`
--

INSERT INTO `orderline` (`order_id`, `p_id`, `quantity`) VALUES
('o-1', 'p-1', 2),
('o-1', 'p-2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` char(30) NOT NULL,
  `pname` char(50) NOT NULL,
  `ptype` varchar(100) DEFAULT NULL,
  `brandname` char(50) DEFAULT NULL,
  `bprice` float DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `pname`, `ptype`, `brandname`, `bprice`, `image`) VALUES
('22222', 'j', 'shoe', 'dd', 33, '769c33b8f00474270ccfceaf6d73db2e.jpg'),
('p-1', 'das', 'dsf', 'asd', 100, ''),
('p-100', 'potato', 'Grocery', 'n/a', 18, '183965ea6c21f1d152f11f008f1a9af7.jpg'),
('p-2', 'das', 'dsf', 'asd', 200, ''),
('p-200', 'tomato', 'Grocery', 'n/a', 50, '9af398953d348a31008fbd8082c9edc4.jpg'),
('p-3', 'das', 'dsf', 'asd', 150, ''),
('p-300', 'sdsdfh', 'cloth', 'sdfgdsffs', 546, '9ce90de2cc719b75d94dd805d48602d9.jpg'),
('p-400', 'dfjsdfj', 'cloth', 'dfgdfg', 40, 'ae1206ad022d88f82791e0e1577fb76d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `p_id` char(30) NOT NULL,
  `sellingPrice` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`p_id`, `sellingPrice`, `quantity`) VALUES
('22222', 34, 222),
('p-1', 150, 50),
('p-100', 25, 50),
('p-2', 250, 50),
('p-200', 100, 100),
('p-3', 350, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order` (`cus_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `orderline`
--
ALTER TABLE `orderline`
  ADD PRIMARY KEY (`order_id`,`p_id`),
  ADD KEY `fk_porder` (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`p_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`cus_id`) REFERENCES `customer` (`cus_id`) ON UPDATE CASCADE;

--
-- Constraints for table `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `fk_cusorder` FOREIGN KEY (`order_id`) REFERENCES `customer_order` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_porder` FOREIGN KEY (`p_id`) REFERENCES `store` (`p_id`) ON UPDATE CASCADE;

--
-- Constraints for table `store`
--
ALTER TABLE `store`
  ADD CONSTRAINT `fk_store` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
