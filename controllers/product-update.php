<?php

require 'helpers/uploadFile.php';

$id = $_POST['id'];

$productUpdate = $app['database']->edit('products', (int)$_POST['id'], [
    'image'=> $_FILES['image']['name'] ,
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'price' => (int)$_POST['price'],
]);




header("Location:/");