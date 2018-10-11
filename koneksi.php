<?php
	$host	= 'localhost';
	$user	= 'root';
	$pass	= '';
	$dbName	= 'mahasiswa';

	$conn = mysqli_connect($host, $user, $pass, $dbName);

	if (!$conn) {
		die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}
?>