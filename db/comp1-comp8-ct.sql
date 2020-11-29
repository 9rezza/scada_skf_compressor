/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : scada_skf

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 28/11/2020 20:38:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for comp1
-- ----------------------------
DROP TABLE IF EXISTS `comp1`;
CREATE TABLE `comp1`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp2
-- ----------------------------
DROP TABLE IF EXISTS `comp2`;
CREATE TABLE `comp2`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp3
-- ----------------------------
DROP TABLE IF EXISTS `comp3`;
CREATE TABLE `comp3`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp4
-- ----------------------------
DROP TABLE IF EXISTS `comp4`;
CREATE TABLE `comp4`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp5
-- ----------------------------
DROP TABLE IF EXISTS `comp5`;
CREATE TABLE `comp5`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp6
-- ----------------------------
DROP TABLE IF EXISTS `comp6`;
CREATE TABLE `comp6`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp7
-- ----------------------------
DROP TABLE IF EXISTS `comp7`;
CREATE TABLE `comp7`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for comp8
-- ----------------------------
DROP TABLE IF EXISTS `comp8`;
CREATE TABLE `comp8`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for ct
-- ----------------------------
DROP TABLE IF EXISTS `ct`;
CREATE TABLE `ct`  (
  `datetime` datetime(0) NOT NULL,
  `kwh` int(11) NULL DEFAULT NULL,
  `kw` int(11) NULL DEFAULT NULL,
  `kvar` int(11) NULL DEFAULT NULL,
  `thdi` decimal(11, 2) NULL DEFAULT NULL,
  `thdv` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
