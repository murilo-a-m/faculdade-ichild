let navbarMenuIcon = document.querySelector("#app__nav-icon");
let navbarMenuClose = document.querySelector(".menu__bar-icon");
let navbarMenu = document.querySelector(".aside__bar");
let profileIcon = document.querySelector(".profile-img");
let profileNav = document.querySelector(".aside__bar-profile");
let profileMenuClose = document.querySelector(".profile__info-icon");

navbarMenuIcon.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

navbarMenuClose.onclick = () => {
  navbarMenu.classList.toggle("openNavbar");
};

profileIcon.onclick = () => {
  profileNav.classList.toggle("openNavbar");
};

profileMenuClose.onclick = () => {
  profileNav.classList.toggle("openNavbar");
};

document.onclick = (event) => {
  if (
    navbarMenu.contains(event.target) ||
    navbarMenuIcon.contains(event.target) ||
    profileNav.contains(event.target) ||
    profileIcon.contains(event.target)
  ) {
    return;
  }

  navbarMenu.classList.remove("openNavbar");
  profileNav.classList.remove("openNavbar");
};
