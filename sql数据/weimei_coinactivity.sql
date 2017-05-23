/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:31:12
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

-- ----------------------------
-- Records of weimei_coinactivity
-- ----------------------------
INSERT INTO `weimei_coinactivity` VALUES ('1', '1', '1', '2', '2', '15-12-10 11:15:27', null, '1', null);
INSERT INTO `weimei_coinactivity` VALUES ('2', '11天亮好个秋啊十三岁傻傻赛飒飒US奥萨', '11天亮好个秋啊十三岁傻傻赛飒飒US奥萨', '11', '11', '15-12-10 02:05:15', null, '1', null);
INSERT INTO `weimei_coinactivity` VALUES ('3', '22', '22', '22', '22', '15-12-10 02:16:58', null, '1', null);
INSERT INTO `weimei_coinactivity` VALUES ('4', '33', '33', '33', '33', '15-12-10 02:19:02', null, '1', null);
INSERT INTO `weimei_coinactivity` VALUES ('5', '33', '33', '33', '33', '15-12-10 02:21:12', null, '1', null);
INSERT INTO `weimei_coinactivity` VALUES ('6', '11', '					11', '11', '1450108800', '15-12-10 04:22:49', '15-12-10 05:07:07', '1', 'http://www.baidu.com');
INSERT INTO `weimei_coinactivity` VALUES ('7', '11', '11', '11', '1450454400', '15-12-17 01:54:25', null, '1', '/7');
INSERT INTO `weimei_coinactivity` VALUES ('8', '22', '22', '22', '1450195200', '15-12-17 01:55:30', null, '1', '/weimei/index.php/Admin/Coinac');
INSERT INTO `weimei_coinactivity` VALUES ('9', '11', '11', '11', '1449590400', '15-12-17 02:05:14', null, '1', '/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/9');
INSERT INTO `weimei_coinactivity` VALUES ('10', '22', '22', '22', '1450368000', '15-12-17 02:19:45', null, '1', '/10');
INSERT INTO `weimei_coinactivity` VALUES ('11', '22', '										22', '22', '1449504000', '15-12-17 02:21:12', '2015-12-17', '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/11');
INSERT INTO `weimei_coinactivity` VALUES ('12', '1', '1', '1', '1454349722', '15-12-17 02:28:33', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/8');
INSERT INTO `weimei_coinactivity` VALUES ('13', '11', '11', '11', '1450540800', '15-12-17 02:29:14', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/7');
INSERT INTO `weimei_coinactivity` VALUES ('14', '领200000维美币，测试商城', '					尽情的花吧', '200000', '1454342400', '15-12-17 02:32:28', '2016-01-01', '0', 'serv2.matesofts.com/weimei/index.php/Home/Mei/activity/14');
INSERT INTO `weimei_coinactivity` VALUES ('15', '领200000维美币，测试商城', '					尽情的花吧！', '200000', '1464624000', '16-01-01 12:17:56', '2016-01-01', '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/15');
INSERT INTO `weimei_coinactivity` VALUES ('16', '', '', '', '0', '16-01-01 12:20:04', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/16');
INSERT INTO `weimei_coinactivity` VALUES ('17', '', '', '', '0', '16-01-01 12:20:16', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/17');
INSERT INTO `weimei_coinactivity` VALUES ('18', '', '', '', '0', '16-01-01 12:21:21', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/18');
INSERT INTO `weimei_coinactivity` VALUES ('19', '', '', '', '0', '16-01-01 12:21:21', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/19');
INSERT INTO `weimei_coinactivity` VALUES ('20', '444', '444', '444', '1454169600', '16-01-05 09:37:06', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/20');
INSERT INTO `weimei_coinactivity` VALUES ('21', '', '', '', '0', '16-01-05 09:37:18', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/21');
INSERT INTO `weimei_coinactivity` VALUES ('22', '', '', '', '0', '16-01-05 09:37:18', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/22');
INSERT INTO `weimei_coinactivity` VALUES ('23', '000', '000', '000', '1453824000', '16-01-08 11:27:31', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/23');
INSERT INTO `weimei_coinactivity` VALUES ('24', '', '', '', '0', '16-01-08 11:28:10', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/24');
INSERT INTO `weimei_coinactivity` VALUES ('25', '000', '00', '220', '1454169600', '16-01-14 02:25:41', null, '1', 'serv2.matesofts.com/weimei/index.php/Admin/Coinactivity/coinactivity_add_update/25');
