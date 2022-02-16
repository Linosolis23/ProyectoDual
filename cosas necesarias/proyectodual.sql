-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: proyectodual
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

--
-- Current Database: `proyectodual`
--

CREATE DATABASE `proyectodual`;

USE `proyectodual`;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades` (
  `ID_Actividad` int NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `Tipo_práctica` varchar(4) NOT NULL,
  `Total_Horas` int NOT NULL,
  `Actividad_realizada` text NOT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Actividad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` VALUES (1,'2021-12-15','Dual',5,'He programado en PHP',NULL),(2,'2021-12-17','FCT',6,'He programado un base de datos',NULL),(3,'2021-12-18','FCT',8,'He desmontado una pc',NULL),(4,'2022-01-19','Dual',34,'Desmontaje de una esponja',NULL),(5,'2022-01-14','FCT',23,'Desmontaje de un estropajo','prueba'),(6,'2021-12-15','Dual',5,'kjlkj','lkhklh');

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `ID_Alumno` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` char(32) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Telefono` int NOT NULL,
  `Empresa` varchar(64) NOT NULL,
  `Tutor` varchar(64) NOT NULL,
  `NºHoras_Dual` int NOT NULL,
  `NºHoras_FCT` int NOT NULL,
  `Observaciones` text,
  `rol` int DEFAULT 2,
  PRIMARY KEY (`ID_Alumno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumno`
--

INSERT INTO `alumno` VALUES (1,'Pepe','Fernandez','Rodriguez','abc2566d6783cd9eb8a671e9c0147ae3','43563478F','1995-11-16','pepefernandez@cesurformacion.com',622546485,'montajes Paco','Franciso',12,14,NULL,2),(2,'Alberto','Timbales','Sonoros','d8578edf8458ce06fbc5bb76a58c5ca4','666666666','2022-01-12','wfkjb@kjdbf.com',952124578,'Jamones Jabugo','elprofe',23,43,NULL,2),(3,'Dolores','Fuertes','DeBarriga','d8578edf8458ce06fbc5bb76a58c5ca4','888888888','2022-01-22','sjbcv@dovn.com',952324587,'Maquillajes Choni','tu profe',15,17,'No sabe namas que pintar las uñas',2),(4,'Manuel','Gonzalez','Patiño','f13bb1bed03db9d68a7d9a48aafeec78','28356835r','2000-02-14','manu@cesu.com',678762347,'Restaurante Japones','Federico',67,98,NULL,2),(5,'juan','diaz','gutierrez','81dc9bdb52d04dc20036dbd8313ed055','40330002H','1995-12-15','juandiaz@cesurformacion.com',699887654,'ayesa','reyes',345,0,NULL,2),(6,'Carlos','Santana','Marquez','dc599a9972fde3045dab59dbd1ae170b','85712485H','2022-01-11','carlos@cesur.com',952481587,'Salutis','a',67,23,NULL,2);

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `ID_Empresa` int NOT NULL AUTO_INCREMENT,
  `Nombre_Empresa` varchar(64) NOT NULL,
  `Telefono` int NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Responsable` varchar(64) NOT NULL,
  `Observaciones` text,
  PRIMARY KEY (`ID_Empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` VALUES (1,'Montajes Paco',655456743,'montajespaco@gmail.com','Paco',''),(2,'Electronica Vadillo',952654812,'electrovadi@gmail.com','Jhon Travolta',NULL),(3,'Jamones Jabugo',952154873,'jamoneseski@gmai.com','cuñado',NULL);

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE `profesor` (
  `ID_Profesor` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  `Apellido1` varchar(20) NOT NULL,
  `Apellido2` varchar(20) NOT NULL,
  `Contraseña` char(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `rol` int DEFAULT 1,
  PRIMARY KEY (`ID_Profesor`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` VALUES (1,'Admin','Admin','Admin','21232f297a57a5a743894a0e4a801fc3','admin@managercesur.com',0),(2,'Antonio','Maldonado','Mora','4a181673429f0b6abbfd452f0f3b5950','tuhprofehreshulon@cesurformacion.com',1),(3,'Jose Miguel','Castaño','Rubio','ae1e5f0811ca14404a91cd5678ff2ba6','josemiquel@cesur.es',1),(4,'Rafa','Cañizares','Montes','35cd2d0d62d9bc5e60a3ca9f7593b05b','rafacani@gmail.com',1),(5,'Josemi','Dolores','Chungos','ae1e5f0811ca14404a91cd5678ff2ba6','Josedolo@gmail.com',1),(6,'Carlo','Mantel','Ordenador','7d6543d7862a07edf7902086f39b4b9a','carlitros@gmail.com',1),(7,'Jorge','Nitales','Grandes','d67326a22642a324aa1b0745f2f17abb','esgrasioso@gmail.com',1),(8,'Francisco','Mejia','Robles','83c2f0ea111a68a80ec383418750b37b','FranciscoMejia@cesurformacion.com',1),(9,'Juan','Yeclas','Martin','a94652aa97c7211ba8954dd15a3cf838','dis@cghf.com',1),(10,'Federico','Picatostes','Caiman','7d11810cf99c74a1f3fa22c3879ea39d','fede@cesu.com',1),(13,'reyes','cuesta','dominguez','81dc9bdb52d04dc20036dbd8313ed055','reyes@cesurformacion.com',1);


--
-- Table structure for table `alumno_actividad`
--

DROP TABLE IF EXISTS `alumno_actividad`;
CREATE TABLE `alumno_actividad` (
  `ID_Actividad` int NOT NULL,
  `ID_Alumno` int NOT NULL,
  PRIMARY KEY (`ID_Actividad`,`ID_Alumno`),
  KEY `secundaria_alm_act` (`ID_Alumno`),
  CONSTRAINT `secundaria_act_alm` FOREIGN KEY (`ID_Actividad`) REFERENCES `actividades` (`ID_Actividad`) ON UPDATE CASCADE,
  CONSTRAINT `secundaria_alm_act` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `alumno_actividad`
--

INSERT INTO `alumno_actividad` VALUES (1,1),(2,3),(3,4),(4,5),(5,6);

--
-- Table structure for table `alumno_profesor`
--

DROP TABLE IF EXISTS `alumno_profesor`;
CREATE TABLE `alumno_profesor` (
  `ID_Profesor` int NOT NULL,
  `ID_Alumno` int NOT NULL,
  PRIMARY KEY (`ID_Profesor`,`ID_Alumno`),
  KEY `secundaria_alumno` (`ID_Alumno`),
  CONSTRAINT `secundaria_alumno` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumno` (`ID_Alumno`) ON UPDATE CASCADE,
  CONSTRAINT `secundaria_profesor` FOREIGN KEY (`ID_Profesor`) REFERENCES `profesor` (`ID_Profesor`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumno_profesor`
--

INSERT INTO `alumno_profesor` VALUES (1,2),(8,3),(8,4),(8,5),(2,6);
