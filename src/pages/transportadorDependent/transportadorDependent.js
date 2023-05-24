
  function fetchDependents() {
    const transportId = document.getElementById("inputTransport").value;
    const dependentSelect = document.getElementById("inputDependent");

    // Limpa as opções de dependentes anteriores
    dependentSelect.innerHTML = "<option selected>Escolher..</option>";

    // Faz a requisição AJAX para obter os dependentes
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        const dependents = JSON.parse(xhr.responseText);

        // Preenche o campo de seleção de dependentes com as opções retornadas
        dependents.forEach(function(dependent) {
          const option = document.createElement("option");
          option.value = dependent.id;
          option.text = dependent.nome;
          dependentSelect.appendChild(option);
        });
      }
    };

    // Define o método HTTP e a URL do arquivo PHP que retorna os dependentes
    xhr.open("POST", "getDependents.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Envie a requisição com o ID do transportador
    xhr.send("transportId=" + transportId);
  }
