-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 07:02:25
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmaylu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(11) NOT NULL,
  `nombre_codigo` varchar(30) NOT NULL,
  `efectivo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id_caja`, `nombre_codigo`, `efectivo`) VALUES
(1, 'Caja principal', '2500'),
(3, 'Caja 2', '1500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devolucion`
--

CREATE TABLE `devolucion` (
  `id_devolucion` int(11) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `zapato` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_empresa` varchar(20) NOT NULL,
  `nombre_agente` varchar(30) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_empresa`, `nombre_agente`, `direccion`, `tel`, `email`) VALUES
(1, 'Adidas', 'Jose', 'Calle', 951, 'adidas.com'),
(3, 'Nike', 'Maria Perez', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_com` varchar(45) NOT NULL,
  `puesto` varchar(20) NOT NULL,
  `id_caja` int(11) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_com`, `puesto`, `id_caja`, `genero`, `direccion`, `tel`, `email`, `usuario`, `contra`) VALUES
(5, 'Juan', '0', 0, '0', 'Casa', 951123453, 'alejandro@gmail.com', 'alejandro', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `fecha` date NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `recibido` decimal(10,0) NOT NULL,
  `cambio` decimal(10,0) NOT NULL,
  `modelo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapato`
--

CREATE TABLE `zapato` (
  `id_zapato` int(11) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `proveedor` int(11) NOT NULL,
  `talla` int(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `precio_compra` decimal(10,0) NOT NULL,
  `precio_venta` decimal(10,0) NOT NULL,
  `descuento` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zapato`
--

INSERT INTO `zapato` (`id_zapato`, `modelo`, `proveedor`, `talla`, `color`, `precio_compra`, `precio_venta`, `descuento`, `stock`, `img`) VALUES
(34, 'SA2345', 0, 23, 'Azul', '120', '150', 0, 150, ''),
(37, 'DOE15AS', 0, 4, 'Rosa', '190', '200', 0, 30, ''),
(39, 'SW2', 0, 4, 'Negro', '300', '450', 0, 12, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`),
  ADD KEY `id_caja` (`id_caja`);

--
-- Indices de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD PRIMARY KEY (`id_devolucion`),
  ADD KEY `proveedor` (`proveedor`,`zapato`),
  ADD KEY `zapato` (`zapato`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_caja` (`id_caja`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD KEY `modelo` (`modelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `zapato`
--
ALTER TABLE `zapato`
  ADD PRIMARY KEY (`id_zapato`),
  ADD KEY `proveedor` (`proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `devolucion`
--
ALTER TABLE `devolucion`
  MODIFY `id_devolucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `zapato`
--
ALTER TABLE `zapato`
  MODIFY `id_zapato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `devolucion`
--
ALTER TABLE `devolucion`
  ADD CONSTRAINT `devolucion_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`id_proveedor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `devolucion_ibfk_2` FOREIGN KEY (`zapato`) REFERENCES `zapato` (`id_zapato`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`modelo`) REFERENCES `zapato` (`id_zapato`) ON UPDATE CASCADE,
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
