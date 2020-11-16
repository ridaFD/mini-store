
<?php if (isset($_SESSION['email'])) : ?>

    <?php require 'partials/head.php'; ?>
    <?php require 'partials/_navbar.view.php'; ?>

    <?php if ($client[0]['role'] == 'customer') : ?>

    <div class="flex justify-center">
        <div class="container flex justify-between">
            <div class="">
                <?php foreach ($_SESSION['cart'] as $cart => $value) : ?>
                    <?php
                        $priceTotal += (int)$value['price'];
                        $quantityTotal += (int)$value['quantity'];
                    ?>

                    <div class="flex items-center">
                        <div class="border border-black m-2">
                            <ul class="flex m-2">
                                <li>
                                    <img src="public/images/iphone-11.jpg" alt="" class="w-32">
                                </li>

                                <div class="m-2">
                                    <li class="text-sm bg-orange-500">
                                        <?php echo $value['name']; ?>
                                    </li>
                                    <li class="text-sm" style="width: 400px">
                                        <?php echo $value['description']; ?>
                                    </li>
                                </div>

                                <div class="m-2 flex">
                                    <li class="text-sm">
                                        <h1 class="bg-orange-500 mr-2 mb-2">Price</h1>
                                        <?php echo $value['price']; ?>$
                                    </li>
                                    <li class="text-sm text-center">
                                        <h1 class="bg-orange-500 mb-2">Quantity</h1>
                                        <?php echo $value['quantity']; ?>
                                    </li>
                                </div>
                            </ul>
                        </div>

                        <form action="cart-delete" method="post" class="ml-4">
                            <input type="hidden" name="id" value="<?php echo $cart; ?>">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-blue-700 rounded mr-2">Delete</button>
                        </form>
                    </div>
                <?php endforeach; ?>

                <?php if ($_SESSION['cart'] == null) : ?>
                    <div style="position: relative;left: 50%;transform: translateX(50%);top: 50%;">
                        <h1 class="text-3xl border border-red-500 p-4">No Products Added Yet.</h1>
                    </div>
                <?php endif; ?>

            </div>

            <div class="p-4">
                <div class="border border-black p-4 rounded">
                    <h1 class="text-3xl mb-8">Order Summary</h1>

                    <div class="flex justify-between">
                        <h3 class="text-sm">Subtotal</h3>
                        <h3 class="text-sm"><?php echo $priceTotal; ?> $</h3>
                    </div>

                    <div class="flex justify-between">
                        <h3 class="text-sm">Products Quantity</h3>
                        <h3 class="text-sm"><?php echo $quantityTotal; ?></h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php else : ?>
        <div style="position: relative;top: 100px;" class="text-center m-4">
            <h1 class="text-3xl border border-red-500 p-4">No Page Found.</h1>
        </div>
    <?php endif; ?>

    <?php require 'partials/footer.php'; ?>

<?php else: ?>

    <h1>You need to login to access this page.</h1>
    <h3><a href="login">login</a></h3>
<?php endif; ?>
