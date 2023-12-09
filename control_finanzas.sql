-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2023 a las 05:07:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_finanzas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_entradas`
--

CREATE TABLE `registro_entradas` (
  `ren_id` int(11) NOT NULL,
  `ren_usr_id` int(11) NOT NULL,
  `ren_tipo_entrada` text NOT NULL,
  `ren_monto` decimal(10,2) NOT NULL,
  `ren_fecha` date NOT NULL DEFAULT current_timestamp(),
  `ren_ruta_factura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_salidas`
--

CREATE TABLE `registro_salidas` (
  `rsa_id` int(11) NOT NULL,
  `rsa_usr_id` int(11) NOT NULL,
  `rsa_tipo_salida` text NOT NULL,
  `rsa_monto` decimal(10,2) NOT NULL,
  `rsa_fecha` date NOT NULL DEFAULT current_timestamp(),
  `rsa_ruta_factura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usr_id` int(11) NOT NULL,
  `usr_correo` varchar(100) NOT NULL,
  `usr_nombre` varchar(100) NOT NULL,
  `usr_primer_apellido` varchar(50) NOT NULL,
  `usr_segundo_apellido` varchar(50) NOT NULL,
  `usr_telefono` varchar(25) NOT NULL,
  `usr_contraseña` varchar(100) NOT NULL,
  `usr_estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usr_id`, `usr_correo`, `usr_nombre`, `usr_primer_apellido`, `usr_segundo_apellido`, `usr_telefono`, `usr_contraseña`, `usr_estado`) VALUES
(1, 'diazzj3sus@gmail.com', 'Jesús Alexander', 'Díaz', 'Merino', '60055488', 'pruebaslis', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_entradas`
--
ALTER TABLE `registro_entradas`
  ADD PRIMARY KEY (`ren_id`),
  ADD KEY `ren_usr_id` (`ren_usr_id`);

--
-- Indices de la tabla `registro_salidas`
--
ALTER TABLE `registro_salidas`
  ADD PRIMARY KEY (`rsa_id`),
  ADD KEY `rsa_usr_id` (`rsa_usr_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_entradas`
--
ALTER TABLE `registro_entradas`
  MODIFY `ren_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro_salidas`
--
ALTER TABLE `registro_salidas`
  MODIFY `rsa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `registro_entradas`
--
ALTER TABLE `registro_entradas`
  ADD CONSTRAINT `registro_entradas_ibfk_1` FOREIGN KEY (`ren_usr_id`) REFERENCES `usuarios` (`usr_id`);

--
-- Filtros para la tabla `registro_salidas`
--
ALTER TABLE `registro_salidas`
  ADD CONSTRAINT `registro_salidas_ibfk_1` FOREIGN KEY (`rsa_usr_id`) REFERENCES `usuarios` (`usr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
