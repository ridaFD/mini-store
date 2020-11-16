<?php

require 'helpers/uploadFile.php';
//var_dump($_POST);

$product = $app['database']->insert('products', $_POST);

header("location:profile");

