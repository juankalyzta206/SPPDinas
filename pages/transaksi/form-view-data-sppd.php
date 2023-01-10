<section class="content-header">
    <h1>View<small>Data SPPD</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data SPPD</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
    $tampilSppd=mysql_query("SELECT a.*,b.*,c.* FROM tb_sppd a,tb_spt b,tb_pegawai c Where a.no_spt=b.no_spt && b.nip=c.nip ORDER BY no_sppd");
    
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No SPPD</th>
                                <th>Tgl Terbit</th>
                                <th>No SPT</th>
								<th>Nip</th>
								<th>Nama</th>
								<th>Kend. Berangkat</th>
								<th>Kend. Pulang</th>
								<th>Biaya Perhari</th>								
								<th>Biaya Berangkat</th>
								<th>Action</th>
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
								<td><?php echo $sppd['nip'];?></td>
								<td><?php echo $sppd['nama'];?></td>
								<td><?php echo $sppd['kendaraan_brgkt'];?></td>
								<td><?php echo $sppd['kendaraan_plg'];?></td>
								<td><?php echo $sppd['total_biaya_perhari'];?></td>
								<td><?php echo $sppd['total_biaya_brgkt'];?></td>
								<td class="tools" align="center"><a href="home-user.php?page=view-detail-data-sppd&no_sppd=<?=$sppd['no_sppd'];?>" title="view"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-user.php?page=delete-data-sppd&no_sppd=<?php echo $sppd['no_sppd'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
	</div>
</section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>