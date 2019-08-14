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

 Date: 30/06/2019 13:27:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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

SET FOREIGN_KEY_CHECKS = 1;
