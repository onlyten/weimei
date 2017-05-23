/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:14:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_dingdan
-- ----------------------------
DROP TABLE IF EXISTS `weimei_dingdan`;
CREATE TABLE `weimei_dingdan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `coins` varchar(32) DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL,
  `wxid` varchar(64) DEFAULT NULL,
  `mei_id` varchar(11) DEFAULT NULL COMMENT '项目id',
  `order_id` varchar(32) DEFAULT NULL COMMENT '订单号',
  `type` int(11) DEFAULT NULL COMMENT '上门(0）到院（1）',
  `state` int(11) DEFAULT '0' COMMENT '0默认   1取消    2未服务    3完成',
  `addtime` varchar(32) DEFAULT NULL COMMENT '下单时间',
  `updatetime` varchar(32) DEFAULT NULL COMMENT '修改时间',
  `checktime` int(20) DEFAULT NULL COMMENT '完成时间',
  `time` varchar(32) DEFAULT NULL COMMENT '预约时间',
  `hkeeperid` varchar(32) DEFAULT NULL COMMENT '美丽管家id',
  `isdelete` varchar(5) DEFAULT '0' COMMENT '0：否； 1：删除',
  `isend` varchar(8) DEFAULT '0' COMMENT '订单是否完成 0默认  1取消  2完成',
  `xiaofei` varchar(100) DEFAULT NULL COMMENT '实付金额',
  `successor` varchar(11) DEFAULT '0' COMMENT '是否支付成功，0默认(失败)，1成功',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=398 DEFAULT CHARSET=gbk;
