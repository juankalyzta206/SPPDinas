<section class="content-header">
    <h1>Kwitansi<small>Rincian Biaya Perjalanan Dinas</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-bendahara.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Kwitansi</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-bendahara.php?page=input-kwitansi" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">No. Kwitansi</label>
								<div class="col-sm-7">
									<input type="text" name="no_kwitansi" class="form-control" maxlength="8">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">NO. SPPD</label>
								<div class="col-sm-7">
									<?php
										include "dist/koneksi.php";
										$data = mysql_query("SELECT a.* , b.*, c.* FROM tb_sppd a, tb_spt b, tb_pegawai c WHERE a.no_spt = b.no_spt && b.nip = c.nip ORDER BY no_sppd");        
										echo '<select name="no_sppd" onchange="changeValue(this.value)" class="form-control">';    
										echo '<option value="">Pilih No. SPPD</option>';    
										while ($row = mysql_fetch_array($data)) {    
											echo '<option value="'.$row['no_sppd'].'">'. $row['no_sppd'].' - '.$row['nama'].'</option>';    
										}    
										echo '</select>';
									?>
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
									<a href="home-bendahara.php" type="button" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>