const myForm = document.getElementById("msform");
const radioButtons = myForm.querySelectorAll('input[type="Submit"]');

for (let i = 0; i < radioButtons.length; i++) {
  radioButtons[i].addEventListener("click", function() {
    myForm.submit();
  });
}