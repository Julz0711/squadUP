// Light/Dark Mode toggle    
function toggleTheme() {
    var themeChange = document.getElementsByTagName("body")[0].getAttribute("class");

    if (themeChange.indexOf("dark-theme") > -1) {
        localStorage.setItem('isDarkMode', false);

        if (localStorage.getItem('isDarkMode') === 'false') {
            document.body.classList.remove('dark-theme');
            document.getElementById("dm-li").classList.add('sunV2');
            document.getElementById("dm-li").classList.remove('moonV2');
            document.getElementById("logoChange").classList.add('logoLM');
            document.getElementById("logoChange").classList.remove('logoDM');
            document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";
        }
    }
    else {
        localStorage.setItem('isDarkMode', true);

        if (localStorage.getItem('isDarkMode') === 'true') {
            document.body.classList.add('dark-theme');
            document.getElementById("dm-li").classList.remove('sunV2');
            document.getElementById("dm-li").classList.add('moonV2');
            document.getElementById("logoChange").classList.remove('logoLM');
            document.getElementById("logoChange").classList.add('logoDM');
            document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";
        }
    }
}


//safe darkmode to local storage
if (localStorage.getItem('isDarkMode') === 'true') {
    document.body.classList.add('dark-theme');
    document.getElementById("dm-li").classList.remove('sunV2');
    document.getElementById("dm-li").classList.add('moonV2');
    document.getElementById("logoChange").classList.remove('logoLM');
    document.getElementById("logoChange").classList.add('logoDM');
}



// Slideshow show current Slide 
var slideIndex = 1;
pos(slideIndex);

function nextImg(x) {
    pos(slideIndex += x);
}

function currentImg(x) {
    pos(slideIndex = x);
}
function pos(x) {
    var getSlide = document.getElementsByClassName("slide");
    var posIndicator = document.getElementsByClassName("slide_bar");
    if (x > getSlide.length) {
        slideIndex = 1;
    }
    if (x < 1) {
        slideIndex = getSlide.length;
    }
    for (var i = 0; i < getSlide.length; i++) {
        getSlide[i].style.display = "none";
    }
    for (var i = 0; i < posIndicator.length; i++) {
        posIndicator[i].className = posIndicator[i].className.replace(" slide_active", "");
    }
    getSlide[slideIndex - 1].style.display = "block";
    posIndicator[slideIndex - 1].className += " slide_active";
}


//reload page on last scroll
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}


// Mobile Menu open menu
$(function () {
    $(".nav_toggle").on("click", function () {
        if ($(".nav_items").hasClass("active")) {
            $(".nav_items").removeClass("active");
        }
        else {
            $(".nav_items").addClass("active");
        }
    })
});


//intro picture moves a little while scrolling
var win = $(window);
win.scroll(function () {
    $(".sec_1").css("background-position-y", win.scrollTop() / 4 + "px");
})