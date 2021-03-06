/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 100109
Source Host           : localhost:3306
Source Database       : afs_db_timesheet_2

Target Server Type    : MYSQL
Target Server Version : 100109
File Encoding         : 65001

Date: 2016-04-20 08:27:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_client
-- ----------------------------
DROP TABLE IF EXISTS `tb_client`;
CREATE TABLE `tb_client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nama_client` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `inisial` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `active` int(11) DEFAULT NULL,
  `potential` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_client
-- ----------------------------
INSERT INTO `tb_client` VALUES ('1', 'Abes Samir', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('2', 'Ali Muhammad', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('3', 'Andi Vaswani', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('4', 'Andrisjah Ali / Irasanti', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('5', 'Apple International (Harui Matsuka)', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('6', 'Artolite Abetama', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('7', 'Bambang Yoga', 'Bambang Yoga', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('9', 'BHIT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('10', 'BNI Syariah', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('11', 'Charlie ', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('12', 'CTPI', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('13', 'Dicky Tjokrosaputro', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('14', 'Edy Santoso', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('15', 'Eko Santoso', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('16', 'Excel Utama Indonesia, PT.', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('17', 'Firhand Ali', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('18', 'Gia Bramantyo (PT. Maestro Indonesia)', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('19', 'Global Mediacom, Tbk, PT (Mcom)', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('20', 'Grama Bazita Group', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('21', 'Hary Tanoesoedibjo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('22', 'Hazama Ando Corporation', 'dani', '0825554445', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('23', 'Hengky Setiawan', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('24', 'Indoturbin', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('25', 'Infokom Elektrindo, PT', 'ahmad Dhani', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('26', 'Inovisi Infracom, Tbk. PT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('27', 'International Transport & Infrastucture', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('28', 'Jan Tan kilisan (Infrakom Indovision)', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('29', 'KPM Oil & Gas', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('30', 'PT. Kodel', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('31', 'Lennardi Anggijono', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('32', 'Liem Kim Lang', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('33', 'Lim Heng Ung', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('34', 'M. Noer', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('35', 'Meckel Ali', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('36', 'Mediate Indonesia, PT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('37', 'MNC', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('38', 'MNC Asuransi Indonesia', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('39', 'MNC Group', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('40', 'MNC Asuransi Indonesia, PT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('41', 'MNC Asuransi  ', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('42', 'MNC Bank', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('43', 'MNC Finance', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('44', 'MNC Skyvision', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('45', 'My TV', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('46', 'NDSC', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('47', 'Niko Resources, Ltd', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('48', 'Nir Peretz Magnus', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('49', 'Pelni', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('50', 'Postindo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('51', 'QEI - Queen Loyak Talang Gula', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('52', 'QOI - Queen', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('53', 'Ratu Atut', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('54', 'RCTI', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('55', 'Reliance Group', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('56', 'Rita Sri Wahyusih Subowo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('57', 'Robert Tantular', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('58', 'Ronald Jacob', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('59', 'RSU Herna', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('60', 'Setia Utama Property, PT. (SUP)', 'adi nurudin', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('61', 'Semesta Marga Raya, PT', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('62', 'SK Pelayaran Indonesia', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('63', 'SNC Lavalin', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('64', 'Sovereign\'s Capital', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('65', 'Taman Harapan Indah', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('66', 'Telesindo Group', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('67', 'Telesindo Group - SUD', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('68', 'Tiny Tantono', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('69', 'Tire Technology Est', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('70', 'Trimartheo', 'NULL', 'NULL', 'NULL', 'NULL', 'Jalan Sawo matang', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('71', 'Tri Mar Theo (TMT)', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('72', 'Tri Warako Utama, PT (TWU)', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('73', 'Waindo', 'Waindo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('74', 'Wartawan Sindo', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('75', 'Wen Pik', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('76', 'Yuli Kusnadi', 'Yuli Kusnadi', '08135587779', '08458899998', 'NULL', 'NULL', 'NULL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('77', 'Zahir Ali', 'Zahir Ali', '082115554444', '08522555447', 'zahir.ali@gmail.com', 'Jl. Cendana Blok C', 'ZA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', '1', '0');
INSERT INTO `tb_client` VALUES ('89', 'Kingking Firdaus', 'Kingking Firdaus', '082113708280', '082113708888', 'kingking.firdaus@gmail.com', 'Jl. Cendani 1 No 60 Blok C pondok Bambu Jakarta Timur', 'KKF', 'Keterangan Kingking Firdaus', null, null);
INSERT INTO `tb_client` VALUES ('92', 'Toufan', 'Toufan', '082115548887', '08966658885', 'toufan@gmail.com', 'Bintara 2', 'TFN', 'Keterangan Toufan', null, null);
INSERT INTO `tb_client` VALUES ('93', 'Risky', 'Risky', '082113334445', '082236645', 'risky@gmail.com', 'Jatiwaringin', 'RK', 'keterangan client', null, null);
INSERT INTO `tb_client` VALUES ('94', 'Total oil Indonesia', 'Mr a', '0821188988767', '0821133477665', 'contact@totaloil.com', 'Jalan XXX jakarta utara', 'aa', 'PT. Total Oil Indonesia', null, null);
INSERT INTO `tb_client` VALUES ('95', 'Hans Darmono', '', '', '', '', '', '', 'hans darmono', null, null);

-- ----------------------------
-- Table structure for tb_divisi
-- ----------------------------
DROP TABLE IF EXISTS `tb_divisi`;
CREATE TABLE `tb_divisi` (
  `id_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_divisi
-- ----------------------------
INSERT INTO `tb_divisi` VALUES ('1', 'White Collar Crime');
INSERT INTO `tb_divisi` VALUES ('2', 'Commercial Dispute');
INSERT INTO `tb_divisi` VALUES ('3', 'Corporate');
INSERT INTO `tb_divisi` VALUES ('4', 'Bankcruptcy');
INSERT INTO `tb_divisi` VALUES ('5', 'Land & Property');
INSERT INTO `tb_divisi` VALUES ('6', 'Functional');

-- ----------------------------
-- Table structure for tb_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `tb_jabatan`;
CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_jabatan
-- ----------------------------
INSERT INTO `tb_jabatan` VALUES ('1', 'MANAGING PARTNER', '600');
INSERT INTO `tb_jabatan` VALUES ('2', 'PARTNER', '350');
INSERT INTO `tb_jabatan` VALUES ('3', 'MID-ASSOCIATE', '150');
INSERT INTO `tb_jabatan` VALUES ('4', 'JUNIOR ASSOCIATE', '120');
INSERT INTO `tb_jabatan` VALUES ('5', 'SENIOR ASSOCIATE', '200');
INSERT INTO `tb_jabatan` VALUES ('6', 'OFFICE MANAGER', '0');
INSERT INTO `tb_jabatan` VALUES ('7', 'FINANCE AND ACCOUNTING', '0');
INSERT INTO `tb_jabatan` VALUES ('8', 'SECRETARIAL AND ADMIN', '0');
INSERT INTO `tb_jabatan` VALUES ('9', 'HOSPITALITY', '0');
INSERT INTO `tb_jabatan` VALUES ('10', 'DRIVER', '0');
INSERT INTO `tb_jabatan` VALUES ('11', 'PARALEGAL', '120');
INSERT INTO `tb_jabatan` VALUES ('12', 'IT', '0');
INSERT INTO `tb_jabatan` VALUES ('13', 'JUNIOR PARTNER', '300');

-- ----------------------------
-- Table structure for tb_lumpsum
-- ----------------------------
DROP TABLE IF EXISTS `tb_lumpsum`;
CREATE TABLE `tb_lumpsum` (
  `id_lumpsum` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `success_fee` float(255,0) DEFAULT NULL,
  `term1` float(255,0) DEFAULT NULL,
  `term2` float(255,0) DEFAULT NULL,
  `term3` float(255,0) DEFAULT NULL,
  `desc_term1` varchar(255) DEFAULT NULL,
  `desc_term2` varchar(255) DEFAULT NULL,
  `desc_term3` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_lumpsum`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_lumpsum
-- ----------------------------
INSERT INTO `tb_lumpsum` VALUES ('1', 'AFS20150001', '150000000', '1000000', '40000000', '100000000', 'desc term 1', 'desc term 2', 'desc term 3', 'description');
INSERT INTO `tb_lumpsum` VALUES ('2', 'AFS20150002', '50000000', '20000000', '10000000', '30000000', 'desc term 1', 'desc term 1', 'desc term 1', 'desc term 1');
INSERT INTO `tb_lumpsum` VALUES ('3', 'AFS20150003', '150000000', '35000000', '45000000', '12000000', 'desc term 1', 'desc term 1', 'desc term 1', 'desc term 1');
INSERT INTO `tb_lumpsum` VALUES ('4', 'AFS20150006', '75000000', '10000000', '15000000', '25000000', 'desc term 1', 'desc term 1', 'desc term 1', 'desc term 1');
INSERT INTO `tb_lumpsum` VALUES ('5', 'AFS2015201585292', '78000000', '7000000', '15000000', '35000000', 'desc term 1', 'desc term 1', 'desc term 1', 'desc term 1');
INSERT INTO `tb_lumpsum` VALUES ('6', 'AFS2015201591429', '95000000', '10000000', '100000000', '250000000', 'desc term 1', 'desc term 1', 'desc term 1', 'desc term 1');

-- ----------------------------
-- Table structure for tb_matter
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter`;
CREATE TABLE `tb_matter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `id_client` int(255) DEFAULT NULL,
  `id_payment` int(11) DEFAULT NULL,
  `matter` varchar(255) DEFAULT NULL,
  `open_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `active` int(11) DEFAULT '1',
  `input_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter
-- ----------------------------
INSERT INTO `tb_matter` VALUES ('16', 'AFS2015213444522', '32', '5', 'Matter Test 5', '2015-11-16', '2015-11-16', '1', null);
INSERT INTO `tb_matter` VALUES ('29', 'AFS6e6424a49a7292ca', '65', '2', 'Taman Harapan indah matter', '2015-10-26', '2015-11-17', '1', null);
INSERT INTO `tb_matter` VALUES ('64', 'AFS93D5C418EA446A26', '61', '6', 'semesta marga', '2015-11-18', '2015-11-21', '1', null);
INSERT INTO `tb_matter` VALUES ('66', 'AFSA768E4E0C9F2E431', '67', '2', 'Matter Telesindo Group', '2015-10-28', '2015-11-26', '1', null);
INSERT INTO `tb_matter` VALUES ('67', 'AFS8D9A348C3B629E4A', '61', '2', 'Matter Semesta Marga Raya', '2015-10-26', '2015-11-25', '1', null);
INSERT INTO `tb_matter` VALUES ('69', 'AFS0E45D4D7D9CE6C1D', '35', '4', 'Matter Meckel Ali', '2015-11-04', '2015-11-26', '1', null);
INSERT INTO `tb_matter` VALUES ('70', 'AFSFBF5148DCB265314', '13', '5', 'Lorem Ipsum dolor sit amet', '2015-10-28', '2015-11-26', '1', null);
INSERT INTO `tb_matter` VALUES ('71', 'AFSFE6A3430FA469C79', '17', '6', 'Matter Firhand Ali', '2015-11-03', '2015-11-27', '1', null);
INSERT INTO `tb_matter` VALUES ('74', 'AFSAB9A14867B837358', '43', '1', 'Matter MNC Finance', '2015-08-03', '2016-08-25', '1', null);
INSERT INTO `tb_matter` VALUES ('75', 'AFSB96EF4389949BE9B', '55', '1', 'Matter Reliance group', '2015-11-29', '2016-01-01', '1', null);
INSERT INTO `tb_matter` VALUES ('76', 'AFSD2FAF4BCC8DF6014', '56', '1', 'Matter Sri Wahyusih SUbowo', '2015-12-02', '2016-01-01', '1', null);
INSERT INTO `tb_matter` VALUES ('77', 'AFS2D13B4B86BA57C07', '51', '1', 'Matter Queen Loyak Talang GUla', '2015-09-06', '2016-01-02', '1', null);
INSERT INTO `tb_matter` VALUES ('78', 'AFSACD0347408681778', '47', '1', 'Matter NIko', '2015-12-07', '2015-12-25', '1', null);
INSERT INTO `tb_matter` VALUES ('79', 'AFSAB81B4A09AE0254E', '46', '1', 'NDSC Matter', '2015-10-05', '2015-11-29', '1', null);
INSERT INTO `tb_matter` VALUES ('80', 'AFS8BC5A412C8B6D5F0', '65', '2', 'Matter Taman harapan indah', '2015-08-30', '2016-01-09', '1', null);
INSERT INTO `tb_matter` VALUES ('81', 'AFSB9B294A74838818B', '57', '1', 'Matter Robert Tantular', '2015-12-16', '2015-12-31', '1', null);
INSERT INTO `tb_matter` VALUES ('82', 'AFSA19964291B6C4D3A', '93', '6', 'asdasdasd', '2015-11-30', '2016-01-01', '1', null);
INSERT INTO `tb_matter` VALUES ('84', 'AFS8FD8D4940B1CC3C3', '94', '2', 'Investigasi Kriminal', '2015-09-01', '0000-00-00', '1', null);
INSERT INTO `tb_matter` VALUES ('87', 'AFSDE510424E935FE9D', '95', '2', 'MKI Tung-Feng', '2014-03-21', '0000-00-00', '1', null);

-- ----------------------------
-- Table structure for tb_matter_assign
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_assign`;
CREATE TABLE `tb_matter_assign` (
  `id_matter_assign` int(255) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matter_assign`)
) ENGINE=InnoDB AUTO_INCREMENT=138 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_assign
-- ----------------------------
INSERT INTO `tb_matter_assign` VALUES ('10', 'AFSd68d54c4da9559d6', '4');
INSERT INTO `tb_matter_assign` VALUES ('11', 'AFSd68d54c4da9559d6', '13');
INSERT INTO `tb_matter_assign` VALUES ('12', 'AFSd68d54c4da9559d6', '15');
INSERT INTO `tb_matter_assign` VALUES ('13', 'AFSd68d54c4da9559d6', '15');
INSERT INTO `tb_matter_assign` VALUES ('21', 'AFS736324E40B7213D5', '12');
INSERT INTO `tb_matter_assign` VALUES ('22', 'AFS736324E40B7213D5', '18');
INSERT INTO `tb_matter_assign` VALUES ('23', 'AFS736324E40B7213D5', '16');
INSERT INTO `tb_matter_assign` VALUES ('24', 'AFS736324E40B7213D5', '21');
INSERT INTO `tb_matter_assign` VALUES ('33', 'AFSAB9A14867B837358', '8');
INSERT INTO `tb_matter_assign` VALUES ('34', 'AFSAB9A14867B837358', '15');
INSERT INTO `tb_matter_assign` VALUES ('35', 'AFSAB9A14867B837358', '14');
INSERT INTO `tb_matter_assign` VALUES ('38', 'AFS00D1847DBAA78D93', '5');
INSERT INTO `tb_matter_assign` VALUES ('39', 'AFS00D1847DBAA78D93', '14');
INSERT INTO `tb_matter_assign` VALUES ('40', 'AFS00D1847DBAA78D93', '17');
INSERT INTO `tb_matter_assign` VALUES ('41', 'AFS00D1847DBAA78D93', '13');
INSERT INTO `tb_matter_assign` VALUES ('45', 'AFS8D9A348C3B629E4A', '9');
INSERT INTO `tb_matter_assign` VALUES ('46', 'AFS8D9A348C3B629E4A', '1');
INSERT INTO `tb_matter_assign` VALUES ('48', 'AFS8D9A348C3B629E4A', '5');
INSERT INTO `tb_matter_assign` VALUES ('49', 'AFSFBF5148DCB265314', '8');
INSERT INTO `tb_matter_assign` VALUES ('50', 'AFSFBF5148DCB265314', '5');
INSERT INTO `tb_matter_assign` VALUES ('51', 'AFSFBF5148DCB265314', '15');
INSERT INTO `tb_matter_assign` VALUES ('52', 'AFSFBF5148DCB265314', '18');
INSERT INTO `tb_matter_assign` VALUES ('53', 'AFSA768E4E0C9F2E431', '11');
INSERT INTO `tb_matter_assign` VALUES ('58', 'AFSFE6A3430FA469C79', '2');
INSERT INTO `tb_matter_assign` VALUES ('60', 'AFSFE6A3430FA469C79', '9');
INSERT INTO `tb_matter_assign` VALUES ('61', 'AFSFE6A3430FA469C79', '14');
INSERT INTO `tb_matter_assign` VALUES ('62', 'AFSFE6A3430FA469C79', '19');
INSERT INTO `tb_matter_assign` VALUES ('63', 'AFSFE6A3430FA469C79', '20');
INSERT INTO `tb_matter_assign` VALUES ('73', 'AFSACD0347408681778', '6');
INSERT INTO `tb_matter_assign` VALUES ('74', 'AFSACD0347408681778', '10');
INSERT INTO `tb_matter_assign` VALUES ('75', 'AFSACD0347408681778', '13');
INSERT INTO `tb_matter_assign` VALUES ('76', 'AFS2D13B4B86BA57C07', '10');
INSERT INTO `tb_matter_assign` VALUES ('77', 'AFS2D13B4B86BA57C07', '11');
INSERT INTO `tb_matter_assign` VALUES ('78', 'AFS2D13B4B86BA57C07', '21');
INSERT INTO `tb_matter_assign` VALUES ('80', 'AFSD2FAF4BCC8DF6014', '6');
INSERT INTO `tb_matter_assign` VALUES ('81', 'AFSD2FAF4BCC8DF6014', '11');
INSERT INTO `tb_matter_assign` VALUES ('82', 'AFSB96EF4389949BE9B', '3');
INSERT INTO `tb_matter_assign` VALUES ('83', 'AFSB96EF4389949BE9B', '9');
INSERT INTO `tb_matter_assign` VALUES ('84', 'AFSB96EF4389949BE9B', '12');
INSERT INTO `tb_matter_assign` VALUES ('90', 'AFS0E45D4D7D9CE6C1D', '8');
INSERT INTO `tb_matter_assign` VALUES ('91', 'AFS0E45D4D7D9CE6C1D', '16');
INSERT INTO `tb_matter_assign` VALUES ('92', 'AFS0E45D4D7D9CE6C1D', '17');
INSERT INTO `tb_matter_assign` VALUES ('96', 'AFSFD06A4ED99CEA986', '7');
INSERT INTO `tb_matter_assign` VALUES ('97', 'AFSFD06A4ED99CEA986', '14');
INSERT INTO `tb_matter_assign` VALUES ('99', 'AFSFD06A4ED99CEA986', '15');
INSERT INTO `tb_matter_assign` VALUES ('100', 'AFSFD06A4ED99CEA986', '3');
INSERT INTO `tb_matter_assign` VALUES ('102', 'AFS8BC5A412C8B6D5F0', '6');
INSERT INTO `tb_matter_assign` VALUES ('103', 'AFS8BC5A412C8B6D5F0', '11');
INSERT INTO `tb_matter_assign` VALUES ('104', 'AFS8BC5A412C8B6D5F0', '15');
INSERT INTO `tb_matter_assign` VALUES ('105', 'AFSAB81B4A09AE0254E', '3');
INSERT INTO `tb_matter_assign` VALUES ('106', 'AFSAB81B4A09AE0254E', '11');
INSERT INTO `tb_matter_assign` VALUES ('107', 'AFSAB81B4A09AE0254E', '13');
INSERT INTO `tb_matter_assign` VALUES ('109', 'AFSB9B294A74838818B', '2');
INSERT INTO `tb_matter_assign` VALUES ('110', 'AFSB9B294A74838818B', '5');
INSERT INTO `tb_matter_assign` VALUES ('114', 'AFSA768E4E0C9F2E431', '15');
INSERT INTO `tb_matter_assign` VALUES ('115', 'AFSB9B294A74838818B', '15');
INSERT INTO `tb_matter_assign` VALUES ('116', 'AFS8FD8D4940B1CC3C3', '1');
INSERT INTO `tb_matter_assign` VALUES ('117', 'AFS8FD8D4940B1CC3C3', '16');
INSERT INTO `tb_matter_assign` VALUES ('118', 'AFS8FD8D4940B1CC3C3', '10');
INSERT INTO `tb_matter_assign` VALUES ('119', 'AFS8FD8D4940B1CC3C3', '14');
INSERT INTO `tb_matter_assign` VALUES ('120', 'AFS8FD8D4940B1CC3C3', '11');
INSERT INTO `tb_matter_assign` VALUES ('121', 'AFS25E4946D9AA99C90', '15');
INSERT INTO `tb_matter_assign` VALUES ('122', 'AFS25E4946D9AA99C90', '8');
INSERT INTO `tb_matter_assign` VALUES ('123', 'AFS25E4946D9AA99C90', '5');
INSERT INTO `tb_matter_assign` VALUES ('124', 'AFS25E4946D9AA99C90', '2');
INSERT INTO `tb_matter_assign` VALUES ('125', 'AFS413BF46A4AA07C20', '5');
INSERT INTO `tb_matter_assign` VALUES ('126', 'AFS413BF46A4AA07C20', '1');
INSERT INTO `tb_matter_assign` VALUES ('127', 'AFS413BF46A4AA07C20', '7');
INSERT INTO `tb_matter_assign` VALUES ('128', 'AFS413BF46A4AA07C20', '8');
INSERT INTO `tb_matter_assign` VALUES ('129', 'AFS413BF46A4AA07C20', '3');
INSERT INTO `tb_matter_assign` VALUES ('131', 'AFSDE510424E935FE9D', '2');
INSERT INTO `tb_matter_assign` VALUES ('132', 'AFSDE510424E935FE9D', '15');
INSERT INTO `tb_matter_assign` VALUES ('133', 'AFSB9B294A74838818B', '1');
INSERT INTO `tb_matter_assign` VALUES ('134', 'AFS88A5147BC9E4DB8C', '1');
INSERT INTO `tb_matter_assign` VALUES ('135', 'AFS88A5147BC9E4DB8C', '1');
INSERT INTO `tb_matter_assign` VALUES ('136', 'AFS88A5147BC9E4DB8C', '4');
INSERT INTO `tb_matter_assign` VALUES ('137', 'AFS88A5147BC9E4DB8C', '8');

-- ----------------------------
-- Table structure for tb_matter_hourly
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_hourly`;
CREATE TABLE `tb_matter_hourly` (
  `id_hourly` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `managing_partner` float(255,0) DEFAULT NULL,
  `partner` float(255,0) DEFAULT NULL,
  `junior_partner` float(255,0) DEFAULT NULL,
  `senior_associate` float(255,0) DEFAULT NULL,
  `mid_associate` float(255,0) DEFAULT NULL,
  `junior_associate` float(255,0) DEFAULT NULL,
  `disc` int(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_hourly`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_hourly
-- ----------------------------
INSERT INTO `tb_matter_hourly` VALUES ('11', 'AFSA768E4E0C9F2E431', '120000000', '30000000', '30000000', '50000000', '90000000', '10000000', '25', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_hourly` VALUES ('12', 'AFS8D9A348C3B629E4A', '50000000', '10000000', '20000000', '500000', '15000000', '10000000', '25', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_hourly` VALUES ('13', 'AFS8BC5A412C8B6D5F0', '50000000', '10000000', '20000000', '30000000', '60000000', '10000000', '25', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_hourly` VALUES ('14', 'AFS8FD8D4940B1CC3C3', '600', '350', '300', '200', '150', '120', '0', 'Investigasi kriminal PT. Total Oil Indonesia');
INSERT INTO `tb_matter_hourly` VALUES ('15', 'AFSDE510424E935FE9D', '600', '350', '300', '200', '150', '120', '0', 'Matter Hans Darmono');

-- ----------------------------
-- Table structure for tb_matter_lumpsum
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_lumpsum`;
CREATE TABLE `tb_matter_lumpsum` (
  `id_lumpsum` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `success_fee` float(255,0) DEFAULT NULL,
  `term1` float(255,0) DEFAULT NULL,
  `term2` float(255,0) DEFAULT NULL,
  `term3` float(255,0) DEFAULT NULL,
  `desc_term1` varchar(255) DEFAULT NULL,
  `desc_term2` varchar(255) DEFAULT NULL,
  `desc_term3` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_lumpsum`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_lumpsum
-- ----------------------------
INSERT INTO `tb_matter_lumpsum` VALUES ('21', 'AFSAB9A14867B837358', '10000', '125000000', '180000000', '300000000', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_lumpsum` VALUES ('22', 'AFSB96EF4389949BE9B', '6000', '10000000', '10000000', '30000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_lumpsum` VALUES ('23', 'AFSD2FAF4BCC8DF6014', '250000', '20000000', '30000000', '100000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_lumpsum` VALUES ('24', 'AFS2D13B4B86BA57C07', '100000', '20000000', '50000000', '50000000', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_lumpsum` VALUES ('25', 'AFSACD0347408681778', '5000', '50000000', '15000000', '60000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_lumpsum` VALUES ('26', 'AFSAB81B4A09AE0254E', '3500', '250000000', '50000000', '100000000', 'Lorem ipsum dolor sit amet', 'lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_lumpsum` VALUES ('27', 'AFSB9B294A74838818B', '9000', '5000', '2000', '2000', 'asd', 'aaaaaaaaa', 'aaaaaaaaaaaaaa', 'Keterangan matter robert tantular');

-- ----------------------------
-- Table structure for tb_matter_ope
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_ope`;
CREATE TABLE `tb_matter_ope` (
  `id_matter_ope` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) DEFAULT NULL,
  `id_ope` int(11) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_matter_ope`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_ope
-- ----------------------------

-- ----------------------------
-- Table structure for tb_matter_probono
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_probono`;
CREATE TABLE `tb_matter_probono` (
  `id_probono` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_probono`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_probono
-- ----------------------------
INSERT INTO `tb_matter_probono` VALUES ('1', 'AFS2015201591777', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_probono` VALUES ('2', 'AFS2015201131777', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_probono` VALUES ('5', 'AFSfbe814602a092e86', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_probono` VALUES ('6', 'AFS4922b4c5ba927ffc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_probono` VALUES ('7', 'AFS45acb4ef7b5b4d7f', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_probono` VALUES ('8', 'AFSE74B34BB9A64D376', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_probono` VALUES ('9', 'AFSFBF5148DCB265314', 'abc');

-- ----------------------------
-- Table structure for tb_matter_project
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_project`;
CREATE TABLE `tb_matter_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `success_fee` float(255,0) DEFAULT NULL,
  `term1` float(255,0) DEFAULT NULL,
  `term2` float(255,0) DEFAULT NULL,
  `term3` float(255,0) DEFAULT NULL,
  `desc_term1` text,
  `desc_term2` text,
  `desc_term3` text,
  `description` text,
  PRIMARY KEY (`id_project`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_project
-- ----------------------------
INSERT INTO `tb_matter_project` VALUES ('1', 'AFS2015201591444', '50000000', '10000000', '20000000', '50000000', 'Desc', 'Desc', 'Desc', 'Desc');
INSERT INTO `tb_matter_project` VALUES ('2', 'AFS2015213465522', '150000000', '10000000', '30000000', '45000000', 'Desc', 'Desc', 'Desc', 'Desc');
INSERT INTO `tb_matter_project` VALUES ('3', 'AFSf942e479c9da234a', '450000000', '100000000', '150000000', '250000000', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_project` VALUES ('4', 'AFS27a9e4852adf3e22', '14000000', '1000000', '10000000', '30000000', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_project` VALUES ('5', 'AFSb9e1c4a129735b96', '120000000', '1000000', '2000000', '3000000', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_project` VALUES ('6', 'AFS93D5C418EA446A26', '220000000', '3500000', '100000000', '150000000', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_project` VALUES ('7', 'AFSFE6A3430FA469C79', '120000000', '105000000', '1500000', '15000000', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet');
INSERT INTO `tb_matter_project` VALUES ('8', 'AFSA19964291B6C4D3A', '1231', '23', '23', '23', 'asdadasdads', 'asdasdasd', 'asdasd', 'asdasdsadasd');
INSERT INTO `tb_matter_project` VALUES ('9', 'AFS885C849D48C12BBD', '120000000', '10000000', '20000000', '30000000', 'ooo', 'ooo', 'ooo', 'ooo');

-- ----------------------------
-- Table structure for tb_matter_retainer
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_retainer`;
CREATE TABLE `tb_matter_retainer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_retainer` int(11) NOT NULL,
  `id_matter` varchar(255) NOT NULL,
  `matter` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`,`id_retainer`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_retainer
-- ----------------------------
INSERT INTO `tb_matter_retainer` VALUES ('34', '21', 'AFS88A5147BC9E4DB8C', 'AJRI dan ARI', 'ajri dan ari');
INSERT INTO `tb_matter_retainer` VALUES ('35', '21', 'AFSFFFBE4AFEA342B8F', 'Larasati', 'larasati');
INSERT INTO `tb_matter_retainer` VALUES ('36', '21', 'AFS205CA41F485EBC87', 'Tanah daan mogot', 'Tanah daan mogot');
INSERT INTO `tb_matter_retainer` VALUES ('37', '21', 'AFS0D65849329C1D642', 'Tanah kedoya dan daan mogot', 'Tanah kodeoya dan daan mogot');
INSERT INTO `tb_matter_retainer` VALUES ('38', '21', 'AFS78BD141F5AC5F493', 'Panorama Bali', 'Panorama Bali');
INSERT INTO `tb_matter_retainer` VALUES ('39', '21', 'AFS7370E47189BC3F42', 'LP Bank Mega', 'LP Bank Mega');
INSERT INTO `tb_matter_retainer` VALUES ('40', '21', 'AFSC7692450BAFA50E3', 'BKE', 'BKE');

-- ----------------------------
-- Table structure for tb_matter_retainer2
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_retainer2`;
CREATE TABLE `tb_matter_retainer2` (
  `id_retainer` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `jangka_waktu` int(255) DEFAULT NULL,
  `biaya` float(255,0) DEFAULT NULL,
  `menit` int(255) DEFAULT NULL,
  `disc` int(255) DEFAULT NULL,
  `description` text,
  `open_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  PRIMARY KEY (`id_retainer`,`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_retainer2
-- ----------------------------
INSERT INTO `tb_matter_retainer2` VALUES ('21', '55', '30', '1000', '600', '0', 'reliance', '2016-04-01', '2016-06-30');
INSERT INTO `tb_matter_retainer2` VALUES ('22', '95', '30', '1200', '600', '0', 'hans Darmono', '2016-02-01', '2016-05-24');
INSERT INTO `tb_matter_retainer2` VALUES ('23', '94', '15', '1000', '600', '0', 'Total oil Indonesia', '2016-02-01', '2016-04-28');
INSERT INTO `tb_matter_retainer2` VALUES ('24', '67', '30', '1200', '600', '0', 'Telesindo', '2016-02-01', '2016-04-30');

-- ----------------------------
-- Table structure for tb_matter_retainer_assign
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_retainer_assign`;
CREATE TABLE `tb_matter_retainer_assign` (
  `id_matter_assign` int(255) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_retainer` int(11) NOT NULL,
  PRIMARY KEY (`id_matter_assign`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_retainer_assign
-- ----------------------------
INSERT INTO `tb_matter_retainer_assign` VALUES ('134', 'AFS88A5147BC9E4DB8C', '1', '21');
INSERT INTO `tb_matter_retainer_assign` VALUES ('135', 'AFS88A5147BC9E4DB8C', '2', '21');
INSERT INTO `tb_matter_retainer_assign` VALUES ('147', 'AFS88A5147BC9E4DB8C', '4', '21');
INSERT INTO `tb_matter_retainer_assign` VALUES ('148', 'AFS88A5147BC9E4DB8C', '6', '21');
INSERT INTO `tb_matter_retainer_assign` VALUES ('149', 'AFSFFFBE4AFEA342B8F', '2', '21');
INSERT INTO `tb_matter_retainer_assign` VALUES ('150', 'AFSFFFBE4AFEA342B8F', '3', '21');

-- ----------------------------
-- Table structure for tb_matter_successfee
-- ----------------------------
DROP TABLE IF EXISTS `tb_matter_successfee`;
CREATE TABLE `tb_matter_successfee` (
  `id_successfee` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `biaya` float(255,0) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_successfee`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_matter_successfee
-- ----------------------------
INSERT INTO `tb_matter_successfee` VALUES ('1', 'AFS2015201591333', '5000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('2', 'AFS2015201530333', '150000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('3', 'AFS2015225885522', '50000000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('4', 'AFS3dd2346679882199', '12', '12');
INSERT INTO `tb_matter_successfee` VALUES ('5', 'AFS331064e5bb248901', '1200', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('6', 'AFS0d6d048c58aad681', '5000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('7', 'AFS029cf4ed0afa1442', '4500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('8', 'AFSE044745249EB8D86', '120000', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');
INSERT INTO `tb_matter_successfee` VALUES ('9', 'AFS0E45D4D7D9CE6C1D', '1500', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo');

-- ----------------------------
-- Table structure for tb_ope
-- ----------------------------
DROP TABLE IF EXISTS `tb_ope`;
CREATE TABLE `tb_ope` (
  `id_ope` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ope` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_ope`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_ope
-- ----------------------------

-- ----------------------------
-- Table structure for tb_payment
-- ----------------------------
DROP TABLE IF EXISTS `tb_payment`;
CREATE TABLE `tb_payment` (
  `id_payment` int(11) NOT NULL,
  `payment_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_payment
-- ----------------------------
INSERT INTO `tb_payment` VALUES ('1', 'LUMPSUM');
INSERT INTO `tb_payment` VALUES ('2', 'HOURLY');
INSERT INTO `tb_payment` VALUES ('3', 'RETAINER');
INSERT INTO `tb_payment` VALUES ('4', 'SUCCESS FEE');
INSERT INTO `tb_payment` VALUES ('5', 'PROBONO');
INSERT INTO `tb_payment` VALUES ('6', 'PROJECT');

-- ----------------------------
-- Table structure for tb_probono
-- ----------------------------
DROP TABLE IF EXISTS `tb_probono`;
CREATE TABLE `tb_probono` (
  `id_probono` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_probono`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_probono
-- ----------------------------
INSERT INTO `tb_probono` VALUES ('1', 'AFS2015201591777', 'Description Probono');

-- ----------------------------
-- Table structure for tb_project
-- ----------------------------
DROP TABLE IF EXISTS `tb_project`;
CREATE TABLE `tb_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `success_fee` float(255,0) DEFAULT NULL,
  `term1` float(255,0) DEFAULT NULL,
  `term2` float(255,0) DEFAULT NULL,
  `term3` float(255,0) DEFAULT NULL,
  `desc_term1` text,
  `desc_term2` text,
  `desc_term3` text,
  `description` text,
  PRIMARY KEY (`id_project`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_project
-- ----------------------------
INSERT INTO `tb_project` VALUES ('1', 'AFS2015201591444', '50000000', '10000000', '20000000', '50000000', 'Desc', 'Desc', 'Desc', 'Desc');

-- ----------------------------
-- Table structure for tb_reimburstment
-- ----------------------------
DROP TABLE IF EXISTS `tb_reimburstment`;
CREATE TABLE `tb_reimburstment` (
  `id_reimburstment` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type_reimburstment` int(11) DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_reimburstment`)
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_reimburstment
-- ----------------------------
INSERT INTO `tb_reimburstment` VALUES ('40', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-09-16', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('41', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-09-22', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('42', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-10-08', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('43', 'AFS8FD8D4940B1CC3C3', '1', '8', '77', '2015-10-08', 'telepon 90 Menit');
INSERT INTO `tb_reimburstment` VALUES ('44', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-10-12', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('45', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-10-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('46', 'AFS8FD8D4940B1CC3C3', '1', '8', '25', '2015-10-13', 'telepon 30 Menit');
INSERT INTO `tb_reimburstment` VALUES ('47', 'AFS8FD8D4940B1CC3C3', '1', '8', '51', '2015-10-15', 'telepon 60 Menit');
INSERT INTO `tb_reimburstment` VALUES ('48', 'AFS8FD8D4940B1CC3C3', '1', '8', '38', '2015-10-20', 'Telepon 45 Menit');
INSERT INTO `tb_reimburstment` VALUES ('49', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-10-23', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('50', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-10-27', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('51', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-10-29', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('52', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-06', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('53', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-06', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('54', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-06', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('55', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('56', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-10', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('57', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-10', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('58', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-11', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('59', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-11', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('60', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-11', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('61', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-11', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('62', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-11', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('63', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('64', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-13', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('65', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-16', 'jakarta barat');
INSERT INTO `tb_reimburstment` VALUES ('66', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-16', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('67', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-17', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('68', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-17', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('69', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-17', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('70', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-18', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('71', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-19', 'tanggerang selatan');
INSERT INTO `tb_reimburstment` VALUES ('72', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-19', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('73', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-23', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('74', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-23', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('75', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-23', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('76', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-24', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('77', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-24', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('78', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-25', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('79', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-25', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('80', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-26', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('81', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-27', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('82', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-27', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('83', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-27', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('84', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-27', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('85', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-27', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('86', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-11-30', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('87', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-12-01', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('88', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-12-01', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('89', 'AFS8FD8D4940B1CC3C3', '1', '1', '30', '2015-12-01', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('90', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-09-16', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('91', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('92', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Pusat');
INSERT INTO `tb_reimburstment` VALUES ('93', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('94', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('95', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('96', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('97', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('98', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('99', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('100', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('101', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('102', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('103', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('104', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('105', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('106', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('107', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('108', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('109', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('110', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('111', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('112', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('113', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('114', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'jakarta barat');
INSERT INTO `tb_reimburstment` VALUES ('115', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('116', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('117', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('118', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('119', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('120', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('121', 'AFS8FD8D4940B1CC3C3', '16', '1', '65', '2015-10-09', 'tanggerang selatan');
INSERT INTO `tb_reimburstment` VALUES ('122', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('123', 'AFS8FD8D4940B1CC3C3', '16', '3', '3', '2015-10-09', '35 lembar');
INSERT INTO `tb_reimburstment` VALUES ('124', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('125', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('126', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('127', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('128', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('129', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('130', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('131', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('132', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('133', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('134', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('135', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('136', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('137', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('138', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('139', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('140', 'AFS8FD8D4940B1CC3C3', '16', '1', '30', '2015-10-09', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('141', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('142', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('143', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('144', 'AFS8FD8D4940B1CC3C3', '10', '1', '25', '2015-11-13', 'Jakarta Pusat');
INSERT INTO `tb_reimburstment` VALUES ('145', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('146', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('147', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('148', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('149', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('150', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('151', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('152', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('153', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('154', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('155', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('156', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('157', 'AFS8FD8D4940B1CC3C3', '10', '2', '12.8', '2015-11-13', 'Tendean');
INSERT INTO `tb_reimburstment` VALUES ('158', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'BPH Migas');
INSERT INTO `tb_reimburstment` VALUES ('159', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('160', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('161', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('162', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Utara');
INSERT INTO `tb_reimburstment` VALUES ('163', 'AFS8FD8D4940B1CC3C3', '10', '1', '30', '2015-11-13', 'Jakarta Selatan');
INSERT INTO `tb_reimburstment` VALUES ('165', 'AFS8FD8D4940B1CC3C3', '1', '8', '30', '2016-04-04', 'Lain Lain');
INSERT INTO `tb_reimburstment` VALUES ('166', 'AFS413BF46A4AA07C20', '7', '1', '15', '2016-04-06', 'transportasi');

-- ----------------------------
-- Table structure for tb_reimburstment_type
-- ----------------------------
DROP TABLE IF EXISTS `tb_reimburstment_type`;
CREATE TABLE `tb_reimburstment_type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_reimburstment_type
-- ----------------------------
INSERT INTO `tb_reimburstment_type` VALUES ('1', 'TRANSPORTASI');
INSERT INTO `tb_reimburstment_type` VALUES ('2', 'KURIR');
INSERT INTO `tb_reimburstment_type` VALUES ('3', 'FOTO COPY DAN BINDING');
INSERT INTO `tb_reimburstment_type` VALUES ('4', 'LEGES DAN LEGALISIR');
INSERT INTO `tb_reimburstment_type` VALUES ('5', 'PERJALANAN DINAS');
INSERT INTO `tb_reimburstment_type` VALUES ('6', 'BIAYA ADMIN');
INSERT INTO `tb_reimburstment_type` VALUES ('7', 'BIAYA PIHAK KETIGA');
INSERT INTO `tb_reimburstment_type` VALUES ('8', 'LAIN LAIN');

-- ----------------------------
-- Table structure for tb_subhourly
-- ----------------------------
DROP TABLE IF EXISTS `tb_subhourly`;
CREATE TABLE `tb_subhourly` (
  `id_subhourly` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) NOT NULL,
  `managing_partner` float(255,0) DEFAULT NULL,
  `partner` float(255,0) DEFAULT NULL,
  `junior_partner` float(255,0) DEFAULT NULL,
  `senior_associate` float(255,0) DEFAULT NULL,
  `mid_associate` float(255,0) DEFAULT NULL,
  `junior_associate` float(255,0) DEFAULT NULL,
  `disc` int(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_subhourly`,`id_submatter`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subhourly
-- ----------------------------
INSERT INTO `tb_subhourly` VALUES ('5', 'S-AFSA70BC4A3AABA0B', '123123', '123123', '12312', '3123123', '123', '123123120', '12', '123123');
INSERT INTO `tb_subhourly` VALUES ('6', 'S-AFSE65424C59D8ED9', '22', '22', '22', '22', '22', '22', '22', '22');
INSERT INTO `tb_subhourly` VALUES ('7', 'S-AFS3D3AB40B93E829', '123123', '123123', '123', '123123', '3123', '12312', '12312', '3123123');
INSERT INTO `tb_subhourly` VALUES ('8', 'S-AFS1323A4E2BE5326', '123123', '12312', '3123', '312312', '123123', '123123', '1231231', '23123123');

-- ----------------------------
-- Table structure for tb_sublumpsum
-- ----------------------------
DROP TABLE IF EXISTS `tb_sublumpsum`;
CREATE TABLE `tb_sublumpsum` (
  `id_sublumpsum` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) NOT NULL,
  `success_fee` float(255,0) DEFAULT NULL,
  `term1` float(255,0) DEFAULT NULL,
  `term2` float(255,0) DEFAULT NULL,
  `term3` float(255,0) DEFAULT NULL,
  `desc_term1` varchar(255) DEFAULT NULL,
  `desc_term2` varchar(255) DEFAULT NULL,
  `desc_term3` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_sublumpsum`,`id_submatter`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_sublumpsum
-- ----------------------------
INSERT INTO `tb_sublumpsum` VALUES ('1', 'S-AFS7EAA545F9BF17B', '14000000', '50000000', '100000000', '100000000', 'desc term1', 'desc term 2', 'desc term 3', 'keterangan');
INSERT INTO `tb_sublumpsum` VALUES ('2', 'S-AFSC81A04F68BFE87', '13000000', '1121', '1212', '121', 'asd', 'asd', 'asd', 'asd');
INSERT INTO `tb_sublumpsum` VALUES ('3', 'S-AFS616334E689B4A3', '150000000', '50000000', '50000000', '50000000', '333', '333', '333', '333');
INSERT INTO `tb_sublumpsum` VALUES ('4', 'S-AFSD2D3E4E78F003B', '10000000', '250000', '30000000', '45000000', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_sublumpsum` VALUES ('5', 'S-AFSC0C8A47797C49B', '120000000', '55', '66', '55', 'op', 'op', 'op', 'op');
INSERT INTO `tb_sublumpsum` VALUES ('6', 'S-AFS031184059037AF', '123', '123', '123', '123', 'asd', 'asd', 'asd', 'asd');
INSERT INTO `tb_sublumpsum` VALUES ('7', 'S-AFS1BC444C2828CE2', '50000000', '10000000', '20000000', '20000000', 'ooo', 'ooo', 'ooo', 'ooo');
INSERT INTO `tb_sublumpsum` VALUES ('8', 'S-AFS27BC646584AA4F', '60000000', '20000000', '30000000', '10000000', 'ppp', 'ppp', 'ppp', 'ppp');
INSERT INTO `tb_sublumpsum` VALUES ('9', 'S-AFSE490147281945C', '150000000', '50000000', '50000000', '50000000', 'kkk', 'kkk', 'kkk', 'kkk');
INSERT INTO `tb_sublumpsum` VALUES ('10', 'S-AFS8854B4B4A6A1EB', '50000000', '10000000', '20000000', '20000000', 'ggg', 'ggg', 'ggg', 'ggg');
INSERT INTO `tb_sublumpsum` VALUES ('11', 'S-AFS20FF34AE82A357', '80000000', '20000000', '40000000', '20000000', 'ooo', 'ooo', 'ooo', 'ooo');
INSERT INTO `tb_sublumpsum` VALUES ('12', 'S-AFS8FD7044E8D22DD', '350000000', '150000000', '100000000', '100000000', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet');
INSERT INTO `tb_sublumpsum` VALUES ('13', 'S-AFS1C17744F8EEC43', '50000000', '10000000', '10000000', '30000000', 'ooo', 'ooo', 'ooo', 'aaa');
INSERT INTO `tb_sublumpsum` VALUES ('14', 'S-AFSF61654AEA8B982', '50000000', '10000000', '10000000', '30000000', 'ppp', 'ppp', 'ppp', 'ppp');
INSERT INTO `tb_sublumpsum` VALUES ('15', 'S-AFS9D9734FCA467CB', '150000000', '10000000', '25000000', '25000000', 'ooo', 'ooo', 'ooo', 'ooo');
INSERT INTO `tb_sublumpsum` VALUES ('16', 'S-AFS2A5E6439B4C89E', '123', '123', '123', '123', 'asdasd', 'asd', 'asdasdasda', 'dadadad');
INSERT INTO `tb_sublumpsum` VALUES ('17', 'S-AFS3561C4E0801602', '30000000', '10000000', '20000000', '0', 'ASDASD', 'ADAS', 'DADAD', 'ASDASD');
INSERT INTO `tb_sublumpsum` VALUES ('18', 'S-AFS536EF486A8A5DA', '123', '11', '11', '11', '11', '11', '11', '111');
INSERT INTO `tb_sublumpsum` VALUES ('19', 'S-AFS8F2474F3A0D27F', '120000', '100000', '200000', '30000', 'ooo', 'ooo', 'oo', 'ooo');
INSERT INTO `tb_sublumpsum` VALUES ('20', 'S-AFS1BE21418849543', '120000000', '20000000', '50000000', '50000000', 'aaa', 'aaa', 'aaa', 'aaa');
INSERT INTO `tb_sublumpsum` VALUES ('21', 'S-AFS3E36E44BA7C4A6', '12', '12', '12', '1212', '12', '12', '12', '12');
INSERT INTO `tb_sublumpsum` VALUES ('22', 'S-AFSC7EDA47A87A330', '123', '232', '32323', '2323', 'asdasd', 'asd', 'asd', 'asdasd');

-- ----------------------------
-- Table structure for tb_submatter
-- ----------------------------
DROP TABLE IF EXISTS `tb_submatter`;
CREATE TABLE `tb_submatter` (
  `id_submatter` varchar(255) NOT NULL,
  `id_matter` varchar(255) DEFAULT NULL,
  `id_payment` int(255) DEFAULT NULL,
  `matter` varchar(255) DEFAULT NULL,
  `open_date` datetime DEFAULT NULL,
  `close_date` datetime DEFAULT NULL,
  `active` int(255) DEFAULT '1',
  PRIMARY KEY (`id_submatter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_submatter
-- ----------------------------
INSERT INTO `tb_submatter` VALUES ('S-AFS1FA9F44D985F43', 'AFS413BF46A4AA07C20', '3', 'AJRI dan ARI', '2015-06-01 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `tb_submatter` VALUES ('S-AFS3CA9845D8CDC6D', 'AFS413BF46A4AA07C20', '3', 'LP Bank Mega', '2015-09-08 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `tb_submatter` VALUES ('S-AFS6CA544B79585D1', 'AFS413BF46A4AA07C20', '3', 'Panorama Bali', '2015-09-01 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `tb_submatter` VALUES ('S-AFS9230F482A404D3', 'AFS413BF46A4AA07C20', '3', 'BKE', '2015-10-05 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `tb_submatter` VALUES ('S-AFSA997249CADFE26', 'AFS413BF46A4AA07C20', '3', 'Larasati', '2015-06-01 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `tb_submatter` VALUES ('S-AFSAC6F749F8EA6CA', 'AFS413BF46A4AA07C20', '3', 'Tanah daan mogot', '2015-06-01 00:00:00', '0000-00-00 00:00:00', '1');
INSERT INTO `tb_submatter` VALUES ('S-AFSFB5534EDBB489B', 'AFS6C7AD462D85EFB8B', '3', 'asdasd', '2016-04-04 00:00:00', '2016-04-26 00:00:00', '1');

-- ----------------------------
-- Table structure for tb_submatter_assign
-- ----------------------------
DROP TABLE IF EXISTS `tb_submatter_assign`;
CREATE TABLE `tb_submatter_assign` (
  `id_submatter_assign` int(255) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_submatter_assign`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_submatter_assign
-- ----------------------------

-- ----------------------------
-- Table structure for tb_submatter_ope
-- ----------------------------
DROP TABLE IF EXISTS `tb_submatter_ope`;
CREATE TABLE `tb_submatter_ope` (
  `id_submatter_ope` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) DEFAULT NULL,
  `id_ope` int(11) DEFAULT NULL,
  `jumlah` float(255,0) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_submatter_ope`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_submatter_ope
-- ----------------------------

-- ----------------------------
-- Table structure for tb_subprobono
-- ----------------------------
DROP TABLE IF EXISTS `tb_subprobono`;
CREATE TABLE `tb_subprobono` (
  `id_subprobono` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id_subprobono`,`id_submatter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subprobono
-- ----------------------------

-- ----------------------------
-- Table structure for tb_subproject
-- ----------------------------
DROP TABLE IF EXISTS `tb_subproject`;
CREATE TABLE `tb_subproject` (
  `id_subproject` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) NOT NULL,
  `success_fee` float(255,0) DEFAULT NULL,
  `term1` float(255,0) DEFAULT NULL,
  `term2` float(255,0) DEFAULT NULL,
  `term3` float(255,0) DEFAULT NULL,
  `desc_term1` text,
  `desc_term2` text,
  `desc_term3` text,
  `description` text,
  PRIMARY KEY (`id_subproject`,`id_submatter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subproject
-- ----------------------------

-- ----------------------------
-- Table structure for tb_subretainer
-- ----------------------------
DROP TABLE IF EXISTS `tb_subretainer`;
CREATE TABLE `tb_subretainer` (
  `id_subretainer` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) NOT NULL,
  `jangka_waktu` int(255) DEFAULT NULL,
  `biaya` float(255,0) DEFAULT NULL,
  `jam` int(255) DEFAULT NULL,
  `disc` int(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_subretainer`,`id_submatter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subretainer
-- ----------------------------

-- ----------------------------
-- Table structure for tb_subsuccessfee
-- ----------------------------
DROP TABLE IF EXISTS `tb_subsuccessfee`;
CREATE TABLE `tb_subsuccessfee` (
  `id_subsuccessfee` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) NOT NULL,
  `biaya` float(255,0) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_subsuccessfee`,`id_submatter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subsuccessfee
-- ----------------------------

-- ----------------------------
-- Table structure for tb_subtimesheet
-- ----------------------------
DROP TABLE IF EXISTS `tb_subtimesheet`;
CREATE TABLE `tb_subtimesheet` (
  `id_subtimesheet` int(11) NOT NULL AUTO_INCREMENT,
  `id_submatter` varchar(255) DEFAULT NULL,
  `id_user` int(255) DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  `hour` float(255,0) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_subtimesheet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_subtimesheet
-- ----------------------------

-- ----------------------------
-- Table structure for tb_successfee
-- ----------------------------
DROP TABLE IF EXISTS `tb_successfee`;
CREATE TABLE `tb_successfee` (
  `id_successfee` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) NOT NULL,
  `biaya` float(255,0) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_successfee`,`id_matter`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_successfee
-- ----------------------------
INSERT INTO `tb_successfee` VALUES ('1', 'AFS2015201591333', '50000000', 'Description');

-- ----------------------------
-- Table structure for tb_timesheet
-- ----------------------------
DROP TABLE IF EXISTS `tb_timesheet`;
CREATE TABLE `tb_timesheet` (
  `id_timesheet` int(11) NOT NULL AUTO_INCREMENT,
  `id_matter` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `hour` float DEFAULT NULL,
  `description` text,
  `id_work_type` int(11) DEFAULT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  PRIMARY KEY (`id_timesheet`)
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_timesheet
-- ----------------------------
INSERT INTO `tb_timesheet` VALUES ('31', 'AFS8FD8D4940B1CC3C3', '1', '2015-09-15', null, 'Pembicaraan mengenai kasus yang dialami oleh PT Total Oil Indonesia (“TOI”) di Indonesia', '3', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('32', 'AFS8FD8D4940B1CC3C3', '1', '2015-09-16', null, 'Pertemuan dengan Susandarini and Partners (“S&P”) untuk membahas perkembangan kasus di kantor S&P ', '3', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('33', 'AFS8FD8D4940B1CC3C3', '1', '2015-09-22', null, 'Pertemuan dengan Bonie Guido dari S&P untuk membahas penanganan kasus TOI di kepolisian perairan', '3', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('34', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-05', null, 'Mempelajari berkas pertama yang dikirimkan; dan (ii) diskusi internal mengenai Laporan Penanganan Perkara dari Juniver Girsang & Rekan', '7', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('35', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-05', null, 'Internal meeting membahas perkara, memo dan peraturan terkait,  sebagai hasil riset dan analisa dari UU Migas dan Permen ESDM No.16/2011', '3', '13:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('36', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-05', null, 'Internal meeting, membahas ulang berkas dan membuat list hal-hal yang perlu diklarifikasi sebelum Video Confrence pada tanggal 6 Oktober 2015, pembahasan dengan Bonie Guido dari S&P terkait dengan penanganan kasus', '3', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('37', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-06', null, 'Diskusi dengan Bonie dari S&P terkait dengan  argumentasi yang dapat di pergunakan untuk melakukan pembelaan terhadap TOI', '3', '15:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('38', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-07', null, 'Mempelajari berkas perkara yang baru diterima', '7', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('39', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-08', null, 'Perjalanan menuju dan kembali dari lokasi meeting di Equity Tower, untuk meeting  Video Confrence dengan pihak TOI di Singapura', '13', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('40', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-08', null, 'Video Conference dengan pihak TOI di Singapura ', '3', '16:00:00', '18:00:00');
INSERT INTO `tb_timesheet` VALUES ('41', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-09', null, 'Korespodensi email terkait rencana pemeriksaan Bpk Yonaz sebagai saksi', '3', '12:00:00', '12:20:00');
INSERT INTO `tb_timesheet` VALUES ('42', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-09', null, 'Pembicaran melalui telepon dan pertemuan dengan Bpk Bonie, Susandarini&Partners, perihal rencana pemeriksaan  Bpk Yonaz sebagai saksi', '3', '13:00:00', '14:30:00');
INSERT INTO `tb_timesheet` VALUES ('43', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-12', null, 'Perjalanan menuju dan kembali dari lokasi meeting', '13', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('44', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-12', null, 'Meeting persiapan pertama untuk pemeriksaan Bpk Yonaz sebagai saksi', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('45', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-13', null, 'Perjalanan menuju dan kembali dari lokasi meeting di Equity Tower', '13', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('46', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-13', null, 'Meeting persiapan kedua (confrence call) untuk pemeriksaan Bpk Yonaz sebagai saksi', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('47', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-13', null, 'Internal meeting persiapan dokumen dan argumen  untuk menjelang pemeriksaan Bpk Yonas sebagai saksi', '3', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('48', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-13', null, 'Pembicaraan melalui telepon dengan Bonie Guido dari S&P terkait dengan pemeriksaan bapak Yonaz sebagai saksi', '3', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('49', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-15', null, 'Perjalanan menuju kantor TOI untuk  pemeriksaan Bpk Yonaz sebagai saksi', '13', '12:00:00', '12:45:00');
INSERT INTO `tb_timesheet` VALUES ('50', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-15', null, 'Pemeriksaan Bpk Yonaz sebagai saksi', '3', '08:00:00', '20:00:00');
INSERT INTO `tb_timesheet` VALUES ('51', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-15', null, 'Perjalanan pulang dari kantor TOI ', '13', '13:00:00', '13:45:00');
INSERT INTO `tb_timesheet` VALUES ('52', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-15', null, 'Pembicaraan telepon dengan Bapak Bonie dari S&P terkait dengan hasil pemeriksaan saksi bapak Yonaz', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('53', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-16', null, 'Perjalanan menuju meeting di Equity Tower', '13', '13:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('54', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-16', null, 'Internal meeting dengan Bpk Bonie, Susandarini & Partners', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('55', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-16', null, 'Perjalanan pulang dari meeting di Equity Tower', '13', '13:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('56', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-16', null, 'Internal meeting membahas tahapan berikutnya', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('57', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-16', null, 'Internal email dan internal meeting membahas  progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('58', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-19', null, 'Finalize  progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '3', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('59', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-20', null, 'Diskusi dengan pihak kejaksaan di Kejaksaan Agung', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('60', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-20', null, 'Pembicaraan telepon dengan Bonie Guido dari Susandarini and Partners mengenai perkembangan Perkara', '3', '15:00:00', '15:45:00');
INSERT INTO `tb_timesheet` VALUES ('61', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-23', null, 'Pertemuan dengan Bapak Bonie Guido dari S&P terkait dengan perkembangan perkara', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('62', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-27', null, 'Perjalanan menuju lokasi meeting di BPH Migas', '13', '16:30:00', '17:00:00');
INSERT INTO `tb_timesheet` VALUES ('63', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-27', null, 'Meeting dengan saksi ahli migas dari BPH Migas', '3', '10:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('64', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-27', null, 'Perjalanan kembali dari lokasi meeting di BPH Migas', '13', '11:30:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('65', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-27', null, 'Perjalanan menuju meeting dengan Susandarini & Partners', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('66', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-27', null, 'Meeting membahas perkembangan perkara, perihal translate dokumen perjanjian dan kemungkinan pengajuan affidavit saksi ahli migas', '3', '15:00:00', '18:00:00');
INSERT INTO `tb_timesheet` VALUES ('67', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-27', null, 'Perjalanan kembali dari lokasi meeting di equity', '13', '15:00:00', '15:30:00');
INSERT INTO `tb_timesheet` VALUES ('68', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-28', null, 'Internal meeting terkait materi saksi ahli dalam perkara, persiapan pengajuan affidavit', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('69', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-28', null, 'Review dan analisa Peraturan Pemerintah No. 36 Tahun 2004 dan Permen ESDM No.16 Tahun 2011', '3', '08:00:00', '09:00:00');
INSERT INTO `tb_timesheet` VALUES ('70', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Internal meeting membahas tanggapan dari saksi ahli migas', '3', '17:00:00', '18:00:00');
INSERT INTO `tb_timesheet` VALUES ('71', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Perjalanan menuju lokasi meeting di BPH Migas', '13', '18:00:00', '18:30:00');
INSERT INTO `tb_timesheet` VALUES ('72', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Meeting dengan ahli migas di BPH Migas', '3', '14:00:00', '17:00:00');
INSERT INTO `tb_timesheet` VALUES ('73', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Perjalanan kembali dari lokasi meeting di BPH Migas', '13', '13:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('74', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Perjalanan menuju meeting dengan Susandarini & Partners', '13', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('75', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Meeting membahas perkembangan perkara, perihal translate dokumen perjanjian dan kemungkinan pengajuan affidavit saksi ahli migas', '3', '08:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('76', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-29', null, 'Perjalanan kembali dari lokasi meeting di equity', '13', '15:00:00', '15:30:00');
INSERT INTO `tb_timesheet` VALUES ('77', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-30', null, 'Internal meeting dan review  draft surat permohonan penilaian bentuk kerjasama', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('78', 'AFS8FD8D4940B1CC3C3', '1', '2015-11-02', null, 'Internal meeting dan review  draft surat permohonan  penjelasan konsekuensi ', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('79', 'AFS8FD8D4940B1CC3C3', '16', '2015-09-16', null, 'Pertemuan dengan Susandarini and Partners (“S&P”) untuk membahas perkembangan kasus di kantor S&P ', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('80', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, 'Internal meeting pasca  pemeriksaan Bpk Yonaz sebagai saksi', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('81', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, '(i) Mempelajari berkas pertama yang dikirimkan; dan (ii) diskusi internal mengenai Laporan Penanganan Perkara dari Juniver Girsang & Rekan', '7', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('82', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, '(i) Melakukan riset; dan\n(ii) analisa peraturan perundangan-undangan terkait perkara, antara lain:\n1. Undang-Undang Nomor 22 Tahun 2001 tentang Minyak dan Gas Bumi (“UU Migas”); 2. Peraturan Menteri ESDM Nomor 16 Tahun 2011 (“Permen ESDM No.16/2011”)', '7', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('83', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, 'Internal meeting membahas perkara, memo dan peraturan terkait,  sebagai hasil riset dan analisa dari UU Migas dan Permen ESDM No.16/2011', '3', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('84', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, 'Mempelajari berkas kedua yang dikirimkan dan diskusi internal atas berkas dimaksud serta hal-hal yang perlu didiskusikan dengan Susandarini & Partners, sebagaimana yang telah di email pada tanggal 30 September 2015', '7', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('85', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, 'Internal meeting, membahas ulang berkas dan membuat list hal-hal yang perlu diklarifikasi sebelum Video Confrence pada tanggal 6 Oktober 2015, pembahasan dengan Bonie Guido dari S&P terkait dengan penanganan kasus', '3', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('86', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-05', null, 'Drafting surat kuasa untuk PT TOI dan Bpk Emmanuel Maurice', '4', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('87', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-06', null, 'Diskusi dengan Pak Bonie dari S&P terkait dengan draft Kuasa ', '3', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('88', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-07', null, 'Mempelajari berkas perkara yang baru diterima', '7', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('89', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-07', null, 'Perjalanan menuju dan kembali dari lokasi meeting di SKK Migas, untuk mencari saksi ahli dan berkonsultasi', '13', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('90', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-07', null, 'Berkordinasi dan berkonsultasi dengan pihak SKK Migas', '3', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('91', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-08', null, 'Perjalanan menuju dan kembali dari lokasi meeting di Equity Tower, untuk meeting  Video Confrence dengan pihak TOI di Singapura', '13', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('92', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-08', null, 'Video Conference dengan pihak TOI di Singapura ', '3', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('93', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-09', null, 'Korespodensi email terkait rencana pemeriksaan Bpk Yonaz sebagai saksi', '3', '10:00:00', '10:20:00');
INSERT INTO `tb_timesheet` VALUES ('94', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-09', null, 'Perjalanan menuju dan kembali dari lokasi meeting, menemui pihak Kementerian ESDM ', '13', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('95', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-09', null, 'Berkordinasi dan berkonsultasi dengan pihak  Kementerian ESDM', '3', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('96', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-12', null, 'Perjalanan menuju dan kembali dari lokasi meeting', '13', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('97', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-12', null, 'Meeting persiapan pertama untuk pemeriksaan Bpk Yonaz sebagai saksi', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('98', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-12', null, 'Mempersiapkan draft keterangan tambahan untuk disampaikan oleh  Bpk Yonaz', '7', '10:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('99', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-13', null, 'Perjalanan menuju dan kembali dari lokasi meeting di Equity Tower', '13', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('100', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-13', null, 'Meeting persiapan kedua (confrence call) untuk pemeriksaan Bpk Yonaz sebagai saksi', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('101', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-13', null, 'Internal meeting persiapan dokumen dan argumen  untuk menjelang pemeriksaan Bpk Yonas sebagai saksi', '3', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('102', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-15', null, 'Perjalanan menuju kantor TOI untuk  pemeriksaan Bpk Yonaz sebagai saksi', '13', '10:00:00', '10:45:00');
INSERT INTO `tb_timesheet` VALUES ('103', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-15', null, 'Pemeriksaan Bpk Yonaz sebagai saksi', '3', '08:00:00', '20:00:00');
INSERT INTO `tb_timesheet` VALUES ('104', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-15', null, 'Perjalanan pulang dari kantor TOI ', '13', '10:00:00', '10:45:00');
INSERT INTO `tb_timesheet` VALUES ('105', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Internal meeting pasca  pemeriksaan Bpk Yonaz sebagai saksi', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('106', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Menyusun resume pemeriksaan  Bpk Yonaz', '7', '15:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('107', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Email kepada klien perihal resume pemeriksaan', '3', '10:00:00', '10:10:00');
INSERT INTO `tb_timesheet` VALUES ('108', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Perjalanan menuju meeting di Equity Tower', '13', '15:00:00', '15:30:00');
INSERT INTO `tb_timesheet` VALUES ('109', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Internal meeting dengan Bpk Bonie, Susandarini & Partners', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('110', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Perjalanan pulang dari meeting di Equity Tower', '13', '15:00:00', '15:30:00');
INSERT INTO `tb_timesheet` VALUES ('111', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Internal meeting membahas tahapan berikutnya', '3', '15:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('112', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Perjalanan menuju Kejaksaan Agung menjajaki Jaksa Peneliti perkara', '13', '15:00:00', '15:30:00');
INSERT INTO `tb_timesheet` VALUES ('113', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Penjajakan Jaksa Peneliti perkara di Kejaksaan Agung', '7', '14:00:00', '17:00:00');
INSERT INTO `tb_timesheet` VALUES ('114', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Perjalanan kembali dari Kejaksaan Agung ', '13', '15:00:00', '15:30:00');
INSERT INTO `tb_timesheet` VALUES ('115', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Drafting progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '4', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('116', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-16', null, 'Internal email dan internal meeting membahas  progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '3', '15:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('117', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-19', null, 'Finalize  progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '7', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('118', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-19', null, 'Korespodensi email  perihal  progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '3', '10:00:00', '10:10:00');
INSERT INTO `tb_timesheet` VALUES ('119', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-19', null, 'Perjalanan menuju pertemuan dengan Penyidik', '13', '12:00:00', '12:45:00');
INSERT INTO `tb_timesheet` VALUES ('120', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-19', null, 'Kordinasi dengan penyidik terkait arah penyidikan', '3', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('121', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-19', null, 'Perjalanan kembali dari pertemuan dengan Penyidik', '13', '11:00:00', '11:45:00');
INSERT INTO `tb_timesheet` VALUES ('122', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-20', null, 'Revisi atas resume keterangan saksi Bpk Yonaz', '7', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('123', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-20', null, 'Korespodensi email  perihal  revisi atas resume keterangan  saksi Bpk Yonaz', '3', '11:00:00', '11:05:00');
INSERT INTO `tb_timesheet` VALUES ('124', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-20', null, 'Perjalanan menuju Kejaksaan Agung ', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('125', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-20', null, 'Diskusi dengan pihak kejaksaan di Kejaksaan Agung', '3', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('126', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-20', null, 'Perjalanan kembali dari Kejaksaan Agung ', '13', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('127', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-22', null, 'Perjalanan menuju ke Dirjen Migas', '13', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('128', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-22', null, 'Penjajakan saksi ahli dari Dirjen Migas', '7', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('129', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-22', null, 'Perjalanan kembali dari Dirjen Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('130', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-23', null, 'Perjalanan menuju ke BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('131', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-23', null, 'Penjajakan saksi ahli dari BPH Migas', '7', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('132', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-23', null, 'Perjalanan kembali dari BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('133', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-23', null, 'Korespodensi email  perihal  progress report', '3', '11:00:00', '11:15:00');
INSERT INTO `tb_timesheet` VALUES ('134', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-27', null, 'Perjalanan menuju lokasi meeting di BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('135', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-27', null, 'Meeting dengan saksi ahli migas dari BPH Migas', '3', '11:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('136', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-27', null, 'Perjalanan kembali dari lokasi meeting di BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('137', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-27', null, 'Perjalanan menuju meeting dengan Susandarini & Partners', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('138', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-27', null, 'Meeting membahas perkembangan perkara, perihal translate dokumen perjanjian dan kemungkinan pengajuan affidavit saksi ahli migas', '3', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('139', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-27', null, 'Perjalanan kembali dari lokasi meeting di equity', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('140', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-28', null, 'Internal meeting terkait materi saksi ahli dalam perkara, persiapan pengajuan affidavit', '3', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('141', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-28', null, 'Review dan analisa Peraturan Pemerintah No. 36 Tahun 2004 dan Permen ESDM No.16 Tahun 2011', '7', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('142', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Internal meeting membahas tanggapan dari saksi ahli migas', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('143', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Perjalanan menuju lokasi meeting di BPH Migas', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('144', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Meeting dengan ahli migas di BPH Migas', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('145', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Perjalanan kembali dari lokasi meeting di BPH Migas', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('146', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Perjalanan menuju meeting dengan Susandarini & Partners', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('147', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Meeting membahas perkembangan perkara, perihal translate dokumen perjanjian dan kemungkinan pengajuan affidavit saksi ahli migas', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('148', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-29', null, 'Perjalanan kembali dari lokasi meeting di equity', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('149', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-30', null, 'Drafting surat permohonan penilaian bentuk kerjasama untuk dikirimkan kepada saksi ahli migas', '4', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('150', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-30', null, 'Internal meeting dan review  draft surat permohonan penilaian bentuk kerjasama', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('151', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-30', null, 'Review dan revisi hasil terjemahan tersumpah atas 2 (dua) dokumen yang perlu ditranslate resmi antara lain perjanjian jual beli dan surat penunjukkan distributor', '4', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('152', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-30', null, 'Perjalanan menuju dan kembali dari lokasi meeting di SKK Migas, untuk bertemu saksi ahli migas', '13', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('153', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-30', null, 'Konsultasi terkait format surat  permohonan penilaian bentuk kerjasama', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('154', 'AFS8FD8D4940B1CC3C3', '16', '2015-10-31', null, 'Drafting surat permohonan  penjelasan konsekuensi hukum untuk dikirimkan kepada saksi ahli migas', '4', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('155', 'AFS8FD8D4940B1CC3C3', '16', '2015-11-02', null, 'Internal meeting dan review  draft surat permohonan  penjelasan konsekuensi ', '3', '15:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('156', 'AFS8FD8D4940B1CC3C3', '16', '2015-11-02', null, 'Perjalanan menuju dan kembali dari lokasi meeting di SKK Migas, untuk bertemu saksi ahli migas', '13', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('157', 'AFS8FD8D4940B1CC3C3', '16', '2015-11-02', null, 'Konsultasi terkait format surat  permohonan', '3', '14:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('158', 'AFS8FD8D4940B1CC3C3', '10', '2015-09-16', null, 'Pertemuan dengan Susandarini and Partners (“S&P”) untuk membahas perkembangan kasus di kantor S&P ', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('159', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-05', null, '(i) Mempelajari berkas pertama yang dikirimkan; dan (ii) diskusi internal mengenai Laporan Penanganan Perkara dari Juniver Girsang & Rekan', '7', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('160', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-05', null, '(i) Melakukan riset; dan\n(ii) analisa peraturan perundangan-undangan terkait perkara, antara lain:\n? Undang-Undang Nomor 22 Tahun 2001 tentang Minyak dan Gas Bumi (“UU Migas”);\n? Peraturan Menteri ESDM Nomor 16 Tahun 2011 (“Permen ESDM No.16/2011”)\n', '7', '14:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('161', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-05', null, 'Internal meeting membahas perkara, memo dan peraturan terkait,  sebagai hasil riset dan analisa dari UU Migas dan Permen ESDM No.16/2011', '3', '14:00:00', '16:00:00');
INSERT INTO `tb_timesheet` VALUES ('162', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-05', null, 'Mempelajari berkas kedua yang dikirimkan dan diskusi internal atas berkas dimaksud serta hal-hal yang perlu didiskusikan dengan Susandarini & Partners, sebagaimana yang telah di email pada tanggal 30 September 2015', '7', '15:00:00', '17:00:00');
INSERT INTO `tb_timesheet` VALUES ('163', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-05', null, 'Internal meeting, membahas ulang berkas dan membuat list hal-hal yang perlu diklarifikasi sebelum Video Confrence pada tanggal 6 Oktober 2015, pembahasan dengan Bonie Guido dari S&P terkait dengan penanganan kasus', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('164', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-05', null, 'Drafting surat kuasa untuk PT TOI dan Bpk Emmanuel Maurice', '4', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('165', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-07', null, 'Mempelajari berkas perkara yang baru diterima', '7', '15:00:00', '17:00:00');
INSERT INTO `tb_timesheet` VALUES ('166', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-07', null, 'Perjalanan menuju dan kembali dari lokasi meeting di SKK Migas, untuk mencari saksi ahli dan berkonsultasi', '13', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('167', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-07', null, 'Berkordinasi dan berkonsultasi dengan pihak SKK Migas', '3', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('168', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-08', null, 'Korespodensi email terkait revisi surat kuasa', '13', '11:00:00', '11:20:00');
INSERT INTO `tb_timesheet` VALUES ('169', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-08', null, 'Perjalanan menuju dan kembali dari lokasi meeting di Equity Tower, untuk meeting  Video Confrence dengan pihak TOI di Singapura', '13', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('170', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-08', null, 'Video Conference dengan pihak TOI di Singapura ', '3', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('171', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-09', null, 'Perjalanan menuju dan kembali dari lokasi meeting, menemui pihak Kementerian ESDM ', '13', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('172', 'AFS8FD8D4940B1CC3C3', '10', '2015-10-09', null, 'Berkordinasi dan berkonsultasi dengan pihak  Kementerian ESDM', '3', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('173', 'AFS8FD8D4940B1CC3C3', '10', '2015-11-02', null, 'Internal meeting dan review  draft surat permohonan  penjelasan konsekuensi ', '3', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('174', 'AFS8FD8D4940B1CC3C3', '10', '2015-11-02', null, 'Perjalanan menuju dan kembali dari lokasi meeting di SKK Migas, untuk bertemu saksi ahli migas', '13', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('175', 'AFS8FD8D4940B1CC3C3', '10', '2015-11-02', null, 'Konsultasi terkait format surat  permohonan', '3', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('176', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-15', null, 'Perjalanan menuju kantor TOI untuk  pemeriksaan Bpk Yonaz sebagai saksi', '13', '11:00:00', '11:45:00');
INSERT INTO `tb_timesheet` VALUES ('177', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-15', null, 'Pemeriksaan Bpk Yonaz sebagai saksi', '3', '08:00:00', '20:00:00');
INSERT INTO `tb_timesheet` VALUES ('178', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-15', null, 'Perjalanan pulang dari kantor TOI ', '13', '15:00:00', '15:45:00');
INSERT INTO `tb_timesheet` VALUES ('179', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-16', null, 'Menyusun resume pemeriksaan  Bpk Yonaz', '7', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('180', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-16', null, 'Internal email dan internal meeting membahas  progress report, kronologis versi PT SBE, Pembelaan, Perkembangan Perkara dan Langkah Hukum', '3', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('181', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-20', null, 'Revisi atas resume keterangan saksi Bpk Yonaz', '3', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('182', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-20', null, 'Mengatur jadwal pertemuan dengan pihak Migas', '3', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('183', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-20', null, 'Perjalanan pulang pergi ke Migas', '13', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('184', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-22', null, 'Perjalanan menuju ke Dirjen Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('185', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-22', null, 'Penjajakan saksi ahli dari Dirjen Migas', '3', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('186', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-22', null, 'Perjalanan kembali dari Dirjen Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('187', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-23', null, 'Perjalanan menuju ke BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('188', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-23', null, 'Penjajakan saksi ahli dari BPH Migas', '3', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('189', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-23', null, 'Perjalanan kembali dari BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('190', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-27', null, 'Perjalanan menuju lokasi meeting di BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('191', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-27', null, 'Meeting dengan saksi ahli migas dari BPH Migas', '3', '10:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('192', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-27', null, 'Perjalanan kembali dari lokasi meeting di BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('193', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-27', null, 'Perjalanan menuju meeting dengan Susandarini & Partners', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('194', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-27', null, 'Meeting membahas perkembangan perkara, perihal translate dokumen perjanjian dan kemungkinan pengajuan affidavit saksi ahli migas', '3', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('195', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-27', null, 'Perjalanan kembali dari lokasi meeting di equity', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('196', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-28', null, 'Internal meeting terkait materi saksi ahli dalam perkara, persiapan pengajuan affidavit', '3', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('197', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-28', null, 'Review dan analisa Peraturan Pemerintah No. 36 Tahun 2004 dan Permen ESDM No.16 Tahun 2011', '7', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('198', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Internal meeting membahas tanggapan dari saksi ahli migas', '3', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('199', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Perjalanan menuju lokasi meeting di BPH Migas', '13', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('200', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Meeting dengan ahli migas di BPH Migas', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('201', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Perjalanan kembali dari lokasi meeting di BPH Migas', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('202', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Perjalanan menuju meeting dengan Susandarini & Partners', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('203', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Meeting membahas perkembangan perkara, perihal translate dokumen perjanjian dan kemungkinan pengajuan affidavit saksi ahli migas', '3', '10:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('204', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Perjalanan kembali dari lokasi meeting di equity', '13', '10:00:00', '10:30:00');
INSERT INTO `tb_timesheet` VALUES ('205', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Kordinasi dengan penyidik ', '3', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('206', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-29', null, 'Kordinasi dengan penterjemah tersumpah atas 2 (dua) dokumen yang perlu ditranslate resmi antara lain perjanjian jual beli dan surat penunjukkan distributor, untuk nantinya dilampirkan di surat permohonan kepada saksi ahli migas', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('207', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-30', null, 'Drafting surat permohonan penilaian bentuk kerjasama untuk dikirimkan kepada saksi ahli migas', '4', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('208', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-30', null, 'Internal meeting dan review  draft surat permohonan penilaian bentuk kerjasama', '3', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('209', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-30', null, 'Review dan revisi hasil terjemahan tersumpah atas 2 (dua) dokumen yang perlu ditranslate resmi antara lain perjanjian jual beli dan surat penunjukkan distributor', '4', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('210', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-30', null, 'Perjalanan menuju dan kembali dari lokasi meeting di SKK Migas, untuk bertemu saksi ahli migas', '13', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('211', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-30', null, 'Konsultasi terkait format surat  permohonan penilaian bentuk kerjasama', '3', '12:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('212', 'AFS8FD8D4940B1CC3C3', '14', '2015-10-31', null, 'Drafting surat permohonan  penjelasan konsekuensi hukum untuk dikirimkan kepada saksi ahli migas', '4', '10:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('213', 'AFS8FD8D4940B1CC3C3', '14', '2015-11-02', null, 'Internal meeting dan review  draft surat permohonan  penjelasan konsekuensi ', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('214', 'AFS8FD8D4940B1CC3C3', '1', '2015-10-16', null, 'Internal Meeting Pasca Pemeriksaan Bpk. Yonez sbg Saksi', '1', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('215', 'AFS25E4946D9AA99C90', '15', '2014-06-30', null, 'Telephone conversation with Adjito regarding his debt', '3', '09:10:00', '09:40:00');
INSERT INTO `tb_timesheet` VALUES ('216', 'AFS25E4946D9AA99C90', '15', '2014-06-30', null, 'Research regarding pledging of assets', '7', '09:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('217', 'AFS25E4946D9AA99C90', '15', '2014-06-30', null, 'Drafting email to Client to report  conversation with Adjito & settlement scheme', '4', '10:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('218', 'AFS25E4946D9AA99C90', '15', '2014-08-07', null, 'Emailing Client to respond Client\'s email dated 6 August 2014', '3', '11:00:00', '11:45:00');
INSERT INTO `tb_timesheet` VALUES ('219', 'AFS25E4946D9AA99C90', '15', '2014-07-13', null, 'Telephone conversation with Adjito to request documents', '3', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('220', 'AFS25E4946D9AA99C90', '15', '2014-07-13', null, 'Internal discussion regarding request documents to Adjito and strategy', '3', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('221', 'AFS25E4946D9AA99C90', '15', '2014-08-20', null, 'Studying security documents provided by Adjito', '7', '11:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('222', 'AFS25E4946D9AA99C90', '15', '2014-10-05', null, 'Internal discussion regarding Settlement Agreement ', '3', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('223', 'AFS25E4946D9AA99C90', '15', '2014-10-06', null, 'Drafting Settlement Agreement', '4', '10:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('224', 'AFS25E4946D9AA99C90', '15', '2014-10-07', null, 'Continue to draft Settlement Agreement', '4', '11:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('225', 'AFS25E4946D9AA99C90', '15', '2014-10-08', null, 'Continue to draft Settlement Agreement', '4', '11:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('226', 'AFS25E4946D9AA99C90', '15', '2014-10-15', null, 'Internal Discussion regarding Settlement Agreement\'s draft and its revised', '4', '11:00:00', '12:00:00');
INSERT INTO `tb_timesheet` VALUES ('227', 'AFS25E4946D9AA99C90', '15', '2014-10-30', null, 'Emailing Adjito to request documents and provide Settlement Agreement', '3', '11:00:00', '11:30:00');
INSERT INTO `tb_timesheet` VALUES ('228', 'AFS25E4946D9AA99C90', '15', '2014-11-10', null, 'Internal discussion regarding possible legal actions against Adjito', '3', '09:00:00', '11:00:00');
INSERT INTO `tb_timesheet` VALUES ('229', 'AFS25E4946D9AA99C90', '15', '2014-11-11', null, 'Research regarding bankruptcy law as possible legal action', '7', '12:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('230', 'AFS25E4946D9AA99C90', '15', '2014-11-11', null, 'Drafting internal memorandum regarding bankruptcy', '4', '11:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('231', 'AFS25E4946D9AA99C90', '15', '2014-11-12', null, 'Research regarding criminal law as possible legal action', '7', '13:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('232', 'AFS25E4946D9AA99C90', '15', '2014-11-12', null, 'Drafting internal memorandum regarding criminal law', '4', '11:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('233', 'AFS25E4946D9AA99C90', '15', '2014-11-13', null, 'Research regarding civil lawsuit as possible legal action', '7', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('234', 'AFS25E4946D9AA99C90', '15', '2014-11-13', null, 'Drafting internal memorandum regarding civil lawsuit', '4', '11:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('235', 'AFS25E4946D9AA99C90', '15', '2014-11-13', null, 'Internal discussion regarding possible legal actions against Adjito based on research', '3', '11:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('236', 'AFSDE510424E935FE9D', '2', '2014-03-21', null, 'Pembuatan draft saham', '4', '12:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('237', 'AFSDE510424E935FE9D', '2', '2014-03-21', null, 'Pembuatan draft keputusan sirkuler pemegang saham ', '4', '12:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('238', 'AFSDE510424E935FE9D', '2', '2014-03-21', null, 'Pembuatan Draft persetujuan isteri', '4', '12:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('239', 'AFSDE510424E935FE9D', '2', '2014-04-03', null, 'Pembuatan draft perjanjian kerjasama Tung Feng MKI', '4', '12:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('240', 'AFSDE510424E935FE9D', '2', '2014-04-04', null, 'Revisi draft perjanjian kerjasama MKI Tung Feng', '4', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('241', 'AFSDE510424E935FE9D', '2', '2014-04-08', null, 'Revisi Draft Perjanjian Kerjasama Tung Feng sesuai instruksi dari Pak Hans', '4', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('242', 'AFSDE510424E935FE9D', '2', '2014-04-17', null, 'Finalisasi Surat Jaminan dan Ganti Rugi dan Letter of Indemnity untuk Pak Hans Darmono', '5', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('243', 'AFSDE510424E935FE9D', '2', '2014-04-22', null, 'Diskusi dengan Pak Hans Darmono tentang Surat Jaminan dan Ganti Rugi dan Letter of Indemnity', '3', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('244', 'AFSDE510424E935FE9D', '2', '2014-04-22', null, 'Revisi Surat Jaminan dan Ganti Rugi', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('245', 'AFSDE510424E935FE9D', '2', '2014-04-25', null, 'Finalisasi Surat Jaminan dan Ganti Rugi dan Letter of Indemnity untuk Pak Gregory Darmono', '5', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('246', 'AFSDE510424E935FE9D', '15', '2014-03-24', null, 'Pembuatan dan Revisi Draft PPJB Saham', '4', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('247', 'AFSDE510424E935FE9D', '15', '2014-03-24', null, 'Pembuatan dan Revisi Draft Keputusan Sirkuler Pemegang Saham', '4', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('248', 'AFSDE510424E935FE9D', '15', '2014-03-24', null, 'Pembuatan Draft Persetujuan Isteri', '4', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('249', 'AFSDE510424E935FE9D', '15', '2014-03-25', null, 'Revisi Draft PPJB Saham', '4', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('250', 'AFSDE510424E935FE9D', '15', '2014-03-25', null, 'Revisi Draft Keputusan Sirkuler Pemegang Saham', '4', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('251', 'AFSDE510424E935FE9D', '15', '2014-03-25', null, 'Revisi Draft Persetujuan Isteri', '4', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('252', 'AFSDE510424E935FE9D', '15', '2014-03-28', null, 'Korespondensi Permintaan Data Tambahan', '4', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('253', 'AFSDE510424E935FE9D', '15', '2014-03-28', null, 'Finalisasi Draft Perjanjian Jual Beli Saham, Draft Keputusan Sirkuler Pemegan Saham dan Draft Persetujuan Isteri', '5', '12:00:00', '12:30:00');
INSERT INTO `tb_timesheet` VALUES ('254', 'AFSDE510424E935FE9D', '15', '2014-04-03', null, 'Pembuatan Draft Perjanjian Kerjasama Tung Feng - MKI', '3', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('255', 'AFSDE510424E935FE9D', '15', '2014-04-04', null, 'Revisi Draft Perjanjian Kerjasama Tung Feng - MKI', '5', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('256', 'AFSDE510424E935FE9D', '15', '2014-04-07', null, 'Finalisasi dan Mengirimkan Draft Perjanjian Kerjasama Tung Feng - MKI', '3', '12:00:00', '13:00:00');
INSERT INTO `tb_timesheet` VALUES ('257', 'AFSDE510424E935FE9D', '15', '2014-04-17', null, 'Finalisasi Surat Jaminan dan Ganti Rugi dan Letter of Indemnity untuk Pak Hans Darmono', '4', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('258', 'AFSDE510424E935FE9D', '15', '2014-04-22', null, 'Diskusi dengan Pak Hans Darmono tentang Surat Jaminan dan Ganti Rugi dan Letter of Indemnity', '5', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('259', 'AFSDE510424E935FE9D', '15', '2014-04-25', null, 'Finalisasi Surat Jaminan dan Ganti Rugi dan Letter of Indemnity untuk Pak Gregory Darmono', '3', '12:00:00', '13:30:00');
INSERT INTO `tb_timesheet` VALUES ('262', 'AFS413BF46A4AA07C20', '5', '2016-04-06', null, 'Meeting dengan bpk budi di Citywalk', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('263', 'AFS413BF46A4AA07C20', '1', '2016-04-06', null, 'Meeting dengan bpk budi di CityWalk', '3', '14:00:00', '15:00:00');
INSERT INTO `tb_timesheet` VALUES ('264', 'AFS413BF46A4AA07C20', '5', '2016-04-06', null, 'Research dan drafting dokumen-dokumen yang dibutuhkan dalam Kasus Larasati (draft Pernyataan Hutang, draft Kesepakatan Bersama, draft  Persetujuan Suami, draft Perjanjian Pengakuan Hutang, dan draft Akta Pengakuan Hutang)', '4', '12:00:00', '16:30:00');
INSERT INTO `tb_timesheet` VALUES ('265', 'AFS413BF46A4AA07C20', '1', '2016-04-06', null, 'Diskusi atas draft dokumen-dokumen yang dibutuhkan dalam Kasus Larasati ', '3', '13:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('266', 'AFS413BF46A4AA07C20', '5', '2016-04-06', null, 'Diskusi atas draft dokumen-dokumen yang dibutuhkan dalam Kasus Larasati ', '3', '14:00:00', '14:30:00');
INSERT INTO `tb_timesheet` VALUES ('267', 'AFS413BF46A4AA07C20', '5', '2016-04-06', null, 'Diskusi atas draft dokumen-dokumen yang dibutuhkan dalam Kasus Larasati ', '3', '14:00:00', '14:30:00');
INSERT INTO `tb_timesheet` VALUES ('268', 'AFS413BF46A4AA07C20', '7', '2016-04-06', null, 'Drafting Surat Kuasa untuk permasalahan Larasati', '4', '14:00:00', '14:15:00');
INSERT INTO `tb_timesheet` VALUES ('269', 'AFS413BF46A4AA07C20', '7', '2016-04-06', null, 'Meeting dengan Ibu Ester dan Ibu Tepu membahas tentang perhitungan sisa outstanding Larasati dan perhitungan jumlah setoran Larasati', '3', '14:00:00', '14:45:00');
INSERT INTO `tb_timesheet` VALUES ('270', 'AFS413BF46A4AA07C20', '3', '2016-04-06', null, 'Meeting dengan Ibu Ester dan Ibu Tepu membahas tentang perhitungan sisa outstanding Larasati dan perhitungan jumlah setoran Larasati', '3', '14:00:00', '14:45:00');
INSERT INTO `tb_timesheet` VALUES ('271', 'AFS413BF46A4AA07C20', '5', '2016-04-06', null, 'Meeting dengan Bapak Nicky Hogan dan Ibu Ester membicarakan tentang perhitungan outstanding dan perhitungan setoran Larasati', '3', '12:00:00', '14:00:00');
INSERT INTO `tb_timesheet` VALUES ('272', 'AFS413BF46A4AA07C20', '7', '2016-04-06', null, 'Meeting dengan Bapak Nicky Hogan dan Ibu Ester membicarakan tentang perhitungan outstanding dan perhitungan setoran Larasati', '3', '12:00:00', '14:00:00');

-- ----------------------------
-- Table structure for tb_usd
-- ----------------------------
DROP TABLE IF EXISTS `tb_usd`;
CREATE TABLE `tb_usd` (
  `id_currency` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_tukar` float DEFAULT NULL,
  PRIMARY KEY (`id_currency`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_usd
-- ----------------------------
INSERT INTO `tb_usd` VALUES ('1', '13180');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `inisial` varchar(255) DEFAULT NULL,
  `mobile1` varchar(255) DEFAULT NULL,
  `mobile2` varchar(255) DEFAULT NULL,
  `home_phone` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `ext` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `admin` int(255) DEFAULT NULL,
  `active` int(255) DEFAULT '1',
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'Andi Fanano Simangungsong', 'A F S', '0855 777 0707 ', '', '', 'andisimangunsong@afs-partnership.com', 'andisimangunsong.afs@gmail.com', '101', 'Managing Partners', '1', '1', 'andi', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('2', 'Agan  Rangga Mahendra', 'ARM', '0818 750 591', '', '', 'agan.mahendra@afs-partnership.com', 'agan.mahendra.afs@gmail.com', '102', 'Partners', '3', '2', 'agan', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('3', 'Andine Adisy Putri', 'AAP', '0812 1928 024', '', '', 'andineadisyputri@afs-partnership.com', 'andineadisyputri.afs@gmail.com', '', 'Associates', '6', '11', 'andine', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('4', 'Andonius Simanjorang', 'AS', '0896 3020 3799', '0812 1350 5169', '', 'andoniussimianjorang@afs-partnership.com', 'andonius.afs@gmai.com', '', 'Associates', '6', '11', 'andonius', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('5', 'Bryan Bernadi', 'BB', '0821 1112 2758', '', '', 'bryanbernardi@afs-partnership.com', 'bryanbernadi.afs@gmail.com', '201', 'Associates', '1', '2', 'bryan', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('6', 'Christma Celi Manafe', 'CM', '0812 803 3259', '', '', 'celimanafe@afs-partnership.com', 'christmamf@yahoo.com', '103', 'Associates', '5', '2', 'christina', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('7', 'Deborah Evelyn Panjaitan', 'DEP', '0815 8949 848', '', '', 'deborahpanjaitan@afs-partnership.com', 'deborahpanjaitan.afs@gmail.com', '109', 'Associates', '6', '4', 'deborah', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('8', 'Dwi Laksono Setyowibowo', 'DLS', '0878 8566 8999', '', '', 'dwilaksonosetyowibowo@afs-partnership.com', 'dwilaksonosetyowibowo.afs@gmail.com', '204', 'Associates', '2', '5', 'dwi', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('9', 'Elizabeth Tirza Hutasoit', 'ETH', '0813 8756 7891', '', '', 'elizabeth@afs-partnership.com', 'elizabeth.hutasoit.afs@gmail.com', '111', 'Associates', '3', '4', 'elizabeth', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('10', 'Gede Aditya Pratama', 'GAP', '0857 2050 0211', '', '', 'gedeaditya@afs-partnership.com', 'gedeaditya.afs@gmail.com', '106', 'Associates', '1', '4', 'gede', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('11', 'Handy Samot Sihotang', 'HS', '0813 5017 5275', '', '', 'handysamot@afs-partnership.com', 'handysamot.afs@gmail.com', '202', 'Associates', '1', '3', 'handy', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('12', 'Ishak Novel Baluel', 'INB', '0813 8581 5895', '', '', 'ishaknovelbaluel@afs-partnership.com', 'ishaknovel.afs@gmail.com', '', 'Associates', '6', '11', 'ishak', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('13', 'Lambok Parulian Hutapea', 'LPH', '0821 2222 3635', '0812 8003 0222', '', 'lambokhutapea@afs-partnership.com', 'lambokhutapea.afs@gmail.com', '', 'Associates', '4', '5', 'lambok', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('14', 'Magivena Pinintha', 'MP', '0877 8049 2469 ', '', '', 'magivena@afs-partnership.com', 'magivena.afs@gmail.com', '', 'Associates', '6', '11', 'magivena', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('15', 'Niken Astiningrum', 'NA', '0815 8485 6262', '0813 1635 6469', '', 'nikenastiningrum@afs-partnership.com', 'nikenastiningrum.afs@gmail.com', '206', 'Associates', '3', '3', 'niken', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('16', 'Oland Panggabean', 'OP', '0877 7838 8334', '', '021-581 8649', 'olandpanggabean@afs-partnership.com', 'reinhard.afs@gmail.com', '205', 'Associates', '1', '2', 'oland', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('17', 'Pasrokristofel Nababan', 'PN', '0813 2375 5937', '', '', 'pasrokristofelnababan@afs-partnership.com', 'pasrokristofel.afs@gmail.com', '208', 'Associates', '5', '3', 'Pasrokristofel', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('18', 'Remana Nugroho', 'RN', '0812 2987 133', '', '', 'remananugroho@afs-partnership.com', 'remananugroho.afs@gmail.com', '109', 'Associates', '4', '4', 'remana', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('19', 'Tommy Simorangkir', 'TS', '0818 621 331', '', '', 'tommysimorangkir@afs-partnership.com', 'tommysimoraangkir.afs@gmail.com', '203', 'Associates', '4', '3', 'tommy', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('20', 'Anastasia Putri', 'AP', '0813 1072 4852', '', '', 'anastasiaputri@afs-partnership.com', 'anastasiaputri.afs@gmail.com', '108', 'Staff', '6', '7', 'anastasia', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('21', 'Edward Poluan(Edo)', 'EDU', '0838 9183 0550', '021-9710 1417', '', '', '', '', 'Staff', '6', '9', 'edward', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('22', 'Haerul Djamal', 'HD', '0857 7103 3050', '0817 6081 513', '021-41762913', '', '', '', 'Staff', '6', '9', 'haerul', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('23', 'Kairin Driver(afs)', 'KN', '0852 1693 8847', '0878 8273 8239', '', '', '', '', 'Staff', '6', '10', 'kairin', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('24', 'Karmuji', 'KM', '0813 1922 1228', '', '', '', '', '', 'Staff', '6', '10', 'karmuji', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('25', 'Lutgarda DM Ningrum', 'LN', '0878 84282 389', '', '', 'lutgardaningrum@afs-partnership.com', 'lutgardwy.afs@gmail.com', '108', 'Staff', '6', '7', 'lutgarda', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('26', 'Nindya Pransiska', 'NP', '0819 0556 2412', '', '', 'nindyafransisca@afs-partnership.com', 'nindyafransisca.afs@gmail.com', '110', 'Staff', '6', '8', 'nindya', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('27', 'Nova Natalia Notorahardjo', 'NN', '0817 655 4720', '', '', 'novanatalia@afs-partnership.com', 'nova.afs@gmail.com', '108', 'Staff', '6', '6', 'nova', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('28', 'Rio Kadafi', 'RK', '0877 7007 7557', '', '', '', 'r.kadafi7@gmail.com', '', 'Staff', '6', '12', 'rio', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('29', 'Rini Sulastri', 'RS', '0812 8172 2556', '0896 3443 4084', '', 'rinisulastri@afs-partnership.com', 'rinisulastri.afs@gmail.com', '0/100', 'Staff', '6', '8', 'rini', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('30', 'Risky', 'RY', '0812 8026 5356', '', '', '', 'risky.goky@gmail.com', '110', 'Staff', '6', '12', 'risky', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('31', 'Toufan', 'TF', '0818 0620 2600', '', '', '', 'toufanster@gmail.com', '110', 'Staff', '6', '12', 'toufan', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('32', 'Tono', 'TN', '0878 8428 8555', '', '', '', '', '', 'Staff', '6', '10', 'tono', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('33', 'Timen', 'TM', '0813 8086 5597', '', '', '', '', '', 'Staff', '6', '10', 'timen', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('34', 'Yulianto', 'YO', '0857 1958 3734', '021-9976 8381', '', '', '', '', 'Staff', '6', '10', 'yulianto', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('35', 'Yuli Hartini', 'YH', '0818 0777 9442', '0812 9616 0750', '', '', '', '', 'Staff', '6', '9', 'yuli', 'e10adc3949ba59abbe56e057f20f883e', '0', '1', null);
INSERT INTO `tb_user` VALUES ('36', 'Kingking Firdaus', 'KKF', '082113708280', '', null, 'halimc17@yahoo.com', 'kingking.firdaus@gmail.com', '', 'Staff', '6', '12', 'firdausk', '017eef8839e5a0bd21ab422195ee6164', '1', '1', null);

-- ----------------------------
-- Table structure for tb_work_type
-- ----------------------------
DROP TABLE IF EXISTS `tb_work_type`;
CREATE TABLE `tb_work_type` (
  `id_work_type` int(11) NOT NULL AUTO_INCREMENT,
  `worktype` varchar(255) DEFAULT NULL,
  `inisial` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_work_type`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_work_type
-- ----------------------------
INSERT INTO `tb_work_type` VALUES ('1', 'PIDANA', 'PD');
INSERT INTO `tb_work_type` VALUES ('2', 'SIDANG', 'SD');
INSERT INTO `tb_work_type` VALUES ('3', 'MEETING', 'MT');
INSERT INTO `tb_work_type` VALUES ('4', 'DRAFTING', 'DRF');
INSERT INTO `tb_work_type` VALUES ('5', 'SIGNING', 'SGN');
INSERT INTO `tb_work_type` VALUES ('6', 'DUE DILLIGENCE', 'DD');
INSERT INTO `tb_work_type` VALUES ('7', 'RESEARCH', 'REA');
INSERT INTO `tb_work_type` VALUES ('8', 'PERDATA/TUN', 'PER');
INSERT INTO `tb_work_type` VALUES ('9', 'KEPAILITAN', 'KPL');
INSERT INTO `tb_work_type` VALUES ('10', 'KPPU', 'KPP');
INSERT INTO `tb_work_type` VALUES ('11', 'ARBITRASE', 'ARB');
INSERT INTO `tb_work_type` VALUES ('12', 'MAHKAMAH KONSTITUSI', 'MK');
INSERT INTO `tb_work_type` VALUES ('13', 'TRAVEL', 'TR');

-- ----------------------------
-- View structure for v_client_retainer
-- ----------------------------
DROP VIEW IF EXISTS `v_client_retainer`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `v_client_retainer` AS SELECT
tb_matter_retainer2.id_retainer,
tb_matter_retainer2.jangka_waktu,
tb_matter_retainer2.biaya,
tb_matter_retainer2.menit,
tb_matter_retainer2.disc,
tb_matter_retainer2.description,
tb_matter_retainer2.open_date,
tb_matter_retainer2.close_date,
tb_client.nama_client,
tb_matter_retainer2.id_client,
(select count(`tb_matter_retainer`.`id_retainer`) from `tb_matter_retainer` where (`tb_matter_retainer`.`id_retainer` = `tb_matter_retainer2`.`id_retainer`)) AS `jml_matter`
FROM
tb_matter_retainer2
INNER JOIN tb_client ON tb_matter_retainer2.id_client = tb_client.id_client ; ;

-- ----------------------------
-- View structure for v_matter_assign
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_assign`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `v_matter_assign` AS select `tb_matter_assign`.`id_matter_assign` AS `id_matter_assign`,`tb_matter_assign`.`id_matter` AS `id_matter`,`tb_matter_assign`.`id_user` AS `id_user`,`tb_user`.`nama` AS `nama`,`tb_user`.`inisial` AS `inisial` from (`tb_matter_assign` join `tb_user` on((`tb_user`.`id_user` = `tb_matter_assign`.`id_user`))); ;

-- ----------------------------
-- View structure for v_matter_detail
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_detail`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_detail` AS select `tb_matter`.`id` AS `id`,`tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`id_payment` AS `id_payment`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_matter`.`input_date` AS `input_date`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name` from ((`tb_matter` join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))); ;

-- ----------------------------
-- View structure for v_matter_hourly
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_hourly`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_hourly` AS select `tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`id_payment` AS `id_payment`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_matter_hourly`.`managing_partner` AS `managing_partner`,`tb_matter_hourly`.`partner` AS `partner`,`tb_matter_hourly`.`junior_partner` AS `junior_partner`,`tb_matter_hourly`.`senior_associate` AS `senior_associate`,`tb_matter_hourly`.`mid_associate` AS `mid_associate`,`tb_matter_hourly`.`junior_associate` AS `junior_associate`,`tb_matter_hourly`.`disc` AS `disc`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name`,`tb_matter`.`id` AS `id`,`tb_matter_hourly`.`description` AS `description`,(select count(`tb_matter_assign`.`id_matter`) from `tb_matter_assign` where (`tb_matter_assign`.`id_matter` = `tb_matter`.`id_matter`)) AS `assigned`,(select count(`tb_submatter`.`id_matter`) from `tb_submatter` where (`tb_submatter`.`id_matter` = `tb_matter`.`id_matter`)) AS `jml_subMatter` from (((`tb_matter` join `tb_matter_hourly` on((`tb_matter_hourly`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))) where (`tb_matter`.`id_matter` = `tb_matter_hourly`.`id_matter`); ;

-- ----------------------------
-- View structure for v_matter_lumpsum
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_lumpsum`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_lumpsum` AS select `tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_matter_lumpsum`.`success_fee` AS `success_fee`,`tb_matter_lumpsum`.`term1` AS `term1`,`tb_matter_lumpsum`.`term2` AS `term2`,`tb_matter_lumpsum`.`term3` AS `term3`,`tb_matter_lumpsum`.`desc_term1` AS `desc_term1`,`tb_matter_lumpsum`.`desc_term2` AS `desc_term2`,`tb_matter_lumpsum`.`desc_term3` AS `desc_term3`,`tb_matter_lumpsum`.`description` AS `description`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name`,`tb_matter`.`id` AS `id`,(select count(`tb_matter_assign`.`id_matter`) from `tb_matter_assign` where (`tb_matter_assign`.`id_matter` = `tb_matter`.`id_matter`)) AS `assigned`,(select count(`tb_submatter`.`id_matter`) from `tb_submatter` where (`tb_submatter`.`id_matter` = `tb_matter`.`id_matter`)) AS `jml_subMatter`,`tb_matter`.`id_payment` AS `id_payment` from (((`tb_matter` join `tb_matter_lumpsum` on((`tb_matter_lumpsum`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))) where (`tb_matter`.`id_matter` = `tb_matter_lumpsum`.`id_matter`); ;

-- ----------------------------
-- View structure for v_matter_probono
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_probono`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_probono` AS select `tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`id_payment` AS `id_payment`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name`,`tb_matter_probono`.`description` AS `description`,`tb_matter`.`id` AS `id`,(select count(`tb_matter_assign`.`id_matter`) from `tb_matter_assign` where (`tb_matter_assign`.`id_matter` = `tb_matter`.`id_matter`)) AS `assigned` from (((`tb_matter` join `tb_matter_probono` on((`tb_matter_probono`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))) where (`tb_matter`.`id_matter` = `tb_matter_probono`.`id_matter`); ;

-- ----------------------------
-- View structure for v_matter_project
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_project`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_project` AS select `tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`id_payment` AS `id_payment`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_matter_project`.`success_fee` AS `success_fee`,`tb_matter_project`.`term1` AS `term1`,`tb_matter_project`.`term2` AS `term2`,`tb_matter_project`.`term3` AS `term3`,`tb_matter_project`.`desc_term1` AS `desc_term1`,`tb_matter_project`.`desc_term2` AS `desc_term2`,`tb_matter_project`.`desc_term3` AS `desc_term3`,`tb_matter_project`.`description` AS `description`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name`,`tb_matter`.`id` AS `id`,(select count(`tb_matter_assign`.`id_matter`) from `tb_matter_assign` where (`tb_matter_assign`.`id_matter` = `tb_matter`.`id_matter`)) AS `assigned` from (((`tb_matter` join `tb_matter_project` on((`tb_matter_project`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))) where (`tb_matter`.`id_matter` = `tb_matter_project`.`id_matter`); ;

-- ----------------------------
-- View structure for v_matter_retainer
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_retainer`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_retainer` AS select `tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`id_payment` AS `id_payment`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_matter_retainer`.`jangka_waktu` AS `jangka_waktu`,`tb_matter_retainer`.`biaya` AS `biaya`,`tb_matter_retainer`.`jam` AS `jam`,`tb_matter_retainer`.`disc` AS `disc`,`tb_matter_retainer`.`description` AS `description`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name`,`tb_matter`.`id` AS `id`,(select count(`tb_matter_assign`.`id_matter`) from `tb_matter_assign` where (`tb_matter_assign`.`id_matter` = `tb_matter`.`id_matter`)) AS `assigned`,(select count(`tb_submatter`.`id_matter`) from `tb_submatter` where (`tb_submatter`.`id_matter` = `tb_matter`.`id_matter`)) AS `jml_subMatter` from (((`tb_matter` join `tb_matter_retainer` on((`tb_matter_retainer`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))) where (`tb_matter`.`id_matter` = `tb_matter_retainer`.`id_matter`); ;

-- ----------------------------
-- View structure for v_matter_retainer_assign
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_retainer_assign`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost`  VIEW `v_matter_retainer_assign` AS SELECT
tb_matter_retainer_assign.id_matter_assign,
tb_matter_retainer_assign.id_matter,
tb_matter_retainer_assign.id_user,
tb_user.nama,
tb_user.inisial
FROM
tb_matter_retainer_assign
INNER JOIN tb_user ON tb_user.id_user = tb_matter_retainer_assign.id_user ;

-- ----------------------------
-- View structure for v_matter_successfee
-- ----------------------------
DROP VIEW IF EXISTS `v_matter_successfee`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_matter_successfee` AS select `tb_matter`.`id_matter` AS `id_matter`,`tb_matter`.`id_client` AS `id_client`,`tb_matter`.`id_payment` AS `id_payment`,`tb_matter`.`matter` AS `matter`,`tb_matter`.`open_date` AS `open_date`,`tb_matter`.`close_date` AS `close_date`,`tb_matter`.`active` AS `active`,`tb_matter_successfee`.`biaya` AS `biaya`,`tb_matter_successfee`.`description` AS `description`,`tb_client`.`nama_client` AS `nama_client`,`tb_payment`.`payment_name` AS `payment_name`,`tb_matter`.`id` AS `id`,(select count(`tb_matter_assign`.`id_matter`) from `tb_matter_assign` where (`tb_matter_assign`.`id_matter` = `tb_matter`.`id_matter`)) AS `assigned` from (((`tb_matter` join `tb_matter_successfee` on((`tb_matter_successfee`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))) join `tb_payment` on((`tb_payment`.`id_payment` = `tb_matter`.`id_payment`))) where (`tb_matter`.`id_matter` = `tb_matter_successfee`.`id_matter`); ;

-- ----------------------------
-- View structure for v_submatter_hourly
-- ----------------------------
DROP VIEW IF EXISTS `v_submatter_hourly`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_submatter_hourly` AS select `tb_submatter`.`id_submatter` AS `id_submatter`,`tb_submatter`.`id_matter` AS `id_matter`,`tb_submatter`.`id_payment` AS `id_payment`,`tb_submatter`.`matter` AS `subMatter`,`tb_submatter`.`open_date` AS `open_date`,`tb_submatter`.`close_date` AS `close_date`,`tb_submatter`.`active` AS `active`,`tb_subhourly`.`managing_partner` AS `managing_partner`,`tb_subhourly`.`partner` AS `partner`,`tb_subhourly`.`junior_partner` AS `junior_partner`,`tb_subhourly`.`senior_associate` AS `senior_associate`,`tb_subhourly`.`mid_associate` AS `mid_associate`,`tb_subhourly`.`junior_associate` AS `junior_associate`,`tb_subhourly`.`disc` AS `disc`,`tb_subhourly`.`description` AS `description`,`tb_matter`.`matter` AS `matter`,`tb_client`.`nama_client` AS `nama_client` from (((`tb_submatter` join `tb_subhourly` on((`tb_subhourly`.`id_submatter` = `tb_submatter`.`id_submatter`))) join `tb_matter` on((`tb_matter`.`id_matter` = `tb_submatter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))); ;

-- ----------------------------
-- View structure for v_submatter_lumpsum
-- ----------------------------
DROP VIEW IF EXISTS `v_submatter_lumpsum`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_submatter_lumpsum` AS select `tb_submatter`.`id_submatter` AS `id_submatter`,`tb_submatter`.`id_matter` AS `id_matter`,`tb_submatter`.`id_payment` AS `id_payment`,`tb_submatter`.`matter` AS `submatter`,`tb_submatter`.`open_date` AS `open_date`,`tb_submatter`.`close_date` AS `close_date`,`tb_submatter`.`active` AS `active`,`tb_sublumpsum`.`success_fee` AS `success_fee`,`tb_sublumpsum`.`term1` AS `term1`,`tb_sublumpsum`.`term2` AS `term2`,`tb_sublumpsum`.`term3` AS `term3`,`tb_sublumpsum`.`desc_term1` AS `desc_term1`,`tb_sublumpsum`.`desc_term2` AS `desc_term2`,`tb_sublumpsum`.`desc_term3` AS `desc_term3`,`tb_sublumpsum`.`description` AS `description`,`tb_client`.`nama_client` AS `nama_client`,`tb_matter`.`matter` AS `matter` from (((`tb_submatter` join `tb_sublumpsum` on((`tb_sublumpsum`.`id_submatter` = `tb_submatter`.`id_submatter`))) join `tb_matter` on((`tb_submatter`.`id_matter` = `tb_matter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))); ;

-- ----------------------------
-- View structure for v_submatter_retainer
-- ----------------------------
DROP VIEW IF EXISTS `v_submatter_retainer`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_submatter_retainer` AS select `tb_submatter`.`id_submatter` AS `id_submatter`,`tb_submatter`.`id_matter` AS `id_matter`,`tb_submatter`.`id_payment` AS `id_payment`,`tb_submatter`.`matter` AS `subMatter`,`tb_submatter`.`open_date` AS `open_date`,`tb_submatter`.`close_date` AS `close_date`,`tb_submatter`.`active` AS `active`,`tb_subretainer`.`jangka_waktu` AS `jangka_waktu`,`tb_subretainer`.`biaya` AS `biaya`,`tb_subretainer`.`jam` AS `jam`,`tb_subretainer`.`disc` AS `disc`,`tb_subretainer`.`description` AS `description`,`tb_matter`.`matter` AS `matter`,`tb_client`.`nama_client` AS `nama_client` from (((`tb_submatter` join `tb_subretainer` on((`tb_subretainer`.`id_submatter` = `tb_submatter`.`id_submatter`))) join `tb_matter` on((`tb_matter`.`id_matter` = `tb_submatter`.`id_matter`))) join `tb_client` on((`tb_client`.`id_client` = `tb_matter`.`id_client`))); ;

-- ----------------------------
-- View structure for v_user
-- ----------------------------
DROP VIEW IF EXISTS `v_user`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `v_user` AS select `tb_user`.`id_user` AS `id_user`,`tb_user`.`nama` AS `nama`,`tb_user`.`inisial` AS `inisial`,`tb_user`.`mobile1` AS `mobile1`,`tb_user`.`mobile2` AS `mobile2`,`tb_user`.`home_phone` AS `home_phone`,`tb_user`.`email1` AS `email1`,`tb_user`.`email2` AS `email2`,`tb_user`.`ext` AS `ext`,`tb_user`.`status` AS `status`,`tb_user`.`username` AS `username`,`tb_user`.`password` AS `password`,`tb_user`.`admin` AS `admin`,`tb_user`.`active` AS `active`,`tb_user`.`last_login` AS `last_login`,`tb_divisi`.`nama_divisi` AS `nama_divisi`,`tb_jabatan`.`nama_jabatan` AS `nama_jabatan`,`tb_user`.`id_jabatan` AS `id_jabatan`,`tb_user`.`id_divisi` AS `id_divisi` from ((`tb_user` join `tb_divisi` on((`tb_divisi`.`id_divisi` = `tb_user`.`id_divisi`))) join `tb_jabatan` on((`tb_jabatan`.`id_jabatan` = `tb_user`.`id_jabatan`))) ;
