<?php
session_start();
$id = (int)$_POST['id'];

$client = $app['database']->selectRow('users', $_SESSION['email']);
$product = $app['database']->selectId('products', $id);

//var_dump();
if ($client[0]['id'] == $product[0]['user_id']) {
    require 'views/product-edit.view.php';
} else {
    echo 'The Product key you entered did not match.';
}

