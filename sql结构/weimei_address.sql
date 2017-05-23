/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:13:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_address
-- ----------------------------
DROP TABLE IF EXISTS `weimei_address`;
CREATE TABLE `weimei_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` varchar(100) DEFAULT NULL,
  `qu` varchar(20) DEFAULT NULL COMMENT '市内六区',
  `address` varchar(200) DEFAULT NULL COMMENT '详细地址',
  `postcode` varchar(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `display` int(11) DEFAULT '0' COMMENT '1 默认地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=gbk;
