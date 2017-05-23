/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:31:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_coin
-- ----------------------------
DROP TABLE IF EXISTS `weimei_coin`;
CREATE TABLE `weimei_coin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` varchar(30) DEFAULT NULL,
  `coinrule_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `usee` int(11) DEFAULT '0',
  `nouse` int(11) DEFAULT NULL,
  `coinactivity_id` int(11) DEFAULT NULL,
  `timeto` int(11) DEFAULT NULL,
  `usetime` int(11) DEFAULT NULL,
  `type` int(4) DEFAULT '0' COMMENT '3:充值记录',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of weimei_coin
-- ----------------------------
INSERT INTO `weimei_coin` VALUES ('41', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', null, '1451023827', '0', '0', '14', '1454349722', '1453183839', null);
INSERT INTO `weimei_coin` VALUES ('34', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1450835910', '60', '0', null, '1454169600', '1452069373', null);
INSERT INTO `weimei_coin` VALUES ('35', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1450937751', '0', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('36', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', null, '1450939136', '0', '0', '14', '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('37', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '4', '1450945344', '60', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('38', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '4', '1451006172', '60', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('39', 'oNyT2t9zSRpqYIWIkivCJaxEnJIo', '4', '1451019359', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('40', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1451022311', '0', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('44', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1451064815', '0', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('43', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', null, '1451024007', '60', '51', '14', '1454349722', null, null);
INSERT INTO `weimei_coin` VALUES ('45', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1451094799', '60', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('46', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1451187173', '60', '0', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('47', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1451268062', '60', '0', null, '1454169600', '1453097950', null);
INSERT INTO `weimei_coin` VALUES ('48', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1451289186', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('49', 'oNyT2t2R6Lc9PtuFqupCImgLioYw', '4', '1451302225', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('50', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1451346086', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('51', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1451367553', '60', '0', null, '1454169600', '1453097950', null);
INSERT INTO `weimei_coin` VALUES ('52', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1451401713', '60', '0', null, '1454169600', '1452752578', '0');
INSERT INTO `weimei_coin` VALUES ('53', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1451473314', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('54', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1451508663', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('55', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '4', '1451531046', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('56', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1451615334', '60', '0', null, '1454169600', '1452752859', '0');
INSERT INTO `weimei_coin` VALUES ('57', 'oNyT2t2w3iowX5b99LRDivog3O78', null, '1451615601', '0', '0', '14', '1454349722', '1452755496', null);
INSERT INTO `weimei_coin` VALUES ('58', 'oNyT2tz0cGlJ06XEuxh-Wdn-oCUo', '4', '1451619186', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('59', '', null, '1451622229', '0', '200000', '14', '1454342400', null, null);
INSERT INTO `weimei_coin` VALUES ('60', 'oNyT2tywS11AgP30uKPqlAS4c1dc', null, '1451622688', '0', '200000', '14', '1454342400', null, null);
INSERT INTO `weimei_coin` VALUES ('61', 'oNyT2tz0cGlJ06XEuxh-Wdn-oCUo', null, '1451622804', '0', '200000', '14', '1454342400', null, null);
INSERT INTO `weimei_coin` VALUES ('62', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1451884390', '60', '0', null, '1454169600', '1453097950', null);
INSERT INTO `weimei_coin` VALUES ('63', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1451957193', '60', '0', null, '1454169600', '1452752859', '0');
INSERT INTO `weimei_coin` VALUES ('64', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1452000957', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('65', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1452041388', '60', '0', null, '1454169600', '1452752859', '0');
INSERT INTO `weimei_coin` VALUES ('66', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1452067083', '60', '0', null, '1454169600', '1453098081', null);
INSERT INTO `weimei_coin` VALUES ('67', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1452097776', '60', '0', null, '1454169600', '1453098081', null);
INSERT INTO `weimei_coin` VALUES ('68', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1452158350', '60', '0', null, '1454169600', '1452752859', '0');
INSERT INTO `weimei_coin` VALUES ('69', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1452216423', '60', '0', null, '1454169600', '1452755491', '0');
INSERT INTO `weimei_coin` VALUES ('70', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '4', '1452255218', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('71', 'oNyT2t9BdUL29vq7KkD6FOCgSmOw', '4', '1452323779', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('72', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1452509702', '60', '0', null, '1454169600', '1452755491', null);
INSERT INTO `weimei_coin` VALUES ('73', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4', '8', '1452517730', '0', '880', null, '1454169600', null, '3');
INSERT INTO `weimei_coin` VALUES ('79', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '8', '1452671919', '22', '110', null, '1454256000', '1453098112', '3');
INSERT INTO `weimei_coin` VALUES ('77', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1452671231', '60', '0', null, '1454169600', '1453098122', null);
INSERT INTO `weimei_coin` VALUES ('78', 'oNyT2tywS11AgP30uKPqlAS4c1dc', '8', '1452671694', '0', '50', null, '1454169600', null, '3');
INSERT INTO `weimei_coin` VALUES ('80', 'oNyT2t_OeGY5Ak90nJSV32tgn02s', '4', '1452821545', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('81', 'oNyT2t2Px3C_usSL9xGOnrA6tQqU', '4', '1452924592', '60', '0', null, '1454169600', '1452925043', '0');
INSERT INTO `weimei_coin` VALUES ('82', 'oNyT2t2Px3C_usSL9xGOnrA6tQqU', '4', '1452924706', '40', '20', null, '1454169600', '1452925043', '0');
INSERT INTO `weimei_coin` VALUES ('83', 'oNyT2t2Px3C_usSL9xGOnrA6tQqU', '4', '1452924727', '0', '60', null, '1454169600', null, null);
INSERT INTO `weimei_coin` VALUES ('84', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1452926493', '60', '0', null, '1454169600', '1453165018', null);
INSERT INTO `weimei_coin` VALUES ('85', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1452926511', '60', '0', null, '1454169600', '1453165018', null);
INSERT INTO `weimei_coin` VALUES ('86', 'oNyT2tyyIHR1PYQDhIvNAMTv9PtM', '8', '1452927137', '0', '1100330', null, '1454256000', null, '3');
INSERT INTO `weimei_coin` VALUES ('96', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1453087289', '60', '0', null, '1454169600', '1453098291', '0');
INSERT INTO `weimei_coin` VALUES ('106', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '4', '1453196168', '0', '10', null, '1454169600', null, '0');
INSERT INTO `weimei_coin` VALUES ('97', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1453108860', '60', '0', null, '1454169600', '1453165053', '0');
INSERT INTO `weimei_coin` VALUES ('98', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1453162546', '60', '0', null, '1454169600', '1453165053', '0');
INSERT INTO `weimei_coin` VALUES ('99', 'oNyT2t-Ich25KEVAglbVh2zVg-Rs', '8', '1453173678', '0', '1100', null, '1454256000', null, '3');
INSERT INTO `weimei_coin` VALUES ('107', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', '1453256208', '0', '10', null, '1454169600', null, '0');
