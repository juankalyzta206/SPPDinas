<section class="content-header">
    <h1>Input<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Input Data Pegawai</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$nip		=$_POST['nip'];
	$nama		=$_POST['nama'];
	$jk			=$_POST['jk'];
	$jab		=$_POST['jab'];
	$golongan	=$_POST['golongan'];
	$tmp_lhr	=$_POST['tmp_lhr'];
	$tgl_lhr	=$_POST['tgl_lhr'];
	$gol_darah	=$_POST['gol_darah'];
	$agama		=$_POST['agama'];
	$status		=$_POST['status'];
	$telp		=$_POST['telp'];
	$alamat		=$_POST['alamat'];
	$b_transport=$_POST['b_transport'];
	$b_inap		=$_POST['b_inap'];
	$uang_saku	=$_POST['uang_saku'];


	include "dist/koneksi.php";


	$cekpegawai	=mysql_num_rows (mysql_query("SELECT nip FROM tb_pegawai WHERE nip='$_POST[nip]'"));
	
		if (empty($_POST['nip']) || empty($_POST['nama']) || empty($_POST['jk']) || empty($_POST['jab']) ||  empty($_POST['golongan']) || empty($_POST['tmp_lhr']) || empty($_POST['tgl_lhr']) || empty($_POST['gol_darah']) || empty($_POST['agama']) || empty($_POST['status'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan data yang Anda masukan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-pegawai' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else if($cekpegawai > 0) {
		echo "<div class='register-logo'><b>Oops!</b> NIP Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan NIP Pegawai yang Anda masukan benar.</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-pegawai' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$insert = "INSERT INTO tb_pegawai (nip, nama, jk, jab, golongan, tmp_lhr, tgl_lhr, gol_darah, agama, status, telp, alamat,b_transport,b_inap,uang_saku) VALUES ('$nip', '$nama', '$jk', '$jab', '$golongan', '$tmp_lhr', '$tgl_lhr', '$gol_darah', '$agama', '$status', '$telp', '$alamat','$b_transport','$b_inap','$uang_saku')";
		$query = mysql_query ($insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input Data</b> Successful!</div>	
				<div class='register-box-body'>
					<p>Input Data Pegawai Berhasil</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-user.php?page=form-master-data-pegawai' class='btn btn-danger btn-block btn-flat'>Next >></button>
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