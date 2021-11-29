# ************************************************************
# Sequel Ace SQL dump
# Version 2077
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 5.7.26)
# Database: local_idm232
# Generation Time: 2021-11-29 22:28:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table appointments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `appointments`;

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointment_time` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_relationship` (`customer_id`),
  CONSTRAINT `customer_relationship` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;

INSERT INTO `appointments` (`id`, `appointment_time`, `customer_id`, `status`, `service_id`, `date_created`, `date_updated`)
VALUES
	(1,'2021-11-29 16:57:00',42,'pending',1,'2021-11-29 20:07:56','2021-11-29 20:07:56'),
	(2,'2021-11-29 16:57:00',42,'pending',1,'2021-11-29 20:08:13','2021-11-29 20:08:13'),
	(3,'2021-11-29 16:57:00',42,'approved',1,'2021-11-29 20:09:01','2021-11-29 20:09:01'),
	(4,'2021-11-29 16:57:00',42,'pending',1,'2021-11-29 20:11:44','2021-11-29 20:11:44');

/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `date_created`, `date_updated`)
VALUES
	(1,'Adria','Stevens','euismod.et.commodo@icloud.couk','1-377-962-3967','2021-11-29 14:26:10','2021-11-29 22:04:18'),
	(2,'Herman','Mcmahon','nunc.ac@google.com','1-198-938-7793','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(3,'Audrey','Goff','sagittis.semper@yahoo.com','1-423-365-8866','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(4,'Daquan','Mann','semper.et@google.net','1-274-295-4823','2021-11-29 14:26:10','2021-11-29 22:04:07'),
	(5,'Galena','Rivas','lorem.semper@protonmail.couk','1-353-847-2837','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(6,'Garrison','Garza','lobortis.quis@google.net','1-761-655-5234','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(7,'Stewart','Green','lectus@yahoo.org','1-409-271-6175','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(8,'Germane','Bates','integer@google.edu','1-448-635-1116','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(9,'Ivana','James','rutrum.fusce@protonmail.ca','1-691-322-3470','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(10,'Adam','Meadows','et.libero@aol.edu','1-867-464-3083','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(11,'Mikayla','Mays','metus.vitae@aol.org','1-638-826-1799','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(12,'Inez','Stein','pharetra.felis.eget@yahoo.org','1-929-265-5662','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(13,'Nathan','Johnson','in@hotmail.net','1-418-845-2502','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(14,'Brenda','Sanchez','nisi.nibh.lacinia@icloud.edu','1-646-796-7721','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(15,'Aurora','House','eu.dui@protonmail.edu','1-124-586-3455','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(16,'Victor','Cruz','at@hotmail.couk','1-459-335-5715','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(17,'Brooke','Harrison','nostra.per@google.org','1-282-194-8141','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(18,'John','Joseph','nec.eleifend@aol.net','1-646-386-9541','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(19,'Brendan','Huff','vestibulum.neque@google.ca','1-312-783-1396','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(20,'Carolyn','Kelley','aliquam.vulputate.ullamcorper@protonmail.com','1-889-817-6533','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(21,'Lael','Kim','duis.ac@aol.edu','1-922-623-4296','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(22,'Hoyt','Holland','a@protonmail.com','1-739-794-5832','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(23,'Hamilton','Mcintosh','tincidunt.pede@aol.org','1-354-998-0303','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(24,'Olga','Ortega','egestas@google.edu','1-888-394-4495','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(25,'Garrison','Conner','velit.in@hotmail.org','1-373-284-3114','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(26,'Shoshana','O\'Neill','tincidunt.vehicula@protonmail.couk','1-495-262-5047','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(27,'Joan','Jenkins','molestie@hotmail.ca','1-711-706-6619','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(28,'Tatum','Hewitt','ultricies.ligula.nullam@google.couk','1-270-486-5677','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(29,'Camden','Harris','adipiscing.elit.etiam@google.ca','1-514-540-5518','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(30,'Belle','Bradley','vitae.velit@protonmail.com','1-374-330-5433','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(31,'Courtney','Dickerson','faucibus.lectus@icloud.net','1-304-414-2371','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(32,'Melodie','Wynn','mattis@yahoo.couk','1-173-621-5222','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(33,'Vernon','Meadows','eget.ipsum@hotmail.net','1-618-610-1467','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(34,'Kiayada','Sykes','ac.turpis@protonmail.edu','1-641-132-6622','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(35,'Lester','Vega','dictum.eu@protonmail.edu','1-666-839-9075','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(36,'Garrett','Mitchell','elementum@protonmail.ca','1-858-282-7032','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(37,'Baker','Branch','libero.lacus.varius@protonmail.couk','1-631-742-5006','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(38,'Alan','William','sollicitudin.commodo@google.ca','1-578-588-7809','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(39,'Castor','Cain','et@yahoo.edu','1-525-335-6403','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(40,'Oprah','Humphrey','at.sem@yahoo.com','1-756-692-5148','2021-11-29 14:26:10','2021-11-29 14:26:10'),
	(42,'Paul','Phaslkj ','lkjl@me.com','214-422-2322','2021-11-29 20:07:27','2021-11-29 20:07:27');

/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(250) NOT NULL,
  `file_title` varchar(250) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file_path` (`file_path`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `file_path`, `file_title`, `date_created`)
VALUES
	(78,'/dist/images/sprite-class-item-png','sprite-class-item-png','2021-11-16 20:11:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `title`, `price`, `date_created`, `date_updated`, `file_id`)
VALUES
	(1,'af',0,'2021-11-16 20:11:24','2021-11-16 20:11:24',78);

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role`, `first_name`, `last_name`, `email`, `phone`, `password`, `date_created`, `date_updated`)
VALUES
	(4,'employee','Kasey} asdfasfa','Files','kasey@kasey.com','219-392-30391','$2y$10$IWeVgA1EqzzxKC/X55wBBe.bAeCuRoOj5i/EZ97JRgeyogwnj6zrW','2021-11-05 03:14:26','2021-11-29 21:49:03'),
	(5,'employee','Meg} ','Doe','meg@meg.com','214-323-1211','$2y$10$IWeVgA1EqzzxKC/X55wBBe.bAeCuRoOj5i/EZ97JRgeyogwnj6zrW','2021-11-05 03:31:09','2021-11-05 03:31:09'),
	(6,'admin','Paul','Phan','paul@mrpaulphan.com','215-340-2349','$2y$10$IWeVgA1EqzzxKC/X55wBBe.bAeCuRoOj5i/EZ97JRgeyogwnj6zrW','2021-11-10 00:18:54','2021-11-10 00:18:54'),
	(7,'admin','test','test','test@me.com','324-232-2222','$2y$10$.rxnFZR6uArae2xV.EQsousfMVyM82IOcNEFSPmd.gWeTUAeFPx1a','2021-11-29 21:49:17','2021-11-29 21:49:17');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
