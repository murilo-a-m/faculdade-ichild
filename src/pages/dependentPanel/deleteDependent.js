function confirmarExclusaoDependent(dependentId) {
  Swal.fire({
    title: "Você tem certeza?",
    text: "Você não podera reverter isso!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sim, desejo deletar!",
  }).then((result) => {
    if (result.isConfirmed) {
      deleteDependentExe(dependentId);
    }
  });
}

function deleteDependentExe(dependentId) {
  jQuery.ajax({
    url: "deleteExe.php",
    type: "POST",
    dataType: "json",
    data: { dependentId },
    success: function (result) {
      Swal.fire(
        "Dependente removido!",
        "Dependente removido com sucesso!",
        "success"
      ).then(function () {
        window.location = "../dependentPanel/dependentPanel.php";
      });
    },
    error: function (resp) {
      console.log(resp);
      Swal.fire("Conta não cadastrada!", "Tente novamente!", "error");
    },
  });
}

function deleteDependent(dependentId) {
  confirmarExclusaoDependent(dependentId);
}
