<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="#" class="active">list</a>
                <a href="konten.php?user_id=<?= $_GET['user_id']; ?>">konten</a>
                <a href="profil.php?user_id=<?= $_GET['user_id']; ?>">profil</a>
            </nav>
            
            <div class="content">
				<?php if(isset($_GET['user_id'])) : ?>
					<p>Ini adalah Halaman List</p>
				<?php else: ?>
                	<p class="danger">Anda tidak dapat mengakses halaman ini</p>
                	<a href="login.php" class="btn-login">Login</a>
				<?php endif; ?>
            </div>

        </div>
    </body>
</html>    