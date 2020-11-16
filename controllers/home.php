<?php
session_start();
$products = $app['database']->selectAll('products');

//$user = $app['database']->selectRow('users', $_SESSION['email']);



require 'views/home.view.php';
