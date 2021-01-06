<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body background="dota.jpg">
<body>
	<div class="container">
		<div class="alert" style="text-align : center"><h4>Tambah Data Dosen Universitas Bumigora <br><br><img src="ubg.png" alt="ubg" style="width:200px;height:200px;"></h4></div>

		<?php

		require './Koneksi.php';

		if (isset($_POST['simpan'])) {
			$input_nip = $_POST['txtnip'];
			$input_nama = $_POST['txtname'];
			$input_alamat = $_POST['txtalamat'];

			$query = "INSERT INTO dosen VALUES ('$input_nip', '$input_nama', '$input_alamat')";
			$result = mysqli_query($link, $query);
			if($result) {
				header('location: index.php');
			} else {
				echo 'Gagal Disimpan : ' . mysqli_error($link);
			}
		}

		?>

		<form action="" method="post">
			<div class="form-group">
				<label for="">NIP</label>
				<input type="text" class="form-control" name="txtnip">
			</div>

			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtname">
				
			</div>

			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat">
			</div>
<br>
			<input type="submit" class="btn btn-primary"
			 name="simpan" value="Simpan Data">

			 <a href="index.php" class="btn btn-warning">Batal</a>
		</form>
	</div>

</body>
</html>