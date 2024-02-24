<!DOCTYPE html>
<html>
<body>

    <h1>Homepage</h1>

    <a href="/product/add">Add Product</a>
    <form action="/product/delete" method="POST">
        <button>Mass Delete</button>
        <?php foreach ($allProducts as $product) : ?>
            <div>
                <input type="checkbox" name="<?= $product->getId() ?>" id="<?= $product->getId() ?>">
                <ul class="product">
                    <?= $product->render(); ?>
                </ul>
            </div>
        <?php endforeach ?>
    </form>
</body>
<link href="{{ asset('home.css')}}" rel="stylesheet">
</html>