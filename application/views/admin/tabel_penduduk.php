<script type="text/javascript">
	$(document).ready(function  () {
		$('#cari').hide();
		$('#tombol_cari').click(function () {
			$('#cari').toggle();
			return false;;
		});
	});
</script>
	
		<div class="text-center">
			<?php echo $this->session->flashdata('pesan');?>
		</div>
<table class="table table-hover table-striped table-condensed table-bordered table-responsive">
	<thead class="bg-success">
		<th colspan="12">
		<div class="btn-group">
			<a href="<?php echo site_url('admin/kelola_penduduk/form_tambah');?>" class="btn btn-sm btn-primary "><i class="glyphicon glyphicon-plus"></i> Tambah </a>
			<a href="" class="btn  btn-sm btn-primary"><i class="glyphicon glyphicon-refresh"></i> Muat Ulang</a>
			<button id="tombol_cari" href="#" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-search"></i> Cari</button>
		</div>
			<div class="pull-right">
				Jumlah Penduduk :<?php echo count($penduduk->result());?>
			</div>
		</th>
	</thead>
	<thead id="cari">
		<th colspan="9" class="bg-primary">
		<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_penduduk/cari');?>">
			<input required class="form-control input-sm" name="cari" placeholder="Cari Nama atau NIK...">
		</form>
		</th>
	</thead>
	<tbody>
		<tr class="text-center">
			<td class="bg-primary">#</td>
			<td class="bg-primary">No KTP</td>
			<td class="bg-primary">Nama</td>
			<td class="bg-primary">Tempat, Tanggal Lahir</td>
			<td class="bg-primary">Jenis Kelamin</td>
			<td class="bg-primary">RT/RW</td>
			<td class="bg-primary">Alamat</td>
			<td class="bg-primary">Berlaku Hingga</td>
			<td class="text-center bg-primary">Aksi</td>
		</tr>
		<?php $no=1;foreach ($penduduk->result() as $row):?>
		<tr title="<?php echo $row->nama;?>">
			<td><?php echo ($no ++);?></td>
			<td><?php echo $row->nik;?></td>
			<td><?php echo $row->nama;?></td>
			<td ><?php echo $row->tempat_lahir;echo ",";echo dateindo($row->tanggal_lahir);?></td>
			<td><?php echo $row->jenis_kelamin;?></td>
			<td><?php echo "$row->rt /"; echo $row->rw;?></td>
			<td><?php echo($row->dusun); echo "/$row->desa";?></td>
			<td><?php echo $row->berlaku_hingga;?></td>
			<td class="text-center">
				<a title="Lihat Data Penduduk" class="btn btn-info btn-sm" href="<?php echo site_url("admin/kelola_penduduk/detail/$row->nik");?>"><i class="glyphicon glyphicon-eye-open"></i> </a>
				<a title="Edit Data Penduduk" class="btn btn-warning btn-sm" href="<?php echo site_url("admin/kelola_penduduk/form_edit/$row->nik");?>"><i class="glyphicon glyphicon-edit"></i> </a>
				<a title="Hapus Data Penduduk" class="btn- btn-danger btn-sm" href="<?php echo site_url("admin/kelola_penduduk/hapus/$row->nik");?>"><i class="glyphicon glyphicon-remove"></i> </a>
			</td>
		</tr>
		<?php endforeach;?>
	</tbody>
</table>