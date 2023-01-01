-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-11-2021 a las 22:08:25
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `helpqr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nro_serv_salud`
--

DROP TABLE IF EXISTS `nro_serv_salud`;
CREATE TABLE IF NOT EXISTS `nro_serv_salud` (
  `ID_Nro_Serv_Salud` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Serv_Salud` int(11) NOT NULL,
  `Nro_Serv_Salud` int(11) NOT NULL,
  PRIMARY KEY (`ID_Nro_Serv_Salud`),
  UNIQUE KEY `ID_Serv_Salud` (`ID_Serv_Salud`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nro_serv_salud`
--

INSERT INTO `nro_serv_salud` (`ID_Nro_Serv_Salud`, `ID_Serv_Salud`, `Nro_Serv_Salud`) VALUES
(1, 1, 45863243),
(2, 2, 45864534),
(3, 3, 458632323),
(4, 4, 8002393);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `ID_Persona` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `CI` int(11) NOT NULL,
  `Pais` varchar(25) NOT NULL,
  `Departamento` varchar(25) NOT NULL,
  `Ciudad` varchar(25) NOT NULL,
  `Calle` varchar(25) NOT NULL,
  `Nro_Contacto` int(11) NOT NULL,
  `Patologia` varchar(100) DEFAULT NULL,
  `Medicacion` varchar(100) DEFAULT NULL,
  `Auxilio` varchar(100) DEFAULT NULL,
  `ID_Usuario` int(11) NOT NULL,
  `ID_Serv_Salud` int(11) NOT NULL,
  `ID_QR` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_Persona`),
  UNIQUE KEY `CI` (`CI`),
  KEY `ID_Usuario` (`ID_Usuario`),
  KEY `ID_Serv_Salud` (`ID_Serv_Salud`),
  KEY `ID_Serv_Salud_2` (`ID_Serv_Salud`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_Persona`, `Nombre`, `Apellido`, `CI`, `Pais`, `Departamento`, `Ciudad`, `Calle`, `Nro_Contacto`, `Patologia`, `Medicacion`, `Auxilio`, `ID_Usuario`, `ID_Serv_Salud`, `ID_QR`) VALUES
(51, 'Maria Jose', 'Geymonat', 29804693, 'Uruguay', 'Colonia', 'Juan Lacaze', 'Mario Echeverria', 98765345, 'Ninguna', 'no uso', 'Ninguno', 3, 3, 'Maria JoseGeymonat04-11-2021-17-55-23.png'),
(52, 'Monica', 'Rodriguez', 11122239, 'Uruguay', 'Colonia', 'Artilleros', 'Calle 4', 99876766, 'hipertensa', 'atenolan compuesto', '', 3, 2, 'MonicaRodriguez04-11-2021-20-17-07.png'),
(53, 'Natalia', 'Mendez', 49175509, 'Uruguay', 'Colonia', 'Colonia Valdense', '19', 90557194, 'ninguna', 'no uso', 'Ninguno', 3, 1, 'NataliaMendez05-11-2021-16-46-26.png'),
(54, 'Maria Jose', 'comde', 41714710, 'Uruguay', 'Rocha', 'cabo polonio', 'sn', 99708188, '', '', '', 3, 3, 'Maria Josecomde05-11-2021-22-01-18.png'),
(56, 'Rafael', 'Mourglia', 42790500, 'Uruguay', 'Colonia', 'Juan Lacaze', 'Vaimaca Piru 34', 94837284, 'Hipertenso', 'Valsacor 20', 'Diazepan sublingual', 3, 3, 'RafaelMourglia08-11-2021-21-03-30.png'),
(58, 'Miguel', 'Mediza', 53601413, 'Uruguay', 'Colonia', 'Juan L Lacaze', 'Mario Echeverria', 45864433, 'Prolapso en válvula mitral', 'Para el corazon', 'Ninguno', 22, 2, 'MiguelMediza10-11-2021-21-38-11.png'),
(59, 'Sebastian', 'Saavedra', 56222101, 'Uruguay', 'Colonia', 'Juan L Lacaze', 'Senaque', 93438192, '', '', '', 22, 1, 'SebastianSaavedra10-11-2021-21-40-08.png'),
(60, 'Victor', 'Lecor', 54914829, 'Uruguay', 'Colonia', 'Juan L Lacaze', 'Calle 9', 124125, '', '', '', 22, 1, 'VictorLecor10-11-2021-21-41-52.png'),
(61, 'Matias', 'Gutierrez', 51436795, 'Uruguay', 'Colonia', 'Juan L Lacaze', 'Jose Enrique Rodo 177', 45865680, '', '', '', 22, 2, 'MatiasGutierrez10-11-2021-21-44-23.png'),
(62, 'Mariano', 'Bastarreix', 42001064, 'Uruguay', 'Colonia', 'Carmelo', 'Dr Miguel Mortalena 1221', 98190178, 'Alérgico Crónico', 'Loratadina', 'No', 3, 13, 'MarianoBastarreix15-11-2021-17-54-05.png'),
(64, 'Roxana', 'Silva', 41778925, 'Uruguay', 'Colonia', 'Rosario', 'Atanasio Lapido 583', 98166841, 'Alergica', 'Alerfast', '', 3, 3, 'RoxanaSilva16-11-2021-21-12-02.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_salud`
--

DROP TABLE IF EXISTS `servicio_salud`;
CREATE TABLE IF NOT EXISTS `servicio_salud` (
  `ID_Serv_Salud` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(25) NOT NULL,
  `Calle` varchar(25) NOT NULL,
  `Numero` int(11) NOT NULL,
  PRIMARY KEY (`ID_Serv_Salud`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio_salud`
--

INSERT INTO `servicio_salud` (`ID_Serv_Salud`, `Nombre`, `Calle`, `Numero`) VALUES
(1, 'ASSE', '18 de julio', 13),
(2, 'CÍRCULO CATÓLICO', 'Don bosco', 12),
(3, 'CAMEC', 'Calle Juan ', 13),
(4, 'HOSPITAL EVANGELICO', 'Bvar. Batlle y Ordóñez ', 2759),
(5, 'AMECOM', 'Avda. Roosevelt ', 13),
(6, 'AMEDRIN', 'Rincon', 1051),
(7, 'AMSJ', 'Trinta y Tres', 633),
(8, 'ASOCIACIÓN ESPAÑOLA', 'Bvar Artigas', 1515),
(9, 'CAAMEPA', 'Baltasar Brum', 1124),
(10, 'CAMCEL', 'Jose Pedro', 623),
(11, 'CAMDEL', 'Lavalleja s', 13),
(12, 'COMEDUR', 'Abril', 19),
(13, 'CAMOC', 'Zorrila de San Martin', 683),
(14, 'CAMS', 'Victor Haedo', 381),
(15, 'CAMY', '25 de Agosto', 3450),
(16, 'CASA DE GALICIA', 'Millan', 4480),
(17, 'CASMER', 'Fautino', 1189),
(18, 'COMTA', '18 de julio', 318),
(19, 'COMECA', 'Minas', 1250),
(20, 'COMCEL', 'Antonio Fernandez', 492),
(21, 'COMEF', 'Fray Ubeda', 647),
(22, 'COMEFLO', 'Colon', 1224),
(23, 'COMEPA', 'Ansina', 639),
(24, 'COMERI', 'Lezica', 5679),
(25, 'MÉDICA URUGUAYA', 'Avda 8 octubre', 2870),
(26, 'UNIVERSAL', 'Millan', 3588),
(27, 'SMI', 'Mercedes', 1288);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Usuario` varchar(25) NOT NULL,
  `Contrasena` varchar(250) NOT NULL,
  `Tipo_Usuario` varchar(25) DEFAULT NULL,
  `Cantidad_Maxima` int(11) DEFAULT NULL,
  `CI` int(8) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Pais` varchar(25) NOT NULL,
  `Departamento` varchar(25) NOT NULL,
  `Ciudad` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Usuario`),
  UNIQUE KEY `CI` (`CI`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `Nombre_Usuario`, `Contrasena`, `Tipo_Usuario`, `Cantidad_Maxima`, `CI`, `Nombre`, `Apellido`, `Pais`, `Departamento`, `Ciudad`, `email`) VALUES
(3, 'MigueA22', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', 'Premium Gold', 30, 53601413, 'Miguel', 'Mediza', 'Uruguay', 'Montevideo', 'Juan', 'miguel10mediza@hotmail.com'),
(4, 'Mirta123', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', 'Gratis', 2, 34242431, 'Mirta', 'Pilon', 'Uruguay', 'Colonia', 'Juan Lacaze', 'mirtap@gmail.com'),
(5, 'nachoo212', 'a26e0345735a196853ee017a5a913e5ce6a2677c41ce8684c23f49c09a0056c6ea19ba81f5efd55fb59f3da3664621bf433069407517cec414c2d1eead895fab', NULL, NULL, 34465650, 'Nacho', 'Fernandez', 'Uruguay', 'Colonia', 'Tarariras', 'semaruu1@gmail.com'),
(6, 'dasdsdasda', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 43241412, 'Miguel', 'Mediza', 'Uruguay', 'Soriano', 'fsfsd', 'miguel111mediza@hotmail.com'),
(7, '1234233', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', 'Premium', 10, 34234232, 'Miguel2', 'mediza', 'Uruguay', 'Paysandu', 'Juan Lacaze', 'miguel1220mediza@hotmail.com'),
(8, '1234migue', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 34234233, 'Miguel', 'Mediza', 'Uruguay', 'Salto', 'Juan Lacaze', 'miguel1213mediza@hotmail.com'),
(11, 'MigueA222312321', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 53601412, 'Miguel', 'Mediza', 'Uruguay', 'Salto', 'dadsdaa', 'miguel3131310mediza@hotmail.com'),
(12, 'MigueA22231123', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 32434264, 'Miguel', 'Mediza', 'Uruguay', 'Soriano', 'Juan Lacaze', 'miguel10123123213mediza@hotmail.com'),
(13, 'seba', '62b4afc7999797179a0c284e5fa870473141e0c3dcdfc9fb6371fe22bb06d3a33fd4937b47cdd7d0a6ab506155ed7d8edb6ac0b1c36172d70a9652742de9ec88', 'Gratis', 2, 56222101, 'Sebastian', 'Saavedra', 'Uruguay', 'Colonia', 'Juan Lacaze', 'seba@gmail.com'),
(14, 'deadtomeeowo', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', 'Premium Gold', 30, 35345345, 'Miguel', 'Mediza', 'Uruguay', 'San Jose', 'Juan Lacaze', 'deadtomeeowo@gmail.com'),
(15, 'sebasaave', 'fa585d89c851dd338a70dcf535aa2a92fee7836dd6aff1226583e88e0996293f16bc009c652826e0fc5c706695a03cddce372f139eff4d13959da6f1f5d3eabe', NULL, NULL, 51111410, 'sebastian', 'saavedra', 'Uruguay', 'San Jose', 'asd', 'sebasaave@gmail.com'),
(16, 'deadtomeeowo313123', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 32434253, 'Miguel', 'Mediza', 'Uruguay', 'Rio Negro', 'Juan Lacaze', 'miguel132130mediza@hotmail.com'),
(17, 'MigueA22ffdsf', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 324342, 'Miguel', 'Mediza', 'Uruguay', 'Rivera', 'Juan Lacaze', 'migu123el10mediza@hotmail.com'),
(20, 'defsfsff', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 42342424, 'Miguel', 'Mediza', 'Uruguay', 'Salto', 'Juan Lacaze', 'dead@gmail.com'),
(21, '353fsfdsf', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 34353454, 'Miguel', 'Mediza', 'Uruguay', 'San Jose', 'Juan Lacaze', 'miguel110mediza@hotmail.com'),
(22, '1231231', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', 'Premium', 10, 53534535, 'miguel', 'mediza', 'Uruguay', 'Rocha', 'Juan Lacaze', '123@gmail.com'),
(26, 'deadtomeeasd', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 54556456, 'Miguel', 'Mediza', 'Uruguay', 'Rio Negro', 'Juan Lacaze', 'miguel10432mediza@hotmail.com'),
(27, 'MirtaPilon123', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7', NULL, NULL, 35353453, 'Mirta', 'Pilon', 'Uruguay', 'Rio Negro', 'Juan Lacaze', 'mirta321@hotmail.com'),
(28, 'moni123', '0dc502d54687d577e8e0891f43e326ae1994fcc41c01e7a231958894a622802731e70df2b1e303264fc176f0d3febbdea556323e0303e8b1b96792f2cb97e3ad', 'Gratis', 2, 11122233, 'MONICA ', 'RODRIGUEZ', 'Uruguay', 'Colonia', 'Juan Lacaze', 'profemonica.utu@gmail.com'),
(29, 'nati13687', 'a3e8882db900b2665c5fc925bd1ce97d28fe38788f78507c83015c05ead4acad6392ffc3e8b09a469a9769ed682d58cc790be36f64a2ec26d23dcd17dc2f9185', NULL, NULL, 49175509, 'Natalia', 'Mendez', 'Uruguay', 'Colonia', 'Colonia Valdense', 'nati_13687@hotmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nro_serv_salud`
--
ALTER TABLE `nro_serv_salud`
  ADD CONSTRAINT `nro_serv_salud_ibfk_1` FOREIGN KEY (`ID_Serv_Salud`) REFERENCES `servicio_salud` (`ID_Serv_Salud`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_10` FOREIGN KEY (`ID_Serv_Salud`) REFERENCES `servicio_salud` (`ID_Serv_Salud`) ON UPDATE CASCADE,
  ADD CONSTRAINT `persona_ibfk_6` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
