-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 oct. 2022 à 21:19
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fiscality`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounting_results`
--

CREATE TABLE `accounting_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `total_incomes` double(8,2) NOT NULL,
  `total_expenses` double(8,2) NOT NULL,
  `ar_value` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `accounting_results`
--

INSERT INTO `accounting_results` (`id`, `company_id`, `total_incomes`, `total_expenses`, `ar_value`, `created_at`, `updated_at`) VALUES
(2, 4, 6988.00, 135581.00, 142569.00, '2022-10-11 16:42:47', '2022-10-11 16:42:47'),
(4, 9, 561485.00, 548909.00, 12576.00, '2022-10-11 17:25:49', '2022-10-11 17:25:49'),
(5, 10, 11500.00, 27670.00, -16170.00, '2022-10-14 17:22:01', '2022-10-14 17:22:01');

-- --------------------------------------------------------

--
-- Structure de la table `bases`
--

CREATE TABLE `bases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bases`
--

INSERT INTO `bases` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bénéfice fiscal', NULL, '2022-10-04 13:10:41', '2022-10-14 18:11:36'),
(2, 'Produits encaissables', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(3, 'Volume', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(4, 'Bénéfice d\'affaire', NULL, '2022-10-04 13:10:41', '2022-10-14 18:11:50');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Taux d\'impôt', '424301', '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(2, 'Impot minimum', '239185', '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(3, 'Minimum Forfaitaire', '508573', '2022-10-04 13:10:41', '2022-10-04 13:10:41');

-- --------------------------------------------------------

--
-- Structure de la table `category_company`
--

CREATE TABLE `category_company` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `charges`
--

CREATE TABLE `charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(12,3) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rccm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_rccm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_center_id` bigint(20) UNSIGNED NOT NULL,
  `type_company_id` bigint(20) UNSIGNED NOT NULL,
  `domain_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `status` enum('approuved','rejected','pending') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `ifu`, `path`, `rccm`, `path_rccm`, `created_date`, `email`, `celphone`, `tax_center_id`, `type_company_id`, `domain_id`, `user_id`, `company_id`, `is_active`, `is_confirmed`, `status`, `created_at`, `updated_at`) VALUES
(4, 'DANVI', '1234567891236', 'IFU/IFU_DU_1664903734.IFU_DU1663867943.pdf', 'RC/RG/2002', 'RCCM/RCCM_DU_1664903734.IFU_DU1663867943.pdf', '2002-02-21', 'danvi@gmail.com', '56115410', 1, 2, 1, 2, NULL, 1, 0, 'pending', '2022-10-04 16:15:34', '2022-10-04 16:15:34'),
(9, 'PAPARAZZI', '1234567891458', 'IFU/IFU_DU_1665509153.RP_612_AdministratorGuide_en.pdf', 'RB/RF/2002', 'RCCM/RCCM_DU_1665509153.IFU_DU1663867943.pdf', '2002-02-21', 'paparazi@gmail.com', '56115898', 1, 2, 2, 2, NULL, 1, 0, 'pending', '2022-10-11 16:25:53', '2022-10-11 16:25:53'),
(10, 'LUCARI', '3202221212121', 'IFU/IFU_DU_1665771163.RCCM_DU_1663939119.RP_612_AdministratorGuide_en (1).pdf', 'RB/COT/21 B 20', 'RCCM/RCCM_DU_1665771163.IFU_DU_1663939119.RP_612_AdministratorGuide_en (2).pdf', '2023-10-15', 'lucari@gmail.com', '+22997575717', 3, 4, 1, 2, NULL, 1, 0, 'pending', '2022-10-14 17:12:43', '2022-10-14 17:12:43');

-- --------------------------------------------------------

--
-- Structure de la table `company_detail_type`
--

CREATE TABLE `company_detail_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `detail_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `company_detail_type`
--

INSERT INTO `company_detail_type` (`id`, `company_id`, `detail_type_id`, `created_at`, `updated_at`) VALUES
(1, 9, 5, NULL, NULL),
(2, 9, 1, NULL, NULL),
(3, 9, 3, NULL, NULL),
(4, 10, 5, NULL, NULL),
(5, 10, 2, NULL, NULL),
(6, 10, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `company_user`
--

CREATE TABLE `company_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `company_user`
--

INSERT INTO `company_user` (`id`, `company_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 4, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `detail_types`
--

CREATE TABLE `detail_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `base_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type_impot_id` bigint(20) UNSIGNED DEFAULT NULL,
  `taux` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `detail_types`
--

INSERT INTO `detail_types` (`id`, `name`, `code`, `category_id`, `base_id`, `type_impot_id`, `taux`, `description`, `article`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Entreprise à prépondérance immobilière', '508573', 2, 2, 1, '25', 'null', 'article', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(2, 'Entreprise du secteur du bâtiment et des travaux publique', '508574', 2, 2, 1, '3', 'null', 'article', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(3, 'Impôt sur les société dû', '508575', 3, 1, 2, '10', 'null', 'article', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(4, 'Distributeurs non importateurs de produits pétroliers et les stations services', '508576', 2, 3, 2, '10', 'null', 'article', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(5, 'Industries', '508577', 1, 2, 1, '20', 'null', 'article', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(6, 'Ecoles privées', '508578', 1, 2, 1, '25', 'null', 'article', NULL, '2022-10-04 13:10:41', '2022-10-04 13:10:41');

-- --------------------------------------------------------

--
-- Structure de la table `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `domains`
--

INSERT INTO `domains` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Technologie', '346106', '2022-10-04 13:10:40', '2022-10-14 17:08:08'),
(2, 'Banque et assurance', '346107', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(3, 'BTP et Matériaux de construction', '346108', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(4, 'Chimie et para-Chimie', '346109', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(5, 'Niveaux', '346100', '2022-10-04 13:10:40', '2022-10-04 13:10:40');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `income_expenses`
--

CREATE TABLE `income_expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('income','expense') COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `income_expenses`
--

INSERT INTO `income_expenses` (`id`, `account`, `name`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '70', 'Vente', 'income', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(2, '71', 'Subvention d\'exploitation', 'income', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(3, '72', 'Production immobilisée', 'income', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(4, '73', 'Variation de stocks de biens et services produits', 'income', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(5, '60', 'Achat', 'expense', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(6, '61', 'Transport', 'expense', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(7, '62', 'Services extérieurs', 'expense', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(8, '63', 'Autres services extérieurs', 'expense', NULL, '2022-10-11 16:29:10', '2022-10-11 16:29:10'),
(9, '21', 'Raymond Agbete', 'income', NULL, '2022-10-14 17:01:06', '2022-10-14 17:01:06');

-- --------------------------------------------------------

--
-- Structure de la table `i_m_calculations`
--

CREATE TABLE `i_m_calculations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `i_m_calculation_details`
--

CREATE TABLE `i_m_calculation_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `i_m_calculs`
--

CREATE TABLE `i_m_calculs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `total_items` double(8,2) NOT NULL,
  `total_im` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `i_m_calculs`
--

INSERT INTO `i_m_calculs` (`id`, `company_id`, `total_items`, `total_im`, `created_at`, `updated_at`) VALUES
(1, 4, 142.00, 6846.00, '2022-10-11 17:17:43', '2022-10-11 17:17:43'),
(2, 9, 455000.00, 106485.00, '2022-10-11 17:29:03', '2022-10-11 17:29:03');

-- --------------------------------------------------------

--
-- Structure de la table `i_m_items`
--

CREATE TABLE `i_m_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `i_m_items`
--

INSERT INTO `i_m_items` (`id`, `name`, `base_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Impot 1', 2, NULL, '2022-10-11 16:21:50', '2022-10-11 16:21:50'),
(2, 'Impot 2', 2, NULL, '2022-10-11 16:21:50', '2022-10-11 16:21:50'),
(3, 'Impot 3', 2, NULL, '2022-10-11 16:21:50', '2022-10-11 16:21:50'),
(4, 'Impot 4', 2, NULL, '2022-10-11 16:21:50', '2022-10-11 16:21:50'),
(5, 'Impot 5', 2, NULL, '2022-10-11 16:21:50', '2022-10-11 16:21:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_000001_create_profile_users_table', 1),
(3, '2014_10_12_000002_create_packs_table', 1),
(4, '2014_10_12_000003_create_pack_user_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2021_09_21_130146_create_type_companies_table', 1),
(9, '2021_09_21_130205_create_type_impots_table', 1),
(10, '2021_09_21_135836_create_domains_table', 1),
(11, '2021_09_21_135837_create_principal_activities_table', 1),
(12, '2021_09_21_140047_create_categories_table', 1),
(13, '2021_09_21_140106_create_bases_table', 1),
(14, '2021_09_21_140107_create_detail_types_table', 1),
(15, '2022_09_15_115443_create_tax_centers_table', 1),
(16, '2022_09_16_164439_create_permission_tables', 1),
(17, '2022_09_19_102746_create_companies_table', 1),
(18, '2022_09_19_142339_create_company_user_table', 1),
(19, '2022_09_21_154048_create_type_company_type_impot_table', 1),
(20, '2022_09_28_135957_create_tax_bases_table', 1),
(21, '2022_09_28_160259_create_table_category_company', 1),
(30, '2022_09_28_160423_create_table_company_sub_category', 2),
(31, '2022_09_30_124406_create_income_expenses_table', 3),
(32, '2022_09_30_132253_create_charges_table', 3),
(33, '2022_10_03_104504_create_accounting_results_table', 3),
(34, '2022_10_03_104806_create_r_a_details_table', 3),
(35, '2022_10_03_110857_create_i_m_items_table', 3),
(36, '2022_10_03_110858_create_i_m_calculations_table', 3),
(37, '2022_10_03_110935_create_i_m_calculation_details_table', 3),
(38, '2022_10_11_181019_create_i_m_calculs_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Structure de la table `packs`
--

CREATE TABLE `packs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max` int(11) NOT NULL,
  `type` enum('cabinet','enterprise') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `packs`
--

INSERT INTO `packs` (`id`, `name`, `description`, `max`, `type`, `created_at`, `updated_at`) VALUES
(1, 'BRONZE', 'Lorem', 3, 'cabinet', '2022-10-04 13:10:40', '2022-10-14 16:17:56'),
(2, 'OR', 'Lorem', 6, 'cabinet', '2022-10-04 13:10:40', '2022-10-14 16:18:07'),
(3, 'DIAMANTS', 'Lorem', 9, 'cabinet', '2022-10-04 13:10:40', '2022-10-14 16:21:02'),
(4, 'pack pour soit', 'Lorem ', 1, 'enterprise', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(6, 'HELIUM', 'rien', 3, 'cabinet', '2022-10-14 16:20:21', '2022-10-14 16:21:24');

-- --------------------------------------------------------

--
-- Structure de la table `pack_users`
--

CREATE TABLE `pack_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pack_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pack_users`
--

INSERT INTO `pack_users` (`id`, `user_id`, `pack_id`, `created_at`, `updated_at`) VALUES
(2, 3, 3, '2022-10-05 10:01:14', '2022-10-05 10:01:14'),
(3, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `user_id`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create', 'Permet de créer de modifier de supprimer une info ou donnée de l\'entreprise', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(2, 'read', 'Lorsque vous disposez d\'une autorisation de lecture, vous pouvez effectuer des tâches dans lesquelles vous affichez les détails associés à l\'objet.', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(3, 'edit', 'Permet de modifier et supprimer une info de l\'entreprise.', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(4, 'delete', 'Permet d\'effectuer des suppressions sur une info ou donnée de l\'entreprise', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 2, 'main', 'e7ea930c97aa2ba311cebf1c5476e7692925d1786df533885f98401b8ab16971', '[\"*\"]', NULL, NULL, '2022-10-14 10:49:19', '2022-10-14 10:49:19'),
(2, 'App\\Models\\User', 2, 'main', 'b8dc99102374d6fa0e5d639d986664a22e0bc9cbabe9fcf26dbc6c6bb6cdd2ad', '[\"*\"]', '2022-10-14 10:54:38', NULL, '2022-10-14 10:49:40', '2022-10-14 10:54:38'),
(3, 'App\\Models\\User', 2, 'main', 'aa939d34434437d8df159e1cfe43e80aaac628913964433fafc1a53a9480958c', '[\"*\"]', '2022-10-14 15:01:24', NULL, '2022-10-14 10:54:45', '2022-10-14 15:01:24'),
(4, 'App\\Models\\User', 2, 'main', '360085059cdc66ff2b490d2b936352e82baf772792c6716993fd76013b546de8', '[\"*\"]', '2022-10-20 10:53:52', NULL, '2022-10-20 10:14:48', '2022-10-20 10:53:52'),
(5, 'App\\Models\\User', 2, 'main', '0331bf907e418e255f143d01106518d14edb8b6add1c186ce67f765eb8e5d747', '[\"*\"]', '2022-10-20 13:04:50', NULL, '2022-10-20 11:06:25', '2022-10-20 13:04:50'),
(6, 'App\\Models\\User', 2, 'main', '8f037c173634ca5ec057404f9c33e5cae236fdcf28bb538af5cbe16bd0d17fab', '[\"*\"]', '2022-10-20 17:12:30', NULL, '2022-10-20 11:16:48', '2022-10-20 17:12:30'),
(7, 'App\\Models\\User', 2, 'main', 'd108f4863e3e094d26ebed04f7fa29ae172665d113024f81259dffc1b115ee8b', '[\"*\"]', '2022-10-20 17:51:37', NULL, '2022-10-20 13:04:58', '2022-10-20 17:51:37');

-- --------------------------------------------------------

--
-- Structure de la table `principal_activities`
--

CREATE TABLE `principal_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `principal_activities`
--

INSERT INTO `principal_activities` (`id`, `name`, `domain_id`, `created_at`, `updated_at`) VALUES
(1, 'Developpement de jeux', 1, '2022-10-04 13:10:41', '2022-10-14 17:07:45'),
(2, 'Type d\'activité 2', 1, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(3, 'Type d\'activité 3', 1, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(4, 'Type d\'activité 4', 2, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(5, 'Type d\'activité 5', 2, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(6, 'Type d\'activité 6', 2, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(7, 'Type d\'activité 7', 3, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(8, 'Type d\'activité 8', 3, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(9, 'Type d\'activité 9', 3, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(10, 'Type d\'activité 10', 4, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(11, 'Type d\'activité 11', 4, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(12, 'Type d\'activité 12', 4, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(13, 'Type d\'activité 13', 5, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(14, 'Type d\'activité 14', 5, '2022-10-04 13:10:41', '2022-10-04 13:10:41'),
(15, 'Type d\'activité 15', 5, '2022-10-04 13:10:41', '2022-10-04 13:10:41');

-- --------------------------------------------------------

--
-- Structure de la table `profile_users`
--

CREATE TABLE `profile_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ifu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rccm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_rccm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_day` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profile_users`
--

INSERT INTO `profile_users` (`id`, `ifu`, `path`, `rccm`, `path_rccm`, `born_day`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, '1234567891234', 'IFU/IFU_DU_1664893392.RP_612_AdministratorGuide_en.pdf', 'RB/RC/2002', 'RCCM/RCCM_DU_1664893392.RP_612_AdministratorGuide_en.pdf', '2022-09-28', 2, NULL, '2022-10-04 13:23:12', '2022-10-04 13:23:12'),
(3, '4545485778787', 'IFU/IFU_DU_1664967674.RCCM_DU_1663939119.RP_612_AdministratorGuide_en.pdf', 'sdzszsdzd', 'RCCM/RCCM_DU_1664967674.RCCM_DU_1663939119.RP_612_AdministratorGuide_en.pdf', '2122-05-05', 3, NULL, '2022-10-05 10:01:14', '2022-10-05 10:01:14');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `user_id`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super-Admin', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(2, 'cabinet', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(3, 'enterprise', NULL, 'web', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(4, 'Ressource', NULL, 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `r_a_details`
--

CREATE TABLE `r_a_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `type` enum('income','expense') COLLATE utf8mb4_unicode_ci NOT NULL,
  `accounting_result_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tax_bases`
--

CREATE TABLE `tax_bases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tax_centers`
--

CREATE TABLE `tax_centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tax_centers`
--

INSERT INTO `tax_centers` (`id`, `name`, `address`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Parakou', '9CF8+FRH Ecole, Rue 218, Cotonou', 'parakou', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(2, 'Lokossa', '9CF8+FRG Ecole, Rue 218, Cotonou', 'lokossa', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(3, 'Cotonou', '9CF8+FGH Ecole, Rue 218, Cotonou', 'cotonou', '2022-10-04 13:10:40', '2022-10-04 13:10:40');

-- --------------------------------------------------------

--
-- Structure de la table `type_companies`
--

CREATE TABLE `type_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_companies`
--

INSERT INTO `type_companies` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(2, 'Personne morales', '813723', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(3, 'Etablissement stable', '395617', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(4, 'Personne physique', '504536', '2022-10-04 13:10:40', '2022-10-04 13:10:40');

-- --------------------------------------------------------

--
-- Structure de la table `type_company_type_impot`
--

CREATE TABLE `type_company_type_impot` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_company_id` bigint(20) UNSIGNED NOT NULL,
  `type_impot_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_impots`
--

CREATE TABLE `type_impots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_impots`
--

INSERT INTO `type_impots` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'IS', 'is', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(2, 'IBA', 'iba', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(3, 'IRCM sur charges non déductible', 'ircm_sur_charges_non_deductible', '2022-10-04 13:10:40', '2022-10-04 13:10:40'),
(4, 'IRCM sur résulats net comptable', 'ircm_sur_resulats_net_comptable', '2022-10-04 13:10:40', '2022-10-04 13:10:40');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `username`, `code`, `email`, `email_verified_at`, `password`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'User', 'admintec', NULL, 'test@example.com', '2022-10-04 13:10:42', '$2y$10$Is0AHNg89yJUYA/0jH9hUeJ7wGOC4tM9o8Nx9uAK./3XITNZB034q', NULL, 'jOpf2LNVwaOVsRDWBayw5ipuLRwXtqe2wnsrqGwsxnRI2NmcWI4yUXu2NRBq', '2022-10-04 13:10:42', '2022-10-04 13:10:42'),
(2, 'DANVI', 'Mauril', 'heislarssonkhalifa', NULL, 'mauril@gmail.com', NULL, '$2y$10$bYml2AC1FO.v3KB7lB302er8/CFqMyXgqgBYyEcvLyBLFJdB4B39S', NULL, NULL, '2022-10-04 13:13:18', '2022-10-04 13:13:18'),
(3, 'DANVIA', 'Mario', 'ff', NULL, 'pierre@gmail.com', NULL, '$2y$10$GEQKfkI0GCPTax83IChxzuzyT0UcDxrLm8qWr2wVvCCkiAKNvDEiO', NULL, NULL, '2022-10-05 09:56:21', '2022-10-05 09:56:21'),
(4, 'PAPARAZZI', 'Olga', 'paparazziolga672', NULL, 'mariano@gmail.com', NULL, '$2y$10$mm2mJ3sMs/rXLsTbWUiDB.9Kf2h1bjOJrX2OS5LFOyM5SYl77IdXG', NULL, NULL, '2022-10-05 13:40:36', '2022-10-05 13:40:36'),
(7, 'AGBETUS', 'Agbe', 'agbetusagbe321', NULL, 'age@gmail.com', NULL, '$2y$10$0HfheKUUCleQZbq1dzxRiekGbJa7c6ep0FVxNBHhNYEfHzYC2Q9cm', 2, NULL, '2022-10-05 16:17:18', '2022-10-05 16:17:18'),
(8, '1', '2', '12751', NULL, '1@gmail.com', NULL, '$2y$10$ewKUc2zx8v34D5pl3ncEk.20vU5O6tJJBeE3uJ9eW1ySLcS2UYYZ2', NULL, NULL, '2022-10-20 07:47:24', '2022-10-20 07:47:24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accounting_results`
--
ALTER TABLE `accounting_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounting_results_company_id_foreign` (`company_id`);

--
-- Index pour la table `bases`
--
ALTER TABLE `bases`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bases_name_unique` (`name`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_code_unique` (`code`);

--
-- Index pour la table `category_company`
--
ALTER TABLE `category_company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_company_category_id_foreign` (`category_id`),
  ADD KEY `category_company_company_id_foreign` (`company_id`);

--
-- Index pour la table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_tax_center_id_foreign` (`tax_center_id`),
  ADD KEY `companies_type_company_id_foreign` (`type_company_id`),
  ADD KEY `companies_domain_id_foreign` (`domain_id`),
  ADD KEY `companies_user_id_foreign` (`user_id`),
  ADD KEY `companies_company_id_foreign` (`company_id`);

--
-- Index pour la table `company_detail_type`
--
ALTER TABLE `company_detail_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_detail_type_company_id_foreign` (`company_id`),
  ADD KEY `company_detail_type_detail_type_id_foreign` (`detail_type_id`);

--
-- Index pour la table `company_user`
--
ALTER TABLE `company_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_user_company_id_foreign` (`company_id`),
  ADD KEY `company_user_user_id_foreign` (`user_id`);

--
-- Index pour la table `detail_types`
--
ALTER TABLE `detail_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `detail_types_name_unique` (`name`),
  ADD UNIQUE KEY `detail_types_code_unique` (`code`),
  ADD KEY `detail_types_category_id_foreign` (`category_id`),
  ADD KEY `detail_types_base_id_foreign` (`base_id`),
  ADD KEY `detail_types_type_impot_id_foreign` (`type_impot_id`);

--
-- Index pour la table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `domains_name_unique` (`name`),
  ADD UNIQUE KEY `domains_code_unique` (`code`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `income_expenses`
--
ALTER TABLE `income_expenses`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `i_m_calculations`
--
ALTER TABLE `i_m_calculations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `i_m_calculations_name_unique` (`name`);

--
-- Index pour la table `i_m_calculation_details`
--
ALTER TABLE `i_m_calculation_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `i_m_calculation_details_code_unique` (`code`),
  ADD KEY `i_m_calculation_details_company_id_foreign` (`company_id`);

--
-- Index pour la table `i_m_calculs`
--
ALTER TABLE `i_m_calculs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `i_m_calculs_company_id_foreign` (`company_id`);

--
-- Index pour la table `i_m_items`
--
ALTER TABLE `i_m_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `i_m_items_name_unique` (`name`),
  ADD KEY `i_m_items_base_id_foreign` (`base_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `packs_name_unique` (`name`);

--
-- Index pour la table `pack_users`
--
ALTER TABLE `pack_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pack_users_user_id_foreign` (`user_id`),
  ADD KEY `pack_users_pack_id_foreign` (`pack_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`),
  ADD KEY `permissions_user_id_foreign` (`user_id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `principal_activities`
--
ALTER TABLE `principal_activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `principal_activities_domain_id_foreign` (`domain_id`);

--
-- Index pour la table `profile_users`
--
ALTER TABLE `profile_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_users_user_id_foreign` (`user_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`),
  ADD KEY `roles_user_id_foreign` (`user_id`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `r_a_details`
--
ALTER TABLE `r_a_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `r_a_details_code_unique` (`code`),
  ADD KEY `r_a_details_accounting_result_id_foreign` (`accounting_result_id`),
  ADD KEY `r_a_details_company_id_foreign` (`company_id`);

--
-- Index pour la table `tax_bases`
--
ALTER TABLE `tax_bases`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tax_centers`
--
ALTER TABLE `tax_centers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tax_centers_code_unique` (`code`);

--
-- Index pour la table `type_companies`
--
ALTER TABLE `type_companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_companies_name_unique` (`name`),
  ADD UNIQUE KEY `type_companies_code_unique` (`code`);

--
-- Index pour la table `type_company_type_impot`
--
ALTER TABLE `type_company_type_impot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_company_type_impot_type_company_id_foreign` (`type_company_id`),
  ADD KEY `type_company_type_impot_type_impot_id_foreign` (`type_impot_id`);

--
-- Index pour la table `type_impots`
--
ALTER TABLE `type_impots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_impots_name_unique` (`name`),
  ADD UNIQUE KEY `type_impots_code_unique` (`code`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accounting_results`
--
ALTER TABLE `accounting_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `bases`
--
ALTER TABLE `bases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `category_company`
--
ALTER TABLE `category_company`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `company_detail_type`
--
ALTER TABLE `company_detail_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `company_user`
--
ALTER TABLE `company_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `detail_types`
--
ALTER TABLE `detail_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `income_expenses`
--
ALTER TABLE `income_expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `i_m_calculations`
--
ALTER TABLE `i_m_calculations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `i_m_calculation_details`
--
ALTER TABLE `i_m_calculation_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `i_m_calculs`
--
ALTER TABLE `i_m_calculs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `i_m_items`
--
ALTER TABLE `i_m_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `packs`
--
ALTER TABLE `packs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `pack_users`
--
ALTER TABLE `pack_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `principal_activities`
--
ALTER TABLE `principal_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `profile_users`
--
ALTER TABLE `profile_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `r_a_details`
--
ALTER TABLE `r_a_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tax_bases`
--
ALTER TABLE `tax_bases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tax_centers`
--
ALTER TABLE `tax_centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `type_companies`
--
ALTER TABLE `type_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_company_type_impot`
--
ALTER TABLE `type_company_type_impot`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_impots`
--
ALTER TABLE `type_impots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accounting_results`
--
ALTER TABLE `accounting_results`
  ADD CONSTRAINT `accounting_results_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `category_company`
--
ALTER TABLE `category_company`
  ADD CONSTRAINT `category_company_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_company_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `companies_domain_id_foreign` FOREIGN KEY (`domain_id`) REFERENCES `domains` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `companies_tax_center_id_foreign` FOREIGN KEY (`tax_center_id`) REFERENCES `tax_centers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `companies_type_company_id_foreign` FOREIGN KEY (`type_company_id`) REFERENCES `type_companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `company_detail_type`
--
ALTER TABLE `company_detail_type`
  ADD CONSTRAINT `company_detail_type_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_detail_type_detail_type_id_foreign` FOREIGN KEY (`detail_type_id`) REFERENCES `detail_types` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `company_user`
--
ALTER TABLE `company_user`
  ADD CONSTRAINT `company_user_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `company_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `detail_types`
--
ALTER TABLE `detail_types`
  ADD CONSTRAINT `detail_types_base_id_foreign` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_types_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_types_type_impot_id_foreign` FOREIGN KEY (`type_impot_id`) REFERENCES `type_impots` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `i_m_calculation_details`
--
ALTER TABLE `i_m_calculation_details`
  ADD CONSTRAINT `i_m_calculation_details_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `i_m_calculs`
--
ALTER TABLE `i_m_calculs`
  ADD CONSTRAINT `i_m_calculs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `i_m_items`
--
ALTER TABLE `i_m_items`
  ADD CONSTRAINT `i_m_items_base_id_foreign` FOREIGN KEY (`base_id`) REFERENCES `bases` (`id`);

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `pack_users`
--
ALTER TABLE `pack_users`
  ADD CONSTRAINT `pack_users_pack_id_foreign` FOREIGN KEY (`pack_id`) REFERENCES `packs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pack_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `principal_activities`
--
ALTER TABLE `principal_activities`
  ADD CONSTRAINT `principal_activities_domain_id_foreign` FOREIGN KEY (`domain_id`) REFERENCES `domains` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `profile_users`
--
ALTER TABLE `profile_users`
  ADD CONSTRAINT `profile_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `r_a_details`
--
ALTER TABLE `r_a_details`
  ADD CONSTRAINT `r_a_details_accounting_result_id_foreign` FOREIGN KEY (`accounting_result_id`) REFERENCES `accounting_results` (`id`),
  ADD CONSTRAINT `r_a_details_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `type_company_type_impot`
--
ALTER TABLE `type_company_type_impot`
  ADD CONSTRAINT `type_company_type_impot_type_company_id_foreign` FOREIGN KEY (`type_company_id`) REFERENCES `type_companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `type_company_type_impot_type_impot_id_foreign` FOREIGN KEY (`type_impot_id`) REFERENCES `type_impots` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
