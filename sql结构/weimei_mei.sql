/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:15:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_mei
-- ----------------------------
DROP TABLE IF EXISTS `weimei_mei`;
CREATE TABLE `weimei_mei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mei_name` varchar(32) DEFAULT NULL,
  `jianjie` varchar(1000) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sales` int(11) DEFAULT NULL,
  `pic_title` varchar(32) DEFAULT NULL,
  `pic_item` varchar(60) DEFAULT NULL,
  `czbz` varchar(1000) DEFAULT NULL,
  `goods_display` varchar(1000) DEFAULT NULL,
  `timelong` int(11) DEFAULT NULL,
  `cishu` int(11) DEFAULT NULL,
  `people` varchar(256) DEFAULT NULL,
  `notice` varchar(512) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `server_id` int(11) DEFAULT NULL,
  `jifen` int(11) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL,
  `time` varchar(32) DEFAULT NULL,
  `oldprice` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=gbk;
