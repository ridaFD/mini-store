<?php $client = $app['database']->selectRow('users', $_SESSION['email']); ?>
<?php $users = $app['database']->selectAll('users'); ?>

<div class="border border-blue-300 flex justify-center">
    <?php if (isset($_SESSION)) : ?>

        <div class="flex justify-between items-center font-bold container">
            <H1 class="bg-red-300 p-4">Navbar</H1>

            <div>
                <?php echo $client[0]['email'];?>
            </div>

            <a class="border border-blue-300 p-2 bg-blue-500 text-white hover:bg-blue-900 rounded m-2" href="home"><h3>Home</h3></a>

            <?php if($client[0]['role'] == 'customer') : ?>
                <a class="border border-blue-300 p-2 bg-blue-500 text-white hover:bg-blue-900 rounded m-2" href="cart"><h3>Cart</h3></a>
            <?php endif; ?>

            <?php if (strpos($client[0]['role'], 'customer') === false || strpos($client[0]['role'], 'owner') === true)  : ?>
                <a class="border border-blue-300 p-2 bg-blue-500 text-white hover:bg-blue-900 rounded m-2" href="profile"><h3>Profile</h3></a>
                <a class="border border-blue-300 p-2 bg-blue-500 text-white hover:bg-blue-900 rounded m-2" href="product-create"><h3>Create Product</h3></a>
            <?php endif; ?>

            <?php if ((strpos($client[0]['role'], 'owner') === false && strpos($client[0]['role'], 'customer') === false)) : ?>
                <a class="border border-blue-300 p-2 bg-blue-500 text-white hover:bg-blue-900 rounded m-2" href="owner-create"><h3>Create User</h3></a>
            <?php endif; ?>

            <a class="border border-blue-300 p-2 bg-black text-white hover:bg-blue-300 rounded m-2" href="logout"><h3>Logout</h3></a>
        </div>

    <?php endif; ?>
</div>