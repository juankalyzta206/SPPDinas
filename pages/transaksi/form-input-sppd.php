<section class="content-header">
    <h1>Form<small>Surat Perintah Perjalanan Dinas</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-user.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Form SPPD</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-user.php?page=input-sppd" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">No. SPPD</label>
								<div class="col-sm-7">
									<input type="text" name="no_sppd" class="form-control" maxlength="32">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">No SPT</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$data = mysql_query("SELECT a.*, b.* FROM tb_spt a, tb_pegawai b WHERE a.nip = b.nip ORDER BY no_spt");  
	
										echo '<select name="no_spt" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih SPT</option>';    
										while ($row = mysql_fetch_array($data)) {    
											echo '<option value="'.$row['no_spt'].'">'. $row['no_spt'].' - '.$row['nama'].'</option>';    
										}    
										echo '</select>';
									?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Kendaraan Berangkat</label>
								<div class="col-sm-7">
									<input type="text" name="kendaraan_brgkt" class="form-control" maxlength="32">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Kendaraan Pulang</label>
								<div class="col-sm-7">
									<input type="text" name="kendaraan_plg" class="form-control" maxlength="255">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status</label>
								<div class="col-sm-7">
                                <select name="status">
                                        <option value="belum proses">belum proses</option>
                                        <option value="proses">proses</option>
                                        <option value="pencarian dana">pencairan dana</option>
                                        <option value="selesai">selesai</option>
                                </select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
									<a href="home-user.php" type="button" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>
<!-- datepicker -->
<script type="text/javascript" src="plugins/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
	 $('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
		});
</script>