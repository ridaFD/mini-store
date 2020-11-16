
<?php if (isset($_SESSION['email'])) : ?>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>


    <div class="flex items-center mt-4 flex-col">
        <h1 class="font-bold text-2xl">Create Product</h1>

        <form action="product-store" method="POST" enctype="multipart/form-data"
              class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">

            <input type="hidden" name="user_id" value="<?php echo $user[0]['id'] ?>">

            <div class="mb-2">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <input type="text" id="description" name="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                <input type="text" id="price" name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" id="image" name="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-2">
                <button type="submit" class="border border-blue-300 p-1 rounded">Submit</button>
            </div>
        </form>
    </div>

    <?php require 'partials/footer.php'; ?>

<?php else: ?>
    <h1>You need to login to access this page.</h1>
    <h3><a href="login">Login</a></h3>
<?php endif; ?>