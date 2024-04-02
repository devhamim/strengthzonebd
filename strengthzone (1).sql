-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 08:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strengthzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `define` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `subtitle`, `title`, `image`, `description`, `define`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Kamrul Bio Gas', 'n8uof602761.jpg', '<p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">BioGasTech Solutions is a leading company specializing in innovative biogas technology. We design, build, and operate state-of-the-art biogas plants, harnessing organic waste to produce clean, renewable energy. Committed to sustainability, we provide eco-friendly solutions for businesses and communities, reducing environmental impact while promoting energy independence.</p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><font color=\"#374151\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"white-space-collapse: preserve; background-color: rgb(247, 247, 248);\"><br></span></font></p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><font color=\"#374151\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"white-space-collapse: preserve; background-color: rgb(247, 247, 248);\"><br></span></font></p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"text-align: var(--bs-body-text-align); white-space-collapse: preserve;\"><font color=\"#374151\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\">8 Years Experience </font></span></p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"text-align: var(--bs-body-text-align);\"><font color=\"#374151\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"white-space-collapse: preserve;\">250 Successful Project</span></font></span></p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><span style=\"text-align: var(--bs-body-text-align);\"><font color=\"#374151\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"white-space-collapse: preserve;\">25+ Expert Team Member</span></font></span></p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><font color=\"#374151\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"white-space-collapse: preserve;\">Bank Loan Facilities </span></font></p>', 2, 1, '2023-10-19 00:12:25', '2023-10-29 04:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `achieves`
--

CREATE TABLE `achieves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achieves`
--

INSERT INTO `achieves` (`id`, `title`, `icon`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Experience', 'VrlWv531344.png', '7+', 1, '2023-10-25 00:08:30', '2023-10-29 03:53:10'),
(2, 'Projects Completed', 'rd0bF470833.png', '490', 1, '2023-10-25 00:10:00', '2023-10-29 03:54:07'),
(3, 'Expert People', 'v94x2238552.png', '225', 1, '2023-10-25 00:17:34', '2023-10-29 03:53:44');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '10HBf482493.jpg', 1, '2024-03-26 04:16:22', '2024-03-26 04:16:22'),
(2, NULL, NULL, '2bHkr462623.jpg', 1, '2024-03-26 04:16:27', '2024-03-26 04:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `description` longtext NOT NULL,
  `define` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title`, `tags`, `image`, `added_by`, `description`, `define`, `status`, `created_at`, `updated_at`) VALUES
(18, 'what-a-befit-of-biogas-218429', 'How to keep your Body Health in Over Festival', NULL, '8ht8O854625.jpg', 10, '<p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanm, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><div class=\"two-column\" style=\"margin: 25px 0px 30px; padding: 0px; border: none; outline: none; position: relative; color: rgb(119, 119, 119); font-family: Montserrat, sans-serif; font-size: 14px;\"><div class=\"row clearfix\" style=\"--bs-gutter-x: 30px; --bs-gutter-y: 30px; margin: 0px -15px; padding: 0px; border: none; outline: none;\"><div class=\"column col-lg-6 col-md-6 col-sm-12\" style=\"flex-basis: 50%; width: 364px; max-width: 50%; padding: 0px 15px; margin: 0px; border: none; outline: none; position: relative; min-height: 1px;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: none; outline: none; position: relative; overflow: hidden; background-color: rgb(255, 0, 0);\"><img src=\"file:///E:/design/strengthzonebd/images/resource/news-11.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; border: none; outline: none; display: block; height: auto; position: relative; width: 334px; transition: all 900ms ease 0s; opacity: 0.7;\"></div></div><div class=\"column col-lg-6 col-md-6 col-sm-12\" style=\"flex-basis: 50%; width: 364px; max-width: 50%; padding: 0px 15px; margin: 0px; border: none; outline: none; position: relative; min-height: 1px;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: none; outline: none; position: relative; overflow: hidden; background-color: rgb(255, 0, 0);\"><img src=\"file:///E:/design/strengthzonebd/images/resource/news-12.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; border: none; outline: none; display: block; height: auto; position: relative; width: 334px; transition: all 900ms ease 0s; opacity: 0.7;\"></div></div></div></div><p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequu ntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><blockquote style=\"padding: 0px; border: none; outline: none; position: relative; color: rgb(34, 34, 34); font-size: 24px; font-weight: 700; line-height: 1.6em; text-align: center; font-family: Montserrat, sans-serif;\"><br></blockquote><h4 style=\"margin: 30px 0px 12px; font-weight: 700; line-height: 1.5em; color: rgb(34, 34, 34); font-size: 24px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px; border: none; outline: none; font-family: Montserrat, sans-serif; position: relative;\">Working daily, with goals in mind will truly make all the difference for classe service</h4><p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequu ntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi temp ora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 2, 1, '2023-10-29 06:08:50', '2024-03-26 00:56:37'),
(19, 'how-use-biogas-plant-415595', 'PUSH YOUR FITNESS FURTHER WITH FACILITIES', NULL, 'vCqVq143539.jpg', 10, '<p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanm, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><div class=\"two-column\" style=\"margin: 25px 0px 30px; padding: 0px; border: none; outline: none; position: relative; color: rgb(119, 119, 119); font-family: Montserrat, sans-serif; font-size: 14px;\"><div class=\"row clearfix\" style=\"--bs-gutter-x: 30px; --bs-gutter-y: 30px; margin: 0px -15px; padding: 0px; border: none; outline: none;\"><div class=\"column col-lg-6 col-md-6 col-sm-12\" style=\"flex-basis: 50%; width: 364px; max-width: 50%; padding: 0px 15px; margin: 0px; border: none; outline: none; position: relative; min-height: 1px;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: none; outline: none; position: relative; overflow: hidden; background-color: rgb(255, 0, 0);\"><img src=\"file:///E:/design/strengthzonebd/images/resource/news-11.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; border: none; outline: none; display: block; height: auto; position: relative; width: 334px; transition: all 900ms ease 0s; opacity: 0.7;\"></div></div><div class=\"column col-lg-6 col-md-6 col-sm-12\" style=\"flex-basis: 50%; width: 364px; max-width: 50%; padding: 0px 15px; margin: 0px; border: none; outline: none; position: relative; min-height: 1px;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: none; outline: none; position: relative; overflow: hidden; background-color: rgb(255, 0, 0);\"><img src=\"file:///E:/design/strengthzonebd/images/resource/news-12.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; border: none; outline: none; display: block; height: auto; position: relative; width: 334px; transition: all 900ms ease 0s; opacity: 0.7;\"></div></div></div></div><p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequu ntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><blockquote style=\"padding: 0px; border: none; outline: none; position: relative; color: rgb(34, 34, 34); font-size: 24px; font-weight: 700; line-height: 1.6em; text-align: center; font-family: Montserrat, sans-serif;\"><br></blockquote><h4 style=\"margin: 30px 0px 12px; font-weight: 700; line-height: 1.5em; color: rgb(34, 34, 34); font-size: 24px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px; border: none; outline: none; font-family: Montserrat, sans-serif; position: relative;\">Working daily, with goals in mind will truly make all the difference for classe service</h4><p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequu ntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi temp ora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 2, 1, '2023-10-29 06:13:00', '2024-03-26 00:56:44'),
(20, 'give-your-fitness-a-boost-with-our-gym-challenge-577444', 'GIVE YOUR FITNESS A BOOST WITH OUR GYM CHALLENGE', NULL, '5Yr1t34206.jpg', 1, '<p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudanm, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p><div class=\"two-column\" style=\"margin: 25px 0px 30px; padding: 0px; border: none; outline: none; position: relative; color: rgb(119, 119, 119); font-family: Montserrat, sans-serif; font-size: 14px;\"><div class=\"row clearfix\" style=\"--bs-gutter-x: 30px; --bs-gutter-y: 30px; margin: 0px -15px; padding: 0px; border: none; outline: none;\"><div class=\"column col-lg-6 col-md-6 col-sm-12\" style=\"flex-basis: 50%; width: 364px; max-width: 50%; padding: 0px 15px; margin: 0px; border: none; outline: none; position: relative; min-height: 1px;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: none; outline: none; position: relative; overflow: hidden; background-color: rgb(255, 0, 0);\"><img src=\"file:///E:/design/strengthzonebd/images/resource/news-11.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; border: none; outline: none; display: block; height: auto; position: relative; width: 334px; transition: all 900ms ease 0s; opacity: 0.7;\"></div></div><div class=\"column col-lg-6 col-md-6 col-sm-12\" style=\"flex-basis: 50%; width: 364px; max-width: 50%; padding: 0px 15px; margin: 0px; border: none; outline: none; position: relative; min-height: 1px;\"><div class=\"image\" style=\"margin: 0px; padding: 0px; border: none; outline: none; position: relative; overflow: hidden; background-color: rgb(255, 0, 0);\"><img src=\"file:///E:/design/strengthzonebd/images/resource/news-12.jpg\" alt=\"\" style=\"margin: 0px; padding: 0px; border: none; outline: none; display: block; height: auto; position: relative; width: 334px; transition: all 900ms ease 0s; opacity: 0.7;\"></div></div></div></div><p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequu ntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><blockquote style=\"padding: 0px; border: none; outline: none; position: relative; color: rgb(34, 34, 34); font-size: 24px; font-weight: 700; line-height: 1.6em; text-align: center; font-family: Montserrat, sans-serif;\"><br></blockquote><h4 style=\"margin: 30px 0px 12px; font-weight: 700; line-height: 1.5em; color: rgb(34, 34, 34); font-size: 24px; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; padding: 0px; border: none; outline: none; font-family: Montserrat, sans-serif; position: relative;\">Working daily, with goals in mind will truly make all the difference for classe service</h4><p style=\"margin: 15px 0px 20px; padding: 0px; border: none; outline: none; position: relative; line-height: 1.8em; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequu ntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolo rem ipsum quia dolor sit amet, consectetur, adipisci velit.sed quia non numquam eius modi temp ora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 2, 1, '2024-03-26 00:51:00', '2024-03-26 00:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `blogs_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `customer_id`, `name`, `email`, `number`, `address`, `note`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Steven Foreman', 'jivoxozu@mailinator.com', '46612564862', NULL, NULL, 2, '2024-03-27 05:02:17', '2024-03-27 05:02:17'),
(2, 4, 'Jaime Yang', 'toji@mailinator.com', '01303523442', 'Shankorpur, Ishaq Sarak, Jashore Town', NULL, 2, '2024-03-28 00:27:35', '2024-03-28 00:27:35'),
(3, 5, 'Sigourney Kidd', 'dytyzopuwo@mailinator.com', '01713002232', 'Shankorpur, Ishaq Sarak, Jashore Town', NULL, 2, '2024-03-30 23:42:52', '2024-03-30 23:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(5, '1', 'vbqcO153726.jpg', 1, '2023-10-29 05:04:20', '2023-10-29 05:04:20'),
(6, '2', 'jhR3C50701.jpg', 1, '2023-10-29 05:04:27', '2023-10-29 05:04:27'),
(7, '3', '6aZU2179523.jpg', 1, '2023-10-29 05:04:36', '2023-10-29 05:04:36'),
(8, '4', 'Ygyry596041.jpg', 1, '2023-10-29 05:04:45', '2023-10-29 05:04:45'),
(9, '5', 'QYagG11069.jpg', 1, '2023-10-29 05:04:53', '2023-10-29 05:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL DEFAULT '0',
  `total` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `category`, `tag`, `price`, `discount`, `total`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Nobis pariatur Eos', 'LF6d5jCHuuZT', 'gym', 'guym', '148', '30', '103.6', 'fdfff', 'X4lMB644183.jpg', 1, '2024-03-26 03:02:29', '2024-03-27 05:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_videos`
--

INSERT INTO `course_videos` (`id`, `title`, `name`, `size`, `path`, `course_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 'কোর্স সম্পর্কে বিস্তারিত', '1711445202-pexels_videos_3414 (1080p) - Copy.mp4', '8806630', 'storage/1711445202-pexels_videos_3414 (1080p) - Copy.mp4', 2, 1, '2024-03-26 03:26:42', '2024-03-26 03:26:42'),
(7, 'সম্পর্কে বিস্তারিত', '1711447177-video (2160p).mp4', '33735543', 'storage/1711447177-video (2160p).mp4', 2, 2, '2024-03-26 03:59:37', '2024-03-26 03:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Steven Foreman', 'jivoxozu@mailinator.com', '$2y$10$V/SP4tvLwSXdGunM3v5mMurZa9zk5yqy.q4ue2a2EDlnz5NEtWvVi', '2024-03-27 04:31:50', '2024-03-27 04:31:50'),
(3, 'Lyle Cross', 'wikixily@mailinator.com', '$2y$10$wvUTOnpJwcKbEcWIb09c.uWr8Eb.hTP0Wdj/f2ZCYl1MGgNTPbm4y', '2024-03-27 04:47:36', '2024-03-27 04:47:36'),
(4, 'Jaime Yang', 'toji@mailinator.com', '$2y$10$6mo7oCEt8bd0eb/pE7UU4.1.ZCx6spEMLleAFksnf0yt8dThXDL16', '2024-03-27 23:22:51', '2024-03-27 23:22:51'),
(5, 'Sigourney Kidd', 'dytyzopuwo@mailinator.com', '$2y$10$bmN3vv6wszA3cz1td2Bh5.V/l5njNf6uiBqFWqa5lMjpV...HiRyS', '2024-03-30 23:42:22', '2024-03-30 23:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `customer_messages`
--

CREATE TABLE `customer_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_messages`
--

INSERT INTO `customer_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jerry Jackson', 'qasyja@mailinator.com', '+1 (223) 744-7365', 'Ullamco ad et deseru', 'Quis omnis molestiae', '2023-10-25 01:15:28', '2023-10-25 01:15:28'),
(4, 'Caesar', 'hamim@gmail.com', '+1 (438) 676-3049', 'test', 'aaa', '2023-10-28 23:44:01', '2023-10-28 23:44:01'),
(5, 'Amena Sosa', 'nutamuju@mailinator.com', '+1 (301) 246-3214', 'Consequatur elit et', 'Voluptatem enim dolo', '2023-10-28 23:45:31', '2023-10-28 23:45:31'),
(6, 'Claudia Mcpherson', 'lerycuz@mailinator.com', '+1 (566) 537-2859', 'Officia officia assu', 'Quia aut voluptatibu', '2023-10-28 23:47:01', '2023-10-28 23:47:01'),
(7, 'Aquila Rosario', 'kidog@mailinator.com', '+1 (566) 412-3775', 'Molestiae nulla aut', 'Aspernatur ratione s', '2024-04-01 23:51:50', '2024-04-01 23:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `customer_says`
--

CREATE TABLE `customer_says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_says`
--

INSERT INTO `customer_says` (`id`, `name`, `post`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Mellisa Martinez', 'Nutritionist', 'xkqBu946474.jpg', 'I\'ve tried many workout programs, but none have come close to the results I\'ve achieved with this gym video course. The workouts are challenging yet manageable, and the instructors are incredibly motivating. I\'ve seen significant improvements in my strength and endurance since starting this program. Highly recommend it!', 1, '2023-10-19 03:39:00', '2024-04-01 23:23:08'),
(3, 'tushar', 'Graphic Designer', 'SOpTy282747.jpg', '<span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">I was skeptical about trying an online workout program, but this gym video course exceeded all my expectations. The instructors provide clear instructions and modifications for all fitness levels, making it accessible to everyone. I\'ve lost weight, gained muscle, and improved my overall fitness level in just a few weeks. It\'s truly a comprehensive program that delivers results.</span>', 1, '2023-10-19 03:43:00', '2024-04-01 23:24:11'),
(4, 'Emily Johnso', 'CHAIRMAN', 'FqrkR52525.jpg', '<p><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">As a busy professional, finding time to hit the gym can be tough. That\'s why I love this gym video course. I can do the workouts from the comfort of my own home, on my own schedule. The variety of workouts keeps things interesting, and I\'ve never felt stronger or more energized. It\'s a game-changer for anyone looking to get fit without sacrificing convenience.</span><br></p>', 1, '2024-04-01 23:24:58', '2024-04-01 23:24:58'),
(5, 'Sarah Thompson', 'CONSULTANT', 'TesPG217635.jpg', '<p><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, Ubuntu, Cantarell, &quot;Noto Sans&quot;, sans-serif, &quot;Helvetica Neue&quot;, Arial, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; white-space-collapse: preserve;\">I\'m relatively new to fitness, but this gym video course has been perfect for me. The beginner-friendly workouts helped me ease into a regular exercise routine, and I\'ve been amazed at how quickly I\'ve progressed. The sense of community among fellow participants is also a huge motivator. I feel supported every step of the way. This course has been a game-changer for my health and well-being.</span><br></p>', 1, '2024-04-01 23:25:32', '2024-04-01 23:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `icon`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Market Research', 'J7fLx600895.png', 's3TL3905205.jpg', 'Naff at public school blog bobby Elizabeth super blo bamboozled blab.', 2, '2023-10-18 06:41:01', '2023-10-19 00:32:01'),
(4, 'SEO & Content Writing', 'U4sB7465310.png', 'u3ZYj722462.png', 'Naff at public school blog bobby Elizabeth super blo bamboozled blab.', 1, '2023-10-18 06:43:29', '2023-10-19 00:32:08'),
(5, 'Website Development', 'UJb3j517723.png', '5rvca927275.jpg', 'Naff at public school blog bobby Elizabeth super blo bamboozled blab.', 1, '2023-10-18 06:44:31', '2023-10-18 06:44:31'),
(6, 'App Development', '6e3Ib612084.png', 'L7SRa430819.jpg', 'Naff at public school blog bobby Elizabeth super blo bamboozled blab.', 1, '2023-10-18 06:45:15', '2023-10-18 22:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bio', '4IouM322301.jpg', 'dhaka,bangladesh-1200', 1, '2023-10-24 23:29:46', '2023-10-24 23:42:56'),
(3, 'bio gas', 'kiICD95055.jpg', 'dhaka,bangladesh', 1, '2023-10-24 23:43:19', '2023-10-24 23:43:19'),
(4, 'bio gas', 'fmVzN559254.jpg', 'dhaka,bangladesh', 2, '2023-10-24 23:43:31', '2023-10-24 23:45:51'),
(5, 'bio gas', '0bLxp414022.jpg', 'dhaka,bangladesh', 1, '2023-10-24 23:44:04', '2023-10-24 23:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_10_16_091028_create_settings_table', 2),
(8, '2023_10_18_120350_create_features_table', 3),
(11, '2023_10_19_053423_create_abouts_table', 4),
(13, '2023_10_19_074934_create_teams_table', 5),
(14, '2023_10_19_090648_create_customer_says_table', 6),
(15, '2023_10_19_095341_create_clients_table', 7),
(16, '2023_10_19_103509_create_portfolios_table', 8),
(19, '2023_10_21_054156_create_blogs_table', 9),
(20, '2023_10_21_071156_create_tags_table', 9),
(21, '2023_10_21_073839_create_blog_tag_table', 10),
(22, '2023_10_23_060741_create_services_table', 11),
(23, '2023_10_23_065009_create_pricings_table', 12),
(24, '2023_10_23_073730_create_privacy_policies_table', 13),
(25, '2023_10_25_052005_create_galleries_table', 14),
(26, '2023_10_25_055948_create_achieves_table', 15),
(27, '2023_10_25_070628_create_customer_messages_table', 16),
(30, '2023_10_25_121756_create_blog_comments_table', 17),
(52, '2023_10_28_054429_create_banners_table', 18),
(53, '2023_10_29_050538_create_blog_comments_table', 18),
(54, '2024_03_24_070538_create_courses_table', 18),
(55, '2024_03_24_070918_create_course_videos_table', 18),
(56, '2024_03_27_075119_create_checkouts_table', 19),
(57, '2024_03_27_092709_create_customers_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `completed` int(11) NOT NULL DEFAULT 1,
  `define` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `feature_id`, `name`, `title`, `image`, `client`, `date`, `value`, `link`, `description`, `completed`, `define`, `status`, `created_at`, `updated_at`) VALUES
(2, 6, 'Lillith', 'Eaque', '5Jklh114304.jpg', 'Sunt', '2020-02-05', '56', 'Explicabo Autem id', 'bbbbbb', 1, 1, 2, '2023-10-19 06:11:35', '2023-10-19 06:29:11');

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `icon`, `price`, `link`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem nisi perspicia', 'Llrlw675194.jpg', '135', 'Ad nobis totam excep', '<p>aaaaaaaaaa</p>', 1, '2023-10-23 01:01:59', '2023-10-23 01:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<div class=\"single-privacy\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(32, 32, 32);\"><h2 style=\"margin: -13px 0px; line-height: 45px; font-size: 30px; padding: 0px 0px 30px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Terms of Use - Vizion Installment</h2><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: 26px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; letter-spacing: 0px; color: rgb(86, 86, 86);\">Nulla enim justo, elementum iaculis commodo et, feugiat fermentum quam. In quis lorem tempor, porta nunc a, malesuada dui. Integer venenatis leo sit amet mi tincidunt, sit amet pharetra mauris efficitur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent vestibulum eros vitae magna iaculis.</p></div><div class=\"single-privacy privacy-padding\" style=\"margin: 65px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-size: medium; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(32, 32, 32);\"><h2 style=\"margin: -13px 0px; line-height: 45px; font-size: 30px; padding: 0px 0px 30px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Permitted Use and Restrictions</h2><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: 26px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; letter-spacing: 0px; color: rgb(86, 86, 86);\">Sed id tellus orci. Donec congue tellus dignissim molestie fermentum. Duis cursus in mi id cursus. Sed egestas mi quis semper feugiat. Donec laoreet porta velit. Duis eros orci, lacinia a mollis quis, vestibulum ut elit. Sed vitae justo sapien. Duis ultricies ante non tortor sollicitudin, vel mattis lacus venenatis. Nam non tincidunt mauris, a tincidunt diam. Sed pulvinar lorem pellentesque faucibus ornare. Donec eu dui urna. Cras porta porta enim, nec congue tellus hendrerit vitae. Fusce rhoncus vel lorem.</p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: 26px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; letter-spacing: 0px; color: rgb(86, 86, 86);\"><br></p><h2 style=\"margin: -13px 0px; line-height: 45px; font-size: 30px; padding: 0px 0px 30px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(32, 32, 32);\">General</h2><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(86, 86, 86);\">Suspendisse eu neque sit amet mi fermentum litora torquent per conubia nostra viverra. Nullam venenatis feugiat odio nec tincidunt. Suspendisse molestie ipsum ac molestie maximus.</p><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: 26px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; color: rgb(86, 86, 86);\"><br></p><div class=\"single-privacy privacy-padding\" style=\"margin: 65px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><h2 style=\"margin: -13px 0px; line-height: 45px; font-size: 30px; padding: 0px 0px 30px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Accounts &amp; Passwords</h2><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: 26px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; letter-spacing: 0px; color: rgb(86, 86, 86);\">Nunc quam dui, aliquam ut lacus non, congue rutrum tortor. Maecenas mi quam, lacinia sed tortor nec, cursus accumsan lorem. Pellentesque a quam non nibh tincidunt congue.</p></div><div class=\"single-privacy privacy-padding\" style=\"margin: 65px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-variant-position: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\"><h2 style=\"margin: -13px 0px; line-height: 45px; font-size: 30px; padding: 0px 0px 30px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit;\">Security</h2><p style=\"margin: -8px 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: 16px; line-height: 26px; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; letter-spacing: 0px; color: rgb(86, 86, 86);\">Phasellus semper malesuada arcu a posuere. Vestibulum tortor nisi, pellentesque eget nibh tristique, scelerisque bibendum ex. Integer malesuada bibendum ante ut molestie. Praesent sed ex laoreet, cursus justo vel, sodales quam. Nam a odio eu ex pulvinar euismod.</p></div></div>', '2023-10-23 01:46:58', '2023-10-23 03:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_desp` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `image`, `sort_desp`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Biogas Consultancy', 'h2dkL7727.png', 'FA1UO833229.png', 'Expert biogas consultancy services: design, implementation, and optimization. Sustainable solutions for renewable energy production, waste management, and environmental conservation. Trust our expertise for eco-friendly solutions', NULL, 1, '2023-10-23 00:23:58', '2023-10-29 04:31:15'),
(2, 'Biogas Installation', 'WAcQx861124.png', 'xOiam281917.png', 'Efficient biogas installation service: expert design, safe construction, and seamless integration. Harness renewable energy, manage waste sustainably. Turnkey solutions for eco-conscious individuals and businesses.', NULL, 1, '2023-10-23 00:26:00', '2023-10-29 04:32:18'),
(3, 'Biogas Servicing', 'nYOou549505.png', '6wBYI112201.png', 'Professional biogas servicing: regular maintenance, repairs, and performance optimization. Ensure your biogas system operates efficiently, promoting sustainability and reducing environmental impact. Reliable service for lasting eco-friendly solutions.\"', NULL, 1, '2023-10-24 06:09:19', '2023-10-29 04:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `footer` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `about`, `number`, `logo`, `footer_logo`, `favicon`, `address`, `footer`, `title`, `meta_title`, `meta_tag`, `meta_description`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 'Strength Zone BD', 'strengthzonebd@gmail.com', 'Strength Zone BD best e-gym website in Bangladesh.', '+8801787430309', 'wRriJ576400.png', 'kBFhy342560.png', 'JY2nf784604.png', 'Uposhohor, Bogura', '© 2024 Strength Zone BD |', 'Strength Zone BD', 'Strength Zone BD Company in Bangladesh', 'Strength Zone BD', 'Strength Zone BD', 'https://www.facebook.com/profile.php?id=61557001442175&mibextid=ZbWKwL', NULL, NULL, NULL, 'https://www.youtube.com/@StrengthZone-Monir', NULL, NULL, '2024-04-01 23:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `image`, `facebook`, `instagram`, `linkedin`, `github`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Md Kamrul Islam', 'Managing Director', 'Zc1sA782772.jpg', '#', NULL, NULL, NULL, '1', '2023-10-28 05:37:20', '2023-10-28 05:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamim', 'hamim@gmail.com', NULL, NULL, '$2y$10$fEBeyhM6WU0pqWJrHfYufeILnOas/oG9ejohK0wYNEuN5.1yb/bgm', '1RcLZO33XcGHVPE6Ypyak8toLvUFFLyydBgilsfB1Xqhu4VOzYrzkuS5CORJ', '2023-10-16 00:57:07', '2023-10-26 02:00:36'),
(8, 'Mariam Shepard', 'xaby@mailinator.com', 'II3qT151304.jpg', NULL, '$2y$10$3zG1ojMF7njGcR4tQv.YR.S04w8KDLAflAXSP/2dZCY2gm8GcZHV.', 'bd6R6cXjXRq03nAELWPXXzNf7L5oy213hC9Au4ga9S3QffqQXNhDMNSSHUB2', '2023-10-26 01:59:08', '2023-10-26 03:17:28'),
(10, 'admin', 'admin@gmail.com', NULL, NULL, '$2y$10$a/xr2ynYZbJICvOPeAb6Out/xWUqDO5/pgwV2c9bhid4OeSB0CfHy', NULL, '2023-10-28 01:58:21', '2023-10-28 01:58:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achieves`
--
ALTER TABLE `achieves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tag_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `customer_messages`
--
ALTER TABLE `customer_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_says`
--
ALTER TABLE `customer_says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `achieves`
--
ALTER TABLE `achieves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_messages`
--
ALTER TABLE `customer_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_says`
--
ALTER TABLE `customer_says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
