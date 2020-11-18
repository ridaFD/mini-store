<?php if (isset($_SESSION['email'])) : ?>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>


    <div class="flex justify-center">
        <form action="product-update" method="post" enctype="multipart/form-data"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/2 mt-4"
        >

            <input type="hidden" name="id" value="<?php echo $product[0]['id']; ?>">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Image
                </label>
                <div class="flex">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           name="image" id="image" type="file" placeholder="upload image" value="<?php echo $product[0]['image']; ?>"
                    >
                    <img src="public/images/<?php echo $product[0]['image'] ;?>" alt="" style="width: 150px">
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $product[0]['name']; ?>" id="name" type="text" placeholder="product name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <textarea name="description" id="" cols="30" rows="5"
                          class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                ><?php echo $product[0]['description']; ?></textarea>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Price
                </label>
                <input name="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $product[0]['price']; ?>" id="price" type="number" placeholder="price">
            </div>

            <div class="mb-2">
                <button type="submit" class="border border-blue-300 p-1 rounded bg-blue-500 text-white">Submit</button>
                <a href="/" class="border border-blue-300 p-1 rounded">Cancel</a>
            </div>
        </form>
    </div>

    <?php require 'partials/footer.php'; ?>

<?php else: ?>

    <h1>You need to login to access this page.</h1>
    <h3><a href="login">login</a></h3>
<?php endif; ?>