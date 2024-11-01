-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2024 a las 18:36:55
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ajustes`
--

CREATE TABLE `ajustes` (
  `Id_ajust` int(255) NOT NULL,
  `Cod_ajust` varchar(500) NOT NULL,
  `Descripcion_ajust` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(500) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `desc_alma1` varchar(500) NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` text NOT NULL,
  `Tipo_Doc` varchar(500) NOT NULL,
  `produccion` int(255) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_doc` varchar(500) NOT NULL,
  `revisado` tinyint(1) NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` text NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id_almacen` int(255) NOT NULL,
  `sku_almacen` varchar(500) NOT NULL,
  `descrip_alma` text NOT NULL,
  `direccion_alma` text NOT NULL,
  `venta` tinyint(1) NOT NULL,
  `compra` tinyint(1) NOT NULL,
  `contable` tinyint(1) NOT NULL,
  `mobiliario` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `Id_art` int(255) NOT NULL,
  `sku_art` varchar(500) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `imagen` text NOT NULL,
  `imagen2` text NOT NULL,
  `imagen3` text NOT NULL,
  `tipo` text NOT NULL,
  `lote` varchar(500) NOT NULL,
  `seriales` int(255) NOT NULL,
  `categoria` text NOT NULL,
  `modelo` text NOT NULL,
  `linea` text NOT NULL,
  `sub_linea` text NOT NULL,
  `color` text NOT NULL,
  `item` text NOT NULL,
  `peso` decimal(10,0) NOT NULL,
  `referencia` text NOT NULL,
  `Registro_sanitario` text NOT NULL,
  `Presentacion` text NOT NULL,
  `Concentracion` text NOT NULL,
  `Laboratorio` text NOT NULL,
  `garantia` text NOT NULL,
  `piecubico` decimal(10,0) NOT NULL,
  `Proveedorprincipal` varchar(500) NOT NULL,
  `contacto_proveedor` varchar(300) NOT NULL,
  `procedencia` text NOT NULL,
  `ubicacion` text NOT NULL,
  `impuesto` decimal(10,0) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `ultimprecio` decimal(10,0) NOT NULL,
  `ultimocosto` decimal(10,0) NOT NULL,
  `primaria` text NOT NULL,
  `secundaria` text NOT NULL,
  `unidad_empaque` decimal(10,0) NOT NULL,
  `Cantidad_empaque` decimal(10,0) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aseguradora`
--

CREATE TABLE `aseguradora` (
  `id` int(255) NOT NULL,
  `sku_aseg` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `nombre_aseg` text NOT NULL,
  `direccion_ase` text NOT NULL,
  `telefono_ase` int(11) NOT NULL,
  `email_aseg` text NOT NULL,
  `f_fundacion` datetime NOT NULL,
  `ti_segu_ofrecido` text NOT NULL,
  `website` text NOT NULL,
  `nom_contacto` text NOT NULL,
  `cargo_contacto` text NOT NULL,
  `tlf_contacto` int(11) NOT NULL,
  `email_contacto` text NOT NULL,
  `rating_seguro` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(255) NOT NULL,
  `sku_caja` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificaciones`
--

CREATE TABLE `certificaciones` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Id_cita` int(255) NOT NULL,
  `cod_cita` varchar(500) NOT NULL,
  `DNI_citas` varchar(500) NOT NULL,
  `Nombre` varchar(500) NOT NULL,
  `Apellido` varchar(500) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `calendario` datetime NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `Direccion` text NOT NULL,
  `Motivoconsulta` text NOT NULL,
  `Seguromédico` tinyint(1) NOT NULL,
  `aseguradora` text NOT NULL,
  `id_póliza` int(255) NOT NULL,
  `enteroclínica` text NOT NULL,
  `recordatorios_mail` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(255) NOT NULL,
  `dni_clientes` varchar(500) NOT NULL,
  `Nombre` varchar(300) NOT NULL,
  `Apellido` varchar(300) NOT NULL,
  `pais` text NOT NULL,
  `ciudad` text NOT NULL,
  `distrito` text NOT NULL,
  `provincia` text NOT NULL,
  `Direccion` text NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `Privilegios` int(10) NOT NULL,
  `usu_login` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Pregunta1` text NOT NULL,
  `pregunta2` text NOT NULL,
  `respuesta1` text NOT NULL,
  `respuesta2` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `equipo_v` text NOT NULL,
  `etiqueta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`etiqueta`)),
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `N_intentos` int(100) NOT NULL,
  `img` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_nacimiento` datetime NOT NULL,
  `f_update` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `clinica_id` int(255) NOT NULL,
  `razon_social` text NOT NULL,
  `id_fiscal_cli` varchar(500) NOT NULL,
  `direccion1` text NOT NULL,
  `direccion2` text NOT NULL,
  `email` text NOT NULL,
  `web` text NOT NULL,
  `logo` text NOT NULL,
  `distrito` text NOT NULL,
  `provincia` text NOT NULL,
  `ciudad` text NOT NULL,
  `pais` text NOT NULL,
  `director_clinica` text NOT NULL,
  `sub_director` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `privilegios` int(20) NOT NULL,
  `impuestos1` decimal(10,0) NOT NULL,
  `impuestos2` decimal(10,0) NOT NULL,
  `impuestos3` decimal(10,0) NOT NULL,
  `impuestos4` decimal(10,0) NOT NULL,
  `impuestos5` decimal(10,0) NOT NULL,
  `impuestos6` decimal(10,0) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones_pago`
--

CREATE TABLE `condiciones_pago` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control_lotes`
--

CREATE TABLE `control_lotes` (
  `id_cnlote` int(255) NOT NULL,
  `control_lote` varchar(500) NOT NULL,
  `sku_art` varchar(500) NOT NULL,
  `nro_lote` varchar(500) NOT NULL,
  `tipo_doc` varchar(500) NOT NULL,
  `co_alma1` varchar(500) NOT NULL,
  `consecutivo` int(255) NOT NULL,
  `doc_num_s` varchar(500) NOT NULL,
  `doc_num_e` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_Doc` varchar(500) NOT NULL,
  `medidas` decimal(10,0) NOT NULL,
  `alto` decimal(10,0) NOT NULL,
  `ancho` decimal(10,0) NOT NULL,
  `mts2` decimal(10,0) NOT NULL,
  `unidad` decimal(10,0) NOT NULL,
  `empaque` decimal(10,0) NOT NULL,
  `contenido` decimal(10,0) NOT NULL,
  `observa` text NOT NULL,
  `Motivo` text NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distrito`
--

CREATE TABLE `distrito` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id` int(255) NOT NULL,
  `cod_colegiatura` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `estudio` text NOT NULL,
  `instituto` text NOT NULL,
  `titulo1` text NOT NULL,
  `f_inicio1` datetime NOT NULL,
  `f_fin1` datetime NOT NULL,
  `universidad` text NOT NULL,
  `titulo2` text NOT NULL,
  `f_inicio2` datetime NOT NULL,
  `f_fin2` datetime NOT NULL,
  `especialidad` text NOT NULL,
  `titulo3` text NOT NULL,
  `f_inicio3` datetime NOT NULL,
  `f_fin3` datetime NOT NULL,
  `posgrado` text NOT NULL,
  `titulo4` text NOT NULL,
  `f_inicio4` datetime NOT NULL,
  `f_fin4` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enteroclínica`
--

CREATE TABLE `enteroclínica` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_compra`
--

CREATE TABLE `factura_compra` (
  `Id_comp` int(255) NOT NULL,
  `Cod_comp` varchar(500) NOT NULL,
  `Descripcion_comp` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(500) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `DNI_proveedor` varchar(500) NOT NULL,
  `Nombre_proveedor` varchar(500) NOT NULL,
  `Direcion_clinica` varchar(500) NOT NULL,
  `Direcion_proveedor` text NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `descripcion_alma1` varchar(500) NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` varchar(500) NOT NULL,
  `Tipo_Doc` varchar(500) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_Doc` varchar(500) NOT NULL,
  `DNI_transporte` varchar(500) NOT NULL,
  `Nombre_trasporte` varchar(500) NOT NULL,
  `Tipo_Trasporte` text NOT NULL,
  `direccion_entrega` text NOT NULL,
  `vehiculo` varchar(500) NOT NULL,
  `placa` varchar(500) NOT NULL,
  `DNI_vendedor` varchar(500) NOT NULL,
  `Nombre_vendedor` varchar(500) NOT NULL,
  `forma_pag` varchar(500) NOT NULL,
  `nro_Pago` varchar(500) NOT NULL,
  `saldo_positivo` decimal(10,0) NOT NULL,
  `Saldo_negativo` decimal(10,0) NOT NULL,
  `impuesto` decimal(10,0) NOT NULL,
  `Tipo_Moineda` varchar(500) NOT NULL,
  `Tasa_bancaria` decimal(10,0) NOT NULL,
  `porc_descuento` decimal(10,0) NOT NULL,
  `porc_recarga` decimal(10,0) NOT NULL,
  `monto_dev` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `Campo1_Doc` decimal(10,0) NOT NULL,
  `Campo2_Doc` varchar(500) NOT NULL,
  `Campo3_Doc` varchar(500) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL,
  `f_pago` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_venta`
--

CREATE TABLE `factura_venta` (
  `Id_Fact` int(255) NOT NULL,
  `Cod_Fact` varchar(500) NOT NULL,
  `Descripcion_Fact` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(500) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `DNI_Cliente` varchar(500) NOT NULL,
  `Nombre_Cliente` varchar(500) NOT NULL,
  `Direcion_clinica` varchar(500) NOT NULL,
  `Direcion_cliente` text NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `descripcion_alma1` varchar(500) NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` varchar(500) NOT NULL,
  `Tipo_Doc` varchar(500) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_Doc` varchar(500) NOT NULL,
  `DNI_transporte` varchar(500) NOT NULL,
  `Nombre_trasporte` varchar(500) NOT NULL,
  `Tipo_Trasporte` text NOT NULL,
  `direccion_entrega` text NOT NULL,
  `vehiculo` varchar(500) NOT NULL,
  `placa` varchar(500) NOT NULL,
  `DNI_vendedor` varchar(500) NOT NULL,
  `Nombre_vendedor` varchar(500) NOT NULL,
  `forma_pag` varchar(500) NOT NULL,
  `nro_cobro` varchar(500) NOT NULL,
  `saldo_positivo` decimal(10,0) NOT NULL,
  `Saldo_negativo` decimal(10,0) NOT NULL,
  `impuesto` decimal(10,0) NOT NULL,
  `Tipo_Moineda` varchar(500) NOT NULL,
  `Moneda` decimal(10,0) NOT NULL,
  `Tasa_bancaria` decimal(10,0) NOT NULL,
  `porc_descuento` decimal(10,0) NOT NULL,
  `porc_recarga` decimal(10,0) NOT NULL,
  `vuelto` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `Campo1` varchar(500) NOT NULL,
  `Campo2` varchar(500) NOT NULL,
  `Campo3` varchar(500) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL,
  `f_cobro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `id_historia` int(255) NOT NULL,
  `DNI_pacientes` varchar(500) NOT NULL,
  `cod_historia` varchar(500) NOT NULL,
  `Nombre` varchar(300) NOT NULL,
  `Apellido` varchar(300) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `edad` varchar(300) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `celular` varchar(300) NOT NULL,
  `direccion` text NOT NULL,
  `pais` text NOT NULL,
  `provincia` text NOT NULL,
  `distrito` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` text NOT NULL,
  `tipo_sangre` varchar(30) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `nacinalidad` text NOT NULL,
  `G_hetario` text NOT NULL,
  `procesado` tinyint(1) NOT NULL,
  `fechaingreso` text NOT NULL,
  `familiar` text NOT NULL,
  `contacto` text NOT NULL,
  `servicio` text NOT NULL,
  `consultado` date NOT NULL,
  `antesedente` text NOT NULL,
  `hederitario` text NOT NULL,
  `afeccion` text NOT NULL,
  `nro_atencion` text NOT NULL,
  `talla` decimal(10,2) NOT NULL,
  `peso` decimal(10,2) NOT NULL,
  `peso_ideal` decimal(10,2) NOT NULL,
  `img` text NOT NULL,
  `diagnostico` text NOT NULL,
  `diagpatologico` text NOT NULL,
  `medicamentos` text NOT NULL,
  `sinooperaciones` tinyint(1) NOT NULL,
  `operaciones` text NOT NULL,
  `sinorespiracion` tinyint(1) NOT NULL,
  `respiracion` text NOT NULL,
  `sinotemperatura` tinyint(1) NOT NULL,
  `temperatura` text NOT NULL,
  `sinopresion` tinyint(1) NOT NULL,
  `tensiónalta` int(11) NOT NULL,
  `tensiónbaja` int(11) NOT NULL,
  `tensión_arterial` text NOT NULL,
  `sinosustancias` tinyint(1) NOT NULL,
  `sustancias` text NOT NULL,
  `fecha_consulta` text NOT NULL,
  `id_medico` text NOT NULL,
  `nombre_medico` text NOT NULL,
  `apellido_medico` text NOT NULL,
  `tratamiento` text NOT NULL,
  `seguimiento` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `status` text NOT NULL,
  `comentario` text NOT NULL,
  `documento1` text NOT NULL,
  `documento2` text NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `impuesto`
--

CREATE TABLE `impuesto` (
  `id_imp` int(255) NOT NULL,
  `sku_imp` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `tasa` decimal(10,2) NOT NULL,
  `impuesto1` decimal(10,2) NOT NULL,
  `impuesto2` decimal(10,2) NOT NULL,
  `impuesto3` decimal(10,2) NOT NULL,
  `impuesto4` decimal(10,2) NOT NULL,
  `impuesto5` decimal(10,2) NOT NULL,
  `impuesto6` decimal(10,2) NOT NULL,
  `impuesto7` decimal(10,2) NOT NULL,
  `impuesto8` decimal(10,2) NOT NULL,
  `impuesto9` decimal(10,2) NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `Campo4` text NOT NULL,
  `Campo5` text NOT NULL,
  `Campo6` text NOT NULL,
  `Campo7` text NOT NULL,
  `Campo8` text NOT NULL,
  `Campo9` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `f_emis` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(255) NOT NULL,
  `DNI_login` varchar(500) NOT NULL,
  `Nombre` varchar(300) NOT NULL,
  `Apellido` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `Privilegios` int(10) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `clave` varchar(500) NOT NULL,
  `Pregunta1` text NOT NULL,
  `pregunta2` text NOT NULL,
  `respuesta1` text NOT NULL,
  `respuesta2` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `N_intentos` int(100) NOT NULL,
  `img` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `DNI_login`, `Nombre`, `Apellido`, `correo`, `telefono`, `Privilegios`, `usu_login`, `clave`, `Pregunta1`, `pregunta2`, `respuesta1`, `respuesta2`, `status`, `campo1`, `campo2`, `campo3`, `N_intentos`, `img`, `f_registro`, `f_update`) VALUES
(1, '20493065', 'yorbin', 'molina', 'yorbinmolina2@gmail.com', '', 5, 'yorbin', 'rojo', '', '', '', '', 0, '', '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `id_lote` int(255) NOT NULL,
  `lote` varchar(500) NOT NULL,
  `sku_art` varchar(500) NOT NULL,
  `nro_lote` varchar(500) NOT NULL,
  `fec_lote` datetime NOT NULL,
  `revisado` tinyint(1) NOT NULL,
  `doc_num_s` varchar(500) NOT NULL,
  `doc_num_e` varchar(500) NOT NULL,
  `trasnfe` varchar(500) NOT NULL,
  `prec_vta1` decimal(10,0) NOT NULL,
  `prec_vta2` decimal(10,0) NOT NULL,
  `prec_vta3` decimal(10,0) NOT NULL,
  `prec_vta4` decimal(10,0) NOT NULL,
  `prec_vta5` decimal(10,0) NOT NULL,
  `ult_cos_un` decimal(10,0) NOT NULL,
  `ult_cos_om` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_Doc` varchar(500) NOT NULL,
  `cod_alma1` varchar(500) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `codigo_iso` text NOT NULL,
  `simbolo_moneda` varchar(50) NOT NULL,
  `tasa_cambio` decimal(10,2) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `pais` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivoconsulta`
--

CREATE TABLE `motivoconsulta` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_entrega`
--

CREATE TABLE `nota_entrega` (
  `Id_nde` int(255) NOT NULL,
  `Cod_nde` varchar(500) NOT NULL,
  `Descripcion_nde` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(501) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `DNI_Cliente` varchar(501) NOT NULL,
  `Nombre_Cliente` varchar(500) NOT NULL,
  `Direcion_clinica` text NOT NULL,
  `Direcion_cliente` text NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `descripcion_alma1` text NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` varchar(500) NOT NULL,
  `Tipo_Doc` varchar(500) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_doc` varchar(500) NOT NULL,
  `DNI_transporte` varchar(500) NOT NULL,
  `Nombre_trasporte` varchar(500) NOT NULL,
  `Tipo_Trasporte` varchar(500) NOT NULL,
  `direccion_entrega` text NOT NULL,
  `vehiculo` varchar(500) NOT NULL,
  `placa` varchar(500) NOT NULL,
  `DNI_vendedor` varchar(500) NOT NULL,
  `Nombre_vendedor` varchar(500) NOT NULL,
  `forma_pag` varchar(500) NOT NULL,
  `impuesto` decimal(10,0) NOT NULL,
  `Tipo_Moineda` decimal(10,0) NOT NULL,
  `Tasa_bancaria` decimal(10,0) NOT NULL,
  `porc_descuento` decimal(10,0) NOT NULL,
  `porc_recarga` decimal(10,0) NOT NULL,
  `vuelto` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_recepcion`
--

CREATE TABLE `nota_recepcion` (
  `Id_ndr` int(255) NOT NULL,
  `Cod_ndr` varchar(500) NOT NULL,
  `Descripcion_ndr` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(501) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `DNI_proveedor` varchar(501) NOT NULL,
  `Nombre_Proveedor` varchar(500) NOT NULL,
  `Direcion_clinica` text NOT NULL,
  `Direcion_Proveedor` text NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `descripcion_alma1` text NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` varchar(500) NOT NULL,
  `Tipo_Doc` varchar(500) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_doc` varchar(500) NOT NULL,
  `DNI_transporte` varchar(500) NOT NULL,
  `Nombre_trasporte` varchar(500) NOT NULL,
  `Tipo_Trasporte` varchar(500) NOT NULL,
  `direccion_entrega` text NOT NULL,
  `vehiculo` varchar(500) NOT NULL,
  `placa` varchar(500) NOT NULL,
  `DNI_comprador` varchar(500) NOT NULL,
  `Nombre_comprador` varchar(500) NOT NULL,
  `forma_pag` varchar(500) NOT NULL,
  `impuesto` decimal(10,0) NOT NULL,
  `Tipo_Moineda` decimal(10,0) NOT NULL,
  `Tasa_bancaria` decimal(10,0) NOT NULL,
  `porc_descuento` decimal(10,0) NOT NULL,
  `porc_recarga` decimal(10,0) NOT NULL,
  `monto_dev` decimal(10,0) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_despacho`
--

CREATE TABLE `orden_despacho` (
  `Id_desp` int(255) NOT NULL,
  `Cod_desp` varchar(500) NOT NULL,
  `Descripcion_desp` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(501) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `DNI_Cliente` varchar(500) NOT NULL,
  `Nombre_Cliente` varchar(500) NOT NULL,
  `Direcion_clinica` text NOT NULL,
  `Direcion_cliente` text NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `descripcion_alma1` text NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` varchar(500) NOT NULL,
  `Tipo_Doc` varchar(500) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_doc` varchar(500) NOT NULL,
  `DNI_transporte` varchar(500) NOT NULL,
  `Nombre_trasporte` varchar(500) NOT NULL,
  `Tipo_Trasporte` varchar(500) NOT NULL,
  `direccion_entrega` text NOT NULL,
  `vehiculo` varchar(500) NOT NULL,
  `placa` varchar(500) NOT NULL,
  `DNI_vendedor` varchar(500) NOT NULL,
  `Nombre_vendedor` varchar(500) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_pacientes` int(255) NOT NULL,
  `DNI_pacientes` varchar(500) NOT NULL,
  `Cod_historia` varchar(500) NOT NULL,
  `Nombre` varchar(300) NOT NULL,
  `Apellido` varchar(300) NOT NULL,
  `edad` int(255) NOT NULL,
  `cronologia` text NOT NULL,
  `altura` decimal(12,2) NOT NULL,
  `peso` decimal(12,2) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `correo` varchar(500) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `celular` varchar(300) NOT NULL,
  `direcion` text NOT NULL,
  `pais` text NOT NULL,
  `provincia` text NOT NULL,
  `distrito` text NOT NULL,
  `ciudad` text NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` text NOT NULL,
  `tipo_sangre` varchar(30) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `img` text NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(255) NOT NULL,
  `img` text NOT NULL,
  `DNI_personal` varchar(500) NOT NULL,
  `cod_colegiatura` varchar(500) NOT NULL,
  `Nombre` varchar(300) NOT NULL,
  `Apellido` varchar(300) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `telefono` varchar(300) NOT NULL,
  `celular` varchar(300) NOT NULL,
  `direcion` text NOT NULL,
  `pais` text NOT NULL,
  `provincia` text NOT NULL,
  `distrito` text NOT NULL,
  `cargo` varchar(300) NOT NULL,
  `especialidad` varchar(300) NOT NULL,
  `categoria` varchar(300) NOT NULL,
  `area` varchar(300) NOT NULL,
  `F_ingreso` date NOT NULL,
  `F_egreso` date NOT NULL,
  `Privilegios` varchar(50) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poliza`
--

CREATE TABLE `poliza` (
  `id_póliza` int(255) NOT NULL,
  `sku_poliza` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `sku_aseg` varchar(500) NOT NULL,
  `sku_seguro` varchar(500) NOT NULL,
  `id_pacientes` int(255) NOT NULL,
  `numero_poliza` varchar(500) NOT NULL,
  `f_emision` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL,
  `prima_anual` text NOT NULL,
  `prima_mensual` text NOT NULL,
  `co_pago` varchar(500) NOT NULL,
  `condiciones_especiales` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentacion`
--

CREATE TABLE `presentacion` (
  `id_presentacion` int(255) NOT NULL,
  `id_fiscal` varchar(500) NOT NULL,
  `id_empresa` varchar(500) NOT NULL,
  `Descipcion` text NOT NULL,
  `cabecera1` text NOT NULL,
  `cabecera2` text NOT NULL,
  `cabecera3` text NOT NULL,
  `cabecera4` text NOT NULL,
  `cabecera5` text NOT NULL,
  `cabecera6` text NOT NULL,
  `cabecera7` text NOT NULL,
  `cabecera8` text NOT NULL,
  `cabecera9` text NOT NULL,
  `contenido1` text NOT NULL,
  `contenido2` text NOT NULL,
  `contenido3` text NOT NULL,
  `contenido4` text NOT NULL,
  `contenido5` text NOT NULL,
  `contenido6` text NOT NULL,
  `contenido7` text NOT NULL,
  `contenido8` text NOT NULL,
  `contenido9` text NOT NULL,
  `plus1` text NOT NULL,
  `plus2` text NOT NULL,
  `plus3` text NOT NULL,
  `plus4` text NOT NULL,
  `plus5` text NOT NULL,
  `plus6` text NOT NULL,
  `plus7` text NOT NULL,
  `plus8` text NOT NULL,
  `plus9` text NOT NULL,
  `adicionales1` text NOT NULL,
  `adicionales2` text NOT NULL,
  `adicionales3` text NOT NULL,
  `adicionales4` text NOT NULL,
  `adicionales5` text NOT NULL,
  `adicionales6` text NOT NULL,
  `adicionales7` text NOT NULL,
  `adicionales8` text NOT NULL,
  `adicionales9` text NOT NULL,
  `contacto1` text NOT NULL,
  `contacto2` text NOT NULL,
  `contacto3` text NOT NULL,
  `contacto4` text NOT NULL,
  `contacto5` text NOT NULL,
  `contacto6` text NOT NULL,
  `contacto7` text NOT NULL,
  `contacto8` text NOT NULL,
  `contacto9` text NOT NULL,
  `piepagina1` text NOT NULL,
  `piepagina2` text NOT NULL,
  `piepagina3` text NOT NULL,
  `piepagina4` text NOT NULL,
  `piepagina5` text NOT NULL,
  `piepagina6` text NOT NULL,
  `piepagina7` text NOT NULL,
  `piepagina8` text NOT NULL,
  `piepagina9` text NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `campo4` text NOT NULL,
  `campo5` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `f_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `f_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `presentacion`
--

INSERT INTO `presentacion` (`id_presentacion`, `id_fiscal`, `id_empresa`, `Descipcion`, `cabecera1`, `cabecera2`, `cabecera3`, `cabecera4`, `cabecera5`, `cabecera6`, `cabecera7`, `cabecera8`, `cabecera9`, `contenido1`, `contenido2`, `contenido3`, `contenido4`, `contenido5`, `contenido6`, `contenido7`, `contenido8`, `contenido9`, `plus1`, `plus2`, `plus3`, `plus4`, `plus5`, `plus6`, `plus7`, `plus8`, `plus9`, `adicionales1`, `adicionales2`, `adicionales3`, `adicionales4`, `adicionales5`, `adicionales6`, `adicionales7`, `adicionales8`, `adicionales9`, `contacto1`, `contacto2`, `contacto3`, `contacto4`, `contacto5`, `contacto6`, `contacto7`, `contacto8`, `contacto9`, `piepagina1`, `piepagina2`, `piepagina3`, `piepagina4`, `piepagina5`, `piepagina6`, `piepagina7`, `piepagina8`, `piepagina9`, `campo1`, `campo2`, `campo3`, `campo4`, `campo5`, `status`, `usu_login`, `f_registro`, `f_update`) VALUES
(1, 'j45', '0', '¡ReflexoPerú!  Centro de Reflexoterapia ', 'fotos/MiniLogoReflexo.png', 'Centro líder en reflexoterapia podal en Perú, con 23 años de experiencia, dedicado a mejorar la calidad de vida mediante terapias naturales y un enfoque holístico.', 'Contamos con 23 años de experiencia', 'Urb. Los Nogales, Golondrinas 153, Los Olivos', '01 503-8416', '906 059 484', 'hola@refexoperu.com.pe', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '2024-10-31 15:57:18', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedencia`
--

CREATE TABLE `procedencia` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proservicios`
--

CREATE TABLE `proservicios` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(255) NOT NULL,
  `id_fiscal_pro` varchar(500) NOT NULL,
  `razon_social` text NOT NULL,
  `nick` varchar(500) NOT NULL,
  `contacto` varchar(500) NOT NULL,
  `cargo` varchar(500) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `gmail1` text NOT NULL,
  `gmail2` text NOT NULL,
  `direccion1` text NOT NULL,
  `direccion2` text NOT NULL,
  `proservicios` text NOT NULL,
  `tipoproveedor` text NOT NULL,
  `zona` text NOT NULL,
  `segmento` text NOT NULL,
  `pais_origen` text NOT NULL,
  `certificaciones` text NOT NULL,
  `condiciones_pago` text NOT NULL,
  `referencias_comerciales` text NOT NULL,
  `sitio_web` text NOT NULL,
  `redes_sociales` text NOT NULL,
  `logo1` text NOT NULL,
  `logo2` text NOT NULL,
  `logo3` text NOT NULL,
  `observaciones` text NOT NULL,
  `campo1` text NOT NULL,
  `campo2` text NOT NULL,
  `campo3` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registro` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reng_caja`
--

CREATE TABLE `reng_caja` (
  `id_caja` int(255) NOT NULL,
  `sku_caja` varchar(500) NOT NULL,
  `doc_num` varchar(500) NOT NULL,
  `reng_caja` varchar(500) NOT NULL,
  `Descripcion` text NOT NULL,
  `ingreso` decimal(10,2) NOT NULL,
  `egreso` decimal(10,2) NOT NULL,
  `tasa` decimal(10,2) NOT NULL,
  `impuesto` decimal(10,2) NOT NULL,
  `valor_impuesto` decimal(10,2) NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `Campo4` text NOT NULL,
  `Campo5` text NOT NULL,
  `Campo6` text NOT NULL,
  `Campo7` text NOT NULL,
  `Campo8` text NOT NULL,
  `Campo9` text NOT NULL,
  `usu_login` text NOT NULL,
  `id_login` varchar(500) NOT NULL,
  `f_tasa` datetime NOT NULL,
  `f_impuesto` datetime NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reng_documentos`
--

CREATE TABLE `reng_documentos` (
  `id_doc` int(255) NOT NULL,
  `num_doc` varchar(500) NOT NULL,
  `sku_Reg` varchar(500) NOT NULL,
  `Descripcion_Doc` text NOT NULL,
  `Tipo_Doc` text NOT NULL,
  `Captegoria_Doc` text NOT NULL,
  `Sku_articulo` varchar(500) NOT NULL,
  `Descripcion_articulo` text NOT NULL,
  `Unidad_articulo` text NOT NULL,
  `Lote_articulo` varchar(500) NOT NULL,
  `Stock_A` decimal(10,2) NOT NULL,
  `Stock_B` decimal(10,2) NOT NULL,
  `Stock_C` decimal(10,2) NOT NULL,
  `sku_almacen` varchar(500) NOT NULL,
  `Código_ISO` varchar(500) NOT NULL,
  `Símbolo_Moneda` text NOT NULL,
  `Tasa_Cambio` text NOT NULL,
  `img_capture` text NOT NULL,
  `nreferenciaB` text NOT NULL,
  `nreferenciaP` text NOT NULL,
  `NreferenciaC` text NOT NULL,
  `Precio_Neto` decimal(10,2) NOT NULL,
  `Cantidad_articulo` decimal(10,2) NOT NULL,
  `Precio_total` decimal(10,2) NOT NULL,
  `descuento` decimal(10,2) NOT NULL,
  `recargo` decimal(10,2) NOT NULL,
  `Tipo_Iva` text NOT NULL,
  `Iva_Doc` decimal(10,2) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_doc2` varchar(500) NOT NULL,
  `movimiento` text NOT NULL,
  `num_control` varchar(500) NOT NULL,
  `Campo1` text NOT NULL,
  `Campo2` text NOT NULL,
  `Campo3` text NOT NULL,
  `Campo4` text NOT NULL,
  `Campo5` text NOT NULL,
  `Campo6` text NOT NULL,
  `Campo7` text NOT NULL,
  `Campo8` text NOT NULL,
  `Campo9` text NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `f_emis` datetime NOT NULL,
  `f_update` datetime NOT NULL,
  `f_vencimiento` datetime NOT NULL,
  `f_venta` datetime NOT NULL,
  `f_compra` datetime NOT NULL,
  `f_traslado` datetime NOT NULL,
  `f_ajuste` datetime NOT NULL,
  `f_entrega` datetime NOT NULL,
  `f_reccecion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `segmento`
--

CREATE TABLE `segmento` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguromedico`
--

CREATE TABLE `seguromedico` (
  `id` int(255) NOT NULL,
  `sku_seguro` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `nombre_compania` text NOT NULL,
  `tipo_seguro` text NOT NULL,
  `cobertura` text NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_final` datetime NOT NULL,
  `monto_cobertura` decimal(10,0) NOT NULL,
  `prima_mensual` decimal(10,0) NOT NULL,
  `co_pago` varchar(500) NOT NULL,
  `id_pacientes` int(255) NOT NULL,
  `historial_claims` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_linea`
--

CREATE TABLE `sub_linea` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproveedor`
--

CREATE TABLE `tipoproveedor` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_sangre`
--

CREATE TABLE `tipo_sangre` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslados_almacenes`
--

CREATE TABLE `traslados_almacenes` (
  `Id_trasl` int(255) NOT NULL,
  `Cod_trasl` varchar(500) NOT NULL,
  `Descripcion_trasl` text NOT NULL,
  `cod_sucursal` varchar(500) NOT NULL,
  `id_fiscal_cli` varchar(500) NOT NULL,
  `Descripcion_cli` varchar(500) NOT NULL,
  `Cod_alma1` varchar(500) NOT NULL,
  `Cod_alma2` varchar(500) NOT NULL,
  `desc_alma1` text NOT NULL,
  `desc_alma2` text NOT NULL,
  `num_control` int(255) NOT NULL,
  `Categoria_Doc` text NOT NULL,
  `Tipo_Doc` text NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `protegido` tinyint(1) NOT NULL,
  `num_doc` varchar(500) NOT NULL,
  `DNI_transporte` varchar(500) NOT NULL,
  `Nombre_trasporte` tinyint(1) NOT NULL,
  `Tipo_Trasporte` varchar(500) NOT NULL,
  `direccion_envia` varchar(500) NOT NULL,
  `direccion_recicibe` varchar(500) NOT NULL,
  `vehiculo` text NOT NULL,
  `placa` varchar(500) NOT NULL,
  `revisado` tinyint(1) NOT NULL,
  `Campo1` varchar(501) NOT NULL,
  `Campo2` varchar(500) NOT NULL,
  `Campo3` varchar(500) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` decimal(10,0) NOT NULL,
  `f_registo` decimal(10,0) NOT NULL,
  `f_update` decimal(10,0) NOT NULL,
  `f_vencimiento` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id` int(255) NOT NULL,
  `sku` varchar(500) NOT NULL,
  `descripcion` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usu_login` varchar(500) NOT NULL,
  `id_login` int(255) NOT NULL,
  `f_registo` datetime NOT NULL,
  `f_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ajustes`
--
ALTER TABLE `ajustes`
  ADD PRIMARY KEY (`Cod_ajust`),
  ADD KEY `id` (`Id_ajust`),
  ADD KEY `ajustes_ibfk_1` (`usu_login`),
  ADD KEY `ajustes_ibfk_2` (`cod_sucursal`),
  ADD KEY `ajustes_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `ajustes_ibfk_4` (`Cod_alma1`);

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`sku_almacen`),
  ADD KEY `id` (`id_almacen`),
  ADD KEY `Almacen_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`sku_art`),
  ADD KEY `id` (`Id_art`),
  ADD KEY `articulo_ibfk_1` (`usu_login`),
  ADD KEY `articulo_ibfk_2` (`Proveedorprincipal`),
  ADD KEY `articulo_ibfk_3` (`lote`);

--
-- Indices de la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  ADD PRIMARY KEY (`sku_aseg`),
  ADD KEY `id` (`id`),
  ADD KEY `Aseguradora_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`sku_caja`),
  ADD KEY `id` (`id_caja`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Categoria_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `certificaciones`
--
ALTER TABLE `certificaciones`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Certificaciones_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`cod_cita`),
  ADD KEY `id` (`Id_cita`),
  ADD KEY `citas_ibfk_1` (`usu_login`),
  ADD KEY `citas_ibfk_2` (`DNI_citas`),
  ADD KEY `citas_ibfk_3` (`id_póliza`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dni_clientes`),
  ADD KEY `id` (`id`),
  ADD KEY `pk1_usu_login` (`usu_login`);

--
-- Indices de la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`id_fiscal_cli`),
  ADD KEY `clinica_id` (`clinica_id`),
  ADD KEY `clinica_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Color_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `condiciones_pago`
--
ALTER TABLE `condiciones_pago`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Condiciones_pago_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `control_lotes`
--
ALTER TABLE `control_lotes`
  ADD PRIMARY KEY (`control_lote`),
  ADD KEY `id` (`id_cnlote`),
  ADD KEY `control_lotes_ibfk_1` (`usu_login`),
  ADD KEY `control_lotes_ibfk_2` (`sku_art`),
  ADD KEY `control_lotes_ibfk_3` (`nro_lote`),
  ADD KEY `control_lotes_ibfk_4` (`doc_num_s`),
  ADD KEY `control_lotes_ibfk_5` (`doc_num_e`);

--
-- Indices de la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Distrito_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`cod_colegiatura`),
  ADD KEY `id` (`id`),
  ADD KEY `Educacion_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `enteroclínica`
--
ALTER TABLE `enteroclínica`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Enteroclínica_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD PRIMARY KEY (`Cod_comp`),
  ADD KEY `id` (`Id_comp`),
  ADD KEY `factura_compra_ibfk_1` (`usu_login`),
  ADD KEY `factura_compra_ibfk_2` (`cod_sucursal`),
  ADD KEY `factura_compra_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `factura_compra_ibfk_4` (`DNI_proveedor`),
  ADD KEY `factura_compra_ibfk_5` (`Cod_alma1`);

--
-- Indices de la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  ADD PRIMARY KEY (`Cod_Fact`),
  ADD KEY `id` (`Id_Fact`),
  ADD KEY `factura_venta_ibfk_1` (`usu_login`),
  ADD KEY `factura_venta_ibfk_2` (`cod_sucursal`),
  ADD KEY `factura_venta_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `factura_venta_ibfk_4` (`DNI_Cliente`),
  ADD KEY `factura_venta_ibfk_5` (`Cod_alma1`);

--
-- Indices de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`cod_historia`),
  ADD KEY `id` (`id_historia`),
  ADD KEY `historia_clinica_ibfk_1` (`usu_login`),
  ADD KEY `historia_clinica_ibfk_2` (`DNI_pacientes`);

--
-- Indices de la tabla `impuesto`
--
ALTER TABLE `impuesto`
  ADD PRIMARY KEY (`sku_imp`),
  ADD KEY `id` (`id_imp`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Laboratorio_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Linea_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usu_login`),
  ADD KEY `id` (`id_login`),
  ADD KEY `login_ibfk_1` (`DNI_login`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`lote`),
  ADD KEY `id` (`id_lote`),
  ADD KEY `lote_ibfk_1` (`usu_login`),
  ADD KEY `lote_ibfk_2` (`sku_art`),
  ADD KEY `lote_ibfk_3` (`nro_lote`),
  ADD KEY `lote_ibfk_4` (`doc_num_s`),
  ADD KEY `lote_ibfk_5` (`doc_num_e`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Modelo_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Moneda_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `motivoconsulta`
--
ALTER TABLE `motivoconsulta`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Motivoconsulta_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `nota_entrega`
--
ALTER TABLE `nota_entrega`
  ADD PRIMARY KEY (`Cod_nde`),
  ADD KEY `id` (`Id_nde`),
  ADD KEY `nota_entrega_ibfk_1` (`usu_login`),
  ADD KEY `nota_entrega_ibfk_2` (`cod_sucursal`),
  ADD KEY `nota_entrega_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `nota_entrega_ibfk_4` (`DNI_Cliente`),
  ADD KEY `nota_entrega_ibfk_5` (`Cod_alma1`);

--
-- Indices de la tabla `nota_recepcion`
--
ALTER TABLE `nota_recepcion`
  ADD PRIMARY KEY (`Cod_ndr`),
  ADD KEY `id` (`Id_ndr`),
  ADD KEY `nota_recepcion_ibfk_1` (`usu_login`),
  ADD KEY `nota_recepcion_ibfk_2` (`cod_sucursal`),
  ADD KEY `nota_recepcion_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `nota_recepcion_ibfk_4` (`DNI_proveedor`),
  ADD KEY `nota_recepcion_ibfk_5` (`Cod_alma1`);

--
-- Indices de la tabla `orden_despacho`
--
ALTER TABLE `orden_despacho`
  ADD PRIMARY KEY (`Cod_desp`),
  ADD KEY `id` (`Id_desp`),
  ADD KEY `orden_despacho_ibfk_1` (`usu_login`),
  ADD KEY `orden_despacho_ibfk_2` (`cod_sucursal`),
  ADD KEY `orden_despacho_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `orden_despacho_ibfk_4` (`DNI_Cliente`),
  ADD KEY `orden_despacho_ibfk_5` (`Cod_alma1`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`DNI_pacientes`),
  ADD KEY `id` (`id_pacientes`),
  ADD KEY `pacientes_ibfk_1` (`usu_login`),
  ADD KEY `pacientes_ibfk_2` (`Cod_historia`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Pais_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`DNI_personal`),
  ADD KEY `id` (`id_personal`),
  ADD KEY `personal_ibfk_1` (`usu_login`),
  ADD KEY `personal_ibfk_2` (`cod_colegiatura`);

--
-- Indices de la tabla `poliza`
--
ALTER TABLE `poliza`
  ADD PRIMARY KEY (`sku_poliza`),
  ADD KEY `id` (`id_póliza`),
  ADD KEY `Poliza_ibfk_1` (`usu_login`),
  ADD KEY `Poliza_ibfk_2` (`sku_aseg`),
  ADD KEY `Poliza_ibfk_3` (`sku_seguro`),
  ADD KEY `Poliza_ibfk_4` (`id_pacientes`),
  ADD KEY `Poliza_ibfk_5` (`co_pago`);

--
-- Indices de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  ADD PRIMARY KEY (`id_fiscal`),
  ADD KEY `id` (`id_presentacion`);

--
-- Indices de la tabla `procedencia`
--
ALTER TABLE `procedencia`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Procedencia_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `proservicios`
--
ALTER TABLE `proservicios`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `ProServicios_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_fiscal_pro`),
  ADD KEY `id` (`id_proveedor`),
  ADD KEY `proveedor_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Provincia_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `reng_caja`
--
ALTER TABLE `reng_caja`
  ADD PRIMARY KEY (`sku_caja`),
  ADD KEY `id` (`id_caja`);

--
-- Indices de la tabla `reng_documentos`
--
ALTER TABLE `reng_documentos`
  ADD PRIMARY KEY (`num_doc`),
  ADD KEY `id_doc` (`id_doc`);

--
-- Indices de la tabla `segmento`
--
ALTER TABLE `segmento`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Segmento_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `seguromedico`
--
ALTER TABLE `seguromedico`
  ADD PRIMARY KEY (`sku_seguro`),
  ADD KEY `id` (`id`),
  ADD KEY `Seguromedico_ibfk_1` (`usu_login`),
  ADD KEY `Seguromedico_ibfk_2` (`id_pacientes`),
  ADD KEY `Seguromedico_ibfk_3` (`historial_claims`),
  ADD KEY `Seguromedico_ibfk_4` (`co_pago`);

--
-- Indices de la tabla `sub_linea`
--
ALTER TABLE `sub_linea`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Sub_linea_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `tipoproveedor`
--
ALTER TABLE `tipoproveedor`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Tipoproveedor_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `tipo_sangre`
--
ALTER TABLE `tipo_sangre`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Tipo_sangre_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `traslados_almacenes`
--
ALTER TABLE `traslados_almacenes`
  ADD PRIMARY KEY (`Cod_trasl`),
  ADD KEY `id` (`Id_trasl`),
  ADD KEY `traslados_almacenes_ibfk_1` (`usu_login`),
  ADD KEY `traslados_almacenes_ibfk_2` (`cod_sucursal`),
  ADD KEY `traslados_almacenes_ibfk_3` (`id_fiscal_cli`),
  ADD KEY `traslados_almacenes_ibfk_4` (`Cod_alma1`),
  ADD KEY `traslados_almacenes_ibfk_5` (`Cod_alma2`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Unidad_ibfk_1` (`usu_login`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`sku`),
  ADD KEY `id` (`id`),
  ADD KEY `Zona_ibfk_1` (`usu_login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ajustes`
--
ALTER TABLE `ajustes`
  MODIFY `Id_ajust` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id_almacen` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `Id_art` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `certificaciones`
--
ALTER TABLE `certificaciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Id_cita` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clinica`
--
ALTER TABLE `clinica`
  MODIFY `clinica_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `condiciones_pago`
--
ALTER TABLE `condiciones_pago`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `control_lotes`
--
ALTER TABLE `control_lotes`
  MODIFY `id_cnlote` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `distrito`
--
ALTER TABLE `distrito`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enteroclínica`
--
ALTER TABLE `enteroclínica`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  MODIFY `Id_comp` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  MODIFY `Id_Fact` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `id_historia` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `impuesto`
--
ALTER TABLE `impuesto`
  MODIFY `id_imp` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `id_lote` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motivoconsulta`
--
ALTER TABLE `motivoconsulta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nota_entrega`
--
ALTER TABLE `nota_entrega`
  MODIFY `Id_nde` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nota_recepcion`
--
ALTER TABLE `nota_recepcion`
  MODIFY `Id_ndr` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden_despacho`
--
ALTER TABLE `orden_despacho`
  MODIFY `Id_desp` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_pacientes` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `poliza`
--
ALTER TABLE `poliza`
  MODIFY `id_póliza` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `presentacion`
--
ALTER TABLE `presentacion`
  MODIFY `id_presentacion` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `procedencia`
--
ALTER TABLE `procedencia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proservicios`
--
ALTER TABLE `proservicios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reng_caja`
--
ALTER TABLE `reng_caja`
  MODIFY `id_caja` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reng_documentos`
--
ALTER TABLE `reng_documentos`
  MODIFY `id_doc` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `segmento`
--
ALTER TABLE `segmento`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguromedico`
--
ALTER TABLE `seguromedico`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sub_linea`
--
ALTER TABLE `sub_linea`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoproveedor`
--
ALTER TABLE `tipoproveedor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_sangre`
--
ALTER TABLE `tipo_sangre`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `traslados_almacenes`
--
ALTER TABLE `traslados_almacenes`
  MODIFY `Id_trasl` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ajustes`
--
ALTER TABLE `ajustes`
  ADD CONSTRAINT `ajustes_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `Almacen_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `articulo_ibfk_3` FOREIGN KEY (`lote`) REFERENCES `lote` (`lote`);

--
-- Filtros para la tabla `aseguradora`
--
ALTER TABLE `aseguradora`
  ADD CONSTRAINT `Aseguradora_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `Categoria_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `certificaciones`
--
ALTER TABLE `certificaciones`
  ADD CONSTRAINT `Certificaciones_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`id_póliza`) REFERENCES `poliza` (`id_póliza`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `pk1_usu_login` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD CONSTRAINT `clinica_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `color`
--
ALTER TABLE `color`
  ADD CONSTRAINT `Color_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `condiciones_pago`
--
ALTER TABLE `condiciones_pago`
  ADD CONSTRAINT `Condiciones_pago_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `control_lotes`
--
ALTER TABLE `control_lotes`
  ADD CONSTRAINT `control_lotes_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `control_lotes_ibfk_2` FOREIGN KEY (`sku_art`) REFERENCES `articulo` (`sku_art`);

--
-- Filtros para la tabla `distrito`
--
ALTER TABLE `distrito`
  ADD CONSTRAINT `Distrito_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `Educacion_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `enteroclínica`
--
ALTER TABLE `enteroclínica`
  ADD CONSTRAINT `Enteroclínica_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD CONSTRAINT `factura_compra_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  ADD CONSTRAINT `factura_venta_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD CONSTRAINT `historia_clinica_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `historia_clinica_ibfk_2` FOREIGN KEY (`DNI_pacientes`) REFERENCES `pacientes` (`DNI_pacientes`);

--
-- Filtros para la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD CONSTRAINT `Laboratorio_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `linea`
--
ALTER TABLE `linea`
  ADD CONSTRAINT `Linea_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `lote_ibfk_2` FOREIGN KEY (`sku_art`) REFERENCES `articulo` (`sku_art`);

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `Modelo_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD CONSTRAINT `Moneda_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `motivoconsulta`
--
ALTER TABLE `motivoconsulta`
  ADD CONSTRAINT `Motivoconsulta_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `nota_entrega`
--
ALTER TABLE `nota_entrega`
  ADD CONSTRAINT `nota_entrega_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `nota_recepcion`
--
ALTER TABLE `nota_recepcion`
  ADD CONSTRAINT `nota_recepcion_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `orden_despacho`
--
ALTER TABLE `orden_despacho`
  ADD CONSTRAINT `orden_despacho_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `pacientes_ibfk_2` FOREIGN KEY (`Cod_historia`) REFERENCES `historia_clinica` (`cod_historia`);

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `Pais_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `poliza`
--
ALTER TABLE `poliza`
  ADD CONSTRAINT `Poliza_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `Poliza_ibfk_2` FOREIGN KEY (`sku_aseg`) REFERENCES `aseguradora` (`sku_aseg`),
  ADD CONSTRAINT `Poliza_ibfk_3` FOREIGN KEY (`sku_seguro`) REFERENCES `seguromedico` (`sku_seguro`),
  ADD CONSTRAINT `Poliza_ibfk_4` FOREIGN KEY (`id_pacientes`) REFERENCES `pacientes` (`id_pacientes`);

--
-- Filtros para la tabla `procedencia`
--
ALTER TABLE `procedencia`
  ADD CONSTRAINT `Procedencia_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `proservicios`
--
ALTER TABLE `proservicios`
  ADD CONSTRAINT `ProServicios_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `Provincia_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `segmento`
--
ALTER TABLE `segmento`
  ADD CONSTRAINT `Segmento_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`);

--
-- Filtros para la tabla `seguromedico`
--
ALTER TABLE `seguromedico`
  ADD CONSTRAINT `Seguromedico_ibfk_1` FOREIGN KEY (`usu_login`) REFERENCES `login` (`usu_login`),
  ADD CONSTRAINT `Seguromedico_ibfk_2` FOREIGN KEY (`id_pacientes`) REFERENCES `pacientes` (`id_pacientes`),
  ADD CONSTRAINT `Seguromedico_ibfk_4` FOREIGN KEY (`co_pago`) REFERENCES `poliza` (`co_pago`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
