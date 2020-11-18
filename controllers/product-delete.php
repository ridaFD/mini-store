<?php
$id = (int)$_POST['id'];

$productDelete = $app['database']->delete('products', $id);

header("Location:/");