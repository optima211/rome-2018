-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2018 г., 17:28
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `parrent` int(11) DEFAULT NULL,
  `comment` varchar(50) DEFAULT NULL,
  `owner` varchar(70) DEFAULT 'USER',
  `account_state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `account`
--

INSERT INTO `account` (`account_id`, `type`, `name`, `parrent`, `comment`, `owner`, `account_state`) VALUES
(1, 2, 'Новосибирск', 2, '', 'NOVOSIBIRSK', 0),
(2, 1, 'Россия', 0, 'Pract-natk', 'Pract-natk', 0),
(73, 3, '5-ый пер. Успенского', 1, '', 'NOVOSIBIRSK', 0),
(76, 2, 'Новосибирск(Тест)', 2, '', 'RIM', 0),
(244, 3, 'Баланс', 1, '', 'NOVOSIBIRSK', 0),
(251, 3, 'Жуковского', 1, '', 'NSK', 0),
(252, 3, 'Чайковского', 1, '', 'NSK', 0),
(253, 3, 'Энтузиастов', 1, '', 'NSK', 0),
(254, 3, 'Коммунстроевская', 1, '', 'STROYBIS1', 0),
(293, 3, '2-й Красносельский проезд', 1, '', 'STROYBIS1', 0),
(421, 3, 'пер. Учительский', 1, '', 'NSK', 0),
(423, 3, 'Западная', 1, '', 'NSK', 0),
(424, 3, 'Изыскателей', 1, '', 'NSK', 0),
(425, 3, 'Коуракская', 1, '', 'NSK', 0),
(426, 3, 'Тракторная', 1, '', 'NSK', 0),
(604, 3, '2-й Трикотажный пер', 1, '', 'RMS', 0),
(631, 3, '3-й Трикотажный пер', 1, '', 'RMS', 0),
(634, 3, 'Добросельская', 1, '', 'NSK', 0),
(643, 3, 'Казачинская', 1, '', 'NSK', 0),
(660, 3, 'Кедровая', 1, '', 'NSK', 0),
(664, 3, 'Михайловская', 1, '', 'NSK', 0),
(669, 3, 'Молдавская', 1, '', 'NSK', 0),
(687, 3, 'Орловская', 1, '', 'NSK', 0),
(726, 3, 'Таманская', 1, '', 'NSK', 0),
(828, 3, 'Павлова', 1, '', 'NSK', 0),
(1352, 3, 'Горсвет', 1, '', 'NSK', 0),
(1392, 3, '1-ый Инюшинский пер.', 1, '', 'NSK', 0),
(1431, 3, '3-ий Инюшинский пер.', 1, '', 'NSK', 0),
(1456, 3, '4-ий Инюшинский пер.', 1, '', 'NSK', 0),
(1476, 3, 'Набережная р. Плющихи', 1, '', 'NSK', 0),
(1508, 3, 'Инюшенская', 1, '', 'NSK', 0),
(1560, 3, 'Корчагина', 1, '', 'NSK', 0),
(1618, 3, 'Оренбургская', 1, '', 'RIM', 0),
(1631, 3, 'Краснофлотская', 1, '', 'NSK', 0),
(1696, 3, 'Волочаевская', 1, '', 'NSK1', 0),
(1704, 3, 'Липецкая', 1, '', 'NSK1', 0),
(1715, 3, 'Новороссийская', 1, '', 'NSK1', 0),
(1758, 3, 'Смирнова', 1, '', 'NSK1', 0),
(1911, 3, 'Гончарова', 1, '', 'NSK', 0),
(1948, 3, 'Ольги Бергольц', 1, '', 'NSK', 0),
(1951, 3, 'Гостинная', 1, '', 'NSK', 0),
(1988, 3, 'Гранитная', 1, '', 'NSK', 0),
(2026, 3, 'Дивизионная', 1, '', 'NSK', 0),
(2068, 3, 'Оловянная', 1, '', 'NSK', 0),
(2118, 3, 'ул. Пролетарская', 1, '', 'NEW', 0),
(2120, 3, 'ул. Артиллерийская', 1, '', 'NEW', 0),
(2162, 3, 'ул. Б. Богаткова', 1, '', 'NEW', 0),
(2179, 3, 'ул. Гурьевская', 1, '', 'NEW', 0),
(2195, 3, 'ул. Далидовича', 1, '', 'NEW', 0),
(2228, 3, 'ул. К. Либкнехта', 1, '', 'NEW', 0),
(2260, 3, 'ул. Красноармейская', 1, '', 'NEW', 0),
(2589, 3, 'Карбышева', 1, '', 'NGES', 0),
(2619, 3, 'Галковского', 1, '', 'NSK54_1', 0),
(2625, 3, 'Костонаева', 1, '', 'NSK54_1', 0),
(2714, 3, 'Леваневского', 1, '', 'NSK54_1', 0),
(2729, 3, 'Советской Сибири', 1, '', 'NSK54_1', 0),
(2764, 3, '12 Декабря', 1, '', 'NSK54_1', 0),
(2790, 3, 'Годовикова', 1, '', 'NSK54_1', 0),
(2802, 3, 'Побежимова', 1, '', 'NSK54_1', 0),
(2845, 3, 'Чкалова', 1, '', 'NSK54_1', 0),
(2943, 3, 'Батарейная', 1, '', 'NSK54_1', 0),
(3096, 3, 'Агрономическая', 1, '', 'NSK54_1', 0),
(3354, 3, 'Крамского', 1, '', 'STROYBIS1', 0),
(3355, 3, '2-й пер. Панфиловцев', 1, '', 'STROYBIS1', 0),
(3356, 3, '3-й Красносельский проезд', 1, '', 'STROYBIS1', 0),
(3357, 3, 'Красносельская', 1, '', 'STROYBIS1', 0),
(3358, 3, 'Покатная', 1, '', 'STROYBIS1', 0),
(3360, 3, '2- й Трикотажный пер', 1, '', 'RMS', 0),
(3361, 3, '2-я Национальная ', 1, '', 'RMS', 0),
(3362, 3, '1-й Трикотажный пер', 1, '', 'RMS', 0),
(3363, 3, 'Трикотажная', 1, '', 'RMS', 0),
(3364, 3, 'Национальная', 1, '', 'RMS', 0),
(3365, 3, 'Мал. Красноармейская', 1, '', 'STROYBIS1', 0),
(3366, 3, 'Либкнехта', 1, '', 'STROYBIS1', 0),
(3367, 3, 'Воинская', 1, '', 'STROYBIS1', 0),
(3368, 3, 'Артиллерийская', 1, '', 'STROYBIS1', 0),
(3369, 3, 'Богаткова ', 1, '', 'STROYBIS1', 0),
(3370, 3, 'Панфиловцев', 1, '', 'STROYBIS1', 0),
(3371, 3, '1-й пер. Панфиловцев', 1, '', 'STROYBIS1', 0),
(3372, 3, 'Автогенная', 1, '', 'STROYBIS1', 0),
(3789, 3, 'Национальная ', 1, '', 'RES', 0),
(3809, 3, 'Воинская ', 1, '', 'RES', 0),
(3811, 3, 'Богаткова', 1, '', 'RES', 0),
(3887, 3, 'Баланс ТП-60', 1, '', 'NSK', 0),
(3895, 3, 'Тульская', 1, '', 'NSK', 0),
(4012, 3, '1-ый пер. Н-Данченко', 1, '', 'NSK', 0),
(4030, 3, '3-ий пер. Успенского', 1, '', 'NSK', 0),
(4059, 3, '4-ый пер. Успенского', 1, '', 'NSK', 0),
(4089, 3, '6-ой пер. Успенского', 1, '', 'NSK', 0),
(4100, 3, '7-ой пер. Успенского', 1, '', 'NSK', 0),
(4114, 3, '8-ой пер. Успенского', 1, '', 'NSK', 0),
(4132, 3, '9-ый пер. Успенского', 1, '', 'NSK', 0),
(4148, 3, 'Н-Данченко', 1, '', 'NSK', 0),
(4159, 3, 'Р-Корсакова', 1, '', 'NSK', 0),
(4190, 3, 'Серафимовича', 1, '', 'NSK', 0),
(4201, 3, 'Телевизионная', 1, '', 'NSK', 0),
(4217, 3, 'Успенского', 1, '', 'NSK', 0),
(4248, 3, 'Новосибирск/Баланс', 1, '', 'NSK', 0),
(4297, 3, 'Зои Космодемьянской', 1, '', 'NSK', 0),
(4833, 3, 'Войкова', 1, '', 'RIM', 0),
(4856, 3, 'Газовая 2-я', 1, '', 'RIM', 0),
(4883, 3, 'Мопра малая', 1, '', 'RIM', 0),
(4892, 3, 'Светлая', 1, '', 'RIM', 0),
(4909, 3, 'Мопра', 1, '', 'RIM', 0),
(4932, 3, 'Осовиахима', 1, '', 'RIM', 0),
(4991, 3, 'Баланс-342', 1, '', 'RIM', 0),
(5145, 3, 'пер.Красногорский', 1, '', 'RIM', 0),
(5148, 3, '1пер.Красногорский', 1, '', 'RIM', 0),
(5173, 3, '30 лет октября', 1, '', 'RIM', 0),
(5203, 3, 'Шапошникова', 1, '', 'RIM', 0),
(5205, 3, 'Баланс-303', 1, '', 'RIM', 0),
(5593, 3, 'Ереванская', 1, '', 'RIM', 0),
(5642, 3, 'Красногорская', 1, '', 'RIM', 0),
(5678, 3, 'Баланс-288', 1, '', 'RIM', 0),
(6729, 3, 'Владимировская 2-я', 1, '', 'RIM', 0),
(7705, 3, '2пер.Инюшенский', 1, '', 'RIM', 0),
(7726, 3, '3пер.Инюшенский', 1, '', 'RIM', 0),
(7750, 3, 'Водонасосная 1-я', 1, '', 'RIM', 0),
(7763, 3, 'Водонасосная 2-я', 1, '', 'RIM', 0),
(7815, 3, '1пер.Инюшенский', 1, '', 'RIM', 0),
(7833, 3, 'Набережная Плющихи', 1, '', 'RIM', 0),
(7845, 3, 'Большевистская', 1, '', 'RIM', 0),
(7863, 3, 'Ракитная 1-я', 1, '', 'NGSPRIOB', 0),
(7902, 3, 'Дальняя', 1, '', 'NGSPRIOB', 0),
(7970, 3, 'Вечерняя', 1, '', 'NGSPRIOB', 0),
(7982, 3, 'Олимпийская', 1, '', 'NGSPRIOB', 0),
(8003, 3, 'Сибсельмашевская', 1, '', 'NGSPRIOB', 0),
(8671, 3, 'Самарский пер', 1, '', 'NGSPRIOB', 0),
(8711, 3, 'Баланс-202', 1, '', 'NGSPRIOB', 0),
(8720, 3, 'Двинская', 1, '', 'NGSPRIOB', 0),
(8721, 4, '11гараж', 8720, '', 'NGSPRIOB', 0),
(8722, 4, '427кв2', 8866, '', 'NGSPRIOB', 0),
(8723, 4, '64', 8720, '', 'NGSPRIOB', 0),
(8724, 4, '26А', 8720, '', 'NGSPRIOB', 0),
(8725, 4, '43кв2', 8720, '', 'NGSPRIOB', 0),
(8726, 4, '47', 8720, '', 'NGSPRIOB', 0),
(8727, 4, '47А', 8720, '', 'NGSPRIOB', 0),
(8728, 4, '31', 8720, '', 'NGSPRIOB', 0),
(8729, 4, '58кв2', 8720, 'ОТКЛ-сгорел дом', 'NGSPRIOB', 0),
(8730, 4, '62/1', 8720, '', 'NGSPRIOB', 0),
(8731, 4, '35', 8720, '', 'NGSPRIOB', 0),
(8732, 4, '59стройка', 8720, '', 'NGSPRIOB', 0),
(8733, 4, '45', 8720, '', 'NGSPRIOB', 0),
(8734, 4, '38кв1', 8720, '', 'NGSPRIOB', 0),
(8735, 4, '56', 8720, '', 'NGSPRIOB', 0),
(8736, 4, '33', 8720, '', 'NGSPRIOB', 0),
(8737, 4, '55кв1', 8720, 'не меняет показания', 'NGSPRIOB', 0),
(8738, 4, '57', 8720, '', 'NGSPRIOB', 0),
(8739, 4, '54', 8720, '', 'NGSPRIOB', 0),
(8740, 4, '62', 8720, '', 'NGSPRIOB', 0),
(8741, 4, '55кв2', 8720, '', 'NGSPRIOB', 0),
(8742, 4, '45А', 8720, '', 'NGSPRIOB', 0),
(8743, 4, '40', 8720, '', 'NGSPRIOB', 0),
(8744, 4, '63', 8720, '', 'NGSPRIOB', 0),
(8745, 4, '61', 8720, '', 'NGSPRIOB', 0),
(8746, 4, '31Акв1', 8720, '', 'NGSPRIOB', 0),
(8747, 4, '43кв1', 8720, '', 'NGSPRIOB', 0),
(8748, 4, '31Акв2', 8720, '', 'NGSPRIOB', 0),
(8749, 4, '33А', 8720, '', 'NGSPRIOB', 0),
(8750, 4, '50', 8720, '', 'NGSPRIOB', 0),
(8751, 4, '43129', 8720, '', 'NGSPRIOB', 0),
(8752, 4, '7', 8720, '', 'NGSPRIOB', 0),
(8753, 4, '23', 8720, '', 'NGSPRIOB', 0),
(8754, 4, '58кв1', 8720, 'ОТКЛ-сгорел дом', 'NGSPRIOB', 0),
(8755, 4, '58кв3', 8720, 'ОТКЛ-сгорел дом', 'NGSPRIOB', 0),
(8756, 4, '20кв2', 8720, '', 'NGSPRIOB', 0),
(8757, 4, '29', 8720, '', 'NGSPRIOB', 0),
(8758, 4, '38кв3', 8720, '', 'NGSPRIOB', 0),
(8759, 4, '53', 8720, '', 'NGSPRIOB', 0),
(8760, 4, '94', 8848, '', 'NGSPRIOB', 0),
(8761, 4, '32', 8720, '', 'NGSPRIOB', 0),
(8762, 4, '13', 8720, '', 'NGSPRIOB', 0),
(8764, 4, '5кв2', 8720, '', 'NGSPRIOB', 0),
(8765, 4, '22', 8720, '', 'NGSPRIOB', 0),
(8766, 4, '60', 8720, '', 'NGSPRIOB', 0),
(8767, 4, '48', 8720, '', 'NGSPRIOB', 0),
(8768, 4, '52', 8720, '', 'NGSPRIOB', 0),
(8769, 4, '46кв1', 8720, '', 'NGSPRIOB', 0),
(8770, 4, '59кв1', 8720, '', 'NGSPRIOB', 0),
(8771, 4, '68', 8720, '', 'NGSPRIOB', 0),
(8772, 4, '51', 8720, '', 'NGSPRIOB', 0),
(8773, 4, '58А', 8720, 'ОТКЛ-сгорел дом', 'NGSPRIOB', 0),
(8774, 4, '45В', 8720, '', 'NGSPRIOB', 0),
(8775, 4, '49', 8720, '', 'NGSPRIOB', 0),
(8776, 4, '42', 8720, '', 'NGSPRIOB', 0),
(8777, 4, '44', 8720, '', 'NGSPRIOB', 0),
(8778, 4, '41', 8720, '', 'NGSPRIOB', 0),
(8779, 4, '30кв1', 8720, '', 'NGSPRIOB', 0),
(8780, 4, '30кв2', 8720, '', 'NGSPRIOB', 0),
(8781, 4, '5кв1', 8720, '', 'NGSPRIOB', 0),
(8782, 4, '19кв1', 8720, '', 'NGSPRIOB', 0),
(8783, 4, '21', 8720, '', 'NGSPRIOB', 0),
(8784, 4, '34', 8720, '', 'NGSPRIOB', 0),
(8785, 4, '28', 8720, '', 'NGSPRIOB', 0),
(8786, 4, '24', 8720, '', 'NGSPRIOB', 0),
(8787, 4, '20кв1', 8720, 'стройка', 'NGSPRIOB', 0),
(8788, 4, '9', 8720, '', 'NGSPRIOB', 0),
(8789, 3, 'Кавалерийская', 1, '', 'NGSPRIOB', 0),
(8790, 4, '331кв2', 8789, '', 'NGSPRIOB', 0),
(8791, 4, '364кв2', 8789, '', 'NGSPRIOB', 0),
(8792, 4, '331кв1', 8789, '', 'NGSPRIOB', 0),
(8793, 4, '364кв1', 8789, '', 'NGSPRIOB', 0),
(8794, 4, '374кв2', 8789, '', 'NGSPRIOB', 0),
(8795, 4, '383', 8789, '', 'NGSPRIOB', 0),
(8796, 4, '354', 8789, '', 'NGSPRIOB', 0),
(8797, 4, '327', 8789, '', 'NGSPRIOB', 0),
(8798, 4, '385', 8789, '', 'NGSPRIOB', 0),
(8799, 4, '359', 8789, '', 'NGSPRIOB', 0),
(8800, 4, '349', 8789, '', 'NGSPRIOB', 0),
(8801, 4, '355', 8789, '', 'NGSPRIOB', 0),
(8802, 4, '382', 8789, '', 'NGSPRIOB', 0),
(8803, 4, '341/1', 8789, 'не жилой', 'NGSPRIOB', 0),
(8804, 4, '339', 8789, '', 'NGSPRIOB', 0),
(8805, 4, '370', 8789, '', 'NGSPRIOB', 0),
(8806, 4, '388', 8789, '', 'NGSPRIOB', 0),
(8807, 4, '361', 8789, '', 'NGSPRIOB', 0),
(8808, 4, '374кв1', 8789, '', 'NGSPRIOB', 0),
(8809, 4, '329', 8789, '', 'NGSPRIOB', 0),
(8810, 4, '358А', 8789, '', 'NGSPRIOB', 0),
(8811, 4, '351', 8789, '', 'NGSPRIOB', 0),
(8812, 4, '333', 8789, '', 'NGSPRIOB', 0),
(8813, 4, '378', 8789, '', 'NGSPRIOB', 0),
(8814, 4, '337', 8789, '', 'NGSPRIOB', 0),
(8815, 4, '362', 8789, '', 'NGSPRIOB', 0),
(8816, 4, '345', 8789, '', 'NGSPRIOB', 0),
(8817, 4, '380кв2', 8789, '', 'NGSPRIOB', 0),
(8818, 4, '347', 8789, '', 'NGSPRIOB', 0),
(8819, 4, '341', 8789, '', 'NGSPRIOB', 0),
(8820, 4, '384кв1', 8789, '', 'NGSPRIOB', 0),
(8821, 4, '386', 8789, '', 'NGSPRIOB', 0),
(8822, 4, '380кв1', 8789, '', 'NGSPRIOB', 0),
(8823, 4, '343', 8789, '', 'NGSPRIOB', 0),
(8824, 4, '360кв1', 8789, '', 'NGSPRIOB', 0),
(8825, 4, '376кв2', 8789, '', 'NGSPRIOB', 0),
(8826, 4, '353', 8789, '', 'NGSPRIOB', 0),
(8827, 4, '357', 8789, '', 'NGSPRIOB', 0),
(8828, 4, '372', 8789, '', 'NGSPRIOB', 0),
(8829, 4, '368', 8789, '', 'NGSPRIOB', 0),
(8830, 4, '384А', 8789, '', 'NGSPRIOB', 0),
(8831, 4, '376кв1', 8789, '', 'NGSPRIOB', 0),
(8832, 4, '366', 8789, '', 'NGSPRIOB', 0),
(8833, 3, 'Кропоткина', 1, '', 'NGSPRIOB', 0),
(8834, 4, '8кв1', 8835, '', 'NGSPRIOB', 0),
(8835, 3, 'Кропоткина малая', 1, '', 'NGSPRIOB', 0),
(8836, 4, '1кв1', 8835, '', 'NGSPRIOB', 0),
(8837, 4, '43103', 8835, '', 'NGSPRIOB', 0),
(8838, 4, '9', 8835, '', 'NGSPRIOB', 0),
(8839, 4, '1кв2', 8835, '', 'NGSPRIOB', 0),
(8840, 4, '449', 8833, '', 'NGSPRIOB', 0),
(8841, 4, '7', 8835, '', 'NGSPRIOB', 0),
(8842, 4, '13', 8835, '', 'NGSPRIOB', 0),
(8843, 4, '5', 8835, '', 'NGSPRIOB', 0),
(8845, 4, '3', 8835, '', 'NGSPRIOB', 0),
(8846, 4, '11А', 8835, '', 'NGSPRIOB', 0),
(8847, 4, '4 автомагазин', 8835, '', 'NGSPRIOB', 0),
(8848, 3, 'Планетная', 1, '', 'NGSPRIOB', 0),
(8849, 4, '119', 8848, '', 'NGSPRIOB', 0),
(8850, 4, '4', 8835, '', 'NGSPRIOB', 0),
(8851, 4, '426 1дом', 8866, '', 'NGSPRIOB', 0),
(8852, 4, '90', 8848, '', 'NGSPRIOB', 0),
(8853, 4, '86', 8848, '', 'NGSPRIOB', 0),
(8854, 4, '92', 8848, 'шунт', 'NGSPRIOB', 0),
(8855, 4, '115кв1', 8848, '', 'NGSPRIOB', 0),
(8856, 4, '123', 8848, '', 'NGSPRIOB', 0),
(8857, 4, '94А', 8848, '', 'NGSPRIOB', 0),
(8858, 4, '111', 8848, '', 'NGSPRIOB', 0),
(8859, 4, '113', 8848, '', 'NGSPRIOB', 0),
(8860, 4, '125', 8848, '', 'NGSPRIOB', 0),
(8861, 4, '113А', 8848, '', 'NGSPRIOB', 0),
(8862, 4, '115кв2', 8848, '', 'NGSPRIOB', 0),
(8863, 4, '114кв1', 4892, '', 'NGSPRIOB', 0),
(8865, 4, '114кв2', 4892, '', 'NGSPRIOB', 0),
(8866, 3, 'Свободы', 1, '', 'NGSPRIOB', 0),
(8867, 4, '422', 8866, '', 'NGSPRIOB', 0),
(8868, 4, '433', 8866, '', 'NGSPRIOB', 0),
(8869, 4, '428', 8866, '', 'NGSPRIOB', 0),
(8870, 4, '429', 8866, '', 'NGSPRIOB', 0),
(8871, 4, '403кв2', 8866, 'не жилой', 'NGSPRIOB', 0),
(8872, 4, '475', 8866, '', 'NGSPRIOB', 0),
(8873, 4, '405', 8866, '', 'NGSPRIOB', 0),
(8874, 4, '418', 8866, '', 'NGSPRIOB', 0),
(8875, 4, '423', 8866, '', 'NGSPRIOB', 0),
(8876, 4, '409кв2', 8866, '', 'NGSPRIOB', 0),
(8877, 4, '431', 8866, '', 'NGSPRIOB', 0),
(8878, 4, '427кв1', 8866, '', 'NGSPRIOB', 0),
(8880, 4, '415кв2', 8866, '', 'NGSPRIOB', 0),
(8881, 4, '415кв1', 8866, '', 'NGSPRIOB', 0),
(8882, 4, '414кв2', 8866, '', 'NGSPRIOB', 0),
(8883, 4, '419кв1', 8866, '', 'NGSPRIOB', 0),
(8884, 4, '425кв2', 8866, '', 'NGSPRIOB', 0),
(8885, 4, '411кв1', 8866, '', 'NGSPRIOB', 0),
(8886, 4, '410', 8866, '', 'NGSPRIOB', 0),
(8887, 4, '425кв1', 8866, '', 'NGSPRIOB', 0),
(8888, 4, '420/2', 8866, '', 'NGSPRIOB', 0),
(8889, 4, '417', 8866, '', 'NGSPRIOB', 0),
(8890, 4, '421кв1', 8866, '', 'NGSPRIOB', 0),
(8891, 4, '421кв2', 8866, '', 'NGSPRIOB', 0),
(8892, 4, '419кв2', 8866, '', 'NGSPRIOB', 0),
(8893, 4, '420', 8866, '', 'NGSPRIOB', 0),
(8894, 4, '403кв1', 8866, '', 'NGSPRIOB', 0),
(8895, 4, '430', 8866, '', 'NGSPRIOB', 0),
(8896, 4, '430/2', 8866, '', 'NGSPRIOB', 0),
(8897, 4, '414кв1', 8866, '', 'NGSPRIOB', 0),
(8898, 4, '407', 8866, '', 'NGSPRIOB', 0),
(8899, 4, '406', 8866, '', 'NGSPRIOB', 0),
(8900, 4, '412', 8866, '', 'NGSPRIOB', 0),
(8901, 4, '408', 8866, '', 'NGSPRIOB', 0),
(8902, 4, '413', 8866, '', 'NGSPRIOB', 0),
(8903, 3, 'Баланс-383', 1, '', 'NGSPRIOB', 0),
(8904, 4, 'основной', 8903, '', 'NGSPRIOB', 0),
(8941, 3, 'Шадринская', 1, '', 'NGSPRIOB', 0),
(8978, 3, 'Баланс-203', 1, '', 'NGSPRIOB', 0),
(9104, 3, 'Сухарная', 1, '', 'NGSPRIOB', 0),
(9202, 3, 'Баланс-204', 1, '', 'NGSPRIOB', 0),
(9301, 3, 'Кустарная 3-я', 1, '', 'NGSPRIOB', 0),
(9302, 3, 'Кустарная 2-я', 1, '', 'NGSPRIOB', 0),
(9303, 3, 'Кустарная 1-я', 1, '', 'NGSPRIOB', 0),
(9360, 3, '3пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9383, 3, '4пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9409, 3, '5пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9436, 3, '6пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9463, 3, '7пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9488, 3, '8пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9511, 3, '9пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(9526, 3, 'Садов.общ', 1, '', 'NGSPRIOB', 0),
(9937, 3, 'Ельцовка 2-я', 1, '', 'NGSPRIOB', 0),
(9989, 3, 'Сухарная береговая 2-я', 1, '', 'NGSPRIOB', 0),
(10005, 3, 'Дубравы', 1, '', 'NGSPRIOB', 0),
(10015, 3, 'Камышенская', 1, '', 'NGSPRIOB', 0),
(10059, 3, 'пер.Камышенский лог', 1, '', 'NGSPRIOB', 0),
(10092, 3, 'пер.Асфальтовый', 1, '', 'NGSPRIOB', 0),
(10134, 3, 'пер.Средний', 1, '', 'NGSPRIOB', 0),
(10171, 3, 'Гайдара', 1, '', 'NGSPRIOB', 0),
(10232, 3, 'Баланс 1616', 1, '', 'NGSPRIOB', 0),
(10234, 3, 'Хитровская', 1, '', 'NGSPRIOB', 0),
(10845, 3, 'Большая', 1, '', 'NGSPRIOB', 0),
(10938, 3, 'Туннельная', 1, '', 'NGSPRIOB', 0),
(10962, 3, 'Баланс 315', 1, '', 'NGSPRIOB', 0),
(14115, 3, 'Баланс 1615', 1, '', 'NGSPRIOB', 0),
(14167, 3, 'Черкасская', 1, '', 'NGSPRIOB', 0),
(14173, 3, '1пер.Черкасский', 1, '', 'NGSPRIOB', 0),
(14177, 3, '3пер.Черкасский', 1, '', 'NGSPRIOB', 0),
(14189, 3, '1пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(14198, 3, '2пер.Чукотский', 1, '', 'NGSPRIOB', 0),
(14228, 3, 'Дальняя 2-я', 1, '', 'NGSPRIOB', 0),
(14252, 3, 'Ракитная 2-я', 1, '', 'NGSPRIOB', 0),
(14415, 3, 'Баланс 1612-П', 1, '', 'NGSPRIOB', 0),
(14458, 4, 'ВЛ-1', 8903, 'фидер', 'NGSPRIOB', 0),
(14459, 4, 'ВЛ-2', 8903, 'фидер', 'NGSPRIOB', 0),
(14460, 4, 'ВЛ-3', 8903, 'фидер', 'NGSPRIOB', 0),
(14461, 4, 'ВЛ-4', 8903, 'фидер', 'NGSPRIOB', 0),
(14462, 4, 'ВЛ-5 Вся япония', 8903, '', 'NGSPRIOB', 0),
(14463, 4, 'ВЛ-6 торг.павильон', 8903, '', 'NGSPRIOB', 0),
(14464, 4, 'ВЛ-7 Горсвет', 8903, '', 'NGSPRIOB', 0),
(14494, 3, 'Баланс 1619', 1, '', 'NGSPRIOB', 0),
(14513, 3, 'Астрономическая', 1, '', 'NGSPRIOB', 0),
(14576, 3, 'Саратовская', 1, '', 'NGSPRIOB', 0),
(14667, 3, 'Баланс-84', 1, '', 'NGSPRIOB', 0),
(14698, 3, 'Ногина', 1, '', 'NGSPRIOB', 0),
(14715, 3, 'пер.Ногина', 1, '', 'NGSPRIOB', 0),
(14779, 3, 'Баланс-201', 1, '', 'NGSPRIOB', 0),
(14869, 3, 'Баланс-167', 1, '', 'NGSPRIOB', 0),
(14905, 3, 'Баланс 662', 1, '', 'NGSPRIOB', 0),
(14927, 3, 'Болотная', 1, '', 'NGSPRIOB', 0),
(15032, 3, 'Таежная', 1, '', 'NGSPRIOB', 0),
(15097, 3, 'Яринская', 1, '', 'NGSPRIOB', 0),
(15139, 3, 'пер.Сосновый', 1, '', 'NGSPRIOB', 0),
(15221, 3, 'Баланс-210', 1, '', 'NGSPRIOB', 0),
(15420, 2, 'Новосибирск (ДСД)', 2, '', 'RIM1', 0),
(15421, 3, 'ул. Объединения, 80', 15420, '', 'RIM1', 0),
(15423, 3, 'ул. Солидарности', 15420, '', 'RIM1', 0),
(15425, 3, 'ул. Солидарности ', 15420, '', 'RIM1', 0),
(15429, 3, 'ул. Новоселов, 14', 15420, '', 'RIM1', 0),
(15431, 3, 'ул. Б.Хмельницкого-Учительская', 15420, '', 'RIM1', 0),
(15457, 3, ' ул. Тухачевского,21', 15420, '', 'RIM1', 0),
(15458, 3, 'ул. Тухачевского,210', 15420, '', 'RIM1', 0),
(15701, 4, '37кв1', 8720, 'отключен', 'NGSPRIOB', 0),
(15702, 4, '37кв2', 8720, 'отключен', 'NGSPRIOB', 0),
(15703, 4, '15', 8720, '', 'NGSPRIOB', 0),
(15704, 4, '38кв2', 8720, '', 'NGSPRIOB', 0),
(15705, 4, '46кв2', 8720, '', 'NGSPRIOB', 0),
(15706, 4, '358', 8789, '', 'NGSPRIOB', 0),
(15707, 4, '360кв2', 8789, '', 'NGSPRIOB', 0),
(15708, 4, '384кв2', 8789, '', 'NGSPRIOB', 0),
(15710, 4, '8кв2', 8835, '', 'NGSPRIOB', 0),
(15712, 4, '116', 4892, '', 'NGSPRIOB', 0),
(15713, 4, '409кв1', 8866, '', 'NGSPRIOB', 0),
(15714, 4, '411кв2', 8866, '', 'NGSPRIOB', 0),
(15715, 4, '426 2дом', 8866, '', 'NGSPRIOB', 0),
(15716, 4, '11', 8720, '', 'NGSPRIOB', 0),
(15741, 3, 'Баланс-242', 1, '', 'NGSPRIOB', 0),
(15777, 3, '2пер.Черкасский', 1, '', 'NGSPRIOB', 0),
(15796, 3, '4пер.Черкасский', 1, '', 'NGSPRIOB', 0),
(16020, 3, 'Чулымская 3-Я', 1, '', 'NGSPRIOB', 0),
(16126, 3, 'Чулымская 2-Я', 1, '', 'NGSPRIOB', 0),
(16140, 3, 'Попова', 1, '', 'NGSPRIOB', 0),
(16153, 3, 'Шоссейная 2-я', 1, '', 'NGSPRIOB', 0),
(16200, 3, 'Баланс-21А', 1, '', 'NGSPRIOB', 0),
(16220, 3, 'Баланс-126', 1, '', 'NGSPRIOB', 0),
(16226, 3, 'Баланс-218', 1, '', 'NGSPRIOB', 0),
(16240, 3, 'Баланс-160', 1, '', 'NGSPRIOB', 0),
(16245, 3, 'Баланс-182', 1, '', 'NGSPRIOB', 0),
(16281, 3, 'Тушинская', 1, '', 'RMS1415', 0),
(16283, 3, 'Сургутская', 1, '', 'NGSPRIOB', 0),
(16296, 3, 'Пролетарская', 1, '', 'STROYBIS1', 0),
(16326, 3, 'ул.Аникина', 15420, '', 'RIM1', 0),
(16370, 3, 'Самарская', 1, '', 'NGSPRIOB', 0),
(16719, 4, '3', 8720, 'отключен за неуплату', 'NGSPRIOB', 0),
(16722, 4, '59кв2', 8720, '', 'NGSPRIOB', 0),
(16759, 3, 'Лазо', 1, '', 'NGSPRIOB', 0),
(17004, 3, 'Баланс ТП-17', 1, '', 'NGSPRIOB', 0),
(17104, 3, 'Баланс ТП-621', 1, '', 'NGSPRIOB', 0),
(17110, 3, 'Баланс ТП-231', 1, '', 'NGSPRIOB', 0),
(17124, 3, 'Баланс ТП-181', 1, '', 'NGSPRIOB', 0),
(17446, 3, 'СНТ строитель', 1, '', 'NGSPRIOB', 0),
(17585, 3, 'пер.Новый', 1, '', 'NGSPRIOB', 0),
(17589, 3, 'Чулымская 1-Я', 1, '', 'NGSPRIOB', 0),
(17969, 3, 'Баланс ТП-144', 1, '', 'NGSPRIOB', 0),
(18091, 3, 'Сухарная 2-я', 1, '', 'RIM', 0),
(18248, 3, 'Ногина спуск', 1, '', 'NGSPRIOB', 0),
(18311, 3, 'Дачная', 76, '', 'NEW', 0),
(18312, 1, 'firm-1', NULL, 'com', '', 0),
(18313, 1, 'firm-2', NULL, 'com', '', 0),
(18314, 1, 'firm-2', NULL, 'com', '', 0),
(18315, 1, 'firm-2', NULL, 'com', '', 0),
(18316, 1, 'firm-3', NULL, 'com', '', 0),
(18317, 1, 'firm-1', 0, 'com', 'f', 0),
(18319, 1, 'Украина', 0, '', 'OWNER', 0),
(18320, 2, 'Одесса', 18319, 'asdasdasda', 'TEСT', 0),
(18321, 4, '99авгд', 8866, 'pract-natk', 'natk', 0),
(18322, 3, 'достоевского', 1, '0', 'тест', 0),
(18326, 4, 'test', 1696, 'test', 'test', 0),
(18327, 4, 'test', 1696, 'test', 'test', 0),
(18328, 4, 'test', 1696, 'test', 'test', 0),
(18329, 4, '12313123', 0, 'asdsadas', 'dasdasd', 0),
(18330, 4, 'sadasd', 2026, 'asdasd12323', 'asdasd', 0),
(18331, 4, '173', 3369, '555', '18316', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `geopoint`
--

CREATE TABLE `geopoint` (
  `account_id` int(11) UNSIGNED NOT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `lng` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `geopoint`
--

INSERT INTO `geopoint` (`account_id`, `lat`, `lng`) VALUES
(8722, '55.0608', '82.9521'),
(8723, '55.0619', '82.9565'),
(8724, '55.0609', '82.9505'),
(8725, '55.0618', '82.955'),
(8726, '55.062', '82.9559'),
(8727, '55.062', '82.9559'),
(8728, '55.0615', '82.9534'),
(8729, '55.0617', '82.9558'),
(8730, '55.0618', '82.9563'),
(8731, '55.0616', '82.9541'),
(8732, '55.0613', '82.9522'),
(8733, '55.0619', '82.9556'),
(8734, '55.0613', '82.9528'),
(8735, '55.0618', '82.9555'),
(8736, '55.0616', '82.9538'),
(8737, '55.0621', '82.9568'),
(8738, '55.0621', '82.957'),
(8739, '55.0617', '82.9552'),
(8740, '55.0618', '82.9563'),
(8741, '55.0621', '82.9568'),
(8742, '55.0619', '82.9556'),
(8743, '55.0613', '82.9531'),
(8744, '55.0623', '82.9578'),
(8745, '55.0622', '82.9576'),
(8746, '55.0616', '82.9533'),
(8747, '55.0618', '82.955'),
(8748, '55.0616', '82.9533'),
(8749, '55.0616', '82.9538'),
(8750, '55.0616', '82.9547'),
(8751, '55.0613', '82.9522'),
(8752, '55.0609', '82.9492'),
(8753, '55.0613', '82.9519'),
(8754, '55.0617', '82.9558'),
(8755, '55.0617', '82.9558'),
(8756, '55.0606', '82.949'),
(8757, '55.0615', '82.953'),
(8758, '55.0613', '82.9528'),
(8759, '55.062', '82.9566'),
(8760, '55.0614', '82.9523'),
(8761, '55.061', '82.9513'),
(8762, '55.061', '82.9503'),
(8764, '55.0608', '82.949'),
(8765, '55.0607', '82.9494'),
(8766, '55.0618', '82.956'),
(8767, '55.0616', '82.9546'),
(8768, '55.0617', '82.9549'),
(8769, '55.0616', '82.9546'),
(8770, '55.0621', '82.9574'),
(8771, '55.0622', '82.9586'),
(8772, '55.062', '82.9564'),
(8773, '55.0616', '82.9559'),
(8774, '55.0619', '82.9556'),
(8775, '55.062', '82.9562'),
(8776, '55.0614', '82.9534'),
(8777, '55.0614', '82.9539'),
(8778, '55.0618', '82.9548'),
(8779, '55.061', '82.951'),
(8780, '55.061', '82.951'),
(8781, '55.0608', '82.949'),
(8782, '55.0612', '82.9513'),
(8783, '55.0613', '82.9516'),
(8784, '55.0611', '82.9516'),
(8785, '55.061', '82.9507'),
(8786, '55.0608', '82.9497'),
(8787, '55.0606', '82.949'),
(8788, '55.0609', '82.9496'),
(8790, '55.0615', '82.9491'),
(8791, '55.0613', '82.9499'),
(8792, '55.0615', '82.9491'),
(8793, '55.0613', '82.9499'),
(8794, '55.0614', '82.9511'),
(8795, '55.0621', '82.9531'),
(8796, '55.0611', '82.9485'),
(8797, '55.0614', '82.9485'),
(8798, '55.0621', '82.9535'),
(8799, '55.062', '82.9525'),
(8800, '55.0618', '82.9511'),
(8801, '55.0619', '82.9517'),
(8802, '55.0617', '82.9522'),
(8803, '55.0617', '82.9502'),
(8804, '55.0617', '82.95'),
(8805, '55.0614', '82.9506'),
(8806, '55.0619', '82.9536'),
(8807, '55.062', '82.9528'),
(8808, '55.0614', '82.9511'),
(8809, '55.0614', '82.9488'),
(8810, '55.0613', '82.9492'),
(8811, '55.0618', '82.9513'),
(8812, '55.0615', '82.9494'),
(8813, '55.0615', '82.9514'),
(8814, '55.0616', '82.9498'),
(8815, '55.0613', '82.9497'),
(8816, '55.0617', '82.9507'),
(8817, '55.0616', '82.9517'),
(8818, '55.0618', '82.9509'),
(8819, '55.0617', '82.9502'),
(8820, '55.0617', '82.9526'),
(8821, '55.0618', '82.9533'),
(8822, '55.0616', '82.9517'),
(8823, '55.0617', '82.9504'),
(8824, '55.0613', '82.9494'),
(8825, '55.0616', '82.9511'),
(8826, '55.0619', '82.9516'),
(8827, '55.0619', '82.9521'),
(8828, '55.0615', '82.9508'),
(8829, '55.0614', '82.9503'),
(8830, '55.0618', '82.9528'),
(8831, '55.0616', '82.9511'),
(8832, '55.0614', '82.9501'),
(8834, '55.06', '82.9515'),
(8836, '55.0601', '82.9512'),
(8837, '55.0606', '82.9546'),
(8838, '55.0602', '82.9517'),
(8839, '55.0601', '82.9512'),
(8840, '55.0597', '82.952'),
(8841, '55.0601', '82.9515'),
(8842, '55.0602', '82.9521'),
(8843, '55.0602', '82.9512'),
(8845, '55.0601', '82.9512'),
(8846, '55.0603', '82.9519'),
(8847, '55.0595', '82.9518'),
(8849, '55.061', '82.9521'),
(8850, '55.06', '82.9515'),
(8851, '55.0607', '82.9528'),
(8852, '55.0609', '82.9526'),
(8853, '55.0605', '82.9527'),
(8854, '55.061', '82.9525'),
(8855, '55.0606', '82.9522'),
(8856, '55.0613', '82.9519'),
(8857, '55.0612', '82.9524'),
(8858, '55.0601', '82.9524'),
(8859, '55.0603', '82.9523'),
(8860, '55.0616', '82.9517'),
(8861, '55.0603', '82.9523'),
(8862, '55.0606', '82.9522'),
(8863, '55.0606', '82.9487'),
(8865, '55.0606', '82.9487'),
(8867, '55.0606', '82.952'),
(8868, '55.061', '82.9533'),
(8869, '55.0607', '82.9529'),
(8870, '55.0608', '82.9525'),
(8871, '55.0602', '82.9487'),
(8872, '55.0618', '82.9575'),
(8873, '55.0603', '82.9492'),
(8874, '55.0604', '82.9512'),
(8875, '55.0607', '82.9516'),
(8876, '55.0604', '82.95'),
(8877, '55.0609', '82.953'),
(8878, '55.0608', '82.9521'),
(8880, '55.0606', '82.9506'),
(8881, '55.0606', '82.9506'),
(8882, '55.0604', '82.9507'),
(8883, '55.0606', '82.9511'),
(8884, '55.0608', '82.9519'),
(8885, '55.0605', '82.9501'),
(8886, '55.0603', '82.9503'),
(8887, '55.0608', '82.9519'),
(8888, '55.0604', '82.9516'),
(8889, '55.0606', '82.9507'),
(8890, '55.0607', '82.9513'),
(8891, '55.0607', '82.9513'),
(8892, '55.0606', '82.9511'),
(8893, '55.0604', '82.9516'),
(8894, '55.0602', '82.9487'),
(8895, '55.0607', '82.9532'),
(8896, '55.0607', '82.9532'),
(8897, '55.0604', '82.9507'),
(8898, '55.0604', '82.9495'),
(8899, '55.0602', '82.95'),
(8900, '55.0603', '82.9505'),
(8901, '55.0602', '82.9502'),
(8902, '55.0605', '82.9504'),
(8904, '55.0084', '82.9357'),
(9995, NULL, NULL),
(14458, '55.0285', '82.9053'),
(14459, '55.0285', '82.9053'),
(14460, '55.0285', '82.9053'),
(14461, '55.0285', '82.9053'),
(14462, '55.0595', '82.9518'),
(14463, '55.0084', '82.9357'),
(14464, '55.0084', '82.9357'),
(15701, '55.0617', '82.9543'),
(15702, '55.0617', '82.9543'),
(15703, '55.0611', '82.9506'),
(15704, '55.0613', '82.9528'),
(15705, '55.0616', '82.9546'),
(15706, '55.0613', '82.9492'),
(15707, '55.0613', '82.9494'),
(15708, '55.0617', '82.9526'),
(15710, '55.06', '82.9515'),
(15712, '55.0609', '82.9485'),
(15713, '55.0604', '82.95'),
(15714, '55.0605', '82.9501'),
(15715, '55.0607', '82.9528'),
(15716, '55.061', '82.9499'),
(16719, '55.0608', '82.9488'),
(16722, '55.0621', '82.9574'),
(18321, NULL, NULL),
(18326, '123.123', '143.123'),
(18327, '123.123', '143.123'),
(18328, '123.123', '143.123'),
(18329, '55.0621', '55.0621'),
(18330, '55.062121312', '55.0621123123');

-- --------------------------------------------------------

--
-- Структура таблицы `graphic`
--

CREATE TABLE `graphic` (
  `graphic_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `graphic` mediumblob,
  `GEOBOUNDNW_LAT` float DEFAULT NULL,
  `GEOBOUNDNW_LNG` float DEFAULT NULL,
  `GEOBOUNDSE_LAT` float DEFAULT NULL,
  `GEOBOUNDSE_LNG` float DEFAULT NULL,
  `zoom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `graphic_account`
--

CREATE TABLE `graphic_account` (
  `graphic_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `x_coord` int(11) DEFAULT NULL,
  `y_coord` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `graphic_account`
--

INSERT INTO `graphic_account` (`graphic_id`, `account_id`, `x_coord`, `y_coord`) VALUES
(1, 1, -25, 131),
(2, 2, 55, 83);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Индексы таблицы `geopoint`
--
ALTER TABLE `geopoint`
  ADD PRIMARY KEY (`account_id`);

--
-- Индексы таблицы `graphic`
--
ALTER TABLE `graphic`
  ADD PRIMARY KEY (`graphic_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `graphic_account`
--
ALTER TABLE `graphic_account`
  ADD UNIQUE KEY `account_id` (`account_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18332;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
