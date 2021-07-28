-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 21, 2021 at 03:40 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cirp`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_qualifications`
--

CREATE TABLE `academic_qualifications` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `a_year` varchar(255) DEFAULT NULL,
  `a_qulification` varchar(255) DEFAULT NULL,
  `a_insitute` varchar(255) DEFAULT NULL,
  `a_awarding_body` varchar(255) DEFAULT NULL,
  `a_country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'CBcwttqYiwyJqBfuQ7CQlclczhRZPAMe', 1, '2021-03-20 15:37:20', '2021-03-20 15:37:20', '2021-03-20 15:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ad_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ad_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ad_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ad_locations`
--

CREATE TABLE `ad_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `country_of_residence` varchar(255) DEFAULT NULL,
  `choiceanimals` varchar(255) DEFAULT NULL,
  `whichdog` varchar(255) DEFAULT NULL,
  `whichcat` varchar(255) DEFAULT NULL,
  `sectionA_date_expiry` date DEFAULT NULL,
  `current_visa_status` varchar(255) DEFAULT NULL,
  `sectionB_title` varchar(255) DEFAULT NULL,
  `sectionB_surname_with_initials` varchar(255) DEFAULT NULL,
  `sectionB_first_name` varchar(255) DEFAULT NULL,
  `sectionB_name_to_be_used` varchar(255) DEFAULT NULL,
  `sectionB_date_of_birth` date DEFAULT NULL,
  `sectionB_gender` varchar(50) DEFAULT NULL,
  `sectionB_address` varchar(255) DEFAULT NULL,
  `full_sesctionB_land_phone` varchar(255) DEFAULT NULL,
  `full_sesctionB_mobile_phone` varchar(255) DEFAULT NULL,
  `sectionB_email` varchar(255) DEFAULT NULL,
  `sectionC_disability` varchar(50) DEFAULT NULL,
  `sectionC_disability_reason` text DEFAULT NULL,
  `sectionC_medical` varchar(50) DEFAULT NULL,
  `sectionC_medical_reason` text DEFAULT NULL,
  `sectionC_medical_information` text DEFAULT NULL,
  `sectionC_blood_group` varchar(20) DEFAULT NULL,
  `sectionC_criminal` varchar(50) DEFAULT NULL,
  `sectionC_criminal_description` text DEFAULT NULL,
  `sectionD_contact_person` varchar(255) DEFAULT NULL,
  `full_sesctionD_land_phone` varchar(50) DEFAULT NULL,
  `full_sesctionD_mobile_phone` varchar(50) DEFAULT NULL,
  `sectionD_relationship` varchar(50) DEFAULT NULL,
  `sectionE_education` varchar(50) DEFAULT NULL,
  `sectionF_other_qualification` varchar(255) DEFAULT NULL,
  `sectionG_language` varchar(255) DEFAULT NULL,
  `sectionI_cource_title` varchar(255) DEFAULT NULL,
  `sectionI_time` varchar(255) DEFAULT NULL,
  `sectionI_days` varchar(255) DEFAULT NULL,
  `sectionI_intake` varchar(255) DEFAULT NULL,
  `sectionI_year` varchar(255) DEFAULT NULL,
  `sectionJ_payment_plan` varchar(255) DEFAULT NULL,
  `sectionK_furthur` varchar(255) DEFAULT NULL,
  `sectionK_other` varchar(255) DEFAULT NULL,
  `bank_slip` text DEFAULT NULL,
  `certified_copies` text DEFAULT NULL,
  `english_proof` text DEFAULT NULL,
  `signed` text DEFAULT NULL,
  `passport_nic` text DEFAULT NULL,
  `photograph` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `language`, `slug`, `meta_description`, `meta_keywords`, `order`, `created_at`, `updated_at`) VALUES
(1, 'World', 'en', 'world', NULL, NULL, 1, '2021-03-20 15:37:29', '2021-03-20 15:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countriy_trans_options`
--

CREATE TABLE `countriy_trans_options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countriy_trans_options`
--

INSERT INTO `countriy_trans_options` (`id`, `name`) VALUES
(1, 'Psychology Transfer Options - United Kingdom | Australia\r\n'),
(2, 'Business Transfer Options - New Zealand | Australia\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_des` text NOT NULL,
  `progression` varchar(255) NOT NULL,
  `transferoptions` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `studylevel` varchar(255) NOT NULL,
  `semesters` varchar(255) DEFAULT NULL,
  `rqfcredits` varchar(255) DEFAULT NULL,
  `intakes` varchar(255) DEFAULT NULL,
  `c_image` varchar(255) DEFAULT NULL,
  `entry_requirements` text DEFAULT NULL,
  `learning_support` text DEFAULT NULL,
  `further_study` text DEFAULT NULL,
  `employability` text DEFAULT NULL,
  `fees_funding` text DEFAULT NULL,
  `deliver` varchar(255) NOT NULL,
  `field` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `short_des`, `progression`, `transferoptions`, `duration`, `delivery`, `image`, `slug`, `description`, `studylevel`, `semesters`, `rqfcredits`, `intakes`, `c_image`, `entry_requirements`, `learning_support`, `further_study`, `employability`, `fees_funding`, `deliver`, `field`, `updated_at`, `created_at`) VALUES
(1, 'Diploma of Higher Education in Psychology', 'If you are fascinated by the human mind and would like to explore the different areas of functioning of the brain and the mind, this is the ideal program for you. Upon completion  you are able to branch in to any area in psychology. So if you are not certain about what kind of a profession in psychology you would like to get in to, this will be your opportunity to cover all core areas. Check out the modules to get a better idea.', 'BSc / BA (Hons) Psychology', 'UK, Australia', '02 Years', 'Full Time / Part Time', 'theme/img/courses/psychology.png', 'Diploma-of-Higher-Education-in-Psychology', '<p>This course is designed in order to provide the students with an in-depth knowledge in the core areas of psychology that is essential to continue their education or training into core professions in the ﬁeld of Psychology. For students who are planning to become Clinical psychologists, completing this course and a BSc (Hons) in Psychology is a must. Furthermore, the DHEP is aimed at equipping students with a range of transferable skills that could be applied in many ﬁelds to understand, predict and inﬂuence human behaviour.</p>', 'Undergraduate', '6', '240', 'February & September', 'yes', '<p style=\"font-weight: 900px; color: #000;\">Academic Qualifications</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">Minimum Two (02) passes at GCE A/L in any stream or passing an equivalent Secondary School after a minimum 12 years of school education, qualification recognized by the government of the particular country</li>\r\n<li style=\"list-style: none; text-align: justify;\">Or a Foundation Degree/ Diploma that meets the expected criteria of the academic board, awarded by a recognized awarding body or institution.</li>\r\n<li style=\"list-style: none; text-align: justify;\">Students over 20 years of age who do not meet the above criteria could consult a student adviser to inquire about the alternative eligibility criteria for mature and working students.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"font-weight: 900px; color: #000;\">Language Proficiency</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">All our programs are delivered in English and a higher level of language proficiency is required to successfully complete these qualifications.</li>\r\n<li style=\"list-style: none; text-align: justify;\">Following methods are utilized to ensure that you meet the above language proficient criteria : Have obtained IELTS overall 6.0 with no less than 5.5 in each element Or Pass the English Language Proficiency Test conducted by CIRP at the interview (free of charge)</li>\r\n</ul>\r\n<p>&nbsp;</p>', '<p style=\"font-weight: 900px; color: #000;\">Language Skills Support</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">Students who do not meet the Language Proficiency requirements are provided a free of change English Language Proficiency Development Course in order to support them to achieve the required level of proficiency.</li>\r\n<li style=\"list-style: none; text-align: justify;\">All students have access to the Language Proficiency Development Centre throughout their period of study to obtain small group or one on one support for English.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"font-weight: 900px; color: #000;\">Academic Writing Skills</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">Academic writing skills are essential to successfully complete different types of assessment you may face. In the beginning of every program students are provided an Academic Writing &amp; Presentation Skills Course where they improve skills on referencing, in text citations and other academic and scientific communication skills.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"font-weight: 900px; color: #000;\">Mathematics Support</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">All Bachelor&rsquo;s degrees awarded by any reputed university include research method and basic statistics. For students who may struggle with maths, CIRP offers support through a Mathematics Help Centre throughout their period of study to obtain small group or one on one support for Maths.</li>\r\n</ul>\r\n<p>&nbsp;</p>', NULL, NULL, '<p>Course Fee may vary based on the intake. You could download the course fee list for the current intake Here.</p>\r\n<p style=\"font-weight: 900px; color: #000;\">Funding through banks</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">Many leading banks in Sri Lanka have collaborated with CIRP to offer various forms of funding options for Sri Lankan students including student loans, credit card installments ect. . You may find out the details of the banks Here or speak to a student adviser to get more information.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"font-weight: 900px; color: #000;\">Scholarships</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">CIRP offers a range of scholarships to both Sri Lankan and international students. You may find out the details of the scholarships Here or speak to a student adviser to get more information.</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p style=\"font-weight: 900px; color: #000;\">Discounts</p>\r\n<p class=\"mb-0\">&nbsp;</p>\r\n<ul>\r\n<li style=\"list-style: none; text-align: justify;\">Students are also offered various discounts. You may find out the details of the discounts relevant to the current intake Here or speak to a student adviser to get more information.</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'On Site', 'Psychology', '2021-04-22 17:19:53', NULL),
(2, 'Diploma of Higher Education in Psychology & Business', 'Millions of Business graduates are passing out of universities every year making the competition to find a good job intense by the day. Most jobs in the organizations are replaced by software and apps . Become a master in influencing the human mind that the machines will not be able to do. Start your path to become a business leader, corporate trainer or consultant. Check out the modules to get a better idea.', 'BSc /BA Psychology / Business', 'UK, Australia', '02 Years', 'Full Time / Part Time\r\n', 'theme/img/courses/psychology & business.png', 'Diploma-of-Higher-Education-in-Psychology-&-Business', '', 'Undergraduate', NULL, NULL, NULL, 'theme/img/crs-logo3.png', NULL, NULL, NULL, NULL, NULL, 'On Site', '', NULL, NULL),
(3, 'Diploma of Higher Education in Psychology & Business', 'International Foundation is an ideal program for achievement driven, ambitious students who wish to take the advantage of starting their bachelor’s degree as early as possible. Upon completing the International Foundation program you are able to start your bachelor’s degree in Sri Lanka or transfer abroad to an international university.', 'BSc /BA Psychology / Business', 'UK, Australia', '02 Years', 'Full Time / Part Time\r\n', 'theme/img/1.png', 'International-Foundation', '<p class=\"pb-4\" style=\"text-align: justify;\">International Foundation is an ideal program for achievement driven, ambitious students who wish to take the advantage of starting their bachelor’s degree as early as possible. Upon completing the International Foundation program you are able to start your bachelor’s degree in Sri Lanka or transfer abroad to an international university.</p> <p style=\"text-align: justify;\">Our Foundation program is one of the very few Foundation programs recognized by the Tertiary and Vocational Education Commission (TVEC) of Sri Lanka and therefore endorsed by the government agencies when you apply for international universities. Students are able to select the elective subjects based on the degree that they wish to follow after the Foundation.</p>', 'Foundation', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 'On Site', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crons`
--

CREATE TABLE `crons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cron_for` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `electives`
--

CREATE TABLE `electives` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electives`
--

INSERT INTO `electives` (`id`, `course_id`, `name`, `credits`, `updated_at`, `created_at`) VALUES
(1, 1, 'Dynamic Business Environment', 15, '2021-04-22 17:41:59', NULL),
(2, 1, 'Employability & Self-development', 15, '2021-04-22 17:41:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_group`, `subject`, `template_body`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'registration', 'Registration successful', '<table id=\"backgroundTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td valign=\"top\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td width=\"600\" height=\"50\">&nbsp;</td></tr><tr><td style=\"color: #999999;\" width=\"600\" height=\"90\">{SITE_LOGO}</td></tr><tr><td style=\"background: whitesmoke; border: 1px solid #e0e0e0; font-family: Helvetica,Arial,sans-serif;\" valign=\"top\" bgcolor=\"whitesmoke\" width=\"600\" height=\"200\"><table style=\"margin-left: 15px;\" align=\"center\"><tbody><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr><tr><td width=\"560\"><h4>New Account</h4><p style=\"font-size: 12px; font-family: Helvetica,Arial,sans-serif;\">Hi {USERNAME},</p><p style=\"font-size: 12px; line-height: 20px; font-family: Helvetica,Arial,sans-serif;\">Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.<br /> To open your {SITE_NAME} homepage, please follow this link:<br /> <a style=\"color: #11a7db; text-decoration: none;\" href=\"{SITE_URL}\"><strong>{SITE_NAME} Account</strong></a><br /><br /> Link doesn\'t work? Copy the following link to your browser address bar:<br /><br />{SITE_URL}<br /><br /> Your username: {USERNAME}<br /> Your email address: {USER_EMAIL}<br /><br /><br />{SIGNATURE}</p></td></tr><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr></tbody></table></td></tr><tr><td width=\"600\" height=\"10\">&nbsp;</td></tr><tr><td align=\"right\">&nbsp;</td></tr></tbody></table></td></tr></tbody></table>', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(2, 'forgot_password', 'Forgot Password', '<table id=\"backgroundTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td valign=\"top\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td width=\"600\" height=\"50\">&nbsp;</td></tr><tr><td style=\"color: #999999;\" width=\"600\" height=\"90\">{SITE_LOGO}</td></tr><tr><td style=\"background: whitesmoke; border: 1px solid #e0e0e0; font-family: Helvetica,Arial,sans-serif;\" valign=\"top\" bgcolor=\"whitesmoke\" width=\"600\" height=\"200\"><table style=\"margin-left: 15px;\" align=\"center\"><tbody><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr><tr><td width=\"560\"><h4>New Password</h4><p style=\"font-size: 12px; line-height: 20px; font-family: Helvetica,Arial,sans-serif;\">Forgot your password, huh? No big deal.<br />To create a new password, just follow this link:<br /> <a style=\"color: #11a7db; text-decoration: none;\" href=\"{PASS_KEY_URL}\"><strong>Create new password</strong></a><br /><br /> Link doesn\'t work? Copy the following link to your browser address bar:<br /> {PASS_KEY_URL}<br /><br /> You received this email, because it was requested by a {SITE_NAME} user.This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.<br /><br />Thank you,<br /><br /> Best Regards,<br /> {SITE_NAME}</p></td></tr><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr></tbody></table></td></tr><tr><td width=\"600\" height=\"10\">&nbsp;</td></tr><tr><td align=\"right\"><span style=\"font-size: 10px; color: #999999; font-family: Helvetica,Arial,sans-serif;\">{SIGNATURE}</span></td></tr></tbody></table></td></tr></tbody></table>', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(3, 'activate_account', 'Activate Account', '<table id=\"backgroundTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td valign=\"top\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td width=\"600\" height=\"50\">&nbsp;</td></tr><tr><td style=\"color: #999999;\" width=\"600\" height=\"90\">{SITE_LOGO}</td></tr><tr><td style=\"background: whitesmoke; border: 1px solid #e0e0e0; font-family: Helvetica,Arial,sans-serif;\" valign=\"top\" bgcolor=\"whitesmoke\" width=\"600\" height=\"200\"><table style=\"margin-left: 15px;\" align=\"center\"><tbody><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr><tr><td width=\"560\"><h4>Activate Account</h4><p style=\"font-size: 12px; font-family: Helvetica,Arial,sans-serif;\">Hi {USERNAME},</p><p style=\"font-size: 12px; line-height: 20px; font-family: Helvetica,Arial,sans-serif;\">Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe. To verify your email address, please follow this link:<br /> <a style=\"color: #11a7db; text-decoration: none;\" href=\"{ACTIVATE_URL}\"><strong>Complete Registration</strong></a><br /><br /> Link doesn\'t work? Copy the following link to your browser address bar:<br /> {ACTIVATE_URL}<br /><br /> Your username: {USERNAME}<br /> Your email address: {USER_EMAIL}<br /> Your password: {PASSWORD}<br /><br /><br /> {SIGNATURE}</p></td></tr><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr></tbody></table></td></tr><tr><td width=\"600\" height=\"10\">&nbsp;</td></tr><tr><td align=\"right\">&nbsp;</td></tr></tbody></table></td></tr></tbody></table><p>&nbsp;</p>', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(4, 'reset_password', 'Reset Password', '<table id=\"backgroundTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td valign=\"top\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td width=\"600\" height=\"50\">&nbsp;</td></tr><tr><td style=\"color: #999999;\" width=\"600\" height=\"90\">{SITE_LOGO}</td></tr><tr><td style=\"background: whitesmoke; border: 1px solid #e0e0e0; font-family: Helvetica,Arial,sans-serif;\" valign=\"top\" bgcolor=\"whitesmoke\" width=\"600\" height=\"200\"><table style=\"margin-left: 15px;\" align=\"center\"><tbody><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr><tr><td width=\"560\"><h4>New Password</h4><p style=\"font-size: 12px; font-family: Helvetica,Arial,sans-serif;\">Hi {USERNAME},</p><p style=\"font-size: 12px; line-height: 20px; font-family: Helvetica,Arial,sans-serif;\">You have changed your password.<br />Please, keep it in your records so you don\'t forget it:<br />Your username: {USERNAME}<br />Your email address: {USER_EMAIL}<br />Your new password: {NEW_PASSWORD}<br /><br /><br /> Best Regards,<br /> {SITE_NAME}</p></td></tr><tr><td width=\"560\" height=\"10\">&nbsp;</td></tr></tbody></table></td></tr><tr><td width=\"600\" height=\"10\">&nbsp;</td></tr><tr><td align=\"right\"><span style=\"font-size: 10px; color: #999999; font-family: Helvetica,Arial,sans-serif;\">{SIGNATURE}</span></td></tr></tbody></table></td></tr></tbody></table>', 'en', '2021-03-20 15:37:29', '2021-03-20 15:37:29');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flag_icons`
--

CREATE TABLE `flag_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flag_icons`
--

INSERT INTO `flag_icons` (`id`, `icon_class`, `title`, `created_at`, `updated_at`) VALUES
(1, 'flag-icon flag-icon-ad', 'ad', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(2, 'flag-icon flag-icon-ae', 'ae', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(3, 'flag-icon flag-icon-af', 'af', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(4, 'flag-icon flag-icon-ag', 'ag', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(5, 'flag-icon flag-icon-ai', 'ai', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(6, 'flag-icon flag-icon-al', 'al', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(7, 'flag-icon flag-icon-am', 'am', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(8, 'flag-icon flag-icon-ao', 'ao', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(9, 'flag-icon flag-icon-aq', 'aq', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(10, 'flag-icon flag-icon-ar', 'ar', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(11, 'flag-icon flag-icon-as', 'as', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(12, 'flag-icon flag-icon-at', 'at', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(13, 'flag-icon flag-icon-au', 'au', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(14, 'flag-icon flag-icon-aw', 'aw', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(15, 'flag-icon flag-icon-ax', 'ax', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(16, 'flag-icon flag-icon-az', 'az', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(17, 'flag-icon flag-icon-ba', 'ba', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(18, 'flag-icon flag-icon-bb', 'bb', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(19, 'flag-icon flag-icon-bd', 'bd', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(20, 'flag-icon flag-icon-be', 'be', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(21, 'flag-icon flag-icon-bf', 'bf', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(22, 'flag-icon flag-icon-bg', 'bg', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(23, 'flag-icon flag-icon-bh', 'bh', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(24, 'flag-icon flag-icon-bi', 'bi', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(25, 'flag-icon flag-icon-bj', 'bj', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(26, 'flag-icon flag-icon-bl', 'bl', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(27, 'flag-icon flag-icon-bm', 'bm', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(28, 'flag-icon flag-icon-bn', 'bn', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(29, 'flag-icon flag-icon-bo', 'bo', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(30, 'flag-icon flag-icon-bq', 'bq', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(31, 'flag-icon flag-icon-br', 'br', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(32, 'flag-icon flag-icon-bs', 'bs', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(33, 'flag-icon flag-icon-bt', 'bt', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(34, 'flag-icon flag-icon-bv', 'bv', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(35, 'flag-icon flag-icon-bw', 'bw', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(36, 'flag-icon flag-icon-by', 'by', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(37, 'flag-icon flag-icon-bz', 'bz', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(38, 'flag-icon flag-icon-ca', 'ca', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(39, 'flag-icon flag-icon-cc', 'cc', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(40, 'flag-icon flag-icon-cd', 'cd', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(41, 'flag-icon flag-icon-cf', 'cf', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(42, 'flag-icon flag-icon-cg', 'cg', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(43, 'flag-icon flag-icon-ch', 'ch', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(44, 'flag-icon flag-icon-ci', 'ci', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(45, 'flag-icon flag-icon-ck', 'ck', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(46, 'flag-icon flag-icon-cl', 'cl', '2021-03-20 15:37:31', '2021-03-20 15:37:31'),
(47, 'flag-icon flag-icon-cm', 'cm', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(48, 'flag-icon flag-icon-cn', 'cn', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(49, 'flag-icon flag-icon-co', 'co', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(50, 'flag-icon flag-icon-cr', 'cr', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(51, 'flag-icon flag-icon-cu', 'cu', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(52, 'flag-icon flag-icon-cv', 'cv', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(53, 'flag-icon flag-icon-cw', 'cw', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(54, 'flag-icon flag-icon-cx', 'cx', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(55, 'flag-icon flag-icon-cy', 'cy', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(56, 'flag-icon flag-icon-cz', 'cz', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(57, 'flag-icon flag-icon-de', 'de', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(58, 'flag-icon flag-icon-dj', 'dj', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(59, 'flag-icon flag-icon-dk', 'dk', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(60, 'flag-icon flag-icon-dm', 'dm', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(61, 'flag-icon flag-icon-do', 'do', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(62, 'flag-icon flag-icon-dz', 'dz', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(63, 'flag-icon flag-icon-ec', 'ec', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(64, 'flag-icon flag-icon-ee', 'ee', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(65, 'flag-icon flag-icon-eg', 'eg', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(66, 'flag-icon flag-icon-eh', 'eh', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(67, 'flag-icon flag-icon-er', 'er', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(68, 'flag-icon flag-icon-es', 'es', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(69, 'flag-icon flag-icon-et', 'et', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(70, 'flag-icon flag-icon-fi', 'fi', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(71, 'flag-icon flag-icon-fj', 'fj', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(72, 'flag-icon flag-icon-fk', 'fk', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(73, 'flag-icon flag-icon-fm', 'fm', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(74, 'flag-icon flag-icon-fo', 'fo', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(75, 'flag-icon flag-icon-fr', 'fr', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(76, 'flag-icon flag-icon-ga', 'ga', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(77, 'flag-icon flag-icon-gb', 'gb', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(78, 'flag-icon flag-icon-gd', 'gd', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(79, 'flag-icon flag-icon-ge', 'ge', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(80, 'flag-icon flag-icon-gf', 'gf', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(81, 'flag-icon flag-icon-gg', 'gg', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(82, 'flag-icon flag-icon-gh', 'gh', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(83, 'flag-icon flag-icon-gi', 'gi', '2021-03-20 15:37:32', '2021-03-20 15:37:32'),
(84, 'flag-icon flag-icon-gl', 'gl', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(85, 'flag-icon flag-icon-gm', 'gm', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(86, 'flag-icon flag-icon-gn', 'gn', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(87, 'flag-icon flag-icon-gp', 'gp', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(88, 'flag-icon flag-icon-gq', 'gq', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(89, 'flag-icon flag-icon-gr', 'gr', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(90, 'flag-icon flag-icon-gs', 'gs', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(91, 'flag-icon flag-icon-gt', 'gt', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(92, 'flag-icon flag-icon-gu', 'gu', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(93, 'flag-icon flag-icon-gw', 'gw', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(94, 'flag-icon flag-icon-gy', 'gy', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(95, 'flag-icon flag-icon-hk', 'hk', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(96, 'flag-icon flag-icon-hm', 'hm', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(97, 'flag-icon flag-icon-hn', 'hn', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(98, 'flag-icon flag-icon-hr', 'hr', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(99, 'flag-icon flag-icon-ht', 'ht', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(100, 'flag-icon flag-icon-hu', 'hu', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(101, 'flag-icon flag-icon-id', 'id', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(102, 'flag-icon flag-icon-ie', 'ie', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(103, 'flag-icon flag-icon-il', 'il', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(104, 'flag-icon flag-icon-im', 'im', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(105, 'flag-icon flag-icon-in', 'in', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(106, 'flag-icon flag-icon-io', 'io', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(107, 'flag-icon flag-icon-iq', 'iq', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(108, 'flag-icon flag-icon-ir', 'ir', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(109, 'flag-icon flag-icon-is', 'is', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(110, 'flag-icon flag-icon-it', 'it', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(111, 'flag-icon flag-icon-je', 'je', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(112, 'flag-icon flag-icon-jm', 'jm', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(113, 'flag-icon flag-icon-jo', 'jo', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(114, 'flag-icon flag-icon-jp', 'jp', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(115, 'flag-icon flag-icon-ke', 'ke', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(116, 'flag-icon flag-icon-kg', 'kg', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(117, 'flag-icon flag-icon-kh', 'kh', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(118, 'flag-icon flag-icon-ki', 'ki', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(119, 'flag-icon flag-icon-km', 'km', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(120, 'flag-icon flag-icon-kn', 'kn', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(121, 'flag-icon flag-icon-kp', 'kp', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(122, 'flag-icon flag-icon-kr', 'kr', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(123, 'flag-icon flag-icon-kw', 'kw', '2021-03-20 15:37:33', '2021-03-20 15:37:33'),
(124, 'flag-icon flag-icon-ky', 'ky', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(125, 'flag-icon flag-icon-kz', 'kz', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(126, 'flag-icon flag-icon-la', 'la', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(127, 'flag-icon flag-icon-lb', 'lb', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(128, 'flag-icon flag-icon-lc', 'lc', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(129, 'flag-icon flag-icon-li', 'li', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(130, 'flag-icon flag-icon-lk', 'lk', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(131, 'flag-icon flag-icon-lr', 'lr', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(132, 'flag-icon flag-icon-ls', 'ls', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(133, 'flag-icon flag-icon-lt', 'lt', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(134, 'flag-icon flag-icon-lu', 'lu', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(135, 'flag-icon flag-icon-lv', 'lv', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(136, 'flag-icon flag-icon-ly', 'ly', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(137, 'flag-icon flag-icon-ma', 'ma', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(138, 'flag-icon flag-icon-mc', 'mc', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(139, 'flag-icon flag-icon-md', 'md', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(140, 'flag-icon flag-icon-me', 'me', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(141, 'flag-icon flag-icon-mf', 'mf', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(142, 'flag-icon flag-icon-mg', 'mg', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(143, 'flag-icon flag-icon-mh', 'mh', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(144, 'flag-icon flag-icon-mk', 'mk', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(145, 'flag-icon flag-icon-ml', 'ml', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(146, 'flag-icon flag-icon-mm', 'mm', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(147, 'flag-icon flag-icon-mn', 'mn', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(148, 'flag-icon flag-icon-mo', 'mo', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(149, 'flag-icon flag-icon-mp', 'mp', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(150, 'flag-icon flag-icon-mq', 'mq', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(151, 'flag-icon flag-icon-mr', 'mr', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(152, 'flag-icon flag-icon-ms', 'ms', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(153, 'flag-icon flag-icon-mt', 'mt', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(154, 'flag-icon flag-icon-mu', 'mu', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(155, 'flag-icon flag-icon-mv', 'mv', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(156, 'flag-icon flag-icon-mw', 'mw', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(157, 'flag-icon flag-icon-mx', 'mx', '2021-03-20 15:37:34', '2021-03-20 15:37:34'),
(158, 'flag-icon flag-icon-my', 'my', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(159, 'flag-icon flag-icon-mz', 'mz', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(160, 'flag-icon flag-icon-na', 'na', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(161, 'flag-icon flag-icon-nc', 'nc', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(162, 'flag-icon flag-icon-ne', 'ne', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(163, 'flag-icon flag-icon-nf', 'nf', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(164, 'flag-icon flag-icon-ng', 'ng', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(165, 'flag-icon flag-icon-ni', 'ni', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(166, 'flag-icon flag-icon-nl', 'nl', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(167, 'flag-icon flag-icon-no', 'no', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(168, 'flag-icon flag-icon-np', 'np', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(169, 'flag-icon flag-icon-nr', 'nr', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(170, 'flag-icon flag-icon-nu', 'nu', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(171, 'flag-icon flag-icon-nz', 'nz', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(172, 'flag-icon flag-icon-om', 'om', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(173, 'flag-icon flag-icon-pa', 'pa', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(174, 'flag-icon flag-icon-pe', 'pe', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(175, 'flag-icon flag-icon-pf', 'pf', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(176, 'flag-icon flag-icon-pg', 'pg', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(177, 'flag-icon flag-icon-ph', 'ph', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(178, 'flag-icon flag-icon-pk', 'pk', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(179, 'flag-icon flag-icon-pl', 'pl', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(180, 'flag-icon flag-icon-pm', 'pm', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(181, 'flag-icon flag-icon-pn', 'pn', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(182, 'flag-icon flag-icon-pr', 'pr', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(183, 'flag-icon flag-icon-ps', 'ps', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(184, 'flag-icon flag-icon-pt', 'pt', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(185, 'flag-icon flag-icon-pw', 'pw', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(186, 'flag-icon flag-icon-py', 'py', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(187, 'flag-icon flag-icon-qa', 'qa', '2021-03-20 15:37:35', '2021-03-20 15:37:35'),
(188, 'flag-icon flag-icon-re', 're', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(189, 'flag-icon flag-icon-ro', 'ro', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(190, 'flag-icon flag-icon-rs', 'rs', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(191, 'flag-icon flag-icon-ru', 'ru', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(192, 'flag-icon flag-icon-rw', 'rw', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(193, 'flag-icon flag-icon-sa', 'sa', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(194, 'flag-icon flag-icon-sb', 'sb', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(195, 'flag-icon flag-icon-sc', 'sc', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(196, 'flag-icon flag-icon-sd', 'sd', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(197, 'flag-icon flag-icon-se', 'se', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(198, 'flag-icon flag-icon-sg', 'sg', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(199, 'flag-icon flag-icon-sh', 'sh', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(200, 'flag-icon flag-icon-si', 'si', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(201, 'flag-icon flag-icon-sj', 'sj', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(202, 'flag-icon flag-icon-sk', 'sk', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(203, 'flag-icon flag-icon-sl', 'sl', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(204, 'flag-icon flag-icon-sm', 'sm', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(205, 'flag-icon flag-icon-sn', 'sn', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(206, 'flag-icon flag-icon-so', 'so', '2021-03-20 15:37:36', '2021-03-20 15:37:36'),
(207, 'flag-icon flag-icon-sr', 'sr', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(208, 'flag-icon flag-icon-ss', 'ss', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(209, 'flag-icon flag-icon-st', 'st', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(210, 'flag-icon flag-icon-sv', 'sv', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(211, 'flag-icon flag-icon-sx', 'sx', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(212, 'flag-icon flag-icon-sy', 'sy', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(213, 'flag-icon flag-icon-sz', 'sz', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(214, 'flag-icon flag-icon-tc', 'tc', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(215, 'flag-icon flag-icon-td', 'td', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(216, 'flag-icon flag-icon-tf', 'tf', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(217, 'flag-icon flag-icon-tg', 'tg', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(218, 'flag-icon flag-icon-th', 'th', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(219, 'flag-icon flag-icon-tj', 'tj', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(220, 'flag-icon flag-icon-tk', 'tk', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(221, 'flag-icon flag-icon-tl', 'tl', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(222, 'flag-icon flag-icon-tm', 'tm', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(223, 'flag-icon flag-icon-tn', 'tn', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(224, 'flag-icon flag-icon-to', 'to', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(225, 'flag-icon flag-icon-tr', 'tr', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(226, 'flag-icon flag-icon-tt', 'tt', '2021-03-20 15:37:37', '2021-03-20 15:37:37'),
(227, 'flag-icon flag-icon-tv', 'tv', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(228, 'flag-icon flag-icon-tw', 'tw', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(229, 'flag-icon flag-icon-tz', 'tz', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(230, 'flag-icon flag-icon-ua', 'ua', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(231, 'flag-icon flag-icon-ug', 'ug', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(232, 'flag-icon flag-icon-um', 'um', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(233, 'flag-icon flag-icon-us', 'us', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(234, 'flag-icon flag-icon-uy', 'uy', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(235, 'flag-icon flag-icon-uz', 'uz', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(236, 'flag-icon flag-icon-va', 'va', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(237, 'flag-icon flag-icon-vc', 'vc', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(238, 'flag-icon flag-icon-ve', 've', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(239, 'flag-icon flag-icon-vg', 'vg', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(240, 'flag-icon flag-icon-vi', 'vi', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(241, 'flag-icon flag-icon-vn', 'vn', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(242, 'flag-icon flag-icon-vu', 'vu', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(243, 'flag-icon flag-icon-wf', 'wf', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(244, 'flag-icon flag-icon-ws', 'ws', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(245, 'flag-icon flag-icon-ye', 'ye', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(246, 'flag-icon flag-icon-yt', 'yt', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(247, 'flag-icon flag-icon-za', 'za', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(248, 'flag-icon flag-icon-zm', 'zm', '2021-03-20 15:37:38', '2021-03-20 15:37:38'),
(249, 'flag-icon flag-icon-zw', 'zw', '2021-03-20 15:37:38', '2021-03-20 15:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `home_section`
--

CREATE TABLE `home_section` (
  `id` int(11) NOT NULL,
  `join_image` varchar(255) DEFAULT NULL,
  `intake1` varchar(255) NOT NULL,
  `intake1_sl` varchar(255) NOT NULL,
  `intake1_in` varchar(255) NOT NULL,
  `intake2` varchar(255) NOT NULL,
  `intake2_sl` varchar(255) NOT NULL,
  `intake2_in` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_section`
--

INSERT INTO `home_section` (`id`, `join_image`, `intake1`, `intake1_sl`, `intake1_in`, `intake2`, `intake2_sl`, `intake2_in`) VALUES
(1, 'theme/img/joinbeforeupdate/1626701173.png', '2021-05-12', '2021-05-11', '2021-05-21', '2021-09-16', '2021-09-28', '2021-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `og_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `big_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `big_image_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medium_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medium_image_two` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medium_image_three` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `disk`, `original_image`, `og_image`, `thumbnail`, `big_image`, `big_image_two`, `medium_image`, `medium_image_two`, `medium_image_three`, `small_image`, `created_at`, `updated_at`) VALUES
(1, 'local', 'images/20210329222831_original_14.webp', 'images/20210329222831_ogImage_38.png', 'images/20210329222831_thumbnail_100x100_25.webp', 'images/20210329222831_big_1080x1000_38.webp', 'images/20210329222831_big_730x400_4.webp', 'images/20210329222831_medium_258x215_3.webp', 'images/20210329222831_medium_350x190_21.webp', 'images/20210329222831_medium_460x350_43.webp', 'images/20210329222831_small_240x160_5.webp', '2021-03-29 22:28:32', '2021-03-29 22:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `inquires`
--

CREATE TABLE `inquires` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_direction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `status`, `icon_class`, `text_direction`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'active', 'flag-icon flag-icon-us', 'LTR', '2021-03-20 15:37:30', '2021-03-20 15:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `language_configs`
--

CREATE TABLE `language_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `script` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `native` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_configs`
--

INSERT INTO `language_configs` (`id`, `language_id`, `name`, `script`, `native`, `regional`, `created_at`, `updated_at`) VALUES
(1, 1, 'English', 'Latn', 'English', 'en_GB', '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(2, 2, 'Arabic', 'Arb', 'عربى', 'ar_AR', '2021-03-20 15:37:30', '2021-03-20 15:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `link` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `link`, `image`) VALUES
(2, 'https://aru.ac.uk/', 'theme/img/logo/1626880793.png'),
(3, 'https://www.deakin.edu.au/', 'theme/img/logo/1626880853.png'),
(4, 'https://www.ecu.edu.au/', 'theme/img/logo/1626881051.png'),
(5, 'https://www.flinders.edu.au/', 'theme/img/logo/1626881107.png'),
(6, 'https://imi-luzern.com/', 'theme/img/logo/1626881147.png'),
(7, 'https://www.psb-academy.edu.sg/', 'theme/img/logo/1626881181.png'),
(8, 'https://stac.edu.au/', 'theme/img/logo/1626881245.png'),
(9, 'https://www.bolton.ac.uk/', 'theme/img/logo/1626881281.png'),
(10, 'https://www.herts.ac.uk/', 'theme/img/logo/1626881327.png'),
(11, 'https://www.northampton.ac.uk/', 'theme/img/logo/1626881370.png'),
(12, 'https://www.utas.edu.au/', 'theme/img/logo/1626881527.png'),
(13, 'https://www.uwa.edu.au/home', 'theme/img/logo/1626881646.png'),
(14, 'https://www.weltec.ac.nz/', 'theme/img/logo/1626881737.png'),
(15, 'https://www.whitireia.ac.nz/', 'theme/img/logo/1626881792.png'),
(16, 'https://www.westernsydney.edu.au/', 'theme/img/logo/1626881843.png');

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `locale` varchar(191) COLLATE utf8mb4_bin NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_bin NOT NULL,
  `key` text COLLATE utf8mb4_bin NOT NULL,
  `value` text COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `media_and_news`
--

CREATE TABLE `media_and_news` (
  `id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media_and_news`
--

INSERT INTO `media_and_news` (`id`, `type`, `title`, `image`) VALUES
(1, 'media', 'Read more about CIRP in Media', 'theme/img/media-and-news/media-image.png'),
(2, 'news', 'CIRP Graduation 2019', 'theme/img/media-and-news/news-image.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'Primary Menu', NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE `menu_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `is_mega_menu` enum('no','tab','category') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'no = normal menu, tab = tab type mega menu, category = category type mega menu',
  `order` int(11) NOT NULL DEFAULT 0,
  `parent` bigint(20) UNSIGNED DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `new_teb` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_item`
--

INSERT INTO `menu_item` (`id`, `label`, `language`, `menu_id`, `is_mega_menu`, `order`, `parent`, `source`, `url`, `page_id`, `category_id`, `post_id`, `status`, `new_teb`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'en', 1, 'no', 1, NULL, 'custom', '#', NULL, NULL, NULL, 1, 0, '2020-10-14 23:26:41', '2020-10-14 23:33:06'),
(2, 'Life Style', 'en', 1, 'tab', 2, NULL, 'custom', NULL, NULL, NULL, NULL, 1, 0, '2020-10-14 23:33:29', '2020-10-14 23:36:20'),
(3, 'World', 'en', 1, 'no', 3, 2, 'category', NULL, NULL, 1, NULL, 1, 0, '2020-10-14 23:33:38', '2020-10-14 23:35:41'),
(6, 'Contact Us', 'en', 1, 'no', 15, NULL, 'page', NULL, 1, NULL, NULL, 1, 0, '2020-10-14 23:34:07', '2020-10-14 23:42:40'),
(16, 'About us', 'en', 1, 'no', 14, NULL, 'page', NULL, 2, NULL, NULL, 1, 0, '2020-10-14 23:42:29', '2020-10-14 23:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `menu_locations`
--

CREATE TABLE `menu_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_locations`
--

INSERT INTO `menu_locations` (`id`, `title`, `unique_name`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'Primary', 'primary', 1, '2021-03-20 15:37:39', '2021-03-20 15:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_04_02_193005_create_translations_table', 1),
(2, '2014_06_04_000000_create_images_table', 1),
(3, '2014_06_12_000001_create_videos_table', 1),
(4, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_09_28_121115_create_Permissions_table', 1),
(7, '2019_10_02_101820_create_categories_table', 1),
(8, '2019_10_02_130602_create_sub_categories_table', 1),
(9, '2019_10_03_102624_create_posts_table', 1),
(10, '2019_10_13_160721_create_settings_table', 1),
(11, '2019_10_13_173518_create_languages_table', 1),
(12, '2019_10_13_180528_create_language_configs_table', 1),
(13, '2019_10_16_102855_create_flag_icon', 1),
(14, '2019_11_05_144716_create_email_templates_table', 1),
(15, '2019_11_16_155414_create_pages_table', 1),
(16, '2019_11_23_161232_create_menu_table', 1),
(17, '2019_11_23_161241_create_menu_item_table', 1),
(18, '2019_11_30_170502_create_menu_locations_table', 1),
(19, '2019_12_31_180342_create_ads_table', 1),
(20, '2020_01_01_151432_create_ad_locations_table', 1),
(21, '2020_01_05_160344_create_crons_table', 1),
(22, '2020_01_06_141735_create_polls_table', 1),
(23, '2020_01_06_145613_create_votes_table', 1),
(24, '2020_01_07_173342_create_widgets_table', 1),
(25, '2020_01_08_141817_create_contact_messages_table', 1),
(26, '2020_01_08_151731_create_comments_table', 1),
(27, '2020_02_27_171520_create_themes_table', 1),
(28, '2020_02_29_123626_create_theme_sections_table', 1),
(29, '2020_03_02_174040_create_tags_table', 1),
(30, '2020_07_07_005751_create_poll_options_table', 1),
(31, '2020_07_16_110239_create_jobs_table', 1),
(32, '2020_08_17_162145_create_social_media_table', 1),
(33, '2020_08_27_105041_create_poll_results_table', 1),
(34, '2020_09_24_140613_create_visitor_trackers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `course_id`, `name`, `credits`, `updated_at`, `created_at`) VALUES
(1, 1, 'Employability & Self-development', 15, '2021-04-22 22:40:53', NULL),
(2, 1, 'Biopsychology', 15, '2021-04-22 22:40:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 default page, 2 contact us page',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 without sidebar, 2 with right sidebar, 3 with left sidebar',
  `visibility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_for_register` tinyint(1) NOT NULL,
  `show_title` tinyint(1) NOT NULL,
  `show_breadcrumb` tinyint(1) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `image_id`, `title`, `language`, `page_type`, `slug`, `description`, `template`, `visibility`, `show_for_register`, `show_title`, `show_breadcrumb`, `location`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Contact Us', 'en', 2, 'contact-us', 'Knave, \'I didn\'t know it was over at last, with a large one, but it was YOUR table,\' said Alice; \'you needn\'t be so proud as all that.\' \'Well, it\'s got no business of MINE.\' The Queen smiled and passed on. \'Who ARE you talking to?\' said one of the thing yourself, some winter day, I will just explain to you how the game was going a journey, I should think it would be very likely to eat or drink something or other; but the Hatter and the great puzzle!\' And she began very cautiously: \'But I don\'t know much,\' said the Duck: \'it\'s generally a frog or a watch to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said Alice. \'I\'m glad I\'ve seen that done,\' thought Alice. One of the trees had a bone in his confusion he bit a large cauldron which seemed to be seen--everything seemed to be a Caucus-race.\' \'What IS the use of this remark, and thought to herself \'It\'s the Cheshire Cat, she was exactly three inches high). \'But I\'m not the same, shedding gallons of tears, but said nothing. \'When we were little,\' the Mock Turtle, capering wildly about. \'Change lobsters again!\' yelled the Gryphon remarked: \'because they lessen from day to day.\' This was quite out of the other bit. Her chin was pressed hard against it, that attempt proved a failure. Alice heard it muttering to itself \'The Duchess! The Duchess! Oh my fur and whiskers! She\'ll get me executed, as sure as ferrets are ferrets! Where CAN I have ordered\'; and she drew herself up on tiptoe, and peeped over the edge of the party went back to them, and it\'ll sit up and throw us, with the tarts, you know--\' \'What did they live at the end.\' \'If you do. I\'ll set Dinah at you!\' There was a table, with a sudden burst of tears, \'I do wish I hadn\'t mentioned Dinah!\' she said to the table to measure herself by it, and then hurried on, Alice started to her daughter \'Ah, my dear! Let this be a queer thing, to be listening, so she began again. \'I wonder if I shall see it again, but it just now.\' \'It\'s the stupidest tea-party I ever saw one that size? Why, it fills the whole party at once to eat her up in great disgust, and walked two and two, as the soldiers had to kneel down on her lap as if it makes rather a hard word, I will tell you my adventures--beginning from this side of WHAT?\' thought Alice \'without pictures or conversations in it, and found quite a new kind of rule, \'and vinegar that makes them sour--and camomile that makes you forget to talk. I can\'t quite follow it as far down the chimney!\' \'Oh! So Bill\'s got the other--Bill! fetch it back!\' \'And who are THESE?\' said the Cat, \'a dog\'s not mad. You grant that?\' \'I suppose they are the jurors.\' She said it to be sure; but I THINK I can say.\' This was not a VERY unpleasant state of mind, she turned away. \'Come back!\' the Caterpillar seemed to rise like a tunnel for some minutes. The Caterpillar was the matter on, What would become of me? They\'re dreadfully fond of pretending to be talking in his note-book, cackled out \'Silence!\' and read out from his.', '1', '1', 0, 1, 1, NULL, NULL, NULL, NULL, '2021-03-20 15:37:30', '2021-03-20 15:37:30'),
(2, NULL, 'About Us', 'en', 1, 'about-us', 'Beautiful, beauti--FUL SOUP!\' \'Chorus again!\' cried the Mock Turtle: \'nine the next, and so on; then, when you\'ve cleared all the other side, the puppy began a series of short charges at the thought that she remained the same side of the evening, beautiful Soup! Beau--ootiful Soo--oop! Beau--ootiful Soo--oop! Soo--oop of the birds hurried off to the company generally, \'You are not attending!\' said the Rabbit came near her, she began, in rather a complaining tone, \'and they all moved off, and Alice rather unwillingly took the regular course.\' \'What was that?\' inquired Alice. \'Reeling and Writhing, of course, Alice could see it pop down a good many little girls in my time, but never ONE with such sudden violence that Alice quite jumped; but she gained courage as she had nibbled some more tea,\' the Hatter continued, \'in this way:-- &quot;Up above the world go round!&quot;\' \'Somebody said,\' Alice whispered, \'that it\'s done by everybody minding their own business,\' the Duchess said in a sorrowful tone, \'I\'m afraid I don\'t like them raw.\' \'Well, be off, and Alice looked all round her, calling out in a hurried nervous manner, smiling at everything that Alice had no very clear notion how delightful it will be the best thing to nurse--and she\'s such a thing before, but she could for sneezing. There was certainly English. \'I don\'t think--\' \'Then you shouldn\'t talk,\' said the Gryphon said, in a game of play with a kind of sob, \'I\'ve tried every way, and nothing seems to suit them!\' \'I haven\'t opened it yet,\' said Alice; \'living at the moment, \'My dear! I wish I could not be denied, so she sat down a jar from one minute to another! However, I\'ve got to the seaside once in a shrill, loud voice, and see what was going to leave the room, when her eye fell upon a little faster?&quot; said a sleepy voice behind her. \'Collar that Dormouse,\' the Queen jumped up on tiptoe, and peeped over the edge with each hand. \'And now which is which?\' she said to the waving of the moment he was going to give the prizes?\' quite a chorus of voices asked. \'Why, SHE, of course,\' the Dodo suddenly called out in a low voice, \'Why the fact is, you see, so many out-of-the-way things had happened lately, that Alice could speak again. The rabbit-hole went straight on like a sky-rocket!\' \'So you think I should like to drop the jar for fear of their hearing her; and the Queen in front of the crowd below, and there they are!\' said the Hatter: \'but you could see this, as she did not like to go among mad people,\' Alice remarked. \'Oh, you foolish Alice!\' she answered herself. \'How can you learn lessons in here? Why, there\'s hardly enough of it at all. \'But perhaps it was too late to wish that! She went on talking: \'Dear, dear! How queer everything is to-day! And yesterday things went on \'And how do you like to be a queer thing, to be no use in waiting by the little crocodile Improve his shining tail, And pour the waters of the gloves, and was going to happen next. \'It\'s--it\'s a very little! Besides, SHE\'S.', '1', '1', 0, 1, 1, NULL, NULL, NULL, NULL, '2021-03-20 15:37:30', '2021-03-20 15:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `slug`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users_read', 'users', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(2, 'users_write', 'users', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(3, 'users_delete', 'users', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(4, 'role_read', 'role', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(5, 'role_write', 'role', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(6, 'role_delete', 'role', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(7, 'permission_read', 'permission', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(8, 'permission_write', 'permission', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(9, 'permission_delete', 'permission', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(10, 'settings_read', 'settings', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(11, 'settings_write', 'settings', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(12, 'settings_delete', 'settings', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(13, 'language_settings_read', 'language_settings', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(14, 'language_settings_write', 'language_settings', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(15, 'language_settings_delete', 'language_settings', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(16, 'pages_read', 'pages', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(17, 'pages_write', 'pages', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(18, 'pages_delete', 'pages', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(19, 'menu_read', 'menu', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(20, 'menu_write', 'menu', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(21, 'menu_delete', 'menu', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(22, 'menu_item_read', 'menu_item', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(23, 'menu_item_write', 'menu_item', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(24, 'menu_item_delete', 'menu_item', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(25, 'post_read', 'post', '', '2021-03-20 15:37:21', '2021-03-20 15:37:21'),
(26, 'post_write', 'post', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(27, 'post_delete', 'post', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(28, 'category_read', 'category', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(29, 'category_write', 'category', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(30, 'category_delete', 'category', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(31, 'sub_category_read', 'sub_category', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(32, 'sub_category_write', 'sub_category', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(33, 'sub_category_delete', 'sub_category', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(34, 'widget_read', 'widget', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(35, 'widget_write', 'widget', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(36, 'widget_delete', 'widget', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(37, 'newsletter_read', 'newsletter', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(38, 'newsletter_write', 'newsletter', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(39, 'newsletter_delete', 'newsletter', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(40, 'notification_read', 'notification', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(41, 'notification_write', 'notification', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(42, 'notification_delete', 'notification', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(43, 'contact_message_read', 'contact_message', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(44, 'contact_message_write', 'contact_message', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(45, 'contact_message_delete', 'contact_message', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(46, 'ads_read', 'ads', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(47, 'ads_write', 'ads', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(48, 'ads_delete', 'ads', '', '2021-03-20 15:37:22', '2021-03-20 15:37:22'),
(49, 'theme_section_read', 'theme_section', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(50, 'theme_section_write', 'theme_section', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(51, 'theme_section_delete', 'theme_section', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(52, 'socials_read', 'socials', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(53, 'socials_write', 'socials', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(54, 'socials_delete', 'socials', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(55, 'polls_read', 'polls', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(56, 'polls_write', 'polls', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(57, 'polls_delete', 'polls', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(58, 'comments_read', 'comments', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(59, 'comments_write', 'comments', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(60, 'comments_delete', 'comments', '', '2021-03-20 15:37:23', '2021-03-20 15:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'ftLkTqs93r1NEiKR6sfCEtLdupxzbsPU', '2021-03-20 15:43:30', '2021-03-20 15:43:30'),
(2, 1, 'R6VI7ZOoPJ16MK8ARKuxTJLlETFnXl24', '2021-03-29 16:52:20', '2021-03-29 16:52:20'),
(6, 1, '9EvzEntMcGUsTmRsNwlITfM0pj8z2DOu', '2021-03-29 20:17:36', '2021-03-29 20:17:36'),
(7, 1, '5CCKFG3g35GiAlTyj2SSfeAmfJEVZCt1', '2021-04-05 18:41:03', '2021-04-05 18:41:03'),
(8, 1, 'C8CfEV459VwKeGbWUrK8iwNAOzwFsmWT', '2021-04-20 18:17:47', '2021-04-20 18:17:47'),
(9, 1, 'R53VIMWeslDOkyUGo5pU4K15vH3PkncU', '2021-04-21 08:16:49', '2021-04-21 08:16:49'),
(10, 1, 'K8TtFHWTSCmOEt5p8tAFXJr5AA35CJKq', '2021-04-21 10:46:17', '2021-04-21 10:46:17'),
(11, 1, 'D4r7P3DZdV7amiZIdDOZEJjsHfox5mt6', '2021-04-21 16:45:10', '2021-04-21 16:45:10'),
(12, 1, 'iWKRhfkRmHvZUT0ITiH7ulfbmelxLG2A', '2021-04-21 17:26:52', '2021-04-21 17:26:52'),
(13, 1, 'Osn85WQpWp1z0uYS9dSAydpOTuqbs4le', '2021-04-21 20:40:30', '2021-04-21 20:40:30'),
(14, 1, 'PtWM81tHLbKFcf1lkMsl4fJ621uqU8qS', '2021-04-22 10:08:54', '2021-04-22 10:08:54'),
(15, 1, '5P4Jo5zklV5m7tl5zzAEJddplZaMb54t', '2021-04-22 14:48:02', '2021-04-22 14:48:02'),
(16, 1, '1OXkIungSg9cfGigZnKFpTC2I1H9lEEm', '2021-04-22 16:59:29', '2021-04-22 16:59:29'),
(17, 1, 'P7NFb5nrhI0Uk3gRtWqIdXdhj0zzva3e', '2021-04-22 17:00:34', '2021-04-22 17:00:34'),
(18, 1, '6GWVw6esKym5YmnbQQhYGE11LUgfetd1', '2021-04-23 14:39:05', '2021-04-23 14:39:05'),
(19, 1, 'DFlYZQBaRFXrF71H83MCvfKXps7Qm7ZP', '2021-04-23 17:15:50', '2021-04-23 17:15:50'),
(20, 1, '1oAYtnMBqsimhczqQh1b9JupNqmFYeyU', '2021-04-23 17:20:42', '2021-04-23 17:20:42'),
(21, 1, 's9vdgnb9muECLZumttx2VLOaeQqbGmXQ', '2021-04-23 19:38:15', '2021-04-23 19:38:15'),
(22, 1, 'RJIEPqibF3UVKqifdNxKI2zvZxEcUAm5', '2021-04-24 15:56:22', '2021-04-24 15:56:22'),
(23, 1, 'IPqbOs3YAaDYW5ELAGrK5E9DpNyN5CkY', '2021-07-08 15:55:05', '2021-07-08 15:55:05'),
(24, 1, 'OUIiPcnnCvcUEYMYS5f1gUyE3yvtf4Ad', '2021-07-15 13:33:35', '2021-07-15 13:33:35'),
(25, 1, 'BoRJ5QQXtKLcNNi5Gl0wff9Uds8bftpV', '2021-07-19 03:21:40', '2021-07-19 03:21:40'),
(26, 1, 'RZPxSO1uNmrOQnLU5q7QWHdbM4su2FQt', '2021-07-19 14:35:24', '2021-07-19 14:35:24'),
(27, 1, 'TGQPoO9ToM3l9Hc3kC35m5LvKC4c6fsW', '2021-07-19 18:22:36', '2021-07-19 18:22:36'),
(28, 1, '3B76UzNVP2CP8CSFlEu4j8etvtCyRflb', '2021-07-20 14:27:15', '2021-07-20 14:27:15'),
(29, 1, '86etSZW53zxvGMYxBzC8D63aAhqhVIKt', '2021-07-21 00:53:40', '2021-07-21 00:53:40'),
(30, 1, '2nSsUHemYIWfkQFWlP4H0seyV06X1BDD', '2021-07-21 09:14:55', '2021-07-21 09:14:55'),
(31, 1, 'rJoWlCOYkHPyKr7ibAO4IzXgzOuUIAGn', '2021-07-21 18:21:36', '2021-07-21 18:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `auth_required` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED DEFAULT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `poll_results`
--

CREATE TABLE `poll_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) DEFAULT NULL,
  `poll_option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `browser_details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_type` enum('article','video','audio') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'article',
  `submitted` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 Non Submitted, 1 submitted',
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0,
  `auth_required` tinyint(1) NOT NULL DEFAULT 0,
  `slider` tinyint(1) NOT NULL DEFAULT 0,
  `slider_order` int(11) NOT NULL DEFAULT 0,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `featured_order` int(11) NOT NULL DEFAULT 0,
  `breaking` tinyint(1) NOT NULL DEFAULT 0,
  `breaking_order` int(11) NOT NULL DEFAULT 0,
  `recommended` tinyint(1) NOT NULL DEFAULT 0,
  `recommended_order` int(11) NOT NULL DEFAULT 0,
  `editor_picks` tinyint(1) NOT NULL DEFAULT 0,
  `editor_picks_order` int(11) NOT NULL DEFAULT 0,
  `scheduled` tinyint(1) NOT NULL DEFAULT 0,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scheduled_date` timestamp NULL DEFAULT NULL,
  `layout` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `video_id` bigint(20) UNSIGNED DEFAULT NULL,
  `video_url_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_thumbnail_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `total_hit` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `language`, `user_id`, `category_id`, `sub_category_id`, `post_type`, `submitted`, `image_id`, `visibility`, `auth_required`, `slider`, `slider_order`, `featured`, `featured_order`, `breaking`, `breaking_order`, `recommended`, `recommended_order`, `editor_picks`, `editor_picks_order`, `scheduled`, `meta_title`, `meta_keywords`, `meta_description`, `tags`, `scheduled_date`, `layout`, `video_id`, `video_url_type`, `video_url`, `video_thumbnail_id`, `status`, `total_hit`, `created_at`, `updated_at`) VALUES
(1, 'Sample article post', 'sample-article-post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'en', 1, 1, 1, 'article', 0, NULL, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, NULL, NULL, NULL, 'politics,world', NULL, 'default', NULL, '', '', NULL, 1, 0, '2021-03-20 15:37:29', '2021-03-20 15:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{\"users_read\":true,\"users_write\":true,\"users_delete\":true,\"settings_read\":true,\"settings_write\":true,\"settings_delete\":true,\"role_read\":true,\"role_write\":true,\"role_delete\":true,\"permission_read\":true,\"permission_write\":true,\"permission_delete\":true,\"language_settings_read\":true,\"language_settings_write\":true,\"language_settings_delete\":true,\"pages_read\":true,\"pages_write\":true,\"pages_delete\":true,\"menu_read\":true,\"menu_write\":true,\"menu_delete\":true,\"menu_item_read\":true,\"menu_item_write\":true,\"menu_item_delete\":true,\"post_read\":true,\"post_write\":true,\"post_delete\":true,\"category_read\":true,\"category_write\":true,\"category_delete\":true,\"sub_category_read\":true,\"sub_category_write\":true,\"sub_category_delete\":true,\"widget_read\":true,\"widget_write\":true,\"widget_delete\":true,\"newsletter_read\":true,\"newsletter_write\":true,\"newsletter_delete\":true,\"notification_read\":true,\"notification_write\":true,\"notification_delete\":true,\"contact_message_read\":true,\"contact_message_write\":true,\"contact_message_delete\":true,\"ads_read\":true,\"ads_write\":true,\"ads_delete\":true,\"theme_section_read\":true,\"theme_section_write\":true,\"theme_section_delete\":true,\"polls_read\":true,\"polls_write\":true,\"polls_delete\":true,\"socials_read\":true,\"socials_write\":true,\"socials_delete\":true,\"comments_read\":true,\"comments_write\":true,\"comments_delete\":true}', '2021-03-20 15:37:20', '2021-03-20 15:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-03-20 15:37:21', '2021-03-20 15:37:21');

-- --------------------------------------------------------

--
-- Table structure for table `school_education`
--

CREATE TABLE `school_education` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `year` varchar(255) DEFAULT NULL,
  `examination_body` varchar(255) DEFAULT NULL,
  `school` varchar(2555) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `value`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'default_language', 'en', 'en', '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(2, 'timezone', 'Asia/Calcutta', 'en', '2021-03-20 15:37:24', '2021-03-20 15:47:34'),
(3, 'application_name', 'CIRP - Colombo Institute of Research and Psychology', 'en', '2021-03-20 15:37:25', '2021-03-20 15:25:04'),
(4, 'mail_driver', 'sendmail', 'en', '2021-03-20 15:37:25', '2021-04-20 18:22:52'),
(5, 'mail_host', '', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(6, 'sendmail_path', '/usr/bin/sendmail -bs', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(7, 'mail_port', '', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(8, 'mail_address', '', 'en', '2021-03-20 15:37:25', '2021-04-20 18:22:43'),
(9, 'mail_name', '', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(10, 'mail_username', '', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(11, 'mail_password', '', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(12, 'mail_encryption', '', 'en', '2021-03-20 15:37:25', '2021-03-20 15:37:25'),
(13, 'default_storage', 'local', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(14, 'aws_access_key_id', '', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(15, 'aws_secret_access_key', '', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(16, 'aws_default_region', '', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(17, 'aws_bucket', '', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(18, 'logo', 'images/20210320171901_logo_10.png', 'en', '2021-03-20 15:37:26', '2021-03-20 17:19:02'),
(19, 'favicon', 'images/20210320172043_favicon_28.png', 'en', '2021-03-20 15:37:26', '2021-03-20 17:20:43'),
(20, 'onesignal_api_key', '', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(21, 'onesignal_app_id', '', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(22, 'onesignal_action_message', 'We\'d like to show you notifications for the latest updates.', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(23, 'onesignal_accept_button', 'ALLOW', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(24, 'onesignal_cancel_button', 'NO THANKS', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(25, 'notification_status', '0', 'en', '2021-03-20 15:37:26', '2021-03-20 15:37:26'),
(26, 'seo_title', 'CIRP - Colombo Institute of Research and Psychology', 'en', '2021-03-20 15:37:26', '2021-03-20 15:19:14'),
(27, 'seo_keywords', '', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(28, 'seo_meta_description', '', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(29, 'author_name', 'Ewisnet Internet Solutions', 'en', '2021-03-20 15:37:27', '2021-03-20 15:19:14'),
(30, 'og_title', 'CIRP - Colombo Institute of Research and Psychology', 'en', '2021-03-20 15:37:27', '2021-03-20 15:19:14'),
(31, 'og_description', '', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(32, 'og_image', '', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(33, 'google_analytics_id', 'UA-xxxxxxxx-1', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(34, 'page_detail_prefix', 'page', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(35, 'article_detail_prefix', 'story', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(36, 'url', '', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(37, 'address', 'Galle Road, Colombo 04,', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(38, 'email', 'info@researchandpsychology.com', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(39, 'phone', '+94 112 50 70 71 / 72', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(40, 'zip_code', '00400', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(41, 'city', 'Colombo', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(42, 'state', 'Western Province', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(43, 'country', 'Sri Lanka', 'en', '2021-03-20 15:37:27', '2021-03-29 20:22:15'),
(44, 'website', '', 'en', '2021-03-20 15:37:27', '2021-03-20 15:37:27'),
(45, 'company_registration', '', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(46, 'tax_number', '', 'en', '2021-03-20 15:37:27', '2021-04-23 16:51:04'),
(47, 'about_us_description', '', 'en', '2021-03-20 15:37:28', '2021-04-23 16:51:04'),
(48, 'captcha_secret', 'xxxxxxx', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(49, 'captcha_sitekey', 'xxxxxx', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(50, 'captcha_visibility', '0', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(51, 'copyright_text', 'Copyright © 2021 CIRP - Colombo Institute of Research and Psychology - All Rights Reserved.', 'en', '2021-03-20 15:37:28', '2021-03-20 15:25:04'),
(52, 'signature', 'Best Regards', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(53, 'addthis_public_id', 'ra-xxxxxxxx', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(54, 'adthis_option', '0', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(55, 'inbuild_comment', '1', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(56, 'disqus_comment', '0', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(57, 'disqus_short_name', 'xxxx', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(58, 'facebook_comment', '0', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(59, 'facebook_app_id', 'xxxxxxx', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(60, 'predefined_header', '', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(61, 'custom_header_style', '', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(62, 'custom_footer_js', '', 'en', '2021-03-20 15:37:28', '2021-03-20 15:37:28'),
(63, 'ffmpeg_status', '0', 'en', '2021-03-20 15:37:28', '2021-04-23 01:27:01'),
(64, 'status', '', 'en', '2021-03-20 15:47:34', '2021-03-20 15:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `button1_title` varchar(255) DEFAULT NULL,
  `button2_title` varchar(255) DEFAULT NULL,
  `button1_link` varchar(255) DEFAULT NULL,
  `button2_link` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image_m` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `image`, `description`, `checkout`, `button1_title`, `button2_title`, `button1_link`, `button2_link`, `title`, `image_m`) VALUES
(3, 'theme/img/slides/1626705349.jpeg', 'Study for an internationally recognized British Psychology Degree in Sri Lanka', 'Checkout our new BSc Programs', '2021 Intake', 'Double Majors', NULL, NULL, 'Become a Globally Employable Graduate', 'theme/img/slides/1626705349.png'),
(4, 'theme/img/slides/1626705592.jpeg', 'Options of Completing your Degree in SL or transfer to Top International Universities', 'Checkout our Transfer Programs', 'After O/L', 'After A/L', NULL, NULL, 'Start in Sri Lanka & Transfer Worldwide', 'theme/img/slides/1626705592.png'),
(5, 'theme/img/slides/1626705689.jpeg', 'International Standards in Teaching, Assessing & Resources', 'Checkout our Resources & Teaching', 'Open Days', 'Facilities', NULL, NULL, 'Experience World Class Education', 'theme/img/slides/1626705689.png'),
(6, 'theme/img/slides/1626705762.jpeg', 'Best Postgraduate Education that goes Beyond paper qualifications', 'Checkout our Masters Degrees', '2021 Intake', 'Alumni', NULL, 'alumni.php', 'Discover Your Passion & Make it Your Career', 'theme/img/slides/1626705762.png'),
(7, 'theme/img/slides/1626705829.jpeg', 'Become a Part of Applied Research That Contributes to Community', 'Checkout our contribution to society', 'Community', 'Research', NULL, NULL, 'Empower yourself To Support others', 'theme/img/slides/1626705829.png');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `name`, `url`, `icon_bg_color`, `text_bg_color`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '#', '#0061C2', '#056ED8', 'fa fa-facebook', 1, '2021-03-20 15:37:19', '2021-03-20 15:37:19'),
(2, 'Youtube', '#', '#FE031C', '#E50017', 'fa fa-youtube-play', 1, '2021-03-20 15:37:19', '2021-03-20 15:37:19'),
(3, 'Twitter', '#', '#2391FF', '#349AFF', 'fa fa-twitter', 1, '2021-03-20 15:37:19', '2021-03-20 15:37:19'),
(4, 'Linkedin', '#', '#349AFF', '#349affd9', 'fa fa-linkedin', 1, '2021-03-20 15:37:19', '2021-03-20 15:37:19'),
(5, 'Skype', '#', '#4ba3fcd9', '#4BA3FC', 'fa fa-skype', 1, '2021-03-20 15:37:19', '2021-03-20 15:37:19'),
(6, 'Pinterest', '#', '#C2000D', '#c2000dd9', 'fa fa-pinterest-square', 1, '2021-03-20 15:37:19', '2021-03-20 15:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `study_abroad`
--

CREATE TABLE `study_abroad` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `main` int(11) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_abroad`
--

INSERT INTO `study_abroad` (`id`, `country_id`, `main`, `image1`, `image2`, `url`) VALUES
(1, 1, 0, 'theme/img/logos/2.jpg', 'theme/img/logos/study-abroad/logo-11.png', 'https://www.herts.ac.uk/'),
(2, 1, 0, 'theme/img/logos/3.jpg', 'theme/img/logos/study-abroad/logo-10.png', 'https://www.bolton.ac.uk/'),
(3, 2, 0, 'theme/img/logos/9.jpg', 'theme/img/logos/study-abroad/logo-18.png', 'https://www.whitireia.ac.nz/');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sub_category_name`, `slug`, `category_id`, `language`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 'politics', 1, 'en', NULL, NULL, '2021-03-20 15:37:29', '2021-03-20 15:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_hit` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `total_hit`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sports', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(2, 'Football', 12, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(3, 'Cricket', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(4, 'Education', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(5, 'Business', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(6, 'Technology', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(7, 'Science', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(8, 'Bangladesh', 2, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(9, 'World Cup', 10, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(10, 'Politics', 6, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(11, 'Computer', 2, 1, '2021-03-20 15:37:23', '2021-03-20 15:37:23'),
(12, 'Apple', 3, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(13, 'Microsoft', 3, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(14, 'Google', 4, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(15, 'Travel', 10, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(16, 'Virus', 10, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(17, 'Culture', 10, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(18, 'Culture', 10, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(19, 'Health', 10, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(20, 'Tree', 5, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(21, 'Environment', 8, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24'),
(22, 'Pollution', 6, 1, '2021-03-20 15:37:24', '2021-03-20 15:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 2 COMMENT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `slug`, `options`, `status`, `created_at`, `updated_at`) VALUES
(1, 'theme_one', NULL, '{\"header_style\":\"header_1\",\"footer_style\":\"footer_1\",\"primary_color\":\"#000000\",\"fonts\":\"Noto+Sans+JP\",\"mode\":null}', 1, '2021-03-20 15:37:39', '2021-03-20 15:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `theme_sections`
--

CREATE TABLE `theme_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `theme_id` bigint(20) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_amount` bigint(20) UNSIGNED DEFAULT NULL,
  `section_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_sections`
--

INSERT INTO `theme_sections` (`id`, `theme_id`, `type`, `label`, `order`, `category_id`, `ad_id`, `post_amount`, `section_style`, `is_primary`, `status`, `language`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Primary Section', 1, NULL, NULL, 10, 'style_1', 1, 1, NULL, '2021-03-20 15:37:39', '2021-03-29 20:24:39'),
(2, 1, 1, 'World', 1, 1, NULL, NULL, 'style_1', 0, 1, 'en', '2021-03-20 15:37:39', '2021-03-20 15:37:39'),
(3, 1, 2, 'videos', 4, NULL, NULL, NULL, 'style_1', 0, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39'),
(4, 1, 3, 'latest_post', 5, NULL, NULL, NULL, NULL, 0, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` bigint(20) UNSIGNED DEFAULT NULL,
  `newsletter_enable` tinyint(1) NOT NULL DEFAULT 1,
  `is_user_banned` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 banned, 1 unbanned',
  `user_banned_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_subscribe_banned` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 banned, 1 unbanned',
  `subscribe_banned_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_media` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'it will be array data',
  `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 inactive user, 1 active user',
  `deactivate_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firebase_auth_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'this is for mobile app.',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `image_id`, `newsletter_enable`, `is_user_banned`, `user_banned_reason`, `is_subscribe_banned`, `subscribe_banned_reason`, `about_us`, `social_media`, `is_active`, `deactivate_reason`, `firebase_auth_id`, `created_at`, `updated_at`) VALUES
(1, 'admin@researchandpsychology.com', '$2y$12$4uGMD0XyuLjB98SdjR8JNe4WD.sy6vHJRjWiWJR.r9BTZxMV2vtom', NULL, '2021-07-21 18:21:36', 'Research', 'Admin', NULL, 0, 1, NULL, 1, NULL, NULL, NULL, 1, NULL, NULL, '2021-03-20 15:37:20', '2021-07-21 18:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_thumbnail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_name`, `video_thumbnail`, `mobile_thumbnail`) VALUES
(1, 'videos/video-banner.mp4', 'videos/thumbnail/thumbnail.jpeg', 'videos/thumbnail/mobile-thumbnail.png');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_trackers`
--

CREATE TABLE `visitor_trackers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_type` tinyint(1) DEFAULT NULL COMMENT '1, home page, 2 post details, 3 page detail',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_trackers`
--

INSERT INTO `visitor_trackers` (`id`, `page_type`, `slug`, `url`, `source_url`, `ip`, `agent_browser`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'http://rap.loc', 'http://rap.loc/install', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 15:37:40', '2021-03-20 15:37:40'),
(2, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 15:43:31', '2021-03-20 15:43:31'),
(3, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 15:23:54', '2021-03-20 15:23:54'),
(4, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 15:25:08', '2021-03-20 15:25:08'),
(5, 1, NULL, 'http://rap.loc', 'http://rap.loc/newsletter/send-email/subscriber', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 15:28:47', '2021-03-20 15:28:47'),
(6, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 17:17:55', '2021-03-20 17:17:55'),
(7, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 17:19:05', '2021-03-20 17:19:05'),
(8, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 17:20:46', '2021-03-20 17:20:46'),
(9, 1, NULL, 'http://rap.loc', 'http://rap.loc/setting/setting-general', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 17:23:55', '2021-03-20 17:23:55'),
(10, 1, NULL, 'http://rap.loc', 'http://rap.loc/setting/setting-general', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 17:24:35', '2021-03-20 17:24:35'),
(11, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-20 18:14:27', '2021-03-20 18:14:27'),
(12, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-21 01:05:11', '2021-03-21 01:05:11'),
(13, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-21 01:06:51', '2021-03-21 01:06:51'),
(14, 1, NULL, 'http://rap.loc', 'http://rap.loc/install', '172.16.238.1', 'Google Chrome', NULL, '2021-03-21 01:32:14', '2021-03-21 01:32:14'),
(15, 1, NULL, 'http://rap.loc', 'http://rap.loc/login', '172.16.238.1', 'Google Chrome', NULL, '2021-03-21 01:50:36', '2021-03-21 01:50:36'),
(16, 1, NULL, 'http://rap.loc', 'http://rap.loc/host-checker', '172.16.238.1', 'Google Chrome', NULL, '2021-03-21 17:41:12', '2021-03-21 17:41:12'),
(17, 2, NULL, 'https://cirp.lc/category/world', 'https://cirp.lc/setting/setting-seo', '172.16.238.1', 'Google Chrome', NULL, '2021-07-08 16:05:42', '2021-07-08 16:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_study_at_tiles`
--

CREATE TABLE `why_study_at_tiles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(500) NOT NULL,
  `button_link` varchar(50) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_study_at_tiles`
--

INSERT INTO `why_study_at_tiles` (`id`, `title`, `text`, `button_link`, `image`, `type`) VALUES
(1, 'Why study at CIRP?', 'Why study at CIRP?', NULL, 'theme/img/tiles/tile-01.png', 'small'),
(2, 'Best Learning Resources', 'With state-of-the-art facilities and the latest resources, CIRP ensures that the student can engage in their academic activities in a simulating environment using the most recent learning technologies.', 'Best-Learning-Resources.php', 'theme/img/tiles/tile-02.png', 'small'),
(3, 'Optimum class size', 'With medium size classes, CIRP has avoided students becoming invisible and unheard in massive classrooms with hundreds of students by giving them the opportunity and courage to ask questions and clarify confusions', 'Optimum-class-size.php', 'theme/img/tiles/tile-03.png', 'small'),
(4, 'Ideal Staff : Student Ratio', 'With over 30 dedicated lecturers in the School of Psychology alone, CIRP is committed to maintain the optimum 1:20 ratio recommended by BPS for excellent teaching, individual attention and academic and moral support', 'Ideal-Staff.php', 'theme/img/tiles/tile-04.png', 'small'),
(5, 'Higher employability', 'Our students are provided with a range of internships in clinical, business, research, community, school and media settings to enhance their skills and employability.', 'Higher-Employability.php', 'theme/img/tiles/tile-05.png', 'small'),
(6, 'World class facilities', 'Modern state-of-the-art infrastructure at CIRP provide a comfortable and pleasant environment that encourages regular involvement in academic activities, and peaceful quiet spaces to concentrate and relax', 'World-class-facilities.php', 'theme/img/tiles/tile-06.png', 'small'),
(7, 'Internation expertise', 'With over 30 dedicated lecturers in the School of Psychology alone, CIRP is committed to maintain the optimum 1:20 ratio recommended by BPS for excellent teaching, individual attention and academic and moral support', 'International-expertise.php', 'theme/img/tiles/tile-07.png', 'small'),
(8, 'Gain employability skills', 'CIRP is determined to produce graduates who are not only academically qualified but also has the practical knowledge and the interpersonal skills required to function effectively in a competitive and demanding work environment.', NULL, 'theme/img/tiles/tile-08.png', 'small');

-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

CREATE TABLE `widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `location` int(11) NOT NULL DEFAULT 1,
  `content_type` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `is_custom` tinyint(1) NOT NULL DEFAULT 1,
  `ad_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widgets`
--

INSERT INTO `widgets` (`id`, `title`, `language`, `content`, `short_code`, `order`, `location`, `content_type`, `status`, `is_custom`, `ad_id`, `created_at`, `updated_at`) VALUES
(1, 'Popular Posts', 'en', NULL, 'popular_posts', 1, 1, 1, 1, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39'),
(2, 'Follow Us', 'en', NULL, 'follow_us', 2, 1, 5, 1, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39'),
(3, 'Newsletter', 'en', NULL, 'newletter', 3, 1, 4, 1, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39'),
(4, 'Popular Posts', 'en', NULL, NULL, 1, 2, 1, 1, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39'),
(5, 'Newsletter', 'en', NULL, NULL, 3, 2, 4, 1, 1, NULL, '2021-03-20 15:37:39', '2021-03-20 15:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `workexperiences`
--

CREATE TABLE `workexperiences` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `sectionH_name_of_organization1` varchar(255) DEFAULT NULL,
  `sectionH_title_nature1` varchar(255) DEFAULT NULL,
  `sectionH_time` varchar(255) DEFAULT NULL,
  `sectionH_from` date DEFAULT NULL,
  `sectionH_to` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_qualifications`
--
ALTER TABLE `academic_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activations_user_id_foreign` (`user_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ads_ad_image_id_foreign` (`ad_image_id`);

--
-- Indexes for table `ad_locations`
--
ALTER TABLE `ad_locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ad_locations_unique_name_unique` (`unique_name`),
  ADD KEY `ad_locations_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countriy_trans_options`
--
ALTER TABLE `countriy_trans_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crons`
--
ALTER TABLE `crons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crons_video_id_foreign` (`video_id`);

--
-- Indexes for table `electives`
--
ALTER TABLE `electives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flag_icons`
--
ALTER TABLE `flag_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_section`
--
ALTER TABLE `home_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquires`
--
ALTER TABLE `inquires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_configs`
--
ALTER TABLE `language_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_and_news`
--
ALTER TABLE `media_and_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_item_parent_foreign` (`parent`),
  ADD KEY `menu_item_menu_id_foreign` (`menu_id`),
  ADD KEY `menu_item_category_id_foreign` (`category_id`),
  ADD KEY `menu_item_page_id_foreign` (`page_id`),
  ADD KEY `menu_item_post_id_foreign` (`post_id`);

--
-- Indexes for table `menu_locations`
--
ALTER TABLE `menu_locations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_locations_unique_name_unique` (`unique_name`),
  ADD KEY `menu_locations_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`),
  ADD KEY `pages_image_id_foreign` (`image_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`),
  ADD KEY `persistences_user_id_foreign` (`user_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_options_poll_id_foreign` (`poll_id`);

--
-- Indexes for table `poll_results`
--
ALTER TABLE `poll_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_results_poll_option_id_foreign` (`poll_option_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_image_id_foreign` (`image_id`),
  ADD KEY `posts_video_thumbnail_id_foreign` (`video_thumbnail_id`),
  ADD KEY `posts_video_id_foreign` (`video_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reminders_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Indexes for table `school_education`
--
ALTER TABLE `school_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_abroad`
--
ALTER TABLE `study_abroad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `themes_name_index` (`name`);

--
-- Indexes for table `theme_sections`
--
ALTER TABLE `theme_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `theme_sections_ad_id_foreign` (`ad_id`),
  ADD KEY `theme_sections_category_id_foreign` (`category_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_image_id_foreign` (`image_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_trackers`
--
ALTER TABLE `visitor_trackers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `votes_poll_id_foreign` (`poll_id`),
  ADD KEY `votes_user_id_foreign` (`user_id`);

--
-- Indexes for table `why_study_at_tiles`
--
ALTER TABLE `why_study_at_tiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widgets`
--
ALTER TABLE `widgets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `widgets_short_code_unique` (`short_code`),
  ADD KEY `widgets_ad_id_foreign` (`ad_id`);

--
-- Indexes for table `workexperiences`
--
ALTER TABLE `workexperiences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_qualifications`
--
ALTER TABLE `academic_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ad_locations`
--
ALTER TABLE `ad_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countriy_trans_options`
--
ALTER TABLE `countriy_trans_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `crons`
--
ALTER TABLE `crons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `electives`
--
ALTER TABLE `electives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flag_icons`
--
ALTER TABLE `flag_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `home_section`
--
ALTER TABLE `home_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquires`
--
ALTER TABLE `inquires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language_configs`
--
ALTER TABLE `language_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_and_news`
--
ALTER TABLE `media_and_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu_locations`
--
ALTER TABLE `menu_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poll_results`
--
ALTER TABLE `poll_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school_education`
--
ALTER TABLE `school_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `study_abroad`
--
ALTER TABLE `study_abroad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `theme_sections`
--
ALTER TABLE `theme_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor_trackers`
--
ALTER TABLE `visitor_trackers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_study_at_tiles`
--
ALTER TABLE `why_study_at_tiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `widgets`
--
ALTER TABLE `widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workexperiences`
--
ALTER TABLE `workexperiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activations`
--
ALTER TABLE `activations`
  ADD CONSTRAINT `activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ad_image_id_foreign` FOREIGN KEY (`ad_image_id`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ad_locations`
--
ALTER TABLE `ad_locations`
  ADD CONSTRAINT `ad_locations_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crons`
--
ALTER TABLE `crons`
  ADD CONSTRAINT `crons_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `electives`
--
ALTER TABLE `electives`
  ADD CONSTRAINT `electives_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD CONSTRAINT `menu_item_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_item_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_item_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_item_parent_foreign` FOREIGN KEY (`parent`) REFERENCES `menu_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menu_item_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_locations`
--
ALTER TABLE `menu_locations`
  ADD CONSTRAINT `menu_locations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `persistences`
--
ALTER TABLE `persistences`
  ADD CONSTRAINT `persistences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD CONSTRAINT `poll_options_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `poll_results`
--
ALTER TABLE `poll_results`
  ADD CONSTRAINT `poll_results_poll_option_id_foreign` FOREIGN KEY (`poll_option_id`) REFERENCES `poll_options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_video_thumbnail_id_foreign` FOREIGN KEY (`video_thumbnail_id`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `theme_sections`
--
ALTER TABLE `theme_sections`
  ADD CONSTRAINT `theme_sections_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `theme_sections_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_poll_id_foreign` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `widgets`
--
ALTER TABLE `widgets`
  ADD CONSTRAINT `widgets_ad_id_foreign` FOREIGN KEY (`ad_id`) REFERENCES `ads` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
