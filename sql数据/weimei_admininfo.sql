/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:30:54
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

-- ----------------------------
-- Records of weimei_admininfo
-- ----------------------------
INSERT INTO `weimei_admininfo` VALUES ('1', 'weimei', 'weimei', '1', '15-12-18 14:12:25', null, '0', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM');
INSERT INTO `weimei_admininfo` VALUES ('2', '18718718718', '718718', '2', '15-12-18 14:13:47', '15-12-18 16:12:34', '0', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4');
INSERT INTO `weimei_admininfo` VALUES ('3', '11', '22', '2', '15-12-18 02:14:01', null, '1', '');
INSERT INTO `weimei_admininfo` VALUES ('4', '111', '11', '2', '15-12-18 14:18:50', null, '1', null);
INSERT INTO `weimei_admininfo` VALUES ('6', 'ee', 'ee', '2', '16-01-04 09:43:21', null, '0', null);
INSERT INTO `weimei_admininfo` VALUES ('7', 'chenwei', 'chenwei', '2', '16-01-08 10:37:03', null, '0', 'oNyT2t2w3iowX5b99LRDivog3O78');
