window.addEventListener("scroll", () => {
  let nav = document.querySelector("header.first-section");
  if (window.scrollY > 50) {
    nav.classList.add("navbar-expand-lg-transparent-remove");
  } else {
    nav.classList.remove("navbar-expand-lg-transparent-remove");

  }
});


const validName = document.getElementById('input-Name');
const validEmail = document.getElementById('input-Email');
const validphoneNumber = document.getElementById('input-phoneNumber');
const validNembers = document.getElementById('input-Nembers');
const validMessage = document.getElementById('input-Message');

const msgvalidName = document.getElementById('msg-valid-Name');
const msgvalidEmail = document.getElementById('msg-valid-Email');
const msgvalidphoneNumber = document.getElementById('input-phoneNumber');
const msgvalidNembers = document.getElementById('input-Nembers');
const msgvalidMessage = document.getElementById('input-Message');