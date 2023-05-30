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

const dependentSelect = document.querySelector("#dependentSelect");
const currentDate = new Date();
const formattedDate = formatDate(currentDate);
const formattedTime = formatTime(currentDate);

const formAdd = document.querySelector("#formAdd");

formAdd.addEventListener("submit", (ev) => {
  const dateStart = document.querySelector("#dateStart");
  const timeStart = document.querySelector("#timeStart");

  const dateEnd = document.querySelector("#dateEnd");
  const timeEnd = document.querySelector("#timeEnd");

  const dependentError = document.querySelector("#dependent-error");
  const dataStartError = document.querySelector("#dataStart-error");
  const timeStartError = document.querySelector("#timeStart-error");
  const dataEndError = document.querySelector("#dataEnd-error");
  const timeEndError = document.querySelector("#timeEnd-error");

  dependentError.innerHTML = "";
  dataStartError.innerHTML = "";
  timeStartError.innerHTML = "";
  dataEndError.innerHTML = "";
  timeEndError.innerHTML = "";

  if (dateStart.value > "2023-12-30") {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Data inválida!",
      showConfirmButton: false,
      timer: 1500,
    });
    dataStartError.innerHTML =
      "Data inválida! Agende apenas no calendário de 2023.";
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

    dataStartError.innerHTML = "Data inválida! Essa data já passou.";
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

    timeStartError.innerHTML = "Horário inválido! Esse horário já passou.";
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
    dataEndError.innerHTML =
      "Data inválida! Essa data é anterior a data inicial.";
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
    timeEndError.innerHTML =
      "Horário inválido! Esse horário é antetior ao horário inicial.";
  }

  if (dependentSelect.value == "") {
    ev.preventDefault();
    Swal.fire({
      position: "top-end",
      icon: "error",
      title: "Selecione um dependente!",
      showConfirmButton: false,
      timer: 1500,
    });
    dependentError.innerHTML = "Selecione um dependente!";
  }
});
