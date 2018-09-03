-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 03 Septembre 2018 à 18:45
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `oc_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `statut` int(11) NOT NULL DEFAULT '1',
  `post_id` int(11) DEFAULT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `statut`, `post_id`, `date_comment`, `author`) VALUES
(97, 'Après plusieurs petits boulots dans des agences de graphisme à Paris, il intègre le studio de Laurence Madrelle dans lequel il mettra en pratique sa formation, apprendra à travailler en équipe et à se servir d''un ordinateur, passant alors au stade professionnel.', 2, 16, '2018-08-28 17:00:31', 'admin'),
(98, 'C''est en décryptant ces affiches, qui cherchaient des codes afin de tromper la censure, que Michal Batory trouve sa vocation d''affichiste.\r\nEn 1993 il remporte le concours de la Cité des Sciences et de l''industrie de la Villette pour réaliser la scénographie de l''exposition « Le Fil d''argent » qui lui coûtera six mois de travail.', 2, 16, '2018-08-28 17:01:49', 'admin'),
(99, 'Un message avec peu de texte', 2, 18, '2018-08-28 17:04:32', 'admin'),
(100, 'Un message avec beaucoup de texte, Renzo Piano, l''architecte du Centre Georges Pompidou, est au sommet de son art lorsqu''il décide en 1990 de se lancer dans cette aventure inhabituelle, risquée et attirante : construire loin de son univers culturel, en Océanie. Renzo Piano se rend sur les lieux, s''associe avec l''anthropologue Alban Bensa qui le guide sur "le chemin Kanak" et remporte le concours. Le Centre Culturel Tjibaou est le fruit d''une longue réflexion politique, architecturale et ethnologique.', 2, 18, '2018-08-28 17:04:55', 'admin'),
(101, 'Le Centre Jean-Marie Tjibaou de Nouméa (Nouvelle-Calédonie, 1997), que l''on peut assimiler à un musée bien que ses affectations soient plus larges, est une exception dans ce parcours. Le contexte historique, politique et paysager l''imposait. Il s''agissait de rendre hommage à la culture kanak et de préserver le site naturel. Le musée est donc conçu comme un village traditionnel avec une série de maisons à la silhouette caractéristique, alignées le long d''un chemin-galerie. Les coques respectent l''échelle de la végétation environnante. Par son rapport avec le paysage et le choix des matériaux, ce musée est devenu une icône de l''architecture verte. Au-delà de l''aspect extérieur, ce caractère écologique tient aussi à son système de climatisation naturelle obtenu grâce à la forme de chacune des coques.', 2, 18, '2018-08-28 17:54:03', 'admin'),
(102, 'Un message avec peu de texte pour un teste', 2, 18, '2018-08-29 18:15:12', 'admin'),
(105, 'plume', 2, 18, '2018-08-29 19:14:22', 'admin'),
(108, 'une deuxieme message teste', 2, 17, '2018-08-31 18:33:07', 'admin'),
(109, 'message test', 1, 17, '2018-09-01 18:16:14', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `intro` text,
  `content` longtext,
  `date_post` datetime DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `intro`, `content`, `date_post`, `author`, `image`) VALUES
(8, 'Akira', 'Le 16 juillet 1988, Tokyo est détruit.', 'Trente-et-un ans plus tard, après la Troisième Guerre mondiale, en 2019, Neo-Tokyo est une mégalopole corrompue et sillonnée par des bandes de jeunes motards désœuvrés et drogués. Une nuit, l''un d''eux, Tetsuo, a un accident en essayant d''éviter ce qui semble être d''abord un jeune garçon mais qui a un visage de vieillard. Il est capturé par l''armée et fait l''objet de nombreux tests dans le cadre d''un projet militaire secret visant à repérer et à former des êtres possédant des prédispositions à des pouvoirs psychiques (télépathie, téléportation, télékinésie…).\n\nTetsuo finit par s''enfuir. Mais lorsque ses amis, dont leur chef Kaneda, le découvrent, il est devenu violent et imprévisible.\n\nEn parallèle, se nouent des intrigues politiques. Dans la rue et dans les alcôves du pouvoir, le nom d''Akira circule. Sauveur messianique pour certains groupes religieux, il est de toute évidence lié au projet militaire auquel Tetsuo a été mêlé malgré lui. L''armée essaye par tous les moyens de continuer le projet en espérant percer le secret de la puissance d''Akira et de la maîtriser pour s''en servir par la suite. De leur côté, les politiques ne voient pas l''intérêt de continuer à allouer du budget à un projet de plus de trente ans qui n''a jamais rien rapporté. Enfin, un mouvement révolutionnaire veut renverser le pouvoir en utilisant le phénomène Akira à des fins politiques.\n\nTetsuo gagne peu à peu en puissance, et lorsqu''il apprend qu''Akira aurait un pouvoir plus grand que lui et qu''il pourrait être responsable de ses maux de tête, il décide d''aller le trouver. Il passe sans difficulté les barrages mis en place par l''armée pour l''en empêcher, et finit par découvrir Akira, un ensemble d''organes disparates disposés dans différents tubes transparents.\n\nHors du laboratoire, Tetsuo n''a plus accès aux médicaments qui lui permettent de contrôler son pouvoir. Il est dépassé par son pouvoir, et finit par disparaître avec Akira et les autres sujets d''expériences. Les dégâts infligés à la ville à la suite de cette disparition sont considérables : inondations, immeubles écroulés…', '2018-08-06 17:24:13', 'admin', 'public/img/akira.jpg'),
(15, 'Saul Bass', 'The man with the golden arm', 'Saul Bass naît dans le Bronx, à New York, en 1920. Il montre très tôt des prédispositions pour le dessin et à 15 ans prend des cours de peinture au « Art Students League » de Manhattan avant d''atteindre l''âge requis pour poursuivre ses études au « Brooklyn College ». C''est à cette époque que sous l''impulsion de son professeur György Kepes, il découvre le Bauhaus et le constructivisme russe et s''initie à l''esthétique moderniste. Après plusieurs stages dans des studios de design de Manhattan, Bass commence comme graphiste publicitaire freelance. Il déménage pour Los Angeles en 1946, à la recherche de plus de liberté dans son travail et ouvre son propre studio, « Saul Bass and associates », en 1950.', '2018-08-28 14:54:24', 'admin', 'public/img/saul.png'),
(16, 'Michal Batory', 'L’affiche comme territoire d’expression', 'Après l''école primaire, il réussit le concours pour entrer au lycée d''art où il suit une formation artistique sur cinq années. En 1979, après avoir obtenu le Baccalauréat, il passe le concours de l''École nationale des Arts plastiques de Lodz où il fut pris du premier coup malgré la difficulté de l''épreuve.\n\nPendant trois ans, il suit une formation de tronc commun à laquelle s’enchaînent deux années de spécialisation pendant lesquelles il choisit la spécialité graphisme. Pendant sa jeunesse, il est profondément marqué par les affiches dans la rue, qui pour lui étaient les seules tâches de couleurs qui égayaient les rues. C''est en décryptant ces affiches, qui cherchaient des codes afin de tromper la censure, que Michal Batory trouve sa vocation d''affichiste.\n\nIl reçoit en 1986, après toutes ses années d''études, son diplôme de graphisme sur un projet d''affiches pour le festival de jazz de Varsovie. Grâce à son diplôme, il obtient une bourse du Ministère de la Culture et de l’Art pour les jeunes artistes qui lui permet de partir pour la France et de s''installer à Paris en septembre 1987.\n\nAprès plusieurs petits boulots dans des agences de graphisme à Paris, il intègre le studio de Laurence Madrelle dans lequel il mettra en pratique sa formation, apprendra à travailler en équipe et à se servir d''un ordinateur, passant alors au stade professionnel. En 1993 il remporte le concours de la Cité des Sciences et de l''industrie de la Villette pour réaliser la scénographie de l''exposition « Le Fil d''argent » qui lui coûtera six mois de travail. Ce projet lui ouvre les portes du Théâtre national de la Colline notamment en faisant la connaissance du directeur du théâtre. En 1998, le théâtre se sépare de son directeur et de son affichiste, c''est alors que Michal Batory travaille pour l''IRCAM et l''EIC pour lesquels il concevra des journaux, le magazine Résonance et des pochettes de disques. Un énorme travail l''attend, ainsi que beaucoup d''affiches où il va pouvoir affirmer son style et sa personnalité.', '2018-08-28 15:16:53', 'admin', 'public/img/batory.jpg'),
(17, 'Les Simpson', 'Une famille pas comme les autres', 'Les Simpson sont une série télévisée d''animation américaine1 créée par Matt Groening et diffusée depuis le 17 décembre 1989 sur le réseau Fox.\n\nElle met en scène les Simpson, stéréotype d''une famille de classe moyenne américaine. Leurs aventures servent une satire du mode de vie américain. Les membres de la famille, sont Homer, Marge, Bart, Lisa et Maggie.\n\nDepuis ses débuts, la série a récolté des dizaines de récompenses, dont trente-et-un Primetime Emmy Awards, trente Annie Awards et un Peabody Award. Le Time Magazine du 31 décembre 1999 l''a par ailleurs désignée comme la meilleure série télévisée du 20eme siècle et elle a obtenu une étoile sur le Walk of Fame d''Hollywood le 14 janvier 2000. « D''oh! », l''expression d''abattement d''Homer Simpson, est entrée dans la langue anglaise. Ce n''est pas le seul mot à être entré dans le dictionnaire anglais, "embiggen" (engrandi en français) est un mot inventé par les Simpson qui est aussi entré dans la langue anglaise. L''influence des Simpson s''exerce également sur d''autres sitcoms.\n\nEn 2007, Les Simpson, le film, un long métrage basé sur la série, est sorti au cinéma et a recueilli 527 millions de dollars américains en recettes brutes.', '2018-08-28 15:34:09', 'admin', 'public/img/simpson.png'),
(18, 'Renzo Piano', 'Hommage à la culture kanak', 'Renzo Piano, l''architecte du Centre Georges Pompidou, est au sommet de son art lorsqu''il décide en 1990 de se lancer dans cette aventure inhabituelle, risquée et attirante : construire loin de son univers culturel, en Océanie. Renzo Piano se rend sur les lieux, s''associe avec l''anthropologue Alban Bensa qui le guide sur "le chemin Kanak" et remporte le concours. Le Centre Culturel Tjibaou est le fruit d''une longue réflexion politique, architecturale et ethnologique.\r\n\r\nLe Centre Jean-Marie Tjibaou de Nouméa (Nouvelle-Calédonie, 1997), que l''on peut assimiler à un musée bien que ses affectations soient plus larges, est une exception dans ce parcours. Le contexte historique, politique et paysager l''imposait. Il s''agissait de rendre hommage à la culture kanak et de préserver le site naturel. Le musée est donc conçu comme un village traditionnel avec une série de maisons à la silhouette caractéristique, alignées le long d''un chemin-galerie. Les coques respectent l''échelle de la végétation environnante. Par son rapport avec le paysage et le choix des matériaux, ce musée est devenu une icône de l''architecture verte. Au-delà de l''aspect extérieur, ce caractère écologique tient aussi à son système de climatisation naturelle obtenu grâce à la forme de chacune des coques.', '2018-08-28 15:48:24', 'admin', 'public/img/renzo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `statut`) VALUES
(21, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
