-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3308
-- Tiempo de generación: 21-07-2024 a las 17:32:18
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escobar_justo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `perfil_id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`perfil_id`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `password`, `perfil_id`, `baja`) VALUES
(1, 'Justo', 'Escobar', 'justo98', 'justoescobar3@gmail.com', '$2y$10$O5kZyRhtbP0Q2KE4wkMd2.xQxHZZ2WT2/B3EciFVgLYhRj0XgIAea', 1, 'NO'),
(2, 'Maria Elena', 'Soto', 'mari74', 'mari74@gmail.com', '$2y$10$133xuvAhL3k7hvBnYNV.4OeaYjJoDD3dnpIZVNvhmGFMSPU6tHnFy', 2, 'NO'),
(3, 'Mateo', 'Penzo', 'mateo04', 'mateo@gmail.com', '$2y$10$Xi.ze3zBHzeU1f4CmTTI2e/edyA2abAex1S/BfQXeVfw.rDKbJQXK', 2, 'NO'),
(4, 'Gustavo', 'Sananez', 'gustavo1975', 'gustavo@gmail.com', '$2y$10$OPmDEC4AEAWDLDTZsByNpOpg4v4V4krI3AZlzItYjMY8bQSB/5VJy', 2, 'SI'),
(5, 'Melissa', 'Gimenez', 'melissa96', 'melissa@gmail.com', '$2y$10$Txx6RKYm2UOMUC5fNolQ8.e8GC6btFS/p45ycy44SH3QahZNbWbNe', 2, 'NO'),
(6, 'Pablo Emanuel', 'Gomez', 'Pablito2597', 'pablo@gmail.com', '$2y$10$O0Wc36XtZwMvMN/8MmmyneM5VWYDfzO0tBJ/tmcajJdnlDXlzaaVG', 2, 'NO'),
(7, 'Belen', 'Gonzalez', 'belen', 'beleng@gmail.com', '$2y$10$GdyqwS43.3QH7Qd4PXQgEeJal0MpNipOslwl.u1zNM7SVKobYz7uy', 2, 'NO'),
(8, 'Cristian', 'Espinoza', 'cris7', 'cris@yahoo.com.ar', '$2y$10$zYXWcACBUUXZtb6So.fjeePbxOU8vgOzUaRQeL8f7dnZA7cGFTyNO', 2, 'NO'),
(9, 'Roman', 'Alegre', 'Roman10', 'roman@gmail.com', '$2y$10$rFk7tAlntIYDXav43YuANOV2BOGoGnnGukOdrxO3QyPl6M9An7WJC', 2, 'NO'),
(10, 'Nicolas', 'Toledo', 'Nico95', 'nicolas@gmail.com', '$2y$10$OI.h7rQhpKDPkqA28xRYReEXvwtfa1w6nNh99m7NNysnSOKCrYkd.', 2, 'NO'),
(11, 'Rosa', 'Gomez', 'Rosa2024', 'rosa@gmail.com', '$2y$10$g/0/FVJkguWxq8rZjAa.3ePb5xkGmzqPRUM4bbqO77z7WPnOyy2wO', 2, 'NO'),
(12, 'Jose', 'Fernandez', 'Jose1995', 'jose1995@gmail.com', '$2y$10$Eycdgyfh1rcR1p4FtStet.1mBAUVnvlEU8nJiXQRrTMNitIIpWFpG', 2, 'NO'),
(13, 'Juan Maria', 'Gaona', 'Juan1997', 'juanmaria@gmail.com', '$2y$10$15HWd4Zs3wzXJns3F2Kz5.0Kva5Y93VLp/h0/cnlmN7LglVNQbzou', 2, 'NO'),
(14, 'Karina', 'Gutierrez', 'Kari', 'karina@gmail.com', '$2y$10$wyk.ErX3ERg0tjMEngMUAeqxkl7c9H1xc8C3gQ7fiLU9Nv5.i5Chq', 2, 'NO'),
(15, 'Ana Maria', 'Sanchez', 'Ana123', 'ana@gmail.com', '$2y$10$9tT7eDXNCm.TmnSVolTXIuOYcZ8cuZyeLyb2FUIVzYK4bNzjNVtd.', 2, 'NO'),
(16, 'Perla', 'Veron ', 'Perla1940', 'perla@gmail.com', '$2y$10$mU8GkNYadn4PjfEJadM2OeCv1iFTe.lnIYk5tIebnYlAGHG5woGDa', 2, 'SI'),
(17, 'Rodrigo', 'Zalazar', 'Rodrigo10', 'rodrigo@gmail.com', '$2y$10$TYXsAQsDji75.5WXS.AGl.lxV2oggBTqMkUIr9XAP5R5J9VpctPX6', 1, 'NO'),
(18, 'Carolina', 'Comaschi', 'Caro17', 'carocomaschi@gmail.com', '$2y$10$FHNkDrrwDZPQABNHXN5IFeYCCN7A6di/S6qOJCHYtMoNuCpXH8qc.', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`perfil_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `perfil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
