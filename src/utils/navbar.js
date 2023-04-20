let navbarIcon = document.querySelector("#nav-icon");
let navbar = document.querySelector(".header__nav");

navbarIcon.onclick = () => {
  navbar.classList.toggle("open");
};
