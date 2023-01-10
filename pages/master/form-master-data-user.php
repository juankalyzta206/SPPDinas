<section class="content-header">
    <h1>Master<small>Data User</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data User</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-admin.php?page=master-data-user" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">ID User</label>
								<div class="col-sm-7">
									<input type="text" name="id_user" class="form-control" placeholder="Username" maxlength="64">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama User</label>
								<div class="col-sm-7">
									<input type="text" name="nama_user" class="form-control" placeholder="Nama" maxlength="64">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Password</label>
								<div class="col-sm-7">
									<input type="text" name="password" class="form-control" placeholder="Password" maxlength="64">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Hak Akses</label>
								<div class="col-sm-7">
									<select name="hak_akses" class="form-control">
										<option value="">Pilih</option>
										<option value="Admin">Admin</option>
										<option value="User">User</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
									<a href="home-admin.php" type="button" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>