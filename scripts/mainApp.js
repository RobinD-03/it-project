/* const sidebar = document.querySelector('.sidebar');
const arrowLeft = document.querySelector('.fa-chevron-left'); */


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

menuButton.addEventListener('click', ()=>{
    if (hiddenMenu.classList.contains('active')) {
        // If the menu is currently visible, hide it
        hiddenMenu.style.animationName = 'slideUp';
        setTimeout(()=>{
            hiddenMenu.classList.remove('active');
        }, 400);
    } else {
        // If the menu is hidden, show it
        hiddenMenu.style.animationName = 'slideDown';
        hiddenMenu.classList.add('active');
    }
})

function open_side() {
    sidebar.classList.add("sidebar-open");
    sidebar.classList.remove('sidebar-close');
    arrowLeft.classList.remove('fa-chevron-left-closing');
}
function close_side() {  
    sidebar.classList.remove('sidebar-open');
    sidebar.classList.add('sidebar-close');
    arrowLeft.classList.add('fa-chevron-left-closing');
}

/* window.addEventListener('DOMContentLoaded', ()=>{

    window.addEventListener("scroll",()=>{
        const navbar = document.querySelector('header');
        if(window.scrollY > 100){
            navbar.style.backgroundColor = "rgba(255, 255, 255, 1)";
        }
        else{
            navbar.style.backgroundColor = "rgba(255, 255, 255, 0.637)";
        }
    }) 
}) */