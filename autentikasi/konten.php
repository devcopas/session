<?php
session_start();
?>

<html>

<head>
	<title>Autentikasi - List</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">

		<nav class="main-menu">
			<a href="list.php">list</a>
			<a href="#" class="active">konten</a>
			<a href="profil.php">profil</a>
			<a href="logout.php">logout</a>
		</nav>

		<div class="content">
			<?php if (isset($_SESSION['user_id'])) : ?>
				<p>Ini adalah Halaman Konten</p>
			<?php else : ?>
				<p class="danger">Anda tidak dapat mengakses halaman ini</p>
				<a href="login.php" class="btn-login">Login</a>
			<?php endif; ?>
		</div>

	</div>
</body>

</html>