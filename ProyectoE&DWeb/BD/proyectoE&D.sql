
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contrasenia1` varchar(45) NOT NULL,
  `contrasenia2` varchar(45) NOT NULL,
  `movil` varchar(15) NOT NULL,
  `acepto` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=206 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (122,'rocio','dsad@gmail.com','ro','ro','321321','1'),(189,'daniloasd','loo@gmail.com','sa','as','321321','si'),(192,'daniel','dsad@gmail.com','dsa','dsa','32132','si'),(193,'daniloasd','loo@gmail.com','sa','as','32132','si'),(196,'daniloasd','loo@gmail.com','as','asa','321321','si'),(197,'daniloasd','loo@gmail.com','as','asa','321321','si'),(198,'daniloasd','loo@gmail.com','hgj','ghj','321321','si'),(202,'daniloasd','loo@gmail.com','z<x','z<x','321321','si'),(205,'dasd','dsad@gmail.com','asd','asd','1321','si');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipodocumento` varchar(30) DEFAULT NULL,
  `cedula` int NOT NULL,
  `primerNombre` varchar(15) DEFAULT NULL,
  `segundoNombre` varchar(25) DEFAULT NULL,
  `primerapellido` varchar(20) DEFAULT NULL,
  `segundoapellido` varchar(20) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `eps` varchar(45) DEFAULT NULL,
  `pensiones` varchar(45) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `localidad` varchar(45) DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `cargo` varchar(15) DEFAULT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numidentificacion_UNIQUE` (`cedula`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (58,'Cedula de extrajeria',808197,'rocio','argemirito','melgarejo','cardenas','calle131B  156 - 12','3057497087','danielcardenas@gmail.com','Famisanar','Porvenir','Bogota','suba','Conjunto','Admistrador','1662153097_img_avatar.png');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `insumos`
--

DROP TABLE IF EXISTS `insumos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `insumos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `rol_has_empleados_rol_id` int NOT NULL,
  `rol_has_empleados_empleados_id` int NOT NULL,
  PRIMARY KEY (`id`,`rol_has_empleados_rol_id`,`rol_has_empleados_empleados_id`),
  KEY `fk_insumos_rol_has_empleados1_idx` (`rol_has_empleados_rol_id`,`rol_has_empleados_empleados_id`),
  CONSTRAINT `fk_insumos_rol_has_empleados1` FOREIGN KEY (`rol_has_empleados_rol_id`, `rol_has_empleados_empleados_id`) REFERENCES `rol_has_empleados` (`rol_id`, `empleados_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `insumos`
--

LOCK TABLES `insumos` WRITE;
/*!40000 ALTER TABLE `insumos` DISABLE KEYS */;
/*!40000 ALTER TABLE `insumos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ordenes`
--

DROP TABLE IF EXISTS `ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ordenes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cliente` int NOT NULL,
  `productos` varchar(32) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `clientes_id_cliente` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cliente_UNIQUE` (`cliente`),
  KEY `fk_ordenes_clientes1_idx` (`clientes_id_cliente`),
  CONSTRAINT `fk_ordenes_clientes1` FOREIGN KEY (`clientes_id_cliente`) REFERENCES `clientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ordenes`
--

LOCK TABLES `ordenes` WRITE;
/*!40000 ALTER TABLE `ordenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `producto` varchar(50) DEFAULT NULL,
  `cantidad` varchar(10) DEFAULT NULL,
  `unidad` varchar(10) DEFAULT NULL,
  `precio` varchar(500) DEFAULT NULL,
  `Imagen` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (145,'collares','10','Unidad','80.000','1662153222_img1.PNG'),(147,'sacos','200','Unidad','120.000','1662137924_imagesd.PNG'),(149,'Articulos Perro','200','Ampolleta','12.000','1662138358_img3.PNG'),(150,'Pomada Perros','200','Unidad','12.300','1662153241_img2.PNG'),(151,'antipulgas gatos','200','Bulto','80.000','1662215713_139-single-default.jpg'),(152,'antipulgas gatos','200','Bulto','12.000','1662220464_pic1.jpg'),(153,'sda','asd','Unidad','80.000','1662241171_img_avatar.png'),(154,'antipulgas gatos','200','Unidad','80.000','1662240650_arrows.png'),(155,'pulgas','200','Bulto','8.890','1662384067_nav.png'),(156,'sacos para Perro','150','Unidad','125.000','1662407006_139-single-default.jpg'),(157,'saco adidas original','100','Unidad','200.0000','1662410960_imagesd.PNG');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos_has_ordenes`
--

DROP TABLE IF EXISTS `productos_has_ordenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos_has_ordenes` (
  `id` int NOT NULL,
  `productos_id` int NOT NULL,
  `ordenes_id` int NOT NULL,
  PRIMARY KEY (`productos_id`,`ordenes_id`,`id`),
  KEY `fk_productos_has_ordenes_ordenes1_idx` (`ordenes_id`),
  KEY `fk_productos_has_ordenes_productos1_idx` (`productos_id`),
  CONSTRAINT `fk_productos_has_ordenes_ordenes1` FOREIGN KEY (`ordenes_id`) REFERENCES `ordenes` (`id`),
  CONSTRAINT `fk_productos_has_ordenes_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos_has_ordenes`
--

LOCK TABLES `productos_has_ordenes` WRITE;
/*!40000 ALTER TABLE `productos_has_ordenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos_has_ordenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_has_empleados`
--

DROP TABLE IF EXISTS `rol_has_empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol_has_empleados` (
  `rol_id` int NOT NULL,
  `empleados_id` int NOT NULL,
  PRIMARY KEY (`rol_id`,`empleados_id`),
  KEY `fk_rol_has_empleados_empleados1_idx` (`empleados_id`),
  KEY `fk_rol_has_empleados_rol1_idx` (`rol_id`),
  CONSTRAINT `fk_rol_has_empleados_empleados1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id`),
  CONSTRAINT `fk_rol_has_empleados_rol1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_has_empleados`
--

LOCK TABLES `rol_has_empleados` WRITE;
/*!40000 ALTER TABLE `rol_has_empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol_has_empleados` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-05 16:24:11
