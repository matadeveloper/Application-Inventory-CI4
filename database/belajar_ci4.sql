/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3307
 Source Schema         : belajar_ci4

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 11/05/2020 13:28:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_mst_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mst_kategori`;
CREATE TABLE `tbl_mst_kategori`  (
  `idkategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`idkategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_mst_kategori
-- ----------------------------
INSERT INTO `tbl_mst_kategori` VALUES (3, 'Test1', 'Test1', '2020-05-10 22:33:22', '2020-05-11 01:17:18');

-- ----------------------------
-- Table structure for tbl_mst_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mst_user`;
CREATE TABLE `tbl_mst_user`  (
  `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_mst_user
-- ----------------------------
INSERT INTO `tbl_mst_user` VALUES (1, 'matadeveloper', 'admin', 'admin');

SET FOREIGN_KEY_CHECKS = 1;
