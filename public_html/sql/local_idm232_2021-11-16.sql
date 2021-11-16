# ************************************************************
# Sequel Ace SQL dump
# Version 3038
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: mysql (MySQL 5.7.32)
# Database: local_idm232
# Generation Time: 2021-11-16 19:12:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table appointments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `appointments`;

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_time` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `services` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_relationship` (`customer_id`),
  KEY `user_relationship` (`user_id`),
  CONSTRAINT `customer_relationship` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_relationship` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(250) NOT NULL,
  `file_title` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `file_path`, `file_title`, `date_created`)
VALUES
	(27,'/dist/images/admin-ajax-copy-png','admin-ajax-copy-png','2021-11-16 18:54:23'),
	(28,'/dist/images/admin-ajax-copy-png','admin-ajax-copy-png','2021-11-16 18:55:25'),
	(29,'/dist/images/n-a','n-a','2021-11-16 18:57:45'),
	(30,'/dist/images/n-a','n-a','2021-11-16 18:58:31'),
	(31,'/dist/images/n-a','n-a','2021-11-16 18:58:49'),
	(32,'/dist/images/n-a','n-a','2021-11-16 18:59:04'),
	(33,'/dist/images/n-a','n-a','2021-11-16 18:59:27'),
	(34,'/dist/images/n-a','n-a','2021-11-16 19:00:17'),
	(35,'/dist/images/admin-ajax-copy-png','admin-ajax-copy-png','2021-11-16 19:00:39'),
	(36,'/dist/images/admin-ajax copy.png','admin-ajax copy.png','2021-11-16 19:02:37'),
	(37,'/dist/images/admin-ajax-copy-png','admin-ajax-copy-png','2021-11-16 19:08:09'),
	(38,'/dist/images/admin-ajax-copy-png','admin-ajax-copy-png','2021-11-16 19:08:09');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `price` float NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `file_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role`, `first_name`, `last_name`, `email`, `phone`, `password`, `date_created`, `date_updated`)
VALUES
	(4,'employee','Kasey} asdfasfa','Files','kasey@kasey.com','219-392-30391','drexel23','2021-11-05 03:14:26','2021-11-05 03:36:55'),
	(5,'employee','Meg} ','Doe','meg@meg.com','214-323-1211','$2y$10$U/4fzRxDvgfh2NNyvdPJeuRWWSbVtK7HnNA3foHQA3qBzd2EaNgqW','2021-11-05 03:31:09','2021-11-05 03:31:09'),
	(6,'admin','Paul','Phan','paul@mrpaulphan.com','215-340-2349','$2y$10$IWeVgA1EqzzxKC/X55wBBe.bAeCuRoOj5i/EZ97JRgeyogwnj6zrW','2021-11-10 00:18:54','2021-11-10 00:18:54');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
