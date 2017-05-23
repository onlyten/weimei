/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-25 19:59:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ronge_cardlist
-- ----------------------------
DROP TABLE IF EXISTS `ronge_cardlist`;
CREATE TABLE `ronge_cardlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) DEFAULT '',
  `bank_name` varchar(20) DEFAULT '' COMMENT '银行名字',
  `card_num` varchar(20) DEFAULT '' COMMENT '卡号',
  `endate` varchar(20) DEFAULT NULL COMMENT '最后还款日',
  `limit1` double(11,3) DEFAULT '0.000' COMMENT '额度',
  `qiankuan` double(20,2) DEFAULT '0.00' COMMENT '本期欠款',
  `time` int(20) DEFAULT '0',
  `lowest` double(20,2) DEFAULT '0.00' COMMENT '最低还款',
  `czdate` varchar(20) DEFAULT '' COMMENT '出账日期',
  `zhouqi` varchar(30) DEFAULT '' COMMENT '账单周期',
  `mianxi` varchar(30) DEFAULT '' COMMENT '刷卡免息',
  `name` varchar(20) DEFAULT '' COMMENT '持卡人姓名',
  `email` varchar(50) DEFAULT '' COMMENT '邮箱',
  `password` varchar(50) DEFAULT '' COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3412 DEFAULT CHARSET=gbk;
