<!DOCTYPE html>
<html>
<head>
	<title>Data Dosen</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body background="dota.jpg">
<body>
	<div class="container">
		<div class="alert" style="text-align : center"><h4>Update Data Dosen Universitas Bumigora <br><br><img src="ubg.png" alt="ubg" style="width:200px;height:200px;"></h4></div>

		<?php

		require './Koneksi.php';

		if (isset($_GET['url_nip'])){
		$input_nip = $_GET['url_nip'];
		$query = "SELECT * FROM dosen WHERE nip='$input_nip'";
		$result = mysqli_query($link, $query);
		$isi = mysqli_fetch_object($result);
	}


		if (isset($_POST['simpan'])) {
			$input_nip = $_POST['txtnip'];
			$input_nama = $_POST['txtname'];
			$input_alamat = $_POST['txtalamat'];
			
			$query = "UPDATE dosen SET nama_dosen='$input_nama', alamat='$input_alamat' WHERE nip='$input_nip'";
			
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
				<input type="text" class="form-control" name="txtnip" value="<?= $isi->nip; ?>"readonly>
			</div>

			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtname" value="<?= $isi->nama_dosen; ?>">
				
			</div>

			<div class="form-group">
				<label for="">Alamat</label>
				<input type="text" class="form-control" name="txtalamat" value="<?= $isi->alamat; ?>">
			</div>
<br>
			<input type="submit" class="btn btn-primary"
			 name="simpan" value="Simpan Update">

			 <a href="index.php" class="btn btn-warning">Batal</a>
		</form>
	</div>

</body>
</html>