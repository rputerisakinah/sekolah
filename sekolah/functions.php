<?php
	$sekolah= mysqli_connect("localhost", "root","", "db_sekolah");



	function query($query){
		global $sekolah;
		$result = mysqli_query($sekolah, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}


function tambah($data) {
	global $sekolah;

	$nama_guru = htmlspecialchars($data["nama_guru"]);
	$alamat_guru = htmlspecialchars($data["alamat_guru"]);
	$bidang_studi = htmlspecialchars($data["bidang_studi"]);


	$query = "INSERT INTO guru
				VALUES
				('', '$nama_guru', '$alamat_guru', '$bidang_studi')
			";
	mysqli_query($sekolah, $query);

	return mysqli_affected_rows($sekolah);
}


function tambah_siswa($data) {
	global $sekolah;

	$nama_siswa = htmlspecialchars($data["nama_siswa"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "INSERT INTO siswa
				VALUES
			  	('', '$nama_siswa', '$kelas', '$alamat')
			";
	mysqli_query($sekolah, $query);

	return mysqli_affected_rows($sekolah);
}

function tambah_join($data) {
	global $sekolah;

	$id_guru = htmlspecialchars($data["id_guru"]);
	$id_siswa = htmlspecialchars($data["id_siswa"]);

	$query = "INSERT INTO guru_to_siswa(id_guru, id_siswa)
				VALUES
			  	('$id_guru','$id_siswa' )
			";
	mysqli_query($sekolah, $query);

	return mysqli_affected_rows($sekolah);
}



function hapus($id) {
	global $sekolah;
	mysqli_query($sekolah, "DELETE FROM guru WHERE id_guru = $id");

	return mysqli_affected_rows($sekolah);
}


function hapus_siswa($id) {
	global $sekolah;
	mysqli_query($sekolah, "DELETE FROM siswa WHERE id_siswa = $id");

	return mysqli_affected_rows($sekolah);
}

function hapus_join($id) {
	global $sekolah;
	mysqli_query($sekolah, "DELETE FROM guru_to_siswa WHERE id_guru_to_siswa = $id");

	return mysqli_affected_rows($sekolah);
}


function ubah($data){
	global $sekolah;

	$id_guru = $data ["id_guru"];
	$nama_guru = htmlspecialchars($data["nama_guru"]);
	$alamat_guru = htmlspecialchars($data["alamat_guru"]);
	$bidang_studi = htmlspecialchars($data["bidang_studi"]);


	$query = "UPDATE guru SET
				nama_guru = '$nama_guru', 
				alamat_guru = '$alamat_guru',
				bidang_studi = '$bidang_studi'
			  WHERE id_guru = '$id_guru'
				";
	mysqli_query($sekolah, $query);

	return mysqli_affected_rows($sekolah);
}


function ubah_siswa($data){
	global $sekolah;

	$id_siswa = $data ["id_siswa"];
	$nama_siswa = htmlspecialchars($data["nama_siswa"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$alamat = htmlspecialchars($data["alamat"]);


	$query = "UPDATE siswa SET
				nama_siswa = '$nama_siswa', 
				kelas = '$kelas',
				alamat = '$alamat'
			  WHERE id_siswa = '$id_siswa'
				";
	mysqli_query($sekolah, $query);

	return mysqli_affected_rows($sekolah);
}

function ubah_join($data) {
	global $sekolah;

	$id_guru = htmlspecialchars($data["id_guru"]);
	$id_siswa = htmlspecialchars($data["id_siswa"]);

	$query = "UPDATE guru_to_siswa SET
				id_guru= '$id_guru', 
				id_siswa = 'id_siswa',
			  WHERE id_guru_to_siswa = '$id_guru_to_siswa'
				";
	mysqli_query($sekolah, $query);

	return mysqli_affected_rows($sekolah);
}


?>
