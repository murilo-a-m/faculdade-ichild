
  function setTransporterId() {
    var transporterSelect = document.getElementById("inputTransport");
    var transporterIdInput = document.getElementById("transporterId");
    var selectedTransporterId = transporterSelect.value;
    transporterIdInput.value = selectedTransporterId;
  }

  setTransporterId();