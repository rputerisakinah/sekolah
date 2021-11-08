<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

//query data sekolah berdasarkan id 
$guru = query ("SELECT * FROM guru WHERE id_guru = $id")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Guru</title>
</head>
<body>
	<h1>Ubah Data Guru</h1>

	<form action="submit_ubah_guru.php" method="post">
		<input type="hidden" name="id_guru" value="<?= $guru["id_guru"];?>">
		<ul>
			<li>
				<label for="nama_guru">Nama Guru :</label>
				<input type="text" name="nama_guru" id="nama_guru" required value="<?= $guru["nama_guru"];?>">

			</li>
			<li>
				<label for="alamat_guru">Alamat Guru :</label>
				<input type="text" name="alamat_guru" id="alamat_guru"value="<?= $guru["alamat_guru"];?>">
			</li>
			<li>
				<label for="bidang_studi">Bidang Studi :</label>
				<input type="text" name="bidang_studi" id="bidang_studi"value="<?= $guru["bidang_studi"];?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>


	</form>
</body>
</html>