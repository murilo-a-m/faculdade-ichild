function validateEmail(email) {
  const emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  const spanError = document.querySelector("#email-error");

  if (email.value.match(emailFormat)) {
    spanError.textContent = "";
  } else {
    spanError.textContent = "Email inválido";
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
    passwordError.textContent = "Campo obrigatório";
  }
}

const form = document.querySelector(".container__form-content");

const email = document.querySelector("#inputEmail");
const password = document.querySelector("#inputPassword");
const confirmPassword = document.querySelector("#inputConfirmPassword");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();

  validateEmail(email);
  validatePassword(password, confirmPassword);
});
