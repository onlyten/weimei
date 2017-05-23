/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-25 19:58:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ronge_carddetail
-- ----------------------------
DROP TABLE IF EXISTS `ronge_carddetail`;
CREATE TABLE `ronge_carddetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_num` varchar(20) DEFAULT '' COMMENT '卡号',
  `month` varchar(11) DEFAULT '' COMMENT '月份',
  `date` varchar(20) DEFAULT '' COMMENT '日期',
  `money` double(20,2) DEFAULT NULL COMMENT '消费金额',
  `phone` varchar(20) DEFAULT '',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `jine` double(20,2) DEFAULT '0.00' COMMENT '年份',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12140 DEFAULT CHARSET=gbk;
