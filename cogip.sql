-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2021 at 02:05 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pwr` varchar(255) NOT NULL,
  `function` set('manager','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `comp_id` int(32) NOT NULL,
  `comp_name` varchar(256) NOT NULL,
  `comp_country` varchar(256) NOT NULL,
  `comp_VAT` varchar(64) NOT NULL,
  `comp_type` set('client','provider') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Database of company';

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`comp_id`, `comp_name`, `comp_country`, `comp_VAT`, `comp_type`) VALUES
(1, 'Flipopia', 'Egypt', '01-778-8864', 'client'),
(2, 'Oozz', 'Argentina', '17-474-9357', 'client'),
(3, 'Gabtune', 'Russia', '67-699-2732', 'client'),
(4, 'Twimbo', 'Jamaica', '12-338-9064', 'client'),
(5, 'Podcat', 'Philippines', '91-208-5789', 'provider'),
(6, 'Dynava', 'Indonesia', '53-719-6072', 'provider'),
(7, 'Wordify', 'China', '97-452-9229', 'client'),
(8, 'Trudeo', 'China', '47-509-6881', 'client'),
(9, 'Yambee', 'Vietnam', '47-166-4996', 'client'),
(10, 'Brainsphere', 'China', '66-159-5022', 'client'),
(11, 'Rhynyx', 'China', '24-873-7939', 'client'),
(12, 'Topiclounge', 'Indonesia', '80-776-4045', 'client'),
(13, 'Zoovu', 'Brazil', '07-506-1166', 'client'),
(14, 'Youtags', 'Indonesia', '67-580-3674', 'client'),
(15, 'Oba', 'Yemen', '88-839-6931', 'provider'),
(16, 'Kare', 'Canada', '00-214-0594', 'client'),
(17, 'Eimbee', 'Russia', '11-252-8668', 'provider'),
(18, 'Pixope', 'Bhutan', '59-755-2435', 'provider'),
(19, 'Meedoo', 'Indonesia', '17-837-2111', 'client'),
(20, 'Meedoo', 'Canada', '12-535-9657', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `contact_persons`
--

DROP TABLE IF EXISTS `contact_persons`;
CREATE TABLE `contact_persons` (
  `person_id` int(11) NOT NULL,
  `person_first_name` varchar(128) NOT NULL,
  `person_last_name` varchar(128) NOT NULL,
  `person_email` varchar(255) NOT NULL,
  `comp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_persons`
--

INSERT INTO `contact_persons` (`person_id`, `person_first_name`, `person_last_name`, `person_email`, `comp_id`) VALUES
(1, 'Madonna', 'Phillott', 'mphillott0@mozilla.org', 4),
(2, 'Carleen', 'Le Grand', 'clegrand1@fc2.com', 10),
(3, 'Shelby', 'Blasli', 'sblasli2@livejournal.com', 5),
(4, 'Gussy', 'Purvis', 'gpurvis3@webeden.co.uk', 2),
(5, 'Jason', 'Binnion', 'jbinnion4@goo.gl', 16),
(6, 'Harris', 'Taylo', 'htaylo5@discuz.net', 1),
(7, 'Vernor', 'Peters', 'vpeters6@51.la', 20),
(8, 'Elmo', 'Boost', 'eboost7@paypal.com', 19),
(9, 'Emmalee', 'O\' Liddy', 'eoliddy8@flavors.me', 17),
(10, 'Cyrille', 'Dunnan', 'cdunnan9@nifty.com', 8),
(11, 'Zonnya', 'Klemz', 'zklemza@wunderground.com', 14),
(12, 'Lorilyn', 'Drabble', 'ldrabbleb@angelfire.com', 16),
(13, 'Flore', 'Rayhill', 'frayhillc@yandex.ru', 9),
(14, 'Liz', 'Climie', 'lclimied@sciencedirect.com', 3),
(15, 'Dino', 'Bougourd', 'dbougourde@1688.com', 6),
(16, 'Riva', 'Petteford', 'rpettefordf@newsvine.com', 7),
(17, 'Antonina', 'Forsaith', 'aforsaithg@marketwatch.com', 11),
(18, 'Sutherlan', 'Bindin', 'sbindinh@geocities.jp', 12),
(19, 'Giacopo', 'Daniels', 'gdanielsi@telegraph.co.uk', 13),
(20, 'Sibbie', 'Jessard', 'sjessardj@furl.net', 18),
(21, 'Adolphe', 'Dorn', 'adornk@ed.gov', 8),
(22, 'Loren', 'Yuryatin', 'lyuryatinl@pen.io', 5),
(23, 'Mohandis', 'Boundley', 'mboundleym@ca.gov', 17),
(24, 'Kaleena', 'Studdert', 'kstuddertn@linkedin.com', 13),
(25, 'Bearnard', 'Squibbes', 'bsquibbeso@youku.com', 15),
(26, 'Vyky', 'Bellas', 'vbellasp@redcross.org', 7),
(27, 'Kiel', 'Ewestace', 'kewestaceq@mapquest.com', 14),
(28, 'Rasla', 'Aked', 'rakedr@tiny.cc', 12),
(29, 'Camella', 'Jest', 'cjests@patch.com', 4),
(30, 'Kelcey', 'Francillo', 'kfrancillot@independent.co.uk', 6);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
CREATE TABLE `invoices` (
  `invoice_num` varchar(64) DEFAULT NULL,
  `invoice_date` date NOT NULL,
  `comp_VAT` varchar(64) NOT NULL,
  `comp_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`invoice_num`, `invoice_date`, `comp_VAT`, `comp_id`, `person_id`, `invoice_id`) VALUES
('1', '2019-04-20', '12-338-9064', 4, 1, 1),
('2', '2020-02-05', '66-159-5022', 10, 2, 2),
('3', '2019-03-06', '91-208-5789', 5, 3, 3),
('4', '2019-02-19', '17-474-9357', 2, 4, 4),
('5', '2021-03-12', '00-214-0594', 16, 5, 5),
('6', '2021-02-22', '01-778-8864', 1, 6, 6),
('7', '2019-05-02', '12-535-9657', 20, 7, 7),
('8', '2020-07-05', '17-837-2111', 19, 8, 8),
('9', '2019-05-29', '11-252-8668', 17, 9, 9),
('10', '2020-09-12', '47-509-6881', 8, 10, 10),
('11', '2020-06-21', '67-580-3674', 14, 11, 11),
('12', '2020-03-14', '00-214-0594', 16, 12, 12),
('13', '2020-04-03', '47-166-4996', 9, 13, 13),
('14', '2019-05-15', '67-699-2732', 3, 14, 14),
('15', '2020-06-13', '53-719-6072', 6, 15, 15),
('16', '2020-02-08', '97-452-9229', 7, 16, 16),
('17', '2019-10-23', '24-873-7939', 11, 17, 17),
('18', '2020-08-26', '80-776-4045', 12, 18, 18),
('19', '2020-11-05', '07-506-1166', 13, 19, 19),
('20', '2019-08-14', '59-755-2435', 18, 20, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`comp_id`),
  ADD KEY `comp_VAT` (`comp_VAT`);

--
-- Indexes for table `contact_persons`
--
ALTER TABLE `contact_persons`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `comp_id` (`comp_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `VAT` (`comp_VAT`),
  ADD KEY `comp_id` (`comp_id`),
  ADD KEY `person_id` (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `comp_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact_persons`
--
ALTER TABLE `contact_persons`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_persons`
--
ALTER TABLE `contact_persons`
  ADD CONSTRAINT `contact_persons_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `companies` (`comp_id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`comp_id`) REFERENCES `companies` (`comp_id`),
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`person_id`) REFERENCES `contact_persons` (`person_id`),
  ADD CONSTRAINT `invoices_ibfk_4` FOREIGN KEY (`comp_VAT`) REFERENCES `companies` (`comp_VAT`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
