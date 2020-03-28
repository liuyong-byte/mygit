/*
 Navicat Premium Data Transfer

 Source Server         : c
 Source Server Type    : MySQL
 Source Server Version : 50560
 Source Host           : localhost:3306
 Source Schema         : admin

 Target Server Type    : MySQL
 Target Server Version : 50560
 File Encoding         : 65001

 Date: 28/03/2020 16:58:42
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admer1
-- ----------------------------
DROP TABLE IF EXISTS `admer1`;
CREATE TABLE `admer1`  (
  `admer2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admer1
-- ----------------------------
INSERT INTO `admer1` VALUES ('q1256230450', 'liuyong19990519');

-- ----------------------------
-- Table structure for d
-- ----------------------------
DROP TABLE IF EXISTS `d`;
CREATE TABLE `d`  (
  `id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mibao` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d
-- ----------------------------
INSERT INTO `d` VALUES ('15180911472', 'asdfgh', '123456');
INSERT INTO `d` VALUES ('15842932508', '123456', '123456');
INSERT INTO `d` VALUES ('15645646000', '123456', '123');
INSERT INTO `d` VALUES ('12345612345', '123456', '123456');
INSERT INTO `d` VALUES ('12121211111', '123456', '123456');
INSERT INTO `d` VALUES ('12312312311', 'qwerty', '123456');
INSERT INTO `d` VALUES ('12212212211', '123456', '123456');
INSERT INTO `d` VALUES ('11111122222', '123456', '123456');
INSERT INTO `d` VALUES ('15180911572', 'asdass', 'daswqw');
INSERT INTO `d` VALUES ('\'15180911472\'', '\'123456\'', '\'123456\'');
INSERT INTO `d` VALUES ('15180911473', '123456', '123456');
INSERT INTO `d` VALUES ('15180911471', '123456', '123456');
INSERT INTO `d` VALUES ('15180901472', '123456', '123456');
INSERT INTO `d` VALUES ('15180911474', '123456', '123456');
INSERT INTO `d` VALUES ('15180911477', '123456', '123456');
INSERT INTO `d` VALUES ('12345678911', '123456', '123456');

-- ----------------------------
-- Table structure for fz
-- ----------------------------
DROP TABLE IF EXISTS `fz`;
CREATE TABLE `fz`  (
  `fzname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fztupian` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fzprice` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `fid` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of fz
-- ----------------------------
INSERT INTO `fz` VALUES ('dx1.jpg', '狮子', '10', '2');
INSERT INTO `fz` VALUES ('dx2.jpg', '悟空', '10', '2');
INSERT INTO `fz` VALUES ('dx3.jpg', '短袖', '10', '2');
INSERT INTO `fz` VALUES ('ck1.jpg', '长裤', '20', '1');
INSERT INTO `fz` VALUES ('my3.jpg', '毛衣3', '20', '4');
INSERT INTO `fz` VALUES ('ck2.jpg', '长裤2', '20', '1');
INSERT INTO `fz` VALUES ('ck3.jpg', '长裤3', '20', '1');
INSERT INTO `fz` VALUES ('dxnv1.jpg', '短袖1', '12', '3');
INSERT INTO `fz` VALUES ('qipao.jpg', '旗袍', '500', NULL);
INSERT INTO `fz` VALUES ('my2.jpg', '毛衣2', '15', '4');
INSERT INTO `fz` VALUES ('my1.jpg', '毛衣1', '15', '4');
INSERT INTO `fz` VALUES ('mynv1.jpg', '女毛衣1', '30', '5');
INSERT INTO `fz` VALUES ('mynv2.jpg', '女毛衣2', '30', '5');
INSERT INTO `fz` VALUES ('mynv3.jpg', '女毛衣3', '30', '5');
INSERT INTO `fz` VALUES ('etnk1.jpg', '儿童内1', '35', '6');
INSERT INTO `fz` VALUES ('etnk2.jpg', '儿童内2', '35', '6');
INSERT INTO `fz` VALUES ('etnk3.jpg', '儿童内3', '35', '6');
INSERT INTO `fz` VALUES ('nk1.jpg', '内裤男1', '40', '7');
INSERT INTO `fz` VALUES ('nk2.jpg', '内裤男2', '40', '7');
INSERT INTO `fz` VALUES ('nk3.jpg', '内裤男3', '40', '7');
INSERT INTO `fz` VALUES ('qz1.jpg', '裙子女1', '200', '8');
INSERT INTO `fz` VALUES ('qz2.jpg', '裙子女2', '200', '8');
INSERT INTO `fz` VALUES ('qz3.jpg', '裙子女3', '500', '8');
INSERT INTO `fz` VALUES ('Capture001.png', '美人鱼', '2000', NULL);
INSERT INTO `fz` VALUES ('dxnv2.jpg', '短袖2', '12', '3');
INSERT INTO `fz` VALUES ('dxnv3.jpg', '短袖3', '12', '3');
INSERT INTO `fz` VALUES ('qipao2.jpg', '旗袍2', '500', '1');

-- ----------------------------
-- Table structure for fzl
-- ----------------------------
DROP TABLE IF EXISTS `fzl`;
CREATE TABLE `fzl`  (
  `fid` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`fid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of fzl
-- ----------------------------
INSERT INTO `fzl` VALUES ('1', '长裤');
INSERT INTO `fzl` VALUES ('2', '短袖');
INSERT INTO `fzl` VALUES ('3', '短袖女');
INSERT INTO `fzl` VALUES ('4', '毛衣男');
INSERT INTO `fzl` VALUES ('5', '毛衣女');
INSERT INTO `fzl` VALUES ('6', '儿童内');
INSERT INTO `fzl` VALUES ('7', '内裤男');
INSERT INTO `fzl` VALUES ('8', '裙子女');

-- ----------------------------
-- Table structure for history
-- ----------------------------
DROP TABLE IF EXISTS `history`;
CREATE TABLE `history`  (
  `hname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hshop` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hprice` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `htime` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of history
-- ----------------------------
INSERT INTO `history` VALUES ('', '长裤', '20', '2019-10-15 19:35:14');
INSERT INTO `history` VALUES ('', '长裤2', '20', '2019-10-15 19:35:59');
INSERT INTO `history` VALUES ('15180911472', '长裤', '20', '2019-10-15 19:39:52');
INSERT INTO `history` VALUES ('15180911472', '狮子', '10', '2019-11-06 17:01:53');
INSERT INTO `history` VALUES ('15180911472', '长裤2', '20', '2019-11-07 09:38:48');
INSERT INTO `history` VALUES ('15180911472', '短袖', '10', '2019-11-08 18:43:34');
INSERT INTO `history` VALUES ('12121211111', '长裤', '20', '2019-11-08 18:46:10');
INSERT INTO `history` VALUES ('15180911472', '长裤', '20', '2019-11-10 11:48:05');
INSERT INTO `history` VALUES ('12312312311', '狮子', '10', '2019-11-11 19:21:18');
INSERT INTO `history` VALUES ('15180911472', '长裤', '20', '2019-11-12 08:32:52');
INSERT INTO `history` VALUES ('12212212211', '长裤', '20', '2019-11-12 09:15:23');
INSERT INTO `history` VALUES ('15180911472', '长裤', '20', '2019-11-12 10:24:17');
INSERT INTO `history` VALUES ('15180911472', '毛衣3', '20', '2019-11-12 10:25:40');
INSERT INTO `history` VALUES ('11111122222', '悟空', '10', '2019-11-12 10:45:26');
INSERT INTO `history` VALUES ('11111122222', '悟空', '10', '2019-11-12 12:07:14');
INSERT INTO `history` VALUES ('15180911472', '狮子', '10', '2020-03-11 11:55:03');
INSERT INTO `history` VALUES ('15180911472', '狮子', '10', '2020-03-28 16:34:51');

-- ----------------------------
-- Table structure for qianbao
-- ----------------------------
DROP TABLE IF EXISTS `qianbao`;
CREATE TABLE `qianbao`  (
  `id` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sum` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of qianbao
-- ----------------------------
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('12121211111', '80');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('12312312311', '90');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('12212212211', '80');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('11111122222', '80');
INSERT INTO `qianbao` VALUES ('11111122222', '80');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');
INSERT INTO `qianbao` VALUES ('15180911472', '-40');

-- ----------------------------
-- Table structure for scj
-- ----------------------------
DROP TABLE IF EXISTS `scj`;
CREATE TABLE `scj`  (
  `sname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `smz` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of scj
-- ----------------------------
INSERT INTO `scj` VALUES ('15180911472', '短袖');

-- ----------------------------
-- Table structure for things
-- ----------------------------
DROP TABLE IF EXISTS `things`;
CREATE TABLE `things`  (
  `tname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thing` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of things
-- ----------------------------
INSERT INTO `things` VALUES ('长裤', '			\r\n		32');
INSERT INTO `things` VALUES ('15180911472', '123');
INSERT INTO `things` VALUES ('15180911472', '123456');
INSERT INTO `things` VALUES ('12121211111', '121212');

SET FOREIGN_KEY_CHECKS = 1;
