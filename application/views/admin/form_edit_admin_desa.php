<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3>Edit Data Admin</h3>
	</div>
	<?php  foreach ($admin->result() as $row):?>
		<div class="panel-body">
			
			<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_admin_desa/edit_admin');?>">
			<input hidden name="kode_admin" value="<?php echo $row->kode_admin;?>" >
			<label>NIP</label>				
			<input value="<?php echo $row->nip;?>" class="form-control" name="nip" placeholder="NIP">
			<label>Nama Administrator</label>
			<input value="<?php echo $row->nama_admin;?>" class="form-control" name="nama_admin" placeholder="Nama Administrator">
			<label>Desa</label>
			<input value="<?php echo $row->desa;?>" class="form-control" name="desa" placeholder="Desa">
			<label>Username</label>
			<input value="<?php echo $row->username;?>" class="form-control" name="username" placeholder="Username">
			<label>Password</label>
			<input value="<?php echo $row->password;?>" class="form-control" name="password" placeholder="Password">
			<br>
			<button class="btn btn-block btn-primary"> <i class="glyphicon glyphicon-pencil"></i> Update</button>
			</form>	
		</div>
	<?php endforeach;?>
	</div>
</div>
<div class="col-md-3"></div>
