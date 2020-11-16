<?php
$id = $_POST;
$productDelete = $app['database']->delete('products', (int)$_POST['id']);

header("Location:home");