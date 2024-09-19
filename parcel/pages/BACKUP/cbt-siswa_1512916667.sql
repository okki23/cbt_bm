
/*---------------------------------------------------------------
  SQL DB BACKUP 10.12.2017 21:37 
  HOST: localhost:3306
  DATABASE: dbpusat
  TABLES: cbt_kelas,cbt_mapel,cbt_siswa
  ---------------------------------------------------------------*/

/*---------------------------------------------------------------
  TABLE: `cbt_kelas`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_kelas`;
CREATE TABLE `cbt_kelas` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XKodeLevel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XNamaKelas` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `XKodeJurusan` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XStatusKelas` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XKodeSekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_kelas` VALUES   ('1','XI','XITKJ','TKJ','XITKJ','','HSNM3');

/*---------------------------------------------------------------
  TABLE: `cbt_mapel`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_mapel`;
CREATE TABLE `cbt_mapel` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XKodeKelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XNamaMapel` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `XTglBuat` date NOT NULL,
  `XPersenUH` int(11) NOT NULL,
  `XPersenUTS` int(11) NOT NULL,
  `XPersenUAS` int(11) NOT NULL,
  `XKKM` float NOT NULL,
  `XMapelAgama` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `XKodeSekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_mapel` VALUES   ('1','','FISIKA','FISIKA','0000-00-00','0','100','0','70','N','HSNM3');

/*---------------------------------------------------------------
  TABLE: `cbt_siswa`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_siswa`;
CREATE TABLE `cbt_siswa` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XNomerUjian` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `XNIK` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeJurusan` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XNamaSiswa` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeLevel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XJenisKelamin` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XPassword` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `XFoto` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `XAgama` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `XSetId` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XSesi` int(11) NOT NULL,
  `XRuang` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `XKodeSekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XPilihan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XSemester` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `XThnajar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `XTlahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `XTTlahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `Xnkel` int(18) NOT NULL,
  `Xnisn` int(15) NOT NULL,
  `Xnayah` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Xpayah` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Xnibu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Xpibu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Xnwali` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Xpwali` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_siswa` VALUES   ('1','U001','151610001','TKJ','ANGGI GIAN SAPITRI','XITKJ','XI','P','A1','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('2','U002','151610002','TKJ','CINDY APRIANA','XITKJ','XI','P','A2','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('3','U003','151610003','TKJ','DWI LESTARI','XITKJ','XI','P','A3','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('4','U004','151610004','TKJ','EBIH','XITKJ','XI','P','A4','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('5','U005','151610005','TKJ','ELIS SEPTRIANI','XITKJ','XI','P','A5','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('6','U006','151610006','TKJ','EUIS SUSILAWATI','XITKJ','XI','P','A6','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('7','U007','151610007','TKJ','FAHMI ARNI','XITKJ','XI','P','A7','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('8','U008','151610008','TKJ','FITRI WIDIASARI','XITKJ','XI','P','A8','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('9','U009','151610009','TKJ','GABY CANTIKA OKTAVIA','XITKJ','XI','P','A9','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('10','U010','151610010','TKJ','HAENA HERMAWATI Y.','XITKJ','XI','P','A10','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('11','U011','151610011','TKJ','KARLINA','XITKJ','XI','P','A11','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('12','U012','151610012','TKJ','KURNIAWATI','XITKJ','XI','P','A12','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('13','U013','151610013','TKJ','LADINA AL ZANNAH C.','XITKJ','XI','P','A13','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('14','U014','151610014','TKJ','LARAS AYU ASMANIH','XITKJ','XI','P','A14','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('15','U015','151610015','TKJ','LASTRI SEPTRIANI','XITKJ','XI','P','A15','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('16','U016','151610016','TKJ','LISAH FITRI KURNIA','XITKJ','XI','P','A16','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('17','U017','151610018','TKJ','LUTFI WISTI NANDASARI','XITKJ','XI','P','A17','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('18','U018','151610019','TKJ','MAYA KARMANIH','XITKJ','XI','P','A18','','ISLAM','2017/2018','1','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('19','U019','151610020','TKJ','MAYANG SARI','XITKJ','XI','P','A19','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('20','U020','151610021','TKJ','MAYANG SARI WATI','XITKJ','XI','P','A20','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('21','U021','151610022','TKJ','MEGAWATI','XITKJ','XI','P','A21','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('22','U022','151610023','TKJ','NARSIH AGUS PRIYANTI','XITKJ','XI','P','A22','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('23','U023','151610024','TKJ','NUR AINA','XITKJ','XI','P','A23','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('24','U024','151610025','TKJ','PITA KAPUTRI','XITKJ','XI','P','A24','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('25','U025','151610026','TKJ','PUTRI AYU LESTARI','XITKJ','XI','P','A25','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('26','U026','151610027','TKJ','PUTRI HAGITA','XITKJ','XI','P','A26','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('27','U027','151610028','TKJ','RASTI','XITKJ','XI','P','A27','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('28','U028','151610029','TKJ','RIZKY KHOFIFAH','XITKJ','XI','P','A28','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('29','U029','151610030','TKJ','SAHRONI','XITKJ','XI','P','A29','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('30','U030','151610031','TKJ','SAMAH MAESAROH','XITKJ','XI','P','A30','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('31','U031','151610032','TKJ','SARMILA FEBYOLA P.','XITKJ','XI','P','A31','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('32','U032','151610033','TKJ','SILVI DAMAYANTI','XITKJ','XI','P','A32','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('33','U033','151610034','TKJ','SITI KARTINI','XITKJ','XI','P','A33','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('34','U034','151610035','TKJ','SITI MASITOH','XITKJ','XI','P','A34','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('35','U035','151610036','TKJ','SUCI SELAWATI','XITKJ','XI','P','A35','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('36','U036','151610037','TKJ','TANIA PRATIKA','XITKJ','XI','P','A36','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('37','U037','151610038','TKJ','TARSIMAH DEWI','XITKJ','XI','P','A37','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('38','U038','151610039','TKJ','TRISNA SHALAMSHAH','XITKJ','XI','P','A38','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
INSERT INTO `cbt_siswa` VALUES ('39','U039','151610040','TKJ','YOGA MAULANA ATMAJA','XITKJ','XI','P','A39','','ISLAM','2017/2018','2','UNBK1','HSNM3','','1','2017/2018','','','0','0','','','','','','');
