-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2025 lúc 09:01 AM
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
-- Cấu trúc bảng cho bảng `access_history`
--

CREATE TABLE `access_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `visit_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `access_history`
--

INSERT INTO `access_history` (`id`, `date`, `visit_count`, `created_at`, `updated_at`) VALUES
(1, '2025-01-05', 77, '2025-01-05 01:14:49', '2025-01-05 02:26:33'),
(2, '2025-01-04', 2, '2025-01-05 01:14:49', '2025-01-05 01:14:56'),
(3, '2025-01-03', 2, '2025-01-05 01:14:49', '2025-01-05 01:14:56'),
(4, '2025-01-06', 76, '2025-01-06 04:23:40', '2025-01-06 11:46:31'),
(5, '2025-01-10', 109, '2025-01-10 02:18:22', '2025-01-10 12:36:04'),
(6, '2025-01-11', 60, '2025-01-11 02:11:10', '2025-01-11 13:07:35'),
(7, '2025-01-12', 5, '2025-01-12 01:13:43', '2025-01-12 12:25:22'),
(8, '2025-01-18', 24, '2025-01-17 17:22:35', '2025-01-18 05:04:38'),
(9, '2025-01-19', 31, '2025-01-18 19:13:20', '2025-01-19 02:59:34'),
(10, '2025-01-21', 4, '2025-01-21 04:23:31', '2025-01-21 04:49:28'),
(11, '2025-01-22', 105, '2025-01-22 00:21:40', '2025-01-22 01:01:01');

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
(1, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1247, 100, '2025-01-12 00:40:57', '2025-01-19 02:48:54', '01JHCR3JGKGY253G3M02K2DVNV.jpg'),
(5, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success-1736668713', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1247, 100, '2025-01-12 00:58:33', '2025-01-22 00:38:49', '01JHCR3JGKGY253G3M02K2DVNV.jpg'),
(6, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success-1736668728', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1246, 100, '2025-01-12 00:58:48', '2025-01-22 00:38:42', '01JHCR3JGKGY253G3M02K2DVNV.jpg'),
(7, 'Expert insights from our SEO & IT solutions blog your source for success', 'Exploring IT solutions unraveling the latest digital advancements & they are revolutionizing.', '01JHCR3JGE9YFH8Y2508TXJG0Z.jpg', 'expert-insights-from-our-seo-it-solutions-blog-your-source-for-success-1736668729', 2, 'Embark on an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.Embark\non an enlightening journey through the realm of IT solutions as we delve into the latest technological advancements shaping the digital landscape.', '<h3>Revolutionizing business efficiency navigating growth<br>with optimal IT infrastructure enhancement<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img01.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:307,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg&quot;,&quot;width&quot;:425}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img02.jpg\" width=\"425\" height=\"307\"><figcaption class=\"attachment__caption\"></figcaption></figure></h3><p>Gain exclusive insights into the world of IT solutions with innomax distinguished thought leaders. With years of experience and a deep understanding of industry trends, our thought leaders offer invaluable perspectives that illuminate the path to technological excellence. From emerging technologies to innovative strategies, they provide unique insights that inform and inspire. Join us as we delve into the inner workings of IT solutions, exploring the challenges.</p><p>Embark on an illuminating journey into the world of IT solutions with innomax esteemed thought leaders. Delve deep into the inner workings of technology as our seasoned experts share their wealth of knowledge and experience. With a finger on the pulse of industry trends and a keen eye for innovation, our thought leaders offer unparalleled insights that illuminate the path</p><h3>Optimizing growth with IT infrastructure</h3><p>They provide a comprehensive and in-depth analysis that goes beyond surface-level . Join us as we uncover the secrets of IT solutions, guided by the wisdom and expertise of innomax thought leaders. Prepare to be inspired, informed, and empowered to navigate the ever- landscape of technology with confidence and clarity. you\'ll gain access to unparalleled expertise and discover new possibilities for success in the ever-evolving world of technology success in the ever-evolving world of technology.y.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:450,&quot;url&quot;:&quot;https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg&quot;,&quot;width&quot;:615}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://html.xpressbuddy.com/innomax/assets/img/blog/blog_details-img03.jpg\" width=\"615\" height=\"450\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><ul><li>Unveiling Emerging Technologies.</li><li>Navigating Complex Challenges.</li><li>Forecasting Future Trends.</li><li>Driving Innovation Strategies.</li><li>Exploring Industry Practices.</li><li>Empowering Transformation.</li></ul><h3>3 Reasons to investing at this moment</h3><p>Here are three key reasons emphasizing the importance of optimizing ICO infrastructure<br>for efficiency and growth:</p><ul><li>1. Enhanced Operational Agility.</li><li>2. Resource Optimization &amp; Cost Efficiency.</li><li>3. Scalability and Innovation.</li></ul><p><br></p>', 1246, 100, '2025-01-12 00:58:49', '2025-01-17 17:31:22', '01JHCR3JGKGY253G3M02K2DVNV.jpg');

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
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1737531679),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1737531679;', 1737531679),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1737530612),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1737530612;', 1737530612);

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
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `short_desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `short_desc`) VALUES
(1, 'Cửa Hàng Bàn Phím', '2025-01-16 21:15:32', '2025-01-16 21:27:44', NULL),
(2, 'Cửa Hàng Chiếu Sáng', '2025-01-16 21:23:29', '2025-01-16 21:28:37', NULL),
(3, 'Dịch Vụ Xe 4, 6, 12 Chỗ', '2025-01-16 21:23:32', '2025-01-16 21:29:28', NULL),
(4, 'Ghế Massage Cao Cấp', '2025-01-16 21:23:42', '2025-01-16 21:29:43', NULL),
(5, 'Cửa Hàng Mắt Kính', '2025-01-16 21:23:46', '2025-01-16 21:30:09', NULL),
(6, 'Cửa Hàng Mỹ Phẩm', '2025-01-16 21:23:49', '2025-01-16 21:23:49', NULL),
(7, 'Cửa Hàng Thiết Bị Di Động', '2025-01-16 21:23:52', '2025-01-16 21:23:52', NULL),
(8, 'Sản Phẩm Chăm Sóc Sức Khỏe', '2025-01-16 21:23:54', '2025-01-16 21:23:54', NULL),
(9, 'Cửa Hàng Sách Online', '2025-01-16 21:23:59', '2025-01-16 21:23:59', NULL),
(10, 'Cửa Hàng Đồ Gia Dụng', '2025-01-16 21:24:02', '2025-01-16 21:24:02', NULL);

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
(10, '2025_01_12_081153_create_contacts_table', 5),
(13, '2025_01_17_034300_create_categories_table', 6),
(14, '2025_01_17_034301_create_tags_table', 6),
(15, '2025_01_17_034241_create_websites_table', 7),
(16, '2025_01_17_042551_add_short_desc_to_categories_table', 8),
(17, '2025_01_17_111037_create_template_categories_table', 8),
(18, '2025_01_17_111038_create_template_tags_table', 8),
(19, '2025_01_17_111038_create_template_websites_table', 8),
(20, '2025_01_17_111039_create_template_website_tag_table', 8),
(21, '2025_01_17_112829_add_slug_to_template_tags_table', 9);

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
('hZbPMoRMC5RBBkcnoLWgRxa6pdY5UrNCmmvuXlvi', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoick5JOUFXUTVMbTF1cVQwRndTQk5RYkdZVTZybkhRTDlsTVRLWkVNQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi90ZW1wbGF0ZS13ZWJzaXRlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUWpGeFM5MHNEODhMMmtpdkhhZXJzZTFsTU5PbXAwY3ptM3pmUXZrVHFTY0tBL1h3ZGZyTU8iO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1737531636),
('VU058rV5toTro020IOKkpWe0OL0yiWnLWVzEPU1h', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWpKSEVLanh5bVhZWVJnVGlxSkQxdGxlT1VGMUVQQklTcUhCWWpiTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1737532861);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '12', '2025-01-16 21:02:56', '2025-01-16 21:02:56'),
(2, '12323', '2025-01-16 21:13:46', '2025-01-16 21:13:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template_categories`
--

CREATE TABLE `template_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `template_categories`
--

INSERT INTO `template_categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bán hàng', 'ban-hang', 'template_categories/images/01JHT1SPZZQ04SCMEBTEV20G35.svg', '2025-01-17 04:24:54', '2025-01-17 04:53:55'),
(2, 'Thời trang ', 'thoi-trang', 'template_categories/images/01JHT20RZ4Z673ZSAPR6JXKFWX.svg', '2025-01-17 04:53:11', '2025-01-17 04:57:47'),
(3, 'Mỹ phẩm ', 'my-pham', 'template_categories/images/01JHT1TK8CVCSD91M7QQP89A9N.svg', '2025-01-17 04:54:24', '2025-01-17 04:54:24'),
(4, ' Thực phẩm ', 'thuc-pham', 'template_categories/images/01JHT1V2G6CVNE6GYW9BF944S1.svg', '2025-01-17 04:54:40', '2025-01-17 04:54:40'),
(5, ' Bất động sản', 'bat-dong-san', 'template_categories/images/01JHT1Y3723NYSYCBYYBRC37CH.svg', '2025-01-17 04:56:19', '2025-01-17 04:56:19'),
(6, 'Du lịch - Khách sạn', 'du-lich-khach-san', 'template_categories/images/01JHT1YWFP8TTAN517TJHRRJMV.svg', '2025-01-17 04:56:45', '2025-01-17 04:56:45'),
(7, 'Xây dựng - Nội thất', 'xay-dung-noi-that', 'template_categories/images/01JHT1ZBCATQSAJHEA1CYTMXSV.svg', '2025-01-17 04:57:00', '2025-01-17 04:57:00'),
(8, 'Doanh nghiệp', 'doanh-nghiep', 'template_categories/images/01JHT1ZXJ73PV8GDXH3M8MQNR4.svg', '2025-01-17 04:57:19', '2025-01-17 04:57:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template_tags`
--

CREATE TABLE `template_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `template_tags`
--

INSERT INTO `template_tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Giang Trần', 'giang-tran', '2025-01-17 04:30:10', '2025-01-17 04:30:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template_websites`
--

CREATE TABLE `template_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `purchases` int(11) NOT NULL DEFAULT 0,
  `original_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discounted_price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `demo_link` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `template_websites`
--

INSERT INTO `template_websites` (`id`, `name`, `slug`, `thumbnail`, `image`, `purchases`, `original_price`, `discounted_price`, `demo_link`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(94, 'Website bán quần áo giống Coolmate', 'website-ban-quan-ao-giong-coolmate', 'templates/images/AVxehhvrUs.webp', 'templates/images/VlsyvIQ1yd.webp', 10, 6000000.00, 4000000.00, 'https://coolmate.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:53', '2025-01-22 00:36:53'),
(95, 'Website nguyên liệu sạch – organic giống hanuti', 'website-nguyen-lieu-sach-organic-giong-hanuti', 'templates/images/QtD3002TUY.webp', 'templates/images/qmDHNX4LTU.webp', 10, 6000000.00, 4000000.00, 'https://organic.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:53', '2025-01-22 00:36:53'),
(96, 'Website cửa hàng kính mắt', 'website-cua-hang-kinh-mat', 'templates/images/a6Zu10SolV.webp', 'templates/images/ylqzub9dzB.webp', 10, 6000000.00, 4000000.00, 'https://matkinh.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:54', '2025-01-22 00:36:54'),
(97, 'Website bán theme, thiết kế website 02', 'website-ban-theme-thiet-ke-website-02', 'templates/images/k7p1aNh9Yu.webp', 'templates/images/eNkCrP22M0.webp', 10, 6000000.00, 4000000.00, 'https://khotheme2.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:54', '2025-01-22 00:36:54'),
(98, 'Website review địa điểm du lịch, ăn uống', 'website-review-dia-diem-du-lich-an-uong', 'templates/images/4rSX1FNXeV.webp', 'templates/images/QR1NB20SP4.webp', 10, 6000000.00, 4000000.00, 'https://review.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:55', '2025-01-22 00:36:55'),
(99, 'Website bán và cho thuê máy Photocopy 02', 'website-ban-va-cho-thue-may-photocopy-02', 'templates/images/sqpM1Rpuyy.webp', 'templates/images/tggDhz1tdP.webp', 10, 6000000.00, 4000000.00, 'https://photocopy2.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:55', '2025-01-22 00:36:55'),
(100, 'Website thủy sinh, cá cảnh 02', 'website-thuy-sinh-ca-canh-02', 'templates/images/rbEWoqPSCQ.webp', 'templates/images/dO8Ph28lUV.webp', 10, 6000000.00, 4000000.00, 'https://thuysinh2.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:56', '2025-01-22 00:36:56'),
(101, 'Website cơ sở đá mỹ nghệ 02', 'website-co-so-da-my-nghe-02', 'templates/images/6keONhTVvX.webp', 'templates/images/fwLBSmjLOD.webp', 10, 6000000.00, 4000000.00, 'https://damynghe2.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:56', '2025-01-22 00:36:56'),
(102, 'Website bất động sản 48', 'website-bat-dong-san-48', 'templates/images/NMydfweY3A.webp', 'templates/images/HBJWsbJT69.webp', 10, 6000000.00, 4000000.00, 'https://bds48.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:57', '2025-01-22 00:36:57'),
(103, 'Website bán tài khoản Premium, key bản quyền', 'website-ban-tai-khoan-premium-key-ban-quyen', 'templates/images/eFtGTGoX6B.webp', 'templates/images/hVJiZ1nWZS.webp', 10, 6000000.00, 4000000.00, 'https://shopacc.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:57', '2025-01-22 00:36:57'),
(104, 'Website bán bánh trung thu', 'website-ban-banh-trung-thu', 'templates/images/PiXvzpVNNU.webp', 'templates/images/gmyGQLFvBJ.webp', 10, 6000000.00, 4000000.00, 'https://trungthu.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:58', '2025-01-22 00:36:58'),
(105, 'Website bán và cho thuê máy Photocopy', 'website-ban-va-cho-thue-may-photocopy', 'templates/images/JMVB2Uoabc.webp', 'templates/images/VVARb6WfoA.webp', 10, 6000000.00, 4000000.00, 'https://photocopy.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:58', '2025-01-22 00:36:58'),
(106, 'Website bán sim số 02', 'website-ban-sim-so-02', 'templates/images/Hf9DZ48mrM.webp', 'templates/images/88pxATZE4N.webp', 10, 6000000.00, 4000000.00, 'https://sim2.maugiaodien.com/', NULL, 1, '2025-01-22 00:36:59', '2025-01-22 00:36:59'),
(107, 'Website Elementor bán đồ trang trí, quà tặng', 'website-elementor-ban-do-trang-tri-qua-tang', 'templates/images/qAcdk57MZW.webp', 'templates/images/QUOFmkAvd3.webp', 10, 6000000.00, 4000000.00, 'https://dotrangtri.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:00', '2025-01-22 00:37:00'),
(108, 'Website Elementor bán đồ công nghệ 06', 'website-elementor-ban-do-cong-nghe-06', 'templates/images/fHkBYbdLDk.webp', 'templates/images/FAefS0nJYf.webp', 10, 6000000.00, 4000000.00, 'https://congnghe6.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:00', '2025-01-22 00:37:00'),
(109, 'Website gara sửa chữa, bảo dưỡng ô tô', 'website-gara-sua-chua-bao-duong-o-to', 'templates/images/QVCz1KGxK9.webp', 'templates/images/ARF9wIH5Mr.webp', 10, 6000000.00, 4000000.00, 'https://gara.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:01', '2025-01-22 00:37:01'),
(110, 'Website Elementor nhà thuốc 06', 'website-elementor-nha-thuoc-06', 'templates/images/vgwU2upnTG.webp', 'templates/images/uvbFrTHlEk.webp', 10, 6000000.00, 4000000.00, 'https://nhathuoc6.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:01', '2025-01-22 00:37:01'),
(111, 'Website trung tâm tiêm chủng vắc xin', 'website-trung-tam-tiem-chung-vac-xin', 'templates/images/bmoKl0TLCb.webp', 'templates/images/2ttWEqCwgO.webp', 10, 6000000.00, 4000000.00, 'https://vacxin.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:02', '2025-01-22 00:37:02'),
(112, 'Website bất động sản 47', 'website-bat-dong-san-47', 'templates/images/fFx1IRFXzz.webp', 'templates/images/KKWbo1rse0.webp', 10, 6000000.00, 4000000.00, 'https://bds47.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:02', '2025-01-22 00:37:02'),
(113, 'Website bán ghế Massage, máy chạy bộ', 'website-ban-ghe-massage-may-chay-bo', 'templates/images/qutWqadc55.webp', 'templates/images/zR0t6Pwu1k.webp', 10, 6000000.00, 4000000.00, 'https://ghemassage.maugiaodien.com/', NULL, 1, '2025-01-22 00:37:03', '2025-01-22 00:37:03'),
(114, 'Website bán nước mắm, nước tương', 'website-ban-nuoc-mam-nuoc-tuong', 'templates/images/XCGTObBS9S.webp', 'templates/images/JPfhJy5sge.webp', 10, 6000000.00, 4000000.00, 'https://nuocmam.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:27', '2025-01-22 00:39:27'),
(115, 'Website bất động sản 46', 'website-bat-dong-san-46', 'templates/images/CTISz80Cju.webp', 'templates/images/fQglB9HZXC.webp', 10, 6000000.00, 4000000.00, 'https://bds46.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:27', '2025-01-22 00:39:27'),
(116, 'Website nghe truyện audio', 'website-nghe-truyen-audio', 'templates/images/x8anqCPP9Q.webp', 'templates/images/yRGhogAau4.webp', 10, 6000000.00, 4000000.00, 'https://truyenaudio.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:28', '2025-01-22 00:39:28'),
(117, 'Website du lịch 23', 'website-du-lich-23', 'templates/images/iFcUPdzSNm.webp', 'templates/images/yzLSbESVSj.webp', 10, 6000000.00, 4000000.00, 'https://dulich23.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:28', '2025-01-22 00:39:28'),
(118, 'Website giới thiệu homestay', 'website-gioi-thieu-homestay', 'templates/images/E7iNP5kUMz.webp', 'templates/images/MINA0hLPam.webp', 10, 6000000.00, 4000000.00, 'https://homestay.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:29', '2025-01-22 00:39:29'),
(119, 'Website du lịch 21', 'website-du-lich-21', 'templates/images/eKrrD444jM.webp', 'templates/images/fBa4eQfEiU.webp', 10, 6000000.00, 4000000.00, 'https://toyota4.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:29', '2025-01-22 00:39:29'),
(120, 'Website bán xe toyota 04', 'website-ban-xe-toyota-04', 'templates/images/qwLmNnDb9o.jpg', 'templates/images/ChQLu8G8nH.jpg', 10, 6000000.00, 4000000.00, 'https://dulich21.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:30', '2025-01-22 00:39:30'),
(121, 'Website thời trang 19', 'website-thoi-trang-19', 'templates/images/uChzIu73dN.jpg', 'templates/images/wYtHupakBH.jpg', 10, 6000000.00, 4000000.00, 'https://thoitrang19.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:30', '2025-01-22 00:39:30'),
(122, 'Website bán lều du lịch, đồ phượt camping 02', 'website-ban-leu-du-lich-do-phuot-camping-02', 'templates/images/hhOfKet9Z4.jpg', 'templates/images/7xiuGuSMKV.jpg', 10, 6000000.00, 4000000.00, 'https://camping2.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:30', '2025-01-22 00:39:30'),
(123, 'Website bán dược phẩm, thuốc nam 02', 'website-ban-duoc-pham-thuoc-nam-02', 'templates/images/1a9HZbUjd1.jpg', 'templates/images/9XqByluK64.jpg', 10, 6000000.00, 4000000.00, 'https://thuocnam2.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:31', '2025-01-22 00:39:31'),
(124, 'Website bán khóa học', 'website-ban-khoa-hoc', 'templates/images/TspliCzLIh.jpg', 'templates/images/tF8lFnTZZu.jpg', 10, 6000000.00, 4000000.00, 'https://bankhoahoc.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:31', '2025-01-22 00:39:31'),
(125, 'Website bán cafe 05', 'website-ban-cafe-05', 'templates/images/Sn4IHLHZcc.jpg', 'templates/images/MQhdVQk8xq.jpg', 10, 6000000.00, 4000000.00, 'https://cafe5.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:32', '2025-01-22 00:39:32'),
(126, 'Website bán điện thoại, phụ kiện giống TopZone 02', 'website-ban-dien-thoai-phu-kien-giong-topzone-02', 'templates/images/2dRyjHv0bd.jpg', 'templates/images/czoGL4qhHe.jpg', 10, 6000000.00, 4000000.00, 'https://topzone2.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:32', '2025-01-22 00:39:32'),
(127, 'Website bán quà tết', 'website-ban-qua-tet', 'templates/images/GFxVLiEgrJ.jpg', 'templates/images/fOSFWc4oA0.jpg', 10, 6000000.00, 4000000.00, 'https://quatet.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:33', '2025-01-22 00:39:33'),
(128, 'Website du lịch 20', 'website-du-lich-20', 'templates/images/iAR4IMKvAa.jpg', 'templates/images/sU5EuyIGDH.jpg', 10, 6000000.00, 4000000.00, 'https://dulich20.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:33', '2025-01-22 00:39:33'),
(129, 'Website Elementor công ty in ấn 07', 'website-elementor-cong-ty-in-an-07', 'templates/images/Zx6ldjlbsd.jpg', 'templates/images/RXsfQ8Qs5S.jpg', 10, 6000000.00, 4000000.00, 'https://inan7.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:34', '2025-01-22 00:39:34'),
(130, 'Website cung cấp sơn nước 02', 'website-cung-cap-son-nuoc-02', 'templates/images/brwpkp1tH1.jpg', 'templates/images/e7OseY2cS6.jpg', 10, 6000000.00, 4000000.00, 'https://sonnuoc2.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:34', '2025-01-22 00:39:34'),
(131, 'Website nhà thuốc 05', 'website-nha-thuoc-05', 'templates/images/H7nfdFLU0G.jpg', 'templates/images/UsDyW6sHQ6.jpg', 10, 6000000.00, 4000000.00, 'https://nhathuoc5.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:35', '2025-01-22 00:39:35'),
(132, 'Website bán xe và thiết bị nâng hàng hóa', 'website-ban-xe-va-thiet-bi-nang-hang-hoa', 'templates/images/pmsFexlDBa.jpg', 'templates/images/H2N9DNbkG8.jpg', 10, 6000000.00, 4000000.00, 'https://xenang.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:35', '2025-01-22 00:39:35'),
(133, 'Website bán máy tính, laptop 09', 'website-ban-may-tinh-laptop-09', 'templates/images/SaB2kLCF1E.jpg', 'templates/images/FA87VEW9vP.jpg', 10, 6000000.00, 4000000.00, 'https://maytinh9.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:36', '2025-01-22 00:39:36'),
(134, 'Website bán máy tính 08', 'website-ban-may-tinh-08', 'templates/images/ywsCb0NXaz.jpg', 'templates/images/FvQca4ITFQ.jpg', 10, 6000000.00, 4000000.00, 'https://maytinh8.maugiaodien.com/', NULL, 1, '2025-01-22 00:39:36', '2025-01-22 00:39:36'),
(135, 'Website trường mầm non 02', 'website-truong-mam-non-02', 'templates/images/yT0US2EVht.jpg', 'templates/images/TXkRBzBtGi.jpg', 10, 6000000.00, 4000000.00, 'https://mamnon2.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:21', '2025-01-22 00:40:21'),
(136, 'Website bán và thi công màn hình led', 'website-ban-va-thi-cong-man-hinh-led', 'templates/images/TnwFvscalD.jpg', 'templates/images/tWOgQTJ0G5.jpg', 10, 6000000.00, 4000000.00, 'https://ledhd.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:23', '2025-01-22 00:40:23'),
(137, 'Website trung tâm thể hình – phòng tập gym 03', 'website-trung-tam-the-hinh-phong-tap-gym-03', 'templates/images/rZk1ps34gZ.jpg', 'templates/images/JNByhp7U0K.jpg', 10, 6000000.00, 4000000.00, 'https://gym3.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:23', '2025-01-22 00:40:23'),
(138, 'Website bán điện thoại, phụ kiện giống TopZone', 'website-ban-dien-thoai-phu-kien-giong-topzone', 'templates/images/VanFRudME5.jpg', 'templates/images/lt3CieEDeQ.jpg', 10, 6000000.00, 4000000.00, 'https://topzone.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:24', '2025-01-22 00:40:24'),
(139, 'Website bán cơm cháy gia truyền', 'website-ban-com-chay-gia-truyen', 'templates/images/QKAtu8VTpM.jpg', 'templates/images/cV45WZDuP3.jpg', 10, 6000000.00, 4000000.00, 'https://comchay.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:24', '2025-01-22 00:40:24'),
(140, 'Website bán chó săn', 'website-ban-cho-san', 'templates/images/Fb0Lza8eTk.jpg', 'templates/images/61pHOV1BJK.jpg', 10, 6000000.00, 4000000.00, 'https://chosan.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:25', '2025-01-22 00:40:25'),
(141, 'Website thiết bị nhà bếp', 'website-thiet-bi-nha-bep', 'templates/images/H9T3UxaRZe.jpg', 'templates/images/L19ae3Cgb9.jpg', 10, 6000000.00, 4000000.00, 'https://thietbibep.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:25', '2025-01-22 00:40:25'),
(142, 'Website dịch vụ Nha Khoa 06', 'website-dich-vu-nha-khoa-06', 'templates/images/TVmONn3NI5.jpg', 'templates/images/e4eOHZNCry.jpg', 10, 6000000.00, 4000000.00, 'https://nhakhoa6.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:26', '2025-01-22 00:40:26'),
(143, 'Website dịch vụ Nha Khoa 05', 'website-dich-vu-nha-khoa-05', 'templates/images/TiwJHhmuFW.jpg', 'templates/images/kG0KaQx707.jpg', 10, 6000000.00, 4000000.00, 'https://nhakhoa5.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:26', '2025-01-22 00:40:26'),
(144, 'Website giải chạy bộ', 'website-giai-chay-bo', 'templates/images/Gsjb3DAvhs.jpg', 'templates/images/rJcpLq7Dnm.jpg', 10, 6000000.00, 4000000.00, 'https://marathon.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:26', '2025-01-22 00:40:26'),
(145, 'Website cửa hàng chăn ga gối nệm', 'website-cua-hang-chan-ga-goi-nem', 'templates/images/WikS1cyL5I.jpg', 'templates/images/FSbJWPokAb.jpg', 10, 6000000.00, 4000000.00, 'https://nem.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:27', '2025-01-22 00:40:27'),
(146, 'Website mỹ phẩm 21', 'website-my-pham-21', 'templates/images/hirCF1eksJ.jpg', 'templates/images/8hi7xxmcsB.jpg', 10, 6000000.00, 4000000.00, 'https://mypham21.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:27', '2025-01-22 00:40:27'),
(147, 'Website cửa hàng bán hoa 05', 'website-cua-hang-ban-hoa-05', 'templates/images/tHbOkxaKq5.jpg', 'templates/images/E0eJEk4Vcl.jpg', 10, 6000000.00, 4000000.00, 'https://shophoa5.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:28', '2025-01-22 00:40:28'),
(148, 'Website cửa hàng bán heo quay', 'website-cua-hang-ban-heo-quay', 'templates/images/a95xyJZ9a5.jpg', 'templates/images/5Z2TtsaUnD.jpg', 10, 6000000.00, 4000000.00, 'https://heoquay.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:28', '2025-01-22 00:40:28'),
(149, 'Website bất động sản 42', 'website-bat-dong-san-42', 'templates/images/Yz5SnGOyFS.jpg', 'templates/images/gJXw8aT9vr.jpg', 10, 6000000.00, 4000000.00, 'https://bds42.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:29', '2025-01-22 00:40:29'),
(150, 'Website dịch vụ studio, chụp ảnh cưới 06', 'website-dich-vu-studio-chup-anh-cuoi-06', 'templates/images/poq5Y3zDF8.jpg', 'templates/images/XBFj4SwBti.jpg', 10, 6000000.00, 4000000.00, 'https://studio6.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:29', '2025-01-22 00:40:29'),
(151, 'Website mỹ phẩm 20', 'website-my-pham-20', 'templates/images/17wRLSRH7J.jpg', 'templates/images/ORFJbQ9Iti.jpg', 10, 6000000.00, 4000000.00, 'https://mypham20.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:31', '2025-01-22 00:40:31'),
(152, 'Website đánh giá, mua bán ô tô', 'website-danh-gia-mua-ban-o-to', 'templates/images/OmHQwoiC33.jpg', 'templates/images/dwvlyqoRvi.jpg', 10, 6000000.00, 4000000.00, 'https://reviewoto.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:31', '2025-01-22 00:40:31'),
(153, 'Website thực phẩm chức năng 24', 'website-thuc-pham-chuc-nang-24', 'templates/images/oOR3QlsZZw.jpg', 'templates/images/dVkouzbLgl.jpg', 10, 6000000.00, 4000000.00, 'https://thucphamchucnang7.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:32', '2025-01-22 00:40:32'),
(154, 'Website bán rèm cửa 03', 'website-ban-rem-cua-03', 'templates/images/HoSoWQimTd.jpg', 'templates/images/b2avzZGGPm.jpg', 10, 6000000.00, 4000000.00, 'https://remcua3.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:32', '2025-01-22 00:40:32'),
(155, 'Website cửa hàng bán rượu 02', 'website-cua-hang-ban-ruou-02', 'templates/images/mtqU50A5vX.jpg', 'templates/images/BEblqWaFh9.jpg', 10, 6000000.00, 4000000.00, 'https://shopruou2.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:33', '2025-01-22 00:40:33'),
(156, 'Website bất động sản 41', 'website-bat-dong-san-41', 'templates/images/EqLCsiym1b.jpg', 'templates/images/haXKGsmOWZ.jpg', 10, 6000000.00, 4000000.00, 'https://bds41.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:33', '2025-01-22 00:40:33'),
(157, 'Website công ty sắt thép', 'website-cong-ty-sat-thep', 'templates/images/zH8oI9AGPr.jpg', 'templates/images/fXQGzqKIUN.jpg', 10, 6000000.00, 4000000.00, 'https://thep.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:34', '2025-01-22 00:40:34'),
(158, 'Website thu mua, thanh lý đồ cũ 05', 'website-thu-mua-thanh-ly-do-cu-05', 'templates/images/4Prr4QTgnp.jpg', 'templates/images/9zwXRPEYct.jpg', 10, 6000000.00, 4000000.00, 'https://thanhly5.maugiaodien.com/', NULL, 1, '2025-01-22 00:40:34', '2025-01-22 00:40:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template_website_tag`
--

CREATE TABLE `template_website_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_website_id` bigint(20) UNSIGNED NOT NULL,
  `template_tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'giang', 'trangiangzxc@gmail.com', NULL, '$2y$12$QjFxS90sD88L2kivHaerse1lMNOmp0czm3zfQvkTqScKA/XwdfrMO', 'DcHfh8qfq8N5TBnbgKnQp6xg2ak0bu1tT5G8Peme84bEvpwCEPUkzYzE8iEe', '2025-01-10 04:26:12', '2025-01-10 04:26:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `main_image` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `technologies` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `website_tag`
--

CREATE TABLE `website_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `access_history`
--
ALTER TABLE `access_history`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

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
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Chỉ mục cho bảng `template_categories`
--
ALTER TABLE `template_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `template_categories_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `template_tags`
--
ALTER TABLE `template_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `template_tags_name_unique` (`name`);

--
-- Chỉ mục cho bảng `template_websites`
--
ALTER TABLE `template_websites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `template_websites_slug_unique` (`slug`),
  ADD KEY `template_websites_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `template_website_tag`
--
ALTER TABLE `template_website_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_website_tag_template_website_id_foreign` (`template_website_id`),
  ADD KEY `template_website_tag_template_tag_id_foreign` (`template_tag_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `websites_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `website_tag`
--
ALTER TABLE `website_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `website_tag_website_id_foreign` (`website_id`),
  ADD KEY `website_tag_tag_id_foreign` (`tag_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `access_history`
--
ALTER TABLE `access_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `template_categories`
--
ALTER TABLE `template_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `template_tags`
--
ALTER TABLE `template_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `template_websites`
--
ALTER TABLE `template_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT cho bảng `template_website_tag`
--
ALTER TABLE `template_website_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `website_tag`
--
ALTER TABLE `website_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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

--
-- Các ràng buộc cho bảng `template_websites`
--
ALTER TABLE `template_websites`
  ADD CONSTRAINT `template_websites_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `template_categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `template_website_tag`
--
ALTER TABLE `template_website_tag`
  ADD CONSTRAINT `template_website_tag_template_tag_id_foreign` FOREIGN KEY (`template_tag_id`) REFERENCES `template_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `template_website_tag_template_website_id_foreign` FOREIGN KEY (`template_website_id`) REFERENCES `template_websites` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `websites`
--
ALTER TABLE `websites`
  ADD CONSTRAINT `websites_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `website_tag`
--
ALTER TABLE `website_tag`
  ADD CONSTRAINT `website_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `website_tag_website_id_foreign` FOREIGN KEY (`website_id`) REFERENCES `websites` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
