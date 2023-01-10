<section class="content-header">
    <h1>Input<small>SPT</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-satker.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Input SPT</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$no_spt		=$_POST['no_spt'];
    $nip			=$_POST['nip'];
	$tgl_berangkat	= $_POST['tgl_berangkat'];
	$tgl_kembali	= $_POST['tgl_kembali'];
	$tujuan			=$_POST['tujuan'];
	$keperluan		=$_POST['keperluan'];
	$ket		=$_POST['ket'];
	$ket_tugas = $_POST['ket_tugas'];
	$tgl_spt	= date ('Y-m-d');
	
	$start		    =new DateTime($tgl_berangkat);
    $end        	=new DateTime($tgl_kembali);
	$interval		=$start->diff($end);
	$lama_tugas		=$interval->format("%d");
		

		include "dist/koneksi.php";
		$cekno	=mysql_num_rows (mysql_query("SELECT no_spt FROM tb_spt WHERE no_spt='$_POST[no_spt]'"));
	
		// if (empty($_POST['no_spt']) || empty($_POST['tgl_spt']) || empty($_POST['nip']) || empty($_POST['tgl_berangkat']) || empty($_POST['tgl_kembali']) || empty($_POST['tgl_berangkat']) || empty($_POST['lama_tugas']) || empty($_POST['tujuan']) || empty($_POST['keperluan']) || empty($_POST['status']) ) {
		// echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
		// 	<div class='box box-primary'>
		// 		<div class='register-box-body'>
		// 			<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar.</p>
		// 			<div class='row'>
		// 				<div class='col-xs-8'></div>
		// 				<div class='col-xs-4'>
		// 					<button type='button' onclick=location.href='home-satker.php?page=form-input-spt' class='btn btn-block btn-warning'>Back</button>
		// 				</div>
		// 			</div>
		// 		</div>
		// 	</div>";
		// }
		if($cekno > 0) {
	
		}
		else{
		$insert = "INSERT INTO tb_spt (no_spt,tgl_spt,nip,tgl_berangkat,tgl_kembali,lama_tugas,tujuan,keperluan,ket) VALUES ('$no_spt', '$tgl_spt', '$nip', '$tgl_berangkat', '$tgl_berangkat', '$lama_tugas', '$tujuan', '$keperluan','$ket')"; 
		$insert1 = "INSERT INTO tb_detilspt (no_spt,nip,ket_tugas)VALUES('$no_spt','$nip','$ket_tugas')";
		$query = mysql_query ($insert);
		$query1 = mysql_query ($insert1);
			if($query && $query1){
				echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Input Data Surat Perintah Tugas</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-satker.php?page=form-input-spt' class='btn btn-danger btn-block btn-flat'>Next >></button>
							</div>
						</div>
					</div>";
			}
			else {
				echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
			}

		}
	}
?>
</div>