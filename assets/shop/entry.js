// In this file you can import assets like images or stylesheets
document.addEventListener('DOMContentLoaded', function () {
  const quantityField = document.querySelector('input[data-alert-quantity-js="true"]');

  if (quantityField) {
    quantityField.addEventListener('input', function () {
      if (parseInt(quantityField.value, 10) === 70) {
        alert('Great Choice !');
      }
    });
  }
});
