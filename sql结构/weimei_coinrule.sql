/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:14:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_coinrule
-- ----------------------------
DROP TABLE IF EXISTS `weimei_coinrule`;
CREATE TABLE `weimei_coinrule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coins` int(11) DEFAULT NULL COMMENT '兑换的唯美币',
  `timeto` int(30) DEFAULT NULL COMMENT '截止时间',
  `updatetime` varchar(30) DEFAULT NULL COMMENT '更新时间',
  `type` varchar(11) DEFAULT NULL COMMENT '0：签到  2:充值',
  `addtime` varchar(30) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk;
