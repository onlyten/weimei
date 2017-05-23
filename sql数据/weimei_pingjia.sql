/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:31:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_pingjia
-- ----------------------------
DROP TABLE IF EXISTS `weimei_pingjia`;
CREATE TABLE `weimei_pingjia` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(18) DEFAULT NULL,
  `service` int(8) DEFAULT NULL,
  `product` int(8) DEFAULT NULL,
  `effect` int(8) DEFAULT NULL,
  `whole` int(8) DEFAULT NULL,
  `mark` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of weimei_pingjia
-- ----------------------------
INSERT INTO `weimei_pingjia` VALUES ('40', 'EC22658495089145', '5', '5', '5', '4', '龙井里');
INSERT INTO `weimei_pingjia` VALUES ('41', 'EC22663842459110', '5', '5', '5', '5', '你好');
INSERT INTO `weimei_pingjia` VALUES ('42', '', '0', '0', '0', '0', '');
INSERT INTO `weimei_pingjia` VALUES ('43', 'EC22663842459110', '5', '5', '5', '5', '你好');
INSERT INTO `weimei_pingjia` VALUES ('44', 'EC22663842459110', '5', '5', '5', '5', '你好');
INSERT INTO `weimei_pingjia` VALUES ('45', 'EC22672320668194', '5', '5', '5', '5', '馍馍');
INSERT INTO `weimei_pingjia` VALUES ('46', 'EC23355818476544', '5', '5', '5', '5', '你啦');
INSERT INTO `weimei_pingjia` VALUES ('47', 'EC23357852258171', '5', '5', '5', '5', '哦哦');
INSERT INTO `weimei_pingjia` VALUES ('48', 'EC23357852258171', '5', '5', '5', '5', '哦哦');
INSERT INTO `weimei_pingjia` VALUES ('49', 'EC23334739058364', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('50', 'EC23359746728253', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('51', 'EC23359746728253', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('52', 'EC23359746728253', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('53', 'EC23359746728253', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('54', 'EC23359746728253', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('55', 'EC25072498574476', '4', '5', '4', '4', '');
INSERT INTO `weimei_pingjia` VALUES ('56', '', '0', '0', '0', '0', '');
INSERT INTO `weimei_pingjia` VALUES ('57', 'EC23543795440149', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('58', 'EC25075526109646', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('59', 'EC25432272549886', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('60', 'EC25432272549886', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('61', 'EC26703930252277', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('62', 'EC27870537982558', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('63', 'EC27877207649346', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('64', 'EC28661400921084', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('65', '', '0', '0', '0', '0', '');
INSERT INTO `weimei_pingjia` VALUES ('66', 'EC31466996925610', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('67', 'EC31484107083008', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('68', 'F107473705557556', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('69', 'F114537351574991', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('70', 'F114623164064533', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('71', 'F116152932006684', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('72', 'F116157085257079', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('73', 'F114620909997325', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('74', 'F107492010629352', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('75', 'F114613901619047', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('76', 'F107496948367401', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('77', 'F107496948367401', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('78', 'F107503881136169', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('79', 'F119632970126225', '5', '5', '5', '5', '很好');
INSERT INTO `weimei_pingjia` VALUES ('80', 'F114609578178973', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('81', 'F114609578178973', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('82', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('83', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('84', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('85', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('86', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('87', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('88', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('89', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('90', 'F119811778592097', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('91', 'F119955935488946', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('92', 'F119955935488946', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('93', 'F120530560929057', '5', '5', '5', '5', '');
INSERT INTO `weimei_pingjia` VALUES ('94', 'F120531922588012', '5', '5', '5', '5', '');
