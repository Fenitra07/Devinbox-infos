-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 18 Décembre 2020 à 12:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd_devinbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `i_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `i_titre` varchar(200) NOT NULL,
  `i_date_pub` date DEFAULT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `info`
--

INSERT INTO `info` (`i_id`, `i_titre`, `i_date_pub`) VALUES
(1, 'Précision sur les échéances des obligations fiscales', '2020-12-06'),
(2, 'Test', '2020-12-18'),
(3, 'Reprise progressive des activités usuelles d''intervention de l''administration fiscale', '2020-12-18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
