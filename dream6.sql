/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream6
Target Host: localhost
Target Database: dream6
Date: 2015/12/06 14:03:40
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for encode_rules
-- ----------------------------
CREATE TABLE `encode_rules` (
  `number` int(10) NOT NULL COMMENT '对象编码',
  `name` varchar(15) NOT NULL COMMENT '对象名称',
  `preview` int(10) NOT NULL COMMENT '码编预览',
  `way` varchar(20) NOT NULL COMMENT '码编方式',
  `first prefix` varchar(10) DEFAULT NULL COMMENT '一第前缀',
  `format1` varchar(20) DEFAULT NULL COMMENT '式格1',
  `length1` varchar(10) DEFAULT NULL COMMENT '度长1',
  `second prefix` varchar(10) DEFAULT NULL COMMENT '第二前缀',
  `format2` varchar(20) DEFAULT NULL,
  `length2` varchar(10) DEFAULT NULL,
  `third prefix` varchar(10) DEFAULT NULL COMMENT '三第前缀',
  `format3` varchar(20) DEFAULT NULL,
  `length3` varchar(10) DEFAULT NULL,
  `snumber_basis` varchar(10) NOT NULL COMMENT '水号流依据',
  `snumber_length` int(5) NOT NULL COMMENT '水号流长度',
  `snumber_start` int(5) NOT NULL COMMENT '水号流起始',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
