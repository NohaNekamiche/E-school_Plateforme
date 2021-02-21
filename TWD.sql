-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 21 fév. 2021 à 22:33
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`idArticle`, `titre`, `descrption`, `imageUrl`, `concerner`) VALUES
(1, 'covid19', '<?php\r\nclass Point {\r\n    protected int $x;\r\n    protected int $y;\r\n\r\n    public function __construct(int $x, int $y = 0) {\r\n        $this->x = $x;\r\n        $this->y = $y;\r\n    }\r\n}\r\n\r\n// Pass both parameters.\r\n$p1 = new Point(4, 5);\r\n// Pass only the required parameter. $y will take its default value of 0.\r\n$p2 = new Point(4);\r\n// With named parameters (as of PHP 8.0):\r\n$p3 = new Point(y: 5, x: 4);\r\n?>', 'https://fontawesome.com/icons/image?style=solid', 'etudiant');

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
  `dateNais` date NOT NULL,
  `adress` varchar(25) NOT NULL,
  `numTel1` varchar(25) NOT NULL,
  `numTel2` varchar(25) NOT NULL,
  `numTel3` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(20) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `diaporama`
--

DROP TABLE IF EXISTS `diaporama`;
CREATE TABLE IF NOT EXISTS `diaporama` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imgUrl` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emploistempsmoyen`
--

DROP TABLE IF EXISTS `emploistempsmoyen`;
CREATE TABLE IF NOT EXISTS `emploistempsmoyen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idSeance1` int(11) NOT NULL,
  `idSeance2` int(11) NOT NULL,
  `idSeance3` int(11) NOT NULL,
  `idSeance4` int(11) NOT NULL,
  `idSeance5` int(11) NOT NULL,
  `idSeance6` int(11) NOT NULL,
  `idSeance7` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emploistempsprimaire`
--

DROP TABLE IF EXISTS `emploistempsprimaire`;
CREATE TABLE IF NOT EXISTS `emploistempsprimaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idSeance1` int(11) NOT NULL,
  `idSeance2` int(11) NOT NULL,
  `idSeance3` int(11) NOT NULL,
  `idSeance4` int(11) NOT NULL,
  `idSeance5` int(11) NOT NULL,
  `idSeance6` int(11) NOT NULL,
  `idSeance7` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emploistempssecondaire`
--

DROP TABLE IF EXISTS `emploistempssecondaire`;
CREATE TABLE IF NOT EXISTS `emploistempssecondaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idSeance1` int(11) NOT NULL,
  `idSeance2` int(11) NOT NULL,
  `idSeance3` int(11) NOT NULL,
  `idSeance4` int(11) NOT NULL,
  `idSeance5` int(11) NOT NULL,
  `idSeance6` int(11) NOT NULL,
  `idSeance7` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `heureReception` time NOT NULL,
  `jourReception` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `numTel1` varchar(25) NOT NULL,
  `numTel2` varchar(25) NOT NULL,
  `numTel3` varchar(25) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE IF NOT EXISTS `presentation` (
  `idPresentation` int(11) NOT NULL,
  `paragraph` text,
  `imgUrl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idPresentation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`idRepas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `seancesecondaire`
--

DROP TABLE IF EXISTS `seancesecondaire`;
CREATE TABLE IF NOT EXISTS `seancesecondaire` (
  `idSeance` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(20) NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `idEnseignant` int(11) NOT NULL,
  PRIMARY KEY (`idSeance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `seancesmoyen`
--

DROP TABLE IF EXISTS `seancesmoyen`;
CREATE TABLE IF NOT EXISTS `seancesmoyen` (
  `idSeance` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(20) NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `idEnseignant` int(11) NOT NULL,
  PRIMARY KEY (`idSeance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `seancesprimaire`
--

DROP TABLE IF EXISTS `seancesprimaire`;
CREATE TABLE IF NOT EXISTS `seancesprimaire` (
  `idseance` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(20) NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL,
  `idEnseignant` int(11) NOT NULL,
  PRIMARY KEY (`idseance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `email`, `password`, `username`) VALUES
(1, 'hn_nekamiche@esi.dz', 'noha', 'noha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
