-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2022 at 07:47 AM
-- Server version: 8.0.29-0ubuntu0.22.04.2
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `westec`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--

CREATE TABLE `abonnement` (
  `id` int NOT NULL,
  `compte` int NOT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL,
  `pack` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `abonnement`
--

INSERT INTO `abonnement` (`id`, `compte`, `debut`, `fin`, `pack`) VALUES
(1, 1, '2022-05-15', '2022-08-13', 1),
(2, 11, '2022-05-22', '2022-08-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agence`
--

CREATE TABLE `agence` (
  `id` int NOT NULL,
  `compte` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `skype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `langue` varchar(50) DEFAULT NULL,
  `siren` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `siret` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `horaire` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `hubspot` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `insta` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `pinterest` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `web` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `categorie` int DEFAULT NULL,
  `categorie_action` int DEFAULT NULL,
  `ville` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `pays` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `zone` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `agence`
--

INSERT INTO `agence` (`id`, `compte`, `nom`, `telephone`, `email`, `mobile`, `skype`, `langue`, `siren`, `siret`, `horaire`, `hubspot`, `facebook`, `insta`, `twitter`, `pinterest`, `linkedin`, `web`, `categorie`, `categorie_action`, `ville`, `pays`, `zone`, `adresse`, `about`, `active`) VALUES
(1, 11, 'henri', '66173930', 'henrylabgroup@gmail.com', '', 'shadow', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int NOT NULL,
  `compte` int NOT NULL,
  `agency` int NOT NULL,
  `member_of` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `skype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `insta` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `pinterest` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `web` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `categorie` int DEFAULT NULL,
  `categorie_action` int DEFAULT NULL,
  `ville` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `pays` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `zone` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `compte`, `agency`, `member_of`, `nom`, `fname`, `lname`, `telephone`, `email`, `mobile`, `skype`, `facebook`, `insta`, `twitter`, `pinterest`, `linkedin`, `web`, `categorie`, `categorie_action`, `ville`, `pays`, `zone`, `adresse`, `about`, `active`) VALUES
(1, 21, 11, 'Henri', 'agentzero', 'Agent', 'ZeroZeroSept', '66173930', 'agentzero@gmail.com', '1234567', 'agent', 'agent', 'agent', 'agent', 'agent', 'agent', 'agent', NULL, NULL, 'Porto', 'Benin', 'Agahougbeta', '106 H Aglogbe centre', 'azeertryyuioip', 0);

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `slug` varchar(500) NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `compte_agence` int NOT NULL,
  `prix` int NOT NULL,
  `etiquette_duree` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `devise` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `taux_imp` int NOT NULL,
  `frais_proprios` int NOT NULL,
  `categorie_annonce` int NOT NULL,
  `type_annonce` int NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `etat` int NOT NULL,
  `ville` int NOT NULL,
  `voisinage` int NOT NULL,
  `code_zip` varchar(50) NOT NULL,
  `pays` int NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `surface` int NOT NULL,
  `nb_piece` int NOT NULL,
  `chambres` int NOT NULL,
  `salle_bain` int NOT NULL,
  `annee_cons` date NOT NULL,
  `garage` varchar(150) NOT NULL,
  `surface_garage` int NOT NULL,
  `dispo_depuis` date NOT NULL,
  `sous_sol` varchar(150) NOT NULL,
  `nb_etage` int DEFAULT NULL,
  `statut` int NOT NULL,
  `remarque` text NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `valid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `slug`, `description`, `compte_agence`, `prix`, `etiquette_duree`, `devise`, `taux_imp`, `frais_proprios`, `categorie_annonce`, `type_annonce`, `adresse`, `etat`, `ville`, `voisinage`, `code_zip`, `pays`, `longitude`, `latitude`, `surface`, `nb_piece`, `chambres`, `salle_bain`, `annee_cons`, `garage`, `surface_garage`, `dispo_depuis`, `sous_sol`, `nb_etage`, `statut`, `remarque`, `active`, `valid`) VALUES
(36, 'qsfhjkb', 'qsfhjkb62876706baec9', 'b rb brbrehr', 1, 500000, '/mois', 'FCFA', 12, 5000, 38, 4, '106 H Aglogbe centre', 3, 17, 4, '104486', 17, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-17', 'oui', 1, 1, 'azertyuiop', 1, 0),
(37, 'Au oelozmldl', 'Au-oelozmldl62878724e60b9', 'Oeoelozolzldlelldldoeoldlzllso', 1, 1234567, '/mois', 'Fcfa', 10, 1234, 24, 3, 'Azdxss', 3, 5, 1, '12344', 2, '-73.82480777777776', '40.7324319', 1234, 12, 5, 2, '2022-05-20', 'Oui', 1234, '2022-05-20', 'Oui', 1, 2, 'Rezdd', 1, 0),
(38, 'aqzeqwqz', 'aqzeqwqz6289ad0319201', 'wde wghw', 1, 500000, '/mois', 'FCFA', 12, 5000, 27, 3, '106 H Aglogbe centre', 4, 12, 4, '104486', 8, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-17', 'oui', 1, 2, 'azertyuiop', 0, 0),
(39, 'aqzeqwqz', 'aqzeqwqz6289ad87bd0ff', 'wde wghw', 1, 500000, '/mois', 'FCFA', 12, 5000, 27, 3, '106 H Aglogbe centre', 4, 12, 4, '104486', 8, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-17', 'oui', 1, 2, 'azertyuiop', 1, 0),
(40, 'aqzeqwqz', 'aqzeqwqz6289af5700a6b', 'wde wghw', 1, 500000, '/mois', 'FCFA', 12, 5000, 27, 3, '106 H Aglogbe centre', 4, 12, 4, '104486', 8, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-17', 'oui', 1, 2, 'azertyuiop', 1, 0),
(41, 'azdfe', 'azdfe6289e2ab476e6', 'zcvzzfzcf', 1, 500000, '/mois', 'FCFA', 12, 5000, 29, 3, '106 H Aglogbe centre', 4, 12, 7, '104486', 11, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-20', 'oui', 1, 2, 'azertyuiop', 1, 0),
(42, 'azertyuj', 'azertyuj6289e998ab701', 'dryjgyuknyderssssssssssssssssssssssssssssssssstifrhgnyfhg', 1, 500000, '/mois', 'FCFA', 12, 5000, 33, 3, '106 H Aglogbe centre', 4, 12, 4, '104486', 14, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-20', 'oui', 1, 2, 'azertyuiop', 1, 0),
(43, 'azertyuj', 'azertyuj6289ebb3f240d', 'dryjgyuknyderssssssssssssssssssssssssssssssssstifrhgnyfhg', 1, 500000, '/mois', 'FCFA', 12, 5000, 33, 3, '106 H Aglogbe centre', 4, 12, 4, '104486', 14, '-73.82480777777776', '40.7324319', 300, 10, 3, 2, '2022-05-02', 'oui', 50, '2022-05-20', 'oui', 1, 2, 'azertyuiop', 1, 0),
(44, 'Maison de luxe Adjarra', 'Maison-de-luxe-Adjarra628e593773848', 'azevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffcazevrtcgffffffffffffffffffffffffffffffffffffffffffffffffffffffffc', 11, 50000, '/mois', 'FCFA', 12, 10000, 32, 3, '106H Aglogbe centre', 3, 15, 4, '12452', 7, '-73.82480777777776', '40.72111406457713', 425, 5, 3, 2, '2022-05-01', 'oui', 50, '2022-05-26', 'oui', 1, 2, 'azrtyuiofghjkvbuihcjdjjdz', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `carac_plus`
--

CREATE TABLE `carac_plus` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `carac_plus`
--

INSERT INTO `carac_plus` (`id`, `nom`, `statut`) VALUES
(1, 'à côté d\'école', 1),
(2, 'à côté d\'hopital', 1),
(3, 'à côté d\'un arrêt de bus', 1),
(4, 'à côté d\'une gare', 1),
(5, 'à côté de centre commercial', 1),
(6, 'à côté de garage', 1),
(7, 'Ascenseur', 1),
(8, 'Cave', 1),
(9, 'Chaise accessible', 1),
(10, 'Cheminée', 1),
(11, 'Climatisation', 1),
(12, 'Jardin', 1),
(13, 'Parking', 1),
(14, 'Portier', 1),
(15, 'Terrasse', 1),
(16, 'Vue dégagée', 1),
(17, 'WiFi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `carac_plus_annonce`
--

CREATE TABLE `carac_plus_annonce` (
  `id` int NOT NULL,
  `carac_plus` int NOT NULL,
  `annonce` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `carac_plus_annonce`
--

INSERT INTO `carac_plus_annonce` (`id`, `carac_plus`, `annonce`) VALUES
(48, 3, 36),
(49, 7, 37),
(50, 1, 38),
(51, 1, 39),
(52, 1, 40),
(53, 1, 41),
(54, 3, 41),
(55, 5, 41),
(56, 1, 42),
(57, 1, 43),
(58, 1, 44),
(59, 7, 44);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `active`) VALUES
(24, 'Appartement', 1),
(25, 'Boutique', 1),
(26, 'Bureau', 1),
(27, 'Chalet', 1),
(28, 'Château', 1),
(29, 'Colocation', 1),
(30, 'Condos', 1),
(31, 'Duplex', 1),
(32, 'Ferme', 1),
(33, 'Get House', 1),
(34, 'Hôtel et Résidence', 1),
(35, 'Immeuble', 1),
(36, 'Location Meublée', 1),
(37, 'Location vide', 1),
(38, 'Maison', 1),
(39, 'Manoir', 1),
(40, 'Parc', 1),
(41, 'Penthouse', 1),
(42, 'Studio', 1),
(43, 'Terrain', 1),
(44, 'Terrain de chasse', 1),
(45, 'Vacance', 1),
(46, 'Viager', 1),
(47, 'Villa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_action`
--

CREATE TABLE `categorie_action` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `categorie_action`
--

INSERT INTO `categorie_action` (`id`, `nom`, `active`) VALUES
(1, 'A Louer', 1),
(2, 'A Vendre', 1),
(3, 'Prestige', 1),
(4, 'Vacances', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorie_annonce`
--

CREATE TABLE `categorie_annonce` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

CREATE TABLE `etat` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`id`, `nom`, `statut`) VALUES
(1, 'Abomey-Calavi', 1),
(2, 'ALICANTE', 1),
(3, 'Bénin', 1),
(4, 'Brésil', 1),
(5, 'France', 1),
(6, 'La Vega Baja del Segura', 1),
(7, 'Madagascar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exterieur`
--

CREATE TABLE `exterieur` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `exterieur`
--

INSERT INTO `exterieur` (`id`, `nom`, `statut`) VALUES
(3, 'Arrière-cour', 1),
(4, 'Piscine', 1),
(5, 'Cour avant', 1),
(6, 'Terrain de basketball', 1),
(7, 'Garage attaché', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exterieur_annonce`
--

CREATE TABLE `exterieur_annonce` (
  `id` int NOT NULL,
  `exterieur` int NOT NULL,
  `annonce` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `exterieur_annonce`
--

INSERT INTO `exterieur_annonce` (`id`, `exterieur`, `annonce`) VALUES
(36, 3, 36),
(37, 3, 37),
(38, 3, 38),
(39, 3, 39),
(40, 3, 40),
(41, 3, 41),
(42, 5, 41),
(43, 3, 42),
(44, 5, 42),
(45, 3, 43),
(46, 5, 43),
(47, 3, 44),
(48, 5, 44);

-- --------------------------------------------------------

--
-- Table structure for table `image_annonce`
--

CREATE TABLE `image_annonce` (
  `id` int NOT NULL,
  `img` varchar(255) NOT NULL,
  `annonce` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `image_annonce`
--

INSERT INTO `image_annonce` (`id`, `img`, `annonce`) VALUES
(8, '62876707cc0bf1.jpeg', 36),
(9, '62878725ba52d1652214744319.jpg', 37),
(10, '62878725e2d8c1652212360378.jpg', 37),
(11, '6289ad04f12b9Screenshot from 2022-05-21 14-26-35.png', 38),
(12, '6289ad891aec5Screenshot from 2022-05-21 14-26-35.png', 39),
(13, '6289af57f2821Screenshot from 2022-05-21 14-26-35.png', 40),
(14, '6289e2adcf1f3focus.jpg', 41),
(15, '6289e99a22895butterbuttercat.jpg', 42),
(16, '6289ebb4edaaebutterbuttercat.jpg', 43),
(17, '628e5939753c92020-08-08-105314.jpg', 44),
(18, '628e5939b49892020-08-13-135053.jpg', 44),
(19, '628e5939e24752020-08-25-224554.jpg', 44),
(20, '628e593a1acac2020-08-26-153256.jpg', 44),
(21, '628e593a45e8b2020-08-28-201459.jpg', 44);

-- --------------------------------------------------------

--
-- Table structure for table `interieur`
--

CREATE TABLE `interieur` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `interieur`
--

INSERT INTO `interieur` (`id`, `nom`, `statut`) VALUES
(1, 'Blanchisserie', 1),
(2, 'Salle de médias', 1),
(3, 'Cuisine équipée', 1),
(4, 'Gym', 1),
(5, 'Salle des médias', 1);

-- --------------------------------------------------------

--
-- Table structure for table `interieur_annonce`
--

CREATE TABLE `interieur_annonce` (
  `id` int NOT NULL,
  `interieur` int NOT NULL,
  `annonce` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `interieur_annonce`
--

INSERT INTO `interieur_annonce` (`id`, `interieur`, `annonce`) VALUES
(35, 1, 36),
(36, 1, 37),
(37, 1, 38),
(38, 2, 38),
(39, 1, 39),
(40, 2, 39),
(41, 1, 40),
(42, 2, 40),
(43, 1, 41),
(44, 3, 41),
(45, 3, 42),
(46, 3, 43),
(47, 1, 44),
(48, 3, 44);

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `active`) VALUES
(1, 'Afghanistan', 1),
(2, 'Afrique du Sud', 1),
(3, 'Albanie', 1),
(4, 'Algérie', 1),
(5, 'Allemagne', 1),
(6, 'Andorre', 1),
(7, 'Angola', 1),
(8, 'Anguilla', 1),
(9, 'Antarctique', 1),
(10, 'Antigua-et-Barbuda', 1),
(11, 'Antilles Néerlandaises', 1),
(12, 'Arabie Saoudite', 1),
(13, 'Argentine', 1),
(14, 'Arménie', 1),
(15, 'Aruba', 1),
(16, 'Australie', 1),
(17, 'Autriche', 1),
(18, 'Azerbaïdjan', 1),
(19, 'Bahamas', 1),
(20, 'Bahreïn', 1),
(21, 'Bangladesh', 1),
(22, 'Barbade', 1),
(23, 'Bélarus', 1),
(24, 'Belgique', 1),
(25, 'Belize', 1),
(26, 'Bénin', 1),
(27, 'Bermudes', 1),
(28, 'Bhoutan', 1),
(29, 'Bolivie', 1),
(30, 'Bosnie-Herzégovine', 1),
(31, 'Botswana', 1),
(32, 'Brésil', 1),
(33, 'Brunéi Darussalam', 1),
(34, 'Bulgarie', 1),
(35, 'Burkina Faso', 1),
(36, 'Burundi', 1),
(37, 'Cambodge', 1),
(38, 'Cameroun', 1),
(39, 'Canada', 1),
(40, 'Cap-vert', 1),
(41, 'Chili', 1),
(42, 'Chine', 1),
(43, 'Chypre', 1),
(44, 'Colombie', 1),
(45, 'Comores', 1),
(46, 'Costa Rica', 1),
(47, 'Côte d\'Ivoire', 1),
(48, 'Croatie', 1),
(49, 'Cuba', 1),
(50, 'Danemark', 1),
(51, 'Djibouti', 1),
(52, 'Dominique', 1),
(53, 'Égypte', 1),
(54, 'El Salvador', 1),
(55, 'Émirats Arabes Unis', 1),
(56, 'Équateur', 1),
(57, 'Érythrée', 1),
(58, 'Espagne', 1),
(59, 'Estonie', 1),
(60, 'États Fédérés de Micronésie', 1),
(61, 'États-Unis', 1),
(62, 'Éthiopie', 1),
(63, 'Fédération de Russie', 1),
(64, 'Fidji', 1),
(65, 'Finlande', 1),
(66, 'France', 1),
(67, 'Gabon', 1),
(68, 'Gambie', 1),
(69, 'Géorgie', 1),
(70, 'Géorgie du Sud et les Îles Sandwich du Sud', 1),
(71, 'Ghana', 1),
(72, 'Gibraltar', 1),
(73, 'Grèce', 1),
(74, 'Grenade', 1),
(75, 'Groenland', 1),
(76, 'Guadeloupe', 1),
(77, 'Guam', 1),
(78, 'Guatemala', 1),
(79, 'Guinée', 1),
(80, 'Guinée Équatoriale', 1),
(81, 'Guinée-Bissau', 1),
(82, 'Guyana', 1),
(83, 'Guyane Française', 1),
(84, 'Haïti', 1),
(85, 'Honduras', 1),
(86, 'Hong-Kong', 1),
(87, 'Hongrie', 1),
(88, 'Île Bouvet', 1),
(89, 'Île Christmas', 1),
(90, 'Île de Man', 1),
(91, 'Île Norfolk', 1),
(92, 'Îles (malvinas) Falkland', 1),
(93, 'Îles Åland', 1),
(94, 'Îles Caïmanes', 1),
(95, 'Îles Cocos (Keeling)', 1),
(96, 'Îles Cook', 1),
(97, 'Îles Féroé', 1),
(98, 'Îles Heard et Mcdonald', 1),
(99, 'Îles Mariannes du Nord', 1),
(100, 'Îles Marshall', 1),
(101, 'Îles Mineures Éloignées des États-Unis', 1),
(102, 'Îles Salomon', 1),
(103, 'Îles Turks et Caïques', 1),
(104, 'Îles Vierges Britanniques', 1),
(105, 'Îles Vierges des États-Unis', 1),
(106, 'Inde', 1),
(107, 'Indonésie', 1),
(108, 'Iraq', 1),
(109, 'Irlande', 1),
(110, 'Islande', 1),
(111, 'Israël', 1),
(112, 'Italie', 1),
(113, 'Jamahiriya Arabe Libyenne', 1),
(114, 'Jamaïque', 1),
(115, 'Japon', 1),
(116, 'Jordanie', 1),
(117, 'Kazakhstan', 1),
(118, 'Kenya', 1),
(119, 'Kirghizistan', 1),
(120, 'Kiribati', 1),
(121, 'Koweït', 1),
(122, 'L\'ex-République Yougoslave de Macédoine', 1),
(123, 'Lesotho', 1),
(124, 'Lettonie', 1),
(125, 'Liban', 1),
(126, 'Libéria', 1),
(127, 'Liechtenstein', 1),
(128, 'Lituanie', 1),
(129, 'Luxembourg', 1),
(130, 'Macao', 1),
(131, 'Madagascar', 1),
(132, 'Malaisie', 1),
(133, 'Malawi', 1),
(134, 'Maldives', 1),
(135, 'Mali', 1),
(136, 'Malte', 1),
(137, 'Maroc', 1),
(138, 'Martinique', 1),
(139, 'Maurice', 1),
(140, 'Mauritanie', 1),
(141, 'Mayotte', 1),
(142, 'Mexique', 1),
(143, 'Monaco', 1),
(144, 'Mongolie', 1),
(145, 'Montserrat', 1),
(146, 'Mozambique', 1),
(147, 'Myanmar', 1),
(148, 'Namibie', 1),
(149, 'Nauru', 1),
(150, 'Népal', 1),
(151, 'Nicaragua', 1),
(152, 'Niger', 1),
(153, 'Nigéria', 1),
(154, 'Niué', 1),
(155, 'Norvège', 1),
(156, 'Nouvelle-Calédonie', 1),
(157, 'Nouvelle-Zélande', 1),
(158, 'Oman', 1),
(159, 'Ouganda', 1),
(160, 'Ouzbékistan', 1),
(161, 'Pakistan', 1),
(162, 'Palaos', 1),
(163, 'Panama', 1),
(164, 'Papouasie-Nouvelle-Guinée', 1),
(165, 'Paraguay', 1),
(166, 'Pays-Bas', 1),
(167, 'Pérou', 1),
(168, 'Philippines', 1),
(169, 'Pitcairn', 1),
(170, 'Pologne', 1),
(171, 'Polynésie Française', 1),
(172, 'Porto Rico', 1),
(173, 'Portugal', 1),
(174, 'Qatar', 1),
(175, 'République Arabe Syrienne', 1),
(176, 'République Centrafricaine', 1),
(177, 'République de Corée', 1),
(178, 'République de Moldova', 1),
(179, 'République Démocratique du Congo', 1),
(180, 'République Démocratique Populaire Lao', 1),
(181, 'République Dominicaine', 1),
(182, 'République du Congo', 1),
(183, 'République Islamique d\'Iran', 1),
(184, 'République Populaire Démocratique de Corée', 1),
(185, 'République Tchèque', 1),
(186, 'République-Unie de Tanzanie', 1),
(187, 'Réunion', 1),
(188, 'Roumanie', 1),
(189, 'Royaume-Uni', 1),
(190, 'Rwanda', 1),
(191, 'Sahara Occidental', 1),
(192, 'Saint-Kitts-et-Nevis', 1),
(193, 'Saint-Marin', 1),
(194, 'Saint-Pierre-et-Miquelon', 1),
(195, 'Saint-Siège (état de la Cité du Vatican)', 1),
(196, 'Saint-Vincent-et-les Grenadines', 1),
(197, 'Sainte-Hélène', 1),
(198, 'Sainte-Lucie', 1),
(199, 'Samoa', 1),
(200, 'Samoa Américaines', 1),
(201, 'Sao Tomé-et-Principe', 1),
(202, 'Sénégal', 1),
(203, 'Serbie-et-Monténégro', 1),
(204, 'Seychelles', 1),
(205, 'Sierra Leone', 1),
(206, 'Singapour', 1),
(207, 'Slovaquie', 1),
(208, 'Slovénie', 1),
(209, 'Somalie', 1),
(210, 'Soudan', 1),
(211, 'Sri Lanka', 1),
(212, 'Suède', 1),
(213, 'Suisse', 1),
(214, 'Suriname', 1),
(215, 'Svalbard etÎle Jan Mayen', 1),
(216, 'Swaziland', 1),
(217, 'Tadjikistan', 1),
(218, 'Taïwan', 1),
(219, 'Tchad', 1),
(220, 'Terres Australes Françaises', 1),
(221, 'Territoire Britannique de l\'Océan Indien', 1),
(222, 'Territoire Palestinien Occupé', 1),
(223, 'Thaïlande', 1),
(224, 'Timor-Leste', 1),
(225, 'Togo', 1),
(226, 'Tokelau', 1),
(227, 'Tonga', 1),
(228, 'Trinité-et-Tobago', 1),
(229, 'Tunisie', 1),
(230, 'Turkménistan', 1),
(231, 'Turquie', 1),
(232, 'Tuvalu', 1),
(233, 'Ukraine', 1),
(234, 'Uruguay', 1),
(235, 'Vanuatu', 1),
(236, 'Venezuela', 1),
(237, 'Viet Nam', 1),
(238, 'Wallis et Futuna', 1),
(239, 'Yémen', 1),
(240, 'Zambie', 1),
(241, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plan_abonnement`
--

CREATE TABLE `plan_abonnement` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `nombre_jour` int NOT NULL,
  `nb_annonce` int NOT NULL,
  `prix` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `plan_abonnement`
--

INSERT INTO `plan_abonnement` (`id`, `nom`, `nombre_jour`, `nb_annonce`, `prix`, `description`) VALUES
(1, 'initial', 90, 100, 0, 'plan initial de 90 jours offert à l\'inscription'),
(2, 'Argent', 90, 300, 20, 'Plan premium de 90 jours '),
(3, 'Or', 180, 500, 50, 'Plan premium de 180 jouurs');

-- --------------------------------------------------------

--
-- Table structure for table `plan_etage_annonce`
--

CREATE TABLE `plan_etage_annonce` (
  `id` int NOT NULL,
  `titre` varchar(255) NOT NULL,
  `annonce` int NOT NULL,
  `description` text NOT NULL,
  `taille_forfait` int NOT NULL,
  `plan_piece` varchar(255) NOT NULL,
  `plan_salle_bain` varchar(255) NOT NULL,
  `prix forfait` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `type_annonce`
--

CREATE TABLE `type_annonce` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `type_annonce`
--

INSERT INTO `type_annonce` (`id`, `nom`, `active`) VALUES
(1, 'Neuf', 1),
(2, 'Nouvelle Offre', 1),
(3, 'Offre Chaude', 1),
(4, 'Open House', 1),
(5, 'Vendue', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  `compte` int NOT NULL,
  `joined_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `pseudo`, `ville`, `img`, `password`, `compte`, `joined_date`, `active`) VALUES
(1, 'pariso03henri@gmail.com', 'nobody', '', 'avater.png', 'c6ffbf250f886ab82abcee9edede6f212946d9cd', 1, '2022-05-14 14:12:53', 1),
(10, 'shadow@shadow.com', 'shadow', '', 'avater.png', 'c6ffbf250f886ab82abcee9edede6f212946d9cd', 1, '2022-05-15 20:38:02', 1),
(11, 'henrylabgroup@gmail.com', 'henri', '', '628b1f2def275image.png', 'c6ffbf250f886ab82abcee9edede6f212946d9cd', 2, '2022-05-22 15:08:50', 1),
(21, 'agentzero@gmail.com', 'agentzero', '', 'avater.png', 'c6ffbf250f886ab82abcee9edede6f212946d9cd', 3, '2022-05-22 20:32:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilitaire`
--

CREATE TABLE `utilitaire` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `utilitaire`
--

INSERT INTO `utilitaire` (`id`, `nom`, `statut`) VALUES
(2, 'Chauffage', 1),
(3, 'Eau', 1),
(4, 'Electricité', 1),
(5, 'Gaz naturel', 1),
(6, 'Ventilation', 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilitaire_annonce`
--

CREATE TABLE `utilitaire_annonce` (
  `id` int NOT NULL,
  `utilitaire` int NOT NULL,
  `annonce` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `utilitaire_annonce`
--

INSERT INTO `utilitaire_annonce` (`id`, `utilitaire`, `annonce`) VALUES
(1, 3, 41);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id`, `nom`, `statut`) VALUES
(1, 'Abomey', 1),
(2, 'Algorfa', 1),
(3, 'All', 1),
(4, 'Bordeaux', 1),
(5, 'Calavi', 1),
(6, 'Ciudad Quesada', 1),
(7, 'Cotonou', 1),
(8, 'Daya Nueva', 1),
(9, 'Elche', 1),
(10, 'Guardamar del Segura', 1),
(11, 'Lyon', 1),
(12, 'Marseille', 1),
(13, 'Nates', 1),
(14, 'Nice', 1),
(15, 'Paris', 1),
(16, 'Porto-Novo', 1),
(17, 'San Fulgencio', 1),
(18, 'Santa Pola', 1),
(19, 'Torrevieja', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voisinage`
--

CREATE TABLE `voisinage` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `voisinage`
--

INSERT INTO `voisinage` (`id`, `nom`, `statut`) VALUES
(1, 'Régions', 1),
(2, '2° ligne de plage', 1),
(3, 'All', 1),
(4, 'Centre Villr', 1),
(5, 'Chartrons, Grand Parc', 1),
(6, 'El Raso', 1),
(7, 'Île-de-France', 1),
(8, 'Nouvelle Auquitaine', 1),
(9, 'Quartier Résidentiel', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compte_abo` (`compte`),
  ADD KEY `pack_abo` (`pack`);

--
-- Indexes for table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agency_account` (`compte`),
  ADD KEY `categorie_agency` (`categorie`),
  ADD KEY `categorie_action_agency` (`categorie_action`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agency_account` (`compte`),
  ADD KEY `categorie_agency` (`categorie`),
  ADD KEY `categorie_action_agency` (`categorie_action`),
  ADD KEY `agency` (`agency`);

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `annonce_agence` (`compte_agence`),
  ADD KEY `type_annonce` (`type_annonce`),
  ADD KEY `categorie_annonce` (`categorie_annonce`);

--
-- Indexes for table `carac_plus`
--
ALTER TABLE `carac_plus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carac_plus_annonce`
--
ALTER TABLE `carac_plus_annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carac_plus_an` (`carac_plus`),
  ADD KEY `plus_an` (`annonce`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_action`
--
ALTER TABLE `categorie_action`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_annonce`
--
ALTER TABLE `categorie_annonce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterieur`
--
ALTER TABLE `exterieur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exterieur_annonce`
--
ALTER TABLE `exterieur_annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ann` (`annonce`),
  ADD KEY `ext` (`exterieur`);

--
-- Indexes for table `image_annonce`
--
ALTER TABLE `image_annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_an` (`annonce`);

--
-- Indexes for table `interieur`
--
ALTER TABLE `interieur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interieur_annonce`
--
ALTER TABLE `interieur_annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `int` (`interieur`),
  ADD KEY `annonce_in` (`annonce`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Indexes for table `plan_abonnement`
--
ALTER TABLE `plan_abonnement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_etage_annonce`
--
ALTER TABLE `plan_etage_annonce`
  ADD KEY `annonce_plan` (`annonce`);

--
-- Indexes for table `type_annonce`
--
ALTER TABLE `type_annonce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilitaire`
--
ALTER TABLE `utilitaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilitaire_annonce`
--
ALTER TABLE `utilitaire_annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilitaire_an` (`utilitaire`),
  ADD KEY `annonce_ut` (`annonce`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voisinage`
--
ALTER TABLE `voisinage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `carac_plus`
--
ALTER TABLE `carac_plus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carac_plus_annonce`
--
ALTER TABLE `carac_plus_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `categorie_action`
--
ALTER TABLE `categorie_action`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorie_annonce`
--
ALTER TABLE `categorie_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exterieur`
--
ALTER TABLE `exterieur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exterieur_annonce`
--
ALTER TABLE `exterieur_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `image_annonce`
--
ALTER TABLE `image_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `interieur`
--
ALTER TABLE `interieur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `interieur_annonce`
--
ALTER TABLE `interieur_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `plan_abonnement`
--
ALTER TABLE `plan_abonnement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_annonce`
--
ALTER TABLE `type_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `utilitaire`
--
ALTER TABLE `utilitaire`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `utilitaire_annonce`
--
ALTER TABLE `utilitaire_annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `voisinage`
--
ALTER TABLE `voisinage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `compte_abo` FOREIGN KEY (`compte`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pack_abo` FOREIGN KEY (`pack`) REFERENCES `plan_abonnement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `agence`
--
ALTER TABLE `agence`
  ADD CONSTRAINT `agency_account` FOREIGN KEY (`compte`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorie_action_agency` FOREIGN KEY (`categorie_action`) REFERENCES `categorie_action` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorie_agency` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `agency` FOREIGN KEY (`agency`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_agence` FOREIGN KEY (`compte_agence`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categorie_annonce` FOREIGN KEY (`categorie_annonce`) REFERENCES `categorie` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type_annonce` FOREIGN KEY (`type_annonce`) REFERENCES `type_annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `carac_plus_annonce`
--
ALTER TABLE `carac_plus_annonce`
  ADD CONSTRAINT `carac_plus_an` FOREIGN KEY (`carac_plus`) REFERENCES `carac_plus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plus_an` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exterieur_annonce`
--
ALTER TABLE `exterieur_annonce`
  ADD CONSTRAINT `ann` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ext` FOREIGN KEY (`exterieur`) REFERENCES `exterieur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `image_annonce`
--
ALTER TABLE `image_annonce`
  ADD CONSTRAINT `img_an` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `interieur_annonce`
--
ALTER TABLE `interieur_annonce`
  ADD CONSTRAINT `annonce_in` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `int` FOREIGN KEY (`interieur`) REFERENCES `interieur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_etage_annonce`
--
ALTER TABLE `plan_etage_annonce`
  ADD CONSTRAINT `annonce_plan` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilitaire_annonce`
--
ALTER TABLE `utilitaire_annonce`
  ADD CONSTRAINT `annonce_ut` FOREIGN KEY (`annonce`) REFERENCES `annonce` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilitaire_an` FOREIGN KEY (`utilitaire`) REFERENCES `utilitaire` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
