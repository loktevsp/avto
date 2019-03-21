-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 21 2019 г., 11:11
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cardb`
--
CREATE DATABASE IF NOT EXISTS `cardb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cardb`;

-- --------------------------------------------------------

--
-- Структура таблицы `carandcomfort`
--

CREATE TABLE `carandcomfort` (
  `id` int(4) NOT NULL,
  `id_car` int(4) NOT NULL,
  `id_comfort` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `carandexterior`
--

CREATE TABLE `carandexterior` (
  `id` int(4) NOT NULL,
  `id_car` int(4) NOT NULL,
  `id_exterior` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `carandmultimedia`
--

CREATE TABLE `carandmultimedia` (
  `id` int(4) NOT NULL,
  `id_car` int(4) NOT NULL,
  `id_multimedia` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `carandsecurity`
--

CREATE TABLE `carandsecurity` (
  `id` int(4) NOT NULL,
  `id_car` int(4) NOT NULL,
  `id_security` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carandsecurity`
--

INSERT INTO `carandsecurity` (`id`, `id_car`, `id_security`) VALUES
(37, 68, 1),
(39, 70, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `carbrands`
--

CREATE TABLE `carbrands` (
  `idbrand` int(4) NOT NULL,
  `brand` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carbrands`
--

INSERT INTO `carbrands` (`idbrand`, `brand`) VALUES
(1, 'LADA'),
(2, 'Tayota');

-- --------------------------------------------------------

--
-- Структура таблицы `carbrandsandmodels`
--

CREATE TABLE `carbrandsandmodels` (
  `id` int(4) NOT NULL,
  `id_brand` int(4) NOT NULL,
  `id_model` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carbrandsandmodels`
--

INSERT INTO `carbrandsandmodels` (`id`, `id_brand`, `id_model`) VALUES
(1, 1, 1),
(6, 1, 3),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `carcatalog`
--

CREATE TABLE `carcatalog` (
  `idCar` int(4) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `mileage` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `urlImg1` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `urlImg1_720x540` varchar(100) DEFAULT NULL,
  `urlImg1_146x106` varchar(100) DEFAULT NULL,
  `urlImg2` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `urlImg2_720x540` varchar(100) DEFAULT NULL,
  `urlImg2_146x106` varchar(100) DEFAULT NULL,
  `urlImg3` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `urlImg3_720x540` varchar(100) DEFAULT NULL,
  `urlImg3_146x106` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carcatalog`
--

INSERT INTO `carcatalog` (`idCar`, `brand`, `model`, `mileage`, `price`, `phone`, `urlImg1`, `urlImg1_720x540`, `urlImg1_146x106`, `urlImg2`, `urlImg2_720x540`, `urlImg2_146x106`, `urlImg3`, `urlImg3_720x540`, `urlImg3_146x106`) VALUES
(68, 'Tayota', 'Camry', 6000, 500000, '88009007070', '78dc865eb1723af631c94a2d92e9e419.jpg', '720x54078dc865eb1723af631c94a2d92e9e419.jpg', '146x10678dc865eb1723af631c94a2d92e9e419.jpg', '', NULL, NULL, '', NULL, NULL),
(70, 'LADA', '2107', 9000, 456211, '89006009090', '164c089031779ca00d7bcb705598625b.jpg', '720x540164c089031779ca00d7bcb705598625b.jpg', '146x106164c089031779ca00d7bcb705598625b.jpg', '164c089031779ca00d7bcb705598625b.jpg', '720x540164c089031779ca00d7bcb705598625b.jpg', '146x106164c089031779ca00d7bcb705598625b.jpg', '164c089031779ca00d7bcb705598625b.jpg', '720x540164c089031779ca00d7bcb705598625b.jpg', '146x106164c089031779ca00d7bcb705598625b.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `carmodels`
--

CREATE TABLE `carmodels` (
  `idmodel` int(4) NOT NULL,
  `model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carmodels`
--

INSERT INTO `carmodels` (`idmodel`, `model`) VALUES
(1, '2107'),
(2, 'Camry'),
(3, '2106');

-- --------------------------------------------------------

--
-- Структура таблицы `comfort`
--

CREATE TABLE `comfort` (
  `idComfort` int(4) NOT NULL,
  `comfort` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comfort`
--

INSERT INTO `comfort` (`idComfort`, `comfort`) VALUES
(1, 'Автономный отопитель салона'),
(2, 'Бортовой компьютер'),
(3, 'Датчик света'),
(4, 'Доступ без ключа'),
(5, 'Камера заднего вида'),
(6, 'Климат-контроль'),
(7, ' Кондиционер '),
(8, 'Круиз контроль'),
(9, 'Мультируль'),
(10, 'Навигационная система'),
(11, 'Обогрев зеркал'),
(12, 'Обогрев сидений'),
(13, 'Омыватель фар'),
(14, 'Передний подлокотник'),
(15, 'Пневмоподвеска'),
(16, 'Регулировка руля'),
(17, 'Электрозеркала'),
(18, 'Электропривод сидений'),
(19, 'Электропривод складывания наружных зеркал'),
(20, 'Электростекла');

-- --------------------------------------------------------

--
-- Структура таблицы `exterior`
--

CREATE TABLE `exterior` (
  `idExterior` int(4) NOT NULL,
  `exterior` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `exterior`
--

INSERT INTO `exterior` (`idExterior`, `exterior`) VALUES
(1, 'Биксенововые фары'),
(2, 'Диодные фары'),
(3, 'Ксеноновые фары'),
(4, 'Легкосплавные диски'),
(5, 'Люк'),
(6, 'Панорамная крыша'),
(7, 'Противотуманные фары'),
(8, 'Тонированные стекла');

-- --------------------------------------------------------

--
-- Структура таблицы `multimedia`
--

CREATE TABLE `multimedia` (
  `idMultimedia` int(4) NOT NULL,
  `multimedia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `multimedia`
--

INSERT INTO `multimedia` (`idMultimedia`, `multimedia`) VALUES
(1, 'Bluetooth'),
(2, 'CD/mp3'),
(3, 'DVD'),
(4, 'iPod'),
(5, 'USB/AUX'),
(6, 'Сабвуфер'),
(7, 'Сенсорный дисплей');

-- --------------------------------------------------------

--
-- Структура таблицы `security`
--

CREATE TABLE `security` (
  `idSecurity` int(4) NOT NULL,
  `security` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `security`
--

INSERT INTO `security` (`idSecurity`, `security`) VALUES
(1, 'ABS'),
(2, 'Break assist'),
(3, 'EBD'),
(4, 'ESP'),
(5, 'Датчик дождя'),
(6, 'Крепление детского сидения ISOFIX'),
(7, 'Парктроник'),
(8, 'Подушка безопасности водителя'),
(9, 'Подушка безопасности переднего пассажира'),
(10, 'Подушки безопасности боковые'),
(11, 'Сигнализация'),
(12, 'Сигнализация с автозапуском'),
(13, 'Система контроля давления в шинах'),
(14, 'Центральный замок');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carandcomfort`
--
ALTER TABLE `carandcomfort`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_carandcomfort` (`id_car`,`id_comfort`) USING BTREE,
  ADD KEY `id_car` (`id_car`) USING BTREE,
  ADD KEY `id_comfort` (`id_comfort`) USING BTREE;

--
-- Индексы таблицы `carandexterior`
--
ALTER TABLE `carandexterior`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_carandexterior` (`id_car`,`id_exterior`) USING BTREE,
  ADD KEY `id_car` (`id_car`) USING BTREE,
  ADD KEY `id_exterior` (`id_exterior`) USING BTREE;

--
-- Индексы таблицы `carandmultimedia`
--
ALTER TABLE `carandmultimedia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_carandmultimedia` (`id_car`,`id_multimedia`),
  ADD KEY `id_car` (`id_car`) USING BTREE,
  ADD KEY `id_multimedia` (`id_multimedia`) USING BTREE;

--
-- Индексы таблицы `carandsecurity`
--
ALTER TABLE `carandsecurity`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_carandsecurity` (`id_car`,`id_security`),
  ADD KEY `id_car` (`id_car`) USING BTREE,
  ADD KEY `id_security` (`id_security`) USING BTREE;

--
-- Индексы таблицы `carbrands`
--
ALTER TABLE `carbrands`
  ADD PRIMARY KEY (`idbrand`);

--
-- Индексы таблицы `carbrandsandmodels`
--
ALTER TABLE `carbrandsandmodels`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `id_brandandmodel` (`id_brand`,`id_model`) USING BTREE,
  ADD KEY `id_model` (`id_model`) USING BTREE,
  ADD KEY `id_brand` (`id_brand`) USING BTREE;

--
-- Индексы таблицы `carcatalog`
--
ALTER TABLE `carcatalog`
  ADD PRIMARY KEY (`idCar`);

--
-- Индексы таблицы `carmodels`
--
ALTER TABLE `carmodels`
  ADD PRIMARY KEY (`idmodel`);

--
-- Индексы таблицы `comfort`
--
ALTER TABLE `comfort`
  ADD PRIMARY KEY (`idComfort`);

--
-- Индексы таблицы `exterior`
--
ALTER TABLE `exterior`
  ADD PRIMARY KEY (`idExterior`);

--
-- Индексы таблицы `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`idMultimedia`);

--
-- Индексы таблицы `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`idSecurity`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carandcomfort`
--
ALTER TABLE `carandcomfort`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `carandexterior`
--
ALTER TABLE `carandexterior`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `carandmultimedia`
--
ALTER TABLE `carandmultimedia`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `carandsecurity`
--
ALTER TABLE `carandsecurity`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `carbrands`
--
ALTER TABLE `carbrands`
  MODIFY `idbrand` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `carbrandsandmodels`
--
ALTER TABLE `carbrandsandmodels`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `carcatalog`
--
ALTER TABLE `carcatalog`
  MODIFY `idCar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `carmodels`
--
ALTER TABLE `carmodels`
  MODIFY `idmodel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `comfort`
--
ALTER TABLE `comfort`
  MODIFY `idComfort` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `exterior`
--
ALTER TABLE `exterior`
  MODIFY `idExterior` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `idMultimedia` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `security`
--
ALTER TABLE `security`
  MODIFY `idSecurity` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `carandcomfort`
--
ALTER TABLE `carandcomfort`
  ADD CONSTRAINT `carandcomfort_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `carcatalog` (`idCar`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `carandcomfort_ibfk_2` FOREIGN KEY (`id_comfort`) REFERENCES `comfort` (`idComfort`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `carandexterior`
--
ALTER TABLE `carandexterior`
  ADD CONSTRAINT `carandexterior_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `carcatalog` (`idCar`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `carandexterior_ibfk_2` FOREIGN KEY (`id_exterior`) REFERENCES `exterior` (`idExterior`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `carandmultimedia`
--
ALTER TABLE `carandmultimedia`
  ADD CONSTRAINT `carandmultimedia_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `carcatalog` (`idCar`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `carandmultimedia_ibfk_2` FOREIGN KEY (`id_multimedia`) REFERENCES `multimedia` (`idMultimedia`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `carandsecurity`
--
ALTER TABLE `carandsecurity`
  ADD CONSTRAINT `carandsecurity_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `carcatalog` (`idCar`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `carandsecurity_ibfk_2` FOREIGN KEY (`id_security`) REFERENCES `security` (`idSecurity`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `carbrandsandmodels`
--
ALTER TABLE `carbrandsandmodels`
  ADD CONSTRAINT `carbrandsandmodels_ibfk_1` FOREIGN KEY (`id_brand`) REFERENCES `carbrands` (`idbrand`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `carbrandsandmodels_ibfk_2` FOREIGN KEY (`id_model`) REFERENCES `carmodels` (`idmodel`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
