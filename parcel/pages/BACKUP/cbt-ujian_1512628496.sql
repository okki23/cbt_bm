
/*---------------------------------------------------------------
  SQL DB BACKUP 07.12.2017 13:34 
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `cbt_soal` VALUES   ('1','KIMIA','KIMIAXI','1','','','1','','SOAL 1','','','','JAWAB 1','JAWAB 2','JAWAB 3','JAWAB 4','','','','','','','3','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('2','KIMIA','KIMIAXI','1','','','2','','SOAL 2','','','','JAWAB SATU','JAWAB DUA','JAWAB TIGA','JAWAB 4','','','','','','','4','1','A','Y','','');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_jawaban` VALUES   ('1','1','2','UH','XITKJ','TKJ','KIMIA','KIMIAXI','1','FREMO','2','4','1','3','0','B','','','XB','4','1','0','','0','0','0','0','2017-12-06','07:31:40','4','U001','FREMO','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('2','2','1','UH','XITKJ','TKJ','KIMIA','KIMIAXI','1','FREMO','4','3','2','1','0','B','','','XB','3','1','0','','0','0','0','0','2017-12-06','07:31:36','3','U001','FREMO','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('3','1','1','UH','XITKJ','TKJ','KIMIA','KIMIAXI','1','YJCZW','2','1','3','4','0','A','','','XA','2','0','0','','0','0','0','0','2017-12-06','11:17:18','3','U002','YJCZW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('4','2','2','UH','XITKJ','TKJ','KIMIA','KIMIAXI','1','YJCZW','3','2','4','1','0','B','','','XB','2','0','0','','0','0','0','0','2017-12-06','11:17:16','4','U002','YJCZW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('5','1','2','UH','XITKJ','TKJ','KIMIA','KIMIAXI','1','YJCZW','4','2','1','3','0','A','','','XA','4','1','0','','0','0','0','0','2017-12-06','12:30:09','4','U003','YJCZW','2017/2018','1','','','','');
INSERT INTO `cbt_jawaban` VALUES ('6','2','1','UH','XITKJ','TKJ','KIMIA','KIMIAXI','1','YJCZW','1','2','3','4','0','C','','','XC','3','1','0','','0','0','0','0','2017-12-06','12:30:11','3','U003','YJCZW','2017/2018','1','','','','');

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
INSERT INTO `cbt_siswa_ujian` VALUES   ('1','U001','','XITKJ','KIMIA','KIMIAXI','20','0','2','2017-12-06 07:32:07','07:29:00','07:31:04','07:31:40','','00:20:00','00:00:00','FREMO','00:00:00','','','1','9','','::1');
INSERT INTO `cbt_siswa_ujian` VALUES ('2','U002','','XITKJ','KIMIA','KIMIAXI','20','0','2','2017-12-06 11:17:32','11:04:00','11:14:11','11:17:18','','00:20:00','00:00:00','YJCZW','00:00:00','','','1','9','','::1');
INSERT INTO `cbt_siswa_ujian` VALUES ('3','U003','','XITKJ','KIMIA','KIMIAXI','20','0','2','2017-12-06 12:30:20','11:04:00','12:21:52','12:30:11','','00:20:00','00:00:00','YJCZW','00:00:00','','','1','9','','::1');

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
INSERT INTO `cbt_paketsoal` VALUES   ('1','ALL','SMK','ALL','KIMIA','','0','0','20','0','100','0','KIMIAXI','4','20','0','','admin','','T','Y','2017-12-06','HSNM3');

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
INSERT INTO `cbt_ujian` VALUES   ('1','UH','1','','ALL','ALL','KIMIA','KIMIAXI','','4','2','20','0','','2017-12-06','07:29:00','07:50:00','','00:20:00','0','FREMO','admin','','2017/2018','9','','','','','','1','');
INSERT INTO `cbt_ujian` VALUES ('2','UH','1','','ALL','ALL','KIMIA','KIMIAXI','','4','2','20','0','','2017-12-06','11:04:00','11:30:00','','00:20:00','0','YJCZW','admin','','2017/2018','1','','','','','','1','');

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
INSERT INTO `cbt_nilai` VALUES   ('1','U001','151610001','UH','FREMO','2017-12-06','2','2','18','10','100','0','0','10','KIMIA','XITKJ','KIMIAXI','2016/2017','1','','');
INSERT INTO `cbt_nilai` VALUES ('2','U002','151610002','UH','YJCZW','2017-12-06','2','0','20','0','100','0','0','0','KIMIA','XITKJ','KIMIAXI','2016/2017','1','','');
INSERT INTO `cbt_nilai` VALUES ('3','U003','151610003','UH','YJCZW','2017-12-06','2','2','18','10','100','0','0','10','KIMIA','XITKJ','KIMIAXI','2016/2017','1','','');
