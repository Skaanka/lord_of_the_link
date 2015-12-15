-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Décembre 2015 à 21:32
-- Version du serveur :  10.0.17-MariaDB
-- Version de PHP :  5.6.14

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

CREATE TABLE `actu_perso` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `annees_obt` varchar(4) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `id_membres`, `annees_obt`, `intitule`, `ecole`) VALUES
(55, 60, '1', '11', '111'),
(56, 60, '3', '33', '333'),
(59, 62, '0001', 'user1', 'user1'),
(60, 62, '0002', 'user1', 'user1'),
(61, 62, '0003', 'user1', 'user1'),
(62, 62, '0004', 'user1', 'user1'),
(63, 63, '0001', 'user2', 'user2'),
(64, 63, '0002', 'user2', 'user2'),
(65, 63, '0003', 'user2', 'user2'),
(66, 63, '0004', 'user2', 'user2'),
(67, 64, '1', 'user4', 'user4'),
(68, 64, '2', 'user4', 'user4'),
(69, 64, '4', 'user4', 'user4'),
(70, 65, '1', 'user5', 'user5'),
(71, 66, '1', 'user6', 'user6'),
(72, 66, '2', 'user6', 'user6'),
(73, 66, '3', 'user6', 'user6'),
(74, 67, '1', 'user7', 'user7'),
(75, 67, '4', 'user7', 'user7'),
(76, 68, '1', 'user8', 'user8'),
(77, 69, '1', 'user9', 'user9'),
(78, 69, '2', 'user9', 'user9'),
(79, 69, '3', 'user9', 'user9'),
(80, 69, '4', 'user9', 'user9'),
(81, 70, '1', 'user10', 'user10'),
(82, 70, '2', 'user10', 'user10'),
(83, 70, '3', 'user10', 'user10'),
(84, 70, '4', 'user10', 'user10');

-- --------------------------------------------------------

--
-- Structure de la table `divertissements`
--

CREATE TABLE `divertissements` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `psn` varchar(255) NOT NULL,
  `xboxlive` varchar(255) NOT NULL,
  `steam` varchar(255) NOT NULL,
  `battlenet` varchar(255) NOT NULL,
  `compte_nintendo` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `divertissements`
--

INSERT INTO `divertissements` (`id`, `id_membres`, `psn`, `xboxlive`, `steam`, `battlenet`, `compte_nintendo`, `origin`) VALUES
(4, 60, 'psn', '', 'steam', 'bnet', 'nintendo', ''),
(6, 62, 'user1', 'user1', 'user1', 'user1', 'user1', 'user1'),
(7, 63, 'user2', '', 'user2', '', 'user2', ''),
(8, 64, 'user4', 'user4', 'user4', '', 'user4', 'user4'),
(9, 65, 'user5', '', 'user5', '', '', ''),
(10, 66, '', '', 'user6', 'user6', '', 'user6'),
(11, 67, 'user7', 'user7', '', '', 'user7', ''),
(12, 68, '', '', '', '', '', ''),
(13, 69, 'user9', 'user9', 'user9', 'user9', 'user9', 'user9'),
(14, 70, 'user10', 'user10', 'user10', 'user10', 'user10', 'user10');

-- --------------------------------------------------------

--
-- Structure de la table `experience_pro`
--

CREATE TABLE `experience_pro` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `periode_debut` varchar(4) NOT NULL,
  `periode_fin` varchar(4) NOT NULL,
  `compagnie` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `competences` text NOT NULL,
  `porte_folio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience_pro`
--

INSERT INTO `experience_pro` (`id`, `id_membres`, `periode_debut`, `periode_fin`, `compagnie`, `poste`, `competences`, `porte_folio`) VALUES
(62, 60, '3', '3', '3', '3', '', ''),
(63, 60, '', '', '', '', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', ''),
(64, 60, '', '', '', '', '', 'www.final-porto-rico-folio.com'),
(72, 62, '0001', '0001', 'user1', 'user1', '', ''),
(73, 62, '002', '002', 'user1', 'user1', '', ''),
(74, 62, '003', '003', 'user1', 'user1', '', ''),
(75, 62, '004', '004', 'user1', 'user1', '', ''),
(76, 62, '005', '005', 'user1', 'user1', '', ''),
(77, 62, '006', '006', 'user1', 'user1', '', ''),
(78, 62, '', '', '', '', 'user1 user1 user1 user1 user1', ''),
(79, 62, '', '', '', '', '', 'user1.fr'),
(80, 63, '0001', '0001', 'user2', 'user2', '', ''),
(81, 63, '002', '002', 'user2', 'user2', '', ''),
(82, 63, '003', '003', 'user2', 'user2', '', ''),
(83, 63, '', '', '', '', 'user2 user2 user2 user2 user2 user2 user2', ''),
(84, 63, '', '', '', '', '', 'user2.fr'),
(85, 64, '1', '1', 'user4', 'user4', '', ''),
(86, 64, '2', '2', 'user4', 'user4', '', ''),
(87, 64, '3', '3', 'user4', 'user4', '', ''),
(88, 64, '4', '4', 'user4', 'user4', '', ''),
(89, 64, '5', '5', 'user4', 'user4', '', ''),
(90, 64, '6', '6', 'user4', 'user4', '', ''),
(91, 64, '', '', '', '', 'user4 user4 user4 user4 user4 user4 user4 user4 user4 user4', ''),
(92, 64, '', '', '', '', '', 'user4.fr'),
(93, 65, '1', '1', 'user5', 'user5', '', ''),
(94, 65, '3', '3', 'user5', 'user5', '', ''),
(95, 65, '5', '5', 'user5', 'user5', '', ''),
(96, 66, '1', '1', 'user6', 'user6', '', ''),
(97, 66, '2', '2', 'user6', 'user6', '', ''),
(98, 66, '3', '3', 'user6', 'user6', '', ''),
(99, 66, '', '', '', '', 'user6 user6 user6 user6 user6 user6 user6 user6 user6', ''),
(100, 67, '1', '1', 'user7', 'user7', '', ''),
(101, 67, '2', '2', 'user7', 'user7', '', ''),
(102, 67, '3', '3', 'user7', 'user7', '', ''),
(103, 67, '4', '4', 'user7', 'user7', '', ''),
(104, 67, '', '', '', '', 'user7 user7 user7 user7 user7 user7v user7 user7 user7 user7', ''),
(105, 67, '', '', '', '', '', 'user7.fr'),
(106, 68, '1', '1', 'user8', 'user8', '', ''),
(107, 68, '2', '2', 'user8', 'user8', '', ''),
(108, 68, '3', '3', 'user8', 'user8', '', ''),
(109, 68, '4', '4', 'user8', 'user8', '', ''),
(110, 68, '5', '5', 'user8', 'user8', '', ''),
(111, 68, '', '', '', '', 'user8 user8 user8 user8 user8 user8 user8 user8 user8 user8', ''),
(112, 68, '', '', '', '', '', 'user8.fr'),
(113, 69, '11', '1', 'user9', 'user9', '', ''),
(114, 69, '2', '2', 'user9', 'user9', '', ''),
(115, 69, '3', '3', 'user9', 'user9', '', ''),
(116, 69, '4', '4', 'user9', 'user9', '', ''),
(117, 69, '5', '5', 'user9', 'user9', '', ''),
(118, 69, '6', '6', 'user9', 'user9', '', ''),
(119, 69, '', '', '', '', 'user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 user9 ', ''),
(120, 70, '1', '1', 'user10', 'user10', '', ''),
(121, 70, '2', '2', 'user10', 'user10', '', ''),
(122, 70, '3', '3', 'user10', 'user10', '', ''),
(123, 70, '4', '4', 'user10', 'user10', '', ''),
(124, 70, '5', '5', 'user10', 'user10', '', ''),
(125, 70, '6', '6', 'user10', 'user10', '', ''),
(126, 70, '', '', '', '', 'user10user10user10user10user10user10user10user10user10user10user10  user10user10user10user10user10user10user10user10user10user10user 10user10user10user10user10user10user10user10user10', ''),
(127, 70, '', '', '', '', '', 'user10.fr');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
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

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `ddn`, `avatar`, `adresse`, `cp`, `ville`, `mail`, `phone`, `siteWeb`, `mot_de_passe`) VALUES
(7, 'Istrateur', 'Admin', '2015-12-08', 'admin.jpg', '404 localhost erro', 666, 'WebCity', 'admin@mail.com', 1234567890, 'www.admin-istrateur.fr', '$2y$10$hpjhX7F3t0AYYbN6bB6hseFm8zhIP75dEblbT9UDJhmyLJxpIIjIu'),
(8, 'Esqouel', 'May', '2015-12-10', 'linuxpingu.jpg', 'table 3 phpMyAdmin', 666, 'WebCity', 'sql@mail.com', 1234567890, 'localhost/phpmyadmin', '$2y$10$VxZ6yUz90dJfphyHy/7h0eUrqDlhDwsb9maUpLPakSu9O8XIODAF.'),
(9, 'Scriptwalker', 'Javakin', '0001-01-01', 'crazy.jpg', 'Script de la mort, couloir A', 66600, 'DarkWebCity', 'javaScript@mail.fr', 1234567890, 'www.deathscript.com', '$2y$10$J7p4Glu/a6qqswOInqDaRO/B79XOYyn/MNoxPKxXJciG183tTznM6'),
(10, 'Chpé', 'PéHa', '2015-12-10', 'cat.jpg', 'xampp htdocs', 666, 'WebCity', 'php@mail.com', 1234567890, 'www.pay-hash-pay', '$2y$10$X0CNgasxq9hc7/8ZIvgIse40Yzl7VkO4QS.3xTTJMfQIXZX/cquxm'),
(11, 'test', 'test', '2015-12-02', '', 'isset', 404, 'Mysql', 'test@mail.fr', 1234567890, 'test.fr', '$2y$10$9WJNM0LW9ha9VoVeZw/QterZIbhwqeto7E9MOVAh9db1YSeHETZrW'),
(60, 'finalTest', 'finalTest', '0000-00-00', '', '83 route finale', 66666, 'finalCity', 'final@m.fr', 666666666, '', '$2y$10$a8MXdeeF.G3A1B/EC/3y1eAMS1W00dW/uMKJiqUfyz/jQk5rQNdMO'),
(62, 'user1', 'user1', '2015-12-15', 'leilcat.jpg', 'user1', 0, 'user1', 'u1@m.fr', 0, 'user1.fr', '$2y$10$ZlUhDAkL2xdwInk47v46KudCoPo3/ReFlwXtHTIpBm0ZoEtN3iXK6'),
(63, 'user2', 'user2', '2015-12-15', 'cat.jpg', 'user2', 55555, 'user2', 'u2@m.fr', 0, 'user2.Fr', '$2y$10$8r4bOWS9HLjC/nIa/7q3gODdGd5fto3r8xzIOnEk8AY.fPagpi/.2'),
(64, 'user4', 'user4', '2015-12-15', 'bart.jpg', 'user4', 0, 'user4', 'u4@m.fr', 0, 'user4.fr', '$2y$10$Xzzwy9j8x12.ASV5A9eXQOsRNNuPpXBL737e9ueiBWDY8WEmazHWK'),
(65, 'user5', 'user5', '2015-12-15', 'cat.jpg', 'user5', 0, 'user5', 'u5@m.fr', 0, 'user5.fr', '$2y$10$U4LijLCM.dfiLHHUwxQSqeK3lpIvCj3hdBpdfqVEaEHQtJAXyhhxy'),
(66, 'user6', 'user6', '2015-12-15', 'linuxpingu.jpg', 'user6', 0, 'user6', 'u6@m.fr', 0, 'user6.fr', '$2y$10$caQx.B2uBu.BlXCwCxBHCOwicwt6ftIxGihbHtyUBFeVg1rFcTPqa'),
(67, 'user7', 'user7', '2015-12-15', 'tortuegenial.jpeg', 'user7', 0, 'user7', 'u7@m.fr', 0, 'user7', '$2y$10$8R2/5UGcBee2exeHbMI5RuvQ0in0PVi4CtnoIzsh8KsrQK4DThyMm'),
(68, 'user8', 'user8', '2015-12-15', 'crazy.jpg', 'user8', 0, 'user8', 'u8@m.fr', 0, 'user8', '$2y$10$ogxIFKe9lWM2IH1FZSoYeeeLm2qXN4YLjj58Saowq1RLiq/TnDF2O'),
(69, 'user9', 'user9', '2015-12-15', '22190__th_century_boys__th_century_boys__ami.jpg', 'user9', 0, 'user9', 'u9@m.fr', 0, 'user9.fr', '$2y$10$GIS0ayIcD75.7jP6afNCTOBzQQr9OzKshmficQ7a/S9kJqgx9VDl6'),
(70, 'user10', 'user10', '2015-12-15', '22190__th_century_boys__th_century_boys__ami.jpg', '', 0, 'user10', 'u10@m.fr', 0, 'user10.fr', '$2y$10$7eTOJAlLJXBX44tFlw52/.PFTEo1RCFkAQXy.73e1SckHGfaSZ51q');

-- --------------------------------------------------------

--
-- Structure de la table `pro`
--

CREATE TABLE `pro` (
  `id` int(11) NOT NULL,
  `id_membres` int(11) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `viadeo` varchar(255) NOT NULL,
  `xing` varchar(255) NOT NULL,
  `muxi` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pro`
--

INSERT INTO `pro` (`id`, `id_membres`, `linkedin`, `viadeo`, `xing`, `muxi`, `github`) VALUES
(15, 60, 'linkedIn', 'viadeao', '', '', ''),
(16, 61, 'monlien', 'monLien', '', '', ''),
(17, 62, 'user1', 'user1', 'user1', 'user1', ''),
(18, 63, 'user2', '', 'user2', '', ''),
(19, 64, 'user4', '', '', '', ''),
(20, 65, 'user5', 'user5', 'user5', 'user5', ''),
(21, 66, 'user6', 'user6', '', '', ''),
(22, 67, 'user7', '', '', 'user7', ''),
(23, 68, 'user8', 'user8', '', '', ''),
(24, 69, 'user9', 'user9', 'user9', 'user9', ''),
(25, 70, 'user10', 'user10', 'user10', 'user10', '');

-- --------------------------------------------------------

--
-- Structure de la table `reseaux`
--

CREATE TABLE `reseaux` (
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
  `deezer` varchar(255) NOT NULL,
  `spotify` varchar(255) NOT NULL,
  `viber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reseaux`
--

INSERT INTO `reseaux` (`id`, `id_membres`, `facebook`, `twitter`, `youtube`, `google`, `skype`, `instagram`, `whatsapp`, `pinterest`, `deezer`, `spotify`, `viber`) VALUES
(5, 58, 'face', 'tw', 'yt', 'gg', 'skyp', '', '', '', 'deez', 'spoti', ''),
(6, 59, 'face', 'tw', 'yt', 'gg', 'skyp', '', '', '', 'deez', 'spoti', ''),
(7, 60, 'face', 'tw', 'yt', 'gg', 'skyp', '', '', '', 'deez', 'spoti', ''),
(12, 62, 'user1', 'user1', 'user1', 'user1', 'user1', 'user1', '', 'user1', 'user1', 'user1', 'user1'),
(13, 63, 'user2', 'user2', 'user2', '', 'user2', '', '', '', 'user2', '', ''),
(14, 64, 'user4', 'user4', 'user4', 'user4', 'user4', '', '', '', 'user4', '', ''),
(15, 65, 'user5', 'user5', '', 'user5', 'user5', '', '', '', '', 'user5', 'user5'),
(16, 66, 'user6', 'user6', 'user6', 'user6', 'user6', '', '', '', 'user6', '', ''),
(17, 67, 'user7', 'user7', '', 'user7', 'user7', 'user7', '', 'user7', '', 'user7', 'user7'),
(18, 68, 'user8', 'user8', '', '', '', '', '', '', '', '', ''),
(19, 69, 'user9', 'user9', 'user9', 'user9', 'user9', 'user9', '', 'user9', 'user9', 'user9', 'user9'),
(20, 70, 'user10', 'user10', 'user10', 'user10', 'user10', 'user10', '', 'user10', 'user10', 'user10', 'user10');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT pour la table `divertissements`
--
ALTER TABLE `divertissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `experience_pro`
--
ALTER TABLE `experience_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT pour la table `pro`
--
ALTER TABLE `pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `reseaux`
--
ALTER TABLE `reseaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
