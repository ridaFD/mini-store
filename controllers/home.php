<?php
session_start();

if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'customer') {
    $products = $app['database']->selectAll('products');
} else {
    $products = $app['database']->selectRow('products', $_SESSION['id'], 'user_id');
}
require 'views/home.view.php';
