//mobile-burger
const burgerIcon = document.querySelector('.burger-icon');
const menu = document.querySelector('.menu-wrap');
const menuBackdrop =document.querySelector('.menu-backdrop');
const body =document.querySelector('body');

burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('animate');
    menu.classList.toggle('show-menu');
    body.classList.toggle('body-overflow');
    menuBackdrop.classList.toggle('menu-backdrop--show')
});
function closeMenuAndReset() {
    burgerIcon.classList.remove('animate');
    menu.classList.remove('show-menu');
    body.classList.remove('body-overflow');
    menuBackdrop.classList.remove('menu-backdrop--show');
}
document.addEventListener('click', (event) => {
    // Проверяем, был ли клик вне элемента .mobile-menu и бургер-иконки
    if (!menu.contains(event.target) && !burgerIcon.contains(event.target)) {
        closeMenuAndReset(); // Закрываем меню и снимаем анимацию
    }
});
const swiper = new Swiper('.swiperMain', {
    autoplay: {
        delay: 12000,
    },
    spaceBetween: 0,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
// Найти все элементы с классом "form-grid"
let formGridElements = document.querySelectorAll('.form-grid');

formGridElements.forEach(function(formGridElement) {
    let brElements = formGridElement.querySelectorAll('br');
    brElements.forEach(function(brElement) {
        brElement.remove();
    });
});