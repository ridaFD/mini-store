<?php
session_start();
$user = $app['database']->selectRow('users', $_SESSION['id'], 'id');


require 'views/product-create.view.php';