-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 02-02-2022 a las 07:26:45
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `obra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `poboacion` varchar(50) NOT NULL,
  `actividade` varchar(200) NOT NULL,
  `data_alta` date NOT NULL,
  `ofertas_emprego` int(11) NOT NULL,
  `ofertas_formación` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_emprego`
--

CREATE TABLE `ofertas_emprego` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(50) NOT NULL,
  `posto` varchar(50) NOT NULL,
  `numero_postos` int(11) NOT NULL,
  `data_oferta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas_formacion`
--

CREATE TABLE `ofertas_formacion` (
  `id` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(50) NOT NULL,
  `posto` varchar(50) NOT NULL,
  `numero_postos` int(11) NOT NULL,
  `data_oferta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persoas`
--

CREATE TABLE `persoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `primeiro_apelido` varchar(50) NOT NULL,
  `segundo_apelido` varchar(50) NOT NULL,
  `nif` varchar(10) NOT NULL,
  `data_nacemento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persoas`
--

INSERT INTO `persoas` (`id`, `nome`, `primeiro_apelido`, `segundo_apelido`, `nif`, `data_nacemento`, `sexo`, `codigo_postal`, `telefono`, `email`) VALUES
(1, 'MarÃ­a', 'PÃ©rez', 'Bellas', '12345678S', '1987-04-30', 'MULLER', 36799, 123498765, 'mariapb@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `clave`) VALUES
(1, 'admin', 'admin'),
(2, 'funcionario1', 'funcionario1'),
(3, 'funcionario2', 'funcionario2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `nome` (`nome`);

--
-- Indices de la tabla `ofertas_emprego`
--
ALTER TABLE `ofertas_emprego`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `nome_empresa` (`nome_empresa`);

--
-- Indices de la tabla `ofertas_formacion`
--
ALTER TABLE `ofertas_formacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `nome_empresa` (`nome_empresa`);

--
-- Indices de la tabla `persoas`
--
ALTER TABLE `persoas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertas_emprego`
--
ALTER TABLE `ofertas_emprego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertas_formacion`
--
ALTER TABLE `ofertas_formacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persoas`
--
ALTER TABLE `persoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ofertas_emprego`
--
ALTER TABLE `ofertas_emprego`
  ADD CONSTRAINT `ofertas_emprego_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_emprego_ibfk_2` FOREIGN KEY (`nome_empresa`) REFERENCES `empresas` (`nome`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ofertas_formacion`
--
ALTER TABLE `ofertas_formacion`
  ADD CONSTRAINT `ofertas_formacion_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_formacion_ibfk_2` FOREIGN KEY (`nome_empresa`) REFERENCES `empresas` (`nome`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
