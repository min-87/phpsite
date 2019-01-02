-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2017 г., 14:13
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `date`, `author`, `meta_d`, `meta_k`, `description`, `text`) VALUES
(1, 'Объектно-ориентированное программирование (ООП), классы', '2017-09-25', 'Василенко Сергей', 'Статьи описывает классы простым языком доступным для понимания', 'Классы, объекты, функции, инкапсуляция, переменные', 'Мой путь к пониманию объектов шел слишком долго. Надо сказать, что закончился он чрезвычайно неожиданно - я прочел... мануал PHP 4. Где можно найти толковое описание, только не там, казалось бы... ', '<p>Мой путь к пониманию объектов шел слишком долго. Надо                     сказать, что закончился он чрезвычайно неожиданно - я                     прочел... мануал PHP 4. Где можно найти толковое описание,                     только не там, казалось бы... Правда, уже до этого я кое-что                     знал (\"...объект, сочетающий в себе как совокупность данных,                     так и действий над ними.\" (с) Епанешников, \"Программирование в   среде Turbo Pascal 7.0\"), но это уже детали. </p>\r\n             <img src=\"articles/25092017/430917.jpg\" align= \"center\" width=\"450\" alt=\"php\"/>\r\n              <p>Что же такое класс и объект. Сперва об объекте. Определение     \"...сочетающий в себе как совокупность данных, так и действий     над ними\" - вполне подходящее. Если говорить \"приземленно\", то     объект в PHP - это переменная особого типа. В ней содержатся     специально объявленные под-переменные и функции этого объекта     (то, что объект содержит переменные и функции, в научной     литературе называется инкапсуляцией).              </p>\r\n              <p><img src=\"articles/25092017/advantages-of-php.jpg\" width=\"450\"  alt=\"help\"/></p>\r\n              <p> Функция is_object на эту     переменную выдает true: </p>\r\n              <pre>if (is_object($objectname)) {    do_something();    };  \r\n\r\n<img src=\"articles/25092017/Blog-PHP7-2.jpg\" width=\"450\"  alt=\"blog\"/></pre>'),
(2, '21 ошибка начинающих программистов', '2017-09-25', 'Стерлинг Хьюз', 'Ошибки программистов при написании кода', 'Ошибка, программирование, код, программа, пхп', 'Описываются 7 \"детских\" ошибок (21-15 в обратном порядке, в соответствии со степенью серьезности по нашей классификации). ', '<p>Мой путь к пониманию объектов шел слишком долго. Надо                     сказать, что закончился он чрезвычайно неожиданно - я                     прочел... мануал PHP 4. Где можно найти толковое описание,                     только не там, казалось бы... Правда, уже до этого я кое-что                     знал (\"...объект, сочетающий в себе как совокупность данных,                     так и действий над ними.\" (с) Епанешников, \"Программирование в   среде Turbo Pascal 7.0\"), но это уже детали. </p>\r\n             <img src=\"articles/25092017/430917.jpg\" align= \"center\" width=\"450\" alt=\"php\"/>\r\n              <p>Что же такое класс и объект. Сперва об объекте. Определение     \"...сочетающий в себе как совокупность данных, так и действий     над ними\" - вполне подходящее. Если говорить \"приземленно\", то     объект в PHP - это переменная особого типа. В ней содержатся     специально объявленные под-переменные и функции этого объекта     (то, что объект содержит переменные и функции, в научной     литературе называется инкапсуляцией).              </p>\r\n              <p><img src=\"articles/25092017/advantages-of-php.jpg\" width=\"450\"  alt=\"help\"/></p>\r\n              <p> Функция is_object на эту     переменную выдает true: </p>\r\n              <pre>if (is_object($objectname)) {    do_something();    };  \r\n\r\n<img src=\"articles/25092017/Blog-PHP7-2.jpg\" width=\"450\"  alt=\"blog\"/></pre>'),
(3, 'выа', '2017-09-26', 'фе', 'ывп', 'пф', '		пф			 	\r\n					 ', '					 	\r\n		а			 ');

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `meta_d`, `meta_k`, `date`, `description`, `text`, `author`) VALUES
(1, 'Урок 1попорпар', 'Это статья про доход, заработок в интернете', 'Доход, интернет, Google', '0000-00-00', 'Это пробная статья. Текст тут написан произвольный, только для того, чтобы заполнить место.\r\n\r\n \r\n\r\n ', '<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quod ratione asperiores tenetur voluptates dicta, quisquam, dolores, ullam harum illum minus ea inventore laborum architecto possimus eligendi excepturi earum quidem.</span><span>Ipsa doloremque laborum corrupti doloribus a maxime iure, minus nostrum rerum numquam mollitia, explicabo nam beatae aliquam quia rem sequi ab corporis unde placeat, tempore debitis soluta quasi veniam excepturi!</span>!!!</p>\r\n			  <p><img src=\"lessons/21092017/Severnoe-sijanie-8604.jpg\" width=\"350\" align=\"center\"  alt=\"картинка\"/></p></td>\r\n\r\n \r\n\r\n ', 'Василенко Сергей '),
(2, 'ыва', 'пфв', 'впы', '2017-09-26', '					 	\r\n		авп			 ', '					 	\r\n		пв			 ', 'фвап');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(2) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `page`, `title`, `meta_d`, `meta_k`, `text`) VALUES
(1, 'index', 'Главная', 'Добро пожаловать! Это сайт о сайтостроении и языках программирования в вебе.', 'Сайтостроение', ' <p>Если говорить простым языком – сайт это некоторое количество информации в виде текста, графики и файлов, которые упорядочены с помощью языка разметки HTML и взаимосвязаны между собой ссылками. </p>\r\n			<p>Вся эта информация находится на специальном сервере и доступна из любой точки мира т.к. она закреплена за определенным “именем” сайта – например, http://www.ruseller.com. Это “имя” кстати, называют – доменом сайта. </p>\r\n			<p>Хостинг – услуга, которая включает в себя место на сервере для Вашего сайта, email адреса, поддержку различных скриптов (счетчиков, голосований и т.д.). Стоит хостинг от 1 до 50$ в месяц в зависимости от предоставляемого места, возможностей и пр.</p>\r\n			<p>При этом не забывайте, что на одном хостинге можно разместить сразу несколько сайтов с разными “именами” (доменами). Сколько именно? Это зависит от тарифа хостинга.</p>\r\n			<p>Пока мы не будем вдаваться в технические тонкости создания самих сайтов, это мы сделаем в последнем письме, а сразу начнём говорить о том, какие достоинства и недостатки есть у владения собственным сайтом.</p>\r\n			<p>Плюсы:</p>\r\n			<p>1. Ваш сайт будет тем местом, где будет собираться Ваша аудитория. <br>\r\n			  2. Ваш сайт будет плацдармом для Вашей рассылки.<br>\r\n			  3. Ваш сайт будет приносить прибыль с помощью контекстной рекламы.<br>\r\n			  4. На своём сайте Вы сможете рекламировать и продавать свои собственные товары и услуги в автоматическом режиме.<br>\r\n			  5. Вы сможете получать прибыль, размещая на своем сайте рекламу партнерских товаров.<br>\r\n			  6. Вы найдете много новых друзей и единомышленников.<br>\r\n			  7. Вы будете больше уважать себя, Вас будут больше уважать окружающие.<br>\r\n			  8. Владея сайтом, Вы будите идти в ногу со временем, потому как всем давно известно, что за Интернетом будущее.</p>\r\n			<p>Минусы: <br>\r\n			  1. Ежемесячные затраты порядка 5-10$ на хостинг для сайта.<br>\r\n		  2. Время, затраченное на создание самого сайта и на дальнейшее регулярное пополнение его свежей информацией.</p>'),
(2, 'lessons', 'Уроки222', 'Уроки о языках php, html, css', 'php, html, css', '<p>!!!На этой странице вы найдете уроки, которые будут полезны для освоения провесии веб разработки!!!</p>'),
(3, 'articles', 'Статьи', 'В этом разделе размещаются статьи, новости, интересныая информация', 'Статьи,новости', ' <p>Это страница со статьями.</p>'),
(4, 'contacts', 'Контакты', 'Это страница о наших контактах. Здесь размещается и информация о нас.', 'автор', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas modi distinctio cumque velit laborum nulla et totam, ut libero esse voluptatem minima quos quam, tenetur dolorum officiis quod, id hic!</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE `userlist` (
  `id` int(2) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`id`, `user`, `pass`) VALUES
(1, 'phpuser', 'php');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `description` (`description`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
