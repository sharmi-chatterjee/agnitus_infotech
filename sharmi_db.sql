-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 10:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharmi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `iso2Code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `capitalCity` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `id`, `iso2Code`, `name`, `capitalCity`, `longitude`, `latitude`, `create_date`, `status`) VALUES
(1, 'ABW', 'AW', 'Aruba', 'Oranjestad', '-70.0167', '12.5167', '2021-12-12 01:53:15', 1),
(2, 'AFE', 'ZH', 'Africa Eastern and Southern', '', '', '', '2021-12-12 01:53:15', 1),
(3, 'AFG', 'AF', 'Afghanistan', 'Kabuls', '69.1761', '34.5228', '2021-12-12 01:53:15', 1),
(4, 'AFR', 'A9', 'Africa', '', '', '', '2021-12-12 01:53:15', 1),
(5, 'AFW', 'ZI', 'Africa Western and Central', '', '', '', '2021-12-12 01:53:15', 1),
(6, 'AGO', 'AO', 'Angola', 'Luanda', '13.242', '-8.81155', '2021-12-12 01:53:15', 1),
(7, 'ALB', 'AL', 'Albania', 'Tirane', '19.8172', '41.3317', '2021-12-12 01:53:15', 1),
(8, 'AND', 'AD', 'Andorra', 'Andorra la Vella', '1.5218', '42.5075', '2021-12-12 01:53:15', 1),
(9, 'ARB', '1A', 'Arab World', '', '', '', '2021-12-12 01:53:15', 1),
(10, 'ARE', 'AE', 'United Arab Emirates', 'Abu Dhabi', '54.3705', '24.4764', '2021-12-12 01:53:15', 1),
(11, 'ARG', 'AR', 'Argentina', 'Buenos Aires', '-58.4173', '-34.6118', '2021-12-12 01:53:15', 1),
(12, 'ARM', 'AM', 'Armenia', 'Yerevan', '44.509', '40.1596', '2021-12-12 01:53:15', 1),
(13, 'ASM', 'AS', 'American Samoa', 'Pago Pago', '-170.691', '-14.2846', '2021-12-12 01:53:15', 1),
(14, 'ATG', 'AG', 'Antigua and Barbuda', 'Saint John\'s', '-61.8456', '17.1175', '2021-12-12 01:53:15', 1),
(15, 'AUS', 'AU', 'Australia', 'Canberra', '149.129', '-35.282', '2021-12-12 01:53:15', 1),
(16, 'AUT', 'AT', 'Austria', 'Vienna', '16.3798', '48.2201', '2021-12-12 01:53:15', 1),
(17, 'AZE', 'AZ', 'Azerbaijan', 'Baku', '49.8932', '40.3834', '2021-12-12 01:53:15', 1),
(18, 'BDI', 'BI', 'Burundi', 'Bujumbura', '29.3639', '-3.3784', '2021-12-12 01:53:15', 1),
(19, 'BEA', 'B4', 'East Asia & Pacific (IBRD-only countries)', '', '', '', '2021-12-12 01:53:15', 1),
(20, 'BEC', 'B7', 'Europe & Central Asia (IBRD-only countries)', '', '', '', '2021-12-12 01:53:15', 1),
(21, 'BEL', 'BE', 'Belgium', 'Brussels', '4.36761', '50.8371', '2021-12-12 01:53:15', 1),
(22, 'BEN', 'BJ', 'Benin', 'Porto-Novo', '2.6323', '6.4779', '2021-12-12 01:53:15', 1),
(23, 'BFA', 'BF', 'Burkina Faso', 'Ouagadougou', '-1.53395', '12.3605', '2021-12-12 01:53:15', 1),
(24, 'BGD', 'BD', 'Bangladesh', 'Dhaka', '90.4113', '23.7055', '2021-12-12 01:53:15', 1),
(25, 'BGR', 'BG', 'Bulgaria', 'Sofia', '23.3238', '42.7105', '2021-12-12 01:53:15', 1),
(26, 'BHI', 'B1', 'IBRD countries classified as high income', '', '', '', '2021-12-12 01:53:15', 1),
(27, 'BHR', 'BH', 'Bahrain', 'Manama', '50.5354', '26.1921', '2021-12-12 01:53:15', 1),
(28, 'BHS', 'BS', 'Bahamas, The', 'Nassau', '-77.339', '25.0661', '2021-12-12 01:53:15', 1),
(29, 'BIH', 'BA', 'Bosnia and Herzegovina', 'Sarajevo', '18.4214', '43.8607', '2021-12-12 01:53:15', 1),
(30, 'BLA', 'B2', 'Latin America & the Caribbean (IBRD-only countries)', '', '', '', '2021-12-12 01:53:15', 1),
(31, 'BLR', 'BY', 'Belarus', 'Minsk', '27.5766', '53.9678', '2021-12-12 01:53:15', 1),
(32, 'BLZ', 'BZ', 'Belize', 'Belmopan', '-88.7713', '17.2534', '2021-12-12 01:53:15', 1),
(33, 'BMN', 'B3', 'Middle East & North Africa (IBRD-only countries)', '', '', '', '2021-12-12 01:53:15', 1),
(34, 'BMU', 'BM', 'Bermuda', 'Hamilton', '-64.706', '32.3293', '2021-12-12 01:53:15', 1),
(35, 'BOL', 'BO', 'Bolivia', 'La Paz', '-66.1936', '-13.9908', '2021-12-12 01:53:15', 1),
(36, 'BRA', 'BR', 'Brazil', 'Brasilia', '-47.9292', '-15.7801', '2021-12-12 01:53:15', 1),
(37, 'BRB', 'BB', 'Barbados', 'Bridgetown', '-59.6105', '13.0935', '2021-12-12 01:53:15', 1),
(38, 'BRN', 'BN', 'Brunei Darussalam', 'Bandar Seri Begawan', '114.946', '4.94199', '2021-12-12 01:53:15', 1),
(39, 'BSS', 'B6', 'Sub-Saharan Africa (IBRD-only countries)', '', '', '', '2021-12-12 01:53:15', 1),
(40, 'BTN', 'BT', 'Bhutan', 'Thimphu', '89.6177', '27.5768', '2021-12-12 01:53:15', 1),
(41, 'BWA', 'BW', 'Botswana', 'Gaborone', '25.9201', '-24.6544', '2021-12-12 01:53:15', 1),
(42, 'CAA', 'C9', 'Sub-Saharan Africa (IFC classification)', '', '', '', '2021-12-12 01:53:15', 1),
(43, 'CAF', 'CF', 'Central African Republic', 'Bangui', '21.6407', '5.63056', '2021-12-12 01:53:15', 1),
(44, 'CAN', 'CA', 'Canada', 'Ottawa', '-75.6919', '45.4215', '2021-12-12 01:53:15', 1),
(45, 'CEA', 'C4', 'East Asia and the Pacific (IFC classification)', '', '', '', '2021-12-12 01:53:15', 1),
(46, 'CEB', 'B8', 'Central Europe and the Baltics', '', '', '', '2021-12-12 01:53:15', 1),
(47, 'CEU', 'C5', 'Europe and Central Asia (IFC classification)', '', '', '', '2021-12-12 01:53:15', 1),
(48, 'CHE', 'CH', 'Switzerland', 'Bern', '7.44821', '46.948', '2021-12-12 01:53:15', 1),
(49, 'CHI', 'JG', 'Channel Islands', '', '', '', '2021-12-12 01:53:15', 1),
(50, 'CHL', 'CL', 'Chile', 'Santiago', '-70.6475', '-33.475', '2021-12-12 01:53:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country_details`
--

CREATE TABLE `country_details` (
  `details_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `iso2code` varchar(250) NOT NULL,
  `value` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country_details`
--

INSERT INTO `country_details` (`details_id`, `country_id`, `id`, `iso2code`, `value`, `type`, `created_date`) VALUES
(1, 1, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(2, 1, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(3, 1, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(4, 1, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(5, 2, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(6, 2, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(7, 2, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(8, 2, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(9, 3, 'SAS', '8S', 'South Asia', 'region', '2021-12-12 01:53:15'),
(10, 3, 'SAS', '8S', 'South Asia', 'adminregion', '2021-12-12 01:53:15'),
(11, 3, 'LIC', 'XM', 'Low income', 'incomeLevel', '2021-12-12 01:53:15'),
(12, 3, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(13, 4, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(14, 4, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(15, 4, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(16, 4, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(17, 5, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(18, 5, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(19, 5, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(20, 5, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(21, 6, 'SSF', 'ZG', 'Sub-Saharan Africa ', 'region', '2021-12-12 01:53:15'),
(22, 6, 'SSA', 'ZF', 'Sub-Saharan Africa (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(23, 6, 'LMC', 'XN', 'Lower middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(24, 6, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(25, 7, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(26, 7, 'ECA', '7E', 'Europe & Central Asia (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(27, 7, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(28, 7, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(29, 8, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(30, 8, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(31, 8, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(32, 8, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(33, 9, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(34, 9, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(35, 9, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(36, 9, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(37, 10, 'MEA', 'ZQ', 'Middle East & North Africa', 'region', '2021-12-12 01:53:15'),
(38, 10, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(39, 10, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(40, 10, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(41, 11, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(42, 11, 'LAC', 'XJ', 'Latin America & Caribbean (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(43, 11, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(44, 11, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(45, 12, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(46, 12, 'ECA', '7E', 'Europe & Central Asia (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(47, 12, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(48, 12, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(49, 13, 'EAS', 'Z4', 'East Asia & Pacific', 'region', '2021-12-12 01:53:15'),
(50, 13, 'EAP', '4E', 'East Asia & Pacific (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(51, 13, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(52, 13, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(53, 14, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(54, 14, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(55, 14, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(56, 14, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(57, 15, 'EAS', 'Z4', 'East Asia & Pacific', 'region', '2021-12-12 01:53:15'),
(58, 15, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(59, 15, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(60, 15, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(61, 16, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(62, 16, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(63, 16, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(64, 16, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(65, 17, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(66, 17, 'ECA', '7E', 'Europe & Central Asia (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(67, 17, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(68, 17, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(69, 18, 'SSF', 'ZG', 'Sub-Saharan Africa ', 'region', '2021-12-12 01:53:15'),
(70, 18, 'SSA', 'ZF', 'Sub-Saharan Africa (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(71, 18, 'LIC', 'XM', 'Low income', 'incomeLevel', '2021-12-12 01:53:15'),
(72, 18, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(73, 19, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(74, 19, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(75, 19, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(76, 19, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(77, 20, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(78, 20, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(79, 20, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(80, 20, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(81, 21, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(82, 21, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(83, 21, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(84, 21, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(85, 22, 'SSF', 'ZG', 'Sub-Saharan Africa ', 'region', '2021-12-12 01:53:15'),
(86, 22, 'SSA', 'ZF', 'Sub-Saharan Africa (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(87, 22, 'LMC', 'XN', 'Lower middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(88, 22, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(89, 23, 'SSF', 'ZG', 'Sub-Saharan Africa ', 'region', '2021-12-12 01:53:15'),
(90, 23, 'SSA', 'ZF', 'Sub-Saharan Africa (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(91, 23, 'LIC', 'XM', 'Low income', 'incomeLevel', '2021-12-12 01:53:15'),
(92, 23, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(93, 24, 'SAS', '8S', 'South Asia', 'region', '2021-12-12 01:53:15'),
(94, 24, 'SAS', '8S', 'South Asia', 'adminregion', '2021-12-12 01:53:15'),
(95, 24, 'LMC', 'XN', 'Lower middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(96, 24, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(97, 25, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(98, 25, 'ECA', '7E', 'Europe & Central Asia (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(99, 25, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(100, 25, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(101, 26, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(102, 26, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(103, 26, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(104, 26, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(105, 27, 'MEA', 'ZQ', 'Middle East & North Africa', 'region', '2021-12-12 01:53:15'),
(106, 27, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(107, 27, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(108, 27, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(109, 28, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(110, 28, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(111, 28, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(112, 28, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(113, 29, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(114, 29, 'ECA', '7E', 'Europe & Central Asia (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(115, 29, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(116, 29, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(117, 30, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(118, 30, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(119, 30, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(120, 30, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(121, 31, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(122, 31, 'ECA', '7E', 'Europe & Central Asia (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(123, 31, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(124, 31, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(125, 32, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(126, 32, 'LAC', 'XJ', 'Latin America & Caribbean (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(127, 32, 'LMC', 'XN', 'Lower middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(128, 32, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(129, 33, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(130, 33, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(131, 33, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(132, 33, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(133, 34, 'NAC', 'XU', 'North America', 'region', '2021-12-12 01:53:15'),
(134, 34, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(135, 34, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(136, 34, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(137, 35, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(138, 35, 'LAC', 'XJ', 'Latin America & Caribbean (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(139, 35, 'LMC', 'XN', 'Lower middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(140, 35, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(141, 36, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(142, 36, 'LAC', 'XJ', 'Latin America & Caribbean (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(143, 36, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(144, 36, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(145, 37, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(146, 37, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(147, 37, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(148, 37, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(149, 38, 'EAS', 'Z4', 'East Asia & Pacific', 'region', '2021-12-12 01:53:15'),
(150, 38, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(151, 38, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(152, 38, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(153, 39, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(154, 39, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(155, 39, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(156, 39, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(157, 40, 'SAS', '8S', 'South Asia', 'region', '2021-12-12 01:53:15'),
(158, 40, 'SAS', '8S', 'South Asia', 'adminregion', '2021-12-12 01:53:15'),
(159, 40, 'LMC', 'XN', 'Lower middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(160, 40, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(161, 41, 'SSF', 'ZG', 'Sub-Saharan Africa ', 'region', '2021-12-12 01:53:15'),
(162, 41, 'SSA', 'ZF', 'Sub-Saharan Africa (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(163, 41, 'UMC', 'XT', 'Upper middle income', 'incomeLevel', '2021-12-12 01:53:15'),
(164, 41, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15'),
(165, 42, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(166, 42, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(167, 42, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(168, 42, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(169, 43, 'SSF', 'ZG', 'Sub-Saharan Africa ', 'region', '2021-12-12 01:53:15'),
(170, 43, 'SSA', 'ZF', 'Sub-Saharan Africa (excluding high income)', 'adminregion', '2021-12-12 01:53:15'),
(171, 43, 'LIC', 'XM', 'Low income', 'incomeLevel', '2021-12-12 01:53:15'),
(172, 43, 'IDX', 'XI', 'IDA', 'lendingType', '2021-12-12 01:53:15'),
(173, 44, 'NAC', 'XU', 'North America', 'region', '2021-12-12 01:53:15'),
(174, 44, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(175, 44, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(176, 44, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(177, 45, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(178, 45, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(179, 45, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(180, 45, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(181, 46, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(182, 46, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(183, 46, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(184, 46, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(185, 47, 'NA', 'NA', 'Aggregates', 'region', '2021-12-12 01:53:15'),
(186, 47, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(187, 47, 'NA', 'NA', 'Aggregates', 'incomeLevel', '2021-12-12 01:53:15'),
(188, 47, '', '', 'Aggregates', 'lendingType', '2021-12-12 01:53:15'),
(189, 48, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(190, 48, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(191, 48, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(192, 48, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(193, 49, 'ECS', 'Z7', 'Europe & Central Asia', 'region', '2021-12-12 01:53:15'),
(194, 49, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(195, 49, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(196, 49, 'LNX', 'XX', 'Not classified', 'lendingType', '2021-12-12 01:53:15'),
(197, 50, 'LCN', 'ZJ', 'Latin America & Caribbean ', 'region', '2021-12-12 01:53:15'),
(198, 50, '', '', '', 'adminregion', '2021-12-12 01:53:15'),
(199, 50, 'HIC', 'XD', 'High income', 'incomeLevel', '2021-12-12 01:53:15'),
(200, 50, 'IBD', 'XF', 'IBRD', 'lendingType', '2021-12-12 01:53:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `country_details`
--
ALTER TABLE `country_details`
  ADD PRIMARY KEY (`details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `country_details`
--
ALTER TABLE `country_details`
  MODIFY `details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
