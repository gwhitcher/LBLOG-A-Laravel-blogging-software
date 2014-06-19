-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2014 at 01:49 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `date` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `featured` text COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text COLLATE utf8_unicode_ci NOT NULL,
  `metakeywords` text COLLATE utf8_unicode_ci NOT NULL,
  `slider` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `date`, `slug`, `body`, `featured`, `metadescription`, `metakeywords`, `slider`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello World!', '', 'hello-world', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis mollis turpis, quis consectetur erat. Morbi pretium scelerisque orci a pellentesque. Cras vehicula, nunc id tincidunt bibendum, purus libero cursus neque, ut vehicula mauris turpis nec leo. Morbi consectetur sagittis magna, eget commodo massa accumsan vel. Sed auctor, nisi a ultricies ullamcorper, mi velit aliquam sem, et fringilla urna tortor sed sem. Maecenas non mollis mi, ut ultrices dolor. Aenean quis dui nisi. Duis non adipiscing augue. Aenean vitae enim eu mi tincidunt fermentum. Curabitur tempor libero in libero adipiscing, in feugiat lectus congue. In malesuada, dolor eu aliquet venenatis, sapien nibh mollis urna, ac pretium est risus vel arcu.</p>\r\n\r\n<p>In pulvinar tincidunt augue, at dictum lorem feugiat sit amet. Cras ultricies tempus ante, in facilisis sem egestas at. In a tellus tempus, fringilla velit in, tempus nibh. Sed bibendum accumsan porttitor. Vestibulum congue euismod orci, ut vestibulum urna molestie non. Fusce imperdiet in magna et luctus. Aenean fermentum nisi quis massa adipiscing, sed malesuada felis ultricies. Aliquam lobortis sagittis sodales. Quisque ac tempor dui, sed luctus turpis. Sed euismod magna sit amet pharetra sollicitudin. Vestibulum ac gravida quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur id ultricies lectus. Donec est nulla, ornare ac ornare in, aliquet tempor odio. Nunc ut ornare quam, a gravida sapien.</p>\r\n\r\n<p>Nunc sit amet varius eros. Aliquam erat volutpat. In eget est nec ipsum pellentesque ultrices vel et ligula. Sed metus est, venenatis vitae feugiat ac, tincidunt in libero. Mauris ornare condimentum cursus. Praesent tempor odio augue, lobortis interdum magna luctus ut. Mauris in porta sapien, eu adipiscing dui. Nulla rutrum, nulla ut aliquet suscipit, justo urna scelerisque est, vitae ullamcorper odio risus ut augue. Donec a ornare lacus, non imperdiet justo. Vestibulum nec suscipit mauris.</p>', '', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text COLLATE utf8_unicode_ci NOT NULL,
  `metakeywords` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `metadescription`, `metakeywords`, `created_at`, `updated_at`) VALUES
(1, 'Category #1', 'category1', 'This is the meta description for search engines for the category page.', 'laravel, blog, open source', '0000-00-00 00:00:00', '2014-05-10 01:37:51'),
(2, 'Category #2', 'category2', 'This is the meta description for search engines for the category page.', 'laravel, blog, open source', '2014-05-10 01:41:50', '2014-05-10 01:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_04_29_125813_create_users_table', 1),
(3, '2014_05_01_114129_create_articles_table', 2),
(4, '2014_05_01_191855_create_categories_table', 3),
(5, '2014_05_01_212612_create_sidebar_table', 4),
(6, '2014_05_09_221543_create_pages_table', 5),
(7, '2014_05_09_223832_create_nav_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `title`, `url`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'http://localhost:8000/', 0, '2014-05-10 02:52:00', '2014-05-10 02:52:00'),
(2, 'About', 'http://localhost:8000/about', 0, '2014-05-13 00:47:55', '2014-05-13 00:47:55'),
(3, 'Category #1', 'http://localhost:8000/category/category1', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Category #2', 'http://localhost:8000/category/category2', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Contact', 'http://localhost:8000/contact', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text COLLATE utf8_unicode_ci NOT NULL,
  `metakeywords` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `metadescription`, `metakeywords`, `body`, `created_at`, `updated_at`) VALUES
(1, 'About', 'about', 'Laravel blogging software written by George Whitcher.', 'laravel, blog, open source, lblog', '<p>This blog&nbsp;is a custom blogging software built in PHP with the <a href="http://laravel.com" target="_blank">Laravel</a> framework by Web Developer <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a>. &nbsp;The source can be obtained <a href="https://bitbucket.org/gwhitcher/lblog-a-laravel-blog-software" target="_blank">here</a>.</p>', '2014-05-10 02:22:40', '2014-05-10 02:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE IF NOT EXISTS `sidebar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `title`, `body`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Categories', '<ul>\r\n<?php\r\n$categories = DB::table(''categories'')->get();\r\nforeach ($categories as $category)\r\n{\r\n    echo ''<li><a href="''.Config::get(''lblog_config.BASE_URL'').''/category/''.$category->slug.''">''.$category->title.''</a></li>'';\r\n}\r\n?>\r\n</ul>', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Recent Posts', '<ul>\r\n<?php\r\n$articles = DB::table(''articles'')->orderBy(''date'', ''desc'')->take(5)->get();\r\nforeach ($articles as $article)\r\n{\r\n    echo ''<li><a href="''.Config::get(''lblog_config.BASE_URL'').''/post/''.$article->id.''/''.$article->slug.''">''.$article->title.''</a></li>'';\r\n}\r\n?>\r\n</ul>', 2, '2014-05-13 00:37:01', '2014-05-13 00:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@admin.com', '$2y$10$QVDGfxES5sV8fp4tFFsqje.XJ8c2JUwwUdnV0ffjgelyLiYKYrxsq', '2014-05-13 01:22:31', '2014-06-13 23:55:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
