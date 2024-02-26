<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="index.css">
    <script src="index.js" defer></script>
</head>

<body>
    <form action="/product/add" method="post" id="product-form">
        <div class="buttons-container">
            <h1>Product Add</h1>
            <a href="/" class="app-button">Cancel</a>
            <button class="app-button">Save</button>
        </div>
        <div class="input-group">
            <label for="sku">Sku:</label>
            <input required type="text" name="sku" id="sku" value="<?= htmlspecialchars($_SESSION['sku'] ?? '') ?>">
        </div>
        <div class="input-group">
            <label for="name">Name:</label>
            <input required type="text" name="title" id="name" value="<?= htmlspecialchars($_SESSION['title'] ?? '') ?>">
        </div>
        <div class="input-group">
            <label for="price">Price:</label>
            <input required step="any" type="number" name="price" id="price" value="<?= htmlspecialchars($_SESSION['price'] ?? '') ?>">
        </div>
        <div class="input-group">
            <label for="type">Type:</label>
            <select required name="product_type" id="productType">
                <option value="Book" <?= (isset($_SESSION['product_type']) && $_SESSION['product_type'] === 'Book') ? 'selected="selected"' : ''; ?>>Book</option>
                <option value="Furniture" <?= (isset($_SESSION['product_type']) && $_SESSION['product_type'] === 'Furniture') ? 'selected="selected"' : ''; ?>">Furniture</option>
                <option value="DVD" <?= (isset($_SESSION['product_type']) && $_SESSION['product_type'] === 'DVD') ? 'selected="selected"' : ''; ?>>DVD</option>
            </select>
        </div>
        <div id="additional-fields">
            <!-- Fields for book -->
            <div id="book-input" class="input-group">
                <label for="weight">Weight:</label>
                <input type="number" step="any" name="weight" value="<?= htmlspecialchars($_SESSION['weight'] ?? '') ?>">
            </div>
            <!-- Fields for DVD -->
            <div id="dvd-input" class="input-group hidden">
                <label for="size">Size:</label>
                <input type="number" step="any" name="size" value="<?= htmlspecialchars($_SESSION['size'] ?? '') ?>">
            </div>
            <!-- Fields for furniture -->
            <div id="furniture-input" class="hidden">
                <div class="input-group">
                    <label for="height">Height:</label>
                    <input type="number" step="any" name="height" value="<?= htmlspecialchars($_SESSION['height'] ?? '') ?>">
                </div>
                <div class="input-group">
                    <label for="width">Width:</label>
                    <input type="number" step="any" name="width" value="<?= htmlspecialchars($_SESSION['width'] ?? '') ?>">
                </div>
                <div class="input-group">
                    <label for="length">Length</label>
                    <input type="number" step="any" name="length" value="<?= htmlspecialchars($_SESSION['length'] ?? '') ?>">
                </div>
            </div>
        </div>
    </form>
    <div class="error">
        <?= $error ?>
    </div>
</body>

</html>