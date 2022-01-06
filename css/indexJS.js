/*
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
  }
*/
// Light/Dark Mode toggle

function toggleTheme() {
    var themeChange = document.getElementsByTagName("body")[0].getAttribute("class");
    
    if (themeChange.indexOf("dark-theme") > -1) {
        document.body.classList.remove("dark-theme");
        document.getElementById("logoChange").src = "../logos/logoLM.png";
        document.getElementById("dm-li").innerHTML = "<i id='sun-moon' class='fas fa-sun fa-2x'></i>";
        document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";
    }
    else {
        document.body.classList.add('dark-theme');
        document.getElementById("logoChange").src = "../logos/logoDM.png";
        document.getElementById("dm-li").innerHTML = "<i id='sun-moon' class='fas fa-moon fa-2x'></i>";
        document.getElementById("tog-li").innerHTML = "<i id='bars' class='fas fa-bars fa-lg'></i>";
    }
}

// Mobile Menu open menu

$(function() {
    $(".nav_toggle").on("click", function(){
        if($(".nav_items").hasClass("active")) {
            $(".nav_items").removeClass("active");
        }
        else {
            $(".nav_items").addClass("active");
        }
    })
});


//random background image
