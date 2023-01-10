<section class="content-header">
    <h1>View<small>Data SPT</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-satker.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data SPT</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
    $tampilSpt=mysql_query("SELECT * FROM tb_spt ORDER BY no_spt");
    
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No SPT</th>
                                <th>Tanggal Terbit</th>
								<th>Nip</th>
								<th>Lama Tugas</th>
								<th>Keperluan</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($spt=mysql_fetch_array($tampilSpt)){
						?>	
							<tr>
								<td><?php echo $spt['no_spt'];?></td>
								<td><?php echo $spt['tgl_spt'];?></td>
								<td><?php echo $spt['nip'];?></td>
								<td><?php echo $spt['lama_tugas']; echo ' Hari';?></td>
                                <td><?php echo $spt['keperluan'];?></td>
								<td><?php echo $spt['ket'];?></td>
								<td class="tools" align="center"><a href="home-satker.php?page=view-detail-data-spt&no_spt=<?=$spt['no_spt'];?>" title="view"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-satker.php?page=delete-data-spt&no_spt=<?php echo $spt['no_spt'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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