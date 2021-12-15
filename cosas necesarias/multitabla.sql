-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: proyectodual
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

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
-- Current Database: `proyectodual`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `proyectodual` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `proyectodual`;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actividades` (
  `ID_Actividad` int NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Tipo_práctica` varchar(4) NOT NULL,
  `Total_Horas` int NOT NULL,
  `Actividad_realizada` text NOT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Actividad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
INSERT INTO `actividades` VALUES (1,'2021-12-15','Dual',5,'He programado en PHP',NULL);
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno` (
  `ID_Alumno` int NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Telefono` int NOT NULL,
  `Empresa` varchar(64) NOT NULL,
  `Tutor` varchar(64) NOT NULL,
  `NºHoras_Dual` int NOT NULL,
  `NºHoras_FCT` int NOT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Alumno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (1,'Pepe','Fernandez','Rodriguez','Alumno','43563478F','1995-11-16','pepefernandez@cesurformacion.com',622546485,'montajes Paco','Franciso',12,14,NULL);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `ID_Empresa` int NOT NULL AUTO_INCREMENT,
  `Nombre_Empresa` varchar(64) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  `Email` varchar(64) DEFAULT NULL,
  `Responsable` varchar(64) DEFAULT NULL,
  `Observaciones` text NOT NULL,
  PRIMARY KEY (`ID_Empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` VALUES (1,'Montajes Paco',655456743,'montajespaco@gmail.com','Paco','');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor` (
  `ID_Profesor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` varchar(64) NOT NULL,
  `Email` varchar(64) NOT NULL,
  PRIMARY KEY (`ID_Profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES (1,'Francisco','Mejia','Robles','Profesor','FranciscoMejia@cesurformacion.com'),(2,'Antonio','Maldonado','Mora','ekisde','tuhprofehreshulon@cesurformacion.com');
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

--
-- Table structure for table `alumno_actividad`
--

DROP TABLE IF EXISTS `alumno_actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno_actividad` (
  `ID_Actividad` int NOT NULL,
  `ID_Alumno` int NOT NULL,
  PRIMARY KEY (`ID_Actividad`,`ID_Alumno`),
  KEY `secundaria_alm_act` (`ID_Alumno`),
  CONSTRAINT `secundaria_act_alm` FOREIGN KEY (`ID_Actividad`) REFERENCES `actividades` (`ID_Actividad`) ON UPDATE CASCADE,
  CONSTRAINT `secundaria_alm_act` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_actividad`
--

LOCK TABLES `alumno_actividad` WRITE;
/*!40000 ALTER TABLE `alumno_actividad` DISABLE KEYS */;
INSERT INTO `alumno_actividad` VALUES (1,1);
/*!40000 ALTER TABLE `alumno_actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno_profesor`
--

DROP TABLE IF EXISTS `alumno_profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumno_profesor` (
  `ID_Profesor` int NOT NULL,
  `ID_Alumno` int NOT NULL,
  PRIMARY KEY (`ID_Profesor`,`ID_Alumno`),
  KEY `secundaria_alumno` (`ID_Alumno`),
  CONSTRAINT `secundaria_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON UPDATE CASCADE,
  CONSTRAINT `secundaria_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_profesor`
--

LOCK TABLES `alumno_profesor` WRITE;
/*!40000 ALTER TABLE `alumno_profesor` DISABLE KEYS */;
INSERT INTO `alumno_profesor` VALUES (1,1);
/*!40000 ALTER TABLE `alumno_profesor` ENABLE KEYS */;
UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-15 12:26:28
