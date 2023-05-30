function createLog() {
  jQuery.ajax({
    url: "criarLogExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form-log").serialize(),
    success: function (result) {
      Swal.fire("log Criado com Sucesso!", "success").then(function () {
        window.location = "./criarLog.php";
      });
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire("Log não gerado!", "Tente novamente!", "error");
    },
  });
}

const form = document.querySelector(".container__form-content");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  createLog();
});
