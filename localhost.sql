-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande` (
  `num_com` int(10) NOT NULL AUTO_INCREMENT,
  `id_cond_com` int(10) NOT NULL,
  PRIMARY KEY (`num_com`),
  KEY `id_cond_com` (`id_cond_com`),
  CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_cond_com`) REFERENCES `conducteur` (`id_cond`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `commande` (`num_com`, `id_cond_com`) VALUES
(1,	1),
(3,	1),
(2,	3);

DROP TABLE IF EXISTS `conducteur`;
CREATE TABLE `conducteur` (
  `id_cond` int(10) NOT NULL AUTO_INCREMENT,
  `pnom_cond` varchar(20) NOT NULL,
  `nom_cond` varchar(20) NOT NULL,
  `adresse_cond` varchar(30) NOT NULL,
  `ville_cond` varchar(20) NOT NULL,
  `cp_cond` int(5) NOT NULL,
  `mail_cond` varchar(30) NOT NULL,
  PRIMARY KEY (`id_cond`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `conducteur` (`id_cond`, `pnom_cond`, `nom_cond`, `adresse_cond`, `ville_cond`, `cp_cond`, `mail_cond`) VALUES
(1,	'théo',	'hoareau',	'1 impasse falo',	'Saint-Joseph',	97480,	'hoareautheo974@yahoo.com'),
(2,	'max',	'lebon',	'13 rue pascal',	'Saint-Joseph',	97480,	'maxlbn@gmail.com'),
(3,	'benoit',	'bourdageau',	'45 lilas de boge',	'Saint-Joseph',	97480,	'benoit.974@gmail.com');

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id_ctc` int(10) NOT NULL AUTO_INCREMENT,
  `nom_ctc` varchar(20) NOT NULL,
  `pnom_ctc` varchar(20) NOT NULL,
  `adresse_ctc` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `msg_ctc` varchar(500) NOT NULL,
  PRIMARY KEY (`id_ctc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `contact` (`id_ctc`, `nom_ctc`, `pnom_ctc`, `adresse_ctc`, `mail`, `msg_ctc`) VALUES
(1,	'hoareau',	'theo',	'1 impasse falo',	'htc@gmail.com',	'salut la zone'),
(2,	'Lebon',	'Max',	'Vincendo',	'max-lebg@gmail.com',	'Wesh les dogos'),
(3,	'Calabrese',	'Anzo',	'La petite plaine l\'Etang Salé',	'enzoclb@gmail.com',	'Bonjour '),
(4,	'Calabrese',	'Anzo',	'La petite plaine l\'Etang Salé',	'enzoclb@gmail.com',	'Bonjour '),
(5,	'Calabrese',	'Anzo',	'La petite plaine l\'Etang Salé',	'enzoclb@gmail.com',	'Bonjour '),
(6,	'Calabrese',	'Anzo',	'La petite plaine l\'Etang Salé',	'enzoclb@gmail.com',	'Bonjour '),
(7,	'Calabrese',	'Anzo',	'La petite plaine l\'Etang Salé',	'enzoclb@gmail.com',	'Bonjour '),
(8,	'Calabrese',	'Enzo',	'La petite plaine l\'Etang Salé',	'enzoclb@gmail.com',	'Bonjour '),
(9,	'jean',	'jha',	'dha',	'de@gedz',	'geds'),
(10,	'jean',	'jha',	'dha',	'de@gedz',	'geds'),
(11,	'jean',	'jha',	'dha',	'de@gedz',	'geds'),
(12,	'patrik',	'paul',	'jbzedfd',	'de@ddz',	'bj'),
(13,	'ded',	'de',	'hbj',	'dzjnqdshnqx@djsn',	'dde'),
(14,	'bhdsqd',	'bhdeq x',	'cdhbcbd',	'nhec@de',	'denjx'),
(15,	'dedq',	'cdqsdecd',	'cdqcqs',	'deqd@dededed',	''),
(16,	'pat ',	'dedbnhfc',	'mange mange mange',	'dede@jean',	'ldeqds'),
(17,	'Ammany',	'Robert',	'50 rue des pipangayes',	'robertammany@gmail.com',	'Concaténation en force !'),
(18,	'Durantin',	'Florian',	'23 rue des patriques',	'flodur@gmail.com',	'Salut ! '),
(19,	'fontaine',	'lucas',	'56 ling ling rue des fluettes',	'fontainelucas@gmail.com',	'Salut à tous c\'est Squeezie\r\n'),
(20,	'blg',	'lgb ',	'adjedhn dnqjen (-',	'dae@gmail.com',	'bonjour bonjour'),
(21,	'Lebon',	'Maxime',	'3 rue monkaz',	'lebuenomax@gmail.com',	'Si tu lis ça t\'es trop bg'),
(22,	'hugo',	'PAYET',	'Chine',	'hugo.p1000@gmail.com',	'C\'est du sabotage industrielle.exe.lucas'),
(23,	'Poulet',	'Rachid',	'Okajima',	'zelda@gmail.com',	'Princesse Zelda X Benois'),
(24,	'Chamand',	'Dany',	'63 route de grand coude',	'daany97480@gmail.com',	'Ahhhh ouais sa mère '),
(25,	'deqdsd',	'deqdsqdsdqdq',	'dedqfdgdfgdvsvc',	'dedq@gmail.com',	'deqdsdq'),
(26,	'deqdsd',	'deqdsqdsdqdq',	'dedqfdgdfgdvsvc',	'dedq@gmail.com',	'deqdsdq'),
(27,	'deqdsd',	'deqdsqdsdqdq',	'dedqfdgdfgdvsvc',	'dedq@gmail.com',	'deqdsdq'),
(28,	'deqdsd',	'deqdsqdsdqdq',	'dedqfdgdfgdvsvc',	'dedq@gmail.com',	'deqdsdq'),
(29,	'dede',	'dedzds',	'dzqsdq',	'frfsdfqfdq@gmail.com',	'deqds'),
(30,	'Cmd',	'Dany',	'forêt grand coude',	'dany.cmd@gmail.com',	'Salut c\'est dany de la part de max '),
(31,	'',	'',	'',	'',	''),
(32,	'',	'',	'',	'',	''),
(33,	'Bourdageau',	'Benoit',	'50 rue papangue',	'benoit.bourdageau@gmail.com',	'Ceci est un test !');

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `idusr` int(11) NOT NULL AUTO_INCREMENT,
  `nomusr` varchar(100) NOT NULL,
  `emailusr` varchar(100) NOT NULL,
  `mdpusr` varchar(100) NOT NULL,
  `typeusr` varchar(10) DEFAULT 'Autre',
  `datecreausr` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idusr`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_users` (`idusr`, `nomusr`, `emailusr`, `mdpusr`, `typeusr`, `datecreausr`) VALUES
(1,	'Enzo',	'enzo@gmail.com',	'$2y$10$K8cmuhtiucr3kWtbgrHZTuE2vEvY8Cdkr12yuYwMe70Y8XlKg5wVO',	'Autre',	'2021-03-22 05:53:42'),
(2,	'Dany',	'dany@gmail.com',	'$2y$10$kVBCnLWvZOhIYzq0WJsCIe1h200L..A6izROlI6BW3xKknGeR8QQ2',	'Autre',	'2021-03-22 06:01:34'),
(3,	'benoit',	'benoit.bourdageau@gmail.com',	'$2y$10$cNaHAi.Bu8aWXayVDB1K5.b5zenpN25WCKJPHfXyupMceVIY1icPK',	'Autre',	'2021-03-23 11:59:34'),
(4,	'Jojo',	'jojo@gmail.com',	'$2y$10$YP//BoI1BhlhDcxyhxlkj.qgu8Dr6gYZ9aXclrdr/bxhIaEEgJr/u',	'Autre',	'2021-03-23 12:00:54'),
(6,	'max',	'maxdoudou@gmail.com',	'$2y$10$sJP7UXIrp/jQ9GJSLXFX2./gS4GQUSdHRTC.m3hGRa2t7uTOVZjtO',	'Autre',	'2021-03-23 12:26:48'),
(7,	'guigui',	'guigui@gmail.com',	'$2y$10$9ZPpzZMErOIgQdY.qbv1yechYT0t3oFcE0XPsKGdBYe6K0jgj8r5e',	'Admin',	'2021-03-23 12:34:25'),
(9,	'theo',	'hoareautheo97480@gmail.com',	'$2y$10$f7mRHixUaeMu6zzTPiZ2yOcXohysJ0x247onc6g7aLGw4j5IZkRg2',	'Admin',	'2021-04-06 10:51:58'),
(10,	'Enzolechobo',	'enzolechobo@chobo.com',	'$2y$10$6j1BfQRD60guDHGqefULC.I/n2qqWHOhJdU/4KLlfg/9B.KEVsp/u',	'Autre',	'2021-04-13 10:33:44'),
(11,	'proprio',	'l.maxime2727@gmail.com',	'$2y$10$iHUAXLlvw7eD3FDeYcIG2.PhgQaH3tOD6fB4Hwal4jX5uDDvPbDYC',	'Admin',	'2021-04-20 09:16:56'),
(12,	'test',	'test@gmail.com',	'$2y$10$ajkOuxztzNxd3nJ/0/xWsujl0vopgCykOX8kTngK6IVMsuyYvhs4u',	'Autre',	'2021-04-20 12:38:25'),
(13,	'roro',	'ro@titi.com',	'$2y$10$9NgV1KHLiEAhIA.ihmuxj.qcNu9bhQBjx6s9Q.H9tv8o8ftu1vPvG',	'Autre',	'2021-04-20 12:40:03'),
(14,	'amahane',	'mirome@gmail.com',	'$2y$10$XLyfuM.u2GBGiaTh7n7xiuiCIOhSRzrGZK1kQGi28oH7SK2E7TXfy',	'Autre',	'2021-04-20 12:47:53');

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE `voiture` (
  `imma_vo` varchar(20) NOT NULL,
  `chemin_vo` varchar(100) NOT NULL,
  `nom_vo` varchar(20) NOT NULL,
  `marque_vo` varchar(30) NOT NULL,
  `km_vo` int(10) NOT NULL,
  `tendance` varchar(3) NOT NULL DEFAULT 'non',
  `couleur_vo` varchar(30) NOT NULL,
  `prix_vo` int(11) NOT NULL,
  PRIMARY KEY (`imma_vo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `voiture` (`imma_vo`, `chemin_vo`, `nom_vo`, `marque_vo`, `km_vo`, `tendance`, `couleur_vo`, `prix_vo`) VALUES
(' 55-555-55',	'    ../media/images/Toyota GR Supra.jpg',	'    GR Supra',	'    Toyota',	2000,	'oui',	'VERT',	10000),
('77-777-77',	' ../media/images/Maserati MC 12.jpg',	' MC 12',	' Maserati ',	15000,	'oui',	' rouge',	30000),
('GG-GGG-GG',	'../media/images/bugatti.jpg',	'Divo',	'Bugatti',	49903,	'non',	'bleu',	15000000),
('TT-TTT-TT',	'../media/images/fiatpanda.jpg',	'Panda',	'Fiat',	10000,	'non',	'rouge',	34455),
('XX-XXX-XX',	'../media/images/lambo_hurucan.jpg',	'Hurucan',	'Lamborghini',	123,	'oui',	'bleu',	50000);

-- 2021-05-04 10:21:29
