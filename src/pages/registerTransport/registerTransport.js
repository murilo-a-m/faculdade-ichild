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

function validateStreet(street) {
  const streetError = document.querySelector("#street-error");

  if (street.value === "") {
    streetError.textContent = "Campo obrigatório*";
    return false;
  } else {
    streetError.textContent = "";
    return true;
  }
}

function validateNumber(number) {
  const numberError = document.querySelector("#number-error");

  if (number.value === "") {
    numberError.textContent = "Campo obrigatório*";
    return false;
  } else {
    numberError.textContent = "";
    return true;
  }
}

function createResponsible() {
  jQuery.ajax({
    url: "registerTransportExe.php",
    type: "POST",
    dataType: "json",
    data: $("#formTransport").serialize(),
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

const form = document.querySelector("#formTransport");
const email = document.querySelector("#inputEmail");
const password = document.querySelector("#inputPassword");
const confirmPassword = document.querySelector("#inputConfirmPassword");
const street = document.querySelector("#inputStreet");
const number = document.querySelector("#inputNumber");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  const emailOk = validateEmail(email);
  const passwordOk = validatePassword(password, confirmPassword);
  const streetOk = validateStreet(street);
  const numberOk = validateNumber(number);

  if (emailOk && passwordOk && streetOk && numberOk) {
    createResponsible();
  }
});
