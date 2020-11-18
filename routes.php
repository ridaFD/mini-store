<?php

$router->get('products', 'controllers/products.php');

$router->get('cart', 'controllers/cart.php');
$router->post('cart-delete', 'controllers/cart-delete.php');

$router->get('', 'controllers/home.php');
$router->get('profile', 'controllers/profile.php');

$router->get('product-create', 'controllers/product-create.php');
$router->post('product-store', 'controllers/product-store.php');

$router->get('owner-create', 'controllers/owner-create.php');
$router->post('owner-store', 'controllers/owner-store.php');

$router->get('owners', 'controllers/owners.php');

$router->get('user-edit', 'controllers/user-edit.php');
$router->post('user-edit', 'controllers/user-edit.php');
$router->post('user-update', 'controllers/user-update.php');
$router->post('user-delete', 'controllers/user-delete.php');

$router->get('login', 'controllers/login-get.php');
$router->get('logout', 'controllers/logout.php');
$router->post('login', 'controllers/login-validation.php');

$router->get('single-product', 'controllers/single-product.php');
$router->post('single-product', 'controllers/single-product.php');
$router->post('product-edit', 'controllers/product-edit.php');
$router->post('product-update', 'controllers/product-update.php');
$router->post('product-delete', 'controllers/product-delete.php');