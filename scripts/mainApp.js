const sidebar = document.querySelector('.sidebar');
const arrowRight = document.querySelector('.fa-chevron-right');
const closeButton = document.getElementById('side-button')


const menuButton = document.getElementById('menu-icon');
const hiddenMenu = document.getElementById('hidden-menu');

const topButton = document.getElementById('return-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 150) {
        topButton.style.display = 'block';
    } else {
        topButton.style.display = 'none';
    }
});

menuButton.addEventListener('click', () => {
    if (hiddenMenu.classList.contains('ham-menu-closed')) {
        hiddenMenu.classList.remove('ham-menu-closed');
        hiddenMenu.classList.add('ham-menu-opened');
    } else {
        hiddenMenu.classList.remove('ham-menu-opened');
        hiddenMenu.classList.add('ham-menu-closed');
    }
});

function toggle_sidebar(){
    if(sidebar.classList.contains("sidebar-close")){
        sidebar.classList.add("sidebar-open");
        sidebar.classList.remove('sidebar-close');   
        arrowRight.classList.add('fa-chevron-right-closing');
        closeButton.style.transform = 'translateX(12rem)'
    }
    else{
        sidebar.classList.remove('sidebar-open');
        sidebar.classList.add('sidebar-close');
        arrowRight.classList.remove('fa-chevron-right-closing');
        closeButton.style.transform = 'translateX(0rem)'
    }
}