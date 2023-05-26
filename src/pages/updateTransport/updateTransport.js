function findCep() {
  return new Promise((resolve, reject) => {
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
          resolve(true);
        } else if (request.status === 404) {
          cepError.textContent = "CEP inválido";
          resolve(false);
        } else {
          alert("Erro ao fazer a requisição");
          resolve(false);
        }
      };
    } else {
      cepError.textContent = "Campo obrigatório*";
      resolve(false);
    }
  });
}

const form = document.querySelector("#formUpdate");
const btnEdit = document.querySelector("#btnEdit");
const btnDelete = document.querySelector("#btnDelete");
const btnCancel = document.querySelector("#btnCancel");
const btnSave = document.querySelector("#btnSave");

const inputs = [
  (inputName = document.querySelector("#infoName")),
  (inputLastName = document.querySelector("#infoLastname")),
  (inputCnh = document.querySelector("#infoCnh")),
  (inputCep = document.querySelector("#infoCep")),
  (inputPlaca = document.querySelector("#infoPlaca")),
  (inputMarca = document.querySelector("#infoMarca")),
  (inputModelo = document.querySelector("#infoModelo")),
  (inputCapacidade = document.querySelector("#infoCapacidade")),
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
  findCep();
});

form.addEventListener("submit", async (ev) => {
  ev.preventDefault();

  validateCep = findCep();

  if (await findCep()) {
    form.submit();
    return;
  }

  Swal.fire({
    position: "top-end",
    icon: "error",
    title: "Cep inválido!",
    showConfirmButton: false,
    timer: 1500,
  });
});
