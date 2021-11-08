<?php
require 'functions.php';
$result = query ("SELECT * FROM guru");
$siswa = query ("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Guru Mengajar Siswa</title>
</head>
<body>
	<h1>Tambah Data Guru Mengajar Siswa</h1>

	<form action="submit_tambah_join.php" method="post">	
	<table>

		Nama guru:
		<select name = "id_guru">
		<?php foreach ($result as $row ) { ?>
			<option value ="<?=$row ['id_guru']?>"><?=$row['nama_guru']?></option>
		<?php }?>
		</select>

	</table>

	<table>
		Nama Siswa:
		<select name = "id_siswa">
		<?php foreach ($siswa as $row ) { ?>
			<option value ="<?=$row ['id_siswa']?>"><?=$row['nama_siswa']?></option>
		<?php }?>
		</select>
			<li>
				<button type="submit" name="submit">Tambah Data</button>
			</li>
	</table>
	</form>
</body>
</html>