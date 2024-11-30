-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 12:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `applicantImage` text DEFAULT NULL,
  `applicantLastName` varchar(255) NOT NULL,
  `applicantFirstName` varchar(255) NOT NULL,
  `applicantMiddleInitial` varchar(10) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `objective` text NOT NULL,
  `dateOfBirth` date NOT NULL,
  `placeOfBirth` varchar(255) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `civilStatus` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `tertiarySchool` varchar(255) NOT NULL,
  `tertiaryAddress` varchar(255) NOT NULL,
  `tertiaryCourse` varchar(255) NOT NULL,
  `tertiaryYear` varchar(50) NOT NULL,
  `secondaryShsSchool` varchar(255) NOT NULL,
  `secondaryShsAddress` varchar(255) NOT NULL,
  `secondaryShsYear` varchar(50) NOT NULL,
  `secondaryJhsSchool` varchar(255) DEFAULT NULL,
  `secondaryJhsAddress` varchar(255) DEFAULT NULL,
  `secondaryJhsYear` varchar(50) DEFAULT NULL,
  `primarySchool` varchar(255) NOT NULL,
  `primaryAddress` varchar(255) NOT NULL,
  `primaryYear` varchar(50) NOT NULL,
  `applicantStatus` varchar(50) NOT NULL,
  `applyingFor` varchar(255) DEFAULT NULL,
  `applicationFrom` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `applicantImage`, `applicantLastName`, `applicantFirstName`, `applicantMiddleInitial`, `address`, `contactNo`, `email`, `objective`, `dateOfBirth`, `placeOfBirth`, `sex`, `civilStatus`, `religion`, `nationality`, `fatherName`, `motherName`, `tertiarySchool`, `tertiaryAddress`, `tertiaryCourse`, `tertiaryYear`, `secondaryShsSchool`, `secondaryShsAddress`, `secondaryShsYear`, `secondaryJhsSchool`, `secondaryJhsAddress`, `secondaryJhsYear`, `primarySchool`, `primaryAddress`, `primaryYear`, `applicantStatus`, `applyingFor`, `applicationFrom`, `updated_at`, `created_at`) VALUES
(1, 'images/JjcJ4ZefvWroMYzNO1O9KWkQ5qInIMUrWd5YGFEN.jpg', 'Alvaro Jr.', 'Marcelino', 'R.', 'Poblacion, Baliwag, Bulacan', '09059277831', 'marceliknows01@gmail.com', 'Energetic and motivated student pursuing a degree in Information Technology, seeking an internship to gain practical experience and apply my academic knowledge in a real-world setting.', '2003-02-01', 'Bustos, Bulacan', 'Male', 'Single', 'Roman Catholic', 'Filipino', 'Marcelino Alvaro', 'Lilibeth Alvaro', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', '2019-2021', 'Vicris School', 'Tibag, Baliwag, Bulacan', '2015-2019', 'Vicris School', 'Tibag, Baliwag, Bulacan', '2013-2015', 'for interview', 'project manager', 'Indeed', '2024-11-25 16:01:05', '2024-11-26 00:39:10'),
(2, 'images/F1zgKHiAOhG2fY2TLpT35ULa1kYBb1jBedIP4NnU.png', 'Dela Cruz', 'John Elfie', 'V.', 'Dulong Bayan 2nd, Sulivan, Baliwag, Bulacan', '09690515502', 'djohnelfie@gmail.com', 'To enhance my knowledge and ability in the field wherein I will be assigned and to develop my confidence, dedication, and professionalism aside from contributing in the development of the workplace.', '2002-06-30', 'Bulacan', 'Male', 'Single', 'Methodist', 'Filipino', 'Elpidio S. Dela Cruz', 'Ma. Eva Victoria Dela Cruz', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'Sulivan National High School, Baliwag, Bulacan', 'Sulivan, Baliwag, Bulacan', '2015-2021', NULL, NULL, NULL, 'Catulinan Elementary School', 'Catulinan, Baliwag, Bulacan', '2009-2015', 'dropped', 'Researcher', 'Jobstreet', '2024-11-26 03:55:58', '2024-11-26 00:39:31'),
(3, 'images/MDUKNEZUAqyhAoSApGu1wvDdmNsOWlh87atXYCdA.jpg', 'Hore', 'Dessie Mae', NULL, 'Sta. Barbara, Baliwag, Bulacan', '09153127195', 'dessieortiz24@gmail.com', 'A student who is highly determined, flexible, and has an adequate academic background and a strong dedication to excellence. In search of a challenging role that fits my talents, hobbies, and proficient ambitions to gain practical experience and contribute to a dynamic team.', '2001-12-24', 'Bustos, Bulacan', 'Female', 'Single', 'Roman Catholic', 'Filipino', 'Jonnis P. Ortiz', 'Mae Hore-Ortiz', 'Dalubhasaang Politekniko ng Lungsod ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', 'Bachelor of Science in Information Technology', '2021-Present', 'La Consolacion University Philippines', 'Malolos, Bulacan', '2018-2020', 'Bajet-Castillo High School', 'Longos, Pulilan, Bulacan', '2014-2018', 'Banga 2nd Elementary School', 'Banga 2nd, Plaridel, Bulacan', '2008-2014', 'hired', 'Researcher', 'Indeed', '2024-11-25 17:56:44', '2024-11-26 00:39:44'),
(4, 'images/gsbT5G3n1tD5yv9nYk2bVI50HdzEPGMuT1DYt6wM.jpg', 'Santos', 'Raymond', 'A.', 'Bonga Menor, Bustos, Bulacan', '09166928596', 'santosraymond437@gmail.com', 'Aspiring IT professional and BSIT student with a background in programming and graphic designing. Seeking an opportunity to improve technical skills, learn and work with industry experts at a technology company.', '2000-04-13', 'Bustos, Bulacan', 'Male', 'Single', 'Jehovah\'s Witnesses', 'Filipino', 'Nestor Santos', 'Mirasol Santos', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', '2016-2018', 'Tibagan National High School', 'Tibagan, Bustos, Bulacan', '2012-2016', 'Bonga Menor Elementary School', 'Bonga Menor, Bustos, Bulacan', '2006-2012', 'for interview', 'UI/UX Designer', 'Jobstreet', '2024-11-26 04:45:18', '2024-11-26 00:39:57'),
(5, 'images/H81HpgJ5jrK1ayTQVRtRte1umCdOJcCX7EuDC8qr.png', 'Zita', 'Jeryll Joe', 'B.', 'Tibag, Baliwag Bulacan', '09487227572', 'jeryllzita05@gmail.com', 'To acquire a full-time job in an Information Technology field, to be able to showcase my knowledge and skills in the mentioned field with such passion while doing so.', '2003-08-05', 'Tibag, Baliwag, Bulacan', 'Male', 'Single', 'Roman Catholic', 'Filipino', 'Jeryll Zita', 'Joerelyn Zita', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliwag, Bulacan', '2019-2021', 'Teodoro Evangelista', 'Tibag, Baliwag, Bulacan', '2015-2019', 'Engr. Vicente R. Cruz Memorial High School', 'Tibag, Baliwag, Bulacan', '2009-2015', 'screening', 'Programmer', 'Indeed', '2024-11-26 03:48:36', '2024-11-26 00:40:08'),
(6, 'images/0MXuFMhLsdhkMA3T7NylcrnYwGb9NuTYtSW7H5bj.jpg', 'Rabajante', 'Princess', NULL, 'Makinabang, Baliwag, Bulacan', '09053573147', 'rabajanteprincess11@gmail.com', 'Passionate  about thorough research, focused on finding insights for project success. Committed to leading the team with care, ensuring every step aligns with the project’s goals.', '2003-04-11', 'Calero Jose Panganiban, Camarines Norte', 'Female', 'Single', 'Born Again Christian', 'Filipino', 'Job Rabajante', 'Mary Ann Rabajante', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliuag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'Jose Panganiban National High School', 'Jose Panganiban, Camarines Norte', '2015-2021', NULL, NULL, NULL, 'Calero Elementary School', 'Calero, Jose Panganiban, Camarines Norte', '2009-2015', 'for interview', 'Project Manager', 'Jobstreet', '2024-11-26 05:12:21', '2024-11-26 12:47:19'),
(7, 'images/RF684ubazQnoj19Yy9YMa3jQykPF3cn0AQ6CRr1m.jpg', 'Española', 'John Christian', 'A.', 'Pagala, Baliwag, Bulacan', '09201833038', 'johnchristianespanola216@gmail.com', 'To contribute my strong analytical, research, and leadership skills to a dynamic and innovative team, where I can apply my experience and make t possible to contribute someday in a big corporation', '2002-12-25', 'Tanuan City, Batangas', 'Male', 'Single', 'Roman Catholic', 'Filipino', 'Roger Española', 'Imelda Agaloos', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliuag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'STI College Baliuag', 'Gil Carlos St, Poblacion, Baliuag Bulacan', '2019-2021', 'Sulivan National High School', 'Sulivan, Baliuag, Bulacan', '2015-2019', 'Spring Of Virtue Learning Center Inc.', 'Pinagsama, Phase 2 Taguig City', '2009-2015', 'for interview', 'designer', 'Jobstreet', '2024-11-26 05:11:45', '2024-11-26 12:54:27'),
(8, 'images/LtFc8U5LQOTraD2eLU8Uo99qkQpADW6xmB8rbpJJ.jpg', 'Jebulan', 'Axle-John', 'DG.', 'Marungko, Angat, Bulacan', '09458874613', 'jebulanaxlejohn29@gmail.com', 'To achieve a goal that gives me the opportunity to learn new things in the field of Information Technology and also apply my skills and experience in day giving task.', '2003-10-16', 'Makati City', 'Male', 'Single', 'Roman Catholic', 'Filipino', 'Roberto Jebulan', 'Analiza Jebulan', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliuag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'St. Joseph Kalinangan Integrated School', 'Sulucan, Angat, Bulacan', '2015-2021', NULL, NULL, NULL, 'Dr. Antonio C. Villarama Memorial School', 'Marungko, Angat, Bulacan', '2009-2015', 'dropped', 'Programmer', 'LinkedIn', '2024-11-26 05:12:43', '2024-11-26 12:54:27'),
(9, 'images/qqdkN6Jn97IPX2jzvKnJlumHfkPN28fzXLqOSJyW.png', 'Gaton', 'Jhoervin Carl', 'R.', 'Sampaloc, San Rafael, Bulacan', '09217237225', 'jcgatonrivera@gmail.com', 'To leverage my technical skills and passion for innovation as an IT practitioner by contributing to the development and maintenance of efficient, secure, and scalable systems, while continuously enhancing my knowledge and expertise to support organizational goals.', '2003-03-27', 'San Rafael, Bulacan', 'Male', 'Single', 'Roman Catholic', 'Filipino', 'Vicente Gaton', 'Maria Monina Gaton', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliuag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'STI College Baliuag', 'Gil Carlos St, Poblacion, Baliuag Bulacan', '2019-2021', 'Lydia D. Villanca Trade School', 'Ulingao, San Rafael, Bulacan', '2015-2019', 'Sampaloc Elementary School', 'Sampaloc, San Rafael, Bulacan', '2009-2015', 'hired', 'Programmer', 'Jobstreet', '2024-11-26 05:11:56', '2024-11-26 13:00:55'),
(10, 'images/oAiLepeIg0oKCbsCpGDxamMjOkYzGLmbyWJ2J5ah.png', 'Joson', 'Raymart', 'SM.', 'Poblacion, Baliwag, Bulacan', '09760143890', 'rymrtjsn@gmail.com', 'Motivated person seeking to leverage my technical skills and passion for problem-solving in a dynamic environment. Eager to contribute to innovative projects while gaining practical experience in software development, system administration, and network security.', '1992-02-09', 'Poblacion, Baliwag, Bulacan', 'Male', 'Married', 'N/A', 'Filipino', 'Reynaldo Joson', 'Nora Joson', 'Dalubhasaang Politekniko Ng Lungsod Ng Baliwag', 'Star Mall Bldg. San Jose St., Baliuag, Bulacan', 'Bachelor Of Science In Information Technology', '2021-Present', 'Mariano Ponce National High School', 'Bagong Nayon, Baliuag, Bulacan', '2005-2010', NULL, NULL, NULL, 'Mariano Ponce National High School', 'Bagong Nayon, Baliuag, Bulacan', '1999-2005', 'for interview', 'Project Manager', 'Jobstreet', '2024-11-26 12:50:46', '2024-11-26 13:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Ircd6cQJWXZLQP032qoovSSNLiSEanPtc4J6Kk9Q', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaXJGWlRwSDNqUWt2QXVITDM3T0I1blkyTHpqNk9jWDd1dGVUUHhMSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXN1bWUvMTAvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1732966274);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin123', 'admin@example.com', '2024-11-18 18:25:59', '$2y$12$A6/9eiU79302tBlaI80w9uWHbx2xWdOH6onzepAfQ2U8x8M5YCG9O', 'SiAFeJJMjbvzpyOMa7HcSoXmCxOrtxrsHYEYty4lbjLroq9aJK4yyV2RF1bl', '2024-11-18 18:26:00', '2024-11-18 18:26:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
