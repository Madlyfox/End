-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 12 Septembre 2019 à 11:51
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Espace-Menbre`
--

-- --------------------------------------------------------

--
-- Structure de la table `Dislikes`
--

CREATE TABLE `Dislikes` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Feed`
--

CREATE TABLE `Feed` (
  `id` int(255) NOT NULL,
  `id_utilisateur` int(255) NOT NULL,
  `vote` int(255) DEFAULT NULL,
  `commentaires` varchar(255) DEFAULT NULL,
  `dateHeureCreation` datetime NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Feed`
--

INSERT INTO `Feed` (`id`, `id_utilisateur`, `vote`, `commentaires`, `dateHeureCreation`, `contenu`, `nom_utilisateur`) VALUES
(1, 1, 0, NULL, '2019-08-27 14:23:47', 'sdfsdfsdfsdf', ''),
(2, 1, 0, NULL, '2019-08-27 14:54:46', 'adzdazdsqdsdqsdqsdqsdqsdqsd', ''),
(3, 1, 0, NULL, '2019-08-27 14:55:01', 'test', ''),
(4, 1, 0, NULL, '2019-08-27 14:56:25', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(5, 1, 0, NULL, '2019-08-27 15:06:16', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(6, 1, 0, NULL, '2019-08-27 15:06:22', 'bhnij,k', ''),
(7, 1, 0, NULL, '2019-08-27 15:06:49', 'bhnij,k', ''),
(8, 1, 0, NULL, '2019-08-27 15:06:54', 'ibihbhb', ''),
(9, 1, 0, NULL, '2019-08-27 15:15:34', 'kjhgfdcvbjuygtfc', ''),
(10, 1, 0, NULL, '2019-08-27 15:16:10', 'kjhgfdcvbjuygtfc', ''),
(11, 1, 0, NULL, '2019-08-27 15:16:15', 'fefefefefefefe', ''),
(12, 1, 0, NULL, '2019-08-27 15:21:13', 'fefefefefefefe', ''),
(13, 1, 0, NULL, '2019-08-27 15:21:19', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(14, 1, 0, NULL, '2019-08-27 15:33:42', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(15, 1, 0, NULL, '2019-08-27 15:37:51', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(16, 1, 0, NULL, '2019-08-27 15:38:05', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(17, 1, 0, NULL, '2019-08-27 15:39:19', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(18, 1, 0, NULL, '2019-08-27 15:39:53', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(19, 1, 0, NULL, '2019-08-27 15:40:23', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(20, 1, 0, NULL, '2019-08-27 15:44:12', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(21, 1, 0, NULL, '2019-08-27 15:44:57', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(22, 1, 0, NULL, '2019-08-27 15:45:15', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(23, 1, 0, NULL, '2019-08-27 15:46:52', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(24, 1, 0, NULL, '2019-08-27 15:47:10', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(25, 1, 0, NULL, '2019-08-27 15:48:37', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(26, 1, 0, NULL, '2019-08-27 15:53:24', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(27, 1, 0, NULL, '2019-08-27 15:53:30', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(28, 1, 0, NULL, '2019-08-27 15:54:06', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(29, 1, 0, NULL, '2019-08-27 15:55:33', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(30, 1, 0, NULL, '2019-08-27 15:55:50', 'sdfsdfsdfsdfsdfsdfsfsd', ''),
(31, 1, 0, NULL, '2019-08-27 15:56:00', 'efzfdsfsdf', ''),
(32, 1, 0, NULL, '2019-08-27 15:56:04', 'efzfdsfsdf', ''),
(33, 1, 0, NULL, '2019-08-27 15:57:29', 'efzfdsfsdf', ''),
(34, 1, 0, NULL, '2019-08-27 15:57:44', 'efzfdsfsdf', ''),
(35, 1, 0, NULL, '2019-08-27 15:57:59', 'TEst', ''),
(36, 1, 0, NULL, '2019-08-27 15:58:02', 'TEst', ''),
(37, 1, 0, NULL, '2019-08-27 15:58:12', 'TEst', ''),
(38, 1, 0, NULL, '2019-08-27 15:58:16', 'TEst', ''),
(39, 1, 0, NULL, '2019-08-27 16:01:06', 'TEst', ''),
(40, 1, 0, NULL, '2019-08-27 16:01:41', 'TEst', ''),
(41, 1, 0, NULL, '2019-08-27 16:03:15', 'TEst', ''),
(42, 1, 0, NULL, '2019-08-27 16:11:44', 'TEst', ''),
(43, 1, 0, NULL, '2019-08-27 16:11:54', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore doloribus, repudiandae tempora nam soluta quaerat blanditiis quo nemo! Fugiat ad, quisquam qui eaque dolores corrupti in quod ipsam accusantium id. ', ''),
(44, 1, 0, NULL, '2019-08-27 16:45:47', 'lfxdgkdfngd', ''),
(45, 1, 0, NULL, '2019-08-28 09:29:34', 'efzedfsdfsdf', ''),
(46, 1, 0, NULL, '2019-08-28 09:30:25', 'efzedfsdfsdf', ''),
(47, 1, 0, NULL, '2019-08-28 09:30:40', 'chuppa chuppa', ''),
(48, 1, 0, NULL, '2019-08-28 09:54:07', 'qsdqsdqsd', 'Borromée'),
(49, 1, 0, NULL, '2019-08-28 09:57:13', 'qsdqsdqsd', 'Stanley Borromée'),
(50, 5, 0, NULL, '2019-08-28 09:59:42', 'Voila du contenue ', 'Aida Brutel'),
(51, 1, 0, NULL, '2019-08-28 16:43:27', 'gvhbgx', 'Stanley Borromée'),
(52, 1, 0, NULL, '2019-09-04 16:25:57', 'sdfsdfsdfsfsdfsdf', 'Stanley Borromée'),
(53, 1, 0, NULL, '2019-09-04 16:27:43', 'sdfsdfsdfsfsdfsdf', 'Stanley Borromée'),
(54, 1, 0, NULL, '2019-09-04 16:27:48', 'fezfefe', 'Stanley Borromée'),
(55, 1, 0, NULL, '2019-09-04 16:31:12', 'fezfefe', 'Stanley Borromée'),
(56, 1, 0, NULL, '2019-09-04 16:31:19', 'fezfefe', 'Stanley Borromée'),
(57, 1, 0, NULL, '2019-09-04 17:26:48', 'fezfefe', 'Stanley Borromée'),
(58, 1, 0, NULL, '2019-09-04 17:30:08', 'fezfefe', 'Stanley Borromée'),
(59, 1, 0, NULL, '2019-09-04 17:30:20', 'maddd', 'Stanley Borromée'),
(60, 1, 0, NULL, '2019-09-04 17:31:15', 'maddd', 'Stanley Borromée'),
(61, 1, 0, NULL, '2019-09-04 17:31:19', 'fgdfgd', 'Stanley Borromée'),
(62, 1, 0, NULL, '2019-09-04 17:33:58', 'fszdhfosidjfoisf', 'Stanley Borromée'),
(63, 1, 0, NULL, '2019-09-04 17:35:42', 'fszdhfosidjfoisf', 'Stanley Borromée'),
(64, 1, 0, NULL, '2019-09-05 10:43:19', 'zssss', 'Stanley Borromée'),
(65, 1, 0, NULL, '2019-09-05 10:43:24', 'sdfsdfsd', 'Stanley Borromée'),
(66, 1, 0, NULL, '2019-09-05 10:44:41', 'sdfsdfsd', 'Stanley Borromée'),
(67, 1, 0, NULL, '2019-09-05 10:47:41', 'sdfsdfsd', 'Stanley Borromée'),
(68, 1, 0, NULL, '2019-09-05 10:48:41', 'sdfsdfsd', 'Stanley Borromée'),
(69, 1, 0, NULL, '2019-09-05 10:49:46', 'sdfsdfsd', 'Stanley Borromée'),
(70, 1, 0, NULL, '2019-09-05 10:51:38', 'sdfsdfsd', 'Stanley Borromée'),
(71, 1, 0, NULL, '2019-09-05 10:52:00', 'sdfsdfsd', 'Stanley Borromée'),
(72, 1, 0, NULL, '2019-09-05 10:52:08', 'sdfsdfsd', 'Stanley Borromée'),
(73, 1, 0, NULL, '2019-09-05 10:53:19', 'sdfsdfsd', 'Stanley Borromée'),
(74, 1, 0, NULL, '2019-09-05 10:54:03', 'sdfsdfsd', 'Stanley Borromée'),
(75, 1, 0, NULL, '2019-09-05 10:54:10', 'sdfsdfsd', 'Stanley Borromée'),
(76, 1, 0, NULL, '2019-09-05 10:54:39', 'sdfsdfsd', 'Stanley Borromée'),
(77, 1, 0, NULL, '2019-09-05 10:54:43', 'sdfsdfsd', 'Stanley Borromée'),
(78, 1, 0, NULL, '2019-09-05 10:56:08', 'sdfsdfsd', 'Stanley Borromée'),
(79, 1, 0, NULL, '2019-09-05 10:59:23', 'sdfsdfsd', 'Stanley Borromée'),
(80, 1, 0, NULL, '2019-09-05 11:00:16', 'sdfsdfsd', 'Stanley Borromée'),
(81, 1, 0, NULL, '2019-09-05 11:00:21', 'sdfsdfsd', 'Stanley Borromée'),
(82, 1, 0, NULL, '2019-09-05 11:01:13', 'sdfsdfsd', 'Stanley Borromée'),
(83, 1, 0, NULL, '2019-09-05 11:01:30', 'sdfsdfsd', 'Stanley Borromée'),
(84, 1, 0, NULL, '2019-09-05 11:02:12', 'sdfsdfsd', 'Stanley Borromée'),
(85, 1, 0, NULL, '2019-09-05 11:03:26', 'sdfsdfsd', 'Stanley Borromée'),
(86, 1, 0, NULL, '2019-09-05 11:03:42', 'sdfsdfsd', 'Stanley Borromée'),
(87, 1, 0, NULL, '2019-09-05 11:03:50', 'sdfsdfsd', 'Stanley Borromée'),
(88, 1, 0, NULL, '2019-09-05 11:04:26', 'sdfsdfsd', 'Stanley Borromée'),
(89, 1, 0, NULL, '2019-09-05 11:04:47', 'sdfsdfsd', 'Stanley Borromée'),
(90, 1, 0, NULL, '2019-09-05 11:04:53', 'sdfsdfsd', 'Stanley Borromée'),
(91, 1, 0, NULL, '2019-09-05 11:05:03', 'sdfsdfsd', 'Stanley Borromée'),
(92, 1, 0, NULL, '2019-09-05 11:06:27', 'sdfsdfsd', 'Stanley Borromée'),
(93, 1, 0, NULL, '2019-09-05 11:06:30', 'sqdqsdqsd', 'Stanley Borromée'),
(94, 1, 0, NULL, '2019-09-05 11:11:41', 'dddddd', 'Stanley Borromée'),
(95, 1, 0, NULL, '2019-09-05 11:11:55', 'Enfin un site qui fonctionne !', 'Stanley Borromée'),
(96, 1, 0, NULL, '2019-09-05 11:12:19', 'Enfin un site qui fonctionne !', 'Stanley Borromée'),
(97, 7, 0, NULL, '2019-09-05 11:19:07', 'Benny est passé par là', 'Ben-ami Maignan'),
(98, 7, 0, NULL, '2019-09-05 11:23:35', 'Benny est passé par là', 'Ben-ami Maignan'),
(99, 7, 0, NULL, '2019-09-05 11:24:09', 'Benny est passé par là', 'Ben-ami Maignan'),
(100, 7, 0, NULL, '2019-09-05 11:25:30', 'Benny est passé par là', 'Ben-ami Maignan'),
(101, 7, 0, NULL, '2019-09-05 11:25:47', 'Benny est passé par là', 'Ben-ami Maignan'),
(102, 7, 0, NULL, '2019-09-05 11:27:15', 'Benny est passé par là', 'Ben-ami Maignan'),
(103, 7, 0, NULL, '2019-09-05 11:27:39', 'Benny est passé par là', 'Ben-ami Maignan'),
(104, 1, 0, NULL, '2019-09-09 15:19:13', 'Salut tout le monde, ceci est un test du fil d\'actu', 'Stanley Borromée'),
(105, 1, 0, NULL, '2019-09-09 15:28:43', 'Salut tout le monde, ceci est un test du fil d\'actu', 'Stanley Borromée'),
(106, 1, 0, NULL, '2019-09-10 18:51:42', 'j\'ai mangé des boulettes ce midi', 'Stanley Borromée'),
(107, 1, 0, NULL, '2019-09-11 14:16:48', 'La vie est belle\r\n', 'Stanley Borromée'),
(108, 1, 0, NULL, '2019-09-11 14:21:06', 'La vie est belle\r\n', 'Stanley Borromée');

-- --------------------------------------------------------

--
-- Structure de la table `Likes`
--

CREATE TABLE `Likes` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Membres`
--

CREATE TABLE `Membres` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateDeNaissance` date NOT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `exp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Membres`
--

INSERT INTO `Membres` (`id`, `nom`, `prenom`, `dateDeNaissance`, `genre`, `mail`, `motDePasse`, `status`, `avatar`, `bio`, `exp`) VALUES
(1, 'Borromée', 'Stanley', '1997-10-14', 'NaN', 'madwhiterabbit@live.fr', '7fa7c80d8a9561138a6a8e9f0ce989eca202d0ef', 'Etudiant', '1.jpeg', 'Lorem ipsum', 1800),
(5, 'Brutel', 'Aida', '1997-10-14', NULL, 'truc@live.fr', '7344b1e00be27c40c2ca0bdcb048b228cfa4e6d2', NULL, '1.jpg', NULL, 0),
(6, 'Brutel', 'Aida', '1997-10-14', NULL, 'super@live.fr', '7344b1e00be27c40c2ca0bdcb048b228cfa4e6d2', NULL, '1.jpg', NULL, 0),
(7, 'Maignan', 'Ben-ami', '2019-09-21', NULL, 'maignan@outlook.com', '7fa7c80d8a9561138a6a8e9f0ce989eca202d0ef', NULL, '1.jpg', NULL, 0),
(8, 'jon', 'doe', '2019-09-20', NULL, 'test@gmail.com', '08e02d827446f7fe647672cbc95dab2c71f3d0ee', NULL, '1.jpg', NULL, 0),
(9, 'Van Dam', 'Jean-Claude', '2019-09-06', NULL, 'JCVD@gmail.com', '$2y$10$3pnfxULs/QRvf5GL1dg/X.RYclPF1lAhcxzLfvLy9uhk4VCXU.HmK', NULL, '1.jpg', NULL, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Dislikes`
--
ALTER TABLE `Dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Feed`
--
ALTER TABLE `Feed`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Membres`
--
ALTER TABLE `Membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Dislikes`
--
ALTER TABLE `Dislikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Feed`
--
ALTER TABLE `Feed`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT pour la table `Membres`
--
ALTER TABLE `Membres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
