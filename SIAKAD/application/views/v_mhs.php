<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-3"></div>
    		<div class="col-6">
    			<div class="card">
    				<table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">NAMA</th>
					      <th scope="col">NIM</th>
					      <th scope="col">ALAMAT</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach($mahasiswa as $mhs) : ?>
					    <tr>
					      <td><?= $mhs['nama']; ?></td>
					      <td><?= $mhs['nim']; ?></td>
					      <td><?= $mhs['alamat']; ?></td>
					    </tr>
					    <?php endforeach; ?>
					  </tbody>
					</table>
    			</div>
    		</div>
    		<div class="col-3"></div>
    	</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>