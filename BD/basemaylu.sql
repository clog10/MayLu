-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2021 a las 23:06:02
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
-- Base de datos: `basemaylu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartados`
--

CREATE TABLE `apartados` (
  `id_apartado` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `cliente` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `color` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `abono` int(11) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apartados`
--

INSERT INTO `apartados` (`id_apartado`, `fecha`, `modelo`, `cliente`, `numero`, `color`, `precio`, `abono`, `saldo`) VALUES
(1, '2021-02-11', '2', 'Nancy Yesenia', 23, 'Negro', 200, 150, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(7) UNSIGNED ZEROFILL NOT NULL,
  `nombre_codigo` varchar(30) NOT NULL,
  `efectivo` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id_caja`, `nombre_codigo`, `efectivo`) VALUES
(0000001, 'Caja 1', '1500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `talla` int(11) NOT NULL,
  `color` varchar(25) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` int(11) NOT NULL,
  `proveedor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `talla`, `color`, `precioVenta`, `precioCompra`, `existencia`, `proveedor`) VALUES
(1, 'AMX200', 'Zapato con tacón alto', 23, 'Azul', '130.00', '150.00', 10, 'Alma Pérez Vista'),
(2, 'AMX201', 'Tenis urbano', 24, 'Negro', '200.00', '280.00', 5, 'Alma Pérez Vista'),
(20, 'MX202', 'Bota', 24, 'Azul', '200.00', '350.00', 10, 'Calzaleta'),
(21, 'BA202', 'Sandalia', 23, 'Cafe', '120.00', '140.00', 4, 'Explorar'),
(22, 'CX101', 'Tenis', 26, 'Azul', '250.00', '290.00', 6, 'Patey woman'),
(23, 'AMX500', 'Flats', 24, 'Amarillo', '100.00', '120.00', 8, 'Calzaleta'),
(24, 'AMX501', 'Zapatilla', 26, 'Negro', '200.00', '300.00', 10, 'Patey woman'),
(25, 'T2031J', 'Bota', 23, 'Amarillo', '350.00', '400.00', 20, 'Calzaleta'),
(26, 'AMX90', 'Zapatilla', 26, 'Azul', '320.00', '350.00', 8, 'Explorar'),
(27, 'QA3211', 'Tenis', 23, 'Azul', '120.00', '250.00', 6, 'Alma Pérez Vista'),
(28, 'WX33', 'Sandalia', 23, 'Amarrillo', '120.00', '150.00', 6, 'Explorar'),
(29, 'WX33A', 'Tenis', 25, 'Azul', '350.00', '420.00', 8, 'Explorar'),
(30, 'TX501', 'Tenis', 24, 'Azul', '100.00', '150.00', 8, 'Alma Pérez Vista'),
(31, 'AQX200', 'Botín', 25, 'Negro', '120.00', '150.00', 12, 'Calzaleta'),
(32, 'VXD202', 'Flats', 25, 'Negro', '320.00', '420.00', 10, 'Calzaleta'),
(35, 'MX800', 'Tenis', 26, 'Negro', '300.00', '350.00', 8, 'Calzaleta'),
(36, 'VXD20E', 'Zapatilla', 23, 'Negro', '350.00', '380.00', 11, 'Calzaleta'),
(37, 'NTR50', 'Tenis', 24, 'Amarillo', '160.00', '180.00', 13, 'Explorar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(13, 1, 2, 7),
(16, 1, 1, 8),
(18, 2, 1, 9),
(19, 1, 1, 9),
(20, 1, 1, 10),
(21, 1, 1, 11),
(22, 2, 1, 12),
(23, 1, 1, 12),
(24, 1, 1, 13),
(25, 2, 1, 13),
(26, 1, 1, 14),
(27, 1, 2, 15),
(28, 21, 1, 15),
(29, 1, 1, 16),
(30, 1, 1, 17),
(31, 2, 1, 17),
(32, 1, 1, 18),
(33, 2, 1, 18),
(34, 1, 1, 19),
(35, 2, 1, 19),
(36, 1, 1, 20),
(37, 2, 1, 20),
(38, 1, 1, 21),
(39, 2, 1, 21),
(40, 1, 1, 22),
(41, 2, 1, 22),
(42, 1, 1, 23),
(43, 2, 1, 23),
(44, 1, 2, 24),
(45, 22, 1, 24),
(46, 21, 1, 24),
(47, 21, 1, 25),
(48, 22, 1, 25),
(49, 1, 1, 26),
(50, 2, 1, 26),
(51, 22, 1, 26),
(52, 1, 1, 27),
(53, 1, 1, 28),
(54, 21, 1, 29),
(55, 22, 1, 29),
(56, 20, 1, 30),
(57, 20, 1, 31),
(58, 20, 1, 32),
(59, 20, 2, 33),
(60, 2, 1, 34),
(61, 1, 1, 35),
(62, 1, 1, 36),
(63, 2, 1, 36),
(64, 1, 2, 37),
(65, 2, 1, 37),
(66, 2, 2, 38),
(67, 24, 1, 38),
(68, 1, 2, 39),
(69, 1, 1, 41),
(70, 1, 1, 42),
(71, 1, 1, 43),
(72, 1, 1, 44),
(73, 1, 1, 45),
(74, 1, 1, 46),
(75, 21, 1, 47),
(76, 1, 1, 48),
(77, 21, 1, 49),
(78, 21, 1, 50),
(79, 21, 1, 51),
(80, 1, 1, 53),
(81, 1, 1, 54),
(82, 21, 1, 55),
(83, 1, 1, 56),
(84, 1, 1, 57),
(85, 21, 1, 58),
(86, 21, 1, 61),
(87, 2, 1, 62),
(88, 1, 2, 63),
(89, 37, 2, 64);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_empresa` varchar(40) NOT NULL,
  `nombre_agente` varchar(40) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_empresa`, `nombre_agente`, `direccion`, `tel`, `email`) VALUES
(1, 'Alma Perez Vista', 'Alma Perez Vista', 'calle', '278-7', 'perez@gmail.com'),
(3, 'Calzaleta', 'Maria Perez', 'calles', '512343', 'calzaleta@hotmail.com'),
(8, 'Explorar', 'Antonio', 'Hidalgo', '2123789', 'explora@gmail.com'),
(9, 'Patey woman', 'Maria', 'calle', '5135521', 'patey@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_com` varchar(45) NOT NULL,
  `puesto` varchar(45) NOT NULL,
  `id_caja` varchar(30) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `contra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_com`, `puesto`, `id_caja`, `genero`, `direccion`, `tel`, `usuario`, `contra`) VALUES
(1, 'Carlos Loaeza', '1', 'Caja 1', 'Masculino', 'Casa', '951', 'Carlos Loaeza', 'carlos12'),
(22, 'Juan Antonio', '3', '0', 'Masculino', 'Calle', '951233494', 'juan123', 'juan1234'),
(23, 'Nancy Yesenia', '2', 'Caja 2', 'Femenino', 'Casa', '951548830', 'nancy123', 'nancy1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL,
  `vendedor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`, `vendedor`) VALUES
(7, '2021-01-24 01:17:24', '940.00', 'Carlos Loaeza'),
(8, '2021-01-24 01:19:45', '420.00', 'Carlos Loaeza'),
(9, '2021-01-24 07:47:18', '400.00', 'Carlos Loaeza'),
(10, '2021-01-24 19:28:46', '150.00', 'Carlos Loaeza'),
(11, '2021-01-24 23:13:10', '150.00', 'Carlos Loaeza'),
(12, '2021-01-24 23:16:21', '400.00', 'Carlos Loaeza'),
(13, '2021-01-24 23:40:54', '320.00', 'Carlos Loaeza'),
(14, '2021-01-24 21:01:32', '120.00', 'Carlos Loaeza'),
(15, '2021-01-25 09:46:09', '360.00', 'Carlos Loaeza'),
(16, '2021-01-25 11:40:05', '120.00', 'Carlos Loaeza'),
(17, '2021-01-25 11:47:12', '320.00', 'Carlos Loaeza'),
(18, '2021-01-25 11:53:52', '320.00', 'Carlos Loaeza'),
(19, '2021-01-25 12:00:25', '320.00', 'Carlos Loaeza'),
(20, '2021-01-25 12:25:06', '320.00', 'Carlos Loaeza'),
(21, '2021-01-25 12:32:03', '320.00', 'Carlos Loaeza'),
(22, '2021-01-25 15:23:01', '320.00', 'Carlos Loaeza'),
(23, '2021-01-25 15:31:30', '320.00', 'Carlos Loaeza'),
(24, '2021-01-25 15:34:28', '610.00', 'Carlos Loaeza'),
(25, '2021-01-25 15:51:27', '370.00', 'Nancy Yesenia'),
(26, '2021-01-25 15:53:17', '570.00', 'Nancy Yesenia'),
(27, '2021-01-25 16:01:37', '120.00', 'Carlos Loaeza'),
(28, '2021-01-25 16:02:39', '120.00', 'Nancy Yesenia'),
(29, '2021-01-25 16:04:40', '370.00', 'Nancy Yesenia'),
(30, '2021-01-25 16:10:24', '200.00', 'Carlos Loaeza'),
(31, '2021-01-25 16:12:32', '200.00', 'Nancy Yesenia'),
(32, '2021-01-25 23:15:09', '200.00', ''),
(33, '2021-01-25 16:17:10', '400.00', 'Nancy Yesenia'),
(34, '2021-01-25 16:22:33', '200.00', 'Nancy Yesenia'),
(35, '2021-01-25 16:25:23', '120.00', 'Carlos Loaeza'),
(36, '2021-01-25 20:13:39', '320.00', 'Carlos Loaeza'),
(37, '2021-01-26 09:11:26', '440.00', 'Carlos Loaeza'),
(38, '2021-01-26 10:20:17', '600.00', 'Carlos Loaeza'),
(39, '2021-01-26 10:24:26', '260.00', 'Carlos Loaeza'),
(40, '2021-01-26 10:25:08', '260.00', 'Carlos Loaeza'),
(41, '2021-01-31 04:00:35', '130.00', 'Carlos Loaeza'),
(42, '2021-01-31 04:01:16', '130.00', 'Carlos Loaeza'),
(43, '2021-01-31 04:02:10', '130.00', 'Carlos Loaeza'),
(44, '2021-01-31 04:16:31', '130.00', 'Carlos Loaeza'),
(45, '2021-01-31 04:18:16', '130.00', 'Carlos Loaeza'),
(46, '2021-01-31 04:19:52', '130.00', 'Carlos Loaeza'),
(47, '2021-01-31 04:20:23', '120.00', 'Carlos Loaeza'),
(48, '2021-01-31 04:21:20', '130.00', 'Carlos Loaeza'),
(49, '2021-01-31 04:21:46', '120.00', 'Carlos Loaeza'),
(50, '2021-01-31 04:23:34', '120.00', 'Carlos Loaeza'),
(51, '2021-01-31 04:27:50', '120.00', 'Carlos Loaeza'),
(52, '2021-01-31 04:28:00', '120.00', 'Carlos Loaeza'),
(53, '2021-01-31 04:28:48', '130.00', 'Carlos Loaeza'),
(54, '2021-01-31 04:29:27', '130.00', 'Carlos Loaeza'),
(55, '2021-01-31 04:30:07', '120.00', 'Carlos Loaeza'),
(56, '2021-01-31 13:40:43', '130.00', 'Carlos Loaeza'),
(57, '2021-01-31 13:44:15', '130.00', 'Carlos Loaeza'),
(58, '2021-01-31 13:58:07', '120.00', 'Carlos Loaeza'),
(59, '2021-01-31 13:58:29', '120.00', 'Carlos Loaeza'),
(60, '2021-01-31 13:58:47', '120.00', 'Carlos Loaeza'),
(61, '2021-01-31 13:59:09', '120.00', 'Carlos Loaeza'),
(62, '2021-02-01 12:55:57', '200.00', 'Carlos Loaeza'),
(63, '2021-02-01 13:24:55', '260.00', 'Carlos Loaeza'),
(64, '2021-02-01 14:14:45', '320.00', 'Carlos Loaeza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `apartados`
--
ALTER TABLE `apartados`
  ADD PRIMARY KEY (`id_apartado`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apartados`
--
ALTER TABLE `apartados`
  MODIFY `id_apartado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
