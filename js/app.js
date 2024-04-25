//Media querylist creation
const mql = window.matchMedia('(max-width: 850px)');
const menuElement = document.querySelector('.container-contact-container');
const interactiveMapSize = document.querySelector('.interactive-map-container img');
const desktopMenu = `
<div class="header-contact-container">
<div class="icon-contact-container">
    <i class="fa-solid fa-phone"></i>
<p class="copy-contact-container">
    Llámenos lunes a viernes 08:00 a 18:00hrs<br>
    <b>8183737750</b> ó al <b>8183737751</b>
</p>
</div>
<nav class="menu-principal"><ul id="menu-menu-principal" class="menu"><li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-6"><a href="http://localhost/prolimpie/" aria-current="page">Inicio</a></li>
<li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="http://localhost/prolimpie/pedido/">Pedido</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="http://localhost/prolimpie/nosotros/">Nosotros</a></li>
</ul></nav>                </div>
<a class="catalog-btn" href="#">catálogo</a>
`;

const mobileMenu= `
<a class="catalog-btn" href="#">catálogo</a>
<a href="#" class="menu-btn">
    <i class="fa-solid fa-bars"></i>
</a>`;



// Check dimensions state
function CheckDevice(mql) {
    if (mql.matches) {
        menuElement.innerHTML = mobileMenu;
        interactiveMapSize.classList.add('map-mobile-size');
        if(interactiveMapSize.classList.contains=='map-desktop-size'){
            interactiveMapSize.classList.remove('map-desktop-size');
        }
    } else {
        menuElement.innerHTML = desktopMenu;
        interactiveMapSize.classList.add('map-desktop-size');
        if(interactiveMapSize.classList.contains=='map-mobile-size'){
            interactiveMapSize.classList.remove('map-mobile-size');
        }
    }
}

// Ejecutar la función de comprobación al cargar la página
document.addEventListener('DOMContentLoaded', function () {
    CheckDevice(mql);
});

// Ejecutar la función de comprobación al cambiar el tamaño de la ventana
window.addEventListener('resize', function () {
    CheckDevice(mql);
});