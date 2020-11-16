<?php
session_start();
$user = $app['database']->selectRow('users', $_SESSION['email']);


require 'views/product-create.view.php';