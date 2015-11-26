-- phpMyAdmin SQL Dump
-- version 3.1.2-rc1
-- http://www.phpmyadmin.net
--
-- Serveur: info.univ-lemans.fr
-- Généré le : Jeu 26 Novembre 2015 à 16:18
-- Version du serveur: 5.1.30
-- Version de PHP: 5.2.6-1+lenny4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `info201a`
--

-- --------------------------------------------------------

--
-- Structure de la table `FC_grp5_JeuxLudotheque`
--

CREATE TABLE IF NOT EXISTS `FC_grp5_JeuxLudotheque` (
  `Nom` varchar(30) NOT NULL,
  `NbJeux` int(11) NOT NULL,
  `NbJeuxDispos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `FC_grp5_JeuxLudotheque`
--

