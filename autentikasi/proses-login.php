<?php

session_start();

include 'connection.php';

$email 		= $_POST['email'];
$password	= $_POST['password'];

$pdo				= $db->prepare('SELECT * FROM user WHERE email =:email AND password=:password');
$data['email']		= $email;
$data['password']	= $password;
$pdo->execute($data);

$user				= $pdo->fetch();


if ($pdo->rowCount()) {
	$_SESSION['user_id'] = $user['id'];
	header('location: list.php');
} else
	header('location: login.php?error=true');
