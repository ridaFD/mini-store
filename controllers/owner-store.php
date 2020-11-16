<?php


//var_dump('post it or not');

$user = $app['database']->insert('users', $_POST);


header("location:owners");
