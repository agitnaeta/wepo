<div class="login">
	<div class="panel panel-default">
		<div class="panel-heading">
			<i class="glyphicon glyphicon-leaf"></i> Silahkan Login
		</div>
		<form action="<?php echo site_url('login');?>" method="POST" class="from-group">
		<div class="panel-body">
		<div class="text-center">
			<?php echo $this->session->flashdata('pesan');?><br>	
		</div>
		
			<label> <i class="glyphicon glyphicon-user"></i> Usename</label>
			<input required class="form-control" name="username" type="text" placeholder="Username">
			<label> <i class="glyphicon glyphicon-lock"></i> Password</label>
			<input required  class="form-control" name="password" type="password" placeholder="Passoword">
			<br>
			<div class="pull-right">
				<button class="btn btn-primary"> <i class="glyphicon glyphicon-log-in"></i> Login</button>
				<button type="reset" class="btn btn-warning"><i class="glyphicon glyphicon-off"></i> Batal</button>
			</div>
			</div>
		</form>
	</div>