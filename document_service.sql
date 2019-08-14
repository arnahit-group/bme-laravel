/*
 Navicat Premium Data Transfer

 Source Server         : MySQL
 Source Server Type    : MySQL
 Source Server Version : 100128
 Source Host           : localhost:3306
 Source Schema         : online-hotel

 Target Server Type    : MySQL
 Target Server Version : 100128
 File Encoding         : 65001

 Date: 16/05/2019 09:19:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for document_properties
-- ----------------------------
DROP TABLE IF EXISTS `document_properties`;
CREATE TABLE `document_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `document_type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NOT NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_properties
-- ----------------------------
INSERT INTO `document_properties` VALUES (1, 'title', '-', 'text', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (2, 'path', '-', 'cropper', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (3, 'date', '0', 'date', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (4, 'path', '-', 'file', 1, 2, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (5, 'date', '0', 'date', 1, 2, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (6, 'title', '-', 'text', 1, 3, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (7, 'path', '-', 'cropper', 1, 3, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (8, 'date', '0', 'date', 1, 3, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (9, 'title', '-', 'text', 1, 4, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (10, 'path', '-', 'cropper', 1, 4, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (11, 'date', '0', 'date', 1, 4, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (12, 'width', '1280', 'number', 0, 3, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (13, 'height', '720', 'number', 0, 3, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (14, 'width', '1280', 'number', 0, 4, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (15, 'height', '720', 'number', 0, 4, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (16, 'title', '-', 'text', 1, 9, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (17, 'path', '-', 'file', 1, 9, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (18, 'date', '0', 'date', 1, 9, 0, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (19, 'width', '0', 'number', 0, 1, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (20, 'height', '0', 'number', 0, 1, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (21, 'width', '0', 'number', 0, 2, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (22, 'height', '0', 'number', 0, 2, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for service_properties
-- ----------------------------
DROP TABLE IF EXISTS `service_properties`;
CREATE TABLE `service_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `service_type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_properties
-- ----------------------------
INSERT INTO `service_properties` VALUES (1, 'date', '0', 'date', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (2, 'start_date', '0', 'date', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (3, 'end_date', '0', 'date', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (4, 'price', '0', 'number', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (5, 'active', '0', 'check', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (6, 'confirmation_date', '0', 'date', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (7, 'code', '0', 'text', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (8, 'situation', '0', 'select', 1, 1, 0, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (9, 'room-verification-time', '5', 'number', 0, 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (10, 'payout-time', '15', 'number', 0, 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (11, 'check-verification-time', '5', 'number', 0, 1, 1, 0, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
