-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2025 at 11:02 AM
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
-- Database: `skillhive`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `featured_image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'IOE, BE', 'tu-engineering', '2025-07-05 00:18:06', '2025-07-05 00:18:06'),
(2, 'Cyber Security', 'cybersecurity', '2025-07-05 00:21:31', '2025-07-05 00:21:31'),
(3, 'Computer Science', 'computerscience', '2025-07-05 01:07:21', '2025-07-05 01:07:21'),
(4, 'AI', 'ai', '2025-07-05 01:12:14', '2025-07-05 01:12:14'),
(5, 'Data Science', 'datascience', '2025-07-05 01:43:37', '2025-07-05 01:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `how_section` text DEFAULT NULL,
  `guidance` text DEFAULT NULL,
  `reference` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `category_id`, `feature_image`, `title`, `description`, `how_section`, `guidance`, `reference`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/courses/1751695539_code3.jpg', 'BE Engineering in TU', 'The Institute of Engineering(IOE), founded in 1930  (1987/11/19BS) as Nepal’s first technical school and reformed to present shape  in 1972,  is producing outstanding  engineering technicians and engineers for more than 80 years. The tradition of excellence  in the IOE is further intensifying in the course of time. IOE is also becoming  more and more responsive to the ever-changing needs of the students and the  engineering profession.   The Institute is experiencing a period of significant  growth. The voyage of IOE departing from producing middle- and high level  technician is continui', 'The Institute of Engineering(IOE), founded in 1930  (1987/11/19BS) as Nepal’s first technical school and reformed to present shape  in 1972,  is producing outstanding  engineering technicians and engineers for more than 80 years. The tradition of excellence  in the IOE is further intensifying in the course of time. IOE is also becoming  more and more responsive to the ever-changing needs of the students and the  engineering profession.   The Institute is experiencing a period of significant  growth. The voyage of IOE departing from producing middle- and high level  technician is continui', 'The Institute of Engineering(IOE), founded in 1930  (1987/11/19BS) as Nepal’s first technical school and reformed to present shape  in 1972,  is producing outstanding  engineering technicians and engineers for more than 80 years. The tradition of excellence  in the IOE is further intensifying in the course of time. IOE is also becoming  more and more responsive to the ever-changing needs of the students and the  engineering profession.   The Institute is experiencing a period of significant  growth. The voyage of IOE departing from producing middle- and high level  technician is continui', '<a href=\"ioe.tu.edu.np\">IOE</a>', '2025-07-05 00:20:39', '2025-07-05 00:20:39'),
(2, 2, 'uploads/courses/1751695815_images1.jpeg', 'Cyber Securiy', 'Cybersecurity is the practice of protecting people, systems and data from cyberattacks by using various technologies, processes and policies. \r\n \r\nAt the enterprise level, cybersecurity is key to overall risk management strategy, and specifically, cyber risk management. Common cybersecurity threats include ransomware and other malware, phishing scams, data theft and more recently, attacks powered by artificial intelligence (AI).\r\n\r\nAs cyberthreats grow in sophistication and frequency, organizations are increasing their investments in prevention and mitigation. The International Data Corporation (IDC) projects that security spending will reach USD 377 billion by 2028.1', 'Cybersecurity is the practice of protecting people, systems and data from cyberattacks by using various technologies, processes and policies. \r\n \r\nAt the enterprise level, cybersecurity is key to overall risk management strategy, and specifically, cyber risk management. Common cybersecurity threats include ransomware and other malware, phishing scams, data theft and more recently, attacks powered by artificial intelligence (AI).\r\n\r\nAs cyberthreats grow in sophistication and frequency, organizations are increasing their investments in prevention and mitigation. The International Data Corporation (IDC) projects that security spending will reach USD 377 billion by 2028.1', 'Cybersecurity is the practice of protecting people, systems and data from cyberattacks by using various technologies, processes and policies. \r\n \r\nAt the enterprise level, cybersecurity is key to overall risk management strategy, and specifically, cyber risk management. Common cybersecurity threats include ransomware and other malware, phishing scams, data theft and more recently, attacks powered by artificial intelligence (AI).\r\n\r\nAs cyberthreats grow in sophistication and frequency, organizations are increasing their investments in prevention and mitigation. The International Data Corporation (IDC) projects that security spending will reach USD 377 billion by 2028.1', 'Hack The Box ,Cyber array', '2025-07-05 00:25:15', '2025-07-05 00:25:15'),
(3, 3, 'uploads/courses/1751698533_Screenshot2025-07-05123640.png', 'Introduction to Computer Science', 'This is CS50x , Harvard University\'s introduction to the intellectual enterprises of computer science and the art of programming for majors and non-majors alike, with or without prior programming experience. An entry-level course taught by David J. Malan, CS50x teaches students how to think algorithmically and solve problems efficiently. Topics include abstraction, algorithms, data structures, encapsulation, resource management, security, software engineering, and web development. Languages include C, Python, SQL, and JavaScript plus CSS and HTML. Problem sets inspired by real-world domains of biology, cryptography, finance, forensics, and gaming. The on-campus version of CS50x , CS50, is Harvard\'s largest course.', 'Students who earn a satisfactory score on 9 problem sets (i.e., programming assignments) and a final project are eligible for a certificate. This is a self-paced course–you may take CS50x on your own schedule.\r\n\r\nHarvardX requires individuals who enroll in its courses on edX to abide by the terms of the edX honor code. HarvardX will take appropriate corrective action in response to violations of the edX honor code, which may include dismissal from the HarvardX course; revocation of any certificates received for the HarvardX course; or other remedies as circumstances warrant. No refunds will be issued in the case of corrective action for such violations. Enrollees who are taking HarvardX courses as part of another program will also be governed by the academic policies of those programs.\r\n\r\nHarvardX pursues the science of learning. By registering as an online learner in an HX course, you will also participate in research about learning. Read our research statement to learn more.\r\n\r\nHarvard University and HarvardX are committed to maintaining a safe and healthy educational and work environment in which no member of the community is excluded from participation in, denied the benefits of, or subjected to discrimination or harassment in our program. All members of the HarvardX community are expected to abide by Harvard policies on nondiscrimination, including sexual harassment, and the edX Terms of Service. If you have any questions or concerns, please contact harvardx@harvard.edu and/or report your experience through the edX contact form.\r\n\r\nTaught by\r\nDavid J. Malan', 'Harvard University and HarvardX are committed to maintaining a safe and healthy educational and work environment in which no member of the community is excluded from participation in, denied the benefits of, or subjected to discrimination or harassment in our program. All members of the HarvardX community are expected to abide by Harvard policies on nondiscrimination, including sexual harassment, and the edX Terms of Service. If you have any questions or concerns, please contact harvardx@harvard.edu and/or report your experience through the edX contact form.\r\n\r\nTaught by\r\nDavid J. Malan', '<a href=\"https://www.edx.org/learn/computer-science/harvard-university-cs50-s-introduction-to-computer-science\"> Link </a>', '2025-07-05 01:10:33', '2025-07-05 01:10:33'),
(4, 4, 'uploads/courses/1751698912_Screenshot2025-07-05124047.png', 'Journey of AI with Everyone', 'Artificial intelligence is transforming the world and helping organizations of all sizes grow, innovate, and make smarter decisions. The Artificial Intelligence Professional Program will equip you with knowledge of the principles, tools, techniques, and technologies driving this transformation.\r\nThis online program provides rigorous coverage of the most important topics in modern artificial intelligence, including:\r\n\r\nMachine Learning\r\nDeep Learning\r\nNatural Language Processing and Understanding\r\nSupervised and Unsupervised Learning\r\nReinforcement Learning\r\nGraph Neural Networks (GNNs)\r\nMulti-Task and Meta-Learning', 'The courses will equip you with the skills and confidence to:\r\n\r\nBuild your own AI models and algorithms without the constraints of off-the-shelf solutions.\r\nInnovate and create new models, tools, and algorithms to tackle real-world challenges in AI.\r\nEffectively debug your code.\r\nFine-tune and optimize model parameters for better results.\r\nEvaluate performance of AI models accurately.\r\nImplement generative language models.\r\nPerform few-shot and zero-shot learning with pre-trained language models.\r\nUnderstand research results and conduct your own research in the field.', NULL, '<a href=\"https://online.stanford.edu/programs/artificial-intelligence-professional-program\" traget=\"_blank\"> link </a>', '2025-07-05 01:16:52', '2025-07-05 01:16:52'),
(5, 2, 'uploads/courses/1751700347_Screenshot2025-07-05130654.png', 'Basic of Cyber Security', 'Cyberattacks are becoming more frequent, complex, and targeted, collectively costing organizations billions of dollars every year. This is why cybersecurity is one of the fastest growing industries in the United States, as every year, more organizations and government agencies seek to hire cybersecurity professionals with the specialized technical skills needed to defend mission-critical computer systems, networks, and cloud applications against cyberattacks.', 'For senior professionals in the field, the challenge has expanded beyond traditional defense methods. The rise of AI, machine learning, and other emerging technologies is reshaping the way cybercriminals operate, while simultaneously offering new tools for defense. You will be tasked with safeguarding critical systems, not only through technical expertise but also by guiding organizations in adapting to the rapid pace of change and staying ahead of increasingly sophisticated attacks.\r\n\r\nEnroll today in the MIT xPRO Professional Certificate in Cybersecurity program, designed to help you explore all branches of cybersecurity and identify your unique path to growth in this high-demand field. It also includes personalized feedback from program leaders, insights from guest speakers, career coaching, mentorship, and the opportunity to create a capstone project on network development to use for a job portfolio.', 'Enroll today in the MIT xPRO Professional Certificate in Cybersecurity program, designed to help you explore all branches of cybersecurity and identify your unique path to growth in this high-demand field. It also includes personalized feedback from program leaders, insights from guest speakers, career coaching, mentorship, and the opportunity to create a capstone project on network development to use for a job portfolio.', '<a href=\"https://executive-ed.xpro.mit.edu/professional-certificate-cybersecurity\" target=\"_blank\"> Link </a>', '2025-07-05 01:40:47', '2025-07-05 01:40:47'),
(6, 5, 'uploads/courses/1751700618_Screenshot2025-07-05131118.png', 'Data Science and Its Fundamentals', 'e-Masters in Data Science and Business Analytics program offers working professionals the opportunity to earn a masters degree in data science and business analytics online. This program combines the latest advancements in data science with the practical applications of business analytics, providing professionals with a comprehensive understanding of the field. The program from the Department of Management Sciences (DoMS), formerly known as Department of Industrial and Management Engineering (IME), is designed to help professionals develop the skills and knowledge needed to make data-driven decisions and solve complex business problems. The curriculum covers a wide range of topics, including data mining, machine learning, statistical modeling, big data, and more.', 'The Masters in Data Science and Business Analytics program is an ideal choice for individuals looking to advance their careers in this rapidly growing field. Graduates will be equipped with the skills and knowledge needed to make an impact in a variety of industries, including technology, finance, healthcare, marketing, and more. With a flexible online format, students can pursue their masters degree in data science and business analytics while balancing work and other commitments.', NULL, '<a href=\"https://emasters.iitk.ac.in/course/masters-in-data-science-and-business-analytics\" target=\"_blank\"> Link </a>', '2025-07-05 01:45:18', '2025-07-05 01:45:18'),
(7, 5, 'uploads/courses/1751700620_Screenshot2025-07-05131118.png', 'Data Science and Its Fundamentals', 'e-Masters in Data Science and Business Analytics program offers working professionals the opportunity to earn a masters degree in data science and business analytics online. This program combines the latest advancements in data science with the practical applications of business analytics, providing professionals with a comprehensive understanding of the field. The program from the Department of Management Sciences (DoMS), formerly known as Department of Industrial and Management Engineering (IME), is designed to help professionals develop the skills and knowledge needed to make data-driven decisions and solve complex business problems. The curriculum covers a wide range of topics, including data mining, machine learning, statistical modeling, big data, and more.', 'The Masters in Data Science and Business Analytics program is an ideal choice for individuals looking to advance their careers in this rapidly growing field. Graduates will be equipped with the skills and knowledge needed to make an impact in a variety of industries, including technology, finance, healthcare, marketing, and more. With a flexible online format, students can pursue their masters degree in data science and business analytics while balancing work and other commitments.', NULL, '<a href=\"https://emasters.iitk.ac.in/course/masters-in-data-science-and-business-analytics\" target=\"_blank\"> Link </a>', '2025-07-05 01:45:20', '2025-07-05 01:45:20');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_04_162027_create_categories_table', 1),
(5, '2025_07_04_162028_create_courses_table', 1),
(6, '2025_07_05_001543_create_opportunities_table', 1),
(7, '2025_07_05_033348_create_pdfresources_table', 1),
(8, '2025_07_05_041704_create_blog_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opportunities`
--

CREATE TABLE `opportunities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `for` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opportunities`
--

INSERT INTO `opportunities` (`id`, `type`, `title`, `category`, `for`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Student Visa', 'Under Graduate schoolarship in Sunderland university', 'Study', 'International', 'Study Visa', '2025-07-05 00:31:44', '2025-07-05 00:31:44');

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
-- Table structure for table `pdfresource`
--

CREATE TABLE `pdfresource` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pdfresource`
--

INSERT INTO `pdfresource` (`id`, `title`, `type`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Personal Finance Management system', 'Tutorial', 'I book that help to to guide financelly in better way', 'https://pdfdrive.com.co/wp-content/pdfh/PERSONAL_FINANCIAL_PLANNING-h51555.pdf', '2025-07-05 01:54:28', '2025-07-05 01:54:28');

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
('VNTj9IVF45WOVsDomMVo8ab8ptqyDS1Cz76paqBn', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYzYxS1JoWkJ6RjllUWFDSjBsNnNUSTNGMjJ2aTJXVXl0eDRES0RFMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZWFyY2g/cXVlcnk9Q29tcHV0ZXIlMjBTY2llbmNlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1751706089);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('superadmin','admin','student') NOT NULL DEFAULT 'student',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-07-04 23:44:11', '$2y$12$JNyVc0DlJujh9K43sBHcIOWuIHhtJleQiIxaCQWwGMJ1RzLvJkTEu', 'student', 'oMkRzjMvU5', '2025-07-04 23:44:12', '2025-07-04 23:44:12'),
(2, 'Super Admin', 'superadmin@example.com', '2025-07-04 23:44:12', '$2y$12$crkDEH9U1eMKMEMgx4rcO.gnSq7wIRmpmEPQ1wLQWco9.gPa0b2dq', 'superadmin', NULL, '2025-07-04 23:44:12', '2025-07-04 23:44:12'),
(3, 'Admin User', 'admin@example.com', '2025-07-04 23:44:12', '$2y$12$U45cVUuJzq6y/ZWXv4J1FOXnTsP7AxVWz3EjuI2sZ0oI8IHRmAoaO', 'admin', NULL, '2025-07-04 23:44:12', '2025-07-04 23:44:12'),
(4, 'Student User', 'student@example.com', '2025-07-04 23:44:13', '$2y$12$PAvBDmrSUsM1Kq4.NvigKee0j72ATofQAwwJQS1SBJOAU8piMMu3y', 'student', NULL, '2025-07-04 23:44:13', '2025-07-04 23:44:13'),
(5, 'Test', 'test@test.test', NULL, '$2y$12$vv/5S8Dx8KirHMQ2u5qPHutfzdw/t4C8sHQAf2gmi7BBgkJ0JLqnC', 'student', NULL, '2025-07-05 02:04:21', '2025-07-05 02:04:21'),
(6, 'Dhiresh', 'test232@t4eat.flafk', NULL, '$2y$12$/yvu2O8IY7IPLZ6qDY9gCelMUw8GPq6pQCBWwM3rbHqkHnZqofkIO', 'student', NULL, '2025-07-05 02:16:12', '2025-07-05 02:16:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

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
-- Indexes for table `opportunities`
--
ALTER TABLE `opportunities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pdfresource`
--
ALTER TABLE `pdfresource`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `opportunities`
--
ALTER TABLE `opportunities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pdfresource`
--
ALTER TABLE `pdfresource`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
