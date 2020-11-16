<?php

session_start();


$user = $app['database']->selectId('users', (int)$_POST['id']);

require 'views/user-edit.view.php';