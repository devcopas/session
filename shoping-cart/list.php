<?php

session_start();

include 'connection.php';

$pdo = $db->prepare('SELECT * FROM product');
$pdo->execute();

if ($pdo->rowCount()) {
	$products = $pdo->fetchAll(PDO::FETCH_ASSOC);
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$totalItem = 0;
foreach ($cart as $item) {
	$totalItem += $item['quantity'];
}

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
?>

<html>

<head>
	<title>Autentikasi - List</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">

		<nav class="main-menu">
			<a href="#" class="active">list</a>
			<a href="cart.php">Cart (<?= $totalItem; ?>)</a>
		</nav>

		<div class="content">
			<?php foreach ($products as $product) : ?>
				<div class="product">
					<p><?= $product['title']; ?></p>
					<label>Rp. <?= number_format($product['price']); ?></label>
					<a href="add-to-cart.php?id=<?= $product['id']; ?>">Add To Cart</a>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</body>

</html>