const emailInput = document.getElementById("email");

emailInput.addEventListener("input", (event) => {
  const invalid = emailInput.validity.patternMismatch;
  if (invalid) {
    emailInput.classList.remove("valid");
    emailInput.classList.add("invalid");
  } else {
    emailInput.classList.add("valid");
    emailInput.classList.remove("invalid");
  }
});
