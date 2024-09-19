
/*---------------------------------------------------------------
  SQL DB BACKUP 10.12.2017 21:37 
  HOST: localhost:3306
  DATABASE: dbpusat
  TABLES: cbt_jawaban,cbt_kelas,cbt_mapel,cbt_nilai,cbt_paketsoal,cbt_siswa,cbt_siswa_ujian,cbt_soal,cbt_tugas,cbt_ujian
  ---------------------------------------------------------------*/

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
INSERT INTO `cbt_paketsoal` VALUES   ('1','ALL','SMK','ALL','FISIKA','','0','0','5','0','100','0','gggggg','4','5','0','','admin','','T','N','2017-12-10','HS9FC');
INSERT INTO `cbt_paketsoal` VALUES ('9','ALL','SMK','ALL','FISIKA','','0','0','0','0','0','0','GGGGG','4','0','0','','admin','','T','N','2017-12-10','HSNM3');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO `cbt_soal` VALUES   ('1','FISIKA','gggggg','1','','','1','','coba coba','','','','a','b','c','d','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('2','FISIKA','gggggg','1','','','2','','coba coba','','','','a','b','c','d','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('3','FISIKA','gggggg','1','','','3','','coba coba coa','','','','a','c','b','b','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('4','FISIKA','gggggg','1','','','4','','aaaaaa','','','','a','b','c','d','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('5','FISIKA','gggggg','1','','','5','','coba coba','','','','a','b','c','d','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('6','FISIKA','gggggg','1','','','6','','coba','','','','coba','','','','','','','','','','1','1','A','Y','','');
INSERT INTO `cbt_soal` VALUES ('7','FISIKA','gggggg','1','','','7','','cobbaabab','','','','aaa','bbb','ccc','dddd','','','','','','','1','1','A','Y','','');

/*---------------------------------------------------------------
  TABLE: `cbt_tugas`
  ---------------------------------------------------------------*/
DROP TABLE IF EXISTS `cbt_tugas`;
CREATE TABLE `cbt_tugas` (
  `Urut` int(11) NOT NULL AUTO_INCREMENT,
  `XLevel` varchar(10) NOT NULL,
  `XNIK` varchar(10) NOT NULL,
  `XKodeMapel` varchar(10) NOT NULL,
  `XKodeKelas` varchar(10) NOT NULL,
  `XKodeJurusan` varchar(10) NOT NULL,
  `XSemester` int(11) NOT NULL,
  `XSetId` varchar(10) NOT NULL,
  `XNilaiTugas` float NOT NULL,
  PRIMARY KEY (`Urut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
