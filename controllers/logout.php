<?php
session_start();

echo "Logout Successfully ";
session_destroy();   // function that Destroys Session
unset($_SESSION['email']);
header("Location:login");