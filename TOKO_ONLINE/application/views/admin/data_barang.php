<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus fa-sm"></i>Tambah Barang</button>

	<table class="table table-bordered">
		<tr>
			<th>NO</th>
			<th>NAMA BARANG</th>
			<th>KETERANGAN</th>
			<th>KATEGORI</th>
			<th>HARGA</th>
			<th>STOK</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php 
		$no = 1;
		foreach($barang as $brg) : ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $brg->nama_brg ?></td>
			<td><?= $brg->keterangan ?></td>
			<td><?= $brg->kategori ?></td>
			<td>Rp <?= number_format($brg->harga,0,',','.') ?></td>
			<td><?= $brg->stok ?></td>
			<td>
				<a class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></a>
			</td>
			<td>
				<a href="<?= base_url('admin/data_barang/edit/').$brg->id_brg ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
			</td>
			<td>
				<a href="<?= base_url('admin/data_barang/hapus/').$brg->id_brg ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url().'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" class="form-control" name="nama_brg">
        	</div>
        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" class="form-control" name="keterangan">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<input type="text" class="form-control" name="kategori">
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" class="form-control" name="harga">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" class="form-control" name="stok">
        	</div>
        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" class="form-control" name="gambar">
        	</div>
        	<button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
        	<button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>