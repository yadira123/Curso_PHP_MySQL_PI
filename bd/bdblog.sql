-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 18-08-2018 a las 23:35:43
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdblog`
--
CREATE DATABASE IF NOT EXISTS `bdblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdblog`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

DROP TABLE IF EXISTS `contenido`;
CREATE TABLE IF NOT EXISTS `contenido` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(25) NOT NULL,
  `FECHA` datetime DEFAULT NULL,
  `COMENTARIO` text,
  `IMAGEN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`ID`, `TITULO`, `FECHA`, `COMENTARIO`, `IMAGEN`) VALUES
(10, 'Ejemplo de entrada 2', '2017-11-08 01:00:58', 'Este es un ejemplo de la segunda entrada de hoy', 'perro1.jpg'),
(9, 'Ejemplo de entrada', '2017-11-08 00:59:00', 'Este es un ejemplo de la entrada de hoy', 'gatito3.jpg'),
(16, 'Ejemplo de entrada 3', '2017-11-08 01:50:31', 'Este es un ejemplo de la tercera entrada de mi Blog. Este es mi Blog personal creado en el curso de PHP desde cero con el canal de youtube Pildoras Informaticas.', 'gati.jpg'),
(27, 'Entrada 4 PL/SQL', '2017-11-08 02:06:07', 'Bienvenidos a mi blog del PL/SQL donde aprenderás a dominar este lenguaje de programacion de Oracle desde cero a nivel avanzado desde lo más básico como declaración de variables, tipos de datos escalares, referenciales hasta el uso de triggers.', '1440_900_20110414104616566872.jpg'),
(32, 'Mi entra Noviembre', '2017-11-09 17:16:17', 'kaksasjas', 'perro1.jpg'),
(33, '', '2017-11-12 21:12:00', '', ''),
(34, 'ENTRADA YADIRA', '2018-08-18 20:50:42', '18/08/2018\r\nNUEVA ENTRADA', ''),
(35, '', '2018-08-18 20:53:41', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
