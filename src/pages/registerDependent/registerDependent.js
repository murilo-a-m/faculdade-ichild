function validateTurn(turn) {
  const turnError = document.querySelector("#turn-error");

  if (turn === "") {
    turnError.textContent = "Selecione um turno*";
    return false;
  } else {
    turnError.textContent = "";
    return true;
  }
}

function validateTransport(transport) {
  const transportError = document.querySelector("#transport-error");

  if (transport === "") {
    transportError.textContent = "Selecione um transportador*";
    return false;
  } else {
    transportError.textContent = "";
    return true;
  }
}

const formContent = document.querySelector(".container__form-content");

formContent.addEventListener("submit", (ev) => {
  ev.preventDefault();
  const turn = document.querySelector("#inputTurn").value;
  const transport = document.querySelector("#inputTransport").value;

  const turnValidated = validateTurn(turn);
  const transportValidated = validateTransport(transport);

  if (turnValidated && transportValidated) {
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
