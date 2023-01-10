<section class="content-header">
    <h1>Form<small>Surat Perintah Tugas</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-satker.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Form SPT</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-satker.php?page=input-spt" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">No. SPT</label>
								<div class="col-sm-7">
									<input type="text" name="no_spt" class="form-control" maxlength="32">
								</div>
							</div>
                            
							<div class="form-group">
								<label class="col-sm-3 control-label">Pegawai</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$data = mysql_query("SELECT * FROM tb_pegawai");        
										echo '<select name="nip" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih Pegawai</option>';    
										while ($row = mysql_fetch_array($data)) {    
											echo '<option value="'.$row['nip'].'">'. $row['nip'].' - '.$row['nama'].'</option>';    
										}    
										echo '</select>';
									?>
								</div>
							</div>
                        
							<div class="form-group">
								<label class="col-sm-3 control-label">Tanggal Berangkat</label>
								<div class="col-sm-4">
									<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" name="tgl_berangkat" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tanggal Kembali</label>
								<div class="col-sm-4">
									<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" name="tgl_kembali" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tujuan</label>
								<div class="col-sm-7">
									<input type="text" name="tujuan" class="form-control" maxlength="32">
								</div>
							</div>
						
							<div class="form-group">
								<label class="col-sm-3 control-label">Keperluan</label>
								<div class="col-sm-7">
									<input type="text" name="keperluan" class="form-control" maxlength="255">
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-3 control-label">Status</label>
								<div class="col-sm-7">
                                <select name="ket">
                                        <option value="belum proses">belum proses</option>
                                        <option value="proses">proses</option>
                                        <option value="pencarian dana">pencairan dana</option>
                                        <option value="selesai">selesai</option>
                                </select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-3 control-label">Keterangan Tugas</label>
								<div class="col-sm-7">
									<input type="text" name="ket_tugas" class="form-control" maxlength="255">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
									<a href="home-satker.php" type="button" class="btn btn-default">Cancel</a>
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