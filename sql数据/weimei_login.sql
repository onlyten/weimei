/*
Navicat MySQL Data Transfer

Source Server         : serv2
Source Server Version : 50148
Source Host           : qdm102668679.my3w.com:3306
Source Database       : qdm102668679_db

Target Server Type    : MYSQL
Target Server Version : 50148
File Encoding         : 65001

Date: 2016-01-20 10:31:44
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

-- ----------------------------
-- Records of weimei_login
-- ----------------------------
INSERT INTO `weimei_login` VALUES ('33', '18522036594', 'hhhhhh', '姚宇', 'oNyT2t3J957TYCFRVSq-AIgBx4Mc', '2', '', '0', '60', '11', '15-12-30 08:56:54', null, '11', '0', null, 'http://wx.qlogo.cn/mmopen/ajNVdqHZLLDv9WfkW6MCrv3XrFvSGoo3RMvmH483yz39c9UZnhtUnaFTrwdoiaPjW9OG6ibanhYhKRziatqNtzbb5vkavyVdnuX0eHQyxHa1vk/0', '');
INSERT INTO `weimei_login` VALUES ('17', '13132108372', 'jj', '毛驴', 'oNyT2t5jMuG7mJkmJMYbt_DQ5gaM', '2', '', '0', '120', '11', '15-12-23 09:13:09', '', '华苑', '0', '南开区', 'http://wx.qlogo.cn/mmopen/thfLhcllFYpnHv0zTKugrqFApHFQyjvXJT3gwlCELJ7oKvzOzmJbpFNywfm0flwibfdexdJ1Bcaugo9cygsWzpDHgrGDplWTZ/0', '');
INSERT INTO `weimei_login` VALUES ('19', '18630996906', '985912', 'Nana', 'oNyT2t81xEJlGlkYpN3xsHkpcMlY', '1', null, '0', '50', null, '15-12-24 04:21:47', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQwUftonEu5b6xbibGbFAJXt6JX0yxx7ZMo4AXiaLThRc1fqseHUXBL5uBhYqWQGuEyjVW2N1Yy8569/0', null);
INSERT INTO `weimei_login` VALUES ('20', '18322280381', 'zhangliu521', '张莹', 'oNyT2t9zSRpqYIWIkivCJaxEnJIo', '1', null, '0', '60', null, '15-12-25 12:55:31', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQxOSImwpT7gN6m81ibRBwVVonQJzr2fQhuo97ibSmRoicGKmUbm3ib1tVarlFXstYq40jRmT9412Xveb/0', null);
INSERT INTO `weimei_login` VALUES ('35', '18630855366', '9999', '天津~吴', 'oNyT2t9BdUL29vq7KkD6FOCgSmOw', '2', '11', '1', '60', '11', '16-01-01 10:51:05', null, '11', '0', null, 'http://wx.qlogo.cn/mmopen/OEqNQM7hEeQcmaTkCLToLwxoDmDWAU8dlyn5I5PQ1wicVBGx8wQhicU4mEiavcfTSUVDgricVsQe44jclq7pJiaUibKwOqEIpYiaXKw/0', '');
INSERT INTO `weimei_login` VALUES ('22', '15222829150', '199112059', '维美整形～韩涵', 'oNyT2twURnRPiu8hynTZdBzs_4BI', '2', '11', '1', '200000', '11', '15-12-27 11:36:47', null, '天津市河西区', '0', null, 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEIOJceQCSfRbMm0kyL9CSIArZaWOjTeRHT2YSgQYcJmeRK4oKia6M3ib8dU6rpbZeVTv666A7jBGZCIkLWrQDIzq0ll4iaqYhbA8M/0', '');
INSERT INTO `weimei_login` VALUES ('31', '18205892421', 'jjjjjj', '名字被和谐', 'oNyT2t1iLBMMyFR8ymJVbfKpNJT4', '2', '', '0', '0', '11', '15-12-30 08:26:37', null, '11', '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQib8ISicLbjBaIiaUXRGhVHbbp9egFy7YicGCoT2nw76LK6DWupwkEBUpVib1N1Ds1Iw17v4HibS5tACK6/0', '');
INSERT INTO `weimei_login` VALUES ('32', '15900289363', '123456', 'graupel', 'oNyT2t4JmXSBHD4SpTl1XRvt5-f0', '2', '22525457', '1', '180', '1', '15-12-30 08:26:43', null, '333', '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQw1CCdsLrtHB2Gf4JFpREtdq8GW6M8AJB4qA6P8xDzmibB21d7oEiaf97dmqcDkmbz4CaJFVQCOricib/0', '');
INSERT INTO `weimei_login` VALUES ('25', '15222827595', 'zwf', '……', 'oNyT2t2R6Lc9PtuFqupCImgLioYw', '2', '11', '1', '60', '11', '15-12-28 07:05:50', null, '11', '0', null, 'http://wx.qlogo.cn/mmopen/Q3auHgzwzM5Wsl5RlqSQD3Bu8vUWBg0dOQOTAmrd1neWyyV5oxfnaqbiaRC7zerFhxPgLKstSgIqAyQYN5vUFT2sShvPw74wCXK8iaEYOA3aA/0', '');
INSERT INTO `weimei_login` VALUES ('26', '18718718718', 'gggg', 'sixi', 'oNyT2t4-fGukLknVXH_FMFTL5Ah4', '2', '', '0', '440', '0', '15-12-28 08:07:47', null, '2', '0', null, 'http://wx.qlogo.cn/mmopen/thfLhcllFYpnHv0zTKugruytW7ENNNG3vzCHJJMkYG8OxPY5WkllXSIrnpgKLgPplskeTaOKvqdT26Vwd7IBJQd6PGr9VHP5/0', '');
INSERT INTO `weimei_login` VALUES ('36', '18222164069', '5637077', '@赵永杰', 'oNyT2tz0cGlJ06XEuxh-Wdn-oCUo', '2', '11111', '1', '11200060', '111111', '16-01-01 11:17:06', null, '111111', '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQicHCcydgm4LWLA5qeI1qwwdwDqziaRvEgsHqJhJKn2c8wuhCW3beicmgST9LRBA6iaB9GtL8icDiaz1KN/0', 'qwqwaaa');
INSERT INTO `weimei_login` VALUES ('34', '15222829150', '199112059', '不一样', 'oNyT2t2w3iowX5b99LRDivog3O78', '4', null, '0', '173', null, '15-12-31 03:15:27', null, '000', '1', null, 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEKqYC0htNfbv9640pPSgnE5kXEicVGXeiag2VfoicicSQUNftkdc5uBbpYmMXoLFjV7k3ribr1rqxpCVqQ/0', null);
INSERT INTO `weimei_login` VALUES ('37', '13002260789', '05080741', '而立之年', 'oNyT2t2Px3C_usSL9xGOnrA6tQqU', '2', '1212', '1', '2000000', '1', '16-01-01 11:18:47', null, '111111', '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQ606UdHfeZ6sbG5V42tOa6D9vKMDLPtQ3NaJ2IVrHrNpLFibR4DogBvOaJTgfsTeyKjUuQCAPm1zic/0', '');
INSERT INTO `weimei_login` VALUES ('38', '18222562389', '123456', '元来', 'oNyT2tzLYfKQEe7mxkzKem-NuUpA', '2', '1212', '1', '110', '12', '16-01-01 11:55:25', null, '121', '0', null, 'http://wx.qlogo.cn/mmopen/Q3auHgzwzM5Wsl5RlqSQD3Bu8vUWBg0dmB9PXnXu5bmw0EHeMiagkwzzyujIFyZxjpia35icHTyppibNIyO0u2ZIkmEMl15iakcMMn5wonUsFFj4/0', '');
INSERT INTO `weimei_login` VALUES ('39', '15122232203', '123456', '维美-Dr.马', 'oNyT2tywS11AgP30uKPqlAS4c1dc', '2', '1212', '1', '710', '11', '16-01-01 12:30:58', null, '11', '0', null, 'http://wx.qlogo.cn/mmopen/thfLhcllFYpnHv0zTKugrs9wCczRcNIVvZPvEx8rwzT4lriaU3ASThH5z0IBsoFNph5KXfXzSP5O6YqhxyrH1cibJ5geInkYwE/0', '');
INSERT INTO `weimei_login` VALUES ('40', '13811627265', 'Kaladba915', 'Henry - Wan', 'oNyT2t22QRW4xMPItX830tbCKHcc', '1', '', '0', '0', null, '16-01-15 09:31:33', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/OEqNQM7hEeQcmaTkCLToL1dLhu7YbRCht4Ge6Fuk7rJlMk8KJAia5UyicdFSnzmayrnhicyl05q7iaopln0Fay7QvoNZIUFRmFUP/0', null);
INSERT INTO `weimei_login` VALUES ('41', '18512278032', 'admin', '杜雷', 'oNyT2t_OeGY5Ak90nJSV32tgn02s', '1', '', '0', '60', null, '16-01-15 09:32:09', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/OEqNQM7hEeS78bVOLdDHDJkY9oRPtZR9SjOXKDS59rcRQOMib7kMf9Psl7HRnXWyeIxPfZxlOJSmWLQzfyXyaiag/0', null);
INSERT INTO `weimei_login` VALUES ('42', '18522093497', 'ld1314520', '大冻咚??', 'oNyT2tyRg-Muw1YYHW7TofLAFXSs', '1', '', '0', '0', null, '16-01-15 09:32:27', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/PiajxSqBRaELThMFEFkXpYrMWj6sxtk0SAKKHvAW6nIgicsmolkDQhDomPFjblFXHYibr6XYvtzb5aKfcHJKIKPNw/0', null);
INSERT INTO `weimei_login` VALUES ('43', '15122232203', 'weimei', '维美-Dr.安', 'oNyT2tyyIHR1PYQDhIvNAMTv9PtM', '1', '', '1', '50330', '0', '16-01-16 02:50:12', null, '天津市河西区', '0', null, 'http://wx.qlogo.cn/mmopen/thfLhcllFYribOxyD7ibFZua4Eqt0zMdPiaqx6h6oTfpjcbAicvryC89iciaLianGsOlyqlGZ8jTVMkjhqoF20vt6wmzQ/0', '');
INSERT INTO `weimei_login` VALUES ('44', '15122061392', 'xtf0608', '徐滕菲', 'oNyT2tyK1NwPHHQ5UXtXF9_9yyRk', '1', '', '0', '0', null, '16-01-16 03:19:06', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/PiajxSqBRaEKI4BuWKCn12OWrDmS365NqudibEH6IOmTrmENnB5R6WQQItncMSQyj8t0z2y49UAOhONEFKV6y3Nw/0', null);
INSERT INTO `weimei_login` VALUES ('45', '18522519908', '123456', '微风拂面', 'oNyT2t-Ich25KEVAglbVh2zVg-Rs', '1', '', '1', '1100', null, '16-01-19 09:26:29', null, null, '0', null, 'http://wx.qlogo.cn/mmopen/9aX8VGlicMibibnWA7BTeagQ8icZ4XkqhQZShgMyJQObmrK6UhDVYZTIvXibG0ibpECth2HM9xrcoYgnicibebYKLibMryfUTCVSB5eVj/0', null);
