
/*---------------------------------------------------------------
  SQL DB BACKUP 06.12.2017 05:32 
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
