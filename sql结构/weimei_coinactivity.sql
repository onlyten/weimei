/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:14:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_coinactivity
-- ----------------------------
DROP TABLE IF EXISTS `weimei_coinactivity`;
CREATE TABLE `weimei_coinactivity` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `title` varchar(32) DEFAULT NULL COMMENT '标题',
  `introduction` varchar(150) DEFAULT NULL COMMENT '简介',
  `coin` varchar(11) DEFAULT NULL COMMENT '活动赠送唯美币',
  `timelong` int(30) DEFAULT NULL COMMENT '活动有效期',
  `addtime` varchar(20) DEFAULT NULL COMMENT '活动新增时间',
  `updatetime` varchar(20) DEFAULT NULL COMMENT '活动修改时间',
  `isdelete` varchar(5) DEFAULT NULL COMMENT '是否删除',
  `acurl` varchar(150) DEFAULT NULL COMMENT '活动url',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=gbk;
