<script type="text/javascript">
	$(document).ready(function  () {
		$('#edit').hide();

		$('#update').click( function  () {
			$('#tampil').hide();
			$('#edit').show();
		})
		$('#cancel').click( function  () {
			$("#edit").hide();
			$('#pesan').hide();
			$('#tampil').show();
			return false;
		})
	})
</script>
<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Data Super Admin</h3>
		</div>
		<?php foreach ($superadmin->result() as $row):?>
		<div id="pesan" class="panel-body">
			<div class="text-center">
				<?php echo $this->session->flashdata('pesan');?>
			</div>
		</div>	
		<div id="tampil">
			<div class="panel-body">
			
			<label>Username</label>
			<input class="form-control" readonly name="username" value="<?php echo $row->username;?>">
			<label>Password</label>
			<input class="form-control" readonly name="password" value="<?php echo $row->password;?>">
		</div>
		<div class="panel-footer text-right">
			<button id="update" class="btn btn-warning"> <i class="glyphicon glyphicon-edit"></i> Edit</button>
		</div>
		</div>
		<div id="edit">
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_super_admin/update');?>">
			<div class="panel-body">
			<input hidden name="kode_admin" value="<?php echo $row->kode_admin;?>">
			<label>Username</label>
			<input class="form-control"  name="username" value="<?php echo $row->username;?>">
			<label>Password</label>
			<input class="form-control"  name="password" value="<?php echo $row->password;?>">
		
		</div>
		<div class="panel-footer text-right">
			<button type="submit" class="btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Update</button>
			</form>	
			<button id="cancel" class="btn btn-default"> <i class="glyphicon glyphicon-remove"></i> Cancel</button>
		</div>
		
		</div>
	<?php endforeach;?>
	</div>
</div>
<div class="col-md-3"></div>