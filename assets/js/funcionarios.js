document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById('menu');
    const sideMenu = document.getElementById('side_menu');

    menuButton.addEventListener('click', (event) => {
        event.stopPropagation(); 
        sideMenu.classList.toggle('show');
    });

    sideMenu.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    document.addEventListener('click', () => {
        sideMenu.classList.remove('show');
    });
});
