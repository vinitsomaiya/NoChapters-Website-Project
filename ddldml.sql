--CST8285-313 
--project: Assignment 2
--author: Web-Dev-#9 Kyoko Ikari

--
-- database: `nochapters`  
--
CREATE DATABASE nochapters;
CREATE USER 'appuser'@'localhost' IDENTIFIED BY 'password'; 
GRANT ALL PRIVILEGES ON nochapters.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

USE nochapters;

--
-- Table structure for table `users`
--
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Inserting data for table `users`
--
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES 
('1', 'Kyoko Ikari', 'ikar0001@algonquinlive.com', 'KyokoIkari1'), 
('2', 'Koto Ikari', 'koto@gmail.com', 'KotoIkari2');

--
-- Table structure for table `novels`
--
CREATE TABLE IF NOT EXISTS `novels` (
  `novel_id` int(20) NOT NULL AUTO_INCREMENT,
  `novel_title` varchar(50) NOT NULL,
  `novel_author` varchar(50) NOT NULL,
  `novel_publish_year` int(6) NOT NULl,
  `user_id` int(20) NOT NULL,
  PRIMARY KEY (`novel_id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Inserting data for table `novels`
--
INSERT INTO `novels` (`novel_id`, `novel_title`, `novel_author`, `novel_publish_year`, `user_id`) VALUES
(1, 'Seishun Buta Yaro', 'Keji Mizoguchi','1998', '1'),
(2, 'Three Men in a Boat', 'Jerome K.','1998', '1'),
(3, 'Classroom of the Elite', 'Shogo Kinugasa', '1998', '2'),
(4, 'Norwegian Wood', 'Haruki Murakami', '1998', '1');

