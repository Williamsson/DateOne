-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 28 nov 2012 kl 15:13
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
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `ancestry`
--

INSERT INTO `ancestry` (`key`, `value`) VALUES
(1, 'europe'),
(2, 'scandinavia'),
(3, 'asia'),
(4, 'middle_east'),
(5, 'africa'),
(6, 'latin_america'),
(7, 'northern_america');

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
(1, 'very_good_looking'),
(2, 'good_looking'),
(3, 'average'),
(4, 'bad_looking');

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
(1, 'muscular'),
(2, 'well_built'),
(3, 'regular_body'),
(4, 'bit_fat'),
(5, 'fat');

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
(1, 'married'),
(2, 'engaged'),
(3, 'relationship'),
(4, 'divorced'),
(5, 'single');

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
(1, 'buissiness'),
(2, 'classy'),
(3, 'ordinary'),
(4, 'my_own_style'),
(5, 'trendy'),
(6, 'rock'),
(7, 'other');

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
(1, 'very_often'),
(2, 'often'),
(3, 'with_company'),
(4, 'almost_never'),
(5, 'never');

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
(1, 'elementary_school'),
(2, 'college'),
(3, 'university'),
(4, 'bacherlor'),
(5, 'masters'),
(6, 'doctoral'),
(7, 'other');

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
(1, 'very_often'),
(2, 'often'),
(3, 'regular'),
(4, 'seldom'),
(5, 'never');

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
(1, 'green'),
(2, 'blue'),
(3, 'brown'),
(4, 'grey'),
(5, 'other');

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
(1, 'rock'),
(2, 'classical'),
(3, 'electronic'),
(4, 'pop'),
(5, 'blues'),
(6, 'dance'),
(7, 'disco'),
(8, 'hip_hop'),
(9, 'country'),
(10, 'hard_rock'),
(11, 'folk'),
(12, 'opera'),
(13, 'reagge'),
(14, 'other');

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
(1, 'party'),
(2, 'after_work'),
(3, 'cinema'),
(4, 'theatre'),
(5, 'meet_friends'),
(6, 'restaurant'),
(7, 'concert'),
(8, 'read_book'),
(9, 'watch_movie'),
(10, 'cuddle'),
(11, 'play_game'),
(12, 'other');

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
(1, 'blonde'),
(2, 'brunette'),
(3, 'bald'),
(4, 'red'),
(5, 'white_grey'),
(6, 'black'),
(7, 'other');

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
(1, 'books'),
(2, 'art'),
(3, 'music'),
(4, 'meet_friends'),
(5, 'dancing'),
(6, 'animals'),
(7, 'photography'),
(8, 'history'),
(9, 'religion'),
(10, 'writing'),
(11, 'games'),
(12, 'drawing'),
(13, 'walking'),
(14, 'movies'),
(15, 'hiking'),
(16, 'cooking'),
(17, 'travel'),
(18, 'exercising'),
(19, 'cars_motorcykles'),
(20, 'computers'),
(21, 'fishing_hunting'),
(22, 'painting'),
(23, 'politics'),
(24, 'roleplaying'),
(25, 'theatre'),
(26, 'other');

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
(1, 'alone'),
(2, 'with_parents'),
(3, 'with_roommate'),
(4, 'with_children'),
(5, 'with_partner'),
(6, 'with_family'),
(7, 'other');

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
(1, '0 - 50'),
(2, '50 - 100'),
(3, '100  - 150'),
(4, '150  - 160'),
(5, '160  - 170'),
(6, '170  - 180'),
(7, '180  - 190'),
(8, '190  - 200'),
(9, '200  - 220');

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
(1, 0),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6),
(8, 7);

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
(1, 'administration'),
(2, 'artist'),
(3, 'chef'),
(4, 'construction'),
(5, 'architect'),
(6, 'economy'),
(7, 'retail'),
(8, 'health_care'),
(9, 'hotel_restaurant'),
(10, 'engineer'),
(11, 'IT'),
(12, 'jurisprudence'),
(13, 'entertainment'),
(14, 'student'),
(15, 'teaching'),
(16, 'retired'),
(17, 'other');

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
(1, 'ambitious'),
(2, 'generous'),
(3, 'happy'),
(4, 'sensible'),
(5, 'calm'),
(6, 'caring'),
(7, 'social'),
(8, 'spontaneous'),
(9, 'proud'),
(10, 'adventurous'),
(11, 'carefree'),
(12, 'shy'),
(13, 'dominating'),
(14, 'alone'),
(15, 'sad'),
(16, 'stubborn'),
(17, 'emotional'),
(18, 'carefull'),
(19, 'self_contained'),
(20, 'other');

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
(1, 'dog'),
(2, 'cat'),
(3, 'bird'),
(4, 'fish'),
(5, 'horse'),
(6, 'reptiles'),
(7, 'rabbit_hamster'),
(8, 'other'),
(9, 'no_animal');

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
(1, 'christian'),
(2, 'jewish'),
(3, 'islam'),
(4, 'buddhism'),
(5, 'hinduism'),
(6, 'atheist'),
(7, 'other');

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
(1, 'very_romantic'),
(2, 'romantic'),
(3, 'little_romantic'),
(4, 'not_romantic');

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
(1, 'male_want_female'),
(2, 'male_want_male'),
(3, 'female_want_male'),
(4, 'female_want_female'),
(5, 'male_want_friendship'),
(6, 'female_want_friendship');

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
(1, 'english'),
(2, 'swedish'),
(3, 'spanish'),
(4, 'german'),
(5, 'chinese'),
(6, 'norweigan'),
(7, 'finish'),
(8, 'danish'),
(9, 'french'),
(10, 'turkish'),
(11, 'other');

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
(1, 'very_often'),
(2, 'often'),
(3, 'with_company'),
(4, 'almost_never'),
(5, 'never');

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
(17, 'num_childs'),
(18, 'occupation'),
(19, 'personality_type'),
(20, 'pets'),
(21, 'religion'),
(22, 'romance'),
(23, 'searching_for'),
(24, 'spoken_languages'),
(25, 'tobacco_habits'),
(26, 'wanted_num_childs'),
(27, 'weight');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `hashed_password`, `salt`, `email`, `first_name`, `sur_name`, `country`, `description`, `latitude`, `longitude`, `year_of_birth`, `month_of_birth`, `day_of_birth`) VALUES
(1, 'Williamsson', 'ba4cd4a86a4696e6b9471ea6169ee79693eca7f8', 'XT4HvH0t6vA%P3_g?T_CQ4=b9^Z9C)J', 'DenialOfFate@live.se', NULL, NULL, 'sweden', NULL, '18.6649446', '59.7503028', 2012, 1, 1),
(2, 'Administrator', '8065479b4e29e44067e27f4b956b7d0b9a97b99e', '=%?/49!r)8!*Vx&t8-Vh61m1F)@dC/8', 'DenialOfFate2@live.se', NULL, NULL, 'sweden', NULL, '18.6649446', '59.7503028', 2012, 1, 1);

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
(1, 0, 0, 0),
(2, 0, 0, 0);

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
(1, '2012-11-28', 1, '2012-11-27 14:46:25', 1, 0, 1),
(2, '2012-11-27', 0, '2012-11-27 14:49:30', 1, 0, 1);

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
(1, 1, 0),
(1, 2, 0),
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
(1, 16, 0),
(1, 17, 0),
(1, 18, 0),
(1, 19, 0),
(1, 20, 0),
(1, 21, 0),
(1, 22, 0),
(1, 23, 1),
(1, 24, 0),
(1, 25, 0),
(1, 26, 0),
(2, 1, 0),
(2, 2, 0),
(2, 3, 0),
(2, 4, 0),
(2, 5, 0),
(2, 6, 0),
(2, 7, 0),
(2, 8, 0),
(2, 9, 0),
(2, 10, 0),
(2, 11, 0),
(2, 12, 0),
(2, 13, 0),
(2, 14, 0),
(2, 15, 0),
(2, 16, 0),
(2, 17, 0),
(2, 18, 0),
(2, 19, 0),
(2, 20, 0),
(2, 21, 0),
(2, 22, 0),
(2, 23, 1),
(2, 24, 0),
(2, 25, 0),
(2, 26, 0),
(2, 27, 0),
(1, 27, 2);

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
(1, 0),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5),
(7, 6);

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
(1, '10-20'),
(2, '20-30'),
(3, '30-40'),
(4, '40-50'),
(5, '50-60'),
(6, '60-70'),
(7, '70-80'),
(8, '80-90'),
(9, '90-100'),
(10, '100-110'),
(11, '110-120'),
(12, '120-130'),
(13, '130-150');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
