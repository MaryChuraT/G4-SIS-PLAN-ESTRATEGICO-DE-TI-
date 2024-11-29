-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
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
CREATE DATABASE IF NOT EXISTS `bdproyectog4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bdproyectog4`;

-- Volcando estructura para tabla bdproyectog4.debilidad
CREATE TABLE IF NOT EXISTS `debilidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.debilidad: ~4 rows (aproximadamente)
INSERT INTO `debilidad` (`id`, `texto`) VALUES
	(1, 'Optimización de canales de distribución poco desarrollada, limitando la presencia de la empresa en mercados externos.'),
	(2, 'Necesidad de mejorar la eficiencia en términos de costo en la cadena de producción.'),
	(3, 'Posición baja en el mercado de soluciones de inteligencia artificial, con solo 100 unidades vendidas frente a un máximo de 300 en la competencia.'),
	(4, 'Necesidad de mejorar en soporte y mantenimiento de software, donde otros competidores tienen mayores ventas (máximo de 260 frente a 250 de la empresa)');

-- Volcando estructura para tabla bdproyectog4.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.empresa: ~1 rows (aproximadamente)
INSERT INTO `empresa` (`id`, `nombre`, `descripcion`) VALUES
	(1, 'Intel', 'Intel es una empresa dedicada al desarrollo de software personalizado y a la provisión de soluciones tecnológicas que facilitan la transformación digital de sus clientes. Su enfoque se centra en crear aplicaciones de alta calidad y en brindar soporte, asesoría y consultoría para ayudar a las empresas a modernizar y optimizar sus procesos mediante el uso de tecnología avanzada, incluyendo inteligencia artificial y metodologías ágiles.');

-- Volcando estructura para tabla bdproyectog4.fortaleza
CREATE TABLE IF NOT EXISTS `fortaleza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.fortaleza: ~4 rows (aproximadamente)
INSERT INTO `fortaleza` (`id`, `texto`) VALUES
	(1, 'Alta fidelizacion y satisfaccion del cliente debido a la personalizacion y calidad del servicio'),
	(2, 'Innovación constante en productos y servicios con el uso de tecnología avanzada.'),
	(3, 'Liderazgo en desarrollo de software personalizado, con una de las mayores ventas en el sector (1,200 unidades)'),
	(4, 'Competitividad en consultoría en transformación digital, posicionada con ventas sólidas (600 unidades) y una base de clientes estable.');

-- Volcando estructura para tabla bdproyectog4.matriz_came
CREATE TABLE IF NOT EXISTS `matriz_came` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debilidades` text NOT NULL,
  `amenazas` text NOT NULL,
  `fortalezas` text NOT NULL,
  `oportunidades` text NOT NULL,
  `fecha_actualizacion` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.matriz_came: ~0 rows (aproximadamente)

-- Volcando estructura para tabla bdproyectog4.mision
CREATE TABLE IF NOT EXISTS `mision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.mision: ~1 rows (aproximadamente)
INSERT INTO `mision` (`id`, `texto`) VALUES
	(1, 'Brindar soluciones tecnológicas personalizadas que impulsan la transformación digital de nuestros clientes, promoviendo el crecimiento y la innovación mediante la creación de software de alta calidad y adaptado a sus necesidades.');

-- Volcando estructura para tabla bdproyectog4.objetivos
CREATE TABLE IF NOT EXISTS `objetivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estrategico` varchar(500) DEFAULT NULL,
  `especifico1` varchar(500) DEFAULT NULL,
  `especifico2` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.objetivos: ~3 rows (aproximadamente)
INSERT INTO `objetivos` (`id`, `estrategico`, `especifico1`, `especifico2`) VALUES
	(1, 'Expansión de la cartera de clientes en un 30% en los próximos 3 años', 'Desarrollar campañas de marketing digital para atraer nuevos clientes en sectores estrategicos', 'Participar en eventos y ferias de tecnología para aumentar la visibilidad de la empresa.'),
	(2, 'Innovación en soluciones de software mediante la implementación de IA y machine learning.', 'Formar un equipo especializado en inteligencia artificial para el desarrollo de proyectos innovadores.', 'Implementar al menos dos proyectos de IA en los próximos dos años en el sector salud.'),
	(3, 'Mejorar la eficiencia operativa para reducir los tiempos de desarrollo en un 15% en dos años.', 'Adoptar metodologías ágiles como Scrum para gestionar los proyectos de manera eficiente', 'Implementar una plataforma interna de seguimiento de proyectos para mejorar la comunicación y la colaboración.');

-- Volcando estructura para tabla bdproyectog4.observaciones
CREATE TABLE IF NOT EXISTS `observaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.observaciones: ~3 rows (aproximadamente)
INSERT INTO `observaciones` (`id`, `texto`) VALUES
	(1, 'a'),
	(2, 'a'),
	(3, 'El análisis de potencial de mejora, con un resultado del 66.40%, muestra que la empresa tiene una gran oportunidad de optimizar procesos y mejorar áreas clave. Aunque se destacan fortalezas como la fidelización de clientes mediante un servicio personalizado y la constante innovación en productos y tecnología, existen áreas de mejora significativas, especialmente en la optimización de los canales de distribución y la eficiencia en la cadena de producción. Estas debilidades limitan su expansión en mercados externos y afectan su competitividad en términos de costos, sugiriendo la necesidad de un plan estratégico que aborde estos aspectos para fortalecer su posición en el mercado.');

-- Volcando estructura para tabla bdproyectog4.pest_analisis
CREATE TABLE IF NOT EXISTS `pest_analisis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `valoracion` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.pest_analisis: ~0 rows (aproximadamente)

-- Volcando estructura para tabla bdproyectog4.uen
CREATE TABLE IF NOT EXISTS `uen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uen` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.uen: ~1 rows (aproximadamente)
INSERT INTO `uen` (`id`, `uen`) VALUES
	(1, 'Provision de servicios de soporte para asegurar el correcto funcionamiento y actualizacion de sistemas, crear aplicaciones intuitivas y funcionales que apoyen las operaciones de las empresas, asesoria para ayudar a la empresas a optimizar y modernizar procesos atraves de la tecnologia. ');

-- Volcando estructura para tabla bdproyectog4.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.usuarios: ~4 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
	(1, 'user', '$2y$10$wuwG9pqCg7N6RzHxrBcskOc3FzS8p/83jJ6ByEsCve3fCDCQj4Boe'),
	(2, 'a', '$2y$10$3CQF7.m72wMsh2Tpqr8cAehJurFylfswoaLvhs99jn1Iu9jgt3EIG'),
	(3, 'mary', '$2y$10$b8N9DbOdvfrlqURWVaM58.6DnqZN7xGgbQidMoVfiPDgWURlWAelC'),
	(4, 'luz', '$2y$10$28viczjzYpii7myj4ndd..Z9NWcujLJQNJKXRoOEsdzhmW20bQ0pK');

-- Volcando estructura para tabla bdproyectog4.valores
CREATE TABLE IF NOT EXISTS `valores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.valores: ~6 rows (aproximadamente)
INSERT INTO `valores` (`id`, `texto`) VALUES
	(1, 'Innovacion Continua : Comprometidos  con la mejora constante y la incorporacion de nuevas tecnologias. '),
	(2, 'Etica profesional: Actuamos con integridad y transparencia. '),
	(3, 'Responsabilidad Social  y Ambiental'),
	(4, 'Excelencia en la prestación de servicios '),
	(5, 'valor5'),
	(6, 'valor6');

-- Volcando estructura para tabla bdproyectog4.vision
CREATE TABLE IF NOT EXISTS `vision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bdproyectog4.vision: ~1 rows (aproximadamente)
INSERT INTO `vision` (`id`, `texto`) VALUES
	(1, 'Convertirnos en líderes regionales en el desarrollo de software personalizado, reconocidos por nuestra innovación, confiabilidad y compromiso con el éxito de nuestros clientes.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
