<?php
require 'functions.php';

$id = $_GET ["id"];

if( hapus_siswa($id) > 0 ){
	echo "
		<script>
			alert('Data Berhasil Dihapus!');
			document.location.href = 'tbl_siswa.php';
		</script>
	";
	} else {
		echo "
		<script>
			alert('Data gagal dihapus!');
			document.location.href = 'tbl_siswa.php';
		</script>
		";
	}

?>