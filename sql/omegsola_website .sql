-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2020 at 04:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omegsola_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `header`, `description`, `short_description`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `skype`, `image`, `created_at`, `updated_at`) VALUES
(1, 'We Are Here To Give            Quality Service            And Plan', NULL, 'The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.\r\n\r\nAenean tincidunt id mauris id auctor. Donec at ligula lacus. Nulla dignissim mi quis neque interdum, quis porta sem finibus.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/1nuee2icBRWTCZCwQYSuNjb0FfhXjSrEEdflJu3L.jpeg', NULL, '2020-09-22 20:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'product category-1', 'product-category-1', '2020-09-15 17:39:23', '2020-09-15 17:39:23'),
(2, 'product category-2', 'product-category-2', '2020-09-15 17:40:49', '2020-09-15 17:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_text` longtext COLLATE utf8mb4_unicode_ci,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `off_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `header`, `body_text`, `mail`, `phone`, `start_time`, `end_time`, `off_day`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Get In Touch For Any Kind            Of Help & Informations', '<p>We’re glad to discuss your organisation’s situation. So please contact us via the details below, or enter your request.</p>', NULL, '08034337593', NULL, NULL, NULL, 'Head Office 1 wuraola St off AIT road Alagbado Lagos State', NULL, '2020-09-23 05:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `content`) VALUES
(1, '{\"fields\":[{\"name\":\"info\",\"type\":\"string\"}],\"foreign_keys\":[],\"validations\":[{\"field\":\"info\",\"rules\":\"required\"}],\"relationships\":[]}');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `created_at`, `updated_at`, `image`) VALUES
(1, '2020-09-22 15:08:36', '2020-09-22 15:08:36', 'uploads/xJ2zy3iLIPVB6wzKGwvilIkfbZxYtOydYyD1Sdys.jpeg'),
(2, '2020-09-22 22:14:49', '2020-09-22 22:14:49', 'uploads/GPFV3MCKlut4IaE2MK3Cwe4c7X68yYpdjXSsacXk.jpeg'),
(3, '2020-09-22 22:15:09', '2020-09-22 22:15:09', 'uploads/Dpyg12BlRVn7rqSQ8yzBOwhAzjJOZLDqysP3YfLg.jpeg'),
(4, '2020-09-22 22:15:29', '2020-09-22 22:15:29', 'uploads/uzPiWshlTFENcfVfHgpcHJoJugIQKofCURFRgRiN.jpeg'),
(5, '2020-09-22 22:15:47', '2020-09-22 22:15:47', 'uploads/Zzw2YUaimNJGO4ZKh81AXc3Ifeq5AOTcwnTm7lYe.jpeg'),
(6, '2020-09-22 22:16:05', '2020-09-22 22:16:05', 'uploads/wj0qnNRFy8YKHjxkVdGgd8jy3f9W3UciqJZAbUvG.jpeg'),
(7, '2020-09-22 22:16:29', '2020-09-22 22:16:29', 'uploads/tvzd58xk3aIGHGwv76Gf0OMPkwZH4Oj0WNhMc16a.jpeg'),
(8, '2020-09-22 22:16:51', '2020-09-22 22:16:51', 'uploads/ooOGjjewHXZflTcgXFGdflKlVxNZeUQ3ahyiXdpW.jpeg'),
(9, '2020-09-22 22:17:13', '2020-09-22 22:17:13', 'uploads/D8GCqpr74OMZPOcanK2tMGNdhliFtjVdADxfEIr5.jpeg'),
(10, '2020-09-22 22:17:30', '2020-09-22 22:17:30', 'uploads/QE8QBKm7E3gqg9mwkPdp375q7H0oVLQnQBnMxJ7n.jpeg'),
(11, '2020-09-22 22:19:05', '2020-09-22 22:19:05', 'uploads/xfiRmh3hD553COR5KszG26bbqKGRykGXir3fTdSf.jpeg'),
(12, '2020-09-22 22:19:20', '2020-09-22 22:19:20', 'uploads/L1vpDyinIllylMXgVwN91VA8y9VnKdNCYigntpYR.jpeg'),
(13, '2020-09-22 22:19:41', '2020-09-22 22:19:41', 'uploads/Dx0neJ2nRad7YMAF24I6yBfD0S8H2LzjnNWFoH8T.jpeg'),
(14, '2020-09-22 22:20:31', '2020-09-22 22:20:31', 'uploads/No6FCqh0diNoWjze3jz0BR62yXJRRZWK9Tg5XRaH.jpeg'),
(15, '2020-09-22 22:20:50', '2020-09-22 22:20:50', 'uploads/Rqz0SOCjpl8F1r2sStskSOB5LQle7lphMxHb6ySc.jpeg'),
(16, '2020-09-22 22:21:05', '2020-09-22 22:21:05', 'uploads/VV4RFehgapFsYBmS78Fm8X89jVVDVsjv1ju8lE3P.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `holiday_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `subject`, `mail`, `phone`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Idona Schroeder', 'Et sed tempor dolor', 'luqawasuxy@mailinator.com', '+1 (431) 816-8244', 'Totam et illum iste', NULL, '2020-09-15 20:59:17', '2020-09-15 20:59:17'),
(2, 'guu', 'ggtu', 'fyy@ggy.com', 'rttyuu', 'gghuu', NULL, '2020-09-19 02:08:15', '2020-09-19 02:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_05_144818_create_crud_table', 1),
(5, '2020_02_22_051528_create_holidays_table', 1),
(6, '2020_03_10_070046_create_slider_table', 1),
(7, '2020_03_10_091636_create_service_table', 1),
(8, '2020_03_10_100001_create_objective_table', 1),
(9, '2020_03_10_112416_create_category_table', 1),
(10, '2020_03_11_044608_create_project_table', 1),
(11, '2020_03_11_054951_create_our_team_table', 1),
(12, '2020_03_12_090254_create_trix_rich_texts_table', 1),
(13, '2020_03_15_081810_create_message_table', 1),
(14, '2020_03_15_103625_create_contact_table', 1),
(15, '2020_03_18_054835_create_about_table', 1),
(16, '2020_03_18_085022_create_client_table', 1),
(17, '2020_03_18_105447_create_newsletter_table', 1),
(18, '2020_03_19_053015_create_blog_categories_table', 1),
(19, '2020_03_19_054016_create_blogs_table', 1),
(20, '2020_09_15_073337_create_solutions_table', 2),
(21, '2020_09_22_110251_create_galleries_table', 3),
(22, '2020_09_22_114050_create_partners_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'jidyg@mailinator.com', '2020-09-15 20:59:40', '2020-09-15 20:59:40'),
(2, 'wexaqybugu@mailinator.com', '2020-09-15 21:21:59', '2020-09-15 21:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objective`
--

INSERT INTO `objective` (`id`, `header`, `description`, `faq`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Our Objective', '<p>Before you create an ad, first consider what your business goals are. It\'s important to know what you want to achieve in order to choose the right objective. Your advertising objective is what you want people to do when they see your ads. For example, if you want to show your website to people interested in your business, you can create ads that encourage people to visit your website. Below are the three broader categories, or goals, that your objectives</p>', 'Ask any Query: 01849609902', 'uploads/GfDTTCsQCWPXdDFVRq0WEsgkO0Od8ZpfHBUjgVbA.jpeg', NULL, '2020-09-15 17:36:23');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `info` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `created_at`, `updated_at`, `info`) VALUES
(1, '2020-09-22 15:49:06', '2020-09-22 15:49:06', 'Omega Micro Services\r\nUSA');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `porject_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `created_at`, `updated_at`, `project_name`, `porject_description`, `image`) VALUES
(1, '2020-09-24 20:24:22', '2020-09-24 20:24:22', 'Solar panel installation', 'We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.', 'uploads/v0JSWruqlXEvshN7ra4NgjD1hi8nEYvkluWpFTE9.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_lists`
--

CREATE TABLE `pricing_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pricing_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `category_id`, `slug`, `header`, `description`, `client_name`, `location`, `year`, `value`, `link`, `thumbnail`, `image`, `created_at`, `updated_at`) VALUES
(2, NULL, 'solar-camera', 'Solar camera', '<p>S60 outdoor security camera upgraded with new App Soliom+; Scan the QR code to pair security camera to your phone and all live view or motion activated videos saved to micro sd card and cloud storage could be replayed directly in the app.One month free trial for Cloud storage. Soliom S60 security camera outdoor comes with larger solar panel and a built-in 4000mah battery,be sure to expose the solar camera in direct sunlight and install the outdoor camera within your house Wi-FI range for a smoother live view. Adopting new motion detection technology to reduce false alerts, S60 wireless security camera system will send a notification to your smartphone when motion is triggered and record a 10s video clip into the cloud and memory card. Using the refined 5 layers of glass lens and high quality LED lights enhance the night vision up to 30ft. The outdoor camera wireless is 100% wire-free and easy to install,use Soliom+ app to monitor your home yard entrance, garage, office, garden remotely,and clear two-way talk lets you hear and speak to anyone who is within its range.The wifi camera only work with 802.11 b/g/n frequency band 2.4G Wi-Fi. Not work with 802.11 ac or ax 5G or higher frequency band. The security cameras made from anti-corrosion material and the new rust-proof bracket.Upgraded structure of true IP66 weatherproof grade to stand up to any extreme weather conditions outside.Reliable cameras for home security</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/RGDFGyiToDfmQLFgTRJIy9zornbV8GfhdloWOQWP.jpeg', NULL, '2020-09-22 19:49:50', '2020-09-22 19:49:50'),
(3, NULL, 'solar-panel', 'Solar panel', '<p>Founded in California in 2012, Jackery specializes in providing outdoor green power solutions for explorers. Jackery portable power station, power outdoors. QUIET GENERATOR &amp; ECO-FRIENDLY CLEAN POWER: Build up your Portable-Solar-Generator System together with Jackery Solar Saga 100W and Jackery Explorer 160/240/500/1000 power station (sold separately). Ideally suited for the outdoor life and even unexpected power outages. HIGH CONVERSION EFFICIENCY SOLAR GENERATOR: High conversion efficiency up to 23%, generate more energy and perform better than conventional panels in hot weather. SOLAR CHARGER WITH USB OUTPUTS: Equipped with 1* USB-C(5V,3A) output port and 1* USB-A(5V, 2.4A) output port, charging multiple small devices at the same time, including smartphones, tablets, digital cameras and more. Please note that USB-C port can not support PD charging. WHAT\'S INCLUDED: 1*Jackery SolarSaga 100W Solar Panel.</p>', NULL, NULL, NULL, '20', NULL, 'uploads/SWAvII36BKT6rVo23t2Rlbp3yvJHJ7rIxl4uMGUU.jpeg', NULL, '2020-09-22 19:52:55', '2020-09-22 19:52:55'),
(4, NULL, 'solar-batteries', 'Solar batteries', '<p>Maintenance Free: Manufactured with thick absorbent glass mat (AGM) separators and advanced valve regulated technology, Renogy Deep Cycle AGM Batteries save you from acid leakage and frequent maintenance Excellent Discharge Performance: Proprietary quinary alloy plates and specially treated plate grids enable low internal resistance and high discharge currents of up to 10 times the battery rated capacity Long Shelf Life: Made of high purity materials, Renogy Deep Cycle AGM Batteries reduce the monthly self-discharge rate below 3% at 77℉ (25℃), which is 5 times lower than their flooded counterparts Wide Operation Temperature Range: Improved electrolyte formula ensures stable battery capacity and outstanding discharge performance at low temperatures below 32℉ (0℃)</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/ynSO2nZmWeSr2ypuhgXlPOd3dxRwEmrDZCWzFcSi.jpeg', NULL, '2020-09-22 19:54:28', '2020-09-22 19:54:28'),
(5, NULL, 'solar-inverter', 'Solar inverter', '<p>[5000WATT BLUETOOTH POWER INVERTER]Provides 5000 watts continuous power, 10000 watts surge power to charge your multiple electronic devices on the go [MULTI-PURPOSE CHARGING] Four AC outlets and dual USB charging ports perfect for varieties of electric conversion,such as water dispensers,air compressor,refrigerator,coffer maker,electric motor saw,etc [UNIQUE DESIGN]Design with bluetooth wireless remote control system,you can download affiliated APP to control inverter within 33ft single range. [INTELLIGENT TEMPERATURE CONTROL]Built-in cooling fan only starts working when temperature is over 104℉ and 6 internal fuses makes it safer when using the Power Inverter, ideal for use on road, at campsites, remote job sites or anywhere AC power is needed [MULTI-PROTECTION]This power inverter has over voltage, overload, over-current, under-voltage, overheating, short circuit protection</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/KezNHPIDdCnhiKXI5m6DNjBuEKlF7Ryqj7ygsMPn.jpeg', NULL, '2020-09-22 19:56:23', '2020-09-22 19:56:23'),
(6, NULL, 'solar-street-light', 'Solar Street Light', '<p>120Wh 37.5Ah 3.2V – 120Wh=12v * 10Ah=3.2v * 37.5Ah, And Solar panel efficiency up to 22%, providing a long working time about 9H in 2505Lm full bright and 3 continuous rainly days with sensor. ✅ HIGH LIGHT EFFICACY – Rated power 15w, ultra-bright 2500Lm (167Lm/W), 5000k better to eyes, a great performance of illumination. Recommended installation heigh 9-17ft. ✅ PIR SENSOR BUILD-IN – Automatically turn on/off dusk to dawn, the light stay on all the time at night with 25% (625 lumens), activated by motion with full bright (2500 lumens) and last 20s when the object is out of detection. ✅ 3 WAYS TO INSTALL EASILY - Directly insert into the diameter 2～2.4 inches pole arm. Placed on diameter 2.4～3 inches pole and wall with the mount, and 0-180° rotation with the adaptor adjustable. (Pole is not included) - Turn the power switch (in the interface/port) on to charging several hours before installation. ✅ DESIGN DURABLE FOR LIFESPAN 5 YEARS – Anti-corrosion coating, Waterproof, Aluminum great heat dissipation. Ideal for light in street, garden, patio, yard, garage and parking etc. We provide all our customers with 3 full years Warranty.</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/zm7ZuUV6jANgpIPA0juCGktf9UaeIPRzD74UMfCp.jpeg', NULL, '2020-09-22 19:57:19', '2020-09-22 19:57:19'),
(7, NULL, 'drones', 'Drones', '<p>The compact yet powerful Mavic Mini camera drone is the perfect creative companion, capturing your moments in a way that effortlessly elevates the ordinary Weighing less than 0.55lbs / 250 grams, Mavic Mini is almost as light as the average smartphone. In the United States and Canada, you can fly this camera drone without the need to register your drone with the government Mavic Mini supports 12MP aerial photos and 2.7K HD videos. A 3-axis motorized gimbal provides superior camera stability and ensures clear, Ultra-smooth footage Mavic Mini’s weight allows it to stay in the air longer than similar consumer FlyCams on the market. Enjoy up to 30 minutes of flight time with a fully-charged battery DJI Fly App requires iOS v10.0, Android v6.0 or above. Compatible devices include: iPhone 11 Pro Max, 11 Pro, 11, XS Max, XS, XR, X, 8 Plus, 8, 7 Plus, 7, 6s Plus, 6s, 6 Plus, 6, Samsung Galaxy S10+, S10, S9+, S9 , S8+, S8, S7 edge, S7, S6, Note9, Note8, Huawei P30 Pro, P30, P20, P10, Mate 20 Pro, Mate 10, nova 5, nova 4, nova 3e, nova 2, Honor 8X, 10, 9, 20 Pro, Magic 2, Mi 8, MIX 2S, MIX 2, Redmi Note 5, Oppo Find X, R15, Vivo NEX, X27, X21, X20A, OnePlus 7, 6T, 5, Pixel 3 XL, 2 XL, 2, LG V20, LG G6</p>', NULL, NULL, NULL, NULL, NULL, 'uploads/hdkqROwCoT8EaFdq2zZLLs6LQlZ2PWH32svdogxL.jpeg', NULL, '2020-09-22 19:58:04', '2020-09-22 19:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `shortDescription` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `header`, `slug`, `description`, `shortDescription`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Solar panel installation', 'solar-panel-installation', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/dKhdroiknEJgJVJFH3LzzTUnVDL51wEdtb2kV7EG.jpeg', '2020-09-15 17:26:41', '2020-09-22 19:41:42'),
(4, 'Program Management', 'program-management', '<h3><strong>Market Strategy</strong></h3><p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/jzpfSSKM611fMFnQNCpIWNUeLyrMthDSrLhKxJMV.jpeg', '2020-09-22 19:26:50', '2020-09-22 19:26:50'),
(5, 'Solar Inverter Instattalation', 'solar-inverter-instattalation', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/T76eD8gGe07HUiOFbYrvjekAHJSkhtlUFX7C6EVC.png', '2020-09-22 19:32:08', '2020-09-22 19:32:08'),
(6, 'Charge Controller Installation', 'charge-controller-installation', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/6fvWxMOGCkx1NNoua0t8nQxLpT0BJyFWWFRgM9Hl.jpeg', '2020-09-22 19:33:35', '2020-09-22 19:33:35'),
(7, 'Solar Battery Installation', 'solar-battery-installation', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/C9jfS0KfdJF9TFHGWzS8aWQIrSywyp0NxSW4bBhc.jpeg', '2020-09-22 19:35:06', '2020-09-22 19:35:06'),
(8, 'Security Systems Installation', 'security-systems-installation', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/vGUp7Gn9dpGdmnup77Gqi4OROqKrIbFZl2eeupiq.jpeg', '2020-09-22 19:36:31', '2020-09-22 19:36:31'),
(9, 'Solar Street Light Installation', 'solar-street-light-installation', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/9o4eendVVTD1AqQrLWkSMSV6RGyTK5PJGQ3jqTB9.jpeg', '2020-09-22 19:37:38', '2020-09-22 19:37:38'),
(10, 'Drone Deployment For Security, Delivery, Healthcare And Agricultural Usage', 'drone-deployment-for-security-delivery-healthcare-and-agricultural-usage', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', 'uploads/SfziR5OidMs1uemnjl8rqdlLFWImVNOjKZNchQT8.jpeg', '2020-09-22 19:38:51', '2020-09-22 19:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_large_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_small_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_large_title`, `slider_small_title`, `video_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Solar panel installation', 'Welcome to Omega Micro Alliance', 'https://www.youtube.com/watch?v=MmHAbRWdCac', 'uploads/inq8odtjTjkyVhj2ai4N7bZkp0N5r0Rq3g4ssuLq.jpeg', '2020-09-15 17:21:50', '2020-09-22 22:12:20'),
(2, 'Program Management', 'Welcome to Omega Micro Alliance', 'In nobis eveniet vo', 'uploads/x4BWtsEV19FbCbAkA4IJu8Ej43KMChnHzyUHLtb5.jpeg', '2020-09-20 21:44:24', '2020-09-22 22:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `header` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `created_at`, `updated_at`, `header`, `slug`, `shortDescription`, `description`, `image`) VALUES
(5, '2020-09-22 20:05:34', '2020-09-22 20:05:34', 'Customized Solar Solution For Your Project And Company', 'customized-solar-solution-for-your-project-and-company', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'uploads/WggEBDKkiJCuAFmWydnyyi5U0ZWMsmmv5FGgGWVQ.jpeg'),
(6, '2020-09-22 20:06:41', '2020-09-22 20:06:41', 'Customizes Drone Solution For You Company And Project', 'customizes-drone-solution-for-you-company-and-project', 'Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting services, to assist in delivering high performance trading and settlement capabilities across all asset classes. This includes strategy, architecture design, operating model work, process improvement, systems building and trading package integration as well as application management, application outsourcing and business process outsourcing.', '<p>Lab that keep us at the forefront of innovation. Our Trading helps clients run and transform their front, middle and back-office trading operations. We provide buy-side, sell-side and market infrastructure firms with a full-service offering, including systems integration and technology consulting Our Trading helps clients run and transform their front, middle and back-office trading operations.</p><h3><strong>Charts Groth</strong></h3><p>consist of a series of percentile curves that illustrate the distribution of selected body measurements in children. Pediatric growth charts have been used by pediatricians, nurses, and parents to track the growth of infants, children, and adolescents in the United States since 1977.</p><figure class=\"image\"><img src=\"file:///C:/Users/Naim/Desktop/Solva/Slova/solva/images/resource/chart.png\" alt=\"\"></figure><h3><strong>We Make Creative Solutions</strong></h3><p>We have a long and proud history givin emphasis to environment social and economic outcomes to deliver places that respond.</p>', 'uploads/FrdZZAQo8IEzjAdfQgTHoUuvwBlLluqrR4lykTe4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `created_at`, `updated_at`, `text`) VALUES
(1, '2020-09-24 18:56:31', '2020-09-24 18:56:31', '<p>tescriptiion</p>');

-- --------------------------------------------------------

--
-- Table structure for table `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int(10) UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'omicrodigital@gmail.com', NULL, '$2y$10$hKNgEgT6GIFptClT9dBVW.L4AM4n74TtHUaMCUQ7WNtJvLjzm0q.2', NULL, NULL, NULL),
(2, 'Mehedi Hasan Sagor', 'admin', 'mehedihasansagor.cse@gmail.com', NULL, '$2y$10$HbSj9.xhkPsjTi8rk7G/DezHgLsjpZyIXkUj/ga5NhMu0qd6Ofomy', 'f9YSdU5BztfkcJPQwcTCJkOkx4tuG0h23wXxuCFB2CAdL9NEqPHuHmKpSfwc', NULL, '2020-09-24 22:06:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_blog_category_id_foreign` (`blog_category_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_email_unique` (`email`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_lists`
--
ALTER TABLE `pricing_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_category_id_foreign` (`category_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_type_model_id_index` (`model_type`,`model_id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_lists`
--
ALTER TABLE `pricing_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_blog_category_id_foreign` FOREIGN KEY (`blog_category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
