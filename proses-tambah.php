<?php

include("config.php");

// cek apakah tombol done sudah diklik atau blum?
if(isset($_POST['done'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$pesan = $_POST['pesan'];
	
	// buat query
	$sql = "INSERT INTO `pesan` (nama, pesan) VALUE ('$nama', '$pesan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: forum.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: forum.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
