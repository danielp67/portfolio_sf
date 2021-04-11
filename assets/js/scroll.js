

let scrollArray = document.querySelectorAll(".scroll");


function fadeInOnScroll(element) {
    if (!element) {
        return;
    }

    let distanceToTop = window.pageYOffset + element.getBoundingClientRect().top;
    let distanceToBottom = window.pageYOffset - element.getBoundingClientRect().top;
    let elementHeight = element.offsetHeight;
    let scrollTop = document.documentElement.scrollTop;

    let opacity = 0;
    element.style.opacity = opacity;

    if (0 < distanceToBottom) {
        opacity = 1 - (scrollTop - distanceToBottom) / (elementHeight*0.3);
        element.style.opacity = opacity;

    }

    if (scrollTop > distanceToTop+200) {
        opacity = 1 - (scrollTop - distanceToTop) / (elementHeight*1);
        element.style.opacity = opacity;

    }

}

function scrollHandler() {

    scrollArray.forEach( element => fadeInOnScroll(element))

}

window.addEventListener('scroll', scrollHandler);




let scrollArray2 = document.querySelectorAll(".scroll2");


function fadeInOnScroll2(element) {
    if (!element) {
        return;
    }

    let distanceToTop = window.pageYOffset + element.getBoundingClientRect().top;
    let distanceToBottom = window.pageYOffset - element.getBoundingClientRect().top;
    let elementHeight = element.offsetHeight;
    let scrollTop = document.documentElement.scrollTop;

    let opacity = 0;
    element.style.opacity = opacity;

    if (0 < distanceToBottom) {
        opacity = 1 - (scrollTop - distanceToBottom) / (elementHeight*1.7);
        element.style.opacity = opacity;

    }

    if (scrollTop > distanceToTop) {
        opacity = 1 - (scrollTop - distanceToTop) / (elementHeight*1);
        element.style.opacity = opacity;

    }
}


function scrollHandler2() {

    scrollArray2.forEach( element => fadeInOnScroll2(element))
}


window.addEventListener('scroll', scrollHandler2);