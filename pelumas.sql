/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : pelumas

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 24/03/2024 09:48:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_latih
-- ----------------------------
DROP TABLE IF EXISTS `data_latih`;
CREATE TABLE `data_latih` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `januari` int(11) DEFAULT NULL,
  `februari` int(11) DEFAULT NULL,
  `maret` int(11) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_latih
-- ----------------------------
BEGIN;
INSERT INTO `data_latih` (`id`, `nama`, `januari`, `februari`, `maret`, `class`) VALUES (1, 'Shell', 23, 12, 10, 'terlaris');
INSERT INTO `data_latih` (`id`, `nama`, `januari`, `februari`, `maret`, `class`) VALUES (2, 'Top1', 10, 9, 5, 'terlaris');
INSERT INTO `data_latih` (`id`, `nama`, `januari`, `februari`, `maret`, `class`) VALUES (3, 'Castrol Magnatec', 12, 19, 17, 'tidak terlaris');
INSERT INTO `data_latih` (`id`, `nama`, `januari`, `februari`, `maret`, `class`) VALUES (5, 'BanOil', 23, 43, 23, 'terlaris');
COMMIT;

-- ----------------------------
-- Table structure for data_uji
-- ----------------------------
DROP TABLE IF EXISTS `data_uji`;
CREATE TABLE `data_uji` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `januari` int(11) DEFAULT NULL,
  `februari` int(11) DEFAULT NULL,
  `maret` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of data_uji
-- ----------------------------
BEGIN;
INSERT INTO `data_uji` (`id`, `nama`, `januari`, `februari`, `maret`) VALUES (2, 'OilZen', 12, 43, 12);
COMMIT;

-- ----------------------------
-- Table structure for detail_penjualan
-- ----------------------------
DROP TABLE IF EXISTS `detail_penjualan`;
CREATE TABLE `detail_penjualan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `penjualan_id` int(11) unsigned DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `morp` varchar(255) DEFAULT NULL,
  `morp_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detail_penjualan
-- ----------------------------
BEGIN;
INSERT INTO `detail_penjualan` (`id`, `penjualan_id`, `nama`, `harga`, `jumlah`, `total`, `created_at`, `updated_at`, `morp`, `morp_id`) VALUES (2, 1, 'Castrol Magnatec', 20000, 1, 20000, '2024-03-23 13:07:46', '2024-03-23 13:07:46', 'merk_oli', 2);
INSERT INTO `detail_penjualan` (`id`, `penjualan_id`, `nama`, `harga`, `jumlah`, `total`, `created_at`, `updated_at`, `morp`, `morp_id`) VALUES (3, 1, 'Service Ringan', 100000, 1, 100000, '2024-03-23 13:07:58', '2024-03-23 13:07:58', 'jenis_layanan', 1);
INSERT INTO `detail_penjualan` (`id`, `penjualan_id`, `nama`, `harga`, `jumlah`, `total`, `created_at`, `updated_at`, `morp`, `morp_id`) VALUES (4, 1, 'Shell', 10000, 1, 10000, '2024-03-23 13:08:16', '2024-03-23 13:08:16', 'merk_oli', 3);
INSERT INTO `detail_penjualan` (`id`, `penjualan_id`, `nama`, `harga`, `jumlah`, `total`, `created_at`, `updated_at`, `morp`, `morp_id`) VALUES (5, 1, 'Ban', 30000, 4, 120000, '2024-03-23 13:09:26', '2024-03-23 13:13:11', 'sparepart', 4);
COMMIT;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
INSERT INTO `jabatan` (`id`, `nama`) VALUES (1, 'Staf');
COMMIT;

-- ----------------------------
-- Table structure for jenis_layanan
-- ----------------------------
DROP TABLE IF EXISTS `jenis_layanan`;
CREATE TABLE `jenis_layanan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis_layanan
-- ----------------------------
BEGIN;
INSERT INTO `jenis_layanan` (`id`, `nama`, `harga`) VALUES (1, 'Service Ringan', 100000);
INSERT INTO `jenis_layanan` (`id`, `nama`, `harga`) VALUES (2, 'Service Sedang', 150000);
INSERT INTO `jenis_layanan` (`id`, `nama`, `harga`) VALUES (3, 'Ganti Oli', 10000);
INSERT INTO `jenis_layanan` (`id`, `nama`, `harga`) VALUES (4, 'Tune Up', 23000);
COMMIT;

-- ----------------------------
-- Table structure for jenis_oli
-- ----------------------------
DROP TABLE IF EXISTS `jenis_oli`;
CREATE TABLE `jenis_oli` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jenis_oli
-- ----------------------------
BEGIN;
INSERT INTO `jenis_oli` (`id`, `nama`) VALUES (1, 'Oli Mesin');
INSERT INTO `jenis_oli` (`id`, `nama`) VALUES (2, 'Oli Sintetis');
INSERT INTO `jenis_oli` (`id`, `nama`) VALUES (3, 'Oli Rem');
COMMIT;

-- ----------------------------
-- Table structure for karyawan
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `jabatan_id` int(10) unsigned DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
BEGIN;
INSERT INTO `karyawan` (`id`, `nama`, `telp`, `jabatan_id`, `nik`) VALUES (1, 'adi8', '087678987678', 1, '1234453');
COMMIT;

-- ----------------------------
-- Table structure for merk_oli
-- ----------------------------
DROP TABLE IF EXISTS `merk_oli`;
CREATE TABLE `merk_oli` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_oli_id` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of merk_oli
-- ----------------------------
BEGIN;
INSERT INTO `merk_oli` (`id`, `nama`, `jenis_oli_id`, `harga`) VALUES (1, 'Top 1', 1, 30000);
INSERT INTO `merk_oli` (`id`, `nama`, `jenis_oli_id`, `harga`) VALUES (2, 'Castrol Magnatec', 1, 20000);
INSERT INTO `merk_oli` (`id`, `nama`, `jenis_oli_id`, `harga`) VALUES (3, 'Shell', 1, 10000);
COMMIT;

-- ----------------------------
-- Table structure for penjualan
-- ----------------------------
DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE `penjualan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `karyawan_id` int(11) DEFAULT NULL,
  `jenis_mobil` varchar(255) DEFAULT NULL,
  `nopol` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penjualan
-- ----------------------------
BEGIN;
INSERT INTO `penjualan` (`id`, `nama`, `telp`, `alamat`, `karyawan_id`, `jenis_mobil`, `nopol`, `created_at`, `updated_at`) VALUES (1, 'udinr', '098765678w', 'jl s adamt', 1, 'daiharsur', 'DA 1234 UIr', '2024-03-23 11:53:22', '2024-03-23 11:55:39');
COMMIT;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`) USING BTREE,
  KEY `role_users_role_id_foreign` (`role_id`) USING BTREE,
  CONSTRAINT `role_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of role_users
-- ----------------------------
BEGIN;
INSERT INTO `role_users` (`user_id`, `role_id`) VALUES (1, 1);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'superadmin', '2020-12-23 23:17:35', '2020-12-23 23:17:35');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'admin', '2024-01-06 12:07:58', '2024-01-06 12:07:58');
INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'pegawai', '2024-01-06 12:08:01', '2024-01-06 12:08:01');
COMMIT;

-- ----------------------------
-- Table structure for sparepart
-- ----------------------------
DROP TABLE IF EXISTS `sparepart`;
CREATE TABLE `sparepart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `harga` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sparepart
-- ----------------------------
BEGIN;
INSERT INTO `sparepart` (`id`, `nama`, `harga`) VALUES (4, 'Ban', 30000);
INSERT INTO `sparepart` (`id`, `nama`, `harga`) VALUES (5, 'Setir', 20000);
INSERT INTO `sparepart` (`id`, `nama`, `harga`) VALUES (6, 'Jok Mobil', 15000);
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `password_superadmin` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `api_token` varchar(255) DEFAULT NULL,
  `last_session` varchar(255) DEFAULT NULL,
  `change_password` int(1) unsigned DEFAULT '0' COMMENT '0: belum, 1: sudah',
  `nama_kelompok` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  UNIQUE KEY `users_email_unique` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `password_superadmin`, `remember_token`, `created_at`, `updated_at`, `api_token`, `last_session`, `change_password`, `nama_kelompok`) VALUES (1, 'superadmin', NULL, 'superadmin', '2022-11-07 00:40:59', '$2y$10$E9xG1OtIFvBRbHqlwHCC3u48vO5eBf2OQ9wFNpi.qKOAzVqNDUdW2', NULL, NULL, '2022-11-07 00:40:59', '2022-11-06 16:40:59', '$2y$10$tjMANlV25IUwvKuPxEODW.3qE3zPSKjwhmgTcZUgsPDZRGcpgGAN.', NULL, 0, NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
