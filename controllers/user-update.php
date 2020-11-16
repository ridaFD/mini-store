<?php


$userUpdate = $app['database']->edit('users', (int)$_POST['id'], [
    'name' => $_POST['name'],
    'address' => $_POST['address'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

header("Location:profile");