-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2018. Jún 18. 11:19
-- Kiszolgáló verziója: 5.7.19
-- PHP verzió: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `tartalomkezelo`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cms_tartalom`
--

DROP TABLE IF EXISTS `cms_tartalom`;
CREATE TABLE IF NOT EXISTS `cms_tartalom` (
  `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alias` varchar(32) DEFAULT NULL,
  `sorrend` tinyint(3) UNSIGNED NOT NULL,
  `menunev` varchar(32) NOT NULL,
  `tartalom` text NOT NULL,
  `letrehozas` datetime NOT NULL,
  `modositas` datetime DEFAULT NULL,
  `leiras` text,
  `kulcsszavak` text,
  `statusz` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `cms_tartalom`
--

INSERT INTO `cms_tartalom` (`id`, `alias`, `sorrend`, `menunev`, `tartalom`, `letrehozas`, `modositas`, `leiras`, `kulcsszavak`, `statusz`) VALUES
(1, 'bemutatkozas', 1, 'Bemutatkozás', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>', '2018-06-18 00:00:00', '2018-06-18 00:00:00', 'Leírás1', 'Kulcsszavak1', 1),
(2, 'kedvencek', 2, 'Kedvencek', '<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2018-06-18 00:00:00', '2018-06-18 00:00:00', 'Leírás2', 'Kulcsszó2', 1),
(3, 'kepgaleria', 3, 'Képgaléria', '<p>Itt egy képgaléria lesz.</p>', '2018-06-18 00:00:00', '2018-06-18 00:00:00', 'Leírás 3.', 'Kulcsszó 3.', 1),
(4, 'kapcsolat', 4, 'Kapcsolat', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>', '2018-06-18 00:00:00', '2018-06-18 00:00:00', 'Leírás 4.', 'Kulcsszó 4.', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
