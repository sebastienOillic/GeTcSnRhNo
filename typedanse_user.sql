-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Mai 2017 à 10:57
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `amidanse`
--

-- --------------------------------------------------------

--
-- Structure de la table `typedanse_user`
--

CREATE TABLE `typedanse_user` (
  `typeDanse_id` int(11) NOT NULL,
  `animateurPotentiel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `typedanse_user`
--

INSERT INTO `typedanse_user` (`typeDanse_id`, `animateurPotentiel_id`) VALUES
(1, 1),
(1, 3),
(2, 4),
(3, 6),
(4, 4),
(4, 5),
(5, 3),
(6, 3),
(7, 5),
(8, 1),
(8, 5),
(9, 1),
(10, 3),
(11, 3),
(11, 4),
(12, 4),
(12, 6),
(13, 1),
(13, 5),
(14, 3),
(17, 3),
(18, 4),
(19, 6);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `typedanse_user`
--
ALTER TABLE `typedanse_user`
  ADD PRIMARY KEY (`typeDanse_id`,`animateurPotentiel_id`),
  ADD KEY `IDX_DF880E0FA0293581` (`typeDanse_id`),
  ADD KEY `IDX_DF880E0F4DF3743C` (`animateurPotentiel_id`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `typedanse_user`
--
ALTER TABLE `typedanse_user`
  ADD CONSTRAINT `FK_DF880E0F4DF3743C` FOREIGN KEY (`animateurPotentiel_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_DF880E0FA0293581` FOREIGN KEY (`typeDanse_id`) REFERENCES `typedanse` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
