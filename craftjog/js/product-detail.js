function increase(limit) {
  var quantityInput = document.getElementById("quantity");
  var currentVal = parseInt(quantityInput.value);

  if (!isNaN(currentVal) && currentVal < limit) {
    quantityInput.value = currentVal + 1;
  } else {
    // Jika currentVal lebih dari atau sama dengan limit, atur nilainya menjadi limit
    quantityInput.value = limit;
  }
}

function decrease() {
  var quantityInput = document.getElementById("quantity");
  var currentVal = parseInt(quantityInput.value);

  if (!isNaN(currentVal) && currentVal > 0) {
    quantityInput.value = currentVal - 1;
  } else {
    // Jika currentVal kurang dari atau sama dengan 0, atur nilainya menjadi 0
    quantityInput.value = 0;
  }
}

function validateQuantity(limit) {
  var quantityInput = document.getElementById("quantity");
  var currentVal = parseInt(quantityInput.value);

  if (!isNaN(currentVal)) {
    if (currentVal > limit) {
      // Jika nilai lebih besar dari limit, atur nilainya menjadi limit
      quantityInput.value = limit;
    } else if (currentVal < 0) {
      // Jika nilai kurang dari 0, atur nilainya menjadi 0
      quantityInput.value = 0;
    }
  } else {
    // Jika nilai bukan angka, atur nilainya menjadi 0
    quantityInput.value = 0;
  }
}
