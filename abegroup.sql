-- MySQL dump 10.13  Distrib 8.0.46, for Linux (x86_64)
--
-- Host: localhost    Database: abegroup
-- ------------------------------------------------------
-- Server version	8.0.46-0ubuntu0.24.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `about_sections`
--

DROP TABLE IF EXISTS `about_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `about_sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `about_sections`
--

LOCK TABLES `about_sections` WRITE;
/*!40000 ALTER TABLE `about_sections` DISABLE KEYS */;
INSERT INTO `about_sections` VALUES (2,'xaa','sas','sasas','about/467OrwvwnjmBmGn0GsnV0xG3dwMD6HNdL8WbA1oc.jpg',1,0,'2026-04-24 05:12:05','2026-04-24 05:12:05'),(3,'TENTANG KAMI','Tentang Kami','Didirikan dengan semangat membangun ekosistem bisnis yang kuat, <strong>ABE Group</strong> hadir sebagai entitas induk yang mengintegrasikan berbagai sektor usaha untuk menciptakan sinergi yang optimal.','assets/img/login-office.jpeg',1,1,'2026-05-06 14:56:16','2026-05-06 14:56:16');
/*!40000 ALTER TABLE `about_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abouts`
--

LOCK TABLES `abouts` WRITE;
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` VALUES (1,'ABE Group','-','about/TEcCMTuzW7OmTvoWVzPk1Lq6JPPcVPF9hVP1kt6O.png','ABE Group adalah perusahaan teknologi yang berdiri sejak tahun 2023 dan berkomitmen untuk menghadirkan solusi digital yang inovatif guna mendukung transformasi bisnis di era modern. Dengan didukung oleh tim profesional yang berpengalaman, kami menghadirkan layanan dan teknologi yang membantu perusahaan meningkatkan efisiensi, produktivitas, serta daya saing secara berkelanjutan.\r\n\r\nKami meyakini bahwa teknologi bukan sekadar alat, melainkan fondasi bagi pertumbuhan dan kemajuan bisnis. Oleh karena itu, kami mengedepankan pendekatan yang berfokus pada kebutuhan pelanggan, dipadukan dengan pemahaman yang mendalam terhadap berbagai tantangan industri. Hasilnya, kami mampu menghadirkan solusi yang inovatif, praktis, andal, serta memberikan nilai tambah nyata bagi setiap mitra dan pelanggan.','2026-04-24 15:48:11','2026-06-29 10:19:31');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (2,'erreeere','qwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrereqwertyutrere','4131-12-31','Depok','activities/1BNv8BjHVV0bP1DfNRNcsv21ib2EemD1aQiCVfcn.jpg',1,'2026-04-24 05:17:03','2026-04-24 05:17:03');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (3,'Main Hero','MENGINTEGRASIKAN TEKNOLOGI DAN INOVASI UNTUK MENDORONG PERTUMBUHAN BERKELANJUTAN','banners/oFhZrQsUnfFmMH0RWTgcGqM0LaUXqiWuvOQlHSDl.mp4',1,0,'2026-05-06 14:56:16','2026-05-06 15:28:52');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benefits`
--

DROP TABLE IF EXISTS `benefits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `benefits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benefits`
--

LOCK TABLES `benefits` WRITE;
/*!40000 ALTER TABLE `benefits` DISABLE KEYS */;
INSERT INTO `benefits` VALUES (12,'Jenjang Karir Terstruktur','Kami menyediakan jalur karir yang jelas dan program pelatihan internal bersertifikat untuk membantu Anda tumbuh menjadi pemimpin masa depan di industri manufaktur.','benefits/wxGh5fBrNfRAFfTmoAC8kSD8IgmyuTTFoFJMgTHK.png',1,'active','2026-04-24 15:33:09','2026-04-27 06:49:49'),(13,'Pengembangan Skill Berkelanjutan','Kami memberikan kesempatan bagi karyawan untuk terus berkembang melalui pelatihan, workshop, dan pembelajaran berkelanjutan agar tetap relevan dengan kebutuhan industri.','benefits/skill_development.png',2,'active','2026-04-24 15:33:09','2026-04-24 15:33:09'),(14,'Budaya Kerja Kolaboratif','Kami membangun lingkungan kerja yang mendorong kerja sama tim, komunikasi terbuka, dan saling menghargai untuk mencapai tujuan bersama secara efektif.','benefits/work_culture.png',3,'active','2026-04-24 15:33:09','2026-04-24 15:33:09'),(15,'Asuransi Kesehatan Komprehensif','Perlindungan kesehatan lengkap mencakup rawat jalan, rawat inap, dan tunjangan kacamata bagi karyawan dan keluarga inti.','benefits/health_insurance.png',4,'active','2026-04-24 15:33:09','2026-04-24 15:33:09'),(16,'Lingkungan Kerja Aman & Higienis','Memprioritaskan keselamatan dengan standar K3 (HSE) internasional dan fasilitas kerja yang modern serta bersih demi kenyamanan Anda di area operasional.','benefits/safe_environment.png',5,'active','2026-04-24 15:33:09','2026-04-24 15:33:09');
/*!40000 ALTER TABLE `benefits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business_units`
--

DROP TABLE IF EXISTS `business_units`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `business_units` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `business_units_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_units`
--

LOCK TABLES `business_units` WRITE;
/*!40000 ALTER TABLE `business_units` DISABLE KEYS */;
/*!40000 ALTER TABLE `business_units` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `businesses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ecomerce_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `businesses_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `businesses`
--

LOCK TABLES `businesses` WRITE;
/*!40000 ALTER TABLE `businesses` DISABLE KEYS */;
INSERT INTO `businesses` VALUES (11,'ayobelanja.co.id','E-Commerce Platform','ayobelanjacoid','businesses/9JMgbGwYuHjEEZ9Lal9F974kF98eVb395xeoUp0X.png','businesses/logos/4N15iFLrTLV5yS0umaCiiLiE2YdqsNbPmdtKO21m.png','https://ayobelanja.co.id/',NULL,'Platform e-commerce yang mengintegrasikan ekosistem belanja digital dengan kemudahan akses.',1,3,'2026-05-06 14:55:33','2026-05-07 03:29:37'),(12,'ARO BASKARA ESA','Engineering & Services','aro-baskara-esa','businesses/1QgoWyTpygzNuxzZroQ5aoTggYnhhw6lbdQUp4xJ.png','businesses/logos/WIsXhdVwIZIkWhGgzwIdpdU2Y6HOVhrX1A4kGraJ.png','https://arobaskaraesa.com/',NULL,'PT Aro Baskara Esa merupakan perusahaan yang bergerak di bidang distribusi alat kesehatan dan layanan teknik spesialis.',1,1,'2026-05-06 14:56:16','2026-05-07 06:36:41'),(13,'ABE INTEKNO INDONESIA','Technology & Innovation','abe-intekno-indonesia','businesses/jHce0Sx6Um8d37Ye6lBPcA4CNQwZVnCSXYVff3xC.png','businesses/logos/rVManApeFAgaslYCkYAGESNsBgV6H0pmvQ0QXp1H.png',NULL,NULL,'PT. ABE INTEKNO INDONESIA merupakan perusahaan yang bergerak di bidang teknologi medis dan solusi alat kesehatan yang berfokus pada pengembangan serta penyediaan produk dan layanan berbasis teknologi untuk mendukung kebutuhan industri kesehatan modern. Perusahaan ini hadir sebagai mitra dalam menghadirkan solusi inovatif yang membantu meningkatkan kualitas pelayanan kesehatan, efisiensi operasional, serta pengelolaan sistem medis yang lebih terintegrasi dan terpercaya.\r\nDengan memanfaatkan perkembangan teknologi digital dan perangkat medis modern, PT. ABE INTEKNO INDONESIA menyediakan berbagai solusi yang dapat diterapkan pada rumah sakit, klinik, laboratorium, institusi pendidikan kesehatan, maupun sektor industri lainnya yang membutuhkan dukungan teknologi medis. Tidak hanya berfokus pada penyediaan perangkat, perusahaan juga mendukung implementasi sistem yang mampu membantu proses monitoring, pengelolaan data, hingga optimalisasi layanan kesehatan secara menyeluruh.\r\nPT. ABE INTEKNO INDONESIA berkomitmen untuk terus menghadirkan inovasi yang mengikuti perkembangan teknologi dan kebutuhan dunia kesehatan. Melalui pendekatan profesional, kualitas layanan yang baik, serta dukungan tim yang kompeten, perusahaan berupaya menjadi partner terpercaya dalam mendukung transformasi digital di bidang kesehatan dan teknologi medis di Indonesia.',1,2,'2026-05-06 14:56:16','2026-05-07 11:07:27');
/*!40000 ALTER TABLE `businesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `careers`
--

DROP TABLE IF EXISTS `careers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `careers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `careers`
--

LOCK TABLES `careers` WRITE;
/*!40000 ALTER TABLE `careers` DISABLE KEYS */;
/*!40000 ALTER TABLE `careers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `companies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `website_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'Acer','https://logo.clearbit.com/acer.com','acer',NULL,NULL,1,1,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(2,'Panasonic','https://logo.clearbit.com/panasonic.com','panasonic',NULL,NULL,1,2,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(3,'HP','https://logo.clearbit.com/hp.com','hp',NULL,NULL,1,3,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(4,'APC','https://logo.clearbit.com/apc.com','apc',NULL,NULL,1,4,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(5,'Dell','https://logo.clearbit.com/dell.com','dell',NULL,NULL,1,5,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(6,'Microsoft','https://logo.clearbit.com/microsoft.com','microsoft',NULL,NULL,1,6,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(7,'Google','https://logo.clearbit.com/google.com','google',NULL,NULL,1,7,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(8,'Amazon','https://logo.clearbit.com/amazon.com','amazon',NULL,NULL,1,8,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(9,'Cisco','https://logo.clearbit.com/cisco.com','cisco',NULL,NULL,1,9,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(10,'IBM','https://logo.clearbit.com/ibm.com','ibm',NULL,NULL,1,10,'2026-05-06 14:56:16','2026-05-06 14:56:16');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_highlights`
--

DROP TABLE IF EXISTS `company_highlights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_highlights` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `badge` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_top` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_highlights`
--

LOCK TABLES `company_highlights` WRITE;
/*!40000 ALTER TABLE `company_highlights` DISABLE KEYS */;
INSERT INTO `company_highlights` VALUES (3,'Portofolio Kuat','Mengakselerasi Pertumbuhan Bisnis Anda Bersama ABE Group','Kami hadir sebagai mitra strategis yang memberikan solusi bisnis terintegrasi di berbagai sektor industri. Dengan pengalaman puluhan tahun dan tim profesional yang solid, ABE Group berkomitmen menghadirkan inovasi dan kualitas terbaik untuk mendukung kesuksesan bisnis Anda.\r\n\r\nDari konstruksi hingga teknologi digital, setiap unit bisnis kami dirancang untuk saling melengkapi dan menciptakan ekosistem yang kuat, memastikan nilai tambah maksimal bagi setiap klien dan mitra.','highlights/JEy7Y9Uc1zHPfEP3cfiGk4PrpgA4u8xu0FAfYwMc.jpg','2026-04-24 04:19:04','2026-04-24 04:19:04');
/*!40000 ALTER TABLE `company_highlights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_infos`
--

DROP TABLE IF EXISTS `company_infos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_infos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operational_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_embed` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_infos`
--

LOCK TABLES `company_infos` WRITE;
/*!40000 ALTER TABLE `company_infos` DISABLE KEYS */;
INSERT INTO `company_infos` VALUES (1,'Jl. TM. Slamet Riyadi Raya No. 9 RT.1 RW. 4 Kb. Manggis, Kec. Matraman, Daerah Khusus Ibukota Jakarta 13150','(021) 38835187','+62 822-8888-6009','komersial@arobaskaraesa.com',NULL,'Senin - Jumat: 08.00 - 17.00 WIB','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m12!1m3!1d3966.452674395641!2d106.8558455!3d-6.2038595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f46b4129a007%3A0xc34a5d89d3a778e7!2sJl.%20Slamet%20Riyadi%20Raya%20No.9%2C%20RT.1%2FRW.4%2C%20Kb.%20Manggis%2C%20Kec.%20Matraman%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013150!5e0!3m2!1sid!2sid!4v1714292000000!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>',1,'2026-04-28 08:30:06','2026-06-29 10:23:54');
/*!40000 ALTER TABLE `company_infos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_values`
--

DROP TABLE IF EXISTS `company_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `company_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_values`
--

LOCK TABLES `company_values` WRITE;
/*!40000 ALTER TABLE `company_values` DISABLE KEYS */;
INSERT INTO `company_values` VALUES (1,'Integritas','Berkomitmen pada kejujuran dan transparansi dalam setiap tindakan','2026-04-24 15:46:47','2026-04-24 15:46:47'),(2,'Inovasi','Mengembangkan solusi kreatif untuk menghadapi tantangan bisnis','2026-04-24 15:47:00','2026-04-24 15:47:00'),(3,'Kolaborasi','Membangun kemitraan yang kuat untuk pertumbuhan bersama','2026-04-24 15:47:11','2026-04-24 15:47:11'),(4,'Keunggulan','Berkomitmen memberikan kualitas terbaik dalam setiap layanan','2026-04-24 15:47:23','2026-04-24 15:47:23');
/*!40000 ALTER TABLE `company_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_messages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_messages`
--

LOCK TABLES `contact_messages` WRITE;
/*!40000 ALTER TABLE `contact_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Feby Revalia Manalu','manalufeby020205@gmail.com','+6282364789616','Saran','Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo Umalo',1,'2026-04-24 04:54:48','2026-04-24 05:25:05'),(2,'Feby Revalia Manalu','manalufeby020205@gmail.com','+6282364789616','auwdyewuue','auwdyewuueauwdyewuueauwdyewuueauwdyewuueauwdyewuueauwdyewuueauwdyewuueauwdyewuueauwdyewuueauwdyewuue',1,'2026-04-27 03:39:03','2026-05-19 09:29:19');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `core_values`
--

DROP TABLE IF EXISTS `core_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `core_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `core_values`
--

LOCK TABLES `core_values` WRITE;
/*!40000 ALTER TABLE `core_values` DISABLE KEYS */;
INSERT INTO `core_values` VALUES (1,'Visi Strategis','Penciptaan nilai jangka panjang melalui investasi strategis dan keunggulan operasional','fas fa-bullseye',0,1,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(2,'Inovasi Utama','Mendorong transformasi di berbagai industri dengan solusi terdepan','fas fa-bolt',0,1,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(3,'Integritas & Kepercayaan','Membangun hubungan yang langgeng melalui transparansi dan praktik etis','fas fa-shield-halved',0,1,'2026-05-06 14:56:16','2026-05-06 14:56:16'),(4,'Pertumbuhan Berkelanjutan','Praktik bisnis yang bertanggung jawab untuk dampak lingkungan dan sosial yang positif','fas fa-lightbulb',0,1,'2026-05-06 14:56:16','2026-05-06 14:56:16');
/*!40000 ALTER TABLE `core_values` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_stats`
--

DROP TABLE IF EXISTS `home_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `home_stats` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(15,2) NOT NULL,
  `suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_stats`
--

LOCK TABLES `home_stats` WRITE;
/*!40000 ALTER TABLE `home_stats` DISABLE KEYS */;
INSERT INTO `home_stats` VALUES (1,'Pendapatan Tahunan',115.00,'M','<svg class=\"w-5 h-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\"><path d=\"M10.75 10.5h5.5a.75.75 0 000-1.5h-5.5a.75.75 0 000 1.5z\"/><path fill-rule=\"evenodd\" d=\"M4 3.5A1.5 1.5 0 015.5 2h9A1.5 1.5 0 0116 3.5v13A1.5 1.5 0 0114.5 18h-9A1.5 1.5 0 014 16.5v-13zM5.5 3.5v13h9v-13h-9z\" clip-rule=\"evenodd\"/></svg>',1,1,'2026-04-24 15:33:09','2026-04-24 15:33:09'),(2,'Karyawan Global',450.00,'+','<svg class=\"w-5 h-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\"><path d=\"M13 7a3 3 0 11-6 0 3 3 0 016 0z\"/><path fill-rule=\"evenodd\" d=\"M10 11a6 6 0 00-6 6 .75.75 0 001.5 0 4.5 4.5 0 019 0 .75.75 0 001.5 0 6 6 0 00-6-6z\" clip-rule=\"evenodd\"/></svg>',2,1,'2026-04-24 15:33:09','2026-04-24 15:33:09'),(3,'Kota',10.00,'+','<svg class=\"w-5 h-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\"><path fill-rule=\"evenodd\" d=\"M9.69 18.933a.75.75 0 01-.638-.352l-3.84-6.144a6.5 6.5 0 1110.976 0l-3.84 6.144a.75.75 0 01-.638.352zm.31-8.433a2 2 0 100-4 2 2 0 000 4z\" clip-rule=\"evenodd\"/></svg>',3,1,'2026-04-24 15:33:09','2026-04-24 15:33:09'),(4,'Mitra',20.00,'+','<svg class=\"w-5 h-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\"><path fill-rule=\"evenodd\" d=\"M6 5.5A2.5 2.5 0 118.5 8 2.5 2.5 0 016 5.5zM11.5 11a3 3 0 00-2.994 2.824L8.5 14v2.25a.75.75 0 001.5 0V14a1.5 1.5 0 011.356-1.493L11.5 12.5h2a1.5 1.5 0 011.493 1.356L15 14v2.25a.75.75 0 001.5 0V14a3 3 0 00-3-3h-2z\" clip-rule=\"evenodd\"/><path d=\"M12 5.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z\"/></svg>',4,1,'2026-04-24 15:33:09','2026-04-24 15:33:09');
/*!40000 ALTER TABLE `home_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_applications` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `job_vacancy_id` bigint unsigned NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_of_experience` int NOT NULL,
  `previous_job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_letter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `resume_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','reviewed','accepted','rejected') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_applications_job_vacancy_id_foreign` (`job_vacancy_id`),
  CONSTRAINT `job_applications_job_vacancy_id_foreign` FOREIGN KEY (`job_vacancy_id`) REFERENCES `job_vacancies` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_applications`
--

LOCK TABLES `job_applications` WRITE;
/*!40000 ALTER TABLE `job_applications` DISABLE KEYS */;
INSERT INTO `job_applications` VALUES (4,11,'Febrina Elisabeth Sihombing','admin@mail.com','081236823892','D3',0,'fef','https://gemini.google.com/app/90eb27973a296465?hl=id','dsds','resumes/1777262280_Febrina_Elisabeth_Sihombing_CV.pdf','pending','2026-04-27 03:58:00','2026-04-27 03:58:00'),(5,11,'Feby Revalia Manalu','manalufeby020205@gmail.com','082364789616','D3',1,'Devp','https://www.linkedin.com/jobs/view/4252706762','ertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdwsertyujtrgefwdws','resumes/1777262342_Feby_Revalia_Manalu_CV.pdf','pending','2026-04-27 03:59:02','2026-04-27 03:59:02'),(7,12,'Febrina Elisabeth Sihombing','febrinasiho02@gmail.com','081236823892','SMA/SMK',0,'ui ux','https://gemini.google.com/app/90eb27973a296465?hl=id','dsda','resumes/1777271749_Febrina_Elisabeth_Sihombing_CV.pdf','rejected','2026-04-27 06:35:49','2026-04-27 06:37:39');
/*!40000 ALTER TABLE `job_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_categories`
--

DROP TABLE IF EXISTS `job_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_categories`
--

LOCK TABLES `job_categories` WRITE;
/*!40000 ALTER TABLE `job_categories` DISABLE KEYS */;
INSERT INTO `job_categories` VALUES (11,'IT','2026-04-24 15:33:09','2026-04-24 15:33:09'),(12,'Finance & Accounting','2026-04-24 15:33:09','2026-04-24 15:33:09'),(13,'Production','2026-04-24 15:33:09','2026-04-24 15:33:09'),(14,'Sales & Marketing','2026-04-24 15:33:09','2026-04-24 15:33:09');
/*!40000 ALTER TABLE `job_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_vacancies`
--

DROP TABLE IF EXISTS `job_vacancies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_vacancies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('full_time','part_time','internship','freelance') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` bigint DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibility` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category_id` bigint unsigned NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_vacancies_job_category_id_foreign` (`job_category_id`),
  CONSTRAINT `job_vacancies_job_category_id_foreign` FOREIGN KEY (`job_category_id`) REFERENCES `job_categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_vacancies`
--

LOCK TABLES `job_vacancies` WRITE;
/*!40000 ALTER TABLE `job_vacancies` DISABLE KEYS */;
INSERT INTO `job_vacancies` VALUES (11,'IT Support & ERP Administrator','full_time','1-2 Tahun',NULL,'Menjamin seluruh sistem informasi perusahaan, termasuk database produk mitra dan sistem stok, berjalan tanpa kendala.','Memberikan dukungan teknis (hardware/software) kepada karyawan.\r\nMengelola hak akses pengguna pada sistem ERP perusahaan.\r\nMelakukan backup data secara berkala.','S1 Teknik Informatika / Sistem Informasi.\r\nPaham mengenai manajemen database SQL.\r\nMemiliki kemampuan problem-solving yang baik.','Remote / Hybrid',11,'inactive','2026-04-24 15:33:09','2026-06-29 09:21:13'),(12,'Staff Akuntansi Biaya (Cost Accounting)','full_time','1-2 Tahun',NULL,'Mengelola laporan biaya produksi dan memantau arus kas yang berkaitan dengan pembelian barang dari mitra.','Menghitung Harga Pokok Produksi (HPP) secara akurat.\r\nMelakukan rekonsiliasi data stok gudang dengan laporan keuangan.\r\nMengelola faktur pajak dari supplier mitra.','S1 Akuntansi dengan IPK minimal 3.00.\r\nMenguasai software akuntansi (SAP/Odoo) dan Excel (Vlookup/Pivot).\r\nDetail-oriented dan jujur.','Head Office',12,'inactive','2026-04-24 15:33:09','2026-06-29 09:21:33'),(13,'Teknisi Mesin Produksi','full_time','Fresh Graduate / 1 Tahun',NULL,'Melakukan perawatan rutin dan perbaikan pada mesin-mesin manufaktur untuk memastikan kelancaran operasional pabrik.','Melaksanakan preventive maintenance sesuai jadwal.\r\nMenangani troubleshooting pada sistem mekanik dan elektrik.\r\nMelaporkan penggunaan suku cadang kepada supervisor.','Lulusan SMK Teknik Mesin / Teknik Elektro.\r\nPaham mengenai sistem hidrolik and pneumatik.\r\nBersedia bekerja dalam sistem shift.','Kawasan Industri, Bekasi',13,'inactive','2026-04-24 15:33:09','2026-06-29 09:21:47'),(14,'Sales B2B Corporate','full_time','2-3 Tahun',NULL,'Bertanggung jawab dalam mencari klien korporasi baru dan memasarkan produk mesin industri milik perusahaan serta produk sparepart dari mitra resmi.','Mencapai target penjualan bulanan yang telah ditetapkan.\r\nMembangun hubungan baik dengan mitra distributor.\r\nMelakukan presentasi produk kepada calon klien industri.','Minimal D3/S1 semua jurusan (diutamakan Teknik atau Bisnis).\r\nMemiliki kemampuan negosiasi yang kuat.\r\nMampu mengendarai mobil dan memiliki SIM A.','Jakarta / On-site',14,'inactive','2026-04-24 15:33:09','2026-06-29 09:22:17');
/*!40000 ALTER TABLE `job_vacancies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_04_21_050411_create_banners_table',1),(5,'2026_04_21_050413_create_companies_table',1),(6,'2026_04_21_050414_create_activities_table',1),(7,'2026_04_21_050416_create_careers_table',1),(8,'2026_04_21_050417_create_about_sections_table',1),(9,'2026_04_22_000001_add_columns_to_banners_table',1),(10,'2026_04_22_000002_add_columns_to_activities_table',1),(11,'2026_04_22_000003_add_columns_to_about_sections_table',1),(12,'2026_04_22_000004_add_columns_to_companies_table',1),(13,'2026_04_22_000005_add_columns_to_careers_table',1),(14,'2026_04_22_092436_add_logo_to_companies_table',1),(15,'2026_04_22_092740_create_partners_table',1),(16,'2026_04_22_100338_create_company_highlights_table',1),(17,'2026_04_22_100948_create_news_table',1),(18,'2026_04_22_101814_create_business_units_table',1),(19,'2026_04_22_102459_create_timelines_table',1),(20,'2026_04_23_080014_add_category_to_news_table',2),(21,'2026_04_23_024010_create_testimonials_table',3),(22,'2026_04_23_051314_create_business_table',3),(23,'2026_04_23_051314_create_business_table_update',4),(24,'2026_03_25_042836_create_job_categories_table',5),(25,'2026_03_25_042916_create_job_vacancies_table',5),(26,'2026_03_25_080637_create_benefits_table',5),(27,'2026_03_26_035852_create_job_applications_table',5),(28,'2026_04_23_093845_create_contact_messages_table',5),(29,'2026_04_23_124007_create_contacts_table',5),(30,'2026_04_24_020207_add_order_to_banners_table',6),(31,'2026_04_24_093723_create_home_stats_table',7),(32,'2026_04_24_093742_create_abouts_table',7),(33,'2026_04_24_112241_create_core_values_table',7),(34,'2026_04_24_122827_create_sustainability_commitments_table',7),(35,'2026_04_24_143901_create_visi_misis_table',7),(36,'2026_04_24_145358_create_company_values_table',7),(37,'2026_04_27_043017_create_company_infos_table',8),(38,'2026_05_06_103000_create_about_sections_table',1),(39,'2026_05_06_151735_add_logo_to_company_infos_table',1),(40,'2026_05_06_153310_add_logo_to_businesses_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'berita',
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (19,'ABE Group Donasikan 1 Miliar untuk Korban Bencana Alam','abe-group-donasikan-1-miliar-untuk-korban-bencana-alam-1777005006','keberlanjutan','Respon cepat ABE Group dalam membantu korban bencana alam dengan donasi senilai Rp 1 miliar.','ABE Group menyalurkan donasi senilai Rp 1 miliar untuk membantu korban bencana alam yang melanda beberapa wilayah di Indonesia. Selain bantuan dana, perusahaan juga mengirimkan relawan karyawan dan logistik berupa makanan, obat-obatan, dan perlengkapan darurat. Tim tanggap bencana ABE Group telah berkoordinasi dengan BNPB dan organisasi kemanusiaan untuk memastikan bantuan tersalurkan dengan tepat sasaran.','news/su6bA04LkkPHizqhadeet2DEFmQzHJyrs159pMDk.jpg',1,'2026-03-22 01:00:00','2026-04-24 04:30:06'),(21,'Grand Opening ABE Innovation Hub di Bandung','grand-opening-abe-innovation-hub-di-bandung-1777005053','berita','ABE Group meresmikan Innovation Hub di Bandung sebagai pusat riset dan pengembangan teknologi terbaru.','ABE Group meresmikan Innovation Hub di kota Bandung yang akan menjadi pusat riset dan pengembangan teknologi terbaru. Fasilitas seluas 5.000 meter persegi ini dilengkapi dengan laboratorium AI, ruang co-working untuk startup binaan, dan auditorium untuk kegiatan seminar teknologi. Innovation Hub ini diharapkan menjadi katalis bagi ekosistem inovasi di Jawa Barat dan mendorong kolaborasi antara industri dan akademisi.','news/yhz6mR8FqEKDV43sV6p344aMWyAPY8YbU7t4MnnA.jpg',1,'2026-03-18 07:00:00','2026-04-24 04:30:53'),(22,'ABE Group Raih Sertifikasi ISO 27001 untuk Keamanan Data','abe-group-raih-sertifikasi-iso-27001-untuk-keamanan-data-1777005143','pencapaian','Komitmen terhadap keamanan data pelanggan dibuktikan dengan perolehan sertifikasi ISO 27001.','ABE Group berhasil meraih sertifikasi ISO 27001:2022 untuk Sistem Manajemen Keamanan Informasi. Sertifikasi ini mencakup seluruh divisi dan anak perusahaan, menegaskan komitmen perusahaan dalam melindungi data pelanggan dan informasi bisnis. Proses sertifikasi melibatkan audit menyeluruh selama 6 bulan oleh lembaga sertifikasi internasional. Pencapaian ini menjadikan ABE Group sebagai salah satu konglomerat pertama di Indonesia yang memiliki sertifikasi keamanan data menyeluruh.','news/KF2dIuxwLckZR5HLUlW7xzHHordYJNfqA2lP60yX.jpg',1,'2026-03-15 04:00:00','2026-04-24 04:32:23'),(23,'Revolusi Digital: Bagaimana AI Mengubah Landasan Operasional Perusahaan Modern','revolusi-digital-bagaimana-ai-mengubah-landasan-operasional-perusahaan-modern-1777005429','berita','Analisis mendalam mengenai integrasi Kecerdasan Buatan (AI) dalam struktur fundamental bisnis global dan efisiensi sistem.','Dalam satu dekade terakhir, kita telah menyaksikan pergeseran paradigma yang luar biasa dalam cara perusahaan beroperasi. Kecerdasan Buatan (AI) bukan lagi sekadar elemen tambahan dalam departemen IT, melainkan telah menjadi jantung dari strategi pertumbuhan bisnis. Transformasi digital yang didorong oleh AI memungkinkan perusahaan untuk mengolah data dalam skala yang sebelumnya tidak terbayangkan. Algoritma pembelajaran mesin kini mampu memprediksi tren pasar dengan akurasi yang mengejutkan, memberikan keunggulan kompetitif bagi mereka yang berani berinvestasi lebih awal. Namun, implementasi ini bukan tanpa tantangan. Banyak organisasi menghadapi hambatan struktural, mulai dari kurangnya talenta ahli hingga kekhawatiran etis mengenai privasi data. Di Indonesia, adaptasi ini mulai terlihat pada sektor finansial dan logistik. Perusahaan-perusahaan rintisan di Jakarta mulai menggunakan AI untuk mengoptimalkan rute pengiriman dan mendeteksi penipuan transaksi secara real-time. Ke depannya, integrasi AI akan semakin bersifat personal. Sistem integrasi yang cerdas akan memungkinkan kolaborasi antara manusia dan mesin yang lebih mulus, menciptakan lingkungan kerja yang lebih produktif dan inovatif. Penting bagi para pemimpin bisnis untuk memahami bahwa AI bukanlah pengganti tenaga kerja manusia, melainkan alat untuk memperluas kapabilitas manusia secara eksponensial dalam menghadapi dinamika ekonomi global yang semakin kompleks.','news/n5OYBKpkrXDCODqNlg9GrIeYf7deOPWzYdQcYpxX.jpg',1,'2026-04-24 04:37:09','2026-04-24 04:37:09'),(24,'Strategi Transformasi Digital bagi UMKM di Sektor Manufaktur Tradisional','strategi-transformasi-digital-bagi-umkm-di-sektor-manufaktur-tradisional-1777005488','cerita-inovasi','Panduan komprehensif bagi pelaku UMKM untuk mengadopsi teknologi digital tanpa mengorbankan nilai otentisitas produk.','Sektor manufaktur tradisional seringkali dianggap sebagai area yang paling sulit untuk didigitalisasi. Namun, pengalaman selama pandemi membuktikan bahwa ketahanan bisnis sangat bergantung pada fleksibilitas digital. Bagi UMKM, langkah pertama dalam transformasi bukanlah membeli perangkat keras yang mahal, melainkan mengubah pola pikir organisasional. Penggunaan sistem manajemen inventaris berbasis cloud merupakan contoh integrasi sederhana yang memberikan dampak besar pada efisiensi operasional. Dengan data yang tercatat secara digital, pemilik usaha dapat melacak aliran bahan baku secara akurat dan mengurangi pemborosan yang tidak perlu. Selain itu, aspek pemasaran digital membuka pintu bagi UMKM untuk menjangkau pasar internasional yang sebelumnya tidak terjangkau. Di Jawa Tengah, beberapa pengrajin furnitur telah mulai menggunakan platform digital untuk memamerkan katalog produk mereka ke audiens di Eropa dan Amerika Serikat. Keberhasilan ini didukung oleh penggunaan UI/UX yang ramah pengguna pada situs web mereka, memudahkan calon pembeli untuk melakukan pemesanan secara langsung. Tantangan utama yang dihadapi adalah literasi digital. Oleh karena itu, diperlukan sinergi antara penyedia solusi IT profesional dan pemerintah untuk memberikan pendampingan yang berkelanjutan. Transformasi digital yang inklusif akan memastikan bahwa kemajuan teknologi dapat dinikmati oleh seluruh lapisan masyarakat, memperkuat fondasi ekonomi nasional secara menyeluruh.','news/V4Cmaee22aCAhqzJ1Z3c8iKAZEwbMveOrsyUX5ah.jpg',1,'2026-04-24 04:38:08','2026-04-24 04:38:08'),(25,'Pentingnya Sistem Integrasi dalam Meningkatkan Keamanan Data Perusahaan','pentingnya-sistem-integrasi-dalam-meningkatkan-keamanan-data-perusahaan-1777005550','keberlanjutan','Mengulas mengapa sistem yang terfragmentasi menjadi celah keamanan utama dan bagaimana solusi integrasi menyeluruh dapat melindungi aset digital.','Keamanan siber telah menjadi prioritas utama bagi dewan direksi di seluruh dunia. Seiring dengan meningkatnya ancaman serangan ransomware dan kebocoran data, perusahaan dituntut untuk memiliki benteng pertahanan digital yang tidak tertembus. Salah satu masalah terbesar dalam infrastruktur IT modern adalah \"siloisasi\" data, di mana informasi tersimpan dalam sistem-sistem yang tidak saling berkomunikasi. Celah komunikasi antar sistem inilah yang sering dimanfaatkan oleh peretas untuk menyusup ke dalam jaringan internal. Implementasi sistem integrasi yang kokoh bertindak sebagai jembatan yang menyatukan protokol keamanan di seluruh departemen. Dengan sistem yang terintegrasi, tim keamanan informasi dapat melakukan pemantauan lalu lintas data secara tersentralisasi melalui dashboard yang komprehensif. Penggunaan teknologi enkripsi end-to-end dan otentikasi multi-faktor (MFA) menjadi standar minimum yang harus dipenuhi. Selain itu, penting untuk melakukan audit keamanan secara berkala melalui metode Software Quality Assurance (QA) yang ketat. QA bukan hanya tentang memastikan fitur berfungsi, tetapi juga memastikan tidak ada kerentanan logika dalam kode yang dapat dieksploitasi. Di era cloud, menjaga integritas data berarti menjaga kepercayaan pelanggan. Sekali kepercayaan itu hilang karena kebocoran data, biaya pemulihannya bisa jauh lebih besar daripada investasi pada solusi IT profesional sejak dini. Keamanan data bukan lagi beban biaya, melainkan investasi strategis untuk kelangsungan bisnis jangka panjang.','news/uH87g6CC51igfwVpyjY0pqwvo2HtANfFIbtevqSX.jpg',1,'2026-04-24 04:39:10','2026-04-24 04:39:10'),(26,'Masa Depan Infrastruktur Hijau: Teknologi Ramah Lingkungan untuk Smart City','masa-depan-infrastruktur-hijau-teknologi-ramah-lingkungan-untuk-smart-city-1777005625','keberlanjutan','Eksplorasi teknologi terbaru dalam pembangunan kota pintar yang memprioritaskan efisiensi energi dan keberlanjutan lingkungan.','Konsep Smart City kini bertransformasi menjadi \"Green Smart City\". Di tengah krisis iklim global, teknologi diharapkan menjadi penyelamat bumi. Pembangunan infrastruktur digital di perkotaan kini harus mempertimbangkan jejak karbon yang dihasilkan. Penggunaan sensor Internet of Things (IoT) pada lampu jalan dan sistem pembuangan sampah telah terbukti mengurangi konsumsi energi hingga 30%. Sistem manajemen air yang cerdas dapat mendeteksi kebocoran pada pipa bawah tanah dalam hitungan detik, mencegah pemborosan sumber daya yang berharga. Di beberapa kota maju, integrasi sistem transportasi publik dengan aplikasi mobile memungkinkan warga untuk merencanakan perjalanan yang paling efisien, mengurangi penggunaan kendaraan pribadi. Teknologi blockchain juga mulai digunakan untuk melacak sertifikasi bangunan hijau secara transparan. Namun, membangun kota pintar membutuhkan kolaborasi multidisiplin antara arsitek, pengembang perangkat lunak, dan pembuat kebijakan. Fokus utamanya adalah bagaimana teknologi dapat melayani manusia tanpa merusak alam. Di Indonesia, pengembangan IKN (Ibu Kota Nusantara) menjadi proyek percontohan terbesar untuk implementasi infrastruktur hijau ini. Tantangannya adalah memastikan bahwa infrastruktur digital yang dibangun memiliki skalabilitas tinggi dan tahan terhadap perubahan cuaca ekstrem. Inovasi digital harus berjalan beriringan dengan restorasi ekologis untuk menciptakan masa depan yang layak huni bagi generasi mendatang.','news/c3HFgrRfvQeAU4GFvTiYofOcZBEuza2xi5TUrbIM.jpg',1,'2026-04-24 04:40:25','2026-04-24 04:40:25'),(27,'Dampak Automasi pada Masa Depan Tenaga Kerja Profesional di Asia Tenggara','dampak-automasi-pada-masa-depan-tenaga-kerja-profesional-di-asia-tenggara-1777005944','cerita-inovasi','Studi tentang pergeseran peran manusia di tempat kerja akibat adopsi robotika dan perangkat lunak automasi.','Automasi seringkali dipandang dengan rasa takut oleh para pekerja profesional. Ada kekhawatiran bahwa mesin akan menggantikan peran manusia di berbagai sektor, mulai dari manufaktur hingga administrasi keuangan. Namun, sejarah menunjukkan bahwa setiap revolusi industri selalu melahirkan jenis pekerjaan baru yang sebelumnya tidak pernah ada. Di Asia Tenggara, khususnya di negara berkembang seperti Indonesia, automasi justru menjadi solusi untuk mengatasi kekurangan efisiensi dalam proses produksi. Peran manusia bergeser dari tugas-tugas repetitif menjadi peran yang membutuhkan pemikiran kritis, kreativitas, dan empati—hal-hal yang belum bisa ditiru secara sempurna oleh mesin. Perusahaan IT profesional kini lebih banyak mencari talenta yang memiliki kemampuan adaptasi tinggi terhadap alat-alat digital baru. Program reskilling dan upskilling menjadi sangat krusial. Pendidikan vokasi dan universitas perlu memperbarui kurikulum mereka agar relevan dengan kebutuhan industri 4.0. Misalnya, permintaan akan ahli Product Design dan QA Tester meningkat pesat karena setiap aplikasi automasi membutuhkan antarmuka yang intuitif dan pengujian yang mendalam. Automasi seharusnya dipandang sebagai mitra kolaborasi. Dengan menyerahkan tugas rutin kepada perangkat lunak, tenaga kerja manusia memiliki lebih banyak waktu untuk fokus pada inovasi dan pengembangan strategi bisnis yang lebih kompleks. Masa depan pekerjaan bukan tentang kompetisi antara manusia dan mesin, melainkan tentang bagaimana manusia mengarahkan mesin untuk mencapai tujuan yang lebih besar.','news/jD04XtYXhBD5zPY9B7lelBYKRouFL3LOFmaPundL.jpg',1,'2026-04-24 04:42:01','2026-04-24 04:45:44'),(28,'Kegiatan Outing Perusahaan Perkuat Kekompakan Tim','kegiatan-outing-perusahaan-perkuat-kekompakan-tim-1777005843','keberlanjutan','Perusahaan mengadakan outing untuk meningkatkan kebersamaan dan semangat kerja karyawan.','Dalam upaya mempererat hubungan antar karyawan, perusahaan sukses menyelenggarakan kegiatan outing yang penuh semangat dan kebersamaan. Berbagai aktivitas seperti team building, permainan kolaboratif, dan sesi motivasi turut memeriahkan acara. Kegiatan ini tidak hanya memberikan suasana segar, tetapi juga memperkuat kerja sama tim dalam lingkungan kerja yang lebih harmonis.','news/jxp4IaXTHJqWY7hy5LZ9rRDRrhG83wrBqiZFoZtH.jpg',1,'2026-04-24 04:44:03','2026-04-24 04:44:03'),(29,'ABE Group Raih Penghargaan Best Corporate Governance 2026','abe-group-raih-penghargaan-best-corporate-governance-2026-8917','pencapaian','ABE Group berhasil meraih penghargaan Best Corporate Governance dari Indonesia Corporate Governance Award 2026, menegaskan komitmen perusahaan terhadap tata kelola yang transparan dan akuntabel.','ABE Group berhasil meraih penghargaan Best Corporate Governance dari Indonesia Corporate Governance Award 2026. Penghargaan ini diberikan sebagai bentuk apresiasi atas komitmen perusahaan dalam menerapkan prinsip-prinsip tata kelola perusahaan yang baik (Good Corporate Governance). Dalam ajang bergengsi ini, ABE Group dinilai unggul dalam aspek transparansi, akuntabilitas, dan tanggung jawab sosial. CEO ABE Group menyatakan bahwa penghargaan ini menjadi motivasi untuk terus meningkatkan standar tata kelola perusahaan.',NULL,1,'2026-04-18 10:00:00','2026-04-18 10:00:00'),(30,'Antar Rajh Penghasilan Best Sustainability: Lowest Loss of Rating','antar-rajh-penghasilan-best-sustainability-lowest-loss-of-rating-6005','pencapaian','Pencapaian luar biasa dalam bidang keberlanjutan dengan meraih predikat Lowest Loss of Rating dari lembaga pemeringkat internasional.','ABE Group melalui anak perusahaannya berhasil meraih predikat Lowest Loss of Rating dari lembaga pemeringkat keberlanjutan internasional. Pencapaian ini menunjukkan konsistensi perusahaan dalam menjaga standar keberlanjutan yang tinggi. Berbagai program ESG (Environmental, Social, and Governance) yang telah dilaksanakan selama bertahun-tahun terbukti memberikan dampak positif yang terukur. Hal ini memperkuat posisi ABE Group sebagai pemimpin dalam praktik bisnis berkelanjutan di Indonesia.',NULL,1,'2026-04-14 09:30:00','2026-04-14 09:30:00'),(31,'ABE Group Masuk Daftar Top 50 Perusahaan Terbaik di Indonesia','abe-group-masuk-daftar-top-50-perusahaan-terbaik-di-indonesia-6492','pencapaian','ABE Group berhasil masuk dalam daftar Top 50 perusahaan terbaik di Indonesia versi majalah bisnis terkemuka.','Dalam survei tahunan yang dilakukan oleh salah satu majalah bisnis terkemuka di Indonesia, ABE Group berhasil masuk dalam daftar Top 50 perusahaan terbaik. Penilaian didasarkan pada kinerja keuangan, inovasi, tata kelola perusahaan, dan kontribusi sosial. ABE Group menduduki peringkat yang sangat baik berkat pertumbuhan pendapatan yang konsisten dan program-program inovatif yang diluncurkan sepanjang tahun.',NULL,1,'2026-04-06 14:00:00','2026-04-06 14:00:00'),(32,'Kampanye Peduli Lingkungan: Tanam 10,000 Pohon','kampanye-peduli-lingkungan-tanam-10000-pohon-6028','keberlanjutan','ABE Group meluncurkan program penanaman 10.000 pohon di berbagai wilayah Indonesia sebagai bagian dari komitmen terhadap lingkungan.','ABE Group meluncurkan program penanaman 10.000 pohon yang tersebar di 5 provinsi di Indonesia. Program ini merupakan bagian dari inisiatif Go Green ABE yang bertujuan untuk mengurangi jejak karbon perusahaan. Kegiatan ini melibatkan lebih dari 2.000 karyawan dan masyarakat lokal. Selain penanaman pohon, program ini juga mencakup edukasi lingkungan bagi komunitas setempat dan pembentukan kelompok tani hutan untuk menjaga keberlanjutan hutan yang ditanami.',NULL,1,'2026-04-06 08:00:00','2026-04-06 08:00:00'),(33,'Program CSR Bantuan Renovasi Sekolah di Daerah Terpencil','program-csr-bantuan-renovasi-sekolah-di-daerah-terpencil-2277','keberlanjutan','ABE Group memperbaiki 25 sekolah di daerah terpencil sebagai bentuk kepedulian terhadap pendidikan Indonesia.','Melalui program CSR andalannya, ABE Group berhasil merenovasi 25 sekolah dasar di daerah terpencil di Indonesia Timur. Program renovasi mencakup perbaikan gedung, pengadaan peralatan belajar modern, perpustakaan, dan laboratorium komputer. Tidak hanya itu, ABE Group juga mengirimkan tenaga pengajar sukarelawan untuk mendampingi siswa selama 6 bulan. Program ini telah memberikan dampak positif bagi lebih dari 5.000 siswa di wilayah tersebut.',NULL,1,'2026-04-10 11:00:00','2026-04-10 11:00:00'),(34,'Implementasi Energi Terbarukan di Seluruh Pabrik ABE Group','implementasi-energi-terbarukan-di-seluruh-pabrik-abe-group-2911','keberlanjutan','ABE Group berkomitmen menggunakan 100% energi terbarukan di seluruh fasilitas produksinya pada tahun 2028.','ABE Group mengumumkan rencana ambisius untuk mengimplementasikan energi terbarukan di seluruh fasilitas produksinya. Saat ini, 60% kebutuhan energi pabrik sudah dipasok dari panel surya dan turbin angin. Investasi senilai Rp 500 miliar telah dialokasikan untuk proyek ini, dan diharapkan pada tahun 2028 seluruh pabrik akan beroperasi dengan 100% energi terbarukan. Langkah ini menjadikan ABE Group sebagai pelopor energi bersih di sektor manufaktur Indonesia.',NULL,1,'2026-03-28 09:00:00','2026-03-28 09:00:00'),(35,'Penandatanganan MoU dengan Universitas Terkemuka','penandatanganan-mou-dengan-universitas-terkemuka-2103','penghargaan','ABE Group menandatangani MoU dengan tiga universitas terkemuka untuk program pengembangan talenta dan riset bersama.','ABE Group resmi menandatangani Memorandum of Understanding (MoU) dengan tiga universitas terkemuka di Indonesia: Universitas Indonesia, Institut Teknologi Bandung, dan Universitas Gadjah Mada. Kerja sama ini mencakup program magang terstruktur, riset bersama di bidang teknologi, dan beasiswa untuk mahasiswa berprestasi. Melalui kolaborasi ini, ABE Group berharap dapat memperkuat pipeline talenta dan mendorong inovasi berbasis riset.',NULL,1,'2026-04-09 13:00:00','2026-04-09 13:00:00'),(36,'ABE Group Terima Indonesia Green Award untuk Inovasi Lingkungan','abe-group-terima-indonesia-green-award-untuk-inovasi-lingkungan-3881','penghargaan','Inovasi dalam pengelolaan limbah produksi membawa ABE Group meraih Indonesia Green Award 2026.','ABE Group meraih Indonesia Green Award 2026 dalam kategori Inovasi Pengelolaan Limbah Industri. Sistem pengelolaan limbah terintegrasi yang dikembangkan perusahaan berhasil mengurangi limbah produksi hingga 80% dan mengubahnya menjadi bahan baku sekunder yang bernilai ekonomis. Penghargaan ini menegaskan komitmen ABE Group dalam mewujudkan ekonomi sirkular di sektor industri Indonesia.',NULL,1,'2026-03-25 10:00:00','2026-03-25 10:00:00'),(37,'Indomaret Aset Hadirkan Skala Air Lengkap Rayvol Pertamanya di Indonesia','indomaret-aset-hadirkan-skala-air-lengkap-rayvol-pertamanya-di-indonesia-7152','berita','Peluncuran fasilitas pengolahan air skala besar pertama oleh Indomaret Aset di Indonesia, menjawab kebutuhan air bersih masyarakat.','Indomaret Aset resmi meluncurkan fasilitas pengolahan air skala besar pertamanya di Indonesia. Fasilitas ini menggunakan teknologi Rayvol terkini yang mampu mengolah air dengan kapasitas 10.000 liter per jam. Investasi ini merupakan bagian dari strategi diversifikasi bisnis ABE Group ke sektor utilitas. Fasilitas yang berlokasi di Jawa Barat ini diharapkan dapat melayani kebutuhan air bersih bagi 50.000 rumah tangga di sekitarnya.',NULL,1,'2026-04-18 08:00:00','2026-04-18 08:00:00'),(38,'Dukung Miliaran dari Kemampuan Jakarta! Pembangunan Pabrik CE','dukung-miliaran-dari-kemampuan-jakarta-pembangunan-pabrik-ce-5806','berita','ABE Group mendukung pembangunan pabrik Consumer Electronics baru di kawasan industri Jakarta dengan investasi miliaran rupiah.','ABE Group mengumumkan dukungan investasi senilai miliaran rupiah untuk pembangunan pabrik Consumer Electronics (CE) baru di kawasan industri Jakarta Timur. Pabrik ini akan memproduksi berbagai perangkat elektronik konsumen dengan standar internasional. Pembangunan diharapkan selesai dalam 18 bulan dan akan menciptakan lebih dari 3.000 lapangan kerja baru. Langkah ini sejalan dengan visi pemerintah untuk memperkuat industri manufaktur elektronik nasional.',NULL,1,'2026-04-16 10:30:00','2026-04-16 10:30:00'),(39,'ABE Group Ekspansi Bisnis ke Asia Tenggara','abe-group-ekspansi-bisnis-ke-asia-tenggara-1788','berita','Ekspansi strategis ABE Group ke pasar Vietnam dan Thailand sebagai langkah menuju perusahaan multinasional.','ABE Group resmi mengumumkan rencana ekspansi bisnis ke pasar Asia Tenggara, dimulai dari Vietnam dan Thailand. Perusahaan telah membentuk dua anak perusahaan baru yang akan beroperasi di kedua negara tersebut. Ekspansi ini merupakan bagian dari rencana strategis jangka panjang untuk menjadikan ABE Group sebagai pemain regional yang kuat. Investasi awal sebesar USD 50 juta telah dialokasikan untuk membangun infrastruktur bisnis di kedua negara.',NULL,1,'2026-04-02 09:00:00','2026-04-02 09:00:00'),(40,'Kolaborasi dengan Startup Teknologi untuk Akselerasi Digital','kolaborasi-dengan-startup-teknologi-untuk-akselerasi-digital-2854','cerita-inovasi','ABE Group menggandeng 10 startup teknologi terkemuka untuk mengakselerasi transformasi digital perusahaan.','Dalam upaya mempercepat transformasi digital, ABE Group menjalin kolaborasi strategis dengan 10 startup teknologi terkemuka di Indonesia. Program kolaborasi ini mencakup pengembangan solusi AI untuk optimasi rantai pasok, implementasi IoT di fasilitas produksi, dan pengembangan platform e-commerce B2B. Melalui program akselerasi ini, ABE Group berhasil meningkatkan efisiensi operasional hingga 35% dan mengurangi waktu proses bisnis secara signifikan.',NULL,1,'2026-04-12 14:00:00','2026-04-12 14:00:00'),(41,'Peluncuran Aplikasi Mobile untuk Layanan Pelanggan','peluncuran-aplikasi-mobile-untuk-layanan-pelanggan-6133','cerita-inovasi','ABE Group meluncurkan aplikasi mobile terbaru yang memudahkan pelanggan mengakses seluruh layanan dalam satu genggaman.','ABE Group resmi meluncurkan aplikasi mobile \"ABE Connect\" yang menyatukan seluruh layanan pelanggan dalam satu platform. Aplikasi ini dilengkapi fitur chatbot AI, tracking pesanan real-time, program loyalitas digital, dan akses ke katalog produk lengkap. Dalam dua minggu sejak peluncuran, aplikasi ini telah diunduh lebih dari 100.000 kali dan mendapatkan rating 4.8 di App Store dan Google Play.',NULL,1,'2026-04-04 11:00:00','2026-04-04 11:00:00'),(42,'Workshop Teknologi AI untuk Mahasiswa Indonesia','workshop-teknologi-ai-untuk-mahasiswa-indonesia-2861','cerita-inovasi','ABE Group menggelar workshop teknologi AI gratis untuk 1.000 mahasiswa dari berbagai universitas di Indonesia.','ABE Group melalui divisi Technology & Innovation menggelar workshop teknologi Artificial Intelligence (AI) secara gratis untuk 1.000 mahasiswa dari 20 universitas di Indonesia. Workshop berlangsung selama 3 hari dengan materi mencakup machine learning, natural language processing, dan computer vision. Peserta juga berkesempatan untuk berpartisipasi dalam hackathon dengan total hadiah Rp 1 miliar. Kegiatan ini merupakan bagian dari komitmen ABE Group dalam membangun ekosistem teknologi di Indonesia.',NULL,1,'2026-04-02 13:00:00','2026-04-02 13:00:00'),(43,'Pembukaan Lowongan Kerja Besar-Besaran ABE Group 2026','pembukaan-lowongan-kerja-besar-besaran-abe-group-2026-5439','pengumuman','ABE Group membuka 500+ posisi di berbagai divisi untuk mendukung ekspansi bisnis di semester kedua 2026.','ABE Group mengumumkan pembukaan lowongan kerja besar-besaran untuk lebih dari 500 posisi di berbagai divisi. Posisi yang tersedia meliputi bidang teknologi informasi, keuangan, pemasaran, operasional, dan sumber daya manusia. Rekrutmen ini dilakukan untuk mendukung rencana ekspansi bisnis di semester kedua 2026. Pelamar dapat mendaftar melalui website resmi karir ABE Group mulai 1 Mei 2026. Perusahaan menawarkan paket kompensasi yang kompetitif dan program pengembangan karir yang terstruktur.',NULL,1,'2026-04-15 08:00:00','2026-04-15 08:00:00'),(44,'Jadwal RUPS Tahunan ABE Group 2026','jadwal-rups-tahunan-abe-group-2026-8423','pengumuman','Rapat Umum Pemegang Saham Tahunan ABE Group akan dilaksanakan pada 15 Mei 2026 secara hybrid.','Direksi ABE Group mengundang seluruh pemegang saham untuk menghadiri Rapat Umum Pemegang Saham Tahunan (RUPST) yang akan dilaksanakan pada tanggal 15 Mei 2026. Rapat akan diselenggarakan secara hybrid, dengan opsi kehadiran fisik di kantor pusat Jakarta dan virtual melalui platform online. Agenda utama meliputi pengesahan laporan tahunan, pembagian dividen, dan penetapan rencana strategis 2026-2030.',NULL,1,'2026-04-08 10:00:00','2026-04-08 10:00:00'),(45,'Perubahan Jam Operasional Kantor ABE Group','perubahan-jam-operasional-kantor-abe-group-7687','pengumuman','Mulai 1 Mei 2026, ABE Group menerapkan sistem kerja fleksibel dengan jam operasional baru.','ABE Group mengumumkan perubahan jam operasional kantor yang berlaku mulai 1 Mei 2026. Perusahaan akan menerapkan sistem kerja fleksibel dengan core hours pukul 10:00-15:00 WIB, sementara karyawan dapat memilih jam masuk antara 07:00-10:00 WIB. Kebijakan ini merupakan hasil dari survei internal yang menunjukkan bahwa fleksibilitas kerja meningkatkan produktivitas dan kepuasan karyawan. Selain itu, opsi work from home tetap tersedia untuk 2 hari per minggu.',NULL,1,'2026-03-30 09:00:00','2026-03-30 09:00:00'),(46,'ABE Group Donasikan 1 Miliar untuk Korban Bencana Alam','abe-group-donasikan-1-miliar-untuk-korban-bencana-alam-9250','keberlanjutan','Respon cepat ABE Group dalam membantu korban bencana alam dengan donasi senilai Rp 1 miliar.','ABE Group menyalurkan donasi senilai Rp 1 miliar untuk membantu korban bencana alam yang melanda beberapa wilayah di Indonesia. Selain bantuan dana, perusahaan juga mengirimkan relawan karyawan dan logistik berupa makanan, obat-obatan, dan perlengkapan darurat. Tim tanggap bencana ABE Group telah berkoordinasi dengan BNPB dan organisasi kemanusiaan untuk memastikan bantuan tersalurkan dengan tepat sasaran.',NULL,1,'2026-03-22 08:00:00','2026-03-22 08:00:00'),(47,'Peluncuran Program Beasiswa Unggulan ABE Group','peluncuran-program-beasiswa-unggulan-abe-group-9395','pengumuman','ABE Group meluncurkan program beasiswa unggulan untuk 200 mahasiswa berprestasi dari keluarga kurang mampu.','ABE Group meluncurkan Program Beasiswa Unggulan yang akan memberikan bantuan pendidikan penuh kepada 200 mahasiswa berprestasi dari keluarga kurang mampu. Beasiswa ini mencakup biaya kuliah, biaya hidup, dan program mentoring dari para eksekutif ABE Group. Pendaftaran dibuka mulai Juni 2026 untuk mahasiswa S1 dari seluruh universitas di Indonesia. Program ini merupakan investasi jangka panjang ABE Group dalam pengembangan sumber daya manusia Indonesia.',NULL,1,'2026-03-20 10:00:00','2026-03-20 10:00:00'),(48,'Grand Opening ABE Innovation Hub di Bandung','grand-opening-abe-innovation-hub-di-bandung-9237','berita','ABE Group meresmikan Innovation Hub di Bandung sebagai pusat riset dan pengembangan teknologi terbaru.','ABE Group meresmikan Innovation Hub di kota Bandung yang akan menjadi pusat riset dan pengembangan teknologi terbaru. Fasilitas seluas 5.000 meter persegi ini dilengkapi dengan laboratorium AI, ruang co-working untuk startup binaan, dan auditorium untuk kegiatan seminar teknologi. Innovation Hub ini diharapkan menjadi katalis bagi ekosistem inovasi di Jawa Barat dan mendorong kolaborasi antara industri dan akademisi.',NULL,1,'2026-03-18 14:00:00','2026-03-18 14:00:00'),(49,'ABE Group Raih Sertifikasi ISO 27001 untuk Keamanan Data','abe-group-raih-sertifikasi-iso-27001-untuk-keamanan-data-5033','pencapaian','Komitmen terhadap keamanan data pelanggan dibuktikan dengan perolehan sertifikasi ISO 27001.','ABE Group berhasil meraih sertifikasi ISO 27001:2022 untuk Sistem Manajemen Keamanan Informasi. Sertifikasi ini mencakup seluruh divisi dan anak perusahaan, menegaskan komitmen perusahaan dalam melindungi data pelanggan dan informasi bisnis. Proses sertifikasi melibatkan audit menyeluruh selama 6 bulan oleh lembaga sertifikasi internasional. Pencapaian ini menjadikan ABE Group sebagai salah satu konglomerat pertama di Indonesia yang memiliki sertifikasi keamanan data menyeluruh.',NULL,1,'2026-03-15 11:00:00','2026-03-15 11:00:00');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partners` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `website_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `partners_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partners`
--

LOCK TABLES `partners` WRITE;
/*!40000 ALTER TABLE `partners` DISABLE KEYS */;
INSERT INTO `partners` VALUES (2,'Microsoft','partners/9kVX6IW17WAXBiw1mJIzG1eiULADvpNcG3fTnp99.png','microsoft','Partner terpercaya dalam solusi teknologi Microsoft','https://www.microsoft.com',0,1,'2026-04-24 15:33:09','2026-06-29 09:04:02'),(3,'ARO Baskara Esa','partners/5DUdmI8khJHsEeR6wW60n3dQOIyESKxFvCK9buLG.png','aro-baskara-esa','Partner terpercaya dalam solusi teknologi Google','https://www.google.com',0,2,'2026-04-24 15:33:09','2026-06-29 09:04:26'),(4,'MANDEGANI','partners/gk9MmdbKGZnTplPjlPdt4fwswWEA2zzvUzERwS7R.png','mandegani','Partner terpercaya dalam solusi teknologi Amazon',NULL,1,3,'2026-04-24 15:33:09','2026-06-29 09:05:29'),(5,'Panasonic','partners/3iVrkEMhqvj9th02OI4wKpvehveX0enVouHT4szY.jpg','panasonic',NULL,NULL,1,4,'2026-04-24 15:33:09','2026-06-29 09:10:45'),(6,'SAP','partners/cXKgT7c785D0VQ8KHRlA1iFzmHmfvA8rR3j7byw9.png','sap',NULL,NULL,0,5,'2026-04-24 15:33:09','2026-06-29 09:04:59'),(7,'ACER','partners/JmHGbfgHBhCnlFLS8rEB5Qn5DJBhji3IDOVYKxXK.png','acer',NULL,NULL,1,0,'2026-04-24 15:33:09','2026-06-29 09:05:17'),(8,'HARTECH','partners/Bu7va4pz7InjTB6UlHBjaJ2nUsh24eNFt8pTrqOx.jpg','hartech',NULL,NULL,1,7,'2026-04-24 15:33:09','2026-06-29 09:10:08'),(9,'Cisco','partners/JhG7tDeOgdzVFTjD27o3xSAJP6GFRvCsbEaEtMLO.png','cisco','Partner terpercaya dalam solusi teknologi Cisco',NULL,1,4,'2026-04-24 15:33:09','2026-06-29 09:11:37'),(10,'UMALO','partners/KipjXM7wctUms8eIzdtK8scwyvmoIo6S91gFWb8d.png','umalo',NULL,NULL,1,6,'2026-06-29 09:12:08','2026-06-29 09:12:23');
/*!40000 ALTER TABLE `partners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('05oEgoTOG3URuqOM5ZunlXRpytLkIQpRhEJAk36d',NULL,'119.59.99.228','Go-http-client/1.1','eyJfdG9rZW4iOiJqM0dVbU5GeXlFWTljVUVYM3RkZ3lSUVJ0aDliWkdhUnFKTFptS1BPIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782801289),('0zAl8F3jfo3ZfZYD7IVaiYHYy6ruLv5ndVDlIwe5',NULL,'52.167.144.161','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36','eyJfdG9rZW4iOiJuMHREUzBzMHRYcDY4c253UnE5bXdPeDQySDhVRkhzSGNUa21PYlBQIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782790454),('35DHuszBEBhp8p4QYjYjSmJBsOAFXniQOZjJnQOp',NULL,'124.158.189.217','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJGNENNQmVLb3N5aDNQcVpiWWtjUTBvUXhmUklJMTlEUGd4eHNWbGZDIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782724447),('6YNNWg666ID84mXHhSOEIYpWozTA82kvp3JsJpvB',NULL,'46.17.174.172','Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:98.0) Gecko/20100101 Firefox/98.0','eyJfdG9rZW4iOiJ3eHZOcUNnSFJGUDA5cFV4SG1nNmtLSThkeEVrNUY1M2ZRcDlDVFVPIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782785951),('81SNLdySOkLp1nwSEPSLSxHHQl0HJ1FBSkSgGrkh',NULL,'124.158.189.217','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJycU0zelczdktYMXNpUHF1N0Y5cnBua1I4ZEpXeHhLaUMzaFVUY3BvIiwidXJsIjp7ImludGVuZGVkIjoiaHR0cHM6XC9cL2FiZS1ncm91cC5pZFwvYWRtaW5cL2Fib3V0XC8xXC9lZGl0In0sIl9wcmV2aW91cyI6eyJ1cmwiOiJodHRwczpcL1wvYWJlLWdyb3VwLmlkIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782794432),('CODZPbniBphEElmEvPp1pJ8ddRtlT1kMPMa9vqNl',1,'180.252.166.216','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiI3RWh0Y3BQNGdzQW5Kc2ZkdkxvYXhHTnl2M1FybXBaZndjRkdhZWVUIiwidXJsIjpbXSwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=',1782794181),('CW6pX4zgmwcd5UBX3SkHLkpkDSribkU0mHxJPwlu',NULL,'52.167.144.183','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36','eyJfdG9rZW4iOiJFNUtXUnM3RTdSc1dVU1N2b0o1cWpsSXNFeVYyYnBVV3dueEg3Q0JxIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2Jlcml0YT9jYXRlZ29yeT1wZW5ndW11bWFuIiwicm91dGUiOiJuZXdzIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782781267),('D0xNzQTQpGlYCtiBoamHcCB2H2c039rVHbLiePJF',NULL,'34.46.212.195','Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)','eyJfdG9rZW4iOiJObnZISFhScHBLdFRYcXEzbU1RRUtJc1hETlhSZGpzRnRwT3dKY3VRIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782738093),('DGRxjAbBjI1EWSWHlDsuKvfMBK4Q4DOpIqYGuFM8',NULL,'46.101.254.97','Mozilla/5.0 (X11; Linux x86_64; rv:142.0) Gecko/20100101 Firefox/142.0','eyJfdG9rZW4iOiIwdm5HRWRobVlRTzJTUXZMRTFqd3ZFNWdVM3M1dVJycU91T0xNT1ZoIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782808154),('eyvenX8qWkEZ4rlBztFL9MlKYp6Din3zxb3eTs5x',1,'180.252.166.216','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJIWGRNODRvdUoxMWw0Rjc4djhycVBhSW9qaWJsdGg1RXM1RjRUMVpLIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cHM6XC9cL2FiZS1ncm91cC5pZFwvYWRtaW5cL2Fib3V0XC8xXC9lZGl0Iiwicm91dGUiOiJhZG1pbi5hYm91dC5lZGl0In0sInVybCI6W10sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjoxfQ==',1782806075),('fTkSaK5w0p6ReZdbE5l5hn6J407ES7m4hCyuKNbt',NULL,'119.59.99.228','Go-http-client/1.1','eyJfdG9rZW4iOiJRNlJhMGM3SVNFRUlRZE54RnpyTWJRWFQ2Ujh1bkhxZHo1ZVVLVFVuIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782801289),('gPS8Xv1gzbWWSu2G3Ie3H9amTfk9lRv5R3tBhjU2',NULL,'110.137.51.206','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJkeEdiV0hzUTY2U2VEdzhMbnpOMnZPZDE5ZHExYXB2RlBQZmxLTks1IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2Jpc25pc1wvYWJlLWludGVrbm8taW5kb25lc2lhIiwicm91dGUiOiJidXNpbmVzcy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782803930),('HZtUOG0letlsTnrCdqi285Hln4witj5vdWJY3dkf',NULL,'110.137.51.206','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJsbzBRc2x4cTFwSzJLb2FJZ2QzMnd1WDZvcmdSRFVtZVF6a1VWVWxhIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782803894),('I69VAMxor6JRpV83SvcWmYHAn6jmeBmPnP0zqhAQ',NULL,'207.46.13.116','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36','eyJfdG9rZW4iOiJZMDB4S1ZXQmZ1UTI0NG9RY1JNM3FvOTA4djdRZ2tkQnlnTTRpYkpoIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL3RlbnRhbmciLCJyb3V0ZSI6ImFib3V0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782800161),('ij18PVIFIvUpcBwCDDJxaPLOXjjlR4WHAMstUw0v',NULL,'180.252.163.243','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJ6THdEbnR4dzBuT1hReElpWFZZZEdGNjV6Q3R5T0VZaXJ6c2dyWTZiIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782726016),('JlkRjmw0u9Ffv3v8TnkzpjB9grwL8A9t1kq1JpWs',NULL,'36.92.231.74','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJwRmtPTWJodnBjZ3k2aWpKNHhCSTZOMzBUSzFVcUlLNjZteG5NTWZQIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2xvZ2luIiwicm91dGUiOiJsb2dpbiJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19',1782793363),('nb1SGx2zPo7bGU0vQEZbOhRBpGh0nCNaUCMriV21',NULL,'36.70.99.40','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJRVmc4blY2ZUU3R1psckN0UEg3YTE5OHBnSE9OOEd5enhza2loMjJTIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782794262),('Qk4jcheXu5MozEjvi6HTPUXTBDycifGoIMaEbTPX',NULL,'207.46.13.92','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36','eyJfdG9rZW4iOiJvSjVVYW13VHBrRWlKQUExdFlTM0RzVEVJdjhvc1kxTlFpa1RpcDFzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2Jlcml0YVwvcGVtYnVrYWFuLWxvd29uZ2FuLWtlcmphLWJlc2FyLWJlc2FyYW4tYWJlLWdyb3VwLTIwMjYtNTQzOSIsInJvdXRlIjoibmV3cy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782771532),('QOCDgIDAb8iqoe3Q6WvfOrGIkMgvK6pNCgSMT1kB',NULL,'40.77.167.155','Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36','eyJfdG9rZW4iOiJxUlhpQzdzMkhta2dGQjczZXdpNFpDaVM4dU5oRjNzRnFBWkFwVDdnIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2Jlcml0YVwvcmV2b2x1c2ktZGlnaXRhbC1iYWdhaW1hbmEtYWktbWVuZ3ViYWgtbGFuZGFzYW4tb3BlcmFzaW9uYWwtcGVydXNhaGFhbi1tb2Rlcm4tMTc3NzAwNTQyOSIsInJvdXRlIjoibmV3cy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782783554),('rrZPaOk1PJcFfhve3MdYWhViQyVN2QAbrZ4sbSxk',NULL,'202.73.27.115','python-requests/2.34.2','eyJfdG9rZW4iOiIyMnIzZ0tZNEhCTFVLaHRKdnZIQVVEb042SlZNMVhMNU9vdFZwYzAyIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782800525),('RzVHiHdBPfS4udzyu23huwVwtyqbh473km0d67DK',1,'36.70.99.40','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJ6NUNmaktQeWlJYkVtUXBTeGJ5TEVMR1lYemo3c3JjYmNFd0V6MVRhIiwidXJsIjpbXSwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2FkbWluXC90aW1lbGluZXNcLzhcL2VkaXQiLCJyb3V0ZSI6ImFkbWluLnRpbWVsaW5lcy5lZGl0In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjF9',1782729466),('sqq9GmBqKNvZcJ1jxSd93esu2UpP12YwewGFDJLj',NULL,'70.189.242.112','Mozilla/5.0 (X11; CrOS x86_64 14541.0.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJib3NGRUhYSnpqd1ZFTzdLdU5jTE9KWFJORnVHZU0ydDEyREVmdVJzIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782748871),('sUKsF5BA5P4QBFvnvrq4mltZJrJvR99jidcNSgPx',NULL,'180.252.166.216','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJiTDN3cjh2OUlUWlZGSzNXUEd6Z3VXNFRBRTdzUW5SaVlNclBSYjN5IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2thcmlyIiwicm91dGUiOiJjYXJlZXIifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782785667),('sYEWQMRN8oCnVK0pbTghEizh70BRtJSgV5SfyR8K',NULL,'160.250.205.197','Go-http-client/1.1','eyJfdG9rZW4iOiI1ZzdHaFI3T09OekswSHZZNXpNNGxQU2ZJVHhYUU0wREdHVHR3ZUhSIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782742630),('Tjqnwz1G63pEDikRO3zToMxRFQXVrLG82l8NyDMF',NULL,'160.250.205.197','Go-http-client/1.1','eyJfdG9rZW4iOiJPOFU1YzEwOUx0TkpVV3BmaDdwOTBtdHdCZXh1bzZCOW1IUXA2M1UxIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782742629),('U8h3jWjYpmdnM7IzlyUL3yCOAXdckTn6G0SKeLjA',NULL,'36.70.99.40','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0','eyJfdG9rZW4iOiJ3MnkzSTNLOXhWaU5XY3VuNlNCdkJhNHFmYjlUOWZzSDdmclFORUVuIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2Jpc25pc1wvYWJlLWludGVrbm8taW5kb25lc2lhIiwicm91dGUiOiJidXNpbmVzcy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782784879),('UFwKcJTiAH1rGeZ6D4GzH3KlKeyl5yiOTp0kijx0',NULL,'182.6.42.52','Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Mobile Safari/537.36','eyJfdG9rZW4iOiJLVHFhaUxLcU42T1VTREFjVEt4djZYQTBNZUFlbVBmSW1Qd1FiZGp5IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782803876),('Unjlf0KNd8TcUB7iPR2tKelvx6PJXCpSvPMW8ZE5',1,'124.158.189.217','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJSZjhObFhGdW1zaEE2TEx0M0IyWU9nSE5PQjZnaXBIMjlkWjhWSllpIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cHM6XC9cL2FiZS1ncm91cC5pZFwvYWRtaW5cL3Rlc3RpbW9uaWFscyIsInJvdXRlIjoiYWRtaW4udGVzdGltb25pYWxzLmluZGV4In0sInVybCI6W10sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjoxfQ==',1782794517),('WKgkfhnXZPw9vU2owpUxRRhzHSH5hPYyGxBHWAf2',NULL,'34.123.232.211','Mozilla/5.0 (compatible; CMS-Checker/1.0; +https://example.com)','eyJfdG9rZW4iOiI4U3hLbDFBSE9OZkhuTUdSSVpQcG5jMFJzSURZSWF1dUpJcVNNSTVkIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC93d3cuYWJlLWdyb3VwLmlkIiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782747600),('WRVZqlIlDCaXZ0kVxeCvn7TIf1jlzxMEwBdHfza4',NULL,'110.137.51.206','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJmbVpIbU1kMmhyRVpOWFdORnN3NnZvUXV5YXMzSHE4VXlKQ1RqYWhFIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782808830),('XnGgFhd17QD8XqyiWLyzDweG9jCJ9lSDv8pJET9I',NULL,'103.146.202.181','Vigilix/1.0','eyJfdG9rZW4iOiJjeTNCbWZLODJvd2V3aUZmNGVveURGN2pVSHgwNTNOSGZrcHpSY2dZIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC83Ni4xMy4xOTQuMjA1Iiwicm91dGUiOiJob21lIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1782753309),('ZHMN2eL6gFSWRA7OO39NitE2TEWgxXGoS9PWmTU9',1,'36.70.99.40','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJvN2RzMTVxSHVWa1prNW8wMmVLTjVUS25wSXNKN1BZWjFtOUIxQWNBIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWRcL2Jpc25pcyIsInJvdXRlIjoiYnVzaW5lc3MifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJ1cmwiOltdLCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MX0=',1782794876),('ZIbQyApHBKNisK3RLfm7FS4ZGD8wHOM3ZhCY28Vx',NULL,'46.250.246.123','Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJlS2p4U1JFMFRUR2lyT1lqNFc1OFh3bUZVdk56WXcxUk9wYVZoSGdkIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHBzOlwvXC9hYmUtZ3JvdXAuaWQiLCJyb3V0ZSI6ImhvbWUifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119fQ==',1782751959);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sustainability_commitments`
--

DROP TABLE IF EXISTS `sustainability_commitments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sustainability_commitments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kolaborasi Bersama Kami',
  `button_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/hubungi',
  `points` json NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sustainability_commitments`
--

LOCK TABLES `sustainability_commitments` WRITE;
/*!40000 ALTER TABLE `sustainability_commitments` DISABLE KEYS */;
INSERT INTO `sustainability_commitments` VALUES (1,'Komitmen Keberlanjutan','Bertumbuh dengan tanggung jawab','Kami memastikan pertumbuhan bisnis berjalan selaras dengan kepatuhan, efisiensi energi, dan kontribusi sosial.',NULL,'Kolaborasi Bersama Kami','/hubungi','[\"Efisiensi sumber daya dan pengelolaan risiko operasional\", \"Kepatuhan dan tata kelola yang kuat di seluruh unit bisnis\", \"Inisiatif sosial dan peningkatan kapabilitas SDM\"]',1,'2026-04-24 15:33:09','2026-04-24 15:33:09');
/*!40000 ALTER TABLE `sustainability_commitments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonial_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint unsigned NOT NULL DEFAULT '5',
  `profile_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (2,'Andi Setiawan','Marketing Manager','PT Digital Kreatif Nusantara','Pelayanan yang sangat profesional dan hasil desainnya benar-benar melebihi ekspektasi kami. Komunikasi selama proyek juga sangat lancar.',5,NULL,1,'2026-04-24 03:54:11','2026-04-24 03:54:11'),(3,'Sarah Wijaya','Founder','Bloom Studio','Sangat puas dengan kerja sama ini. Tim sangat responsif terhadap masukan dan mampu menerjemahkan visi brand kami ke dalam tampilan yang modern.',5,NULL,1,'2026-04-24 04:04:52','2026-04-24 04:04:52'),(4,'Budi Santoso','Operations Director','Logistik Jaya Abadi','Sistem yang dibangun sangat membantu efisiensi operasional kantor kami. User interface-nya intuitif sehingga staf kami tidak kesulitan saat beradaptasi.',5,NULL,1,'2026-04-24 04:05:19','2026-04-24 04:05:19'),(5,'Linda Permata','Product Owner','Tech Startup Solution','Kualitas pengerjaan sangat rapi dan detail. Pengalaman QA yang diterapkan benar-benar memastikan produk bebas dari bug sebelum diluncurkan.',5,NULL,1,'2026-04-24 04:05:48','2026-04-24 04:05:48');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timelines`
--

DROP TABLE IF EXISTS `timelines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timelines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` json DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timelines`
--

LOCK TABLES `timelines` WRITE;
/*!40000 ALTER TABLE `timelines` DISABLE KEYS */;
INSERT INTO `timelines` VALUES (2,'2023','PT Aro Baskara Esa','Didirikannya PT Aro Baskara Esa',NULL,'right','blue','[]',1,2,'2026-04-24 15:33:09','2026-06-29 09:58:13'),(5,'2026','ABE INTEKNO INDONESIA','Didirikannya PT Abe Intekno Indonesia',NULL,'right','blue','[]',1,5,'2026-04-24 15:33:09','2026-06-29 10:30:21'),(8,'2026','ayobelanja.com','Peluncuran Website E-Commerce PT Aro Baskara Esa',NULL,'left','blue','[]',1,3,'2026-06-29 10:29:11','2026-06-29 10:30:14');
/*!40000 ALTER TABLE `timelines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin ABE Group','admin@abegroup.com','2026-04-24 15:33:09','$2y$12$RV9K.oUULoSZlJHlvOFGl.L9rpINbAItZqQPTgdrgXCO5PEdYL7Bm',NULL,'2026-04-22 20:58:22','2026-04-24 15:33:09'),(2,'Test User','test@example.com','2026-04-24 15:33:08','$2y$12$iueGWDp35tEZEgQlWh.SIerCQpLDfH5sU40nKEE5GVxF3xBkorWlW','Bv1cs8EI6v','2026-04-24 15:33:08','2026-04-24 15:33:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visi_misis`
--

DROP TABLE IF EXISTS `visi_misis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visi_misis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `visi` text COLLATE utf8mb4_unicode_ci,
  `misi` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visi_misis`
--

LOCK TABLES `visi_misis` WRITE;
/*!40000 ALTER TABLE `visi_misis` DISABLE KEYS */;
INSERT INTO `visi_misis` VALUES (1,'Menjadi perusahaan pilihan utama dalam penyediaan furniture perkantoran, peralatan komputer, dan perkakas dengan konsep Belanja Tepat, Layanan Cepat, Kualitas Hebat.','Menyediakan produk yang tepat guna, tepat kualitas, dan tepat harga sesuai kebutuhan pelanggan.\r\nMemberikan pelayanan yang cepat tanggap 24/7, dan profesional mulai dari konsultasi, pemesanan, pengiriman, dan Purna Jual.\r\nMenjamin kualitas produk yang unggul, barang 100% baru, dan asli tanpaа rekondisi.','2026-04-27 03:51:27','2026-04-27 06:42:18');
/*!40000 ALTER TABLE `visi_misis` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-30  9:18:31
