<?php
session_start();
$products = $app['database']->selectAll('products');
$users = $app['database']->selectAll('users');
$client = $app['database']->selectRow('users', $_SESSION['email']);

require 'views/profile.view.php';