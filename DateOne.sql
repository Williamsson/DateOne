-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 19 okt 2012 kl 19:58
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
  `value` int(3) NOT NULL DEFAULT '0',
  `ancestry` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `ancestry`
--

INSERT INTO `ancestry` (`value`, `ancestry`) VALUES
(1, 'Europe'),
(2, 'Scandinavia'),
(3, 'Asia'),
(4, 'Middle East'),
(5, 'Africa'),
(6, 'Latin America'),
(7, 'Northern America');

-- --------------------------------------------------------

--
-- Tabellstruktur `appearance`
--

CREATE TABLE IF NOT EXISTS `appearance` (
  `value` int(2) NOT NULL DEFAULT '0',
  `appearance` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `appearance`
--

INSERT INTO `appearance` (`value`, `appearance`) VALUES
(1, 'Very good looking'),
(2, 'Good looking'),
(3, 'Average'),
(4, 'Bad looking');

-- --------------------------------------------------------

--
-- Tabellstruktur `bodytype`
--

CREATE TABLE IF NOT EXISTS `bodytype` (
  `value` int(2) NOT NULL DEFAULT '0',
  `bodytype` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `bodytype`
--

INSERT INTO `bodytype` (`value`, `bodytype`) VALUES
(1, 'Muscular'),
(2, 'Well built'),
(3, 'Regular'),
(4, 'A bit fat'),
(5, 'Fat');

-- --------------------------------------------------------

--
-- Tabellstruktur `civil_status`
--

CREATE TABLE IF NOT EXISTS `civil_status` (
  `value` int(2) NOT NULL DEFAULT '0',
  `status` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `civil_status`
--

INSERT INTO `civil_status` (`value`, `status`) VALUES
(1, 'Married'),
(2, 'Engaged'),
(3, 'Relationship'),
(4, 'Divorced'),
(5, 'Single');

-- --------------------------------------------------------

--
-- Tabellstruktur `clothing`
--

CREATE TABLE IF NOT EXISTS `clothing` (
  `value` int(2) NOT NULL DEFAULT '0',
  `clothing` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `clothing`
--

INSERT INTO `clothing` (`value`, `clothing`) VALUES
(1, 'Buissiness'),
(2, 'Classy'),
(3, 'Ordinary'),
(4, 'My own style'),
(5, 'Trendy'),
(6, 'Rock'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Tabellstruktur `drinking_habits`
--

CREATE TABLE IF NOT EXISTS `drinking_habits` (
  `value` int(2) NOT NULL DEFAULT '0',
  `habit` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `drinking_habits`
--

INSERT INTO `drinking_habits` (`value`, `habit`) VALUES
(1, 'Very often'),
(2, 'Often'),
(3, 'With company'),
(4, 'Almost never'),
(5, 'Never');

-- --------------------------------------------------------

--
-- Tabellstruktur `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `value` int(2) NOT NULL DEFAULT '0',
  `education` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `education`
--

INSERT INTO `education` (`value`, `education`) VALUES
(1, 'Elementary school'),
(2, 'College'),
(3, 'University'),
(4, 'Bacherlor'),
(5, 'Masters'),
(6, 'Doctoral'),
(7, 'Other');

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
  `value` int(2) NOT NULL DEFAULT '0',
  `habit` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `exercising_habits`
--

INSERT INTO `exercising_habits` (`value`, `habit`) VALUES
(1, 'Very often'),
(2, 'Often'),
(3, 'Regular'),
(4, 'Seldom'),
(5, 'Never');

-- --------------------------------------------------------

--
-- Tabellstruktur `eye_color`
--

CREATE TABLE IF NOT EXISTS `eye_color` (
  `value` int(2) NOT NULL DEFAULT '0',
  `eye_color` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `eye_color`
--

INSERT INTO `eye_color` (`value`, `eye_color`) VALUES
(1, 'Green'),
(2, 'Blue'),
(3, 'Brown'),
(4, 'Grå'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Tabellstruktur `favorite_music_genre`
--

CREATE TABLE IF NOT EXISTS `favorite_music_genre` (
  `value` int(3) NOT NULL DEFAULT '0',
  `genre` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `favorite_music_genre`
--

INSERT INTO `favorite_music_genre` (`value`, `genre`) VALUES
(1, 'Rock'),
(2, 'Classical'),
(3, 'Electronic'),
(4, 'Pop'),
(5, 'Blues'),
(6, 'Dance'),
(7, 'Disco'),
(8, 'Hip-Hop'),
(9, 'Country'),
(10, 'Hardrock'),
(11, 'Folk'),
(12, 'Opera'),
(13, 'Musical'),
(14, 'Reagge'),
(15, 'Other');

-- --------------------------------------------------------

--
-- Tabellstruktur `friday_night_activity`
--

CREATE TABLE IF NOT EXISTS `friday_night_activity` (
  `value` int(2) NOT NULL DEFAULT '0',
  `activity` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `friday_night_activity`
--

INSERT INTO `friday_night_activity` (`value`, `activity`) VALUES
(1, 'Party'),
(2, 'After work'),
(3, 'Cinema'),
(4, 'Theatre'),
(5, 'Meet friends'),
(6, 'Restaurant'),
(7, 'Concert'),
(8, 'Book'),
(9, 'Movie'),
(10, 'Cuddle'),
(11, 'Game'),
(12, 'Other');

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
  `value` int(2) NOT NULL DEFAULT '0',
  `color` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `hair_color`
--

INSERT INTO `hair_color` (`value`, `color`) VALUES
(1, 'Blonde'),
(2, 'Brunette'),
(3, 'Bald'),
(4, 'Red'),
(5, 'White/Grey'),
(6, 'Black'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Tabellstruktur `hobby`
--

CREATE TABLE IF NOT EXISTS `hobby` (
  `value` int(2) NOT NULL DEFAULT '0',
  `hobby` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `hobby`
--

INSERT INTO `hobby` (`value`, `hobby`) VALUES
(1, 'Books'),
(2, 'Art'),
(3, 'Music'),
(4, 'Meet friends'),
(5, 'Dancing'),
(6, 'Animals'),
(7, 'Photography'),
(8, 'History'),
(9, 'Religion'),
(10, 'Writing'),
(11, 'Games'),
(12, 'Drawing'),
(13, 'Walking'),
(14, 'Movies'),
(15, 'Hiking'),
(16, 'Cooking'),
(17, 'Travel'),
(18, 'Exercising'),
(19, 'Cars/Motorcycles'),
(20, 'Computers'),
(21, 'Fishing/Hunting'),
(22, 'Painting'),
(23, 'Politics'),
(24, 'Roleplaying'),
(25, 'Theatre'),
(26, 'Gaming'),
(27, 'Other');

-- --------------------------------------------------------

--
-- Tabellstruktur `housing_type`
--

CREATE TABLE IF NOT EXISTS `housing_type` (
  `value` int(2) NOT NULL DEFAULT '0',
  `housing` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `housing_type`
--

INSERT INTO `housing_type` (`value`, `housing`) VALUES
(1, 'Alone'),
(2, 'With parents'),
(3, 'With roommate'),
(4, 'With children'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Tabellstruktur `length`
--

CREATE TABLE IF NOT EXISTS `length` (
  `value` int(2) NOT NULL DEFAULT '0',
  `length` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `length`
--

INSERT INTO `length` (`value`, `length`) VALUES
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
  `value` int(2) NOT NULL DEFAULT '0',
  `childs` int(2) DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumpning av Data i tabell `num_childs`
--

INSERT INTO `num_childs` (`value`, `childs`) VALUES
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
  `value` int(3) NOT NULL DEFAULT '0',
  `occupation` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `personality_type`
--

CREATE TABLE IF NOT EXISTS `personality_type` (
  `value` int(2) NOT NULL DEFAULT '0',
  `personality` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
  `value` int(2) NOT NULL DEFAULT '0',
  `pet` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `value` int(2) NOT NULL DEFAULT '0',
  `religion` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `romance`
--

CREATE TABLE IF NOT EXISTS `romance` (
  `value` int(2) NOT NULL DEFAULT '0',
  `romance` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `searching_for`
--

CREATE TABLE IF NOT EXISTS `searching_for` (
  `value` int(2) NOT NULL DEFAULT '0',
  `relationship_type` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `spoken_languages`
--

CREATE TABLE IF NOT EXISTS `spoken_languages` (
  `value` int(2) NOT NULL DEFAULT '0',
  `language` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `tobacco_habits`
--

CREATE TABLE IF NOT EXISTS `tobacco_habits` (
  `value` int(2) NOT NULL DEFAULT '0',
  `habit` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `traits`
--

CREATE TABLE IF NOT EXISTS `traits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='"name" is responding to the table of the item, eg. "eye_colo' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `hashed_password` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `salt` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `first_name` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `sur_name` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `country` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  `description` mediumtext COLLATE utf8_bin,
  `latitude` int(11) DEFAULT NULL,
  `longitude` int(11) DEFAULT NULL,
  `year_of_birth` int(4) DEFAULT NULL,
  `favorite_movie` varchar(140) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

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
  `id` tinyint(4) DEFAULT NULL,
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
-- Tabellstruktur `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
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
  `date_joined` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `is_premium` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `user_traits`
--

CREATE TABLE IF NOT EXISTS `user_traits` (
  `id` tinyint(4) NOT NULL DEFAULT '0',
  `trait_id` int(11) DEFAULT NULL,
  `value` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `wanted_num_childs`
--

CREATE TABLE IF NOT EXISTS `wanted_num_childs` (
  `value` int(2) NOT NULL DEFAULT '0',
  `childs` int(2) DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tabellstruktur `weight`
--

CREATE TABLE IF NOT EXISTS `weight` (
  `value` int(2) NOT NULL DEFAULT '0',
  `weight` varchar(65) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
