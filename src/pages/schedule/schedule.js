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
      if (info.view.type == "dayGridMonth") {
        calendar.changeView("timeGrid", info.dateStr);
      } else {
        window.location.href = "./scheduleExe.php/?date=" + info.dateStr;
      }
    },
    events: "./scheduleEvents.php",
    eventClick: function (info) {
      window.location.href =
        "https://www.sitequalquer.com.br/evento/" + info.event.id;
    },
  });
  calendar.render();
});
