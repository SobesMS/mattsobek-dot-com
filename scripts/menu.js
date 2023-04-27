const menuButton = document.querySelector(".menu-button");
const navMenu = document.querySelector(".nav-menu");
const navLinks = document.querySelectorAll(".nav-link");
const clickOutsideMenu = document.querySelector(".click-outside-menu");

menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active");
    navMenu.classList.toggle("active");
    if (clickOutsideMenu.style.display === "block") {
        clickOutsideMenu.style.display = "none";
    } else {
        clickOutsideMenu.style.display = "block";
    }
});

navLinks.forEach(n => n.addEventListener("click", () => {
    menuButton.classList.remove("active");
    navMenu.classList.remove("active");
    clickOutsideMenu.style.display = "none";
}));

clickOutsideMenu.addEventListener("click", () => {
    menuButton.classList.remove("active");
    navMenu.classList.remove("active");
    clickOutsideMenu.style.display = "none";
});