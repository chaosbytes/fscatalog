-- phpMyAdmin SQL Dump
-- version 3.3.10.4
-- http://www.phpmyadmin.net
--
-- Host: mysql.fscatalog.foursquaregames.com
-- Generation Time: Jul 17, 2013 at 12:51 PM
-- Server version: 5.1.56
-- PHP Version: 5.4.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `fscatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name',
  `user_password_hash` char(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email',
  `user_active` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'user''s activation status',
  `user_activation_hash` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s email verification hash string',
  `user_password_reset_hash` char(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password reset code',
  `user_password_reset_timestamp` bigint(20) DEFAULT NULL COMMENT 'timestamp of the password reset request',
  `movie_data` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `movie_count` int(255) NOT NULL DEFAULT '0',
  `music_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `music_count` int(255) NOT NULL DEFAULT '0',
  `book_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `book_count` int(255) NOT NULL DEFAULT '0',
  `game_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `game_count` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

