<script type="text/javascript">
	$(document).ready(function  () {
		$('#edit').hide();
		$('#update').click( function  () {
			$('#tampil').hide();
			$('#edit').show();
		})
		$('#cancel').click( function  () {
			$('#edit').hide();
			$('#tampil').show();
			return false;
		})
	})
</script>
<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Data Pimpinan</h3>
		</div>
		<?php foreach ($pimpinan->result() as $row):?>
		<div class="panel-body">
			<div class="text-center">
				<?php echo $this->session->flashdata('pesan');?>
			</div>
		</div>	
		<div id="tampil">
			<div class="panel-body">
			<label>NIP</label>
			<input class="form-control" readonly name="nip" value="<?php echo $row->nip;?>">
			<label>Nama</label>
			<input class="form-control" readonly name="nama" value="<?php echo $row->nama;?>">
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
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_pimpinan/update');?>">
			<div class="panel-body">
			<label>NIP</label>
			<input hidden name="id" value="<?php echo $row->id;?>">
			<input class="form-control"  name="nip" value="<?php echo $row->nip;?>">
			<label>Nama</label>
			<input class="form-control"  name="nama" value="<?php echo $row->nama;?>">
			<label>Username</label>
			<input class="form-control"  name="username" value="<?php echo $row->username;?>">
			<label>Password</label>
			<input class="form-control"  name="password" value="<?php echo $row->password;?>">
		
		</div>
		<div class="panel-footer text-right">
			<button type="submit" class="btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Update</button>
			<button id="cancel" class="btn btn-danger"> <i class="glyphicon glyphicon-remove"></i> Cancel</button>
		</div>
		</form>	
		</div>
	<?php endforeach;?>
	</div>
</div>
<div class="col-md-3"></div>