<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form action="" method="POST">
		<table>
			<tr>
				<td colspan="3"><h2>LOGIN</h2></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="login" value="login"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	include 'koneksi.php';
	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$sql = "SELECT * FROM mahasiswa WHERE username = '$user' AND pass = '$pass'";
		$query = mysqli_query($conn, $sql);

		if ($query) {
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			header('Location: halamanawal.php');
		}else{
			echo "Gagal LOGIN";
		}
	}
?>
