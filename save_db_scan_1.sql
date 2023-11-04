/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100519 (10.5.19-MariaDB-0+deb11u2-log)
 Source Host           : 147.50.227.17:3306
 Source Schema         : coding_DB_Duck

 Target Server Type    : MySQL
 Target Server Version : 100519 (10.5.19-MariaDB-0+deb11u2-log)
 File Encoding         : 65001

 Date: 04/11/2023 15:40:48
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for save_db_scan_1
-- ----------------------------
DROP TABLE IF EXISTS `save_db_scan_1`;
CREATE TABLE `save_db_scan_1`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `qr_data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `edas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `type_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `mealType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 411 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = COMPACT;

SET FOREIGN_KEY_CHECKS = 1;
