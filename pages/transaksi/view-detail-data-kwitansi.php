<?php
	if (isset($_GET['no_kwitansi'])) {
	$no_kwitansi = $_GET['no_kwitansi'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT a.* , b.*, c.* ,d.* FROM tb_sppd a, tb_spt b, tb_pegawai c,tb_kwitansi d WHERE a.no_spt = b.no_spt && b.nip = c.nip && d.no_sppd = a.no_sppd  ORDER BY no_kwitansi");
	$hasil=mysql_fetch_array($ambilData);
		$no_kwitansi = $hasil['no_kwitansi'];
?>
<section class="content-header">
    <h1>Detail<small>Data Kwitansi <b>#<?=$no_kwitansi?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-bendahara.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Detail Data Kwitansi</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Terbit Kwitansi</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['tgl_kwitansi'];?>" disabled="disabled" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">No SPPD</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['no_sppd'];?>" disabled="disabled" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">NIP</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['nip'];?>" disabled="disabled" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['nama'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jabatan</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['jab'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Berangkat dan Kembali</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?=$hasil['tgl_berangkat'];?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?=$hasil['tgl_kembali'];?>" disabled="disabled">
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Biaya Transportasi</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?=$hasil['b_transport'];?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?=$hasil['b_inap'];?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Uang Saku</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['uang_saku'];?>" disabled="disabled">
							</div>
						</div>

                        <div class="form-group">
							<label class="col-sm-3 control-label">Uang Harian</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['uang_harian'];?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Total Biaya</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['total_dana_dinas'];?>" disabled="disabled">
							</div>
						</div>
					
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<a href="home-bendahara.php?page=form-view-data-kwitansi" type="button" class="btn btn-danger">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>