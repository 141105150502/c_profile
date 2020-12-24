/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : db_c_profile

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 24/12/2020 12:39:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for base_menu
-- ----------------------------
DROP TABLE IF EXISTS `base_menu`;
CREATE TABLE `base_menu`  (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `nama_menu` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `parent_menu` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `order_menu` int(11) NULL DEFAULT NULL,
  `menu_aktif` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of base_menu
-- ----------------------------
INSERT INTO `base_menu` VALUES (1, 'Dashboard', 0, 'dashboard', 'fas fa-tachometer-alt', NULL, 1);
INSERT INTO `base_menu` VALUES (2, 'Management Role', 0, 'management_role', 'fas fa-user-tie', NULL, 1);
INSERT INTO `base_menu` VALUES (3, 'Management Menu', 0, 'management_menu', 'fa fa-list', NULL, 1);
INSERT INTO `base_menu` VALUES (4, 'Profile', 0, 'profileuser', 'fas fa-user', NULL, 1);
INSERT INTO `base_menu` VALUES (5, 'All User', 0, 'all_user', 'fas fa-users', NULL, 1);
INSERT INTO `base_menu` VALUES (7, 'management berita', 0, '#', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (8, 'Berita', 7, 'berita', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (9, 'Kategori Berita', 7, 'kategori_berita', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (10, 'Slider', 0, 'slider', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (11, 'Profile Perusahaan', 0, '#', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (12, 'Sejarah Perusahaan', 11, 'sejarah_perusahaan', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (13, 'Visi Dan Misi', 11, 'visimisi', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (14, 'strutur organisasi', 11, 'struktur_organisasi', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (15, 'karir', 0, 'karir', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (16, 'Produk', 0, 'produk', 'fa fa-circle', NULL, 1);
INSERT INTO `base_menu` VALUES (17, 'Katalog File', 0, 'katalog_file', 'fas fa-file-alt', NULL, 1);
INSERT INTO `base_menu` VALUES (18, 'Sub Katalog File', 0, 'sub_katalogfile', 'fa fa-th-list', NULL, 0);
INSERT INTO `base_menu` VALUES (19, 'Kontak', 11, 'kontak', 'fas fa-file-alt', NULL, 1);

-- ----------------------------
-- Table structure for base_menurole
-- ----------------------------
DROP TABLE IF EXISTS `base_menurole`;
CREATE TABLE `base_menurole`  (
  `id_menurole` int(11) NOT NULL AUTO_INCREMENT,
  `mr_id_role` int(11) NULL DEFAULT NULL,
  `mr_id_menu` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_menurole`) USING BTREE,
  INDEX `mr_id_menu foreign`(`mr_id_menu`) USING BTREE COMMENT 'foreign key base_menu',
  INDEX `mr_id_role foreign key`(`mr_id_role`) USING BTREE COMMENT 'foreign key base_role',
  CONSTRAINT `base_menurole_ibfk_1` FOREIGN KEY (`mr_id_menu`) REFERENCES `base_menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `base_menurole_ibfk_2` FOREIGN KEY (`mr_id_role`) REFERENCES `base_role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of base_menurole
-- ----------------------------
INSERT INTO `base_menurole` VALUES (1, 1, 1);
INSERT INTO `base_menurole` VALUES (2, 1, 2);
INSERT INTO `base_menurole` VALUES (3, 1, 3);
INSERT INTO `base_menurole` VALUES (4, 1, 4);
INSERT INTO `base_menurole` VALUES (5, 5, 5);
INSERT INTO `base_menurole` VALUES (7, 4, 3);
INSERT INTO `base_menurole` VALUES (8, 5, 4);
INSERT INTO `base_menurole` VALUES (9, 3, 4);
INSERT INTO `base_menurole` VALUES (10, 2, 4);
INSERT INTO `base_menurole` VALUES (11, 2, 1);
INSERT INTO `base_menurole` VALUES (12, 1, 5);
INSERT INTO `base_menurole` VALUES (13, 1, 7);
INSERT INTO `base_menurole` VALUES (14, 1, 8);
INSERT INTO `base_menurole` VALUES (15, 1, 9);
INSERT INTO `base_menurole` VALUES (16, 1, 10);
INSERT INTO `base_menurole` VALUES (17, 1, 11);
INSERT INTO `base_menurole` VALUES (18, 1, 12);
INSERT INTO `base_menurole` VALUES (19, 1, 13);
INSERT INTO `base_menurole` VALUES (20, 1, 14);
INSERT INTO `base_menurole` VALUES (21, 1, 15);
INSERT INTO `base_menurole` VALUES (22, 1, 16);
INSERT INTO `base_menurole` VALUES (23, 1, 17);
INSERT INTO `base_menurole` VALUES (24, 1, 18);
INSERT INTO `base_menurole` VALUES (25, 1, 19);

-- ----------------------------
-- Table structure for base_role
-- ----------------------------
DROP TABLE IF EXISTS `base_role`;
CREATE TABLE `base_role`  (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_role`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of base_role
-- ----------------------------
INSERT INTO `base_role` VALUES (1, 'admin');
INSERT INTO `base_role` VALUES (2, 'user');
INSERT INTO `base_role` VALUES (3, 'Kasubag');
INSERT INTO `base_role` VALUES (4, 'Kepala Cabang Cibinong');
INSERT INTO `base_role` VALUES (5, 'Direktur');

-- ----------------------------
-- Table structure for base_user
-- ----------------------------
DROP TABLE IF EXISTS `base_user`;
CREATE TABLE `base_user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_telp` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_aktif` int(1) NULL DEFAULT NULL,
  `date_created` int(11) NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of base_user
-- ----------------------------
INSERT INTO `base_user` VALUES (1, 'admin', 'admin@mail.com', '$2y$10$wHvFdJO2QvovOi5CdV.DaO9gEVFwcj33IDsraowhGLXTzvDAHo1/i', '1231312', NULL, 1, 1604442071, 'default.jpg');
INSERT INTO `base_user` VALUES (2, 'Member', 'member@mail.com', '$2y$10$WalQK7voQX32ASasl.Nob.Gpn/fgRKbQaA2ABjEA.Ro9KoYHfifhS', '12', 'Pedagang sayur', 1, 1604633228, 'RRQ_Logo.png');
INSERT INTO `base_user` VALUES (3, 'user1', 'user1@gmail.com', '$2y$10$iideJsjQFL1D/VIjZZAOk.Sb7l9Rwv.Gp5eOiGgpLa4R3yRtP4ev.', '32903920', NULL, 1, 1604643601, 'default.jpg');
INSERT INTO `base_user` VALUES (4, 'zxcvb', 'zxcvb@zxcvb.com', '$2y$10$P6HDFUWCdTD1/cmhRjwJjeUdGNZ5m98U7Fp9TGZUkJdrQ1Y6KG3Me', '1231321', NULL, 1, 1604643867, 'default.jpg');
INSERT INTO `base_user` VALUES (5, 'cek123', 'cek@cek.com', '$2y$10$PdCK6j9DZ3Hz8fFoI3vIDOunxczo9YobJmzPV8KPg5M/B77wz2.Xu', '12312312', NULL, 1, 1604648507, 'default.jpg');
INSERT INTO `base_user` VALUES (6, 'uji123', 'uji@123.com', '$2y$10$aaxZrc3gwLTALVuKDzOtIO4d./EHKKiQbzEn.eeqGONn6WFU7E/eu', '123213', NULL, 1, 1604649062, 'default.jpg');
INSERT INTO `base_user` VALUES (7, '123uji', '123@uji.com', '$2y$10$vVszowS8C1kfc0BlUMN6TuXCLMpeeNsAoJ7Ta6TLLJFJacspL68mK', '21312', NULL, 1, 1604649243, 'default.jpg');
INSERT INTO `base_user` VALUES (8, 'pppppp', 'ppppp@ppp.ppp', '$2y$10$ku0OzJTbGglPrNuNjGcPHudSLnTSqrgdtq8zGBVRbQPUHDUl4yykS', '98132', NULL, 1, 1604649353, 'default.jpg');
INSERT INTO `base_user` VALUES (12, 'tesaja', 'tesajatesting2@gmail.com', '$2y$10$lk.nDt2ObSRq.qTREUrbYOLXZ12Xxvk77qlKYZZF5iGtuFrn0NwVu', '21312', 'kurir', 1, 1604918554, 'tesdas3.jpg');

-- ----------------------------
-- Table structure for base_userrole
-- ----------------------------
DROP TABLE IF EXISTS `base_userrole`;
CREATE TABLE `base_userrole`  (
  `id_userrole` int(11) NOT NULL AUTO_INCREMENT,
  `ur_id_user` int(11) NULL DEFAULT NULL,
  `ur_id_role` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_userrole`) USING BTREE,
  INDEX `foreignkey_id_user`(`ur_id_user`) USING BTREE COMMENT 'foreignkey_id_user',
  INDEX `foreignkey_role`(`ur_id_role`) USING BTREE COMMENT 'foreignkey_role',
  CONSTRAINT `base_userrole_ibfk_1` FOREIGN KEY (`ur_id_user`) REFERENCES `base_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `base_userrole_ibfk_2` FOREIGN KEY (`ur_id_role`) REFERENCES `base_role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of base_userrole
-- ----------------------------
INSERT INTO `base_userrole` VALUES (1, 1, 1);
INSERT INTO `base_userrole` VALUES (2, 2, 2);
INSERT INTO `base_userrole` VALUES (3, 3, 2);
INSERT INTO `base_userrole` VALUES (4, 4, 2);
INSERT INTO `base_userrole` VALUES (5, 5, 2);
INSERT INTO `base_userrole` VALUES (6, 6, 2);
INSERT INTO `base_userrole` VALUES (7, 7, 2);
INSERT INTO `base_userrole` VALUES (8, 8, 2);
INSERT INTO `base_userrole` VALUES (12, 12, 5);

-- ----------------------------
-- Table structure for t_berita
-- ----------------------------
DROP TABLE IF EXISTS `t_berita`;
CREATE TABLE `t_berita`  (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `judul_berita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ulasan_berita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tkat_id` int(11) NULL DEFAULT NULL,
  `gambar_berita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_berita` date NULL DEFAULT NULL,
  `isi_berita` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_berita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_berita
-- ----------------------------
INSERT INTO `t_berita` VALUES (2, 'tes swab', 'Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Eligendi expedita, sequi! Saepe voluptatum ab atque libero illo eaque esse rerum laboriosam consequuntur blanditiis, consectetur. Numquam nemo velit quaerat, aperiam consequuntur.', 1, 'foto_blue1.jpg', '2020-11-27', '<p>consectetur. Numquam nemo velit quaerat, aperiam consequuntur.</p>');
INSERT INTO `t_berita` VALUES (3, 'PT PT', 'buka  ggg', 1, 'kucing.png', '2020-11-25', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sed at similique qui voluptatibus quisquam exercitationem nam ut doloribus modi adipisci eum delectus, quidem dolorem hic sit? Hic, eligendi, maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam animi molestiae quibusdam ipsam, provident rerum quasi magnam, modi fugit laboriosam dicta facilis voluptas itaque, ratione! Ut enim, cupiditate nulla provident? Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Vitae ipsam magni quisquam similique, labore velit fugiat laborum quasi quidem, non, obcaecati consequuntur nulla laudantium suscipit accusamus dolore. Molestias, illum, sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sed at similique qui voluptatibus quisquam exercitationem nam ut doloribus modi adipisci eum delectus, quidem dolorem hic sit? Hic, eligendi, maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam animi molestiae quibusdam ipsam, provident rerum quasi magnam, modi fugit laboriosam dicta facilis voluptas itaque, ratione! Ut enim, cupiditate nulla provident? Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Vitae ipsam magni quisquam similique, labore velit fugiat laborum quasi quidem, non, obcaecati consequuntur nulla laudantium suscipit accusamus dolore. Molestias, illum, sapiente? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, sed at similique qui voluptatibus quisquam exercitationem nam ut doloribus modi adipisci eum delectus, quidem dolorem hic sit? Hic, eligendi, maxime! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam animi molestiae quibusdam ipsam, provident rerum quasi magnam, modi fugit laboriosam dicta facilis voluptas itaque, ratione! Ut enim, cupiditate nulla provident? Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Vitae ipsam magni quisquam similique, labore velit fugiat laborum quasi quidem, non, obcaecati consequuntur nulla laudantium suscipit accusamus dolore. Molestias, illum, sapiente?</p>');
INSERT INTO `t_berita` VALUES (5, 'penembakan FPi', 'terjadi bentrok antara aparat polisi dengan ormas fpi', 6, 'mega_merah.jpg', '2020-12-19', '<p>Pada tutorial kali ini kita akan membahas bagaimana cara membuat pagination&nbsp;<a href=\"https://codeigniter.com/\" rel=\"noopener noreferrer\" target=\"_blank\">codeigniter</a>&nbsp;dengan&nbsp;<a href=\"https://getbootstrap.com/\" rel=\"noopener noreferrer\" target=\"_blank\">bootstrap</a>, saya akan berusaha menjelaskan secara detail pembuatan pagination codeigniter ini. Didalam tutorial membuat pagination codeigniter dengan bootstrap ini saya menggunakan bootstrap versi 3 dan versi 4 dimana kita mengambil css dari CDN tanpa perlu mendownload file dari bootstrap.</p>\n\n<p>Pada tutorial kali ini kita akan membahas bagaimana cara membuat pagination&nbsp;<a href=\"https://codeigniter.com/\" rel=\"noopener noreferrer\" target=\"_blank\">codeigniter</a>&nbsp;dengan&nbsp;<a href=\"https://getbootstrap.com/\" rel=\"noopener noreferrer\" target=\"_blank\">bootstrap</a>, saya akan berusaha menjelaskan secara detail pembuatan pagination codeigniter ini. Didalam tutorial membuat pagination codeigniter dengan bootstrap ini saya menggunakan bootstrap versi 3 dan versi 4 dimana kita mengambil css dari CDN tanpa perlu mendownload file dari bootstrap.</p>\n\n<p>Pada tutorial kali ini kita akan membahas bagaimana cara membuat pagination&nbsp;<a href=\"https://codeigniter.com/\" rel=\"noopener noreferrer\" target=\"_blank\">codeigniter</a>&nbsp;dengan&nbsp;<a href=\"https://getbootstrap.com/\" rel=\"noopener noreferrer\" target=\"_blank\">bootstrap</a>, saya akan berusaha menjelaskan secara detail pembuatan pagination codeigniter ini. Didalam tutorial membuat pagination codeigniter dengan bootstrap ini saya menggunakan bootstrap versi 3 dan versi 4 dimana kita mengambil css dari CDN tanpa perlu mendownload file dari bootstrap.</p>');
INSERT INTO `t_berita` VALUES (6, 'covid 19 di amerika', 'terjasdi lonjakan positif covid 19 di amerika hingga saat ini mencapai 1 juta warga amerika psotif corona', 7, 'kucing4.png', '2020-12-19', '<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>&nbsp;</p>');
INSERT INTO `t_berita` VALUES (7, 'vaksin gratis', 'presiden joko widodo mengumumkan vaksin gratis kepad masyarakat', 6, 'overlapping-forms-background_23-2148677061.jpg', '2020-12-19', '<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>&nbsp;</p>');
INSERT INTO `t_berita` VALUES (8, 'sdfsa sadasda adasd saasdsaas', 'sadas asfa asas asdfsa adasfsaf', 6, 'kucing3.png', '2020-12-17', '<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>\n\n<p>Mengirim ke media, baik koran, majalah, majalah elektronik, jika tulisanmu berhasil &nbsp;dimuat dan melihat ada namamu terukir di sana, itu akan sangat menyenangkan! Belum lagi jika ada honor yang kamu terima. Ini akan lebih memacu semangatmu dalam menulis. Cobalah sesekali mengikuti lomba menulis, ini juga akan membuat kamu terus semangat menulis, berlatih dan mengetahui sejauh mana kemampuanmu.</p>');

-- ----------------------------
-- Table structure for t_karir
-- ----------------------------
DROP TABLE IF EXISTS `t_karir`;
CREATE TABLE `t_karir`  (
  `id_karir` int(11) NOT NULL AUTO_INCREMENT,
  `posisi_karir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi_karir` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `url_formapply` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_karir`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_karir
-- ----------------------------
INSERT INTO `t_karir` VALUES (3, 'sadsadsa asdsadsa', '<p>sacsa asdsac asfsa safsaf asfsa', 'http://bit.do/KarirPTWIB');
INSERT INTO `t_karir` VALUES (4, 'admin online shop', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore autem, soluta aperiam consequuntur omnis, dolorum qui atque corrupti. Voluptatum, voluptatem, aspernatur. Aliquid rem debitis provident odio cupiditate veritatis mollitia similique? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui fugit aliquam, sit nisi sed eligendi ipsum voluptates ipsa iure eum at aliquid debitis, voluptate incidunt. Modi placeat iure animi laboriosam.', 'http://bit.do/KarirPTWIB');

-- ----------------------------
-- Table structure for t_katalogfile
-- ----------------------------
DROP TABLE IF EXISTS `t_katalogfile`;
CREATE TABLE `t_katalogfile`  (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan_file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_file`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_katalogfile
-- ----------------------------
INSERT INTO `t_katalogfile` VALUES (8, 'file_1607565492.pdf', 'sadadas sadsadasdassad');
INSERT INTO `t_katalogfile` VALUES (9, '', 'coba');

-- ----------------------------
-- Table structure for t_kategoriberita
-- ----------------------------
DROP TABLE IF EXISTS `t_kategoriberita`;
CREATE TABLE `t_kategoriberita`  (
  `id_kategoriberita` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_berita` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategoriberita`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_kategoriberita
-- ----------------------------
INSERT INTO `t_kategoriberita` VALUES (1, 'pusat utara');
INSERT INTO `t_kategoriberita` VALUES (6, 'Nasional');
INSERT INTO `t_kategoriberita` VALUES (7, 'Inrernasional');

-- ----------------------------
-- Table structure for t_produk
-- ----------------------------
DROP TABLE IF EXISTS `t_produk`;
CREATE TABLE `t_produk`  (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `deskripsi_produk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_produk
-- ----------------------------
INSERT INTO `t_produk` VALUES (1, 'sdasda', 'asd.jpg', 'asdsa sfsa sadsafaf asfas dad saff ');
INSERT INTO `t_produk` VALUES (4, 'zzzzzzzzzzzzz', 'overlapping-forms-background_23-2148677061.jpg', '<p>zzzzzzzzzzz</p>');
INSERT INTO `t_produk` VALUES (5, 'sadadsa', 'logo_jamu.jpg', '<p>hasfewvwe</p>');
INSERT INTO `t_produk` VALUES (14, 'sasadsa sasada', 'drahmad.png', '<p>asdsaas</p>');
INSERT INTO `t_produk` VALUES (16, 'adasdsa', 'produk_1608516405.jpg', '<p>sadsadsa</p>');
INSERT INTO `t_produk` VALUES (17, 'sadasda', 'produk_1608516475.jpg', '<p>sadsadsa sadsa asdsa</p>');
INSERT INTO `t_produk` VALUES (18, 'adsa safsav safsa', 'produk_1608518003.jpg', '<p>saasfasf asfsa asfsafas afdsafsaf asdsad</p>');
INSERT INTO `t_produk` VALUES (19, 'cek', 'produk_1608516634.jpg', '<p>roket rp</p>');
INSERT INTO `t_produk` VALUES (20, '500 x 400', 'produk_1608517933.png', '<p>adsda saf df fgdfgdf dgfdgdf</p>');

-- ----------------------------
-- Table structure for t_profileperusahaan
-- ----------------------------
DROP TABLE IF EXISTS `t_profileperusahaan`;
CREATE TABLE `t_profileperusahaan`  (
  `id_profileperusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sejarah_perusahaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `visimisi_perusahaan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `struktur_organisasigambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `struktur_organisasideskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `deskripsi_singkat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `tanggal_beridiri` date NULL DEFAULT NULL,
  `gambar_perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `lokasi_gps` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `telepon_perusahaan` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat_perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email_perusahaan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `facebook_perusahaan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `twiter_perusahaan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `instagram_perusahaan` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `link_facebook` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `link_twiter` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `link_instagram` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `logo_perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_profileperusahaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_profileperusahaan
-- ----------------------------
INSERT INTO `t_profileperusahaan` VALUES (1, 'sadsadasda', '   Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Quae, unde sapiente odio cumque provident id est mollitia nihil ipsa harum numquam porro placeat exercitationem nostrum reprehenderit magnam maiores minima laborum.\r\n                        Lorem ipsum dolor sit, amet consectetur, adipisicing elit. Dolorum odio accusamus autem delectus dignissimos nam animi pariatur temporibus aperiam sint, inventore atque consequuntur. Impedit fuga saepe maxime distinctio itaque fugiat suscipit natus in minima dignissimos. Consequuntur porro dolores, voluptatem tempora quia nihil asperiores nisi fuga corporis ducimus eius eveniet nostrum eos dicta adipisci in est accusantium sit praesentium, nemo autem dolorum, soluta. Dolores a necessitatibus dicta perspiciatis hic sequi quae cupiditate assumenda praesentium, facilis eaque aliquam minus consectetur quo soluta saepe voluptatem, quos illum quam pariatur earum minima! Vero eveniet ullam aliquid vel voluptatibus cum earum rem autem, ea cumque architecto odio labore provident nulla eaque, modi ex, nobis? Tempore cum reiciendis nobis, dolores, libero, ratione perspiciatis, laborum consequuntur repellat nostrum accusantium voluptate fugit necessitatibus! Quos asperiores officiis nostrum! Repudiandae aliquam minus obcaecati consequatur soluta quis, officiis vel ut deleniti eligendi voluptatem quidem veritatis? Ducimus, eligendi dignissimos minima totam architecto autem molestias aliquid ea vitae explicabo, molestiae? Provident asperiores molestiae, culpa! Quod porro, ratione officia ipsum possimus, iure nisi beatae quos ad quibusdam autem labore qui magni commodi saepe, maxime praesentium fugiat totam tempora fugit suscipit? Necessitatibus velit adipisci doloremque, provident hic libero neque alias nihil voluptas aliquid, magnam, at non eaque voluptatum quasi eum voluptate debitis vero ducimus consequuntur quod, quia ut architecto similique praesentium. Ex est, et atque odit cum placeat, voluptatem esse ea. Debitis eos optio veritatis enim assumenda, doloribus, earum tempore ea quam facilis est cumque iste atque saepe provident odit! Sit deleniti, quia voluptates numquam commodi impedit dolor sed dignissimos quaerat consectetur modi nemo dolore suscipit debitis qui assumenda exercitationem rerum alias cupiditate voluptatum accusamus minima voluptatem! Soluta porro iste hic rerum dolore, vero laboriosam magni. Cupiditate veniam labore numquam deserunt cum explicabo vel voluptatem similique, amet. Fugiat consectetur aperiam, impedit molestiae eaque obcaecati totam mollitia vel cum, ut vero est. Tempora aspernatur molestiae repellat sed. Placeat laborum totam obcaecati consequuntur maxime, quae, tempore quibusdam blanditiis nam sed exercitationem perferendis ipsum asperiores numquam consectetur iure animi nulla quam nesciunt nostrum facere, ut quisquam. Perspiciatis nulla, incidunt pariatur. Quia voluptates perspiciatis dolorum excepturi culpa quisquam cupiditate, deleniti vitae dicta modi, obcaecati reprehenderit incidunt, eaque. Sint nisi vero vitae, nulla omnis tempora reiciendis. Cumque magni ullam, recusandae laboriosam dolores ipsa quas maiores dolorem magnam, officia placeat. Est perferendis unde exercitationem earum. Soluta illo facere natus sunt, itaque fugiat minima nostrum ab in distinctio quos, voluptates dolorum maiores quis incidunt, temporibus dolore molestiae doloremque magni ducimus rem rerum cumque commodi officia! Ipsam ratione voluptatem reiciendis id perferendis odit praesentium esse vitae sit amet fugiat pariatur deserunt earum, nisi eligendi ducimus libero maxime. Odit aspernatur, officia excepturi voluptatibus perferendis, reiciendis quod quibusdam consequuntur quos ullam neque pariatur eos in, recusandae eligendi deserunt sed facilis atque, eveniet impedit vero. Accusamus blanditiis dolores dignissimos explicabo asperiores. Voluptas, blanditiis, adipisci? Facilis, repudiandae, laborum! Minus libero accusantium maiores non consequatur fugiat nesciunt optio doloribus quis deleniti cumque ut aliquam nisi suscipit impedit incidunt fugit nostrum ad, dolorem at enim ex! Aliquid magnam assumenda quam incidunt reiciendis provident, dolorum eos, adipisci culpa maiores ullam! Laboriosam quam maxime, laudantium dolor. Ratione error maiores similique, iure? Illum, voluptas. Fugit quisquam corporis, nulla laboriosam voluptatem iusto, sapiente libero sunt, eveniet necessitatibus repudiandae delectus aspernatur hic ab. Dolores quaerat architecto, repellendus perferendis similique dignissimos natus mollitia consectetur distinctio voluptatum reprehenderit maxime consequatur repellat ullam labore eaque magni? Deserunt provident mollitia sit maxime eos. Officiis, ab laudantium ducimus recusandae dolorum consequatur illum ipsam inventore, neque quia. Eligendi, facilis. Adipisci quae, voluptas iusto mollitia? Recusandae ipsum modi, maxime. Eos dicta doloremque quod incidunt in dignissimos, laboriosam eligendi doloribus nulla ratione!', '<p>;lsakd;a lsadsa lsad;lsa sadsa sasasa apapun itu</p>', 'struktur.png', '<p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Quam maiores, nihil asperiores tempore? Hic voluptatem tempora maxime, inventore? Explicabo ipsam, nostrum quisquam animi libero rerum in tenetur hic perspiciatis possimus!<br>0powqkpowq saya</p>', 'sadsad asdsadsa asdsadsa', '2008-06-16', 'slider_1608619840.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028146.3740300732!2d106.48363116117032!3d-6.8638113590089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea7be066f6bd%3A0x7f6c8706aeb0386a!2sCIKEMA%20-%20Cibinong%20Kesohor%20Market!5e0!3m2!1sid!2sid!4v1608618246428!5m2!1sid!2sid', '324322343', 'jl aspal nomor 000 jakarta', 'cobachnologi@coba.com', 'facebook company', '@twiter', '@instagram', 'https://web.facebook.com/?_rdc=1&_rdr', 'https://twitter.com/twitter', 'https://fontawesome.com/icons/instagram', 'logo_1608619715.png');

-- ----------------------------
-- Table structure for t_slider
-- ----------------------------
DROP TABLE IF EXISTS `t_slider`;
CREATE TABLE `t_slider`  (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `judul_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `minitext_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gambar_slider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `aktif_slider` int(1) NULL DEFAULT NULL,
  PRIMARY KEY (`id_slider`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_slider
-- ----------------------------
INSERT INTO `t_slider` VALUES (12, 'eskrim', 'eskrim', 'slider_1608519932.png', 1);
INSERT INTO `t_slider` VALUES (17, 'gagsasa', 'dasdsadsaasd', 'slider_1608518649.jpg', 1);
INSERT INTO `t_slider` VALUES (18, 'asdad', 'asdsadas', 'slider_1608520214.jpg', 1);
INSERT INTO `t_slider` VALUES (19, 'sadsadsa', 'sadsad', 'slider_1608520261.jpg', 1);

-- ----------------------------
-- Table structure for t_subkatalogfile
-- ----------------------------
DROP TABLE IF EXISTS `t_subkatalogfile`;
CREATE TABLE `t_subkatalogfile`  (
  `id_subfile` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subfile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `keterangan_subfile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tsf_id_file` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_subfile`) USING BTREE,
  INDEX `fkey`(`tsf_id_file`) USING BTREE COMMENT 'foreignkey tabel file',
  CONSTRAINT `fkey` FOREIGN KEY (`tsf_id_file`) REFERENCES `t_katalogfile` (`id_file`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of t_subkatalogfile
-- ----------------------------
INSERT INTO `t_subkatalogfile` VALUES (5, 'file_1607565898.docx', 'sub katalaog file', 8);

SET FOREIGN_KEY_CHECKS = 1;
