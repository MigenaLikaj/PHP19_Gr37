--
-- Host: 127.0.0.1    Database: comment
-- ------------------------------------------------------
-- Server version       5.1.51-debug-log

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Database: `comment`
--
-- Table structure for table `user_comment`
--
CREATE TABLE IF NOT EXISTS `user_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT ,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,

PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;

INSERT INTO `user_comment` (`id`,  `email`, `content`) VALUES
(1, 'flutura.haxhaj@studentet.uni-pr.edu',  'Amazing page!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
