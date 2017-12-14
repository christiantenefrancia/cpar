-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: CPAR
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accnt`
--

DROP TABLE IF EXISTS `accnt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accnt` (
  `ACCNT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ACCNT_USR_NM` varchar(255) NOT NULL DEFAULT '0',
  `ACCNT_PSSWD` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ACCNT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accnt`
--

LOCK TABLES `accnt` WRITE;
/*!40000 ALTER TABLE `accnt` DISABLE KEYS */;
/*!40000 ALTER TABLE `accnt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iss`
--

DROP TABLE IF EXISTS `iss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iss` (
  `ISS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ISS_ISS` varchar(50) DEFAULT NULL,
  `ISS_DT` date DEFAULT NULL,
  `ISS_TM` time DEFAULT NULL,
  `ISS_USR_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ISS_ID`),
  KEY `ISS_USR_ID` (`ISS_USR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iss`
--

LOCK TABLES `iss` WRITE;
/*!40000 ALTER TABLE `iss` DISABLE KEYS */;
/*!40000 ALTER TABLE `iss` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usr`
--

DROP TABLE IF EXISTS `usr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usr` (
  `U_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `U_NM` varchar(25) DEFAULT NULL,
  `U_STS` varchar(25) DEFAULT NULL,
  `U_EML` varchar(25) DEFAULT NULL,
  `U_ADDRSS` varchar(25) DEFAULT NULL,
  `U_DPRTMNT` varchar(25) DEFAULT NULL,
  `U_ACCNT_ID` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`U_ID`),
  KEY `U_ACCNT_ID` (`U_ACCNT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usr`
--

LOCK TABLES `usr` WRITE;
/*!40000 ALTER TABLE `usr` DISABLE KEYS */;
/*!40000 ALTER TABLE `usr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-13  8:24:39
