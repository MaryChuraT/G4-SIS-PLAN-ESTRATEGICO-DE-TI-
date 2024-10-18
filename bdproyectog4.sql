-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para bdproyectog4
CREATE DATABASE IF NOT EXISTS `bdproyectog4` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `bdproyectog4`;

-- Volcando estructura para tabla bdproyectog4.mision
CREATE TABLE IF NOT EXISTS `mision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bdproyectog4.mision: ~1 rows (aproximadamente)
INSERT INTO `mision` (`id`, `texto`) VALUES
	(1, 'Escribir aqui la mision de la empresa');

-- Volcando estructura para tabla bdproyectog4.objetivos
CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estrategico` varchar(500) DEFAULT NULL,
  `especifico1` varchar(500) DEFAULT NULL,
  `especifico2` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bdproyectog4.objetivos: ~3 rows (aproximadamente)
INSERT INTO `objetivos` (`id`, `estrategico`, `especifico1`, `especifico2`) VALUES
	(1, 'Estrategico 1', 'Especifico 1.1', 'Especifico 1.2'),
	(2, 'Estrategico 2', 'Especifico 2.1', 'Especifico 2.2'),
	(3, 'Estrategico 3', 'Especifico 3.1', 'Especifico 3.2');

-- Volcando estructura para tabla bdproyectog4.uen
CREATE TABLE IF NOT EXISTS `uen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uen` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bdproyectog4.uen: ~1 rows (aproximadamente)
INSERT INTO `uen` (`id`, `uen`) VALUES
	(1, 'Informacion UEN del a empresa');

-- Volcando estructura para tabla bdproyectog4.valores
CREATE TABLE IF NOT EXISTS `valores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla bdproyectog4.valores: ~6 rows (aproximadamente)
INSERT INTO `valores` (`id`, `texto`) VALUES
	(1, 'valor1'),
	(2, 'valor2'),
	(3, 'valor3'),
	(4, 'valor4'),
	(5, 'valor5'),
	(6, 'valor6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
