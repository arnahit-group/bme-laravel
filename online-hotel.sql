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

 Date: 24/07/2019 11:55:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for communication_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `communication_assigned_properties`;
CREATE TABLE `communication_assigned_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `communication` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_assigned_properties
-- ----------------------------
INSERT INTO `communication_assigned_properties` VALUES (1, 1, 1, 'sabouri-hotel', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (2, 1, 2, 'sabourihotel', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (3, 1, 3, '10002972', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (4, 1, 4, '1', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (26, 2, 5, '', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (27, 2, 6, '<script type=\"text/javascript\">!function(){function t(){var t=document.createElement(\"script\");t.type=\"text/javascript\",t.async=!0,localStorage.getItem(\"rayToken\")?t.src=\"https://app.raychat.io/scripts/js/\"+o+\"?rid=\"+localStorage.getItem(\"rayToken\")+\"&href=\"+window.location.href:t.src=\"https://app.raychat.io/scripts/js/\"+o;var e=document.getElementsByTagName(\"script\")[0];e.parentNode.insertBefore(t,e)}var e=document,a=window,o=\"629d6450-a954-425f-966f-9699993b5304\";\"complete\"==e.readyState?t():a.attachEvent?a.attachEvent(\"onload\",t):a.addEventListener(\"load\",t,!1)}();</script>', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (28, 2, 7, '0', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (29, 3, 5, 'tawk.io', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (30, 3, 6, '<script type=\"text/javascript\">var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();(function () {var s1 = document.createElement(\"script\"), s0 = document.getElementsByTagName(\"script\")[0];s1.async = true;s1.src = \'https://embed.tawk.to/5cea6742a667a0210d597b7b/default\';s1.charset = \'UTF-8\';s1.setAttribute(\'crossorigin\', \'*\');s0.parentNode.insertBefore(s1, s0);})();</script>', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (31, 3, 7, '1', NULL, NULL);

-- ----------------------------
-- Table structure for communication_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `communication_assigned_property_values`;
CREATE TABLE `communication_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_assigned_property_values
-- ----------------------------
INSERT INTO `communication_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (3, 469, '+98-911-254-6582', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (4, 469, '11111111111111', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (5, 470, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (6, 470, '222222222222222', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (7, 496, '+98-911-254-6582', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (8, 497, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (9, 523, '+98-911-254-6582', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (10, 524, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (11, 551, '+98-911-254-6582', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (12, 552, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (13, 579, '+98-911-254-6582', NULL, NULL);
INSERT INTO `communication_assigned_property_values` VALUES (14, 580, '+98-13-333-55264~8', NULL, NULL);

-- ----------------------------
-- Table structure for communication_properties
-- ----------------------------
DROP TABLE IF EXISTS `communication_properties`;
CREATE TABLE `communication_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NOT NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_properties
-- ----------------------------
INSERT INTO `communication_properties` VALUES (1, 'username', '0', 'text', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (2, 'password', '0', 'text', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (3, 'number', '0', 'text', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (4, 'active', '0', 'check', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (5, 'title', '0', 'text', 1, 4, 0, 0, 'required', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (6, 'code', '', 'code', 1, 4, 0, 0, 'required', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (7, 'active', '0', 'check', 1, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for communication_property_values
-- ----------------------------
DROP TABLE IF EXISTS `communication_property_values`;
CREATE TABLE `communication_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_property_values
-- ----------------------------
INSERT INTO `communication_property_values` VALUES (8, 'fa', 17, NULL, NULL);
INSERT INTO `communication_property_values` VALUES (9, 'en', 17, NULL, NULL);
INSERT INTO `communication_property_values` VALUES (10, 'ar', 17, NULL, NULL);
INSERT INTO `communication_property_values` VALUES (24, 'همکف', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `communication_property_values` VALUES (25, 'اول', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `communication_property_values` VALUES (26, 'دوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `communication_property_values` VALUES (27, 'سوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');

-- ----------------------------
-- Table structure for communication_types
-- ----------------------------
DROP TABLE IF EXISTS `communication_types`;
CREATE TABLE `communication_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT 1,
  `can_have_child` tinyint(255) NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_types
-- ----------------------------
INSERT INTO `communication_types` VALUES (1, 'email', 1, 0, 0, NULL, NULL);
INSERT INTO `communication_types` VALUES (2, 'sms', 1, 0, 0, NULL, NULL);
INSERT INTO `communication_types` VALUES (3, 'iransmspanel', 1, 0, 2, NULL, NULL);
INSERT INTO `communication_types` VALUES (4, 'external-chat-system', 1, 0, 0, NULL, NULL);

-- ----------------------------
-- Table structure for communications
-- ----------------------------
DROP TABLE IF EXISTS `communications`;
CREATE TABLE `communications`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communications
-- ----------------------------
INSERT INTO `communications` VALUES (1, 'iransmspanel-1', 3, NULL, NULL);
INSERT INTO `communications` VALUES (2, 'raychat', 4, NULL, NULL);
INSERT INTO `communications` VALUES (3, 'tawk', 4, NULL, NULL);

-- ----------------------------
-- Table structure for conversation_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `conversation_assigned_properties`;
CREATE TABLE `conversation_assigned_properties`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `conversation` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of conversation_assigned_properties
-- ----------------------------
INSERT INTO `conversation_assigned_properties` VALUES (8, 3, 2, '581', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (9, 3, 1, 'test', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (10, 3, 3, '1562399727083', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (11, 3, 4, '', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (12, 4, 2, '634', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (13, 4, 1, '345435435', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (14, 4, 3, '1562977073079', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (15, 4, 4, '', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (16, 5, 2, '635', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (17, 5, 1, '345345', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (18, 5, 3, '1563053610410', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (19, 5, 4, '', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (20, 6, 2, '636', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (21, 6, 1, '23423423434', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (22, 6, 3, '1563056267860', NULL, NULL);
INSERT INTO `conversation_assigned_properties` VALUES (23, 6, 4, '', NULL, NULL);

-- ----------------------------
-- Table structure for conversation_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `conversation_assigned_property_values`;
CREATE TABLE `conversation_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for conversation_properties
-- ----------------------------
DROP TABLE IF EXISTS `conversation_properties`;
CREATE TABLE `conversation_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NOT NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of conversation_properties
-- ----------------------------
INSERT INTO `conversation_properties` VALUES (1, 'content', '-', 'text', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (2, 'sender', '', 'single-user-relation', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (3, 'date', '0', 'date', 0, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (4, 'reply-to', '0', 'number', 0, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (5, 'content', '-', 'text', 1, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (6, 'sender', '', 'single-user-relation', 1, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (7, 'date', '0', 'date', 0, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_properties` VALUES (8, 'reply-to', '0', 'number', 0, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for conversation_property_values
-- ----------------------------
DROP TABLE IF EXISTS `conversation_property_values`;
CREATE TABLE `conversation_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for conversation_types
-- ----------------------------
DROP TABLE IF EXISTS `conversation_types`;
CREATE TABLE `conversation_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT 2,
  `can_have_child` tinyint(255) NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of conversation_types
-- ----------------------------
INSERT INTO `conversation_types` VALUES (1, 'conversation', 0, 1, 0, NULL, NULL);
INSERT INTO `conversation_types` VALUES (2, 'message', 2, 0, 1, NULL, NULL);
INSERT INTO `conversation_types` VALUES (3, 'comment', 2, 0, 1, NULL, NULL);
INSERT INTO `conversation_types` VALUES (4, 'complaint', 2, 0, 1, NULL, NULL);
INSERT INTO `conversation_types` VALUES (5, 'rating', 2, 0, 1, NULL, NULL);

-- ----------------------------
-- Table structure for conversations
-- ----------------------------
DROP TABLE IF EXISTS `conversations`;
CREATE TABLE `conversations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of conversations
-- ----------------------------
INSERT INTO `conversations` VALUES (3, 2, '2019-07-06 07:55:27', '2019-07-06 07:55:27');
INSERT INTO `conversations` VALUES (4, 2, '2019-07-13 00:17:52', '2019-07-13 00:17:52');
INSERT INTO `conversations` VALUES (5, 2, '2019-07-13 21:33:30', '2019-07-13 21:33:30');
INSERT INTO `conversations` VALUES (6, 2, '2019-07-13 22:17:47', '2019-07-13 22:17:47');

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 97 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data
-- ----------------------------
INSERT INTO `data` VALUES (1, 1, NULL, NULL);
INSERT INTO `data` VALUES (2, 5, NULL, NULL);
INSERT INTO `data` VALUES (3, 6, NULL, NULL);
INSERT INTO `data` VALUES (8, 2, '2019-01-29 09:14:16', '2019-01-29 09:14:16');
INSERT INTO `data` VALUES (9, 2, '2019-01-29 09:15:13', '2019-01-29 09:15:13');
INSERT INTO `data` VALUES (37, 2, '2019-03-06 02:21:35', '2019-03-06 02:21:35');
INSERT INTO `data` VALUES (38, 3, NULL, NULL);
INSERT INTO `data` VALUES (39, 4, NULL, NULL);
INSERT INTO `data` VALUES (40, 2, '2019-03-31 00:44:00', '2019-03-31 00:44:00');
INSERT INTO `data` VALUES (41, 2, '2019-03-31 00:44:34', '2019-03-31 00:44:34');
INSERT INTO `data` VALUES (42, 2, '2019-03-31 00:44:59', '2019-03-31 00:44:59');
INSERT INTO `data` VALUES (43, 2, '2019-03-31 00:45:25', '2019-03-31 00:45:25');
INSERT INTO `data` VALUES (44, 2, '2019-03-31 00:45:51', '2019-03-31 00:45:51');
INSERT INTO `data` VALUES (45, 2, '2019-03-31 00:46:16', '2019-03-31 00:46:16');
INSERT INTO `data` VALUES (46, 2, '2019-03-31 00:46:40', '2019-03-31 00:46:40');
INSERT INTO `data` VALUES (47, 2, '2019-03-31 00:47:04', '2019-03-31 00:47:04');
INSERT INTO `data` VALUES (64, 7, NULL, NULL);
INSERT INTO `data` VALUES (65, 8, NULL, NULL);
INSERT INTO `data` VALUES (67, 10, '2019-04-24 18:17:55', '2019-04-24 18:17:55');
INSERT INTO `data` VALUES (68, 10, '2019-04-24 18:19:11', '2019-04-24 18:19:11');
INSERT INTO `data` VALUES (69, 10, '2019-04-28 06:01:40', '2019-04-28 06:01:40');
INSERT INTO `data` VALUES (70, 10, '2019-04-28 08:13:43', '2019-04-28 08:13:43');
INSERT INTO `data` VALUES (71, 10, '2019-04-28 08:14:43', '2019-04-28 08:14:43');
INSERT INTO `data` VALUES (94, 2, '2019-06-20 23:57:11', '2019-06-20 23:57:11');
INSERT INTO `data` VALUES (95, 8, '2019-06-23 01:24:11', '2019-06-23 01:24:11');
INSERT INTO `data` VALUES (96, 2, '2019-07-03 12:59:20', '2019-07-03 12:59:20');

-- ----------------------------
-- Table structure for data_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `data_assigned_properties`;
CREATE TABLE `data_assigned_properties`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(4000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 849 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_assigned_properties
-- ----------------------------
INSERT INTO `data_assigned_properties` VALUES (136, 8, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (138, 37, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (161, 8, 3, 'سوییت 65 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (162, 8, 5, ' پنج تخت ثابت و یک سرویس خواب اضافه (کاناپه دو نفره - سه سینگل - یک دبل) ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (163, 8, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (164, 8, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (165, 8, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (171, 37, 3, 'اتاق 40متري 3 نفره دو تخت سينگل نوع C', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (172, 37, 5, 'سه تخت ثابت و یک سرویس خواب اظاف (سه سینگل ویک کاناپه )', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (173, 37, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (174, 37, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (175, 37, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (176, 40, 3, 'اتاق 40متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (177, 40, 4, 'اول', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (178, 40, 5, 'دو تخت سینگل و یک سرویس خواب اظاف (کاناپه دو نفره) ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (179, 40, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (180, 40, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (181, 40, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (182, 41, 3, 'اتاق يك تخته دبل 2 نفره VIP اتاق 112', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (183, 41, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (184, 41, 5, 'یک تخت خواب دبل+یک کاناپه', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (185, 41, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (186, 41, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (187, 41, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (188, 42, 3, 'اتاق 55 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (189, 42, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (190, 42, 5, ' دو تخت دبل در دو اتاق مجزا ،یک کاناپه تک نفره ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (191, 42, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (192, 42, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (193, 42, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (194, 43, 3, 'اتاق 55 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (195, 43, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (196, 43, 5, 'تختهای داخل سالن و اتاقها به صورت یک تخت دبل و دو تا تخت سینگل می باشد', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (197, 43, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (198, 43, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (199, 43, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (200, 44, 3, 'اتاق 35 متري 3 نفره سه نفره نوع C', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (201, 44, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (202, 44, 5, ' تختهای داخل سالن و اتاقها به صورت دو نفره دبل می باشد.', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (203, 44, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (204, 44, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (205, 44, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (206, 45, 3, 'اتاق 35 متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (207, 45, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (208, 45, 5, ' * تختهای داخل سالن و به صورت دوتخت سینگل می باشد.', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (209, 45, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (210, 45, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (211, 45, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (212, 46, 3, 'اتاق 65 متري ويژه مديران اتاق 109', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (213, 46, 4, 'سوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (214, 46, 5, ' تخت خواب در اتاق خواب به صورت دبل و در سالن دو عدد تخت سینگل تخت خواب اظافه کاناپه ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (215, 46, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (216, 46, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (217, 46, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (218, 47, 3, 'اتاق 55 متري ويژه مديران اتاق 110', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (219, 47, 4, 'سوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (220, 47, 5, ' تختهای داخل سالن و اتاقها به صورت دو نفره دبل می باشد.', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (221, 47, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (222, 47, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (223, 47, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (225, 50, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (226, 51, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (227, 52, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (228, 53, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (229, 54, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (230, 54, 3, 'ff', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (231, 54, 4, 'اول', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (232, 54, 5, 'ffff', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (233, 54, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (234, 54, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (235, 54, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (236, 55, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (237, 59, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (238, 60, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (239, 61, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (240, 62, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (241, 62, 3, 'a', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (242, 62, 4, 'اول', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (243, 62, 5, 'aaa', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (244, 62, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (245, 62, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (246, 62, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (247, 2, 45, 'آلاچیق و کافی شاپ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (248, 2, 46, ' آلاچیق و کافی شاپ هتل سه ستاره صبوری رشت در فروردین ماه سال 1394 به بهره برداری رسید. این هتل در پنج طبقه بنا شده و دارای 12 واحد اقامتی است. هتل صبوری رشت با قرار گیری در استان سرسبز گیلان، میزبان گردشگران زیادی از نقاط مختلف می باشد. مهمانان گرامی می توانند با اقامت در هتل آپارتمان صبوری به نقاط مختلف شهر دسترسی آسانی داشته باشند. فاصله هتل سه ستاره صبوری رشت تا برخی اماکن تاریخی و مذهبی از جمله ساختمان تاریخی شهرداری سابق رشت و حرم مطهر حضرت فاطمه اخری، حدود سه کیلومتر می باشد که مزیت این هتل محسوب می شود. ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (249, 3, 47, 'رستوران و فست فود', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (250, 3, 48, 'رستوران و فست فود هتل سه ستاره صبوری رشت در فروردین ماه سال 1394 به بهره برداری رسید. این هتل در پنج طبقه بنا شده و دارای 12 واحد اقامتی است. هتل صبوری رشت با قرار گیری در استان سرسبز گیلان، میزبان گردشگران زیادی از نقاط مختلف می باشد. مهمانان گرامی می توانند با اقامت در هتل آپارتمان صبوری به نقاط مختلف شهر دسترسی آسانی داشته باشند. فاصله هتل سه ستاره صبوری رشت تا برخی اماکن تاریخی و مذهبی از جمله ساختمان تاریخی شهرداری سابق رشت و حرم مطهر حضرت فاطمه اخری، حدود سه کیلومتر می باشد که مزیت این هتل محسوب می شود. ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (252, 8, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (254, 37, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (255, 40, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (256, 41, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (257, 42, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (258, 43, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (259, 44, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (260, 45, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (261, 46, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (262, 47, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (268, 66, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (269, 66, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (271, 67, 57, 'kami@t.co', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (272, 67, 58, 'kami saberi', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (273, 67, 59, 'rasht', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (274, 67, 60, '09365982333', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (275, 68, 57, 'kami@t.co', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (276, 68, 58, 'kami saberi', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (277, 68, 59, 'rasht', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (278, 68, 60, '09365982333', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (279, 68, 61, 'this is a test', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (280, 69, 57, '', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (281, 69, 58, '', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (282, 69, 59, '', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (283, 69, 60, '', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (284, 69, 61, 'this is a test', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (285, 70, 57, 'kami@t.co', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (286, 70, 58, 'kami saberi', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (287, 70, 59, 'rasht', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (288, 70, 60, '09365982333', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (289, 70, 61, 'this is a test', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (290, 71, 57, 'ert', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (291, 71, 58, 'ertert', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (292, 71, 59, 'rtr', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (293, 71, 60, 'ert', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (294, 71, 61, 'this is a test', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (295, 72, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (579, 1, 20, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (580, 1, 21, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (581, 1, 1, 'هتل سه ستاره صبوری', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (582, 1, 2, 'نشانی: گیلان ، رشت ، خیابان رسالت (صداوسیما) ، رودبارتان پشت پمپ بنزین خطیبی ، روبروی پارک شهید گلستانی', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (583, 1, 19, 'هتل سه ستاره صبوری رشت در فروردین ماه سال 1394 به بهره برداری رسید. این هتل در پنج طبقه بنا شده و دارای 12 واحد اقامتی است. هتل صبوری رشت با قرار گیری در استان سرسبز گیلان، میزبان گردشگران زیادی از نقاط مختلف می باشد. مهمانان گرامی می توانند با اقامت در هتل آپارتمان صبوری به نقاط مختلف شهر دسترسی آسانی داشته باشند. فاصله هتل سه ستاره صبوری رشت تا برخی اماکن تاریخی و مذهبی از جمله ساختمان تاریخی شهرداری سابق رشت و حرم مطهر حضرت فاطمه اخری، حدود سه کیلومتر می باشد که مزیت این هتل محسوب می شود.', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (584, 1, 23, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (585, 1, 24, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (586, 1, 25, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (587, 1, 26, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (588, 1, 27, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (589, 1, 28, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (590, 1, 29, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (591, 1, 30, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (592, 1, 31, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (593, 1, 32, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (594, 1, 33, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (595, 1, 34, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (596, 1, 35, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (597, 1, 36, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (598, 1, 37, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (599, 1, 38, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (600, 1, 39, 'با ظرفیت 30 نفر', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (601, 1, 40, 'رایگان و نامحدود', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (602, 1, 41, 'با ظرفیت 40 خودرو', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (603, 1, 42, '7 طبقه', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (604, 1, 43, '12 اتاق', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (605, 1, 49, 'info@sabourihotel.ir', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (606, 1, 63, 'فریبرز صبوری ویشکایی', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (607, 39, 44, 'سامانه خصوصی رزرو هتل سه ستاره  صبوری، وبسایتی ایمن جهت رزرو آنلاین هتل صبوری می باشد، این امکان برای شما فراهم شده است که اتاق های هتل صبوری را با قیمتی به مراتب کمتر از برد اصلی و با تخفیف ویژه به صورت آنلاین رزرو کنید.', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (618, 88, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (619, 88, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (620, 88, 3, 'اتاق شماره  112000', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (621, 88, 4, 'همکف', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (622, 88, 5, 'سلام', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (623, 88, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (624, 88, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (625, 88, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (626, 89, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (627, 90, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (628, 91, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (629, 92, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (630, 92, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (631, 92, 3, 'tttt', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (632, 92, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (633, 92, 5, 'tttt', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (634, 92, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (635, 92, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (636, 92, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (637, 93, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (638, 93, 3, 'ttttt', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (639, 93, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (640, 93, 5, 'fvvv', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (641, 93, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (642, 93, 7, '0', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (643, 93, 11, '0', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (664, 65, 69, 'هتل صبوری', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (665, 65, 70, 'هتل سه ستاره صبوری', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (666, 65, 71, '49.605069', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (667, 65, 72, '37.276716', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (668, 65, 73, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (669, 95, 69, 'test', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (670, 95, 70, 'this is a test', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (671, 95, 71, '49.579670', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (672, 95, 72, '37.285303', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (673, 95, 73, '0', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (677, 64, 51, 'pk.eyJ1IjoiaG90ZWwtc2Fib3VyaSIsImEiOiJjanRiZXEzaTUwa3g3NDRudWRtYTVuanJoIn0.HzwDmQ5qSzX9Pm8-BCWz8w', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (678, 64, 52, 'mapbox', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (679, 64, 74, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (714, 38, 17, 'fa', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (715, 38, 56, 'هتل صبوری', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (716, 38, 64, 'gfhf', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (717, 38, 65, 'fgh', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (718, 38, 67, 'http://ggggggggg.com', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (719, 38, 68, 'http://gggggggggg.com', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (720, 38, 75, '<img class=\"responsive-img left\"  src=\"https://trustseal.enamad.ir/logo.aspx?id=123600&amp;p=QGD1iXxIbp7BR99k\" alt=\"\" onclick=\"window.open(&quot;https://trustseal.enamad.ir/Verify.aspx?id=123600&amp;p=QGD1iXxIbp7BR99k&quot;, &quot;Popup&quot;,&quot;toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30&quot;)\" style=\"cursor:pointer\" id=\"QGD1iXxIbp7BR99k\">', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (721, 38, 76, '<img class=\"responsive-img left\" id = \'jxlzwlaofukzwlaojzpeoeuk\' style = \'cursor:pointer\' onclick = \'window.open(\"https://logo.samandehi.ir/Verify.aspx?id=146478&p=rfthaodsgvkaaodsjyoemcsi\", \"Popup\",\"toolbar=no, scrollbars=no, location=no, statusbar=no, menubar=no, resizable=0, width=450, height=630, top=30\")\' alt = \'logo-samandehi\' src = \'https://logo.samandehi.ir/logo.aspx?id=146478&p=nbpdshwlwlbqshwlyndtaqgw\' />', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (722, 38, 77, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (763, 94, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (764, 94, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (765, 94, 3, '34324324234', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (766, 94, 4, 'سوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (767, 94, 5, 'sdadasdsad', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (768, 94, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (769, 94, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (770, 94, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (787, 96, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (788, 96, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (789, 96, 3, 'sdfsdf', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (790, 96, 4, 'دوم', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (791, 96, 5, 'xcvxcvxcvxcv', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (792, 96, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (793, 96, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (794, 96, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (840, 9, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (841, 9, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (842, 9, 3, 'سوییت 65 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (843, 9, 4, 'اول', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (844, 9, 5, 'چهار تخت ثابت و یک سرویس خواب اظاف (کاناپه دو نفره )-(سه سینگل -یک دبل )', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (845, 9, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (846, 9, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (847, 9, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (848, 9, 78, '4545345', NULL, NULL);

-- ----------------------------
-- Table structure for data_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `data_assigned_property_values`;
CREATE TABLE `data_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_assigned_property_values
-- ----------------------------
INSERT INTO `data_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (3, 469, '+98-911-254-6582', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (4, 469, '11111111111111', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (5, 470, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (6, 470, '222222222222222', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (7, 496, '+98-911-254-6582', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (8, 497, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (9, 523, '+98-911-254-6582', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (10, 524, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (11, 551, '+98-911-254-6582', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (12, 552, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (13, 579, '+98-911-254-6582', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (14, 580, '+98-13-333-55264~8', NULL, NULL);

-- ----------------------------
-- Table structure for data_properties
-- ----------------------------
DROP TABLE IF EXISTS `data_properties`;
CREATE TABLE `data_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NOT NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 79 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_properties
-- ----------------------------
INSERT INTO `data_properties` VALUES (1, 'name', '-', 'text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (2, 'address', '-', 'text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (3, 'title', '-', 'text', 1, 2, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (4, 'floor', '-', 'select', 1, 2, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (5, 'description', '-', 'text', 1, 2, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 01:06:52');
INSERT INTO `data_properties` VALUES (6, 'internet', '0', 'check', 2, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-02-17 22:38:55');
INSERT INTO `data_properties` VALUES (7, 'parking', '0', 'check', 2, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (8, 'Images', '-', 'multi-upload', 1, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 01:49:17');
INSERT INTO `data_properties` VALUES (9, 'active-days', '-', 'array-date', 3, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 01:49:48');
INSERT INTO `data_properties` VALUES (10, 'inactive-days', '-', 'array-date', 3, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 01:50:19');
INSERT INTO `data_properties` VALUES (11, 'available', '1', 'check', 1, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (17, 'base_locale', 'fa', 'select', 1, 3, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (18, 'locales', '', 'multi-check', 1, 0, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (19, 'description', '-', 'text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (20, 'phone', '-', 'multi-text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (21, 'mobile', '-', 'multi-text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (22, 'slide-images', '-', 'multi-relation-document-images', 1, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (23, 'mini-bar', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 13:57:02');
INSERT INTO `data_properties` VALUES (24, 'satellite-networks', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 13:56:22');
INSERT INTO `data_properties` VALUES (25, 'store', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (26, 'royal-curtains', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:14:52');
INSERT INTO `data_properties` VALUES (27, 'safe-box', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:22:58');
INSERT INTO `data_properties` VALUES (28, 'heater-package', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:24:14');
INSERT INTO `data_properties` VALUES (29, 'free-internet', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:15:37');
INSERT INTO `data_properties` VALUES (30, 'air-conditioner', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:28:58');
INSERT INTO `data_properties` VALUES (31, 'fire-alarm', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:29:58');
INSERT INTO `data_properties` VALUES (32, 'lobby-internet', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:16:35');
INSERT INTO `data_properties` VALUES (33, 'emergency-power', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:34:07');
INSERT INTO `data_properties` VALUES (34, 'taxi', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (35, 'tea-house', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:17:19');
INSERT INTO `data_properties` VALUES (36, 'room-service', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:36:57');
INSERT INTO `data_properties` VALUES (37, 'travel-agency', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:38:06');
INSERT INTO `data_properties` VALUES (38, 'lock', '0', 'check', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (39, 'fast-food-and-restaurant', '-', 'text', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:40:00');
INSERT INTO `data_properties` VALUES (40, 'lobby-internet-type', '-', 'text', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:41:59');
INSERT INTO `data_properties` VALUES (41, 'parking-capacity', '-', 'text', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:32:01');
INSERT INTO `data_properties` VALUES (42, 'floors-count', '-', 'text', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:43:01');
INSERT INTO `data_properties` VALUES (43, 'rooms-count', '-', 'text', 2, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, '2019-05-11 14:47:59');
INSERT INTO `data_properties` VALUES (44, 'description', '-', 'text', 1, 4, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (45, 'title', '-', 'text', 1, 5, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (46, 'description', '-', 'text', 1, 5, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (47, 'title', '-', 'text', 1, 6, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (48, 'description', '-', 'text', 1, 6, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (49, 'email', '-', 'text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (50, 'price', '0', 'single-relation-price', 1, 2, 0, 0, 'required:numeric', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (51, 'access-token', '0', 'text', 1, 7, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (52, 'title', '0', 'text', 1, 7, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (56, 'title', '-', 'text', 1, 3, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (57, 'email', '-', 'text', 1, 10, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (58, 'name', '-', 'text', 1, 10, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (59, 'location', '-', 'text', 1, 10, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (60, 'mobile', '-', 'text', 1, 10, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (61, 'content', '-', 'text', 1, 10, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (63, 'manager', '-', 'text', 1, 1, 0, 0, '', 0, 0, '', 0, 1, 0, '2019-05-13 00:37:35', '2019-05-13 00:37:35');
INSERT INTO `data_properties` VALUES (64, 'meta-description', '', 'text', 1, 3, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (65, 'meta-keywords', '', 'text', 1, 3, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (67, 'telegram-link', '', 'url', 1, 3, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (68, 'instagram-link', '', 'url', 1, 3, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (69, 'title', '', 'text', 1, 8, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (70, 'description', '', 'text', 1, 8, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (71, 'lng', '0', 'text', 1, 8, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (72, 'lat', '0', 'text', 1, 8, 0, 0, 'required', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (73, 'base-location', '0', 'check', 1, 8, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (74, 'draw-directions', '', 'check', 1, 7, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (75, 'enamad', '', 'code', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (76, 'samandehi', '', 'code', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (77, 'active-chat-system', '', 'check', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (78, 'content', '-', 'text', 1, 2, 0, 0, '', 0, 0, '', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for data_property_values
-- ----------------------------
DROP TABLE IF EXISTS `data_property_values`;
CREATE TABLE `data_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_property_values
-- ----------------------------
INSERT INTO `data_property_values` VALUES (8, 'fa', 17, NULL, NULL);
INSERT INTO `data_property_values` VALUES (9, 'en', 17, NULL, NULL);
INSERT INTO `data_property_values` VALUES (10, 'ar', 17, NULL, NULL);
INSERT INTO `data_property_values` VALUES (24, 'همکف', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `data_property_values` VALUES (25, 'اول', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `data_property_values` VALUES (26, 'دوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `data_property_values` VALUES (27, 'سوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT NULL,
  `can_have_child` tinyint(255) NULL DEFAULT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES (1, 'hotel', 1, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (2, 'room', 2, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (3, 'website', 1, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (4, 'application', 1, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (5, 'coffee-shop', 2, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (6, 'restaurant', 2, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (7, 'map', 1, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (8, 'map-location', 2, 0, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (9, 'conversation', 0, 1, 0, NULL, NULL);
INSERT INTO `data_types` VALUES (10, 'message', 2, 0, 9, NULL, NULL);
INSERT INTO `data_types` VALUES (11, 'comment', 2, 0, 9, NULL, NULL);

-- ----------------------------
-- Table structure for document_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `document_assigned_properties`;
CREATE TABLE `document_assigned_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `document` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 415 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_assigned_properties
-- ----------------------------
INSERT INTO `document_assigned_properties` VALUES (31, 24, 6, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (32, 24, 7, 'http://localhost/online-hotel/public/uploads/h1.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (33, 24, 8, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (34, 25, 6, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (35, 25, 7, 'http://localhost/online-hotel/public/uploads/h2.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (36, 25, 8, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (37, 26, 6, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (38, 26, 7, 'http://localhost/online-hotel/public/uploads/h3.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (39, 26, 8, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (40, 27, 6, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (41, 27, 7, 'http://localhost/online-hotel/public/uploads/h4.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (42, 27, 8, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (43, 33, 9, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (44, 33, 10, 'http://localhost/online-hotel/public/uploads/slider1.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (45, 33, 11, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (46, 34, 9, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (47, 34, 10, 'http://localhost/online-hotel/public/uploads/slider2.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (48, 34, 11, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (49, 32, 1, 'fffffffffffff', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (50, 32, 2, 'http://localhost/online-hotel/public/uploads/22c7f6a1ad2927cf0b09fda4e49db761305b410a.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (51, 32, 3, '1551586461137', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (52, 35, 9, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (53, 35, 10, 'http://localhost/online-hotel/public/uploads/slider3.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (54, 35, 11, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (67, 41, 4, 'http://localhost/online-hotel/public/uploads/room-001.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (68, 41, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (69, 42, 4, 'http://localhost/online-hotel/public/uploads/room-002.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (70, 42, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (71, 43, 4, 'http://localhost/online-hotel/public/uploads/room-003.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (72, 43, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (73, 44, 4, 'http://localhost/online-hotel/public/uploads/room-004.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (74, 44, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (75, 45, 4, 'http://localhost/online-hotel/public/uploads/room-005.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (76, 45, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (77, 56, 4, 'http://localhost/online-hotel/public/uploads/room-006.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (78, 56, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (79, 57, 4, 'http://localhost/online-hotel/public/uploads/room-007.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (80, 57, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (81, 58, 4, 'http://localhost/online-hotel/public/uploads/room-008.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (82, 56, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (83, 59, 4, 'http://localhost/online-hotel/public/uploads/room-009.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (84, 59, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (85, 60, 4, 'http://localhost/online-hotel/public/uploads/room-010.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (86, 60, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (87, 46, 4, 'http://localhost/online-hotel/public/uploads/room-011.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (88, 46, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (89, 47, 4, 'http://localhost/online-hotel/public/uploads/room-012.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (90, 47, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (91, 48, 4, 'http://localhost/online-hotel/public/uploads/room-013.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (92, 48, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (93, 49, 4, 'http://localhost/online-hotel/public/uploads/room-014.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (94, 49, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (95, 50, 4, 'http://localhost/online-hotel/public/uploads/room-015.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (96, 50, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (97, 51, 4, 'http://localhost/online-hotel/public/uploads/room-016.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (98, 51, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (99, 52, 4, 'http://localhost/online-hotel/public/uploads/room-017.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (100, 52, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (101, 53, 4, 'http://localhost/online-hotel/public/uploads/room-018.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (102, 53, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (103, 54, 4, 'http://localhost/online-hotel/public/uploads/room-019.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (104, 54, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (105, 55, 4, 'http://localhost/online-hotel/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (106, 55, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (107, 62, 4, 'http://localhost/online-hotel/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (108, 62, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (109, 63, 4, 'http://localhost/online-hotel/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (110, 63, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (111, 64, 4, 'http://localhost/online-hotel/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (112, 64, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (113, 65, 4, 'http://localhost/online-hotel/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (114, 65, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (127, 67, 16, 'check for service:1', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (128, 67, 17, 'http://localhost/online-hotel/public/uploads/checks/a7be7aae791a3bf5cb5457b9cfd8a73228246deb.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (129, 67, 18, '1557591779834', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (130, 68, 16, 'check for service:2', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (131, 68, 17, 'http://localhost/online-hotel/public/uploads/checks/9f86da404bc1f7505f7af7ab59265ecf01727441.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (132, 68, 18, '1557710240135', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (133, 69, 16, 'check for service:3', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (134, 69, 17, 'http://localhost/online-hotel/public/uploads/checks/34782c82d08c4160a50dcbffe42c581c7bdea893.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (135, 69, 18, '1557713079724', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (139, 70, 16, 'check for service:9', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (140, 70, 17, 'http://localhost/online-hotel/public/uploads/checks/e4ccc50fcc8e449a59e8c598050929fe5245e614.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (141, 70, 18, '1557962169967', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (152, 75, 31, 'این تست است', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (153, 75, 32, 'این یک صفحه تست بیشتر نیست', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (177, 79, 42, 'سلام', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (178, 79, 43, 'سلام. . تست است', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (183, 76, 35, 'امکانات', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (184, 76, 35, 'erewrewr', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (185, 76, 36, 'امکانات است', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (186, 76, 36, 'werewr', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (187, 76, 33, 'rulesssss', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (287, 84, 57, '-', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (288, 84, 54, '1', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (289, 84, 55, '2', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (290, 84, 56, '3', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (291, 84, 58, '<p>4</p>', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (292, 84, 59, '<p>5</p>', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (293, 84, 60, '<p>6</p>', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (294, 84, 61, '<p>7</p>', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (295, 86, 16, 'check for service:12', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (296, 86, 17, 'http://localhost/online-hotel/uploads/checks/c43421eba4c31150d32f8a64ceeb881b24c5ec0b.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (297, 86, 18, '1559905691484', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (298, 87, 16, 'check for service:14', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (299, 87, 17, 'http://localhost/online-hotel/uploads/checks/bf43a18870f97621c05e43a539416ffeb2e6b74c.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (300, 87, 18, '1559907621330', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (301, 88, 16, 'check for service:15', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (302, 88, 17, 'http://localhost/online-hotel/uploads/checks/c80aa98bdbc4d4d3bf98347c458bf4f7a954a4a2.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (303, 88, 18, '1559915121619', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (314, 93, 4, 'http://localhost/online-hotel/public/uploads/ae19a2adbdd14790d6e4af249a52d1b7dd6e8159.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (315, 93, 5, '1561007385855', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (331, 98, 2, '-', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (332, 98, 1, 'تصاویر اتاق ها', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (333, 98, 3, '1561349289683', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (334, 99, 2, '-', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (335, 99, 1, 'گالری 2', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (336, 99, 3, '1561353028014', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (351, 108, 73, 'ffffff', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (352, 108, 74, 'http://localhost/online-hotel/uploads/bbd2376e1d60bddce15bad98bfffb19542138cdf.swf', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (353, 108, 75, '1561449690713', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (354, 109, 73, 'fdg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (355, 109, 75, '1561449732674', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (361, 112, 16, 'check for service:23', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (362, 112, 17, 'http://localhost/online-hotel/uploads/checks/9eac2b16a2a3ca3024c5d1262871dd89b22faf65.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (363, 112, 18, '1561509647562', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (364, 113, 16, 'check for service:29', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (365, 113, 17, 'http://localhost/online-hotel/public/uploads/checks/a6924a7450fb8a4cefe846c624284f9ca6a6c2d4.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (366, 113, 18, '1561615569937', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (367, 114, 16, 'check for service:30', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (368, 114, 17, 'http://localhost/online-hotel/public/uploads/checks/96c5e473f24fdb5ea1b2b5bac3177bc642763088.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (369, 114, 18, '1561616419650', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (370, 115, 16, 'check for service:31', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (371, 115, 17, 'http://localhost/online-hotel/public/uploads/checks/a19958470c0a184dc18ffcb7924f22d66f913b6c.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (372, 115, 18, '1561616477062', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (373, 116, 16, 'check for service:32', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (374, 116, 17, 'http://localhost/online-hotel/public/uploads/checks/cc3a9e27606879b8ad452d6c660df2b189aacdc6.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (375, 116, 18, '1561617925101', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (376, 117, 16, 'check for service:33', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (377, 117, 17, 'http://localhost/online-hotel/public/uploads/checks/3cc4a11c92ced5bd2e20b8359b26ad191e8cfec9.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (378, 117, 18, '1561618163076', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (379, 118, 16, 'check for service:34', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (380, 118, 17, 'http://localhost/online-hotel/public/uploads/checks/be2faa492dbc319d671a44ea6f0a6a6d48ee2011.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (381, 118, 18, '1561618407091', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (382, 119, 16, 'check for service:36', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (383, 119, 17, 'http://localhost/online-hotel/public/uploads/checks/de0d247bd70d83d9fbab9c95e81eeec6d39d0f6a.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (384, 119, 18, '1561619156038', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (385, 120, 16, 'check for service:37', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (386, 120, 17, 'http://localhost/online-hotel/public/uploads/checks/a484c6553bc18d4330ec349ec7162ccf59336129.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (387, 120, 18, '1561619207881', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (388, 121, 16, 'check for service:42', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (389, 121, 17, 'http://localhost/online-hotel/uploads/checks/8ecad83ac7bee77315cc00ca0efc58b606179b27.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (390, 121, 18, '1561792451785', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (391, 122, 16, 'check for service:43', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (392, 122, 17, 'http://localhost/online-hotel/uploads/checks/cfa8f717346e0dfc38e16a3de9b214073fb270b1.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (393, 122, 18, '1561796839956', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (394, 123, 16, 'check for service:45', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (395, 123, 17, 'http://localhost/online-hotel/uploads/checks/a057bee424e2242cdc325c96617365b07baee3e8.jpeg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (396, 123, 18, '1561806356720', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (397, 124, 6, 'cvxxvxcv', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (398, 124, 7, 'http://localhost/online-hotel/uploads/5a051300a0d91f27a43577006e2d753a1c93a872.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (399, 124, 8, '1562545042457', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (400, 125, 4, 'http://localhost/online-hotel/uploads/b28d5acb14371040094f338572b45303707cba57.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (401, 125, 5, '1562545069179', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (402, 80, 44, 'یسبسبیبسیبسیب', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (403, 80, 45, '<p>یبسبیبسیبیسبی سیب سی سی س بسب سیب سیب سیب سیبسی سیب4 564 ب6س54یب6سی54ب 65سی4ب</p>', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (404, 126, 4, 'http://localhost/online-hotel/uploads/d6a39a2d9dfefb2f9ea23dec992c3d38f354beac.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (405, 126, 5, '1562930966152', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (406, 130, 70, 'hhh', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (407, 130, 71, 'http://localhost/online-hotel/uploads/9b1c56cfcdfbe68fdf87dd2279213c35e8aae60f.mp4', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (408, 130, 72, '1562966105217', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (409, 131, 16, 'check for service:63', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (410, 131, 17, 'http://localhost/online-hotel/uploads/checks/ef9e9bcb9ab0fc29c86cb21f42ad0a6e961ad073.jpeg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (411, 131, 18, '1563132630818', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (412, 132, 16, 'check for service:65', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (413, 132, 17, 'http://localhost/online-hotel/uploads/checks/7e2407120fba234a94d066f5aac6814e2c7d7e5a.jpeg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (414, 132, 18, '1563133705984', NULL, NULL);

-- ----------------------------
-- Table structure for document_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `document_assigned_property_values`;
CREATE TABLE `document_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_assigned_property_values
-- ----------------------------
INSERT INTO `document_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (3, 469, '+98-911-254-6582', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (4, 469, '11111111111111', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (5, 470, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (6, 470, '222222222222222', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (7, 496, '+98-911-254-6582', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (8, 497, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (9, 523, '+98-911-254-6582', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (10, 524, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (11, 551, '+98-911-254-6582', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (12, 552, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (13, 579, '+98-911-254-6582', NULL, NULL);
INSERT INTO `document_assigned_property_values` VALUES (14, 580, '+98-13-333-55264~8', NULL, NULL);

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
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NOT NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 80 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_properties
-- ----------------------------
INSERT INTO `document_properties` VALUES (1, 'title', '-', 'text', 1, 1, 0, 0, 'required', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (2, 'slide-images', '-', 'multi-relation-document-images', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (3, 'date', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (4, 'path', '-', 'file', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (5, 'date', '0', 'date', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (6, 'title', '-', 'text', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (7, 'path', '-', 'cropper', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (8, 'date', '0', 'date', 1, 3, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (9, 'title', '-', 'text', 1, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (10, 'path', '-', 'cropper', 1, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (11, 'date', '0', 'date', 1, 4, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (12, 'width', '1280', 'number', 1, 3, 1, 0, 'required', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (13, 'height', '720', 'number', 1, 3, 1, 0, 'required', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (14, 'width', '1280', 'number', 1, 4, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (15, 'height', '720', 'number', 1, 4, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (16, 'title', '-', 'text', 1, 9, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (17, 'path', '-', 'file', 1, 9, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (18, 'date', '0', 'date', 1, 9, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (19, 'width', '0', 'number', 1, 1, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (20, 'height', '0', 'number', 1, 1, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (21, 'width', '0', 'number', 1, 2, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (22, 'height', '0', 'number', 1, 2, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (23, 'page-title', '-', 'text', 1, 5, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (24, 'template', '-', 'select-template', 1, 5, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (31, 'title', '-', 'text', 1, 13, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-18 23:15:34', '2019-05-18 23:15:34');
INSERT INTO `document_properties` VALUES (32, 'content', '-', 'text', 1, 13, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-18 23:15:35', '2019-05-18 23:15:35');
INSERT INTO `document_properties` VALUES (33, 'title', '-', 'text', 1, 14, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-19 04:57:57', '2019-05-19 04:57:57');
INSERT INTO `document_properties` VALUES (34, 'rules', '-', 'array-text', 1, 14, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-19 04:57:57', '2019-05-19 04:57:57');
INSERT INTO `document_properties` VALUES (35, 'rules-title', '', 'text', 1, 14, 0, 0, '', 0, 0, 'direct', 0, 1, 34, NULL, NULL);
INSERT INTO `document_properties` VALUES (36, 'rules-content', '-', 'text', 1, 14, 0, 0, '', 0, 0, 'direct', 0, 1, 34, NULL, NULL);
INSERT INTO `document_properties` VALUES (37, 'navigation', '-', 'select-navigation', 1, 5, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (42, 'title', '-', 'text', 1, 17, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-21 02:16:19', '2019-05-21 02:16:19');
INSERT INTO `document_properties` VALUES (43, 'content', '-', 'text', 1, 17, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-21 02:16:19', '2019-05-21 02:16:19');
INSERT INTO `document_properties` VALUES (44, 'title', '-', 'text', 1, 18, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-21 08:03:25', '2019-05-21 08:03:25');
INSERT INTO `document_properties` VALUES (45, 'content', '-', 'summernote', 1, 18, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-21 08:03:25', '2019-05-21 08:03:25');
INSERT INTO `document_properties` VALUES (54, 'title', '', 'text', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_properties` VALUES (55, 'alt-title', '', 'text', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_properties` VALUES (56, 'sub-title', '', 'text', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_properties` VALUES (57, 'slide-images', '', 'multi-relation-document-images', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_properties` VALUES (58, 'headline', '', 'summernote', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_properties` VALUES (59, 'content', '', 'summernote', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_properties` VALUES (60, 'right-content', '', 'summernote', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:22', '2019-05-26 22:50:22');
INSERT INTO `document_properties` VALUES (61, 'left-content', '', 'summernote', 1, 20, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-26 22:50:22', '2019-05-26 22:50:22');
INSERT INTO `document_properties` VALUES (62, 'title', '-', 'text', 1, 21, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-27 00:56:25', '2019-05-27 00:56:25');
INSERT INTO `document_properties` VALUES (63, 'content', '-', 'summernote', 1, 21, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-27 00:56:25', '2019-05-27 00:56:25');
INSERT INTO `document_properties` VALUES (70, 'title', '-', 'text', 1, 22, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (71, 'path', '-', 'file', 1, 22, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (72, 'date', '0', 'date', 1, 22, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (73, 'title', '-', 'text', 1, 23, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (74, 'path', '-', 'file', 1, 23, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (75, 'date', '0', 'date', 1, 23, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `document_properties` VALUES (76, 'title', '-', 'text', 1, 25, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-07-12 19:14:02', '2019-07-12 19:14:02');
INSERT INTO `document_properties` VALUES (77, 'content', '-', 'text', 1, 25, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-07-12 19:14:02', '2019-07-12 19:14:02');
INSERT INTO `document_properties` VALUES (78, 'title', '-', 'text', 1, 26, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-07-12 20:47:33', '2019-07-12 20:47:33');
INSERT INTO `document_properties` VALUES (79, 'content', '-', 'text', 1, 26, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-07-12 20:47:33', '2019-07-12 20:47:33');

-- ----------------------------
-- Table structure for document_property_values
-- ----------------------------
DROP TABLE IF EXISTS `document_property_values`;
CREATE TABLE `document_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_property_values
-- ----------------------------
INSERT INTO `document_property_values` VALUES (8, 'fa', 17, NULL, NULL);
INSERT INTO `document_property_values` VALUES (9, 'en', 17, NULL, NULL);
INSERT INTO `document_property_values` VALUES (10, 'ar', 17, NULL, NULL);
INSERT INTO `document_property_values` VALUES (24, 'همکف', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `document_property_values` VALUES (25, 'اول', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `document_property_values` VALUES (26, 'دوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `document_property_values` VALUES (27, 'سوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');

-- ----------------------------
-- Table structure for document_types
-- ----------------------------
DROP TABLE IF EXISTS `document_types`;
CREATE TABLE `document_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT NULL,
  `can_have_child` tinyint(255) NULL DEFAULT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_types
-- ----------------------------
INSERT INTO `document_types` VALUES (1, 'gallery', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (2, 'general', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (3, 'main-slide-show', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (4, 'second-slide-show', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (5, 'pages', 0, 1, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (6, 'contact-us', 1, 0, 5, NULL, NULL);
INSERT INTO `document_types` VALUES (7, 'about-us', 1, 0, 5, NULL, NULL);
INSERT INTO `document_types` VALUES (8, 'rules', 1, 0, 5, NULL, NULL);
INSERT INTO `document_types` VALUES (9, 'check', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (10, 'complaints', 1, 0, 5, NULL, NULL);
INSERT INTO `document_types` VALUES (13, 'test-page-2', 1, 0, 5, '2019-05-18 23:15:34', '2019-05-18 23:15:34');
INSERT INTO `document_types` VALUES (14, 'test-page-3', 1, 0, 5, '2019-05-19 04:57:56', '2019-05-19 04:57:56');
INSERT INTO `document_types` VALUES (17, 'test-page-4', 1, 0, 5, '2019-05-21 02:16:19', '2019-05-21 02:16:19');
INSERT INTO `document_types` VALUES (18, 'test-page-5', 1, 0, 5, '2019-05-21 08:03:25', '2019-05-21 08:03:25');
INSERT INTO `document_types` VALUES (20, 'page-title-10', 1, 0, 5, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `document_types` VALUES (22, 'video', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (23, 'swf', 2, 0, 0, NULL, NULL);
INSERT INTO `document_types` VALUES (26, 'ddd', 1, 0, 5, '2019-07-12 20:47:33', '2019-07-12 20:47:33');

-- ----------------------------
-- Table structure for documents
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 133 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO `documents` VALUES (24, 3, NULL, NULL);
INSERT INTO `documents` VALUES (25, 3, NULL, NULL);
INSERT INTO `documents` VALUES (26, 3, NULL, NULL);
INSERT INTO `documents` VALUES (27, 3, NULL, NULL);
INSERT INTO `documents` VALUES (33, 4, NULL, NULL);
INSERT INTO `documents` VALUES (34, 4, NULL, NULL);
INSERT INTO `documents` VALUES (35, 4, NULL, NULL);
INSERT INTO `documents` VALUES (40, 6, NULL, NULL);
INSERT INTO `documents` VALUES (41, 2, NULL, NULL);
INSERT INTO `documents` VALUES (42, 2, NULL, NULL);
INSERT INTO `documents` VALUES (43, 2, NULL, NULL);
INSERT INTO `documents` VALUES (44, 2, NULL, NULL);
INSERT INTO `documents` VALUES (45, 2, NULL, NULL);
INSERT INTO `documents` VALUES (46, 2, NULL, NULL);
INSERT INTO `documents` VALUES (47, 2, NULL, NULL);
INSERT INTO `documents` VALUES (48, 2, NULL, NULL);
INSERT INTO `documents` VALUES (49, 2, NULL, NULL);
INSERT INTO `documents` VALUES (50, 2, NULL, NULL);
INSERT INTO `documents` VALUES (51, 2, NULL, NULL);
INSERT INTO `documents` VALUES (52, 2, NULL, NULL);
INSERT INTO `documents` VALUES (53, 2, NULL, NULL);
INSERT INTO `documents` VALUES (54, 2, NULL, NULL);
INSERT INTO `documents` VALUES (55, 2, NULL, NULL);
INSERT INTO `documents` VALUES (56, 2, NULL, NULL);
INSERT INTO `documents` VALUES (57, 2, NULL, NULL);
INSERT INTO `documents` VALUES (58, 2, NULL, NULL);
INSERT INTO `documents` VALUES (59, 2, NULL, NULL);
INSERT INTO `documents` VALUES (60, 2, NULL, NULL);
INSERT INTO `documents` VALUES (61, 7, NULL, NULL);
INSERT INTO `documents` VALUES (62, 2, NULL, NULL);
INSERT INTO `documents` VALUES (63, 2, NULL, NULL);
INSERT INTO `documents` VALUES (64, 2, NULL, NULL);
INSERT INTO `documents` VALUES (65, 2, NULL, NULL);
INSERT INTO `documents` VALUES (66, 8, NULL, NULL);
INSERT INTO `documents` VALUES (67, 9, '2019-05-11 16:22:59', '2019-05-11 16:22:59');
INSERT INTO `documents` VALUES (68, 9, '2019-05-13 01:17:19', '2019-05-13 01:17:19');
INSERT INTO `documents` VALUES (69, 9, '2019-05-13 02:04:39', '2019-05-13 02:04:39');
INSERT INTO `documents` VALUES (70, 9, '2019-05-15 23:16:09', '2019-05-15 23:16:09');
INSERT INTO `documents` VALUES (72, 10, NULL, NULL);
INSERT INTO `documents` VALUES (75, 13, '2019-05-18 23:15:34', '2019-05-18 23:15:34');
INSERT INTO `documents` VALUES (76, 14, '2019-05-19 04:57:57', '2019-05-19 04:57:57');
INSERT INTO `documents` VALUES (77, 15, '2019-05-21 01:59:27', '2019-05-21 01:59:27');
INSERT INTO `documents` VALUES (78, 16, '2019-05-21 01:59:44', '2019-05-21 01:59:44');
INSERT INTO `documents` VALUES (79, 17, '2019-05-21 02:16:19', '2019-05-21 02:16:19');
INSERT INTO `documents` VALUES (80, 18, '2019-05-21 08:03:25', '2019-05-21 08:03:25');
INSERT INTO `documents` VALUES (84, 20, '2019-05-26 22:50:21', '2019-05-26 22:50:21');
INSERT INTO `documents` VALUES (86, 9, '2019-06-07 11:08:11', '2019-06-07 11:08:11');
INSERT INTO `documents` VALUES (87, 9, '2019-06-07 11:40:21', '2019-06-07 11:40:21');
INSERT INTO `documents` VALUES (88, 9, '2019-06-07 13:45:21', '2019-06-07 13:45:21');
INSERT INTO `documents` VALUES (93, 2, '2019-06-20 05:09:45', '2019-06-20 05:09:45');
INSERT INTO `documents` VALUES (98, 1, '2019-06-24 04:08:09', '2019-06-24 04:08:09');
INSERT INTO `documents` VALUES (99, 1, '2019-06-24 05:10:27', '2019-06-24 05:10:27');
INSERT INTO `documents` VALUES (108, 23, '2019-06-25 08:01:30', '2019-06-25 08:01:30');
INSERT INTO `documents` VALUES (109, 23, '2019-06-25 08:02:12', '2019-06-25 08:02:12');
INSERT INTO `documents` VALUES (112, 9, '2019-06-26 00:40:47', '2019-06-26 00:40:47');
INSERT INTO `documents` VALUES (113, 9, '2019-06-27 06:06:09', '2019-06-27 06:06:09');
INSERT INTO `documents` VALUES (114, 9, '2019-06-27 06:20:19', '2019-06-27 06:20:19');
INSERT INTO `documents` VALUES (115, 9, '2019-06-27 06:21:16', '2019-06-27 06:21:16');
INSERT INTO `documents` VALUES (116, 9, '2019-06-27 06:45:24', '2019-06-27 06:45:24');
INSERT INTO `documents` VALUES (117, 9, '2019-06-27 06:49:22', '2019-06-27 06:49:22');
INSERT INTO `documents` VALUES (118, 9, '2019-06-27 06:53:26', '2019-06-27 06:53:26');
INSERT INTO `documents` VALUES (119, 9, '2019-06-27 07:05:55', '2019-06-27 07:05:55');
INSERT INTO `documents` VALUES (120, 9, '2019-06-27 07:06:47', '2019-06-27 07:06:47');
INSERT INTO `documents` VALUES (121, 9, '2019-06-29 07:14:10', '2019-06-29 07:14:10');
INSERT INTO `documents` VALUES (122, 9, '2019-06-29 08:27:19', '2019-06-29 08:27:19');
INSERT INTO `documents` VALUES (123, 9, '2019-06-29 11:05:56', '2019-06-29 11:05:56');
INSERT INTO `documents` VALUES (124, 3, '2019-07-08 00:17:22', '2019-07-08 00:17:22');
INSERT INTO `documents` VALUES (125, 2, '2019-07-08 00:17:49', '2019-07-08 00:17:49');
INSERT INTO `documents` VALUES (126, 2, '2019-07-12 11:29:26', '2019-07-12 11:29:26');
INSERT INTO `documents` VALUES (127, 24, '2019-07-12 19:08:24', '2019-07-12 19:08:24');
INSERT INTO `documents` VALUES (129, 26, '2019-07-12 20:47:33', '2019-07-12 20:47:33');
INSERT INTO `documents` VALUES (130, 22, '2019-07-12 21:15:05', '2019-07-12 21:15:05');
INSERT INTO `documents` VALUES (131, 9, '2019-07-14 19:30:30', '2019-07-14 19:30:30');
INSERT INTO `documents` VALUES (132, 9, '2019-07-14 19:48:25', '2019-07-14 19:48:25');

-- ----------------------------
-- Table structure for gateway_transactions
-- ----------------------------
DROP TABLE IF EXISTS `gateway_transactions`;
CREATE TABLE `gateway_transactions`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `port` enum('MELLAT','SADAD','ZARINPAL','PAYLINE','JAHANPAY','PARSIAN','PASARGAD','SAMAN','ASANPARDAKHT','PAYPAL','PAYIR') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `price` decimal(15, 2) NOT NULL,
  `ref_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `tracking_code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `card_number` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status` enum('INIT','SUCCEED','FAILED') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'INIT',
  `ip` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `payment_date` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `deleted_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 156313371307 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gateway_transactions
-- ----------------------------
INSERT INTO `gateway_transactions` VALUES (156312632928, 'SADAD', 1000.00, NULL, NULL, NULL, 'INIT', '::1', NULL, NULL, '2019-07-14 22:15:29', '2019-07-14 22:15:29', NULL);
INSERT INTO `gateway_transactions` VALUES (156313225843, 'SADAD', 1000.00, NULL, NULL, NULL, 'INIT', '::1', NULL, NULL, '2019-07-14 23:54:18', '2019-07-14 23:54:18', NULL);
INSERT INTO `gateway_transactions` VALUES (156313371306, 'SADAD', 1000.00, NULL, NULL, NULL, 'INIT', '::1', NULL, NULL, '2019-07-15 00:18:33', '2019-07-15 00:18:33', NULL);

-- ----------------------------
-- Table structure for gateway_transactions_logs
-- ----------------------------
DROP TABLE IF EXISTS `gateway_transactions_logs`;
CREATE TABLE `gateway_transactions_logs`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `result_code` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `result_message` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `log_date` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `gateway_transactions_logs_transaction_id_foreign`(`transaction_id`) USING BTREE,
  CONSTRAINT `gateway_transactions_logs_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `gateway_transactions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for jobs
-- ----------------------------
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED NULL DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `jobs_queue_index`(`queue`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_01_27_071850_create_data_types_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_01_27_081628_create_data_properties_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_01_27_082942_create_data_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_01_27_150306_create_data_assigned_properties_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_01_28_095358_create_user_types_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_01_28_100129_create_user_properties_table', 1);
INSERT INTO `migrations` VALUES (9, '2019_01_28_100220_create_user_assigned_properties_table', 1);
INSERT INTO `migrations` VALUES (10, '2019_01_28_182500_create_service_types_table', 2);
INSERT INTO `migrations` VALUES (11, '2019_01_28_183350_create_service_properties_table', 2);
INSERT INTO `migrations` VALUES (12, '2019_01_28_183413_create_services_table', 2);
INSERT INTO `migrations` VALUES (13, '2019_01_28_183507_create_service_assigned_properties_table', 2);
INSERT INTO `migrations` VALUES (14, '2019_02_06_182352_create_documents_table', 3);
INSERT INTO `migrations` VALUES (15, '2019_02_06_182444_create_document_types_table', 3);
INSERT INTO `migrations` VALUES (16, '2019_02_06_182512_create_document_properties_table', 3);
INSERT INTO `migrations` VALUES (17, '2019_02_06_182633_create_document_assigned_properties_table', 3);
INSERT INTO `migrations` VALUES (18, '2019_02_08_134600_create_relations_table', 4);
INSERT INTO `migrations` VALUES (19, '2019_02_08_134648_create_relation_types_table', 4);
INSERT INTO `migrations` VALUES (20, '2019_02_08_134718_create_relation_properties_table', 4);
INSERT INTO `migrations` VALUES (21, '2019_02_08_135607_create_realation_objects_table', 4);
INSERT INTO `migrations` VALUES (22, '2019_02_08_135637_create_realation_assigned_properties_table', 4);
INSERT INTO `migrations` VALUES (23, '2019_02_08_135657_create_object_types_table', 4);
INSERT INTO `migrations` VALUES (24, '2019_02_13_173619_create_communication_types_table', 5);
INSERT INTO `migrations` VALUES (25, '2019_02_13_173706_create_communications_table', 5);
INSERT INTO `migrations` VALUES (26, '2019_02_13_173726_create_communication_properties_table', 5);
INSERT INTO `migrations` VALUES (27, '2019_02_13_173833_create_communication_assigned_properties_table', 5);
INSERT INTO `migrations` VALUES (28, '2019_02_15_141319_create_navigations_table', 6);
INSERT INTO `migrations` VALUES (29, '2019_02_15_141449_create_navigation_items_table', 6);
INSERT INTO `migrations` VALUES (30, '2019_02_15_142353_create_navigation_item_properties_table', 6);
INSERT INTO `migrations` VALUES (31, '2019_02_15_142459_create_navigation_item_assigned_properties_table', 6);
INSERT INTO `migrations` VALUES (32, '2019_02_19_081802_create_procedures_table', 7);
INSERT INTO `migrations` VALUES (33, '2019_02_26_181325_create_data_property_values_table', 7);
INSERT INTO `migrations` VALUES (34, '2019_03_06_145336_create_translations_table', 7);
INSERT INTO `migrations` VALUES (35, '2019_05_27_115503_create_jobs_table', 8);
INSERT INTO `migrations` VALUES (36, '2019_05_28_082316_create_permission_tables', 9);
INSERT INTO `migrations` VALUES (40, '2016_05_02_193213_create_gateway_transactions_table', 10);
INSERT INTO `migrations` VALUES (41, '2016_05_02_193229_create_gateway_status_log_table', 10);
INSERT INTO `migrations` VALUES (42, '2017_04_05_103357_alter_id_in_transactions_table', 10);
INSERT INTO `migrations` VALUES (43, '2018_03_04_224213_add_description_to_gateway_transactions', 10);

-- ----------------------------
-- Table structure for model_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_permissions_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for model_has_roles
-- ----------------------------
DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles`  (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`, `model_id`, `model_type`) USING BTREE,
  INDEX `model_has_roles_model_id_model_type_index`(`model_id`, `model_type`) USING BTREE,
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of model_has_roles
-- ----------------------------
INSERT INTO `model_has_roles` VALUES (1, 'App\\User', 1);
INSERT INTO `model_has_roles` VALUES (2, 'App\\User', 109);
INSERT INTO `model_has_roles` VALUES (4, 'App\\User', 106);

-- ----------------------------
-- Table structure for navigation_item_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `navigation_item_assigned_properties`;
CREATE TABLE `navigation_item_assigned_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `navigation_item` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 310 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigation_item_assigned_properties
-- ----------------------------
INSERT INTO `navigation_item_assigned_properties` VALUES (1, 1, 1, 'dashboard', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (2, 1, 2, 'admin.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (3, 2, 1, 'rooms', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (4, 2, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (5, 2, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (6, 2, 4, 'room', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (7, 3, 1, 'users', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (8, 3, 2, 'users.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (9, 3, 3, 'user_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (10, 3, 4, 'user', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (11, 4, 1, 'customers', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (12, 4, 2, 'users.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (13, 4, 3, 'user_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (14, 4, 4, 'customer', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (15, 5, 1, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (16, 5, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (17, 5, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (18, 5, 4, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (19, 6, 1, 'home', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (20, 6, 2, 'home.index2', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (21, 7, 1, 'rooms', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (22, 7, 2, 'home.data', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (23, 7, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (24, 7, 4, 'room', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (25, 8, 1, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (26, 8, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (27, 8, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (28, 8, 4, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (29, 9, 1, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (30, 9, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (31, 9, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (32, 9, 4, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (33, 10, 1, 'navigation', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (34, 10, 2, 'navigation.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (37, 11, 1, 'room properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (38, 11, 2, 'data.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (39, 11, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (40, 11, 4, 'room', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (41, 12, 1, 'reserve', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (42, 12, 2, 'services.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (43, 12, 3, 'service_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (44, 12, 4, 'reserve', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (45, 13, 1, 'offer', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (46, 13, 2, 'relations.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (47, 13, 3, 'relation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (48, 13, 4, 'offer', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (49, 14, 1, 'main slide show', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (50, 14, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (51, 14, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (52, 14, 4, 'main-slide-show', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (53, 15, 1, 'second slide show', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (54, 15, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (55, 15, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (56, 15, 4, 'second-slide-show', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (57, 16, 1, 'homepage', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (58, 16, 2, 'home.index2', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (61, 17, 1, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (62, 17, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (63, 17, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (64, 17, 4, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (65, 18, 1, 'contact us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (66, 18, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (67, 18, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (68, 18, 4, 'contact-us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (73, 20, 1, 'website settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (74, 20, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (75, 20, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (76, 20, 4, 'website', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (77, 21, 1, 'rules', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (78, 21, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (79, 21, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (80, 21, 4, 'rules', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (81, 22, 1, 'contact us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (82, 22, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (83, 22, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (84, 22, 4, 'contact-us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (85, 23, 1, 'rooms', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (86, 23, 2, 'home.data', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (87, 23, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (88, 23, 4, 'room', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (89, 24, 1, 'about us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (90, 24, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (91, 24, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (92, 24, 4, 'about-us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (93, 25, 1, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (94, 25, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (95, 25, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (96, 25, 4, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (97, 26, 1, 'coffee shop', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (98, 26, 2, 'home.data', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (99, 26, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (100, 26, 4, 'coffee-shop', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (101, 27, 1, 'restaurant', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (102, 27, 2, 'home.data', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (103, 27, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (104, 27, 4, 'restaurant', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (121, 1, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (122, 2, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (123, 3, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (124, 4, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (125, 5, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (126, 6, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (127, 7, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (128, 8, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (129, 9, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (130, 10, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (131, 11, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (132, 12, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (133, 13, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (134, 14, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (135, 15, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (136, 16, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (137, 17, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (138, 18, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (139, 20, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (140, 21, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (141, 22, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (142, 23, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (143, 24, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (144, 25, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (145, 26, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (146, 27, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (147, 28, 1, 'hotel settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (148, 28, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (149, 28, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (150, 28, 4, 'hotel', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (151, 28, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (152, 29, 1, 'media', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (153, 29, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (154, 29, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (155, 29, 4, 'general', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (156, 30, 1, 'hotel properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (157, 30, 2, 'data.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (158, 30, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (159, 30, 4, 'hotel', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (160, 30, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (161, 31, 1, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (162, 31, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (163, 31, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (164, 31, 4, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (165, 31, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (166, 32, 1, 'user properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (167, 32, 2, 'users.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (168, 32, 3, 'user_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (169, 32, 4, 'user', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (170, 32, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (171, 33, 1, 'customer properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (172, 33, 2, 'users.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (173, 33, 3, 'user_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (174, 33, 4, 'customer', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (175, 33, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (176, 34, 1, 'reserve properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (177, 34, 2, 'services.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (178, 34, 3, 'service_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (179, 34, 4, 'reserve', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (180, 34, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (181, 35, 1, 'application settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (182, 35, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (183, 35, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (184, 35, 4, 'application', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (185, 35, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (186, 29, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (187, 36, 1, 'pages', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (188, 36, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (189, 36, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (190, 36, 4, 'pages', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (191, 36, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (197, 38, 1, 'test page 4', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (198, 38, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (199, 38, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (200, 38, 4, 'test-page-4', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (201, 38, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (202, 39, 1, 'messages', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (203, 39, 2, 'conversations.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (204, 39, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (205, 39, 4, 'message', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (206, 39, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (207, 40, 1, 'message properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (208, 40, 2, 'conversations.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (209, 40, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (210, 40, 4, 'message', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (211, 40, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (212, 41, 1, 'comments', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (213, 41, 2, 'conversations.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (214, 41, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (215, 41, 4, 'comment', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (216, 41, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (217, 42, 1, 'comment properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (218, 42, 2, 'conversations.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (219, 42, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (220, 42, 4, 'comment', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (221, 42, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (222, 43, 1, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (223, 43, 2, 'conversations.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (224, 43, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (225, 43, 4, 'complaint', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (226, 43, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (227, 44, 1, 'complaint properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (228, 44, 2, 'conversations.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (229, 44, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (230, 44, 4, 'complaint', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (231, 44, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (232, 45, 1, 'ratings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (233, 45, 2, 'conversations.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (234, 45, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (235, 45, 4, 'rating', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (236, 45, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (237, 46, 1, 'rating properties', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (238, 46, 2, 'conversations.properties.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (239, 46, 3, 'conversation_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (240, 46, 4, 'rating', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (241, 46, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (249, 48, 1, 'test page 10', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (250, 48, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (251, 48, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (252, 48, 4, 'page-title-10', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (253, 48, 9, '0', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (254, 49, 1, 'permissions', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (255, 49, 2, 'permissions.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (256, 49, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (257, 50, 1, 'home', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (258, 50, 2, 'home.index2', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (259, 51, 1, 'rooms', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (260, 51, 2, 'home.data', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (261, 51, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (262, 51, 4, 'room', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (263, 52, 1, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (264, 52, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (265, 52, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (266, 52, 4, 'gallery', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (267, 53, 1, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (268, 53, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (269, 53, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (270, 53, 4, 'complaints', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (271, 50, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (272, 51, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (273, 52, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (274, 53, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (275, 54, 1, 'contact us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (276, 54, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (277, 54, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (278, 54, 4, 'contact-us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (279, 54, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (280, 55, 1, 'about us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (281, 55, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (282, 55, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (283, 55, 4, 'about-us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (284, 55, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (285, 56, 1, 'maps', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (286, 56, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (287, 56, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (288, 56, 4, 'map', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (289, 57, 1, 'map locations', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (290, 57, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (291, 57, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (292, 57, 4, 'map-location', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (293, 56, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (294, 57, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (295, 58, 1, 'Video', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (296, 58, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (297, 58, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (298, 58, 4, 'video', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (299, 58, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (300, 59, 1, 'swf', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (301, 59, 2, 'documents.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (302, 59, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (303, 59, 4, 'swf', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (304, 59, 9, '1', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (305, 60, 1, 'external chat system', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (306, 60, 2, 'communications.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (307, 60, 3, 'comunication_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (308, 60, 4, 'external-chat-system', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (309, 60, 9, '1', NULL, NULL);

-- ----------------------------
-- Table structure for navigation_item_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `navigation_item_assigned_property_values`;
CREATE TABLE `navigation_item_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigation_item_assigned_property_values
-- ----------------------------
INSERT INTO `navigation_item_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (3, 469, '+98-911-254-6582', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (4, 469, '11111111111111', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (5, 470, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (6, 470, '222222222222222', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (7, 496, '+98-911-254-6582', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (8, 497, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (9, 523, '+98-911-254-6582', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (10, 524, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (11, 551, '+98-911-254-6582', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (12, 552, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (13, 579, '+98-911-254-6582', NULL, NULL);
INSERT INTO `navigation_item_assigned_property_values` VALUES (14, 580, '+98-13-333-55264~8', NULL, NULL);

-- ----------------------------
-- Table structure for navigation_item_properties
-- ----------------------------
DROP TABLE IF EXISTS `navigation_item_properties`;
CREATE TABLE `navigation_item_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `navigation` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(255) NULL DEFAULT 0,
  `link_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigation_item_properties
-- ----------------------------
INSERT INTO `navigation_item_properties` VALUES (1, 'title', '-', 'text', 1, 1, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (2, 'route', '', 'text', 1, 1, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (3, 'key', '', 'text', 1, 1, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (4, 'value', '', 'text', 1, 1, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (5, 'title', '-', 'text', 1, 2, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (6, 'route', '', 'text', 1, 2, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (7, 'key', '', 'text', 1, 2, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (8, 'value', '', 'text', 1, 2, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (9, 'enabled', '', 'check', 1, 1, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (10, 'enabled', '', 'check', 1, 2, 0, 'route', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (11, 'title', '', 'text', 1, 1, 0, 'url', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (12, 'url', '', 'text', 1, 1, 0, 'url', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (13, 'enabled', '', 'check', 1, 1, 0, 'url', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (14, 'max-navigation-items', '0', 'number', 1, 1, 1, '-', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (15, 'max-navigation-items', '4', 'number', 1, 2, 1, '-', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (16, 'max-navigation-items', '3', 'number', 1, 3, 1, '-', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (17, 'max-navigation-items', '10', 'number', 1, 4, 1, '-', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (18, 'max-navigation-items', '2', 'number', 1, 5, 1, '-', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (19, 'max-navigation-items', '0', 'number', 1, 6, 1, '-', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for navigation_item_property_values
-- ----------------------------
DROP TABLE IF EXISTS `navigation_item_property_values`;
CREATE TABLE `navigation_item_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigation_item_property_values
-- ----------------------------
INSERT INTO `navigation_item_property_values` VALUES (8, 'fa', 17, NULL, NULL);
INSERT INTO `navigation_item_property_values` VALUES (9, 'en', 17, NULL, NULL);
INSERT INTO `navigation_item_property_values` VALUES (10, 'ar', 17, NULL, NULL);
INSERT INTO `navigation_item_property_values` VALUES (24, 'همکف', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `navigation_item_property_values` VALUES (25, 'اول', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `navigation_item_property_values` VALUES (26, 'دوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');
INSERT INTO `navigation_item_property_values` VALUES (27, 'سوم', 4, '2019-05-11 01:05:47', '2019-05-11 01:05:47');

-- ----------------------------
-- Table structure for navigation_items
-- ----------------------------
DROP TABLE IF EXISTS `navigation_items`;
CREATE TABLE `navigation_items`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `navigation` int(10) UNSIGNED NOT NULL,
  `link_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigation_items
-- ----------------------------
INSERT INTO `navigation_items` VALUES (1, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (2, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (3, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (4, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (5, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (6, 2, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (7, 2, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (8, 2, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (9, 2, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (10, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (11, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (12, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (13, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (14, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (15, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (16, 3, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (17, 3, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (18, 3, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (20, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (21, 4, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (22, 4, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (23, 4, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (24, 4, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (25, 4, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (26, 5, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (27, 5, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (28, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (29, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (30, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (31, 4, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (32, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (33, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (34, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (35, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (36, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (38, 4, 'route', 0, '2019-05-21 02:16:20', '2019-05-21 02:16:20');
INSERT INTO `navigation_items` VALUES (39, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (40, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (41, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (42, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (43, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (44, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (45, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (46, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (48, 5, 'route', 0, '2019-05-26 23:10:35', '2019-05-26 23:10:35');
INSERT INTO `navigation_items` VALUES (49, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (50, 6, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (51, 6, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (52, 6, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (53, 6, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (54, 6, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (55, 6, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (56, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (57, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (58, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (59, 1, 'route', 0, NULL, NULL);
INSERT INTO `navigation_items` VALUES (60, 1, 'route', 0, NULL, NULL);

-- ----------------------------
-- Table structure for navigations
-- ----------------------------
DROP TABLE IF EXISTS `navigations`;
CREATE TABLE `navigations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT 2,
  `can_have_child` tinyint(255) NULL DEFAULT 0,
  `parent` int(255) NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigations
-- ----------------------------
INSERT INTO `navigations` VALUES (1, 'admin', 2, 0, 0, NULL, NULL);
INSERT INTO `navigations` VALUES (2, 'public', 2, 0, 0, NULL, NULL);
INSERT INTO `navigations` VALUES (3, 'index', 2, 0, 0, NULL, NULL);
INSERT INTO `navigations` VALUES (4, 'useful-links', 2, 0, 0, NULL, NULL);
INSERT INTO `navigations` VALUES (5, 'facility-links', 2, 0, 0, NULL, NULL);
INSERT INTO `navigations` VALUES (6, 'mobile', 2, 0, 0, NULL, NULL);

-- ----------------------------
-- Table structure for object_types
-- ----------------------------
DROP TABLE IF EXISTS `object_types`;
CREATE TABLE `object_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of object_types
-- ----------------------------
INSERT INTO `object_types` VALUES (1, 'data', NULL, NULL);
INSERT INTO `object_types` VALUES (2, 'user', NULL, NULL);
INSERT INTO `object_types` VALUES (3, 'service', NULL, NULL);
INSERT INTO `object_types` VALUES (4, 'document', NULL, NULL);
INSERT INTO `object_types` VALUES (5, 'relation', NULL, NULL);
INSERT INTO `object_types` VALUES (6, 'data_assigned_property', NULL, NULL);
INSERT INTO `object_types` VALUES (7, 'service_assigned_property', NULL, NULL);
INSERT INTO `object_types` VALUES (8, 'user_assigned_property', NULL, NULL);
INSERT INTO `object_types` VALUES (9, 'document_assigned_property', NULL, NULL);
INSERT INTO `object_types` VALUES (10, 'conversation', NULL, NULL);
INSERT INTO `object_types` VALUES (11, 'conversation_assigned_property', NULL, NULL);
INSERT INTO `object_types` VALUES (12, 'commuincation', NULL, NULL);
INSERT INTO `object_types` VALUES (13, 'commuincation_assigned_property', NULL, NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `dependent_on` int(255) NULL DEFAULT 0,
  `accessible_by_role` int(255) NULL DEFAULT 1,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 392 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES (1, 'data.index:room', 'web', 'access items', 'room', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (2, 'data.show:room', 'web', '-', 'room', 1, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (3, 'data.create:room', 'web', 'create new item', 'room', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (4, 'data.store:room', 'web', '-', 'room', 3, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (5, 'data.edit:room', 'web', 'edit items', 'room', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (6, 'data.update:room', 'web', '-', 'room', 5, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (7, 'data.destroy:room', 'web', 'delete item', 'room', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (8, 'data.index:hotel', 'web', 'access items', 'hotel', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (9, 'data.show:hotel', 'web', '-', 'hotel', 8, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (10, 'data.create:hotel', 'web', 'create new item', 'hotel', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (11, 'data.store:hotel', 'web', '-', 'hotel', 10, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (12, 'data.edit:hotel', 'web', 'edit items', 'hotel', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (13, 'data.update:hotel', 'web', '-', 'hotel', 12, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (14, 'data.destroy:hotel', 'web', 'delete item', 'hotel', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (15, 'data.index:website', 'web', 'access items', 'website', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (16, 'data.show:website', 'web', '-', 'website', 15, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (17, 'data.create:website', 'web', 'create new item', 'website', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (18, 'data.store:website', 'web', '-', 'website', 17, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (19, 'data.edit:website', 'web', 'edit items', 'website', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (20, 'data.update:website', 'web', '-', 'website', 19, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (21, 'data.destroy:website', 'web', 'delete item', 'website', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (22, 'data.index:application', 'web', 'access items', 'application', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (23, 'data.show:application', 'web', '-', 'application', 22, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (24, 'data.create:appliation', 'web', 'create new item', 'application', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (25, 'data.store:application', 'web', '-', 'application', 24, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (26, 'data.edit:application', 'web', 'edit items', 'application', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (27, 'data.update:application', 'web', '-', 'application', 26, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (28, 'data.destroy:application', 'web', 'delete item', 'application', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (29, 'data.properties.index:room', 'web', 'access properties', 'room', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (30, 'data.properties.show:room', 'web', '-', 'room', 29, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (31, 'data.properties.create:room', 'web', 'create new property', 'room', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (32, 'data.properties.store:room', 'web', '-', 'room', 31, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (33, 'data.properties.edit:room', 'web', 'edit properties', 'room', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (34, 'data.properties.update:room', 'web', '-', 'room', 33, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (35, 'data.properties.destroy:room', 'web', 'delete property', 'room', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (36, 'data.properties.index:hotel', 'web', 'access properties', 'hotel', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (37, 'data.properties.show:hotel', 'web', '-', 'hotel', 36, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (38, 'data.properties.create:hotel', 'web', 'create new property', 'hotel', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (39, 'data.properties.store:hotel', 'web', '-', 'hotel', 38, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (40, 'data.properties.edit:hotel', 'web', 'edit properties', 'hotel', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (41, 'data.properties.update:hotel', 'web', '-', 'hotel', 40, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (42, 'data.properties.destroy:hotel', 'web', 'delete property', 'hotel', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (43, 'data.properties.index:website', 'web', 'access properties', 'website', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (44, 'data.properties.show:website', 'web', '-', 'website', 43, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (45, 'data.properties.create:website', 'web', 'create new property', 'website', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (46, 'data.properties.store:website', 'web', '-', 'website', 45, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (47, 'data.properties.edit:website', 'web', 'edit properties', 'website', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (48, 'data.properties.update:website', 'web', '-', 'website', 47, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (49, 'data.properties.destroy:website', 'web', 'delete property', 'website', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (50, 'data.properties.index:application', 'web', 'access properties', 'application', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (51, 'data.properties.show:application', 'web', '-', 'application', 50, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (52, 'data.properties.create:application', 'web', 'create new property', 'application', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (53, 'data.properties.store:application', 'web', '-', 'application', 52, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (54, 'data.properties.edit:application', 'web', 'edit properties', 'application', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (55, 'data.properties.update:application', 'web', '-', 'application', 54, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (56, 'data.properties.destroy:application', 'web', 'delete property', 'application', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (57, 'data.settings:room', 'web', 'access settings', 'room', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (58, 'data.settings.update:room', 'web', '-', 'room', 57, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (59, 'data.settings:hotel', 'web', 'access settings', 'hotel', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (60, 'data.settings.update:hotel', 'web', '-', 'hotel', 59, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (61, 'data.settings:website', 'web', 'access settings', 'website', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (62, 'data.settings.update:website', 'web', '-', 'website', 61, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (63, 'data.settings:application', 'web', 'access settings', 'application', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (64, 'data.settings.update:application', 'web', '-', 'application', 63, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (65, 'users.index:user', 'web', 'access items', 'user', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (66, 'users.show:user', 'web', '-', 'user', 65, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (67, 'users.create:user', 'web', 'create new item', 'user', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (68, 'users.store:user', 'web', '-', 'user', 67, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (69, 'users.edit:user', 'web', 'edit items', 'user', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (70, 'users.update:user', 'web', '-', 'user', 69, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (71, 'users.destroy:user', 'web', 'delete item', 'user', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (72, 'users.index:customer', 'web', 'access items', 'customer', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (73, 'users.show:customer', 'web', '-', 'customer', 72, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (74, 'users.create:customer', 'web', 'create new item', 'customer', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (75, 'users.store:customer', 'web', '-', 'customer', 74, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (76, 'users.edit:customer', 'web', 'edit items', 'customer', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (77, 'users.update:customer', 'web', '-', 'customer', 76, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (78, 'users.destroy:customer', 'web', 'delete item', 'customer', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (79, 'users.properties.index:user', 'web', 'access properties', 'user', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (80, 'users.properties.show:user', 'web', '-', 'user', 79, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (81, 'users.properties.create:user', 'web', 'create new property', 'user', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (82, 'users.properties.store:user', 'web', '-', 'user', 81, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (83, 'users.properties.edit:user', 'web', 'edit properties', 'user', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (84, 'users.properties.update:user', 'web', '-', 'user', 83, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (85, 'users.properties.destroy:user', 'web', 'delete property', 'user', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (86, 'users.properties.index:customer', 'web', 'access properties', 'customer', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (87, 'users.properties.show:customer', 'web', '-', 'customer', 86, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (88, 'users.properties.create:customer', 'web', 'create new property', 'customer', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (89, 'users.properties.store:customer', 'web', '-', 'customer', 88, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (90, 'users.properties.edit:customer', 'web', 'edit properties', 'customer', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (91, 'users.properties.update:customer', 'web', '-', 'customer', 90, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (92, 'users.properties.destroy:customer', 'web', 'delete property', 'customer', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (93, 'users.settings:user', 'web', 'access settings', 'user', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (94, 'users.settings.update:user', 'web', '-', 'user', 93, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (95, 'users.settings:customer', 'web', 'access settings', 'customer', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (96, 'users.settings.update:customer', 'web', '-', 'customer', 95, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (97, 'documents.index:general', 'web', 'access items', 'media', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (98, 'documents.show:general', 'web', '-', 'media', 97, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (99, 'documents.create:general', 'web', 'create new item', 'media', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (100, 'documents.store:general', 'web', '-', 'media', 99, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (101, 'documents.edit:general', 'web', 'edit items', 'media', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (102, 'documents.update:general', 'web', '-', 'media', 101, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (103, 'documents.destroy:general', 'web', 'delete item', 'media', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (104, 'documents.index:gallery', 'web', 'access items', 'gallery', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (105, 'documents.show:gallery', 'web', '-', 'gallery', 104, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (106, 'documents.create:gallery', 'web', 'create new item', 'gallery', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (107, 'documents.store:gallery', 'web', '-', 'gallery', 106, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (108, 'documents.edit:gallery', 'web', 'edit items', 'gallery', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (109, 'documents.update:gallery', 'web', '-', 'gallery', 108, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (110, 'documents.destroy:gallery', 'web', 'delete item', 'gallery', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (111, 'documents.index:main-slide-show', 'web', 'access items', 'main slide show', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (112, 'documents.show:main-slide-show', 'web', '-', 'main slide show', 111, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (113, 'documents.create:main-slide-show', 'web', 'create new item', 'main slide show', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (114, 'documents.store:main-slide-show', 'web', '-', 'main slide show', 113, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (115, 'documents.edit:main-slide-show', 'web', 'edit items', 'main slide show', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (116, 'documents.update:main-slide-show', 'web', '-', 'main slide show', 115, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (117, 'documents.destroy:main-slide-show', 'web', 'delete item', 'main slide show', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (118, 'documents.index:second-slide-show', 'web', 'access items', 'second slide show', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (119, 'documents.show:second-slide-show', 'web', '-', 'second slide show', 118, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (120, 'documents.create:second-slide-show', 'web', 'create new item', 'second slide show', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (121, 'documents.store:second-slide-show', 'web', '-', 'second slide show', 120, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (122, 'documents.edit:second-slide-show', 'web', 'edit items', 'second slide show', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (123, 'documents.update:second-slide-show', 'web', '-', 'second slide show', 122, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (124, 'documents.destroy:second-slide-show', 'web', 'delete item', 'second slide show', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (125, 'documents.index:pages', 'web', 'access items', 'pages', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (126, 'documents.show:pages', 'web', '-', 'pages', 125, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (127, 'documents.create:pages', 'web', 'create new item', 'pages', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (128, 'documents.store:pages', 'web', '-', 'pages', 127, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (129, 'documents.edit:pages', 'web', 'edit items', 'pages', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (130, 'documents.update:pages', 'web', '-', 'pages', 129, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (131, 'documents.destroy:pages', 'web', 'delete item', 'pages', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (132, 'documents.properties.index:general', 'web', 'access properties', 'media', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (133, 'documents.properties.show:general', 'web', '-', 'media', 132, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (134, 'documents.properties.create:general', 'web', 'create new property', 'media', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (135, 'documents.properties.store:general', 'web', '-', 'media', 134, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (136, 'documents.properties.edit:general', 'web', 'edit properties', 'media', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (137, 'documents.properties.update:general', 'web', '-', 'media', 136, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (138, 'documents.properties.destroy:general', 'web', 'delete property', 'media', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (139, 'documents.properties.index:gallery', 'web', 'access properties', 'gallery', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (140, 'documents.properties.show:gallery', 'web', '-', 'gallery', 139, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (141, 'documents.properties.create:gallery', 'web', 'create new property', 'gallery', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (142, 'documents.properties.store:gallery', 'web', '-', 'gallery', 141, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (143, 'documents.properties.edit:gallery', 'web', 'edit properties', 'gallery', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (144, 'documents.properties.update:gallery', 'web', '-', 'gallery', 143, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (145, 'documents.properties.destroy:gallery', 'web', 'delete property', 'gallery', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (146, 'documents.properties.index:main-slide-show', 'web', 'access properties', 'main slide show', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (147, 'documents.properties.show:main-slide-show', 'web', '-', 'main slide show', 146, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (148, 'documents.properties.create:main-slide-show', 'web', 'create new property', 'main slide show', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (149, 'documents.properties.store:main-slide-show', 'web', '-', 'main slide show', 148, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (150, 'documents.properties.edit:main-slide-show', 'web', 'edit properties', 'main slide show', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (151, 'documents.properties.update:main-slide-show', 'web', '-', 'main slide show', 150, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (152, 'documents.properties.destroy:main-slide-show', 'web', 'delete property', 'main slide show', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (153, 'documents.properties.index:second-slide-show', 'web', 'access properties', 'second slide show', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (154, 'documents.properties.show:second-slide-show', 'web', '-', 'second slide show', 153, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (155, 'documents.properties.create:second-slide-show', 'web', 'create new property', 'second slide show', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (156, 'documents.properties.store:second-slide-show', 'web', '-', 'second slide show', 155, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (157, 'documents.properties.edit:second-slide-show', 'web', 'edit properties', 'second slide show', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (158, 'documents.properties.update:second-slide-show', 'web', '-', 'second slide show', 157, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (159, 'documents.properties.destroy:second-slide-show', 'web', 'delete property', 'second slide show', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (160, 'documents.properties.index:pages', 'web', 'access properties', 'pages', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (161, 'documents.properties.show:pages', 'web', '-', 'pages', 160, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (162, 'documents.properties.create:pages', 'web', 'create new property', 'pages', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (163, 'documents.properties.store:pages', 'web', '-', 'pages', 162, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (164, 'documents.properties.edit:pages', 'web', 'edit properties', 'pages', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (165, 'documents.properties.update:pages', 'web', '-', 'pages', 164, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (166, 'documents.properties.destroy:pages', 'web', 'delete property', 'pages', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (167, 'documents.settings:general', 'web', 'access settings', 'media', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (168, 'documents.settings.update:general', 'web', '-', 'media', 167, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (169, 'documents.settings:gallery', 'web', 'access settings', 'gallery', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (170, 'documents.settings.update:gallery', 'web', '-', 'gallery', 169, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (171, 'documents.settings:main-slide-show', 'web', 'access settings', 'main slide show', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (172, 'documents.settings.update:main-slide-show', 'web', '-', 'main slide show', 171, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (173, 'documents.settings:second-slide-show', 'web', 'access settings', 'second slide show', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (174, 'documents.settings.update:second-slide-show', 'web', '-', 'second slide show', 173, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (175, 'documents.settings:pages', 'web', 'access settings', 'pages', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (176, 'documents.settings.update:pages', 'web', '-', 'pages', 175, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (177, 'permissions.index', 'web', 'access items', 'permissions', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (178, 'permissions.show', 'web', '-', 'permissions', 177, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (179, 'permissions.create', 'web', 'create new item', 'permissions', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (180, 'permissions.store', 'web', '-', 'permissions', 179, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (181, 'permissions.edit', 'web', 'edit items', 'permissions', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (182, 'permissions.update', 'web', '-', 'permissions', 181, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (183, 'permissions.destroy', 'web', 'delete item', 'permissions', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (184, 'navigation.index', 'web', 'access items', 'navigation', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (185, 'navigation.show', 'web', '-', 'navigation', 184, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (186, 'navigation.create', 'web', 'create new item', 'navigation', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (187, 'navigation.store', 'web', '-', 'navigation', 186, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (188, 'navigation.edit', 'web', 'edit items', 'navigation', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (189, 'navigation.update', 'web', '-', 'navigation', 188, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (190, 'navigation.destroy', 'web', 'delete item', 'navigation', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (191, 'services.index:reserve', 'web', 'access items', 'reserve', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (192, 'services.show:reserve', 'web', '-', 'reserve', 191, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (193, 'services.create:reserve', 'web', 'create new item', 'reserve', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (194, 'services.store:reserve', 'web', '-', 'reserve', 193, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (195, 'services.edit:reserve', 'web', 'edit items', 'reserve', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (196, 'services.update:reserve', 'web', '-', 'reserve', 195, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (197, 'services.destroy:reserve', 'web', 'delete item', 'reserve', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (198, 'services.properties.index:reserve', 'web', 'access properties', 'reserve', 0, 1, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (199, 'services.properties.show:reserve', 'web', '-', 'reserve', 198, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (200, 'services.properties.create:reserve', 'web', 'create new property', 'reserve', 0, 1, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (201, 'services.properties.store:reserve', 'web', '-', 'reserve', 200, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (202, 'services.properties.edit:reserve', 'web', 'edit properties', 'reserve', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (203, 'services.properties.update:reserve', 'web', '-', 'reserve', 202, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (204, 'services.properties.destroy:reserve', 'web', 'delete property', 'reserve', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (205, 'services.settings:reserve', 'web', 'access settings', 'reserve', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (206, 'services.settings.update:reserve', 'web', '-', 'reserve', 205, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (207, 'admin.index', 'web', 'admin dashboard', 'admin panel', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (208, 'data.change:room', 'web', '-', 'room', 5, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (209, 'data.change:hotel', 'web', '-', 'hotel', 12, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (210, 'data.change:website', 'web', '-', 'website', 19, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (211, 'data.change:application', 'web', '-', 'application', 26, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (212, 'relations.index:offer', 'web', 'access items', 'offers', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (213, 'relations.show:offer', 'web', '-', 'offers', 212, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (214, 'relations.create:offer', 'web', 'create new item', 'offers', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (215, 'relations.store:offer', 'web', '-', 'offers', 214, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (216, 'relations.edit:offer', 'web', 'edit items', 'offers', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (217, 'relations.update:offer', 'web', '-', 'offers', 216, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (218, 'relations.destroy:offer', 'web', 'delete item', 'offers', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (219, 'permissions.change', 'web', '-', 'permissions', 181, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (220, 'permissions.ajax.get', 'web', '-', 'permissions', 177, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (221, 'data.properties.ajax.destroy:room', 'web', '-', 'room', 35, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (222, 'data.properties.ajax.destroy:hotel', 'web', '-', 'hotel', 42, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (223, 'data.properties.ajax.destroy:website', 'web', '-', 'website', 49, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (224, 'data.properties.ajax.destroy:application', 'web', '-', 'application', 56, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (225, 'users.properties.ajax.destroy:user', 'web', '-', 'user', 85, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (226, 'users.properties.ajax.destroy:customer', 'web', '-', 'customer', 92, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (227, 'documents.properties.ajax.destroy:general', 'web', '-', 'media', 138, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (228, 'documents.properties.ajax.destroy:gallery', 'web', '-', 'gallery', 145, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (229, 'documents.properties.ajax.destroy:main-slide-show', 'web', '-', 'main slide show', 152, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (230, 'documents.properties.ajax.destroy:second-slide-show', 'web', '-', 'second slide show', 159, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (231, 'documents.properties.ajax.destroy:pages', 'web', '-', 'pages', 166, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (232, 'navigation.change', 'web', '-', 'navigation', 188, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (233, 'navigation.get', 'web', '-', 'navigation', 184, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (234, 'navigation.routes.get', 'web', '-', 'navigation', 184, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (235, 'services.get:reserve', 'web', '-', 'reserve', 191, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (236, 'services.change:reserve', 'web', '-', 'reserve', 195, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (237, 'services.refresh:reserve', 'web', '-', 'reserve', 191, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (238, 'relations.get:offer', 'web', '-', 'offers', 212, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (239, 'data.index:map', 'web', 'access items', 'map', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (240, 'data.show:map', 'web', '-', 'map', 239, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (241, 'data.create:map', 'web', 'create new item', 'map', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (242, 'data.store:map', 'web', '-', 'map', 241, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (243, 'data.edit:map', 'web', 'edit items', 'map', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (244, 'data.update:map', 'web', '-', 'map', 243, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (245, 'data.destroy:map', 'web', 'delete item', 'map', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (246, 'data.properties.index:map', 'web', 'access properties', 'map', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (247, 'data.properties.show:map', 'web', '-', 'map', 246, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (248, 'data.properties.create:map', 'web', 'create new property', 'map', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (249, 'data.properties.store:map', 'web', '-', 'map', 248, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (250, 'data.properties.edit:map', 'web', 'edit properties', 'map', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (251, 'data.properties.update:map', 'web', '-', 'map', 250, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (252, 'data.properties.destroy:map', 'web', 'delete property', 'map', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (253, 'data.properties.ajax.destroy:map', 'web', '-', 'map', 252, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (254, 'data.settings:map', 'web', 'access settings', 'map', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (255, 'data.settings.update:map', 'web', '-', 'map', 253, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (256, 'data.index:map-location', 'web', 'access items', 'map-location', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (257, 'data.show:map-location', 'web', '-', 'map-location', 256, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (258, 'data.create:map-location', 'web', 'create new item', 'map-location', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (259, 'data.store:map-location', 'web', '-', 'map-location', 258, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (260, 'data.edit:map-location', 'web', 'edit items', 'map-location', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (261, 'data.update:map-location', 'web', '-', 'map-location', 260, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (262, 'data.destroy:map-location', 'web', 'delete item', 'map-location', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (263, 'data.properties.index:map-location', 'web', 'access properties', 'map-location', 0, 2, '2019-05-28 08:57:42', '2019-05-28 08:57:42');
INSERT INTO `permissions` VALUES (264, 'data.properties.show:map-location', 'web', '-', 'map-location', 263, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (265, 'data.properties.create:map-location', 'web', 'create new property', 'map-location', 0, 2, '2019-05-28 11:28:20', '2019-05-28 11:28:20');
INSERT INTO `permissions` VALUES (266, 'data.properties.store:map-location', 'web', '-', 'map-location', 265, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (267, 'data.properties.edit:map-location', 'web', 'edit properties', 'map-location', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (268, 'data.properties.update:map-location', 'web', '-', 'map-location', 267, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (269, 'data.properties.destroy:map-location', 'web', 'delete property', 'map-location', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (270, 'data.properties.ajax.destroy:map-location', 'web', '-', 'map-location', 269, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (271, 'data.settings:map-location', 'web', 'access settings', 'map-location', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (272, 'data.settings.update:map-location', 'web', '-', 'map-location', 271, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (273, 'documents.index:video', 'web', 'access items', 'video', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (274, 'documents.show:video', 'web', '-', 'video', 273, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (275, 'documents.create:video', 'web', 'create new item', 'video', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (276, 'documents.store:video', 'web', '-', 'video', 275, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (277, 'documents.edit:video', 'web', 'edit items', 'video', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (278, 'documents.update:video', 'web', '-', 'video', 277, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (279, 'documents.destroy:video', 'web', 'delete item', 'video', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (280, 'documents.properties.index:video', 'web', 'access properties', 'video', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (281, 'documents.properties.show:video', 'web', '-', 'video', 280, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (282, 'documents.properties.create:video', 'web', 'create new property', 'video', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (283, 'documents.properties.store:video', 'web', '-', 'video', 282, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (284, 'documents.properties.edit:video', 'web', 'edit properties', 'video', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (285, 'documents.properties.update:video', 'web', '-', 'video', 284, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (286, 'documents.properties.destroy:video', 'web', 'delete property', 'video', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (287, 'documents.properties.ajax.destroy:video', 'web', '-', 'video', 286, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (288, 'documents.settings:video', 'web', 'access settings', 'video', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (289, 'documents.settings.update:video', 'web', '-', 'video', 288, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (290, 'documents.index:swf', 'web', 'access items', 'swf', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (291, 'documents.show:swf', 'web', '-', 'swf', 290, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (292, 'documents.create:swf', 'web', 'create new item', 'swf', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (293, 'documents.store:swf', 'web', '-', 'swf', 292, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (294, 'documents.edit:swf', 'web', 'edit items', 'swf', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (295, 'documents.update:swf', 'web', '-', 'swf', 294, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (296, 'documents.destroy:swf', 'web', 'delete item', 'swf', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (297, 'documents.properties.index:swf', 'web', 'access properties', 'swf', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (298, 'documents.properties.show:swf', 'web', '-', 'swf', 297, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (299, 'documents.properties.create:swf', 'web', 'create new property', 'swf', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (300, 'documents.properties.store:swf', 'web', '-', 'swf', 299, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (301, 'documents.properties.edit:swf', 'web', 'edit properties', 'swf', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (302, 'documents.properties.update:swf', 'web', '-', 'swf', 301, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (303, 'documents.properties.destroy:swf', 'web', 'delete property', 'swf', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (304, 'documents.properties.ajax.destroy:swf', 'web', '-', 'swf', 303, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (305, 'documents.settings:swf', 'web', 'access settings', 'swf', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (306, 'documents.settings.update:swf', 'web', '-', 'swf', 305, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (307, 'communications.index:external-chat-system', 'web', 'access items', 'external chat system', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (308, 'communications.show:external-chat-system', 'web', '-', 'external chat system', 307, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (309, 'communications.create:external-chat-system', 'web', 'create new item', 'external chat system', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (310, 'communications.store:external-chat-system', 'web', '-', 'external chat system', 309, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (311, 'communications.edit:external-chat-system', 'web', 'edit items', 'external chat system', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (312, 'communications.update:external-chat-system', 'web', '-', 'external chat system', 311, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (313, 'communications.destroy:external-chat-system', 'web', 'delete item', 'external chat system', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (314, 'communications.properties.index:external-chat-system', 'web', 'access properties', 'external chat system', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (315, 'communications.properties.show:external-chat-system', 'web', '-', 'external chat system', 314, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (316, 'communications.properties.create:external-chat-system', 'web', 'create new property', 'external chat system', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (317, 'communications.properties.store:external-chat-system', 'web', '-', 'external chat system', 316, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (318, 'communications.properties.edit:external-chat-system', 'web', 'edit properties', 'external chat system', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (319, 'communications.properties.update:external-chat-system', 'web', '-', 'external chat system', 318, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (320, 'communications.properties.destroy:external-chat-system', 'web', 'delete property', 'external chat system', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (321, 'communications.properties.ajax.destroy:external-chat-system', 'web', '-', 'external chat system', 320, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (322, 'communications.settings:external-chat-system', 'web', 'access settings', 'external chat system', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (323, 'communications.settings.update:external-chat-system', 'web', '-', 'external chat system', 322, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (324, 'conversations.index:message', 'web', 'access items', 'message', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (325, 'conversations.show:message', 'web', '-', 'message', 324, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (326, 'conversations.create:message', 'web', 'create new item', 'message', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (327, 'conversations.store:message', 'web', '-', 'message', 326, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (328, 'conversations.edit:message', 'web', 'edit items', 'message', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (329, 'conversations.update:message', 'web', '-', 'message', 328, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (330, 'conversations.destroy:message', 'web', 'delete item', 'message', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (331, 'conversations.properties.index:message', 'web', 'access properties', 'message', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (332, 'conversations.properties.show:message', 'web', '-', 'message', 331, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (333, 'conversations.properties.create:message', 'web', 'create new property', 'message', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (334, 'conversations.properties.store:message', 'web', '-', 'message', 333, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (335, 'conversations.properties.edit:message', 'web', 'edit properties', 'message', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (336, 'conversations.properties.update:message', 'web', '-', 'message', 335, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (337, 'conversations.properties.destroy:message', 'web', 'delete property', 'message', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (338, 'conversations.properties.ajax.destroy:message', 'web', '-', 'message', 337, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (339, 'conversations.settings:message', 'web', 'access settings', 'message', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (340, 'conversations.settings.update:message', 'web', '-', 'message', 339, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (341, 'conversations.index:comment', 'web', 'access items', 'comment', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (342, 'conversations.show:comment', 'web', '-', 'comment', 341, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (343, 'conversations.create:comment', 'web', 'create new item', 'comment', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (344, 'conversations.store:comment', 'web', '-', 'comment', 343, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (345, 'conversations.edit:comment', 'web', 'edit items', 'comment', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (346, 'conversations.update:comment', 'web', '-', 'comment', 345, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (347, 'conversations.destroy:comment', 'web', 'delete item', 'comment', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (348, 'conversations.properties.index:comment', 'web', 'access properties', 'comment', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (349, 'conversations.properties.show:comment', 'web', '-', 'comment', 348, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (350, 'conversations.properties.create:comment', 'web', 'create new property', 'comment', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (351, 'conversations.properties.store:comment', 'web', '-', 'comment', 350, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (352, 'conversations.properties.edit:comment', 'web', 'edit properties', 'comment', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (353, 'conversations.properties.update:comment', 'web', '-', 'comment', 352, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (354, 'conversations.properties.destroy:comment', 'web', 'delete property', 'comment', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (355, 'conversations.properties.ajax.destroy:comment', 'web', '-', 'comment', 354, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (356, 'conversations.settings:comment', 'web', 'access settings', 'comment', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (357, 'conversations.settings.update:comment', 'web', '-', 'comment', 356, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (358, 'conversations.index:complaint', 'web', 'access items', 'complaint', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (359, 'conversations.show:complaint', 'web', '-', 'complaint', 358, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (360, 'conversations.create:complaint', 'web', 'create new item', 'complaint', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (361, 'conversations.store:complaint', 'web', '-', 'complaint', 360, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (362, 'conversations.edit:complaint', 'web', 'edit items', 'complaint', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (363, 'conversations.update:complaint', 'web', '-', 'complaint', 362, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (364, 'conversations.destroy:complaint', 'web', 'delete item', 'complaint', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (365, 'conversations.properties.index:complaint', 'web', 'access properties', 'complaint', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (366, 'conversations.properties.show:complaint', 'web', '-', 'complaint', 365, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (367, 'conversations.properties.create:complaint', 'web', 'create new property', 'complaint', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (368, 'conversations.properties.store:complaint', 'web', '-', 'complaint', 367, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (369, 'conversations.properties.edit:complaint', 'web', 'edit properties', 'complaint', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (370, 'conversations.properties.update:complaint', 'web', '-', 'complaint', 369, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (371, 'conversations.properties.destroy:complaint', 'web', 'delete property', 'complaint', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (372, 'conversations.properties.ajax.destroy:complaint', 'web', '-', 'complaint', 371, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (373, 'conversations.settings:complaint', 'web', 'access settings', 'complaint', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (374, 'conversations.settings.update:complaint', 'web', '-', 'complaint', 373, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (375, 'conversations.index:rating', 'web', 'access items', 'rating', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (376, 'conversations.show:rating', 'web', '-', 'rating', 375, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (377, 'conversations.create:rating', 'web', 'create new item', 'rating', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (378, 'conversations.store:rating', 'web', '-', 'rating', 377, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (379, 'conversations.edit:rating', 'web', 'edit items', 'rating', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (380, 'conversations.update:rating', 'web', '-', 'rating', 379, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (381, 'conversations.destroy:rating', 'web', 'delete item', 'rating', 0, 2, NULL, NULL);
INSERT INTO `permissions` VALUES (382, 'conversations.properties.index:rating', 'web', 'access properties', 'rating', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (383, 'conversations.properties.show:rating', 'web', '-', 'rating', 382, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (384, 'conversations.properties.create:rating', 'web', 'create new property', 'rating', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (385, 'conversations.properties.store:rating', 'web', '-', 'rating', 384, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (386, 'conversations.properties.edit:rating', 'web', 'edit properties', 'rating', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (387, 'conversations.properties.update:rating', 'web', '-', 'rating', 386, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (388, 'conversations.properties.destroy:rating', 'web', 'delete property', 'rating', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (389, 'conversations.properties.ajax.destroy:rating', 'web', '-', 'rating', 388, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (390, 'conversations.settings:rating', 'web', 'access settings', 'rating', 0, 1, NULL, NULL);
INSERT INTO `permissions` VALUES (391, 'conversations.settings.update:rating', 'web', '-', 'rating', 390, 1, NULL, NULL);

-- ----------------------------
-- Table structure for procedures
-- ----------------------------
DROP TABLE IF EXISTS `procedures`;
CREATE TABLE `procedures`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_type` int(10) UNSIGNED NOT NULL,
  `next_on_success` int(10) UNSIGNED NOT NULL,
  `next_on_fail` int(10) UNSIGNED NOT NULL,
  `route` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of procedures
-- ----------------------------
INSERT INTO `procedures` VALUES (1, 1, 2, 0, 'home.service.store', NULL, NULL);
INSERT INTO `procedures` VALUES (2, 1, 3, 0, '', NULL, NULL);
INSERT INTO `procedures` VALUES (3, 1, 0, 0, '', NULL, NULL);

-- ----------------------------
-- Table structure for relation_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `relation_assigned_properties`;
CREATE TABLE `relation_assigned_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `relation` int(10) UNSIGNED NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 83 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_assigned_properties
-- ----------------------------
INSERT INTO `relation_assigned_properties` VALUES (1, 1, 1, '10000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (2, 2, 2, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (3, 2, 3, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (4, 2, 0, '5000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (5, 3, 0, '150000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (6, 4, 0, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (7, 4, 0, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (8, 4, 0, '100000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (9, 5, 2, '', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (10, 5, 4, '120000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (11, 5, 5, '', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (12, 5, 8, '', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (13, 6, 2, '', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (14, 6, 4, '12000000000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (15, 6, 5, '', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (16, 6, 8, '', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (17, 66, 1, '451200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (18, 66, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (19, 67, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (20, 67, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (21, 68, 1, '343200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (22, 68, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (23, 69, 1, '296000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (24, 69, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (25, 70, 1, '300000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (26, 70, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (27, 71, 1, '451200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (28, 71, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (29, 72, 1, '480000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (30, 72, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (31, 73, 1, '345720', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (32, 73, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (33, 74, 1, '275000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (34, 74, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (35, 75, 1, '468000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (36, 75, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (37, 76, 1, '468000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (38, 76, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (41, 346, 1, '150000000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (42, 346, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (43, 355, 1, '324234324324324', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (44, 355, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (45, 381, 1, '324234324324324', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (46, 381, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (47, 433, 1, '1500000000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (48, 433, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (49, 435, 1, '44444444444', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (50, 435, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (51, 461, 1, '12132323', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (52, 461, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (53, 543, 1, '12132323', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (54, 543, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (55, 547, 1, '1455555555', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (56, 547, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (57, 551, 1, '33333333333333333333333', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (58, 551, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (59, 555, 1, '333333333333', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (60, 555, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (61, 559, 1, '333333333333', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (62, 559, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (63, 563, 1, '333333333333', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (64, 563, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (65, 568, 1, '44444444444444444444444', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (66, 568, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (67, 574, 1, '10000000', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (68, 574, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (69, 579, 1, '3434', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (70, 579, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (71, 603, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (72, 603, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (73, 609, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (74, 609, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (75, 615, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (76, 615, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (77, 621, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (78, 621, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (79, 627, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (80, 627, 7, '0', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (81, 633, 1, '397200', NULL, NULL);
INSERT INTO `relation_assigned_properties` VALUES (82, 633, 7, '0', NULL, NULL);

-- ----------------------------
-- Table structure for relation_objects
-- ----------------------------
DROP TABLE IF EXISTS `relation_objects`;
CREATE TABLE `relation_objects`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `relation` int(10) UNSIGNED NULL DEFAULT NULL,
  `object_type` int(10) UNSIGNED NOT NULL,
  `object_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 977 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_objects
-- ----------------------------
INSERT INTO `relation_objects` VALUES (1, 1, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (2, 2, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (3, 3, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (4, 4, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (5, 5, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (6, 6, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (7, 7, 1, 10, NULL, NULL);
INSERT INTO `relation_objects` VALUES (8, 7, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (9, 8, 1, 11, NULL, NULL);
INSERT INTO `relation_objects` VALUES (10, 8, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (11, 9, 1, 12, NULL, NULL);
INSERT INTO `relation_objects` VALUES (12, 9, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (13, 10, 1, 13, NULL, NULL);
INSERT INTO `relation_objects` VALUES (14, 10, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (15, 11, 1, 14, NULL, NULL);
INSERT INTO `relation_objects` VALUES (16, 11, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (17, 12, 1, 15, NULL, NULL);
INSERT INTO `relation_objects` VALUES (18, 12, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (19, 13, 1, 16, NULL, NULL);
INSERT INTO `relation_objects` VALUES (20, 13, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (21, 15, 1, 17, NULL, NULL);
INSERT INTO `relation_objects` VALUES (22, 15, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (23, 17, 1, 18, NULL, NULL);
INSERT INTO `relation_objects` VALUES (24, 17, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (25, 19, 1, 19, NULL, NULL);
INSERT INTO `relation_objects` VALUES (26, 19, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (27, 20, 1, 20, NULL, NULL);
INSERT INTO `relation_objects` VALUES (28, 20, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (29, 21, 1, 21, NULL, NULL);
INSERT INTO `relation_objects` VALUES (30, 21, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (31, 22, 1, 22, NULL, NULL);
INSERT INTO `relation_objects` VALUES (32, 22, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (33, 23, 1, 24, NULL, NULL);
INSERT INTO `relation_objects` VALUES (34, 23, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (35, 24, 1, 33, NULL, NULL);
INSERT INTO `relation_objects` VALUES (36, 24, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (37, 25, 1, 34, NULL, NULL);
INSERT INTO `relation_objects` VALUES (38, 25, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (39, 26, 1, 36, NULL, NULL);
INSERT INTO `relation_objects` VALUES (40, 26, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (41, 27, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (42, 27, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (43, 28, 1, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (44, 28, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (45, 29, 1, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (46, 29, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (47, 30, 1, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (48, 30, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (49, 31, 1, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (50, 31, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (51, 32, 6, 136, NULL, NULL);
INSERT INTO `relation_objects` VALUES (52, 32, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (53, 33, 6, 136, NULL, NULL);
INSERT INTO `relation_objects` VALUES (54, 33, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (55, 34, 6, 136, NULL, NULL);
INSERT INTO `relation_objects` VALUES (56, 34, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (57, 35, 6, 136, NULL, NULL);
INSERT INTO `relation_objects` VALUES (58, 35, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (59, 36, 6, 136, NULL, NULL);
INSERT INTO `relation_objects` VALUES (60, 36, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (61, 37, 6, 137, NULL, NULL);
INSERT INTO `relation_objects` VALUES (62, 37, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (63, 38, 6, 137, NULL, NULL);
INSERT INTO `relation_objects` VALUES (64, 38, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (65, 39, 6, 137, NULL, NULL);
INSERT INTO `relation_objects` VALUES (66, 39, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (67, 40, 6, 137, NULL, NULL);
INSERT INTO `relation_objects` VALUES (68, 40, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (69, 41, 6, 137, NULL, NULL);
INSERT INTO `relation_objects` VALUES (70, 41, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (71, 42, 6, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (72, 42, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (73, 43, 6, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (74, 43, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (75, 44, 6, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (76, 44, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (77, 45, 6, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (78, 45, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (79, 46, 6, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (80, 46, 4, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (81, 47, 1, 40, NULL, NULL);
INSERT INTO `relation_objects` VALUES (82, 47, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (83, 48, 1, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (84, 48, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (85, 49, 1, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (86, 49, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (87, 50, 1, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (88, 50, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (89, 51, 1, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (90, 51, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (91, 52, 1, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (92, 52, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (93, 53, 1, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (94, 53, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (95, 54, 1, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (96, 54, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (97, 55, 1, 54, NULL, NULL);
INSERT INTO `relation_objects` VALUES (98, 55, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (99, 56, 1, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (100, 56, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (101, 57, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (102, 57, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (103, 58, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (104, 58, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (105, 59, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (106, 59, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (107, 60, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (108, 60, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (109, 61, 4, 60, NULL, NULL);
INSERT INTO `relation_objects` VALUES (110, 61, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (111, 62, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (112, 62, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (113, 63, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (114, 63, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (115, 64, 4, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (116, 64, 6, 240, NULL, NULL);
INSERT INTO `relation_objects` VALUES (117, 65, 1, 62, NULL, NULL);
INSERT INTO `relation_objects` VALUES (118, 65, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (119, 66, 6, 252, NULL, NULL);
INSERT INTO `relation_objects` VALUES (120, 67, 6, 253, NULL, NULL);
INSERT INTO `relation_objects` VALUES (121, 68, 6, 254, NULL, NULL);
INSERT INTO `relation_objects` VALUES (122, 69, 6, 255, NULL, NULL);
INSERT INTO `relation_objects` VALUES (123, 70, 6, 256, NULL, NULL);
INSERT INTO `relation_objects` VALUES (124, 71, 6, 257, NULL, NULL);
INSERT INTO `relation_objects` VALUES (125, 72, 6, 258, NULL, NULL);
INSERT INTO `relation_objects` VALUES (126, 73, 6, 259, NULL, NULL);
INSERT INTO `relation_objects` VALUES (127, 74, 6, 260, NULL, NULL);
INSERT INTO `relation_objects` VALUES (128, 75, 6, 261, NULL, NULL);
INSERT INTO `relation_objects` VALUES (129, 76, 6, 262, NULL, NULL);
INSERT INTO `relation_objects` VALUES (130, 77, 2, 96, NULL, NULL);
INSERT INTO `relation_objects` VALUES (131, 77, 3, 88, NULL, NULL);
INSERT INTO `relation_objects` VALUES (132, 78, 2, 97, NULL, NULL);
INSERT INTO `relation_objects` VALUES (133, 78, 3, 89, NULL, NULL);
INSERT INTO `relation_objects` VALUES (134, 78, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (135, 79, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (136, 79, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (137, 80, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (138, 80, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (139, 81, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (140, 81, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (141, 82, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (142, 82, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (143, 83, 4, 60, NULL, NULL);
INSERT INTO `relation_objects` VALUES (144, 83, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (145, 84, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (146, 84, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (147, 85, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (148, 85, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (149, 86, 4, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (150, 86, 6, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (151, 87, 6, 269, NULL, NULL);
INSERT INTO `relation_objects` VALUES (152, 273, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (153, 273, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (154, 274, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (155, 274, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (156, 275, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (157, 275, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (158, 276, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (159, 276, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (160, 277, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (161, 277, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (162, 278, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (163, 278, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (164, 279, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (165, 279, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (166, 280, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (167, 280, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (168, 281, 4, 49, NULL, NULL);
INSERT INTO `relation_objects` VALUES (169, 281, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (170, 282, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (171, 282, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (172, 283, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (173, 283, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (174, 284, 4, 52, NULL, NULL);
INSERT INTO `relation_objects` VALUES (175, 284, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (176, 285, 4, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (177, 285, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (178, 286, 4, 54, NULL, NULL);
INSERT INTO `relation_objects` VALUES (179, 286, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (180, 287, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (181, 287, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (182, 288, 4, 56, NULL, NULL);
INSERT INTO `relation_objects` VALUES (183, 288, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (184, 289, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (185, 289, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (186, 290, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (187, 290, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (188, 291, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (189, 291, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (190, 292, 4, 60, NULL, NULL);
INSERT INTO `relation_objects` VALUES (191, 292, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (192, 293, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (193, 293, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (194, 294, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (195, 294, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (196, 295, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (197, 295, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (198, 296, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (199, 296, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (200, 297, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (201, 297, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (202, 298, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (203, 298, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (204, 299, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (205, 299, 6, 401, NULL, NULL);
INSERT INTO `relation_objects` VALUES (206, 300, 6, 402, NULL, NULL);
INSERT INTO `relation_objects` VALUES (207, 301, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (208, 301, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (209, 302, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (210, 302, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (211, 303, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (212, 303, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (213, 304, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (214, 304, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (215, 305, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (216, 305, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (217, 306, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (218, 306, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (219, 307, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (220, 307, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (221, 308, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (222, 308, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (223, 309, 4, 49, NULL, NULL);
INSERT INTO `relation_objects` VALUES (224, 309, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (225, 310, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (226, 310, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (227, 311, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (228, 311, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (229, 312, 4, 52, NULL, NULL);
INSERT INTO `relation_objects` VALUES (230, 312, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (231, 313, 4, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (232, 313, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (233, 314, 4, 54, NULL, NULL);
INSERT INTO `relation_objects` VALUES (234, 314, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (235, 315, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (236, 315, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (237, 316, 4, 56, NULL, NULL);
INSERT INTO `relation_objects` VALUES (238, 316, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (239, 317, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (240, 317, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (241, 318, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (242, 318, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (243, 319, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (244, 319, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (245, 320, 4, 60, NULL, NULL);
INSERT INTO `relation_objects` VALUES (246, 320, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (247, 321, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (248, 321, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (249, 322, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (250, 322, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (251, 323, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (252, 323, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (253, 324, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (254, 324, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (255, 325, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (256, 325, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (257, 326, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (258, 326, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (259, 327, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (260, 327, 6, 403, NULL, NULL);
INSERT INTO `relation_objects` VALUES (261, 328, 6, 404, NULL, NULL);
INSERT INTO `relation_objects` VALUES (262, 329, 6, 405, NULL, NULL);
INSERT INTO `relation_objects` VALUES (263, 330, 6, 406, NULL, NULL);
INSERT INTO `relation_objects` VALUES (264, 331, 1, 78, NULL, NULL);
INSERT INTO `relation_objects` VALUES (265, 331, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (266, 332, 1, 79, NULL, NULL);
INSERT INTO `relation_objects` VALUES (267, 332, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (268, 333, 6, 407, NULL, NULL);
INSERT INTO `relation_objects` VALUES (269, 334, 1, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (270, 334, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (271, 335, 1, 82, NULL, NULL);
INSERT INTO `relation_objects` VALUES (272, 335, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (273, 337, 1, 83, NULL, NULL);
INSERT INTO `relation_objects` VALUES (274, 337, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (275, 338, 6, 428, NULL, NULL);
INSERT INTO `relation_objects` VALUES (276, 339, 1, 84, NULL, NULL);
INSERT INTO `relation_objects` VALUES (277, 339, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (278, 340, 6, 435, NULL, NULL);
INSERT INTO `relation_objects` VALUES (279, 341, 6, 436, NULL, NULL);
INSERT INTO `relation_objects` VALUES (280, 342, 1, 86, NULL, NULL);
INSERT INTO `relation_objects` VALUES (281, 342, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (282, 343, 6, 443, NULL, NULL);
INSERT INTO `relation_objects` VALUES (283, 344, 1, 87, NULL, NULL);
INSERT INTO `relation_objects` VALUES (284, 344, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (285, 345, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (286, 345, 6, 450, NULL, NULL);
INSERT INTO `relation_objects` VALUES (287, 346, 6, 451, NULL, NULL);
INSERT INTO `relation_objects` VALUES (288, 347, 1, 88, NULL, NULL);
INSERT INTO `relation_objects` VALUES (289, 347, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (290, 348, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (291, 348, 6, 458, NULL, NULL);
INSERT INTO `relation_objects` VALUES (292, 349, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (293, 349, 6, 458, NULL, NULL);
INSERT INTO `relation_objects` VALUES (294, 350, 6, 459, NULL, NULL);
INSERT INTO `relation_objects` VALUES (295, 351, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (296, 351, 6, 460, NULL, NULL);
INSERT INTO `relation_objects` VALUES (297, 352, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (298, 352, 6, 460, NULL, NULL);
INSERT INTO `relation_objects` VALUES (299, 353, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (300, 353, 6, 460, NULL, NULL);
INSERT INTO `relation_objects` VALUES (301, 354, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (302, 354, 6, 460, NULL, NULL);
INSERT INTO `relation_objects` VALUES (303, 355, 6, 461, NULL, NULL);
INSERT INTO `relation_objects` VALUES (304, 356, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (305, 356, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (306, 356, 3, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (307, 356, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (308, 356, 4, 67, NULL, NULL);
INSERT INTO `relation_objects` VALUES (309, 357, 2, 103, NULL, NULL);
INSERT INTO `relation_objects` VALUES (310, 357, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (311, 358, 2, 104, NULL, NULL);
INSERT INTO `relation_objects` VALUES (312, 358, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (313, 359, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (314, 359, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (315, 359, 3, 2, NULL, NULL);
INSERT INTO `relation_objects` VALUES (316, 359, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (317, 359, 4, 68, NULL, NULL);
INSERT INTO `relation_objects` VALUES (318, 360, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (319, 360, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (320, 360, 3, 3, NULL, NULL);
INSERT INTO `relation_objects` VALUES (321, 360, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (322, 360, 4, 69, NULL, NULL);
INSERT INTO `relation_objects` VALUES (323, 361, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (324, 361, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (325, 361, 3, 4, NULL, NULL);
INSERT INTO `relation_objects` VALUES (326, 361, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (327, 362, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (328, 362, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (329, 362, 3, 5, NULL, NULL);
INSERT INTO `relation_objects` VALUES (330, 362, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (331, 363, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (332, 363, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (333, 363, 3, 6, NULL, NULL);
INSERT INTO `relation_objects` VALUES (334, 363, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (335, 364, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (336, 364, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (337, 364, 3, 7, NULL, NULL);
INSERT INTO `relation_objects` VALUES (338, 364, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (339, 365, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (340, 365, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (341, 365, 3, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (342, 365, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (343, 366, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (344, 366, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (345, 366, 3, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (346, 366, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (347, 366, 4, 70, NULL, NULL);
INSERT INTO `relation_objects` VALUES (348, 367, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (349, 367, 9, 193, NULL, NULL);
INSERT INTO `relation_objects` VALUES (350, 368, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (351, 368, 9, 193, NULL, NULL);
INSERT INTO `relation_objects` VALUES (352, 369, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (353, 369, 9, 193, NULL, NULL);
INSERT INTO `relation_objects` VALUES (354, 370, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (355, 370, 9, 193, NULL, NULL);
INSERT INTO `relation_objects` VALUES (356, 371, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (357, 371, 9, 204, NULL, NULL);
INSERT INTO `relation_objects` VALUES (358, 372, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (359, 372, 9, 204, NULL, NULL);
INSERT INTO `relation_objects` VALUES (360, 373, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (361, 373, 9, 204, NULL, NULL);
INSERT INTO `relation_objects` VALUES (362, 374, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (363, 374, 9, 204, NULL, NULL);
INSERT INTO `relation_objects` VALUES (364, 375, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (365, 375, 9, 215, NULL, NULL);
INSERT INTO `relation_objects` VALUES (366, 376, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (367, 376, 9, 215, NULL, NULL);
INSERT INTO `relation_objects` VALUES (368, 377, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (369, 377, 9, 215, NULL, NULL);
INSERT INTO `relation_objects` VALUES (370, 378, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (371, 378, 9, 215, NULL, NULL);
INSERT INTO `relation_objects` VALUES (372, 379, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (373, 379, 6, 618, NULL, NULL);
INSERT INTO `relation_objects` VALUES (374, 380, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (375, 380, 6, 618, NULL, NULL);
INSERT INTO `relation_objects` VALUES (376, 381, 6, 619, NULL, NULL);
INSERT INTO `relation_objects` VALUES (377, 382, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (378, 382, 9, 226, NULL, NULL);
INSERT INTO `relation_objects` VALUES (379, 383, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (380, 383, 9, 226, NULL, NULL);
INSERT INTO `relation_objects` VALUES (381, 384, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (382, 384, 9, 226, NULL, NULL);
INSERT INTO `relation_objects` VALUES (383, 385, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (384, 385, 9, 226, NULL, NULL);
INSERT INTO `relation_objects` VALUES (385, 386, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (386, 386, 9, 237, NULL, NULL);
INSERT INTO `relation_objects` VALUES (387, 387, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (388, 387, 9, 237, NULL, NULL);
INSERT INTO `relation_objects` VALUES (389, 388, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (390, 388, 9, 237, NULL, NULL);
INSERT INTO `relation_objects` VALUES (391, 389, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (392, 389, 9, 237, NULL, NULL);
INSERT INTO `relation_objects` VALUES (393, 390, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (394, 390, 9, 249, NULL, NULL);
INSERT INTO `relation_objects` VALUES (395, 391, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (396, 391, 9, 249, NULL, NULL);
INSERT INTO `relation_objects` VALUES (397, 392, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (398, 392, 9, 249, NULL, NULL);
INSERT INTO `relation_objects` VALUES (399, 393, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (400, 393, 9, 249, NULL, NULL);
INSERT INTO `relation_objects` VALUES (401, 394, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (402, 394, 9, 260, NULL, NULL);
INSERT INTO `relation_objects` VALUES (403, 395, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (404, 395, 9, 260, NULL, NULL);
INSERT INTO `relation_objects` VALUES (405, 396, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (406, 396, 9, 260, NULL, NULL);
INSERT INTO `relation_objects` VALUES (407, 397, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (408, 397, 9, 260, NULL, NULL);
INSERT INTO `relation_objects` VALUES (409, 398, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (410, 398, 9, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (411, 399, 4, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (412, 399, 9, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (413, 400, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (414, 400, 9, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (415, 401, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (416, 401, 9, 268, NULL, NULL);
INSERT INTO `relation_objects` VALUES (417, 402, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (418, 402, 9, 287, NULL, NULL);
INSERT INTO `relation_objects` VALUES (419, 403, 4, 81, NULL, NULL);
INSERT INTO `relation_objects` VALUES (420, 403, 9, 287, NULL, NULL);
INSERT INTO `relation_objects` VALUES (421, 404, 2, 106, NULL, NULL);
INSERT INTO `relation_objects` VALUES (422, 404, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (423, 405, 7, 73, NULL, NULL);
INSERT INTO `relation_objects` VALUES (424, 405, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (425, 406, 7, 74, NULL, NULL);
INSERT INTO `relation_objects` VALUES (426, 406, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (427, 407, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (428, 407, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (429, 407, 3, 10, NULL, NULL);
INSERT INTO `relation_objects` VALUES (430, 407, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (431, 408, 7, 86, NULL, NULL);
INSERT INTO `relation_objects` VALUES (432, 408, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (433, 409, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (434, 409, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (435, 409, 3, 11, NULL, NULL);
INSERT INTO `relation_objects` VALUES (436, 409, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (437, 410, 7, 99, NULL, NULL);
INSERT INTO `relation_objects` VALUES (438, 410, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (439, 411, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (440, 411, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (441, 411, 3, 12, NULL, NULL);
INSERT INTO `relation_objects` VALUES (442, 411, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (443, 411, 4, 86, NULL, NULL);
INSERT INTO `relation_objects` VALUES (444, 412, 7, 112, NULL, NULL);
INSERT INTO `relation_objects` VALUES (445, 412, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (446, 413, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (447, 413, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (448, 413, 3, 13, NULL, NULL);
INSERT INTO `relation_objects` VALUES (449, 413, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (450, 414, 7, 125, NULL, NULL);
INSERT INTO `relation_objects` VALUES (451, 414, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (452, 415, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (453, 415, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (454, 415, 3, 14, NULL, NULL);
INSERT INTO `relation_objects` VALUES (455, 415, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (456, 415, 4, 87, NULL, NULL);
INSERT INTO `relation_objects` VALUES (457, 416, 7, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (458, 416, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (459, 417, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (460, 417, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (461, 417, 3, 15, NULL, NULL);
INSERT INTO `relation_objects` VALUES (462, 417, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (463, 417, 4, 88, NULL, NULL);
INSERT INTO `relation_objects` VALUES (464, 418, 7, 151, NULL, NULL);
INSERT INTO `relation_objects` VALUES (465, 418, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (466, 419, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (467, 419, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (468, 419, 3, 16, NULL, NULL);
INSERT INTO `relation_objects` VALUES (469, 419, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (470, 420, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (471, 420, 9, 304, NULL, NULL);
INSERT INTO `relation_objects` VALUES (472, 421, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (473, 421, 9, 304, NULL, NULL);
INSERT INTO `relation_objects` VALUES (474, 422, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (475, 422, 9, 304, NULL, NULL);
INSERT INTO `relation_objects` VALUES (476, 423, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (477, 423, 9, 304, NULL, NULL);
INSERT INTO `relation_objects` VALUES (478, 424, 7, 164, NULL, NULL);
INSERT INTO `relation_objects` VALUES (479, 424, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (480, 425, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (481, 425, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (482, 425, 3, 17, NULL, NULL);
INSERT INTO `relation_objects` VALUES (483, 425, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (484, 426, 6, 626, NULL, NULL);
INSERT INTO `relation_objects` VALUES (485, 427, 6, 627, NULL, NULL);
INSERT INTO `relation_objects` VALUES (486, 428, 6, 628, NULL, NULL);
INSERT INTO `relation_objects` VALUES (487, 429, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (488, 429, 6, 629, NULL, NULL);
INSERT INTO `relation_objects` VALUES (489, 430, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (490, 430, 6, 629, NULL, NULL);
INSERT INTO `relation_objects` VALUES (491, 431, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (492, 431, 6, 629, NULL, NULL);
INSERT INTO `relation_objects` VALUES (493, 432, 4, 49, NULL, NULL);
INSERT INTO `relation_objects` VALUES (494, 432, 6, 629, NULL, NULL);
INSERT INTO `relation_objects` VALUES (495, 433, 6, 630, NULL, NULL);
INSERT INTO `relation_objects` VALUES (496, 434, 1, 92, NULL, NULL);
INSERT INTO `relation_objects` VALUES (497, 434, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (498, 435, 6, 637, NULL, NULL);
INSERT INTO `relation_objects` VALUES (499, 436, 1, 93, NULL, NULL);
INSERT INTO `relation_objects` VALUES (500, 436, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (501, 437, 7, 178, NULL, NULL);
INSERT INTO `relation_objects` VALUES (502, 437, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (503, 438, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (504, 438, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (505, 438, 3, 18, NULL, NULL);
INSERT INTO `relation_objects` VALUES (506, 438, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (507, 439, 7, 192, NULL, NULL);
INSERT INTO `relation_objects` VALUES (508, 439, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (509, 440, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (510, 440, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (511, 440, 3, 19, NULL, NULL);
INSERT INTO `relation_objects` VALUES (512, 440, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (513, 443, 7, 206, NULL, NULL);
INSERT INTO `relation_objects` VALUES (514, 443, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (515, 444, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (516, 444, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (517, 444, 3, 20, NULL, NULL);
INSERT INTO `relation_objects` VALUES (518, 444, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (519, 446, 7, 220, NULL, NULL);
INSERT INTO `relation_objects` VALUES (520, 446, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (521, 447, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (522, 447, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (523, 447, 3, 21, NULL, NULL);
INSERT INTO `relation_objects` VALUES (524, 447, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (525, 449, 7, 234, NULL, NULL);
INSERT INTO `relation_objects` VALUES (526, 449, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (527, 450, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (528, 450, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (529, 450, 3, 22, NULL, NULL);
INSERT INTO `relation_objects` VALUES (530, 450, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (531, 452, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (532, 452, 9, 328, NULL, NULL);
INSERT INTO `relation_objects` VALUES (533, 453, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (534, 453, 9, 328, NULL, NULL);
INSERT INTO `relation_objects` VALUES (535, 454, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (536, 454, 9, 328, NULL, NULL);
INSERT INTO `relation_objects` VALUES (537, 455, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (538, 455, 9, 328, NULL, NULL);
INSERT INTO `relation_objects` VALUES (539, 456, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (540, 456, 9, 328, NULL, NULL);
INSERT INTO `relation_objects` VALUES (541, 457, 4, 49, NULL, NULL);
INSERT INTO `relation_objects` VALUES (542, 457, 9, 328, NULL, NULL);
INSERT INTO `relation_objects` VALUES (543, 458, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (544, 458, 6, 644, NULL, NULL);
INSERT INTO `relation_objects` VALUES (545, 459, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (546, 459, 6, 644, NULL, NULL);
INSERT INTO `relation_objects` VALUES (547, 460, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (548, 460, 6, 644, NULL, NULL);
INSERT INTO `relation_objects` VALUES (549, 461, 6, 645, NULL, NULL);
INSERT INTO `relation_objects` VALUES (550, 462, 1, 94, NULL, NULL);
INSERT INTO `relation_objects` VALUES (551, 462, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (552, 463, 1, 95, NULL, NULL);
INSERT INTO `relation_objects` VALUES (553, 463, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (554, 464, 1, 95, NULL, NULL);
INSERT INTO `relation_objects` VALUES (555, 464, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (556, 465, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (557, 465, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (558, 466, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (559, 466, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (560, 467, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (561, 467, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (562, 468, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (563, 468, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (564, 469, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (565, 469, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (566, 470, 4, 52, NULL, NULL);
INSERT INTO `relation_objects` VALUES (567, 470, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (568, 471, 4, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (569, 471, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (570, 472, 4, 54, NULL, NULL);
INSERT INTO `relation_objects` VALUES (571, 472, 9, 331, NULL, NULL);
INSERT INTO `relation_objects` VALUES (572, 473, 4, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (573, 473, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (574, 474, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (575, 474, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (576, 475, 4, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (577, 475, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (578, 476, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (579, 476, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (580, 477, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (581, 477, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (582, 478, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (583, 478, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (584, 479, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (585, 479, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (586, 480, 4, 60, NULL, NULL);
INSERT INTO `relation_objects` VALUES (587, 480, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (588, 481, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (589, 481, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (590, 482, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (591, 482, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (592, 483, 4, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (593, 483, 9, 334, NULL, NULL);
INSERT INTO `relation_objects` VALUES (594, 484, 7, 248, NULL, NULL);
INSERT INTO `relation_objects` VALUES (595, 484, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (596, 485, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (597, 485, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (598, 485, 3, 23, NULL, NULL);
INSERT INTO `relation_objects` VALUES (599, 485, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (600, 485, 4, 112, NULL, NULL);
INSERT INTO `relation_objects` VALUES (601, 486, 7, 271, NULL, NULL);
INSERT INTO `relation_objects` VALUES (602, 486, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (603, 487, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (604, 487, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (605, 487, 3, 24, NULL, NULL);
INSERT INTO `relation_objects` VALUES (606, 487, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (607, 488, 7, 285, NULL, NULL);
INSERT INTO `relation_objects` VALUES (608, 488, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (609, 489, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (610, 489, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (611, 489, 3, 25, NULL, NULL);
INSERT INTO `relation_objects` VALUES (612, 489, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (613, 491, 7, 299, NULL, NULL);
INSERT INTO `relation_objects` VALUES (614, 491, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (615, 492, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (616, 492, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (617, 492, 3, 26, NULL, NULL);
INSERT INTO `relation_objects` VALUES (618, 492, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (619, 494, 7, 313, NULL, NULL);
INSERT INTO `relation_objects` VALUES (620, 494, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (621, 495, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (622, 495, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (623, 495, 3, 27, NULL, NULL);
INSERT INTO `relation_objects` VALUES (624, 495, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (625, 501, 7, 327, NULL, NULL);
INSERT INTO `relation_objects` VALUES (626, 501, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (627, 502, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (628, 502, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (629, 502, 3, 28, NULL, NULL);
INSERT INTO `relation_objects` VALUES (630, 502, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (631, 506, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (632, 506, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (633, 506, 3, 29, NULL, NULL);
INSERT INTO `relation_objects` VALUES (634, 506, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (635, 506, 4, 113, NULL, NULL);
INSERT INTO `relation_objects` VALUES (636, 507, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (637, 507, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (638, 507, 3, 30, NULL, NULL);
INSERT INTO `relation_objects` VALUES (639, 507, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (640, 507, 4, 114, NULL, NULL);
INSERT INTO `relation_objects` VALUES (641, 508, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (642, 508, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (643, 508, 3, 31, NULL, NULL);
INSERT INTO `relation_objects` VALUES (644, 508, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (645, 508, 4, 115, NULL, NULL);
INSERT INTO `relation_objects` VALUES (646, 509, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (647, 509, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (648, 509, 3, 32, NULL, NULL);
INSERT INTO `relation_objects` VALUES (649, 509, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (650, 509, 4, 116, NULL, NULL);
INSERT INTO `relation_objects` VALUES (651, 510, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (652, 510, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (653, 510, 3, 33, NULL, NULL);
INSERT INTO `relation_objects` VALUES (654, 510, 1, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (655, 510, 4, 117, NULL, NULL);
INSERT INTO `relation_objects` VALUES (656, 511, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (657, 511, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (658, 511, 3, 34, NULL, NULL);
INSERT INTO `relation_objects` VALUES (659, 511, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (660, 511, 4, 118, NULL, NULL);
INSERT INTO `relation_objects` VALUES (661, 512, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (662, 512, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (663, 512, 3, 35, NULL, NULL);
INSERT INTO `relation_objects` VALUES (664, 512, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (665, 513, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (666, 513, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (667, 513, 3, 36, NULL, NULL);
INSERT INTO `relation_objects` VALUES (668, 513, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (669, 513, 4, 119, NULL, NULL);
INSERT INTO `relation_objects` VALUES (670, 514, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (671, 514, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (672, 514, 3, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (673, 514, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (674, 514, 4, 120, NULL, NULL);
INSERT INTO `relation_objects` VALUES (675, 515, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (676, 515, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (677, 515, 3, 38, NULL, NULL);
INSERT INTO `relation_objects` VALUES (678, 515, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (679, 517, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (680, 517, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (681, 517, 3, 39, NULL, NULL);
INSERT INTO `relation_objects` VALUES (682, 517, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (683, 519, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (684, 519, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (685, 519, 3, 40, NULL, NULL);
INSERT INTO `relation_objects` VALUES (686, 519, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (687, 521, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (688, 521, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (689, 521, 3, 41, NULL, NULL);
INSERT INTO `relation_objects` VALUES (690, 521, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (691, 522, 7, 592, NULL, NULL);
INSERT INTO `relation_objects` VALUES (692, 522, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (693, 523, 7, 596, NULL, NULL);
INSERT INTO `relation_objects` VALUES (694, 523, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (695, 524, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (696, 524, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (697, 524, 3, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (698, 524, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (699, 525, 7, 610, NULL, NULL);
INSERT INTO `relation_objects` VALUES (700, 525, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (701, 526, 7, 614, NULL, NULL);
INSERT INTO `relation_objects` VALUES (702, 526, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (703, 524, 4, 121, NULL, NULL);
INSERT INTO `relation_objects` VALUES (704, 527, 7, 618, NULL, NULL);
INSERT INTO `relation_objects` VALUES (705, 527, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (706, 528, 7, 622, NULL, NULL);
INSERT INTO `relation_objects` VALUES (707, 528, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (708, 529, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (709, 529, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (710, 529, 3, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (711, 529, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (712, 530, 7, 636, NULL, NULL);
INSERT INTO `relation_objects` VALUES (713, 530, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (714, 531, 7, 640, NULL, NULL);
INSERT INTO `relation_objects` VALUES (715, 531, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (716, 529, 4, 122, NULL, NULL);
INSERT INTO `relation_objects` VALUES (717, 532, 7, 644, NULL, NULL);
INSERT INTO `relation_objects` VALUES (718, 532, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (719, 533, 7, 648, NULL, NULL);
INSERT INTO `relation_objects` VALUES (720, 533, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (721, 534, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (722, 534, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (723, 534, 3, 44, NULL, NULL);
INSERT INTO `relation_objects` VALUES (724, 534, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (725, 535, 7, 662, NULL, NULL);
INSERT INTO `relation_objects` VALUES (726, 535, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (727, 536, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (728, 536, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (729, 536, 3, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (730, 536, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (731, 537, 7, 676, NULL, NULL);
INSERT INTO `relation_objects` VALUES (732, 537, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (733, 538, 7, 680, NULL, NULL);
INSERT INTO `relation_objects` VALUES (734, 538, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (735, 536, 4, 123, NULL, NULL);
INSERT INTO `relation_objects` VALUES (736, 539, 7, 684, NULL, NULL);
INSERT INTO `relation_objects` VALUES (737, 539, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (738, 540, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (739, 540, 6, 723, NULL, NULL);
INSERT INTO `relation_objects` VALUES (740, 541, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (741, 541, 6, 723, NULL, NULL);
INSERT INTO `relation_objects` VALUES (742, 542, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (743, 542, 6, 723, NULL, NULL);
INSERT INTO `relation_objects` VALUES (744, 543, 6, 724, NULL, NULL);
INSERT INTO `relation_objects` VALUES (745, 544, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (746, 544, 6, 731, NULL, NULL);
INSERT INTO `relation_objects` VALUES (747, 545, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (748, 545, 6, 731, NULL, NULL);
INSERT INTO `relation_objects` VALUES (749, 546, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (750, 546, 6, 731, NULL, NULL);
INSERT INTO `relation_objects` VALUES (751, 547, 6, 732, NULL, NULL);
INSERT INTO `relation_objects` VALUES (752, 548, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (753, 548, 6, 739, NULL, NULL);
INSERT INTO `relation_objects` VALUES (754, 549, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (755, 549, 6, 739, NULL, NULL);
INSERT INTO `relation_objects` VALUES (756, 550, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (757, 550, 6, 739, NULL, NULL);
INSERT INTO `relation_objects` VALUES (758, 551, 6, 740, NULL, NULL);
INSERT INTO `relation_objects` VALUES (759, 552, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (760, 552, 6, 747, NULL, NULL);
INSERT INTO `relation_objects` VALUES (761, 553, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (762, 553, 6, 747, NULL, NULL);
INSERT INTO `relation_objects` VALUES (763, 554, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (764, 554, 6, 747, NULL, NULL);
INSERT INTO `relation_objects` VALUES (765, 555, 6, 748, NULL, NULL);
INSERT INTO `relation_objects` VALUES (766, 556, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (767, 556, 6, 755, NULL, NULL);
INSERT INTO `relation_objects` VALUES (768, 557, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (769, 557, 6, 755, NULL, NULL);
INSERT INTO `relation_objects` VALUES (770, 558, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (771, 558, 6, 755, NULL, NULL);
INSERT INTO `relation_objects` VALUES (772, 559, 6, 756, NULL, NULL);
INSERT INTO `relation_objects` VALUES (773, 560, 4, 42, NULL, NULL);
INSERT INTO `relation_objects` VALUES (774, 560, 6, 763, NULL, NULL);
INSERT INTO `relation_objects` VALUES (775, 561, 4, 43, NULL, NULL);
INSERT INTO `relation_objects` VALUES (776, 561, 6, 763, NULL, NULL);
INSERT INTO `relation_objects` VALUES (777, 562, 4, 45, NULL, NULL);
INSERT INTO `relation_objects` VALUES (778, 562, 6, 763, NULL, NULL);
INSERT INTO `relation_objects` VALUES (779, 563, 6, 764, NULL, NULL);
INSERT INTO `relation_objects` VALUES (780, 564, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (781, 564, 6, 771, NULL, NULL);
INSERT INTO `relation_objects` VALUES (782, 565, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (783, 565, 6, 771, NULL, NULL);
INSERT INTO `relation_objects` VALUES (784, 566, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (785, 566, 6, 771, NULL, NULL);
INSERT INTO `relation_objects` VALUES (786, 567, 4, 52, NULL, NULL);
INSERT INTO `relation_objects` VALUES (787, 567, 6, 771, NULL, NULL);
INSERT INTO `relation_objects` VALUES (788, 568, 6, 772, NULL, NULL);
INSERT INTO `relation_objects` VALUES (789, 569, 1, 96, NULL, NULL);
INSERT INTO `relation_objects` VALUES (790, 569, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (791, 570, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (792, 570, 6, 779, NULL, NULL);
INSERT INTO `relation_objects` VALUES (793, 571, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (794, 571, 6, 779, NULL, NULL);
INSERT INTO `relation_objects` VALUES (795, 572, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (796, 572, 6, 779, NULL, NULL);
INSERT INTO `relation_objects` VALUES (797, 573, 4, 52, NULL, NULL);
INSERT INTO `relation_objects` VALUES (798, 573, 6, 779, NULL, NULL);
INSERT INTO `relation_objects` VALUES (799, 574, 6, 780, NULL, NULL);
INSERT INTO `relation_objects` VALUES (800, 575, 4, 46, NULL, NULL);
INSERT INTO `relation_objects` VALUES (801, 575, 6, 787, NULL, NULL);
INSERT INTO `relation_objects` VALUES (802, 576, 4, 47, NULL, NULL);
INSERT INTO `relation_objects` VALUES (803, 576, 6, 787, NULL, NULL);
INSERT INTO `relation_objects` VALUES (804, 577, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (805, 577, 6, 787, NULL, NULL);
INSERT INTO `relation_objects` VALUES (806, 578, 4, 52, NULL, NULL);
INSERT INTO `relation_objects` VALUES (807, 578, 6, 787, NULL, NULL);
INSERT INTO `relation_objects` VALUES (808, 579, 6, 788, NULL, NULL);
INSERT INTO `relation_objects` VALUES (809, 580, 11, 3, NULL, NULL);
INSERT INTO `relation_objects` VALUES (810, 580, 2, 107, NULL, NULL);
INSERT INTO `relation_objects` VALUES (811, 581, 11, 8, NULL, NULL);
INSERT INTO `relation_objects` VALUES (812, 581, 2, 108, NULL, NULL);
INSERT INTO `relation_objects` VALUES (813, 582, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (814, 582, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (815, 582, 3, 53, NULL, NULL);
INSERT INTO `relation_objects` VALUES (816, 582, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (817, 583, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (818, 583, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (819, 583, 3, 54, NULL, NULL);
INSERT INTO `relation_objects` VALUES (820, 583, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (821, 584, 7, 688, NULL, NULL);
INSERT INTO `relation_objects` VALUES (822, 584, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (823, 585, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (824, 585, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (825, 585, 3, 55, NULL, NULL);
INSERT INTO `relation_objects` VALUES (826, 585, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (827, 586, 2, 109, NULL, NULL);
INSERT INTO `relation_objects` VALUES (828, 586, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (829, 587, 7, 702, NULL, NULL);
INSERT INTO `relation_objects` VALUES (830, 587, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (831, 588, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (832, 588, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (833, 588, 3, 56, NULL, NULL);
INSERT INTO `relation_objects` VALUES (834, 588, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (835, 589, 7, 716, NULL, NULL);
INSERT INTO `relation_objects` VALUES (836, 589, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (837, 590, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (838, 590, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (839, 590, 3, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (840, 590, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (841, 591, 7, 730, NULL, NULL);
INSERT INTO `relation_objects` VALUES (842, 591, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (843, 592, 7, 734, NULL, NULL);
INSERT INTO `relation_objects` VALUES (844, 592, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (845, 593, 7, 738, NULL, NULL);
INSERT INTO `relation_objects` VALUES (846, 593, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (847, 594, 7, 742, NULL, NULL);
INSERT INTO `relation_objects` VALUES (848, 594, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (849, 595, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (850, 595, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (851, 595, 3, 58, NULL, NULL);
INSERT INTO `relation_objects` VALUES (852, 595, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (853, 596, 7, 756, NULL, NULL);
INSERT INTO `relation_objects` VALUES (854, 596, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (855, 597, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (856, 597, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (857, 597, 3, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (858, 597, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (859, 598, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (860, 598, 6, 795, NULL, NULL);
INSERT INTO `relation_objects` VALUES (861, 599, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (862, 599, 6, 795, NULL, NULL);
INSERT INTO `relation_objects` VALUES (863, 600, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (864, 600, 6, 795, NULL, NULL);
INSERT INTO `relation_objects` VALUES (865, 601, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (866, 601, 6, 795, NULL, NULL);
INSERT INTO `relation_objects` VALUES (867, 602, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (868, 602, 6, 795, NULL, NULL);
INSERT INTO `relation_objects` VALUES (869, 603, 6, 796, NULL, NULL);
INSERT INTO `relation_objects` VALUES (870, 604, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (871, 604, 6, 804, NULL, NULL);
INSERT INTO `relation_objects` VALUES (872, 605, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (873, 605, 6, 804, NULL, NULL);
INSERT INTO `relation_objects` VALUES (874, 606, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (875, 606, 6, 804, NULL, NULL);
INSERT INTO `relation_objects` VALUES (876, 607, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (877, 607, 6, 804, NULL, NULL);
INSERT INTO `relation_objects` VALUES (878, 608, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (879, 608, 6, 804, NULL, NULL);
INSERT INTO `relation_objects` VALUES (880, 609, 6, 805, NULL, NULL);
INSERT INTO `relation_objects` VALUES (881, 610, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (882, 610, 6, 813, NULL, NULL);
INSERT INTO `relation_objects` VALUES (883, 611, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (884, 611, 6, 813, NULL, NULL);
INSERT INTO `relation_objects` VALUES (885, 612, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (886, 612, 6, 813, NULL, NULL);
INSERT INTO `relation_objects` VALUES (887, 613, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (888, 613, 6, 813, NULL, NULL);
INSERT INTO `relation_objects` VALUES (889, 614, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (890, 614, 6, 813, NULL, NULL);
INSERT INTO `relation_objects` VALUES (891, 615, 6, 814, NULL, NULL);
INSERT INTO `relation_objects` VALUES (892, 616, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (893, 616, 6, 822, NULL, NULL);
INSERT INTO `relation_objects` VALUES (894, 617, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (895, 617, 6, 822, NULL, NULL);
INSERT INTO `relation_objects` VALUES (896, 618, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (897, 618, 6, 822, NULL, NULL);
INSERT INTO `relation_objects` VALUES (898, 619, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (899, 619, 6, 822, NULL, NULL);
INSERT INTO `relation_objects` VALUES (900, 620, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (901, 620, 6, 822, NULL, NULL);
INSERT INTO `relation_objects` VALUES (902, 621, 6, 823, NULL, NULL);
INSERT INTO `relation_objects` VALUES (903, 622, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (904, 622, 6, 831, NULL, NULL);
INSERT INTO `relation_objects` VALUES (905, 623, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (906, 623, 6, 831, NULL, NULL);
INSERT INTO `relation_objects` VALUES (907, 624, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (908, 624, 6, 831, NULL, NULL);
INSERT INTO `relation_objects` VALUES (909, 625, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (910, 625, 6, 831, NULL, NULL);
INSERT INTO `relation_objects` VALUES (911, 626, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (912, 626, 6, 831, NULL, NULL);
INSERT INTO `relation_objects` VALUES (913, 627, 6, 832, NULL, NULL);
INSERT INTO `relation_objects` VALUES (914, 628, 4, 48, NULL, NULL);
INSERT INTO `relation_objects` VALUES (915, 628, 6, 840, NULL, NULL);
INSERT INTO `relation_objects` VALUES (916, 629, 4, 50, NULL, NULL);
INSERT INTO `relation_objects` VALUES (917, 629, 6, 840, NULL, NULL);
INSERT INTO `relation_objects` VALUES (918, 630, 4, 51, NULL, NULL);
INSERT INTO `relation_objects` VALUES (919, 630, 6, 840, NULL, NULL);
INSERT INTO `relation_objects` VALUES (920, 631, 4, 57, NULL, NULL);
INSERT INTO `relation_objects` VALUES (921, 631, 6, 840, NULL, NULL);
INSERT INTO `relation_objects` VALUES (922, 632, 4, 59, NULL, NULL);
INSERT INTO `relation_objects` VALUES (923, 632, 6, 840, NULL, NULL);
INSERT INTO `relation_objects` VALUES (924, 633, 6, 841, NULL, NULL);
INSERT INTO `relation_objects` VALUES (925, 634, 11, 12, NULL, NULL);
INSERT INTO `relation_objects` VALUES (926, 634, 2, 110, NULL, NULL);
INSERT INTO `relation_objects` VALUES (927, 635, 11, 16, NULL, NULL);
INSERT INTO `relation_objects` VALUES (928, 635, 2, 111, NULL, NULL);
INSERT INTO `relation_objects` VALUES (929, 636, 11, 20, NULL, NULL);
INSERT INTO `relation_objects` VALUES (930, 636, 2, 112, NULL, NULL);
INSERT INTO `relation_objects` VALUES (931, 637, 7, 770, NULL, NULL);
INSERT INTO `relation_objects` VALUES (932, 637, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (933, 638, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (934, 638, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (935, 638, 3, 60, NULL, NULL);
INSERT INTO `relation_objects` VALUES (936, 638, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (937, 639, 7, 784, NULL, NULL);
INSERT INTO `relation_objects` VALUES (938, 639, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (939, 640, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (940, 640, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (941, 640, 3, 61, NULL, NULL);
INSERT INTO `relation_objects` VALUES (942, 640, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (943, 641, 7, 798, NULL, NULL);
INSERT INTO `relation_objects` VALUES (944, 641, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (945, 642, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (946, 642, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (947, 642, 3, 62, NULL, NULL);
INSERT INTO `relation_objects` VALUES (948, 642, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (949, 643, 7, 812, NULL, NULL);
INSERT INTO `relation_objects` VALUES (950, 643, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (951, 644, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (952, 644, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (953, 644, 3, 63, NULL, NULL);
INSERT INTO `relation_objects` VALUES (954, 644, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (955, 645, 7, 826, NULL, NULL);
INSERT INTO `relation_objects` VALUES (956, 645, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (957, 644, 4, 131, NULL, NULL);
INSERT INTO `relation_objects` VALUES (958, 646, 7, 830, NULL, NULL);
INSERT INTO `relation_objects` VALUES (959, 646, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (960, 647, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (961, 647, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (962, 647, 3, 64, NULL, NULL);
INSERT INTO `relation_objects` VALUES (963, 647, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (964, 648, 7, 844, NULL, NULL);
INSERT INTO `relation_objects` VALUES (965, 648, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (966, 649, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (967, 649, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (968, 649, 3, 65, NULL, NULL);
INSERT INTO `relation_objects` VALUES (969, 649, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (970, 650, 7, 858, NULL, NULL);
INSERT INTO `relation_objects` VALUES (971, 650, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (972, 651, 7, 862, NULL, NULL);
INSERT INTO `relation_objects` VALUES (973, 651, 2, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (974, 649, 4, 132, NULL, NULL);
INSERT INTO `relation_objects` VALUES (975, 652, 7, 866, NULL, NULL);
INSERT INTO `relation_objects` VALUES (976, 652, 2, 1, NULL, NULL);

-- ----------------------------
-- Table structure for relation_properties
-- ----------------------------
DROP TABLE IF EXISTS `relation_properties`;
CREATE TABLE `relation_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(255) NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_properties
-- ----------------------------
INSERT INTO `relation_properties` VALUES (1, 'price', '0', 'currency', 1, 5, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (2, 'start_date', '0', 'date', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (4, 'price', '0', 'currency', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (5, 'end_date', '0', 'date', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (7, 'date', '0', 'date', 1, 5, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (8, 'date', '0', 'date', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for relation_property_values
-- ----------------------------
DROP TABLE IF EXISTS `relation_property_values`;
CREATE TABLE `relation_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_property_values
-- ----------------------------
INSERT INTO `relation_property_values` VALUES (1, 'room requested', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (2, 'room rejected', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (3, 'room confirmed', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (4, 'room time out', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (5, 'pay off requested', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (6, 'pay off rejected', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (7, 'pay off confirmed', 8, NULL, NULL);
INSERT INTO `relation_property_values` VALUES (8, 'pay off timeout', 8, NULL, NULL);

-- ----------------------------
-- Table structure for relation_types
-- ----------------------------
DROP TABLE IF EXISTS `relation_types`;
CREATE TABLE `relation_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT 2,
  `can_have_child` tinyint(255) NULL DEFAULT 0,
  `parent` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_types
-- ----------------------------
INSERT INTO `relation_types` VALUES (1, 'general', 2, 0, 0, NULL, NULL);
INSERT INTO `relation_types` VALUES (2, 'offer', 2, 0, 0, NULL, NULL);
INSERT INTO `relation_types` VALUES (3, 'dahe fajr', 2, 0, 2, NULL, NULL);
INSERT INTO `relation_types` VALUES (4, 'eid novrooz', 2, 0, 2, NULL, NULL);
INSERT INTO `relation_types` VALUES (5, 'price', 2, 0, 0, NULL, NULL);
INSERT INTO `relation_types` VALUES (6, 'reserve-condition', 2, 0, 0, NULL, NULL);

-- ----------------------------
-- Table structure for relations
-- ----------------------------
DROP TABLE IF EXISTS `relations`;
CREATE TABLE `relations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 653 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relations
-- ----------------------------
INSERT INTO `relations` VALUES (1, '1', 3, NULL, NULL);
INSERT INTO `relations` VALUES (2, '2', 3, NULL, NULL);
INSERT INTO `relations` VALUES (3, '3', 4, NULL, NULL);
INSERT INTO `relations` VALUES (4, '4', 4, NULL, NULL);
INSERT INTO `relations` VALUES (5, '', 7, '2019-02-27 22:03:14', '2019-02-27 22:03:14');
INSERT INTO `relations` VALUES (6, '', 7, '2019-02-27 22:03:14', '2019-02-27 22:03:14');
INSERT INTO `relations` VALUES (7, 'insert room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (8, 'insert room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (9, 'insert room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (10, 'insert room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (11, 'insert room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (12, 'insert room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (13, 'insert room', 1, '2019-03-05 10:51:19', '2019-03-05 10:51:19');
INSERT INTO `relations` VALUES (14, 'insert room', 1, '2019-03-05 11:20:51', '2019-03-05 11:20:51');
INSERT INTO `relations` VALUES (15, 'insert room', 1, '2019-03-05 11:20:51', '2019-03-05 11:20:51');
INSERT INTO `relations` VALUES (16, 'insert room', 1, '2019-03-05 11:21:35', '2019-03-05 11:21:35');
INSERT INTO `relations` VALUES (17, 'insert room', 1, '2019-03-05 11:21:35', '2019-03-05 11:21:35');
INSERT INTO `relations` VALUES (18, 'insert room', 1, '2019-03-05 11:22:30', '2019-03-05 11:22:30');
INSERT INTO `relations` VALUES (19, 'insert room', 1, '2019-03-05 11:22:30', '2019-03-05 11:22:30');
INSERT INTO `relations` VALUES (20, 'insert room', 1, '2019-03-05 11:23:15', '2019-03-05 11:23:15');
INSERT INTO `relations` VALUES (21, 'insert room', 1, '2019-03-06 02:02:00', '2019-03-06 02:02:00');
INSERT INTO `relations` VALUES (22, 'insert room', 1, '2019-03-06 02:04:09', '2019-03-06 02:04:09');
INSERT INTO `relations` VALUES (23, 'insert room', 1, '2019-03-06 02:10:33', '2019-03-06 02:10:33');
INSERT INTO `relations` VALUES (24, 'insert room', 1, '2019-03-06 02:16:01', '2019-03-06 02:16:01');
INSERT INTO `relations` VALUES (25, 'insert room', 1, '2019-03-06 02:17:24', '2019-03-06 02:17:24');
INSERT INTO `relations` VALUES (26, 'insert room', 1, '2019-03-06 02:20:53', '2019-03-06 02:20:53');
INSERT INTO `relations` VALUES (27, 'insert room', 1, '2019-03-06 02:21:35', '2019-03-06 02:21:35');
INSERT INTO `relations` VALUES (28, 'insert room', 1, '2019-03-12 10:24:52', '2019-03-12 10:24:52');
INSERT INTO `relations` VALUES (29, 'insert room', 1, '2019-03-12 10:26:59', '2019-03-12 10:26:59');
INSERT INTO `relations` VALUES (30, 'insert room', 1, '2019-03-12 10:27:10', '2019-03-12 10:27:10');
INSERT INTO `relations` VALUES (31, 'insert room', 1, '2019-03-12 10:28:02', '2019-03-12 10:28:02');
INSERT INTO `relations` VALUES (32, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (33, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (34, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (35, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (36, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (37, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (38, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (39, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (40, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (41, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (42, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (43, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (44, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (45, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (46, 'insert slide image to room', 1, NULL, NULL);
INSERT INTO `relations` VALUES (47, 'insert room', 1, '2019-03-31 00:44:01', '2019-03-31 00:44:01');
INSERT INTO `relations` VALUES (48, 'insert room', 1, '2019-03-31 00:44:34', '2019-03-31 00:44:34');
INSERT INTO `relations` VALUES (49, 'insert room', 1, '2019-03-31 00:45:00', '2019-03-31 00:45:00');
INSERT INTO `relations` VALUES (50, 'insert room', 1, '2019-03-31 00:45:26', '2019-03-31 00:45:26');
INSERT INTO `relations` VALUES (51, 'insert room', 1, '2019-03-31 00:45:51', '2019-03-31 00:45:51');
INSERT INTO `relations` VALUES (52, 'insert room', 1, '2019-03-31 00:46:17', '2019-03-31 00:46:17');
INSERT INTO `relations` VALUES (53, 'insert room', 1, '2019-03-31 00:46:40', '2019-03-31 00:46:40');
INSERT INTO `relations` VALUES (54, 'insert room', 1, '2019-03-31 00:47:04', '2019-03-31 00:47:04');
INSERT INTO `relations` VALUES (55, 'insert room', 1, '2019-04-02 13:41:26', '2019-04-02 13:41:26');
INSERT INTO `relations` VALUES (56, 'insert room', 1, '2019-04-02 13:46:42', '2019-04-02 13:46:42');
INSERT INTO `relations` VALUES (57, 'test', 1, '2019-04-02 13:52:33', '2019-04-02 13:52:33');
INSERT INTO `relations` VALUES (58, 'test', 1, '2019-04-02 13:52:33', '2019-04-02 13:52:33');
INSERT INTO `relations` VALUES (59, 'test', 1, '2019-04-02 13:52:33', '2019-04-02 13:52:33');
INSERT INTO `relations` VALUES (60, 'test', 1, '2019-04-02 13:52:33', '2019-04-02 13:52:33');
INSERT INTO `relations` VALUES (61, 'test', 1, '2019-04-02 13:52:34', '2019-04-02 13:52:34');
INSERT INTO `relations` VALUES (62, 'test', 1, '2019-04-02 13:52:34', '2019-04-02 13:52:34');
INSERT INTO `relations` VALUES (63, 'test', 1, '2019-04-02 13:52:34', '2019-04-02 13:52:34');
INSERT INTO `relations` VALUES (64, 'test', 1, '2019-04-02 13:52:34', '2019-04-02 13:52:34');
INSERT INTO `relations` VALUES (65, 'insert room', 1, '2019-04-02 13:52:34', '2019-04-02 13:52:34');
INSERT INTO `relations` VALUES (66, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (67, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (68, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (69, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (70, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (71, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (72, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (73, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (74, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (75, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (76, 'insert price', 5, NULL, NULL);
INSERT INTO `relations` VALUES (77, 'insert reserve', 1, '2019-04-16 13:34:12', '2019-04-16 13:34:12');
INSERT INTO `relations` VALUES (78, 'insert reserve', 1, '2019-04-16 14:52:12', '2019-04-16 14:52:12');
INSERT INTO `relations` VALUES (79, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (80, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (81, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (82, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (83, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (84, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (85, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (86, 'test', 1, '2019-04-19 17:51:24', '2019-04-19 17:51:24');
INSERT INTO `relations` VALUES (87, 'test', 5, '2019-04-19 17:51:25', '2019-04-19 17:51:25');
INSERT INTO `relations` VALUES (88, 'insert reserve', 1, '2019-04-26 04:00:35', '2019-04-26 04:00:35');
INSERT INTO `relations` VALUES (89, 'insert reserve', 1, '2019-04-26 04:52:17', '2019-04-26 04:52:17');
INSERT INTO `relations` VALUES (90, 'insert reserve', 1, '2019-04-26 04:54:10', '2019-04-26 04:54:10');
INSERT INTO `relations` VALUES (91, 'insert reserve', 1, '2019-04-26 05:07:51', '2019-04-26 05:07:51');
INSERT INTO `relations` VALUES (92, 'insert reserve', 1, '2019-04-26 05:08:34', '2019-04-26 05:08:34');
INSERT INTO `relations` VALUES (93, 'insert reserve', 1, '2019-04-26 05:09:17', '2019-04-26 05:09:17');
INSERT INTO `relations` VALUES (94, 'insert reserve', 1, '2019-04-26 05:47:23', '2019-04-26 05:47:23');
INSERT INTO `relations` VALUES (95, 'insert reserve', 1, '2019-04-26 05:48:29', '2019-04-26 05:48:29');
INSERT INTO `relations` VALUES (96, 'insert reserve', 1, '2019-04-26 05:51:02', '2019-04-26 05:51:02');
INSERT INTO `relations` VALUES (97, 'insert reserve', 1, '2019-04-26 05:57:02', '2019-04-26 05:57:02');
INSERT INTO `relations` VALUES (98, 'insert reserve', 1, '2019-04-26 05:57:15', '2019-04-26 05:57:15');
INSERT INTO `relations` VALUES (99, 'insert reserve', 1, '2019-04-26 15:32:41', '2019-04-26 15:32:41');
INSERT INTO `relations` VALUES (100, 'insert reserve', 1, '2019-04-26 15:34:20', '2019-04-26 15:34:20');
INSERT INTO `relations` VALUES (101, 'insert reserve', 1, '2019-04-26 15:37:06', '2019-04-26 15:37:06');
INSERT INTO `relations` VALUES (102, 'insert reserve', 1, '2019-04-26 15:38:59', '2019-04-26 15:38:59');
INSERT INTO `relations` VALUES (103, 'insert reserve', 1, '2019-04-26 21:48:37', '2019-04-26 21:48:37');
INSERT INTO `relations` VALUES (104, 'insert reserve', 1, '2019-04-26 21:50:24', '2019-04-26 21:50:24');
INSERT INTO `relations` VALUES (105, 'insert reserve', 1, '2019-04-26 21:50:51', '2019-04-26 21:50:51');
INSERT INTO `relations` VALUES (106, 'insert reserve', 1, '2019-04-26 22:00:24', '2019-04-26 22:00:24');
INSERT INTO `relations` VALUES (107, 'insert reserve', 1, '2019-04-26 22:02:10', '2019-04-26 22:02:10');
INSERT INTO `relations` VALUES (108, 'insert reserve', 1, '2019-04-26 22:03:26', '2019-04-26 22:03:26');
INSERT INTO `relations` VALUES (109, 'insert reserve', 1, '2019-04-26 22:20:29', '2019-04-26 22:20:29');
INSERT INTO `relations` VALUES (110, 'insert reserve', 1, '2019-04-26 23:56:45', '2019-04-26 23:56:45');
INSERT INTO `relations` VALUES (111, 'insert reserve', 1, '2019-04-27 01:44:10', '2019-04-27 01:44:10');
INSERT INTO `relations` VALUES (112, 'insert reserve', 1, '2019-04-27 01:45:54', '2019-04-27 01:45:54');
INSERT INTO `relations` VALUES (113, 'insert reserve', 1, '2019-04-27 03:18:06', '2019-04-27 03:18:06');
INSERT INTO `relations` VALUES (114, 'insert reserve', 1, '2019-04-27 03:19:38', '2019-04-27 03:19:38');
INSERT INTO `relations` VALUES (115, 'insert reserve', 1, '2019-04-27 03:20:04', '2019-04-27 03:20:04');
INSERT INTO `relations` VALUES (116, 'insert reserve', 1, '2019-04-27 03:27:26', '2019-04-27 03:27:26');
INSERT INTO `relations` VALUES (117, 'insert reserve', 1, '2019-04-27 03:28:31', '2019-04-27 03:28:31');
INSERT INTO `relations` VALUES (118, 'insert reserve', 1, '2019-04-27 03:30:35', '2019-04-27 03:30:35');
INSERT INTO `relations` VALUES (119, 'insert reserve', 1, '2019-04-27 03:44:19', '2019-04-27 03:44:19');
INSERT INTO `relations` VALUES (120, 'insert reserve', 1, '2019-04-27 03:45:05', '2019-04-27 03:45:05');
INSERT INTO `relations` VALUES (121, 'insert reserve', 1, '2019-04-27 03:45:41', '2019-04-27 03:45:41');
INSERT INTO `relations` VALUES (122, 'insert reserve', 1, '2019-04-27 04:35:43', '2019-04-27 04:35:43');
INSERT INTO `relations` VALUES (123, 'insert reserve', 1, '2019-04-27 04:36:14', '2019-04-27 04:36:14');
INSERT INTO `relations` VALUES (124, 'insert reserve', 1, '2019-04-27 04:56:53', '2019-04-27 04:56:53');
INSERT INTO `relations` VALUES (125, 'insert reserve', 1, '2019-04-27 05:06:24', '2019-04-27 05:06:24');
INSERT INTO `relations` VALUES (126, 'insert reserve', 1, '2019-04-27 19:32:54', '2019-04-27 19:32:54');
INSERT INTO `relations` VALUES (127, 'insert reserve', 1, '2019-04-27 23:13:57', '2019-04-27 23:13:57');
INSERT INTO `relations` VALUES (128, 'insert reserve', 1, '2019-04-28 01:13:19', '2019-04-28 01:13:19');
INSERT INTO `relations` VALUES (129, 'insert reserve', 1, '2019-04-28 19:24:13', '2019-04-28 19:24:13');
INSERT INTO `relations` VALUES (130, 'insert reserve', 1, '2019-04-28 20:46:28', '2019-04-28 20:46:28');
INSERT INTO `relations` VALUES (131, 'insert reserve', 1, '2019-04-28 22:51:52', '2019-04-28 22:51:52');
INSERT INTO `relations` VALUES (132, 'insert reserve', 1, '2019-04-29 00:44:05', '2019-04-29 00:44:05');
INSERT INTO `relations` VALUES (133, 'insert reserve', 1, '2019-04-29 02:14:51', '2019-04-29 02:14:51');
INSERT INTO `relations` VALUES (134, 'insert reserve', 1, '2019-04-29 02:27:14', '2019-04-29 02:27:14');
INSERT INTO `relations` VALUES (135, 'insert reserve', 1, '2019-04-29 02:53:15', '2019-04-29 02:53:15');
INSERT INTO `relations` VALUES (136, 'insert reserve', 1, '2019-04-29 02:54:03', '2019-04-29 02:54:03');
INSERT INTO `relations` VALUES (137, 'insert reserve', 1, '2019-04-29 03:04:21', '2019-04-29 03:04:21');
INSERT INTO `relations` VALUES (138, 'insert reserve', 1, '2019-04-29 03:06:34', '2019-04-29 03:06:34');
INSERT INTO `relations` VALUES (139, 'insert reserve', 1, '2019-04-29 03:10:22', '2019-04-29 03:10:22');
INSERT INTO `relations` VALUES (140, 'insert reserve', 1, '2019-04-29 03:39:33', '2019-04-29 03:39:33');
INSERT INTO `relations` VALUES (141, 'insert reserve', 1, '2019-04-29 05:22:23', '2019-04-29 05:22:23');
INSERT INTO `relations` VALUES (142, 'insert reserve', 1, '2019-05-01 05:44:00', '2019-05-01 05:44:00');
INSERT INTO `relations` VALUES (143, 'insert reserve', 1, '2019-05-01 06:20:00', '2019-05-01 06:20:00');
INSERT INTO `relations` VALUES (144, 'insert reserve', 1, '2019-05-01 08:01:03', '2019-05-01 08:01:03');
INSERT INTO `relations` VALUES (145, 'insert reserve', 1, '2019-05-01 08:02:43', '2019-05-01 08:02:43');
INSERT INTO `relations` VALUES (146, 'insert reserve', 1, '2019-05-01 08:03:44', '2019-05-01 08:03:44');
INSERT INTO `relations` VALUES (147, 'insert reserve', 1, '2019-05-01 08:04:21', '2019-05-01 08:04:21');
INSERT INTO `relations` VALUES (148, 'insert reserve', 1, '2019-05-01 08:04:45', '2019-05-01 08:04:45');
INSERT INTO `relations` VALUES (149, 'insert reserve', 1, '2019-05-01 08:06:02', '2019-05-01 08:06:02');
INSERT INTO `relations` VALUES (150, 'insert reserve', 1, '2019-05-01 08:06:43', '2019-05-01 08:06:43');
INSERT INTO `relations` VALUES (151, 'insert reserve', 1, '2019-05-02 06:17:44', '2019-05-02 06:17:44');
INSERT INTO `relations` VALUES (152, 'insert reserve', 1, '2019-05-02 06:24:08', '2019-05-02 06:24:08');
INSERT INTO `relations` VALUES (153, 'insert reserve', 1, '2019-05-02 07:43:27', '2019-05-02 07:43:27');
INSERT INTO `relations` VALUES (154, 'insert reserve', 1, '2019-05-02 07:44:41', '2019-05-02 07:44:41');
INSERT INTO `relations` VALUES (155, 'insert reserve', 1, '2019-05-02 07:45:52', '2019-05-02 07:45:52');
INSERT INTO `relations` VALUES (156, 'insert reserve', 1, '2019-05-02 08:02:03', '2019-05-02 08:02:03');
INSERT INTO `relations` VALUES (157, 'insert reserve', 1, '2019-05-02 08:08:20', '2019-05-02 08:08:20');
INSERT INTO `relations` VALUES (158, 'insert reserve', 1, '2019-05-02 08:08:47', '2019-05-02 08:08:47');
INSERT INTO `relations` VALUES (159, 'insert reserve', 1, '2019-05-02 08:10:16', '2019-05-02 08:10:16');
INSERT INTO `relations` VALUES (160, 'insert reserve', 1, '2019-05-02 08:11:44', '2019-05-02 08:11:44');
INSERT INTO `relations` VALUES (161, 'insert reserve', 1, '2019-05-02 08:20:34', '2019-05-02 08:20:34');
INSERT INTO `relations` VALUES (162, 'insert reserve', 1, '2019-05-02 08:20:50', '2019-05-02 08:20:50');
INSERT INTO `relations` VALUES (163, 'insert reserve', 1, '2019-05-02 08:22:48', '2019-05-02 08:22:48');
INSERT INTO `relations` VALUES (164, 'insert reserve', 1, '2019-05-02 08:23:07', '2019-05-02 08:23:07');
INSERT INTO `relations` VALUES (165, 'insert reserve', 1, '2019-05-02 08:23:26', '2019-05-02 08:23:26');
INSERT INTO `relations` VALUES (166, 'insert reserve', 1, '2019-05-02 08:26:09', '2019-05-02 08:26:09');
INSERT INTO `relations` VALUES (167, 'insert reserve', 1, '2019-05-02 08:30:18', '2019-05-02 08:30:18');
INSERT INTO `relations` VALUES (168, 'insert reserve', 1, '2019-05-02 08:30:44', '2019-05-02 08:30:44');
INSERT INTO `relations` VALUES (169, 'insert reserve', 1, '2019-05-02 08:31:19', '2019-05-02 08:31:19');
INSERT INTO `relations` VALUES (170, 'insert reserve', 1, '2019-05-02 08:31:31', '2019-05-02 08:31:31');
INSERT INTO `relations` VALUES (171, 'insert reserve', 1, '2019-05-02 08:31:51', '2019-05-02 08:31:51');
INSERT INTO `relations` VALUES (172, 'insert reserve', 1, '2019-05-02 08:32:32', '2019-05-02 08:32:32');
INSERT INTO `relations` VALUES (173, 'insert reserve', 1, '2019-05-02 08:32:54', '2019-05-02 08:32:54');
INSERT INTO `relations` VALUES (174, 'insert reserve', 1, '2019-05-02 08:57:20', '2019-05-02 08:57:20');
INSERT INTO `relations` VALUES (175, 'insert reserve', 1, '2019-05-03 07:46:56', '2019-05-03 07:46:56');
INSERT INTO `relations` VALUES (176, 'insert reserve', 1, '2019-05-03 07:47:25', '2019-05-03 07:47:25');
INSERT INTO `relations` VALUES (177, 'insert reserve', 1, '2019-05-03 09:03:25', '2019-05-03 09:03:25');
INSERT INTO `relations` VALUES (178, 'insert reserve', 1, '2019-05-03 09:08:54', '2019-05-03 09:08:54');
INSERT INTO `relations` VALUES (179, 'insert reserve', 1, '2019-05-03 09:09:41', '2019-05-03 09:09:41');
INSERT INTO `relations` VALUES (180, 'insert reserve', 1, '2019-05-03 09:11:13', '2019-05-03 09:11:13');
INSERT INTO `relations` VALUES (181, 'insert reserve', 1, '2019-05-03 09:37:42', '2019-05-03 09:37:42');
INSERT INTO `relations` VALUES (182, 'insert reserve', 1, '2019-05-03 09:39:37', '2019-05-03 09:39:37');
INSERT INTO `relations` VALUES (183, 'insert reserve', 1, '2019-05-03 09:40:27', '2019-05-03 09:40:27');
INSERT INTO `relations` VALUES (184, 'insert reserve', 1, '2019-05-03 09:40:58', '2019-05-03 09:40:58');
INSERT INTO `relations` VALUES (185, 'insert reserve', 1, '2019-05-03 09:41:59', '2019-05-03 09:41:59');
INSERT INTO `relations` VALUES (186, 'insert reserve', 1, '2019-05-03 09:43:13', '2019-05-03 09:43:13');
INSERT INTO `relations` VALUES (187, 'insert reserve', 1, '2019-05-03 09:53:39', '2019-05-03 09:53:39');
INSERT INTO `relations` VALUES (188, 'insert reserve', 1, '2019-05-03 09:54:25', '2019-05-03 09:54:25');
INSERT INTO `relations` VALUES (189, 'insert reserve', 1, '2019-05-03 10:02:29', '2019-05-03 10:02:29');
INSERT INTO `relations` VALUES (190, 'insert reserve', 1, '2019-05-03 10:03:01', '2019-05-03 10:03:01');
INSERT INTO `relations` VALUES (191, 'insert reserve', 1, '2019-05-03 10:40:16', '2019-05-03 10:40:16');
INSERT INTO `relations` VALUES (192, 'insert reserve', 1, '2019-05-03 11:01:47', '2019-05-03 11:01:47');
INSERT INTO `relations` VALUES (193, 'insert reserve', 1, '2019-05-03 11:10:07', '2019-05-03 11:10:07');
INSERT INTO `relations` VALUES (194, 'insert reserve', 1, '2019-05-03 11:42:06', '2019-05-03 11:42:06');
INSERT INTO `relations` VALUES (195, 'insert reserve', 1, '2019-05-03 11:43:37', '2019-05-03 11:43:37');
INSERT INTO `relations` VALUES (196, 'insert reserve', 1, '2019-05-03 11:46:55', '2019-05-03 11:46:55');
INSERT INTO `relations` VALUES (197, 'insert reserve', 1, '2019-05-03 11:49:47', '2019-05-03 11:49:47');
INSERT INTO `relations` VALUES (198, 'insert reserve', 1, '2019-05-03 11:54:18', '2019-05-03 11:54:18');
INSERT INTO `relations` VALUES (199, 'insert reserve', 1, '2019-05-03 11:54:24', '2019-05-03 11:54:24');
INSERT INTO `relations` VALUES (200, 'insert reserve', 1, '2019-05-03 12:39:05', '2019-05-03 12:39:05');
INSERT INTO `relations` VALUES (201, 'insert reserve', 1, '2019-05-03 12:41:42', '2019-05-03 12:41:42');
INSERT INTO `relations` VALUES (202, 'insert reserve', 1, '2019-05-03 12:42:44', '2019-05-03 12:42:44');
INSERT INTO `relations` VALUES (203, 'insert reserve', 1, '2019-05-03 12:43:22', '2019-05-03 12:43:22');
INSERT INTO `relations` VALUES (204, 'insert reserve', 1, '2019-05-03 13:23:22', '2019-05-03 13:23:22');
INSERT INTO `relations` VALUES (205, 'insert reserve', 1, '2019-05-03 13:27:21', '2019-05-03 13:27:21');
INSERT INTO `relations` VALUES (206, 'insert reserve', 1, '2019-05-03 13:28:50', '2019-05-03 13:28:50');
INSERT INTO `relations` VALUES (207, 'insert reserve', 1, '2019-05-03 13:30:14', '2019-05-03 13:30:14');
INSERT INTO `relations` VALUES (208, 'insert reserve', 1, '2019-05-03 13:33:41', '2019-05-03 13:33:41');
INSERT INTO `relations` VALUES (209, 'insert reserve', 1, '2019-05-03 13:52:22', '2019-05-03 13:52:22');
INSERT INTO `relations` VALUES (210, 'insert reserve', 1, '2019-05-03 14:08:29', '2019-05-03 14:08:29');
INSERT INTO `relations` VALUES (211, 'insert reserve', 1, '2019-05-03 14:09:31', '2019-05-03 14:09:31');
INSERT INTO `relations` VALUES (212, 'insert reserve', 1, '2019-05-03 14:10:20', '2019-05-03 14:10:20');
INSERT INTO `relations` VALUES (213, 'insert reserve', 1, '2019-05-03 14:11:41', '2019-05-03 14:11:41');
INSERT INTO `relations` VALUES (214, 'insert reserve', 1, '2019-05-03 14:13:16', '2019-05-03 14:13:16');
INSERT INTO `relations` VALUES (215, 'insert reserve', 1, '2019-05-03 14:15:20', '2019-05-03 14:15:20');
INSERT INTO `relations` VALUES (216, 'insert reserve', 1, '2019-05-03 14:17:17', '2019-05-03 14:17:17');
INSERT INTO `relations` VALUES (217, 'insert reserve', 1, '2019-05-03 14:18:16', '2019-05-03 14:18:16');
INSERT INTO `relations` VALUES (218, 'insert reserve', 1, '2019-05-03 14:23:00', '2019-05-03 14:23:00');
INSERT INTO `relations` VALUES (219, 'insert reserve', 1, '2019-05-03 14:25:15', '2019-05-03 14:25:15');
INSERT INTO `relations` VALUES (220, 'insert reserve', 1, '2019-05-03 14:26:08', '2019-05-03 14:26:08');
INSERT INTO `relations` VALUES (221, 'insert reserve', 1, '2019-05-03 15:42:42', '2019-05-03 15:42:42');
INSERT INTO `relations` VALUES (222, 'insert reserve', 1, '2019-05-03 15:55:06', '2019-05-03 15:55:06');
INSERT INTO `relations` VALUES (223, 'insert reserve', 1, '2019-05-03 17:00:16', '2019-05-03 17:00:16');
INSERT INTO `relations` VALUES (224, 'insert reserve', 1, '2019-05-03 17:02:10', '2019-05-03 17:02:10');
INSERT INTO `relations` VALUES (225, 'insert reserve', 1, '2019-05-03 17:08:04', '2019-05-03 17:08:04');
INSERT INTO `relations` VALUES (226, 'insert reserve', 1, '2019-05-03 17:12:05', '2019-05-03 17:12:05');
INSERT INTO `relations` VALUES (227, 'insert reserve', 1, '2019-05-03 17:13:58', '2019-05-03 17:13:58');
INSERT INTO `relations` VALUES (228, 'insert reserve', 1, '2019-05-03 17:22:15', '2019-05-03 17:22:15');
INSERT INTO `relations` VALUES (229, 'insert reserve', 1, '2019-05-03 17:24:09', '2019-05-03 17:24:09');
INSERT INTO `relations` VALUES (230, 'insert reserve', 1, '2019-05-03 17:28:33', '2019-05-03 17:28:33');
INSERT INTO `relations` VALUES (231, 'insert reserve', 1, '2019-05-03 18:12:45', '2019-05-03 18:12:45');
INSERT INTO `relations` VALUES (232, 'insert reserve', 1, '2019-05-04 04:48:16', '2019-05-04 04:48:16');
INSERT INTO `relations` VALUES (233, 'insert reserve', 1, '2019-05-04 05:03:38', '2019-05-04 05:03:38');
INSERT INTO `relations` VALUES (234, 'insert reserve', 1, '2019-05-04 05:36:13', '2019-05-04 05:36:13');
INSERT INTO `relations` VALUES (235, 'insert reserve', 1, '2019-05-04 05:37:44', '2019-05-04 05:37:44');
INSERT INTO `relations` VALUES (236, 'insert reserve', 1, '2019-05-04 06:52:01', '2019-05-04 06:52:01');
INSERT INTO `relations` VALUES (237, 'insert reserve', 1, '2019-05-04 06:55:46', '2019-05-04 06:55:46');
INSERT INTO `relations` VALUES (238, 'insert reserve', 1, '2019-05-04 07:26:56', '2019-05-04 07:26:56');
INSERT INTO `relations` VALUES (239, 'insert reserve', 1, '2019-05-04 07:36:41', '2019-05-04 07:36:41');
INSERT INTO `relations` VALUES (240, 'insert reserve', 1, '2019-05-04 10:22:47', '2019-05-04 10:22:47');
INSERT INTO `relations` VALUES (241, 'insert reserve', 1, '2019-05-04 11:33:39', '2019-05-04 11:33:39');
INSERT INTO `relations` VALUES (242, 'insert reserve', 1, '2019-05-04 11:36:31', '2019-05-04 11:36:31');
INSERT INTO `relations` VALUES (243, 'insert reserve', 1, '2019-05-04 13:15:02', '2019-05-04 13:15:02');
INSERT INTO `relations` VALUES (244, 'insert reserve', 1, '2019-05-04 13:16:07', '2019-05-04 13:16:07');
INSERT INTO `relations` VALUES (245, 'insert reserve', 1, '2019-05-04 13:18:55', '2019-05-04 13:18:55');
INSERT INTO `relations` VALUES (246, 'insert reserve', 1, '2019-05-06 17:09:10', '2019-05-06 17:09:10');
INSERT INTO `relations` VALUES (247, 'insert reserve', 1, '2019-05-06 17:12:15', '2019-05-06 17:12:15');
INSERT INTO `relations` VALUES (248, 'insert reserve', 1, '2019-05-06 17:13:15', '2019-05-06 17:13:15');
INSERT INTO `relations` VALUES (249, 'insert reserve', 1, '2019-05-06 17:13:58', '2019-05-06 17:13:58');
INSERT INTO `relations` VALUES (250, 'insert reserve', 1, '2019-05-06 17:31:07', '2019-05-06 17:31:07');
INSERT INTO `relations` VALUES (251, 'insert reserve', 1, '2019-05-06 17:54:07', '2019-05-06 17:54:07');
INSERT INTO `relations` VALUES (252, 'insert reserve', 1, '2019-05-06 19:31:48', '2019-05-06 19:31:48');
INSERT INTO `relations` VALUES (253, 'insert reserve', 1, '2019-05-06 19:33:47', '2019-05-06 19:33:47');
INSERT INTO `relations` VALUES (254, 'insert reserve', 1, '2019-05-06 19:35:45', '2019-05-06 19:35:45');
INSERT INTO `relations` VALUES (255, 'insert reserve', 1, '2019-05-06 19:36:09', '2019-05-06 19:36:09');
INSERT INTO `relations` VALUES (256, 'insert reserve', 1, '2019-05-06 19:36:18', '2019-05-06 19:36:18');
INSERT INTO `relations` VALUES (257, 'insert reserve', 1, '2019-05-06 19:37:29', '2019-05-06 19:37:29');
INSERT INTO `relations` VALUES (258, 'insert reserve', 1, '2019-05-06 19:38:10', '2019-05-06 19:38:10');
INSERT INTO `relations` VALUES (259, 'insert reserve', 1, '2019-05-06 19:38:48', '2019-05-06 19:38:48');
INSERT INTO `relations` VALUES (260, 'insert reserve', 1, '2019-05-06 19:39:03', '2019-05-06 19:39:03');
INSERT INTO `relations` VALUES (261, 'insert reserve', 1, '2019-05-06 20:32:22', '2019-05-06 20:32:22');
INSERT INTO `relations` VALUES (262, 'insert reserve', 1, '2019-05-06 21:52:07', '2019-05-06 21:52:07');
INSERT INTO `relations` VALUES (263, 'insert reserve', 1, '2019-05-06 21:53:54', '2019-05-06 21:53:54');
INSERT INTO `relations` VALUES (264, 'insert reserve', 1, '2019-05-07 12:41:01', '2019-05-07 12:41:01');
INSERT INTO `relations` VALUES (265, 'insert reserve', 1, '2019-05-07 15:03:31', '2019-05-07 15:03:31');
INSERT INTO `relations` VALUES (266, 'insert reserve', 1, '2019-05-07 15:11:16', '2019-05-07 15:11:16');
INSERT INTO `relations` VALUES (267, 'insert reserve', 1, '2019-05-07 15:22:12', '2019-05-07 15:22:12');
INSERT INTO `relations` VALUES (268, 'insert reserve', 1, '2019-05-07 15:58:01', '2019-05-07 15:58:01');
INSERT INTO `relations` VALUES (269, 'insert reserve', 1, '2019-05-07 17:40:33', '2019-05-07 17:40:33');
INSERT INTO `relations` VALUES (270, 'insert reserve', 1, '2019-05-07 17:41:57', '2019-05-07 17:41:57');
INSERT INTO `relations` VALUES (271, 'insert reserve', 1, '2019-05-07 17:43:54', '2019-05-07 17:43:54');
INSERT INTO `relations` VALUES (272, 'insert reserve', 1, '2019-05-07 17:44:45', '2019-05-07 17:44:45');
INSERT INTO `relations` VALUES (273, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (274, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (275, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (276, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (277, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (278, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (279, 'test', 1, '2019-05-10 10:23:55', '2019-05-10 10:23:55');
INSERT INTO `relations` VALUES (280, 'test', 1, '2019-05-10 10:23:56', '2019-05-10 10:23:56');
INSERT INTO `relations` VALUES (281, 'test', 1, '2019-05-10 10:23:56', '2019-05-10 10:23:56');
INSERT INTO `relations` VALUES (282, 'test', 1, '2019-05-10 10:23:56', '2019-05-10 10:23:56');
INSERT INTO `relations` VALUES (283, 'test', 1, '2019-05-10 10:23:56', '2019-05-10 10:23:56');
INSERT INTO `relations` VALUES (284, 'test', 1, '2019-05-10 10:23:56', '2019-05-10 10:23:56');
INSERT INTO `relations` VALUES (285, 'test', 1, '2019-05-10 10:23:56', '2019-05-10 10:23:56');
INSERT INTO `relations` VALUES (286, 'test', 1, '2019-05-10 10:23:57', '2019-05-10 10:23:57');
INSERT INTO `relations` VALUES (287, 'test', 1, '2019-05-10 10:23:57', '2019-05-10 10:23:57');
INSERT INTO `relations` VALUES (288, 'test', 1, '2019-05-10 10:23:57', '2019-05-10 10:23:57');
INSERT INTO `relations` VALUES (289, 'test', 1, '2019-05-10 10:23:57', '2019-05-10 10:23:57');
INSERT INTO `relations` VALUES (290, 'test', 1, '2019-05-10 10:23:57', '2019-05-10 10:23:57');
INSERT INTO `relations` VALUES (291, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (292, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (293, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (294, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (295, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (296, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (297, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (298, 'test', 1, '2019-05-10 10:23:58', '2019-05-10 10:23:58');
INSERT INTO `relations` VALUES (299, 'test', 1, '2019-05-10 10:23:59', '2019-05-10 10:23:59');
INSERT INTO `relations` VALUES (300, 'test', 5, '2019-05-10 10:23:59', '2019-05-10 10:23:59');
INSERT INTO `relations` VALUES (301, 'test', 1, '2019-05-10 10:26:23', '2019-05-10 10:26:23');
INSERT INTO `relations` VALUES (302, 'test', 1, '2019-05-10 10:26:23', '2019-05-10 10:26:23');
INSERT INTO `relations` VALUES (303, 'test', 1, '2019-05-10 10:26:23', '2019-05-10 10:26:23');
INSERT INTO `relations` VALUES (304, 'test', 1, '2019-05-10 10:26:23', '2019-05-10 10:26:23');
INSERT INTO `relations` VALUES (305, 'test', 1, '2019-05-10 10:26:23', '2019-05-10 10:26:23');
INSERT INTO `relations` VALUES (306, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (307, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (308, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (309, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (310, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (311, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (312, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (313, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (314, 'test', 1, '2019-05-10 10:26:24', '2019-05-10 10:26:24');
INSERT INTO `relations` VALUES (315, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (316, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (317, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (318, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (319, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (320, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (321, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (322, 'test', 1, '2019-05-10 10:26:25', '2019-05-10 10:26:25');
INSERT INTO `relations` VALUES (323, 'test', 1, '2019-05-10 10:26:26', '2019-05-10 10:26:26');
INSERT INTO `relations` VALUES (324, 'test', 1, '2019-05-10 10:26:26', '2019-05-10 10:26:26');
INSERT INTO `relations` VALUES (325, 'test', 1, '2019-05-10 10:26:26', '2019-05-10 10:26:26');
INSERT INTO `relations` VALUES (326, 'test', 1, '2019-05-10 10:26:26', '2019-05-10 10:26:26');
INSERT INTO `relations` VALUES (327, 'test', 1, '2019-05-10 10:26:26', '2019-05-10 10:26:26');
INSERT INTO `relations` VALUES (328, 'test', 5, '2019-05-10 10:26:26', '2019-05-10 10:26:26');
INSERT INTO `relations` VALUES (329, 'test', 5, '2019-05-10 11:13:58', '2019-05-10 11:13:58');
INSERT INTO `relations` VALUES (330, 'test', 5, '2019-05-10 11:14:22', '2019-05-10 11:14:22');
INSERT INTO `relations` VALUES (333, 'test', 5, '2019-05-10 11:16:24', '2019-05-10 11:16:24');
INSERT INTO `relations` VALUES (345, 'raleted image to room', 1, '2019-05-10 11:51:28', '2019-05-10 11:51:28');
INSERT INTO `relations` VALUES (346, 'related room to price', 5, '2019-05-10 11:51:28', '2019-05-10 11:51:28');
INSERT INTO `relations` VALUES (347, 'insert room', 1, '2019-05-10 11:51:29', '2019-05-10 11:51:29');
INSERT INTO `relations` VALUES (348, 'raleted image to room', 1, '2019-05-10 12:27:59', '2019-05-10 12:27:59');
INSERT INTO `relations` VALUES (349, 'raleted image to room', 1, '2019-05-10 12:28:00', '2019-05-10 12:28:00');
INSERT INTO `relations` VALUES (350, 'related room to price', 5, '2019-05-10 12:28:00', '2019-05-10 12:28:00');
INSERT INTO `relations` VALUES (351, 'raleted image to room', 1, '2019-05-10 12:29:31', '2019-05-10 12:29:31');
INSERT INTO `relations` VALUES (352, 'raleted image to room', 1, '2019-05-10 12:29:31', '2019-05-10 12:29:31');
INSERT INTO `relations` VALUES (353, 'raleted image to room', 1, '2019-05-10 12:29:31', '2019-05-10 12:29:31');
INSERT INTO `relations` VALUES (354, 'raleted image to room', 1, '2019-05-10 12:29:31', '2019-05-10 12:29:31');
INSERT INTO `relations` VALUES (355, 'related room to price', 5, '2019-05-10 12:29:32', '2019-05-10 12:29:32');
INSERT INTO `relations` VALUES (356, 'insert reserve', 1, '2019-05-11 16:22:39', '2019-05-11 16:22:39');
INSERT INTO `relations` VALUES (357, 'insert user', 1, '2019-05-12 10:52:47', '2019-05-12 10:52:47');
INSERT INTO `relations` VALUES (358, 'insert customer', 1, '2019-05-12 12:36:48', '2019-05-12 12:36:48');
INSERT INTO `relations` VALUES (359, 'insert reserve', 1, '2019-05-13 01:13:44', '2019-05-13 01:13:44');
INSERT INTO `relations` VALUES (360, 'insert reserve', 1, '2019-05-13 02:04:12', '2019-05-13 02:04:12');
INSERT INTO `relations` VALUES (361, 'insert reserve', 1, '2019-05-13 02:05:34', '2019-05-13 02:05:34');
INSERT INTO `relations` VALUES (362, 'insert reserve', 1, '2019-05-15 23:09:35', '2019-05-15 23:09:35');
INSERT INTO `relations` VALUES (363, 'insert reserve', 1, '2019-05-15 23:10:18', '2019-05-15 23:10:18');
INSERT INTO `relations` VALUES (364, 'insert reserve', 1, '2019-05-15 23:13:16', '2019-05-15 23:13:16');
INSERT INTO `relations` VALUES (365, 'insert reserve', 1, '2019-05-15 23:14:36', '2019-05-15 23:14:36');
INSERT INTO `relations` VALUES (366, 'insert reserve', 1, '2019-05-15 23:15:55', '2019-05-15 23:15:55');
INSERT INTO `relations` VALUES (367, 'raleted image to room', 1, '2019-05-27 00:14:16', '2019-05-27 00:14:16');
INSERT INTO `relations` VALUES (368, 'raleted image to room', 1, '2019-05-27 00:14:16', '2019-05-27 00:14:16');
INSERT INTO `relations` VALUES (369, 'raleted image to room', 1, '2019-05-27 00:14:16', '2019-05-27 00:14:16');
INSERT INTO `relations` VALUES (370, 'raleted image to room', 1, '2019-05-27 00:14:16', '2019-05-27 00:14:16');
INSERT INTO `relations` VALUES (371, 'raleted image to room', 1, '2019-05-27 00:18:30', '2019-05-27 00:18:30');
INSERT INTO `relations` VALUES (372, 'raleted image to room', 1, '2019-05-27 00:18:30', '2019-05-27 00:18:30');
INSERT INTO `relations` VALUES (373, 'raleted image to room', 1, '2019-05-27 00:18:30', '2019-05-27 00:18:30');
INSERT INTO `relations` VALUES (374, 'raleted image to room', 1, '2019-05-27 00:18:31', '2019-05-27 00:18:31');
INSERT INTO `relations` VALUES (375, 'raleted image to room', 1, '2019-05-27 00:22:17', '2019-05-27 00:22:17');
INSERT INTO `relations` VALUES (376, 'raleted image to room', 1, '2019-05-27 00:22:17', '2019-05-27 00:22:17');
INSERT INTO `relations` VALUES (377, 'raleted image to room', 1, '2019-05-27 00:22:17', '2019-05-27 00:22:17');
INSERT INTO `relations` VALUES (378, 'raleted image to room', 1, '2019-05-27 00:22:17', '2019-05-27 00:22:17');
INSERT INTO `relations` VALUES (379, 'raleted image to room', 1, '2019-05-27 00:24:24', '2019-05-27 00:24:24');
INSERT INTO `relations` VALUES (380, 'raleted image to room', 1, '2019-05-27 00:24:25', '2019-05-27 00:24:25');
INSERT INTO `relations` VALUES (381, 'related room to price', 5, '2019-05-27 00:24:25', '2019-05-27 00:24:25');
INSERT INTO `relations` VALUES (382, 'raleted image to room', 1, '2019-05-27 00:26:01', '2019-05-27 00:26:01');
INSERT INTO `relations` VALUES (383, 'raleted image to room', 1, '2019-05-27 00:26:01', '2019-05-27 00:26:01');
INSERT INTO `relations` VALUES (384, 'raleted image to room', 1, '2019-05-27 00:26:01', '2019-05-27 00:26:01');
INSERT INTO `relations` VALUES (385, 'raleted image to room', 1, '2019-05-27 00:26:01', '2019-05-27 00:26:01');
INSERT INTO `relations` VALUES (386, 'raleted image to room', 1, '2019-05-27 00:29:44', '2019-05-27 00:29:44');
INSERT INTO `relations` VALUES (387, 'raleted image to room', 1, '2019-05-27 00:29:45', '2019-05-27 00:29:45');
INSERT INTO `relations` VALUES (388, 'raleted image to room', 1, '2019-05-27 00:29:45', '2019-05-27 00:29:45');
INSERT INTO `relations` VALUES (389, 'raleted image to room', 1, '2019-05-27 00:29:45', '2019-05-27 00:29:45');
INSERT INTO `relations` VALUES (390, 'raleted image to room', 1, '2019-05-27 00:33:48', '2019-05-27 00:33:48');
INSERT INTO `relations` VALUES (391, 'raleted image to room', 1, '2019-05-27 00:33:48', '2019-05-27 00:33:48');
INSERT INTO `relations` VALUES (392, 'raleted image to room', 1, '2019-05-27 00:33:48', '2019-05-27 00:33:48');
INSERT INTO `relations` VALUES (393, 'raleted image to room', 1, '2019-05-27 00:33:48', '2019-05-27 00:33:48');
INSERT INTO `relations` VALUES (394, 'raleted image to room', 1, '2019-05-27 00:36:11', '2019-05-27 00:36:11');
INSERT INTO `relations` VALUES (395, 'raleted image to room', 1, '2019-05-27 00:36:11', '2019-05-27 00:36:11');
INSERT INTO `relations` VALUES (396, 'raleted image to room', 1, '2019-05-27 00:36:11', '2019-05-27 00:36:11');
INSERT INTO `relations` VALUES (397, 'raleted image to room', 1, '2019-05-27 00:36:11', '2019-05-27 00:36:11');
INSERT INTO `relations` VALUES (398, 'raleted image to room', 1, '2019-05-27 00:36:23', '2019-05-27 00:36:23');
INSERT INTO `relations` VALUES (399, 'raleted image to room', 1, '2019-05-27 00:36:23', '2019-05-27 00:36:23');
INSERT INTO `relations` VALUES (400, 'raleted image to room', 1, '2019-05-27 00:36:24', '2019-05-27 00:36:24');
INSERT INTO `relations` VALUES (401, 'raleted image to room', 1, '2019-05-27 00:36:24', '2019-05-27 00:36:24');
INSERT INTO `relations` VALUES (402, 'raleted image to room', 1, '2019-05-27 01:27:29', '2019-05-27 01:27:29');
INSERT INTO `relations` VALUES (403, 'raleted image to room', 1, '2019-05-27 01:27:29', '2019-05-27 01:27:29');
INSERT INTO `relations` VALUES (404, 'insert user', 1, '2019-06-01 08:02:48', '2019-06-01 08:02:48');
INSERT INTO `relations` VALUES (405, NULL, 1, '2019-06-06 16:03:08', '2019-06-06 16:03:08');
INSERT INTO `relations` VALUES (406, NULL, 1, '2019-06-06 16:03:08', '2019-06-06 16:03:08');
INSERT INTO `relations` VALUES (407, 'insert reserve', 1, '2019-06-06 16:03:09', '2019-06-06 16:03:09');
INSERT INTO `relations` VALUES (408, NULL, 1, '2019-06-07 08:39:20', '2019-06-07 08:39:20');
INSERT INTO `relations` VALUES (409, 'insert reserve', 1, '2019-06-07 08:39:21', '2019-06-07 08:39:21');
INSERT INTO `relations` VALUES (410, NULL, 1, '2019-06-07 11:07:54', '2019-06-07 11:07:54');
INSERT INTO `relations` VALUES (411, 'insert reserve', 1, '2019-06-07 11:07:55', '2019-06-07 11:07:55');
INSERT INTO `relations` VALUES (412, NULL, 1, '2019-06-07 11:09:42', '2019-06-07 11:09:42');
INSERT INTO `relations` VALUES (413, 'insert reserve', 1, '2019-06-07 11:09:42', '2019-06-07 11:09:42');
INSERT INTO `relations` VALUES (414, NULL, 1, '2019-06-07 11:39:31', '2019-06-07 11:39:31');
INSERT INTO `relations` VALUES (415, 'insert reserve', 1, '2019-06-07 11:39:31', '2019-06-07 11:39:31');
INSERT INTO `relations` VALUES (416, NULL, 1, '2019-06-07 13:44:31', '2019-06-07 13:44:31');
INSERT INTO `relations` VALUES (417, 'insert reserve', 1, '2019-06-07 13:44:32', '2019-06-07 13:44:32');
INSERT INTO `relations` VALUES (418, NULL, 1, '2019-06-07 14:05:09', '2019-06-07 14:05:09');
INSERT INTO `relations` VALUES (419, 'insert reserve', 1, '2019-06-07 14:05:09', '2019-06-07 14:05:09');
INSERT INTO `relations` VALUES (420, 'raleted image to room', 1, '2019-06-09 18:19:13', '2019-06-09 18:19:13');
INSERT INTO `relations` VALUES (421, 'raleted image to room', 1, '2019-06-09 18:19:13', '2019-06-09 18:19:13');
INSERT INTO `relations` VALUES (422, 'raleted image to room', 1, '2019-06-09 18:19:13', '2019-06-09 18:19:13');
INSERT INTO `relations` VALUES (423, 'raleted image to room', 1, '2019-06-09 18:19:13', '2019-06-09 18:19:13');
INSERT INTO `relations` VALUES (424, NULL, 1, '2019-06-10 11:32:30', '2019-06-10 11:32:30');
INSERT INTO `relations` VALUES (425, 'insert reserve', 1, '2019-06-10 11:32:31', '2019-06-10 11:32:31');
INSERT INTO `relations` VALUES (426, 'related room to price', 5, '2019-06-11 13:50:36', '2019-06-11 13:50:36');
INSERT INTO `relations` VALUES (427, 'related room to price', 5, '2019-06-11 13:55:11', '2019-06-11 13:55:11');
INSERT INTO `relations` VALUES (428, 'related room to price', 5, '2019-06-11 13:56:51', '2019-06-11 13:56:51');
INSERT INTO `relations` VALUES (429, 'raleted image to room', 1, '2019-06-11 14:33:59', '2019-06-11 14:33:59');
INSERT INTO `relations` VALUES (430, 'raleted image to room', 1, '2019-06-11 14:33:59', '2019-06-11 14:33:59');
INSERT INTO `relations` VALUES (431, 'raleted image to room', 1, '2019-06-11 14:33:59', '2019-06-11 14:33:59');
INSERT INTO `relations` VALUES (432, 'raleted image to room', 1, '2019-06-11 14:33:59', '2019-06-11 14:33:59');
INSERT INTO `relations` VALUES (433, 'related room to price', 5, '2019-06-11 14:33:59', '2019-06-11 14:33:59');
INSERT INTO `relations` VALUES (434, 'insert room', 1, '2019-06-11 14:34:00', '2019-06-11 14:34:00');
INSERT INTO `relations` VALUES (435, 'related room to price', 5, '2019-06-11 18:07:56', '2019-06-11 18:07:56');
INSERT INTO `relations` VALUES (436, 'insert room', 1, '2019-06-11 18:07:57', '2019-06-11 18:07:57');
INSERT INTO `relations` VALUES (437, NULL, 1, '2019-06-19 04:38:09', '2019-06-19 04:38:09');
INSERT INTO `relations` VALUES (438, 'insert reserve', 1, '2019-06-19 04:38:11', '2019-06-19 04:38:11');
INSERT INTO `relations` VALUES (439, NULL, 1, '2019-06-19 04:41:38', '2019-06-19 04:41:38');
INSERT INTO `relations` VALUES (440, 'insert reserve', 1, '2019-06-19 04:41:42', '2019-06-19 04:41:42');
INSERT INTO `relations` VALUES (441, NULL, 1, '2019-06-19 04:41:57', '2019-06-19 04:41:57');
INSERT INTO `relations` VALUES (442, NULL, 1, '2019-06-19 04:42:01', '2019-06-19 04:42:01');
INSERT INTO `relations` VALUES (443, NULL, 1, '2019-06-19 04:47:13', '2019-06-19 04:47:13');
INSERT INTO `relations` VALUES (444, 'insert reserve', 1, '2019-06-19 04:47:14', '2019-06-19 04:47:14');
INSERT INTO `relations` VALUES (445, NULL, 1, '2019-06-19 04:47:19', '2019-06-19 04:47:19');
INSERT INTO `relations` VALUES (446, NULL, 1, '2019-06-19 05:10:59', '2019-06-19 05:10:59');
INSERT INTO `relations` VALUES (447, 'insert reserve', 1, '2019-06-19 05:10:59', '2019-06-19 05:10:59');
INSERT INTO `relations` VALUES (448, NULL, 1, '2019-06-19 05:11:05', '2019-06-19 05:11:05');
INSERT INTO `relations` VALUES (449, NULL, 1, '2019-06-19 05:43:31', '2019-06-19 05:43:31');
INSERT INTO `relations` VALUES (450, 'insert reserve', 1, '2019-06-19 05:43:31', '2019-06-19 05:43:31');
INSERT INTO `relations` VALUES (451, NULL, 1, '2019-06-19 05:43:39', '2019-06-19 05:43:39');
INSERT INTO `relations` VALUES (452, 'raleted image to room', 1, '2019-06-20 06:57:53', '2019-06-20 06:57:53');
INSERT INTO `relations` VALUES (453, 'raleted image to room', 1, '2019-06-20 06:57:54', '2019-06-20 06:57:54');
INSERT INTO `relations` VALUES (454, 'raleted image to room', 1, '2019-06-20 06:57:54', '2019-06-20 06:57:54');
INSERT INTO `relations` VALUES (455, 'raleted image to room', 1, '2019-06-20 06:57:54', '2019-06-20 06:57:54');
INSERT INTO `relations` VALUES (456, 'raleted image to room', 1, '2019-06-20 06:57:54', '2019-06-20 06:57:54');
INSERT INTO `relations` VALUES (457, 'raleted image to room', 1, '2019-06-20 06:57:54', '2019-06-20 06:57:54');
INSERT INTO `relations` VALUES (458, 'raleted image to room', 1, '2019-06-20 23:57:11', '2019-06-20 23:57:11');
INSERT INTO `relations` VALUES (459, 'raleted image to room', 1, '2019-06-20 23:57:11', '2019-06-20 23:57:11');
INSERT INTO `relations` VALUES (460, 'raleted image to room', 1, '2019-06-20 23:57:12', '2019-06-20 23:57:12');
INSERT INTO `relations` VALUES (461, 'related room to price', 5, '2019-06-20 23:57:12', '2019-06-20 23:57:12');
INSERT INTO `relations` VALUES (462, 'insert room', 1, '2019-06-20 23:57:12', '2019-06-20 23:57:12');
INSERT INTO `relations` VALUES (463, 'insert map-location', 1, '2019-06-22 06:53:14', '2019-06-22 06:53:14');
INSERT INTO `relations` VALUES (464, 'insert map-location', 1, '2019-06-23 01:24:11', '2019-06-23 01:24:11');
INSERT INTO `relations` VALUES (465, 'raleted image to room', 1, '2019-06-24 04:08:09', '2019-06-24 04:08:09');
INSERT INTO `relations` VALUES (466, 'raleted image to room', 1, '2019-06-24 04:08:09', '2019-06-24 04:08:09');
INSERT INTO `relations` VALUES (467, 'raleted image to room', 1, '2019-06-24 04:08:10', '2019-06-24 04:08:10');
INSERT INTO `relations` VALUES (468, 'raleted image to room', 1, '2019-06-24 04:08:10', '2019-06-24 04:08:10');
INSERT INTO `relations` VALUES (469, 'raleted image to room', 1, '2019-06-24 04:08:10', '2019-06-24 04:08:10');
INSERT INTO `relations` VALUES (470, 'raleted image to room', 1, '2019-06-24 04:08:10', '2019-06-24 04:08:10');
INSERT INTO `relations` VALUES (471, 'raleted image to room', 1, '2019-06-24 04:08:10', '2019-06-24 04:08:10');
INSERT INTO `relations` VALUES (472, 'raleted image to room', 1, '2019-06-24 04:08:10', '2019-06-24 04:08:10');
INSERT INTO `relations` VALUES (473, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (474, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (475, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (476, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (477, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (478, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (479, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (480, 'raleted image to room', 1, '2019-06-24 05:10:28', '2019-06-24 05:10:28');
INSERT INTO `relations` VALUES (481, 'raleted image to room', 1, '2019-06-24 05:10:29', '2019-06-24 05:10:29');
INSERT INTO `relations` VALUES (482, 'raleted image to room', 1, '2019-06-24 05:10:29', '2019-06-24 05:10:29');
INSERT INTO `relations` VALUES (483, 'raleted image to room', 1, '2019-06-24 05:10:29', '2019-06-24 05:10:29');
INSERT INTO `relations` VALUES (484, NULL, 1, '2019-06-26 00:40:19', '2019-06-26 00:40:19');
INSERT INTO `relations` VALUES (485, 'insert reserve', 1, '2019-06-26 00:40:19', '2019-06-26 00:40:19');
INSERT INTO `relations` VALUES (486, NULL, 1, '2019-06-26 07:07:35', '2019-06-26 07:07:35');
INSERT INTO `relations` VALUES (487, 'insert reserve', 1, '2019-06-26 07:07:36', '2019-06-26 07:07:36');
INSERT INTO `relations` VALUES (488, NULL, 1, '2019-06-27 03:54:33', '2019-06-27 03:54:33');
INSERT INTO `relations` VALUES (489, 'insert reserve', 1, '2019-06-27 03:54:34', '2019-06-27 03:54:34');
INSERT INTO `relations` VALUES (490, NULL, 1, '2019-06-27 03:54:42', '2019-06-27 03:54:42');
INSERT INTO `relations` VALUES (491, NULL, 1, '2019-06-27 04:11:13', '2019-06-27 04:11:13');
INSERT INTO `relations` VALUES (492, 'insert reserve', 1, '2019-06-27 04:11:13', '2019-06-27 04:11:13');
INSERT INTO `relations` VALUES (493, NULL, 1, '2019-06-27 04:11:21', '2019-06-27 04:11:21');
INSERT INTO `relations` VALUES (494, NULL, 1, '2019-06-27 05:21:05', '2019-06-27 05:21:05');
INSERT INTO `relations` VALUES (495, 'insert reserve', 1, '2019-06-27 05:21:05', '2019-06-27 05:21:05');
INSERT INTO `relations` VALUES (496, NULL, 1, '2019-06-27 05:21:17', '2019-06-27 05:21:17');
INSERT INTO `relations` VALUES (497, NULL, 1, '2019-06-27 05:21:30', '2019-06-27 05:21:30');
INSERT INTO `relations` VALUES (498, NULL, 1, '2019-06-27 05:21:40', '2019-06-27 05:21:40');
INSERT INTO `relations` VALUES (499, NULL, 1, '2019-06-27 05:21:57', '2019-06-27 05:21:57');
INSERT INTO `relations` VALUES (500, NULL, 1, '2019-06-27 05:22:08', '2019-06-27 05:22:08');
INSERT INTO `relations` VALUES (501, NULL, 1, '2019-06-27 05:55:43', '2019-06-27 05:55:43');
INSERT INTO `relations` VALUES (502, 'insert reserve', 1, '2019-06-27 05:55:44', '2019-06-27 05:55:44');
INSERT INTO `relations` VALUES (503, NULL, 1, '2019-06-27 05:55:52', '2019-06-27 05:55:52');
INSERT INTO `relations` VALUES (504, NULL, 1, '2019-06-27 05:56:05', '2019-06-27 05:56:05');
INSERT INTO `relations` VALUES (505, NULL, 1, '2019-06-27 05:56:30', '2019-06-27 05:56:30');
INSERT INTO `relations` VALUES (506, 'insert reserve', 1, '2019-06-27 06:05:53', '2019-06-27 06:05:53');
INSERT INTO `relations` VALUES (507, 'insert reserve', 1, '2019-06-27 06:20:06', '2019-06-27 06:20:06');
INSERT INTO `relations` VALUES (508, 'insert reserve', 1, '2019-06-27 06:20:57', '2019-06-27 06:20:57');
INSERT INTO `relations` VALUES (509, 'insert reserve', 1, '2019-06-27 06:45:07', '2019-06-27 06:45:07');
INSERT INTO `relations` VALUES (510, 'insert reserve', 1, '2019-06-27 06:49:06', '2019-06-27 06:49:06');
INSERT INTO `relations` VALUES (511, 'insert reserve', 1, '2019-06-27 06:53:11', '2019-06-27 06:53:11');
INSERT INTO `relations` VALUES (512, 'insert reserve', 1, '2019-06-27 06:58:20', '2019-06-27 06:58:20');
INSERT INTO `relations` VALUES (513, 'insert reserve', 1, '2019-06-27 07:05:40', '2019-06-27 07:05:40');
INSERT INTO `relations` VALUES (514, 'insert reserve', 1, '2019-06-27 07:06:27', '2019-06-27 07:06:27');
INSERT INTO `relations` VALUES (515, 'insert reserve', 1, '2019-06-29 06:50:32', '2019-06-29 06:50:32');
INSERT INTO `relations` VALUES (516, NULL, 1, '2019-06-29 06:50:43', '2019-06-29 06:50:43');
INSERT INTO `relations` VALUES (517, 'insert reserve', 1, '2019-06-29 06:54:07', '2019-06-29 06:54:07');
INSERT INTO `relations` VALUES (518, NULL, 1, '2019-06-29 06:54:14', '2019-06-29 06:54:14');
INSERT INTO `relations` VALUES (519, 'insert reserve', 1, '2019-06-29 07:08:19', '2019-06-29 07:08:19');
INSERT INTO `relations` VALUES (520, NULL, 1, '2019-06-29 07:08:34', '2019-06-29 07:08:34');
INSERT INTO `relations` VALUES (521, 'insert reserve', 1, '2019-06-29 07:12:42', '2019-06-29 07:12:42');
INSERT INTO `relations` VALUES (522, NULL, 1, '2019-06-29 07:12:52', '2019-06-29 07:12:52');
INSERT INTO `relations` VALUES (523, NULL, 1, '2019-06-29 07:13:54', '2019-06-29 07:13:54');
INSERT INTO `relations` VALUES (524, 'insert reserve', 1, '2019-06-29 07:13:54', '2019-06-29 07:13:54');
INSERT INTO `relations` VALUES (525, NULL, 1, '2019-06-29 07:14:00', '2019-06-29 07:14:00');
INSERT INTO `relations` VALUES (526, NULL, 1, '2019-06-29 07:14:10', '2019-06-29 07:14:10');
INSERT INTO `relations` VALUES (527, NULL, 1, '2019-06-29 07:14:16', '2019-06-29 07:14:16');
INSERT INTO `relations` VALUES (528, NULL, 1, '2019-06-29 08:25:00', '2019-06-29 08:25:00');
INSERT INTO `relations` VALUES (529, 'insert reserve', 1, '2019-06-29 08:25:00', '2019-06-29 08:25:00');
INSERT INTO `relations` VALUES (530, NULL, 1, '2019-06-29 08:26:16', '2019-06-29 08:26:16');
INSERT INTO `relations` VALUES (531, NULL, 1, '2019-06-29 08:27:19', '2019-06-29 08:27:19');
INSERT INTO `relations` VALUES (532, NULL, 1, '2019-06-29 08:27:47', '2019-06-29 08:27:47');
INSERT INTO `relations` VALUES (533, 'connect user to service log', 1, '2019-06-29 11:01:05', '2019-06-29 11:01:05');
INSERT INTO `relations` VALUES (534, 'insert reserve', 1, '2019-06-29 11:01:05', '2019-06-29 11:01:05');
INSERT INTO `relations` VALUES (535, 'connect user to service log', 1, '2019-06-29 11:05:18', '2019-06-29 11:05:18');
INSERT INTO `relations` VALUES (536, 'insert reserve', 1, '2019-06-29 11:05:19', '2019-06-29 11:05:19');
INSERT INTO `relations` VALUES (537, 'connect user to service log', 1, '2019-06-29 11:05:33', '2019-06-29 11:05:33');
INSERT INTO `relations` VALUES (538, 'connect user to service log', 1, '2019-06-29 11:05:55', '2019-06-29 11:05:55');
INSERT INTO `relations` VALUES (539, 'connect user to service log', 1, '2019-06-29 11:06:03', '2019-06-29 11:06:03');
INSERT INTO `relations` VALUES (540, 'raleted image to room', 1, '2019-07-03 12:54:26', '2019-07-03 12:54:26');
INSERT INTO `relations` VALUES (541, 'raleted image to room', 1, '2019-07-03 12:54:26', '2019-07-03 12:54:26');
INSERT INTO `relations` VALUES (542, 'raleted image to room', 1, '2019-07-03 12:54:26', '2019-07-03 12:54:26');
INSERT INTO `relations` VALUES (543, 'related room to price', 5, '2019-07-03 12:54:26', '2019-07-03 12:54:26');
INSERT INTO `relations` VALUES (544, 'raleted image to room', 1, '2019-07-03 12:54:54', '2019-07-03 12:54:54');
INSERT INTO `relations` VALUES (545, 'raleted image to room', 1, '2019-07-03 12:54:55', '2019-07-03 12:54:55');
INSERT INTO `relations` VALUES (546, 'raleted image to room', 1, '2019-07-03 12:54:55', '2019-07-03 12:54:55');
INSERT INTO `relations` VALUES (547, 'related room to price', 5, '2019-07-03 12:54:55', '2019-07-03 12:54:55');
INSERT INTO `relations` VALUES (548, 'raleted image to room', 1, '2019-07-03 12:57:21', '2019-07-03 12:57:21');
INSERT INTO `relations` VALUES (549, 'raleted image to room', 1, '2019-07-03 12:57:21', '2019-07-03 12:57:21');
INSERT INTO `relations` VALUES (550, 'raleted image to room', 1, '2019-07-03 12:57:21', '2019-07-03 12:57:21');
INSERT INTO `relations` VALUES (551, 'related room to price', 5, '2019-07-03 12:57:21', '2019-07-03 12:57:21');
INSERT INTO `relations` VALUES (552, 'raleted image to room', 1, '2019-07-03 12:57:35', '2019-07-03 12:57:35');
INSERT INTO `relations` VALUES (553, 'raleted image to room', 1, '2019-07-03 12:57:35', '2019-07-03 12:57:35');
INSERT INTO `relations` VALUES (554, 'raleted image to room', 1, '2019-07-03 12:57:35', '2019-07-03 12:57:35');
INSERT INTO `relations` VALUES (555, 'related room to price', 5, '2019-07-03 12:57:35', '2019-07-03 12:57:35');
INSERT INTO `relations` VALUES (556, 'raleted image to room', 1, '2019-07-03 12:57:55', '2019-07-03 12:57:55');
INSERT INTO `relations` VALUES (557, 'raleted image to room', 1, '2019-07-03 12:57:55', '2019-07-03 12:57:55');
INSERT INTO `relations` VALUES (558, 'raleted image to room', 1, '2019-07-03 12:57:55', '2019-07-03 12:57:55');
INSERT INTO `relations` VALUES (559, 'related room to price', 5, '2019-07-03 12:57:55', '2019-07-03 12:57:55');
INSERT INTO `relations` VALUES (560, 'raleted image to room', 1, '2019-07-03 12:58:08', '2019-07-03 12:58:08');
INSERT INTO `relations` VALUES (561, 'raleted image to room', 1, '2019-07-03 12:58:08', '2019-07-03 12:58:08');
INSERT INTO `relations` VALUES (562, 'raleted image to room', 1, '2019-07-03 12:58:09', '2019-07-03 12:58:09');
INSERT INTO `relations` VALUES (563, 'related room to price', 5, '2019-07-03 12:58:09', '2019-07-03 12:58:09');
INSERT INTO `relations` VALUES (564, 'raleted image to room', 1, '2019-07-03 12:59:20', '2019-07-03 12:59:20');
INSERT INTO `relations` VALUES (565, 'raleted image to room', 1, '2019-07-03 12:59:20', '2019-07-03 12:59:20');
INSERT INTO `relations` VALUES (566, 'raleted image to room', 1, '2019-07-03 12:59:21', '2019-07-03 12:59:21');
INSERT INTO `relations` VALUES (567, 'raleted image to room', 1, '2019-07-03 12:59:21', '2019-07-03 12:59:21');
INSERT INTO `relations` VALUES (568, 'related room to price', 5, '2019-07-03 12:59:21', '2019-07-03 12:59:21');
INSERT INTO `relations` VALUES (569, 'insert room', 1, '2019-07-03 12:59:21', '2019-07-03 12:59:21');
INSERT INTO `relations` VALUES (570, 'raleted image to room', 1, '2019-07-03 12:59:49', '2019-07-03 12:59:49');
INSERT INTO `relations` VALUES (571, 'raleted image to room', 1, '2019-07-03 12:59:49', '2019-07-03 12:59:49');
INSERT INTO `relations` VALUES (572, 'raleted image to room', 1, '2019-07-03 12:59:49', '2019-07-03 12:59:49');
INSERT INTO `relations` VALUES (573, 'raleted image to room', 1, '2019-07-03 12:59:50', '2019-07-03 12:59:50');
INSERT INTO `relations` VALUES (574, 'related room to price', 5, '2019-07-03 12:59:50', '2019-07-03 12:59:50');
INSERT INTO `relations` VALUES (575, 'raleted image to room', 1, '2019-07-03 13:00:04', '2019-07-03 13:00:04');
INSERT INTO `relations` VALUES (576, 'raleted image to room', 1, '2019-07-03 13:00:05', '2019-07-03 13:00:05');
INSERT INTO `relations` VALUES (577, 'raleted image to room', 1, '2019-07-03 13:00:05', '2019-07-03 13:00:05');
INSERT INTO `relations` VALUES (578, 'raleted image to room', 1, '2019-07-03 13:00:05', '2019-07-03 13:00:05');
INSERT INTO `relations` VALUES (579, 'related room to price', 5, '2019-07-03 13:00:05', '2019-07-03 13:00:05');
INSERT INTO `relations` VALUES (580, 'connect user to message', 1, '2019-07-05 19:56:49', '2019-07-05 19:56:49');
INSERT INTO `relations` VALUES (581, 'connect user to message', 1, '2019-07-06 07:55:27', '2019-07-06 07:55:27');
INSERT INTO `relations` VALUES (582, 'insert reserve', 1, '2019-07-07 21:43:44', '2019-07-07 21:43:44');
INSERT INTO `relations` VALUES (583, 'insert reserve', 1, '2019-07-07 22:15:45', '2019-07-07 22:15:45');
INSERT INTO `relations` VALUES (584, 'connect user to service log', 1, '2019-07-07 22:47:30', '2019-07-07 22:47:30');
INSERT INTO `relations` VALUES (585, 'insert reserve', 1, '2019-07-07 22:47:31', '2019-07-07 22:47:31');
INSERT INTO `relations` VALUES (586, 'insert user', 1, '2019-07-07 23:48:31', '2019-07-07 23:48:31');
INSERT INTO `relations` VALUES (587, 'connect user to service log', 1, '2019-07-08 04:24:23', '2019-07-08 04:24:23');
INSERT INTO `relations` VALUES (588, 'insert reserve', 1, '2019-07-08 04:24:23', '2019-07-08 04:24:23');
INSERT INTO `relations` VALUES (589, 'connect user to service log', 1, '2019-07-08 05:08:27', '2019-07-08 05:08:27');
INSERT INTO `relations` VALUES (590, 'insert reserve', 1, '2019-07-08 05:08:27', '2019-07-08 05:08:27');
INSERT INTO `relations` VALUES (591, 'connect user to service log', 1, '2019-07-08 05:08:33', '2019-07-08 05:08:33');
INSERT INTO `relations` VALUES (592, 'connect user to service log', 1, '2019-07-08 05:08:44', '2019-07-08 05:08:44');
INSERT INTO `relations` VALUES (593, 'connect user to service log', 1, '2019-07-08 05:08:54', '2019-07-08 05:08:54');
INSERT INTO `relations` VALUES (594, 'connect user to service log', 1, '2019-07-08 11:17:58', '2019-07-08 11:17:58');
INSERT INTO `relations` VALUES (595, 'insert reserve', 1, '2019-07-08 11:17:58', '2019-07-08 11:17:58');
INSERT INTO `relations` VALUES (596, 'connect user to service log', 1, '2019-07-08 11:18:23', '2019-07-08 11:18:23');
INSERT INTO `relations` VALUES (597, 'insert reserve', 1, '2019-07-08 11:18:24', '2019-07-08 11:18:24');
INSERT INTO `relations` VALUES (598, 'raleted image to room', 1, '2019-07-08 13:16:26', '2019-07-08 13:16:26');
INSERT INTO `relations` VALUES (599, 'raleted image to room', 1, '2019-07-08 13:16:26', '2019-07-08 13:16:26');
INSERT INTO `relations` VALUES (600, 'raleted image to room', 1, '2019-07-08 13:16:26', '2019-07-08 13:16:26');
INSERT INTO `relations` VALUES (601, 'raleted image to room', 1, '2019-07-08 13:16:26', '2019-07-08 13:16:26');
INSERT INTO `relations` VALUES (602, 'raleted image to room', 1, '2019-07-08 13:16:27', '2019-07-08 13:16:27');
INSERT INTO `relations` VALUES (603, 'related room to price', 5, '2019-07-08 13:16:27', '2019-07-08 13:16:27');
INSERT INTO `relations` VALUES (604, 'raleted image to room', 1, '2019-07-08 13:20:22', '2019-07-08 13:20:22');
INSERT INTO `relations` VALUES (605, 'raleted image to room', 1, '2019-07-08 13:20:22', '2019-07-08 13:20:22');
INSERT INTO `relations` VALUES (606, 'raleted image to room', 1, '2019-07-08 13:20:22', '2019-07-08 13:20:22');
INSERT INTO `relations` VALUES (607, 'raleted image to room', 1, '2019-07-08 13:20:22', '2019-07-08 13:20:22');
INSERT INTO `relations` VALUES (608, 'raleted image to room', 1, '2019-07-08 13:20:22', '2019-07-08 13:20:22');
INSERT INTO `relations` VALUES (609, 'related room to price', 5, '2019-07-08 13:20:22', '2019-07-08 13:20:22');
INSERT INTO `relations` VALUES (610, 'raleted image to room', 1, '2019-07-08 13:22:53', '2019-07-08 13:22:53');
INSERT INTO `relations` VALUES (611, 'raleted image to room', 1, '2019-07-08 13:22:53', '2019-07-08 13:22:53');
INSERT INTO `relations` VALUES (612, 'raleted image to room', 1, '2019-07-08 13:22:53', '2019-07-08 13:22:53');
INSERT INTO `relations` VALUES (613, 'raleted image to room', 1, '2019-07-08 13:22:53', '2019-07-08 13:22:53');
INSERT INTO `relations` VALUES (614, 'raleted image to room', 1, '2019-07-08 13:22:53', '2019-07-08 13:22:53');
INSERT INTO `relations` VALUES (615, 'related room to price', 5, '2019-07-08 13:22:53', '2019-07-08 13:22:53');
INSERT INTO `relations` VALUES (616, 'raleted image to room', 1, '2019-07-08 13:23:20', '2019-07-08 13:23:20');
INSERT INTO `relations` VALUES (617, 'raleted image to room', 1, '2019-07-08 13:23:21', '2019-07-08 13:23:21');
INSERT INTO `relations` VALUES (618, 'raleted image to room', 1, '2019-07-08 13:23:21', '2019-07-08 13:23:21');
INSERT INTO `relations` VALUES (619, 'raleted image to room', 1, '2019-07-08 13:23:21', '2019-07-08 13:23:21');
INSERT INTO `relations` VALUES (620, 'raleted image to room', 1, '2019-07-08 13:23:21', '2019-07-08 13:23:21');
INSERT INTO `relations` VALUES (621, 'related room to price', 5, '2019-07-08 13:23:21', '2019-07-08 13:23:21');
INSERT INTO `relations` VALUES (622, 'raleted image to room', 1, '2019-07-08 13:27:54', '2019-07-08 13:27:54');
INSERT INTO `relations` VALUES (623, 'raleted image to room', 1, '2019-07-08 13:27:54', '2019-07-08 13:27:54');
INSERT INTO `relations` VALUES (624, 'raleted image to room', 1, '2019-07-08 13:27:54', '2019-07-08 13:27:54');
INSERT INTO `relations` VALUES (625, 'raleted image to room', 1, '2019-07-08 13:27:55', '2019-07-08 13:27:55');
INSERT INTO `relations` VALUES (626, 'raleted image to room', 1, '2019-07-08 13:27:55', '2019-07-08 13:27:55');
INSERT INTO `relations` VALUES (627, 'related room to price', 5, '2019-07-08 13:27:55', '2019-07-08 13:27:55');
INSERT INTO `relations` VALUES (628, 'raleted image to room', 1, '2019-07-08 13:35:46', '2019-07-08 13:35:46');
INSERT INTO `relations` VALUES (629, 'raleted image to room', 1, '2019-07-08 13:35:46', '2019-07-08 13:35:46');
INSERT INTO `relations` VALUES (630, 'raleted image to room', 1, '2019-07-08 13:35:46', '2019-07-08 13:35:46');
INSERT INTO `relations` VALUES (631, 'raleted image to room', 1, '2019-07-08 13:35:46', '2019-07-08 13:35:46');
INSERT INTO `relations` VALUES (632, 'raleted image to room', 1, '2019-07-08 13:35:47', '2019-07-08 13:35:47');
INSERT INTO `relations` VALUES (633, 'related room to price', 5, '2019-07-08 13:35:47', '2019-07-08 13:35:47');
INSERT INTO `relations` VALUES (634, 'connect user to message', 1, '2019-07-13 00:17:53', '2019-07-13 00:17:53');
INSERT INTO `relations` VALUES (635, 'connect user to message', 1, '2019-07-13 21:33:30', '2019-07-13 21:33:30');
INSERT INTO `relations` VALUES (636, 'connect user to message', 1, '2019-07-13 22:17:47', '2019-07-13 22:17:47');
INSERT INTO `relations` VALUES (637, 'connect user to service log', 1, '2019-07-13 22:33:28', '2019-07-13 22:33:28');
INSERT INTO `relations` VALUES (638, 'insert reserve', 1, '2019-07-13 22:33:30', '2019-07-13 22:33:30');
INSERT INTO `relations` VALUES (639, 'connect user to service log', 1, '2019-07-14 17:45:21', '2019-07-14 17:45:21');
INSERT INTO `relations` VALUES (640, 'insert reserve', 1, '2019-07-14 17:45:22', '2019-07-14 17:45:22');
INSERT INTO `relations` VALUES (641, 'connect user to service log', 1, '2019-07-14 19:24:06', '2019-07-14 19:24:06');
INSERT INTO `relations` VALUES (642, 'insert reserve', 1, '2019-07-14 19:24:07', '2019-07-14 19:24:07');
INSERT INTO `relations` VALUES (643, 'connect user to service log', 1, '2019-07-14 19:30:01', '2019-07-14 19:30:01');
INSERT INTO `relations` VALUES (644, 'insert reserve', 1, '2019-07-14 19:30:02', '2019-07-14 19:30:02');
INSERT INTO `relations` VALUES (645, 'connect user to service log', 1, '2019-07-14 19:30:29', '2019-07-14 19:30:29');
INSERT INTO `relations` VALUES (646, 'connect user to service log', 1, '2019-07-14 19:37:34', '2019-07-14 19:37:34');
INSERT INTO `relations` VALUES (647, 'insert reserve', 1, '2019-07-14 19:37:35', '2019-07-14 19:37:35');
INSERT INTO `relations` VALUES (648, 'connect user to service log', 1, '2019-07-14 19:47:37', '2019-07-14 19:47:37');
INSERT INTO `relations` VALUES (649, 'insert reserve', 1, '2019-07-14 19:47:37', '2019-07-14 19:47:37');
INSERT INTO `relations` VALUES (650, 'connect user to service log', 1, '2019-07-14 19:47:59', '2019-07-14 19:47:59');
INSERT INTO `relations` VALUES (651, 'connect user to service log', 1, '2019-07-14 19:48:25', '2019-07-14 19:48:25');
INSERT INTO `relations` VALUES (652, 'connect user to service log', 1, '2019-07-14 19:48:45', '2019-07-14 19:48:45');

-- ----------------------------
-- Table structure for role_has_permissions
-- ----------------------------
DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions`  (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`, `role_id`) USING BTREE,
  INDEX `role_has_permissions_role_id_foreign`(`role_id`) USING BTREE,
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of role_has_permissions
-- ----------------------------
INSERT INTO `role_has_permissions` VALUES (1, 1);
INSERT INTO `role_has_permissions` VALUES (1, 2);
INSERT INTO `role_has_permissions` VALUES (2, 1);
INSERT INTO `role_has_permissions` VALUES (2, 2);
INSERT INTO `role_has_permissions` VALUES (3, 1);
INSERT INTO `role_has_permissions` VALUES (3, 2);
INSERT INTO `role_has_permissions` VALUES (4, 1);
INSERT INTO `role_has_permissions` VALUES (4, 2);
INSERT INTO `role_has_permissions` VALUES (5, 1);
INSERT INTO `role_has_permissions` VALUES (5, 2);
INSERT INTO `role_has_permissions` VALUES (6, 1);
INSERT INTO `role_has_permissions` VALUES (6, 2);
INSERT INTO `role_has_permissions` VALUES (7, 1);
INSERT INTO `role_has_permissions` VALUES (7, 2);
INSERT INTO `role_has_permissions` VALUES (8, 1);
INSERT INTO `role_has_permissions` VALUES (8, 2);
INSERT INTO `role_has_permissions` VALUES (9, 1);
INSERT INTO `role_has_permissions` VALUES (9, 2);
INSERT INTO `role_has_permissions` VALUES (10, 1);
INSERT INTO `role_has_permissions` VALUES (10, 2);
INSERT INTO `role_has_permissions` VALUES (11, 1);
INSERT INTO `role_has_permissions` VALUES (11, 2);
INSERT INTO `role_has_permissions` VALUES (12, 1);
INSERT INTO `role_has_permissions` VALUES (12, 2);
INSERT INTO `role_has_permissions` VALUES (13, 1);
INSERT INTO `role_has_permissions` VALUES (13, 2);
INSERT INTO `role_has_permissions` VALUES (14, 1);
INSERT INTO `role_has_permissions` VALUES (14, 2);
INSERT INTO `role_has_permissions` VALUES (15, 1);
INSERT INTO `role_has_permissions` VALUES (15, 2);
INSERT INTO `role_has_permissions` VALUES (16, 1);
INSERT INTO `role_has_permissions` VALUES (16, 2);
INSERT INTO `role_has_permissions` VALUES (17, 1);
INSERT INTO `role_has_permissions` VALUES (17, 2);
INSERT INTO `role_has_permissions` VALUES (18, 1);
INSERT INTO `role_has_permissions` VALUES (18, 2);
INSERT INTO `role_has_permissions` VALUES (19, 1);
INSERT INTO `role_has_permissions` VALUES (19, 2);
INSERT INTO `role_has_permissions` VALUES (20, 1);
INSERT INTO `role_has_permissions` VALUES (20, 2);
INSERT INTO `role_has_permissions` VALUES (21, 1);
INSERT INTO `role_has_permissions` VALUES (21, 2);
INSERT INTO `role_has_permissions` VALUES (22, 1);
INSERT INTO `role_has_permissions` VALUES (22, 2);
INSERT INTO `role_has_permissions` VALUES (23, 1);
INSERT INTO `role_has_permissions` VALUES (23, 2);
INSERT INTO `role_has_permissions` VALUES (24, 1);
INSERT INTO `role_has_permissions` VALUES (24, 2);
INSERT INTO `role_has_permissions` VALUES (25, 1);
INSERT INTO `role_has_permissions` VALUES (25, 2);
INSERT INTO `role_has_permissions` VALUES (26, 1);
INSERT INTO `role_has_permissions` VALUES (26, 2);
INSERT INTO `role_has_permissions` VALUES (27, 1);
INSERT INTO `role_has_permissions` VALUES (27, 2);
INSERT INTO `role_has_permissions` VALUES (28, 1);
INSERT INTO `role_has_permissions` VALUES (28, 2);
INSERT INTO `role_has_permissions` VALUES (29, 1);
INSERT INTO `role_has_permissions` VALUES (29, 2);
INSERT INTO `role_has_permissions` VALUES (30, 1);
INSERT INTO `role_has_permissions` VALUES (30, 2);
INSERT INTO `role_has_permissions` VALUES (31, 1);
INSERT INTO `role_has_permissions` VALUES (31, 2);
INSERT INTO `role_has_permissions` VALUES (32, 1);
INSERT INTO `role_has_permissions` VALUES (32, 2);
INSERT INTO `role_has_permissions` VALUES (33, 1);
INSERT INTO `role_has_permissions` VALUES (33, 2);
INSERT INTO `role_has_permissions` VALUES (34, 1);
INSERT INTO `role_has_permissions` VALUES (34, 2);
INSERT INTO `role_has_permissions` VALUES (35, 1);
INSERT INTO `role_has_permissions` VALUES (35, 2);
INSERT INTO `role_has_permissions` VALUES (36, 1);
INSERT INTO `role_has_permissions` VALUES (36, 2);
INSERT INTO `role_has_permissions` VALUES (37, 1);
INSERT INTO `role_has_permissions` VALUES (37, 2);
INSERT INTO `role_has_permissions` VALUES (38, 1);
INSERT INTO `role_has_permissions` VALUES (38, 2);
INSERT INTO `role_has_permissions` VALUES (39, 1);
INSERT INTO `role_has_permissions` VALUES (39, 2);
INSERT INTO `role_has_permissions` VALUES (40, 1);
INSERT INTO `role_has_permissions` VALUES (40, 2);
INSERT INTO `role_has_permissions` VALUES (41, 1);
INSERT INTO `role_has_permissions` VALUES (41, 2);
INSERT INTO `role_has_permissions` VALUES (42, 1);
INSERT INTO `role_has_permissions` VALUES (42, 2);
INSERT INTO `role_has_permissions` VALUES (43, 1);
INSERT INTO `role_has_permissions` VALUES (44, 1);
INSERT INTO `role_has_permissions` VALUES (45, 1);
INSERT INTO `role_has_permissions` VALUES (46, 1);
INSERT INTO `role_has_permissions` VALUES (47, 1);
INSERT INTO `role_has_permissions` VALUES (48, 1);
INSERT INTO `role_has_permissions` VALUES (49, 1);
INSERT INTO `role_has_permissions` VALUES (50, 1);
INSERT INTO `role_has_permissions` VALUES (51, 1);
INSERT INTO `role_has_permissions` VALUES (52, 1);
INSERT INTO `role_has_permissions` VALUES (53, 1);
INSERT INTO `role_has_permissions` VALUES (54, 1);
INSERT INTO `role_has_permissions` VALUES (55, 1);
INSERT INTO `role_has_permissions` VALUES (56, 1);
INSERT INTO `role_has_permissions` VALUES (57, 1);
INSERT INTO `role_has_permissions` VALUES (57, 2);
INSERT INTO `role_has_permissions` VALUES (58, 1);
INSERT INTO `role_has_permissions` VALUES (58, 2);
INSERT INTO `role_has_permissions` VALUES (59, 1);
INSERT INTO `role_has_permissions` VALUES (59, 2);
INSERT INTO `role_has_permissions` VALUES (60, 1);
INSERT INTO `role_has_permissions` VALUES (60, 2);
INSERT INTO `role_has_permissions` VALUES (61, 1);
INSERT INTO `role_has_permissions` VALUES (61, 2);
INSERT INTO `role_has_permissions` VALUES (62, 1);
INSERT INTO `role_has_permissions` VALUES (62, 2);
INSERT INTO `role_has_permissions` VALUES (63, 1);
INSERT INTO `role_has_permissions` VALUES (63, 2);
INSERT INTO `role_has_permissions` VALUES (64, 1);
INSERT INTO `role_has_permissions` VALUES (64, 2);
INSERT INTO `role_has_permissions` VALUES (65, 1);
INSERT INTO `role_has_permissions` VALUES (65, 2);
INSERT INTO `role_has_permissions` VALUES (66, 1);
INSERT INTO `role_has_permissions` VALUES (66, 2);
INSERT INTO `role_has_permissions` VALUES (67, 1);
INSERT INTO `role_has_permissions` VALUES (67, 2);
INSERT INTO `role_has_permissions` VALUES (68, 1);
INSERT INTO `role_has_permissions` VALUES (68, 2);
INSERT INTO `role_has_permissions` VALUES (69, 1);
INSERT INTO `role_has_permissions` VALUES (69, 2);
INSERT INTO `role_has_permissions` VALUES (70, 1);
INSERT INTO `role_has_permissions` VALUES (70, 2);
INSERT INTO `role_has_permissions` VALUES (71, 1);
INSERT INTO `role_has_permissions` VALUES (71, 2);
INSERT INTO `role_has_permissions` VALUES (72, 1);
INSERT INTO `role_has_permissions` VALUES (72, 2);
INSERT INTO `role_has_permissions` VALUES (73, 1);
INSERT INTO `role_has_permissions` VALUES (73, 2);
INSERT INTO `role_has_permissions` VALUES (74, 1);
INSERT INTO `role_has_permissions` VALUES (74, 2);
INSERT INTO `role_has_permissions` VALUES (75, 1);
INSERT INTO `role_has_permissions` VALUES (75, 2);
INSERT INTO `role_has_permissions` VALUES (76, 1);
INSERT INTO `role_has_permissions` VALUES (76, 2);
INSERT INTO `role_has_permissions` VALUES (77, 1);
INSERT INTO `role_has_permissions` VALUES (77, 2);
INSERT INTO `role_has_permissions` VALUES (78, 1);
INSERT INTO `role_has_permissions` VALUES (78, 2);
INSERT INTO `role_has_permissions` VALUES (79, 1);
INSERT INTO `role_has_permissions` VALUES (79, 2);
INSERT INTO `role_has_permissions` VALUES (80, 1);
INSERT INTO `role_has_permissions` VALUES (80, 2);
INSERT INTO `role_has_permissions` VALUES (81, 1);
INSERT INTO `role_has_permissions` VALUES (81, 2);
INSERT INTO `role_has_permissions` VALUES (82, 1);
INSERT INTO `role_has_permissions` VALUES (82, 2);
INSERT INTO `role_has_permissions` VALUES (83, 1);
INSERT INTO `role_has_permissions` VALUES (83, 2);
INSERT INTO `role_has_permissions` VALUES (84, 1);
INSERT INTO `role_has_permissions` VALUES (84, 2);
INSERT INTO `role_has_permissions` VALUES (85, 1);
INSERT INTO `role_has_permissions` VALUES (85, 2);
INSERT INTO `role_has_permissions` VALUES (86, 1);
INSERT INTO `role_has_permissions` VALUES (86, 2);
INSERT INTO `role_has_permissions` VALUES (87, 1);
INSERT INTO `role_has_permissions` VALUES (87, 2);
INSERT INTO `role_has_permissions` VALUES (88, 1);
INSERT INTO `role_has_permissions` VALUES (88, 2);
INSERT INTO `role_has_permissions` VALUES (89, 1);
INSERT INTO `role_has_permissions` VALUES (89, 2);
INSERT INTO `role_has_permissions` VALUES (90, 1);
INSERT INTO `role_has_permissions` VALUES (90, 2);
INSERT INTO `role_has_permissions` VALUES (91, 1);
INSERT INTO `role_has_permissions` VALUES (91, 2);
INSERT INTO `role_has_permissions` VALUES (92, 1);
INSERT INTO `role_has_permissions` VALUES (92, 2);
INSERT INTO `role_has_permissions` VALUES (93, 1);
INSERT INTO `role_has_permissions` VALUES (93, 2);
INSERT INTO `role_has_permissions` VALUES (94, 1);
INSERT INTO `role_has_permissions` VALUES (94, 2);
INSERT INTO `role_has_permissions` VALUES (95, 1);
INSERT INTO `role_has_permissions` VALUES (95, 2);
INSERT INTO `role_has_permissions` VALUES (96, 1);
INSERT INTO `role_has_permissions` VALUES (96, 2);
INSERT INTO `role_has_permissions` VALUES (97, 1);
INSERT INTO `role_has_permissions` VALUES (97, 2);
INSERT INTO `role_has_permissions` VALUES (98, 1);
INSERT INTO `role_has_permissions` VALUES (98, 2);
INSERT INTO `role_has_permissions` VALUES (99, 1);
INSERT INTO `role_has_permissions` VALUES (99, 2);
INSERT INTO `role_has_permissions` VALUES (100, 1);
INSERT INTO `role_has_permissions` VALUES (100, 2);
INSERT INTO `role_has_permissions` VALUES (101, 1);
INSERT INTO `role_has_permissions` VALUES (101, 2);
INSERT INTO `role_has_permissions` VALUES (102, 1);
INSERT INTO `role_has_permissions` VALUES (102, 2);
INSERT INTO `role_has_permissions` VALUES (103, 1);
INSERT INTO `role_has_permissions` VALUES (103, 2);
INSERT INTO `role_has_permissions` VALUES (104, 1);
INSERT INTO `role_has_permissions` VALUES (104, 2);
INSERT INTO `role_has_permissions` VALUES (105, 1);
INSERT INTO `role_has_permissions` VALUES (105, 2);
INSERT INTO `role_has_permissions` VALUES (106, 1);
INSERT INTO `role_has_permissions` VALUES (106, 2);
INSERT INTO `role_has_permissions` VALUES (107, 1);
INSERT INTO `role_has_permissions` VALUES (107, 2);
INSERT INTO `role_has_permissions` VALUES (108, 1);
INSERT INTO `role_has_permissions` VALUES (108, 2);
INSERT INTO `role_has_permissions` VALUES (109, 1);
INSERT INTO `role_has_permissions` VALUES (109, 2);
INSERT INTO `role_has_permissions` VALUES (110, 1);
INSERT INTO `role_has_permissions` VALUES (110, 2);
INSERT INTO `role_has_permissions` VALUES (111, 1);
INSERT INTO `role_has_permissions` VALUES (111, 2);
INSERT INTO `role_has_permissions` VALUES (112, 1);
INSERT INTO `role_has_permissions` VALUES (112, 2);
INSERT INTO `role_has_permissions` VALUES (113, 1);
INSERT INTO `role_has_permissions` VALUES (113, 2);
INSERT INTO `role_has_permissions` VALUES (114, 1);
INSERT INTO `role_has_permissions` VALUES (114, 2);
INSERT INTO `role_has_permissions` VALUES (115, 1);
INSERT INTO `role_has_permissions` VALUES (115, 2);
INSERT INTO `role_has_permissions` VALUES (116, 1);
INSERT INTO `role_has_permissions` VALUES (116, 2);
INSERT INTO `role_has_permissions` VALUES (117, 1);
INSERT INTO `role_has_permissions` VALUES (117, 2);
INSERT INTO `role_has_permissions` VALUES (118, 1);
INSERT INTO `role_has_permissions` VALUES (118, 2);
INSERT INTO `role_has_permissions` VALUES (119, 1);
INSERT INTO `role_has_permissions` VALUES (119, 2);
INSERT INTO `role_has_permissions` VALUES (120, 1);
INSERT INTO `role_has_permissions` VALUES (120, 2);
INSERT INTO `role_has_permissions` VALUES (121, 1);
INSERT INTO `role_has_permissions` VALUES (121, 2);
INSERT INTO `role_has_permissions` VALUES (122, 1);
INSERT INTO `role_has_permissions` VALUES (122, 2);
INSERT INTO `role_has_permissions` VALUES (123, 1);
INSERT INTO `role_has_permissions` VALUES (123, 2);
INSERT INTO `role_has_permissions` VALUES (124, 1);
INSERT INTO `role_has_permissions` VALUES (124, 2);
INSERT INTO `role_has_permissions` VALUES (125, 1);
INSERT INTO `role_has_permissions` VALUES (125, 2);
INSERT INTO `role_has_permissions` VALUES (126, 1);
INSERT INTO `role_has_permissions` VALUES (126, 2);
INSERT INTO `role_has_permissions` VALUES (127, 1);
INSERT INTO `role_has_permissions` VALUES (127, 2);
INSERT INTO `role_has_permissions` VALUES (128, 1);
INSERT INTO `role_has_permissions` VALUES (128, 2);
INSERT INTO `role_has_permissions` VALUES (129, 1);
INSERT INTO `role_has_permissions` VALUES (129, 2);
INSERT INTO `role_has_permissions` VALUES (130, 1);
INSERT INTO `role_has_permissions` VALUES (130, 2);
INSERT INTO `role_has_permissions` VALUES (131, 1);
INSERT INTO `role_has_permissions` VALUES (131, 2);
INSERT INTO `role_has_permissions` VALUES (132, 1);
INSERT INTO `role_has_permissions` VALUES (133, 1);
INSERT INTO `role_has_permissions` VALUES (134, 1);
INSERT INTO `role_has_permissions` VALUES (135, 1);
INSERT INTO `role_has_permissions` VALUES (136, 1);
INSERT INTO `role_has_permissions` VALUES (137, 1);
INSERT INTO `role_has_permissions` VALUES (138, 1);
INSERT INTO `role_has_permissions` VALUES (139, 1);
INSERT INTO `role_has_permissions` VALUES (140, 1);
INSERT INTO `role_has_permissions` VALUES (141, 1);
INSERT INTO `role_has_permissions` VALUES (142, 1);
INSERT INTO `role_has_permissions` VALUES (143, 1);
INSERT INTO `role_has_permissions` VALUES (144, 1);
INSERT INTO `role_has_permissions` VALUES (145, 1);
INSERT INTO `role_has_permissions` VALUES (146, 1);
INSERT INTO `role_has_permissions` VALUES (147, 1);
INSERT INTO `role_has_permissions` VALUES (148, 1);
INSERT INTO `role_has_permissions` VALUES (149, 1);
INSERT INTO `role_has_permissions` VALUES (150, 1);
INSERT INTO `role_has_permissions` VALUES (151, 1);
INSERT INTO `role_has_permissions` VALUES (152, 1);
INSERT INTO `role_has_permissions` VALUES (153, 1);
INSERT INTO `role_has_permissions` VALUES (154, 1);
INSERT INTO `role_has_permissions` VALUES (155, 1);
INSERT INTO `role_has_permissions` VALUES (156, 1);
INSERT INTO `role_has_permissions` VALUES (157, 1);
INSERT INTO `role_has_permissions` VALUES (158, 1);
INSERT INTO `role_has_permissions` VALUES (159, 1);
INSERT INTO `role_has_permissions` VALUES (160, 1);
INSERT INTO `role_has_permissions` VALUES (161, 1);
INSERT INTO `role_has_permissions` VALUES (162, 1);
INSERT INTO `role_has_permissions` VALUES (163, 1);
INSERT INTO `role_has_permissions` VALUES (164, 1);
INSERT INTO `role_has_permissions` VALUES (165, 1);
INSERT INTO `role_has_permissions` VALUES (166, 1);
INSERT INTO `role_has_permissions` VALUES (167, 1);
INSERT INTO `role_has_permissions` VALUES (167, 2);
INSERT INTO `role_has_permissions` VALUES (168, 1);
INSERT INTO `role_has_permissions` VALUES (168, 2);
INSERT INTO `role_has_permissions` VALUES (169, 1);
INSERT INTO `role_has_permissions` VALUES (169, 2);
INSERT INTO `role_has_permissions` VALUES (170, 1);
INSERT INTO `role_has_permissions` VALUES (170, 2);
INSERT INTO `role_has_permissions` VALUES (171, 1);
INSERT INTO `role_has_permissions` VALUES (171, 2);
INSERT INTO `role_has_permissions` VALUES (172, 1);
INSERT INTO `role_has_permissions` VALUES (172, 2);
INSERT INTO `role_has_permissions` VALUES (173, 1);
INSERT INTO `role_has_permissions` VALUES (173, 2);
INSERT INTO `role_has_permissions` VALUES (174, 1);
INSERT INTO `role_has_permissions` VALUES (174, 2);
INSERT INTO `role_has_permissions` VALUES (175, 1);
INSERT INTO `role_has_permissions` VALUES (175, 2);
INSERT INTO `role_has_permissions` VALUES (176, 1);
INSERT INTO `role_has_permissions` VALUES (176, 2);
INSERT INTO `role_has_permissions` VALUES (177, 1);
INSERT INTO `role_has_permissions` VALUES (177, 2);
INSERT INTO `role_has_permissions` VALUES (178, 1);
INSERT INTO `role_has_permissions` VALUES (178, 2);
INSERT INTO `role_has_permissions` VALUES (179, 1);
INSERT INTO `role_has_permissions` VALUES (179, 2);
INSERT INTO `role_has_permissions` VALUES (180, 1);
INSERT INTO `role_has_permissions` VALUES (180, 2);
INSERT INTO `role_has_permissions` VALUES (181, 1);
INSERT INTO `role_has_permissions` VALUES (181, 2);
INSERT INTO `role_has_permissions` VALUES (182, 1);
INSERT INTO `role_has_permissions` VALUES (182, 2);
INSERT INTO `role_has_permissions` VALUES (183, 1);
INSERT INTO `role_has_permissions` VALUES (183, 2);
INSERT INTO `role_has_permissions` VALUES (184, 1);
INSERT INTO `role_has_permissions` VALUES (184, 2);
INSERT INTO `role_has_permissions` VALUES (185, 1);
INSERT INTO `role_has_permissions` VALUES (185, 2);
INSERT INTO `role_has_permissions` VALUES (186, 1);
INSERT INTO `role_has_permissions` VALUES (186, 2);
INSERT INTO `role_has_permissions` VALUES (187, 1);
INSERT INTO `role_has_permissions` VALUES (187, 2);
INSERT INTO `role_has_permissions` VALUES (188, 1);
INSERT INTO `role_has_permissions` VALUES (188, 2);
INSERT INTO `role_has_permissions` VALUES (189, 1);
INSERT INTO `role_has_permissions` VALUES (189, 2);
INSERT INTO `role_has_permissions` VALUES (190, 1);
INSERT INTO `role_has_permissions` VALUES (190, 2);
INSERT INTO `role_has_permissions` VALUES (191, 1);
INSERT INTO `role_has_permissions` VALUES (191, 2);
INSERT INTO `role_has_permissions` VALUES (192, 1);
INSERT INTO `role_has_permissions` VALUES (192, 2);
INSERT INTO `role_has_permissions` VALUES (193, 1);
INSERT INTO `role_has_permissions` VALUES (193, 2);
INSERT INTO `role_has_permissions` VALUES (194, 1);
INSERT INTO `role_has_permissions` VALUES (194, 2);
INSERT INTO `role_has_permissions` VALUES (195, 1);
INSERT INTO `role_has_permissions` VALUES (195, 2);
INSERT INTO `role_has_permissions` VALUES (196, 1);
INSERT INTO `role_has_permissions` VALUES (196, 2);
INSERT INTO `role_has_permissions` VALUES (197, 1);
INSERT INTO `role_has_permissions` VALUES (197, 2);
INSERT INTO `role_has_permissions` VALUES (198, 1);
INSERT INTO `role_has_permissions` VALUES (199, 1);
INSERT INTO `role_has_permissions` VALUES (200, 1);
INSERT INTO `role_has_permissions` VALUES (201, 1);
INSERT INTO `role_has_permissions` VALUES (202, 1);
INSERT INTO `role_has_permissions` VALUES (203, 1);
INSERT INTO `role_has_permissions` VALUES (204, 1);
INSERT INTO `role_has_permissions` VALUES (205, 1);
INSERT INTO `role_has_permissions` VALUES (205, 2);
INSERT INTO `role_has_permissions` VALUES (206, 1);
INSERT INTO `role_has_permissions` VALUES (206, 2);
INSERT INTO `role_has_permissions` VALUES (207, 1);
INSERT INTO `role_has_permissions` VALUES (207, 2);
INSERT INTO `role_has_permissions` VALUES (208, 1);
INSERT INTO `role_has_permissions` VALUES (208, 2);
INSERT INTO `role_has_permissions` VALUES (209, 1);
INSERT INTO `role_has_permissions` VALUES (209, 2);
INSERT INTO `role_has_permissions` VALUES (210, 1);
INSERT INTO `role_has_permissions` VALUES (210, 2);
INSERT INTO `role_has_permissions` VALUES (211, 1);
INSERT INTO `role_has_permissions` VALUES (211, 2);
INSERT INTO `role_has_permissions` VALUES (212, 1);
INSERT INTO `role_has_permissions` VALUES (212, 2);
INSERT INTO `role_has_permissions` VALUES (213, 1);
INSERT INTO `role_has_permissions` VALUES (213, 2);
INSERT INTO `role_has_permissions` VALUES (214, 1);
INSERT INTO `role_has_permissions` VALUES (214, 2);
INSERT INTO `role_has_permissions` VALUES (215, 1);
INSERT INTO `role_has_permissions` VALUES (215, 2);
INSERT INTO `role_has_permissions` VALUES (216, 1);
INSERT INTO `role_has_permissions` VALUES (216, 2);
INSERT INTO `role_has_permissions` VALUES (217, 1);
INSERT INTO `role_has_permissions` VALUES (217, 2);
INSERT INTO `role_has_permissions` VALUES (218, 1);
INSERT INTO `role_has_permissions` VALUES (218, 2);
INSERT INTO `role_has_permissions` VALUES (219, 1);
INSERT INTO `role_has_permissions` VALUES (219, 2);
INSERT INTO `role_has_permissions` VALUES (220, 1);
INSERT INTO `role_has_permissions` VALUES (220, 2);
INSERT INTO `role_has_permissions` VALUES (221, 1);
INSERT INTO `role_has_permissions` VALUES (221, 2);
INSERT INTO `role_has_permissions` VALUES (222, 1);
INSERT INTO `role_has_permissions` VALUES (222, 2);
INSERT INTO `role_has_permissions` VALUES (223, 1);
INSERT INTO `role_has_permissions` VALUES (224, 1);
INSERT INTO `role_has_permissions` VALUES (225, 1);
INSERT INTO `role_has_permissions` VALUES (225, 2);
INSERT INTO `role_has_permissions` VALUES (226, 1);
INSERT INTO `role_has_permissions` VALUES (226, 2);
INSERT INTO `role_has_permissions` VALUES (227, 1);
INSERT INTO `role_has_permissions` VALUES (228, 1);
INSERT INTO `role_has_permissions` VALUES (229, 1);
INSERT INTO `role_has_permissions` VALUES (230, 1);
INSERT INTO `role_has_permissions` VALUES (231, 1);
INSERT INTO `role_has_permissions` VALUES (232, 1);
INSERT INTO `role_has_permissions` VALUES (232, 2);
INSERT INTO `role_has_permissions` VALUES (233, 1);
INSERT INTO `role_has_permissions` VALUES (233, 2);
INSERT INTO `role_has_permissions` VALUES (234, 1);
INSERT INTO `role_has_permissions` VALUES (234, 2);
INSERT INTO `role_has_permissions` VALUES (235, 1);
INSERT INTO `role_has_permissions` VALUES (235, 2);
INSERT INTO `role_has_permissions` VALUES (236, 1);
INSERT INTO `role_has_permissions` VALUES (236, 2);
INSERT INTO `role_has_permissions` VALUES (237, 1);
INSERT INTO `role_has_permissions` VALUES (237, 2);
INSERT INTO `role_has_permissions` VALUES (238, 1);
INSERT INTO `role_has_permissions` VALUES (238, 2);
INSERT INTO `role_has_permissions` VALUES (239, 1);
INSERT INTO `role_has_permissions` VALUES (240, 1);
INSERT INTO `role_has_permissions` VALUES (241, 1);
INSERT INTO `role_has_permissions` VALUES (242, 1);
INSERT INTO `role_has_permissions` VALUES (243, 1);
INSERT INTO `role_has_permissions` VALUES (244, 1);
INSERT INTO `role_has_permissions` VALUES (245, 1);
INSERT INTO `role_has_permissions` VALUES (246, 1);
INSERT INTO `role_has_permissions` VALUES (247, 1);
INSERT INTO `role_has_permissions` VALUES (248, 1);
INSERT INTO `role_has_permissions` VALUES (249, 1);
INSERT INTO `role_has_permissions` VALUES (250, 1);
INSERT INTO `role_has_permissions` VALUES (251, 1);
INSERT INTO `role_has_permissions` VALUES (252, 1);
INSERT INTO `role_has_permissions` VALUES (253, 1);
INSERT INTO `role_has_permissions` VALUES (254, 1);
INSERT INTO `role_has_permissions` VALUES (255, 1);
INSERT INTO `role_has_permissions` VALUES (256, 1);
INSERT INTO `role_has_permissions` VALUES (257, 1);
INSERT INTO `role_has_permissions` VALUES (258, 1);
INSERT INTO `role_has_permissions` VALUES (259, 1);
INSERT INTO `role_has_permissions` VALUES (260, 1);
INSERT INTO `role_has_permissions` VALUES (261, 1);
INSERT INTO `role_has_permissions` VALUES (262, 1);
INSERT INTO `role_has_permissions` VALUES (263, 1);
INSERT INTO `role_has_permissions` VALUES (264, 1);
INSERT INTO `role_has_permissions` VALUES (265, 1);
INSERT INTO `role_has_permissions` VALUES (266, 1);
INSERT INTO `role_has_permissions` VALUES (267, 1);
INSERT INTO `role_has_permissions` VALUES (268, 1);
INSERT INTO `role_has_permissions` VALUES (269, 1);
INSERT INTO `role_has_permissions` VALUES (270, 1);
INSERT INTO `role_has_permissions` VALUES (271, 1);
INSERT INTO `role_has_permissions` VALUES (272, 1);
INSERT INTO `role_has_permissions` VALUES (273, 1);
INSERT INTO `role_has_permissions` VALUES (274, 1);
INSERT INTO `role_has_permissions` VALUES (275, 1);
INSERT INTO `role_has_permissions` VALUES (276, 1);
INSERT INTO `role_has_permissions` VALUES (277, 1);
INSERT INTO `role_has_permissions` VALUES (278, 1);
INSERT INTO `role_has_permissions` VALUES (279, 1);
INSERT INTO `role_has_permissions` VALUES (280, 1);
INSERT INTO `role_has_permissions` VALUES (281, 1);
INSERT INTO `role_has_permissions` VALUES (282, 1);
INSERT INTO `role_has_permissions` VALUES (283, 1);
INSERT INTO `role_has_permissions` VALUES (284, 1);
INSERT INTO `role_has_permissions` VALUES (285, 1);
INSERT INTO `role_has_permissions` VALUES (286, 1);
INSERT INTO `role_has_permissions` VALUES (287, 1);
INSERT INTO `role_has_permissions` VALUES (288, 1);
INSERT INTO `role_has_permissions` VALUES (289, 1);
INSERT INTO `role_has_permissions` VALUES (290, 1);
INSERT INTO `role_has_permissions` VALUES (291, 1);
INSERT INTO `role_has_permissions` VALUES (292, 1);
INSERT INTO `role_has_permissions` VALUES (293, 1);
INSERT INTO `role_has_permissions` VALUES (294, 1);
INSERT INTO `role_has_permissions` VALUES (295, 1);
INSERT INTO `role_has_permissions` VALUES (296, 1);
INSERT INTO `role_has_permissions` VALUES (297, 1);
INSERT INTO `role_has_permissions` VALUES (298, 1);
INSERT INTO `role_has_permissions` VALUES (299, 1);
INSERT INTO `role_has_permissions` VALUES (300, 1);
INSERT INTO `role_has_permissions` VALUES (301, 1);
INSERT INTO `role_has_permissions` VALUES (302, 1);
INSERT INTO `role_has_permissions` VALUES (303, 1);
INSERT INTO `role_has_permissions` VALUES (304, 1);
INSERT INTO `role_has_permissions` VALUES (305, 1);
INSERT INTO `role_has_permissions` VALUES (306, 1);
INSERT INTO `role_has_permissions` VALUES (307, 1);
INSERT INTO `role_has_permissions` VALUES (308, 1);
INSERT INTO `role_has_permissions` VALUES (309, 1);
INSERT INTO `role_has_permissions` VALUES (310, 1);
INSERT INTO `role_has_permissions` VALUES (311, 1);
INSERT INTO `role_has_permissions` VALUES (312, 1);
INSERT INTO `role_has_permissions` VALUES (313, 1);
INSERT INTO `role_has_permissions` VALUES (314, 1);
INSERT INTO `role_has_permissions` VALUES (315, 1);
INSERT INTO `role_has_permissions` VALUES (316, 1);
INSERT INTO `role_has_permissions` VALUES (317, 1);
INSERT INTO `role_has_permissions` VALUES (318, 1);
INSERT INTO `role_has_permissions` VALUES (319, 1);
INSERT INTO `role_has_permissions` VALUES (320, 1);
INSERT INTO `role_has_permissions` VALUES (321, 1);
INSERT INTO `role_has_permissions` VALUES (322, 1);
INSERT INTO `role_has_permissions` VALUES (323, 1);
INSERT INTO `role_has_permissions` VALUES (324, 1);
INSERT INTO `role_has_permissions` VALUES (325, 1);
INSERT INTO `role_has_permissions` VALUES (326, 1);
INSERT INTO `role_has_permissions` VALUES (327, 1);
INSERT INTO `role_has_permissions` VALUES (328, 1);
INSERT INTO `role_has_permissions` VALUES (329, 1);
INSERT INTO `role_has_permissions` VALUES (330, 1);
INSERT INTO `role_has_permissions` VALUES (331, 1);
INSERT INTO `role_has_permissions` VALUES (332, 1);
INSERT INTO `role_has_permissions` VALUES (333, 1);
INSERT INTO `role_has_permissions` VALUES (334, 1);
INSERT INTO `role_has_permissions` VALUES (335, 1);
INSERT INTO `role_has_permissions` VALUES (336, 1);
INSERT INTO `role_has_permissions` VALUES (337, 1);
INSERT INTO `role_has_permissions` VALUES (338, 1);
INSERT INTO `role_has_permissions` VALUES (339, 1);
INSERT INTO `role_has_permissions` VALUES (340, 1);
INSERT INTO `role_has_permissions` VALUES (341, 1);
INSERT INTO `role_has_permissions` VALUES (342, 1);
INSERT INTO `role_has_permissions` VALUES (343, 1);
INSERT INTO `role_has_permissions` VALUES (344, 1);
INSERT INTO `role_has_permissions` VALUES (345, 1);
INSERT INTO `role_has_permissions` VALUES (346, 1);
INSERT INTO `role_has_permissions` VALUES (347, 1);
INSERT INTO `role_has_permissions` VALUES (348, 1);
INSERT INTO `role_has_permissions` VALUES (349, 1);
INSERT INTO `role_has_permissions` VALUES (350, 1);
INSERT INTO `role_has_permissions` VALUES (351, 1);
INSERT INTO `role_has_permissions` VALUES (352, 1);
INSERT INTO `role_has_permissions` VALUES (353, 1);
INSERT INTO `role_has_permissions` VALUES (354, 1);
INSERT INTO `role_has_permissions` VALUES (355, 1);
INSERT INTO `role_has_permissions` VALUES (356, 1);
INSERT INTO `role_has_permissions` VALUES (357, 1);
INSERT INTO `role_has_permissions` VALUES (358, 1);
INSERT INTO `role_has_permissions` VALUES (359, 1);
INSERT INTO `role_has_permissions` VALUES (360, 1);
INSERT INTO `role_has_permissions` VALUES (361, 1);
INSERT INTO `role_has_permissions` VALUES (362, 1);
INSERT INTO `role_has_permissions` VALUES (363, 1);
INSERT INTO `role_has_permissions` VALUES (364, 1);
INSERT INTO `role_has_permissions` VALUES (365, 1);
INSERT INTO `role_has_permissions` VALUES (366, 1);
INSERT INTO `role_has_permissions` VALUES (367, 1);
INSERT INTO `role_has_permissions` VALUES (368, 1);
INSERT INTO `role_has_permissions` VALUES (369, 1);
INSERT INTO `role_has_permissions` VALUES (370, 1);
INSERT INTO `role_has_permissions` VALUES (371, 1);
INSERT INTO `role_has_permissions` VALUES (372, 1);
INSERT INTO `role_has_permissions` VALUES (373, 1);
INSERT INTO `role_has_permissions` VALUES (374, 1);
INSERT INTO `role_has_permissions` VALUES (375, 1);
INSERT INTO `role_has_permissions` VALUES (376, 1);
INSERT INTO `role_has_permissions` VALUES (377, 1);
INSERT INTO `role_has_permissions` VALUES (378, 1);
INSERT INTO `role_has_permissions` VALUES (379, 1);
INSERT INTO `role_has_permissions` VALUES (380, 1);
INSERT INTO `role_has_permissions` VALUES (381, 1);
INSERT INTO `role_has_permissions` VALUES (382, 1);
INSERT INTO `role_has_permissions` VALUES (383, 1);
INSERT INTO `role_has_permissions` VALUES (384, 1);
INSERT INTO `role_has_permissions` VALUES (385, 1);
INSERT INTO `role_has_permissions` VALUES (386, 1);
INSERT INTO `role_has_permissions` VALUES (387, 1);
INSERT INTO `role_has_permissions` VALUES (388, 1);
INSERT INTO `role_has_permissions` VALUES (389, 1);
INSERT INTO `role_has_permissions` VALUES (390, 1);
INSERT INTO `role_has_permissions` VALUES (391, 1);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'super admin', 'web', '2019-05-28 11:22:18', '2019-05-28 11:22:18');
INSERT INTO `roles` VALUES (2, 'admin', 'web', '2019-05-28 11:22:18', '2019-05-28 11:22:18');
INSERT INTO `roles` VALUES (3, 'manager', 'web', '2019-05-28 11:22:18', '2019-05-28 11:22:18');
INSERT INTO `roles` VALUES (4, 'employee', 'web', '2019-05-28 11:22:18', '2019-05-28 11:22:18');
INSERT INTO `roles` VALUES (5, 'customer', 'web', '2019-05-28 11:22:19', '2019-05-28 11:22:19');

-- ----------------------------
-- Table structure for service_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `service_assigned_properties`;
CREATE TABLE `service_assigned_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 870 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_assigned_properties
-- ----------------------------
INSERT INTO `service_assigned_properties` VALUES (688, 55, 16, '584', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (689, 55, 1, '1562539650973', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (690, 55, 2, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (691, 55, 3, '1562716800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (692, 55, 4, '1191600', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (693, 55, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (694, 55, 6, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (695, 55, 7, '1562539650-159892928', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (696, 55, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (697, 55, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (698, 55, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (699, 55, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (700, 55, 17, '1562539650973', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (701, 55, 18, '1562543211030', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (702, 56, 16, '587', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (703, 56, 1, '1562559863406', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (704, 56, 2, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (705, 56, 3, '1562716800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (706, 56, 4, '1191600', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (707, 56, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (708, 56, 6, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (709, 56, 7, '1562559863-726090850', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (710, 56, 8, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (711, 56, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (712, 56, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (713, 56, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (714, 56, 17, '1562559863406', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (715, 56, 18, '1562559920467', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (716, 57, 16, '589', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (717, 57, 1, '1562562507333', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (718, 57, 2, '1569110400000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (719, 57, 3, '1569542400000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (720, 57, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (721, 57, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (722, 57, 6, '1569110400000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (723, 57, 7, '1562562507-1797850549', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (724, 57, 8, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (725, 57, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (726, 57, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (727, 57, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (728, 57, 17, '1562562507333', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (729, 57, 18, '1562562534899', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (730, 57, 16, '591', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (731, 57, 15, '3', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (732, 57, 15, '3', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (733, 57, 17, '1562562513525', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (734, 57, 16, '592', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (735, 57, 15, '5', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (736, 57, 15, '5', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (737, 57, 17, '1562562523991', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (738, 57, 16, '593', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (739, 57, 15, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (740, 57, 15, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (741, 57, 17, '1562562534899', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (742, 58, 16, '594', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (743, 58, 1, '1562584678028', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (744, 58, 2, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (745, 58, 3, '1562976000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (746, 58, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (747, 58, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (748, 58, 6, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (749, 58, 7, '1562584678-1275776868', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (750, 58, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (751, 58, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (752, 58, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (753, 58, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (754, 58, 17, '1562584678028', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (755, 58, 18, '1562584981710', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (756, 59, 16, '596', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (757, 59, 1, '1562584703844', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (758, 59, 2, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (759, 59, 3, '1562976000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (760, 59, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (761, 59, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (762, 59, 6, '1562544000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (763, 59, 7, '1562584703-656934764', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (764, 59, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (765, 59, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (766, 59, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (767, 59, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (768, 59, 17, '1562584703844', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (769, 59, 18, '1562585006687', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (770, 60, 16, '637', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (771, 60, 1, '1563057208597', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (772, 60, 2, '1563148800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (773, 60, 3, '1563494400000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (774, 60, 4, '1986000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (775, 60, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (776, 60, 6, '1563148800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (777, 60, 7, '1563057208-2042914365', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (778, 60, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (779, 60, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (780, 60, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (781, 60, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (782, 60, 17, '1563057208597', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (783, 60, 18, '1563133221359', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (784, 61, 16, '639', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (785, 61, 1, '1563126321751', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (786, 61, 2, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (787, 61, 3, '1563580800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (788, 61, 4, '1986000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (789, 61, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (790, 61, 6, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (791, 61, 7, '1563126321-264150885', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (792, 61, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (793, 61, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (794, 61, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (795, 61, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (796, 61, 17, '1563126321751', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (797, 61, 18, '1563133222026', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (798, 62, 16, '641', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (799, 62, 1, '1563132246451', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (800, 62, 2, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (801, 62, 3, '1563580800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (802, 62, 4, '1986000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (803, 62, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (804, 62, 6, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (805, 62, 7, '1563132246-1781250029', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (806, 62, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (807, 62, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (808, 62, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (809, 62, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (810, 62, 17, '1563132246451', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (811, 62, 18, '1563133222232', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (812, 63, 16, '643', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (813, 63, 1, '1563132601854', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (814, 63, 2, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (815, 63, 3, '1563580800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (816, 63, 4, '1986000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (817, 63, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (818, 63, 6, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (819, 63, 7, '1563132601-3647663', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (820, 63, 8, '8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (821, 63, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (822, 63, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (823, 63, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (824, 63, 17, '1563132601854', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (825, 63, 18, '1563133222367', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (826, 63, 16, '645', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (827, 63, 15, '5', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (828, 63, 15, '5', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (829, 63, 17, '1563132628875', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (830, 64, 16, '646', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (831, 64, 1, '1563133054877', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (832, 64, 2, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (833, 64, 3, '1563580800000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (834, 64, 4, '1986000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (835, 64, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (836, 64, 6, '1563235200000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (837, 64, 7, '1563133054-958842581', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (838, 64, 8, '4', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (839, 64, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (840, 64, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (841, 64, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (842, 64, 17, '1563133054877', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (843, 64, 18, '1563133359660', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (844, 65, 16, '648', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (845, 65, 1, '1563133657051', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (846, 65, 2, '1563408000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (847, 65, 3, '1563840000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (848, 65, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (849, 65, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (850, 65, 6, '1563408000000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (851, 65, 7, '1563133657-15871620', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (852, 65, 8, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (853, 65, 13, '102', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (854, 65, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (855, 65, 15, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (856, 65, 17, '1563133657051', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (857, 65, 18, '1563133725409', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (858, 65, 16, '650', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (859, 65, 15, '3', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (860, 65, 15, '3', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (861, 65, 17, '1563133679414', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (862, 65, 16, '651', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (863, 65, 15, '5', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (864, 65, 15, '5', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (865, 65, 17, '1563133705350', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (866, 65, 16, '652', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (867, 65, 15, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (868, 65, 15, '7', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (869, 65, 17, '1563133725409', NULL, NULL);

-- ----------------------------
-- Table structure for service_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `service_assigned_property_values`;
CREATE TABLE `service_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_assigned_property_values
-- ----------------------------
INSERT INTO `service_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (3, 469, '+98-911-254-6582', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (4, 469, '11111111111111', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (5, 470, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (6, 470, '222222222222222', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (7, 496, '+98-911-254-6582', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (8, 497, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (9, 523, '+98-911-254-6582', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (10, 524, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (11, 551, '+98-911-254-6582', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (12, 552, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (13, 579, '+98-911-254-6582', NULL, NULL);
INSERT INTO `service_assigned_property_values` VALUES (14, 580, '+98-13-333-55264~8', NULL, NULL);

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
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_properties
-- ----------------------------
INSERT INTO `service_properties` VALUES (1, 'date', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (2, 'start_date', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (3, 'end_date', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (4, 'price', '0', 'number', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (5, 'active', '0', 'check', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (6, 'confirmation_date', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (7, 'code', '0', 'text', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (8, 'situation', '0', 'select', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (9, 'room-verification-time', '5', 'number', 1, 1, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (10, 'payout-time', '15', 'number', 1, 1, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (11, 'check-verification-time', '5', 'number', 1, 1, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (12, 'users-to-get-notifications', '1', 'multi-user', 1, 1, 1, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (13, 'customer', '-', 'single-relation-users-customer', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (14, 'logs', '', 'array-of-sub-properties', 0, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (15, 'condition', '0', 'select', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 14, NULL, NULL);
INSERT INTO `service_properties` VALUES (16, 'user', '0', 'single-relation-users-all', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 14, NULL, NULL);
INSERT INTO `service_properties` VALUES (17, 'date', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 14, NULL, NULL);
INSERT INTO `service_properties` VALUES (18, 'last-date-situation-updated', '0', 'date', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for service_property_values
-- ----------------------------
DROP TABLE IF EXISTS `service_property_values`;
CREATE TABLE `service_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_property_values
-- ----------------------------
INSERT INTO `service_property_values` VALUES (1, 'room requested', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (2, 'room rejected', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (3, 'room confirmed', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (4, 'room time out', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (5, 'pay off requested', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (6, 'pay off rejected', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (7, 'pay off confirmed', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (8, 'pay off timeout', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (9, 'pay off online confirmed', 8, NULL, NULL);
INSERT INTO `service_property_values` VALUES (10, 'room requested', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (11, 'room rejected', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (12, 'room confirmed', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (13, 'room time out', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (14, 'pay off requested', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (15, 'pay off rejected', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (16, 'pay off confirmed', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (17, 'pay off timeout', 15, NULL, NULL);
INSERT INTO `service_property_values` VALUES (18, 'pay off online confirmed', 15, NULL, NULL);

-- ----------------------------
-- Table structure for service_property_values_copy1
-- ----------------------------
DROP TABLE IF EXISTS `service_property_values_copy1`;
CREATE TABLE `service_property_values_copy1`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_property_values_copy1
-- ----------------------------
INSERT INTO `service_property_values_copy1` VALUES (1, 'room requested', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (2, 'room rejected', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (3, 'room confirmed', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (4, 'room time out', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (5, 'pay off requested', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (6, 'pay off rejected', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (7, 'pay off confirmed', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (8, 'pay off timeout', 8, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (9, 'room requested', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (10, 'room rejected', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (11, 'room confirmed', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (12, 'room time out', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (13, 'pay off requested', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (14, 'pay off rejected', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (15, 'pay off confirmed', 15, NULL, NULL);
INSERT INTO `service_property_values_copy1` VALUES (16, 'pay off timeout', 15, NULL, NULL);

-- ----------------------------
-- Table structure for service_types
-- ----------------------------
DROP TABLE IF EXISTS `service_types`;
CREATE TABLE `service_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT 2,
  `can_have_child` tinyint(255) NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_types
-- ----------------------------
INSERT INTO `service_types` VALUES (1, 'reserve', 2, 0, 0, NULL, NULL);

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 66 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (55, 1, '2019-07-07 22:47:30', '2019-07-07 22:47:30');
INSERT INTO `services` VALUES (56, 1, '2019-07-08 04:24:23', '2019-07-08 04:24:23');
INSERT INTO `services` VALUES (57, 1, '2019-07-08 05:08:27', '2019-07-08 05:08:27');
INSERT INTO `services` VALUES (58, 1, '2019-07-08 11:17:57', '2019-07-08 11:17:57');
INSERT INTO `services` VALUES (59, 1, '2019-07-08 11:18:23', '2019-07-08 11:18:23');
INSERT INTO `services` VALUES (60, 1, '2019-07-13 22:33:27', '2019-07-13 22:33:27');
INSERT INTO `services` VALUES (61, 1, '2019-07-14 17:45:21', '2019-07-14 17:45:21');
INSERT INTO `services` VALUES (62, 1, '2019-07-14 19:24:06', '2019-07-14 19:24:06');
INSERT INTO `services` VALUES (63, 1, '2019-07-14 19:30:01', '2019-07-14 19:30:01');
INSERT INTO `services` VALUES (64, 1, '2019-07-14 19:37:34', '2019-07-14 19:37:34');
INSERT INTO `services` VALUES (65, 1, '2019-07-14 19:47:36', '2019-07-14 19:47:36');

-- ----------------------------
-- Table structure for template_properties
-- ----------------------------
DROP TABLE IF EXISTS `template_properties`;
CREATE TABLE `template_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `template` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NULL DEFAULT 0,
  `keys` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of template_properties
-- ----------------------------
INSERT INTO `template_properties` VALUES (1, 'title', '-', 'text', 1, 2, 0, 'title', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (2, 'content', '-', 'text', 1, 2, 0, 'content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (3, 'title', '-', 'text', 1, 3, 0, 'title', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (4, 'rules', '-', 'array-text', 1, 3, 0, 'title:content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (6, 'rules-title', '', 'text', 1, 3, 0, 'title', 0, '', 0, 0, 'direct', 0, 1, 4, NULL, NULL);
INSERT INTO `template_properties` VALUES (7, 'rules-content', '-', 'text', 1, 3, 0, 'content', 0, '', 0, 0, 'direct', 0, 1, 4, NULL, NULL);
INSERT INTO `template_properties` VALUES (8, 'title', '-', 'text', 1, 4, 0, 'title', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (9, 'content', '-', 'summernote', 1, 4, 0, 'content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (10, 'title', '', 'text', 1, 1, 0, 'title', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (13, 'slide-images', '', 'multi-relation-document-images', 1, 1, 0, 'slide-images', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (14, 'headline', '', 'summernote', 1, 1, 0, 'headline', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (15, 'content', '', 'summernote', 1, 1, 0, 'content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (16, 'right-content', '', 'summernote', 1, 1, 0, 'right-content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (17, 'left-content', '', 'summernote', 1, 1, 0, 'left-content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (18, 'slide-images', '', 'multi-relation-document-images', 1, 5, 0, 'slide-images', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (19, 'left-content', '', 'summernote', 1, 5, 0, 'headline', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `template_properties` VALUES (20, 'big-content', '', 'summernote', 1, 5, 0, 'content', 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for templates
-- ----------------------------
DROP TABLE IF EXISTS `templates`;
CREATE TABLE `templates`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `widget` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of templates
-- ----------------------------
INSERT INTO `templates` VALUES (1, 'full feature template', 'templates.full_feature', NULL, NULL);
INSERT INTO `templates` VALUES (2, 'empty template', 'templates.empty', NULL, NULL);
INSERT INTO `templates` VALUES (3, 'two rows template', 'templates.two_rows', NULL, NULL);
INSERT INTO `templates` VALUES (4, 'full text template', 'templates.full_text', NULL, NULL);
INSERT INTO `templates` VALUES (5, 'left slideshow - right content - big content', 'templates.left_slide-right-content_big_content', NULL, NULL);

-- ----------------------------
-- Table structure for translations
-- ----------------------------
DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `locale` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `table` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `field` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `record` int(255) NULL DEFAULT NULL,
  `value` mediumtext CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1279 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES (1, 'en', 'data_assigned_properties', 'value', 32, 'room number 5 desription .', NULL, NULL);
INSERT INTO `translations` VALUES (12, 'en', 'data_properties', 'title', 3, 'عنوان', NULL, NULL);
INSERT INTO `translations` VALUES (13, 'en', 'data_assigned_properties', 'value', 161, '65 meter four-person suite type A', NULL, NULL);
INSERT INTO `translations` VALUES (14, 'ar', 'data_assigned_properties', 'value', 161, 'جناح 65 متر من أربعة أشخاص من النوع A', NULL, NULL);
INSERT INTO `translations` VALUES (15, 'en', 'data_assigned_properties', 'value', 162, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (16, 'ar', 'data_assigned_properties', 'value', 162, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (17, 'en', 'data_assigned_properties', 'value', 166, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (18, 'ar', 'data_assigned_properties', 'value', 166, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (19, 'en', 'data_assigned_properties', 'value', 167, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (20, 'ar', 'data_assigned_properties', 'value', 167, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (21, 'en', 'data_assigned_properties', 'value', 171, 'اتاق 40متري 3 نفره دو تخت سينگل نوع C', NULL, NULL);
INSERT INTO `translations` VALUES (22, 'ar', 'data_assigned_properties', 'value', 171, 'اتاق 40متري 3 نفره دو تخت سينگل نوع C', NULL, NULL);
INSERT INTO `translations` VALUES (23, 'en', 'data_assigned_properties', 'value', 172, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (24, 'ar', 'data_assigned_properties', 'value', 172, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (25, 'en', 'data_assigned_properties', 'value', 176, 'اتاق 40متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `translations` VALUES (26, 'ar', 'data_assigned_properties', 'value', 176, 'اتاق 40متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `translations` VALUES (27, 'en', 'data_assigned_properties', 'value', 178, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (28, 'ar', 'data_assigned_properties', 'value', 178, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (29, 'en', 'data_assigned_properties', 'value', 182, 'اتاق يك تخته دبل 2 نفره VIP اتاق 112', NULL, NULL);
INSERT INTO `translations` VALUES (30, 'ar', 'data_assigned_properties', 'value', 182, 'اتاق يك تخته دبل 2 نفره VIP اتاق 112', NULL, NULL);
INSERT INTO `translations` VALUES (31, 'en', 'data_assigned_properties', 'value', 184, 'اتاق يك تخته دبل 2 نفره VIP اتاق 112', NULL, NULL);
INSERT INTO `translations` VALUES (32, 'ar', 'data_assigned_properties', 'value', 184, 'اتاق يك تخته دبل 2 نفره VIP اتاق 112', NULL, NULL);
INSERT INTO `translations` VALUES (33, 'en', 'data_assigned_properties', 'value', 188, 'اتاق 55 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `translations` VALUES (34, 'ar', 'data_assigned_properties', 'value', 188, 'اتاق 55 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `translations` VALUES (35, 'en', 'data_assigned_properties', 'value', 190, 'اتاق 55 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `translations` VALUES (36, 'ar', 'data_assigned_properties', 'value', 190, 'اتاق 55 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `translations` VALUES (37, 'en', 'data_assigned_properties', 'value', 194, 'اتاق 55 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `translations` VALUES (38, 'ar', 'data_assigned_properties', 'value', 194, 'اتاق 55 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `translations` VALUES (39, 'en', 'data_assigned_properties', 'value', 196, 'اتاق 55 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `translations` VALUES (40, 'ar', 'data_assigned_properties', 'value', 196, 'اتاق 55 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `translations` VALUES (41, 'en', 'data_assigned_properties', 'value', 200, 'اتاق 35 متري 3 نفره سه نفره نوع C', NULL, NULL);
INSERT INTO `translations` VALUES (42, 'ar', 'data_assigned_properties', 'value', 200, 'اتاق 35 متري 3 نفره سه نفره نوع C', NULL, NULL);
INSERT INTO `translations` VALUES (43, 'en', 'data_assigned_properties', 'value', 202, 'اتاق 35 متري 3 نفره سه نفره نوع C', NULL, NULL);
INSERT INTO `translations` VALUES (44, 'ar', 'data_assigned_properties', 'value', 202, 'اتاق 35 متري 3 نفره سه نفره نوع C', NULL, NULL);
INSERT INTO `translations` VALUES (45, 'en', 'data_assigned_properties', 'value', 206, 'اتاق 35 متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `translations` VALUES (46, 'ar', 'data_assigned_properties', 'value', 206, 'اتاق 35 متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `translations` VALUES (47, 'en', 'data_assigned_properties', 'value', 208, 'اتاق 35 متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `translations` VALUES (48, 'ar', 'data_assigned_properties', 'value', 208, 'اتاق 35 متري 2 نفره دو تخت سينگل نوع D', NULL, NULL);
INSERT INTO `translations` VALUES (49, 'en', 'data_assigned_properties', 'value', 212, 'اتاق 65 متري ويژه مديران اتاق 109', NULL, NULL);
INSERT INTO `translations` VALUES (50, 'ar', 'data_assigned_properties', 'value', 212, 'اتاق 65 متري ويژه مديران اتاق 109', NULL, NULL);
INSERT INTO `translations` VALUES (51, 'en', 'data_assigned_properties', 'value', 214, 'اتاق 65 متري ويژه مديران اتاق 109', NULL, NULL);
INSERT INTO `translations` VALUES (52, 'ar', 'data_assigned_properties', 'value', 214, 'اتاق 65 متري ويژه مديران اتاق 109', NULL, NULL);
INSERT INTO `translations` VALUES (53, 'en', 'data_assigned_properties', 'value', 218, 'اتاق 55 متري ويژه مديران اتاق 110', NULL, NULL);
INSERT INTO `translations` VALUES (54, 'ar', 'data_assigned_properties', 'value', 218, 'اتاق 55 متري ويژه مديران اتاق 110', NULL, NULL);
INSERT INTO `translations` VALUES (55, 'en', 'data_assigned_properties', 'value', 220, 'اتاق 55 متري ويژه مديران اتاق 110', NULL, NULL);
INSERT INTO `translations` VALUES (56, 'ar', 'data_assigned_properties', 'value', 220, 'اتاق 55 متري ويژه مديران اتاق 110', NULL, NULL);
INSERT INTO `translations` VALUES (57, 'en', 'data_assigned_properties', 'value', 230, 'ffff', NULL, NULL);
INSERT INTO `translations` VALUES (58, 'ar', 'data_assigned_properties', 'value', 230, 'ffff', NULL, NULL);
INSERT INTO `translations` VALUES (59, 'en', 'data_assigned_properties', 'value', 232, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (60, 'ar', 'data_assigned_properties', 'value', 232, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (61, 'en', 'data_assigned_properties', 'value', 241, 'a', NULL, NULL);
INSERT INTO `translations` VALUES (62, 'ar', 'data_assigned_properties', 'value', 241, 'a', NULL, NULL);
INSERT INTO `translations` VALUES (63, 'en', 'data_assigned_properties', 'value', 243, 'aaa', NULL, NULL);
INSERT INTO `translations` VALUES (64, 'ar', 'data_assigned_properties', 'value', 243, 'aaa', NULL, NULL);
INSERT INTO `translations` VALUES (65, 'en', 'data_assigned_properties', 'value', 296, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (66, 'ar', 'data_assigned_properties', 'value', 296, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (67, 'en', 'data_assigned_properties', 'value', 297, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (68, 'ar', 'data_assigned_properties', 'value', 297, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (69, 'en', 'data_assigned_properties', 'value', 298, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (70, 'ar', 'data_assigned_properties', 'value', 298, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (71, 'en', 'data_assigned_properties', 'value', 315, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (72, 'ar', 'data_assigned_properties', 'value', 315, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (73, 'en', 'data_assigned_properties', 'value', 316, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (74, 'ar', 'data_assigned_properties', 'value', 316, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (75, 'en', 'data_assigned_properties', 'value', 317, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (76, 'ar', 'data_assigned_properties', 'value', 317, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (77, 'en', 'data_assigned_properties', 'value', 318, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (78, 'ar', 'data_assigned_properties', 'value', 318, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (79, 'en', 'data_assigned_properties', 'value', 319, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (80, 'ar', 'data_assigned_properties', 'value', 319, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (81, 'en', 'data_assigned_properties', 'value', 320, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (82, 'ar', 'data_assigned_properties', 'value', 320, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (83, 'en', 'data_assigned_properties', 'value', 321, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (84, 'ar', 'data_assigned_properties', 'value', 321, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (85, 'en', 'data_assigned_properties', 'value', 322, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (86, 'ar', 'data_assigned_properties', 'value', 322, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (87, 'en', 'data_assigned_properties', 'value', 323, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (88, 'ar', 'data_assigned_properties', 'value', 323, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (89, 'en', 'data_assigned_properties', 'value', 340, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (90, 'ar', 'data_assigned_properties', 'value', 340, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (91, 'en', 'data_assigned_properties', 'value', 341, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (92, 'ar', 'data_assigned_properties', 'value', 341, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (93, 'en', 'data_assigned_properties', 'value', 342, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (94, 'ar', 'data_assigned_properties', 'value', 342, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (95, 'en', 'data_assigned_properties', 'value', 343, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (96, 'ar', 'data_assigned_properties', 'value', 343, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (97, 'en', 'data_assigned_properties', 'value', 344, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (98, 'ar', 'data_assigned_properties', 'value', 344, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (99, 'en', 'data_assigned_properties', 'value', 345, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (100, 'ar', 'data_assigned_properties', 'value', 345, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (101, 'en', 'data_assigned_properties', 'value', 346, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (102, 'ar', 'data_assigned_properties', 'value', 346, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (103, 'en', 'data_assigned_properties', 'value', 347, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (104, 'ar', 'data_assigned_properties', 'value', 347, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (105, 'en', 'data_assigned_properties', 'value', 348, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (106, 'ar', 'data_assigned_properties', 'value', 348, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (107, 'en', 'data_assigned_properties', 'value', 365, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (108, 'ar', 'data_assigned_properties', 'value', 365, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (109, 'en', 'data_assigned_properties', 'value', 366, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (110, 'ar', 'data_assigned_properties', 'value', 366, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (111, 'en', 'data_assigned_properties', 'value', 367, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (112, 'ar', 'data_assigned_properties', 'value', 367, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (113, 'en', 'data_assigned_properties', 'value', 368, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (114, 'ar', 'data_assigned_properties', 'value', 368, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (115, 'en', 'data_assigned_properties', 'value', 369, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (116, 'ar', 'data_assigned_properties', 'value', 369, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (117, 'en', 'data_assigned_properties', 'value', 370, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (118, 'ar', 'data_assigned_properties', 'value', 370, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (119, 'en', 'data_assigned_properties', 'value', 371, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (120, 'ar', 'data_assigned_properties', 'value', 371, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (121, 'en', 'data_assigned_properties', 'value', 372, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (122, 'ar', 'data_assigned_properties', 'value', 372, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (123, 'en', 'data_assigned_properties', 'value', 373, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (124, 'ar', 'data_assigned_properties', 'value', 373, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (125, 'en', 'data_assigned_properties', 'value', 390, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (126, 'ar', 'data_assigned_properties', 'value', 390, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (127, 'en', 'data_assigned_properties', 'value', 391, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (128, 'ar', 'data_assigned_properties', 'value', 391, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (129, 'en', 'data_assigned_properties', 'value', 392, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (130, 'ar', 'data_assigned_properties', 'value', 392, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (131, 'en', 'data_assigned_properties', 'value', 393, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (132, 'ar', 'data_assigned_properties', 'value', 393, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (133, 'en', 'data_assigned_properties', 'value', 394, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (134, 'ar', 'data_assigned_properties', 'value', 394, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (135, 'en', 'data_assigned_properties', 'value', 395, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (136, 'ar', 'data_assigned_properties', 'value', 395, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (137, 'en', 'data_assigned_properties', 'value', 396, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (138, 'ar', 'data_assigned_properties', 'value', 396, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (139, 'en', 'data_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (140, 'ar', 'data_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (141, 'en', 'data_assigned_properties', 'value', 398, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (142, 'ar', 'data_assigned_properties', 'value', 398, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (143, 'en', 'data_assigned_properties', 'value', 415, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (144, 'ar', 'data_assigned_properties', 'value', 415, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (145, 'en', 'data_assigned_properties', 'value', 416, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (146, 'ar', 'data_assigned_properties', 'value', 416, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (147, 'en', 'data_assigned_properties', 'value', 417, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (148, 'ar', 'data_assigned_properties', 'value', 417, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (149, 'en', 'data_assigned_properties', 'value', 418, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (150, 'ar', 'data_assigned_properties', 'value', 418, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (151, 'en', 'data_assigned_properties', 'value', 419, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (152, 'ar', 'data_assigned_properties', 'value', 419, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (153, 'en', 'data_assigned_properties', 'value', 420, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (154, 'ar', 'data_assigned_properties', 'value', 420, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (155, 'en', 'data_assigned_properties', 'value', 421, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (156, 'ar', 'data_assigned_properties', 'value', 421, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (157, 'en', 'data_assigned_properties', 'value', 422, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (158, 'ar', 'data_assigned_properties', 'value', 422, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (159, 'en', 'data_assigned_properties', 'value', 423, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (160, 'ar', 'data_assigned_properties', 'value', 423, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (161, 'en', 'data_assigned_properties', 'value', 440, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (162, 'ar', 'data_assigned_properties', 'value', 440, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (163, 'en', 'data_assigned_properties', 'value', 441, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (164, 'ar', 'data_assigned_properties', 'value', 441, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (165, 'en', 'data_assigned_properties', 'value', 442, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (166, 'ar', 'data_assigned_properties', 'value', 442, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (167, 'en', 'data_assigned_properties', 'value', 443, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (168, 'ar', 'data_assigned_properties', 'value', 443, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (169, 'en', 'data_assigned_properties', 'value', 444, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (170, 'ar', 'data_assigned_properties', 'value', 444, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (171, 'en', 'data_assigned_properties', 'value', 445, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (172, 'ar', 'data_assigned_properties', 'value', 445, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (173, 'en', 'data_assigned_properties', 'value', 446, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (174, 'ar', 'data_assigned_properties', 'value', 446, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (175, 'en', 'data_assigned_properties', 'value', 447, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (176, 'ar', 'data_assigned_properties', 'value', 447, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (177, 'en', 'data_assigned_properties', 'value', 448, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (178, 'ar', 'data_assigned_properties', 'value', 448, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (179, 'en', 'data_assigned_properties', 'value', 465, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (180, 'ar', 'data_assigned_properties', 'value', 465, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (181, 'en', 'data_assigned_properties', 'value', 466, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (182, 'ar', 'data_assigned_properties', 'value', 466, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (183, 'en', 'data_assigned_properties', 'value', 467, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (184, 'ar', 'data_assigned_properties', 'value', 467, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (185, 'en', 'data_assigned_properties', 'value', 468, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (186, 'ar', 'data_assigned_properties', 'value', 468, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (187, 'en', 'data_assigned_properties', 'value', 469, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (188, 'ar', 'data_assigned_properties', 'value', 469, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (189, 'en', 'data_assigned_properties', 'value', 470, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (190, 'ar', 'data_assigned_properties', 'value', 470, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (191, 'en', 'data_assigned_properties', 'value', 471, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (192, 'ar', 'data_assigned_properties', 'value', 471, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (193, 'en', 'data_assigned_properties', 'value', 472, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (194, 'ar', 'data_assigned_properties', 'value', 472, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (195, 'en', 'data_assigned_properties', 'value', 473, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (196, 'ar', 'data_assigned_properties', 'value', 473, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (197, 'en', 'data_assigned_properties', 'value', 490, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (198, 'ar', 'data_assigned_properties', 'value', 490, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (199, 'en', 'data_assigned_properties', 'value', 491, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (200, 'ar', 'data_assigned_properties', 'value', 491, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (201, 'en', 'data_assigned_properties', 'value', 492, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (202, 'ar', 'data_assigned_properties', 'value', 492, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (203, 'en', 'data_assigned_properties', 'value', 493, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (204, 'ar', 'data_assigned_properties', 'value', 493, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (205, 'en', 'data_assigned_properties', 'value', 494, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (206, 'ar', 'data_assigned_properties', 'value', 494, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (207, 'en', 'data_assigned_properties', 'value', 495, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (208, 'ar', 'data_assigned_properties', 'value', 495, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (209, 'en', 'data_assigned_properties', 'value', 496, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (210, 'ar', 'data_assigned_properties', 'value', 496, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (211, 'en', 'data_assigned_properties', 'value', 497, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (212, 'ar', 'data_assigned_properties', 'value', 497, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (213, 'en', 'data_assigned_properties', 'value', 498, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (214, 'ar', 'data_assigned_properties', 'value', 498, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (215, 'en', 'data_assigned_properties', 'value', 515, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (216, 'ar', 'data_assigned_properties', 'value', 515, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (217, 'en', 'data_assigned_properties', 'value', 516, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (218, 'ar', 'data_assigned_properties', 'value', 516, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (219, 'en', 'data_assigned_properties', 'value', 517, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (220, 'ar', 'data_assigned_properties', 'value', 517, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (221, 'en', 'data_assigned_properties', 'value', 518, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (222, 'ar', 'data_assigned_properties', 'value', 518, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (223, 'en', 'data_assigned_properties', 'value', 519, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (224, 'ar', 'data_assigned_properties', 'value', 519, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (225, 'en', 'data_assigned_properties', 'value', 520, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (226, 'ar', 'data_assigned_properties', 'value', 520, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (227, 'en', 'data_assigned_properties', 'value', 296, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (228, 'ar', 'data_assigned_properties', 'value', 296, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (229, 'en', 'data_assigned_properties', 'value', 297, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (230, 'ar', 'data_assigned_properties', 'value', 297, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (231, 'en', 'data_assigned_properties', 'value', 298, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (232, 'ar', 'data_assigned_properties', 'value', 298, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (233, 'en', 'data_assigned_properties', 'value', 317, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (234, 'ar', 'data_assigned_properties', 'value', 317, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (235, 'en', 'data_assigned_properties', 'value', 318, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (236, 'ar', 'data_assigned_properties', 'value', 318, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (237, 'en', 'data_assigned_properties', 'value', 319, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (238, 'ar', 'data_assigned_properties', 'value', 319, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (239, 'en', 'data_assigned_properties', 'value', 320, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (240, 'ar', 'data_assigned_properties', 'value', 320, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (241, 'en', 'data_assigned_properties', 'value', 321, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (242, 'ar', 'data_assigned_properties', 'value', 321, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (243, 'en', 'data_assigned_properties', 'value', 322, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (244, 'ar', 'data_assigned_properties', 'value', 322, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (245, 'en', 'data_assigned_properties', 'value', 323, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (246, 'ar', 'data_assigned_properties', 'value', 323, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (247, 'en', 'data_assigned_properties', 'value', 324, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (248, 'ar', 'data_assigned_properties', 'value', 324, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (249, 'en', 'data_assigned_properties', 'value', 325, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (250, 'ar', 'data_assigned_properties', 'value', 325, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (251, 'en', 'data_assigned_properties', 'value', 344, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (252, 'ar', 'data_assigned_properties', 'value', 344, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (253, 'en', 'data_assigned_properties', 'value', 345, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (254, 'ar', 'data_assigned_properties', 'value', 345, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (255, 'en', 'data_assigned_properties', 'value', 346, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (256, 'ar', 'data_assigned_properties', 'value', 346, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (257, 'en', 'data_assigned_properties', 'value', 347, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (258, 'ar', 'data_assigned_properties', 'value', 347, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (259, 'en', 'data_assigned_properties', 'value', 348, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (260, 'ar', 'data_assigned_properties', 'value', 348, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (261, 'en', 'data_assigned_properties', 'value', 349, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (262, 'ar', 'data_assigned_properties', 'value', 349, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (263, 'en', 'data_assigned_properties', 'value', 350, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (264, 'ar', 'data_assigned_properties', 'value', 350, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (265, 'en', 'data_assigned_properties', 'value', 351, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (266, 'ar', 'data_assigned_properties', 'value', 351, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (267, 'en', 'data_assigned_properties', 'value', 352, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (268, 'ar', 'data_assigned_properties', 'value', 352, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (269, 'en', 'data_assigned_properties', 'value', 371, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (270, 'ar', 'data_assigned_properties', 'value', 371, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (271, 'en', 'data_assigned_properties', 'value', 372, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (272, 'ar', 'data_assigned_properties', 'value', 372, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (273, 'en', 'data_assigned_properties', 'value', 373, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (274, 'ar', 'data_assigned_properties', 'value', 373, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (275, 'en', 'data_assigned_properties', 'value', 374, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (276, 'ar', 'data_assigned_properties', 'value', 374, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (277, 'en', 'data_assigned_properties', 'value', 375, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (278, 'ar', 'data_assigned_properties', 'value', 375, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (279, 'en', 'data_assigned_properties', 'value', 376, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (280, 'ar', 'data_assigned_properties', 'value', 376, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (281, 'en', 'data_assigned_properties', 'value', 377, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (282, 'ar', 'data_assigned_properties', 'value', 377, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (283, 'en', 'data_assigned_properties', 'value', 378, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (284, 'ar', 'data_assigned_properties', 'value', 378, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (285, 'en', 'data_assigned_properties', 'value', 379, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (286, 'ar', 'data_assigned_properties', 'value', 379, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (287, 'en', 'data_assigned_properties', 'value', 396, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (288, 'ar', 'data_assigned_properties', 'value', 396, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (289, 'en', 'data_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (290, 'ar', 'data_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (291, 'en', 'data_assigned_properties', 'value', 398, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (292, 'ar', 'data_assigned_properties', 'value', 398, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (293, 'en', 'data_assigned_properties', 'value', 399, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (294, 'ar', 'data_assigned_properties', 'value', 399, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (295, 'en', 'data_assigned_properties', 'value', 400, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (296, 'ar', 'data_assigned_properties', 'value', 400, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (297, 'en', 'data_assigned_properties', 'value', 401, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (298, 'ar', 'data_assigned_properties', 'value', 401, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (299, 'en', 'data_assigned_properties', 'value', 402, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (300, 'ar', 'data_assigned_properties', 'value', 402, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (301, 'en', 'data_assigned_properties', 'value', 403, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (302, 'ar', 'data_assigned_properties', 'value', 403, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (303, 'en', 'data_assigned_properties', 'value', 404, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (304, 'ar', 'data_assigned_properties', 'value', 404, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (305, 'en', 'data_assigned_properties', 'value', 421, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (306, 'ar', 'data_assigned_properties', 'value', 421, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (307, 'en', 'data_assigned_properties', 'value', 422, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (308, 'ar', 'data_assigned_properties', 'value', 422, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (309, 'en', 'data_assigned_properties', 'value', 423, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (310, 'ar', 'data_assigned_properties', 'value', 423, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (311, 'en', 'data_assigned_properties', 'value', 424, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (312, 'ar', 'data_assigned_properties', 'value', 424, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (313, 'en', 'data_assigned_properties', 'value', 425, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (314, 'ar', 'data_assigned_properties', 'value', 425, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (315, 'en', 'data_assigned_properties', 'value', 426, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (316, 'ar', 'data_assigned_properties', 'value', 426, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (317, 'en', 'data_assigned_properties', 'value', 427, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (318, 'ar', 'data_assigned_properties', 'value', 427, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (319, 'en', 'data_assigned_properties', 'value', 428, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (320, 'ar', 'data_assigned_properties', 'value', 428, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (321, 'en', 'data_assigned_properties', 'value', 429, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (322, 'ar', 'data_assigned_properties', 'value', 429, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (323, 'en', 'data_assigned_properties', 'value', 446, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (324, 'ar', 'data_assigned_properties', 'value', 446, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (325, 'en', 'data_assigned_properties', 'value', 447, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (326, 'ar', 'data_assigned_properties', 'value', 447, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (327, 'en', 'data_assigned_properties', 'value', 448, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (328, 'ar', 'data_assigned_properties', 'value', 448, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (329, 'en', 'data_assigned_properties', 'value', 449, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (330, 'ar', 'data_assigned_properties', 'value', 449, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (331, 'en', 'data_assigned_properties', 'value', 450, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (332, 'ar', 'data_assigned_properties', 'value', 450, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (333, 'en', 'data_assigned_properties', 'value', 451, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (334, 'ar', 'data_assigned_properties', 'value', 451, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (335, 'en', 'data_assigned_properties', 'value', 350, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (336, 'ar', 'data_assigned_properties', 'value', 350, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (337, 'en', 'data_assigned_properties', 'value', 351, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (338, 'ar', 'data_assigned_properties', 'value', 351, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (339, 'en', 'data_assigned_properties', 'value', 352, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (340, 'ar', 'data_assigned_properties', 'value', 352, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (341, 'en', 'data_assigned_properties', 'value', 369, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (342, 'ar', 'data_assigned_properties', 'value', 369, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (343, 'en', 'data_assigned_properties', 'value', 370, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (344, 'ar', 'data_assigned_properties', 'value', 370, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (345, 'en', 'data_assigned_properties', 'value', 371, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (346, 'ar', 'data_assigned_properties', 'value', 371, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (347, 'en', 'data_assigned_properties', 'value', 372, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (348, 'ar', 'data_assigned_properties', 'value', 372, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (349, 'en', 'data_assigned_properties', 'value', 373, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (350, 'ar', 'data_assigned_properties', 'value', 373, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (351, 'en', 'data_assigned_properties', 'value', 374, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (352, 'ar', 'data_assigned_properties', 'value', 374, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (353, 'en', 'data_assigned_properties', 'value', 375, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (354, 'ar', 'data_assigned_properties', 'value', 375, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (355, 'en', 'data_assigned_properties', 'value', 376, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (356, 'ar', 'data_assigned_properties', 'value', 376, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (357, 'en', 'data_assigned_properties', 'value', 377, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (358, 'ar', 'data_assigned_properties', 'value', 377, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (359, 'en', 'data_assigned_properties', 'value', 394, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (360, 'ar', 'data_assigned_properties', 'value', 394, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (361, 'en', 'data_assigned_properties', 'value', 395, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (362, 'ar', 'data_assigned_properties', 'value', 395, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (363, 'en', 'data_assigned_properties', 'value', 396, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (364, 'ar', 'data_assigned_properties', 'value', 396, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (365, 'en', 'data_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (366, 'ar', 'data_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (367, 'en', 'data_assigned_properties', 'value', 398, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (368, 'ar', 'data_assigned_properties', 'value', 398, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (369, 'en', 'data_assigned_properties', 'value', 399, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (370, 'ar', 'data_assigned_properties', 'value', 399, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (395, 'en', 'data_assigned_properties', 'value', 452, 'room No. 112000', NULL, NULL);
INSERT INTO `translations` VALUES (396, 'ar', 'data_assigned_properties', 'value', 452, 'الاتاق الشماره 112000', NULL, NULL);
INSERT INTO `translations` VALUES (397, 'en', 'data_assigned_properties', 'value', 454, 'hello', NULL, NULL);
INSERT INTO `translations` VALUES (398, 'ar', 'data_assigned_properties', 'value', 454, 'السلام', NULL, NULL);
INSERT INTO `translations` VALUES (399, 'en', 'data_assigned_properties', 'value', 462, 'eeeeeeeeee', NULL, NULL);
INSERT INTO `translations` VALUES (400, 'ar', 'data_assigned_properties', 'value', 462, 'غغغغغغغغغ', NULL, NULL);
INSERT INTO `translations` VALUES (401, 'en', 'data_assigned_properties', 'value', 464, 'rrrrrrrrrrrr', NULL, NULL);
INSERT INTO `translations` VALUES (402, 'ar', 'data_assigned_properties', 'value', 464, 'سسسسسسسسسسسسسسسسس', NULL, NULL);
INSERT INTO `translations` VALUES (403, 'en', 'data_assigned_properties', 'value', 471, 'الهتل صبوری', NULL, NULL);
INSERT INTO `translations` VALUES (404, 'ar', 'data_assigned_properties', 'value', 471, 'hotel sabouri', NULL, NULL);
INSERT INTO `translations` VALUES (405, 'en', 'data_assigned_properties', 'value', 472, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (406, 'ar', 'data_assigned_properties', 'value', 472, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (407, 'en', 'data_assigned_properties', 'value', 473, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (408, 'ar', 'data_assigned_properties', 'value', 473, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (409, 'en', 'data_assigned_properties', 'value', 490, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (410, 'ar', 'data_assigned_properties', 'value', 490, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (411, 'en', 'data_assigned_properties', 'value', 491, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (412, 'ar', 'data_assigned_properties', 'value', 491, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (413, 'en', 'data_assigned_properties', 'value', 492, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (414, 'ar', 'data_assigned_properties', 'value', 492, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (415, 'en', 'data_assigned_properties', 'value', 493, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (416, 'ar', 'data_assigned_properties', 'value', 493, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (417, 'en', 'data_assigned_properties', 'value', 494, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (418, 'ar', 'data_assigned_properties', 'value', 494, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (419, 'en', 'data_assigned_properties', 'value', 495, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (420, 'ar', 'data_assigned_properties', 'value', 495, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (421, 'en', 'data_assigned_properties', 'value', 498, 'الهتل صبوری', NULL, NULL);
INSERT INTO `translations` VALUES (422, 'ar', 'data_assigned_properties', 'value', 498, 'hotel sabouri', NULL, NULL);
INSERT INTO `translations` VALUES (423, 'en', 'data_assigned_properties', 'value', 499, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (424, 'ar', 'data_assigned_properties', 'value', 499, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (425, 'en', 'data_assigned_properties', 'value', 500, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (426, 'ar', 'data_assigned_properties', 'value', 500, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (427, 'en', 'data_assigned_properties', 'value', 517, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (428, 'ar', 'data_assigned_properties', 'value', 517, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (429, 'en', 'data_assigned_properties', 'value', 518, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (430, 'ar', 'data_assigned_properties', 'value', 518, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (431, 'en', 'data_assigned_properties', 'value', 519, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (432, 'ar', 'data_assigned_properties', 'value', 519, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (433, 'en', 'data_assigned_properties', 'value', 520, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (434, 'ar', 'data_assigned_properties', 'value', 520, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (435, 'en', 'data_assigned_properties', 'value', 521, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (436, 'ar', 'data_assigned_properties', 'value', 521, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (437, 'en', 'data_assigned_properties', 'value', 522, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (438, 'ar', 'data_assigned_properties', 'value', 522, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (448, 'fa', 'data_properties', 'title', 3, 'عنوان', NULL, NULL);
INSERT INTO `translations` VALUES (449, 'en', 'data_properties', 'title', 3, 'title', NULL, NULL);
INSERT INTO `translations` VALUES (450, 'ar', 'data_properties', 'title', 3, 'العنوان', NULL, NULL);
INSERT INTO `translations` VALUES (466, 'fa', 'data_properties', 'title', 4, 'طبقه', NULL, NULL);
INSERT INTO `translations` VALUES (467, 'en', 'data_properties', 'title', 4, 'floor', NULL, NULL);
INSERT INTO `translations` VALUES (468, 'ar', 'data_properties', 'title', 4, 'الطبقه', NULL, NULL);
INSERT INTO `translations` VALUES (469, 'fa', 'data_properties', 'title', 5, 'توضیحات', NULL, NULL);
INSERT INTO `translations` VALUES (470, 'en', 'data_properties', 'title', 5, 'description', NULL, NULL);
INSERT INTO `translations` VALUES (471, 'ar', 'data_properties', 'title', 5, 'التوضیحات', NULL, NULL);
INSERT INTO `translations` VALUES (472, 'fa', 'data_properties', 'title', 6, 'اینترنت', NULL, NULL);
INSERT INTO `translations` VALUES (473, 'en', 'data_properties', 'title', 6, 'internet', NULL, NULL);
INSERT INTO `translations` VALUES (474, 'ar', 'data_properties', 'title', 6, 'الانترنت', NULL, NULL);
INSERT INTO `translations` VALUES (475, 'fa', 'data_properties', 'title', 7, 'پارکینگ', NULL, NULL);
INSERT INTO `translations` VALUES (476, 'en', 'data_properties', 'title', 7, 'parking', NULL, NULL);
INSERT INTO `translations` VALUES (477, 'ar', 'data_properties', 'title', 7, 'البارکینگ', NULL, NULL);
INSERT INTO `translations` VALUES (478, 'fa', 'data_properties', 'title', 8, 'تصاویر', NULL, NULL);
INSERT INTO `translations` VALUES (479, 'en', 'data_properties', 'title', 8, 'Images', NULL, NULL);
INSERT INTO `translations` VALUES (480, 'ar', 'data_properties', 'title', 8, 'التصاویر', NULL, NULL);
INSERT INTO `translations` VALUES (481, 'fa', 'data_properties', 'title', 9, 'روز های فعال', NULL, NULL);
INSERT INTO `translations` VALUES (482, 'en', 'data_properties', 'title', 9, 'active days', NULL, NULL);
INSERT INTO `translations` VALUES (483, 'ar', 'data_properties', 'title', 9, 'الروز های فعال', NULL, NULL);
INSERT INTO `translations` VALUES (484, 'fa', 'data_properties', 'title', 10, 'روز های غیر فعال', NULL, NULL);
INSERT INTO `translations` VALUES (485, 'en', 'data_properties', 'title', 10, 'inactive days', NULL, NULL);
INSERT INTO `translations` VALUES (486, 'ar', 'data_properties', 'title', 10, 'الروز های غیر فعال', NULL, NULL);
INSERT INTO `translations` VALUES (487, 'fa', 'data_properties', 'title', 11, 'فعال', NULL, NULL);
INSERT INTO `translations` VALUES (488, 'en', 'data_properties', 'title', 11, 'available', NULL, NULL);
INSERT INTO `translations` VALUES (489, 'ar', 'data_properties', 'title', 11, 'الفعال', NULL, NULL);
INSERT INTO `translations` VALUES (490, 'fa', 'data_properties', 'title', 22, 'تصاویر اسلاید', NULL, NULL);
INSERT INTO `translations` VALUES (491, 'en', 'data_properties', 'title', 22, 'slide images', NULL, NULL);
INSERT INTO `translations` VALUES (492, 'ar', 'data_properties', 'title', 22, 'التصاویر اسلاید', NULL, NULL);
INSERT INTO `translations` VALUES (493, 'fa', 'data_properties', 'title', 50, 'قیمت', NULL, NULL);
INSERT INTO `translations` VALUES (494, 'en', 'data_properties', 'title', 50, 'price', NULL, NULL);
INSERT INTO `translations` VALUES (495, 'ar', 'data_properties', 'title', 50, 'القیمت', NULL, NULL);
INSERT INTO `translations` VALUES (496, 'fa', 'data_properties', 'title', 1, 'عنوان', NULL, NULL);
INSERT INTO `translations` VALUES (497, 'en', 'data_properties', 'title', 1, 'name', NULL, NULL);
INSERT INTO `translations` VALUES (498, 'ar', 'data_properties', 'title', 1, 'العنوان', NULL, NULL);
INSERT INTO `translations` VALUES (499, 'fa', 'data_properties', 'title', 2, 'آدرس', NULL, NULL);
INSERT INTO `translations` VALUES (500, 'en', 'data_properties', 'title', 2, 'address', NULL, NULL);
INSERT INTO `translations` VALUES (501, 'ar', 'data_properties', 'title', 2, 'الادرس', NULL, NULL);
INSERT INTO `translations` VALUES (502, 'fa', 'data_properties', 'title', 19, 'توضیحات', NULL, NULL);
INSERT INTO `translations` VALUES (503, 'en', 'data_properties', 'title', 19, 'description', NULL, NULL);
INSERT INTO `translations` VALUES (504, 'ar', 'data_properties', 'title', 19, 'التوضیحات', NULL, NULL);
INSERT INTO `translations` VALUES (505, 'fa', 'data_properties', 'title', 20, 'تلفن', NULL, NULL);
INSERT INTO `translations` VALUES (506, 'en', 'data_properties', 'title', 20, 'phone', NULL, NULL);
INSERT INTO `translations` VALUES (507, 'ar', 'data_properties', 'title', 20, 'التلفن', NULL, NULL);
INSERT INTO `translations` VALUES (508, 'fa', 'data_properties', 'title', 21, 'همراه', NULL, NULL);
INSERT INTO `translations` VALUES (509, 'en', 'data_properties', 'title', 21, 'mobile', NULL, NULL);
INSERT INTO `translations` VALUES (510, 'ar', 'data_properties', 'title', 21, 'الهمراه', NULL, NULL);
INSERT INTO `translations` VALUES (511, 'fa', 'data_properties', 'title', 24, 'شبکه های ماهواره ای', NULL, NULL);
INSERT INTO `translations` VALUES (512, 'en', 'data_properties', 'title', 24, 'satellite networks', NULL, NULL);
INSERT INTO `translations` VALUES (513, 'ar', 'data_properties', 'title', 24, 'الشبکه های الماهواره ای', NULL, NULL);
INSERT INTO `translations` VALUES (514, 'fa', 'data_properties', 'title', 23, 'مینی بار', NULL, NULL);
INSERT INTO `translations` VALUES (515, 'en', 'data_properties', 'title', 23, 'mini bar', NULL, NULL);
INSERT INTO `translations` VALUES (516, 'ar', 'data_properties', 'title', 23, 'المینی البار', NULL, NULL);
INSERT INTO `translations` VALUES (517, 'fa', 'data_properties', 'title', 25, 'فروشگاه', NULL, NULL);
INSERT INTO `translations` VALUES (518, 'en', 'data_properties', 'title', 25, 'store', NULL, NULL);
INSERT INTO `translations` VALUES (519, 'ar', 'data_properties', 'title', 25, 'الفروشگاه', NULL, NULL);
INSERT INTO `translations` VALUES (520, 'fa', 'data_properties', 'title', 26, 'پرده های سلطنتی', NULL, NULL);
INSERT INTO `translations` VALUES (521, 'en', 'data_properties', 'title', 26, 'royal curtains', NULL, NULL);
INSERT INTO `translations` VALUES (522, 'ar', 'data_properties', 'title', 26, 'البرده سلطنتی', NULL, NULL);
INSERT INTO `translations` VALUES (523, 'fa', 'data_properties', 'title', 29, 'اینترنت رایگان', NULL, NULL);
INSERT INTO `translations` VALUES (524, 'en', 'data_properties', 'title', 29, 'free internet', NULL, NULL);
INSERT INTO `translations` VALUES (525, 'ar', 'data_properties', 'title', 29, 'الانترنت مجانی', NULL, NULL);
INSERT INTO `translations` VALUES (526, 'fa', 'data_properties', 'title', 32, 'اینترنت در لابی', NULL, NULL);
INSERT INTO `translations` VALUES (527, 'en', 'data_properties', 'title', 32, 'lobby internet', NULL, NULL);
INSERT INTO `translations` VALUES (528, 'ar', 'data_properties', 'title', 32, 'الانترنت اللابی', NULL, NULL);
INSERT INTO `translations` VALUES (532, 'fa', 'data_properties', 'title', 35, 'چایخانه سنتی', NULL, NULL);
INSERT INTO `translations` VALUES (533, 'en', 'data_properties', 'title', 35, 'tea house', NULL, NULL);
INSERT INTO `translations` VALUES (534, 'ar', 'data_properties', 'title', 35, 'بيت الشاي', NULL, NULL);
INSERT INTO `translations` VALUES (535, 'fa', 'data_properties', 'title', 27, 'گاوصندوق مخصوص مهمان', NULL, NULL);
INSERT INTO `translations` VALUES (536, 'en', 'data_properties', 'title', 27, 'safe box', NULL, NULL);
INSERT INTO `translations` VALUES (537, 'ar', 'data_properties', 'title', 27, 'صندوق الأمان', NULL, NULL);
INSERT INTO `translations` VALUES (538, 'fa', 'data_properties', 'title', 28, 'سیستم گرمایشی پکیج', NULL, NULL);
INSERT INTO `translations` VALUES (539, 'en', 'data_properties', 'title', 28, 'heater package', NULL, NULL);
INSERT INTO `translations` VALUES (540, 'ar', 'data_properties', 'title', 28, 'حزمة سخان', NULL, NULL);
INSERT INTO `translations` VALUES (541, 'fa', 'data_properties', 'title', 30, 'تهویه مطبوع', NULL, NULL);
INSERT INTO `translations` VALUES (542, 'en', 'data_properties', 'title', 30, 'air conditioner', NULL, NULL);
INSERT INTO `translations` VALUES (543, 'ar', 'data_properties', 'title', 30, 'مكيف هواء', NULL, NULL);
INSERT INTO `translations` VALUES (544, 'fa', 'data_properties', 'title', 31, 'سیستم اعلام تحریق', NULL, NULL);
INSERT INTO `translations` VALUES (545, 'en', 'data_properties', 'title', 31, 'fire alarm', NULL, NULL);
INSERT INTO `translations` VALUES (546, 'ar', 'data_properties', 'title', 31, 'إنذار حريق', NULL, NULL);
INSERT INTO `translations` VALUES (547, 'fa', 'data_properties', 'title', 38, 'قفل در اختیار مهمان', NULL, NULL);
INSERT INTO `translations` VALUES (548, 'en', 'data_properties', 'title', 38, 'lock', NULL, NULL);
INSERT INTO `translations` VALUES (549, 'ar', 'data_properties', 'title', 38, 'قفل', NULL, NULL);
INSERT INTO `translations` VALUES (550, 'fa', 'data_properties', 'title', 41, 'ظرفیت پارکینگ', NULL, NULL);
INSERT INTO `translations` VALUES (551, 'en', 'data_properties', 'title', 41, 'parking capacity', NULL, NULL);
INSERT INTO `translations` VALUES (552, 'ar', 'data_properties', 'title', 41, 'سعة مواقف السيارات', NULL, NULL);
INSERT INTO `translations` VALUES (553, 'fa', 'data_properties', 'title', 49, 'ایمیل', NULL, NULL);
INSERT INTO `translations` VALUES (554, 'en', 'data_properties', 'title', 49, 'email', NULL, NULL);
INSERT INTO `translations` VALUES (555, 'ar', 'data_properties', 'title', 49, 'البريد الإلكتروني', NULL, NULL);
INSERT INTO `translations` VALUES (556, 'fa', 'data_properties', 'title', 33, 'برق اضطراری فول ژنراتور', NULL, NULL);
INSERT INTO `translations` VALUES (557, 'en', 'data_properties', 'title', 33, 'emergency power', NULL, NULL);
INSERT INTO `translations` VALUES (558, 'ar', 'data_properties', 'title', 33, 'قوة الطوارئ', NULL, NULL);
INSERT INTO `translations` VALUES (559, 'fa', 'data_properties', 'title', 34, 'تاکسی سرویس', NULL, NULL);
INSERT INTO `translations` VALUES (560, 'en', 'data_properties', 'title', 34, 'taxi', NULL, NULL);
INSERT INTO `translations` VALUES (561, 'ar', 'data_properties', 'title', 34, 'سيارة اجره', NULL, NULL);
INSERT INTO `translations` VALUES (562, 'fa', 'data_properties', 'title', 36, 'روم سرویس', NULL, NULL);
INSERT INTO `translations` VALUES (563, 'en', 'data_properties', 'title', 36, 'room service', NULL, NULL);
INSERT INTO `translations` VALUES (564, 'ar', 'data_properties', 'title', 36, 'خدمة الغرف', NULL, NULL);
INSERT INTO `translations` VALUES (565, 'fa', 'data_properties', 'title', 37, 'آژانس مسافرتی', NULL, NULL);
INSERT INTO `translations` VALUES (566, 'en', 'data_properties', 'title', 37, 'travel agency', NULL, NULL);
INSERT INTO `translations` VALUES (567, 'ar', 'data_properties', 'title', 37, 'وكالة سفر', NULL, NULL);
INSERT INTO `translations` VALUES (568, 'fa', 'data_properties', 'title', 39, 'رستوران و فست فود', NULL, NULL);
INSERT INTO `translations` VALUES (569, 'en', 'data_properties', 'title', 39, 'fast food and restaurant', NULL, NULL);
INSERT INTO `translations` VALUES (570, 'ar', 'data_properties', 'title', 39, 'الوجبات السريعة ومطعم', NULL, NULL);
INSERT INTO `translations` VALUES (571, 'fa', 'data_properties', 'title', 40, 'اینترنت در لابی', NULL, NULL);
INSERT INTO `translations` VALUES (572, 'en', 'data_properties', 'title', 40, 'lobby internet type', NULL, NULL);
INSERT INTO `translations` VALUES (573, 'ar', 'data_properties', 'title', 40, 'لوبي الإنترنت', NULL, NULL);
INSERT INTO `translations` VALUES (574, 'fa', 'data_properties', 'title', 42, 'تعداد طبقات', NULL, NULL);
INSERT INTO `translations` VALUES (575, 'en', 'data_properties', 'title', 42, 'floors count', NULL, NULL);
INSERT INTO `translations` VALUES (576, 'ar', 'data_properties', 'title', 42, 'عدد الطوابق', NULL, NULL);
INSERT INTO `translations` VALUES (577, 'fa', 'data_properties', 'title', 43, 'تعداد اتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (578, 'en', 'data_properties', 'title', 43, 'rooms count', NULL, NULL);
INSERT INTO `translations` VALUES (579, 'ar', 'data_properties', 'title', 43, 'عدد الغرف', NULL, NULL);
INSERT INTO `translations` VALUES (586, 'fa', 'user_properties', 'title', 1, 'نام', NULL, NULL);
INSERT INTO `translations` VALUES (587, 'en', 'user_properties', 'title', 1, 'name', NULL, NULL);
INSERT INTO `translations` VALUES (588, 'ar', 'user_properties', 'title', 1, 'اسم', NULL, NULL);
INSERT INTO `translations` VALUES (589, 'fa', 'user_properties', 'title', 2, 'نام خانوادگی', NULL, NULL);
INSERT INTO `translations` VALUES (590, 'en', 'user_properties', 'title', 2, 'last name', NULL, NULL);
INSERT INTO `translations` VALUES (591, 'ar', 'user_properties', 'title', 2, 'الكنية', NULL, NULL);
INSERT INTO `translations` VALUES (592, 'fa', 'user_properties', 'title', 3, 'کد ملی', NULL, NULL);
INSERT INTO `translations` VALUES (593, 'en', 'user_properties', 'title', 3, 'ssn', NULL, NULL);
INSERT INTO `translations` VALUES (594, 'ar', 'user_properties', 'title', 3, 'رقم الضمان الاجتماعي', NULL, NULL);
INSERT INTO `translations` VALUES (595, 'fa', 'user_properties', 'title', 4, 'تلفن', NULL, NULL);
INSERT INTO `translations` VALUES (596, 'en', 'user_properties', 'title', 4, 'phone', NULL, NULL);
INSERT INTO `translations` VALUES (597, 'ar', 'user_properties', 'title', 4, 'التلفن', NULL, NULL);
INSERT INTO `translations` VALUES (598, 'fa', 'user_properties', 'title', 6, 'همراه', NULL, NULL);
INSERT INTO `translations` VALUES (599, 'en', 'user_properties', 'title', 6, 'mobile', NULL, NULL);
INSERT INTO `translations` VALUES (600, 'ar', 'user_properties', 'title', 6, 'التليفون المحمول', NULL, NULL);
INSERT INTO `translations` VALUES (601, 'fa', 'user_properties', 'title', 5, 'نام', NULL, NULL);
INSERT INTO `translations` VALUES (602, 'en', 'user_properties', 'title', 5, 'name', NULL, NULL);
INSERT INTO `translations` VALUES (603, 'ar', 'user_properties', 'title', 5, 'اسم', NULL, NULL);
INSERT INTO `translations` VALUES (604, 'fa', 'user_properties', 'title', 8, 'نام خانوادگی', NULL, NULL);
INSERT INTO `translations` VALUES (605, 'en', 'user_properties', 'title', 8, 'last name', NULL, NULL);
INSERT INTO `translations` VALUES (606, 'ar', 'user_properties', 'title', 8, 'الكنية', NULL, NULL);
INSERT INTO `translations` VALUES (607, 'en', 'user_assigned_properties', 'value', 403, 'kamran', NULL, NULL);
INSERT INTO `translations` VALUES (608, 'ar', 'user_assigned_properties', 'value', 403, 'کامران', NULL, NULL);
INSERT INTO `translations` VALUES (609, 'en', 'user_assigned_properties', 'value', 404, 'saberi', NULL, NULL);
INSERT INTO `translations` VALUES (610, 'ar', 'user_assigned_properties', 'value', 404, 'صابری', NULL, NULL);
INSERT INTO `translations` VALUES (611, 'en', 'user_assigned_properties', 'value', 405, 'kamran', NULL, NULL);
INSERT INTO `translations` VALUES (612, 'ar', 'user_assigned_properties', 'value', 405, 'کامران', NULL, NULL);
INSERT INTO `translations` VALUES (613, 'en', 'user_assigned_properties', 'value', 406, 'saberi', NULL, NULL);
INSERT INTO `translations` VALUES (614, 'ar', 'user_assigned_properties', 'value', 406, 'صابری', NULL, NULL);
INSERT INTO `translations` VALUES (615, 'en', 'user_assigned_properties', 'value', 407, 'kamran1111', NULL, NULL);
INSERT INTO `translations` VALUES (616, 'ar', 'user_assigned_properties', 'value', 407, 'کامران', NULL, NULL);
INSERT INTO `translations` VALUES (617, 'en', 'user_assigned_properties', 'value', 408, 'saberi', NULL, NULL);
INSERT INTO `translations` VALUES (618, 'ar', 'user_assigned_properties', 'value', 408, 'صابری', NULL, NULL);
INSERT INTO `translations` VALUES (619, 'en', 'user_assigned_properties', 'value', 409, 'ali', NULL, NULL);
INSERT INTO `translations` VALUES (620, 'ar', 'user_assigned_properties', 'value', 409, 'علی', NULL, NULL);
INSERT INTO `translations` VALUES (621, 'en', 'user_assigned_properties', 'value', 410, 'saghafi', NULL, NULL);
INSERT INTO `translations` VALUES (622, 'ar', 'user_assigned_properties', 'value', 410, 'ثقفی', NULL, NULL);
INSERT INTO `translations` VALUES (623, 'en', 'user_assigned_properties', 'value', 411, '1245', NULL, NULL);
INSERT INTO `translations` VALUES (624, 'ar', 'user_assigned_properties', 'value', 411, '1245', NULL, NULL);
INSERT INTO `translations` VALUES (625, 'en', 'user_assigned_properties', 'value', 412, '99999', NULL, NULL);
INSERT INTO `translations` VALUES (626, 'ar', 'user_assigned_properties', 'value', 412, '99999', NULL, NULL);
INSERT INTO `translations` VALUES (627, 'en', 'user_assigned_properties', 'value', 413, '11111', NULL, NULL);
INSERT INTO `translations` VALUES (628, 'ar', 'user_assigned_properties', 'value', 413, '11111', NULL, NULL);
INSERT INTO `translations` VALUES (629, 'en', 'user_assigned_properties', 'value', 414, 'ali', NULL, NULL);
INSERT INTO `translations` VALUES (630, 'ar', 'user_assigned_properties', 'value', 414, 'علی', NULL, NULL);
INSERT INTO `translations` VALUES (631, 'en', 'user_assigned_properties', 'value', 415, 'saghafi', NULL, NULL);
INSERT INTO `translations` VALUES (632, 'ar', 'user_assigned_properties', 'value', 415, 'ثقفی', NULL, NULL);
INSERT INTO `translations` VALUES (633, 'en', 'user_assigned_properties', 'value', 416, '1245', NULL, NULL);
INSERT INTO `translations` VALUES (634, 'ar', 'user_assigned_properties', 'value', 416, '1245', NULL, NULL);
INSERT INTO `translations` VALUES (635, 'en', 'user_assigned_properties', 'value', 417, '99999', NULL, NULL);
INSERT INTO `translations` VALUES (636, 'ar', 'user_assigned_properties', 'value', 417, '99999', NULL, NULL);
INSERT INTO `translations` VALUES (637, 'en', 'user_assigned_properties', 'value', 418, '11111', NULL, NULL);
INSERT INTO `translations` VALUES (638, 'ar', 'user_assigned_properties', 'value', 418, '11111', NULL, NULL);
INSERT INTO `translations` VALUES (639, 'fa', 'data_properties', 'title', 63, 'به مدیریت', NULL, NULL);
INSERT INTO `translations` VALUES (640, 'en', 'data_properties', 'title', 63, 'manager', NULL, NULL);
INSERT INTO `translations` VALUES (641, 'ar', 'data_properties', 'title', 63, 'لإدارة', NULL, NULL);
INSERT INTO `translations` VALUES (662, 'en', 'data_assigned_properties', 'value', 553, 'الهتل صبوری', NULL, NULL);
INSERT INTO `translations` VALUES (663, 'ar', 'data_assigned_properties', 'value', 553, 'hotel sabouri', NULL, NULL);
INSERT INTO `translations` VALUES (664, 'en', 'data_assigned_properties', 'value', 554, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (665, 'ar', 'data_assigned_properties', 'value', 554, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (666, 'en', 'data_assigned_properties', 'value', 555, 'Three star hotel in Rasht has been operational in April 1394. This is a five-story hotel with 12 units of accommodation.  The Sabor Hotel Rasht, located in the green zone of Gilan, hosts many tourists from various locations. Guests are welcome to have easy access to the hotels in the friendly apartment hotel.  The distance between the three star Hotel Rasht\'s sadness and some historical and religious sites, including the historical building of the former municipality of Rasht and the holy shrine of Hazrat Fatemeh Akhari, is about three kilometers, which is considered to be the advantage of this hotel.', NULL, NULL);
INSERT INTO `translations` VALUES (667, 'ar', 'data_assigned_properties', 'value', 555, 'تم تشغيل فندق ثلاث نجوم في رشت في أبريل عام 1394. إنه فندق من خمسة طوابق مع 12 وحدة من أماكن الإقامة.  يقع فندق Sabor Hotel Rasht في منطقة Gilan الخضراء ، ويستضيف العديد من السياح من مختلف المواقع. الضيوف مدعوون للوصول بسهولة إلى الفنادق في فندق الشقق الودود.  تبلغ المسافة بين حزن فندق رشت ذو الثلاثة نجوم وبعض المواقع التاريخية والدينية ، بما في ذلك المبنى التاريخي لبلدية رشت السابقة وضريح حضرة فاطمة أخاري المقدس ، حوالي ثلاثة كيلومترات ، والتي تعتبر ميزة من هذا الفندق.', NULL, NULL);
INSERT INTO `translations` VALUES (668, 'en', 'data_assigned_properties', 'value', 572, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (669, 'ar', 'data_assigned_properties', 'value', 572, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (670, 'en', 'data_assigned_properties', 'value', 573, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (671, 'ar', 'data_assigned_properties', 'value', 573, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (672, 'en', 'data_assigned_properties', 'value', 574, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (673, 'ar', 'data_assigned_properties', 'value', 574, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (674, 'en', 'data_assigned_properties', 'value', 575, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (675, 'ar', 'data_assigned_properties', 'value', 575, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (676, 'en', 'data_assigned_properties', 'value', 576, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (677, 'ar', 'data_assigned_properties', 'value', 576, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (678, 'en', 'data_assigned_properties', 'value', 577, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (679, 'ar', 'data_assigned_properties', 'value', 577, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (680, 'en', 'data_assigned_properties', 'value', 578, 'fariborz sabouri vishkaei', NULL, NULL);
INSERT INTO `translations` VALUES (681, 'ar', 'data_assigned_properties', 'value', 578, 'فریبرز صبوری ویشکایی', NULL, NULL);
INSERT INTO `translations` VALUES (682, 'en', 'data_assigned_properties', 'value', 581, 'Three Star Hotel Sabouri', NULL, NULL);
INSERT INTO `translations` VALUES (683, 'ar', 'data_assigned_properties', 'value', 581, 'ثلاث نجوم فندق الصبر', NULL, NULL);
INSERT INTO `translations` VALUES (684, 'en', 'data_assigned_properties', 'value', 582, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (685, 'ar', 'data_assigned_properties', 'value', 582, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (686, 'en', 'data_assigned_properties', 'value', 583, 'Three star hotel in Rasht has been operational in April 1394. This is a five-story hotel with 12 units of accommodation.  The Sabor Hotel Rasht, located in the green zone of Gilan, hosts many tourists from various locations. Guests are welcome to have easy access to the hotels in the friendly apartment hotel.  The distance between the three star Hotel Rasht\'s sadness and some historical and religious sites, including the historical building of the former municipality of Rasht and the holy shrine of Hazrat Fatemeh Akhari, is about three kilometers, which is considered to be the advantage of this hotel.', NULL, NULL);
INSERT INTO `translations` VALUES (687, 'ar', 'data_assigned_properties', 'value', 583, 'تم تشغيل فندق ثلاث نجوم في رشت في أبريل عام 1394. إنه فندق من خمسة طوابق مع 12 وحدة من أماكن الإقامة.  يقع فندق Sabor Hotel Rasht في منطقة Gilan الخضراء ، ويستضيف العديد من السياح من مختلف المواقع. الضيوف مدعوون للوصول بسهولة إلى الفنادق في فندق الشقق الودود.  تبلغ المسافة بين حزن فندق رشت ذو الثلاثة نجوم وبعض المواقع التاريخية والدينية ، بما في ذلك المبنى التاريخي لبلدية رشت السابقة وضريح حضرة فاطمة أخاري المقدس ، حوالي ثلاثة كيلومترات ، والتي تعتبر ميزة من هذا الفندق.', NULL, NULL);
INSERT INTO `translations` VALUES (688, 'en', 'data_assigned_properties', 'value', 600, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (689, 'ar', 'data_assigned_properties', 'value', 600, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (690, 'en', 'data_assigned_properties', 'value', 601, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (691, 'ar', 'data_assigned_properties', 'value', 601, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (692, 'en', 'data_assigned_properties', 'value', 602, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (693, 'ar', 'data_assigned_properties', 'value', 602, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (694, 'en', 'data_assigned_properties', 'value', 603, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (695, 'ar', 'data_assigned_properties', 'value', 603, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (696, 'en', 'data_assigned_properties', 'value', 604, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (697, 'ar', 'data_assigned_properties', 'value', 604, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (698, 'en', 'data_assigned_properties', 'value', 605, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (699, 'ar', 'data_assigned_properties', 'value', 605, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (700, 'en', 'data_assigned_properties', 'value', 606, 'fariborz sabouri vishkaei', NULL, NULL);
INSERT INTO `translations` VALUES (701, 'ar', 'data_assigned_properties', 'value', 606, 'فریبرز صبوری ویشکایی', NULL, NULL);
INSERT INTO `translations` VALUES (702, 'fa', 'service_properties', 'title', 9, 'زمان لازم  برای بررسی و  تایید اتاق', NULL, NULL);
INSERT INTO `translations` VALUES (703, 'en', 'service_properties', 'title', 9, 'room verification time', NULL, NULL);
INSERT INTO `translations` VALUES (704, 'ar', 'service_properties', 'title', 9, 'room verification time', NULL, NULL);
INSERT INTO `translations` VALUES (705, 'fa', 'service_properties', 'title', 10, 'زمان برای پرداخت آنلاین', NULL, NULL);
INSERT INTO `translations` VALUES (706, 'en', 'service_properties', 'title', 10, 'payout time', NULL, NULL);
INSERT INTO `translations` VALUES (707, 'ar', 'service_properties', 'title', 10, 'payout time', NULL, NULL);
INSERT INTO `translations` VALUES (708, 'fa', 'service_properties', 'title', 11, 'زمان برای بررسی و تایید فیش پرداختی', NULL, NULL);
INSERT INTO `translations` VALUES (709, 'en', 'service_properties', 'title', 11, 'check verification time', NULL, NULL);
INSERT INTO `translations` VALUES (710, 'ar', 'service_properties', 'title', 11, 'check verification time', NULL, NULL);
INSERT INTO `translations` VALUES (711, 'en', 'data_assigned_properties', 'value', 607, 'The privately held 3-star Patio Hotel is a safe website for patiently hotel reservations. It is also possible for you to book hotel rooms at a lower price than the main board and make special discounts online.', NULL, NULL);
INSERT INTO `translations` VALUES (712, 'ar', 'data_assigned_properties', 'value', 607, 'يعد فندق ذو الـ 3 نجوم والموقع الخاص موقعًا آمنًا لحجز الفنادق بصبر. يمكنك أيضًا حجز غرف الفنادق بسعر أقل من اللوحة الرئيسية وإجراء تخفيضات خاصة عبر الإنترنت.', NULL, NULL);
INSERT INTO `translations` VALUES (713, 'en', 'document_assigned_properties', 'value', 152, 'this is a test', NULL, NULL);
INSERT INTO `translations` VALUES (714, 'ar', 'document_assigned_properties', 'value', 152, 'التست', NULL, NULL);
INSERT INTO `translations` VALUES (715, 'en', 'document_assigned_properties', 'value', 153, 'this is just a page test', NULL, NULL);
INSERT INTO `translations` VALUES (716, 'ar', 'document_assigned_properties', 'value', 153, 'التست  التست', NULL, NULL);
INSERT INTO `translations` VALUES (717, 'en', 'document_assigned_properties', 'value', 154, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (718, 'ar', 'document_assigned_properties', 'value', 154, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (719, 'en', 'document_assigned_properties', 'value', 155, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (720, 'ar', 'document_assigned_properties', 'value', 155, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (721, 'en', 'document_assigned_properties', 'value', 160, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (722, 'ar', 'document_assigned_properties', 'value', 160, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (723, 'en', 'document_assigned_properties', 'value', 171, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (724, 'ar', 'document_assigned_properties', 'value', 171, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (725, 'en', 'document_assigned_properties', 'value', 174, 'facilities', NULL, NULL);
INSERT INTO `translations` VALUES (726, 'ar', 'document_assigned_properties', 'value', 174, 'الامکانات', NULL, NULL);
INSERT INTO `translations` VALUES (727, 'en', 'document_assigned_properties', 'value', 175, 'its facilities', NULL, NULL);
INSERT INTO `translations` VALUES (728, 'ar', 'document_assigned_properties', 'value', 175, 'هی الامکانات', NULL, NULL);
INSERT INTO `translations` VALUES (729, 'en', 'document_assigned_properties', 'value', 176, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (730, 'ar', 'document_assigned_properties', 'value', 176, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (731, 'en', 'document_assigned_properties', 'value', 177, 'hello', NULL, NULL);
INSERT INTO `translations` VALUES (732, 'ar', 'document_assigned_properties', 'value', 177, 'هی', NULL, NULL);
INSERT INTO `translations` VALUES (733, 'en', 'document_assigned_properties', 'value', 178, 'hello. its test', NULL, NULL);
INSERT INTO `translations` VALUES (734, 'ar', 'document_assigned_properties', 'value', 178, 'هی. التست', NULL, NULL);
INSERT INTO `translations` VALUES (735, 'en', 'document_assigned_properties', 'value', 179, 'asdsad', NULL, NULL);
INSERT INTO `translations` VALUES (736, 'ar', 'document_assigned_properties', 'value', 179, 'asdsda', NULL, NULL);
INSERT INTO `translations` VALUES (737, 'en', 'document_assigned_properties', 'value', 181, 'sdfdsfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (738, 'ar', 'document_assigned_properties', 'value', 181, 'sdfsdffsdfsdfsdfdf', NULL, NULL);
INSERT INTO `translations` VALUES (739, 'en', 'document_assigned_properties', 'value', 182, '<p>sdfsdfsdfsdf df sd fsd ffsd</p>', NULL, NULL);
INSERT INTO `translations` VALUES (740, 'ar', 'document_assigned_properties', 'value', 182, '<p>ddfdfdfsf</p>', NULL, NULL);
INSERT INTO `translations` VALUES (741, 'en', 'document_assigned_properties', 'value', 183, 'facilities', NULL, NULL);
INSERT INTO `translations` VALUES (742, 'ar', 'document_assigned_properties', 'value', 183, 'الامکانات', NULL, NULL);
INSERT INTO `translations` VALUES (743, 'en', 'document_assigned_properties', 'value', 184, 'werwer', NULL, NULL);
INSERT INTO `translations` VALUES (744, 'ar', 'document_assigned_properties', 'value', 184, 'werwer', NULL, NULL);
INSERT INTO `translations` VALUES (745, 'en', 'document_assigned_properties', 'value', 185, 'its facilities', NULL, NULL);
INSERT INTO `translations` VALUES (746, 'ar', 'document_assigned_properties', 'value', 185, 'هی الامکانات', NULL, NULL);
INSERT INTO `translations` VALUES (747, 'en', 'document_assigned_properties', 'value', 186, 'werwer', NULL, NULL);
INSERT INTO `translations` VALUES (748, 'ar', 'document_assigned_properties', 'value', 186, 'ewrwerrwer', NULL, NULL);
INSERT INTO `translations` VALUES (749, 'en', 'document_assigned_properties', 'value', 187, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (750, 'ar', 'document_assigned_properties', 'value', 187, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (751, 'en', 'navigation_item_assigned_properties', 'value', 1, 'Dashboard', NULL, NULL);
INSERT INTO `translations` VALUES (752, 'fa', 'navigation_item_assigned_properties', 'value', 1, 'داشبورد', NULL, NULL);
INSERT INTO `translations` VALUES (754, 'ar', 'navigation_item_assigned_properties', 'value', 1, 'لوحة القيادة', NULL, NULL);
INSERT INTO `translations` VALUES (755, 'en', 'navigation_item_assigned_properties', 'value', 3, 'Rooms', NULL, NULL);
INSERT INTO `translations` VALUES (756, 'fa', 'navigation_item_assigned_properties', 'value', 3, 'فهرست اتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (757, 'ar', 'navigation_item_assigned_properties', 'value', 3, 'غرف', NULL, NULL);
INSERT INTO `translations` VALUES (758, 'en', 'navigation_item_assigned_properties', 'value', 7, 'Users', NULL, NULL);
INSERT INTO `translations` VALUES (759, 'fa', 'navigation_item_assigned_properties', 'value', 7, 'کاربران', NULL, NULL);
INSERT INTO `translations` VALUES (760, 'ar', 'navigation_item_assigned_properties', 'value', 7, 'المستخدمين', NULL, NULL);
INSERT INTO `translations` VALUES (761, 'en', 'navigation_item_assigned_properties', 'value', 11, 'Customers', NULL, NULL);
INSERT INTO `translations` VALUES (762, 'fa', 'navigation_item_assigned_properties', 'value', 11, 'مشتریان', NULL, NULL);
INSERT INTO `translations` VALUES (763, 'ar', 'navigation_item_assigned_properties', 'value', 11, 'الزبائن', NULL, NULL);
INSERT INTO `translations` VALUES (764, 'en', 'navigation_item_assigned_properties', 'value', 15, 'Gallery', NULL, NULL);
INSERT INTO `translations` VALUES (765, 'fa', 'navigation_item_assigned_properties', 'value', 15, 'گالری تصاویر هتل', NULL, NULL);
INSERT INTO `translations` VALUES (766, 'ar', 'navigation_item_assigned_properties', 'value', 15, 'صالة عرض', NULL, NULL);
INSERT INTO `translations` VALUES (767, 'en', 'navigation_item_assigned_properties', 'value', 19, 'Home', NULL, NULL);
INSERT INTO `translations` VALUES (768, 'fa', 'navigation_item_assigned_properties', 'value', 19, 'صفحه اصلی', NULL, NULL);
INSERT INTO `translations` VALUES (769, 'ar', 'navigation_item_assigned_properties', 'value', 19, 'الصفحة الرئيسية', NULL, NULL);
INSERT INTO `translations` VALUES (770, 'en', 'navigation_item_assigned_properties', 'value', 21, 'Rooms', NULL, NULL);
INSERT INTO `translations` VALUES (771, 'fa', 'navigation_item_assigned_properties', 'value', 21, 'فهرست اتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (772, 'ar', 'navigation_item_assigned_properties', 'value', 21, 'غرف', NULL, NULL);
INSERT INTO `translations` VALUES (773, 'en', 'navigation_item_assigned_properties', 'value', 25, 'Gallery', NULL, NULL);
INSERT INTO `translations` VALUES (774, 'fa', 'navigation_item_assigned_properties', 'value', 25, 'گالری تصاویر هتل', NULL, NULL);
INSERT INTO `translations` VALUES (775, 'ar', 'navigation_item_assigned_properties', 'value', 25, 'صالة عرض', NULL, NULL);
INSERT INTO `translations` VALUES (776, 'en', 'navigation_item_assigned_properties', 'value', 29, 'Register Complaints', NULL, NULL);
INSERT INTO `translations` VALUES (777, 'fa', 'navigation_item_assigned_properties', 'value', 29, 'ثبت شکایات', NULL, NULL);
INSERT INTO `translations` VALUES (778, 'ar', 'navigation_item_assigned_properties', 'value', 29, 'تسجيل الشكاوى', NULL, NULL);
INSERT INTO `translations` VALUES (779, 'en', 'navigation_item_assigned_properties', 'value', 33, 'Navigation', NULL, NULL);
INSERT INTO `translations` VALUES (780, 'fa', 'navigation_item_assigned_properties', 'value', 33, 'منوها', NULL, NULL);
INSERT INTO `translations` VALUES (781, 'ar', 'navigation_item_assigned_properties', 'value', 33, 'التنقل', NULL, NULL);
INSERT INTO `translations` VALUES (782, 'en', 'navigation_item_assigned_properties', 'value', 37, 'Room Properties', NULL, NULL);
INSERT INTO `translations` VALUES (783, 'fa', 'navigation_item_assigned_properties', 'value', 37, 'خاصیت های اتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (784, 'ar', 'navigation_item_assigned_properties', 'value', 37, 'خصائص الغرفة', NULL, NULL);
INSERT INTO `translations` VALUES (785, 'en', 'navigation_item_assigned_properties', 'value', 41, 'Reserve', NULL, NULL);
INSERT INTO `translations` VALUES (786, 'fa', 'navigation_item_assigned_properties', 'value', 41, 'رزرو اتاق', NULL, NULL);
INSERT INTO `translations` VALUES (787, 'ar', 'navigation_item_assigned_properties', 'value', 41, 'حجز', NULL, NULL);
INSERT INTO `translations` VALUES (788, 'en', 'navigation_item_assigned_properties', 'value', 45, 'Offers', NULL, NULL);
INSERT INTO `translations` VALUES (789, 'fa', 'navigation_item_assigned_properties', 'value', 45, 'پکیج های ویژه', NULL, NULL);
INSERT INTO `translations` VALUES (790, 'ar', 'navigation_item_assigned_properties', 'value', 45, 'عروض', NULL, NULL);
INSERT INTO `translations` VALUES (791, 'en', 'navigation_item_assigned_properties', 'value', 49, 'Main Slide Show', NULL, NULL);
INSERT INTO `translations` VALUES (792, 'fa', 'navigation_item_assigned_properties', 'value', 49, 'اسلاید صفحه اصلی', NULL, NULL);
INSERT INTO `translations` VALUES (793, 'ar', 'navigation_item_assigned_properties', 'value', 49, 'الشريحة الرئيسية', NULL, NULL);
INSERT INTO `translations` VALUES (794, 'en', 'navigation_item_assigned_properties', 'value', 53, 'Second Slide Show', NULL, NULL);
INSERT INTO `translations` VALUES (795, 'fa', 'navigation_item_assigned_properties', 'value', 53, 'اسلاید صفحه دوم', NULL, NULL);
INSERT INTO `translations` VALUES (796, 'ar', 'navigation_item_assigned_properties', 'value', 53, 'شريحة الصفحة الثانية', NULL, NULL);
INSERT INTO `translations` VALUES (797, 'en', 'navigation_item_assigned_properties', 'value', 57, 'Home', NULL, NULL);
INSERT INTO `translations` VALUES (798, 'fa', 'navigation_item_assigned_properties', 'value', 57, 'صفحه اصلی', NULL, NULL);
INSERT INTO `translations` VALUES (799, 'ar', 'navigation_item_assigned_properties', 'value', 57, 'الصفحة الرئيسية', NULL, NULL);
INSERT INTO `translations` VALUES (800, 'en', 'navigation_item_assigned_properties', 'value', 61, 'Gallery', NULL, NULL);
INSERT INTO `translations` VALUES (801, 'fa', 'navigation_item_assigned_properties', 'value', 61, 'گالری تصاویر هتل', NULL, NULL);
INSERT INTO `translations` VALUES (802, 'ar', 'navigation_item_assigned_properties', 'value', 61, 'صالة عرض', NULL, NULL);
INSERT INTO `translations` VALUES (803, 'en', 'navigation_item_assigned_properties', 'value', 65, 'Contact Us', NULL, NULL);
INSERT INTO `translations` VALUES (804, 'fa', 'navigation_item_assigned_properties', 'value', 65, 'تماس با ما', NULL, NULL);
INSERT INTO `translations` VALUES (805, 'ar', 'navigation_item_assigned_properties', 'value', 65, 'اتصل بنا', NULL, NULL);
INSERT INTO `translations` VALUES (806, 'en', 'navigation_item_assigned_properties', 'value', 73, 'Website Settings', NULL, NULL);
INSERT INTO `translations` VALUES (807, 'fa', 'navigation_item_assigned_properties', 'value', 73, 'تنظیمات وبسایت', NULL, NULL);
INSERT INTO `translations` VALUES (808, 'ar', 'navigation_item_assigned_properties', 'value', 73, 'إعدادات الفندق', NULL, NULL);
INSERT INTO `translations` VALUES (809, 'en', 'navigation_item_assigned_properties', 'value', 77, 'Rules', NULL, NULL);
INSERT INTO `translations` VALUES (810, 'fa', 'navigation_item_assigned_properties', 'value', 77, 'قوانین و مقررات', NULL, NULL);
INSERT INTO `translations` VALUES (811, 'ar', 'navigation_item_assigned_properties', 'value', 77, 'قواعد', NULL, NULL);
INSERT INTO `translations` VALUES (812, 'en', 'navigation_item_assigned_properties', 'value', 81, 'Contact Us', NULL, NULL);
INSERT INTO `translations` VALUES (813, 'fa', 'navigation_item_assigned_properties', 'value', 81, 'تماس با ما', NULL, NULL);
INSERT INTO `translations` VALUES (814, 'ar', 'navigation_item_assigned_properties', 'value', 81, 'اتصل بنا', NULL, NULL);
INSERT INTO `translations` VALUES (815, 'en', 'navigation_item_assigned_properties', 'value', 85, 'Rooms', NULL, NULL);
INSERT INTO `translations` VALUES (816, 'fa', 'navigation_item_assigned_properties', 'value', 85, 'فهرست اتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (817, 'ar', 'navigation_item_assigned_properties', 'value', 85, 'غرف', NULL, NULL);
INSERT INTO `translations` VALUES (818, 'en', 'navigation_item_assigned_properties', 'value', 89, 'About Us', NULL, NULL);
INSERT INTO `translations` VALUES (819, 'fa', 'navigation_item_assigned_properties', 'value', 89, 'درباره ما', NULL, NULL);
INSERT INTO `translations` VALUES (820, 'ar', 'navigation_item_assigned_properties', 'value', 89, 'معلومات عنا', NULL, NULL);
INSERT INTO `translations` VALUES (821, 'en', 'navigation_item_assigned_properties', 'value', 93, 'Gallery', NULL, NULL);
INSERT INTO `translations` VALUES (822, 'fa', 'navigation_item_assigned_properties', 'value', 93, 'گالری تصاویر هتل', NULL, NULL);
INSERT INTO `translations` VALUES (823, 'ar', 'navigation_item_assigned_properties', 'value', 93, 'صالة عرض', NULL, NULL);
INSERT INTO `translations` VALUES (824, 'en', 'navigation_item_assigned_properties', 'value', 97, 'Coffee Shop', NULL, NULL);
INSERT INTO `translations` VALUES (825, 'fa', 'navigation_item_assigned_properties', 'value', 97, 'آلاچیق و کافی شاپ', NULL, NULL);
INSERT INTO `translations` VALUES (826, 'ar', 'navigation_item_assigned_properties', 'value', 97, 'مقهى', NULL, NULL);
INSERT INTO `translations` VALUES (827, 'en', 'navigation_item_assigned_properties', 'value', 101, 'Restaurant & Fast Food', NULL, NULL);
INSERT INTO `translations` VALUES (828, 'fa', 'navigation_item_assigned_properties', 'value', 101, 'رستوران و فست فود', NULL, NULL);
INSERT INTO `translations` VALUES (829, 'ar', 'navigation_item_assigned_properties', 'value', 101, 'مطعم و وجبات سريعة', NULL, NULL);
INSERT INTO `translations` VALUES (830, 'en', 'navigation_item_assigned_properties', 'value', 147, 'Hotel Settings', NULL, NULL);
INSERT INTO `translations` VALUES (831, 'fa', 'navigation_item_assigned_properties', 'value', 147, 'تنظیمات هتل', NULL, NULL);
INSERT INTO `translations` VALUES (832, 'ar', 'navigation_item_assigned_properties', 'value', 147, 'إعدادات الفندق', NULL, NULL);
INSERT INTO `translations` VALUES (833, 'en', 'navigation_item_assigned_properties', 'value', 152, 'Media', NULL, NULL);
INSERT INTO `translations` VALUES (834, 'fa', 'navigation_item_assigned_properties', 'value', 152, 'رسانه', NULL, NULL);
INSERT INTO `translations` VALUES (835, 'ar', 'navigation_item_assigned_properties', 'value', 152, 'وسائل الإعلام', NULL, NULL);
INSERT INTO `translations` VALUES (836, 'en', 'navigation_item_assigned_properties', 'value', 156, 'Hotel Properties', NULL, NULL);
INSERT INTO `translations` VALUES (837, 'fa', 'navigation_item_assigned_properties', 'value', 156, 'خاصیت های هتل', NULL, NULL);
INSERT INTO `translations` VALUES (838, 'ar', 'navigation_item_assigned_properties', 'value', 156, 'خصائص الفندق', NULL, NULL);
INSERT INTO `translations` VALUES (839, 'en', 'navigation_item_assigned_properties', 'value', 161, 'Register Complaints', NULL, NULL);
INSERT INTO `translations` VALUES (840, 'fa', 'navigation_item_assigned_properties', 'value', 161, 'ثبت شکایات', NULL, NULL);
INSERT INTO `translations` VALUES (841, 'ar', 'navigation_item_assigned_properties', 'value', 161, 'تسجيل الشكاوى', NULL, NULL);
INSERT INTO `translations` VALUES (842, 'en', 'navigation_item_assigned_properties', 'value', 166, 'User Properties', NULL, NULL);
INSERT INTO `translations` VALUES (843, 'fa', 'navigation_item_assigned_properties', 'value', 166, 'خاصیت های کاربر', NULL, NULL);
INSERT INTO `translations` VALUES (844, 'ar', 'navigation_item_assigned_properties', 'value', 166, 'خصائص الکابر', NULL, NULL);
INSERT INTO `translations` VALUES (845, 'en', 'navigation_item_assigned_properties', 'value', 171, 'Customer Properties', NULL, NULL);
INSERT INTO `translations` VALUES (846, 'fa', 'navigation_item_assigned_properties', 'value', 171, 'خاصیت های مشتری', NULL, NULL);
INSERT INTO `translations` VALUES (847, 'ar', 'navigation_item_assigned_properties', 'value', 171, 'خصائص المشتری', NULL, NULL);
INSERT INTO `translations` VALUES (848, 'en', 'navigation_item_assigned_properties', 'value', 176, 'Reserve Properties', NULL, NULL);
INSERT INTO `translations` VALUES (849, 'fa', 'navigation_item_assigned_properties', 'value', 176, 'خاصیت های سیستم رزرو', NULL, NULL);
INSERT INTO `translations` VALUES (850, 'ar', 'navigation_item_assigned_properties', 'value', 176, 'خصائص الرزرو', NULL, NULL);
INSERT INTO `translations` VALUES (851, 'en', 'navigation_item_assigned_properties', 'value', 181, 'Application Settings', NULL, NULL);
INSERT INTO `translations` VALUES (852, 'fa', 'navigation_item_assigned_properties', 'value', 181, 'تنظیمات سیستم', NULL, NULL);
INSERT INTO `translations` VALUES (853, 'ar', 'navigation_item_assigned_properties', 'value', 181, 'إعدادات ابلیکشن', NULL, NULL);
INSERT INTO `translations` VALUES (854, 'en', 'navigation_item_assigned_properties', 'value', 187, 'Pages', NULL, NULL);
INSERT INTO `translations` VALUES (855, 'fa', 'navigation_item_assigned_properties', 'value', 187, 'برگه ها', NULL, NULL);
INSERT INTO `translations` VALUES (856, 'ar', 'navigation_item_assigned_properties', 'value', 187, 'صفحات', NULL, NULL);
INSERT INTO `translations` VALUES (857, 'en', 'navigation_item_assigned_properties', 'value', 197, 'Test Page 4', NULL, NULL);
INSERT INTO `translations` VALUES (858, 'fa', 'navigation_item_assigned_properties', 'value', 197, 'صفحه تست 4', NULL, NULL);
INSERT INTO `translations` VALUES (859, 'ar', 'navigation_item_assigned_properties', 'value', 197, 'البرگ تست 4', NULL, NULL);
INSERT INTO `translations` VALUES (866, 'en', 'data_assigned_properties', 'value', 609, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (867, 'ar', 'data_assigned_properties', 'value', 609, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (868, 'en', 'data_assigned_properties', 'value', 611, 'ewrew', NULL, NULL);
INSERT INTO `translations` VALUES (869, 'ar', 'data_assigned_properties', 'value', 611, 'wqeqwewqe', NULL, NULL);
INSERT INTO `translations` VALUES (870, 'en', 'data_assigned_properties', 'value', 613, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (871, 'ar', 'data_assigned_properties', 'value', 613, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (872, 'en', 'data_assigned_properties', 'value', 615, 'wqewqe', NULL, NULL);
INSERT INTO `translations` VALUES (873, 'ar', 'data_assigned_properties', 'value', 615, 'qwewqe', NULL, NULL);
INSERT INTO `translations` VALUES (874, 'en', 'data_assigned_properties', 'value', 617, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (875, 'ar', 'data_assigned_properties', 'value', 617, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (876, 'en', 'navigation_item_assigned_properties', 'value', 202, 'Messages', NULL, NULL);
INSERT INTO `translations` VALUES (877, 'fa', 'navigation_item_assigned_properties', 'value', 202, 'پیام ها', NULL, NULL);
INSERT INTO `translations` VALUES (878, 'ar', 'navigation_item_assigned_properties', 'value', 202, 'رسائل', NULL, NULL);
INSERT INTO `translations` VALUES (879, 'en', 'navigation_item_assigned_properties', 'value', 207, 'Message Properties', NULL, NULL);
INSERT INTO `translations` VALUES (880, 'fa', 'navigation_item_assigned_properties', 'value', 207, 'خصوصیات پیام ها', NULL, NULL);
INSERT INTO `translations` VALUES (881, 'ar', 'navigation_item_assigned_properties', 'value', 207, 'خصائص الرسالة', NULL, NULL);
INSERT INTO `translations` VALUES (882, 'en', 'navigation_item_assigned_properties', 'value', 212, 'Comments', NULL, NULL);
INSERT INTO `translations` VALUES (883, 'fa', 'navigation_item_assigned_properties', 'value', 212, 'دیدگاه ها', NULL, NULL);
INSERT INTO `translations` VALUES (884, 'ar', 'navigation_item_assigned_properties', 'value', 212, 'تعليقات', NULL, NULL);
INSERT INTO `translations` VALUES (885, 'en', 'navigation_item_assigned_properties', 'value', 217, 'Comment Properties', NULL, NULL);
INSERT INTO `translations` VALUES (886, 'fa', 'navigation_item_assigned_properties', 'value', 217, 'خصوصیات دیدگاه ها', NULL, NULL);
INSERT INTO `translations` VALUES (887, 'ar', 'navigation_item_assigned_properties', 'value', 217, 'خصائص التعليق', NULL, NULL);
INSERT INTO `translations` VALUES (888, 'en', 'navigation_item_assigned_properties', 'value', 222, 'Complaints', NULL, NULL);
INSERT INTO `translations` VALUES (889, 'fa', 'navigation_item_assigned_properties', 'value', 222, 'شکایات', NULL, NULL);
INSERT INTO `translations` VALUES (890, 'ar', 'navigation_item_assigned_properties', 'value', 222, 'شكاوي', NULL, NULL);
INSERT INTO `translations` VALUES (891, 'en', 'navigation_item_assigned_properties', 'value', 227, 'Complaint Properties', NULL, NULL);
INSERT INTO `translations` VALUES (892, 'fa', 'navigation_item_assigned_properties', 'value', 227, 'خصوصیات شکایت ها', NULL, NULL);
INSERT INTO `translations` VALUES (893, 'ar', 'navigation_item_assigned_properties', 'value', 227, 'خصائص الشكوى', NULL, NULL);
INSERT INTO `translations` VALUES (894, 'en', 'navigation_item_assigned_properties', 'value', 232, 'Ratings', NULL, NULL);
INSERT INTO `translations` VALUES (895, 'fa', 'navigation_item_assigned_properties', 'value', 232, 'رتبه بندی ها', NULL, NULL);
INSERT INTO `translations` VALUES (896, 'ar', 'navigation_item_assigned_properties', 'value', 232, 'تصنيفات', NULL, NULL);
INSERT INTO `translations` VALUES (897, 'en', 'navigation_item_assigned_properties', 'value', 237, 'Rating Properties', NULL, NULL);
INSERT INTO `translations` VALUES (898, 'fa', 'navigation_item_assigned_properties', 'value', 237, 'خصوصیات رتبه بندی ها', NULL, NULL);
INSERT INTO `translations` VALUES (899, 'ar', 'navigation_item_assigned_properties', 'value', 237, 'خصائص التصنيف', NULL, NULL);
INSERT INTO `translations` VALUES (900, 'fa', 'navigation_item_assigned_properties', 'value', 249, 'صفحه تست 10', NULL, NULL);
INSERT INTO `translations` VALUES (901, 'en', 'navigation_item_assigned_properties', 'value', 249, 'test page 10', NULL, NULL);
INSERT INTO `translations` VALUES (902, 'ar', 'navigation_item_assigned_properties', 'value', 249, 'الصفحه التست 10', NULL, NULL);
INSERT INTO `translations` VALUES (903, 'en', 'document_assigned_properties', 'value', 194, '11', NULL, NULL);
INSERT INTO `translations` VALUES (904, 'ar', 'document_assigned_properties', 'value', 194, '111', NULL, NULL);
INSERT INTO `translations` VALUES (905, 'en', 'document_assigned_properties', 'value', 195, '22', NULL, NULL);
INSERT INTO `translations` VALUES (906, 'ar', 'document_assigned_properties', 'value', 195, '222', NULL, NULL);
INSERT INTO `translations` VALUES (907, 'en', 'document_assigned_properties', 'value', 196, '33', NULL, NULL);
INSERT INTO `translations` VALUES (908, 'ar', 'document_assigned_properties', 'value', 196, '333', NULL, NULL);
INSERT INTO `translations` VALUES (909, 'en', 'document_assigned_properties', 'value', 205, '11', NULL, NULL);
INSERT INTO `translations` VALUES (910, 'ar', 'document_assigned_properties', 'value', 205, '111', NULL, NULL);
INSERT INTO `translations` VALUES (911, 'en', 'document_assigned_properties', 'value', 206, '22', NULL, NULL);
INSERT INTO `translations` VALUES (912, 'ar', 'document_assigned_properties', 'value', 206, '222', NULL, NULL);
INSERT INTO `translations` VALUES (913, 'en', 'document_assigned_properties', 'value', 207, '33', NULL, NULL);
INSERT INTO `translations` VALUES (914, 'ar', 'document_assigned_properties', 'value', 207, '333', NULL, NULL);
INSERT INTO `translations` VALUES (915, 'en', 'document_assigned_properties', 'value', 216, '11', NULL, NULL);
INSERT INTO `translations` VALUES (916, 'ar', 'document_assigned_properties', 'value', 216, '111', NULL, NULL);
INSERT INTO `translations` VALUES (917, 'en', 'document_assigned_properties', 'value', 217, '22', NULL, NULL);
INSERT INTO `translations` VALUES (918, 'ar', 'document_assigned_properties', 'value', 217, '222', NULL, NULL);
INSERT INTO `translations` VALUES (919, 'en', 'document_assigned_properties', 'value', 218, '33', NULL, NULL);
INSERT INTO `translations` VALUES (920, 'ar', 'document_assigned_properties', 'value', 218, '333', NULL, NULL);
INSERT INTO `translations` VALUES (921, 'en', 'data_assigned_properties', 'value', 620, 'eeeeeeeeee', NULL, NULL);
INSERT INTO `translations` VALUES (922, 'ar', 'data_assigned_properties', 'value', 620, 'غغغغغغغغغ', NULL, NULL);
INSERT INTO `translations` VALUES (923, 'en', 'data_assigned_properties', 'value', 622, 'rrrrrrrrrrrr', NULL, NULL);
INSERT INTO `translations` VALUES (924, 'ar', 'data_assigned_properties', 'value', 622, 'سسسسسسسسسسسسسسسسس', NULL, NULL);
INSERT INTO `translations` VALUES (925, 'en', 'document_assigned_properties', 'value', 227, '11', NULL, NULL);
INSERT INTO `translations` VALUES (926, 'ar', 'document_assigned_properties', 'value', 227, '111', NULL, NULL);
INSERT INTO `translations` VALUES (927, 'en', 'document_assigned_properties', 'value', 228, '22', NULL, NULL);
INSERT INTO `translations` VALUES (928, 'ar', 'document_assigned_properties', 'value', 228, '222', NULL, NULL);
INSERT INTO `translations` VALUES (929, 'en', 'document_assigned_properties', 'value', 229, '33', NULL, NULL);
INSERT INTO `translations` VALUES (930, 'ar', 'document_assigned_properties', 'value', 229, '333', NULL, NULL);
INSERT INTO `translations` VALUES (931, 'en', 'document_assigned_properties', 'value', 238, '11', NULL, NULL);
INSERT INTO `translations` VALUES (932, 'ar', 'document_assigned_properties', 'value', 238, '111', NULL, NULL);
INSERT INTO `translations` VALUES (933, 'en', 'document_assigned_properties', 'value', 239, '22', NULL, NULL);
INSERT INTO `translations` VALUES (934, 'ar', 'document_assigned_properties', 'value', 239, '222', NULL, NULL);
INSERT INTO `translations` VALUES (935, 'en', 'document_assigned_properties', 'value', 240, '33', NULL, NULL);
INSERT INTO `translations` VALUES (936, 'ar', 'document_assigned_properties', 'value', 240, '333', NULL, NULL);
INSERT INTO `translations` VALUES (937, 'en', 'document_assigned_properties', 'value', 250, '11', NULL, NULL);
INSERT INTO `translations` VALUES (938, 'ar', 'document_assigned_properties', 'value', 250, '111', NULL, NULL);
INSERT INTO `translations` VALUES (939, 'en', 'document_assigned_properties', 'value', 251, '22', NULL, NULL);
INSERT INTO `translations` VALUES (940, 'ar', 'document_assigned_properties', 'value', 251, '222', NULL, NULL);
INSERT INTO `translations` VALUES (941, 'en', 'document_assigned_properties', 'value', 252, '33', NULL, NULL);
INSERT INTO `translations` VALUES (942, 'ar', 'document_assigned_properties', 'value', 252, '333', NULL, NULL);
INSERT INTO `translations` VALUES (943, 'en', 'document_assigned_properties', 'value', 261, '11', NULL, NULL);
INSERT INTO `translations` VALUES (944, 'ar', 'document_assigned_properties', 'value', 261, '111', NULL, NULL);
INSERT INTO `translations` VALUES (945, 'en', 'document_assigned_properties', 'value', 262, '22', NULL, NULL);
INSERT INTO `translations` VALUES (946, 'ar', 'document_assigned_properties', 'value', 262, '222', NULL, NULL);
INSERT INTO `translations` VALUES (947, 'en', 'document_assigned_properties', 'value', 263, '33', NULL, NULL);
INSERT INTO `translations` VALUES (948, 'ar', 'document_assigned_properties', 'value', 263, '333', NULL, NULL);
INSERT INTO `translations` VALUES (949, 'en', 'document_assigned_properties', 'value', 269, '11', NULL, NULL);
INSERT INTO `translations` VALUES (950, 'ar', 'document_assigned_properties', 'value', 269, '111', NULL, NULL);
INSERT INTO `translations` VALUES (951, 'en', 'document_assigned_properties', 'value', 270, '22', NULL, NULL);
INSERT INTO `translations` VALUES (952, 'ar', 'document_assigned_properties', 'value', 270, '222', NULL, NULL);
INSERT INTO `translations` VALUES (953, 'en', 'document_assigned_properties', 'value', 271, '33', NULL, NULL);
INSERT INTO `translations` VALUES (954, 'ar', 'document_assigned_properties', 'value', 271, '333', NULL, NULL);
INSERT INTO `translations` VALUES (955, 'en', 'document_assigned_properties', 'value', 276, 'qq', NULL, NULL);
INSERT INTO `translations` VALUES (956, 'ar', 'document_assigned_properties', 'value', 276, 'qqq', NULL, NULL);
INSERT INTO `translations` VALUES (957, 'en', 'document_assigned_properties', 'value', 278, 'qq', NULL, NULL);
INSERT INTO `translations` VALUES (958, 'ar', 'document_assigned_properties', 'value', 278, 'qqq', NULL, NULL);
INSERT INTO `translations` VALUES (959, 'en', 'document_assigned_properties', 'value', 279, '<p>ww</p>', NULL, NULL);
INSERT INTO `translations` VALUES (960, 'ar', 'document_assigned_properties', 'value', 279, '<p>www</p>', NULL, NULL);
INSERT INTO `translations` VALUES (961, 'en', 'document_assigned_properties', 'value', 280, '11', NULL, NULL);
INSERT INTO `translations` VALUES (962, 'ar', 'document_assigned_properties', 'value', 280, '111', NULL, NULL);
INSERT INTO `translations` VALUES (963, 'en', 'document_assigned_properties', 'value', 281, '22', NULL, NULL);
INSERT INTO `translations` VALUES (964, 'ar', 'document_assigned_properties', 'value', 281, '222', NULL, NULL);
INSERT INTO `translations` VALUES (965, 'en', 'document_assigned_properties', 'value', 282, '33', NULL, NULL);
INSERT INTO `translations` VALUES (966, 'ar', 'document_assigned_properties', 'value', 282, '333', NULL, NULL);
INSERT INTO `translations` VALUES (967, 'en', 'document_assigned_properties', 'value', 283, '<p>44</p>', NULL, NULL);
INSERT INTO `translations` VALUES (968, 'ar', 'document_assigned_properties', 'value', 283, '<p>444</p>', NULL, NULL);
INSERT INTO `translations` VALUES (969, 'en', 'document_assigned_properties', 'value', 284, '<p>55</p>', NULL, NULL);
INSERT INTO `translations` VALUES (970, 'ar', 'document_assigned_properties', 'value', 284, '<p>555</p>', NULL, NULL);
INSERT INTO `translations` VALUES (971, 'en', 'document_assigned_properties', 'value', 285, '<p>66</p>', NULL, NULL);
INSERT INTO `translations` VALUES (972, 'ar', 'document_assigned_properties', 'value', 285, '<p>666</p>', NULL, NULL);
INSERT INTO `translations` VALUES (973, 'en', 'document_assigned_properties', 'value', 286, '<p>77</p>', NULL, NULL);
INSERT INTO `translations` VALUES (974, 'ar', 'document_assigned_properties', 'value', 286, '<p>777</p>', NULL, NULL);
INSERT INTO `translations` VALUES (975, 'en', 'document_assigned_properties', 'value', 288, '11', NULL, NULL);
INSERT INTO `translations` VALUES (976, 'ar', 'document_assigned_properties', 'value', 288, '111', NULL, NULL);
INSERT INTO `translations` VALUES (977, 'en', 'document_assigned_properties', 'value', 289, '22', NULL, NULL);
INSERT INTO `translations` VALUES (978, 'ar', 'document_assigned_properties', 'value', 289, '222', NULL, NULL);
INSERT INTO `translations` VALUES (979, 'en', 'document_assigned_properties', 'value', 290, '33', NULL, NULL);
INSERT INTO `translations` VALUES (980, 'ar', 'document_assigned_properties', 'value', 290, '333', NULL, NULL);
INSERT INTO `translations` VALUES (981, 'en', 'document_assigned_properties', 'value', 291, '<p>44</p>', NULL, NULL);
INSERT INTO `translations` VALUES (982, 'ar', 'document_assigned_properties', 'value', 291, '<p>444</p>', NULL, NULL);
INSERT INTO `translations` VALUES (983, 'en', 'document_assigned_properties', 'value', 292, '<p>55</p>', NULL, NULL);
INSERT INTO `translations` VALUES (984, 'ar', 'document_assigned_properties', 'value', 292, '<p>555</p>', NULL, NULL);
INSERT INTO `translations` VALUES (985, 'en', 'document_assigned_properties', 'value', 293, '<p>66</p>', NULL, NULL);
INSERT INTO `translations` VALUES (986, 'ar', 'document_assigned_properties', 'value', 293, '<p>666</p>', NULL, NULL);
INSERT INTO `translations` VALUES (987, 'en', 'document_assigned_properties', 'value', 294, '<p>77</p>', NULL, NULL);
INSERT INTO `translations` VALUES (988, 'ar', 'document_assigned_properties', 'value', 294, '<p>777</p>', NULL, NULL);
INSERT INTO `translations` VALUES (989, 'fa', 'service_properties', 'title', 12, 'کاربرانی که نوتیفیکشن رزرو را دریافت می کنند', NULL, NULL);
INSERT INTO `translations` VALUES (990, 'en', 'service_properties', 'title', 12, 'Users who receive reservation notifications', NULL, NULL);
INSERT INTO `translations` VALUES (991, 'ar', 'service_properties', 'title', 12, 'المستخدمين الذين يتلقون إشعارات الحجز', NULL, NULL);
INSERT INTO `translations` VALUES (992, 'en', 'user_assigned_properties', 'value', 429, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (993, 'ar', 'user_assigned_properties', 'value', 429, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (994, 'en', 'user_assigned_properties', 'value', 430, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (995, 'ar', 'user_assigned_properties', 'value', 430, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (996, 'en', 'navigation_item_assigned_properties', 'value', 254, 'Permissions', NULL, NULL);
INSERT INTO `translations` VALUES (997, 'fa', 'navigation_item_assigned_properties', 'value', 254, 'سطح دسترسی', NULL, NULL);
INSERT INTO `translations` VALUES (998, 'ar', 'navigation_item_assigned_properties', 'value', 254, 'أذونات', NULL, NULL);
INSERT INTO `translations` VALUES (999, 'en', 'user_assigned_properties', 'value', 432, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1000, 'ar', 'user_assigned_properties', 'value', 432, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1001, 'en', 'user_assigned_properties', 'value', 433, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1002, 'ar', 'user_assigned_properties', 'value', 433, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1003, 'en', 'navigation_item_assigned_properties', 'value', 257, 'Home', NULL, NULL);
INSERT INTO `translations` VALUES (1004, 'fa', 'navigation_item_assigned_properties', 'value', 257, 'صفحه اصلی', NULL, NULL);
INSERT INTO `translations` VALUES (1005, 'ar', 'navigation_item_assigned_properties', 'value', 257, 'الصفحة الرئيسية', NULL, NULL);
INSERT INTO `translations` VALUES (1006, 'en', 'navigation_item_assigned_properties', 'value', 259, 'Rooms', NULL, NULL);
INSERT INTO `translations` VALUES (1007, 'fa', 'navigation_item_assigned_properties', 'value', 259, 'اتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (1008, 'ar', 'navigation_item_assigned_properties', 'value', 259, 'غرف', NULL, NULL);
INSERT INTO `translations` VALUES (1009, 'en', 'navigation_item_assigned_properties', 'value', 263, 'Gallery', NULL, NULL);
INSERT INTO `translations` VALUES (1010, 'fa', 'navigation_item_assigned_properties', 'value', 263, 'گالری تصاویر', NULL, NULL);
INSERT INTO `translations` VALUES (1011, 'ar', 'navigation_item_assigned_properties', 'value', 263, 'صالة عرض', NULL, NULL);
INSERT INTO `translations` VALUES (1012, 'en', 'navigation_item_assigned_properties', 'value', 267, 'Complaints', NULL, NULL);
INSERT INTO `translations` VALUES (1013, 'fa', 'navigation_item_assigned_properties', 'value', 267, 'ثبت شکایات', NULL, NULL);
INSERT INTO `translations` VALUES (1014, 'ar', 'navigation_item_assigned_properties', 'value', 267, 'شكاوي', NULL, NULL);
INSERT INTO `translations` VALUES (1015, 'en', 'navigation_item_assigned_properties', 'value', 275, 'Contact Us', NULL, NULL);
INSERT INTO `translations` VALUES (1016, 'fa', 'navigation_item_assigned_properties', 'value', 275, 'تماس با ما', NULL, NULL);
INSERT INTO `translations` VALUES (1017, 'ar', 'navigation_item_assigned_properties', 'value', 275, 'اتصل بنا', NULL, NULL);
INSERT INTO `translations` VALUES (1018, 'en', 'navigation_item_assigned_properties', 'value', 280, 'About Us', NULL, NULL);
INSERT INTO `translations` VALUES (1019, 'fa', 'navigation_item_assigned_properties', 'value', 280, 'درباره ما', NULL, NULL);
INSERT INTO `translations` VALUES (1020, 'ar', 'navigation_item_assigned_properties', 'value', 280, 'معلومات عنا', NULL, NULL);
INSERT INTO `translations` VALUES (1021, 'en', 'document_assigned_properties', 'value', 305, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1022, 'ar', 'document_assigned_properties', 'value', 305, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1023, 'en', 'document_assigned_properties', 'value', 306, '<p>dd</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1024, 'ar', 'document_assigned_properties', 'value', 306, '<p>ddd</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1025, 'en', 'document_assigned_properties', 'value', 307, '<p>ff</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1026, 'ar', 'document_assigned_properties', 'value', 307, '<p>fff</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1027, 'en', 'document_assigned_properties', 'value', 308, '<p>gg</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1028, 'ar', 'document_assigned_properties', 'value', 308, '<p>ggg</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1029, 'en', 'document_assigned_properties', 'value', 309, '<p>hh</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1030, 'ar', 'document_assigned_properties', 'value', 309, '<p>hhh</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1031, 'fa', 'navigation_item_assigned_properties', 'value', 285, 'نقشه ها', NULL, NULL);
INSERT INTO `translations` VALUES (1032, 'en', 'navigation_item_assigned_properties', 'value', 285, 'Maps', NULL, NULL);
INSERT INTO `translations` VALUES (1033, 'ar', 'navigation_item_assigned_properties', 'value', 285, 'النقشه ها', NULL, NULL);
INSERT INTO `translations` VALUES (1034, 'en', 'data_assigned_properties', 'value', 631, 'tt', NULL, NULL);
INSERT INTO `translations` VALUES (1035, 'ar', 'data_assigned_properties', 'value', 631, 'tt', NULL, NULL);
INSERT INTO `translations` VALUES (1036, 'en', 'data_assigned_properties', 'value', 633, 'ttt', NULL, NULL);
INSERT INTO `translations` VALUES (1037, 'ar', 'data_assigned_properties', 'value', 633, 'tttt', NULL, NULL);
INSERT INTO `translations` VALUES (1038, 'en', 'data_assigned_properties', 'value', 638, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1039, 'ar', 'data_assigned_properties', 'value', 638, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1040, 'en', 'data_assigned_properties', 'value', 640, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1041, 'ar', 'data_assigned_properties', 'value', 640, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1042, 'fa', 'data_properties', 'title', 66, 'ffff', NULL, NULL);
INSERT INTO `translations` VALUES (1043, 'en', 'data_properties', 'title', 66, 'ff', NULL, NULL);
INSERT INTO `translations` VALUES (1044, 'ar', 'data_properties', 'title', 66, 'ffff', NULL, NULL);
INSERT INTO `translations` VALUES (1045, 'en', 'document_assigned_properties', 'value', 316, 'dsfsdfdfs', NULL, NULL);
INSERT INTO `translations` VALUES (1046, 'ar', 'document_assigned_properties', 'value', 316, 'sdfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1047, 'en', 'document_assigned_properties', 'value', 319, 'dsfsdfdfs', NULL, NULL);
INSERT INTO `translations` VALUES (1048, 'ar', 'document_assigned_properties', 'value', 319, 'sdfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1049, 'en', 'document_assigned_properties', 'value', 322, 'xcvcxv', NULL, NULL);
INSERT INTO `translations` VALUES (1050, 'ar', 'document_assigned_properties', 'value', 322, 'xcvcvx', NULL, NULL);
INSERT INTO `translations` VALUES (1051, 'en', 'document_assigned_properties', 'value', 325, 'asd', NULL, NULL);
INSERT INTO `translations` VALUES (1052, 'ar', 'document_assigned_properties', 'value', 325, 'sad', NULL, NULL);
INSERT INTO `translations` VALUES (1053, 'en', 'document_assigned_properties', 'value', 329, 'vv', NULL, NULL);
INSERT INTO `translations` VALUES (1054, 'ar', 'document_assigned_properties', 'value', 329, 'vv', NULL, NULL);
INSERT INTO `translations` VALUES (1055, 'en', 'data_assigned_properties', 'value', 646, 'hgf', NULL, NULL);
INSERT INTO `translations` VALUES (1056, 'ar', 'data_assigned_properties', 'value', 646, 'fghfg', NULL, NULL);
INSERT INTO `translations` VALUES (1057, 'en', 'data_assigned_properties', 'value', 648, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1058, 'ar', 'data_assigned_properties', 'value', 648, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1059, 'en', 'data_assigned_properties', 'value', 653, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1060, 'ar', 'data_assigned_properties', 'value', 653, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1061, 'en', 'data_assigned_properties', 'value', 654, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1062, 'ar', 'data_assigned_properties', 'value', 654, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1063, 'en', 'data_assigned_properties', 'value', 655, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1064, 'ar', 'data_assigned_properties', 'value', 655, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1065, 'en', 'data_assigned_properties', 'value', 659, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1066, 'ar', 'data_assigned_properties', 'value', 659, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1067, 'en', 'data_assigned_properties', 'value', 660, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1068, 'ar', 'data_assigned_properties', 'value', 660, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1069, 'en', 'data_assigned_properties', 'value', 661, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1070, 'ar', 'data_assigned_properties', 'value', 661, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1071, 'fa', 'navigation_item_assigned_properties', 'value', 289, 'مختصات نقشه', NULL, NULL);
INSERT INTO `translations` VALUES (1072, 'en', 'navigation_item_assigned_properties', 'value', 289, 'Map Locations', NULL, NULL);
INSERT INTO `translations` VALUES (1073, 'ar', 'navigation_item_assigned_properties', 'value', 289, 'النقشه ها المختصات', NULL, NULL);
INSERT INTO `translations` VALUES (1074, 'en', 'data_assigned_properties', 'value', 669, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1075, 'ar', 'data_assigned_properties', 'value', 669, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1076, 'en', 'data_assigned_properties', 'value', 670, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1077, 'ar', 'data_assigned_properties', 'value', 670, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1078, 'en', 'data_assigned_properties', 'value', 671, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1079, 'ar', 'data_assigned_properties', 'value', 671, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1080, 'en', 'data_assigned_properties', 'value', 672, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1081, 'ar', 'data_assigned_properties', 'value', 672, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1082, 'en', 'data_assigned_properties', 'value', 669, 'test', NULL, NULL);
INSERT INTO `translations` VALUES (1083, 'ar', 'data_assigned_properties', 'value', 669, 'test', NULL, NULL);
INSERT INTO `translations` VALUES (1084, 'en', 'data_assigned_properties', 'value', 670, 'this is a test', NULL, NULL);
INSERT INTO `translations` VALUES (1085, 'ar', 'data_assigned_properties', 'value', 670, 'this is a test', NULL, NULL);
INSERT INTO `translations` VALUES (1086, 'en', 'data_assigned_properties', 'value', 671, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1087, 'ar', 'data_assigned_properties', 'value', 671, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1088, 'en', 'data_assigned_properties', 'value', 672, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1089, 'ar', 'data_assigned_properties', 'value', 672, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1090, 'en', 'data_assigned_properties', 'value', 674, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1091, 'ar', 'data_assigned_properties', 'value', 674, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1092, 'en', 'data_assigned_properties', 'value', 675, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1093, 'ar', 'data_assigned_properties', 'value', 675, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1094, 'en', 'data_assigned_properties', 'value', 677, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1095, 'ar', 'data_assigned_properties', 'value', 677, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1096, 'en', 'data_assigned_properties', 'value', 678, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1097, 'ar', 'data_assigned_properties', 'value', 678, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1098, 'en', 'document_assigned_properties', 'value', 332, 'room images', NULL, NULL);
INSERT INTO `translations` VALUES (1099, 'ar', 'document_assigned_properties', 'value', 332, 'التصاویر الاتاق ها', NULL, NULL);
INSERT INTO `translations` VALUES (1100, 'en', 'document_assigned_properties', 'value', 335, 'gallery 2', NULL, NULL);
INSERT INTO `translations` VALUES (1101, 'ar', 'document_assigned_properties', 'value', 335, 'الگالری 2', NULL, NULL);
INSERT INTO `translations` VALUES (1102, 'en', 'document_assigned_properties', 'value', 337, 'f1', NULL, NULL);
INSERT INTO `translations` VALUES (1103, 'ar', 'document_assigned_properties', 'value', 337, 'الف 1', NULL, NULL);
INSERT INTO `translations` VALUES (1104, 'en', 'document_assigned_properties', 'value', 339, 'sdfdsf', NULL, NULL);
INSERT INTO `translations` VALUES (1105, 'ar', 'document_assigned_properties', 'value', 339, 'sdfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1106, 'en', 'document_assigned_properties', 'value', 341, 'bb', NULL, NULL);
INSERT INTO `translations` VALUES (1107, 'ar', 'document_assigned_properties', 'value', 341, 'bbbb', NULL, NULL);
INSERT INTO `translations` VALUES (1108, 'en', 'document_assigned_properties', 'value', 343, 'dfg', NULL, NULL);
INSERT INTO `translations` VALUES (1109, 'ar', 'document_assigned_properties', 'value', 343, 'fdg', NULL, NULL);
INSERT INTO `translations` VALUES (1110, 'en', 'document_assigned_properties', 'value', 345, 'asd', NULL, NULL);
INSERT INTO `translations` VALUES (1111, 'ar', 'document_assigned_properties', 'value', 345, 'asd', NULL, NULL);
INSERT INTO `translations` VALUES (1112, 'en', 'document_assigned_properties', 'value', 348, 'sdf', NULL, NULL);
INSERT INTO `translations` VALUES (1113, 'ar', 'document_assigned_properties', 'value', 348, 'sdfsdfd', NULL, NULL);
INSERT INTO `translations` VALUES (1114, 'en', 'document_assigned_properties', 'value', 351, 'f1', NULL, NULL);
INSERT INTO `translations` VALUES (1115, 'ar', 'document_assigned_properties', 'value', 351, 'fffff', NULL, NULL);
INSERT INTO `translations` VALUES (1116, 'en', 'document_assigned_properties', 'value', 354, 'hgf', NULL, NULL);
INSERT INTO `translations` VALUES (1117, 'ar', 'document_assigned_properties', 'value', 354, 'fghfg', NULL, NULL);
INSERT INTO `translations` VALUES (1118, 'en', 'data_assigned_properties', 'value', 681, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1119, 'ar', 'data_assigned_properties', 'value', 681, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1120, 'en', 'data_assigned_properties', 'value', 682, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1121, 'ar', 'data_assigned_properties', 'value', 682, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1122, 'en', 'data_assigned_properties', 'value', 683, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1123, 'ar', 'data_assigned_properties', 'value', 683, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1124, 'en', 'data_assigned_properties', 'value', 689, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1125, 'ar', 'data_assigned_properties', 'value', 689, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1126, 'en', 'data_assigned_properties', 'value', 690, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1127, 'ar', 'data_assigned_properties', 'value', 690, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1128, 'en', 'data_assigned_properties', 'value', 691, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1129, 'ar', 'data_assigned_properties', 'value', 691, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1130, 'en', 'data_assigned_properties', 'value', 697, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1131, 'ar', 'data_assigned_properties', 'value', 697, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1132, 'en', 'data_assigned_properties', 'value', 698, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1133, 'ar', 'data_assigned_properties', 'value', 698, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1134, 'en', 'data_assigned_properties', 'value', 699, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1135, 'ar', 'data_assigned_properties', 'value', 699, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1136, 'en', 'communication_assigned_properties', 'value', 17, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1137, 'ar', 'communication_assigned_properties', 'value', 17, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1138, 'en', 'communication_assigned_properties', 'value', 20, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1139, 'ar', 'communication_assigned_properties', 'value', 20, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1140, 'en', 'communication_assigned_properties', 'value', 23, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1141, 'ar', 'communication_assigned_properties', 'value', 23, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1142, 'en', 'communication_assigned_properties', 'value', 26, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1143, 'ar', 'communication_assigned_properties', 'value', 26, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1144, 'en', 'communication_assigned_properties', 'value', 29, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1145, 'ar', 'communication_assigned_properties', 'value', 29, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1146, 'en', 'data_assigned_properties', 'value', 706, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1147, 'ar', 'data_assigned_properties', 'value', 706, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1148, 'en', 'data_assigned_properties', 'value', 707, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1149, 'ar', 'data_assigned_properties', 'value', 707, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1150, 'en', 'data_assigned_properties', 'value', 708, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1151, 'ar', 'data_assigned_properties', 'value', 708, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1152, 'en', 'data_assigned_properties', 'value', 715, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1153, 'ar', 'data_assigned_properties', 'value', 715, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1154, 'en', 'data_assigned_properties', 'value', 716, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1155, 'ar', 'data_assigned_properties', 'value', 716, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1156, 'en', 'data_assigned_properties', 'value', 717, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1157, 'ar', 'data_assigned_properties', 'value', 717, 'fgh', NULL, NULL);
INSERT INTO `translations` VALUES (1158, 'en', 'data_assigned_properties', 'value', 725, '234234234', NULL, NULL);
INSERT INTO `translations` VALUES (1159, 'ar', 'data_assigned_properties', 'value', 725, '2342342344', NULL, NULL);
INSERT INTO `translations` VALUES (1160, 'en', 'data_assigned_properties', 'value', 727, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1161, 'ar', 'data_assigned_properties', 'value', 727, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1162, 'en', 'data_assigned_properties', 'value', 733, '234234234', NULL, NULL);
INSERT INTO `translations` VALUES (1163, 'ar', 'data_assigned_properties', 'value', 733, '2342342344', NULL, NULL);
INSERT INTO `translations` VALUES (1164, 'en', 'data_assigned_properties', 'value', 735, 'asdasd', NULL, NULL);
INSERT INTO `translations` VALUES (1165, 'ar', 'data_assigned_properties', 'value', 735, 'asdasda', NULL, NULL);
INSERT INTO `translations` VALUES (1166, 'en', 'data_assigned_properties', 'value', 741, '234234234', NULL, NULL);
INSERT INTO `translations` VALUES (1167, 'ar', 'data_assigned_properties', 'value', 741, '2342342344', NULL, NULL);
INSERT INTO `translations` VALUES (1168, 'en', 'data_assigned_properties', 'value', 743, 'asdasd', NULL, NULL);
INSERT INTO `translations` VALUES (1169, 'ar', 'data_assigned_properties', 'value', 743, 'asdasda', NULL, NULL);
INSERT INTO `translations` VALUES (1170, 'en', 'data_assigned_properties', 'value', 749, '234234234', NULL, NULL);
INSERT INTO `translations` VALUES (1171, 'ar', 'data_assigned_properties', 'value', 749, '2342342344', NULL, NULL);
INSERT INTO `translations` VALUES (1172, 'en', 'data_assigned_properties', 'value', 751, 'asdasd', NULL, NULL);
INSERT INTO `translations` VALUES (1173, 'ar', 'data_assigned_properties', 'value', 751, 'asdasda', NULL, NULL);
INSERT INTO `translations` VALUES (1174, 'en', 'data_assigned_properties', 'value', 757, '234234234', NULL, NULL);
INSERT INTO `translations` VALUES (1175, 'ar', 'data_assigned_properties', 'value', 757, '2342342344', NULL, NULL);
INSERT INTO `translations` VALUES (1176, 'en', 'data_assigned_properties', 'value', 759, '45645645656', NULL, NULL);
INSERT INTO `translations` VALUES (1177, 'ar', 'data_assigned_properties', 'value', 759, 'asdasda', NULL, NULL);
INSERT INTO `translations` VALUES (1178, 'en', 'data_assigned_properties', 'value', 765, '234234234', NULL, NULL);
INSERT INTO `translations` VALUES (1179, 'ar', 'data_assigned_properties', 'value', 765, '2342342344', NULL, NULL);
INSERT INTO `translations` VALUES (1180, 'en', 'data_assigned_properties', 'value', 767, '45645645656', NULL, NULL);
INSERT INTO `translations` VALUES (1181, 'ar', 'data_assigned_properties', 'value', 767, 'asdasda', NULL, NULL);
INSERT INTO `translations` VALUES (1182, 'en', 'data_assigned_properties', 'value', 773, 'sdfsdfsdfdfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1183, 'ar', 'data_assigned_properties', 'value', 773, 'sdfcvxvxcvxcv', NULL, NULL);
INSERT INTO `translations` VALUES (1184, 'en', 'data_assigned_properties', 'value', 775, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1185, 'ar', 'data_assigned_properties', 'value', 775, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1186, 'en', 'data_assigned_properties', 'value', 781, 'sdfsdfsdfdfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1187, 'ar', 'data_assigned_properties', 'value', 781, 'sdfcvxvxcvxcv', NULL, NULL);
INSERT INTO `translations` VALUES (1188, 'en', 'data_assigned_properties', 'value', 783, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1189, 'ar', 'data_assigned_properties', 'value', 783, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1190, 'en', 'data_assigned_properties', 'value', 789, 'sdfsdfsdfdfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1191, 'ar', 'data_assigned_properties', 'value', 789, 'sdfcvxvxcvxcv', NULL, NULL);
INSERT INTO `translations` VALUES (1192, 'en', 'data_assigned_properties', 'value', 791, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1193, 'ar', 'data_assigned_properties', 'value', 791, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1203, 'fa', 'data_properties', 'title', 78, 'محتوا', NULL, NULL);
INSERT INTO `translations` VALUES (1204, 'en', 'data_properties', 'title', 78, 'content', NULL, NULL);
INSERT INTO `translations` VALUES (1205, 'ar', 'data_properties', 'title', 78, 'المحتوا', NULL, NULL);
INSERT INTO `translations` VALUES (1209, 'fa', 'data_properties', 'title', 79, 'قققققققققققققققققققققق', NULL, NULL);
INSERT INTO `translations` VALUES (1210, 'en', 'data_properties', 'title', 79, '3434343434', NULL, NULL);
INSERT INTO `translations` VALUES (1211, 'ar', 'data_properties', 'title', 79, '3434343434343', NULL, NULL);
INSERT INTO `translations` VALUES (1212, 'en', 'user_assigned_properties', 'value', 434, 'asdsad', NULL, NULL);
INSERT INTO `translations` VALUES (1213, 'ar', 'user_assigned_properties', 'value', 434, 'asdasd', NULL, NULL);
INSERT INTO `translations` VALUES (1214, 'en', 'user_assigned_properties', 'value', 435, 'asd', NULL, NULL);
INSERT INTO `translations` VALUES (1215, 'ar', 'user_assigned_properties', 'value', 435, 'asds', NULL, NULL);
INSERT INTO `translations` VALUES (1216, 'fa', 'user_properties', 'title', 10, 'asdsad', NULL, NULL);
INSERT INTO `translations` VALUES (1217, 'en', 'user_properties', 'title', 10, 'asdsad', NULL, NULL);
INSERT INTO `translations` VALUES (1218, 'ar', 'user_properties', 'title', 10, 'asdasd', NULL, NULL);
INSERT INTO `translations` VALUES (1219, 'en', 'document_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1220, 'ar', 'document_assigned_properties', 'value', 397, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1221, 'en', 'data_assigned_properties', 'value', 797, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (1222, 'ar', 'data_assigned_properties', 'value', 797, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (1223, 'en', 'data_assigned_properties', 'value', 799, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1224, 'ar', 'data_assigned_properties', 'value', 799, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1225, 'en', 'data_assigned_properties', 'value', 803, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1226, 'ar', 'data_assigned_properties', 'value', 803, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1227, 'en', 'data_assigned_properties', 'value', 806, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (1228, 'ar', 'data_assigned_properties', 'value', 806, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (1229, 'en', 'data_assigned_properties', 'value', 808, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1230, 'ar', 'data_assigned_properties', 'value', 808, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1231, 'en', 'data_assigned_properties', 'value', 812, '<p>للللل</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1232, 'ar', 'data_assigned_properties', 'value', 812, '<p>لللللل</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1233, 'en', 'data_assigned_properties', 'value', 815, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (1234, 'ar', 'data_assigned_properties', 'value', 815, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (1235, 'en', 'data_assigned_properties', 'value', 817, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1236, 'ar', 'data_assigned_properties', 'value', 817, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1237, 'en', 'data_assigned_properties', 'value', 821, '<p>طرطزرط</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1238, 'ar', 'data_assigned_properties', 'value', 821, '<p>طزرطزرطزر</p>', NULL, NULL);
INSERT INTO `translations` VALUES (1239, 'en', 'data_assigned_properties', 'value', 824, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (1240, 'ar', 'data_assigned_properties', 'value', 824, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (1241, 'en', 'data_assigned_properties', 'value', 826, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1242, 'ar', 'data_assigned_properties', 'value', 826, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1243, 'en', 'data_assigned_properties', 'value', 830, '<p>طرطزرط<br></p>', NULL, NULL);
INSERT INTO `translations` VALUES (1244, 'ar', 'data_assigned_properties', 'value', 830, '<p>طزرطزرطزر<br></p>', NULL, NULL);
INSERT INTO `translations` VALUES (1245, 'en', 'data_assigned_properties', 'value', 833, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (1246, 'ar', 'data_assigned_properties', 'value', 833, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (1247, 'en', 'data_assigned_properties', 'value', 835, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1248, 'ar', 'data_assigned_properties', 'value', 835, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1249, 'en', 'data_assigned_properties', 'value', 839, '345345', NULL, NULL);
INSERT INTO `translations` VALUES (1250, 'ar', 'data_assigned_properties', 'value', 839, '345345344535', NULL, NULL);
INSERT INTO `translations` VALUES (1251, 'en', 'document_assigned_properties', 'value', 402, 'sdfdsfsdf', NULL, NULL);
INSERT INTO `translations` VALUES (1252, 'ar', 'document_assigned_properties', 'value', 402, 'sdfsdffsdfsdfsdfdf', NULL, NULL);
INSERT INTO `translations` VALUES (1253, 'en', 'document_assigned_properties', 'value', 403, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1254, 'ar', 'document_assigned_properties', 'value', 403, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1255, 'en', 'data_assigned_properties', 'value', 842, '65 meter four-person suite type B', NULL, NULL);
INSERT INTO `translations` VALUES (1256, 'ar', 'data_assigned_properties', 'value', 842, 'جناح 65 متر من أربعة أشخاص من النوع B', NULL, NULL);
INSERT INTO `translations` VALUES (1257, 'en', 'data_assigned_properties', 'value', 844, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1258, 'ar', 'data_assigned_properties', 'value', 844, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1259, 'en', 'data_assigned_properties', 'value', 848, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1260, 'ar', 'data_assigned_properties', 'value', 848, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1261, 'en', 'user_assigned_properties', 'value', 437, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1262, 'ar', 'user_assigned_properties', 'value', 437, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1263, 'en', 'user_assigned_properties', 'value', 438, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1264, 'ar', 'user_assigned_properties', 'value', 438, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1265, 'en', 'user_assigned_properties', 'value', 439, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1266, 'ar', 'user_assigned_properties', 'value', 439, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1267, 'en', 'user_assigned_properties', 'value', 440, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1268, 'ar', 'user_assigned_properties', 'value', 440, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1269, 'en', 'user_assigned_properties', 'value', 441, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1270, 'ar', 'user_assigned_properties', 'value', 441, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1271, 'en', 'document_assigned_properties', 'value', 406, 'hh', NULL, NULL);
INSERT INTO `translations` VALUES (1272, 'ar', 'document_assigned_properties', 'value', 406, 'hhh', NULL, NULL);
INSERT INTO `translations` VALUES (1273, 'en', 'user_assigned_properties', 'value', 442, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1274, 'ar', 'user_assigned_properties', 'value', 442, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1275, 'en', 'user_assigned_properties', 'value', 443, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1276, 'ar', 'user_assigned_properties', 'value', 443, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1277, 'en', 'user_assigned_properties', 'value', 446, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (1278, 'ar', 'user_assigned_properties', 'value', 446, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user_assigned_properties
-- ----------------------------
DROP TABLE IF EXISTS `user_assigned_properties`;
CREATE TABLE `user_assigned_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `property` int(11) NOT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 448 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_assigned_properties
-- ----------------------------
INSERT INTO `user_assigned_properties` VALUES (2, 6, 5, 'رضا علی نیا', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (3, 7, 5, 'علی رضایی', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (4, 13, 5, 'احمدی', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (5, 14, 5, 'حسنی', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (6, 15, 5, 'رضایی زاده', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (7, 16, 5, 'کریم', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (12, 22, 1, 'ali', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (13, 22, 2, 'aaaa', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (14, 22, 3, '2222', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (15, 22, 4, '2222222', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (21, 9, 1, 'رضا', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (22, 9, 2, 'انصاری', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (23, 9, 3, '2708354108', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (24, 9, 4, '+981342537999', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (25, 9, 6, '+989362547895', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (26, 10, 1, 'حمید', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (27, 10, 2, 'رجبی', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (28, 10, 3, '2708354108', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (29, 10, 4, '+981342222062', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (30, 10, 6, '+989384845689', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (31, 11, 1, 'علیرضا', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (32, 11, 2, 'اسدی', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (33, 11, 3, '2708354108', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (34, 11, 4, '+981122447788', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (35, 11, 6, '+989112547895', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (36, 12, 1, 'احمد', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (37, 12, 2, 'علی نیا', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (38, 12, 3, '2708354108', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (39, 12, 4, '+981524562541', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (40, 12, 6, '+989124578932', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (66, 34, 1, 'z', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (67, 34, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (68, 34, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (69, 34, 4, 'zzz', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (70, 34, 6, 'zzzz', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (71, 35, 1, 'eeee', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (72, 35, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (73, 35, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (74, 35, 4, 'eee', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (75, 35, 6, 'eee', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (76, 36, 1, '111', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (77, 36, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (78, 36, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (79, 36, 4, '44444', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (80, 36, 6, '111', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (81, 37, 1, 'd', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (82, 37, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (83, 37, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (84, 37, 4, 'd', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (85, 37, 6, 'd', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (86, 38, 1, 'q', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (87, 38, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (88, 38, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (89, 38, 4, 'q', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (90, 38, 6, 'q', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (91, 39, 1, 'h', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (92, 39, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (93, 39, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (94, 39, 4, 'h', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (95, 39, 6, 'h', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (96, 40, 1, 'g', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (97, 40, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (98, 40, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (99, 40, 4, 'g', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (100, 40, 6, 'ggg', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (101, 41, 1, 'm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (102, 41, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (103, 41, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (104, 41, 4, 'm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (105, 41, 6, 'm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (106, 42, 1, 'dfg', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (107, 42, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (108, 42, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (109, 42, 4, 'fdg', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (110, 42, 6, 'dfg', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (111, 43, 1, 'vvvvvvvvvv', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (112, 43, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (113, 43, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (114, 43, 4, 'vvvvvv', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (115, 43, 6, 'vvvvvvvv', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (116, 44, 1, 'n', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (117, 44, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (118, 44, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (119, 44, 4, 'nnnnnn', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (120, 44, 6, 'n', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (121, 45, 1, '414', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (122, 45, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (123, 45, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (124, 45, 4, '4141', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (125, 45, 6, '41', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (126, 46, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (127, 46, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (128, 46, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (129, 46, 4, 'nnnn', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (130, 46, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (131, 47, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (132, 47, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (133, 47, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (134, 47, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (135, 47, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (136, 48, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (137, 48, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (138, 48, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (139, 48, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (140, 48, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (141, 49, 1, 'bnmnbm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (142, 49, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (143, 49, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (144, 49, 4, 'bnmnbm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (145, 49, 6, 'nbmnb', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (146, 50, 1, 'as', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (147, 50, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (148, 50, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (149, 50, 4, 'as', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (150, 50, 6, 'as', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (151, 51, 1, 'i', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (152, 51, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (153, 51, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (154, 51, 4, 'i', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (155, 51, 6, 'i', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (156, 52, 1, 'fhgfh', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (157, 52, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (158, 52, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (159, 52, 4, 'fghfghgfh', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (160, 52, 6, 'fghgfhgf', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (161, 53, 1, 'صثصث', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (162, 53, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (163, 53, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (164, 53, 4, 'صثص', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (165, 53, 6, 'ثصثصثصث', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (166, 54, 1, 'ertretetrtr', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (167, 54, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (168, 54, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (169, 54, 4, 'erertert', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (170, 54, 6, 'retertert', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (171, 55, 1, 'mmmmmmmmm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (172, 55, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (173, 55, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (174, 55, 4, 'mmmmmmmm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (175, 55, 6, 'mmmmmmmm', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (176, 56, 1, 'n', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (177, 56, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (178, 56, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (179, 56, 4, 'n', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (180, 56, 6, 'n', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (181, 57, 1, 'xcvxcvvx', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (182, 57, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (183, 57, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (184, 57, 4, 'xcvxcv', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (185, 57, 6, 'xcvxcv', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (186, 58, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (187, 58, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (188, 58, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (189, 58, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (190, 58, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (191, 59, 1, 'werwer', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (192, 59, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (193, 59, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (194, 59, 4, 'werwer', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (195, 59, 6, 'werwer', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (196, 60, 1, 'aaaa', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (197, 60, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (198, 60, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (199, 60, 4, 'aa', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (200, 60, 6, 'aaa', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (201, 61, 1, 'bb', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (202, 61, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (203, 61, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (204, 61, 4, 'bb', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (205, 61, 6, 'bb', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (206, 62, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (207, 62, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (208, 62, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (209, 62, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (210, 62, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (211, 63, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (212, 63, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (213, 63, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (214, 63, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (215, 63, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (216, 64, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (217, 64, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (218, 64, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (219, 64, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (220, 64, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (221, 65, 1, '234234324', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (222, 65, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (223, 65, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (224, 65, 4, '234234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (225, 65, 6, '23434', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (226, 66, 1, 'etreterttt', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (227, 66, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (228, 66, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (229, 66, 4, 'retertert', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (230, 66, 6, 'retertert', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (231, 67, 1, 'retertetreterttt', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (232, 67, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (233, 67, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (234, 67, 4, 'retertert', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (235, 67, 6, 'retertert', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (236, 68, 1, 'w', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (237, 68, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (238, 68, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (239, 68, 4, 'wwwwww', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (240, 68, 6, 'w', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (241, 69, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (242, 69, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (243, 69, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (244, 69, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (245, 69, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (246, 70, 1, 'werwer', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (247, 70, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (248, 70, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (249, 70, 4, 'wer', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (250, 70, 6, 'wer', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (251, 71, 1, 'cccccccccccc', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (252, 71, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (253, 71, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (254, 71, 4, 'cccccc', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (255, 71, 6, 'ccccccccc', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (256, 72, 1, 'xc', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (257, 72, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (258, 72, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (259, 72, 4, 'xc', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (260, 72, 6, 'xc', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (261, 73, 1, 'fsdfsd', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (262, 73, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (263, 73, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (264, 73, 4, 'sdf', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (265, 73, 6, 'sdf', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (266, 74, 1, '3', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (267, 74, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (268, 74, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (269, 74, 4, '3', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (270, 74, 6, '3', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (271, 75, 1, 'dsfdsf', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (272, 75, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (273, 75, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (274, 75, 4, 'dsfdsf', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (275, 75, 6, 'dsfsdf', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (276, 76, 1, '234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (277, 76, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (278, 76, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (279, 76, 4, '234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (280, 76, 6, '324234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (281, 77, 1, '234324', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (282, 77, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (283, 77, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (284, 77, 4, '234324', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (285, 77, 6, '234243', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (286, 78, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (287, 78, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (288, 78, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (289, 78, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (290, 78, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (291, 79, 1, '234234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (292, 79, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (293, 79, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (294, 79, 4, '234234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (295, 79, 6, '234234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (296, 80, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (297, 80, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (298, 80, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (299, 80, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (300, 80, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (301, 81, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (302, 81, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (303, 81, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (304, 81, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (305, 81, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (306, 82, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (307, 82, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (308, 82, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (309, 82, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (310, 82, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (311, 83, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (312, 83, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (313, 83, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (314, 83, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (315, 83, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (316, 84, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (317, 84, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (318, 84, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (319, 84, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (320, 84, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (321, 85, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (322, 85, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (323, 85, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (324, 85, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (325, 85, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (326, 86, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (327, 86, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (328, 86, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (329, 86, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (330, 86, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (331, 87, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (332, 87, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (333, 87, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (334, 87, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (335, 87, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (336, 88, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (337, 88, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (338, 88, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (339, 88, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (340, 88, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (341, 89, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (342, 89, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (343, 89, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (344, 89, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (345, 89, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (346, 90, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (347, 90, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (348, 90, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (349, 90, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (350, 90, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (351, 91, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (352, 91, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (353, 91, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (354, 91, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (355, 91, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (356, 92, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (357, 92, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (358, 92, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (359, 92, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (360, 92, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (361, 93, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (362, 93, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (363, 93, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (364, 93, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (365, 93, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (366, 94, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (367, 94, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (368, 94, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (369, 94, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (370, 94, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (371, 95, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (372, 95, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (373, 95, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (374, 95, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (375, 95, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (376, 96, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (377, 96, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (378, 96, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (379, 96, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (380, 96, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (381, 97, 1, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (382, 97, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (383, 97, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (384, 97, 4, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (385, 97, 6, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (386, 98, 6, '936541245', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (387, 99, 6, '936541245', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (388, 100, 1, '1321', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (389, 100, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (390, 100, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (391, 100, 4, '321321', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (392, 100, 6, '321', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (393, 101, 1, 'k', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (394, 101, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (395, 101, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (396, 101, 4, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (397, 101, 6, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (398, 102, 1, 'k', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (399, 102, 2, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (400, 102, 3, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (401, 102, 4, '01342547909', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (402, 102, 6, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (407, 103, 5, 'کامران', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (408, 103, 8, 'صابری', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (414, 104, 1, 'علیرضا', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (415, 104, 2, 'ثقفی', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (416, 104, 3, '1425', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (417, 104, 4, '99999', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (418, 104, 6, '11111', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (419, 105, 6, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (421, 6, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (422, 7, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (423, 13, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (424, 14, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (425, 15, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (426, 16, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (427, 22, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (428, 103, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (429, 1, 5, 'کامران صابری فرد', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (430, 1, 8, '', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (431, 1, 9, '09365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (432, 106, 5, 'kami', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (433, 106, 8, 'saberi', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (434, 109, 5, 'asdda', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (435, 109, 8, 'asdsa', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (436, 109, 9, '43424324234', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (442, 8, 1, 'کامران', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (443, 8, 2, 'صابری', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (444, 8, 3, '2708354108', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (445, 8, 4, '+981342547909', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (446, 8, 6, '+989365982333', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (447, 113, 6, '936541245', NULL, NULL);

-- ----------------------------
-- Table structure for user_assigned_property_values
-- ----------------------------
DROP TABLE IF EXISTS `user_assigned_property_values`;
CREATE TABLE `user_assigned_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `assigned_property` int(255) UNSIGNED NULL DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_assigned_property_values
-- ----------------------------
INSERT INTO `user_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (3, 469, '+98-911-254-6582', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (4, 469, '11111111111111', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (5, 470, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (6, 470, '222222222222222', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (7, 496, '+98-911-254-6582', NULL, NULL);
INSERT INTO `user_assigned_property_values` VALUES (8, 497, '+98-13-333-55264~8', NULL, NULL);

-- ----------------------------
-- Table structure for user_properties
-- ----------------------------
DROP TABLE IF EXISTS `user_properties`;
CREATE TABLE `user_properties`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `default_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `input_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `level` int(11) NOT NULL,
  `type` int(10) UNSIGNED NOT NULL,
  `is_setting` tinyint(4) NOT NULL DEFAULT 0,
  `should_be_validated` tinyint(255) NOT NULL DEFAULT 0,
  `validation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `is_key` tinyint(255) NOT NULL DEFAULT 0,
  `is_fillable` tinyint(255) NOT NULL DEFAULT 0,
  `fillation_rules` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'direct',
  `have_child` tinyint(255) NULL DEFAULT 0,
  `can_be_filled` tinyint(255) NULL DEFAULT 1,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_properties
-- ----------------------------
INSERT INTO `user_properties` VALUES (1, 'name', '-', 'text', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, NULL);
INSERT INTO `user_properties` VALUES (2, 'last-name', '-', 'text', 1, 2, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, '2019-05-11 23:08:22');
INSERT INTO `user_properties` VALUES (3, 'ssn', '-', 'number', 1, 2, 0, 0, 'required|digits:10|numeric', 0, 0, 'direct', 0, 1, 0, NULL, '2019-05-11 23:08:55');
INSERT INTO `user_properties` VALUES (4, 'phone', '-', 'phone', 1, 2, 0, 0, 'required|numeric|digits_between:10,13', 0, 0, 'direct', 0, 1, 0, NULL, '2019-05-11 23:09:21');
INSERT INTO `user_properties` VALUES (5, 'name', '-', 'text', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, NULL, '2019-05-11 23:10:43');
INSERT INTO `user_properties` VALUES (6, 'mobile', '-', 'phone', 1, 2, 0, 0, 'required|numeric|digits_between:10,13', 0, 0, 'direct', 0, 1, 0, NULL, '2019-05-11 23:09:59');
INSERT INTO `user_properties` VALUES (8, 'last-name', '-', 'text', 1, 1, 0, 0, '', 0, 0, 'direct', 0, 1, 0, '2019-05-11 23:11:25', '2019-05-11 23:11:25');
INSERT INTO `user_properties` VALUES (9, 'mobile', '', 'phone', 1, 1, 0, 0, 'required|numeric|digits_between:10,13', 0, 0, 'direct', 0, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for user_property_values
-- ----------------------------
DROP TABLE IF EXISTS `user_property_values`;
CREATE TABLE `user_property_values`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `property` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `can_have_item` tinyint(255) NULL DEFAULT 2,
  `can_have_child` tinyint(255) NULL DEFAULT 0,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'user', 2, 0, 0, NULL, NULL);
INSERT INTO `user_types` VALUES (2, 'customer', 2, 0, 0, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 114 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'kamisaberi@yahoo.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', 'qAlomMNBr8ypAClPhTnIQCyAUl8KBnDz7DrlM6zlQ6koeifn8VdXVzxB5d3L', NULL, NULL);
INSERT INTO `users` VALUES (6, 1, 'siamakweb@yahoo.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (7, 1, 'ali@a.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (8, 2, 'a@d.ir', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (9, 2, 'h@r.io', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (10, 2, 'ali@reza.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (11, 2, 're@wa.io', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (12, 2, 'tt@aa.bb', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (13, 1, 'fars@test.tk', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
INSERT INTO `users` VALUES (14, 1, 'kami@yahoo.com', NULL, '$2y$10$gvClOPSwERLf7qligZ7cD.oJid8ePgNV2PT1ZGXdva48jxh0Ljui2', '6unzYhDlNrJ5Yzjq6zDPKaHrB7sIioE0Sb8LF8W7Gf4lLwNQq7KWfrWg96Hb', '2019-01-28 19:49:57', '2019-01-28 19:49:57');
INSERT INTO `users` VALUES (15, 1, 'k@a.com', NULL, '$2y$10$1KuYtbsWd52pLGPrlgg4duxK5JmWEoqBaN/8JUTmntHFtWl3DuZlK', 'nwP4tNFv0dttNgQ5TB9rATVAghlQYmWYPoZhc5LVwJKXHehG8YIiV1puUOmB', '2019-01-28 20:01:36', '2019-01-28 20:01:36');
INSERT INTO `users` VALUES (16, 1, 'k@a1.com', NULL, '$2y$10$pEOnUfAG4Se1PvXSYeE9keUrN9sWPDCkKAGIEfXkIUk.BpOuvGl6q', NULL, '2019-01-28 20:03:06', '2019-01-28 20:03:06');
INSERT INTO `users` VALUES (22, 1, 'f11@a.com', NULL, '$2y$10$PmRqn/2Ga2WZCYcS9dguG./4ZGQSLtdp6snLdlVT/QBjlOhpW3FlW', 'mA2ao2rBSTrh0cL02n7S4gwl8ViLjk017AY7FwZxrd83PnoVY7sRI39zBKYk', '2019-01-30 11:12:00', '2019-01-30 11:12:00');
INSERT INTO `users` VALUES (23, 2, 'kami@yahoo.ca', NULL, '$2y$10$dr6JasC7R5BFbgM.ILZATOUcg07bJXVH0ubre/.lcb5BR97euLkHi', NULL, '2019-04-12 17:48:07', '2019-04-12 17:48:07');
INSERT INTO `users` VALUES (100, 2, 'ee@sss', NULL, '$2y$10$JcCjzscZM540LHGXrNLTNuO2EYBTzGmKivvYdV7tTepe7GtTW/yzO', NULL, '2019-04-26 04:00:32', '2019-04-26 04:00:32');
INSERT INTO `users` VALUES (101, 2, 'k@y.com', NULL, '$2y$10$89zcMKvoAYUByGbzNz6dZuE1g9eW06OJRm3.7DHYipufBMDeku46W', NULL, '2019-04-26 04:52:16', '2019-04-26 04:52:16');
INSERT INTO `users` VALUES (102, 2, 'k@ya.com', NULL, '$2y$10$t0hIbIplxqDX9uO2fAJQm.Vy7ZD7qhk7r4aIVUySc4vAQCnytwlGO', 'Dp8JWLTVnX58bkOK7diTwZjoXrIRfAvDwwvegROGQ9tbBCUnyIDaXJk2NznD', '2019-05-06 17:09:10', '2019-05-06 17:09:10');
INSERT INTO `users` VALUES (103, 1, 'kami1312324@yahoo.com', NULL, '$2y$10$XMbw1nOjT.VGRYyCKcrA9eCaXdqEQ/LcJ7yA2gphpQzaqrRCVKvYq', NULL, '2019-05-12 10:52:47', '2019-05-12 11:59:58');
INSERT INTO `users` VALUES (104, 2, 'ss@ya.com', NULL, '$2y$10$m3FK6OyEg4pKI9WsD3NKJeh7kgY6z/124sjEKlI1vgzzjVLtLq3pq', NULL, '2019-05-12 12:36:48', '2019-05-12 12:36:48');
INSERT INTO `users` VALUES (105, 2, 'kami@ee.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', 'dgWL3ThJpiU0slR6cCUwtBRIVqsky8UdL3mp6m9eMAiLoWgJR9qZv04LCGGz', '2019-05-14 01:59:03', '2019-05-14 01:59:03');
INSERT INTO `users` VALUES (106, 1, 'k@wwwwwwwwww.com', NULL, '$2y$10$3otx/5uQsbc7NYtEUJJUSu./imoOUvtVuilC5fSt2bWS1FouJmYiG', NULL, '2019-06-01 08:02:47', '2019-06-01 08:02:47');
INSERT INTO `users` VALUES (107, 2, 'qwe@asddssads.com', NULL, '$2y$10$2n6cosali8yRC0EvQOpbg.pcpRGhcyCDJKRfJ32AVmWWYRJLvy09C', NULL, '2019-07-05 19:56:48', '2019-07-05 19:56:48');
INSERT INTO `users` VALUES (108, 2, 'k@t.com', NULL, '$2y$10$CoXjWnzWPpSuZ3pEkwwgzu/GIgFnWuJdfmJGhd7AsTPFzkP9N/vNK', NULL, '2019-07-06 07:55:26', '2019-07-06 07:55:26');
INSERT INTO `users` VALUES (109, 1, 'kamisaberi@gmail.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', '5w2emdHFbDLAheNcGMjjfvQ9CyIN8U2qYroAeL6rdOpNqSsPw8PzGZPsi3hM', '2019-07-07 23:48:31', '2019-07-07 23:48:31');
INSERT INTO `users` VALUES (110, 2, 'ewrwerefd@dfdf', NULL, '$2y$10$cCTpiUuyZXEqWIjh/01TXuv0ns1Oz3CEiSxVct2FehGSxSE5siF8i', NULL, '2019-07-13 00:17:52', '2019-07-13 00:17:52');
INSERT INTO `users` VALUES (111, 2, '43534534@t45345345', NULL, '$2y$10$VIGlS0eXetgJT4bzO0.Sq.oqVFR9G2TJqh8puKKKEPLcql1HmQUVm', NULL, '2019-07-13 21:33:30', '2019-07-13 21:33:30');
INSERT INTO `users` VALUES (112, 2, 'ertert', NULL, '$2y$10$5DhQPWi7E/VTEVMw73hsA.oy4BmJw7J0fgjtVFvG.HmC231eQ1jFu', NULL, '2019-07-13 22:17:47', '2019-07-13 22:17:47');
INSERT INTO `users` VALUES (113, 2, 'k1@ya.com', NULL, '$2y$10$mVCj6zSn23ANboGtZpZEneJU1VYsRST5wJvlRWib8F0S0zO/ywDru', 'qwUFiEhVjPMynU45WyaEbssQfZbwp4eGtFQP7HgZV5gBUJu0ItIZ292VkVyM', '2019-07-14 00:40:44', '2019-07-14 00:40:44');

-- ----------------------------
-- Table structure for widget_part_types
-- ----------------------------
DROP TABLE IF EXISTS `widget_part_types`;
CREATE TABLE `widget_part_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of widget_part_types
-- ----------------------------
INSERT INTO `widget_part_types` VALUES (1, 'header', NULL, NULL);
INSERT INTO `widget_part_types` VALUES (2, 'main', NULL, NULL);
INSERT INTO `widget_part_types` VALUES (3, 'footer', NULL, NULL);

-- ----------------------------
-- Table structure for widget_parts
-- ----------------------------
DROP TABLE IF EXISTS `widget_parts`;
CREATE TABLE `widget_parts`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `widget` int(255) UNSIGNED NULL DEFAULT NULL,
  `widget_part_type` int(255) UNSIGNED NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of widget_parts
-- ----------------------------
INSERT INTO `widget_parts` VALUES (1, 1, 2, 'widgets.data.room', NULL, NULL);
INSERT INTO `widget_parts` VALUES (3, 2, 2, 'widgets.users.user', NULL, NULL);
INSERT INTO `widget_parts` VALUES (4, 3, 2, 'widgets.users.customer', NULL, NULL);
INSERT INTO `widget_parts` VALUES (5, 4, 2, 'widgets.data.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (6, 5, 2, 'widgets.documents.gallery', NULL, NULL);
INSERT INTO `widget_parts` VALUES (7, 6, 2, 'widgets.documents.document', NULL, NULL);
INSERT INTO `widget_parts` VALUES (8, 7, 2, 'widgets.documents.document', NULL, NULL);
INSERT INTO `widget_parts` VALUES (9, 8, 2, '-', NULL, NULL);
INSERT INTO `widget_parts` VALUES (10, 9, 2, 'widgets.data.website', NULL, NULL);
INSERT INTO `widget_parts` VALUES (11, 11, 2, 'widgets.data.public.rooms', NULL, NULL);
INSERT INTO `widget_parts` VALUES (12, 12, 2, 'widgets.data.public.room', NULL, NULL);
INSERT INTO `widget_parts` VALUES (13, 13, 2, 'widgets.documents.public.gallery', NULL, NULL);
INSERT INTO `widget_parts` VALUES (14, 14, 2, 'widgets.documents.public.contact_us', NULL, NULL);
INSERT INTO `widget_parts` VALUES (15, 15, 2, 'widgets.documents.public.about_us', NULL, NULL);
INSERT INTO `widget_parts` VALUES (16, 16, 2, 'widgets.documents.public.rules', NULL, NULL);
INSERT INTO `widget_parts` VALUES (17, 17, 2, 'widgets.data.hotel', NULL, NULL);
INSERT INTO `widget_parts` VALUES (18, 18, 2, 'widgets.documents.document', NULL, NULL);
INSERT INTO `widget_parts` VALUES (19, 19, 2, 'widgets.data.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (20, 20, 2, 'widgets.documents.public.complaints', NULL, NULL);
INSERT INTO `widget_parts` VALUES (21, 21, 2, 'widgets.users.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (22, 22, 2, 'widgets.users.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (23, 23, 2, 'widgets.users.public.enter', NULL, NULL);
INSERT INTO `widget_parts` VALUES (24, 24, 2, 'widgets.users.public.login', NULL, NULL);
INSERT INTO `widget_parts` VALUES (25, 25, 2, 'widgets.users.public.register', NULL, NULL);
INSERT INTO `widget_parts` VALUES (26, 26, 2, 'widgets.services.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (27, 27, 2, 'widgets.data.application', NULL, NULL);
INSERT INTO `widget_parts` VALUES (28, 28, 2, 'templates.empty', '2019-05-18 19:41:03', '2019-05-18 19:41:03');
INSERT INTO `widget_parts` VALUES (29, 29, 2, 'templates.empty', '2019-05-18 23:15:35', '2019-05-18 23:15:35');
INSERT INTO `widget_parts` VALUES (30, 30, 2, 'templates.two_rows', '2019-05-19 04:57:57', '2019-05-19 04:57:57');
INSERT INTO `widget_parts` VALUES (31, 31, 2, 'templates.empty', '2019-05-21 01:59:27', '2019-05-21 01:59:27');
INSERT INTO `widget_parts` VALUES (32, 32, 2, 'templates.empty', '2019-05-21 01:59:44', '2019-05-21 01:59:44');
INSERT INTO `widget_parts` VALUES (33, 33, 2, 'templates.empty', '2019-05-21 02:16:19', '2019-05-21 02:16:19');
INSERT INTO `widget_parts` VALUES (34, 34, 2, 'templates.full_text', '2019-05-21 08:03:25', '2019-05-21 08:03:25');
INSERT INTO `widget_parts` VALUES (35, 35, 2, 'widgets.conversations.message', NULL, NULL);
INSERT INTO `widget_parts` VALUES (36, 36, 2, 'widgets.conversations.comment', NULL, NULL);
INSERT INTO `widget_parts` VALUES (37, 37, 2, 'widgets.conversations.complaint', NULL, NULL);
INSERT INTO `widget_parts` VALUES (38, 38, 2, 'widgets.conversations.rating', NULL, NULL);
INSERT INTO `widget_parts` VALUES (39, 39, 2, 'widgets.conversations.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (40, 40, 2, 'widgets.conversations.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (41, 41, 2, 'widgets.conversations.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (42, 42, 2, 'widgets.conversations.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (43, 43, 2, 'templates.full_feature', '2019-05-26 22:42:00', '2019-05-26 22:42:00');
INSERT INTO `widget_parts` VALUES (44, 44, 2, 'templates.full_feature', '2019-05-26 22:50:22', '2019-05-26 22:50:22');
INSERT INTO `widget_parts` VALUES (45, 45, 2, 'templates.full_text', '2019-05-27 00:56:25', '2019-05-27 00:56:25');
INSERT INTO `widget_parts` VALUES (46, 46, 2, 'templates.full_feature', '2019-06-09 18:18:00', '2019-06-09 18:18:00');
INSERT INTO `widget_parts` VALUES (47, 47, 2, 'widgets.documents.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (48, 48, 2, 'widgets.documents.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (49, 49, 2, 'widgets.documents.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (50, 50, 2, 'widgets.documents.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (51, 51, 2, 'widgets.data.map', NULL, NULL);
INSERT INTO `widget_parts` VALUES (52, 52, 2, 'widgets.data.map_location', NULL, NULL);
INSERT INTO `widget_parts` VALUES (53, 53, 2, 'widgets.documents.video', NULL, NULL);
INSERT INTO `widget_parts` VALUES (54, 54, 2, 'widgets.documents.swf', NULL, NULL);
INSERT INTO `widget_parts` VALUES (55, 55, 2, 'widgets.communications.external-chat-system', NULL, NULL);
INSERT INTO `widget_parts` VALUES (56, 56, 2, 'templates.empty', '2019-07-12 19:14:02', '2019-07-12 19:14:02');
INSERT INTO `widget_parts` VALUES (57, 57, 2, 'templates.empty', '2019-07-12 20:47:34', '2019-07-12 20:47:34');

-- ----------------------------
-- Table structure for widgets
-- ----------------------------
DROP TABLE IF EXISTS `widgets`;
CREATE TABLE `widgets`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `view` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `object_type` int(255) UNSIGNED NULL DEFAULT NULL,
  `object_id` int(11) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 58 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of widgets
-- ----------------------------
INSERT INTO `widgets` VALUES (1, 'data.index', NULL, 1, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (2, 'users.index', NULL, 2, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (3, 'users.index', NULL, 2, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (4, 'data.property.index', NULL, 1, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (5, 'document.index', NULL, 4, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (6, 'document.index', NULL, 4, 3, NULL, NULL);
INSERT INTO `widgets` VALUES (7, 'document.index', NULL, 4, 4, NULL, NULL);
INSERT INTO `widgets` VALUES (8, 'relation.index', NULL, 5, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (9, 'data.index', NULL, 1, 3, NULL, NULL);
INSERT INTO `widgets` VALUES (10, 'public.document', NULL, 4, 6, NULL, NULL);
INSERT INTO `widgets` VALUES (11, 'public.data', 'home.data.all', 1, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (12, 'public.data', 'home.data', 1, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (13, 'public.document', 'home.document', 4, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (14, 'public.document', 'home.document', 4, 6, NULL, NULL);
INSERT INTO `widgets` VALUES (15, 'public.document', 'home.document', 4, 7, NULL, NULL);
INSERT INTO `widgets` VALUES (16, 'public.document', 'home.document', 4, 8, NULL, NULL);
INSERT INTO `widgets` VALUES (17, 'data.index', NULL, 1, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (18, 'document.index', NULL, 4, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (19, 'data.property.index', NULL, 1, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (20, 'public.document', 'home.document', 4, 10, NULL, NULL);
INSERT INTO `widgets` VALUES (21, 'users.property.index', NULL, 2, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (22, 'users.property.index', NULL, 2, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (23, 'public.user', 'home.user.enter', 2, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (24, 'public.user', 'home.user.login', 2, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (25, 'public.user', 'home.user.register', 2, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (26, 'service.property.index', NULL, 3, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (27, 'data.index', NULL, 1, 4, NULL, NULL);
INSERT INTO `widgets` VALUES (28, 'public.document', 'home.document', 4, 12, '2019-05-18 19:41:03', '2019-05-18 19:41:03');
INSERT INTO `widgets` VALUES (29, 'public.document', 'home.document', 4, 13, '2019-05-18 23:15:35', '2019-05-18 23:15:35');
INSERT INTO `widgets` VALUES (30, 'public.document', 'home.document', 4, 14, '2019-05-19 04:57:57', '2019-05-19 04:57:57');
INSERT INTO `widgets` VALUES (31, 'public.document', 'home.document', 4, 15, '2019-05-21 01:59:27', '2019-05-21 01:59:27');
INSERT INTO `widgets` VALUES (32, 'public.document', 'home.document', 4, 16, '2019-05-21 01:59:44', '2019-05-21 01:59:44');
INSERT INTO `widgets` VALUES (33, 'public.document', 'home.document', 4, 17, '2019-05-21 02:16:19', '2019-05-21 02:16:19');
INSERT INTO `widgets` VALUES (34, 'public.document', 'home.document', 4, 18, '2019-05-21 08:03:25', '2019-05-21 08:03:25');
INSERT INTO `widgets` VALUES (35, 'conversation.index', NULL, 10, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (36, 'conversation.index', NULL, 10, 3, NULL, NULL);
INSERT INTO `widgets` VALUES (37, 'conversation.index', NULL, 10, 4, NULL, NULL);
INSERT INTO `widgets` VALUES (38, 'conversation.index', NULL, 10, 5, NULL, NULL);
INSERT INTO `widgets` VALUES (39, 'conversation.property.index', NULL, 10, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (40, 'conversation.property.index', NULL, 10, 3, NULL, NULL);
INSERT INTO `widgets` VALUES (41, 'conversation.property.index', NULL, 10, 4, NULL, NULL);
INSERT INTO `widgets` VALUES (42, 'conversation.property.index', NULL, 10, 5, NULL, NULL);
INSERT INTO `widgets` VALUES (43, 'public.document', 'home.document', 4, 19, '2019-05-26 22:42:00', '2019-05-26 22:42:00');
INSERT INTO `widgets` VALUES (44, 'public.document', 'home.document', 4, 20, '2019-05-26 22:50:22', '2019-05-26 22:50:22');
INSERT INTO `widgets` VALUES (45, 'public.document', 'home.document', 4, 21, '2019-05-27 00:56:25', '2019-05-27 00:56:25');
INSERT INTO `widgets` VALUES (46, 'public.document', 'home.document', 4, 22, '2019-06-09 18:18:00', '2019-06-09 18:18:00');
INSERT INTO `widgets` VALUES (47, 'document.property.index', NULL, 4, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (48, 'document.property.index', NULL, 4, 2, NULL, NULL);
INSERT INTO `widgets` VALUES (49, 'document.property.index', NULL, 4, 3, NULL, NULL);
INSERT INTO `widgets` VALUES (50, 'document.property.index', NULL, 4, 4, NULL, NULL);
INSERT INTO `widgets` VALUES (51, 'data.index', NULL, 1, 7, NULL, NULL);
INSERT INTO `widgets` VALUES (52, 'data.index', NULL, 1, 8, NULL, NULL);
INSERT INTO `widgets` VALUES (53, 'document.index', NULL, 4, 22, NULL, NULL);
INSERT INTO `widgets` VALUES (54, 'document.index', NULL, 4, 23, NULL, NULL);
INSERT INTO `widgets` VALUES (55, 'communication.index', NULL, 12, 4, NULL, NULL);
INSERT INTO `widgets` VALUES (56, 'public.document', 'home.document.all', 4, 25, '2019-07-12 19:14:02', '2019-07-12 19:14:02');
INSERT INTO `widgets` VALUES (57, 'public.document', 'home.document.all', 4, 26, '2019-07-12 20:47:34', '2019-07-12 20:47:34');

SET FOREIGN_KEY_CHECKS = 1;
