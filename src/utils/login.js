function validateEmail(inputText) {
  const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (inputText.value.match(mailformat)) {
    console.log("Chamará o login futuramente");
  } else {
    alert("You have entered an invalid email address!");
    return false;
  }
}

function validatePassword(inputText) {
  const passwordFormat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  if (inputText.value.match(passwordFormat)) {
    console.log("Chamará o login futuramente");
  } else {
    alert("You have entered an invalid password!");
    return false;
  }
}

function validateForms(email, password) {
  validateEmail(email);
  validatePassword(password);
}
