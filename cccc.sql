-- MySQL dump 10.16  Distrib 10.1.20-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.20-MariaDB

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
-- Table structure for table `case_info`
--

DROP TABLE IF EXISTS `case_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `case_info` (
  `patientId` varchar(15) NOT NULL,
  `tbregno` varchar(15) NOT NULL,
  `fileno` varchar(15) NOT NULL,
  `notification_date` date NOT NULL,
  `nature_of_case` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case_info`
--

LOCK TABLES `case_info` WRITE;
/*!40000 ALTER TABLE `case_info` DISABLE KEYS */;
INSERT INTO `case_info` VALUES ('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('19','','','0000-00-00','- Nature Of Case-','- Type Of TB -','0000-00-00','0000-00-00'),('600','45454','54545','0000-00-00','Relapse','Pulmonary Tuberculos','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `case_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comorbidies`
--

DROP TABLE IF EXISTS `comorbidies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comorbidies` (
  `patientId` varchar(15) NOT NULL,
  `comorbidies` varchar(50) NOT NULL,
  PRIMARY KEY (`patientId`,`comorbidies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comorbidies`
--

LOCK TABLES `comorbidies` WRITE;
/*!40000 ALTER TABLE `comorbidies` DISABLE KEYS */;
INSERT INTO `comorbidies` VALUES ('',''),('19','BA'),('19','COPD'),('19','DM'),('19','fsdfsdf'),('19','HIV');
/*!40000 ALTER TABLE `comorbidies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint` (
  `patientId` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `complaint` varchar(30) NOT NULL,
  `period` varchar(15) NOT NULL,
  `prepared` varchar(30) NOT NULL,
  PRIMARY KEY (`patientId`,`date`,`complaint`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint`
--

LOCK TABLES `complaint` WRITE;
/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
INSERT INTO `complaint` VALUES ('','','','',''),('570V','2016-10-13','Wheeze','10000   Years','Nisali De Silva '),('570V','2016-9-21','Loss of Apetite','23   Months','Nisali De Silva '),('570V','2016-9-21','Shortness of Breath','3   Days','Nisali De Silva '),('570V','2016-9-21','Sputum','12   Weeks','Nisali De Silva '),('570V','2016-9-22','Shortness of Breath','3   Days','Isuranga Perera '),('570V','2016-9-22','Sputum','12   Days','Isuranga Perera '),('570V','2016-9-29','Haemoptysis','   ','Nisali De Silva '),('570V','2016-9-29','Wheeze','   ','Nisali De Silva '),('570V','2017-1-14','Haemoptysis','5   Days',''),('570V','2017-1-14','Shortness of Breath','45   Weeks','');
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fbc`
--

DROP TABLE IF EXISTS `fbc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fbc` (
  `report_id` varchar(20) NOT NULL,
  `white_cells` float NOT NULL,
  `red_cells` float NOT NULL,
  `haemoglobin` float NOT NULL,
  `platelets` float NOT NULL,
  `haematocrit` float NOT NULL,
  `polymorphs` float NOT NULL,
  `lymphocytes` float NOT NULL,
  `monocytes` float NOT NULL,
  `eosinophils` float NOT NULL,
  `basophils` float NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fbc`
--

LOCK TABLES `fbc` WRITE;
/*!40000 ALTER TABLE `fbc` DISABLE KEYS */;
INSERT INTO `fbc` VALUES ('REPORTFBC1',67,7,7678,45,34,23,54,456,56,565),('REPORTOP',67,67,656,65,56545,454,87,56,45,232),('REPORT_01',45,34,23,67,56,45,34,78,89,34),('REPORT_49',45,45,23,67,45,34,23,76,78,89);
/*!40000 ALTER TABLE `fbc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fbs`
--

DROP TABLE IF EXISTS `fbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fbs` (
  `report_id` varchar(20) NOT NULL,
  `result` int(11) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fbs`
--

LOCK TABLES `fbs` WRITE;
/*!40000 ALTER TABLE `fbs` DISABLE KEYS */;
INSERT INTO `fbs` VALUES ('REPORT456',56),('REPORT_01',67),('REPORT_02',45),('REPORT_03',78),('REPORT_04',90),('REPORT_05',74);
/*!40000 ALTER TABLE `fbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interruption`
--

DROP TABLE IF EXISTS `interruption`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interruption` (
  `TreatentID` int(11) NOT NULL,
  `InterruptionIndex` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Reason` text NOT NULL,
  `NumberofDays` int(11) NOT NULL,
  PRIMARY KEY (`TreatentID`,`InterruptionIndex`),
  CONSTRAINT `interruption_ibfk_1` FOREIGN KEY (`TreatentID`) REFERENCES `tbtreatment` (`TreatmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interruption`
--

LOCK TABLES `interruption` WRITE;
/*!40000 ALTER TABLE `interruption` DISABLE KEYS */;
/*!40000 ALTER TABLE `interruption` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `product_code` varchar(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `formulation` varchar(50) DEFAULT NULL,
  `dosage` float DEFAULT NULL,
  `batch_no` varchar(30) NOT NULL,
  `quantity` float DEFAULT NULL,
  `expiry` date DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`product_code`,`batch_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory_data`
--

DROP TABLE IF EXISTS `inventory_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory_data` (
  `date` date NOT NULL,
  `p_code` varchar(50) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `formula` varchar(100) NOT NULL,
  `dose` varchar(50) NOT NULL,
  `batch_no` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `expiry` date NOT NULL,
  PRIMARY KEY (`p_code`,`batch_no`),
  KEY `con_fk_pname` (`p_name`),
  CONSTRAINT `con_fk_pname` FOREIGN KEY (`p_name`) REFERENCES `inventory_product` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory_data`
--

LOCK TABLES `inventory_data` WRITE;
/*!40000 ALTER TABLE `inventory_data` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventory_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory_product`
--

DROP TABLE IF EXISTS `inventory_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory_product` (
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `formulation` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `path` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`name`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory_product`
--

LOCK TABLES `inventory_product` WRITE;
/*!40000 ALTER TABLE `inventory_product` DISABLE KEYS */;
INSERT INTO `inventory_product` VALUES ('Chylothorax or LCHAD ','ENF34M1','Chylothorax or LCHAD ','ANTI-INFECTIVE','','uploads/5879bbffa1f3fMedical-Enfaport_03.jpg'),('Expecta® LIPIL® ','EXP789UI','DHA Supplement ','ANTI-CHOLINESTERASES','','uploads/5879bcafae17f1.jpg'),('Portagen®','P900JU8','Triglycerides (MCT)','ANTI-BACTERIAL','','uploads/5879bd7f7a1692.jpg'),('WND® 2','W45N90M','Iron-fortified','ANTI-ASTHMATIC','','uploads/5879be0713d17Metabolics-WND-2_0.jpg');
/*!40000 ALTER TABLE `inventory_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `investigation`
--

DROP TABLE IF EXISTS `investigation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `investigation` (
  `patientId` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `investigation` varchar(20) NOT NULL,
  `prepared` varchar(60) NOT NULL,
  `sample_index` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`patientId`,`date`,`investigation`),
  CONSTRAINT `investigation_ibfk_1` FOREIGN KEY (`patientId`) REFERENCES `patient_name` (`patientId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investigation`
--

LOCK TABLES `investigation` WRITE;
/*!40000 ALTER TABLE `investigation` DISABLE KEYS */;
INSERT INTO `investigation` VALUES ('570V','2016-09-21','Blood','Nisali De Silva ',NULL),('570V','2016-09-22','Blood','Isuranga Perera ',NULL),('570V','2016-09-29','Blood','Nisali De Silva ',NULL),('570V','2016-10-13','Blood','Nisali De Silva ',NULL),('570V','2016-10-13','Chest X-Ray','Nisali De Silva ',NULL),('570V','2016-10-13','Sputum','Nisali De Silva ',NULL),('570V','2016-10-27','Blood','Nisali De Silva ',NULL),('570V','2016-12-07','Chest X-Ray','Nisali De Silva ',NULL),('570V','2016-12-09','Blood','Nisali De Silva ',NULL),('570V','2016-12-09','Chest X-Ray','Nisali De Silva ',NULL),('570V','2017-01-07','Blood','Nisali De Silva ',NULL),('570V','2017-01-09','Blood','Nisali De Silva ',NULL),('570V','2017-01-09','Sputum','Nisali De Silva ',NULL),('570V','2017-01-14','Blood','',NULL),('570V','2017-01-14','Chest X-Ray','',NULL),('570V','2017-01-14','Sputum','',NULL);
/*!40000 ALTER TABLE `investigation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `investigation_type`
--

DROP TABLE IF EXISTS `investigation_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `investigation_type` (
  `patientId` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `investigation` varchar(30) NOT NULL,
  `spec1` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `sample_index` varchar(100) DEFAULT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`patientId`,`date`,`investigation`,`spec1`),
  CONSTRAINT `investigation_type_ibfk_1` FOREIGN KEY (`patientId`) REFERENCES `patient_name` (`patientId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investigation_type`
--

LOCK TABLES `investigation_type` WRITE;
/*!40000 ALTER TABLE `investigation_type` DISABLE KEYS */;
INSERT INTO `investigation_type` VALUES ('570V','2016-09-21','Blood','FBC','Completed','SAMPLE_01',''),('570V','2016-09-22','Blood','FBC','Completed','SAMPLE_64',''),('570V','2016-09-29','Blood','FBC','Completed','SAMPLE_90',''),('570V','2016-10-13','Blood','FBC','Completed','hgj',''),('570V','2016-10-27','Blood','FBC','Completed','1',''),('570V','2016-12-07','Chest X-Ray','Left Lateral','completed','uploads/5879aa87e1656251776.jpg','note'),('570V','2016-12-07','Chest X-Ray','PA','completed','uploads/5875b3ee65dbbdesktop-hd-white-wolf-picture.jpg','PANOTE'),('570V','2016-12-09','Blood','FBC','Completed','SAMPLEOP',''),('570V','2016-12-09','Chest X-Ray','Left Lateral','completed','uploads/5879aa87e1656251776.jpg','note'),('570V','2016-12-09','Chest X-Ray','PA','completed','uploads/5875b3ee65dbbdesktop-hd-white-wolf-picture.jpg','PANOTE'),('570V','2017-01-07','Blood','FBC','Completed','SAMPLEFBC1',''),('570V','2017-01-07','Blood','FBS','Completed','SAMPLE456',''),('570V','2017-01-09','Blood','FBC','Completed','SAMPLERT',''),('570V','2017-01-09','Sputum','AFB Smear','Completed','SMEAR1',''),('570V','2017-01-09','Sputum','AFB Smear (x3 Morning)','Completed','SMEAR2',''),('570V','2017-01-09','Sputum','Fungal Culture','Completed','SMEAR3',''),('570V','2017-01-09','Sputum','Pyogenic Culture','Completed','SMEAR4',''),('570V','2017-01-14','Blood','FBC','pending',NULL,''),('570V','2017-01-14','Blood','FBS','pending',NULL,''),('570V','2017-01-14','Chest X-Ray','Left Lateral','completed','uploads/5879aa87e1656251776.jpg','note'),('570V','2017-01-14','Chest X-Ray','PA','pending',NULL,''),('570V','2017-01-14','Sputum','AFB Smear (x3 Morning)','pending',NULL,''),('570V','2017-01-14','Sputum','Pyogenic Culture','pending',NULL,'');
/*!40000 ALTER TABLE `investigation_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medication`
--

DROP TABLE IF EXISTS `medication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medication` (
  `patientId` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `drug` varchar(30) NOT NULL,
  `dosage` varchar(15) NOT NULL,
  `instruction` varchar(200) DEFAULT NULL,
  `prepared` varchar(60) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'NOT ISSUED',
  PRIMARY KEY (`patientId`,`date`,`drug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medication`
--

LOCK TABLES `medication` WRITE;
/*!40000 ALTER TABLE `medication` DISABLE KEYS */;
INSERT INTO `medication` VALUES ('','0000-00-00','','',NULL,'','NOT ISSUED'),('570V','2016-09-21','Benadryl','Dose 0','','Nisali De Silva ','ISSUED'),('570V','2016-09-21','Dulcolax','Dose 1','','Nisali De Silva ','ISSUED'),('570V','2016-09-22','Myciline','Dose 0','','Isuranga Perera ','ISSUED'),('570V','2016-09-29','XYZ','Dose 0','','Nisali De Silva ','ISSUED'),('570V','2016-10-13','abc','fyytyyt','fgfj','Nisali De Silva ','ISSUED'),('570V','2016-10-13','ccccc','ryy','gdh','Nisali De Silva ','ISSUED'),('570V','2016-10-13','tty5h','4ty5th5y','ffhfj','Nisali De Silva ','ISSUED'),('570V','2016-12-09','ASC','Dose 1','','Nisali De Silva ','ISSUED'),('570V','2016-12-09','FGH','Dose 1','','Nisali De Silva ','ISSUED'),('570V','2017-01-14','dfsdfsdf','Dose 0','','','NOT ISSUED');
/*!40000 ALTER TABLE `medication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observation`
--

DROP TABLE IF EXISTS `observation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observation` (
  `patientId` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `observation` varchar(30) NOT NULL,
  `prepared` varchar(60) NOT NULL,
  PRIMARY KEY (`patientId`,`date`,`observation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observation`
--

LOCK TABLES `observation` WRITE;
/*!40000 ALTER TABLE `observation` DISABLE KEYS */;
INSERT INTO `observation` VALUES ('','','',''),('570V','2016-10-13','Cachexia','Nisali De Silva '),('570V','2016-10-13','Lymphadenopathy','Nisali De Silva '),('570V','2016-9-21','Cachexia','Nisali De Silva '),('570V','2016-9-21','Clubbing','Nisali De Silva '),('570V','2016-9-21','Lymphadenopathy','Nisali De Silva '),('570V','2016-9-21','Reduced Chest Expansion','Nisali De Silva '),('570V','2016-9-22','Lymphadenopathy','Isuranga Perera '),('570V','2016-9-22','Vesicular Breath Sounds','Isuranga Perera '),('570V','2017-1-14','Cachexia',''),('570V','2017-1-14','Clubbing',''),('570V','2017-1-14','Lymphadenopathy','');
/*!40000 ALTER TABLE `observation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observation_type`
--

DROP TABLE IF EXISTS `observation_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `observation_type` (
  `patientId` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `observation` varchar(30) NOT NULL,
  `spec1` varchar(30) NOT NULL,
  `spec2` varchar(30) NOT NULL,
  PRIMARY KEY (`patientId`,`date`,`observation`,`spec1`,`spec2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observation_type`
--

LOCK TABLES `observation_type` WRITE;
/*!40000 ALTER TABLE `observation_type` DISABLE KEYS */;
INSERT INTO `observation_type` VALUES ('','0000-00-00','','',''),('570V','2016-09-21','Lymphadenopathy','Right Cervical',''),('570V','2016-09-21','Reduced Chest Expansion','Right',''),('570V','2016-09-22','Lymphadenopathy','Right Cervical',''),('570V','2017-01-14','Lymphadenopathy','Right Axilliary',''),('570V','2017-01-14','Lymphadenopathy','Right Cervical','');
/*!40000 ALTER TABLE `observation_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_address`
--

DROP TABLE IF EXISTS `patient_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_address` (
  `patientId` varchar(15) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  PRIMARY KEY (`patientId`),
  UNIQUE KEY `patientId` (`patientId`),
  CONSTRAINT `patient_address_ibfk_1` FOREIGN KEY (`patientId`) REFERENCES `patient_name` (`patientId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_address`
--

LOCK TABLES `patient_address` WRITE;
/*!40000 ALTER TABLE `patient_address` DISABLE KEYS */;
INSERT INTO `patient_address` VALUES ('570V','No 1/3, Meegahakovila Road','Pinwatta','Panadura'),('9890111364531','No 1/3','Nawala Road','Nawala');
/*!40000 ALTER TABLE `patient_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_contact`
--

DROP TABLE IF EXISTS `patient_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_contact` (
  `patientId` varchar(15) NOT NULL,
  `phone_office` varchar(15) NOT NULL,
  `phone_home` varchar(15) NOT NULL,
  `phone_mobile` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`patientId`),
  UNIQUE KEY `patientId` (`patientId`),
  CONSTRAINT `patient_contact_ibfk_1` FOREIGN KEY (`patientId`) REFERENCES `patient_name` (`patientId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_contact`
--

LOCK TABLES `patient_contact` WRITE;
/*!40000 ALTER TABLE `patient_contact` DISABLE KEYS */;
INSERT INTO `patient_contact` VALUES ('570V','038-2244492','038-2237900','0712-986952','nisalperera@gmail.com'),('9890111364531','0112567456','0112567459','0777678521','sarojininirmali@gmail.com');
/*!40000 ALTER TABLE `patient_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_data`
--

DROP TABLE IF EXISTS `patient_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_data` (
  `nic` varchar(15) NOT NULL,
  `patientId` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `title` varchar(5) NOT NULL,
  `birth_place` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  PRIMARY KEY (`patientId`),
  UNIQUE KEY `nic` (`nic`),
  CONSTRAINT `patient_data_ibfk_1` FOREIGN KEY (`patientId`) REFERENCES `patient_name` (`patientId`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_data`
--

LOCK TABLES `patient_data` WRITE;
/*!40000 ALTER TABLE `patient_data` DISABLE KEYS */;
INSERT INTO `patient_data` VALUES ('932560078V','570V','1993-09-17','Mr.','Colombo','Male','Married','Buddhist','O+'),('898560094V','9890111364531','1989-01-11','Mrs.','Colombo','Female','Married','Christian','B+');
/*!40000 ALTER TABLE `patient_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient_name`
--

DROP TABLE IF EXISTS `patient_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient_name` (
  `patientId` varchar(15) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `middlename` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  PRIMARY KEY (`patientId`),
  UNIQUE KEY `patientId` (`patientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_name`
--

LOCK TABLES `patient_name` WRITE;
/*!40000 ALTER TABLE `patient_name` DISABLE KEYS */;
INSERT INTO `patient_name` VALUES ('570V','Nisal','Chamodh','Perera'),('9890111364531','Sarojini','Nirmali','De Silva');
/*!40000 ALTER TABLE `patient_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report_details`
--

DROP TABLE IF EXISTS `report_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report_details` (
  `sample_index` varchar(20) NOT NULL,
  `report_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report_details`
--

LOCK TABLES `report_details` WRITE;
/*!40000 ALTER TABLE `report_details` DISABLE KEYS */;
INSERT INTO `report_details` VALUES ('SAMPLE456','REPORT456','2017-01-07'),('SAMPLEFBC1','REPORTFBC1','2017-01-07'),('SAMPLEOP','REPORTOP','2016-12-09'),('SAMPLE_01','REPORT_01','2016-09-21'),('SAMPLE_49','REPORT_49','2016-09-22'),('SMEAR1','RSMEAR1','2017-01-09');
/*!40000 ALTER TABLE `report_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sample`
--

DROP TABLE IF EXISTS `sample`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sample` (
  `SampleIndex` int(10) NOT NULL,
  `Time` time DEFAULT NULL,
  `CollectionDate` date DEFAULT NULL,
  `Type` char(20) NOT NULL,
  `VisitNo` int(10) NOT NULL,
  PRIMARY KEY (`SampleIndex`),
  KEY `VisitNo_2` (`VisitNo`),
  CONSTRAINT `sample_ibfk_1` FOREIGN KEY (`VisitNo`) REFERENCES `visit` (`VisitNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sample`
--

LOCK TABLES `sample` WRITE;
/*!40000 ALTER TABLE `sample` DISABLE KEYS */;
INSERT INTO `sample` VALUES (1,'12:00:00','2015-11-17','xrPA',1),(2,'12:00:00','2015-11-13','pyCul',1),(3,'14:52:00','2015-11-03','afb3Smear',1),(4,'12:00:00','2015-11-19','mantoux',1),(5,'12:00:00','2015-11-11','fbc',2),(6,'15:10:00','2015-11-03','esr',2),(7,'14:55:00','2015-11-03','xrAPI',1),(8,NULL,NULL,'funCul',5),(9,'14:54:00','2015-11-03','fbc',5),(10,NULL,NULL,'xrLL',6),(11,'12:56:00','2015-11-16','fbc',6),(12,NULL,NULL,'afb3Smear',1);
/*!40000 ALTER TABLE `sample` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cookie_id` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`cookie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session`
--

LOCK TABLES `session` WRITE;
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` VALUES ('2017-01-14 04:35:31','932790091V','OPD Doctor'),('2017-01-14 08:05:46','984234790V','Radiologist');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sputum`
--

DROP TABLE IF EXISTS `sputum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sputum` (
  `report_id` varchar(20) NOT NULL,
  `polygenic_culture_positive` varchar(4) NOT NULL,
  `polygenic_culture_negative` varchar(4) NOT NULL,
  `afb_smear_morning_positive` varchar(4) NOT NULL,
  `afb_smear_morning_negative` varchar(4) NOT NULL,
  `afb_smear_positive` varchar(4) NOT NULL,
  `afb_smear_negative` varchar(4) NOT NULL,
  `fungal_culture_positive` varchar(4) NOT NULL,
  `fungal_culture_negative` varchar(4) NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sputum`
--

LOCK TABLES `sputum` WRITE;
/*!40000 ALTER TABLE `sputum` DISABLE KEYS */;
INSERT INTO `sputum` VALUES ('RSMEAR1','34','34','34','34','34','34','34','34');
/*!40000 ALTER TABLE `sputum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contact_person`
--

DROP TABLE IF EXISTS `tb_contact_person`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_contact_person` (
  `patientId` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `nic` varchar(15) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`patientId`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contact_person`
--

LOCK TABLES `tb_contact_person` WRITE;
/*!40000 ALTER TABLE `tb_contact_person` DISABLE KEYS */;
INSERT INTO `tb_contact_person` VALUES ('19','','','','','');
/*!40000 ALTER TABLE `tb_contact_person` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_patient_data`
--

DROP TABLE IF EXISTS `tb_patient_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_patient_data` (
  `patientId` varchar(15) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `bmi` float NOT NULL,
  `fbs` float NOT NULL,
  `smoking` varchar(5) NOT NULL,
  `alcholism` varchar(5) NOT NULL,
  `drug_use` varchar(5) NOT NULL,
  `residence` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `lwf` varchar(5) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  PRIMARY KEY (`patientId`),
  UNIQUE KEY `patientId` (`patientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_patient_data`
--

LOCK TABLES `tb_patient_data` WRITE;
/*!40000 ALTER TABLE `tb_patient_data` DISABLE KEYS */;
INSERT INTO `tb_patient_data` VALUES ('19',0,0,0,0,'- Smo','- Alc','- Dru','- Residenc','- Education Qualification -','No',''),('600',0,0,0,0,'- Smo','- Alc','- Dru','- Residenc','- Education Qualification -','No','');
/*!40000 ALTER TABLE `tb_patient_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbtreatment`
--

DROP TABLE IF EXISTS `tbtreatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbtreatment` (
  `TreatmentID` int(11) NOT NULL AUTO_INCREMENT,
  `PatientID` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date DEFAULT NULL,
  `Outcome` char(15) DEFAULT NULL,
  PRIMARY KEY (`TreatmentID`,`PatientID`),
  KEY `PatientID` (`PatientID`),
  CONSTRAINT `tbtreatment_ibfk_1` FOREIGN KEY (`PatientID`) REFERENCES `tbpatient` (`PatientID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbtreatment`
--

LOCK TABLES `tbtreatment` WRITE;
/*!40000 ALTER TABLE `tbtreatment` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbtreatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatmentplan`
--

DROP TABLE IF EXISTS `treatmentplan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `treatmentplan` (
  `patientId` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `impression` varchar(50) NOT NULL,
  `plan_from_opd` varchar(50) NOT NULL,
  `consultant` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `prepared` varchar(50) NOT NULL,
  PRIMARY KEY (`patientId`,`date`,`impression`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatmentplan`
--

LOCK TABLES `treatmentplan` WRITE;
/*!40000 ALTER TABLE `treatmentplan` DISABLE KEYS */;
INSERT INTO `treatmentplan` VALUES ('570V','2016-10-13','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','2016-10-27','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','2016-12-7','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','2016-12-9','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','2016-9-21','Upper respiratory tract infection','Follow up OPD','Not Assigned','','Nisali De Silva '),('570V','2016-9-22','Upper respiratory tract infection','Follow up OPD','Not Assigned','','Isuranga Perera '),('570V','2016-9-29','Lower respiratory tract infection','Referral to Respiratory Consultant','','','Nisali De Silva '),('570V','2016-9-29','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','2017-1-14','Extrapulmonary tuberculosis','Follow up OPD','Not Assigned','',''),('570V','2017-1-7','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','2017-1-9','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva ');
/*!40000 ALTER TABLE `treatmentplan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_address`
--

DROP TABLE IF EXISTS `user_address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_address` (
  `nic` varchar(15) NOT NULL,
  `address1` int(100) NOT NULL,
  `address2` int(100) NOT NULL,
  `city` int(50) NOT NULL,
  PRIMARY KEY (`nic`),
  UNIQUE KEY `nic` (`nic`),
  CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `user_login` (`nic`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_address`
--

LOCK TABLES `user_address` WRITE;
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_contact`
--

DROP TABLE IF EXISTS `user_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_contact` (
  `phone_mobile` varchar(15) NOT NULL,
  `phone_home` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  PRIMARY KEY (`nic`),
  CONSTRAINT `user_contact_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `user_login` (`nic`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_contact`
--

LOCK TABLES `user_contact` WRITE;
/*!40000 ALTER TABLE `user_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_data` (
  `nic` varchar(15) NOT NULL,
  `title` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `pic_path` varchar(100) NOT NULL,
  PRIMARY KEY (`nic`),
  UNIQUE KEY `nic` (`nic`),
  CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `user_login` (`nic`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
INSERT INTO `user_data` VALUES ('890670054V','Mr.','1989-07-05','Male','Single','OPD','Laboratory Assistant',''),('932790089V','Mr.','1993-05-09','Male','Single','OPD','Sputum Room Clerk','uploads/5879a32e03b09desktop-hd-white-wolf-picture.jpg'),('932790090V','Miss','1993-02-05','Female','Single','BioChemistry','TB Nurse',''),('932790091V','Miss','1993-09-12','Female','Single','OPD','OPD Doctor','uploads/587856cfad4ed737452-arch.jpg'),('932790092V','Mr.','1993-10-05','Male','Single','OPD','Receptionist',''),('940560094V','Mr.','1994-05-09','Male','Single','OPD','Administrator',''),('970450091V','Mr.','1997-05-02','Male','Single','OPD','Pharmacist',''),('984234790V','Mr.','1998-03-04','Male','Married','OPD','Radiologist',''),('990450078V','Mr.','1999-04-08','Male','Single','OPD','Bleeding Room Nurse','');
/*!40000 ALTER TABLE `user_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_login` (
  `nic` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES ('890670054V','Laboratory Assistant','lass','lass','Active'),('932790089V','Sputum Room Clerk','sclerk','sclerk','Active'),('932790090V','TB Nurse','tbnurse','tbnurse','Active'),('932790091V','OPD Doctor','opddoctor','opddoctor','Active'),('932790092V','Receptionist','receptionist','receptionist','Active'),('940560094V','Administrator','admin','admin','Active'),('970450091V','Pharmacist','pharmacist','pharmacist','Active'),('984234790V','Radiologist','xray','xray','Active'),('990450078V','Bleeding Room Nurse','bnurse','bnurse','Active');
/*!40000 ALTER TABLE `user_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_name`
--

DROP TABLE IF EXISTS `user_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_name` (
  `nic` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`nic`),
  CONSTRAINT `user_name_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `user_login` (`nic`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_name`
--

LOCK TABLES `user_name` WRITE;
/*!40000 ALTER TABLE `user_name` DISABLE KEYS */;
INSERT INTO `user_name` VALUES ('890670054V','Sarath','','Fernando'),('932790089V','Eranda','Akila','Abeydeera'),('932790090V','Chamodhi','Hasara','Perera'),('932790091V','Nisali','Shalmika','De Silva'),('932790092V','Isuranga','Madumal','Perera'),('940560094V','Charitha','','Mendis'),('970450091V','Nishan','','Samarasekara'),('984234790V','Sandun','','Perera'),('990450078V','Heshan','','Eranga');
/*!40000 ALTER TABLE `user_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visit`
--

DROP TABLE IF EXISTS `visit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visit` (
  `VisitNo` int(10) NOT NULL,
  `VisitType` varchar(10) NOT NULL DEFAULT 'New',
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Username` char(20) DEFAULT NULL,
  `PrescriptionIndex` int(10) DEFAULT NULL,
  `PatientID` int(11) NOT NULL,
  `Comments` char(200) DEFAULT NULL,
  `Impression` varchar(50) NOT NULL,
  `Plan` varchar(50) NOT NULL,
  PRIMARY KEY (`VisitNo`),
  UNIQUE KEY `PrescriptionIndex` (`PrescriptionIndex`),
  KEY `Username_2` (`Username`),
  KEY `PatientID_2` (`PatientID`),
  CONSTRAINT `visit_ibfk_4` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON UPDATE NO ACTION,
  CONSTRAINT `visit_ibfk_5` FOREIGN KEY (`PrescriptionIndex`) REFERENCES `prescription` (`PrescriptionIndex`) ON UPDATE NO ACTION,
  CONSTRAINT `visit_ibfk_6` FOREIGN KEY (`PatientID`) REFERENCES `patient` (`PatientID`) ON UPDATE NO ACTION,
  CONSTRAINT `visit_ibfk_7` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visit`
--

LOCK TABLES `visit` WRITE;
/*!40000 ALTER TABLE `visit` DISABLE KEYS */;
INSERT INTO `visit` VALUES (1,'1','2015-09-27','15:04:00','user1',1,0,'Testing','Pulmonary tuberculosis','Dr Kirthi Gunasekara'),(2,'2','2015-10-14','15:01:00','user5',3,0,'This is a test','Community acquired pneumonia','Dr Amitha Fernando'),(3,'1','2015-10-15','08:04:00','user1',NULL,0,'','Non specific','Discharge'),(4,'1','2015-10-20','21:06:00','user1',4,0,'','Non specific','Discharge'),(5,'1','2015-10-21','12:21:00','user1',5,1,'these are some notes','Non specific','Follow Up'),(6,'1','2015-11-03','14:47:00','user1',6,0,'a note','Community acquired pneumonia','Dr Kirthi Gunasekara');
/*!40000 ALTER TABLE `visit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `x-ray`
--

DROP TABLE IF EXISTS `x-ray`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `x-ray` (
  `ReportNo` int(12) NOT NULL,
  `Location` char(20) NOT NULL,
  PRIMARY KEY (`ReportNo`),
  CONSTRAINT `x@002dray_ibfk_1` FOREIGN KEY (`ReportNo`) REFERENCES `report` (`ReportNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `x-ray`
--

LOCK TABLES `x-ray` WRITE;
/*!40000 ALTER TABLE `x-ray` DISABLE KEYS */;
/*!40000 ALTER TABLE `x-ray` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-14 17:21:06
