const typeSwitcher = document.getElementById("type");
const bookInput = document.getElementById("book-input");
const discInput = document.getElementById("disc-input");
const furnitureInput = document.getElementById("furniture-input");

typeSwitcher.addEventListener("change", function () {
  const selectedValue = this.value;
  bookInput.hidden = true;
  discInput.hidden = true;
  furnitureInput.hidden = true;
  switch (selectedValue) {
    case "Book":
      bookInput.hidden = false;
      break;
    case "Disc":
      discInput.hidden = false;
      break;
    case "Furniture":
      furnitureInput.hidden = false;
      break;
  }
});
