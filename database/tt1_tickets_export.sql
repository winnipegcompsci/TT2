CREATE DATABASE  IF NOT EXISTS `tt2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tt2`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: ttdev
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
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
INSERT INTO `tickets` VALUES (4,'0000-00-00 00:00:00',1,1,3,1,2,'Some random ticket descr','',2,15,'2014-12-18 14:58:25',0,0,100,'5','0'),(5,'0000-00-00 00:00:00',1,1,3,1,4,'This is a problem description.','',2,8,'2014-05-12 13:08:55',0,1,100,'3','123'),(6,'2014-05-12 15:17:57',1,1,4,1,3,'Testsetsetsty','',1,15,'2014-12-18 15:34:52',0,0,100,'1','0'),(7,'2014-05-12 16:10:13',1,1,2,2,2,'rghaerhaehrhah','',2,8,'2014-05-12 16:10:13',0,1,80,'3','123'),(8,'2014-05-13 09:54:47',1,1,2,2,3,'test','',2,15,'2014-08-13 16:43:15',0,2,100,'3','0'),(9,'2014-05-13 15:07:21',1,1,3,3,2,'This is an <strong>example</strong> description for the projects module.','',2,15,'2014-08-13 16:43:22',0,1,100,'3','123'),(10,'2014-05-20 17:26:04',1,1,1,1,2,'Test','',2,15,'2014-08-14 13:20:37',1,3,100,'3','0'),(11,'2014-05-26 13:04:01',1,1,1,1,1,'&nbsp;&nbsp;&nbsp;&nbsp;test<br><div>TEST</div><br><div>test</div>','',2,15,'2014-08-20 17:00:48',0,0,100,'3','0'),(12,'2014-06-05 17:00:16',2,2,1,1,1,'This is the project description here.','',2,15,'2014-08-15 16:46:37',0,0,100,'5','0'),(13,'2014-06-06 14:23:12',1,1,1,1,2,'Sample unassigned ticket.','',2,15,'2014-08-15 16:47:15',0,0,100,'3','0'),(14,'2014-06-06 14:47:43',1,1,1,1,2,'Test Problem Description Here.','',2,15,'2014-08-15 16:47:41',1,0,100,'3','0'),(15,'2014-06-06 15:10:46',1,1,1,1,2,'This is a blanket ticket assigned to nobody.','',2,15,'2014-08-21 11:44:11',0,0,100,'3','0'),(16,'2014-06-06 16:31:50',1,1,1,1,1,'This is another sample ticket.','',2,15,'2014-08-22 11:19:16',0,0,100,'3','0'),(18,'2014-06-12 15:59:32',1,1,1,1,2,'<div style=\"width: 80%\">\r\n<h3><strong>Some Example Ticket Title</strong></h3>\r\n\r\n<p>Some Example Ticket Description</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"float:right; width:100%\">\r\n	<caption><strong>Ticket Tasks</strong></caption>\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"width:50%\">Task</th>\r\n			<th style=\"width:30%\">Comments</th>\r\n			<th style=\"width:20%\">Percentage Completed</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Redesign CKEditor Interface</td>\r\n			<td>Finished.</td>\r\n			<td>100%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Create TT Ticket and Event Templates.</td>\r\n			<td>Ticket has been created, event has not.</td>\r\n			<td>50%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Push this to dev server for testing.</td>\r\n			<td>This has not been started yet.</td>\r\n			<td>30%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n','',2,15,'2014-08-13 16:43:35',0,0,100,'3','0'),(19,'2014-06-12 16:05:37',1,1,1,1,1,'<div style=\"width: 80%\">\r\n<h3><strong>Fix Product Search on Cleanflow.</strong></h3>\r\n\r\n<p>Search is slow, doesn&#39;t have images and needs to include more relevant results. Also some simple formatting things need to be fixed and cross browser compliance verified,</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"float:right; width:100%\">\r\n	<caption><strong>Ticket Tasks</strong></caption>\r\n	<tbody>\r\n		<tr>\r\n			<th style=\"width:50%\">Task</th>\r\n			<th style=\"width:30%\">Comments</th>\r\n			<th style=\"width:20%\">Percentage Completed</th>\r\n		</tr>\r\n		<tr>\r\n			<td>Display Thumbnails in Search Results</td>\r\n			<td>Almost done, needs formatting</td>\r\n			<td>90%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Setup Dev Site</td>\r\n			<td>In Progress</td>\r\n			<td>100%</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Some other task.</td>\r\n			<td>Waiting</td>\r\n			<td>0%</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n','',2,15,'2014-08-21 11:43:52',0,0,100,'3','0'),(20,'2014-07-31 11:40:29',2,2,2,2,2,'<p>Test</p>\r\n','',2,15,'2014-08-21 11:44:57',0,0,100,'5','0'),(21,'2014-07-31 14:49:32',2,2,1,1,2,'<p>Random Test Ticket</p>\r\n','',2,15,'2014-08-21 11:45:44',0,0,100,'5','0'),(22,'2014-07-31 14:50:01',1,1,4,3,2,'<p>Some other ticket</p>\r\n','',2,15,'2014-08-22 11:20:53',0,0,100,'3','0'),(23,'2014-08-01 09:56:04',2,2,2,1,2,'<p>Testing to see if unassignedtickets grid&nbsp;gets hidden on no tickets, but displayed when unassigned tickets are found.</p>\r\n','',2,15,'2014-08-21 11:45:58',0,0,100,'5','0'),(24,'2014-08-19 10:09:39',2,2,1,1,1,'<p>Test</p>\r\n','',2,15,'2014-08-21 15:16:02',0,0,100,'5','0'),(25,'2014-08-26 13:22:45',1,1,1,1,3,'<p>Test</p>\r\n','',2,15,'2014-10-08 14:49:34',0,0,100,'3',NULL),(26,'2014-09-16 09:48:57',2,2,2,1,1,'<p>Sample Ticket</p>\r\n','',2,15,'2014-10-08 14:49:48',0,0,100,'5',NULL),(27,'2014-09-16 17:11:56',1,1,1,2,3,'<p>Testing Email Generation</p>\r\n','',2,15,'2014-09-16 17:11:56',0,0,0,'5',NULL),(28,'2014-09-17 12:05:57',1,1,1,3,4,'Test','',2,15,'2014-09-17 12:05:57',0,0,0,'5',NULL),(29,'2014-09-17 12:06:02',1,1,1,3,4,'Test','',2,15,'2014-09-17 12:06:02',0,0,0,'5',NULL),(30,'2014-10-08 14:48:56',1,1,3,3,2,'<p>Test Test Test</p>\r\n','',2,15,'2014-10-08 14:50:01',0,0,100,'5',NULL),(31,'2014-12-18 16:27:00',2,2,5,1,1,'<p>Test Ticket for Problem Type &#39;Phone&#39;.</p>\r\n','',1,15,'2014-12-18 16:27:00',0,0,0,'1',NULL);
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-06-05  9:50:53
