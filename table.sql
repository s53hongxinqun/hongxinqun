/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : table

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-15 16:28:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `anode`
-- ----------------------------
DROP TABLE IF EXISTS `anode`;
CREATE TABLE `anode` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of anode
-- ----------------------------
INSERT INTO `anode` VALUES ('1', '浏览用户', 'user', 'index', '1');
INSERT INTO `anode` VALUES ('2', '添加用户', 'user', 'add', '1');
INSERT INTO `anode` VALUES ('3', '删除用户', 'user', 'delete', '1');
INSERT INTO `anode` VALUES ('4', '修改用户', 'user', 'edit', '1');
INSERT INTO `anode` VALUES ('5', '浏览角色', 'role', 'index', '1');
INSERT INTO `anode` VALUES ('6', '添加角色', 'role', 'add', '1');
INSERT INTO `anode` VALUES ('7', '删除角色', 'role', 'delete', '1');
INSERT INTO `anode` VALUES ('8', '编辑角色', 'role', 'edit', '1');
INSERT INTO `anode` VALUES ('9', '浏览节点', 'node', 'index', '1');
INSERT INTO `anode` VALUES ('10', '添加节点', 'node', 'add', '1');
INSERT INTO `anode` VALUES ('11', '删除节点', 'node', 'delete', '1');
INSERT INTO `anode` VALUES ('12', '修改节点', 'node', 'edit', '1');
INSERT INTO `anode` VALUES ('13', '浏览用户分配角色', 'user', 'rolelist', '1');
INSERT INTO `anode` VALUES ('14', '更改用户分配角色', 'user', 'saverole', '1');
INSERT INTO `anode` VALUES ('15', '浏览角色的操作权限', 'role', 'nodelist', '1');
INSERT INTO `anode` VALUES ('16', '修改角色中操作权限', 'role', 'savenode', '1');
INSERT INTO `anode` VALUES ('19', '浏览用户分配角色', 'user', 'rolelist', '1');

-- ----------------------------
-- Table structure for `arole`
-- ----------------------------
DROP TABLE IF EXISTS `arole`;
CREATE TABLE `arole` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of arole
-- ----------------------------
INSERT INTO `arole` VALUES ('2', '项目经理', '1', '负责所有项目');
INSERT INTO `arole` VALUES ('3', '部门主任', '1', '负责当期部门管理');
INSERT INTO `arole` VALUES ('7', '临时工', '1', '公司员工');

-- ----------------------------
-- Table structure for `arole_node`
-- ----------------------------
DROP TABLE IF EXISTS `arole_node`;
CREATE TABLE `arole_node` (
  `rid` smallint(6) unsigned NOT NULL,
  `nid` smallint(6) unsigned NOT NULL,
  KEY `groupId` (`rid`),
  KEY `nodeId` (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of arole_node
-- ----------------------------
INSERT INTO `arole_node` VALUES ('2', '16');
INSERT INTO `arole_node` VALUES ('3', '7');
INSERT INTO `arole_node` VALUES ('2', '15');
INSERT INTO `arole_node` VALUES ('2', '14');
INSERT INTO `arole_node` VALUES ('2', '13');
INSERT INTO `arole_node` VALUES ('2', '12');
INSERT INTO `arole_node` VALUES ('2', '11');
INSERT INTO `arole_node` VALUES ('2', '10');
INSERT INTO `arole_node` VALUES ('2', '9');
INSERT INTO `arole_node` VALUES ('2', '8');
INSERT INTO `arole_node` VALUES ('2', '7');
INSERT INTO `arole_node` VALUES ('2', '6');
INSERT INTO `arole_node` VALUES ('2', '5');
INSERT INTO `arole_node` VALUES ('2', '4');
INSERT INTO `arole_node` VALUES ('2', '3');
INSERT INTO `arole_node` VALUES ('3', '2');
INSERT INTO `arole_node` VALUES ('2', '2');
INSERT INTO `arole_node` VALUES ('2', '1');
INSERT INTO `arole_node` VALUES ('3', '13');
INSERT INTO `arole_node` VALUES ('3', '15');
INSERT INTO `arole_node` VALUES ('7', '13');
INSERT INTO `arole_node` VALUES ('7', '1');
INSERT INTO `arole_node` VALUES ('7', '15');

-- ----------------------------
-- Table structure for `auser`
-- ----------------------------
DROP TABLE IF EXISTS `auser`;
CREATE TABLE `auser` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userpass` char(32) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auser
-- ----------------------------
INSERT INTO `auser` VALUES ('1', 'admin', '管理员', '21232f297a57a5a743894a0e4a801fc3', '');
INSERT INTO `auser` VALUES ('76', '酷酷的安哲', '安哲啊', 'e10adc3949ba59abbe56e057f20f883e', '2016-11-10 18-05-21');

-- ----------------------------
-- Table structure for `auser_role`
-- ----------------------------
DROP TABLE IF EXISTS `auser_role`;
CREATE TABLE `auser_role` (
  `rid` mediumint(9) unsigned DEFAULT NULL,
  `uid` int(6) unsigned NOT NULL,
  KEY `group_id` (`rid`),
  KEY `user_id` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auser_role
-- ----------------------------
INSERT INTO `auser_role` VALUES ('3', '1');
INSERT INTO `auser_role` VALUES ('2', '1');
INSERT INTO `auser_role` VALUES ('3', '74');
INSERT INTO `auser_role` VALUES ('2', '76');
INSERT INTO `auser_role` VALUES ('3', '76');

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foodsid` int(11) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `score` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '3', '2', '好啊', '0', '5');
INSERT INTO `comment` VALUES ('2', '2', '4', '可以', '9', '4');

-- ----------------------------
-- Table structure for `desk`
-- ----------------------------
DROP TABLE IF EXISTS `desk`;
CREATE TABLE `desk` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `people` tinyint(10) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of desk
-- ----------------------------
INSERT INTO `desk` VALUES ('2', '2', '0');
INSERT INTO `desk` VALUES ('3', '4', '0');
INSERT INTO `desk` VALUES ('4', '8', '1');
INSERT INTO `desk` VALUES ('9', '8', '2');

-- ----------------------------
-- Table structure for `foods`
-- ----------------------------
DROP TABLE IF EXISTS `foods`;
CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(11) DEFAULT NULL,
  `foods` varchar(32) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `price` double(6,2) DEFAULT NULL,
  `picname` varchar(255) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `is_empty` tinyint(11) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods
-- ----------------------------
INSERT INTO `foods` VALUES ('1', '1', '鸡腿', '超级鸡腿堡非常好', '120.00', '1.jpg', '1', '1', '1479134294');
INSERT INTO `foods` VALUES ('2', '1', '鸭腿', '巨大的鸭腿', '2000.00', '3.jpg', '2', '2', '1479134294');
INSERT INTO `foods` VALUES ('3', '1', '麻辣小龙虾', '辣到爽歪歪', '100.00', '2.jpg', '3', '2', '1479134294');
INSERT INTO `foods` VALUES ('35', '12', '阿萨德撒', null, '13.00', null, '2', '1', '1479134294');
INSERT INTO `foods` VALUES ('36', '12', '牛肉', '新鲜的牛肉类', '2000.00', null, '1', '2', '1479134294');
INSERT INTO `foods` VALUES ('37', '1', '肥肉', '阿大声道', '9999.99', null, '1', '2', '1479134294');
INSERT INTO `foods` VALUES ('38', '12', '撒的阿萨德', '萨达萨达按时', '0.00', null, '2', '1', '1479173714');
INSERT INTO `foods` VALUES ('39', '3', '撒的', '阿大声道撒的', '0.00', null, '1', '2', '1479174027');
INSERT INTO `foods` VALUES ('40', '1', '红烧猪蹄', '萨达萨达', '12.00', '', '1', '1', '1479175714');
INSERT INTO `foods` VALUES ('41', '12', '肌肉', '萨达萨达', '1313.00', 'Uploads/2016-11-15/582a7405d654b.jpg', '2', '2', '1479177221');
INSERT INTO `foods` VALUES ('42', '12', '老实', '的撒旦撒打算的撒', '133.00', 'Uploads/2016-11-15/582a75feb2a7f.jpg', '2', '1', '1479177726');
INSERT INTO `foods` VALUES ('43', '12', 'qwd', 'dsad sad', '1212.00', 'Uploads/2016-11-15/582a79ffe2e85.jpg', '1', '1', '1479178751');
INSERT INTO `foods` VALUES ('44', '13', '萨达萨达', '的飒飒啊大大声', '1212.00', 'Uploads/2016-11-15/582aa18730a22.jpg', '2', '2', '1479188871');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `desk` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '2113', '2', '120', '1', null);
INSERT INTO `orders` VALUES ('2', '1111', '4', '2112', '0', null);
INSERT INTO `orders` VALUES ('3', '3333', '9', '7667', '1', null);
INSERT INTO `orders` VALUES ('4', '2222', '3', '320', '0', null);
INSERT INTO `orders` VALUES ('5', '32132', '2', '1111', '1', null);

-- ----------------------------
-- Table structure for `orders_car`
-- ----------------------------
DROP TABLE IF EXISTS `orders_car`;
CREATE TABLE `orders_car` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `desk` int(11) DEFAULT NULL,
  `foodsid` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `price` double(6,2) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_car
-- ----------------------------
INSERT INTO `orders_car` VALUES ('23', '4', '4', '麻辣小龙虾', '120.00', '10');
INSERT INTO `orders_car` VALUES ('40', '2', '2', '蛋糕', '200.00', '1');

-- ----------------------------
-- Table structure for `orders_detail`
-- ----------------------------
DROP TABLE IF EXISTS `orders_detail`;
CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `foodsid` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `price` double(6,2) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_detail
-- ----------------------------
INSERT INTO `orders_detail` VALUES ('14', '24', '2', '蛋糕', '200.00', '5', '2', null);
INSERT INTO `orders_detail` VALUES ('23', '23', '3', '小龙虾', '120.00', '10', '1', null);

-- ----------------------------
-- Table structure for `type`
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `pid` int(11) DEFAULT '0',
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '小龙虾', '0', '0,');
INSERT INTO `type` VALUES ('2', '清真龙虾', '0', '0,1，');
INSERT INTO `type` VALUES ('3', '麻辣龙虾', '0', '0,1，');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `pass` char(32) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '123456', '0');
INSERT INTO `user` VALUES ('2', '小万万', '123456', '0');
INSERT INTO `user` VALUES ('3', '酷酷的安哲', '123456', '0');

-- ----------------------------
-- Table structure for `vip`
-- ----------------------------
DROP TABLE IF EXISTS `vip`;
CREATE TABLE `vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) DEFAULT NULL,
  `pass` char(32) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `addtime` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vip
-- ----------------------------
INSERT INTO `vip` VALUES ('1', '小万万', '123456', '133263252433', null, '0');
INSERT INTO `vip` VALUES ('2', '小冰冰', '123456', '113232333', null, '0');
INSERT INTO `vip` VALUES ('3', '小康康', '123456', '124343432', null, '0');
