/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50616
Source Host           : localhost:3306
Source Database       : final

Target Server Type    : MYSQL
Target Server Version : 50616
File Encoding         : 65001

Date: 2015-06-24 12:10:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acceso
-- ----------------------------
DROP TABLE IF EXISTS `acceso`;
CREATE TABLE `acceso` (
  `id_acceso` int(11) NOT NULL AUTO_INCREMENT,
  `log` varchar(45) DEFAULT NULL,
  `pas` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_acceso`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of acceso
-- ----------------------------
INSERT INTO `acceso` VALUES ('1', 'root', '1234', '1');

-- ----------------------------
-- Table structure for ci_sessions
-- ----------------------------
DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_sessions
-- ----------------------------
INSERT INTO `ci_sessions` VALUES ('1543a5e93ee4d0354f8a5b97111ffa12', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.81 Safari/537.36', '1432829877', 'a:1:{s:9:\"user_data\";s:0:\"\";}');
INSERT INTO `ci_sessions` VALUES ('81d851855a261de4db7fccf5680d1d2b', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.130 Safari/537.36', '1435163806', 'a:1:{s:9:\"user_data\";s:0:\"\";}');

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `admin` int(2) DEFAULT '0',
  PRIMARY KEY (`idpersonal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of personal
-- ----------------------------
INSERT INTO `personal` VALUES ('1', null, 'CASALET RAVENNA ANA MARIA MONICA', '1944-03-18', '1', '0');
INSERT INTO `personal` VALUES ('2', null, 'BOBES LEON VELIA CECILIA', '1957-11-22', '1', '0');
INSERT INTO `personal` VALUES ('3', null, 'TAVERA FENOLLOSA LIGIA', '1964-08-29', '1', '0');
INSERT INTO `personal` VALUES ('4', null, 'CASILLAS RAMIREZ RODOLFO', '1952-01-03', '1', '0');
INSERT INTO `personal` VALUES ('5', null, 'MARTINEZ PEREZ LILIANA', '1963-11-04', '1', '0');
INSERT INTO `personal` VALUES ('6', null, 'HERRERA RAMOS J MARIO', '1955-10-20', '1', '0');
INSERT INTO `personal` VALUES ('7', null, 'PUYANA MUTIS ALICIA', '1940-03-12', '1', '0');
INSERT INTO `personal` VALUES ('8', null, 'GOMES DA CONCEICAO MARIA CRISTINA', '1957-09-16', '1', '0');
INSERT INTO `personal` VALUES ('9', null, 'TORREGROSA Y ARMENTIA MARIA LUISA', '1947-05-29', '1', '0');
INSERT INTO `personal` VALUES ('10', null, 'SAAVEDRA PELAEZ FERNANDO MAURICIO', '1945-02-10', '1', '0');
INSERT INTO `personal` VALUES ('11', null, 'CARASSALE REAL SANTIAGO ANDRES', '1968-11-07', '1', '0');
INSERT INTO `personal` VALUES ('13', null, 'GAYET SERRANO CLAVERO CECILIA INES', '1961-06-11', '1', '0');
INSERT INTO `personal` VALUES ('14', null, 'DEL CASTILLO ALEMAN GLORIA', '1964-11-02', '1', '0');
