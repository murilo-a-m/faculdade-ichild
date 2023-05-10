function findCep() {
  const cep = document.querySelector("#infoCep").value;
  const cepError = document.querySelector("#cep-error");

  if (cep !== "") {
    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

    let request = new XMLHttpRequest();
    request.open("GET", url);
    request.send();

    request.onload = function () {
      if (request.status === 200) {
        cepError.textContent = "";
        let address = JSON.parse(request.response);
        document.querySelector("#infoState").value = address.state;
        document.querySelector("#infoCity").value = address.city;
        if (address.street === undefined) {
          document.querySelector("#infoStreet").value = "";
          return true;
        } else {
          document.querySelector("#infoStreet").value = address.street;
          return true;
        }
      } else if (request.status === 404) {
        cepError.textContent = "CEP inválido";
        return false;
      } else {
        alert("Erro ao fazer a requisição");
        return false;
      }
    };
  } else {
    cepError.textContent = "Campo obrigatório*";
    return false;
  }
}

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

const cepInput = document.querySelector("#infoCep");

cepInput.addEventListener("blur", () => {
  console.log("Sss");
  findCep();
});
