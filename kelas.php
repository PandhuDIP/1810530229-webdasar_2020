<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" > -->
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Data Dosen</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
				</thead>
			<tbody>

				<?php

			require '../Koneksi.php';
				$query ="SELECT * FROM dosen"
				// jalankan query date_interval_create_from_date_string()
				$result = mysqli_query($link, $query);
				while ($isi = mysqli_fetch_object($result)) {
					# code...

					?>

				<tr>
				<td><?=$no++; ?></td>
				<td><?= $isi->nip; ?></td>
				<td><?= $isi->nama_dosen; ?></td>
				<td><?= $isi->alamat; ?></td>
				<td>
					<a href=""class="btn btn-danger">Delete</a>
					<a href=""class="btn btn-warning">Edit</a>
				</td>
				
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

</body>
</html>