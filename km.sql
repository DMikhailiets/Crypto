-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 24 2019 г., 18:14
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `km`
--

-- --------------------------------------------------------

--
-- Структура таблицы `router`
--

CREATE TABLE IF NOT EXISTS `router` (
  `Name` text NOT NULL,
  `SID` text NOT NULL,
  `IPVN` text NOT NULL,
  `IPNAR` text NOT NULL,
  `Ext1` text NOT NULL,
  `Ext2` text NOT NULL,
  `Ext3` text NOT NULL,
  `Int1` text NOT NULL,
  `Int2` text NOT NULL,
  `Int3` text NOT NULL,
  `T1` text NOT NULL,
  `T2` text NOT NULL,
  `T1D` text NOT NULL,
  `T2D` text NOT NULL,
  `KEY` int(11) NOT NULL DEFAULT '15',
  `LKN` int(11) NOT NULL DEFAULT '1',
  `UKN` int(11) NOT NULL DEFAULT '2',
  `FD1` text NOT NULL,
  `FS1` text NOT NULL,
  `FR1` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить',
  `F` int(11) NOT NULL DEFAULT '0',
  `FD2` text NOT NULL,
  `FS2` text NOT NULL,
  `FR2` set('разрешить','запретить','сбросить','') NOT NULL DEFAULT 'разрешить',
  `FD3` text NOT NULL,
  `FS3` text NOT NULL,
  `FR3` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить',
  `FD4` text NOT NULL,
  `FS4` text NOT NULL,
  `FR4` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить',
  `FD5` text NOT NULL,
  `FS5` text NOT NULL,
  `FR5` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить',
  `FD6` text NOT NULL,
  `FS6` text NOT NULL,
  `FR6` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить',
  `FD7` text NOT NULL,
  `FS7` text NOT NULL,
  `FR7` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить',
  `FD8` text NOT NULL,
  `FS8` text NOT NULL,
  `FR8` set('разрешить','запретить','сбросить') NOT NULL DEFAULT 'разрешить'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `router`
--

INSERT INTO `router` (`Name`, `SID`, `IPVN`, `IPNAR`, `Ext1`, `Ext2`, `Ext3`, `Int1`, `Int2`, `Int3`, `T1`, `T2`, `T1D`, `T2D`, `KEY`, `LKN`, `UKN`, `FD1`, `FS1`, `FR1`, `F`, `FD2`, `FS2`, `FR2`, `FD3`, `FS3`, `FR3`, `FD4`, `FS4`, `FR4`, `FD5`, `FS5`, `FR5`, `FD6`, `FS6`, `FR6`, `FD7`, `FS7`, `FR7`, `FD8`, `FS8`, `FR8`) VALUES
('Петров-3481', 'guiv1478kt596uop969tjvp377', '10.10.7.2', '192.168.1.2', '1.1.1.2', '2.2.2.2', '3.3.3.3', '4.4.4.5', '5.5.5.5', '9.9.9.9', '1.1.2.1', '10.1.1.2', '10.10.1.1', '10.1.2.1', 15000, 1, 2, '', '', 'разрешить', 0, '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить'),
('Левкин-3481', '860ep2259bqfncndmqcrav25c6', '', '10.10.1.1', '10.10.1.1', '', '', '', '', '', '10.10.1.4', '11.10.10.1', '1.1.2.3', '11.10.10.2', 15000, 2, 1, '10.10.1.1', '10.10.1.0', 'разрешить', 0, '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '0.0.0.0', '0.0.0.0', 'запретить'),
('Сидоров-3481', '3ts6c6va9l58k7ksad8adnjqg0', '10.1.1.1', '10.10.1.2', '10.10.1.1', '10.10.1.2', '', '', '', '', '10.10.1.4', '10.10.1.0', '10.10.1.5', '10.2.2.3', 15000, 1, 2, '10.10.1.0', '10.10.1.0', 'разрешить', 0, '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить'),
('Баймурзин-3481', 'h30lju7smsqrjhtu2d3n7n0po4', '10.10.1.1', '192.168.1.1', '192.168.1.1', '', '', '', '', '', '', '', '', '', 15, 1, 2, '', '', 'разрешить', 0, '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить'),
('Смирнов-3481', 'jc6r3slobpguqk179192d51n43', '', '', '192.168.1.1', '', '', '', '', '', '', '', '', '', 15, 1, 2, '', '', 'разрешить', 1, '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить', '', '', 'разрешить');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
