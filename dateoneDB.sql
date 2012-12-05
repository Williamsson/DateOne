-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 05 dec 2012 kl 23:02
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `title` varchar(65) COLLATE utf8_bin NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL,
  `max_participants` int(11) NOT NULL,
  `longitude` int(11) NOT NULL,
  `latitude` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
-- Tabellstruktur `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` tinyint(4) DEFAULT NULL,
  `receiver` tinyint(4) DEFAULT NULL,
  `title` varchar(140) COLLATE utf8_bin DEFAULT NULL,
  `content` mediumtext COLLATE utf8_bin,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
(1, 'no_answer'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='"name" is responding to the table of the item, eg. "eye_colo' AUTO_INCREMENT=28 ;

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
  `latitude` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `longitude` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `year_of_birth` int(4) DEFAULT NULL,
  `month_of_birth` int(2) NOT NULL,
  `day_of_birth` int(2) NOT NULL,
  `postal_number` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`, `salt`, `email`, `first_name`, `sur_name`, `country`, `description`, `latitude`, `longitude`, `year_of_birth`, `month_of_birth`, `day_of_birth`, `postal_number`) VALUES
(1, 'Williamsson', 'ab22c8ee4ab2f5ea4b39bdf25122a3e1bd211885', '1j!*Z4M/qC//ByAcmf6(p(7?4P#(T/h', 'DenialOfFate@live.se', '', '', 'Sweden', '', '18.6649446', '59.7503028', 2012, 1, 1, 76146);

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
-- Tabellstruktur `user_events`
--

CREATE TABLE IF NOT EXISTS `user_events` (
  `user_id` tinyint(4) NOT NULL DEFAULT '0',
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
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
(1, 0, 0, 0);

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
(1, '2012-12-05', 1, '2012-12-05 23:57:24', 1, 0, 1);

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
(1, 2, 2),
(1, 3, 4),
(1, 4, 5),
(1, 5, 4),
(1, 6, 3),
(1, 7, 2),
(1, 8, 5),
(1, 9, 3),
(1, 10, 1),
(1, 10, 10),
(1, 10, 14),
(1, 11, 5),
(1, 11, 8),
(1, 11, 10),
(1, 11, 11),
(1, 12, 1),
(1, 13, 1),
(1, 13, 3),
(1, 13, 4),
(1, 13, 8),
(1, 13, 10),
(1, 13, 11),
(1, 13, 15),
(1, 13, 20),
(1, 13, 21),
(1, 13, 24),
(1, 14, 1),
(1, 15, 7),
(1, 16, 0),
(1, 17, 11),
(1, 18, 11),
(1, 19, 9),
(1, 20, 1),
(1, 21, 3),
(1, 22, 1),
(1, 23, 1),
(1, 23, 2),
(1, 24, 5),
(1, 25, 0),
(1, 26, 11);

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
(1, 'no_answer'),
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
