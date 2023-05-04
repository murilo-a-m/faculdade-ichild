const btnEdit = document.querySelector("#btnEdit");
const btnDelete = document.querySelector("#btnDelete");
const btnCancel = document.querySelector("#btnCancel");
const btnSave = document.querySelector("#btnSave");

const inputs = [
  (inputName = document.querySelector("#infoName")),
  (inputLastName = document.querySelector("#infoLastname")),
  (inputCep = document.querySelector("#infoCep")),
  (inputState = document.querySelector("#infoState")),
  (inputCity = document.querySelector("#infoCity")),
  (inputStreet = document.querySelector("#infoStreet")),
  (inputNumber = document.querySelector("#infoNumber")),
];

btnEdit.addEventListener("click", (ev) => {
  ev.preventDefault();
  btnEdit.classList.add("form-disabled");
  btnDelete.classList.add("form-disabled");
  btnCancel.classList.remove("form-disabled");
  btnSave.classList.remove("form-disabled");

  inputs.forEach((element) => {
    element.removeAttribute("disabled");
    element.classList.remove("disabled");
  });
});

btnCancel.addEventListener("click", (ev) => {
  ev.preventDefault();
  btnEdit.classList.remove("form-disabled");
  btnDelete.classList.remove("form-disabled");
  btnCancel.classList.add("form-disabled");
  btnSave.classList.add("form-disabled");

  inputs.forEach((element) => {
    element.setAttribute("disabled", "disabled");
    element.classList.add("disabled");
  });
});
