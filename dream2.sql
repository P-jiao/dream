/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream2
Target Host: localhost
Target Database: dream2
Date: 2015/12/06 14:03:09
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for basket
-- ----------------------------
CREATE TABLE `basket` (
  `state` varchar(4) NOT NULL COMMENT '据单状态',
  `flag` varchar(4) NOT NULL COMMENT '货退标志',
  `number` varchar(15) NOT NULL COMMENT '据号单',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '据单日期',
  `supplier` varchar(10) DEFAULT NULL COMMENT '应商供',
  `department` varchar(10) DEFAULT NULL COMMENT '采购部门',
  `buyer` varchar(10) DEFAULT NULL COMMENT '购采员',
  `amount` float DEFAULT '0' COMMENT '购采金额',
  `person` varchar(20) NOT NULL COMMENT '制单人',
  `create_at` date NOT NULL DEFAULT '0000-00-00' COMMENT '创建时间',
  `obsolete people` varchar(10) NOT NULL COMMENT '作废人',
  `contacts` varchar(10) DEFAULT NULL COMMENT '系人联',
  `Custom1` varchar(30) DEFAULT NULL COMMENT '自定义项1',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for purchase type
-- ----------------------------
CREATE TABLE `purchase type` (
  `number` int(6) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
