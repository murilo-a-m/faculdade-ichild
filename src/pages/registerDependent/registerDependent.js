function validateName(name) {
  const nameError = document.querySelector("#name-error");

  if (name.value === "") {
    nameError.textContent = "Campo obrigatório*";
  } else {
    nameError.textContent = "";
  }
}

function validateLastName(lastName) {
  const lastNameError = document.querySelector("#lastName-error");

  if (lastName.value === "") {
    lastNameError.textContent = "Campo obrigatório*";
  } else {
    lastNameError.textContent = "";
  }
}

function validateBirth(birth) {
  const birthError = document.querySelector("#birth-error");

  if (birth.value === "") {
    birthError.textContent = "Campo obrigatório*";
  } else {
    birthError.textContent = "";
  }
}

function validateDocument(inputDocument) {
  const documentError = document.querySelector("#document-error");

  if (inputDocument.value === "") {
    documentError.textContent = "Campo obrigatório*";
  } else {
    documentError.textContent = "";
  }
}

function validateTurn(turn) {
  const turnError = document.querySelector("#turn-error");

  if (turn.value === "Escolher..") {
    turnError.textContent = "Campo obrigatório*";
  } else {
    turnError.textContent = "";
  }
}

function validateTransport(transport) {
  const transportError = document.querySelector("#transport-error");

  if (transport.value === "Escolher..") {
    transportError.textContent = "Campo obrigatório*";
  } else {
    transportError.textContent = "";
  }
}

const formContent = document.querySelector(".container__form-content");

const inputName = document.querySelector("#inputName");
const lastName = document.querySelector("#inputLastName");
const birth = document.querySelector("#inputBirth");
const inputDocument = document.querySelector("#inputDocument");
const picture = document.querySelector("#inputPicture");
const turn = document.querySelector("#inputTurn");
const transport = document.querySelector("#inputTransport");

formContent.addEventListener("submit", (ev) => {
  ev.preventDefault();

  validateName(inputName);
  validateLastName(lastName);
  validateBirth(birth);
  validateDocument(inputDocument);
  validateTurn(turn);
  validateTransport(transport);
});
