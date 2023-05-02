let navbarIcon = document.querySelector("#nav-icon");
let navbar = document.querySelector(".header__nav");

navbarIcon.onclick = () => {
  navbar.classList.toggle("open");
};

document.onclick = (event) => {
  if (navbarIcon.contains(event.target) || navbar.contains(event.target)) {
    return;
  }

  navbar.classList.remove("open");
};
