-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 04:51:35
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `recibos_llanding`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `2022`
--

CREATE TABLE `2022` (
  `id` int(100) NOT NULL,
  `numero_recibo` int(100) NOT NULL,
  `fecha_recibo` date NOT NULL DEFAULT current_timestamp(),
  `nombre_y_apellido` varchar(60) NOT NULL,
  `monto_recibo` int(100) NOT NULL,
  `numero_cuota` int(250) NOT NULL,
  `firma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `2022`
--

INSERT INTO `2022` (`id`, `numero_recibo`, `fecha_recibo`, `nombre_y_apellido`, `monto_recibo`, `numero_cuota`, `firma`) VALUES
(1, 1, '2022-09-14', 'santiago samaniego', 7500, 12, ''),
(2, 2, '2022-09-14', 'aldana fernandez', 10500, 5, ''),
(3, 3, '2022-09-14', 'caballero monica', 2000, 3, ''),
(4, 4, '2022-09-14', 'eliana severino', 5200, 10, ''),
(5, 5, '2022-09-14', 'greenworking', 15000, 14, ''),
(6, 6, '2022-09-15', 'marcelo fernandez', 4600, 4, ''),
(7, 7, '2022-09-15', 'claudio gimenez', 1300, 6, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `2022`
--
ALTER TABLE `2022`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `2022`
--
ALTER TABLE `2022`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
