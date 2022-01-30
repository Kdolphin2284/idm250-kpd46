let works = 'It\'s working let\'s gooo!';

console.log(works);

let hamburger = document.getElementById('hamburger');
let menu = document.getElementById('mobile-navigation');


// if (hamburger.style.position = "absolute") {
//     console.log('hehehe');
// }


hamburger.addEventListener("click", function(){
    menu.style.left = "0";
})