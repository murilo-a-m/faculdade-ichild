const clock = document.querySelector("#clock");

function updateClock() {
  const date = new Intl.DateTimeFormat("pt-BR").format(new Date());
  const currentTime = new Date();
  const hours = currentTime.getHours();
  const minutes = currentTime.getMinutes();

  const formattedHours = String(hours).padStart(2, "0");
  const formattedMinutes = String(minutes).padStart(2, "0");

  clock.textContent = formattedHours + ":" + formattedMinutes + " - " + date;
}

updateClock();
setInterval(updateClock, 1000);
