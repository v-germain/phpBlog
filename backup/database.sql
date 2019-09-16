-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 13 Septembre 2019 à 15:19
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `project4`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `reported` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`, `reported`) VALUES
(1, 1, 'Terrence Suarez', 'blablablabla', '2019-09-03 11:13:49', 0),
(2, 1, 'Arnie Watkins', 'blablablabla', '2019-09-03 14:09:43', 0),
(3, 1, 'Gail Andrade', 'blablablabla', '2019-09-04 06:37:05', 0),
(4, 2, 'Kodi Nairn', 'blablablabla', '2019-09-05 13:34:15', 1),
(5, 2, 'Kyle Wagstaff', 'blablablabla', '2019-09-05 20:49:46', 0),
(6, 3, 'Abbie Denton', 'blablablabla', '2019-09-06 23:38:15', 0),
(7, 3, 'Sianna Humphrey', 'blablablabla', '2019-09-08 01:05:29', 0),
(8, 4, 'Edgar Holland', 'blablablabla', '2019-09-08 14:10:24', 0),
(9, 4, 'Xander Dawson', 'blablablabla', '2019-09-07 14:54:32', 1),
(10, 4, 'Rumaysa Wilder', 'blablablabla', '2019-09-08 19:53:54', 0),
(11, 4, 'Frank Burks', 'blablablabla', '2019-09-06 10:23:13', 0),
(12, 5, 'Carson Hayden', 'blablablabla', '2019-09-09 02:01:46', 0),
(13, 5, 'Ayub Hardy', 'blablablabla', '2019-09-10 15:59:29', 0),
(14, 5, 'Tom Shields', 'blablablabla', '2019-09-10 19:00:49', 1),
(15, 2, 'Ivo Mendez', 'blablablabla', '2019-09-11 12:02:18', 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Préface', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce mollis neque a risus maximus, gravida malesuada dolor gravida. Etiam euismod aliquet quam sit amet vehicula. Duis aliquam mattis bibendum. In neque velit, fringilla quis bibendum et, tempor ac diam. Maecenas imperdiet nulla tempus velit laoreet, luctus dignissim orci pellentesque. Nulla vel velit et arcu cursus tincidunt vitae sit amet ligula. Maecenas sit amet tempus arcu. ', '2019-09-01 15:10:15'),
(2, 'Chapitre 1', ' Donec ultricies lacinia tortor tempus rhoncus. Aliquam feugiat sollicitudin dui, ac viverra elit rhoncus placerat. Morbi convallis sapien egestas leo consectetur, a posuere erat ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam velit felis, dapibus id hendrerit quis, luctus quis purus. Morbi sit amet diam vel dui lobortis placerat sit amet eu ligula. Nunc faucibus porttitor leo id ornare. Sed tincidunt sit amet magna at suscipit. Nam bibendum pretium nibh non mollis. Etiam finibus risus feugiat sem scelerisque scelerisque. Nullam vel posuere nulla. Pellentesque et nulla risus. Praesent blandit rutrum ipsum, vel commodo quam euismod et. Nam nec nulla eget nisl accumsan tristique sed luctus tortor. Proin et tellus quam. Aliquam ut venenatis purus. ', '2019-09-01 17:10:28'),
(3, 'Chapitre 2', ' Sed sit amet scelerisque augue, non fringilla metus. In vitae augue sapien. Etiam id nunc id nisi aliquam rutrum eget vel erat. Quisque molestie, lectus vel pulvinar sollicitudin, purus ligula rhoncus odio, sit amet pretium sapien velit vitae ante. Vivamus dictum turpis in augue ullamcorper laoreet. Pellentesque consectetur sagittis nibh et varius. Donec sit amet odio pulvinar, dignissim justo quis, pretium ante. Nunc tristique nisl vulputate dui tincidunt gravida at in orci. Nam vel viverra ex. Sed tortor massa, sollicitudin bibendum ultricies ac, malesuada in orci. Nunc purus quam, mattis nec tellus a, mollis fringilla turpis. ', '2019-09-02 18:43:01'),
(4, 'Chapitre 3', ' Vivamus fringilla et dolor sit amet fermentum. Vestibulum sodales erat lorem, vel consectetur ex pharetra a. Donec vel dui nec eros convallis finibus a vel turpis. Aliquam imperdiet erat nec nulla laoreet, non interdum tellus placerat. Maecenas feugiat dui in ante varius ultricies. Etiam tincidunt facilisis tortor vitae tincidunt. Nunc sagittis, nulla eu pulvinar tempus, velit nisi blandit ex, at cursus tortor metus ut erat. Quisque pretium sapien vitae venenatis hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent rhoncus mattis porttitor. ', '2019-09-04 09:55:11'),
(5, 'Chapitre 4', ' In et interdum turpis. Morbi vehicula enim vitae gravida interdum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sit amet egestas quam. Donec lacus quam, rhoncus eget convallis vitae, consequat eget odio. Donec rutrum sollicitudin sapien id maximus. Vivamus scelerisque arcu velit, in tempor odio accumsan eu. Nulla sed gravida nisi, non ullamcorper sem. ', '2019-09-06 17:23:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
