-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 08:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceh2_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idUser` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `comment` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `idHistory` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idProduct` int(11) DEFAULT NULL,
  `shipping_address` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_desc` varchar(150) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `role_id` varchar(50) DEFAULT NULL,
  `user_balance` int(11) DEFAULT NULL,
  `credit_card` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`idHistory`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `idHistory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `Product` (`product_name`, `product_desc`, `product_image`, `product_price`) VALUES
('Lyocell-blend Flounced Dress', 'Short, off-the-shoulder flounced dress woven in a textured Tencel® lyocell blend with narrow adjustable shoulder straps and short sleeves with elastication at the top. Lined.', 'T001.jpg', 150),
('Pleated Maxi Dress', 'Maxi dress in soft jersey with a V-neck at the front and low-cut neckline at the back. Wide shoulder straps that cross at the back, an elasticated seam at the waist and a long, pleated, heavily draping skirt. Lined.', 'T002.jpg', 160),
('Sleeveless Jersey Dress', 'Short, sleeveless dress in sturdy jersey with a low-cut back, seam at the waist and flared skirt. The polyester content of the dress is partly recycled.', 'T003.jpg', 150),
('Tie-belt Dress', 'Straight-cut, calf-length dress in woven fabric with a grandad collar and covered buttons at the top. Detachable tie belt at the waist and long, slightly wider sleeves with covered buttons at the narrow cuffs. Unlined.', 'T004.jpg', 165),
('Fine-knit Dress', 'Calf-length dress in a soft, fine-knit viscose blend a round neckline, short sleeves and flared skirt. Unlined.', 'T005.jpg', 175),
('Patterned Long Dress', 'Long, sleeveless dress in patterned satin with a gathered, elasticated neckline, short, double shoulder straps and a seam at the waist with a detachable tie belt. Lined.', 'T006.jpg', 180),
('V-neck Jersey Dress', 'Short dress in patterned jersey with a draped V-neck and sewn-in wrapover at the top. Long sleeves, cuffs with metal buttons, an elasticated seam at the waist and a gently flared skirt. Unlined.', 'T007.jpg', 190),
('Cotton Twill Boiler Suit', 'Long-sleeved boiler suit in cotton twill with notch lapels, a V-neck and buttons down the front. Flap chest pockets, patch front pockets, a detachable tie belt at the waist and straight, ankle-length legs with elasticated hems.', 'T008.jpg', 160),
('Sleeveless Jumpsuit', 'Sleeveless jumpsuit in woven fabric with notch lapels and a wrapover front with a concealed button. Seam and detachable tie belt at the waist, side pockets, fake back pockets, and tapered, ankle-length leg with slits at the hems.', 'T009.jpg', 175),
('Ankle-length Lyocell Jumpsuit', 'Ankle-length jumpsuit woven in a Tencel® lyocell blend with a V-neck at the back, and twisted rope shoulder straps that cross and tie at the back. Seam at the waist with covered elastication at the back, a low crotch and side pockets. Pleats at the waist and straight, softly draping legs. Lined.', 'T010.jpg', 160);