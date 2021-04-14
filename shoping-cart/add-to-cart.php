<?php

session_start();

include 'connection.php';

$id		= $_GET['id'];
$quantity = 1;


if ($_SESSION['cart'][$id]) {
	$quantity = $_SESSION['cart'][$id][$quantity] + 1;
}

$items = [
	$id = $id,
	$quantity = $quantity
];

$_SESSION['cart'][$id] = $items;
header('location: list.php');
