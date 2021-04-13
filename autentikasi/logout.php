<?php

session_start();
session_destroy();

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
			<a href="konten.php">konten</a>
			<a href="profil.php">profil</a>
			<a href="#" class="active">logout</a>
		</nav>

		<div class="content">
			<?php if (session_status() == PHP_SESSION_NONE) : ?>
				<p class="danger">Session berhasil dihancurkan</p>
				<a href="login.php" class="btn-login">Login</a>
			<?php else : ?>
				<p>Session belum dihancurkan</p>
			<?php endif; ?>
		</div>

	</div>
</body>

</html>