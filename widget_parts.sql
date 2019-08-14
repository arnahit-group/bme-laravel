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

 Date: 13/07/2019 03:17:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
