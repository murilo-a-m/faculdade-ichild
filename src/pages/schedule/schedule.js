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
    events: [
      {
        title: "The Title",
        start: "2023-05-18",
        end: "2023-05-19",
      },
      {
        title: "The Title 2",
        start: "2023-05-22",
        end: "2023-05-25",
      },
    ],
  });
  calendar.render();
});
