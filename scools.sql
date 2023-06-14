-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 14 2023 г., 12:37
-- Версия сервера: 5.6.51
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `scools`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorydocuments`
--

CREATE TABLE `categorydocuments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categorydocuments`
--

INSERT INTO `categorydocuments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Основные документы', '2023-05-16 06:14:46', '2023-05-16 06:14:46'),
(2, 'Нормативные документы', '2023-05-16 06:16:37', '2023-05-16 06:16:37'),
(3, 'Памятки', '2023-05-16 06:17:39', '2023-05-16 06:17:39'),
(4, 'Планы', '2023-05-16 06:18:53', '2023-05-16 06:18:53'),
(5, 'Отчёты', '2023-05-16 06:18:58', '2023-05-16 06:18:58'),
(6, 'Основные образовательные программы', '2023-05-16 06:20:24', '2023-05-16 06:20:24'),
(8, '123', '2023-06-14 01:45:39', '2023-06-14 01:45:39');

-- --------------------------------------------------------

--
-- Структура таблицы `categoryintelligences`
--

CREATE TABLE `categoryintelligences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categoryintelligences`
--

INSERT INTO `categoryintelligences` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Официальные данные', '2023-05-16 06:02:10', '2023-05-16 06:02:10'),
(2, 'Реквизиты учреждения', '2023-05-16 06:02:15', '2023-05-16 06:02:15'),
(3, 'Дополнительные реквизиты', '2023-05-16 06:02:23', '2023-05-16 06:02:23'),
(4, 'Места осуществления образовательной деятельности', '2023-05-16 06:02:35', '2023-05-16 06:02:35');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timejob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reception` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`, `address`, `timejob`, `duration`, `reception`, `created_at`, `updated_at`) VALUES
(1, '+7 (35235) 4-11-47', 'aktaban1@mail.ru', '641682, Курганская область, Петуховский район, с. Актабан, ул.Школьная, д.1', 'Пн–сб 08:00–17:00', '5 дней', 'Пн–пт 15:00–17:00.', '2023-05-16 06:00:48', '2023-06-10 13:11:21');

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorydocuments_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `name`, `document`, `categorydocuments_id`, `created_at`, `updated_at`) VALUES
(1, 'Устав образовательной организации- копия', 'storage/file/MzIGyineT5rouRhyXNF7l5HllQjrOGllbEg0jPnV.docx', 1, '2023-05-16 06:15:16', '2023-05-16 06:15:16'),
(2, 'Свидетельство о государственной аккредитации (с приложениями)', 'storage/file/Yop7APq7TAj5Q7P9xMy134z2aZygapPvg7dLr3IM.pdf', 1, '2023-05-16 06:15:35', '2023-05-16 06:15:35'),
(3, 'Положение о деятельности центра Точка роста', 'storage/file/H8rswsXwnZsohEeaRWQ4IRoxuawHSb4dcPDybBEq.pdf', 2, '2023-05-16 06:16:56', '2023-05-16 06:16:56'),
(4, 'Положение о филиале', 'storage/file/6lSLkrqn8CRLxaPbBCHoTiPo17hT3YuoKdZtzJEI.docx', 2, '2023-05-16 06:17:21', '2023-05-16 06:17:21'),
(5, 'Памятка для родителей -переход на ФГОС НОО', 'storage/file/bg5hSAZlwIVuV1bJAmqZ9QhamAOx28zWXYwzQSLz.pdf', 3, '2023-05-16 06:17:58', '2023-05-16 06:17:58'),
(6, 'Памятка для педагогов-переход на новый ФГОС НОО и ООО', 'storage/file/oMc8xAB01GDmP2vXDHyrjwu6Arv7x53vkIRYVOKV.pdf', 3, '2023-05-16 06:18:20', '2023-05-16 06:18:20'),
(7, 'Памятка для учеников', 'storage/file/LcItBfkEG9quk9CIC5PGM3rk4hDlQ1ES4QIBc6hf.pdf', 3, '2023-05-16 06:18:35', '2023-05-16 06:18:35'),
(8, '1-4 кл Календарный план воспитательной работы 2022-2023', 'storage/file/OhI0gdONe3FHu17LuwYeaWjMGBq5QzGsBHpadkqz.docx', 4, '2023-05-16 06:19:25', '2023-05-16 06:19:25'),
(9, '5-9 кл Календарный план воспитательной работы 2022-2024', 'storage/file/313vNlIlI81PjfsC6VPRGmOkMgQLP5eKJTr3CG6B.docx', 4, '2023-05-16 06:19:37', '2023-05-16 06:19:37'),
(10, '10-11 кл Календарный план воспитательной работы 2022-2024', 'storage/file/Xn6Lrf9tDsPdZJ52ew2PYlM6MFW52rKjCUFh9zTh.docx', 4, '2023-05-16 06:19:46', '2023-05-16 06:19:46'),
(11, 'Движение денежных средств ОО на 01.01.2022г.', 'storage/file/JNv3gYps0QrGlqfOc52j9VqbjOvMgUswT0EBzWTU.pdf', 5, '2023-05-16 06:20:09', '2023-05-16 06:20:09'),
(12, 'Основная образовательная программа начального общего образования', 'storage/file/Lgr7gLEwaC0nU4ppv2Oqc2fjnGOiYOCS1HmjgX4c.pdf', 6, '2023-05-16 06:20:57', '2023-05-16 06:20:57'),
(13, 'Основная образовательная программа основного общего образования', 'storage/file/28ssQZD1ixYwUHUpm5snVGkPGoJG2WfLzCu0DtQk.pdf', 6, '2023-05-16 06:21:08', '2023-05-16 06:21:08');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `intelligences`
--

CREATE TABLE `intelligences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryintelligences_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `intelligences`
--

INSERT INTO `intelligences` (`id`, `name`, `text`, `categoryintelligences_id`, `created_at`, `updated_at`) VALUES
(1, 'Полное наименование:', 'Муниципальное бюджетное общеобразовательное учреждение \"Актабанская средняя общеобразовательная школа\"-МБОУ \"Актабанская СОШ\"', 1, '2023-05-16 06:02:53', '2023-05-16 06:02:53'),
(2, 'Дата создания:', '22.12.2002', 1, '2023-05-16 06:03:04', '2023-05-16 06:03:04'),
(3, 'Юридический адрес:', '641682, Курганская область, Петуховский район, с. Актабан, ул.Школьная, д.1', 2, '2023-05-16 06:03:20', '2023-05-16 06:03:20'),
(5, 'ИНН:', '4516008561', 2, '2023-05-16 06:03:42', '2023-05-16 06:03:42'),
(6, 'КПП:', '451601001', 2, '2023-05-16 06:03:53', '2023-05-16 06:03:53'),
(7, 'ОКПО:', '29708866', 2, '2023-05-16 06:04:04', '2023-05-16 06:04:04'),
(8, 'ОГРН:', '1024501767773', 2, '2023-05-16 06:04:14', '2023-05-16 06:04:14'),
(9, 'ОКФС:', '14', 2, '2023-05-16 06:04:24', '2023-05-16 06:04:24'),
(10, 'ОКОГУ:', '4210007', 2, '2023-05-16 06:04:36', '2023-05-16 06:04:36'),
(11, 'ОКОПФ:', '20903', 2, '2023-05-16 06:04:50', '2023-05-16 06:04:50'),
(12, 'ОКТМО:', '37626404101', 2, '2023-05-16 06:04:59', '2023-05-16 06:04:59'),
(13, 'ОКАТО:', '37226804001', 2, '2023-05-16 06:05:12', '2023-05-16 06:05:12'),
(14, 'Дополнительные реквизиты:', 'нет', 3, '2023-05-16 06:05:39', '2023-05-16 06:05:39'),
(15, 'По основным программам:', '641682, Курганская область, Петуховский район, с. Актабан, ул.Школьная, д.1;  641681, Курганская область, Петуховский район, с.Пашково, ул.Школьная д.13.(филиал)', 4, '2023-05-16 06:06:12', '2023-05-16 06:06:12'),
(16, 'По программам дошкольного образования:', '641681, Курганская область, Петуховский район, с.Пашково, ул.Школьная д.13.(филиал)', 4, '2023-05-16 06:06:53', '2023-05-16 06:06:53'),
(17, 'По дополнительным программам:', '641682, Курганская область, Петуховский район, с. Актабан, ул.Школьная, д.1;  641681, Курганская область, Петуховский район, с.Пашково, ул.Школьная д.13.(филиал)', 4, '2023-05-16 06:07:12', '2023-05-16 06:07:12'),
(18, 'Проведение государственной итоговой аттестации:', '641640, Курганская область,г. Петухово, ул. К.Маркса, 3.', 4, '2023-05-16 06:07:28', '2023-05-16 06:07:28');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_19_132812_create_posts_table', 1),
(6, '2023_03_10_073250_create_teachers_table', 1),
(7, '2023_03_18_092746_create_contacts_table', 1),
(8, '2023_03_24_115245_create_categoryintelligences_table', 1),
(9, '2023_03_24_120539_create_intelligences_table', 1),
(10, '2023_04_04_115512_create_organization_structures_table', 1),
(11, '2023_05_11_205152_create_categorydocuments_table', 1),
(12, '2023_03_18_171356_create_documents_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `organization_structures`
--

CREATE TABLE `organization_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `branch_manager` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `organization_structures`
--

INSERT INTO `organization_structures` (`id`, `image`, `title`, `branch_manager`, `address`, `email`, `phone`, `website`, `created_at`, `updated_at`) VALUES
(1, '/storage/YdkKjIrd5vBxv0DtYQCBQZFJFG2vantXj1NRwMjd.jpg', 'Пашковская средняя общеобразовательная школа - филиал МБОУ \"Актабанская СОШ\"', 'Широченко Анна Вячеславовна', 'Курганская область, Петуховский район, с.Пашково, ул.Школьная д.13.', 'paschkovo31@yandex.ru', '8(35235)29125', 'https://vk.com/id617492838', '2023-05-16 06:23:42', '2023-05-16 06:26:18'),
(2, '/storage/55jzSEzEB77XKXYJVwhYFa9CgFLf7PakHRv1lbib.png', 'Центр \"Точка роста\"', 'Попова Татьяна Николаевна', 'Курганская область, Петуховский район, с.Актабан, ул.Школьная д.1', 'aktaban1@mail.ru', '8(35235)41147', '-', '2023-05-16 06:24:21', '2023-06-06 13:43:02');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `text`, `image`, `date`, `created_at`, `updated_at`) VALUES
(1, 'На ЕГЭ по географии в 2023 году будут использовать карты с новыми регионами', '\"При проведении основного периода единого государственного экзамена в 2023 году участникам ЕГЭ по географии будут выдаваться актуальные карты территории Российской Федерации\"', 'storage/img/0DDZUQ9reeC72dRsj2wybi7QLsrLxWhJA4SGIG5Z.png', '2023-06-18', '2023-05-16 05:47:59', '2023-06-10 17:56:03'),
(2, 'Всероссийской игры- викторины по финансовой грамотности', 'Онлайн-школа «Фоксфорд» совместно с Научно-исследовательским финансовым институтом Министерства финансов Российской Федерации проводит бесплатную всероссийскую игру-викторину по финансовой грамотности «Потрачено! Как родители реагируют на ваши расходы» для обучающихся 5-9 классов.', 'storage/img/t021iNrwhs3Gc1KqmRredYZyHsmTwcP3vd57f3RI.jpg', '2022-11-18', '2023-05-16 05:49:21', '2023-06-13 01:55:03'),
(3, 'Открытие Точки роста', '\"Точка Роста\" — это федеральная сеть центров образования цифрового, естественнонаучного, технического и гуманитарного профилей, организованная в рамках проекта \"Современная школа\".', 'storage/img/iYhnbIjwcSso70F8KLFSUJsoNxBTduU0eZqDaYDD.jpg', '2022-11-02', '2023-05-16 05:50:27', '2023-06-10 18:00:45'),
(4, '«Формирование комфортной городской среды»', 'С 15 апреля по 31 мая 2023 года в Курганской области пройдет голосование по выбору населением объектов благоустройства по федеральной программе «Формирование комфортной городской среды».', 'storage/img/MKzxNe0iSPC47OAuOBewlwN5ennCmEU0F6bwD65N.jpg', '2023-04-13', '2023-05-16 05:51:17', '2023-06-14 01:47:58');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patronymic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `surname`, `patronymic`, `position`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Татьяна', 'Попова', 'Николаевна', 'Директор, учитель информатики', 'storage/img/teacher.png', '2023-05-16 06:08:58', '2023-05-16 06:08:58'),
(2, 'Ольга', 'Попова', 'Сергеевна', 'Учитель начальных классов, музыка', 'storage/img/teacher.png', '2023-05-16 06:09:19', '2023-05-16 06:09:19'),
(3, 'Елена', 'Петрова', 'Леонидовна', 'Учитель химии и биологии', 'storage/img/teacher.png', '2023-05-16 06:09:41', '2023-05-16 06:09:41'),
(4, 'Нина', 'Немкова', 'Владимировна', 'Учитель начальных классов', 'storage/img/teacher.png', '2023-05-16 06:10:02', '2023-05-16 06:10:02'),
(5, 'Людмила', 'Еремина', 'Михайловна', 'Учитель физкультуры', 'storage/img/teacher.png', '2023-05-16 06:10:29', '2023-05-16 06:10:29'),
(6, 'Ирина', 'Вострых', 'Анатольевна', 'Воспитатель ГКП, учитель информатики', 'storage/img/teacher.png', '2023-05-16 06:10:58', '2023-05-16 06:10:58'),
(7, 'Людмила', 'Попова', 'Николаевна', 'Учитель истории и обществознания', 'storage/img/teacher.png', '2023-05-16 06:11:23', '2023-05-16 06:11:23'),
(8, 'Ирина', 'Савина', 'Николаевна', 'Учитель начальных классов, физики', 'storage/img/teacher.png', '2023-05-16 06:11:49', '2023-05-16 06:11:49'),
(9, 'Валентина', 'Шмырева', 'Павловна', 'Учитель математики', 'storage/img/teacher.png', '2023-05-16 06:12:15', '2023-05-16 06:12:15'),
(10, 'Елена', 'Шульга', 'Михайловна', 'Учитель русского языка и литературы', 'storage/img/teacher.png', '2023-05-16 06:12:51', '2023-05-16 06:12:51'),
(11, 'Анна', 'Широченко', 'Вячеславовна', 'Учитель географии, истории и обществознания, заместитель директора по ВР, заведующая филиалом', 'storage/img/teacher.png', '2023-05-16 06:13:26', '2023-05-16 06:13:26');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', '29112002', 'lRmC8oQhWODTDuOhdb6EFQSPTUeDKLrWzPjc2FwKVmNjei2FZi0KTdFqI2wb', '2023-06-06 04:38:06', '2023-06-06 04:38:06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categorydocuments`
--
ALTER TABLE `categorydocuments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categoryintelligences`
--
ALTER TABLE `categoryintelligences`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_categorydocuments_id_foreign` (`categorydocuments_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `intelligences`
--
ALTER TABLE `intelligences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intelligences_categoryintelligences_id_foreign` (`categoryintelligences_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `organization_structures`
--
ALTER TABLE `organization_structures`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_login_unique` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categorydocuments`
--
ALTER TABLE `categorydocuments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `categoryintelligences`
--
ALTER TABLE `categoryintelligences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `intelligences`
--
ALTER TABLE `intelligences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `organization_structures`
--
ALTER TABLE `organization_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_categorydocuments_id_foreign` FOREIGN KEY (`categorydocuments_id`) REFERENCES `categorydocuments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `intelligences`
--
ALTER TABLE `intelligences`
  ADD CONSTRAINT `intelligences_categoryintelligences_id_foreign` FOREIGN KEY (`categoryintelligences_id`) REFERENCES `categoryintelligences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
