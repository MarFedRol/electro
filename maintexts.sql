-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Окт 28 2019 г., 21:03
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `electro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Оплата', '<p>Ерип</p>\r\n<p>Наличными</>', 'payments', NULL, NULL),
(2, 'Доставка', '<p>Курьером</p>\r\n<p>Самовывоз</p>', 'delivery', NULL, NULL),
(3, 'Контакты', '+375257777777', 'contacts', NULL, NULL),
(4, 'О нас', '<h2>Магазин электроустановочных изделий</h2>\r\n<p>В данном интернет-магазине электроустановочных изделий вы сможете приобрести продукцию как белорусских производителей, так и зарубежных.</p>\r\n<p>Магазин реализует следующие товары:</p>\r\n<ul>\r\n<li>розетки;</li>\r\n<li>выключатели;</li>\r\n<li>рамки;</li>\r\n<li>лампочки;</li>\r\n<p>Магазин имеет реальную точку.</p>\r\n<p>Осуществляется доставка курьером, есть возможность самовывоза.</p>\r\n<p>Оплата дистанционно через ЕРИП или наличными.</p>', 'about', NULL, NULL),
(5, 'Каталог ', 'Каталог товаров', 'catalog', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
