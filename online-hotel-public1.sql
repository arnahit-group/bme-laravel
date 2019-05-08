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

 Date: 29/04/2019 09:54:26
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
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_assigned_properties
-- ----------------------------
INSERT INTO `communication_assigned_properties` VALUES (1, 1, 1, 'sabouri-hotel', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (2, 1, 2, 'sabourihotel', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (3, 1, 3, '10002972', NULL, NULL);
INSERT INTO `communication_assigned_properties` VALUES (4, 1, 4, '1', NULL, NULL);

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
  `communication_type` int(10) UNSIGNED NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_properties
-- ----------------------------
INSERT INTO `communication_properties` VALUES (1, 'username', '0', 'text', 1, 3, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (2, 'password', '0', 'text', 1, 3, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (3, 'number', '0', 'text', 1, 3, 0, NULL, NULL);
INSERT INTO `communication_properties` VALUES (6, 'active', '0', 'check', 1, 3, 0, NULL, NULL);

-- ----------------------------
-- Table structure for communication_types
-- ----------------------------
DROP TABLE IF EXISTS `communication_types`;
CREATE TABLE `communication_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communication_types
-- ----------------------------
INSERT INTO `communication_types` VALUES (1, 'email', 0, NULL, NULL);
INSERT INTO `communication_types` VALUES (2, 'sms', 0, NULL, NULL);
INSERT INTO `communication_types` VALUES (3, 'iransmspanel', 2, NULL, NULL);

-- ----------------------------
-- Table structure for communications
-- ----------------------------
DROP TABLE IF EXISTS `communications`;
CREATE TABLE `communications`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `communication_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of communications
-- ----------------------------
INSERT INTO `communications` VALUES (1, 'iransmspanel-1', 3, NULL, NULL);

-- ----------------------------
-- Table structure for data
-- ----------------------------
DROP TABLE IF EXISTS `data`;
CREATE TABLE `data`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `data_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 72 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 295 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_assigned_properties
-- ----------------------------
INSERT INTO `data_assigned_properties` VALUES (130, 38, 17, 'fa', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (131, 1, 1, 'هتل سه ستاره صبوری', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (132, 1, 2, 'نشانی: گیلان ، رشت ، خیابان رسالت (صداوسیما) ، رودبارتان پشت پمپ بنزین خطیبی ، روبروی پارک شهید گلستانی', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (133, 1, 19, 'هتل سه ستاره صبوری رشت در فروردین ماه سال 1394 به بهره برداری رسید. این هتل در پنج طبقه بنا شده و دارای 12 واحد اقامتی است. هتل صبوری رشت با قرار گیری در استان سرسبز گیلان، میزبان گردشگران زیادی از نقاط مختلف می باشد. مهمانان گرامی می توانند با اقامت در هتل آپارتمان صبوری به نقاط مختلف شهر دسترسی آسانی داشته باشند. فاصله هتل سه ستاره صبوری رشت تا برخی اماکن تاریخی و مذهبی از جمله ساختمان تاریخی شهرداری سابق رشت و حرم مطهر حضرت فاطمه اخری، حدود سه کیلومتر می باشد که مزیت این هتل محسوب می شود. ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (134, 1, 20, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (135, 1, 21, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (136, 8, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (137, 9, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (138, 37, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (139, 1, 23, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (140, 1, 24, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (141, 1, 25, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (142, 1, 26, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (143, 1, 27, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (144, 1, 28, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (145, 1, 29, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (146, 1, 30, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (147, 1, 31, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (148, 1, 32, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (149, 1, 33, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (150, 1, 34, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (151, 1, 35, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (152, 1, 36, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (153, 1, 37, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (154, 1, 38, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (155, 1, 39, 'با ظرفیت 30 نفر', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (156, 1, 40, 'رایگان و نامحدود', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (157, 1, 41, 'با ظرفیت 40 خودرو', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (158, 1, 42, '7 طبقه', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (159, 1, 43, '12 اتاق', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (160, 39, 44, 'سامانه خصوصی رزرو هتل سه ستاره  صبوری، وبسایتی ایمن جهت رزرو آنلاین هتل صبوری می باشد، این امکان برای شما فراهم شده است که اتاق های هتل صبوری را با قیمتی به مراتب کمتر از برد اصلی و با تخفیف ویژه به صورت آنلاین رزرو کنید.', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (161, 8, 3, 'سوییت 65 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (162, 8, 5, ' پنج تخت ثابت و یک سرویس خواب اضافه (کاناپه دو نفره - سه سینگل - یک دبل) ', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (163, 8, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (164, 8, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (165, 8, 11, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (166, 9, 3, 'سوییت 65 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (167, 9, 5, 'چهار تخت ثابت و یک سرویس خواب اظاف (کاناپه دو نفره )-(سه سینگل -یک دبل )', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (168, 9, 6, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (169, 9, 7, '1', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (170, 9, 11, '1', NULL, NULL);
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
INSERT INTO `data_assigned_properties` VALUES (251, 1, 49, 'info@sabourihotel.ir', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (252, 8, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (253, 9, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (254, 37, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (255, 40, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (256, 41, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (257, 42, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (258, 43, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (259, 44, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (260, 45, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (261, 46, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (262, 47, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (263, 64, 51, 'pk.eyJ1IjoiaG90ZWwtc2Fib3VyaSIsImEiOiJjanRiZXEzaTUwa3g3NDRudWRtYTVuanJoIn0.HzwDmQ5qSzX9Pm8-BCWz8w', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (264, 64, 52, 'mapbox', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (265, 65, 53, 'hotel sabouri', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (266, 65, 54, '49.605069', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (267, 65, 55, '37.276716', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (268, 66, 22, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (269, 66, 50, '-', NULL, NULL);
INSERT INTO `data_assigned_properties` VALUES (270, 38, 56, 'هتل صبوری', NULL, NULL);
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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_assigned_property_values
-- ----------------------------
INSERT INTO `data_assigned_property_values` VALUES (1, 134, '+98-13-333-55264~8', NULL, NULL);
INSERT INTO `data_assigned_property_values` VALUES (2, 135, '+98-911-254-6582', NULL, NULL);

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
  `data_type` int(10) UNSIGNED NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 62 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_properties
-- ----------------------------
INSERT INTO `data_properties` VALUES (1, 'name', '-', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (2, 'address', '-', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (3, 'title', '-', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (4, 'floor', '-', 'select', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (5, 'description', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (6, 'internet', '0', 'check', 2, 2, 0, NULL, '2019-02-17 22:38:55');
INSERT INTO `data_properties` VALUES (7, 'parking', '0', 'check', 2, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (8, 'images', '-', 'multi_upload', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (9, 'inactive_days', '', 'array_date', 3, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (10, 'active_days', '', 'array_date', 3, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (11, 'available', '1', 'check', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (17, 'base_locale', 'fa', 'select', 1, 3, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (18, 'locales', '', 'multi-check', 0, 0, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (19, 'description', '-', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (20, 'phone', '-', 'multi-text', 1, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (21, 'mobile', '-', 'multi-text', 1, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (22, 'slide-images', '-', 'multi-relation-document-images', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (23, 'mini_bar', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (24, 'satellite_networks', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (25, 'store', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (26, 'royal_curtains', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (27, 'safe_box', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (28, 'heater_package', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (29, 'free_internet', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (30, 'air_conditioner', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (31, 'fire_alarm', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (32, 'lobby_internet', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (33, 'emergency_power', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (34, 'taxi', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (35, 'tea_house', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (36, 'room_service', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (37, 'travel_agency', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (38, 'lock', '0', 'check', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (39, 'fast_food_restaurant', '-', 'text', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (40, 'lobby_internet', '-', 'text', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (41, 'parking_capacity', '-', 'text', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (42, 'floors_count', '-', 'text', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (43, 'rooms_count', '-', 'text', 2, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (44, 'description', '-', 'text', 1, 4, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (45, 'title', '-', 'text', 1, 5, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (46, 'description', '-', 'text', 1, 5, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (47, 'title', '-', 'text', 1, 6, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (48, 'description', '-', 'text', 1, 6, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (49, 'email', '-', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (50, 'price', '0', 'single-relation-price', 1, 2, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (51, 'access-token', '0', 'text', 1, 7, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (52, 'title', '0', 'text', 1, 7, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (53, 'title', '0', 'text', 1, 8, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (54, 'lng', '0', 'text', 1, 8, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (55, 'lat', '0', 'text', 1, 8, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (56, 'title', '-', 'text', 1, 3, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (57, 'email', '-', 'text', 1, 10, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (58, 'name', '-', 'text', 1, 10, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (59, 'location', '-', 'text', 1, 10, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (60, 'mobile', '-', 'text', 1, 10, 0, NULL, NULL);
INSERT INTO `data_properties` VALUES (61, 'content', '-', 'text', 1, 10, 0, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_property_values
-- ----------------------------
INSERT INTO `data_property_values` VALUES (1, 'همکف', 4, NULL, NULL);
INSERT INTO `data_property_values` VALUES (2, 'اول', 4, NULL, NULL);
INSERT INTO `data_property_values` VALUES (3, 'دوم', 4, NULL, NULL);
INSERT INTO `data_property_values` VALUES (4, 'سوم', 4, NULL, NULL);
INSERT INTO `data_property_values` VALUES (8, 'fa', 17, NULL, NULL);
INSERT INTO `data_property_values` VALUES (9, 'en', 17, NULL, NULL);
INSERT INTO `data_property_values` VALUES (10, 'ar', 17, NULL, NULL);

-- ----------------------------
-- Table structure for data_types
-- ----------------------------
DROP TABLE IF EXISTS `data_types`;
CREATE TABLE `data_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of data_types
-- ----------------------------
INSERT INTO `data_types` VALUES (1, 'hotel', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (2, 'room', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (3, 'website', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (4, 'application', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (5, 'coffee-shop', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (6, 'restaurant', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (7, 'map', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (8, 'map-location', 7, NULL, NULL);
INSERT INTO `data_types` VALUES (9, 'conversation', 0, NULL, NULL);
INSERT INTO `data_types` VALUES (10, 'message', 9, NULL, NULL);
INSERT INTO `data_types` VALUES (11, 'comment', 9, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 142 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_assigned_properties
-- ----------------------------
INSERT INTO `document_assigned_properties` VALUES (19, 20, 1, 'simply dummy text', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (20, 20, 2, 'http://hotelsabouri.com/public/uploads/post1.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (21, 20, 3, '1550623141657', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (22, 21, 1, 'gdfgdfgfdg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (23, 21, 2, 'http://hotelsabouri.com/public/uploads/post2.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (24, 21, 3, '1550625892278', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (25, 22, 1, 'sssssssssssssssssssssss', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (26, 22, 2, 'http://hotelsabouri.com/public/uploads/post3.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (27, 22, 3, '1550626044651', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (28, 23, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (29, 23, 2, 'http://hotelsabouri.com/public/uploads/post4.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (30, 23, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (31, 24, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (32, 24, 2, 'http://hotelsabouri.com/public/uploads/h1.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (33, 24, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (34, 25, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (35, 25, 2, 'http://hotelsabouri.com/public/uploads/h2.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (36, 25, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (37, 26, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (38, 26, 2, 'http://hotelsabouri.com/public/uploads/h3.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (39, 26, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (40, 27, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (41, 27, 2, 'http://hotelsabouri.com/public/uploads/h4.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (42, 27, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (43, 33, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (44, 33, 2, 'http://hotelsabouri.com/public/uploads/slider1.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (45, 33, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (46, 34, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (47, 34, 2, 'http://hotelsabouri.com/public/uploads/slider2.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (48, 34, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (49, 32, 1, 'fffffffffffff', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (50, 32, 2, 'http://hotelsabouri.com/public/uploads/22c7f6a1ad2927cf0b09fda4e49db761305b410a.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (51, 32, 3, '1551586461137', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (52, 35, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (53, 35, 2, 'http://hotelsabouri.com/public/uploads/slider3.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (54, 35, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (55, 36, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (56, 36, 2, 'http://hotelsabouri.com/public/uploads/post5.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (57, 36, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (58, 37, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (59, 37, 2, 'http://hotelsabouri.com/public/uploads/post6.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (60, 37, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (61, 38, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (62, 38, 2, 'http://hotelsabouri.com/public/uploads/post7.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (63, 38, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (64, 39, 1, 'aaaaaaaaaaaaaaaaaa', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (65, 39, 2, 'http://hotelsabouri.com/public/uploads/post8.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (66, 39, 3, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (67, 41, 4, 'http://hotelsabouri.com/public/uploads/room-001.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (68, 41, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (69, 42, 4, 'http://hotelsabouri.com/public/uploads/room-002.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (70, 42, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (71, 43, 4, 'http://hotelsabouri.com/public/uploads/room-003.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (72, 43, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (73, 44, 4, 'http://hotelsabouri.com/public/uploads/room-004.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (74, 44, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (75, 45, 4, 'http://hotelsabouri.com/public/uploads/room-005.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (76, 45, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (77, 56, 4, 'http://hotelsabouri.com/public/uploads/room-006.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (78, 56, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (79, 57, 4, 'http://hotelsabouri.com/public/uploads/room-007.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (80, 57, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (81, 58, 4, 'http://hotelsabouri.com/public/uploads/room-008.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (82, 56, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (83, 59, 4, 'http://hotelsabouri.com/public/uploads/room-009.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (84, 59, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (85, 60, 4, 'http://hotelsabouri.com/public/uploads/room-010.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (86, 60, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (87, 46, 4, 'http://hotelsabouri.com/public/uploads/room-011.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (88, 46, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (89, 47, 4, 'http://hotelsabouri.com/public/uploads/room-012.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (90, 47, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (91, 48, 4, 'http://hotelsabouri.com/public/uploads/room-013.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (92, 48, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (93, 49, 4, 'http://hotelsabouri.com/public/uploads/room-014.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (94, 49, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (95, 50, 4, 'http://hotelsabouri.com/public/uploads/room-015.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (96, 50, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (97, 51, 4, 'http://hotelsabouri.com/public/uploads/room-016.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (98, 51, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (99, 52, 4, 'http://hotelsabouri.com/public/uploads/room-017.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (100, 52, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (101, 53, 4, 'http://hotelsabouri.com/public/uploads/room-018.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (102, 53, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (103, 54, 4, 'http://hotelsabouri.com/public/uploads/room-019.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (104, 54, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (105, 55, 4, 'http://hotelsabouri.com/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (106, 55, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (107, 62, 4, 'http://hotelsabouri.com/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (108, 62, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (109, 63, 4, 'http://hotelsabouri.com/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (110, 63, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (111, 64, 4, 'http://hotelsabouri.com/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (112, 64, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (113, 65, 4, 'http://hotelsabouri.com/public/uploads/room-020.jpg', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (114, 65, 5, '1550626369034', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (115, 74, 6, '', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (116, 74, 7, 'http://hotelsabouri.com/uploads/621580942342c850b091f27b6f8fbdda29fdb04b.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (117, 74, 8, '1554809530116', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (118, 75, 6, '', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (119, 75, 7, 'http://hotelsabouri.com/uploads/1bf2bec47f455554a6a7c99231b5ffec8a2ec769.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (120, 75, 8, '1554809548689', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (121, 81, 6, '', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (122, 81, 7, 'http://hotelsabouri.com/uploads/40f7d02cae0ba2a60baf2c85772f9d7ad2766af3.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (123, 81, 8, '1554809839216', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (124, 82, 6, '', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (125, 82, 7, 'http://hotelsabouri.com/uploads/b8eeae754b323f0b47b79108ceaf5450f3e05676.png', NULL, NULL);
INSERT INTO `document_assigned_properties` VALUES (126, 82, 8, '1554809883551', NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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

-- ----------------------------
-- Table structure for document_types
-- ----------------------------
DROP TABLE IF EXISTS `document_types`;
CREATE TABLE `document_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of document_types
-- ----------------------------
INSERT INTO `document_types` VALUES (1, 'gallery', 0, NULL, NULL);
INSERT INTO `document_types` VALUES (2, 'general', 0, NULL, NULL);
INSERT INTO `document_types` VALUES (3, 'main-slide-show', 0, NULL, NULL);
INSERT INTO `document_types` VALUES (4, 'second-slide-show', 0, NULL, NULL);
INSERT INTO `document_types` VALUES (5, 'pages', 0, NULL, NULL);
INSERT INTO `document_types` VALUES (6, 'contact-us', 5, NULL, NULL);
INSERT INTO `document_types` VALUES (7, 'about-us', 5, NULL, NULL);
INSERT INTO `document_types` VALUES (8, 'rules', 5, NULL, NULL);

-- ----------------------------
-- Table structure for documents
-- ----------------------------
DROP TABLE IF EXISTS `documents`;
CREATE TABLE `documents`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `document_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 68 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of documents
-- ----------------------------
INSERT INTO `documents` VALUES (20, 1, '2019-02-20 00:39:01', '2019-02-20 00:39:01');
INSERT INTO `documents` VALUES (21, 1, '2019-02-20 01:24:52', '2019-02-20 01:24:52');
INSERT INTO `documents` VALUES (22, 1, '2019-02-20 01:27:24', '2019-02-20 01:27:24');
INSERT INTO `documents` VALUES (23, 1, '2019-02-20 01:32:48', '2019-02-20 01:32:48');
INSERT INTO `documents` VALUES (24, 3, NULL, NULL);
INSERT INTO `documents` VALUES (25, 3, NULL, NULL);
INSERT INTO `documents` VALUES (26, 3, NULL, NULL);
INSERT INTO `documents` VALUES (27, 3, NULL, NULL);
INSERT INTO `documents` VALUES (33, 4, NULL, NULL);
INSERT INTO `documents` VALUES (34, 4, NULL, NULL);
INSERT INTO `documents` VALUES (35, 4, NULL, NULL);
INSERT INTO `documents` VALUES (36, 1, NULL, NULL);
INSERT INTO `documents` VALUES (37, 1, NULL, NULL);
INSERT INTO `documents` VALUES (38, 1, NULL, NULL);
INSERT INTO `documents` VALUES (39, 1, NULL, NULL);
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

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 147 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
INSERT INTO `navigation_item_assigned_properties` VALUES (29, 9, 1, 'contact us', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (30, 9, 2, 'home.document', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (31, 9, 3, 'document_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (32, 9, 4, 'contact-us', NULL, NULL);
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
INSERT INTO `navigation_item_assigned_properties` VALUES (105, 28, 1, 'website settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (106, 28, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (107, 28, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (108, 28, 4, 'website', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (109, 29, 1, 'website settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (110, 29, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (111, 29, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (112, 29, 4, 'website', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (113, 30, 1, 'website settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (114, 30, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (115, 30, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (116, 30, 4, 'website', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (117, 31, 1, 'website settings', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (118, 31, 2, 'data.index', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (119, 31, 3, 'data_type', NULL, NULL);
INSERT INTO `navigation_item_assigned_properties` VALUES (120, 31, 4, 'website', NULL, NULL);
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
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigation_item_properties
-- ----------------------------
INSERT INTO `navigation_item_properties` VALUES (1, 'title', '-', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (2, 'route', '', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (3, 'key', '', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (4, 'value', '', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (5, 'title', '-', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (6, 'route', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (7, 'key', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (8, 'value', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (9, 'enabled', '', 'check', 1, 1, 0, NULL, NULL);
INSERT INTO `navigation_item_properties` VALUES (10, 'enabled', '', 'check', 1, 2, 0, NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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

-- ----------------------------
-- Table structure for navigations
-- ----------------------------
DROP TABLE IF EXISTS `navigations`;
CREATE TABLE `navigations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of navigations
-- ----------------------------
INSERT INTO `navigations` VALUES (1, 'admin', NULL, NULL);
INSERT INTO `navigations` VALUES (2, 'public', NULL, NULL);
INSERT INTO `navigations` VALUES (3, 'index', NULL, NULL);
INSERT INTO `navigations` VALUES (4, 'useful-links', NULL, NULL);
INSERT INTO `navigations` VALUES (5, 'facility-links', NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of object_types
-- ----------------------------
INSERT INTO `object_types` VALUES (1, 'data', NULL, NULL);
INSERT INTO `object_types` VALUES (2, 'user', NULL, NULL);
INSERT INTO `object_types` VALUES (3, 'service', NULL, NULL);
INSERT INTO `object_types` VALUES (4, 'document', NULL, NULL);
INSERT INTO `object_types` VALUES (5, 'relation', NULL, NULL);
INSERT INTO `object_types` VALUES (6, 'data_assigned_property', NULL, NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 318 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
INSERT INTO `relation_objects` VALUES (152, 88, 2, 100, NULL, NULL);
INSERT INTO `relation_objects` VALUES (153, 88, 3, 90, NULL, NULL);
INSERT INTO `relation_objects` VALUES (154, 88, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (155, 89, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (156, 89, 3, 91, NULL, NULL);
INSERT INTO `relation_objects` VALUES (157, 89, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (158, 90, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (159, 90, 3, 92, NULL, NULL);
INSERT INTO `relation_objects` VALUES (160, 90, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (161, 91, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (162, 91, 3, 93, NULL, NULL);
INSERT INTO `relation_objects` VALUES (163, 91, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (164, 92, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (165, 92, 3, 94, NULL, NULL);
INSERT INTO `relation_objects` VALUES (166, 92, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (167, 93, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (168, 93, 3, 95, NULL, NULL);
INSERT INTO `relation_objects` VALUES (169, 93, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (170, 94, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (171, 94, 3, 96, NULL, NULL);
INSERT INTO `relation_objects` VALUES (172, 94, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (173, 95, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (174, 95, 3, 97, NULL, NULL);
INSERT INTO `relation_objects` VALUES (175, 95, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (176, 96, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (177, 96, 3, 98, NULL, NULL);
INSERT INTO `relation_objects` VALUES (178, 96, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (179, 97, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (180, 97, 3, 99, NULL, NULL);
INSERT INTO `relation_objects` VALUES (181, 97, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (182, 98, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (183, 98, 3, 100, NULL, NULL);
INSERT INTO `relation_objects` VALUES (184, 98, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (185, 99, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (186, 99, 3, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (187, 99, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (188, 100, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (189, 100, 3, 102, NULL, NULL);
INSERT INTO `relation_objects` VALUES (190, 100, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (191, 101, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (192, 101, 3, 103, NULL, NULL);
INSERT INTO `relation_objects` VALUES (193, 101, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (194, 102, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (195, 102, 3, 104, NULL, NULL);
INSERT INTO `relation_objects` VALUES (196, 102, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (197, 103, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (198, 103, 3, 105, NULL, NULL);
INSERT INTO `relation_objects` VALUES (199, 103, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (200, 104, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (201, 104, 3, 106, NULL, NULL);
INSERT INTO `relation_objects` VALUES (202, 104, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (203, 105, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (204, 105, 3, 107, NULL, NULL);
INSERT INTO `relation_objects` VALUES (205, 105, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (206, 106, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (207, 106, 3, 108, NULL, NULL);
INSERT INTO `relation_objects` VALUES (208, 106, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (209, 107, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (210, 107, 3, 109, NULL, NULL);
INSERT INTO `relation_objects` VALUES (211, 107, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (212, 108, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (213, 108, 3, 110, NULL, NULL);
INSERT INTO `relation_objects` VALUES (214, 108, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (215, 109, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (216, 109, 3, 111, NULL, NULL);
INSERT INTO `relation_objects` VALUES (217, 109, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (218, 110, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (219, 110, 3, 112, NULL, NULL);
INSERT INTO `relation_objects` VALUES (220, 110, 1, 37, NULL, NULL);
INSERT INTO `relation_objects` VALUES (221, 111, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (222, 111, 3, 113, NULL, NULL);
INSERT INTO `relation_objects` VALUES (223, 111, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (224, 112, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (225, 112, 3, 114, NULL, NULL);
INSERT INTO `relation_objects` VALUES (226, 112, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (227, 113, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (228, 113, 3, 115, NULL, NULL);
INSERT INTO `relation_objects` VALUES (229, 113, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (230, 114, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (231, 114, 3, 116, NULL, NULL);
INSERT INTO `relation_objects` VALUES (232, 114, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (233, 115, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (234, 115, 3, 117, NULL, NULL);
INSERT INTO `relation_objects` VALUES (235, 115, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (236, 116, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (237, 116, 3, 118, NULL, NULL);
INSERT INTO `relation_objects` VALUES (238, 116, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (239, 117, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (240, 117, 3, 119, NULL, NULL);
INSERT INTO `relation_objects` VALUES (241, 117, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (242, 118, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (243, 118, 3, 120, NULL, NULL);
INSERT INTO `relation_objects` VALUES (244, 118, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (245, 119, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (246, 119, 3, 121, NULL, NULL);
INSERT INTO `relation_objects` VALUES (247, 119, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (248, 120, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (249, 120, 3, 122, NULL, NULL);
INSERT INTO `relation_objects` VALUES (250, 120, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (251, 121, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (252, 121, 3, 123, NULL, NULL);
INSERT INTO `relation_objects` VALUES (253, 121, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (254, 122, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (255, 122, 3, 124, NULL, NULL);
INSERT INTO `relation_objects` VALUES (256, 122, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (257, 123, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (258, 123, 3, 125, NULL, NULL);
INSERT INTO `relation_objects` VALUES (259, 123, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (260, 124, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (261, 124, 3, 126, NULL, NULL);
INSERT INTO `relation_objects` VALUES (262, 124, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (263, 125, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (264, 125, 3, 127, NULL, NULL);
INSERT INTO `relation_objects` VALUES (265, 125, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (266, 126, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (267, 126, 3, 128, NULL, NULL);
INSERT INTO `relation_objects` VALUES (268, 126, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (269, 127, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (270, 127, 3, 129, NULL, NULL);
INSERT INTO `relation_objects` VALUES (271, 127, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (272, 128, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (273, 128, 3, 130, NULL, NULL);
INSERT INTO `relation_objects` VALUES (274, 128, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (275, 129, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (276, 129, 3, 131, NULL, NULL);
INSERT INTO `relation_objects` VALUES (277, 129, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (278, 130, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (279, 130, 3, 132, NULL, NULL);
INSERT INTO `relation_objects` VALUES (280, 130, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (281, 131, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (282, 131, 3, 133, NULL, NULL);
INSERT INTO `relation_objects` VALUES (283, 131, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (284, 132, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (285, 132, 3, 134, NULL, NULL);
INSERT INTO `relation_objects` VALUES (286, 132, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (287, 133, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (288, 133, 3, 135, NULL, NULL);
INSERT INTO `relation_objects` VALUES (289, 133, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (290, 134, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (291, 134, 3, 136, NULL, NULL);
INSERT INTO `relation_objects` VALUES (292, 134, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (293, 135, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (294, 135, 3, 137, NULL, NULL);
INSERT INTO `relation_objects` VALUES (295, 135, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (296, 136, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (297, 136, 3, 138, NULL, NULL);
INSERT INTO `relation_objects` VALUES (298, 136, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (299, 137, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (300, 137, 3, 139, NULL, NULL);
INSERT INTO `relation_objects` VALUES (301, 137, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (302, 138, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (303, 138, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (304, 138, 3, 140, NULL, NULL);
INSERT INTO `relation_objects` VALUES (305, 138, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (306, 139, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (307, 139, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (308, 139, 3, 141, NULL, NULL);
INSERT INTO `relation_objects` VALUES (309, 139, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (310, 140, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (311, 140, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (312, 140, 3, 142, NULL, NULL);
INSERT INTO `relation_objects` VALUES (313, 140, 1, 9, NULL, NULL);
INSERT INTO `relation_objects` VALUES (314, 141, 2, 101, NULL, NULL);
INSERT INTO `relation_objects` VALUES (315, 141, 2, 1, NULL, NULL);
INSERT INTO `relation_objects` VALUES (316, 141, 3, 143, NULL, NULL);
INSERT INTO `relation_objects` VALUES (317, 141, 1, 9, NULL, NULL);

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
  `relation_type` int(10) UNSIGNED NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_properties
-- ----------------------------
INSERT INTO `relation_properties` VALUES (1, 'price', '0', 'currency', 1, 5, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (2, 'start_date', '0', 'date', 1, 2, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (4, 'price', '0', 'currency', 1, 2, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (5, 'end_date', '0', 'date', 1, 2, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (7, 'date', '0', 'date', 1, 5, 0, NULL, NULL);
INSERT INTO `relation_properties` VALUES (8, 'date', '0', 'date', 1, 2, 0, NULL, NULL);

-- ----------------------------
-- Table structure for relation_types
-- ----------------------------
DROP TABLE IF EXISTS `relation_types`;
CREATE TABLE `relation_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `parent` int(255) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of relation_types
-- ----------------------------
INSERT INTO `relation_types` VALUES (1, 'general', 0, NULL, NULL);
INSERT INTO `relation_types` VALUES (2, 'offer', 0, NULL, NULL);
INSERT INTO `relation_types` VALUES (3, 'dahe fajr', 2, NULL, NULL);
INSERT INTO `relation_types` VALUES (4, 'eid novrooz', 2, NULL, NULL);
INSERT INTO `relation_types` VALUES (5, 'price', 0, NULL, NULL);
INSERT INTO `relation_types` VALUES (6, 'test', 2, '2019-02-27 03:29:41', '2019-02-27 03:29:41');
INSERT INTO `relation_types` VALUES (7, 'wwwwwwwwwwwwww', 2, '2019-02-27 22:03:14', '2019-02-27 22:03:14');

-- ----------------------------
-- Table structure for relations
-- ----------------------------
DROP TABLE IF EXISTS `relations`;
CREATE TABLE `relations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `relation_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 142 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
) ENGINE = InnoDB AUTO_INCREMENT = 351 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_assigned_properties
-- ----------------------------
INSERT INTO `service_assigned_properties` VALUES (1, 1, 1, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (2, 1, 2, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (3, 1, 3, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (4, 1, 4, '120000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (5, 1, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (6, 2, 1, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (7, 2, 2, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (8, 2, 3, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (9, 2, 4, '250000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (10, 2, 5, '1', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (11, 3, 1, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (12, 3, 2, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (13, 3, 3, '1550625892278', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (14, 3, 4, '48012000', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (15, 3, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (322, 138, 2, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (323, 138, 3, '1398/2/13', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (324, 138, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (325, 138, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (326, 139, 2, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (327, 139, 3, '1398/2/13', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (328, 139, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (329, 139, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (330, 140, 2, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (331, 140, 3, '1398/2/13', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (332, 140, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (333, 140, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (334, 141, 2, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (335, 141, 3, '1398/2/13', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (336, 141, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (337, 141, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (338, 141, 7, '1556507422-1169173355', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (339, 142, 2, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (340, 142, 3, '1398/2/13', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (341, 142, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (342, 142, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (343, 142, 6, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (344, 142, 7, '1556509173-795111482', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (345, 143, 2, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (346, 143, 3, '1398/2/13', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (347, 143, 4, '2383200', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (348, 143, 5, '0', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (349, 143, 6, '1398/2/8', NULL, NULL);
INSERT INTO `service_assigned_properties` VALUES (350, 143, 7, '1556515343-154489964', NULL, NULL);

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
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_properties
-- ----------------------------
INSERT INTO `service_properties` VALUES (1, 'date', '0', 'date', 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (2, 'start_date', '0', 'date', 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (3, 'end_date', '0', 'date', 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (4, 'price', '0', 'number', 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (5, 'active', '0', 'check', 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (6, 'confirmation_date', '0', 'date', 1, 1, 0, NULL, NULL);
INSERT INTO `service_properties` VALUES (7, 'code', '0', 'text', 1, 1, 0, NULL, NULL);

-- ----------------------------
-- Table structure for service_types
-- ----------------------------
DROP TABLE IF EXISTS `service_types`;
CREATE TABLE `service_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service_types
-- ----------------------------
INSERT INTO `service_types` VALUES (1, 'reserve', 0, NULL, NULL);

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `service_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 144 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 1, NULL, NULL);
INSERT INTO `services` VALUES (2, 1, NULL, NULL);
INSERT INTO `services` VALUES (3, 1, NULL, NULL);
INSERT INTO `services` VALUES (88, 1, '2019-04-16 13:34:12', '2019-04-16 13:34:12');
INSERT INTO `services` VALUES (89, 1, '2019-04-16 14:52:12', '2019-04-16 14:52:12');
INSERT INTO `services` VALUES (90, 1, '2019-04-26 04:00:35', '2019-04-26 04:00:35');
INSERT INTO `services` VALUES (91, 1, '2019-04-26 04:52:16', '2019-04-26 04:52:16');
INSERT INTO `services` VALUES (92, 1, '2019-04-26 04:54:10', '2019-04-26 04:54:10');
INSERT INTO `services` VALUES (93, 1, '2019-04-26 05:07:51', '2019-04-26 05:07:51');
INSERT INTO `services` VALUES (94, 1, '2019-04-26 05:08:33', '2019-04-26 05:08:33');
INSERT INTO `services` VALUES (95, 1, '2019-04-26 05:09:16', '2019-04-26 05:09:16');
INSERT INTO `services` VALUES (96, 1, '2019-04-26 05:47:23', '2019-04-26 05:47:23');
INSERT INTO `services` VALUES (97, 1, '2019-04-26 05:48:29', '2019-04-26 05:48:29');
INSERT INTO `services` VALUES (98, 1, '2019-04-26 05:51:02', '2019-04-26 05:51:02');
INSERT INTO `services` VALUES (99, 1, '2019-04-26 05:57:01', '2019-04-26 05:57:01');
INSERT INTO `services` VALUES (100, 1, '2019-04-26 05:57:15', '2019-04-26 05:57:15');
INSERT INTO `services` VALUES (101, 1, '2019-04-26 15:32:41', '2019-04-26 15:32:41');
INSERT INTO `services` VALUES (102, 1, '2019-04-26 15:34:19', '2019-04-26 15:34:19');
INSERT INTO `services` VALUES (103, 1, '2019-04-26 15:37:06', '2019-04-26 15:37:06');
INSERT INTO `services` VALUES (104, 1, '2019-04-26 15:38:58', '2019-04-26 15:38:58');
INSERT INTO `services` VALUES (105, 1, '2019-04-26 21:48:37', '2019-04-26 21:48:37');
INSERT INTO `services` VALUES (106, 1, '2019-04-26 21:50:23', '2019-04-26 21:50:23');
INSERT INTO `services` VALUES (107, 1, '2019-04-26 21:50:51', '2019-04-26 21:50:51');
INSERT INTO `services` VALUES (108, 1, '2019-04-26 22:00:23', '2019-04-26 22:00:23');
INSERT INTO `services` VALUES (109, 1, '2019-04-26 22:02:10', '2019-04-26 22:02:10');
INSERT INTO `services` VALUES (110, 1, '2019-04-26 22:03:26', '2019-04-26 22:03:26');
INSERT INTO `services` VALUES (111, 1, '2019-04-26 22:20:29', '2019-04-26 22:20:29');
INSERT INTO `services` VALUES (112, 1, '2019-04-26 23:56:45', '2019-04-26 23:56:45');
INSERT INTO `services` VALUES (113, 1, '2019-04-27 01:44:10', '2019-04-27 01:44:10');
INSERT INTO `services` VALUES (114, 1, '2019-04-27 01:45:53', '2019-04-27 01:45:53');
INSERT INTO `services` VALUES (115, 1, '2019-04-27 03:18:06', '2019-04-27 03:18:06');
INSERT INTO `services` VALUES (116, 1, '2019-04-27 03:19:38', '2019-04-27 03:19:38');
INSERT INTO `services` VALUES (117, 1, '2019-04-27 03:20:03', '2019-04-27 03:20:03');
INSERT INTO `services` VALUES (118, 1, '2019-04-27 03:27:26', '2019-04-27 03:27:26');
INSERT INTO `services` VALUES (119, 1, '2019-04-27 03:28:31', '2019-04-27 03:28:31');
INSERT INTO `services` VALUES (120, 1, '2019-04-27 03:30:34', '2019-04-27 03:30:34');
INSERT INTO `services` VALUES (121, 1, '2019-04-27 03:44:19', '2019-04-27 03:44:19');
INSERT INTO `services` VALUES (122, 1, '2019-04-27 03:45:05', '2019-04-27 03:45:05');
INSERT INTO `services` VALUES (123, 1, '2019-04-27 03:45:41', '2019-04-27 03:45:41');
INSERT INTO `services` VALUES (124, 1, '2019-04-27 04:35:42', '2019-04-27 04:35:42');
INSERT INTO `services` VALUES (125, 1, '2019-04-27 04:36:14', '2019-04-27 04:36:14');
INSERT INTO `services` VALUES (126, 1, '2019-04-27 04:56:53', '2019-04-27 04:56:53');
INSERT INTO `services` VALUES (127, 1, '2019-04-27 05:06:24', '2019-04-27 05:06:24');
INSERT INTO `services` VALUES (128, 1, '2019-04-27 19:32:54', '2019-04-27 19:32:54');
INSERT INTO `services` VALUES (129, 1, '2019-04-27 23:13:57', '2019-04-27 23:13:57');
INSERT INTO `services` VALUES (130, 1, '2019-04-28 01:13:19', '2019-04-28 01:13:19');
INSERT INTO `services` VALUES (131, 1, '2019-04-28 19:24:12', '2019-04-28 19:24:12');
INSERT INTO `services` VALUES (132, 1, '2019-04-28 20:46:28', '2019-04-28 20:46:28');
INSERT INTO `services` VALUES (133, 1, '2019-04-28 22:51:51', '2019-04-28 22:51:51');
INSERT INTO `services` VALUES (134, 1, '2019-04-29 00:44:05', '2019-04-29 00:44:05');
INSERT INTO `services` VALUES (135, 1, '2019-04-29 02:14:50', '2019-04-29 02:14:50');
INSERT INTO `services` VALUES (136, 1, '2019-04-29 02:27:14', '2019-04-29 02:27:14');
INSERT INTO `services` VALUES (137, 1, '2019-04-29 02:53:15', '2019-04-29 02:53:15');
INSERT INTO `services` VALUES (138, 1, '2019-04-29 02:54:03', '2019-04-29 02:54:03');
INSERT INTO `services` VALUES (139, 1, '2019-04-29 03:04:21', '2019-04-29 03:04:21');
INSERT INTO `services` VALUES (140, 1, '2019-04-29 03:06:34', '2019-04-29 03:06:34');
INSERT INTO `services` VALUES (141, 1, '2019-04-29 03:10:22', '2019-04-29 03:10:22');
INSERT INTO `services` VALUES (142, 1, '2019-04-29 03:39:33', '2019-04-29 03:39:33');
INSERT INTO `services` VALUES (143, 1, '2019-04-29 05:22:22', '2019-04-29 05:22:22');

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
  `value` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 65 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES (1, 'en', 'data_assigned_properties', 'value', 32, 'room number 5 desription .', NULL, NULL);
INSERT INTO `translations` VALUES (12, 'en', 'data_properties', 'title', 3, 'عنوان', NULL, NULL);
INSERT INTO `translations` VALUES (13, 'en', 'data_assigned_properties', 'value', 161, 'سوییت 65 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `translations` VALUES (14, 'ar', 'data_assigned_properties', 'value', 161, 'سوییت 65 متري 5 نفره نوع A', NULL, NULL);
INSERT INTO `translations` VALUES (15, 'en', 'data_assigned_properties', 'value', 162, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (16, 'ar', 'data_assigned_properties', 'value', 162, NULL, NULL, NULL);
INSERT INTO `translations` VALUES (17, 'en', 'data_assigned_properties', 'value', 166, 'سوییت 65 متري 4 نفره نوع B', NULL, NULL);
INSERT INTO `translations` VALUES (18, 'ar', 'data_assigned_properties', 'value', 166, 'سوییت 65 متري 4 نفره نوع B', NULL, NULL);
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
) ENGINE = InnoDB AUTO_INCREMENT = 398 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_assigned_properties
-- ----------------------------
INSERT INTO `user_assigned_properties` VALUES (1, 1, 5, 'کامران صابری فرد', NULL, NULL);
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
INSERT INTO `user_assigned_properties` VALUES (16, 8, 1, 'کامران', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (17, 8, 2, 'صابری', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (18, 8, 3, '2708354108', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (19, 8, 4, '+981342547909', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (20, 8, 6, '+989365982333', NULL, NULL);
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
INSERT INTO `user_assigned_properties` VALUES (396, 101, 4, '1234785', NULL, NULL);
INSERT INTO `user_assigned_properties` VALUES (397, 101, 6, '1234785', NULL, NULL);

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
  `user_type` int(10) UNSIGNED NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_properties
-- ----------------------------
INSERT INTO `user_properties` VALUES (1, 'name', '-', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `user_properties` VALUES (2, 'family', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `user_properties` VALUES (3, 'ssn', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `user_properties` VALUES (4, 'phone', '', 'text', 1, 2, 0, NULL, NULL);
INSERT INTO `user_properties` VALUES (5, 'name', '', 'text', 1, 1, 0, NULL, NULL);
INSERT INTO `user_properties` VALUES (6, 'mobile', '', 'text', 1, 2, 0, NULL, NULL);

-- ----------------------------
-- Table structure for user_types
-- ----------------------------
DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user_types
-- ----------------------------
INSERT INTO `user_types` VALUES (1, 'user', 0, NULL, NULL);
INSERT INTO `user_types` VALUES (2, 'customer', 0, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_type` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 102 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 1, 'kamisaberi@yahoo.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', 'od37yBZGcxGfxKQWO7dD8OvheHp2xD3OBUXQIsazj6UnZ5N77nc5jLfudXAV', NULL, NULL);
INSERT INTO `users` VALUES (6, 1, 'reza@rez.com', NULL, '$2y$10$4rP8FBD7efV40gPB3SNcs.bMcH0vx5Rixf5zf6UybO6AxwKhbZRlC', NULL, NULL, NULL);
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
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of widget_parts
-- ----------------------------
INSERT INTO `widget_parts` VALUES (1, 1, 2, 'widgets.data.room', NULL, NULL);
INSERT INTO `widget_parts` VALUES (3, 2, 2, 'widgets.users.user', NULL, NULL);
INSERT INTO `widget_parts` VALUES (4, 3, 2, 'widgets.users.customer', NULL, NULL);
INSERT INTO `widget_parts` VALUES (5, 4, 2, 'widgets.data.property', NULL, NULL);
INSERT INTO `widget_parts` VALUES (6, 5, 2, 'widgets.documents.document', NULL, NULL);
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
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
INSERT INTO `widgets` VALUES (13, 'public.document', 'home.document.all', 4, 1, NULL, NULL);
INSERT INTO `widgets` VALUES (14, 'public.document', 'home.document.all', 4, 6, NULL, NULL);
INSERT INTO `widgets` VALUES (15, 'public.document', 'home.document.all', 4, 7, NULL, NULL);
INSERT INTO `widgets` VALUES (16, 'public.document', 'home.document.all', 4, 8, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
