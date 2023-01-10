<section class="content-header">
    <h1>Input<small>Kwitansi</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-bendahara.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Input Kwitansi</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$no_kwitansi	=$_POST['no_kwitansi'];
	$tgl_kwitansi	= date ('Y-m-d');
	$no_sppd		=$_POST['no_sppd'];
	$status	=$_POST['status'];
	
	
		include "dist/koneksi.php";
		$cekno	=mysql_num_rows (mysql_query("SELECT no_kwitansi FROM tb_kwitansi WHERE no_kwitansi='$_POST[no_kwitansi]'"));
	
		// if (empty($_POST['no_kwitansi']) || empty($_POST['no_sppd']) || empty($_POST['transportasi']) || empty($_POST['konsumsi']) || empty($_POST['penginapan'])) {
		// echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
		// 	<div class='box box-primary'>
		// 		<div class='register-box-body'>
		// 			<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar.</p>
		// 			<div class='row'>
		// 				<div class='col-xs-8'></div>
		// 				<div class='col-xs-4'>
		// 					<button type='button' onclick=location.href='home-bendahara.php?page=form-input-kwitansi' class='btn btn-block btn-warning'>Back</button>
		// 				</div>
		// 			</div>
		// 		</div>
		// 	</div>";
		// }
		// else
		 if($cekno >= 0) {
			$insert = "INSERT INTO tb_kwitansi (no_kwitansi, tgl_kwitansi, no_sppd, status) VALUES ('$no_kwitansi', '$tgl_kwitansi', '$no_sppd','$status')";
			$query = mysql_query ($insert);
			
				if($query){
					echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
						<div class='register-box-body'>
							<p>Input Data Kwitansi Rincian Biaya Perjalanan Dinas Berhasil</p>
							<div class='row'>
								<div class='col-xs-8'></div>
								<div class='col-xs-4'>
									<button type='button' onclick=location.href='home-bendahara.php?page=form-input-kwitansi' class='btn btn-danger btn-block btn-flat'>Next >></button>
								</div>
							</div>
						</div>";
				}
		}
		else{
			echo "<div class='register-logo'><b>Oops!</b> No. Kwitansi Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. Kwitansi yang Anda masukan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
						<button type='button' onclick=location.href='home-bendahara.php?page=form-input-kwitansi' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
			}
			
		}
		else {
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
		}
	
?>
</div>							