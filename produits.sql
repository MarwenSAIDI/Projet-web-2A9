-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 02 mai 2020 à 06:53
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `idcategorie` int(11) NOT NULL,
  `categorieproduit` varchar(20) NOT NULL,
  PRIMARY KEY (`categorieproduit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`idcategorie`, `categorieproduit`) VALUES
(4, 'ahmed'),
(5, 'cosmetique'),
(98, 'sami');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idproduit` int(20) NOT NULL AUTO_INCREMENT,
  `categorieproduit` varchar(20) NOT NULL,
  `nomproduit` varchar(20) NOT NULL,
  `marqueproduit` varchar(20) NOT NULL,
  `quantiteproduit` int(20) NOT NULL,
  `prixproduit` int(10) DEFAULT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`idproduit`),
  KEY `categorieproduit` (`categorieproduit`)
) ENGINE=MyISAM AUTO_INCREMENT=88888910 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idproduit`, `categorieproduit`, `nomproduit`, `marqueproduit`, `quantiteproduit`, `prixproduit`, `code`) VALUES
(9, 'lala', 'e', 'd', 8222, 888, 0),
(90, 'ahmed', 'e', 'ahmed', 0, 0, 0),
(69, 'ahmed', 'ahmed', 'd', 0, 888, 0),
(1, 'ahmed', 'ahmed', 'ahmed', 0, 0, 0),
(80, 'ahmed', 'ahmed', 'ahmed', 8222, 888, 0),
(1010101, 'ahmed', 'ahmed', 'farah', 8222, 888, 0),
(88888909, 'e', 'ahmed', 'ahmed', 8222, 0, 0),
(800, 'e', 'ahmed', 'ahmed', 8222, 888, 0),
(8000, 'ahmed', 'ahmed', 'ahmed', 8222, 888, 0),
(80000, 'ahmed', 'ahmed', 'ahmed', 0, 888, 0),
(8000000, 'e', 'ahmed', 'ahmed', 8222, 888, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
