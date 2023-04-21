<?php

include("config.php");

if(isset($_POST['save'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$balasan = $_POST['balasan'];
	
	// buat query update
	$sql = "UPDATE pesan SET pesan_balasan='$balasan' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		header('Location: mailbox.php?status=sukses');
	} else {
		header('Location: mailbox.php?status=gagal');
	}
	
} else {
	die("Akses dilarang...");
}

?>
