-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 15 avr. 2019 à 03:39
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
-- Base de données :  `passworddev`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `image` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `FName`, `LName`, `image`, `status`) VALUES
(30, 'camille.paoletti74@gmail.com', 'acc5c877e1ec3feef9f71d3c1919aa0b9df4a12d3f7152eadbf95e98e46457ca', 'Camille', 'Paoletti', 'images/image_profil.png', 'admin'),
(37, 'c@caa.c', 'acc5c877e1ec3feef9f71d3c1919aa0b9df4a12d3f7152eadbf95e98e46457ca', 'cou', 'cou', 'image_profil.png', 'user'),
(38, 'ben@ben.ben', '785cd40b8a84d9d5c4b88503f6ad7cc752abd4a9a75acc48422802f7ca3a292d', 'ben', 'ben', 'image_profil.png', 'user'),
(43, 'youyou@you.you', '80a8de5fff3dfba6247f560d00c58188fcc6a16701c2d04fb9ebac05f2cd5d37', 'you', 'youyou', 'image_profil.png', 'user'),
(47, 'matron@matron.com', '6c29f7b17a10adc45a8c1caa57bd4445b861a9715dd7f624a68a2c7cbc520aa3', 'matron', 'matron LName', 'image_profil.png', 'user'),
(49, 'admin@admin.admin', '024b80bc7e32fc8911d1f3a560885dcf1ea9e76b387c6f4edbf2fd78c26299eb', 'Name A', 'LName A', 'image_profil.png', 'admin'),
(50, 'user@user.user', '858281f5942858775432c81ba85c0daac517e67420abdc6c3e5ed2da933629d2', 'Name User', 'LName User', 'image_profil.png', 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
