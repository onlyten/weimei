/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:30:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for weimei_address
-- ----------------------------
DROP TABLE IF EXISTS `weimei_address`;
CREATE TABLE `weimei_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wxid` varchar(100) DEFAULT NULL,
  `qu` varchar(20) DEFAULT NULL COMMENT '市内六区',
  `address` varchar(200) DEFAULT NULL COMMENT '详细地址',
  `postcode` varchar(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `display` int(11) DEFAULT '0' COMMENT '1 默认地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of weimei_address
-- ----------------------------
INSERT INTO `weimei_address` VALUES ('1', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '南开区', '雅士道', '300384', '段泽宇', '15620936680', '0');
INSERT INTO `weimei_address` VALUES ('18', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '河西区', '通知我', '899666', '▽', '15623654879', '0');
INSERT INTO `weimei_address` VALUES ('17', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '和平区', '图图他', '885666', '龙门', '15628936654', '0');
INSERT INTO `weimei_address` VALUES ('5', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '和平区', '你俩', '25896', '你猜', '15620936880', '1');
INSERT INTO `weimei_address` VALUES ('6', 'oNyT2t2w3iowX5b99LRDivog3O78', '红桥区', '天津市河西区友谊北路广银大厦', '300074', '陈纬', '15222829150', '1');
INSERT INTO `weimei_address` VALUES ('7', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '河西区', '伪口', '258963', 'q玄', '13666666666', '1');
INSERT INTO `weimei_address` VALUES ('8', 'oNyT2t9BdUL29vq7KkD6FOCgSmOw', '河西区', '友谊北路广银大厦', '300074', '吴霆', '18630855366', '1');
INSERT INTO `weimei_address` VALUES ('15', 'oNyT2t1iLBMMyFR8ymJVbfKpNJT4', '河西区', 'vv吃饭', '123456', 'v吃饭饭', '15366666666', '1');
INSERT INTO `weimei_address` VALUES ('16', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '河西区', '兔兔', '666686', '图', '15866666666', '0');
INSERT INTO `weimei_address` VALUES ('19', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '河西区', '通知我哦哦', '099999', '只要我愿意', '15620888888', '0');
INSERT INTO `weimei_address` VALUES ('20', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '和平区', '我现在往', '558555', '陆陆续续', '18888888888', '0');
INSERT INTO `weimei_address` VALUES ('21', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '河西区', '弄成', '996665', '6宗', '15896325689', '0');
INSERT INTO `weimei_address` VALUES ('22', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '河西区', '只要我愿意', '85666', '图我哦', '15625369888', '0');
INSERT INTO `weimei_address` VALUES ('23', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '河西区', '停止运行', '889666', '下雨了', '15620966668', '0');
INSERT INTO `weimei_address` VALUES ('24', 'oNyT2t2Px3C_usSL9xGOnrA6tQqU', '河西区', '友谊路谊诚公寓16号楼1门202室', '300000', '李旦', '13002260789', '1');
INSERT INTO `weimei_address` VALUES ('25', 'oNyT2tyK1NwPHHQ5UXtXF9_9yyRk', '河西区', '天津市河西区友谊北路广银大厦', '300000', '徐滕菲', '15802253339', '0');
