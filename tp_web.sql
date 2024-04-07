-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 07 avr. 2024 à 17:22
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id_cours` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(30) NOT NULL,
  `prof` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `description` text NOT NULL,
  `img` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cours`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `titre`, `prof`, `date_debut`, `date_fin`, `description`, `img`) VALUES
(1, 'Couture pour débutants ', 'Michelle Legrand', '2024-05-09', '2024-06-14', 'Pour apprendre les techniques de base, telles que l’utilisation de la\nmachine à coudre, la réalisation d’ourlets, la pose de fermeture éclair, de boutons, etc.', 'debutant1.png'),
(2, 'Couture avec patrons', ' Lucas Chardons', '2024-05-15', '2024-06-20', 'Pour apprendre à utiliser les patrons. Le cours offre des patrons de\nbase pour des modèles de pantalons, jupes et pulls.', 'patron1.png'),
(3, 'Couture avancée', ' Marion Mai', '2024-07-25', '2024-08-15', 'Pour apprendre à créer les patrons et à coudre des modèles plus difficiles.\n', 'avancee1.png');

-- --------------------------------------------------------

--
-- Structure de la table `inscrit`
--

DROP TABLE IF EXISTS `inscrit`;
CREATE TABLE IF NOT EXISTS `inscrit` (
  `id_inscription` int(11) NOT NULL AUTO_INCREMENT,
  `id_cours` int(5) NOT NULL,
  `id_utilisateur` int(5) NOT NULL,
  `valid` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_inscription`),
  KEY `fk_id_utilisateur` (`id_utilisateur`),
  KEY `fk_id_cours` (`id_cours`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscrit`
--

INSERT INTO `inscrit` (`id_inscription`, `id_cours`, `id_utilisateur`, `valid`) VALUES
(1, 1, 2, 1),
(2, 2, 2, 1),
(3, 3, 2, 1),
(4, 1, 3, 0),
(5, 2, 3, 1),
(6, 3, 3, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `email`, `mdp`) VALUES
(1, 'mail@test.com', '123'),
(2, 'test', '098f6bcd4621d373cade4e832627b4f6'),
(3, 'mail@test.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'mail@test.com', '03c7c0ace395d80182db07ae2c30f034'),
(5, 'mail@test.com', '03c7c0ace395d80182db07ae2c30f034'),
(6, 'mail@test.com', '03c7c0ace395d80182db07ae2c30f034'),
(7, 'z@mail', '202cb962ac59075b964b07152d234b70'),
(8, 'test@mail.com', '098f6bcd4621d373cade4e832627b4f6');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscrit`
--
ALTER TABLE `inscrit`
  ADD CONSTRAINT `fk_id_cours` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`),
  ADD CONSTRAINT `fk_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
