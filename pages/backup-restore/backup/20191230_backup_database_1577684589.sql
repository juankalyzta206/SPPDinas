DROP TABLE tb_detilspt;

CREATE TABLE `tb_detilspt` (
  `idetil` int(11) NOT NULL AUTO_INCREMENT,
  `no_spt` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `ket_tugas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idetil`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO tb_detilspt VALUES("3","234234","219846476091","Kurir");
INSERT INTO tb_detilspt VALUES("4","1223452342","219846476817","Kurir");
INSERT INTO tb_detilspt VALUES("5","784567546","219846476091","Kurir");



DROP TABLE tb_kwitansi;

CREATE TABLE `tb_kwitansi` (
  `no_kwitansi` varchar(8) NOT NULL,
  `tgl_kwitansi` date DEFAULT NULL,
  `no_sppd` varchar(32) NOT NULL,
  PRIMARY KEY (`no_kwitansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_kwitansi VALUES("56465465","2019-12-30","2354234234");



DROP TABLE tb_pegawai;

CREATE TABLE `tb_pegawai` (
  `nip` varchar(12) NOT NULL DEFAULT '',
  `nama` varchar(64) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(32) NOT NULL,
  `pangkat` varchar(32) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `tmp_lhr` varchar(32) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` varchar(512) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_pegawai VALUES("219846476091","Ratna Sari D","P","Kadin Disdikpora","Wakadin","3A","Jakarta","1979-07-12","A","Islam","K2","021219928273","Jakarta");
INSERT INTO tb_pegawai VALUES("219846476817","Handoyo K","L","Kepala Disdikpora","Kadin","3A","Jombang","1971-03-04","A","Islam","K3","021219928273","Jombang");
INSERT INTO tb_pegawai VALUES("219846476820","Arini K","P","Kepala Disdikpora","Kadin","3F","Cilacap","1971-03-04","A","Islam","K3","021219928273","Cilacap");



DROP TABLE tb_sppd;

CREATE TABLE `tb_sppd` (
  `no_sppd` varchar(32) NOT NULL,
  `no_spt` varchar(255) NOT NULL DEFAULT '',
  `tgl_terbit_sppd` date NOT NULL,
  `b_transport` varchar(255) DEFAULT NULL,
  `b_inap` varchar(255) DEFAULT NULL,
  `kendaraan_brgkt` varchar(255) DEFAULT NULL,
  `kendaraan_plg` varchar(255) DEFAULT NULL,
  `total_dana_dinas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_sppd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_sppd VALUES("2354234234","1223452342","2019-12-26","60000","800000","Pesawat","Pesawat","977877898");
INSERT INTO tb_sppd VALUES("34534524533","784567546","2019-12-26","500000","300000","Pesawat","Pesawat","200000");
INSERT INTO tb_sppd VALUES("45667546245342","784567546","2019-12-26","4000000","4000000","Pesawat","Pesawat","4234235423");



DROP TABLE tb_spt;

CREATE TABLE `tb_spt` (
  `no_spt` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_spt` date DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `tgl_berangkat` varchar(255) DEFAULT NULL,
  `tgl_kembali` varchar(255) DEFAULT NULL,
  `lama_tugas` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `keperluan` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_spt`)
) ENGINE=InnoDB AUTO_INCREMENT=1223452343 DEFAULT CHARSET=latin1;

INSERT INTO tb_spt VALUES("784567546","2019-12-26","219846476091","2019-11-28","2019-11-28","1 minggu","Jakarta","Pengantaran Police","belum proses");
INSERT INTO tb_spt VALUES("1223452342","2019-12-26","219846476817","2019-12-27","2019-12-27","3 hari","Jambi","Pengantaran Police","belum proses");



DROP TABLE tb_user;

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("admin","Juan Kalyzta","123","Admin","Y");
INSERT INTO tb_user VALUES("user1","Ratih","123","User","Y");
INSERT INTO tb_user VALUES("user2","Nana","123","Satker","Y");
INSERT INTO tb_user VALUES("user3","Malaiqa","123","Bendahara","Y");



