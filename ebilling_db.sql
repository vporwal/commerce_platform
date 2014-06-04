-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2014 at 08:15 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebilling`
--
CREATE DATABASE IF NOT EXISTS `ebilling` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ebilling`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CUSTOMER_ID` int(10) NOT NULL,
  `CUSTOMER_NAME` varchar(30) NOT NULL,
  `CUSTOMER_ADDRESS` varchar(30) DEFAULT NULL,
  `CUSTOMER_FAX` int(10) DEFAULT NULL,
  `CUSTOMER_TELE` int(10) DEFAULT NULL,
  `CUSTOMER_MOBILE` int(12) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`CUSTOMER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `INVOICE_ID` int(10) NOT NULL AUTO_INCREMENT,
  `INVOICE_ADDRESS` varchar(50) DEFAULT NULL,
  `INVOICE_AMOUNT` double(10,2) DEFAULT NULL,
  `INVOICE_DISCOUNT` double(3,2) DEFAULT NULL,
  `TAX` double(10,2) DEFAULT NULL,
  `VAR` double(3,2) DEFAULT NULL,
  `DEDUCTIONS` double(10,2) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `customer_name` varchar(30) DEFAULT NULL,
  `hamali` double(10,2) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `vehicle_no` varchar(15) DEFAULT NULL,
  `gross_amt` double(10,2) DEFAULT NULL,
  PRIMARY KEY (`INVOICE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `INVOICE_ID` int(10) DEFAULT NULL,
  `PRODUCT_ID` varchar(70) NOT NULL,
  `QUANTITY` double(10,2) NOT NULL,
  `PRICE` double(10,2) NOT NULL,
  `ORDER_ITEM_TOTAL` double(10,2) DEFAULT NULL,
  `DEDUCTIONS` double(10,2) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  `trans_type` varchar(4) DEFAULT NULL,
  `qty_wt` double(10,2) DEFAULT NULL,
  KEY `INVOICE_ID` (`INVOICE_ID`),
  KEY `PRODUCT_ID` (`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PRODUCT_ID` int(10) NOT NULL,
  `PRODUCT_NAME` varchar(30) NOT NULL,
  `UNIT_OF_MEASURE` varchar(20) NOT NULL DEFAULT 'SQ MTR',
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_NAME`, `UNIT_OF_MEASURE`, `created_date`, `updated_date`) VALUES
(1, 'M.S.Phapada', 'SQ MTR', NULL, NULL),
(2, 'G.P.Plain', 'SQ MTR', NULL, NULL),
(3, 'G.I.Sheets', 'SQ MTR', NULL, NULL),
(4, 'Color Coated', 'SQ MTR', NULL, NULL),
(5, 'G.I.Phapda', 'SQ MTR', NULL, NULL),
(6, 'Tiles / Coula Sheets', 'SQ MTR', NULL, NULL),
(7, 'G.I. Roll', 'SQ MTR', NULL, NULL),
(8, 'Color Coated Roll', 'SQ MTR', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE IF NOT EXISTS `product_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_brand_name` varchar(30) NOT NULL,
  `prod_brand_disp_name` varchar(30) NOT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_brand`
--

INSERT INTO `product_brand` (`brand_id`, `prod_brand_name`, `prod_brand_disp_name`, `created_date`, `updated_date`) VALUES
(2, 'j1', 'Jindal', NULL, NULL),
(3, 't1', 'Tata Steel', NULL, NULL),
(4, 'O1', 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `PRODUCT_ID` varchar(70) NOT NULL,
  `PRODUCT_CODE` varchar(20) DEFAULT NULL,
  `BRAND` varchar(10) DEFAULT NULL,
  `PARTICULARS` varchar(30) NOT NULL,
  `SIZE` varchar(10) DEFAULT NULL,
  `THICKNESS` varchar(10) DEFAULT NULL,
  `WIDTH` varchar(10) DEFAULT NULL,
  `UNIT_OF_MEASURE` varchar(20) DEFAULT 'SHEETS',
  `WT_PER_SHEET` double(10,2) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`PRODUCT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`PRODUCT_ID`, `PRODUCT_CODE`, `BRAND`, `PARTICULARS`, `SIZE`, `THICKNESS`, `WIDTH`, `UNIT_OF_MEASURE`, `WT_PER_SHEET`, `created_date`, `updated_date`) VALUES
('PROD_1420.20MM', '1', 'O1', '42', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_1430.20MM', '1', 'O1', '43', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_1980', '1', 'O1', '98', NULL, '0', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_2440.50MM', '2', 'O1', '44', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.55MM', '2', 'O1', '44', NULL, '0.55MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.60MM', '2', 'O1', '44', NULL, '0.60MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.65MM', '2', 'O1', '44', NULL, '0.65MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.70MM', '2', 'O1', '44', NULL, '0.70MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.75MM', '2', 'O1', '44', NULL, '0.75MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.80MM', '2', 'O1', '44', NULL, '0.80MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.85MM', '2', 'O1', '44', NULL, '0.85MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.90MM', '2', 'O1', '44', NULL, '0.90MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2440.95MM', '2', 'O1', '44', NULL, '0.95MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2441.00MM', '2', 'O1', '44', NULL, '1.00MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2441.10MM', '2', 'O1', '44', NULL, '1.10MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2441.20MM', '2', 'O1', '44', NULL, '1.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.50MM', '2', 'O1', '45', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.55MM', '2', 'O1', '45', NULL, '0.55MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.60MM', '2', 'O1', '45', NULL, '0.60MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.65MM', '2', 'O1', '45', NULL, '0.65MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.70MM', '2', 'O1', '45', NULL, '0.70MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.75MM', '2', 'O1', '45', NULL, '0.75MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.80MM', '2', 'O1', '45', NULL, '0.80MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.85MM', '2', 'O1', '45', NULL, '0.85MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.90MM', '2', 'O1', '45', NULL, '0.90MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2450.95MM', '2', 'O1', '45', NULL, '0.95MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2451.00MM', '2', 'O1', '45', NULL, '1.00MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2451.10MM', '2', 'O1', '45', NULL, '1.10MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2451.20MM', '2', 'O1', '45', NULL, '1.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_2830.18MM', '2', 'O1', '83', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2830.20MM', '2', 'O1', '83', NULL, '0.20MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2830.25MM', '2', 'O1', '83', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2830.30MM', '2', 'O1', '83', NULL, '0.30MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2830.35MM', '2', 'O1', '83', NULL, '0.35MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2830.40MM', '2', 'O1', '83', NULL, '0.40MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.18MM', '2', 'O1', '93', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.20MM', '2', 'O1', '93', NULL, '0.20MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.22MM', '2', 'O1', '93', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.25MM', '2', 'O1', '93', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.30MM', '2', 'O1', '93', NULL, '0.30MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.35MM', '2', 'O1', '93', NULL, '0.35MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.40MM', '2', 'O1', '93', NULL, '0.40MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.45MM', '2', 'O1', '93', NULL, '0.45MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.50MM', '2', 'O1', '93', NULL, '0.50MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.60MM', '2', 'O1', '93', NULL, '0.60MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.70MM', '2', 'O1', '93', NULL, '0.70MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.80MM', '2', 'O1', '93', NULL, '0.80MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2930.90MM', '2', 'O1', '93', NULL, '0.90MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2931.00MM', '2', 'O1', '93', NULL, '1.00MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2931.10MM', '2', 'O1', '93', NULL, '1.10MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_2931.20MM', '2', 'O1', '93', NULL, '1.20MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_3460.18MM', '3', 'O1', '46', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.20MM', '3', 'O1', '46', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.22MM', '3', 'u1', '46', NULL, '0.22MM', NULL, '2', 0.00, '2013-02-05', '2013-02-05'),
('PROD_3460.25MM', '3', 'O1', '46', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.30MM', '3', 'O1', '46', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.35MM', '3', 'O1', '46', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.40MM', '3', 'O1', '46', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.45MM', '3', 'O1', '46', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3460.50MM', '3', 'O1', '46', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.18MM', '3', 'O1', '47', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.20MM', '3', 'O1', '47', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.25MM', '3', 'O1', '47', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.30MM', '3', 'O1', '47', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.35MM', '3', 'O1', '47', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.40MM', '3', 'O1', '47', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.45MM', '3', 'O1', '47', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3470.50MM', '3', 'O1', '47', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.18MM', '3', 'O1', '48', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.20MM', '3', 'O1', '48', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.25MM', '3', 'O1', '48', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.30MM', '3', 'O1', '48', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.35MM', '3', 'O1', '48', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.40MM', '3', 'O1', '48', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.45MM', '3', 'O1', '48', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3480.50MM', '3', 'O1', '48', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.18MM', '3', 'O1', '49', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.20MM', '3', 'O1', '49', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.25MM', '3', 'O1', '49', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.30MM', '3', 'O1', '49', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.35MM', '3', 'O1', '49', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.40MM', '3', 'O1', '49', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.45MM', '3', 'O1', '49', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3490.50MM', '3', 'O1', '49', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.20MM', '3', 'O1', '50', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.25MM', '3', 'O1', '50', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.30MM', '3', 'O1', '50', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.35MM', '3', 'O1', '50', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.40MM', '3', 'O1', '50', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.45MM', '3', 'O1', '50', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3500.50MM', '3', 'O1', '50', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.18MM', '3', 'O1', '59', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.20MM', '3', 'O1', '59', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.25MM', '3', 'O1', '59', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.30MM', '3', 'O1', '59', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.35MM', '3', 'O1', '59', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.40MM', '3', 'O1', '59', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.45MM', '3', 'O1', '59', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3590.50MM', '3', 'O1', '59', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.18MM', '3', 'O1', '60', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.20MM', '3', 'O1', '60', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.25MM', '3', 'O1', '60', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.30MM', '3', 'O1', '60', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.35MM', '3', 'O1', '60', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.40MM', '3', 'O1', '60', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.45MM', '3', 'O1', '60', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3600.50MM', '3', 'O1', '60', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.18MM', '3', 'O1', '61', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.20MM', '3', 'O1', '61', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.25MM', '3', 'O1', '61', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.30MM', '3', 'O1', '61', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.35MM', '3', 'O1', '61', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.40MM', '3', 'O1', '61', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.45MM', '3', 'O1', '61', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3610.50MM', '3', 'O1', '61', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.18MM', '3', 'O1', '62', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.20MM', '3', 'O1', '62', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.25MM', '3', 'O1', '62', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.30MM', '3', 'O1', '62', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.35MM', '3', 'O1', '62', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.40MM', '3', 'O1', '62', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.45MM', '3', 'O1', '62', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3620.50MM', '3', 'O1', '62', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3630.25MM', '3', 'O1', '63', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3630.30MM', '3', 'O1', '63', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3630.35MM', '3', 'O1', '63', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3630.40MM', '3', 'O1', '63', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3630.45MM', '3', 'O1', '63', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3630.50MM', '3', 'O1', '63', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3640.25MM', '3', 'O1', '64', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3640.30MM', '3', 'O1', '64', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3640.35MM', '3', 'O1', '64', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3640.40MM', '3', 'O1', '64', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3640.45MM', '3', 'O1', '64', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3640.50MM', '3', 'O1', '64', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3650.25MM', '3', 'O1', '65', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3650.30MM', '3', 'O1', '65', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3650.35MM', '3', 'O1', '65', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3650.40MM', '3', 'O1', '65', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3650.45MM', '3', 'O1', '65', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3650.50MM', '3', 'O1', '65', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3660.25MM', '3', 'O1', '66', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3660.30MM', '3', 'O1', '66', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3660.35MM', '3', 'O1', '66', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3660.40MM', '3', 'O1', '66', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3660.45MM', '3', 'O1', '66', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3660.50MM', '3', 'O1', '66', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3670.25MM', '3', 'O1', '67', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3670.30MM', '3', 'O1', '67', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3670.35MM', '3', 'O1', '67', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3670.40MM', '3', 'O1', '67', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3670.45MM', '3', 'O1', '67', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3670.50MM', '3', 'O1', '67', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3680.25MM', '3', 'O1', '68', NULL, '0.25MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3680.30MM', '3', 'O1', '68', NULL, '0.30MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3680.35MM', '3', 'O1', '68', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3680.40MM', '3', 'O1', '68', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3680.45MM', '3', 'O1', '68', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3680.50MM', '3', 'O1', '68', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_3780.18MM', '3', 'u1', '78', NULL, '0.18MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3780.20MM', '3', 'u1', '78', NULL, '0.20MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3780.22MM', '3', 'O1', '78', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_3780.25MM', '3', 'u1', '78', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3780.30MM', '3', 'u1', '78', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3780.35MM', '3', 'u1', '78', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3780.40MM', '3', 'u1', '78', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3790.18MM', '3', 'u1', '79', NULL, '0.18MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3790.20MM', '3', 'u1', '79', NULL, '0.20MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3790.22MM', '3', 'O1', '79', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_3790.25MM', '3', 'u1', '79', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3790.30MM', '3', 'u1', '79', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3790.35MM', '3', 'u1', '79', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3790.40MM', '3', 'u1', '79', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3800.18MM', '3', 'u1', '80', NULL, '0.18MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3800.20MM', '3', 'u1', '80', NULL, '0.20MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3800.22MM', '3', 'O1', '80', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_3800.25MM', '3', 'O1', '80', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_3800.30MM', '3', 'u1', '80', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3800.35MM', '3', 'u1', '80', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3800.40MM', '3', 'u1', '80', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3800.45MM', '3', 'u1', '80', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3810.18MM', '3', 'u1', '81', NULL, '0.18MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3810.20MM', '3', 'u1', '81', NULL, '0.20MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3810.25MM', '3', 'u1', '81', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3810.30MM', '3', 'u1', '81', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3810.35MM', '3', 'u1', '81', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3810.40MM', '3', 'u1', '81', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3820.40MM', '3', 'u1', '82', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3830.25MM', '3', 'u1', '83', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3830.30MM', '3', 'u1', '83', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3830.35MM', '3', 'u1', '83', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3830.40MM', '3', 'u1', '83', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3830.45MM', '3', 'u1', '83', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3840.25MM', '3', 'u1', '84', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3840.30MM', '3', 'u1', '84', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3840.35MM', '3', 'u1', '84', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3840.40MM', '3', 'u1', '84', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3840.45MM', '3', 'u1', '84', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3840.50MM', '3', 'O1', '84', NULL, '0.50MM', NULL, '2', 0.00, '2013-03-28', '2013-03-28'),
('PROD_3850.25MM', '3', 'u1', '85', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3850.30MM', '3', 'u1', '85', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3850.35MM', '3', 'u1', '85', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3850.40MM', '3', 'u1', '85', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3850.45MM', '3', 'u1', '85', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3850.50MM', '3', 'O1', '85', NULL, '0.50MM', NULL, '2', 0.00, '2013-03-28', '2013-03-28'),
('PROD_3860.25MM', '3', 'u1', '86', NULL, '0.25MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3860.30MM', '3', 'u1', '86', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3860.35MM', '3', 'u1', '86', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3860.40MM', '3', 'u1', '86', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3860.45MM', '3', 'u1', '86', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3870.30MM', '3', 'u1', '87', NULL, '0.30MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3870.35MM', '3', 'u1', '87', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3870.40MM', '3', 'u1', '87', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3870.45MM', '3', 'u1', '87', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3930.35MM', '3', 'u1', '93', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3930.40MM', '3', 'u1', '93', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3930.45MM', '3', 'u1', '93', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3930.50MM', '3', 'u1', '93', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3940.35MM', '3', 'u1', '94', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3940.40MM', '3', 'u1', '94', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3940.45MM', '3', 'u1', '94', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3940.50MM', '3', 'u1', '94', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3950.35MM', '3', 'u1', '95', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3950.40MM', '3', 'u1', '95', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3950.45MM', '3', 'u1', '95', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3950.50MM', '3', 'u1', '95', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3960.35MM', '3', 'u1', '96', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3960.40MM', '3', 'u1', '96', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3960.45MM', '3', 'u1', '96', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3960.50MM', '3', 'u1', '96', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3970.35MM', '3', 'u1', '97', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3970.40MM', '3', 'u1', '97', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3970.45MM', '3', 'u1', '97', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_3970.50MM', '3', 'u1', '97', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4510.35MM', '4', 'O1', '51', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4510.40MM', '4', 'O1', '51', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4510.45MM', '4', 'O1', '51', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4510.50MM', '4', 'O1', '51', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4520.35MM', '4', 'O1', '52', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4520.40MM', '4', 'O1', '52', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4520.45MM', '4', 'O1', '52', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4520.50MM', '4', 'O1', '52', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4530.35MM', '4', 'O1', '53', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4530.40MM', '4', 'O1', '53', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4530.45MM', '4', 'O1', '53', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4530.50MM', '4', 'O1', '53', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4540.35MM', '4', 'O1', '54', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4540.40MM', '4', 'O1', '54', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4540.45MM', '4', 'O1', '54', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4540.50MM', '4', 'O1', '54', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4550.35MM', '4', 'O1', '55', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4550.40MM', '4', 'O1', '55', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4550.45MM', '4', 'O1', '55', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4550.50MM', '4', 'O1', '55', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_4880.35MM', '4', '', '88', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4880.40MM', '4', 'O1', '88', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4880.45MM', '4', 'O1', '88', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4880.50MM', '4', 'O1', '88', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4890.35MM', '4', 'O1', '89', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4890.40MM', '4', 'O1', '89', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4890.45MM', '4', 'O1', '89', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4890.50MM', '4', 'O1', '89', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4900.35MM', '4', 'O1', '90', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4900.40MM', '4', 'O1', '90', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4900.45MM', '4', 'O1', '90', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4900.50MM', '4', 'O1', '90', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4910.35MM', '4', 'O1', '91', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4910.40MM', '4', 'O1', '91', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4910.45MM', '4', 'O1', '91', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4910.50MM', '4', 'O1', '91', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4920.35MM', '4', 'O1', '92', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4920.40MM', '4', 'O1', '92', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4920.45MM', '4', 'O1', '92', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_4920.50MM', '4', 'O1', '92', NULL, '0.50MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_5560.18MM', '5', 'O1', '56', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_5560.20MM', '5', 'O1', '56', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_5570.18MM', '5', 'O1', '57', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_5570.20MM', '5', 'O1', '57', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_5580.18MM', '5', 'O1', '58', NULL, '0.18MM', NULL, '2', 0.00, NULL, NULL),
('PROD_5580.20MM', '5', 'O1', '58', NULL, '0.20MM', NULL, '2', 0.00, NULL, NULL),
('PROD_5750.18MM', '5', 'O1', '75', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-20', '2013-03-20'),
('PROD_5760.18MM', '5', 'O1', '76', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-20', '2013-03-20'),
('PROD_5770.18MM', '5', 'O1', '77', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_5980', '5', 'O1', '98', NULL, '0', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6690.35MM', '6', 'O1', '69', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6690.40MM', '6', 'O1', '69', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6690.45MM', '6', 'O1', '69', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6690.50MM', '6', 'O1', '69', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6700.35MM', '6', 'O1', '70', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6700.40MM', '6', 'O1', '70', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6700.45MM', '6', 'O1', '70', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6700.50MM', '6', 'O1', '70', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6710.35MM', '6', 'O1', '71', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6710.40MM', '6', 'O1', '71', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6710.45MM', '6', 'O1', '71', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6710.50MM', '6', 'O1', '71', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6720.35MM', '6', 'O1', '72', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6720.40MM', '6', 'O1', '72', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6720.45MM', '6', 'O1', '72', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6720.50MM', '6', 'O1', '72', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6730.35MM', '6', 'O1', '73', NULL, '0.35MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6730.40MM', '6', 'O1', '73', NULL, '0.40MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6730.45MM', '6', 'O1', '73', NULL, '0.45MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6730.50MM', '6', 'O1', '73', NULL, '0.50MM', NULL, '2', 0.00, NULL, NULL),
('PROD_6880.35MM', '6', 'O1', '88', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6880.40MM', '6', 'O1', '88', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6880.45MM', '6', 'O1', '88', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6890.35MM', '6', 'O1', '89', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6890.40MM', '6', 'O1', '89', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6890.45MM', '6', 'u1', '89', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6900.35MM', '6', 'O1', '90', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6900.40MM', '6', 'O1', '90', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6900.45MM', '6', 'O1', '90', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6910.35MM', '6', 'O1', '91', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6910.40MM', '6', 'O1', '91', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6910.45MM', '6', 'O1', '91', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6920.35MM', '6', 'O1', '92', NULL, '0.35MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6920.40MM', '6', 'O1', '92', NULL, '0.40MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_6920.45MM', '6', 'O1', '92', NULL, '0.45MM', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_71000.20MM', '7', 'O1', '100', NULL, '0.20MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71000.22MM', '7', 'O1', '100', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71000.25MM', '7', 'O1', '100', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71000.30MM', '7', 'O1', '100', NULL, '0.30MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.20MM', '7', 'O1', '101', NULL, '0.20MM', NULL, '2', 0.00, '2013-03-20', '2013-03-20'),
('PROD_71010.22MM', '7', 'O1', '101', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.25MM', '7', 'O1', '101', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.30MM', '7', 'O1', '101', NULL, '0.30MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.35MM', '7', 'O1', '101', NULL, '0.35MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.40MM', '7', 'O1', '101', NULL, '0.40MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.45MM', '7', 'O1', '101', NULL, '0.45MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.50MM', '7', 'O1', '101', NULL, '0.50MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.55MM', '7', 'O1', '101', NULL, '0.55MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71010.60MM', '7', 'O1', '101', NULL, '0.60MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.18MM', '7', 'O1', '102', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.20MM', '7', 'O1', '102', NULL, '0.20MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.22MM', '7', 'O1', '102', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.25MM', '7', 'O1', '102', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.30MM', '7', 'O1', '102', NULL, '0.30MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.35MM', '7', 'O1', '102', NULL, '0.35MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.40MM', '7', 'O1', '102', NULL, '0.40MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.45MM', '7', 'O1', '102', NULL, '0.45MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.50MM', '7', 'O1', '102', NULL, '0.50MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71020.60MM', '7', 'O1', '102', NULL, '0.60MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_71050', '7', 'u1', '105', NULL, '0', NULL, '2', 0.00, '2013-02-17', '2013-02-17'),
('PROD_7990.18MM', '7', 'O1', '99', NULL, '0.18MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_7990.20MM', '7', 'O1', '99', NULL, '0.20MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_7990.22MM', '7', 'O1', '99', NULL, '0.22MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_7990.25MM', '7', 'O1', '99', NULL, '0.25MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21'),
('PROD_7990.30MM', '7', 'O1', '99', NULL, '0.30MM', NULL, '2', 0.00, '2013-03-21', '2013-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `product_measurement`
--

CREATE TABLE IF NOT EXISTS `product_measurement` (
  `measure_format_id` int(11) NOT NULL AUTO_INCREMENT,
  `measure_format_name` varchar(30) NOT NULL,
  `measure_format_disp_name` varchar(30) NOT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`measure_format_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product_measurement`
--

INSERT INTO `product_measurement` (`measure_format_id`, `measure_format_name`, `measure_format_disp_name`, `created_date`, `updated_date`) VALUES
(1, 'Sq. ft.', 'Sq. ft.', '2013-01-12', '2013-02-04'),
(2, 'no.', 'no.', '2013-01-12', '2013-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE IF NOT EXISTS `product_sizes` (
  `product_id` int(10) DEFAULT NULL,
  `product_size` varchar(50) DEFAULT NULL,
  `product_size_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`product_size_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`product_id`, `product_size`, `product_size_id`) VALUES
(NULL, ' 8 FT x 2.25 FT', 75),
(NULL, '10 FT x 2.25 FT', 76),
(NULL, '12 FT x 2.25 FT', 77),
(NULL, '8 FT x 2.5 FT', 78),
(NULL, '10 FT x 2.5 FT', 79),
(NULL, '12 FT x 2.5 FT', 80),
(NULL, '14 FT x 2.5 FT', 81),
(NULL, '16 FT x 2.5 FT', 82),
(NULL, '8 FT x 3 FT', 83),
(NULL, '10 FT x 3 FT', 84),
(NULL, '12 FT x 3 FT', 85),
(NULL, '14 FT x 3 FT', 86),
(NULL, '16 FT x 3 FT', 87),
(NULL, '8 FT x 3.5 FT', 88),
(NULL, '10 FT x 3.5 FT', 89),
(NULL, '12 FT x 3.5 FT', 90),
(NULL, '14 FT x 3.5 FT', 91),
(NULL, '16 FT x 3.5 FT', 92),
(NULL, '8 FT x 4 FT', 93),
(NULL, '10 FT x 4 FT', 94),
(NULL, '12 FT x 4 FT', 95),
(NULL, '14 FT x 4 FT', 96),
(NULL, '16 FT x 4 FT', 97),
(NULL, 'Other', 98),
(NULL, '1 FT', 99),
(NULL, '2 FT', 100),
(NULL, '3 FT', 101),
(NULL, '4 FT', 102),
(NULL, '3.5 FT', 103),
(NULL, '9'' Inch', 105);

-- --------------------------------------------------------

--
-- Table structure for table `product_size_map`
--

CREATE TABLE IF NOT EXISTS `product_size_map` (
  `product_id` int(10) DEFAULT NULL,
  `product_size_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_size_map`
--

INSERT INTO `product_size_map` (`product_id`, `product_size_id`) VALUES
(8, 78),
(8, 97),
(3, 101),
(3, 82),
(3, 95);

-- --------------------------------------------------------

--
-- Table structure for table `product_thickness`
--

CREATE TABLE IF NOT EXISTS `product_thickness` (
  `thickness` varchar(10) DEFAULT NULL,
  `description` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_thickness`
--

INSERT INTO `product_thickness` (`thickness`, `description`) VALUES
('0.20MM', '0.20MM'),
('0.22MM', '0.22MM'),
('0.25MM', '0.25MM'),
('0.30MM', '0.30MM'),
('0.32MM', '0.32MM'),
('0.35MM', '0.35MM'),
('0.40MM', '0.40MM'),
('0.45MM', '0.45MM'),
('0.50MM', '0.50MM'),
('0.55MM', '0.55MM'),
('0.60MM', '0.60MM'),
('0.65MM', '0.65MM'),
('0.70MM', '0.70MM'),
('0.75MM', '0.75MM'),
('0.80MM', '0.80MM'),
('0.85MM', '0.85MM'),
('0.90MM', '0.90MM'),
('1.00MM', '1.00MM'),
('1.10MM', '1.10MM'),
('1.20MM', '1.20MM'),
('0', 'Other'),
('0.18MM', '0.18MM');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `PRODUCT_CODE` varchar(70) DEFAULT NULL,
  `TOTAL_AVAL_QTY` double(10,2) DEFAULT NULL,
  `UNIT_OF_MEASURE` varchar(20) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  KEY `PRODUCT_CODE` (`PRODUCT_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`PRODUCT_CODE`, `TOTAL_AVAL_QTY`, `UNIT_OF_MEASURE`, `created_date`, `updated_date`) VALUES
('PROD_5570.20MM', 0.00, 'PROD_5570.20MM', '2013-01-28', '2013-01-28'),
('PROD_1420.20MM', 2000.00, 'PROD_1420.20MM', '2013-02-05', '2013-02-05'),
('PROD_3680.50MM', 113.00, 'PROD_3680.50MM', '2013-02-05', '2013-02-05'),
('PROD_3680.45MM', 122.00, 'PROD_3680.45MM', '2013-02-05', '2013-02-05'),
('PROD_1980', 2000.00, 'PROD_1980', '2013-12-26', '2013-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE IF NOT EXISTS `stock_details` (
  `PRODUCT_CODE` varchar(70) DEFAULT NULL,
  `QTY` double(10,2) DEFAULT NULL,
  `TRANS_TYPE` varchar(5) DEFAULT NULL,
  `LOCATION` varchar(30) DEFAULT NULL,
  `UNIT_OF_MEASURE` varchar(20) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  KEY `PRODUCT_CODE` (`PRODUCT_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`PRODUCT_CODE`, `QTY`, `TRANS_TYPE`, `LOCATION`, `UNIT_OF_MEASURE`, `created_date`, `updated_date`) VALUES
('PROD_5570.20MM', 100.00, 'buy', '', NULL, '2013-01-28', '2013-01-28'),
('PROD_5570.20MM', 100.00, 'sell', '', NULL, '2013-01-28', '2013-01-28'),
('PROD_1420.20MM', 2000.00, 'buy', 'Mangalam Enterprises', NULL, '2013-02-05', '2013-02-05'),
('PROD_3680.50MM', 113.00, 'buy', '', NULL, '2013-02-05', '2013-02-05'),
('PROD_3680.45MM', 122.00, 'buy', '', NULL, '2013-02-05', '2013-02-05'),
('PROD_3680.50MM', 60.00, 'buy', '', NULL, '2013-02-05', '2013-02-05'),
('PROD_3680.50MM', 60.00, 'sell', '', NULL, '2013-02-05', '2013-02-05'),
('PROD_1980', 2000.00, 'buy', 'Mangalam Steel Centre', NULL, '2013-12-26', '2013-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `USER_NAME` varchar(20) NOT NULL,
  `USER_PASSWORD` varchar(20) NOT NULL,
  `USER_FIRST_NAME` varchar(30) NOT NULL,
  `USER_LAST_NAME` varchar(30) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`USER_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE IF NOT EXISTS `user_roles` (
  `USER_NAME` varchar(20) NOT NULL,
  `ROLE_NAME` varchar(30) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `updated_date` date DEFAULT NULL,
  KEY `USER_NAME` (`USER_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`INVOICE_ID`) REFERENCES `invoice` (`INVOICE_ID`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product_details` (`PRODUCT_ID`);

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`PRODUCT_ID`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`PRODUCT_CODE`) REFERENCES `product_details` (`PRODUCT_ID`);

--
-- Constraints for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD CONSTRAINT `stock_details_ibfk_1` FOREIGN KEY (`PRODUCT_CODE`) REFERENCES `product_details` (`PRODUCT_ID`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`USER_NAME`) REFERENCES `users` (`USER_NAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
