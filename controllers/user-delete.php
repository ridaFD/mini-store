<?php

$id = $_POST['id'];

$userDelete = $app['database']->delete('users', $id);

header('Location:profile');