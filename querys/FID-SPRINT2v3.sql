-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2018 a las 05:34:41
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
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `product_code`, `product_type`, `size`, `color`, `is_popular`, `price`, `price_list`, `quantity`, `description`, `image`, `categories_id`, `subcategories_id`) VALUES
(13, 'Remera IAO', 'REMMEN0002', '1', '32', 'Gris', 1, 700, 750, 10, 'Remera Chomba con rallas', 'images/prod_img/5bbeb04e1b5da.jpg', 1, 4),
(14, 'Pantalon', 'PANTSLEVIS001', '2', '32', 'Azul', 1, 1500, 1600, 10, 'Pantalon Jean', 'images/prod_img/5bbeb2b80435b.jpg', 1, 1),
(15, 'Pantalon', 'PANTSLEVIS002', '2', '', 'Negro', 1, 1500, 1600, 10, 'Pantalon Jean Mujer', 'images/prod_img/5bbeb2f30bc0f.jpg', 1, 1),
(16, 'Buzo', 'BUZVANSW001', '2', 'M', 'Gris', 1, 1200, 1500, 12, 'Buzo Vans Mujer', 'images/prod_img/5bbeb3b08ecf2.jpg', 1, 2),
(17, 'Overoll', 'OVCH001', '3', 'S', 'Verde', 1, 800, 1000, 12, 'Overoll de niÃ±e', 'images/prod_img/5bbeb4352b93f.jpg', 1, 2),
(18, 'Enterito de bebe', 'ENTCHD0011', '3', 'S', 'Gris', 1, 1200, 1500, 12, 'Conjunto de niÃ±o', 'images/prod_img/5bbeb49771854.jpg', 1, 6),
(19, 'Pantalon de niÃ±o', 'PANTSCHD001', '3', 'S', 'Amarillo', 1, 1000, 1100, 13, 'Pantalon de niÃ±o con artilugios', 'images/prod_img/5bbeb4ddef830.jpg', 1, 1),
(20, 'Remera manga larga', 'REMWMN002', '2', 'S', 'Blanco', 1, 1500, 1800, 12, 'Remera con agujeros llamativos para mujer xD', 'images/prod_img/5bbeb5402078e.jpg', 1, 4),
(21, 'Sandalias deportivas', 'SANHOM001', '1', '42', 'Negro', 1, 1800, 2000, 12, 'Sandalias Deportivas SuperResistentes', 'images/prod_img/5bbeb5b7e7f0e.jpg', 2, 13),
(22, 'Campera de Cuero', 'CAMPMEN001', '1', '34', 'Negro', 1, 3000, 3500, 10, 'Campera de cuero ecologico hombre', 'images/prod_img/5bbeb61d0f019.jpg', 1, 6),
(23, 'Mochila XYZ', 'ACCMOCH001', '1', 'Unico', 'Negro', 1, 1400, 1500, 23, 'Mochila XYZ DeporXtrem', 'images/prod_img/5bbeb6ff06fc3.jpg', 3, 14),
(24, 'Zapatillas NuevaLuna', 'CALZAP001', '2', '34', 'Rojo', 1, 1500, 1700, 10, 'Zapatillas Rojas Nva Luna', 'images/prod_img/5bbeb74e18a8f.jpg', 2, 11);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
