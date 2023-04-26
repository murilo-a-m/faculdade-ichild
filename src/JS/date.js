const clock = document.querySelector("#clock");
const date = new Intl.DateTimeFormat("pt-BR").format(new Date());

clock.textContent = date;
