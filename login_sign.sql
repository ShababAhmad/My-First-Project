-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2016 at 12:52 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login&sign`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `login`(IN `name` VARCHAR(20), IN `pass` INT(15))
    NO SQL
select * from user where name=name1 and pass=pass1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Signup`(IN `name` VARCHAR(20), IN `pass` VARCHAR(25), IN `address` VARCHAR(25), IN `email` VARCHAR(15), IN `contact` INT(15))
    NO SQL
insert into user(name1,pass1,address,email,contact) values(name,pass,address,email,contact)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `userAC`(IN `name` VARCHAR(20), IN `pass` VARCHAR(15))
    NO SQL
select *from user where name=name1 and pass=pass1$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `GroupID` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userID`, `Username`, `Password`, `GroupID`) VALUES
(1, 'Jahanzaib', '1234', 1),
(2, 'khan', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `oname` varchar(30) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `description` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL,
  `path2` varchar(100) NOT NULL,
  `path3` varchar(100) NOT NULL,
  `path4` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cat_ID` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `oname`, `userId`, `pname`, `price`, `description`, `path`, `path2`, `path3`, `path4`, `category`, `cat_ID`, `member_ID`, `date`) VALUES
(3, 'Faseeh', 1, 'Bat', 600, 'Adidas', 'Uploads/14826173451.jpg', 'Uploads/14826173452.jpg', 'Uploads/14826173453.jpg', 'Uploads/14826173454.jpg', 'sports', 0, 0, '0000-00-00'),
(4, 'Usama', 3, 'Watch', 3000, 'Cisco', 'Uploads/14826174411.jpg', 'Uploads/14826174412.jpg', 'Uploads/14826174413.jpg', 'Uploads/14826174414.jpg', 'electronics', 0, 0, '0000-00-00'),
(5, 'Khubaib', 2, 'Bike', 120000, 'Honda', 'Uploads/14826175221.jpg', 'Uploads/14826175222.jpg', 'Uploads/14826175223.jpg', 'Uploads/14826175224.jpg', 'other', 0, 0, '0000-00-00'),
(6, 'Hassan', 4, 'Car', 1500000, 'Honda Civic', 'Uploads/14826176071.jpg', 'Uploads/14826176072.jpg', 'Uploads/14826176073.jpg', 'Uploads/14826176074.jpg', 'other', 0, 0, '0000-00-00'),
(9, 'Zafar', 5, 'Shirt', 900, 'Armani', 'Uploads/14826178751.jpg', 'Uploads/14826178752.jpg', 'Uploads/14826178753.jpg', 'Uploads/14826178754.jpg', 'fashion', 0, 0, '0000-00-00'),
(10, 'Usama', 3, 'Laptop', 45000, 'HP', 'Uploads/14827338831.jpg', 'Uploads/14827338832.jpg', 'Uploads/14827338833.jpg', 'Uploads/14827338834.jpg', 'electronics', 0, 0, '0000-00-00'),
(11, 'Usama', 3, 'Football', 350, 'Adidas', 'Uploads/14827847671.jpg', 'Uploads/14827847672.jpg', 'Uploads/14827847673.jpg', 'Uploads/14827847674.jpg', 'sports', 0, 0, '0000-00-00'),
(12, 'Hassan', 4, 'Car', 1500000, 'Honda Civic', 'Uploads/14827851921.jpg', 'Uploads/14827851922.jpg', 'Uploads/14827851923.jpg', 'Uploads/14827851924.jpg', 'other', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(6) NOT NULL AUTO_INCREMENT,
  `name1` varchar(20) NOT NULL,
  `pass1` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(16) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `RegStatus` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name1`, `pass1`, `address`, `email`, `contact`, `FullName`, `GroupID`, `RegStatus`, `Date`) VALUES
(1, 'faseehsatti', '9090', 'rawalchowk', 'faessh@gmailcom', 2147483647, 'Raja Faseeh', 1, 0, '2016-12-24'),
(2, 'Khubaib', 'khan12', 'kahuta', 'khan12@gmail.com', 7897897, 'Khubaib Islam', 0, 1, '2016-12-01'),
(3, 'Usama', 'shah13', 'alberuni colony', 'usama.shah@gmail.com', 5647657, 'Syed Usama Ali', 0, 1, '2016-12-08'),
(4, 'Cpt Hassan', '09809', 'dhokesyedanrawalpindi', 'hassan65@yahoo.com', 2147483647, 'Muhammad Hassan', 0, 1, '2016-12-10'),
(5, 'zafar Supari', '897897', 'dhokesyedanrawalpindi', 'zafar65@yahoo.c', 55075773, 'Zafar Khan', 0, 1, '2016-12-15'),
(7, 'Shabab', '123456', 'Kashmir', 'shabab@yahoo.com', 0, 'Shabab Ahmed', 0, 0, '2016-12-25'),
(8, 'Jahanzaib', '1996', 'Rwp', 'jahanzaibmalik465@yahoo.com', 9278234, 'Malik Jahanzaib', 0, 1, '2016-12-25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `user_FK` FOREIGN KEY (`userId`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
