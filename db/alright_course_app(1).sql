-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2017 at 01:15 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alright_course_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `acap_admins`
--

DROP TABLE IF EXISTS `acap_admins`;
CREATE TABLE `acap_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acap_admins`
--

INSERT INTO `acap_admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'almas', 'admin@abc.com', '$2y$10$wTOkfvGpZ5pm7iSZoUEO1uuJRvA4t2XF4XgR5EJQhM8zAVoDjL3aW', NULL, NULL, NULL),
(2, 'alright', 'alright@abc.com', '$2y$10$wTOkfvGpZ5pm7iSZoUEO1uuJRvA4t2XF4XgR5EJQhM8zAVoDjL3aW', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acap_migrations`
--

DROP TABLE IF EXISTS `acap_migrations`;
CREATE TABLE `acap_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acap_migrations`
--

INSERT INTO `acap_migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2017_03_28_093038_create_tasks_table', 1),
(13, '2017_03_28_105620_create_posts_table', 1),
(14, '2017_04_05_182853_create_admins_table', 1),
(15, '2017_04_13_073757_create_roles_table', 1),
(16, '2017_04_13_074237_create_role_admins_table', 1),
(17, '2017_04_15_132151_create_trainings_table', 1),
(18, '2017_05_08_072254_create_post_metas_table', 1),
(19, '2017_05_11_154210_create_options_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `acap_options`
--

DROP TABLE IF EXISTS `acap_options`;
CREATE TABLE `acap_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acap_options`
--

INSERT INTO `acap_options` (`id`, `option_name`, `option_value`) VALUES
(1, 'static_home_page', '1');

-- --------------------------------------------------------

--
-- Table structure for table `acap_password_resets`
--

DROP TABLE IF EXISTS `acap_password_resets`;
CREATE TABLE `acap_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acap_posts`
--

DROP TABLE IF EXISTS `acap_posts`;
CREATE TABLE `acap_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acap_posts`
--

INSERT INTO `acap_posts` (`id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Our strength is in our partnerships', 'our-strength-is-in-our-partnerships', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At modi, amet aliquam? Obcaecati, numquam velit cumque ab! Dolorum non cumque alias nulla ea, odio nostrum voluptate magni illo dolorem sunt. Rem obcaecati et laborum eum quia, quas dolorum harum. Adipisci quas autem corporis quae commodi odit doloribus. Dolorum quam asperiores, nemo laudantium sunt, nisi velit, consequatur molestiae.</p>\r\n\r\n<ul>\r\n	<li>Duis dapibus odio eu tortor tempus, non posuere purus placerat.</li>\r\n	<li>Nulla ultricies leo ut tincidunt egestas.</li>\r\n	<li>Nullam non mi quis enim pretium feugiat.</li>\r\n	<li>Duis vel nisi ut nibh efficitur sodales.</li>\r\n</ul>', '2017-05-11 09:21:51', '2017-05-11 10:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `acap_post_metas`
--

DROP TABLE IF EXISTS `acap_post_metas`;
CREATE TABLE `acap_post_metas` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `meta_key` varchar(255) NOT NULL,
  `meta_value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acap_roles`
--

DROP TABLE IF EXISTS `acap_roles`;
CREATE TABLE `acap_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acap_roles`
--

INSERT INTO `acap_roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'editor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acap_role_admins`
--

DROP TABLE IF EXISTS `acap_role_admins`;
CREATE TABLE `acap_role_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acap_role_admins`
--

INSERT INTO `acap_role_admins` (`id`, `role_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `acap_tasks`
--

DROP TABLE IF EXISTS `acap_tasks`;
CREATE TABLE `acap_tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acap_trainings`
--

DROP TABLE IF EXISTS `acap_trainings`;
CREATE TABLE `acap_trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(512) NOT NULL,
  `name` varchar(512) NOT NULL,
  `description` longtext NOT NULL,
  `price` double(8,2) NOT NULL,
  `start_at` date NOT NULL,
  `end_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `acap_users`
--

DROP TABLE IF EXISTS `acap_users`;
CREATE TABLE `acap_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acap_admins`
--
ALTER TABLE `acap_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `acap_migrations`
--
ALTER TABLE `acap_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_options`
--
ALTER TABLE `acap_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_password_resets`
--
ALTER TABLE `acap_password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `acap_posts`
--
ALTER TABLE `acap_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_post_metas`
--
ALTER TABLE `acap_post_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_roles`
--
ALTER TABLE `acap_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_role_admins`
--
ALTER TABLE `acap_role_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_tasks`
--
ALTER TABLE `acap_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_trainings`
--
ALTER TABLE `acap_trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acap_users`
--
ALTER TABLE `acap_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acap_admins`
--
ALTER TABLE `acap_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `acap_migrations`
--
ALTER TABLE `acap_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `acap_options`
--
ALTER TABLE `acap_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `acap_posts`
--
ALTER TABLE `acap_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `acap_post_metas`
--
ALTER TABLE `acap_post_metas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acap_roles`
--
ALTER TABLE `acap_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `acap_role_admins`
--
ALTER TABLE `acap_role_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `acap_tasks`
--
ALTER TABLE `acap_tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acap_trainings`
--
ALTER TABLE `acap_trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `acap_users`
--
ALTER TABLE `acap_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
