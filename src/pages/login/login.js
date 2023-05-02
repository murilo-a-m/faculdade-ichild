function login() {
  if ($("#email").val() == "") {
    Swal.fire("Preencha o campo email!");
    return false;
  }

  if ($("#senha").val() == "") {
    Swal.fire("Preencha o campo senha!");
    return false;
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
        window.location = "../home/home.php";
      });
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire(
        "Login não efetuado!",
        "Tente novamente ou crie uma nova conta!",
        "error"
      );
    },
  });
}
f;
