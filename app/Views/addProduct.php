<!DOCTYPE html>
<html>


<body>
    <form action="/product/add" method="post">
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
                <input type="text" name="weight">
            </div>
            <!-- Fields for disc -->
            <div hidden id="disc-input">
                <label for="size">Size:</label>
                <input type="text" name="size">
            </div>
            <!-- Fields for furniture -->
            <div hidden id="furniture-input">
                <div>
                    <label for="height">Height:</label>
                    <input type="text" name="height">
                </div>
                <div>
                    <label for="width">Width:</label>
                    <input type="text" name="width" placeholder="Width">
                </div>
                <div>
                    <label for="length">Length</label>
                    <input type="text" name="length" placeholder="Length">
                </div>
            </div>
        </div>
        <button>add</button>
    </form>
    <script>
        const typeSwitcher = document.getElementById("type");
        const bookInput = document.getElementById('book-input')
        const discInput = document.getElementById('disc-input')
        const furnitureInput = document.getElementById('furniture-input')

        typeSwitcher.addEventListener('change', function() {
            const selectedValue = this.value;
            bookInput.hidden = true;
            discInput.hidden = true;
            furnitureInput.hidden = true;
            switch (selectedValue) {
                case 'Book':
                    bookInput.hidden = false;
                    break;
                case 'Disc':
                    discInput.hidden = false;
                    break;
                case 'Furniture':
                    furnitureInput.hidden = false;
                    break;
            }
        })
    </script>
</body>

</html>