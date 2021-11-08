<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Guru</title>
</head>
<body>
	<h1>Tambah Data Guru</h1>

	<form action="submit_tambah_guru.php" method="post">
		<ul>
			<li>
				<label for="nama_guru">Nama Guru :</label>
				<input type="text" name="nama_guru" id="nama_guru" required>

			</li>
			<li>
				<label for="alamat_guru">Alamat Guru :</label>
				<input type="text" name="alamat_guru" id="alamat_guru" required>
			</li>
			<li>
				<label for="bidang_studi">Bidang Studi :</label>
				<input type="text" name="bidang_studi" id="bidang_studi" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>


	</form>
</body>
</html>