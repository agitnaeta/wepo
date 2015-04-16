<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel panel-heading">
			<h3>Detail Penduduk</h3> 
			<div class="pull-right"></div>
		</div>
		<div class="panel panel-body">
			<table class="table table-condensed  table-hover table-striped">
			<?php foreach ($penduduk->result() as $row):?>
				<tr><td>NIK</td><td>:<?php echo $row->nik;?></td></tr>
				<tr><td>NAMA</td><td>:<?php echo $row->nama;?></td>
				<tr><td>Tempat,Tanggal Lahir</td><td>: <?php echo "$row->tempat_lahir,"; echo dateindo($row->tanggal_lahir);?></td></tr>
				<tr><td>Jenis Kelamin</td><td>:<?php echo $row->jenis_kelamin;?></td></tr>
				<tr><td>Alamat</td><td>: <?php echo "$row->dusun/"; echo "$row->desa";?></td></tr>
				<tr><td>RT/RW</td><td>:<?php echo "$row->rt/"; echo "$row->rw";?></td></tr>
				<tr><td>Kecamatan</td><td>:<?php echo $row->kecamatan;?></td></tr>
				<tr><td>Agama</td><td>:<?php echo $row->agama;?></td></tr>
				<tr><td>Status</td><td>:<?php echo $row->status;?></td></tr>
				<tr><td>Pekerjaan</td><td>:<?php echo $row->pekerjaan;?></td></tr>
				<tr><td>Kewarganegaraan</td><td>:<?php echo $row->kewarganegaraan;?></td></tr>
				<tr><td>Berlaku Higga</td><td>:<?php echo $row->berlaku_hingga;?></td></tr>
				<tr>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<a class="btn btn-default" href="<?php echo site_url('admin/kelola_penduduk');?>">Kembali</a>	
					</td>
					<td class="text-right">
						<a class="btn btn-warning" href=""><i class="glyphicon glyphicon-edit"></i> Edit</a>
						<a class="btn btn-danger" href=""> <i class="glyphicon glyphicon-remove"></i> Hapus</a>	
					</td>
				</tr>
			<?php endforeach;?>					
			</table>
		</div>
	</div>
</div>