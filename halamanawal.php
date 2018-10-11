<?php
	include 'koneksi.php';

	session_start();
	$user = $_SESSION['user'];
	$pass = $_SESSION['pass'];
	
	$sql = "SELECT * FROM mahasiswa WHERE username = '$user' AND pass = '$pass'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query) > 0) {
		while ($row = mysqli_fetch_assoc($query)) {
			?>
			<form method="POST">
			<style>
				.side {
					width: 90%;
					height: auto;
					background-color:#3498db;
					border-radius:10px;
					border:1px solid #ddd;
					cursor:pointer;
					color:#fff;
					font-size:17px;
					padding:16px 31px;
					margin: 5px;
				}
				.side:hover {
					background-color:#2980b9;
					border-radius: 5px;
				}
				td { vertical-align: top; }
			</style>
			<table width="40%" align="center">
				<tr>
					<td colspan="3" align="center">
						<h2>Data Diri Pengguna</h2><hr>
					</td>
					
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $row['nama'] ?></td>
					<td rowspan="7" width="30%">
						<button formaction="posting.php" class="side">POST</button>
						<button formaction="daftarpostingan.php" class="side">SHOW POST</button>
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $row['nim'] ?></td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td>:</td>
					<td><?php echo $row['kelas'] ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $row['jenisKel'] ?></td>
				</tr>
				<tr>
					<td>Hobi</td>
					<td>:</td>
					<td>
						<?php
							$temp = $row['hobi'];
							$hobi = explode(',', $temp);
							for ($i=1; $i < count($hobi); $i++) { 
								echo $hobi[$i];
								if ($i < count($hobi)-1) {
									echo ", ";
								}
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td><?php echo $row['fakultas'] ?></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><?php echo $row['alamat'] ?></td>
				</tr>
				<tr>
					<td><a href="editprofile.php">Edit Profil</a></td>
				</tr>
			</table>
			</form>
			<?php
		}
	} else {
		echo "<center>Data Kosong</center>";
	}
?>