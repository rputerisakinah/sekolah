<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Siswa</title>
</head>
<body>
	<h1>Tambah Data Siswa</h1>

	<form action="submit_tambah_siswa.php" method="post">
		<ul>
			<li>
				<label for="nama_siswa">Nama Siswa :</label>
				<input type="text" name="nama_siswa" id="nama_siswa" required>

			</li>
			<li>
				<label for="kelas">Kelas :</label>
				<input type="text" name="kelas" id="kelas" required>
			</li>
			<li>
				<label for="alamat">Alamat:</label>
				<input type="text" name="alamat" id="alamat" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
		</ul>


	</form>
</body>
</html>