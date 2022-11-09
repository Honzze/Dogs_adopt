console.log("JS Load");

const Burger = document.querySelector(".menu-collapsed");
const Ul = document.querySelector(".Collapse-Menu");
const ResponsiveMenu = document.querySelector(".menu-collapsed");

Burger.addEventListener('click', () => {
    Burger.classList.toggle("menu-expanded");
    Ul.classList.toggle("hidden");
})


window.addEventListener('resize', () => {
    window.innerWidth < 700 ? ResponsiveMenu.classList.remove('hidden') : ResponsiveMenu.classList.add('hidden');
});



