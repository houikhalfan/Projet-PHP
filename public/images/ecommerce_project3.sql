-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2025 at 02:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_project`
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
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(11, 'Chocolate', '2025-04-07 21:38:13', '2025-04-07 21:38:13'),
(12, 'Coconut', '2025-04-07 21:39:02', '2025-04-07 21:39:02'),
(13, 'Red valvet', '2025-04-07 21:39:10', '2025-04-07 21:39:10'),
(14, 'Savory', '2025-04-07 21:39:15', '2025-04-07 21:39:15'),
(15, 'Fruity', '2025-04-07 21:39:25', '2025-04-07 21:39:25'),
(16, 'Spiced', '2025-04-07 21:40:13', '2025-04-07 21:41:01'),
(17, 'Bread', '2025-04-07 21:44:51', '2025-04-07 21:44:51');

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
(4, '2025_04_05_163210_create_categories_table', 2),
(5, '2025_04_05_225649_create_products_table', 3),
(6, '2025_04_06_175016_create_carts_table', 4),
(7, '2025_04_06_214430_create_orders_table', 5),
(8, '2025_04_07_065236_add_payment_status_to_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rec_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'cash on delivery',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `rec_address`, `phone`, `status`, `user_id`, `product_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'haddd', 'sdqsd kjsd', '667', 'delivered', 2, 1, 'cash on delivery', '2025-04-06 21:49:07', '2025-04-07 05:50:16'),
(2, 'haddd', 'sdqsd kjsd', '667', NULL, 2, 2, 'cash on delivery', '2025-04-06 21:49:07', '2025-04-06 21:49:07'),
(3, 'haddd', 'sdqsd kjsd', '667', NULL, 2, 2, 'cash on delivery', '2025-04-06 21:49:07', '2025-04-06 21:49:07'),
(26, 'admin', 'morocco', '12345678', NULL, 1, 2, 'paid', '2025-04-07 07:09:49', '2025-04-07 07:09:49'),
(27, 'admin', 'morocco', '12345678', NULL, 1, 1, 'paid', '2025-04-07 07:09:49', '2025-04-07 07:09:49'),
(28, 'admin', 'morocco', '12345678', NULL, 1, 2, 'paid', '2025-04-07 07:09:49', '2025-04-07 07:09:49'),
(29, 'admin', 'morocco', '12345678', NULL, 1, 2, 'paid', '2025-04-07 07:09:49', '2025-04-07 07:09:49'),
(30, 'admin', 'morocco', '12345678', NULL, 1, 2, 'paid', '2025-04-07 07:09:49', '2025-04-07 07:09:49'),
(31, 'admin', 'morocco', '12345678', NULL, 1, 1, 'paid', '2025-04-07 07:09:49', '2025-04-07 07:09:49'),
(32, 'admin', 'morocco', '12345678', NULL, 1, 2, 'paid', '2025-04-07 07:11:28', '2025-04-07 07:11:28'),
(33, 'admin', 'morocco', '12345678', NULL, 1, 2, 'paid', '2025-04-07 07:41:11', '2025-04-07 07:41:11'),
(34, 'admin', 'morocco', '12345678', NULL, 1, 5, 'cash on delivery', '2025-04-07 15:00:41', '2025-04-07 15:00:41'),
(35, 'hajar', 'sdqsd', '667', NULL, 2, 2, 'paid', '2025-04-07 16:41:30', '2025-04-07 16:41:30'),
(36, 'hajar', 'sdqsd', '667', NULL, 2, 2, 'paid', '2025-04-07 16:50:34', '2025-04-07 16:50:34'),
(37, 'hajar', 'sdqsd', '667', NULL, 2, 2, 'paid', '2025-04-07 17:31:06', '2025-04-07 17:31:06'),
(38, 'admin', 'morocco', '12345678', NULL, 1, 1, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(39, 'admin', 'morocco', '12345678', NULL, 1, 3, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(40, 'admin', 'morocco', '12345678', NULL, 1, 4, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(41, 'admin', 'morocco', '12345678', NULL, 1, 2, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(42, 'admin', 'morocco', '12345678', NULL, 1, 2, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(43, 'admin', 'morocco', '12345678', NULL, 1, 2, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(44, 'admin', 'morocco', '12345678', NULL, 1, 2, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(45, 'admin', 'morocco', '12345678', NULL, 1, 1, 'cash on delivery', '2025-04-08 10:32:50', '2025-04-08 10:32:50'),
(46, 'admin', 'morocco', '12345678', NULL, 1, 1, 'cash on delivery', '2025-04-08 10:42:05', '2025-04-08 10:42:05'),
(47, 'admin', 'morocco', '12345678', NULL, 1, 2, 'cash on delivery', '2025-04-08 10:42:57', '2025-04-08 10:42:57'),
(48, 'admin', 'morocco', '12345678', NULL, 1, 2, 'cash on delivery', '2025-04-08 10:42:57', '2025-04-08 10:42:57'),
(49, 'admin', 'morocco', '12345678', NULL, 1, 1, 'cash on delivery', '2025-04-08 10:47:21', '2025-04-08 10:47:21'),
(50, 'admin', 'morocco', '12345678', NULL, 1, 1, 'cash on delivery', '2025-04-08 10:50:26', '2025-04-08 10:50:26'),
(51, 'admin', 'morocco', '12345678', NULL, 1, 3, 'cash on delivery', '2025-04-08 10:51:55', '2025-04-08 10:51:55');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `category`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'Carrot Cake', 'Deliciously Moist Carrot Cake\r\n\r\nIndulge in the rich, spiced goodness of our homemade Carrot Cake. Made with the finest ingredients, this moist and tender cake is packed with freshly grated carrots, a hint of cinnamon, and a touch of nutmeg for a perfect balance of flavors. Topped with a creamy, velvety cream cheese frosting, this cake offers a delightful mix of sweet and savory in every bite. Whether you\'re celebrating a special occasion or simply satisfying your sweet tooth, our Carrot Cake is sure to impress.\r\n\r\nPerfectly baked and beautifully decorated, it\'s a treat that never goes out of style!', '1743962071.jpg', '142', 'Spiced', '0', '2025-04-06 16:54:31', '2025-04-08 10:50:26'),
(2, 'Mango Cheesecake', 'Our Mango Cheesecake is a tropical delight that combines the rich, creamy texture of classic cheesecake with the refreshing sweetness of ripe mango. The smooth, velvety cheesecake sits atop a buttery graham cracker crust, while a luscious layer of mango puree is poured on top, adding a burst of vibrant color and flavor. This indulgent dessert offers the perfect balance of tangy and sweet, making it a refreshing and exotic twist on the traditional cheesecake. Ideal for summer gatherings or special occasions, our Mango Cheesecake is sure to impress with its tropical charm.', '1744066637.jpeg', '228', 'Fruity', '0', '2025-04-06 16:55:24', '2025-04-08 10:42:57'),
(3, 'Coconut Cake', 'Our Coconut Cake is a moist, light cake that\'s packed with shredded coconut for a sweet, tropical flavor in every bite. Covered with a luscious coconut frosting and sprinkled with toasted coconut flakes, this cake is a true coconut lover’s dream. Perfect for celebrations or just as a treat, this cake brings the island vibes straight to your table.', '1744027986.jpg', '399', 'Coconut', '0', '2025-04-07 11:13:06', '2025-04-08 10:51:55'),
(4, 'Choclate Brownies', 'These Chocolate Brownies are the ultimate comfort food. Dense, fudgy, and packed with rich chocolate flavor, every bite melts in your mouth. Made with high-quality cocoa and premium chocolate, these brownies have a deep, indulgent taste that satisfies any chocolate craving. Perfect for sharing, or simply enjoying with a cup of coffee or tea, these brownies are the definition of pure chocolate bliss.', '1744028017.png', '50', 'Chocolate', '5', '2025-04-07 11:13:37', '2025-04-07 21:48:17'),
(5, 'Cherry cupcakes', 'Our Cherry Cupcakes are a delightful treat that combines the sweetness of fresh cherries with the softness of a perfectly baked cupcake. These light, fluffy cupcakes are infused with cherry flavor and topped with a swirl of creamy frosting. A whole cherry sits delicately on top, adding a pop of color and a burst of fresh fruitiness with every bite. Perfect for any celebration or as a sweet snack, these cupcakes bring a touch of elegance and a lot of flavor.', '1744028157.jpeg', '34', 'Fruity', '19', '2025-04-07 11:15:57', '2025-04-07 21:47:58'),
(6, 'Red velvet cookies', 'Soft, chewy, and vibrant red in color, these Red Velvet Cookies are the perfect treat for anyone who loves a rich, slightly tangy flavor. Infused with the classic red velvet cake essence, these cookies are made with buttermilk, cocoa, and a hint of vanilla, giving them a deliciously unique taste. Topped with cream cheese chips or drizzled with cream cheese icing, these cookies are an indulgent and eye-catching dessert.', '1744065881.jpeg', '68', 'Red valvet', '4', '2025-04-07 21:44:41', '2025-04-07 21:44:41'),
(7, 'Strawberry Cheesecake', 'Our Strawberry Cheesecake is a creamy and decadent dessert made with a rich, velvety cheesecake filling on a buttery graham cracker crust. Topped with a generous layer of fresh, ripe strawberries and a sweet strawberry sauce, this classic dessert combines the perfect balance of tangy and sweet. A delightful treat for any occasion, it’s a creamy indulgence with a fruity twist.', '1744065997.jpg', '308', 'Fruity', '0', '2025-04-07 21:46:37', '2025-04-07 21:46:37'),
(8, 'Focaccia', 'Focaccia is an Italian flatbread that’s both soft and slightly crispy on the outside. Infused with olive oil, garlic, and fresh herbs like rosemary, this savory bread is perfect for dipping in olive oil or enjoying as a side dish. Whether served warm or at room temperature, focaccia is versatile enough to be enjoyed on its own or with a variety of toppings. It’s a simple yet flavorful delight, ideal for any meal.', '1744066153.jpeg', '70', 'Bread', '2', '2025-04-07 21:49:13', '2025-04-07 21:49:13'),
(9, 'Chocolate Chip Cookies', 'Classic and irresistible, our Chocolate Chip Cookies are the perfect balance of crisp on the edges and soft in the center. Packed with generous chunks of rich, semi-sweet chocolate, each bite is an indulgent treat. Made with high-quality ingredients like butter, vanilla, and brown sugar, these cookies offer a comforting and timeless flavor that will satisfy any sweet tooth. Ideal for sharing or enjoying with a glass of milk, these cookies are a true crowd-pleaser.', '1744066215.jpg', '90', 'Chocolate', '4', '2025-04-07 21:50:15', '2025-04-07 21:50:15'),
(10, 'Whole Wheat Bread', 'Our Whole Wheat Bread is made with wholesome, natural ingredients to create a hearty and nutritious loaf. Packed with the rich flavor of whole wheat flour, this bread has a denser texture compared to white bread while maintaining a soft, fresh crumb. It’s perfect for sandwiches or as a side to any meal, providing a healthy, fiber-rich alternative without compromising on taste.', '1744066245.jpeg', '50', 'Bread', '0', '2025-04-07 21:50:45', '2025-04-07 21:50:45'),
(11, 'Berry Tart', 'Our Berry Tart is a vibrant, refreshing dessert that features a buttery, flaky crust filled with a smooth, creamy custard base. Topped with a colorful assortment of fresh, juicy berries—such as strawberries, blueberries, raspberries, and blackberries—this tart is a perfect balance of sweetness and tang. The crisp pastry, combined with the rich creaminess and the burst of fruit, creates a delightful and elegant treat, ideal for any occasion.', '1744066406.jpeg', '100', 'Fruity', '1', '2025-04-07 21:53:26', '2025-04-07 21:53:26'),
(12, 'Cinnamon Rolls', 'Our Cinnamon Rolls are a warm, decadent treat that will fill your kitchen with the irresistible aroma of cinnamon and sweet dough. Soft and fluffy on the inside with a perfectly golden, slightly crispy exterior, each roll is generously swirled with a rich cinnamon-sugar filling. Topped with a creamy, sweet glaze, these rolls are the perfect combination of warmth, spice, and sweetness. Whether enjoyed as a breakfast indulgence or a comforting snack, our cinnamon rolls are sure to satisfy your cravings and leave you wanting more.', '1744066479.jpg', '400', 'Spiced', '4', '2025-04-07 21:54:39', '2025-04-07 21:54:39');

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
('v4w8ocFgTjsECava69ah6Jny4gwk5X8CeHbuXK8O', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibHo3dTYxZk1hRVk3a3BjbnpNY0V5WFBiMmlDZVhZajJhQVhkM2FUeCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0MzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluY3NzL2Nzcy9mb250LmNzcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1744113625);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '12345678', 'morocco', NULL, '$2y$12$fSzz0I65MAD/MyY4rcfpdOUyXgkxV2DXbtNsBBKs6RG1Adqc2uBSa', 'n9n0LBoA1hJEyf42QhjrTBF9CSxEB7H4eExxrKVJBImaFvKGz3g8uGaI75ob', '2025-03-25 21:25:00', '2025-03-25 21:25:00'),
(2, 'hajar', 'haha@haja', 'user', '667', 'sdqsd', NULL, '$2y$12$3iNpmlEiSQWss5lv1/dwYeESC.wTxGJ1cwkPrnhdEgb7YUIroqrsS', NULL, NULL, NULL);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
