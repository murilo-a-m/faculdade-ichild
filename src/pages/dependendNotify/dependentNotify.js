function createDependent() {
  jQuery.ajax({
    url: "dependendNotifyExe.php",
    type: "POST",
    dataType: "json",
    data: $("#form-notify").serialize(),
    success: function (result) {
      Swal.fire(
        "Notificação enviada!",
        "Sua notificação foi enviada ao responsável!",
        "success"
      ).then(function () {
        window.location = "../transportMenu/transportMenu.php";
      });
    },
    error: function (resp) {
      Swal.fire("Notificação não foi enviada!", "Tente novamente!", "error");
    },
  });
}

const formNotify = document.querySelector("#form-notify");
formNotify.addEventListener("submit", (ev) => {
  ev.preventDefault();
  createDependent();
});
