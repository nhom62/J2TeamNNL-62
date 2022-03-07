-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 05:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db62`
--

-- --------------------------------------------------------

--
-- Table structure for table `costomer`
--

CREATE TABLE `costomer` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(11) NOT NULL,
  `COSTOMER_ID` int(11) NOT NULL,
  `RECEIVER_NAME` varchar(50) NOT NULL,
  `RECEIVER_PHONE` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `NOTE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `ORDER_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `producer`
--

CREATE TABLE `producer` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producer`
--

INSERT INTO `producer` (`ID`, `NAME`) VALUES
(1, 'Stussy'),
(2, 'H&M');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `PRODUCER_ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `IMAGE` varchar(200) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `COLOR` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `PRODUCER_ID`, `NAME`, `DESCRIPTION`, `IMAGE`, `PRICE`, `COLOR`) VALUES
(1, 1, 'WASHED CANVAS SHOP JACKET\r\n', 'Regular fit washed canvas shop jacket.\r\n\r\nPRODUCT DETAILS\r\n- Contrasting corduroy collar\r\n- Concealed placket\r\n- Four flap pockets with metal snap closures\r\n- Stüssy Work Gear label on chest\r\n- Adjustable snap cuffs\r\n\r\nModel is 6\'1\" wearing size Medium\r\n\r\n100% Cotton\r\nLining: 100% Polyester\r\nImported', 'https://cdn.shopify.com/s/files/1/0087/6193/3920/products/115589_BONE_1_720x.jpg?v=1643959276', 400, 'White'),
(2, 1, 'PRIMALOFT MOUNTAIN JACKET', 'Hooded Jacket with quilted exterior and Primaloft® Hi-loft Ultra insulation.\r\n\r\nPRODUCT DETAILS\r\n\r\n- Nylon Ripstop Exterior\r\n- #8 YKK VISLON® zipper at front\r\n- #5 YKK VISLON® zippers at side pockets\r\n- Polar fleece lined pocket bags\r\n- Concealed hood adjustment\r\n- Interior chest pocket with zipper closure\r\n- Shock cord adjustment at hem\r\n- Stüssy logo embroidery on left chest\r\n\r\nModel is 6\'1\" wearing size Medium', 'https://cdn.shopify.com/s/files/1/0087/6193/3920/products/115614_OLIV_1_720x.jpg?v=1643753937', 400, 'Black'),
(3, 1, 'DYED NYLON BOMBER', 'Garment dyed nylon bomber jacket.\r\n\r\nPRODUCT DETAILS\r\n- Satin lining\r\n- Fully insulated\r\n- YKK #8 metal front zip\r\n- MA-1 sleeve pocket with YKK #5 metal zip and Stüssy flag label\r\n- 2x1 ribbed collar, cuffs and hem\r\n\r\n100% Nylon\r\nImported', 'https://cdn.shopify.com/s/files/1/0087/6193/3920/products/115618_NAVY_1_14928b99-dd51-4523-aa32-53da9725c79a_720x.jpg?v=1644433727', 300, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `GENDER` int(10) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `LEVEL` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costomer`
--
ALTER TABLE `costomer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `COSTOMER_ID` (`COSTOMER_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`ORDER_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PRODUCTER_ID` (`PRODUCER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costomer`
--
ALTER TABLE `costomer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `producer`
--
ALTER TABLE `producer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`COSTOMER_ID`) REFERENCES `costomer` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`ORDER_ID`) REFERENCES `order` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`PRODUCER_ID`) REFERENCES `producer` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
