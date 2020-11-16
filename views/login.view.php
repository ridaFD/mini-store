
<?php require 'partials/head.php'; ?>

<div class="border border-gray-500 flex justify-center">
    <div class="container border border-red-400 m-2 flex items-center flex-col">
        <h1 class="text-2xl">Login</h1>

        <form action="login" method="post">
            <div class="mb-2 flex flex-col">
                <label for="email" class="mr-2">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-300 p-2">
            </div>

            <div class="mb-2 flex flex-col">
                <label for="password" class="mr-2">Password</label>
                <input type="password" name="password" id="password" class="border border-gray-300 p-2">
            </div>

            <div>
                <button type="submit" class="border border-blue-300 p-1 rounded">Submit</button>
            </div>
        </form>
    </div>
</div>
<?php require_once 'partials/footer.php'; ?>
