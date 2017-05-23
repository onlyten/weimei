/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:15:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_login
-- ----------------------------
DROP TABLE IF EXISTS `weimei_login`;
CREATE TABLE `weimei_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(18) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(11) DEFAULT NULL,
  `wxid` varchar(32) DEFAULT NULL,
  `level` int(11) DEFAULT '1' COMMENT '会员等级 1暂无 2.闺蜜卡3.潜力卡4.维美女人卡5.魅力女人卡6.精致女人卡7.完美女人卡',
  `card_num` varchar(32) DEFAULT '' COMMENT '维美卡号',
  `member` int(11) DEFAULT NULL COMMENT '是否线下会员',
  `yue` int(11) DEFAULT '0' COMMENT '账户余额',
  `xiaofei` int(11) DEFAULT NULL COMMENT '账户累计消费',
  `time` varchar(32) DEFAULT NULL,
  `postcode` varchar(11) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `isdelete` varchar(10) DEFAULT '0' COMMENT '是否删除',
  `qu` varchar(18) DEFAULT NULL COMMENT '所在区',
  `img` varchar(200) DEFAULT NULL,
  `note` varchar(1000) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=gbk;
