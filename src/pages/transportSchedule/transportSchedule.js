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
      }
    },
    events: "./transportScheduleEvents.php",
    eventClick: function (info) {
      window.location.href =
        "./transportScheduleUpdate.php?id=" + info.event.id;
    },
  });
  calendar.render();
});
