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

    let request = new XMLHttpRequest();
    request.open("GET", url);
    request.send();

    request.onload = function () {
      if (request.status === 200) {
        cepError.textContent = "";
        return true;
      } else if (request.status === 404) {
        cepError.textContent = "CEP inválido";
        Swal.fire({
          position: "top-end",
          icon: "error",
          title: "CEP Inválido!",
          showConfirmButton: false,
          timer: 1500,
        });
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
        window.location = "../login/login.php";
      });
    },
    error: function (resp) {
      if (resp.status == 403) {
        Swal.fire(
          "Email já cadastrado!",
          "Tente novamente com outro email!",
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

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  if (
    validateEmail(email) &&
    validatePassword(password, confirmPassword) &&
    validateCep()
  ) {
    createResponsible();
  }
});
