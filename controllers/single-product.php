<?php

session_start();

if (isset($_POST['addToCart'])) {
    array_push($_SESSION['cart'], $_POST);
}


require 'views/single-product.view.php';