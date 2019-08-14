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

 Date: 21/07/2019 01:54:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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

SET FOREIGN_KEY_CHECKS = 1;
