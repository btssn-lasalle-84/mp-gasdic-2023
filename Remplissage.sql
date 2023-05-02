-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 02 mai 2023 à 15:35
-- Version du serveur :  8.0.32-0ubuntu0.20.04.2
-- Version de PHP : 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Remplissage`
--

-- --------------------------------------------------------

--
-- Structure de la table `Batiment`
--

CREATE TABLE `Batiment` (
  `id` int NOT NULL,
  `Nom_Bat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Poubelle`
--

CREATE TABLE `Poubelle` (
  `id` int NOT NULL,
  `type_déchets` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `taux_remplissage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Poubelle`
--

INSERT INTO `Poubelle` (`id`, `type_déchets`, `taux_remplissage`) VALUES
(1, 'Ordures ménagères', 20),
(2, 'Papier/Carton', 81),
(3, 'Plastique', 9),
(4, 'Verre', 44);

-- --------------------------------------------------------

--
-- Structure de la table `Requete`
--

CREATE TABLE `Requete` (
  `ville` text NOT NULL,
  `code_postal` text NOT NULL,
  `adresse` text NOT NULL,
  `NomBat` text NOT NULL,
  `email` text NOT NULL,
  `prblm` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Requete`
--

INSERT INTO `Requete` (`ville`, `code_postal`, `adresse`, `NomBat`, `email`, `prblm`) VALUES
('$ville', '$codepostal', '$adresse', '$nomBat', '$email', '$infoSup'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Batiment`
--
ALTER TABLE `Batiment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Poubelle`
--
ALTER TABLE `Poubelle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Batiment`
--
ALTER TABLE `Batiment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
