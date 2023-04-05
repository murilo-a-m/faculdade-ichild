function findCep() {
  const cep = document.querySelector("#inputCep").value;
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
        document.querySelector("#inputState").value = address.state;
        document.querySelector("#inputCity").value = address.city;
      } else if (request.status === 404) {
        cepError.textContent = "CEP inválido";
      } else {
        alert("Erro ao fazer a requisição");
      }
    };
  } else {
    cepError.textContent = "Campo obrigatório*";
  }
}

const cepInput = document.querySelector("#inputCep");

cepInput.addEventListener("blur", () => {
  findCep();
});
