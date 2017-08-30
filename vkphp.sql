/*
Navicat MySQL Data Transfer

Source Server         : laragon
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : vkphp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-30 21:46:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `vk_user`
-- ----------------------------
DROP TABLE IF EXISTS `vk_user`;
CREATE TABLE `vk_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vk_user
-- ----------------------------
INSERT INTO `vk_user` VALUES ('1', 'voidking', 'voidking');
INSERT INTO `vk_user` VALUES ('2', 'haojin', 'haojin');
