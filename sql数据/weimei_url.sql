/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:32:31
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

-- ----------------------------
-- Records of weimei_url
-- ----------------------------
INSERT INTO `weimei_url` VALUES ('1', 'http://mp.weixin.qq.com/s?__biz=MzA4NjM2MTY1NQ==&amp;mid=401618927&amp;idx=1&amp;sn=e993cb788cff229be13febb6d32e40b1#rd', '1', '15-12-29 18:12:52');
INSERT INTO `weimei_url` VALUES ('2', 'http://mp.weixin.qq.com/s?__biz=MzA4NjM2MTY1NQ==&mid=401681561&idx=1&sn=2d3098ebef828bc4d77d20c717865b69#rd', '2', '15-12-18 17:12:53');
