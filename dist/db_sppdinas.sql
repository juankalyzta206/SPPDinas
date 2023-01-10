# Host: localhost  (Version 5.5.5-10.4.11-MariaDB)
# Date: 2020-01-28 09:45:05
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "tb_detilspt"
#

DROP TABLE IF EXISTS `tb_detilspt`;
CREATE TABLE `tb_detilspt` (
  `idetil` int(11) NOT NULL AUTO_INCREMENT,
  `no_spt` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `ket_tugas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idetil`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tb_detilspt"
#

INSERT INTO `tb_detilspt` VALUES (1,'123456789','987654321','Rapat Perihal ibu kota baru'),(2,'987654321','123456789','Rapat Perihal PBB'),(3,'987654321','123456789','Rapat Perihal PBB'),(4,'34234234','987654321','Rapat Perihal ibu kota baru'),(5,'987654321','123456789','Rapat Perihal PBB'),(6,'987654321','123456789','Rapat Perihal PBB'),(7,'13424324234324','312342131321','Rapat Perihal ibu kota baru');

#
# Structure for table "tb_kwitansi"
#

DROP TABLE IF EXISTS `tb_kwitansi`;
CREATE TABLE `tb_kwitansi` (
  `no_kwitansi` varchar(8) NOT NULL,
  `tgl_kwitansi` date DEFAULT NULL,
  `no_sppd` varchar(32) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_kwitansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_kwitansi"
#

INSERT INTO `tb_kwitansi` VALUES ('13423542','2020-01-11','21321321321431412','proses'),('34252353','2020-01-28','2342343242542234','pencarian dana'),('56756767','2020-01-11','21321321321431412','pencarian dana');

#
# Structure for table "tb_pegawai"
#

DROP TABLE IF EXISTS `tb_pegawai`;
CREATE TABLE `tb_pegawai` (
  `nip` varchar(12) NOT NULL DEFAULT '',
  `nama` varchar(64) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(32) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `tmp_lhr` varchar(32) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(22) NOT NULL DEFAULT '',
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  `b_transport` int(11) DEFAULT NULL,
  `b_inap` int(11) DEFAULT NULL,
  `uang_saku` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_pegawai"
#

INSERT INTO `tb_pegawai` VALUES ('123456789','Juan Kalyzta','L','Kepala Kadim','IV','Tangerang','2000-11-08','O','Islam','Menikah','087787110091','Jl.Swadaya Raya No. 4',3000000,400000,250000),('312342131321','Kris Setiawati','P','Wakil Kadim','IV','Surabaya','1999-09-20','O','Protestan','Menikah','085256518477','Palu',2000000,150000,100000),('987654321','Amirudin','L','Wakil Kadim','IV','Purbalingga','2000-06-08','B','Islam','Menikah','087887113948','Jl. Maharta X no.10 ,Pondok Maharta',3000000,400000,210000);

#
# Structure for table "tb_sppd"
#

DROP TABLE IF EXISTS `tb_sppd`;
CREATE TABLE `tb_sppd` (
  `no_sppd` varchar(32) NOT NULL,
  `no_spt` varchar(255) NOT NULL DEFAULT '',
  `tgl_terbit_sppd` date NOT NULL,
  `kendaraan_brgkt` varchar(255) DEFAULT NULL,
  `kendaraan_plg` varchar(255) DEFAULT NULL,
  `total_biaya_perhari` int(11) DEFAULT NULL,
  `total_biaya_brgkt` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_sppd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_sppd"
#

INSERT INTO `tb_sppd` VALUES ('2342343242542234','987654321','2020-01-28','Pesawat','Pesawat',15600000,18600000,'proses'),('3425233452342','2147483647','2020-01-28','Pesawat','Pesawat',3750000,5750000,'belum proses');

#
# Structure for table "tb_spt"
#

DROP TABLE IF EXISTS `tb_spt`;
CREATE TABLE `tb_spt` (
  `no_spt` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_spt` date DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `lama_tugas` int(11) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_spt`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=latin1;

#
# Data for table "tb_spt"
#

INSERT INTO `tb_spt` VALUES (987654321,'2020-01-11','123456789','2020-01-01','2020-01-01',24,'New York','Rapat','belum proses'),(2147483647,'2020-01-14','312342131321','2020-01-16','2020-01-16',15,'Kalimantan Timur','Rapat','belum proses');

#
# Structure for table "tb_user"
#

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tb_user"
#

INSERT INTO `tb_user` VALUES ('admin','Juan Kalyzta','123','Admin','Y'),('user1','Ratih','123','User','Y'),('user2','Nana','123','Satker','Y'),('user3','Malaiqa','123','Bendahara','Y');
