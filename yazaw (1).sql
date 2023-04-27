-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 17:49:27
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yazaw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `primary_p`
--

CREATE TABLE `primary_p` (
  `Codigo` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` int(50) NOT NULL,
  `Entrada` int(50) NOT NULL,
  `Salida` int(50) NOT NULL,
  `Cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `primary_p`
--

INSERT INTO `primary_p` (`Codigo`, `Nombre`, `Precio`, `Entrada`, `Salida`, `Cantidad`) VALUES
(2, 'Pan blanco 30 cm', 15, 136, 96, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secondary_p`
--

CREATE TABLE `secondary_p` (
  `Codigo` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` int(50) NOT NULL,
  `Entrada` int(50) NOT NULL,
  `Salida` int(50) NOT NULL,
  `Cantidad` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `secondary_p`
--

INSERT INTO `secondary_p` (`Codigo`, `Nombre`, `Precio`, `Entrada`, `Salida`, `Cantidad`) VALUES
(2, 'Galleta de chocolate', 15, 100, 60, 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `primary_p`
--
ALTER TABLE `primary_p`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `secondary_p`
--
ALTER TABLE `secondary_p`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `primary_p`
--
ALTER TABLE `primary_p`
  MODIFY `Codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `secondary_p`
--
ALTER TABLE `secondary_p`
  MODIFY `Codigo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
