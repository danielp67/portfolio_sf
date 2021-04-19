

let project = document.getElementById("project");
let skill = document.getElementById("skill");
let aboutMe = document.getElementById("about-me");
let contact = document.getElementById("contact");

let itemProject = document.querySelector("a[href^=\"#project\"]")
let itemSkill = document.querySelector("a[href^=\"#skill\"]")
let itemAboutMe = document.querySelector("a[href^=\"#about-me\"]")
let itemContact = document.querySelector("a[href^=\"#contact\"]")


function fadeInOnScroll(element, item) {
    if (!element) {
        return;
    }

    //console.log( element.scrollHeight, element.getBoundingClientRect().top)
    if (100 >= element.getBoundingClientRect().top || item.onmouseover) {
        item.style.color = "#ffffff";
    }

    if (0 >= element.scrollHeight + element.getBoundingClientRect().top || 0 <= element.getBoundingClientRect().top) {
        item.style.color = "#aaa";
    }


    item.addEventListener("mouseover", function( event ) {
        // on met l'accent sur la cible de mouseover
        event.target.style.color = "#ffffff";

        // on réinitialise la couleur après quelques instants
        setTimeout(function() {
            event.target.style.color = "";
        }, 500);
    }, false);
}

function scrollHandler() {
    fadeInOnScroll(project, itemProject)
    fadeInOnScroll(skill, itemSkill)
    fadeInOnScroll(aboutMe, itemAboutMe)
    fadeInOnScroll(contact, itemContact)
}



window.addEventListener('scroll', scrollHandler);


