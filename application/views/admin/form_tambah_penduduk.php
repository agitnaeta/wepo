<div class="col-md-12">
<h4>Tambah Data Penduduk</h4>
<hr>
	<form class="form-group" method="post" action="<?php echo site_url('admin/kelola_penduduk/tambah');?>">
	<div class="panel panel-default">
	<div class="panel-heading">
		Form Data Penduduk
		<div class="pull-right"><a class="btn btn-primary btn-sm" href=""><i class="glyphicon glyphicon-refresh"></i> </a></div>
	</div>
	<div class="panel-body">
	<small class="text-danger">* Tulis Dengan Huruf KAPITAL</small>		
			<table class="table table-condensed table-hover">
				<tr>
					<td width="50%">
						<label>NIK</label>
						<input min="0" name="nik" type="number" class="form-control input-sm" placeholder="NIK">
						<label>Nama Lengkap</label>
						<input name="nama" type="text" class="form-control input-sm" placeholder="Nama Lengkap">
						<label>Tempat Lahir</label>
						<input name="tempat_lahir" type="text" class="form-control input-sm" placeholder="Tempat Lahir">
						<label>Tanggal Lahir</label>
						<input name="tanggal_lahir" type="date" class="form-control input-sm" placeholder="hh/bb/tttt - (Hari/Bulan/Tahun)">
						
						<label>RT/RW</label>
						<div class="row">
						  <div class="col-md-3">
						    <div class="input-group">
						      <span class="input-group-btn">
						        <button class="btn btn-primary btn-sm" type="button">RT</button>
						      </span>
						     <input class="form-control input-sm" name="rt">
						    </div>
						  </div>
						  <div class="col-md-3">
						    <div class="input-group">
						      <span class="input-group-btn">
						         <button class="btn btn-primary btn-sm" type="button">RW</button>
						      </span>
						      <input class="form-control input-sm" name="rw">
						    </div>
						  </div>
						</div>
						<br>
						<label>Jenis Kelamin :</label>
						&nbsp;
						<input class="" type="radio" name="jenis_kelamin" value="LAKI-LAKI"> 
						 Laki-Laki  &nbsp;&nbsp;&nbsp;
						<input class="" type="radio" name="jenis_kelamin" value="PEREMPUAN">
						 Perempuan
					</td>
					<td>
						<label>Desa</label>
						<input class="form-control input-sm" name="desa" placeholder="Desa/Keluarahan">
						<label>Kecamatan</label>
						<input class="form-control input-sm" name="kecamatan" placeholder="Kecamatan">
						<label>Status Perkawinan</label>
						<select class="form-control input-sm" name="status">
							<option selected value="">Pilih Status</option>
							<option value="KAWIN">KAWIN</option>
							<option value="BELUM KAWIN">BELUM KAWIN</option>
						</select>
						<label>Pekerjaan</label>
						<input class="form-control input-sm" name="pekerjaan" placeholder="Pekerjaan">
						<label>Kewarganegaraan</label>
						<select name="kwn" class="form-control input-sm">
							<option selected value="">Pilih</option>
							<option value="WNI">WNI</option>
							<option value="WNA">WNA</option>
						</select>
						<label>Berlaku Hingga</label>
						<input name="berlaku_hingga" type="date" class="form-control input-sm" placeholder="hh/bb/tttt - (Hari/Bulan/Tahun)">
					</td>
				</tr>
			</table>
	
			<a class="btn btn-default" href="<?php echo base_url('admin/kelola_penduduk');?>"><i class="glyphicon glyphicon-fast-backward"></i> Kembali</a>
	<div class="pull-right">
		<button class="btn-primary btn" type="submit"><i class="glyphicon glyphicon-floppy-save"></i> Simpan</button>
		<button class="btn btn-warning" type="reset"><i class="glyphicon glyphicon-retweet"></i> Reset</button>
	</div>
		
	</div>
	</form>
	</div>
	
</div>
