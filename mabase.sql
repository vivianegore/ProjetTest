-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 08 nov. 2021 à 12:18
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `pnom` varchar(25) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `user` varchar(25) NOT NULL,
  `dateinsc` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `pnom`, `mdp`, `user`, `dateinsc`) VALUES
(39, 'Kone', 'Souley', 'e10adc3949ba59abbe56e057f20f883e', 'ks001', '08/11/2021 11:37'),
(40, 'Gore', 'Viviane', 'adcaec3805aa912c0d0b14a81bedb6ff', 'Princesse_Gv', '08 11 2021 11:55:47'),
(46, 'Kora', 'sabine', 'adcaec3805aa912c0d0b14a81bedb6ff', 'ksab', '08 11 2021 12:03:45'),
(52, 'Koua', 'Chandra', '09f9fe5f1f308accf3510fd246010717', 'chandrak', '08 11 2021 12:15:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
