-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 03 jan. 2023 à 03:14
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jnm`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarif` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `activite`
--

INSERT INTO `activite` (`id`, `libelle`, `img`, `tarif`, `date`) VALUES
(1, 'Atelier d\'initiation à la programmation', 'test', 5, '2023-01-10');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `miage_id` int(11) NOT NULL,
  `pole_id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221113224442', '2022-11-13 22:45:31', 109),
('DoctrineMigrations\\Version20221122143538', '2022-11-22 14:38:03', 352),
('DoctrineMigrations\\Version20221122144804', '2022-11-22 14:48:31', 306),
('DoctrineMigrations\\Version20221122145737', '2022-11-22 14:58:01', 69),
('DoctrineMigrations\\Version20221122151104', '2022-11-22 15:11:34', 82),
('DoctrineMigrations\\Version20221122152340', '2022-11-22 15:23:44', 33),
('DoctrineMigrations\\Version20221122153303', '2022-11-22 15:33:06', 108),
('DoctrineMigrations\\Version20221126183448', '2022-11-26 18:35:05', 224),
('DoctrineMigrations\\Version20221129151933', '2022-11-29 15:19:44', 66),
('DoctrineMigrations\\Version20221129152249', '2022-11-29 15:23:11', 83),
('DoctrineMigrations\\Version20221129152735', '2022-11-29 15:27:42', 268),
('DoctrineMigrations\\Version20221201090711', '2022-12-01 09:07:18', 91),
('DoctrineMigrations\\Version20221205080918', '2022-12-05 08:09:26', 446),
('DoctrineMigrations\\Version20221205085726', '2022-12-05 08:57:35', 142),
('DoctrineMigrations\\Version20221205092838', '2022-12-05 09:28:47', 125),
('DoctrineMigrations\\Version20221205092919', '2022-12-05 09:29:26', 66),
('DoctrineMigrations\\Version20221205101126', '2022-12-05 10:11:38', 49),
('DoctrineMigrations\\Version20221205101855', '2022-12-05 10:19:03', 214),
('DoctrineMigrations\\Version20221205102238', '2022-12-05 10:22:45', 199),
('DoctrineMigrations\\Version20221205105759', '2022-12-05 10:58:05', 234),
('DoctrineMigrations\\Version20221206094437', '2022-12-06 09:44:43', 103),
('DoctrineMigrations\\Version20230102220615', '2023-01-02 22:06:24', 134),
('DoctrineMigrations\\Version20230102221327', '2023-01-02 22:14:03', 82);

-- --------------------------------------------------------

--
-- Structure de la table `logement`
--

CREATE TABLE `logement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localisation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` double NOT NULL,
  `tarif_groupe` double NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `logement`
--

INSERT INTO `logement` (`id`, `nom`, `description`, `localisation`, `tarif`, `tarif_groupe`, `img`, `link`) VALUES
(1, 'Appartement meublé', 'Avec Blueground, vous disposez d’un espace bien pensé, d’un mobilier tendance, d’une cuisine entièrement équipée et aménagée dans ce joli 3 pièces. Grâce à nos matelas de qualité supérieure, et notre linge de maison haut de gamme, vous bénéficierez d’un confort incomparable. Envie de vous amuser ? Profitez de nos enceintes Marshall wifi ou de nos TV connectées !', 'Auteuil', 3500, 3500, 'logement1.jpg', 'https://www.seloger.com/annonces/locations/appartement/paris-16eme-75/auteuil-sud/190542915.htm'),
(2, 'Studio meublé', 'Conçu avec soin avec des finitions sur mesure, des meubles tendances et une cuisine entièrement équipée et aménagée, vous vous sentirez vraiment chez vous dans cet appartement Blueground. Profitez d’un moment de détente dans votre salon avec nos TV connectée ou nos enceintes Marshall wifi, ou d’un peu de repos bien mérité sur nos matelas haut de gamme! Vous tomberez amoureux de cet appartement situé à Haussman - Saint Lazare.\r\n', 'Saint Lazare', 2300, 2300, NULL, 'https://www.seloger.com/annonces/locations/appartement/paris-8eme-75/parc-monceau/173511519.htm'),
(3, 'Appartement', 'T4 refait à neuf de 85m² , situé au 2eme étage sans ascenseur d\'un immeuble se trouvant à 3 min à pied Métro 9-Marcel Sembat et 15min à pied du Métro 10 Boulogne-Jean Jaurès.\r\n\r\nCet appartement se compose d\'une entrée, cuisine aménagée, une pièce principale, trois belles chambres, une salle de bains et WC séparé.', 'Boulogne-Jean Jaurès', 2300, 2300, NULL, 'https://www.seloger.com/annonces/locations/appartement/paris-8eme-75/parc-monceau/173511519.htm'),
(4, 'Appartement meublé', 'Des meubles tendances, une cuisine entièrement équipée, une TV connectée et des enceintes Marshall Wifi : voici quelques-uns des équipements que vous trouverez dans ce 2 pièces. Chaque chambre Blueground est équipée de matelas de qualité supérieure, et de linge de maison haut de gamme. Nous nous occupons de tout pour que vous puissiez démarrer votre nouvelle vie parisienne clef en main !', 'Trocadero', 3200, 3200, NULL, 'https://www.seloger.com/annonces/locations/appartement/paris-16eme-75/porte-dauphine/195581159.htm');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `miage`
--

CREATE TABLE `miage` (
  `id` int(11) NOT NULL,
  `provenance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `miage`
--

INSERT INTO `miage` (`id`, `provenance`) VALUES
(1, 'Aix-Marseille'),
(2, 'Amiens'),
(3, 'Antilles'),
(4, 'Bordeaux'),
(5, 'Grenoble'),
(6, 'Lille'),
(7, 'Lyon'),
(8, 'Mulhouse'),
(9, 'Nancy'),
(10, 'Nantes'),
(11, 'Nice'),
(12, 'Nouvelle Calédonie'),
(13, 'Orléans'),
(14, 'Paris Dauphine'),
(15, 'Paris Descartes'),
(16, 'Paris Nanterre'),
(17, 'Paris Saclay Evry'),
(18, 'Paris Saclay Orsay'),
(19, 'Paris Sorbonnes'),
(20, 'Rennes'),
(21, 'Toulouse');

-- --------------------------------------------------------

--
-- Structure de la table `pole`
--

CREATE TABLE `pole` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `logement_id` int(11) DEFAULT NULL,
  `transport_id` int(11) DEFAULT NULL,
  `activite_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sponsor`
--

INSERT INTO `sponsor` (`id`, `nom`, `img`, `email`) VALUES
(1, 'eBay', NULL, NULL),
(2, 'Vinci Construction', NULL, NULL),
(3, 'Veolia', NULL, NULL),
(4, 'Westfield', NULL, NULL),
(5, 'Engie Solutions', NULL, NULL),
(6, 'BNP Paribas', NULL, NULL),
(7, 'E.Leclerc', NULL, NULL),
(8, 'Bouygues Immobilier', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `libelle`) VALUES
(1, 'Etudiant'),
(2, 'Ancien diplômé'),
(3, 'Enseignant'),
(4, 'Directeur MIAGE'),
(5, 'Membre BDE'),
(6, 'Membre CA');

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` double NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`id`, `libelle`, `zone`, `tarif`, `img`, `type`) VALUES
(1, 'Ticket t+', '1-5', 1.9, NULL, 'unite'),
(2, 'Ticket t+ (carnet de 10)', '1-5', 16.9, NULL, 'unite'),
(3, 'Ticket t+ (carnet de 10 - tarif réduit)', '1-5', 8.45, NULL, 'unite'),
(4, 'Forfait Navigo Jour', '1-2', 7.5, NULL, 'forfait'),
(5, 'Forfait Navigo Jour', '2-3', 7.5, NULL, 'forfait'),
(6, 'Forfait Navigo Jour', '3-4', 7.5, NULL, 'forfait'),
(7, 'Forfait Navigo Jour', '4-5', 7.5, NULL, 'forfait'),
(8, 'Forfait Navigo Jour', '1-3', 10, NULL, 'forfait'),
(9, 'Forfait Navigo Jour', '2-4', 10, NULL, 'forfait'),
(10, 'Forfait Navigo Jour', '3-5', 10, NULL, 'forfait'),
(11, 'Forfait Navigo Jour', '1-4', 12.4, NULL, 'forfait'),
(12, 'Forfait Navigo Jour', '2-5', 12.4, NULL, 'forfait'),
(13, 'Forfait Navigo Jour', '1-5', 17.8, NULL, 'forfait'),
(14, 'Forfait Navigo Semaine', '1-5', 22.8, NULL, 'forfait'),
(15, 'Forfait Navigo Semaine', '2-3', 20.85, NULL, 'forfait'),
(16, 'Forfait Navigo Semaine', '3-4', 20.2, NULL, 'forfait'),
(17, 'Forfait Navigo Semaine', '4-5', 19.85, NULL, 'forfait'),
(18, 'Forfait Navigo Mois', '1-5', 75.2, NULL, 'forfait'),
(19, 'Forfait Navigo Mois', '2-3', 68.6, NULL, 'forfait'),
(20, 'Forfait Navigo Mois', '3-4', 66.8, NULL, 'forfait'),
(21, 'Forfait Navigo Mois', '4-5', 65.2, NULL, 'forfait'),
(22, 'Forfait Navigo Jeunes Week-end', '1-3', 4.1, NULL, 'forfait'),
(23, 'Forfait Navigo Jeunes Week-end', '1-5', 8.95, NULL, 'forfait'),
(24, 'Forfait Navigo Jeunes Week-end', '3-5', 5.25, NULL, 'forfait');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddn` date NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `miage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `ddn`, `tel`, `adr`, `status_id`, `miage_id`) VALUES
(2, 'hello@admin.com', '[\"ROLE_ADMIN\"]', '$2y$13$NvzQL.or8cf5/4OeX7wFAuwODfmm4QpJUjYhu7FvBudBJyv3IRMPe', 'ADMIN', 'Monica', '2012-12-05', NULL, NULL, 1, 16),
(7, 'hello@monica.com', '[\"ROLE_USER\"]', '$2y$13$3kkM/CylCkJ/g8ThIlYGJOX5qQdyX2yiDc6bZbDWL8PqRc3rKMdRC', 'Sen', 'Monica', '2017-07-26', NULL, NULL, 1, 16);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4C62E6384DA00F84` (`miage_id`),
  ADD KEY `IDX_4C62E638419C3385` (`pole_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `logement`
--
ALTER TABLE `logement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `miage`
--
ALTER TABLE `miage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pole`
--
ALTER TABLE `pole`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_42C8495558ABF955` (`logement_id`),
  ADD KEY `IDX_42C849559909C13F` (`transport_id`),
  ADD KEY `IDX_42C849559B0F88B1` (`activite_id`),
  ADD KEY `IDX_42C84955A76ED395` (`user_id`);

--
-- Index pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D6496BF700BD` (`status_id`),
  ADD KEY `IDX_8D93D6494DA00F84` (`miage_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `logement`
--
ALTER TABLE `logement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `miage`
--
ALTER TABLE `miage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `pole`
--
ALTER TABLE `pole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `FK_4C62E638419C3385` FOREIGN KEY (`pole_id`) REFERENCES `pole` (`id`),
  ADD CONSTRAINT `FK_4C62E6384DA00F84` FOREIGN KEY (`miage_id`) REFERENCES `miage` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_42C8495558ABF955` FOREIGN KEY (`logement_id`) REFERENCES `logement` (`id`),
  ADD CONSTRAINT `FK_42C849559909C13F` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`id`),
  ADD CONSTRAINT `FK_42C849559B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`),
  ADD CONSTRAINT `FK_42C84955A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D6494DA00F84` FOREIGN KEY (`miage_id`) REFERENCES `miage` (`id`),
  ADD CONSTRAINT `FK_8D93D6496BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
