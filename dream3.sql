/*
MySQL Data Transfer
Source Host: localhost
Source Database: dream3
Target Host: localhost
Target Database: dream3
Date: 2015/12/06 14:03:17
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for sales order
-- ----------------------------
CREATE TABLE `sales order` (
  `state` varchar(10) NOT NULL COMMENT '据单状态',
  `flag` varchar(4) NOT NULL COMMENT '货退标志',
  `number` varchar(15) NOT NULL COMMENT '据号单',
  `date` date NOT NULL DEFAULT '0000-00-00' COMMENT '据单日期',
  `client` varchar(10) DEFAULT NULL COMMENT '客户',
  `department` varchar(10) DEFAULT NULL COMMENT '销售部门',
  `seller` varchar(10) DEFAULT NULL COMMENT '销售员',
  `amount` float DEFAULT '0' COMMENT '销售金额',
  `person` varchar(20) DEFAULT NULL COMMENT '制单人',
  `create_at` date DEFAULT '0000-00-00' COMMENT '创建时间',
  `obsolete people` varchar(10) DEFAULT NULL COMMENT '作废人',
  `saless-type` varchar(10) DEFAULT NULL COMMENT '销售类型',
  `contacts` varchar(10) DEFAULT NULL COMMENT '系人联',
  `phone` varchar(15) DEFAULT NULL,
  `note` varchar(30) DEFAULT NULL,
  `modifier` varchar(10) DEFAULT NULL COMMENT '修改人',
  `handled` varchar(10) DEFAULT NULL COMMENT '经手人',
  `deliveryman` varchar(10) DEFAULT NULL COMMENT '送货员',
  `Custom1` varchar(30) DEFAULT NULL COMMENT '自定义项1',
  `Custom4` varchar(30) DEFAULT NULL COMMENT '自定义项4',
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sales type
-- ----------------------------
CREATE TABLE `sales type` (
  `number` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
