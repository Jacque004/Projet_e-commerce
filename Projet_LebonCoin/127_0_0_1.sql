-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 24 juin 2022 à 01:51
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `leboncoin`
--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int NOT NULL AUTO_INCREMENT,
  `NomArticle` varchar(100) NOT NULL,
  `Prix` double NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `NomArticle`, `Prix`, `Description`, `sexe`) VALUES
(2, 'Ensemble nike', 30, 'ensemble nike', 'H'),
(5, 'sweat bcbg', 35, 'sweat bcbg parfait pour gérer', 'H'),
(6, 'ensemble gris', 10, 'ensemble cusual gris, décontracté et parfait pour être a l\'aise', 'H'),
(7, 'sweat bcbg', 35, 'sweat bcbg parfait pour gérer', 'H'),
(20, 'culotte détente beige', 9, 'culotte détente beige pour sortir ou rester a la maison', 'F'),
(33, 'culotte détente beige', 9, 'culotte détente beige pour sortir', 'F'),
(34, 'jogging noir Marshall', 9, 'jogging noir Marshall', 'H'),
(35, 'manteau cusual homme', 50, 'manteau cusual homme hiver automne', 'H'),
(36, 'botte en cuir noir', 20, 'botte en cuir noir', 'H'),
(37, 'parrure d\'or', 5000, 'parrure d\'or', 'F'),
(38, 'converse noir', 36, 'jogging noir Marshall', 'H'),
(39, 'culotte détente beige', 9, 'cullote', 'H'),
(41, 'culotte plage', 20, 'parrure d\'or', 'H'),
(43, 'lunette de soleil', 5, 'lunette de soleil ', 'M'),
(44, 'bobe', 2, 'bobe', 'M'),
(45, 'balenciaga ', 50, 'snikers', 'M');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUser` int NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  `Adresse` varchar(250) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mdp` varchar(45) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUser`, `Nom`, `Adresse`, `pseudo`, `email`, `mdp`) VALUES
(1, '', '', 'Lili', 'lili.labelle@gmaail.com', 'lilililil'),
(6, 'Benimaru shion', 'slime datta ken, 11 rue oni, federation de jura, tempest', 'Genéral feu', 'benimaru@tempest.com', 'epizhofluiegegfyz,gqey'),
(7, 'gobuta', 'slime datta ken, 3 avenue goblin, federation de jura, tempest', 'ELL Goblino', 'gobutaletoutpuissantmaitredejura@tempest.com', 'shdytgrhyjytghyj'),
(9, 'blaire waldorf', 'paris', 'rosebonbon78', 'rosebobon@gmail.com', 'rosetoutestrose'),
(11, 'gabiru lezard', 'slime datta ken, 18 rue de laplace, federation de jura, tempest', 'gabiruru', 'gabirulemagnifique@tempest.com', 'oqelrnmtige685!'),
(15, 'demiurge', 'niveau 1, Nazarick, Overlord', 'jaldaboth', 'demiurge@nazarick.ainz', 'OHHHgrandcreateur!'),
(21, 'baltzar cynthia', '', 'CynLaBELLE', 'cynlabelle@bg.com', 'CynLaBELLE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
