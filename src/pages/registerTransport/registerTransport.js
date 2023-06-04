function validateEmail(email) {
  const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  const spanError = document.querySelector("#email-error");

  if (email.value.length > 0) {
    if (email.value.match(emailFormat)) {
      spanError.textContent = "";
      return true;
    } else {
      spanError.textContent = "Email inválido";
      Swal.fire({
        position: "top-end",
        icon: "error",
        title: "Email inválido!",
        showConfirmButton: false,
        timer: 1500,
      });
      return false;
    }
  } else {
    spanError.textContent = "Campo obrigatório*";
    return false;
  }
}

function validatePassword(password, passwordConfirm) {
  const passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  const passwordError = document.querySelector("#password-error");
  const passwordConfirmError = document.querySelector("#confirmPassword-error");

  if (password.value.length > 0) {
    if (password.value.match(passwordFormat)) {
      passwordError.textContent = "";
      if (password.value !== passwordConfirm.value) {
        passwordConfirmError.textContent = "As senhas não são iguais";
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "As senhas não coincidem!",
          showConfirmButton: false,
          timer: 1500,
        });
        return false;
      } else {
        passwordConfirmError.textContent = "";
        return true;
      }
    } else {
      passwordError.textContent = "Senha inválida";
      passwordConfirmError.textContent = "";
      Swal.fire({
        position: "top-end",
        icon: "error",
        title: "Senha inválida!",
        showConfirmButton: false,
        timer: 1500,
      });
      return false;
    }
  } else {
    passwordError.textContent = "Campo obrigatório*";
    return false;
  }
}

function validateCep() {
  const cep = document.querySelector("#inputCep").value;
  const cepError = document.querySelector("#cep-error");

  if (cep !== "") {
    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

    return new Promise((resolve, reject) => {
      let request = new XMLHttpRequest();
      request.open("GET", url);
      request.send();

      request.onload = function () {
        if (request.status === 200) {
          cepError.textContent = "";
          resolve(true); // CEP é válido
        } else if (request.status === 404) {
          cepError.textContent = "CEP inválido";
          Swal.fire({
            position: "top-end",
            icon: "error",
            title: "CEP Inválido!",
            showConfirmButton: false,
            timer: 1500,
          });
          resolve(false);
        } else {
          alert("Erro ao fazer a requisição");
          resolve(false);
        }
      };
    });
  } else {
    cepError.textContent = "Campo obrigatório*";
    return Promise.resolve(false);
  }
}

function validarCNH(cnh) {
  const numeroCNH = cnh.replace(/\D/g, "");
  const cnhError = document.querySelector("#cnh-error");

  if (numeroCNH.length !== 11) {
    cnhError.textContent = "CNH inválida";
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "CNH inválido!",
      showConfirmButton: false,
      timer: 1500,
    });
    return false;
  }

  const peso1 = [9, 8, 7, 6, 5, 4, 3, 2, 1];
  const peso2 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

  let soma1 = 0;
  let soma2 = 0;

  for (let i = 0; i < 9; i++) {
    soma1 += parseInt(numeroCNH.charAt(i)) * peso1[i];
    soma2 += parseInt(numeroCNH.charAt(i)) * peso2[i];
  }

  const resto1 = soma1 % 11;
  const resto2 = soma2 % 11;

  const digitoVerificador1 = resto1 >= 10 ? 0 : resto1;
  const digitoVerificador2 = resto2 >= 10 ? 0 : resto2;

  if (
    digitoVerificador1 === parseInt(numeroCNH.charAt(9)) &&
    digitoVerificador2 === parseInt(numeroCNH.charAt(10))
  ) {
    cnhError.textContent = "";
    return true;
  } else {
    cnhError.textContent = "CNH inválida";
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "CNH inválido!",
      showConfirmButton: false,
      timer: 1500,
    });
    return false;
  }
}

function validarPlaca(placa) {
  const placaFormato = /^[A-Z]{3}\d{4}$/;
  const placaError = document.querySelector("#placa-error");

  if (placa.match(placaFormato)) {
    placaError.textContent = "";
    return true;
  } else {
    placaError.textContent = "Placa inválida";
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Placa inválida!",
      showConfirmButton: false,
      timer: 1500,
    });
    return false;
  }
}

function createResponsible() {
  jQuery.ajax({
    url: "registerTransportExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form").serialize(),
    success: function (result) {
      Swal.fire(
        "Conta cadastrada!",
        "Conta criada com sucesso",
        "success"
      ).then(function () {
        window.location = "../loginTransport/loginTransport.php";
      });
    },
    error: function (resp) {
      if (resp.status == 403) {
        Swal.fire(
          "Email já cadastrado!",
          "Tente novamente com outro email!",
          "error"
        );
      } else if (resp.status == 409) {
        Swal.fire(
          "CNH já cadastrado!",
          "Tente novamente com outro CNH!",
          "error"
        );
      } else {
        Swal.fire("Conta não cadastrada!", "Tente novamente!", "error");
      }
    },
  });
}

const form = document.querySelector("#form");
const email = document.querySelector("#inputEmail");
const password = document.querySelector("#inputPassword");
const confirmPassword = document.querySelector("#inputConfirmPassword");
const cnh = document.querySelector("#inputCnh");
const placa = document.querySelector("#inputPlaca");

form.addEventListener("submit", async (ev) => {
  ev.preventDefault();
  if (
    validateEmail(email) &&
    validatePassword(password, confirmPassword) &&
    (await validateCep()) &&
    validarCNH(cnh.value) &&
    validarPlaca(placa.value)
  ) {
    createResponsible();
  }
});
