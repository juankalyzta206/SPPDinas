<section class="content-header">
    <h1>Delete<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Delete Data Pegawai</li>
    </ol>
</section>
<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['nip'])) {
	$nip = $_GET['nip'];
	$query   = "SELECT * FROM tb_pegawai WHERE nip='$nip'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($nip) && $nip != "") {
		$delete = "DELETE FROM tb_pegawai WHERE nip='$nip'";
		$sqldel = mysql_query ($delete);
		
		if ($sqldel) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Data Pegawai ".$nip." Berhasil di Hapus</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-view-data-pegawai' class='btn btn-primary btn-block btn-flat'>Next >></button>
						</div>
					</div>
				</div>";		
		}
		else{
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";	
		}
	}
	mysql_close($Open);
?>
</div>