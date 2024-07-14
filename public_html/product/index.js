const typeSwitcher = document.getElementById("productType");
const bookInput = document.getElementById("book-input");
const dvdInput = document.getElementById("dvd-input");
const furnitureInput = document.getElementById("furniture-input");

typeSwitcher.addEventListener("change", function () {
  const selectedValue = this.value;
  const defaultClassName = "hidden";
  bookInput.className = defaultClassName;
  dvdInput.className = defaultClassName;
  furnitureInput.className = defaultClassName;
  switch (selectedValue) {
    case "Book":
      bookInput.className = "input-group";
      break;
    case "DVD":
      dvdInput.className = "input-group";
      break;
    case "Furniture":
      furnitureInput.className = "";
      break;
  }
});

