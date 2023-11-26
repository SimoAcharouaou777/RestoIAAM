
// navbar change when scrool

window.addEventListener("scroll", () => {
  let nav = document.querySelector("header.first-section");
  if (window.scrollY > 50) {
    nav.classList.add("navbar-expand-lg-transparent-remove");
  } else {
    nav.classList.remove("navbar-expand-lg-transparent-remove");

  }
});

// Card image icons displays when click
let click = document.querySelectorAll('.clickicon img');
let media = document.querySelectorAll('.PersonSocialMedia .socialmediaicons');

for (let i = 0; i < click.length; i++) {
  click[i].addEventListener('click', function () {
    if (media[i].style.display === "none") {
      media[i].style.display = "flex"
    } else {
      media[i].style.display = "none"
    }
  });
}


  

















