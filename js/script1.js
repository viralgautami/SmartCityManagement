var myNav = document.getElementById('mynav');
window.onscroll = function () { 
    "use strict";
    if (document.body.scrollTop >= 200 ) {
        myNav.classList.add("nav-colored");
        myNav.classList.remove(".nav-brand-style");
    } 
    else {
        myNav.classList.add(".nav-brand-style");
        myNav.classList.remove("nav-colored");
    }
};