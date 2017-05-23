/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:14:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_housekeeper
-- ----------------------------
DROP TABLE IF EXISTS `weimei_housekeeper`;
CREATE TABLE `weimei_housekeeper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_num` varchar(32) DEFAULT NULL COMMENT '工号',
  `name` varchar(32) DEFAULT NULL COMMENT '姓名',
  `title` varchar(32) DEFAULT NULL COMMENT '职称等级',
  `pic_tou` varchar(32) DEFAULT NULL COMMENT '头像',
  `pic_xing` varchar(256) DEFAULT NULL COMMENT '形象照',
  `xueli` varchar(32) DEFAULT NULL COMMENT '学历',
  `zzzs` varchar(512) DEFAULT NULL COMMENT '资质证书',
  `pingjia` int(11) DEFAULT NULL COMMENT '客户评价',
  `cishu` int(11) DEFAULT NULL COMMENT '累计服务人次',
  `dashang` int(20) DEFAULT NULL COMMENT '顾客打赏',
  `rzjl` varchar(512) DEFAULT NULL COMMENT '任职经历',
  `scxm` varchar(512) DEFAULT NULL COMMENT '擅长项目',
  `type` varchar(11) DEFAULT NULL COMMENT '0院内 1院外',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk;
