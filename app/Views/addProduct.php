<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../shared.css">
    <link rel="stylesheet" href="index.css">
    <script src="index.js" defer></script>
</head>

<body>
    <form action="/product/add" method="post">
        <div class="buttons-container">
            <h1>Product Add</h1>
            <a href="/" class="app-button">Cancel</a>
            <button class="app-button">Save</button>
        </div>
        <div>
            <label for="sku">Sku:</label>
            <input type="text" name="sku" id="sku">
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="title" id="name">
        </div>
        <div>
            <label for="price">Price:</label>
            <input step="any" type="number" name="price" id="price">
        </div>
        <div>
            <label for="type">Type:</label>
            <select name="product_type" id="type">
                <option selected="selected" value="Book">Book</option>
                <option value="Furniture">Furniture</option>
                <option value="Disc">Disc</option>
            </select>
        </div>
        <div id="additional-fields">
            <!-- Fields for book -->
            <div id="book-input">
                <label for="weight">Weight:</label>
                <input type="number" step="any" name="weight">
            </div>
            <!-- Fields for disc -->
            <div hidden id="disc-input">
                <label for="size">Size:</label>
                <input type="number" step="any" name="size">
            </div>
            <!-- Fields for furniture -->
            <div hidden id="furniture-input">
                <div>
                    <label for="height">Height:</label>
                    <input type="number" step="any" name="height">
                </div>
                <div>
                    <label for="width">Width:</label>
                    <input type="number" step="any" name="width">
                </div>
                <div>
                    <label for="length">Length</label>
                    <input type="number" step="any" name="length">
                </div>
            </div>
        </div>
    </form>
    <div class="error">
        <?= $error ?>
    </div>
</body>

</html>