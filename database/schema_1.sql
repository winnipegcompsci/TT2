CREATE DATABASE  IF NOT EXISTS `tt2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tt2`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: tt2
-- ------------------------------------------------------
-- Server version	5.6.17-log

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL DEFAULT ' ',
  `postal_code` varchar(25) NOT NULL,
  `city` varchar(75) NOT NULL,
  `province_id` int(11) NOT NULL,
  `country_id` int(50) NOT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `website` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=178 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (174,'Test','64 Avalon Road','R2M2L5','Winnipeg',1,1,'20455555555','www.google.ca'),(175,'','','','Winnipeg',1,1,'',''),(176,'David','123 Home Street.','R2M4A9','Winnipeg',1,1,'',''),(177,'','','','Winnipeg',1,1,'','');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_plan_lines`
--

DROP TABLE IF EXISTS `billing_plan_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_plan_lines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billing_plan_id` int(11) NOT NULL,
  `time_type_id` int(11) NOT NULL,
  `minutes_per_unit` float NOT NULL,
  `min_num_unit` float NOT NULL,
  `min_unit` float NOT NULL,
  `round_up_at_min` float NOT NULL,
  `emerg_minutes_per_unit` float NOT NULL,
  `emerg_min_num_units` float NOT NULL,
  `emerg_min_unit` float NOT NULL,
  `emerg_round_up_at_min` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `line_plan_id` (`billing_plan_id`),
  KEY `line_time_type_id` (`time_type_id`),
  CONSTRAINT `billing_plan_lines_ibfk_1` FOREIGN KEY (`billing_plan_id`) REFERENCES `billing_plans` (`id`) ON DELETE CASCADE,
  CONSTRAINT `billing_plan_lines_ibfk_2` FOREIGN KEY (`time_type_id`) REFERENCES `time_types` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_plan_lines`
--

LOCK TABLES `billing_plan_lines` WRITE;
/*!40000 ALTER TABLE `billing_plan_lines` DISABLE KEYS */;
INSERT INTO `billing_plan_lines` VALUES (1,1,2,60,1,0.25,9,60,2,0.25,9),(2,1,3,60,0.25,0.25,9,60,1,0.25,9),(3,1,4,60,0.25,0.25,9,60,1,0.25,9),(4,1,1,60,0.25,0.25,9,60,0.5,0.25,9),(5,2,2,60,1,30,11,60,2,30,11),(6,2,3,60,1,0.25,9,60,2,0.25,9),(7,2,4,60,1,0.25,9,60,2,0.25,9),(8,2,1,60,1,0.25,9,60,2,0.25,9);
/*!40000 ALTER TABLE `billing_plan_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_plans`
--

DROP TABLE IF EXISTS `billing_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `plan_number` (`name`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_plans`
--

LOCK TABLES `billing_plans` WRITE;
/*!40000 ALTER TABLE `billing_plans` DISABLE KEYS */;
INSERT INTO `billing_plans` VALUES (2,'a0'),(1,'default');
/*!40000 ALTER TABLE `billing_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_statuses`
--

DROP TABLE IF EXISTS `billing_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `billing_status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_statuses`
--

LOCK TABLES `billing_statuses` WRITE;
/*!40000 ALTER TABLE `billing_statuses` DISABLE KEYS */;
INSERT INTO `billing_statuses` VALUES (1,'Open Ticket'),(2,'Ready to Bill'),(3,'Billed'),(4,'Overdue'),(5,'Paid');
/*!40000 ALTER TABLE `billing_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_types`
--

DROP TABLE IF EXISTS `billing_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_types`
--

LOCK TABLES `billing_types` WRITE;
/*!40000 ALTER TABLE `billing_types` DISABLE KEYS */;
INSERT INTO `billing_types` VALUES (1,'Billable',0),(2,'Contract',1);
/*!40000 ALTER TABLE `billing_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_types`
--

DROP TABLE IF EXISTS `contact_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_types`
--

LOCK TABLES `contact_types` WRITE;
/*!40000 ALTER TABLE `contact_types` DISABLE KEYS */;
INSERT INTO `contact_types` VALUES (1,'technical',0),(2,'accounting',0),(3,'manager',0),(4,'owner',0);
/*!40000 ALTER TABLE `contact_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `contact_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Test','Tester',1,175,1),(2,'David','Richardson',2,177,1);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Canada'),(2,'USA');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_notes`
--

DROP TABLE IF EXISTS `customer_notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `timestamp` datetime NOT NULL,
  `permission` int(4) unsigned NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_notes`
--

LOCK TABLES `customer_notes` WRITE;
/*!40000 ALTER TABLE `customer_notes` DISABLE KEYS */;
/*!40000 ALTER TABLE `customer_notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_sites`
--

DROP TABLE IF EXISTS `customer_sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `disabled` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `site_customer_id_2` (`customer_id`,`site_name`),
  KEY `site_customer_id` (`customer_id`),
  CONSTRAINT `customer_sites_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_sites`
--

LOCK TABLES `customer_sites` WRITE;
/*!40000 ALTER TABLE `customer_sites` DISABLE KEYS */;
INSERT INTO `customer_sites` VALUES (1,1,'Google','0');
/*!40000 ALTER TABLE `customer_sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `number` varchar(6) NOT NULL,
  `disabled` binary(1) NOT NULL DEFAULT '0',
  `billing_plan_id` int(11) NOT NULL,
  `customer_notes_id` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customer_number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Test',174,-99,'TES001','0',1,'Ticket Notes for Test'),(2,'David',176,-99,'DAV011','0',1,'');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_types`
--

DROP TABLE IF EXISTS `email_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_types`
--

LOCK TABLES `email_types` WRITE;
/*!40000 ALTER TABLE `email_types` DISABLE KEYS */;
INSERT INTO `email_types` VALUES (1,'Ticket Update Email',0),(2,'Ticket Created Email',0),(3,'Event Added Email',0),(4,'Ticket Assign Change Email',0);
/*!40000 ALTER TABLE `email_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_id` int(11) NOT NULL,
  `string` varchar(100) NOT NULL,
  `is_primary` binary(1) NOT NULL DEFAULT '0',
  `notify` binary(1) NOT NULL,
  `email_type_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,175,'test@test.com','1','1',NULL),(2,177,'drichardson@enigmait.ca','1','1',NULL);
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `wtcr_sku` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `wtcr_category_id` int(11) DEFAULT NULL,
  `wtcr_manufacturer_id` int(11) DEFAULT NULL,
  `manufacturer_sku` varchar(45) DEFAULT NULL,
  `wtcr_vendor_id` int(11) DEFAULT NULL,
  `vendor_sku` varchar(45) DEFAULT NULL,
  `vendor_price` float DEFAULT NULL,
  `received_date` datetime DEFAULT NULL,
  `markup` float DEFAULT NULL,
  `serial_numbers` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `text` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification_types`
--

DROP TABLE IF EXISTS `notification_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `icon` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification_types`
--

LOCK TABLES `notification_types` WRITE;
/*!40000 ALTER TABLE `notification_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` varchar(45) DEFAULT NULL,
  `notification_type_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone_numbers`
--

DROP TABLE IF EXISTS `phone_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phone_numbers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_id` int(11) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `phone_type_id` int(11) NOT NULL,
  `phone_is_primary` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_numbers`
--

LOCK TABLES `phone_numbers` WRITE;
/*!40000 ALTER TABLE `phone_numbers` DISABLE KEYS */;
INSERT INTO `phone_numbers` VALUES (1,1,'204-788-0967','',1,'1'),(2,5,'204-783-3567','',1,'1'),(4,11,'204-955-6004','',1,'1'),(5,4,'204-982-9530','',1,'1'),(6,14,'204-952-5393','',3,'1'),(7,15,'204-230-0227','',3,'1'),(8,16,'204-256-1175','',1,'1'),(9,17,'204-228-5170','',3,'1'),(10,18,'204-694-4331','',1,'1'),(11,19,'204-888-0437','',2,'0'),(12,20,'204-831-0239','',1,'0'),(13,20,'204-471-5884','',3,'1'),(14,22,'204-771-0847','',3,'1'),(15,24,'204-299-5710','',3,'1'),(16,7,'204-694-4331','',1,'1'),(17,29,'204-272-7181','',1,'1'),(18,33,'204-953-1965','235',1,'1'),(19,35,'204-452-4193','102',1,'1'),(20,36,'204-452-4193','',1,'1'),(21,44,'2047862200','',1,'1'),(22,45,'2047862200','',1,'1'),(23,45,'2042946626','',3,'0'),(24,47,'204-482-6900','206',1,'1'),(25,48,'519-836-7100','',1,'1'),(26,46,'204-482-6900','',1,'1'),(27,5,'306-721-6833','',1,'0'),(28,52,'831-6117','',2,'1'),(30,55,'204-771-0847','',3,'0'),(31,55,'204-222-4216','205',1,'1'),(32,56,'204-222-4216','263',1,'1'),(33,58,'204-999-4374','',3,'1'),(34,59,'604-644-5205','',3,'1'),(35,63,'2042690887','',1,'1'),(36,65,'(514) 776-5070 ','',3,'0'),(37,65,'(514) 254-4420 ','',1,'1'),(38,49,'204-941-1800','',3,'1'),(39,50,'204-941-1800','',3,'1'),(41,67,'204-253-1338','',1,'1'),(42,68,'2043562410','',1,'1'),(43,71,'204-777-6484','',1,'1'),(44,73,'204-256-6083','',2,'0'),(45,74,'204-479-0307','',3,'1'),(47,78,'204-792-3035','',2,'1'),(48,72,'953-1965','235',1,'1'),(49,69,'2043562418','',1,'1'),(50,80,'204-783-3567','',1,'1'),(51,5,'204-248-2598','',2,'0'),(52,81,'301.540.0011','',1,'1'),(53,82,'800-957-6688','',1,'1'),(54,79,'204-792-3035','',2,'1'),(55,84,'955-3919','',2,'1'),(56,85,'9553919','',2,'0'),(57,89,'2042261076','',3,'0'),(58,84,'632-9110','',2,'0'),(59,91,'204-272-2945','',1,'0'),(60,92,'204-272-2945','',1,'1'),(61,93,'204-272-2942','',1,'0'),(62,94,'204-388-4613','',1,'1'),(63,95,'204-388-4613','',1,'1'),(64,96,'2049531060','',1,'1'),(65,97,'204-232-6328','',1,'1'),(66,88,'2048321178','',1,'1'),(67,98,'2043889649','',1,'0'),(68,90,'298-3218','',3,'0'),(70,103,'2042337089','JEREM',1,'0'),(71,105,'2044781308','',1,'1'),(72,106,'2044781308','',1,'1'),(73,107,'204-371-1206','',3,'0'),(74,109,'2042722942','',1,'1'),(75,110,'204-832-5586 ','',1,'1'),(77,113,'2043562418','',1,'1'),(78,114,'204-392-5534','',3,'0'),(79,102,'204-233-7089','',1,'1'),(80,115,'(204) 453-8351','',1,'1'),(81,117,'204-953-1965','235',1,'1'),(82,118,'204-953-1965','235',1,'1'),(83,118,'(204) 981-0529','',3,'0'),(85,123,'(204) 221-3820','',1,'1'),(86,124,'2049555576','',3,'0'),(87,126,'2042969286','',3,'1'),(88,126,'8554777444','',1,'0'),(89,127,'2042318333','',1,'1'),(90,128,'2044704381','',3,'0'),(91,133,'204-789-4141','',1,'1'),(92,133,'204-223-9331','',3,'0'),(93,134,'204-804-5409','',3,'0'),(94,135,'204-804-5409','',3,'0'),(95,134,'204-582-5830','',1,'1'),(96,132,'204-944-7110','',1,'0'),(97,136,'2049883000','',1,'1'),(98,137,'2049883000','',1,'1'),(99,98,'204-388-4613','',1,'1'),(100,141,'2049817089','',3,'1'),(101,76,'204-944-0009','',1,'1'),(102,143,'2048984701','',3,'0'),(103,130,'204-832-5586','',1,'1'),(104,35,'204-803-2265','',3,'0'),(105,145,'2042985222','',3,'1'),(106,149,'204-985-1800','',1,'1'),(107,154,'1-800-265-8310','3131',1,'0'),(108,154,'226-971-2340','',3,'1'),(109,150,'(204) 786-8658','',1,'1'),(110,156,'2042313000','',1,'1'),(111,162,' (204) 257-4223','',1,'1'),(112,161,' (204) 257-4223','',1,'1'),(113,107,'204-388-9649','',1,'0'),(114,163,'204-284-9108','',3,'0'),(115,165,'204-957-0951','',1,'1'),(116,166,'204-957-0951','',1,'0'),(117,164,'204-957-0951','',1,'0'),(118,167,'1-800-957-6688','',1,'1'),(119,168,'204-831-9773','',1,'1'),(120,169,'204-831-0015','',1,'0'),(121,173,'204-272-7182','',1,'1'),(122,175,'2042222222','',1,'1'),(123,174,'2042222222','1',1,'1'),(124,177,'20422222222','',1,'1');
/*!40000 ALTER TABLE `phone_numbers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone_types`
--

DROP TABLE IF EXISTS `phone_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phone_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_types`
--

LOCK TABLES `phone_types` WRITE;
/*!40000 ALTER TABLE `phone_types` DISABLE KEYS */;
INSERT INTO `phone_types` VALUES (1,'Work',0),(2,'Home',5),(3,'Cell',10);
/*!40000 ALTER TABLE `phone_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_statuses`
--

DROP TABLE IF EXISTS `project_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_statuses`
--

LOCK TABLES `project_statuses` WRITE;
/*!40000 ALTER TABLE `project_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_tasks`
--

DROP TABLE IF EXISTS `project_tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project_tasks` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `body` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `deadline` datetime DEFAULT NULL,
  `done` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_tasks`
--

LOCK TABLES `project_tasks` WRITE;
/*!40000 ALTER TABLE `project_tasks` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `project_status_id` int(11) NOT NULL COMMENT 'Status for the Project',
  `max_hours` int(11) DEFAULT NULL,
  `quoted_hours` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `quote_id` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'1969-12-31 18:00:00','Project A','This is a sample project.',0,35,30,'2015-10-01','123'),(2,'1969-12-31 18:00:00','Project B','This is a second example project.',0,50,50,'2014-12-31','12345'),(3,'1969-12-31 18:00:00','Project C','Third project description goes here.',0,24,22,'2015-08-02',''),(5,'1969-12-31 18:00:00','Project D','This is project D\'s Description',0,45,40,'2014-08-31',''),(6,'1969-12-31 18:00:00','Project E','Project E Description',0,50,50,'2014-10-31',''),(7,'2014-05-22 16:15:38','Project F','Project F Description',0,40,30,'2015-12-31','54321'),(8,'2014-05-23 12:11:55','Project G','Project G Description',0,40,40,'2015-10-20','111111'),(9,'2014-08-14 10:26:24','Project H','Syn Ack',0,60,50,'2015-03-05','123452462462'),(10,'2014-08-19 16:37:35','Some Project','Some Project Here',0,20,20,'2015-01-01',''),(11,'2014-08-22 11:07:35','Test Project with Really Long Name','Test',0,45,40,'2015-01-01','');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (1,'Manitoba',1),(2,'Saskatchewan',1),(3,'Alberta',1),(4,'Ontario',1),(5,'British Columbia',1),(6,'Quebec',1),(7,'New Brunswick',1),(8,'Nova Scotia',1),(9,'Newfoundland',1),(10,'Prince Edward Island',1),(11,'Yukon',1),(12,'Northwest Territories',1),(13,'Nunavut',1),(14,'Alabama ',2),(15,'California ',2),(16,'Florida ',2),(17,'Illinois ',2),(18,'Kentucky ',2),(19,'Massachusetts ',2),(20,'Missouri ',2),(21,'New Hampshire ',2),(22,'North Carolina ',2),(23,'Oregon ',2),(24,'South Dakota ',2),(25,'Vermont ',2),(26,'Wisconsin ',2),(27,'Alaska ',2),(28,'Colorado ',2),(29,'Georgia ',2),(30,'Indiana ',2),(31,'Louisiana ',2),(32,'Michigan ',2),(33,'Montana ',2),(34,'New Jersey ',2),(35,'North Dakota ',2),(36,'Pennsylvania ',2),(37,'Tennessee ',2),(38,'Virginia ',2),(39,'Wyoming',2),(40,'Arizona ',2),(41,'Connecticut ',2),(42,'Hawaii ',2),(43,'Iowa ',2),(44,'Maine ',2),(45,'Minnesota ',2),(46,'Nebraska ',2),(47,'New Mexico ',2),(48,'Ohio ',2),(49,'Rhode Island ',2),(50,'Texas ',2),(51,'Washington ',2),(52,'Arkansas',2),(53,'Delaware',2),(54,'Idaho',2),(55,'Kansas',2),(56,'Maryland',2),(57,'Mississippi',2),(58,'Nevada',2),(59,'New York',2),(60,'Oklahoma',2),(61,'South Carolina',2),(62,'Utah',2),(63,'West Virginia',2);
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quote_types`
--

DROP TABLE IF EXISTS `quote_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quote_types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quote_types`
--

LOCK TABLES `quote_types` WRITE;
/*!40000 ALTER TABLE `quote_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `quote_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quotes`
--

DROP TABLE IF EXISTS `quotes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quote_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quotes`
--

LOCK TABLES `quotes` WRITE;
/*!40000 ALTER TABLE `quotes` DISABLE KEYS */;
/*!40000 ALTER TABLE `quotes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_types`
--

DROP TABLE IF EXISTS `service_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_types`
--

LOCK TABLES `service_types` WRITE;
/*!40000 ALTER TABLE `service_types` DISABLE KEYS */;
INSERT INTO `service_types` VALUES (1,'Standard - Contract',0),(2,'Emergency - Contract',5),(3,'Standard - Hourly',10),(4,'Emergency - Hourly',15);
/*!40000 ALTER TABLE `service_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_event_types`
--

DROP TABLE IF EXISTS `ticket_event_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_event_types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_event_types`
--

LOCK TABLES `ticket_event_types` WRITE;
/*!40000 ALTER TABLE `ticket_event_types` DISABLE KEYS */;
INSERT INTO `ticket_event_types` VALUES (1,'Service',0),(2,'Informational',5),(3,'Internal',10);
/*!40000 ALTER TABLE `ticket_event_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_events`
--

DROP TABLE IF EXISTS `ticket_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `ticket_event_type_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `billing_type_id` int(11) NOT NULL,
  `time_type_id` int(11) NOT NULL,
  `time_taken` float NOT NULL,
  `is_resolution` binary(1) NOT NULL DEFAULT '0',
  `resolution_date` datetime NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `event_ticket_id` (`ticket_id`),
  CONSTRAINT `ticket_events_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_events`
--

LOCK TABLES `ticket_events` WRITE;
/*!40000 ALTER TABLE `ticket_events` DISABLE KEYS */;
INSERT INTO `ticket_events` VALUES (1,5,1,'Test',15,'2014-05-12 13:16:46',1,2,100,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,6,2,'Test Event',15,'2014-05-12 15:36:40',-99,-99,0,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,9,1,'Event to see if DIS Updates.',15,'2014-05-14 09:20:42',1,2,5,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,16,2,'p;[l]p;[l]p;l]p;[l]',15,'2014-06-06 16:41:09',-99,-99,0,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,6,2,'<p>Test Event Added</p>\r\n',15,'2014-06-12 15:07:08',-99,-99,0,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,6,2,'<p>UI Colour Changed</p>\r\n',15,'2014-06-12 15:11:59',-99,-99,0,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,7,3,'<p>Some Sample Event Details Here.</p>\r\n',15,'2014-08-14 17:11:55',1,2,950,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,7,3,'<p>Some Huge Event.</p>\r\n',15,'2014-08-14 17:22:14',1,2,1500,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,10,1,'<p>test</p>\r\n',15,'2014-08-19 15:33:40',1,2,120,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,12,1,'<p>Some event happened.</p>\r\n',15,'2014-08-21 15:35:22',1,2,60,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,30,2,'<p>1111111111111111 111 1 111111111111 1 111 111111111 1111111111 1111111111111 111111111111111111111111111111 11111111111111111111 11111111111111111111111111111111111 11111111111111111111111 111111111111111111111111111 111111111111111111111 1111111111 111111 11111 11111</p>\r\n',15,'2014-10-09 17:49:03',-99,-99,0,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,8,1,'<p>Test Event (60 Minutes)</p>\r\n',15,'2015-03-06 10:16:26',1,2,60,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,9,1,'<p>Test (4 Billing Units)</p>\r\n',15,'2015-03-06 10:59:14',1,2,60,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,6,1,'<p>Testing Billable Service.&nbsp;</p>\r\n',15,'2015-03-06 11:56:43',1,2,200,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,6,1,'<p>Testing sum of products.</p>\r\n',15,'2015-03-06 11:57:07',1,2,180,'0','0000-00-00 00:00:00','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `ticket_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_history`
--

DROP TABLE IF EXISTS `ticket_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `action` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `history_ticket_id` (`ticket_id`),
  CONSTRAINT `ticket_history_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=332 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_history`
--

LOCK TABLES `ticket_history` WRITE;
/*!40000 ALTER TABLE `ticket_history` DISABLE KEYS */;
INSERT INTO `ticket_history` VALUES (19,4,15,'2014-05-08 14:06:33','Ticket Created'),(27,5,15,'2014-05-08 15:24:11','Ticket Created'),(35,5,15,'2014-05-12 12:31:43','Assigned changed from <> to <David Richardson>'),(36,5,15,'2014-05-12 12:31:53','Status changed from <> to <Open>'),(37,5,15,'2014-05-12 12:31:59','Priority changed from <> to <High>'),(40,5,15,'2014-05-12 13:08:55','Status changed from <Open> to <In Progress>'),(41,5,15,'2014-05-12 13:16:47','Event Added'),(46,6,15,'2014-05-12 15:17:57','Ticket Created'),(47,6,15,'2014-05-12 15:36:41','Event Added'),(50,7,15,'2014-05-12 16:10:13','Ticket Created'),(51,7,15,'2014-05-12 16:45:10','Priority changed from <High> to <Medium>'),(52,4,15,'2014-05-12 17:07:09','Status changed from <> to <Open>'),(53,4,15,'2014-05-12 17:07:21','Assigned changed from <> to <David Richardson>'),(54,5,15,'2014-05-12 17:22:28','Priority changed from <High> to <Critical>'),(56,8,15,'2014-05-13 09:54:47','Ticket Created'),(57,9,15,'2014-05-13 15:07:21','Ticket Created'),(58,9,15,'2014-05-14 09:20:42','Event Added'),(59,9,15,'2014-05-14 09:21:26','Status changed from <Open> to <In Progress>'),(61,4,15,'2014-05-14 17:26:26','Status changed from <Open> to <In Progress>'),(62,8,15,'2014-05-20 12:29:52','Status changed from <Open> to <In Progress>'),(63,10,15,'2014-05-20 17:26:04','Ticket Created'),(64,10,15,'2014-05-22 13:30:05','Status changed from <Open> to <In Progress>'),(65,4,15,'2014-05-22 13:46:17','Status changed from <In Progress> to <Closed>'),(66,5,15,'2014-05-23 16:07:30','Assigned changed from <David Richardson> to <Justin Davidow>'),(67,11,15,'2014-05-26 13:04:01','Ticket Created'),(68,12,15,'2014-06-05 17:00:16','Ticket Created'),(69,12,15,'2014-06-06 14:12:03','Assigned changed from <No User> to <David Richardson>'),(70,12,15,'2014-06-06 14:12:46','Assigned changed from <No User> to <David Richardson>'),(71,13,15,'2014-06-06 14:23:12','Ticket Created'),(72,12,15,'2014-06-06 14:31:32','Assigned changed from <No User> to <David Richardson>'),(73,12,15,'2014-06-06 14:32:00','Assigned changed from <No User> to <David Richardson>'),(74,12,15,'2014-06-06 14:37:19','Assigned changed from <No User> to <David Richardson>'),(75,14,15,'2014-06-06 14:47:43','Ticket Created'),(76,15,15,'2014-06-06 15:10:46','Ticket Created'),(77,13,15,'2014-06-06 16:17:38','Assigned changed from <No User> to <David Richardson>'),(78,14,15,'2014-06-06 16:17:40','Assigned changed from <No User> to <David Richardson>'),(79,13,15,'2014-06-06 16:19:38','Assigned changed from <No User> to <David Richardson>'),(80,14,15,'2014-06-06 16:20:08','Assigned changed from <No User> to <David Richardson>'),(81,13,15,'2014-06-06 16:23:55','Assigned changed from <No User> to <David Richardson>'),(82,13,15,'2014-06-06 16:26:27','Assigned changed from <No User> to <David Richardson>'),(83,16,15,'2014-06-06 16:31:50','Ticket Created'),(84,13,15,'2014-06-06 16:32:23','Assigned changed from <No User> to <David Richardson>'),(85,14,15,'2014-06-06 16:34:19','Assigned changed from <No User> to <David Richardson>'),(86,15,15,'2014-06-06 16:35:10','Assigned changed from <No User> to <David Richardson>'),(87,16,15,'2014-06-06 16:35:27','Assigned changed from <No User> to <David Richardson>'),(88,14,15,'2014-06-06 16:37:52','Assigned changed from <No User> to <David Richardson>'),(89,15,15,'2014-06-06 16:38:01','Assigned changed from <No User> to <David Richardson>'),(90,16,15,'2014-06-06 16:41:09','Event Added'),(91,14,15,'2014-06-06 16:48:35','Assigned changed from <No User> to <David Richardson>'),(92,15,15,'2014-06-06 16:48:37','Assigned changed from <No User> to <David Richardson>'),(93,14,15,'2014-06-06 17:01:56','Assigned changed from <No User> to <David Richardson>'),(94,14,15,'2014-06-06 17:14:27','Assigned changed from <No User> to <David Richardson>'),(95,6,15,'2014-06-12 15:07:08','Event Added'),(96,6,15,'2014-06-12 15:11:59','Event Added'),(103,18,15,'2014-06-12 15:59:32','Ticket Created'),(104,16,15,'2014-06-12 16:03:46','Assigned changed from <No User> to <David Richardson>'),(105,15,15,'2014-06-12 16:03:49','Assigned changed from <No User> to <David Richardson>'),(106,19,15,'2014-06-12 16:05:37','Ticket Created'),(107,18,15,'2014-06-12 17:31:39','Assigned changed from <No User> to <David Richardson>'),(108,19,15,'2014-06-18 13:40:29','Event Added'),(109,20,15,'2014-07-31 11:40:29','Ticket Created'),(110,19,15,'2014-07-31 14:09:36','Assigned changed from <No User> to <David Richardson>'),(111,20,15,'2014-07-31 14:09:38','Assigned changed from <No User> to <David Richardson>'),(112,21,15,'2014-07-31 14:49:32','Ticket Created'),(113,22,15,'2014-07-31 14:50:01','Ticket Created'),(114,6,15,'2014-08-01 09:41:38','Ticket Added to Project 1'),(115,6,15,'2014-08-01 09:41:59','Ticket Added to Project 0'),(116,21,15,'2014-08-01 09:55:06','Assigned changed from <No User> to <David Richardson>'),(117,22,15,'2014-08-01 09:55:13','Assigned changed from <No User> to <David Richardson>'),(118,23,15,'2014-08-01 09:56:04','Ticket Created'),(119,23,15,'2014-08-01 09:56:32','Assigned changed from <No User> to <David Richardson>'),(120,6,15,'2014-08-13 15:58:14','Ticket Completion updated to 90%'),(121,6,15,'2014-08-13 15:58:18','Ticket Completion updated to 70%'),(122,6,15,'2014-08-13 15:58:24','Ticket Completion updated to 90%'),(123,6,15,'2014-08-13 16:00:25','Status changed from <Open> to <Closed>'),(124,6,15,'2014-08-13 16:00:26','Ticket Closed'),(125,6,15,'2014-08-13 16:00:31','Status changed from <Closed> to <Open>'),(126,6,15,'2014-08-13 16:01:30','Status changed from <Open> to <Closed>'),(127,6,15,'2014-08-13 16:01:31','Ticket Closed -- Completion set to 100%'),(128,6,15,'2014-08-13 16:01:34','Status changed from <Closed> to <Open>'),(129,6,15,'2014-08-13 16:02:09','Status changed from <Open> to <Closed>'),(130,6,15,'2014-08-13 16:02:10','Ticket Closed -- Completion set to 100%'),(131,6,15,'2014-08-13 16:02:13','Status changed from <Closed> to <Open>'),(132,6,15,'2014-08-13 16:02:24','Ticket Completion updated to 70%'),(133,6,15,'2014-08-13 16:42:58','Status changed from <Open> to <Closed>'),(134,6,15,'2014-08-13 16:42:59','Ticket Closed -- Completion set to 100%'),(135,8,15,'2014-08-13 16:43:15','Status changed from <In Progress> to <Closed>'),(136,8,15,'2014-08-13 16:43:15','Ticket Closed -- Completion set to 100%'),(137,9,15,'2014-08-13 16:43:22','Status changed from <In Progress> to <Closed>'),(138,9,15,'2014-08-13 16:43:22','Ticket Closed -- Completion set to 100%'),(139,18,15,'2014-08-13 16:43:35','Status changed from <Open> to <Closed>'),(140,18,15,'2014-08-13 16:43:36','Ticket Closed -- Completion set to 100%'),(141,10,15,'2014-08-14 13:20:37','Status changed from <In Progress> to <Closed>'),(142,10,15,'2014-08-14 13:20:38','Ticket Closed -- Completion set to 100%'),(143,10,15,'2014-08-14 13:52:47','Billing Status Set To <Billed>'),(144,10,15,'2014-08-14 13:52:57','Billing Status Set To <Billed>'),(145,4,15,'2014-08-14 14:05:39','Status changed from <Closed> to <Open>'),(146,4,15,'2014-08-14 14:05:46','Status changed from <Open> to <Closed>'),(147,4,15,'2014-08-14 14:05:47','Ticket Closed -- Completion set to 100%'),(148,18,15,'2014-08-14 14:19:58','Billing Status Set To <Billed>'),(149,18,15,'2014-08-14 14:20:01','Billing Status Set To <Billed>'),(150,18,15,'2014-08-14 14:22:08','Billing Status Set To <Billed>'),(151,4,15,'2014-08-14 15:24:30','Billing Status Set To <Billed>'),(152,4,15,'2014-08-14 15:48:31','Ticket Billing Status set to '),(153,4,15,'2014-08-14 15:49:00','Ticket Billing Status set to '),(154,4,15,'2014-08-14 15:49:26','Ticket Billing Status set to '),(155,4,15,'2014-08-14 15:49:26','Status changed from <Closed> to <Open>'),(156,4,15,'2014-08-14 15:49:35','Ticket Billing Status set to '),(157,4,15,'2014-08-14 15:50:29','Ticket Billing Status set to '),(158,4,15,'2014-08-14 15:50:33','Ticket Billing Status set to '),(159,4,15,'2014-08-14 15:50:33','Status changed from <Open> to <Closed>'),(160,4,15,'2014-08-14 15:51:02','Ticket Billing Status set to 1'),(161,4,15,'2014-08-14 15:51:02','Status changed from <Closed> to <Open>'),(162,4,15,'2014-08-14 15:51:07','Ticket Billing Status set to 2'),(163,4,15,'2014-08-14 15:51:07','Status changed from <Open> to <Closed>'),(164,4,15,'2014-08-14 15:53:48','Ticket Billing Status set to Open Ticket'),(165,4,15,'2014-08-14 15:53:48','Status changed from <Closed> to <Open>'),(166,4,15,'2014-08-14 15:53:55','Ticket Billing Status set to Ready to Bill'),(167,4,15,'2014-08-14 15:53:55','Status changed from <Open> to <Closed>'),(168,4,15,'2014-08-14 15:54:14','Ticket Billing Status set to <Ready to Bill>'),(169,4,15,'2014-08-14 15:57:25','Ticket Billing Status set to <Open Ticket>'),(170,4,15,'2014-08-14 15:57:25','Status changed from <Closed> to <Open>'),(171,4,15,'2014-08-14 15:57:35','Status changed from <Open> to <Closed>'),(172,4,15,'2014-08-14 15:57:36','Ticket Closed -- Completion set to 100%'),(173,6,15,'2014-08-14 16:49:14','Billing Status Set To <Billed>'),(174,8,15,'2014-08-14 16:49:16','Billing Status Set To <Billed>'),(175,10,15,'2014-08-14 16:54:27','Billing Status Set to <Paid>'),(176,18,15,'2014-08-14 16:54:29','Billing Status Set to <Paid>'),(177,6,15,'2014-08-14 16:54:30','Billing Status Set to <Paid>'),(178,8,15,'2014-08-14 16:54:32','Billing Status Set to <Paid>'),(179,4,15,'2014-08-14 16:54:36','Billing Status Set To <Billed>'),(180,4,15,'2014-08-14 16:54:39','Billing Status Set to <Paid>'),(181,4,15,'2014-08-14 16:55:16','Ticket Billing Status set to <Ready to Bill>'),(182,6,15,'2014-08-14 16:55:32','Ticket Billing Status set to <Ready to Bill>'),(183,8,15,'2014-08-14 16:55:41','Ticket Billing Status set to <Ready to Bill>'),(184,9,15,'2014-08-14 16:55:49','Ticket Billing Status set to <Ready to Bill>'),(185,10,15,'2014-08-14 16:55:58','Ticket Billing Status set to <Ready to Bill>'),(186,18,15,'2014-08-14 16:56:10','Ticket Billing Status set to <Ready to Bill>'),(187,4,15,'2014-08-14 16:56:35','Billing Status Set To <Billed>'),(188,9,15,'2014-08-14 16:56:36','Billing Status Set To <Billed>'),(189,4,15,'2014-08-14 16:56:51','Billing Status Set to <Paid>'),(190,4,15,'2014-08-14 16:57:48','Billing Status Set to <Paid>'),(191,7,15,'2014-08-14 17:11:55','Event Added'),(192,7,15,'2014-08-14 17:17:57','Event Added'),(193,7,15,'2014-08-14 17:18:31','Event Added'),(194,7,15,'2014-08-14 17:19:10','Event Deleted'),(195,7,15,'2014-08-14 17:19:14','Event Deleted'),(196,7,15,'2014-08-14 17:22:14','Event Added'),(197,10,15,'2014-08-15 16:46:08','Billing Status Set To <Billed>'),(198,12,15,'2014-08-15 16:46:37','Ticket Billing Status set to <Ready to Bill>'),(199,12,15,'2014-08-15 16:46:37','Status changed from <Open> to <Closed>'),(200,13,15,'2014-08-15 16:47:15','Ticket Billing Status set to <Ready to Bill>'),(201,13,15,'2014-08-15 16:47:15','Status changed from <Open> to <Closed>'),(202,14,15,'2014-08-15 16:47:41','Ticket Billing Status set to <Ready to Bill>'),(203,14,15,'2014-08-15 16:47:41','Status changed from <Open> to <Closed>'),(205,24,15,'2014-08-19 10:09:39','Ticket Created'),(206,24,15,'2014-08-19 10:09:48','Assigned changed from <No User> to <David Richardson>'),(207,11,15,'2014-08-19 14:40:14','Status changed from <Open> to <Closed>'),(208,11,15,'2014-08-19 14:40:15','Ticket Closed -- Completion set to 100%'),(209,11,15,'2014-08-19 14:44:51','Status changed from <Closed> to <Open>'),(210,11,15,'2014-08-19 14:46:37','Status changed from <Open> to <Closed>'),(211,11,15,'2014-08-19 14:46:38','Ticket Closed -- Completion set to 100%'),(212,11,15,'2014-08-19 14:46:42','Status changed from <Closed> to <Open>'),(213,11,15,'2014-08-19 14:46:42','Ticket Re-Opened'),(214,11,15,'2014-08-19 14:46:47','Status changed from <Open> to <Closed>'),(215,11,15,'2014-08-19 14:46:48','Ticket Closed -- Completion set to 100%'),(216,11,15,'2014-08-19 14:48:28','Ticket Billing Status set to <Open Ticket>'),(217,11,15,'2014-08-19 14:48:28','Status changed from <Closed> to <Open>'),(218,10,15,'2014-08-19 15:33:40','Event Added'),(219,11,15,'2014-08-20 17:00:48','Status changed from <Open> to <Closed>'),(220,11,15,'2014-08-20 17:00:53','Ticket Closed -- Completion set to 100%'),(221,12,15,'2014-08-20 17:01:10','Billing Status Set To <Billed>'),(222,11,15,'2014-08-20 17:01:12','Billing Status Set To <Billed>'),(223,13,15,'2014-08-20 17:01:13','Billing Status Set To <Billed>'),(224,14,15,'2014-08-20 17:01:14','Billing Status Set To <Billed>'),(225,18,15,'2014-08-20 17:01:15','Billing Status Set To <Billed>'),(226,19,15,'2014-08-21 11:43:52','Status changed from <Open> to <Closed>'),(227,19,15,'2014-08-21 11:43:55','Ticket Closed -- Completion set to 100%'),(228,15,15,'2014-08-21 11:44:11','Status changed from <Open> to <Closed>'),(229,15,15,'2014-08-21 11:44:12','Ticket Closed -- Completion set to 100%'),(230,20,15,'2014-08-21 11:44:52','Ticket Billing Status set to <Billed>'),(231,20,15,'2014-08-21 11:44:57','Status changed from <Open> to <Closed>'),(232,20,15,'2014-08-21 11:44:59','Ticket Closed -- Completion set to 100%'),(233,20,15,'2014-08-21 11:45:04','Ticket Billing Status set to <Billed>'),(234,21,15,'2014-08-21 11:45:44','Status changed from <Open> to <Closed>'),(235,21,15,'2014-08-21 11:45:45','Ticket Closed -- Completion set to 100%'),(236,23,15,'2014-08-21 11:45:58','Status changed from <Open> to <Closed>'),(237,23,15,'2014-08-21 11:45:59','Ticket Closed -- Completion set to 100%'),(238,20,15,'2014-08-21 11:46:53','Ticket Billing Status set to <Overdue>'),(239,4,15,'2014-08-21 11:58:49','Ticket Billing Status set to <Ready to Bill>'),(240,6,15,'2014-08-21 11:58:55','Ticket Billing Status set to <Ready to Bill>'),(241,8,15,'2014-08-21 11:59:02','Ticket Billing Status set to <Ready to Bill>'),(242,9,15,'2014-08-21 11:59:06','Ticket Billing Status set to <Ready to Bill>'),(243,10,15,'2014-08-21 11:59:12','Ticket Billing Status set to <Ready to Bill>'),(244,11,15,'2014-08-21 11:59:19','Ticket Billing Status set to <Ready to Bill>'),(245,24,15,'2014-08-21 15:16:02','Status changed from <Open> to <Closed>'),(246,24,15,'2014-08-21 15:16:03','Ticket Closed -- Completion set to 100%'),(247,12,15,'2014-08-21 15:35:22','Event Added'),(248,12,15,'2014-08-21 15:35:35','Ticket Billing Status set to <Ready to Bill>'),(249,24,15,'2014-08-21 15:35:42','Ticket Billing Status set to <Ready to Bill>'),(250,16,15,'2014-08-22 11:19:16','Ticket Billing Status set to <Ready to Bill>'),(251,16,15,'2014-08-22 11:19:16','Status changed from <Open> to <Closed>'),(252,22,15,'2014-08-22 11:20:53','Ticket Billing Status set to <Ready to Bill>'),(253,22,15,'2014-08-22 11:20:53','Status changed from <Open> to <Closed>'),(254,12,15,'2014-08-25 16:21:06','Ticket Billing Status set to <Ready to Bill>'),(255,24,15,'2014-08-25 16:21:19','Ticket Billing Status set to <Ready to Bill>'),(256,21,15,'2014-08-25 16:21:33','Ticket Billing Status set to <Ready to Bill>'),(257,25,15,'2014-08-26 13:22:45','Ticket Created'),(258,26,15,'2014-09-16 09:48:57','Ticket Created'),(259,27,15,'2014-09-16 17:11:56','Ticket Created'),(260,26,15,'2014-09-16 17:13:56','Assigned changed from <No User> to <David Richardson>'),(261,28,15,'2014-09-17 12:05:57','Ticket Created'),(262,29,15,'2014-09-17 12:06:02','Ticket Created'),(263,4,15,'2014-10-08 14:45:09','Ticket Billing Status set to <Ready to Bill>'),(264,6,15,'2014-10-08 14:45:18','Ticket Billing Status set to <Ready to Bill>'),(265,8,15,'2014-10-08 14:45:27','Ticket Billing Status set to <Ready to Bill>'),(266,9,15,'2014-10-08 14:45:38','Ticket Billing Status set to <Ready to Bill>'),(267,9,15,'2014-10-08 14:45:50','Ticket Billing Status set to <Billed>'),(268,11,15,'2014-10-08 14:45:58','Ticket Billing Status set to <Billed>'),(269,12,15,'2014-10-08 14:46:09','Ticket Billing Status set to <Billed>'),(270,13,15,'2014-10-08 14:46:18','Ticket Billing Status set to <Ready to Bill>'),(271,18,15,'2014-10-08 14:46:26','Ticket Billing Status set to <Ready to Bill>'),(272,30,15,'2014-10-08 14:48:56','Ticket Created'),(273,25,15,'2014-10-08 14:49:34','Ticket Billing Status set to <Ready to Bill>'),(274,25,15,'2014-10-08 14:49:35','Status changed from <Open> to <Closed>'),(275,26,15,'2014-10-08 14:49:48','Ticket Billing Status set to <Ready to Bill>'),(276,26,15,'2014-10-08 14:49:48','Status changed from <Open> to <Closed>'),(277,30,15,'2014-10-08 14:50:01','Ticket Billing Status set to <Billed>'),(278,30,15,'2014-10-08 14:50:01','Status changed from <Open> to <Closed>'),(279,4,15,'2014-10-08 14:59:15','Ticket Billing Status set to <Ready to Bill>'),(280,6,15,'2014-10-08 14:59:26','Ticket Billing Status set to <Ready to Bill>'),(281,8,15,'2014-10-08 14:59:33','Ticket Billing Status set to <Ready to Bill>'),(282,8,15,'2014-10-08 14:59:44','Ticket Billing Status set to <Ready to Bill>'),(283,9,15,'2014-10-08 14:59:51','Ticket Billing Status set to <Ready to Bill>'),(284,10,15,'2014-10-08 14:59:58','Ticket Billing Status set to <Ready to Bill>'),(285,11,15,'2014-10-08 15:00:09','Ticket Billing Status set to <Ready to Bill>'),(286,12,15,'2014-10-08 15:00:20','Ticket Billing Status set to <Ready to Bill>'),(287,13,15,'2014-10-08 15:00:31','Ticket Billing Status set to <Ready to Bill>'),(288,14,15,'2014-10-08 15:00:38','Ticket Billing Status set to <Ready to Bill>'),(289,15,15,'2014-10-08 15:00:46','Ticket Billing Status set to <Ready to Bill>'),(290,16,15,'2014-10-08 15:01:02','Ticket Billing Status set to <Ready to Bill>'),(291,18,15,'2014-10-08 15:01:10','Ticket Billing Status set to <Ready to Bill>'),(292,19,15,'2014-10-08 15:01:19','Ticket Billing Status set to <Ready to Bill>'),(293,20,15,'2014-10-08 15:01:32','Ticket Billing Status set to <Ready to Bill>'),(294,21,15,'2014-10-08 15:01:42','Ticket Billing Status set to <Ready to Bill>'),(295,25,15,'2014-10-08 15:02:29','Ticket Billing Status set to <Ready to Bill>'),(296,12,15,'2014-10-08 15:16:09','Ticket Billing Status set to <Ready to Bill>'),(297,18,15,'2014-10-08 15:16:18','Ticket Billing Status set to <Ready to Bill>'),(298,19,15,'2014-10-08 15:16:26','Ticket Billing Status set to <Ready to Bill>'),(299,20,15,'2014-10-08 15:16:33','Ticket Billing Status set to <Ready to Bill>'),(300,21,15,'2014-10-08 15:16:39','Ticket Billing Status set to <Ready to Bill>'),(301,4,15,'2014-10-08 15:22:36','Ticket Billing Status set to <Ready to Bill>'),(302,6,15,'2014-10-08 15:22:45','Ticket Billing Status set to <Ready to Bill>'),(303,8,15,'2014-10-08 15:22:52','Ticket Billing Status set to <Ready to Bill>'),(304,9,15,'2014-10-08 15:22:57','Ticket Billing Status set to <Ready to Bill>'),(305,10,15,'2014-10-08 15:23:03','Ticket Billing Status set to <Ready to Bill>'),(306,11,15,'2014-10-08 15:23:10','Ticket Billing Status set to <Ready to Bill>'),(307,13,15,'2014-10-08 15:23:18','Ticket Billing Status set to <Ready to Bill>'),(308,14,15,'2014-10-08 15:23:25','Ticket Billing Status set to <Ready to Bill>'),(309,15,15,'2014-10-08 15:23:33','Ticket Billing Status set to <Ready to Bill>'),(310,16,15,'2014-10-08 15:23:55','Ticket Billing Status set to <Ready to Bill>'),(311,19,15,'2014-10-09 16:38:27','Event Deleted'),(313,30,15,'2014-10-09 17:01:06','Event Added'),(314,4,15,'2014-12-18 14:58:06','Status changed from <Closed> to <Open>'),(315,4,15,'2014-12-18 14:58:12','Ticket Re-Opened'),(316,4,15,'2014-12-18 14:58:25','Status changed from <Open> to <Closed>'),(317,4,15,'2014-12-18 14:58:30','Ticket Closed -- Completion set to 100%'),(318,4,15,'2014-12-18 14:58:31','Ticket Closed -- Completion set to 100%'),(319,27,15,'2014-12-18 15:05:54','Assigned changed from <No User> to <David Richardson>'),(320,28,15,'2014-12-18 15:06:01','Assigned changed from <No User> to <David Richardson>'),(321,29,15,'2014-12-18 15:06:09','Assigned changed from <No User> to <David Richardson>'),(322,4,15,'2014-12-18 15:12:35','Ticket Billing Status set to <Paid>'),(323,6,15,'2014-12-18 15:12:45','Ticket Billing Status set to <Paid>'),(324,8,15,'2014-12-18 15:13:03','Ticket Billing Status set to <Overdue>'),(325,6,15,'2014-12-18 15:34:52','Status changed from <Closed> to <Open>'),(326,6,15,'2014-12-18 15:34:58','Ticket Re-Opened'),(327,31,15,'2014-12-18 16:27:00','Ticket Created'),(328,8,15,'2015-03-06 10:16:26','Event Added'),(329,9,15,'2015-03-06 10:58:51','Event Added'),(330,6,15,'2015-03-06 11:56:43','Event Added'),(331,6,15,'2015-03-06 11:57:07','Event Added');
/*!40000 ALTER TABLE `ticket_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_priorities`
--

DROP TABLE IF EXISTS `ticket_priorities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_priorities` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_priorities`
--

LOCK TABLES `ticket_priorities` WRITE;
/*!40000 ALTER TABLE `ticket_priorities` DISABLE KEYS */;
INSERT INTO `ticket_priorities` VALUES (1,'Low',0),(2,'Medium',1),(3,'High',2),(4,'Critical',3);
/*!40000 ALTER TABLE `ticket_priorities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_statuses`
--

DROP TABLE IF EXISTS `ticket_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_statuses`
--

LOCK TABLES `ticket_statuses` WRITE;
/*!40000 ALTER TABLE `ticket_statuses` DISABLE KEYS */;
INSERT INTO `ticket_statuses` VALUES (1,'Open',0),(2,'Closed',15),(3,'In Progress',5),(4,'Waiting',10);
/*!40000 ALTER TABLE `ticket_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ticket_types`
--

DROP TABLE IF EXISTS `ticket_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ticket_types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ticket_types`
--

LOCK TABLES `ticket_types` WRITE;
/*!40000 ALTER TABLE `ticket_types` DISABLE KEYS */;
INSERT INTO `ticket_types` VALUES (1,'Hardware',0),(2,'Software',1),(3,'Network',2),(4,'Website',3),(5,'Phone',4);
/*!40000 ALTER TABLE `ticket_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_created` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `ticket_type_id` int(11) NOT NULL,
  `service_type_id` int(11) NOT NULL,
  `ticket_priority_id` int(11) NOT NULL,
  `problem_description` text NOT NULL,
  `solution` text NOT NULL,
  `ticket_status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dis` datetime NOT NULL,
  `customer_site_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL DEFAULT '0',
  `completion` int(11) NOT NULL COMMENT '10% increments of project completion',
  `billing_status_id` varchar(45) NOT NULL,
  `quote_id` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (4,'0000-00-00 00:00:00',1,1,3,1,2,'Some random ticket descr','',2,15,'2014-12-18 14:58:25',0,0,100,'5','0'),(5,'0000-00-00 00:00:00',1,1,3,1,4,'This is a problem description.','',2,8,'2014-05-12 13:08:55',0,1,100,'3','123'),(6,'2014-05-12 15:17:57',1,1,4,1,3,'Testsetsetsty','',1,15,'2014-12-18 15:34:52',0,0,100,'1','0'),(7,'2014-05-12 16:10:13',1,1,2,2,2,'rghaerhaehrhah','',2,8,'2014-05-12 16:10:13',0,1,80,'3','123'),(8,'2014-05-13 09:54:47',1,1,2,2,3,'test','',2,15,'2014-08-13 16:43:15',0,2,100,'3','0'),(9,'2014-05-13 15:07:21',1,1,3,3,2,'This is an <strong>example</strong> description for the projects module.','',2,15,'2014-08-13 16:43:22',0,1,100,'3','123'),(10,'2014-05-20 17:26:04',1,1,1,1,2,'Test','',2,15,'2014-08-14 13:20:37',1,3,100,'3','0'),(11,'2014-05-26 13:04:01',1,1,1,1,1,'&nbsp;&nbsp;&nbsp;&nbsp;test<br><div>TEST</div><br><div>test</div>','',2,15,'2014-08-20 17:00:48',0,0,100,'3','0'),(12,'2014-06-05 17:00:16',2,2,1,1,1,'This is the project description here.','',2,15,'2014-08-15 16:46:37',0,0,100,'3','0'),(13,'2014-06-06 14:23:12',1,1,1,1,2,'Sample unassigned ticket.','',2,15,'2014-08-15 16:47:15',0,0,100,'3','0'),(14,'2014-06-06 14:47:43',1,1,1,1,2,'Test Problem Description Here.','',2,15,'2014-08-15 16:47:41',1,0,100,'3','0'),(15,'2014-06-06 15:10:46',1,1,1,1,2,'This is a blanket ticket assigned to nobody.','',2,15,'2014-08-21 11:44:11',0,0,100,'3','0'),(16,'2014-06-06 16:31:50',1,1,1,1,1,'This is another sample ticket.','',2,15,'2014-08-22 11:19:16',0,0,100,'3','0'),(18,'2014-06-12 15:59:32',1,1,1,1,2,'<div style=\"width: 80%\">\r\n<h3><strong>Some Example Ticket Title</strong></h3>\r\n\r\n<p>Some Example Ticket Description</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"float:right; width:100%\">\r\n	<caption><strong>Ticket Tasks</strong></caption>\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"width:50%\">Task</th>\r\n			<th style=\"width:30%\">Comments</th>\r\n			<th style=\"width:20%\">Percentage Completed</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Redesign CKEditor Interface</td>\r\n			<td>Finished.</td>\r\n			<td>100%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Create TT Ticket and Event Templates.</td>\r\n			<td>Ticket has been created, event has not.</td>\r\n			<td>50%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Push this to dev server for testing.</td>\r\n			<td>This has not been started yet.</td>\r\n			<td>30%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n','',2,15,'2014-08-13 16:43:35',0,0,100,'3','0'),(19,'2014-06-12 16:05:37',1,1,1,1,1,'<div style=\"width: 80%\">\r\n<h3><strong>Fix Product Search on Cleanflow.</strong></h3>\r\n\r\n<p>Search is slow, doesn&#39;t have images and needs to include more relevant results. Also some simple formatting things need to be fixed and cross browser compliance verified,</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"float:right; width:100%\">\r\n	<caption><strong>Ticket Tasks</strong></caption>\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"width:50%\">Task</th>\r\n			<th style=\"width:30%\">Comments</th>\r\n			<th style=\"width:20%\">Percentage Completed</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Display Thumbnails in Search Results</td>\r\n			<td>Almost done, needs formatting</td>\r\n			<td>90%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Setup Dev Site</td>\r\n			<td>In Progress</td>\r\n			<td>100%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Some other task.</td>\r\n			<td>Waiting</td>\r\n			<td>0%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n','',2,15,'2014-08-21 11:43:52',0,0,100,'3','0'),(20,'2014-07-31 11:40:29',2,2,2,2,2,'<p>Test</p>\r\n','',2,15,'2014-08-21 11:44:57',0,0,100,'3','0'),(21,'2014-07-31 14:49:32',2,2,1,1,2,'<p>Random Test Ticket</p>\r\n','',2,15,'2014-08-21 11:45:44',0,0,100,'3','0'),(22,'2014-07-31 14:50:01',1,1,4,3,2,'<p>Some other ticket</p>\r\n','',2,15,'2014-08-22 11:20:53',0,0,100,'3','0'),(23,'2014-08-01 09:56:04',2,2,2,1,2,'<p>Testing to see if unassignedtickets grid&nbsp;gets hidden on no tickets, but displayed when unassigned tickets are found.</p>\r\n','',2,15,'2014-08-21 11:45:58',0,0,100,'3','0'),(24,'2014-08-19 10:09:39',2,2,1,1,1,'<p>Test</p>\r\n','',2,15,'2014-08-21 15:16:02',0,0,100,'3','0'),(25,'2014-08-26 13:22:45',1,1,1,1,3,'<p>Test</p>\r\n','',2,15,'2014-10-08 14:49:34',0,0,100,'3',NULL),(26,'2014-09-16 09:48:57',2,2,2,1,1,'<p>Sample Ticket</p>\r\n','',2,15,'2014-10-08 14:49:48',0,0,100,'3',NULL),(27,'2014-09-16 17:11:56',1,1,1,2,3,'<p>Testing Email Generation</p>\r\n','',2,15,'2014-09-16 17:11:56',0,0,0,'3',NULL),(28,'2014-09-17 12:05:57',1,1,1,3,4,'Test','',2,15,'2014-09-17 12:05:57',0,0,0,'3',NULL),(29,'2014-09-17 12:06:02',1,1,1,3,4,'Test','',2,15,'2014-09-17 12:06:02',0,0,0,'3',NULL),(30,'2014-10-08 14:48:56',1,1,3,3,2,'<p>Test Test Test</p>\r\n','',2,15,'2014-10-08 14:50:01',0,0,100,'3',NULL),(31,'2014-12-18 16:27:00',2,2,5,1,1,'<p>Test Ticket for Problem Type &#39;Phone&#39;.</p>\r\n','',1,15,'2014-12-18 16:27:00',0,0,0,'1',NULL);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_types`
--

DROP TABLE IF EXISTS `time_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time_types` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_types`
--

LOCK TABLES `time_types` WRITE;
/*!40000 ALTER TABLE `time_types` DISABLE KEYS */;
INSERT INTO `time_types` VALUES (1,'Travel',20),(2,'Onsite',5),(3,'Remote',10),(4,'Offsite',15);
/*!40000 ALTER TABLE `time_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` VALUES (1,'manager',0),(2,'sales',0),(3,'tech',0),(4,'accounting',0),(5,'customer',0),(6,'webuser',0);
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `secretkey` text NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `disabled` binary(1) NOT NULL DEFAULT '0',
  `user_created` datetime NOT NULL,
  `session` char(32) NOT NULL,
  `cookie` char(32) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `last_login` datetime NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT '-99',
  `company_name` varchar(100) NOT NULL,
  `is_online` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_user_name` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_competitor_products`
--

DROP TABLE IF EXISTS `wtcr_competitor_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_competitor_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competitor_product_name` varchar(45) DEFAULT NULL,
  `wtcr_competitor_id` int(11) DEFAULT NULL,
  `wtcr_competitor_sku` varchar(45) DEFAULT NULL,
  `mfg_part_number` varchar(45) DEFAULT NULL,
  `competitor_price` float DEFAULT NULL,
  `last_updated` datetime DEFAULT NULL,
  `competitor_url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `wtcr_competitor_sku_UNIQUE` (`wtcr_competitor_sku`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_competitor_products`
--

LOCK TABLES `wtcr_competitor_products` WRITE;
/*!40000 ALTER TABLE `wtcr_competitor_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_competitor_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_competitors`
--

DROP TABLE IF EXISTS `wtcr_competitors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_competitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `competitor_name` varchar(45) DEFAULT NULL,
  `update_frequency_hours` int(11) DEFAULT '24',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`competitor_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_competitors`
--

LOCK TABLES `wtcr_competitors` WRITE;
/*!40000 ALTER TABLE `wtcr_competitors` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_competitors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_currencies`
--

DROP TABLE IF EXISTS `wtcr_currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(45) DEFAULT NULL,
  `wtcr_currency_provider_id` int(11) DEFAULT NULL,
  `abbreviation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_currencies`
--

LOCK TABLES `wtcr_currencies` WRITE;
/*!40000 ALTER TABLE `wtcr_currencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_inventory`
--

DROP TABLE IF EXISTS `wtcr_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wtcr_sku` varchar(45) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `wtcr_product_category_id` int(11) NOT NULL,
  `mfg_part_number` varchar(45) NOT NULL,
  `wtcr_vendor_id` int(11) NOT NULL,
  `vendor_sku` varchar(45) DEFAULT NULL,
  `vendor_price` float NOT NULL,
  `received_date` datetime NOT NULL,
  `markup` float DEFAULT NULL,
  `serial_numbers` longtext,
  `order_details` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_inventory`
--

LOCK TABLES `wtcr_inventory` WRITE;
/*!40000 ALTER TABLE `wtcr_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_marketplace_templates`
--

DROP TABLE IF EXISTS `wtcr_marketplace_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_marketplace_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wtcr_marketplace_id` varchar(45) NOT NULL,
  `template_data` longtext,
  PRIMARY KEY (`id`,`wtcr_marketplace_id`),
  UNIQUE KEY `marketplace_id_UNIQUE` (`wtcr_marketplace_id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_marketplace_templates`
--

LOCK TABLES `wtcr_marketplace_templates` WRITE;
/*!40000 ALTER TABLE `wtcr_marketplace_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_marketplace_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_marketplaces`
--

DROP TABLE IF EXISTS `wtcr_marketplaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_marketplaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marketplace_name` varchar(45) NOT NULL,
  `wtcr_marketplace_template_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`marketplace_name`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_marketplaces`
--

LOCK TABLES `wtcr_marketplaces` WRITE;
/*!40000 ALTER TABLE `wtcr_marketplaces` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_marketplaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_product_categories`
--

DROP TABLE IF EXISTS `wtcr_product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) DEFAULT NULL,
  `default_markup` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_product_categories`
--

LOCK TABLES `wtcr_product_categories` WRITE;
/*!40000 ALTER TABLE `wtcr_product_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_products`
--

DROP TABLE IF EXISTS `wtcr_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'A unique ID for the product',
  `mfg_part_num` varchar(40) NOT NULL COMMENT 'Part # The Manufacturer Uses',
  `wtcrsku` varchar(40) NOT NULL COMMENT 'The SKU used by WTCR to identify the product',
  `wtcr_product_category_id` int(11) DEFAULT '1' COMMENT 'The category the product falls in',
  `wtcr_product_name` varchar(45) DEFAULT NULL,
  `description` longtext COMMENT 'A description of the product',
  `autoupdate` int(11) NOT NULL DEFAULT '1' COMMENT '1 if Product Should Auto Update Price, 0 otherwise.',
  `static_price` float DEFAULT NULL COMMENT 'The Price Suggested based on Current Markup',
  `suggestedmarkup` float DEFAULT '0.5' COMMENT 'The Suggested Markup Percentage for a Product',
  `wtcrprice` float DEFAULT NULL COMMENT 'The Price WTCR Charges',
  `wtcr_nid` varchar(10) DEFAULT NULL COMMENT 'The NID of the Product on WTCRs Website',
  `lastupdated` datetime NOT NULL COMMENT 'The date/time this product was last updated from supplier',
  `marketplace_data` longtext,
  `pictures` longtext,
  PRIMARY KEY (`id`,`mfg_part_num`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `mfg_part_num_UNIQUE` (`mfg_part_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_products`
--

LOCK TABLES `wtcr_products` WRITE;
/*!40000 ALTER TABLE `wtcr_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_vendor_products`
--

DROP TABLE IF EXISTS `wtcr_vendor_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_vendor_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `wtcr_vendor_id` int(11) DEFAULT NULL,
  `wtcr_vendor_sku` varchar(45) DEFAULT NULL,
  `mfg_part_num` varchar(45) DEFAULT NULL,
  `vendor_price` float DEFAULT NULL,
  `wtcr_product_category_id` int(11) DEFAULT NULL,
  `last_updated` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_vendor_products`
--

LOCK TABLES `wtcr_vendor_products` WRITE;
/*!40000 ALTER TABLE `wtcr_vendor_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_vendor_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_vendors`
--

DROP TABLE IF EXISTS `wtcr_vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(45) DEFAULT NULL,
  `update_freq_hours` int(11) DEFAULT '24',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`vendor_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_vendors`
--

LOCK TABLES `wtcr_vendors` WRITE;
/*!40000 ALTER TABLE `wtcr_vendors` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-02  9:38:43
