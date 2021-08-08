const hamburger__btn = document.querySelector(".nav__hamburguer");
const nav__items = document.querySelectorAll(".nav__item");
let menuOpen = false;
hamburger__btn.addEventListener("click", () => {
  if (!menuOpen) {
    hamburger__btn.classList.add("open");
    nav__items.forEach((nav__item) => nav__item.classList.add("active"));
    menuOpen = true;
  } else {
    hamburger__btn.classList.remove("open");
    nav__items.forEach((nav__item) => nav__item.classList.remove("active"));
    menuOpen = false;
  }
});
