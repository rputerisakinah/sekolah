<?php
require 'functions.php';
$siswa = query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

		<h1>
		<a href= "index.php" style = " color : green "> Daftar Nama Guru</a>
		<a href= "tbl_siswa.php" style = " color : green "> Daftar Nama Siswa</a>
		<a href= "guru_to_siswa.php" style = " color : green "> Daftar Guru Mengajar Siswa</a>
		</h1>

	<a href="tambah_siswa.php">Tambah data siswa</a>
	<br><br>

	<table border="1" cellpadding="15" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Id Siswa</th>
		<th>Nama Siswa</th>
		<th>Kelas</th>
		<th>Alamat</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ( $siswa as $row ) { ?>
	<tr>
		<td><?= $i ; ?></td>
		<td>
			<a href="ubah_siswa.php?id=<?=$row["id_siswa"]; ?>">ubah</a>
			<a href="hapus_siswa.php?id=<?= $row["id_siswa"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $row["id_siswa"]; ?></td>
		<td><?= $row["nama_siswa"]; ?></td>
		<td><?= $row["kelas"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php } ?>

	</table>

</body>
</html>