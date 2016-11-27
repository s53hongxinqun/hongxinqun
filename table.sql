/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : table

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2016-11-27 19:39:35
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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

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
INSERT INTO `anode` VALUES ('20', '浏览订单', 'order', 'index', '1');
INSERT INTO `anode` VALUES ('21', '浏览订单', 'order', 'index', '1');
INSERT INTO `anode` VALUES ('22', '订单删除', 'order', 'del', '1');
INSERT INTO `anode` VALUES ('23', '浏览餐桌', 'desk', 'index', '1');
INSERT INTO `anode` VALUES ('24', '餐桌添加', 'desk', 'insert', '1');
INSERT INTO `anode` VALUES ('25', '餐桌修改', 'desk', 'edit', '1');
INSERT INTO `anode` VALUES ('26', '餐桌删除', 'desk', 'del', '1');
INSERT INTO `anode` VALUES ('27', '浏览分类', 'type', 'index', '1');
INSERT INTO `anode` VALUES ('28', '分类添加', 'type', 'insert', '1');
INSERT INTO `anode` VALUES ('29', '分类修改', 'type', 'edit', '1');
INSERT INTO `anode` VALUES ('30', '分类删除', 'type', 'del', '1');
INSERT INTO `anode` VALUES ('31', '会员浏览', 'vip', 'index', '1');
INSERT INTO `anode` VALUES ('32', '会员添加', 'vip', 'insert', '1');
INSERT INTO `anode` VALUES ('33', '会员编辑', 'vip', 'edit', '1');
INSERT INTO `anode` VALUES ('34', '会员删除', 'vip', 'del', '1');
INSERT INTO `anode` VALUES ('35', '厨师浏览', 'cooking', 'index', '1');
INSERT INTO `anode` VALUES ('36', '厨师编辑', 'cooking', 'edit', '1');
INSERT INTO `anode` VALUES ('37', '餐点浏览', 'food', 'index', '1');
INSERT INTO `anode` VALUES ('38', '餐点添加', 'food', 'insert', '1');
INSERT INTO `anode` VALUES ('39', '餐点修改', 'food', 'edit', '1');
INSERT INTO `anode` VALUES ('40', '餐点删除', 'food', 'del', '1');
INSERT INTO `anode` VALUES ('41', '浏览厨师', 'cooking', 'index', '1');
INSERT INTO `anode` VALUES ('42', '厨师管理编辑', 'cooking', 'edit', '1');
INSERT INTO `anode` VALUES ('43', '轮播图浏览', 'limg', 'index', '1');
INSERT INTO `anode` VALUES ('44', '轮播图编辑', 'limg', 'edit', '1');
INSERT INTO `anode` VALUES ('45', '轮播图删除', 'limg', 'del', '1');
INSERT INTO `anode` VALUES ('46', '轮播图添加', 'limg', 'insert', '1');
INSERT INTO `anode` VALUES ('47', '浏览上菜员管理', 'dish', 'index', '1');
INSERT INTO `anode` VALUES ('48', '上菜员点击上菜', 'dish', 'change', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of arole
-- ----------------------------
INSERT INTO `arole` VALUES ('2', '超级管理员', '1', '负责所有');
INSERT INTO `arole` VALUES ('3', '厨师', '1', '负责当期菜品');
INSERT INTO `arole` VALUES ('7', '服务员', '1', '餐厅员工');
INSERT INTO `arole` VALUES ('9', '上菜员', '1', '给顾客上菜');

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
INSERT INTO `arole_node` VALUES ('3', '36');
INSERT INTO `arole_node` VALUES ('3', '35');
INSERT INTO `arole_node` VALUES ('2', '48');
INSERT INTO `arole_node` VALUES ('2', '47');
INSERT INTO `arole_node` VALUES ('2', '46');
INSERT INTO `arole_node` VALUES ('2', '45');
INSERT INTO `arole_node` VALUES ('2', '44');
INSERT INTO `arole_node` VALUES ('2', '43');
INSERT INTO `arole_node` VALUES ('2', '42');
INSERT INTO `arole_node` VALUES ('2', '41');
INSERT INTO `arole_node` VALUES ('2', '40');
INSERT INTO `arole_node` VALUES ('2', '39');
INSERT INTO `arole_node` VALUES ('2', '37');
INSERT INTO `arole_node` VALUES ('2', '36');
INSERT INTO `arole_node` VALUES ('2', '35');
INSERT INTO `arole_node` VALUES ('3', '23');
INSERT INTO `arole_node` VALUES ('2', '34');
INSERT INTO `arole_node` VALUES ('2', '33');
INSERT INTO `arole_node` VALUES ('3', '5');
INSERT INTO `arole_node` VALUES ('3', '1');
INSERT INTO `arole_node` VALUES ('7', '13');
INSERT INTO `arole_node` VALUES ('7', '5');
INSERT INTO `arole_node` VALUES ('7', '1');
INSERT INTO `arole_node` VALUES ('2', '32');
INSERT INTO `arole_node` VALUES ('2', '31');
INSERT INTO `arole_node` VALUES ('2', '30');
INSERT INTO `arole_node` VALUES ('2', '29');
INSERT INTO `arole_node` VALUES ('2', '28');
INSERT INTO `arole_node` VALUES ('2', '27');
INSERT INTO `arole_node` VALUES ('2', '26');
INSERT INTO `arole_node` VALUES ('2', '25');
INSERT INTO `arole_node` VALUES ('2', '24');
INSERT INTO `arole_node` VALUES ('2', '23');
INSERT INTO `arole_node` VALUES ('2', '22');
INSERT INTO `arole_node` VALUES ('2', '21');
INSERT INTO `arole_node` VALUES ('2', '20');
INSERT INTO `arole_node` VALUES ('2', '19');
INSERT INTO `arole_node` VALUES ('2', '16');
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
INSERT INTO `arole_node` VALUES ('2', '2');
INSERT INTO `arole_node` VALUES ('2', '1');
INSERT INTO `arole_node` VALUES ('3', '37');
INSERT INTO `arole_node` VALUES ('3', '38');
INSERT INTO `arole_node` VALUES ('3', '39');
INSERT INTO `arole_node` VALUES ('3', '40');
INSERT INTO `arole_node` VALUES ('3', '47');
INSERT INTO `arole_node` VALUES ('7', '15');
INSERT INTO `arole_node` VALUES ('7', '19');
INSERT INTO `arole_node` VALUES ('7', '20');
INSERT INTO `arole_node` VALUES ('7', '21');
INSERT INTO `arole_node` VALUES ('7', '22');
INSERT INTO `arole_node` VALUES ('7', '23');
INSERT INTO `arole_node` VALUES ('7', '24');
INSERT INTO `arole_node` VALUES ('7', '25');
INSERT INTO `arole_node` VALUES ('7', '26');
INSERT INTO `arole_node` VALUES ('7', '27');
INSERT INTO `arole_node` VALUES ('7', '28');
INSERT INTO `arole_node` VALUES ('7', '29');
INSERT INTO `arole_node` VALUES ('7', '30');
INSERT INTO `arole_node` VALUES ('7', '31');
INSERT INTO `arole_node` VALUES ('7', '32');
INSERT INTO `arole_node` VALUES ('7', '33');
INSERT INTO `arole_node` VALUES ('7', '34');
INSERT INTO `arole_node` VALUES ('7', '35');
INSERT INTO `arole_node` VALUES ('7', '36');
INSERT INTO `arole_node` VALUES ('7', '37');
INSERT INTO `arole_node` VALUES ('7', '38');
INSERT INTO `arole_node` VALUES ('7', '39');
INSERT INTO `arole_node` VALUES ('7', '40');
INSERT INTO `arole_node` VALUES ('7', '41');
INSERT INTO `arole_node` VALUES ('7', '42');
INSERT INTO `arole_node` VALUES ('7', '43');
INSERT INTO `arole_node` VALUES ('7', '44');
INSERT INTO `arole_node` VALUES ('7', '45');
INSERT INTO `arole_node` VALUES ('7', '46');
INSERT INTO `arole_node` VALUES ('7', '47');
INSERT INTO `arole_node` VALUES ('7', '48');
INSERT INTO `arole_node` VALUES ('9', '47');
INSERT INTO `arole_node` VALUES ('9', '48');

-- ----------------------------
-- Table structure for `auser`
-- ----------------------------
DROP TABLE IF EXISTS `auser`;
CREATE TABLE `auser` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `userpass` char(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auser
-- ----------------------------
INSERT INTO `auser` VALUES ('1', 'admin', '管理员', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO `auser` VALUES ('76', '酷酷的安哲', '安哲啊', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `auser` VALUES ('77', '洪鑫群', '洪鑫群', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `auser` VALUES ('78', '万黎君', '万黎君', 'e10adc3949ba59abbe56e057f20f883e');

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
INSERT INTO `auser_role` VALUES ('7', '77');
INSERT INTO `auser_role` VALUES ('3', '76');
INSERT INTO `auser_role` VALUES ('9', '78');

-- ----------------------------
-- Table structure for `comment`
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foodsid` int(11) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `status` tinyint(10) DEFAULT '0',
  `addtime` bigint(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('3', '74', '14', '狠辣', '0', '13555656');
INSERT INTO `comment` VALUES ('4', '40', '游客', '111', '0', '1480095388');
INSERT INTO `comment` VALUES ('5', '59', '游客', '餐厅装修品质不错\r\n', '0', '1480095547');
INSERT INTO `comment` VALUES ('6', '65', '游客', '菜品还可以', '0', '1480136708');

-- ----------------------------
-- Table structure for `desk`
-- ----------------------------
DROP TABLE IF EXISTS `desk`;
CREATE TABLE `desk` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `people` tinyint(10) DEFAULT NULL,
  `status` tinyint(10) DEFAULT NULL,
  `help` tinyint(10) DEFAULT '0' COMMENT '0 : 无请求 1：请求结账 2：请求服务',
  `vip` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of desk
-- ----------------------------
INSERT INTO `desk` VALUES ('1', '1', '0', '0', '');
INSERT INTO `desk` VALUES ('2', '2', '1', '0', '');
INSERT INTO `desk` VALUES ('3', '1', '0', '0', null);
INSERT INTO `desk` VALUES ('4', '2', '1', '0', '');
INSERT INTO `desk` VALUES ('5', '2', '1', '0', '');
INSERT INTO `desk` VALUES ('6', '0', '0', '0', null);
INSERT INTO `desk` VALUES ('7', '0', '1', '0', '');
INSERT INTO `desk` VALUES ('8', '2', '1', '0', '');
INSERT INTO `desk` VALUES ('9', '0', '1', '0', '');
INSERT INTO `desk` VALUES ('10', '1', '1', '0', '');
INSERT INTO `desk` VALUES ('11', '0', '1', '0', '');
INSERT INTO `desk` VALUES ('12', '0', '1', '0', '');
INSERT INTO `desk` VALUES ('13', '1', '1', '0', '');
INSERT INTO `desk` VALUES ('14', '1', '1', '0', '');
INSERT INTO `desk` VALUES ('15', '2', '2', '0', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods
-- ----------------------------
INSERT INTO `foods` VALUES ('38', '4', '红烧肉', '口感较好  肥而不腻啊啊啊', '50.00', 'Uploads/2016-11-16/582bfd431c57b.jpg', '2', '2', '1479277890');
INSERT INTO `foods` VALUES ('39', '4', '麻辣排骨', '保证你爽到爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆爆', '100.00', 'Uploads/2016-11-16/582bfd8400af3.jpg', '2', '2', '1479277955');
INSERT INTO `foods` VALUES ('40', '4', '麻辣小龙虾', '改善血液循环、延缓衰老、抗氧化', '120.00', 'Uploads/2016-11-16/582c000f3f7d4.jpg', '2', '2', '1479278607');
INSERT INTO `foods` VALUES ('41', '4', '油炸螃蟹', '通过10道赛选，放入作料，口感较好', '120.00', 'Uploads/2016-11-16/582c00d6c5de2.jpg', '2', '2', '1479278806');
INSERT INTO `foods` VALUES ('42', '4', '牛排', '新鲜的香料植物加上橄榄油制作而成', '150.00', 'Uploads/2016-11-16/582c01b0585b5.jpg', '2', '2', '1479279024');
INSERT INTO `foods` VALUES ('43', '4', '清蒸鱼', '植物油 料酒 盐 葱，部分切片部分切丝姜	部分切片部分切丝 制作而成', '80.00', 'Uploads/2016-11-16/582c024a7618d.jpg', '2', '2', '1479279178');
INSERT INTO `foods` VALUES ('44', '4', '三文鱼', '把切好的姜末撒在盘中生鱼片上，在鱼片旁边摆上沥净水分的姜片，并用黄瓜花、番芫荽稍加点缀', '120.00', 'Uploads/2016-11-16/582c02f756934.jpg', '2', '2', '1479279351');
INSERT INTO `foods` VALUES ('45', '4', '蛋糕', '将全蛋、砂糖 面粉过筛分2、3次慢慢加入蛋液 把鲜奶油和砂糖制作完成', '60.00', 'Uploads/2016-11-16/582c0436d1337.jpg', '2', '2', '1479279670');
INSERT INTO `foods` VALUES ('46', '4', '鸡蛋脆饼', '焦香的培根，被卷在软嫩鲜香的鸡蛋皮内，再配以生菜清脆的口感', '40.00', 'Uploads/2016-11-16/582c05b174967.jpg', '2', '2', '1479280049');
INSERT INTO `foods` VALUES ('47', '4', '红烧烤鸡', '烤鸡，肉质细嫩，滋味鲜美，配以土豆胡萝卜，营养更加全面', '121.00', 'Uploads/2016-11-16/582c06902a0f8.jpg', '2', '2', '1479280272');
INSERT INTO `foods` VALUES ('48', '5', '蒜香叉烧排骨', '第一步：调腌料。第二步：腌肉。第三步：烤排骨。第四步：熬汁 制作完成', '148.00', 'Uploads/2016-11-16/582c077cdf96d.jpg', '2', '2', '1479280508');
INSERT INTO `foods` VALUES ('49', '5', '拔丝香蕉', '沾满蛋液的香蕉段在淀粉中再打个滚，沾满淀粉 将香蕉炸至淡黄色，捞出沥油', '123.00', 'Uploads/2016-11-16/582c081681c97.jpg', '2', '2', '1479280662');
INSERT INTO `foods` VALUES ('50', '5', '脆皮鸡腿', '姜洗净切片，鸡腿洗净，加入开水里， 煮15分钟捞起 捞起沥油即可', '123.00', 'Uploads/2016-11-16/582c09772c22a.jpg', '2', '2', '1479281015');
INSERT INTO `foods` VALUES ('51', '5', '水煮鱼', '把炸过的花椒切碎，撒在鱼肉表面，再放入姜和蒜末，锅入油，烧热，淋在姜蒜制作完成', '98.00', 'Uploads/2016-11-16/582c0b3d91351.jpg', '2', '2', '1479281469');
INSERT INTO `foods` VALUES ('52', '5', '鱼香茄子', '1勺料酒、2勺酱油、3勺白糖、四勺醋、5勺清水 倒入料汁翻炒制作完成', '132.00', 'Uploads/2016-11-16/582c0c06c5555.jpg', '2', '2', '1479281670');
INSERT INTO `foods` VALUES ('53', '5', '香辣鱿鱼丝', '鱿鱼须 100g 辅料细芹菜1棵姜1小块花椒粒少许大蒜2瓣干红辣椒3个招牌拌饭酱1大勺白糖少许料酒2小勺白醋1小勺生抽2小勺制作', '132.00', 'Uploads/2016-11-16/582c0c7a1c889.jpg', '2', '2', '1479281786');
INSERT INTO `foods` VALUES ('54', '5', '外婆家醉鱿鱼', '原材选为鲜活阿根廷鱿鱼在船上零下36度后急速冷冻，结合传统古法，加绍兴酒(糟烧酒)加纯中药秘方提炼香料精制而成,口感鲜香滑爽，柔韧弹牙', '310.00', 'Uploads/2016-11-16/582c0d9c03876.jpg', '1', '2', '1479282075');
INSERT INTO `foods` VALUES ('55', '5', '雪山玫瑰', '喜来客雪山玫瑰采用玫瑰茄作为原料，玫瑰茄又名：洛神花、洛神葵、山茄等，是锦葵科木槿属的一年生草本植物，广布于热带和亚热带地区。', '450.00', 'Uploads/2016-11-16/582c0e13abf2c.jpg', '1', '2', '1479282195');
INSERT INTO `foods` VALUES ('56', '5', '碳烤将军牛肋排', '无论色香味都非常不错，肥油都烤掉了，肉质酥而不烂，入口满嘴香气四溢。', '985.00', 'Uploads/2016-11-16/582c0ec0a6101.jpg', '1', '2', '1479282368');
INSERT INTO `foods` VALUES ('57', '5', '章鱼丸子', '章鱼小丸子的成份主要是章鱼，章鱼烧粉，柴鱼片，海苔等．', '236.00', 'Uploads/2016-11-16/582c0f3fdf427.jpg', '1', '2', '1479282495');
INSERT INTO `foods` VALUES ('58', '5', '冰杨梅', '冷冻冰杨梅，口感香甜。原汁原味，让您回味无穷。', '60.00', 'Uploads/2016-11-16/582c1065a22d0.jpg', '2', '2', '1479282789');
INSERT INTO `foods` VALUES ('59', '6', '蟹黄鱼丸', '蟹黄鱼丸也被誉为长寿食品，\r\n以粉嫩爽口、口感细腻著称。\r\n我们今天用它跟萝卜、鱼头一起滚汤，鲜上加鲜，\r\n让人不由感叹：品此美味，不辞辛劳作羹汤。', '97.00', 'Uploads/2016-11-22/5833cb1074dce.jpg', '2', '2', '1479282973');
INSERT INTO `foods` VALUES ('60', '6', '香卤猪耳', '猪耳很有营养，并且口感非常好，尤其是当凉菜吃的“卤猪耳”\r\n吃到嘴里是又柔韧又脆，味道鲜香不腻，且富含胶质。', '140.00', 'Uploads/2016-11-16/582c11623a867.jpg', '2', '2', '1479283042');
INSERT INTO `foods` VALUES ('61', '6', '芙蓉虾', '油锅炸至金黄色后浮起，倒出装盘即可', '240.00', 'Uploads/2016-11-16/582c11eecd051.jpg', '2', '2', '1479283182');
INSERT INTO `foods` VALUES ('62', '6', '绿茶芋卷', '油 炸：中、低温油120-130℃炸制2分钟即可装盘', '60.00', 'Uploads/2016-11-16/582c12ab5e209.jpg', '2', '2', '1479283371');
INSERT INTO `foods` VALUES ('63', '6', '麻婆豆腐', '香辣背后的诱惑', '122.00', 'Uploads/2016-11-16/582c13c0a6d8d.jpg', '2', '2', '1479283648');
INSERT INTO `foods` VALUES ('64', '6', '肉末茄子', '茄子是为数不多的紫色蔬菜，也是夏日餐桌上十分常见的家常蔬菜，它的紫皮中含有丰富的维生素E和维生素P，是其它蔬菜无法比的，多吃一些可软化血管，降低胆固醇，是高血压患者的食疗佳品', '60.00', 'Uploads/2016-11-16/582c143eb7800.jpg', '2', '2', '1479283774');
INSERT INTO `foods` VALUES ('65', '6', '胭脂冬瓜', '冬瓜200g苋菜200g辅料蜂蜜适量制作完成', '60.00', 'Uploads/2016-11-16/582c14c21e0fa.jpg', '2', '2', '1479283906');
INSERT INTO `foods` VALUES ('66', '6', '西葫芦夹心饼', '西葫芦调节人体代谢，具有减肥、抗癌防癌的功效。西葫芦含有较多的维生素C、葡萄糖等营养物质，尤其是钙的含量极高。而且，西葫芦富含水分，有润泽肌肤的作用', '96.00', 'Uploads/2016-11-16/582c185b0e1cd.jpg', '2', '2', '1479284827');
INSERT INTO `foods` VALUES ('67', '7', '皮蛋香粥', '皮蛋是清热、降温的食物，在火热的夏天，不能贪凉，喝点温和解暑的粥品，既养胃又解暑，很是合适', '67.00', 'Uploads/2016-11-16/582c18b0ba353.jpg', '2', '2', '1479284912');
INSERT INTO `foods` VALUES ('68', '7', '三杯鸡', '此菜色泽酱红、原汁原味，醇香诱人，酒饭皆宜', '153.00', 'Uploads/2016-11-16/582c190c89edd.jpg', '2', '2', '1479285004');
INSERT INTO `foods` VALUES ('69', '7', '什么吓', '放青椒在和中间翻炒，加盐，鸡精，熟即可。', '123.00', 'Uploads/2016-11-16/582c19ba22655.jpg', '2', '2', '1479285178');
INSERT INTO `foods` VALUES ('70', '7', '番茄肉酱意大利面', '锅中入热水，加入少量的食盐，放入面条小火煮7分钟。煮好后捞出，凉水过下加入少许的橄榄油拌匀。洋葱、大蒜切碎，番茄对半切开。锅中入油，洋葱和蒜入锅中煸香加入肉末，炒然后入番茄炒入味。', '122.00', 'Uploads/2016-11-16/582c1a3753436.jpg', '2', '2', '1479285303');
INSERT INTO `foods` VALUES ('71', '7', '鸡腿烤时蔬', '美味鲜香的烤鸡腿吧，搭配上新鲜的时蔬，不仅解腻开胃，更是营养丰富', '156.00', 'Uploads/2016-11-16/582c1ab2ac24e.jpg', '2', '2', '1479285426');
INSERT INTO `foods` VALUES ('72', '7', '墨西哥风味炖牛肉', '放入番茄、洋葱、大蒜和孜然，通常也会放入莳萝和豆子等其它食材', '234.00', 'Uploads/2016-11-16/582c1b1b51137.jpg', '2', '2', '1479285531');
INSERT INTO `foods` VALUES ('73', '7', '黑椒T骨牛扒', '肉眼部位的扒肉，极之娇嫩，本应与红酒汁相配，它能够完美烘托肉扒脂肪煎烤后的焦香', '245.00', 'Uploads/2016-11-16/582c1bb72f5d2.jpg', '2', '2', '1479285687');
INSERT INTO `foods` VALUES ('74', '7', '跳水鱼', '草鱼900g 辅料油适量盐适量蒸鱼豉油适量鸡精适量白糖适量料酒适量姜适量小米椒适量泡野山椒适量香菜适量洋葱适量紫苏适量黄灯笼辣椒酱适量黄贡椒适量剁辣椒适量小葱适量玉米粒适量十三香适量辣妹子辣椒酱适量 ', '132.00', 'Uploads/2016-11-16/582c1c2c47f2b.jpg', '2', '2', '1479285804');
INSERT INTO `foods` VALUES ('75', '7', '白切鸡', '白切鸡是两广非常出名的家常菜，除广东外，在广西全境各地都非常流行。', '233.00', 'Uploads/2016-11-16/582c1cdf3052c.jpg', '2', '2', '1479285983');
INSERT INTO `foods` VALUES ('76', '7', '豉油鸡', '鸡半只 辅料生抽适量白砂糖适量香叶适量八角适量陈皮适量姜适量葱适量 制作完成', '168.00', 'Uploads/2016-11-16/582c1dbe0e91f.jpg', '2', '2', '1479286206');
INSERT INTO `foods` VALUES ('77', '8', '白灼虾', '基围虾  蒸鱼豉油、料酒、葱、姜、八角、花椒、柠檬片 制作完成', '186.00', 'Uploads/2016-11-16/582c1e875f432.jpg', '2', '2', '1479286407');
INSERT INTO `foods` VALUES ('78', '8', '麻辣肉片', '瘦肉切成片，和辣椒一起炒得香香的', '58.00', 'Uploads/2016-11-16/582c1ff2d4a48.jpg', '2', '2', '1479286770');
INSERT INTO `foods` VALUES ('79', '8', '棒棒鸡丝', '鸡肉的鲜嫩，芝麻的香，花椒的麻，还有那诱人的红油绝对诱惑你', '183.00', 'Uploads/2016-11-16/582c2075c0410.jpg', '1', '2', '1479286901');
INSERT INTO `foods` VALUES ('80', '8', '宫保鱿鱼', '宫保鱿鱼，配料还是那么几种，花生米用了一个窍门进行了处理，去红衣时异常的容易，炸出的花生异常的酥脆', '162.00', 'Uploads/2016-11-16/582c3c420d0fb.jpg', '2', '2', '1479294018');
INSERT INTO `foods` VALUES ('81', '8', '川味烧鸡翅', '非常家常的一道菜，喜欢辣的不可错过哦~', '122.00', 'Uploads/2016-11-16/582c3c737f859.jpg', '2', '2', '1479294067');
INSERT INTO `foods` VALUES ('82', '8', '腐竹炖牛腩', '寒冬食牛肉，有暖胃作用，牛肉为寒冬补益佳品。牛肉的营养价值高，古有“牛肉补气，功同黄芪”之说', '232.00', 'Uploads/2016-11-16/582c3d381b7bd.jpg', '2', '2', '1479294264');
INSERT INTO `foods` VALUES ('83', '8', '腐乳虎皮鹌鹑蛋', '鹌鹑蛋外观小巧，但营养价值很高，鹌鹑蛋中氨基酸种类齐全，含晕丰富，还有高质量的多种磷脂，激素等人体必需成分，铁、核黄素、维生素A的含量均比同量鸡蛋高出两倍左右', '142.00', 'Uploads/2016-11-16/582c3da2d5ca0.jpg', '2', '2', '1479294370');
INSERT INTO `foods` VALUES ('84', '8', '干煸肥肠', '猪大肠500g 辅料油适量盐适量干辣椒适量葱适量花椒适量糖1小勺酱油1勺料酒适量大料1个姜适量蒜适量 ', '142.00', 'Uploads/2016-11-16/582c3dff96e00.jpg', '2', '2', '1479294463');
INSERT INTO `foods` VALUES ('85', '9', '茄汁虾', '加入盐、料酒、糖、生抽、番茄酱和少许的水烧开、收汁后淋点香油、撒入葱末起锅 制作而成', '97.00', 'Uploads/2016-11-16/582c3e5944a19.jpg', '2', '2', '1479294553');
INSERT INTO `foods` VALUES ('86', '9', '啤酒蒸带鱼', '啤酒加热时，酒精会大量挥发，腥味也随之除去了。与此同时，它还能与鱼肉的脂肪产生化学反应，散发出浓郁的鲜香味。所以，在做鱼时加入啤酒，既可去鱼腥，同时生成一种具有特殊香气的酯，使菜肴鲜香。', '121.00', 'Uploads/2016-11-16/582c3ed9dd0fe.jpg', '2', '2', '1479294681');
INSERT INTO `foods` VALUES ('87', '9', '火龙果黑椒牛肉粒', '牛肉和黑胡椒是完美的搭配。此菜的口感清爽，鲜甜，不油腻。水果入菜，也是别样好吃', '129.00', 'Uploads/2016-11-16/582c3f2cb0136.jpg', '2', '2', '1479294764');
INSERT INTO `foods` VALUES ('88', '9', '南乳粉蒸肉', '南乳和红糟米粉蒸的“南乳粉蒸肉”。因为这种做法，可以说是粉蒸肉里最入味，最够劲，也最香浓的，算得上是粉蒸肉中的极品', '183.00', 'Uploads/2016-11-16/582c3f990a98a.jpg', '2', '2', '1479294873');
INSERT INTO `foods` VALUES ('89', '9', '油面筋塞肉', '浓油赤酱的味儿，略微偏甜的口感', '120.00', 'Uploads/2016-11-16/582c3ff4303f0.jpg', '2', '2', '1479294964');
INSERT INTO `foods` VALUES ('90', '9', '口水鸡腿', '撒在鸡肉上的配料先准备：花生末、葱粒、熟的黑白芝麻适量 焖好的鸡腿过凉后浸入提前准备好的冰水里迅速激冷 淋上材料制作而成', '102.00', 'Uploads/2016-11-16/582c4080286f5.jpg', '1', '2', '1479295104');
INSERT INTO `foods` VALUES ('91', '9', '酱焖茄盒', '茄子含多种维生素、脂肪、蛋白质、糖及矿物质等，是一种物美价廉的佳蔬', '60.00', 'Uploads/2016-11-16/582c4130b41b9.jpg', '2', '2', '1479295280');
INSERT INTO `foods` VALUES ('92', '9', '五味鸭', '鸭子1/2只 辅料油适量姜片适量米醋100ml生抽100ml白糖100ml米酒100ml清水200ml ', '200.00', 'Uploads/2016-11-16/582c41f19e633.jpg', '1', '2', '1479295473');
INSERT INTO `foods` VALUES ('93', '9', '小熊紫薯卷', '香香甜甜的蛋糕卷，是孩子们的最爱呢', '30.00', 'Uploads/2016-11-16/582c4283d894f.jpg', '2', '2', '1479295619');
INSERT INTO `foods` VALUES ('94', '9', '法式贻贝', '法式贻贝加了黄油、葡萄酒、香芹叶调味', '284.00', 'Uploads/2016-11-16/582c42dfc4618.jpg', '2', '2', '1479295711');
INSERT INTO `foods` VALUES ('95', '10', '森林蛋糕', '', '203.00', 'Uploads/2016-11-16/582c43769d78c.jpg', '2', '2', '1479295862');
INSERT INTO `foods` VALUES ('96', '10', '苦菊水果沙拉', '苦菊50g圣女果30g梨10g橙子10g辅料沙拉酱适量薯片适量', '174.00', 'Uploads/2016-11-16/582c440841c15.jpg', '2', '2', '1479296008');
INSERT INTO `foods` VALUES ('97', '10', '牛排', '牛肉大火煎了后在撒盐和胡椒 两面煎后 用锡纸包五分钟', '294.00', 'Uploads/2016-11-16/582c44826cf71.jpg', '2', '2', '1479296130');
INSERT INTO `foods` VALUES ('98', '10', '意式烤龙利鱼', '意式烤龙利鱼！！无骨，外酥里嫩 ！', '382.00', 'Uploads/2016-11-16/582c45305024b.jpg', '2', '2', '1479296304');
INSERT INTO `foods` VALUES ('99', '10', '芹菜番茄披萨', '发面时的空档将配菜和调料整理好，香喷喷的披萨出锅咯', '149.00', 'Uploads/2016-11-16/582c45a6f1396.jpg', '2', '2', '1479296422');
INSERT INTO `foods` VALUES ('100', '10', '韩国煎年糕', '经过浸泡的年糕，饱含水分，在进行煎至，涂抹调味酱，外焦里嫩，堪称佳肴。', '98.00', 'Uploads/2016-11-16/582c45fcd4266.jpg', '2', '2', '1479296508');
INSERT INTO `foods` VALUES ('101', '10', '韩式辣酱炒鱿鱼须', '鱿鱼须300g 辅料油适量盐适量韩式辣椒酱适量大蒜适量姜适量料酒适量小葱适量 制作而成', '220.00', 'Uploads/2016-11-16/582c4682647d4.jpg', '2', '2', '1479296642');
INSERT INTO `foods` VALUES ('102', '10', '干锅香辣蟹', '干锅香辣蟹味道鲜香美味', '192.00', 'Uploads/2016-11-16/582c4707d9967.jpg', '2', '2', '1479296775');
INSERT INTO `foods` VALUES ('103', '10', '粉丝蟹煲', '螃蟹 粉丝1把辅料油适量盐适量料酒适量酱油适量细香葱适量姜适量蒜适量', '250.00', 'Uploads/2016-11-16/582c479383e42.jpg', '2', '2', '1479296915');
INSERT INTO `foods` VALUES ('104', '10', '爆炒姜葱蟹', '螃蟹   辅料姜适量红葱头适量小辣椒1个香菜适量', '231.00', 'Uploads/2016-11-16/582c481dd9903.jpg', '2', '2', '1479297053');
INSERT INTO `foods` VALUES ('105', '10', '酱料汁煎杏鲍菇', '杏鲍菇营养价值高，可以提高人体免疫功能，对人体具有抗癌、降血脂、润肠胃以及美容等作用', '231.00', 'Uploads/2016-11-16/582c4907e715f.jpg', '1', '2', '1479297287');
INSERT INTO `foods` VALUES ('106', '10', '腊肉煲仔饭', '热腾腾香喷喷的腊肉煲仔饭，有肉又有菜，吃着很好', '106.00', 'Uploads/2016-11-16/582c4996438bb.jpg', '2', '2', '1479297430');
INSERT INTO `foods` VALUES ('107', '8', '烫面玉米发糕', '开水先把玉米面烫好了，醒一个时辰，再做玉米饼子，很好吃', '133.00', 'Uploads/2016-11-16/582c4a051dc97.jpg', '2', '2', '1479297541');
INSERT INTO `foods` VALUES ('108', '8', '咖喱土豆泥小刺猬', '土豆味甘、性平、微凉，入脾、胃、大肠经；有和胃调中，健脾利湿，解毒消炎，宽肠通便，降糖降脂，活血消肿，益气强身，美容，抗衰老之功效', '184.00', 'Uploads/2016-11-16/582c4a72d89f6.jpg', '2', '2', '1479297650');
INSERT INTO `foods` VALUES ('109', '8', '时蔬酿鸡翅', '鸡中翅 胡萝卜100g土豆100g 辅料橄榄油适量盐适量生抽适量白糖适量蚝油适量', '103.00', 'Uploads/2016-11-16/582c4acb208d5.jpg', '2', '2', '1479297739');

-- ----------------------------
-- Table structure for `imgs`
-- ----------------------------
DROP TABLE IF EXISTS `imgs`;
CREATE TABLE `imgs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '2' COMMENT '1：开启 2：关闭',
  `turn` tinyint(4) DEFAULT '0' COMMENT '0 :不使用 1234567..顺序',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imgs
-- ----------------------------
INSERT INTO `imgs` VALUES ('6', 'Uploads/Limg/2016-11-23/583558f884dd5.jpg', '1', '1', '1479891192');
INSERT INTO `imgs` VALUES ('7', 'Uploads/Limg/2016-11-23/583558ff1be36.jpg', '1', '6', '1479891199');
INSERT INTO `imgs` VALUES ('8', 'Uploads/Limg/2016-11-23/58355905a6905.jpg', '1', '3', '1479891205');
INSERT INTO `imgs` VALUES ('9', 'Uploads/Limg/2016-11-23/5835590bb287b.jpg', '1', '4', '1479891211');
INSERT INTO `imgs` VALUES ('10', 'Uploads/Limg/2016-11-23/5835895d11198.jpg', '2', '5', '1479901564');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(50) DEFAULT NULL,
  `desk` int(11) DEFAULT NULL,
  `total` decimal(11,2) DEFAULT NULL,
  `status` tinyint(10) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('40', '2016112169708', '9', '912.00', '1', '1479705162');
INSERT INTO `orders` VALUES ('41', '2016112126687', '3', '1056.00', '1', '1479720067');
INSERT INTO `orders` VALUES ('43', '2016112273847', '3', '647.00', '1', '1479797669');
INSERT INTO `orders` VALUES ('44', '201611222154', '5', '672.00', '1', '1479799145');
INSERT INTO `orders` VALUES ('45', '201611224599', '6', '392.00', '0', '1479813943');
INSERT INTO `orders` VALUES ('46', '2016112255335', '13', '1363.00', '1', '1479818847');
INSERT INTO `orders` VALUES ('47', '2016112394394', '12', '386.00', '1', '1479867970');
INSERT INTO `orders` VALUES ('48', '2016112322897', '9', '202.00', '1', '1479884779');
INSERT INTO `orders` VALUES ('49', '2016112325317', '3', '181.00', '0', '1479914437');
INSERT INTO `orders` VALUES ('50', '2016112428827', '11', '401.00', '1', '1479970597');
INSERT INTO `orders` VALUES ('51', '2016112426449', '10', '146.00', '1', '1479972544');
INSERT INTO `orders` VALUES ('52', '2016112419867', '1', '153.00', '1', '1479973041');
INSERT INTO `orders` VALUES ('53', '2016112462924', '2', '381.00', '1', '1479973155');
INSERT INTO `orders` VALUES ('54', '2016112460352', '10', '264.00', '1', '1479975526');
INSERT INTO `orders` VALUES ('55', '2016112421747', '1', '96.80', '1', '1479975974');
INSERT INTO `orders` VALUES ('56', '2016112422152', '2', '284.00', '1', '1479976600');
INSERT INTO `orders` VALUES ('57', '2016112422598', '9', '48.00', '1', '1479976949');
INSERT INTO `orders` VALUES ('58', '201611243094', '1', '160.00', '1', '1479977099');
INSERT INTO `orders` VALUES ('59', '2016112455670', '1', '60.00', '1', '1479977232');
INSERT INTO `orders` VALUES ('60', '2016112436767', '13', '77.60', '1', '1479979892');
INSERT INTO `orders` VALUES ('61', '2016112412191', '2', '96.00', '1', '1479980139');
INSERT INTO `orders` VALUES ('62', '2016112491077', '5', '76.80', '1', '1479980500');
INSERT INTO `orders` VALUES ('63', '2016112487943', '11', '361.60', '1', '1479986992');
INSERT INTO `orders` VALUES ('64', '2016112484961', '5', '610.00', '1', '1479987806');
INSERT INTO `orders` VALUES ('65', '2016112553204', '1', '153.00', '1', '1480037714');
INSERT INTO `orders` VALUES ('66', '2016112610476', '4', '67.00', '1', '1480090878');
INSERT INTO `orders` VALUES ('68', '201611277217', '12', '503.20', '1', '1480246128');

-- ----------------------------
-- Table structure for `orders_car`
-- ----------------------------
DROP TABLE IF EXISTS `orders_car`;
CREATE TABLE `orders_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desk` int(11) DEFAULT NULL,
  `foodsid` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `price` double(6,2) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 : 未下单 1：已下单',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_car
-- ----------------------------
INSERT INTO `orders_car` VALUES ('126', '6', '61', '芙蓉虾', '240.00', '1', '1');
INSERT INTO `orders_car` VALUES ('128', '6', '105', '酱料汁煎杏鲍菇', '231.00', '1', '1');
INSERT INTO `orders_car` VALUES ('149', '3', '78', '麻辣肉片', '58.00', '1', '1');
INSERT INTO `orders_car` VALUES ('150', '3', '50', '脆皮鸡腿', '123.00', '1', '1');
INSERT INTO `orders_car` VALUES ('189', '1', '68', '三杯鸡', '153.00', '1', '1');

-- ----------------------------
-- Table structure for `orders_detail`
-- ----------------------------
DROP TABLE IF EXISTS `orders_detail`;
CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` varchar(50) DEFAULT NULL,
  `foodsid` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `price` double(6,2) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `status` tinyint(10) DEFAULT '1',
  `addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=222 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders_detail
-- ----------------------------
INSERT INTO `orders_detail` VALUES ('143', '2016112169708', '80', '宫保鱿鱼', '162.00', '2', '2', '1479705162');
INSERT INTO `orders_detail` VALUES ('144', '2016112169708', '70', '番茄肉酱意大利面', '122.00', '1', '2', '1479705162');
INSERT INTO `orders_detail` VALUES ('145', '2016112169708', '75', '白切鸡', '233.00', '2', '2', '1479705162');
INSERT INTO `orders_detail` VALUES ('146', '2016112126687', '77', '白灼虾', '186.00', '3', '2', '1479720068');
INSERT INTO `orders_detail` VALUES ('150', '2016112126687', '90', '口水鸡腿', '102.00', '1', '2', '1479744843');
INSERT INTO `orders_detail` VALUES ('154', '2016112273847', '69', '什么吓', '123.00', '3', '2', '1479797669');
INSERT INTO `orders_detail` VALUES ('155', '2016112273847', '99', '芹菜番茄披萨', '149.00', '1', '2', '1479797669');
INSERT INTO `orders_detail` VALUES ('156', '2016112273847', '87', '火龙果黑椒牛肉粒', '129.00', '1', '2', '1479797669');
INSERT INTO `orders_detail` VALUES ('157', '201611222154', '106', '腊肉煲仔饭', '106.00', '1', '2', '1479799145');
INSERT INTO `orders_detail` VALUES ('158', '201611222154', '47', '红烧烤鸡', '121.00', '1', '2', '1479799145');
INSERT INTO `orders_detail` VALUES ('159', '201611222154', '80', '宫保鱿鱼', '162.00', '2', '2', '1479799145');
INSERT INTO `orders_detail` VALUES ('162', '201611224599', '61', '芙蓉虾', '240.00', '1', '0', '1479813944');
INSERT INTO `orders_detail` VALUES ('164', '201611224599', '105', '酱料汁煎杏鲍菇', '231.00', '1', '0', '1479813944');
INSERT INTO `orders_detail` VALUES ('172', '2016112255335', '56', '碳烤将军牛肋排', '985.00', '1', '2', '1479818847');
INSERT INTO `orders_detail` VALUES ('175', '2016112255335', '38', '红烧肉', '50.00', '2', '2', '1479818867');
INSERT INTO `orders_detail` VALUES ('176', '2016112255335', '78', '麻辣肉片', '58.00', '2', '2', '1479818992');
INSERT INTO `orders_detail` VALUES ('177', '2016112255335', '80', '宫保鱿鱼', '162.00', '1', '2', '1479820418');
INSERT INTO `orders_detail` VALUES ('178', '2016112394394', '66', '西葫芦夹心饼', '96.00', '1', '2', '1479867970');
INSERT INTO `orders_detail` VALUES ('179', '2016112394394', '76', '豉油鸡', '168.00', '1', '2', '1479867970');
INSERT INTO `orders_detail` VALUES ('180', '2016112394394', '63', '麻婆豆腐', '122.00', '1', '2', '1479867970');
INSERT INTO `orders_detail` VALUES ('181', '2016112322897', '84', '干煸肥肠', '142.00', '1', '3', '1479884779');
INSERT INTO `orders_detail` VALUES ('184', '2016112325317', '78', '麻辣肉片', '58.00', '1', '0', '1479914437');
INSERT INTO `orders_detail` VALUES ('185', '2016112325317', '50', '脆皮鸡腿', '123.00', '1', '0', '1479914437');
INSERT INTO `orders_detail` VALUES ('186', '2016112322897', '63', '麻婆豆腐', '122.00', '1', '3', '1479950219');
INSERT INTO `orders_detail` VALUES ('187', '2016112322897', '65', '胭脂冬瓜', '60.00', '1', '3', '1479950462');
INSERT INTO `orders_detail` VALUES ('188', '2016112428827', '83', '腐乳虎皮鹌鹑蛋', '142.00', '1', '0', '1479970597');
INSERT INTO `orders_detail` VALUES ('189', '2016112428827', '89', '油面筋塞肉', '120.00', '3', '0', '1479970597');
INSERT INTO `orders_detail` VALUES ('190', '2016112426449', '69', '什么吓', '123.00', '1', '2', '1479972544');
INSERT INTO `orders_detail` VALUES ('191', '2016112426449', '62', '绿茶芋卷', '60.00', '1', '2', '1479972544');
INSERT INTO `orders_detail` VALUES ('194', '2016112419867', '74', '跳水鱼', '132.00', '1', '2', '1479973041');
INSERT INTO `orders_detail` VALUES ('195', '2016112419867', '58', '冰杨梅', '60.00', '1', '2', '1479973041');
INSERT INTO `orders_detail` VALUES ('196', '2016112462924', '85', '茄汁虾', '97.00', '1', '2', '1479973155');
INSERT INTO `orders_detail` VALUES ('198', '2016112462924', '94', '法式贻贝', '284.00', '1', '2', '1479973169');
INSERT INTO `orders_detail` VALUES ('199', '2016112460352', '62', '绿茶芋卷', '60.00', '1', '2', '1479975526');
INSERT INTO `orders_detail` VALUES ('200', '2016112460352', '81', '川味烧鸡翅', '122.00', '1', '2', '1479975526');
INSERT INTO `orders_detail` VALUES ('201', '2016112460352', '48', '蒜香叉烧排骨', '148.00', '1', '2', '1479975526');
INSERT INTO `orders_detail` VALUES ('202', '2016112421747', '86', '啤酒蒸带鱼', '121.00', '1', '2', '1479975974');
INSERT INTO `orders_detail` VALUES ('203', '2016112422152', '86', '啤酒蒸带鱼', '121.00', '1', '2', '1479976600');
INSERT INTO `orders_detail` VALUES ('204', '2016112422152', '72', '墨西哥风味炖牛肉', '234.00', '1', '2', '1479976600');
INSERT INTO `orders_detail` VALUES ('205', '2016112422598', '65', '胭脂冬瓜', '60.00', '1', '2', '1479976949');
INSERT INTO `orders_detail` VALUES ('206', '201611243094', '92', '五味鸭', '200.00', '1', '2', '1479977099');
INSERT INTO `orders_detail` VALUES ('207', '2016112455670', '62', '绿茶芋卷', '60.00', '1', '2', '1479977232');
INSERT INTO `orders_detail` VALUES ('208', '2016112436767', '59', '蟹黄鱼丸', '97.00', '1', '2', '1479979892');
INSERT INTO `orders_detail` VALUES ('209', '2016112412191', '91', '酱焖茄盒', '60.00', '2', '2', '1479980139');
INSERT INTO `orders_detail` VALUES ('210', '2016112491077', '66', '西葫芦夹心饼', '96.00', '1', '2', '1479980500');
INSERT INTO `orders_detail` VALUES ('211', '2016112487943', '82', '腐竹炖牛腩', '232.00', '1', '2', '1479986992');
INSERT INTO `orders_detail` VALUES ('212', '2016112487943', '101', '韩式辣酱炒鱿鱼须', '220.00', '1', '2', '1479986992');
INSERT INTO `orders_detail` VALUES ('213', '2016112484961', '89', '油面筋塞肉', '120.00', '2', '0', '1479987806');
INSERT INTO `orders_detail` VALUES ('214', '2016112484961', '65', '胭脂冬瓜', '60.00', '1', '2', '1479987806');
INSERT INTO `orders_detail` VALUES ('215', '2016112484961', '54', '外婆家醉鱿鱼', '310.00', '1', '0', '1479996350');
INSERT INTO `orders_detail` VALUES ('216', '2016112553204', '68', '三杯鸡', '153.00', '1', '0', '1480037714');
INSERT INTO `orders_detail` VALUES ('217', '2016112610476', '67', '皮蛋香粥', '67.00', '1', '0', '1480090878');
INSERT INTO `orders_detail` VALUES ('218', '2016112668411', '51', '水煮鱼', '98.00', '1', '0', '1480165266');
INSERT INTO `orders_detail` VALUES ('219', '201611277217', '87', '火龙果黑椒牛肉粒', '129.00', '1', '2', '1480246128');
INSERT INTO `orders_detail` VALUES ('221', '201611277217', '103', '粉丝蟹煲', '250.00', '2', '2', '1480246128');

-- ----------------------------
-- Table structure for `tickling`
-- ----------------------------
DROP TABLE IF EXISTS `tickling`;
CREATE TABLE `tickling` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `vip` varchar(255) DEFAULT NULL,
  `info` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `status` tinyint(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tickling
-- ----------------------------
INSERT INTO `tickling` VALUES ('1', '游客', '环境有点差', '0', '1');
INSERT INTO `tickling` VALUES ('2', '游客', '服务态度不行', '0', '1');
INSERT INTO `tickling` VALUES ('3', '游客', '环境一般般', '0', '1');
INSERT INTO `tickling` VALUES ('4', '游客', '1111111', '0', '1');
INSERT INTO `tickling` VALUES ('5', '游客', '222222', '1480079202', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('4', '川菜', '0', '0,');
INSERT INTO `type` VALUES ('5', '湘菜', '0', '0,');
INSERT INTO `type` VALUES ('6', '粤菜', '0', '0,');
INSERT INTO `type` VALUES ('7', '新疆菜', '0', '0,');
INSERT INTO `type` VALUES ('8', '日本料理', '0', '0,');
INSERT INTO `type` VALUES ('9', '闽菜', '0', '0,');
INSERT INTO `type` VALUES ('10', '客家菜', '0', '0,');

-- ----------------------------
-- Table structure for `url`
-- ----------------------------
DROP TABLE IF EXISTS `url`;
CREATE TABLE `url` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` tinyint(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of url
-- ----------------------------
INSERT INTO `url` VALUES ('113', '花瓣', 'http://huaban.com/', '0');
INSERT INTO `url` VALUES ('112', '百度', 'http://www.baidu.com', '0');
INSERT INTO `url` VALUES ('114', 'bootstrap中文网', 'http://www.bootcss.com/', '0');
INSERT INTO `url` VALUES ('115', '兄弟连', 'http://bbs.lampbrother.net/', '0');
INSERT INTO `url` VALUES ('116', '京东', 'https://www.jd.com', '0');
INSERT INTO `url` VALUES ('117', '淘宝', 'https://www.taobao.com/', '0');
INSERT INTO `url` VALUES ('118', '搜狐网', 'http://www.sohu.com/', '0');
INSERT INTO `url` VALUES ('119', '网易', 'http://www.163.com/', '0');
INSERT INTO `url` VALUES ('120', '爱奇艺', 'http://vip.iqiyi.com/', '0');
INSERT INTO `url` VALUES ('121', '阿里云', 'https://mail.aliyun.com', '0');
INSERT INTO `url` VALUES ('122', '携程旅行', 'http://www.ctrip.com/', '0');
INSERT INTO `url` VALUES ('123', '酷狗音乐', 'http://www.kugou.com/', '0');
INSERT INTO `url` VALUES ('124', 'QQ邮箱', 'https://mail.qq.com', '0');
INSERT INTO `url` VALUES ('125', 'NBA', 'http://hao.360.cn/', '0');

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
  `status` tinyint(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vip
-- ----------------------------
INSERT INTO `vip` VALUES ('1', '小万万', '123456', '13326325243', '1479719968', '0', '0');
INSERT INTO `vip` VALUES ('12', '小康康', '123456', '12434343231', '1479719968', '0', '0');
INSERT INTO `vip` VALUES ('14', '小冰冰', '123456', '11323233323', '1479719968', '0', '0');
INSERT INTO `vip` VALUES ('17', null, 'e10adc3949ba59abbe56e057f20f883e', '13184764543', '1479719968', '0', '0');
INSERT INTO `vip` VALUES ('18', null, 'e10adc3949ba59abbe56e057f20f883e', '13156897741', '1479719968', '0', '0');
INSERT INTO `vip` VALUES ('20', null, 'e10adc3949ba59abbe56e057f20f883e', '15980002225', null, '0', '0');
