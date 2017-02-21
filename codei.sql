-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2017 г., 18:52
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `codei`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id товара',
  `title` varchar(128) NOT NULL COMMENT 'Название товара',
  `akcia` varchar(256) NOT NULL COMMENT 'Акция',
  `photo_url` varchar(256) NOT NULL COMMENT 'Фото продукта',
  `description` text NOT NULL COMMENT 'Характеристики',
  `price` varchar(32) NOT NULL COMMENT 'Цена',
  `category_id` int(11) NOT NULL COMMENT 'id категории',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `akcia`, `photo_url`, `description`, `price`, `category_id`) VALUES
(1, 'Керамзитобетонный блок СБ-ПР 25.11.20', 'Wrap.png', 'sb-pr-25-11-20-800x600.jpg', 'Длина, мм	249 Высота, мм	188 Ширина, мм	115 Вес поддона, т	1 Количество на поддоне, шт	160', '7.13 грн ', 3),
(2, 'Бетонный блок СБ-ПР-Ц-Р-390.190.188-М100-F50', '', 'sp-pr-c-r-390-190-188-f50-800x600.jpg', 'Длина, мм	390 Высота, мм	188 Ширина, мм	190 Вес поддона, т	1,8 Количество на поддоне, шт	75', '14.02 грн', 1),
(3, 'Бетонный блок CБ-ПР 50.8.20 75/1650', '', 'sb-pr-50-8-20-75-1650-800x600.jpg', 'Длина, мм	500 Высота, мм	200 Ширина, мм	80 Вес поддона, т	1,7 Количество на поддоне, шт	130', '7.52 грн', 1),
(4, 'Бетонный блок CБ-ПР-Ц-Р-130.90.188-М100-F25', 'Wrap.png', 'sp-pr-c-r-130-90-188-f25-800x600.jpg', 'Длина, мм 1480, мм Высота (H)	220, мм Ширина (B)	1190, мм Масса	0.68, т Расчетная нагрузка	800кгс/м2', '3.19 грн', 7),
(5, 'Бетонный блок CБ-ПР-Ц-Р-200.190.188-М100-F50', '', 'sp-pr-c-r-200-190-188-f50-800x600.jpg', 'Длина, мм	200 Высота, мм	188 Ширина, мм	190 Вес поддона, т	1,6 Количество на поддоне, шт	75', '4.33 грн', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id категории',
  `title` varchar(128) NOT NULL COMMENT 'Название товара',
  `photo_url` varchar(256) NOT NULL COMMENT 'url картинки',
  `description` text NOT NULL COMMENT 'Описание категории',
  `visible` int(11) NOT NULL COMMENT 'Публикация',
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `product_category`
--

INSERT INTO `product_category` (`id`, `title`, `photo_url`, `description`, `visible`) VALUES
(1, 'Газобетонные блоки', 'keramzitobeton.png', 'Газобетон и газоблок это одно и то же. Просто кому то привычнее газобетон (газоблок) Стоунлайт использовать первое слово, а кому то второе. Правильно же вообще использовать фразу газобетонные блоки. Этот строительный материал не только выгоден в возведении несущих стен, но и выгоден как ежегодное капиталовложение средств. Экономику Украины колбасит, валюта скачет, цена строительных материалов в основе своей привязана к доллару, но почему, то не падает с обвалом валюты, а только растет.', 1),
(2, 'Гиперпрессованный кирпич', 'GPK.png', 'Гиперпрессованный кирпич', 1),
(3, 'Керамические блоки', 'aaf_k11.png', 'Керамические блоки', 1),
(4, 'Кирпич Рядовой керамический', 'ki1.png', 'Кирпич Рядовой керамический с разных зоводов', 1),
(5, 'Кирпич облицовочный', 'k10.png', 'Кирпич облицовочный', 1),
(6, 'Кирпич облицовочный ручной формовки', 'd_1.png', 'Кирпич облицовочный ручной формовки', 1),
(7, 'Кирпич огнеупорный', 'ryadovoy22.png', 'Кирпич огнеупорный', 1),
(8, 'Клинкерный кирпич', 'ryadovoy22.png', 'Клинкерный кирпич', 1),
(9, 'Огнеупорные материалы', 'ryadovoy22.png', 'Огнеупорные материалы', 1),
(10, 'ЖБИ изделия', 'GBI.png', 'Отличительной чертой железобетонных конструкций является прочность. Сочетание бетона и арматуры способствует сохранению целостности изделия. Бетон отлично защищает конструкцию от сжатия вследствие значительных нагрузок, а стальная арматура, в свою очередь, предотвращает растягивание конструкции.', 1),
(11, 'Печной кирпич', 'ryadovoy22.png', 'Печной кирпич', 1),
(12, 'Силикатный кирпич', 'ryadovoy22.png', 'Силикатный кирпич', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Индификатор',
  `username` varchar(100) NOT NULL COMMENT 'Логин',
  `password` varchar(100) NOT NULL COMMENT 'Пароль',
  `email` varchar(100) NOT NULL COMMENT 'Почта',
  `ip` varchar(100) NOT NULL COMMENT 'IP адресс',
  `status` varchar(10) NOT NULL COMMENT 'Статус',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `ip`, `status`) VALUES
(1, 'admin', '1234567890qwerty', 'admin@mail.ru', '127.0.0.1', '2'),
(2, 'user', '1234567890', 'user@mail.ru', '127.0.0.1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
