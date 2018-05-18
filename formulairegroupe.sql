-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 18 mai 2018 à 14:50
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulairegroupe`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(45) NOT NULL,
  `Prenom` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Courriel` varchar(100) NOT NULL DEFAULT '',
  `Telephone` varchar(45) DEFAULT NULL,
  `Situation` varchar(45) NOT NULL DEFAULT '',
  `Langue1` varchar(45) NOT NULL DEFAULT '',
  `Ville` varchar(45) NOT NULL DEFAULT '',
  `Commentaires` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Courriel`, `Telephone`, `Situation`, `Langue1`, `Ville`, `Commentaires`) VALUES
(1, 'qdxsqcdsc', 'gdfgfdg', 'monica.b@codeur.online', '0606060606', '', '', 'Array', 'Bonjour Robert'),
(2, 'balde', '', '', NULL, '', '', '', NULL),
(3, 'fgfg', 'fghbfh', 'monica.b@codeur.online', '0606060606', '', '', '', 'Bonjour Robert'),
(4, 'fgfg', 'fghbfh', 'monica.b@codeur.online', '0606060606', '', '', '', 'Bonjour Robert'),
(5, 'baldÃ©', 'ousmane', 'ous@gmail.com', '0606060606', '', '', '', 'Bonjour Robert'),
(6, '', '', '', '', '', '', '', 'Bonjour Robert'),
(7, 'x', 'gdfgfdg', 'monica.b@codeur.online', '0606060606', '', '', '', 'Bonjour Robertjkhjkgfdswfghjkl'),
(8, 'x', '', 'monica.b@codeur.online', '0606060606', '', '', '', 'Bonjour Robertjkhjkgfdswfghjkl'),
(9, 'balde', 'ousmane', 'monica.b@codeur.online', '0606060606', '', '', '', 'Bonjour Robertjkhjkgfdswfghjkl'),
(10, '', '', '', '', '', '', '', 'Bonjour Robert'),
(11, '', '', '', '', '', '', '', 'Bonjour Robert'),
(12, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(13, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(14, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(15, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(16, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(17, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(18, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(19, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(20, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(21, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(22, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(23, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(24, 'mac namara', 'beatrice', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(25, 'balde', 'ousmane', 'ousmaneb@codeur.online', '0606060606', '', '', '', 'Bonjour Robert'),
(26, 'balde', 'ousmane', 'ousmaneb@codeur.online', '0606060606', '', '', '', 'Bonjour Robert'),
(27, 'balde', 'Ousmanetest', 'ousmane.balde@hotmail.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(28, 'qdxsqcdsc', 'hjnh', 'grfrd@gfhf.fr', '0606060606', '', '', '', 'Bonjour Robert'),
(29, 'balde', 'ousmane', 'monica.b@codeur.online', '0606060606', '', '', '', 'Bonjour Robert');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
