<section class="content-header">
    <h1>View<small>Data Pegawai</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Pegawai</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPeg=mysql_query("SELECT * FROM tb_pegawai ORDER BY nip");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>NIP</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Jabatan</th>
								<th>Status</th>
								<th>No. Telp #</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php
							while($peg=mysql_fetch_array($tampilPeg)){
						?>	
							<tr>
								<td><?php echo $peg['nip'];?></td>
								<td><?php echo $peg['nama'];?></td>
								<td><?php echo $peg['jk'];?></td>
								<td><?php echo $peg['jab'];?></td>
								<td><?php echo $peg['status'];?></td>
								<td><?php echo $peg['telp'];?></td>
								<td class="tools" align="center"><a href="home-user.php?page=view-detail-data-pegawai&nip=<?=$peg['nip'];?>" title="view"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-user.php?page=form-edit-data-pegawai&nip=<?=$peg['nip'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-user.php?page=delete-data-pegawai&nip=<?php echo $peg['nip'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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