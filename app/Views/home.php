<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="index.css" />
</head>

<body>
    <form action="/product/delete" method="POST">
        <header>
            <h1>Product List</h1>
            <a class="header-button" href="/product/add">Add Product</a>
            <button class="header-button">Mass Delete</button>
        </header>
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