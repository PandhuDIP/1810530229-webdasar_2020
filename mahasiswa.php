<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" > -->
</head>
<body background="dota.jpg">
	<div class="container">
		<div class="alert" style="text-align : center"><h4>Selamat Datang di Website Sistem Informasi Mahasiswa Universitas Bumigora <br><br><img src="ubg.png" alt="ubg" style="width:200px;height:200px;"></h4></div>


		<table class="table table-bordered" style="text-align: center; ">
			
		
			<thead>
				<td colspan="6" style="text-align: center; background-color: blue;color: white"><b>Informasi Umum Data Mahasiswa</b></td>
				<tr style="text-align: center" bgcolor="grey">
					<th>No</th>
					<th>NIM</th>
					<th>Nama</th>
					<th>Prodi</th>
					<th>Alamat</th>
					<th>Aksi</th>
				</tr>
			</thead>
			
			<tbody>
				<?php

				include("connect.php");
				$no =1;
				$query = "SELECT * FROM mahasiswa";

				$result = mysqli_query($link, $query);
				while ($isi= mysqli_fetch_object($result)) {
					# code...
				?>

				<tr bgcolor="white">

				<td><?= $no++; ?></td>
				<td><?= $isi->nim; ?></td>
				<td><?= $isi->nama_mahasiswa; ?></td>
				<td><?= $isi->prodi; ?></td>
				<td><?= $isi->alamat; ?></td>
				<!-- <td><?=$isi->aksi; ?></td> -->
				<td>
				<a href="delete_m.php?nim=<?php echo $isi->nim; ?>"
					class="btn btn-danger">Delete</a>

					<a href="update_mahasiswa.php?url_nim=<?php echo $isi->nim; ?>"
					class="btn btn-warning">Edit</a>
				</td>
				<!-- <td><?=$isi->aksi; ?></td> -->
				</tr>

				<?php } ?>

				
			</tbody>

		</table>
			<a href="create_m.php" class="btn btn-info">Tambah Data </a>
			<a href="index.php" class="btn btn-info">Data Dosen </a>
	</div>
<br><br>
	<marquee><i><p>@pandhudip-universitas_bumigora-pemrograman_web</i></p></marquee>

</body>
</html>