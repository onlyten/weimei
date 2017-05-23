/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:16:03
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
