const typeSwitcher = document.getElementById("product-type");
const bookInput = document.getElementById("book-input");
const discInput = document.getElementById("disc-input");
const furnitureInput = document.getElementById("furniture-input");

typeSwitcher.addEventListener("change", function () {
  const selectedValue = this.value;
  const defaultClassName = "hidden";
  bookInput.className = defaultClassName;
  discInput.className = defaultClassName;
  furnitureInput.className = defaultClassName;
  switch (selectedValue) {
    case "Book":
      bookInput.className = "input-group";
      break;
    case "Disc":
      discInput.className = "input-group";
      break;
    case "Furniture":
      furnitureInput.className = "";
      break;
  }
});
