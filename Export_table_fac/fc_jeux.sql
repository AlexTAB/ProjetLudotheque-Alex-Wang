-- phpMyAdmin SQL Dump
-- version 3.1.2-rc1
-- http://www.phpmyadmin.net
--
-- Serveur: info.univ-lemans.fr
-- Généré le : Jeu 26 Novembre 2015 à 16:00
-- Version du serveur: 5.1.30
-- Version de PHP: 5.2.6-1+lenny4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `info201a`
--

-- --------------------------------------------------------

--
-- Structure de la table `FC_grp5_Jeux`
--

CREATE TABLE IF NOT EXISTS `FC_grp5_Jeux` (
  `Nom` varchar(30) NOT NULL,
  `Ages` varchar(5) NOT NULL,
  `TypeJeux` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `FC_grp5_Jeux`
--

INSERT INTO `FC_grp5_Jeux` (`Nom`, `Ages`, `TypeJeux`) VALUES
('Territory', '10+', 'Jeu de societe : Territoire'),
('Monopoly', '5+', 'Jeu de societe : Parcours'),
('Lego Star Wars', '3+', 'Jeux de construction'),
('Othello', '6+', 'Réflexion'),
('Tarro', '10+', 'Cartes spéciales'),
('Cluedo', '10+', 'Jeu de societe : Reflexion'),
('SoulCalibur V', '16+', 'Jeu video : Combat');

