-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: ic_academico
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `texto` text,
  `imagem` varchar(63) DEFAULT NULL,
  `status` varchar(31) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (11,'rdfgsfgddsdsds','fsdgsdfg',NULL,'publico','2019-01-27 21:58:21'),(12,'rdfgsfgddsdsds','fsdgsdfg',NULL,'publico','2019-01-27 21:58:21'),(13,'PIIPUTOI','POPO',NULL,'rascunho','2019-01-27 21:58:35'),(14,'dfhgdjg','djgjdgdgjdj',NULL,'publico','2019-01-27 22:19:52'),(15,'dfhgdjg','djgjdgdgjdj',NULL,'publico','2019-01-27 22:20:30'),(16,'kkkkkkkkkk','kkkkkkkkkk',NULL,'publico','2019-01-28 21:11:56'),(17,'asdafadfadsf','aasdfdsfafasdfsdaf',NULL,'publico','2019-01-28 23:32:25'),(18,'','',NULL,'publico','2019-01-28 23:33:26'),(19,'','',NULL,'publico','2019-01-28 23:37:27'),(20,'','',NULL,'publico','2019-01-28 23:53:29'),(21,'Titulo 1','dfetykteykytd',NULL,'publico','2019-01-28 23:55:57'),(22,'Titulo 2','dfdsgagdgdg',NULL,'publico','2019-01-28 23:57:39'),(23,'Titulo 2','dfdsgagdgdg',NULL,'publico','2019-01-28 23:59:27'),(24,'Titulo 2','dfdsgagdgdg',NULL,'publico','2019-01-29 00:00:02'),(25,'Titulo 1','fdfsdhsfhshfdsh',NULL,'publico','2019-01-29 00:01:04');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-28 21:06:10
