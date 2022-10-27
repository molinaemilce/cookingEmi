-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2022 a las 18:39:26
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
-- Base de datos: `tabla1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `correo`, `mensaje`) VALUES
(1, 'emimi', 'molina', 'asdasd@gmail.com', 'asdasdasdasdasd'),
(2, 'asdasdasd', 'asdasdasdd', 'asdasd@gmail.com', 'asas'),
(3, 'emi2', 'asdasd', 'asdasd@gmail.com', 'dasdsad'),
(4, 'emi5', 'moolina', 'asdsa@gmail.com', 'asda'),
(5, 'luci', 'asdsad', 'asdasd@gmail.com', 'assas'),
(6, 'asd', 'asd', 'asd@gmail.com', 'asdsad'),
(7, 'asd', 'asd', 'asdasd@gmail.com', 'asdsad'),
(8, 'asdasd', 'sssss', 'hola@gmail.com', 'asdsad'),
(9, 'juliana', 'asdsad', 'sdad@gmail.com', 'sadasd'),
(10, 'Emilce10', 'Molina10', 'asdasda@gmail.com', 'dasdasdasdas'),
(11, 'Andres', 'Molina', 'sdada@gmail.com', 'holas'),
(12, 'Maria', 'Huari', 'asdasd@gmail.com', 'asdasd'),
(13, 'Julian', 'Molina', 'asdasd@gmail.coma', 'dasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `ingredientes` varchar(300) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id`, `titulo`, `duracion`, `ingredientes`, `descripcion`) VALUES
(2, 'Bocaditos de chocolinas', '30min', '250 g de Chocolinas Originales\r\n250 g de dulce de leche repostero\r\nGranas de colores', '1. Procesar las Chocolinas Originales y mezclar con el dulce de leche repostero.\r\n2. Dividir la preparación en porciones y formar pelotitas.\r\n3. Rebozar rápidamente en las granas hasta cubrir.'),
(3, 'Muffins', '1h 15min', '210 g de harina\r\n20 g de cacao amargo\r\n1 ½ cucharadita de polvo para hornear\r\n1 cucharadita de bicarbonato de sodio\r\n1 taza de aceite neutro\r\n200 g de azúcar\r\n1 huevo', '1. Tamizar los ingredientes secos.\r\n2. Añadir el aceite, el azúcar, el huevo, la yema, la esencia de vainilla y la leche y mezclar bien.\r\n3. Disponer pirotines en una placa para muffins. Colocar en la base de cada pirotín una Mini Chocolina y rellenar hasta sus ¾ partes con la preparación de muffins.\r\n4. Cocinar en horno precalentado a temperatura media (180 ºC) durante 20 minutos aproximadamente.\r\n5. Retirar, dejar enfriar y decorar con dulce de leche repostero, salsa de chocolate y Chocolinas ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `recetas`
--
ALTER TABLE `recetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
