<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require "bootstrap.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$user = User::create([
    'name' => $name,
    'email' => $email,
    'password' => $password,
]);

$_SESSION['error'] = false;

header('Location: index.php');