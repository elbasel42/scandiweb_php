<!DOCTYPE html>
<html>

<body>
    <h1>Homepage</h1>
    <?php foreach ($allProducts as $product) : ?>
        <?= $product->render(); ?>
    <?php endforeach ?>
</body>

</html>