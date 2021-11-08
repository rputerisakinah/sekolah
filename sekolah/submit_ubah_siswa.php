<?php
require 'functions.php';

// ambil data di URL


//query data sekolah berdasarkan id 



// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
	
	//cek apakah data berhasil ditambah atau tidak
	if( ubah_siswa($_POST) > 0){
		echo "
		<script>
		alert('Data Berhasil Diubah!');
		document.location.href = 'tbl_siswa.php';
		</script>
		";
	} else {
		echo "
		<script>
		alert('Data gagal diubah!');
		document.location.href = 'tbl_siswa.php';
		</script>
		";
	}
	
}
?>