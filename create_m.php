<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body background="dota.jpg">
<body>
	<div class="container">
		<div class="alert" style="text-align : center"><h4>Tambah Data Mahasiswa Universitas Bumigora <br><br><img src="ubg.png" alt="ubg" style="width:200px;height:200px;"></h4></div>

		<?php

		require './connect.php';

		if (isset($_POST['simpan'])) {
			$input_nim = $_POST['txtnim'];
            $input_nama_mahasiswa = $_POST['txtname'];
            $input_prodi = $_POST['txtprodi'];
			$input_alamat = $_POST['txtalamat'];

			$query = "INSERT INTO mahasiswa VALUES ('$input_nim', '$input_nama_mahasiswa','$input_prodi','$input_alamat')";
			$result = mysqli_query($link, $query);
			if($result) {
				header('location: mahasiswa.php');
			} else {
				echo 'Gagal Disimpan : ' . mysqli_error($link);
			}
		}

		?>

		<form action="" method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" name="txtnim">
			</div>

			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtname">
				
			</div>

            <div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi">
			</div>

			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat">
			</div>
<br>
			<input type="submit" class="btn btn-primary"
			 name="simpan" value="Simpan Data">

			 <a href="mahasiswa.php" class="btn btn-warning">Batal</a>
		</form>
	</div>

</body>
</html>