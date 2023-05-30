document.addEventListener('DOMContentLoaded', function() {
    var selectStatus = document.getElementById('inputStatus');
    var divEspecifico = document.querySelector('.col-md-12.mt-2');
  
    selectStatus.addEventListener('change', function() {
      var selectedStatus = selectStatus.value;
      if (selectedStatus === 'Em transito') {
        iconLogTransport.style.display = 'block';
      } else {
        iconLogTransport2.style.display = 'none';
      }
    });
  });
