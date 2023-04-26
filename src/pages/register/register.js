function validateEmail(email) {
  const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  const spanError = document.querySelector("#email-error");

  if (email.value.length > 0) {
    if (email.value.match(emailFormat)) {
      spanError.textContent = "";
    } else {
      spanError.textContent = "Email inválido";
    }
  } else {
    spanError.textContent = "Campo obrigatório*";
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
      } else {
        passwordConfirmError.textContent = "";
      }
    } else {
      passwordError.textContent = "Senha inválida";
      passwordConfirmError.textContent = "";
    }
  } else {
    passwordError.textContent = "Campo obrigatório*";
  }
}

function validateStreet(street) {
  const streetError = document.querySelector("#street-error");

  if (street.value === "") {
    streetError.textContent = "Campo obrigatório*";
  } else {
    streetError.textContent = "";
  }
}

function validateNumber(number) {
  const numberError = document.querySelector("#number-error");

  if (number.value === "") {
    numberError.textContent = "Campo obrigatório*";
  } else {
    numberError.textContent = "";
  }
}

const form = document.querySelector(".container__form-content");

const email = document.querySelector("#inputEmail");
const password = document.querySelector("#inputPassword");
const confirmPassword = document.querySelector("#inputConfirmPassword");
const street = document.querySelector("#inputStreet");
const number = document.querySelector("#inputNumber");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();

  console.log("oi");

  validateEmail(email);
  validatePassword(password, confirmPassword);
  validateStreet(street);
  validateNumber(number);
});
