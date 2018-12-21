DROP TABLE guru;

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `guru` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO guru VALUES("101","Siswanto","089678455667","siswanto@yahoo.com");
INSERT INTO guru VALUES("102","Siswandi","087667832324","siswandi@yahoo.com");
INSERT INTO guru VALUES("103","Davidmaulana","082134545679","davidmaulana@yahoo.com");
INSERT INTO guru VALUES("104","Firdausillah","087667345423","firdausillah@yahoo.com");
INSERT INTO guru VALUES("105","Ibrahim","087987433215","ibrahim@yahoo.com");



DROP TABLE hasil_nilai;

CREATE TABLE `hasil_nilai` (
  `id_hasilnilai` int(10) NOT NULL AUTO_INCREMENT,
  `id_section` int(10) NOT NULL,
  `kd_kompetensi` varchar(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nilai` varchar(3) NOT NULL,
  PRIMARY KEY (`id_hasilnilai`),
  KEY `id_section` (`id_section`),
  KEY `nis` (`nis`),
  KEY `nilai` (`nilai`),
  KEY `kd_kompetensi` (`kd_kompetensi`),
  CONSTRAINT `hasil_nilai_ibfk_1` FOREIGN KEY (`id_section`) REFERENCES `section` (`id_section`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_nilai_ibfk_3` FOREIGN KEY (`kd_kompetensi`) REFERENCES `nilai_kompetensi` (`kd_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=615 DEFAULT CHARSET=latin1;

INSERT INTO hasil_nilai VALUES("613","4","103","6833","87");
INSERT INTO hasil_nilai VALUES("614","5","104","6834","90");



DROP TABLE jurusan;

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO jurusan VALUES("3","AGAMA");
INSERT INTO jurusan VALUES("1001","IPA");
INSERT INTO jurusan VALUES("1002","IPS");
INSERT INTO jurusan VALUES("1003","AGAMA");



DROP TABLE kelas;

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_jurusan` int(2) NOT NULL,
  PRIMARY KEY (`kd_kelas`),
  KEY `kd_mapel` (`kd_mapel`,`id_jurusan`),
  KEY `id_jurusan` (`id_jurusan`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO kelas VALUES("201","X","01","1001");
INSERT INTO kelas VALUES("202","XI","02","1001");
INSERT INTO kelas VALUES("203","X","03","1002");
INSERT INTO kelas VALUES("204","XI","04","1002");
INSERT INTO kelas VALUES("205","X","05","1003");



DROP TABLE mapel;

CREATE TABLE `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO mapel VALUES("01","IPA");
INSERT INTO mapel VALUES("02","IPS");
INSERT INTO mapel VALUES("03","Matematika");
INSERT INTO mapel VALUES("04","Bahasa Indonesia");
INSERT INTO mapel VALUES("05","Bahasa Inggris");



DROP TABLE nilai_kompetensi;

CREATE TABLE `nilai_kompetensi` (
  `kd_kompetensi` varchar(10) NOT NULL,
  `spiritual` text NOT NULL,
  `sosial` text NOT NULL,
  `pengetahuan` text NOT NULL,
  `keterampilan` text NOT NULL,
  PRIMARY KEY (`kd_kompetensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO nilai_kompetensi VALUES("101","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb","cccccccccccccccccccccccccccccccccccccccccc","dddddddddddddddddddddddddddddddddddddddddd");
INSERT INTO nilai_kompetensi VALUES("102","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb","cccccccccccccccccccccccccccccccccccccccccc","dddddddddddddddddddddddddddddddddddddddddd");
INSERT INTO nilai_kompetensi VALUES("103","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb","cccccccccccccccccccccccccccccccccccccccccc","dddddddddddddddddddddddddddddddddddddddddd");
INSERT INTO nilai_kompetensi VALUES("104","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb","cccccccccccccccccccccccccccccccccccccccccc","dddddddddddddddddddddddddddddddddddddddddd");
INSERT INTO nilai_kompetensi VALUES("105","aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa","bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb","cccccccccccccccccccccccccccccccccccccccccc","dddddddddddddddddddddddddddddddddddddddddd");



DROP TABLE section;

CREATE TABLE `section` (
  `id_section` int(10) NOT NULL AUTO_INCREMENT,
  `kd_kelas` varchar(10) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `kd_kompetensi` varchar(10) NOT NULL,
  PRIMARY KEY (`id_section`),
  KEY `kd_kelas` (`kd_kelas`),
  KEY `kd_mapel` (`kd_mapel`),
  KEY `id_guru` (`id_guru`),
  KEY `id_thn_akad` (`id_thn_akad`),
  KEY `kd_kompetensi` (`kd_kompetensi`),
  CONSTRAINT `section_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `section_ibfk_2` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `section_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `section_ibfk_4` FOREIGN KEY (`id_thn_akad`) REFERENCES `thn_akad` (`id_thn_akad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO section VALUES("2","201","01","101","1","");
INSERT INTO section VALUES("3","202","02","102","2","");
INSERT INTO section VALUES("4","203","03","103","3","");
INSERT INTO section VALUES("5","204","04","104","4","");
INSERT INTO section VALUES("6","205","05","105","5","");



DROP TABLE siswa;

CREATE TABLE `siswa` (
  `nis` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `wali_murid` varchar(50) NOT NULL,
  `hp_wali` varchar(15) NOT NULL,
  `id_user` int(4) NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `hp_wali` (`hp_wali`,`id_user`),
  KEY `id_jurusan` (`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO siswa VALUES("6833","Lourna","Fitaloka","2018-11-06","Tanggul","089437287812","Ambarwati","087438292312","4");
INSERT INTO siswa VALUES("6834","Fellia","Nurlailatul","2018-11-04","Tulungagung","087884913923","Ramdan","088784381321","5");



DROP TABLE thn_akad;

CREATE TABLE `thn_akad` (
  `id_thn_akad` int(10) NOT NULL,
  `thn_akad` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  PRIMARY KEY (`id_thn_akad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO thn_akad VALUES("1","2016-2017","1");
INSERT INTO thn_akad VALUES("2","2016-2017","2");
INSERT INTO thn_akad VALUES("3","2017-2018","3");
INSERT INTO thn_akad VALUES("4","2017-2018","4");
INSERT INTO thn_akad VALUES("5","2018-2019","5");



DROP TABLE users;

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("5","fellia","04","siswa");
INSERT INTO users VALUES("9","admin","admin","admin");
INSERT INTO users VALUES("11","ona"," ona","siswa");
INSERT INTO users VALUES("12","firdaus"," firdaus","admin");



