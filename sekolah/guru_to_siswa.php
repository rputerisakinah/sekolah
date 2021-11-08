<?php
require 'functions.php';
$result = query("SELECT a.*,b.nama_guru, c.nama_siswa FROM guru_to_siswa as a JOIN guru as b ON b.id_guru=a.id_guru JOIN siswa as c ON c.id_siswa = a.id_siswa");
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

	<a href="tambah_join.php">Tambah++</a>
	<br><br>

	<table border="1" cellpadding="15" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Id </th>
		<th>Nama Guru</th>
		<th>Nama Siswa</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ( $result as $row ) { ?>
	<tr>
		<td><?= $i ; ?></td>
		<td>
			<a href="ubah_join.php?id=<?=$row["id_guru_to_siswa"]; ?>">ubah</a>
			<a href="hapus_join.php?id=<?= $row["id_guru_to_siswa"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $row["id_guru_to_siswa"]; ?></td>
		<td><?= $row["nama_guru"]; ?></td>
		<td><?= $row["nama_siswa"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php } ?>

	</table>

</body>
</html>