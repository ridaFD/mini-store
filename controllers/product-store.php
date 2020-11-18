<?php

require 'helpers/uploadFile.php';


$product = $app['database']->insert('products',  [
    'image'=> $_FILES['image']['name'] ,
    'name' => $_POST['name'],
    'description' => $_POST['description'],
    'price' => (int)$_POST['price'],
]);


header("location:profile");

