-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2016 a las 02:44:51
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academica`
--

CREATE TABLE `academica` (
  `idacademica` int(11) NOT NULL,
  `escuela` varchar(45) DEFAULT NULL,
  `grado` varchar(45) DEFAULT NULL,
  `f_inicio` date DEFAULT NULL,
  `f_fin` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `idpersonal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `academica`
--

INSERT INTO `academica` (`idacademica`, `escuela`, `grado`, `f_inicio`, `f_fin`, `status`, `idpersonal`) VALUES
(1, 'FES Aragon', '2° Semestre', '2015-08-08', '2025-12-01', 1, 17),
(2, 'Ezequiel A. Cahvez', 'Certificado de preparatoria', '2012-01-01', '2015-12-01', 1, 17),
(3, 'FES Aragon', '2° Semestre', '2015-08-08', '2018-12-01', 1, 15),
(4, 'Ezequiel A. Cahvez', 'Certificado de preparatoria', '2013-01-01', '2014-01-12', 1, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `id_acceso` int(11) NOT NULL,
  `log` varchar(45) DEFAULT NULL,
  `pas` varchar(45) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `nacimiento` varchar(10) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`id_acceso`, `log`, `pas`, `nombre`, `nacimiento`, `status`) VALUES
(1, 'root', '1234', 'Eduardo, Alfaro', '', 1),
(2, '1234', '1234', 'lalo', '1234', 1),
(3, '1234', '1234', 'lalo2', '1234', 1),
(4, '1234', '12345', 'lalo2', '1234', 1),
(5, 'okpokpok', 'pok', 'pkpo', 'pokpokp', 1),
(6, '1234', '1234', 'lalo3', '1234', 1),
(7, 'admin', '1234', 'Usuario bien', '1980-03-21', 1),
(8, 'lalo', '1234', 'Eduardo', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('c72300c6d70f0c4e5a3e96f3849e0b8f', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36', 1463704899, 'a:5:{s:9:"user_data";s:0:"";s:8:"validado";b:1;s:10:"nombre_usr";s:15:"Eduardo, Alfaro";s:6:"id_usr";s:1:"1";s:20:"nombre_variable_sess";s:5:"valor";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `direccion` longtext,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idpersonal`, `nombre`, `nacimiento`, `correo`, `tel`, `direccion`, `status`) VALUES
(1, 'CASALET RAVENNA ANA MARIA MONICA', '1944-03-18', 'gerardo.brito.alanis@gmail.com', 2147483647, 'dsfsdfs', 1),
(2, 'BOBES LEON VELIA CECILIA', '1957-11-22', NULL, NULL, NULL, 1),
(3, 'TAVERA FENOLLOSA LIGIA', '1964-08-29', NULL, NULL, NULL, 1),
(4, 'CASILLAS RAMIREZ RODOLFO', '1952-01-03', NULL, NULL, NULL, 0),
(5, 'MARTINEZ PEREZ LILIANA', '1963-11-04', NULL, NULL, NULL, 1),
(6, 'HERRERA RAMOS J MARIO', '1955-10-20', NULL, NULL, NULL, 1),
(7, 'PUYANA MUTIS ALICIA', '1940-03-12', NULL, NULL, NULL, 1),
(8, 'GOMES DA CONCEICAO MARIA CRISTINA', '1957-09-16', NULL, NULL, NULL, 1),
(9, 'TORREGROSA Y ARMENTIA MARIA LUISA', '1947-05-29', NULL, NULL, NULL, 1),
(10, 'SAAVEDRA PELAEZ FERNANDO MAURICIO', '1945-02-10', NULL, NULL, NULL, 1),
(11, 'CARASSALE REAL SANTIAGO ANDRES', '1968-11-07', NULL, NULL, NULL, 1),
(13, 'GAYET SERRANO CLAVERO CECILIA INES', '1961-06-11', 'ssohidsojh@okyaentendi.com', 0, 'kjhsdkjhdskj', 1),
(14, 'DEL CASTILLO ALEMAN GLORIA', '1964-11-02', NULL, NULL, NULL, 1),
(15, 'Gerardo Brito Alanis', '1995-11-19', 'gerardo.brito.alanis@gmail.com', 2147483647, 'Calle alguna #5 final', 1),
(16, 'David Cruz Morales', '1996-06-05', 'david_cruz@hotmail.com', 2147483647, 'Alguna direccion', 1),
(17, 'Carlos Axel Reza Mendez', '1997-05-03', 'axdarknight@gmail.com', 2147483647, 'Ciudad Gotica, Neza S/N', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `academica`
--
ALTER TABLE `academica`
  ADD PRIMARY KEY (`idacademica`),
  ADD KEY `fk_academica_personal_idx` (`idpersonal`);

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`id_acceso`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idpersonal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `academica`
--
ALTER TABLE `academica`
  MODIFY `idacademica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `idpersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `academica`
--
ALTER TABLE `academica`
  ADD CONSTRAINT `fk_academica_personal` FOREIGN KEY (`idpersonal`) REFERENCES `personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
