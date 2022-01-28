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
            document.getElementById("graphicRef").classList.add('graphicUrlLM');
            document.getElementById("graphicRef").classList.remove('graphicUrlDM');
            document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";

            document.getElementById("pic1").src = "../pics/SVG/grafics2_picbox1.svg";
            document.getElementById("pic2").src = "../pics/SVG/grafics2_picbox2.svg";
            document.getElementById("pic3").src = "../pics/SVG/grafics2_picbox3.svg";
            document.getElementById("pic4").src = "../pics/SVG/grafics2_picbox4.svg";
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
            document.getElementById("graphicRef").classList.remove('graphicUrlLM');
            document.getElementById("graphicRef").classList.add('graphicUrlDM');

            document.getElementById("pic1").src = "../pics/SVG/grafics2_picbox1dm.svg";
            document.getElementById("pic2").src = "../pics/SVG/grafics2_picbox2dm.svg";
            document.getElementById("pic3").src = "../pics/SVG/grafics2_picbox3dm.svg";
            document.getElementById("pic4").src = "../pics/SVG/grafics2_picbox4dm.svg";
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
    document.getElementById("graphicRef").classList.remove('graphicUrlLM');
    document.getElementById("graphicRef").classList.add('graphicUrlDM');

    document.getElementById("pic1").src = "../pics/SVG/grafics2_picbox1dm.svg";
    document.getElementById("pic2").src = "../pics/SVG/grafics2_picbox2dm.svg";
    document.getElementById("pic3").src = "../pics/SVG/grafics2_picbox3dm.svg";
    document.getElementById("pic4").src = "../pics/SVG/grafics2_picbox4dm.svg";
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


//show active nav position in index
const sections = document.querySelectorAll('section');
const navLi = document.querySelectorAll('nav ul .nav_items li');

window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
            current = section.getAttribute('id');
        }
    })

    navLi.forEach(li => {
        li.classList.remove('activePos');
        if (li.classList.contains(current)) {
            li.classList.add('activePos');
        }
    })
})


//intro picture moves a little while scrolling
var win = $(window);
win.scroll(function () {
    $(".sec_1").css("background-position-y", win.scrollTop() / 2 + "px");
    $(".footb").css("transform", "translateY(580px) rotate(" + win.scrollTop() / 10 + "deg) scale(" + win.scrollTop() / 1500 + ")");
    $(".basketb").css("transform", "translateY(200px) rotate(" + win.scrollTop() / 12 + "deg) scale(" + win.scrollTop() / 1600 + ")");
    $(".volleyb").css("transform", "translateY(150px) rotate(" + win.scrollTop() / 14 + "deg) scale(" + win.scrollTop() / 1700 + ")");
    $(".tennisb").css("transform", "translateY(420px) rotate(" + win.scrollTop() / 15 + "deg) scale(" + win.scrollTop() / 1650 + ")");
    $(".federb").css("transform", "translateY(600px) rotate(" + win.scrollTop() / 14 + "deg) scale(" + win.scrollTop() / 1750 + ")");
})