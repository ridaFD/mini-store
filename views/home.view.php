
<?php if (isset($_SESSION['email'])) : ?>

<?php require 'partials/head.php'; ?>
<?php require 'partials/_navbar.view.php'; ?>

    <?php require 'products.view.php'; ?>

<?php require 'partials/footer.php'; ?>

<?php else: ?>
    <h1>You need to login to access this page.</h1>
    <h3><a href="login">Login</a></h3>
<?php endif; ?>
