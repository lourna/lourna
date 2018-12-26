DROP TABLE guru;

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `id_user` int(10) NOT NULL,
  PRIMARY KEY (`id_guru`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE hasil_nilai;

CREATE TABLE `hasil_nilai` (
  `id_hasilnilai` int(10) NOT NULL AUTO_INCREMENT,
  `kd_kompetensi` varchar(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nilai` double NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  PRIMARY KEY (`id_hasilnilai`),
  KEY `nis` (`nis`),
  KEY `nilai` (`nilai`),
  KEY `kd_kompetensi` (`kd_kompetensi`),
  KEY `kd_mapel` (`kd_mapel`),
  KEY `id_guru` (`id_guru`),
  KEY `id_thn_akad` (`id_thn_akad`),
  CONSTRAINT `hasil_nilai_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_nilai_ibfk_3` FOREIGN KEY (`id_thn_akad`) REFERENCES `thn_akad` (`id_thn_akad`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_nilai_ibfk_4` FOREIGN KEY (`kd_kompetensi`) REFERENCES `nilai_kompetensi` (`kd_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hasil_nilai_ibfk_5` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=615 DEFAULT CHARSET=latin1;




DROP TABLE jurusan;

CREATE TABLE `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE kelas;

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `id_jurusan` int(2) NOT NULL,
  PRIMARY KEY (`kd_kelas`),
  KEY `kd_mapel` (`id_jurusan`),
  KEY `id_jurusan` (`id_jurusan`),
  CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE mapel;

CREATE TABLE `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE nilai_kompetensi;

CREATE TABLE `nilai_kompetensi` (
  `kd_kompetensi` varchar(10) NOT NULL,
  `spiritual` text NOT NULL,
  `sosial` text NOT NULL,
  `pengetahuan` text NOT NULL,
  `keterampilan` text NOT NULL,
  PRIMARY KEY (`kd_kompetensi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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
  `id_user` int(10) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `hp_wali` (`hp_wali`,`id_user`),
  KEY `id_jurusan` (`id_user`),
  KEY `id_user` (`id_user`),
  KEY `kd_kelas` (`kd_kelas`),
  CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




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
  `level` enum('Admin','Guru','Siswa') NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO users VALUES("19","admin","admin","Admin","Aktif");
INSERT INTO users VALUES("20","admin","admin","Admin","Aktif");
INSERT INTO users VALUES("21","fellia","01","Siswa","Aktif");



