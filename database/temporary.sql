-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 08:32 AM
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
-- Table structure for table `associacoes_docs`
--

CREATE TABLE `associacoes_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associacoes_docs`
--

INSERT INTO `associacoes_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Publicação no Boletim da República', 1, 5, 'Nao'),
(2, 'Amostra do Modelo de Factura e Recibo anulado', 1, 5, 'Nao'),
(3, 'Documento de Atribuicao de NUIT ou Copia do Cartao do NUIT', 1, 5, 'Nao'),
(4, 'Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores', 1, 5, 'Nao'),
(5, 'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco em caso de nao existencia no contrato', 1, 5, 'Nao');

-- --------------------------------------------------------

--
-- Table structure for table `atm_agencias_docs`
--

CREATE TABLE `atm_agencias_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `atm_agencias_docs`
--

INSERT INTO `atm_agencias_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Contrato de Aluguer', 1, 4, 'Sim'),
(2, 'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco em caso de nao existencia no contrato', 1, 4, 'Nao');

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
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empresa_em_nome_individual_docs`
--

CREATE TABLE `empresa_em_nome_individual_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empresa_em_nome_individual_docs`
--

INSERT INTO `empresa_em_nome_individual_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Cópia de Alvará ou Licença da firma', 1, 2, 'Sim'),
(2, 'Certidão de registo da firma', 1, 2, 'Nao'),
(3, 'Publicação no Boletim da República', 0, 2, 'Nao'),
(4, 'Documento de Atribuição de NUIT ou Copia do Cartão do NUIT', 1, 2, 'Nao'),
(5, 'Amostra do Modelo de Factura e Recibo anulado', 1, 2, 'Nao'),
(6, 'Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores', 1, 2, 'Nao'),
(7, 'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco', 1, 2, 'Nao'),
(8, 'Identificação do Gestor ou Proprietario (BI)', 1, 2, 'Sim'),
(9, 'Codico de Conduta', 1, 2, 'Nao'),
(10, 'Declaração de Confidencialidade', 1, 2, 'Nao');

-- --------------------------------------------------------

--
-- Table structure for table `empresa_estrangeira_docs`
--

CREATE TABLE `empresa_estrangeira_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empresa_estrangeira_docs`
--

INSERT INTO `empresa_estrangeira_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Business Registration Certificate', 1, 3, 'Sim'),
(2, 'Value Added Tax (VAT) Registration Certificate', 1, 3, 'Nao'),
(3, ' Current Income Tax Clearance Certificate', 1, 3, 'Nao'),
(4, 'List of Business References with contact persons and numbers for which similar projects have been carried out', 1, 3, 'Nao'),
(5, ' Letter of good standing – Labour', 1, 3, 'Nao'),
(6, ' Declaration of interest', 1, 3, 'Nao'),
(7, 'Contigence Plan', 0, 3, 'Nao'),
(8, 'Code of Conduct', 1, 3, 'Nao'),
(9, 'Banks Detalis confirmed by your Bank', 1, 3, 'Nao'),
(10, 'Declaration of confidentiality', 1, 3, 'Nao');

-- --------------------------------------------------------

--
-- Table structure for table `empresa_nacional_docs`
--

CREATE TABLE `empresa_nacional_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empresa_nacional_docs`
--

INSERT INTO `empresa_nacional_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Cópia de Alvará ou Licença da firma', 1, 1, 'Sim'),
(2, 'Certidão de registo da firma', 1, 1, 'Nao'),
(3, 'Publicação no Boletim da República', 1, 1, 'Nao'),
(4, 'Certidão de quitação das Finanças', 1, 1, 'Sim'),
(5, 'Certidão de quitação do INSS', 1, 1, 'Sim'),
(6, 'Documento de Atribuição de NUIT ou Copia do Cartão do NUIT', 1, 1, 'Nao'),
(7, 'Amostra do Modelo de Factura e Recibo anulado', 1, 1, 'Nao'),
(8, 'Declaração de não existência de conflito de interesse entre a firma e o Standard Bank e ou os seus colaboradores', 1, 1, 'Nao'),
(9, 'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco', 1, 1, 'Nao'),
(10, 'Declaração de Existencia de Plano de Contingencia na Empresa', 0, 1, 'Nao'),
(11, 'Codico de Conduta', 1, 1, 'Nao'),
(12, 'Declaração de Confidencialidade', 1, 1, 'Nao');

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
  `vendor_Number` int(11) DEFAULT NULL,
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
  `categoria_id` int(10) UNSIGNED NOT NULL,
  `kyv_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `nuit`, `email`, `localizacao`, `tipofornecedor_id`, `vendor_Number`, `pais_id`, `telefone`, `cidade`, `numero`, `banco`, `praca`, `conta`, `nib`, `moeda`, `created_at`, `updated_at`, `categoria_id`, `kyv_status`) VALUES
(1, 'Imovisa', '2456', 'info@gmail.com', 'Av. de Limpopo', 1, NULL, 1, '75645323', 'Maputo', '4233', 'BCI', 'Maputo', '76453423', '76654787565', 'MZN', '2018-08-30 11:38:49', '2018-08-30 11:38:49', 1, 'NO'),
(2, 'Tecnicol', '45657890', 'tec@nicol.com', 'Av. Guerra Popular', 1, NULL, 1, '3445678', 'Maputo', '5768', 'Standard Bank', 'Xipamanine', '56789', '2345678', 'USD', '2018-08-30 11:52:07', '2018-08-30 11:52:07', 1, 'NO'),
(3, 'sdfghjkl', '4356789', 'i@a.com', 'retytu', 1, NULL, 1, '43567890', 'Maputo', '132456', 'BIM', 'FGHJ', '345678', '3456789', '24356789', '2018-08-30 12:33:25', '2018-08-30 12:33:25', 2, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `fornecedor_docs`
--

CREATE TABLE `fornecedor_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extensao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tamanho` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED NOT NULL,
  `fornecedor_id` int(10) UNSIGNED NOT NULL,
  `mime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'application/pdf',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instituicos_do_estado_docs`
--

CREATE TABLE `instituicos_do_estado_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instituicos_do_estado_docs`
--

INSERT INTO `instituicos_do_estado_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Documento de Atribuicao de NUIT ou Copia do Cartao do NUIT', 1, 6, 'Nao'),
(2, 'Dados Bancários do Fornecedor, incluindo o NIB, confirmados pelo Banco em caso de nao existencia no contrato', 1, 6, 'Nao');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
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
(23, '2018_08_30_115434_add_categoria_to_fornecedores_table', 1),
(24, '2016_01_01_000000_add_voyager_user_fields', 2),
(25, '2016_01_01_000000_create_data_types_table', 2),
(26, '2016_05_19_173453_create_menu_table', 2),
(27, '2016_10_21_190000_create_roles_table', 2),
(28, '2016_10_21_190000_create_settings_table', 2),
(29, '2016_11_30_135954_create_permission_table', 2),
(30, '2016_11_30_141208_create_permission_role_table', 2),
(31, '2016_12_26_201236_data_types__add__server_side', 2),
(32, '2017_01_13_000000_add_route_to_menu_items_table', 2),
(33, '2017_01_14_005015_create_translations_table', 2),
(34, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 2),
(35, '2017_03_06_000000_add_controller_to_data_types_table', 2),
(36, '2017_04_21_000000_add_order_to_data_rows_table', 2),
(37, '2017_07_05_210000_add_policyname_to_data_types_table', 2),
(38, '2017_08_05_000000_add_group_to_settings_table', 2),
(39, '2017_11_26_013050_add_user_role_relationship', 2),
(40, '2017_11_26_015000_create_user_roles_table', 2),
(41, '2018_03_11_000000_add_user_settings', 2),
(42, '2018_03_14_000000_add_details_to_data_types_table', 2),
(43, '2018_03_16_000000_make_settings_value_nullable', 2),
(44, '2018_09_05_084609_add_vendor_number_to_fornecedores_table', 2),
(45, '2018_09_11_083603_create_empresa_nacional_docs_table', 2),
(46, '2018_09_11_083744_create_empresa_em_nome_individual_docs_table', 2),
(47, '2018_09_11_083904_create_empresa_estrangeira_docs_table', 2),
(48, '2018_09_11_084037_create_empresa_instituicoes_do_estado_docs_table', 2),
(49, '2018_09_11_084121_create__associacoes_docs_table', 2),
(50, '2018_09_11_084205_create__atm_agencias_docs_table', 2),
(51, '2018_09_11_085956_create__petty_cash_docs_table', 2),
(52, '2018_09_11_094255_add_grau_de_obrigatoriedade_to__petty_cash_docs_table', 2),
(53, '2018_09_11_094414_add_grau_de_obrigatoriedade_to_empresa_nacional_docs_table', 2),
(54, '2018_09_11_094712_add_grau_de_obrigatoriedade_to__atm_agencias_docs_table', 2),
(55, '2018_09_11_094745_add_grau_de_obrigatoriedade_to__associacoes_docs_table', 2),
(56, '2018_09_11_094842_add_grau_de_obrigatoriedade_to_empresa_instituicoes_do_estado_docs_table', 2),
(57, '2018_09_11_094928_add_grau_de_obrigatoriedade_to_empresa_estrangeira_docs_table', 2),
(58, '2018_09_11_095118_add_grau_de_obrigatoriedade_to_empresa_em_nome_individual_docs_table', 2),
(59, '2018_09_11_121255_add_tipo_fornecedors_id_to_empresa_em_nome_individual_docs_table', 2),
(60, '2018_09_11_121407_add_tipo_fornecedors_id_to_empresa_estrangeira_docs_table', 2),
(61, '2018_09_11_121451_add_tipo_fornecedors_id_to_empresa_instituicoes_do_estado_docs_table', 2),
(62, '2018_09_11_121548_add_tipo_fornecedors_id_to__petty_cash_docs_table', 2),
(63, '2018_09_11_121652_add_tipo_fornecedors_id_to__associacoes_docs_table', 2),
(64, '2018_09_11_121727_add_tipo_fornecedors_id_to__atm_agencias_docs_table', 2),
(65, '2018_09_11_121802_add_tipo_fornecedors_id_to_empresa_nacional_docs_table', 2),
(66, '2018_09_11_125331_create_fornecedor_docs_table', 3),
(67, '2018_09_11_130850_add_kyv_status_to_fornecedores_table', 4),
(81, '2018_09_11_133220_add_prazo_to_petty_cash_docs_table', 5),
(82, '2018_09_11_133341_add_prazo_to_empresa_em_nome_individual_docs_table', 5),
(83, '2018_09_11_133646_add_prazo_to__atm_agencias_docs_table', 5),
(84, '2018_09_11_133812_add_prazo_to__associacoes_docs_table', 5),
(85, '2018_09_11_134051_add_prazo_to_empresa_instituicoes_do_estado_docs_table', 5),
(86, '2018_09_11_134208_add_prazo_to_empresa_estrangeira_docs_table', 5),
(87, '2018_09_11_134321_add_prazo_to_empresa_nacional_docs_table', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
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
-- Table structure for table `petty_cash_docs`
--

CREATE TABLE `petty_cash_docs` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grau_de_obrigatoriedade` int(11) NOT NULL,
  `tipofornecedor_id` int(10) UNSIGNED DEFAULT NULL,
  `prazo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petty_cash_docs`
--

INSERT INTO `petty_cash_docs` (`id`, `designacao`, `grau_de_obrigatoriedade`, `tipofornecedor_id`, `prazo`) VALUES
(1, 'Dados Bancários da Agencia', 1, 7, 'Nao');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `user_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `user_type`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Muarucha', 'admin@admin.com', 'users/default.png', 'user', '$2y$10$YDm8LfzTCQKSVHwN4T7gROSexvtdLCRR06JqBVEzMRO0/HpMYdo0i', 'FTVx38ONmVZhr8s88stgBOjrNcg5GIX9KNKxLt1o7lBV1UxRHX5ffPyThQpo', NULL, '2018-08-30 11:16:30', '2018-08-30 11:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associacoes_docs`
--
ALTER TABLE `associacoes_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `associacoes_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `atm_agencias_docs`
--
ALTER TABLE `atm_agencias_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `atm_agencias_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `empresa_em_nome_individual_docs`
--
ALTER TABLE `empresa_em_nome_individual_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_em_nome_individual_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `empresa_estrangeira_docs`
--
ALTER TABLE `empresa_estrangeira_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_estrangeira_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `empresa_nacional_docs`
--
ALTER TABLE `empresa_nacional_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_nacional_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fornecedores_tipofornecedor_id_foreign` (`tipofornecedor_id`),
  ADD KEY `fornecedores_pais_id_foreign` (`pais_id`),
  ADD KEY `fornecedores_categoria_id_foreign` (`categoria_id`);

--
-- Indexes for table `fornecedor_docs`
--
ALTER TABLE `fornecedor_docs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fornecedor_docs_path_unique` (`path`),
  ADD KEY `fornecedor_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`),
  ADD KEY `fornecedor_docs_fornecedor_id_foreign` (`fornecedor_id`);

--
-- Indexes for table `instituicos_do_estado_docs`
--
ALTER TABLE `instituicos_do_estado_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instituicos_do_estado_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `pessoa_contactos`
--
ALTER TABLE `pessoa_contactos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pessoa_contactos_fornecedor_id_foreign` (`fornecedor_id`);

--
-- Indexes for table `petty_cash_docs`
--
ALTER TABLE `petty_cash_docs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `petty_cash_docs_tipofornecedor_id_foreign` (`tipofornecedor_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tipo_fornecedors`
--
ALTER TABLE `tipo_fornecedors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associacoes_docs`
--
ALTER TABLE `associacoes_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `atm_agencias_docs`
--
ALTER TABLE `atm_agencias_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `empresa_em_nome_individual_docs`
--
ALTER TABLE `empresa_em_nome_individual_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `empresa_estrangeira_docs`
--
ALTER TABLE `empresa_estrangeira_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `empresa_nacional_docs`
--
ALTER TABLE `empresa_nacional_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fornecedor_docs`
--
ALTER TABLE `fornecedor_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instituicos_do_estado_docs`
--
ALTER TABLE `instituicos_do_estado_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa_contactos`
--
ALTER TABLE `pessoa_contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petty_cash_docs`
--
ALTER TABLE `petty_cash_docs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_fornecedors`
--
ALTER TABLE `tipo_fornecedors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `associacoes_docs`
--
ALTER TABLE `associacoes_docs`
  ADD CONSTRAINT `associacoes_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `atm_agencias_docs`
--
ALTER TABLE `atm_agencias_docs`
  ADD CONSTRAINT `atm_agencias_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `empresa_em_nome_individual_docs`
--
ALTER TABLE `empresa_em_nome_individual_docs`
  ADD CONSTRAINT `empresa_em_nome_individual_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `empresa_estrangeira_docs`
--
ALTER TABLE `empresa_estrangeira_docs`
  ADD CONSTRAINT `empresa_estrangeira_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `empresa_nacional_docs`
--
ALTER TABLE `empresa_nacional_docs`
  ADD CONSTRAINT `empresa_nacional_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD CONSTRAINT `fornecedores_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `fornecedores_pais_id_foreign` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`),
  ADD CONSTRAINT `fornecedores_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `fornecedor_docs`
--
ALTER TABLE `fornecedor_docs`
  ADD CONSTRAINT `fornecedor_docs_fornecedor_id_foreign` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`),
  ADD CONSTRAINT `fornecedor_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `instituicos_do_estado_docs`
--
ALTER TABLE `instituicos_do_estado_docs`
  ADD CONSTRAINT `instituicos_do_estado_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pessoa_contactos`
--
ALTER TABLE `pessoa_contactos`
  ADD CONSTRAINT `pessoa_contactos_fornecedor_id_foreign` FOREIGN KEY (`fornecedor_id`) REFERENCES `fornecedores` (`id`);

--
-- Constraints for table `petty_cash_docs`
--
ALTER TABLE `petty_cash_docs`
  ADD CONSTRAINT `petty_cash_docs_tipofornecedor_id_foreign` FOREIGN KEY (`tipofornecedor_id`) REFERENCES `tipo_fornecedors` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
