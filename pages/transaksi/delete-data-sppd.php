<section class="content-header">
    <h1>Delete<small>Data SPPD</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Delete Data SPPD</li>
    </ol>
</section>
<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['no_sppd'])) {
	$no_sppd = $_GET['no_sppd'];
	$query   = "SELECT * FROM tb_sppd WHERE no_sppd='$no_sppd'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($no_sppd) && $no_sppd != "") {
		$delete = "DELETE FROM tb_sppd WHERE no_sppd='$no_sppd'";
		$sqldel = mysql_query ($delete);
		
		if ($sqldel) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Data SPT ".$no_sppd." Berhasil di Hapus</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-view-data-sppd' class='btn btn-primary btn-block btn-flat'>Next >></button>
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