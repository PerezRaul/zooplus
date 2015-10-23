-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2015 a las 13:56:57
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_botiga_animals`
--
CREATE DATABASE IF NOT EXISTS `bd_botiga_animals` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_botiga_animals`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anunci`
--

CREATE TABLE IF NOT EXISTS `tbl_anunci` (
  `anu_id` int(11) NOT NULL,
  `anu_contingut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anu_nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `anu_data` date DEFAULT NULL,
  `anu_foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `raca_id` int(11) NOT NULL,
  `mun_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `anu_tipus` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_anunci`
--

INSERT INTO `tbl_anunci` (`anu_id`, `anu_contingut`, `anu_nom`, `anu_data`, `anu_foto`, `raca_id`, `mun_id`, `contact_id`, `anu_tipus`) VALUES
(1, 'Perro perdido de raza beagle en la playa de el Prat de Llobregat (zona aeropuerto) el 11 de octubre por la mañana. Responde al nombre de Tacat.', 'Beagle perdido en el Prat', '2015-10-11', 'tacat.jpg', 14, 4, 2, 'Perdido'),
(2, 'Gato desaparecido con collar y placa con el nombre de Ratlletes. Es de tipo común, rallado de colores naranjas. Rambla Badal, Barcelona.', 'Gato perdido', '2015-10-15', '', 17, 1, 6, 'Perdido'),
(56, 'Perdido en Rubi.', 'Encontrado gato persa', '2015-10-23', 'nofoto.png', 15, 13, 38, 'Encontrado'),
(57, 'No lo encuentro', 'Perdido', '2015-10-23', 'periquito.jpg', 21, 3, 39, 'Perdido'),
(58, 'quien lo ha perdido', 'Encontrado hamster', '2015-10-23', '', 24, 10, 40, 'Encontrado'),
(59, 'No lo encuentro', 'Perdido', '2015-10-23', 'pato.jpg', 26, 16, 41, 'Perdido'),
(60, 'Pájaro depresivo suelto por la ciudad', 'Pió se ha pirado', '2015-10-23', '', 21, 4, 42, 'Perdido'),
(61, 'Esta en celo cuidado.', 'Perdido hamster', '2015-10-23', 'hamster.jpg', 24, 2, 43, 'Perdido'),
(62, 'y yo, buscando a nuestra mamá', 'Mi mono Amedio', '2015-10-23', 'mono.jpg', 30, 11, 44, 'Perdido'),
(63, 'Responde por el nombre miau.', 'Encontrado gato Abisini', '2015-10-23', '', 18, 6, 45, 'Encontrado'),
(64, 'Socorro', 'He perdido un teixó!', '2015-10-23', '', 25, 7, 46, 'Perdido'),
(65, 'Se quedó afónico cantando bisbal', 'Hamster afónico', '2015-10-23', 'bis.jpg', 24, 5, 47, 'Perdido'),
(66, 'Ayudarme por favor', 'He perdido mi canario Soc', '2015-10-23', '', 20, 15, 48, 'Perdido'),
(67, 'Mis ovejas tiraron pal campo', 'Ovejas perdidas', '2015-10-23', 'thGGCN26AL.jpg', 30, 10, 49, 'Encontrado'),
(68, 'Mi querida Mú se ha ido y no quiere volver', 'Mú se ha perdido', '2015-10-23', 'thZ539I79O.jpg', 26, 1, 50, 'Perdido'),
(69, 'Se ha perdido', 'Perdido perro bóxer', '2015-10-23', '', 8, 9, 51, 'Encontrado'),
(70, 'Cuidado que se me ha escapado el tigre y tiene hambre', 'Tigretón el cabrón', '2015-10-23', 'th1KM2X15X.jpg', 28, 6, 52, 'Encontrado'),
(71, 'Se ha perdido en el parque del centro', 'Cachorro perdido', '2015-10-23', '', 8, 1, 53, 'Perdido'),
(72, 'Se ha escapado un canario con tinte', 'Canario rosa', '2015-10-23', '', 20, 13, 54, 'Perdido'),
(73, 'Apareció por la calle y me lo llevé', 'Cosa fea', '2015-10-23', '', 18, 9, 55, 'Encontrado'),
(74, 'socorrooo', 'Perdido', '2015-10-23', '', 27, 8, 56, 'Perdido'),
(75, 'donde los haya', 'gato feo', '2015-10-23', '', 15, 15, 57, 'Perdido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contacte`
--

CREATE TABLE IF NOT EXISTS `tbl_contacte` (
  `contact_id` int(11) NOT NULL,
  `contact_nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `contact_telf` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `contact_adre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_contacte`
--

INSERT INTO `tbl_contacte` (`contact_id`, `contact_nom`, `contact_telf`, `contact_adre`) VALUES
(1, 'Carles Martín', '934534236', ''),
(2, 'Antonio Gámez', '667542343', 'Carrer del Mig, 76 3r 1a'),
(3, 'Carlos Martínez', '654583454', ''),
(4, 'Isabel Vázquez', '698722284', ''),
(5, 'Pedro Santiesteban', '656989931', 'Avinguda Carrilet, 54 3r'),
(6, 'Sònia Gómez', '688341009', 'Gran Via de les Corts Catalanes, 12 Esc. A 3r 2a'),
(7, 'Patricia Martín', '932124654', ''),
(38, 'Víctor Cruz', '643543542', 'Rbla Marina'),
(39, 'Sergio Ayala', '634563454', 'Mineria'),
(40, 'Oriol', '624234234', 'Pepeluis'),
(41, 'Xavier Parrón', '923423423', 'Valencia'),
(42, 'MARIA', '934465523', 'Av américa 128'),
(43, 'Jose', '945345235', 'Riachuelo'),
(44, 'Lucas', '619856584', 'C/ de las casitas 12'),
(45, 'Pepeluis', '967576575', 'Buleria'),
(46, 'Juancho', '634766765', 'Tarradellas'),
(47, 'jose luis', '698985454', 'Av. tevez 12'),
(48, 'Socorro', '624524234', 'Ayuda'),
(49, 'Pepe', '936468654', 'c/ del mar'),
(50, 'Tere', '926413621', 'C/ cortería 15'),
(51, 'Asuncion', '932942949', 'Furgencio sanchez'),
(52, 'Jon', '965498416', 'c/ lucier 12'),
(53, 'Julián', '656138461', 'C/ Almena 15'),
(54, 'elena', '654816143', 'c/ mar 89'),
(55, 'Felisa', '654916351', 'c/ losa 9000'),
(56, 'Juliano', '643765867', 'reberte'),
(57, 'Maliaunpa', '654984646', 'c/ iglesias 14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_municipi`
--

CREATE TABLE IF NOT EXISTS `tbl_municipi` (
  `municipi_id` int(11) NOT NULL,
  `municipi_nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_municipi`
--

INSERT INTO `tbl_municipi` (`municipi_id`, `municipi_nom`) VALUES
(1, 'Barcelona'),
(2, 'Sant Feliu de Llobregat'),
(3, 'Sant Joan d''Espí'),
(4, 'El Prat de Llobregat'),
(5, 'L''Hospitalet de Llobregat'),
(6, 'Martorell'),
(7, 'Cornellà de Llobregat'),
(8, 'Castelldefels'),
(9, 'Viladecans'),
(10, 'Begues'),
(11, 'Castellbisbal'),
(12, 'Sant Sadurní d''Anoia'),
(13, 'Rubí'),
(14, 'Sant Cugat del Vallès'),
(15, 'Sitges'),
(16, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_raca`
--

CREATE TABLE IF NOT EXISTS `tbl_raca` (
  `raca_id` int(11) NOT NULL,
  `raca_nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tipus_anim_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_raca`
--

INSERT INTO `tbl_raca` (`raca_id`, `raca_nom`, `tipus_anim_id`) VALUES
(8, 'Bòxer', 1),
(9, 'Pastor alemany', 1),
(10, 'Golden retriever', 1),
(11, 'Husky', 1),
(12, 'Border collie', 1),
(13, 'Creuat', 1),
(14, 'Beagle', 1),
(15, 'Persa', 2),
(16, 'Siamés', 2),
(17, 'Comú', 2),
(18, 'Abisini', 2),
(19, 'Bobtail', 2),
(20, 'Canari', 3),
(21, 'Periquito', 3),
(22, 'Fura', 4),
(23, 'Conill', 4),
(24, 'Hàmster', 4),
(25, 'Teixó', 4),
(26, 'Ànec', 4),
(27, 'Otra raza de perro', 1),
(28, 'Otra raza de gato', 2),
(29, 'Otra raza de pájaro', 3),
(30, 'Otra raza', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipus_animal`
--

CREATE TABLE IF NOT EXISTS `tbl_tipus_animal` (
  `tipus_anim_id` int(11) NOT NULL,
  `tipus_anim_nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tipus_animal`
--

INSERT INTO `tbl_tipus_animal` (`tipus_anim_id`, `tipus_anim_nom`) VALUES
(1, 'Perro'),
(2, 'Gato'),
(3, 'Pájaro'),
(4, 'Otros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD PRIMARY KEY (`anu_id`),
  ADD KEY `FK_ANU_RACA` (`raca_id`),
  ADD KEY `FK_MUN_ANU` (`mun_id`),
  ADD KEY `FK_CONTACT_ANU` (`contact_id`);

--
-- Indices de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indices de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  ADD PRIMARY KEY (`municipi_id`);

--
-- Indices de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD PRIMARY KEY (`raca_id`),
  ADD KEY `FK_RACA_TIPUS_A` (`tipus_anim_id`);

--
-- Indices de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  ADD PRIMARY KEY (`tipus_anim_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  MODIFY `anu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT de la tabla `tbl_contacte`
--
ALTER TABLE `tbl_contacte`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT de la tabla `tbl_municipi`
--
ALTER TABLE `tbl_municipi`
  MODIFY `municipi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  MODIFY `raca_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_animal`
--
ALTER TABLE `tbl_tipus_animal`
  MODIFY `tipus_anim_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_anunci`
--
ALTER TABLE `tbl_anunci`
  ADD CONSTRAINT `RELACIO_ANU_CONTACT` FOREIGN KEY (`contact_id`) REFERENCES `tbl_contacte` (`contact_id`),
  ADD CONSTRAINT `RELACIO_ANU_MUN` FOREIGN KEY (`mun_id`) REFERENCES `tbl_municipi` (`municipi_id`),
  ADD CONSTRAINT `RELACIO_ANU_RACA` FOREIGN KEY (`raca_id`) REFERENCES `tbl_raca` (`raca_id`);

--
-- Filtros para la tabla `tbl_raca`
--
ALTER TABLE `tbl_raca`
  ADD CONSTRAINT `tbl_raca_ibfk_1` FOREIGN KEY (`tipus_anim_id`) REFERENCES `tbl_tipus_animal` (`tipus_anim_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
