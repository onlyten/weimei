/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:15:27
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
