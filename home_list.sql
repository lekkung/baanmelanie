/*
Navicat MySQL Data Transfer

Source Server         : MySQL17
Source Server Version : 50620
Source Host           : 172.16.1.17:3306
Source Database       : baanmela_db

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2018-07-19 20:48:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `home_list`
-- ----------------------------
DROP TABLE IF EXISTS `home_list`;
CREATE TABLE `home_list` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `list_group` int(1) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `detail_th` text,
  `detail_en` text,
  `detail_ch` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_list
-- ----------------------------
INSERT INTO `home_list` VALUES ('1', '1', 'fas fa-tree', 'อากาศดี ไม่มีมลภาวะเสีย\r\nธรรมชาติที่น่าทึ่ง หลากหลายด้วยวัฒนธรรม และอาหารอร่อย\r\nสงบเงียบ และมีชีวิตที่สันติ\r\nสภาพแวดล้อมสะอาด ทำให้ร่างสมบูรณ์', null, null);
INSERT INTO `home_list` VALUES ('2', '1', 'fas fa-users', 'ผู้คนเป็นมิตรและพร้อมที่จะช่วยเหลือเสมอ', null, null);
INSERT INTO `home_list` VALUES ('3', '1', 'fas fa-road', 'ถนน สาธารณูประโภค และการคมนาคมทางอากาศเยี่ยม\r\nไป-มา สะดวกรถไม่ติด', null, null);
INSERT INTO `home_list` VALUES ('4', '1', 'fas fa-dollar-sign', 'ศูนย์กลางธุรกิจ 4 ประเทศ (ไทย จีน พม่า ลาว)\r\nเป็นพื้นที่ทีกำลังพัฒนาอย่างรวดเร็วของประเทศไทย\r\nง่ายต่อการที่จะเป็นนักธุรกิจหรือหางานทำ', null, null);
INSERT INTO `home_list` VALUES ('5', '1', 'fas fa-times', 'ไม่มีน้ำท่วม และดินถล่ม\r\nอัตราการเกิดอาชญากรรมและความรุนแรงต่ำ', null, null);
INSERT INTO `home_list` VALUES ('6', '1', 'fas fa-book', 'ประวัติศาสตร์ที่น่าเคารพและประทับใจของแม่ฟ้าหลวง', null, null);
INSERT INTO `home_list` VALUES ('7', '2', 'fas fa-car', 'จากโครงการถึงในตัวเมืองขับรถเพียง 10 นาที\r\nขับรถ 5 นาทีถึงสนามกอล์ฟสันติบุรี\r\n5 นาทีถึงเซ็นทรัล บิ๊กซี และโฮมโปร์\r\nอยู่ใกล้ทางหลวงหมายเลข 3 ไป จีน-ลาว\r\nถนนสาธารณะใหม่ทั่วโครงการ', null, null);
INSERT INTO `home_list` VALUES ('8', '2', 'fas fa-pencil-ruler', 'บริการออกแบบ้านให้ฟรีตามที่ฝันไว้\r\nไฟฟ้า 3 เฟสใหม่ของสาธารณะ', null, null);
INSERT INTO `home_list` VALUES ('9', '2', 'fas fa-map-marked-alt', 'ที่ดินทุกแปลงมีโฉนด\r\nมีที่ดินหลาขนาดให้เลือก\r\nพร้อมที่จะแบ่งขายตามที่ต้องการ', null, null);
INSERT INTO `home_list` VALUES ('10', '2', 'fas fa-users', 'มีทั้งคนไทยและต่างชาติอาศัยอยู่', null, null);
INSERT INTO `home_list` VALUES ('11', '2', 'fas fa-headphones', 'สงบเงียบไม่มีเสียงดังมลภาวะทางอากาศและรถติดตลอดจนปัญหาของเมือง', null, null);
INSERT INTO `home_list` VALUES ('12', '2', 'fas fa-hospital', 'ใกล้ โรงพยาบาลที่มีการบริการฉุกเฉิน ตลอด 24 ชั่วโมง', null, null);
