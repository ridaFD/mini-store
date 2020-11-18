<?php
session_start();

$errors = [
    'email' => [],
    'password' => [],
];

//Get Email and Password from the $_POST
$email = $_POST['email'] ;
$password = $_POST['password'];
$stringEmail = '';
$stringEmail .= "'" . $email . "'";
if (isset($email) && !empty($password)) {
    // give me the Email from the Database

    $user = $app['database']->selectRow('users', $stringEmail , 'email');

    if (!empty($user) && $email == $user[0]['email'] && $password == $user[0]['password']) {
        // put email in the session
        $_SESSION['string_email'] = $stringEmail;
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $user[0]['role'];
        $_SESSION['id'] = (int)$user[0]['id'];
        $_SESSION['cart'] = [];
        header("Location:/");

    } else {
        array_push($errors['email'], "the credentials you've entered are invalid");
    }
} else {
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            array_push($errors[$key], "Please fill out the {$key}");
        }
    }
}
require 'views/login.view.php';
