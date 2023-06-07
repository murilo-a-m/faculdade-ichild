function searchData(search) {
  window.location =
    "http://localhost/ichild/src/pages/dependendNotify/dependentMsgExibRespons.php?search=" +
    search.value;
}
const search = document.querySelector("#search");
const button = document.querySelector("#button");

button.addEventListener("click", () => {
  searchData(search);
});

search.addEventListener("keydown", (ev) => {
  if (ev.key === "Enter") {
    searchData(search);
  }
});
