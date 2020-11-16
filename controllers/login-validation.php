<?php

$user = $app['database']->selectRow('users', $_POST['email']);


session_start();
$hashed_password = password_hash($user[0]['password'], PASSWORD_DEFAULT);
$_SESSION['email'] = $user[0]['email'];
$_SESSION['cart'] = [];
if (isset($_SESSION['email'])) {
    if ($_POST['email'] == $user[0]['email'] && password_verify($_POST['password'], $hashed_password)) {
        header("Location:home");
    } else {
        require 'views/login.view.php';
    }
}
