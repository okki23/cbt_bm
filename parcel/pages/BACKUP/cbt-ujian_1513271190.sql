
/*---------------------------------------------------------------
  SQL DB BACKUP 15.12.2017 00:06 
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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `cbt_soal` VALUES   ('1','FISIKA','fisika','1','','','1','','SOAL PG 4','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('2','FISIKA','fisika','1','','','2','','SOAL PG 3','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('3','FISIKA','fisika','1','','','3','','SOAL PG 2','','','','A','B','C','D','','','','','','','2','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('4','FISIKA','fisika','1','','','4','','CONTOH SOAL PILIHAN GANDA 1','','','ahm-logo.png','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('5','FISIKA','fisika','1','','','5','','SOAL PG 5','','','','A','B','C','D','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('6','FISIKA','fisika','2','','','6','','SOAL ESSAI 1','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('7','FISIKA','fisika','2','','','7','','SOAL ESSAI 2','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('8','FISIKA','fisika','2','','','8','','SOAL ESSAI 3','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('9','FISIKA','fisika','2','','','9','','SOAL ESSAI 4','','','','','','','','','','','','','','u','1','A','','','');
INSERT INTO `cbt_soal` VALUES ('10','FISIKA','fisika','2','','','10','','SOAL ESSAI 5','','','','','','','','','','','','','','u','1','A','','','');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_jawaban` VALUES   ('1','1','1','UH','XITKJ','TKJ','FISIKA','fisika','1','EIKLW','1','2','4','3','0','A','','','XA','1','1','0','','0','0','0','0','2017-12-14','21:13:40','1','U001','EIKLW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('2','2','3','UH','XITKJ','TKJ','FISIKA','fisika','1','EIKLW','2','3','1','4','0','B','','','XB','3','0','0','','0','0','0','0','2017-12-14','21:13:42','2','U001','EIKLW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('3','3','4','UH','XITKJ','TKJ','FISIKA','fisika','1','EIKLW','1','3','2','4','0','A','','','XA','1','1','0','','0','0','0','0','2017-12-14','21:13:44','1','U001','EIKLW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('4','4','2','UH','XITKJ','TKJ','FISIKA','fisika','1','EIKLW','3','4','2','1','0','C','','','XC','2','0','0','','0','0','0','0','2017-12-14','21:13:46','1','U001','EIKLW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('5','5','5','UH','XITKJ','TKJ','FISIKA','fisika','1','EIKLW','1','4','3','2','0','A','','','XA','1','1','0','','0','0','0','0','2017-12-14','21:13:48','1','U001','EIKLW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('6','6','8','UH','XITKJ','TKJ','FISIKA','fisika','2','EIKLW','0','0','0','0','0','','6','FGFGFGF','','','0','0','','0','0','0','0','2017-12-14','21:13:52','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('7','7','9','UH','XITKJ','TKJ','FISIKA','fisika','2','EIKLW','0','0','0','0','0','','7','SDSDSDS','','','0','0','','0','0','0','0','2017-12-14','21:13:57','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('8','8','10','UH','XITKJ','TKJ','FISIKA','fisika','2','EIKLW','0','0','0','0','0','','8','SDSDSDS','','','0','0','','0','0','0','0','2017-12-14','21:13:59','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('9','9','7','UH','XITKJ','TKJ','FISIKA','fisika','2','EIKLW','0','0','0','0','0','','9','SDSDSDSD','','','0','0','','0','0','0','0','2017-12-14','21:14:03','','U001','','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('10','10','6','UH','XITKJ','TKJ','FISIKA','fisika','2','EIKLW','0','0','0','0','0','','10','SDSDSDSD','','','0','0','','0','0','0','0','2017-12-14','21:14:06','','U001','','2017/2018','1','','','','');

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
INSERT INTO `cbt_siswa_ujian` VALUES   ('1','U001','','XITKJ','FISIKA','fisika','5','5','10','2017-12-14 21:14:10','21:12:00','21:13:36','21:14:06','','00:05:00','00:00:00','EIKLW','00:00:00','','','1','9','','::1');

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
INSERT INTO `cbt_paketsoal` VALUES   ('1','ALL','SMK','ALL','FISIKA','','0','0','5','5','50','50','fisika','4','10','0','','amir','','T','Y','2017-12-14','HSNM3');

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_ujian` VALUES   ('1','UH','1','','ALL','ALL','FISIKA','fisika','','4','10','5','5','','2017-12-14','21:12:00','21:15:00','','00:05:00','0','EIKLW','amir','','2017/2018','1','','','','','','1','');

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
INSERT INTO `cbt_nilai` VALUES   ('1','U001','151610001','UH','EIKLW','2017-12-14','10','3','2','60','50','50','0','60','FISIKA','XITKJ','fisika','2016/2017','1','','');
