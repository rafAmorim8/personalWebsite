// Show and hide navbar on scroll + add bg-color on 0 offset
var lastScrollTop = 0;
var navbar = document.getElementById("navbar");
var menu = document.getElementById("menu");

window.addEventListener("scroll", () => {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop) {
    navbar.classList.add("hide-nav");
  } else {
    navbar.classList.remove("hide-nav");
  }

  lastScrollTop = scrollTop;

  if (lastScrollTop > 70) {
    navbar.classList.add("nav-light");
    menu.classList.add("menu-light");
  } else {
    navbar.classList.remove("nav-light");
    menu.classList.remove("menu-light");
  }
});

// Hide navbar on nav-item click
const uncheck = () => {
  document.getElementById("menu-btn").checked = false;
};