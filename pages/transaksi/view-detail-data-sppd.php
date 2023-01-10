<?php
	if (isset($_GET['no_sppd'])) {
	$no_sppd = $_GET['no_sppd'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT a.* , b.*, c.* FROM tb_sppd a, tb_spt b, tb_pegawai c WHERE a.no_spt = b.no_spt && b.nip = c.nip ORDER BY no_sppd");
	$hasil=mysql_fetch_array($ambilData);
		$no_sppd = $hasil['no_sppd'];
?>
<section class="content-header">
    <h1>Detail<small>Data SPPD <b>#<?=$no_sppd?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Detail Data SPPD</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Terbit SPPD</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['tgl_terbit_sppd'];?>" disabled="disabled" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">No SPT</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['no_spt'];?>" disabled="disabled" />
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
							<label class="col-sm-3 control-label">Biaya Transpot & Penginapan</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?=$hasil['b_transport'];?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?=$hasil['b_inap'];?>" disabled="disabled">
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Kendaraan Berangkat & Pulang</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" value="<?=$hasil['kendaraan_brgkt'];?>" disabled="disabled">
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control" value="<?=$hasil['kendaraan_plg'];?>" disabled="disabled">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Total Biaya Perhari</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['total_biaya_perhari'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Total Biaya Berangkat</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['total_biaya_brgkt'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['status'];?>" disabled="disabled">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<a href="home-user.php?page=form-view-data-sppd" type="button" class="btn btn-danger">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>