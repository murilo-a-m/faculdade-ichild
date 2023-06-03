function login(email, password) {
  if (email == "" || password == "") {
    Swal.fire("Login não efetuado!", "Preencha todos os campos!", "error");
    return;
  }

  jQuery.ajax({
    url: "loginExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form").serialize(),
    success: function (result) {
      Swal.fire(
        "Login efetuado!",
        "Login realizado com sucesso",
        "success"
      ).then(function () {
        window.location.href = "../responsibleMenu/responsibleMenu.php";
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

formContent.addEventListener("submit", (ev) => {
  ev.preventDefault();
  login(email.value, senha.value);
});
