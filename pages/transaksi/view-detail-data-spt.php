 <?php
	if (isset($_GET['no_spt'])) {
	$no_spt = $_GET['no_spt'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT a.*, b.* FROM tb_spt a, tb_pegawai b WHERE b.nip = a.nip ORDER BY no_spt");
	$hasil=mysql_fetch_array($ambilData);
		$no_spt = $hasil['no_spt'];
?>
<section class="content-header">
    <h1>Detail<small>Data SPT <b>#<?=$no_spt?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-satker.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Detail Data SPT</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Terbit SPT</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['tgl_spt'];?>" disabled="disabled" />
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
							<label class="col-sm-3 control-label">Lama Tugas</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['lama_tugas'];?> Hari" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tujuan</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['tujuan'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Keperluan</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['keperluan'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status SPT</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="<?=$hasil['ket'];?>" disabled="disabled">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<a href="home-satker.php?page=form-view-data-spt" type="button" class="btn btn-danger">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>