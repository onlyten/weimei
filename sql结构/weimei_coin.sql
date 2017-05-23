/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:14:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_coin
-- ----------------------------
DROP TABLE IF EXISTS `weimei_coin`;
CREATE TABLE `weimei_coin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` varchar(30) DEFAULT NULL,
  `coinrule_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `usee` int(11) DEFAULT '0',
  `nouse` int(11) DEFAULT NULL,
  `coinactivity_id` int(11) DEFAULT NULL,
  `timeto` int(11) DEFAULT NULL,
  `usetime` int(11) DEFAULT NULL,
  `type` int(4) DEFAULT '0' COMMENT '3:充值记录',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=gbk;
