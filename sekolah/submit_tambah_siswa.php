<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
	
	//cek apakah data berhasil ditambah atau tidak
	if( tambah_siswa($_POST) > 0){
		echo "
		<script>
		alert('Data Berhasil Ditambah!');
		document.location.href = 'tbl_siswa.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('Data gagal ditambah!');
		document.location.href = 'tbl_siswa.php';
		</script>
		";
	}
	
}
?>