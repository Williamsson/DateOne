-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 10 dec 2012 kl 00:29
-- Serverversion: 5.5.20
-- PHP-version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `dateone`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `ancestry`
--

CREATE TABLE IF NOT EXISTS `ancestry` (
  `key` int(3) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `ancestry`
--

INSERT INTO `ancestry` (`key`, `value`) VALUES
(1, '666'),
(2, 'europe'),
(3, 'scandinavia'),
(4, 'asia'),
(5, 'middle_east'),
(6, 'africa'),
(7, 'latin_america'),
(8, 'northern_america');

-- --------------------------------------------------------

--
-- Tabellstruktur `appearance`
--

CREATE TABLE IF NOT EXISTS `appearance` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `appearance`
--

INSERT INTO `appearance` (`key`, `value`) VALUES
(1, '666'),
(2, 'very_good_looking'),
(3, 'good_looking'),
(4, 'average'),
(5, 'bad_looking');

-- --------------------------------------------------------

--
-- Tabellstruktur `bodytype`
--

CREATE TABLE IF NOT EXISTS `bodytype` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `bodytype`
--

INSERT INTO `bodytype` (`key`, `value`) VALUES
(1, '666'),
(2, 'muscular'),
(3, 'well_built'),
(4, 'regular_body'),
(5, 'bit_fat'),
(6, 'fat');

-- --------------------------------------------------------

--
-- Tabellstruktur `civil_status`
--

CREATE TABLE IF NOT EXISTS `civil_status` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `civil_status`
--

INSERT INTO `civil_status` (`key`, `value`) VALUES
(1, '666'),
(2, 'married'),
(3, 'engaged'),
(4, 'relationship'),
(5, 'divorced'),
(6, 'single');

-- --------------------------------------------------------

--
-- Tabellstruktur `clothing`
--

CREATE TABLE IF NOT EXISTS `clothing` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `clothing`
--

INSERT INTO `clothing` (`key`, `value`) VALUES
(1, '666'),
(2, 'buissiness'),
(3, 'classy'),
(4, 'ordinary'),
(5, 'my_own_style'),
(6, 'trendy'),
(7, 'rock'),
(8, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `drinking_habits`
--

CREATE TABLE IF NOT EXISTS `drinking_habits` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `drinking_habits`
--

INSERT INTO `drinking_habits` (`key`, `value`) VALUES
(1, '666'),
(2, 'very_often'),
(3, 'often'),
(4, 'with_company'),
(5, 'almost_never'),
(6, 'never');

-- --------------------------------------------------------

--
-- Tabellstruktur `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `education`
--

INSERT INTO `education` (`key`, `value`) VALUES
(1, '666'),
(2, 'elementary_school'),
(3, 'college'),
(4, 'university'),
(5, 'bacherlor'),
(6, 'masters'),
(7, 'doctoral'),
(8, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `title` varchar(65) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `max_participants` int(11) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `notify_se1` float NOT NULL,
  `notify_se2` float NOT NULL,
  `notify_oe1` float NOT NULL,
  `notify_oe2` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `events`
--

INSERT INTO `events` (`id`, `owner`, `start_date`, `end_date`, `title`, `description`, `max_participants`, `longitude`, `latitude`, `notify_se1`, `notify_se2`, `notify_oe1`, `notify_oe2`) VALUES
(2, 3, '2012-12-09 17:31:00', '2012-12-09 23:31:00', 'Test', 'Test', 12, 60.5087, 15.6649, 60.1943, 60.8232, 16.3036, 15.0263),
(3, 3, '2012-12-09 17:31:00', '2012-12-08 12:23:00', 'Test', 'Test', 12, 59.7502, 18.6795, 59.5705, 59.9299, 19.0361, 18.3229),
(4, 3, '2012-12-09 17:39:00', '2012-12-09 22:39:00', 'Test', 'Test', 0, 60.5087, 15.6649, 60.1045, 60.913, 16.4861, 14.8438),
(5, 3, '2012-12-09 17:49:00', '2012-12-11 22:39:00', 'TestDWAD', 'TestARV', 0, 59.7759, 17.6864, 58.8775, 60.6742, 19.4712, 15.9017),
(6, 3, '2012-12-09 17:49:00', '2012-12-11 22:39:00', 'TestDWAD', 'TestARV', 0, 59.7759, 17.7304, 58.9674, 60.5843, 19.3366, 16.1241),
(7, 3, '2012-12-09 17:49:00', '2012-12-11 22:39:00', 'TestDWAD', 'TestARV', 0, 59.7485, 18.6738, 59.7036, 59.7935, 18.763, 18.5847),
(8, 3, '2012-12-09 18:15:00', '2012-12-23 00:00:00', 'Sexorgie', 'Orgies!', 0, 65.6085, 21.8832, 65.2043, 66.0127, 22.8621, 20.9043);

-- --------------------------------------------------------

--
-- Tabellstruktur `event_participants`
--

CREATE TABLE IF NOT EXISTS `event_participants` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `exercising_habits`
--

CREATE TABLE IF NOT EXISTS `exercising_habits` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `exercising_habits`
--

INSERT INTO `exercising_habits` (`key`, `value`) VALUES
(1, '666'),
(2, 'very_often'),
(3, 'often'),
(4, 'regular'),
(5, 'seldom'),
(6, 'never');

-- --------------------------------------------------------

--
-- Tabellstruktur `eye_color`
--

CREATE TABLE IF NOT EXISTS `eye_color` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `eye_color`
--

INSERT INTO `eye_color` (`key`, `value`) VALUES
(1, '666'),
(2, 'green'),
(3, 'blue'),
(4, 'brown'),
(5, 'grey'),
(6, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `favorite_music_genre`
--

CREATE TABLE IF NOT EXISTS `favorite_music_genre` (
  `key` int(3) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `favorite_music_genre`
--

INSERT INTO `favorite_music_genre` (`key`, `value`) VALUES
(1, '666'),
(2, 'rock'),
(3, 'classical'),
(4, 'electronic'),
(5, 'pop'),
(6, 'blues'),
(7, 'dance'),
(8, 'disco'),
(9, 'hip_hop'),
(10, 'country'),
(11, 'hard_rock'),
(12, 'folk'),
(13, 'opera'),
(14, 'reagge'),
(15, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `friday_night_activity`
--

CREATE TABLE IF NOT EXISTS `friday_night_activity` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `friday_night_activity`
--

INSERT INTO `friday_night_activity` (`key`, `value`) VALUES
(1, '666'),
(2, 'party'),
(3, 'after_work'),
(4, 'cinema'),
(5, 'theatre'),
(6, 'meet_friends'),
(7, 'restaurant'),
(8, 'concert'),
(9, 'read_book'),
(10, 'watch_movie'),
(11, 'cuddle'),
(12, 'play_game'),
(13, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `friend_requests`
--

CREATE TABLE IF NOT EXISTS `friend_requests` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `request_friendship_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `hair_color`
--

CREATE TABLE IF NOT EXISTS `hair_color` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `hair_color`
--

INSERT INTO `hair_color` (`key`, `value`) VALUES
(1, '666'),
(2, 'blonde'),
(3, 'brunette'),
(4, 'bald'),
(5, 'red'),
(6, 'white_grey'),
(7, 'black'),
(8, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `hobby`
--

CREATE TABLE IF NOT EXISTS `hobby` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `hobby`
--

INSERT INTO `hobby` (`key`, `value`) VALUES
(1, '666'),
(2, 'books'),
(3, 'art'),
(4, 'music'),
(5, 'meet_friends'),
(6, 'dancing'),
(7, 'animals'),
(8, 'photography'),
(9, 'history'),
(10, 'religion'),
(11, 'writing'),
(12, 'games'),
(13, 'drawing'),
(14, 'walking'),
(15, 'movies'),
(16, 'hiking'),
(17, 'cooking'),
(18, 'travel'),
(19, 'exercising'),
(20, 'cars_motorcykles'),
(21, 'computers'),
(22, 'fishing_hunting'),
(23, 'painting'),
(24, 'politics'),
(25, 'roleplaying'),
(26, 'theatre'),
(27, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `housing_type`
--

CREATE TABLE IF NOT EXISTS `housing_type` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `housing_type`
--

INSERT INTO `housing_type` (`key`, `value`) VALUES
(1, '666'),
(2, 'alone'),
(3, 'with_parents'),
(4, 'with_roommate'),
(5, 'with_children'),
(6, 'with_partner'),
(7, 'with_family'),
(8, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `length`
--

CREATE TABLE IF NOT EXISTS `length` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `length`
--

INSERT INTO `length` (`key`, `value`) VALUES
(1, '666'),
(2, '0 - 50'),
(3, '50 - 100'),
(4, '100  - 150'),
(5, '150  - 160'),
(6, '160  - 170'),
(7, '170  - 180'),
(8, '180  - 190'),
(9, '190  - 200'),
(10, '200  - 220');

-- --------------------------------------------------------

--
-- Tabellstruktur `num_childs`
--

CREATE TABLE IF NOT EXISTS `num_childs` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` int(2) DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `num_childs`
--

INSERT INTO `num_childs` (`key`, `value`) VALUES
(1, 666),
(2, 0),
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6),
(9, 7);

-- --------------------------------------------------------

--
-- Tabellstruktur `occupation`
--

CREATE TABLE IF NOT EXISTS `occupation` (
  `key` int(3) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `occupation`
--

INSERT INTO `occupation` (`key`, `value`) VALUES
(1, '666'),
(2, 'administration'),
(3, 'artist'),
(4, 'chef'),
(5, 'construction'),
(6, 'architect'),
(7, 'economy'),
(8, 'retail'),
(9, 'health_care'),
(10, 'hotel_restaurant'),
(11, 'engineer'),
(12, 'IT'),
(13, 'jurisprudence'),
(14, 'entertainment'),
(15, 'student'),
(16, 'teaching'),
(17, 'retired'),
(18, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `personality_type`
--

CREATE TABLE IF NOT EXISTS `personality_type` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `personality_type`
--

INSERT INTO `personality_type` (`key`, `value`) VALUES
(1, '666'),
(2, 'ambitious'),
(3, 'generous'),
(4, 'happy'),
(5, 'sensible'),
(6, 'calm'),
(7, 'caring'),
(8, 'social'),
(9, 'spontaneous'),
(10, 'proud'),
(11, 'adventurous'),
(12, 'carefree'),
(13, 'shy'),
(14, 'dominating'),
(15, 'alone'),
(16, 'sad'),
(17, 'stubborn'),
(18, 'emotional'),
(19, 'carefull'),
(20, 'self_contained'),
(21, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `pets`
--

INSERT INTO `pets` (`key`, `value`) VALUES
(1, '666'),
(2, 'dog'),
(3, 'cat'),
(4, 'bird'),
(5, 'fish'),
(6, 'horse'),
(7, 'reptiles'),
(8, 'rabbit_hamster'),
(9, 'other'),
(10, 'no_animal');

-- --------------------------------------------------------

--
-- Tabellstruktur `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `religion`
--

INSERT INTO `religion` (`key`, `value`) VALUES
(1, '666'),
(2, 'christian'),
(3, 'jewish'),
(4, 'islam'),
(5, 'buddhism'),
(6, 'hinduism'),
(7, 'atheist'),
(8, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `roles`
--

INSERT INTO `roles` (`id`, `description`) VALUES
(1, 'Default user'),
(2, 'Premium user'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Tabellstruktur `romance`
--

CREATE TABLE IF NOT EXISTS `romance` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `romance`
--

INSERT INTO `romance` (`key`, `value`) VALUES
(1, '666'),
(2, 'very_romantic'),
(3, 'romantic'),
(4, 'little_romantic'),
(5, 'not_romantic');

-- --------------------------------------------------------

--
-- Tabellstruktur `searching_for`
--

CREATE TABLE IF NOT EXISTS `searching_for` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `searching_for`
--

INSERT INTO `searching_for` (`key`, `value`) VALUES
(1, '666'),
(2, 'male_want_female'),
(3, 'male_want_male'),
(4, 'female_want_male'),
(5, 'female_want_female'),
(6, 'male_want_friendship'),
(7, 'female_want_friendship');

-- --------------------------------------------------------

--
-- Tabellstruktur `spoken_languages`
--

CREATE TABLE IF NOT EXISTS `spoken_languages` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `spoken_languages`
--

INSERT INTO `spoken_languages` (`key`, `value`) VALUES
(1, '666'),
(2, 'english'),
(3, 'swedish'),
(4, 'spanish'),
(5, 'german'),
(6, 'chinese'),
(7, 'norweigan'),
(8, 'finish'),
(9, 'danish'),
(10, 'french'),
(11, 'turkish'),
(12, 'other');

-- --------------------------------------------------------

--
-- Tabellstruktur `tobacco_habits`
--

CREATE TABLE IF NOT EXISTS `tobacco_habits` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `tobacco_habits`
--

INSERT INTO `tobacco_habits` (`key`, `value`) VALUES
(1, '666'),
(2, 'very_often'),
(3, 'often'),
(4, 'with_company'),
(5, 'almost_never'),
(6, 'never');

-- --------------------------------------------------------

--
-- Tabellstruktur `traits`
--

CREATE TABLE IF NOT EXISTS `traits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='"name" is responding to the table of the item, eg. "eye_colo' AUTO_INCREMENT=27 ;

--
-- Dumpning av Data i tabell `traits`
--

INSERT INTO `traits` (`id`, `value`) VALUES
(1, 'ancestry'),
(2, 'appearance'),
(3, 'bodytype'),
(4, 'civil_status'),
(5, 'clothing'),
(6, 'drinking_habits'),
(7, 'education'),
(8, 'exercising_habits'),
(9, 'eye_color'),
(10, 'favorite_music_genre'),
(11, 'friday_night_activity'),
(12, 'hair_color'),
(13, 'hobby'),
(14, 'housing_type'),
(15, 'length'),
(16, 'num_childs'),
(17, 'occupation'),
(18, 'personality_type'),
(19, 'pets'),
(20, 'religion'),
(21, 'romance'),
(22, 'searching_for'),
(23, 'spoken_languages'),
(24, 'tobacco_habits'),
(25, 'wanted_num_childs'),
(26, 'weight');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) COLLATE utf8_bin NOT NULL,
  `hashed_password` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `salt` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `first_name` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `sur_name` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `description` mediumtext COLLATE utf8_bin,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `year_of_birth` int(4) DEFAULT NULL,
  `month_of_birth` int(2) NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `postal_number` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`, `salt`, `email`, `first_name`, `sur_name`, `country`, `description`, `latitude`, `longitude`, `year_of_birth`, `month_of_birth`, `day_of_birth`, `postal_number`) VALUES
(1, 'Nordbon', '3ca7133bf03548c2676be4fe8b993d559b0a85fa', 'zYF7A2zWGgv&X/cwk(Jf^BTjPh=f&92', 'Nordbon@spray.se', 'Sven', 'Eriksson', 'Sweden', 'Ja e ut'' i skoga å hugg ve'' ja!', 17.0628, 59.665, 1973, 9, 17, 74539),
(2, 'EricaLang', 'b12173c38ebc477298d8194843c2ff6669e657ea', '7MMwFtK%LDmK_xb#NyyjYjp8-6MLRT?', 'DenialOfFate@live.ses', 'Erica', 'Lang', 'Sweden', 'Bröstaste kvinnan.', 18.6649, 59.7503, 1992, 9, 18, 76146),
(3, 'Williamsson', '64f020531c023edfb17bd366db341e558cfb2bd2', '_BvvjcQpbnG_D0)pAA/ZRHvCq%aA^2n', 'DenialOfFate@live.se', 'Simon', 'Williamsson', 'Sweden', 'Butter surkart till webbutvecklare.', 18.6649, 59.7503, 1992, 9, 26, 76146);

-- --------------------------------------------------------

--
-- Tabellstruktur `user_blockings`
--

CREATE TABLE IF NOT EXISTS `user_blockings` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `blocked_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_friends`
--

CREATE TABLE IF NOT EXISTS `user_friends` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `friend_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_gender_block`
--

CREATE TABLE IF NOT EXISTS `user_gender_block` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `block_male` tinyint(1) DEFAULT NULL,
  `block_female` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_looking_for_traits`
--

CREATE TABLE IF NOT EXISTS `user_looking_for_traits` (
  `id` int(4) DEFAULT NULL,
  `trait_id` int(11) DEFAULT NULL,
  `value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `user_looking_for_traits`
--

INSERT INTO `user_looking_for_traits` (`id`, `trait_id`, `value`) VALUES
(1, 1, 2),
(1, 2, 2),
(1, 2, 3),
(1, 3, 0),
(1, 4, 0),
(1, 5, 0),
(1, 6, 0),
(1, 7, 0),
(1, 8, 0),
(1, 9, 0),
(1, 10, 0),
(1, 11, 0),
(1, 12, 0),
(1, 13, 0),
(1, 14, 0),
(1, 15, 0),
(1, 16, 2),
(1, 16, 3),
(1, 16, 4),
(1, 16, 5),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 6),
(1, 21, 0),
(1, 22, 3),
(1, 23, 0),
(1, 24, 0),
(1, 25, 1),
(1, 26, 0),
(2, 1, 0),
(2, 2, 1),
(2, 2, 2),
(2, 3, 1),
(2, 3, 2),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 2),
(2, 7, 3),
(2, 7, 4),
(2, 7, 5),
(2, 7, 6),
(2, 8, 1),
(2, 8, 2),
(2, 8, 3),
(2, 9, 0),
(2, 10, 0),
(2, 11, 1),
(2, 11, 2),
(2, 11, 5),
(2, 12, 0),
(2, 13, 0),
(2, 14, 1),
(2, 15, 6),
(2, 15, 7),
(2, 15, 8),
(2, 16, 1),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 0),
(2, 21, 0),
(2, 22, 1),
(2, 23, 1),
(2, 23, 2),
(2, 24, 0),
(2, 25, 0),
(2, 26, 5),
(2, 26, 6),
(2, 26, 7),
(2, 26, 8),
(2, 26, 9),
(2, 26, 10),
(3, 1, 2),
(3, 2, 1),
(3, 2, 2),
(3, 2, 3),
(3, 3, 0),
(3, 4, 0),
(3, 5, 0),
(3, 6, 0),
(3, 7, 0),
(3, 8, 0),
(3, 9, 0),
(3, 10, 0),
(3, 10, 1),
(3, 10, 3),
(3, 10, 10),
(3, 11, 0),
(3, 11, 2),
(3, 11, 3),
(3, 11, 5),
(3, 11, 8),
(3, 11, 10),
(3, 11, 11),
(3, 12, 0),
(3, 13, 0),
(3, 14, 0),
(3, 15, 0),
(3, 16, 1),
(3, 17, 11),
(3, 18, 0),
(3, 19, 0),
(3, 20, 1),
(3, 20, 6),
(3, 21, 0),
(3, 22, 3),
(3, 23, 1),
(3, 23, 2),
(3, 24, 5),
(3, 25, 0),
(3, 26, 5),
(3, 26, 6),
(3, 26, 7),
(3, 26, 8);

-- --------------------------------------------------------

--
-- Tabellstruktur `user_matches`
--

CREATE TABLE IF NOT EXISTS `user_matches` (
  `user_id` int(11) DEFAULT NULL,
  `matching_user_id` int(11) DEFAULT NULL,
  `match_level` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_messages`
--

CREATE TABLE IF NOT EXISTS `user_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` tinyint(4) DEFAULT NULL,
  `receiver` tinyint(4) DEFAULT NULL,
  `title` varchar(140) COLLATE utf8_bin DEFAULT NULL,
  `content` mediumtext COLLATE utf8_bin,
  `date_sent` datetime DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumpning av Data i tabell `user_messages`
--

INSERT INTO `user_messages` (`id`, `sender`, `receiver`, `title`, `content`, `date_sent`, `is_read`) VALUES
(1, 3, 2, 'Test', 'Test', '2012-12-09 23:03:20', 1),
(2, 2, 3, 'Test', 'Test2\n\n------------------------------------------\nTest', '2012-12-09 23:06:04', 1),
(3, 3, 2, 'Test', 'Test3\n\n------------------------------------------\nTest2\n\n\n------------------------------------------\nTest', '2012-12-09 23:06:12', 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `user_settings`
--

CREATE TABLE IF NOT EXISTS `user_settings` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `email_new_event` tinyint(1) DEFAULT NULL,
  `email_new_message` tinyint(1) DEFAULT NULL,
  `email_new_friend_request` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `user_settings`
--

INSERT INTO `user_settings` (`user_id`, `email_new_event`, `email_new_message`, `email_new_friend_request`) VALUES
(1, 0, 0, 0),
(2, 0, 0, 0),
(3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `user_sex_block`
--

CREATE TABLE IF NOT EXISTS `user_sex_block` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `block_straight` tinyint(1) DEFAULT NULL,
  `block_gay_men` tinyint(4) DEFAULT NULL,
  `block_gay_women` tinyint(1) DEFAULT NULL,
  `block_gay` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_state`
--

CREATE TABLE IF NOT EXISTS `user_state` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `last_login` date DEFAULT NULL,
  `logged_in` tinyint(1) NOT NULL,
  `date_joined` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `is_premium` tinyint(1) DEFAULT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `user_state`
--

INSERT INTO `user_state` (`user_id`, `last_login`, `logged_in`, `date_joined`, `active`, `is_premium`, `role`) VALUES
(1, '2012-12-09', 0, '2012-12-09 22:14:35', 1, 0, 1),
(2, '2012-12-09', 1, '2012-12-09 22:18:49', 1, 0, 1),
(3, '2012-12-09', 1, '2012-12-09 22:24:37', 1, 0, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `user_traits`
--

CREATE TABLE IF NOT EXISTS `user_traits` (
  `user_id` int(4) NOT NULL DEFAULT '0',
  `trait_id` int(11) DEFAULT NULL,
  `value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `user_traits`
--

INSERT INTO `user_traits` (`user_id`, `trait_id`, `value`) VALUES
(1, 1, 2),
(1, 2, 3),
(1, 3, 1),
(1, 4, 4),
(1, 5, 7),
(1, 6, 2),
(1, 7, 1),
(1, 8, 3),
(1, 9, 1),
(1, 10, 1),
(1, 11, 2),
(1, 11, 5),
(1, 12, 6),
(1, 13, 0),
(1, 14, 1),
(1, 15, 7),
(1, 16, 3),
(1, 17, 17),
(1, 18, 16),
(1, 19, 1),
(1, 20, 6),
(1, 21, 4),
(1, 22, 1),
(1, 23, 2),
(1, 24, 2),
(1, 25, 1),
(1, 26, 10),
(2, 1, 2),
(2, 2, 1),
(2, 3, 2),
(2, 4, 5),
(2, 5, 5),
(2, 6, 2),
(2, 7, 1),
(2, 8, 2),
(2, 9, 2),
(2, 10, 1),
(2, 10, 3),
(2, 10, 8),
(2, 10, 14),
(2, 11, 1),
(2, 11, 2),
(2, 11, 3),
(2, 11, 5),
(2, 11, 6),
(2, 11, 7),
(2, 12, 1),
(2, 13, 4),
(2, 13, 5),
(2, 13, 26),
(2, 14, 1),
(2, 15, 5),
(2, 16, 1),
(2, 17, 0),
(2, 18, 8),
(2, 19, 4),
(2, 20, 1),
(2, 21, 3),
(2, 22, 3),
(2, 23, 1),
(2, 23, 2),
(2, 24, 3),
(2, 25, 3),
(2, 26, 5),
(3, 1, 2),
(3, 2, 2),
(3, 3, 4),
(3, 4, 5),
(3, 5, 4),
(3, 6, 3),
(3, 7, 3),
(3, 8, 5),
(3, 9, 3),
(3, 10, 1),
(3, 10, 3),
(3, 10, 10),
(3, 10, 14),
(3, 11, 2),
(3, 11, 3),
(3, 11, 5),
(3, 11, 6),
(3, 11, 8),
(3, 11, 9),
(3, 11, 10),
(3, 11, 11),
(3, 12, 1),
(3, 13, 3),
(3, 13, 4),
(3, 13, 10),
(3, 13, 11),
(3, 13, 15),
(3, 13, 20),
(3, 13, 21),
(3, 13, 24),
(3, 14, 1),
(3, 15, 7),
(3, 16, 1),
(3, 17, 11),
(3, 18, 11),
(3, 19, 9),
(3, 20, 1),
(3, 21, 3),
(3, 22, 1),
(3, 23, 1),
(3, 23, 2),
(3, 24, 5),
(3, 25, 0),
(3, 26, 11);

-- --------------------------------------------------------

--
-- Tabellstruktur `wanted_num_childs`
--

CREATE TABLE IF NOT EXISTS `wanted_num_childs` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` int(2) DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `wanted_num_childs`
--

INSERT INTO `wanted_num_childs` (`key`, `value`) VALUES
(1, 666),
(2, 0),
(3, 1),
(4, 2),
(5, 3),
(6, 4),
(7, 5),
(8, 6);

-- --------------------------------------------------------

--
-- Tabellstruktur `weight`
--

CREATE TABLE IF NOT EXISTS `weight` (
  `key` int(2) NOT NULL DEFAULT '0',
  `value` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `weight`
--

INSERT INTO `weight` (`key`, `value`) VALUES
(1, '666'),
(2, '10-20'),
(3, '20-30'),
(4, '30-40'),
(5, '40-50'),
(6, '50-60'),
(7, '60-70'),
(8, '70-80'),
(9, '80-90'),
(10, '90-100'),
(11, '100-110'),
(12, '110-120'),
(13, '120-130'),
(14, '130-150');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
