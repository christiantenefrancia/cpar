-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: cpar
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accnt`
--

LOCK TABLES `accnt` WRITE;
/*!40000 ALTER TABLE `accnt` DISABLE KEYS */;
INSERT INTO `accnt` VALUES (1,'admin@gmail.com','admin');
/*!40000 ALTER TABLE `accnt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accnt_typ`
--

DROP TABLE IF EXISTS `accnt_typ`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accnt_typ` (
  `ACCNT_TYP_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ACCNT_TYP_NM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ACCNT_TYP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accnt_typ`
--

LOCK TABLES `accnt_typ` WRITE;
/*!40000 ALTER TABLE `accnt_typ` DISABLE KEYS */;
INSERT INTO `accnt_typ` VALUES (1,'SUPERIOR'),(2,'CONCERN'),(3,'ISSUER'),(4,'ADMIN');
/*!40000 ALTER TABLE `accnt_typ` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iss`
--

DROP TABLE IF EXISTS `iss`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iss` (
  `ISS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ISS_ISSR` varchar(50) DEFAULT NULL,
  `ISS_SRC` varchar(50) DEFAULT NULL,
  `ISS_FNDNG` varchar(50) DEFAULT NULL,
  `ISS_FNDNG_DSC` longtext,
  `ISS_DT` date DEFAULT NULL,
  `ISS_TM` time DEFAULT NULL,
  `ISS_USR_ID` int(11) DEFAULT NULL,
  `ISS_USR_SPR_ID` int(11) DEFAULT NULL,
  `ISS_USR_CNCRN_ID` int(11) DEFAULT NULL,
  `ISS_CNCRN_ID` int(11) DEFAULT NULL,
  `ISS_DT_CRTD` date DEFAULT NULL,
  `ISS_DT_APPRVD` date DEFAULT NULL,
  PRIMARY KEY (`ISS_ID`),
  KEY `ISS_USR_ID` (`ISS_USR_ID`),
  KEY `ISS_USR_SPR_ID` (`ISS_USR_SPR_ID`),
  KEY `ISS_USR_CNCRN_ID` (`ISS_USR_CNCRN_ID`),
  KEY `ISS_CNCRN_ID` (`ISS_CNCRN_ID`)
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
-- Table structure for table `iss_cncrn`
--

DROP TABLE IF EXISTS `iss_cncrn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iss_cncrn` (
  `ISS_CNCRN_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ISS_CPR_NMBR` varchar(50) DEFAULT NULL,
  `ISS_RT_CSE` varchar(50) DEFAULT NULL,
  `ISS_CRRCTN` varchar(50) DEFAULT NULL,
  `ISS_CRRCTN_ACTN` varchar(50) DEFAULT NULL,
  `ISS_CNCRN_ISS_ID` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`ISS_CNCRN_ID`),
  KEY `ISS_CNCRN_ISS_ID` (`ISS_CNCRN_ISS_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iss_cncrn`
--

LOCK TABLES `iss_cncrn` WRITE;
/*!40000 ALTER TABLE `iss_cncrn` DISABLE KEYS */;
/*!40000 ALTER TABLE `iss_cncrn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ntfctn`
--

DROP TABLE IF EXISTS `ntfctn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ntfctn` (
  `NTFCTN_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `NTFCTN_DSC` varchar(50) DEFAULT NULL,
  `NTFCTN_STS` varchar(50) DEFAULT NULL,
  `NTFCTN_USR_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`NTFCTN_ID`),
  KEY `NTFCTN_USR_ID` (`NTFCTN_USR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ntfctn`
--

LOCK TABLES `ntfctn` WRITE;
/*!40000 ALTER TABLE `ntfctn` DISABLE KEYS */;
/*!40000 ALTER TABLE `ntfctn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usr`
--

DROP TABLE IF EXISTS `usr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usr` (
  `USR_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `USR_NM` varchar(25) DEFAULT NULL,
  `USR_EML` varchar(25) DEFAULT NULL,
  `USR_DPRTMNT` varchar(25) DEFAULT NULL,
  `USR_ACCNT_ID` int(11) unsigned DEFAULT NULL,
  `USR_ACCNT_TYP` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`USR_ID`),
  KEY `U_ACCNT_ID` (`USR_ACCNT_ID`),
  KEY `USR_ACCNT_TYP` (`USR_ACCNT_TYP`)
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

-- Dump completed on 2017-04-19  1:08:37
