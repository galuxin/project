-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 10 2016 г., 15:00
-- Версия сервера: 5.5.45
-- Версия PHP: 5.4.44

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `RB_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'exsailer2009@yandex.ua', '1234');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `image`) VALUES
(2, 0, 'Каталог', ''),
(3, 0, 'Оплата и доставка', ''),
(4, 0, 'Контакты', ''),
(5, 2, 'Кошельки', '112.jpg'),
(6, 2, 'Рюкзаки', '114.jpg'),
(7, 2, 'Сумки', '115.jpg'),
(8, 2, 'Ремни', '114.jpg'),
(9, 2, 'Чехлы', '115.jpg'),
(10, 2, 'Обложки', '112.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_payment` datetime DEFAULT NULL,
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `user_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date_created`, `date_payment`, `date_modification`, `status`, `comment`, `user_ip`) VALUES
(1, 1, '2016-01-13 21:43:47', NULL, '2016-01-13 18:43:47', 0, 'id пользователя: 1<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(2, 1, '2016-01-13 22:01:59', NULL, '2016-01-13 19:01:59', 0, 'id пользователя: 1<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(3, 10, '2016-01-23 15:31:18', NULL, '2016-01-23 12:31:18', 0, 'id пользователя: 10<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(4, 10, '2016-01-31 22:19:03', NULL, '2016-01-31 19:19:03', 0, 'id пользователя: 10<br>\r\n                 Имя: Ваня<br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(5, 10, '2016-02-02 23:00:11', NULL, '2016-02-02 20:00:11', 0, 'id пользователя: 10<br>\r\n                 Имя: Ваня<br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(6, 0, '2016-02-02 23:16:35', NULL, '2016-02-02 20:16:35', 0, 'id пользователя: <br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(7, 10, '2016-02-02 23:30:01', NULL, '2016-02-02 20:30:01', 0, 'id пользователя: 10<br>\r\n                 Имя: Ваня<br>\r\n                 Тел: 435345345<br>\r\n                 Адрес: ', '127.0.0.1'),
(8, 0, '2016-02-03 21:25:52', NULL, '2016-02-03 18:25:52', 0, 'id пользователя: <br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(9, 10, '2016-02-03 21:43:09', NULL, '2016-02-03 18:43:09', 0, 'id пользователя: 10<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(10, 10, '2016-02-03 21:43:51', NULL, '2016-02-03 18:43:51', 0, 'id пользователя: 10<br>\r\n                 Имя: Ваня<br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(11, 77, '2016-02-03 21:46:58', NULL, '2016-02-03 18:46:58', 0, 'id пользователя: 77<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(12, 79, '2016-02-03 23:36:47', NULL, '2016-02-03 20:36:47', 0, 'id пользователя: 79<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(13, 10, '2016-02-06 18:22:25', NULL, '2016-02-06 15:22:25', 0, 'id пользователя: 10<br>\r\n                 Имя: <br>\r\n                 Тел: <br>\r\n                 Адрес: ', '127.0.0.1'),
(14, 10, '2016-02-17 20:20:19', NULL, '2016-02-17 17:20:19', 0, 'id пользователя: 10<br>\r\n                 Имя: sdfsdf<br>\r\n                 Тел: 23423<br>\r\n                 Адрес: ', '127.0.0.1');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `image6` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `category_name`, `name`, `description`, `price`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `status`) VALUES
(1, 5, 'Кошельки', 'Кошелёк коричневый', 'Вместительное и удобное портмоне.\r\n\r\nВнутри три блока отделов для карточек, отдел для мелочи на молнии и два отдела для купюр.\r\n\r\nВсего портмоне имеет 14 отделов для пластиковых карт.\r\n\r\nКрышка основного отделения закрывается на магниты.', 333, '111.jpg\r\n', '112.jpg', '122.jpg', '111.jpg', '114.jpg', '115.jpg', 1),
(2, 5, 'Кошельки', 'Кардхолдер', 'ываываываывмывмывмывмывмывмывмымывмыіваіваів\r\nіваівавааааааааааааааааааааааааааааааааааааа\r\nаааааааааааааааааааааааааааааааааааааааааа\r\nаааааааааааааааааааааааааааааааааа', 888, '110.jpg', '0', '', '', '', '', 1),
(3, 5, 'Кошельки', 'Портмоне', 'іфівфівфівфівфівіфвввввввввввввввввввввв\r\nвввввввввввввввввввввввввввввввввввввв\r\nвввввввввввввввввввввввввввввввв', 8888, '109.jpg', '0', '', '', '', '', 1),
(4, 5, 'Кошельки', 'Кошелек белый', 'вапппппппппппппппппппппппппппппппппп\r\nпппппппппппппппппппппппппп', 3333, '125.jpg', '0', '', '', '', '', 1),
(5, 5, 'Кошельки', 'Кошелек', 'івааааааааааааааааааааааваівммсчмчсмчсмчсмчсмчсмчс', 455, '123.jpg', '0', '', '', '', '', 1),
(6, 5, 'Кошельки', 'Кошелек оранжевый', 'вапвапвапвапвапвапвапвапвапвапвап\r\nаааааааааааааааааааааааааааааа', 432, '124.jpg', '0', '', '', '', '', 1),
(7, 5, 'Кошельки', 'Портмоне класика', 'ываываывафывфаысфысфысывсывсфывс\r\nыфсывсфысфывсывсывс\r\n', 978, '122.jpg', '0', '', '', '', '', 1),
(8, 5, 'Кошельки', 'Кошелёк мини', 'вапвапаааааааааааааааааааааааааааа\r\nавпвівамівмваівіаавіаіваіваі', 476, '126.jpg', '0', '', '', '', '', 1),
(9, 5, 'Кошельки', 'Кошелёчкин', 'ячсчясчясчя', 412, '131.jpg', '', '', '', '', '', 1),
(10, 6, 'Рюкзаки', 'Рюкзак походный', 'ываываыва', 1230, '114.jpg', '', '', '', '', '', 1),
(11, 6, 'Рюкзаки', 'Портфель', 'ываываывав', 1455, '115.jpg', '', '', '', '', '', 1),
(12, 5, 'Кошельки', 'Крутой кошелек', 'ваіваіваіваіва', 345, '132.jpg', '', '', '', '', '', 1),
(13, 5, 'Кошельки', 'Конкретный кошелек', 'ываываываыв', 543, '125.jpg', '', '', '', '', '', 1),
(14, 5, 'Кошельки', 'Кардхолдер', 'фівфівфі', 239, '123.jpg', '', '', '', '', '', 1),
(15, 5, 'Кошельки', 'Портмоне матовое', 'іваіваіваі', 599, '110.jpg', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `purchase`
--

INSERT INTO `purchase` (`id`, `order_id`, `product_id`, `price`, `amount`) VALUES
(1, 1, 1, 333, 1),
(2, 1, 2, 888, 1),
(3, 2, 2, 888, 1),
(4, 3, 1, 333, 1),
(5, 4, 3, 8888, 1),
(6, 4, 5, 455, 1),
(7, 4, 6, 432, 1),
(8, 5, 1, 333, 1),
(9, 5, 4, 3333, 1),
(10, 5, 10, 1230, 1),
(11, 5, 12, 345, 1),
(12, 6, 1, 333, 1),
(13, 7, 1, 333, 1),
(14, 8, 10, 1230, 1),
(15, 9, 2, 888, 1),
(16, 10, 1, 333, 1),
(17, 11, 3, 8888, 1),
(18, 12, 1, 333, 1),
(19, 13, 1, 333, 1),
(20, 13, 12, 345, 1),
(21, 14, 12, 345, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `name`, `phone`, `adress`) VALUES
(1, 'vanea', 'c4ca4238a0b923820dcc509a6f75849b', 'Ваня', '222222', 'іваіваіваі'),
(2, 'gavril', '202cb962ac59075b964b07152d234b70', '', '', ''),
(3, 'vano', '81dc9bdb52d04dc20036dbd8313ed055', '', '', ''),
(4, 'gr', 'c20ad4d76fe97759aa27a0c99bff6710', '', '', ''),
(5, 'dfdf', 'c4ca4238a0b923820dcc509a6f75849b', 'Анечка', '', ''),
(6, 'vanooo', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(7, 'exsailer2009@yandex.ua', 'c4ca4238a0b923820dcc509a6f75849b', 'Гриша', '', ''),
(8, '12', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(9, 'dfdffff', '8fa14cdd754f91cc6554c9e71929cce7', 'dfd', '', ''),
(10, 'exsailer2016@yandex.ua', 'c4ca4238a0b923820dcc509a6f75849b', 'Ваня', '', ''),
(11, 's', 'c4ca4238a0b923820dcc509a6f75849b', 's', '', ''),
(12, 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f', '', ''),
(13, 'dsfs', 'c4ca4238a0b923820dcc509a6f75849b', 'ssd', '', ''),
(14, 'q', '7694f4a66316e53c8cdd9d9954bd611d', 'q', '', ''),
(15, 'df', '7694f4a66316e53c8cdd9d9954bd611d', 'q', '', ''),
(16, '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '', ''),
(17, 'sdfdsfsdfsd', '7694f4a66316e53c8cdd9d9954bd611d', 'q', '', ''),
(18, 'dddd', '1aabac6d068eef6a7bad3fdf50a05cc8', 'q', '', ''),
(19, 'sd', 'c4ca4238a0b923820dcc509a6f75849b', 'q', '', ''),
(20, '7', 'c4ca4238a0b923820dcc509a6f75849b', '6', '', ''),
(21, 'j', '363b122c528f54df4a0446b6bab05515', 'f', '', ''),
(22, '222', 'c81e728d9d4c2f636f067f89cc14862c', '2', '', ''),
(23, 'valik+grisha@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 'Гриша', '0666425023', ''),
(24, 'vano@mail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'dfgd', '123412312', ''),
(25, 'sdfsdf', 'c4ca4238a0b923820dcc509a6f75849b', '', 'df', ''),
(26, 'fd', '8fa14cdd754f91cc6554c9e71929cce7', 'dsf', 'fd', ''),
(27, 'bfbf@b', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'bf', 'sfdfsd', ''),
(28, 'f@mail', 'c4ca4238a0b923820dcc509a6f75849b', 'vffff', '1', ''),
(29, 'ffg@', '8fa14cdd754f91cc6554c9e71929cce7', 'd', 'f', ''),
(30, 'ffff@ma', 'c81e728d9d4c2f636f067f89cc14862c', 'd', 'dsf', ''),
(31, 'ssss@ssss', 'c4ca4238a0b923820dcc509a6f75849b', 'ghjg', '1', ''),
(32, 'qqwwe@fg', 'c4ca4238a0b923820dcc509a6f75849b', 'jjjj', '1', ''),
(33, 'as@as', 'c4ca4238a0b923820dcc509a6f75849b', 'GHJ', '1', ''),
(34, '2@2', 'c4ca4238a0b923820dcc509a6f75849b', 'hj', '1', ''),
(35, 'FG@DFG', 'c81e728d9d4c2f636f067f89cc14862c', 'FDG', '2', ''),
(36, '22@dd', 'c81e728d9d4c2f636f067f89cc14862c', 'gh', '2', ''),
(37, 'ssss@sdf', 'c81e728d9d4c2f636f067f89cc14862c', 'hj', '2', ''),
(38, '2@22222222222222222222', 'c81e728d9d4c2f636f067f89cc14862c', 'sdfs', '2', ''),
(39, 'sssssssaaaaa', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', '1', ''),
(40, '9', 'c81e728d9d4c2f636f067f89cc14862c', '', '2', ''),
(41, 'fddg@sf', 'c4ca4238a0b923820dcc509a6f75849b', 'fg', '1', ''),
(42, 'gfh@dfgd', '6512bd43d9caa6e02c990b0a82652dca', 'gh', '11', ''),
(43, 'fg', 'c81e728d9d4c2f636f067f89cc14862c', 'dfg', '2', ''),
(44, 'sdf@mail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'sdfsdfs', '1', ''),
(45, 'sdfs@asda', 'c81e728d9d4c2f636f067f89cc14862c', 'dfsd', '2', ''),
(46, 'sdfd@ssds', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'sdf', '3', ''),
(47, 'sdfsd@mail', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', '111', ''),
(48, 'sdasd@asd', 'c4ca4238a0b923820dcc509a6f75849b', 'asdf', 'asd', ''),
(49, 'as', 'c4ca4238a0b923820dcc509a6f75849b', 'asd', '2', ''),
(50, 'sdfsdf@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 'dsfs', 'dsf', ''),
(51, 'asd@masd.re', 'c4ca4238a0b923820dcc509a6f75849b', 'sdfs', 'sa', ''),
(52, 'sdsf@mail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', 'df', ''),
(53, 'sdssdasda@mail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'sadf', 'sd', ''),
(54, 'sdfsddfdfdfdff@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 'SADAS', '1', ''),
(55, 'asdaa@dasda.asd', 'c81e728d9d4c2f636f067f89cc14862c', 'asda', 'asd', ''),
(56, 'sadasdasdasdas@dsasdasdsd.asdasd', 'c4ca4238a0b923820dcc509a6f75849b', 'asda', 'd', ''),
(57, 'sadasd@sadasda.sadas.asd.asd', 'c4ca4238a0b923820dcc509a6f75849b', 'sdasd', 'asd', ''),
(58, 'asdadasdasdas@asd.sd', 'c4ca4238a0b923820dcc509a6f75849b', 'asd', '1', ''),
(59, 'macuh@asss.ua', 'c4ca4238a0b923820dcc509a6f75849b', 'asda', '2', ''),
(60, 'asd@dad.ew', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', 'sad', ''),
(61, 'qwert@bam.ru', 'c4ca4238a0b923820dcc509a6f75849b', 'qqqqqqqqqqqqqq', '1', ''),
(62, 'sad@asd.rt', 'c4ca4238a0b923820dcc509a6f75849b', 'sdfa', 'sf', ''),
(63, 'asdads@ia.ia', 'c4ca4238a0b923820dcc509a6f75849b', '123', '', ''),
(64, 'sdf@mail.ru', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', 'sdf', ''),
(65, 'sdf@asd.asd', 'c4ca4238a0b923820dcc509a6f75849b', 'sdf', 'sdf', ''),
(66, 'asdsadasdas@asdm.asd', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(67, 'asda@asd.asd', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(68, 'sdasdasdasd@asdas.ss', 'c4ca4238a0b923820dcc509a6f75849b', 'іфв', 'фів', ''),
(69, 'dssdfd@sad.as', 'c4ca4238a0b923820dcc509a6f75849b', 'іфв', 'іфввфі', ''),
(70, 'exsailer2016@yandex.uae', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(71, 'asdasdas@sadas.asd', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(72, 'wwwwwwwwwwwwww@wwww.ww', 'c4ca4238a0b923820dcc509a6f75849b', '', '', ''),
(73, 'asdddddddddddddddd@masd.er', 'c4ca4238a0b923820dcc509a6f75849b', 'asdas', '', ''),
(74, 'asd@sdfsd.as', 'c4ca4238a0b923820dcc509a6f75849b', 'sad', 'sad', ''),
(75, 'asdasda@asdas.asd', 'c4ca4238a0b923820dcc509a6f75849b', '', 'ASasA', ''),
(76, 'sdfsdfs@maa.aa', 'c4ca4238a0b923820dcc509a6f75849b', '', '435345345', ''),
(77, 'asas@asd.aa', 'c4ca4238a0b923820dcc509a6f75849b', 'asdas', 'saasd', ''),
(78, 'asdas@asasd.asdasd', 'c4ca4238a0b923820dcc509a6f75849b', 'asda', '4324323', ''),
(79, 'sadas@asda.asd', 'c4ca4238a0b923820dcc509a6f75849b', 'asda', '1212', ''),
(80, 'asdasd@asd.asd', 'c4ca4238a0b923820dcc509a6f75849b', 'asdasd', '111', ''),
(81, 'wer@asd.aa', 'c4ca4238a0b923820dcc509a6f75849b', 'swe', 'dsfsdf', ''),
(82, 'ssdf@dsf.ia', 'c4ca4238a0b923820dcc509a6f75849b', 'Ваня', 'sdfsd', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
