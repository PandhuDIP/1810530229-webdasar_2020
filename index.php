<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" > -->
</head>
<body background="dota.jpg">
<body>
	<div class="container">
		<div class="alert" style="text-align : center"><h4> Data Dosen Universitas Bumigora <br><br><img src="ubg.png" alt="ubg" style="width:200px;height:200px;"></h4></div>

		
		
		<table class="table table-bordered">
			<thead>
			<td colspan="6" style="text-align: center; background-color: blue;color: white"><b>Informasi Umum Data Dosen</b></td>
				<tr style="text-align: center" bgcolor="grey">
					<th>No</th>
					<th>NIP</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				include("Koneksi.php");
				$no=1;
				$query = "SELECT * FROM dosen";

				$result = mysqli_query($link, $query);
				while ($isi= mysqli_fetch_object($result)) {
					# code...
				?>

				<tr style="text-align: center" bgcolor="white">

				<td><?=$no++; ?> </td>
				<td><?=$isi->nip; ?></td>
				<td><?=$isi->nama_dosen; ?></td>
				<td><?=$isi->alamat; ?></td>
				<!-- <td><?=$isi->aksi; ?></td>  -->
				<td>
					<a href="delete.php?nip=<?php echo $isi->nip; ?>"
					class="btn btn-danger">Delete</a>

					<a href="update.php?url_nip=<?php echo $isi->nip; ?>"
					class="btn btn-warning">Edit</a>

				</td>
				<!-- <td><?=$isi->aksi; ?></td> -->
				</tr>

				<?php } ?>

				
			</tbody>

		</table>
		<a href="create.php" class="btn btn-info">Tambah Data</a>
		<a href="mahasiswa.php" class="btn btn-info">Data Mahasiswa</a><br><br>
	</div>

</body>
</html>