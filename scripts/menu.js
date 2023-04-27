const menuButton = document.querySelector(".menu-button");
const navMenu = document.querySelector(".nav-menu");

menuButton.addEventListener("click", () => {
    menuButton.classList.toggle("active");
    navMenu.classList.toggle("active");
});

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    menuButton.classList.remove("active");
    navMenu.classList.remove("active");
}));