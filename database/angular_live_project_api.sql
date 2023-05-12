-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 12:56 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angular_live_project_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_posts`
--

CREATE TABLE `course_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci,
  `full_desc` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_posts`
--

INSERT INTO `course_posts` (`id`, `title`, `short_desc`, `full_desc`, `image`, `author`, `entered_date`, `is_active`, `created_at`, `updated_at`) VALUES
(15, 'TypeScript Course', 'Angular 7 released in October 2018, just like it was scheduled. The new features of the framework are the updated form of Node 10..', 'The Angular is the newest form of the AngularJS, developed by Google, which is an open-source front-end development platform used for building mobile and desktop web applications. Angular is rewritten by the same team that built AngularJS.  It is a JavaScript framework for building web applications and apps in JavaScript, HTML, and TypeScript, which is a superset of JavaScript. The Angular now comes with every latest feature you need to build a complex and sophisticated web or mobile application. It contains features like component, Directives, Forms, Pipes, HTTP Services, Dependency Injection and many more.  Angular is the next big deal. Being the successor of the massive successful AngularJS framework it’s bound to frame the future of frontend development in a similar way. The powerful features and capabilities of Angular permit you to build complex, customizable, modern, responsive and user-friendly web applications. It also enables you to create software quicker and with less effort.  As your application grows, structuring your code in a clean and maintainable and more importantly, testable way, becomes more complex. But your life becomes far easier using a framework like Angular. Angular 7 is the latest version of the Angular framework and simply an update to Angular 2. Angular is faster than AngularJS and offers a much more flexible and modular development approach. After studying this tutorial you become proficient and able to take full advantage of all those features and start developing incredible applications in a reasonable time.', 'course-post-images/2023/05/image_1683891831_6133.jpg', 'Kashisoft Tutorials', '2023-05-12 10:45:10', 1, '2023-05-12 05:45:10', '2023-05-12 06:43:51'),
(16, 'CSS Course', 'Angular 7 released in October 2018, just like it was scheduled. The new features of the framework are the updated form of Node 10..', 'The Angular is the newest form of the AngularJS, developed by Google, which is an open-source front-end development platform used for building mobile and desktop web applications. Angular is rewritten by the same team that built AngularJS.  It is a JavaScript framework for building web applications and apps in JavaScript, HTML, and TypeScript, which is a superset of JavaScript. The Angular now comes with every latest feature you need to build a complex and sophisticated web or mobile application. It contains features like component, Directives, Forms, Pipes, HTTP Services, Dependency Injection and many more.  Angular is the next big deal. Being the successor of the massive successful AngularJS framework it’s bound to frame the future of frontend development in a similar way. The powerful features and capabilities of Angular permit you to build complex, customizable, modern, responsive and user-friendly web applications. It also enables you to create software quicker and with less effort.  As your application grows, structuring your code in a clean and maintainable and more importantly, testable way, becomes more complex. But your life becomes far easier using a framework like Angular. Angular 7 is the latest version of the Angular framework and simply an update to Angular 2. Angular is faster than AngularJS and offers a much more flexible and modular development approach. After studying this tutorial you become proficient and able to take full advantage of all those features and start developing incredible applications in a reasonable time.', 'course-post-images/2023/05/image_1683891278_32197.jpg', 'Kashisoft Tutorials', '2023-05-12 10:45:49', 1, '2023-05-12 05:45:49', '2023-05-12 06:40:42'),
(17, 'Entity Framework Course', 'Angular 7 released in October 2018, just like it was scheduled. The new features of the framework are the updated form of Node 10..', 'The Angular is the newest form of the AngularJS, developed by Google, which is an open-source front-end development platform used for building mobile and desktop web applications. Angular is rewritten by the same team that built AngularJS.  It is a JavaScript framework for building web applications and apps in JavaScript, HTML, and TypeScript, which is a superset of JavaScript. The Angular now comes with every latest feature you need to build a complex and sophisticated web or mobile application. It contains features like component, Directives, Forms, Pipes, HTTP Services, Dependency Injection and many more.  Angular is the next big deal. Being the successor of the massive successful AngularJS framework it’s bound to frame the future of frontend development in a similar way. The powerful features and capabilities of Angular permit you to build complex, customizable, modern, responsive and user-friendly web applications. It also enables you to create software quicker and with less effort.  As your application grows, structuring your code in a clean and maintainable and more importantly, testable way, becomes more complex. But your life becomes far easier using a framework like Angular. Angular 7 is the latest version of the Angular framework and simply an update to Angular 2. Angular is faster than AngularJS and offers a much more flexible and modular development approach. After studying this tutorial you become proficient and able to take full advantage of all those features and start developing incredible applications in a reasonable time.', 'course-post-images/2023/05/image_1683891271_12364.jpg', 'Kashisoft Tutorials', '2023-05-12 10:50:52', 1, '2023-05-12 05:50:52', '2023-05-12 06:39:40'),
(25, 'Angular Material course', 'Angular 7 released in October 2018, just like it was scheduled. The new features of the framework are the updated form of Node 10..', 'The Angular is the newest form of the AngularJS, developed by Google, which is an open-source front-end development platform used for building mobile and desktop web applications. Angular is rewritten by the same team that built AngularJS.  It is a JavaScript framework for building web applications and apps in JavaScript, HTML, and TypeScript, which is a superset of JavaScript. The Angular now comes with every latest feature you need to build a complex and sophisticated web or mobile application. It contains features like component, Directives, Forms, Pipes, HTTP Services, Dependency Injection and many more.  Angular is the next big deal. Being the successor of the massive successful AngularJS framework it’s bound to frame the future of frontend development in a similar way. The powerful features and capabilities of Angular permit you to build complex, customizable, modern, responsive and user-friendly web applications. It also enables you to create software quicker and with less effort.  As your application grows, structuring your code in a clean and maintainable and more importantly, testable way, becomes more complex. But your life becomes far easier using a framework like Angular. Angular 7 is the latest version of the Angular framework and simply an update to Angular 2. Angular is faster than AngularJS and offers a much more flexible and modular development approach. After studying this tutorial you become proficient and able to take full advantage of all those features and start developing incredible applications in a reasonable time.', 'course-post-images/2023/05/image_1683891264_8235.jpg', 'Scott', '2023-05-12 11:06:23', 1, '2023-05-12 06:06:23', '2023-05-12 06:39:01'),
(27, 'Python Full Course', 'Python is one of the high-level general programming languages, interpreted, easy to use,complete and powerful. It is an object..', 'The Angular is the newest form of the AngularJS, developed by Google, which is an open-source front-end development platform used for building mobile and desktop web applications. Angular is rewritten by the same team that built AngularJS.  It is a JavaScript framework for building web applications and apps in JavaScript, HTML, and TypeScript, which is a superset of JavaScript. The Angular now comes with every latest feature you need to build a complex and sophisticated web or mobile application. It contains features like component, Directives, Forms, Pipes, HTTP Services, Dependency Injection and many more.  Angular is the next big deal. Being the successor of the massive successful AngularJS framework it’s bound to frame the future of frontend development in a similar way. The powerful features and capabilities of Angular permit you to build complex, customizable, modern, responsive and user-friendly web applications. It also enables you to create software quicker and with less effort.  As your application grows, structuring your code in a clean and maintainable and more importantly, testable way, becomes more complex. But your life becomes far easier using a framework like Angular. Angular 7 is the latest version of the Angular framework and simply an update to Angular 2. Angular is faster than AngularJS and offers a much more flexible and modular development approach. After studying this tutorial you become proficient and able to take full advantage of all those features and start developing incredible applications in a reasonable time.', 'course-post-images/2023/05/image_1683891485_52199.jpg', 'Kashisoft Tutorials', '2023-05-12 11:33:42', 1, '2023-05-12 06:33:42', '2023-05-12 06:38:05'),
(28, 'Angular 7 Full Course', 'Angular 7 released in October 2018, just like it was scheduled. The new features of the framework are the updated form of Node 10..', 'The Angular is the newest form of the AngularJS, developed by Google, which is an open-source front-end development platform used for building mobile and desktop web applications. Angular is rewritten by the same team that built AngularJS.  It is a JavaScript framework for building web applications and apps in JavaScript, HTML, and TypeScript, which is a superset of JavaScript. The Angular now comes with every latest feature you need to build a complex and sophisticated web or mobile application. It contains features like component, Directives, Forms, Pipes, HTTP Services, Dependency Injection and many more.  Angular is the next big deal. Being the successor of the massive successful AngularJS framework it’s bound to frame the future of frontend development in a similar way. The powerful features and capabilities of Angular permit you to build complex, customizable, modern, responsive and user-friendly web applications. It also enables you to create software quicker and with less effort.  As your application grows, structuring your code in a clean and maintainable and more importantly, testable way, becomes more complex. But your life becomes far easier using a framework like Angular. Angular 7 is the latest version of the Angular framework and simply an update to Angular 2. Angular is faster than AngularJS and offers a much more flexible and modular development approach. After studying this tutorial you become proficient and able to take full advantage of all those features and start developing incredible applications in a reasonable time.', 'course-post-images/2023/05/image_1683891389_87696.jpg', 'Kashisoft Tutorials', '2023-05-12 11:33:49', 1, '2023-05-12 06:33:49', '2023-05-12 06:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `employee_masters`
--

CREATE TABLE `employee_masters` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entered_date` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_masters`
--

INSERT INTO `employee_masters` (`id`, `first_name`, `last_name`, `email`, `role`, `password`, `entered_date`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Demo', 'User', 'demouser@gmail.com', NULL, '12345678', '2023-05-11 12:14:14', 1, '2023-05-11 07:14:14', '2023-05-11 07:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_05_09_113323_create_course_posts_table', 1),
(3, '2023_05_09_114332_create_employee_masters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_posts`
--
ALTER TABLE `course_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_masters`
--
ALTER TABLE `employee_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_posts`
--
ALTER TABLE `course_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `employee_masters`
--
ALTER TABLE `employee_masters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
