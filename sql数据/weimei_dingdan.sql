/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:31:28
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

-- ----------------------------
-- Records of weimei_dingdan
-- ----------------------------
INSERT INTO `weimei_dingdan` VALUES ('92', '哦哦', '15923684780', '111', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC23334122362718', '1', '3', '15', '16-01-01 10:38:45', '0', '2015-12-23 19:00', null, '0', '1', '1', null);
INSERT INTO `weimei_dingdan` VALUES ('93', '你好', '12358698888', '天津南开', '', 'qqq', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC23334739058364', '0', '3', '15', '16-01-13 15:31:40', '0', '2015-12-23 19:00', '4-5-9', '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('94', '你好', '12345678900', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC23355818476544', '1', '3', '15', null, null, '2015-12-23 19:00', null, '0', '1', '88', null);
INSERT INTO `weimei_dingdan` VALUES ('95', '你膜', '13453365498', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC23357852258171', '1', '3', '15', null, null, '2015-12-23 19:00', '4-5-6', '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('96', '磨合', '13566666666', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC23359746728253', '1', '3', '15', null, null, '2015-12-23 19:00', '4-5-6', '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('97', '你好', '136666666666', '66', '20', '你好', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC23384890835599', '0', '0', '15', '16-01-11 16:13:08', '11', '1450835910', '', '0', '1', '2', null);
INSERT INTO `weimei_dingdan` VALUES ('112', '你好', '136666666666', '66', '20', '你好', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC23384890835599', '0', '2', null, '16-01-11 16:13:17', '22', '*********', null, '0', '1', '4', null);
INSERT INTO `weimei_dingdan` VALUES ('113', '你好', '136666666666', '66', '20', '你好', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC23384890835599', '0', '3', null, '16-01-11 16:13:01', '2147483647', '*********', '4', '0', '1', '6', null);
INSERT INTO `weimei_dingdan` VALUES ('277', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31278912242958', '0', '0', null, null, null, '2016-01-05 12:30', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('278', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31275570438419', '0', '0', null, null, null, '2016-01-05 20:00', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('279', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '10', 'F105554888666850', '0', '3', '1451955488', null, null, '2016-01-05 20:00', null, '0', '2', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('280', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '20', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '31', 'F106407812586292', '0', '0', '1452040781', null, null, '1451401713', null, '0', '0', '3940', null);
INSERT INTO `weimei_dingdan` VALUES ('281', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '20', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '31', 'F106407812586292', '0', '1', null, null, null, '2016-01-06 19:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('282', '邹杰', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F106670379126355', '1', '0', '1452067037', null, null, '2016-01-07 10:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('283', '魔图', '13132108372', '你么', '20', '莫文蔚', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F106693730081722', '0', '0', '1452069373', null, null, '1451268062', null, '0', '0', '378', null);
INSERT INTO `weimei_dingdan` VALUES ('154', '你好', '13688888888', '1111', '30', '', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '12', 'EC25072498574476', '0', '3', '15', '16-01-11 16:13:24', '-2147483648', '1450945344', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('155', '111', '13888888888', '', '', '', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '8', 'EC25075526109646', '1', '3', '15', null, null, '2015-12-25 19:30', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('156', '你好', '13333653563', '华苑', '10', '同学', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC25217603945353', '0', '0', '15', '16-01-11 16:13:33', null, '1450835910', null, '0', '1', '2970', null);
INSERT INTO `weimei_dingdan` VALUES ('157', '你好', '13888888888', '111', '20', '', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '11', 'EC25252925946832', '0', '0', '15', '16-01-11 16:13:40', null, '1451024007', null, '0', '1', '318', null);
INSERT INTO `weimei_dingdan` VALUES ('158', '111', '13822222222', '111', '20', '', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '12', 'EC25257511962676', '0', '0', '15', null, null, '1451024007', null, '0', '1', '2960', null);
INSERT INTO `weimei_dingdan` VALUES ('159', '弄66', '15699999999', '华苑', '', '现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC25284875252029', '0', '1', '15', null, null, '2015-12-26 19:30', null, '0', '1', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('160', '你好', '15236464682', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25424820373400', '1', '0', '15', null, null, '2015-12-25 19:30', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('161', '你好', '15236464682', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25424820373400', '1', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('162', '你好', '15236464682', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25424820373400', '1', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('163', '我不好', '15863524579', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25431115041202', '1', '1', '15', null, null, '2015-12-28 10:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('165', '没有了', '17063259140', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25432272549886', '1', '3', '15', null, null, '2015-12-24 20:00', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('166', '不知道', '13956287156', '你猜', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC26698203118004', '0', '0', '15', null, null, '2015-12-26 18:30', null, '0', '1', '338', null);
INSERT INTO `weimei_dingdan` VALUES ('167', '不知道', '13956287156', '你猜', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC26698203118004', '0', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('168', '不知道', '13956287156', '你猜', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC26698203118004', '0', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('169', '第二次', '15723814632', '建瓯市不闹', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC26703930252277', '0', '3', '15', null, null, '2015-12-28 20:00', null, '0', '1', '338', null);
INSERT INTO `weimei_dingdan` VALUES ('170', '陈纬', '15222829150', '天津市', '10', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC26985615120069', '0', '0', '15', null, null, '1451094799', '4', '0', '1', '2970', null);
INSERT INTO `weimei_dingdan` VALUES ('171', '陈纬', '15222829150', '天津市', '10', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC26985615120069', '0', '0', null, null, null, '*********', '4', '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('172', '陈纬', '15222829150', '天津市', '10', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC26985615120069', '0', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('173', '发放', '15222829150', '广告歌', '50', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '10', 'EC27870537982558', '0', '3', '1451094799', null, null, '1451094799', null, '0', '1', '648', null);
INSERT INTO `weimei_dingdan` VALUES ('174', '嗯嗯', '15613346608', '', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '8', 'EC27877207649346', '1', '3', '1451094799', null, null, '2015-12-10 13:30', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('175', '00', '0000', '', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '9', 'EC27878371110730', '1', '0', '15', null, null, '2015-12-26 10:00', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('177', '你好', '', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC28661753991910', '1', '1', '15', null, null, '2015-12-29 19:30', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('178', '的哦哦', '', '华苑', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28663393448847', '0', '0', '15', null, null, '2015-12-28 19:00', null, '0', '1', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('179', '333', '13333591780', '华苑', '', '现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28712019265930', '0', '0', '15', null, null, '2015-12-28 20:00', null, '0', '1', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('180', '4444', '12345679900', '华苑', '', '69', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28712981069234', '0', '0', '15', null, null, '2015-12-28 19:00', null, '0', '1', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('181', '00', '0000', '', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '9', 'EC27878371110730', '1', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('182', '00', '0000', '', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '9', 'EC27878371110730', '1', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('183', 'nnnn', '13566669999', 'nnn', '', 'nnnn', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28962620218207', '0', '0', '15', null, null, '2015-12-28 20:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('184', 'hhh', '18888888888', '雅士道', '', 'nn', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28042313022031', '0', '0', '15', null, null, '2015-12-29 16:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('185', 'hhh', '18888888888', '雅士道', '', 'nn', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28042313022031', '0', '0', null, null, null, '*********', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('186', 'hhh', '18888888888', '雅士道', '', 'nn', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC28042313022031', '0', '0', null, null, null, '*********', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('187', '邹杰', '15620999999', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC29584864699217', '1', '0', '15', null, null, '2015-12-29 19:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('188', '膜膜', '135666666666', '你猜', '', '现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC29904989755957', '0', '0', '1451390498', null, null, '2015-12-30 10:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('189', '00', '0000', '', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '9', 'EC27878371110730', '1', '0', null, null, null, '*********', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('190', '你好', '18522036595', '', '', '八', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '12', 'EC30802896891326', '0', '0', '1451480289', null, null, '2015-12-31 13:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('191', '工z', '18522036595', '伪口', '', '', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '12', 'EC30805305957690', '0', '0', '1451480530', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('192', '馍馍', '18295713005', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '10', 'EC30812442609283', '0', '0', '1451481244', null, null, '2015-12-31 14:30', null, '0', '0', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('193', '1236', '18522036595', '', '', '', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '8', 'EC30824254437173', '1', '0', '1451482425', null, null, '2015-12-31 19:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('194', '13323413241', '18522036595', '伪口', '', '', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '12', 'EC30831440625926', '0', '0', '1451483144', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('195', '膜经理', '13256895689', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30833709110311', '0', '0', '1451483370', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('196', '你好', '13569969966', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30837020547892', '0', '0', '1451483702', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('197', '膜和', '15620963333', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30838101599523', '0', '0', '1451483810', null, null, '2015-12-31 17:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('198', '你好', '13666666666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30845274785547', '0', '0', '1451484527', null, null, '2015-12-31 17:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('199', '磨合', '15620936880', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30856788501156', '0', '0', '1451485678', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('200', '龙井里', '15620936666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30859256352848', '0', '0', '1451485925', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('201', '馍馍', '15620936666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30860094449970', '0', '0', '1451486009', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('202', '兔兔', '156209366666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30860536161822', '0', '0', '1451486053', null, null, '2015-12-31 16:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('203', '哦哦', '15620936880', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30879787643422', '0', '0', '1451487978', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('204', '拜拜', '15233669966', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30882455040166', '0', '0', '1451488245', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('205', '5句图', '15236666666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30884072957073', '0', '0', '1451488407', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('206', '兔兔', '15628966666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30884823488201', '0', '0', '1451488482', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('207', '龙井里', '15620966686', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30886315194167', '0', '0', '1451488631', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('208', '图图', '15620966666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30887129882475', '0', '0', '1451488713', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('209', '凸透镜', '15628963652', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30887668332878', '0', '0', '1451488766', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('210', '模块', '15620936666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '10', 'EC30888480120320', '0', '0', '1451488848', null, null, '2015-12-31 14:30', null, '0', '0', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('211', '兔兔', '15620936880', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '10', 'EC30889591044254', '0', '0', '1451488959', null, null, '2015-12-31 14:00', null, '0', '0', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('212', '具体', '15628963333', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '10', 'EC30890529700865', '0', '0', '1451489052', null, null, '2015-12-31 14:30', null, '0', '0', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('213', '123', '18522036595', '伪口', '', '', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '12', 'EC30891740953982', '0', '0', '1451489174', null, null, '2015-12-31 19:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('214', '看看看看', '15620936888', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '10', 'EC30893210954782', '0', '0', '1451489321', null, null, '2015-12-31 14:30', null, '0', '0', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('215', '弄点', '15620966666', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '10', 'EC30894605394585', '0', '0', '1451489460', null, null, '2015-12-31 16:30', null, '0', '0', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('216', '现在', '15620968888', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30896648275242', '0', '0', '1451489664', null, null, '2015-12-31 13:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('217', '弄点', '156209633333', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30897924698108', '0', '0', '1451489792', null, null, '2015-12-31 14:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('218', '666', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC30900351050323', '0', '0', '1451490035', null, null, '2015-12-31 14:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('219', 'vbjjj', '18522036595', '伪口', '', '', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '12', 'EC30908109823856', '0', '0', '1451490810', null, null, '2015-12-31 17:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('220', '我不好', '15863524579', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25431115041202', '1', '0', null, null, null, '2015-12-31 02:08:40', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('221', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31253795247608', '0', '0', '1451525379', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('222', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31260690011527', '0', '0', '1451526069', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('223', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31265669725055', '0', '0', '1451526566', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('224', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31269089416657', '0', '0', '1451526908', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('225', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31269758584148', '0', '0', '1451526975', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('226', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31275570438419', '0', '0', '1451527557', null, null, '2015-12-31 19:00', null, '0', '1', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('227', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31278912242958', '0', '0', '1451527891', null, null, '2015-12-31 19:00', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('228', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31282535612856', '0', '0', '1451528253', null, null, '2015-12-31 19:00', null, '0', '1', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('229', '兔兔快快快快快', '15236985689', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC31285024011377', '1', '0', '1451528502', null, null, '2015-12-31 19:30', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('239', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '16', 'EC31300472200563', '0', '3', '1451530047', null, null, '2015-12-31 19:30', null, '0', '0', '115', null);
INSERT INTO `weimei_dingdan` VALUES ('240', '123', '18522036595', '伪口', '', '', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '12', 'EC31305517012752', '0', '0', '1451530551', null, null, '2016-01-01 16:30', null, '0', '0', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('241', '兔兔', '15620936888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', 'EC31324131528410', '1', '0', '1451532413', null, null, '2015-12-31 19:30', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('242', '陈纬', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '10', 'EC31466996925610', '0', '3', '1451546699', null, null, '2016-01-01 10:00', null, '0', '2', '698', null);
INSERT INTO `weimei_dingdan` VALUES ('243', '陈纬', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '10', 'EC31466996925610', '0', '3', null, null, null, '2015-12-31 17:31:25', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('244', '哈哈', '13562895315', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC31474738526244', '1', '0', '1451547473', null, null, '2016-01-01 10:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('245', '哈哈', '13562895315', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC31474738526244', '1', '0', null, null, null, '2015-12-31 17:40:08', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('246', '哈哈', '13562895315', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC31474738526244', '1', '0', null, null, null, '2015-12-31 17:40:58', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('247', '你好', '15863524579', '十三岁', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '11', 'EC25431115041202', '1', '0', null, '16-01-11 16:12:36', null, '2015-12-31 17:41:36', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('248', '陈纬', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31478384303905', '0', '3', '1451547838', '15-12-31 15:45:33', '2147483647', '2016-01-01 20:00', '4', '0', '2', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('249', '哈哈', '13953682485', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '8', 'EC31479935894317', '1', '0', '1451547993', null, null, '2016-01-02 20:00', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('250', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', '1451548410', '15-12-31 15:55:26', '2147483647', '2016-01-01 20:00', null, '0', '2', '2980', null);
INSERT INTO `weimei_dingdan` VALUES ('251', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:55:41', '2147483647', '2015-12-31 17:53:39', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('252', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:55:51', '2147483647', '2015-12-31 17:53:48', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('253', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:56:03', '2147483647', '2015-12-31 17:53:57', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('254', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:56:17', '2147483647', '2015-12-31 17:54:07', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('255', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:56:28', '2147483647', '2015-12-31 17:54:14', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('256', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:56:40', '2147483647', '2015-12-31 17:54:21', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('257', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:57:00', '2147483647', '2015-12-31 17:54:33', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('258', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:57:09', '2147483647', '2015-12-31 17:54:41', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('259', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, '15-12-31 15:57:37', '2147483647', '2015-12-31 17:54:48', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('260', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, null, null, '2015-12-31 17:54:55', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('261', '001', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'EC31484107083008', '0', '3', null, null, null, '2015-12-31 17:58:04', null, '0', '2', null, null);
INSERT INTO `weimei_dingdan` VALUES ('262', '陈纬', '15222829150', 'via你咯是', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '19', 'EC31503467245682', '0', '3', '1451550346', null, null, '2016-01-01 20:00', null, '0', '2', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('263', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '16', 'EC31300472200563', '0', '3', null, null, null, '2015-12-31 18:54:43', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('264', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '16', 'EC31300472200563', '0', '1', null, null, null, '2015-12-31 18:55:08', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('265', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '16', 'EC31300472200563', '0', '3', null, null, null, '2015-12-31 18:59:26', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('266', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '16', 'EC31300472200563', '0', '0', null, null, null, '2015-12-31 19:01:11', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('267', '吴霆', '18630855366', '友谊北路广银大厦', '', '', 'oNyT2t9BdUL29vq7KkD6FOCgSmOw', '17', 'F101182375854009', '0', '0', '1451618237', null, null, '2016-01-02 11:00', null, '0', '1', '1', null);
INSERT INTO `weimei_dingdan` VALUES ('268', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F101233192829797', '0', '0', '1451623319', null, null, '1451187173', null, '0', '0', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('269', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F101234057560834', '0', '0', '1451623405', null, null, '1451187173', null, '0', '0', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('270', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F101234125947921', '0', '0', '1451623412', null, null, '1451187173', null, '0', '0', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('271', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F101234392746359', '0', '0', '1451623439', null, null, '1451187173', null, '0', '0', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('272', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F101234474418892', '0', '0', '1451623447', null, null, '1451187173', null, '0', '0', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('273', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31282535612856', '0', '0', null, null, null, '2016-01-04 18:00', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('274', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31282535612856', '0', '0', null, null, null, '2016-01-04 19:00', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('275', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31282535612856', '0', '0', null, null, null, '2016-01-04 19:30', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('276', '我现在', '13132108372', '你猜', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'EC31282535612856', '0', '1', null, null, null, '2016-01-04 20:00', null, '0', '1', null, null);
INSERT INTO `weimei_dingdan` VALUES ('284', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F107348149096385', '0', '3', '1452134814', null, null, '1451401713', null, '0', '2', '0', null);
INSERT INTO `weimei_dingdan` VALUES ('285', '你好', '13132108888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107445057149385', '1', '0', '1452144505', null, null, '2016-01-07 18:30', null, '0', '0', null, null);
INSERT INTO `weimei_dingdan` VALUES ('286', '用脑子', '15620968888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107463378731102', '1', '0', '1452146337', null, null, '2016-01-07 19:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('287', 'ok', '13333333333', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107465091230312', '1', '0', '1452146509', null, null, '2016-01-07 19:30', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('288', 'nnjj', '15620936666', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107465820271186', '1', '3', '1452146582', null, null, '2016-01-07 20:00', '4', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('289', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '37', 'F107473705557556', '0', '3', '1452147370', null, null, '2016-01-07 20:00', null, '0', '2', '2980', '0');
INSERT INTO `weimei_dingdan` VALUES ('290', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '37', 'F107473705557556', '0', '3', null, null, null, '2016-01-07 20:00', null, '0', '2', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('291', 'ok', '13132108888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107490638987528', '1', '0', '1452149063', null, null, '2016-01-07 20:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('292', '好了', '13132108888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107492010629352', '1', '3', '1452149201', null, null, '2016-01-08 10:00', '4-5-8-9', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('293', '完美', '13132109999', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107493593601652', '1', '0', '1452149359', null, null, '2016-01-07 20:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('294', '毛驴', '13132108372', '你么', '1', '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', '1452149694', null, null, '1451268062', null, '0', '2', '397', '1');
INSERT INTO `weimei_dingdan` VALUES ('295', '96', '15636965869', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107497735574424', '1', '0', '1452149773', null, null, '2016-01-07 20:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('296', '好好好', '15963636363', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107503881136169', '1', '3', '1452150388', null, null, '2016-01-08 16:30', '4-5-8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('297', '下雨天', '15555555555', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107509214390530', '1', '0', '1452150921', null, null, '2016-01-08 10:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('298', '哈哈', '15326785142', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '9', 'F107533824225319', '1', '0', '1452153382', null, null, '2016-01-08 18:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('299', '问问经理', '15869696969', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107540608254420', '1', '0', '1452154060', null, null, '2016-01-08 11:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('300', '面试', '15620936888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107541424716512', '1', '0', '1452154142', null, null, '2016-01-08 10:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('301', '面试', '15620936888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107543734819264', '1', '0', '1452154373', null, null, '2016-01-08 10:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('302', '面试', '15620936888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107545307407474', '1', '0', '1452154530', null, null, '2016-01-08 10:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('303', '你现在', '15869694747', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107548634031566', '1', '0', '1452154863', null, null, '2016-01-08 10:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('304', '你现在', '15869694747', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107549133840897', '1', '0', '1452154913', null, null, '2016-01-08 10:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('305', '模样', '15869696969', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107561268548726', '1', '0', '1452156126', null, null, '2016-01-08 12:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('306', '馍馍', '15620638888', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107562712236956', '1', '3', '1452156271', null, null, '2016-01-08 11:30', null, '0', '2', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('307', '鹏飞', '15869696969', '', '', '', 'oNyT2t1iLBMMyFR8ymJVbfKpNJT4', '9', 'F107564540031697', '1', '0', '1452156454', null, null, '2016-01-08 14:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('308', '邹杰', '15620936880', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107576659003119', '1', '0', '1452157665', null, null, '2016-01-08 15:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('309', '魔图', '15620936880', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107579161077028', '1', '0', '1452157916', null, null, '2016-01-08 14:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('310', '魔图', '15620936880', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107579671847618', '1', '0', '1452157967', null, null, '2016-01-08 14:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('311', '魔图', '15620936880', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F107579979635959', '1', '0', '1452157997', null, null, '2016-01-08 14:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('312', '高电费家', '15636363636', '', '', '', 'oNyT2t1iLBMMyFR8ymJVbfKpNJT4', '9', 'F107580669412711', '1', '0', '1452158066', null, null, '2016-01-08 19:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('313', '哈哈', '13843297625', '', '', '', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '9', 'F107587273314205', '1', '0', '1452158727', null, null, '2016-01-08 19:30', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('314', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '21', 'F108209436196514', '0', '3', '1452220943', '16-01-08 11:35:11', '0', '2016-01-08 20:00', '4', '0', '1', '398', '0');
INSERT INTO `weimei_dingdan` VALUES ('315', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '37', 'F107473705557556', '0', '3', null, null, null, '2016-01-08 20:00', null, '0', '2', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('316', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '20', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '31', 'F106407812586292', '0', '0', null, null, null, '2016-01-08 20:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('317', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '20', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '31', 'F106407812586292', '0', '0', null, null, null, '2016-01-08 20:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('318', '开会', '18718718718', '', '', '', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4', '41', 'F108247484490065', '1', '0', '1452224748', null, null, '2016-01-08 19:00', null, '0', '0', '2980', '0');
INSERT INTO `weimei_dingdan` VALUES ('319', '破解器', '18718718718', '', '', '', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4', '33', 'F108257483778465', '1', '0', '1452225748', null, null, '2016-01-08 18:30', null, '0', '0', '1980', '0');
INSERT INTO `weimei_dingdan` VALUES ('320', '哈哈', '18718718718', '', '', '', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4', '9', 'F108283557793808', '1', '0', '1452228355', null, null, '2016-01-08 19:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('321', '哈哈', '18718718718', '', '', '', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4', '11', 'F108285240151526', '1', '1', '1452228524', null, null, '2016-01-08 19:00', null, '0', '1', '338', '0');
INSERT INTO `weimei_dingdan` VALUES ('322', '那玩意', '13132108379', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '44', 'F108372852885354', '1', '0', '1452237285', null, null, '2016-01-09 18:00', null, '0', '0', '880', '0');
INSERT INTO `weimei_dingdan` VALUES ('323', '沐浴露', '13132159638', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F108403525173277', '1', '0', '1452240352', null, null, '2016-01-09 12:00', null, '0', '0', '498', '0');
INSERT INTO `weimei_dingdan` VALUES ('324', '我就', '13132108372', '你俩', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F108404070072949', '0', '0', '1452240407', null, null, '2016-01-09 17:00', null, '0', '0', '398', '0');
INSERT INTO `weimei_dingdan` VALUES ('325', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '20', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '22', 'F108406996516465', '0', '0', '1452240699', null, null, '1451401713', null, '0', '0', '478', '0');
INSERT INTO `weimei_dingdan` VALUES ('326', '我就', '13132108372', '你俩', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F108404070072949', '0', '0', null, null, null, '2016-01-09 19:00', null, '0', '0', null, '0');
INSERT INTO `weimei_dingdan` VALUES ('327', '毛驴', '13132108372', '你么', '', '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', null, null, null, '2016-01-09 14:00', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('333', '毛驴', '13132108372', '你么', '', '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', null, null, null, '2016-01-09 12:00', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('334', '毛驴', '13132108372', '你么', '', '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', null, null, null, '2016-01-09 14:00', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('335', '毛驴', '13132108372', '你么', '', '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', null, null, null, '2016-01-13 20:00', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('336', '毛驴', '13132108372', '你么', null, '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', null, null, null, '2016-01-14 10:00', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('337', '毛驴', '13132108372', '你么', null, '我现在', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F107496948367401', '0', '3', '1452675399', null, null, '2016-01-14 11:00', '4-5-8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('338', '中央五套', '13132108372', '你俩', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F113879071638043', '0', '0', '1452687907', null, null, '2016-01-14 19:30', null, '0', '0', '398', '0');
INSERT INTO `weimei_dingdan` VALUES ('339', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '80', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '10', 'F114525781755167', '0', '0', '1452752578', null, null, '1451615334', null, '0', '0', '618', '0');
INSERT INTO `weimei_dingdan` VALUES ('340', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '200', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '34', 'F114528596306681', '0', '0', '1452752859', null, null, '1452216423', null, '0', '0', '2780', '0');
INSERT INTO `weimei_dingdan` VALUES ('341', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '1', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F114530660803133', '0', '0', '1452753066', null, null, '1452216423', null, '0', '0', '-1', '0');
INSERT INTO `weimei_dingdan` VALUES ('342', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F114531057892018', '0', '0', '1452753105', null, null, '2016-01-14 20:00', null, '0', '0', '0', '0');
INSERT INTO `weimei_dingdan` VALUES ('343', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F114532567590462', '0', '3', '1452753256', null, null, '2016-01-15 20:00', '4', '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('344', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F114537351574991', '0', '3', '1452753735', null, null, '2016-01-16 20:00', null, '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('345', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F114537351574991', '0', '3', '1452753864', null, null, '2016-01-15 10:30', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('346', '有节奏姐', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114609578178973', '1', '3', '1452760957', null, null, '2016-01-15 19:00', '4-5-8-9', '0', '2', '488', '1');
INSERT INTO `weimei_dingdan` VALUES ('347', '邹杰北京', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114613901619047', '1', '3', '1452761390', null, null, '2016-01-15 11:30', '4-5-8', '0', '2', '488', '1');
INSERT INTO `weimei_dingdan` VALUES ('348', '泳裤', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114616171024638', '1', '0', '1452761617', null, null, '2016-01-15 14:30', null, '0', '0', '488', '1');
INSERT INTO `weimei_dingdan` VALUES ('349', '凸透镜', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114618152145659', '1', '0', '1452761815', null, null, '2016-01-15 19:00', null, '0', '0', '488', '0');
INSERT INTO `weimei_dingdan` VALUES ('350', '有机会破', '13232323232', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '34', 'F114620909997325', '1', '3', '1452762090', null, null, '2016-01-15 18:00', '5-8-9', '0', '2', '2980', '1');
INSERT INTO `weimei_dingdan` VALUES ('351', '听我的', '13121258965', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114623164064533', '1', '3', '1452762316', null, null, '2016-01-15 12:00', '4-5-8-9', '0', '2', '488', '1');
INSERT INTO `weimei_dingdan` VALUES ('352', '? ? ? ', '131321083723', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114625397819664', '1', '0', '1452762539', null, null, '2016-01-15 17:00', null, '0', '0', '488', '0');
INSERT INTO `weimei_dingdan` VALUES ('353', '五号', '15620968668', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F114626141191498', '1', '0', '1452762614', null, null, '2016-01-15 19:30', null, '0', '0', '488', '0');
INSERT INTO `weimei_dingdan` VALUES ('354', '油汀', '13132108372', '你俩', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F115584321627734', '0', '0', '1452858432', null, null, '2016-01-16 17:00', null, '0', '0', '398', '0');
INSERT INTO `weimei_dingdan` VALUES ('355', 'fgjhdd', '13132108372', 'vv吃饭', '', '', 'oNyT2t1iLBMMyFR8ymJVbfKpNJT4', '12', 'F115585133161841', '0', '0', '1452858513', null, null, '2016-01-16 17:00', null, '0', '0', '398', '0');
INSERT INTO `weimei_dingdan` VALUES ('356', 'gffgd', '18205892421', 'vv吃饭', '', '', 'oNyT2t1iLBMMyFR8ymJVbfKpNJT4', '12', 'F115585634797853', '0', '0', '1452858563', null, null, '2016-01-16 17:00', null, '0', '0', '398', '0');
INSERT INTO `weimei_dingdan` VALUES ('357', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F116152127624497', '0', '0', '1452915212', null, null, '2016-01-16 18:00', null, '0', '0', '1', '0');
INSERT INTO `weimei_dingdan` VALUES ('358', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F116152932006684', '0', '3', '1452915293', null, null, '2016-01-16 20:00', null, '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('359', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F116152932006684', '0', '3', '1452915602', null, null, '2016-01-16 20:00', null, '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('360', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F116157085257079', '0', '3', '1452915708', null, null, '2016-01-17 20:00', '4', '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('361', '李旦', '13002260789', '友谊路谊诚公寓16号楼1门202室', '100', '', 'oNyT2t2Px3C_usSL9xGOnrA6tQqU', '12', 'F116250436647437', '0', '0', '1452925043', null, null, '1452924706', null, '0', '0', '298', '0');
INSERT INTO `weimei_dingdan` VALUES ('362', '徐滕菲', '15802253339', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2tyK1NwPHHQ5UXtXF9_9yyRk', '20', 'F116292384993947', '0', '3', '1452929238', '16-01-19 08:25:20', '0', '2016-01-17 10:00', null, '0', '0', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('363', 'chen\\\'w', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '12', 'F118802761848160', '0', '0', '1453080276', null, null, '2016-01-18 20:00', null, '0', '0', '2980', '0');
INSERT INTO `weimei_dingdan` VALUES ('364', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453163297', '16-01-19 08:29:28', '0', '2016-01-19 20:00', '4', '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('365', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164444', '16-01-19 08:48:09', '0', '2016-01-20 10:00', '5', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('366', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164515', '16-01-19 08:49:02', '0', '2016-01-21 18:30', '8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('367', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164558', '16-01-19 08:49:46', '0', '2016-01-22 20:00', '9', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('368', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164616', '16-01-19 08:50:45', '0', '2016-01-24 10:00', '4', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('369', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164669', '16-01-19 08:51:31', '0', '2016-01-24 15:30', '5', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('370', '', '', '', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '0', '1453164705', '16-01-19 10:21:54', '0', '2016-01-24 20:00', '8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('371', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164743', '16-01-19 08:52:48', '0', '2016-01-25 10:00', '9', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('372', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164785', '16-01-19 08:53:39', '0', '2016-01-25 15:00', '9', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('373', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F119632970126225', '0', '3', '1453164837', '16-01-19 08:54:22', '0', '2016-01-25 20:00', '4', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('374', '李丽', '18522519908', '', '', '', 'oNyT2t-Ich25KEVAglbVh2zVg-Rs', '36', 'F119670181157189', '0', '0', '1453167018', null, null, '2016-01-19 15:00', null, '0', '0', '2380', '0');
INSERT INTO `weimei_dingdan` VALUES ('375', '垚淢', '13132108372', '你俩', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F119811778592097', '0', '3', '1453181177', null, null, '2016-01-19 19:00', '4-8', '0', '2', '2980', '1');
INSERT INTO `weimei_dingdan` VALUES ('376', '垚淢', '13132108372', '你俩', null, '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F119811778592097', '0', '3', '1453181296', null, null, '2016-01-19 19:30', '4-5', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('377', '垚淢', '13132108372', '你俩', null, '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F119811778592097', '0', '3', '1453181318', null, null, '2016-01-19 20:00', '5-8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('378', '垚淢', '13132108372', '你俩', null, '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '12', 'F119811778592097', '0', '3', '1453181342', null, null, '2016-01-20 12:30', '8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('381', '南大', '13123698652', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '36', 'F119873862476374', '1', '0', '1453187386', null, null, '2016-01-20 14:30', null, '0', '0', '2380', '1');
INSERT INTO `weimei_dingdan` VALUES ('382', '具体', '13536396356', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '20', 'F119955935488946', '1', '3', '1453195593', null, null, '2016-01-20 14:30', null, '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('383', '具体', '13536396356', '', null, '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '20', 'F119955935488946', '1', '3', '1453195684', null, null, '2016-01-20 19:30', '9', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('384', '具体', '13536396356', '', null, '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '20', 'F119955935488946', '1', '3', '1453195695', null, null, '2016-01-20 19:30', '4-8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('385', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F120510252268418', '0', '0', '1453251025', null, null, '2016-01-21 20:00', null, '0', '0', '1', '0');
INSERT INTO `weimei_dingdan` VALUES ('386', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F120513279590035', '0', '0', '1453251327', null, null, '2016-01-21 19:00', null, '0', '0', '1', '0');
INSERT INTO `weimei_dingdan` VALUES ('387', '我屋', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F120527774036762', '1', '0', '1453252777', null, null, '2016-01-20 17:00', null, '0', '0', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('388', '涂磊', '13132108353', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F120529953066014', '1', '0', '1453252995', null, null, '2016-01-20 17:00', null, '0', '0', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('389', '陈纬', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F120530560929057', '0', '3', '1453253056', null, null, '2016-01-21 20:00', null, '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('390', '测试', '15222829150', '天津市河西区友谊北路广银大厦', '', '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F120531922588012', '0', '3', '1453253192', '16-01-20 09:27:21', '0', '2016-01-21 16:30', '4', '0', '2', '1', '1');
INSERT INTO `weimei_dingdan` VALUES ('391', '下雨天', '13132863698', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F120532301164881', '1', '1', '1453253230', null, null, '2016-01-20 17:00', null, '0', '1', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('392', '测试', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F120531922588012', '0', '3', '1453253260', '16-01-20 09:28:17', '0', '2016-01-20 19:30', '5', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('393', '测试', '15222829150', '天津市河西区友谊北路广银大厦', null, '', 'oNyT2t2w3iowX5b99LRDivog3O78', '20', 'F120531922588012', '0', '3', '1453253317', '16-01-20 09:29:03', '0', '2016-01-20 18:00', '8', '0', '2', null, '1');
INSERT INTO `weimei_dingdan` VALUES ('394', '凸透镜', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F120535632043839', '1', '1', '1453253563', null, null, '2016-01-20 20:00', null, '0', '1', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('395', '邹杰', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F120541960695786', '1', '1', '1453254196', null, null, '2016-01-20 19:30', null, '0', '1', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('396', '屋里', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '9', 'F120545684826938', '1', '1', '1453254568', null, null, '2016-01-20 19:30', null, '0', '1', '498', '1');
INSERT INTO `weimei_dingdan` VALUES ('397', '兔兔', '13132108372', '', '', '', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '45', 'F120547794078011', '1', '0', '1453254779', null, null, '2016-01-20 19:30', null, '0', '0', '880', '1');
