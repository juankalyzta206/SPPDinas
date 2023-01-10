DROP TABLE tb_kwitansi;

CREATE TABLE `tb_kwitansi` (
  `no_kwitansi` varchar(8) NOT NULL,
  `no_sppd` varchar(32) NOT NULL,
  `transportasi` float(12,2) NOT NULL,
  `konsumsi` float(12,2) NOT NULL,
  `penginapan` float(12,2) NOT NULL,
  PRIMARY KEY (`no_kwitansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_kwitansi VALUES("00000101","JKT/001/SPPD/X/2016","3400000.00","500000.00","850000.00");
INSERT INTO tb_kwitansi VALUES("00000102","JKT/002/SPPD/X/2016","3800000.00","800000.00","1400000.00");



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
  `nip` varchar(12) NOT NULL,
  `tgl_terbit_sppd` date NOT NULL,
  `tgl_dinas` date NOT NULL,
  `tujuan` varchar(32) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  PRIMARY KEY (`no_sppd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_sppd VALUES("JKT/001/SPPD/X/2016","219846476091","2016-08-09","2016-08-25","Denpasar","Sosialisasi");
INSERT INTO tb_sppd VALUES("JKT/002/SPPD/X/2016","219846476091","2016-08-09","2016-10-31","Medan","Sosialisasi UPTK II");



DROP TABLE tb_user;

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("admin","Andi Hatmoko","123","Admin","Y");
INSERT INTO tb_user VALUES("user1","Ratih","123","User","Y");
INSERT INTO tb_user VALUES("user2","Nana","123","User","N");



