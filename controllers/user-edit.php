<?php

session_start();
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];


require 'views/user-edit.view.php';