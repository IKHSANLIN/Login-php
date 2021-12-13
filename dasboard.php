<!DOCTYPE html>
<html>
<head>
	<title>Belajar Membuat Login dan register</title>
</head>
<body>
	<h2>Halaman Dashboard</h2>
	<br/>
	<!-- cek apakah sudah login -->
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:dashboard.php?pesan=belum_login");
	}
	?>
	<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
	<br/>
	<br/>
	<a href="index.php">LOGOUT</a>
</body>
</html>
