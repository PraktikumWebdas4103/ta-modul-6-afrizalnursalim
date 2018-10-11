<?php
	include 'aksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM MAHASISWA</title>
</head>
<body>
<center>
	<form action="" method="POST">
		<table>
			<tr>
				<td colspan="3" align="left"><h2>FORM MAHASISWA</h2></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td>
					<input type="text" name="nama"><br>
					<span class="red"><?php if(isset($erNama)){ echo $erNama; } ?></span>
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td>
					<input type="text" name="nim"><br>
					<span class="red"><?php if(isset($erNim)){ echo $erNim; } ?></span>
				</td>
			</tr>
			<tr>
				<td valign="top">Kelas</td>
				<td valign="top">:</td>
				<td>
					<input type="hidden" name="kelas" checked>
					<input type="radio" name="kelas" value="41-01">41-01<br>
					<input type="radio" name="kelas" value="41-02">41-02<br>
					<input type="radio" name="kelas" value="41-03">41-03<br>
					<input type="radio" name="kelas" value="41-04">41-04<br>

				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="hidden" name="jenisKel" checked>
					<input type="radio" name="jenisKel" value="Laki-laki">Laki-laki
					<input type="radio" name="jenisKel" value="Perempuan">Perempuan<br>
					
				</td>
			</tr>
			<tr>
				<td valign="top">Hobi</td>
				<td valign="top">:</td>
				<td>
					<input type="hidden" name="hobi[]" value="">
					<input type="checkbox" name="hobi[]" value="Makan">Makan<br>
					<input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
					<input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
					<input type="checkbox" name="hobi[]" value="Berenang">Berenang<br>
					<input type="checkbox" name="hobi[]" value="Bermain Game">Bermain Game<br>

				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option value="">Pilih Fakultas</option>
						<option value="FIT">Fakultas Ilmu Terapan</option>
						<option value="FKB">Fakultas Komunikasi Bisnis</option>
						<option value="FEB">Fakultas Ekonomi Bisnis</option>
						<option value="FIK">Fakultas Industri Kreatif</option>
						<option value="FIF">Fakultas Informatika</option>
						<option value="FTE">Fakultas Teknik Elektri</option>
						<option value="FRI">Fakultas Rekayasa Industri</option>
					</select><br>

				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td>
					<textarea name="alamat" rows="5" cols="40"></textarea>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username"><br>
					<span class="red"><?php if(isset($erUser)){ echo $erUser; } ?></span>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="password" name="pass"><br>
					<span class="red"><?php if(isset($erPass)){ echo $erPass; } ?></span>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<br>
					<input type="submit" name="submit" value="Daftar" class="submit"><br>
					<span class="red"><b><u><?php if(isset($err)){ echo $err; } ?></b></u></span>
				</td>
			</tr>
			<?php if (isset($_POST['submit'])) {
				if (empty($err)) { ?>
					<tr>
						<td colspan="3">
							<button class="save" formaction="login.php">LANJUT LOGIN</button>
						</td>
					</tr>
			<?php } }?>
		</table>
	</form>
</body>
</html>
