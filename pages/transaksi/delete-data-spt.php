<section class="content-header">
    <h1>Delete<small>Data SPT</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-satker.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Delete Data SPT</li>
    </ol>
</section>
<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['no_spt'])) {
	$no_spt = $_GET['no_spt'];
	$query   = "SELECT * FROM tb_spt WHERE no_spt='$no_spt'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($no_spt) && $no_spt != "") {
		$delete = "DELETE FROM tb_spt WHERE no_spt='$no_spt'";
		$sqldel = mysql_query ($delete);
		
		if ($sqldel) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Data SPT ".$no_spt." Berhasil di Hapus</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-satker.php?page=form-view-data-spt' class='btn btn-primary btn-block btn-flat'>Next >></button>
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