

let scrollFab = document.getElementById("floating-button");

function fadeInOnScroll(element) {
    if (!element) {
        return;
    }

    let distanceToBottom = window.pageYOffset - element.getBoundingClientRect().top;
    let opacity = 0;
    element.style.opacity = opacity.toString();

    if (0 < distanceToBottom) {
        opacity = 1;
        element.style.opacity = opacity.toString();
    }

}

function scrollHandler() {

fadeInOnScroll(scrollFab)

}

window.addEventListener('scroll', scrollHandler);


