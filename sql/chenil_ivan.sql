-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 18 juin 2022 à 20:17
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
-- Base de données : `chenil`
--
CREATE DATABASE IF NOT EXISTS `chenil_ivan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chenil_ivan`;

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `sexe` char(1) NOT NULL,
  `type` varchar(40) NOT NULL,
  `sterilise` tinyint(1) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `id_proprietaire` int(16) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_id_proprietaire` (`id_proprietaire`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id`, `nom`, `sexe`, `type`, `sterilise`, `date_naissance`, `id_proprietaire`) VALUES
(2, 'Gamelle', 'F', 'Chat', 1, '2007-11-27', 1),
(9, 'Sniper', 'M', 'Chat', 1, '2018-06-05', 2),
(21, 'Mirtille', 'F', 'Truie', 0, '2019-03-11', 6),
(22, 'Kloukette', 'F', 'Oursonne', 1, '2021-09-08', 2),
(25, 'Georgette', 'F', 'Chatte', 1, '2022-03-09', 4),
(26, 'Donut', 'M', 'Herisson', 0, '2022-01-06', 1);

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `telephone` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`id`, `nom`, `prenom`, `date_naissance`, `email`, `telephone`) VALUES
(1, 'Dujardin', 'Jean-Marc', '1977-02-11', 'Jean-Marc@gmail.com', 198546241),
(2, 'Boudin', 'Jean-Claude', '1958-04-01', 'jean-claude@yahoo.fr', 486276257),
(4, 'Briali', 'Jonathan', '1997-06-19', 'johnny@hotmail.com', 478994545),
(6, 'Matagne', 'Yves', '1983-03-18', 'yves@yahoo.fr', 499853211);

-- --------------------------------------------------------

--
-- Structure de la table `sejour`
--

DROP TABLE IF EXISTS `sejour`;
CREATE TABLE IF NOT EXISTS `sejour` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `id_animal` int(16) NOT NULL,
  `date_sejour` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_id_animal` (`id_animal`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sejour`
--

INSERT INTO `sejour` (`id`, `id_animal`, `date_sejour`) VALUES
(1, 21, '2022-06-25'),
(2, 2, '2022-06-24'),
(3, 9, '2022-06-30'),
(5, 2, '2022-07-03'),
(6, 9, '2022-07-14'),
(7, 2, '2022-08-19');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `FK_id_proprietaire` FOREIGN KEY (`id_proprietaire`) REFERENCES `proprietaire` (`id`);

--
-- Contraintes pour la table `sejour`
--
ALTER TABLE `sejour`
  ADD CONSTRAINT `FK_id_animal` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
