-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 08:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshopmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `submit_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`submit_id`, `name`, `email`, `message`) VALUES
(1, 'rick', 'test@gmail.com', 'test test 123'),
(2, 'gavin gerardus johannus', 'gavin@gmail.com', 'hihi'),
(3, 'justin verdoorn', 'justin@gmail.com', 'vuurtoren'),
(4, 'test', 'test', 'test'),
(5, 'mama', 'mama@gmail.com', 'test123'),
(6, 'rene', 'rene@gmail.com', 'test123'),
(7, 'test', 'test', 'test'),
(8, 'test', 'test', 'test567'),
(9, '', '', ''),
(10, 'ttt', 'ttt', 'ttt'),
(11, 'randyanus', 'randy@anus.com', 'randy gets pounded from behind.'),
(12, 'Tesssssst', 'Jduxennd', ' Xixndnd'),
(13, 'Justin', 'justinius@justinius.com', 'HALLO !'),
(14, '', '', ''),
(15, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(16, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(17, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(18, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(19, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(20, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(21, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(22, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(23, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(24, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(25, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(26, 'Randy Anus', 'RandyAnus@anus.co.uk.anus', 'Hi, i am Randy Anus. i would like to work for the BIG SNACK.\n\n'),
(27, 'YOURI', '1', '2'),
(28, 'rick', 'rrr', 'rrrr'),
(29, 'rick', 'rrr', 'rrr'),
(30, 'test', 'ssss', 'tttt');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(2, 'rickie', '$2y$10$WwaRGmw.qYwYXpUO9ofDq.BZu8fmtr3fX4h1sJRaBlmlOB/8zmvWW');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `picture` varchar(150) NOT NULL,
  `prijs` decimal(5,2) NOT NULL,
  `voorraad` int(4) NOT NULL,
  `categorie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `product_name`, `picture`, `prijs`, `voorraad`, `categorie`) VALUES
(1, 'frikandel', 'https://ntf.blob.core.windows.net/pictures/2-635950047784772442.jpg', '2.00', 100, 'snacks'),
(2, 'frikandel met', 'https://ntf.blob.core.windows.net/pictures/2-635937140738674763.jpg', '2.30', 100, 'snacks'),
(4, 'frikandel speciaal', 'https://ntf.blob.core.windows.net/pictures/2-635900953548353433.jpg', '2.50', 100, 'snacks'),
(5, 'frikandel xxl', 'https://ntf.blob.core.windows.net/pictures/2-636801236475550983.jpg', '3.50', 100, 'snacks'),
(6, 'viandel', 'https://ntf.blob.core.windows.net/pictures/2-636801238163138971.jpg', '2.50', 100, 'snacks'),
(7, 'kipfrikandel', 'https://ntf.blob.core.windows.net/pictures/2-635950047784772442.jpg', '2.00', 100, 'snacks'),
(8, 'friet zonder', 'https://ntf.blob.core.windows.net/pictures/2-635834466140009824.jpg', '2.25', 100, 'friet'),
(9, 'friet mayonaise', 'https://ntf.blob.core.windows.net/pictures/2-635835164700267361.jpg', '2.75', 100, 'friet'),
(10, 'friet curry', 'https://ntf.blob.core.windows.net/pictures/2-635835164996960476.jpg', '2.75', 100, 'friet'),
(11, 'friet pindasaus', 'https://ntf.blob.core.windows.net/pictures/2-635835165807199590.jpg', '3.25', 100, 'friet'),
(12, 'friet speciaal', 'https://ntf.blob.core.windows.net/pictures/2-635835165557096909.jpg', '3.25', 100, 'friet'),
(13, 'friet oorlog', 'https://ntf.blob.core.windows.net/pictures/2-635835166113631487.jpg', '3.25', 100, 'friet'),
(14, 'waterfiets', 'https://ntf.blob.core.windows.net/pictures/2-635875816594619661.jpg', '5.75', 100, 'waterfiets'),
(15, 'waterfiets groot', 'https://ntf.blob.core.windows.net/pictures/2-635875816594619661.jpg', '6.50', 100, 'waterfiets'),
(16, 'gezinszak friet 2 per', 'https://ntf.blob.core.windows.net/pictures/2-635876062097650883.jpg', '4.50', 100, 'gezinszak friet'),
(17, 'gezinszak friet 3 per', 'https://ntf.blob.core.windows.net/pictures/2-636802860172686142.jpg', '6.00', 100, 'gezinszak friet'),
(18, 'gezinszak friet 4 per', 'https://ntf.blob.core.windows.net/pictures/2-636802860172686142.jpg', '7.25', 100, 'gezinszak friet'),
(19, 'gezinszak friet 5 per', 'https://ntf.blob.core.windows.net/pictures/2-636802860172686142.jpg', '8.50', 100, 'gezinszak friet'),
(20, 'kipcorn', 'https://ntf.blob.core.windows.net/pictures/2-635834408467347400.jpg', '2.50', 100, 'kipsnacks'),
(21, 'kipfingers', 'https://ntf.blob.core.windows.net/pictures/2-635906984199140559.jpg', '3.50', 100, 'kipsnacks'),
(22, 'kippnuggets 6 stuks', 'https://ntf.blob.core.windows.net/pictures/2-635906978560467136.jpg', '3.50', 100, 'kipsnacks'),
(23, 'hotwings', 'https://ntf.blob.core.windows.net/pictures/2-635816336431847934.jpg', '4.95', 100, 'kipsnacks'),
(24, 'Chicken burger', 'https://ntf.blob.core.windows.net/pictures/2-635937274451230171.jpg', '4.50', 100, 'hamburgers'),
(25, 'hamburger speciaal', 'https://ntf.blob.core.windows.net/pictures/2-635815457592821750.jpg', '3.95', 100, 'hamburgers'),
(26, 'cheese burger', 'https://ntf.blob.core.windows.net/pictures/2-635816183463463106.jpg', '4.50', 100, 'hamburgers'),
(27, 'bacon burger', 'https://ntf.blob.core.windows.net/pictures/2-635816198065489164.jpg', '4.95', 100, 'hamburgers'),
(28, 'hawai burger', 'https://ntf.blob.core.windows.net/pictures/2-635815455218151047.jpg', '4.95', 100, 'hamburgers'),
(29, 'sate burger', 'https://ntf.blob.core.windows.net/pictures/2-635816197554601135.jpg', '4.50', 100, 'hamburgers'),
(30, 'pizza margherita', 'https://images.newyorkpizza.nl/Products/Original/Margherita-7253.png', '8.50', 100, 'pizza'),
(31, 'pizza mozzarella', 'https://image.pngaaa.com/838/1282838-middle.png', '10.00', 100, 'pizza'),
(32, 'pizza salami', 'https://images.newyorkpizza.nl/Products/Original/Salami-7257.png', '9.50', 100, 'pizza'),
(33, 'pizza bolognese', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRp7syMR0zGI_cJ5d4cS0VXiRXiytNxf8c8rA&usqp=CAU', '10.50', 100, 'pizza'),
(34, 'pizza shoarma', 'https://static.takeaway.com/images/restaurants/nl/O11P1O5N/products/pizzashoarma_kebabpoint-min.png?timestamp=1644346757', '10.50', 100, 'pizza'),
(35, 'pizza hot chicken', 'https://cdn.sitedish.nl/gouda.pizzeriaosdorp.nl/img/gerechten/5fb4ed2717201_shoarma.png', '12.00', 100, 'pizza'),
(36, 'halve kip menu', 'https://ntf.blob.core.windows.net/pictures/2-635835176031850451.jpg', '10.50', 100, 'menus'),
(37, 'kipschnitzel menu', 'https://ntf.blob.core.windows.net/pictures/2-635835179288601498.jpg', '10.50', 100, 'menus'),
(38, 'karbonade menu', 'https://ntf.blob.core.windows.net/pictures/2-635835184528132957.jpg', '10.50', 100, 'menus'),
(39, 'shaslick menu', 'https://ntf.blob.core.windows.net/pictures/2-635936431217214870.jpg', '10.50', 100, 'menus'),
(40, 'kipsate menu', 'https://ntf.blob.core.windows.net/pictures/2-635835169190871555.jpg', '10.50', 100, 'menus'),
(41, 'varkenschnitzel menu', 'https://ntf.blob.core.windows.net/pictures/2-635835179288601498.jpg', '10.50', 100, 'menus'),
(42, 'broodje warm vlees', 'https://ntf.blob.core.windows.net/pictures/2-635823122156263205.jpg', '4.95', 100, 'broodjes'),
(43, 'broodje shoarma', 'https://ntf.blob.core.windows.net/pictures/2-635835183579393022.jpg', '6.50', 100, 'broodjes'),
(44, 'broodje shoarma groot', 'https://ntf.blob.core.windows.net/pictures/2-635835183579393022.jpg', '7.50', 100, 'broodjes'),
(45, 'broodje shoarma hawai', 'https://ntf.blob.core.windows.net/pictures/2-636797846072713930.jpg', '7.00', 100, 'broodjes'),
(46, 'pita kaas', 'https://ntf.blob.core.windows.net/pictures/2-635820596478093117.jpg', '2.75', 100, 'broodjes'),
(47, 'pita hawai', 'https://ntf.blob.core.windows.net/pictures/2-635820596478093117.jpg', '3.25', 100, 'broodjes'),
(48, 'durum doner', 'https://ntf.blob.core.windows.net/pictures/2-636791752465020904.jpg', '6.95', 100, 'durums'),
(49, 'durum shoarma', 'https://ntf.blob.core.windows.net/pictures/2-636791752465020904.jpg', '6.95', 100, 'durums'),
(50, 'durum kipdoner', 'https://ntf.blob.core.windows.net/pictures/2-636791752465020904.jpg', '6.95', 100, 'durums'),
(51, 'durum kipfilet', 'https://ntf.blob.core.windows.net/pictures/2-636791752465020904.jpg', '7.95', 100, 'durums'),
(55, 'bakje frietsaus', 'https://broodje-bram.nl/wp-content/uploads/2020/08/mayonaise.png', '1.75', 100, 'sauzen'),
(56, 'bakje pindasaus', 'https://www.t-hepke.nl/wp-content/uploads/2020/03/pindasaus.png', '1.75', 100, 'sauzen'),
(57, 'bakje curry', 'https://www.t-hepke.nl/wp-content/uploads/2020/03/curry_1.jpg', '1.75', 100, 'sauzen'),
(58, 'bakje ketchup', 'https://beringerzandcatering.nl/wp-content/uploads/2021/03/Ketchup-416x416.jpg', '1.75', 100, 'sauzen'),
(59, 'bakje speciaal', 'https://bestellen.jordysplaza.nl/wp-content/uploads/2019/07/speciaal-met-ui-png.png', '2.00', 100, 'sauzen'),
(60, 'softijs klein', 'http://nicice.nl/files/tmp/280x280-Vierkantebeker-1.png', '1.50', 100, 'ijs'),
(61, 'softijs medium', 'https://www.friendsmorethanice.nl/foodticket/images/6337/_cms1644596654__tmp_1000x1000-radartoren-1.png', '1.75', 100, 'ijs'),
(62, 'softijs groot', 'http://www.softijsverkopen.nl/wp-content/uploads/2013/05/banner_image_22.png', '2.00', 100, 'ijs'),
(66, 'aarbei milkshake', 'https://ntf.blob.core.windows.net/pictures/2-636875711531610395.jpg', '2.50', 100, 'milkshake'),
(67, 'vanilla milkshake', 'https://ntf.blob.core.windows.net/pictures/2-636875711531610395.jpg', '2.50', 100, 'milkshake'),
(68, 'chcoclade milkshake', 'https://ntf.blob.core.windows.net/pictures/2-636875711531610395.jpg', '2.50', 100, 'milkshake'),
(69, 'banaan milkshake', 'https://ntf.blob.core.windows.net/pictures/2-636875711531610395.jpg', '10.10', 10, 'milkshake'),
(70, 'cola zero', 'https://ntf.blob.core.windows.net/pictures/2-636613870251076520.jpg', '2.00', 100, 'dranken'),
(71, 'fanta', 'https://ntf.blob.core.windows.net/pictures/2-636613872763165325.jpg', '2.00', 100, 'dranken'),
(72, 'cassis', 'https://ntf.blob.core.windows.net/pictures/2-636613871321898459.jpg', '2.00', 100, 'dranken'),
(73, 'lipton ice tea', 'https://ntf.blob.core.windows.net/pictures/2-635811068328454363.jpg', '2.00', 100, 'dranken'),
(74, 'spa blauw', 'https://ntf.blob.core.windows.net/pictures/2-635941609289737132.jpg', '2.25', 100, 'dranken'),
(75, 'fristi', 'https://ntf.blob.core.windows.net/pictures/2-635811063105015703.jpg', '2.25', 100, 'dranken'),
(76, 'AA drink', 'https://ntf.blob.core.windows.net/pictures/2-635810328175399067.jpg', '2.50', 100, 'dranken'),
(77, '7-up', 'https://ntf.blob.core.windows.net/pictures/2-635941623183826378.jpg', '2.00', 100, 'dranken'),
(142, 'RandyAnus', 'https://assets-willemwever.kro-ncrv.nl/public/styles/hero_small/public/lighthouse-1775682_960_720.png?h=c71d0c67&itok=RYs4T3l4', '69.00', 69, 'dranken'),
(143, 'Gavin', 'Sex', '69.00', 69, 'Sexy'),
(145, 'Justanus Bieber', 'https://i.pinimg.com/originals/72/37/ef/7237efd3e310824b8ed82e6b427e4e6b.jpg', '69.00', 420, 'dranken'),
(147, 'yyyyyy', 'https://i.ytimg.com/vi/nED8F6dnsTc/hqdefault.jpg', '69.00', 69, 'dranken'),
(148, 'aaa', 'aaa', '0.00', 0, 'aaa'),
(149, 'abb', 'bbb', '0.00', 0, 'bbb'),
(150, 'ccc', 'ccc', '0.00', 0, 'ccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`submit_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `submit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
