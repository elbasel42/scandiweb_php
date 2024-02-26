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
        <div class="input-group">
            <label for="sku">Sku:</label>
            <input required type="text" name="sku" id="sku">
        </div>
        <div class="input-group">
            <label for="name">Name:</label>
            <input required type="text" name="title" id="name">
        </div>
        <div class="input-group">
            <label for="price">Price:</label>
            <input required step="any" type="number" name="price" id="price">
        </div>
        <div class="input-group">
            <label for="type">Type:</label>
            <select required name="product_type" id="product-type">
                <option selected="selected" value="Book">Book</option>
                <option value="Furniture">Furniture</option>
                <option value="Disc">Disc</option>
            </select>
        </div>
        <div id="additional-fields">
            <!-- Fields for book -->
            <div id="book-input" class="input-group">
                <label for="weight">Weight:</label>
                <input required type="number" step="any" name="weight">
            </div>
            <!-- Fields for disc -->
            <div id="disc-input" class="input-group hidden">
                <label for="size">Size:</label>
                <input required type="number" step="any" name="size">
            </div>
            <!-- Fields for furniture -->
            <div id="furniture-input" class="hidden">
                <div class="input-group">
                    <label for="height">Height:</label>
                    <input required type="number" step="any" name="height">
                </div>
                <div class="input-group">
                    <label for="width">Width:</label>
                    <input required type="number" step="any" name="width">
                </div>
                <div class="input-group">
                    <label for="length">Length</label>
                    <input required type="number" step="any" name="length">
                </div>
            </div>
        </div>
    </form>
    <div class="error">
        <?= $error ?>
    </div>
</body>

</html>