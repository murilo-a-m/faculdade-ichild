function confirmarExclusaoDependent() {
    swal({
        title: "Tem certeza?",
        text: "Esta ação não pode ser desfeita!",
        icon: "warning",
        buttons: {
            cancel: "Cancelar",
            confirm: {
                text: "Confirmar",
                value: true,
                className: "btn-danger"
            }
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("#botaoDependentDelete").submit()
        }
    });
}

const button = document.querySelector("#botaoDependentDelete");

button.addEventListener("click", confirmarExclusaoDependent);