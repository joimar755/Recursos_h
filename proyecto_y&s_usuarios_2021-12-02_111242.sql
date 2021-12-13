/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS usuarios;
CREATE TABLE `usuarios` ( 
  id int(11) NOT NULL AUTO_INCREMENT,
  p_nombre varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  s_nombre varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  p_apellido varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  s_apellido varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  identidad_Id int(11) NOT NULL,
  correo  varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  passwords varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  rolesId int(11) NOT NULL, 
  PRIMARY KEY (id),
  KEY rolesId (rolesId),
  KEY identidad_Id (identidad_Id), 
  CONSTRAINT roles_FK  
  CONSTRAINT identidad_FK 
  FOREIGN KEY (rolesId) 
  FOREIGN KEY ()


) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;