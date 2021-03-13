-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 13 mars 2021 à 22:05
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-school`
--

-- --------------------------------------------------------

--
-- Structure de la table `activiteexrascolaire`
--

DROP TABLE IF EXISTS `activiteexrascolaire`;
CREATE TABLE IF NOT EXISTS `activiteexrascolaire` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `activite` varchar(25) NOT NULL,
  `idEleve` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activiteexrascolaire`
--

INSERT INTO `activiteexrascolaire` (`id`, `activite`, `idEleve`) VALUES
(1, 'Football', 3),
(2, 'design', 3),
(3, 'Lecture', 3);

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  `descrption` text,
  `imageUrl` varchar(255) DEFAULT NULL,
  `concerner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `titre`, `descrption`, `imageUrl`, `concerner`) VALUES
(5, 'event1', 'azererere', '../school/articles/pexels-photo-277253.jpg', 'EMPa\r\n'),
(15, 'Deep Learning', 'qzsedrtfgyhjkl', '../school/articles/pexels-photo-355948.jpeg', 'ESPa'),
(7, 'maladie', 'shjvfjgjhvfgfhd', '../school/articles/check_email.png', 'EPaPr'),
(8, 'maladie', 'shjvfjgjhvfgfhd', '../school/articles/check_email.png', 'EPaM'),
(10, 'la lecture', 'La lecture ne peut se dissocier de lâ€™Ã©criture, câ€™est impossible. Tout comme lâ€™Ã©criture ne peut se dissocier de la lecture, mais Ã§a revient au mÃªme ! Lire permettra Ã  votre Ã¢me dâ€™Ã©crivain de connaitre les clichÃ©s, les grandes lignes dâ€™un genre, les actions qui rythment un roman, de comprendre ce quâ€™est une ambiance et un personnage bien construitâ€¦ Bref, lire vous permettra dâ€™apprendre Ã  Ã©crire tout simplement et vous permettra Ã  vous qui avez dÃ©ja commencÃ© Ã  Ã©crire, de vous amÃ©liorer.', '../school/articles/lecture.jpg', 'PrMS'),
(11, 'Machine Learning ', 'Utilisez Firebase ML pour former et dÃƒÂ©ployer des modeles personnalises, ou utilisez une solution plus cle en main avec les API Cloud Vision.', '../school/articles/33797061.jpg', 'EPrSPa'),
(14, 'Deep Learning', 'qzsedrtfgyhjkl', '../school/articles/pexels-photo-355948.jpeg', 'ESPa'),
(16, 'DL', ' le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning le deep learning learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning le deep learning ', '../school/articles/pexels-photo-2599244.jpeg', 'EPrM'),
(17, 'DL', ' le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning le deep learning learning  le deep learning  le deep learning  le deep learning  le deep learning  le deep learning le deep learning ', '../school/articles/pexels-photo-2599244.jpeg', 'EPrM'),
(18, 'Natural language processing', 'Humans communicate with each other by using natural language such as English, Chinese, French or Russian. A computer algorithm cannot understand a natural language but is able to process the natural language in order to make interactions between computers or humans feel exactly like interactions between humans and humans. This is natural language processing (NLP).', '../school/articles/1_WssnLJ__IAUURwqms-I8LA.png', 'ESPa'),
(19, 'convolutional neural network ', 'Artificial Intelligence has been witnessing a monumental growth in bridging the gap between the capabilities of humans and machines. Researchers and enthusiasts alike, work on numerous aspects of the field to make amazing things happen. One of many such areas is the domain of Computer Vision.', '../school/articles/1_CnNorCR4Zdq7pVchdsRGyw.png', 'ESPa');

-- --------------------------------------------------------

--
-- Structure de la table `compteadmin`
--

DROP TABLE IF EXISTS `compteadmin`;
CREATE TABLE IF NOT EXISTS `compteadmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compteadmin`
--

INSERT INTO `compteadmin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'hn_nekamiche@esi.dz', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `diaporama`
--

DROP TABLE IF EXISTS `diaporama`;
CREATE TABLE IF NOT EXISTS `diaporama` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imgUrl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `diaporama`
--

INSERT INTO `diaporama` (`id`, `imgUrl`) VALUES
(1, '../school/slides/1.jpg'),
(2, '../school/slides/2.jpg'),
(3, '../school/slides/3.jpeg'),
(4, '../school/slides/4.jpg'),
(8, '../school/slides/pexels-photo-5212703.jpeg'),
(7, '../school/slides/pexels-photo-5212338.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `dateNais` date NOT NULL,
  `idParent` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idNiv` int(11) NOT NULL,
  `NumTel1` varchar(25) NOT NULL,
  `NumTel2` varchar(25) NOT NULL,
  `NumTel3` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `eleves`
--

INSERT INTO `eleves` (`id`, `nom`, `prenom`, `dateNais`, `idParent`, `idUser`, `idNiv`, `NumTel1`, `NumTel2`, `NumTel3`) VALUES
(3, 'NEKAMICHE', 'souha', '2000-01-03', 33, 49, 1, '05546565', '05456456562', '05565656'),
(4, 'NEKAMICHE', 'halim', '2010-06-02', 33, 50, 3, '05546565', '05456456562', '05565656'),
(11, 'dellys', 'lina', '2006-02-01', 39, 67, 1, '05546565', '0679895965', '05565656');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
CREATE TABLE IF NOT EXISTS `enseignants` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `dateNais` date NOT NULL,
  `adress` varchar(50) NOT NULL,
  `numTel1` varchar(20) NOT NULL,
  `numTel2` varchar(20) NOT NULL,
  `numTel3` varchar(20) NOT NULL,
  `idModule` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`id`, `nom`, `prenom`, `dateNais`, `adress`, `numTel1`, `numTel2`, `numTel3`, `idModule`, `idUser`) VALUES
(1, 'moustefai', 'amine', '1975-04-05', 'alger', '0555466678', '0555466678', '0666565', 1, 53),
(5, 'amrouche', 'hakim', '1963-06-02', 'babezzouar', '0777856941', '07555656', '0653211455', 2, 68),
(7, 'kadri', 'nassima', '1970-02-01', 'Ksar-El-Boukhari', '0777856941', '0785643214', '0555466678', 2, 71);

-- --------------------------------------------------------

--
-- Structure de la table `listeactivites`
--

DROP TABLE IF EXISTS `listeactivites`;
CREATE TABLE IF NOT EXISTS `listeactivites` (
  `idAct` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `imgUrl` varchar(200) NOT NULL,
  PRIMARY KEY (`idAct`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listeactivites`
--

INSERT INTO `listeactivites` (`idAct`, `nom`, `Description`, `imgUrl`) VALUES
(1, 'football', ' est un sport collectif qui se joue avec un ballon sphérique entre deux équipes de onze joueurs. Elles s\'opposent sur un terrain rectangulaire délimité, équipé de buts définis sur les largeurs opposées. L\'objectif de chaque camp est de mettre le ballon dans le but adverse, sans utiliser les bras, et de le faire plus souvent que l\'autre équipe.', '../school/activities/football.jpeg'),
(2, 'Design', 'Le Design est une activité de création souvent à vocation industrielle ou commerciale, pouvant s’orienter vers les milieux sociaux, politiques, scientifiques et environnementaux.', '../school/activities/design.jpg\r\n'),
(3, 'Origami', 'Origami est l\'art du pliage du papier,C\'est un des plus anciens arts populaires', '../school/activities/origami.jpeg'),
(4, 'La Lecture', 'La lecture peut être définie comme une activité psychosensorielle qui vise à donner un sens à des signes graphiques recueillis par la vision et qui implique à la fois des traitements perceptifs et cognitifs', '../school/activities/lecture.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `idModule` bigint(20) NOT NULL AUTO_INCREMENT,
  `idNiv` bigint(20) NOT NULL,
  `nomModule` varchar(25) NOT NULL,
  PRIMARY KEY (`idModule`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`idModule`, `idNiv`, `nomModule`) VALUES
(1, 1, 'arabe'),
(2, 3, 'math'),
(3, 3, 'islamia'),
(4, 1, 'physique');

-- --------------------------------------------------------

--
-- Structure de la table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `idNiv` bigint(20) NOT NULL AUTO_INCREMENT,
  `annee` int(11) NOT NULL,
  `grp` int(11) NOT NULL,
  `cycle` varchar(3) NOT NULL,
  PRIMARY KEY (`idNiv`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `niveau`
--

INSERT INTO `niveau` (`idNiv`, `annee`, `grp`, `cycle`) VALUES
(1, 1, 3, 'P'),
(2, 1, 2, 'P'),
(3, 2, 3, 'M'),
(4, 1, 1, 'S'),
(5, 2, 5, 'S');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `idnote` int(11) NOT NULL AUTO_INCREMENT,
  `note` float NOT NULL,
  `idModule` int(11) NOT NULL,
  `idEleve` int(11) NOT NULL,
  `remarque` text NOT NULL,
  PRIMARY KEY (`idnote`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`idnote`, `note`, `idModule`, `idEleve`, `remarque`) VALUES
(1, 15, 1, 3, 'vous avez eu une bonne note'),
(2, 12, 4, 3, 'moyenne , essayer de travailler plus'),
(3, 14, 2, 4, 'Bien');

-- --------------------------------------------------------

--
-- Structure de la table `pagecontact`
--

DROP TABLE IF EXISTS `pagecontact`;
CREATE TABLE IF NOT EXISTS `pagecontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `numTel1` varchar(25) NOT NULL,
  `numTel2` varchar(25) NOT NULL,
  `fax` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `descpt` text NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pagecontact`
--

INSERT INTO `pagecontact` (`id`, `facebook`, `insta`, `linkedin`, `website`, `address`, `numTel1`, `numTel2`, `fax`, `email`, `descpt`) VALUES
(10, 'https://www.facebook.com/E-school', 'https://www.instagram.com/E-school', 'https://www.linkedin.com/E-school', 'E-school.com', 'alger centre,AlgÃ©rie', '0555466678', '0785643214', '0254486450', 'e-school@gmail.com', 'La formation graduee (Bac + 5) debouchant sur le diplome d\'ingenieur d\'etat en informatique. La recherche scientifique et developpement technologique dans les domaines de technologie de pointe, avec l\'appui des laboratoires de recherches LMCS et LCSI.');

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

DROP TABLE IF EXISTS `parents`;
CREATE TABLE IF NOT EXISTS `parents` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `dateNais` date NOT NULL,
  `adress` varchar(50) NOT NULL,
  `numTel1` varchar(25) NOT NULL,
  `numTel2` varchar(25) NOT NULL,
  `numTel3` varchar(25) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parents`
--

INSERT INTO `parents` (`id`, `nom`, `prenom`, `dateNais`, `adress`, `numTel1`, `numTel2`, `numTel3`, `idUser`) VALUES
(33, 'NEKAMICHE', 'abdelkader', '1969-02-05', 'Ksar-El-Boukhari', '058546565', '0555466678', '0554546', 48);

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `idPresentation` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph` text,
  `imgUrl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPresentation`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`idPresentation`, `paragraph`, `imgUrl`) VALUES
(1, 'L\'ecole a été créée en 1969 sous le nom de Centre d’Etudes et de Recherche en Informatique (CERI). Rattachée au Ministère de l\'Enseignement Supérieur en 1983 sous le nom de l\'Institut National de formation en Informatique (INI), elle a ete transformée en Ecole nationale Supérieure par le décret exécutif N°08-220 du 14 juillet 2008, sous le nom d\'Ecole nationale Supérieure d\'Informatique (ESI).', '../school/paragraphes/img1.jpeg'),
(2, 'l\'ecole contient les 3 cycles d\'ensienements (primaire,Moyen,Secondaire)\r\nl\'ecole contient les 3 cycles d\'ensienements (primaire,Moyen,Secondaire)\r\nl\'ecole contient les 3 cycles d\'ensienements (primaire,Moyen,Secondaire)', ''),
(3, 'cette plateforme c\'est l\'intermediaire entre les enseignants et leures eleves d\'un cote, et d\'autre cote entre les parents d\'eleves et les enseignants de ses enfants donc cette plateforme donne la possiblité aux parents de suivre leurs enfants, voir leurs notes, remarques des enseignants,...ect', '../school/paragraphes/img2.jpeg'),
(4, 'L\'ecole a une grande bibliothèque ui contient tout les livre neccisaire pour l\'apprantissage des enfants.\r\nde plus y a des livre de lecture pour puossé les enfants de faire la lecture.', '../school/paragraphes/img2.jpeg'),
(10, 'Depuis près de 20 ans, le groupe SEA – Savoir Enseigner Autrement- s’efforce d’apporter à chacun de ses élèves, quels que soient l’âge, le sport, la possibilité de concilier efficacement scolarité et passion.   Initialement spécialisé en Sports Etudes, le groupe se développe aujourd’hui et s’ouvre à d’autres horizons, la musique, l’art, le développement personnel et les problématiques environnementales.   Le groupe s’adapte également aux nouvelles technologies en proposant des cours en ligne et en direct depuis 2015.   Notre concept innovant permet aujourd’hui de construire ces jeunes différemment. Ce projet fait partie de nous, nous l’avons vécu, et nous expérimentons et le mettons en oeuvre chaque jour pour arriver à concevoir un nouveau système éducatif.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEn` int(11) NOT NULL,
  `heureReception` varchar(15) NOT NULL,
  `jourReception` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reception`
--

INSERT INTO `reception` (`id`, `idEn`, `heureReception`, `jourReception`) VALUES
(1, 1, '08:15', 'lundi'),
(2, 7, '10:11', 'mardi'),
(3, 1, '15:00', 'Dimanche'),
(4, 1, '10:30', 'Mercredi'),
(5, 7, '13:30', 'Dimanche'),
(6, 7, '13:30', 'Dimanche'),
(7, 7, '9:00', 'Jeudi'),
(8, 5, '15:00', 'Dimanche'),
(9, 5, '10:30', 'Mercredi'),
(10, 5, '9:15', 'Mardi'),
(11, 5, '8:30', 'Lundi');

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

DROP TABLE IF EXISTS `repas`;
CREATE TABLE IF NOT EXISTS `repas` (
  `idRepas` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `description` text,
  `imgUrl` text,
  `jour` varchar(20) NOT NULL,
  PRIMARY KEY (`idRepas`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `repas`
--

INSERT INTO `repas` (`idRepas`, `nom`, `description`, `imgUrl`, `jour`) VALUES
(5, 'Riz au Citron', 'Ce riz au citron est agrÃ©ablement parfumÃ©. Recette facile et rapide Ã  faire. ', '../school/repas/Riz-au-citron-recette-facile-rapide_680-500x500.jpg', 'Jeudi'),
(7, 'chourba', 'La chorba frik est une variante de la soupe traditionnelle maghrÃ©bine trÃ¨s consommÃ©e en AlgÃ©rie, en Tunisie, et en Libye.', '../school/repas/chorba-3.jpg', 'Dimanche'),
(8, 'Gratin Poulet', 'repas contient pomme,onion et poulet ', '../school/repas/i51413-gratins-varies-et-pas-chers.jpg', 'Lundi'),
(9, 'Loubia', 'Une recette typiquement Algerienne, simple et trÃ¨s savoureuse. Pour ceux qui ne connaissent pas, ce serait dommage de passer Ã  cÃ´tÃ© !', '../school/repas/370875.webp', 'Mercredi'),
(10, 'poulet', 'efzhbuifzbiu', '../school/repas/poulet-roti-frites.jpeg', 'Mardi');

-- --------------------------------------------------------

--
-- Structure de la table `seances`
--

DROP TABLE IF EXISTS `seances`;
CREATE TABLE IF NOT EXISTS `seances` (
  `idseance` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(20) NOT NULL,
  `heureDebut` varchar(15) NOT NULL,
  `heureFin` varchar(15) NOT NULL,
  `idEnseignant` int(11) NOT NULL,
  `idNiv` int(11) NOT NULL,
  `idModule` int(11) NOT NULL,
  PRIMARY KEY (`idseance`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `seances`
--

INSERT INTO `seances` (`idseance`, `jour`, `heureDebut`, `heureFin`, `idEnseignant`, `idNiv`, `idModule`) VALUES
(1, 'Dimanche', '10:00', '12:00', 5, 3, 2),
(2, 'Mardi', '13:30', '14:30', 5, 3, 3),
(3, 'Dimanche', '08:00', '09:30', 1, 1, 4),
(4, 'Dimache', '14:30', '16:30', 1, 1, 1),
(5, 'Lundi', '09:30', '11:00', 1, 1, 1),
(6, 'Lundi', '11:00', '12:30', 1, 1, 1),
(7, 'Lundi', '08:00', '10:00', 5, 3, 2),
(8, 'Lundi', '08:00', '10:00', 5, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `email`, `password`, `username`) VALUES
(1, 'hn_nekamiche@esi.dz', 'noha', 'noha'),
(48, 'hn_nekamiche@esi.dz', 'nekamicheabdelkader', 'abdelkader'),
(72, 'kadri@esi.dz', 'kadrinassima', 'nassima'),
(71, 'kadri@esi.dz', 'kadrinassima', 'nassima'),
(73, '', '', ''),
(53, 'moustefai@esi.dz', 'mostefaiamine', 'amine'),
(68, 'amrouche@esi.dz', 'amrouchehakim', 'hakim'),
(49, 'nekamiche@gmail.com', 'nekamichesouha', 'souha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
