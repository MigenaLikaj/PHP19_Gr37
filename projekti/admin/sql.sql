--
-- Host: 127.0.0.1    Database: elearning
-- ------------------------------------------------------
-- Server version       5.1.51-debug-log

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Database: `elearning`
--
-- Table structure for table `admins`
--
CREATE TABLE IF NOT EXISTS `admins` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_fname` text NOT NULL,
  `user_lname` text NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;


INSERT INTO `admins` (`user_id`, `user_fname`, `user_lname`, `user_name`, `user_email`, `user_pass`, `about`, `admin`) VALUES
(1, 'Flutura', 'Haxhaj ', 'FluturaH', 'flutura.haxhaj@studentet.uni-pr.edu', '39dcaf7a053dc372fbc391d4e6b5d693', '', 1);


--
-- Table structure for table `users`
--
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'MigenaL', 'migena.likaj@studentet.uni-pr.edu',   '5ec829debe54b19a5f78d9a65b900a39');

--
-- Table structure for table `books`
--
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL,
   `price` integer NOT NULL,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `books` (`id`, `name`, `description`, `category`, `price`) VALUES
(1,'Sikur te isha djale, Haki Stermilli','Jeta ime per te tjeret, ndoshta nuk, nuk e vlen
 asnji dysh, por per mue ka rendesi, se asht imja, se mund te pershkohet neper faza te
 ndryshme interesante dhe dikur, tue i kendue ne keto flete gezimet ose hidherimet e mia, 
 do te kenaqem ose do te pezmatohem.','Roman','15');
 
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
