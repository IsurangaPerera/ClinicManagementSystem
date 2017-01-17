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
INSERT INTO `complaint` VALUES ('570V','2017-1-15','Haemoptysis','5   Weeks','Nisali  De Silva'),('570V','2017-1-15','Loss of Apetite','1   Months','Nisali  De Silva'),('570V','2017-1-15','Loss of Weight','3   Months','Nisali  De Silva'),('570V','2017-1-15','Shortness of Breath','2   Days','Nisali  De Silva'),('570V','2017-1-15','Wheeze','6   Weeks','Nisali  De Silva'),('570V','2017-1-16','Shortness of Breath','2   Days','Nisali  De Silva');
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
INSERT INTO `fbc` VALUES ('REPORT152',45,54,56,67,4,57,90,54,34,23);
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
INSERT INTO `fbs` VALUES ('REPORT151',78),('REPORT2016',45);
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
  `quantity` int(50) NOT NULL,
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
INSERT INTO `inventory_data` VALUES ('2017-01-14','ENF34M1','Chylothorax or LCHAD ','','Chylothorax or LCHAD ','','B678VN',300,'2018-08-09');
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
INSERT INTO `investigation` VALUES ('570V','2017-01-15','Blood','Nisali  De Silva',NULL),('570V','2017-01-15','Chest X-Ray','Nisali  De Silva',NULL),('570V','2017-01-15','Sputum','Nisali  De Silva',NULL),('570V','2017-01-16','Blood','Nisali  De Silva',NULL),('570V','2017-01-16','Chest X-Ray','Nisali  De Silva',NULL),('570V','2017-01-16','Sputum','Nisali  De Silva',NULL);
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
INSERT INTO `investigation_type` VALUES ('570V','2017-01-15','Blood','FBC','Completed','SAMPLE151',''),('570V','2017-01-15','Blood','FBS','Completed','SAMPLE152',''),('570V','2017-01-15','Chest X-Ray','Left Lateral','completed','uploads/587b9272e7dd4chest-xray-111026-02.jpg','Need Immediate Action'),('570V','2017-01-15','Chest X-Ray','PA','completed','uploads/587c7e281aeeechest-xray-111026-02.jpg','NOTHING'),('570V','2017-01-15','Sputum','Pyogenic Culture','pending',NULL,''),('570V','2017-01-16','Blood','FBC','Completed','SAMPLE2016',''),('570V','2017-01-16','Blood','FBS','Completed','SAMPL2016',''),('570V','2017-01-16','Chest X-Ray','Left Lateral','pending',NULL,''),('570V','2017-01-16','Sputum','Pyogenic Culture','pending',NULL,'');
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
INSERT INTO `medication` VALUES ('570V','2017-01-15','Chylothorax or LCHAD ','20mg','After taking foods','Nisali  De Silva','ISSUED'),('570V','2017-01-15','Expecta® LIPIL® ','100mg','NONE','Nisali  De Silva','CANCELED'),('570V','2017-01-15','Paracetomol','20mg','NONE','Nisali  De Silva','CANCELED'),('570V','2017-01-16','Chylothorax or LCHAD ','34','','Nisali  De Silva','ISSUED'),('570V','2017-01-16','Penic','2','NONE','Nisali  De Silva','CANCELED');
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
INSERT INTO `observation` VALUES ('570V','2017-1-15','Cachexia','Nisali  De Silva'),('570V','2017-1-15','Clubbing','Nisali  De Silva'),('570V','2017-1-15','Inpiratory Crepitations','Nisali  De Silva'),('570V','2017-1-15','Lymphadenopathy','Nisali  De Silva'),('570V','2017-1-15','Vesicular Breath Sounds','Nisali  De Silva'),('570V','2017-1-16','Cachexia','Nisali  De Silva'),('570V','2017-1-16','Lymphadenopathy','Nisali  De Silva');
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
INSERT INTO `observation_type` VALUES ('570V','2017-01-15','Inpiratory Crepitations','Right Lower Zone','Fine'),('570V','2017-01-15','Lymphadenopathy','Right Axilliary',''),('570V','2017-01-15','Lymphadenopathy','Right Cervical',''),('570V','2017-01-16','Lymphadenopathy','Right Cervical','');
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
INSERT INTO `patient_address` VALUES ('0170101705151','','',''),('570V','No 1/3, Meegahakovila Road','Pinwatta','Panadura'),('9890111364531','No 1/3','Nawala Road','Nawala'),('993105566691','No 1/3','Meegahakovila Road, Pinwatta','Panadura'),('99536185671','No 45','Eden Avenue','Colombo'),('99889502151','','',''),('99889702411','No 4','Alvida Terrace','Colombo');
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
INSERT INTO `patient_contact` VALUES ('0170101705151','','','',''),('570V','038-2244492','038-2237900','0712-986952','nisalperera@gmail.com'),('9890111364531','0112567456','0112567459','0777678521','sarojininirmali@gmail.com'),('993105566691','0382244492','','0722774368','isurangamperera@gmail.com'),('99536185671','0112345673','','',''),('99889502151','','','',''),('99889702411','0112789564','0722458954','','');
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
INSERT INTO `patient_data` VALUES ('9876780093V','0170101705151','2017-01-01','Dra.','','Male','Married','','B-'),('932560078V','570V','1993-09-17','Mr.','Colombo','Male','Married','Buddhist','O+'),('898560094V','9890111364531','1989-01-11','Mrs.','Colombo','Female','Married','Christian','B+'),('932790092V','993105566691','1993-10-05','Mr.','','Male','Single','','B-'),('9543789023V','99536185671','1995-03-06','Mrs.','','Female','Divorced','Christian','B-'),('987056732V','99889502151','1998-08-09','Dra.','','Male','Divorced','','B+'),('9874567300V','99889702411','1998-08-09','Dra.','','Male','Married','Buddhist','B+');
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
INSERT INTO `patient_name` VALUES ('0170101705151','Kamal','','Perera'),('570V','Nisal','Chamodh','Perera'),('9890111364531','Sarojini','Nirmali','De Silva'),('993105566691','Isuranga','Madumal','Perera'),('99536185671','Lalitha','Kumari','Jayawardena'),('99889502151','Lakmal','',''),('99889702411','Isuru','Tharanga','Fernando');
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
INSERT INTO `report_details` VALUES ('SAMPLE151','REPORT151','2017-01-15'),('SAMPLE152','REPORT152','2017-01-15'),('SAMPLE2016','REPORT2016','2017-01-16');
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
INSERT INTO `session` VALUES ('2017-01-16 08:14:16','932790091V','OPD Doctor'),('2017-01-16 08:01:16','940560094V','Administrator');
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
INSERT INTO `treatmentplan` VALUES ('570V','2017-1-15','Extrapulmonary tuberculosis','Referral to Respiratory Consultant','Dr Kirthi Gunasekara','NONE','Nisali  De Silva'),('570V','2017-1-16','Upper respiratory tract infection','Follow up OPD','Not Assigned','','Nisali  De Silva');
/*!40000 ALTER TABLE `treatmentplan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `updated_stock`
--

DROP TABLE IF EXISTS `updated_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `updated_stock` (
  `date` date NOT NULL,
  `p_code` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `batch_no` varchar(20) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`p_code`,`batch_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `updated_stock`
--

LOCK TABLES `updated_stock` WRITE;
/*!40000 ALTER TABLE `updated_stock` DISABLE KEYS */;
INSERT INTO `updated_stock` VALUES ('0000-00-00','ENF34M1','Chylothorax or LCHAD ','b6','8',''),('0000-00-00','ENF34M1','Chylothorax or LCHAD ','b678vn','23',''),('2017-01-16','ENF34M1','Chylothorax or LCHAD ','bg','78',''),('2017-01-16','ENF34M1','Chylothorax or LCHAD ','bn','67','');
/*!40000 ALTER TABLE `updated_stock` ENABLE KEYS */;
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

-- Dump completed on 2017-01-17 11:42:19
