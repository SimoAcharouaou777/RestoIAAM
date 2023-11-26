
const four = document.querySelector(".four");
const five = document.querySelector(".five");


four.onclick= function() {
    five.classList.remove("active");
}
five.onclick = function() {
    five.classList.add("active");
}
