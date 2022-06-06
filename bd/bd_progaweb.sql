-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2022 a las 19:02:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_progaweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `nombreimagen` varchar(50) NOT NULL,
  `rutaimg` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`nombreimagen`, `rutaimg`, `nombre`, `precio`, `id`, `descripcion`) VALUES
('757528005047-300x300.png', 'img/757528005047-300x300.png', 'Takis Fuego', 5500, 1001, 'Takis Fuego 1 ONZA Mexicano'),
('coronitas.JPG', 'img/coronitas.JPG', 'Cerveza coronita x6und', 14900, 1002, 'Cerveza coronita x6und x210ml c-u '),
('jet.png', 'img/jet.png', 'Caja Chocolatinas JET', 25000, 1011, 'Caja de chocolatinas JET, siempre se encuentra un stiker en el interior!'),
('7702189053848.jpg', 'img/7702189053848.jpg', 'Margarita Papas Tomate', 3800, 1004, 'Cantidad 105g, Hecho en Colombia'),
('nucita.jpg', 'img/nucita.jpg', 'Nucita x12', 4700, 1005, 'Crema con sabor a leche, chocolate y nueces, por 12 unidades, 168 g.'),
('para-tienda-virtual-2021-68.png', 'img/para-tienda-virtual-2021-68.png', 'Pulparindo Natural', 15000, 1006, 'Contenido por 20 Unidades, dulces Mexicanos'),
('choclito.png', 'img/choclito.png', 'Choclitos Limón ', 4000, 1007, 'Cantidad 38g, Hecho en Colombia'),
('gatorade.png', 'img/gatorade.png', 'HIDRATANTE GATORADE FRUTAS TROPICALES', 3000, 1008, 'BEBIDA HIDRATANTE GATORADE 591 ML, FRUTOS TROPICALES'),
('jumbo.jpg', 'img/jumbo.jpg', 'Jumbo mini x24', 10000, 1009, 'Chocolate con leche y maní, por 24 unidades, 432 g.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
