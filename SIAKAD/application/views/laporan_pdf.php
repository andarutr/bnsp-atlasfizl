<!DOCTYPE html>
<html><head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head><body>
	<table>
		<tr>
			<th>NO</th>
			<th>NAMA MAHASISWA</th>
			<th>NIM</th>
			<th>TANGGAL LAHIR</th>
			<th>JURUSAN</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>NO TELEPON</th>
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
			<td><?= $mhs->alamat ?></td>
			<td><?= $mhs->email ?></td>
			<td><?= $mhs->no_telp ?></td>
		</tr>
		<?php
		endforeach; ?>
	</table>
</body></html>