<?php 
	include 'koneksi.php';

	if (isset($_POST['submit'])) {
		$nama		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$kelas		= $_POST['kelas'];
		$jenisKel	= $_POST['jenisKel'];
		$hobi 		= $_POST['hobi'];
		$hobby		= implode(', ', $_POST['hobi']);
		$fakultas	= $_POST['fakultas'];
		$alamat		= $_POST['alamat'];
		$username	= $_POST['username'];
		$pass		= $_POST['pass'];

		$err = $erNama = $erNim = $erUser = $erPass = '';

		if (empty($nama) || empty($nim) || empty($username) || empty($pass)) { $err = 'Isi Data Terlebih Dahulu'; }
		if (empty($nama)){ 
			$erNama = 'Nama Tidak Boleh Kosong'; 
		}
		if (empty($nim)){ 
			$erNim = 'NIM Tidak Boleh Kosong'; 
		}
		if (empty($username)) { 
			$erUser = 'Username Tidak Boleh Kosong'; 
		}
		if (empty($pass)) { 
			$erPass = 'Password Tidak Boleh Kosong'; 
		}

		if (empty($err)) { 
			$sql = "INSERT INTO mahasiswa (nama, nim, kelas, jenisKel, hobi, fakultas, alamat, username, pass) VALUES ('$nama','$nim','$kelas','$jenisKel','$hobby','$fakultas','$alamat', '$username', '$pass')";
			$query = mysqli_query($conn, $sql);

			if ($query) {
				echo "* Data Berhasil Disimpan";
					}else{
				echo "<span class='red'>* Data Gagal Disimpan".mysqli_connect_error()."</span>";
			}
		}
	}
?>