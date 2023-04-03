function validateEmail(email) {
  const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  const spanError = document.querySelector("#email-error");

  if (email.value.length < 0) {
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
    }
  } else {
    passwordError.textContent = "Campo obrigatório*";
  }
}

function validateAddress(address) {
  const addressError = document.querySelector("#address-error");

  if (address.value === "") {
    addressError.textContent = "Campo obrigatório*";
  } else {
    addressError.textContent = "";
  }
}

function validateCity(city) {
  const cityError = document.querySelector("#city-error");

  if (city.value === "") {
    cityError.textContent = "Campo obrigatório*";
  } else {
    cityError.textContent = "";
  }
}

function validateState(state) {
  const stateError = document.querySelector("#state-error");

  if (state.value === "Escolher..") {
    stateError.textContent = "Campo obrigatório*";
  } else {
    stateError.textContent = "";
  }
}

function validateCEP(cep) {
  const cepError = document.querySelector("#cep-error");

  if (cep.value === "") {
    cepError.textContent = "Campo obrigatório";
  } else {
    cepError.textContent = "";
  }
}

const form = document.querySelector(".container__form-content");

const email = document.querySelector("#inputEmail");
const password = document.querySelector("#inputPassword");
const confirmPassword = document.querySelector("#inputConfirmPassword");
const address = document.querySelector("#inputAddress");
const city = document.querySelector("#inputCity");
const state = document.querySelector("#inputState");
const cep = document.querySelector("#inputCep");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();

  validateEmail(email);
  validatePassword(password, confirmPassword);
  validateAddress(address);
  validateCity(city);
  validateState(state);
  validateCEP(cep);
});
