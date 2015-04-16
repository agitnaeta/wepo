<script type="text/javascript">
	$(document).ready(function  () {
		$('#form_tambah').hide();
		$('#form_cari').hide();
		$('#form_edit').hide();
		$('#tambah').click(function  () {
			$('#form_tambah').toggle('slow');
		});
		$("#cari").click(function  () {
			$('#form_cari').toggle();
		})
		
	});
</script>
<div>
<div class="text-center">
	<?php echo $this->session->flashdata('pesan');?>
</div>
	<table class="table table-bordered table-hover table-condensed">
		<thead class="bg-success">
			<th colspan="7">
				<div class="btn-group">
					<button id="tambah" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
					<a href="" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-refresh"></i> Muat Ulang</a>
					<button id="cari" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-search"></i> Cari</button>
				</div>
			</th>	
		</thead>
		<thead id="form_cari">
		<th colspan="7" class="bg-primary">
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_admin_desa/cari');?>">
			<input required class="form-control input-sm" name="cari" placeholder="Cari Nama atau NIP...">
		</form>
		</th>
		</thead>
		<thead class="bg-primary" >
			<th class="text-center">#</th>
			<th class="text-center">NIP</th>
			<th class="text-center">Nama Admin</th>
			<th class="text-center">Desa</th>
			<th class="text-center">username</th>
			<th class="text-center">Pasworrd</th>
			<th class="text-center">Aksi</th>
		</thead>
		
		<thead id="form_tambah">
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_admin_desa/tambah');?>">
			<tr class="bg-primary">
				
				<td>#</td>
				<td><input class="form-control" name="nip" placeholder="NIP"></td>
				<td><input class="form-control" name="nama_admin" placeholder="Nama Administrator"></td>
				<td><input class="form-control" name="desa" placeholder="Desa"></td>
				<td><input class="form-control" name="username" placeholder="Username"></td>
				<td><input class="form-control" name="password" placeholder="Password"></td>
				<td><button class="btn btn-block btn-primary"> <i class="glyphicon glyphicon-save"></i> Simpan</button></td>
			</tr>
		</form>	
		</thead>
		<thead id="form_edit">
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_admin_desa/tambah');?>">
			<tr class="bg-warning">
				
				<td><input class="form-control" name="nip" placeholder="NIP"></td>
				<td><input class="form-control" name="nip" placeholder="NIP"></td>
				<td><input class="form-control" name="nama_admin" placeholder="Nama Administrator"></td>
				<td><input class="form-control" name="desa" placeholder="Desa"></td>
				<td><input class="form-control" name="username" placeholder="Username"></td>
				<td><input class="form-control" name="password" placeholder="Password"></td>
				<td><button class="btn btn-block btn-primary"> <i class="glyphicon glyphicon-save"></i> Simpan</button></td>
			</tr>
		</form>	
		</thead>
		<?php $no=1; foreach ($admin->result() as $row):?>
		<tbody>
			<tr title="<?php echo $row->nama_admin;?>">
				<td><?php echo $no++;?></td>
				<td><?php echo $row->nip;?></td>
				<td><?php echo $row->nama_admin;?></td>
				<td><?php echo $row->desa;?></td>
				<td><?php echo $row->username;?></td>
				<td><?php echo $row->password;?></td>
				<td class="text-center">
				<a  title="Lihat Data Admin" class="btn btn-info btn-sm" href="<?php echo site_url("admin/kelola_admin_desa/detail/$row->kode_admin");?>"><i class="glyphicon glyphicon-eye-open"></i> </a>
				<a title="Edit Data Admin" class="btn btn-warning btn-sm" href="<?php echo site_url("admin/kelola_admin_desa/form_edit/$row->kode_admin");?>"><i class="glyphicon glyphicon-edit"></i> </a>
				<a onclick="myFunction()" title="Hapus Data Admin" class="btn- btn-danger btn-sm" href="#" ><i class="glyphicon glyphicon-remove"></i> </a>
			</td>
			</tr>
		</tbody>
		<?php endforeach;?>
	</table>
</div>
<script>
function myFunction() {
    var txt;
    var r = confirm("Anda Yakin Ingin Menghapus?");
    if (r == true) {
        txt = "You pressed OK!";
    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
