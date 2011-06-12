-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 12 2011 г., 22:41
-- Версия сервера: 5.5.8
-- Версия PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `mymvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `alias`, `content`) VALUES
(1, 'mainpage', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus diam libero, varius hendrerit hendrerit sit amet, pellentesque eu felis. In hac habitasse platea dictumst. Maecenas venenatis pulvinar lobortis. Etiam molestie arcu et lorem aliquam euismod. Fusce sit amet vulputate enim. Maecenas tempor, nisi at dignissim posuere, odio ligula mattis sapien, eget consequat est orci vel mi. In non velit eget orci mattis lacinia tempus ac nulla. Nullam ullamcorper commodo tellus ut congue. Duis tincidunt gravida sapien, mollis lacinia velit ultrices ut. Suspendisse gravida semper placerat. Ut ac est vel ipsum rutrum rhoncus. Sed quis justo vitae libero adipiscing pellentesque. Curabitur vel mi nec nulla viverra porttitor sed ut justo. In rutrum, quam ut rhoncus volutpat, metus turpis semper diam, sed dapibus lorem sem quis libero. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam neque massa, accumsan in mollis vel, sagittis ac nisl. Sed sed nunc at ante ultrices convallis eget nec magna.</p>  <p>Sed eget arcu lacus. Nam auctor, nibh a faucibus congue, lacus erat rhoncus mi, vitae feugiat purus justo a odio. Nam eros odio, aliquam eget porttitor at, facilisis sit amet libero. Sed fringilla feugiat rhoncus. Nulla leo augue, sagittis at scelerisque iaculis, sodales a lectus. In libero leo, pulvinar vel sollicitudin vitae, hendrerit non neque. Suspendisse pulvinar justo sed massa dictum rhoncus. Duis id laoreet libero. Donec quis congue lacus. Praesent sed diam justo, vitae euismod orci. Etiam tincidunt aliquet justo nec euismod. Curabitur eu mauris lorem, vitae placerat libero. Phasellus in tellus eu arcu pulvinar elementum eget id lectus. Vivamus sapien mauris, pellentesque ut tempus at, aliquet id lacus. Donec at ante erat. Integer consequat elit a mi porta bibendum facilisis mauris placerat.</p>  <p>Praesent ligula nibh, dignissim in blandit sit amet, vulputate ac tortor. Proin sit amet tortor urna. Cras tempor arcu eu velit molestie vel imperdiet dolor aliquam. Aenean et rutrum risus. Nullam luctus accumsan purus, quis tincidunt turpis mollis sit amet. Nulla imperdiet risus ut lacus commodo elementum. Nunc pretium consectetur magna et ultrices. Fusce fringilla tincidunt porttitor. Pellentesque sollicitudin ultricies arcu a interdum. Aliquam lobortis justo ac ante condimentum gravida. Pellentesque quis tempor velit. Nulla luctus condimentum fermentum.</p>  <p>Duis in leo ante, eget consequat lectus. Integer pulvinar tincidunt dui in ultricies. Aliquam nisi ligula, ullamcorper ut adipiscing ac, porttitor ut odio. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc eu est eu lorem molestie venenatis. Proin egestas semper erat et venenatis. Pellentesque mattis nisi id massa imperdiet pretium. Sed rutrum tincidunt nisl et tempus. Nulla tempus justo quis purus pharetra sit amet rhoncus sapien vulputate. In iaculis sodales blandit.</p>  <p>Suspendisse nunc tellus, tincidunt bibendum auctor at, tempus id est. Duis varius elit eget augue pharetra eget egestas libero aliquet. Ut bibendum nisi sed enim aliquet a pharetra eros sollicitudin. Aenean lacinia, libero vitae bibendum sagittis, arcu lacus sagittis nulla, at tempus nulla neque a urna. Mauris gravida dapibus ultricies. Proin id erat lectus. Nam rutrum malesuada felis, ut gravida nulla euismod eu. Pellentesque adipiscing, nulla in tristique tempor, eros nisi posuere orci, tempus adipiscing felis diam sed orci. Phasellus eget nunc leo. Phasellus tempor leo sit amet orci vehicula sodales commodo diam suscipit. Suspendisse iaculis libero vitae tellus mattis eu condimentum tortor porta. Morbi eu luctus libero.</p>');
