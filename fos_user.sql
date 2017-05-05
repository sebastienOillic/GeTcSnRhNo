-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Mai 2017 à 10:48
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
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `nom` varchar(56) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(56) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexe` varchar(56) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom`, `prenom`, `sexe`) VALUES
(1, 'gugu', 'gugu', 'gugu@hotmail.com', 'gugu@hotmail.com', 1, 'ogp12c801qocwkwg4skgswsk4o080w8', '$2y$13$ogp12c801qocwkwg4skgsu04bycQqIJzXItP25lnW.Revs4FkFG1y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'GuG', 'aha', 'f'),
(3, 'Téo', 'téo', 'teo@net.com', 'teo@net.com', 1, 'iozaw3yvubs4w0cc4os884w4ggg0gg8', '$2y$13$iozaw3yvubs4w0cc4os88ufsA.dDCbcrfwuv9Y2BM04ExUNPDFio6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Dupont', 'T2o', 'm'),
(4, 'lolo', 'lolo', 'lolo45@dot.com', 'lolo45@dot.com', 1, 'iox7d5zn6bcw40cogksgs4s008s4sck', '$2y$13$iox7d5zn6bcw40cogksgsuBfmlmel1uCLnHL7BR2yErKGSdrIOp3y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Fabien', 'Lolo', 'f'),
(5, 'Jean', 'jean', 'jean17@gmail.com', 'jean17@gmail.com', 1, '7czjg19ryzwok0s4kwog4wgg8g80wow', '$2y$13$7czjg19ryzwok0s4kwog4u.YH/ZtTckBE0.cVhBaEU5wf4jyrw5kC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Michel', 'Jean', 'm'),
(6, 'Floriant', 'floriant', 'floflo35@dot.com', 'floflo35@dot.com', 1, 't5j4ci6ctdwgos8w080gkkgkk04c0ok', '$2y$13$t5j4ci6ctdwgos8w080gkeQxBWSVoY0F9ofq3xO.I8XUgSYlhzMBm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Morice', 'Floriant', 'm');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
