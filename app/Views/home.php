<!DOCTYPE html>
<html>

<body>
    <h1>Homepage</h1>

    <?php foreach ($allProducts as $product) : ?>
        <ul class="product">
            <?= $product->render(); ?>
        </ul>
    <?php endforeach ?>
</body>

</html>