function formatDate(date) {
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, "0");
  const day = String(date.getDate()).padStart(2, "0");

  return `${year}-${month}-${day}`;
}

function formatTime(date) {
  const hours = String(date.getHours()).padStart(2, "0");
  const minutes = String(date.getMinutes()).padStart(2, "0");

  return `${hours}:${minutes}`;
}

const currentDate = new Date();
const formattedDate = formatDate(currentDate);
const formattedTime = formatTime(currentDate);

const formAdd = document.querySelector("#formAdd");

formAdd.addEventListener("submit", (ev) => {
  const dateStart = document.querySelector("#dateStart");
  const timeStart = document.querySelector("#timeStart");

  const dateEnd = document.querySelector("#dateEnd");
  const timeEnd = document.querySelector("#timeEnd");

  if (dateStart.value > "12/30/2023") {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Agende apenas no calendário de 2023!",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  if (dateStart.value < formattedDate) {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Data inicial inválida!",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  if (dateStart.value == formattedDate && timeStart.value < formattedTime) {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Horário inicial inválido!",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  if (dateEnd.value < dateStart.value) {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Data final inválida!",
      showConfirmButton: false,
      timer: 1500,
    });
  }

  if (dateEnd.value == dateStart.value && timeEnd.value < timeStart.value) {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Horário final inválido!",
      showConfirmButton: false,
      timer: 1500,
    });
  }
});
