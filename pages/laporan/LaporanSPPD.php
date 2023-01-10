<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
<table width="100%">
<tr>
<td width="25" align="center"><img src="dist/img/logo.png" alt="Tangerang" class="left" style="width : 100%"></td>
<td width="50" align="center"><h5>PEMERINTAH KOTA TANGERANG</h5><h4>DINAS KOMUNIKASI DAN INFORMATIKA</h4><h6>Gedung Pusat 
Pemerintahan Lt.4, Jl Satria Sudirman No.1 Tangerang 15123</h6><h6>Telp. 021-5576 4955 Fax.021-5576 4957</h6><h6>Website : www.tangerang.go.id Email : diskominfo@tangerang.go.id</h6></td>
</tr>
</table>
	<?php 
    include "dist/koneksi.php";
    if ($_POST['save'] == "save") {
        $awal			=$_POST['awal'];
        $akhir				=$_POST['akhir'];
    $tampilSppd=mysql_query("SELECT * FROM tb_sppd Where tgl_terbit_sppd between '$awal' and '$akhir'ORDER BY no_sppd");
    }
    ?>
 
 <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No SPPD</th>
                                <th>Tgl Terbit</th>
                                <th>No SPT</th>
								<th>Kend. Berangkat</th>
								<th>Kend. Pulang</th>
								<th>Biaya Perhari</th>								
								<th>Biaya Berangkat</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($sppd=mysql_fetch_array($tampilSppd)){
						?>
							<tr>
								<td><?php echo $sppd['no_sppd'];?></td>
								<td><?php echo $sppd['tgl_terbit_sppd'];?></td>
								<td><?php echo $sppd['no_spt'];?></td>
								<td><?php echo $sppd['kendaraan_brgkt'];?></td>
								<td><?php echo $sppd['kendaraan_plg'];?></td>
								<td><?php echo $sppd['total_biaya_perhari'];?></td>
								<td><?php echo $sppd['total_biaya_brgkt'];?></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>