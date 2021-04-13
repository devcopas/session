<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box">
            <?php if(isset($_GET['error'])): ?>
                <p class="danger">Email / password kamu salah</p>
            <?php endif; ?>

            <form action="proses-login.php" method="post">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>