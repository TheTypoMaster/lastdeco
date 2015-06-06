-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 13 Janvier 2015 à 18:15
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lastdeco`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `publication` date NOT NULL,
  `titre` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `tag` varchar(128) NOT NULL,
  `message` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `publication`, `titre`, `image`, `tag`, `message`) VALUES
(1, '2015-01-04', 'TITRE DE 32 CARACTERES MAXIMUM !', 'image.jpg', '', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(2, '2014-12-06', 'titre 2', '', 'video film auteur artiste petit_test', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE IF NOT EXISTS `galerie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(32) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `publication` date NOT NULL,
  `type` varchar(32) NOT NULL,
  `categorie` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `galerie`
--

INSERT INTO `galerie` (`id`, `titre`, `message`, `publication`, `type`, `categorie`) VALUES
(1, 'Nuit bleu', 'bof je sais pas trop quoi mettre', '2015-01-02', 'photo', 'toile'),
(2, 'Rouge Feu', 'pour l''instant juste une petit connerie toute simple', '2015-01-05', 'photo', 'meuble'),
(3, 'Canyon', '3', '2015-01-08', 'video', 'toile'),
(4, 'Vert Feuille', '4', '2015-01-08', 'photo', 'meuble'),
(5, 'Meduse', '5', '2015-01-08', 'photo', 'toile'),
(6, 'Koala', '6', '2015-01-08', 'photo', 'meuble'),
(7, 'Chateau', '7', '2015-01-08', 'photo', 'toile'),
(8, 'Pingouin', '8', '2015-01-05', 'photo', 'meuble'),
(9, 'Yellow', '9', '2015-01-08', 'photo', 'toile'),
(10, 'Chine', '10', '2015-01-08', 'photo', 'meuble'),
(11, 'Windows', '11', '2015-01-08', 'photo', 'toile'),
(12, 'Nenufar', '12', '2015-01-08', 'video', 'meuble');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(4) NOT NULL DEFAULT '0',
  `id_galerie` int(4) NOT NULL DEFAULT '0',
  `image` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id`, `id_article`, `id_galerie`, `image`) VALUES
(1, 0, 1, 'img1.jpg'),
(2, 0, 2, 'img2.jpg'),
(3, 0, 3, 'img3.jpg'),
(4, 0, 4, 'img4.jpg'),
(5, 0, 5, 'img5.jpg'),
(6, 0, 6, 'img6.jpg'),
(7, 0, 7, 'img7.jpg'),
(8, 0, 8, 'img8.jpg'),
(9, 0, 9, 'img9.jpg'),
(10, 0, 10, 'img10.jpg'),
(11, 0, 11, 'img11.jpg'),
(12, 0, 12, 'img12.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
