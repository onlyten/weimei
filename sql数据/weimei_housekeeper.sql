/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:31:35
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

-- ----------------------------
-- Records of weimei_housekeeper
-- ----------------------------
INSERT INTO `weimei_housekeeper` VALUES ('9', '004', '李淑婷', '医疗美容高级技师', 'zf3XZmEai0NUymL.jpg', 'y2CzgjDzrLBYo0i.jpg*SAxVxwibHAcvvLS.jpg*hjUUTadwJFhlEFm.jpg', '大专', 'plGdNoVxrTMpLG7.jpg|*KrrWxlBOaSyWvcC.jpg|*dCYTPLiLjJE59qL.jpg|*hadI7L4IAeA8b6l.jpg|*NjYMcOxuzReeWoE.jpg|', '96', '364', '5030', '2012年8月于深圳富华医疗美容医院进修；曾参与曹孟君教授“不开刀皮肤管理”课题研究；于2013年9月被天津维美医疗美容医院聘为VIP高级皮肤管理顾问及治疗师', '皮肤管理，皮肤治疗养护及推拿养生', '0');
INSERT INTO `weimei_housekeeper` VALUES ('5', '002', '王静', '美容师', 'AcnRsG4bGR16m2h.jpg', 'WxKS7Z3aPFlXFui.jpg*K0gqOcgCQfdcTTB.jpg*hrYo4steyFxtuje.jpg', '大专', '1h9u2qjkoZDKw7k.jpg|*eH1CQNy4c3gQXpy.jpg|*NqQXVSoedMeRxLY.jpg|*RZFSCwGbBSeSIch.jpg|*h0I8XE1lTe875FS.jpg|', '60', '520', '150', '毕业于天津医学高等专科学校，从事生活美容13年，其中纹绣美容10年。先后在多家连锁机构任职过美容顾问，并且在医疗机构华夏、维美任职5年。', '纹绣，包括各种眉形、眼线、唇形设计，根据顾客面部及身体需求能熟练设计，并能熟练掌握生活美容中的肌肤管理及身体养生管理', '0');
INSERT INTO `weimei_housekeeper` VALUES ('4', '001', '杨柳柳', '美容师', 'UbsuswPQWMQRMc3.jpg', 'F2k1HatbXwsgumx.jpg*vJTOuLLuzmpe4GF.jpg*SmHdnpoQAln3BRq.jpg', '大专', 'uNBwbK9vJBI1h6l.jpg|*kZB92HmTCWnQ1Yc.jpg|*Cs0dYbY7GHJpI1v.jpg|*4luFvxnRr0NOQPM.jpg|*2sf2GdeElVl5k46.jpg|', '50', '52', '320', '毕业于天津医学高等专科学院，主修医疗美容技术专业，对于中西医、内外妇儿，医学、美学知识，皮肤学，化妆学，整形都有深入了解，毕业后一直在维美任职5年。', '中医养生。医学美学设计，精通各种面部肌肤问题调理，身体亚健康调理。', '0');
INSERT INTO `weimei_housekeeper` VALUES ('8', '003', '徐映', '美容师', 'WlrAWNQV9TFWeev.jpg', '3eyLClD3ToCOOyf.jpg*QpBudk3e4uPRjK3.jpg*QOhoAUKdXECAsq9.jpg', '大专', 'HQbGi5IX767WutS.jpg|*LtGLVYgLtQWIccz.jpg|*xTqJAIOiGWoNTTh.jpg|*MFLsqGrHsVxpDKB.jpg|*dhvD15lQo2MNQGH.jpg|', '90', '356', '5070', '毕业于河南医学高等专科学院，主修医疗美容专业，对于 面部肌肤问题有深入了解，毕业后一直在维美任职4年。', '面部年轻化，熟练掌握生活美容中的肌肤调理及身体养生调理', '0');
