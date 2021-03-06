-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 10 Décembre 2015 à 12:01
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
-- Structure de la table `diplomes`
--

CREATE TABLE IF NOT EXISTS `diplomes` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `annees_obt` varchar(4) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
  `compte_nintendo` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

CREATE TABLE IF NOT EXISTS `experience_pro` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `periode_debut` varchar(4) NOT NULL,
  `periode_fin` varchar(4) NOT NULL,
  `compagnie` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `competences` text NOT NULL,
  `porte_folio` varchar(255) NOT NULL
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `ddn`, `avatar`, `adresse`, `cp`, `ville`, `mail`, `phone`, `siteWeb`, `mot_de_passe`) VALUES
(7, 'Istrateur', 'Admin', '2015-12-08', 'admin.jpg', '404 localhost erro', 666, 'WebCity', 'admin@mail.com', 1234567890, 'www.admin-istrateur.fr', '$2y$10$hpjhX7F3t0AYYbN6bB6hseFm8zhIP75dEblbT9UDJhmyLJxpIIjIu'),
(8, 'Esqouel', 'May', '2015-12-10', 'linuxpingu.jpg', 'table 3 phpMyAdmin', 666, 'WebCity', 'sql@mail.com', 1234567890, 'localhost/phpmyadmin', '$2y$10$VxZ6yUz90dJfphyHy/7h0eUrqDlhDwsb9maUpLPakSu9O8XIODAF.'),
(9, 'Scriptwalker', 'Javakin', '0001-01-01', 'crazy.jpg', 'Script de la mort, couloir A', 66600, 'DarkWebCity', 'javaScript@mail.fr', 1234567890, 'www.deathscript.com', '$2y$10$J7p4Glu/a6qqswOInqDaRO/B79XOYyn/MNoxPKxXJciG183tTznM6'),
(10, 'Chpé', 'PéHa', '2015-12-10', 'cat.jpg', 'xampp htdocs', 666, 'WebCity', 'php@mail.com', 1234567890, 'www.pay-hash-pay', '$2y$10$X0CNgasxq9hc7/8ZIvgIse40Yzl7VkO4QS.3xTTJMfQIXZX/cquxm'),
(11, 'test', 'test', '2015-12-02', '', 'isset', 404, 'Mysql', 'test@mail.fr', 1234567890, 'test.fr', '$2y$10$9WJNM0LW9ha9VoVeZw/QterZIbhwqeto7E9MOVAh9db1YSeHETZrW');

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
  `muxi` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
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
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `divertissements`
--
ALTER TABLE `divertissements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experience_pro`
--
ALTER TABLE `experience_pro`
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
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `divertissements`
--
ALTER TABLE `divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `experience_pro`
--
ALTER TABLE `experience_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
