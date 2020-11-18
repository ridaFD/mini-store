<?php foreach ($products as $key => $value) : ?>

        <div class="border border-black flex justify-center m-2">
            <div class="container flex justify-between items-center">

                <div>
                    <form action="single-product" method="post">
                        <input type="hidden" name="id" value="<?php echo $products[$key]['id']; ?>">
                        <input type="hidden" name="name" value="<?php echo $products[$key]['name']; ?>">
                        <input type="hidden" name="description" value="<?php echo $products[$key]['description']; ?>">
                        <input type="hidden" name="price" value="<?php echo $products[$key]['price']; ?>">
                        <input type="hidden" name="image" value="<?php echo $products[$key]['image']; ?>">
                        <ul class="flex justify-between items-center">

                            <li class="w-64">
                                <img src="public/images/<?php echo $products[$key]['image'] ?>" alt="" style="width: 200px; height: 150px">
                            </li>
                            <li class="w-64">
                                <?php echo $products[$key]['name']; ?>
                            </li>
                            <li class="" style="width: 400px">
                                <?php echo $products[$key]['description']; ?>
                            </li>
                            <li class="w-24 text-right mr-20">
                                <?php echo $products[$key]['price']; ?> $
                            </li>

                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-2 border border-blue-700 rounded">View</button>
                        </ul>
                    </form>
                </div>

                <?php if ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'owner') : ?>
                    <div class="flex">
                        <form action="product-delete" method="post">
                            <input type="hidden" name="id" value="<?php echo $products[$key]['id']; ?>" />

                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 border border-blue-700 rounded mx-2">Delete</button>
                        </form>


                        <form action="product-edit" method="post">
                            <input type="hidden" name="id" value="<?php echo $products[$key]['id']; ?>" />
                            <input type="hidden" name="name" value="<?php echo $products[$key]['name']; ?>" />
                            <input type="hidden" name="description" value="<?php echo $products[$key]['description']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $products[$key]['price']; ?>" />

                            <button type="submit" name="<?php echo $products[$key]['id']; ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Edit</button>
                        </form>
                    </div>
                <?php endif; ?>
            </div>
        </div>

<!--    --><?php //endif; ?>
<?php endforeach; ?>

