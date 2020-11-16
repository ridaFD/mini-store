
<?php if (isset($_SESSION['email'])) : ?>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>

<div class="flex items-center mt-4 flex-col">
    <h1 class="font-bold text-2xl">Edit User</h1>
    <form action="user-update" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">

        <input type="hidden" name="id" value="<?php echo $user[0]['id']; ?>">

        <div class="mb-2">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" name="name" id="name" value="<?php echo $user[0]['name']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-2">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
            <input type="text" name="address" id="address" value="<?php echo $user[0]['address']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-2">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $user[0]['email'] ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-2">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
            <input type="password" name="password" id="password" value="<?php echo $user[0]['password']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>

        <div class="mb-2">
            <button type="submit" class="border border-blue-300 p-1 rounded bg-blue-500 text-white">Submit</button>
            <a href="profile" class="border border-blue-300 p-1 rounded">Cancel</a>
        </div>
    </form>
</div>

    <?php require 'partials/footer.php'; ?>

<?php else: ?>
    <h1>You need to login to access this page.</h1>
    <h3><a href="login">Login</a></h3>
<?php endif; ?>
