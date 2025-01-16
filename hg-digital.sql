-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 16, 2025 lúc 02:50 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hg-digital`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `short_description` text NOT NULL,
  `content` longtext NOT NULL,
  `views` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comments` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `subtitle`, `thumbnail`, `slug`, `category_id`, `short_description`, `content`, `views`, `comments`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1245, 100, '2025-01-12 00:40:57', '2025-01-12 00:54:25', '01JHCR3JGKGY253G3M02K2DVNV.jpg'),
(5, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success-1736668713', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1245, 100, '2025-01-12 00:58:33', '2025-01-12 00:58:33', '01JHCR3JGKGY253G3M02K2DVNV.jpg'),
(6, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success-1736668728', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1245, 100, '2025-01-12 00:58:48', '2025-01-12 00:58:48', '01JHCR3JGKGY253G3M02K2DVNV.jpg'),
(7, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success-1736668729', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1245, 100, '2025-01-12 00:58:49', '2025-01-12 00:58:49', '01JHCR3JGKGY253G3M02K2DVNV.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'An ninh mạng', 'an-ninh-mang', '2025-01-12 00:31:23', '2025-01-12 00:31:23'),
(2, 'Xu hướng công nghệ', 'xu-huong-cong-nghe', '2025-01-12 00:31:26', '2025-01-12 00:31:26'),
(3, 'Chuyển đổi số', 'chuyen-doi-so', '2025-01-12 00:31:31', '2025-01-12 00:31:31'),
(4, 'Tiếp thị SEO', 'tiep-thi-seo', '2025-01-12 00:31:34', '2025-01-12 00:31:34'),
(5, 'Ứng dụng di động', 'ung-dung-di-dong', '2025-01-12 00:31:38', '2025-01-12 00:31:38'),
(6, 'Điện toán đám mây', 'dien-toan-dam-may', '2025-01-12 00:31:42', '2025-01-12 00:31:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(10, 5, 1, NULL, NULL),
(11, 5, 2, NULL, NULL),
(12, 5, 3, NULL, NULL),
(13, 6, 1, NULL, NULL),
(14, 6, 2, NULL, NULL),
(15, 6, 3, NULL, NULL),
(16, 7, 1, NULL, NULL),
(17, 7, 2, NULL, NULL),
(18, 7, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_tags`
--

INSERT INTO `blog_tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'An ninh mạng', 'an-ninh-mang', '2025-01-12 00:35:21', '2025-01-12 00:35:21'),
(2, 'Phát triển ứng dụng', 'phat-trien-ung-dung', '2025-01-12 00:35:23', '2025-01-12 00:35:23'),
(3, 'SEO', 'seo', '2025-01-12 00:35:29', '2025-01-12 00:35:29'),
(4, 'Thiết kế trải nghiệm người dùng', 'thiet-ke-trai-nghiem-nguoi-dung', '2025-01-12 00:35:34', '2025-01-12 00:35:34'),
(5, 'Giải pháp công nghệ', 'giai-phap-cong-nghe', '2025-01-12 00:35:37', '2025-01-12 00:35:37'),
(6, 'Tư vấn giải pháp CNTT', 'tu-van-giai-phap-cntt', '2025-01-12 00:35:39', '2025-01-12 00:35:39'),
(7, 'Tối ưu hóa đám mây', 'toi-uu-hoa-dam-may', '2025-01-12 00:35:42', '2025-01-12 00:35:42'),
(8, 'Khởi nghiệp', 'khoi-nghiep', '2025-01-12 00:35:46', '2025-01-12 00:35:46'),
(9, 'Dữ liệu', 'du-lieu', '2025-01-12 00:35:50', '2025-01-12 00:35:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1736668520),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1736668520;', 1736668520);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `company`, `message`, `created_at`, `updated_at`) VALUES
(15, 'giang', 'trangiangzxc@gmail.com', '123', '123', '123', '2025-01-12 01:35:05', '2025-01-12 01:35:05'),
(16, 'giang', 'trangiangzxc@gmail.com', '123', '123', '123', '2025-01-12 19:41:26', '2025-01-12 19:41:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
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
-- Cấu trúc bảng cho bảng `job_batches`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_01_12_072339_create_blog_categories_table', 2),
(5, '2025_01_12_072339_create_blog_tags_table', 2),
(6, '2025_01_12_072339_create_blogs_table', 2),
(7, '2025_01_12_072340_create_blog_tag_table', 2),
(8, '2025_01_12_074207_add_image_to_blogs_table', 3),
(9, '2025_01_12_074617_add_columns_to_blogs_table', 4),
(10, '2025_01_12_081153_create_contacts_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
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
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6x3V4MlsfdslDmLJYgpqi2Mt0djrw48jVoNqjYu5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjZUU1B4Znc0d0cyb0JHUjNId1AwZzFBSVJXNlJ5QXFmTk1xUU9sNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736736428),
('kTGg2iRtR77MGVGd3XiBBHBzVwUFsAM6VrkWXKYl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGpGcDNvNzNtQzVEN0JEelJkS1dmOWVSMzBHUUI2YzlHSzZZVDVDZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1736741337);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'giang', 'trangiangzxc@gmail.com', NULL, '$2y$12$QjFxS90sD88L2kivHaerse1lMNOmp0czm3zfQvkTqScKA/XwdfrMO', NULL, '2025-01-10 04:26:12', '2025-01-10 04:26:12');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_tag_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_tag_tag_id_foreign` (`tag_id`);

--
-- Chỉ mục cho bảng `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_tags_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `blog_tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
