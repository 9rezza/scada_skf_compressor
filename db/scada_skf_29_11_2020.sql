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

 Date: 29/11/2020 07:49:37
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for alarm
-- ----------------------------
DROP TABLE IF EXISTS `alarm`;
CREATE TABLE `alarm`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `datetime_start` datetime(0) NULL DEFAULT NULL,
  `datetime_end` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of alarm
-- ----------------------------
INSERT INTO `alarm` VALUES (1, 'pp1', '2020-11-29 07:49:06', '2020-11-29 07:49:09');
INSERT INTO `alarm` VALUES (2, 'pp2', '2020-11-29 07:49:06', '2020-11-29 07:49:09');
INSERT INTO `alarm` VALUES (3, 'sdp', '2020-11-29 07:49:06', '2020-11-29 07:49:09');
INSERT INTO `alarm` VALUES (4, 'cap1', '2020-11-29 07:49:10', '2020-11-29 07:49:19');
INSERT INTO `alarm` VALUES (5, 'cap2', '2020-11-29 07:49:10', '2020-11-29 07:49:19');
INSERT INTO `alarm` VALUES (6, 'evacuate', '2020-11-29 07:49:20', '2020-11-29 07:49:29');
INSERT INTO `alarm` VALUES (7, 'gas_disc', '2020-11-29 07:49:20', '2020-11-29 07:49:29');
INSERT INTO `alarm` VALUES (8, 'pp1', '2020-11-29 07:49:30', NULL);
INSERT INTO `alarm` VALUES (9, 'pp2', '2020-11-29 07:49:30', NULL);
INSERT INTO `alarm` VALUES (10, 'sdp', '2020-11-29 07:49:30', NULL);

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

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `src` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 188 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (187, 'main', 'skf', NULL, 'scada_skf_main.png', 100, 30, 1);

-- ----------------------------
-- Table structure for monitoring
-- ----------------------------
DROP TABLE IF EXISTS `monitoring`;
CREATE TABLE `monitoring`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `target` int(11) NULL DEFAULT NULL,
  `actual` int(11) NULL DEFAULT NULL,
  `selisih` int(11) NULL DEFAULT NULL,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of monitoring
-- ----------------------------
INSERT INTO `monitoring` VALUES (1, 1000, 17, -983, '2020-11-06 15:40:00');

-- ----------------------------
-- Table structure for monitoring_images
-- ----------------------------
DROP TABLE IF EXISTS `monitoring_images`;
CREATE TABLE `monitoring_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `src` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of monitoring_images
-- ----------------------------
INSERT INTO `monitoring_images` VALUES (1, 'scanner', 'Monitoring', '', 'scanner_gr.png', 200, 110, 14);
INSERT INTO `monitoring_images` VALUES (2, 'roller1', 'Monitoring', '', 'roller_gr.png', 16, 275, 15);
INSERT INTO `monitoring_images` VALUES (3, 'roller2', 'Monitoring', '', 'roller_gr.png', 386, 6, 13);

-- ----------------------------
-- Table structure for pp1
-- ----------------------------
DROP TABLE IF EXISTS `pp1`;
CREATE TABLE `pp1`  (
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
-- Table structure for pp2
-- ----------------------------
DROP TABLE IF EXISTS `pp2`;
CREATE TABLE `pp2`  (
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
-- Table structure for production
-- ----------------------------
DROP TABLE IF EXISTS `production`;
CREATE TABLE `production`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime(0) NULL DEFAULT NULL,
  `total` int(15) NULL DEFAULT NULL,
  `speed` int(15) NULL DEFAULT NULL,
  `eff` float(255, 0) NULL DEFAULT NULL,
  `line_stop` int(15) NULL DEFAULT NULL,
  `count_speed` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of production
-- ----------------------------
INSERT INTO `production` VALUES (1, '0000-00-00 00:00:00', 0, 0, 100, 0, 0);

-- ----------------------------
-- Table structure for production_images
-- ----------------------------
DROP TABLE IF EXISTS `production_images`;
CREATE TABLE `production_images`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `src` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of production_images
-- ----------------------------
INSERT INTO `production_images` VALUES (1, 'scanner', 'Production', '', 'scanner_gr.png', 200, 110, 14);
INSERT INTO `production_images` VALUES (2, 'roller1', 'Production', '', 'roller_gr.png', 16, 275, 15);
INSERT INTO `production_images` VALUES (3, 'roller2', 'Production', '', 'roller_gr.png', 386, 6, 13);

-- ----------------------------
-- Table structure for production_status
-- ----------------------------
DROP TABLE IF EXISTS `production_status`;
CREATE TABLE `production_status`  (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `status` int(11) NULL DEFAULT 0,
  `line_stop` int(11) NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of production_status
-- ----------------------------
INSERT INTO `production_status` VALUES (1, 0, 0);

-- ----------------------------
-- Table structure for sdp
-- ----------------------------
DROP TABLE IF EXISTS `sdp`;
CREATE TABLE `sdp`  (
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
-- Table structure for symbol
-- ----------------------------
DROP TABLE IF EXISTS `symbol`;
CREATE TABLE `symbol`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grup` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `path` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 125 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of symbol
-- ----------------------------
INSERT INTO `symbol` VALUES (1, 'Clarifier', 'clarifier_1.1.2.png');
INSERT INTO `symbol` VALUES (2, 'Clarifier', 'clarifier_1.1.3.png');
INSERT INTO `symbol` VALUES (3, 'Clarifier', 'clarifier_1.1.4.png');
INSERT INTO `symbol` VALUES (4, 'Clarifier', 'clarifier_2.1.1.png');
INSERT INTO `symbol` VALUES (5, 'Clarifier', 'clarifier_2.1.2.png');
INSERT INTO `symbol` VALUES (6, 'Clarifier', 'clarifier_2.1.3.png');
INSERT INTO `symbol` VALUES (7, 'Clarifier', 'clarifier_2.1.4.png');
INSERT INTO `symbol` VALUES (8, 'Closed_Valve', 'closed_valve_1.1.png');
INSERT INTO `symbol` VALUES (9, 'Closed_Valve', 'closed_valve_1.2.png');
INSERT INTO `symbol` VALUES (10, 'Closed_Valve', 'closed_valve_1.3.png');
INSERT INTO `symbol` VALUES (11, 'Closed_Valve', 'closed_valve_1.4.png');
INSERT INTO `symbol` VALUES (12, 'Fliter_Bed', 'filter_bed_1.1.1.png');
INSERT INTO `symbol` VALUES (13, 'Fliter_Bed', 'filter_bed_1.1.2.png');
INSERT INTO `symbol` VALUES (14, 'Fliter_Bed', 'filter_bed_2.1.1.png');
INSERT INTO `symbol` VALUES (15, 'Fliter_Bed', 'filter_bed_2.1.2.png');
INSERT INTO `symbol` VALUES (16, 'Fliter_Bed', 'filter_bed_2.1.3.png');
INSERT INTO `symbol` VALUES (17, 'Fliter_Bed', 'filter_bed_2.1.4.png');
INSERT INTO `symbol` VALUES (18, 'Huge_Tank', 'huge_tank_1.1.png');
INSERT INTO `symbol` VALUES (19, 'Huge_Tank', 'huge_tank_1.2.png');
INSERT INTO `symbol` VALUES (20, 'Huge_Tank', 'huge_tank_1.3.png');
INSERT INTO `symbol` VALUES (21, 'Huge_Tank', 'huge_tank_1.4.png');
INSERT INTO `symbol` VALUES (22, 'L_Bend', 'l_bend_1.1.png');
INSERT INTO `symbol` VALUES (23, 'L_Bend', 'l_bend_1.2.png');
INSERT INTO `symbol` VALUES (24, 'L_Bend', 'l_bend_1.3.png');
INSERT INTO `symbol` VALUES (25, 'L_Bend', 'l_bend_1.4.png');
INSERT INTO `symbol` VALUES (26, 'L_Bend', 'l_bend_1.5.png');
INSERT INTO `symbol` VALUES (27, 'L_Bend', 'l_bend_1.6.png');
INSERT INTO `symbol` VALUES (28, 'L_Bend', 'l_bend_1.7.png');
INSERT INTO `symbol` VALUES (29, 'L_Bend', 'l_bend_1.8.png');
INSERT INTO `symbol` VALUES (30, 'L_Bend', 'l_bend_1.9.png');
INSERT INTO `symbol` VALUES (31, 'L_Bend', 'l_bend_1.10.png');
INSERT INTO `symbol` VALUES (32, 'L_Bend', 'l_bend_1.11.png');
INSERT INTO `symbol` VALUES (33, 'L_Bend', 'l_bend_1.12.png');
INSERT INTO `symbol` VALUES (34, 'Large_Water_Tower', 'large_water_tower_1.1.png');
INSERT INTO `symbol` VALUES (35, 'Large_Water_Tower', 'large_water_tower_1.2.png');
INSERT INTO `symbol` VALUES (36, 'Large_Water_Tower', 'large_water_tower_1.3.png');
INSERT INTO `symbol` VALUES (37, 'Large_Water_Tower', 'large_water_tower_1.4.png');
INSERT INTO `symbol` VALUES (38, 'Motor', 'motor_1.1.png');
INSERT INTO `symbol` VALUES (39, 'Motor', 'motor_1.2.png');
INSERT INTO `symbol` VALUES (40, 'Motor', 'motor_1.3.png');
INSERT INTO `symbol` VALUES (41, 'Motor', 'motor_1.4.png');
INSERT INTO `symbol` VALUES (42, 'Motor', 'motor_1.5.png');
INSERT INTO `symbol` VALUES (43, 'Motor', 'motor_1.6.png');
INSERT INTO `symbol` VALUES (44, 'Open_Valve', 'open_valve_1.1.png');
INSERT INTO `symbol` VALUES (45, 'Open_Valve', 'open_valve_1.2.png');
INSERT INTO `symbol` VALUES (46, 'Open_Valve', 'open_valve_1.3.png');
INSERT INTO `symbol` VALUES (47, 'Open_Valve', 'open_valve_1.4.png');
INSERT INTO `symbol` VALUES (48, 'Pump', 'pump_1.1.png');
INSERT INTO `symbol` VALUES (49, 'Pump', 'pump_1.2.png');
INSERT INTO `symbol` VALUES (50, 'Pump', 'pump_1.3.png');
INSERT INTO `symbol` VALUES (51, 'Pump', 'pump_1.4.png');
INSERT INTO `symbol` VALUES (52, 'Pump', 'pump_1.5.png');
INSERT INTO `symbol` VALUES (53, 'Pump', 'pump_1.6.png');
INSERT INTO `symbol` VALUES (54, 'Pump', 'pump_1.7.png');
INSERT INTO `symbol` VALUES (55, 'Pump', 'pump_1.8.png');
INSERT INTO `symbol` VALUES (56, 'Pump', 'pump_1.9.png');
INSERT INTO `symbol` VALUES (57, 'Pump', 'pump_1.10.png');
INSERT INTO `symbol` VALUES (58, 'Pump', 'pump_1.11.png');
INSERT INTO `symbol` VALUES (59, 'Pump', 'pump_1.12.png');
INSERT INTO `symbol` VALUES (60, 'Pump', 'pump_1.13.png');
INSERT INTO `symbol` VALUES (61, 'Pump', 'pump_1.14.png');
INSERT INTO `symbol` VALUES (62, 'Pump', 'pump_1.15.png');
INSERT INTO `symbol` VALUES (63, 'Pump', 'pump_1.16.png');
INSERT INTO `symbol` VALUES (64, 'Pump', 'pump_1.17.png');
INSERT INTO `symbol` VALUES (65, 'Pump', 'pump_1.18.png');
INSERT INTO `symbol` VALUES (66, 'Pump', 'pump_1.19.png');
INSERT INTO `symbol` VALUES (67, 'Pump', 'pump_1.20.png');
INSERT INTO `symbol` VALUES (68, 'Pump', 'pump_1.21.png');
INSERT INTO `symbol` VALUES (69, 'Pump', 'pump_1.22.png');
INSERT INTO `symbol` VALUES (70, 'Pump', 'pump_1.23.png');
INSERT INTO `symbol` VALUES (71, 'Pump', 'pump_1.24.png');
INSERT INTO `symbol` VALUES (72, 'Rotating_Valve', 'rotating_valve_1.1.png');
INSERT INTO `symbol` VALUES (73, 'Rotating_Valve', 'rotating_valve_1.2.png');
INSERT INTO `symbol` VALUES (74, 'Rotating_Valve', 'rotating_valve_1.3.png');
INSERT INTO `symbol` VALUES (75, 'Rotating_Valve', 'rotating_valve_1.4.png');
INSERT INTO `symbol` VALUES (76, 'Rotating_Valve', 'rotating_valve_1.5.png');
INSERT INTO `symbol` VALUES (77, 'Rotating_Valve', 'rotating_valve_1.6.png');
INSERT INTO `symbol` VALUES (78, 'Rotating_Valve', 'rotating_valve_1.7.png');
INSERT INTO `symbol` VALUES (79, 'Rotating_Valve', 'rotating_valve_1.8.png');
INSERT INTO `symbol` VALUES (80, 'Rotating_Valve', 'rotating_valve_1.9.png');
INSERT INTO `symbol` VALUES (81, 'Rotating_Valve', 'rotating_valve_1.10.png');
INSERT INTO `symbol` VALUES (82, 'Rotating_Valve', 'rotating_valve_1.11.png');
INSERT INTO `symbol` VALUES (83, 'Rotating_Valve', 'rotating_valve_1.12.png');
INSERT INTO `symbol` VALUES (84, 'Straight_Pipe', 'straight_pipe_1.1.png');
INSERT INTO `symbol` VALUES (85, 'Straight_Pipe', 'straight_pipe_1.2.png');
INSERT INTO `symbol` VALUES (86, 'Straight_Pipe', 'straight_pipe_1.3.png');
INSERT INTO `symbol` VALUES (87, 'T_Pipe', 't_pipe_1.1.png');
INSERT INTO `symbol` VALUES (88, 'T_Pipe', 't_pipe_1.2.png');
INSERT INTO `symbol` VALUES (89, 'T_Pipe', 't_pipe_1.3.png');
INSERT INTO `symbol` VALUES (90, 'T_Pipe', 't_pipe_1.4.png');
INSERT INTO `symbol` VALUES (91, 'T_Pipe', 't_pipe_1.5.png');
INSERT INTO `symbol` VALUES (92, 'T_Pipe', 't_pipe_1.6.png');
INSERT INTO `symbol` VALUES (93, 'T_Pipe', 't_pipe_1.7.png');
INSERT INTO `symbol` VALUES (94, 'T_Pipe', 't_pipe_1.8.png');
INSERT INTO `symbol` VALUES (95, 'T_Pipe', 't_pipe_1.9.png');
INSERT INTO `symbol` VALUES (96, 'T_Pipe', 't_pipe_1.10.png');
INSERT INTO `symbol` VALUES (97, 'T_Pipe', 't_pipe_1.11.png');
INSERT INTO `symbol` VALUES (98, 'T_Pipe', 't_pipe_1.12.png');
INSERT INTO `symbol` VALUES (99, 'Tank', 'tank_1.1.png');
INSERT INTO `symbol` VALUES (100, 'Tank', 'tank_1.2.png');
INSERT INTO `symbol` VALUES (101, 'Tank', 'tank_1.3.png');
INSERT INTO `symbol` VALUES (102, 'Tank', 'tank_1.4.png');
INSERT INTO `symbol` VALUES (103, 'Tank', 'tank_1.5.png');
INSERT INTO `symbol` VALUES (104, 'Tank', 'tank_1.6.png');
INSERT INTO `symbol` VALUES (105, 'Tank', 'tank_1.7.png');
INSERT INTO `symbol` VALUES (106, 'Tank', 'tank_1.8.png');
INSERT INTO `symbol` VALUES (107, 'Tank', 'tank_1.9.png');
INSERT INTO `symbol` VALUES (108, 'Tank', 'tank_1.10.png');
INSERT INTO `symbol` VALUES (109, 'Tank', 'tank_1.11.png');
INSERT INTO `symbol` VALUES (110, 'Tank', 'tank_1.12.png');
INSERT INTO `symbol` VALUES (111, 'Tank', 'tank_1.13.png');
INSERT INTO `symbol` VALUES (112, 'Tank', 'tank_1.14.png');
INSERT INTO `symbol` VALUES (113, 'Tank', 'tank_1.15.png');
INSERT INTO `symbol` VALUES (114, 'Tank', 'tank_1.16.png');
INSERT INTO `symbol` VALUES (115, 'Water_Tower', 'water_tower_1.1.png');
INSERT INTO `symbol` VALUES (116, 'Water_Tower', 'water_tower_1.2.png');
INSERT INTO `symbol` VALUES (117, 'Water_Tower', 'water_tower_1.3.png');
INSERT INTO `symbol` VALUES (118, 'Water_Tower', 'water_tower_1.4.png');
INSERT INTO `symbol` VALUES (119, 'Arrow', 'arrow_1.gif');
INSERT INTO `symbol` VALUES (120, 'Arrow', 'arrow_2.gif');
INSERT INTO `symbol` VALUES (121, 'Arrow', 'arrow_3.gif');
INSERT INTO `symbol` VALUES (122, 'Arrow', 'arrow_4.gif');
INSERT INTO `symbol` VALUES (123, 'Arrow', 'arrow_5.gif');
INSERT INTO `symbol` VALUES (124, 'Arrow', 'arrow_6.gif');

-- ----------------------------
-- Table structure for temp
-- ----------------------------
DROP TABLE IF EXISTS `temp`;
CREATE TABLE `temp`  (
  `datetime` datetime(0) NOT NULL,
  `pp1` decimal(11, 2) NULL DEFAULT NULL,
  `pp2` decimal(11, 2) NULL DEFAULT NULL,
  `sdp` decimal(11, 2) NULL DEFAULT NULL,
  `cap_bank_1` decimal(11, 2) NULL DEFAULT NULL,
  `cap_bank_2` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`datetime`) USING BTREE,
  UNIQUE INDEX `datetime`(`datetime`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for temp_limit
-- ----------------------------
DROP TABLE IF EXISTS `temp_limit`;
CREATE TABLE `temp_limit`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pp1` decimal(11, 2) NULL DEFAULT NULL,
  `pp2` decimal(11, 2) NULL DEFAULT NULL,
  `sdp` decimal(11, 2) NULL DEFAULT NULL,
  `cap1` decimal(11, 2) NULL DEFAULT NULL,
  `cap2` decimal(11, 2) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of temp_limit
-- ----------------------------
INSERT INTO `temp_limit` VALUES (1, 70.00, 70.00, 70.00, 70.00, 70.00);

-- ----------------------------
-- Table structure for textbox
-- ----------------------------
DROP TABLE IF EXISTS `textbox`;
CREATE TABLE `textbox`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `element` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `z` int(11) NOT NULL,
  `color` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of textbox
-- ----------------------------
INSERT INTO `textbox` VALUES (1, 'pp2_temp', 330, 500, 10, '#3b3b3b3');
INSERT INTO `textbox` VALUES (2, 'pp1_temp', 1077, 623, 10, '#3b3b3b3');
INSERT INTO `textbox` VALUES (3, 'sdp_temp', 1313, 658, 10, '#3b3b3b3');
INSERT INTO `textbox` VALUES (4, 'cap1_temp', 440, 123, 10, '#3b3b3b3');
INSERT INTO `textbox` VALUES (5, 'cap2_temp', 770, 185, 10, '#3b3b3b3');
INSERT INTO `textbox` VALUES (6, 'pp2', 230, 567, 10, '#000');
INSERT INTO `textbox` VALUES (7, 'comp1', 318, 580, 10, '#000');
INSERT INTO `textbox` VALUES (8, 'comp2', 358, 586, 10, '#000');
INSERT INTO `textbox` VALUES (9, 'comp3', 398, 592, 10, '#000');
INSERT INTO `textbox` VALUES (10, 'comp4', 438, 598, 10, '#000');
INSERT INTO `textbox` VALUES (11, 'ct', 538, 613, 10, '#000');
INSERT INTO `textbox` VALUES (12, 'pp1', 967, 682, 10, '#000');
INSERT INTO `textbox` VALUES (13, 'comp5', 1065, 695, 10, '#000');
INSERT INTO `textbox` VALUES (14, 'comp6', 1105, 701, 10, '#000');
INSERT INTO `textbox` VALUES (15, 'comp7', 1145, 707, 10, '#000');
INSERT INTO `textbox` VALUES (16, 'comp8', 1185, 713, 10, '#000');
INSERT INTO `textbox` VALUES (17, 'sdp', 1360, 733, 10, '#000');
INSERT INTO `textbox` VALUES (18, 'pp1_alarm', 635, 535, 10, '#fff');
INSERT INTO `textbox` VALUES (19, 'pp2_alarm', 1236, 630, 10, '#fff');
INSERT INTO `textbox` VALUES (20, 'sdp_alarm', 1463, 660, 10, '#fff');
INSERT INTO `textbox` VALUES (21, 'cap1_alarm', 632, 130, 10, '#fff');
INSERT INTO `textbox` VALUES (22, 'cap2_alarm', 960, 190, 10, '#fff');
INSERT INTO `textbox` VALUES (23, 'pp2_detail', 240, 302, 99, '#000');
INSERT INTO `textbox` VALUES (24, 'comp1_detail', 333, 305, 99, '#000');
INSERT INTO `textbox` VALUES (25, 'comp2_detail', 373, 321, 99, '#000');
INSERT INTO `textbox` VALUES (26, 'comp3_detail', 413, 327, 99, '#000');
INSERT INTO `textbox` VALUES (27, 'comp4_detail', 453, 333, 99, '#000');
INSERT INTO `textbox` VALUES (28, 'ct_detail', 552, 347, 99, '#000');
INSERT INTO `textbox` VALUES (29, 'pp1_detail', 977, 417, 99, '#000');
INSERT INTO `textbox` VALUES (30, 'comp5_detail', 1075, 430, 99, '#000');
INSERT INTO `textbox` VALUES (31, 'comp6_detail', 1115, 436, 99, '#000');
INSERT INTO `textbox` VALUES (32, 'comp7_detail', 1155, 442, 99, '#000');
INSERT INTO `textbox` VALUES (33, 'comp8_detail', 1195, 448, 99, '#000');
INSERT INTO `textbox` VALUES (34, 'sdp_detail', 1370, 468, 99, '#000');
INSERT INTO `textbox` VALUES (36, 'evacuate', 50, 770, 10, '');
INSERT INTO `textbox` VALUES (37, 'gas_disc', 50, 850, 10, '');
INSERT INTO `textbox` VALUES (38, 'cap1', 488, 210, 10, '#fff');
INSERT INTO `textbox` VALUES (39, 'cap2', 818, 270, 10, '#fff');
INSERT INTO `textbox` VALUES (40, 'cap1_detail', 503, 220, 99, '#000');
INSERT INTO `textbox` VALUES (41, 'cap2_detail', 833, 281, 99, '#000');

SET FOREIGN_KEY_CHECKS = 1;
