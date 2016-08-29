-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: chestclinic
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
INSERT INTO `complaint` VALUES ('','','','',''),('19','12-8-2016','0','34   Weeks','0'),('20','12-8-2016','Haemoptysis','3   Weeks','Nisali De Silva '),('20','12-8-2016','Loss of Apetite','23   Months','Nisali De Silva '),('20','12-8-2016','Night Sweats','12   Years','Nisali De Silva '),('570V','15-8-2016','Shortness of Breath','34   Months','Nisali De Silva '),('570V','23-8-2016','Chest Pain','56   Months','Nisali De Silva '),('570V','23-8-2016','Haemoptysis','3   Weeks','Nisali De Silva '),('570V','August 25, 2016','Chest Pain','3   Weeks','Nisali De Silva '),('570V','August 25, 2016','Night Sweats','5   Weeks','Nisali De Silva ');
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
INSERT INTO `fbc` VALUES ('REPORT1',12,11,11,56,78,76,54,34,32,22),('REPORT2',23,34,45,67,54,55,99,77,33,12),('REPORT3',6,34,13,45,78,76,54,34,2,66);
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
INSERT INTO `fbs` VALUES ('565',67),('678TIO',45),('YUIO567',78);
/*!40000 ALTER TABLE `fbs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `full blood count`
--

DROP TABLE IF EXISTS `full blood count`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `full blood count` (
  `ReportNo` int(12) NOT NULL,
  `Red Blood Count` int(11) NOT NULL,
  `White Blood count` int(11) NOT NULL,
  `Platelet Count` int(11) NOT NULL,
  PRIMARY KEY (`ReportNo`),
  CONSTRAINT `full@0020blood@0020count_ibfk_1` FOREIGN KEY (`ReportNo`) REFERENCES `report` (`ReportNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `full blood count`
--

LOCK TABLES `full blood count` WRITE;
/*!40000 ALTER TABLE `full blood count` DISABLE KEYS */;
/*!40000 ALTER TABLE `full blood count` ENABLE KEYS */;
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
-- Table structure for table `investigation`
--

DROP TABLE IF EXISTS `investigation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `investigation` (
  `patientId` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `investigation` varchar(20) NOT NULL,
  `prepared` varchar(60) NOT NULL,
  `sample_index` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`patientId`,`date`,`investigation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investigation`
--

LOCK TABLES `investigation` WRITE;
/*!40000 ALTER TABLE `investigation` DISABLE KEYS */;
INSERT INTO `investigation` VALUES ('20','August 12, 2016','Sputum','Nisali De Silva ',NULL),('570V','August 22, 2016','Blood','Nisali De Silva ',NULL),('570V','August 23, 2016','Blood','Nisali De Silva ',NULL),('570V','August 23, 2016','Six Minute Walking T','Nisali De Silva ',NULL),('570V','August 24, 2016','Blood','Nisali De Silva ',NULL),('9007689RTY','October 4, 2016','Sputum','Dr. Rahul De Silva',NULL);
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
  `date` varchar(15) NOT NULL,
  `investigation` varchar(30) NOT NULL,
  `spec1` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `sample_index` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`patientId`,`date`,`investigation`,`spec1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `investigation_type`
--

LOCK TABLES `investigation_type` WRITE;
/*!40000 ALTER TABLE `investigation_type` DISABLE KEYS */;
INSERT INTO `investigation_type` VALUES ('','','','','pending',NULL),('20','August 12, 2016','Sputum','AFB Smear','Pending',NULL),('20','August 12, 2016','Sputum','AFB Smear (x3 Morning)','Pending',NULL),('20','August 12, 2016','Sputum','Fungal Culture','Pending',NULL),('20','August 12, 2016','Sputum','Pyogenic Culture','Pending',NULL),('570V','August 22, 2016','Blood','FBC','Completed','TEST@9'),('570V','August 23, 2016','Blood','ESR','Completed','TEST@8'),('570V','August 24, 2016','Blood','FBC','Completed','TEST@9'),('9007689RTY','October 4, 2016','Sputum','Fungal','Pending','Check678VC');
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
  `date` varchar(15) NOT NULL,
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
INSERT INTO `medication` VALUES ('570V','August 26, 2016','Abatacept(Orencia)','Dose 0','INS@!','Nisali De Silva ','ISSUED'),('570V','August 29, 2016','Avapro','Dose 0',NULL,'Nisali De Silva ','NOT ISSUED');
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
INSERT INTO `observation` VALUES ('19','August 12, 2016','Cachexia','Nisali De Silva '),('570V','August 22, 2016','Reduced Chest Expansion','Nisali De Silva '),('570V','August 22, 2016','Rhonchi','Nisali De Silva '),('570V','August 22, 2016','Vesicular Breath Sounds','Nisali De Silva '),('570V','August 23, 2016','Abnormal Percussion','Nisali De Silva '),('570V','August 23, 2016','Lymphadenopathy','Nisali De Silva '),('570V','August 23, 2016','Rhonchi','Nisali De Silva ');
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
  `date` varchar(15) NOT NULL,
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
INSERT INTO `observation_type` VALUES ('','','','',''),('19','August 12, 2016','Rhonchi','Right Lower Zone','Expiratory'),('19','August 12, 2016','Rhonchi','Right Lower Zone','Inspiratory'),('19','August 12, 2016','Rhonchi','Right Lower Zone','Polyphonic'),('19','August 12, 2016','Rhonchi','Right Mid Zone','Expiratory'),('19','August 12, 2016','Rhonchi','Right Mid Zone','Inspiratory'),('19','August 12, 2016','Rhonchi','Right Mid Zone','Polyphonic'),('19','August 12, 2016','Rhonchi','Right Upper Zone','Expiratory'),('19','August 12, 2016','Rhonchi','Right Upper Zone','Inspiratory'),('19','August 12, 2016','Rhonchi','Right Upper Zone','Polyphonic'),('570V','August 22, 2016','Rhonchi','Right Lower Zone','Inspiratory'),('570V','August 22, 2016','Rhonchi','Right Mid Zone','Inspiratory'),('570V','August 22, 2016','Rhonchi','Right Upper Zone','Inspiratory'),('570V','August 23, 2016','Abnormal Percussion','Right Lower Zone','Dull'),('570V','August 23, 2016','Rhonchi','Right Lower Zone','Inspiratory');
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
  UNIQUE KEY `patientId` (`patientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_address`
--

LOCK TABLES `patient_address` WRITE;
/*!40000 ALTER TABLE `patient_address` DISABLE KEYS */;
INSERT INTO `patient_address` VALUES ('19','','',''),('570V','No 1/3, Meegahakovila Road','Pinwatta','Panadura'),('600','No 6 Temple Road','Nawala',''),('67','','','');
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
  UNIQUE KEY `patientId` (`patientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_contact`
--

LOCK TABLES `patient_contact` WRITE;
/*!40000 ALTER TABLE `patient_contact` DISABLE KEYS */;
INSERT INTO `patient_contact` VALUES ('19','','','','isurangamperera@gmail.com'),('570V','087878787','342421890','343434342','nisalperera@gmail.com'),('600','545345344','','',''),('67','','','','');
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
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient_data`
--

LOCK TABLES `patient_data` WRITE;
/*!40000 ALTER TABLE `patient_data` DISABLE KEYS */;
INSERT INTO `patient_data` VALUES ('','19','0000-00-00','- Tit','','- Gender -','- Civil St','','- Blo'),('89767956V','570V','2016-08-17','Mr.','Colombo','Male','Married','Buddhist','O+'),('8905678432V','600','0000-00-00','Mr.','','Male','Legal Sepe','Buddhist',''),('77878','67','0000-00-00','Dr.','fdfd','Male','Divorced','dgf','O+');
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
INSERT INTO `patient_name` VALUES ('19','','',''),('570V','Nisal','Chamodh','Perera'),('600','Sachin','Eranda','Fernando'),('67','ddfdf','','dfdf');
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
INSERT INTO `report_details` VALUES ('dfghdf','565','2016-08-22'),('456FBS','678TIO','2016-08-20'),('TEST1','REPORT1','2016-08-22'),('TEST2','REPORT2','2016-08-23'),('TEST3','REPORT3','2016-08-24'),('SAMPLE@1','Test@1','2016-08-24'),('SAMPLE@2','TEST@@','2016-08-24'),('asFBS456','YUIO567','2016-08-20');
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
-- Table structure for table `sputum`
--

DROP TABLE IF EXISTS `sputum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sputum` (
  `ReportNo` int(12) NOT NULL,
  `Result` char(20) NOT NULL,
  PRIMARY KEY (`ReportNo`),
  CONSTRAINT `sputum_ibfk_1` FOREIGN KEY (`ReportNo`) REFERENCES `report` (`ReportNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sputum`
--

LOCK TABLES `sputum` WRITE;
/*!40000 ALTER TABLE `sputum` DISABLE KEYS */;
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
INSERT INTO `treatmentplan` VALUES ('570V','August 23, 2016','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','August 23, 2016','Sleep disordered breathing','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','August 24, 2016','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','August 24, 2016','Pleural effusion','Discharge from OPD','Not Assigned','NOTHING','Isuranga Perera '),('570V','August 25, 2016','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','August 26, 2016','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva '),('570V','August 29, 2016','Non specific symptoms','Discharge from OPD','Not Assigned','','Nisali De Silva ');
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
  UNIQUE KEY `nic` (`nic`)
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
  PRIMARY KEY (`nic`)
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
  `nic` int(15) NOT NULL,
  `title` varchar(5) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `civilstatus` varchar(10) NOT NULL,
  `department` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  PRIMARY KEY (`nic`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_data`
--

LOCK TABLES `user_data` WRITE;
/*!40000 ALTER TABLE `user_data` DISABLE KEYS */;
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
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_login`
--

LOCK TABLES `user_login` WRITE;
/*!40000 ALTER TABLE `user_login` DISABLE KEYS */;
INSERT INTO `user_login` VALUES ('890670054V','Laboratory Assistant','lass','lass'),('932790089V','Sputum Room Clerk','sclerk','sclerk'),('932790090V','TB Nurse','tbnurse','tbnurse'),('932790091V','OPD Doctor','opddoctor','opddoctor'),('932790092V','Receptionist','receptionist','receptionist'),('970450091V','Pharmacist','pharmacist','pharmacist'),('990450078V','Bleeding Room Nurse','bnurse','bnurse');
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
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_name`
--

LOCK TABLES `user_name` WRITE;
/*!40000 ALTER TABLE `user_name` DISABLE KEYS */;
INSERT INTO `user_name` VALUES ('890670054V','Sarath','','Fernando'),('932790089V','Eranda','Akila','Abeydeera'),('932790090V','Chamodhi','Hasara','Perera'),('932790091V','Nisali','','De Silva'),('932790092V','Isuranga','Madumal','Perera'),('970450091V','Nishan','','Samarasekara'),('990450078V','Heshan','','Eranga');
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

-- Dump completed on 2016-08-29 19:14:14
