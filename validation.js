const patternElements = document.querySelectorAll("input[pattern]");
const requiredElements = document.querySelectorAll("input[required]");
const maxLengthElements = document.querySelectorAll("input[maxLength]");

console.log(patternElements, requiredElements);

document.querySelectorAll("input").forEach((input) => {
  input.addEventListener("input", (event) => {
    const element = event.target;
    if (element.checkValidity()) {
      element.classList.add("valid");
      element.classList.remove("invalid");
    }
  });
});

requiredElements.forEach((element) => {
  element.addEventListener("input", (event) => {
    const element = event.target;
    const invalid = element.validity.valueMissing;
    if (invalid) {
      element.classList.remove("valid");
      element.classList.add("invalid");
    }
  });
});

patternElements.forEach((element) => {
  element.addEventListener("input", (event) => {
    const element = event.target;
    const invalid = element.validity.patternMismatch;
    if (invalid) {
      element.classList.remove("valid");
      element.classList.add("invalid");
    }
  });
});
