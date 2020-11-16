<?php
session_start();

if (isset($_SESSION['cart'])) {
    $unique = array();

    foreach ($_SESSION['cart'] as $value) {
        $unique[$value['id']] = $value;
    }
    $_SESSION['cart'] = array_values($unique);

    $priceTotal = 0;
    $quantityTotal = 0;
}


require 'views/cart.view.php';

