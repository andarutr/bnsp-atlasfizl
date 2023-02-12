<div class="content-wrapper">
	<div class="content">
		<?php foreach($mahasiswa as $mhs) : ?>
		<form action="<?= base_url().'mahasiswa/update/'.$mhs->id; ?>" method="POST">
			<div class="form-group">
        		<label for="nama">Nama Mahasiswa</label>
    			<input type="text" class="form-control" name="nama" id="nama" value="<?= $mhs->nama ?>">
        	</div>
        	<div class="form-group">
        		<label for="nim">Nim</label>
    			<input type="text" class="form-control" name="nim" id="nim" value="<?= $mhs->nim ?>">
        	</div>
        	<div class="form-group">
        		<label for="tgl_lahir">Tanggal Lahir</label>
    			<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $mhs->tgl_lahir ?>">
        	</div>
        	<div class="form-group">
        		<label for="jurusan">Jurusan</label>
    			<select class="form-control" name="jurusan">
    				<option value="<?= $mhs->jurusan ?>"><?= $mhs->jurusan ?></option>
    				<option value="Akuntansi">Akuntansi</option>
    				<option value="Sistem Informasi">Sistem Informasi</option>
    				<option value="Teknik Informatika">Teknik Informatika</option>
    				<option value="Teknologi Informasi">Teknologi Informasi</option>
    			</select>
        	</div>
        	<div class="form-group">
        		<label for="alamat">Alamat</label>
    			<input type="text" class="form-control" name="alamat" id="alamat" value="<?= $mhs->alamat ?>">
        	</div>
        	<div class="form-group">
        		<label for="email">Email</label>
    			<input type="text" class="form-control" name="email" id="email" value="<?= $mhs->email ?>">
        	</div>
        	<div class="form-group">
        		<label for="no_telp">No. Telepon</label>
    			<input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= $mhs->no_telp ?>">
        	</div>
        	<button type="submit" class="btn btn-primary">Simpan</button>	
		</form>
		<?php endforeach; ?>
	</div>
</div>