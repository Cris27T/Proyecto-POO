/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-burger','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
    /*Active link*/
    navLink.forEach(n => n.classList.remove('active'));
    this.classList.add('active');
    
    /*Remove menu mobile*/
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL login*/
sr.reveal('.login-titulo',{}); 
sr.reveal('.button',{delay: 200}); 
sr.reveal('.login-img',{delay: 400}); 
sr.reveal('.login-download-icon',{ interval: 200}); 


/*SCROLL iniciar-sesion*/
sr.reveal('.iniciar-sesion-input',{interval: 200}); 

/*Mostrar una vez iniciada la sesion*/
function mostrarAcceso(){
    /*dodocument.getElementById('vista-usuario').innerHTML =
    '<a><i class="fas fa-user"></i> {Nombre Usuario}</a>'; */
    document.getElementById('login').style.display = 'none';
    document.getElementById('iniciar-sesion').style.display = 'none';
    document.getElementById('categorias').style.display = 'block';
    document.getElementById('btn-menu-motoristas').style.display = 'none';
    document.getElementById('btn-menu-iniciar-sesion').style.display = 'none';
    document.getElementById('btn-menu-cerrar-sesion').style.display = 'block';
    document.getElementById('pie-de-pagina').style.display = 'none';
    document.getElementById('comidas').style.display = 'none';
    document.getElementById('salud').style.display = 'none';
    document.getElementById('market').style.display = 'none';
}

function mostrarRestaurantes(){
    document.getElementById('categorias').style.display = 'none';
    document.getElementById('comidas').style.display = 'block';
    document.getElementById('pie-de-pagina').style.display = 'none';
    document.getElementById('market').style.display = 'none';
    document.getElementById('salud').style.display = 'none';
    document.getElementById('productos-burger').style.display = 'none';

}

function mostrarFarmacias(){
    document.getElementById('categorias').style.display = 'none';
    document.getElementById('pie-de-pagina').style.display = 'none';
    document.getElementById('salud').style.display = 'block';
    document.getElementById('market').style.display = 'none';
}

function mostrarMarket(){
    document.getElementById('categorias').style.display = 'none';
    document.getElementById('pie-de-pagina').style.display = 'none';
    document.getElementById('market').style.display = 'block';
    document.getElementById('salud').style.display = 'none';
}

function mostrarProductos(){
    document.getElementById('productos-burger').style.display = 'block';
    document.getElementById('comidas').style.display = 'none';


}




