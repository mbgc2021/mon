-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2021 a las 05:49:32
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biometria_hematica`
--

CREATE TABLE `biometria_hematica` (
  `id_biometria` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_estudio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `Eritrocitos` float NOT NULL,
  `Hemoglobina` float NOT NULL,
  `Hematocrito` float NOT NULL,
  `VolumenGlobularM` float NOT NULL,
  `HemogGlobularM` float NOT NULL,
  `ConcMediaHbGlob` float NOT NULL,
  `AnchoDistEritrocitos` float NOT NULL,
  `Plaquetas` float NOT NULL,
  `VolumenPlaqMedio` float NOT NULL,
  `Leucocitos` float NOT NULL,
  `Segmentados1` float NOT NULL,
  `Linfocitos1` float NOT NULL,
  `Monocitos1` float NOT NULL,
  `Eosinofilos1` float NOT NULL,
  `Basofilos1` float NOT NULL,
  `Segmentados2` float NOT NULL,
  `Linfocitos2` float NOT NULL,
  `Monocitos2` float NOT NULL,
  `Eosinofilos2` float NOT NULL,
  `Basofilos2` float NOT NULL,
  `metodo` varchar(500) NOT NULL,
  `muestra` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriasest`
--

CREATE TABLE `categoriasest` (
  `id_categoriaEst` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombreCategoria` varchar(150) DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoriasest`
--

INSERT INTO `categoriasest` (`id_categoriaEst`, `id_usuario`, `nombreCategoria`, `fechaCaptura`) VALUES
(1, 6, 'Estudio', '2021-01-20'),
(2, 6, 'Perfiles', '2021-01-20'),
(3, 6, 'Analito', '2021-01-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cita` datetime NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `apellidoPat` varchar(200) DEFAULT NULL,
  `apellidoMat` varchar(200) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `emailPersonal` varchar(50) DEFAULT NULL,
  `emailMedico` varchar(50) DEFAULT NULL,
  `medico` varchar(200) DEFAULT NULL,
  `cause` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_usuario`, `cita`, `nombre`, `apellidoPat`, `apellidoMat`, `fechaNacimiento`, `edad`, `sexo`, `telefono`, `direccion`, `emailPersonal`, `emailMedico`, `medico`, `cause`) VALUES
(21, 2, '2021-01-27 07:52:00', 'FERNANDOO', 'GOMEZ', 'CORTEZ', '1959-06-18', 61, 'masculino', '5565185010', 'ROSAS#20 JARDINES', 'FDGOCO', 'DR.@GMAIL.COM', 'a quien corresponda:', '---'),
(22, 2, '2021-01-28 07:02:00', 'ULISES', 'JIMENEZ', 'MARTINEZ', '1991-12-30', 29, 'masculino', '5532745309', 'ROSAS', 'mbgc@gmail.xom', 'mb@gmail.com', 'a quien corresponda:', '---'),
(24, 2, '2021-02-02 07:23:00', 'MARIA DEL SOCORROS', 'DE LA CRUZ ', 'SOTO ', '1959-10-26', 61, 'femenino', '5514889326', 'VIOLETAS20', 'MADELSOCOCS@GMAIL.COM', 'FR@GMAIL.COM', 'a quien corresponda:', 'SANGRE'),
(25, 2, '2021-01-26 07:51:00', 'FERNANDO DE JESUS', 'GOMEZ', 'DE LA CRUZ', '1989-08-22', 31, 'masculino', '5563306017', 'GIRASOL', 'FJGC@GMAIIL.COM', 'FJ@GMAIIL.COM', 'a quien corresponda:', 'SANGRE'),
(26, 2, '2021-01-29 07:55:00', 'MARIA', 'LUNA', 'G', '1995-06-15', 25, 'femenino', '4242', '4242', 'ffdf', 'dfdfd', 'a quien corresponda:', 'SANGRE'),
(27, 2, '2021-01-28 08:00:00', 'GABRIELA', 'LOPEZ', 'MARTINEZ', '1992-03-17', 28, 'femenino', '5574896145', 'LINDAVISTA', 'monse_3114@hotmail.com', 'monse_3114@hotmail.com', 'a quien corresponda:', '---'),
(28, 2, '2021-01-28 07:51:00', 'HILDA', 'GOMEZ', 'CORTEZ', '0000-00-00', 1969, 'femenino', '553481278', 'PLAYA LARGA', 'ALGO', 'ALGO2', 'a quien corresponda:', 'DSDSDS'),
(29, 2, '2011-08-19 13:45:00', 'SOFIA ', 'GOMZ', 'CORTEZ', '0000-00-00', 1965, 'femenino', '7775666562213', 'LAS TUNAS', 'sofiasgomez@gmail.com', 'dra@gmail.com', 'Guadalupe Hernandez', 'sangre'),
(30, 9, '2021-02-01 07:01:00', 'MONSERRAT B', 'GOMEZ', 'DE LA CRUZ', '0000-00-00', 1991, 'femenino', '5532745309', 'ROSAS', 'monse_bgc@gmail.com', 'monse_3114@hotmail.com', 'a quien corresponda:', 'sangre'),
(31, 9, '2011-09-01 07:30:00', 'DAYLINA', 'YUNHUEN', 'MAGAÑA', '0000-00-00', 1991, 'femenino', '5558484884', 'DALIAS #11', 'DAY@GMAIL.COM', 'DAY_1510@GMAIL.COM', 'a quien corresponda:', 'SANGRE'),
(32, 9, '2011-08-19 13:45:00', 'FRANCISCO', 'GOMEZ', 'HERNANDEZ', '0000-00-00', 1959, 'masculino', '5454545454', 'SAN LUIS', 'ALGO', 'ALGO2', 'a quien corresponda:', 'FDFDF'),
(33, 9, '2011-08-19 13:45:00', 'PATRICIA', 'v', 's', '0000-00-00', 1965, 'femenino', '4646464646', 'dlais', 'p', 'atyt', 'a quien corresponda:', 'vxv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `id_estudio` int(11) NOT NULL,
  `id_categoriaEst` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `clave` varchar(200) DEFAULT NULL,
  `nombreEst` varchar(200) DEFAULT NULL,
  `area` varchar(500) DEFAULT NULL,
  `tipo` varchar(500) DEFAULT NULL,
  `recipiente` varchar(500) DEFAULT NULL,
  `metodo` varchar(500) DEFAULT NULL,
  `tecnica` varchar(500) DEFAULT NULL,
  `condicionPaciente` varchar(500) DEFAULT NULL,
  `aplicaciones` varchar(500) DEFAULT NULL,
  `aceptaUrgencias` varchar(50) DEFAULT NULL,
  `numDiasProcUrgenteU` varchar(50) DEFAULT NULL,
  `numDiasProcUrgenteN` varchar(50) DEFAULT NULL,
  `costo` float NOT NULL,
  `fechaCaptura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`id_estudio`, `id_categoriaEst`, `id_usuario`, `clave`, `nombreEst`, `area`, `tipo`, `recipiente`, `metodo`, `tecnica`, `condicionPaciente`, `aplicaciones`, `aceptaUrgencias`, `numDiasProcUrgenteU`, `numDiasProcUrgenteN`, `costo`, `fechaCaptura`) VALUES
(7, 1, 2, 'EGO', 'EXAMEN GENERAL DE ORINA', 'Uroanálisis', 'Orina reciente', 'FRASCO ORINA', 'Varios', 'Varios', 'LA PRIMERA ORINA DE LA MAÑANA', '-', 'si', '1', '1', 50, '2021-01-28'),
(8, 1, 2, 'GLCAP', 'GLUCOSA CAPILAR', 'Química Sanguínea', 'Suero', 'TUBO ROJO', 'Varios', 'Varios', '-', '-', 'si', '1', '1', 20, '2021-01-28'),
(9, 1, 2, 'BH', 'BIOMETRIA HEMATICA', 'Hematología', 'Sangre Total', 'TUBO LILA', 'Varios', 'Varios', 'AYUNO DE PREFERENCIA', 'SANGRE CON EDTA', 'si', '0', '0', 100, '2021-01-28'),
(10, 1, 2, 'QS04', 'QUIMICA SANGUINEA DE 4 ELEMENTOS ', 'Química Sanguínea', 'Suero', '', 'Varios', 'Varios', 'AYUNO DE PREFERENCIA', '-', 'si', '0', '0', 150, '2021-01-28'),
(11, 1, 2, 'QS06', 'QUIMICA SANGUINEA DE 6 ELEMENTOS', 'Química Sanguínea', 'Suero', 'TUBO ROJO', 'Varios', 'Varios', 'AYUNO DE PREFERENCIA', '-', 'si', '0', '0', 420, '2021-01-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica4`
--

CREATE TABLE `quimica4` (
  `id_quimica4` int(11) NOT NULL,
  `id_estudio` int(11) NOT NULL,
  `id_categoriaEst` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_nivel_a_b` int(11) NOT NULL,
  `Glucosa` float NOT NULL,
  `Urea` float NOT NULL,
  `Creatinina` float NOT NULL,
  `AcidoUrico` float NOT NULL,
  `metodo` varchar(500) NOT NULL,
  `muestra` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica6`
--

CREATE TABLE `quimica6` (
  `id_quimica6` int(11) NOT NULL,
  `id_estudio` int(11) NOT NULL,
  `id_categoriaEst` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_nivel_a_b` int(11) NOT NULL,
  `Glucosa` float NOT NULL,
  `Urea` float NOT NULL,
  `Creatinina` float NOT NULL,
  `AcidoUrico` float NOT NULL,
  `Colesteroltotal` float NOT NULL,
  `Trigliceridos` float NOT NULL,
  `metodo` varchar(500) NOT NULL,
  `muestra` varchar(500) NOT NULL,
  `observaciones` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidoPat` varchar(50) DEFAULT NULL,
  `apellidoMat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tipoUsuario` varchar(200) DEFAULT NULL,
  `password` tinytext DEFAULT NULL,
  `cedulaProfesional` varchar(200) DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidoPat`, `apellidoMat`, `email`, `tipoUsuario`, `password`, `cedulaProfesional`, `fechaCaptura`) VALUES
(4, 'Fernando', 'gomez', 'Cortez', 'fdogoco', 'Laboratorista', '011c945f30ce2cbafc452f39840f025693339c42', '55868338', '2021-01-17'),
(9, 'admin', 'admin', 'admin', 'admin', 'Admintrador', 'd033e22ae348aeb5660fc2140aec35850c4da997', '-', '2021-01-29'),
(10, 'Gabriela', 'Lopez', 'M', 'gaby', 'Recepcionista', '011c945f30ce2cbafc452f39840f025693339c42', '-', '2021-01-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_estudio` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `id_cliente`, `id_estudio`, `id_usuario`, `precio`, `fechaCompra`) VALUES
(1, 20, 3, 2, 130, '2021-01-26'),
(1, 20, 4, 2, 320, '2021-01-26'),
(2, 22, 4, 2, 320, '2021-01-26'),
(3, 20, 3, 2, 130, '2021-01-26'),
(3, 20, 4, 2, 320, '2021-01-26'),
(3, 20, 6, 2, 190, '2021-01-26'),
(4, 21, 6, 2, 190, '2021-01-26'),
(5, 25, 4, 2, 320, '2021-01-26'),
(6, 17, 3, 2, 130, '2021-01-26'),
(7, 28, 3, 2, 130, '2021-01-27'),
(7, 28, 6, 2, 190, '2021-01-27'),
(8, 27, 4, 2, 320, '2021-01-27'),
(9, 17, 3, 2, 130, '2021-01-27'),
(10, 20, 4, 2, 320, '2021-01-27'),
(11, 20, 4, 2, 320, '2021-01-27'),
(12, 20, 3, 2, 130, '2021-01-28'),
(13, 21, 9, 2, 100, '2021-01-28'),
(14, 22, 9, 2, 100, '2021-01-28'),
(15, 28, 11, 2, 420, '2021-01-28'),
(15, 28, 8, 2, 20, '2021-01-28'),
(16, 29, 10, 2, 150, '2021-01-28'),
(17, 27, 11, 2, 420, '2021-01-28'),
(18, 27, 11, 2, 420, '2021-01-29'),
(19, 30, 7, 9, 50, '2021-01-31'),
(20, 32, 11, 9, 420, '2021-01-31'),
(21, 33, 10, 9, 150, '2021-02-01'),
(22, 24, 9, 9, 100, '2021-02-01'),
(23, 25, 8, 9, 20, '2021-02-01'),
(24, 26, 10, 9, 150, '2021-02-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `biometria_hematica`
--
ALTER TABLE `biometria_hematica`
  ADD PRIMARY KEY (`id_biometria`);

--
-- Indices de la tabla `categoriasest`
--
ALTER TABLE `categoriasest`
  ADD PRIMARY KEY (`id_categoriaEst`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`id_estudio`);

--
-- Indices de la tabla `quimica4`
--
ALTER TABLE `quimica4`
  ADD PRIMARY KEY (`id_quimica4`);

--
-- Indices de la tabla `quimica6`
--
ALTER TABLE `quimica6`
  ADD PRIMARY KEY (`id_quimica6`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoriasest`
--
ALTER TABLE `categoriasest`
  MODIFY `id_categoriaEst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `id_estudio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
