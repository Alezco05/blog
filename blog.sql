-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-04-2019 a las 23:47:40
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `extracto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `thumb` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Mi primer post', 'Primer post', '2019-04-14 01:30:17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(2, 'Pizza', 'La pizza es un pan plano horneado, habitualmente de forma redonda, elaborado con harina de trigo, sal, agua y levadura, cubierto con salsa de tomate y queso.', '2019-04-14 02:23:51', 'La pizza es un pan plano horneado, habitualmente de forma redonda, elaborado con harina de trigo, sal, agua y levadura, cubierto con salsa de tomate y queso.1â€‹ Existen gran cantidad de variedades, principalmente debido al formato del pan, la forma de cocinarlo y el agregado de diversos ingredientes (salami, tomate, champiÃ±ones, cebolla, jamÃ³n, aceitunas, morrones, ananÃ¡, huevo, verduras, anchoas, palmitos, etc.) y salsas. Su origen es dudoso,1â€‹ pero ha sido tradicionalmente atribuido a la gastronomÃ­a de Italia y mÃ¡s puntualmente a la cocina napolitana, razÃ³n por la cual la UniÃ³n Europea le reconociÃ³ en 2010 una denominaciÃ³n de origen denominada Especialidad tradicional garantizada (ETG).2â€‹3â€‹4â€‹ En 2017 la UNESCO declarÃ³ al \"arte de los pizzaioli (pizzeros) napolitanos\" como Patrimonio Cultural Inmaterial de la Humanidad.', ''),
(3, 'Gintama', 'Es una serie de manga escrita e ilustrada por Hideaki Sorachi', '2019-04-14 02:29:45', 'Gintama (éŠ€é­‚ lit. Â«Alma plateadaÂ»?) es una serie de manga escrita e ilustrada por Hideaki Sorachi. Su adaptaciÃ³n a serie de anime fue dirigida por Shinji Takamatsu desde el episodio uno hasta el ciento cinco y por Yoichi Fujita desde el episodio cien en adelante. La obra tiene lugar en Edo â€”antiguo nombre que recibÃ­a la ciudad de Tokioâ€”, la cual habÃ­a sido conquistada por unos extraÃ±os seres alienÃ­genas llamados Â«AmantoÂ»; en ese mundo la historia narra las aventuras de un samurÃ¡i conocido como Gintoki Sakata, quien trabaja de forma independiente junto a sus amigos Shinpachi Shimura y Kagura. Sorachi comentÃ³ que la serie estÃ¡ basada en dos one-shots que Ã©l habÃ­a realizado en 2003 para la revista ShÅnen Jump,5â€‹ revista en la que continÃºa todavÃ­a su ediciÃ³n. Asimismo, explicÃ³ que le habÃ­a incorporado ciencia ficciÃ³n al material para que el desarrollo de los personajes fuera Â«a su gustoÂ».', ''),
(4, 'JoJo\'s Bizarre Adventure', 'JoJo\'s Bizarre Adventure (ã‚¸ãƒ§ã‚¸ãƒ§ã®å¥‡å¦™ãªå†’é™º JoJo no KimyÅ na BÅken?, lit. La extraÃ±a aventura de JoJo) es una serie de manga escrita e ilustrada por Hirohiko Araki.', '2019-04-14 02:30:36', 'JoJo\'s Bizarre Adventure (ã‚¸ãƒ§ã‚¸ãƒ§ã®å¥‡å¦™ãªå†’é™º JoJo no KimyÅ na BÅken?, lit. La extraÃ±a aventura de JoJo) es una serie de manga escrita e ilustrada por Hirohiko Araki, cuya publicaciÃ³n comenzÃ³ en la revista Weekly ShÅnen Jump en 1987 hasta 2004. En 2005, el manga fue traspasado a la revista Ultra Jump. La parte actual del manga, JoJolion, comenzÃ³ en 2011. Actualmente, JoJo\'s Bizarre Adventure es el segundo manga mÃ¡s longevo de la editorial ShÅ«eisha, con un total de 121 volÃºmenes tankÅbon hasta la fecha (solo es superado por Kochikame, con 200 volÃºmenes).\r\n\r\n', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
