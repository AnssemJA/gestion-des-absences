-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 10 fév. 2020 à 14:14
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_employe`
--

-- --------------------------------------------------------

--
-- Structure de la table `authen`
--

CREATE TABLE `authen` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `authen`
--

INSERT INTO `authen` (`id`, `login`, `password`) VALUES
(1, 'anssem789@gmail.com', 'anssem');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `date_naissance` date NOT NULL,
  `telephone` int(11) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `poste` varchar(60) NOT NULL,
  `type_contrat` varchar(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `duree_contrat` int(11) NOT NULL,
  `passeport` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `date_naissance`, `telephone`, `mail`, `poste`, `type_contrat`, `date_debut`, `date_fin`, `duree_contrat`, `passeport`) VALUES
(1, 'gharech', 'islem', '1999-04-17', 28446727, 'islem7@gmail.com', 'ingenieur', 'cdi', '2020-01-09', '2021-02-05', 1, 'non'),
(2, 'belaam', 'kawther', '1999-04-17', 21346565, 'kawther12@gmail.com', 'ingenieur', 'cvb', '2020-01-08', '2025-01-08', 5, 'non'),
(3, 'jaafer', 'ghada', '2003-04-14', 54561207, 'ghada2003@gmail.com', 'technicienne', 'cdi', '2020-01-08', '2025-01-20', 5, 'oui'),
(4, 'jaafer', 'anssem', '1999-01-24', 23283318, 'anssem789@gmail.com', 'ingenieur', 'cvb', '2020-01-08', '2025-01-08', 5, 'oui'),
(5, 'bedoui', 'majda', '2000-04-17', 2134656, 'majda123@gmail.com', 'ingenieur', 'cvb', '2020-01-08', '2025-01-08', 5, 'oui'),
(6, 'boughanmi', 'yoser', '1998-03-05', 22331221, 'yosr6.gmail.com', 'ingenieur', 'cdi', '2020-01-08', '2025-01-08', 5, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `gestion_absence`
--

CREATE TABLE `gestion_absence` (
  `id_emp` int(11) NOT NULL,
  `date` date NOT NULL,
  `motif_absence` varchar(60) NOT NULL,
  `absence_justifie` varchar(10) NOT NULL,
  `absence_prevue` varchar(10) NOT NULL,
  `duree` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `etat_absence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `gestion_absence`
--

INSERT INTO `gestion_absence` (`id_emp`, `date`, `motif_absence`, `absence_justifie`, `absence_prevue`, `duree`, `id`, `etat_absence`) VALUES
(1, '2020-01-05', 'inconnu', 'non', 'non', '5j', 13, 1),
(5, '2020-02-11', 'maladie', 'oui', 'oui', '5j', 14, 1),
(6, '2020-02-07', 'inconnu', 'non', 'non', '2j', 15, 1),
(2, '2020-01-16', 'maladie', 'oui', 'oui', '7j', 16, 1),
(1, '2020-01-09', 'maladie', 'oui', 'oui', '3j', 17, 1),
(3, '2020-01-18', 'inconnu', 'non', 'non', '5j', 18, 1),
(1, '2020-01-11', 'inconnu', 'non', 'non', '2j', 19, 0),
(6, '2020-02-20', 'malade', 'oui', 'oui', '3j', 20, 0),
(6, '2020-01-11', 'inconnu', 'non', 'non', '1j', 21, 0),
(1, '2020-02-14', 'maladie', 'oui', 'oui', '2', 22, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `authen`
--
ALTER TABLE `authen`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `gestion_absence`
--
ALTER TABLE `gestion_absence`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idemploye` (`id_emp`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `authen`
--
ALTER TABLE `authen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `gestion_absence`
--
ALTER TABLE `gestion_absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `gestion_absence`
--
ALTER TABLE `gestion_absence`
  ADD CONSTRAINT `idemploye` FOREIGN KEY (`id_emp`) REFERENCES `employe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
