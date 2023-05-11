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
        if (address.street === undefined) {
          document.querySelector("#inputStreet").value = "";
        } else {
          document.querySelector("#inputStreet").value = address.street;
        }
      } else if (request.status === 404) {
        cepError.textContent = "CEP inválido";
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "CEP Inválido!",
          showConfirmButton: false,
          timer: 1500,
        });
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
