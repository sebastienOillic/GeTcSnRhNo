-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: amidanse
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `animateur`
--

DROP TABLE IF EXISTS `animateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animateur` (
  `cours_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cours_id`,`user_id`),
  KEY `IDX_2064DB2C7ECF78B0` (`cours_id`),
  KEY `IDX_2064DB2CA76ED395` (`user_id`),
  CONSTRAINT `FK_2064DB2C7ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  CONSTRAINT `FK_2064DB2CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animateur`
--

LOCK TABLES `animateur` WRITE;
/*!40000 ALTER TABLE `animateur` DISABLE KEYS */;
INSERT INTO `animateur` VALUES (1,3),(1,6),(2,3),(2,6),(3,4),(4,1);
/*!40000 ALTER TABLE `animateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avis`
--

DROP TABLE IF EXISTS `avis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cours_id` int(11) DEFAULT NULL,
  `commentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8F91ABF07ECF78B0` (`cours_id`),
  KEY `IDX_8F91ABF0A76ED395` (`user_id`),
  CONSTRAINT `FK_8F91ABF07ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  CONSTRAINT `FK_8F91ABF0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avis`
--

LOCK TABLES `avis` WRITE;
/*!40000 ALTER TABLE `avis` DISABLE KEYS */;
/*!40000 ALTER TABLE `avis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cours`
--

DROP TABLE IF EXISTS `cours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `niveau_id` int(11) DEFAULT NULL,
  `salle_id` int(11) DEFAULT NULL,
  `evenement_id` int(11) DEFAULT NULL,
  `date_cours` datetime NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `nombre_danseurs_max` int(11) NOT NULL,
  `typedanse_id` int(11) DEFAULT NULL,
  `referent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FDCA8C9CA0293581` (`typedanse_id`),
  KEY `IDX_FDCA8C9CB3E9C81` (`niveau_id`),
  KEY `IDX_FDCA8C9CDC304035` (`salle_id`),
  KEY `IDX_FDCA8C9CFD02F13` (`evenement_id`),
  KEY `IDX_FDCA8C9CFE9AAC6C` (`referent`),
  CONSTRAINT `FK_FDCA8C9CA0293581` FOREIGN KEY (`typedanse_id`) REFERENCES `typedanse` (`id`),
  CONSTRAINT `FK_FDCA8C9CB3E9C81` FOREIGN KEY (`niveau_id`) REFERENCES `niveau` (`id`),
  CONSTRAINT `FK_FDCA8C9CDC304035` FOREIGN KEY (`salle_id`) REFERENCES `salle` (`id`),
  CONSTRAINT `FK_FDCA8C9CFD02F13` FOREIGN KEY (`evenement_id`) REFERENCES `evenement` (`id`),
  CONSTRAINT `FK_FDCA8C9CFE9AAC6C` FOREIGN KEY (`referent`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours`
--

LOCK TABLES `cours` WRITE;
/*!40000 ALTER TABLE `cours` DISABLE KEYS */;
INSERT INTO `cours` VALUES (1,1,3,NULL,'2017-05-10 00:00:00','16:00:00','17:30:00',20,13,6),(2,1,3,NULL,'2017-05-10 00:00:00','16:00:00','17:30:00',20,13,6),(3,4,1,NULL,'2017-06-10 00:00:00','19:00:00','20:30:00',20,12,5),(4,3,2,NULL,'2017-05-19 00:00:00','18:00:00','19:30:00',20,5,7),(5,2,4,NULL,'2017-05-21 00:00:00','16:00:00','17:30:00',20,6,5),(6,3,2,NULL,'2017-05-20 00:00:00','18:00:00','19:30:00',20,7,7);
/*!40000 ALTER TABLE `cours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cours_danseurs`
--

DROP TABLE IF EXISTS `cours_danseurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cours_danseurs` (
  `cours_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`cours_id`,`user_id`),
  KEY `IDX_DD9DFAE97ECF78B0` (`cours_id`),
  KEY `IDX_DD9DFAE9A76ED395` (`user_id`),
  CONSTRAINT `FK_DD9DFAE97ECF78B0` FOREIGN KEY (`cours_id`) REFERENCES `cours` (`id`),
  CONSTRAINT `FK_DD9DFAE9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cours_danseurs`
--

LOCK TABLES `cours_danseurs` WRITE;
/*!40000 ALTER TABLE `cours_danseurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `cours_danseurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_debut` datetime NOT NULL,
  `date_fin` datetime NOT NULL,
  `lieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B26681EC53D045F` (`image`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evenement`
--

LOCK TABLES `evenement` WRITE;
/*!40000 ALTER TABLE `evenement` DISABLE KEYS */;
INSERT INTO `evenement` VALUES (1,'Gala de danse','2017-08-15 00:00:00','2015-08-15 00:00:00','Nantes','L\'association des danseurs sans talent organise son annuel gala de danse.','4f8da11b9c0af8820a3a7bda00040ef4.jpeg');
/*!40000 ALTER TABLE `evenement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `sexe` varchar(56) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'responsable','responsable','res@res.com','res@res.com',1,'2kv5a2b64vuowkwwc44og8cw00g0co4','$2y$13$2kv5a2b64vuowkwwc44ogu3fER6I8g9EuyxH6ePwvnJ2t9Y3FMc.q','2017-05-10 10:37:32',0,0,NULL,NULL,NULL,'a:1:{i:0;s:16:\"ROLE_RESPONSABLE\";}',0,NULL,'Coudrais','Richard','Homme'),(2,'referent','referent','anim@anim.com','anim@anim.com',1,'7y1u1oow66o8g44wssc4s8kok8408go','$2y$13$7y1u1oow66o8g44wssc4suqn4tmtwGE30VRczwzflh1MYNeeFlK1K','2017-05-05 11:59:35',0,0,NULL,'h-FnyLAxdrRGbtrC8pdvXJA0aGkLxHzouAtUuHASZng','2017-05-03 14:16:11','a:1:{i:0;s:13:\"ROLE_REFERENT\";}',0,NULL,'Baila','Toutou','Femme'),(3,'nico','nico','hertznico@gmail.com','hertznico@gmail.com',1,'dr0nktgexao844gsgow44s8g8w4o8sk','$2y$13$dr0nktgexao844gsgow44eALI6RUBxhV2enD3hEKITz2kYILbJqpa','2017-05-04 14:47:23',0,0,NULL,'mmQcLVO5hsYNEQNso9-zfqCPytdcnPn17rjhnynN88U','2017-05-03 14:13:44','a:0:{}',0,NULL,'Hertz','Nico','m'),(4,'lolo','lolo','lolo45@dot.com','lolo45@dot.com',1,'iox7d5zn6bcw40cogksgs4s008s4sck','$2y$13$iox7d5zn6bcw40cogksgsuBfmlmel1uCLnHL7BR2yErKGSdrIOp3y',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Coudrais','Lolo','femme'),(5,'Jean','jean','jean17@gmail.com','jean17@gmail.com',1,'7czjg19ryzwok0s4kwog4wgg8g80wow','$2y$13$7czjg19ryzwok0s4kwog4u.YH/ZtTckBE0.cVhBaEU5wf4jyrw5kC',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Archambaud','Jean','homme'),(6,'Floriant','floriant','floflo35@dot.com','floflo35@dot.com',1,'t5j4ci6ctdwgos8w080gkkgkk04c0ok','$2y$13$t5j4ci6ctdwgos8w080gkeQxBWSVoY0F9ofq3xO.I8XUgSYlhzMBm',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Ndiaye','Floriant','homme'),(7,'Téo','téo','teo@net.com','teo@net.com',1,'iozaw3yvubs4w0cc4os884w4ggg0gg8','$2y$13$iozaw3yvubs4w0cc4os88ufsA.dDCbcrfwuv9Y2BM04ExUNPDFio6',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Dupont','Téo','homme'),(8,'gugu','gugu','gugu@hotmail.com','gugu@hotmail.com',1,'ogp12c801qocwkwg4skgswsk4o080w8','$2y$13$ogp12c801qocwkwg4skgsu04bycQqIJzXItP25lnW.Revs4FkFG1y',NULL,0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'Garin','aha','femme'),(9,'richard','richard','richard.coudrais@gmail.com','richard.coudrais@gmail.com',1,'5p7cye5zgmwwgsgcgkssosgoc004s0s','$2y$13$5p7cye5zgmwwgsgcgkssoeEyaCqTeq/OBn9yheXwYkFHWJA2l64/a','2017-05-09 12:22:55',0,0,NULL,NULL,NULL,'a:0:{}',0,NULL,'coudrais','richard','0');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `niveau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4BDFF36B6C6E55B5` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `niveau`
--

LOCK TABLES `niveau` WRITE;
/*!40000 ALTER TABLE `niveau` DISABLE KEYS */;
INSERT INTO `niveau` VALUES (3,'avancé'),(1,'débutant'),(4,'démonstration'),(2,'intermédiaire');
/*!40000 ALTER TABLE `niveau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salle`
--

DROP TABLE IF EXISTS `salle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_4E977E5C6C6E55B5` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salle`
--

LOCK TABLES `salle` WRITE;
/*!40000 ALTER TABLE `salle` DISABLE KEYS */;
INSERT INTO `salle` VALUES (3,'Barcelone'),(1,'Buenos-Aires'),(2,'New-York'),(4,'Vienne');
/*!40000 ALTER TABLE `salle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `statut`
--

DROP TABLE IF EXISTS `statut`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `statut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `statut`
--

LOCK TABLES `statut` WRITE;
/*!40000 ALTER TABLE `statut` DISABLE KEYS */;
/*!40000 ALTER TABLE `statut` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `styledanse`
--

DROP TABLE IF EXISTS `styledanse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `styledanse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A1E1C1D06C6E55B5` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `styledanse`
--

LOCK TABLES `styledanse` WRITE;
/*!40000 ALTER TABLE `styledanse` DISABLE KEYS */;
INSERT INTO `styledanse` VALUES (9,'Danses modernes','Les danses modernes sont les danses à deux plus récentes.'),(10,'Danses latines','Les danses latines sont des danses que l\'on danse dans les pays latins mais pas que. Les pays scandinaves aussi.'),(11,'Danses urbaines','Les danses urbaines sont des danses qu\'il est interdit de danser à la campagne.');
/*!40000 ALTER TABLE `styledanse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `styledanse_typedanse`
--

DROP TABLE IF EXISTS `styledanse_typedanse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `styledanse_typedanse` (
  `styledanse_id` int(11) NOT NULL,
  `typedanse_id` int(11) NOT NULL,
  PRIMARY KEY (`styledanse_id`,`typedanse_id`),
  KEY `IDX_AF5B153EE24C440` (`styledanse_id`),
  KEY `IDX_AF5B153A0293581` (`typedanse_id`),
  CONSTRAINT `FK_AF5B153A0293581` FOREIGN KEY (`typedanse_id`) REFERENCES `typedanse` (`id`),
  CONSTRAINT `FK_AF5B153EE24C440` FOREIGN KEY (`styledanse_id`) REFERENCES `styledanse` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `styledanse_typedanse`
--

LOCK TABLES `styledanse_typedanse` WRITE;
/*!40000 ALTER TABLE `styledanse_typedanse` DISABLE KEYS */;
INSERT INTO `styledanse_typedanse` VALUES (9,1),(9,2),(9,3),(9,4),(9,5),(9,6),(9,7),(9,8),(9,9),(9,10),(10,7),(10,8),(10,11),(10,12),(10,13),(10,14),(11,17),(11,18),(11,19);
/*!40000 ALTER TABLE `styledanse_typedanse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typedanse`
--

DROP TABLE IF EXISTS `typedanse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typedanse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_196275296C6E55B5` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typedanse`
--

LOCK TABLES `typedanse` WRITE;
/*!40000 ALTER TABLE `typedanse` DISABLE KEYS */;
INSERT INTO `typedanse` VALUES (1,'one-step','Le one-step est une danse de salon en couple fermé, apparue aux États-Unis dans les années 1910.'),(2,'Fox-trot','Le foxtrot ou fox-trot (littéralement « pas du renard ») est un style de danse exécutée sur du ragtime (genre musical généralement considéré comme précurseur du jazz dont Scott Joplin est l\'ambassadeur le plus connu) ; il fut populaire dans l\'entre-deux guerres et perdura jusqu\'aux années 1950.\r\nFoxtrot, prononcé \"foxtrott\", est le mot associé à la lettre F dans l\'alphabet radio normalisé par l\'OACI ;'),(3,'quickstep','Le quickstep est un genre de danse et fait plus spécialement partie des danses de salon de type standard.\r\n\r\nDans les années 1920, plusieurs orchestres jouaient des morceaux de foxtrot trop vite ce qui n\'était pas du goût de tout le monde et surtout pas des journalistes. Les gens parlaient d\'un « quick time foxtrot ». Le charleston a également eu une grande influence sur cette danse qui comme son nom l\'indique, est une danse très rapide et très vivante, comprenant des sauts, des jetés et des chassés.'),(4,'tango','Le tango est une danse sociale et un genre rioplatense (c\'est-à-dire du Río de la Plata, soit Buenos Aires et Rosario en Argentine, et Montevideo en Uruguay1) né à la fin du XIXe siècle.\r\n\r\nComme forme rythmique, il désigne le plus souvent une mesure à deux ou quatre temps plutôt marqués, mais avec un vaste éventail de tempos et de styles rythmiques très différents selon les époques et les orchestres.'),(5,'boston','Le boston est une danse apparue vers 1880 aux États-Unis. Elle se danse sur un tempo lent à trois temps comme la valse lente ou la valse hésitation. Les danseurs en couple fermé marchent en long pas glissés en ligne droite ou en tournant une valse au ralenti. Ils peuvent faire de nombreuses figures.'),(6,'valse anglaise','La valse anglaise est le type de valse qui se danse le plus lentement. Elle est parfois appelée valse lente.'),(7,'paso-doble','Le paso doble (de l\'espagnol : pasodoble (sens identique), de paso, « pas », et doble, « double ») est une musique à deux temps. Par extension, le paso doble est une danse espagnole sur une musique espagnole.'),(8,'rumba','Vers 1930, le son cubain est renommé rhumba aux États-Unis, sous l\'impulsion de Xavier Cugat, et la rumba devient une danse de salon, qui fera partie des danses latines en danse sportive (malgré son nom, elle se danse plutôt sur des boléros cubains ou mexicains).'),(9,'charleston','Le Charleston a été créé aux États-Unis à la fin des années 1920, et a, en raison de son style dynamique et spectaculaire, un succès considérable à l\'époque. C\'est la ville de Charleston en Caroline du Sud qui lui donne son nom. Il est introduit en France en 1925, par la « Revue nègre » qui se produit alors au théâtre des Champs-Élysées et par la danseuse noire américaine Joséphine Baker, qui le danse aussi dans les principaux établissements de l\'époque. Le charleston a une très grande vogue en France, de 1925 à 1927, allant en décroissant en 1928.'),(10,'madison','Le madison fait partie des nombreuses danses en ligne créées dans les années 1960 comme le twist, le hully-gully ou la pachanga. Il s\'agit d\'une danse sans contact qui se pratique en ligne, seul ou en couple, et qui a démarré à Philadelphie en 1960.'),(11,'samba','La samba est un genre musical et une forme de danse ayant émergé au Brésil, dont les racines proviennent d\'Afrique à l\'époque de l\'esclavage ouest-africaine, et sont retracées dans les traditions religieuses africaines, en particulier celles en Angola et au Congo1. Les amateurs de samba sont appelés sambistes.'),(12,'cha-cha-cha','Le cha-cha-chá est un genre musical inventé en 1954 par le violoniste cubain Enrique Jorrín, de la charanga Orquesta America, dans la première partie du morceau Engañadora (l\'autre partie est un rythme de mambo). Le mot «cha-cha-cha», qui désigne également une danse, n\'apparaît que dans le morceau Silver Star, et provient du son produit par le frottement des pieds des danseurs sur le sol.'),(13,'salsa','La salsa (mot espagnol qui signifie « sauce » et, au sens figuré, charme, piquant) désigne à la fois un genre musical et une danse ayant des racines cubaines. Cette musique de danse au tempo vif est popularisée dans le monde entier.'),(14,'jive','La cinquième des cinq danses latines en compétition de danse sportive, le jive, y tient la place correspondant au rock\'n\'roll en danse de salon.'),(17,'hip-hop','Le hip-hop musique rap ou musique hip-hop est un genre musical caractérisé par un rythme accompagné de rap et de chants2. Le genre se développe en tant que mouvement culturel et artistique apparu aux États-Unis à New York, dans le South Bronx au début des années 1970. Originaire des ghettos noirs et latinos de New York, il se répandra rapidement dans l\'ensemble du pays puis au monde entier au point de devenir une culture urbaine importante. La culture hip-hop connaît plusieurs disciplines : le rap (ou MCing), le DJing, le break dancing (ou b-boying), le graffiti, le beatboxing. Ces disciplines, apparues avant le hip-hop, seront intégrées dès la naissance du mouvement. C\'est néanmoins par son expression musicale qu\'il est le plus connu et, de ce fait, souvent réduit à celle-ci.'),(18,'r’nB','Le RnB contemporain – aussi orthographié R\'n\'B, R&B ou simplement RnB1 – est un genre musical qui mélange des éléments de rhythm and blues, de hip-hop, de soul et de pop. Lancé durant les années 1980, il prend de l\'ampleur pendant les années 1990 jusqu\'à devenir prédominant notamment aux États-Unis et au Royaume-Uni.'),(19,'ragga','Le ragga, abréviation de raggamuffin (« va-nu-pieds », « galopin »), désigne une attitude liée à un milieu social (débrouillard) et un sous-genre musical issu du reggae, la branche consciente du genre dancehall. Né d\'une association entre état d\'esprit et genre musical, cet amalgame ne se retrouve principalement qu\'en France et en Espagne ; aux Pays-Bas on dit bubbling. Le terme ragga est donc proche du terme dancehall, quelle que soit l\'époque à laquelle on fait référence.');
/*!40000 ALTER TABLE `typedanse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typedanse_user`
--

DROP TABLE IF EXISTS `typedanse_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typedanse_user` (
  `typedanse_id` int(11) NOT NULL,
  `animateurPotentiel_id` int(11) NOT NULL,
  PRIMARY KEY (`typedanse_id`,`animateurPotentiel_id`),
  KEY `IDX_DF880E0FA0293581` (`typedanse_id`),
  KEY `IDX_DF880E0F4DF3743C` (`animateurPotentiel_id`),
  CONSTRAINT `FK_DF880E0F4DF3743C` FOREIGN KEY (`animateurPotentiel_id`) REFERENCES `fos_user` (`id`),
  CONSTRAINT `FK_DF880E0FA0293581` FOREIGN KEY (`typedanse_id`) REFERENCES `typedanse` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typedanse_user`
--

LOCK TABLES `typedanse_user` WRITE;
/*!40000 ALTER TABLE `typedanse_user` DISABLE KEYS */;
INSERT INTO `typedanse_user` VALUES (1,1),(1,3),(2,4),(3,6),(4,4),(4,5),(5,3),(6,3),(7,5),(8,1),(8,5),(9,1),(10,3),(11,3),(11,4),(12,4),(12,6),(13,1),(13,5),(14,3),(17,3),(18,4),(19,6);
/*!40000 ALTER TABLE `typedanse_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-10 12:44:17
