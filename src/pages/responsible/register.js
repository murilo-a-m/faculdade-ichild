function validateCPF(cpf) {
  const cpfError = document.querySelector("#cpf-error");
  cpf = cpf.replace(/\D/g, "");

  if (cpf.length !== 11) {
    cpfError.textContent = "CPF inválido";
    return false;
  }

  const firstDigit = Number(cpf[9]);
  const secondDigit = Number(cpf[10]);

  let sum = 0;
  let weight = 10;
  let remainder;

  for (let i = 0; i < 9; i++) {
    sum += Number(cpf[i]) * weight;
    weight--;
  }

  remainder = (sum * 10) % 11;
  if (remainder === 10) {
    remainder = 0;
  }

  if (remainder !== firstDigit) {
    cpfError.textContent = "CPF inválido";
    return false;
  }

  sum = 0;
  weight = 11;

  for (let i = 0; i < 10; i++) {
    sum += Number(cpf[i]) * weight;
    weight--;
  }

  remainder = (sum * 10) % 11;
  if (remainder === 10) {
    remainder = 0;
  }

  if (remainder !== secondDigit) {
    cpfError.textContent = "CPF inválido";
    return false;
  }

  cpfError.textContent = "";
  return true;
}

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
      Swal.fire(
        "Senha inválida!",
        "Sua senha deve conter letras maiscúlas, letras minúsculas, números e caracteres especiais",
        "warning"
      );
      return false;
    }
  } else {
    passwordError.textContent = "Campo obrigatório*";
    return false;
  }
}

function createResponsible() {
  jQuery.ajax({
    url: "registerExe.php",
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
      } else if (resp.status == 409) {
        Swal.fire(
          "CPF já cadastrado!",
          "Tente novamente ou faça seu login!",
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
const cpf = document.querySelector("#inputCpf");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  const emailOk = validateEmail(email);
  const passwordOk = validatePassword(password, confirmPassword);
  const cpfOk = validateCPF(cpf.value);

  if (emailOk && passwordOk && cpfOk) {
    createResponsible();
  }
});
