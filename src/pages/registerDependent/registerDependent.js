function validateName(name) {
  const nameError = document.querySelector("#name-error");

  if (name.value === "") {
    nameError.textContent = "Campo obrigatório*";
    return false;
  } else {
    nameError.textContent = "";
    return true;
  }
}

function validateLastName(lastName) {
  const lastNameError = document.querySelector("#lastName-error");

  if (lastName.value === "") {
    lastNameError.textContent = "Campo obrigatório*";
    return false;
  } else {
    lastNameError.textContent = "";
    return true;
  }
}

function validateBirth(birth) {
  const birthError = document.querySelector("#birth-error");

  if (birth.value === "") {
    birthError.textContent = "Campo obrigatório*";
    return false;
  } else {
    birthError.textContent = "";
    return true;
  }
}

function validateDocument(inputDocument) {
  const documentError = document.querySelector("#document-error");

  if (inputDocument.value === "") {
    documentError.textContent = "Campo obrigatório*";
    return false;
  } else {
    documentError.textContent = "";
    return true;
  }
}

function validateTurn(turn) {
  const turnError = document.querySelector("#turn-error");

  if (turn.value === "Escolher..") {
    turnError.textContent = "Campo obrigatório*";
    return false;
  } else {
    turnError.textContent = "";
    return true;
  }
}

function validateTransport(transport) {
  const transportError = document.querySelector("#transport-error");

  if (transport.value === "Escolher..") {
    transportError.textContent = "Campo obrigatório*";
    return false;
  } else {
    transportError.textContent = "";
    return true;
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
  const nameValidated = validateName(inputName);
  const lastNameValidated = validateLastName(lastName);
  const birthValidated = validateBirth(birth);
  const documentValidated = validateDocument(inputDocument);
  const turnValidated = validateTurn(turn);

  if (
    nameValidated &&
    lastNameValidated &&
    birthValidated &&
    documentValidated &&
    turnValidated
  ) {
    createDependent();
  }
});

function createDependent() {
  jQuery.ajax({
    url: "registerDependentExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form-dependent").serialize(),
    success: function (result) {
      Swal.fire(
        "Dependente cadastrado!",
        "Dependente criado com sucesso",
        "success"
      ).then(function () {
        window.location = "../responsibleMenu/responsibleMenu.php";
      });
    },
    error: function (resp) {
      if (resp.status == 403) {
        Swal.fire(
          "Documento já cadastrado!",
          "Tente novamente com outro documento!",
          "error"
        );
      } else {
        Swal.fire("Conta não cadastrada!", "Tente novamente!", "error");
      }
    },
  });
}
