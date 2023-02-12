<div class="content-wrapper">
	<section class="content-header">
      <h1>
        Data Mahasiswa
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Mahasiswa</li>
      </ol>
    </section>
    <section class="content">
    	<?= $this->session->flashdata('message') ?>
	    <button class="btn btn-primary mt-4 ml-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"> Tambah Data Mahasiswa</i></button>
	    <a href="<?= base_url('mahasiswa/print') ?>" class="btn btn-danger"><i class="fa fa-print"></i> Print</a>
			<div class="dropdown inline">
			  <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    <i class="fa fa-download"></i>Export
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li><a href="<?= base_url('mahasiswa/pdf') ?>">PDF</a></li>
			    <li><a href="<?= base_url('mahasiswa/excel') ?>">EXCEL</a></li>
			  </ul>
			</div>
			<div class="navbar-form navbar-right">
				<?= form_open('mahasiswa/search') ?>
				<input type="text" class="form-control" name="keyword" placeholder="Cari">
				<button type="submit" class="btn btn-success">Cari</button>
				<?= form_close() ?>
			</div>
    	<table class="table table-striped">
    		<tr>
    			<th>NO</th>
    			<th>NAMA MAHASISWA</th>
    			<th>NIM</th>
    			<th>TGL LAHIR</th>
    			<th>JURUSAN</th>
    			<th colspan="3">AKSI</th>
    		</tr>
    		<?php 
    			$i = 1;
    			foreach($mahasiswa as $mhs) :
    		 ?>
    		<tr>
    			<td><?= $i++ ?></td>
    			<td><?= $mhs->nama ?></td>
    			<td><?= $mhs->nim ?></td>
    			<td><?= $mhs->tgl_lahir ?></td>
    			<td><?= $mhs->jurusan ?></td>
    			<td>
    				<a href="<?= base_url().'mahasiswa/detail/'.$mhs->id ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
    			</td>
    			<td>
    				<a href="<?= base_url().'mahasiswa/edit/'.$mhs->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
    			</td>
    			<td>
    				<a href="<?= base_url().'mahasiswa/hapus/'.$mhs->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
    			</td>
    		</tr>
    		<?php endforeach; ?>
    	</table>
    </section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Data Input Mahasiswa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<?= form_open_multipart('mahasiswa/tambah_aksi') ?>
	        	<div class="form-group">
	        		<label for="nama">Nama Mahasiswa</label>
        			<input type="text" class="form-control" name="nama" id="nama">
	        	</div>
	        	<div class="form-group">
	        		<label for="nim">Nim</label>
        			<input type="text" class="form-control" name="nim" id="nim">
	        	</div>
	        	<div class="form-group">
	        		<label for="tgl_lahir">Tanggal Lahir</label>
        			<input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
	        	</div>
	        	<div class="form-group">
	        		<label for="jurusan">Jurusan</label>
        			<select class="form-control" name="jurusan">
        				<option value="">Pilih</option>
        				<option value="Akuntansi">Akuntansi</option>
        				<option value="Sistem Informasi">Sistem Informasi</option>
        				<option value="Teknik Informatika">Teknik Informatika</option>
        				<option value="Teknologi Informasi">Teknologi Informasi</option>
        			</select>
	        	</div>
	        	<div class="form-group">
	        		<label for="alamat">Alamat</label>
        			<input type="text" class="form-control" name="alamat" id="alamat">
	        	</div>
	        	<div class="form-group">
	        		<label for="email">Email</label>
        			<input type="text" class="form-control" name="email" id="email">
	        	</div>
	        	<div class="form-group">
	        		<label for="no_telp">No. Telepon</label>
        			<input type="text" class="form-control" name="no_telp" id="no_telp">
	        	</div>
	        	<div class="form-group">
	        		<label for="foto">Upload Foto</label>
        			<input type="file" class="form-control" name="foto" id="foto">
	        	</div>
	        	<button type="reset" class="btn btn-danger">Reset</button>
	        	<button type="submit" class="btn btn-primary">Simpan</button>
	        <?= form_close() ?>
	      </div>
	    </div>
	  </div>
	</div>
</div>