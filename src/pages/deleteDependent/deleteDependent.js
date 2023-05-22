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
      window.location.href = `http://localhost/ichild/src/pages/deleteDependent/delete.php?id=${dependentId}`;
    }
  });
}

const button = document.querySelector("#botaoDependentDelete");

button.addEventListener("click", function (event) {
  event.preventDefault(); // Prevent the default link behavior
  const url = button.parentElement.href;
  const dependentId = url.split("id=")[1]; // Extract the dependentId from the URL
  confirmarExclusaoDependent(dependentId);
});
