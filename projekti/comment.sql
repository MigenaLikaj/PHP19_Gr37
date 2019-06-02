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