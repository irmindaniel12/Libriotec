-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 28-01-2021 a las 11:27:26
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `publicacion_id` int(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_likes_user` (`user_id`),
  KEY `fk_likes_publicacion` (`publicacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

DROP TABLE IF EXISTS `notificacion`;
CREATE TABLE IF NOT EXISTS `notificacion` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_creacion_id` int(11) NOT NULL,
  `nombre_usu_pedido` varchar(255) NOT NULL,
  `nombre_libro` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

DROP TABLE IF EXISTS `publicaciones`;
CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` text,
  `genero` varchar(255) DEFAULT NULL,
  `editorial` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `fecha_publicacion` datetime DEFAULT NULL,
  `numero_paginas` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_publicacion_usuario` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `user_id`, `titulo`, `image_path`, `description`, `genero`, `editorial`, `autor`, `fecha_publicacion`, `numero_paginas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Juego de tronos libro canción de hielo y fuego 1', '161185385641yADQ1wEhL._SX319_BO1,204,203,200_.jpg', 'Juego de tronos es una novela de fantasía escrita por el autor estadounidense George R. R. Martin en 1996 y ganadora del premio Locus a la mejor novela de fantasía en 1997. Se trata de la primera entrega de la serie de gran popularidad Canción de hielo y fuego', 'Fántastica', 'El Patito Juan', 'George R. R. Martin', '1995-08-01 00:00:00', 694, '2021-01-28 17:10:57', '2021-01-28 17:10:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Rol` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role_id` int(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `ApellidoPaterno` varchar(200) DEFAULT NULL,
  `ApellidoMaterno` varchar(200) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `Telefono` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Estatus_Activo` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `ApellidoPaterno`, `ApellidoMaterno`, `nickname`, `Telefono`, `email`, `password`, `image_path`, `Estatus_Activo`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, NULL, 'Yazmin', 'Dzib', 'Cauich', 'Yaz', 123123, 'yazmin@yazmin.com', '$2y$10$EC9YJgqL3sjLDzQZ1QpzNOe/CGMgxvLYKLm42xeo6D/zQ/f9D9d3G', NULL, NULL, '2021-01-28 17:05:30', '2021-01-28 17:05:30', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `fk_likes_publicacion` FOREIGN KEY (`publicacion_id`) REFERENCES `publicaciones` (`id`),
  ADD CONSTRAINT `fk_likes_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD CONSTRAINT `fk_publicacion_usuario` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_usuario_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
