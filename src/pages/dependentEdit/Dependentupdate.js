function removeDisable(input) {
  input.removeAttribute("disabled");
}

const btnEdit = document.querySelector("#btnEdit");
const btnCancel = document.querySelector("#btnCancel");
const btnSave = document.querySelector("#btnSave");

const inputs = [
  (inputName = document.querySelector("#infoNameDependent")),
  (inputLastName = document.querySelector("#infoLastnameDependent")),
  (inputBirth = document.querySelector("#infoBirthDependent")),
  (inputDocument = document.querySelector("#infoDocumentDependent")),
  (inputTurn = document.querySelector("#infoTurnDependent")),
  (inputStreet = document.querySelector("#infoTransportDependent")),
];

btnEdit.addEventListener("click", (ev) => {
  ev.preventDefault();
  btnEdit.classList.add("form-disabled");
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
  btnCancel.classList.add("form-disabled");
  btnSave.classList.add("form-disabled");

  inputs.forEach((element) => {
    element.setAttribute("disabled", "disabled");
    element.classList.add("disabled");
  });
});
