let dropdown = document.querySelector('.menu'),
submenu = document.querySelector('.sub-menu'),
buttonclick = document.querySelector('.check-button'),
hamburger = document.querySelector('.menu-icon');

buttonclick.addEventListener('click', () => {
    dropdown.classList.toggle('show-dropdown');
    if(submenu) {
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
})
