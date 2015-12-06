/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream4
Target Host: localhost
Target Database: dream4
Date: 2015/12/06 14:03:27
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for adjustment
-- ----------------------------
CREATE TABLE `adjustment` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `amount` float DEFAULT '0' COMMENT '合计金额',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for allocation
-- ----------------------------
CREATE TABLE `allocation` (
  `status` varchar(4) NOT NULL COMMENT '据单状态',
  `number` varchar(20) NOT NULL COMMENT '据号单',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '单据日期',
  `handled` varchar(10) DEFAULT NULL COMMENT '经手人',
  `note` varchar(30) DEFAULT NULL COMMENT '备注',
  `maker` varchar(10) DEFAULT NULL COMMENT '制单人',
  `create_at` date DEFAULT '0000-00-00',
  `obsolete peopl` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for beginning stocks
-- ----------------------------
CREATE TABLE `beginning stocks` (
  `name` varchar(10) NOT NULL COMMENT '货存名称',
  `number` varchar(20) NOT NULL COMMENT '存货编码',
  `specifications model` varchar(10) DEFAULT NULL COMMENT '规格型号',
  `warehouse` varchar(20) DEFAULT NULL COMMENT '库仓名称',
  `unit` varchar(20) DEFAULT NULL COMMENT '单位',
  `quantity` int(10) DEFAULT NULL COMMENT '量数',
  `cost` float DEFAULT '0' COMMENT '本成单价',
  `money` float DEFAULT '0' COMMENT '期初金额',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for check
-- ----------------------------
CREATE TABLE `check` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `create_at` date DEFAULT '0000-00-00',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for other instorage
-- ----------------------------
CREATE TABLE `other instorage` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `category` varchar(10) DEFAULT NULL COMMENT '入库类别',
  `supplier` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT '0' COMMENT '合计金额',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `create_at` date DEFAULT '0000-00-00',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for other outstorag
-- ----------------------------
CREATE TABLE `other outstorag` (
  `status` varchar(4) NOT NULL,
  `number` varchar(15) NOT NULL,
  `date` date NOT NULL DEFAULT '0000-00-00',
  `category` varchar(10) DEFAULT NULL COMMENT '入库类别',
  `client` varchar(10) DEFAULT NULL,
  `amount` float DEFAULT '0' COMMENT '合计金额',
  `handled` varchar(10) DEFAULT NULL,
  `maker` varchar(10) DEFAULT NULL,
  `create_at` date DEFAULT '0000-00-00',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for warehousing category
-- ----------------------------
CREATE TABLE `warehousing category` (
  `name` varchar(10) NOT NULL,
  `sys  preferences` varchar(2) NOT NULL COMMENT '统系预置',
  `sequence` int(10) NOT NULL AUTO_INCREMENT COMMENT '序排',
  PRIMARY KEY (`sequence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
