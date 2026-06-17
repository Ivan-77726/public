-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 16 2026 г., 04:20
-- Версия сервера: 10.11.13-MariaDB-0+deb12u1.astra1
-- Версия PHP: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bd2`
--

CREATE TABLE `bd2` (
  `id` int(50) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `bd2`
--

INSERT INTO `bd2` (`id`, `username`, `email`, `created_at`) VALUES
(1, 'evgeniy', 'evgeniy@mail.ru', '1999-07-26');

-- --------------------------------------------------------

--
-- Структура таблицы `bd3`
--

CREATE TABLE `bd3` (
  `id` int(50) DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `bd4`
--

CREATE TABLE `bd4` (
  `id` int(50) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `bd4`
--

INSERT INTO `bd4` (`id`, `username`, `email`, `created_at`) VALUES
(1, 'roman', 'roman@mail.ru', '2016-06-14');

-- --------------------------------------------------------

--
-- Структура таблицы `bdd`
--

CREATE TABLE `bdd` (
  `name` varchar(50) NOT NULL,
  `login` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `bdd`
--

INSERT INTO `bdd` (`name`, `login`, `email`, `password`) VALUES
('gfhdfxhgf', 'root', 'hsdiaskb@gmail.com', '12345678'),
('bfgdbdf', 'root', 'fdvfdv@gmail.com', '12345678');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bd2`
--
ALTER TABLE `bd2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bd4`
--
ALTER TABLE `bd4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bd2`
--
ALTER TABLE `bd2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `bd4`
--
ALTER TABLE `bd4`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
