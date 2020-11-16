<?php session_start(); ?>
<?php if (isset($_SESSION['email'])) : ?>

<?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>


    <div class="flex items-center mt-4 flex-col">
        <h1 class="font-bold text-2xl">Create User</h1>

        <form action="owner-store" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
            <div class="mb-2">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address</label>
                <input type="text" id="address" name="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="rule" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                <input type="text" id="role" name="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <button type="submit" class="border border-blue-300 p-1 rounded">Submit</button>
            </div>
        </form></div>

<?php require 'partials/footer.php'; ?>

<?php else: ?>

    <h1>You need to login to access this page.</h1>
    <h3><a href="login">login</a></h3>
<?php endif; ?>
