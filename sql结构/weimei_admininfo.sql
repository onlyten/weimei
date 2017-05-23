/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:13:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_admininfo
-- ----------------------------
DROP TABLE IF EXISTS `weimei_admininfo`;
CREATE TABLE `weimei_admininfo` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) DEFAULT NULL COMMENT '用户名',
  `password` varchar(35) DEFAULT NULL COMMENT '密码',
  `type` varchar(10) DEFAULT NULL COMMENT '1:超级管理员 2：一般管理员',
  `addtime` varchar(35) DEFAULT NULL COMMENT '添加时间',
  `updatetime` varchar(35) DEFAULT NULL COMMENT '上次修改密码时间',
  `isdelete` varchar(10) DEFAULT '0' COMMENT '0：没删 1：删除',
  `wxid` varchar(100) DEFAULT NULL COMMENT '微信id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;
