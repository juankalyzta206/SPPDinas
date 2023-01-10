<section class="content-header">
    <h1>Input<small>SPPD</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Input SPPD</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$no_sppd			=$_POST['no_sppd'];
	$no_spt				=$_POST['no_spt'];
	$kendaraan_brgkt	=$_POST['kendaraan_brgkt'];
	$kendaraan_plg		=$_POST['kendaraan_plg'];
	$status				=$_POST['status'];
	$tgl_terbit_sppd	= date ('Y-m-d');

//perhitungan biaya
	include "dist/koneksi.php";
	$data =  mysql_query("SELECT * FROM tb_pegawai a,tb_spt b,tb_sppd c WHERE a.nip=b.nip && b.no_spt='$no_spt'");
	$row = mysql_fetch_array($data);

	$b_transport = $row['b_transport'];
	$b_inap = $row['b_inap'];
	$uang_saku = $row['uang_saku'];
	$lama_tugas = $row['lama_tugas'];
	
	$suminap = $b_inap*$lama_tugas;
	$sumuangsaku = $uang_saku*$lama_tugas;	

	$total_biaya_perhari = $suminap+$sumuangsaku;

	$total_biaya_brgkt = $b_transport+$total_biaya_perhari;
		$cekno	=mysql_num_rows (mysql_query("SELECT no_sppd FROM tb_sppd WHERE no_sppd=$no_sppd"));
		
	
		// if (empty($_POST['no_sppd']) || empty($_POST['nip']) || empty($_POST['tgl_berangkat']) || empty($_POST['tgl_kembali']) || empty($_POST['uang_saku']) || empty($_POST['tujuan']) || empty($_POST['tgl_berangkat']) || empty($_POST['keperluan'])) {
		// echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
		// 	<div class='box box-primary'>
		// 		<div class='register-box-body'>
		// 			<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar.</p>
		// 			<div class='row'>
		// 				<div class='col-xs-8'></div>
		// 				<div class='col-xs-4'>
		// 					<button type='button' onclick=location.href='home-user.php?page=form-input-sppd' class='btn btn-block btn-warning'>Back</button>
		// 				</div>
		// 			</div>
		// 		</div>
		// 	</div>";
		// }
		if($cekno >= 0) {
		

			$insert = "INSERT INTO tb_sppd (no_sppd, no_spt, tgl_terbit_sppd, kendaraan_brgkt, kendaraan_plg, total_biaya_perhari,total_biaya_brgkt,status) VALUES ('$no_sppd', '$no_spt', '$tgl_terbit_sppd', '$kendaraan_brgkt', '$kendaraan_plg', '$total_biaya_perhari','$total_biaya_brgkt','$status')";
		$query = mysql_query ($insert);
		// echo $query;
		
			if($query){
				echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
					<div class='register-box-body'>
						<p>Input Data Surat Perintah Perjalanan Dinas Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-user.php?page=form-input-sppd' class='btn btn-danger btn-block btn-flat'>Next >></button>
							</div>
						</div>
					</div>";
		}}
		else{
			echo "<div class='register-logo'><b>Oops!</b> No. SPPD Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. SPPD yang Anda masukan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-input-sppd' class='btn btn-block btn-warning'>Back</button>
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