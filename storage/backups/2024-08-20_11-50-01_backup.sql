-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: prototype
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (1,'Toyota Avanza',NULL,NULL),(2,'Toyota Kijang Innova',NULL,NULL),(3,'Toyota Rush',NULL,NULL),(4,'Toyota Fortuner',NULL,NULL),(5,'Toyota Yaris',NULL,NULL),(6,'Toyota',NULL,NULL),(7,'Honda Brio',NULL,NULL),(8,'Honda HR-V',NULL,NULL),(9,'Honda CR-V',NULL,NULL),(10,'Honda City',NULL,NULL),(11,'Honda Jazz',NULL,NULL),(12,'Honda Mobilio',NULL,NULL),(13,'Honda',NULL,NULL),(14,'Suzuki Ertiga',NULL,NULL),(15,'Suzuki XL7',NULL,NULL),(16,'Suzuki Ignis',NULL,NULL),(17,'Suzuki Carry',NULL,NULL),(18,'Suzuki APV',NULL,NULL),(19,'Suzuki',NULL,NULL),(20,'Daihatsu Terios',NULL,NULL),(21,'Daihatsu Xenia',NULL,NULL),(22,'Daihatsu Sigra',NULL,NULL),(23,'Daihatsu Ayla',NULL,NULL),(24,'Daihatsu Gran Max',NULL,NULL),(25,'Daihatsu',NULL,NULL),(26,'Mitsubishi Xpander',NULL,NULL),(27,'Mitsubishi Pajero',NULL,NULL),(28,'Mitsubishi Outlander',NULL,NULL),(29,'Mitsubishi Triton',NULL,NULL),(30,'Mitsubishi Mirage',NULL,NULL),(31,'Mitsubishi',NULL,NULL),(32,'Nissan Livina',NULL,NULL),(33,'Nissan Terra',NULL,NULL),(34,'Nissan X-Trail',NULL,NULL),(35,'Nissan Navara',NULL,NULL),(36,'Nissan March',NULL,NULL),(37,'Nissan',NULL,NULL),(38,'Mazda CX-5',NULL,NULL),(39,'Mazda 2',NULL,NULL),(40,'Mazda CX-30',NULL,NULL),(41,'Mazda CX-3',NULL,NULL),(42,'Mazda',NULL,NULL),(43,'Hyundai Creta',NULL,NULL),(44,'Hyundai Venue',NULL,NULL),(45,'Hyundai Santa Fe',NULL,NULL),(46,'Hyundai Kona',NULL,NULL),(47,'Hyundai i20',NULL,NULL),(48,'Hyundai',NULL,NULL),(49,'BMW X1',NULL,NULL),(50,'BMW X3',NULL,NULL),(51,'BMW X5',NULL,NULL),(52,'BMW 3 Series',NULL,NULL),(53,'BMW 5 Series',NULL,NULL),(54,'BMW',NULL,NULL),(55,'Mercedes-Benz GLA',NULL,NULL),(56,'Mercedes-Benz A-Class',NULL,NULL),(57,'Mercedes-Benz C-Class',NULL,NULL),(58,'Mercedes-Benz E-Class',NULL,NULL),(59,'Mercedes-Benz GLC',NULL,NULL),(60,'Mercedez',NULL,NULL),(61,'Audi Q3',NULL,NULL),(62,'Audi Q5',NULL,NULL),(63,'Audi A3',NULL,NULL),(64,'Audi A4',NULL,NULL),(65,'Audi A6',NULL,NULL),(66,'Audi',NULL,NULL),(67,'Toyota Agya',NULL,NULL),(68,'lainnya',NULL,NULL),(69,'Mitsubishi Pajero Sport','2024-03-01 23:48:28','2024-03-01 23:48:28'),(70,'Volkswagen Golf','2024-03-01 23:48:28','2024-03-01 23:48:28'),(71,'Volkswagen Tiguan','2024-03-01 23:48:28','2024-03-01 23:48:28'),(72,'Volkswagen Touran','2024-03-01 23:48:28','2024-03-01 23:48:28'),(73,'Volkswagen Passat','2024-03-01 23:48:28','2024-03-01 23:48:28'),(74,'Volkswagen Tiguan Allspace','2024-03-01 23:48:28','2024-03-01 23:48:28'),(75,'Volkswagen Teramont','2024-03-01 23:48:28','2024-03-01 23:48:28'),(76,'Volkswagen Polo','2024-03-01 23:48:28','2024-03-01 23:48:28'),(77,'Volkswagen Jetta','2024-03-01 23:48:28','2024-03-01 23:48:28'),(78,'Volkswagen Arteon','2024-03-01 23:48:29','2024-03-01 23:48:29'),(79,'Volkswagen Sharan','2024-03-01 23:48:29','2024-03-01 23:48:29'),(80,'Volkswagen Touareg','2024-03-01 23:48:29','2024-03-01 23:48:29'),(81,'Volkswagen Beetle','2024-03-01 23:48:29','2024-03-01 23:48:29'),(82,'Toyota Alphard',NULL,NULL),(83,'Chevrolet','2024-03-08 23:33:10','2024-03-08 23:33:10'),(84,'Chevrolet Aveo','2024-03-08 23:33:11','2024-03-08 23:33:11'),(85,'Chevrolet  Orlando','2024-03-08 23:33:11','2024-03-08 23:33:11'),(86,'Chevrolet Cruze','2024-03-08 23:33:11','2024-03-08 23:33:11'),(87,'Chevrolet Trax','2024-03-08 23:33:11','2024-03-08 23:33:11'),(88,'Chevrolet Captiva','2024-03-08 23:33:11','2024-03-08 23:33:11'),(89,'Chevrolet Spin','2024-03-08 23:33:11','2024-03-08 23:33:11'),(90,'Chevrolet Colorado','2024-03-08 23:33:11','2024-03-08 23:33:11'),(91,'Chevrolet Trailblazer','2024-03-08 23:33:11','2024-03-08 23:33:11'),(92,'Honda BR-V','2024-03-08 23:34:19','2024-03-08 23:34:19'),(93,'Toyota Innova','2024-03-11 23:19:52','2024-03-11 23:19:52'),(94,'Daihatsu Luxio','2024-03-13 18:51:51','2024-03-13 18:51:51'),(98,'Nissan Serena','2024-03-21 21:21:42','2024-03-21 21:21:42'),(99,'HILUX 2016','2024-03-22 23:57:52','2024-03-22 23:57:52'),(100,'Toyota Calya','2024-03-27 02:09:16','2024-03-27 02:09:16'),(101,'Land Rover Defender','2024-03-29 21:51:29','2024-03-29 21:51:29'),(102,'Land Rover Discovery','2024-03-29 21:51:30','2024-03-29 21:51:30'),(103,'Land Rover Discovery Sport','2024-03-29 21:51:30','2024-03-29 21:51:30'),(104,'Land Rover Range Rover','2024-03-29 21:51:30','2024-03-29 21:51:30'),(105,'Land Rover Range Rover Evoque','2024-03-29 21:51:30','2024-03-29 21:51:30'),(106,'Land Rover Range Rover Sport','2024-03-29 21:51:30','2024-03-29 21:51:30'),(107,'Land Rover Range Rover Velar','2024-03-29 21:51:30','2024-03-29 21:51:30'),(108,'Toyota Voxy','2024-04-01 02:13:51','2024-04-01 02:13:51'),(109,'Volkswagen','2024-04-01 02:17:13','2024-04-01 02:17:13'),(110,'Wuling','2024-04-05 01:24:14','2024-04-05 01:24:14'),(111,'March','2024-04-14 20:02:05','2024-04-14 20:02:05'),(112,'Hyundai Starex','2024-04-14 20:06:12','2024-04-14 20:06:12'),(113,'Isuzu Panther','2024-04-15 19:59:22','2024-04-15 19:59:22'),(114,'Chevrolet Captiva','2024-04-15 20:08:13','2024-04-15 20:08:13'),(115,'Volvo','2024-04-22 00:09:20','2024-04-22 00:09:20'),(116,'Honda WR-V','2024-04-24 20:25:52','2024-04-24 20:25:52'),(117,'Mazda CX-9','2024-04-29 19:16:50','2024-04-29 19:16:50'),(118,'Toyota Camry','2024-05-13 00:29:39','2024-05-13 00:29:39'),(119,'Honda Accord','2024-05-13 00:33:41','2024-05-13 00:33:41'),(120,'Toyota Kijang','2024-05-13 00:36:12','2024-05-13 00:36:12'),(121,'Hyundai Ioniq','2024-05-13 00:48:49','2024-05-13 00:48:49'),(122,'Hyundai Stargazer','2024-05-15 23:28:06','2024-05-15 23:28:06'),(123,'KIA Sportage','2024-05-18 00:36:52','2024-05-18 00:36:52'),(124,'KIA Sonet','2024-05-21 02:32:30','2024-05-21 02:32:30'),(125,'Toyota Sienta','2024-05-27 01:52:21','2024-05-27 01:52:21'),(135,'Toyota Raize','2024-06-03 02:14:44','2024-06-03 02:14:44'),(136,'Toyota Corolla','2024-06-14 02:35:26','2024-06-14 02:35:26'),(137,'Toyota Altis','2024-07-05 09:39:31','2024-07-05 09:39:31'),(138,'Toyota Land Cruiser','2024-07-16 02:46:13','2024-07-16 02:46:13'),(139,'Suzuki Jimny','2024-07-24 09:53:47','2024-07-24 09:53:47'),(140,'Toyota Veloz','2024-07-30 09:20:36','2024-07-30 09:20:36'),(141,'Lexus','2024-08-09 09:13:45','2024-08-09 09:13:45');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

