
<?php if (isset($_SESSION['email'])) : ?>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>

    <div class="border border-black m-4">
        <div class="container">
            <div class="flex">
                <img src="public/images/<?php echo $_POST['image']; ?>" alt="" width="480">
                <div class="m-4">
                    <div>
                        <h1 class="text-3xl">Name</h1>
                        <h3 class="text-lg bg-blue-500 text-white p-2 rounded"><?php echo $_POST['name']; ?></h3>
                    </div>
                    <div>
                        <h1 class="text-3xl">Description</h1>
                        <h3 class="text-lg bg-blue-500 text-white p-2 rounded"><?php echo $_POST['description']; ?></h3>
                    </div>
                    <div>
                        <h1 class="text-3xl">Price</h1>
                        <h3 class="text-lg bg-blue-500 text-white p-2 rounded"><?php echo $_POST['price']; ?>$</h3>
                    </div>

                    <div class="mt-4">
                        <?php if ($_SESSION['role'] == 'customer') : ?>
                            <form action="single-product" method="post">
                                <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
                                <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
                                <input type="hidden" name="description" value="<?php echo $_POST['description']; ?>">
                                <input type="hidden" name="price" value="<?php echo $_POST['price']; ?>">
                                <input type="hidden" name="image" value="<?php echo $_POST['image']; ?>">

                                <div class="flex flex-col border border-black w-24 mb-8 bg-blue-400 p-2">
                                    <label for="quantity" class="mb-2 text-center">Quantity</label>
                                    <input type="number" min="1" max="59" name="quantity" value="1" id="quantity" class="border border-black p-2">
                                </div>
                                <button type="submit" name="addToCart" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Add To Cart</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'partials/footer.php'; ?>
<?php else: ?>
    <h1>You need to login to access this page.</h1>
    <h3><a href="login">Login</a></h3>
<?php endif; ?>
