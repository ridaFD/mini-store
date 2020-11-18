
<?php if (isset($_SESSION['email'])) : ?>
    <?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>

    <div class="flex justify-center">
        <div class="pr-16">
            <h1 class="font-bold text-2xl">Name</h1>
            <h3 class="border border-black p-2 rounded  text-blue-500"><?php echo $user[0]['name'] ?></h3>
            <h1 class="font-bold text-2xl">Address</h1>
            <h3 class="border border-black p-2 rounded  text-blue-500"><?php echo $user[0]['address'] ?></h3>
        </div>
        <div>
            <h1 class="font-bold text-2xl">Email</h1>
            <h3 class="border border-black p-2 rounded  text-blue-500"><?php echo $user[0]['email'] ?></h3>
            <h1 class="font-bold text-2xl">Role</h1>
            <h3 class="border border-black p-2 rounded  text-blue-500"><?php echo $user[0]['role'] ?></h3>
        </div>
        <div class="flex items-center ml-12">
            <form action="user-edit" method="post">
                <input type="hidden" name="id" value="<?php echo $user[0]['id']; ?>" />
                <input type="hidden" name="name" value="<?php echo $user[0]['name']; ?>" />
                <input type="hidden" name="address" value="<?php echo $user[0]['address']; ?>" />
                <input type="hidden" name="email" value="<?php echo $user[0]['email']; ?>" />
                <input type="hidden" name="password" value="<?php echo $user[0]['password']; ?>" />

                <button type="submit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    Edit User
                </button>
            </form>
        </div>
    </div>

    <?php if ($_SESSION['role'] == 'admin') : ?>
        <div class="border border-black m-2">
            <ul>
                <div class="flex justify-between bg-black">
                    <h1 class="w-32 m-2 text-white">Name</h1>
                    <h1 class="w-32 m-2 text-white">address</h1>
                    <h1 class="w-32 m-2 text-white">Email</h1>
                    <h1 class="w-32 m-2 text-white">Password</h1>
                    <h1 class="w-32 m-2 text-white">Role</h1>
                    <h1 class="m-2 text-black" style="width: 9rem;">Role</h1>
                </div>
            <?php foreach ($users as $user) : ?>
                <li>
                    <div class="flex justify-between">
                        <div class="w-32 m-2">
                            <h3 class=""><?php echo $user['name'];?></h3>
                        </div>
                        <div class="w-32 m-2">
                            <h3 class=""><?php echo $user['address'];?></h3>
                        </div>
                        <div class="w-32 m-2">
                            <h3 class=""><?php echo $user['email'];?></h3>
                        </div>
                        <div class="w-32 m-2">
                            <h3 class=""><?php echo $user['password'];?></h3>
                        </div>
                        <div class="w-32 m-2">
                            <h3 class=""><?php echo $user['role'];?></h3>
                        </div>

                        <div class="flex">
                            <form action="user-delete" method="post">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />

                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mt-1 mr-2">Delete</button>
                            </form>

                            <form action="user-edit" method="post">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
                                <input type="hidden" name="name" value="<?php echo $user['name']; ?>" />
                                <input type="hidden" name="address" value="<?php echo $user['address']; ?>" />
                                <input type="hidden" name="email" value="<?php echo $user['email']; ?>" />
                                <input type="hidden" name="password" value="<?php echo $user['password']; ?>" />

                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded my-1 mr-2">Edit</button>
                            </form>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
         </div>
    <?php endif; ?>

    <?php require 'products.view.php'; ?>


    <?php require 'partials/footer.php'; ?>

<?php else: ?>
    <h1>You need to login to access this page.</h1>
    <h3><a href="login">Login</a></h3>
<?php endif; ?>
