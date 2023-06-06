function login(email, password) {
  if (email == "" || password == "") {
    Swal.fire("Login não efetuado!", "Preencha todos os campos!", "error");
    return;
  }

  jQuery.ajax({
    url: "loginTransportExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form").serialize(),
    success: function (result) {
      Swal.fire(
        "Login efetuado!",
        "Login realizado com sucesso",
        "success"
      ).then(function () {
        window.location.href = "../transportMenu/transportMenu.php";
      });
    },
    error: function (resp) {
      Swal.fire(
        "Login não efetuado!",
        "Tente novamente ou crie uma nova conta!",
        "error"
      );
    },
  });
}

const formContent = document.querySelector("#form");
const email = document.querySelector("#email");
const senha = document.querySelector("#senha");
const showPassword = document.querySelector("#showPassword");
const eye = document.querySelector("#eye");

formContent.addEventListener("submit", (ev) => {
  ev.preventDefault();
  login(email.value, senha.value);
});

showPassword.addEventListener("click", () => {
  const type = senha.getAttribute("type");
  if (type === "password") {
    senha.setAttribute("type", "text");
    eye.classList.remove("bi-eye-fill");
    eye.classList.add("bi-eye-slash-fill");
  } else {
    senha.setAttribute("type", "password");
    eye.classList.remove("bi-eye-slash-fill");
    eye.classList.add("bi-eye-fill");
  }
});
