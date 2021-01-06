<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body background="dota.jpg">
<body>
	<div class="container">
		<div class="alert" style="text-align : center"><h4>Edit Data Mahasiswa Universitas Bumigora <br><br><img src="ubg.png" alt="ubg" style="width:200px;height:200px;"></h4></div>

		<?php

		require './connect.php';

		if (isset($_GET['url_nim'])){
		$input_nim = $_GET['url_nim'];
		$query = "SELECT * FROM mahasiswa WHERE nim='$input_nim'";
		$result = mysqli_query($link, $query);
		$isi = mysqli_fetch_object($result);
	}


		if (isset($_POST['simpan'])) {
			$input_nim = $_POST['txtnim'];
            $input_nama = $_POST['txtname'];
            $input_prodi = $_POST['txtprodi'];
			$input_alamat = $_POST['txtalamat'];
			
			$query = "UPDATE mahasiswa SET nama_mahasiswa='$input_nama', prodi='$input_prodi', alamat='$input_alamat' WHERE nim='$input_nim'";
			
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
				<input type="text" class="form-control" name="txtnim" value="<?= $isi->nim; ?>"readonly>
			</div>

			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtname" value="<?= $isi->nama_mahasiswa; ?>">
				
			</div>

            <div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi" value="<?= $isi->prodi; ?>">
			</div>

			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat" value="<?= $isi->alamat; ?>">
			</div>
<br>
			<input type="submit" class="btn btn-primary"
			 name="simpan" value="Simpan Update">

			 <a href="mahasiswa.php" class="btn btn-warning">Batal</a>
		</form>
	</div>

</body>
</html>