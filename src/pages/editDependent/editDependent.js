function updateDependent(dependentId) {
  jQuery.ajax({
    url: "editDependentExe.php",
    type: "POST",
    dataType: "json",
    data: {
      dependentId,
      ...$("#form-dependent")
        .serializeArray()
        .reduce((obj, item) => {
          obj[item.name] = item.value;
          return obj;
        }, {}),
    },
    success: function (result) {
      Swal.fire(
        "Dependente atualizado!",
        "Dependente atualizado com sucesso!",
        "success"
      ).then(function () {
        window.location = `./editDependent.php?id=${dependentId}`;
      });
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire(
        "Falha ao atualizar o dependente!",
        "Tente novamente!",
        "error"
      );
    },
  });
}

const form = document.querySelector(".container__form-content");

form.addEventListener("submit", (ev) => {
  ev.preventDefault();
  var urlParams = new URLSearchParams(window.location.search);
  var id = urlParams.get("id");
  updateDependent(id);
});
