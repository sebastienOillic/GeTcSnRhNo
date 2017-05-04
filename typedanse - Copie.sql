-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 03 Mai 2017 à 12:42
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
-- Structure de la table `typedanse`
--

CREATE TABLE IF NOT EXISTS `typedanse` (
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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `typedanse`
--
ALTER TABLE `typedanse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_196275296C6E55B5` (`nom`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `typedanse`
--
ALTER TABLE `typedanse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
