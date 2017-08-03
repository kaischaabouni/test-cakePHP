-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Août 2017 à 10:14
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_mtd_delegue`
--

-- --------------------------------------------------------

--
-- Structure de la table `delegues`
--

CREATE TABLE `delegues` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `type_voiture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `delegues`
--

INSERT INTO `delegues` (`id`, `name`, `prenom`, `ville_id`, `type_voiture`) VALUES
(1, 'Saleh', 'Mohamed', 1, 'Service'),
(2, 'Bouattour', 'Sami', 1, 'Personnelle'),
(3, 'Khaled', 'Masmoudi', 4, 'Service'),
(4, 'Yaich', 'Rami', 3, 'Personnelle'),
(5, 'NomTest', 'PrÃ©nomTest', 1, 'Personnelle'),
(6, 'Bargaoui', 'Ali', 15, 'Service');

-- --------------------------------------------------------

--
-- Structure de la table `delegues_laboratoires`
--

CREATE TABLE `delegues_laboratoires` (
  `delegue_id` int(11) NOT NULL,
  `laboratoire_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `delegues_laboratoires`
--

INSERT INTO `delegues_laboratoires` (`delegue_id`, `laboratoire_id`) VALUES
(1, 1),
(2, 1),
(4, 1),
(5, 1),
(1, 2),
(3, 2),
(5, 2),
(6, 2),
(3, 3),
(4, 3),
(5, 3),
(1, 4),
(4, 4),
(6, 4);

-- --------------------------------------------------------

--
-- Structure de la table `delegues_zones`
--

CREATE TABLE `delegues_zones` (
  `delegue_id` int(11) NOT NULL,
  `zone_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `delegues_zones`
--

INSERT INTO `delegues_zones` (`delegue_id`, `zone_id`) VALUES
(2, 1),
(5, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(1, 4),
(6, 111);

-- --------------------------------------------------------

--
-- Structure de la table `laboratoires`
--

CREATE TABLE `laboratoires` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `responsable` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `laboratoires`
--

INSERT INTO `laboratoires` (`id`, `name`, `adresse`, `mail`, `responsable`) VALUES
(1, 'Labo Pharma', '12 rue Ennour 3000 Sfax', 'info@labopharma.tn', 'Monji Abidi'),
(2, 'Paramed', '15 rue du bois 3000 Sfax', 'services@paramed.tn', 'Samir Mahmoudi'),
(3, 'HamdouniCoLab', '1 rue Hedi Chaker', 'hamdounicolab@hamdounicolab.tn', 'Hatem Hamdouni'),
(4, 'Parmaco', '10 rue d\'Alger', 'services@parmaco.tn', 'Sami Gharsi');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `regions`
--

INSERT INTO `regions` (`id`, `name`) VALUES
(1, 'ARIANA'),
(2, 'BEJA'),
(3, 'BEN AROUS'),
(4, 'BIZERTE'),
(5, 'GABES'),
(6, 'GAFSA'),
(7, 'JENDOUBA'),
(8, 'KAIROUAN'),
(9, 'KASSERINE'),
(10, 'KEBILI'),
(11, 'KEF'),
(12, 'MAHDIA'),
(13, 'MANOUBA'),
(14, 'MEDENINE'),
(15, 'MONASTIR'),
(16, 'NABEUL'),
(17, 'SFAX'),
(18, 'SIDI BOUZID'),
(19, 'SILIANA'),
(20, 'SOUSSE'),
(21, 'TATAOUINE'),
(22, 'TOZEUR'),
(23, 'TUNIS'),
(24, 'ZAGHOUAN');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id`, `region_id`, `name`) VALUES
(1, 1, 'RAOUED'),
(2, 1, 'SIDI THABET'),
(3, 1, 'ARIANA VILLE'),
(4, 1, 'LA SOUKRA'),
(5, 1, 'KALAAT LANDLOUS'),
(6, 1, 'ETTADHAMEN'),
(7, 1, 'MNIHLA'),
(8, 2, 'BEJA NORD'),
(9, 2, 'NEFZA'),
(10, 2, 'GOUBELLAT'),
(11, 2, 'MEJEZ EL BAB'),
(12, 2, 'AMDOUN'),
(13, 2, 'TEBOURSOUK'),
(14, 2, 'TESTOUR'),
(15, 2, 'THIBAR'),
(16, 2, 'BEJA SUD'),
(29, 3, 'EZZAHRA'),
(30, 3, 'MOHAMADIA'),
(31, 3, 'RADES'),
(32, 3, 'EL MOUROUJ'),
(33, 3, 'FOUCHANA'),
(34, 3, 'HAMMAM CHATT'),
(35, 3, 'HAMMAM LIF'),
(36, 3, 'MEGRINE'),
(37, 3, 'NOUVELLE MEDINA'),
(38, 3, 'MORNAG'),
(39, 3, 'BOU MHEL EL BASSATINE'),
(40, 3, 'BEN AROUS'),
(41, 4, 'MENZEL BOURGUIBA'),
(42, 4, 'UTIQUE'),
(43, 4, 'MENZEL JEMIL'),
(44, 4, 'BIZERTE NORD'),
(45, 4, 'BIZERTE SUD'),
(46, 4, 'EL ALIA'),
(47, 4, 'SEJNANE'),
(48, 4, 'GHAR EL MELH'),
(49, 4, 'GHEZALA'),
(50, 4, 'JARZOUNA'),
(51, 4, 'JOUMINE'),
(52, 4, 'MATEUR'),
(53, 4, 'RAS JEBEL'),
(54, 4, 'TINJA'),
(65, 5, 'EL METOUIA'),
(66, 5, 'GABES MEDINA'),
(67, 5, 'GABES OUEST'),
(68, 5, 'GABES SUD'),
(69, 5, 'EL HAMMA'),
(70, 5, 'NOUVELLE MATMATA'),
(71, 5, 'MARETH'),
(72, 5, 'GHANNOUCHE'),
(73, 5, 'MATMATA'),
(74, 5, 'MENZEL HABIB'),
(75, 6, 'BELKHIR'),
(76, 6, 'EL GUETTAR'),
(77, 6, 'EL KSAR'),
(78, 6, 'EL MDHILLA'),
(79, 6, 'SNED'),
(80, 6, 'MOULARES'),
(81, 6, 'REDEYEF'),
(82, 6, 'SIDI AICH'),
(83, 6, 'GAFSA SUD'),
(84, 6, 'METLAOUI'),
(85, 6, 'GAFSA NORD'),
(86, 7, 'FERNANA'),
(87, 7, 'GHARDIMAOU'),
(88, 7, 'TABARKA'),
(89, 7, 'JENDOUBA'),
(90, 7, 'JENDOUBA NORD'),
(91, 7, 'AIN DRAHAM'),
(92, 7, 'OUED MLIZ'),
(93, 7, 'BOU SALEM'),
(94, 7, 'BALTA BOU AOUENE'),
(95, 8, 'SBIKHA'),
(96, 8, 'KAIROUAN SUD'),
(97, 8, 'OUESLATIA'),
(98, 8, 'NASRALLAH'),
(99, 8, 'KAIROUAN NORD'),
(100, 8, 'EL ALA'),
(101, 8, 'HAJEB EL AYOUN'),
(102, 8, 'CHEBIKA'),
(103, 8, 'HAFFOUZ'),
(104, 8, 'CHERARDA'),
(105, 8, 'BOU HAJLA'),
(106, 9, 'HAIDRA'),
(107, 9, 'SBEITLA'),
(108, 9, 'MEJEL BEL ABBES'),
(109, 9, 'KASSERINE NORD'),
(110, 9, 'EL AYOUN'),
(111, 9, 'EZZOUHOUR'),
(112, 9, 'FERIANA'),
(113, 9, 'FOUSSANA'),
(114, 9, 'HASSI EL FRID'),
(115, 9, 'JEDILIANE'),
(116, 9, 'KASSERINE SUD'),
(117, 9, 'SBIBA'),
(118, 9, 'THALA'),
(119, 10, 'SOUK EL AHAD'),
(120, 10, 'KEBILI SUD'),
(121, 10, 'KEBILI NORD'),
(122, 10, 'DOUZ'),
(123, 10, 'EL FAOUAR'),
(124, 11, 'TAJEROUINE'),
(125, 11, 'TOUIREF'),
(126, 11, 'NEBEUR'),
(127, 11, 'SAKIET SIDI YOUSSEF'),
(128, 11, 'LE SERS'),
(129, 11, 'EL KSOUR'),
(130, 11, 'LE KEF EST'),
(131, 11, 'DAHMANI'),
(132, 11, 'KALAAT SINANE'),
(133, 11, 'JERISSA'),
(134, 11, 'KALAA EL KHASBA'),
(135, 11, 'LE KEF OUEST'),
(136, 12, 'MELLOULECH'),
(137, 12, 'SIDI ALOUENE'),
(138, 12, 'MAHDIA'),
(139, 12, 'SOUASSI'),
(140, 12, 'OULED CHAMAKH'),
(141, 12, 'BOU MERDES'),
(142, 12, 'CHORBANE'),
(143, 12, 'KSOUR ESSAF'),
(144, 12, 'HBIRA'),
(145, 12, 'LA CHEBBA'),
(146, 12, 'EL JEM'),
(147, 13, 'BORJ EL AMRI'),
(148, 13, 'JEDAIDA'),
(149, 13, 'OUED ELLIL'),
(150, 13, 'TEBOURBA'),
(151, 13, 'EL BATTAN'),
(152, 13, 'MANNOUBA'),
(153, 13, 'MORNAGUIA'),
(154, 13, 'DOUAR HICHER'),
(155, 14, 'HOUMET ESSOUK'),
(156, 14, 'MEDENINE SUD'),
(157, 14, 'BENI KHEDACHE'),
(158, 14, 'SIDI MAKHLOUF'),
(159, 14, 'MIDOUN'),
(160, 14, 'ZARZIS'),
(161, 14, 'MEDENINE NORD'),
(162, 14, 'BEN GUERDANE'),
(163, 14, 'AJIM'),
(164, 15, 'SAYADA LAMTA BOU HAJAR'),
(165, 15, 'KSIBET EL MEDIOUNI'),
(166, 15, 'KSAR HELAL'),
(167, 15, 'JEMMAL'),
(168, 15, 'SAHLINE'),
(169, 15, 'MONASTIR'),
(170, 15, 'MOKNINE'),
(171, 15, 'OUERDANINE'),
(172, 15, 'TEBOULBA'),
(173, 15, 'ZERAMDINE'),
(174, 15, 'BEKALTA'),
(175, 15, 'BEMBLA'),
(176, 15, 'BENI HASSEN'),
(177, 16, 'KORBA'),
(178, 16, 'SOLIMAN'),
(179, 16, 'TAKELSA'),
(180, 16, 'MENZEL BOUZELFA'),
(181, 16, 'MENZEL TEMIME'),
(182, 16, 'NABEUL'),
(183, 16, 'BENI KHIAR'),
(184, 16, 'BENI KHALLED'),
(185, 16, 'HAMMAMET'),
(186, 16, 'EL HAOUARIA'),
(187, 16, 'KELIBIA'),
(188, 16, 'GROMBALIA'),
(189, 16, 'EL MIDA'),
(190, 16, 'BOU ARGOUB'),
(191, 16, 'DAR CHAABANE ELFEHRI'),
(192, 16, 'HAMMAM EL GHEZAZ'),
(193, 17, 'EL HENCHA'),
(194, 17, 'ESSKHIRA'),
(195, 17, 'GHRAIBA'),
(196, 17, 'EL AMRA'),
(197, 17, 'BIR ALI BEN KHELIFA'),
(198, 17, 'AGAREB'),
(199, 17, 'SFAX VILLE'),
(200, 17, 'SAKIET EDDAIER'),
(201, 17, 'MAHRAS'),
(202, 17, 'MENZEL CHAKER'),
(203, 17, 'SFAX EST'),
(204, 17, 'SFAX SUD'),
(205, 17, 'JEBENIANA'),
(206, 17, 'KERKENAH'),
(207, 17, 'SAKIET EZZIT'),
(208, 18, 'BEN OUN'),
(209, 18, 'BIR EL HAFFEY'),
(210, 18, 'JILMA'),
(211, 18, 'CEBBALA'),
(212, 18, 'OULED HAFFOUZ'),
(213, 18, 'MEZZOUNA'),
(214, 18, 'REGUEB'),
(215, 18, 'SIDI BOUZID OUEST'),
(216, 18, 'SOUK JEDID'),
(217, 18, 'SIDI BOUZID EST'),
(218, 18, 'MAKNASSY'),
(219, 18, 'MENZEL BOUZAIENE'),
(220, 19, 'SILIANA SUD'),
(221, 19, 'SIDI BOU ROUIS'),
(222, 19, 'SILIANA NORD'),
(223, 19, 'GAAFOUR'),
(224, 19, 'KESRA'),
(225, 19, 'LE KRIB'),
(226, 19, 'BOU ARADA'),
(227, 19, 'BARGOU'),
(228, 19, 'MAKTHAR'),
(229, 19, 'ROHIA'),
(230, 19, 'EL AROUSSA'),
(231, 20, 'SIDI BOU ALI'),
(232, 20, 'SIDI EL HENI'),
(233, 20, 'SOUSSE JAOUHARA'),
(234, 20, 'SOUSSE RIADH'),
(235, 20, 'SOUSSE VILLE'),
(236, 20, 'BOU FICHA'),
(237, 20, 'AKOUDA'),
(238, 20, 'HAMMAM SOUSSE'),
(239, 20, 'KALAA ESSGHIRA'),
(240, 20, 'KONDAR'),
(241, 20, 'MSAKEN'),
(242, 20, 'ENFIDHA'),
(243, 20, 'HERGLA'),
(244, 20, 'KALAA EL KEBIRA'),
(245, 20, 'SOUSSE'),
(246, 21, 'TATAOUINE SUD'),
(247, 21, 'BIR LAHMAR'),
(248, 21, 'DHEHIBA'),
(249, 21, 'GHOMRASSEN'),
(250, 21, 'TATAOUINE NORD'),
(251, 21, 'REMADA'),
(252, 21, 'SMAR'),
(253, 22, 'DEGUECHE'),
(254, 22, 'TOZEUR'),
(255, 22, 'HEZOUA'),
(256, 22, 'NEFTA'),
(257, 22, 'TAMEGHZA'),
(258, 23, 'EL MENZAH'),
(259, 23, 'EL HRAIRIA'),
(260, 23, 'EL KABBARIA'),
(261, 23, 'EL KRAM'),
(262, 23, 'BAB SOUIKA'),
(263, 23, 'CARTHAGE'),
(264, 23, 'CITE EL KHADRA'),
(265, 23, 'BAB BHAR'),
(266, 23, 'LA MARSA'),
(267, 23, 'EZZOUHOUR'),
(268, 23, 'JEBEL JELLOUD'),
(269, 23, 'SIDI EL BECHIR'),
(270, 23, 'LA GOULETTE'),
(271, 23, 'LE BARDO'),
(272, 23, 'EL OMRANE'),
(273, 23, 'EL OMRANE SUPERIEUR'),
(274, 23, 'EL OUERDIA'),
(275, 23, 'ETTAHRIR'),
(276, 23, 'SIDI HASSINE'),
(277, 23, 'ESSIJOUMI'),
(278, 23, 'LA MEDINA'),
(279, 24, 'ENNADHOUR'),
(280, 24, 'EL FAHS'),
(281, 24, 'BIR MCHERGA'),
(282, 24, 'ZAGHOUAN'),
(283, 24, 'HAMMAM ZRIBA'),
(284, 24, 'SAOUEF');

-- --------------------------------------------------------

--
-- Structure de la table `zones`
--

CREATE TABLE `zones` (
  `id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `zones`
--

INSERT INTO `zones` (`id`, `ville_id`, `name`) VALUES
(1, 1, 'BOU HNECH'),
(2, 1, 'CITE CHAKER'),
(3, 1, 'CITE DE LA MOSQUE'),
(4, 1, 'CITE EL MOUAOUIET'),
(5, 1, 'CITE EL MOUNTAZEH'),
(6, 1, 'CITE ENNOUR JAAFAR'),
(7, 1, 'CITE ERRIADH'),
(8, 1, 'CITE ESSAADA'),
(9, 1, 'CITE SIDI SLIMENE'),
(10, 1, 'CITE SNIT'),
(11, 1, 'DOUAR EL HENDI'),
(12, 1, 'EL HESSIENE'),
(13, 1, 'OUED EL KHAYAT'),
(14, 1, 'OUED EL MAKHZEN'),
(15, 1, 'RESIDENCE EL AYECH'),
(16, 1, 'RESIDENCE EL OUNS'),
(17, 1, 'RESIDENCE ENNARJES'),
(18, 1, 'CITE CHARGUI'),
(19, 1, 'CITE DES JUGES'),
(20, 1, 'CITE EL YAMAMA'),
(21, 1, 'CITE SIDI SALAH'),
(22, 1, 'CITE ZGHAB'),
(23, 1, 'EL BRARJA'),
(24, 1, 'RAOUED'),
(25, 1, 'JAAFAR 1'),
(26, 1, 'ARIANA ESSOUGHRA'),
(27, 1, 'COMPLEXE TECHNOLOGIQUE'),
(28, 1, 'BORJ TOUIL'),
(29, 1, 'RESIDENCE ESSALEM'),
(30, 1, 'RESIDENCE RIM'),
(31, 1, 'ROUTE EZZAOUIA'),
(32, 1, 'CITE DE LA RTT 2'),
(33, 1, 'CITE EL ABADLA'),
(34, 1, 'CITE EL AMEL'),
(35, 1, 'CITE EL GHAZALA 1'),
(36, 1, 'CITE EL GHAZALA 2'),
(37, 1, 'CITE EL WAFA'),
(38, 1, 'CITE ENNASR'),
(39, 1, 'CITE ENNKHILET'),
(40, 1, 'CITE ESSAHAFA'),
(41, 1, 'CITE IBN RACHIK'),
(42, 1, 'CITE MEHRZIA 2'),
(43, 1, 'JAAFAR 2'),
(44, 1, 'CITE 7 NOVEMBRE'),
(45, 1, 'CITE AEROPORT'),
(46, 2, 'CITE DES ORANGES'),
(47, 2, 'CITE EL GOUAZINE'),
(48, 2, 'CITE EL MBARKA'),
(49, 2, 'CITE EL MREZGUA'),
(50, 2, 'CITE ESSAADA'),
(51, 2, 'CITE ETTBAIEB'),
(52, 2, 'CITE JARDINS'),
(53, 2, 'CITE MONGI SLIM'),
(54, 2, 'SIDI THABET'),
(55, 2, 'BORJ EL KHOUKHA'),
(56, 2, 'BORJ YOUSSEF'),
(57, 2, 'CEBALET BEN AMMAR'),
(58, 2, 'CHORFECH 12'),
(59, 2, 'CITE DRIDI'),
(60, 2, 'CITE EL BOKRI'),
(61, 2, 'CITE EL FRACHICH'),
(62, 2, 'CITE EL GHRIBI'),
(63, 2, 'CITE EL METHALITHE'),
(64, 2, 'CITE MESSOUDA'),
(65, 2, 'CITE OUVRIERE'),
(66, 2, 'CITE SIDI MAROUANE'),
(67, 2, 'EZZAOUIA'),
(68, 2, 'JABBES'),
(69, 2, 'JABBES EL BORJ'),
(70, 2, 'CHORFECH'),
(71, 2, 'CHORFECH 2'),
(72, 2, 'CHORFECH 24'),
(73, 2, 'CHORFECH 8'),
(74, 2, 'CITE DES AGRICULTEURS'),
(75, 2, 'BEJAOUA 2'),
(76, 2, 'CITE 18 JANVIER'),
(77, 2, 'CITE AFH'),
(78, 2, 'BORJ EL BACCOUCHE'),
(79, 2, 'CENTRE COMMERCIAL IKRAM'),
(80, 2, 'RESIDENCE ENNOUR ( NASER 2)'),
(81, 2, 'RESIDENCE ENNOUR ( NASER 1)'),
(82, 2, 'CITE ENNASR 1'),
(83, 2, 'CITE BORJ TURKI 1'),
(84, 2, 'NOUVELLE ARIANA'),
(85, 2, 'RESIDENCE ENNOUR (ARIANA)'),
(86, 2, 'CITE BELVEDERE 2'),
(87, 2, 'CITE DU SOLEIL'),
(88, 2, 'CITE EL INTISSAR 1'),
(89, 2, 'CITE EL INTISSAR 2'),
(90, 2, 'CITE JAMIL'),
(91, 2, 'EL MENZAH 5'),
(92, 2, 'EL MENZAH 6'),
(93, 2, 'CITE KARIM'),
(94, 2, 'CITE MEHRZIA 1'),
(95, 2, 'CITE BORJ TURKI 2'),
(96, 2, 'RESIDENCE EL OUNS'),
(97, 2, 'RESIDENCE IBN ZEIDOUN'),
(98, 2, 'RESIDENCE ICHBILIA'),
(99, 2, 'CITE DE LA SANTE'),
(100, 2, 'RESIDENCE KORTOBA'),
(101, 2, 'CITE ESSAADA (RIADH ANDALOUS)'),
(102, 2, 'RIADH LANDLOUS'),
(103, 2, 'ARIANA'),
(104, 2, 'CITE DES ROSES'),
(105, 2, 'CITE DU JARDIN'),
(106, 2, 'CITE DU PRINTEMPS'),
(107, 2, 'CITE ENNOUZHA'),
(108, 2, 'CITE ESSAADA (ARIANA)'),
(109, 2, 'CITE JAAFAR'),
(110, 2, 'CITE ENNASR 2'),
(111, 2, 'EL MENZAH 7'),
(112, 2, 'EL MENZAH 8');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `delegues`
--
ALTER TABLE `delegues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville_origine` (`ville_id`);

--
-- Index pour la table `delegues_laboratoires`
--
ALTER TABLE `delegues_laboratoires`
  ADD PRIMARY KEY (`delegue_id`,`laboratoire_id`),
  ADD KEY `delegue_labo` (`delegue_id`,`laboratoire_id`),
  ADD KEY `cle_etrangere_laboratoire` (`laboratoire_id`);

--
-- Index pour la table `delegues_zones`
--
ALTER TABLE `delegues_zones`
  ADD PRIMARY KEY (`delegue_id`,`zone_id`),
  ADD KEY `delegue_zone` (`delegue_id`,`zone_id`),
  ADD KEY `cle_etrangere_zone` (`zone_id`);

--
-- Index pour la table `laboratoires`
--
ALTER TABLE `laboratoires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`region_id`),
  ADD KEY `id_region_2` (`region_id`),
  ADD KEY `id_region_3` (`region_id`);

--
-- Index pour la table `zones`
--
ALTER TABLE `zones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville` (`ville_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `delegues`
--
ALTER TABLE `delegues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `laboratoires`
--
ALTER TABLE `laboratoires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;
--
-- AUTO_INCREMENT pour la table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `delegues`
--
ALTER TABLE `delegues`
  ADD CONSTRAINT `cle_etrangere_ville_origine` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`);

--
-- Contraintes pour la table `delegues_laboratoires`
--
ALTER TABLE `delegues_laboratoires`
  ADD CONSTRAINT `cle_etrangere_delegue_labo` FOREIGN KEY (`delegue_id`) REFERENCES `delegues` (`id`),
  ADD CONSTRAINT `cle_etrangere_laboratoire` FOREIGN KEY (`laboratoire_id`) REFERENCES `laboratoires` (`id`);

--
-- Contraintes pour la table `delegues_zones`
--
ALTER TABLE `delegues_zones`
  ADD CONSTRAINT `cle_etrangere_delegue` FOREIGN KEY (`delegue_id`) REFERENCES `delegues` (`id`),
  ADD CONSTRAINT `cle_etrangere_zone` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`);

--
-- Contraintes pour la table `villes`
--
ALTER TABLE `villes`
  ADD CONSTRAINT `cle_etrangere_region` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`);

--
-- Contraintes pour la table `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `cle_etrangere_ville` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
