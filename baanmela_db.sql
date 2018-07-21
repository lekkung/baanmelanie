/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50045
Source Host           : localhost:3306
Source Database       : baanmela_db

Target Server Type    : MYSQL
Target Server Version : 50045
File Encoding         : 65001

Date: 2018-07-22 00:39:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `building`
-- ----------------------------
DROP TABLE IF EXISTS `building`;
CREATE TABLE `building` (
  `b_id` int(5) NOT NULL auto_increment,
  `b_name_en` varchar(50) collate utf8_unicode_ci default NULL,
  `b_name_th` varchar(100) collate utf8_unicode_ci default NULL,
  `b_type_en` varchar(50) collate utf8_unicode_ci default NULL,
  `b_type_th` varchar(100) collate utf8_unicode_ci default NULL,
  `b_area_in` int(3) default NULL,
  `b_area_out` int(3) default NULL,
  `b_area_park` int(3) default NULL,
  `b_area` int(4) default NULL,
  `b_price` int(10) default NULL,
  `b_remark` varchar(200) collate utf8_unicode_ci default NULL,
  `b_pic_show` varchar(100) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of building
-- ----------------------------
INSERT INTO `building` VALUES ('1', 'Garden shed', 'เรือนเก็บของ ', 'Storage', 'ที่เก็บของ', '9', '10', '12', '31', '310000', 'มีเครื่องกรองน้ำและปั๊ม', 'Garden Shed.jpg');
INSERT INTO `building` VALUES ('2', 'Service building', 'เรือนหลังนอก', 'Laundry & Storage', 'ที่ซักรีดและเก็บของ', '18', '16', '12', '46', '460000', 'เรือนหลังนอกมี 2 ห้องสำหรับซักรีด และเก็บของ', 'Service Building.jpg');

-- ----------------------------
-- Table structure for `counter`
-- ----------------------------
DROP TABLE IF EXISTS `counter`;
CREATE TABLE `counter` (
  `counter` int(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of counter
-- ----------------------------
INSERT INTO `counter` VALUES ('107885');

-- ----------------------------
-- Table structure for `home_list`
-- ----------------------------
DROP TABLE IF EXISTS `home_list`;
CREATE TABLE `home_list` (
  `id` int(5) NOT NULL auto_increment,
  `list_group` int(1) default NULL,
  `icon` varchar(50) default NULL,
  `detail_th` text,
  `detail_en` text,
  `detail_cn` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_list
-- ----------------------------
INSERT INTO `home_list` VALUES ('1', '1', 'fas fa-tree', 'อากาศดี ไม่มีมลภาวะเสีย\r\nธรรมชาติที่น่าทึ่ง หลากหลายด้วยวัฒนธรรม และอาหารอร่อย\r\nสงบเงียบ และมีชีวิตที่สันติ\r\nสภาพแวดล้อมสะอาด ทำให้ร่างสมบูรณ์', 'Fresh clean air, cool weather, no nuclear fall-out\r\nAmazing nature, rich Lanna culture, delicious food\r\nTranquility and calm peaceful life\r\nHealthy and clean environment', '空气洁净，气候温和，人口少\r\n接近大自然，宁静宜人\r\n食物可口，健康无污染');
INSERT INTO `home_list` VALUES ('2', '1', 'fas fa-users', 'ผู้คนเป็นมิตรและพร้อมที่จะช่วยเหลือเสมอ', 'Friendly people whom still like to help you', '民风淳朴、友好');
INSERT INTO `home_list` VALUES ('3', '1', 'fas fa-road', 'ถนน สาธารณูประโภค และการคมนาคมทางอากาศเยี่ยม\r\nไป-มา สะดวกรถไม่ติด', 'Good roads, infrastructure, bus- and air links\r\nEasy to travel around and no traffic jams', '交通便利：国际机场国内外航线众多，公路网络四通八达，无交通拥堵');
INSERT INTO `home_list` VALUES ('4', '1', 'fas fa-dollar-sign', 'ศูนย์กลางธุรกิจ 4 ประเทศ (ไทย จีน พม่า ลาว)\r\nเป็นพื้นที่ทีกำลังพัฒนาอย่างรวดเร็วของประเทศไทย\r\nง่ายต่อการที่จะเป็นนักธุรกิจหรือหางานทำ', 'Business quadrangle: Thai-China-Laos-Burma\r\nMost ‘booming’ development area of Thailand\r\nEasy to be an entrepreneur or to find work', '泰国、中国、老挝、缅甸四国贸易交汇处，泰国最有发展前景的地区，投资、工作便利');
INSERT INTO `home_list` VALUES ('5', '1', 'fas fa-times', 'ไม่มีน้ำท่วม และดินถล่ม\r\nอัตราการเกิดอาชญากรรมและความรุนแรงต่ำ', 'No flooding and no land slides\r\nLow criminality and violence rates', '无洪水、无泥石流\r\n低犯罪率');
INSERT INTO `home_list` VALUES ('6', '1', 'fas fa-book', 'ประวัติศาสตร์ที่น่าเคารพและประทับใจของแม่ฟ้าหลวง', 'Respectful impressive Mae Fah Luang history', '泰王国的摇篮，皇太后垂爱之地，历史源远流长');
INSERT INTO `home_list` VALUES ('7', '2', 'fas fa-car', 'จากโครงการถึงในตัวเมืองขับรถเพียง 10 นาที\r\nขับรถ 5 นาทีถึงสนามกอล์ฟสันติบุรี\r\n5 นาทีถึงเซ็นทรัล บิ๊กซี และโฮมโปร์\r\nอยู่ใกล้ทางหลวงหมายเลข 3 ไป จีน-ลาว\r\nถนนสาธารณะใหม่ทั่วโครงการ', 'Residential community at 10 minutes drive from city and facilities\r\nJust 5 minutes drive to Santiburi Golf course\r\nOnly 5 minutes to Central Plaza, Big C and HomePro\r\nLocated along new Highway AH-3 to Laos-China\r\nNew public road throughout whole community', '距市中心 10分钟车程\r\n距 Santiburi 高尔夫球场5分钟车程\r\n距 Central Plaza、Big C 等大型购物中心5分钟车程\r\n紧临AH-3公路，经老挝直通中国\r\n新建街道串联整个社区');
INSERT INTO `home_list` VALUES ('8', '2', 'fas fa-pencil-ruler', 'บริการออกแบบ้านให้ฟรีตามที่ฝันไว้\r\nไฟฟ้า 3 เฟสใหม่ของสาธารณะ', 'Free professional design of your dream house\r\nNew powerful 3-Phase public electricity system', '专业的建筑设计免费贴心\r\n三相公共电力系统动力十足\r\n');
INSERT INTO `home_list` VALUES ('9', '2', 'fas fa-map-marked-alt', 'ที่ดินทุกแปลงมีโฉนด\r\nมีที่ดินหลาขนาดให้เลือก\r\nพร้อมที่จะแบ่งขายตามที่ต้องการ', 'All land plots have Chanote title-deeds\r\nMuch choice of spacious or smaller land plots\r\nPossibility to sub-divide land lots up to your desire', '所有地块皆含地契\r\n地块面积大小可重新划分\r\n');
INSERT INTO `home_list` VALUES ('10', '2', 'fas fa-users', 'มีทั้งคนไทยและต่างชาติอาศัยอยู่', 'Quiet residential area with mix of foreign and Thai residents', '国际化住居社区，与世界人民相伴');
INSERT INTO `home_list` VALUES ('11', '2', 'fas fa-headphones', 'สงบเงียบไม่มีเสียงดังมลภาวะทางอากาศและรถติดตลอดจนปัญหาของเมือง', 'No noise, pollution or typical city problems', '远离城市喧嚣与污染');
INSERT INTO `home_list` VALUES ('12', '2', 'fas fa-hospital', 'ใกล้ โรงพยาบาลที่มีการบริการฉุกเฉิน ตลอด 24 ชั่วโมง', 'Nearly hospital with 24-7 emergency services', '紧邻医院，有24小时急救医疗');

-- ----------------------------
-- Table structure for `house_detail_h`
-- ----------------------------
DROP TABLE IF EXISTS `house_detail_h`;
CREATE TABLE `house_detail_h` (
  `id` int(5) NOT NULL auto_increment,
  `lang` char(2) default NULL,
  `title` varchar(250) default NULL,
  `field_name` varchar(100) default NULL,
  `unit` varchar(100) default NULL,
  `order` int(5) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of house_detail_h
-- ----------------------------
INSERT INTO `house_detail_h` VALUES ('2', 'th', 'แบบบ้าน', 'h_style_th', null, '1');
INSERT INTO `house_detail_h` VALUES ('3', 'th', 'ระดับ', 'h_group', null, '2');
INSERT INTO `house_detail_h` VALUES ('4', 'th', 'ห้องนอน', 'h_bed', null, '3');
INSERT INTO `house_detail_h` VALUES ('5', 'th', 'ห้องน้ำ', 'h_bath', null, '4');
INSERT INTO `house_detail_h` VALUES ('6', 'th', 'ที่จอดรถ', 'h_parking', null, '5');
INSERT INTO `house_detail_h` VALUES ('7', 'th', 'พื้นที่ภายใน', 'h_area_in', 'ตร.ม.', '6');
INSERT INTO `house_detail_h` VALUES ('8', 'th', 'พื้นที่ภายนอก', 'h_area_out', 'ตร.ม.', '7');
INSERT INTO `house_detail_h` VALUES ('9', 'th', 'บริเวณที่จอดรถ', 'h_area_park', 'ตร.ม.', '8');
INSERT INTO `house_detail_h` VALUES ('10', 'th', 'พื้นที่ทั้งหมด', 'h_area_all', 'ตร.ม.', '9');
INSERT INTO `house_detail_h` VALUES ('11', 'th', 'ราคา', 'h_price', 'บาท', '10');
INSERT INTO `house_detail_h` VALUES ('12', 'th', 'หมายเหตุ', 'h_remarks_th', null, '11');
INSERT INTO `house_detail_h` VALUES ('13', 'en', 'Style', 'h_style_en', null, '1');
INSERT INTO `house_detail_h` VALUES ('14', 'en', 'Sort', 'h_group', null, '2');
INSERT INTO `house_detail_h` VALUES ('15', 'en', 'Bedrooms', 'h_bed', null, '3');
INSERT INTO `house_detail_h` VALUES ('16', 'en', 'Bathrooms', 'h_bath', null, '4');
INSERT INTO `house_detail_h` VALUES ('17', 'en', 'Parking', 'h_parking', null, '5');
INSERT INTO `house_detail_h` VALUES ('18', 'en', 'Interior area', 'h_area_in', 'm<sup>2</sup>', '6');
INSERT INTO `house_detail_h` VALUES ('19', 'en', 'Exterior area', 'h_area_out', 'm<sup>2</sup>', '7');
INSERT INTO `house_detail_h` VALUES ('20', 'en', 'Parking area', 'h_area_park', 'm<sup>2</sup>', '8');
INSERT INTO `house_detail_h` VALUES ('21', 'en', 'Total area', 'h_area_all', 'm<sup>2</sup>', '9');
INSERT INTO `house_detail_h` VALUES ('22', 'en', 'Price', 'h_price', 'bath', '10');
INSERT INTO `house_detail_h` VALUES ('23', 'en', 'Remarks', 'h_remarks_en', null, '11');

-- ----------------------------
-- Table structure for `house_h`
-- ----------------------------
DROP TABLE IF EXISTS `house_h`;
CREATE TABLE `house_h` (
  `h_id` int(5) NOT NULL auto_increment,
  `h_name_en` varchar(150) collate utf8_unicode_ci default NULL,
  `h_name_th` varchar(150) collate utf8_unicode_ci default NULL,
  `h_style_en` varchar(100) collate utf8_unicode_ci default NULL,
  `h_style_th` varchar(100) collate utf8_unicode_ci default NULL,
  `h_group` varchar(50) collate utf8_unicode_ci default NULL,
  `h_bed` tinyint(2) default NULL,
  `h_bath` tinyint(2) default NULL,
  `h_parking` tinyint(2) default NULL,
  `h_area_in` int(4) default NULL,
  `h_area_out` int(4) default NULL,
  `h_area_park` int(4) default NULL,
  `h_area_all` int(4) default NULL,
  `h_price` int(10) default NULL,
  `h_remarks_en` text collate utf8_unicode_ci,
  `h_remarks_th` text collate utf8_unicode_ci,
  `h_show` tinyint(1) default NULL,
  `h_order` int(4) default NULL,
  `h_pic_show` varchar(50) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`h_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of house_h
-- ----------------------------
INSERT INTO `house_h` VALUES ('1', 'Baan Sabaai', 'บ้านสบาย', 'Lek 1-1', 'เล็ก 1-1', 'Low budget', '1', '2', '1', '72', '12', '12', '96', '899000', 'Basic', 'ธรรมดา', '0', '1', 'Sabaai_03.JPG');
INSERT INTO `house_h` VALUES ('2', 'Baan Thai Patio', 'บ้านไทย เล็ก', 'Lek 2-2', 'เล็ก 2-2', 'Low budget', '2', '2', '1', '80', '36', '20', '136', '1399000', 'Standard', 'มาตรฐาน', '0', '2', 'Baan Thai View A 2-2.jpg');
INSERT INTO `house_h` VALUES ('3', 'Baan Thai Patio', 'บ้านไทย ปกติ', 'Basic 2-2', 'เบสิค 2-2', 'Low budget', '2', '2', '1', '94', '40', '24', '162', '1950000', 'Basic standard\r\n', 'มาตรฐาน', '1', '3', 'Basic 2-2_07.jpg');
INSERT INTO `house_h` VALUES ('4', 'Baan Thai Patio', 'บ้านไทย ใหญ่', 'Standard 2-2', 'ใหญ่ 2-2', 'Low budget', '2', '2', '2', '98', '42', '36', '176', '1995000', 'Standard', 'มาตรฐาน', '0', '4', 'Baan Thai_03.jpg');
INSERT INTO `house_h` VALUES ('5', 'Baan Thai Patio', 'บ้านไทยพาทิโอ้', 'Yai 3-2', 'เบสิค 3-2', 'Low budget', '3', '2', '2', '117', '42', '36', '195', '2245000', 'Spacious', 'กว้างใหญ่', '1', '5', 'Baan Dauw_01 small.jpg');
INSERT INTO `house_h` VALUES ('6', 'Dutsadee Thai', 'ดุษฏีไทย A', '2-2 A', 'ใหญ่ 2-2', 'Medium', '2', '2', '2', '144', '44', '48', '236', '2650000', 'Open Living', 'ห้องนั่งเล่น ครัวและห้องอาหารอยู่ในพื้นที่เดียวกัน', '1', '6', 'Dutsadee Thai 2-2 A.jpg');
INSERT INTO `house_h` VALUES ('7', 'Dutsadee Thai', 'ดุษฏีไทย B', '2-2 B', 'ใหญ่ 2-2', 'Medium', '2', '2', '2', '144', '44', '48', '236', '2750000', 'Separated Living', 'แยกพื้นที่ห้องนั่งเล่น ครัวและห้องอาหารออกเป็นสัดส่วน', '1', '7', 'Dutsadee Thai 2-2 B.jpg');
INSERT INTO `house_h` VALUES ('8', 'Dutsadee Thai', 'ดุษฏีไทย (ใหญ่)', '3-2', '3-2', 'Medium', '3', '2', '2', '159', '69', '44', '272', '2950000', 'Enlarged', 'ใหญ่', '1', '9', 'Dutsadee-Thai_06.jpg');
INSERT INTO `house_h` VALUES ('9', 'Baan Santi', 'บ้านสันติ (เล็ก)', 'Thai Basic', 'ไทย เบสิค', 'Medium', '2', '2', '1', '89', '46', '22', '157', '2950000', 'incl. Dipping pool', 'รวมสระว่ายน้ำขนาดเล็ก', '1', '10', 'Santi01.JPG');
INSERT INTO `house_h` VALUES ('10', 'Baan Santi', 'บ้านสันติ (ใหญ่)\r\n', 'Thai Enlarged', 'ไทย ขนาดใหญ่', 'Medium', '3', '2', '1', '129', '40', '24', '193', '3350000', 'incl. Swimming pool', 'รวมสระว่ายน้ำ', '1', '11', 'Santi02.JPG');
INSERT INTO `house_h` VALUES ('11', 'Chom Phu Thai', 'ชมพูไทย', 'European', 'ยุโรป', 'Medium', '2', '2', '1', '138', '46', '21', '205', '3950000', 'Spacious Living room', 'ห้องนั่งเล่นขนาดกว้างขวาง', '1', '12', 'ChomPhu Thai_01.JPG');
INSERT INTO `house_h` VALUES ('12', 'Tam Ruad', 'ตำรวจ', 'European', 'ยุโรป', 'Luxury', '2', '2', '1', '141', '96', '28', '265', '4380000', 'Incl Sala - Service blg', 'รวมศาลา และเรือนหลังนอก', '1', '14', 'TamRuad_01.JPG');
INSERT INTO `house_h` VALUES ('13', 'Chom Phu Luxury', 'ชมพู-หรูหรา', 'European', 'ยุโรป', 'Luxury', '2', '2', '1', '138', '46', '21', '205', '4900000', 'Spacious Living room', 'ห้องนั่งเล่นขนาดกว้างขวาง', '1', '15', 'ChomPhu Lux _01.jpg');
INSERT INTO `house_h` VALUES ('14', 'Dutsadee Luxury', 'ดุษฏี-หรูหรา', 'Thai-Western', 'ไทย-ตะวันตก', 'Luxury', '3', '2', '2', '159', '69', '44', '272', '5640000', 'Double walls - HQ', 'ผนัง 2 ชั้น คุณภาพสูง', '1', '16', 'Dutsadee Lux_01.jpg');
INSERT INTO `house_h` VALUES ('15', 'Baan Yu', 'บ้านอยู่', 'European', 'ยุโรป', 'Luxury', '3', '2', '1', '188', '80', '21', '289', '6200000', 'U-Shape villa', 'วิลล่ารูปตัวยู', '1', '17', 'BaanYu_01.jpg');
INSERT INTO `house_h` VALUES ('16', 'Dok Bua', 'ดอกบัว', 'American', 'อเมริกัน', 'Luxury', '2', '2', '2', '203', '70', '24', '297', '7140000', 'Incl Sala - Service blg', 'รวมศาลา และเรือนหลังนอก', '1', '18', 'DokBua_01.JPG');
INSERT INTO `house_h` VALUES ('17', 'Chai Dee', 'ใจดี', 'Thai-Western', 'ไทย-ตะวันตก', 'Luxury', '3', '3', '2', '204', '28', '48', '280', '7800000', 'Half-storey in Living', 'มีชั้นลอยในส่วนของห้องนั่งเล่น', '1', '20', 'ChaiDee_01.jpg');
INSERT INTO `house_h` VALUES ('18', 'Meesuk 1', 'มีสุข - 1ชั้น', 'American', 'อเมริกัน', 'High-end', '3', '3', '2', '227', '59', '48', '334', '8150000', 'Double wing villa', 'วิลล่าที่มีปีกอาคาร 2 ด้านทั้งซ้ายและขวา', '1', '21', 'Meesuk1_02.jpg');
INSERT INTO `house_h` VALUES ('19', 'Karun Yai', 'การุณ (ใหญ่)', 'Thai-Western', 'ไทย-ตะวันตก', 'High-end', '4', '3', '2', '252', '199', '48', '499', '8250000', 'Unique residence', 'ที่อยู่อาศัยอันเป็นเอกลักษณ์', '1', '22', 'Karun_01.JPG');
INSERT INTO `house_h` VALUES ('20', 'Baan Mae-Kok', 'บ้านแม่กก', 'American', 'อเมริกัน', 'High-end', '3', '3', '2', '198', '112', '48', '358', '8400000', 'Impressive interior', 'การออกแบบตกแต่งภายในที่น่าประทับใจ', '1', '23', 'MaeKok_04.JPG');
INSERT INTO `house_h` VALUES ('21', 'Chom View', 'ชมวิว', 'Free-style', 'ไทย-ตะวันตก', 'High-end', '4', '2', '2', '268', '108', '22', '398', '8950000', '2 Floors and basement', '2 ชั้นและชั้นใต้ดิน', '1', '24', 'ChomView_01.JPG');
INSERT INTO `house_h` VALUES ('22', 'Meesuk 2', 'มีสุข - 2ชั้น', 'American', 'อเมริกัน', 'High-end', '4', '4', '2', '330', '59', '48', '437', '9300000', '2 Floors', '2 ชั้น', '1', '25', 'Meesuk2_01.JPG');
INSERT INTO `house_h` VALUES ('23', 'Song Chan', 'สองชั้น', 'American', 'อเมริกัน', 'High-end', '8', '4', '2', '383', '132', '72', '587', '9500000', '2 Floors', '2 ชั้น', '1', '26', 'SongChan_02.jpg');
INSERT INTO `house_h` VALUES ('25', 'Baan Wipawadee', 'บ้านวิภาวดี', '3-2', 'ใหญ่ 3-2', 'Medium', '3', '2', '2', '144', '44', '48', '236', '2850000', 'Modern style Living', 'วิลล่าที่ทันสมัยพร้อมห้องนั่งเล่นลดลงและห้องครัวแบบเปิด\r\n', '1', '7', 'Wipawadee_01.jpg');
INSERT INTO `house_h` VALUES ('26', 'Karun Lek', 'การุณ (เล็ก)', 'Thai-Western', 'ไทย-ตะวันตก', 'High-end', '4', '4', '2', '170', '132', '25', '327', '7600000', 'Patio \"U-style\" Pool villa', 'ตัว สไตล์ \"U-งรูป\" กว้างขวาวิลล่าลานสระว่ายน้ำ', '1', '19', 'Karun Lek_01.jpg');
INSERT INTO `house_h` VALUES ('27', 'Luxury country house', 'Luxury country house', null, 'Luxury\r\n', 'Luxury\r\n', '5', '5', null, '381', null, '102', '902', '25000000', 'Land: 2-1-26.25 = 3,705 M² (Title-deed under application procedure)\r\n\r\nInterior House area size of Main building: 299 M²\r\nInterior House area size of Guest building: 57 M²\r\nInterior Service area size: 25 M²\r\nRoofed parking area size: 102 M²\r\nWater front Sala area size: 60 M²\r\nHouse Terrace area size: 39 M²\r\nRoofed walk-way area size: 58 M²\r\nPool + Sundeck and Pool terrace area size: 180 M²\r\nTotal Interior area: 381 M²\r\nTotal Roofed area: 826 M²\r\nTotal construction area size: 902 M²\r\n\r\nPool dimensions: 12 x 4 (Depth slope: 1.10 - 1.30)\r\nDrive lane dimensions: 265 M²\r\n\r\nMain Building (1-storey):\r\n1 Living room\r\n1 Spacious Master bedroom with build-in wardrobes\r\n2 Roomy guest rooms with build-in wardrobes\r\n1 Master Bathroom with steam-jacuzzi cabin\r\n2 Guest bathrooms with build-in wardrobes\r\n1 Visitors bathroom\r\n1 Office / study / media and meeting room with pantry\r\n1 Sacred room \r\n1 Kitchen with \"L-shape\" counter, build-in cupboards and modern kitchen equipment\r\n1 Entrance hall\r\n\r\nGuest building (2-storey):\r\n	1 Living room\r\n	1 Bedroom\r\n1 Bathroom\r\n1 Kitchen corner with counter and build-in cupboards\r\n1 Stores room\r\n\r\nService Building:\r\n1 Staff bathroom\r\n1 Laundry room\r\n1 Technical room / Water treatment / Pool equipment\r\n4 Cars Roofed parking area\r\n\r\nExtra\'s:\r\nRemote controlled gate with walk-in gate\r\nCCTV Security camera system 24 hours\r\nSpacious garden\r\nPrivate road direct connected to Public Road\r\n3-phase Electricity supply\r\n', null, '1', '27', null);
INSERT INTO `house_h` VALUES ('30', 'Baan Bangkok', 'บ้านกรุงเทพฯ', 'CR Luxury level', 'ระดับหรูเชียงราย', 'Luxury\r\n', '3', '2', '2', '145', '66', '36', '313', '4250000', 'Modern + Swimming pool\r\n', 'วิลล่าสไตล์บูติคขี้เล่นสำหรับคนทันสมัยรวมถึงสระว่ายน้ำ\r\n', '1', '13', 'Baan Bangkok_01.jpg');

-- ----------------------------
-- Table structure for `house_pic`
-- ----------------------------
DROP TABLE IF EXISTS `house_pic`;
CREATE TABLE `house_pic` (
  `pic_id` int(7) NOT NULL auto_increment,
  `h_id` int(4) default NULL,
  `pic_file` varchar(50) collate utf8_unicode_ci default NULL,
  `pic_head` tinyint(1) default NULL,
  `pic_order` int(3) default NULL,
  PRIMARY KEY  (`pic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of house_pic
-- ----------------------------
INSERT INTO `house_pic` VALUES ('1', '9', '03_Front.JPG', null, '1');
INSERT INTO `house_pic` VALUES ('2', '9', '04_Back.JPG', null, '2');
INSERT INTO `house_pic` VALUES ('3', '9', '05_Interior.JPG', null, '3');
INSERT INTO `house_pic` VALUES ('4', '9', '06_Lay-out standard.jpg', null, '4');
INSERT INTO `house_pic` VALUES ('5', '2', 'Baan Thai Patio Lek 2-2 plan.jpg', null, '1');

-- ----------------------------
-- Table structure for `land_price`
-- ----------------------------
DROP TABLE IF EXISTS `land_price`;
CREATE TABLE `land_price` (
  `run_index` int(4) NOT NULL auto_increment,
  `land_pot` varchar(50) collate utf8_unicode_ci default NULL,
  `rai` float(4,0) default NULL,
  `ngan` float(4,0) default NULL,
  `wah2` float(4,0) default NULL,
  `price_wah2` float(10,0) default NULL,
  `price_sum` float(15,0) default NULL,
  `discount` float(10,0) default NULL,
  `price_pro` float(15,0) default NULL,
  `remarks_th` varchar(250) collate utf8_unicode_ci default NULL,
  `remarks_en` varchar(250) collate utf8_unicode_ci NOT NULL,
  `land_order` int(4) default NULL,
  PRIMARY KEY  (`run_index`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of land_price
-- ----------------------------
INSERT INTO `land_price` VALUES ('1', 'E-4', '0', '1', '34', '12500', null, null, null, null, '', '1');
INSERT INTO `land_price` VALUES ('2', 'J-0', '0', '0', '64', '12500', null, null, null, '*** โปรโมชั่นพิเศษ ***', '*** Promotion ***', '2');
INSERT INTO `land_price` VALUES ('3', 'G-2a', '0', '1', '75', '15000', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '3');
INSERT INTO `land_price` VALUES ('4', 'G-2b', '0', '1', '87', '15000', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '4');
INSERT INTO `land_price` VALUES ('5', 'G-7', '0', '3', '56', '11500', null, null, null, 'พื้นที่รวมทั้งหมด', 'whole', '5');
INSERT INTO `land_price` VALUES ('6', 'G-7a', '0', '0', '85', '12500', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '6');
INSERT INTO `land_price` VALUES ('7', 'G-7b', '0', '0', '80', '12500', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '7');
INSERT INTO `land_price` VALUES ('8', 'G-7c', '0', '0', '75', '12500', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '8');
INSERT INTO `land_price` VALUES ('9', 'G-7d', '0', '0', '75', '12500', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '9');
INSERT INTO `land_price` VALUES ('10', 'K-2', '0', '2', '88', '17500', null, null, null, null, '', '10');
INSERT INTO `land_price` VALUES ('11', 'K-3', '0', '2', '20', '17500', null, null, null, null, '', '11');
INSERT INTO `land_price` VALUES ('12', 'K-4b', '0', '2', '0', '15000', null, null, null, '*** โปรโมชั่นพิเศษ ***', '*** Promotion ***', '12');
INSERT INTO `land_price` VALUES ('13', 'K-5', '0', '3', '33', '15000', null, null, null, 'พื้นที่รวมทั้งหมด', 'whole', '13');
INSERT INTO `land_price` VALUES ('14', 'K-5a', '0', '2', '0', '17500', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '14');
INSERT INTO `land_price` VALUES ('15', 'K-5b', '0', '1', '33', '17500', null, null, null, 'ภายใต้สัญญาหรือเงื่อนไขพิเศษเท่านั้น', '', '15');
INSERT INTO `land_price` VALUES ('16', 'K-7a', '0', '1', '65', null, '4800000', null, null, 'ราคาบ้านพร้อมที่ดิน', 'Including house', '16');
INSERT INTO `land_price` VALUES ('17', 'K-7b', '0', '1', '48', null, '5500000', null, null, 'ราคาบ้านพร้อมที่ดิน', 'Including house', '17');
INSERT INTO `land_price` VALUES ('18', 'K-9', '0', '3', '28', '17500', null, null, null, null, '', '18');
INSERT INTO `land_price` VALUES ('19', 'F-1', '0', '1', '20', '7500', null, null, null, null, '', '19');
INSERT INTO `land_price` VALUES ('20', 'F-2', '0', '2', '0', '7500', null, null, null, null, '', '20');
INSERT INTO `land_price` VALUES ('21', 'F-3', '0', '2', '24', '7500', null, null, null, null, '', '21');

-- ----------------------------
-- Table structure for `swiming_pool`
-- ----------------------------
DROP TABLE IF EXISTS `swiming_pool`;
CREATE TABLE `swiming_pool` (
  `s_id` int(5) NOT NULL auto_increment,
  `s_name_en` varchar(50) collate utf8_unicode_ci default NULL,
  `s_name_th` varchar(100) collate utf8_unicode_ci default NULL,
  `s_type_en` varchar(50) collate utf8_unicode_ci default NULL,
  `s_type_th` varchar(100) collate utf8_unicode_ci default NULL,
  `s_w` varchar(50) collate utf8_unicode_ci default NULL,
  `s_t` varchar(50) collate utf8_unicode_ci default NULL,
  `s_area` int(4) default NULL,
  `s_price` int(10) default NULL,
  `s_remark_en` varchar(200) collate utf8_unicode_ci default NULL,
  `s_remark_th` varchar(200) collate utf8_unicode_ci default NULL,
  `s_order` int(3) default NULL,
  `s_pic_show` varchar(100) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of swiming_pool
-- ----------------------------
INSERT INTO `swiming_pool` VALUES ('1', 'Swimming pool 2', 'สระว่ายน้ำ 2', 'rectangle', 'สี่เหลี่ยมผืนผ้า', '4 x 8 ม.', '1.00-1.40', '45', '850000', 'Standard\r\n', 'สระว่ายน้ำ Salt chlorinator น้ำกับระบบการกรอง', '2', 'Pool4x8_02.jpg');
INSERT INTO `swiming_pool` VALUES ('2', 'Swimming pool 3', 'สระว่ายน้ำ 3', 'rectangle', 'สี่เหลี่ยมผืนผ้า', '6 x 8 ม.', '1.20-1.60', '68', '990000', 'Luxury', 'สระว่ายน้ำ Salt chlorinator น้ำกับระบบการกรอง', '3', 'Pool6x8_01.JPG');
INSERT INTO `swiming_pool` VALUES ('3', 'Swimming pool 4', 'สระว่ายน้ำ 4', 'rectangle', 'สี่เหลี่ยมผืนผ้า', '8 x 12 ม.', '1.20-1.80', '135', '1500000', 'Luxury', 'สระว่ายน้ำ Salt chlorinator น้ำกับระบบการกรอง', '4', 'Pool8x12.JPG');
INSERT INTO `swiming_pool` VALUES ('4', 'Swimming pool 5', 'สระว่ายน้ำ 5', 'Free-form', 'ฟรีฟอร์ม', '6 x 12 ม.', '1.20-1.80', '100', '1400000', 'Gustom-built', 'สระว่ายน้ำ Salt chlorinator น้ำกับระบบการกรอง', '5', 'Pool Free-form_04.JPG');
INSERT INTO `swiming_pool` VALUES ('5', 'Swimming pool 6', 'สระว่ายน้ำ 6', '\"L\" - Shape', 'รูปร่าง \"L\"', '4 x 6 x 15 ม.', '1.00-1.44', '85', '1250000', 'Gustom-built', 'สระว่ายน้ำ Salt chlorinator น้ำกับระบบการกรอง', '6', 'Pool L-Shape_02.JPG');
INSERT INTO `swiming_pool` VALUES ('6', 'Swimming pool 1', 'สระว่ายน้ำ 1', 'rectangle', 'สี่เหลี่ยมผืนผ้า', '4 x 6 ม.', '1.00-1.20', '30', '550000', 'Standard\r\n', 'กรองมาตรฐานและระบบการไหลเวียน', '1', null);
INSERT INTO `swiming_pool` VALUES ('7', 'Swimming pool 7', 'สระว่ายน้ำ 7', 'Majestic\r\n', 'อย่างสง่าผ่าเผย\r\n', '8 x 15 ม.', '1.20-1.80', '180', '1850000', 'Top-end\r\n', 'สระว่ายน้ำ Salt chlorinator น้ำกับระบบการกรอง', '7', null);

-- ----------------------------
-- Table structure for `user_table`
-- ----------------------------
DROP TABLE IF EXISTS `user_table`;
CREATE TABLE `user_table` (
  `username` varchar(30) collate utf8_unicode_ci NOT NULL default '',
  `password` varchar(30) collate utf8_unicode_ci default NULL,
  `class` char(1) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_table
-- ----------------------------
INSERT INTO `user_table` VALUES ('admin', '1234', '1');
