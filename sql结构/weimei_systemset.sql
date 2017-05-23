/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:15:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_systemset
-- ----------------------------
DROP TABLE IF EXISTS `weimei_systemset`;
CREATE TABLE `weimei_systemset` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统设置的自增id',
  `phone` varchar(32) DEFAULT NULL COMMENT '联系电话',
  `hourok` int(32) DEFAULT NULL COMMENT '预约提前多少小时',
  `hourcancle` int(32) DEFAULT NULL COMMENT '预约取消需提前多长时间',
  `timefrom` varchar(32) DEFAULT NULL COMMENT '服务开始时间',
  `timeto` varchar(32) DEFAULT NULL COMMENT '服务结束时间',
  `updatetime` varchar(32) DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;
