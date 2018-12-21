-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 05:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siani`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actorCity`(IN ct varchar(30), IN lim int(4))
BEGIN
SELECT first_name, last_name, city FROM actor INNER JOIN film_actor ON actor.actor_id = film_actor.actor_id INNER JOIN film on film_actor.film_id = film.film_id INNER JOIN inventori ON film.film_id = inventori.film_id INNER JOIN store ON inventori.store_id = store.store_id INNER JOIN address  ON store.address_id = address.address_id INNER JOIN city ON address.city_id=city.city_id WHERE city = ct LIMIT lim;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `getActorname`(IN name varchar (45))
BEGIN
SELECT first_name, last_name FROM Actor WHERE first_name LIKE CONCAT('%',name,'%') OR last_name LIKE CONCAT('%',name,'%');
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(10) NOT NULL,
  `guru` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `guru`, `no_hp`, `email`) VALUES
(101, 'Siswanto', '089678455667', 'siswanto@yahoo.com'),
(102, 'Siswandi', '087667832324', 'siswandi@yahoo.com'),
(103, 'Davidmaulana', '082134545679', 'davidmaulana@yahoo.com'),
(104, 'Firdausillah', '087667345423', 'firdausillah@yahoo.com'),
(105, 'Ibrahim', '087987433215', 'ibrahim@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_nilai`
--

CREATE TABLE IF NOT EXISTS `hasil_nilai` (
`id_hasilnilai` int(10) NOT NULL,
  `id_section` int(10) NOT NULL,
  `kd_kompetensi` varchar(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nilai` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=615 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_nilai`
--

INSERT INTO `hasil_nilai` (`id_hasilnilai`, `id_section`, `kd_kompetensi`, `nis`, `nilai`) VALUES
(613, 4, '103', 6833, '87'),
(614, 5, '104', 6834, '90');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(2) NOT NULL,
  `jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `jurusan`) VALUES
(3, 'AGAMA'),
(1001, 'IPA'),
(1002, 'IPS'),
(1003, 'AGAMA');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_jurusan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `kelas`, `kd_mapel`, `id_jurusan`) VALUES
('201', 'X', '01', 1001),
('202', 'XI', '02', 1001),
('203', 'X', '03', 1002),
('204', 'XI', '04', 1002),
('205', 'X', '05', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `mapel`) VALUES
('01', 'IPA'),
('02', 'IPS'),
('03', 'Matematika'),
('04', 'Bahasa Indonesia'),
('05', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kompetensi`
--

CREATE TABLE IF NOT EXISTS `nilai_kompetensi` (
  `kd_kompetensi` varchar(10) NOT NULL,
  `spiritual` text NOT NULL,
  `sosial` text NOT NULL,
  `pengetahuan` text NOT NULL,
  `keterampilan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kompetensi`
--

INSERT INTO `nilai_kompetensi` (`kd_kompetensi`, `spiritual`, `sosial`, `pengetahuan`, `keterampilan`) VALUES
('101', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'cccccccccccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddddddddddd'),
('102', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'cccccccccccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddddddddddd'),
('103', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'cccccccccccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddddddddddd'),
('104', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'cccccccccccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddddddddddd'),
('105', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'cccccccccccccccccccccccccccccccccccccccccc', 'dddddddddddddddddddddddddddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
`id_section` int(10) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `id_guru` int(10) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `kd_kompetensi` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id_section`, `kd_kelas`, `kd_mapel`, `id_guru`, `id_thn_akad`, `kd_kompetensi`) VALUES
(2, '201', '01', 101, 1, ''),
(3, '202', '02', 102, 2, ''),
(4, '203', '03', 103, 3, ''),
(5, '204', '04', 104, 4, ''),
(6, '205', '05', 105, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `wali_murid` varchar(50) NOT NULL,
  `hp_wali` varchar(15) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `first_name`, `last_name`, `tgl_lahir`, `alamat`, `no_hp`, `wali_murid`, `hp_wali`, `id_user`) VALUES
(1, 'a', 'a', '2018-12-05', 'a', 'a', 'a', 'a', 17),
(6833, 'Lourna', 'Fitaloka', '2018-11-06', 'Tanggul', '089437287812', 'Ambarwati', '087438292312', 4),
(6834, 'Fellia', 'Nurlailatul', '2018-11-04', 'Tulungagung', '087884913923', 'Ramdan', '088784381321', 5);

-- --------------------------------------------------------

--
-- Table structure for table `thn_akad`
--

CREATE TABLE IF NOT EXISTS `thn_akad` (
  `id_thn_akad` int(10) NOT NULL,
  `thn_akad` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thn_akad`
--

INSERT INTO `thn_akad` (`id_thn_akad`, `thn_akad`, `semester`) VALUES
(1, '2016-2017', '1'),
(2, '2016-2017', '2'),
(3, '2017-2018', '3'),
(4, '2017-2018', '4'),
(5, '2018-2019', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Admin','Guru','Siswa') NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `password`, `level`, `status`) VALUES
(5, 'fellia', '04', 'Siswa', 'Aktif'),
(9, 'admin', 'admin', 'Admin', 'Aktif'),
(11, 'ona', ' ona', 'Siswa', 'Aktif'),
(12, 'firdaus', ' firdaus', 'Admin', 'Aktif'),
(17, 'h', ' h', 'Admin', 'Aktif'),
(37, 'l', ' l', 'Siswa', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
 ADD PRIMARY KEY (`id_hasilnilai`), ADD KEY `id_section` (`id_section`), ADD KEY `nis` (`nis`), ADD KEY `nilai` (`nilai`), ADD KEY `kd_kompetensi` (`kd_kompetensi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
 ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`kd_kelas`), ADD KEY `kd_mapel` (`kd_mapel`,`id_jurusan`), ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai_kompetensi`
--
ALTER TABLE `nilai_kompetensi`
 ADD PRIMARY KEY (`kd_kompetensi`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
 ADD PRIMARY KEY (`id_section`), ADD KEY `kd_kelas` (`kd_kelas`), ADD KEY `kd_mapel` (`kd_mapel`), ADD KEY `id_guru` (`id_guru`), ADD KEY `id_thn_akad` (`id_thn_akad`), ADD KEY `kd_kompetensi` (`kd_kompetensi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`nis`), ADD KEY `hp_wali` (`hp_wali`,`id_user`), ADD KEY `id_jurusan` (`id_user`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `thn_akad`
--
ALTER TABLE `thn_akad`
 ADD PRIMARY KEY (`id_thn_akad`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
MODIFY `id_hasilnilai` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=615;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
MODIFY `id_section` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
ADD CONSTRAINT `hasil_nilai_ibfk_1` FOREIGN KEY (`id_section`) REFERENCES `section` (`id_section`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `hasil_nilai_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `hasil_nilai_ibfk_3` FOREIGN KEY (`kd_kompetensi`) REFERENCES `nilai_kompetensi` (`kd_kompetensi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`kd_mapel`) REFERENCES `mapel` (`kd_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `section_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `section_ibfk_4` FOREIGN KEY (`id_thn_akad`) REFERENCES `thn_akad` (`id_thn_akad`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
