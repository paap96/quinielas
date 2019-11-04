-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2016 a las 01:55:45
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qlmx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `academica`
--

CREATE TABLE IF NOT EXISTS `academica` (
  `idacademica` int(11) NOT NULL,
  `escuela` varchar(45) DEFAULT NULL,
  `grado` varchar(45) DEFAULT NULL,
  `f_inicio` date DEFAULT NULL,
  `f_fin` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `idpersonal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id_acceso` int(11) NOT NULL,
  `log` varchar(45) DEFAULT NULL,
  `pas` varchar(45) DEFAULT NULL,
  `nombre_admin` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id_acceso`, `log`, `pas`, `nombre_admin`, `status`) VALUES
(1, 'root', '1234', 'Eduardo, Alfaro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('a79833cd64cfc5ce494fd60bb3ff7570', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1464911478, 'a:1:{s:9:"user_data";s:0:"";}'),
('def52ab39fd4377da3e1e09a4c693dbc', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.87 Safari/537.36', 1464908767, 'a:2:{s:9:"user_data";s:0:"";s:20:"nombre_variable_sess";s:5:"valor";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_c` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `borrar` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_c`, `idusuario`, `comentario`, `nombre`, `borrar`) VALUES
(1, 1, 'efdedfew', 'Pedro Alejandro', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `idpersonal` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL,
  `direccion` longtext,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

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
(15, 'Gerardo Brito Alanis', '1995-11-19', 'gerardo.brito.alanis@gmail.com', 2147483647, 'Calle alguna #5 final', 1),
(16, 'David Cruz Morales', '1996-06-05', 'david_cruz@hotmail.com', 2147483647, 'Alguna direccion', 1),
(17, 'Carlos Axel Reza Mendez', '1997-05-03', 'axdarknight@gmail.com', 2147483647, 'Ciudad Gotica, Neza S/N', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quiniela`
--

CREATE TABLE IF NOT EXISTS `quiniela` (
  `numquini` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `Ganador1` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador2` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador3` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador4` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador5` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador6` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador7` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Ganador8` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `quiniela`
--

INSERT INTO `quiniela` (`numquini`, `idusuario`, `Ganador1`, `Ganador2`, `Ganador3`, `Ganador4`, `Ganador5`, `Ganador6`, `Ganador7`, `Ganador8`) VALUES
(1, 3, 'empate', 'pachuca', 'empate', 'pumas', 'empate', 'empate', 'necaxa', 'tigres'),
(2, 1, 'queretaro', 'empate', 'puebla', 'empate', 'empate', 'cruz azul', 'empate', 'tigres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas`
--

CREATE TABLE IF NOT EXISTS `tarjetas` (
  `num_card` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `codigopost` int(10) NOT NULL,
  `tel` int(15) NOT NULL,
  `tarjeta` int(20) NOT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarjetas`
--

INSERT INTO `tarjetas` (`num_card`, `idusuario`, `calle`, `numero`, `colonia`, `estado`, `codigopost`, `tel`, `tarjeta`, `cvv`) VALUES
(1, 1, 'calle', 21, 'qwerty', 'mexico', 57750, 554433221, 1234567890, 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `edad` int(5) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `correo` varchar(30) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `log` varchar(20) DEFAULT NULL,
  `pas` varchar(20) DEFAULT NULL,
  `equipofav` varchar(20) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `edad`, `genero`, `correo`, `log`, `pas`, `equipofav`, `status`) VALUES
(1, 'Pedro Alejandro', 'Aguilar Peña', 19, 'masculino', 'pedroapa@gmail.com', 'paap_64', 'jellybean', 'chivas', 1),
(2, 'Brandon Alexis', 'Alvarez Farias', 19, 'masculino', 'brandonaaf@hotmail.com', 'baaf_19', 'thevaccines10', 'america', 1),
(3, 'Jose Pedro ', 'Antunez Camacho', 18, 'masculino', 'jose_peter@gmail.com', 'peterparker15', 'hombrearaña', 'cruz azul', 1),
(4, 'Gerardo', 'Brito Alanis', 19, 'masculino', 'gerardojordan@outlook.com', 'gerardin78', 'muse33', 'pumas', 1),
(5, 'Alan Rodrigo ', 'Cabrera Sanchez', 25, 'masculino', 'Alan_poerodrigo@hotmail.com', 'Alanpr99', 'interpol13', 'pachuca', 1),
(6, 'Alfonso', 'Corona Ramirez', 29, 'masculino', 'alfonsoescoboza@gmail.com', 'escobar65', 'pequeñomono54', 'queretaro', 1),
(7, 'Oscar Daniel', 'Cruz Chimal', 26, 'masculino', 'conejo_oscar@outlook.com', 'conejaperez42', 'quesadillas87', 'toluca', 1),
(8, 'David', 'Cruz Morales', 46, 'masculino', 'david_silva@hotmail.com', 'chinosilva32', 'fueriaroja67', 'tijuana', 1),
(9, 'Luis Antonio ', 'Cruz Plata', 22, 'masculino', 'luistano@gmail.com', 'tanodenigris72', 'pumascampeon9', 'pumas', 1),
(10, 'Cristian Arturo', 'Del Castillo Florin', 24, 'masculino', 'cristianoronalda_2@outlook.com', 'hobbitb10', 'odioelgobierno44', 'tigres', 1),
(11, 'Emerik Hagen', 'Enciso Hernandez', 30, 'masculino', 'drosssss@gmail.com', 'drossrotzank', 'las7contraseñas', 'monterrey', 1),
(12, 'Aline Lizeth', 'Falcon Lopez', 20, 'femenino', 'alinealine_5@hotmail,com', 'chela31', 'bebermucho23', 'chivas', 1),
(13, 'Gabriela', 'Galindo Oaxaca', 21, 'femenino', 'gabygo987@outlook.com', 'gabysteren987236', 'anagg8723', 'leon', 1),
(14, 'Vanesa Pewalty', 'Garcia Bazan', 44, 'femenino', 'vanemo128732@gmail.com', 'vannemoo21', 'thebeatles87', 'monarcas', 1),
(15, 'Enrique Gibran', 'Gonzales Becerril', 50, 'masculino', 'quique9876@gmail,com', 'kikin876', 'fonseca3076', 'santos', 1),
(16, 'Octavio Raul', 'Hernandez Medina', 60, 'masculino', 'oct_paz98765@hotmail.com', 'rjimenez87', 'benfica9876', 'puebla', 1),
(17, 'Juan Manuel ', 'Leal Oliva', 80, 'masculino', 'juan_torreblanca@outlook.com', 'jmtlo386', 'elgranadios345', 'atlas', 1),
(18, 'Aidam Isai', 'Ledesma Morales', 19, 'masculino', 'terrorista_israeli@outlook.com', 'ailm0989', 'verdura76', 'jaguares', 1),
(19, 'Angel Gustavo', 'Loaeza Victoria', 43, 'masculino', 'areyna287@gmail.com', 'plititos1234', 'otrorollo32', 'america', 1),
(20, 'Cesar Alberto', 'Martinez Alquicira', 18, 'masculino', 'svper_man12@hotmail.com', 'svpercan32', 'marthaxdd112', 'america', 1),
(21, 'Bryan', 'Martinez Linares', 18, 'masculino', 'rat_boy98765@outlook.com', 'ninorataml14', 'quesito767', 'cruz azul', 1),
(22, 'Jonathan', 'Mendez Ramirez', 23, 'masculino', 'jhon_orozco@outlook.com', 'jmro7654', 'teamobb987', 'jaguares', 1),
(23, 'Luis Daniel', 'Mendoza Alvares', 36, 'masculino', 'Luislandin231@gmail.com', 'danyalvi098', 'rojoazul75', 'veracruz', 1),
(24, 'Jose Fabian', 'Mendoza Perez', 51, 'masculino', 'marquinho_432@hotmail.com', 'fabiansinho9489', 'komander50', 'tigres', 1),
(25, 'Emmanuel Eduardo', 'Mendoza Varela', 30, 'masculino', 'manu_edu@outlook.com', 'mane5432', 'acalalo56', 'atlas', 1),
(26, 'Antonio', 'Molina Romero', 76, 'masculino', 'tony_lopez@hotmail.com', 'chuchomol876', 'ferrari8765', 'tijuana', 1),
(27, 'Fernando', 'Morales Neri', 18, 'masculino', 'fergi_alex@outlook.com', 'sirfer423', 'cchotelove89', 'pumas', 1),
(28, 'Mildred', 'Ordoñez Godinez', 20, 'femenino', 'mikaog7865@gmail.com', 'mikaord321', 'dcworld7564', 'pachuca', 1),
(29, 'Jose', 'Pacheco Andrade', 76, 'masculino', 'pepe_cardozo2@hotmail.com', 'dondiablo198', 'icofes8543', 'toluca', 1),
(30, 'Kevin Jordy', 'Padilla Gomez', 18, 'masculino', 'kevin_chivas_lyon@hotmail.com', 'kevinch14', 'soykevintl19', 'chivas', 1),
(31, 'Joshua Javier', 'Paz Solis', 34, 'masculino', 'jjaquinops@gmail.com', 'gow6765', 'kratos9876', 'monarcas', 1),
(32, 'Jonathan Omar', 'Perez Cisneros', 56, 'masculino', 'chacmool_23@hotmacil.com', 'jocisneros23', 'borrego8976', 'chivas', 1),
(33, 'Lizbeth Guadalupe', 'Perez Hernandez', 19, 'femenino', 'lupe_lph@outlook.com', 'lupita765', 'myhouse19876', 'puebla', 1),
(34, 'Jose Antonio', 'Razo Lopez', 20, 'masculino', 'jara_lopez@hotmail.com', 'pepetony786', 'pizzahot654', 'pumas', 1),
(35, 'Carlos Axel', 'Reza Mendez', 24, 'masculino', 'axelrose9876@gmail.com', 'carlostevez342', 'apache654', 'santos', 1),
(36, 'David Alejandro', 'Robles Hernandez', 69, 'masculino', 'mcdavo_976@hotmail.com', 'ale3000', 'darh8765', 'queretaro', 1),
(37, 'Carlos Francisco', 'Rosas Villagran', 19, 'masculino', 'franciscoisco87@gmail.com', 'totti9876', 'roma87654', 'america', 1),
(38, 'Ricardo Alberto', 'Santos Velasco', 33, 'masculino', 'richie_phelps432@outlook.com', 'beto345554', 'rasvel8765', 'santos', 1),
(39, 'Victor Oscar', 'Saviñon Tovar', 45, 'masculino', 'vic_sully@hotmail.com', 'sulleyman897', 'uncharted4', 'toluca', 1),
(40, 'Roberto', 'Silva Corona', 99, 'masculino', 'robinho9876@gmail.com', 'anciroberto99', 'romero8765', 'america', 1),
(41, 'Edwin', 'Soto Sanchez', 47, 'masculino', 'edwin_arix@outlook.com', 'ponce9876', 'mikimouse333', 'chivas', 1),
(42, 'Alejandro Benjamin', 'Uribe Perez', 76, 'masculino', 'benji_frank@hotamil.com', 'feruribe34', 'michael67543', 'toluca', 1),
(43, 'Hannia', 'Zuñiga Ramirez', 18, 'femenina', 'hzr6443476@gmail.com', 'hannzr9887', 'rosasflores987', 'queretaro', 1);

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
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_acceso`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_c`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idpersonal`);

--
-- Indices de la tabla `quiniela`
--
ALTER TABLE `quiniela`
  ADD PRIMARY KEY (`numquini`);

--
-- Indices de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  ADD PRIMARY KEY (`num_card`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `academica`
--
ALTER TABLE `academica`
  MODIFY `idacademica` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id_acceso` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `idpersonal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `quiniela`
--
ALTER TABLE `quiniela`
  MODIFY `numquini` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tarjetas`
--
ALTER TABLE `tarjetas`
  MODIFY `num_card` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `academica`
--
ALTER TABLE `academica`
  ADD CONSTRAINT `fk_academica_personal` FOREIGN KEY (`idpersonal`) REFERENCES `final`.`personal` (`idpersonal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
