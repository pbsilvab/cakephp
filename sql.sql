-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-04-2019 a las 11:23:07
-- Versión del servidor: 5.7.25-0ubuntu0.18.04.2-log
-- Versión de PHP: 7.2.15-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'hola', '2019-04-04 20:05:44'),
(2, 'nueva', '2019-04-04 20:14:57'),
(3, 'otra', '2019-04-04 20:15:01'),
(4, 'hola x ', '2019-04-04 20:17:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `content`, `user_id`, `post_id`, `created_at`) VALUES
(1, 'sdfsdf', 1, 1, '2019-04-05 13:15:10'),
(2, 'dsdd', 1, 1, '2019-04-05 13:16:07'),
(3, 'adsada', 1, 1, '2019-04-05 13:27:12'),
(4, 'asdasd', 1, 2, '2019-04-05 13:27:19'),
(5, 'dasadasdasdasas', 1, 4, '2019-04-05 14:05:00'),
(6, 'sdsds', 1, 1, '2019-04-05 15:00:19'),
(7, 'dadddqq qe', 9, 1, '2019-04-08 20:01:14'),
(8, 'dqwddqqwd', 9, 6, '2019-04-08 20:01:18'),
(9, 'dwd', 9, 8, '2019-04-08 20:01:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `category_id`, `user_id`, `data`, `created_at`) VALUES
(1, 'Nueva Publicacion', NULL, 'Contenido de prueba', 1, 1, '', '2019-04-04 20:36:34'),
(2, 'otro post', NULL, 'contenido nuevo', 3, 1, '', '2019-04-04 20:41:46'),
(3, '', NULL, 'ssss', 2, 1, '', '2019-04-05 14:03:50'),
(4, 'dasdd', NULL, 'asdasda', 1, 1, '', '2019-04-05 14:04:44'),
(5, 'pruea de titulos', NULL, 'contenido', 1, 9, '', '2019-04-08 12:59:59'),
(6, 'eueu', NULL, 'lakspaiss', 1, 9, '', '2019-04-08 13:13:12'),
(7, 'asasdas', NULL, 'dasdasdas', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 13:42:47'),
(8, 'Nueva Publicacion 4', NULL, 'contenido ', 1, 9, 'null', '2019-04-08 14:59:55'),
(9, 'Nueva Publicacion 4', NULL, 'contenido ', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 15:00:14'),
(10, 'Nueva Publicacion 5', NULL, 'sfgs sdfs sdfsdf sdf sfs ', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:07:52'),
(11, 'Nueva Publicacion 5', NULL, 'sfgs sdfs sdfsdf sdf sfs ', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:08:32'),
(12, 'nueva-publicacion-5', NULL, 'sfgs sdfs sdfsdf sdf sfs ', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:13:01'),
(13, 'nueva-publicacion-5', NULL, 'sfgs sdfs sdfsdf sdf sfs ', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:13:15'),
(14, 'Nueva Publicacion 6', 'nueva-publicacion-6', 'sdsds sdsdsd sd sd', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:14:28'),
(15, 'Nueva Publicacion 78', 'nueva-publicacion-78', 'sdsdsd', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:17:24'),
(16, 'Nueva Publicacion 78', 'nueva-publicacion-78', 'sdsdsd', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:18:11'),
(17, 'Nueva Publicacion 78', 'nueva-publicacion-78', 'sdsdsd', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 18:18:46'),
(18, 'ssdsds', 'ssdsds', 'dsdsdsds', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 20:18:50'),
(19, 'ssdsds', 'ssdsds', 'dsdsdsds', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 20:23:24'),
(20, 'ssdsds', 'ssdsds', 'dsdsdsds', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-08 20:59:34'),
(21, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:18:03'),
(22, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:19:14'),
(23, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:19:47'),
(24, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:24:25'),
(25, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:25:05'),
(26, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:25:36'),
(27, 'asdasda sdasda', 'asdasda-sdasda', 'asdd dd dasdd d', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:32:11'),
(28, 'nuevo log', 'nuevo-log', 'comentario', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:33:13'),
(29, 'nuevo log listener', 'nuevo-log-listener', 'loglistener', 2, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:36:48'),
(30, 'nuevo log listener', 'nuevo-log-listener', 'loglistener', 2, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:37:36'),
(31, 'addas', 'addas', 'asdasd', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:38:00'),
(32, 'asa', 'asa', 'sasa', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:40:13'),
(33, 'sd', 'sd', 'sdf', 4, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:41:27'),
(34, 'adfsd', 'adfsd', 'sdfsdfs', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:42:41'),
(35, 'afa', 'afa', 'afasas', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:43:08'),
(36, 'dasd', 'dasd', 'asdasd', 1, 9, '{\"apple\":1234,\"boy\":2345,\"cat\":3456,\"dog\":4567,\"echo\":5678,\"fortune\":6789}', '2019-04-09 13:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','author','guest') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'Pedro Silva', 'pbsilvab@gmail.com', '$2a$10$XO7w3WgB7EOKo/Dq6XZEcOyoa5RSuDD8fOie11m43U1S31ERT1A8i', 'admin', '2019-04-05 15:44:18'),
(7, 'ppp', 'ppp@gmail.com', '$2a$10$rorPsvQECmVtlmRlL9wMlOdKdPfTy1QgJeGzEckDKE1QPu1rIITtS', 'author', '2019-04-05 18:54:54'),
(8, 'invitadp', 'guest@gmail.com', '$2a$10$86saaXvJxVqI96VBKDEB0e9oYDEXv/GAHaZcSJLXXnFpi0yfrYCYy', 'guest', '2019-04-05 18:55:29'),
(9, 'admin', 'admin@gmail.com', '$2a$10$y/cLOkY2cqnDjOVr/4TLpe0A0eIyQcoayS/8/5zXuNFBh0OfHRibC', 'admin', '2019-04-05 18:55:48'),
(10, '', '', '$2a$10$GBWYbgs/r.y9h4rG9debOOuffgrL3vrJvpjC04vAICcRU8Ttdx1k6', 'admin', '2019-04-05 20:22:32'),
(11, 'Pedro Silva', 'admin3@gmail.com', '$2a$10$oxhEdt18KV7BC5glkrRiY.IqYuYWygDc9cT10/inyBspAMYx0oNnO', 'admin', '2019-04-08 17:48:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;