CREATE DATABASE `conference` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `paper` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `ABSTRACT` text,
  `reviewed` varchar(5) DEFAULT NULL,
  `STUDENT_ID` int DEFAULT NULL,
  `DOMAIN` varchar(50) DEFAULT NULL,
  `SELECTED` varchar(5) DEFAULT NULL,
  `updated` varchar(50) DEFAULT NULL,
  `conf_date` varchar(10) DEFAULT NULL,
  `reviewer_id` int DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `review` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `STUDENT_ID` (`STUDENT_ID`),
  KEY `reviewer_id` (`reviewer_id`),
  CONSTRAINT `paper_ibfk_1` FOREIGN KEY (`STUDENT_ID`) REFERENCES `student` (`id`),
  CONSTRAINT `paper_ibfk_2` FOREIGN KEY (`reviewer_id`) REFERENCES `reviewer` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `reviewer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `COLLEGE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PHONE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

