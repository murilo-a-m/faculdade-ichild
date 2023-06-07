function createLog() {
  jQuery.ajax({
    url: "criarLogExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form-log").serialize(),
    success: function (result) {
      swal
        .fire(
          "Log realizada!",
          "Log enviada ao responsável com sucesso!",
          "success"
        )
        .then(function () {
          window.location = "./criarLog.php";
        });
    },
    error: function (resp) {
      console.log(resp);
      swal.fire("Log não realizada!", "Erro ao realizar a log!", "error");
    },
  });
}

const form = document.querySelector(".container__form-content");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  createLog();
});
