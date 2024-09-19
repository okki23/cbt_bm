
/*---------------------------------------------------------------
  SQL DB BACKUP 14.12.2017 21:10 
  HOST: localhost:3306
  DATABASE: dbpusat
  TABLES: cbt_soal,cbt_jawaban,cbt_siswa_ujian,cbt_paketsoal,cbt_ujian,cbt_nilai
  ---------------------------------------------------------------*/

/*---------------------------------------------------------------
  TABLE: `cbt_soal`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_soal`;
CREATE TABLE `cbt_soal` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XKodeMapel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XKodeSoal` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `XJenisSoal` int(11) NOT NULL DEFAULT '1',
  `XKodeKelas` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XLevel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XNomerSoal` int(11) NOT NULL,
  `XRagu` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XTanya` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XAudioTanya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XVideoTanya` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XGambarTanya` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XJawab1` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XJawab2` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XJawab3` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XJawab4` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XJawab5` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `XGambarJawab1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XGambarJawab2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XGambarJawab3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XGambarJawab4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XGambarJawab5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XKunciJawaban` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XKategori` int(11) NOT NULL DEFAULT '1',
  `XAcakSoal` enum('A','T') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `XAcakOpsi` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XAgama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XKodeSekolah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `cbt_soal` VALUES   ('41','FISIKA','FISIKA01','1','','','4','','SOAL PG 4','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('40','FISIKA','FISIKA01','1','','','3','','SOAL PG 3','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('39','FISIKA','FISIKA01','1','','','2','','SOAL PG 2','','','','A','B','C','D','','','','','','','2','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('65','<br />\r\n<b','fisika','2','','','8','','SOAL ESSAI 3','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('38','FISIKA','FISIKA01','1','','','1','','CONTOH SOAL PILIHAN GANDA 1','','','ahm-logo.png','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('64','<br />\r\n<b','fisika','2','','','7','','SOAL ESSAI 2','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('61','<br />\r\n<b','fisika','1','','','4','','CONTOH SOAL PILIHAN GANDA 1','','','ahm-logo.png','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('63','<br />\r\n<b','fisika','2','','','6','','SOAL ESSAI 1','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('62','<br />\r\n<b','fisika','1','','','5','','SOAL PG 5','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('59','<br />\r\n<b','fisika','1','','','2','','SOAL PG 3','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('60','<br />\r\n<b','fisika','1','','','3','','SOAL PG 2','','','','A','B','C','D','','','','','','','2','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('58','<br />\r\n<b','fisika','1','','','1','','SOAL PG 4','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('42','FISIKA','FISIKA01','1','','','5','','SOAL PG 5','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('43','FISIKA','FISIKA01','2','','','6','','SOAL ESSAI 1','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('44','FISIKA','FISIKA01','2','','','7','','SOAL ESSAI 2','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('45','FISIKA','FISIKA01','2','','','8','','SOAL ESSAI 3','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('46','FISIKA','FISIKA01','2','','','9','','SOAL ESSAI 4','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('47','FISIKA','FISIKA01','2','','','10','','SOAL ESSAI 5','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('48','FISIKA','FISIKA02','2','','','10','','soal essai 10','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('49','FISIKA','FISIKA02','2','','','9','','soal essai 9','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('50','FISIKA','FISIKA02','2','','','8','','soal essai 8','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('51','FISIKA','FISIKA02','2','','','7','','soal essai 7','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('52','FISIKA','FISIKA02','2','','','4','','soal essai 4','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('53','FISIKA','FISIKA02','2','','','5','','soal essai 5','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('54','FISIKA','FISIKA02','2','','','6','','soal essai 6','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('55','FISIKA','FISIKA02','2','','','3','','soal essai 3','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('56','FISIKA','FISIKA02','2','','','2','','soal essai 2','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('57','FISIKA','FISIKA02','2','','','1','','soal essai 1','','','gambar1.jpg','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('66','<br />\r\n<b','fisika','2','','','9','','SOAL ESSAI 4','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('67','<br />\r\n<b','fisika','2','','','10','','SOAL ESSAI 5','','','','','','','','','','','','','','u','1','A','','','');

/*---------------------------------------------------------------
  TABLE: `cbt_jawaban`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_jawaban`;
CREATE TABLE `cbt_jawaban` (
  `Urutan` int(11) NOT NULL AUTO_INCREMENT,
  `Urut` int(11) NOT NULL,
  `XNomerSoal` int(11) NOT NULL,
  `XKodeUjian` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XKodeJurusan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XJenisSoal` int(11) NOT NULL,
  `XTokenUjian` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `XA` int(11) NOT NULL,
  `XB` int(11) NOT NULL,
  `XC` int(11) NOT NULL,
  `XD` int(11) NOT NULL,
  `XE` int(11) NOT NULL,
  `XJawaban` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XTemp` text COLLATE latin1_general_ci NOT NULL,
  `XJawabanEsai` text COLLATE latin1_general_ci NOT NULL,
  `XKodeJawab` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `XNilaiJawab` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XNilai` int(11) NOT NULL,
  `XNilaiEsai` float NOT NULL,
  `XRagu` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XMulai` float NOT NULL,
  `XPutar` int(11) NOT NULL,
  `XMulaiV` float NOT NULL,
  `XPutarV` int(11) NOT NULL,
  `XTglJawab` date NOT NULL,
  `XJamJawab` time NOT NULL,
  `XKunciJawaban` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XUserJawab` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `Campur` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `XSetId` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XSemester` int(1) NOT NULL,
  `XUserPeriksa` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `XTglPeriksa` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XJamPeriksa` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `XKodeSekolah` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urutan`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_jawaban` VALUES   ('30','10','4','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','10','AAAAAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:52','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('23','3','10','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','3','AAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:08','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('22','2','7','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','2','BBBB','','','0','0','','0','0','0','0','2017-12-14','12:34:03','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('29','9','1','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','9','AAAAAAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:43','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('28','8','5','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','8','AAAAAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:30','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('27','7','9','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','7','AAAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:24','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('26','6','6','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','6','AAAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:21','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('25','5','8','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','5','AAAAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:16','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('24','4','2','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','4','AAAAA','','','0','0','','0','0','0','0','2017-12-14','12:34:12','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('21','1','3','UTS','XITKJ','TKJ','FISIKA','FISIKA02','2','DSYUQ','0','0','0','0','0','','1','AAA','','','0','0','','0','0','0','0','2017-12-14','12:33:58','','U001','','2017/2018','1','','','','');

/*---------------------------------------------------------------
  TABLE: `cbt_siswa_ujian`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_siswa_ujian`;
CREATE TABLE `cbt_siswa_ujian` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XNomerUjian` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `XNISN` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XPilGanda` int(11) NOT NULL,
  `XEsai` int(11) NOT NULL,
  `XJumSoal` int(11) NOT NULL,
  `XTglUjian` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `XJamUjian` time NOT NULL,
  `XMulaiUjian` time NOT NULL,
  `XLastUpdate` time NOT NULL,
  `XSisaWaktu` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `XLamaUjian` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `XTargetUjian` time NOT NULL,
  `XTokenUjian` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `XSelesaiUjian` time NOT NULL,
  `XSetId` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeUjian` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XSesi` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `XStatusUjian` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XKodeSekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XGetIP` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_siswa_ujian` VALUES   ('3','U001','','XITKJ','FISIKA','FISIKA02','0','10','10','2017-12-14 12:35:09','12:29:00','12:30:32','12:34:52','','00:05:00','00:00:00','DSYUQ','00:00:00','','','1','9','','::1');

/*---------------------------------------------------------------
  TABLE: `cbt_paketsoal`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_paketsoal`;
CREATE TABLE `cbt_paketsoal` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XKodeKelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XLevel` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `XKodeJurusan` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XPaketSoal` text COLLATE latin1_general_ci NOT NULL,
  `XSesi` int(11) NOT NULL DEFAULT '1',
  `XJenisSoal` int(11) NOT NULL,
  `XPilGanda` int(11) NOT NULL,
  `XEsai` int(11) NOT NULL,
  `XPersenPil` int(11) NOT NULL,
  `XPersenEsai` int(11) NOT NULL,
  `XKodeSoal` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XJumPilihan` int(11) NOT NULL DEFAULT '5',
  `XJumSoal` int(11) NOT NULL,
  `JumUjian` int(11) NOT NULL,
  `XAcakSoal` char(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `XGuru` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `XSetId` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XSemua` enum('Y','T') COLLATE latin1_general_ci NOT NULL DEFAULT 'T',
  `XStatusSoal` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `XTglBuat` date NOT NULL,
  `XKodeSekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urut`),
  KEY `Urut` (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_paketsoal` VALUES   ('16','ALL','SMK','ALL','FISIKA','','0','0','5','5','50','100','fisika','4','10','0','','amir','','T','Y','2017-12-14','HSNM3');
INSERT INTO `cbt_paketsoal` VALUES ('14','ALL','SMK','ALL','FISIKA','','0','0','5','5','70','30','FISIKA01','4','10','0','','admin','','T','N','2017-12-12','HS9FC');
INSERT INTO `cbt_paketsoal` VALUES ('15','ALL','SMK','ALL','FISIKA','','1','0','0','10','0','100','FISIKA02','4','10','0','Y','admin','','T','Y','2017-12-12','HSNM3');

/*---------------------------------------------------------------
  TABLE: `cbt_ujian`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_ujian`;
CREATE TABLE `cbt_ujian` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XKodeUjian` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XSemester` int(11) NOT NULL,
  `XLevel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeKelas` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeJurusan` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeMapel` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XKodeSoal` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XLambat` enum('0','1') COLLATE latin1_general_ci NOT NULL,
  `XJumPilihan` int(11) NOT NULL,
  `XJumSoal` int(11) NOT NULL,
  `XPilGanda` int(11) NOT NULL,
  `XEsai` int(11) NOT NULL,
  `XAcakSoal` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XTglUjian` date NOT NULL,
  `XJamUjian` time NOT NULL,
  `XBatasMasuk` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `XSisaWaktu` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `XLamaUjian` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `XIdleTime` int(11) NOT NULL,
  `XTokenUjian` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `XGuru` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `XTglBuat` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XSetId` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `XStatusUjian` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `XProktor` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `XNIPProktor` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `XPengawas` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `XNIPPengawas` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `XCatatan` text COLLATE latin1_general_ci NOT NULL,
  `XSesi` varchar(11) COLLATE latin1_general_ci NOT NULL,
  `XKodeSekolah` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_ujian` VALUES   ('3','UTS','1','','ALL','ALL','FISIKA','FISIKA02','','4','10','0','10','Y','2017-12-14','12:29:00','12:35:00','','00:05:00','0','DSYUQ','admin','','2017/2018','1','','','','','','1','');
INSERT INTO `cbt_ujian` VALUES ('4','UH','1','','ALL','ALL','FISIKA','fisika','','4','10','5','5','','2017-12-14','21:07:00','21:10:00','','00:05:00','0','TFLGE','amir','','2017/2018','1','','','','','','1','');

/*---------------------------------------------------------------
  TABLE: `cbt_nilai`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_nilai`;
CREATE TABLE `cbt_nilai` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XNomerUjian` varchar(20) NOT NULL,
  `XNIK` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `XKodeUjian` varchar(10) NOT NULL,
  `XTokenUjian` varchar(5) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `XTgl` date NOT NULL,
  `XJumSoal` int(11) NOT NULL,
  `XBenar` int(11) NOT NULL,
  `XSalah` int(11) NOT NULL,
  `XNilai` int(11) NOT NULL,
  `XPersenPil` float NOT NULL,
  `XPersenEsai` float NOT NULL,
  `XEsai` float NOT NULL,
  `XTotalNilai` float NOT NULL,
  `XKodeMapel` varchar(10) NOT NULL,
  `XKodeKelas` varchar(10) NOT NULL,
  `XKodeSoal` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `XSetId` varchar(10) NOT NULL,
  `XSemester` int(11) NOT NULL,
  `XKodeSekolah` varchar(50) NOT NULL,
  `XStatus` varchar(5) NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
INSERT INTO `cbt_nilai` VALUES   ('1','U001','151610001','UTS','DSYUQ','2017-12-14','10','0','0','0','0','100','0','0','FISIKA','XITKJ','FISIKA02','2016/2017','1','','');
