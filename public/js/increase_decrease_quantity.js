var requestBtn = document.getElementById('request_btn');
requestBtn.disabled = true;

function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;

  var increaseButton = document.getElementById('increase');
  var maxQuantity = parseInt(increaseButton.dataset.maxQuantity);
  var minQuantity = parseInt(increaseButton.dataset.minQuantity);

  var remainingValue = maxQuantity - value;
  if (remainingValue >= minQuantity) {
    value += minQuantity; // Increase by minQuantity
    document.getElementById('number').value = value;
  }

  updateButtonState(value);
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;

  var increaseButton = document.getElementById('increase');
  var minQuantity = parseInt(increaseButton.dataset.minQuantity);

  if (value >= minQuantity) {
    value -= minQuantity; // Decrease by minQuantity
    document.getElementById('number').value = value;
  }

  updateButtonState(value);
}

function updateButtonState(value) {
  var requestBtn = document.getElementById('request_btn');
  var increaseButton = document.getElementById('increase');
  var maxQuantity = parseInt(increaseButton.dataset.maxQuantity);

  if (value === 0 || value > maxQuantity) {
    requestBtn.disabled = true;
  } else {
    requestBtn.disabled = false;
  }
}
