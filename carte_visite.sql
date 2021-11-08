-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 08 nov. 2021 à 19:00
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
-- Base de données :  `carte_visite`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company` varchar(25) NOT NULL,
  `tel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `company`, `tel`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', 'az', '', 0),
(9, 'mo', 'm@gmail.com', '12', '', 0),
(10, 'lfl', 'ldld@gmail.com', '202cb962ac59075b964b07152d234b70', '', 25636),
(11, 'ayoub', 'ayoub@gmail.cm', '25ae1b3ee9c85bbfa4da149f286b20f2', '', 25969412),
(12, 'cccc', 'mama@gmail.com', '202cb962ac59075b964b07152d234b70', '', 11233),
(13, 'hshsh', 'a@gmail.com', '4124bc0a9335c27f086f24ba207a4912', '', 12522115),
(14, 'b', 'b@gmail.com', '92eb5ffee6ae2fec3ad71c777531578f', '', 2521565),
(15, 'n', 'n@gmail.com', '7b8b965ad4bca0e41ab51de7b31363a1', '', 113228522),
(16, 'q', 'q@gmail.com', '7694f4a66316e53c8cdd9d9954bd611d', 'ferari', 1252),
(17, 'l', 'l@gmail.com', '2db95e8e1a9267b7a1188556b2013b33', 'jdjdjdj', 2125522),
(18, 'uuu', 'uuu@gmail.com', 'c70fd4260c9eb90bc0ba9d047c068eb8', 'jsjsjsjjsjsjsjsj', 22521546),
(19, 'ggghh', 'g@gmail.com', 'b2f5ff47436671b6e533d8dc3614845d', 'jsjsj', 112251);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
