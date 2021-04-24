-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbtickets
-- ------------------------------------------------------
-- Server version	8.0.18

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE dbTickets;
--
-- Table structure for table `tbtickets`
--

DROP TABLE IF EXISTS `dbTickets`.`tbtickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dbTickets`.`tbtickets` (
  `ID` int(11) NOT NULL  AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Event` varchar(60) NOT NULL,
  `EventDate` varchar(200) NOT NULL,
  `Tickets` int(11) NOT NULL,
  `Total` decimal(15,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtickets`
--

LOCK TABLES `dbTickets`.`tbtickets` WRITE;
/*!40000 ALTER TABLE `tbtickets` DISABLE KEYS */;
INSERT INTO `dbTickets`.`tbtickets` VALUES 
(1,'Haydar Mehryar Choosari','Drone Racing','2021-03-31',3,79.50),
(2,'Customer 2','Drone Racing','2021-04-02',5,132.50),
(3,'Customer 3','Elton John','2021-04-09',2,53.00),
(4,'Customer 4','Sweater Knitting','2021-04-25',5,132.50),
(5,'Customer 5','Sweater Knitting','2021-04-28',3,79.50);
/*!40000 ALTER TABLE `tbtickets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-22 16:08:39
