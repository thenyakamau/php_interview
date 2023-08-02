-- MySQL dump 10.13  Distrib 8.0.31, for Linux (aarch64)
--
-- Host: localhost    Database: med
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_gender`
--

DROP TABLE IF EXISTS `tbl_gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_gender` (
  `gender_id` int NOT NULL AUTO_INCREMENT,
  `gender_name` varchar(50) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_gender`
--

LOCK TABLES `tbl_gender` WRITE;
/*!40000 ALTER TABLE `tbl_gender` DISABLE KEYS */;
INSERT INTO `tbl_gender` VALUES (1,'Male'),(2,'Female');
/*!40000 ALTER TABLE `tbl_gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient`
--

DROP TABLE IF EXISTS `tbl_patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_patient` (
  `patient_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender_id` int NOT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `gender_id` (`gender_id`),
  CONSTRAINT `tbl_patient_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `tbl_gender` (`gender_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient`
--

LOCK TABLES `tbl_patient` WRITE;
/*!40000 ALTER TABLE `tbl_patient` DISABLE KEYS */;
INSERT INTO `tbl_patient` VALUES (1,'Thenya','2023-08-03',1),(2,'code-synth','2023-08-03',1);
/*!40000 ALTER TABLE `tbl_patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_services`
--

DROP TABLE IF EXISTS `tbl_patient_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_patient_services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `service_id` int NOT NULL,
  `general_comments` text,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `service_id` (`service_id`),
  CONSTRAINT `tbl_patient_services_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `tbl_patient` (`patient_id`),
  CONSTRAINT `tbl_patient_services_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `tbl_services` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_services`
--

LOCK TABLES `tbl_patient_services` WRITE;
/*!40000 ALTER TABLE `tbl_patient_services` DISABLE KEYS */;
INSERT INTO `tbl_patient_services` VALUES (1,1,19,'nnnnb'),(2,1,21,'nnnnb'),(3,1,23,'nnnnb'),(4,2,19,'new comment'),(5,2,20,'new comment'),(6,2,23,'new comment');
/*!40000 ALTER TABLE `tbl_patient_services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_services`
--

DROP TABLE IF EXISTS `tbl_services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_services` (
  `service_id` int NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_services`
--

LOCK TABLES `tbl_services` WRITE;
/*!40000 ALTER TABLE `tbl_services` DISABLE KEYS */;
INSERT INTO `tbl_services` VALUES (18,'Optical'),(19,'Inpatient'),(20,'Laboratory Test'),(21,'X-ray'),(22,'Ultrasound'),(23,'Physical Therapy'),(24,'Dental Checkup'),(25,'Vaccination');
/*!40000 ALTER TABLE `tbl_services` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-02  9:50:09
