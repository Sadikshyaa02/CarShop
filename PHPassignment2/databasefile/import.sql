-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `articleId` int NOT NULL AUTO_INCREMENT,
  `articleTitle` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `articleContent` varchar(200) NOT NULL,
  `articleName` int NOT NULL,
  PRIMARY KEY (`articleId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturerId` int DEFAULT NULL,
  `description` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cars` (`id`, `name`, `price`, `manufacturerId`, `description`) VALUES
(1,	'XJS',	'15000',	2,	'Made in 1996, available in green and black.'),
(3,	'E-Type',	'30000',	2,	'Excellent condition used E-Type, only 20,000 miles. '),
(4,	'280SL',	'35000',	3,	'Gold, in excellent condition'),
(5,	'300SL',	'14000',	3,	'1992 model with just 70,000 miles.'),
(6,	'DB4',	'99000',	4,	'Classic DB4. Minor scratches but otherwise flawless condition. ');

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE `enquiries` (
  `enquiry_jd` int NOT NULL AUTO_INCREMENT,
  `customerName` varchar(200) NOT NULL,
  `enquiry` varchar(200) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  PRIMARY KEY (`enquiry_jd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `manufacturers`;
CREATE TABLE `manufacturers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(2,	'Jaguar'),
(3,	'Mercedes'),
(4,	'Aston Martin');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_First_Name` varchar(200) NOT NULL,
  `user_Last_Name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `emailAddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- 2022-11-08 05:38:20
