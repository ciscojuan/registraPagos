-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2020 a las 23:44:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroPagos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bien`
--

CREATE TABLE `bien` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bien`
--

INSERT INTO `bien` (`id`, `nombre`) VALUES
(1, 'Carro'),
(2, 'Apartamento Mosquera'),
(3, 'Apartamento Acapulco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(4) NOT NULL,
  `concepto_id` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `concepto_id`, `nombre`) VALUES
(1, 1, 'Impuesto Predial'),
(2, 1, 'Administracion'),
(3, 1, 'Impuesto Aceguradora'),
(4, 1, 'Impuesto Vehiculo'),
(5, 2, 'Agua'),
(6, 2, 'Gas'),
(7, 2, 'Energia'),
(8, 2, 'Gasolina'),
(9, 2, 'Telefono + Internet'),
(10, 2, 'Telefono Movistar'),
(11, 3, 'SOAT'),
(12, 3, 'Aseguradora Vehiculo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concepto`
--

CREATE TABLE `concepto` (
  `id` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `concepto`
--

INSERT INTO `concepto` (`id`, `nombre`) VALUES
(1, 'Impuesto'),
(2, 'Servicios-Publicos'),
(3, 'Seguro'),
(4, 'Mantenimiento'),
(5, 'Reparacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id` int(4) NOT NULL,
  `usuario_id` int(4) NOT NULL,
  `bien_id` int(4) NOT NULL,
  `concepto_id` int(4) NOT NULL,
  `categoria_id` int(4) NOT NULL,
  `pago_id` int(4) NOT NULL,
  `valor` int(8) NOT NULL,
  `fechaPago` date NOT NULL,
  `descripcion` mediumtext DEFAULT NULL,
  `imagen` varchar(255) NOT NULL,
  `fechaRegistro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `usuario_id`, `bien_id`, `concepto_id`, `categoria_id`, `pago_id`, `valor`, `fechaPago`, `descripcion`, `imagen`, `fechaRegistro`) VALUES
(1, 1, 3, 2, 7, 1, 77080, '2019-09-20', '', '', '2019-09-20'),
(2, 2, 3, 2, 9, 1, 91160, '2019-09-17', '', '', '2019-09-20'),
(3, 1, 2, 2, 7, 1, 4390, '2019-09-09', '', '', '2019-09-20'),
(4, 1, 3, 1, 1, 2, 0, '2019-03-29', '', '', '2019-09-20'),
(5, 1, 1, 1, 4, 2, 471000, '2019-04-09', '', '', '2019-09-20'),
(6, 1, 2, 1, 2, 1, 16700, '2019-09-09', '', '', '2019-09-20'),
(7, 1, 3, 1, 2, 2, 252300, '2019-09-09', 'Pago Administracion Conjunto AcaPulco 2-202’', '', '2019-09-20'),
(8, 1, 3, 2, 1, 2, 38026, '2019-09-20', '', '', '2019-09-20'),
(9, 1, 2, 2, 5, 2, 89660, '2019-09-09', '', '', '2019-09-23'),
(10, 1, 2, 2, 6, 2, 2280, '2019-09-23', 'Pago GAS Conjunto Sol Naciente 11 – 701’', '', '2019-09-23'),
(11, 1, 1, 3, 11, 2, 387900, '2019-09-23', 'Pago Seguro SOAT – JDR036’', '', '2019-09-23'),
(12, 1, 3, 2, 6, 1, 31110, '2019-09-23', 'Pago GAS Conjunto AcaPulco : 2 – 202’', '', '2019-09-23'),
(13, 1, 3, 2, 5, 1, 134400, '2019-10-04', '', '', '2019-10-06'),
(14, 1, 2, 2, 6, 1, 3470, '2019-10-21', 'Pago Gas Natural Vanti $ 3470’', '', '2019-10-21'),
(15, 1, 2, 2, 5, 1, 72190, '2019-10-21', 'Pago Servivio Publico AGUA $ 72 190’', '', '2019-10-21'),
(16, 1, 2, 2, 7, 1, 3980, '2019-10-21', 'Registro Pago Enel Codensa $ 3 980’', '', '2019-10-21'),
(17, 1, 3, 2, 7, 1, 72000, '2019-11-06', '', '', '2019-11-06'),
(18, 1, 3, 2, 6, 1, 35380, '2019-11-06', '', '', '2019-11-06'),
(19, 1, 3, 1, 2, 2, 252300, '2019-11-07', 'Pago Administracion 2 202 $ 252 300’', '', '2019-11-07'),
(20, 1, 2, 2, 7, 1, 3520, '2019-11-13', 'Pago Energia Mosquera $ 3520 # ComProbante : 000 000 353’', '', '2019-11-15'),
(21, 1, 3, 2, 9, 1, 88720, '2019-11-15', 'Pago ETB AcaPulco # referencia: 000 000 359’', '', '2019-11-15'),
(22, 1, 3, 2, 6, 1, 81160, '2019-12-01', 'ComProbante 000000379 GAS NATURAL $ 82 160’', '', '2019-12-14'),
(23, 1, 3, 2, 5, 1, 140210, '2019-12-01', 'ComProbante 000000381 AGUA $ 140 210 000’', '', '2019-12-14'),
(24, 1, 3, 1, 2, 2, 252300, '2019-12-05', 'Pago Administracion Conjunto AcaPulco 2-202’', '', '2019-12-14'),
(25, 1, 2, 1, 2, 2, 164700, '2019-12-09', 'Pago Administracion Conjunto Sol Naciente 11 701’', '', '2019-12-14'),
(26, 1, 2, 1, 1, 1, 269100, '2020-03-25', 'ImPuesto Predial - APartameto Mosquera $ 269 100  ‘', '', '2020-03-25'),
(27, 1, 3, 2, 7, 1, 117400, '2020-03-25', 'Pago Servicio Publico - Codensa $ 117 400’', '', '2020-03-25'),
(28, 1, 3, 2, 9, 1, 97940, '2020-03-25', 'Pago Servicio Publico - ETB $ 97 940’', '', '2020-03-25'),
(29, 1, 2, 2, 9, 1, 84900, '2020-03-18', 'Pago Servicio Publico - Claro $ 84 900’', '', '2020-03-25'),
(30, 1, 3, 2, 10, 1, 40867, '2020-03-15', 'Pago Servicio Publico - Movil Movistar $ 40 867’', '', '2020-03-25'),
(31, 1, 2, 2, 7, 1, 37990, '2020-03-18', 'Pago Servicio Publico - Codensa $ 37 990’', '', '2020-03-25'),
(32, 1, 2, 2, 6, 1, 9800, '2020-03-18', 'Pago Servicio Publico - GAS $ 9 800’', '', '2020-03-25'),
(33, 1, 3, 2, 6, 1, 26780, '2020-03-05', 'ComProbante 000000379 GAS NATURAL $ 82 160’', '', '2020-03-29'),
(34, 1, 3, 2, 6, 1, 77220, '2020-03-29', 'Pago Servicio Publico Gas - AcaPulco  $ 77 220’', '', '2020-03-29'),
(35, 1, 3, 1, 1, 1, 1013000, '2020-03-30', 'Pago ImPuesto Predial - AcaPulco $ 1 013 000 - # Referencia 000 000 521', '', '2020-03-30'),
(36, 1, 3, 2, 5, 1, 115550, '2020-03-31', 'Pago Servicio Publico Agua - AcaPulco $ 115 550 # ref :  000000523’', '', '2020-04-04'),
(37, 1, 2, 1, 2, 1, 164700, '2020-04-13', 'Pago Administracion APartamento 11 701 - $ 164 700’', '', '2020-04-13'),
(38, 1, 3, 1, 2, 1, 309500, '2020-04-13', 'Pago Administracion Interior 2 APrtamento 202 - $ 309 500 Valor: $309.500,00', '', '2020-04-13'),
(39, 1, 2, 2, 6, 1, 30830, '2020-04-18', 'Pago Servicio Publico Mosquera - $ 30 830 # ref :  709157803042020’', '', '2020-04-18'),
(40, 1, 2, 2, 9, 1, 85400, '2020-04-04', 'Pago Servicio PÃºblico -  Claro Hogar - Mosquera $ 85 400 # ref: 000000534', '', '2020-04-19'),
(41, 1, 3, 2, 7, 1, 102970, '2020-04-26', 'Pago Servicio PÃºblico Energia $ 102 970', '', '2020-04-26'),
(42, 1, 3, 2, 6, 1, 29250, '2020-04-26', 'Pago Servicio Publico - GAS $ 29 250', '', '2020-04-26'),
(43, 1, 2, 2, 5, 1, 116920, '2020-05-04', 'Pago Servicio Publico Agua - 0038020 - $ 116 920', '', '2020-05-04'),
(44, 1, 2, 1, 2, 1, 164700, '2020-05-07', 'Pago Administracion Torre 11, aPto 701 $ 164 700', '', '2020-05-07'),
(45, 1, 3, 1, 2, 1, 209500, '2020-05-09', 'Pago ImP Administracion Conjunto residencial AcaPuloc 2 202 $ 209 500', '', '2020-05-09'),
(46, 1, 2, 2, 7, 2, 14500, '2020-05-14', 'Pago Servicio Publico - Codensa $ 14 500', '../static/img/img-bills/05.21.20-19-05.19.20-11mosquera.jpeg', '2020-05-21'),
(47, 1, 2, 2, 6, 2, 2320, '2020-05-11', 'Pago Servicio Publico - GAS $ 2 320', '../static/img/img-bills/05.21.20-80-05.19.20-40Mosquera.jpeg', '2020-05-21'),
(48, 1, 2, 2, 9, 2, 34489, '2020-05-16', 'Pago Servicio Publico - Movistar Movil Television $ 34 489', '../static/img/img-bills/05.21.20-71-05.19.20-43-movistar.jpeg', '2020-05-21'),
(49, 1, 2, 2, 9, 2, 97660, '2020-05-14', 'Pago Servicio Publico - ETB  $ 117 400’', '../static/img/img-bills/05.21.20-28-05.19.20-48ETB.jpeg', '2020-05-21'),
(50, 1, 2, 2, 9, 2, 84900, '2020-05-14', 'Pago Servicio Publico - CLARO Television $ 84 900', '../static/img/img-bills/05.21.20-20-05.19.20-56Internet.jpeg', '2020-05-21'),
(51, 1, 3, 2, 6, 3, 103380, '2020-05-20', 'Pago Servicio Publico - ENERGIA - ACAPULCO  $ 103 380', '../static/img/img-bills/05.21.20-33-05.20.20-74-63d06378-ac0a-4afc-a784-6721c75aab5f.jpeg', '2020-05-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `nombre`) VALUES
(1, 'PSE'),
(2, 'Efectivo'),
(3, 'Tarjeta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `username`, `contrasena`, `email`, `fecha`) VALUES
(1, 'Juan Pablo', 'Ramirez', 'ciscojuan', 'Harcov_CODMW3', 'ciscojuan@gmail.com', '2019-09-15'),
(2, 'Jorge Alejandro', 'Ramirez', 'ryukimarukun', 'Dragon$93', 'correodejorge93@gmail.com', '2019-09-16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria_concepto` (`concepto_id`);

--
-- Indices de la tabla `concepto`
--
ALTER TABLE `concepto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entrada_usuario` (`usuario_id`),
  ADD KEY `fk_entrada_bien` (`bien_id`),
  ADD KEY `fk_entrada_concepto` (`concepto_id`),
  ADD KEY `fk_entrada_categoria` (`categoria_id`),
  ADD KEY `fk_entrada_pago` (`pago_id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bien`
--
ALTER TABLE `bien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `concepto`
--
ALTER TABLE `concepto`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `fk_categoria_concepto` FOREIGN KEY (`concepto_id`) REFERENCES `concepto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `fk_entrada_bien` FOREIGN KEY (`bien_id`) REFERENCES `bien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_entrada_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_entrada_concepto` FOREIGN KEY (`concepto_id`) REFERENCES `concepto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_entrada_pago` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_entrada_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
