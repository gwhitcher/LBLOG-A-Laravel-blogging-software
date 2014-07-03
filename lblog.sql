-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2014 at 08:46 PM
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
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `featured` text COLLATE utf8_unicode_ci NOT NULL,
  `metadescription` text COLLATE utf8_unicode_ci NOT NULL,
  `metakeywords` text COLLATE utf8_unicode_ci NOT NULL,
  `slider` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_slug_unique` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `body`, `featured`, `metadescription`, `metakeywords`, `slider`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'LBlog (A Laravel blogging software)', 'lblog-a-laravel-blogging-software', '<p>Thank you for installing LBlog (A Laravel blogging software)!  To login to the administration visit YOURDOMAIN.COM/admin.  The default admin account is Username: admin@admin.com Password: password.  This software is open source.  If you do use it please try and give LBlog credit so it can grow!</p>', 'cover.jpg', 'LBlog is a Laravel blogging software written by George Whitcher', 'laravel, open source, blog, george whitcher', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `metadescription`, `metakeywords`, `created_at`, `updated_at`) VALUES
(1, 'Example Category', 'example-category', 'LBlog is a Laravel blogging software written by George Whitcher', 'laravel, open source, blog, george whitcher', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_04_29_125813_create_users_table', 1),
(21, '2014_05_01_114129_create_articles_table', 1),
(22, '2014_05_01_191855_create_categories_table', 1),
(23, '2014_05_01_212612_create_sidebar_table', 1),
(24, '2014_05_09_221543_create_pages_table', 1),
(25, '2014_05_09_223832_create_nav_table', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `title`, `url`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'http://localhost:8000', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'About', 'http://localhost:8000/about', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Example Category', 'http://localhost:8000/category/example-category', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Contact', 'http://localhost:8000/contact', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'About', 'about', 'Laravel blogging software written by George Whitcher.', 'laravel, blog, open source, lblog, george whitcher', '<p>This blog is a custom blogging software built in PHP with the <a href="http://laravel.com" target="_blank">Laravel</a> framework by Web Developer <a href="http://www.georgewhitcher.com" target="_blank">George Whitcher</a>. &nbsp;The source can be obtained <a href="http://repositories.georgewhitcher.com/lblog-a-laravel-blog-software" target="_blank">here</a>.</p>', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, 'Categories', '<ul>\r\n<?php\r\n$categories = DB::table("categories")->get();\r\n$base_url = Config::get("lblog_config.BASE_URL");\r\nforeach ($categories as $category)\r\n{\r\necho <<<EOT\r\n<li><a href="$base_url/category/$category->slug">$category->title</a></li>\r\nEOT;\r\n} ?>\r\n</ul>', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Recent Posts', '<ul>\r\n<?php\r\n$articles = DB::table("articles")->orderBy("created_at", "desc")->take(5)->get();\r\n$base_url = Config::get("lblog_config.BASE_URL");\r\nforeach ($articles as $article)\r\n{\r\necho <<<EOT\r\n<li><a href="$base_url/post/$article->id/$article->slug">$article->title</a></li>\r\nEOT;\r\n}\r\n?>\r\n</ul>', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$4ItxoHz/nCOYMUp1zQuoEeJbdiSDpwwdOxt1EbGwThqkYp4Mff08e', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
