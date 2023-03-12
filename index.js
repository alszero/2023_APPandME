const toggleBtn = document.querySelector('.navbar_toogle');
const menu = document.querySelector('.navbar-menu');
const icons = document.querySelector('.menus');

toggleBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
    icons.classList.toggle('active');
});
