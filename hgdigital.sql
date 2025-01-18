-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2025 lúc 01:05 PM
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
(7, '2025-01-12', 5, '2025-01-12 01:13:43', '2025-01-12 12:25:22');

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
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1737115097),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1737115097;', 1737115097),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1737113179),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1737113179;', 1737113179);

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
('jisNuXFjNxKjuVUJoxHziuTugUoXnAUXfH7A9wBC', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNllJTmhFU29ndTZFQ2tWTWhFN0sxaEdQSkZ5cnZQRDBxeDZQNmtNYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRRakZ4Uzkwc0Q4OEwya2l2SGFlcnNlMWxNTk9tcDBjem0zemZRdmtUcVNjS0EvWHdkZnJNTyI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1737115307),
('uyOKjjGaC7NQqFDwBAdqB0PYEcsSoU1D4CewQh5h', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiM3J6UDNaeTRoaFNEeWxRZWFtcTRPUlpNQWl5NVhtOHhodVlwNW5ZdiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjIxOiJodHRwOi8vbG9jYWxob3N0OjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUWpGeFM5MHNEODhMMmtpdkhhZXJzZTFsTU5PbXAwY3ptM3pmUXZrVHFTY0tBL1h3ZGZyTU8iO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1737115078);

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
(1, 'Theme WordPress bán đèn cao cấp', 'theme-wordpress-ban-den-cao-cap', 'templates/thumbnails/01JHT0N7PS8S3RN0FBSJKPA1SD.jpg', 'templates/images/01JHT0N7PWK7B8N58M86TSTD6T.jpg', 65, 2700000.00, 900000.00, 'http://localhost:8000/k68-admin/other-products/create', '<h2>Giới thiệu Theme WordPress bán đèn cao cấp</h2><p>Giao diện tương thích với hầu hết mọi thiết bị và trình duyệt web như điện thoại, máy tính bảng, Laptop, PC,…<br>Giao diện được thiết kế dựa trên mã nguồn mở WordPress và theme Flatsome tùy biến cao, dễ dàng sử dụng và quản lý.<br>Thiết kế web chuẩn SEO, tốc độ load nhanh và tối ưu hóa với công cụ tìm kiếm Google.<br>Theme sạch hoàn toàn 100% không virus, không mã độc đã được kiểm tra kỹ lưỡng.<br>Sản phẩm được bảo hành giúp bạn yên tâm hơn trong quá trình sử dụng Theme.</p><h2><strong>Theme Theme WordPress bán đèn cao cấp dễ dàng cài đặt và sử dụng</strong></h2><p>Khi mua Theme bạn sẽ được bàn giao mã nguồn Full source code bao gồm: Code + Database được nhân bản bằng plugin duplicator bạn chỉ việc đăt cài đặt lên Hosting là giống demo 100%. Theme được Buid trên Flatsome nên dễ dàng sử dụng với trình dựng trang kéo thả UX builder trực quan theo từng Module và dạng lưới của layout đã áp dụng vào bố cục website.<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:303,&quot;url&quot;:&quot;https://muathemewp.vn/wp-content/uploads/2023/04/flatsome-theme-sliders-animation-1.gif&quot;,&quot;width&quot;:572}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://muathemewp.vn/wp-content/uploads/2023/04/flatsome-theme-sliders-animation-1.gif\" width=\"572\" height=\"303\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><p>Giúp bạn có thể can thiệp vào bất cứ vị trí nào bạn mong muốn chỉnh sửa từ bố cục, hình ảnh, màu sắc,… một cách dễ dàng phù hợp với phong cách cũng như thương hiệu của bạn. Theme được code trên Child theme nên update lâu dài có thể sử dụng được nhiều domain, không giới hạn số lượng website. Giúp bạn tiết kiệm chi phí và thời gian</p><h2><strong>Chính sách ưu đãi khi mua Theme WordPress bán đèn cao cấp</strong></h2><ul><li>Miễn phí cài đặt giao diện Demo lên Hosting</li><li>Đăng ký tài khoản dễ dàng, quản lý Theme đã mua bằng tài khoản linh hoạt</li><li>Nền tảng sử dụng công nghệ mới nhất</li><li>Tương thích với tất cả các thiết bị</li><li>Code tối ưu chuẩn SEO, bảo mật tốt nhất</li><li>Hỗ trợ kỹ thuật ngay khi có sự cố</li></ul><h2>Liên hệ mua Theme WordPress bán đèn cao cấp</h2><p>Bạn vui lòng liên hệ với chúng tôi qua các kênh hỗ trợ trên website ở đầu web và cuối web</p><p><br></p>', 1, '2025-01-17 04:34:00', '2025-01-17 04:39:31');

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

--
-- Đang đổ dữ liệu cho bảng `template_website_tag`
--

INSERT INTO `template_website_tag` (`id`, `template_website_id`, `template_tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `template_tags`
--
ALTER TABLE `template_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `template_websites`
--
ALTER TABLE `template_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
