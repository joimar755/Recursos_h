/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/ proyecto_y&s /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE proyecto_y&s;

DROP TABLE IF EXISTS identidad;
CREATE TABLE `identidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

DROP TABLE IF EXISTS roles;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

DROP TABLE IF EXISTS usuarios;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `s_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `s_apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `identidad` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `passwords` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `rolesId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rolesId` (`rolesId`),
  CONSTRAINT `rolesId` FOREIGN KEY (`rolesId`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;