<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

//query data sekolah berdasarkan id 
$siswa = query ("SELECT * FROM siswa WHERE id_siswa = $id")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Siswa</title>
</head>
<body>
	<h1>Ubah Data Siswa</h1>

	<form action="submit_ubah_siswa.php" method="post">
		<input type="hidden" name="id_siswa" value="<?= $siswa["id_siswa"];?>">
		<ul>
			<li>
				<label for="nama_guru">Nama Siswa :</label>
				<input type="text" name="nama_siswa" id="nama_siswa" required value="<?= $siswa["nama_siswa"];?>">

			</li>
			<li>
				<label for="alamat_guru">Kelas :</label>
				<input type="text" name="kelas" id="kelas" value="<?= $siswa["kelas"];?>">
			</li>
			<li>
				<label for="bidang_studi">Alamat :</label>
				<input type="text" name="alamat" id="alamat" value="<?= $siswa["alamat"];?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>


	</form>
</body>
</html>