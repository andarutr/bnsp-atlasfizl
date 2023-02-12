<div class="content-wrapper">
	<div class="content">
		<h4><strong>DETAIL DATA MAHASISWA</strong></h4>
		
		<table class="table table-striped">
			<tr>
				<th>NAMA LENGKAP</th>
				<td><?= $detail->nama ?></td>
			</tr>
			<tr>
				<th>NIM</th>
				<td><?= $detail->nim ?></td>
			</tr>
			<tr>
				<th>TGL LAHIR</th>
				<td><?= $detail->tgl_lahir ?></td>
			</tr>
			<tr>
				<th>JURUSAN</th>
				<td><?= $detail->jurusan ?></td>
			</tr>
			<tr>
				<th>ALAMAT</th>
				<td><?= $detail->alamat ?></td>
			</tr>
			<tr>
				<th>EMAIL</th>
				<td><?= $detail->email ?></td>
			</tr>
			<tr>
				<th>NO. TELEPON</th>
				<td><?= $detail->no_telp ?></td>
			</tr>
			<tr>
				<th>Foto</th>
				<td>
					<img src="<?= base_url() ?>assets/img/<?= $detail->foto ?>" width="80" height="110">
				</td>
			</tr>
		</table>
		<a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-success">Kembali</a>
	</div>
</div>