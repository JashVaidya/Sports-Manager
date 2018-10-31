-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
-- Backup 10/30/2018 version
-- Host: localhost    Database: web2
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `favorites`
--
USE wmabry2;
DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `favorites` (
  `username` varchar(20) NOT NULL,
  `teamName` varchar(45) DEFAULT NULL,
  `playerID` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `playerID_UNIQUE` (`playerID`),
  UNIQUE KEY `teamName_UNIQUE` (`teamName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `games` (
  `gameID` int(11) NOT NULL,
  `homeName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rivalName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `homeScore` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rivalScore` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date` date NOT NULL,
  `rivalrushingyards` int(11) NOT NULL,
  `rivalpassingyards` int(11) NOT NULL,
  `homerushingyards` int(11) NOT NULL,
  `homepassingyards` int(11) NOT NULL,
  PRIMARY KEY (`gameID`),
  KEY `team_name_FK_idx` (`homeName`),
  KEY `rival_name_FK_idx` (`rivalName`),
  CONSTRAINT `rival_name_FK` FOREIGN KEY (`rivalName`) REFERENCES `teams` (`teamname`),
  CONSTRAINT `team_name_FK` FOREIGN KEY (`homeName`) REFERENCES `teams` (`teamname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `players` (
  `playerID` int(11) NOT NULL,
  `firstName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `position` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `heightCM` int(11) NOT NULL,
  `weightKG` int(11) NOT NULL,
  `college` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `DoB` date NOT NULL,
  `teamName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`playerID`),
  KEY `pk_positions` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `players`
--

LOCK TABLES `players` WRITE;
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` VALUES (111,'Ben','Roethlisberger','quarterback',196,109,'Miami University','1982-03-02','Steelers'),(112,'Marshawn','Lynch','running back',180,98,'University of California','1986-05-22','Raiders');
/*!40000 ALTER TABLE `players` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `positions` (
  `position` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(45) NOT NULL,
  PRIMARY KEY (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES ('C','Center'),('CB','Cornerback'),('DE','Defensive End'),('DT','Defensive Tackle'),('MLB','Middle Linebacker'),('OG','Offensive Guard'),('OLB','Outside Linebacker'),('OT','Offensive Tackle'),('QB','Quarterback'),('RB','Running Back'),('S','Safety'),('TE','Tight End'),('WR','Wide Receiver');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `teams` (
  `teamName` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `founded` int(4) NOT NULL,
  `conference` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `division` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `wins` int(11) NOT NULL,
  `losses` int(11) NOT NULL,
  `ties` int(11) NOT NULL,
  `rushingyards` int(11) NOT NULL,
  `passingyards` int(11) NOT NULL,
  PRIMARY KEY (`teamName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teams`
--

LOCK TABLES `teams` WRITE;
/*!40000 ALTER TABLE `teams` DISABLE KEYS */;
INSERT INTO `teams` VALUES ('Raiders','Oakland',1960,'AFC','West',0,0,0,0,0),('Seahawks','Seattle',1974,'NFC','West',0,0,0,0,0),('Steelers','Pittsburgh',1933,'AFC','North',0,0,0,0,0);
/*!40000 ALTER TABLE `teams` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8 ;
CREATE TABLE `users` (
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` int(1) NOT NULL DEFAULT '3',
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `birthday` date NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('pjSalt21',3,'3faeeeb934b14c2e1c4f571e348e808f6de8a017','koolkid@gmail.com','1992-08-21'),('wmabry2',1,'adff09d198beb6856517dc8761bfedf2255b1731','wmabry2@radford.edu','1994-02-03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-30 17:25:08
