<?php
session_start();
$id = (int)$_POST['id'];

unset($_SESSION['cart'][$id]);

//var_dump($_SESSION['uniqueInput']);
header("Location:cart");
