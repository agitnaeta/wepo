<!DOCTYPE html>
<html>
<head>
	<title>Administratos-Web Potensi</title>
	
</head>
<body>
<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
					 <a class="navbar-brand" href="<?php echo base_url('admin/beranda');?>"><i class="glyphicon glyphicon-home"></i> Administrator</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="<?php echo site_url('admin/kelola_penduduk');?>" target="iframe">
							<i class="glyphicon glyphicon-user"></i>
							  Kelola Penduduk</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/kelola_admin_desa');?>" target="iframe"> 
							<i class="glyphicon glyphicon-retweet"></i>
							 Kelola Admin Desa</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/kelola_pimpinan');?>" target="iframe">
							<i class="glyphicon glyphicon-cog"></i>
								Setting Data Pimpinan
							</a>
						</li>
						<li>
							<a href="<?php echo site_url('admin/artikel');?>" target="iframe">
							<i class="glyphicon glyphicon-file"></i>
								Artikel
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
					<li>
						<a href=""><i class="glyphicon glyphicon-refresh"> </i> Reload Aplikasi</a>
					</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="glyphicon glyphicon-user"></i>  <?php echo ( $username);?><strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo site_url('admin/kelola_super_admin');?>" target="iframe">
									<i class="glyphicon glyphicon-wrench"></i>  Setting Akun</a>
								</li>
								
								<li class="divider">
								</li>
								<li>
									<a href="<?php echo site_url('login/logout');?>"><i class="glyphicon glyphicon-off"></i> Logout</a>
								</li>
							</ul>
						</li>
						
						<li>
							<a href=""> </a>
						</li>
					</ul>
					
				</div>
		</nav>
		<br>
		<br>
		<br>
		<br>
</div>
<div class="container-fluid">
	<div class="row clearfix">
	
	<div class="col-md-12">
		<?php echo $this->session->flashdata('pesan');?>
		<iframe name="iframe" frameborder="0" height="150%" width="100%" src="<?php echo site_url('admin/beranda/status');?>"></iframe>
	</div>
	</div>
</div>
</body>
</html>
