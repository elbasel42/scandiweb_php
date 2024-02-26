<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="shared.css">
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <form action="/product/delete" method="POST">
        <div class="buttons-container">
            <h1>Product List</h1>
            <a class="app-button" href="/product/add">Add Product</a>
            <button class="app-button">Mass Delete</button>
        </div>
        <div class="products-container">
            <?php foreach ($allProducts as $product) : ?>
                <div class="product">
                    <div class="checkbox-container">
                        <input type="checkbox" name="<?= $product->getId() ?>" id="<?= $product->getId() ?>">
                    </div>
                    <ul>
                        <?= $product->render(); ?>
                    </ul>
                </div>
            <?php endforeach ?>
        </div>
    </form>
</body>

</html>