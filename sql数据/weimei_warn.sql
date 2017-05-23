/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:32:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_warn
-- ----------------------------
DROP TABLE IF EXISTS `weimei_warn`;
CREATE TABLE `weimei_warn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dingdan_id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `warn` varchar(256) DEFAULT NULL COMMENT '提醒',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of weimei_warn
-- ----------------------------
INSERT INTO `weimei_warn` VALUES ('1', '21', '4', 'sa');
INSERT INTO `weimei_warn` VALUES ('2', '9', '4', '破手机哦而恐怕法规科帕卡如果他');
INSERT INTO `weimei_warn` VALUES ('6', '19', '4', 'ww');
INSERT INTO `weimei_warn` VALUES ('7', '92', '17', '0000');
INSERT INTO `weimei_warn` VALUES ('8', '243', '34', '251');
INSERT INTO `weimei_warn` VALUES ('9', '93', '17', 'sssss');
INSERT INTO `weimei_warn` VALUES ('5', '21', '4', 'sa');
INSERT INTO `weimei_warn` VALUES ('10', '343', '34', '测试');
INSERT INTO `weimei_warn` VALUES ('11', '364', '34', '测试测试测试测试测试测试测试测试测试测试测试测试测试测试测试');
