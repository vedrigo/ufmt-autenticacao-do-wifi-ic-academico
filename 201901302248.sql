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
-- Table structure for table `mural`
--

DROP TABLE IF EXISTS `mural`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mural` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `texto` text,
  `imagem` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mural`
--

LOCK TABLES `mural` WRITE;
/*!40000 ALTER TABLE `mural` DISABLE KEYS */;
INSERT INTO `mural` VALUES (1,'No mural','kkkkkkkkkkkk dkjah dkfjahs kfjasdh fajsdhf kjasf ksajhf saf','1548895843.jpg','2019-01-31 00:50:43','Rivisão'),(2,'Qualquer','Descrição aslkjf aksdfh çsdakf asdhjfa','1548896021.jpg','2019-01-31 00:53:41','Rivisão'),(3,'Classificação da Agência Nacional de Mineração leva em conta perdas de vidas humanas e impactos sociais, econômicos e ambientais em caso de rompimento. Barragem de Brumadinho era considerada de risco baixo. ','<p class=\"content-text__container theme-color-primary-first-letter\" data-track-category=\"Link no Texto\" data-track-links=\"\"> O Brasil tem hoje quase 200 barragens de mineração com potencial de dano considerado alto – mesma classificação da barragem 1 da mineradora Vale no Córrego do Feijão, em Brumadinho (MG), <a href=\"https://g1.globo.com/mg/minas-gerais/noticia/2019/01/25/bombeiros-e-defesa-civil-sao-mobilizados-para-chamada-de-rompimento-de-barragem-em-brumadinho-na-grande-bh.ghtml\">que se rompeu na última sexta-feira (25)</a>. Os dados são da Agência Nacional de Mineração (ANM). </p>','1548896252.jpg','2019-01-31 00:57:32','Rivisão');
/*!40000 ALTER TABLE `mural` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (11,'rdfgsfgddsdsds','fsdgsdfg',NULL,'publico','2019-01-27 21:58:21'),(12,'rdfgsfgddsdsds','fsdgsdfg',NULL,'publico','2019-01-27 21:58:21'),(13,'PIIPUTOI','POPO',NULL,'rascunho','2019-01-27 21:58:35'),(14,'dfhgdjg','djgjdgdgjdj',NULL,'publico','2019-01-27 22:19:52'),(15,'dfhgdjg','djgjdgdgjdj',NULL,'publico','2019-01-27 22:20:30'),(16,'kkkkkkkkkk','kkkkkkkkkk',NULL,'publico','2019-01-28 21:11:56'),(17,'asdafadfadsf','aasdfdsfafasdfsdaf',NULL,'publico','2019-01-28 23:32:25'),(18,'','',NULL,'publico','2019-01-28 23:33:26'),(19,'','',NULL,'publico','2019-01-28 23:37:27'),(20,'','',NULL,'publico','2019-01-28 23:53:29'),(21,'Titulo 1','dfetykteykytd',NULL,'publico','2019-01-28 23:55:57'),(22,'Titulo 2','dfdsgagdgdg',NULL,'publico','2019-01-28 23:57:39'),(23,'Titulo 2','dfdsgagdgdg',NULL,'publico','2019-01-28 23:59:27'),(24,'Titulo 2','dfdsgagdgdg',NULL,'publico','2019-01-29 00:00:02'),(25,'Titulo 1','fdfsdhsfhshfdsh',NULL,'publico','2019-01-29 00:01:04'),(26,'','',NULL,'publico','2019-01-30 22:25:23'),(27,'','',NULL,'publico','2019-01-30 22:27:46'),(28,'','',NULL,'publico','2019-01-30 22:33:05'),(29,'','',NULL,'publico','2019-01-30 22:33:59'),(30,'','',NULL,'publico','2019-01-30 22:38:06'),(31,'','',NULL,'publico','2019-01-30 22:39:41'),(32,'','',NULL,'publico','2019-01-30 22:41:20'),(33,'','',NULL,'publico','2019-01-30 22:41:50'),(34,'','',NULL,'publico','2019-01-30 22:42:42'),(35,'','',NULL,'publico','2019-01-30 22:42:52'),(36,'','',NULL,'publico','2019-01-30 22:53:20'),(37,'','',NULL,'publico','2019-01-30 22:54:43'),(38,'','',NULL,'publico','2019-01-30 22:55:45'),(39,'','',NULL,'publico','2019-01-30 22:58:46'),(40,'','',NULL,'publico','2019-01-30 23:00:53'),(41,'','',NULL,'publico','2019-01-30 23:01:15'),(42,'','',NULL,'publico','2019-01-30 23:01:21'),(43,'','',NULL,'publico','2019-01-30 23:01:23'),(44,'','',NULL,'publico','2019-01-30 23:12:00'),(45,'','',NULL,'publico','2019-01-30 23:12:02'),(46,'','',NULL,'publico','2019-01-30 23:12:09'),(47,'','',NULL,'publico','2019-01-30 23:12:14'),(48,'Caramba','\r\nBRASÍLIA (Reuters) - O vice-presidente, Hamilton Mourão, afirmou nesta quarta-feira (30) que a reforma da Previdência é uma só, incluirá os militares e será enviada toda ela este semestre, em uma Proposta de Emenda Constitucional e em um projeto de lei.<a href=\"#\">vish</a>',NULL,'publico','2019-01-30 23:19:46'),(49,'Oi','hahahaha',NULL,'publico','2019-01-30 23:22:48'),(50,'sdsafaddfa','',NULL,'publico','2019-01-30 23:23:49'),(51,'dasdfsafsdf','afadfafasdf','1548890895.png','publico','2019-01-30 23:28:15');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','Administrador','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-30 22:49:50
