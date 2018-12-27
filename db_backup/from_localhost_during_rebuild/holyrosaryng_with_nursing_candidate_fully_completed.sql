-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2018 at 04:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holyrosaryng`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `created_at`, `updated_at`) VALUES
(000001, 'NJOKU OKECHUKWU VALENTINE', 'bonsoirval@gmail.com', '$2y$10$oNEfv0URqlbZDgMk3N8Acefha38oTrZyGQy2zaOIlmJp/MzDddoWq', 'ZunFPgx7CkWk0RNcFP7SWGBSIIBhG0AOxfj6n38ldar7JaTVuACoZhvN6piy', '07038616871', '2018-05-01 14:52:17', '2018-05-01 14:52:17'),
(000003, 'njoku okechukwu   valentine', 'bonsoirval@men.com', '$2y$10$zaODQu7FVJy2MHj4QGHI.O7Wjl0RW89e17EIFWGlSet1SLvgRnyB.', 'tHCY3GFakQQvS48NHSMbpuEYLtijXhXSm7XsqDfwk8nKx9AYeOjXTm421Ur3', '09034948883', '2018-05-01 21:42:52', '2018-05-01 21:42:52'),
(000004, 'njoku okechukwu valentine', 'bonsoirval@menn.com', '$2y$10$mPyJ1809rjQ.L8rTUvDv..ziORqrDKGhF36Q93sq2I8nC4LSh4dNu', 'g6QpMXPWb1AvaaGuiQAvrKjZ3Hm5vXWlirT0xv7fYtvga0up4rgQs8G78gYa', '09034948822', '2018-05-08 12:20:52', '2018-05-08 12:20:52'),
(000005, 'njoku okechukwu valentine', 'bonsoirval@me.com', '$2y$10$UHLlE8R3G/UxJONiHPj4/OofBe.b.h8AHsB8iRjWxcgHQjlW5Lv32', 'dF3XmeGU2500oZntTXiPcf9FGd1839fPKyIREFwxXIuoyCj6ZCk3NAH9Iq1C', '07038616897', '2018-05-08 12:23:30', '2018-05-08 12:23:30'),
(000006, 'njoku okechukwu valentine', 'bonsoirval@en.com', '$2y$10$wd6H.B.wkuOuatcbbTugiO2Q1sy/PIndj4/yJJ1gSgp197pkNYtxC', 'YvCcczYq91P5hQj8aYWzzhNaTkXMV1xwO3z89CkxFWj2KidC2f01LVgLpcpb', '07038410897', '2018-05-08 12:26:09', '2018-05-08 12:26:09'),
(000007, 'ksdksdsk', 'you@youn.youn', '$2y$10$b1xLWIA/zVHOxi4XEmvrYOVGW4f30H2Z2/rdHGLZMLSXR1tclk0G.', '5OxRvpArSXFOUECrWeVnOXgIyK7d3iqS3yZmntnBGgXegE0ZgeIba8EBRw64', '09034948881', '2018-05-08 12:30:02', '2018-05-08 12:30:02'),
(000008, 'njoku okechukwu valentine', 'bon@bon.bon', '$2y$10$cUI4Vvv5Yj/E.RnW9EZlMe7r7pLkJKX06yAVwwjMZVGNxQ316z7LK', 'boarts1p5v04Lw9XlIqXv2LjF7QG8Gg0PGyh6Q0zY2seOLV6GA66IoIVzIGb', '09034948882', '2018-05-08 12:48:36', '2018-05-08 12:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `sortname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `level` enum('100','200','300','') NOT NULL,
  `school` enum('nursing','medlab','midwifery') NOT NULL,
  `year` year(4) NOT NULL,
  `course_load` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_title`, `level`, `school`, `year`, `course_load`) VALUES
(1, 'GST102', 'State and Society', '200', 'nursing', 0000, 3),
(2, 'GST101', 'State and Society', '100', 'nursing', 2018, 3);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidates`
--

CREATE TABLE `medlab_candidates` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidates`
--

INSERT INTO `medlab_candidates` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `created_at`, `updated_at`) VALUES
(000001, 'NJOKU OKECHUKWU VALENTINE', 'bonsoirval@gmail.com', '$2y$10$oNEfv0URqlbZDgMk3N8Acefha38oTrZyGQy2zaOIlmJp/MzDddoWq', 'ZunFPgx7CkWk0RNcFP7SWGBSIIBhG0AOxfj6n38ldar7JaTVuACoZhvN6piy', '07038616871', '2018-05-01 14:52:17', '2018-05-01 14:52:17'),
(000003, 'njoku okechukwu   valentine', 'bonsoirval@men.com', '$2y$10$zaODQu7FVJy2MHj4QGHI.O7Wjl0RW89e17EIFWGlSet1SLvgRnyB.', 'RSsW3dcTDYAUtm3l5oJxc2rsjeLLK4vl2R57FORI0tDj0nKdTppXfObLyEeC', '09034948883', '2018-05-01 21:42:52', '2018-05-01 21:42:52'),
(000004, 'njoku okechukwu valentine', 'bonsoirval@menn.com', '$2y$10$mPyJ1809rjQ.L8rTUvDv..ziORqrDKGhF36Q93sq2I8nC4LSh4dNu', 'g6QpMXPWb1AvaaGuiQAvrKjZ3Hm5vXWlirT0xv7fYtvga0up4rgQs8G78gYa', '09034948822', '2018-05-08 12:20:52', '2018-05-08 12:20:52'),
(000005, 'njoku okechukwu valentine', 'bonsoirval@me.com', '$2y$10$UHLlE8R3G/UxJONiHPj4/OofBe.b.h8AHsB8iRjWxcgHQjlW5Lv32', 'dF3XmeGU2500oZntTXiPcf9FGd1839fPKyIREFwxXIuoyCj6ZCk3NAH9Iq1C', '07038616897', '2018-05-08 12:23:30', '2018-05-08 12:23:30'),
(000006, 'njoku okechukwu valentine', 'bonsoirval@en.com', '$2y$10$wd6H.B.wkuOuatcbbTugiO2Q1sy/PIndj4/yJJ1gSgp197pkNYtxC', 'YvCcczYq91P5hQj8aYWzzhNaTkXMV1xwO3z89CkxFWj2KidC2f01LVgLpcpb', '07038410897', '2018-05-08 12:26:09', '2018-05-08 12:26:09'),
(000007, 'ksdksdsk', 'you@youn.youn', '$2y$10$b1xLWIA/zVHOxi4XEmvrYOVGW4f30H2Z2/rdHGLZMLSXR1tclk0G.', '5OxRvpArSXFOUECrWeVnOXgIyK7d3iqS3yZmntnBGgXegE0ZgeIba8EBRw64', '09034948881', '2018-05-08 12:30:02', '2018-05-08 12:30:02'),
(000008, 'njoku okechukwu valentine', 'bon@bon.bon', '$2y$10$cUI4Vvv5Yj/E.RnW9EZlMe7r7pLkJKX06yAVwwjMZVGNxQ316z7LK', 'boarts1p5v04Lw9XlIqXv2LjF7QG8Gg0PGyh6Q0zY2seOLV6GA66IoIVzIGb', '09034948882', '2018-05-08 12:48:36', '2018-05-08 12:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidates_contacts`
--

CREATE TABLE `medlab_candidates_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `contact_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidates_contacts`
--

INSERT INTO `medlab_candidates_contacts` (`id`, `user_id`, `contact_address`, `permanent_address`, `created_at`, `updated_at`) VALUES
(1, 3, 'kdnfaskldfna', 'Umukehi Orji Owerri North LGA IMO STATE', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidates_nextkins`
--

CREATE TABLE `medlab_candidates_nextkins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `nextkin_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nextkin_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidates_nextkins`
--

INSERT INTO `medlab_candidates_nextkins` (`id`, `user_id`, `name`, `nextkin_address`, `nextkin_phone`, `relationship`, `created_at`, `updated_at`) VALUES
(1, 3, 'dfgdf', 'dfgdfg', 'hello', 'sister', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidates_olevels1`
--

CREATE TABLE `medlab_candidates_olevels1` (
  `id` int(10) UNSIGNED NOT NULL,
  `english` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `examination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_year` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidates_olevels1`
--

INSERT INTO `medlab_candidates_olevels1` (`id`, `english`, `examination`, `exam_number`, `exam_year`, `mathematics`, `chemistry`, `physics`, `biology`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'b2', 'waec', '2121', 2003, 'b2', 'a1', 'b2', 'a1', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidates_olevels2`
--

CREATE TABLE `medlab_candidates_olevels2` (
  `id` int(10) UNSIGNED NOT NULL,
  `english` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `examination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_year` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidates_olevels2`
--

INSERT INTO `medlab_candidates_olevels2` (`id`, `english`, `examination`, `exam_number`, `exam_year`, `mathematics`, `chemistry`, `physics`, `biology`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'b2', 'neco', '2121', 2003, 'b2', 'a1', 'a1', 'a1', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidates_profiles`
--

CREATE TABLE `medlab_candidates_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('female','male') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'female',
  `passport` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_state` smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  `birth_town` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidates_profiles`
--

INSERT INTO `medlab_candidates_profiles` (`id`, `user_id`, `dob`, `gender`, `passport`, `origin_state`, `birth_town`, `lga`, `nationality`, `created_at`, `updated_at`) VALUES
(1, 3, '26/08/1984', 'male', '3.png', 2647, 'owerri', 'Owerri north', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidate_interview`
--

CREATE TABLE `medlab_candidate_interview` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_score` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidate_pins`
--

CREATE TABLE `medlab_candidate_pins` (
  `id` int(10) UNSIGNED NOT NULL,
  `serial_number` int(10) UNSIGNED NOT NULL,
  `pin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('active','used') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `date_used` datetime NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medlab_candidate_pins`
--

INSERT INTO `medlab_candidate_pins` (`id`, `serial_number`, `pin`, `status`, `date_used`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1111111111, 2222222222, 'used', '0000-00-00 00:00:00', 0, NULL, NULL),
(2, 2222222222, 1111111111, 'active', '0000-00-00 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medlab_candidate_result`
--

CREATE TABLE `medlab_candidate_result` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_number` smallint(5) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `score` double(8,2) NOT NULL DEFAULT '0.00',
  `remark` enum('PASS','FAIL') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FAIL',
  `used_card` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_04_224127_create_nursing_candidate_pins_table', 2),
(4, '2018_04_04_223026_create_nursing_candidates_table', 3),
(19, '2018_04_04_223201_create_cities_table', 4),
(20, '2018_04_04_223445_create_countries_table', 4),
(21, '2018_04_04_223657_create_nursing_candidate_interview_table', 4),
(22, '2018_04_04_223951_create_nursing_candidate_nextkin_table', 4),
(23, '2018_04_04_224014_create_nursing_candidate_result_table', 4),
(24, '2018_04_04_224041_create_nursing_candidate_olevel1_table', 4),
(25, '2018_04_04_224057_create_nursing_candidate_olevel2_table', 4),
(26, '2018_04_04_223408_create_nursing_candidate_contact_table', 5),
(34, '2018_04_04_224214_create_nursing_candidates_profile_table', 6),
(35, '2018_04_04_224248_create_pts_candidate_result_table', 6),
(37, '2018_04_04_224401_create_states_table', 7),
(38, '2018_04_04_223445_create_countris_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidates`
--

CREATE TABLE `nursing_candidates` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidates`
--

INSERT INTO `nursing_candidates` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `created_at`, `updated_at`) VALUES
(000010, 'NJOKU OKECHUKWU VALENTINE', 'nursing@nursing.nursing', '$2y$10$OTLXWO/8Jg1XnLwHVbnx6e.DCELvmh.Q18wZsjDzp00jVnVQiXOGG', 'SJtHxb25HiwmF2C9XqNlq59VzpnZwLxAV4gbgBxydt2mtB6eAV0sC5Y4qAsv', '08180773897', '2018-07-01 07:52:29', '2018-07-01 07:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidates_contacts`
--

CREATE TABLE `nursing_candidates_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `contact_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidates_contacts`
--

INSERT INTO `nursing_candidates_contacts` (`id`, `user_id`, `contact_address`, `permanent_address`, `created_at`, `updated_at`) VALUES
(1, 3, 'kdnfaskldfna', 'Umukehi Orji Owerri North LGA IMO STATE', NULL, NULL),
(2, 10, 'contact address', 'permanent address', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidates_nextkins`
--

CREATE TABLE `nursing_candidates_nextkins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `nextkin_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nextkin_phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidates_nextkins`
--

INSERT INTO `nursing_candidates_nextkins` (`id`, `user_id`, `name`, `nextkin_address`, `nextkin_phone`, `relationship`, `created_at`, `updated_at`) VALUES
(1, 3, 'dfgdf', 'dfgdfg', 'hello', 'sister', NULL, NULL),
(2, 10, 'nextkin name', 'next kin address', '08023932383', 'nephew', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidates_olevels1`
--

CREATE TABLE `nursing_candidates_olevels1` (
  `id` int(10) UNSIGNED NOT NULL,
  `english` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `examination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_year` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidates_olevels1`
--

INSERT INTO `nursing_candidates_olevels1` (`id`, `english`, `examination`, `exam_number`, `exam_year`, `mathematics`, `chemistry`, `physics`, `biology`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'b2', 'waec', '2121', 2003, 'b2', 'a1', 'b2', 'a1', 3, NULL, NULL),
(2, 'a1', 'waec', 'tr4555', 2002, 'b2', 'ar', 'a1', 'ar', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidates_olevels2`
--

CREATE TABLE `nursing_candidates_olevels2` (
  `id` int(10) UNSIGNED NOT NULL,
  `english` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `examination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `exam_year` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidates_olevels2`
--

INSERT INTO `nursing_candidates_olevels2` (`id`, `english`, `examination`, `exam_number`, `exam_year`, `mathematics`, `chemistry`, `physics`, `biology`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'b2', 'neco', '2121', 2003, 'b2', 'a1', 'a1', 'a1', 3, NULL, NULL),
(2, 'b2', 'waec', 'tr4555', 2002, 'b2', 'f9', 'b2', 'c6', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidates_profiles`
--

CREATE TABLE `nursing_candidates_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('female','male') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'female',
  `passport` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_state` smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  `birth_town` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidates_profiles`
--

INSERT INTO `nursing_candidates_profiles` (`id`, `user_id`, `dob`, `gender`, `passport`, `origin_state`, `birth_town`, `lga`, `nationality`, `created_at`, `updated_at`) VALUES
(2, 10, '11/22/22', 'female', '10.png', 2647, 'OWERRI', 'OWERRI NORTH', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidate_interview`
--

CREATE TABLE `nursing_candidate_interview` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_num` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_score` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidate_pins`
--

CREATE TABLE `nursing_candidate_pins` (
  `id` int(10) UNSIGNED NOT NULL,
  `serial_number` int(10) UNSIGNED NOT NULL,
  `pin` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` enum('active','used') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `date_used` datetime NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_candidate_pins`
--

INSERT INTO `nursing_candidate_pins` (`id`, `serial_number`, `pin`, `status`, `date_used`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1111111111, 2222222222, 'used', '0000-00-00 00:00:00', 0, NULL, NULL),
(2, 2222222222, 1111111111, 'used', '0000-00-00 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nursing_candidate_result`
--

CREATE TABLE `nursing_candidate_result` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_number` smallint(5) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `score` double(8,2) NOT NULL DEFAULT '0.00',
  `remark` enum('PASS','FAIL') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FAIL',
  `used_card` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nursing_students`
--

CREATE TABLE `nursing_students` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_students`
--

INSERT INTO `nursing_students` (`id`, `name`, `email`, `password`, `remember_token`, `phone`, `created_at`, `updated_at`) VALUES
(000001, 'NJOKU OKECHUKWU VALENTINE', 'bonsoirval@gmail.com', '$2y$10$oNEfv0URqlbZDgMk3N8Acefha38oTrZyGQy2zaOIlmJp/MzDddoWq', 'ZunFPgx7CkWk0RNcFP7SWGBSIIBhG0AOxfj6n38ldar7JaTVuACoZhvN6piy', '07038616871', '2018-05-01 14:52:17', '2018-05-01 14:52:17'),
(000003, 'njoku okechukwu   valentine', 'bonsoirval@men.com', '$2y$10$zaODQu7FVJy2MHj4QGHI.O7Wjl0RW89e17EIFWGlSet1SLvgRnyB.', 'tN596ndwiTzsUH2YZt4Tep9N8TSvE8M7c356K5Svfs5zG4Hjmgc0ZvfBGMIY', '09048976569', '2018-05-01 21:42:52', '2018-05-21 12:37:48'),
(000004, 'njoku okechukwu valentine', 'bonsoirval@menn.com', '$2y$10$mPyJ1809rjQ.L8rTUvDv..ziORqrDKGhF36Q93sq2I8nC4LSh4dNu', 'g6QpMXPWb1AvaaGuiQAvrKjZ3Hm5vXWlirT0xv7fYtvga0up4rgQs8G78gYa', '09034948822', '2018-05-08 12:20:52', '2018-05-08 12:20:52'),
(000005, 'njoku okechukwu valentine', 'bonsoirval@me.com', '$2y$10$UHLlE8R3G/UxJONiHPj4/OofBe.b.h8AHsB8iRjWxcgHQjlW5Lv32', 'dF3XmeGU2500oZntTXiPcf9FGd1839fPKyIREFwxXIuoyCj6ZCk3NAH9Iq1C', '07038616897', '2018-05-08 12:23:30', '2018-05-08 12:23:30'),
(000006, 'njoku okechukwu valentine', 'bonsoirval@en.com', '$2y$10$wd6H.B.wkuOuatcbbTugiO2Q1sy/PIndj4/yJJ1gSgp197pkNYtxC', 'YvCcczYq91P5hQj8aYWzzhNaTkXMV1xwO3z89CkxFWj2KidC2f01LVgLpcpb', '07038410897', '2018-05-08 12:26:09', '2018-05-08 12:26:09'),
(000007, 'real name', 'you@youn.youn', '$2y$10$b1xLWIA/zVHOxi4XEmvrYOVGW4f30H2Z2/rdHGLZMLSXR1tclk0G.', '8VEUkWo6zZbmgDAljehL9hTOP5CZdT4kUm2SaoG4McgSfrk6Bfvb5EqDg3lH', '09034948881', '2018-05-08 12:30:02', '2018-05-19 05:05:03'),
(000008, 'njoku okechukwu valentine', 'bon@bon.bon', '$2y$10$cUI4Vvv5Yj/E.RnW9EZlMe7r7pLkJKX06yAVwwjMZVGNxQ316z7LK', 'boarts1p5v04Lw9XlIqXv2LjF7QG8Gg0PGyh6Q0zY2seOLV6GA66IoIVzIGb', '08034948883', '2018-05-08 12:48:36', '2018-05-19 04:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `nursing_students_profiles`
--

CREATE TABLE `nursing_students_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `dob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('female','male') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'female',
  `passport` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_state` smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  `birth_town` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` smallint(5) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nursing_students_profiles`
--

INSERT INTO `nursing_students_profiles` (`id`, `user_id`, `dob`, `gender`, `passport`, `origin_state`, `birth_town`, `lga`, `nationality`, `created_at`, `updated_at`) VALUES
(1, 3, '26/08/1984', 'male', '3.png', 2647, 'owerri', 'Owerri north', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pts_candidate_result`
--

CREATE TABLE `pts_candidate_result` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `human_biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `foundation_of_nursing` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `use_of_english` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `medical_jurisprudence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `microbiology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `behaviour_science` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `emergency_situation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `nutrition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `pharmacology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `moral_ethics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `pho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `computer_science` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `practical` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `remark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `exam_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `used_card` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_code` text NOT NULL,
  `mat_number` text NOT NULL,
  `test` int(2) NOT NULL,
  `assignment` int(2) NOT NULL DEFAULT '0',
  `lab` int(2) NOT NULL DEFAULT '0',
  `total` int(3) NOT NULL DEFAULT '0',
  `remark` enum('FAIL','PASS','EXCELLENT','') DEFAULT 'FAIL',
  `grade` enum('A','B','C','D','E','F') NOT NULL DEFAULT 'F',
  `school` enum('nurising','medlab','midwifery','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Andaman and Nicobar Islands', 101, NULL, NULL),
(2647, 'Abia', 160, NULL, NULL),
(2648, 'Abuja Federal Capital Territor', 160, NULL, NULL),
(2649, 'Adamawa', 160, NULL, NULL),
(2650, 'Akwa Ibom', 160, NULL, NULL),
(2651, 'Anambra', 160, NULL, NULL),
(2652, 'Bauchi', 160, NULL, NULL),
(2653, 'Bayelsa', 160, NULL, NULL),
(2654, 'Benue', 160, NULL, NULL),
(2655, 'Borno', 160, NULL, NULL),
(2656, 'Cross River', 160, NULL, NULL),
(2657, 'Delta', 160, NULL, NULL),
(2658, 'Ebonyi', 160, NULL, NULL),
(2659, 'Edo', 160, NULL, NULL),
(2660, 'Ekiti', 160, NULL, NULL),
(2661, 'Enugu', 160, NULL, NULL),
(2662, 'Gombe', 160, NULL, NULL),
(2663, 'Imo', 160, NULL, NULL),
(2664, 'Jigawa', 160, NULL, NULL),
(2665, 'Kaduna', 160, NULL, NULL),
(2666, 'Kano', 160, NULL, NULL),
(2667, 'Katsina', 160, NULL, NULL),
(2668, 'Kebbi', 160, NULL, NULL),
(2669, 'Kogi', 160, NULL, NULL),
(2670, 'Kwara', 160, NULL, NULL),
(2671, 'Lagos', 160, NULL, NULL),
(2672, 'Nassarawa', 160, NULL, NULL),
(2673, 'Niger', 160, NULL, NULL),
(2674, 'Ogun', 160, NULL, NULL),
(2675, 'Ondo', 160, NULL, NULL),
(2676, 'Osun', 160, NULL, NULL),
(2677, 'Oyo', 160, NULL, NULL),
(2678, 'Plateau', 160, NULL, NULL),
(2679, 'Rivers', 160, NULL, NULL),
(2680, 'Sokoto', 160, NULL, NULL),
(2681, 'Taraba', 160, NULL, NULL),
(2682, 'Yobe', 160, NULL, NULL),
(2683, 'Zamfara', 160, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nursing_candidates_email_unique` (`email`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `medlab_candidates`
--
ALTER TABLE `medlab_candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nursing_candidates_email_unique` (`email`);

--
-- Indexes for table `medlab_candidates_contacts`
--
ALTER TABLE `medlab_candidates_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidates_nextkins`
--
ALTER TABLE `medlab_candidates_nextkins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidates_olevels1`
--
ALTER TABLE `medlab_candidates_olevels1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidates_olevels2`
--
ALTER TABLE `medlab_candidates_olevels2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidates_profiles`
--
ALTER TABLE `medlab_candidates_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidate_interview`
--
ALTER TABLE `medlab_candidate_interview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidate_pins`
--
ALTER TABLE `medlab_candidate_pins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `medlab_candidate_result`
--
ALTER TABLE `medlab_candidate_result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nursing_candidates`
--
ALTER TABLE `nursing_candidates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nursing_candidates_email_unique` (`email`);

--
-- Indexes for table `nursing_candidates_contacts`
--
ALTER TABLE `nursing_candidates_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidates_nextkins`
--
ALTER TABLE `nursing_candidates_nextkins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidates_olevels1`
--
ALTER TABLE `nursing_candidates_olevels1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidates_olevels2`
--
ALTER TABLE `nursing_candidates_olevels2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidates_profiles`
--
ALTER TABLE `nursing_candidates_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidate_interview`
--
ALTER TABLE `nursing_candidate_interview`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidate_pins`
--
ALTER TABLE `nursing_candidate_pins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_candidate_result`
--
ALTER TABLE `nursing_candidate_result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `nursing_students`
--
ALTER TABLE `nursing_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nursing_candidates_email_unique` (`email`);

--
-- Indexes for table `nursing_students_profiles`
--
ALTER TABLE `nursing_students_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pts_candidate_result`
--
ALTER TABLE `pts_candidate_result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medlab_candidates`
--
ALTER TABLE `medlab_candidates`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `medlab_candidates_contacts`
--
ALTER TABLE `medlab_candidates_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medlab_candidates_nextkins`
--
ALTER TABLE `medlab_candidates_nextkins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medlab_candidates_olevels1`
--
ALTER TABLE `medlab_candidates_olevels1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medlab_candidates_olevels2`
--
ALTER TABLE `medlab_candidates_olevels2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medlab_candidates_profiles`
--
ALTER TABLE `medlab_candidates_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `medlab_candidate_interview`
--
ALTER TABLE `medlab_candidate_interview`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medlab_candidate_pins`
--
ALTER TABLE `medlab_candidate_pins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medlab_candidate_result`
--
ALTER TABLE `medlab_candidate_result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `nursing_candidates`
--
ALTER TABLE `nursing_candidates`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nursing_candidates_contacts`
--
ALTER TABLE `nursing_candidates_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nursing_candidates_nextkins`
--
ALTER TABLE `nursing_candidates_nextkins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nursing_candidates_olevels1`
--
ALTER TABLE `nursing_candidates_olevels1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nursing_candidates_olevels2`
--
ALTER TABLE `nursing_candidates_olevels2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nursing_candidates_profiles`
--
ALTER TABLE `nursing_candidates_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nursing_candidate_interview`
--
ALTER TABLE `nursing_candidate_interview`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nursing_candidate_pins`
--
ALTER TABLE `nursing_candidate_pins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nursing_candidate_result`
--
ALTER TABLE `nursing_candidate_result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nursing_students`
--
ALTER TABLE `nursing_students`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nursing_students_profiles`
--
ALTER TABLE `nursing_students_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pts_candidate_result`
--
ALTER TABLE `pts_candidate_result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2684;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
