<?php
session_start();

if (isset($_SESSION['email'])) {
    $products = $app['database']->selectAll('products');
    header("Location:/");
} else {
    require 'views/login.view.php';
}


