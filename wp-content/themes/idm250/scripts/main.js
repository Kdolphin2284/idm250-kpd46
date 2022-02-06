let works = 'It\'s working let\'s gooo!';

console.log(works);

let hamburger = document.getElementById('hamburger');
let menu = document.getElementById('mobile-navigation');

function noScroll(){
    window.scrollTo(0,0)
}

hamburger.addEventListener("click", function(){
    if (!menu.classList.contains('onScreen')) {
        menu.classList.add('onScreen');
        hamburger.classList.add('closeMenu');
        menu.style.left = "0%";
        menu.style.zIndex = "10";
        window.addEventListener('scroll', noScroll);
    } else {
        menu.classList.remove('onScreen');
        hamburger.classList.remove('closeMenu');
        menu.style.left = "100%";
        menu.style.zIndex = "0";
        window.removeEventListener('scroll', noScroll)
    }
});