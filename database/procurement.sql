-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2018 at 10:29 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temporary`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `designacao`, `created_at`, `updated_at`) VALUES
(1, 'Electrodomesticos', NULL, NULL),
(2, 'Segurança', NULL, NULL),
(3, 'Abastecimento de Agua', NULL, NULL),
(4, 'Agencia Viagens', NULL, NULL),
(5, 'Aluguer', NULL, NULL),
(6, 'Aquisição e Manutenção', NULL, NULL),
(7, 'Arquitectura', NULL, NULL),
(8, 'Assuntos Juridicos', NULL, NULL),
(9, 'Auditor', NULL, NULL),
(10, 'Bebidas', NULL, NULL),
(11, 'Branding', NULL, NULL),
(12, 'Cartões ', NULL, NULL),
(13, 'Catering', NULL, NULL),
(14, 'Combustivel', NULL, NULL),
(15, '#N/A', NULL, NULL),
(16, 'Comissao', NULL, NULL),
(17, 'Comunicação', NULL, NULL),
(18, 'Construção Civil', NULL, NULL),
(19, 'Consultoria', NULL, NULL),
(20, 'Correio Expresso', NULL, NULL),
(21, 'Educação', NULL, NULL),
(22, 'Embalagens', NULL, NULL),
(23, 'Equipamento', NULL, NULL),
(24, 'Eventos e entertenimento', NULL, NULL),
(25, 'Ferragem', NULL, NULL),
(26, 'Formação', NULL, NULL),
(27, 'Fotografia', NULL, NULL),
(28, 'Fumigação', NULL, NULL),
(29, 'HIV Servicos Relacionados', NULL, NULL),
(30, 'Hotelaria', NULL, NULL),
(31, 'Imobiliaria', NULL, NULL),
(32, 'Imprensa', NULL, NULL),
(33, 'Impressão grafica', NULL, NULL),
(34, 'Limpeza', NULL, NULL),
(35, 'Manutenção', NULL, NULL),
(36, 'Material', NULL, NULL),
(38, 'Viagens aéreas', NULL, NULL),
(39, 'Transporte passageiros', NULL, NULL),
(40, 'Transporte & Logistica', NULL, NULL),
(41, 'Tradutor', NULL, NULL),
(42, 'Telecomunicaçoes', NULL, NULL),
(43, 'Supermercado', NULL, NULL),
(44, 'Software', NULL, NULL),
(45, 'Mobiliario', NULL, NULL),
(46, 'N/A\r\n', NULL, NULL),
(47, 'Serviço Taxi', NULL, NULL),
(48, 'Segurança de viaturas', NULL, NULL),
(49, 'Restaurante ', NULL, NULL),
(50, 'Ornamentacao\r\n', NULL, NULL),
(51, 'Papelaria\r\n', NULL, NULL),
(52, 'Publicidade\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localizacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `pais_id` int(10) UNSIGNED DEFAULT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banco` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `praca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nib` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moeda` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `nuit`, `email`, `localizacao`, `tipofornecedor_id`, `pais_id`, `telefone`, `cidade`, `numero`, `banco`, `praca`, `conta`, `nib`, `moeda`, `created_at`, `updated_at`, `categoria_id`) VALUES
(1, 'Imovisa', '2456', 'info@gmail.com', 'Av. de Limpopo', 1, 1, '75645323', 'Maputo', '4233', 'BCI', 'Maputo', '76453423', '76654787565', 'MZN', '2018-08-30 11:38:49', '2018-08-30 11:38:49', 1),
(2, 'Tecnicol', '45657890', 'tec@nicol.com', 'Av. Guerra Popular', 1, 1, '3445678', 'Maputo', '5768', 'Standard Bank', 'Xipamanine', '56789', '2345678', 'USD', '2018-08-30 11:52:07', '2018-08-30 11:52:07', 1),
(3, 'sdfghjkl', '4356789', 'i@a.com', 'retytu', 1, 1, '43567890', 'Maputo', '132456', 'BIM', 'FGHJ', '345678', '3456789', '24356789', '2018-08-30 12:33:25', '2018-08-30 12:33:25', 2);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_01_22_011911_create_categories_table', 1),
(16, '2018_08_28_060252_create_fornecedores_table', 1),
(17, '2018_08_30_085951_create_tipo_fornecedors_table', 1),
(18, '2018_08_30_091953_add_tipofornecedor_to_fornecedores_table', 1),
(19, '2018_08_30_092613_create_pais_table', 1),
(20, '2018_08_30_092910_add_pais_to_fornecedores_table', 1),
(21, '2018_08_30_114313_create_categorias_table', 1),
(22, '2018_08_30_114344_create_pessoa_contactos_table', 1),
(23, '2018_08_30_115434_add_categoria_to_fornecedores_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `designacao`, `created_at`, `updated_at`) VALUES
(1, 'Moçambique', NULL, NULL),
(2, 'Moçambique', NULL, NULL),
(3, 'Africa de Sul', NULL, NULL),
(4, 'Irlanda', NULL, NULL),
(5, 'Inglaterra', NULL, NULL),
(6, 'Estados Unidos', NULL, NULL),
(7, 'Espanha', NULL, NULL),
(8, 'Portugal', NULL, NULL),
(9, 'Quenia', NULL, NULL),
(10, 'Suazilandia', NULL, NULL),
(11, 'Etiopia', NULL, NULL),
(12, 'China', NULL, NULL),
(13, 'Japao', NULL, NULL);

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
-- Table structure for table `pessoa_contactos`
--

CREATE TABLE `pessoa_contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fornecedor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pessoa_contactos`
--

INSERT INTO `pessoa_contactos` (`id`, `nome`, `email`, `telefone`, `celular`, `fornecedor_id`, `created_at`, `updated_at`) VALUES
(1, 'Jenit Anantlal', 'j.anantlal@gmail.com', '76342', '+258849227732', 1, '2018-08-30 11:38:49', '2018-08-30 11:38:49'),
(2, 'Sheila Juvane', 'sheila.juvane@mail.com', '345678', '56789', 2, '2018-08-30 11:52:07', '2018-08-30 11:52:07'),
(3, 'dfghjkl', 'fdghj@fg.com', '2345678', '45687687', 3, '2018-08-30 12:33:25', '2018-08-30 12:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_fornecedors`
--

CREATE TABLE `tipo_fornecedors` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Empresa Nacional',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipo_fornecedors`
--

INSERT INTO `tipo_fornecedors` (`id`, `designacao`, `created_at`, `updated_at`) VALUES
(1, 'Empresa Nacional', NULL, NULL),
(2, 'Empresa em nome individual', NULL, NULL),
(3, 'Empresa Estrangeira', NULL, NULL),
(4, 'ATM-Agencias', NULL, NULL),
(5, 'Associacoes', NULL, NULL),
(6, 'Instituicoes do Estado', NULL, NULL),
(7, 'Petty Cash', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muarucha', 'admin@admin.com', 'user', '$2y$10$YDm8LfzTCQKSVHwN4T7gROSexvtdLCRR06JqBVEzMRO0/HpMYdo0i', 'FvYEmAteliiTPStKGr4QF6Q98BhM29WkDKPccjMoJuyi6FriThjgWlltR1b7', '2018-08-30 11:16:30', '2018-08-30 11:16:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornecedores_tipofornecedor_id_foreign` (`tipofornecedor_id`),
  ADD KEY `fornecedores_pais_id_foreign` (`pais_id`),
  ADD KEY `fornecedores_categoria_id_foreign` (`categoria_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pessoa_contactos`
--
ALTER TABLE `pessoa_contactos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pessoa_contactos_fornecedor_id_foreign` (`fornecedor_id`);

--
-- Indexes for table `tipo_fornecedors`
--
ALTER TABLE `tipo_fornecedors`
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
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pessoa_contactos`
--
ALTER TABLE `pessoa_contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_fornecedors`
--
ALTER TABLE `tipo_fornecedors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD CONSTRAINT `fornecedores_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fornecedores_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`),
  ADD CONSTRAINT `fornecedores_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `pessoa_contactos`
--
ALTER TABLE `pessoa_contactos`
  ADD CONSTRAINT `pessoa_contactos_fornecedor_id_foreign` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
