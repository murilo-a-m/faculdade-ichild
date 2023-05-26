

function fetchDependents() {
  const transportId = $("#inputTransport").val();
  const dependentSelect = $("#inputDependent");

  // Limpa as opções de dependentes anteriores
  dependentSelect.html("<option selected>Escolher..</option>");

  // Faz a requisição AJAX para obter os dependentes
  $.ajax({
    url: "transportadorDependent.php",
    type: "POST",
    data: { transportId: transportId },
    dataType: "json",
    success: function(dependents) {
      // Preenche o campo de seleção de dependentes com as opções retornadas
      dependents.forEach(function(dependent) {
        const option = $("<option></option>")
          .val(dependent.id)
          .text(dependent.nome);
        dependentSelect.append(option);
      });
    }
  });
}

