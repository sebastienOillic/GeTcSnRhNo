-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Mai 2017 à 11:27
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
-- Structure de la table `animateur`
--

CREATE TABLE `animateur` (
  `cours_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `animateur`
--

INSERT INTO `animateur` (`cours_id`, `user_id`) VALUES
(1, 3),
(1, 6),
(2, 3),
(2, 6),
(3, 4),
(4, 1),
(5, 4),
(6, 5),
(7, 5),
(8, 6),
(9, 2),
(9, 8),
(10, 2),
(11, 1),
(11, 5),
(12, 5),
(13, 2);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `cours_id` int(11) DEFAULT NULL,
  `commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `niveau_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `evenement_id` int(11) DEFAULT NULL,
  `date_cours` datetime NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `nombre_danseurs_max` int(11) NOT NULL,
  `typeDanse_id` int(11) DEFAULT NULL,
  `referent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`id`, `niveau_id`, `salle_id`, `evenement_id`, `date_cours`, `heure_debut`, `heure_fin`, `nombre_danseurs_max`, `typeDanse_id`, `referent`) VALUES
(1, 1, 3, NULL, '2017-05-10 00:00:00', '16:00:00', '17:30:00', 20, 13, NULL),
(2, 1, 3, NULL, '2017-05-10 00:00:00', '16:00:00', '17:30:00', 20, 13, NULL),
(3, 4, 1, NULL, '2017-06-10 00:00:00', '19:00:00', '20:30:00', 20, 12, NULL),
(4, 3, 2, NULL, '2017-05-19 00:00:00', '18:00:00', '19:30:00', 20, 5, NULL),
(5, 4, 1, NULL, '2017-05-17 00:00:00', '15:00:00', '16:30:00', 20, 8, NULL),
(6, 1, 4, NULL, '2017-05-29 00:00:00', '18:30:00', '20:00:00', 20, 6, NULL),
(7, 2, 2, NULL, '2017-06-14 00:00:00', '19:00:00', '20:30:00', 20, 1, NULL),
(8, 4, 2, NULL, '2017-06-17 00:00:00', '20:00:00', '21:30:00', 20, 11, NULL),
(9, 1, 2, NULL, '2017-07-05 00:00:00', '16:00:00', '17:30:00', 20, 17, NULL),
(10, 2, 4, NULL, '2017-06-12 00:00:00', '19:00:00', '20:30:00', 20, 2, NULL),
(11, 2, 2, NULL, '2017-05-15 00:00:00', '18:00:00', '19:30:00', 20, 18, NULL),
(12, 3, 3, NULL, '2017-07-16 00:00:00', '19:00:00', '20:30:00', 15, 14, NULL),
(13, 4, 1, NULL, '2017-08-05 00:00:00', '21:00:00', '22:30:00', 10, 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cours_danseurs`
--

CREATE TABLE `cours_danseurs` (
  `cours_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `cours_danseurs`
--

INSERT INTO `cours_danseurs` (`cours_id`, `user_id`) VALUES
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(4, 11),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(5, 9),
(5, 12),
(5, 14),
(5, 15),
(5, 16),
(5, 17),
(5, 18),
(6, 12),
(6, 13),
(6, 15),
(6, 16),
(6, 17),
(6, 18),
(7, 11),
(7, 13),
(7, 15),
(7, 17),
(7, 18),
(7, 19),
(8, 9),
(8, 12),
(8, 13),
(8, 14),
(8, 17),
(8, 18),
(8, 19),
(9, 13),
(9, 14),
(9, 15),
(9, 16),
(9, 17),
(10, 11),
(10, 13),
(10, 16),
(10, 17),
(10, 19),
(11, 9),
(11, 13),
(11, 14),
(11, 15),
(11, 17),
(11, 18),
(11, 19),
(11, 20),
(12, 9),
(12, 11),
(12, 15),
(12, 16),
(12, 17),
(12, 18),
(12, 19),
(13, 9),
(13, 10),
(13, 11),
(13, 12),
(13, 13),
(13, 14),
(13, 15),
(13, 16),
(13, 18),
(13, 19),
(13, 20);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `lieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `nom` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `sexe` varchar(56) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `nom`, `prenom`, `sexe`) VALUES
(1, 'responsable', 'responsable', 'res@res.com', 'res@res.com', 1, '2kv5a2b64vuowkwwc44og8cw00g0co4', '$2y$13$2kv5a2b64vuowkwwc44ogu3fER6I8g9EuyxH6ePwvnJ2t9Y3FMc.q', '2017-05-11 09:13:22', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_RESPONSABLE";}', 0, NULL, 'Coudrais', 'Richard', 'Homme'),
(2, 'referent', 'referent', 'anim@anim.com', 'anim@anim.com', 1, '7y1u1oow66o8g44wssc4s8kok8408go', '$2y$13$7y1u1oow66o8g44wssc4suqn4tmtwGE30VRczwzflh1MYNeeFlK1K', '2017-05-05 11:01:22', 0, 0, NULL, 'h-FnyLAxdrRGbtrC8pdvXJA0aGkLxHzouAtUuHASZng', '2017-05-03 14:16:11', 'a:1:{i:0;s:13:"ROLE_REFERENT";}', 0, NULL, 'Baila', 'Toutou', 'Femme'),
(3, 'nico', 'nico', 'hertznico@gmail.com', 'hertznico@gmail.com', 1, 'dr0nktgexao844gsgow44s8g8w4o8sk', '$2y$13$dr0nktgexao844gsgow44eALI6RUBxhV2enD3hEKITz2kYILbJqpa', '2017-05-04 14:47:23', 0, 0, NULL, 'mmQcLVO5hsYNEQNso9-zfqCPytdcnPn17rjhnynN88U', '2017-05-03 14:13:44', 'a:0:{}', 0, NULL, 'Hertz', 'Nico', 'm'),
(4, 'gugu', 'gugu', 'gugu@hotmail.com', 'gugu@hotmail.com', 1, 'ogp12c801qocwkwg4skgswsk4o080w8', '$2y$13$ogp12c801qocwkwg4skgsu04bycQqIJzXItP25lnW.Revs4FkFG1y', '2017-05-05 13:48:49', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Macron', 'Emmanuel', 'f'),
(5, 'Théo', 'theo', 'teo@net.com', 'teo@net.com', 1, 'iozaw3yvubs4w0cc4os884w4ggg0gg8', '$2y$13$iozaw3yvubs4w0cc4os88ufsA.dDCbcrfwuv9Y2BM04ExUNPDFio6', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Dupont', 'T2o', 'm'),
(6, 'lolo', 'lolo', 'lolo45@dot.com', 'lolo45@dot.com', 1, 'iox7d5zn6bcw40cogksgs4s008s4sck', '$2y$13$iox7d5zn6bcw40cogksgsuBfmlmel1uCLnHL7BR2yErKGSdrIOp3y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Ndiaye', 'Lolo', 'f'),
(7, 'Jean', 'jean', 'jean17@gmail.com', 'jean17@gmail.com', 1, '7czjg19ryzwok0s4kwog4wgg8g80wow', '$2y$13$7czjg19ryzwok0s4kwog4u.YH/ZtTckBE0.cVhBaEU5wf4jyrw5kC', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Coudrais', 'Jean', 'm'),
(8, 'Floriant', 'floriant', 'floflo35@dot.com', 'floflo35@dot.com', 1, 't5j4ci6ctdwgos8w080gkkgkk04c0ok', '$2y$13$t5j4ci6ctdwgos8w080gkeQxBWSVoY0F9ofq3xO.I8XUgSYlhzMBm', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Archambaud', 'Floriant', 'm'),
(9, 'aldi', 'aldi', 'aldi99@net.com', 'aldi99@net.com', 1, 'mqmr8exd2v44s4kg84ws40gg808coo0', '$2y$13$mqmr8exd2v44s4kg84ws4urcjVO1KYVr3GMw3etAF33qFH5HhEtFW', '2017-05-11 09:14:59', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Alma', 'Aldina', '1'),
(10, 'diana', 'diana', 'diana@dot.com', 'diana@dot.com', 1, '4e613wnc7iww80skoo40084c4sccwkk', '$2y$13$4e613wnc7iww80skoo400uzpMEJfkqma.RVe43iZl74MhVWvxED..', '2017-05-11 09:31:47', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Diana', 'Rodriguez', '1'),
(11, 'Lily', 'lily', 'lily17@net.com', 'lily17@net.com', 1, '7k8i8t58waw4gw8g804scggg808k8co', '$2y$13$7k8i8t58waw4gw8g804scelYtbjUzpK0id2KKR29YHXDbDc31bVwa', '2017-05-11 09:16:24', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Legrand', 'Lily', 'Femme'),
(12, 'Jimy', 'jimy', 'jeremy@net.com', 'jeremy@net.com', 1, 'h5yaudrvc8ow4wcg04wkkgg8ok84o4w', '$2y$13$h5yaudrvc8ow4wcg04wkkeNKsDsoGYOZ0VMbDJx35rOP2Yg3Tx2KO', '2017-05-11 09:16:56', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Marchant', 'Jeremy', 'Homme'),
(13, 'Flo', 'flo', 'florent.h@net.com', 'florent.h@net.com', 1, 'igx9abqx3lwkcc4k4og0kokwwg8cgkk', '$2y$13$igx9abqx3lwkcc4k4og0keuCsvpW7RXspfiizQylN2qTB8nXn2kmC', '2017-05-11 09:17:31', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Bayke', 'Florent', 'Homme'),
(14, 'Seb', 'seb', 'sebastien.ot@net.com', 'sebastien.ot@net.com', 1, '2uifi8qunewwc4go4s4k4kc8ocss4wc', '$2y$13$2uifi8qunewwc4go4s4k4ewnGcIR0xYhhcd7P5splYsrWYI.6LC52', '2017-05-11 09:18:06', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Ottmen', 'Sebastien', 'Homme'),
(15, 'Naya', 'naya', 'naya.rah@net.com', 'naya.rah@net.com', 1, '2lmsl8h3w4ys0sk04w40gwkgk4w4koc', '$2y$13$2lmsl8h3w4ys0sk04w40guRi73PkUtiZxT3injqvXYxs.eUThm8BK', '2017-05-11 09:18:56', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Rahman', 'Naya', 'Femme'),
(16, 'karim', 'karim', 'karim@net.com', 'karim@net.com', 1, 's0o6v4d1opwwgs8o0ggw88gck4gok44', '$2y$13$s0o6v4d1opwwgs8o0ggw8uJR8eBhvFSt9QOe.FnxahjoU4nRvPfxO', '2017-05-11 09:19:39', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Muttar', 'Karim', 'Homme'),
(17, 'Matt', 'matt', 'Matteo@dot.com', 'matteo@dot.com', 1, '1uoonindqyg0k88o4cok04gg44c8cco', '$2y$13$1uoonindqyg0k88o4cok0umGICbwGSt0kMqUSW/WCispllvXGwr6y', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Annioci', 'Matteo', 'Homme'),
(18, 'Romy', 'romy', 'romain@net.com', 'romain@net.com', 1, 't890elc95f4o84o8swgcowwgoso8s4k', '$2y$13$t890elc95f4o84o8swgcourM9fptZ7WKD1yfZMzXUCOWk4IXTJntq', '2017-05-11 09:21:24', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Asam', 'Romain', 'Homme'),
(19, 'Bob', 'bob', 'boblain@dot.com', 'boblain@dot.com', 1, '81tf8lkyj9k4k0kwgo0g8oggc0ogg8g', '$2y$13$81tf8lkyj9k4k0kwgo0g8eScOGQZb314edwIhEVpI/85UgZBm6xma', '2017-05-11 09:22:01', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Maccain', 'Boblain', 'Homme'),
(20, 'Suzi', 'suzi', 'suzanne.bl@dot.com', 'suzanne.bl@dot.com', 1, 'fppr2e87jl4ok4s4o0gws8o0ksw4kck', '$2y$13$fppr2e87jl4ok4s4o0gwsu8NGoU7o8WOy6ik7DZw5jLPHtHg8hQOG', '2017-05-11 11:14:45', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Kenndy', 'Suzanne', 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

CREATE TABLE `niveau` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `niveau`
--

INSERT INTO `niveau` (`id`, `nom`) VALUES
(3, 'Avancé'),
(1, 'Débutant'),
(4, 'Démonstration'),
(2, 'Intermédiaire');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `salle`
--

INSERT INTO `salle` (`id`, `nom`) VALUES
(3, 'Barcelone'),
(1, 'Buenos-Aires'),
(2, 'New-York'),
(4, 'Vienne');

-- --------------------------------------------------------

--
-- Structure de la table `styledanse`
--

CREATE TABLE `styledanse` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `styledanse`
--

INSERT INTO `styledanse` (`id`, `nom`, `description`) VALUES
(9, 'Danses modernes', 'Les "danses modernes" sont les danses à deux plus récentes.'),
(10, 'Danses latines', 'Les danses latines sont des danses créées dans les pays latins et sud-américains.'),
(11, 'Danses urbaines', 'Les danses urbaines sont des danses qu\'il est interdit de danser à la campagne.');

-- --------------------------------------------------------

--
-- Structure de la table `styledanse_typedanse`
--

CREATE TABLE `styledanse_typedanse` (
  `styleDanse_id` int(11) NOT NULL,
  `typeDanse_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `styledanse_typedanse`
--

INSERT INTO `styledanse_typedanse` (`styleDanse_id`, `typeDanse_id`) VALUES
(9, 1),
(9, 2),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 7),
(10, 7),
(9, 8),
(10, 8),
(9, 9),
(9, 10),
(10, 11),
(10, 12),
(10, 13),
(10, 14),
(11, 17),
(11, 18),
(11, 19);

-- --------------------------------------------------------

--
-- Structure de la table `typedanse`
--

CREATE TABLE `typedanse` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `typedanse`
--

INSERT INTO `typedanse` (`id`, `nom`, `description`) VALUES
(1, 'one-step', 'Le one-step est une danse de salon en couple fermé, apparue aux États-Unis dans les années 1910.'),
(2, 'Fox-trot', 'Le foxtrot ou fox-trot (littéralement « pas du renard ») est un style de danse exécutée sur du ragtime (genre musical généralement considéré comme précurseur du jazz dont Scott Joplin est l\'ambassadeur le plus connu) ; il fut populaire dans l\'entre-deux guerres et perdura jusqu\'aux années 1950.\r\nFoxtrot, prononcé "foxtrott", est le mot associé à la lettre F dans l\'alphabet radio normalisé par l\'OACI ;'),
(3, 'quickstep', 'Le quickstep est un genre de danse et fait plus spécialement partie des danses de salon de type standard.\r\n\r\nDans les années 1920, plusieurs orchestres jouaient des morceaux de foxtrot trop vite ce qui n\'était pas du goût de tout le monde et surtout pas des journalistes. Les gens parlaient d\'un « quick time foxtrot ». Le charleston a également eu une grande influence sur cette danse qui comme son nom l\'indique, est une danse très rapide et très vivante, comprenant des sauts, des jetés et des chassés.'),
(4, 'tango', 'Le tango est une danse sociale et un genre rioplatense (c\'est-à-dire du Río de la Plata, soit Buenos Aires et Rosario en Argentine, et Montevideo en Uruguay1) né à la fin du XIXe siècle.\r\n\r\nComme forme rythmique, il désigne le plus souvent une mesure à deux ou quatre temps plutôt marqués, mais avec un vaste éventail de tempos et de styles rythmiques très différents selon les époques et les orchestres.'),
(5, 'boston', 'Le boston est une danse apparue vers 1880 aux États-Unis. Elle se danse sur un tempo lent à trois temps comme la valse lente ou la valse hésitation. Les danseurs en couple fermé marchent en long pas glissés en ligne droite ou en tournant une valse au ralenti. Ils peuvent faire de nombreuses figures.'),
(6, 'valse anglaise', 'La valse anglaise est le type de valse qui se danse le plus lentement. Elle est parfois appelée valse lente.'),
(7, 'paso-doble', 'Le paso doble (de l\'espagnol : pasodoble (sens identique), de paso, « pas », et doble, « double ») est une musique à deux temps. Par extension, le paso doble est une danse espagnole sur une musique espagnole.'),
(8, 'rumba', 'Vers 1930, le son cubain est renommé rhumba aux États-Unis, sous l\'impulsion de Xavier Cugat, et la rumba devient une danse de salon, qui fera partie des danses latines en danse sportive (malgré son nom, elle se danse plutôt sur des boléros cubains ou mexicains).'),
(9, 'charleston', 'Le Charleston a été créé aux États-Unis à la fin des années 1920, et a, en raison de son style dynamique et spectaculaire, un succès considérable à l\'époque. C\'est la ville de Charleston en Caroline du Sud qui lui donne son nom. Il est introduit en France en 1925, par la « Revue nègre » qui se produit alors au théâtre des Champs-Élysées et par la danseuse noire américaine Joséphine Baker, qui le danse aussi dans les principaux établissements de l\'époque. Le charleston a une très grande vogue en France, de 1925 à 1927, allant en décroissant en 1928.'),
(10, 'madison', 'Le madison fait partie des nombreuses danses en ligne créées dans les années 1960 comme le twist, le hully-gully ou la pachanga. Il s\'agit d\'une danse sans contact qui se pratique en ligne, seul ou en couple, et qui a démarré à Philadelphie en 1960.'),
(11, 'samba', 'La samba est un genre musical et une forme de danse ayant émergé au Brésil, dont les racines proviennent d\'Afrique à l\'époque de l\'esclavage ouest-africaine, et sont retracées dans les traditions religieuses africaines, en particulier celles en Angola et au Congo1. Les amateurs de samba sont appelés sambistes.'),
(12, 'cha-cha-cha', 'Le cha-cha-chá est un genre musical inventé en 1954 par le violoniste cubain Enrique Jorrín, de la charanga Orquesta America, dans la première partie du morceau Engañadora (l\'autre partie est un rythme de mambo). Le mot «cha-cha-cha», qui désigne également une danse, n\'apparaît que dans le morceau Silver Star, et provient du son produit par le frottement des pieds des danseurs sur le sol.'),
(13, 'salsa', 'La salsa (mot espagnol qui signifie « sauce » et, au sens figuré, charme, piquant) désigne à la fois un genre musical et une danse ayant des racines cubaines. Cette musique de danse au tempo vif est popularisée dans le monde entier.'),
(14, 'jive', 'La cinquième des cinq danses latines en compétition de danse sportive, le jive, y tient la place correspondant au rock\'n\'roll en danse de salon.'),
(17, 'hip-hop', 'Le hip-hop musique rap ou musique hip-hop est un genre musical caractérisé par un rythme accompagné de rap et de chants2. Le genre se développe en tant que mouvement culturel et artistique apparu aux États-Unis à New York, dans le South Bronx au début des années 1970. Originaire des ghettos noirs et latinos de New York, il se répandra rapidement dans l\'ensemble du pays puis au monde entier au point de devenir une culture urbaine importante. La culture hip-hop connaît plusieurs disciplines : le rap (ou MCing), le DJing, le break dancing (ou b-boying), le graffiti, le beatboxing. Ces disciplines, apparues avant le hip-hop, seront intégrées dès la naissance du mouvement. C\'est néanmoins par son expression musicale qu\'il est le plus connu et, de ce fait, souvent réduit à celle-ci.'),
(18, 'r’nB', 'Le RnB contemporain – aussi orthographié R\'n\'B, R&B ou simplement RnB1 – est un genre musical qui mélange des éléments de rhythm and blues, de hip-hop, de soul et de pop. Lancé durant les années 1980, il prend de l\'ampleur pendant les années 1990 jusqu\'à devenir prédominant notamment aux États-Unis et au Royaume-Uni.'),
(19, 'ragga', 'Le ragga, abréviation de raggamuffin (« va-nu-pieds », « galopin »), désigne une attitude liée à un milieu social (débrouillard) et un sous-genre musical issu du reggae, la branche consciente du genre dancehall. Né d\'une association entre état d\'esprit et genre musical, cet amalgame ne se retrouve principalement qu\'en France et en Espagne ; aux Pays-Bas on dit bubbling. Le terme ragga est donc proche du terme dancehall, quelle que soit l\'époque à laquelle on fait référence.');

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
-- Index pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD PRIMARY KEY (`cours_id`,`user_id`),
  ADD KEY `IDX_2064DB2C7ECF78B0` (`cours_id`),
  ADD KEY `IDX_2064DB2CA76ED395` (`user_id`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8F91ABF07ECF78B0` (`cours_id`),
  ADD KEY `IDX_8F91ABF0A76ED395` (`user_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FDCA8C9CA0293581` (`typeDanse_id`),
  ADD KEY `IDX_FDCA8C9CB3E9C81` (`niveau_id`),
  ADD KEY `IDX_FDCA8C9CDC304035` (`salle_id`),
  ADD KEY `IDX_FDCA8C9CFD02F13` (`evenement_id`),
  ADD KEY `IDX_FDCA8C9CFE9AAC6C` (`referent`);

--
-- Index pour la table `cours_danseurs`
--
ALTER TABLE `cours_danseurs`
  ADD PRIMARY KEY (`cours_id`,`user_id`),
  ADD KEY `IDX_DD9DFAE97ECF78B0` (`cours_id`),
  ADD KEY `IDX_DD9DFAE9A76ED395` (`user_id`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_B26681EC53D045F` (`image`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`);

--
-- Index pour la table `niveau`
--
ALTER TABLE `niveau`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4BDFF36B6C6E55B5` (`nom`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_4E977E5C6C6E55B5` (`nom`);

--
-- Index pour la table `styledanse`
--
ALTER TABLE `styledanse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_6020EED46C6E55B5` (`nom`);

--
-- Index pour la table `styledanse_typedanse`
--
ALTER TABLE `styledanse_typedanse`
  ADD PRIMARY KEY (`typeDanse_id`,`styleDanse_id`),
  ADD KEY `IDX_43F1A0C9A0293581` (`typeDanse_id`),
  ADD KEY `IDX_43F1A0C9EE24C440` (`styleDanse_id`);

--
-- Index pour la table `typedanse`
--
ALTER TABLE `typedanse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D8A35A2D6C6E55B5` (`nom`);

--
-- Index pour la table `typedanse_user`
--
ALTER TABLE `typedanse_user`
  ADD PRIMARY KEY (`typeDanse_id`,`animateurPotentiel_id`),
  ADD KEY `IDX_DF880E0FA0293581` (`typeDanse_id`),
  ADD KEY `IDX_DF880E0F4DF3743C` (`animateurPotentiel_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `niveau`
--
ALTER TABLE `niveau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `styledanse`
--
ALTER TABLE `styledanse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `typedanse`
--
ALTER TABLE `typedanse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `animateur`
--
ALTER TABLE `animateur`
  ADD CONSTRAINT `FK_2064DB2C7ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `FK_2064DB2CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_8F91ABF07ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `FK_8F91ABF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `FK_FDCA8C9CA0293581` FOREIGN KEY (`typeDanse_id`) REFERENCES `typedanse` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9CB3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9CDC304035` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9CFD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`),
  ADD CONSTRAINT `FK_FDCA8C9CFE9AAC6C` FOREIGN KEY (`referent`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `cours_danseurs`
--
ALTER TABLE `cours_danseurs`
  ADD CONSTRAINT `FK_DD9DFAE97ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `FK_DD9DFAE9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `styledanse_typedanse`
--
ALTER TABLE `styledanse_typedanse`
  ADD CONSTRAINT `FK_AF5B153A0293581` FOREIGN KEY (`typeDanse_id`) REFERENCES `typedanse` (`id`),
  ADD CONSTRAINT `FK_AF5B153EE24C440` FOREIGN KEY (`styleDanse_id`) REFERENCES `styledanse` (`id`);

--
-- Contraintes pour la table `typedanse_user`
--
ALTER TABLE `typedanse_user`
  ADD CONSTRAINT `FK_DF880E0F4DF3743C` FOREIGN KEY (`animateurPotentiel_id`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_DF880E0FA0293581` FOREIGN KEY (`typeDanse_id`) REFERENCES `typedanse` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
