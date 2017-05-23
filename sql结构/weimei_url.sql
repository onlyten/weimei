/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:15:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_url
-- ----------------------------
DROP TABLE IF EXISTS `weimei_url`;
CREATE TABLE `weimei_url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(150) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL COMMENT '1:活动路径 2：特权路径',
  `updatetime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk;
