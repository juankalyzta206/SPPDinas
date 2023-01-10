DROP TABLE tb_detilspt;

CREATE TABLE `tb_detilspt` (
  `idetil` int(11) NOT NULL AUTO_INCREMENT,
  `no_spt` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `ket_tugas` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idetil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO tb_detilspt VALUES("1","123456789","987654321","Rapat Perihal ibu kota baru");
INSERT INTO tb_detilspt VALUES("2","987654321","123456789","Rapat Perihal PBB");
INSERT INTO tb_detilspt VALUES("3","987654321","123456789","Rapat Perihal PBB");
INSERT INTO tb_detilspt VALUES("4","34234234","987654321","Rapat Perihal ibu kota baru");
INSERT INTO tb_detilspt VALUES("5","987654321","123456789","Rapat Perihal PBB");
INSERT INTO tb_detilspt VALUES("6","987654321","123456789","Rapat Perihal PBB");



DROP TABLE tb_kwitansi;

CREATE TABLE `tb_kwitansi` (
  `no_kwitansi` varchar(8) NOT NULL,
  `tgl_kwitansi` date DEFAULT NULL,
  `no_sppd` varchar(32) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_kwitansi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_kwitansi VALUES("13423542","2020-01-11","21321321321431412","proses");
INSERT INTO tb_kwitansi VALUES("56756767","2020-01-11","21321321321431412","pencarian dana");



DROP TABLE tb_pegawai;

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

INSERT INTO tb_pegawai VALUES("123456789","Juan Kalyzta","L","Kepala Kadim","IV","Tangerang","2000-11-08","O","Islam","Menikah","087787110091","Jl.Swadaya Raya No. 4","3000000","4000000","2500000");
INSERT INTO tb_pegawai VALUES("987654321","Amirudin","L","Wakil Kadim","IV","Purbalingga","2000-06-08","B","Islam","Menikah","087887113948","Jl. Maharta X no.10 ,Pondok Maharta","3000000","4000000","2100000");



DROP TABLE tb_sppd;

CREATE TABLE `tb_sppd` (
  `no_sppd` varchar(32) NOT NULL,
  `no_spt` varchar(255) NOT NULL DEFAULT '',
  `tgl_terbit_sppd` date NOT NULL,
  `kendaraan_brgkt` varchar(255) DEFAULT NULL,
  `kendaraan_plg` varchar(255) DEFAULT NULL,
  `total_dana_dinas` int(11) DEFAULT NULL,
  `uang_harian` int(11) DEFAULT NULL,
  PRIMARY KEY (`no_sppd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO tb_sppd VALUES("21321321321431412","987654321","2020-01-11","Pesawat","Kapal Laut","9500000","395833");
INSERT INTO tb_sppd VALUES("5654654535","987654321","2020-01-11","Pesawat","Kapal Laut","9500000","395833");



DROP TABLE tb_spt;

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
) ENGINE=InnoDB AUTO_INCREMENT=987654322 DEFAULT CHARSET=latin1;

INSERT INTO tb_spt VALUES("987654321","2020-01-11","123456789","2020-01-01","2020-01-01","24","New York","Rapat","belum proses");



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



