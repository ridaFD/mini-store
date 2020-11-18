<?php
session_start();

if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'customer') {
    $products = $app['database']->selectAll('products');
} else {
    $product = $app['database']->selectRow('products', $_POST['id'], 'id');
}


if ($_SESSION['id'] == (int)$product[0]['user_id']) {
    require 'views/product-edit.view.php';
} else {
    echo 'The Product key you entered did not match.';
}

