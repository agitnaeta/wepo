<div class="col-md-12">
<h2>Statistik Sementara</h2>
<hr>
	<div class="col-xs-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2>
					<i class="glyphicon glyphicon-user"></i> 
					<div class="pull-right">
					<?php echo count($penduduk->result());?>
					</div>
				</h2>
				<h4>Jumlah Penduduk</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_penduduk');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h2>
					<i class="glyphicon glyphicon-retweet"></i> 
					<div class="pull-right">
					<?php echo count($admin->result());?>
					</div>
				</h2>
				<h4>Jumlah Amin Desa</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_admin_desa');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h2>
					<i class="glyphicon glyphicon-cog"></i> 
					<div class="pull-right">
					<?php echo ($nama_camat);?>
					</div>
				</h2>
				<h4>Data Pimpnan</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_pimpinan');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
	<div class="col-xs-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h2>
					<i class="glyphicon glyphicon-wrench"></i> 
					<div class="pull-right">
					<?php echo ($username);?>
					</div>
				</h2>
				<h4>Detail Akun</h4>
			</div>
			<a target="iframe" href="<?php echo site_url('admin/kelola_super_admin');?>">
			<div class="panel-body">
				<div class="pull-right">
					 Lihat Detail <i class="glyphicon glyphicon-forward"> </i>
				</div>
			</div>
			</a>
		</div>
	</div>
</div>