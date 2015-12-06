/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream1
Target Host: localhost
Target Database: dream1
Date: 2015/12/06 14:02:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for bm-setup
-- ----------------------------
CREATE TABLE `bm-setup` (
  `nmber` int(11) NOT NULL AUTO_INCREMENT COMMENT '门部编码',
  `name` varchar(10) NOT NULL COMMENT '部门名称',
  `shangji` varchar(20) DEFAULT NULL COMMENT '级上部门',
  `fuzeren` varchar(10) DEFAULT NULL COMMENT '门部负责人',
  `phone` varchar(20) DEFAULT NULL COMMENT '话电',
  `chuanzhen` varchar(50) DEFAULT NULL COMMENT '真传',
  `zhuangtai` varchar(255) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`nmber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for ck-setup
-- ----------------------------
CREATE TABLE `ck-setup` (
  `name` varchar(15) NOT NULL,
  `number` int(5) NOT NULL AUTO_INCREMENT,
  `default` varchar(2) NOT NULL COMMENT '否是默认仓库',
  `pic` varchar(10) DEFAULT NULL COMMENT '责人负',
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `note` varchar(30) DEFAULT NULL COMMENT '注备',
  `state` varchar(10) DEFAULT NULL COMMENT '状态',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for intercourse unit
-- ----------------------------
CREATE TABLE `intercourse unit` (
  `name` varchar(20) NOT NULL,
  `number` int(6) NOT NULL,
  `category` varchar(10) NOT NULL COMMENT '位单类别',
  `classification` varchar(10) NOT NULL COMMENT '单位分类',
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `primary contact` varchar(10) DEFAULT NULL COMMENT '首要联系人',
  `note` varchar(30) DEFAULT NULL COMMENT '注备',
  `salesman` varchar(10) DEFAULT NULL COMMENT '业务员',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for inventory category
-- ----------------------------
CREATE TABLE `inventory category` (
  `number` int(10) NOT NULL COMMENT '分类编码',
  `name` varchar(20) DEFAULT NULL COMMENT '类分名称',
  `parent` varchar(20) DEFAULT NULL COMMENT '级上分类',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for inventory file
-- ----------------------------
CREATE TABLE `inventory file` (
  `number` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `Manufacturer` varchar(20) DEFAULT NULL COMMENT '生产厂家',
  `model` varchar(15) DEFAULT NULL COMMENT '规格型号',
  `unit` varchar(4) DEFAULT NULL COMMENT '计量单位',
  `purchase` float DEFAULT '0' COMMENT '参考进价',
  `price` float DEFAULT '0' COMMENT '参考售价',
  `classify` varchar(10) DEFAULT NULL COMMENT '存货分类',
  `retail price` int(5) DEFAULT NULL COMMENT '零售价',
  `image` binary(100) DEFAULT NULL,
  `custom4` varchar(20) DEFAULT NULL COMMENT '定义自4',
  `custom5` varchar(20) DEFAULT NULL COMMENT '定义自5',
  `custom number1` varchar(5) DEFAULT NULL COMMENT '定义自数值1',
  `custom number2` varchar(5) DEFAULT NULL COMMENT '定义自数值2',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for locale
-- ----------------------------
CREATE TABLE `locale` (
  `number` int(6) NOT NULL,
  `name` varchar(10) NOT NULL,
  `parent` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for personnel category
-- ----------------------------
CREATE TABLE `personnel category` (
  `name` varchar(10) DEFAULT NULL COMMENT '别类名称',
  `number` int(5) NOT NULL COMMENT '别类编码',
  `parent` varchar(10) DEFAULT NULL COMMENT '上级类别',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for personnel file
-- ----------------------------
CREATE TABLE `personnel file` (
  `number` int(11) NOT NULL AUTO_INCREMENT COMMENT '编码 ',
  `name` varchar(10) DEFAULT NULL COMMENT '名姓',
  `department` varchar(10) DEFAULT NULL COMMENT '属所部门',
  `sex` varchar(4) DEFAULT NULL,
  `position` varchar(10) DEFAULT NULL COMMENT '职务',
  `phone` varchar(15) DEFAULT NULL,
  `telphone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `note` varchar(50) DEFAULT NULL COMMENT '注备',
  `title` varchar(10) DEFAULT NULL COMMENT '称职',
  `bank` varchar(10) DEFAULT NULL COMMENT '行银',
  `state` varchar(10) DEFAULT NULL COMMENT '态状',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for shipping methods
-- ----------------------------
CREATE TABLE `shipping methods` (
  `number` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for staff property
-- ----------------------------
CREATE TABLE `staff property` (
  `number` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for title
-- ----------------------------
CREATE TABLE `title` (
  `number` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for unit classification
-- ----------------------------
CREATE TABLE `unit classification` (
  `number` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `parent` varchar(10) DEFAULT NULL,
  `category` varchar(10) DEFAULT NULL COMMENT '单位类别',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for unit conversion
-- ----------------------------
CREATE TABLE `unit conversion` (
  `name` varchar(10) NOT NULL COMMENT '算组换名称',
  `Main Unit` varchar(6) NOT NULL COMMENT '主计量单位',
  `Aid Unit` varchar(6) NOT NULL COMMENT '辅计量单位',
  `Conversion Rate` float(10,0) NOT NULL COMMENT '换算率',
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for vocabulary
-- ----------------------------
CREATE TABLE `vocabulary` (
  `number` int(6) NOT NULL,
  `content` varchar(20) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
