<?php
session_start();

if ($_SESSION['role'] == 'admin') {
    $products = $app['database']->selectAll('products');
    $users = $app['database']->selectAll('users');
} else {
    $products = $app['database']->selectRow('products', $_SESSION['id'], 'user_id');
}


require 'views/profile.view.php';