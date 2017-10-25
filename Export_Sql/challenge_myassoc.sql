-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 25 oct. 2017 à 14:36
-- Version du serveur :  10.1.24-MariaDB
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `challenge_myassoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `id_acteur` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id_acteur`, `nom`, `prenom`) VALUES
(1, 'DiCaprio', 'Leonardo'),
(2, 'Smith', 'Will'),
(3, 'Statham', 'Jason'),
(4, 'Sy', 'Omar'),
(5, 'Depp', 'Johnny'),
(6, 'Pitt', 'Brad'),
(7, 'Cruise', 'Tom'),
(8, 'Eastwood', 'Clint'),
(9, 'Hanks', 'Tom'),
(10, 'Affleck', 'Ben');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id_film` int(11) NOT NULL,
  `titre` varchar(30) NOT NULL,
  `annee` int(4) NOT NULL,
  `realisateur` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `id_acteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_film`, `titre`, `annee`, `realisateur`, `genre`, `id_acteur`) VALUES
(1, 'The Revenant', 2015, 'Alejandro González I', 'Aventure', 1),
(2, 'Le Loup de Wall Street', 2013, 'Martin Scorsese', 'Drame', 1),
(3, 'Inception', 2010, 'Christopher Nolan', 'Thriller', 1),
(4, 'À la recherche du bonheur', 2006, 'Gabriele Muccino', 'Comedie dramatique', 2),
(5, 'JE SUIS UNE LÉGENDE', 2007, 'Francis Lawrence', 'Science fiction', 2),
(6, 'HANCOCK', 2008, 'Peter Berg', 'Action', 2),
(7, 'LE TRANSPORTEUR', 2002, 'Corey Yuen', 'Action', 3),
(8, 'EXPENDABLES : UNITÉ SPÉCIALE', 2010, 'Sylvester Stallone', 'Action', 3),
(9, 'HOMEFRONT', 2014, 'Gary Fleder', 'Action', 3),
(10, 'CHOCOLAT', 2016, 'Roschdy Zem', 'Drame', 4),
(11, 'SAMBA', 2014, 'Olivier Nakache', 'Drame', 4),
(12, 'INTOUCHABLES', 2011, 'Olivier Nakache', 'Comedie', 4),
(13, 'PUBLIC ENEMIES', 2009, 'Michael Mann', 'Policier', 5),
(14, 'LAS VEGAS PARANO', 1998, 'Terry Gilliam', 'Comedie', 5),
(15, 'EDWARD AUX MAINS DARGENT', 1991, 'Tim Burton', 'Comedie', 5),
(16, 'PIRATES DES CARAÏBES', 2003, 'Gore Verbinski', 'Action', 5),
(17, 'WORLD WAR Z', 2013, 'Marc Forster', 'Science fiction', 6),
(18, 'INGLOURIOUS BASTERDS', 2009, 'Quentin Tarantino', 'Guerre', 6),
(19, 'FIGHT CLUB\r\n', 1999, 'David Fincher', 'Thriller', 6),
(20, 'SEVEN', 1996, 'David Fincher', 'Thriller', 6),
(21, 'OBLIVION', 2013, 'Joseph Kosinski', 'Action', 7),
(22, 'WALKYRIE', 2009, 'Bryan Singeri', 'Drame', 7),
(23, 'MINORITY REPORT', 2002, 'Steven Spielberg', 'Science fiction', 7),
(24, 'GRAN TORINO', 2009, 'Clint Eastwood', 'Drame', 8),
(25, 'MILLION DOLLAR BABY', 2005, 'Clint Eastwood', 'Drame', 8),
(26, 'IMPITOYABLE', 1992, 'Clint Eastwood', 'Drame', 8),
(27, 'LE BON, LA BRUTE ET LE TRUAND', 1968, 'Sergio Leone', 'Western', 8),
(28, 'LE PONT DES ESPIONS', 2015, 'Steven Spielberg', 'Thriller', 9),
(29, 'ARRÊTE-MOI SI TU PEUX', 2003, 'Steven Spielberg', 'Drame', 9),
(30, 'SEUL AU MONDE', 2001, 'Robert Zemeckis', 'Aventure', 9),
(31, 'FORREST GUMP', 1994, 'Robert Zemeckis', 'Comedie dramatique', 9),
(32, 'GONE GIRL', 2014, 'David Fincher', 'Thriller', 10),
(33, 'ARGO', 2012, 'Ben Affleck', 'Thriller', 10),
(34, 'MR WOLFF', 2016, 'Gavin OConnor', 'Thriller', 10);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created`, `modified`) VALUES
(8, 'test@test.fr', '$2y$10$Vjf5F1vbVa43RGj4LYmL6uRaDpPMa018wYz.eh4T0tpzz36l9gIqG', 'user', '2017-10-23 12:54:32', '2017-10-23 12:59:45');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`id_acteur`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_acteur` (`id_acteur`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `id_acteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`id_acteur`) REFERENCES `acteurs` (`id_acteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
