-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 08 Décembre 2015 à 10:19
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_reseaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `actu_perso`
--

CREATE TABLE IF NOT EXISTS `actu_perso` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `messages` text NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `divertissements`
--

CREATE TABLE IF NOT EXISTS `divertissements` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `psn` varchar(255) NOT NULL,
  `xboxlive` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `battlenet` varchar(255) NOT NULL,
  `compte_nintendo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `ddn` date NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `phone` int(15) NOT NULL,
  `siteWeb` varchar(150) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pro`
--

CREATE TABLE IF NOT EXISTS `pro` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `viadeo` varchar(255) NOT NULL,
  `xing` varchar(255) NOT NULL,
  `muxi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reseaux`
--

CREATE TABLE IF NOT EXISTS `reseaux` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `snapchat` varchar(255) NOT NULL,
  `deezer` varchar(255) NOT NULL,
  `spotify` varchar(255) NOT NULL,
  `viber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actu_perso`
--
ALTER TABLE `actu_perso`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `divertissements`
--
ALTER TABLE `divertissements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reseaux`
--
ALTER TABLE `reseaux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actu_perso`
--
ALTER TABLE `actu_perso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `divertissements`
--
ALTER TABLE `divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reseaux`
--
ALTER TABLE `reseaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
