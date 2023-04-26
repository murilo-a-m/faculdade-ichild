let navbarMenuIcon = document.querySelector("#app__nav-icon");
let navbarMenuClose = document.querySelector(".menu__bar-icon");
let navbarMenu = document.querySelector(".aside__bar");
let profileIcon = document.querySelector(".profile-img");
let profileNav = document.querySelector(".nav__profile");

navbarMenuIcon.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

navbarMenuClose.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

profileIcon.onclick = () => {
  profileNav.classList.toggle("openNavbar");
};
