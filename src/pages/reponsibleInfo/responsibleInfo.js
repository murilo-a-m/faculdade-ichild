function removeDisable(input) {
  input.removeAttribute("disabled");
}

const formContent = document.querySelector(
  ".container__responsibleInfo-content"
);

const inputs = [
  (inputName = document.querySelector("#infoName")),
  (inputLastName = document.querySelector("#infoLastname")),
  (inputCep = document.querySelector("#infoCep")),
  (inputState = document.querySelector("#infoState")),
  (inputCity = document.querySelector("#infoCity")),
  (inputStreet = document.querySelector("#infoStreet")),
  (inputNumber = document.querySelector("#infoNumber")),
];

formContent.addEventListener("submit", (ev) => {
  ev.preventDefault();
  inputs.forEach((element) => {
    removeDisable(element);
    element.classList.remove("disabled");
  });
});
