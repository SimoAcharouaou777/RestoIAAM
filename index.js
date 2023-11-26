window.addEventListener("scroll", () => {
  let nav = document.querySelector("nav.navbar-expand-lg");

  if (window.scrollY > 50) {
    nav.classList.add("navbar-expand-lg-transparent-remove");
  } else {
    nav.classList.remove("navbar-expand-lg-transparent-remove");
  }
});

setTimeout(() => {
  let spiner = document.querySelector(".spiner");
  spiner.style.display = "none";
}, 800);
