-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2018 a las 01:35:49
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fid`
--
CREATE DATABASE IF NOT EXISTS `fid` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fid`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `categories`
--

TRUNCATE TABLE `categories`;
--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Indumentaria'),
(2, 'Calzado'),
(3, 'Accesorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_code` varchar(45) NOT NULL,
  `product_type` varchar(45) NOT NULL,
  `size` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `is_popular` tinyint(4) DEFAULT NULL,
  `price` float NOT NULL,
  `price_list` float DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `subcategories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `products`
--

TRUNCATE TABLE `products`;
--
-- Volcado de datos para la tabla `products`
--

--  INSERT INTO `products` (`id`, `name`, `product_code`, `product_type`, `size`, `color`, `is_popular`, `price`, `price_list`, `quantity`, `description`, `image`, `categories_id`, `subcategories_id`) VALUES
-- -- (1, 'TEST', 'TEST111', 'HOMBRE', '12', 'BLANCO', 1, 100, 129, 3, 'HOLA MUNDO', NULL, 1, 2),
-- (2, '123', '123', '2', '1231123', '123', NULL, 1, 1, 1, '122', 'images/prod_img/5bbe6b0a8f1ab.jpg', 1, 4),
-- (3, 'uy12t3u132', '123123|', '3', '1231234', '1231', NULL, 12312, 123123, 2, 'bjksdafbasdb', 'images/prod_img/5bbe6d13b87d5.jpg', 1, 4),
-- (4, 'uy12t3u132', '123123|', '3', '1231234', '1231', NULL, 12312, 123123, 2, 'bjksdafbasdb', 'images/prod_img/5bbe6d476de28.jpg', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purcharse_orders`
--

DROP TABLE IF EXISTS `purcharse_orders`;
CREATE TABLE `purcharse_orders` (
  `id` int(11) NOT NULL,
  `total` float DEFAULT NULL,
  `purcharse_order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='		';

--
-- Truncar tablas antes de insertar `purcharse_orders`
--

TRUNCATE TABLE `purcharse_orders`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purcharse_order_details`
--

DROP TABLE IF EXISTS `purcharse_order_details`;
CREATE TABLE `purcharse_order_details` (
  `id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `price` float NOT NULL,
  `products_id` int(11) NOT NULL,
  `purcharse_orders_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `purcharse_order_details`
--

TRUNCATE TABLE `purcharse_order_details`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `subcategories`
--

TRUNCATE TABLE `subcategories`;
--
-- Volcado de datos para la tabla `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `categories_id`) VALUES
(1, 'Pantalones', 1),
(2, 'Buzos', 1),
(3, 'Bermudas', 1),
(4, 'Remeras', 1),
(5, 'Chombas', 1),
(6, 'Conjuntos', 1),
(7, 'Camisas', 1),
(8, 'Zapatos', 2),
(9, 'Botas', 2),
(10, 'Borcegos', 2),
(11, 'Zapatillas', 2),
(12, 'Mocasines', 2),
(13, 'Sandalias', 2),
(14, 'Mochilas', 3),
(15, 'Bolsos', 3),
(16, 'Gorras', 3),
(17, 'Medias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `types`
--

TRUNCATE TABLE `types`;
--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Ninio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_users`
--

DROP TABLE IF EXISTS `type_users`;
CREATE TABLE `type_users` (
  `id` int(11) NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `type_users`
--

TRUNCATE TABLE `type_users`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `avatar_image` varchar(200) DEFAULT NULL,
  `type_users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncar tablas antes de insertar `users`
--

TRUNCATE TABLE `users`;
--
-- Volcado de datos para la tabla `users`
--

-- INSERT INTO `users` (`id`, `email`, `password`, `name`, `last_name`, `telephone`, `address`, `avatar_image`, `type_users_id`) VALUES
-- (1, 'abc@abc.com', 'abc', 'abc', NULL, NULL, NULL, NULL, 1),
-- (2, 'abc@abc.com', 'abc', 'abc', NULL, NULL, NULL, NULL, 1),
-- (3, 'test2@abc.com', 'abc', 'test2', NULL, NULL, NULL, NULL, 1),
-- (4, 'abcd@a.com', 'abc', 'test3', NULL, NULL, NULL, NULL, 1),
-- (5, '', '', NULL, NULL, NULL, NULL, NULL, 1),
-- (6, '', '', NULL, NULL, NULL, NULL, NULL, 1),
-- (7, 'abc@abc.com', 'abc', 'testlocal', NULL, NULL, NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purcharse_orders`
--
ALTER TABLE `purcharse_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `purcharse_order_details`
--
ALTER TABLE `purcharse_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `purcharse_orders`
--
ALTER TABLE `purcharse_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `purcharse_order_details`
--
ALTER TABLE `purcharse_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
