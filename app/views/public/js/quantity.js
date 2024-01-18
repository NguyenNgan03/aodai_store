document.addEventListener('DOMContentLoaded', function () {
    const decrementBtn = document.getElementById('decrementBtn');
    const incrementBtn = document.getElementById('incrementBtn');
    const quantityInput = document.getElementById('quantity');

    decrementBtn.addEventListener('click', function () {
      let currentValue = parseInt(quantityInput.value, 10);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    });

    incrementBtn.addEventListener('click', function () {
      let currentValue = parseInt(quantityInput.value, 10);
      quantityInput.value = currentValue + 1;
    });
  });