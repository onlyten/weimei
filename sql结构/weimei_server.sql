/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:15:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_server
-- ----------------------------
DROP TABLE IF EXISTS `weimei_server`;
CREATE TABLE `weimei_server` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_name` varchar(32) DEFAULT NULL,
  `server_weight` double(11,0) DEFAULT NULL,
  `server_img` varchar(32) DEFAULT NULL,
  `server_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;
