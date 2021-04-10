/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 50719
 Source Host           : localhost:3306
 Source Schema         : pemerintah_bogor

 Target Server Type    : MySQL
 Target Server Version : 50719
 File Encoding         : 65001

 Date: 10/04/2021 21:06:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for plat_nomor
-- ----------------------------
DROP TABLE IF EXISTS `plat_nomor`;
CREATE TABLE `plat_nomor`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_wilayah` varchar(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nomor_polisi` int(4) NULL DEFAULT NULL,
  `kode_wilayah_pendaftaran` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kendaraan` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nomor_acak` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `masa_berlaku` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of plat_nomor
-- ----------------------------
INSERT INTO `plat_nomor` VALUES (1, 'F', 1234, 'X', 'Y', 'Z', '2025-07-23');
INSERT INTO `plat_nomor` VALUES (2, 'F', 1231, 'G', 'A', 'B', '2025-05-05');
INSERT INTO `plat_nomor` VALUES (3, 'F', 7892, 'K', 'G', 'F', '2029-11-21');
INSERT INTO `plat_nomor` VALUES (4, 'F', 3656, 'A', 'B', 'C', '2021-11-24');
INSERT INTO `plat_nomor` VALUES (5, 'F', 5232, 'A', 'H', 'J', '2023-07-22');

SET FOREIGN_KEY_CHECKS = 1;
