<?php
require 'functions.php';
$result = query("SELECT * FROM guru");
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

	<a href="tambah.php">Tambah data guru</a>
	<br><br>

	<table border="1" cellpadding="15" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Id Guru</th>
		<th>Nama Guru</th>
		<th>Alamat Guru</th>
		<th>Bidang Studi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach ( $result as $row ) { ?>
	<tr>
		<td><?= $i ; ?></td>
		<td>
			<a href="ubah.php?id=<?=$row["id_guru"]; ?>">ubah</a>
			<a href="hapus.php?id=<?= $row["id_guru"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $row["id_guru"]; ?></td>
		<td><?= $row["nama_guru"]; ?></td>
		<td><?= $row["alamat_guru"]; ?></td>
		<td><?= $row["bidang_studi"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php } ?>

	</table>

</body>
</html>