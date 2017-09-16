/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : vkphp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-16 17:47:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `vk_user`
-- ----------------------------
DROP TABLE IF EXISTS `vk_user`;
CREATE TABLE `vk_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL COMMENT 'md5加密',
  `salt` varchar(16) NOT NULL,
  `screen_name` varchar(20) DEFAULT '低调的用户',
  `email` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vk_user
-- ----------------------------
INSERT INTO `vk_user` VALUES ('1', 'voidking', '1f7b1a1f50167ae828873279da4fe56d', 'VXUY1OYH9asT0mRE', '低调的用户', null);
INSERT INTO `vk_user` VALUES ('3', '', 'a9885d233f9ed749d4e9f463791d2949', 'KOX6sfbHOisUvihO', '低调的用户', null);
