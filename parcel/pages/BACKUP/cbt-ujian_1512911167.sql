
/*---------------------------------------------------------------
  SQL DB BACKUP 10.12.2017 20:06 
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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `cbt_soal` VALUES   ('1','FISIKA','FISIKA01','1','','','1','','CONTOH SOAL 1','','','ahm-logo.png','AA','BB','CC','DD','EE','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('2','FISIKA','FISIKA01','1','','','2','','CONTOH SOAL 2','','','','AA','BB','CC','DD','EE','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('3','FISIKA','FISIKA01','1','','','3','','CONTOH SOAL 3','','','','AA','BB','CC','DD','EE','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('4','FISIKA','FISIKA01','1','','','4','','CONTOH SOAL 4','','','','AA','BB','CC','DD','EE','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('5','FISIKA','FISIKA01','1','','','5','','CONTOH SOAL 5','','','','AA','BB','CC','DD','EE','','','','','','1','1','A','Y','','');

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
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_jawaban` VALUES   ('1','1','4','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','3','4','2','5','1','A','','','XA','3','0','0','','0','0','0','0','2017-12-10','08:14:11','1','U001','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('2','2','5','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','4','1','2','5','3','B','','','XB','1','1','0','','0','0','0','0','2017-12-10','08:14:14','1','U001','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('3','3','1','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','3','2','4','5','1','A','','','XA','3','0','0','','0','0','0','0','2017-12-10','08:14:17','1','U001','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('4','4','2','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','2','5','1','4','3','C','','','XC','1','1','0','','0','0','0','0','2017-12-10','08:14:20','1','U001','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('5','5','3','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','5','2','4','1','3','A','','','XA','5','0','0','','0','0','0','0','2017-12-10','08:14:22','1','U001','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('6','1','3','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','5','3','1','2','4','A','','','XA','5','0','0','','0','0','0','0','2017-12-10','08:14:47','1','U002','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('7','2','1','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','4','3','2','1','5','A','','','XA','4','0','0','','0','0','0','0','2017-12-10','08:14:49','1','U002','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('8','3','5','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','5','3','2','1','4','A','','','XA','5','0','0','','0','0','0','0','2017-12-10','08:14:51','1','U002','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('9','4','4','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','4','1','3','5','2','A','','','XA','4','0','0','','0','0','0','0','2017-12-10','08:14:54','1','U002','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('10','5','2','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','1','2','3','5','4','A','','','XA','1','1','0','','0','0','0','0','2017-12-10','08:14:56','1','U002','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('11','1','2','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','3','4','2','5','1','A','','','XA','3','0','0','','0','0','0','0','2017-12-10','08:21:36','1','U003','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('12','2','1','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','1','2','4','5','3','A','','','XA','1','1','0','','0','0','0','0','2017-12-10','08:21:39','1','U003','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('13','3','3','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','2','4','3','5','1','B','','','XB','4','0','0','','0','0','0','0','2017-12-10','08:21:41','1','U003','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('14','4','4','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','3','1','4','2','5','C','','','XC','4','0','0','','0','0','0','0','2017-12-10','08:21:43','1','U003','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('15','5','5','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','4','1','2','5','3','D','','','XD','5','0','0','','0','0','0','0','2017-12-10','08:21:45','1','U003','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('16','1','1','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','5','2','1','3','4','A','','','XA','5','0','0','','0','0','0','0','2017-12-10','08:23:54','1','U004','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('17','2','5','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','1','5','3','4','2','B','','','XB','5','0','0','','0','0','0','0','2017-12-10','08:23:56','1','U004','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('18','3','4','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','5','4','1','3','2','B','','','XB','4','0','0','','0','0','0','0','2017-12-10','08:23:58','1','U004','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('19','4','2','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','5','3','2','4','1','A','','','XA','5','0','0','','0','0','0','0','2017-12-10','08:24:01','1','U004','OBAGC','2017/2018','1','','','','HSNM3');
INSERT INTO `cbt_jawaban` VALUES ('20','5','3','UH','XITKJ','TKJ','FISIKA','FISIKA01','1','OBAGC','3','1','4','2','5','B','','','XB','1','1','0','','0','0','0','0','2017-12-10','08:24:03','1','U004','OBAGC','2017/2018','1','','','','HSNM3');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_siswa_ujian` VALUES   ('1','U004','','XITKJ','FISIKA','FISIKA01','5','0','5','2017-12-10 08:24:07','08:13:00','08:23:52','08:24:03','','00:10:00','00:00:00','OBAGC','00:00:00','','','1','9','HSNM3','::1');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_paketsoal` VALUES   ('1','ALL','SMK','ALL','FISIKA','','0','0','5','0','100','0','FISIKA01','5','5','0','','admin','','T','N','2017-12-10','HSNM3');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_ujian` VALUES   ('1','UH','1','','ALL','ALL','FISIKA','FISIKA2','','5','10','5','5','Y','2017-12-10','07:18:00','07:30:00','','00:10:00','0','HXSTL','admin','','2017/2018','9','','','','','','1','HSNM3');
INSERT INTO `cbt_ujian` VALUES ('2','UH','1','','ALL','ALL','FISIKA','FISIKA01','','5','5','5','0','Y','2017-12-10','08:13:00','08:25:00','','00:10:00','0','OBAGC','admin','','2017/2018','1','','','','','','1','HSNM3');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
INSERT INTO `cbt_nilai` VALUES   ('1','U001','151610001','UH','OBAGC','2017-12-10','5','2','3','40','100','0','0','40','FISIKA','XITKJ','FISIKA01','2016/2017','1','HSNM3','');
INSERT INTO `cbt_nilai` VALUES ('2','U002','151610002','UH','OBAGC','2017-12-10','5','1','4','20','100','0','0','20','FISIKA','XITKJ','FISIKA01','2016/2017','1','HSNM3','');
INSERT INTO `cbt_nilai` VALUES ('3','U003','151610003','UH','HXSTL','2017-12-10','10','1','4','20','70','30','25','21.5','FISIKA','XITKJ','FISIKA2','2016/2017','1','HSNM3','');
