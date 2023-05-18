document.addEventListener("DOMContentLoaded", function () {
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "dayGridMonth",
    headerToolbar: {
      start: "prev,next,today",
      center: "title",
      end: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    locale: "pt-br",
    buttonText: {
      today: "hoje",
      month: "mês",
      week: "semana",
      day: "dia",
      list: "lista",
    },
    themeSystem: "bootstrap5",
    dateClick: function (info) {
      alert("Clicked on: " + info.dateStr);
      alert("Coordinates: " + info.jsEvent.pageX + "," + info.jsEvent.pageY);
      alert("Current view: " + info.view.type);
      // change the day's background color just for fun
      info.dayEl.style.backgroundColor = "red";
    },
    events: "./events.json",
    eventClick: function (info) {
      window.location.href =
        "https://www.sitequalquer.com.br/evento/" + info.event.id;
    },
  });
  calendar.render();
});
