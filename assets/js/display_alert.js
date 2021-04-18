

let displayAlert = document.querySelector(".alert");

function alertHidden(element) {
    if (!element) {
        return;
    }
    setTimeout(function(){ displayAlert.classList.add("d-none"); }, 5000);
}


alertHidden(displayAlert)



