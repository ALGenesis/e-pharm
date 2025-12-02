
const nav = document.querySelector('header nav')
const menuBurger = document.getElementById('menu-burger')
const menuOpen = document.getElementById('menu-open')
const menuClose = document.getElementById('menu-close')

const toggleMenu = () => {
    nav.classList.toggle('mobile')
    menuClose.classList.toggle('hidden')
    menuOpen.classList.toggle('hidden')
}

menuBurger.addEventListener('click', toggleMenu )
nav.addEventListener('click', toggleMenu)