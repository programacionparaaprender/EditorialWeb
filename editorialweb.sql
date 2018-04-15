-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2018 a las 18:04:17
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `editorialweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id`, `nombre`, `apellido`, `created_at`, `updated_at`) VALUES
(1, 'William', 'Stalling', '2018-04-15 20:30:19', '2018-04-15 20:30:19'),
(2, 'Malba', 'Tahan', '2018-04-15 20:30:19', '2018-04-15 20:30:19'),
(3, 'Adrián ', 'Paenza', '2018-04-15 20:30:19', '2018-04-15 20:30:19'),
(4, 'Roald ', 'Dahl', '2018-04-15 20:30:19', '2018-04-15 20:30:19'),
(5, 'Gianni ', 'Rodari', '2018-04-15 20:30:19', '2018-04-15 20:30:19'),
(6, 'Lucy ', 'Hawking ', '2018-04-15 20:30:19', '2018-04-15 20:30:19'),
(7, 'Stephen', 'Hawking', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(8, 'Antoine ', 'De Saint-Exupery', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(9, 'Pablo', 'Bernasconi', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(10, 'Luis María ', 'Pescetti', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(11, 'José', 'Saramago', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(12, 'Andrea', 'Ferrari', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(13, 'Mark', 'Twain', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(14, 'Mauro ', 'Chumpitaz', '2018-04-15 20:30:20', '2018-04-15 20:30:20'),
(15, 'Jose R.', 'Vizmanos', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(16, 'Maximo', 'Anzola', '2018-04-15 20:30:21', '2018-04-15 20:30:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedidos`
--

CREATE TABLE `estadopedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estadopedidos`
--

INSERT INTO `estadopedidos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'En espera', '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(2, 'Pagado', '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(3, 'Enviado', '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(4, 'Devuelto', '2018-04-15 20:31:07', '2018-04-15 20:31:07'),
(5, 'Aprobado', '2018-04-15 20:31:07', '2018-04-15 20:31:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'artístico', 'la especialización temática en que se suelen dividir las diversas artes.', '2018-04-15 20:30:24', '2018-04-15 20:30:24'),
(2, 'cinematográfico', 'tema general de una película que sirve para su clasificación.', '2018-04-15 20:30:24', '2018-04-15 20:30:24'),
(3, 'gramatical', 'un sistema de clasificación nominal que poseen algunas lenguas.', '2018-04-15 20:30:24', '2018-04-15 20:30:24'),
(4, 'historietístico', 'que en las historietas es un modelo de estructuración formal y temática que se ofrece como esquema previo a la creación de estas, además de servir para su clasificación, distribución y venta.', '2018-04-15 20:30:24', '2018-04-15 20:30:24'),
(5, 'literario', 'el sistema que permite la clasificación de obras literarias de acuerdo a diversos criterios.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(6, 'musical', 'una categoría que reúne composiciones musicales que comparten distintos criterios de afinidad.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(7, 'videojuegos', 'que designa un conjunto de estos que poseen una serie de elementos comunes.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(8, 'Escena de género', 'un tipo de obra artística, principalmente pictórica, en la que se representa a personas normales en escenas cotidianas, contemporáneas al autor.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(9, 'biología', 'como la categoría taxonómica inmediatamente superior a la especie e inferior a la familia.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(10, 'humano', 'como sinónimo de la especie humana.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(11, 'matemáticas', 'que en topología hace referencia a una propiedad de invariancia de los objetos considerados y que en términos muy generales, puede interpretarse como el número de agujeros de una superficie.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(12, 'lógico', 'Concepto que reúne la multiplicidad de individuos en una unidad conceptual. A su vez estos conceptos pueden agruparse en unidades conceptuales de nivel superior. Tradicionalmente el primer nivel suele denominarse especie y los niveles superiores géneros, ', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(13, 'sociología', 'como conjunto de características usadas en sociedad para distinguir entre masculinidad y feminidad, características tales como el sexo biológico, estructuras sociales basadas en el sexo (rol de género) y la propia identidad de género del sujeto.', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(14, 'informatica', 'Todo lo referente a la creación de programas para dispositivos con Sistemas Operativos, y todo lo referente a los computadores', '2018-04-15 20:30:25', '2018-04-15 20:30:25'),
(15, 'fisica', 'La física es la ciencia natural que estudia las propiedades, el comportamiento de la energía, la materia (como también cualquier cambio en ella que no altere la naturaleza de la misma), así como el tiempo, el espacio y las interacciones de estos cuatro co', '2018-04-15 20:30:25', '2018-04-15 20:30:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libroautores`
--

CREATE TABLE `libroautores` (
  `id` int(10) UNSIGNED NOT NULL,
  `idlibro` int(10) UNSIGNED NOT NULL,
  `idautor` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libroautores`
--

INSERT INTO `libroautores` (`id`, `idlibro`, `idautor`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '2018-04-15 20:30:42', '2018-04-15 20:30:42'),
(2, 1, 16, '2018-04-15 20:30:42', '2018-04-15 20:30:42'),
(3, 2, 4, '2018-04-15 20:30:42', '2018-04-15 20:30:42'),
(4, 4, 6, '2018-04-15 20:30:42', '2018-04-15 20:30:42'),
(5, 4, 7, '2018-04-15 20:30:42', '2018-04-15 20:30:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `año` date NOT NULL,
  `idgenero` int(10) UNSIGNED NOT NULL,
  `idtipoed` int(10) UNSIGNED NOT NULL,
  `cantpaginas` int(11) NOT NULL,
  `edicion` int(10) UNSIGNED NOT NULL,
  `idnivel` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(10) UNSIGNED NOT NULL,
  `ruta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `precio` double UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `año`, `idgenero`, `idtipoed`, `cantpaginas`, `edicion`, `idnivel`, `descripcion`, `cantidad`, `ruta`, `precio`, `created_at`, `updated_at`) VALUES
(1, 'Algoritmo', '2010-01-01', 11, 23, 329, 1, 12, 'Trata logaritmos de un número como propiedades, operaciones, y ejercicios', 100, 'img/text.png', 500, '2018-04-15 20:30:27', '2018-04-15 20:30:27'),
(2, 'Charlie y la Fábrica de Chocolate', '2010-01-01', 5, 23, 329, 1, 2, 'Por primera vez en una década, Willy Wonka, el solitario y excéntrico fabricante de chocolate, abre las puertas de su fábrica al público, a cinco niños para ser exacto. Para tal motivo incluyó cinco billetes dorados en sus chocolatines.  Los cinco afortun', 100, 'img/text.png', 500, '2018-04-15 20:30:27', '2018-04-15 20:30:27'),
(3, 'Cuentos para Jugar', '2010-01-01', 5, 23, 329, 1, 2, 'Esta obra recoge veinte cuentos cuyos desenlaces quedan abiertos a tres finales distintos; un original recurso que ha servido para estimular la creatividad literaria de lectores de todo el mundo.  En ellos, Gianni Rodari deja retazos de su llamamiento a l', 100, 'img/text.png', 500, '2018-04-15 20:30:27', '2018-04-15 20:30:27'),
(4, 'El Origen del Universo', '2012-01-01', 5, 23, 329, 1, 2, 'El mayor experimento científico de la Historia está en marcha? ¡y George y Annie lo verán desde primera fila! Acompañarán a Eric, el padre de Annie, que está trabajando en el Centro Europeo de Investigaciones Nucleares, a Suiza.', 100, 'img/text.png', 500, '2018-04-15 20:30:28', '2018-04-15 20:30:28'),
(5, 'Cloyd Carter', '2017-10-30', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:31', '2018-04-15 20:30:31'),
(6, 'Mrs. Hilda Runte I', '2014-03-29', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:31', '2018-04-15 20:30:31'),
(7, 'Bret Reynolds I', '1974-04-26', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:31', '2018-04-15 20:30:31'),
(8, 'Ryley Gerlach', '2008-01-13', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:31', '2018-04-15 20:30:31'),
(9, 'Mr. Tre Ryan III', '1996-11-21', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:31', '2018-04-15 20:30:31'),
(10, 'Dr. Fredrick Moen DDS', '1978-08-11', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(11, 'Hermann Nader', '1992-11-23', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(12, 'Zula Koch', '1998-11-20', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(13, 'Dr. Terrance Kihn II', '1993-08-17', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(14, 'Samara Pollich II', '1981-06-19', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(15, 'Wilhelmine Wunsch', '1982-04-30', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(16, 'Dr. Jake Stracke V', '1972-04-28', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(17, 'Dr. Elvis Littel DVM', '1971-01-31', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(18, 'Destini Keebler', '1977-01-10', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:32', '2018-04-15 20:30:32'),
(19, 'Irving Rowe', '1976-09-30', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(20, 'Dr. Denis Krajcik', '1979-04-09', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(21, 'Mr. Marlon Beatty V', '2010-01-26', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(22, 'Odessa Grady', '2017-12-12', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(23, 'Miss Francesca Kuvalis', '2009-11-27', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(24, 'Gerhard Stehr', '2013-02-01', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(25, 'Romaine Hermann Jr.', '1970-01-23', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(26, 'Kyla Hickle', '2003-05-16', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(27, 'Ms. Bernadine Hoppe DVM', '2013-05-28', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(28, 'Oran Hudson', '1983-05-15', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(29, 'Presley Hegmann', '2004-10-24', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:33', '2018-04-15 20:30:33'),
(30, 'Mr. Douglas Koepp III', '1970-05-26', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(31, 'Mariam Altenwerth IV', '1991-09-28', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(32, 'Prof. Lyric Jaskolski MD', '1997-11-19', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(33, 'Mr. Beau Crooks', '1981-05-12', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(34, 'Prof. Roman Nitzsche', '1978-10-08', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(35, 'Ed Sanford', '1995-05-06', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(36, 'Daisha Pfannerstill', '2017-06-03', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(37, 'Dandre Sanford', '2002-07-16', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(38, 'Dr. Anderson Bruen III', '2017-07-04', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:34', '2018-04-15 20:30:34'),
(39, 'Kristy Beier', '1983-11-17', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(40, 'Prof. Dax Walsh', '2002-04-03', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(41, 'Tristian Hickle', '1971-03-13', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(42, 'Julie Grant', '1996-11-27', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(43, 'Prof. Nelle Wolff', '1976-11-07', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(44, 'Karley Runolfsdottir', '2010-08-29', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(45, 'Lee Lebsack', '1989-05-02', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(46, 'Hubert Bartell MD', '1994-08-15', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:35', '2018-04-15 20:30:35'),
(47, 'Ms. Georgette Bogisich', '2000-12-26', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(48, 'Felipa Moen', '2013-05-22', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(49, 'Arch Thiel', '2018-03-23', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(50, 'Prof. Jonathon Koepp', '1975-06-11', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(51, 'Elta Wilkinson MD', '1987-05-19', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(52, 'Will Casper DDS', '2009-09-23', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(53, 'Prof. Alfonzo Kiehn', '1984-06-13', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(54, 'Obie Schamberger', '1996-12-07', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(55, 'Prof. Lydia Hermann DVM', '1979-02-11', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(56, 'Name Doyle', '1997-11-01', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:36', '2018-04-15 20:30:36'),
(57, 'Ebba Krajcik', '1987-09-22', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(58, 'Rossie Bradtke', '1978-11-04', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(59, 'Ms. Jessika Robel II', '2002-07-10', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(60, 'Dayana Rolfson', '2015-08-31', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(61, 'Anissa Corkery', '2000-10-10', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(62, 'Zola Pfeffer', '2007-04-26', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(63, 'Miss Elody Nikolaus', '1997-09-24', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(64, 'Mr. Alfonso Koss Sr.', '1998-04-25', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(65, 'Lacey Cummerata', '1979-04-19', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:37', '2018-04-15 20:30:37'),
(66, 'Alayna Denesik', '2015-03-17', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:38', '2018-04-15 20:30:38'),
(67, 'Harvey Stoltenberg', '1986-08-25', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:38', '2018-04-15 20:30:38'),
(68, 'Agnes Hoppe', '2016-03-31', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:38', '2018-04-15 20:30:38'),
(69, 'Prof. Sydnie Erdman', '2009-08-27', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:38', '2018-04-15 20:30:38'),
(70, 'Ari Murray Jr.', '1989-04-28', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:38', '2018-04-15 20:30:38'),
(71, 'Malachi Hermiston I', '1978-07-06', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:38', '2018-04-15 20:30:38'),
(72, 'Emely Schmeler', '1985-07-14', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(73, 'Lance Huels II', '2001-01-24', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(74, 'Mr. Lenny Hermann Jr.', '1985-05-30', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(75, 'Prof. Ransom Brown Sr.', '1980-09-08', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(76, 'Marcelina Shields', '1988-09-21', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(77, 'Lambert Schowalter II', '2011-01-19', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(78, 'Prof. Ransom Douglas I', '1989-02-08', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(79, 'Anastasia Stehr', '1989-07-12', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(80, 'Alejandra Doyle IV', '1985-07-06', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(81, 'Daron Koch', '2015-10-23', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(82, 'Caitlyn Keeling V', '1975-01-25', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:39', '2018-04-15 20:30:39'),
(83, 'Dr. Misael Konopelski DVM', '1970-08-13', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(84, 'Buford Daniel', '1972-09-28', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(85, 'Miss Shanon Davis Sr.', '2011-07-07', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(86, 'Zachery Kuphal', '1997-01-08', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(87, 'Sim Lehner', '1998-01-06', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(88, 'Hayley Fay', '1990-05-30', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(89, 'Dorothea Kirlin', '1972-09-20', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(90, 'Edison Frami IV', '1998-05-26', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(91, 'Tito Wolff', '2012-05-20', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(92, 'Margarete Murray', '2007-03-16', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:40', '2018-04-15 20:30:40'),
(93, 'Ernestine Mayert Sr.', '1982-06-24', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(94, 'Eduardo Botsford', '1982-04-11', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(95, 'Reyna Nicolas', '1991-11-06', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(96, 'Dr. Jovan Mayert III', '1994-08-19', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(97, 'Moshe Braun', '1998-06-25', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(98, 'Erich Bosco', '1990-01-22', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(99, 'Candice Mills', '2015-09-03', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(100, 'Hayley Quitzon I', '1981-04-09', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(101, 'Merl Pfannerstill', '1995-03-17', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(102, 'Kiara Kutch', '2010-08-18', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:41', '2018-04-15 20:30:41'),
(103, 'Maryse Hettinger DDS', '1988-02-12', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:42', '2018-04-15 20:30:42'),
(104, 'Mrs. Leatha Blick', '1972-02-11', 1, 1, 300, 1, 1, 'fsdfsdgdsgdsgdg', 100, 'img/text.png', 500, '2018-04-15 20:30:42', '2018-04-15 20:30:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE `lineas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idpedido` int(10) UNSIGNED NOT NULL,
  `idlibro` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `idpedido`, `idlibro`, `cantidad`, `costo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 500, '2018-04-15 20:31:07', '2018-04-15 20:31:07'),
(2, 1, 2, 1, 500, '2018-04-15 20:31:07', '2018-04-15 20:31:07'),
(3, 2, 1, 5, 1000, '2018-04-15 20:31:07', '2018-04-15 20:31:07'),
(4, 2, 2, 2, 1000, '2018-04-15 20:31:07', '2018-04-15 20:31:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2014_12_24_152007_create_estado_pedidos_table', 1),
('2015_12_14_145730_CrearTablaAutores', 1),
('2015_12_14_145943_CrearTablaTipoEdiciones', 1),
('2015_12_14_150003_CrearTablaGeneros', 1),
('2015_12_14_150022_CrearTablaNiveles', 1),
('2015_12_14_150037_CrearTablaLibros', 1),
('2015_12_14_150053_CrearTablaLibroAutores', 1),
('2015_12_14_150122_CrearTablaRepresentantes', 1),
('2015_12_14_150139_CrearTablaPedidos', 1),
('2015_12_14_150156_CrearTablaLineas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'primaria', 'Se trata de los libros de escuela primaria de nivel de 1,2,3,4,5,6 grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(2, 'secundaria', 'Se trata de los libros de liceos con el para estudiante de 1,2,3,4 y 5 año', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(3, 'primaria1', 'Para primer grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(4, 'primaria2', 'Para segundo grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(5, 'primaria3', 'Para tercer grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(6, 'primaria4', 'Para cuarto grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(7, 'primaria5', 'Para quinto grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(8, 'primaria6', 'Para sexto grado', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(9, 'secundaria1', 'Para primer año', '2018-04-15 20:30:26', '2018-04-15 20:30:26'),
(10, 'secundaria2', 'Para segundo año', '2018-04-15 20:30:27', '2018-04-15 20:30:27'),
(11, 'secundaria3', 'Para tercer año', '2018-04-15 20:30:27', '2018-04-15 20:30:27'),
(12, 'secundaria4', 'Para cuarto año', '2018-04-15 20:30:27', '2018-04-15 20:30:27'),
(13, 'secundaria5', 'Para quinto año', '2018-04-15 20:30:27', '2018-04-15 20:30:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) UNSIGNED NOT NULL,
  `idrepresentante` int(10) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `idestado` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `idrepresentante`, `total`, `idestado`, `created_at`, `updated_at`) VALUES
(1, 1, 1000, 1, '2018-04-15 20:31:07', '2018-04-15 20:31:07'),
(2, 2, 2000, 1, '2018-04-15 20:31:07', '2018-04-15 20:31:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representantes`
--

CREATE TABLE `representantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cedula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `pregunta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `respuesta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idnivel` int(10) UNSIGNED NOT NULL,
  `nombreEscuela` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `representantes`
--

INSERT INTO `representantes` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `rif`, `email`, `password`, `pregunta`, `respuesta`, `idnivel`, `nombreEscuela`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '19738854', 'Jhonny', 'Gil', 'Pto la Cruz - Anzoategui', '04166835380', '197388541', 'gilsjhonny@gmail.com', '$2y$10$Si52BQGKHLm4k59XUt76Z.p/TtNDbHkkG6SU34pWxC7Bf9XB3Ill6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 0, NULL, NULL, NULL),
(2, '19257821', 'Manuel', 'Dun', 'Lecheria - Anzoategui', '04147658837', '192578211', 'manueldun@gmail.com', '$2y$10$hVXcWM4kbY.3hZ0PTdAeru.tVB9fnLt6VtlcRnG6qvZqa22XYcg/S', 'como me llamo', 'manuel', 2, 'Diego Bautista Urbaneja', 0, NULL, NULL, NULL),
(3, '18099810', 'Christian', 'Yanez', 'Carúpano - Sucre', '04248324709', '180998101', 'xygesc@gmail.com', '$2y$10$uQvH8/9dWz0a3Z6KOOUxIuOHM6eAROmDAyya2oKAmRSOvdxfvcBNG', 'como me llamo', 'christian', 1, 'Tomas Alfaro Calatraba', 0, NULL, NULL, NULL),
(4, '19840230', 'Luis', 'Correa', 'Barcelona - Anzoategui', '04167827769', '198402301', 'alberto13711@gmail.com', '$2y$10$QKfbewVdpwua/KjR8VG38.gesUGHVtGx.7CV28aMBvRShHEVpJjvq', 'como me llamo', 'luis', 2, 'Maria Auxiliadora', 1, NULL, NULL, NULL),
(5, '10555400', 'Zulirais', 'Garcia', 'fdfdsf', '02815872676', '105554001', 'zuliraisg@gmail.com', '$2y$10$.OpZxxisRKJpdvOrUe8Eteva9fb6rpFrSGMhOI2PudcIWBNFKyepK', 'como me llamo', 'Zuly', 1, 'Ideal', 0, NULL, NULL, NULL),
(6, '9857702538', 'Caroline', 'Pouros', '36568 Jack Path\nSchadenfort, GA 41084', '04166835380', '9791964514801', 'jschmeler@mann.com', '$2y$10$ZWm2R5TTWtwttq6jf/RHEu/6MM5.3.YWe7hENC540Njk02a6QSJHG', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:54', '2018-04-15 20:30:54'),
(7, '1409834174', 'Sadye', 'Brakus', '613 Bartoletti Mountain\nLake Jasen, ID 79361', '04166835380', '9792796627165', 'heller.fredrick@thompson.org', '$2y$10$X.T3QwNq2ISTBLf7AWdObe.5JsRzmEeEcpIpisHtSkICQgZajOnUG', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:54', '2018-04-15 20:30:54'),
(8, '2232863727', 'Ellie', 'Skiles', '53395 Hilbert Springs Apt. 668\nWest Margaret, RI 10091-8574', '04166835380', '9798982390455', 'gottlieb.jose@padberg.com', '$2y$10$pTLocbYW/ZEVmqpipiyFzeyXH5NAZgwfWIBHfaE0r0NR0SZf4jF1S', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:54', '2018-04-15 20:30:54'),
(9, '6634945217', 'Lincoln', 'Pfeffer', '3001 Clair Course Suite 579\nLake Creolafurt, IA 40455', '04166835380', '9796850002592', 'sbarton@kunde.com', '$2y$10$eCMqVaRhLLQKzRW4/bjdZeiKAmQ0.637HmpdKdOAQe3nhpiLG1U8u', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:54', '2018-04-15 20:30:54'),
(10, '0635593785', 'Sonya', 'Walker', '75478 Rita Stream\nEast Bennyport, IL 23283-1455', '04166835380', '9797586045518', 'magnolia49@lehner.info', '$2y$10$F6gv3ZA0e6xUEJWW4zr8bOfM6obF6mcbkBeoo95et74yfaXhFcjzG', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:54', '2018-04-15 20:30:54'),
(11, '871687935X', 'Anastacio', 'Zieme', '71007 Baby Prairie\nGottliebton, IL 21555', '04166835380', '9792647455749', 'justyn.kiehn@gmail.com', '$2y$10$qM8m8I3g.95PacbAtHmzs.ItLCZ9uoziPGXCd6mk/hTU7/jHqYzlS', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(12, '1352032066', 'Norval', 'Kilback', '17668 Abshire Ports\nJohnsonshire, NM 32759-6064', '04166835380', '9784308372885', 'merritt56@gmail.com', '$2y$10$lZ3H2xJLmVnG9e1fZ338L.nde7lq77v.G5icnmt8owM79GzFfBb52', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(13, '6549444357', 'Lukas', 'Lockman', '127 Ortiz Grove Suite 824\nKlingtown, MT 58151', '04166835380', '9789012583978', 'delilah07@damore.com', '$2y$10$AZpqLyAT14L5wvkhGW76a.v.UL6kiiiuE8XcKmSyIZ9oxl1NXsS9y', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(14, '2922750450', 'Nils', 'Gorczany', '17610 Gilda Corner\nPort Rahulland, TX 87756-0342', '04166835380', '9789210281607', 'amara.wehner@bode.biz', '$2y$10$0qLYS2gdIk0GE72YCP69H.s/f5Cg7UecEDYv7xNZPVTKkkc1Kh0Gy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(15, '5867181995', 'Erik', 'Mraz', '6243 Blanda Circles Suite 340\nNew Freeda, WI 81540-1540', '04166835380', '9795126260391', 'kaela.okuneva@kassulke.biz', '$2y$10$OyMxCfdV8MjOyiAth.N9S.k8mHD6fBB.ReZQPm2pROfkR8P7iQlxO', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(16, '249530933X', 'Myrl', 'West', '2338 Felix Plaza Suite 124\nBashirianport, WI 14727', '04166835380', '9799761705071', 'stark.baylee@grady.com', '$2y$10$lm31t64Ycz7XcENNcKkU5.Nd.835gt4C37A3YHpIiAQUWS4OZpYSy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(17, '1401463738', 'Jeramy', 'Upton', '62751 Clemens Mews Suite 370\nEast Edison, AL 48108-2768', '04166835380', '9795555288607', 'ewest@hotmail.com', '$2y$10$IXJLstfigPLCBApIBF.XRO52FwxmcpJwCf3hCybz2ghL2v7CJDKcK', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(18, '8926958264', 'Tod', 'Thiel', '96446 Kayli Bypass\nSouth Alana, LA 91673', '04166835380', '9783382772321', 'vicente22@reichert.com', '$2y$10$zFX.Ei.k1QIQaaBpODsdweslrV3vNd.udARdrYxLlHsftRpsoizQy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(19, '898999912X', 'Claude', 'Cummerata', '879 Bert Skyway\nSouth Sabrinashire, MD 60596', '04166835380', '9783358694657', 'violet16@rowe.com', '$2y$10$yosSPpLjHYeEdyYfV7oodu/TQYqYkH3ZccTWSFP.BJREuY8zSkb8K', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(20, '7965061384', 'Tyson', 'Mraz', '892 Ruecker Tunnel\nNorth Shadberg, NE 97771-2754', '04166835380', '9792937698443', 'emelia.altenwerth@oreilly.com', '$2y$10$jRtqMwqWpe1OjSn2cobM2.89uZ9y2Wed1rvPUSitXkyDQPCWWbHBS', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(21, '2095314123', 'Jerry', 'Mann', '8446 Moore Glen\nWest Jerrelltown, HI 41576-4541', '04166835380', '9783103694581', 'nora.orn@kihn.biz', '$2y$10$dqdQn3E/aevTXfYQlJLg1ONEy684eFFw7Sh26XCJ/uFbk4xONpoDC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:55', '2018-04-15 20:30:55'),
(22, '2449976019', 'Clementine', 'Dare', '2286 Nannie Course\nSouth Sydnieville, MS 65563-0701', '04166835380', '9792925175260', 'yhomenick@maggio.org', '$2y$10$sivPeOWN4ejhmMtgGMiM/OFG3TDJheiVI118iYzXETnH5JZBfSWU2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(23, '6464867229', 'Angus', 'Lesch', '93153 Adolf Mountains\nSylvanbury, DC 44009', '04166835380', '9782689514030', 'krystal92@walker.info', '$2y$10$LGhZqX8RXUfAQojcY/KkN.eEB.iaZPBFd5qaVNwRG5u1JuvefUbZe', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(24, '3328439900', 'Angel', 'Rath', '53015 Bins Curve\nMaggioland, MI 95732', '04166835380', '9785629556848', 'xmurazik@yahoo.com', '$2y$10$0hZj8/Q7w8TRz3VJguGbm.z95yIJqY9p6gGWtNX.RA0q/YWb0yNWy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(25, '4061697935', 'Dayana', 'Beier', '3034 Grant Inlet\nBriaport, MT 24218-2271', '04166835380', '9786078248544', 'elvera.mccullough@price.biz', '$2y$10$8VAYadjxW1jPfjHZhYhBNuePYRYTW5RerUzN/dz13B5rrveycyHwC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(26, '3780922290', 'Mona', 'Beatty', '23082 Patience Manor Suite 492\nFunkland, MN 05225', '04166835380', '9797027385289', 'adrianna.wintheiser@price.biz', '$2y$10$O5CmC2sW4/TQdCOntqB3UOpOLvaxxJXJKTo8sNjH8h1h3c12eKb3C', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(27, '7454535062', 'Ralph', 'Rohan', '1983 Gerlach Lodge Apt. 648\nBlickchester, AR 90533-6916', '04166835380', '9792950797505', 'ustracke@funk.com', '$2y$10$ZPx.hNL2VN0IMGKLcjpCiOnOt1l.mgK0NFoqwh0fojrz.aOM83.y2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(28, '5721346655', 'Ida', 'Goodwin', '9368 Hyman Terrace\nNorth Otilia, TX 19179-1174', '04166835380', '9795296315037', 'art.torp@yahoo.com', '$2y$10$RAhyonFyr865qI2PTxFVFerL7Yp6jp6KmActT2BvKKyHkJhwE3HOu', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(29, '3148880374', 'Emil', 'Upton', '1718 Casper River\nSporerview, IA 40551', '04166835380', '9796621516143', 'nvolkman@skiles.com', '$2y$10$rrn/wphQTZ0NuGjxvEpdl.Qz7/WzjqycEloncqfoJWbbHGwaZFkKW', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(30, '8661334551', 'Audreanne', 'Kris', '172 Murazik Curve Apt. 282\nNorth Kelleyville, ID 27509-4244', '04166835380', '9799408239341', 'blarson@cummerata.com', '$2y$10$bOi7Mi0Lj.ziDESWy39RG.4qx.aaazsrGY.fpGmJPSj5ADxFSvNX6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:56', '2018-04-15 20:30:56'),
(31, '4641394474', 'Alexzander', 'Brakus', '4837 Zboncak Village Suite 669\nNew Shanna, AK 68634', '04166835380', '9798498516134', 'mills.alessandro@gmail.com', '$2y$10$f.ObpXRRITDVte.pJAPBsO04KGKs1XRE8kVmoMRzhL8HNHcMtWx4O', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(32, '164015745X', 'Leland', 'Brekke', '5288 Block Fords\nGrimesland, MS 09255', '04166835380', '9792850468840', 'rosario95@yahoo.com', '$2y$10$Pu8va61fZu1DoVm7YJJz5eEGgP70tT//DIljrdBV.BziTSyLE6iim', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(33, '8607075217', 'Katherine', 'Graham', '3760 Vicente Mountains\nWalkerland, MS 65087-7525', '04166835380', '9796611119514', 'goodwin.alfred@kertzmann.com', '$2y$10$jKYNJkJ5ylwS37Sdw9/K1OFgdhPlNIn91VCl2/eL.DzX/z13NjrwC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(34, '600945669X', 'Bill', 'Hahn', '708 Heathcote Roads Suite 484\nNew Anikaland, RI 92526-6389', '04166835380', '9782266577489', 'pswaniawski@yahoo.com', '$2y$10$JhV9tfs2dEGgcgBuoZOWCueldZnGrMLtxleRnWlQamAwD/5ClbZ6i', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(35, '7758707912', 'Angus', 'Hahn', '139 Beatty Vista Suite 046\nWest Shaneside, NE 69330-5060', '04166835380', '9793326180150', 'arielle.heller@hotmail.com', '$2y$10$CxtyqEGfbUJisTOR2Jn6AOS7IQ/xL2BdYD3e7rzNeomoiGTIPO0w2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(36, '5516160944', 'Zackary', 'Wisoky', '71597 Walsh Drive Apt. 994\nCarterfort, VA 03677', '04166835380', '9788712368991', 'marian62@yahoo.com', '$2y$10$ijqlQLOf0nUF9NI7j9qE0uH2y72u69CZ1cKbkuCB/qDC3pSf8/.b2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(37, '0269938028', 'Delphia', 'Denesik', '865 Sophie Forges Suite 291\nRathburgh, NH 96526-4093', '04166835380', '9795947357294', 'alverta13@yahoo.com', '$2y$10$CLqzpzzwtXEMg8rQLGKRluBZ2BST/BwZFE9zkLjafTpBBcEEfAjUW', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(38, '865980869X', 'Schuyler', 'Altenwerth', '2021 Halvorson Summit\nStrosinmouth, IL 93588', '04166835380', '9797606756615', 'oreilly.asia@turner.com', '$2y$10$x/ovyKGp3n.HJxDWtQtrb.FXHO2TDjV0aKexXXv/I2gaLytkG4hFC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(39, '9059462688', 'Asa', 'West', '806 Katrine Pike Apt. 227\nAlexaton, NM 68554', '04166835380', '9794615766819', 'telly11@hotmail.com', '$2y$10$kDTA3/rfkiJUPB6.Kt7S5.qDXGQx8c1uUsSh7JfHqjUlaj9TpWWQy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(40, '8501616494', 'Nayeli', 'Gottlieb', '995 Einar Extensions Apt. 125\nNorth Mabel, TX 71748', '04166835380', '9784325272090', 'elnora.kautzer@emmerich.com', '$2y$10$kjMu6POepCm1sBEYp2wWoO0lynKahIaNAHZBk/pz6277Qlj99fMJ.', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(41, '6013584788', 'Casimir', 'Tillman', '884 Hoeger Skyway\nNew Ryanberg, OK 61402-1680', '04166835380', '9783442269471', 'cnitzsche@mueller.com', '$2y$10$9JqtpQijhe2S9P0De5IID.bbymF44erNRIWkqQR85Jwky8v1mVdhu', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:57', '2018-04-15 20:30:57'),
(42, '738238943X', 'Pearlie', 'Lindgren', '4608 Flatley Passage Apt. 681\nAhmadside, HI 70349', '04166835380', '9784653971863', 'helen13@armstrong.com', '$2y$10$WGTliE692Pped93jSXykg.pvazA0p0wPcoGb1MEIuUGPlfWIqb0Vu', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(43, '4743399718', 'Santa', 'Armstrong', '82685 Koepp River Apt. 198\nKingmouth, NJ 99192', '04166835380', '9786414771774', 'murazik.shayna@farrell.com', '$2y$10$ApVk5J.atZSAiYGs8BnyAO0ClVUD1P1/1eBjR/NU6kQHHje/E.J1O', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(44, '6210619266', 'Colten', 'McLaughlin', '75979 Nelson Port Suite 219\nMacejkovicshire, TX 14593', '04166835380', '9793083505616', 'tremayne.frami@hotmail.com', '$2y$10$wmtPP05gV8fZHy3/Qm/YSudyFUx1UVgJIVYvwnssU6JSuP/NYeA8i', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(45, '1488915415', 'Dulce', 'Kohler', '75847 Fritsch Rapids Apt. 171\nKylieburgh, NC 20597-7933', '04166835380', '9790224577143', 'armstrong.allene@mccullough.biz', '$2y$10$JZ/9NhUQHDrFhOkh85vF4O6dmdU74VsgoP0lnUrxBkkMWcAmO9CTO', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(46, '6292601676', 'Juwan', 'Weber', '5975 Brown Avenue\nPort Uriel, WY 37429', '04166835380', '9780236806621', 'kfisher@hotmail.com', '$2y$10$mQKM0ozMc1vRhlJz1OHgv.MECCIhlyEP8ynlb8atIhqyg8wM9Z8vW', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(47, '4250831779', 'Corene', 'Heidenreich', '96198 Angelica Bypass\nJoesphville, ID 52025', '04166835380', '9780029883334', 'wemard@yahoo.com', '$2y$10$TwCNYZSN8Scx7bPpg/KJQOsww0JguoN93D9b4U3Vj.uzUXfG/bTea', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(48, '9274655819', 'Madge', 'Stamm', '96844 Pagac Points Apt. 966\nWest Samantha, WY 16171', '04166835380', '9794593332013', 'afton24@friesen.net', '$2y$10$LusV0XzDfnl8CMURI5oPi.I5f57DL/1Ws0M6txiYLU4eE2Jh3/7YC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(49, '3049570059', 'Eduardo', 'Tillman', '7217 Dooley Isle Suite 853\nKonopelskibury, LA 22519-7024', '04166835380', '9792232962935', 'bernadine.bosco@hotmail.com', '$2y$10$2ExFFoUXKtcvQJYcq/4VfuOn7dEnsDeEOg8ArGE4IplubmiBM/hku', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:58', '2018-04-15 20:30:58'),
(50, '2658096313', 'Kristoffer', 'Lebsack', '8623 Schuster Highway Suite 679\nNorth Cristopherhaven, NM 02522-9791', '04166835380', '9794429690782', 'reilly.hardy@hickle.com', '$2y$10$votVC/G.8RYE8i6MNWK5heAbgS7OcMJZLjXQX8gpDq3G82cN.BH/S', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(51, '0816191913', 'Kallie', 'Wuckert', '59029 Santina Bridge\nPort Alexandro, KS 57481-9861', '04166835380', '9789857282647', 'gokeefe@borer.info', '$2y$10$teyDVxA1lNYZrRXToH/I/O7Yb0c9CuH/oDDKkphm0yJWbougRoBoO', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(52, '8376053647', 'Doug', 'Quitzon', '791 Kub Cape Apt. 526\nChristelleberg, OH 52502-7300', '04166835380', '9784151084119', 'purdy.edwin@dietrich.com', '$2y$10$ZtU2gWe3XcjAKlHkJVdecOzXl3tQ.e.qBdqFp3akb0vhj67kX4LHy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(53, '8035768867', 'Estevan', 'Oberbrunner', '22968 Lauryn Circle Suite 026\nWest April, MA 61034', '04166835380', '9787395400097', 'lemke.leon@schinner.com', '$2y$10$oAG18xlmAKP/gvjIT8uypuU5DMhsJWS3ddAsJg3Yu9NoKkY19teFq', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(54, '4668997110', 'Gracie', 'Oberbrunner', '698 Lindgren Courts\nSouth Lesterberg, AZ 85473', '04166835380', '9792742511388', 'krista.kihn@yahoo.com', '$2y$10$pyC8BdYQOZ7JPwD0M.nDIe4rx9dmZOc87XtOmhpCeNIOq0uUx5XQq', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(55, '416599054X', 'Arnulfo', 'Miller', '61996 Mariah Cliff\nCortneytown, IA 35816-5163', '04166835380', '9795103242983', 'alyce19@nienow.com', '$2y$10$csEh3iHwNWBpWm9GvYGAT.kMp2zeEhzHMXt5K2s7bz4FNMQqjMgTm', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(56, '2685730621', 'Leslie', 'Sporer', '81157 Kuhlman Glens\nNew Eda, RI 01020', '04166835380', '9782690618543', 'gwolff@hotmail.com', '$2y$10$LWGPZPpXTwtTN6Ps3BZIxe1st/ckqZMq7CkxgsJAzQjytLUcpGMWC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(57, '7057850530', 'Lucile', 'Zulauf', '72195 Luettgen Corners\nSchimmelstad, VT 01825-4756', '04166835380', '9789858334536', 'soledad.simonis@gmail.com', '$2y$10$EOOVE7Hu6BNZIQIXb76MlepLm8ZGlYmZBCk.M33D7/0KEo1h8zIHe', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:30:59', '2018-04-15 20:30:59'),
(58, '4447339315', 'Loma', 'Mante', '423 Keebler Route Apt. 185\nWest Jasmin, TN 10320', '04166835380', '9783981592207', 'ayla.hilpert@gmail.com', '$2y$10$DL3cgs30c3iYEUIP3yPn6.ktGufuGGq.sZnA7vD83m5vdioWZcv2.', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(59, '3929510537', 'Stanton', 'Collier', '66479 VonRueden Rapids Suite 698\nWeimannport, LA 46576-5026', '04166835380', '9795890666153', 'emmie60@gmail.com', '$2y$10$h1/WECDJSuXCc/ymcZMVgeaC1A4r2pHZBtIkHnmcp5b24BkOOTUm6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(60, '5166433718', 'Belle', 'Jenkins', '86815 Nils Rest Suite 515\nJastview, IL 55443', '04166835380', '9784931354418', 'murazik.antonette@gmail.com', '$2y$10$4FRCZyiZe5v2u44YWemWhefVZ94.Iy7DQK8fjH0ujcPsZjATY9HPi', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(61, '2172102881', 'Burdette', 'White', '40920 Gleason Harbor\nMariofurt, DE 31328-6851', '04166835380', '9785437663844', 'juwan07@gmail.com', '$2y$10$IqzjEEQkmbT/dEAcHL6H3un10pF93PWDE7MU7QgGDmOWwDwTsM24u', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(62, '8969253394', 'Ali', 'McLaughlin', '315 Dickens Cove\nBerryborough, DE 70121-6227', '04166835380', '9791527836685', 'laurie.hirthe@hotmail.com', '$2y$10$nEnqyVRyW9iJXT/JRVUQSeoxw4XhvHXRKOBkc2zcUWDZ96YTdc.wW', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(63, '6038937722', 'Faye', 'Adams', '1189 Williamson Ways\nNew Laverna, NJ 83376', '04166835380', '9787400159101', 'grant.jammie@gmail.com', '$2y$10$tEomkh000Kyqj/DYxkIT0ejM7euX8bZSmbqW08y7KQQkAioIURZTG', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(64, '3852506417', 'Paige', 'Rempel', '996 Hirthe Brooks\nLake Letha, VA 32470', '04166835380', '9790986536754', 'hagenes.arely@roberts.com', '$2y$10$5kX2U4Ok8zKoP/7IxR/Fnu8bLrhR9L3N3umfWItAHW/BltsuABU0e', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:00', '2018-04-15 20:31:00'),
(65, '7862218329', 'Cindy', 'Bruen', '4266 Pfannerstill Grove\nNolaview, LA 77502-7358', '04166835380', '9788978333344', 'arjun.mann@hotmail.com', '$2y$10$QaFWNw5jr5tvu89zuWFVbO07UgGh8hEj0wV0E1m7ulw6HTR78589.', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:01', '2018-04-15 20:31:01'),
(66, '0367418770', 'Gennaro', 'Satterfield', '4065 Sedrick Court Apt. 540\nPort Colemouth, OH 15139', '04166835380', '9794373504272', 'zlowe@lemke.com', '$2y$10$03jeLU3ioml.gb8S/jLELOloQFruMMN.3A6V6UFX1Nha1FoP5bX96', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:01', '2018-04-15 20:31:01'),
(67, '3795000831', 'Herbert', 'Kuphal', '602 Veronica Expressway\nEast Sigridview, KS 29421', '04166835380', '9797000993463', 'bernhard.demario@hotmail.com', '$2y$10$0QDaNq1InvnyOgpeL.0A4.t82thfbuU989WtS5c/KlXXUkgD0/ti6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:01', '2018-04-15 20:31:01'),
(68, '220749554X', 'Hobart', 'Huel', '5389 Jaskolski Course\nNorth Ayana, MO 59211-0654', '04166835380', '9798946289368', 'bayer.haven@gmail.com', '$2y$10$GuhkoW9W0wibma84LzCcfedaogrm9URSxfbmvssmWcb/C7MHzwDwa', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:01', '2018-04-15 20:31:01'),
(69, '9711423715', 'Angelica', 'Reynolds', '7734 Kobe Well Suite 442\nFrancescomouth, TN 27979-0442', '04166835380', '9792418124591', 'samara.bauch@baumbach.biz', '$2y$10$AopF/Tnb2C9mnQ2teL9Wie1.BzRUIgBGG7mABhKbEryX9nBD55bd2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:01', '2018-04-15 20:31:01'),
(70, '5352726835', 'Adela', 'O''Connell', '2860 Erwin Plaza Suite 526\nCletamouth, TX 54642', '04166835380', '9795866414221', 'lrosenbaum@schroeder.com', '$2y$10$tZXY5V9vfxOvROXuURMXNOkrMOfdhyhrgnWVM4Ck7xy5S7n0H.MR6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:01', '2018-04-15 20:31:01'),
(71, '3264535602', 'Janessa', 'Schinner', '81368 Brittany Road\nBilliestad, OK 14926-0953', '04166835380', '9780875037097', 'rvonrueden@mohr.info', '$2y$10$cEsbQQjby5qSoeaG6zkgCe9BEO3J7KkOPr53/naaRrv2UgefpBlWi', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(72, '2537621476', 'Earlene', 'Cole', '567 Gennaro Cape Suite 345\nNew Myrtleshire, NH 46780-2986', '04166835380', '9786687304877', 'donna94@yahoo.com', '$2y$10$7WXAUbopscl3LKdJpNPs4uIVIu7NTOKyNcsbHg1/25YNUtKt.dHtu', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(73, '4936244589', 'Arvilla', 'Parisian', '7920 Kyla Stravenue Suite 837\nNorth Paula, IL 41282-6789', '04166835380', '9789969479294', 'qgibson@yahoo.com', '$2y$10$ep8NRxgVu0WWUmbPFD427Odo1DHIux7qvqD8uMwif4eKUBD..T382', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(74, '7848074986', 'Oma', 'Collins', '46786 Cristina Track\nWilberfort, DC 48102', '04166835380', '9792416279682', 'roel55@yahoo.com', '$2y$10$U.v2KnPkcuZBSiYLFpHH5.Q9yJTlgBYitbQ8hxK.PQReSYv0T5ZvK', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(75, '9360420751', 'Jaron', 'Schumm', '8342 Ledner Terrace\nLake Samaraside, NJ 01222-7526', '04166835380', '9789811802256', 'london70@mueller.net', '$2y$10$Uj3SdL5U1Iz3ccC9ySUqRur/NaEa8y/NsOrxoPQKO5s0Vb2WOAGje', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(76, '1808120396', 'Eve', 'Grady', '2116 Rutherford Mill Apt. 897\nCarolynville, GA 91988', '04166835380', '9784218109694', 'dicki.xzavier@yahoo.com', '$2y$10$ysJJ8YJaMCScqPyN6ewxTu67L1Jx2CY4X1tMzHhjsQ7JVI1Cm0QLO', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(77, '9701934938', 'Imogene', 'Johnson', '674 Sibyl Grove\nJohnsstad, CT 28752', '04166835380', '9798959101640', 'qreinger@kuhlman.com', '$2y$10$fCDy/opv8JjmGHYP4RPNw.eVvCpsGnOHbJKVRq9n9vgL/WiYg9Dqy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:02', '2018-04-15 20:31:02'),
(78, '7071318093', 'Domenic', 'Ritchie', '9186 Beatty Rapid\nKiehnchester, TX 13412-0638', '04166835380', '9789771090601', 'katelyn21@hotmail.com', '$2y$10$kJN3mKcDiJYKKFGxSGNMvuDCycqmm9Hj4fXRppt98FIuAAGbOv1H6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:03', '2018-04-15 20:31:03'),
(79, '7317988502', 'Herta', 'Welch', '962 Rath Rapid Suite 160\nOdellberg, NC 22484-3895', '04166835380', '9784616007769', 'qstiedemann@yahoo.com', '$2y$10$bFy9fyA9HPnEzajhjsTvhuxX.fHw5jg13F1o1suqjx82/o04aL6..', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:03', '2018-04-15 20:31:03'),
(80, '8669033178', 'Etha', 'Hackett', '672 Rex Way\nEast Susan, SD 09060-3336', '04166835380', '9787094196550', 'charity.crooks@larson.com', '$2y$10$CKk2oXQNgz.ubhy0ASmiM.859yxy9xun3j0MD35pQlclY0q5xMzFy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:03', '2018-04-15 20:31:03'),
(81, '8673305993', 'Waldo', 'Eichmann', '4179 Lubowitz Crescent Suite 321\nSouth Philip, MO 46065', '04166835380', '9783951741574', 'murray.otha@gmail.com', '$2y$10$4CqjWM6S8U7OVC1iD295BuAJEs3.5JdzSfblfZop0IdMDI35HOthG', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:03', '2018-04-15 20:31:03'),
(82, '2371228052', 'Myles', 'Paucek', '50727 Florida Alley\nPort Parisport, TX 25487-3616', '04166835380', '9783072201827', 'crooks.emilia@yahoo.com', '$2y$10$kN9V2055LgMr3EiVkALoIOQcfNf/wnxM/f2MwmN8AxzlDTjgDY32W', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:03', '2018-04-15 20:31:03'),
(83, '7112790026', 'Leola', 'Dooley', '2231 Felix Pine Suite 304\nNorth Demarcoville, AZ 29870', '04166835380', '9789252583981', 'adrian04@hotmail.com', '$2y$10$0t3qrZezSJSoqvGeUlqqDeXC4NYSWxNfFvm8Kq2rfeGOI4Wojt0u2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(84, '4755457521', 'Cyrus', 'Spinka', '7152 Efrain Flats Apt. 219\nEast Tessfurt, TX 51925', '04166835380', '9792421673970', 'cwunsch@ondricka.com', '$2y$10$rUhg.ECBTw2MaPRFHhQ/PeIFB20x1ZjKJzcZH/BOhgf3DpNgEVeja', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(85, '2665858002', 'Tobin', 'Koelpin', '4745 Predovic Neck Suite 835\nLake Noemi, IA 79234-7059', '04166835380', '9790610039385', 'torp.maximillia@schoen.com', '$2y$10$ifFJHSZw1c/BnrhRyTAqE.dQIrCzuG7sDaYqtzBp7Q.1MSCr86nmW', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(86, '4346254101', 'Ubaldo', 'Terry', '1725 Tressie Union Suite 669\nNorth Lucindaborough, NE 88878-3737', '04166835380', '9781492295600', 'newton52@vandervort.com', '$2y$10$viP6EJwRASp96tW74/HFeON0mBNP3WK0PqHvebFp6XQEvVx5Jir/6', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(87, '5070854585', 'Samantha', 'Kulas', '63216 Jessie Street Suite 709\nEast Brianneside, TX 87789', '04166835380', '9799058859135', 'tamia.emmerich@hotmail.com', '$2y$10$9hntVFzw0vxl7bmuQ.o.vefq2IfUpvXb8ivXze2cK/OWTtivE2evy', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(88, '1012672220', 'Michael', 'Rohan', '750 Zoey Radial Apt. 114\nWilliamview, MT 42206', '04166835380', '9784649462412', 'aromaguera@lebsack.biz', '$2y$10$Q6PiX0nv9YmNwEJgdX/ijeAPfYfURsAx2V.sslZ.z5f0ScY45lbSq', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(89, '1002982537', 'Antoinette', 'Walter', '192 Brock Dale Suite 978\nKertzmannburgh, AK 83048-7204', '04166835380', '9798778969339', 'ken.keebler@mitchell.com', '$2y$10$exeQhJ.AjBq2k.n74tsr3eOFaLgNEuVpRTY9jFZJXJLSyvpGYUQuW', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:04', '2018-04-15 20:31:04'),
(90, '9444411966', 'Fiona', 'Deckow', '674 Garland Course\nTurnerbury, KS 62972', '04166835380', '9795896287420', 'monserrate91@hotmail.com', '$2y$10$o5pV8S1cwYFFGUmMX73zfe8vitJl60EJ8jZVLOTmExvL/4Mot6GYK', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(91, '7733878144', 'Garland', 'Von', '688 Karine Parkways Apt. 965\nKeeblershire, MD 95194-2872', '04166835380', '9782045306538', 'aracely32@labadie.com', '$2y$10$o6zKa9L6Cby7ojXgpr6PWexdbTdlla9P1RqvJL2D4TAUWsNYmItOm', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(92, '5114526537', 'Izaiah', 'Stanton', '93533 McClure Spur\nSallieview, MA 90677', '04166835380', '9798804043026', 'mitchell.arjun@eichmann.com', '$2y$10$Bf5Fjg1aF0bxPhLdaFWYVeEpzBweVCyQPfIMVjBGTZlK5GI3vLW6O', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(93, '3718749017', 'Bo', 'Strosin', '36385 Nader Crossroad Apt. 513\nGislasonport, VA 55719-9040', '04166835380', '9791727877822', 'ayana12@vandervort.com', '$2y$10$sFd1KWwDu5btLOR7bLC7tOOl0TbQ5z3jOVzi6Aew06AvKJ.B47OW2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(94, '4928977327', 'Sonia', 'Goodwin', '8043 Kub Drives\nWest Hobartbury, NH 46444', '04166835380', '9784866093949', 'billie.rippin@yahoo.com', '$2y$10$mp9TDd9oeSfY29C60VZ5OeSoel6QmYLBQGtkoL3/N16qPd3BUSA86', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(95, '528416041X', 'Lottie', 'Barrows', '27559 Karlee Fords\nMarlenmouth, AZ 25360', '04166835380', '9787384951630', 'nsporer@gmail.com', '$2y$10$mGWUZS6kyRqFdjwQ2gOHzeKWkPh6.MOez4BB6QSkHTBk7G2AH5696', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(96, '8917066038', 'Rebeka', 'Kuhn', '454 Strosin Valleys\nSouth Brenda, IN 38059-1415', '04166835380', '9795860995368', 'lynn.greenfelder@kuvalis.info', '$2y$10$PnpbmVfmyF2kcQVsE3kOAey/dAFaGg8305TFrRXRooloj84xRGBtC', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(97, '8635599993', 'Benjamin', 'Hammes', '311 Devyn Place\nSouth Charityfort, MD 80244-8261', '04166835380', '9795242741392', 'abernathy.elna@hotmail.com', '$2y$10$7e23weB0PF9bsz8lblM8x.G.sFcbVozT7surw5BM6iO.RVa2AJhIa', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(98, '3639361423', 'Shaniya', 'Dooley', '35387 Fidel Motorway\nNew Damon, MI 18323', '04166835380', '9784549511005', 'elise.medhurst@yahoo.com', '$2y$10$eX24yTGULs91zez6NET3JeqvlYlsoPN/mJH5KJ3MV2dFAImYiLq0u', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(99, '0231483856', 'Enola', 'Huels', '3819 Block Plaza\nSouth Keely, WY 29764-9116', '04166835380', '9797377442557', 'mcdermott.flavie@gmail.com', '$2y$10$iEn8o5lxcEWidhTDefu9zuPJonhmNErzDK6BRCBLwxzrHK8rUNn5u', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(100, '5494781089', 'Josianne', 'Glover', '6452 Kozey Square\nLukaschester, AR 92661-0670', '04166835380', '9785733033938', 'kreiger.cordie@ledner.com', '$2y$10$Ehs8YtALZfy/1mMb9NJP8O9Biq7tna.xfEYBwU5/5Bb5H69mkKwjG', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:05', '2018-04-15 20:31:05'),
(101, '1986865320', 'Mireya', 'Raynor', '702 Lemke Grove\nEast Carlottaville, MT 16501-7082', '04166835380', '9786225383821', 'azieme@yahoo.com', '$2y$10$XP0fc1Y4WAHAMV9kStJeg.vv98LV/jAFryDvFKHYc9kqo.ap5e/i.', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(102, '5139125595', 'Benjamin', 'Lockman', '432 Bernie Wells Suite 995\nFayland, IL 57241-1627', '04166835380', '9799792845494', 'kris50@barton.info', '$2y$10$N6kCY5OW.G3cEubhvRoGze0HD9g8oHfTkTWqKEizuETZajXNCRjum', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(103, '8570372698', 'Jude', 'Wisoky', '23519 Gulgowski Mall\nHazelfurt, NC 88303', '04166835380', '9782733986783', 'blanche.hickle@little.com', '$2y$10$XYFzNyQinrqVH9Z/uzD65O5PjVpa24ahSYUGVLK96WWbbbwOFAhh2', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(104, '5528586933', 'Amara', 'Jast', '142 Muller Plaza Apt. 689\nReichelfurt, AZ 01790', '04166835380', '9793527278830', 'bosco.lela@dickinson.org', '$2y$10$Fh6LvLCPAj9JkOcCHU5zcu5SXKLghi6FrqFIEb2yjnb56yCmjNvQO', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:06', '2018-04-15 20:31:06'),
(105, '7593186393', 'Addison', 'Kreiger', '72101 Imani Common Apt. 458\nEast Percy, SC 00327-9510', '04166835380', '9795357402201', 'hammes.leonardo@yahoo.com', '$2y$10$bC.7uiVjBmTJ81/r6Q6gFOk6LJt1/2BqQZ30WG8u1XtfK8XpQKpkS', 'como me llamo', 'Jhonny', 1, 'Felipe Carrillo', 2, NULL, '2018-04-15 20:31:06', '2018-04-15 20:31:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoediciones`
--

CREATE TABLE `tipoediciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipoediciones`
--

INSERT INTO `tipoediciones` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'acéfala', 'Es aquella que no tiene portada ni título.', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(2, 'anotada', 'Denominada como edición comentada, ya que suele llevar comentarios a pie de página o en los espacios existentes entre los bordes.', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(3, 'artística', 'Se trata de aquella en la que se pone el acento en la expresión artística de la encuadernación, o en la composición del libro.', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(4, 'bibliófilo', 'Generalmente es la edición dedicada o apreciada por bibliófilos, se caracterizan por una pequeña tirada, o para un grupo selecto de subscriptores.', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(5, 'bolsillo', 'Suelen ser de formato reducido y de coste de producción económico, por regla general al contrario que las ediciones para bibliófilos, suelen ser de grandes tiradas.', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(6, 'crítica', 'En sentido amplio, es aquella que se plantea los problemas previos a la edición de una obra (búsqueda de fuentes, selección de ejemplares, selección y establecimiento de un texto...), y hace partícipe al lector de las decisiones tomadas durante el proceso', '2018-04-15 20:30:21', '2018-04-15 20:30:21'),
(7, 'especial', 'Dentro de una tirada normal, se sacan algunos ejemplares que se diferencian de los demás en alguna particularidad especial que desee el editor, como puede ser una firma del autor, una mejora en la calidad.', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(8, 'facsímil', 'Es aquella que reproduce la imagen (fotográfica o escaneada) del texto tal y como el editor la ha encontrado. Es una opción común sobre todo en el caso de textos antiguos, códices iluminados, manuscritos u obras especialmente valiosas. Puede reproducir el', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(9, 'genética', 'Es la que muestra, simultáneamente, varios o todos los estadios en que se ha presentado un texto durante su proceso de creación y transmisión (por ejemplo, el borrador de un poema, su primera edición, su segunda edición corregida, una edición modificada p', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(10, 'lujo', 'Caracterizada por la excesiva calidad de materiales empleados en la elaboración de la edición, como puede ser el papel, encuadernación, etc.', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(11, 'múltiple', 'O edición sinóptica: es aquella que muestra varios textos en paralelo. Dichos textos pueden ser traducciones unos de otros (el caso más frecuente es el de las ediciones sinópticas de la Biblia), o bien versiones distintas de un mismo texto, o textos disti', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(12, 'numerada', 'Generalmente aquellas ediciones con impresión de grabados suele ir numerada, de tal forma que las numeraciones más bajas suelen ser más apreciadas que las de mayor numeración.', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(13, 'paleográfica', 'Es la que, sin reproducir el texto en forma de imagen, sin embargo intenta describirlo con la mayor exactitud posible, dando al lector información exhaustiva sobre las grafías, las abreviaturas, los marginalia, los accidentes del texto, etc.', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(14, 'papel', 'Suele ser una edición barata en la que los pliegos de papel una vez encuadernados e impresos no ha sido encuadernada.', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(15, 'príncipe', 'Se denomina así a la primera edición de una obra.', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(16, 'rama', 'Suele denominarse así a la edición que ha sido impresa, plegada, pero no tiene aún una encuadernación. Tipología complementaria', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(17, 'abreviada', 'la que se ha compendiado de la original para adecuar a una categoría de usuarios. Por ejemplo, una edición para escolares de El Mundo es ancho y ajeno', '2018-04-15 20:30:22', '2018-04-15 20:30:22'),
(18, 'apócrifa', 'la que se atribuye su autoría sin serlo o saca con el mismo título sin ser el autor. Ejemplo, la 2.ª parte de Don Quijote', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(19, 'bilingüe', 'La que se redacta en dos idiomas, en dos columnas o idiomas. Columna A en página par, e idioma B en página impar. Ejemplo "Análisis Matemático" de Protter', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(20, 'conmemorativa', 'La se edita al cumplir 50 años, un siglo, etc. Ejemplo, La Colección por el Sesquicentenario de la Independencia del Perú.', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(21, 'definitiva', 'La que sigue a una previa que recibe comentarios u observaciones. Ejemplo "Introducción al Álgebra" de Cotlar-Sadoski, Eudeba.', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(22, 'ilustrada', 'Lleva comentarios gráficos e ilustraciones. Ejemplo Enciclopedia Ilustrada del Perú de Tauro del Pino. Edición con manuscrito de autor Para lo cual el autor escribe de puño y letra y dicho material se imprime. Ejemplo, "Teoría de la medida" de Mauro Chump', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(23, 'masiva', 'La que se imprime para bastante público. Ejemplo los populibros de Manuel Scorza en los años 50s del siglo XX.', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(24, 'mimeografiada', 'La escrita a máquina y se reproduce procesando con mimeógrafo. Generalmente textos de cursos o de seminarios', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(25, 'oficial', 'Autorizada por un Estado que sufraga los costos. Ejemplo los libros de texto escolar y de distribución gratuita.', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(26, 'previa', 'La que sale a modo de prueba, para ser mejorada con intervención de interesados y de expertos.', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(27, 'privada', 'La que no se pone en venta, de pequeño tiraje y entregas selectivas.', '2018-04-15 20:30:23', '2018-04-15 20:30:23'),
(28, 'políglota', 'Impresa en varios idiomas. Ejemplo los diccionarios, para el caso "Diccionario comparativo de castellano, inglés, quechuas de Áncash y Ecuador".', '2018-04-15 20:30:24', '2018-04-15 20:30:24'),
(29, 'popular', 'Edición de bajo costo y con materiales de menor precios. Ejemplo, las que auspician los diarios de circulación nacional.1', '2018-04-15 20:30:24', '2018-04-15 20:30:24'),
(30, 'manuscrito', 'Para lo cual el autor escribe de puño y letra y dicho material se imprime. Ejemplo, "Teoría de la medida" de Mauro Chumpitaz de la UNI, Lima.', '2018-04-15 20:30:24', '2018-04-15 20:30:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estadopedidos`
--
ALTER TABLE `estadopedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libroautores`
--
ALTER TABLE `libroautores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libroautores_idlibro_foreign` (`idlibro`),
  ADD KEY `libroautores_idautor_foreign` (`idautor`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libros_idgenero_foreign` (`idgenero`),
  ADD KEY `libros_idtipoed_foreign` (`idtipoed`),
  ADD KEY `libros_idnivel_foreign` (`idnivel`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lineas_idpedido_foreign` (`idpedido`),
  ADD KEY `lineas_idlibro_foreign` (`idlibro`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedidos_idrepresentante_foreign` (`idrepresentante`),
  ADD KEY `pedidos_idestado_foreign` (`idestado`);

--
-- Indices de la tabla `representantes`
--
ALTER TABLE `representantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `representantes_cedula_unique` (`cedula`),
  ADD UNIQUE KEY `representantes_rif_unique` (`rif`),
  ADD UNIQUE KEY `representantes_email_unique` (`email`),
  ADD KEY `representantes_idnivel_foreign` (`idnivel`);

--
-- Indices de la tabla `tipoediciones`
--
ALTER TABLE `tipoediciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `estadopedidos`
--
ALTER TABLE `estadopedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `libroautores`
--
ALTER TABLE `libroautores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT de la tabla `lineas`
--
ALTER TABLE `lineas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `representantes`
--
ALTER TABLE `representantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT de la tabla `tipoediciones`
--
ALTER TABLE `tipoediciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libroautores`
--
ALTER TABLE `libroautores`
  ADD CONSTRAINT `libroautores_idautor_foreign` FOREIGN KEY (`idautor`) REFERENCES `autores` (`id`),
  ADD CONSTRAINT `libroautores_idlibro_foreign` FOREIGN KEY (`idlibro`) REFERENCES `libros` (`id`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_idgenero_foreign` FOREIGN KEY (`idgenero`) REFERENCES `generos` (`id`),
  ADD CONSTRAINT `libros_idnivel_foreign` FOREIGN KEY (`idnivel`) REFERENCES `niveles` (`id`),
  ADD CONSTRAINT `libros_idtipoed_foreign` FOREIGN KEY (`idtipoed`) REFERENCES `tipoediciones` (`id`);

--
-- Filtros para la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD CONSTRAINT `lineas_idlibro_foreign` FOREIGN KEY (`idlibro`) REFERENCES `libros` (`id`),
  ADD CONSTRAINT `lineas_idpedido_foreign` FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`id`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_idestado_foreign` FOREIGN KEY (`idestado`) REFERENCES `estadopedidos` (`id`),
  ADD CONSTRAINT `pedidos_idrepresentante_foreign` FOREIGN KEY (`idrepresentante`) REFERENCES `representantes` (`id`);

--
-- Filtros para la tabla `representantes`
--
ALTER TABLE `representantes`
  ADD CONSTRAINT `representantes_idnivel_foreign` FOREIGN KEY (`idnivel`) REFERENCES `niveles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
